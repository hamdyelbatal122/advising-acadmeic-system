
<?php $__env->startSection('title', 'Upadte Password'); ?>
<?php $__env->startSection('content'); ?>
<aside class="right-side">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title"><i class="fa fa-lock"></i> Password</h3>
                  <ol class="breadcrumb">
                     <li><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa fa-laptop"></i>
                        Dashboard</a>
                     </li>
                     <li class="active">Password</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-sm-8">
                        <form class="form-horizontal" role="form" method="post" id="password" >
                            <?php echo csrf_field(); ?>
                           <div class="form-group">
                              <label for="old_password" class="col-sm-2 control-label">
                              Old Password                            </label>
                              <div class="col-sm-6">
                                 <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Currant Password">
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>
                           <div class="form-group">
                              <label for="password" class="col-sm-2 control-label">
                              New Password                            </label>
                              <div class="col-sm-6">
                                 <input type="password" class="form-control" id="password" name="password" placeholder="New Password">
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>
                           <div class="form-group">
                              <label for="password_confirmation" class="col-sm-2 control-label">
                              Re-Password                            </label>
                              <div class="col-sm-6">
                                 <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-Password">
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>
                           <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-8">
                                 <input type="submit" class="btn btn-success" value="Update Password">
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
<script>
   $(document).ready(function() {
    
    
   $('#password').submit(function(e) {
   
   e.preventDefault();

$.ajax({

url: "<?php echo e(route('admin.password.update')); ?>",

type: "POST",

data:  new FormData(this),

dataType:  'json',

contentType: false,

cache: false,

processData:false,


success: function(response) {

 if(response.status){

    toastr.success(response.message);  
    document.getElementById("password").reset();


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

    
   });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\ac\resources\views/dashboard/admin/profile/password.blade.php ENDPATH**/ ?>