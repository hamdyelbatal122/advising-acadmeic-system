
<?php $__env->startSection('title', 'Add Student'); ?>
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
                     <li><a href="<?php echo e(route('admin.students.index')); ?>">Students</a></li>
                     <li class="active">Add Student</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-sm-10">
                        <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" id="add" >
                           <?php echo csrf_field(); ?>
                           <!-- First Name -->
                           <div class="form-group">
                              <label for="first_name" class="col-sm-2 control-label">First Name <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Middle Name -->
                           <div class="form-group">
                              <label for="middle_name" class="col-sm-2 control-label">Middle Name <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Middle Name">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Last Name -->
                           <div class="form-group">
                              <label for="last_name" class="col-sm-2 control-label">Last Name <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Email -->
                           <div class="form-group">
                              <label for="email" class="col-sm-2 control-label">Email <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                              </div>
                              <span class="col-sm-4 control-label">
                              <button type="button" class="btn btn-success" id="generate_email">Generate Email </button>
                              </span>
                           </div>
                           <!-- Password -->
                           <div class="form-group">
                              <label for="password" class="col-sm-2 control-label">Password <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                              </div>
                              <span class="col-sm-4 control-label">
                                 <button type="button" class="btn btn-info" id="generate_password">Generate Password </button>
                              </span>
                           </div>
                           <div class="form-group">
                              <label for="country" class="col-sm-2 control-label">Nationality <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <select class="form-control" id="nationality" name="nationality">
                                    <option value="">Select Nationality</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Palestine">Palestine</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="Yemen">Yemen</option>
                                 </select>
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- National ID -->
                           <div class="form-group">
                              <label for="national_id" class="col-sm-2 control-label">National ID <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="national_id" name="national_id" placeholder="National ID">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Gender -->
                           <div class="form-group">
                              <label for="gender" class="col-sm-2 control-label">Gender <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <select class="form-control" id="gender" name="gender">
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                 </select>
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Birth -->
                           <div class="form-group">
                              <label for="birth" class="col-sm-2 control-label">Birth Date <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="date" class="form-control" id="birth" name="birth">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Blood -->
                           <div class="form-group">
                              <label for="blood" class="col-sm-2 control-label">Blood Type <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <select class="form-control" id="blood" name="blood">
                                    <option value="">Select Blood Type</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                 </select>
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Religion -->
                           <div class="form-group">
                              <label for="religion" class="col-sm-2 control-label">Religion <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="religion" name="religion" placeholder="Religion">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Phone -->
                           <div class="form-group">
                              <label for="phone" class="col-sm-2 control-label">Phone <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- nationality -->
                           <!-- Address -->
                           <div class="form-group">
                              <label for="address" class="col-sm-2 control-label">Address <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- College -->
                           <div class="form-group">
                              <label for="college" class="col-sm-2 control-label">College <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="college" name="college" placeholder="College">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Level -->
                           <div class="form-group">
                              <label for="level" class="col-sm-2 control-label">Level <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <select  class="form-control" id="level" name="level">
                                    <option value="">Select Level</option>
                                    <option value="1">Level 1</option>
                                    <option value="2">Level 2</option>
                                    <option value="3">Level 3</option>
                                    <option value="4">Level 4</option>
                                 </select>
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- GPA -->
                           <div class="form-group">
                              <label for="gpa" class="col-sm-2 control-label">GPA <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="gpa" name="gpa" placeholder="GPA" value="0">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-8">
                                 <input type="submit" class="btn btn-success" value="Add Student">
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

   $('#generate_password').click(function(){
      var password = Math.random().toString(36).slice(-8);
      $('#password').val(password);
   });

   $('#generate_email').click(function(){
      if($('#first_name').val() == '' || $('#last_name').val() == ''){
         toastr.error('Please enter first name and last name');
         return false;
      }
      var email = $('#first_name').val() + $('#last_name').val() + '@nikUniv.edu';
      $('#email').val(email);
   });
   
   $('#add').submit(function(e) {
   
      e.preventDefault();
   
   $.ajax({
   
   url: "<?php echo e(route('admin.students.store')); ?>",
   
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
    document.getElementById("add").reset();
   
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
<?php echo $__env->make('dashboard.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\ac\resources\views/dashboard/admin/students/create.blade.php ENDPATH**/ ?>