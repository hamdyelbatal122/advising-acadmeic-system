
<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>

         <aside class="right-side">
            <section class="content">
               <div class="row">
                  <div class="col-xs-12">
                     <div class="row">

                        

                        <div class="col-lg-3 col-xs-6">
                           <div class="small-box ">
                              <a class="small-box-footer bg-orange-dark" href="#">
                                 <div class="icon bg-orange-dark" style="padding: 9.5px 18px 6px 18px;">
                                    <i class="fa icon-teacher"></i>
                                 </div>
                                 <div class="inner ">
                                    <h3 class="text-white">
                                       0                          
                                    </h3>
                                    <p class="text-white">
                                       Supervisors                            
                                    </p>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                           <div class="small-box ">
                              <a class="small-box-footer bg-teal-light" href="<?php echo e(route('student.courses.index')); ?>">
                                 <div class="icon bg-teal-light" style="padding: 9.5px 18px 6px 18px;">
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
                        <div class="col-lg-3 col-xs-6">
                           <div class="small-box ">
                              <a class="small-box-footer bg-pink-light" href="<?php echo e(route('student.notices.index')); ?>">
                                 <div class="icon bg-pink-light" style="padding: 9.5px 18px 6px 18px;">
                                    <i class="fa icon-message"></i>
                                    
                                 </div>
                                 <div class="inner ">
                                    <h3 class="text-white">
                                       <?php echo e($student->notices->count()); ?>                            
                                    </h3>
                                    <p class="text-white">
                                       Notices                            
                                    </p>
                                 </div>
                              </a>
                           </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                           <div class="small-box ">
                              <a class="small-box-footer bg-purple-light" href="#">
                                 <div class="icon bg-purple-light" style="padding: 9.5px 18px 6px 18px;">
                                    <i class="fa icon-invoice"></i>
                                 </div>
                                 <div class="inner ">
                                    <h3 class="text-white">
                                       1                            
                                    </h3>
                                    <p class="text-white">
                                       Invoice                            
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
                                 <a href="profile/index">
                                 <img src="<?php echo e(asset('assets/images/default.png')); ?>" alt="">
                                 </a>
                                 <h1><?php echo e($student->first_name .' '.$student->middle_name  .' '.$student->last_name); ?></h1>
                                 <p>Student</p>
                              </div>
                              <table class="table table-hover">
                                 <tbody>
                                    <tr>
                                       <td>
                                          <i class="glyphicon glyphicon-user text-maroon-light"></i>
                                       </td>
                                       <td>Name</td>
                                       <td><?php echo e($student->first_name .' '.$student->last_name); ?></td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <i class="fa fa-envelope text-maroon-light"></i>
                                       </td>
                                       <td>Email</td>
                                       <td><?php echo e($student->email); ?></td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <i class="fa-solid fa-graduation-cap text-maroon-light"></i>
                                       </td>
                                       <td>college</td>
                                       <td><?php echo e($student->college); ?></td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <i class=" fa-solid fa-university text-maroon-light"></i>
                                       </td>
                                       <td>level</td>
                                       <td>Level <?php echo e($student->level); ?></td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <i class="fa-solid fa-code-branch text-maroon-light"></i>
                                       </td>
                                       <td>Semester</td>
                                       <td><?php if($student->activeAdvising): ?> Semester <?php echo e($student->activeAdvising->semester); ?> <?php endif; ?></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </section>
                        </div>
                        <div class="col-sm-8">
                           <div class="box">
                              <div class="box-body" style="padding: 0px;height: 320px">
                                 <div class="box">
                                    <div class="box-header" style="background-color: #fff;">
                                       <h3 class="box-title text-black">
                                          Latest Notices            
                                       </h3>
                                    </div>
                                    <div class="box-body" style="padding: 0px;">
                                       <table class="table table-hover">
                                          <table class="table table-hover">
                                             <tbody>
                                             <?php $__currentLoopData = $notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                   <td><?php echo e($notice->subject); ?></td>
                                                   <td><?php echo e($notice->title); ?></td>
                                                   <td><a href="<?php echo e(route('student.notices.show', $notice->id)); ?>" class="btn bg-maroon-light btn-xs mrg" style="background-color:#00bcd4;color:#fff;" data-placement="top" data-toggle="tooltip" data-original-title="View"><span class="fa-solid fa-square-check"></span></a></td>
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
                  
                  </div>
               </div>
            </section>
         </aside>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.student.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\ac\resources\views/dashboard/student/home.blade.php ENDPATH**/ ?>