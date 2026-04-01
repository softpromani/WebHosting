@extends('home.includes.layout')
@section('title', 'Cloud Architecture Consulting (AWS, Azure, GCP) | Mounteko')

@section('header-area')
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/new_home_custom.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/cybersecurity_services.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/cloud_architecture.css') }}">
@endsection

@section('content')
    <main id="main">

        <!-- CLOUD HERO SECTION -->
        <section class="cloud-hero">
            <div class="cloud-hero-container">

                <!-- LEFT: Heading + Buttons -->
                <div class="cloud-hero-left">
                    <h3 class="cloud-hero-heading">Cloud architecture consulting (AWS, Azure, GCP) to unlock full-stack
                        cloud potential.</h3>
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
                            <strong>Cloud Strategy & Migration</strong>
                            <span>AWS, Azure, GCP</span>
                        </div>
                    </div>

                    <div class="cloud-float-card cloud-card-top-right">
                        <div class="cloud-float-chart">
                            <div class="cloud-chart-label">Projected Cloud Savings</div>
                            <div class="cloud-chart-bar-wrap">
                                <div class="cloud-chart-bar" style="height:60%"></div>
                                <div class="cloud-chart-bar" style="height:75%"></div>
                                <div class="cloud-chart-bar" style="height:50%"></div>
                                <div class="cloud-chart-bar highlight" style="height:90%"></div>
                            </div>
                            <div class="cloud-chart-value">$38k/yr</div>
                        </div>
                    </div>

                    <div class="cloud-float-card cloud-card-mid-left">
                        <div class="cloud-float-stat">
                            <span class="cloud-stat-num">99.99%</span>
                            <span class="cloud-stat-label">Uptime</span>
                        </div>
                        <div class="cloud-float-desc">System Resiliency<br>& Reliability</div>
                    </div>

                    <div class="cloud-float-card cloud-card-mid-right">
                        <div class="cloud-float-icon azure"><i class="bi bi-diagram-3-fill"></i></div>
                        <div class="cloud-float-text">
                            <strong>Multi-Cloud</strong>
                            <span>Vendor Management</span>
                        </div>
                    </div>

                    <div class="cloud-float-card cloud-card-bottom-right">
                        <div class="cloud-float-icon secure"><i class="bi bi-shield-check"></i></div>
                        <div class="cloud-float-text">
                            <strong>Cloud Security</strong>
                            <span>& Compliance</span>
                        </div>
                        <div class="cloud-float-badge">ISO / BS 7799</div>
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
                    <p class="scale-desc">Grounded in talent and primed to scale entirely so why laughter whenever. In on my
                        promise him how managed suitable for followed capacity. Instead pretty because or mr lovers of no.
                        To offer scale on staff. Would be bore.</p>

                    <div class="scale-feature-list">
                        <div class="scale-feature-item">
                            <div class="scale-feature-icon">
                                <i class="bi bi-patch-check-fill"></i>
                            </div>
                            <div class="scale-feature-text">
                                <h5>Certified Cloud Partner</h5>
                                <p>Assurance yet bed was improving infrastructure. Elab was delighted she listening let's
                                    adventure.</p>
                            </div>
                        </div>
                        <div class="scale-feature-item">
                            <div class="scale-feature-icon scale-icon-alt">
                                <i class="bi bi-award-fill"></i>
                            </div>
                            <div class="scale-feature-text">
                                <h5>Award Ceremony</h5>
                                <p>Assurance yet bed was improving furniture man. Elab was delighted she listening let's
                                    adventure.</p>
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
                            <h2 class="dev-why-title">Transforming raw data into actionable cloud insights</h2>
                            <p class="dev-why-desc">Unlock the power of your data with our advanced cloud analytics. We help
                                you implement scalable data pipelines that turn complexity into clear, visual intelligence
                                for faster decision making.</p>
                            <ul class="dev-why-list">
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Real-time stream processing architecture
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Predictive resource scaling models
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Unified data lake management
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
                            <h2 class="dev-why-title">Collecting meaningful and real-time data & Improve reporting</h2>
                            <p class="dev-why-desc">Delighted discovered incredible free entreating eros favourable see
                                entreated.
                                She propriety immediate was improving. We've enhanced balanced financial moderator. Much our
                                game
                                act say free.</p>
                            <ul class="dev-why-list">
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Discourse unwilling am no described
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Before nature his parish boy
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Trifling laughter thoughts property
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
                            <h2 class="dev-why-title">Strengthening infrastructure with unified cloud management</h2>
                            <p class="dev-why-desc">Simplify your operations with centralized control. Our IT management
                                solutions provide the governance, security oversight, and automation needed to run a lean,
                                efficient cloud ecosystem.</p>
                            <ul class="dev-why-list">
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Automated patch and version management
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Centralized security and access oversight
                                </li>
                                <li>
                                    <span class="dev-why-check"><i class="bi bi-check-circle-fill"></i></span>
                                    Continuous compliance and audit readiness
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
                        <p class="dev-it-desc">Carried nothing on am warrant towards. Polite in of in oh needed itself
                            silent course. Assistance travelling so especially do prosperous appearance mr no celebrated.
                            Wanted easily in my called formed suffer. Songs hoped sense as taken ye mirth at. Believe fat
                            how six drawing pursuit minutes far. Same do seen head am part it door open.</p>

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
                                <h4 class="it-card-title">IT Consultancy</h4>
                                <p class="it-card-desc">Astonished set expression solicitude way admiration</p>
                            </div>

                            <!-- Card 2 -->
                            <div class="dev-it-card">
                                <i class="bi bi-cloud-check it-card-icon"></i>
                                <h4 class="it-card-title">Cloud Computing</h4>
                                <p class="it-card-desc">Astonished set expression solicitude way admiration</p>
                            </div>

                            <!-- Card 3 -->
                            <div class="dev-it-card">
                                <i class="bi bi-shield-lock it-card-icon"></i>
                                <h4 class="it-card-title">Cyber Security</h4>
                                <p class="it-card-desc">Astonished set expression solicitude way admiration</p>
                            </div>

                            <!-- Card 4 -->
                            <div class="dev-it-card">
                                <i class="bi bi-folder-check it-card-icon"></i>
                                <h4 class="it-card-title">Backup & Recovery</h4>
                                <p class="it-card-desc">Astonished set expression solicitude way admiration</p>
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
                            <i class="bi bi-grid-1x2"></i>
                        </div>
                        <h4>Choose a Service</h4>
                        <p>Select the specific cloud architectural service that fits your business needs.</p>
                    </div>

                    <div class="dev-process-step" data-step="02">
                        <div class="dev-process-icon">
                            <i class="bi bi-calendar-check"></i>
                        </div>
                        <h4>Request a Meeting</h4>
                        <p>Schedule a call with our certified enterprise cloud architects to discuss goals.</p>
                    </div>

                    <div class="dev-process-step" data-step="03">
                        <div class="dev-process-icon">
                            <i class="bi bi-file-earmark-text"></i>
                        </div>
                        <h4>Receive Custom Plan</h4>
                        <p>Get a detailed cloud strategy document including migration paths and ROI.</p>
                    </div>

                    <div class="dev-process-step last" data-step="04">
                        <div class="dev-process-icon">
                            <i class="bi bi-rocket-takeoff"></i>
                        </div>
                        <h4>Let's Make it Happen</h4>
                        <p>We execute the migration and provide continuous post-deployment support.</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION: FAQ -->
        <section class="dev-faq-section">
            <div class="dev-faq-container">

                <div class="dev-faq-left">
                    <span class="dev-faq-tag">— FAQ</span>
                    <h2 class="dev-faq-title">Most common question about our cloud services</h2>
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
                            <p>We support all major cloud platforms including Amazon Web Services (AWS), Microsoft Azure,
                                and Google Cloud Platform (GCP). We also help with hybrid and multi-cloud environments
                                tailored to your business requirements.</p>
                        </div>
                    </div>

                    <div class="dev-faq-item">
                        <button class="dev-faq-question">
                            <span class="dev-faq-icon"><i class="bi bi-question-circle-fill"></i></span>
                            How long does cloud migration take?
                            <i class="bi bi-chevron-down dev-faq-arrow"></i>
                        </button>
                        <div class="dev-faq-answer" style="display:none;">
                            <p>Cloud migration duration depends on the complexity of your existing infrastructure. Simple
                                workloads can migrate in days, while complex enterprise systems may take weeks to months. We
                                provide a detailed migration roadmap upfront.</p>
                        </div>
                    </div>

                    <div class="dev-faq-item">
                        <button class="dev-faq-question">
                            <span class="dev-faq-icon"><i class="bi bi-question-circle-fill"></i></span>
                            How do you ensure cloud security?
                            <i class="bi bi-chevron-down dev-faq-arrow"></i>
                        </button>
                        <div class="dev-faq-answer" style="display:none;">
                            <p>We implement industry-standard security practices including encryption at rest and in
                                transit, IAM policies, VPC configurations, firewall rules, and continuous compliance
                                monitoring to keep your cloud infrastructure secure.</p>
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