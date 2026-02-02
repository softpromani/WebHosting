@extends('home.includes.layout')
@section('title', 'About Us | Mounteko Global Solutions')
@section('meta-description', 'Learn about Mounteko Global Solutions - our mission, vision, and the founder\'s message.')

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
    <!-- Breadcrumbs Section from Old Page -->
    <section class="breadcrumbs">
        @php
            $baseColor = settingValue('primary') ?? '#65E82E';
            $lightColor = adjustBrightness($baseColor, 100);
            $darkColor = adjustBrightness($baseColor, -50);
        @endphp
        <div class="optech-breadcrumb"
            style="background-image: url('{{ asset('storage/' . settingValue('breadcrumb_image')) }}'); background-size: cover; background-position: center; background-repeat: no-repeat; display: flex; align-items: center; justify-content: center; text-align: center; height: 450px;">
            <div class="container">
                <h1 class="post__title text-white" style="font-size: 2.5rem; margin-bottom: 0px;">About Us</h1>
                <nav class="breadcrumbs">
                    <ul style="list-style: none; padding: 0; margin: 0; display: flex; justify-content: center; gap: 10px;">
                        <li><a href="{{ route('home') }}" style="color: white; text-decoration: none;">Home</a></li>
                        <li aria-current="page" style="color: white;">About Us</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <main id="main">
        <!-- Founder's Message Section -->
        <section class="py-5 bg-white">
            <div class="container">
                <div class="row align-items-stretch">
                    <!-- Image Column (Left) -->
                    <div class="col-lg-5 position-relative mb-4 mb-lg-0">
                        <div class="founder-image-wrapper h-100 position-relative d-flex">
                            <!-- Decorative Side Strip -->
                            <div class="decorative-strip me-3 d-none d-md-block"
                                style="width: 40px; background-image: url('{{ asset('home/assets/homepage/images/vertical-line-bg.svg') }}'); background-size: cover; border-radius: 8px;">
                            </div>

                            <!-- Main Image -->
                            <div class="image-container flex-grow-1 position-relative overflow-hidden rounded-3 shadow-lg"
                                style="min-height: 350px;">
                                <img src="https://images.unsplash.com/photo-1537511446984-935f663eb1f4?auto=format&fit=crop&q=80&w=1000"
                                    alt="Founder, Mounteko Global Solutions" class="img-fluid w-100 h-100"
                                    style="object-fit: cover; object-position: center top;">

                                <!-- Play Button Overlay -->
                                <div class="play-button-overlay position-absolute top-0 start-0 m-3 d-flex align-items-center justify-content-center"
                                    style="width: 50px; height: 50px; background: rgba(255,255,255,0.9); border-radius: 50%; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                                    <i class="fas fa-play text-dark" style="font-size: 1rem; margin-left: 3px;"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Text Column (Right) -->
                    <div class="col-lg-7 ps-lg-5 d-flex flex-column justify-content-center">
                        <!-- Standardized Typography -->
                        <div class="mb-2">
                            <span class="section-subtitle">Founder's Message</span>
                        </div>
                        <h2 class="section-title mb-4">Building Trust Through Technology</h2>

                        <div class="mt-2">
                            <p class="section-desc">When we started
                                <strong>Mounteko Global Solutions</strong>, the goal was never to build just another IT
                                services company. The goal was to build a technology partner that businesses could
                                actually rely on—clear in communication, strong in execution, and honest in approach.
                            </p>

                            <p class="section-desc">Over the years, we have seen
                                many organizations struggle not because of a lack of technology, but due to
                                <strong>overcomplicated systems, inadequate guidance, and unreliable
                                    infrastructure</strong>. Mounteko was created to solve that gap. Every solution we
                                deliver is designed with long-term value in mind—performance, security, and simplicity
                                are our top priorities.
                            </p>

                            <p class="mb-2 fw-600" style="font-size: 0.95rem;">As we grow, our commitment remains the
                                same:</p>
                            <blockquote
                                class="blockquote border-start border-4 border-primary ps-3 my-3 bg-light p-3 rounded text-start">
                                <p class="fst-italic mb-0 text-dark" style="font-size: 0.95rem;">To earn trust through
                                    quality work, transparent processes, and consistent support.</p>
                            </blockquote>

                            <div class="mt-auto pt-2">
                                <p class="mb-1" style="font-size: 0.9rem;">Thank you for choosing Mounteko Global
                                    Solutions.</p>
                                <p class="mb-3 fw-bold" style="font-size: 0.9rem;">We look forward to building your
                                    digital future—together.</p>

                                <div class="mt-3 border-top pt-2 d-inline-block text-start">
                                    <p class="mb-0 fw-bold fs-6">— Founder,</p>
                                    <p class="mb-0 text-muted" style="font-size: 0.85rem;">Mounteko Global Solutions</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">

                            <a href="{{ route('contactUs') }}"
                                class="btn btn-primary btn-sm rounded-pill shadow-sm btn-custom-small">
                                Learn More <i class="fas fa-arrow-right ms-1" style="font-size: 0.7rem;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- Engineering Digital Confidence Section -->
        <section class="py-5 overflow-hidden" style="background-color: #f9f9f9;">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Content Column -->
                    <div class="col-lg-6 mb-5 mb-lg-0 pe-lg-5">
                        <div class="engineering-content">
                            <span class="section-subtitle">About Us</span>
                            <h2 class="section-title">Engineering Digital Confidence for Growing Businesses</h2>

                            <p class="section-desc">
                                <strong>Mounteko Global Solutions</strong> is a modern IT services company designed for
                                businesses seeking clarity, speed, and control in their digital journey. We design and
                                deliver reliable cloud, infrastructure, and intelligent technology solutions that help
                                organizations operate efficiently and scale with confidence.
                            </p>

                            <p class="section-desc">
                                As a new-generation technology partner, we focus on doing the fundamentals exceptionally
                                well—<strong>performance, security, stability, and scalability</strong>—while preparing our
                                clients for what comes next.
                            </p>

                            <!-- Icons/Badges Row (Mimicking Reference Style) -->
                            <div class="d-flex align-items-center mt-4">
                                <div class="d-flex align-items-center me-4">
                                    <div class="icon-box bg-white p-3 rounded-circle shadow-sm me-3 text-primary">
                                        <i class="fas fa-award fa-2x"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-0">Certified Excellence</h6>
                                        <small class="text-muted">Industry Standard</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="icon-box bg-white p-3 rounded-circle shadow-sm me-3 text-primary">
                                        <i class="fas fa-shield-alt fa-2x"></i>
                                    </div>
                                    <div>
                                        <h6 class="fw-bold mb-0">Secure & Scalable</h6>
                                        <small class="text-muted">Future Ready</small>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">

                                <a href="{{ route('contactUs') }}"
                                    class="btn btn-primary btn-sm rounded-pill shadow-sm btn-custom-small">
                                    Learn More <i class="fas fa-arrow-right ms-1" style="font-size: 0.7rem;"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Image Collage Column -->
                    <div class="col-lg-6 position-relative">
                        <div class="collage-wrapper position-relative" style="min-height: 500px;">
                            <!-- Main Image (Top Right) -->
                            <div class="position-absolute top-0 end-0 w-75 h-75 overflow-hidden rounded-4 shadow-lg z-1"
                                style="border: 5px solid white;">
                                <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=800"
                                    alt="Cybersecurity Technology" class="img-fluid w-100 h-100 object-fit-cover">
                            </div>

                            <!-- Secondary Image (Bottom Left) -->
                            <div class="position-absolute bottom-0 start-0 w-60 h-60 overflow-hidden rounded-4 shadow-lg z-2"
                                style="border: 5px solid white; transform: translateY(-30px);">
                                <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?auto=format&fit=crop&q=80&w=800"
                                    alt="Professional Woman in Tech" class="img-fluid w-100 h-100 object-fit-cover">
                            </div>

                            <!-- Decorative Badge (Top Left overlap) -->
                            <div class="position-absolute top-25 start-0 translate-middle-y z-3 p-4 bg-dark text-white rounded-3 shadow-lg text-center"
                                style="top: 20%; left: -20px !important;">
                                <h2 class="display-4 fw-bold mb-0 text-primary">25+</h2>
                                <p class="mb-0 small text-uppercase fw-bold">Years of Experience</p>
                            </div>

                            <!-- Play Button Overlay (Center) -->
                            <div class="position-absolute top-50 start-50 translate-middle z-3">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center shadow-lg"
                                    style="width: 80px; height: 80px; animation: pulse 2s infinite;">
                                    <i class="fas fa-play fa-2x ms-1"></i>
                                </div>
                            </div>

                            <!-- Decorative Dots -->
                            <div class="position-absolute top-0 end-0 mt-n4 me-n4 z-0 d-none d-lg-block">
                                <img src="{{ asset('home/assets/homepage/images/dot-pattern.svg') }}" alt="pattern"
                                    style="opacity: 0.5;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </section>

        <!-- New Services Section -->
        <section class="py-5 services-section-new bg-white">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <small class="text-uppercase text-primary fw-bold ls-1px">Our Services</small>
                        <h3 class="common-section-heading text-center mt-2">Innovative IT Services <br> Tailored <span
                                class="text-primary">For Your Success.</span></h3>
                    </div>
                </div>

                <div class="row justify-content-center g-4 row-cols-1 row-cols-md-2 row-cols-lg-5">
                    <!-- Card 1: Cloud Hosting -->
                    <div class="col">
                        <div class="service-card-new">
                            <div class="service-icon-new-wrapper">
                                <i class="fas fa-cloud"></i>
                            </div>
                            <h4 class="service-title-new">Cloud Provider</h4>
                            <p class="service-desc-new">
                                High-performance cloud infrastructure built for speed, security, and always-on business
                                operations.
                            </p>
                            <a href="#" class="btn-read-more-new">Read More +</a>
                        </div>
                    </div>

                    <!-- Card 2: Managed IT -->
                    <div class="col">
                        <div class="service-card-new">
                            <div class="service-icon-new-wrapper">
                                <i class="fas fa-tasks"></i>
                            </div>
                            <h4 class="service-title-new">Managed IT Services</h4>
                            <p class="service-desc-new">
                                Proactive managed IT services that keep your systems secure, optimized, and running without
                                disruption.
                            </p>
                            <a href="#" class="btn-read-more-new">Read More +</a>
                        </div>
                    </div>

                    <!-- Card 3: Cybersecurity -->
                    <div class="col">
                        <div class="service-card-new">
                            <div class="service-icon-new-wrapper">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <h4 class="service-title-new">Cybersecurity</h4>
                            <p class="service-desc-new">
                                Security-first IT solutions that protect your data, systems, and business from evolving
                                cyber threats.
                            </p>
                            <a href="#" class="btn-read-more-new">Read More +</a>
                        </div>
                    </div>

                    <!-- Card 4: AI & Automation -->
                    <div class="col">
                        <div class="service-card-new">
                            <div class="service-icon-new-wrapper">
                                <i class="fas fa-robot"></i>
                            </div>
                            <h4 class="service-title-new">AI & Intelligent Automation</h4>
                            <p class="service-desc-new">
                                Intelligent automation that reduces manual work, accelerates workflows, and delivers real
                                business impact.
                            </p>
                            <a href="#" class="btn-read-more-new">Read More +</a>
                        </div>
                    </div>

                    <!-- Card 5: IT Consulting -->
                    <div class="col">
                        <div class="service-card-new">
                            <div class="service-icon-new-wrapper">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h4 class="service-title-new">IT Consulting</h4>
                            <p class="service-desc-new">
                                Strategic IT consulting that aligns technology with business goals for scalable digital
                                growth.
                            </p>
                            <a href="#" class="btn-read-more-new">Read More +</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- New 'Why Choose Us' Section (Dark Navy) -->
        <section class="why-choose-dark">
            <div class="container">
                <div class="text-center">
                    <div class="why-header-small">Why Choose Us</div>
                    <h2 class="why-header-large">
                        Your Business with <span class="text-gold">Reliable &</span><br>
                        <span class="text-gold">Future-Ready</span> IT Solutions
                    </h2>
                </div>

                <div class="row align-items-center">
                    <!-- Left Column (Features aligned Right) -->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="align-right-desktop">
                            <!-- Feature 1 -->
                            <div class="feature-box-dark">
                                <div class="feature-icon-gold">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <h4 class="feature-title-dark">Unmatched Quality</h4>
                                <p class="feature-desc-dark">
                                    We deliver exceptional products and services that exceed expectations every time.
                                </p>
                            </div>

                            <!-- Feature 2 -->
                            <div class="feature-box-dark">
                                <div class="feature-icon-gold">
                                    <i class="fas fa-users"></i>
                                </div>
                                <h4 class="feature-title-dark">Trusted Expertise</h4>
                                <p class="feature-desc-dark">
                                    Backed by years of experience and a proven track record, we are your reliable partner
                                    for success.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Center Column (Image) -->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="central-image-wrapper">
                            <!-- Using a generic placeholder or an existing image since user didn't specify exact file path
                                                                                         I will use a placeholder or one of the existing asset paths if known, or a generic URL for now.
                                                                                         Looking at previous file views, there might be assets in assets/homepage/images/
                                                                                         I'll use a placeholder that user can swap easily. -->
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=600&h=800"
                                alt="IT Professional">
                        </div>
                    </div>

                    <!-- Right Column (Features aligned Left) -->
                    <div class="col-lg-4">
                        <div class="align-left-desktop">
                            <!-- Feature 3 -->
                            <div class="feature-box-dark">
                                <div class="feature-icon-gold">
                                    <i class="fas fa-crosshairs"></i>
                                </div>
                                <h4 class="feature-title-dark">User-Centric Approach</h4>
                                <p class="feature-desc-dark">
                                    Your satisfaction is our priority, and we tailor solutions to meet your unique needs.
                                    Your happiness comes first.
                                </p>
                            </div>

                            <!-- Feature 4 -->
                            <div class="feature-box-dark">
                                <div class="feature-icon-gold">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <h4 class="feature-title-dark">Trusted by Many</h4>
                                <p class="feature-desc-dark">
                                    We have built a strong reputation over the years by consistently delivering excellent
                                    results.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection