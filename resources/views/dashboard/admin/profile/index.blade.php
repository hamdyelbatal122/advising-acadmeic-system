@extends('dashboard.admin.layouts.app')
@section('title', 'My Profile')
@section('content')
<aside class="right-side">
   <section class="content">
      <div class="row">
      <div class="col-xs-12">
         <div class="well">
            <div class="row">
               <div class="col-sm-6">
                  <button class="btn-cs btn-sm-cs" onclick="printDiv('printablediv')"><span class="fa fa-print"></span> Print </button>
                  <button class="btn-cs btn-sm-cs" data-toggle="modal" data-target="#mail"><i class="fa-regular fa-envelope"></i> Send PDF To Mail</button>
               </div>
               <div class="col-sm-6">
                  <ol class="breadcrumb">
                     <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-laptop"></i> Dashboard</a></li>
                     <li class="active">Profile</li>
                  </ol>
               </div>
            </div>
         </div>
         <div id="printablediv">
            <div class="row">
               <div class="col-sm-3">
                  <div class="box box-primary">
                     <div class="box-body box-profile">
                        <center>
                           <img src="{{asset('assets/images/default.png')}}" class="profile-user-img img-responsive img-circle" alt="">  
                        </center>
                        <h3 class="profile-username text-center">
                           {{$admin->name}}   
                        </h3>
                        <p class="text-muted text-center">Admin</p>
                        <ul class="list-group list-group-unbordered">
                           <li class="list-group-item" style="background-color: #FFF">
                              <b>Register NO</b> <a class="pull-right">
                              {{$admin->id}}
                              </a>
                           </li>
                           <li class="list-group-item" style="background-color: #FFF">
                              <b>Profession</b> <a class="pull-right">
                              {{$admin->profession}}
                              </a>
                           </li>
                           <li class="list-group-item" style="background-color: #FFF">
                              <b>Role</b> <a class="pull-right">
                              {{$admin->role_name}}
                              </a>
                           </li>

                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-sm-9">
                  <div class="nav-tabs-custom">
                     <ul class="nav nav-tabs">
                        <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                     </ul>
                     <div class="tab-content">
                        <div class="tab-pane active" id="profile">
                           <div class="panel-body profile-view-dis">
                              <div class="row">

                                 <div class="profile-view-tab">
                                    <p><span>Full Name </span>: 
                                       {{$admin->name}}   
                                    </p>
                                 </div>

                                 <div class="profile-view-tab">
                                    <p><span> Email </span>: 
                                       {{$admin->email}}
                                    </p>
                                 </div>
                                    
                                 <div class="profile-view-tab">
                                    <p><span> Profession </span>: 
                                       {{$admin->profession}}
                                    </p>
                                 </div>
                                 <div class="profile-view-tab">
                                    <p><span> Role </span>: 
                                       {{$admin->role_name}}
                                    </p>  
                                 </div>
                                 
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <form class="form-horizontal" role="form" action="" method="post">
               <div class="modal fade" id="mail">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                           <h4 class="modal-title">Send PDF To Mail</h4>
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
                              Message                        </label>
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
         </div>
      </div>
   </section>
</aside>
@endsection
@section('js')
{{-- <script src="https://demo.school.inilabs.xyz/assets/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> --}}
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
   
   (function($){
        $(window).on("load",function(){
            $(".content").mCustomScrollbar();
        });
    })(jQuery);
</script>
@endsection
@section('css')
{{-- 
<link rel="stylesheet" href="https://demo.school.inilabs.xyz/assets/custom-scrollbar/jquery.mCustomScrollbar.css">
--}}
@endsection