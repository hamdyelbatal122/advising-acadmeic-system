<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#{{$advising->id}} - {{$advising->year}}</title>
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
    </style>
</head>
<body>
    <div class="container">
        <center>
        <h1>{{env('APP_NAME')}} University Dashboard</h1>
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
        <footer align="center">
            <p>Powered by {{env('APP_NAME')}}</p>
            <p>Contact: advising@cis.edu</p>
            <p>&copy; {{date('Y')}} {{env('APP_NAME')}}. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
