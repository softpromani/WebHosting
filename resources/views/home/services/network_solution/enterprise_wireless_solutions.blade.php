@extends('home.includes.layout')
@section('title', 'Enterprise Wireless Solutions | Mounteko Global Solutions')
@section('meta-description', 'Secure, Scalable & High-Performance Wireless Networks for Modern Enterprises.')

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
                <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&q=80&w=1920"
                    class="d-block w-100 img-fluid banner_image" alt="Enterprise Wireless Solutions"
                    style="max-height: 60vh; object-fit: cover;">

                <div class="position-absolute top-50 translate-middle px-3 text-white w-100 left_margin"
                    style="max-width: 900px;">
                    <div class="text-center text-md-start mx-auto" style="max-width: 700px;">
                        <h1 class="fw-bold mb-3 responsive-heading text-white fs-1"
                            style="text-shadow: 0 2px 4px rgba(0,0,0,0.6);">
                            Enterprise Wireless Solutions & Implementation
                        </h1>
                        <p class="lead mb-4 responsive-paragraph text-white"
                            style="text-shadow: 0 1px 2px rgba(0,0,0,0.6); font-weight: 500;">
                            Secure, Scalable & High-Performance Wireless Networks for Modern Enterprises.
                        </p>
                    </div>
                </div>

                <!-- Dark Overlay for better text visibility -->
                <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.4); z-index: -1;">
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
                        <h2 class="section-title fs-2">Secure, Scalable & High-Performance <span
                                style="color: var(--primary-color);">Wireless Networks</span></h2>
                    </div>
                    <div class="col-lg-6">
                        <p class="section-desc">
                            In today’s digitally connected enterprise environment, a high-performance wireless network is no
                            longer optional—it is mission-critical. Our Enterprise Wireless Solutions and Implementation
                            services enable organizations with a dependable and secure wireless network that adapts to
                            evolving workplaces, remote collaboration, smart devices, and cloud operations.
                            We design and implement enterprise-grade wireless networks that ensure seamless connectivity,
                            optimized performance, and enterprise-level security across offices, campuses, warehouses, and
                            multi-location environments.
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
                    <!-- Value 1: Improved Workforce Productivity -->
                    <div class="col-lg-3">
                        <div class="network-service-card h-100">
                            <div class="text-center">
                                <div class="icon-wrapper mb-3">
                                    <i class="fas fa-users fa-2x"></i>
                                </div>
                                <h4 class="mb-3 fw-bold fs-5">Improved Workforce
                                    Productivity</h4>
                            </div>
                            <div class="service-list mt-3">
                                <p class="text-muted small">Reliable wireless connectivity empowers employees to collaborate
                                    efficiently without disruptions or dead zones.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Value 2: Reduced Network Downtime -->
                    <div class="col-lg-3">
                        <div class="network-service-card h-100">
                            <div class="text-center">
                                <div class="icon-wrapper mb-3">
                                    <i class="fas fa-clock fa-2x"></i>
                                </div>
                                <h4 class="mb-3 fw-bold fs-5">Reduced Network Downtime</h4>
                            </div>
                            <div class="service-list mt-3">
                                <p class="text-muted small">Our resilient and redundant wireless designs minimize outages
                                    and ensure high network availability.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Value 3: Lower Operational Costs -->
                    <div class="col-lg-3">
                        <div class="network-service-card h-100">
                            <div class="text-center">
                                <div class="icon-wrapper mb-3">
                                    <i class="fas fa-chart-line fa-2x"></i>
                                </div>
                                <h4 class="mb-3 fw-bold fs-5">Lower Operational Costs</h4>
                            </div>
                            <div class="service-list mt-3">
                                <p class="text-muted small">Centralized management and optimized configurations reduce
                                    long-term maintenance and support costs.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Value 4: Faster Digital Transformation -->
                    <div class="col-lg-3">
                        <div class="network-service-card h-100">
                            <div class="text-center">
                                <div class="icon-wrapper mb-3">
                                    <i class="fas fa-rocket fa-2x"></i>
                                </div>
                                <h4 class="mb-3 fw-bold fs-5">Faster Digital Transformation</h4>
                            </div>
                            <div class="service-list mt-3">
                                <p class="text-muted small">A modern wireless foundation enables cloud adoption, mobility,
                                    IoT, and smart workplace initiatives.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section 3: Why Choose Us (Keeping the same structure) -->
        <section class="background-position-center-top sm-background-image-none pt-4"
            style="background-image: url('{{ asset('home/assets/homepage/images/vertical-line-bg.svg') }}'); padding-bottom: 80px;">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-7 text-center">
                        <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px fs-2">Why Choose our <span
                                class="text-highlight fw-800">wireless solution<span
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
                                        Our mission</div>
                                    <h3 class="alt-font text-dark-gray mb-30px md-mb-25px fw-600 ls-minus-1px">We protect
                                        and supports your business.</h3>
                                    <span class="d-inline-block w-95 md-w-100">We aim to equip businesses with powerful,
                                        scalable, and flexible solutions that seamlessly adapt to the fast-changing demands
                                        of
                                        today’s work environment, enabling greater efficiency and scalability.</span>
                                </div>
                                <!-- end text slider item -->
                                <!-- start text slider item -->
                                <div class="swiper-slide">
                                    <div class="alt-font text-uppercase fw-600 mb-15px d-inline-block ls-1px"
                                        style="color: var(--primary-color);">
                                        Our Vision</div>
                                    <h3 class="alt-font text-dark-gray mb-30px md-mb-25px fw-600 ls-minus-1px">A business
                                        plan and performance ideas.</h3>
                                    <span class="d-inline-block w-95 md-w-100">To lead cloud innovation, creating a future
                                        where technology seamlessly connects people and businesses, ensuring secure,
                                        adaptable,
                                        and accessible solutions.</span>
                                </div>
                                <!-- end text slider item -->
                                <!-- start text slider item -->
                                <div class="swiper-slide">
                                    <div class="alt-font text-uppercase fw-600 mb-15px d-inline-block ls-1px"
                                        style="color: var(--primary-color);">
                                        Core value</div>
                                    <h3 class="alt-font text-dark-gray mb-30px md-mb-25px fw-600 ls-minus-1px">The best
                                        solutions for your startup business.</h3>
                                    <span class="d-inline-block w-95 md-w-100">Mounteko is driven by innovation, customer
                                        focus, and integrity. We deliver reliable, secure cloud services and adaptable
                                        solutions
                                        to meet the evolving needs of businesses, ensuring transparency and trust in what we
                                        do.</span>
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

        <!-- Section 4: Our Implementation Process -->
        <section class="py-5" style="background-color: #fff;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center mb-4">
                        <span class="alt-font text-uppercase fw-600 d-inline-block ls-1px fs-5"
                            style="color: var(--primary-color);">Our Implementation Process</span>
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
                                <i class="fas fa-search"></i>
                            </div>
                            <h5>Requirement<br>Assessment</h5>
                            <p>We understand your business objectives, user density, applications, and security needs.</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 d-flex">
                        <div class="process-card w-100">
                            <div class="process-step-badge">2</div>
                            <div class="process-icon-box">
                                <i class="fas fa-pencil-ruler"></i>
                            </div>
                            <h5>Network<br>Design</h5>
                            <p>Our engineers design a robust enterprise wireless architecture with optimal coverage.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 d-flex">
                        <div class="process-card w-100">
                            <div class="process-step-badge">3</div>
                            <div class="process-icon-box">
                                <i class="fas fa-cogs"></i>
                            </div>
                            <h5>Deployment &<br>Configuration</h5>
                            <p>We implement and configure the wireless infrastructure with minimal downtime.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 d-flex">
                        <div class="process-card w-100">
                            <div class="process-step-badge">4</div>
                            <div class="process-icon-box">
                                <i class="fas fa-headset"></i>
                            </div>
                            <h5>Monitoring &<br>Continuous Support</h5>
                            <p>Post-deployment, we monitor, optimize, and support your wireless network.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Case Studies Section (Keeping as placeholder from template) -->
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
                                    <p class="case-quote">“Their managed IT services reduced our downtime by 60%.”</p>
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
                                    <p class="case-quote">“Optimized our cloud infrastructure for peak performance.”</p>
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
                                    <p class="case-quote">“Scalable solutions that grew with our manufacturing needs.”
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
                <h2 class="fs-2 fw-bold mb-3" style="color: var(--primary-color);">Need Enterprise Wireless Solutions?</h2>
                <div style="width: 50px; height: 3px; background-color: #dee2e6; margin: 0 auto 20px;"></div>
                <p class="fs-6 text-muted mb-4">Ready to upgrade your enterprise wireless network? Get in touch with our
                    experts for a free wireless assessment and discover how a secure, high-performance Wi-Fi infrastructure
                    can transform your business operations.</p>
                <a href="#" class="btn btn-network-cta fw-bold shadow-sm">Request a Free Wireless Assessment</a>
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