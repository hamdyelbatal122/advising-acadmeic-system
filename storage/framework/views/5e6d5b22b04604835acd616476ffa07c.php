
<?php $__env->startSection('title', 'Edit User'); ?>
<?php $__env->startSection('content'); ?>
<aside class="right-side">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title"><i class="fa icon-teacher"></i> Users</h3>
                  <ol class="breadcrumb">
                     <li><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa fa-laptop"></i> Dashboard</a></li>
                     <li><a href="<?php echo e(route('admin.users.index')); ?>">Users</a></li>
                     <li class="active">Edit User</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-sm-10">
                        <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" id="edit" >
                           <?php echo csrf_field(); ?>
                           <input type="hidden" name="id" value="<?php echo e($user->id); ?>">

                           <div class="form-group">
                              <label for="name_id" class="col-sm-2 control-label">
                              Name <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="name_id" name="name"  placeholder="Name" value="<?php echo e($user->name); ?>">
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="name_id" class="col-sm-2 control-label">
                              Full Name <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="full_name" name="full_name"  placeholder="Full Name" value="<?php echo e($user->full_name); ?>">
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="email" class="col-sm-2 control-label">
                              Email <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <input type="email" class="form-control" id="email" name="email"  placeholder="Email" value="<?php echo e($user->email); ?>">
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="password" class="col-sm-2 control-label">
                              Password 
                              </label>
                              <div class="col-sm-6">
                                 <input type="password" class="form-control" id="password" name="password"  placeholder="Password">
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="profession" class="col-sm-2 control-label">
                              Profession <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="profession" name="profession"  placeholder="Profession" value="<?php echo e($user->profession); ?>">
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="role" class="col-sm-2 control-label">
                              Role <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <select class="form-control " name="role_name" id="role_name">
                                    <option value=""> Chose A Role </option>
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($role->name); ?>" <?php if($user->hasRole($role->name)): ?>selected <?php endif; ?>><?php echo e($role->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </select>
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="image" class="col-sm-2 control-label">
                              Image 
                              </label>
                              <div class="col-sm-6">
                                 <input type="file" class="form-control" id="image" name="image"  placeholder="image">
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-8">
                                 <input type="submit" class="btn btn-success" value="Edit User">
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

   $('#edit').submit(function(e) {

      e.preventDefault();

$.ajax({

  url: "<?php echo e(route('admin.users.update')); ?>",

  type: "POST",

  data:  new FormData(this),

  dataType:  'json',

  contentType: false,

  cache: false,

  processData:false,
  

  success: function(response) {

    if(response.status){

            toastr.success(response.message);      

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
<?php echo $__env->make('dashboard.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\ac\resources\views/dashboard/admin/users/edit.blade.php ENDPATH**/ ?>