<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form - {{env('APP_NAME')}}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding-top: 50px; /* Space for fixed navbar */
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .card {
            margin-bottom: 20px;
        }
        .card-title {
            color: #0d3b66;
            border-bottom: 1px solid #0d3b66;
            padding-bottom: 5px;
        }
        .signature {
            font-style: italic;
            font-weight: bold;
            font-family: 'Sacramento', cursive; /* Handwritten font */
            font-size: 24px;
        }
        .university-name {
            font-size: 34px;
            color: #0d3b66;
            /* margin-bottom: 20px; */
            font-weight: bold;
            text-align: center;
            text-transform: uppercase;
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            color: #0d3b66;
            font-size: 14px;
        }
        .signature-head {
            font-style: italic;
            font-weight: bold;
        }

        .stamp {
            position: absolute;
            padding: 0.25rem 1rem;
            text-transform: uppercase;
            font-family: "Courier", monospace;
            color: #555;
            border: 0.25rem solid #555;
            border-radius: 1rem;
            -webkit-mask-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/8399/grunge.png");
            -webkit-mask-size: 944px 604px;
            mix-blend-mode: multiply;
        }

        .is-approved {
        font-size: 3rem;
        font-weight: 700;
        top: 655px;
        left: 470px;
        position: absolute;
        color: #0A9928;
        border: 0.5rem solid #0A9928;
        transform: rotate(0deg);
        border-radius: 0;
        }

        .is-nope {
        font-size: 3rem;
        font-weight: 700;
        top: 760px;
        left: 340px;
        color: #D23;
        border: 0.5rem double #D23;
        transform: rotate(0deg);
        font-size: 2rem;  
        }

        .university {
        font-size: 2rem;
        font-weight: 700;
        top: 200px;
        left: 650px;
        color: #4238d6;
        /* transform: rotate(0deg); */
        writing-mode: vertical-rl;
        border: 0.5rem solid #4238d6;
            
        }
        

    </style>
    <!-- Link the handwriting font -->
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <p class="university-name text-center">{{env('APP_NAME')}}</p>
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center">Admission Form - # {{$student->id}}</h2>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">First Name</th>
                                <td>{{$student->first_name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Middle Name</th>
                                <td>{{$student->middle_name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Last Name</th>
                                <td>{{$student->last_name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td>{{$student->email}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nationality</th>
                                <td>{{$student->nationality}}</td>
                            </tr>
                            <tr>
                                <th scope="row">National ID</th>
                                <td>{{$student->national_id}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Gender</th>
                                <td>{{$student->gender}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Date of Birth</th>
                                <td>{{$student->birth}}</td>
                            </tr>     
                            <tr>
                                <th scope="row">Blood Type</th>
                                <td>{{$student->blood}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Religion</th>
                                <td>{{$student->religion}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Phone</th>
                                <td>{{$student->phone}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Address</th>
                                <td>{{$student->address}}</td>
                            </tr>
                            <tr>
                                <th scope="row">College</th>
                                <td>{{$student->college}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Level</th>
                                <td>{{$student->level}}</td>
                            </tr>
                            <tr>
                                <th scope="row">GPA</th>
                                <td>{{$student->gpa}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <span class="stamp university">{{env('APP_NAME')}}<b style="font-size:18px "> - {{$student->created_at}}</b></span>
                <span class="stamp is-approved">Approved</span>
                @if(Request::is('dashboard/academic/admission/form/view'))
                <span class="stamp is-nope">Unofficial Document</span>
                @endif
                
            </div>
        </div>
    </div>
    <footer class="footer">
        <p class="text-center">Viewed on: {{ date('Y-m-d H:i:s') }}</p>
        <p class="signature-head">Manager's Signature</p>
        <p class="signature text-center">{{$student->admin->full_name}}</p>
    </footer>
</body>
</html>
