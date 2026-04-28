@extends('home.includes.layout')
@section('title', 'Website Maintenance & Support Solutions | Mounteko')

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
                    <h1>Reliable Website Maintenance & Support Solutions</h1>
                    <p>We keep your digital presence secure, updated, and optimized so you can focus entirely on running your business.</p>
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
                    <div class="dev-feature-icon-wrap"><i class="bi bi-wordpress"></i></div>
                    <span>WordPress Maintenance</span>
                </div>
                <div class="dev-feature-item">
                    <div class="dev-feature-icon-wrap"><i class="bi bi-activity"></i></div>
                    <span>24/7 Monitoring</span>
                </div>
                <div class="dev-feature-item">
                    <div class="dev-feature-icon-wrap"><i class="bi bi-shield-check"></i></div>
                    <span>Security Patching</span>
                </div>
                <div class="dev-feature-item">
                    <div class="dev-feature-icon-wrap"><i class="bi bi-speedometer2"></i></div>
                    <span>Performance Tuning</span>
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
                        <span class="company-tag">OUR APPROACH</span>
                        <h3 class="company-title alt-font">We’ve kept websites running smoothly for over a decade. We know downtime isn't an option.</h3>
                        <p class="company-desc">
                            As a dedicated website maintenance company, we understand that a website is never truly "finished." It requires constant vigilance. Our website support services are built on a foundation of proactive monitoring and rapid response. We don't just fix things when they break; we employ rigorous protocols to ensure your site loads fast and remains impenetrable. You built the business; we keep the engine humming.
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
                    <h2 class="dev-services-title alt-font">For your specific platform and needs,<br><span>we have comprehensive web maintenance services.</span></h2>
                </div>

                <div class="dev-services-grid">
                    <!-- Service 1 -->
                    <div class="dev-service-card">
                        <div class="dev-service-icon">
                            <img src="{{ asset('home/assets/homepage/images/services_v2/backup.png') }}" alt="WordPress Maintenance Services">
                        </div>
                        <div class="dev-service-info">
                            <h4>WordPress Maintenance Services</h4>
                        </div>
                    </div>
                    <!-- Service 2 -->
                    <div class="dev-service-card">
                        <div class="dev-service-icon">
                            <img src="{{ asset('home/assets/homepage/images/services_v2/cloud.png') }}" alt="Managed Website Maintenance">
                        </div>
                        <div class="dev-service-info">
                            <h4>Managed Website Maintenance</h4>
                        </div>
                    </div>
                    <!-- Service 3 -->
                    <div class="dev-service-card">
                        <div class="dev-service-icon">
                            <img src="{{ asset('home/assets/homepage/images/services_v2/security.png') }}" alt="Website Troubleshooting Services">
                        </div>
                        <div class="dev-service-info">
                            <h4>Website Troubleshooting Services</h4>
                        </div>
                    </div>
                    <!-- Service 4 -->
                    <div class="dev-service-card">
                        <div class="dev-service-icon">
                            <img src="{{ asset('home/assets/homepage/images/services_v2/software.png') }}" alt="Security & Firewall Management">
                        </div>
                        <div class="dev-service-info">
                            <h4>Security & Firewall Management</h4>
                        </div>
                    </div>
                    <!-- Service 5 -->
                    <div class="dev-service-card">
                        <div class="dev-service-icon">
                            <img src="{{ asset('home/assets/homepage/images/services_v2/managed.png') }}" alt="Performance Optimization">
                        </div>
                        <div class="dev-service-info">
                            <h4>Performance Optimization</h4>
                        </div>
                    </div>
                    <!-- Service 6 -->
                    <div class="dev-service-card">
                        <div class="dev-service-icon">
                            <img src="{{ asset('home/assets/homepage/images/services_v2/consultancy.png') }}"
                                alt="Content & E-Commerce Support">
                        </div>
                        <div class="dev-service-info">
                            <h4>Content & E-Commerce Support</h4>
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
                    <h2 class="process-title">Our Website Maintenance and Support Workflow</h2>
                    <p class="process-subtitle">We follow a structured 5-step approach to ensure zero surprises and maximum uptime.</p>
                </div>

                <div class="process-flow-wrapper">
                    <!-- Step 1 -->
                    <div class="process-step-item">
                        <div class="process-step-num">01</div>
                        <div class="process-step-icon">
                            <i class="bi bi-search"></i>
                        </div>
                        <div class="process-step-content">
                            <h4>Audit</h4>
                            <p>Onboarding code review & security health check.</p>
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
                            <h4>Stabilize</h4>
                            <p>Safe staging copy to test all updates</p>
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
                            <h4>Execute</h4>
                            <p>Scheduled maintenance windows</p>
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
                            <h4>Monitor</h4>
                            <p>24/7 uptime tracking and immediate alerts</p>
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
                            <h4>Report</h4>
                            <p>A clear, jargon-free monthly report</p>
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
                    <h4 class="faq-v2-title">Your website support services questions answered clearly.</h4>
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
                            <h4>Why do I need a website maintenance company if I already have a developer?</h4>
                            <div class="faq-v2-icon"><i class="bi bi-chevron-down"></i></div>
                        </button>
                        <div class="faq-v2-content">
                            <p>A developer builds the house; a maintenance company ensures the roof doesn't leak, and the lights stay on. Maintenance involves continuous security patching, uptime monitoring, and performance optimization—tasks that require dedicated, recurring attention rather than project-based development hours.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="faq-v2-item">
                        <button class="faq-v2-header">
                            <h4>What's included in your WordPress maintenance services specifically?</h4>
                            <div class="faq-v2-icon"><i class="bi bi-chevron-down"></i></div>
                        </button>
                        <div class="faq-v2-content">
                            <p>We handle the full ecosystem: PHP version updates, database optimization, comment spam cleaning, and weekly full-site backups stored off-site. If a WordPress update breaks a custom theme function, we roll it back and fix it as part of the plan.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="faq-v2-item">
                        <button class="faq-v2-header">
                            <h4>How do I know my site is actually being watched?</h4>
                            <div class="faq-v2-icon"><i class="bi bi-chevron-down"></i></div>
                        </button>
                        <div class="faq-v2-content">
                            <p>We provide a client-facing dashboard and monthly reports detailing uptime percentage, security scans, and actions taken. You’ll see exactly when we performed a backup or installed a security patch.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="faq-v2-item">
                        <button class="faq-v2-header">
                            <h4>Can you handle website troubleshooting services for a site you didn't build?</h4>
                            <div class="faq-v2-icon"><i class="bi bi-chevron-down"></i></div>
                        </button>
                        <div class="faq-v2-content">
                            <p>Absolutely. In fact, it's a specialty. Many clients come to us as a website support company after being ghosted by their original freelancer. We perform a deep audit, correct the errors, and then stabilize the site moving forward.</p>
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
                        <h2 class="s8-title-custom">Stop worrying about updates and start focusing on growth.</h2>
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
                                    <strong>support@mounteko.com</strong>
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
