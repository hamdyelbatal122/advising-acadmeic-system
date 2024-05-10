@extends('dashboard.admin.layouts.app')
@section('title', 'Advisings')
@section('content')
<aside class="right-side">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title"><i class="fa icon-assignment"></i> Advisings</h3>
                  <ol class="breadcrumb">
                     <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-laptop"></i> Dashboard</a></li>
                     <li class="active">Advisings</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-sm-12">
                        <h5 class="page-header">
                           @can('Add Advising')
                           <a href="{{route('admin.advising.create')}}">
                           <i class="fa fa-plus"></i>
                           Create Advising                                 
                           </a>
                           @endcan
                           <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12 pull-right drop-marg">
                              <select class="form-control " name="level_id" id="level_id">
                              <option value="">Select Level</option>
                              <option value="1">Level 1</option>
                              <option value="2">Level 2</option>
                              <option value="3">Level 3</option>
                              <option value="4">Level 4</option>
                              <select>
                           </div>
                        </h5>
                        <div class="nav-tabs-custom">
                           <ul class="nav nav-tabs">
                              <li class="active"><a data-toggle="tab" href="#all" aria-expanded="true">All Advisings</a></li>
                           </ul>
                           <div class="tab-content">
                              <div id="all" class="tab-pane active">
                                 <div id="hide-table">
                                    <table id="myTable" class="display" style="width:100%">
                                       <thead>
                                          <tr>
                                             <th>Id</th>
                                             <th>Student Name</th>
                                             <th>Level</th>
                                             <th>Semster </th>
                                             <th>Year</th>
                                             <td>Status</td>
                                             <td>Created By</td>
                                             <th>Created At</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @foreach($advisings as $advising)
                                          <tr id="id-{{$advising->id}}">
                                             <td>{{$advising->id}}</td>
                                             <td>{{$advising->student->id}} - {{$advising->student->first_name}} {{$advising->student->last_name}}</td>
                                             <td>{{$advising->level}}</td>
                                             <td>{{$advising->semster}}</td>
                                             <td>{{$advising->year}}</td>
                                             <td>
                                                @if($advising->status == "active")
                                                <span class="label label-primary">Active</span>
                                                @else
                                                <span class="label label-success">Completed</span>
                                                @endif
                                             <td>{{$advising->admin->name}}</td>
                                             <td>{{$advising->created_at}}</td>
                                             <td>
                                                @can('View Advisings')
                                                <a class="btn btn-info btn-sm" href="{{route('admin.advising.show', $advising->id)}}" target="_blank" ><i class="fa fa-eye"></i></a>
                                                @endcan
                                                @can('Edit Advising')
                                                <a class="btn btn-success btn-sm" href="{{route('admin.advising.edit', $advising->id)}}"><i class="fa fa-edit"></i></a>
                                                @endcan
                                                @can('Delete Advising')
                                                <a class="btn btn-danger btn-sm" onclick="deleteRow({{$advising->id}})"><i class="fa fa-trash"></i></a>
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

   $('#level_id').on('change', function() {
    var level_id = $(this).val();

    return window.location.href = "{{route('admin.advising.index')}}/" + level_id;

   });
   
   function deleteRow(id){
   
   swal({
   
   title: "Are you want to delete this advising?",   
   
   type: "warning",
   
   showCancelButton: true,
   
   confirmButtonColor: "#DD6B55",
   
   confirmButtonText: "Delete",
   
   cancelButtonText: "Cancel",
   
   closeOnConfirm: false
   
   }, function (isConfirm) {
   
   if (!isConfirm) return;
   
   $.ajax({
   
   url: "{{route('admin.advising.delete')}}",
   
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