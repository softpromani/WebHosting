@extends('home.includes.layout')
@section('title', 'Our Security | Securing your Digital World')
@section('header-area')
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/our_security.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/cybersecurity_services.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/new_home_custom.css') }}">
    <style>
        .s7-title,
        .s8-title {
            font-size: 1.6rem !important;
        }

        .s7-service-block h5 {
            font-size: 1.1rem !important;
        }
    </style>
@endsection

@section('content')
    <main id="main">
        <!-- ======= Our Security Hero Section ======= -->
        <section class="security-hero-section">
            <div class="container">
                <div class="security-hero-container">
                    <div class="security-hero-content">
                        <span class="security-hero-tagline">Cybersecurity Unleashed</span>
                        <h1 class="security-hero-title">Securing the Digital Frontier with Vigilance and Innovation.</h1>
                        <p class="security-hero-desc">
                            In today's increasingly digital world, cybersecurity has become paramount. With the rapid
                            expansion of online activities, the threat landscape is constantly evolving.
                        </p>
                        <div class="security-hero-btns">
                            <a href="{{ route('contactUs') }}" class="btn-demo">
                                <span class="dot"></span> Request A Demo
                            </a>
                            <a href="#" class="btn-watch">
                                <div class="play-icon-box">
                                    <i class="bi bi-play-fill"></i>
                                </div>
                                Watch Intro Video
                            </a>
                        </div>
                    </div>
                    <div class="security-hero-visual">
                        <div class="visual-bg-circle"></div>
                        <img src="{{ asset('home/assets/img/security_hero.png') }}" alt="Security Expert" class="man-image">
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Security Services Section ======= -->
        <section class="security-services-section">
            <div class="container">
                <div class="security-services-header">
                    <span class="services-subtitle">What We Do</span>
                    <h2 class="services-title">Introducing Our Cyber Security Services.</h2>
                </div>
                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="security-service-card">
                            <div class="service-icon-box">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h3 class="service-card-title">Security Management</h3>
                            <p class="service-card-desc">
                                Proactive governance, risk assessment, and policy management to keep your business resilient
                                against evolving threats.
                            </p>
                            <a href="#" class="service-link">
                                Read More <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="security-service-card">
                            <div class="service-icon-box">
                                <i class="bi bi-database-lock"></i>
                            </div>
                            <h3 class="service-card-title">Data Privacy</h3>
                            <p class="service-card-desc">
                                Ensuring your sensitive information remains confidential and compliant with global data
                                protection standards.
                            </p>
                            <a href="#" class="service-link">
                                Read More <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="security-service-card">
                            <div class="service-icon-box">
                                <i class="bi bi-node-plus"></i>
                            </div>
                            <h3 class="service-card-title">Network Security</h3>
                            <p class="service-card-desc">
                                Advanced firewall, intrusion detection, and perimeter defense to block sophisticated cyber
                                threats in real-time.
                            </p>
                            <a href="#" class="service-link">
                                Read More <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= About Cyber Section ======= -->
        <section class="about-cyber-section">
            <div class="container">
                <div class="about-cyber-container">
                    <div class="about-cyber-left">
                        <span class="about-subtitle">About Cyber</span>
                        <h2 class="about-title">Unveiling the Essence of Pure Visibility.</h2>
                        <p class="about-desc">
                            Cybersecurity is crucial in today's digital age. We protect sensitive data, financial records,
                            and trade secrets with precision and advanced defense strategies.
                        </p>
                        <div class="about-grid">
                            <div class="about-grid-item">
                                <h4><i class="bi bi-bullseye"></i> Mission & Vision</h4>
                                <p>Tailored security goals aligned with your specific industry and business needs.</p>
                            </div>
                            <div class="about-grid-item">
                                <h4><i class="bi bi-shield-check"></i> Our Purpose</h4>
                                <p>To defend the digital frontier with the highest and most innovative security standards.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="about-cyber-right">
                        <div class="about-visual-bg"></div>
                        <div class="organic-image-wrap">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=800"
                                alt="Cyber Security Tech" class="organic-image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= More Services Grid Section ======= -->
        <section class="more-services-section">
            <div class="container">
                <div class="more-services-header">
                    <span class="ms-subtitle">Our Services</span>
                    <h2 class="services-title">From Your Cyber Security Services.</h2>
                </div>
                <div class="more-services-grid">
                    <!-- Item 1 -->
                    <div class="more-service-item">
                        <div class="ms-icon-box">
                            <i class="bi bi-shield-shaded"></i>
                        </div>
                        <span class="ms-subtitle">Endpoint Security</span>
                        <h4 class="ms-title">Tailored Services for a Secure Tomorrow.</h4>
                    </div>
                    <!-- Item 2 -->
                    <div class="more-service-item">
                        <div class="ms-icon-box">
                            <i class="bi bi-cloud-check"></i>
                        </div>
                        <span class="ms-subtitle">Cloud Security</span>
                        <h4 class="ms-title">Tailored Services for a Secure Tomorrow.</h4>
                    </div>
                    <!-- Item 3 -->
                    <div class="more-service-item">
                        <div class="ms-icon-box">
                            <i class="bi bi-chat-quote"></i>
                        </div>
                        <span class="ms-subtitle">Security Consulting</span>
                        <h4 class="ms-title">Our Robust Cybersecurity Service Suite.</h4>
                    </div>
                    <!-- Item 4 -->
                    <div class="more-service-item">
                        <div class="ms-icon-box">
                            <i class="bi bi-hdd-network"></i>
                        </div>
                        <span class="ms-subtitle">Network Security</span>
                        <h4 class="ms-title">Elevate Your Protection with Our Cyber Services.</h4>
                    </div>
                    <!-- Item 5 -->
                    <div class="more-service-item">
                        <div class="ms-icon-box">
                            <i class="bi bi-code-square"></i>
                        </div>
                        <span class="ms-subtitle">Application Security</span>
                        <h4 class="ms-title">Your Trusted Partner in Digital Security.</h4>
                    </div>
                    <!-- Item 6 -->
                    <div class="more-service-item">
                        <div class="ms-icon-box">
                            <i class="bi bi-info-circle"></i>
                        </div>
                        <span class="ms-subtitle">Security Awareness</span>
                        <h4 class="ms-title">Unveiling Our Cybersecurity Service Arsenal.</h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Digital Vigilance Section ======= -->
        <section class="vigilance-section">
            <div class="container">
                <div class="vigilance-container">
                    <div class="vigilance-visual">
                        <div class="vigilance-circle"></div>
                        <img src="{{ asset('home/assets/img/why_choose_security.png') }}" alt="Vigilance Expert"
                            class="vigilance-img">
                        <div class="vigilance-badge">
                            <i class="bi bi-patch-check-fill text-primary fs-1"></i>
                        </div>
                    </div>
                    <div class="vigilance-content">
                        <span class="vigilance-subtitle">Why Choose Us?</span>
                        <h2 class="vigilance-title">Digital Vigilance: Strengthening Cyber Defenses in the Modern.</h2>
                        <ul class="vigilance-list">
                            <li class="vigilance-item">
                                <i class="bi bi-chevron-double-right"></i>
                                <span>Vulnerability Assessment and Penetration Testing</span>
                            </li>
                            <li class="vigilance-item">
                                <i class="bi bi-chevron-double-right"></i>
                                <span>Identity and Access Management (IAM)</span>
                            </li>
                            <li class="vigilance-item">
                                <i class="bi bi-chevron-double-right"></i>
                                <span>Security Information and Event Management</span>
                            </li>
                            <li class="vigilance-item">
                                <i class="bi bi-chevron-double-right"></i>
                                <span>Security Auditing and Compliance</span>
                            </li>
                            <li class="vigilance-item">
                                <i class="bi bi-chevron-double-right"></i>
                                <span>This service involves responding to security</span>
                            </li>
                        </ul>
                        <a href="#" class="btn-vigilance">
                            Learn More <i class="bi bi-arrow-right-circle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- SECTION 7 (WORLD SECURITY) -->
        <section class="section7-securing">
            <div class="s7-container">
                <div class="s7-top-row">
                    <div class="s7-left">
                        <div class="s7-tag">
                            <i class="bi bi-shield-check"></i> OUR SECURITY
                        </div>
                        <h2 class="s7-title">Securing your digital world <span class="together">together</span></h2>

                        <div class="s7-service-block">
                            <h5>Real-Time Threat Monitoring & Filtering</h5>
                            <p>Our firewall configuration services continuously analyze network traffic, user behavior,
                                and system activity to detect and respond to potential intrusions and malware threats as
                                they occur. This blocks malicious IPs before they breach the internal network.</p>
                        </div>

                        <div class="s7-service-block">
                            <h5>Compliance And Risk Management</h5>
                            <p>Our firewall installation services ensure compliance with PCI-DSS, HIPAA, and GDPR
                                standards. We continuously analyze egress traffic and system activity to prevent data
                                exfiltration and detect potential security vulnerabilities in your rule set.</p>
                        </div>
                    </div>

                    <div class="s7-right">
                        <div class="s7-image-wrap">
                            <img src="https://images.unsplash.com/photo-1560264280-88b68371db39?auto=format&fit=crop&q=80&w=800"
                                alt="Network Security Operations">
                        </div>

                        <div class="s7-service-block">
                            <h5>Identity And Access Management (IAM) Integration</h5>
                            <p>Identity and access management integrated with your network firewall setup continuously
                                verifies user credentials against policy. It analyzes user behavior and system activity
                                to detect and respond to potential unauthorized access attempts and insider threats.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- BOTTOM BAR - 3 MINI FEATURES -->
        <section style="background-color: #f0f5fb; padding: 50px 0;">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div
                            style="background: white; padding: 30px; border-radius: 10px; height: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                            <i class="bi bi-pc-display" style="font-size: 2rem; color: #1a237e; margin-bottom: 15px;"></i>
                            <h5 style="font-weight: 700; color: #1a237e; margin-bottom: 15px; font-size: 1.1rem;">
                                COMPUTER SECURITY</h5>
                            <p style="color: #555; font-size: 14px; margin: 0;">Protecting endpoint systems and data
                                from unauthorized access and network-based cyber threats.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div
                            style="background: white; padding: 30px; border-radius: 10px; height: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                            <i class="bi bi-files" style="font-size: 2rem; color: #1a237e; margin-bottom: 15px;"></i>
                            <h5 style="font-weight: 700; color: #1a237e; margin-bottom: 15px; font-size: 1.1rem;">FILE
                                DUPLICATION & ACCESS</h5>
                            <p style="color: #555; font-size: 14px; margin: 0;">Restricting lateral movement and
                                controlling access to sensitive file shares and databases via VLAN segmentation.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div
                            style="background: white; padding: 30px; border-radius: 10px; height: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                            <i class="bi bi-shield-shaded"
                                style="font-size: 2rem; color: #1a237e; margin-bottom: 15px;"></i>
                            <h5 style="font-weight: 700; color: #1a237e; margin-bottom: 15px; font-size: 1.1rem;">
                                NETWORK PROTECTIONS</h5>
                            <p style="color: #555; font-size: 14px; margin: 0;">Safeguarding the entire perimeter
                                against DDoS attacks, port scanning, and external digital vulnerabilities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </main>
@endsection
