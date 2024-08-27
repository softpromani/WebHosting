@extends('home.includes.layout')
@section('title', 'About Us')
@section('header-area')
    <!-- style sheets and font icons -->
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-vendors.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">

    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-responsive.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/startup-startup.css') }}">

@endsection
@section('content')



 <!-- start section -->
 <section id="down-section" class="background-position-center-top sm-background-image-none"
 style="background-image: url('{{ asset('home/assets/homepage/images/vertical-line-bg.svg') }}')">
 <div class="container">
     <div class="row align-items-center justify-content-center mb-8 xs-mb-50px">
         <div class="col-lg-6 col-md-10 position-relative md-mb-50px sm-mb-30px"
             data-anime='{ "effect": "slide", "direction": "tb", "color": "#252840", "duration": 1000, "delay": 0 }'>
             <img class="w-100 border-radius-5px" src="{{ asset('home/assets/homepage/images/images-demo-startup-who-we-are-01.jpg') }}" alt="">
         </div>
         <div class="col-xl-4 offset-lg-1 col-lg-5 col-md-10 text-center text-lg-start"
             data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
             <span class="alt-font text-uppercase fw-600 mb-15px d-inline-block ls-1px">About business</span>
             <h3 class="alt-font fw-600 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true"
                 data-animation-delay="1500">We develop and create successful <span
                     class="text-highlight fw-800">startup<span
                         class="bg-gradient-emerald-blue-emerald-green h-8px bottom-10px opacity-6 separator-animation"></span></span>
                 strategy.</h3>
             <p class="mb-35px sm-mb-25px">Lorem ipsum dolor sit amet consectetur adipiscing elit do eiusmod
                 tempor incididunt ut labore et dolore magna ut enim veniam.</p>
             <a href="demo-startup-services.html"
                 class="btn btn-large btn-gradient-emerald-blue-emerald-green btn-hover-animation-switch btn-round-edge btn-box-shadow">
                 <span>
                     <span class="btn-text">Crafto services</span>
                     <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                     <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                 </span>
             </a>
         </div>
     </div>
     <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 justify-content-center text-center"
         data-anime='{"el": "childs", "opacity": [0,1], "translateX": [50, 0], "duration": 800, "delay":300, "staggervalue": 300, "easing": "easeOutQuad" }'>
         <div class="col last-paragraph-no-margin sm-mb-40px">
             <h2 class="alt-font fw-900 text-dark-gray m-0">8M+</h2>
             <p>Trusted user</p>
         </div>
         <div class="col last-paragraph-no-margin sm-mb-40px">
             <h2 class="alt-font fw-900 text-dark-gray m-0">64K</h2>
             <p>Telephonic talk</p>
         </div>
         <div class="col last-paragraph-no-margin xs-mb-40px">
             <h2 class="alt-font fw-900 text-dark-gray m-0">9M+</h2>
             <p>Project completed</p>
         </div>
         <div class="col last-paragraph-no-margin">
             <h2 class="alt-font fw-900 text-dark-gray m-0">250</h2>
             <p>Award winning</p>
         </div>
     </div>
 </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="cover-background" style="background-image: url({{ asset('home/assets/homepage/images/demo-startup-who-we-are-bg.jpg') }})">
 <div class="container">
     <div class="row justify-content-center mb-3">
         <div class="col-lg-7 text-center"
             data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
             <span class="alt-font text-uppercase fw-600 d-inline-block ls-1px">Top performance</span>
             <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px shadow-none" data-shadow-animation="true"
                 data-animation-delay="1000">Why <span class="text-highlight fw-800">choose<span
                         class="bg-gradient-emerald-blue-emerald-green h-8px bottom-10px opacity-6 separator-animation"></span></span>
                 us?</h3>
         </div>
     </div>
     <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center"
         data-anime='{ "el": "childs", "rotateZ": [5, 0], "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
         <!-- start features box item -->
         <div class="col icon-with-text-style-04 transition-inner-all md-mb-30px">
             <div
                 class="feature-box bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover justify-content-start border-radius-5px overflow-hidden pt-18 pb-18 ps-14 pe-14 lg-p-12 h-100 last-paragraph-no-margin">
                 <div class="feature-box-icon">
                     <i
                         class="bi bi-chat-quote icon-extra-large text-gradient-emerald-blue-emerald-green mb-20px"></i>
                 </div>
                 <div class="feature-box-content">
                     <span class="d-inline-block alt-font text-dark-gray fw-700 mb-5px fs-18">Friendly
                         support</span>
                     <p>Lorem ipsum is simply dummy text printing.</p>
                 </div>
                 <div class="feature-box-overlay bg-white"></div>
             </div>
         </div>
         <!-- end features box item -->
         <!-- start features box item -->
         <div class="col icon-with-text-style-04 transition-inner-all md-mb-30px">
             <div
                 class="feature-box bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover justify-content-start border-radius-5px overflow-hidden pt-18 pb-18 ps-14 pe-14 lg-p-12 h-100 last-paragraph-no-margin">
                 <div class="feature-box-icon">
                     <i
                         class="bi bi-bar-chart-line icon-extra-large text-gradient-emerald-blue-emerald-green mb-20px"></i>
                 </div>
                 <div class="feature-box-content">
                     <span class="d-inline-block alt-font text-dark-gray fw-700 mb-5px fs-18">Business
                         growth</span>
                     <p>Lorem ipsum is simply dummy text printing.</p>
                 </div>
                 <div class="feature-box-overlay bg-white"></div>
             </div>
         </div>
         <!-- end features box item -->
         <!-- start features box item -->
         <div class="col icon-with-text-style-04 transition-inner-all xs-mb-30px">
             <div
                 class="feature-box bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover justify-content-start border-radius-5px overflow-hidden pt-18 pb-18 ps-14 pe-14 lg-p-12 h-100 last-paragraph-no-margin">
                 <div class="feature-box-icon">
                     <i
                         class="bi bi-megaphone icon-extra-large text-gradient-emerald-blue-emerald-green mb-20px"></i>
                 </div>
                 <div class="feature-box-content">
                     <span class="d-inline-block alt-font text-dark-gray fw-700 mb-5px fs-18">Innovative
                         idea</span>
                     <p>Lorem ipsum is simply dummy text printing.</p>
                 </div>
                 <div class="feature-box-overlay bg-white"></div>
             </div>
         </div>
         <!-- end features box item -->
         <!-- start features box item -->
         <div class="col icon-with-text-style-04 transition-inner-all">
             <div
                 class="feature-box bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover justify-content-start border-radius-5px overflow-hidden pt-18 pb-18 ps-14 pe-14 lg-p-12 h-100 last-paragraph-no-margin">
                 <div class="feature-box-icon">
                     <i
                         class="bi bi-briefcase icon-extra-large text-gradient-emerald-blue-emerald-green mb-20px"></i>
                 </div>
                 <div class="feature-box-content">
                     <span class="d-inline-block alt-font text-dark-gray fw-700 mb-5px fs-18">Branding
                         planning</span>
                     <p>Lorem ipsum is simply dummy text printing.</p>
                 </div>
                 <div class="feature-box-overlay bg-white"></div>
             </div>
         </div>
         <!-- end features box item -->
     </div>
     <div class="row mt-5 sm-mt-30px"
         data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 600, "staggervalue": 300, "easing": "easeOutQuad" }'>
         <div class="col-12 text-center">
             <div
                 class="d-inline-block bg-dark-gray fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px sm-m-10px">
                 trust</div>
             <div class="d-inline-block align-middle"><span
                     class="fs-24 alt-font text-dark-gray d-block fw-600 ls-minus-1px mb-0">Join the 10000+
                     companies trusting crafto.</span></div>
         </div>
     </div>
 </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="background-position-center-top sm-background-image-none"
 style="background-image: url('{{ asset('home/assets/homepage/images/vertical-line-bg.svg') }}')">
 <div class="container">
     <div class="row align-items-center justify-content-center">
         <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-10 text-center text-lg-start"
             data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
             <div class="swiper slider-one-slide md-mb-50px sm-mb-40px text-slider-style-01"
                 data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".slider-one-slide-pagination", "clickable": true }, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                 <div class="swiper-wrapper mb-30px">
                     <!-- start text slider item -->
                     <div class="swiper-slide">
                         <div
                             class="alt-font text-uppercase text-base-color fw-600 mb-15px d-inline-block ls-1px">
                             Our mission</div>
                         <h3 class="alt-font text-dark-gray mb-30px md-mb-25px fw-600 ls-minus-1px">We protect
                             and supports your business.</h3>
                         <span class="d-inline-block w-95 md-w-100">Lorem ipsum dolor sit amet consectetur
                             adipiscing elit do eiusmod tempor incididunt ut labore et dolore magna ut enim
                             veniam.</span>
                     </div>
                     <!-- end text slider item -->
                     <!-- start text slider item -->
                     <div class="swiper-slide">
                         <div
                             class="alt-font text-uppercase text-base-color fw-600 mb-15px d-inline-block ls-1px">
                             Our Vision</div>
                         <h3 class="alt-font text-dark-gray mb-30px md-mb-25px fw-600 ls-minus-1px">A business
                             plan and performance ideas.</h3>
                         <span class="d-inline-block w-95 md-w-100">Lorem ipsum dolor sit amet consectetur
                             adipiscing elit do eiusmod tempor incididunt ut labore et dolore magna ut enim
                             veniam.</span>
                     </div>
                     <!-- end text slider item -->
                     <!-- start text slider item -->
                     <div class="swiper-slide">
                         <div
                             class="alt-font text-uppercase text-base-color fw-600 mb-15px d-inline-block ls-1px">
                             Core value</div>
                         <h3 class="alt-font text-dark-gray mb-30px md-mb-25px fw-600 ls-minus-1px">The best
                             solutions for your startup business.</h3>
                         <span class="d-inline-block w-95 md-w-100">Lorem ipsum dolor sit amet consectetur
                             adipiscing elit do eiusmod tempor incididunt ut labore et dolore magna ut enim
                             veniam.</span>
                     </div>
                     <!-- end text slider item -->
                 </div>
                 <div class="d-flex justify-content-center justify-content-lg-start">
                     <!-- start slider navigation -->
                     <div
                         class="slider-one-slide-prev-1 text-dark-gray swiper-button-prev slider-navigation-style-04 border border-1 border-color-extra-medium-gray bg-white">
                         <i class="fa-solid fa-arrow-left"></i></div>
                     <div
                         class="slider-one-slide-next-1 text-dark-gray swiper-button-next slider-navigation-style-04 border border-1 border-color-extra-medium-gray bg-white">
                         <i class="fa-solid fa-arrow-right"></i></div>
                     <!-- end slider navigation -->
                 </div>
             </div>
         </div>
         <div class="col-xl-6 col-lg-6 offset-xl-1 position-relative text-end md-mb-6 sm-mb-10 xs-mb-12">
             <div class="text-end w-80 md-w-75 ms-auto" data-animation-delay="100" data-shadow-animation="true"
                 data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                 <img src="{{ asset('home/assets/homepage/images/images-demo-startup-who-we-are-02.jpg') }}" alt="" class="border-radius-5px">
             </div>
             <div class="w-60 md-w-50 xs-w-55 overflow-hidden position-absolute left-15px bottom-minus-50px"
                 data-shadow-animation="true" data-animation-delay="200"
                 data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)">
                 <img src="{{ asset('home/assets/homepage/images/images-demo-startup-who-we-are-03.jpg') }}" alt="" class="border-radius-5px">
             </div>
         </div>
     </div>
 </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="background-position-center-top pt-0 sm-background-image-none"
 style="background-image: url('{{ asset('home/assets/homepage/images/vertical-line-bg.svg') }}')">
 <div class="container">
     <div class="row position-relative clients-style-08 pt-35px md-pt-10px">
         <div class="col swiper text-center feather-shadow"
             data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 4000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 } }, "effect": "slide" }'>
             <div class="swiper-wrapper marquee-slide">
                 <!-- start client item -->
                 <div class="swiper-slide">
                     <a href="#"><img src="{{ asset('home/assets/homepage/images/images-logo-envato.svg') }}" class="h-40px xs-h-30px" alt=""></a>
                 </div>
                 <!-- end client item -->
                 <!-- start client item -->
                 <div class="swiper-slide">
                     <a href="#"><img src="{{ asset('home/assets/homepage/images/images-logo-pingdom.svg') }}" class="h-40px xs-h-30px" alt=""></a>
                 </div>
                 <!-- end client item -->
                 <!-- start client item -->
                 <div class="swiper-slide">
                     <a href="#"><img src="{{ asset('home/assets/homepage/images/images-logo-paypal.svg')}}" class="h-40px xs-h-30px" alt=""></a>
                 </div>
                 <!-- end client item -->
                 <!-- start client item -->
                 <div class="swiper-slide">
                     <a href="#"><img src="{{ asset('home/assets/homepage/images/images-logo-walmart.svg')}}" class="h-40px xs-h-30px" alt=""></a>
                 </div>
                 <!-- end client item -->
                 <!-- start client item -->
                 <div class="swiper-slide">
                     <a href="#"><img src="{{ asset('home/assets/homepage/images/images-logo-logitech.svg')}}" class="h-40px xs-h-30px" alt=""></a>
                 </div>
                 <!-- end client item -->
                 <!-- start client item -->
                 <div class="swiper-slide">
                     <a href="#"><img src="{{ asset('home/assets/homepage/images/images-logo-envato.svg') }}" class="h-40px xs-h-30px" alt=""></a>
                 </div>
                 <!-- end client item -->
                 <!-- start client item -->
                 <div class="swiper-slide">
                     <a href="#"><img src="{{ asset('home/assets/homepage/images/images-logo-pingdom.svg') }}" class="h-40px xs-h-30px" alt=""></a>
                 </div>
                 <!-- end client item -->
                 <!-- start client item -->
                 <div class="swiper-slide">
                     <a href="#"><img src="{{ asset('home/assets/homepage/images/images-logo-paypal.svg') }}" class="h-40px xs-h-30px" alt=""></a>
                 </div>
                 <!-- end client item -->
             </div>
         </div>
     </div>
 </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="background-position-center-top pt-0 sm-background-image-none"
 style="background-image: url('{{ asset('home/assets/homepage/images/vertical-line-bg.svg') }}')">
 <div class="container">
     <div class="row justify-content-center mb-3">
         <div class="col-lg-7 text-center"
             data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
             <span class="alt-font text-uppercase fw-600 d-inline-block ls-1px">Core people</span>
             <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px shadow-none" data-shadow-animation="true"
                 data-animation-delay="1000">Expert <span class="text-highlight fw-800">consultant<span
                         class="bg-gradient-emerald-blue-emerald-green h-8px bottom-10px opacity-6 separator-animation"></span></span>
             </h3>
         </div>
     </div>
     <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center"
         data-anime='{ "el": "childs", "translateY": [15, 0], "translateX": [-15, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
         <!-- start team member item -->
         <div class="col text-center team-style-01 md-mb-30px">
             <figure class="mb-0 hover-box box-hover light-hover position-relative">
                 <img src="{{ asset('home/assets/homepage/images/images-demo-startup-who-we-are-team-01.jpg')}}" alt="">
                 <figcaption class="w-100 p-30px bg-white box-shadow-quadruple-large">
                     <div class="position-relative z-index-1 overflow-hidden">
                         <span class="d-block alt-font fw-700 text-dark-gray lh-26 fs-18">Jeremy dupont</span>
                         <span class="text-light-opacity text-uppercase fs-15">Founder</span>
                         <div class="social-icon hover-text mt-20px lg-mt-10px">
                             <a href="https://www.facebook.com/" target="_blank"><i
                                     class="fa-brands fa-facebook-f icon-small"></i></a>
                             <a href="https://www.instagram.com/" target="_blank"><i
                                     class="fa-brands fa-instagram icon-small"></i></a>
                             <a href="https://www.twitter.com/" target="_blank"><i
                                     class="fa-brands fa-twitter icon-small"></i></a>
                             <a href="http://www.dribbble.com" target="_blank"><i
                                     class="fa-brands fa-dribbble icon-small"></i></a>
                         </div>
                     </div>
                     <div class="box-overlay bg-white"></div>
                 </figcaption>
             </figure>
         </div>
         <!-- end team member item -->
         <!-- start team member item -->
         <div class="col text-center team-style-01 md-mb-30px">
             <figure class="mb-0 hover-box box-hover light-hover position-relative">
                 <img src="{{ asset('home/assets/homepage/images/images-demo-startup-who-we-are-team-02.jpg') }}" alt="">
                 <figcaption class="w-100 p-30px bg-white box-shadow-quadruple-large">
                     <div class="position-relative z-index-1 overflow-hidden">
                         <span class="d-block alt-font fw-700 text-dark-gray lh-26 fs-18">Jessica dover</span>
                         <span class="text-light-opacity text-uppercase fs-15">Officer</span>
                         <div class="social-icon hover-text mt-20px lg-mt-10px">
                             <a href="https://www.facebook.com/" target="_blank"><i
                                     class="fa-brands fa-facebook-f icon-small"></i></a>
                             <a href="https://www.instagram.com/" target="_blank"><i
                                     class="fa-brands fa-instagram icon-small"></i></a>
                             <a href="https://www.twitter.com/" target="_blank"><i
                                     class="fa-brands fa-twitter icon-small"></i></a>
                             <a href="http://www.dribbble.com" target="_blank"><i
                                     class="fa-brands fa-dribbble icon-small"></i></a>
                         </div>
                     </div>
                     <div class="box-overlay bg-white"></div>
                 </figcaption>
             </figure>
         </div>
         <!-- end team member item -->
         <!-- start team member item -->
         <div class="col text-center team-style-01 xs-mb-30px">
             <figure class="mb-0 hover-box box-hover light-hover position-relative">
                 <img src="{{ asset('home/assets/homepage/images/images-demo-startup-who-we-are-team-03.jpg') }}" alt="">
                 <figcaption class="w-100 p-30px bg-white box-shadow-quadruple-large">
                     <div class="position-relative z-index-1 overflow-hidden">
                         <span class="d-block alt-font fw-700 text-dark-gray lh-26 fs-18">Herman miller</span>
                         <span class="text-light-opacity text-uppercase fs-15">Advisor</span>
                         <div class="social-icon hover-text mt-20px lg-mt-10px">
                             <a href="https://www.facebook.com/" target="_blank"><i
                                     class="fa-brands fa-facebook-f icon-small"></i></a>
                             <a href="https://www.instagram.com/" target="_blank"><i
                                     class="fa-brands fa-instagram icon-small"></i></a>
                             <a href="https://www.twitter.com/" target="_blank"><i
                                     class="fa-brands fa-twitter icon-small"></i></a>
                             <a href="http://www.dribbble.com" target="_blank"><i
                                     class="fa-brands fa-dribbble icon-small"></i></a>
                         </div>
                     </div>
                     <div class="box-overlay bg-white"></div>
                 </figcaption>
             </figure>
         </div>
         <!-- end team member item -->
         <!-- start team member item -->
         <div class="col text-center team-style-01">
             <figure class="mb-0 hover-box box-hover light-hover position-relative">
                 <img src="{{ asset('home/assets/homepage/images/images-demo-startup-who-we-are-team-04.jpg') }}" alt="">
                 <figcaption class="w-100 p-30px bg-white box-shadow-quadruple-large">
                     <div class="position-relative z-index-1 overflow-hidden">
                         <span class="d-block alt-font fw-700 text-dark-gray lh-26 fs-18">John parker</span>
                         <span class="text-light-opacity text-uppercase fs-15">Consultant</span>
                         <div class="social-icon hover-text mt-20px lg-mt-10px">
                             <a href="https://www.facebook.com/" target="_blank"><i
                                     class="fa-brands fa-facebook-f icon-small"></i></a>
                             <a href="https://www.instagram.com/" target="_blank"><i
                                     class="fa-brands fa-instagram icon-small"></i></a>
                             <a href="https://www.twitter.com/" target="_blank"><i
                                     class="fa-brands fa-twitter icon-small"></i></a>
                             <a href="http://www.dribbble.com" target="_blank"><i
                                     class="fa-brands fa-dribbble icon-small"></i></a>
                         </div>
                     </div>
                     <div class="box-overlay bg-white"></div>
                 </figcaption>
             </figure>
         </div>
         <!-- end team member item -->
     </div>
 </div>
</section>
<!-- end section -->




@endsection
@section('script-area')

<script>
    $(document).ready(function() {
    $('.theme-demos').remove();
});

    </script>

  <!-- javascript libraries -->
  <script data-cfasync="false" src="{{ asset('home/assets/homepage/js/cloudflare-static-email-decode.min.js') }}">
  </script>
  <script type="text/javascript" src="{{ asset('home/assets/homepage/js/6617-js-jquery.js') }}"></script>
  <script type="text/javascript" src="{{ asset('home/assets/homepage/js/567-js-vendors.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('home/assets/homepage/js/7637-js-main.js') }}"></script>
@endsection
