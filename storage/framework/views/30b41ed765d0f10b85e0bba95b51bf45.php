<!DOCTYPE html>
<html style="min-height: 1276px;">
   <head>
      <meta charset="UTF-8">
      <title>
         <?php echo $__env->yieldContent('title'); ?>
      </title>
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <link rel="SHORTCUT ICON" href="<?php echo e(asset('assets/images/fav.png')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('assets/css/pace.css')); ?>">
      <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('assets/css/fontawesome/css/all.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('assets/css/icomoon.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('assets/css/ini-icon.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('assets/css/dataTables.bootstrap.css')); ?>" rel="stylesheet">
      <link id="headStyleCSSLink" href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('assets/css/hidetable.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('assets/css/inilabs.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('assets/css/responsive.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('assets/css/toastr.min.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('assets/css/mailandmedia.css')); ?>" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo e(asset('assets/css/buttons.dataTables.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('assets/css/combined.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('assets/css/ajaxloder.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('assets/css/jquery-ui.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('assets/css/fullcalendar.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('assets/css/sweetalert.min.css')); ?>">
      <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/1.3.1/css/toastr.css">
      <link href="<?php echo e(asset('assets/css/default-style.css')); ?>" rel="stylesheet">
     </head>
      <?php echo $__env->yieldContent('css'); ?>
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


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
         <img src="<?php echo e(asset('assets/ajaxloder/loader.gif')); ?>" width="150" height="150">
      </div>
      <header class="header">
         <a href="#" class="logo">
         <?php echo e(config('app.name')); ?>

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
                     <a target="_blank" href="<?php echo e(route('site.home')); ?>" class="dropdown-toggle" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Visit Site">
                     <i class="fa fa-globe"></i>
                     </a>
                  </li>
                  <li class="dropdown notifications-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <img class="language-img" src="<?php echo e(asset('assets/images/language_image/english.png')); ?>"> 
                     </a>
                     <ul class="dropdown-menu">
                        <li class="header"> Language</li>
                        <li>
                           <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;">
                              <ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">
                                 <li class="language" id="arabic">
                                    <a href="language/index/arabic">
                                       <div class="pull-left">
                                          <img src="<?php echo e(asset('assets/images/language_image/arabic.png')); ?>">
                                       </div>
                                       <h4>
                                          Arabic
                                       </h4>
                                    </a>
                                 </li>
                                 <li class="language" id="arabic">
                                    <a href="language/index/arabic">
                                       <div class="pull-left">
                                          <img src="<?php echo e(asset('assets/images/language_image/french.png')); ?>">
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
                     <img src="<?php echo e(asset('assets/images/default.png')); ?>" class="user-logo" alt="">
                     <span>
                     <?php echo e($admin->name); ?>                                     
                     <i class="caret"></i>
                     </span>   
                     </a>
                     <ul class="dropdown-menu">
                        <li class="user-body">
                           <div class="col-xs-6 text-center">
                              <a href="<?php echo e(route('admin.profile.index')); ?>">
                                 <div><i class="fa fa-briefcase"></i></div>
                                 Profile 
                              </a>
                           </div>
                           <div class="col-xs-6 text-center">
                              <a href="<?php echo e(route('admin.profile.password')); ?>">
                                 <div><i class="fa fa-lock"></i></div>
                                 Password 
                              </a>
                           </div>
                        </li>
                        <li class="user-footer">
                           <div class="text-center">
                              <form action="<?php echo e(route('admin.logout')); ?>" method="post">
                                 <?php echo csrf_field(); ?>
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
                     <img style="display:block" src="<?php echo e(asset('assets/images/defult1.png')); ?>" class="img-circle" alt="">
                  </div>
                  <div class="pull-left info">
                     <p><?php echo e($admin->name); ?></p>
                     <a href="profile/index">
                     <i class="fa-regular fa-hand color-green"></i>
                     <?php echo e($admin->role_name); ?>  
                     </a>
                  </div>
               </div>
               <ul class="sidebar-menu">

                  <li <?php echo e(Request::is('*/dashboard') ? 'class=active' : ''); ?>><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa fa-laptop"></i><span>Dashboard</span> </a></li>
                 
                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('View Admins')): ?>
                  <li <?php echo e(Request::is('*/users/*') ? 'class=active' : ''); ?>><a href="<?php echo e(route('admin.users.index')); ?>"><i class="fa icon-teacher"></i><span>Users</span> </a></li>
                 <?php endif; ?>
                 <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('View Students')): ?>
                  <li <?php echo e(Request::is('*/students/*') ? 'class=active' : ''); ?>> <a href="<?php echo e(route('admin.students.index')); ?>"><i class="fa icon-student"></i><span>Students</span> </a></li>
                 <?php endif; ?>
                 
                 <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['View Courses', 'View Advisings', 'View Marks'])): ?>

                  <li class="treeview <?php echo e(Request::is('*/courses/*','*/advising/*','*/marks/*') ? 'active' : ''); ?>">
                     <a href="#"><i class="fa icon-academicmain"></i><span>Academic</span> <i class="fa fa-angle-left pull-right"></i></a>

                     <ul class="treeview-menu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('View Courses')): ?>
                        <li <?php echo e(Request::is('*/courses/*') ? 'class=active' : ''); ?>><a href="<?php echo e(route('admin.courses.index')); ?>" style="margin-left: 0px;"><i class="fa icon-subject"></i><span>Courses</span> </a></li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('View Advisings')): ?>
                        <li <?php echo e(Request::is('*/advising/*') ? 'class=active' : ''); ?>><a href="<?php echo e(route('admin.advising.index')); ?>" style="margin-left: 0px;"><i class="fa icon-assignment"></i><span>Advising</span> </a></li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('View Marks')): ?>
                        <li <?php echo e(Request::is('*/marks/*') ? 'class=active' : ''); ?>><a href="<?php echo e(route('admin.marks.index')); ?>" style="margin-left: 0px;"><i class=" fa fa-file-invoice"></i><span>Marks</span> </a></li>
                        <?php endif; ?>
                     </ul>                     
                  </li>

                  <?php endif; ?>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('View Notices')): ?>
                        <li <?php echo e(Request::is('*/notices/*') ? 'class=active' : ''); ?>><a href="<?php echo e(route('admin.notices.index')); ?>"><i class="fa fa-envelope"></i><span>Notices</span> </a></li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('View Roles')): ?>
                        <li <?php echo e(Request::is('*/roles/*') ? 'class=active' : ''); ?>><a href="<?php echo e(route('admin.roles.index')); ?>"><i class="fa fa-person-military-pointing"></i><span>Roles</span> </a></li>
                        <?php endif; ?>
               </ul>
            </section>
            <!-- /.sidebar -->
         </aside>
         <?php echo $__env->yieldContent('content'); ?>
         <footer class="main-footer">
            <div class="pull-right hidden-xs">
               <b>v</b>1.0.0    
            </div>
            <strong>Copyright © <?php echo e(config('app.name')); ?></strong>
         </footer>
      </div>
      <script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/js/style.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.dataTables.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/js/dataTables.buttons.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/js/jszip.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/js/pdfmake.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/js/vfs_fonts.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/js/buttons.html5.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/js/dataTables.bootstrap.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/js/inilabs.js')); ?>"></script>
      
      <script type="text/javascript" src="<?php echo e(asset('assets/js/toastr.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/js/highcharts.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/js/highcharts-more.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/js/data.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/js/drilldown.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/js/exporting.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/js/jquery-ui.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/js/moment.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/js/fullcalendar.min.js')); ?>"></script>
      <script type="text/javascript" src="<?php echo e(asset('assets/js/sweetalert.min.js')); ?>"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/1.3.1/js/toastr.js"></script>

      <?php echo $__env->yieldContent('js'); ?>
   </body>
</html><?php /**PATH E:\xampp\htdocs\ac\resources\views/dashboard/admin/layouts/app.blade.php ENDPATH**/ ?>