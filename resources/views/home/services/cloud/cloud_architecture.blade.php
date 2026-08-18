@extends('home.includes.layout')
@section('title', 'Cloud Migration & Setup Services (AWS, Azure, GCP) | Mounteko')

@section('meta-description',
'Cloud migration, setup, and deployment for AWS, Azure, and GCP — planned and executed by Mounteko's cloud architects.')

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
                    <h3 class="cloud-hero-heading">Future‑proof your business with end‑to‑end cloud transformation services.</h3>
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
                        <div class="cloud-float-icon aws"><i class="bi bi-cloud-fill"></i></div>
                        <div class="cloud-float-text">
                            <strong>Multi-Cloud Vendor Management</strong>
                            <span>AWS / Azure / GCP / Hybrid</span>
                        </div>
                    </div>

                    <div class="cloud-float-card cloud-card-top-right">
                        <div class="cloud-float-chart">
                            <div class="cloud-chart-label">avg. cost optimization</div>
                            <div class="cloud-chart-bar-wrap">
                                <div class="cloud-chart-bar" style="height:60%"></div>
                                <div class="cloud-chart-bar" style="height:75%"></div>
                                <div class="cloud-chart-bar" style="height:50%"></div>
                                <div class="cloud-chart-bar highlight" style="height:90%"></div>
                            </div>
                            <div class="cloud-chart-value">$42k/yr</div>
                        </div>
                    </div>

                    <div class="cloud-float-card cloud-card-mid-left">
                        <div class="cloud-float-stat">
                            <span class="cloud-stat-num">99.99%</span>
                        </div>
                        <div class="cloud-float-desc">targeted uptime SLA</div>
                    </div>

                    <div class="cloud-float-card cloud-card-mid-right">
                        <div class="cloud-float-icon azure"><i class="bi bi-diagram-3-fill"></i></div>
                        <div class="cloud-float-text">
                            <strong>24/7 managed</strong>
                            <span>cloud services</span>
                        </div>
                    </div>

                    <div class="cloud-float-card cloud-card-bottom-right">
                        <div class="cloud-float-icon secure"><i class="bi bi-shield-check"></i></div>
                        <div class="cloud-float-text">
                            <strong>15+ years</strong>
                            <span>cloud infrastructure experience</span>
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
                    <h4 class="scale-title">We Help IT Companies<br>Scale Cloud Engineering</h4>
                    <p class="scale-desc">Your business shouldn’t slow down because your cloud doesn’t fit. We provide cloud implementation services that grow with you — from startup environments to enterprise‑grade multi‑region deployments. Our team handles the heavy lifting so your engineers focus on what matters: your product.</p>

                    <div class="scale-feature-list">
                        <div class="scale-feature-item">
                            <div class="scale-feature-icon">
                                <i class="bi bi-patch-check-fill"></i>
                            </div>
                            <div class="scale-feature-text">
                                <h5>Certified Cloud Partner</h5>
                                <p>ISO 27001, SOC 2, and AWS Advanced Tier partner with audited security and compliance frameworks.</p>
                            </div>
                        </div>
                        <div class="scale-feature-item">
                            <div class="scale-feature-icon scale-icon-alt">
                                <i class="bi bi-award-fill"></i>
                            </div>
                            <div class="scale-feature-text">
                                <h5>Award‑Winning Deployment</h5>
                                <p>Recognized for excellence in cloud deployment services with zero‑downtime migrations and automated CI/CD pipelines.</p>
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
                    <button class="dev-tab-btn" data-tab="analytics">Analytic Solutions</button>
                    <button class="dev-tab-btn active" data-tab="risk">Risk Management</button>
                    <button class="dev-tab-btn" data-tab="it-manage">IT Management</button>
                </div>

                <div class="dev-tab-content">
                    <!-- ANALYTIC SOLUTIONS TAB -->
                    <div class="dev-tab-pane" id="analytics">
                        <div class="dev-why-image">
                            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&q=80&w=700"
                                alt="Analytic Solutions">
                        </div>
                        <div class="dev-why-content">
                            <span class="dev-why-tag">CLOUD ANALYTICS</span>
                            <h2 class="dev-why-title">Transform raw cloud data into predictive intelligence</h2>
                            <p class="dev-why-desc">Stop guessing. Start knowing. Our analytic solutions turn logs, metrics, and traces into real‑time dashboards and long‑term trend analysis. We help you answer: Where are we spending too much? Which workloads underperform? What fails next?</p>
                            <ul class="dev-why-list">
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Cost intelligence dashboards – Visualize spend by service, team, or project with anomaly alerts
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Usage forecasting – ML‑driven predictions to right‑size resources and avoid over‑provisioning
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Custom reports – Scheduled exports for finance, engineering, or compliance teams
                                </li>
                            </ul>
                            <a href="{{ route('contactUs') }}" class="dev-why-cta">
                                START NOW <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- RISK MANAGEMENT TAB (ACTIVE) -->
                    <div class="dev-tab-pane active" id="risk">
                        <div class="dev-why-image">
                            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&q=80&w=700"
                                alt="Risk Management">
                        </div>
                        <div class="dev-why-content">
                            <h2 class="dev-why-title">Proactive risk detection across your entire cloud footprint</h2>
                            <p class="dev-why-desc">Security and compliance aren't "set and forget." Our risk management framework continuously scans, prioritizes, and remediates threats across identities, networks, data, and configurations.</p>
                            <ul class="dev-why-list">
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Compliance mapping – HIPAA, SOC2, ISO 27001, PCI‑DSS, GDPR
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Incident response runbooks – Pre‑tested workflows for breach scenarios
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Audit‑ready logging – Centralized with 12‑month retention
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
                            <span class="dev-why-tag">IT MANAGEMENT</span>
                            <h2 class="dev-why-title">Unified control plane for multi‑cloud and hybrid environments</h2>
                            <p class="dev-why-desc">Juggling AWS, Azure, GCP, and on‑prem? Stop toggling between consoles. Our IT management layer gives you a single pane of glass for governance, operations, and automation.</p>
                            <ul class="dev-why-list">
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Automated patch & version management
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Centralized security & access oversight
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Continuous compliance & audit readiness
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
                        <h2 class="dev-it-title">Custom IT Solutions for Your Business</h2>
                        <h4 style="font-size: 1.05rem; font-weight: 500; color: #4b5563; margin-bottom: 15px; font-family: 'Inter', sans-serif;">Your trusted cloud solutions provider for the entire lifecycle</h4>
                        <p class="dev-it-desc">Not every cloud fits every workload. We design enterprise cloud solutions tailored to your data, compliance needs, and growth roadmap. Whether lift‑and‑shift or full refactoring, we deliver.</p>

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
                                <i class="bi bi-gear-wide-connected it-card-icon"></i>
                                <h4 class="it-card-title">Cloud Setup Service</h4>
                                <p class="it-card-desc">Greenfield environment provisioning with IAC (Terraform, CDK)</p>
                            </div>

                            <!-- Card 2 -->
                            <div class="dev-it-card">
                                <i class="bi bi-cloud-check it-card-icon"></i>
                                <h4 class="it-card-title">Cloud Migration Services</h4>
                                <p class="it-card-desc">Minimal-downtime migration plans with rollback strategies</p>
                            </div>

                            <!-- Card 3 -->
                            <div class="dev-it-card">
                                <i class="bi bi-shield-lock it-card-icon"></i>
                                <h4 class="it-card-title">Cloud Deployment Services</h4>
                                <p class="it-card-desc">Blue/green, canary, or rolling deployments automated</p>
                            </div>

                            <!-- Card 4 -->
                            <div class="dev-it-card">
                                <i class="bi bi-folder-check it-card-icon"></i>
                                <h4 class="it-card-title">Managed Cloud Services</h4>
                                <p class="it-card-desc">24/7 monitoring, patching, backup, and disaster recovery</p>
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
                <h2 class="dev-process-title">How We Work</h2>
                <p style="text-align: center; color: #6b7280; font-size: 16px; margin-bottom: 40px;">Your roadmap to successful cloud transformation</p>
                <div class="dev-process-divider"></div>

                <div class="dev-process-steps">

                    <div class="dev-process-step" data-step="01">
                        <div class="dev-process-icon">
                            <i class="bi bi-grid-1x2"></i>
                        </div>
                        <h4>Choose a Service</h4>
                        <p>Select from cloud migration services, cloud setup, or ongoing managed cloud operations.</p>
                    </div>

                    <div class="dev-process-step" data-step="02">
                        <div class="dev-process-icon">
                            <i class="bi bi-calendar-check"></i>
                        </div>
                        <h4>Request a Meeting</h4>
                        <p>Meet with certified architects to define scope, timeline, and compliance needs.</p>
                    </div>

                    <div class="dev-process-step" data-step="03">
                        <div class="dev-process-icon">
                            <i class="bi bi-file-earmark-text"></i>
                        </div>
                        <h4>Receive Custom Plan</h4>
                        <p>Get a detailed runbook: architecture diagrams, cost estimates, and migration phases.</p>
                    </div>

                    <div class="dev-process-step last" data-step="04">
                        <div class="dev-process-icon">
                            <i class="bi bi-rocket-takeoff"></i>
                        </div>
                        <h4>Let’s Make it Happen</h4>
                        <p>We execute using AWS cloud migration services (or Azure/GCP) with post‑deployment support included.</p>
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
                            What cloud platforms do you support?
                            <i class="bi bi-chevron-up dev-faq-arrow"></i>
                        </button>
                        <div class="dev-faq-answer">
                            <p>We are a multi‑cloud cloud solutions provider supporting AWS, Microsoft Azure, and Google Cloud Platform (GCP). We also deliver enterprise cloud solutions for hybrid and on‑prem integrations.</p>
                        </div>
                    </div>

                    <div class="dev-faq-item">
                        <button class="dev-faq-question">
                            <span class="dev-faq-icon"><i class="bi bi-question-circle-fill"></i></span>
                            Do you offer ongoing managed cloud services after deployment?
                            <i class="bi bi-chevron-down dev-faq-arrow"></i>
                        </button>
                        <div class="dev-faq-answer" style="display:none;">
                            <p>Yes. Our managed cloud services include 24/7 monitoring, automated backups, security patching, and cost optimization reviews.</p>
                        </div>
                    </div>

                    <div class="dev-faq-item">
                        <button class="dev-faq-question">
                            <span class="dev-faq-icon"><i class="bi bi-question-circle-fill"></i></span>
                            Can you help with a multi‑cloud strategy?
                            <i class="bi bi-chevron-down dev-faq-arrow"></i>
                        </button>
                        <div class="dev-faq-answer" style="display:none;">
                            <p>Absolutely. We design cloud infrastructure services that work across AWS, Azure, and GCP with consistent policy and identity management.</p>
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