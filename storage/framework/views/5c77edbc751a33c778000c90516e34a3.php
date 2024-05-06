
<?php $__env->startSection('title', 'Notices'); ?>
<?php $__env->startSection('content'); ?>
<aside class="right-side">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title"><i class="fa icon-envelope"></i> Notices</h3>
                  <ol class="breadcrumb">
                     <li><a href="<?php echo e(route('student.home')); ?>"><i class="fa fa-laptop"></i> Dashboard</a></li>
                     <li class="active">Notices</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-sm-12">
                        <h5 class="page-header">
                           <a href="<?php echo e(route('student.notices.create')); ?>">
                           <i class="fa fa-plus"></i>
                           Add a Notice                                
                           </a>
                        </h5>
                        <div class="nav-tabs-custom">
                           <ul class="nav nav-tabs">
                              <li class="active"><a data-toggle="tab" href="#all" aria-expanded="true">All Notices</a></li>
                           </ul>
                           <div class="tab-content">
                              <div id="all" class="tab-pane active">
                                 <div id="hide-table">
                                    <table id="myTable" class="display" style="width:100%">
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Name</th>
                                             <th>Status</th>
                                             <th>Subject</th>
                                             <th>title</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php $__currentLoopData = $notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <tr id="id-<?php echo e($notice->id); ?>">
                                             <td><?php echo e($loop->iteration); ?></td>
                                             <td><?php echo e($notice->student->id); ?> - <?php echo e($notice->student->first_name); ?> <?php echo e($notice->student->last_name); ?></td>
                                            <td>
                                                <?php if($notice->status == "active"): ?>
                                                <span class="label label-success">Active</span>
                                                <?php else: ?>
                                                <span class="label label-danger">Closed</span>
                                                <?php endif; ?>
                                             <td><?php echo e($notice->subject); ?></td>
                                             <td><?php echo e($notice->title); ?></td>
                                             <td>
                                                <a class="btn btn-success btn-sm" href="<?php echo e(route('student.notices.show', $notice->id)); ?>"><i class="fa fa-eye"></i></a>
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
<?php echo $__env->make('dashboard.student.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\ac\resources\views/dashboard/student//notices/index.blade.php ENDPATH**/ ?>