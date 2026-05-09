@extends('home.includes.layout')
@section('title', 'AI Integration & Business Automation | Mounteko')

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
                <h1 class="ai-hero-title">Transform your business with the power of AI</h1>
                <p class="ai-hero-desc">Streamline operations, enhance customer experiences, and drive unprecedented growth
                    with our custom-built AI solutions and intelligent business automation workflows.</p>

                <div class="ai-pills-row">
                    <span class="ai-pill">ISO 27001</span>
                    <span class="ai-pill">SOC2 Compliant</span>
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
                            <strong>435+</strong>
                            <span>Creative Specialists in our team</span>
                        </div>
                    </div>
                </div>

                <div class="ai-about-content">
                    <div class="ai-tag-red">
                        <div class="dot"></div>
                        Who We Are
                    </div>
                    <h2 class="ai-about-title">Redefining Creativity with the Power of AI.</h2>
                    <p class="ai-about-desc">We are a cutting-edge AI agency passionate about turning imagination into
                        reality. Our mission is to empower businesses, creators, and innovators through intelligent design
                        and automation.</p>

                    <div class="ai-feature-row">
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-cpu-fill"></i></div>
                            <div class="ai-feat-text">AI-Powered<br>Innovation</div>
                        </div>
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-palette-fill"></i></div>
                            <div class="ai-feat-text">Limitless<br>Styles</div>
                        </div>
                    </div>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> Harnessing advanced models for unmatched creativity.
                        </li>
                        <li><i class="bi bi-check-circle-fill"></i> From ultra-realistic to artistic, fantasy, and
                            futuristic.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Generate visuals in seconds, for individuals or
                            enterprises.</li>
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
                    <h2 class="ai-about-title">Transforming Businesses with AI-Powered Innovation</h2>
                    <p class="ai-about-desc">We are pioneers in the fusion of creativity and cutting-edge AI technology. Our
                        mission is to transform the way businesses approach design and digital strategy by delivering
                        innovative solutions.</p>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> Advanced Artificial Intelligence Capabilities for
                            Enhanced Efficiency.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Real-time Data Analysis and Monitoring for Optimized
                            Performance.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Collaborative and Autonomous Robots for Seamless
                            Integration.</li>
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
                    <h2 class="ai-about-title" style="font-size: 42px;">Best Innovative Solution for Businesses</h2>
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
                        <h3 class="ai-service-title">AI-Powered Solution</h3>
                        <p class="ai-service-desc">Specialize in delivering AI-powered solution revolutionize the way
                            businesses operate. By leveraging the latest.</p>
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
                        <h3 class="ai-service-title">Custom Technology</h3>
                        <p class="ai-service-desc">Specialize in delivering AI-powered solution revolutionize the way
                            businesses operate. By leveraging the latest.</p>
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
                        <h3 class="ai-service-title">Machine Learning</h3>
                        <p class="ai-service-desc">Specialize in delivering AI-powered solution revolutionize the way
                            businesses operate. By leveraging the latest.</p>
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
                        <h3 class="ai-service-title">Predicative Analytics</h3>
                        <p class="ai-service-desc">Specialize in delivering AI-powered solution revolutionize the way
                            businesses operate. By leveraging the latest.</p>
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
                        <h3 class="ai-service-title">Automation Process</h3>
                        <p class="ai-service-desc">Specialize in delivering AI-powered solution revolutionize the way
                            businesses operate. By leveraging the latest.</p>
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
                        <h3 class="ai-service-title">Education & Science</h3>
                        <p class="ai-service-desc">Specialize in delivering AI-powered solution revolutionize the way
                            businesses operate. By leveraging the latest.</p>
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
                    <h2 class="ai-about-title" style="font-size: 28px;">The AI Transformation Journey</h2>
                    <p class="ai-journey-desc" style="margin-bottom: 30px;">We begin with a detailed consultation to learn
                        about your business challenges, goals, and opportunities for AI integration.</p>
                </div>


                <div class="ai-journey-flex">
                    <!-- Step 1 -->
                    <div class="ai-journey-card">
                        <i class="bi bi-vinyl"></i>
                        <h3>Discovery &<br>Consultation</h3>
                    </div>

                    <!-- Connector 1 -->
                    <div class="ai-journey-arrow">
                        <span>Understanding<br>Your Needs</span>
                        <div class="arrow-line"></div>
                    </div>

                    <!-- Step 2 (Center) -->
                    <div class="ai-journey-center">
                        <div class="ai-circle-step ai-circle-top">
                            <i class="bi bi-node-plus"></i>
                            <h3>Data &<br>Feasibility</h3>
                        </div>
                        <div class="ai-circle-step ai-circle-bottom">
                            Our experts analyze your data, workflows, and technology stack
                        </div>
                    </div>

                    <!-- Connector 2 -->
                    <div class="ai-journey-arrow">
                        <span>Understanding<br>Your Needs</span>
                        <div class="arrow-line"></div>
                    </div>

                    <!-- Step 3 -->
                    <div class="ai-journey-card">
                        <i class="bi bi-shield-check"></i>
                        <h3>Development &<br>Integration</h3>
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
                                <span class="badge-title">AI-Powered</span>
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
                    <h2 class="ai-exp-title">Welcome to the new age of AI-driven Orbia networks</h2>
                    <p class="ai-exp-desc">
                        Our AI agency is a cutting-edge technology partner that specializes in delivering artificial
                        intelligence solutions to help businesses streamline operations, improve decision making,
                        enhance customer experiences. By leveraging the power of AI.
                    </p>

                    <div class="ai-exp-checklist">
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Business Process Automation
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Improved Decision-Making
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Personalized Customer Experiences
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Technology Integration
                        </div>
                    </div>

                    <p class="ai-exp-footer-text">
                        Web developers and marketers who've been delivering digital success for more than a decade.
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
                            <button class="nav-link" id="career-tab" data-bs-toggle="tab" data-bs-target="#career"
                                type="button" role="tab" aria-controls="career" aria-selected="false">Job Career</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pricing-tab" data-bs-toggle="tab" data-bs-target="#pricing"
                                type="button" role="tab" aria-controls="pricing" aria-selected="false">Pricing Plan</button>
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
                                            What industries can benefit from your AI solutions?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Not at all. We build user-friendly AI platforms with simple dashboards and
                                            integrations. Our team handles the technical complexity
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Do I need technical knowledge to use your AI services?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Yes, our AI services are designed to be user-friendly, although having some
                                            technical background can be beneficial.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Do you provide bulk image generation for businesses?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Absolutely. We offer scalable solutions for bulk image generation tailored to
                                            enterprise needs.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 4 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            Can AI-generated images be used for marketing or branding?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Yes, our AI-generated images are fully licensed for commercial use.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="career" role="tabpanel" aria-labelledby="career-tab">
                            <p class="mt-4 text-muted">Career opportunities will be listed here soon.</p>
                        </div>
                        <div class="tab-pane fade" id="pricing" role="tabpanel" aria-labelledby="pricing-tab">
                            <p class="mt-4 text-muted">Check out our flexible pricing plans for all business sizes.</p>
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