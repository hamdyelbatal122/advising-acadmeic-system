@extends('dashboard.admin.layouts.app')
@section('title', 'Edit Roles')
@section('content')
<aside class="right-side">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title"><i class="fa icon-permission"></i> Roles & Permissions </h3>
                  <ol class="breadcrumb">
                     <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-laptop"></i> Dashboard</a></li>
                     <li class="active">Roles & Permissions</li>
                     <li class="active">{{$role->name}}</li>
                     <li class="active">Edit Role</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
               <form action="" class="form-horizontal" role="form" method="post" id="edit">
                  @csrf
                  <div class="form-group">
                     <label for="name_id" class="col-sm-2 control-label">
                     Role Name <span class="text-red">*</span>
                     </label>
                     <div class="col-sm-6">
                        <input type="text" class="form-control" id="name" name="name"  placeholder="Role Name" value="{{$role->name}}">
                        <input type="hidden" name="id" value="{{$role->id}}">
                     </div>
                     <span class="col-sm-4 control-label">
                     </span>
                  </div>
                  <!-- row -->
                  <div class="row">
                     <div class="col-sm-12">
                              <table id="" class="table table-striped table-bordered table-hover dataTable no-footer">
                                 <thead >
                                    <tr>
                                       <th class="col-lg-3"><center>Permession Name </center></th>
                                       <th class="col-lg-1"><center>View</center></th>
                                       <th class="col-lg-1"><center>Add</center></th>
                                       <th class="col-lg-1"><center>Edit</center></th>
                                       <th class="col-lg-1"><center>Delete</center></th>
                                    </tr>
                                 </thead>
                                 <tbody align="center">

                                    @foreach($permissions as $index=> $value)

                                    @if($index==0)
                                    <td>
                                      {{$value->key}}
                                    </td>
                                    @endif
  
                                    <td>
                                       <input type="checkbox" name="permission[]" value="{{ $value->name }}" class="name" @if($role->hasPermissionTo($value->name)) checked @endif>
                                       {{ $value->name }}</label>
                                    </td>
                                    @if($index < $permissions->count()-1 )
                                    @if( $permissions[$index+1]->key !== $value->key)
                                  </tr>
                                  <tr>
                                    <td>
                                      {{$permissions[$index+1]->key}}
                                    </td>
                                    @endif
                                    @endif
  
            
                                    @endforeach

                                 </tbody>
                              </table>
                              <br>
                     <div class="col-sm-12">
                        <div class="form-group">
                           <div class="col-sm-offset-6 col-sm-12">
                              <input type="submit" class="btn btn-success" value="Edit Role">
                           </div>
                        </div>
                     </div>

                     </div>
                  </div>
               </form>

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
<script>

$('#edit').submit(function(e) {
   
   e.preventDefault();

$.ajax({

url: "{{route('admin.roles.update')}}",

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