@extends('home.includes.layout')
@section('title', 'AI Integration & Business Automation Services | Mounteko')
@section('meta-description',
'AI-powered automation for sales, support, marketing, and operations — built for growing US businesses by Mounteko.')

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

        .ai-service-card {
            cursor: pointer;
            transition: all 0.4s ease;
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
            <img src="{{ asset('home/assets/homepage/images/ai/robot_left.png') }}" alt="AI Automation Left"
                class="ai-robot-left">
            <img src="{{ asset('home/assets/homepage/images/ai/robot_right.png') }}" alt="AI Automation Right"
                class="ai-robot-right">

            <div class="ai-hero-container">
                <div class="ai-welcome-badge">AI INTEGRATION & BUSINESS AUTOMATION</div>
                <h1 class="ai-hero-title">AI Integration & Business Automation Services</h1>
                <p class="ai-hero-desc">Every business has repetitive work eating into hours that should go toward actual growth — manual data entry, answering the same customer questions, chasing leads that fall through the cracks. Mounteko builds AI-powered automation into sales, support, marketing, and operations, so your team spends time on the work that actually needs a human.</p>

                <div class="ai-pills-row">
                    <span class="ai-pill">Zero Platform Lock-In</span>
                    <span class="ai-pill">End-to-End Workflow Sync</span>
                    <span class="ai-pill">Staged Friction-First Rollout</span>
                    <span class="ai-pill">Enterprise Data Privacy</span>
                </div>

                <a href="{{ route('contactUs') }}" class="btn-ai-get-started">
                    Explore Automation Workflows <i><i class="bi bi-arrow-right"></i></i>
                </a>
            </div>
        </section>

        <!-- SECTION 2: AUTOMATION ACROSS YOUR BUSINESS (6 SUB-SERVICES) -->
        <section class="ai-services-grid-section">
            <div class="ai-services-grid-container">
                <div class="ai-services-header">
                    <div class="ai-tag-red" style="justify-content: center;">
                        <div class="dot"></div>
                        CORE AUTOMATION CAPABILITIES
                    </div>
                    <h2 class="ai-about-title" style="font-size: 38px;">Automation Across Your Business, Not Just One Tool</h2>
                    <p style="color: #94a3b8; max-width: 750px; margin: 15px auto 0; font-size: 15px; line-height: 1.6;">
                        Six interconnected automation disciplines engineered to eliminate manual bottlenecks, sync your software ecosystem, and accelerate business growth.
                    </p>
                </div>

                <div class="ai-services-grid">
                    <!-- Card 01: Sales Automation -->
                    <div class="ai-service-card" onclick="window.location.href='{{ route('services.ai_powered_sales_automation') }}'">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 20%; left: 80%;"></div>
                        <div class="ai-card-particle" style="top: 60%; left: 90%;"></div>
                        <span class="ai-service-number">01</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h3 class="ai-service-title">AI-Powered Sales Automation</h3>
                        <p class="ai-service-desc">Automated lead qualification, CRM enrichment, intelligent email sequencing, and instant meeting booking that convert inbound prospects faster.</p>
                        <a href="{{ route('services.ai_powered_sales_automation') }}" class="ai-service-readmore">Explore Sales Automation <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 02: AI Chatbots & Customer Support -->
                    <div class="ai-service-card" onclick="window.location.href='{{ route('services.ai_chatbots_customer_support') }}'">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 15%; left: 75%;"></div>
                        <div class="ai-card-particle" style="top: 55%; left: 85%;"></div>
                        <span class="ai-service-number">02</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-chat-dots-fill"></i>
                        </div>
                        <h3 class="ai-service-title">AI Chatbots & Support</h3>
                        <p class="ai-service-desc">Intelligent 24/7 conversational AI agents that resolve tier-1 customer inquiries, route complex tickets, and eliminate repetitive queues.</p>
                        <a href="{{ route('services.ai_chatbots_customer_support') }}" class="ai-service-readmore">Explore Support AI <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 03: Workflow & Process Automation -->
                    <div class="ai-service-card" onclick="window.location.href='{{ route('services.workflow_process_automation') }}'">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 25%; left: 70%;"></div>
                        <div class="ai-card-particle" style="top: 65%; left: 95%;"></div>
                        <span class="ai-service-number">03</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-diagram-3-fill"></i>
                        </div>
                        <h3 class="ai-service-title">Workflow & Process Automation</h3>
                        <p class="ai-service-desc">Connecting disparate business tools and automating manual document handling, invoice processing, and cross-team approval chains.</p>
                        <a href="{{ route('services.workflow_process_automation') }}" class="ai-service-readmore">Explore Workflows <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 04: Marketing Automation Systems -->
                    <div class="ai-service-card" onclick="window.location.href='{{ route('services.marketing_automation_systems') }}'">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 10%; left: 85%;"></div>
                        <div class="ai-card-particle" style="top: 50%; left: 75%;"></div>
                        <span class="ai-service-number">04</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-megaphone-fill"></i>
                        </div>
                        <h3 class="ai-service-title">Marketing Automation Systems</h3>
                        <p class="ai-service-desc">Behavior-triggered email flows, customer segmentation, dynamic ad personalization, and automated multi-channel campaigns.</p>
                        <a href="{{ route('services.marketing_automation_systems') }}" class="ai-service-readmore">Explore Marketing AI <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 05: System Integration & Data Automation -->
                    <div class="ai-service-card" onclick="window.location.href='{{ route('services.system_integration_automation') }}'">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 30%; left: 90%;"></div>
                        <div class="ai-card-particle" style="top: 70%; left: 80%;"></div>
                        <span class="ai-service-number">05</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-gear-wide-connected"></i>
                        </div>
                        <h3 class="ai-service-title">System Integration & Data Pipelines</h3>
                        <p class="ai-service-desc">Custom API connectors, webhook architectures, and bi-directional sync that eliminate manual data copy-pasting between platforms.</p>
                        <a href="{{ route('services.system_integration_automation') }}" class="ai-service-readmore">Explore Integrations <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 06: AI Analytics & Business Insights -->
                    <div class="ai-service-card" onclick="window.location.href='{{ route('services.ai_analytics_business_insights') }}'">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 20%; left: 75%;"></div>
                        <div class="ai-card-particle" style="top: 60%; left: 85%;"></div>
                        <span class="ai-service-number">06</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-bar-chart-line-fill"></i>
                        </div>
                        <h3 class="ai-service-title">AI Analytics & Business Insights</h3>
                        <p class="ai-service-desc">Predictive business intelligence, revenue forecasting, anomaly detection, and automated executive reporting dashboards.</p>
                        <a href="{{ route('services.ai_analytics_business_insights') }}" class="ai-service-readmore">Explore Analytics AI <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: AI AUTOMATION THAT FITS HOW YOU ALREADY WORK -->
        <section class="ai-about-section">
            <div class="ai-about-container">
                <div class="ai-about-visual">
                    <div class="ai-main-img-wrap">
                        <img src="{{ asset('home/assets/homepage/images/ai/ai_face_digital.png') }}" alt="AI Integration and Compatibility">
                    </div>
                    <div class="ai-floating-card">
                        <div class="ai-card-icon">
                            <img src="{{ asset('home/assets/homepage/images/ai/ai_data_node.png') }}" alt="Seamless API Node">
                        </div>
                        <div class="ai-card-text">
                            <strong>Zero</strong>
                            <span>Platform Switch Required</span>
                        </div>
                    </div>
                </div>

                <div class="ai-about-content">
                    <div class="ai-tag-red">
                        <div class="dot"></div>
                        INTEGRATION FIRST
                    </div>
                    <h2 class="ai-about-title">AI Automation That Fits How You Already Work</h2>
                    <p class="ai-about-desc">
                        A major fear with AI adoption is that automation requires ripping out existing software, retraining your entire team, or enduring months of migration downtime. Mounteko takes an integration-first approach: we build intelligent automations directly on top of the tools your team already uses every single day — whether that's Salesforce, HubSpot, Microsoft 365, Google Workspace, Slack, QuickBooks, or custom ERP systems.
                    </p>

                    <div class="ai-feature-row">
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-plug-fill"></i></div>
                            <div class="ai-feat-text">Native Stack<br>Integration</div>
                        </div>
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-shield-lock-fill"></i></div>
                            <div class="ai-feat-text">Enterprise Data<br>Privacy</div>
                        </div>
                    </div>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Zero Workflow Disruption:</strong> Automate behind the scenes without altering daily staff habits.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Universal API & Webhook Layer:</strong> Bridge legacy databases and modern cloud SaaS platforms effortlessly.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Private & Secure AI Architecture:</strong> Your proprietary business data is never shared or used to train public LLM models.</li>
                    </ul>

                    <div>
                        <a href="{{ route('contactUs') }}" class="btn-ai-red">Discuss Your Integration Needs <i class="bi bi-arrow-right"></i></a>
                    </div>

                    <img src="{{ asset('home/assets/homepage/images/ai/cute_robot_side.png') }}" alt="AI Assistant"
                        class="ai-side-robot-new">
                </div>
            </div>
        </section>

        <!-- SECTION 4: WHERE TO START (PRACTICAL 3-PHASE ROADMAP) -->
        <section class="ai-transform-section">
            <div class="ai-transform-container">
                <div class="ai-transform-visual">
                    <div class="ai-main-img-transform">
                        <img src="{{ asset('home/assets/homepage/images/ai/robot_hand_touch_new.png') }}"
                            alt="Phased AI Automation Roadmap">
                    </div>
                    <div class="ai-transform-overlay">
                        <img src="{{ asset('home/assets/homepage/images/ai/robot_profile_overlay_new.png') }}"
                            alt="Strategic Automation Framework">
                    </div>
                </div>

                <div class="ai-transform-content">
                    <div class="ai-tag-red">
                        <div class="dot"></div>
                        STRATEGIC ROADMAP
                    </div>
                    <h2 class="ai-about-title">Where to Start: Automating for Fast ROI</h2>
                    <p class="ai-about-desc">
                        Trying to automate your entire business all at once is a recipe for team friction and wasted investment. The most profitable AI adoptions always begin with the single highest-friction manual process — the repetitive bottleneck where your team loses the most billable hours each week.
                    </p>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Phase 1: Automate the #1 Friction Point:</strong> Rapidly eliminate manual data re-entry, invoice processing, or lead routing to generate immediate time savings.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Phase 2: Connect Adjacent Data Flows:</strong> Sync cross-departmental handoffs between sales, finance, and customer fulfillment.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Phase 3: Deploy Predictive AI & Telemetry:</strong> Scale intelligent forecasting, autonomous agent actions, and executive insights across the organization.</li>
                    </ul>

                    <a href="{{ route('contactUs') }}" class="btn-ai-gradient">Schedule an Automation Audit <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <!-- Decorative Reaching Hand -->
            <img src="{{ asset('home/assets/homepage/images/ai/robot_hand_clean.png') }}" alt="Robot Hand Support"
                class="ai-reaching-hand-clean">
        </section>

        <!-- SECTION 5: AUTOMOTIVE INDUSTRY SPOTLIGHT & EXPERIENCE -->
        <section class="ai-experience-section">
            <div class="ai-experience-container">
                <!-- Left Visual Composition -->
                <div class="ai-visual-composition">
                    <div class="ai-main-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?auto=format&fit=crop&q=80&w=800"
                            alt="AI Automation for Automotive & Enterprise" class="ai-exp-main-img">

                        <!-- Floating Glass Badge -->
                        <div class="ai-glass-badge-exp">
                            <div class="badge-icon">
                                <i class="bi bi-cpu-fill"></i>
                            </div>
                            <div class="badge-text">
                                <span class="badge-title">AI Sync Engine</span>
                                <span class="badge-sub">Bi-Directional Pipelines</span>
                            </div>
                        </div>

                        <!-- Decorative Elements -->
                        <div class="ai-exp-shape shape-1"></div>
                        <div class="ai-exp-shape shape-2"></div>
                    </div>
                </div>

                <!-- Right Content: Automotive Spotlight -->
                <div class="ai-experience-content">
                    <span class="ai-tag-purple">INDUSTRY SPOTLIGHT</span>
                    <h2 class="ai-exp-title">Automotive Dealerships & Mobility Solutions</h2>
                    <p class="ai-exp-desc">
                        A multi-location automotive dealership group often loses hours manually re-entering customer information, trade-in valuations, and test-drive inquiries across disconnected systems: their website forms, CRM, Dealer Management System (DMS), and inventory software.
                    </p>
                    <p class="ai-exp-desc">
                        Mounteko builds bi-directional automated data pipelines and AI response engines that sync customer profiles in real time. Inquiries are instantly enriched, test drives are confirmed via automated SMS, and service appointments are logged directly in the DMS — eliminating double entry and capturing buyers before they look elsewhere.
                    </p>

                    <div class="ai-exp-checklist">
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            CRM & DMS Real-Time Sync
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Instant Lead Qualification & SMS
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Automated Inventory Feeds
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Zero Manual Data Duplication
                        </div>
                    </div>

                    <a href="{{ route('contactUs') }}" class="btn-ai-purple">
                        Automate Your Operations <i class="bi bi-arrow-right"></i>
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
                            <span class="dot"></span> RESPONSE TIME: WITHIN 15 MINUTES
                        </div>
                        <h2 class="ai-card-title">Ready to Automate Your Business Workflows?</h2>
                        <p class="ai-card-desc">Tell us about your highest-friction manual processes, and our automation engineers will map out a customized integration plan with clear ROI.</p>

                        <form class="ai-contact-form" action="{{ route('contactStore') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Full name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Describe the repetitive tasks or software you want to automate..." rows="3" required></textarea>
                            </div>

                            <div class="ai-form-footer">
                                <div class="support-person">
                                    <img src="https://ui-avatars.com/api/?name=IT+Expert&background=00ffcc&color=030d0a"
                                        alt="Automation Engineer">
                                    <div class="support-info">
                                        <h4>Senior Solutions Architect</h4>
                                        <p>AI & Automation Team</p>
                                    </div>
                                </div>
                                <button type="submit" class="btn-ai-red">Request Assessment <i
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
                    <h2 class="ai-faq-title">Frequently Asked Questions</h2>
                    <p class="ai-faq-desc">Clear, direct answers about how AI integration and business automation work with your existing tools.
                    </p>

                    <!-- Tabs -->
                    <ul class="nav nav-tabs ai-custom-tabs" id="aiFaqTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general"
                                type="button" role="tab" aria-controls="general" aria-selected="true">General</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#security"
                                type="button" role="tab" aria-controls="security" aria-selected="false">Security & Privacy</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="integration-tab" data-bs-toggle="tab" data-bs-target="#integration"
                                type="button" role="tab" aria-controls="integration" aria-selected="false">Integration</button>
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
                                            Do we need to replace our existing CRM or ERP software?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            No. Mounteko designs automations that connect directly into your existing software (Salesforce, HubSpot, QuickBooks, Microsoft 365, etc.) via APIs and webhooks, so your team doesn't have to learn a new platform.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How long does it take to implement our first automation?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Most initial high-friction workflows (such as lead routing, automated document processing, or customer support bots) are deployed, tested, and live within 2 to 3 weeks.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Is our proprietary company data secure with AI tools?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Yes. We implement enterprise-grade, private AI pipelines with zero data retention for model training. Your company data remains strictly encrypted and under your sovereign control.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                            <p class="mt-4 text-muted">All AI automations utilize zero-trust architecture, end-to-end encryption, and comply with SOC 2, HIPAA, and GDPR standards.</p>
                        </div>
                        <div class="tab-pane fade" id="integration" role="tabpanel" aria-labelledby="integration-tab">
                            <p class="mt-4 text-muted">We support 500+ direct API connectors including Salesforce, HubSpot, Slack, Zapier, Make, Microsoft Power Automate, and custom REST/GraphQL endpoints.</p>
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
                        <span class="dot"></span> AUTOMATION INSIGHTS
                    </div>
                    <h2 class="ai-blog-title">Latest From Our AI & Automation Blog</h2>
                </div>

                <!-- Blog Grid -->
                <div class="ai-blog-grid">
                    <!-- Blog Card 1 -->
                    <div class="ai-blog-card">
                        <div class="blog-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?auto=format&fit=crop&q=80&w=800"
                                alt="Unlocking Automation">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="meta-item"><i class="bi bi-person"></i> By AI Architect</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-calendar3"></i> 20 Mar, 2024</span>
                            </div>
                            <h3 class="blog-card-title">How to Identify the Highest-ROI Workflows for Business Automation</h3>
                            <a href="{{ route('contactUs') }}" class="blog-read-more">Read Insights <i class="bi bi-arrow-up-right"></i></a>
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
                                <span class="meta-item"><i class="bi bi-person"></i> By Systems Lead</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-calendar3"></i> 24 Mar, 2024</span>
                            </div>
                            <h3 class="blog-card-title">Integrating AI Without Replacing Your Existing Enterprise Tech Stack</h3>
                            <a href="{{ route('contactUs') }}" class="blog-read-more">Read Insights <i class="bi bi-arrow-up-right"></i></a>
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
                                <span class="meta-item"><i class="bi bi-person"></i> By Data Strategist</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-calendar3"></i> 28 Mar, 2024</span>
                            </div>
                            <h3 class="blog-card-title">From Manual Data Entry to Real-Time AI Pipelines: A Case Study</h3>
                            <a href="{{ route('contactUs') }}" class="blog-read-more">Read Insights <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection