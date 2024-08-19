@extends('home.includes.layout')
@section('title', 'Home')
@section('header-area')
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">

@endsection
@section('content')


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
            <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 justify-content-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <!-- start fancy text box item -->
                <div class="col md-mb-30px">
                    <div
                        class="border-radius-8px overflow-hidden box-shadow-quadruple-large services-box-style-03 last-paragraph-no-margin">
                        <div class="position-relative box-image">
                            <a href="demo-startup-services-details.html"><img
                                    src="{{ asset('home/assets/homepage/images/images-demo-startup-01.jpg') }}"
                                    alt=""></a>
                            <a href="#"
                                class="btn btn-very-small btn-rounded btn-dark-gray text-white btn-box-shadow ps-15px pe-15px pt-5px pb-5px lh-16 position-absolute right-30px top-30px text-uppercase">Research</a>
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
                                <a href="demo-startup-services-details.html"
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


    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->

@section('script-area')
    <!-- javascript libraries -->
    <script data-cfasync="false" src="{{ asset('home/assets/homepage/js/cloudflare-static-email-decode.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('home/assets/homepage/js/6617-js-jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home/assets/homepage/js/567-js-vendors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home/assets/homepage/js/7637-js-main.js') }}"></script>
@endsection

@endsection
