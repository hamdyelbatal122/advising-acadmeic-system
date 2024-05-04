@extends('dashboard.admin.layouts.app')
@section('title', 'Students')
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
                     <li class="active">Students</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-sm-12">
                        <h5 class="page-header">
                           <a href="{{route('admin.students.create')}}">
                           <i class="fa fa-plus"></i>
                           Add a Student                                
                           </a>
                        </h5>
                        <div class="nav-tabs-custom">
                           <ul class="nav nav-tabs">
                              <li class="active"><a data-toggle="tab" href="#all" aria-expanded="true">All Students</a></li>
                           </ul>
                           <div class="tab-content">
                              <div id="all" class="tab-pane active">
                                 <div id="hide-table">
                                    <table id="myTable" class="display" style="width:100%">
                                       <thead>
                                          <tr>
                                             <th>Id</th>
                                             <th>Name</th>
                                             <th>National Id</th>
                                             <th>College</th>
                                             <th>Level</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @foreach($students as $student)
                                          <tr id="id-{{$student->id}}">
                                             <td>{{$student->id}}</td>
                                             <td>{{$student->first_name.' '.$student->middle_name.' '.$student->last_name}}</td>
                                             <td>{{$student->national_id}}</td>
                                             <td>{{$student->college}}</td>
                                             <td>{{$student->level}}</td>
                                             <td>
                                                <a class="btn btn-success btn-sm" href="{{route('admin.students.edit', $student->id)}}"><i class="fa fa-edit"></i></a>
                                                <a class="btn btn-danger btn-sm" onclick="deleteRow({{$student->id}})"><i class="fa fa-trash"></i></a>
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
   
   title: "Are you want to delete this student?",   
   
   type: "warning",
   
   showCancelButton: true,
   
   confirmButtonColor: "#DD6B55",
   
   confirmButtonText: "Delete",
   
   cancelButtonText: "Cancel",
   
   closeOnConfirm: false
   
   }, function (isConfirm) {
   
   if (!isConfirm) return;
   
   $.ajax({
   
   url: "{{route('admin.students.delete')}}",
   
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