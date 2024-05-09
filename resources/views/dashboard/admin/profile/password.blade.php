@extends('dashboard.admin.layouts.app')
@section('title', 'Upadte Password')
@section('content')
<aside class="right-side">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title"><i class="fa fa-lock"></i> Password</h3>
                  <ol class="breadcrumb">
                     <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-laptop"></i>
                        Dashboard</a>
                     </li>
                     <li class="active">Password</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-sm-8">
                        <form class="form-horizontal" role="form" method="post" id="password" >
                            @csrf
                           <div class="form-group">
                              <label for="old_password" class="col-sm-2 control-label">
                              Old Password                            </label>
                              <div class="col-sm-6">
                                 <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Currant Password">
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>
                           <div class="form-group">
                              <label for="password" class="col-sm-2 control-label">
                              New Password                            </label>
                              <div class="col-sm-6">
                                 <input type="password" class="form-control" id="password" name="password" placeholder="New Password">
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>
                           <div class="form-group">
                              <label for="password_confirmation" class="col-sm-2 control-label">
                              Re-Password                            </label>
                              <div class="col-sm-6">
                                 <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-Password">
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>
                           <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-8">
                                 <input type="submit" class="btn btn-success" value="Update Password">
                              </div>
                           </div>
                        </form>
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
<script>
   $(document).ready(function() {
    
    
   $('#password').submit(function(e) {
   
   e.preventDefault();

$.ajax({

url: "{{route('admin.password.update')}}",

type: "POST",

data:  new FormData(this),

dataType:  'json',

contentType: false,

cache: false,

processData:false,


success: function(response) {

 if(response.status){

    toastr.success(response.message);  
    document.getElementById("password").reset();


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

    
   });
</script>
@endsection