@extends('dashboard.admin.layouts.app')
@section('title', 'Reply To Notice')
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
                     <li class="active">#{{$notice->id}}</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-sm-12">
                        <form class="form-horizontal" role="form" method="post" id="add">
                           @csrf
                           <input name="notice_id" type="hidden" value="{{$notice->id}}">
                           <div class="form-group">
                              <label for="student_id" class="col-sm-1 control-label">
                              Student <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-4">
                               <select class="form-control " name="student_id" id="student_id" readonly >
                                  <option value="{{$student->id}}">{{$student->id}} -  {{$student->first_name}} {{$student->middle_name}} {{$student->last_name}} - Level {{$student->level}}</option>
                               </select>
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="title" class="col-sm-1 control-label">
                              Title <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-4">
                                 <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$notice->title}}" readonly>
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="title" class="col-sm-1 control-label">
                              Subject <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-4">
                                 <select class="form-control " name="subject" id="subject" readonly>
                                    <option value="subject">{{$notice->subject}}</option>
                                 </select>
                              </div>
                              <span class="col-sm-4 control-label">
                              </span>
                           </div>

                           <div class="form-group">
                              <label for="title" class="col-sm-1 control-label">
                              Status <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-4">
                                 <select class="form-control " name="status" id="status">
                                    <option value="">Select Status</option>
                                    <option value="active" @if($notice->status == 'active') selected @endif>Active</option>
                                    <option value="closed" @if($notice->status == 'closed') selected @endif>Closed</option>
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
                                 <input type="submit" class="btn btn-success" value="Send Reply">
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
      
      $( ".select2" ).select2();
   
      $('#add').submit(function(e) {
   
         e.preventDefault();
   
   $.ajax({
   
     url: "{{route('admin.notices.send')}}",
   
     type: "POST",
   
     data:  new FormData(this),
   
     dataType:  'json',
   
     contentType: false,
   
     cache: false,
   
     processData:false,
     
   
     success: function(response) {
   
       if(response.status){
   
      toastr.success(response.message);    

      $('#message').jqteVal('');
      $('.select2').val('').trigger('change');

   
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