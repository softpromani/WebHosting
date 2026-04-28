@extends('home.includes.layout')
@section('title', 'Backup, Disaster Recovery & Data Protection | Mounteko')

@section('header-area')
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/new_home_custom.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/cybersecurity_services.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/cloud_architecture.css') }}">
    <style>
        /* Override global heading sizes for this page */
        .cloud-hero-heading { font-size: 28px !important; }
        .scale-title, .dev-why-title, .dev-it-title, .dev-process-title, .dev-faq-title, .dev-blog-title { font-size: 1.8rem !important; line-height: 1.3 !important; }
        @media (max-width: 767px) { 
            .scale-title, .dev-why-title, .dev-it-title, .dev-process-title, .dev-faq-title, .dev-blog-title { font-size: 1.5rem !important; } 
        }
    </style>
@endsection

@section('content')
    <main id="main">

        <!-- CLOUD HERO SECTION -->
        <section class="cloud-hero">
            <div class="cloud-hero-container">

                <!-- LEFT: Heading + Buttons -->
                <div class="cloud-hero-left">
                    <h3 class="cloud-hero-heading">Backup, Disaster Recovery & Data Protection to ensure full-stack business resilience.</h3>
                    <div class="cloud-hero-btns">
                        <a href="{{ route('contactUs') }}" class="cloud-btn-primary">
                            <i class="bi bi-download"></i> Request proposal
                        </a>
                        <a href="{{ route('contactUs') }}" class="cloud-btn-outline">
                            Schedule free consultation
                        </a>
                    </div>
                </div>

                <!-- RIGHT: Person + Floating Cloud Cards -->
                <div class="cloud-hero-right">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=600"
                        alt="Cloud Consultant" class="cloud-hero-person">

                    <!-- Floating Cards -->
                    <div class="cloud-float-card cloud-card-top-left">
                        <div class="cloud-float-icon aws"><i class="bi bi-clock-history"></i></div>
                        <div class="cloud-float-text">
                            <strong>Average Recovery Time</strong>
                            <span><15 min</span>
                        </div>
                    </div>

                    <div class="cloud-float-card cloud-card-top-right">
                        <div class="cloud-float-chart">
                            <div class="cloud-chart-label">Restore Success Rate</div>
                            <div class="cloud-chart-bar-wrap">
                                <div class="cloud-chart-bar" style="height:60%"></div>
                                <div class="cloud-chart-bar" style="height:75%"></div>
                                <div class="cloud-chart-bar" style="height:50%"></div>
                                <div class="cloud-chart-bar highlight" style="height:100%"></div>
                            </div>
                            <div class="cloud-chart-value">99.99%</div>
                        </div>
                    </div>

                    <div class="cloud-float-card cloud-card-mid-left">
                        <div class="cloud-float-icon secure"><i class="bi bi-lock-fill"></i></div>
                        <div class="cloud-float-text">
                            <strong>Data Immutability</strong>
                            <span>& Ransomware Proof</span>
                        </div>
                    </div>

                    <div class="cloud-float-card cloud-card-mid-right">
                        <div class="cloud-float-icon azure"><i class="bi bi-cloud-arrow-up-fill"></i></div>
                        <div class="cloud-float-text">
                            <strong>Automated Failover</strong>
                            <span>Multi-Cloud DR Orchestration</span>
                        </div>
                    </div>

                    <div class="cloud-float-card cloud-card-bottom-right">
                        <div class="cloud-float-icon secure"><i class="bi bi-shield-check"></i></div>
                        <div class="cloud-float-text">
                            <strong>Compliance Standards</strong>
                            <span>SOC2 / ISO 27001</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <!-- SECTION: SCALE ENGINEERING -->
        <section class="dev-scale-section">
            <div class="dev-scale-container">

                <div class="dev-scale-images">
                    <div class="scale-dot-pattern"></div>
                    <img src="https://images.unsplash.com/photo-1484557052118-f32bd25b45b5?auto=format&fit=crop&q=80&w=600"
                        alt="Cloud Engineer" class="scale-img-top">
                    <img src="https://images.unsplash.com/photo-1531746790731-6c087fecd65a?auto=format&fit=crop&q=80&w=500"
                        alt="Cloud Team" class="scale-img-bottom">
                    <div class="scale-years-badge">
                        <span class="scale-years-num">20</span>
                        <span class="scale-years-text">Years Of<br>Experience</span>
                    </div>
                </div>

                <div class="dev-scale-content">
                    <h4 class="scale-title">Ensure Business Continuity with Enterprise-Grade Backup & DR</h4>
                    <p class="scale-desc">We help you eliminate downtime risk with fully managed backup and disaster recovery services that ensure rapid recovery, data integrity, and operational continuity — whether you run on AWS, Azure, Google Cloud, or on-premise infrastructure.</p>

                    <div class="scale-feature-list">
                        <div class="scale-feature-item">
                            <div class="scale-feature-icon">
                                <i class="bi bi-patch-check-fill"></i>
                            </div>
                            <div class="scale-feature-text">
                                <h5>Certified BCDR Specialists</h5>
                                <p>Verified recovery testing every 30 days with documented runbooks. We don't just configure backups — we prove restoration under real-world failure scenarios.</p>
                            </div>
                        </div>
                        <div class="scale-feature-item">
                            <div class="scale-feature-icon scale-icon-alt">
                                <i class="bi bi-award-fill"></i>
                            </div>
                            <div class="scale-feature-text">
                                <h5>Award-Winning Business Continuity</h5>
                                <p>Recognised for excellence in business continuity solutions. Our strategies have kept enterprises operational through ransomware, hardware failures, and natural disasters.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="dev-why-section">
            <div class="dev-why-container">
                <!-- TAB NAVIGATION -->
                <div class="dev-tabs-nav">
                    <button class="dev-tab-btn active" data-tab="analytics">DATA PROTECTION & RECOVERY</button>
                    <button class="dev-tab-btn" data-tab="risk">DATA-DRIVEN RESILIENCE</button>
                    <button class="dev-tab-btn" data-tab="it-manage">IT DISASTER RECOVERY</button>
                </div>

                <div class="dev-tab-content">
                    <!-- ANALYTIC SOLUTIONS TAB -->
                    <div class="dev-tab-pane active" id="analytics">
                        <div class="dev-why-image">
                            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&q=80&w=700"
                                alt="Analytic Solutions">
                        </div>
                        <div class="dev-why-content">
                            <span class="dev-why-tag">PROTECTION</span>
                            <h2 class="dev-why-title">Transforming data protection services into your strongest security layer</h2>
                            <p class="dev-why-desc">Stop treating backup as an afterthought. We build proactive data protection services that combine immutable storage, anomaly detection, and instant recovery — turning your backup infrastructure into an active defence against data loss and cyber threats.</p>
                            <ul class="dev-why-list">
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Real-time replication with sub-15-minute RPO
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    AI-driven ransomware detection before encryption spreads
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Unified DR orchestration across AWS, Azure, and on-prem
                                </li>
                            </ul>
                            <a href="{{ route('contactUs') }}" class="dev-why-cta">
                                START NOW <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- RISK MANAGEMENT TAB -->
                    <div class="dev-tab-pane" id="risk">
                        <div class="dev-why-image">
                            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&q=80&w=700"
                                alt="Risk Management">
                        </div>
                        <div class="dev-why-content">
                            <h2 class="dev-why-title">From backup storage to guaranteed recovery. Zero failure tolerated.</h2>
                            <p class="dev-why-desc">Automated recovery testing has increased our clients' restore success rates from 62% to 99.9%. We continuously monitor backup integrity, test failover workflows, and provide actionable intelligence to eliminate hidden recovery gaps.</p>
                            <ul class="dev-why-list">
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Automated daily recovery drills with pass/fail reporting
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Cross-region backup redundancy for geographic resilience
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    One-click failover & failback with zero data loss
                                </li>
                            </ul>
                            <a href="{{ route('contactUs') }}" class="dev-why-cta">
                                START NOW <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- IT MANAGEMENT TAB -->
                    <div class="dev-tab-pane" id="it-manage">
                        <div class="dev-why-image">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=700"
                                alt="IT Management">
                        </div>
                        <div class="dev-why-content">
                            <span class="dev-why-tag">RECOVERY</span>
                            <h2 class="dev-why-title">Strengthening infrastructure with IT disaster recovery solutions and unified DR management</h2>
                            <p class="dev-why-desc">Simplify complex recovery with centralized control. Our IT disaster recovery solutions provide automated orchestration, governance, and compliance-ready reporting — so your team can fail over with confidence, anytime.</p>
                            <ul class="dev-why-list">
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Orchestrated multi-cloud failover (AWS, Azure, GCP)
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Centralized recovery runbooks with version control
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Continuous compliance audits for HIPAA, GDPR, SOC 2
                                </li>
                            </ul>
                            <a href="{{ route('contactUs') }}" class="dev-why-cta">
                                START NOW <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- SECTION: CUSTOM IT SOLUTIONS -->
        <section class="dev-it-solutions">
            <div class="dev-it-container">
                <div class="dev-it-row">

                    <!-- Left Column -->
                    <div class="dev-it-left">
                        <span class="dev-it-tag">WHY CHOOSE US</span>
                        <h2 class="dev-it-title">Custom backup and disaster recovery services for your business</h2>
                        <p class="dev-it-desc">We provide custom backup and disaster recovery solutions tailored to your business needs. Our proven approach ensures minimal downtime, data integrity, and faster restore success rates through meaningful recovery telemetry. With a focus on reliability and proactive protection, we help you maintain business continuity even in the face of unexpected disruptions.</p>

                        <a href="javascript:void(0)" class="video-showcase-btn">
                            <div class="video-play-icon">
                                <i class="bi bi-play-fill"></i>
                            </div>
                            <span class="video-text">VIDEO SHOWCASE</span>
                        </a>
                    </div>

                    <!-- Right Column Grid -->
                    <div class="dev-it-right">
                        <div class="dev-it-grid">
                            <!-- Card 1: Active -->
                            <div class="dev-it-card active">
                                <i class="bi bi-hdd-network it-card-icon"></i>
                                <h4 class="it-card-title">Data Backup Services</h4>
                                <p class="it-card-desc">Automated, encrypted, verified backups with instant file/folder restore</p>
                            </div>

                            <!-- Card 2 -->
                            <div class="dev-it-card">
                                <i class="bi bi-shield-check it-card-icon"></i>
                                <h4 class="it-card-title">Data Protection Services</h4>
                                <p class="it-card-desc">End-to-end encryption, access controls, and ransomware-proof immutability</p>
                            </div>

                            <!-- Card 3 -->
                            <div class="dev-it-card">
                                <i class="bi bi-activity it-card-icon"></i>
                                <h4 class="it-card-title">Business Continuity Solutions</h4>
                                <p class="it-card-desc">Maintain critical operations during outages, cyberattacks, or facility loss</p>
                            </div>

                            <!-- Card 4 -->
                            <div class="dev-it-card">
                                <i class="bi bi-arrow-counterclockwise it-card-icon"></i>
                                <h4 class="it-card-title">Data Recovery Services</h4>
                                <p class="it-card-desc">Forensic-level recovery from failed drives, corrupted DBs, or accidental deletion</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION: HOW WE WORKS -->
        <section class="dev-process-section">
            <div class="dev-process-container">
                <span class="dev-process-tag">PROCESS</span>
                <h2 class="dev-process-title">How We Works</h2>
                <div class="dev-process-divider"></div>

                <div class="dev-process-steps">

                    <div class="dev-process-step" data-step="01">
                        <div class="dev-process-icon">
                            <i class="bi bi-search"></i>
                        </div>
                        <h4>Assess & Audit</h4>
                        <p>Review your current infrastructure, define RTO/RPO, identify compliance needs, and audit existing backup gaps.</p>
                    </div>

                    <div class="dev-process-step" data-step="02">
                        <div class="dev-process-icon">
                            <i class="bi bi-bezier2"></i>
                        </div>
                        <h4>Design Strategy</h4>
                        <p>Create a customized BCDR plan selecting from cloud backup services, DRaaS services, hybrid, or on-premise architecture.</p>
                    </div>

                    <div class="dev-process-step" data-step="03">
                        <div class="dev-process-icon">
                            <i class="bi bi-gear-wide-connected"></i>
                        </div>
                        <h4>Deploy & Integrate</h4>
                        <p>Deploy automated backup, replication, and failover systems with zero downtime. Integrate with your existing stack.</p>
                    </div>

                    <div class="dev-process-step last" data-step="04">
                        <div class="dev-process-icon">
                            <i class="bi bi-clipboard-check"></i>
                        </div>
                        <h4>Test & Maintain</h4>
                        <p>Run automated recovery drills every 30 days, update runbooks, and provide 24/7 monitoring with proactive alerting.</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION: FAQ -->
        <section class="dev-faq-section">
            <div class="dev-faq-container">

                <div class="dev-faq-left">
                    <span class="dev-faq-tag">— FAQ</span>
                    <h2 class="dev-faq-title">Most common questions about backup and disaster recovery services</h2>
                    <a href="{{ route('contactUs') }}" class="dev-faq-btn">View All</a>
                </div>

                <div class="dev-faq-right">

                    <div class="dev-faq-item active">
                        <button class="dev-faq-question">
                            <span class="dev-faq-icon"><i class="bi bi-question-circle-fill"></i></span>
                            What backup and disaster recovery services do you offer?
                            <i class="bi bi-chevron-up dev-faq-arrow"></i>
                        </button>
                        <div class="dev-faq-answer">
                            <p>We provide complete backup and disaster recovery services including data backup services, managed backup services, DRaaS services, cloud backup services, and IT disaster recovery solutions. We also offer data recovery services for existing failed infrastructure.</p>
                        </div>
                    </div>

                    <div class="dev-faq-item">
                        <button class="dev-faq-question">
                            <span class="dev-faq-icon"><i class="bi bi-question-circle-fill"></i></span>
                            How do your data recovery services work?
                            <i class="bi bi-chevron-down dev-faq-arrow"></i>
                        </button>
                        <div class="dev-faq-answer" style="display:none;">
                            <p>Our data recovery services use forensic-grade tools and redundant immutable backups to restore lost or corrupted data — even from ransomware attacks, physically damaged media, or accidental deletion.</p>
                        </div>
                    </div>

                    <div class="dev-faq-item">
                        <button class="dev-faq-question">
                            <span class="dev-faq-icon"><i class="bi bi-question-circle-fill"></i></span>
                            Do you offer managed backup services?
                            <i class="bi bi-chevron-down dev-faq-arrow"></i>
                        </button>
                        <div class="dev-faq-answer" style="display:none;">
                            <p>Yes. Our managed backup services include 24/7 monitoring, automated recovery testing, proactive alerting, and detailed reporting. Completely hands-off for your internal team.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION: LATEST FROM OUR BLOG -->
        <section class="dev-blog-section">
            <div class="dev-blog-container">
                <span class="dev-blog-tag">POPULAR NEWS</span>
                <h2 class="dev-blog-title">Latest From Our Blog</h2>
                <div class="dev-blog-divider"></div>

                <div class="dev-blog-grid">

                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&q=80&w=700"
                                alt="Technology Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-tech">TECHNOLOGY</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 31 Aug, 2020</span>
                                <span><i class="bi bi-person"></i> By Admin</span>
                            </div>
                            <h4 class="dev-blog-heading">Additions in conveying or collected objection</h4>
                        </div>
                    </div>

                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1515378960530-7c0da6231fb1?auto=format&fit=crop&q=80&w=700"
                                alt="Cloud Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-firewall">CLOUD</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 08 Oct, 2020</span>
                                <span><i class="bi bi-person"></i> By Admin</span>
                            </div>
                            <h4 class="dev-blog-heading">Discourse ye continued pronounce we abilities</h4>
                        </div>
                    </div>

                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&q=80&w=700"
                                alt="Infrastructure Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-security">INFRASTRUCTURE</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 27 Sep, 2020</span>
                                <span><i class="bi bi-person"></i> By Admin</span>
                            </div>
                            <h4 class="dev-blog-heading">Children greatest online extended delicate of</h4>
                        </div>
                    </div>

                </div>
            </div>
        </section>



    </main>

    <script>
        // FAQ Accordion
        document.querySelectorAll('.dev-faq-question').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var item = this.closest('.dev-faq-item');
                var answer = item.querySelector('.dev-faq-answer');
                var arrow = this.querySelector('.dev-faq-arrow');
                var isOpen = item.classList.contains('active');

                document.querySelectorAll('.dev-faq-item').forEach(function (i) {
                    i.classList.remove('active');
                    i.querySelector('.dev-faq-answer').style.display = 'none';
                    var a = i.querySelector('.dev-faq-arrow');
                    a.classList.remove('bi-chevron-up');
                    a.classList.add('bi-chevron-down');
                });

                if (!isOpen) {
                    item.classList.add('active');
                    answer.style.display = 'block';
                    arrow.classList.remove('bi-chevron-down');
                    arrow.classList.add('bi-chevron-up');
                }
            });
        });

        // Tab Switching Logic
        document.querySelectorAll('.dev-tab-btn').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var tabId = this.getAttribute('data-tab');

                // Remove active class from all buttons
                document.querySelectorAll('.dev-tab-btn').forEach(function (b) {
                    b.classList.remove('active');
                });

                // Add active class to clicked button
                this.classList.add('active');

                // Hide all tab panes
                document.querySelectorAll('.dev-tab-pane').forEach(function (pane) {
                    pane.classList.remove('active');
                });

                // Show selected tab pane
                var targetPane = document.getElementById(tabId);
                if (targetPane) {
                    targetPane.classList.add('active');
                }
            });
        });
    </script>
@endsection
