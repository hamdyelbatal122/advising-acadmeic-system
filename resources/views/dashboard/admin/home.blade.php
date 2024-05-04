@extends('dashboard.admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
<aside class="right-side">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="row">
               {{-- 
               <div class="col-sm-12" id="resetDummyData" >
                  <div class="callout callout-danger">
                     <h4>Reminder!</h4>
                     <p>Dummy data will be reset in every <code>30</code> minutes</p>
                  </div>
               </div>
               --}}
               <div class="col-lg-3 col-xs-6">
                  <div class="small-box ">
                     <a class="small-box-footer bg-orange-dark" href="{{route('admin.students.index')}}">
                        <div class="icon bg-orange-dark" style="padding: 9.5px 18px 6px 18px;">
                           <i class="fa icon-student"></i>
                        </div>
                        <div class="inner ">
                           <h3 class="text-white">
                              {{ $students }}                            
                           </h3>
                           <p class="text-white">
                              Student                            
                           </p>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 col-xs-6">
                  <div class="small-box ">
                     <a class="small-box-footer bg-teal-light" href="{{route('admin.users.index')}}">
                        <div class="icon bg-teal-light" style="padding: 9.5px 18px 6px 18px;">
                           <i class="fa fa-user"></i>
                        </div>
                        <div class="inner ">
                           <h3 class="text-white">
                              {{ $users }}                            
                           </h3>
                           <p class="text-white">
                              Users                            
                           </p>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 col-xs-6">
                  <div class="small-box ">
                     <a class="small-box-footer bg-pink-light" href="{{route('admin.notices.index')}}">
                        <div class="icon bg-pink-light" style="padding: 9.5px 18px 6px 18px;">
                           <i class="fa icon-message"></i>
                        </div>
                        <div class="inner ">
                           <h3 class="text-white">
                              {{ $notices }}                            
                           </h3>
                           <p class="text-white">
                            Active Notices                            
                           </p>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 col-xs-6">
                  <div class="small-box ">
                     <a class="small-box-footer bg-purple-light" href="{{route('admin.courses.index')}}">
                        <div class="icon bg-purple-light" style="padding: 9.5px 18px 6px 18px;">
                           <i class="fa icon-subject"></i>
                        </div>
                        <div class="inner ">
                           <h3 class="text-white">
                              {{ $courses }}                            
                           </h3>
                           <p class="text-white">
                              Courses                            
                           </p>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-4">
                  <section class="panel">
                     <div class="profile-db-head bg-maroon-light">
                        <a href="">
                        <img src="{{asset('assets/images/defult1.png')}}" alt="">            </a>
                        <h1>
                           {{ Auth::user()->name }}
                        </h1>
                        <p>Admin</p>
                     </div>
                     <table class="table table-hover">
                        <tbody>
                           <tr>
                              <td>
                                 <i class="glyphicon glyphicon-user text-maroon-light"></i>
                              </td>
                              <td>Name</td>
                              <td>{{Auth::user()->name}}</td>
                           </tr>
                           <tr>
                              <td>
                                 <i class="fa fa-envelope text-maroon-light"></i>
                              </td>
                              <td>Email</td>
                              <td>{{Auth::user()->email}}</td>
                           </tr>
                           <tr>
                              <td>
                                 <i class="fa-solid fa-user-tie text-maroon-light"></i>
                              </td>
                              <td>Profession</td>
                              <td>{{Auth::user()->profession}}</td>
                           </tr>

                        </tbody>
                     </table>
                  </section>
               </div>
               <div class="col-sm-8">
                  <div class="box">
                     <div class="box-header" style="background-color: #fff;">
                        <h3 class="box-title text-black">
                           Last Active Notes             
                        </h3>
                     </div>
                     <div class="box-body" style="padding: 0px;">
                        <table class="table table-hover">
                           <tbody>
                           @foreach($lastNotices as $notice)
                              <tr>
                                 <td>{{$notice->student->id}} - {{$notice->student->first_name}} {{$notice->student->last_name}}</td>
                                 <td>{{$notice->subject}}</td>
                                 <td>{{$notice->title}}</td>
                                 <td><a href="{{route('admin.notices.show', $notice->id)}}" class="btn bg-maroon-light btn-xs mrg" style="background-color:#00bcd4;color:#fff;" data-placement="top" data-toggle="tooltip" data-original-title="View"><span class="fa-solid fa-square-check"></span></a></td>
                              </tr>
                           @endforeach
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</aside>
@endsection