@extends('dashboard.admin.layouts.app')
@section('title', 'Notices')
@section('content')
<aside class="right-side">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title"><i class="fa icon-envelope"></i> Notices</h3>
                  <ol class="breadcrumb">
                     <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-laptop"></i> Dashboard</a></li>
                     <li class="active">Notices</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-sm-12">
                        <h5 class="page-header">
                           @can('Add Notice')
                           <a href="{{route('admin.notices.create')}}">
                           <i class="fa fa-plus"></i>
                           Add a Notice                                
                           </a>
                           @endcan
                        </h5>
                        <div class="nav-tabs-custom">
                           <ul class="nav nav-tabs">
                              <li class="active"><a data-toggle="tab" href="#all" aria-expanded="true">All Notices</a></li>
                           </ul>
                           <div class="tab-content">
                              <div id="all" class="tab-pane active">
                                 <div id="hide-table">
                                    <table id="myTable" class="display" style="width:100%">
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Name</th>
                                             <th>Status</th>
                                             <th>Subject</th>
                                             <th>title</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @foreach($notices as $notice)
                                          <tr id="id-{{$notice->id}}">
                                             <td>{{ $loop->iteration }}</td>
                                             <td>{{$notice->student->id}} - {{$notice->student->first_name}} {{$notice->student->last_name}}</td>
                                            <td>
                                                @if($notice->status == "active")
                                                <span class="label label-success">Active</span>
                                                @else
                                                <span class="label label-danger">Closed</span>
                                                @endif
                                             <td>{{$notice->subject}}</td>
                                             <td>{{$notice->title}}</td>
                                             <td>
                                                @can('Edit Notices')
                                                <a class="btn btn-success btn-sm" href="{{route('admin.notices.show', $notice->id)}}"><i class="fa fa-eye"></i></a>
                                                @endcan
                                                @can('delete Notices')
                                                <a class="btn btn-danger btn-sm" onclick="deleteRow({{$notice->id}})"><i class="fa fa-trash"></i></a>
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
   
   title: "Are you want to delete this notice?",   
   
   type: "warning",
   
   showCancelButton: true,
   
   confirmButtonColor: "#DD6B55",
   
   confirmButtonText: "Delete",
   
   cancelButtonText: "Cancel",
   
   closeOnConfirm: false
   
   }, function (isConfirm) {
   
   if (!isConfirm) return;
   
   $.ajax({
   
   url: "{{route('admin.notices.delete')}}",
   
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