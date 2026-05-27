@extends('home.includes.layout')
@section('title', 'AI-Powered Sales Automation System | Mounteko')

@section('header-area')
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/new_home_custom.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/ai_automation.css') }}">
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
                <h1 class="ai-hero-title">Transform Your Sales Engine with AI-Powered Automation</h1>
                <p class="ai-hero-desc">Streamline your entire sales cycle, accelerate pipeline velocity, and drive predictable revenue growth with our custom-built AI sales automation solutions designed for modern enterprises.</p>

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
                            <span>Data-Driven Sales Guidance</span>
                        </div>
                    </div>
                </div>

                <div class="ai-about-content">
                    <div class="ai-tag-red">
                        <div class="dot"></div>
                        Who We Are
                    </div>
                    <h2 class="ai-about-title">Redefining Sales Performance with the Power of AI</h2>
                    <p class="ai-about-desc">We are a specialized AI sales solutions provider dedicated to turning your sales data into a strategic growth asset. Our mission is to empower revenue teams with intelligent automation that eliminates manual tasks and unlocks human potential.</p>

                    <div class="ai-feature-row">
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-database-fill"></i></div>
                            <div class="ai-feat-text">Unified Revenue<br>Data</div>
                        </div>
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-gear-wide-connected"></i></div>
                            <div class="ai-feat-text">Smart Workflow<br>Automation</div>
                        </div>
                    </div>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> Ingest and harmonize data from your CRM, emails, calls, and marketing platforms.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Automate lead routing, follow-ups, and deal management with precision.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Deliver real-time guidance to reps, moving deals forward with data-driven confidence.</li>
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
                    <h2 class="ai-about-title">Transforming Revenue Operations with AI-Powered Intelligence</h2>
                    <p class="ai-about-desc">We are pioneers in applying advanced AI to the complexities of the modern sales cycle. Our solution transforms how revenue teams operate, from the first touchpoint to a closed-won deal, by automating non-selling activities and augmenting strategic decision-making.</p>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> Augmented Sales Force Capabilities for Accelerated Deal Velocity.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Real-Time Pipeline Analysis and Predictive Forecasting for Optimized Resource Allocation.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Seamless CRM Integration and Autonomous Task Execution for a friction-free rep experience.</li>
                    </ul>

                    <a href="{{ route('contactUs') }}" class="btn-ai-gradient">View All Project <i
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
                    <h2 class="ai-about-title" style="font-size: 30px;">A Complete Intelligent Automation Suite for Sales</h2>
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
                            <i class="bi bi-person-check"></i>
                        </div>
                        <h3 class="ai-service-title">Intelligent Lead Orchestration</h3>
                        <p class="ai-service-desc">Automate lead capture, enrichment, scoring, and routing to the right rep at the perfect time, ensuring no opportunity is missed.</p>
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
                            <i class="bi bi-mic"></i>
                        </div>
                        <h3 class="ai-service-title">Conversational Intelligence</h3>
                        <p class="ai-service-desc">Record, transcribe, and analyze every customer interaction to surface winning behaviors, coach reps, and automatically update deal records.</p>
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
                            <i class="bi bi-envelope-paper"></i>
                        </div>
                        <h3 class="ai-service-title">Automated Sales Engagement</h3>
                        <p class="ai-service-desc">Deploy AI-personalized, multi-channel outreach sequences that engage prospects at scale while maintaining a human, value-driven touch.</p>
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
                        <h3 class="ai-service-title">Predictive Pipeline Analytics</h3>
                        <p class="ai-service-desc">Move beyond gut-feel forecasts. Visualize deal health, receive risk alerts, and get AI-driven predictions to commit with confidence.</p>
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
                            <i class="bi bi-database-check"></i>
                        </div>
                        <h3 class="ai-service-title">Autonomous CRM Data Hygiene</h3>
                        <p class="ai-service-desc">Eliminate manual data entry. The system automatically captures, logs, and enriches all sales activities, keeping your CRM flawlessly updated.</p>
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
                            <i class="bi bi-compass"></i>
                        </div>
                        <h3 class="ai-service-title">Dynamic Guided Selling</h3>
                        <p class="ai-service-desc">Equip your reps with real-time, next-best-action recommendations, battle cards, and content suggestions precisely when they need them.</p>
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
                    <h2 class="ai-about-title" style="font-size: 28px;">Your Journey to an Intelligent Sales System</h2>
                    <p class="ai-journey-desc" style="margin-bottom: 30px;">We start by mapping your unique sales process and identifying your most valuable automation opportunities to deliver rapid time-to-value.</p>
                </div>


                <div class="ai-journey-flex">
                    <!-- Step 1 -->
                    <div class="ai-journey-card">
                        <i class="bi bi-search"></i>
                        <h3>Discovery &<br>Blueprinting</h3>
                    </div>

                    <!-- Connector 1 -->
                    <div class="ai-journey-arrow">
                        <span>Mapping Process</span>
                        <div class="arrow-line"></div>
                    </div>

                    <!-- Step 2 (Center) -->
                    <div class="ai-journey-center">
                        <div class="ai-circle-step ai-circle-top">
                            <i class="bi bi-node-plus"></i>
                            <h3>Data & Model<br>Architecture</h3>
                        </div>
                        <div class="ai-circle-step ai-circle-bottom">
                            Our experts audit your data, design the AI models, and plan your CRM integration.
                        </div>
                    </div>

                    <!-- Connector 2 -->
                    <div class="ai-journey-arrow">
                        <span>Seamless Integration</span>
                        <div class="arrow-line"></div>
                    </div>

                    <!-- Step 3 -->
                    <div class="ai-journey-card">
                        <i class="bi bi-rocket-takeoff"></i>
                        <h3>Deployment &<br>Adoption</h3>
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
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800"
                            alt="Advanced AI Sales Technology" class="ai-exp-main-img">

                        <!-- Floating Glass Badge -->
                        <div class="ai-glass-badge-exp">
                            <div class="badge-icon">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <div class="badge-text">
                                <span class="badge-title">AI-Powered Sales</span>
                                <span class="badge-sub">Intelligent Pipeline</span>
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
                    <h2 class="ai-exp-title">Welcome to the Era of the Self-Driving Sales Pipeline</h2>
                    <p class="ai-exp-desc">
                        Our AI sales automation platform is a purpose-built partner for revenue growth, helping B2B and B2C sales organizations automate administrative burden, sharpen selling focus, and forge deeper customer relationships through contextual intelligence.
                    </p>

                    <div class="ai-exp-checklist">
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            75% Reduction in Non-Selling Tasks
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            3x Faster Response to Qualified Leads
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            94% Forecast Accuracy Within Range
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Seamless Native CRM & Sales Tech Integration
                        </div>
                    </div>

                    <p class="ai-exp-footer-text">
                        Empower your commercial organization with contextual intelligence and automated efficiency.
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
                            <span class="dot"></span> RESPONSE TIME: 1 HOURS
                        </div>
                        <h2 class="ai-card-title">Tell details about your project</h2>
                        <p class="ai-card-desc">Just fill out the form and our global experts will be in touch right away
                            with package and price solution to help you!</p>

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
                                <button type="button" class="btn-ai-red">View All Price <i
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
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pricing-tab" data-bs-toggle="tab" data-bs-target="#pricing"
                                type="button" role="tab" aria-controls="pricing" aria-selected="false">Pricing Plan</button>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content ai-tab-content" id="aiFaqTabContent">
                        <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                            <!-- Accordion General -->
                            <div class="accordion ai-custom-accordion" id="faqAccordion">
                                <!-- Item 1 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What industries can benefit from your AI sales automation?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            We typically work with B2B and B2C teams across technology, financial services, manufacturing, and professional services. The system is industry-agnostic and adapts to any structured sales process.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Do I need a technical team to manage the automation?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Our platform is built for revenue teams. Day-to-day management is intuitive, and our customer success team provides full technical support so your reps can focus on selling.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Can AI-generated insights be used for board-level forecasting and strategy?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Yes, our predictive analytics and narrative reports are designed for both operational use and executive-level strategic decisions in every commercial context.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pricing" role="tabpanel" aria-labelledby="pricing-tab">
                            <!-- Accordion Pricing -->
                            <div class="accordion ai-custom-accordion" id="pricingAccordion">
                                <!-- Item 1 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingPricingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsePricingOne" aria-expanded="true" aria-controls="collapsePricingOne">
                                            Do you offer flexible pricing models for different sales team sizes?
                                        </button>
                                    </h2>
                                    <div id="collapsePricingOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingPricingOne" data-bs-parent="#pricingAccordion">
                                        <div class="accordion-body">
                                            Yes. We offer packages designed for growth-stage teams, scaling companies, and large global enterprises. Pricing is based on the number of users, data volume, and the complexity of your sales automation needs. Contact us for a tailored proposal.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingPricingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsePricingTwo" aria-expanded="false" aria-controls="collapsePricingTwo">
                                            Is there a long-term licensing contract, or can we test the solution first?
                                        </button>
                                    </h2>
                                    <div id="collapsePricingTwo" class="accordion-collapse collapse" aria-labelledby="headingPricingTwo"
                                        data-bs-parent="#pricingAccordion">
                                        <div class="accordion-body">
                                            We operate on both proof-of-concept models and annual license agreements. Many clients start with a paid pilot program focused on a single workflow, such as automated lead routing, to prove impact before scaling.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingPricingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsePricingThree" aria-expanded="false"
                                            aria-controls="collapsePricingThree">
                                            What does ongoing support and platform evolution cost?
                                        </button>
                                    </h2>
                                    <div id="collapsePricingThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingPricingThree" data-bs-parent="#pricingAccordion">
                                        <div class="accordion-body">
                                            Our pricing is transparent and includes continuous model monitoring, retuning, and access to new features as they are released. We build long-term partnerships focused on driving compounding returns on your AI investment.
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
                            <h3 class="blog-card-title">The Future of Work Embracin Digital Transformation.</h3>
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
