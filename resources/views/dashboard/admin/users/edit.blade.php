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
                           <input type="hidden" name="id" value="{{ $user->id }}">
                           <div class="form-group">
                              <label for="name_id" class="col-sm-2 control-label">
                              Name <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="name_id" name="name"  placeholder="Name" value="{{ $user->name }}">
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="email" class="col-sm-2 control-label">
                              Email <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <input type="email" class="form-control" id="email" name="email"  placeholder="Email" value="{{ $user->email }}">
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="password" class="col-sm-2 control-label">
                              Password 
                              </label>
                              <div class="col-sm-6">
                                 <input type="password" class="form-control" id="password" name="password"  placeholder="Password">
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="profession" class="col-sm-2 control-label">
                              Profession <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="profession" name="profession"  placeholder="Profession" value="{{ $user->profession }}">
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="role" class="col-sm-2 control-label">
                              Role <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <select class="form-control " name="role" id="role">
                                    <option value=""> Chose A Role </option>
                                    <option value="Admin" @if($user->role == 'Admin') selected @endif>Admin</option>
                                    <option value="Advisor" @if($user->role == 'Advisor') selected @endif>Advisor</option>
                                    <option value="Professor" @if($user->role == 'Professor') selected @endif>Professor</option>
                                 </select>
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-8">
                                 <input type="submit" class="btn btn-success" value="Edit User">
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

  url: "{{route('admin.users.update')}}",

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