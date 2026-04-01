@extends('home.includes.layout')
@section('title', 'Custom Software & Application Development Solutions | Mounteko')

@section('header-area')
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/new_home_custom.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/cybersecurity_services.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/development_services.css') }}">
@endsection

@section('content')
    <main id="main">

        <!-- DEVELOPMENT HERO SECTION -->
        <section class="dev-hero-section">
            <div class="dev-hero-container">
                <div class="dev-hero-content">
                    <h1>Custom Software & Application Development Solutions</h1>
                    <p>We design, develop, and scale secure, high-performance digital solutions tailored to your business
                        needs.</p>
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
                    <div class="dev-feature-icon-wrap"><i class="bi bi-globe"></i></div>
                    <span>Web Applications</span>
                </div>
                <div class="dev-feature-item">
                    <div class="dev-feature-icon-wrap"><i class="bi bi-phone"></i></div>
                    <span>Mobile Applications</span>
                </div>
                <div class="dev-feature-item">
                    <div class="dev-feature-icon-wrap"><i class="bi bi-gear-wide-connected"></i></div>
                    <span>Custom Software</span>
                </div>
                <div class="dev-feature-item">
                    <div class="dev-feature-icon-wrap"><i class="bi bi-layout-text-window-reverse"></i></div>
                    <span>Enterprise Solutions</span>
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
                        <span class="company-tag">OUR COMPANY</span>
                        <h3 class="company-title alt-font">We’ve been triumphing all these <span>38 years.</span> Sacrifices
                            are made
                            up with success.</h3>
                        <p class="company-desc">Mitech takes into consideration every little detail to make sure the system
                            run smoothly and responsively. Mitech employs a new technique called Minified Technology for
                            securing customers' database & building up highly confidential firewalls.</p>
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
                    <h2 class="dev-services-title">For your very specific industry,<br>we have <span>highly-tailored IT
                            solutions.</span></h2>
                </div>

                <div class="dev-services-grid">
                    <!-- Service 1: Backup and recovery -->
                    <div class="dev-service-card">
                        <div class="dev-service-icon">
                            <img src="{{ asset('home/assets/homepage/images/services_v2/backup.png') }}" alt="Backup">
                        </div>
                        <div class="dev-service-info">
                            <h4>Backup and recovery</h4>
                        </div>
                    </div>
                    <!-- Service 2: Cloud Managed Services -->
                    <div class="dev-service-card">
                        <div class="dev-service-icon">
                            <img src="{{ asset('home/assets/homepage/images/services_v2/cloud.png') }}" alt="Cloud">
                        </div>
                        <div class="dev-service-info">
                            <h4>Cloud Managed Services</h4>
                        </div>
                    </div>
                    <!-- Service 3: IT Security & Compliance -->
                    <div class="dev-service-card">
                        <div class="dev-service-icon">
                            <img src="{{ asset('home/assets/homepage/images/services_v2/security.png') }}" alt="Security">
                        </div>
                        <div class="dev-service-info">
                            <h4>IT Security & Compliance</h4>
                        </div>
                    </div>
                    <!-- Service 4: Software Development -->
                    <div class="dev-service-card">
                        <div class="dev-service-icon">
                            <img src="{{ asset('home/assets/homepage/images/services_v2/software.png') }}" alt="Software">
                        </div>
                        <div class="dev-service-info">
                            <h4>Software Development</h4>
                        </div>
                    </div>
                    <!-- Service 5: Managed IT Services -->
                    <div class="dev-service-card">
                        <div class="dev-service-icon">
                            <img src="{{ asset('home/assets/homepage/images/services_v2/managed.png') }}" alt="Managed">
                        </div>
                        <div class="dev-service-info">
                            <h4>Managed IT Services</h4>
                        </div>
                    </div>
                    <!-- Service 6: IT consultancy -->
                    <div class="dev-service-card">
                        <div class="dev-service-icon">
                            <img src="{{ asset('home/assets/homepage/images/services_v2/consultancy.png') }}"
                                alt="Consulting">
                        </div>
                        <div class="dev-service-info">
                            <h4>IT consultancy</h4>
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
                    <h2 class="process-title">Our Development <span>Process</span></h2>
                    <p class="process-subtitle">We follow a structured 5-step approach to ensure high-quality software
                        delivery.</p>
                </div>

                <div class="process-flow-wrapper">
                    <!-- Step 1 -->
                    <div class="process-step-item">
                        <div class="process-step-num">01</div>
                        <div class="process-step-icon">
                            <i class="bi bi-search"></i>
                        </div>
                        <div class="process-step-content">
                            <h4>Discover</h4>
                            <p>Requirement analysis & planning</p>
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
                            <h4>Design</h4>
                            <p>UI/UX & system architecture</p>
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
                            <h4>Develop</h4>
                            <p>Agile development & testing</p>
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
                            <h4>Deploy</h4>
                            <p>Launch & integration</p>
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
                            <h4>Support</h4>
                            <p>Maintenance & enhancements</p>
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
                    <h4 class="faq-v2-title">Custom software questions <span>answered clearly</span></h4>
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
                            <h4>What is custom software development?</h4>
                            <div class="faq-v2-icon"><i class="bi bi-chevron-down"></i></div>
                        </button>
                        <div class="faq-v2-content">
                            <p>Custom software development is the process of designing, creating, deploying, and maintaining
                                software for a specific set of users, functions, or organizations. Unlike off-the-shelf
                                software, it addresses your unique business requirements.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="faq-v2-item">
                        <button class="faq-v2-header">
                            <h4>How much does custom software cost?</h4>
                            <div class="faq-v2-icon"><i class="bi bi-chevron-down"></i></div>
                        </button>
                        <div class="faq-v2-content">
                            <p>The cost varies based on project complexity, features, and technology stack. We provide
                                tailored quotes after a thorough requirement analysis to ensure transparency and value for
                                your investment.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="faq-v2-item">
                        <button class="faq-v2-header">
                            <h4>How long does it take to develop?</h4>
                            <div class="faq-v2-icon"><i class="bi bi-chevron-down"></i></div>
                        </button>
                        <div class="faq-v2-content">
                            <p>A typical MVP can take 2-4 months, while enterprise-grade solutions may take 6-12 months. We
                                follow Agile methodologies to deliver functional modules incrementally throughout the
                                development cycle.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="faq-v2-item">
                        <button class="faq-v2-header">
                            <h4>Can you integrate with existing systems?</h4>
                            <div class="faq-v2-icon"><i class="bi bi-chevron-down"></i></div>
                        </button>
                        <div class="faq-v2-content">
                            <p>Absolutely. We specialize in seamless integrations with legacy systems, third-party APIs, and
                                cloud services to ensure your new software works harmoniously with your current ecosystem.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- SECTION: PREMIUM CTA -->
        <section class="section8-cta">
            <div class="s8-container">
                <div class="s8-box-custom">
                    <div class="s8-left">
                        <h2 class="s8-title-custom">Protect business, custom software solution today!</h2>
                        <div class="s8-contacts">
                            <div class="s8-contact-item">
                                <i class="bi bi-telephone-outbound"></i>
                                <div class="s8-contact-info">
                                    <span>Get contact now</span>
                                    <strong>{{ settingValue('phone') }}</strong>
                                </div>
                            </div>
                            <div class="s8-sep"></div>
                            <div class="s8-contact-item">
                                <i class="bi bi-envelope-at"></i>
                                <div class="s8-contact-info">
                                    <span>Sent e-mail</span>
                                    <strong>{{ settingValue('email') }}</strong>
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
        >

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
    >
@endsection