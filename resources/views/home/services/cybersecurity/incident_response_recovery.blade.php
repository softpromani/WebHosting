@extends('home.includes.layout')
@section('title', 'Incident Response & Recovery Services | Mounteko')

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
                    <h2>Rapid, Strategic Incident Response to <span>Protect Your Business</span></h2>
                    <p>When a security breach occurs, every second counts. Our Incident Response & Recovery services provide you with a trusted, expert-led team to contain threats, eradicate risk, and restore normal operations—minimizing damage and downtime.</p>
                    <div class="h2-btns">
                        <a href="{{ route('contactUs') }}" class="btn-blue-grad">Get free incident response assessment</a>
                    </div>
                </div>
                <div class="h2-visual">
                    <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=600"
                        class="dashboard-img" alt="Incident Response Dashboard">
                    <div class="shield-overlay" style="display: flex; justify-content: center; align-items: center;">
                        <i class="bi bi-shield-exclamation"
                            style="font-size: 150px; color: white; filter: drop-shadow(0 0 30px rgba(77, 163, 255, 0.9));"></i>
                    </div>
                </div>
            </div>

            <div class="h2-bottom-bar">
                <div class="h2-bottom-text">
                    <div class="h2-line"></div>
                    Without a structured response plan, a single incident can lead to irreversible data loss and financial damage.
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
                    <a href="#" class="service-pill">LAN, SD-WAN, Wi-Fi</a>
                    <a href="#" class="service-pill">Cloud Optimization</a>
                    <a href="#" class="service-pill">Network Designs Optimization</a>
                    <a href="#" class="service-pill">SLA-Driven Services</a>
                    <a href="#" class="service-pill">24x7 Monitoring & Support</a>
                    <a href="#" class="service-pill">Certified IT Experts</a>
                    <a href="#" class="service-pill">Data Security & Compliance</a>
                    <span class="service-pill active"><i class="bi bi-check2-circle" style="margin-right: 6px; font-size: 16px;"></i> Incident Response & Recovery</span>
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
                        <i class="bi bi-eye-fill"></i> Your Partner in Cyber Resilience
                    </div>
                    <h2>We provide calm, decisive action in the <span>face of a crisis</span></h2>
                    <p>Our proven incident response framework ensures your business is prepared to handle, recover from, and learn from any security event.</p>

                    <div class="s3-feature-box">
                        <div class="s3-feature-img">
                            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=300"
                                alt="Specialist">
                        </div>
                        <div class="s3-feature-text">
                            <h5>24/7 emergency breach response</h5>
                            <p>Immediate access to security experts for containment, eradication, and recovery guidance, available around the clock.</p>
                        </div>
                    </div>

                    <ul class="s3-checklist">
                        <li><i class="bi bi-check-circle-fill"></i> Forensic Analysis & Investigation</li>
                        <li><i class="bi bi-check-circle-fill"></i> Ransomware Containment & Negotiation Support</li>
                        <li><i class="bi bi-check-circle-fill"></i> Post-Incident Reporting & Remediation</li>
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
                <h2 class="s4-title">Comprehensive Incident Response <span>& Recovery Services</span></h2>
                <p class="s4-desc">Prepare for the inevitable and build a resilient security posture with our end-to-end incident management solutions.</p>

                <div class="s4-grid">
                    <div class="s4-card card-network">
                        <div class="s4-icon-box"><i class="bi bi-journal-check"></i></div>
                        <h4>Incident Response Planning</h4>
                        <p>Develop a customized, actionable incident response plan (IRP) tailored to your business infrastructure and compliance needs.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-data">
                        <div class="s4-icon-box"><i class="bi bi-search"></i></div>
                        <h4>Digital Forensics</h4>
                        <p>Conduct a deep-dive investigation to understand the root cause, scope, and impact of a breach using advanced forensic tools.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-identity">
                        <div class="s4-icon-box"><i class="bi bi-bug-fill"></i></div>
                        <h4>Malware & Ransomware Remediation</h4>
                        <p>Isolate and remove advanced threats, including ransomware, and restore systems from clean backups to minimize disruption.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-monitor">
                        <div class="s4-icon-box"><i class="bi bi-arrow-repeat"></i></div>
                        <h4>Business Continuity & Recovery</h4>
                        <p>Rapidly restore critical systems and data to ensure business operations can resume with minimal interruption after an outage or attack.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-backup">
                        <div class="s4-icon-box"><i class="bi bi-megaphone-fill"></i></div>
                        <h4>Crisis Communication Management</h4>
                        <p>Manage internal and external communications during a breach, ensuring compliance with regulatory disclosure requirements.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-config">
                        <div class="s4-icon-box"><i class="bi bi-file-earmark-bar-graph-fill"></i></div>
                        <h4>Post-Incident Analysis</h4>
                        <p>Perform a thorough post-mortem analysis to identify lessons learned and strengthen your security posture against future attacks.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
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
                        <div class="s5-icon-circle"><i class="bi bi-clock-history"></i></div>
                        <span>24/7 Availability</span>
                    </div>
                    <div class="s5-item">
                        <div class="s5-icon-circle"><i class="bi bi-person-badge-fill"></i></div>
                        <span>Certified Incident Handlers</span>
                    </div>
                    <div class="s5-item">
                        <div class="s5-icon-circle"><i class="bi bi-award-fill"></i></div>
                        <span>Proven Methodologies</span>
                    </div>
                    <div class="s5-item">
                        <div class="s5-icon-circle"><i class="bi bi-arrow-down-circle-fill"></i></div>
                        <span>Minimized Downtime</span>
                    </div>
                    <div class="s5-item">
                        <div class="s5-icon-circle"><i class="bi bi-card-checklist"></i></div>
                        <span>Clear, Actionable Reporting</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 6 (OUR PROJECT) -->
        <section class="section6-projects">
            <div class="container">
                <div class="s6-tag">
                    <i class="bi bi-hexagon-fill"></i> OUR PROJECTS
                </div>
                <h2 class="s6-title">Showcasing our <span class="s6-latest">incident response expertise</span></h2>

                <div class="s6-grid">
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Ransomware Recovery</span>
                            <h4>Rapid Restoration for Logistics Firm</h4>
                            <p style="color: rgba(255,255,255,0.9); font-size: 13px; font-weight: 400; line-height: 1.5; margin: 8px 0 0 0;">Successfully contained a ransomware outbreak and restored 100% of encrypted critical systems within 48 hours.</p>
                        </div>
                    </div>
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1563013544-824ae1b704d3?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Digital Forensics</span>
                            <h4>Forensic Investigation for Financial Services</h4>
                            <p style="color: rgba(255,255,255,0.9); font-size: 13px; font-weight: 400; line-height: 1.5; margin: 8px 0 0 0;">Conducted a comprehensive forensic analysis to uncover a sophisticated data exfiltration path for a regional bank.</p>
                        </div>
                    </div>
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Crisis Management</span>
                            <h4>Breach Communication for Healthcare Provider</h4>
                            <p style="color: rgba(255,255,255,0.9); font-size: 13px; font-weight: 400; line-height: 1.5; margin: 8px 0 0 0;">Managed all disclosure communications and regulatory reporting for a healthcare data breach, ensuring full HIPAA compliance.</p>
                        </div>
                    </div>
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Business Continuity</span>
                            <h4>Recovery Plan Validation for E-commerce</h4>
                            <p style="color: rgba(255,255,255,0.9); font-size: 13px; font-weight: 400; line-height: 1.5; margin: 8px 0 0 0;">Simulated a full system outage to test and validate the business continuity plan for a major online retailer.</p>
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
                            <i class="bi bi-shield-check"></i> OUR APPROACH
                        </div>
                        <h2 class="s7-title">Securing your digital future <span class="together">with resilience</span></h2>

                        <div class="s7-service-block">
                            <h5>Preparation is Key:</h5>
                            <p>We don't just respond; we prepare. We help you build and test your incident response plan before a crisis hits, ensuring your team knows exactly what to do when every minute matters.</p>
                        </div>

                        <div class="s7-service-block">
                            <h5>Containment and Eradication:</h5>
                            <p>Our experts act immediately to contain the threat, prevent lateral movement, and completely eradicate malicious actors from your environment, stopping the attack in its tracks.</p>
                        </div>
                    </div>

                    <div class="s7-right">
                        <div class="s7-image-wrap">
                            <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&q=80&w=800"
                                alt="Email Security Experts">
                        </div>

                        <div class="s7-service-block">
                            <h5>Recovery and Resilience:</h5>
                            <p>We go beyond restoration. We help you recover your data and systems while implementing improved controls to prevent recurrence, making your business stronger and more resilient than before.</p>
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
                        <h2 class="s8-title">Protect your business with a rapid response plan today!</h2>
                        <span
                            style="color: rgba(255,255,255,0.8); display: block; margin-bottom: 25px; font-size: 1.1rem;">Ensure unwavering protection for your digital assets—day and night.</span>
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
