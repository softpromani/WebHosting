@extends('home.includes.layout')
@section('title', 'AI Chatbot & Customer Support Automation Services | Mounteko')
@section('meta-description',
'Custom AI chatbots that handle support around the clock, without losing the human touch — built by Mounteko.')

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
            <img src="{{ asset('home/assets/homepage/images/ai/robot_left.png') }}" alt="AI Support Bot Left"
                class="ai-robot-left">
            <img src="{{ asset('home/assets/homepage/images/ai/robot_right.png') }}" alt="AI Support Bot Right"
                class="ai-robot-right">

            <div class="ai-hero-container">
                <div class="ai-welcome-badge">24/7 CONVERSATIONAL SUPPORT</div>
                <h1 class="ai-hero-title">AI Chatbot & Customer Support Automation Services</h1>
                <p class="ai-hero-desc">Customers expect an answer now, not a next-business-day email reply — and most support questions are the same handful of things asked over and over. Mounteko builds AI chatbots that handle common questions instantly, around the clock, and hand off to a real person the moment a conversation needs one.</p>

                <div class="ai-pills-row">
                    <span class="ai-pill">Natural, Context-Aware Dialogue</span>
                    <span class="ai-pill">Seamless Human Escalation</span>
                    <span class="ai-pill">24/7/365 Zero-Wait Support</span>
                    <span class="ai-pill">Omnichannel Deployment</span>
                </div>

                <a href="{{ route('contactUs') }}" class="btn-ai-get-started">
                    Deploy a Custom Support Bot <i><i class="bi bi-arrow-right"></i></i>
                </a>
            </div>
        </section>

        <!-- SECTION 2: CONVERSATIONAL AI THAT DOESN'T FEEL ROBOTIC (6-CARD GRID) -->
        <section class="ai-services-grid-section">
            <div class="ai-services-grid-container">
                <div class="ai-services-header">
                    <div class="ai-tag-red" style="justify-content: center;">
                        <div class="dot"></div>
                        NATURAL LANGUAGE UNDERSTANDING
                    </div>
                    <h2 class="ai-about-title" style="font-size: 38px;">Conversational AI That Doesn't Feel Robotic</h2>
                    <p style="color: #94a3b8; max-width: 750px; margin: 15px auto 0; font-size: 15px; line-height: 1.6;">
                        Nobody likes rigid, scripted chat trees that loop endlessly and fail to understand basic questions. We engineer LLM-powered support agents that comprehend nuance, tone, and complex phrasing.
                    </p>
                </div>

                <div class="ai-services-grid">
                    <!-- Card 01: Context-Aware Intent Parsing -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 20%; left: 80%;"></div>
                        <div class="ai-card-particle" style="top: 60%; left: 90%;"></div>
                        <span class="ai-service-number">01</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-chat-heart-fill"></i>
                        </div>
                        <h3 class="ai-service-title">Context-Aware Intent Parsing</h3>
                        <p class="ai-service-desc">Advanced NLP understands natural phrasing, typos, and multi-part questions without forcing customers into rigid, frustrating button menus.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 02: Multi-Turn Memory & Coherence -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 15%; left: 75%;"></div>
                        <div class="ai-card-particle" style="top: 55%; left: 85%;"></div>
                        <span class="ai-service-number">02</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-memory"></i>
                        </div>
                        <h3 class="ai-service-title">Multi-Turn Conversation Memory</h3>
                        <p class="ai-service-desc">Retains user context across the entire interaction, referencing previous statements naturally so customers never have to repeat themselves.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 03: Brand Voice Calibration -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 25%; left: 70%;"></div>
                        <div class="ai-card-particle" style="top: 65%; left: 95%;"></div>
                        <span class="ai-service-number">03</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-palette2"></i>
                        </div>
                        <h3 class="ai-service-title">Brand Voice Calibration</h3>
                        <p class="ai-service-desc">Tuned to embody your company's exact persona — professional, empathetic, friendly, or deeply technical — with strict guardrails.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 04: Dynamic Knowledge Base Ingestion -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 10%; left: 85%;"></div>
                        <div class="ai-card-particle" style="top: 50%; left: 75%;"></div>
                        <span class="ai-service-number">04</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-book-half"></i>
                        </div>
                        <h3 class="ai-service-title">Live Knowledge Sync</h3>
                        <p class="ai-service-desc">Automatically indexes your help center, product manuals, and internal documentation to deliver 100% verified, hallucination-free answers.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 05: Omnichannel Consistency -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 30%; left: 90%;"></div>
                        <div class="ai-card-particle" style="top: 70%; left: 80%;"></div>
                        <span class="ai-service-number">05</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-share-fill"></i>
                        </div>
                        <h3 class="ai-service-title">Omnichannel Integration</h3>
                        <p class="ai-service-desc">Deploy your AI assistant seamlessly across web live chat, WhatsApp, SMS, mobile apps, and Zendesk/Freshdesk email queues.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 06: Multilingual Support -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 20%; left: 75%;"></div>
                        <div class="ai-card-particle" style="top: 60%; left: 85%;"></div>
                        <span class="ai-service-number">06</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-translate"></i>
                        </div>
                        <h3 class="ai-service-title">Multilingual Fluency</h3>
                        <p class="ai-service-desc">Supports 50+ languages with automatic real-time language detection, providing seamless localized support to global buyers.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: CUSTOMER SUPPORT AUTOMATION, NOT FULL REPLACEMENT -->
        <section class="ai-about-section">
            <div class="ai-about-container">
                <div class="ai-about-visual">
                    <div class="ai-main-img-wrap">
                        <img src="{{ asset('home/assets/homepage/images/ai/ai_face_digital.png') }}" alt="AI Support and Human Collaboration">
                    </div>
                    <div class="ai-floating-card">
                        <div class="ai-card-icon">
                            <img src="{{ asset('home/assets/homepage/images/ai/ai_data_node.png') }}" alt="Human Handoff">
                        </div>
                        <div class="ai-card-text">
                            <strong>70%+</strong>
                            <span>Tier-1 Inquiries Deflected</span>
                        </div>
                    </div>
                </div>

                <div class="ai-about-content">
                    <div class="ai-tag-red">
                        <div class="dot"></div>
                        SMART HUMAN COLLABORATION
                    </div>
                    <h2 class="ai-about-title">Customer Support Automation, Not Full Replacement</h2>
                    <p class="ai-about-desc">
                        We don't believe in overselling full automation. High-value customer relationships require human empathy for complex grievances, custom billing negotiations, and sensitive edge cases. Our AI chatbots handle the repetitive 70% of tier-1 inquiries — password resets, order status checks, policy details, and basic troubleshooting — so your human support team can focus on high-priority tickets.
                    </p>

                    <div class="ai-feature-row">
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-person-badge-fill"></i></div>
                            <div class="ai-feat-text">Instant Human<br>Escalation</div>
                        </div>
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-journal-text"></i></div>
                            <div class="ai-feat-text">Full Context<br>Handoff</div>
                        </div>
                    </div>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Effortless Human Escalation:</strong> When a customer expresses frustration or asks for an agent, the bot transfers them instantly with zero dead ends.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Comprehensive Agent Briefing:</strong> Live agents receive an executive summary and full chat transcript before answering.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Automated Helpdesk Ticket Sync:</strong> Categorizes and updates tickets in Zendesk, Freshdesk, HubSpot, or Salesforce automatically.</li>
                    </ul>

                    <div>
                        <a href="{{ route('contactUs') }}" class="btn-ai-red">Optimize Your Support Workflow <i
                                class="bi bi-arrow-right"></i></a>
                    </div>

                    <img src="{{ asset('home/assets/homepage/images/ai/cute_robot_side.png') }}" alt="AI Assistant"
                        class="ai-side-robot-new">
                </div>
            </div>
        </section>

        <!-- SECTION 4: AVAILABLE AROUND THE CLOCK -->
        <section class="ai-transform-section">
            <div class="ai-transform-container">
                <div class="ai-transform-visual">
                    <div class="ai-main-img-transform">
                        <img src="{{ asset('home/assets/homepage/images/ai/robot_hand_touch_new.png') }}"
                            alt="24/7 Always-On AI Support">
                    </div>
                    <div class="ai-transform-overlay">
                        <img src="{{ asset('home/assets/homepage/images/ai/robot_profile_overlay_new.png') }}"
                            alt="Zero Wait Support">
                    </div>
                </div>

                <div class="ai-transform-content">
                    <div class="ai-tag-red">
                        <div class="dot"></div>
                        24/7/365 AVAILABILITY
                    </div>
                    <h2 class="ai-about-title">Available Around the Clock: Instant Answers at 2 AM</h2>
                    <p class="ai-about-desc">
                        When a customer runs into an issue outside normal business hours, waiting 12+ hours for the morning team often leads to frustration, lost sales, or customer churn. Mounteko's AI support agents never sleep, take breaks, or create queue delays — delivering instantaneous, verified solutions at midnight or during weekend traffic surges.
                    </p>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Sub-Second First Response Time:</strong> Eliminates customer wait times completely.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Weekend & Holiday Continuity:</strong> Keeps your brand responsive when your office is closed.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Elastic Surge Capacity:</strong> Effortlessly handles 10 or 10,000 concurrent conversations without extra headcount.</li>
                    </ul>

                    <a href="{{ route('contactUs') }}" class="btn-ai-gradient">Get 24/7 Chatbot Coverage <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <!-- Decorative Reaching Hand -->
            <img src="{{ asset('home/assets/homepage/images/ai/robot_hand_clean.png') }}" alt="Robot Hand Support"
                class="ai-reaching-hand-clean">
        </section>

        <!-- SECTION 5: TELECOM INDUSTRY SPOTLIGHT -->
        <section class="ai-experience-section">
            <div class="ai-experience-container">
                <!-- Left Visual Composition -->
                <div class="ai-visual-composition">
                    <div class="ai-main-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?auto=format&fit=crop&q=80&w=800"
                            alt="Telecom Support Automation" class="ai-exp-main-img">

                        <!-- Floating Glass Badge -->
                        <div class="ai-glass-badge-exp">
                            <div class="badge-icon">
                                <i class="bi bi-broadcast-pin"></i>
                            </div>
                            <div class="badge-text">
                                <span class="badge-title">80% Deflection</span>
                                <span class="badge-sub">High-Volume Telecom</span>
                            </div>
                        </div>

                        <!-- Decorative Elements -->
                        <div class="ai-exp-shape shape-1"></div>
                        <div class="ai-exp-shape shape-2"></div>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="ai-experience-content">
                    <span class="ai-tag-purple">INDUSTRY SPOTLIGHT</span>
                    <h2 class="ai-exp-title">Telecom & High-Volume Subscriber Inquiries</h2>
                    <p class="ai-exp-desc">
                        For telecommunications providers, ISPs, and VoIP operators, support desks face a relentless influx of repetitive inquiries: billing questions, data limit checks, payment renewals, plan upgrades, and service outage status updates.
                    </p>
                    <p class="ai-exp-desc">
                        Mounteko deploys AI support chatbots connected directly to subscriber billing databases and network telemetry. When an outage happens, the bot detects the subscriber's postal code, confirms regional line maintenance, and logs a ticket automatically — deflecting up to 80% of call center volume and freeing phone lines for complex technical escalations.
                    </p>

                    <div class="ai-exp-checklist">
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Automated Billing & Plan Inquiries
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Real-Time Outage Lookup by ZIP
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Step-by-Step Modem Diagnostics
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Direct Dispatch & Ticket Logging
                        </div>
                    </div>

                    <a href="{{ route('contactUs') }}" class="btn-ai-purple">
                        Automate High-Volume Support <i class="bi bi-arrow-right"></i>
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
                        <h2 class="ai-card-title">Ready to Launch Your AI Support Assistant?</h2>
                        <p class="ai-card-desc">Tell us about your support volume and helpdesk tools, and our engineers will build a tailored demo agent trained on your sample FAQs.</p>

                        <form class="ai-contact-form" action="{{ route('contactStore') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Full name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your Work Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Describe the repetitive questions or support tools you want to automate..." rows="3" required></textarea>
                            </div>

                            <div class="ai-form-footer">
                                <div class="support-person">
                                    <img src="https://ui-avatars.com/api/?name=Chatbot+Architect&background=00ffcc&color=030d0a"
                                        alt="Chatbot Architect">
                                    <div class="support-info">
                                        <h4>Senior Conversational AI Architect</h4>
                                        <p>Support Automation Team</p>
                                    </div>
                                </div>
                                <button type="submit" class="btn-ai-red">Request Demo Bot <i
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
                    <h2 class="ai-faq-title">AI Chatbot FAQs</h2>
                    <p class="ai-faq-desc">Clear answers on how our conversational AI integrates with your support infrastructure.
                    </p>

                    <!-- Tabs -->
                    <ul class="nav nav-tabs ai-custom-tabs" id="aiFaqTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general"
                                type="button" role="tab" aria-controls="general" aria-selected="true">General</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="safety-tab" data-bs-toggle="tab" data-bs-target="#safety"
                                type="button" role="tab" aria-controls="safety" aria-selected="false">Accuracy & Safety</button>
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
                                            How does the bot handle questions it doesn't know?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            The bot gracefully acknowledges limitations and immediately offers to connect the customer with a live human agent or create a prioritized helpdesk ticket with full context.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Which helpdesk software can the bot connect to?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            We support native integrations with Zendesk, Freshdesk, HubSpot Service Hub, Intercom, Salesforce Service Cloud, Jira Service Desk, and custom REST ticketing APIs.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            How long does training and deployment take?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            A standard AI support bot can be trained on your knowledge base, tested for accuracy, and deployed live across your website or WhatsApp within 2 to 3 weeks.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="safety" role="tabpanel" aria-labelledby="safety-tab">
                            <p class="mt-4 text-muted">We use Retrieval-Augmented Generation (RAG) with strict source attribution, guaranteeing that your bot only responds using approved company documents.</p>
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
                        <span class="dot"></span> SUPPORT INSIGHTS
                    </div>
                    <h2 class="ai-blog-title">Latest From Our Support Automation Blog</h2>
                </div>

                <!-- Blog Grid -->
                <div class="ai-blog-grid">
                    <!-- Blog Card 1 -->
                    <div class="ai-blog-card">
                        <div class="blog-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1534536281715-e28d76689b4d?auto=format&fit=crop&q=80&w=800"
                                alt="Support Deflection">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="meta-item"><i class="bi bi-person"></i> By Support Lead</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-calendar3"></i> 20 Mar, 2024</span>
                            </div>
                            <h3 class="blog-card-title">How to Deflect 70% of Tier-1 Support Tickets Without Frustrating Customers</h3>
                            <a href="{{ route('contactUs') }}" class="blog-read-more">Read Insights <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <!-- Blog Card 2 -->
                    <div class="ai-blog-card">
                        <div class="blog-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=800"
                                alt="Conversational AI vs Rigid Trees">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="meta-item"><i class="bi bi-person"></i> By AI Architect</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-calendar3"></i> 24 Mar, 2024</span>
                            </div>
                            <h3 class="blog-card-title">Why Legacy Rule-Based Chatbots Fail (And How LLMs Fix Them)</h3>
                            <a href="{{ route('contactUs') }}" class="blog-read-more">Read Insights <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <!-- Blog Card 3 -->
                    <div class="ai-blog-card">
                        <div class="blog-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=800"
                                alt="Omnichannel AI Support">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="meta-item"><i class="bi bi-person"></i> By CX Strategist</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-calendar3"></i> 28 Mar, 2024</span>
                            </div>
                            <h3 class="blog-card-title">Designing Seamless Human-in-the-Loop Escalation Workflows</h3>
                            <a href="{{ route('contactUs') }}" class="blog-read-more">Read Insights <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
