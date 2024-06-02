<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advising - #{{$advising->id}} - {{$advising->year}}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        h1, h2, h3 {
            margin-top: 0;
            color: #333;
        }
        .card {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .card-body {
            padding: 20px;
        }
        .card-title {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        .card-text {
            margin-bottom: 10px;
            color: #666;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        .signature-head {
            font-style: italic;
            font-weight: bold;
        }
        .signature {
            font-style: italic;
            font-weight: bold;
            font-family: 'Sacramento', cursive; /* Handwritten font */
            font-size: 24px;
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            color: #0d3b66;
            font-size: 14px;
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
        top: 260px;
        left: 960px;
        position: absolute;
        color: #0A9928;
        border: 0.5rem solid #0A9928;
        transform: rotate(0deg);
        border-radius: 0;
        }

        .is-nope {
        font-size: 3rem;
        font-weight: 700;
        top: 280px;
        left: 810px;
        color: #D23;
        border: 0.5rem double #D23;
        transform: rotate(0deg);
        font-size: 2rem;  
        }

        .university {
        font-size: 2rem;
        font-weight: 700;
        top: 160px;
        left: 800px;
        color: #4238d6;
        transform: rotate(0deg);
        /* writing-mode: vertical-rl; */
        border: 0.5rem solid #4238d6;
            
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <center>
        <h1>{{env('APP_NAME')}} Advising System</h1>
        <h2>#{{$advising->id}} - {{$advising->year}}</h2>
        </center>
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Student Information</h2>
                <div class="card-text">
                    <p><strong>Name:</strong> {{$student->first_name}} {{$student->middle_name}} {{$student->last_name}}</p>
                    <p><strong>Student ID:</strong> {{$student->id}}</p>
                    <p><strong>Email:</strong> {{$student->email}}</p>
                    <p><strong>Level:</strong> {{$student->level}}</p>
                    <p><strong>Semester:</strong> {{$advising->semester}}</p>

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Registered Courses</h2>
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Course Code</th>
                            <th>Course Name</th>
                            <th>Professor</th>
                            <th>Group</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($advising->courses as $course)
                        <tr>
                            <td>{{$course->course->code}}</td>
                            <td>{{$course->course->name}}</td>
                            <td>{{$course->course->professor->name}}</td>
                            <td>{{rand(1,2)}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <span class="stamp university">{{env('APP_NAME')}}<b style="font-size:18px "> - {{$advising->created_at}}</b></span>
        {{-- <span class="stamp is-approved">Approved</span> --}}
        @if(Request::is('dashboard/academic/advising/*'))
        <span class="stamp is-nope">Unofficial Document</span>
        @endif
        <footer align="center">
            <p>Powered by {{env('APP_NAME')}}</p>
            <p class="signature-head">Manager's Signature</p>
            <p class="signature text-center">{{$student->admin->full_name}}</p>
            <p>Contact: advising@cis.edu</p>
        </footer>
    </div>
</body>
</html>
