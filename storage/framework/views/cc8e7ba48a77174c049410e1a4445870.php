
<?php $__env->startSection('title', 'My Profile'); ?>
<?php $__env->startSection('content'); ?>
<aside class="right-side">
   <section class="content">
      <div class="row">
      <div class="col-xs-12">
         <div class="well">
            <div class="row">
               <div class="col-sm-6">
                  <button class="btn-cs btn-sm-cs" onclick="printDiv('printablediv')"><span class="fa fa-print"></span> Print </button>
                  <button class="btn-cs btn-sm-cs" data-toggle="modal" data-target="#mail"><i class="fa-regular fa-envelope"></i> Send PDF To Mail</button>
                  <?php if($student->activeAdvising): ?>
                  <a href="<?php echo e(route('student.advising.print',$student->activeAdvising)); ?>"><button class="btn-cs btn-sm-cs"><i class="fa-solid fa-paperclip"></i> My Advising</button></a>
                  <?php endif; ?>
               </div>
               <div class="col-sm-6">
                  <ol class="breadcrumb">
                     <li><a href="<?php echo e(route('student.home')); ?>"><i class="fa fa-laptop"></i> Dashboard</a></li>
                     <li class="active">Profile</li>
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
                           <?php if($student->activeAdvising): ?>
                           <li class="list-group-item" style="background-color: #FFF">
                              <b>Semester</b> <a class="pull-right">
                                   <?php echo e($student->activeAdvising->semester); ?>

                              </a>
                           </li>
                           <?php endif; ?>
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
                        <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                        <li class=""><a href="#routine" data-toggle="tab">Routine</a></li>
                        <li class=""><a href="#examschedules" data-toggle="tab">Exam Schedule</a></li>
                        <li class=""><a href="#mark" data-toggle="tab">Mark</a></li>
                        <li><a href="#document" data-toggle="tab">Documents</a></li>
                     </ul>
                     <div class="tab-content">
                        <div class="tab-pane active" id="profile">
                           <div class="panel-body profile-view-dis">
                              <div class="row">
                                 <div class="profile-view-tab">
                                    <p><span>Full Name </span>: 
                                       <?php echo e($student->first_name); ?> <?php echo e($student->middle_name); ?> <?php echo e($student->last_name); ?>

                                    </p>
                                 </div>
                                 <div class="profile-view-tab">
                                    <p><span>Full Address </span>: 
                                       <?php echo e($student->address); ?>

                                    </p>
                                 </div>
                                 <div class="profile-view-tab">
                                    <p><span>Date of Birth </span>: 
                                       <?php echo e($student->birth); ?>

                                    </p>
                                 </div>
                                 <div class="profile-view-tab">
                                    <p><span>Gender </span>: 
                                       <?php echo e($student->gender); ?>

                                    </p>
                                 </div>
                                 <div class="profile-view-tab">
                                    <p><span>Blood Group </span>: 
                                       <?php echo e($student->blood); ?>

                                    </p>
                                 </div>
                                 <div class="profile-view-tab">
                                    <p><span>Religion </span>: 
                                       <?php echo e($student->religion); ?>

                                    </p>
                                 </div>
                                 <div class="profile-view-tab">
                                    <p><span>Email </span>: 
                                       <?php echo e($student->email); ?>

                                    </p>
                                 </div>
                                 <div class="profile-view-tab">
                                    <p><span>Phone </span>: 
                                       <?php echo e($student->phone); ?>

                                    </p>
                                 </div>
                                 <div class="profile-view-tab">
                                    <p><span>Nationality </span>: 
                                       <?php echo e($student->nationality); ?>

                                    </p>
                                 </div>
                                 <div class="profile-view-tab">
                                    <p><span>GPA </span>: 
                                       <?php echo e($student->gpa); ?>

                                    </p>
                                 </div>
                                 <div class="profile-view-tab">
                                    <p><span>Username </span>: 
                                       <?php echo e($student->first_name); ?> <?php echo e($student->last_name); ?>

                                    </p>
                                 </div>
                                 <div class="profile-view-tab">
                                    <p><span>Admission Date </span>: 
                                       <?php echo e($student->created_at); ?>

                                    </p>
                                 </div>
                                 <div class="profile-view-tab">
                                    <p><span>Supervisor </span>:</p>
                                 </div>
                                 <div class="profile-view-tab">
                                    <p><span>Currant Advising </span>: 
                                       <?php if($activeAdvising): ?>
                                       <a href="<?php echo e(route('student.advising.print',$activeAdvising->id)); ?>"> 
                                       <button class="btn-cs btn-sm-cs">View </button>
                                       </a>
                                       <?php endif; ?>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane" id="routine">
                          
                              <br>
                              <div class="table-responsive">
                                  <table class="table table-bordered table-sm">
                                      <thead class="thead-light">
                                          <tr>
                                              <th class="text-center">Course</th>
                                              <th class="text-center">Lecture</th>
                                              <th class="text-center">Lab</th>
                                          </tr>
                                      </thead>
                                      <tbody align="center" style="padding-top: 10px">
                                          <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <tr>
                                              <td>
                                                  <h4><?php echo e($course->course->name); ?></h4>
                                                  <b><?php echo e($course->course->code); ?></b>
                                              </td>
                                              <td>
                                                  <p><strong>Day:</strong> <?php echo e($course->course->day_of_lecture); ?></p>
                                                  <p><strong>Time:</strong> <?php echo e($course->course->time_of_lecture); ?> - <?php echo e($course->course->end_of_lecture); ?></p>
                                                  <p><strong>Professor:</strong> <?php echo e($course->course->professor->name); ?></p>
                                              </td>
                                              <td>
                                                <?php if($course->course->lab): ?>
                                                <p><strong>Day:</strong> <?php echo e($course->course->day_of_lab); ?></p>
                                                <p><strong>Time:</strong> <?php echo e($course->course->time_of_lab); ?> - <?php echo e($course->course->end_of_lab); ?></p>
                                                <p><strong>Professor:</strong> <?php echo e($course->course->professor->name); ?></p>
                                                <?php else: ?>
                                                  <p>N/A</p>
                                                  <?php endif; ?>
                                              </td>
                                          </tr>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          <?php if(count($courses) == 0): ?>
                                          <tr>
                                              <td colspan="3">No Course Found In Your Advising , Stay tuned for Advising Start</td>
                                          </tr>
                                          <?php endif; ?>

                                      </tbody>
                                  </table>
                              </div>
                          
                        </div>
                        
                        <div class="tab-pane" id="examschedules">
                           
                              <br>
                              <div class="table-responsive">
                                 <table class="table table-bordered table-sm">
                                    <thead class="thead-light">
                                       <tr>
                                          <th class="text-center">Course</th>
                                          <th class="text-center">Lecture</th>
                                          <th class="text-center">Lab</th>
                                       </tr>
                                    </thead>
                                    <tbody align="center" style="padding-top: 10px">
                                       <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <tr>
                                          <td>
                                             <h4><?php echo e($course->course->name); ?></h4>
                                             <b><?php echo e($course->course->code); ?></b>
                                          </td>
                                          <td>
                                             <p><strong>Day:</strong> <?php echo e($course->course->day_of_lecture); ?></p>
                                             <p><strong>Time:</strong> <?php echo e($course->course->time_of_lecture); ?> - <?php echo e($course->course->end_of_lecture); ?></p>
                                             <p><strong>Professor:</strong> <?php echo e($course->course->professor->name); ?></p>
                                          </td>
                                          <td>
                                             <?php if($course->course->lab): ?>
                                             <p><strong>Day:</strong> <?php echo e($course->course->day_of_lab); ?></p>
                                             <p><strong>Time:</strong> <?php echo e($course->course->time_of_lab); ?> - <?php echo e($course->course->end_of_lab); ?></p>
                                             <p><strong>Professor:</strong> <?php echo e($course->course->professor->name); ?></p>
                                             <?php else: ?>
                                             <p>N/A</p>
                                             <?php endif; ?>
                                          </td>
                                       </tr>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       <?php if(count($courses) == 0): ?>
                                       <tr>
                                          <td colspan="3">No Course Found In Student Advising , Stay tuned for Advising Start</td>
                                       </tr>
                                       <?php endif; ?>
                                    </tbody>
                                 </table>
                              </div>
                           
                        </div>
                        <div class="tab-pane " id="mark">
                           <?php if($lastAdvisingMarks): ?>
                           <div style="border-top:1px solid #23292F; border-left:1px solid #23292F; border-right:1px solid #23292F; border-bottom:1px solid #23292F;" class="box" id="e1">
                              <div class="box-header" style="background-color:#FFFFFF;">
                                 <h3 class="box-title" style="color:#23292F;">Semester <?php echo e($student->lastAdvising->semester); ?></h3>
                              </div>
                              <div class="box-body mark-bodyID" style="border-top:1px solid #23292F;">
                                 <div class="" style="max-height: none;" tabindex="0">
                                    <div style="position: relative; top: 0px; left: 0px; width: 100%;" dir="ltr">
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
                                          
                                           $count = $lastAdvisingMarks->count();
                                           $total_gpa_in_marks = 0;

                                           ?>
                                           <?php $__currentLoopData = $lastAdvisingMarks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                          <p class="text-black">Total Marks : <span class="text-red text-bold"><?php echo e(number_format($count * 100,2)); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;Total Obtained Marks : <span class="text-red text-bold"><?php echo e(number_format($myGrades,2)); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;Total Average Marks : <span class="text-red text-bold"><?php echo e(number_format($myGrades/$count,2)); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;Semester GPA : <span class="text-red text-bold"><?php echo e(number_format($total_gpa_in_marks/$count,2)); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;Semester Grade : <span class="text-red text-bold"><?php echo e(App\Models\Mark::calculateSemesterGrade($myGrades,$count)); ?></span></p>
                                       </div>
                                       <?php endif; ?>
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
                        <div class="tab-pane" id="document">
                           <div id="hide-table">
                              <table class="table table-striped table-bordered table-hover">
                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       <th>Title</th>
                                       <th>Date</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td><?php echo e($student->id); ?></td>
                                       <td>Admission Form</td>
                                       <td><?php echo e($student->created_at); ?></td>
                                       <td>
                                          <a href="<?php echo e(route('student.admission.print')); ?>" >
                                          <button class="btn-cs btn-sm-cs">view</button>
                                          </a>
                                       </td>
                                    </tr>

                                       <?php $__currentLoopData = $student->advising; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advising): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <tr>
                                       </td>
                                       <td><?php echo e($advising->id); ?></td>
                                       <td>Advising Level <?php echo e($advising->level); ?> - Semester <?php echo e($advising->semester); ?> -<?php echo e($advising->year); ?> <?php if($advising->status == 'active'): ?> 
                                          <span class="label label-success">Active</span>
                                          <?php endif; ?>
                                       </td>
                                       <td><?php echo e($advising->created_at); ?></td>
                                       <td>
                                          <a href="<?php echo e(route('student.advising.print',$advising->id)); ?>" >
                                          <button class="btn-cs btn-sm-cs">view</button>
                                          </a>
                                       </td>
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
            <form class="form-horizontal" role="form" action="" method="post">
               <div class="modal fade" id="mail">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                           <h4 class="modal-title">Send PDF To Mail</h4>
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
                              Message                        </label>
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
            <!-- email end here -->
         </div>
      </div>
   </section>
</aside>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('assets/js/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
<script language="javascript" type="text/javascript">
   function printDiv(divID) {
       //Get the HTML of div
       var divElements = document.getElementById(divID).innerHTML;
       //Get the HTML of whole page
       var oldPage = document.body.innerHTML;
   
       //Reset the page's HTML with div's HTML only
       document.body.innerHTML =
         "<html><head><title></title></head><body>" +
         divElements + "</body>";
   
       //Print Page
       window.print();
   
       //Restore orignal HTML
       document.body.innerHTML = oldPage;
       window.location.reload();
   }
   
   $(".mark-bodyID").mCustomScrollbar({
            axis:"x",
            theme:"light-3",
            autoHideScrollbar: true,

        });

</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/jquery.mCustomScrollbar.css')); ?>">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.student.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\ac\resources\views/dashboard/student/profile/index.blade.php ENDPATH**/ ?>