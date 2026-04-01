@extends('home.includes.layout')
@section('title', 'Email & Phishing Protection Services | Mounteko')

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
                    <h2>Stop Threats Before They Reach the <span>Inbox</span></h2>
                    <p>Your employees are your first line of defense, but also your most targeted asset. Our multi-layered email security stops sophisticated phishing attacks, BEC (Business Email Compromise) scams, and malware before they can trick your users or compromise your data.</p>
                    <div class="h2-btns">
                        <a href="{{ route('contactUs') }}" class="btn-blue-grad">Get protected from phishing</a>
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
                    Without proactive email defense, your business is just one click away from a costly breach.
                    <div class="h2-line"></div>
                </div>
            </div>
        <!-- PREMIUM SERVICES MENU PILLS -->
        <style>
            .service-pill-menu {
                background: #f8fbff;
                padding: 30px 0;
                border-bottom: 2px solid #e1ecf8;
            }
            .pill-track {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 12px;
            }
            .service-pill {
                background: #ffffff;
                color: #4b5d73;
                padding: 10px 22px;
                border-radius: 50px;
                font-size: 14px;
                font-weight: 600;
                text-decoration: none !important;
                box-shadow: 0 4px 10px rgba(0,0,0,0.04);
                transition: all 0.3s ease;
                border: 1px solid #e1ecf8;
                display: inline-flex;
                align-items: center;
            }
            .service-pill:hover {
                background: #4facfe;
                color: white;
                transform: translateY(-2px);
                box-shadow: 0 6px 15px rgba(79,172,254,0.3);
                border-color: #4facfe;
            }
            .service-pill.active {
                background: linear-gradient(135deg, #1a237e 0%, #0d47a1 100%);
                color: white;
                border-color: #1a237e;
                box-shadow: 0 6px 15px rgba(26,35,126,0.3);
            }
        </style>
        <div class="service-pill-menu">
            <div class="container">
                <div class="pill-track">
                    <a href="#" class="service-pill">LAN, SD-WAN, Wi-Fi</a>
                    <a href="#" class="service-pill">Cloud Optimization</a>
                    <a href="#" class="service-pill">Network Designs Optimization</a>
                    <a href="#" class="service-pill">SLA-Driven Services</a>
                    <a href="#" class="service-pill">24x7 Monitoring & Support</a>
                    <a href="#" class="service-pill">Certified IT Experts</a>
                    <a href="#" class="service-pill">Data Security & Compliance</a>
                    <span class="service-pill active"><i class="bi bi-check2-circle" style="margin-right: 6px; font-size: 16px;"></i> Email & Phishing Protection</span>
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
                    <h2>Your trusted partner against <span>digital deception</span></h2>
                    <p>We combine advanced AI-driven filters with continuous user education to create a human-centric security layer. We don't just block threats; we build a culture of security awareness that turns your team into a powerful, active sensor against cyberattacks.</p>

                    <div class="s3-feature-box">
                        <div class="s3-feature-img">
                            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=300"
                                alt="Specialist">
                        </div>
                        <div class="s3-feature-text">
                            <h5>24/7 email security monitoring</h5>
                            <p>Round-the-clock analysis of inbound and outbound email traffic to detect anomalies, quarantine zero-day threats, and provide rapid response to potential account takeovers.</p>
                        </div>
                    </div>

                    <ul class="s3-checklist">
                        <li><i class="bi bi-check-circle-fill"></i> Real-time Phishing Detection</li>
                        <li><i class="bi bi-check-circle-fill"></i> Malware & Ransomware Filtering</li>
                        <li><i class="bi bi-check-circle-fill"></i> Security Awareness Training & Simulations</li>
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
                <h2 class="s4-title">Robust Email Security for <span>Today's Threats</span></h2>
                <p class="s4-desc">Protect your business communication from ever-evolving inbox attacks with our end-to-end email security solutions.</p>

                <div class="s4-grid">
                    <div class="s4-card card-network">
                        <div class="s4-icon-box"><i class="bi bi-shield-check"></i></div>
                        <h4>Advanced Threat Protection</h4>
                        <p>Block sophisticated spear-phishing, whaling, and clone phishing attacks using AI-powered analysis of email content, headers, and sender reputation.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-data">
                        <div class="s4-icon-box"><i class="bi bi-person-x-fill"></i></div>
                        <h4>BEC & Impersonation Defense</h4>
                        <p>Detects and stops executive impersonation and vendor fraud by analyzing communication patterns and using DMARC, DKIM, and SPF authentication protocols.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-identity">
                        <div class="s4-icon-box"><i class="bi bi-bug-fill"></i></div>
                        <h4>Malware & Ransomware Filtering</h4>
                        <p>Inspect all attachments and links in a sandbox environment to block zero-day malware and ransomware before they reach your users' endpoints.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-monitor">
                        <div class="s4-icon-box"><i class="bi bi-mortarboard-fill"></i></div>
                        <h4>Automated Security Awareness Training</h4>
                        <p>Deploy micro-learning modules and simulate realistic phishing attacks to continuously test and improve your employees' ability to identify threats.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-backup">
                        <div class="s4-icon-box"><i class="bi bi-lock-fill"></i></div>
                        <h4>Email Encryption & DLP</h4>
                        <p>Encrypt sensitive outbound emails automatically and enforce Data Loss Prevention (DLP) policies to ensure confidential information isn't shared unintentionally.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-config">
                        <div class="s4-icon-box"><i class="bi bi-eraser-fill"></i></div>
                        <h4>Remediation & Response</h4>
                        <p>Instantly remediate threats with one-click mailbox cleanup tools that automatically remove malicious emails from all user inboxes after a threat is detected.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 5 (WHY CHOOSE US) -->
        <section class="section5-why-us">
            <div class="container">
                <h2 class="s5-title">Why Choose Us for Email Security?</h2>
                <div class="s5-row" style="flex-wrap: wrap; justify-content: center;">
                    <div class="s5-item" style="flex: 0 0 calc(20% - 10px); min-width: 200px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-eye-fill"></i></div>
                        <h5 style="color: #1a237e; font-size: 16px; font-weight: 700; margin-bottom: 5px;">Proactive Monitoring</h5>
                        <p style="color: #555; font-size: 13px; line-height: 1.4; margin: 0;">24/7 analysis of email traffic patterns.</p>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(20% - 10px); min-width: 200px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-envelope-paper-heart"></i></div>
                        <h5 style="color: #1a237e; font-size: 16px; font-weight: 700; margin-bottom: 5px;">Phishing Simulations</h5>
                        <p style="color: #555; font-size: 13px; line-height: 1.4; margin: 0;">Real-world testing for your employees.</p>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(20% - 10px); min-width: 200px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-graph-up-arrow"></i></div>
                        <h5 style="color: #1a237e; font-size: 16px; font-weight: 700; margin-bottom: 5px;">Scalable Solutions</h5>
                        <p style="color: #555; font-size: 13px; line-height: 1.4; margin: 0;">Protection that grows with your business.</p>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(20% - 10px); min-width: 200px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-lightning-charge-fill"></i></div>
                        <h5 style="color: #1a237e; font-size: 16px; font-weight: 700; margin-bottom: 5px;">Fast Remediation</h5>
                        <p style="color: #555; font-size: 13px; line-height: 1.4; margin: 0;">Instant threat removal from all inboxes.</p>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(20% - 10px); min-width: 200px; text-align: center; border-right: none;">
                        <div class="s5-icon-circle"><i class="bi bi-people-fill"></i></div>
                        <h5 style="color: #1a237e; font-size: 16px; font-weight: 700; margin-bottom: 5px;">Human-Centric Security</h5>
                        <p style="color: #555; font-size: 13px; line-height: 1.4; margin: 0;">Turning users into a strong defense line.</p>
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
                <h2 class="s6-title">Showcasing our <span class="s6-latest">email security projects</span></h2>

                <div class="s6-grid">
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Phishing Defense</span>
                            <h4>Financial Services BEC Protection</h4>
                        </div>
                    </div>
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1563013544-824ae1b704d3?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Email Encryption</span>
                            <h4>Healthcare HIPAA-Compliant Email</h4>
                        </div>
                    </div>
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Awareness Training</span>
                            <h4>Retail Chain Phishing Simulation Campaign</h4>
                        </div>
                    </div>
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Threat Remediation</span>
                            <h4>Automated Malware Cleanup Deployment</h4>
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
                        <h2 class="s7-title">Securing your communication <span class="together">together</span></h2>

                        <div class="s7-service-block">
                            <h5>Real-Time Email Threat Monitoring:</h5>
                            <p>Our AI engine continuously analyzes inbound emails, scanning for malicious intent, spoofed domains, and anomalous sender behavior to provide protection against evolving zero-hour phishing attacks.</p>
                        </div>

                        <div class="s7-service-block">
                            <h5>DMARC & Authentication Management:</h5>
                            <p>We help you implement and monitor email authentication protocols (SPF, DKIM, DMARC) to prevent domain spoofing, protect your brand reputation, and ensure legitimate email delivery.</p>
                        </div>
                    </div>

                    <div class="s7-right">
                        <div class="s7-image-wrap">
                            <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&q=80&w=800"
                                alt="Email Security Experts">
                        </div>

                        <div class="s7-service-block">
                            <h5>Security Awareness & Simulation:</h5>
                            <p>We don't just stop threats; we train your team. Our platform sends simulated phishing campaigns and provides instant training to build a security-aware culture that reduces click-through rates on real threats.</p>
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
                            style="color: rgba(255,255,255,0.8); display: block; margin-bottom: 25px; font-size: 1.1rem;">Don't let a single phishing email compromise your entire network.</span>
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
