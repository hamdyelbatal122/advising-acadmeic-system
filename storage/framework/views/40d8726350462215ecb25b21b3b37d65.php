
<?php $__env->startSection('title', 'Professors'); ?>
<?php $__env->startSection('content'); ?>
<section class="teacher-part">
   <div class="container">
      <div class="teacher-content">
         <h1 class="section-page-title">Our Professors</h1>
         <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            <?php $__currentLoopData = $professors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $professor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
               <div class="teacher-card">
                  <div class="teacher-media">
                     <img class="teacher-avater" src="<?php echo e($professor->image); ?>">
                     <div class="teacher-overlay">
                        <a target="_blank" href="#" class="lab-fill-facebook-round"></a>
                        <a target="_blank" href="#" class="lab-fill-twitter-round"></a>
                        <a target="_blank" href="#" class="lab-fill-linkedin-round"></a>
                     </div>
                  </div>
                  <div class="teacher-meta">
                     <h3><?php echo e($professor->full_name); ?></h3>
                     <p><?php echo e($professor->profession); ?></p>
                  </div>
               </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
      </div>
   </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/professors.css')); ?>">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\ac\resources\views/site/professors.blade.php ENDPATH**/ ?>