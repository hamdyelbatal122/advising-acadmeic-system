@extends('dashboard.student.layouts.app')
@section('title', 'My supervisors')
@section('content')
<aside class="right-side">
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title"><i class="fa icon-teacher"></i> My supervisors</h3>
                  <ol class="breadcrumb">
                     <li><a href="{{route('student.home')}}"><i class="fa fa-laptop"></i> Dashboard</a></li>
                     <li class="active">My supervisors</li>
                  </ol>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-sm-12">

                        <div class="nav-tabs-custom">
                           <ul class="nav nav-tabs">
                              <li class="active"><a data-toggle="tab" href="#all" aria-expanded="true"> My supervisors</a></li>
                           </ul>
                           <div class="tab-content">
                              <div id="all" class="tab-pane active">
                                 <div id="hide-table">
                                    <table id="myTable" class="display" style="width:100%">
                                       <thead>
                                          <tr>
                                             <th>supervisor Code</th>
                                             <th>supervisor Name</th>
                                             <th>Email</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          
                                          @foreach($supervisors as $supervisor)
                                          <tr id="id-{{$supervisor->id}}">
                                             <td>{{$supervisor->id}}</td>
                                             <td>{{$supervisor->name}}</td>
                                             <td>{{$supervisor->email}}</td>
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