
<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<aside class="right-side">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="row">
               
               <div class="col-lg-3 col-xs-6">
                  <div class="small-box ">
                     <a class="small-box-footer bg-orange-dark" href="<?php echo e(route('admin.students.index')); ?>">
                        <div class="icon bg-orange-dark" style="padding: 9.5px 18px 6px 18px;">
                           <i class="fa icon-student"></i>
                        </div>
                        <div class="inner ">
                           <h3 class="text-white">
                              <?php echo e($students); ?>                            
                           </h3>
                           <p class="text-white">
                              Students                            
                           </p>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 col-xs-6">
                  <div class="small-box ">
                     <a class="small-box-footer bg-teal-light" href="<?php echo e(route('admin.users.index')); ?>">
                        <div class="icon bg-teal-light" style="padding: 9.5px 18px 6px 18px;">
                           <i class="fa fa-user"></i>
                        </div>
                        <div class="inner ">
                           <h3 class="text-white">
                              <?php echo e($users); ?>                            
                           </h3>
                           <p class="text-white">
                              Users                            
                           </p>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 col-xs-6">
                  <div class="small-box ">
                     <a class="small-box-footer bg-pink-light" href="<?php echo e(route('admin.notices.index')); ?>">
                        <div class="icon bg-pink-light" style="padding: 9.5px 18px 6px 18px;">
                           <i class="fa icon-message"></i>
                        </div>
                        <div class="inner ">
                           <h3 class="text-white">
                              <?php echo e($notices); ?>                            
                           </h3>
                           <p class="text-white">
                            Active Notices                            
                           </p>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 col-xs-6">
                  <div class="small-box ">
                     <a class="small-box-footer bg-purple-light" href="<?php echo e(route('admin.courses.index')); ?>">
                        <div class="icon bg-purple-light" style="padding: 9.5px 18px 6px 18px;">
                           <i class="fa icon-subject"></i>
                        </div>
                        <div class="inner ">
                           <h3 class="text-white">
                              <?php echo e($courses); ?>                            
                           </h3>
                           <p class="text-white">
                              Courses                            
                           </p>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-4">
                  <section class="panel">
                     <div class="profile-db-head bg-maroon-light">
                        <a href="">
                        <img src="<?php echo e(asset('assets/images/defult1.png')); ?>" alt="">            </a>
                        <h1>
                           <?php echo e($admin->name); ?>

                        </h1>
                        <p>Admin</p>
                     </div>
                     <table class="table table-hover">
                        <tbody>
                           <tr>
                              <td>
                                 <i class="glyphicon glyphicon-user text-maroon-light"></i>
                              </td>
                              <td>Name</td>
                              <td><?php echo e($admin->name); ?></td>
                           </tr>
                           <tr>
                              <td>
                                 <i class="fa fa-envelope text-maroon-light"></i>
                              </td>
                              <td>Email</td>
                              <td><?php echo e($admin->email); ?></td>
                           </tr>
                           <tr>
                              <td>
                                 <i class="fa-solid fa-user-tie text-maroon-light"></i>
                              </td>
                              <td>Profession</td>
                              <td><?php echo e($admin->profession); ?></td>
                           </tr>

                        </tbody>
                     </table>
                  </section>
               </div>
               <div class="col-sm-8">
                  <div class="box">
                     <div class="box-header" style="background-color: #fff;">
                        <h3 class="box-title text-black">
                           Last Active Notes             
                        </h3>
                     </div>
                     <div class="box-body" style="padding: 0px;">
                        <table class="table table-hover">
                           <tbody>
                           <?php $__currentLoopData = $lastNotices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                 <td><?php echo e($notice->student->id); ?> - <?php echo e($notice->student->first_name); ?> <?php echo e($notice->student->last_name); ?></td>
                                 <td><?php echo e($notice->subject); ?></td>
                                 <td><?php echo e($notice->title); ?></td>
                                 <td><a href="<?php echo e(route('admin.notices.show', $notice->id)); ?>" class="btn bg-maroon-light btn-xs mrg" style="background-color:#00bcd4;color:#fff;" data-placement="top" data-toggle="tooltip" data-original-title="View"><span class="fa-solid fa-square-check"></span></a></td>
                              </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</aside>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\ac\resources\views/dashboard/admin/home.blade.php ENDPATH**/ ?>