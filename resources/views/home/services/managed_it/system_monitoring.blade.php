@extends('home.includes.layout')
@section('title', '24/7 System Monitoring & Maintenance Services | Mounteko')
@section('meta-description',
'Proactive system monitoring and maintenance that catches problems before they cause downtime — 24/7, from Mounteko.')

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
                            <i class="bi bi-activity"></i> 24/7 PROACTIVE INFRASTRUCTURE OVERSIGHT
                        </div>
                        <h1 class="hd-hero-title">24/7 System Monitoring & Maintenance Services</h1>
                        <p class="hd-hero-desc">Most IT problems are preventable if someone catches them early enough — a drive filling up, a service quietly failing, a certificate about to expire. Mounteko provides 24/7 system monitoring and proactive maintenance, catching these signals and acting on them before your team even notices something was wrong.</p>

                        <!-- Quick Features Badges -->
                        <div class="hd-hero-badges">
                            <div class="hd-badge"><i class="bi bi-shield-check"></i> 24/7 Continuous Telemetry</div>
                            <div class="hd-badge"><i class="bi bi-clock-history"></i> Zero-Downtime Maintenance Windows</div>
                            <div class="hd-badge"><i class="bi bi-lightning-charge"></i> Rapid Alert-to-Resolution SLA</div>
                            <div class="hd-badge"><i class="bi bi-hdd-network"></i> Enterprise Infrastructure Health</div>
                        </div>

                        <div class="hd-hero-btns">
                            <a href="{{ route('contactUs') }}" class="btn-hd-primary">Get a Monitoring Assessment</a>
                            <a href="#monitoring-coverage" class="btn-hd-outline">What We Monitor</a>
                        </div>
                    </div>

                    <!-- Right Column (Desktop Hero Image & Float Cards) -->
                    <div class="hd-hero-right">
                        <div class="hd-hero-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-support-specialist.png') }}"
                                alt="System Monitoring Specialist" class="hd-hero-img">

                            <!-- Floating Card 1 -->
                            <div class="hd-float-card hd-float-1">
                                <div class="hd-float-icon"><i class="bi bi-activity"></i></div>
                                <div class="hd-float-content">
                                    <strong>24/7/365</strong>
                                    <span>Real-Time Telemetry</span>
                                </div>
                            </div>

                            <!-- Floating Card 2 -->
                            <div class="hd-float-card hd-float-2">
                                <div class="hd-float-icon"><i class="bi bi-tools"></i></div>
                                <div class="hd-float-content">
                                    <strong>Proactive</strong>
                                    <span>Scheduled Maintenance</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 2: WHAT 24/7 SYSTEM MONITORING ACTUALLY COVERS -->
        <section id="monitoring-coverage" class="hd-feature">
            <div class="hd-feature-grid">
                <!-- Left Content -->
                <div class="hd-feature-left">
                    <span class="hd-feature-tag">CONCRETE COVERAGE</span>
                    <h2 class="hd-feature-title">What 24/7 System Monitoring Actually Covers</h2>
                    <p class="hd-feature-desc">
                        Generic monitoring promises often leave gaps where critical failures hide. Mounteko provides granular, full-stack infrastructure telemetry across every layer of your IT environment — ensuring hardware degradation, application bottlenecks, and capacity thresholds are tracked with precision.
                    </p>

                    <ul class="hd-feature-list">
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Servers & Virtualization:</strong> Real-time CPU, RAM, hypervisor health, VMware/Hyper-V status, and hardware thermal diagnostics.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Applications & Services:</strong> Monitoring SQL queries, web servers (IIS/Nginx/Apache), background daemons, and API response latencies.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Storage & Capacity Planning:</strong> Predictive growth tracking for SAN, NAS, and local SSD volumes to prevent sudden drive exhaustion and database corruption.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Security Events & Certificates:</strong> Tracking SSL/TLS certificate expiries, unauthorized login spikes, firewall port changes, and abnormal outbound traffic.</li>
                    </ul>

                    <div class="hd-feature-actions">
                        <a href="{{ route('contactUs') }}" class="btn-hd-primary">Protect Your Infrastructure</a>
                    </div>
                </div>

                <!-- Right Image (Collage) -->
                <div class="hd-feature-right">
                    <div class="hd-collage">
                        <!-- Top Image (Mobile) -->
                        <div class="collage-item item-top">
                            <img src="{{ asset('home/assets/homepage/images/it-support-mobile.png') }}"
                                alt="Monitoring Mobile Dashboard">
                        </div>
                        <!-- Main Image (Team) -->
                        <div class="collage-item item-main">
                            <img src="{{ asset('home/assets/homepage/images/it-support-team.png') }}"
                                alt="NOC Monitoring Team">
                        </div>
                        <!-- Left Image (Laptop) -->
                        <div class="collage-item item-left">
                            <img src="{{ asset('home/assets/homepage/images/it-support-laptop.png') }}"
                                alt="Server Telemetry Interface">
                        </div>
                        <!-- Bottom Image (Desktop) -->
                        <div class="collage-item item-bottom">
                            <img src="{{ asset('home/assets/homepage/images/it-support-desk.png') }}"
                                alt="Operations Command Center">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: PROACTIVE MAINTENANCE, SCHEDULED AROUND YOUR BUSINESS (6-CARD GRID) -->
        <section class="hd-services">
            <div class="hd-services-container">
                <div class="hd-section-header">
                    <span class="hd-feature-tag" style="background:#eff6ff;">NON-DISRUPTIVE SERVICING</span>
                    <h2 class="hd-section-title" style="color:white; margin-bottom:15px;">Proactive Maintenance, Scheduled Around Your Business</h2>
                    <p class="hd-section-subtitle" style="color:#94a3b8; max-width:850px; margin: 0 auto;">
                        System maintenance shouldn't disrupt your business hours or cause unexpected daytime slowdowns. We execute routine optimization, database indexing, and firmware upgrades during dedicated, pre-approved maintenance windows.
                    </p>
                </div>

                <div class="hd-services-grid">
                    <!-- Card 1: Dedicated Maintenance Windows -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-support-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-calendar-check"></i></div>
                        <h3 class="hd-service-title">Off-Peak Maintenance Windows</h3>
                        <p class="hd-service-text">
                            Maintenance is scheduled during off-peak hours and weekends to ensure zero interference with your daily employee workflows and revenue generation.
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 2: Database & Storage Optimization -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-network-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-database-check"></i></div>
                        <h3 class="hd-service-title">Database & Disk Optimization</h3>
                        <p class="hd-service-text">
                            Automated temporary file cleanup, log truncation, and database index defragmentation to maintain peak query speeds and prevent drive bloat.
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 3: Firmware & BIOS Updates -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-security-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-cpu"></i></div>
                        <h3 class="hd-service-title">Firmware & Hardware Upgrades</h3>
                        <p class="hd-service-text">
                            Testing and applying manufacturer-certified firmware updates to routers, switches, SAN storage, and server management controllers (iDRAC/iLO).
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 4: Backup Integrity & Restore Drills -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-cloud-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-shield-check"></i></div>
                        <h3 class="hd-service-title">Backup Verification & Restore Drills</h3>
                        <p class="hd-service-text">
                            Automated recovery testing and immutable snapshot validations to guarantee that backups will actually restore flawlessly when needed.
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 5: Service Health Checks & Reboots -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-backup-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-arrow-clockwise"></i></div>
                        <h3 class="hd-service-title">Controlled Daemon Recycles</h3>
                        <p class="hd-service-text">
                            Controlled staging and graceful recycling of memory-leaking background services and operating system daemons to prevent performance degradation.
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 6: Configuration Drift Prevention -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-maint-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-sliders"></i></div>
                        <h3 class="hd-service-title">Configuration Drift Auditing</h3>
                        <p class="hd-service-text">
                            Enforcing standardized security baselines across servers and networking gear to catch unauthorized configuration changes instantly.
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 4: FROM ALERT TO RESOLUTION & TELECOM SPOTLIGHT -->
        <section class="hd-why-us">
            <div class="hd-why-us-container" style="max-width: 1200px;">
                <!-- Left: Image with Frame Overlay -->
                <div class="hd-why-us-left">
                    <div class="hd-why-us-img-frame">
                        <img src="{{ asset('home/assets/homepage/images/it-why-us-team.png') }}"
                            alt="Mounteko NOC Engineers Resolving Alerts">
                    </div>
                </div>

                <!-- Right: Content -->
                <div class="hd-why-us-right">
                    <span class="hd-why-us-tag">ACTIONABLE INCIDENT MANAGEMENT</span>
                    <h2 class="hd-why-us-title">From Alert to Resolution: Active Remediation, Not Just Noisy Pings</h2>
                    <p class="hd-why-us-text">
                        Many monitoring tools do nothing more than flood your inbox with confusing alert notifications that get ignored. Mounteko pairs advanced telemetry with dedicated human engineering response. When a threshold triggers, our Network Operations Center (NOC) immediately investigates, verifies the root cause, and resolves the issue before it escalates into customer-facing downtime.
                    </p>

                    <div class="hd-check-grid">
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> 15-Minute Response SLA on Critical Alerts</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Automated Self-Healing Scripts</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Senior NOC Root-Cause Analysis</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Transparent Audit Logging & Telemetry</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Continuous Threshold Tuning (Zero Noise)</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Single Accountable Engineering Desk</div>
                    </div>

                    <a href="{{ route('contactUs') }}" class="btn-hd-primary"
                        style="display: inline-block; margin-top: 10px;">Get 24/7 NOC Coverage</a>
                </div>
            </div>

            <!-- Telecom & Always-On Infrastructure Spotlight Card -->
            <div class="container" style="max-width: 1200px; margin: 40px auto 0; padding: 0 40px;">
                <div class="hd-industry-spotlight">
                    <div class="hd-industry-icon">
                        <i class="bi bi-broadcast"></i>
                    </div>
                    <div class="hd-industry-content">
                        <h4>Industry Spotlight: Telecom & Always-On Communication Networks</h4>
                        <p>
                            For telecom providers, VoIP carriers, and ISP network operators, infrastructure must stay online continuously without exception. Even a brief 5-minute unplanned outage disrupts thousands of customer phone lines and triggers severe SLA penalties. Mounteko provides sub-second telemetry, link redundancy monitoring, and automated failover orchestration — isolating packet loss, routing flaps, and switch bottlenecks before subscribers notice any degradation.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 5: HOW OUR MONITORING PROCESS WORKS -->
        <section class="hd-workflow">
            <div class="hd-workflow-container">
                <div class="hd-workflow-header">
                    <span class="hd-workflow-tag">PROACTIVE LIFECYCLE</span>
                    <h2 class="hd-workflow-title">How Our Monitoring Process <em>Works</em></h2>
                </div>

                <div class="hd-steps-row">
                    <!-- Step 1: Baseline Discovery -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-audit.png') }}"
                                alt="Baseline Infrastructure Audit">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">1. Baseline Audit</h3>
                            <p class="hd-step-desc">Scanning hardware, network nodes, and applications to establish normal operational performance baselines.</p>
                        </div>
                    </div>

                    <!-- Step 2: Telemetry Deployment -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-plan.png') }}"
                                alt="Telemetry Agent Deployment">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">2. Telemetry Setup</h3>
                            <p class="hd-step-desc">Deploying lightweight, secure RMM agents and SNMP probes across all servers and network gear.</p>
                        </div>
                    </div>

                    <!-- Step 3: 24/7 Automated Triage -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-implement.png') }}"
                                alt="24/7 Automated Triage">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">3. 24/7 Triage</h3>
                            <p class="hd-step-desc">Multi-tier threshold monitoring that filters false positives and flags true operational risks instantly.</p>
                        </div>
                    </div>

                    <!-- Step 4: Proactive Remediation -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-manage.png') }}"
                                alt="Proactive Remediation">
                        </div>
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">4. Active Remediation</h3>
                            <p class="hd-step-desc">NOC engineers remediate issues, execute scheduled maintenance, and optimize system baselines.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 6: LATEST FROM OUR BLOG -->
        <section class="dev-blog-section">
            <div class="dev-blog-container">
                <span class="dev-blog-tag">MONITORING INSIGHTS</span>
                <h2 class="dev-blog-title">Latest From Our Blog</h2>
                <div class="dev-blog-divider"></div>

                <div class="dev-blog-grid">
                    <!-- Post 1 -->
                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1551808525-51a94da548ce?auto=format&fit=crop&q=80&w=700"
                                alt="System Monitoring Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-it-support">MONITORING</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 20 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By NOC Lead</span>
                            </div>
                            <h4 class="dev-blog-heading">The 5 Early Warning Signals That Prevent Catastrophic Server Outages</h4>
                        </div>
                    </div>

                    <!-- Post 2 -->
                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&q=80&w=700"
                                alt="Proactive Maintenance Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-management">MAINTENANCE</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 24 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By Systems Engineer</span>
                            </div>
                            <h4 class="dev-blog-heading">Proactive Maintenance vs Break-Fix IT: Why Scheduled Servicing Wins</h4>
                        </div>
                    </div>

                    <!-- Post 3 -->
                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&q=80&w=700"
                                alt="NOC Alert Management Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-security">RELIABILITY</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 28 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By Infrastructure Architect</span>
                            </div>
                            <h4 class="dev-blog-heading">How We Eliminate Alert Fatigue to Fix True Infrastructure Threats Faster</h4>
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
                        <h2 class="hd-cta-banner-title">Stop Waiting for Systems to Break. Protect Your Uptime 24/7.</h2>

                        <div class="hd-cta-contact-grid">
                            <!-- Phone -->
                            <div class="hd-cta-contact-item">
                                <div class="hd-cta-contact-icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div class="hd-cta-contact-info">
                                    <span>Speak with our NOC team</span>
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
                            <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&q=80&w=600"
                                alt="24/7 System Monitoring and Maintenance">
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
