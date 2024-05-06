
<?php $__env->startSection('title', 'Edit Student'); ?>
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
                     <li class="active">Edit Student</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-sm-10">
                        <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" id="add" >
                           <?php echo csrf_field(); ?>
                           <input type="hidden" name="id" value="<?php echo e($student->id); ?>">
                           <!-- First Name -->
                           <div class="form-group">
                              <label for="first_name" class="col-sm-2 control-label">First Name <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="<?php echo e($student->first_name); ?>">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Middle Name -->
                           <div class="form-group">
                              <label for="middle_name" class="col-sm-2 control-label">Middle Name <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Middle Name" value="<?php echo e($student->middle_name); ?>">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Last Name -->
                           <div class="form-group">
                              <label for="last_name" class="col-sm-2 control-label">Last Name <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="<?php echo e($student->last_name); ?>">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Email -->
                           <div class="form-group">
                              <label for="email" class="col-sm-2 control-label">Email <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo e($student->email); ?>">
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>
                           <!-- Password -->
                           <div class="form-group">
                              <label for="password" class="col-sm-2 control-label">Password </label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo e($student->currant_password); ?>">
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>
                           <div class="form-group">
                              <label for="country" class="col-sm-2 control-label">Nationality <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <select class="form-control" id="nationality" name="nationality">
                                    <option value="">Select Nationality</option>
                                    <option value="Algeria" <?php if($student->nationality == 'Algeria'): ?> selected <?php endif; ?>>Algeria</option>
                                    <option value="Bahrain" <?php if($student->nationality == 'Bahrain'): ?> selected <?php endif; ?>>Bahrain</option>
                                    <option value="Comoros" <?php if($student->nationality == 'Comoros'): ?> selected <?php endif; ?>>Comoros</option>
                                    <option value="Djibouti" <?php if($student->nationality == 'Djibouti'): ?> selected <?php endif; ?>>Djibouti</option>
                                    <option value="Egypt" <?php if($student->nationality == 'Egypt'): ?> selected <?php endif; ?>>Egypt</option>
                                    <option value="Iraq" <?php if($student->nationality == 'Iraq'): ?> selected <?php endif; ?>>Iraq</option>
                                    <option value="Jordan" <?php if($student->nationality == 'Jordan'): ?> selected <?php endif; ?>>Jordan</option>
                                    <option value="Kuwait" <?php if($student->nationality == 'Kuwait'): ?> selected <?php endif; ?>>Kuwait</option>
                                    <option value="Lebanon" <?php if($student->nationality == 'Lebanon'): ?> selected <?php endif; ?>>Lebanon</option>
                                    <option value="Libya" <?php if($student->nationality == 'Libya'): ?> selected <?php endif; ?>>Libya</option>
                                    <option value="Mauritania" <?php if($student->nationality == 'Mauritania'): ?> selected <?php endif; ?>>Mauritania</option>
                                    <option value="Morocco" <?php if($student->nationality == 'Morocco'): ?> selected <?php endif; ?>>Morocco</option>
                                    <option value="Oman" <?php if($student->nationality == 'Oman'): ?> selected <?php endif; ?>>Oman</option>
                                    <option value="Palestine" <?php if($student->nationality == 'Palestine'): ?> selected <?php endif; ?>>Palestine</option>
                                    <option value="Qatar" <?php if($student->nationality == 'Qatar'): ?> selected <?php endif; ?>>Qatar</option>
                                    <option value="Saudi Arabia" <?php if($student->nationality == 'Saudi Arabia'): ?> selected <?php endif; ?>>Saudi Arabia</option>
                                    <option value="Somalia" <?php if($student->nationality == 'Somalia'): ?> selected <?php endif; ?>>Somalia</option>
                                    <option value="Sudan" <?php if($student->nationality == 'Sudan'): ?> selected <?php endif; ?>>Sudan</option>
                                    <option value="Syria" <?php if($student->nationality == 'Syria'): ?> selected <?php endif; ?>>Syria</option>
                                    <option value="Tunisia" <?php if($student->nationality == 'Tunisia'): ?> selected <?php endif; ?>>Tunisia</option>
                                    <option value="United Arab Emirates" <?php if($student->nationality == 'United Arab Emirates'): ?> selected <?php endif; ?>>United Arab Emirates</option>
                                    <option value="Yemen" <?php if($student->nationality == 'Yemen'): ?> selected <?php endif; ?>>Yemen</option>
                                </select>
                                
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- National ID -->
                           <div class="form-group">
                              <label for="national_id" class="col-sm-2 control-label">National ID <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="national_id" name="national_id" placeholder="National ID" value="<?php echo e($student->national_id); ?>">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Gender -->
                           <div class="form-group">
                              <label for="gender" class="col-sm-2 control-label">Gender <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <select class="form-control" id="gender" name="gender">
                                    <option value="">Select Gender</option>
                                    <option value="male" <?php if($student->gender == 'male'): ?> selected <?php endif; ?>>Male</option>
                                    <option value="female" <?php if($student->gender == 'female'): ?> selected <?php endif; ?> >Female</option>
                                 </select>
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Birth -->
                           <div class="form-group">
                              <label for="birth" class="col-sm-2 control-label">Birth Date <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="date" class="form-control" id="birth" name="birth" value="<?php echo e($student->birth); ?>">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Blood -->
                           <div class="form-group">
                              <label for="blood" class="col-sm-2 control-label">Blood Type <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <select class="form-control" id="blood" name="blood">
                                    <option value="">Select Blood Type</option>
                                    <option value="A+" <?php if($student->blood == 'A+'): ?> selected <?php endif; ?>>A+</option>
                                    <option value="A-" <?php if($student->blood == 'A-'): ?> selected <?php endif; ?>>A-</option>
                                    <option value="B+" <?php if($student->blood == 'B+'): ?> selected <?php endif; ?>>B+</option>
                                    <option value="B-" <?php if($student->blood == 'B-'): ?> selected <?php endif; ?>>B-</option>
                                    <option value="AB+" <?php if($student->blood == 'AB+'): ?> selected <?php endif; ?>>AB+</option>
                                    <option value="AB-" <?php if($student->blood == 'AB-'): ?> selected <?php endif; ?>>AB-</option>
                                    <option value="O+" <?php if($student->blood == 'O+'): ?> selected <?php endif; ?>>O+</option>
                                    <option value="O-" <?php if($student->blood == 'O-'): ?> selected <?php endif; ?>>O-</option>
                                 </select>
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Religion -->
                           <div class="form-group">
                              <label for="religion" class="col-sm-2 control-label">Religion <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="religion" name="religion" placeholder="Religion" value="<?php echo e($student->religion); ?>">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Phone -->
                           <div class="form-group">
                              <label for="phone" class="col-sm-2 control-label">Phone <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="<?php echo e($student->phone); ?>">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- nationality -->
                           <!-- Address -->
                           <div class="form-group">
                              <label for="address" class="col-sm-2 control-label">Address <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?php echo e($student->address); ?>">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- College -->
                           <div class="form-group">
                              <label for="college" class="col-sm-2 control-label">College <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="college" name="college" placeholder="College" value="<?php echo e($student->college); ?>">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Level -->
                           <div class="form-group">
                              <label for="level" class="col-sm-2 control-label">Level <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <select  class="form-control" id="level" name="level">
                                    <option value="">Select Level</option>
                                    <option value="1" <?php if($student->level == '1'): ?> selected <?php endif; ?>>Level 1</option>
                                    <option value="2" <?php if($student->level == '2'): ?> selected <?php endif; ?>>Level 2</option>
                                    <option value="3" <?php if($student->level == '3'): ?> selected <?php endif; ?>>Level 3</option>
                                    <option value="4" <?php if($student->level == '4'): ?> selected <?php endif; ?>>Level 4</option>
                                 </select>
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- GPA -->
                           <div class="form-group">
                              <label for="gpa" class="col-sm-2 control-label">GPA <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="gpa" name="gpa" placeholder="GPA" value="<?php echo e($student->gpa); ?>">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-8">
                                 <input type="submit" class="btn btn-success" value="Edit Student">
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
      var email = $('#first_name').val() + $('#last_name').val() + '@cis.edu';
      $('#email').val(email);
   });
   
   $('#add').submit(function(e) {
   
      e.preventDefault();
   
   $.ajax({
   
   url: "<?php echo e(route('admin.students.update')); ?>",
   
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
<?php echo $__env->make('dashboard.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\ac\resources\views/dashboard/admin/students/edit.blade.php ENDPATH**/ ?>