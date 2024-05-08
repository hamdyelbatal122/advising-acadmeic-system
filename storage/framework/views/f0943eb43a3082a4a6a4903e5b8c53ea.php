
<?php $__env->startSection('title', 'Create Roles'); ?>
<?php $__env->startSection('content'); ?>
<aside class="right-side">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title"><i class="fa icon-permission"></i> Roles & Permissions </h3>
                  <ol class="breadcrumb">
                     <li><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa fa-laptop"></i> Dashboard</a></li>
                     <li class="active">Roles & Permissions</li>
                     <li class="active">Create Role</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
               <form action="" class="form-horizontal" role="form" method="post" id="add">
                  <?php echo csrf_field(); ?>
                  <div class="form-group">
                     <label for="name_id" class="col-sm-2 control-label">
                     Role Name <span class="text-red">*</span>
                     </label>
                     <div class="col-sm-6">
                        <input type="text" class="form-control" id="name" name="name"  placeholder="Role Name" >
                     </div>
                     <span class="col-sm-4 control-label">
                     </span>
                  </div>
                  <!-- row -->
                  <div class="row">
                     <div class="col-sm-12">
                              <table id="" class="table table-striped table-bordered table-hover dataTable no-footer">
                                 <thead >
                                    <tr>
                                       <th class="col-lg-3"><center>Permession Name </center></th>
                                       <th class="col-lg-1"><center>View</center></th>
                                       <th class="col-lg-1"><center>Add</center></th>
                                       <th class="col-lg-1"><center>Edit</center></th>
                                       <th class="col-lg-1"><center>Delete</center></th>
                                    </tr>
                                 </thead>
                                 <tbody align="center">

                                    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=> $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <?php if($index==0): ?>
                                    <td>
                                      <?php echo e($value->key); ?>

                                    </td>
                                    <?php endif; ?>
  
                                    <td>
                                       <input type="checkbox" name="permission[]" value="<?php echo e($value->name); ?>" class="name">
                                       <?php echo e($value->name); ?></label>
                                    </td>
                                    <?php if($index < $permissions->count()-1 ): ?>
                                    <?php if( $permissions[$index+1]->key !== $value->key): ?>
                                  </tr>
                                  <tr>
                                    <td>
                                      <?php echo e($permissions[$index+1]->key); ?>

                                    </td>
                                    <?php endif; ?>
                                    <?php endif; ?>
  
            
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                 </tbody>
                              </table>
                              <br>
                     <div class="col-sm-12">
                        <div class="form-group">
                           <div class="col-sm-offset-6 col-sm-12">
                              <input type="submit" class="btn btn-success" value="Create Role">
                           </div>
                        </div>
                     </div>

                     </div>
                  </div>
               </form>

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
<script>

$('#add').submit(function(e) {
   
   e.preventDefault();

$.ajax({

url: "<?php echo e(route('admin.roles.store')); ?>",

type: "POST",

data:  new FormData(this),

dataType:  'json',

contentType: false,

cache: false,

processData:false,


success: function(response) {

 if(response.status){

         toastr.success(response.message);      
         document.getElementById("add").reset();

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
<?php echo $__env->make('dashboard.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\ac\resources\views/dashboard/admin/roles/create.blade.php ENDPATH**/ ?>