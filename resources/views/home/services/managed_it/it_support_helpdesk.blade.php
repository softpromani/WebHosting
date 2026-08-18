@extends('home.includes.layout')
@section('title', '24/7 IT Support & Helpdesk Services | Mounteko')
@section('meta-description',
'Round-the-clock IT support and helpdesk services for growing US businesses — fast response, real people, no ticket black holes.')

@section('header-area')
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/new_home_custom.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/it_support_helpdesk.css') }}">
@endsection

@section('content')
    <main class="hd-main">

        <!-- SECTION 1: PREMIUM DARK HERO HEADER -->
        <section class="hd-hero">
            <div class="hd-hero-container">
                <div class="hd-hero-row">
                    <!-- Left Column -->
                    <div class="hd-hero-left">
                        <div class="hd-hero-tag">
                            <i class="bi bi-shield-check"></i> 24/7 TECHNICAL EXCELLENCE
                        </div>
                        <h1 class="hd-hero-title">Complete End-to-End IT Support & Managed Helpdesk Services</h1>
                        <p class="hd-hero-desc">Equip your organization with reliable, full-spectrum technical assistance. Our dedicated support specialists and proactive monitoring systems work continuously to preserve productivity, secure digital assets, and maintain seamless business continuity.</p>

                        <!-- Quick Features Badges -->
                        <div class="hd-hero-badges">
                            <div class="hd-badge"><i class="bi bi-check-circle-fill"></i> Always-On Availability</div>
                            <div class="hd-badge"><i class="bi bi-check-circle-fill"></i> Sub-15 Minute Response</div>
                            <div class="hd-badge"><i class="bi bi-check-circle-fill"></i> Seasoned IT Professionals</div>
                            <div class="hd-badge"><i class="bi bi-check-circle-fill"></i> Secure Issue Handling</div>
                        </div>

                        <div class="hd-hero-btns">
                            <a href="{{ route('contactUs') }}" class="btn-hd-primary">Connect with Support</a>
                            <a href="{{ route('contactUs') }}" class="btn-hd-outline">Learn More</a>
                        </div>
                    </div>

                    <!-- Right Column (Desktop Hero Image & Float Cards) -->
                    <div class="hd-hero-right">
                        <div class="hd-hero-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-support-specialist.png') }}"
                                alt="IT Support Specialist" class="hd-hero-img">

                            <!-- Floating Card 1 -->
                            <div class="hd-float-card hd-float-1">
                                <div class="hd-float-icon"><i class="bi bi-lightning-fill"></i></div>
                                <div class="hd-float-content">
                                    <strong>15 Minutes</strong>
                                    <span>Avg. Response Time</span>
                                </div>
                            </div>

                            <!-- Floating Card 2 -->
                            <div class="hd-float-card hd-float-2">
                                <div class="hd-float-icon"><i class="bi bi-headset"></i></div>
                                <div class="hd-float-content">
                                    <strong>Active Support</strong>
                                    <span>24/7 Live Assistance</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 2: UNIFIED FEATURE SECTION -->
        <section class="hd-feature">
            <div class="hd-feature-grid">
                <!-- Left Content -->
                <div class="hd-feature-left">
                    <span class="hd-feature-tag">IT SOLUTIONS</span>
                    <h2 class="hd-feature-title">Integrated Helpdesk Solutions for Uninterrupted Business Flow</h2>
                    <p class="hd-feature-desc">We deliver a complete suite of IT support capabilities engineered to sustain operational momentum. Functioning as a seamless extension of your internal staff, our model bridges the distance between immediate remote fixes and essential on-location hardware intervention.</p>

                    <ul class="hd-feature-list">
                        <li><i class="bi bi-check-circle-fill"></i> Continuous proactive infrastructure oversight</li>
                        <li><i class="bi bi-check-circle-fill"></i> Accelerated incident identification & remediation</li>
                        <li><i class="bi bi-check-circle-fill"></i> Seamless extension of your internal team</li>
                        <li><i class="bi bi-check-circle-fill"></i> End‑to‑end hardware & application lifecycle management</li>
                    </ul>

                    <div class="hd-feature-actions">
                        <a href="{{ route('contactUs') }}" class="btn-hd-primary">Explore services</a>
                    </div>
                </div>

                <!-- Right Image (Collage) -->
                <div class="hd-feature-right">
                    <div class="hd-collage">
                        <!-- Top Image (Mobile) -->
                        <div class="collage-item item-top">
                            <img src="{{ asset('home/assets/homepage/images/it-support-mobile.png') }}" alt="Support App">
                        </div>
                        <!-- Main Image (Team) -->
                        <div class="collage-item item-main">
                            <img src="{{ asset('home/assets/homepage/images/it-support-team.png') }}" alt="IT Support Team">
                        </div>
                        <!-- Left Image (Laptop) -->
                        <div class="collage-item item-left">
                            <img src="{{ asset('home/assets/homepage/images/it-support-laptop.png') }}"
                                alt="Remote Support">
                        </div>
                        <!-- Bottom Image (Desktop) -->
                        <div class="collage-item item-bottom">
                            <img src="{{ asset('home/assets/homepage/images/it-support-desk.png') }}"
                                alt="Modern Workspace">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: PREMIUM DARK SERVICE TYPES (6-CARD GRID) -->
        <section class="hd-services">
            <div class="hd-services-container">
                <div class="hd-section-header">
                    <span class="hd-feature-tag" style="background:#eff6ff;">WHAT WE PROVIDE</span>
                    <h2 class="hd-section-title" style="color:white; margin-bottom:15px;">Full-Spectrum Technical Support Capabilities</h2>
                    <p class="hd-section-subtitle" style="color:#94a3b8; max-width:850px; margin: 0 auto;">We deliver tailored technical solutions that integrate seamlessly with your existing environment, ensuring sustained accessibility and fortified resilience.
                    </p>
                </div>

                <div class="hd-services-grid">
                    <!-- Card 1: Comprehensive IT Helpdesk -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-support-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-display"></i></div>
                        <h3 class="hd-service-title">Comprehensive IT Helpdesk</h3>
                        <p class="hd-service-text">
                            • Hybrid support: remote and on-premise remediation<br>
                            • Centralized case management and tracking portal<br>
                            • Direct assistance for workforce productivity tools
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 2: Network Connectivity & Stability -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-network-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-broadcast"></i></div>
                        <h3 class="hd-service-title">Network Connectivity & Stability</h3>
                        <p class="hd-service-text">
                            • Real-time traffic analysis and monitoring<br>
                            • Bottleneck identification and throughput enhancement<br>
                            • Rapid resolution of connectivity interruptions
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 3: Cybersecurity & Threat Safeguards -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-security-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-shield-lock"></i></div>
                        <h3 class="hd-service-title">Cybersecurity & Threat Safeguards</h3>
                        <p class="hd-service-text">
                            • Device-level defense and antivirus enforcement<br>
                            • Perimeter gateway configuration and rule management<br>
                            • Continuous vulnerability scanning and real‑time alerting
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 4: Cloud Environment Support -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-cloud-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-cloud-check"></i></div>
                        <h3 class="hd-service-title">Cloud Environment Support</h3>
                        <p class="hd-service-text">
                            • Administration of virtual resource pools<br>
                            • Systematic data replication and restoration<br>
                            • Resource allocation and cost‑efficiency optimization
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 5: Operational Continuity & Data Restoration -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-backup-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-sd-card"></i></div>
                        <h3 class="hd-service-title">Operational Continuity & Data Restoration</h3>
                        <p class="hd-service-text">
                            • Scheduled, verified data duplication routines<br>
                            • Rapid file and system state recovery processes<br>
                            • Disruption planning for sustained operations
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 6: Proactive System Stewardship -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-maint-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h3 class="hd-service-title">Proactive System Stewardship</h3>
                        <p class="hd-service-text">
                            • Routine patch management and version upgrades<br>
                            • Backend infrastructure health checks<br>
                            • Performance tuning for optimal responsiveness
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 4: HOW OUR MANAGED SERVICES WORK (CIRCULAR WORKFLOW) -->
        <section class="hd-workflow">
            <div class="hd-workflow-container">
                <div class="hd-workflow-header">
                    <span class="hd-workflow-tag">How it Works</span>
                    <h2 class="hd-workflow-title">Our Methodology for Seamless Technology Management</h2>
                </div>

                <div class="hd-steps-row">
                    <!-- Step 1: Discovery & Evaluation -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-audit.png') }}" alt="IT Audit">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">Discovery & Evaluation</h3>
                            <p class="hd-step-desc">We begin with a thorough review of the current technology landscape to map dependencies and pinpoint areas for improvement or risk.</p>
                        </div>
                    </div>

                    <!-- Step 2: Strategic Alignment & Design -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-plan.png') }}" alt="IT Plan">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">Strategic Alignment & Design</h3>
                            <p class="hd-step-desc">We draft a tailored support and management roadmap that corresponds directly with your long-term operational targets and budget.</p>
                        </div>
                    </div>

                    <!-- Step 3: Seamless Integration & Deployment -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-implement.png') }}"
                                alt="IT Implement">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">Seamless Integration & Deployment</h3>
                            <p class="hd-step-desc">We activate robust management toolsets and support protocols without disrupting your daily business activities.</p>
                        </div>
                    </div>

                    <!-- Step 4: Sustained Oversight & Continuous Improvement -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-manage.png') }}" alt="IT Manage">
                        </div>
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">Sustained Oversight & Continuous Improvement</h3>
                            <p class="hd-step-desc">We provide round-the-clock surveillance, rapid-response remediation, and regular reporting on the health of your technology ecosystem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 5: WHY CHOOSE US (EXPERIENCE SHOWCASE) -->
        <section class="hd-why-us">
            <div class="hd-why-us-container">
                <!-- Left: Image with Circle Overlay -->
                <div class="hd-why-us-left">
                    <div class="hd-why-us-img-frame">
                        <img src="{{ asset('home/assets/homepage/images/it-why-us-team.png') }}" alt="IT Experience Team">
                    </div>
                </div>

                <!-- Right: Content -->
                <div class="hd-why-us-right">
                    <span class="hd-why-us-tag">Why Choose Us</span>
                    <h2 class="hd-why-us-title">Why Organizations Rely on Our Established Expertise</h2>
                    <p class="hd-why-us-text">
                        We provide superior technical stewardship that allows companies to pursue growth initiatives without technological friction. Our forward-looking maintenance model ensures infrastructure serves as a foundation for success, not a recurring obstacle.
                    </p>

                    <div class="hd-feature-row">
                        <div class="hd-feature-box">
                            <div class="hd-feature-icon-circle"><i class="bi bi-globe"></i></div>
                            <span class="hd-feature-label">Expert around<br>the world</span>
                        </div>
                        <div class="hd-feature-box">
                            <div class="hd-feature-icon-circle"><i class="bi bi-briefcase"></i></div>
                            <span class="hd-feature-label">Best Practice For<br>Business</span>
                        </div>
                    </div>

                    <div class="hd-check-grid">
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Adherence to Industry-Standard Protocols</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Scalable Virtual Infrastructure Management</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Nonstop Remote System Oversight</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Routine Security Posture Assessments</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Structured Data Safeguarding Procedures</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Connection Speed and Reliability Tuning</div>
                    </div>

                    <a href="{{ route('contactUs') }}" class="hd-btn-learn">Learn More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </section>



        </section>

        <!-- SECTION 6: LATEST FROM OUR BLOG -->
        <section class="dev-blog-section">
            <div class="dev-blog-container">
                <span class="dev-blog-tag">IT INSIGHTS</span>
                <h2 class="dev-blog-title">Latest From Our Blog</h2>
                <div class="dev-blog-divider"></div>

                <div class="dev-blog-grid">
                    <!-- Post 1 -->
                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=700" alt="IT Support Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-it-support">STRATEGY</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 12 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By IT Expert</span>
                            </div>
                            <h4 class="dev-blog-heading">How Proactive IT Support Prevents Costly Downtime</h4>
                        </div>
                    </div>

                    <!-- Post 2 -->
                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=700" alt="Managed IT Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-management">MANAGEMENT</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 15 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By Admin</span>
                            </div>
                            <h4 class="dev-blog-heading">The Importance of 24/7 Monitoring for Modern Businesses</h4>
                        </div>
                    </div>

                    <!-- Post 3 -->
                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=700" alt="Cybersecurity Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-security">SECURITY</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 20 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By Sec Lead</span>
                            </div>
                            <h4 class="dev-blog-heading">Top 5 Cybersecurity Threats to Remote Teams in 2024</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA SECTION -->
        <section class="hd-cta-section">
            <div class="hd-cta-container">
                <div class="hd-cta-banner">
                    
                    <!-- SVG Scribble Arrow -->
                    <div class="hd-cta-scribble">
                        <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 20C40 10 60 40 50 60C45 70 30 65 35 50C40 35 60 45 80 80M80 80L70 80M80 80L80 70" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>

                    <!-- Left: Text + Contact -->
                    <div class="hd-cta-left">
                        <h2 class="hd-cta-banner-title">Protect business, cyber security solution today!</h2>
                        
                        <div class="hd-cta-contact-grid">
                            <!-- Phone -->
                            <div class="hd-cta-contact-item">
                                <div class="hd-cta-contact-icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div class="hd-cta-contact-info">
                                    <span>Get contact now</span>
                                    <strong>+123 456 789</strong>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="hd-cta-contact-item">
                                <div class="hd-cta-contact-icon">
                                    <i class="bi bi-envelope-at-fill"></i>
                                </div>
                                <div class="hd-cta-contact-info">
                                    <span>Sent e-mail</span>
                                    <strong>info@domainname.com</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Framed Image -->
                    <div class="hd-cta-right">
                        <div class="hd-cta-image-frame">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=600" alt="Cyber Security Monitoring">
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection