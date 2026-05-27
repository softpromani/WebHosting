@extends('home.includes.layout')
@section('title', 'AI Analytics & Business Insights | Mounteko')

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
                <h1 class="ai-hero-title">Unlock the full potential of your data with AI-driven business intelligence</h1>
                <p class="ai-hero-desc">Detect hidden patterns, forecast future outcomes, and improve decision velocity through our comprehensive AI analytics services and scalable analytics infrastructure.</p>

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
                            <span>Data-Driven Agility</span>
                        </div>
                    </div>
                </div>

                <div class="ai-about-content">
                    <div class="ai-tag-red">
                        <div class="dot"></div>
                        Who We Are
                    </div>
                    <h2 class="ai-about-title">Driving Business Agility with AI-Powered Strategy.</h2>
                    <p class="ai-about-desc">We are a specialized analytics consultancy dedicated to transforming raw data into decisive action. Our mission is to equip business leaders and teams with adaptive intelligence solutions and immersive data storytelling that drive faster, smarter decisions.</p>

                    <div class="ai-feature-row">
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-cpu-fill"></i></div>
                            <div class="ai-feat-text">AI Simulates<br>Futures</div>
                        </div>
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-palette-fill"></i></div>
                            <div class="ai-feat-text">Predict & Adapt<br>Instantly</div>
                        </div>
                    </div>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> Leveraging generative AI and predictive modeling to simulate business outcomes.</li>
                        <li><i class="bi bi-check-circle-fill"></i> From live KPI tracking to automated alert systems for proactive management.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Building flexible, cloud-native data environments that scale with your strategic goals.</li>
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
                    <h2 class="ai-about-title">Unlocking Growth with AI-Driven Business Insights</h2>
                    <p class="ai-about-desc">We specialize in converting complex data into strategic advantage through cutting-edge AI analytics. Our custom solutions empower organizations to move beyond reporting and into intelligent, real-time decision-making.</p>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> Smart KPI Dashboards with natural language querying and automated insights.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Anomaly Detection and Root Cause Analysis for proactive issue resolution.</li>
                        <li><i class="bi bi-check-circle-fill"></i> End-to-End Data Integration from source to insight, ensuring accuracy and scalability.</li>
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
                    <h2 class="ai-about-title" style="font-size: 42px;">End-to-End Analytics Solutions for Modern Enterprises</h2>
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
                        <h3 class="ai-service-title">Predictive Analytics Services</h3>
                        <p class="ai-service-desc">Specialize in building AI models that forecast customer churn, demand fluctuations, and market shifts to revolutionize proactive business planning.</p>
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
                        <h3 class="ai-service-title">Data Visualization Services</h3>
                        <p class="ai-service-desc">Transform static spreadsheets into interactive, real-time analytics dashboard development that tells a clear story for every stakeholder.</p>
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
                        <h3 class="ai-service-title">AI Business Insights</h3>
                        <p class="ai-service-desc">Leverage natural language processing and deep learning to extract granular AI business insights from unstructured text, reviews, and call logs.</p>
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
                        <h3 class="ai-service-title">Business Intelligence Solutions</h3>
                        <p class="ai-service-desc">Consolidate disparate data sources into a single source of truth with robust business intelligence solutions built for scale and speed.</p>
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
                        <h3 class="ai-service-title">Data Analytics Consulting</h3>
                        <p class="ai-service-desc">Auditing your current data maturity and architecting a tailored roadmap of data analytics services that align with your fiscal goals.</p>
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
                        <h3 class="ai-service-title">Managed Analytics & Reporting</h3>
                        <p class="ai-service-desc">On-going support and optimization of your AI analytics services stack, ensuring your dashboards evolve with your business strategy.</p>
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
                    <h2 class="ai-about-title" style="font-size: 28px;">The Business Insights Transformation Journey</h2>
                    <p class="ai-journey-desc" style="margin-bottom: 30px;">We begin with a detailed audit to understand your data data maturity, key business questions, and blind spots in your current reporting.</p>
                </div>


                <div class="ai-journey-flex">
                    <!-- Step 1 -->
                    <div class="ai-journey-card">
                        <i class="bi bi-vinyl"></i>
                        <h3>Discovery &<br>Data Audit</h3>
                    </div>

                    <!-- Connector 1 -->
                    <div class="ai-journey-arrow">
                        <span>Data Audit</span>
                        <div class="arrow-line"></div>
                    </div>

                    <!-- Step 2 (Center) -->
                    <div class="ai-journey-center">
                        <div class="ai-circle-step ai-circle-top">
                            <i class="bi bi-node-plus"></i>
                            <h3>Feasibility &<br>Modeling</h3>
                        </div>
                        <div class="ai-circle-step ai-circle-bottom">
                            Our experts cleanse your data, engineer features, and train tailored predictive analytics services.
                        </div>
                    </div>

                    <!-- Connector 2 -->
                    <div class="ai-journey-arrow">
                        <span>Predictive Modeling</span>
                        <div class="arrow-line"></div>
                    </div>

                    <!-- Step 3 -->
                    <div class="ai-journey-card">
                        <i class="bi bi-shield-check"></i>
                        <h3>Dashboard &<br>Insight Delivery</h3>
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
                                <span class="badge-title">AI Analytics</span>
                                <span class="badge-sub">Intelligent Core</span>
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
                    <h2 class="ai-exp-title">Welcome to the era of intelligent IT analytics</h2>
                    <p class="ai-exp-desc">
                        Our AI analytics practice empowers technology enterprises to move beyond descriptive reporting into predictive and prescriptive intelligence. We help businesses eliminate data silos, accelerate decision velocity, and drive measurable business outcomes through enterprise-grade AI.
                    </p>

                    <div class="ai-exp-checklist">
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Predictive Infrastructure Scaling
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Anomaly-Aware Security Analytics
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Real-Time IT Financial Intelligence
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Intelligent Workload Orchestration
                        </div>
                    </div>

                    <p class="ai-exp-footer-text">
                        Enterprise-grade AI analytics built for absolute accuracy, transparency, and high performance.
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
                                            Is our business too small for advanced AI analytics services?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Not at all. We build scalable, user-friendly analytics frameworks that fit the budget and complexity needs of growing SMBs as well as large enterprises. Our packages grow with you.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Do we need a data warehouse to start with business analytics services?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            While a warehouse helps, it’s not a barrier. Our data analytics services include helping you aggregate and clean data from spreadsheets, CRMs, and legacy tools as a preliminary step.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            How do you ensure our AI business insights are accurate?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            We focus on rigorous data validation and model transparency. We provide explainable AI, meaning you don't just get a prediction; you understand the "why" behind the business insights solutions.
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
