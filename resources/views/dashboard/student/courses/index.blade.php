@extends('dashboard.student.layouts.app')
@section('title', 'My Courses')
@section('content')
<aside class="right-side">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title"><i class="fa icon-subject"></i> My Courses</h3>
                  <ol class="breadcrumb">
                     <li><a href="{{route('student.home')}}"><i class="fa fa-laptop"></i> Dashboard</a></li>
                     <li class="active">My Courses</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-sm-12">

                        <div class="nav-tabs-custom">
                           <ul class="nav nav-tabs">
                              <li class="active"><a data-toggle="tab" href="#all" aria-expanded="true"> My Courses</a></li>
                           </ul>
                           <div class="tab-content">
                              <div id="all" class="tab-pane active">
                                 <div id="hide-table">
                                    <table id="myTable" class="display" style="width:100%">
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Course Code</th>
                                             <th>Course Name</th>
                                             <th>Professor</th>
                                             <th>Credit Hours</th>
                                             <th>Lab</th>
                                             <th>Grade</th>
                                             <th>Pass Mark</th>
                                             <th>Type</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          
                                          @foreach($courses as $course)
                                          <tr id="id-{{$course->id}}">
                                             <td>{{ $loop->iteration }}</td>
                                             <td>{{$course->course->code}}</td>
                                             <td>{{$course->course->name}}</td>
                                             <td>{{$course->course->professor->name}}</td>
                                             <td>{{$course->course->hours}}</td>
                                             <td>@if($course->course->lab == 1) Yes @else No @endif</td>
                                             <td>100</td>
                                             <td>50</td>
                                             <td>
                                                <button type="button" class="btn btn-primary btn-xs">Mandatory</button>
                                             </td>
                                          </tr>
                                          @endforeach
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- nav-tabs-custom -->
                     </div>
                     <!-- col-sm-12 -->
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
   
   $('#myTable').DataTable();
   

</script>
@endsection