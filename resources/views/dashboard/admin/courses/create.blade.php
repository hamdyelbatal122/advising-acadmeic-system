@extends('dashboard.admin.layouts.app')
@section('title', 'Add course')
@section('content')
<aside class="right-side">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title"><i class="fa icon-subject"></i> Courses</h3>
                  <ol class="breadcrumb">
                     <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-laptop"></i> Dashboard</a></li>
                     <li><a href="{{route('admin.courses.index')}}">Courses</a></li>
                     <li class="active">Add Course</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-sm-10">
                        <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" id="add" >
                           @csrf

                           <div class="form-group">
                              <label for="name_id" class="col-sm-2 control-label">
                              Name <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="name_id" name="name"  placeholder="Course Name" >
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="name_id" class="col-sm-2 control-label">
                              Code <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="code" name="code"  placeholder="Course Code" >
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
                                    <option > Chose A Professor </option>
                                    @foreach($admins as $admin)
                                    <option value="{{$admin->id}}">{{$admin->name}}</option>
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
                                 <input type="text" class="form-control" id="hours" name="hours"  placeholder="Credit Hour" >
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="hour" class="col-sm-2 control-label">
                              Day Of Lecture <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <select class="form-control " name="day_of_lecture" id="day_of_lecture">
                                    <option > Chose A Day </option>
                                    <option value="Saturday">Saturday</option>
                                    <option value="Sunday">Sunday</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
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
                                 <select class="form-control " name="time_of_lecture" id="time_of_lecture">
                                    <option > Chose A Time </option>
                                    <option value="8:00 AM">8:00 AM</option>
                                    <option value="9:00 AM">9:00 AM</option>
                                    <option value="10:00 AM">10:00 AM</option>
                                    <option value="11:00 AM">11:00 AM</option>
                                    <option value="12:00 PM">12:00 PM</option>
                                    <option value="1:00 PM">1:00 PM</option>
                                    <option value="2:00 PM">2:00 PM</option>
                                    <option value="3:00 PM">3:00 PM</option>
                                    <option value="4:00 PM">4:00 PM</option>
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
                                 <input type="number" class="form-control" id="duration_of_lecture" name="duration_of_lecture"  placeholder="Duration Of Lecture" min="1" >
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
                                    <option > Chose Answer </option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
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
                                 <select class="form-control " name="day_of_lab" id="day_of_lab">
                                    <option > Chose A Day </option>
                                    <option value="Saturday">Saturday</option>
                                    <option value="Sunday">Sunday</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
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
                                 <select class="form-control " name="time_of_lab" id="time_of_lab">
                                    <option > Chose A Time </option>
                                    <option value="8:00 AM">8:00 AM</option>
                                    <option value="9:00 AM">9:00 AM</option>
                                    <option value="10:00 AM">10:00 AM</option>
                                    <option value="11:00 AM">11:00 AM</option>
                                    <option value="12:00 PM">12:00 PM</option>
                                    <option value="1:00 PM">1:00 PM</option>
                                    <option value="2:00 PM">2:00 PM</option>
                                    <option value="3:00 PM">3:00 PM</option>
                                    <option value="4:00 PM">4:00 PM</option>
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
                                 <input type="number" class="form-control" id="duration_of_lab" name="duration_of_lab"  placeholder="Duration Of Lab" min="1" >
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="exam_date" class="col-sm-2 control-label">
                              Exam Date <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <input type="date" class="form-control" id="exam_date" name="exam_date"  placeholder="Exam Date" >
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-8">
                                 <input type="submit" class="btn btn-success" value="Add course">
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

   $('#add').submit(function(e) {

      e.preventDefault();

$.ajax({

  url: "{{route('admin.courses.store')}}",

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
@endsection