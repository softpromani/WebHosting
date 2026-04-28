@extends('home.includes.layout')
@section('title', 'Advanced Email & Application Security | Mounteko')

@section('header-area')
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/new_home_custom.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/cybersecurity_services.css') }}">
@endsection

@section('content')
    <main id="main">

        <!-- HEADER 2 (HERO) -->
        <section class="header2-section">
            <div class="h2-container">
                <div class="h2-content">
                    <h2>Advanced Email & Application Security to Protect Your <span>Business</span></h2>
                    <p>Proactive phishing protection, business email compromise (BEC) prevention, and rigorous application security testing to safeguard your communications, data, and critical web assets.</p>
                    <div class="h2-btns" style="display: flex; gap: 15px; flex-wrap: wrap;">
                        <a href="{{ route('contactUs') }}" class="btn-blue-grad">Get a Free Security Assessment</a>
                        <a href="{{ route('contactUs') }}" class="btn-blue-grad" style="background: transparent; border: 2px solid white;">Talk to a Security Expert</a>
                    </div>
                </div>
                <div class="h2-visual">
                    <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=600"
                        class="dashboard-img" alt="Email Security Dashboard">
                    <div class="shield-overlay" style="display: flex; justify-content: center; align-items: center;">
                        <i class="bi bi-envelope-check-fill"
                            style="font-size: 150px; color: white; filter: drop-shadow(0 0 30px rgba(77, 163, 255, 0.9));"></i>
                    </div>
                </div>
            </div>

            <div class="h2-bottom-bar">
                <div class="h2-bottom-text">
                    <div class="h2-line"></div>
                    Without proactive email filtering and application hardening, businesses remain vulnerable to phishing and zero-day exploits 24x7.
                    <div class="h2-line"></div>
                </div>
            </div>
        </section>

        <!-- PREMIUM SERVICES MENU PILLS -->

        <div class="service-pill-menu">
            <div class="container">
                <div class="pill-track">
                    <a href="#" class="service-pill">Firewall Setup</a>
                    <a href="#" class="service-pill">VPN Setup & Remote Access</a>
                    <a href="#" class="service-pill">Cloud Security</a>
                    <a href="#" class="service-pill">Network Security</a>
                    <a href="#" class="service-pill">Threat Detection & Endpoint</a>
                    <a href="#" class="service-pill">Security Audit</a>
                    <a href="#" class="service-pill">Firewall Monitoring</a>
                    <span class="service-pill active"><i class="bi bi-check2-circle" style="margin-right: 6px; font-size: 16px;"></i> Email & Application Security</span>
                </div>
            </div>
        </div>

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
                        <i class="bi bi-eye-fill"></i> About Us
                    </div>
                    <h2>Your trusted partner in email and application <span>security solutions</span></h2>
                    <p>We provide reliable, cutting-edge cybersecurity solutions focused on securing the two most exploited vectors: human inboxes and business applications. We ensure safety and peace of mind through advanced threat detection and secure gateways.</p>

                    <div class="s3-feature-box">
                        <div class="s3-feature-img">
                            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=300"
                                alt="Specialist">
                        </div>
                        <div class="s3-feature-text">
                            <h5>24/7 email security assistance</h5>
                            <p>Protecting your organization from advanced persistent threats, phishing attempts, and ransomware with our round-the-clock expert monitoring.</p>
                        </div>
                    </div>

                    <ul class="s3-checklist">
                        <li><i class="bi bi-check-circle-fill"></i> Phishing Protection and URL Defense</li>
                        <li><i class="bi bi-check-circle-fill"></i> Web Application Firewall (WAF) Management</li>
                        <li><i class="bi bi-check-circle-fill"></i> Secure Email Gateway (SEG) Filtering</li>
                    </ul>

                    <div class="s3-footer">
                        <div class="s3-phone">
                            <div class="s3-phone-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <strong>(855) 526-7890</strong>
                        </div>
                        <a href="{{ route('contactUs') }}" class="btn-s3-grad">
                            More About <i class="bi bi-arrow-right-short"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 4 (WHAT WE PROVIDE) -->
        <section class="section4-services">
            <div class="container">
                <span class="s4-tagline">WHAT WE PROVIDE</span>
                <h2 class="s4-title">Robust Email & Application Security for <span>Today's Threats</span></h2>
                <p class="s4-desc">Protect your business from ever-evolving phishing campaigns and application vulnerabilities with our end-to-end security solutions.</p>

                <div class="s4-grid">
                    <div class="s4-card card-network">
                        <div class="s4-icon-box"><i class="bi bi-envelope-check"></i></div>
                        <h4>Email Security Services</h4>
                        <p>Deploying advanced filtering and secure email gateway services to block spam, malware, and sophisticated phishing attempts before they reach the inbox.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-data">
                        <div class="s4-icon-box"><i class="bi bi-code-slash"></i></div>
                        <h4>Application Security Testing</h4>
                        <p>Static and dynamic analysis (SAST/DAST) to identify vulnerabilities in web and mobile applications, ensuring code is secure before deployment.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-identity">
                        <div class="s4-icon-box"><i class="bi bi-person-badge"></i></div>
                        <h4>Business Email Compromise Protection</h4>
                        <p>Managing user identities and behavior analytics to detect impersonation, domain spoofing, and anomalous login activity in business email solutions.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-monitor">
                        <div class="s4-icon-box"><i class="bi bi-shield-slash"></i></div>
                        <h4>Phishing Protection Services</h4>
                        <p>24/7 monitoring and real-time link rewriting to neutralize credential harvesting sites and malicious attachments at the point of click.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-backup">
                        <div class="s4-icon-box"><i class="bi bi-shield-lock-fill"></i></div>
                        <h4>Web Application Security Services</h4>
                        <p>Protecting critical web assets with Web Application Firewalls (WAF) and runtime application self-protection (RASP) against OWASP Top 10 threats.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-config">
                        <div class="s4-icon-box"><i class="bi bi-gear-wide-connected"></i></div>
                        <h4>Managed Email Security Services</h4>
                        <p>Hardening email infrastructure and applying secure configurations. We manage your email protection solutions so you can focus on business operations.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 5 (WHY CHOOSE US) -->
        <section class="section5-why-us">
            <div class="container">
                <h2 class="s5-title">Features At A Glance</h2>
                <div class="s5-row" style="flex-wrap: wrap; justify-content: center;">
                    <div class="s5-item" style="flex: 0 0 calc(16.66% - 10px); min-width: 150px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-shield-check"></i></div>
                        <h5 style="color: #1a237e; font-size: 14px; font-weight: 700; margin-bottom: 5px; white-space: nowrap; letter-spacing: -0.3px;">Phishing Protection</h5>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(16.66% - 10px); min-width: 150px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-braces-asterisk"></i></div>
                        <h5 style="color: #1a237e; font-size: 14px; font-weight: 700; margin-bottom: 5px; white-space: nowrap; letter-spacing: -0.3px;">Application Hardening</h5>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(16.66% - 10px); min-width: 150px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-door-closed-fill"></i></div>
                        <h5 style="color: #1a237e; font-size: 14px; font-weight: 700; margin-bottom: 5px; white-space: nowrap; letter-spacing: -0.3px;">Secure Gateway</h5>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(16.66% - 10px); min-width: 150px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5 style="color: #1a237e; font-size: 14px; font-weight: 700; margin-bottom: 5px; white-space: nowrap; letter-spacing: -0.3px;">Rapid Remediation</h5>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(16.66% - 10px); min-width: 150px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-headset"></i></div>
                        <h5 style="color: #1a237e; font-size: 14px; font-weight: 700; margin-bottom: 5px; white-space: nowrap; letter-spacing: -0.3px;">Managed Services</h5>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(16.66% - 10px); min-width: 150px; text-align: center; border-right: none;">
                        <div class="s5-icon-circle"><i class="bi bi-clipboard-check-fill"></i></div>
                        <h5 style="color: #1a237e; font-size: 14px; font-weight: 700; margin-bottom: 5px; white-space: nowrap; letter-spacing: -0.3px;">Compliance Ready</h5>
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
                            <h5>Real-Time Phishing Protection</h5>
                            <p>Our phishing protection services continuously analyze email traffic, link behavior, and attachment sandboxing to detect and quarantine credential harvesting attempts before users click. We stop ransomware and BEC attacks at the gateway.</p>
                        </div>

                        <div class="s7-service-block">
                            <h5>Web Application & API Security</h5>
                            <p>Web application security services provide continuous monitoring of application traffic to detect and block OWASP Top 10 vulnerabilities, including SQL injection and cross-site scripting (XSS). We protect APIs and user data in real-time.</p>
                        </div>
                    </div>

                    <div class="s7-right">
                        <div class="s7-image-wrap">
                            <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&q=80&w=800"
                                alt="Security Operations Center">
                        </div>

                        <div class="s7-service-block">
                            <h5>Secure Email Gateway & Access Management</h5>
                            <p>Secure email gateway services manage inbound and outbound message flow with granular policy enforcement. Combined with identity access controls, this prevents account takeovers and data leaks across all business email security solutions.</p>
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
                        <div style="background: white; padding: 30px; border-radius: 10px; height: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                            <i class="bi bi-envelope-check-fill" style="font-size: 2rem; color: var(--primary-color); margin-bottom: 15px;"></i>
                            <h5 style="font-weight: 700; color: #1a237e; margin-bottom: 15px; font-size: 1.1rem;">EMAIL SECURITY SERVICES</h5>
                            <p style="color: #555; font-size: 14px; margin: 0;">Protecting systems and data from unauthorized access, spam, and advanced phishing threats.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div style="background: white; padding: 30px; border-radius: 10px; height: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                            <i class="bi bi-braces-asterisk" style="font-size: 2rem; color: var(--primary-color); margin-bottom: 15px;"></i>
                            <h5 style="font-weight: 700; color: #1a237e; margin-bottom: 15px; font-size: 1.1rem;">APPLICATION SECURITY TESTING</h5>
                            <p style="color: #555; font-size: 14px; margin: 0;">Identifying vulnerabilities in custom code and third-party libraries to prevent digital exploits.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div style="background: white; padding: 30px; border-radius: 10px; height: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                            <i class="bi bi-display" style="font-size: 2rem; color: var(--primary-color); margin-bottom: 15px;"></i>
                            <h5 style="font-weight: 700; color: #1a237e; margin-bottom: 15px; font-size: 1.1rem;">MANAGED MONITORING & REMEDIATION</h5>
                            <p style="color: #555; font-size: 14px; margin: 0;">Protecting your environment with 24/7 expert oversight from our application security company.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 8 (MODERN CTA) -->
        <section class="section8-cta">
            <div class="s8-container">
                <div class="s8-box">
                    <div class="s8-left">
                        <h2 class="s8-title">Protect your business from the #1 cyber threat today!</h2>
                        <span
                            style="color: rgba(255,255,255,0.8); display: block; margin-bottom: 25px; font-size: 1.1rem;">Don't let a single phishing email or app vulnerability compromise your entire network.</span>
                        <div class="s8-contacts">
                            <div class="s8-contact-item">
                                <i class="bi bi-telephone-outbound"></i>
                                <div class="s8-contact-info">
                                    <span>Get contact now</span>
                                    <strong>(855) 526-7890</strong>
                                </div>
                            </div>
                            <div class="s8-sep"></div>
                            <div class="s8-contact-item">
                                <i class="bi bi-envelope-at"></i>
                                <div class="s8-contact-info">
                                    <span>Sent e-mail</span>
                                    <strong>info@mounteko.com</strong>
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
