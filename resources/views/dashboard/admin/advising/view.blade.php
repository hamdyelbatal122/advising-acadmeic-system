<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>#{{$advising->id}} - {{$advising->year}}</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    @media print {
        /* Hide non-essential elements */
        header, footer, .no-print {
            display: none;
        }
        /* Adjust layout for printing */
        body {
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    }
</style>
</head>
<body>
    <header class="no-print">
        <!-- Header content -->
    </header>
    <main>
        <div class="container">
            <h2 align="center">{{env('APP_NAME')}} Advising System</h2>
            <h2 align="center">#{{$advising->id}} - {{$advising->year}}</h2>
            <h4 class="mt-5">Student Information</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-title">Student Details</h2>
                            <p class="card-text"><strong>Name :</strong> {{$student->first_name}} {{$student->middle_name}} {{$student->last_name}}
                            <p class="card-text"><strong>Student ID :</strong> {{$student->id}}</p>
                            <p class="card-text"><strong>Email :</strong> {{$student->email}}</p>
                            <p class="card-text"><strong>Level :</strong> {{$student->level}}</p>
                            <!-- Add more student details here -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Registered Course</h2>
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Course Code</th>
                                        <th>Course Name</th>
                                        <th>Professor</th>
                                        <th>Groupe</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($advising->courses as $course)
                                <tr>
                                    <td>{{$course->course->code}}</td>
                                    <td>{{$course->course->name}}</td>
                                    <td>{{$course->course->professor->name}}</td>
                                    <td>{{rand(1,5)}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="no-print">
        <!-- Footer content -->
    </footer>
</body>
</html>
