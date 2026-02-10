@extends('home.includes.layout')
@section('title', 'Proactive Network Monitoring & Performance Optimization | Mounteko Global Solutions')
@section('meta-description', 'Gain unparalleled visibility and control over your network infrastructure to ensure maximum uptime, speed, and reliability.')

@section('header-area')
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- style sheets and font icons -->
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/new_home_custom.css') }}">
@endsection

@section('content')

    <!-- Hero Section / Slider -->
    <div id="networkHeroCarousel" class="carousel slide carousel-dark" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active position-relative">
                <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&q=80&w=1920"
                    class="d-block w-100 img-fluid banner_image" alt="Network Monitoring and Performance Optimization"
                    style="max-height: 60vh; object-fit: cover; object-position: center;">

                <div class="position-absolute top-50 translate-middle px-3 text-white w-100 left_margin"
                    style="max-width: 900px;">
                    <div class="text-center text-md-start mx-auto" style="max-width: 700px;">
                        <h1 class="fw-bold mb-3 responsive-heading text-white fs-1"
                            style="text-shadow: 3px 5px 10px rgba(0,0,0,1); font-weight: 800;">
                            Proactive Network Monitoring & Performance Optimization
                        </h1>
                        <p class="lead mb-4 responsive-paragraph text-white"
                            style="text-shadow: 2px 3px 8px rgba(0,0,0,1); font-weight: 600;">
                            Gain unparalleled visibility and control over your network infrastructure to ensure maximum
                            uptime, speed, and reliability.
                        </p>
                    </div>
                </div>

                <!-- Dark Overlay for better text visibility -->
                <div class="position-absolute top-0 start-0 w-100 h-100"
                    style="background: linear-gradient(to right, rgba(0,0,0,0.75), rgba(0,0,0,0.5)); z-index: -1;">
                </div>
            </div>
        </div>
    </div>

    <!-- Section 1: Intro -->
    <main id="main">
        <section class="py-5" style="background-color: #f8f9fa;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <h2 class="section-title fs-2">Transform Your Network from <span
                                style="color: var(--primary-color);">Reactive to Proactive</span></h2>
                    </div>
                    <div class="col-lg-6">
                        <p class="section-desc">
                            In an era where application performance directly impacts revenue, consistent network health is
                            non-negotiable. Our comprehensive monitoring and optimization services provide the deep insights
                            and automated intelligence needed to prevent issues, resolve them faster, and ensure your
                            infrastructure delivers an optimal experience for every user and customer.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Business Value We Deliver -->
        <section class="py-5 bg-white">
            <div class="container">
                <div class="text-center mb-5">
                    <h3 class="common-section-heading fs-2">Business Value We Deliver</h3>
                    <div style="width: 60px; height: 3px; background-color: #0d233e; margin: 15px auto;"></div>
                </div>

                <div class="row g-4">
                    <!-- Value 1: Maximum Uptime -->
                    <div class="col-lg-3">
                        <div class="network-service-card h-100">
                            <div class="text-center">
                                <div class="icon-wrapper mb-3">
                                    <i class="fas fa-clock fa-2x"></i>
                                </div>
                                <h4 class="mb-3 fw-bold fs-5">Maximum Uptime</h4>
                            </div>
                            <div class="service-list mt-3">
                                <p class="text-muted small">24/7 monitoring and proactive alerts ensure issues are detected
                                    and resolved before they impact operations.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Value 2: Enhanced Performance -->
                    <div class="col-lg-3">
                        <div class="network-service-card h-100">
                            <div class="text-center">
                                <div class="icon-wrapper mb-3">
                                    <i class="fas fa-tachometer-alt fa-2x"></i>
                                </div>
                                <h4 class="mb-3 fw-bold fs-5">Enhanced Performance</h4>
                            </div>
                            <div class="service-list mt-3">
                                <p class="text-muted small">Performance optimization identifies bottlenecks and fine-tunes
                                    configurations for faster, more reliable network operations.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Value 3: Cost Efficiency -->
                    <div class="col-lg-3">
                        <div class="network-service-card h-100">
                            <div class="text-center">
                                <div class="icon-wrapper mb-3">
                                    <i class="fas fa-dollar-sign fa-2x"></i>
                                </div>
                                <h4 class="mb-3 fw-bold fs-5">Cost Efficiency</h4>
                            </div>
                            <div class="service-list mt-3">
                                <p class="text-muted small">Identify underutilized resources and optimize bandwidth
                                    allocation to reduce unnecessary infrastructure costs.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Value 4: Data-Driven Decisions -->
                    <div class="col-lg-3">
                        <div class="network-service-card h-100">
                            <div class="text-center">
                                <div class="icon-wrapper mb-3">
                                    <i class="fas fa-chart-bar fa-2x"></i>
                                </div>
                                <h4 class="mb-3 fw-bold fs-5">Data-Driven Decisions</h4>
                            </div>
                            <div class="service-list mt-3">
                                <p class="text-muted small">Comprehensive analytics and reporting provide actionable
                                    insights for strategic network planning and growth.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section 3: Why Choose Us -->
        <section class="background-position-center-top sm-background-image-none pt-4"
            style="background-image: url('{{ asset('home/assets/homepage/images/vertical-line-bg.svg') }}'); padding-bottom: 80px;">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-7 text-center">
                        <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px fs-2">Why Choose Our <span
                                class="text-highlight fw-800">Network Performance Management<span
                                    class="h-8px bottom-10px opacity-6 separator-animation"
                                    style="background: var(--primary-color);"></span></span>
                        </h3>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-10 text-center text-lg-start">
                        <div class="swiper slider-one-slide md-mb-50px sm-mb-40px text-slider-style-01"
                            data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".slider-one-slide-pagination", "clickable": true }, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                            <div class="swiper-wrapper mb-30px">
                                <!-- start text slider item -->
                                <div class="swiper-slide">
                                    <div class="alt-font text-uppercase fw-600 mb-15px d-inline-block ls-1px"
                                        style="color: var(--primary-color);">
                                        Our Philosophy</div>
                                    <h3 class="alt-font text-dark-gray mb-30px md-mb-25px fw-600 ls-minus-1px">Visibility is
                                        the foundation of control.</h3>
                                    <span class="d-inline-block w-95 md-w-100">You cannot improve what you cannot measure.
                                        We equip you with the data and insights needed to make informed decisions, plan for
                                        growth, and guarantee service levels.</span>
                                </div>
                                <!-- end text slider item -->
                                <!-- start text slider item -->
                                <div class="swiper-slide">
                                    <div class="alt-font text-uppercase fw-600 mb-15px d-inline-block ls-1px"
                                        style="color: var(--primary-color);">
                                        Our Technology Advantage</div>
                                    <h3 class="alt-font text-dark-gray mb-30px md-mb-25px fw-600 ls-minus-1px">
                                        Intelligence-driven, not just incident-driven.</h3>
                                    <span class="d-inline-block w-95 md-w-100">Our approach leverages advanced analytics to
                                        move beyond simple uptime/downtime alerts. We identify subtle performance
                                        degradations and trends, allowing you to fix issues before they affect users.</span>
                                </div>
                                <!-- end text slider item -->
                                <!-- start text slider item -->
                                <div class="swiper-slide">
                                    <div class="alt-font text-uppercase fw-600 mb-15px d-inline-block ls-1px"
                                        style="color: var(--primary-color);">
                                        Core Promise</div>
                                    <h3 class="alt-font text-dark-gray mb-30px md-mb-25px fw-600 ls-minus-1px">Optimize for
                                        the experience, not just the infrastructure.</h3>
                                    <span class="d-inline-block w-95 md-w-100">Our ultimate goal is to ensure superior
                                        performance for the business applications and services that run on your network,
                                        translating technical metrics into business value.</span>
                                </div>
                                <!-- end text slider item -->
                            </div>
                            <div class="d-flex justify-content-center justify-content-lg-start">
                                <!-- start slider navigation -->
                                <div
                                    class="slider-one-slide-prev-1 text-dark-gray swiper-button-prev slider-navigation-style-04 border border-1 border-color-extra-medium-gray bg-white">
                                    <i class="fa-solid fa-arrow-left"></i>
                                </div>
                                <div
                                    class="slider-one-slide-next-1 text-dark-gray swiper-button-next slider-navigation-style-04 border border-1 border-color-extra-medium-gray bg-white">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                                <!-- end slider navigation -->
                            </div>
                        </div>
                    </div>
                    <!-- Images Section -->
                    <div class="col-xl-6 col-lg-6 offset-xl-1 position-relative text-end md-mb-6 sm-mb-10 xs-mb-12">
                        <div class="text-end w-80 md-w-75 ms-auto">
                            <img src="{{ asset('home/assets/homepage/images/images-demo-startup-who-we-are-02.jpg') }}"
                                alt="" class="border-radius-5px">
                        </div>
                        <div class="w-60 md-w-50 xs-w-55 overflow-hidden position-absolute left-15px bottom-minus-50px">
                            <img src="{{ asset('home/assets/homepage/images/images-demo-startup-who-we-are-03.jpg') }}"
                                alt="" class="border-radius-5px">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: Our Optimization Cycle -->
        <section class="py-5" style="background-color: #fff;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center mb-4">
                        <span class="alt-font text-uppercase fw-600 d-inline-block ls-1px fs-5"
                            style="color: var(--primary-color);">Our Optimization Cycle</span>
                        <hr class="mx-auto opacity-100 mt-2 mb-0"
                            style="width: 50px; height: 2px; background-color: var(--primary-color);">
                    </div>
                </div>

                <div class="row justify-content-center process-steps-container">
                    <!-- Step 1 -->
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 d-flex">
                        <div class="process-card w-100">
                            <div class="process-step-badge">1</div>
                            <div class="process-icon-box">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <h5>Discovery & Baseline<br>Establishment</h5>
                            <p>We map your entire network ecosystem and establish normal performance baselines for key
                                metrics.</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 d-flex">
                        <div class="process-card w-100">
                            <div class="process-step-badge">2</div>
                            <div class="process-icon-box">
                                <i class="fas fa-tools"></i>
                            </div>
                            <h5>Implementation & Tool<br>Configuration</h5>
                            <p>We deploy monitoring agents and configure dashboards and intelligent alerts tailored to your
                                environment.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 d-flex">
                        <div class="process-card w-100">
                            <div class="process-step-badge">3</div>
                            <div class="process-icon-box">
                                <i class="fas fa-sliders-h"></i>
                            </div>
                            <h5>Analysis & Strategic<br>Tuning</h5>
                            <p>Our experts analyze data to identify optimization opportunities and implement tuning
                                adjustments.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 d-flex">
                        <div class="process-card w-100">
                            <div class="process-step-badge">4</div>
                            <div class="process-icon-box">
                                <i class="fas fa-sync-alt"></i>
                            </div>
                            <h5>Ongoing Review &<br>Strategic Planning</h5>
                            <p>We provide regular review meetings and reports, turning data into a strategic roadmap for
                                continuous improvement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Case Studies Section -->
        <section class="case-studies py-5">
            <div class="container text-center mb-5">
                <h2 class="common-section-heading section-heading mb-3 fs-2">Featured Case Studies</h2>
                <h3 class="fw-bold mb-3 fs-5" style="color: #333;">Real Results. Real Business Transformation.</h3>
                <p class="mb-4 text-muted fs-6" style="max-width: 800px; margin: 0 auto;">
                    Discover how Mounteko Global Solutions enables businesses to modernize their IT infrastructure, enhance
                    cybersecurity, and scale with confidence. Our case studies highlight real-world success through managed
                    IT services, cloud solutions, and network optimization.
                </p>
                <a href="#" class="btn btn-case-study"><span>Talk to an expert</span> <i
                        class="fas fa-chevron-right ms-2"></i></a>
            </div>

            <div class="container px-4 px-lg-5">
                <div class="case-study-slider swiper">
                    <div class="swiper-wrapper">
                        <!-- Card 1 -->
                        <div class="swiper-slide">
                            <div class="case-card"
                                style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=600');">
                                <div class="case-card-content">
                                    <span class="case-tag">Retail</span>
                                    <p class="case-quote">"Their managed IT services reduced our downtime by 60%."</p>
                                    <div class="case-footer">
                                        <h5 class="company-name">Retail Solutions Inc.</h5>
                                        <span class="industry-name">Retail Industry</span>
                                    </div>
                                </div>
                                <div class="go-corner" href="#">
                                    <div class="go-arrow">
                                        →
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="swiper-slide">
                            <div class="case-card"
                                style="background-image: url('https://images.unsplash.com/photo-1558486012-818148f97521?auto=format&fit=crop&q=80&w=600');">
                                <div class="case-card-content">
                                    <span class="case-tag">Automotive</span>
                                    <p class="case-quote">"Optimized our cloud infrastructure for peak performance."</p>
                                    <div class="case-footer">
                                        <h5 class="company-name">AutoDrive Tech</h5>
                                        <span class="industry-name">Automotive</span>
                                    </div>
                                </div>
                                <div class="go-corner" href="#">
                                    <div class="go-arrow">
                                        →
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="swiper-slide">
                            <div class="case-card"
                                style="background-image: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=600');">
                                <div class="case-card-content">
                                    <span class="case-tag">Manufacturing</span>
                                    <p class="case-quote">"Scalable solutions that grew with our manufacturing needs."
                                    </p>
                                    <div class="case-footer">
                                        <h5 class="company-name">Stefanini Group</h5>
                                        <span class="industry-name">Manufacturing</span>
                                    </div>
                                </div>
                                <div class="go-corner" href="#">
                                    <div class="go-arrow">
                                        →
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- Final CTA Section -->
        <section class="py-5 bg-light">
            <div class="container text-center">
                <h2 class="fs-2 fw-bold mb-3" style="color: var(--primary-color);">Ready for a Healthier, Faster Network?
                </h2>
                <div style="width: 50px; height: 3px; background-color: #dee2e6; margin: 0 auto 20px;"></div>
                <p class="fs-6 text-muted mb-4">Stop guessing about your network's performance. Gain the insights and
                    expertise needed to optimize your most critical business asset.</p>
                <a href="#" class="btn btn-network-cta fw-bold shadow-sm">Begin with a Free Network Health Audit</a>
            </div>
        </section>

    </main>

@endsection

@section('script-area')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var caseStudySwiper = new Swiper('.case-study-slider', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2
                    },
                    1024: {
                        slidesPerView: 3
                    },
                }
            });
        });
    </script>
@endsection