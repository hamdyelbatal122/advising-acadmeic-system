
<?php $__env->startSection('title', 'My Courses'); ?>
<?php $__env->startSection('content'); ?>
<aside class="right-side">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title"><i class="fa icon-subject"></i> My Courses</h3>
                  <ol class="breadcrumb">
                     <li><a href="<?php echo e(route('student.home')); ?>"><i class="fa fa-laptop"></i> Dashboard</a></li>
                     <li class="active">My Courses</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-sm-12">

                        <div class="nav-tabs-custom">
                           <ul class="nav nav-tabs">
                              <li class="active"><a data-toggle="tab" href="#all" aria-expanded="true"> My Courses</a></li>
                           </ul>
                           <div class="tab-content">
                              <div id="all" class="tab-pane active">
                                 <div id="hide-table">
                                    <table id="myTable" class="display" style="width:100%">
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Course Code</th>
                                             <th>Course Name</th>
                                             <th>Professor</th>
                                             <th>Credit Hours</th>
                                             <th>Lab</th>
                                             <th>Grade</th>
                                             <th>Pass Mark</th>
                                             <th>Type</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          
                                          <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <tr id="id-<?php echo e($course->id); ?>">
                                             <td><?php echo e($loop->iteration); ?></td>
                                             <td><?php echo e($course->course->code); ?></td>
                                             <td><?php echo e($course->course->name); ?></td>
                                             <td><?php echo e($course->course->professor->name); ?></td>
                                             <td><?php echo e($course->course->hours); ?></td>
                                             <td><?php if($course->course->lab == 1): ?> Yes <?php else: ?> No <?php endif; ?></td>
                                             <td>100</td>
                                             <td>50</td>
                                             <td>
                                                <button type="button" class="btn btn-primary btn-xs">Mandatory</button>
                                             </td>
                                          </tr>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- nav-tabs-custom -->
                     </div>
                     <!-- col-sm-12 -->
                  </div>
                  <!-- row -->
               </div>
               <!-- Body -->
            </div>
            <!-- /.box -->
         </div>
      </div>
   </section>
</aside>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script type="text/javascript">
   
   $('#myTable').DataTable();
   

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.student.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\ac\resources\views/dashboard/student/courses/index.blade.php ENDPATH**/ ?>