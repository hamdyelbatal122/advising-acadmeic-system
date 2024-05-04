@extends('site.layouts.main')
@section('title', 'Home')
@section('content')

<section class="banner-carousel owl-carousel">
    <div class="banner-part"
       style="background-image: url('{{asset('assets/images/site/slider-bg-1.png')}}')">
       <div class="banner-overlay">
          <div class="container">
             <div class="banner-group">
                <div class="banner-content">
                   <span>a tradition since 1999</span>
                   <h1>Offering Bright Futures</h1>
                   <p>CIS University gradutes are styding in the world&rsquo;s most prestigious universities.</p>
                   <a href=""
                      class="btn btn-inline">apply now</a>
                </div>
                <div class="banner-media">
                   <a class="banner--media-video" target="_blank" data-autoplay="true"
                      data-vbtype="video"
                      href=""><i
                      class="fa-solid fa-play"></i></a>
                   <div class="banner-media-content">
                      <span>CIS University</span>
                      <h3>campus tour</h3>
                      <p>Watch Video</p>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="banner-part"
       style="background-image: url('{{asset('assets/images/site/slider-bg-2.jpg')}}')">
       <div class="banner-overlay">
          <div class="container">
             <div class="banner-group">
                <div class="banner-content">
                   <span>a tradition since 1999</span>
                   <h1>Offering Bright Futures For You</h1>
                   <p>CIS University gradutes are styding in the world&rsquo;s most prestigious universities.</p>
                   <a href=""
                      class="btn btn-inline">apply now</a>
                </div>
                <div class="banner-media">
                   <a class="banner--media-video" target="_blank" data-autoplay="true"
                      data-vbtype="video"
                      href=""><i
                      class="fa-solid fa-play"></i></a>
                   <div class="banner-media-content">
                      <span>CIS University</span>
                      <h3>campus tour</h3>
                      <p>Watch Video</p>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="banner-part"
    style="background-image: url('{{asset('assets/images/site/slider-bg-2.png')}}')">
    <div class="banner-overlay">
          <div class="container">
             <div class="banner-group">
                <div class="banner-content">
                   <span>a tradition since 1999</span>
                   <h1>Offering Bright Futures For You</h1>
                   <p>CIS University gradutes are styding in the world&rsquo;s most prestigious universities.</p>
                   <a href=""
                      class="btn btn-inline">apply now</a>
                </div>
                <div class="banner-media">
                   <a class="banner--media-video" target="_blank" data-autoplay="true"
                      data-vbtype="video"
                      href=""><i
                      class="fa-solid fa-play"></i></a>
                   <div class="banner-media-content">
                      <span>CIS University</span>
                      <h3>campus tour</h3>
                      <p>Watch Video</p>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="feature-part">
    <div class="feature-card">
       <i class="lab-line-education"></i>
       <p>Education in English: Cambridge International Programmed and qualified native English's speaking teachers.</p>
    </div>
    <div class="feature-card">
       <i class="lab-line-book"></i>
       <p>Education in English: Cambridge International Programmed and qualified native English's speaking teachers.</p>
    </div>
    <div class="feature-card">
       <i class="lab-line-notebook"></i>
       <p>Education in English: Cambridge International Programmed and qualified native English's speaking teachers.</p>
    </div>
    <div class="feature-card">
       <i class="lab-line-certificate"></i>
       <p>Education in English: Cambridge International Programmed and qualified native English's speaking teachers.</p>
    </div>
 </section>
 <section class="about-part">
    <div class="container">
       <div class="row">
          <div class="col-12 col-md-6 col-lg-5">
             <div class="about-content">
                <h2 class="section-title">About University</h2>
                <p>
                   CIS University is an independent, non-governmental organisation, established to provide high-quality education to local and expatriate communities in Bangladesh and United State of America.&nbsp;                                ...                            
                </p>
                <a href="" class="btn btn-outline">learn more</a>
             </div>
          </div>
          <div class="col-12 col-md-6 col-lg-7">
             <div class="about-media">
                <img src="{{asset('assets/images/site/about.jpg')}}"
                   alt="about">
                <ul class="about-list">
                   <li class="about-item">
                      <h4><span class="counter">412</span>+</h4>
                      <p>Professor</p>
                   </li>
                   <li class="about-item">
                      <h4><span class="counter">974K</span>+</h4>
                      <p>students</p>
                   </li>
                   <li class="about-item">
                      <h4><span class="counter">213K</span>+</h4>
                      <p>graduates</p>
                   </li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="apply-part">
    <div class="container">
       <div class="apply-content">
          <h2>Apply for Fall 2025</h2>
          <p>Now open for Fall 2025 applications. The closing date for this session is Friday 19 August, 2025.</p>
          <a href="{{route('site.contact')}}" class="btn btn-outline">apply now</a>
       </div>
    </div>
 </section>      
 <section class="event-part">
    <div class="container">
       <div class="section-head">
          <h2 class="section-title">University Events</h2>
          <a href="{{route('site.events')}}" class="section-btn">
          <span>View All Events</span>
          <i class="lni lni-arrow-right"></i>
          </a>
       </div>
       <div class="event-carousel owl-carousel">
          <div class="event-card">
             <a href="#" class="event-media">
             <img src="{{asset('assets/images/site/events/96741e31bb3519ba263ee9900d9e262c1ebd817440fd94d12d4a47a627a4528ff59bcf33b8b999d2a825223c2957581fd5ad6a7666641bdea1555ff5c4e69b3e.jpg')}}"
                alt="event">
             </a>
             <div class="event-content">
                <h4><a
                   href="#">Mid Year Picnic</a>
                </h4>
                <h5>31 Dec, 2022-31 Dec, 2022                                    </h5>
                <p>
                <p>Far far away behind the word mountains far from the countries Vokalia and Consonantia, there live...                                    </p>
                <a class="view" href="#">
                <span>View Event</span>
                <i class="lni lni-arrow-right"></i>
                </a>
             </div>
          </div>
          <div class="event-card">
             <a href="#" class="event-media">
             <img src="{{asset('assets/images/site/events/9bc2dec31c61d90b863d5c73008d45988481ef5e5442e562b88402819b17122886a50d3ca044886a5aac301caea11f559d98a88113b9954c34f936cee56bb59c.jpg')}}"
                alt="event">
             </a>
             <div class="event-content">
                <h4><a
                   href="#">Sports day</a>
                </h4>
                <h5>31 Dec, 2022-31 Dec, 2022                                    </h5>
                <p>The 11th Annual State Championship is a school-only tournament featuring qualified squads from all c...                                    </p>
                <a class="view" href="#">
                <span>View Event</span>
                <i class="lni lni-arrow-right"></i>
                </a>
             </div>
          </div>
          <div class="event-card">
             <a href="#" class="event-media">
             <img src="{{asset('assets/images/site/events/65b2ca2d9ec7e17e683980fa5238a6f9c704c35fb5c50d12daa675ca1a44ea95e17a298d7d945b3528f762bcbc4403e65725ba82cfebe78ada303115e6200e74.jpg')}}"
                alt="event">
             </a>
             <div class="event-content">
                <h4><a
                   href="#">School Meeting</a>
                </h4>
                <h5>31 Dec, 2022-31 Dec, 2022                                    </h5>
                <p>The 11th Annual State Championship is a school-only tournament featuring qualified squads from all c...                                    </p>
                <a class="view" href="#">
                <span>View Event</span>
                <i class="lni lni-arrow-right"></i>
                </a>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="social-part">
    <div class="social-overlay">
       <span></span>
       <h2>The University Community</h2>
       <p>Share your University pride with the world!</p>
       <nav>
          <a target="_blank" href="https://www.facebook.com/f"
             class="lab-fill-facebook-round"></a>
          <a target="_blank" href="https://twitter.com/inilabsn"
             class="lab-fill-twitter-round"></a>
          <a target="_blank" href="https://www.linkedin.com/company/14437981"
             class="lab-fill-linkedin-round"></a>
          <a target="_blank" href="https://www.youtube.com/channel/UCB6xSPlOlec16f-v6pnI_gw"
             class="lab-fill-youtube-round"></a>
          <a target="_blank" href="https://googleplus.com"
             class="lab-fill-google-plus-round"></a>
       </nav>
    </div>
 </section>
 <section class="gallery-part">
    <div class="container">
       <div class="section-head">
          <h2 class="section-title">University’s Gallery</h2>
          <a href="https://demo.school.inilabs.xyz/frontend/page/gallery" class="section-btn">
          <span>see more</span>
          <i class="lni lni-arrow-right"></i>
          </a>
       </div>
       <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
             <a class="venobox-image" data-gall="gallery" href="{{asset('assets/images/site/gallery/48017f95b73fb3d61871186ef37b2c06e100cb6afa41a6624ee054371e076bbf0925db59a5cd01f8eb0cebf9053e5e8a3eac21a59f01864edeec8341a19424db.jpg')}}">
             <img src="{{asset('assets/images/site/gallery/48017f95b73fb3d61871186ef37b2c06e100cb6afa41a6624ee054371e076bbf0925db59a5cd01f8eb0cebf9053e5e8a3eac21a59f01864edeec8341a19424db.jpg')}}" alt="gallery">
             </a>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
             <a class="venobox-image" data-gall="gallery" href="{{asset('assets/images/site/gallery/b2959fd1548600a3fdadaef90cd27b8ccc61105db77abc09e52d6370d5789dd4f7554bdd3f58642a8ba169b349026fca7cb9e0838a98cd09a6b3d55691095e08.jpg')}}">
             <img src="{{asset('assets/images/site/gallery/b2959fd1548600a3fdadaef90cd27b8ccc61105db77abc09e52d6370d5789dd4f7554bdd3f58642a8ba169b349026fca7cb9e0838a98cd09a6b3d55691095e08.jpg')}}" alt="gallery">
             </a>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
             <a class="venobox-image" data-gall="gallery" href="{{asset('assets/images/site/gallery/1d71b93a19d3e53fa561e4b2d65cadf79a5ce65d64d99f256ce2bf26c475c37130e1667a6b7e21e1b0188502a130d84b302197597933919a8cc14022b1e1efa2.jpg')}}">
             <img src="{{asset('assets/images/site/gallery/1d71b93a19d3e53fa561e4b2d65cadf79a5ce65d64d99f256ce2bf26c475c37130e1667a6b7e21e1b0188502a130d84b302197597933919a8cc14022b1e1efa2.jpg')}}" alt="gallery">
             </a>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
             <a class="venobox-image" data-gall="gallery" href="{{asset('assets/images/site/gallery/902e631a1b7fa8410caf25e1fe49be3ac882746228afe065260418930fc460f93f0c295fe3468344f354f1d9f69eec27ecb05c788f974303a4f06160d2a648fa.jpg')}}">
             <img src="{{asset('assets/images/site/gallery/902e631a1b7fa8410caf25e1fe49be3ac882746228afe065260418930fc460f93f0c295fe3468344f354f1d9f69eec27ecb05c788f974303a4f06160d2a648fa.jpg')}}" alt="gallery">
             </a>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
             <a class="venobox-image" data-gall="gallery" href="{{asset('assets/images/site/gallery/df9cb5f8f6f4a9d25ce6178908abb7a423088fb4665d93dea9276be9152252d5372dcbad56e1e6a8cab211aee2b82c624fb1d8c8c09c571c02e6cbac36f46ef0.jpg')}}">
             <img src="{{asset('assets/images/site/gallery/df9cb5f8f6f4a9d25ce6178908abb7a423088fb4665d93dea9276be9152252d5372dcbad56e1e6a8cab211aee2b82c624fb1d8c8c09c571c02e6cbac36f46ef0.jpg')}}" alt="gallery">
             </a>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
             <a class="venobox-image" data-gall="gallery" href="{{asset('assets/images/site/gallery/6086814d457520090643aaa49c1776496c3422c38a363040800945bd12819b01711a6b8dd4b3b0b934d1fc4163e2f451923134d4726ea90474bd3d9f992bfe31.jpg')}}">
             <img src="{{asset('assets/images/site/gallery/6086814d457520090643aaa49c1776496c3422c38a363040800945bd12819b01711a6b8dd4b3b0b934d1fc4163e2f451923134d4726ea90474bd3d9f992bfe31.jpg')}}" alt="gallery">
             </a>
          </div>
       </div>
    </div>
 </section>
@endsection

@section('css')
      <!-- CUSTOM -->
      <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/gallery.css')}}">
@endsection