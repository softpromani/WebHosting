@extends('home.includes.layout')
@section('title', 'Security Operations Center (SOC) Setup & Monitoring | Mounteko')

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
                    <h2>Fortify Your Business with 24/7 Expert <span>SOC Setup & Monitoring</span></h2>
                    <p>Transform your security operations with a dedicated Security Operations Center. We design, deploy, and manage advanced SOCs that provide continuous threat monitoring, intelligent incident response, and unwavering protection for your digital assets—day and night.</p>
                    <div class="h2-btns">
                        <a href="{{ route('contactUs') }}" class="btn-blue-grad">Get free SOC Assessment</a>
                    </div>
                </div>
                <div class="h2-visual">
                    <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=600"
                        class="dashboard-img" alt="SOC Dashboard">
                    <div class="shield-overlay" style="display: flex; justify-content: center; align-items: center;">
                        <i class="bi bi-display"
                            style="font-size: 150px; color: white; filter: drop-shadow(0 0 30px rgba(77, 163, 255, 0.9));"></i>
                    </div>
                </div>
            </div>

            <div class="h2-bottom-bar">
                <div class="h2-bottom-text">
                    <div class="h2-line"></div>
                    Without a dedicated SOC, threats can go undetected for months.
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
                    <span class="service-pill active"><i class="bi bi-check2-circle" style="margin-right: 6px; font-size: 16px;"></i> 24x7 Monitoring & Support</span>
                    <a href="#" class="service-pill">Certified IT Experts</a>
                    <a href="#" class="service-pill">Data Security & Compliance</a>
                    <a href="{{ route('services.email-phishing-protection') }}" class="service-pill">Email & Phishing Protection</a>
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
                    <h2>Your Partner in Proactive Defense and <span>Security Operations</span></h2>
                    <p>We don't just monitor alerts; we build security operations tailored to your business. From designing your ideal SOC architecture to providing round-the-clock managed detection and response, our experts act as an extension of your team, ensuring you're always protected against the most sophisticated cyber threats.</p>

                    <div class="s3-feature-box">
                        <div class="s3-feature-img">
                            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=300"
                                alt="Specialist">
                        </div>
                        <div class="s3-feature-text">
                            <h5>24/7 Security Operations Center</h5>
                            <p>Continuous coverage with real-time analysis, threat hunting, and rapid incident response from our team of certified security analysts.</p>
                        </div>
                    </div>

                    <ul class="s3-checklist">
                        <li><i class="bi bi-check-circle-fill"></i> 24/7 Threat Monitoring & Detection</li>
                        <li><i class="bi bi-check-circle-fill"></i> Incident Response & Remediation</li>
                        <li><i class="bi bi-check-circle-fill"></i> Security Information & Event Management (SIEM)</li>
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
                <h2 class="s4-title">Comprehensive SOC Setup and <span>Management Services</span></h2>
                <p class="s4-desc">Establish a world-class security operations capability without the massive overhead. We handle everything from initial architecture to continuous optimization.</p>

                <div class="s4-grid">
                    <div class="s4-card card-network">
                        <div class="s4-icon-box"><i class="bi bi-diagram-3-fill"></i></div>
                        <h4>SOC Design & Architecture</h4>
                        <p>Planning and building a customized SOC framework tailored to your business size, industry risks, and specific security goals.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-data">
                        <div class="s4-icon-box"><i class="bi bi-server"></i></div>
                        <h4>SIEM Implementation</h4>
                        <p>Deploying and fine-tuning advanced Security Information and Event Management (SIEM) systems to aggregate and correlate log data for actionable insights.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-identity">
                        <div class="s4-icon-box"><i class="bi bi-eye"></i></div>
                        <h4>24/7 Threat Monitoring</h4>
                        <p>Continuous, real-time surveillance of your networks, endpoints, and cloud environments by our security analysts to detect anomalies and potential breaches.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-monitor">
                        <div class="s4-icon-box"><i class="bi bi-crosshair"></i></div>
                        <h4>Threat Hunting</h4>
                        <p>Proactively searching your networks and data for advanced threats that may have evaded existing security solutions, stopping attacks before they cause damage.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-backup">
                        <div class="s4-icon-box"><i class="bi bi-exclamation-triangle-fill"></i></div>
                        <h4>Incident Response Services</h4>
                        <p>Providing immediate, expert-led response to security incidents to contain threats, eradicate malicious activity, and recover your systems quickly.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-config">
                        <div class="s4-icon-box"><i class="bi bi-sliders"></i></div>
                        <h4>SOC Optimization</h4>
                        <p>Continuously reviewing and tuning your SOC tools, playbooks, and processes to improve detection accuracy and operational efficiency.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 5 (WHY CHOOSE US) -->
        <section class="section5-why-us">
            <div class="container">
                <h2 class="s5-title">Why Choose Our SOC Services?</h2>
                <div class="s5-row">
                    <div class="s5-item">
                        <div class="s5-icon-circle"><i class="bi bi-search"></i></div>
                        <span>Proactive Threat Hunting</span>
                    </div>
                    <div class="s5-item">
                        <div class="s5-icon-circle"><i class="bi bi-wallet2"></i></div>
                        <span>Cost-Effective Operations</span>
                    </div>
                    <div class="s5-item">
                        <div class="s5-icon-circle"><i class="bi bi-graph-up-arrow"></i></div>
                        <span>Scalable Solutions</span>
                    </div>
                    <div class="s5-item">
                        <div class="s5-icon-circle"><i class="bi bi-lightning-charge-fill"></i></div>
                        <span>Rapid Response Times</span>
                    </div>
                    <div class="s5-item">
                        <div class="s5-icon-circle"><i class="bi bi-shield-lock-fill"></i></div>
                        <span>Certified Security Experts</span>
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
                <h2 class="s6-title">Showcasing Our <span class="s6-latest">SOC Implementation Projects</span></h2>

                <div class="s6-grid">
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Financial Services</span>
                            <h4>Real-Time Fraud & Intrusion Detection</h4>
                            <p style="color: rgba(255,255,255,0.9); font-size: 13px; font-weight: 400; line-height: 1.5; margin: 8px 0 0 0;">Deployed a 24/7 SOC with advanced UEBA to detect and stop internal and external threats for a regional bank.</p>
                        </div>
                    </div>
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1563013544-824ae1b704d3?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Healthcare</span>
                            <h4>Compliance-Driven SOC for HIPAA</h4>
                            <p style="color: rgba(255,255,255,0.9); font-size: 13px; font-weight: 400; line-height: 1.5; margin: 8px 0 0 0;">Designed and implemented a secure SOC architecture to ensure continuous monitoring and compliance for a large hospital network.</p>
                        </div>
                    </div>
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">E-commerce</span>
                            <h4>24/7 Protection During Peak Traffic</h4>
                            <p style="color: rgba(255,255,255,0.9); font-size: 13px; font-weight: 400; line-height: 1.5; margin: 8px 0 0 0;">Established a managed SOC to handle a 300% increase in transactions during holiday seasons without security incidents.</p>
                        </div>
                    </div>
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Technology</span>
                            <h4>Global Threat Monitoring for SaaS Provider</h4>
                            <p style="color: rgba(255,255,255,0.9); font-size: 13px; font-weight: 400; line-height: 1.5; margin: 8px 0 0 0;">Implemented a cloud-native SIEM and 24/7 monitoring for a fast-growing B2B SaaS company.</p>
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
                            <i class="bi bi-shield-check"></i> OUR SECURITY OPERATIONS
                        </div>
                        <h2 class="s7-title">Elevating your security posture <span class="together">together.</span></h2>

                        <div class="s7-service-block">
                            <h5>24/7 Human-Led Analysis:</h5>
                            <p>Our SOC service combines advanced technology with expert human analysis. We don't just rely on automation; our certified analysts investigate, validate, and respond to every genuine threat in real-time, reducing alert fatigue and false positives.</p>
                        </div>

                        <div class="s7-service-block">
                            <h5>Threat Intelligence Integration:</h5>
                            <p>We power our monitoring with up-to-the-minute global threat intelligence. This allows us to correlate your environment's activity with known attacker tactics, techniques, and procedures (TTPs) to stay ahead of emerging risks.</p>
                        </div>
                    </div>

                    <div class="s7-right">
                        <div class="s7-image-wrap">
                            <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&q=80&w=800"
                                alt="Email Security Experts">
                        </div>

                        <div class="s7-service-block">
                            <h5>Customized Playbooks & Response:</h5>
                            <p>Your business is unique, so your incident response should be too. We develop custom response playbooks tailored to your infrastructure and critical assets, ensuring a fast, precise, and effective reaction to any security event.</p>
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
                        <h2 class="s8-title">Ready to see the difference a dedicated SOC can make?</h2>
                        <span
                            style="color: rgba(255,255,255,0.8); display: block; margin-bottom: 25px; font-size: 1.1rem;">Ensure unwavering protection for your digital assets—day and night.</span>
                        <div class="s8-contacts">
                            <div class="s8-contact-item">
                                <i class="bi bi-telephone-outbound"></i>
                                <div class="s8-contact-info">
                                    <span>Get in touch now</span>
                                    <strong>(855) 526-7890</strong>
                                </div>
                            </div>
                            <div class="s8-sep"></div>
                            <div class="s8-contact-item">
                                <i class="bi bi-envelope-at"></i>
                                <div class="s8-contact-info">
                                    <span>Send e-mail</span>
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
