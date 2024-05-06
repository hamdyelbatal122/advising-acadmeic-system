<!DOCTYPE html>
<html style="min-height: 1276px;">
   <head>
      <meta charset="UTF-8">
      <title>
         @yield('title')
      </title>
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <link rel="SHORTCUT ICON" href="{{asset('assets/images/fav.png')}}">
      <link rel="stylesheet" href="{{asset('assets/css/pace.css')}}">
      <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/fontawesome/css/all.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/icomoon.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/ini-icon.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/dataTables.bootstrap.css')}}" rel="stylesheet">
      <link id="headStyleCSSLink" href="{{asset('assets/css/style.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/hidetable.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/inilabs.css')}}" rel="stylesheet">
      <link id="headInilabsCSSLink" href="{{asset('assets/css/inilabs.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/toastr.min.css')}}" rel="stylesheet">
      <link href="{{asset('assets/css/mailandmedia.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('assets/css/buttons.dataTables.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/combined.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/ajaxloder.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/fullcalendar.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/sweetalert.min.css')}}">
      <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/1.3.1/css/toastr.css">
      @yield('css')
      <meta name="csrf-token" content="{{ csrf_token() }}">


   </head>
   <body class="skin-blue fuelux  pace-done" style="min-height: 1276px;">
      <div class="pace  pace-inactive">
         <div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
            <div class="pace-progress-inner"></div>
         </div>
         <div class="pace-activity"></div>
      </div>
      <div class="se-pre-con" style="display: none;"></div>
      <div id="loading" style="display: none;">
         <img src="{{asset('assets/ajaxloder/loader.gif')}}" width="150" height="150">
      </div>
      <header class="header">
        <a href="#" class="logo">
         {{config('app.name')}}
        </a>
         <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </a>
            <div class="navbar-right">
               <ul class="nav navbar-nav">
                  <li class="dropdown notifications-menu">
                     <a target="_blank" href="{{route('site.home')}}" class="dropdown-toggle" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Visit Site">
                        <i class="fa fa-globe"></i>
                     </a>
                  </li>
               
                  <li class="dropdown notifications-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <img class="language-img" src="{{asset('assets/images/language_image/english.png')}}"> 
                     </a>
                     <ul class="dropdown-menu">
                        <li class="header"> Language</li>
                        <li>
                           <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;">
                              <ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">
                                 <li class="language" id="arabic">
                                    <a href="language/index/arabic">
                                       <div class="pull-left">
                                          <img src="{{asset('assets/images/language_image/arabic.png')}}">
                                       </div>
                                       <h4>
                                          Arabic
                                       </h4>
                                    </a>
                                 </li>
                                 <li class="language" id="arabic">
                                    <a href="language/index/arabic">
                                       <div class="pull-left">
                                          <img src="{{asset('assets/images/language_image/french.png')}}">
                                       </div>
                                       <h4>
                                          French
                                       </h4>
                                    </a>
                                 </li>
                              </ul>
                              <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 0px; z-index: 99; right: 1px;"></div>
                              <div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                           </div>
                        </li>
                        <li class="footer"></li>
                     </ul>
                  </li>
                  <li class="dropdown user user-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <img src="{{asset('assets/images/default.png')}}" class="user-logo" alt="">
                     <span>
                     {{ $student->first_name . ' ' . $student->last_name}}                                     
                     <i class="caret"></i>
                     </span>   
                     </a>
                     <ul class="dropdown-menu">
                        <li class="user-body">
                           <div class="col-xs-6 text-center">
                              <a href="{{route('student.profile.index')}}">
                                 <div><i class="fa fa-briefcase"></i></div>
                                 Profile 
                              </a>
                           </div>
                           <div class="col-xs-6 text-center">
                              <a href="{{route('student.profile.password')}}">
                                 <div><i class="fa fa-lock"></i></div>
                                 Password 
                              </a>
                           </div>
                        </li>
                        <li class="user-footer">
                           <div class="text-center">
                              <form action="{{ route('student.logout') }}" method="post">
                                 @csrf
                                 <button type="submit" style="background: transparent; border: none; color:white;">
                                     <div><i class="fa fa-power-off"></i></div>
                                     Log out 
                                 </button>
                             </form>
                           </div>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
      </header>
      <div class="wrapper row-offcanvas row-offcanvas-left" style="min-height: 604px;">
         <!-- Left side column. contains the logo and sidebar -->
         <aside class="left-side sidebar-offcanvas" style="min-height: 1276px;">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
               <!-- Sidebar user panel -->
               <div class="user-panel">
                  <div class="pull-left image">
                     <img style="display:block" src="{{asset('assets/images/defult1.png')}}" class="img-circle" alt="">
                  </div>
                  <div class="pull-left info">
                     <p>{{ $student->first_name . ' ' . $student->last_name}}</p>
                     <a href="profile/index">
                     <i class="fa-regular fa-hand color-green"></i>
                     Student  
                     </a>
                  </div>
               </div>

               <ul class="sidebar-menu">
                  <li {{Request::is('dashboard') ? 'class=active' : ''}}><a href="{{route('student.home')}}"><i class="fa fa-laptop"></i><span>Dashboard</span> </a></li>

                  <li {{Request::is('*/courses/*') && !Request::is('*/courses/routine*') && !Request::is('*/courses/exams*') ? 'class=active' : ''}}><a href="{{route('student.courses.index')}}"><i class="fa icon-subject"></i><span>My Course</span> </a></li>

                  <li {{Request::is('*/routine') ? 'class=active' : ''}}><a href="{{route('student.courses.routine')}}"><i class="fa icon-routine"></i><span>Time Table</span> </a></li>

                  <li {{Request::is('*/exams') ? 'class=active' : ''}}><a href="{{route('student.courses.exams')}}"><i class="fa fa-puzzle-piece"></i><span>Exam Schedules</span> </a></li>
                 
                  <li {{Request::is('*/marks') ? 'class=active' : ''}}><a href="{{route('student.marks.index')}}"><i class=" fa fa-file-invoice"></i><span>Marks</span> </a></li>
                 
                  <li {{Request::is('*/notices/*') ? 'class=active' : ''}}><a href="{{route('student.notices.index')}}"><i class="fa fa-envelope"></i><span>Notices</span> </a></li>
                  
               </ul>
            </section>
            <!-- /.sidebar -->
         </aside>

            @yield('content')

         <footer class="main-footer">
            <div class="pull-right hidden-xs">
               <b>v</b>1.0.0    
            </div>
            <strong>Copyright © {{config('app.name')}}</strong>
         </footer>
      </div>
      <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/style.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/dataTables.buttons.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/jszip.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/pdfmake.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/vfs_fonts.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/buttons.html5.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/dataTables.bootstrap.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/inilabs.js')}}"></script>
      {{-- <!-- <script type="text/javascript" src="{{asset('slimScroll/jquery.slimscroll.min.js')}}"></script> --> --}}
      <script type="text/javascript" src="{{asset('assets/js/toastr.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/highcharts.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/highcharts-more.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/data.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/drilldown.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/exporting.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/moment.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/fullcalendar.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('assets/js/sweetalert.min.js')}}"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/1.3.1/js/toastr.js"></script>

      @yield('js')
      
   </body>
</html>