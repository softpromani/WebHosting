@extends('home.includes.layout')
@section('title', 'Workflow & Business Process Automation Services | Mounteko')
@section('meta-description',
'Workflow and process automation that cuts manual work and human error across your operations — built by Mounteko.')

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
            <img src="{{ asset('home/assets/homepage/images/ai/robot_left.png') }}" alt="AI Workflow Left"
                class="ai-robot-left">
            <img src="{{ asset('home/assets/homepage/images/ai/robot_right.png') }}" alt="AI Workflow Right"
                class="ai-robot-right">

            <div class="ai-hero-container">
                <div class="ai-welcome-badge">PROCESS AUTOMATION ARCHITECTURE</div>
                <h1 class="ai-hero-title">Workflow & Business Process Automation Services</h1>
                <p class="ai-hero-desc">Every business has a process that still runs on someone remembering to do it manually — forwarding an email, updating a spreadsheet, moving a task from one system to another. Mounteko automates these workflows so the process runs itself, consistently, without depending on someone's memory.</p>

                <div class="ai-pills-row">
                    <span class="ai-pill">Cross-App System Orchestration</span>
                    <span class="ai-pill">Judgment-Based AI Decisions</span>
                    <span class="ai-pill">High-Frequency Quick Wins</span>
                    <span class="ai-pill">Zero Memory-Dependent Handoffs</span>
                </div>

                <a href="{{ route('contactUs') }}" class="btn-ai-get-started">
                    Automate Your Business Workflows <i><i class="bi bi-arrow-right"></i></i>
                </a>
            </div>
        </section>

        <!-- SECTION 2: IDENTIFYING WHAT TO AUTOMATE FIRST (6-CARD GRID) -->
        <section class="ai-services-grid-section">
            <div class="ai-services-grid-container">
                <div class="ai-services-header">
                    <div class="ai-tag-red" style="justify-content: center;">
                        <div class="dot"></div>
                        PRAGMATIC AUTOMATION ROADMAP
                    </div>
                    <h2 class="ai-about-title" style="font-size: 38px;">Identifying What to Automate First: High-Frequency Quick Wins</h2>
                    <p style="color: #94a3b8; max-width: 750px; margin: 15px auto 0; font-size: 15px; line-height: 1.6;">
                        Starting with your most complicated, multi-department process often causes project delays. We prioritize high-frequency, low-complexity manual friction points first — delivering immediate time savings before scaling.
                    </p>
                </div>

                <div class="ai-services-grid">
                    <!-- Card 01: High-Frequency Task Prioritization -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 20%; left: 80%;"></div>
                        <div class="ai-card-particle" style="top: 60%; left: 90%;"></div>
                        <span class="ai-service-number">01</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-lightning-charge-fill"></i>
                        </div>
                        <h3 class="ai-service-title">High-Frequency Task Prioritization</h3>
                        <p class="ai-service-desc">Targeting repetitive daily chores (spreadsheet updates, file organizing, status alerts) where your team loses hours every single day.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 02: Bottleneck Discovery -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 15%; left: 75%;"></div>
                        <div class="ai-card-particle" style="top: 55%; left: 85%;"></div>
                        <span class="ai-service-number">02</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-search"></i>
                        </div>
                        <h3 class="ai-service-title">Friction & Bottleneck Auditing</h3>
                        <p class="ai-service-desc">Mapping where approvals stall, documents get lost in inboxes, or cross-team handoffs create expensive operational delays.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 03: Rapid Deployment Sprints -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 25%; left: 70%;"></div>
                        <div class="ai-card-particle" style="top: 65%; left: 95%;"></div>
                        <span class="ai-service-number">03</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-rocket-takeoff-fill"></i>
                        </div>
                        <h3 class="ai-service-title">Rapid 2-Week Deployment</h3>
                        <p class="ai-service-desc">Launching lightweight, high-impact automations within days to generate immediate ROI and build organizational confidence.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 04: Document & OCR Ingestion -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 10%; left: 85%;"></div>
                        <div class="ai-card-particle" style="top: 50%; left: 75%;"></div>
                        <span class="ai-service-number">04</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-file-earmark-text-fill"></i>
                        </div>
                        <h3 class="ai-service-title">Automated Document Ingestion</h3>
                        <p class="ai-service-desc">Extracting data from PDFs, invoices, forms, and receipts directly into your database without error-prone manual typing.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 05: Operational Consistency -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 30%; left: 90%;"></div>
                        <div class="ai-card-particle" style="top: 70%; left: 80%;"></div>
                        <span class="ai-service-number">05</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h3 class="ai-service-title">Zero-Error Execution</h3>
                        <p class="ai-service-desc">Eliminating human copy-paste errors, missed email triggers, and skipped checklist items with reliable automated scripts.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 06: Scalable Phased Expansion -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 20%; left: 75%;"></div>
                        <div class="ai-card-particle" style="top: 60%; left: 85%;"></div>
                        <span class="ai-service-number">06</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-diagram-3-fill"></i>
                        </div>
                        <h3 class="ai-service-title">Scalable Phased Expansion</h3>
                        <p class="ai-service-desc">Methodically connecting standalone task automations into comprehensive, multi-department operational pipelines.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: BUSINESS PROCESS AUTOMATION THAT CONNECTS YOUR TOOLS -->
        <section class="ai-about-section">
            <div class="ai-about-container">
                <div class="ai-about-visual">
                    <div class="ai-main-img-wrap">
                        <img src="{{ asset('home/assets/homepage/images/ai/ai_face_digital.png') }}" alt="Cross-Platform System Automation">
                    </div>
                    <div class="ai-floating-card">
                        <div class="ai-card-icon">
                            <img src="{{ asset('home/assets/homepage/images/ai/ai_data_node.png') }}" alt="Connected Tools">
                        </div>
                        <div class="ai-card-text">
                            <strong>500+</strong>
                            <span>SaaS & Database Integrations</span>
                        </div>
                    </div>
                </div>

                <div class="ai-about-content">
                    <div class="ai-tag-red">
                        <div class="dot"></div>
                        CROSS-SYSTEM INTEGRATION
                    </div>
                    <h2 class="ai-about-title">Business Process Automation That Connects Your Tools</h2>
                    <p class="ai-about-desc">
                        True efficiency rarely happens inside a single app. Real operational friction occurs in the gaps between your tools — when data from your CRM has to be manually re-typed into an ERP, billing software, or project tracker. Mounteko builds cross-platform automation pipelines that bridge your entire software ecosystem (Salesforce, QuickBooks, Slack, Google Workspace, Microsoft 365, Asana, SAP, and custom databases), ensuring information flows seamlessly across your business without manual intervention.
                    </p>

                    <div class="ai-feature-row">
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-link-45deg"></i></div>
                            <div class="ai-feat-text">Universal App<br>Bridging</div>
                        </div>
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-arrow-repeat"></i></div>
                            <div class="ai-feat-text">Bi-Directional<br>Data Flow</div>
                        </div>
                    </div>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Multi-System Data Sync:</strong> Updates customer records, financial entries, and project cards across all platforms simultaneously.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Automated Approval Chains:</strong> Routes approval requests to managers on Slack or Teams with one-click decision buttons.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>End-to-End Audit Logs:</strong> Tracks every automated execution with full historical logs and instant anomaly alerts.</li>
                    </ul>

                    <div>
                        <a href="{{ route('contactUs') }}" class="btn-ai-red">Connect Your Software Tools <i
                                class="bi bi-arrow-right"></i></a>
                    </div>

                    <img src="{{ asset('home/assets/homepage/images/ai/cute_robot_side.png') }}" alt="AI Assistant"
                        class="ai-side-robot-new">
                </div>
            </div>
        </section>

        <!-- SECTION 4: AI WORKFLOW AUTOMATION FOR JUDGMENT-BASED TASKS -->
        <section class="ai-transform-section">
            <div class="ai-transform-container">
                <div class="ai-transform-visual">
                    <div class="ai-main-img-transform">
                        <img src="{{ asset('home/assets/homepage/images/ai/robot_hand_touch_new.png') }}"
                            alt="AI Judgment-Based Automation">
                    </div>
                    <div class="ai-transform-overlay">
                        <img src="{{ asset('home/assets/homepage/images/ai/robot_profile_overlay_new.png') }}"
                            alt="Smart Decision Engine">
                    </div>
                </div>

                <div class="ai-transform-content">
                    <div class="ai-tag-red">
                        <div class="dot"></div>
                        BEYOND BASIC IF-THEN RULES
                    </div>
                    <h2 class="ai-about-title">AI Workflow Automation for Judgment-Based Tasks</h2>
                    <p class="ai-about-desc">
                        Traditional automation only handles simple, rigid rules ('if form submitted, send email'). But modern business processes require subjective judgment — understanding unstructured emails, categorizing vendor invoices, evaluating support urgency, or routing complex proposals. Mounteko integrates fine-tuned AI models into your workflows to make smart, context-aware decisions autonomously.
                    </p>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Unstructured Data Comprehension:</strong> AI reads free-text emails, contracts, and work orders to extract intent and required actions.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Contextual Categorization & Routing:</strong> Evaluates inquiry severity and routes tasks to the exact qualified specialist.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Exception & Anomaly Detection:</strong> Flags unusual transactions or out-of-policy expenses for manager review automatically.</li>
                    </ul>

                    <a href="{{ route('contactUs') }}" class="btn-ai-gradient">Explore Intelligent Automations <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <!-- Decorative Reaching Hand -->
            <img src="{{ asset('home/assets/homepage/images/ai/robot_hand_clean.png') }}" alt="Robot Hand Support"
                class="ai-reaching-hand-clean">
        </section>

        <!-- SECTION 5: MANUFACTURING INDUSTRY SPOTLIGHT -->
        <section class="ai-experience-section">
            <div class="ai-experience-container">
                <!-- Left Visual Composition -->
                <div class="ai-visual-composition">
                    <div class="ai-main-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=800"
                            alt="Manufacturing Workflow Automation" class="ai-exp-main-img">

                        <!-- Floating Glass Badge -->
                        <div class="ai-glass-badge-exp">
                            <div class="badge-icon">
                                <i class="bi bi-gear-wide-connected"></i>
                            </div>
                            <div class="badge-text">
                                <span class="badge-title">95% Faster</span>
                                <span class="badge-sub">PO Approval Cycle</span>
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
                    <h2 class="ai-exp-title">Manufacturing: Purchase Orders & Shop Floor Approval Chains</h2>
                    <p class="ai-exp-desc">
                        In manufacturing operations, production requests and vendor Purchase Orders (POs) often stall in messy email threads — waiting days for manager sign-offs, manual inventory checks in legacy ERPs, and re-entry into accounting software.
                    </p>
                    <p class="ai-exp-desc">
                        Mounteko builds end-to-end automated manufacturing workflows. When a PO is created, AI verifies line-item pricing against supplier contracts, checks live inventory thresholds, routes digital approval requests to mobile devices, and logs confirmed orders directly into the ERP — reducing PO cycle times from 5 days to under 15 minutes.
                    </p>

                    <div class="ai-exp-checklist">
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Automated PO Line-Item Verification
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            One-Click Mobile Approval Routing
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Direct ERP & Inventory Sync
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Zero Email Bottlenecks
                        </div>
                    </div>

                    <a href="{{ route('contactUs') }}" class="btn-ai-purple">
                        Accelerate Plant Workflows <i class="bi bi-arrow-right"></i>
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
                        <h2 class="ai-card-title">Ready to Automate Your Manual Processes?</h2>
                        <p class="ai-card-desc">Tell us which repetitive workflows or disconnected software tools are slowing your team down, and our automation engineers will map out a solution.</p>

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
                                <textarea name="message" placeholder="Describe the manual process or approval chain you want to automate..." rows="3" required></textarea>
                            </div>

                            <div class="ai-form-footer">
                                <div class="support-person">
                                    <img src="https://ui-avatars.com/api/?name=Workflow+Architect&background=00ffcc&color=030d0a"
                                        alt="Workflow Architect">
                                    <div class="support-info">
                                        <h4>Senior Workflow Architect</h4>
                                        <p>Process Automation Team</p>
                                    </div>
                                </div>
                                <button type="submit" class="btn-ai-red">Request Workflow Audit <i
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
                    <h2 class="ai-faq-title">Workflow Automation FAQs</h2>
                    <p class="ai-faq-desc">Answers to common questions about connecting systems and automating business processes.
                    </p>

                    <!-- Tabs -->
                    <ul class="nav nav-tabs ai-custom-tabs" id="aiFaqTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general"
                                type="button" role="tab" aria-controls="general" aria-selected="true">General</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="systems-tab" data-bs-toggle="tab" data-bs-target="#systems"
                                type="button" role="tab" aria-controls="systems" aria-selected="false">Integration</button>
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
                                            What is the difference between simple automation and AI workflow automation?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Simple automation follows rigid 'if-this-then-that' rules. AI workflow automation can parse unstructured documents, understand context in emails, classify incoming requests, and make intelligent routing decisions automatically.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Can you automate workflows involving legacy on-premise software?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Yes. We build custom API bridges, secure database connectors, and RPA bots that interact directly with legacy on-premise ERPs, SQL databases, and proprietary desktop applications.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            What happens if a step in an automated workflow encounters an error?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            All workflows include automated retry logic, exception handling, and instant notifications to designated administrators, ensuring no task is ever dropped silently.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="systems" role="tabpanel" aria-labelledby="systems-tab">
                            <p class="mt-4 text-muted">We support direct automation pipelines across Microsoft 365, Google Workspace, Zapier, Make, Salesforce, QuickBooks, SAP, and custom REST/GraphQL APIs.</p>
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
                        <span class="dot"></span> WORKFLOW INSIGHTS
                    </div>
                    <h2 class="ai-blog-title">Latest From Our Process Automation Blog</h2>
                </div>

                <!-- Blog Grid -->
                <div class="ai-blog-grid">
                    <!-- Blog Card 1 -->
                    <div class="ai-blog-card">
                        <div class="blog-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&q=80&w=800"
                                alt="Workflow Discovery">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="meta-item"><i class="bi bi-person"></i> By Workflow Architect</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-calendar3"></i> 20 Mar, 2024</span>
                            </div>
                            <h3 class="blog-card-title">How to Identify the Quickest-Win Workflows for Business Automation</h3>
                            <a href="{{ route('contactUs') }}" class="blog-read-more">Read Insights <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <!-- Blog Card 2 -->
                    <div class="ai-blog-card">
                        <div class="blog-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&q=80&w=800"
                                alt="Cross-App Integration">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="meta-item"><i class="bi bi-person"></i> By Systems Engineer</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-calendar3"></i> 24 Mar, 2024</span>
                            </div>
                            <h3 class="blog-card-title">Connecting Your Core Tools: Eliminating the Friction of Manual Copy-Paste</h3>
                            <a href="{{ route('contactUs') }}" class="blog-read-more">Read Insights <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <!-- Blog Card 3 -->
                    <div class="ai-blog-card">
                        <div class="blog-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=800"
                                alt="AI vs Rules Automation">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="meta-item"><i class="bi bi-person"></i> By Process Lead</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-calendar3"></i> 28 Mar, 2024</span>
                            </div>
                            <h3 class="blog-card-title">Rule-Based vs AI-Powered Automation: When Judgment-Based AI is Needed</h3>
                            <a href="{{ route('contactUs') }}" class="blog-read-more">Read Insights <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
