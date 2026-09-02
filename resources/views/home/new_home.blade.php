@extends('home.includes.layout')
{{-- @section('title', 'Secure. Scalable. Smart IT Solutions | Mounteko') --}}
@section('title', 'Managed IT, Cybersecurity & Cloud Services for US Businesses | Mounteko')
@section('meta-description',
    'Managed IT services, cybersecurity, cloud migration & AI automation for growing US
    businesses. 24/7 support, real results. Get a free consultation.')
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
                            Managed IT Services, Cybersecurity & Cloud Solutions for Growing US Businesses
                        </h1>
                        <p class="lead mb-4 responsive-paragraph">
                            From network setup and 24/7 monitoring to cybersecurity, cloud migration, and AI automation —
                            Mounteko keeps growing US businesses secure, connected, and online.
                        </p>
                        <div
                            class="d-flex flex-column flex-md-row justify-content-center justify-content-md-start align-items-center gap-3">
                            <a href="{{ route('contactUs') }}" class="btn btn-sm custom-outline-btn2 w-md-auto">Get Free
                                Consultation</a>
                            <a href="#core-services" class="btn btn-sm custom-outline-btn w-md-auto">Explore Our
                                Services</a>
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
                            One Accountable Partner for Your Entire IT Stack
                            <span class="text-highlight fw-800">
                                <span class="h-8px bottom-10px opacity-6" style="background: var(--primary-color);"></span>
                            </span>
                        </h3>
                        <p class="mb-35px sm-mb-25px">
                            Mounteko Global Solutions is a managed IT services provider built for businesses that can't
                            afford downtime, a breach, or a slow-moving vendor. We design and manage the network your team
                            relies on, the cybersecurity that keeps it safe, the cloud infrastructure that lets it scale,
                            and the AI automation that takes repetitive work off your team's plate — all from one
                            accountable partner instead of five different vendors who don't talk to each other. If something
                            breaks at 2 a.m., you call one number and a real engineer picks up.
                        </p>
                        <!-- removed - <a href="#" class="btn-shiny-lizard"> -->
                        <!-- added -->
                        <a href="#core-services" class="btn-shiny-lizard">
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
                    <!-- Managed IT Services -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card">
                            <div class="service-icon-wrapper">
                                <i class="fas fa-tools"></i>
                            </div>
                            <h4>Managed IT Services</h4>
                            <p class="service-card-desc">Eliminate costly downtime and sluggish tech support with 24/7
                                proactive monitoring, rapid helpdesk response, and dedicated engineering.</p>
                            <ul>
                                <li>24/7 Support & Helpdesk</li>
                                <li>Proactive System Monitoring & Maintenance</li>
                                <li>Patch Management & Procurement</li>
                            </ul>
                            <a href="{{ route('services.managed_it') }}" class="service-cta">Learn More <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Cybersecurity -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card">
                            <div class="service-icon-wrapper">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h4>Cybersecurity</h4>
                            <p class="service-card-desc">Stop breaches before they cost you a client with multi-layered
                                firewall protection, endpoint security, and proactive SOC monitoring.</p>
                            <ul>
                                <li>Firewall Setup & Endpoint Protection</li>
                                <li>24/7 SOC Monitoring & Threat Detection</li>
                                <li>Security Audits, VAPT & Compliance</li>
                            </ul>
                            <a href="{{ route('services.security-audits') }}" class="service-cta">Learn More <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Cloud & IT Infrastructure -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card">
                            <div class="service-icon-wrapper">
                                <i class="fas fa-cloud"></i>
                            </div>
                            <h4>Cloud & IT Infrastructure</h4>
                            <p class="service-card-desc">End server sprawl and costly outages by migrating workloads to
                                secure, high-availability AWS, Azure, and hybrid cloud architectures.</p>
                            <ul>
                                <li>Cloud Architecture & AWS/Azure Migration</li>
                                <li>Servers, Storage & Virtualization</li>
                                <li>Automated Backup & Disaster Recovery</li>
                            </ul>
                            <a href="{{ route('services.cloud_architecture') }}" class="service-cta">Learn More <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Network Solutions -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card">
                            <div class="service-icon-wrapper">
                                <i class="fas fa-network-wired"></i>
                            </div>
                            <h4>Network Solutions</h4>
                            <p class="service-card-desc">Prevent network outages and latency bottlenecks with
                                enterprise-grade LAN/WAN architecture, SD-WAN, and high-speed Wi-Fi.</p>
                            <ul>
                                <li>Network Architecture Design & Optimization</li>
                                <li>Enterprise Wireless & SD-WAN</li>
                                <li>Secure VPN & Remote Access</li>
                            </ul>
                            <a href="{{ route('services.network-architecture') }}" class="service-cta">Learn More <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- AI Integration & Automation -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card">
                            <div class="service-icon-wrapper">
                                <i class="fas fa-robot"></i>
                            </div>
                            <h4>AI Integration & Automation</h4>
                            <p class="service-card-desc">Cut manual work and reduce operational bottlenecks with custom AI
                                workflows, sales bots, and seamless data automations.</p>
                            <ul>
                                <li>AI Workflow & Process Automation</li>
                                <li>Sales & Support Chatbot Systems</li>
                                <li>System Integration & Business Analytics</li>
                            </ul>
                            <a href="{{ route('services.ai_integration_automation') }}" class="service-cta">Learn More <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Software & Web Development -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card">
                            <div class="service-icon-wrapper">
                                <i class="fas fa-code"></i>
                            </div>
                            <h4>Software & Web Development</h4>
                            <p class="service-card-desc">Replace clunky off-the-shelf tools with bespoke web applications,
                                robust APIs, and custom software tailored to your workflow.</p>
                            <ul>
                                <li>Custom Web Applications & Portals</li>
                                <li>API Development & System Integration</li>
                                <li>E-Commerce & Ongoing Maintenance</li>
                            </ul>
                            <a href="{{ route('services.custom_software') }}" class="service-cta">Learn More <i
                                    class="fas fa-arrow-right"></i></a>
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
                        <h2 class="common-section-heading mb-5">Industries We Serve</h2>
                    </div>
                    <div class="col-12">
                        <div class="industries-slider swiper">
                            <div class="swiper-wrapper">
                                <!-- Healthcare -->
                                <div class="swiper-slide">
                                    <div class="industry-card">
                                        <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&q=80&w=800"
                                            alt="Healthcare">
                                        <div class="industry-card-overlay">
                                            <h4>Healthcare</h4>
                                            <p class="industry-desc">HIPAA-compliant infrastructure and 24/7 support for
                                                practices and clinics that can't afford a system outage.</p>
                                            <a href="{{ route('contactUs') }}" class="btn btn-see-more">Explore
                                                Solutions</a>
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
                                            <p class="industry-desc">SOC 2-compliant cloud architectures, encrypted
                                                communications, and zero-trust security for financial operations.</p>
                                            <a href="{{ route('contactUs') }}" class="btn btn-see-more">Explore
                                                Solutions</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Manufacturing -->
                                <div class="swiper-slide">
                                    <div class="industry-card">
                                        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=800"
                                            alt="Manufacturing">
                                        <div class="industry-card-overlay">
                                            <h4>Manufacturing</h4>
                                            <p class="industry-desc">Zero-downtime networks, IoT connectivity, and
                                                automated telemetry to keep production lines running 24/7.</p>
                                            <a href="{{ route('contactUs') }}" class="btn btn-see-more">Explore
                                                Solutions</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Retail & E-Commerce -->
                                <div class="swiper-slide">
                                    <div class="industry-card">
                                        <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&q=80&w=800"
                                            alt="Retail & E-Commerce">
                                        <div class="industry-card-overlay">
                                            <h4>Retail & E-Commerce</h4>
                                            <p class="industry-desc">PCI-compliant POS integration and high-traffic cloud
                                                scalability to handle peak transactions without slowdowns.</p>
                                            <a href="{{ route('contactUs') }}" class="btn btn-see-more">Explore
                                                Solutions</a>
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
                                            <p class="industry-desc">Secure multi-site connectivity, telematics backends,
                                                and low-latency cloud infrastructure for mobility operations.</p>
                                            <a href="{{ route('contactUs') }}" class="btn btn-see-more">Explore
                                                Solutions</a>
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
                                            <p class="industry-desc">Real-time supply chain data pipelines and automated
                                                order processing systems for faster market responsiveness.</p>
                                            <a href="{{ route('contactUs') }}" class="btn btn-see-more">Explore
                                                Solutions</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Telecom & Technology -->
                                <div class="swiper-slide">
                                    <div class="industry-card">
                                        <img src="https://images.unsplash.com/photo-1523961131990-5ea7c61b2107?auto=format&fit=crop&q=80&w=800"
                                            alt="Technology & Telecom">
                                        <div class="industry-card-overlay">
                                            <h4>Technology & Telecom</h4>
                                            <p class="industry-desc">High-throughput network framing, scalable cloud
                                                platforms, and 24/7 engineering support for high-demand services.</p>
                                            <a href="{{ route('contactUs') }}" class="btn btn-see-more">Explore
                                                Solutions</a>
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
                        <h2 class="common-section-heading text-center">Why Mounteko</h2>
                        <p class="why-subtitle-small">Enterprise Reliability, Engineered for Fast-Growing US Businesses</p>
                    </div>
                </div>
                <!-- Top Header Row -->
                <div class="row align-items-center mb-5">
                    <div class="col-lg-12 text-center">
                        <p class="why-desc">
                            Stop worrying about IT outages, cyber threats, and sluggish vendor response times. Mounteko
                            Global Solutions
                            provides unified managed IT, cybersecurity, cloud architecture, and automation under strict
                            SLAs. We give your
                            business dedicated senior engineers, guaranteed rapid response, and transparent single-source
                            accountability.
                        </p>
                        <a href="{{ route('contactUs') }}" class="why-cta">GET A FREE IT ASSESSMENT — SPEAK WITH AN
                            ENGINEER</a>
                    </div>
                </div>

                <!-- Bottom Feature Row -->
                <div class="row align-items-center justify-content-center feature-row">
                    <!-- Left Features -->
                    <div class="col-md-3 text-end feature-col">
                        <div class="feature-item mb-5">
                            <span class="feature-text">15-Min Critical Response SLA</span>
                        </div>
                        <div class="feature-item mb-5">
                            <span class="feature-text">24*7 US Support & Monitoring</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-text">99.99% Infrastructure Uptime</span>
                        </div>
                    </div>

                    <!-- Central Image -->
                    <div class="col-md-4 text-center">
                        <div class="central-image-container">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=800"
                                alt="Mounteko Engineering Team" class="central-img">
                        </div>
                    </div>

                    <!-- Right Features -->
                    <div class="col-md-3 text-start feature-col">
                        <div class="feature-item mb-5">
                            <span class="feature-text">Scalable Cloud Infrastructure</span>
                        </div>
                        <div class="feature-item mb-5">
                            <span class="feature-text">One Partner. Full Accountability</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-text">NIST & HIPAA Security Standards</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Case Studies Section -->
        <section class="case-studies py-5">
            <div class="container text-center mb-5">
                <h2 class="common-section-heading section-heading mb-3">Featured Case Studies</h2>
                <h3 class="fw-bold mb-3" style="font-size: 1.5rem; color: var(--primary-color);">Measurable Outcomes. Real
                    Business Impact.</h3>
                <p class="section-subtitle mb-4">
                    See how growing businesses achieve higher uptime, hardened cybersecurity, and streamlined operations
                    with Mounteko's managed IT, cloud, and automation solutions.
                </p>
                <p class="mb-4">Let's work together to digitally transform your business and build the solutions of
                    tomorrow.</p>
                <a href="{{ route('contactUs') }}" class="btn btn-case-study"><span>Talk to an expert</span> <i
                        class="fas fa-chevron-right ms-2"></i></a>
            </div>

            <div class="container px-4 px-lg-5">
                <div class="case-study-slider swiper">
                    <div class="swiper-wrapper">
                        <!-- Card 1 -->
                        <div class="swiper-slide">
                            <div class="case-card"
                                style="background-image: url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&q=80&w=600');">
                                <div class="case-card-content">
                                    <span class="case-tag">Logistics & Supply Chain</span>
                                    <p class="case-quote">"A 40-employee logistics company cut ticket resolution time by
                                        55% and eliminated dispatch server downtime with 24/7 managed infrastructure."</p>
                                    <div class="case-footer">
                                        <h5 class="company-name">Midwest Logistics Carrier (40 Users)</h5>
                                        <span class="industry-name">Managed IT & Cloud Infrastructure</span>
                                    </div>
                                </div>
                                <a class="go-corner" href="{{ route('contactUs') }}">
                                    <div class="go-arrow">
                                        →
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="swiper-slide">
                            <div class="case-card"
                                style="background-image: url('https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&q=80&w=600');">
                                <div class="case-card-content">
                                    <span class="case-tag">Healthcare Practice</span>
                                    <p class="case-quote">"A multi-location medical group achieved 100% HIPAA compliance
                                        and eliminated daily VPN drops across 4 clinic locations."</p>
                                    <div class="case-footer">
                                        <h5 class="company-name">Regional Healthcare Group (65 Staff)</h5>
                                        <span class="industry-name">Cybersecurity & Remote Access</span>
                                    </div>
                                </div>
                                <a class="go-corner" href="{{ route('contactUs') }}">
                                    <div class="go-arrow">
                                        →
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="swiper-slide">
                            <div class="case-card"
                                style="background-image: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=600');">
                                <div class="case-card-content">
                                    <span class="case-tag">Financial Services</span>
                                    <p class="case-quote">"A boutique investment firm migrated 100% of legacy servers to
                                        Azure cloud with zero data loss, zero trading disruption, and SOC 2 alignment."</p>
                                    <div class="case-footer">
                                        <h5 class="company-name">Wealth Management Firm ($120M AUM)</h5>
                                        <span class="industry-name">Cloud Migration & Compliance</span>
                                    </div>
                                </div>
                                <a class="go-corner" href="{{ route('contactUs') }}">
                                    <div class="go-arrow">
                                        →
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="swiper-slide">
                            <div class="case-card"
                                style="background-image: url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=600');">
                                <div class="case-card-content">
                                    <span class="case-tag">Manufacturing</span>
                                    <p class="case-quote">"A precision manufacturer reduced factory floor network packet
                                        drops by 98% and secured industrial IoT endpoints against ransomware."</p>
                                    <div class="case-footer">
                                        <h5 class="company-name">Precision Manufacturing Plant (110 Employees)</h5>
                                        <span class="industry-name">Network Optimization & Endpoint Security</span>
                                    </div>
                                </div>
                                <a class="go-corner" href="{{ route('contactUs') }}">
                                    <div class="go-arrow">
                                        →
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="swiper-slide">
                            <div class="case-card"
                                style="background-image: url('https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&q=80&w=600');">
                                <div class="case-card-content">
                                    <span class="case-tag">E-Commerce & Retail</span>
                                    <p class="case-quote">"A fast-growing D2C retailer scaled through 300% holiday traffic
                                        spikes by automating inventory syncing with AI pipelines."</p>
                                    <div class="case-footer">
                                        <h5 class="company-name">National D2C Retailer (75+ Team)</h5>
                                        <span class="industry-name">AI Automation & Cloud Hosting</span>
                                    </div>
                                </div>
                                <a class="go-corner" href="{{ route('contactUs') }}">
                                    <div class="go-arrow">
                                        →
                                    </div>
                                </a>
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
                            <!-- removed
                                            <a href="#" class="btn btn-cta-primary">Talk to an IT Expert</a>
                                            <a href="#" class="btn btn-cta-outline">Schedule a Free IT Assessment</a>
                                            -->
                            <!-- added -->
                            <a href="{{ route('contactUs') }}" class="btn btn-cta-primary">Talk to an IT Expert</a>
                            <a href="{{ route('contactUs') }}" class="btn btn-cta-outline">Schedule a Free IT
                                Assessment</a>
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
        document.addEventListener('DOMContentLoaded', function() {
            var industrySwiper = new Swiper('.industries-slider', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2
                    },
                    1024: {
                        slidesPerView: 3
                    },
                    1200: {
                        slidesPerView: 4
                    },
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
                    640: {
                        slidesPerView: 2
                    },
                    1024: {
                        slidesPerView: 3
                    },
                }
            });

            // Link sidebar arrows to industry swiper
            document.querySelector('.fa-chevron-left').addEventListener('click', function() {
                industrySwiper.slidePrev();
            });
            document.querySelector('.fa-chevron-right').addEventListener('click', function() {
                industrySwiper.slideNext();
            });
        });
    </script>
@endsection
