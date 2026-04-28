@extends('home.includes.layout')
@section('title', 'Advanced VPN Setup & Remote Access Security | Mounteko')

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
                    <h2>Advanced VPN Setup & Remote Access Security for Your <span>Business</span></h2>
                    <p>Secure VPN setup services and managed remote access solutions to encrypt data, protect hybrid workforces, and ensure only authorized users reach your critical infrastructure.</p>
                    <div class="h2-btns" style="display: flex; gap: 15px; flex-wrap: wrap;">
                        <a href="{{ route('contactUs') }}" class="btn-blue-grad">Get a Free Security Assessment</a>
                        <a href="{{ route('contactUs') }}" class="btn-blue-grad" style="background: transparent; border: 2px solid white;">Talk to a VPN Expert</a>
                    </div>
                </div>
                <div class="h2-visual">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&q=80&w=600"
                        class="dashboard-img" alt="VPN Security Dashboard">
                    <div class="shield-overlay" style="display: flex; justify-content: center; align-items: center;">
                        <i class="bi bi-globe2"
                            style="font-size: 150px; color: white; filter: drop-shadow(0 0 30px rgba(77, 163, 255, 0.9));"></i>
                    </div>
                </div>
            </div>

            <div class="h2-bottom-bar">
                <div class="h2-bottom-text">
                    <div class="h2-line"></div>
                    Without a secure business VPN setup, remote employees and branch offices remain vulnerable 24x7.
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
                    <span class="service-pill active"><i class="bi bi-check2-circle" style="margin-right: 6px; font-size: 16px;"></i> VPN Setup & Remote Access</span>
                    <a href="{{ route('services.cloud-security-firewall') }}" class="service-pill">Cloud Security</a>
                    <a href="{{ route('services.network-intrusion-detection') }}" class="service-pill">Network Security</a>
                    <a href="{{ route('services.endpoint-protection') }}" class="service-pill">Threat Detection & Endpoint</a>
                    <a href="{{ route('services.security-audits') }}" class="service-pill">Security Audit</a>
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
                            class="s3-img" style="height: 380px;" alt="VPN Management Center">
                    </div>
                    <div class="img-stack-wrap">
                        <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=400"
                            class="s3-img" style="height: 180px;" alt="Secure Remote Access">
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
                        <i class="bi bi-eye-fill"></i> ABOUT US
                    </div>
                    <h2>Your trusted partner in managed VPN services and <span class="together">secure connectivity.</span></h2>
                    <p>We provide reliable, cutting-edge VPN configuration services to protect your remote workforce. From corporate VPN setup to advanced remote access security solutions, we ensure your data remains encrypted and your network invisible to threats.</p>

                    <div class="s3-feature-box">
                        <div class="s3-feature-img">
                            <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&q=80&w=300"
                                alt="VPN Security Expert">
                        </div>
                        <div class="s3-feature-text">
                            <h5>24/7 VPN monitoring & assistance</h5>
                            <p>Ensuring optimal uptime and continuous defense against emerging threats with expert assistance.</p>
                        </div>
                    </div>

                    <ul class="s3-checklist">
                        <li><i class="bi bi-check-circle-fill"></i> Enterprise VPN Solutions & Site-to-Site Setup</li>
                        <li><i class="bi bi-check-circle-fill"></i> Secure Remote Access VPN Setup & Zero Trust Policies</li>
                        <li><i class="bi bi-check-circle-fill"></i> Managed VPN Services & Performance Optimization</li>
                    </ul>

                    <div class="s3-footer">
                        <div class="s3-phone">
                            <div class="s3-phone-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <strong>(855) 526-7890</strong>
                        </div>
                        <a href="{{ route('contactUs') }}" class="btn-s3-grad">
                            More About Our VPN Service Provider Network <i class="bi bi-arrow-right-short"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 4 (WHAT WE PROVIDE) -->
        <section class="section4-services">
            <div class="container">
                <span class="s4-tagline">WHAT WE PROVIDE</span>
                <h2 class="s4-title">VPN Setup Services for <span>Today's Hybrid Workforce</span></h2>
                <p class="s4-desc">Protect your business from exposed RDP ports and insecure public Wi-Fi with our end-to-end remote access security solutions.</p>

                <div class="s4-grid">
                    <div class="s4-card card-network">
                        <div class="s4-icon-box"><i class="bi bi-shield-shaded"></i></div>
                        <h4>Business VPN Setup</h4>
                        <p>Deploying secure, encrypted tunnels for small to medium businesses connecting to cloud apps and on-premise servers.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-data">
                        <div class="s4-icon-box"><i class="bi bi-diagram-3-fill"></i></div>
                        <h4>Enterprise VPN Solutions</h4>
                        <p>Advanced site-to-site and mesh network configurations ensuring seamless, protected connectivity across global offices.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-identity">
                        <div class="s4-icon-box"><i class="bi bi-person-workspace"></i></div>
                        <h4>Remote Access VPN Setup</h4>
                        <p>Enabling secure, identity-verified access for remote employees using modern protocols like WireGuard and OpenVPN.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-monitor">
                        <div class="s4-icon-box"><i class="bi bi-radar"></i></div>
                        <h4>Secure VPN Services</h4>
                        <p>24/7 monitoring of VPN gateways with advanced SIEM integration for real-time threat detection and anomaly response.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-backup">
                        <div class="s4-icon-box"><i class="bi bi-gear-fill"></i></div>
                        <h4>Managed VPN Services</h4>
                        <p>Fully outsourced VPN configuration services including patch management, user onboarding, and bandwidth optimization.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-config">
                        <div class="s4-icon-box"><i class="bi bi-lock-fill"></i></div>
                        <h4>VPN Configuration Services</h4>
                        <p>Hardening VPN appliances and applying strict cipher suites and multi-factor authentication (MFA) across infrastructure.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 5 (WHY CHOOSE US) -->
        <section class="section5-why-us">
            <div class="container">
                <h2 class="s5-title">Why Choose Our VPN Setup & Remote Access Services?</h2>
                <div class="s5-row" style="flex-wrap: wrap; justify-content: center;">
                    <div class="s5-item" style="flex: 0 0 calc(16.66% - 10px); min-width: 150px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-activity"></i></div>
                        <h5 style="color: #1a237e; font-size: 14px; font-weight: 700; margin-bottom: 5px; white-space: nowrap; letter-spacing: -0.3px;">Proactive Monitoring</h5>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(16.66% - 10px); min-width: 150px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-shield-check"></i></div>
                        <h5 style="color: #1a237e; font-size: 14px; font-weight: 700; margin-bottom: 5px; white-space: nowrap; letter-spacing: -0.3px;">WireGuard Ready</h5>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(16.66% - 10px); min-width: 150px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-shield-lock"></i></div>
                        <h5 style="color: #1a237e; font-size: 14px; font-weight: 700; margin-bottom: 5px; white-space: nowrap; letter-spacing: -0.3px;">Zero Trust Access</h5>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(16.66% - 10px); min-width: 150px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-speedometer2"></i></div>
                        <h5 style="color: #1a237e; font-size: 14px; font-weight: 700; margin-bottom: 5px; white-space: nowrap; letter-spacing: -0.3px;">Fast Tunnel Speed</h5>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(16.66% - 10px); min-width: 150px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-person-check-fill"></i></div>
                        <h5 style="color: #1a237e; font-size: 14px; font-weight: 700; margin-bottom: 5px; white-space: nowrap; letter-spacing: -0.3px;">Single IT Partner</h5>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(16.66% - 10px); min-width: 150px; text-align: center; border-right: none;">
                        <div class="s5-icon-circle"><i class="bi bi-hdd-network"></i></div>
                        <h5 style="color: #1a237e; font-size: 14px; font-weight: 700; margin-bottom: 5px; white-space: nowrap; letter-spacing: -0.3px;">Scalable Gateway</h5>
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
                            <h5>Real-Time VPN Threat Monitoring</h5>
                            <p>Corporate VPN setup with Deep Packet Inspection (DPI) and flow analysis to detect credential stuffing attempts or suspicious geo-location logins in real-time.</p>
                        </div>

                        <div class="s7-service-block">
                            <h5>Secure Remote Access Compliance</h5>
                            <p>Remote access security solutions designed to meet GDPR, HIPAA, and PCI-DSS standards. We ensure your VPN configuration services align with strict regulatory risk management.</p>
                        </div>
                    </div>

                    <div class="s7-right">
                        <div class="s7-image-wrap">
                            <img src="https://images.unsplash.com/photo-1560264280-88b68371db39?auto=format&fit=crop&q=80&w=800"
                                alt="VPN Operations Center">
                        </div>

                        <div class="s7-service-block">
                            <h5>Identity And Access Management (IAM) for VPN</h5>
                            <p>Our remote access VPN setup integrates with Azure AD and Okta. We enforce MFA and conditional access policies before a secure VPN tunnel is even established, reducing lateral movement risk.</p>
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
                            <i class="bi bi-shield-lock-fill" style="font-size: 2rem; color: var(--primary-color); margin-bottom: 15px;"></i>
                            <h5 style="font-weight: 700; color: #1a237e; margin-bottom: 15px; font-size: 1.1rem;">CORPORATE VPN SECURITY</h5>
                            <p style="color: #555; font-size: 14px; margin: 0;">Protecting data in transit from unauthorized access and man-in-the-middle attacks on public networks.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div style="background: white; padding: 30px; border-radius: 10px; height: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                            <i class="bi bi-signpost-split-fill" style="font-size: 2rem; color: var(--primary-color); margin-bottom: 15px;"></i>
                            <h5 style="font-weight: 700; color: #1a237e; margin-bottom: 15px; font-size: 1.1rem;">SPLIT TUNNELING & ACCESS</h5>
                            <p style="color: #555; font-size: 14px; margin: 0;">Optimizing bandwidth by routing only sensitive corporate traffic through the secure VPN services gateway.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div style="background: white; padding: 30px; border-radius: 10px; height: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                            <i class="bi bi-pc-display-horizontal" style="font-size: 2rem; color: var(--primary-color); margin-bottom: 15px;"></i>
                            <h5 style="font-weight: 700; color: #1a237e; margin-bottom: 15px; font-size: 1.1rem;">ENDPOINT COMPLIANCE</h5>
                            <p style="color: #555; font-size: 14px; margin: 0;">Ensuring devices meet security posture checks before the enterprise VPN solution grants network entry.</p>
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
