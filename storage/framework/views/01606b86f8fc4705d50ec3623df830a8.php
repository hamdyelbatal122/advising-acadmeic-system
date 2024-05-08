
<?php $__env->startSection('title', 'Students'); ?>
<?php $__env->startSection('content'); ?>
<aside class="right-side">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title"><i class="fa icon-student"></i> Students</h3>
                  <ol class="breadcrumb">
                     <li><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa fa-laptop"></i> Dashboard</a></li>
                     <li class="active">Students</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-sm-12">
                        <h5 class="page-header">
                           <a href="<?php echo e(route('admin.students.create')); ?>">
                           <i class="fa fa-plus"></i>
                           Add a Student                                
                           </a>
                        </h5>
                        <div class="nav-tabs-custom">
                           <ul class="nav nav-tabs">
                              <li class="active"><a data-toggle="tab" href="#all" aria-expanded="true">All Students</a></li>
                           </ul>
                           <div class="tab-content">
                              <div id="all" class="tab-pane active">
                                 <div id="hide-table">
                                    <table id="myTable" class="display" style="width:100%">
                                       <thead>
                                          <tr>
                                             <th>Id</th>
                                             <th>Name</th>
                                             <th>National Id</th>
                                             <th>College</th>
                                             <th>Level</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <tr id="id-<?php echo e($student->id); ?>">
                                             <td><?php echo e($student->id); ?></td>
                                             <td><?php echo e($student->first_name.' '.$student->middle_name.' '.$student->last_name); ?></td>
                                             <td><?php echo e($student->national_id); ?></td>
                                             <td><?php echo e($student->college); ?></td>
                                             <td><?php echo e($student->level); ?></td>
                                             <td>
                                                <a class="btn btn-primary btn-sm" href="<?php echo e(route('admin.students.view', $student->id)); ?>"><i class="fa fa-eye"></i></a>
                                                <a class="btn btn-success btn-sm" href="<?php echo e(route('admin.students.edit', $student->id)); ?>"><i class="fa fa-edit"></i></a>
                                                <a class="btn btn-danger btn-sm" onclick="deleteRow(<?php echo e($student->id); ?>)"><i class="fa fa-trash"></i></a>
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
   
   function deleteRow(id){
   
   swal({
   
   title: "Are you want to delete this student?",   
   
   type: "warning",
   
   showCancelButton: true,
   
   confirmButtonColor: "#DD6B55",
   
   confirmButtonText: "Delete",
   
   cancelButtonText: "Cancel",
   
   closeOnConfirm: false
   
   }, function (isConfirm) {
   
   if (!isConfirm) return;
   
   $.ajax({
   
   url: "<?php echo e(route('admin.students.delete')); ?>",
   
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
<?php echo $__env->make('dashboard.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\ac\resources\views/dashboard/admin/students/index.blade.php ENDPATH**/ ?>