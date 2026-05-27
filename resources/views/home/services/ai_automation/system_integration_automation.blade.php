@extends('home.includes.layout')
@section('title', 'System Integration & Data Automation | Mounteko')

@section('header-area')
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/new_home_custom.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/ai_automation.css') }}">
    <style>
        /* Extra decorative floating icons animation */
        .ai-float-decor {
            position: absolute;
            width: 35px;
            height: 35px;
            background: rgba(0, 255, 204, 0.1);
            border: 1px solid rgba(0, 255, 204, 0.2);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            color: var(--ai-accent);
            box-shadow: 0 0 20px rgba(0, 255, 204, 0.1);
            backdrop-filter: blur(5px);
            z-index: 1;
        }

        .ai-float-decor i {
            filter: drop-shadow(0 0 5px var(--ai-accent));
        }

        .decor-1 {
            top: 20%;
            left: 15%;
            animation: float 5s ease-in-out infinite;
        }

        .decor-2 {
            top: 15%;
            right: 15%;
            animation: float 6s ease-in-out infinite 1s;
        }

        .decor-3 {
            bottom: 25%;
            left: 10%;
            animation: float 7s ease-in-out infinite 0.5s;
        }

        .decor-4 {
            bottom: 20%;
            right: 10%;
            animation: float 5.5s ease-in-out infinite 1.5s;
        }
    </style>
@endsection

@section('content')
    <main id="main">

        <!-- HERO SECTION -->
        <section class="ai-hero-section">
            <!-- Floating Decorative Icons -->
            <div class="ai-float-decor decor-1">
                <i class="bi bi-cpu"></i>
            </div>
            <div class="ai-float-decor decor-2">
                <i class="bi bi-lightbulb"></i>
            </div>
            <div class="ai-float-decor decor-3">
                <i class="bi bi-gpu-card"></i>
            </div>
            <div class="ai-float-decor decor-4">
                <i class="bi bi-robot"></i>
            </div>

            <!-- Robot Visuals -->
            <img src="{{ asset('home/assets/homepage/images/ai/robot_left.png') }}" alt="AI Robot Left"
                class="ai-robot-left">
            <img src="{{ asset('home/assets/homepage/images/ai/robot_right.png') }}" alt="AI Robot Right"
                class="ai-robot-right">

            <div class="ai-hero-container">
                <div class="ai-welcome-badge">Welcome to Mounteko</div>
                <h1 class="ai-hero-title">Transform your business with seamless System Integration & Data Automation</h1>
                <p class="ai-hero-desc">Unify your technology ecosystem, eliminate data silos, and accelerate decision-making with our enterprise-grade system integration services and intelligent data automation solutions.</p>

                <div class="ai-pills-row">
                    <span class="ai-pill">SOC2 Compliant</span>
                    <span class="ai-pill">Salesforce Partner</span>
                    <span class="ai-pill">Microsoft Partner</span>
                    <span class="ai-pill">AWS Partner</span>
                </div>

                <a href="{{ route('contactUs') }}" class="btn-ai-get-started">
                    Get Started <i><i class="bi bi-arrow-right"></i></i>
                </a>
            </div>
        </section>

        <!-- WHO WE ARE SECTION -->
        <section class="ai-about-section">
            <div class="ai-about-container">
                <div class="ai-about-visual">
                    <div class="ai-main-img-wrap">
                        <img src="{{ asset('home/assets/homepage/images/ai/ai_face_digital.png') }}" alt="AI Creative Face">
                    </div>
                    <div class="ai-floating-card">
                        <div class="ai-card-icon">
                            <img src="{{ asset('home/assets/homepage/images/ai/ai_data_node.png') }}" alt="Mini AI">
                        </div>
                        <div class="ai-card-text">
                            <strong>100%</strong>
                            <span>Secure Integration Blueprints</span>
                        </div>
                    </div>
                </div>

                <div class="ai-about-content">
                    <div class="ai-tag-red">
                        <div class="dot"></div>
                        Who We Are
                    </div>
                    <h2 class="ai-about-title">Redefining Enterprise Connectivity with the Power of Intelligent Automation.</h2>
                    <p class="ai-about-desc">We are a premier system integration company passionate about turning fragmented data landscapes into unified operational powerhouses. Our mission is to empower businesses through seamless business system integration and intelligent data orchestration.</p>

                    <div class="ai-feature-row">
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-cpu-fill"></i></div>
                            <div class="ai-feat-text">Unified Data<br>Ecosystem</div>
                        </div>
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-palette-fill"></i></div>
                            <div class="ai-feat-text">Intelligent<br>Process Flows</div>
                        </div>
                    </div>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> Breaking down silos with leading enterprise system integration to create a single source of truth.</li>
                        <li><i class="bi bi-check-circle-fill"></i> From simple connections to complex, cross-application automation and integration services.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Automate data pipelines to deliver real-time analytics and drive proactive decision-making.</li>
                    </ul>

                    <div>
                        <a href="{{ route('contactUs') }}" class="btn-ai-red">Get Started Now <i
                                class="bi bi-arrow-right"></i></a>
                    </div>

                    <img src="{{ asset('home/assets/homepage/images/ai/cute_robot_side.png') }}" alt="Small Robot"
                        class="ai-side-robot-new">
                </div>
            </div>
        </section>

        <!-- TRANSFORMING BUSINESSES SECTION -->
        <section class="ai-transform-section">
            <div class="ai-transform-container">
                <div class="ai-transform-visual">
                    <div class="ai-main-img-transform">
                        <img src="{{ asset('home/assets/homepage/images/ai/robot_hand_touch_new.png') }}"
                            alt="AI Robot Hand Touch">
                    </div>
                    <div class="ai-transform-overlay">
                        <img src="{{ asset('home/assets/homepage/images/ai/robot_profile_overlay_new.png') }}"
                            alt="Robot Profile">
                    </div>
                </div>

                <div class="ai-transform-content">
                    <div class="ai-tag-red">
                        <div class="dot"></div>
                        About Us
                    </div>
                    <h2 class="ai-about-title">Transforming Operations with Holistic Data Automation Services</h2>
                    <p class="ai-about-desc">We are pioneers in the fusion of complex business systems and cutting-edge data automation services. Our mission is to transform the way organizations manage their digital infrastructure by delivering innovative, scalable integration blueprints.</p>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> Advanced Application Integration Services for Seamless Cross-Platform Connectivity.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Real-time ETL Automation Services for Optimized Data Transformation and Loading.</li>
                        <li><i class="bi bi-check-circle-fill"></i> AI-Powered Data Automation for Intelligent, Self-Optimizing Workflows.</li>
                    </ul>

                    <a href="{{ route('contactUs') }}" class="btn-ai-gradient">View All Projects <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <!-- Decorative Reaching Hand -->
            <img src="{{ asset('home/assets/homepage/images/ai/robot_hand_clean.png') }}" alt="Robot Hand Support"
                class="ai-reaching-hand-clean">
        </section>

        <!-- INNOVATIVE SOLUTIONS SECTION -->
        <section class="ai-services-grid-section">
            <div class="ai-services-grid-container">
                <div class="ai-services-header">
                    <div class="ai-tag-red" style="justify-content: center;">
                        <div class="dot"></div>
                        Our Best Services
                    </div>
                    <h2 class="ai-about-title" style="font-size: 42px;">Best Innovative Solution for Integrated Enterprises</h2>
                </div>


                <div class="ai-services-grid">
                    <!-- Card 01 -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 20%; left: 80%;"></div>
                        <div class="ai-card-particle" style="top: 60%; left: 90%;"></div>
                        <span class="ai-service-number">01</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-cpu"></i>
                        </div>
                        <h3 class="ai-service-title">Enterprise System Integration</h3>
                        <p class="ai-service-desc">Specialize in delivering comprehensive enterprise system integration that revolutionizes the way your core platforms communicate. By leveraging the latest API-driven architectures.</p>
                        <a href="#" class="ai-service-readmore">Read More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 02 -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 15%; left: 75%;"></div>
                        <div class="ai-card-particle" style="top: 55%; left: 85%;"></div>
                        <span class="ai-service-number">02</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-pc-display"></i>
                        </div>
                        <h3 class="ai-service-title">Data Automation Solutions</h3>
                        <p class="ai-service-desc">Designing and implementing intelligent data automation solutions that streamline data collection, transformation, and distribution across your entire organization.</p>
                        <a href="#" class="ai-service-readmore">Read More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 03 -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 25%; left: 70%;"></div>
                        <div class="ai-card-particle" style="top: 65%; left: 95%;"></div>
                        <span class="ai-service-number">03</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-diagram-3"></i>
                        </div>
                        <h3 class="ai-service-title">AI Data Automation</h3>
                        <p class="ai-service-desc">Harness the power of machine learning within your pipelines. Our AI data automation services predict failures, cleanse data dynamically, and optimize flows in real-time.</p>
                        <a href="#" class="ai-service-readmore">Read More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 04 -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 10%; left: 85%;"></div>
                        <div class="ai-card-particle" style="top: 50%; left: 75%;"></div>
                        <span class="ai-service-number">04</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-bar-chart-line"></i>
                        </div>
                        <h3 class="ai-service-title">ETL Automation Services</h3>
                        <p class="ai-service-desc">Modernize your data warehouse strategy with robust ETL automation services that handle extraction, transformation, and loading with speed and precision.</p>
                        <a href="#" class="ai-service-readmore">Read More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 05 -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 30%; left: 90%;"></div>
                        <div class="ai-card-particle" style="top: 70%; left: 80%;"></div>
                        <span class="ai-service-number">05</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-gear-wide-connected"></i>
                        </div>
                        <h3 class="ai-service-title">Application Integration Services</h3>
                        <p class="ai-service-desc">Connect CRM, ERP, HRM, and proprietary systems seamlessly. Our application integration services ensure flawless, bidirectional data synchronization.</p>
                        <a href="#" class="ai-service-readmore">Read More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 06 -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 20%; left: 75%;"></div>
                        <div class="ai-card-particle" style="top: 60%; left: 85%;"></div>
                        <span class="ai-service-number">06</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-mortarboard"></i>
                        </div>
                        <h3 class="ai-service-title">Data Integration Services</h3>
                        <p class="ai-service-desc">Create a consolidated view of your business with our foundational data integration services, designed for accuracy, consistency, and high availability.</p>
                        <a href="#" class="ai-service-readmore">Read More <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- AI TRANSFORMATION JOURNEY SECTION -->
        <section class="ai-journey-section">
            <div class="ai-journey-container">
                <div class="ai-services-header">
                    <div class="ai-tag-red" style="justify-content: center;">
                        <div class="dot"></div>
                        How It Works
                    </div>
                    <h2 class="ai-about-title" style="font-size: 28px;">The Business System Integration Journey</h2>
                    <p class="ai-journey-desc" style="margin-bottom: 30px;">We begin with a detailed architectural audit to analyze your current tech stack, data pain points, and integration objectives.</p>
                </div>


                <div class="ai-journey-flex">
                    <!-- Step 1 -->
                    <div class="ai-journey-card">
                        <i class="bi bi-vinyl"></i>
                        <h3>Discovery &<br>Architecture Audit</h3>
                    </div>

                    <!-- Connector 1 -->
                    <div class="ai-journey-arrow">
                        <span>Audit & Analysis</span>
                        <div class="arrow-line"></div>
                    </div>

                    <!-- Step 2 (Center) -->
                    <div class="ai-journey-center">
                        <div class="ai-circle-step ai-circle-top">
                            <i class="bi bi-node-plus"></i>
                            <h3>Strategy &<br>Feasibility Analysis</h3>
                        </div>
                        <div class="ai-circle-step ai-circle-bottom">
                            Our experts design a secure, scalable blueprint tailored to your business system integration needs.
                        </div>
                    </div>

                    <!-- Connector 2 -->
                    <div class="ai-journey-arrow">
                        <span>Designing Blueprint</span>
                        <div class="arrow-line"></div>
                    </div>

                    <!-- Step 3 -->
                    <div class="ai-journey-card">
                        <i class="bi bi-shield-check"></i>
                        <h3>Development &<br>Automated Deployment</h3>
                    </div>
                </div>
            </div>
            <!-- Robotic Hand Visual -->
            <img src="{{ asset('home/assets/homepage/images/ai/robot_hand_clean.png') }}" alt="Robot Hand"
                class="ai-reaching-hand-clean">
        </section>



        <!-- AI EXPERIENCE SECTION -->
        <section class="ai-experience-section">
            <div class="ai-experience-container">
                <!-- Left Visual Composition -->
                <div class="ai-visual-composition">
                    <div class="ai-main-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?auto=format&fit=crop&q=80&w=800"
                            alt="Advanced AI Technology" class="ai-exp-main-img">

                        <!-- Floating Glass Badge -->
                        <div class="ai-glass-badge-exp">
                            <div class="badge-icon">
                                <i class="bi bi-cpu-fill"></i>
                            </div>
                            <div class="badge-text">
                                <span class="badge-title">Connected Core</span>
                                <span class="badge-sub">Intelligent Pipelines</span>
                            </div>
                        </div>

                        <!-- Decorative Elements -->
                        <div class="ai-exp-shape shape-1"></div>
                        <div class="ai-exp-shape shape-2"></div>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="ai-experience-content">
                    <span class="ai-tag-purple">Our Experience</span>
                    <h2 class="ai-exp-title">Welcome to the era of the AI-connected enterprise</h2>
                    <p class="ai-exp-desc">
                        Our integration agency is a strategic technology partner that specializes in delivering automation and integration services to help businesses unify their operations, improve data fidelity, and enhance system intelligence. By leveraging the power of a connected ecosystem.
                    </p>

                    <div class="ai-exp-checklist">
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Legacy System Modernization
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Real-Time Data Synchronization
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Custom Connector Development
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Intelligent Workflow Automation
                        </div>
                    </div>

                    <p class="ai-exp-footer-text">
                        Enterprise systems and data pipelines optimized for absolute security and real-time reliability.
                    </p>

                    <a href="{{ route('contactUs') }}" class="btn-ai-purple">
                        Explore More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </section>


        <!-- FAQ & Contact Section -->
        <section class="ai-faq-contact-section">
            <div class="ai-fc-container">
                <!-- Left: Contact Form Card -->
                <div class="ai-contact-card-wrapper">
                    <div class="ai-contact-card">
                        <div class="ai-card-tag">
                            <span class="dot"></span> RESPONSE TIME: 1 HOUR
                        </div>
                        <h2 class="ai-card-title">Tell details about your project</h2>
                        <p class="ai-card-desc">Just fill out the form and our global experts will be in touch right away with a customized package and pricing solution to help you!</p>

                        <form class="ai-contact-form">
                            <div class="form-row">
                                <div class="form-group">
                                    <input type="text" placeholder="Full name">
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Your Message" rows="3"></textarea>
                            </div>

                            <div class="form-check-group">
                                <label class="ai-checkbox-container">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    Subscribe to Newsletter
                                </label>
                            </div>

                            <div class="ai-form-footer">
                                <div class="support-person">
                                    <img src="https://ui-avatars.com/api/?name=Richard+Martines&background=random"
                                        alt="Support">
                                    <div class="support-info">
                                        <h4>Richard Martines</h4>
                                        <p>Support Developer</p>
                                    </div>
                                </div>
                                <button type="button" class="btn-ai-red">Submit Request <i
                                        class="bi bi-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Right: FAQ Section -->
                <div class="ai-faq-wrapper">
                    <div class="ai-card-tag">
                        <span class="dot"></span> FAQ
                    </div>
                    <h2 class="ai-faq-title">Learn more from FAQs</h2>
                    <p class="ai-faq-desc">We've heard it all. Here's everything you need to know before working with us.
                    </p>

                    <!-- Tabs -->
                    <ul class="nav nav-tabs ai-custom-tabs" id="aiFaqTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general"
                                type="button" role="tab" aria-controls="general" aria-selected="true">General Ask</button>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content ai-tab-content" id="aiFaqTabContent">
                        <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                            <!-- Accordion -->
                            <div class="accordion ai-custom-accordion" id="faqAccordion">
                                <!-- Item 1 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Will system integration disrupt my daily operations?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Not at all. Our enterprise system integration approach involves phased rollouts and rigorous sandbox testing to ensure business continuity. Our team handles the technical complexity, allowing your team to remain focused.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Can you connect legacy on-premise systems to modern cloud apps?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Yes, our application integration services specialize in bridging legacy infrastructure with modern cloud platforms through custom connectors and middleware.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            How does AI improve traditional data automation solutions?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Absolutely. AI data automation brings intelligence to your pipelines, enabling anomaly detection, automated data mapping suggestions, and self-healing data flows, moving beyond rigid, rule-based tasks.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Latest Blog Section -->
        <section class="ai-latest-blog-section">
            <div class="ai-blog-container">
                <!-- Section Header -->
                <div class="ai-blog-header text-center">
                    <div class="ai-card-tag justify-content-center">
                        <span class="dot"></span> LATEST BLOG
                    </div>
                    <h2 class="ai-blog-title">AI and Creativity Stories Tips.</h2>
                </div>

                <!-- Blog Grid -->
                <div class="ai-blog-grid">
                    <!-- Blog Card 1 -->
                    <div class="ai-blog-card">
                        <div class="blog-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?auto=format&fit=crop&q=80&w=800"
                                alt="Unlocking Data">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="meta-item"><i class="bi bi-person"></i> ByAdmin</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-chat"></i> (03) Comments</span>
                            </div>
                            <h3 class="blog-card-title">Unlocking the Power of Data for Business Success.</h3>
                            <a href="#" class="blog-read-more">Read More <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <!-- Blog Card 2 -->
                    <div class="ai-blog-card">
                        <div class="blog-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?auto=format&fit=crop&q=80&w=800"
                                alt="Future of Work">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="meta-item"><i class="bi bi-person"></i> ByAdmin</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-chat"></i> (03) Comments</span>
                            </div>
                            <h3 class="blog-card-title">The Future of Work Embracing Digital Transformation.</h3>
                            <a href="#" class="blog-read-more">Read More <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <!-- Blog Card 3 -->
                    <div class="ai-blog-card">
                        <div class="blog-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&q=80&w=800"
                                alt="AI Revolutionizing">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="meta-item"><i class="bi bi-person"></i> ByAdmin</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-chat"></i> (03) Comments</span>
                            </div>
                            <h3 class="blog-card-title">How AI is Revolutionizing Business and Industry Today</h3>
                            <a href="#" class="blog-read-more">Read More <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
