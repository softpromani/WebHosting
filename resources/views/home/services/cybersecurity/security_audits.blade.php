@extends('home.includes.layout')
@section('title', 'Security Audits & Vulnerability Assessments | Mounteko Global Solutions')

@section('header-area')
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/new_home_custom.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/cybersecurity_services.css') }}">
@endsection

@section('content')
    <main id="main">
        <!-- HEADER 1 (TOP) -->
        {{-- <section class="header1-section">
            <div class="h1-hero-main">
                <div class="h1-left">
                    <h1>Our Services</h1>
                    <div class="h1-badge-grid">
                        <div class="h1-badge">
                            <div class="circle-check"><i class="bi bi-check-lg"></i></div> LAN, SD-WAN, Wi-Fi
                        </div>
                        <div class="h1-badge">
                            <div class="circle-check"><i class="bi bi-check-lg"></i></div> Cloud Optimization
                        </div>
                        <div class="h1-badge">
                            <div class="circle-check"><i class="bi bi-check-lg"></i></div> Network Designs Optimization
                        </div>
                        <div class="h1-badge">
                            <div class="circle-check"><i class="bi bi-check-lg"></i></div> SLA-Driven Services
                        </div>
                    </div>
                    <div class="h1-actions">
                        <a href="{{ route('contactUs') }}" class="btn-consult">Request a Free Consultation</a>
                        <a href="#" class="btn-explore">Explore Our Services</a>
                    </div>
                </div>
                <div class="h1-right">
                    <div class="icon-shield-wrap">
                        <i class="bi bi-shield-lock-fill"></i>
                    </div>
                </div>
            </div>

            <div class="trust-bar-fixed">
                <div class="trust-container">
                    <div class="trust-point"><i class="bi bi-check-lg"></i> 24x7 Monitoring & Support</div>
                    <div class="trust-point"><i class="bi bi-check-lg"></i> Certified IT Experts</div>
                    <div class="trust-point"><i class="bi bi-check-lg"></i> SLA-Driven Services</div>
                    <div class="trust-point"><i class="bi bi-check-lg"></i> Data Security & Compliance</div>
                </div>
            </div>
        </section> --}}

        <!-- HEADER 2 (SECTION 2) -->
        <section class="header2-section">
            <div class="h2-container">
                <div class="h2-content">
                    <h2>Advanced <span>Cybersecurity</span> Solutions to Protect Your Business</h2>
                    <p>Proactive threat detection, prevention, and compliance-driven security services to safeguard your
                        data, networks, and users.</p>
                    <div class="h2-btns">
                        <a href="{{ route('contactUs') }}" class="btn-blue-grad">Get a Free Security Assessment</a>
                        <a href="#" class="btn-white-grad">Talk to a Security Expert</a>
                    </div>
                </div>
                <div class="h2-visual">
                    <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=600"
                        class="dashboard-img" alt="Dashboard">
                    <div class="shield-overlay" style="display: flex; justify-content: center; align-items: center;">
                        <i class="bi bi-shield-lock-fill"
                            style="font-size: 150px; color: white; filter: drop-shadow(0 0 30px rgba(77, 163, 255, 0.9));"></i>
                    </div>
                </div>
            </div>

            <div class="h2-bottom-bar">
                <div class="h2-bottom-text">
                    <div class="h2-line"></div>
                    Without proactive security, businesses remain vulnerable 24x7.
                    <div class="h2-line"></div>
                </div>
            </div>
        </section>

        <!-- SECTION 3 (FEATURES / ABOUT US) -->
        <section class="section3-features">
            <div class="s3-container">
                <div class="s3-visual">
                    <div class="img-tall-wrap">
                        <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&q=80&w=600"
                            class="s3-img" style="height: 380px;" alt="Office">
                    </div>
                    <div class="img-stack-wrap">
                        <img src="https://images.unsplash.com/photo-1560264280-88b68371db39?auto=format&fit=crop&q=80&w=400"
                            class="s3-img" style="height: 180px;" alt="Cyber Lab">
                        <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=400"
                            class="s3-img" style="height: 180px;" alt="Security Network">
                    </div>
                    <div class="badge-circular">
                        <div class="badge-inner">
                            <i class="bi bi-shield-check fs-5 mb-1"></i>
                            Get free<br>cyber security
                        </div>
                    </div>
                </div>

                <div class="s3-content">
                    <div class="s3-tag">
                        <i class="bi bi-shield-lock-fill"></i> About Us
                    </div>
                    <h2>Your trusted partner in our <span>cyber security solutions</span></h2>
                    <p>We provide reliable, cutting-edge cybersecurity solutions to protect your digital assets, ensuring
                        safety and peace of mind.</p>

                    <div class="s3-feature-box">
                        <div class="s3-feature-img">
                            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=300"
                                alt="Specialist">
                        </div>
                        <div class="s3-feature-text">
                            <h5>24/7 security assistance</h5>
                            <p>Real-time support for all cybersecurity concerns, including breach response, threat
                                detection, guidance.</p>
                        </div>
                    </div>

                    <ul class="s3-checklist">
                        <li><i class="bi bi-check-circle-fill"></i> Threat Detection and Monitoring</li>
                        <li><i class="bi bi-check-circle-fill"></i> Access Control Management</li>
                        <li><i class="bi bi-check-circle-fill"></i> Security Awareness Training</li>
                    </ul>

                    <div class="s3-footer">
                        <div class="s3-phone">
                            <div class="s3-phone-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <strong>{{ settingValue('phone') }}</strong>
                        </div>
                        <a href="#" class="btn-s3-grad">
                            More About <i class="bi bi-arrow-right-short"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 4 (OUR SERVICES) -->
        <section class="section4-services">
            <div class="container">
                <span class="s4-tagline">WHAT WE PROVIDE</span>
                <h2 class="s4-title">Robust Cybersecurity Services for Today's Threats</h2>
                <p class="s4-desc">Protect your business from ever-evolving cyber risks with our <span>end-to-end security
                        solutions</span>.</p>

                <div class="s4-grid">
                    <div class="s4-card card-network">
                        <div class="s4-icon-box"><i class="bi bi-shield-lock"></i></div>
                        <h4>Network Security</h4>
                        <p>Deploying firewalls and intrusion detection systems to safeguard networks.</p>
                        <a href="#" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-data">
                        <div class="s4-icon-box"><i class="bi bi-lock-fill"></i></div>
                        <h4>Data Encryption</h4>
                        <p>Encrypting sensitive data at rest and in transit using advanced encryption.</p>
                        <a href="#" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-identity">
                        <div class="s4-icon-box"><i class="bi bi-fingerprint"></i></div>
                        <h4>Identity & Access</h4>
                        <p>Managing user identities and access with MFA and detailed control.</p>
                        <a href="#" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-monitor">
                        <div class="s4-icon-box"><i class="bi bi-eye-fill"></i></div>
                        <h4>Security Monitoring</h4>
                        <p>24/7 monitoring with advanced SIEM systems for real-time detection.</p>
                        <a href="#" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-backup">
                        <div class="s4-icon-box"><i class="bi bi-cloud-arrow-up-fill"></i></div>
                        <h4>Backup & Recovery</h4>
                        <p>Protecting critical data with secure backups and rapid recovery plans.</p>
                        <a href="#" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-config">
                        <div class="s4-icon-box"><i class="bi bi-gear-fill"></i></div>
                        <h4>Security Configuration</h4>
                        <p>Hardening systems and applying secure configurations across infrastructure.</p>
                        <a href="#" class="btn-learn">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 5 (WHY CHOOSE US) -->
        <section class="section5-why-us">
            <div class="container">
                <h2 class="s5-title">Why Choose Us?</h2>
                <div class="s5-row">
                    <div class="s5-item">
                        <div class="s5-icon-circle"><i class="bi bi-graph-up-arrow"></i></div>
                        <span>Proactive Monitoring</span>
                    </div>
                    <div class="s5-item">
                        <div class="s5-icon-circle"><i class="bi bi-wallet2"></i></div>
                        <span>Cost-Effective Plans</span>
                    </div>
                    <div class="s5-item">
                        <div class="s5-icon-circle"><i class="bi bi-boxes"></i></div>
                        <span>Scalable Solutions</span>
                    </div>
                    <div class="s5-item">
                        <div class="s5-icon-circle"><i class="bi bi-clock-history"></i></div>
                        <span>Fast Response Time</span>
                    </div>
                    <div class="s5-item">
                        <div class="s5-icon-circle"><i class="bi bi-person-check-fill"></i></div>
                        <span>Single IT Partner</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 6 (OUR PROJECT) -->
        <section class="section6-projects">
            <div class="container">
                <div class="s6-tag">
                    <i class="bi bi-hexagon-fill"></i> OUR PROJECT
                </div>
                <h2 class="s6-title">Showcasing our cybersecurity <span class="s6-latest">latest projects</span></h2>

                <div class="s6-grid">
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Network Security</span>
                            <h4>Enterprise Firewall Optimization</h4>
                        </div>
                    </div>
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1558494949-ef010cbdcc48?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Data Protection</span>
                            <h4>Zero Trust Architecture Deployment</h4>
                        </div>
                    </div>
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Compliance</span>
                            <h4>Regulatory Audit Automation</h4>
                        </div>
                    </div>
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Authentication</span>
                            <h4>IoT Security Enhancement for Smart Devices</h4>
                        </div>
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
                        <h2 class="s7-title">Securing your digital <span class="world">world</span><br><span
                                class="together">together</span></h2>

                        <div class="s7-service-block">
                            <h5>Real-Time Threat Monitoring:</h5>
                            <p>Real-Time Threat Monitoring continuously analyzes network traffic, user behavior, and system
                                activity to detect and respond to potential potentials security threats threats as they
                                occur.</p>
                        </div>

                        <div class="s7-service-block">
                            <h5>Compliance And Risk Management:</h5>
                            <p>compliance & risk management continuously analyzes network traffic, user behavior, and system
                                activity to detect and respond to potential potentials security threats threats as they
                                occur.</p>
                        </div>
                    </div>

                    <div class="s7-right">
                        <div class="s7-image-wrap">
                            <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&q=80&w=800"
                                alt="Cybersecurity Team">
                        </div>

                        <div class="s7-service-block">
                            <h5>Identity And Access Management:</h5>
                            <p>identity and access management continuously analyzes network traffic, user behavior, and
                                system activity to detect and respond to potential potentials security threats threats as
                                they occur.</p>
                        </div>
                    </div>
                </div>

                <div class="s7-footer-grid">
                    <div class="s7-footer-item">
                        <div class="s7-footer-head">
                            <i class="bi bi-check-circle"></i>
                            <h6>Computer Security</h6>
                        </div>
                        <p>Protecting systems and data from unauthorized access, cyber threats digital vulnerabilities.</p>
                    </div>

                    <div class="s7-footer-item">
                        <div class="s7-footer-head">
                            <i class="bi bi-check-circle"></i>
                            <h6>File D Uplication & Access</h6>
                        </div>
                        <p>Protecting systems and data from unauthorized access, cyber threats digital vulnerabilities.</p>
                    </div>

                    <div class="s7-footer-item">
                        <div class="s7-footer-head">
                            <i class="bi bi-check-circle"></i>
                            <h6>Network Protections</h6>
                        </div>
                        <p>Protecting systems and data from unauthorized access, cyber threats digital vulnerabilities.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 8 (MODERN CTA) -->
        <section class="section8-cta">
            <div class="s8-container">
                <div class="s8-box">
                    <div class="s8-left">
                        <h2 class="s8-title">Protect business, cyber security solution today!</h2>
                        <div class="s8-contacts">
                            <div class="s8-contact-item">
                                <i class="bi bi-telephone-outbound"></i>
                                <div class="s8-contact-info">
                                    <span>Get contact now</span>
                                    <strong>{{ settingValue('phone') }}</strong>
                                </div>
                            </div>
                            <div class="s8-sep"></div>
                            <div class="s8-contact-item">
                                <i class="bi bi-envelope-at"></i>
                                <div class="s8-contact-info">
                                    <span>Sent e-mail</span>
                                    <strong>{{ settingValue('email') }}</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s8-right">
                        <div class="s8-image-wrap">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=800"
                                alt="Cyber Security Solutions">
                        </div>
                        <div class="s8-arrow">
                            <svg viewBox="0 0 100 50">
                                <path d="M10,40 Q40,40 40,20 T70,10 M60,5 L70,10 L65,20" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection