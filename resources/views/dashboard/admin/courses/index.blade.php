@extends('dashboard.admin.layouts.app')
@section('title', 'Courses')
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
                     <li class="active">Courses</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-sm-12">
                        <h5 class="page-header">
                           @can('Add Course')
                           <a href="{{route('admin.courses.create')}}">
                           <i class="fa fa-plus"></i>
                           Add a course                                
                           </a>
                           @endcan
                        </h5>
                        <div class="nav-tabs-custom">
                           <ul class="nav nav-tabs">
                              <li class="active"><a data-toggle="tab" href="#all" aria-expanded="true">All Courses</a></li>
                           </ul>
                           <div class="tab-content">
                              <div id="all" class="tab-pane active">
                                 <div id="hide-table">
                                    <table id="myTable" class="display" style="width:100%">
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Course Code</th>
                                             <th>Course Name</th>
                                             <th>Professor</th>
                                             <th>Credit Hours</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @foreach($courses as $course)
                                          <tr id="id-{{$course->id}}">
                                             <td>{{ $loop->iteration }}</td>
                                             <td>{{$course->code}}</td>
                                             <td>{{$course->name}}</td>
                                             <td>{{$course->professor->name}}</td>
                                             <td>{{$course->hours}}</td>
                                             <td>
                                                @can('Edit Course')
                                                <a class="btn btn-success btn-sm" href="{{route('admin.courses.edit', $course->id)}}"><i class="fa fa-edit"></i></a>
                                                @endcan
                                                @can('Delete Course')
                                                <a class="btn btn-danger btn-sm" onclick="deleteRow({{$course->id}})"><i class="fa fa-trash"></i></a>
                                                @endcan
                                             </td>
                                          </tr>
                                          @endforeach
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- nav-tabs-custom -->
                     </div>
                     <!-- col-sm-12 -->
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
   $(".select2").select2();
   
   $('#myTable').DataTable();
   
   function deleteRow(id){
   
   swal({
   
   title: "Are you want to delete this course?",   
   
   type: "warning",
   
   showCancelButton: true,
   
   confirmButtonColor: "#DD6B55",
   
   confirmButtonText: "Delete",
   
   cancelButtonText: "Cancel",
   
   closeOnConfirm: false
   
   }, function (isConfirm) {
   
   if (!isConfirm) return;
   
   $.ajax({
   
   url: "{{route('admin.courses.delete')}}",
   
   type: "post",
   
   data: {
   
       id: id,
       '_token':'{{csrf_token()}}'
   },
   
   dataType: "json",
   
   success: function (response) {

     if(response.status){
      swal(response.message,response.message2,"success");

     $("#id-" +id).remove();

     }else{
         swal(response.message,response.message2,"error");
     }
      
   
   },
   
   error: function (xhr, ajaxOptions, thrownError) {
      
      swal("Error deleting!", "Please try again", "error");
      
   }
   
   });
   
   });
   }
   
</script>
@endsection