@extends('site.layouts.main')
@section('title', 'Gallery')
@section('content')
<section class="gallery-part page">
   <div class="container">
      <h1 class="section-page-title">University’s Gallery</h1>
      <div class="row">
         <div class="col-12 col-sm-6 col-md-4">
            <a class="venobox-image vbox-item" data-gall="gallery" href="{{asset('assets/images/site/gallery/48017f95b73fb3d61871186ef37b2c06e100cb6afa41a6624ee054371e076bbf0925db59a5cd01f8eb0cebf9053e5e8a3eac21a59f01864edeec8341a19424db.jpg')}}">
            <img src="{{asset('assets/images/site/gallery/48017f95b73fb3d61871186ef37b2c06e100cb6afa41a6624ee054371e076bbf0925db59a5cd01f8eb0cebf9053e5e8a3eac21a59f01864edeec8341a19424db.jpg')}}" alt="gallery">
            </a>
         </div>
         <div class="col-12 col-sm-6 col-md-4">
            <a class="venobox-image vbox-item" data-gall="gallery" href="{{asset('assets/images/site/gallery/b2959fd1548600a3fdadaef90cd27b8ccc61105db77abc09e52d6370d5789dd4f7554bdd3f58642a8ba169b349026fca7cb9e0838a98cd09a6b3d55691095e08.jpg')}}">
            <img src="{{asset('assets/images/site/gallery/b2959fd1548600a3fdadaef90cd27b8ccc61105db77abc09e52d6370d5789dd4f7554bdd3f58642a8ba169b349026fca7cb9e0838a98cd09a6b3d55691095e08.jpg')}}" alt="gallery">
            </a>
         </div>
         <div class="col-12 col-sm-6 col-md-4">
            <a class="venobox-image vbox-item" data-gall="gallery" href="{{asset('assets/images/site/gallery/1d71b93a19d3e53fa561e4b2d65cadf79a5ce65d64d99f256ce2bf26c475c37130e1667a6b7e21e1b0188502a130d84b302197597933919a8cc14022b1e1efa2.jpg')}}">
            <img src="{{asset('assets/images/site/gallery/1d71b93a19d3e53fa561e4b2d65cadf79a5ce65d64d99f256ce2bf26c475c37130e1667a6b7e21e1b0188502a130d84b302197597933919a8cc14022b1e1efa2.jpg')}}" alt="gallery">
            </a>
         </div>
         <div class="col-12 col-sm-6 col-md-4">
            <a class="venobox-image vbox-item" data-gall="gallery" href="{{asset('assets/images/site/gallery/902e631a1b7fa8410caf25e1fe49be3ac882746228afe065260418930fc460f93f0c295fe3468344f354f1d9f69eec27ecb05c788f974303a4f06160d2a648fa.jpg')}}">
            <img src="{{asset('assets/images/site/gallery/902e631a1b7fa8410caf25e1fe49be3ac882746228afe065260418930fc460f93f0c295fe3468344f354f1d9f69eec27ecb05c788f974303a4f06160d2a648fa.jpg')}}" alt="gallery">
            </a>
         </div>
         <div class="col-12 col-sm-6 col-md-4">
            <a class="venobox-image vbox-item" data-gall="gallery" href="{{asset('assets/images/site/gallery/df9cb5f8f6f4a9d25ce6178908abb7a423088fb4665d93dea9276be9152252d5372dcbad56e1e6a8cab211aee2b82c624fb1d8c8c09c571c02e6cbac36f46ef0.jpg')}}">
            <img src="{{asset('assets/images/site/gallery/df9cb5f8f6f4a9d25ce6178908abb7a423088fb4665d93dea9276be9152252d5372dcbad56e1e6a8cab211aee2b82c624fb1d8c8c09c571c02e6cbac36f46ef0.jpg')}}" alt="gallery">
            </a>
         </div>
         <div class="col-12 col-sm-6 col-md-4">
            <a class="venobox-image vbox-item" data-gall="gallery" href="{{asset('assets/images/site/gallery/6086814d457520090643aaa49c1776496c3422c38a363040800945bd12819b01711a6b8dd4b3b0b934d1fc4163e2f451923134d4726ea90474bd3d9f992bfe31.jpg')}}">
            <img src="{{asset('assets/images/site/gallery/6086814d457520090643aaa49c1776496c3422c38a363040800945bd12819b01711a6b8dd4b3b0b934d1fc4163e2f451923134d4726ea90474bd3d9f992bfe31.jpg')}}" alt="gallery">
            </a>
         </div>
      </div>
   </div>
</section>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/gallery.css')}}">
@endsection