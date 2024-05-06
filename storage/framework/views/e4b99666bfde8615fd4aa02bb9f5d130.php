
<?php $__env->startSection('title', 'Edit Marks'); ?>
<?php $__env->startSection('content'); ?>
<aside class="right-side">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title"><i class="fa icon-subject"></i>Edit Marks</h3>
                  <ol class="breadcrumb">
                     <li><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa fa-laptop"></i> Dashboard</a></li>
                     <li><a href="<?php echo e(route('admin.advising.index')); ?>">Advising</a></li>
                     <li class="active">Edit Marks</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-sm-10">
                        <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" id="add" >
                           <?php echo csrf_field(); ?>
                           <input type="hidden" name="advising_id" id="advising_id" value="<?php echo e($advising->id); ?>">

                           <div class="form-group">
                              <label for="name_id" class="col-sm-2 control-label">
                              Student <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <select class="form-control " name="student_id" id="student_id" readonly>
                                    <option value="<?php echo e($student->id); ?>"><?php echo e($student->id); ?> -  <?php echo e($student->first_name); ?> <?php echo e($student->middle_name); ?> <?php echo e($student->last_name); ?> - Level <?php echo e($student->level); ?></option>
                                 </select>
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="name_id" class="col-sm-2 control-label">
                              Semester <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <select class="form-control" name="semester" id="semester" readonly > 
                                    <option value="<?php echo e($advising->semester); ?>">Semester <?php echo e($advising->semester); ?> </option>

                                 </select>
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>
                           <br>

                           <div class="form-group">
                              <h5 for="name_id" class="col-sm-offset-5 col-sm-12 ">
                                 Mark Of Courses Of This Semester
                              </h5>
                              <br>
                              <br>
                              <div class="col-sm-offset-1 col-sm-12">
                                 <table class="table table-bordered" id="table">
                                    <thead>
                                       <tr>
                                          <th>Course</th>
                                          <th>Code</th>
                                          <th>Crade</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <tr id="course-<?php echo e($course->course->id); ?>">
                                          <td><?php echo e($course->course->name); ?></td>
                                          <td><?php echo e($course->course->code); ?></td>
                                          <td><input class="form-control" type="hidden" name="course[<?php echo e($course->course->id); ?>]" value="<?php echo e($course->course->id); ?>"><input class="form-control" type="text" name="grade[<?php echo e($course->course->id); ?>]" value="<?php echo e($course->grade); ?>" required ></td>
                                       </tr>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <br><br>

                           

                           <div class="form-group">
                              <div class="col-sm-offset-6 col-sm-12">
                                 <input type="submit" class="btn btn-success" value="Update Form">
                              </div>
                           </div>
                        </form>

                        

                     </div>
                     <!-- col-sm-8 -->
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
   $( ".select2" ).select2();

   $('#add').submit(function(e) {

      e.preventDefault();

$.ajax({

  url: "<?php echo e(route('admin.marks.update')); ?>",

  type: "POST",

  data: new FormData(this),
  

  dataType:  'json',

  contentType: false,

  cache: false,

  processData:false,
  

  success: function(response) {

    if(response.status){

    toastr.success(response.message);    



    }else{
         
               toastr.error(response.message);
    } 

  },
  error: function(response){
          $.each(response.responseJSON.errors, function (key, item) 
          {
            toastr.error(item);

          });
  },

 });

   });




</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\ac\resources\views/dashboard/admin/marks/edit.blade.php ENDPATH**/ ?>