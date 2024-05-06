<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form - <?php echo e(env('APP_NAME')); ?></title>
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
            font-size: 24px;
            color: #0d3b66;
            margin-bottom: 20px;
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
    </style>
    <!-- Link the handwriting font -->
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center">Admission Form - # <?php echo e($student->id); ?></h2>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">First Name</th>
                                <td><?php echo e($student->first_name); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Middle Name</th>
                                <td><?php echo e($student->middle_name); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Last Name</th>
                                <td><?php echo e($student->last_name); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td><?php echo e($student->email); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Nationality</th>
                                <td><?php echo e($student->nationality); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">National ID</th>
                                <td><?php echo e($student->national_id); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Gender</th>
                                <td><?php echo e($student->gender); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Date of Birth</th>
                                <td><?php echo e($student->birth); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Blood Type</th>
                                <td><?php echo e($student->blood); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Religion</th>
                                <td><?php echo e($student->religion); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Phone</th>
                                <td><?php echo e($student->phone); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Address</th>
                                <td><?php echo e($student->address); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">College</th>
                                <td><?php echo e($student->college); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Level</th>
                                <td><?php echo e($student->level); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">GPA</th>
                                <td><?php echo e($student->gpa); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <p class="university-name text-center"><?php echo e(env('APP_NAME')); ?></p>
    </div>
    <footer class="footer">
        <p class="text-center">Viewed on: <?php echo e(date('Y-m-d H:i:s')); ?></p>
        <p class="signature-head">Manager's Signature</p>
        <p class="signature-head">Professor Engineer</p>
        <p class="signature text-center">Ahmed Nasr</p>
    </footer>
</body>
</html>
<?php /**PATH E:\xampp\htdocs\ac\resources\views/dashboard/student/admission/view.blade.php ENDPATH**/ ?>