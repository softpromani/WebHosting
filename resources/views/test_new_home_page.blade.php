@extends('home.includes.layout')
@section('title', 'Secure. Scalable. Smart IT Solutions | Mounteko')
@section('meta-description', 'End-to-end Network, Cybersecurity, Cloud & Managed IT Services to keep your business running 24x7.')
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
    <!-- Custom Slider Section -->
    <div id="carouselExampleCaptions" class="carousel slide carousel-dark" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active position-relative">
                <img src="{{ asset('home/banner-slider/homeHeadSlider.webp') }}"
                    class="d-block w-100 img-fluid banner_image" alt="Cloud Hosting Banner"
                    style="max-height: 82vh; object-fit: cover;">

                <div class="position-absolute top-50 translate-middle px-3 text-white w-100 left_margin"
                    style="max-width: 900px;">
                    <div class="text-center text-md-start mx-auto" style="max-width: 700px;">
                        <h3 class="fw-bold mb-3 responsive-heading text-black">
                            Secure. Scalable. Smart IT Solutions for Modern Businesses
                        </h3>
                        <p class="lead mb-4 responsive-paragraph">
                            End-to-end Network, Cybersecurity, Cloud & Managed IT Services to keep your business running
                            24x7.
                        </p>
                        <div
                            class="d-flex flex-column flex-md-row justify-content-center justify-content-md-start align-items-center gap-3">
                            <a href="#" class="btn btn-sm custom-outline-btn2 w-md-auto" data-bs-toggle="modal"
                                data-bs-target="#scheduleModal">Book A Consultation</a>
                            <a href="{{ url('apply-now') }}" target="_blank"
                                class="btn btn-sm custom-outline-btn w-md-auto">Start Free Trial</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main id="main">
        <!-- What We Do section (from About Us) -->
        <section id="down-section"
            class="background-position-center-top sm-background-image-none pt-5 pb-5 bg-light-gray-custom">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <h2 class="what-we-do-heading common-section-heading">What We Do</h2>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-10 text-center text-lg-start">
                        <span class="alt-font text-uppercase fw-600 mb-15px d-inline-block ls-1px">ABOUT MOUNTEKO CLOUD
                            HOSTING</span>
                        <h3 class="alt-font fw-600 text-dark-gray ls-minus-1px">
                            Powering the Future with Cloud Solutions
                            <span class="text-highlight fw-800">
                                <span class="bg-gradient-emerald-blue-emerald-green h-8px bottom-10px opacity-6"></span>
                            </span>
                        </h3>
                        <p class="mb-35px sm-mb-25px">
                            We are a trusted provider of cloud solutions, dedicated to making technology accessible and
                            secure. Our mission is to empower businesses with efficient, scalable, and adaptable tools that
                            fit today’s dynamic work environment.
                        </p>
                        <a href="#" class="btn-shiny-lizard">
                            <span>CHECK OUT OUR SERVICES</span>
                            <div class="container-stars">
                                <div id="star-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path class="fil0"
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.75 20.93,-210.07 184.09,-378.37 392.05,-407.75 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <div id="star-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path class="fil0"
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.75 20.93,-210.07 184.09,-378.37 392.05,-407.75 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <div id="star-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path class="fil0"
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.75 20.93,-210.07 184.09,-378.37 392.05,-407.75 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <div id="star-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path class="fil0"
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.75 20.93,-210.07 184.09,-378.37 392.05,-407.75 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <div id="star-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path class="fil0"
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.75 20.93,-210.07 184.09,-378.37 392.05,-407.75 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                                <div id="star-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path class="fil0"
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.75 20.93,-210.07 184.09,-378.37 392.05,-407.75 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-10 position-relative">
                        <img class="w-100 border-radius-5px"
                            src="{{ asset('home/assets/homepage/images/About us-About Mounteko Cloud Hosting.webp') }}"
                            alt="About Mounteko">
                    </div>
                </div>
            </div>
        </section>

        <!-- Core Services Section -->
        <section id="core-services" class="pt-5 pb-5 bg-white">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="common-section-heading text-center">Core Services</h2>
                    </div>
                </div>
                <div class="row">
                    <!-- Network Solutions -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="service-card">
                            <div class="service-card-content">
                                <i class="fas fa-network-wired"></i>
                                <h4>Network Solutions</h4>
                                <ul>
                                    <li>LAN / WAN / Wi-Fi</li>
                                    <li>SD-WAN</li>
                                    <li>Network Design & Optimization</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Cybersecurity -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="service-card">
                            <div class="service-card-content">
                                <i class="fas fa-shield-alt"></i>
                                <h4>Cybersecurity</h4>
                                <ul>
                                    <li>Firewall & Endpoint Security</li>
                                    <li>SOC Monitoring</li>
                                    <li>VAPT & Compliance</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Cloud & IT Infrastructure -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="service-card">
                            <div class="service-card-content">
                                <i class="fas fa-cloud"></i>
                                <h4>Cloud & IT Infrastructure</h4>
                                <ul>
                                    <li>Cloud Migration (AWS/Azure/GCP)</li>
                                    <li>Servers & Storage</li>
                                    <li>Virtualization & Backup</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Managed IT Services -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="service-card">
                            <div class="service-card-content">
                                <i class="fas fa-tools"></i>
                                <h4>Managed IT Services</h4>
                                <ul>
                                    <li>24×7 IT Support</li>
                                    <li>Remote & On-Site Management</li>
                                    <li>AMC & SLA-based Services</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Industries Section -->
        <section id="industries" class="pt-5 pb-5 bg-light-gray-custom">
            <div class="container">
                <div class="row align-items-start mb-5">
                    <div class="col-lg-3 col-md-12">
                        <div class="industries-sidebar">
                            <h2 class="common-section-heading">Industries</h2>
                            <div class="industry-nav-arrows">
                                <i class="fas fa-chevron-left"></i>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <ul class="industry-list">
                                <li class="active">Manufacturing</li>
                                <li>Retail</li>
                                <li>Automotive</li>
                                <li>Consumer Goods</li>
                                <li>Healthcare & Life Sciences</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="industry-pills mb-5">
                            <div class="industry-pill active">Retail</div>
                            <div class="industry-pill">Automotive</div>
                            <div class="industry-pill">Consumer Goods</div>
                            <div class="industry-pill">Health and Life Science</div>
                            <div class="industry-pill">Digital Banking And Finance</div>
                            <div class="industry-pill">Natural Resources</div>
                            <div class="industry-pill">Public & Social Sector</div>
                            <div class="industry-pill">Telecom</div>
                        </div>

                        <div class="industries-slider swiper">
                            <div class="swiper-wrapper">
                                <!-- Manufacturing -->
                                <div class="swiper-slide">
                                    <div class="industry-card">
                                        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=800"
                                            alt="Manufacturing">
                                        <div class="industry-card-overlay">
                                            <h4>Manufacturing</h4>
                                            <a href="#" class="btn btn-see-more">See More</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Retail -->
                                <div class="swiper-slide">
                                    <div class="industry-card">
                                        <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&q=80&w=800"
                                            alt="Retail">
                                        <div class="industry-card-overlay">
                                            <h4>Retail</h4>
                                            <a href="#" class="btn btn-see-more">See More</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Automotive -->
                                <div class="swiper-slide">
                                    <div class="industry-card">
                                        <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?auto=format&fit=crop&q=80&w=800"
                                            alt="Automotive">
                                        <div class="industry-card-overlay">
                                            <h4>Automotive</h4>
                                            <a href="#" class="btn btn-see-more">See More</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Consumer Goods -->
                                <div class="swiper-slide">
                                    <div class="industry-card">
                                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&q=80&w=800"
                                            alt="Consumer Goods">
                                        <div class="industry-card-overlay">
                                            <h4>Consumer Goods</h4>
                                            <a href="#" class="btn btn-see-more">See More</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Healthcare -->
                                <div class="swiper-slide">
                                    <div class="industry-card">
                                        <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&q=80&w=800"
                                            alt="Healthcare">
                                        <div class="industry-card-overlay">
                                            <h4>Healthcare</h4>
                                            <a href="#" class="btn btn-see-more">See More</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Banking & Finance -->
                                <div class="swiper-slide">
                                    <div class="industry-card">
                                        <img src="https://images.unsplash.com/photo-1501167786227-4cba60f6d58f?auto=format&fit=crop&q=80&w=800"
                                            alt="Banking & Finance">
                                        <div class="industry-card-overlay">
                                            <h4>Banking & Finance</h4>
                                            <a href="#" class="btn btn-see-more">See More</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Telecom -->
                                <div class="swiper-slide">
                                    <div class="industry-card">
                                        <img src="https://images.unsplash.com/photo-1523961131990-5ea7c61b2107?auto=format&fit=crop&q=80&w=800"
                                            alt="Telecom">
                                        <div class="industry-card-overlay">
                                            <h4>Telecom</h4>
                                            <a href="#" class="btn btn-see-more">See More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="why-choose-us py-5">
            <div class="container">
                <!-- Top Header Row -->
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <h2 class="mb-3 common-section-heading">Why Choose Us</h2>
                        <p class="why-subtitle-small">Looking for Future-Driven Cloud Hosting for QuickBooks?</p>
                    </div>
                    <div class="col-lg-6">
                        <p class="why-desc">
                            With years of industrial experience and technical expertise, Mounteko can be your one-stop
                            destination for all your QuickBooks cloud hosting needs. Feel free to discuss your business
                            requirements with our professionals.
                        </p>
                        <a href="#" class="why-cta">CHOOSE US TODAY FOR A BETTER TOMORROW</a>
                    </div>
                </div>

                <!-- Bottom Feature Row -->
                <div class="row align-items-center justify-content-center feature-row">
                    <!-- Left Features -->
                    <div class="col-md-3 text-end feature-col">
                        <div class="feature-item mb-5">
                            <span class="feature-text">Expert-Level Support</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-text">Rock-Solid Uptime</span>
                        </div>
                    </div>

                    <!-- Central Image -->
                    <div class="col-md-4 text-center">
                        <div class="central-image-container">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=800"
                                alt="Success Team" class="central-img">
                        </div>
                    </div>

                    <!-- Right Features -->
                    <div class="col-md-3 text-start feature-col">
                        <div class="feature-item mb-5">
                            <span class="feature-text">Client Efficiency Boost</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-text">Custom-Built Solutions</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Case Studies Section -->
        <section class="case-studies py-5">
            <div class="container text-center mb-5">
                <h2 class="common-section-heading section-heading mb-3">Featured Case Studies</h2>
                <p class="section-subtitle mb-4">Let's work together to digitally transform your business and build the
                    solutions of tomorrow.</p>
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
                                    <p class="case-quote">“Scalable solutions that grew with our manufacturing needs.”</p>
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

                        <!-- Card 4 -->
                        <div class="swiper-slide">
                            <div class="case-card"
                                style="background-image: url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80&w=600');">
                                <div class="case-card-content">
                                    <span class="case-tag">Banking</span>
                                    <p class="case-quote">“Enhanced security compliance for our financial data.”</p>
                                    <div class="case-footer">
                                        <h5 class="company-name">FinSecure Bank</h5>
                                        <span class="industry-name">Banking & Finance</span>
                                    </div>
                                </div>
                                <div class="go-corner" href="#">
                                    <div class="go-arrow">
                                        →
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
                                    <p class="case-quote">“Seamless migration with zero data loss.”</p>
                                    <div class="case-footer">
                                        <h5 class="company-name">Nordzucker</h5>
                                        <span class="industry-name">Technology</span>
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

        <!-- Ready to Pursue Opportunity CTA Section -->
        <section class="cta-opportunity p-0">
            <div class="container-fluid">
                <div class="row">
                    <!-- Left Content Area -->
                    <div class="col-lg-6 cta-content-area d-flex flex-column justify-content-center align-items-start">
                        <p class="cta-subheading mb-3">Every great partnership starts with a conversation.</p>
                        <h2 class="cta-heading mb-4">Ready to Secure & Simplify Your IT?</h2>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#" class="btn btn-cta-primary">Talk to an IT Expert</a>
                            <a href="#" class="btn btn-cta-outline">Schedule Free IT Assessment</a>
                        </div>
                    </div>
                    <!-- Right Image Area -->
                    <div class="col-lg-6 cta-image-area"
                        style="background-image: url('https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&q=80&w=1000');">
                    </div>
                </div>
            </div>
        </section>


    </main>


@endsection
@section('script-area')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var industrySwiper = new Swiper('.industries-slider', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    640: { slidesPerView: 2 },
                    1024: { slidesPerView: 3 },
                    1200: { slidesPerView: 4 },
                }
            });

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
                    640: { slidesPerView: 2 },
                    1024: { slidesPerView: 3 },
                }
            });

            // Link sidebar arrows to industry swiper
            document.querySelector('.fa-chevron-left').addEventListener('click', function () {
                industrySwiper.slidePrev();
            });
            document.querySelector('.fa-chevron-right').addEventListener('click', function () {
                industrySwiper.slideNext();
            });
        });
    </script>
@endsection