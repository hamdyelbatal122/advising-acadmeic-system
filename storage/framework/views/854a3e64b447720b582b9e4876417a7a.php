
<!DOCTYPE html>
<html lang="en">

<head>
    <!--=====================================
                META-TAG PART START
    =======================================-->
    <!-- REQUIRED META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $__env->yieldContent('title'); ?>
    </title>
    <!-- FAVICON -->
    <link rel="SHORTCUT ICON" href="<?php echo e(asset('assets/images/fav.png')); ?>">
    <!-- FONTS -->

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/opensans.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">

    <!-- CUSTOM -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/login.css')); ?>">
    <!--=====================================
                CSS LINK PART END
    =======================================-->
</head>

<body> 

    <?php echo $__env->yieldContent('content'); ?>

</body>

</html><?php /**PATH E:\xampp\htdocs\ac\resources\views/dashboard/student/layouts/app-auth.blade.php ENDPATH**/ ?>