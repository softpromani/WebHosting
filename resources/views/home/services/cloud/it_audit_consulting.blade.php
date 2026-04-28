@extends('home.includes.layout')
@section('title', 'IT Audit, Consulting & Cost Optimization | Mounteko')

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
                    <h3 class="cloud-hero-heading">Optimize, Audit & Transform IT Operations</h3>
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
                        <div class="cloud-float-icon aws"><i class="bi bi-graph-down-arrow"></i></div>
                        <div class="cloud-float-text">
                            <strong>Average Cost Reduction</strong>
                            <span>32%</span>
                        </div>
                    </div>

                    <div class="cloud-float-card cloud-card-top-right">
                        <div class="cloud-float-chart">
                            <div class="cloud-chart-label">IT Efficiency Gain</div>
                            <div class="cloud-chart-bar-wrap">
                                <div class="cloud-chart-bar" style="height:60%"></div>
                                <div class="cloud-chart-bar" style="height:75%"></div>
                                <div class="cloud-chart-bar" style="height:50%"></div>
                                <div class="cloud-chart-bar highlight" style="height:95%"></div>
                            </div>
                            <div class="cloud-chart-value">45%</div>
                        </div>
                    </div>

                    <div class="cloud-float-card cloud-card-mid-left">
                        <div class="cloud-float-icon secure"><i class="bi bi-file-earmark-check"></i></div>
                        <div class="cloud-float-text">
                            <strong>Compliance Readiness</strong>
                            <span>& Audit Pass Rate</span>
                        </div>
                    </div>

                    <div class="cloud-float-card cloud-card-mid-right">
                        <div class="cloud-float-icon azure"><i class="bi bi-shield-check"></i></div>
                        <div class="cloud-float-text">
                            <strong>Security & Compliance</strong>
                            <span>SOC 2 / ISO 27001 / GDPR</span>
                        </div>
                    </div>

                    <div class="cloud-float-card cloud-card-bottom-right">
                        <div class="cloud-float-icon aws"><i class="bi bi-award"></i></div>
                        <div class="cloud-float-text">
                            <strong>Years Of Experience</strong>
                            <span>15</span>
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
                        <span class="scale-years-num">15</span>
                        <span class="scale-years-text">Years Of<br>Experience</span>
                    </div>
                </div>

                <div class="dev-scale-content">
                    <h4 class="scale-title">Hidden inefficiencies and unchecked cloud spend drain profits.</h4>
                    <p class="scale-desc">We help you implement IT audit and consulting services that uncover waste, strengthen compliance, and align technology with business goals. From infrastructure reviews to full-scale optimization, we turn IT into a competitive advantage.</p>

                    <div class="scale-feature-list">
                        <div class="scale-feature-item">
                            <div class="scale-feature-icon">
                                <i class="bi bi-patch-check-fill"></i>
                            </div>
                            <div class="scale-feature-text">
                                <h5>Certified IT Auditors</h5>
                                <p>Independent, thorough IT infrastructure audit with actionable remediation plans. We identify risks, gaps, and overprovisioning before they cost you.</p>
                            </div>
                        </div>
                        <div class="scale-feature-item">
                            <div class="scale-feature-icon scale-icon-alt">
                                <i class="bi bi-award-fill"></i>
                            </div>
                            <div class="scale-feature-text">
                                <h5>Award-Winning Consulting</h5>
                                <p>Recognized for delivering measurable ROI through technology consulting services. Our clients see 30%+ cost savings within six months.</p>
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
                    <button class="dev-tab-btn active" data-tab="analytics">Reclamation</button>
                    <button class="dev-tab-btn" data-tab="risk">Optimization</button>
                    <button class="dev-tab-btn" data-tab="it-manage">Assurance</button>
                </div>

                <div class="dev-tab-content">
                    <!-- ANALYTIC SOLUTIONS TAB -->
                    <div class="dev-tab-pane active" id="analytics">
                        <div class="dev-why-image">
                            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&q=80&w=700"
                                alt="Analytic Solutions">
                        </div>
                        <div class="dev-why-content">
                            <span class="dev-why-tag">RECLAMATION</span>
                            <h2 class="dev-why-title">Transforming cloud waste into strategic savings</h2>
                            <p class="dev-why-desc">Stop paying for idle resources. We provide IT cost optimization services that analyze usage patterns, right-size instances, and eliminate waste—turning your IT budget from a cost center into a growth enabler.</p>
                            <ul class="dev-why-list">
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Real-time cost anomaly detection
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Reserved instance & savings plan recommendations
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Automated rightsizing & scheduling
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
                            <span class="dev-why-tag">OPTIMIZATION</span>
                            <h2 class="dev-why-title">Collecting meaningful infrastructure data & improving spend efficiency</h2>
                            <p class="dev-why-desc">Precise observability reveals hidden cost patterns across cloud environments. Our analytics provide actionable financial governance. We optimize every resource consumed.</p>
                            <ul class="dev-why-list">
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Granular cost allocation & chargeback
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Underutilized resource identification
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Predictive budget forecasting
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
                            <span class="dev-why-tag">ASSURANCE</span>
                            <h2 class="dev-why-title">Strengthening systems with comprehensive audit & advisory</h2>
                            <p class="dev-why-desc">Gain complete visibility into your IT estate. Our IT audit services provide the governance, security oversight, and risk assessment needed to run a compliant, efficient, and secure infrastructure.</p>
                            <ul class="dev-why-list">
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Full-stack IT infrastructure audit (network, servers, cloud, endpoints)
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Compliance gap analysis (SOC 2, ISO 27001, PCI DSS, HIPAA)
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Vendor contract & license optimization
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
                        <h2 class="dev-it-title">Enterprise-grade software. Tailored to your workflow. Built to grow with you.</h2>
                        <p class="dev-it-desc">Every business faces unique challenges — and generic, off-the-shelf software rarely solves them. That’s why we deliver top custom IT solutions designed specifically around your operations, goals, and industry demands. Whether you need a scalable CRM, a real-time analytics dashboard, or a fully managed IT infrastructure, our solutions evolve with your business.</p>

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
                                <i class="bi bi-code-slash it-card-icon"></i>
                                <h4 class="it-card-title">Enterprise-grade software development</h4>
                                <p class="it-card-desc">Custom CRMs, ERPs, and business automation tools.</p>
                            </div>

                            <!-- Card 2 -->
                            <div class="dev-it-card">
                                <i class="bi bi-cloud-arrow-up it-card-icon"></i>
                                <h4 class="it-card-title">Cloud integration & migration</h4>
                                <p class="it-card-desc">Seamless access, storage, and scalability.</p>
                            </div>

                            <!-- Card 3 -->
                            <div class="dev-it-card">
                                <i class="bi bi-robot it-card-icon"></i>
                                <h4 class="it-card-title">AI-driven automation</h4>
                                <p class="it-card-desc">Smarter workflows, reduced manual effort.</p>
                            </div>

                            <!-- Card 4 -->
                            <div class="dev-it-card">
                                <i class="bi bi-shield-lock it-card-icon"></i>
                                <h4 class="it-card-title">Advanced cybersecurity frameworks</h4>
                                <p class="it-card-desc">Protect sensitive data and ensure compliance.</p>
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
                        <h4>Discover & Assess</h4>
                        <p>We inventory your entire IT estate, spending, and compliance posture.</p>
                    </div>

                    <div class="dev-process-step" data-step="02">
                        <div class="dev-process-icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h4>Analyze & Benchmark</h4>
                        <p>We compare your metrics against industry standards and identify waste.</p>
                    </div>

                    <div class="dev-process-step" data-step="03">
                        <div class="dev-process-icon">
                            <i class="bi bi-card-checklist"></i>
                        </div>
                        <h4>Recommend & Plan</h4>
                        <p>We deliver a prioritized roadmap of IT optimization services with ROI projections.</p>
                    </div>

                    <div class="dev-process-step last" data-step="04">
                        <div class="dev-process-icon">
                            <i class="bi bi-rocket-takeoff"></i>
                        </div>
                        <h4>Implement & Optimize</h4>
                        <p>We execute changes, track savings, and provide ongoing IT advisory services.</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION: FAQ -->
        <section class="dev-faq-section">
            <div class="dev-faq-container">

                <div class="dev-faq-left">
                    <span class="dev-faq-tag">— FAQ</span>
                    <h2 class="dev-faq-title">Most common question about our IT audit & consulting services</h2>
                    <a href="{{ route('contactUs') }}" class="dev-faq-btn">View All</a>
                </div>

                <div class="dev-faq-right">

                    <div class="dev-faq-item active">
                        <button class="dev-faq-question">
                            <span class="dev-faq-icon"><i class="bi bi-question-circle-fill"></i></span>
                            What IT audit services do you offer?
                            <i class="bi bi-chevron-up dev-faq-arrow"></i>
                        </button>
                        <div class="dev-faq-answer">
                            <p>We provide comprehensive IT audit services including security audits, compliance audits (SOC 2, ISO 27001, PCI DSS, HIPAA), operational efficiency audits, and vendor contract reviews.</p>
                        </div>
                    </div>

                    <div class="dev-faq-item">
                        <button class="dev-faq-question">
                            <span class="dev-faq-icon"><i class="bi bi-question-circle-fill"></i></span>
                            How can an IT consulting company help reduce costs?
                            <i class="bi bi-chevron-down dev-faq-arrow"></i>
                        </button>
                        <div class="dev-faq-answer" style="display:none;">
                            <p>As a specialized IT consulting company, we identify waste, renegotiate vendor contracts, right‑size cloud resources, and automate manual processes—typically reducing IT spend by 25–40%.</p>
                        </div>
                    </div>

                    <div class="dev-faq-item">
                        <button class="dev-faq-question">
                            <span class="dev-faq-icon"><i class="bi bi-question-circle-fill"></i></span>
                            Do you offer cloud cost optimization services?
                            <i class="bi bi-chevron-down dev-faq-arrow"></i>
                        </button>
                        <div class="dev-faq-answer" style="display:none;">
                            <p>Yes. Our cloud cost optimization services cover AWS, Azure, and GCP. We analyze usage, recommend savings plans, eliminate idle resources, and implement FinOps best practices.</p>
                        </div>
                    </div>

                    <div class="dev-faq-item">
                        <button class="dev-faq-question">
                            <span class="dev-faq-icon"><i class="bi bi-question-circle-fill"></i></span>
                            What is included in an IT infrastructure audit?
                            <i class="bi bi-chevron-down dev-faq-arrow"></i>
                        </button>
                        <div class="dev-faq-answer" style="display:none;">
                            <p>An IT infrastructure audit reviews your hardware, software, network, cloud environments, security controls, backup systems, and disaster recovery readiness—with a full risk and gap analysis.</p>
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
