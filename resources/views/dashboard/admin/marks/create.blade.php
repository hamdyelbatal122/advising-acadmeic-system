@extends('dashboard.admin.layouts.app')
@section('title', 'Marks')
@section('content')
<aside class="right-side">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title"><i class=" fa fa-file-invoice"></i> Marks</h3>
                  <ol class="breadcrumb">
                     <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-laptop"></i> Dashboard</a></li>
                     <li><a href="{{route('admin.marks.index')}}">Marks</a></li>
                     <li class="active">Add Marks</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-sm-10">
                        <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" id="add" >
                           @csrf
                           <input type="hidden" name="advising_id" id="advising_id" value="">

                           <div class="form-group">
                              <label for="name_id" class="col-sm-2 control-label">
                              Student <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <select class="form-control select2" name="student_id" id="student_id">
                                    <option value="">Select Student</option>
                                    @foreach($students as $student)
                                    <option value="{{$student->id}}">{{$student->id}} -  {{$student->first_name}} {{$student->middle_name}} {{$student->last_name}} - Level {{$student->level}}</option>
                                    @endforeach
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
                                    <option value="">Select Student</option>

                                 </select>
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>
                           <br>

                           <div class="form-group">
                              <h5 for="name_id" class="col-sm-offset-5 col-sm-12 ">
                              Set Mark Of Courses Of This Semester
                              </h5>
                              <br>
                              <br>
                              <div class="col-sm-offset-1 col-sm-12">
                                 <table class="table table-bordered" id="table">
                                    <thead>
                                       <tr>
                                          <th>Course</th>
                                          <th>Code</th>
                                          <th>Grade</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr id="noDataTr">
                                          <td colspan="4" align="center">No Course Chosen</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <br><br>

                           

                           <div class="form-group">
                              <div class="col-sm-offset-6 col-sm-12">
                                 <input type="submit" class="btn btn-success" value="Submit Form">
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

  url: "{{route('admin.marks.store')}}",

  type: "POST",

  data: new FormData(this),
  

  dataType:  'json',

  contentType: false,

  cache: false,

  processData:false,
  

  success: function(response) {

    if(response.status){

    toastr.success(response.message);    
    document.getElementById("add").reset();
   $('#table tbody').html('<tr id="noDataTr"><td colspan="4" align="center">No Course Chosen</td></tr>');
   $('.select2').val('').trigger('change');



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




   $('#student_id').on('change', function() {
    var student_id = $(this).val();

    $.ajax({
      url: "{{route('admin.marks.student.data')}}",
      type: "GET",
      data: {student_id: student_id},
      success: function(response) {
         if(response.status){
         semester = response.advising.semester;
         courses = response.courses ;
        $('#semester').html('<option value="'+semester+'">Semester '+semester+'</option>');
        $('#noDataTr').remove();

        $('#advising_id').val(response.advising.id);

         $.each(courses, function(key, value) {         
            $('#table').append(
               '<tr id="course-'+value.course.id+'"><td>'+value.course.name+'</td><td>'+value.course.code+'</td><td><input class="form-control" type="hidden" name="course['+value.course.id+']" value="'+value.course.id+'"><input class="form-control" type="text" name="grade['+value.course.id+']" placeholder="Set The Mark O Exam In This Course" required ></tr>');
         });
      }else{

            toastr.error(response.message);
            $('#table tbody').html('<tr id="noDataTr"><td colspan="4" align="center">No Course Chosen</td></tr>');
            return;
      }

      },

    });



   });

</script>
@endsection