
<?php $__env->startSection('title', 'Marks'); ?>
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
                   <li class="active">Marks</li>
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
               <div class="tab-pane active" id="mark">
                <?php if($courses): ?>
                <div style="border-top:1px solid #23292F; border-left:1px solid #23292F; border-right:1px solid #23292F; border-bottom:1px solid #23292F;" class="box" id="e1">
                   <div class="box-header" style="background-color:#FFFFFF;">
                      <h3 class="box-title" style="color:#23292F;">Semester <?php echo e($advising->semester); ?> </h3>
                   </div>
                   <div class="box-body mark-bodyID mCustomScrollbar _mCS_1 mCS_no_scrollbar" style="border-top:1px solid #23292F;">
                      <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_horizontal mCSB_inside" style="max-height: none;" tabindex="0">
                         <div id="mCSB_1_container" class="mCSB_container mCS_x_hidden mCS_no_scrollbar_x" style="position: relative; top: 0px; left: 0px; width: 100%;" dir="ltr">
                            <table class="table table-striped table-bordered">
                               <thead>
                                  <tr>
                                     <th class="text-center" rowspan="2" style="background-color:#395C7F;color:#fff;" data-title="Subject">Subject</th>
                                     <th colspan="2" class="text-center" style="background-color:#395C7F;color:#fff;" data-title="Exam">Exam</th>
                                     <th colspan="2" class="text-center" style="background-color:#395C7F;color:#fff;" data-title="Attendance">Attendance</th>
                                     <th colspan="2" class="text-center" style="background-color:#395C7F;color:#fff;" data-title="Class Test">Class Test</th>
                                     <th colspan="2" class="text-center" style="background-color:#395C7F;color:#fff;" data-title="Assignment">Assignment</th>
                                     <th colspan="3" class="text-center " style="background-color:#395C7F;color:#fff;" data-title="Total">Total</th>
                                  </tr>
                                  <tr>
                                     <th class="text-center" data-title="Obtained Mark">Obtained Mark</th>
                                     <th class="text-center" data-title="Highest Mark">Highest Mark</th>
                                     <th class="text-center" data-title="Obtained Mark">Obtained Mark</th>
                                     <th class="text-center" data-title="Highest Mark">Highest Mark</th>
                                     <th class="text-center" data-title="Obtained Mark">Obtained Mark</th>
                                     <th class="text-center" data-title="Highest Mark">Highest Mark</th>
                                     <th class="text-center" data-title="Obtained Mark">Obtained Mark</th>
                                     <th class="text-center" data-title="Highest Mark">Highest Mark</th>
                                     <th class="text-center" data-title="Mark">Mark</th>
                                     <th class="text-center" data-title="Point">Point</th>
                                     <th class="text-center" data-title="Grade">Grade</th>
                                  </tr>
                               </thead>
                               <tbody>
                                <?php
                                $myGrades = 0;
                                $count = $courses->count();
                                $total_gpa_in_marks = 0;
                                ?>
                                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                $myGrades += $course->grade;
                                $total_gpa_in_marks += $course->mark;
                                ?>
                                  <tr>
                                     <td class="text-black" data-title="Subject"><?php echo e($course->course->name); ?></td>
                                     <td class="text-black" data-title="Mark"><?php echo e($course->grade-35); ?></td>
                                     <td class="text-black" data-title="Highest Mark">65</td>
                                     <td class="text-black" data-title="Mark">8</td>
                                     <td class="text-black" data-title="Highest Mark">8</td>
                                     <td class="text-black" data-title="Mark">8</td>
                                     <td class="text-black" data-title="Highest Mark">8</td>
                                     <td class="text-black" data-title="Mark">8</td>
                                     <td class="text-black" data-title="Highest Mark">8</td>
                                     <td class="text-black" data-title="Mark"><?php echo e($course->grade); ?></td>
                                     <td class="text-black" data-title="Point">5.00</td>
                                     <td class="text-black" data-title="Grade"><?php echo e($course->grade_of_mark); ?></td>
                                  </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                               </tbody>
                            </table>
                            <?php if($count > 0): ?>
                            <div class="box-footer" style="padding-left:0px;">
                               <p class="text-black">Total Marks : <span class="text-red text-bold"><?php echo e(number_format($count * 100,2)); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;Total Obtained Marks : <span class="text-red text-bold"><?php echo e(number_format($myGrades,2)); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;Total Average Marks : <span class="text-red text-bold"><?php echo e(number_format($myGrades/$count,2)); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;Total Average Marks() : <span class="text-red text-bold"><?php echo e(number_format($total_gpa_in_marks/$count,2)); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;Gpa : <span class="text-red text-bold"><?php echo e(number_format($student->gpa,2)); ?></span></p>
                            </div>
                            <?php endif; ?>


                         </div>
                         <div id="mCSB_1_scrollbar_horizontal" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_horizontal" style="display: none;">
                            <div class="mCSB_draggerContainer">
                               <div id="mCSB_1_dragger_horizontal" class="mCSB_dragger" style="position: absolute; min-width: 30px; display: block; width: 0px; left: 0px;">
                                  <div class="mCSB_dragger_bar"></div>
                               </div>
                               <div class="mCSB_draggerRail"></div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <?php else: ?>
                <div class="box" >
                    <div class="box-header" style="background-color:#FFFFFF;">
                       <h3 class="box-title"  style="color:#23292F;">No Mark Found</h3>
                    </div>
                 </div>
                <?php endif; ?>
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

           </div>
       </div>
   </section>
</aside>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<style>

</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.student.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\ac\resources\views/dashboard/student/advising/marks.blade.php ENDPATH**/ ?>