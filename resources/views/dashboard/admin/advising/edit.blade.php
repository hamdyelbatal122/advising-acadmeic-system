@extends('dashboard.admin.layouts.app')
@section('title', 'Edit Advising')
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
                     <li><a href="{{route('admin.advising.index')}}">Advising</a></li>
                     <li class="active">Edit Advising</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-sm-10">
                        <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" id="edit" >
                           @csrf
                           <input type="hidden" name="id" value="{{$advising->id}}">
                           <div class="form-group">
                              <label for="name_id" class="col-sm-2 control-label">
                              Student <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <select class="form-control " name="student_id" id="student_id" readonly>
                                    <option value="{{$student->id}}">{{$student->id}} -  {{$student->first_name}} {{$student->middle_name}} {{$student->last_name}} - Level {{$student->level}}</option>
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
                                 <select class="form-control" name="semester" id="semester" readonly>
                                    <option value="">Select Semester</option>
                                    <option value="1" @if($advising->semester == 1) selected @endif>Semester 1</option>
                                    <option value="2" @if($advising->semester == 2) selected @endif>Semester 2</option>
                                    <option value="3" @if($advising->semester == 3) selected @endif>Semester 3</option>
                                    <option value="4" @if($advising->semester == 4) selected @endif>Semester 4</option>
                                    <option value="5" @if($advising->semester == 5) selected @endif>Semester 5</option>
                                    <option value="6" @if($advising->semester == 6) selected @endif>Semester 6</option>
                                    <option value="7" @if($advising->semester == 7) selected @endif>Semester 7</option>
                                    <option value="8" @if($advising->semester == 8) selected @endif>Semester 8</option>
                                </select>
                              </div>  
                                
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="name_id" class="col-sm-2 control-label">
                              Courses <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <select class="form-control " name="course" id="course">
                                    <option value="" >Select Course</option>
                                    @foreach($courses as $course)
                                    <option value="{{$course->id}}" data-professor="{{$course->professor->name}}" data-code="{{$course->code}}"> {{$course->name}}</option>
                                    @endforeach
                                 </select>
                              </div>
                              
                              <span class="col-sm-4 control-label">
                                 <button type="button" class="btn btn-warning" id="addCourse" >
                                 Add <i class="fa fa-plus"></i>
                                 </button>

                              </span>
                           </div>

                           <br>

                           <div class="form-group">
                              <h5 for="name_id" class="col-sm-offset-5 col-sm-12 ">
                              Courses Chosen For Student For Semester
                              </h5>
                              <br>
                              <br>
                              <div class="col-sm-offset-1 col-sm-12">
                                 <table class="table table-bordered" id="table">
                                    <thead>
                                       <tr>
                                          <th>Course</th>
                                          <th>Code</th>
                                          <th>Professor</th>
                                          <th>Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @if($advising->courses->count() > 0)
                                       @foreach($advising->courses as $course)
                                       <tr id="course-{{$course->course_id}}">
                                          <td>{{$course->course->name}}</td>
                                          <td>{{$course->course->code}}</td>
                                          <td>{{$course->course->professor->name}}</td>
                                          <td><button id="removeCourse" type="button" class="btn btn-danger" onclick="deleteRow({{$course->course_id}})">Delete</button></td>
                                       </tr>
                                       @endforeach
                                       @else
                                       <tr id="noDataTr">
                                          <td colspan="4" align="center">No Course Chosen</td>
                                       </tr>
                                       @endif
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

      var courses = [];
      $('#table tbody tr').each(function() {
         var course_id = $(this).attr('id').split('-')[1];
         courses.push(course_id);
      });

      var formData = new FormData(this);
      formData.append('courses', JSON.stringify(courses));

     

$.ajax({

  url: "{{route('admin.advising.update')}}",

  type: "POST",

  data: formData,
  

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

   $('#addCourse').on('click', function() {
    var course_id = $("#course option:selected").val();
    if(course_id == ''){
      toastr.error('Please select a course');
      return;
    }
    var course_name = $("#course option:selected").text();
    var course_code = $("#course option:selected").attr('data-code');
    var course_professor = $("#course option:selected").attr('data-professor');
    

    if($('#noDataTr').length){
      $('#noDataTr').remove();
    }

    if($('#course-'+course_id).length){
      toastr.warning('Course already added');
      return;
    }

    var html = '<tr id="course-'+course_id+'">';
    html += '<td>'+course_name+'</td>';
    html += '<td>'+course_code+'</td>';
    html += '<td>'+course_professor+'</td>';
    html += '<td><button id="removeCourse" type="button" class="btn btn-danger" onclick="deleteRow('+course_id+')">Delete</button></td>';
    html += '</tr>';

    $('#table tbody').append(html);

    $('#course option[value=""]').prop('selected', true);

   });

   function deleteRow(id){
    $('#course-'+id).remove();

    if ($('#table tbody').children().length === 0) {
         $('#table tbody').append('<tr id="noDataTr"><td colspan="4" align="center">No Course Chosen</td></tr>');
    }
   }

</script>
@endsection