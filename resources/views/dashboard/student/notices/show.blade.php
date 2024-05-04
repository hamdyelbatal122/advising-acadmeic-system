@extends('dashboard.student.layouts.app')
@section('title', 'View Notice')
@section('content')
<aside class="right-side">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="well">
               <div class="row">
                  <div class="col-sm-6">
                     <button class="btn-cs btn-sm-cs" onclick="javascript:printDiv('printablediv')"><span class="fa fa-print"></span> Print </button>
                     @if($notice->status == "active")
                     <a href="{{route('student.notices.reply',$notice->id)}}" class="btn-cs btn-sm-cs" style="text-decoration: none;" role="button"><i class="fa fa-edit"></i> reply</a>
                     @else
                     <a href="#" class="btn-cs btn-sm-cs" style="text-decoration: none;" role="button"><i class="fa fa-edit"></i> reply Closed</a>
                     @endif
                     <button class="btn-cs btn-sm-cs" data-toggle="modal" data-target="#mail"><span class="fa fa-envelope"></span> Send Pdf to Mail</button>

                  </div>
                  <div class="col-sm-6">
                     <ol class="breadcrumb">
                        <li><a href="{{route('student.home')}}"><i class="fa fa-laptop"></i> Dashboard</a></li>
                        <li><a href="{{route('student.notices.index')}}">Notice</a></li>
                        <li class="active">#{{$notice->id}}</li>
                        <li class="active">View</li>
                     </ol>
                  </div>
               </div>
            </div>
            <section class="panel">
               <div class="panel-body bio-graph-info">
                  <div id="printablediv" class="box-body">
                     <div class="row">
                        <div class="col-sm-12">
                           <h4>{{$notice->title}}</h4>
                           <h5><strong>Subject : </strong>{{$notice->subject}}</h5>
                           <h5><strong>Student Name: </strong>{{$notice->student->first_name}} {{$notice->student->middle_name}} {{$notice->student->last_name}}</h5>
                           <h5><strong>Student ID : </strong>{{$notice->student->id}}</h5>
                           <h5><strong>Status : </strong>
                              @if($notice->status == "active")
                              <span class="label label-success">Active</span>
                              @else
                              <span class="label label-danger">Closed</span>
                              @endif
                           </h5>
                           <h5><strong>Created At : </strong>{{$notice->created_at}}</h5>
                           
                           <br><br>
                           <h5 align="center"><strong>Messages In This Notice </strong></h5>
                           <hr>

                           @foreach($notice->messages as $reply)

                           <div class="row">
                              <div class="col-sm-12">
                                 <h5><strong style="color:@if($reply->admin_id)red; @else blue; @endif">@if($reply->admin_id) Reply From Admin : @else  Reply From You @endif</strong></h5>
                                 <p>{!!$reply->message!!}</p>
                                 @if($reply->admin_id) <p><strong> By Admin : </strong>{{$reply->admin->name}}</p>@endif
                                 <p><strong> Date : </strong>{{$reply->created_at}}</p>
                                 <hr>
                              </div>
                        </div>
                           

                           @endforeach

                     </div>
                  </div>
               </div>
            </section>
            <!-- email modal starts here -->
            <form class="form-horizontal" role="form" action="" method="post">
               <div class="modal fade" id="mail">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                           <h4 class="modal-title">Send Pdf to Mail</h4>
                        </div>
                        <div class="modal-body">
                           <div class="form-group">
                              <label for="to" class="col-sm-2 control-label">
                              To <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <input type="email" class="form-control" id="to" name="to" value="">
                              </div>
                              <span class="col-sm-4 control-label" id="to_error">
                              </span>
                           </div>
                           <div class="form-group">
                              <label for="subject" class="col-sm-2 control-label">
                              Subject <span class="text-red">*</span>
                              </label>
                              <div class="col-sm-6">
                                 <input type="text" class="form-control" id="subject" name="subject" value="">
                              </div>
                              <span class="col-sm-4 control-label" id="subject_error">
                              </span>
                           </div>
                           <div class="form-group">
                              <label for="message" class="col-sm-2 control-label">
                              Message                    </label>
                              <div class="col-sm-6">
                                 <textarea class="form-control" id="message" style="resize: vertical;" name="message" value=""></textarea>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-default" style="margin-bottom:0px;" data-dismiss="modal">Close</button>
                           <input type="button" id="send_pdf" class="btn btn-success" value="Send">
                        </div>
                     </div>
                  </div>
               </div>
            </form>
            <!-- email end here -->
            <script language="javascript" type="text/javascript">
               function printDiv(divID) {
                   //Get the HTML of div
                   var divElements = document.getElementById(divID).innerHTML;
                   //Get the HTML of whole page
                   var oldPage = document.body.innerHTML;
               
                   //Reset the page's HTML with div's HTML only
                   document.body.innerHTML = 
                     "<html><head><title></title></head><body>" + 
                     divElements + "</body>";
               
                   //Print Page
                   window.print();
               
                   //Restore orignal HTML
                   document.body.innerHTML = oldPage;
                   window.location.reload();
               }
               function closeWindow() {
                   location.reload(); 
               }
               
               
            </script>
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