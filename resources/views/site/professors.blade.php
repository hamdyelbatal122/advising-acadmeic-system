@extends('site.layouts.main')
@section('title', 'Professors')
@section('content')
<section class="teacher-part">
   <div class="container">
      <div class="teacher-content">
         <h1 class="section-page-title">Our Professors</h1>
         <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            @foreach($professors as $professor)
            <div class="col">
               <div class="teacher-card">
                  <div class="teacher-media">
                     <img class="teacher-avater" src="{{$professor->image}}">
                     <div class="teacher-overlay">
                        <a target="_blank" href="#" class="lab-fill-facebook-round"></a>
                        <a target="_blank" href="#" class="lab-fill-twitter-round"></a>
                        <a target="_blank" href="#" class="lab-fill-linkedin-round"></a>
                     </div>
                  </div>
                  <div class="teacher-meta">
                     <h3>{{$professor->full_name}}</h3>
                     <p>{{$professor->profession}}</p>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
</section>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/professors.css')}}">
@endsection