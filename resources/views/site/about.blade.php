@extends('site.layouts.main')
@section('title', 'about')
@section('content')
<section class="about-part">
   <div class="container">
      <div class="row">
         <div class="col-12 col-lg-6">
            <h1 class="section-page-title">About  University</h1>
            <div class="about-content mt-0">
               <h2 class="section-title"> NIK  University</h2>
               <p><span style="color: rgb(12, 16, 40); font-family: " open="" sans",="" sans-serif;="" font-size:="" 18px;"=""> NIK  University is an independent, non-governmental organisation, established to provide high-quality education to local and expatriate communities in Bangladesh and United State of America.&nbsp;</span><span style="color: rgb(12, 16, 40); font-family: " open="" sans",="" sans-serif;="" font-size:="" 18px;="" background-color:="" rgb(248,="" 247,="" 246);"=""> NIK  University is an independent, non-governmental organisation, established to provide high-quality education to local and expatriate communities in Bangladesh and United State of America.&nbsp;</span></p>
            </div>
         </div>
         <div class="col-12 col-lg-6">
            <div class="about-media">  
               <img src="{{asset('assets/images/site/about.jpg')}}" alt="about">
            </div>
         </div>
      </div>
   </div>
</section>
<section class="history-part">
   <div class="history-overlay">
      <div class="container">
         <div class="history-content">
            <h2 class="section-title">Our History</h2>
            <div class="row row-cols-1 row-cols-md-3">
               <div class="col">
                  <h3>Origin</h3>
                  <p> NIK  University is a fully accredited, independent, international  University in Dhaka, Bangladesh. Serving families from Dhaka’s local and international communities, we successfully deliver a rigorous  NIK curriculum program for students from Early Childhoo</p>
               </div>
               <div class="col">
                  <h3>Campus</h3>
                  <p> NIK  University is a fully accredited, independent, international  University in Dhaka, Bangladesh. Serving families from Dhaka’s local and international communities, we successfully deliver a rigorous  NIK curriculum program for students from Early Childhoo</p>
               </div>
               <div class="col">
                  <h3>Success</h3>
                  <p>We achieve these goals through a challenging academic program enriched by a broad and highly diverse extra- curricular program, vibrant visual and performing arts, an extensive sports program at both intra-mural and varsity levels, unique experiential lea</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="vision-part">
   <div class="container">
      <div class="vision-content">
         <h2 class="section-title">Our Vision</h2>
         <p>Our mission is to empower students to fulfil their potential as responsible, innovative, and open-minded global citizens through the development of high-quality academic skills and social competencies.</p>
      </div>
   </div>
</section>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/about.css')}}">
@endsection