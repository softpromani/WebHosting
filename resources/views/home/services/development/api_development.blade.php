@extends('home.includes.layout')
@section('title', 'API Development & System Integration Solutions | Mounteko')

@section('header-area')
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/new_home_custom.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/cybersecurity_services.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/development_services.css') }}">
    <style>
        /* Override global heading sizes for this page */
        .dev-hero-content h1 { font-size: 28px !important; }
        .company-title, .dev-services-title, .process-title, .projects-title, .faq-v2-title { font-size: 1.8rem !important; }
        @media (max-width: 767px) { .dev-services-title { font-size: 1.5rem !important; } }
    </style>
@endsection

@section('content')
    <main id="main">

        <!-- DEVELOPMENT HERO SECTION -->
        <section class="dev-hero-section">
            <div class="dev-hero-container">
                <div class="dev-hero-content">
                    <h1>API Development & System Integration Solutions</h1>
                    <p>We architect, connect, and optimize secure, high-performance digital ecosystems tailored to unify your business operations.</p>
                    <div class="dev-hero-btns">
                        <a href="{{ route('contactUs') }}" class="btn-dev-primary">Get a Free Project Consultation</a>
                        <a href="{{ route('contactUs') }}" class="btn-dev-secondary">Request a Development Quote</a>
                    </div>
                </div>
            </div>

        </section>

        <!-- FLOATING FEATURE BAR -->
        <div class="dev-feature-bar">
            <div class="dev-feature-box">
                <div class="dev-feature-item">
                    <div class="dev-feature-icon-wrap"><i class="bi bi-hdd-network"></i></div>
                    <span>REST API Development</span>
                </div>
                <div class="dev-feature-item">
                    <div class="dev-feature-icon-wrap"><i class="bi bi-boxes"></i></div>
                    <span>System Integration</span>
                </div>
                <div class="dev-feature-item">
                    <div class="dev-feature-icon-wrap"><i class="bi bi-cloud-check"></i></div>
                    <span>SaaS Integration</span>
                </div>
                <div class="dev-feature-item">
                    <div class="dev-feature-icon-wrap"><i class="bi bi-building-gear"></i></div>
                    <span>Enterprise Integration</span>
                </div>
            </div>
        </div>

        <!-- SECTION: OUR COMPANY -->
        <section class="dev-company-section">
            <div class="dev-company-container">
                <div class="dev-line-bg">
                    <span></span><span></span><span></span><span></span><span></span>
                </div>

                <div class="dev-company-grid">
                    <!-- LEFT CONTENT -->
                    <div class="dev-company-left">
                        <span class="company-tag">Where Code Meets Connectivity.</span>
                        <h3 class="company-title alt-font">Bespoke API Development & Enterprise System Integration.</h3>
                        <p class="company-desc">
                            In a digital ecosystem defined by silos, we build bridges. Mounteko doesn't just write code; we architect the invisible infrastructure that powers modern business. We specialise in high-performance API development and frictionless system integration, transforming disjointed software suites into a single, intelligent operating system. <br><br>
                            From intricate microservice architectures to legacy modernisation, we dismantle data bottlenecks and unlock the full velocity of your organisation. We believe your technology should be a silent, perfectly synchronised partner—not a noisy, fragmented distraction. Let’s connect what matters.
                        </p>
                        <a href="{{ route('contactUs') }}" class="btn-company-more">Find out more</a>
                    </div>

                    <!-- RIGHT IMAGES -->
                    <div class="dev-company-right">
                        <div class="company-collage">
                            <div class="collage-item item-top-center">
                                <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?auto=format&fit=crop&q=80&w=600"
                                    alt="Workspace">
                            </div>
                            <div class="collage-item item-main-video">
                                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=800"
                                    alt="Team Collaboration">
                                <div class="company-v-play"><i class="bi bi-play-fill"></i></div>
                            </div>
                            <div class="collage-item item-top-right">
                                <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&q=80&w=400"
                                    alt="Mobile App">
                            </div>
                            <div class="collage-item item-bottom-center">
                                <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&q=80&w=400"
                                    alt="Laptop">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION: OUR SERVICES GRID -->
        <section class="dev-services-grid-section">
            <div class="dev-services-grid-container">
                <div class="dev-services-header text-center">
                    <span class="dev-services-tag">OUR SERVICES</span>
                    <h2 class="dev-services-title alt-font">For your very specific connectivity challenges,<br><span>we have highly-tailored integration solutions.</span></h2>
                </div>

                <div class="dev-services-grid">
                    <!-- Service 1 -->
                    <div class="dev-service-card">
                        <div class="dev-service-icon">
                            <img src="{{ asset('home/assets/homepage/images/services_v2/backup.png') }}" alt="Custom API Development">
                        </div>
                        <div class="dev-service-info">
                            <h4>Custom API Development</h4>
                        </div>
                    </div>
                    <!-- Service 2 -->
                    <div class="dev-service-card">
                        <div class="dev-service-icon">
                            <img src="{{ asset('home/assets/homepage/images/services_v2/cloud.png') }}" alt="System Integration Services">
                        </div>
                        <div class="dev-service-info">
                            <h4>System Integration Services</h4>
                        </div>
                    </div>
                    <!-- Service 3 -->
                    <div class="dev-service-card">
                        <div class="dev-service-icon">
                            <img src="{{ asset('home/assets/homepage/images/services_v2/security.png') }}" alt="Enterprise Integration Services">
                        </div>
                        <div class="dev-service-info">
                            <h4>Enterprise Integration Services</h4>
                        </div>
                    </div>
                    <!-- Service 4 -->
                    <div class="dev-service-card">
                        <div class="dev-service-icon">
                            <img src="{{ asset('home/assets/homepage/images/services_v2/software.png') }}" alt="Third Party API Integration">
                        </div>
                        <div class="dev-service-info">
                            <h4>Third Party API Integration</h4>
                        </div>
                    </div>
                    <!-- Service 5 -->
                    <div class="dev-service-card">
                        <div class="dev-service-icon">
                            <img src="{{ asset('home/assets/homepage/images/services_v2/managed.png') }}" alt="SaaS Integration Services">
                        </div>
                        <div class="dev-service-info">
                            <h4>SaaS Integration Services</h4>
                        </div>
                    </div>
                    <!-- Service 6 -->
                    <div class="dev-service-card">
                        <div class="dev-service-icon">
                            <img src="{{ asset('home/assets/homepage/images/services_v2/consultancy.png') }}"
                                alt="API Security & Management">
                        </div>
                        <div class="dev-service-info">
                            <h4>API Security & Management</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION: DEVELOPMENT PROCESS FLOW -->
        <section class="dev-process-v2">
            <div class="dev-process-v2-container">
                <div class="dev-process-header text-center">
                    <span class="process-tag">PROCESS</span>
                    <h2 class="process-title">Our API & Integration Blueprint</h2>
                    <p class="process-subtitle">We follow a structured 5-step approach to ensure reliable data exchange and scalable architecture.</p>
                </div>

                <div class="process-flow-wrapper">
                    <!-- Step 1 -->
                    <div class="process-step-item">
                        <div class="process-step-num">01</div>
                        <div class="process-step-icon">
                            <i class="bi bi-search"></i>
                        </div>
                        <div class="process-step-content">
                            <h4>Assess</h4>
                            <p>Ecosystem audit & data flow mapping</p>
                        </div>
                        <div class="process-line"></div>
                    </div>
                    <!-- Step 2 -->
                    <div class="process-step-item">
                        <div class="process-step-num">02</div>
                        <div class="process-step-icon">
                            <i class="bi bi-bezier2"></i>
                        </div>
                        <div class="process-step-content">
                            <h4>Architect</h4>
                            <p>RESTful design & microservices planning</p>
                        </div>
                        <div class="process-line"></div>
                    </div>
                    <!-- Step 3 -->
                    <div class="process-step-item">
                        <div class="process-step-num">03</div>
                        <div class="process-step-icon">
                            <i class="bi bi-code-slash"></i>
                        </div>
                        <div class="process-step-content">
                            <h4>Connect</h4>
                            <p>Agile development & rigorous endpoint testing</p>
                        </div>
                        <div class="process-line"></div>
                    </div>
                    <!-- Step 4 -->
                    <div class="process-step-item">
                        <div class="process-step-num">04</div>
                        <div class="process-step-icon">
                            <i class="bi bi-rocket-takeoff"></i>
                        </div>
                        <div class="process-step-content">
                            <h4>Orchestrate</h4>
                            <p>Deployment & system synchronization</p>
                        </div>
                        <div class="process-line"></div>
                    </div>
                    <!-- Step 5 -->
                    <div class="process-step-item">
                        <div class="process-step-num">05</div>
                        <div class="process-step-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div class="process-step-content">
                            <h4>Optimize</h4>
                            <p>Monitoring, latency tuning & enhancements</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION: LATEST PROJECTS GALLERY -->
        <section class="dev-projects-v2">
            <div class="dev-projects-v2-container">
                <div class="dev-projects-header text-center">
                    <span class="projects-tag">OUR PROJECT</span>
                    <h2 class="projects-title">Showcasing our <span>latest projects</span></h2>
                </div>

                <div class="projects-grid">
                    <!-- Project 1 -->
                    <div class="project-card"
                        style="background-image: url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=800');">
                        <div class="project-overlay">
                            <span class="project-cat">Authentication</span>
                            <h4 class="project-item-title">IoT Security Enhancement for Smart Devices</h4>
                        </div>
                    </div>
                    <!-- Project 2 -->
                    <div class="project-card"
                        style="background-image: url('https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=800');">
                        <div class="project-overlay">
                            <span class="project-cat">Network</span>
                            <h4 class="project-item-title">Real-time Threat Detection System</h4>
                        </div>
                    </div>
                    <!-- Project 3 -->
                    <div class="project-card"
                        style="background-image: url('https://images.unsplash.com/photo-1544197150-b99a580bb7a8?auto=format&fit=crop&q=80&w=800');">
                        <div class="project-overlay">
                            <span class="project-cat">Infrastructure</span>
                            <h4 class="project-item-title">Cloud Infrastructure Hardened Security</h4>
                        </div>
                    </div>
                    <!-- Project 4 -->
                    <div class="project-card"
                        style="background-image: url('https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&q=80&w=800');">
                        <div class="project-overlay">
                            <span class="project-cat">Compliance</span>
                            <h4 class="project-item-title">Automated Risk Assessment Platform</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION: FAQ V2 -->
        <section class="dev-faq-section-v2">
            <div class="dev-faq-v2-container">
                <!-- Left Content -->
                <div class="dev-faq-v2-left">
                    <div class="faq-v2-tag">
                        <i class="bi bi-record-circle"></i> FAQ
                    </div>
                    <h4 class="faq-v2-title">Common questions about custom software and web application engagements</h4>
                    <div class="faq-v2-img-wrap">
                        <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&q=80&w=800"
                            alt="Specialist working">
                    </div>
                </div>

                <!-- Right Accordion -->
                <div class="dev-faq-v2-right">
                    <!-- FAQ Item 1 -->
                    <div class="faq-v2-item active">
                        <button class="faq-v2-header">
                            <h4>What does an API development company actually do?</h4>
                            <div class="faq-v2-icon"><i class="bi bi-chevron-down"></i></div>
                        </button>
                        <div class="faq-v2-content">
                            <p>We create custom communication protocols that connect distinct software systems, delivering precise data exposure and optimized performance beyond the limitations of generic, off-the-shelf connectors.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="faq-v2-item">
                        <button class="faq-v2-header">
                            <h4>How is system integration different from simple API integration?</h4>
                            <div class="faq-v2-icon"><i class="bi bi-chevron-down"></i></div>
                        </button>
                        <div class="faq-v2-content">
                            <p>API integration connects specific endpoints; system integration orchestrates your entire enterprise into a single, cohesive operational unit.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="faq-v2-item">
                        <button class="faq-v2-header">
                            <h4>What is involved in third party API integration?</h4>
                            <div class="faq-v2-icon"><i class="bi bi-chevron-down"></i></div>
                        </button>
                        <div class="faq-v2-content">
                            <p>Our third-party API integration services connect your internal systems to essential external providers, including Salesforce, Stripe, and Twilio. We manage the critical nuances of authentication, rate limiting, and data transformation, safeguarding your operations against disruption from external API updates.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="faq-v2-item">
                        <button class="faq-v2-header">
                            <h4>Can you help modernize our legacy system without rewriting everything?</h4>
                            <div class="faq-v2-icon"><i class="bi bi-chevron-down"></i></div>
                        </button>
                        <div class="faq-v2-content">
                            <p>We leverage REST API development to encapsulate legacy systems within modern wrappers, enabling secure data exposure to mobile and cloud applications—eliminating the risk and capital expenditure of full system replacement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        
        <!-- SECTION: PREMIUM CTA -->
        <section class="section8-cta">
            <div class="s8-container">
                <div class="s8-box-custom">
                    <div class="s8-left">
                        <h2 class="s8-title-custom">Ready to unify your digital ecosystem? Let's build a connected architecture together.</h2>
                        <div class="s8-contacts">
                            <div class="s8-contact-item">
                                <i class="bi bi-telephone-outbound"></i>
                                <div class="s8-contact-info">
                                    <span>Phone</span>
                                    <strong>(855) 526-7890</strong>
                                </div>
                            </div>
                            <div class="s8-sep"></div>
                            <div class="s8-contact-item">
                                <i class="bi bi-envelope-at"></i>
                                <div class="s8-contact-info">
                                    <span>Email</span>
                                    <strong>info@mounteko.com</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s8-right">
                        <div class="s8-image-wrap">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=800"
                                alt="Custom Solutions">
                        </div>
                        <div class="s8-arrow-custom">
                            <svg viewBox="0 0 100 60" xmlns="http://www.w3.org/2000/svg">
                                <path d="M95,10 C80,5 70,15 70,25 C70,35 85,35 85,25 C85,15 75,10 60,15 C45,20 35,40 10,45"
                                    stroke-dasharray="2,2" />
                                <path d="M20,40 L10,45 L18,52" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <script>
        // FAQ Accordion V2
        document.querySelectorAll('.faq-v2-header').forEach(header => {
            header.addEventListener('click', () => {
                const item = header.parentElement;
                const isActive = item.classList.contains('active');

                // Close all other items
                document.querySelectorAll('.faq-v2-item').forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                    }
                });

                // Toggle current item
                item.classList.toggle('active');
            });
        });
    </script>
@endsection
