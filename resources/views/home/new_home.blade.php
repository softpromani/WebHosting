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
                        <h1 class="fw-bold mb-3 responsive-heading text-black">
                            Enterprise-Grade Cloud & IT Solutions Engineered for Scale and Security
                        </h1>
                        <p class="lead mb-4 responsive-paragraph">
                            Delivering secure, high-performance cloud infrastructure, managed IT services, and advanced
                            cybersecurity solutions to help businesses scale with confidence worldwide.
                        </p>
                        <div
                            class="d-flex flex-column flex-md-row justify-content-center justify-content-md-start align-items-center gap-3">
                            <a href="#" class="btn btn-sm custom-outline-btn2 w-md-auto" data-bs-toggle="modal"
                                data-bs-target="#scheduleModal">Get Free Consultation</a>
                            <a href="{{ url('apply-now') }}" target="_blank"
                                class="btn btn-sm custom-outline-btn w-md-auto">Explore Our Services</a>
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
                        <h3 class="alt-font fw-600 text-dark-gray ls-minus-1px">
                            Smart, Secure & Managed IT Solutions
                            <span class="text-highlight fw-800">
                                <span class="h-8px bottom-10px opacity-6" style="background: var(--primary-color);"></span>
                            </span>
                        </h3>
                        <p class="mb-35px sm-mb-25px">
                            Mounteko Global Solutions delivers enterprise-grade managed IT services, network architecture,
                            cloud and IT infrastructure, and cybersecurity solutions for US businesses. We design, deploy,
                            and manage secure networks, scalable cloud environments, and proactive security systems to
                            ensure high availability, compliance, and data protection across all IT operations.
                        </p>
                        <a href="#" class="btn-shiny-lizard">
                            <span>Check out our services.</span>
                            <div class="container-stars">
                                <div id="star-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs></defs>
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <path class="fil0"
                                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.75 20.93,-210.07 184.09,-378.37 392.05,-407.75 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                                style="fill: var(--primary-color);">
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
        <section id="core-services" class="pt-5 pb-5">
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
                            <div class="service-icon-wrapper">
                                <i class="fas fa-network-wired"></i>
                            </div>
                            <h4>Network Solutions</h4>
                            <ul>
                                <li>LAN / WAN / Wi-Fi</li>
                                <li>SD-WAN</li>
                                <li>Network Design & Optimization</li>
                            </ul>
                            <a href="#" class="service-cta">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Cybersecurity -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="service-card">
                            <div class="service-icon-wrapper">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4>Cybersecurity</h4>
                            <ul>
                                <li>Firewall & Endpoint Security</li>
                                <li>SOC Monitoring</li>
                                <li>VAPT & Compliance</li>
                            </ul>
                            <a href="#" class="service-cta">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Cloud & IT Infrastructure -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="service-card">
                            <div class="service-icon-wrapper">
                                <i class="fas fa-cloud"></i>
                            </div>
                            <h4>Cloud & IT Infrastructure</h4>
                            <ul>
                                <li>Cloud Migration (AWS/Azure)</li>
                                <li>Servers & Storage</li>
                                <li>Virtualization & Backup</li>
                            </ul>
                            <a href="#" class="service-cta">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Managed IT Services -->
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="service-card">
                            <div class="service-icon-wrapper">
                                <i class="fas fa-tools"></i>
                            </div>
                            <h4>Managed IT Services</h4>
                            <ul>
                                <li>24X7 IT Support</li>
                                <li>Remote & On-Site Management</li>
                                <li>AMC & SLA-based Services</li>
                            </ul>
                            <a href="#" class="service-cta">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Industries Section -->
        <section id="industries" class="pt-5 pb-5 bg-light-gray-custom">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="common-section-heading mb-5">Industries</h2>
                    </div>
                    <div class="col-12">
                        <div class="industries-slider swiper">
                            <div class="swiper-wrapper">
                                <!-- Manufacturing -->
                                <div class="swiper-slide">
                                    <div class="industry-card">
                                        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=800"
                                            alt="Manufacturing">
                                        <div class="industry-card-overlay">
                                            <h4>Manufacturing</h4>
                                            <p class="industry-desc">Optimizing production lines with smart IoT & minimal
                                                downtime.</p>
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
                                            <p class="industry-desc">Seamless omnichannel experiences with secure POS
                                                systems.</p>
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
                                            <p class="industry-desc">Connected supply chains for next-gen mobility.</p>
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
                                            <p class="industry-desc">Data-driven insights for faster market response.</p>
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
                                            <p class="industry-desc">HIPAA-compliant data security & telemedicine
                                                infrastructure.</p>
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
                                            <p class="industry-desc">Fraud-proof transactions with zero-trust security.</p>
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
                                            <p class="industry-desc">High-bandwidth framing for 5G & next-gen networks.</p>
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
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="common-section-heading text-center">Why Choose Us</h2>
                        <p class="why-subtitle-small">Need a Powerful, Future-Ready IT Partner for Your Business?</p>
                    </div>
                </div>
                <!-- Top Header Row -->
                <div class="row align-items-center mb-5">
                    <div class="col-lg-12 text-center">
                        <p class="why-desc">
                            Stop worrying about IT failures, security risks, and downtime. Mounteko Global Solutions
                            delivers enterprise-grade managed IT services, secure cloud & IT infrastructure, reliable
                            network solutions, and advanced cybersecurity to keep your business running without
                            interruption. We don’t just manage IT—we protect, optimize, and scale your business technology.
                        </p>
                        <a href="#" class="why-cta">CHOOSE MOUNTEKO TODAY — STAY SECURE, STAY AHEAD</a>
                    </div>
                </div>

                <!-- Bottom Feature Row -->
                <div class="row align-items-center justify-content-center feature-row">
                    <!-- Left Features -->
                    <div class="col-md-3 text-end feature-col">
                        <div class="feature-item mb-5">
                            <span class="feature-text">Security-First Solutions</span>
                        </div>
                        <div class="feature-item mb-5">
                            <span class="feature-text">Scalable Cloud Infrastructure</span>
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
                        <div class="feature-item mb-5">
                            <span class="feature-text">Expert-Level Support</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-text">Proactive Managed IT</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Case Studies Section -->
        <section class="case-studies py-5">
            <div class="container text-center mb-5">
                <h2 class="common-section-heading section-heading mb-3">Featured Case Studies</h2>
                <h3 class="fw-bold mb-3" style="font-size: 1.5rem; color: var(--primary-color);">Real Results. Real Business
                    Transformation.</h3>
                <p class="section-subtitle mb-4">
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

        <!-- Ready to Pursue Opportunity CTA Section -->
        <section class="cta-opportunity p-0">
            <div class="container-fluid">
                <div class="row">
                    <!-- Left Content Area -->
                    <div class="col-lg-6 cta-content-area d-flex flex-column justify-content-center align-items-start">
                        <p class="cta-subheading mb-3">Every great partnership starts with a conversation.</p>
                        <h2 class="cta-heading mb-4">Ready to Secure & Simplify Your IT Operations?</h2>
                        <p class="mb-4">
                            Partner with Mounteko Global Solutions for reliable managed IT services, secure cloud and IT
                            infrastructure, advanced network solutions, and robust cybersecurity services. Our experts help
                            businesses improve performance, strengthen security, and reduce IT complexity with scalable,
                            future-ready solutions.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#" class="btn btn-cta-primary">Talk to an IT Expert</a>
                            <a href="#" class="btn btn-cta-outline">Schedule a Free IT Assessment</a>
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