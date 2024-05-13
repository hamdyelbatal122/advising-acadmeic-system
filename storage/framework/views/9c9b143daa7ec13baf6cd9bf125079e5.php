<?php $__env->startSection('title', env('APP_NAME') . ' | Home'); ?>
<?php $__env->startSection('content'); ?>
<section class="banner-carousel owl-carousel">
   <div class="banner-part"
      style="background-image: url('<?php echo e(asset('assets/images/site/slider-bg-1.png')); ?>')">
      <div class="banner-overlay">
         <div class="container">
            <div class="banner-group">
               <div class="banner-content">
                  <span>Legacy of Excellence</span>
                  <h1>Empowering Tomorrow's Leaders</h1>
                  <p> 
                     Through cutting-edge academic programs, we shape bright futures, fostering innovation and excellence in our vibrant Institute community.
                  </p>
                  <a href="#"
                     class="btn btn-inline">apply now</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="banner-part"
      style="background-image: url('<?php echo e(asset('assets/images/site/slider-bg-2.jpg')); ?>')">
      <div class="banner-overlay">
         <div class="container">
            <div class="banner-group">
               <div class="banner-content">
                  <span>Community Bonds</span>
                  <h1>Innovative Education Bright Futures</h1>
                  <p>At our Institute, we offer groundbreaking academic programs, guiding students towards success and transformative learning experiences.</p>
                  <a href="#"
                     class="btn btn-inline">apply now</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="banner-part"
      style="background-image: url('<?php echo e(asset('assets/images/site/slider-bg-2.png')); ?>')">
      <div class="banner-overlay">
         <div class="container">
            <div class="banner-group">
               <div class="banner-content">
                  <span>Spirit of Innovation</span>
                  <h1>Shaping Bright Futures Through Innovation</h1>
                  <p>Discover the pulsating heart of our institute, where avant garde academic initiatives fuel greatness, crafting promising destinies for every student.</p>
                  <a href="#"
                     class="btn btn-inline">apply now</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="feature-part">
   <div class="feature-card">
      <i class="lab-line-education"></i>
      <p>Experience academic excellence with our comprehensive programs. Led by industry experts.</p>
   </div>
   <div class="feature-card">
      <i class="lab-line-book"></i>
      <p>Explore a world of knowledge and opportunity. Our expert faculty and modern facilities ensure a transformative educational journey.</p>
   </div>
   <div class="feature-card">
      <i class="lab-line-notebook"></i>
      <p>Open the door to limitless possibilities in our dynamic learning environment. From technology to business.</p>
   </div>
   <div class="feature-card">
      <i class="lab-line-certificate"></i>
      <p>Embark on a journey into a realm overflowing with potential and personal growth. Guided by our devoted faculty and unparalleled resources.</p>
   </div>
</section>
<section class="about-part">
   <div class="container">
      <div class="row">
         <div class="col-12 col-md-6 col-lg-5">
            <div class="about-content">
               <h2 class="section-title">About Institute</h2>
               <p>
                  CIS Institute stands as a beacon of academic excellence, fostering innovation and empowering students to thrive  dynamic global landscape. Join us in shaping tomorrow's leaders through transformative education and impactful learning experiences &nbsp;                                ...                            
               </p>
               <a href="<?php echo e(route('site.about')); ?>" class="btn btn-outline">learn more</a>
            </div>
         </div>
         <div class="col-12 col-md-6 col-lg-7">
            <div class="about-media">
               <img src="<?php echo e(asset('assets/images/site/about.jpg')); ?>"
                  alt="about">
               <ul class="about-list">
                  <li class="about-item">
                     <h4><span class="counter"><?php echo e($professors_count); ?></span>+</h4>
                     <p>Professor</p>
                  </li>
                  <li class="about-item">
                     <h4><span class="counter"><?php echo e($students_count); ?></span>+</h4>
                     <p>Students</p>
                  </li>
                  <li class="about-item">
                     <h4><span class="counter"><?php echo e($graduation_count); ?></span>+</h4>
                     <p>Graduates</p>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="teacher-part">
   <div class="container">
      <div class="section-head">
         <h2 class="section-title">Our Professors</h2>
      </div>
      <div class="teacher-carousel owl-carousel carousel-arrow owl-loaded owl-drag">
         <div class="owl-stage-outer">
            <div class="owl-stage" style="transform: translate3d(-2872px, 0px, 0px); transition: all 1s ease 0s; width: 8616px;">
               <?php $__currentLoopData = $professors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $professor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="owl-item" style="width: 329px; margin-right: 30px;">
                  <div class="teacher-card">
                     <div class="teacher-media">
                        <img class="teacher-avater" src="<?php echo e($professor->image); ?>" >
                        <div class="teacher-overlay">
                           <a href="#"  class="lab-fill-facebook-round"></a>
                           <a href="#"  class="lab-fill-twitter-round"></a>
                           <a href="#"  class="lab-fill-linkedin-round"></a>
                        </div>
                     </div>
                     <div class="teacher-meta">
                        <h3><?php echo e($professor->full_name); ?></h3>
                        <p><?php echo e($professor->profession); ?></p>
                     </div>
                  </div>
               </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
         </div>
         <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="lni lni-arrow-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="lni lni-arrow-right"></i></button></div>
         <div class="owl-dots disabled"></div>
      </div>
      <div class="section-footer">
         <a href="<?php echo e(route('site.professors')); ?>" class="btn btn-inline">See Our All Professors</a>
      </div>
   </div>
</section>
<section class="event-part">
   <div class="container">
      <div class="section-head">
         <h2 class="section-title">Institute Events</h2>
         <a href="<?php echo e(route('site.events')); ?>" class="section-btn">
         <span>View All Events</span>
         <i class="lni lni-arrow-right"></i>
         </a>
      </div>
      <div class="event-carousel owl-carousel">
         <div class="event-card">
            <a href="#" class="event-media">
            <img src="<?php echo e(asset('assets/images/site/events/96741e31bb3519ba263ee9900d9e262c1ebd817440fd94d12d4a47a627a4528ff59bcf33b8b999d2a825223c2957581fd5ad6a7666641bdea1555ff5c4e69b3e.jpg')); ?>"
               alt="event">
            </a>
            <div class="event-content">
               <h4><a
                  href="#">Reception of the Quality Committee</a>
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
            <img src="<?php echo e(asset('assets/images/site/events/9bc2dec31c61d90b863d5c73008d45988481ef5e5442e562b88402819b17122886a50d3ca044886a5aac301caea11f559d98a88113b9954c34f936cee56bb59c.jpg')); ?>"
               alt="event">
            </a>
            <div class="event-content">
               <h4><a
                  href="#">Sports day</a>
               </h4>
               <h5>31 Dec, 2022-31 Dec, 2022                                    </h5>
               <p>The 31 Annual State Championship showcases Institute-exclusive teams, gathering qualified squads from across...                                </p>
               <a class="view" href="#">
               <span>View Event</span>
               <i class="lni lni-arrow-right"></i>
               </a>
            </div>
         </div>
         <div class="event-card">
            <a href="#" class="event-media">
            <img src="<?php echo e(asset('assets/images/site/events/65b2ca2d9ec7e17e683980fa5238a6f9c704c35fb5c50d12daa675ca1a44ea95e17a298d7d945b3528f762bcbc4403e65725ba82cfebe78ada303115e6200e74.jpg')); ?>"
               alt="event">
            </a>
            <div class="event-content">
               <h4><a
                  href="#">Institute Meeting</a>
               </h4>
               <h5>31 Dec, 2022-31 Dec, 2022                                    </h5>
               <p>The 11th Annual State Championship is a Institute-only tournament featuring qualified squads from all c...                                    </p>
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
      <h2>The Institute Community</h2>
      <p>Share your Institute pride with the world!</p>
      <nav>
         <a target="_blank" href="https://facebook.com/CIS.EDU1"
            class="lab-fill-facebook-round"></a>
         <a target="_blank" href="https://x.com"
            class="lab-fill-twitter-round"></a>
         <a target="_blank" href="https://linkedin.com"
            class="lab-fill-linkedin-round"></a>
         <a target="_blank" href="https://youtube.com/@CIS.EDU1"
            class="lab-fill-youtube-round"></a>
         <a target="_blank" href="https://instagram.com"
            class="lab-fill-instagram-round"></a>
      </nav>
   </div>
</section>
<section class="gallery-part">
   <div class="container">
      <div class="section-head">
         <h2 class="section-title">Institute’s Gallery</h2>
         <a href="<?php echo e(route('site.gallery')); ?>" class="section-btn">
         <span>see more</span>
         <i class="lni lni-arrow-right"></i>
         </a>
      </div>
      <div class="row">
         <div class="col-12 col-sm-6 col-md-4">
            <a class="venobox-image" data-gall="gallery" href="<?php echo e(asset('assets/images/site/gallery/48017f95b73fb3d61871186ef37b2c06e100cb6afa41a6624ee054371e076bbf0925db59a5cd01f8eb0cebf9053e5e8a3eac21a59f01864edeec8341a19424db.jpg')); ?>">
            <img src="<?php echo e(asset('assets/images/site/gallery/48017f95b73fb3d61871186ef37b2c06e100cb6afa41a6624ee054371e076bbf0925db59a5cd01f8eb0cebf9053e5e8a3eac21a59f01864edeec8341a19424db.jpg')); ?>" alt="gallery">
            </a>
         </div>
         <div class="col-12 col-sm-6 col-md-4">
            <a class="venobox-image" data-gall="gallery" href="<?php echo e(asset('assets/images/site/gallery/b2959fd1548600a3fdadaef90cd27b8ccc61105db77abc09e52d6370d5789dd4f7554bdd3f58642a8ba169b349026fca7cb9e0838a98cd09a6b3d55691095e08.jpg')); ?>">
            <img src="<?php echo e(asset('assets/images/site/gallery/b2959fd1548600a3fdadaef90cd27b8ccc61105db77abc09e52d6370d5789dd4f7554bdd3f58642a8ba169b349026fca7cb9e0838a98cd09a6b3d55691095e08.jpg')); ?>" alt="gallery">
            </a>
         </div>
         <div class="col-12 col-sm-6 col-md-4">
            <a class="venobox-image" data-gall="gallery" href="<?php echo e(asset('assets/images/site/gallery/1d71b93a19d3e53fa561e4b2d65cadf79a5ce65d64d99f256ce2bf26c475c37130e1667a6b7e21e1b0188502a130d84b302197597933919a8cc14022b1e1efa2.jpg')); ?>">
            <img src="<?php echo e(asset('assets/images/site/gallery/1d71b93a19d3e53fa561e4b2d65cadf79a5ce65d64d99f256ce2bf26c475c37130e1667a6b7e21e1b0188502a130d84b302197597933919a8cc14022b1e1efa2.jpg')); ?>" alt="gallery">
            </a>
         </div>
         <div class="col-12 col-sm-6 col-md-4">
            <a class="venobox-image" data-gall="gallery" href="<?php echo e(asset('assets/images/site/gallery/902e631a1b7fa8410caf25e1fe49be3ac882746228afe065260418930fc460f93f0c295fe3468344f354f1d9f69eec27ecb05c788f974303a4f06160d2a648fa.jpg')); ?>">
            <img src="<?php echo e(asset('assets/images/site/gallery/902e631a1b7fa8410caf25e1fe49be3ac882746228afe065260418930fc460f93f0c295fe3468344f354f1d9f69eec27ecb05c788f974303a4f06160d2a648fa.jpg')); ?>" alt="gallery">
            </a>
         </div>
         <div class="col-12 col-sm-6 col-md-4">
            <a class="venobox-image" data-gall="gallery" href="<?php echo e(asset('assets/images/site/gallery/df9cb5f8f6f4a9d25ce6178908abb7a423088fb4665d93dea9276be9152252d5372dcbad56e1e6a8cab211aee2b82c624fb1d8c8c09c571c02e6cbac36f46ef0.jpg')); ?>">
            <img src="<?php echo e(asset('assets/images/site/gallery/df9cb5f8f6f4a9d25ce6178908abb7a423088fb4665d93dea9276be9152252d5372dcbad56e1e6a8cab211aee2b82c624fb1d8c8c09c571c02e6cbac36f46ef0.jpg')); ?>" alt="gallery">
            </a>
         </div>
         <div class="col-12 col-sm-6 col-md-4">
            <a class="venobox-image" data-gall="gallery" href="<?php echo e(asset('assets/images/site/gallery/6086814d457520090643aaa49c1776496c3422c38a363040800945bd12819b01711a6b8dd4b3b0b934d1fc4163e2f451923134d4726ea90474bd3d9f992bfe31.jpg')); ?>">
            <img src="<?php echo e(asset('assets/images/site/gallery/6086814d457520090643aaa49c1776496c3422c38a363040800945bd12819b01711a6b8dd4b3b0b934d1fc4163e2f451923134d4726ea90474bd3d9f992bfe31.jpg')); ?>" alt="gallery">
            </a>
         </div>
      </div>
   </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<!-- CUSTOM -->
<link rel="stylesheet" href="<?php echo e(asset('assets/css/home.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/gallery.css')); ?>">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\ac\resources\views/site/home.blade.php ENDPATH**/ ?>