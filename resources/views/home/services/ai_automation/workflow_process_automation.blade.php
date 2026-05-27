@extends('home.includes.layout')
@section('title', 'Workflow & Process Automation | Mounteko')

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
                <h1 class="ai-hero-title">Intelligent Workflow & Process Automation Services</h1>
                <p class="ai-hero-desc">Empower your enterprise with seamless workflow automation services that eliminate bottlenecks, connect systems, and accelerate operational excellence through intelligent design.</p>

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
                            <span>Operational Efficiency</span>
                        </div>
                    </div>
                </div>

                <div class="ai-about-content">
                    <div class="ai-tag-red">
                        <div class="dot"></div>
                        Who We Are
                    </div>
                    <h2 class="ai-about-title">Redefining Business Productivity with Workflow & Process Automation</h2>
                    <p class="ai-about-desc">We are a premier workflow automation company passionate transforming disconnected, manual tasks into seamless, end-to-end automated processes. Our mission is to empower organizations with intelligent workflow solutions that eliminate inefficiencies and accelerate operational excellence.</p>

                    <div class="ai-feature-row">
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-gear-fill"></i></div>
                            <div class="ai-feat-text">Automate Everything,<br>Intelligently</div>
                        </div>
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-search-heart"></i></div>
                            <div class="ai-feat-text">Discover, Scale,<br>Optimize</div>
                        </div>
                    </div>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> From simple approval chains to complex, cross-functional process orchestration.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Leveraging AI to identify bottlenecks, redundancies, and optimization opportunities across workflows.</li>
                        <li><i class="bi bi-check-circle-fill"></i> A unified dashboard to design, execute, monitor, and refine every business process in real time.</li>
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
                    <h2 class="ai-about-title">Supercharge Business Agility with High-Performance Workflow Automation</h2>
                    <p class="ai-about-desc">Stop dealing with slow, messy workflows. We give you automation that helps your business run better and faster. Our platform uses smart tools to build a workflow system that grows with you—and works smoothly with what you already have.</p>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> Enterprise-Ready Automation Engine – Execute thousands of parallel processes with sub-second latency, role-based access control, and audit-ready logging.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Real-Time Process Intelligence – Monitor every task, detect anomalies instantly, and trigger corrective workflows automatically using live analytics and custom SLAs.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Seamless API-First Integration – Connect seamlessly to Salesforce, SAP, Oracle, Microsoft Dynamics, legacy on-premise systems, and any standard API — in days, not months.</li>
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
                    <h2 class="ai-about-title" style="font-size: 30px;">Comprehensive Automation Solutions for Business Growth</h2>
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
                            <i class="bi bi-search"></i>
                        </div>
                        <h3 class="ai-service-title">Intelligent Process Discovery</h3>
                        <p class="ai-service-desc">Our business process automation services begin by identifying high-impact automation opportunities, mapping your workflows to pinpoint inefficiencies and bottlenecks before designing a solution.</p>
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
                            <i class="bi bi-diagram-3-fill"></i>
                        </div>
                        <h3 class="ai-service-title">End-to-End Workflow Automation</h3>
                        <p class="ai-service-desc">We design and deploy custom workflow automation solutions that connect people, processes, and data across your entire organization for hands-free operation.</p>
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
                            <i class="bi bi-cpu"></i>
                        </div>
                        <h3 class="ai-service-title">AI Workflow Automation</h3>
                        <p class="ai-service-desc">Go beyond rules-based tasks. We embed artificial intelligence into your process automation services to handle unstructured data, make predictions, and initiate smart actions.</p>
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
                            <i class="bi bi-robot"></i>
                        </div>
                        <h3 class="ai-service-title">Robotic Process Automation (RPA)</h3>
                        <p class="ai-service-desc">Our process automation company deploys software robots to handle repetitive, high-volume tasks with 100% accuracy, freeing your talent for strategic work.</p>
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
                            <i class="bi bi-link-45deg"></i>
                        </div>
                        <h3 class="ai-service-title">Business Automation & Integration</h3>
                        <p class="ai-service-desc">We build a cohesive workflow management system by seamlessly integrating your core applications, APIs, and data sources into one automated, synced environment.</p>
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
                            <i class="bi bi-map"></i>
                        </div>
                        <h3 class="ai-service-title">Enterprise Automation Strategy</h3>
                        <p class="ai-service-desc">A top-to-bottom roadmap for enterprise workflow automation, ensuring governance, scalability, and alignment with your long-term business objectives.</p>
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
                    <h2 class="ai-about-title" style="font-size: 28px;">Your Journey to Enterprise Workflow Automation</h2>
                    <p class="ai-journey-desc" style="margin-bottom: 30px;">We begin with a detailed consultation to understand your operational pain points, process dependencies, and strategic goals for automation.</p>
                </div>


                <div class="ai-journey-flex">
                    <!-- Step 1 -->
                    <div class="ai-journey-card">
                        <i class="bi bi-eye"></i>
                        <h3>Process Audit &<br>Discovery</h3>
                    </div>

                    <!-- Connector 1 -->
                    <div class="ai-journey-arrow">
                        <span>Analyzing Workflows</span>
                        <div class="arrow-line"></div>
                    </div>

                    <!-- Step 2 (Center) -->
                    <div class="ai-journey-center">
                        <div class="ai-circle-step ai-circle-top">
                            <i class="bi bi-node-plus"></i>
                            <h3>Solution Design &<br>Blueprinting</h3>
                        </div>
                        <div class="ai-circle-step ai-circle-bottom">
                            Our experts architect your bespoke workflow automation solutions and success metrics.
                        </div>
                    </div>

                    <!-- Connector 2 -->
                    <div class="ai-journey-arrow">
                        <span>Configuring Logic</span>
                        <div class="arrow-line"></div>
                    </div>

                    <!-- Step 3 -->
                    <div class="ai-journey-card">
                        <i class="bi bi-cpu-fill"></i>
                        <h3>Build, Integrate &<br>Orchestrate</h3>
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
                        <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&fit=crop&q=80&w=800"
                            alt="Advanced Business Automation" class="ai-exp-main-img">

                        <!-- Floating Glass Badge -->
                        <div class="ai-glass-badge-exp">
                            <div class="badge-icon">
                                <i class="bi bi-activity"></i>
                            </div>
                            <div class="badge-text">
                                <span class="badge-title">Enterprise Sync</span>
                                <span class="badge-sub">Intelligent Flow</span>
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
                    <h2 class="ai-exp-title">Welcome to smarter, faster, more reliable process automation</h2>
                    <p class="ai-exp-desc">
                        As a proven workflow automation specialist, we deliver solutions that adapt to your unique operational reality. Whether finance, HR, IT, or sales, our automation engine helps you standardize repeatable tasks, enforce business rules, and free your teams for higher-value work.
                    </p>

                    <div class="ai-exp-checklist">
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Custom Workflow Design
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Rule-Based Decision Engines
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Deadline & Escalation Management
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Real-Time Analytics Dashboards
                        </div>
                    </div>

                    <p class="ai-exp-footer-text">
                        Enforce consistent execution of business rules while providing full visibility into operational outcomes.
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

                    <!-- Tabs (Only General Ask) -->
                    <ul class="nav nav-tabs ai-custom-tabs" id="aiFaqTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general"
                                type="button" role="tab" aria-controls="general" aria-selected="true">General Ask</button>
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
                                            Is business process automation suitable for small and mid-sized businesses?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Absolutely. Our business automation services are modular and scalable. We build affordable workflow automation solutions that grow with your business, not just for large enterprises.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How does AI workflow automation differ from basic RPA?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Basic RPA handles rule-based, structured tasks. Our AI workflow automation integrates machine learning to process unstructured data, understand context, and make intelligent decisions, expanding automation's potential.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            We have legacy systems. Can a workflow management system still integrate?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Yes, it’s our specialty as a process automation company. We design automation solutions for businesses that wrap around your existing legacy infrastructure without requiring a costly rip-and-replace.
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
