@extends('dashboard.student.layouts.app')
@section('title', 'Add Notice')
@section('content')
<aside class="right-side">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title"><i class="fa fa-envelope"></i> Notices</h3>
                  <ol class="breadcrumb">
                     <li><a href="{{route('student.home')}}"><i class="fa fa-laptop"></i> Dashboard</a></li>
                     <li class="active">Notices</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-sm-12">
                        <form class="form-horizontal" role="form" method="post" id="add">
                           @csrf
                           <input name="student_id" type="hidden" value="{{auth('student')->user()->id}}">

                           <div class="form-group">
                              <label for="title" class="col-sm-1 control-label">
                              Title <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-4">
                                 <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="title" class="col-sm-1 control-label">
                              Subject <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-4">
                                 <select class="form-control " name="subject" id="subject">
                                    <option value="">Select Subject</option>
                                    <option value="Academic">Academic</option>
                                    <option value="Financial">Financial</option>
                                    <option value="General">General</option>
                                 </select>
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>
                           
                           <div class="form-group">
                              <label for="notice" class="col-sm-1 control-label">
                              Your Message <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-8">
                                 <input id="message" name="message" type="text" value="" class="jqte-test" placeholder="Your Message">
                              </div>
                              <span class="col-sm-3 control-label">
                              </span>
                           </div>
                           <div class="form-group">
                              <div class="col-sm-offset-1 col-sm-8">
                                 <input type="submit" class="btn btn-success" value="Send Notice">
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</aside>
@endsection
@section('js')
<script src="{{ asset('assets/js/jquery-te-1.4.0.min.js') }}"></script>
<script type="text/javascript">
   $('.jqte-test').jqte();
      
   
      $('#add').submit(function(e) {
   
         e.preventDefault();
   
   $.ajax({
   
     url: "{{route('student.notices.store')}}",
   
     type: "POST",
   
     data:  new FormData(this),
   
     dataType:  'json',
   
     contentType: false,
   
     cache: false,
   
     processData:false,
     
   
     success: function(response) {
   
       if(response.status){
   
      toastr.success(response.message);    
      document.getElementById("add").reset();
      $('#message').jqteVal('');
      $('.select2').val('').trigger('change');


            window.location.href = response.url;
      
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
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/jquery-te-1.4.0.css') }}">
@endsection