@extends('home.includes.layout')
@section('title', 'Endpoint Protection & Antivirus Solutions | Mounteko Global Solutions')

@section('header-area')
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/new_home_custom.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/cybersecurity_services.css') }}">
@endsection

@section('content')
    <main id="main">
        <!-- HEADER 2 (HERO SECTION) -->
        <section class="header2-section">
            <div class="h2-container">
                <div class="h2-content">
                    <h2>Next-Generation <span>Endpoint Protection</span> to Secure Your Devices</h2>
                    <p>Traditional antivirus is no longer enough. Our endpoint protection solutions provide advanced,
                        multilayered defense for every device—laptops, desktops, servers, and mobile devices—to stop modern
                        threats before they compromise your business.</p>
                    <div class="h2-btns">
                        <a href="{{ route('contactUs') }}" class="btn-blue-grad">Get free endpoint security assessment</a>
                        <a href="{{ route('contactUs') }}" class="btn-white-grad">Talk to a Security expert</a>
                    </div>
                </div>
                <div class="h2-visual">
                    <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=600"
                        class="dashboard-img" alt="Endpoint Security">
                    <div class="shield-overlay" style="display: flex; justify-content: center; align-items: center;">
                        <i class="bi bi-laptop"
                            style="font-size: 150px; color: white; filter: drop-shadow(0 0 30px rgba(77, 163, 255, 0.9));"></i>
                    </div>
                </div>
            </div>

            <div class="h2-bottom-bar">
                <div class="h2-bottom-text">
                    <div class="h2-line"></div>
                    Every unsecured endpoint is a potential entry point for a data breach.
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
                    <h2>Your partner in <span>modern endpoint defense</span></h2>
                    <p>We deliver intelligent, next-generation endpoint security that goes beyond signature-based detection,
                        using AI and behavior analysis to protect your devices and data from known and unknown threats.</p>

                    <div class="s3-feature-box">
                        <div class="s3-feature-img">
                            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=300"
                                alt="Specialist">
                        </div>
                        <div class="s3-feature-text">
                            <h5>24/7 endpoint monitoring & response</h5>
                            <p>Continuous surveillance of all endpoints to detect, investigate, and neutralize threats in
                                real-time, minimizing potential damage.</p>
                        </div>
                    </div>

                    <ul class="s3-checklist">
                        <li><i class="bi bi-check-circle-fill"></i> Next-Gen Antivirus (NGAV)</li>
                        <li><i class="bi bi-check-circle-fill"></i> Endpoint Detection & Response (EDR)</li>
                        <li><i class="bi bi-check-circle-fill"></i> Automated Threat Containment</li>
                    </ul>

                    <div class="s3-footer">
                        <div class="s3-phone">
                            <div class="s3-phone-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <strong>{{ settingValue('phone') }}</strong>
                        </div>
                        <a href="{{ route('contactUs') }}" class="btn-s3-grad">
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
                <h2 class="s4-title">Comprehensive Endpoint Protection for <span>Today's Distributed Workforce</span></h2>
                <p class="s4-desc">Secure every device, whether in the office or remote, with our complete suite of endpoint
                    security services.</p>

                <div class="s4-grid">
                    <div class="s4-card card-network">
                        <div class="s4-icon-box"><i class="bi bi-shield-shaded"></i></div>
                        <h4>NGAV & Anti-Malware</h4>
                        <p>Blocks known and unknown malware, including viruses, worms, and Trojans, using AI-driven analysis
                            instead of traditional signatures.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-data">
                        <div class="s4-icon-box"><i class="bi bi-search"></i></div>
                        <h4>Endpoint Detection & Response (EDR)</h4>
                        <p>Provides deep visibility into endpoint activities to detect, investigate, and remediate
                            sophisticated threats and incidents.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-identity">
                        <div class="s4-icon-box"><i class="bi bi-file-earmark-lock"></i></div>
                        <h4>Ransomware Protection</h4>
                        <p>Employs behavior monitoring and rollback capabilities to prevent file encryption and quickly
                            recover from ransomware attacks.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-monitor">
                        <div class="s4-icon-box"><i class="bi bi-shield-plus"></i></div>
                        <h4>Patch & Vulnerability Management</h4>
                        <p>Automates the patching of OS and third-party applications to close security gaps and reduce the
                            attack surface.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-backup">
                        <div class="s4-icon-box"><i class="bi bi-phone"></i></div>
                        <h4>Mobile Threat Defense (MTD)</h4>
                        <p>Extends protection to smartphones and tablets, defending against malicious apps, network attacks,
                            and OS exploits.</p>
                        <a href="{{ route('contactUs') }}" class="btn-learn">Learn More</a>
                    </div>
                    <div class="s4-card card-config">
                        <div class="s4-icon-box"><i class="bi bi-usb-drive"></i></div>
                        <h4>Device Control & Application Allowlisting</h4>
                        <p>Manages and restricts the use of peripheral devices (like USBs) and controls which applications
                            can run on endpoints.</p>
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
                        <div class="s5-icon-circle"><i class="bi bi-cpu-fill"></i></div>
                        <span>AI-Powered Protection</span>
                    </div>
                    <div class="s5-item">
                        <div class="s5-icon-circle"><i class="bi bi-speedometer2"></i></div>
                        <span>Minimal Performance Impact</span>
                    </div>
                    <div class="s5-item">
                        <div class="s5-icon-circle"><i class="bi bi-grid-1x2-fill"></i></div>
                        <span>Centralized Management</span>
                    </div>
                    <div class="s5-item">
                        <div class="s5-icon-circle"><i class="bi bi-clock-history"></i></div>
                        <span>24/7 Security Operations</span>
                    </div>
                    <div class="s5-item">
                        <div class="s5-icon-circle"><i class="bi bi-graph-up-arrow"></i></div>
                        <span>Scalable for Growth</span>
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
                <h2 class="s6-title">Showcasing our <span class="s6-latest">endpoint security implementations</span></h2>

                <div class="s6-grid">
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Remote Workforce</span>
                            <h4>Secure Endpoint Rollout for 500+ Remote Employees</h4>
                        </div>
                    </div>
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1563013544-824ae1b704d3?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Ransomware Defense</span>
                            <h4>Automated Containment of a Zero-Day Malware Outbreak</h4>
                        </div>
                    </div>
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Compliance</span>
                            <h4>Endpoint Hardening for Financial Services Compliance</h4>
                        </div>
                    </div>
                    <div class="s6-card"
                        style="background-image: url('https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=800');">
                        <div class="s6-info">
                            <span class="s6-cat">Legacy Systems</span>
                            <h4>Protecting Critical End-of-Life Systems with Virtual Patching</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SECTION 7 (SECURING WORLD) -->
        <section class="section7-securing">
            <div class="s7-container">
                <div class="s7-top-row">
                    <div class="s7-left">
                        <div class="s7-tag">
                            <i class="bi bi-shield-check"></i> SECURING DIGITAL WORLD
                        </div>
                        <h2 class="s7-title">Securing your digital world<br><span class="together">together</span></h2>

                        <div class="s7-service-block">
                            <h5>Centralized Endpoint Management:</h5>
                            <p>Our centralized console provides a single pane of glass to manage security policies, deploy
                                updates, and monitor the health of every endpoint across your entire organization from one
                                location.</p>
                        </div>

                        <div class="s7-service-block">
                            <h5>Behavioral Analysis & AI:</h5>
                            <p>Our solutions don't just look for known threats; they continuously learn normal device
                                behavior to identify and stop suspicious activities, malicious processes, and zero-day
                                exploits in real-time.</p>
                        </div>
                    </div>

                    <div class="s7-right">
                        <div class="s7-image-wrap">
                            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=800"
                                alt="Endpoint Technology Space">
                        </div>

                        <div class="s7-service-block">
                            <h5>Automated Threat Isolation:</h5>
                            <p>If a threat is detected on an endpoint, our system can automatically isolate that device from
                                the network to prevent lateral movement, containing the incident while the rest of your
                                business continues to operate safely.</p>
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
                        <h2 class="s8-title">Protect every endpoint, secure your business today!</h2>
                        <div class="s8-contacts">
                            <div class="s8-contact-item">
                                <i class="bi bi-telephone-outbound"></i>
                                <div class="s8-contact-info">
                                    <span>Get contact now</span>
                                    <strong>(855)526-7890</strong>
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

@section('script-area')
@endsection