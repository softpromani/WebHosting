@extends('home.includes.layout')
@section('title', 'Security Audit & VAPT Services | Mounteko')

@section('header-area')
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/new_home_custom.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/cybersecurity_services.css') }}">
    <style>
        /* Decrease heading sizes across the entire page */
        .h2-content h2 { font-size: 1.8rem !important; }
        .s3-content h2, .s4-title, .s5-title, .s7-title, .s8-title { font-size: 1.6rem !important; }
        .s3-feature-text h5 { font-size: 1.1rem !important; }
        .s4-card h4 { font-size: 1.1rem !important; }
        .s7-service-block h5 { font-size: 1.1rem !important; }
        .s5-item h5 { font-size: 13px !important; }
    </style>
@endsection

@section('content')
    <main id="main">

        <!-- HEADER 2 (HERO) -->
        <section class="header2-section">
            <div class="h2-container">
                <div class="h2-content">
                    <h2>Advanced Security Audit & VAPT Services to Protect Your <span>Business</span></h2>
                    <p>Proactive vulnerability assessment and penetration testing (VAPT) to identify security gaps, ensure compliance, and harden your defenses against real-world cyber threats.</p>
                    <div class="h2-btns" style="display: flex; gap: 15px; flex-wrap: wrap;">
                        <a href="{{ route('contactUs') }}" class="btn-blue-grad">Get a Free Vulnerability Scan Quote</a>
                        <a href="{{ route('contactUs') }}" class="btn-blue-grad" style="background: transparent; border: 2px solid white;">Talk to a Security Auditor</a>
                    </div>
                </div>
                <div class="h2-visual">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&q=80&w=600"
                        class="dashboard-img" alt="Security Audit Dashboard">
                    <div class="shield-overlay" style="display: flex; justify-content: center; align-items: center;">
                        <i class="bi bi-shield-check"
                            style="font-size: 150px; color: white; filter: drop-shadow(0 0 30px rgba(77, 163, 255, 0.9));"></i>
                    </div>
                </div>
            </div>

            <div class="h2-bottom-bar">
                <div class="h2-bottom-text">
                    <div class="h2-line"></div>
                    Without regular vulnerability scanning, unpatched systems remain exposed 24x7 to attackers.
                    <div class="h2-line"></div>
                </div>
            </div>
        </section>

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
                    <a href="{{ route('services.firewall-router-configuration') }}" class="service-pill">Firewall Setup</a>
                    <a href="#" class="service-pill">VPN Setup & Remote Access</a>
                    <a href="#" class="service-pill">Cloud Security</a>
                    <a href="#" class="service-pill">Network Security</a>
                    <a href="#" class="service-pill">Threat Detection & Endpoint</a>
                    <span class="service-pill active"><i class="bi bi-check2-circle" style="margin-right: 6px; font-size: 16px;"></i> Security Audit</span>
                    <a href="{{ route('services.incident_response_recovery') }}" class="service-pill">Firewall Monitoring</a>
                    <a href="{{ route('services.email-phishing-protection') }}" class="service-pill">Email & Application Security</a>
                </div>
            </div>
        </div>

        <!-- SECTION 3 (FEATURES / ABOUT US) -->
        <section class="section3-features">
            <div class="s3-container">
                <div class="s3-visual">
                    <div class="img-tall-wrap">
                        <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&q=80&w=600"
                            class="s3-img" style="height: 380px;" alt="Security Analysis Center">
                    </div>
                    <div class="img-stack-wrap">
                        <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=400"
                            class="s3-img" style="height: 180px;" alt="Vulnerability Scanning">
                        <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=400"
                            class="s3-img" style="height: 180px;" alt="Audit Server">
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
                        <i class="bi bi-eye-fill"></i> ABOUT US
                    </div>
                    <h2>Your trusted partner in <span>cybersecurity audit services</span></h2>
                    <p>As a leading security audit company, we provide rigorous vulnerability assessment services to uncover hidden risks in your network and applications, ensuring safety and regulatory compliance.</p>

                    <div class="s3-feature-box">
                        <div class="s3-feature-img">
                            <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&q=80&w=300"
                                alt="Auditor Specialist">
                        </div>
                        <div class="s3-feature-text">
                            <h5>Continuous threat exposure management</h5>
                            <p>Identifying vulnerabilities before attackers do with our comprehensive scanning and penetration testing services.</p>
                        </div>
                    </div>

                    <ul class="s3-checklist">
                        <li><i class="bi bi-check-circle-fill"></i> Network Vulnerability Scan & Discovery</li>
                        <li><i class="bi bi-check-circle-fill"></i> Penetration Testing Services (Manual & Automated)</li>
                        <li><i class="bi bi-check-circle-fill"></i> IT Security Audit & Compliance Reporting</li>
                    </ul>

                    <div class="s3-footer">
                        <div class="s3-phone">
                            <div class="s3-phone-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <strong>(855) 526-7890</strong>
                        </div>
                        <a href="{{ route('contactUs') }}" class="btn-s3-grad">
                            More About Our Audits <i class="bi bi-arrow-right-short"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 4 (WHAT WE PROVIDE) -->
        <section class="section4-services">
            <div class="container">
                <span class="s4-tagline">WHAT WE PROVIDE</span>
                <h2 class="s4-title">Robust VAPT Services for <span>Today's Threat Landscape</span></h2>
                <p class="s4-desc">Protect your business from ever-evolving cyber risks with our end-to-end vulnerability assessment and security audit solutions.</p>

                <div class="s4-grid">
                    <div class="s4-card card-network">
                        <div class="s4-icon-box"><i class="bi bi-search"></i></div>
                        <h4>Vulnerability Assessment Services</h4>
                        <p>Comprehensive scanning to identify CVEs, misconfigurations, and security gaps across your entire infrastructure.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-data">
                        <div class="s4-icon-box"><i class="bi bi-bug-fill"></i></div>
                        <h4>Penetration Testing Services</h4>
                        <p>Simulated real-world attacks by ethical hackers to exploit weaknesses and test your defense-in-depth strategy.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-identity">
                        <div class="s4-icon-box"><i class="bi bi-hdd-network"></i></div>
                        <h4>Network Vulnerability Scan</h4>
                        <p>Deep inspection of firewalls, routers, and internal networks to prevent unauthorized lateral movement.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-monitor">
                        <div class="s4-icon-box"><i class="bi bi-clipboard-check-fill"></i></div>
                        <h4>IT Security Audit Services</h4>
                        <p>Formal evaluation of policies, controls, and workflows to meet ISO 27001 and industry compliance mandates.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-backup">
                        <div class="s4-icon-box"><i class="bi bi-window-desktop"></i></div>
                        <h4>Web Application Security Audit</h4>
                        <p>In-depth analysis of web apps for OWASP Top 10 vulnerabilities including SQLi, XSS, and broken access control.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-config">
                        <div class="s4-icon-box"><i class="bi bi-cloud-check-fill"></i></div>
                        <h4>Cloud Configuration Review</h4>
                        <p>Hardening cloud environments (AWS/Azure/GCP) by identifying misconfigured storage, IAM roles, and exposed APIs.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 5 (WHY CHOOSE US) -->
        <section class="section5-why-us">
            <div class="container">
                <h2 class="s5-title">Why Choose Our Security Audit & VAPT Services?</h2>
                <div class="s5-row" style="flex-wrap: wrap; justify-content: center;">
                    <div class="s5-item" style="flex: 0 0 calc(16.66% - 10px); min-width: 150px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-radar"></i></div>
                        <h5 style="color: #1a237e; font-size: 14px; font-weight: 700; margin-bottom: 5px; white-space: nowrap; letter-spacing: -0.3px;">Proactive Scanning</h5>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(16.66% - 10px); min-width: 150px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-bar-chart-fill"></i></div>
                        <h5 style="color: #1a237e; font-size: 14px; font-weight: 700; margin-bottom: 5px; white-space: nowrap; letter-spacing: -0.3px;">Deep Risk Insights</h5>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(16.66% - 10px); min-width: 150px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-check-circle-fill"></i></div>
                        <h5 style="color: #1a237e; font-size: 14px; font-weight: 700; margin-bottom: 5px; white-space: nowrap; letter-spacing: -0.3px;">Zero False-Positives</h5>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(16.66% - 10px); min-width: 150px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-file-earmark-check-fill"></i></div>
                        <h5 style="color: #1a237e; font-size: 14px; font-weight: 700; margin-bottom: 5px; white-space: nowrap; letter-spacing: -0.3px;">Compliance Ready</h5>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(16.66% - 10px); min-width: 150px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-shield-check"></i></div>
                        <h5 style="color: #1a237e; font-size: 14px; font-weight: 700; margin-bottom: 5px; white-space: nowrap; letter-spacing: -0.3px;">Expert VAPT Team</h5>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(16.66% - 10px); min-width: 150px; text-align: center; border-right: none;">
                        <div class="s5-icon-circle"><i class="bi bi-tools"></i></div>
                        <h5 style="color: #1a237e; font-size: 14px; font-weight: 700; margin-bottom: 5px; white-space: nowrap; letter-spacing: -0.3px;">Remediation Guidance</h5>
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
                        <h2 class="s7-title">Securing your digital world with thorough <span class="together">security audit services</span></h2>

                        <div class="s7-service-block">
                            <h5>Real-Time Vulnerability Discovery</h5>
                            <p>Our vulnerability scanning services continuously monitor your external attack surface and internal assets to detect and prioritize new CVEs and exposures as soon as they emerge.</p>
                        </div>

                        <div class="s7-service-block">
                            <h5>Penetration Testing & Exploit Validation</h5>
                            <p>Going beyond automated scans, our penetration testing services simulate adversary behavior to safely exploit identified vulnerabilities and measure actual business impact.</p>
                        </div>
                    </div>

                    <div class="s7-right">
                        <div class="s7-image-wrap">
                            <img src="https://images.unsplash.com/photo-1560264280-88b68371db39?auto=format&fit=crop&q=80&w=800"
                                alt="Security Audit Center">
                        </div>

                        <div class="s7-service-block">
                            <h5>Compliance And Risk Management</h5>
                            <p>Our IT security audit services align findings with regulatory frameworks (GDPR, HIPAA, PCI-DSS). We translate technical vulnerabilities into actionable risk metrics for executive leadership.</p>
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
                            <i class="bi bi-shield-fill-check" style="font-size: 2rem; color: var(--primary-color); margin-bottom: 15px;"></i>
                            <h5 style="font-weight: 700; color: #1a237e; margin-bottom: 15px; font-size: 1.1rem;">VAPT SERVICES</h5>
                            <p style="color: #555; font-size: 14px; margin: 0;">End-to-end Vulnerability Assessment and Penetration Testing for complete cyber resilience.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div style="background: white; padding: 30px; border-radius: 10px; height: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                            <i class="bi bi-search" style="font-size: 2rem; color: var(--primary-color); margin-bottom: 15px;"></i>
                            <h5 style="font-weight: 700; color: #1a237e; margin-bottom: 15px; font-size: 1.1rem;">DEEP SCAN & ANALYSIS</h5>
                            <p style="color: #555; font-size: 14px; margin: 0;">In-depth network vulnerability scan and configuration review to eliminate hidden backdoors.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div style="background: white; padding: 30px; border-radius: 10px; height: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                            <i class="bi bi-map-fill" style="font-size: 2rem; color: var(--primary-color); margin-bottom: 15px;"></i>
                            <h5 style="font-weight: 700; color: #1a237e; margin-bottom: 15px; font-size: 1.1rem;">REMEDIATION ROADMAP</h5>
                            <p style="color: #555; font-size: 14px; margin: 0;">Clear, prioritized action plans provided by your dedicated security audit company partner.</p>
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
                        <h2 class="s8-title">Protect your business from sophisticated cyber threats today!</h2>
                        <span
                            style="color: rgba(255,255,255,0.8); display: block; margin-bottom: 25px; font-size: 1.1rem;">Don't let hidden vulnerabilities and unpatched systems compromise your entire network infrastructure.</span>
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
