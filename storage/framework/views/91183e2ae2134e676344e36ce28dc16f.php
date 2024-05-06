
<?php $__env->startSection('title', 'Exam Schedules'); ?>
<?php $__env->startSection('content'); ?>
<aside class="right-side">
   <section class="content">
      <div class="row">
      <div class="col-xs-12">
         <div class="well">
            <div class="row">
               <div class="col-sm-6">
                  <button class="btn-cs btn-sm-cs" onclick="javascript:printDiv('printablediv')"><span class="fa fa-print"></span> Print </button>
                  <button class="btn-cs btn-sm-cs" data-toggle="modal" data-target="#mail"><i class="fa-regular fa-envelope"></i> Send PDF To Mail</button>
               </div>
               <div class="col-sm-6">
                  <ol class="breadcrumb">
                     <li><a href="<?php echo e(route('student.home')); ?>"><i class="fa fa-laptop"></i> Dashboard</a></li>
                     <li><a href="<?php echo e(route('student.courses.index')); ?>">Courses</a></li>
                     <li class="active">Exam Schedules</li>
                  </ol>
               </div>
            </div>
         </div>
         <div id="printablediv">
            <div class="row">
               <div class="col-sm-3">
                  <div class="box box-primary">
                     <div class="box-body box-profile">
                        <center>
                           <img src="<?php echo e(asset('assets/images/default.png')); ?>" class="profile-user-img img-responsive img-circle" alt="">  
                        </center>
                        <h3 class="profile-username text-center">
                           <?php echo e($student->first_name); ?> <?php echo e($student->middle_name); ?> <?php echo e($student->last_name); ?>   
                        </h3>
                        <p class="text-muted text-center">Student</p>
                        <ul class="list-group list-group-unbordered">
                           <li class="list-group-item" style="background-color: #FFF">
                              <b>Register NO</b> <a class="pull-right">
                              <?php echo e($student->id); ?>

                              </a>
                           </li>
                           <li class="list-group-item" style="background-color: #FFF">
                              <b>College</b> <a class="pull-right">
                              <?php echo e($student->college); ?>

                              </a>
                           </li>
                           <li class="list-group-item" style="background-color: #FFF">
                              <b>Level</b> <a class="pull-right">
                              <?php echo e($student->level); ?>

                              </a>
                           </li>
                           <li class="list-group-item" style="background-color: #FFF">
                              <b>Section</b> <a class="pull-right">A</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-sm-9">
                  <div class="nav-tabs-custom">
                     <ul class="nav nav-tabs">
                        <li class="active"><a href="#routine" data-toggle="tab">Routine</a></li>
                     </ul>
                     <div class="tab-pane" id="routine">
                    <div class="container">
                        <br>
                        <div class="table-responsive">
                           <table class="table table-bordered table-responsive">
                              <thead>
                                 <tr>
                                    <th class="text-center">Course</th>
                                    <th class="text-center">Exam Date</th>
                                    <th class="text-center">Lab Of Exam</th>
                                 </tr>
                              </thead>
                              <tbody align="center">
                                 <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <tr>
                                    <td style=" padding-top : 20px;"align="center" >
                                       <h5>
                                       <?php echo e($course->course->name); ?> 
                                       <h5>
                                       <b><?php echo e($course->course->code); ?></b>
                                    </td>
                                    <td class="text-center">
                                       <p style="margin: 0 0 1px">
                                        <?php if($course->course->exam_date): ?>
                                        <?php echo e($course->course->exam_date); ?>

                                        <?php else: ?>
                                        Not Set
                                        <?php endif; ?>
                                       </p>

                                    </td>
                                    <td class="text-center">
                                        <p style="margin: 0 0 1px">
                                        Class <?php echo e(rand(1, 10)); ?>

                                        </p>
                                    </td>
                                 </tr>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                 <?php if(count($courses) == 0): ?>
                                 <tr>
                                     <td colspan="3">No Course Found In Your Advising Form , Stay tuned for Advising Start</td>
                                 </tr>
                                 <?php endif; ?>

                              </tbody>
                           </table>
                        </div>
                      </div>
                     </div>
                  </div>
               </div>
            </div>
            <form class="form-horizontal" role="form" action="" method="post">
               <div class="modal fade" id="mail">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                           <h4 class="modal-title">Send Pdf to Mail</h4>
                        </div>
                        <div class="modal-body">
                           <div class="form-group">
                              <label for="to" class="col-sm-2 control-label">
                              To <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <input type="email" class="form-control" id="to" name="to" value="">
                              </div>
                              <span class="col-sm-4 control-label" id="to_error">
                              </span>
                           </div>
                           <div class="form-group">
                              <label for="subject" class="col-sm-2 control-label">
                              Subject <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="subject" name="subject" value="">
                              </div>
                              <span class="col-sm-4 control-label" id="subject_error">
                              </span>
                           </div>
                           <div class="form-group">
                              <label for="message" class="col-sm-2 control-label">
                              Message                            </label>
                              <div class="col-sm-6">
                                 <textarea class="form-control" id="message" style="resize: vertical;" name="message" value=""></textarea>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-default" style="margin-bottom:0px;" data-dismiss="modal">Close</button>
                           <input type="button" id="send_pdf" class="btn btn-success" value="Send">
                        </div>
                     </div>
                  </div>
               </div>
            </form>
            <script language="javascript" type="text/javascript">
               function printDiv(divID) {
                   var divElements = document.getElementById(divID).innerHTML;
                   var oldPage     = document.body.innerHTML;
                   document.body.innerHTML = "<html><head><title></title></head><body>" + divElements + "</body>";
                   window.print();
                   document.body.innerHTML = oldPage;
                   window.location.reload();
               }
               
               
               
            </script>
         </div>
      </div>
   </section>
</aside>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.student.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\ac\resources\views/dashboard/student/advising/exams.blade.php ENDPATH**/ ?>