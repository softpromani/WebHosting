@extends('home.includes.layout')
@section('title', '24/7 IT Support & Helpdesk Services for US Businesses | Mounteko')
@section('meta-description', 'Round-the-clock IT support and helpdesk services for growing US businesses — fast
    response, real people, no ticket black holes.')

@section('header-area')
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/new_home_custom.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/it_support_helpdesk.css') }}">
@endsection

@section('content')
    <main class="hd-main">

        <!-- SECTION 1: HERO HEADER -->
        <section class="hd-hero">
            <div class="hd-hero-container">
                <div class="hd-hero-row">
                    <!-- Left Column -->
                    <div class="hd-hero-left">
                        <div class="hd-hero-tag">
                            <i class="bi bi-headset"></i> 24/7 IT SUPPORT SERVICES
                        </div>
                        <h1 class="hd-hero-title">24/7 IT Support & Helpdesk Services</h1>
                        <p class="hd-hero-desc">A slow help desk costs more than the ticket it's attached to — it's an
                            employee sitting idle, a deadline slipping, a small annoyance becoming a daily source of
                            frustration with the whole IT setup. Mounteko provides end-to-end IT support and helpdesk
                            services, with real people who pick up, not a ticket queue that disappears into silence.</p>

                        <!-- Quick Features Badges -->
                        <div class="hd-hero-badges">
                            <div class="hd-badge"><i class="bi bi-check-circle-fill"></i> 15-Min Response SLA</div>
                            <div class="hd-badge"><i class="bi bi-check-circle-fill"></i> 24/7/365 US Engineers</div>
                            <div class="hd-badge"><i class="bi bi-check-circle-fill"></i> Remote & Hybrid Ready</div>
                            <div class="hd-badge"><i class="bi bi-check-circle-fill"></i> Tier-1 to Tier-3 Depth</div>
                        </div>

                        <div class="hd-hero-btns">
                            <a href="{{ route('contactUs') }}" class="btn-hd-primary">Get Fast IT Support</a>
                            <a href="#helpdesk-features" class="btn-hd-outline">Explore Capabilities</a>
                        </div>
                    </div>

                    <!-- Right Column (Desktop Hero Image & Float Cards) -->
                    <div class="hd-hero-right">
                        <div class="hd-hero-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-support-specialist.png') }}"
                                alt="24/7 IT Support Specialist" class="hd-hero-img">

                            <!-- Floating Card 1 -->
                            <div class="hd-float-card hd-float-1">
                                <div class="hd-float-icon"><i class="bi bi-lightning-fill"></i></div>
                                <div class="hd-float-content">
                                    <strong>15 Minutes</strong>
                                    <span>Guaranteed Response SLA</span>
                                </div>
                            </div>

                            <!-- Floating Card 2 -->
                            <div class="hd-float-card hd-float-2">
                                <div class="hd-float-icon"><i class="bi bi-headset"></i></div>
                                <div class="hd-float-content">
                                    <strong>Live Engineer</strong>
                                    <span>Real Technical Experts</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 2: REAL RESPONSE TIMES, NOT VAGUE PROMISES -->
        <section id="helpdesk-features" class="hd-feature">
            <div class="hd-feature-grid">
                <!-- Left Content -->
                <div class="hd-feature-left">
                    <span class="hd-feature-tag">COMMITTED RESPONSE TIMES</span>
                    <h2 class="hd-feature-title">Real Response Times, Not Vague Promises</h2>
                    <p class="hd-feature-desc">
                        When an employee encounters a technical barrier, waiting hours for a generic automated ticket
                        confirmation derails projects and frustrates your team. Mounteko backs your operations with a
                        concrete, SLA-committed response time: critical tickets are picked up in under 15 minutes by
                        experienced technical engineers, not call dispatchers.
                    </p>

                    <ul class="hd-feature-list">
                        <li><i class="bi bi-check-circle-fill"></i> <strong>15-Minute Critical Response SLA:</strong>
                            Immediate triage and rapid escalation for productivity blockers.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Direct Engineer Access:</strong> Speak directly
                            to certified technicians via phone, email, or live chat.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>85%+ First-Contact Resolution:</strong> Most
                            common desktop and software issues fixed on the first call.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Transparent Telemetry & Tracking:</strong>
                            Real-time ticket progress updates and monthly SLA performance metrics.</li>
                    </ul>

                    <div class="hd-feature-actions">
                        <a href="{{ route('contactUs') }}" class="btn-hd-primary">Speak With Our Support Team</a>
                    </div>
                </div>

                <!-- Right Image (Collage) -->
                <div class="hd-feature-right">
                    <div class="hd-collage">
                        <!-- Top Image (Mobile) -->
                        <div class="collage-item item-top">
                            <img src="{{ asset('home/assets/homepage/images/it-support-mobile.png') }}"
                                alt="Mobile Support App">
                        </div>
                        <!-- Main Image (Team) -->
                        <div class="collage-item item-main">
                            <img src="{{ asset('home/assets/homepage/images/it-support-team.png') }}"
                                alt="Mounteko IT Support Engineers">
                        </div>
                        <!-- Left Image (Laptop) -->
                        <div class="collage-item item-left">
                            <img src="{{ asset('home/assets/homepage/images/it-support-laptop.png') }}"
                                alt="Remote Desktop Troubleshooting">
                        </div>
                        <!-- Bottom Image (Desktop) -->
                        <div class="collage-item item-bottom">
                            <img src="{{ asset('home/assets/homepage/images/it-support-desk.png') }}"
                                alt="Modern IT Workstation Support">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: REMOTE IT SUPPORT FOR DISTRIBUTED TEAMS (6-CARD GRID) -->
        <section class="hd-services">
            <div class="hd-services-container">
                <div class="hd-section-header">
                    <span class="hd-feature-tag" style="background:#eff6ff;">HYBRID & REMOTE WORK READY</span>
                    <h2 class="hd-section-title" style="color:white; margin-bottom:15px;">Remote IT Support for Distributed
                        Teams</h2>
                    <p class="hd-section-subtitle" style="color:#94a3b8; max-width:850px; margin: 0 auto;">
                        Modern businesses operate across physical offices, branch locations, and remote home environments.
                        Mounteko provides unified technical support that delivers identical reliability regardless of where
                        your team logs in.
                    </p>
                </div>

                <div class="hd-services-grid">
                    <!-- Card 1: Secure Remote Desktop Access -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-support-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-display"></i></div>
                        <h3 class="hd-service-title">Secure Remote Desktop Access</h3>
                        <p class="hd-service-text">
                            Instant, encrypted screen-sharing and diagnostic tools that allow our engineers to troubleshoot
                            and resolve software, driver, and OS issues in minutes.
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Request Support</a>
                    </div>

                    <!-- Card 2: Zero-Touch Device Onboarding -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-network-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-laptop"></i></div>
                        <h3 class="hd-service-title">Zero-Touch Device Onboarding</h3>
                        <p class="hd-service-text">
                            Pre-configuring enterprise laptops, MDM profiles, productivity software, and security
                            credentials shipped directly to remote new hires' doors.
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Request Support</a>
                    </div>

                    <!-- Card 3: VPN & Remote Connectivity -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-security-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-shield-lock"></i></div>
                        <h3 class="hd-service-title">VPN & Secure Connectivity</h3>
                        <p class="hd-service-text">
                            Resolving VPN drops, home Wi-Fi bottlenecks, firewall access permissions, and VoIP audio latency
                            to keep distributed staff seamlessly connected.
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Request Support</a>
                    </div>

                    <!-- Card 4: SaaS & Cloud App Management -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-cloud-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-cloud-check"></i></div>
                        <h3 class="hd-service-title">SaaS & Cloud App Support</h3>
                        <p class="hd-service-text">
                            Comprehensive assistance for Microsoft 365, Google Workspace, Single Sign-On (SSO), and
                            Multi-Factor Authentication (MFA) lockouts.
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Request Support</a>
                    </div>

                    <!-- Card 5: Endpoint Security & Antivirus -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-backup-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-shield-check"></i></div>
                        <h3 class="hd-service-title">Endpoint Defense & Compliance</h3>
                        <p class="hd-service-text">
                            Continuous EDR monitoring, automated patch verification, disk encryption (BitLocker/FileVault),
                            and instant threat containment on all remote laptops.
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Request Support</a>
                    </div>

                    <!-- Card 6: Hardware Hot-Swapping & Logistics -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-maint-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-arrow-repeat"></i></div>
                        <h3 class="hd-service-title">Hardware Replacement Logistics</h3>
                        <p class="hd-service-text">
                            Rapid emergency replacement, advance hardware provisioning, and data recovery for damaged or
                            failing employee workstations.
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Request Support</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 4: END-TO-END, NOT JUST TIER-1 TICKETS & TELECOM SPOTLIGHT -->
        <section class="hd-why-us">
            <div class="hd-why-us-container" style="max-width: 1200px;">
                <!-- Left: Image with Frame Overlay -->
                <div class="hd-why-us-left">
                    <div class="hd-why-us-img-frame">
                        <img src="{{ asset('home/assets/homepage/images/it-why-us-team.png') }}"
                            alt="Mounteko Full-Stack IT Engineering Team">
                    </div>
                </div>

                <!-- Right: Content -->
                <div class="hd-why-us-right">
                    <span class="hd-why-us-tag">FULL-STACK TECHNICAL DEPTH</span>
                    <h2 class="hd-why-us-title">End-to-End, Not Just Tier-1 Tickets</h2>
                    <p class="hd-why-us-text">
                        Basic helpdesk providers only handle routine password resets and script-based reboots. When a real
                        crisis occurs, they tell you to call an external network or cloud vendor. Mounteko delivers
                        end-to-end technical escalation. When an incident stems from an Active Directory sync failure,
                        firewall misconfiguration, or cloud database bottleneck, our internal Tier-2 and Tier-3
                        infrastructure engineers take over instantly — with zero third-party handoffs and complete
                        accountability.
                    </p>

                    <div class="hd-check-grid">
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Tier-1 to Tier-3 Unified
                            Escalation</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Zero Third-Party Handoffs</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Proactive Root-Cause Analysis
                        </div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Dedicated Systems Engineers
                        </div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Centralized Multi-Channel
                            Portal</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> 24/7/365 Around-the-Clock
                            Support</div>
                    </div>

                    <a href="{{ route('contactUs') }}" class="btn-hd-primary"
                        style="display: inline-block; margin-top: 10px;">Get Dedicated Helpdesk Support</a>
                </div>
            </div>

            <!-- Telecom & High-Volume Contact Center Industry Spotlight Card -->
            <div class="container" style="max-width: 1200px; margin: 40px auto 0; padding: 0 40px;">
                <div class="hd-industry-spotlight">
                    <div class="hd-industry-icon">
                        <i class="bi bi-reception-4"></i>
                    </div>
                    <div class="hd-industry-content">
                        <h4>Industry Spotlight: Telecom & High-Volume Contact Centers</h4>
                        <p>
                            For telecom operators and customer-facing contact centers, staff cannot afford systems going
                            down mid-shift. Even 10 minutes of softphone instability, CRM latency, or VPN disconnections
                            leaves hundreds of callers stranded and causes immediate reputational damage. Mounteko provides
                            the low-latency, rapid-response IT support needed to keep frontline agents online and operating
                            at maximum efficiency 24/7/365.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 5: HOW OUR HELPDESK PROCESS WORKS -->
        <section class="hd-workflow">
            <div class="hd-workflow-container">
                <div class="hd-workflow-header">
                    <span class="hd-workflow-tag">STREAMLINED TICKET RESOLUTION</span>
                    <h2 class="hd-workflow-title">How Our Helpdesk Support <em>Works</em></h2>
                </div>

                <div class="hd-steps-row">
                    <!-- Step 1: Submit -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-audit.png') }}"
                                alt="Multi-Channel Ticket Submission">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">1. Instant Ticket Logging</h3>
                            <p class="hd-step-desc">Employees reach out via phone, email, web portal, or chat. Tickets are
                                automatically categorized and prioritized.</p>
                        </div>
                    </div>

                    <!-- Step 2: Triage -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-plan.png') }}"
                                alt="15-Minute Engineering Triage">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">2. 15-Minute SLA Pickup</h3>
                            <p class="hd-step-desc">A qualified technical engineer claims the ticket within 15 minutes and
                                initiates live diagnosis.</p>
                        </div>
                    </div>

                    <!-- Step 3: Resolve -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-implement.png') }}"
                                alt="Remote Remediation & Fix">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">3. Rapid Remediation</h3>
                            <p class="hd-step-desc">Secure remote screen-sharing or deep-system diagnostics resolve the
                                root problem quickly and permanently.</p>
                        </div>
                    </div>

                    <!-- Step 4: Verify -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-manage.png') }}"
                                alt="User Verification and Reporting">
                        </div>
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">4. Verification & Reporting</h3>
                            <p class="hd-step-desc">The user confirms complete resolution. Incident telemetry is logged for
                                monthly SLA transparency and continuous improvement.</p>
                        </div>
                    </div>
                </div>
            </div>
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
                            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=700"
                                alt="IT Support Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-it-support">STRATEGY</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 12 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By IT Expert</span>
                            </div>
                            <h4 class="dev-blog-heading">How Proactive IT Support Prevents Costly Downtime for Growing
                                Businesses</h4>
                        </div>
                    </div>

                    <!-- Post 2 -->
                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=700"
                                alt="Managed IT Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-management">MANAGEMENT</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 15 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By Admin</span>
                            </div>
                            <h4 class="dev-blog-heading">The Strategic Advantage of 24/7 Infrastructure Monitoring</h4>
                        </div>
                    </div>

                    <!-- Post 3 -->
                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=700"
                                alt="Cybersecurity Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-security">SECURITY</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 20 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By Sec Lead</span>
                            </div>
                            <h4 class="dev-blog-heading">Why Timely Patch Management is Your Best Defense Against
                                Ransomware</h4>
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
                            <path d="M20 20C40 10 60 40 50 60C45 70 30 65 35 50C40 35 60 45 80 80M80 80L70 80M80 80L80 70"
                                stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <!-- Left: Text + Contact -->
                    <div class="hd-cta-left">
                        <h2 class="hd-cta-banner-title">Tired of Slow IT Support and Lost Productivity?</h2>

                        <div class="hd-cta-contact-grid">
                            <!-- Phone -->
                            <div class="hd-cta-contact-item">
                                <div class="hd-cta-contact-icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div class="hd-cta-contact-info">
                                    <span>Call our engineering team</span>
                                    <strong><a href="tel:{{ settingValue('phone') }}"
                                            style="color: inherit; text-decoration: none;">{{ settingValue('phone') ?? '+1 (800) 555-0199' }}</a></strong>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="hd-cta-contact-item">
                                <div class="hd-cta-contact-icon">
                                    <i class="bi bi-envelope-at-fill"></i>
                                </div>
                                <div class="hd-cta-contact-info">
                                    <span>Send an inquiry</span>
                                    <strong><a href="mailto:{{ settingValue('email') }}"
                                            style="color: inherit; text-decoration: none;">{{ settingValue('email') ?? 'support@mounteko.com' }}</a></strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Framed Image -->
                    <div class="hd-cta-right">
                        <div class="hd-cta-image-frame">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=600"
                                alt="24/7 IT Support Helpdesk Consultation">
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
