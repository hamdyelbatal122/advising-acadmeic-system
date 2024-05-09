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
                     Through cutting-edge academic programs, we shape bright futures, fostering innovation and excellence in our vibrant university community.
                   </p>

                   <a href="#"
                      class="btn btn-inline">apply now</a>
                </div>
                <div class="banner-media">
                   <a class="banner--media-video" target="_blank" data-autoplay="true"
                      data-vbtype="video"
                      href="#"><i
                      class="fa-solid fa-play"></i></a>
                   <div class="banner-media-content">
                      <span>CIS University</span>
                      <h3>Interactive Campus Exploration</h3>
                      <p>Watch Video</p>

                   </div>
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
                   <h1>Innovative Education, Bright Futures</h1>
                   <p>At our university, we offer groundbreaking academic programs, guiding students towards success and transformative learning experiences.</p>
                   <a href="#"
                      class="btn btn-inline">apply now</a>
                </div>
                <div class="banner-media">
                   <a class="banner--media-video" target="_blank" data-autoplay="true"
                      data-vbtype="video"
                      href="#"><i
                      class="fa-solid fa-play"></i></a>
                   <div class="banner-media-content">
                      <span>CIS University</span>
                      <h3>Personalized Guided Tours</h3>
                      <p>Watch Video</p>

                   </div>
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
                   <p>Explore our university's dynamic environment, where innovative academic programs inspire excellence, shaping promising futures for all students.</p>
                   <a href="#"
                      class="btn btn-inline">apply now</a>
                </div>
                <div class="banner-media">
                   <a class="banner--media-video" target="_blank" data-autoplay="true"
                      data-vbtype="video"
                      href="#"><i
                      class="fa-solid fa-play"></i></a>
                   <div class="banner-media-content">
                      <span>CIS University</span>
                      <h3>Virtual Campus Discovery</h3>
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
       <p>Our institution offers Cambridge International Programs led by qualified, native English-speaking educators, ensuring top-tier language learning experiences.</p>
    </div>
    <div class="feature-card">
       <i class="lab-line-book"></i>
       <p> Experience education in English with our Cambridge International Programs, facilitated by certified English-speaking instructors for unparalleled language mastery.</p>
    </div>
    <div class="feature-card">
       <i class="lab-line-notebook"></i>
       <p>Engage with our Cambridge International Programs taught by native English speakers, fostering fluency and proficiency in an immersive learning environment.</p>
    </div>
    <div class="feature-card">
       <i class="lab-line-certificate"></i>
       <p>Immerse yourself in our Cambridge International Programs, guided by proficient, native English-speaking educators dedicated to your language mastery and academic success.</p>
    </div>
 </section>
 <section class="about-part">
    <div class="container">
       <div class="row">
          <div class="col-12 col-md-6 col-lg-5">
             <div class="about-content">
                <h2 class="section-title">About University</h2>
                <p>
                  CIS University stands as a beacon of academic excellence, fostering innovation and empowering students to thrive in a dynamic global landscape. Join us in shaping tomorrow's leaders through transformative education and impactful learning experiences &nbsp;                                ...                            
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
 <section class="apply-part">
    <div class="container">
       <div class="apply-content">
          <h2>Apply for Fall 2025</h2>
          <p>Now open for Fall 2025 applications. The closing date for this session is Friday 19 August, 2025.</p>
          <a href="<?php echo e(route('site.contact')); ?>" class="btn btn-outline">apply now</a>
       </div>
    </div>
 </section>      
 <section class="event-part">
    <div class="container">
       <div class="section-head">
          <h2 class="section-title">University Events</h2>
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
                <p>The 31 Annual State Championship showcases university-exclusive teams, gathering qualified squads from across...                                </p>
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
                   href="#">University Meeting</a>
                </h4>
                <h5>31 Dec, 2022-31 Dec, 2022                                    </h5>
                <p>The 11th Annual State Championship is a University-only tournament featuring qualified squads from all c...                                    </p>
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
          <a target="_blank" href="https://www.facebook.com/CIS.EDU1"
             class="lab-fill-facebook-round"></a>
          <a target="_blank" href="#"
             class="lab-fill-twitter-round"></a>
          <a target="_blank" href="#"
             class="lab-fill-linkedin-round"></a>
          <a target="_blank" href="https://www.youtube.com/@CIS.EDU1"
             class="lab-fill-youtube-round"></a>
          <a target="_blank" href="#"
             class="lab-fill-google-plus-round"></a>
       </nav>
    </div>
 </section>
 <section class="gallery-part">
    <div class="container">
       <div class="section-head">
          <h2 class="section-title">University’s Gallery</h2>
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