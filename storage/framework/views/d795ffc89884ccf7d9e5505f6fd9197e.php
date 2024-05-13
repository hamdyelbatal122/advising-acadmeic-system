<?php $__env->startSection('title', 'About'); ?>
<?php $__env->startSection('content'); ?>
<section class="about-part">
   <div class="container">
      <div class="row">
         <div class="col-12 col-lg-6">
            <h1 class="section-page-title">About  Institute</h1>
            <div class="about-content mt-0">
               <h2 class="section-title"> CIS Institute</h2>
               <p><span style="color: rgb(12, 16, 40); font-family: " open="" sans",="" sans-serif;="" font-size:="" 18px;"=""> Welcome to CIS Institute, a pioneering hub for technology and computer education nestled in the heart of New Cairo. At CIS, we ignite innovation, empower creativity, and shape the future of technology through cutting-edge programs and immersive learning experiences. Our dynamic campus fosters collaboration, fosters collaboration, and inspires excellence, empowering students to become the tech leaders of tomorrow.&nbsp;</span></p>
            </div>
         </div>
         <div class="col-12 col-lg-6">
            <div class="about-media">  
               <img src="<?php echo e(asset('assets/images/site/about.jpg')); ?>" alt="about">
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
                  <p>
                     CIS, short for Cairo International Institute, is a prominent educational institution located in Egypt. Renowned for its commitment to academic excellence and holistic development, CIS offers a diverse range of educational programs catering to students from various cultural backgrounds </p>
               </div>
               <div class="col">
                  <h3>Campus</h3>
                  <p> 
                     The campus of CIS Institute is a vibrant and modern space designed to foster a conducive learning environment. With its lush greenery, well-equipped facilities, and innovative learning spaces, the campus offers students a dynamic and engaging educational experience.</p>
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
         <p>
            Our Institute aspires to be a leading research educational institution in the field of computerization and community development and to exceed the global quality standards.
         </p>
      </div>
   </div>
   <div class="container">
      <div class="vision-content">
         <h2 class="section-title">Our Mission</h2>
         <p>
            The mission of CIS  Institute is to serve the students as well as the community through the provision of distinctive education and innovative research in the fields of computer science, information systems and technology, and multimedia. This faculty develops the students’ personalities to make them able to build a knowledge-based economy and to create an innovative, competitive, and self-learning work environment. Computers and Information graduates are able to compete locally, regionally, and internationally in the labor market and to interact creatively with society and entrepreneurs.
         </p>
      </div>
   </div>
</section>




<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/about.css')); ?>">
<style>
   p{
      word-break: keep-all;
  text-align: justify;
   }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\ac\resources\views/site/about.blade.php ENDPATH**/ ?>