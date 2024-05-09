@extends('dashboard.admin.layouts.app')
@section('title', 'Edit Student')
@section('content')
<aside class="right-side">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title"><i class="fa icon-student"></i> Students</h3>
                  <ol class="breadcrumb">
                     <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-laptop"></i> Dashboard</a></li>
                     <li><a href="{{route('admin.students.index')}}">Students</a></li>
                     <li class="active">Edit Student</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-sm-10">
                        <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" id="add" >
                           @csrf
                           <input type="hidden" name="id" value="{{$student->id}}">
                           <!-- First Name -->
                           <div class="form-group">
                              <label for="first_name" class="col-sm-2 control-label">First Name <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="{{$student->first_name}}">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Middle Name -->
                           <div class="form-group">
                              <label for="middle_name" class="col-sm-2 control-label">Middle Name <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Middle Name" value="{{$student->middle_name}}">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Last Name -->
                           <div class="form-group">
                              <label for="last_name" class="col-sm-2 control-label">Last Name <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="{{$student->last_name}}">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Email -->
                           <div class="form-group">
                              <label for="email" class="col-sm-2 control-label">Email <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{$student->email}}">
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>
                           <!-- Password -->
                           <div class="form-group">
                              <label for="password" class="col-sm-2 control-label">Password </label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="password" name="password" placeholder="Password" value="{{$student->currant_password}}">
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>
                           <div class="form-group">
                              <label for="country" class="col-sm-2 control-label">Nationality <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <select class="form-control" id="nationality" name="nationality">
                                    <option value="">Select Nationality</option>
                                    <option value="Algeria" @if($student->nationality == 'Algeria') selected @endif>Algeria</option>
                                    <option value="Bahrain" @if($student->nationality == 'Bahrain') selected @endif>Bahrain</option>
                                    <option value="Comoros" @if($student->nationality == 'Comoros') selected @endif>Comoros</option>
                                    <option value="Djibouti" @if($student->nationality == 'Djibouti') selected @endif>Djibouti</option>
                                    <option value="Egypt" @if($student->nationality == 'Egypt') selected @endif>Egypt</option>
                                    <option value="Iraq" @if($student->nationality == 'Iraq') selected @endif>Iraq</option>
                                    <option value="Jordan" @if($student->nationality == 'Jordan') selected @endif>Jordan</option>
                                    <option value="Kuwait" @if($student->nationality == 'Kuwait') selected @endif>Kuwait</option>
                                    <option value="Lebanon" @if($student->nationality == 'Lebanon') selected @endif>Lebanon</option>
                                    <option value="Libya" @if($student->nationality == 'Libya') selected @endif>Libya</option>
                                    <option value="Mauritania" @if($student->nationality == 'Mauritania') selected @endif>Mauritania</option>
                                    <option value="Morocco" @if($student->nationality == 'Morocco') selected @endif>Morocco</option>
                                    <option value="Oman" @if($student->nationality == 'Oman') selected @endif>Oman</option>
                                    <option value="Palestine" @if($student->nationality == 'Palestine') selected @endif>Palestine</option>
                                    <option value="Qatar" @if($student->nationality == 'Qatar') selected @endif>Qatar</option>
                                    <option value="Saudi Arabia" @if($student->nationality == 'Saudi Arabia') selected @endif>Saudi Arabia</option>
                                    <option value="Somalia" @if($student->nationality == 'Somalia') selected @endif>Somalia</option>
                                    <option value="Sudan" @if($student->nationality == 'Sudan') selected @endif>Sudan</option>
                                    <option value="Syria" @if($student->nationality == 'Syria') selected @endif>Syria</option>
                                    <option value="Tunisia" @if($student->nationality == 'Tunisia') selected @endif>Tunisia</option>
                                    <option value="United Arab Emirates" @if($student->nationality == 'United Arab Emirates') selected @endif>United Arab Emirates</option>
                                    <option value="Yemen" @if($student->nationality == 'Yemen') selected @endif>Yemen</option>
                                </select>
                                
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- National ID -->
                           <div class="form-group">
                              <label for="national_id" class="col-sm-2 control-label">National ID <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="national_id" name="national_id" placeholder="National ID" value="{{$student->national_id}}">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Gender -->
                           <div class="form-group">
                              <label for="gender" class="col-sm-2 control-label">Gender <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <select class="form-control" id="gender" name="gender">
                                    <option value="">Select Gender</option>
                                    <option value="male" @if($student->gender == 'male') selected @endif>Male</option>
                                    <option value="female" @if($student->gender == 'female') selected @endif >Female</option>
                                 </select>
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Birth -->
                           <div class="form-group">
                              <label for="birth" class="col-sm-2 control-label">Birth Date <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="date" class="form-control" id="birth" name="birth" value="{{$student->birth}}">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Blood -->
                           <div class="form-group">
                              <label for="blood" class="col-sm-2 control-label">Blood Type <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <select class="form-control" id="blood" name="blood">
                                    <option value="">Select Blood Type</option>
                                    <option value="A+" @if($student->blood == 'A+') selected @endif>A+</option>
                                    <option value="A-" @if($student->blood == 'A-') selected @endif>A-</option>
                                    <option value="B+" @if($student->blood == 'B+') selected @endif>B+</option>
                                    <option value="B-" @if($student->blood == 'B-') selected @endif>B-</option>
                                    <option value="AB+" @if($student->blood == 'AB+') selected @endif>AB+</option>
                                    <option value="AB-" @if($student->blood == 'AB-') selected @endif>AB-</option>
                                    <option value="O+" @if($student->blood == 'O+') selected @endif>O+</option>
                                    <option value="O-" @if($student->blood == 'O-') selected @endif>O-</option>
                                 </select>
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Religion -->
                           <div class="form-group">
                              <label for="religion" class="col-sm-2 control-label">Religion <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="religion" name="religion" placeholder="Religion" value="{{$student->religion}}">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Phone -->
                           <div class="form-group">
                              <label for="phone" class="col-sm-2 control-label">Phone <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{$student->phone}}">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- nationality -->
                           <!-- Address -->
                           <div class="form-group">
                              <label for="address" class="col-sm-2 control-label">Address <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{$student->address}}">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- College -->
                           <div class="form-group">
                              <label for="college" class="col-sm-2 control-label">College <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="college" name="college" placeholder="College" value="{{$student->college}}">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- Level -->
                           <div class="form-group">
                              <label for="level" class="col-sm-2 control-label">Level <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <select  class="form-control" id="level" name="level">
                                    <option value="">Select Level</option>
                                    <option value="1" @if($student->level == '1') selected @endif>Level 1</option>
                                    <option value="2" @if($student->level == '2') selected @endif>Level 2</option>
                                    <option value="3" @if($student->level == '3') selected @endif>Level 3</option>
                                    <option value="4" @if($student->level == '4') selected @endif>Level 4</option>
                                 </select>
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <!-- GPA -->
                           <div class="form-group">
                              <label for="gpa" class="col-sm-2 control-label">GPA <span class="text-red">*</span></label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="gpa" name="gpa" placeholder="GPA" value="{{$student->gpa}}">
                              </div>
                              <span class="col-sm-4 control-label"></span>
                           </div>
                           <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-8">
                                 <input type="submit" class="btn btn-success" value="Edit Student">
                              </div>
                           </div>
                        </form>
                        {{-- 
                        <div class="callout callout-danger">
                           <p><b>Note:</b> Create teacher, class, section before create a new student.</p>
                        </div>
                        --}}
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
@endsection
@section('js')
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
   
   url: "{{route('admin.students.update')}}",
   
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
@endsection