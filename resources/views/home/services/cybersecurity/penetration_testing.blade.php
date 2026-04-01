@extends('home.includes.layout')
@section('title', 'Penetration Testing (Internal/External/Web/Mobile) | Mounteko Global Solutions')

@section('header-area')
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/new_home_custom.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/cybersecurity_services.css') }}">
@endsection

@section('content')
    <main id="main">
        <!-- HEADER 2 (SECTION 2) -->
        <section class="header2-section">
            <div class="h2-container">
                <div class="h2-content">
                    <h2>Advanced <span>Penetration Testing</span> to Uncover Hidden Vulnerabilities</h2>
                    <p>Comprehensive security assessments that simulate real-world attacks to identify weaknesses before malicious actors can exploit them.</p>
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
                    Without regular penetration testing, your business remains exposed to undetected security gaps that could lead to devastating breaches.
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
                    <h2>Your trusted partner in <span>identifying security weaknesses</span> before attackers do</h2>
                    <p>We combine cutting-edge tools with human expertise to deliver thorough, actionable penetration testing that strengthens your defenses and ensures regulatory compliance.</p>

                    <div class="s3-feature-box">
                        <div class="s3-feature-img">
                            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=300"
                                alt="Specialist">
                        </div>
                        <div class="s3-feature-text">
                            <h5>24/7 security assistance</h5>
                            <p>Real-time support for all penetration testing concerns, including emergency retesting, findings clarification, and remediation guidance.</p>
                        </div>
                    </div>

                    <ul class="s3-checklist">
                        <li><i class="bi bi-check-circle-fill"></i> Real-World Attack Simulation</li>
                        <li><i class="bi bi-check-circle-fill"></i> Comprehensive Remediation Roadmaps</li>
                        <li><i class="bi bi-check-circle-fill"></i> Compliance Validation (PCI DSS, HIPAA, GDPR)</li>
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
                <h2 class="s4-title">Comprehensive Penetration Testing Solutions for <span>Every Attack Surface</span></h2>
                <p class="s4-desc">Our methodology follows industry-standard frameworks (PTES, OWASP, NIST) to ensure thorough coverage of your entire digital footprint.</p>

                <div class="s4-grid">
                    <div class="s4-card card-network">
                        <div class="s4-icon-box"><i class="bi bi-hdd-network-fill"></i></div>
                        <h4>Internal Network Penetration Testing</h4>
                        <p>Simulating attacks from inside your network to identify risks posed by compromised employee accounts, malicious insiders, or lateral movement.</p>
                        <a href="#" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-data">
                        <div class="s4-icon-box"><i class="bi bi-globe"></i></div>
                        <h4>External Network Penetration Testing</h4>
                        <p>Identifying exposed vulnerabilities in your internet-facing infrastructure—firewalls, servers, and cloud instances—before external attackers can exploit them.</p>
                        <a href="#" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-identity">
                        <div class="s4-icon-box"><i class="bi bi-window-sidebar"></i></div>
                        <h4>Web Application Penetration Testing</h4>
                        <p>Deep-dive manual and automated testing of web applications to uncover OWASP Top 10 vulnerabilities like SQL injection, XSS, and broken authentication.</p>
                        <a href="#" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-monitor">
                        <div class="s4-icon-box"><i class="bi bi-phone-fill"></i></div>
                        <h4>Mobile Application Penetration Testing</h4>
                        <p>Comprehensive security assessment of iOS and Android applications, including API security, data storage vulnerabilities, and client-side protections.</p>
                        <a href="#" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-backup">
                        <div class="s4-icon-box"><i class="bi bi-code-slash"></i></div>
                        <h4>API Penetration Testing</h4>
                        <p>Specialized testing of REST, GraphQL, and SOAP APIs to prevent data exposure, broken object-level authorization, and mass assignment vulnerabilities.</p>
                        <a href="#" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-config">
                        <div class="s4-icon-box"><i class="bi bi-wifi"></i></div>
                        <h4>Wireless Network Penetration Testing</h4>
                        <p>Assessing Wi-Fi security, rogue access points, and wireless encryption weaknesses that could provide entry points to your internal network.</p>
                        <a href="#" class="btn-learn">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 5 (WHY CHOOSE US) -->
        <section class="section5-why-us">
            <div class="container">
                <h2 class="s5-title">Why Choose Our Penetration Testing Services?</h2>
                <div class="s5-row" style="flex-wrap: wrap;">
                    <div class="s5-item" style="flex: 0 0 calc(33.333% - 10px); min-width: 250px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-person-badge-fill"></i></div>
                        <h5 style="color: #1a237e; font-size: 16px; font-weight: 700; margin-bottom: 5px;">Certified Ethical Hackers</h5>
                        <p style="color: #555; font-size: 13px; line-height: 1.4; margin: 0;">OSCP, CEH, and GPEN-certified testers with real-world experience.</p>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(33.333% - 10px); min-width: 250px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-activity"></i></div>
                        <h5 style="color: #1a237e; font-size: 16px; font-weight: 700; margin-bottom: 5px;">Zero Business Disruption</h5>
                        <p style="color: #555; font-size: 13px; line-height: 1.4; margin: 0;">Non-intrusive testing methodologies that won't impact operations.</p>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(33.333% - 10px); min-width: 250px; text-align: center; border-right: none;">
                        <div class="s5-icon-circle"><i class="bi bi-file-earmark-text-fill"></i></div>
                        <h5 style="color: #1a237e; font-size: 16px; font-weight: 700; margin-bottom: 5px;">Comprehensive Reporting</h5>
                        <p style="color: #555; font-size: 13px; line-height: 1.4; margin: 0;">Executive summaries and technical guides for all audiences.</p>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(33.333% - 10px); min-width: 250px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-headset"></i></div>
                        <h5 style="color: #1a237e; font-size: 16px; font-weight: 700; margin-bottom: 5px;">Remediation Support</h5>
                        <p style="color: #555; font-size: 13px; line-height: 1.4; margin: 0;">Free consultation and re-testing to verify fixes.</p>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(33.333% - 10px); min-width: 250px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-shield-check"></i></div>
                        <h5 style="color: #1a237e; font-size: 16px; font-weight: 700; margin-bottom: 5px;">Regulatory Compliance</h5>
                        <p style="color: #555; font-size: 13px; line-height: 1.4; margin: 0;">Tests designed to meet audit requirements for PCI DSS, SOC2, and more.</p>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(33.333% - 10px); min-width: 250px; text-align: center; border-right: none;">
                        <div class="s5-icon-circle"><i class="bi bi-lightbulb-fill"></i></div>
                        <h5 style="color: #1a237e; font-size: 16px; font-weight: 700; margin-bottom: 5px;">Actionable Insights</h5>
                        <p style="color: #555; font-size: 13px; line-height: 1.4; margin: 0;">Prioritized findings with clear business impact and fix guidance.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 6 (OUR PROJECT) -->
        <section class="section6-projects">
            <div class="container">
                <div class="s6-tag">
                    <i class="bi bi-hexagon-fill"></i> RECENT ENGAGEMENTS
                </div>
                <h2 class="s6-title">Showcasing our <span class="s6-latest">latest penetration testing engagements</span></h2>

                <div class="s6-grid">
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Financial Services</span>
                            <h4>Core Banking Application Assessment</h4>
                        </div>
                    </div>
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1563013544-824ae1b704d3?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">E-commerce</span>
                            <h4>Payment Gateway API Security Testing</h4>
                        </div>
                    </div>
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Healthcare</span>
                            <h4>HIPAA Compliance Penetration Test</h4>
                        </div>
                    </div>
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Technology</span>
                            <h4>Cloud Infrastructure Security Assessment</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 7 (OUR METHODOLOGY) -->
        <section class="section7-securing">
            <div class="s7-container">
                <div class="s7-top-row">
                    <div class="s7-left">
                        <div class="s7-tag">
                            <i class="bi bi-shield-check"></i> OUR METHODOLOGY
                        </div>
                        <h2 class="s7-title">How we secure your digital assets<br><span class="world">through rigorous</span> <span class="together">testing</span></h2>

                        <div class="s7-service-block">
                            <h5>Planning And Reconnaissance:</h5>
                            <p>We define scope, gather intelligence, and understand your architecture to tailor our testing approach to your specific environment and risk profile.</p>
                        </div>

                        <div class="s7-service-block">
                            <h5>Discovery And Scanning:</h5>
                            <p>Automated and manual techniques identify open ports, running services, and potential vulnerabilities across your defined attack surface.</p>
                        </div>
                    </div>

                    <div class="s7-right">
                        <div class="s7-image-wrap">
                            <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&q=80&w=800"
                                alt="Cybersecurity Methodology">
                        </div>

                        <div class="s7-service-block">
                            <h5>Exploitation And Lateral Movement:</h5>
                            <p>Our ethical hackers safely attempt to exploit findings, move between systems, and escalate privileges—demonstrating real-world impact.</p>
                        </div>

                        <div class="s7-service-block">
                            <h5>Reporting And Remediation:</h5>
                            <p>You receive clear, actionable reports with executive summaries, technical findings, and prioritized remediation guidance to fix identified weaknesses.</p>
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
