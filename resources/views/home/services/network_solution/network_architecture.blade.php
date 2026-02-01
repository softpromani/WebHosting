@extends('home.includes.layout')
@section('title', 'Network Solutions | Mounteko Global Solutions')
@section('meta-description', 'Robust and scalable network infrastructure solutions including LAN, WAN, and SD-WAN services.')

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
                <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&q=80&w=1920"
                    class="d-block w-100 img-fluid banner_image" alt="Network Architecture"
                    style="max-height: 60vh; object-fit: cover;">

                <div class="position-absolute top-50 translate-middle px-3 text-white w-100 left_margin"
                    style="max-width: 900px;">
                    <div class="text-center text-md-start mx-auto" style="max-width: 700px;">
                        <h1 class="fw-bold mb-3 responsive-heading text-white fs-1"
                            style="text-shadow: 0 2px 4px rgba(0,0,0,0.6);">
                            Network Architecture Solutions
                        </h1>
                        <p class="lead mb-4 responsive-paragraph text-white"
                            style="text-shadow: 0 1px 2px rgba(0,0,0,0.6); font-weight: 500;">
                            Scalable, secure, and high-performance network infrastructure tailored for modern enterprises.
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
                        <h2 class="section-title fs-2">Empowering Your Business with Robust <span
                                style="color: #00838d;">Network
                                Infrastructure</span></h2>
                    </div>
                    <div class="col-lg-6">
                        <p class="section-desc">
                            In today's digital age, network reliability is not just a convenience—it's the backbone of your
                            business operations.
                            We provide comprehensive network solutions designed to ensure seamless connectivity, enhanced
                            security,
                            and scalable performance for organizations of all sizes.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Services We Offer -->
        <section class="py-5 bg-white">
            <div class="container">
                <div class="text-center mb-5">
                    <h3 class="common-section-heading fs-2">Services We Offer</h3>
                    <div style="width: 60px; height: 3px; background-color: #0d233e; margin: 15px auto;"></div>
                </div>

                <div class="row g-4">
                    <!-- Service 1: LAN Solutions -->
                    <div class="col-lg-4">
                        <div class="network-service-card h-100">
                            <div class="text-center"> <!-- Center Icon and Title only -->
                                <div class="icon-wrapper mb-3 text-primary">
                                    <i class="fas fa-building fa-2x"></i>
                                </div>
                                <h4 class="mb-3 fw-bold" style="color: #00838d;">LAN Solutions</h4>
                            </div>
                            <div class="service-list mt-3">
                                <div class="d-flex mb-2 align-items-start">
                                    <i class="fas fa-check text-primary me-2 mt-1 flex-shrink-0"></i>
                                    <span>Office Network Design</span>
                                </div>
                                <div class="d-flex mb-2 align-items-start">
                                    <i class="fas fa-check text-primary me-2 mt-1 flex-shrink-0"></i>
                                    <span>Wired & Wireless Setup</span>
                                </div>
                                <div class="d-flex mb-2 align-items-start">
                                    <i class="fas fa-check text-primary me-2 mt-1 flex-shrink-0"></i>
                                    <span>Secure Internal Connectivity</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2: WAN Solutions -->
                    <div class="col-lg-4">
                        <div class="network-service-card h-100">
                            <div class="text-center">
                                <div class="icon-wrapper mb-3 text-primary">
                                    <i class="fas fa-globe fa-2x"></i>
                                </div>
                                <h4 class="mb-3 fw-bold" style="color: #00838d;">WAN Solutions</h4>
                            </div>
                            <div class="service-list mt-3">
                                <div class="d-flex mb-2 align-items-start">
                                    <i class="fas fa-check text-primary me-2 mt-1 flex-shrink-0"></i>
                                    <span>Multi-Location Network</span>
                                </div>
                                <div class="d-flex mb-2 align-items-start">
                                    <i class="fas fa-check text-primary me-2 mt-1 flex-shrink-0"></i>
                                    <span>VPN & Leased Lines</span>
                                </div>
                                <div class="d-flex mb-2 align-items-start">
                                    <i class="fas fa-check text-primary me-2 mt-1 flex-shrink-0"></i>
                                    <span>Stable Inter-Branch Communication</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service 3: SD-WAN Solutions -->
                    <div class="col-lg-4">
                        <div class="network-service-card h-100">
                            <div class="text-center">
                                <div class="icon-wrapper mb-3 text-primary">
                                    <i class="fas fa-cloud fa-2x"></i>
                                </div>
                                <h4 class="mb-3 fw-bold" style="color: #00838d;">SD-WAN Solutions</h4>
                            </div>
                            <div class="service-list mt-3">
                                <div class="d-flex mb-2 align-items-start">
                                    <i class="fas fa-check text-primary me-2 mt-1 flex-shrink-0"></i>
                                    <span>Centralized Management</span>
                                </div>
                                <div class="d-flex mb-2 align-items-start">
                                    <i class="fas fa-check text-primary me-2 mt-1 flex-shrink-0"></i>
                                    <span>Cloud-Ready Architecture</span>
                                </div>
                                <div class="d-flex mb-2 align-items-start">
                                    <i class="fas fa-check text-primary me-2 mt-1 flex-shrink-0"></i>
                                    <span>Performance Optimization</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section 3: Mission / Vision Slider -->
        <section class="background-position-center-top sm-background-image-none pt-4"
            style="background-image: url('{{ asset('home/assets/homepage/images/vertical-line-bg.svg') }}'); padding-bottom: 80px;">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-7 text-center">
                        {{-- <span class="alt-font text-uppercase fw-600 d-inline-block ls-1px">Why Choose Us</span> --}}
                        <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px fs-2">Why Choose our <span
                                class="text-highlight fw-800">network solution<span
                                    class="bg-gradient-emerald-blue-emerald-green h-8px bottom-10px opacity-6 separator-animation"></span></span>
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
                                    <div
                                        class="alt-font text-uppercase text-base-color fw-600 mb-15px d-inline-block ls-1px">
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
                                    <div
                                        class="alt-font text-uppercase text-base-color fw-600 mb-15px d-inline-block ls-1px">
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
                                    <div
                                        class="alt-font text-uppercase text-base-color fw-600 mb-15px d-inline-block ls-1px">
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
                    <!-- Images Section with Animations Removed -->
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

        <!-- Section 4: How We Work / Process -->
        <section class="py-5" style="background-color: #fff;">
            <div class="container">
                {{-- <div class="row mb-4">
                    <div class="col-12">
                        <h4 class="alt-font text-dark-gray fw-700 ls-minus-1px mb-0"> How we work-</h4>
                    </div>
                </div> --}}

                <div class="row justify-content-center">
                    <div class="col-12 text-center mb-4">
                        <span class="alt-font text-uppercase fw-600 d-inline-block ls-1px text-base-color fs-5">Our
                            Process</span>
                        <hr class="w-50px mx-auto bg-base-color opacity-100 mt-2 mb-0" style="height: 2px;">
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
                            <h5>Understand Your<br>Requirements</h5>
                            <p>We analyze your needs to build the perfect foundation.</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 d-flex">
                        <div class="process-card w-100">
                            <div class="process-step-badge">2</div>
                            <div class="process-icon-box">
                                <i class="fas fa-pencil-ruler"></i>
                            </div>
                            <h5>Design the Right<br>Network</h5>
                            <p>Custom tailored architecture for maximum efficiency.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 d-flex">
                        <div class="process-card w-100">
                            <div class="process-step-badge">3</div>
                            <div class="process-icon-box">
                                <i class="fas fa-cogs"></i>
                            </div>
                            <h5>Implement the<br>Solution</h5>
                            <p>Seamless deployment with zero business disruption.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 d-flex">
                        <div class="process-card w-100">
                            <div class="process-step-badge">4</div>
                            <div class="process-icon-box">
                                <i class="fas fa-headset"></i>
                            </div>
                            <h5>Monitor &<br>Support</h5>
                            <p>24/7 active monitoring to ensure stability.</p>
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
                <p class="mb-4">Letâ€™s work together to digitally transform your business and build the solutions of
                    tomorrow.</p>
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
                                    <p class="case-quote">â€œTheir managed IT services reduced our downtime by 60%.â€</p>
                                    <div class="case-footer">
                                        <h5 class="company-name">Retail Solutions Inc.</h5>
                                        <span class="industry-name">Retail Industry</span>
                                    </div>
                                </div>
                                <div class="go-corner" href="#">
                                    <div class="go-arrow">
                                        â†’
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
                                    <p class="case-quote">â€œOptimized our cloud infrastructure for peak performance.â€</p>
                                    <div class="case-footer">
                                        <h5 class="company-name">AutoDrive Tech</h5>
                                        <span class="industry-name">Automotive</span>
                                    </div>
                                </div>
                                <div class="go-corner" href="#">
                                    <div class="go-arrow">
                                        â†’
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
                                    <p class="case-quote">â€œScalable solutions that grew with our manufacturing needs.â€
                                    </p>
                                    <div class="case-footer">
                                        <h5 class="company-name">Stefanini Group</h5>
                                        <span class="industry-name">Manufacturing</span>
                                    </div>
                                </div>
                                <div class="go-corner" href="#">
                                    <div class="go-arrow">
                                        â†’
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="swiper-slide">
                            <div class="case-card"
                                style="background-image: url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80&w=600');">
                                <div class="case-card-content">
                                    <span class="case-tag">Banking</span>
                                    <p class="case-quote">â€œEnhanced security compliance for our financial data.â€</p>
                                    <div class="case-footer">
                                        <h5 class="company-name">FinSecure Bank</h5>
                                        <span class="industry-name">Banking & Finance</span>
                                    </div>
                                </div>
                                <div class="go-corner" href="#">
                                    <div class="go-arrow">
                                        â†’
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="swiper-slide">
                            <div class="case-card"
                                style="background-image: url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&q=80&w=600');">
                                <div class="case-card-content">
                                    <span class="case-tag">Tech</span>
                                    <p class="case-quote">â€œSeamless migration with zero data loss.â€</p>
                                    <div class="case-footer">
                                        <h5 class="company-name">Nordzucker</h5>
                                        <span class="industry-name">Technology</span>
                                    </div>
                                </div>
                                <div class="go-corner" href="#">
                                    <div class="go-arrow">
                                        â†’
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
                <h2 class="fs-2 fw-bold text-primary mb-3">Need a Reliable Network?</h2>
                <div style="width: 50px; height: 3px; background-color: #dee2e6; margin: 0 auto 20px;"></div>
                <p class="fs-6 text-muted mb-4">Let us help you build a secure and efficient network for your business.</p>
                <a href="#" class="btn btn-network-cta fw-bold shadow-sm">Request a Free
                    Assessment</a>
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