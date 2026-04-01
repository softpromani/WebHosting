@extends('home.includes.layout')
@section('title', 'Network Intrusion Detection and Prevention System (IDS/IPS) | Mounteko')

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
                    <h2>Proactive Defense Against Cyber Threats with <span>Intelligent IDS/IPS</span></h2>
                    <p>In today's hyper-connected landscape, cyber threats are constantly evolving, seeking to exploit any
                        weakness in your network perimeter. A traditional firewall is no longer enough. Our Intelligent
                        Network Intrusion Detection and Prevention Systems (IDS/IPS) provide the advanced, real-time
                        visibility and automated defense you need. We don't just monitor your traffic; we actively analyze
                        and block malicious activity before it can disrupt your operations or compromise sensitive data.</p>
                    <div class="h2-btns">
                        <a href="{{ route('contactUs') }}" class="btn-blue-grad">Get free cyber security assessment</a>
                    </div>
                </div>
                <div class="h2-visual">
                    <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=600"
                        class="dashboard-img" alt="Dashboard">
                    <div class="shield-overlay" style="display: flex; justify-content: center; align-items: center;">
                        <i class="bi bi-shield-shaded"
                            style="font-size: 150px; color: white; filter: drop-shadow(0 0 30px rgba(77, 163, 255, 0.9));"></i>
                    </div>
                </div>
            </div>

            <div class="h2-bottom-bar">
                <div class="h2-bottom-text">
                    <div class="h2-line"></div>
                    Without 24/7 network surveillance, you're inviting attackers in.
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
                        <i class="bi bi-eye-fill"></i> About Us
                    </div>
                    <h2>Your 24/7 Digital Security Guard: <span>Always Watching, Always Ready</span></h2>
                    <p>Think of our IDS/IPS as a sophisticated security guard for your digital infrastructure, constantly
                        monitoring for suspicious behavior and policy violations. We combine cutting-edge technology with
                        expert analysis to ensure your network remains resilient against both known and emerging threats.
                    </p>

                    <div class="s3-feature-box">
                        <div class="s3-feature-img">
                            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=300"
                                alt="Specialist">
                        </div>
                        <div class="s3-feature-text">
                            <h5>24/7 Threat Detection & Prevention</h5>
                            <p>Continuous, real-time analysis of network traffic to automatically detect and block
                                intrusions, exploits, and malware.</p>
                        </div>
                    </div>

                    <ul class="s3-checklist">
                        <li><i class="bi bi-check-circle-fill"></i> Signature-Based Detection: Instantly identifies known attack patterns.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Anomaly-Based Analysis: Uses AI to detect zero-day threats and unusual behavior.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Automated Prevention: Actively drops malicious packets and resets connections.</li>
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
                <h2 class="s4-title">Robust IDS/IPS Solutions for <span>Impenetrable Network Defense</span></h2>
                <p class="s4-desc">We deliver an end-to-end intrusion management solution tailored to your specific network
                    environment, ensuring comprehensive protection without hindering performance.</p>

                <div class="s4-grid">
                    <div class="s4-card card-network">
                        <div class="s4-icon-box"><i class="bi bi-search"></i></div>
                        <h4>Deep Packet Inspection</h4>
                        <p>We analyze not just packet headers, but the actual data payload. This allows us to detect
                            sophisticated attacks hidden within seemingly legitimate traffic, from stealthy malware to
                            complex application-layer exploits.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-data">
                        <div class="s4-icon-box"><i class="bi bi-bar-chart-line-fill"></i></div>
                        <h4>Real-Time Traffic Analysis & Logging</h4>
                        <p>Our systems provide complete visibility into your network traffic flows. We capture and correlate
                            detailed logs, offering actionable insights for threat hunting, forensic analysis, and
                            compliance reporting.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-identity">
                        <div class="s4-icon-box"><i class="bi bi-globe2"></i></div>
                        <h4>Intelligent Threat Intelligence Integration</h4>
                        <p>Our IDS/IPS is constantly updated with global threat intelligence feeds. This ensures your
                            defenses are immediately aware of the latest Command & Control servers, malicious IPs, and
                            emerging attack vectors worldwide.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-monitor">
                        <div class="s4-icon-box"><i class="bi bi-sliders"></i></div>
                        <h4>Adaptive Prevention Policies</h4>
                        <p>We don't apply a one-size-fits-all rule set. Our experts work with you to define and tune
                            granular prevention policies. This adaptive approach minimizes false positives while ensuring
                            maximum protection for your critical assets.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-backup">
                        <div class="s4-icon-box"><i class="bi bi-cloud-check-fill"></i></div>
                        <h4>Seamless Deployment & Management</h4>
                        <p>Whether your infrastructure is on-premise, in the cloud, or hybrid, we can deploy and manage the
                            right IDS/IPS solution for you. Benefit from our expertise without straining your internal IT
                            resources.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-config">
                        <div class="s4-icon-box"><i class="bi bi-file-earmark-lock-fill"></i></div>
                        <h4>Compliance & Reporting Automation</h4>
                        <p>Meeting regulatory standards like PCI DSS, HIPAA, or GDPR often requires robust intrusion
                            detection. Our service automates the generation of compliance reports, providing clear evidence
                            of your proactive security measures.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 5 (WHY CHOOSE US) -->
        <section class="section5-why-us">
            <div class="container">
                <h2 class="s5-title">Why Choose Our IDS/IPS Service?</h2>
                <div class="s5-row" style="flex-wrap: wrap;">
                    <div class="s5-item" style="flex: 0 0 calc(33.333% - 10px); min-width: 250px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-shield-fill-x"></i></div>
                        <h5 style="color: #1a237e; font-size: 16px; font-weight: 700; margin-bottom: 5px;">Proactive Threat Prevention</h5>
                        <p style="color: #555; font-size: 13px; line-height: 1.4; margin: 0;">Stop attacks, don't just detect them.</p>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(33.333% - 10px); min-width: 250px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-bell-slash-fill"></i></div>
                        <h5 style="color: #1a237e; font-size: 16px; font-weight: 700; margin-bottom: 5px;">Reduced Alert Fatigue</h5>
                        <p style="color: #555; font-size: 13px; line-height: 1.4; margin: 0;">Our expert tuning ensures you're alerted only on genuine threats.</p>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(33.333% - 10px); min-width: 250px; text-align: center; border-right: none;">
                        <div class="s5-icon-circle"><i class="bi bi-clock-history"></i></div>
                        <h5 style="color: #1a237e; font-size: 16px; font-weight: 700; margin-bottom: 5px;">24/7 Expert Monitoring</h5>
                        <p style="color: #555; font-size: 13px; line-height: 1.4; margin: 0;">Our Security Operations Center (SOC) backs up your automated defenses.</p>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(33.333% - 10px); min-width: 250px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-speedometer2"></i></div>
                        <h5 style="color: #1a237e; font-size: 16px; font-weight: 700; margin-bottom: 5px;">Performance Optimized</h5>
                        <p style="color: #555; font-size: 13px; line-height: 1.4; margin: 0;">We ensure security measures don't slow down your business.</p>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(33.333% - 10px); min-width: 250px; text-align: center;">
                        <div class="s5-icon-circle"><i class="bi bi-graph-up-arrow"></i></div>
                        <h5 style="color: #1a237e; font-size: 16px; font-weight: 700; margin-bottom: 5px;">Scalable Protection</h5>
                        <p style="color: #555; font-size: 13px; line-height: 1.4; margin: 0;">Our solutions grow and adapt with your network.</p>
                    </div>
                    <div class="s5-item" style="flex: 0 0 calc(33.333% - 10px); min-width: 250px; text-align: center; border-right: none;">
                        <div class="s5-icon-circle"><i class="bi bi-person-check-fill"></i></div>
                        <h5 style="color: #1a237e; font-size: 16px; font-weight: 700; margin-bottom: 5px;">A True Security Partner</h5>
                        <p style="color: #555; font-size: 13px; line-height: 1.4; margin: 0;">Expertise, technology, and support to fortify your network.</p>
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
                <h2 class="s6-title">Showcasing Our <span class="s6-latest">IDS/IPS Implementation Projects</span></h2>

                <div class="s6-grid">
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Network Security</span>
                            <h4>Global E-Commerce Platform Hardening: Deployed a cloud-native IDS/IPS to protect a
                                high-volume e-commerce site from DDoS attacks and payment data skimmers, achieving 99.99%
                                threat block rate.</h4>
                        </div>
                    </div>
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1563013544-824ae1b704d3?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Financial Services</span>
                            <h4>Zero-Day Exploit Prevention for a Bank: Implemented an AI-driven anomaly detection system
                                that identified and blocked a novel ransomware strain targeting the bank's internal network,
                                preventing a major breach.</h4>
                        </div>
                    </div>
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Healthcare</span>
                            <h4>Compliance-Driven IDS for a Hospital Network: Deployed and tuned a high-performance IDS/IPS
                                to secure patient records and medical devices, ensuring full compliance with HIPAA audit
                                requirements.</h4>
                        </div>
                    </div>
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Technology</span>
                            <h4>IoT Security Enhancement for a Smart Manufacturer: Integrated an IPS to automatically
                                segment and protect a factory's IoT devices from being used as an entry point for broader
                                corporate network attacks.</h4>
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
                            <h5>Real-Time Anomaly Detection:</h5>
                            <p>Our advanced IDS/IPS continuously analyzes network traffic, user behavior, and system
                                activity using machine learning. It establishes a baseline of "normal" operations and
                                instantly flags deviations, allowing us to detect and respond to potential zero-day threats
                                and sophisticated intrusions as they occur.</p>
                        </div>

                        <div class="s7-service-block">
                            <h5>Deep Packet Inspection & Analysis:</h5>
                            <p>We go beyond simple port and protocol analysis. Our systems perform deep packet inspection
                                (DPI) to examine the actual data within network traffic. This uncovers hidden malware,
                                exploits, and data exfiltration attempts that would otherwise bypass traditional security
                                measures.</p>
                        </div>
                    </div>

                    <div class="s7-right">
                        <div class="s7-image-wrap">
                            <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&q=80&w=800"
                                alt="Cybersecurity Team">
                        </div>

                        <div class="s7-service-block">
                            <h5>Automated Threat Prevention:</h5>
                            <p>When a threat is detected, our system doesn't just raise an alarm—it acts. Through automated
                                prevention policies, it can immediately block malicious IPs, drop suspicious packets, and
                                terminate harmful sessions, containing the threat in milliseconds without manual
                                intervention.</p>
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
                        <h2 class="s8-title">Fortify your network's first line of defense today!</h2>
                        <span
                            style="color: rgba(255,255,255,0.8); display: block; margin-bottom: 25px; font-size: 1.1rem;">Get
                            expert protection against evolving cyber threats.</span>
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