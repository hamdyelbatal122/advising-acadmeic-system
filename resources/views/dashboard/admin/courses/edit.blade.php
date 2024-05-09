@extends('dashboard.admin.layouts.app')
@section('title', 'Edit User')
@section('content')
<aside class="right-side">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title"><i class="fa icon-teacher"></i> Users</h3>
                  <ol class="breadcrumb">
                     <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-laptop"></i> Dashboard</a></li>
                     <li><a href="{{route('admin.users.index')}}">Users</a></li>
                     <li class="active">Edit User</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-sm-10">
                        <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" id="edit" >
                           @csrf
                           <input type="hidden" name="id" value="{{$course->id}}">
                           <div class="form-group">
                              <label for="name_id" class="col-sm-2 control-label">
                              Name <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="name_id" name="name" placeholder="Course Name" value="{{$course->name}}" >
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="name_id" class="col-sm-2 control-label">
                              Code <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="code" name="code" placeholder="Course code" value="{{$course->code}}" >
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="email" class="col-sm-2 control-label">
                              Professor <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <select class="form-control " name="professor_id" id="professor">
                                    <option value=""> Chose A Professor </option>
                                    @foreach($admins as $admin)
                                    <option value="{{$admin->id}}" @if($course->professor_id == $admin->id) selected @endif >{{$admin->name}}</option>
                                    @endforeach
                                 </select>
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>


                           <div class="form-group">
                              <label for="hour" class="col-sm-2 control-label">
                              Credit Hour <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="hours" name="hours"  placeholder="Credit Hour" value="{{$course->hours}}" >
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="hour" class="col-sm-2 control-label">
                              Day Of Lecture <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <select class="form-control" name="day_of_lecture" id="day_of_lecture">
                                    <option value="">Choose A Day</option>
                                    <option value="Saturday" @if($course->day_of_lecture == 'Saturday') selected @endif>Saturday</option>
                                    <option value="Sunday" @if($course->day_of_lecture == 'Sunday') selected @endif>Sunday</option>
                                    <option value="Monday" @if($course->day_of_lecture == 'Monday') selected @endif>Monday</option>
                                    <option value="Tuesday" @if($course->day_of_lecture == 'Tuesday') selected @endif>Tuesday</option>
                                    <option value="Wednesday" @if($course->day_of_lecture == 'Wednesday') selected @endif>Wednesday</option>
                                    <option value="Thursday" @if($course->day_of_lecture == 'Thursday') selected @endif>Thursday</option>
                                </select>
                                
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="hour" class="col-sm-2 control-label">
                              Time Of Lecture <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <select class="form-control" name="time_of_lecture" id="time_of_lecture">
                                    <option value="">Choose A Time</option>
                                    <option value="8:00 AM" @if($course->time_of_lecture == '8:00 AM') selected @endif>8:00 AM</option>
                                    <option value="9:00 AM" @if($course->time_of_lecture == '9:00 AM') selected @endif>9:00 AM</option>
                                    <option value="10:00 AM" @if($course->time_of_lecture == '10:00 AM') selected @endif>10:00 AM</option>
                                    <option value="11:00 AM" @if($course->time_of_lecture == '11:00 AM') selected @endif>11:00 AM</option>
                                    <option value="12:00 PM" @if($course->time_of_lecture == '12:00 PM') selected @endif>12:00 PM</option>
                                    <option value="1:00 PM" @if($course->time_of_lecture == '1:00 PM') selected @endif>1:00 PM</option>
                                    <option value="2:00 PM" @if($course->time_of_lecture == '2:00 PM') selected @endif>2:00 PM</option>
                                    <option value="3:00 PM" @if($course->time_of_lecture == '3:00 PM') selected @endif>3:00 PM</option>
                                    <option value="4:00 PM" @if($course->time_of_lecture == '4:00 PM') selected @endif>4:00 PM</option>
                                </select>
                                
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>
                           
                           <div class="form-group">
                              <label for="duration_of_lecture" class="col-sm-2 control-label">
                              Lecture Duration <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <input type="number" class="form-control" id="duration_of_lecture" name="duration_of_lecture"  placeholder="Duration Of Lecture" min="1" value="{{$course->duration_of_lecture}}" >
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="role" class="col-sm-2 control-label">
                               Coure Have Labs <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <select class="form-control " name="lab" id="lab">
                                    <option value=""> Chose Answer </option>
                                    <option value="1" @if($course->lab == 1) selected @endif>Yes</option>
                                    <option value="0" @if($course->lab == 0) selected @endif>No</option>
                                 </select>
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="hour" class="col-sm-2 control-label">
                              Day Of Lab 
                              </label>
                              <div class="col-sm-6">
                                 <select class="form-control" name="day_of_lab" id="day_of_lab">
                                    <option value="">Choose A Day</option>
                                    <option value="Saturday" @if($course->day_of_lab == 'Saturday') selected @endif>Saturday</option>
                                    <option value="Sunday" @if($course->day_of_lab == 'Sunday') selected @endif>Sunday</option>
                                    <option value="Monday" @if($course->day_of_lab == 'Monday') selected @endif>Monday</option>
                                    <option value="Tuesday" @if($course->day_of_lab == 'Tuesday') selected @endif>Tuesday</option>
                                    <option value="Wednesday" @if($course->day_of_lab == 'Wednesday') selected @endif>Wednesday</option>
                                    <option value="Thursday" @if($course->day_of_lab == 'Thursday') selected @endif>Thursday</option>
                                </select>                                
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="hour" class="col-sm-2 control-label">
                              Time Of Lecture 
                              </label>
                              <div class="col-sm-6">
                                 <select class="form-control" name="time_of_lab" id="time_of_lab">
                                    <option value="">Choose A Time</option>
                                    <option value="8:00 AM" @if($course->time_of_lab == '8:00 AM') selected @endif>8:00 AM</option>
                                    <option value="9:00 AM" @if($course->time_of_lab == '9:00 AM') selected @endif>9:00 AM</option>
                                    <option value="10:00 AM" @if($course->time_of_lab == '10:00 AM') selected @endif>10:00 AM</option>
                                    <option value="11:00 AM" @if($course->time_of_lab == '11:00 AM') selected @endif>11:00 AM</option>
                                    <option value="12:00 PM" @if($course->time_of_lab == '12:00 PM') selected @endif>12:00 PM</option>
                                    <option value="1:00 PM" @if($course->time_of_lab == '1:00 PM') selected @endif>1:00 PM</option>
                                    <option value="2:00 PM" @if($course->time_of_lab == '2:00 PM') selected @endif>2:00 PM</option>
                                    <option value="3:00 PM" @if($course->time_of_lab == '3:00 PM') selected @endif>3:00 PM</option>
                                    <option value="4:00 PM" @if($course->time_of_lab == '4:00 PM') selected @endif>4:00 PM</option>
                                </select>                                
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="duration_of_lab" class="col-sm-2 control-label">
                              Lab Duration 
                              </label>
                              <div class="col-sm-6">
                                 <input type="number" class="form-control" id="duration_of_lab" name="duration_of_lab"  placeholder="Duration Of Lab" min="1" value="{{$course->duration_of_lab}}" >
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="exam_date" class="col-sm-2 control-label">
                              Exam Date <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <input type="date" class="form-control" id="exam_date" name="exam_date"  placeholder="Exam Date" value="{{$course->exam_date}}" >
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-8">
                                 <input type="submit" class="btn btn-success" value="Edit course">
                              </div>
                           </div>
                        </form>

                        {{-- <div class="callout callout-danger">
                           <p><b>Note:</b> Create teacher, class, section before create a new student.</p>
                        </div> --}}

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

   $('#edit').submit(function(e) {

      e.preventDefault();

$.ajax({

  url: "{{route('admin.courses.update')}}",

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