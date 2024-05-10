
<?php $__env->startSection('title', 'Advisings'); ?>
<?php $__env->startSection('content'); ?>
<aside class="right-side">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title"><i class="fa icon-assignment"></i> Advisings</h3>
                  <ol class="breadcrumb">
                     <li><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa fa-laptop"></i> Dashboard</a></li>
                     <li class="active">Advisings</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-sm-12">
                        <h5 class="page-header">
                           <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Add Advising')): ?>
                           <a href="<?php echo e(route('admin.advising.create')); ?>">
                           <i class="fa fa-plus"></i>
                           Create Advising                                 
                           </a>
                           <?php endif; ?>
                           <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12 pull-right drop-marg">
                              <select class="form-control " name="level_id" id="level_id">
                              <option value="">Select Level</option>
                              <option value="1">Level 1</option>
                              <option value="2">Level 2</option>
                              <option value="3">Level 3</option>
                              <option value="4">Level 4</option>
                              <select>
                           </div>
                        </h5>
                        <div class="nav-tabs-custom">
                           <ul class="nav nav-tabs">
                              <li class="active"><a data-toggle="tab" href="#all" aria-expanded="true">All Advisings</a></li>
                           </ul>
                           <div class="tab-content">
                              <div id="all" class="tab-pane active">
                                 <div id="hide-table">
                                    <table id="myTable" class="display" style="width:100%">
                                       <thead>
                                          <tr>
                                             <th>Id</th>
                                             <th>Student Name</th>
                                             <th>Level</th>
                                             <th>Semster </th>
                                             <th>Year</th>
                                             <td>Status</td>
                                             <td>Created By</td>
                                             <th>Created At</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php $__currentLoopData = $advisings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advising): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <tr id="id-<?php echo e($advising->id); ?>">
                                             <td><?php echo e($advising->id); ?></td>
                                             <td><?php echo e($advising->student->id); ?> - <?php echo e($advising->student->first_name); ?> <?php echo e($advising->student->last_name); ?></td>
                                             <td><?php echo e($advising->level); ?></td>
                                             <td><?php echo e($advising->semster); ?></td>
                                             <td><?php echo e($advising->year); ?></td>
                                             <td>
                                                <?php if($advising->status == "active"): ?>
                                                <span class="label label-primary">Active</span>
                                                <?php else: ?>
                                                <span class="label label-success">Completed</span>
                                                <?php endif; ?>
                                             <td><?php echo e($advising->admin->name); ?></td>
                                             <td><?php echo e($advising->created_at); ?></td>
                                             <td>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('View Advisings')): ?>
                                                <a class="btn btn-info btn-sm" href="<?php echo e(route('admin.advising.show', $advising->id)); ?>" target="_blank" ><i class="fa fa-eye"></i></a>
                                                <?php endif; ?>
                                                <?php if($advising->status == "active"): ?>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Edit Advising')): ?>
                                                <a class="btn btn-success btn-sm" href="<?php echo e(route('admin.advising.edit', $advising->id)); ?>"><i class="fa fa-edit"></i></a>
                                                <?php endif; ?>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Delete Advising')): ?>
                                                <a class="btn btn-danger btn-sm" onclick="deleteRow(<?php echo e($advising->id); ?>)"><i class="fa fa-trash"></i></a>
                                                <?php endif; ?>
                                                <?php endif; ?>
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
   $(".select2").select2();
   
   $('#myTable').DataTable();

   $('#level_id').on('change', function() {
    var level_id = $(this).val();

    return window.location.href = "<?php echo e(route('admin.advising.index')); ?>/" + level_id;

   });
   
   function deleteRow(id){
   
   swal({
   
   title: "Are you want to delete this advising?",   
   
   type: "warning",
   
   showCancelButton: true,
   
   confirmButtonColor: "#DD6B55",
   
   confirmButtonText: "Delete",
   
   cancelButtonText: "Cancel",
   
   closeOnConfirm: false
   
   }, function (isConfirm) {
   
   if (!isConfirm) return;
   
   $.ajax({
   
   url: "<?php echo e(route('admin.advising.delete')); ?>",
   
   type: "post",
   
   data: {
   
       id: id,
       '_token':'<?php echo e(csrf_token()); ?>'
   },
   
   dataType: "json",
   
   success: function (response) {
   
     if(response.status){
      swal(response.message,response.message2,"success");
   
     $("#id-" +id).remove();
   
     }else{
         swal(response.message,response.message2,"error");
     }
      
   
   },
   
   error: function (xhr, ajaxOptions, thrownError) {
      
      swal("Error deleting!", "Please try again", "error");
      
   }
   
   });
   
   });
   }
   
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\ac\resources\views/dashboard/admin/advising/index.blade.php ENDPATH**/ ?>