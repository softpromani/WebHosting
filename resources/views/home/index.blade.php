@extends('home.includes.layout')
@section('title', 'Home')
@section('header-area')
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- style sheets and font icons -->
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">


@endsection
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>Facilitate Remote Collaboration</h1>
            <h2>Offering robust and secure cloud solutions specific for your business requirements</h2>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                        class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- start section -->
        <section class="pt-0 background-position-center-top sm-background-image-none"
            style="background-image: url('{{ asset('home/assets/homepage/images / vertical - line - bg . svg') }}')">
            <div class="container-fluid d-none d-md-block">
                <div class="row">
                    <div class="p-0 overlap-section" data-bottom-top="transform: translateY(-50px)"
                        data-top-bottom="transform: translateY(50px)">
                        <img src="{{ asset('home/assets/homepage/images/images-demo-startup-bg-01.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center mb-3">
                    <div class="col-lg-7 text-center"
                        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="alt-font text-uppercase fw-600 d-inline-block ls-1px">What we offers</span>
                        <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px shadow-none" data-shadow-animation="true"
                            data-animation-delay="1000">Explore the <span class="text-highlight fw-800">services<span
                                    class="bg-gradient-emerald-blue-emerald-green h-8px bottom-10px opacity-6 separator-animation"></span></span>
                        </h3>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 justify-content-center">
                    <!-- start fancy text box item -->
                    <div class="col md-mb-30px">
                        <div
                            class="border-radius-8px overflow-hidden box-shadow-quadruple-large services-box-style-03 last-paragraph-no-margin">
                            <div class="position-relative box-image">
                                <a href="#"><img
                                        src="{{ asset('home/assets/homepage/images/images-demo-startup-01.jpg') }}"
                                        alt=""></a>
                                <a href="#"
                                    class="btn btn-very-small btn-rounded btn-dark-gray text-white btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 position-absolute right-30px top-30px text-uppercase">Research
                                </a>
                            </div>
                            <div class="bg-white">
                                <div
                                    class="ps-65px pe-65px xl-ps-50px xl-pe-50px lg-ps-30px lg-pe-30px pt-30px pb-30px text-center">
                                    <a href="demo-startup-services-details.html"
                                        class="d-inline-block fs-18 alt-font fw-700 text-dark-gray mb-5px">Research
                                        planning</a>
                                    <p>Lorem ipsum simply dummy text of amet consectetur.</p>
                                </div>
                                <div
                                    class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px position-relative text-center">
                                    <a href="#"
                                        class="btn btn-link btn-hover-animation-switch btn-very-small fw-700 text-dark-gray text-uppercase">
                                        <span>
                                            <span class="btn-text">Explore services</span>
                                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end fancy text box item -->
                    <!-- start fancy text box item -->
                    <div class="col md-mb-30px">
                        <div
                            class="border-radius-8px overflow-hidden box-shadow-quadruple-large services-box-style-03 last-paragraph-no-margin">
                            <div class="position-relative box-image">
                                <a href="demo-startup-services-details.html"><img
                                        src="{{ asset('home/assets/homepage/images/images-demo-startup-02.jpg') }}"
                                        alt=""></a>
                                <a href="#"
                                    class="btn btn-very-small btn-rounded btn-dark-gray text-white btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 position-absolute right-30px top-30px text-uppercase">Business</a>
                            </div>
                            <div class="bg-white">
                                <div
                                    class="ps-65px pe-65px xl-ps-50px xl-pe-50px lg-ps-30px lg-pe-30px pt-30px pb-30px text-center">
                                    <a href="#"
                                        class="d-inline-block fs-18 alt-font fw-700 text-dark-gray mb-5px">Business
                                        promotion</a>
                                    <p>Lorem ipsum simply dummy text of amet consectetur.</p>
                                </div>
                                <div
                                    class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px position-relative text-center">
                                    <a href="demo-startup-services-details.html"
                                        class="btn btn-link btn-hover-animation-switch btn-very-small fw-700 text-dark-gray text-uppercase">
                                        <span>
                                            <span class="btn-text">Explore services</span>
                                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end fancy text box item -->
                    <!-- start fancy text box item -->
                    <div class="col">
                        <div
                            class="border-radius-8px overflow-hidden box-shadow-quadruple-large services-box-style-03 last-paragraph-no-margin">
                            <div class="position-relative box-image">
                                <a href="demo-startup-services-details.html"><img
                                        src="{{ asset('home/assets/homepage/images/images-demo-startup-03.jpg') }}"
                                        alt=""></a>
                                <a href="#"
                                    class="btn btn-very-small btn-rounded btn-dark-gray text-white btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 position-absolute right-30px top-30px text-uppercase">Revenue</a>
                            </div>
                            <div class="bg-white">
                                <div
                                    class="ps-65px pe-65px xl-ps-50px xl-pe-50px lg-ps-30px lg-pe-30px pt-30px pb-30px text-center">
                                    <a href="demo-startup-services-details.html"
                                        class="d-inline-block fs-18 alt-font fw-700 text-dark-gray mb-5px">Revenue
                                        generation</a>
                                    <p>Lorem ipsum simply dummy text of amet consectetur.</p>
                                </div>
                                <div
                                    class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px position-relative text-center">
                                    <a href="demo-startup-services-details.html"
                                        class="btn btn-link btn-hover-animation-switch btn-very-small fw-700 text-dark-gray text-uppercase">
                                        <span>
                                            <span class="btn-text">Explore services</span>
                                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end fancy text box item -->
                </div>
            </div>
        </section>
        <!-- end section -->

        <section class="bg-very-light-gray">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 text-center md-mb-50px">
                        <figure class="position-relative m-0">
                            <div class="position-relative d-inline-block"
                                data-anime='{ "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <img class="w-90 border-radius-5px animation-float"
                                    src="{{ asset('home/assets/homepage/images/images-demo-startup-06.jpg') }}"
                                    alt="">
                            </div>
                            <figcaption
                                class="position-absolute bg-white box-shadow-quadruple-large border-radius-5px bottom-50px xs-bottom-35px left-minus-30px md-left-minus-0px ps-50px pe-50px pt-35px pb-35px xs-p-20px w-320px xs-w-250px text-center last-paragraph-no-margin"
                                data-anime='{ "translateY": [50, 0], "scale": [0.8,1], "opacity": [0,1], "duration": 800, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <div class="icon-with-text-style-06">
                                    <div class="bg-white feature-box feature-box-left-icon-middle">
                                        <div class="feature-box-icon me-15px">
                                            <i
                                                class="line-icon-Thumb icon-double-large text-gradient-emerald-blue-emerald-green"></i>
                                        </div>
                                        <div class="feature-box-content last-paragraph-no-margin">
                                            <div class="alt-font fw-600 text-dark-gray lh-26">We provide quality services
                                                to customers.</div>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-8">
                        <h3 class="fw-600 mb-60px md-mb-40px mt-20px text-dark-gray alt-font ls-minus-2px"
                            data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            Understand and apply the <span class="fw-800">business process.</span></h3>
                        <div class="row row-cols-1"
                            data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 800, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <!-- start process step item -->
                            <div class="col-12 process-step-style-05 position-relative hover-box">
                                <div class="process-step-item d-flex">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div
                                            class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-16 bg-gradient-emerald-blue-emerald-green fw-400 position-relative will-change-transform">
                                            <span class="number position-relative z-index-1 text-white">01</span>
                                            <div class="box-overlay bg-gradient-emerald-blue-emerald-green rounded-circle">
                                            </div>
                                        </div>
                                        <span class="progress-step-separator bg-extra-medium-gray"></span>
                                    </div>
                                    <div class="process-content ps-35px last-paragraph-no-margin mb-30px">
                                        <span class="d-block fw-700 text-dark-gray mb-5px fs-18 alt-font">Research and
                                            strategy</span>
                                        <p class="w-80 lg-w-90 sm-w-100">We spend enough time to uncover business goals and
                                            client needs.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end process step item -->
                            <!-- start process step item -->
                            <div class="col-12 process-step-style-05 position-relative hover-box">
                                <div class="process-step-item d-flex">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div
                                            class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-16 bg-gradient-emerald-blue-emerald-green fw-400 position-relative will-change-transform">
                                            <span class="number position-relative z-index-1 text-white">02</span>
                                            <div class="box-overlay bg-gradient-emerald-blue-emerald-green rounded-circle">
                                            </div>
                                        </div>
                                        <span class="progress-step-separator bg-extra-medium-gray"></span>
                                    </div>
                                    <div class="process-content ps-35px last-paragraph-no-margin mb-30px">
                                        <span class="d-block fw-700 text-dark-gray mb-5px fs-18 alt-font">Development and
                                            scale</span>
                                        <p class="w-80 lg-w-90 sm-w-100">We utilize our best talents to design digital
                                            products and services.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end process step item -->
                            <!-- start process step item -->
                            <div class="col-12 process-step-style-05 position-relative hover-box">
                                <div class="process-step-item d-flex">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div
                                            class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-16 bg-gradient-emerald-blue-emerald-green fw-400 position-relative will-change-transform">
                                            <span class="number position-relative z-index-1 text-white">03</span>
                                            <div class="box-overlay bg-gradient-emerald-blue-emerald-green rounded-circle">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="process-content ps-35px last-paragraph-no-margin">
                                        <span class="d-block fw-700 text-dark-gray mb-5px fs-18 alt-font">Testing and
                                            evaluation</span>
                                        <p class="w-80 lg-w-90 sm-w-100">Before the launch, our team test complete website
                                            thoroughly.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end process step item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <section class="pt-0 big-section sta">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 position-relative">
                        <div class="img-container">
                            <!-- Primary image -->
                            <img src="{{ asset('home/assets/img/demo-consulting-01.jpg') }}" alt="Advisor"
                                class="rounded-img img-back">
                            <!-- Overlapping image -->
                            <img src="{{ asset('home/assets/img/demo-consulting-02.jpg') }}" alt="Advisor"
                                class="rounded-img img-front" data-aos="fade-up">
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start">
                        <h6>Company's vision</h6>
                        <h3 class="fw-700 text-dark-gray ls-minus-2px">Scalable business for startups</h3>
                        <p class="mb-40px xs-mb-30px w-90 lg-w-95 md-w-100">
                            Lorem ipsum dolor sit amet consectetur elit adipiscing elit do eiusmod tempor incididunt ut
                            labore
                            et dolore magna ut enim.
                        </p>

                        <a href="#"
                            class="btn btn-dark-gray abtcomp  btn-round-edge btn-medium me-25px  hover-bounce">About
                            Company</a>
                        <a href="#" class="btn btn-link text-dark-gray xs-mt-15px xs-mb-15px  ">How We Work</a>
                        <div
                            class="row align-items-center mt-5 mb-50px xs-mb-25px justify-content-center justify-content-lg-start">
                            <div class="col-auto col-lg-4 border-end border-color-extra-medium-gray text-center">
                                <h1 class=" fw-700  display-4 fw-bold mb-0">4.9</h1>
                            </div>
                            <!-- Rating -->
                            <div class="col-lg-6 col-md-4 col-sm-5 text-start">
                                <div class="d-flex align-items-center">

                                    <div class="ms-3">
                                        <div class="d-flex">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <span class="fw-500 text-dark-gray ls-minus-05px">2,488 Genuine rating</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="down-section">
            <div id="particles-01" data-particle="true"
                data-particle-options='{"particles": {"number": {"value": 6,"density": {"enable": true,"value_area": 1000}},"color":{"value":["#b7b9be", "#dd6531"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.5,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"move": {"enable": true,"speed":2,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'
                class="position-absolute h-100 top-0 left-0 z-index-minus-1"></div>
            <div class="container">
                <div class="row justify-content-center text-center text-lg-start">
                    <div class="col-xl-5 col-lg-6 md-mb-30px xs-mb-25px">
                        <h3 class="fw-600 text-dark-gray ls-minus-2px mb-0"
                            data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            We develop and create consulting good future.</h3>
                    </div>
                    <div class="col-lg-6 offset-xl-1">
                        <p class="w-90 sm-w-100 mx-auto mx-lg-0"
                            data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            Adipiscing elit, sed do eusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco. Adipiscing elitdo eiusmod tempor.</p>
                        <a href="#" class="btn btn-link exp text-dark-gray xs-mt-15px xs-mb-15px  ">Explore
                            services</a>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center mt-5 md-mt-10">
                    <div class="col-xl-4 col-lg-3 col-md-4 sm-mb-35px"
                        data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <!-- start counter item -->
                        <div class="row align-items-center mb-50px sm-mb-35px">
                            <div class="col-5 col-xl-5 col-md-12 text-end">
                                <h2 class="alt-font fw-600 text-dark-gray ls-minus-2px mb-0 counter" data-speed="2000"
                                    data-to="2010"></h2>
                            </div>
                            <div class="col-7 col-xl-7 col-md-12 last-paragraph-no-margin text-md-end text-xl-start">
                                <span class="fs-20 text-dark-gray fw-600 alt-font">Crafto founded</span>
                                <p>Founded a company</p>
                            </div>
                        </div>
                        <!-- end counter item -->
                        <!-- start counter item -->
                        <div class="row align-items-center">
                            <div class="col-5 col-xl-5 col-md-12 text-end">
                                <h2 class="alt-font fw-600 text-dark-gray ls-minus-2px mb-0 counter" data-speed="2000"
                                    data-to="2014"></h2>
                            </div>
                            <div class="col-7 col-xl-7 col-md-12 last-paragraph-no-margin text-md-end text-xl-start">
                                <span class="fs-20 text-dark-gray fw-600 alt-font">Expand team</span>
                                <p>Opportunity to expand</p>
                            </div>
                        </div>
                        <!-- end counter item -->
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-4 text-center animation-float sm-mb-65px"
                        data-anime='{ "el": "childs", "scale": [0, 1], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <img class="border-radius-100 w-350px"
                            src="{{ asset('home/assets/homepage/images/images-demo-consulting-company-01.jpg') }}"
                            alt="" />
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-4"
                        data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 200, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <!-- start counter item -->
                        <div class="row align-items-center mb-50px sm-mb-35px">
                            <div class="col-5 col-xl-5 col-md-12 text-end text-xl-end text-md-start">
                                <h2 class="alt-font fw-600 text-dark-gray ls-minus-2px mb-0 counter" data-speed="2000"
                                    data-to="2019"></h2>
                            </div>
                            <div class="col-7 col-xl-7 col-md-12 last-paragraph-no-margin">
                                <span class="fs-20 text-dark-gray fw-600 alt-font">Build new office</span>
                                <p>Building a new office</p>
                            </div>
                        </div>
                        <!-- end counter item -->
                        <!-- start counter item -->
                        <div class="row align-items-center">
                            <div class="col-5 col-xl-5 col-md-12 text-end text-xl-end text-md-start">
                                <h2 class="alt-font fw-600 text-dark-gray ls-minus-2px mb-0 counter" data-speed="2000"
                                    data-to="2021"></h2>
                            </div>
                            <div class="col-7 col-xl-7 col-md-12 last-paragraph-no-margin">
                                <span class="fs-20 text-dark-gray fw-600 alt-font">Winning award</span>
                                <p>The power of winning</p>
                            </div>
                        </div>
                        <!-- end counter item -->
                    </div>
                </div>
            </div>
        </section>

        <!-- start section -->
        <section class="bg-very-light-gray">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 md-mb-50px">
                        <div class="row">
                            <div class="col-sm-6 mt-30px xs-mt-0" data-bottom-top="transform: translateY(50px)"
                                data-top-bottom="transform: translateY(-50px)"
                                data-anime='{ "el": "childs", "translateY": [0, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,0.7], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <!-- start features box item -->
                                <div
                                    class="bg-white border-radius-6px overflow-hidden box-shadow-double-large icon-with-text-style-05 transition-inner-all mb-30px">
                                    <div class="feature-box hover-box dark-hover last-paragraph-no-margin">
                                        <div class="content-slide-up content-scale pt-17 pb-17 ps-10 pe-10 sm-p-15">
                                            <div class="feature-box-icon">
                                                <i
                                                    class="line-icon-Like icon-extra-large text-base-color mb-20px justify-content-center"></i>
                                            </div>
                                            <div class="feature-box-content">
                                                <span
                                                    class="d-inline-block alt-font text-dark-gray fs-20 fw-600">Honorable</span>
                                                <p class="lh-28 text-visible text-light-opacity w-80 mx-auto sm-w-100">
                                                    Lorem ipsum is simply dummy text.</p>
                                            </div>
                                            <div class="feature-box-overlay bg-base-color"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- start features box item -->
                                <!-- end features box item -->
                                <div
                                    class="bg-white border-radius-6px overflow-hidden box-shadow-double-large icon-with-text-style-05 transition-inner-all xs-mb-30px">
                                    <div class="feature-box hover-box dark-hover last-paragraph-no-margin">
                                        <div class="content-slide-up content-scale pt-17 pb-17 ps-10 pe-10 sm-p-15">
                                            <div class="feature-box-icon">
                                                <i
                                                    class="line-icon-Knight icon-extra-large text-base-color mb-20px justify-content-center"></i>
                                            </div>
                                            <div class="feature-box-content">
                                                <span
                                                    class="d-inline-block alt-font text-dark-gray fs-20 fw-600">Analytics</span>
                                                <p class="lh-28 text-visible text-light-opacity w-80 mx-auto sm-w-100">
                                                    Lorem ipsum is simply dummy text.</p>
                                            </div>
                                            <div class="feature-box-overlay bg-base-color"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end features box item -->
                            </div>
                            <div class="col-sm-6" data-bottom-top="transform: translateY(-50px)"
                                data-top-bottom="transform: translateY(50px)"
                                data-anime='{ "el": "childs", "translateY": [0, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,0.7], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <!-- start features box item -->
                                <div
                                    class="bg-white border-radius-6px overflow-hidden box-shadow-double-large icon-with-text-style-05 transition-inner-all mb-30px">
                                    <div class="feature-box hover-box dark-hover last-paragraph-no-margin">
                                        <div class="content-slide-up content-scale pt-17 pb-17 ps-10 pe-10 sm-p-15">
                                            <div class="feature-box-icon">
                                                <i
                                                    class="line-icon-MaleFemale icon-extra-large text-base-color mb-20px justify-content-center"></i>
                                            </div>
                                            <div class="feature-box-content">
                                                <span
                                                    class="d-inline-block alt-font text-dark-gray fs-20 fw-600">Leadership</span>
                                                <p class="lh-28 text-visible text-light-opacity w-80 mx-auto sm-w-100">
                                                    Lorem ipsum is simply dummy text.</p>
                                            </div>
                                            <div class="feature-box-overlay bg-base-color"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- start features box item -->
                                <!-- end features box item -->
                                <div
                                    class="bg-white border-radius-6px overflow-hidden box-shadow-double-large icon-with-text-style-05 transition-inner-all mt-30px">
                                    <div class="feature-box hover-box dark-hover last-paragraph-no-margin">
                                        <div class="content-slide-up content-scale pt-17 pb-17 ps-10 pe-10 sm-p-15">
                                            <div class="feature-box-icon">
                                                <i
                                                    class="line-icon-Bar-Chart2 icon-extra-large text-base-color mb-20px justify-content-center"></i>
                                            </div>
                                            <div class="feature-box-content">
                                                <span
                                                    class="d-inline-block alt-font text-dark-gray fs-20 fw-600">Production</span>
                                                <p class="lh-28 text-visible text-light-opacity w-80 mx-auto sm-w-100">
                                                    Lorem ipsum is simply dummy text.</p>
                                            </div>
                                            <div class="feature-box-overlay bg-base-color"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end features box item -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 text-center text-lg-start"
                        data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <h2 class="alt-font fw-600 text-dark-gray ls-minus-2px">Why choose our company services?</h2>
                        <p class="w-90 xs-w-100 mx-auto mx-lg-0">Lorem ipsum dolor amet, consectetur adipiscing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. ut enim ad minim veniam.</p>
                        <a href="demo-consulting-contact.html"
                            class="btn btn-large btn-dark-gray btn-box-shadow mt-10px btn-round-edge">Get started now!</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @foreach ($testimonial as $t)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="{{ asset($t->pic) }}" class="testimonial-img" alt="">
                                    <h3>{{ $t->name }}</h3>
                                    <h4>{{ $t->position }}</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        {{ $t->description }}
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->
                        @endforeach


                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>F.A.Q</h2>
                    <h3>Frequently Asked <span>Questions</span></h3>
                    <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                        vitae autem.</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <ul class="faq-list">

                            @foreach ($faqs as $index => $faq)
                                <li>
                                    <div data-bs-toggle="collapse" class="collapsed question"
                                        href="#faq{{ $index }}">
                                        {{ $faq->question }} <i class="bi bi-chevron-down icon-show"></i><i
                                            class="bi bi-chevron-up icon-close"></i>
                                    </div>
                                    <div id="faq{{ $index }}" class="collapse" data-bs-parent=".faq-list">
                                        <p>{!! $faq->answer !!}</p>
                                    </div>
                                </li>
                            @endforeach



                        </ul>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Frequently Asked Questions Section -->


    </main><!-- End #main -->
@endsection
@section('script-area')
    <!-- javascript libraries -->
    <script data-cfasync="false" src="{{ asset('home/assets/homepage/js/cloudflare-static-email-decode.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('home/assets/homepage/js/6617-js-jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home/assets/homepage/js/567-js-vendors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home/assets/homepage/js/7637-js-main.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.theme-demos').empty();

            // Initialize Jarallax
            $('.jarallax').jarallax({
                speed: 0.3
            });

        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".blogSwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            speed: 500,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false
            },
            slidesPerView: 'auto',
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
            },
        });
        var swiper = new Swiper(".partSwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            speed: 500,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false
            },
            slidesPerView: 'auto',
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
            },
        });
    </script>
@endsection
