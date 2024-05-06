<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#<?php echo e($advising->id); ?> - <?php echo e($advising->year); ?></title>
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
        <h1><?php echo e(env('APP_NAME')); ?> University Dashboard</h1>
        <h2>#<?php echo e($advising->id); ?> - <?php echo e($advising->year); ?></h2>
        </center>
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Student Information</h2>
                <div class="card-text">
                    <p><strong>Name:</strong> <?php echo e($student->first_name); ?> <?php echo e($student->middle_name); ?> <?php echo e($student->last_name); ?></p>
                    <p><strong>Student ID:</strong> <?php echo e($student->id); ?></p>
                    <p><strong>Email:</strong> <?php echo e($student->email); ?></p>
                    <p><strong>Level:</strong> <?php echo e($student->level); ?></p>
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
                        <?php $__currentLoopData = $advising->courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($course->course->code); ?></td>
                            <td><?php echo e($course->course->name); ?></td>
                            <td><?php echo e($course->course->professor->name); ?></td>
                            <td><?php echo e(rand(1,2)); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
        <footer align="center">
            <p>Powered by <?php echo e(env('APP_NAME')); ?></p>
            <p>Contact: advising@cis.edu</p>
            <p>&copy; <?php echo e(date('Y')); ?> <?php echo e(env('APP_NAME')); ?>. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
<?php /**PATH E:\xampp\htdocs\ac\resources\views/dashboard/student/advising/view.blade.php ENDPATH**/ ?>