@extends('home.includes.layout')
@section('title', 'Cloud Security & Compliance | Mounteko')

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
        @media (min-width: 992px) {
            .dev-process-step h4 { font-size: 1rem !important; white-space: nowrap; letter-spacing: -0.3px; }
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
                    <h3 class="cloud-hero-heading">Enforce Cloud Security & Compliance</h3>
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
                        <div class="cloud-float-icon aws"><i class="bi bi-shield-check"></i></div>
                        <div class="cloud-float-text">
                            <strong>Compliance Frameworks</strong>
                            <span>SOC 2, ISO 27001, PCI DSS, HIPAA</span>
                        </div>
                    </div>

                    <div class="cloud-float-card cloud-card-top-right">
                        <div class="cloud-float-chart">
                            <div class="cloud-chart-label">Security Posture Score</div>
                            <div class="cloud-chart-bar-wrap">
                                <div class="cloud-chart-bar" style="height:60%"></div>
                                <div class="cloud-chart-bar" style="height:75%"></div>
                                <div class="cloud-chart-bar" style="height:50%"></div>
                                <div class="cloud-chart-bar highlight" style="height:94%"></div>
                            </div>
                            <div class="cloud-chart-value">94% avg improvement</div>
                        </div>
                    </div>

                    <div class="cloud-float-card cloud-card-mid-left">
                        <div class="cloud-float-icon secure"><i class="bi bi-shield-lock"></i></div>
                        <div class="cloud-float-text">
                            <strong>Threat Detection</strong>
                            <span>& Real-Time Response</span>
                        </div>
                    </div>

                    <div class="cloud-float-card cloud-card-mid-right">
                        <div class="cloud-float-icon azure"><i class="bi bi-check2-all"></i></div>
                        <div class="cloud-float-text">
                            <strong>Automated Compliance Checks</strong>
                            <span>Continuous Audit Readiness</span>
                        </div>
                    </div>

                    <div class="cloud-float-card cloud-card-bottom-right">
                        <div class="cloud-float-icon secure"><i class="bi bi-clouds"></i></div>
                        <div class="cloud-float-text">
                            <strong>Multi-Cloud Security</strong>
                            <span>AWS, Azure, GCP Native</span>
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
                    <h4 class="scale-title">Security misconfigurations and compliance gaps are the leading causes of data breaches.</h4>
                    <p class="scale-desc">We help you implement enterprise-grade cloud security services that protect workloads across AWS, Azure, and GCP. Our managed cloud security services provide 24/7 threat detection, while our cloud compliance services ensure you stay audit-ready at all times.</p>

                    <div class="scale-feature-list">
                        <div class="scale-feature-item">
                            <div class="scale-feature-icon">
                                <i class="bi bi-patch-check-fill"></i>
                            </div>
                            <div class="scale-feature-text">
                                <h5>Certified Security Architects</h5>
                                <p>Former enterprise security leaders with AWS, Azure, and GCP certifications. We don't just recommend tools—we build secure-by-design architectures.</p>
                            </div>
                        </div>
                        <div class="scale-feature-item">
                            <div class="scale-feature-icon scale-icon-alt">
                                <i class="bi bi-award-fill"></i>
                            </div>
                            <div class="scale-feature-text">
                                <h5>Award-Winning Compliance</h5>
                                <p>Recognized for excellence in regulatory compliance automation. We've helped SaaS, fintech, and healthcare companies pass SOC 2, ISO 27001, PCI DSS, and HIPAA audits.</p>
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
                    <button class="dev-tab-btn active" data-tab="analytics">CLOUD SECURITY & COMPLIANCE</button>
                    <button class="dev-tab-btn" data-tab="risk">Compliance Without Chaos</button>
                    <button class="dev-tab-btn" data-tab="it-manage">IT SECURITY & COMPLIANCE</button>
                </div>

                <div class="dev-tab-content">
                    <!-- ANALYTIC SOLUTIONS TAB -->
                    <div class="dev-tab-pane active" id="analytics">
                        <div class="dev-why-image">
                            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&q=80&w=700"
                                alt="Analytic Solutions">
                        </div>
                        <div class="dev-why-content">
                            <span class="dev-why-tag">CLOUD SECURITY</span>
                            <h2 class="dev-why-title">Transforming cloud security into a business enabler</h2>
                            <p class="dev-why-desc">Move beyond reactive security. We build proactive cloud security solutions that detect threats in real time, enforce least-privilege access, and automate compliance evidence collection—turning security from a bottleneck into a competitive advantage.</p>
                            <ul class="dev-why-list">
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Real-time threat detection and automated response
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Infrastructure-as-Code security scanning (Terraform, CloudFormation)
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Unified security posture management across AWS, Azure, GCP
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
                            <span class="dev-why-tag">COMPLIANCE</span>
                            <h2 class="dev-why-title">Real-time security telemetry & automated compliance validation</h2>
                            <p class="dev-why-desc">Traditional log monitoring creates noise, not action. We help you transform raw security telemetry into automated compliance evidence and proactive threat intelligence. Our platform correlates events across AWS, Azure, and GCP so you always know exactly where you stand before an auditor asks.</p>
                            <ul class="dev-why-list">
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Centralized security log aggregation and SIEM integration
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Automated compliance evidence collection
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Continuous configuration drift detection
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
                            <span class="dev-why-tag">IT SECURITY</span>
                            <h2 class="dev-why-title">Strengthening infrastructure with unified cloud governance</h2>
                            <p class="dev-why-desc">Simplify security operations with centralized control. Our IT security and compliance services provide the governance, policy enforcement, and audit automation needed to run a lean, secure cloud ecosystem.</p>
                            <ul class="dev-why-list">
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Unified policy-as-code across multi-cloud environments
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Automated patch and vulnerability management
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Continuous compliance and audit trail reporting
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
                        <h2 class="dev-it-title">Enterprise-Grade Cloud Security & Compliance</h2>
                        <p class="dev-it-desc">You don't need another checklist. You need a partner who understands how to balance security agility with regulatory rigor. We've spent 20+ years helping SaaS, fintech, healthcare, and enterprise companies secure multi-cloud environments — without slowing down innovation. From architecture design to managed detection and response, every solution is tailored to your risk profile and business goals.</p>

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
                                <i class="bi bi-shield-lock it-card-icon"></i>
                                <h4 class="it-card-title">Cloud Security Services & Solutions</h4>
                                <p class="it-card-desc">Comprehensive threat protection across AWS, Azure, and GCP</p>
                            </div>

                            <!-- Card 2 -->
                            <div class="dev-it-card">
                                <i class="bi bi-file-earmark-check it-card-icon"></i>
                                <h4 class="it-card-title">Cloud Compliance & Audit Services</h4>
                                <p class="it-card-desc">Automated compliance evidence collection for 50+ frameworks</p>
                            </div>

                            <!-- Card 3 -->
                            <div class="dev-it-card">
                                <i class="bi bi-eye it-card-icon"></i>
                                <h4 class="it-card-title">Managed Cloud Security & IT Security Services</h4>
                                <p class="it-card-desc">24/7 monitoring, threat hunting, and incident response</p>
                            </div>

                            <!-- Card 4 -->
                            <div class="dev-it-card">
                                <i class="bi bi-person-badge it-card-icon"></i>
                                <h4 class="it-card-title">Cloud Security Consulting & AWS Cloud Security</h4>
                                <p class="it-card-desc">Strategic guidance and native AWS security tools</p>
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
                        <h4>Assess & Gap Analysis</h4>
                        <p>Review your current cloud security posture, compliance gaps, and risk exposure.</p>
                    </div>

                    <div class="dev-process-step" data-step="02">
                        <div class="dev-process-icon">
                            <i class="bi bi-bezier2"></i>
                        </div>
                        <h4>Design & Architecture</h4>
                        <p>Create a secure-by-design cloud architecture with policy-as-code and zero-trust controls.</p>
                    </div>

                    <div class="dev-process-step" data-step="03">
                        <div class="dev-process-icon">
                            <i class="bi bi-gear-wide-connected"></i>
                        </div>
                        <h4>Deploy & Integrate</h4>
                        <p>Deploy CSPM, SIEM, and compliance automation tools across AWS, Azure, or GCP.</p>
                    </div>

                    <div class="dev-process-step last" data-step="04">
                        <div class="dev-process-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4>Monitor & Continuously Improve</h4>
                        <p>24/7 managed security monitoring, monthly compliance audits, and ongoing optimization.</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION: FAQ -->
        <section class="dev-faq-section">
            <div class="dev-faq-container">

                <div class="dev-faq-left">
                    <span class="dev-faq-tag">— FAQ</span>
                    <h2 class="dev-faq-title">Most common questions about our cloud security services</h2>
                    <a href="{{ route('contactUs') }}" class="dev-faq-btn">View All</a>
                </div>

                <div class="dev-faq-right">

                    <div class="dev-faq-item active">
                        <button class="dev-faq-question">
                            <span class="dev-faq-icon"><i class="bi bi-question-circle-fill"></i></span>
                            What cloud security services do you offer?
                            <i class="bi bi-chevron-up dev-faq-arrow"></i>
                        </button>
                        <div class="dev-faq-answer">
                            <p>We offer complete cloud security services including threat detection, IAM, encryption, CSPM, CWPP, and SIEM integration across AWS, Azure, and GCP.</p>
                        </div>
                    </div>

                    <div class="dev-faq-item">
                        <button class="dev-faq-question">
                            <span class="dev-faq-icon"><i class="bi bi-question-circle-fill"></i></span>
                            How do your cloud compliance services work?
                            <i class="bi bi-chevron-down dev-faq-arrow"></i>
                        </button>
                        <div class="dev-faq-answer" style="display:none;">
                            <p>Our cloud compliance services automate evidence collection, policy enforcement, and audit reporting for frameworks like SOC 2, ISO 27001, PCI DSS, HIPAA, and GDPR.</p>
                        </div>
                    </div>

                    <div class="dev-faq-item">
                        <button class="dev-faq-question">
                            <span class="dev-faq-icon"><i class="bi bi-question-circle-fill"></i></span>
                            Do you provide managed cloud security services?
                            <i class="bi bi-chevron-down dev-faq-arrow"></i>
                        </button>
                        <div class="dev-faq-answer" style="display:none;">
                            <p>Yes. Our managed cloud security services include 24/7 monitoring, threat hunting, incident response, and monthly security briefings—fully hands-off for your team.</p>
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
