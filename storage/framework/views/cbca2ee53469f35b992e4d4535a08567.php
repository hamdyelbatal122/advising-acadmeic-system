 
   
   <?php $__env->startSection('title', 'Login'); ?>
   <?php $__env->startSection('content'); ?>
   <!--=====================================
                LOGIN PART START   
    =======================================-->
    <section class="login">
        <div class="login-group">
           <div class="login-content">
    <h3>welcome back!</h3>
    <p>Please login to your account</p> 
 
    <form class="login-form" method="post" action="<?php echo e(route('student.login.post')); ?>"> 
        <?php echo csrf_field(); ?>

        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger " role="alert">
            <?php echo e($message); ?>

        </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


         
        <div class="form-group">
            <label class="form-label required">Email</label>
            <input class="form-control" placeholder="Email" name="email" type="email" autofocus value="<?php echo e(old('email')); ?>">
        </div>
        <div class="form-group">
            <label class="form-label required">Password</label>
            <input class="form-control" placeholder="Password" name="password" type="password">
        </div>
        <div class="checkbox d-flex align-items-center justify-content-between">
            <label class="mb-2">
                <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                <span> &nbsp; Remember Me</span>
            </label>
            <span class="pull-right">
                <label>
                    <a class="mb-2 forgotPass" href=""> Forgot Password?</a>
                </label>
            </span>
        </div>
        
        <button type="submit" class="btn btn-inline">sign in</button>
    </form>

    </div>


<div class="login-banner">
    <img src="https://demo.school.inilabs.xyz/frontend/default/assets/images/login.jpg" alt="login">
    <div>
        <blockquote>“Education is the most powerful weapon which can use to change the world.”</blockquote>
        <label>--Nelson Mandela</label>
    </div>
</div>           
           
        </div>
    </section>
    <!--=====================================   
                LOGIN PART END   
    =======================================-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.student.layouts.app-auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\ac\resources\views/dashboard/student/auth/login.blade.php ENDPATH**/ ?>