<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
      <link rel="SHORTCUT ICON" href="{{asset('assets/images/fav.png')}}">
      <!-- FONTS -->
      <link rel="stylesheet" href="{{asset('assets/css/iconly/iconly.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/lineicons/css/icons.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/fontawesome/css/all.css')}}" >
      <link rel="stylesheet" href="{{asset('assets/css/timesnew.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/opensans.css')}}">
      <!-- LIBRARY -->
      <link rel="stylesheet" href="{{asset('assets/css/venobox/all.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/carousel/owl.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/carousel/owl.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/bootstrap-site.min.css')}}">


      <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">


      @yield('css')
      
   </head>
   <body>
      <header class="header-part">
         <div class="container">
            <div class="header-content">
               <button type="button" class="header-menu">
               <i class="lni lni-menu"></i>
               </button>
               <a href="#" class="header-logo"><img
                src="{{asset('assets/images/logo.png')}}"
                  alt="logo"></a>
               <nav class="header-nav">
                  <div class="header-nav-group">
                     <a href="#" class="header-nav-logo"><img
                        src="{{asset('assets/images/logo.png')}}"
                        alt="logo"></a>
                     <button type="button" class="header-nav-close lni lni-close"></button>
                  </div>
                  <ul class="header-nav-list">
                     <li
                        class="header-nav-item {{ Request::is('/') ? 'active' : '' }}">
                        <a href="{{route('site.home')}}"
                           class="header-nav-link">Home</a>
                     </li>
                     <li
                        class="header-nav-item {{ Request::is('*about') ? 'active' : '' }}">
                        <a href="{{route('site.about')}}"
                           class="header-nav-link">About</a>
                     </li>
                     <li
                        class="header-nav-item {{ Request::is('*professors') ? 'active' : '' }}">
                        <a href="{{route('site.professors')}}"
                           class="header-nav-link ">Professors</a>
                     </li>
                     <li
                        class="header-nav-item  {{ Request::is('*events') ? 'active' : '' }}">
                        <a href="{{route('site.events')}}"
                           class="header-nav-link">Events</a>
                     </li>
                     <li
                        class="header-nav-item {{ Request::is('*gallery') ? 'active' : '' }}">
                        <a href="{{route('site.gallery')}}"
                           class="header-nav-link">Gallery</a>
                     </li>
                     <li
                        class="header-nav-item {{ Request::is('*blog') ? 'active' : '' }}">
                        <a href="{{route('site.blog')}}"
                           class="header-nav-link">Blog</a>
                     </li>
                     <li
                        class="header-nav-item {{ Request::is('*contact') ? 'active' : '' }}">
                        <a href="{{route('site.contact')}}"
                           class="header-nav-link">Contact</a>
                     </li>
                     <li
                        class="header-nav-item {{ Request::is('*advising') ? 'active' : '' }}">
                        <a href="{{route('site.advising')}}"
                           class="header-nav-link">Advising</a>
                     </li>
                  </ul>
               </nav>
               <a href="{{route('student.login')}}" class="header-action-btn"
                  style="-webkit-mask-image: url('{{asset('assets/images/site/badge.png')}}');" >
               <img src="{{asset('assets/images/site/icon.png')}}" alt="icon">
               <span> login </span>
               </a>
            </div>
         </div>
      </header>
      @yield('content')
      <footer class="footer-part">
         <div class="container">
            <div class="row">
               <div class="col-12 col-sm-12 col-md-5">
                  <div class="footer-about">
                     <p> NIK International University IIS is a fully accredited, independent, international school in New Cairo, Egypt. </p>
                     <ul>
                        <li>
                           <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M12 2C15.31 2 18 4.66 18 7.95C18 12.41 12 19 12 19C12 19 6 12.41 6 7.95C6 4.66 8.69 2 12 2ZM12 6C11.4696 6 10.9609 6.21071 10.5858 6.58579C10.2107 6.96086 10 7.46957 10 8C10 8.53043 10.2107 9.03914 10.5858 9.41421C10.9609 9.78929 11.4696 10 12 10C12.5304 10 13.0391 9.78929 13.4142 9.41421C13.7893 9.03914 14 8.53043 14 8C14 7.46957 13.7893 6.96086 13.4142 6.58579C13.0391 6.21071 12.5304 6 12 6ZM20 19C20 21.21 16.42 23 12 23C7.58 23 4 21.21 4 19C4 17.71 5.22 16.56 7.11 15.83L7.75 16.74C6.67 17.19 6 17.81 6 18.5C6 19.88 8.69 21 12 21C15.31 21 18 19.88 18 18.5C18 17.81 17.33 17.19 16.25 16.74L16.89 15.83C18.78 16.56 20 17.71 20 19Z"
                                 fill="white" />
                           </svg>
                           <span>2400 Fresno St, Fresno, CA 93721, USA</span>
                        </li>
                        <li>
                           <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M15 12H17C17 10.6739 16.4732 9.40215 15.5355 8.46447C14.5979 7.52678 13.3261 7 12 7V9C12.7956 9 13.5587 9.31607 14.1213 9.87868C14.6839 10.4413 15 11.2044 15 12ZM19 12H21C21 7 16.97 3 12 3V5C15.86 5 19 8.13 19 12ZM20 15.5C18.75 15.5 17.55 15.3 16.43 14.93C16.08 14.82 15.69 14.9 15.41 15.18L13.21 17.38C10.38 15.94 8.06 13.62 6.62 10.79L8.82 8.59C9.1 8.31 9.18 7.92 9.07 7.57C8.7 6.45 8.5 5.25 8.5 4C8.5 3.73478 8.39464 3.48043 8.20711 3.29289C8.01957 3.10536 7.76522 3 7.5 3H4C3.73478 3 3.48043 3.10536 3.29289 3.29289C3.10536 3.48043 3 3.73478 3 4C3 8.50868 4.79107 12.8327 7.97918 16.0208C11.1673 19.2089 15.4913 21 20 21C20.2652 21 20.5196 20.8946 20.7071 20.7071C20.8946 20.5196 21 20.2652 21 20V16.5C21 16.2348 20.8946 15.9804 20.7071 15.7929C20.5196 15.6054 20.2652 15.5 20 15.5Z"
                                 fill="white" />
                           </svg>
                           <span>+182583465385</span>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-md-3">
                  <nav class="footer-navs">
                     <a href="{{route('site.home')}}">Home</a>
                     <a href="{{route('site.about')}}">About</a>
                     <a href="{{route('site.contact')}}">Contact Us </a>
                     <a href="{{route('site.advising')}}">Advising</a>
                     <a href="{{route('site.blog')}}">Blog</a>
                  </nav>
               </div>
               <div class="col-12 col-sm-6 col-md-4">
                  <div class="footer-social">
                     <h4>follow us</h4>
                     <nav>
                        <a target="_blank" href="https://www.facebook.com/f"
                           class="lab-fill-facebook-round"></a>
                        <a target="_blank" href="https://twitter.com/"
                           class="lab-fill-twitter-round"></a>
                        <a target="_blank" href="https://www.linkedin.com/"
                           class="lab-fill-linkedin-round"></a>
                        <a target="_blank" href="https://www.youtube.com/"
                           class="lab-fill-youtube-round"></a>
                        <a target="_blank" href="https://googleplus.com"
                           class="lab-fill-google-plus-round"></a>
                     </nav>
                     <p>Copyright &copy; CIS University </p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="{{asset('assets/js/jquery-site.min.js')}}"></script>
      <script defer src="{{asset('assets/js/carousel/owl.min.js')}}"></script>
      <script defer src="{{asset('assets/js/carousel/initialize.js')}}"></script>
      <script defer src="{{asset('assets/js/venobox/all.min.js')}}"></script>
      <script defer src="{{asset('assets/js/venobox/initialize.js')}}"></script>
      <script defer src="{{asset('assets/js/bootstrap.min.js')}}"></script>
      <script defer src="{{asset('assets/js/script.js')}}"></script>

   </body>
</html>