@extends('home.includes.layout')
@section('title', 'System Monitoring & Preventive Maintenance | Mounteko')

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
                            <i class="bi bi-shield-check"></i> 24/7 PROACTIVE SURVEILLANCE & RELIABILITY
                        </div>
                        <h1 class="hd-hero-title">Enterprise-Grade System Monitoring & Preventive Maintenance</h1>
                        <p class="hd-hero-desc">Ensure continuous business operations with real-time infrastructure oversight. Our automated monitoring and scheduled maintenance eliminate performance degradation before it impacts your bottom line.</p>

                        <!-- Quick Features Badges -->
                        <div class="hd-hero-badges">
                            <div class="hd-badge"><i class="bi bi-check-circle-fill"></i> 99.99% Uptime SLA</div>
                            <div class="hd-badge"><i class="bi bi-check-circle-fill"></i> Predictive Failure Analysis</div>
                            <div class="hd-badge"><i class="bi bi-check-circle-fill"></i> Patch Compliance Automation</div>
                            <div class="hd-badge"><i class="bi bi-check-circle-fill"></i> Resource Optimization</div>
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
                                alt="System Monitoring Specialist" class="hd-hero-img">

                            <!-- Floating Card 1 -->
                            <div class="hd-float-card hd-float-1">
                                <div class="hd-float-icon"><i class="bi bi-activity"></i></div>
                                <div class="hd-float-content">
                                    <strong>Real-time</strong>
                                    <span>Telemetry Monitoring</span>
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

        <!-- SECTION 2: UNIFIED FEATURE SECTION -->
        <section class="hd-feature">
            <div class="hd-feature-grid">
                <!-- Left Content -->
                <div class="hd-feature-left">
                    <span class="hd-feature-tag">IT SOLUTIONS</span>
                    <h2 class="hd-feature-title">Holistic Infrastructure Monitoring & Automated System Maintenance</h2>
                    <p class="hd-feature-desc">We deliver a rigorous maintenance framework that extends the lifecycle of your hardware and software assets. Our approach combines remote telemetry with scheduled on-site servicing to prevent configuration drift, reduce security vulnerabilities, and eliminate unexpected outages.</p>

                    <ul class="hd-feature-list">
                        <li><i class="bi bi-check-circle-fill"></i> Continuous performance baseline analysis and anomaly detection</li>
                        <li><i class="bi bi-check-circle-fill"></i> Automated patch orchestration and vulnerability remediation</li>
                        <li><i class="bi bi-check-circle-fill"></i> Proactive capacity planning and disk space management</li>
                        <li><i class="bi bi-check-circle-fill"></i> Server health diagnostics and firmware lifecycle management</li>
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
                    <h2 class="hd-section-title" style="color:white; margin-bottom:15px;">Comprehensive System Care for Mission-Critical Environments</h2>
                    <p class="hd-section-subtitle" style="color:#94a3b8; max-width:850px; margin: 0 auto;">Technical maintenance protocols designed to stabilize your digital ecosystem, enhance throughput, and fortify operational resilience.
                    </p>
                </div>

                <div class="hd-services-grid">
                    <!-- Card 1: Performance Monitoring & Telemetry -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-support-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-speedometer2"></i></div>
                        <h3 class="hd-service-title">Performance Monitoring & Telemetry</h3>
                        <p class="hd-service-text">
                            • Real-time SNMP & Syslog analysis<br>
                            • CPU, memory, and I/O bottleneck identification<br>
                            • Custom threshold alerting and escalation
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 2: Proactive Patch Management -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-network-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-patch-check"></i></div>
                        <h3 class="hd-service-title">Proactive Patch Management</h3>
                        <p class="hd-service-text">
                            • Operating system security patching<br>
                            • Third-party application updates<br>
                            • Automated compliance auditing
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 3: Hardware Health & Lifecycle -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-security-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-hdd-network"></i></div>
                        <h3 class="hd-service-title">Hardware Health & Lifecycle</h3>
                        <p class="hd-service-text">
                            • Predictive SMART disk failure monitoring<br>
                            • Server temperature & RAID array checks<br>
                            • End-of-Life (EOL) hardware refresh planning
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 4: Log Management & Analytics -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-cloud-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-file-earmark-medical"></i></div>
                        <h3 class="hd-service-title">Log Management & Analytics</h3>
                        <p class="hd-service-text">
                            • Centralized event log correlation<br>
                            • SIEM integration for security monitoring<br>
                            • Root cause analysis for incidents
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 5: System Optimization & Tuning -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-backup-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h3 class="hd-service-title">System Optimization & Tuning</h3>
                        <p class="hd-service-text">
                            • Database index defragmentation<br>
                            • Startup script validation and cleanup<br>
                            • VM resource right-sizing optimization
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 6: Backup Validation & Integrity -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-maint-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-shield-check"></i></div>
                        <h3 class="hd-service-title">Backup Validation & Integrity</h3>
                        <p class="hd-service-text">
                            • Automated recovery testing of system state<br>
                            • Replication monitoring for DR sites<br>
                            • Immutable backup verification
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
                    <h2 class="hd-workflow-title">Our Maintenance & Monitoring Methodology</h2>
                </div>

                <div class="hd-steps-row">
                    <!-- Step 1: Discovery & Baseline Audit -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-audit.png') }}" alt="IT Audit">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">Discovery & Baseline Audit</h3>
                            <p class="hd-step-desc">Deep scan of network topology, installed software versions, and current hardware health metrics to establish a performance baseline.</p>
                        </div>
                    </div>

                    <!-- Step 2: Policy Configuration & Automation -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-plan.png') }}" alt="IT Plan">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">Policy Configuration & Automation</h3>
                            <p class="hd-step-desc">Deploy monitoring agents and configure automated maintenance windows aligned with your operational schedule to minimize end-user disruption.</p>
                        </div>
                    </div>

                    <!-- Step 3: Continuous Remediation & Patching -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-implement.png') }}"
                                alt="IT Implement">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">Continuous Remediation & Patching</h3>
                            <p class="hd-step-desc">Routine deployment of critical updates and configuration changes during defined change windows, tracked through a dedicated ticketing audit trail.</p>
                        </div>
                    </div>

                    <!-- Step 4: Reporting & Strategic Roadmap -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-manage.png') }}" alt="IT Manage">
                        </div>
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">Reporting & Strategic Roadmap</h3>
                            <p class="hd-step-desc">Monthly executive summaries detailing system health trends, uptime statistics, and predictive capacity forecasts for future budgeting.</p>
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
                    <h2 class="hd-why-us-title">We are working with 10+ years experience</h2>
                    <p class="hd-why-us-text">
                        We deliver comprehensive system monitoring and preventive maintenance programs that empower businesses to operate with absolute reliability. Our proactive approach ensures your infrastructure identifies and resolves issues before they disrupt your workflow.
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
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Performance Baseline Analytics</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> 24/7 Infrastructure Telemetry</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Automated Patch Compliance</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> System State Backup Validation</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Resource Utilization Tuning</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Hardware Lifecycle Management</div>
                    </div>

                    <a href="{{ route('contactUs') }}" class="hd-btn-learn">Learn More →</a>
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
