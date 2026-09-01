@extends('home.includes.layout')
@section('title', 'System Integration & Data Automation Services | Mounteko')
@section('meta-description',
"Connect your tools and automate the data flow between them — system integration built by Mounteko's automation team.")

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
            <img src="{{ asset('home/assets/homepage/images/ai/robot_left.png') }}" alt="AI Integration Left"
                class="ai-robot-left">
            <img src="{{ asset('home/assets/homepage/images/ai/robot_right.png') }}" alt="AI Integration Right"
                class="ai-robot-right">

            <div class="ai-hero-container">
                <div class="ai-welcome-badge">UNIFIED DATA PIPELINES</div>
                <h1 class="ai-hero-title">System Integration & Data Automation Services</h1>
                <p class="ai-hero-desc">Data that lives in five different systems isn't really useful in any of them — someone still has to pull it together manually before it means anything. Mounteko integrates your business systems and automates the data flow between them, so information updates everywhere it needs to, automatically.</p>

                <div class="ai-pills-row">
                    <span class="ai-pill">Zero Platform Migration Required</span>
                    <span class="ai-pill">Real-Time & Scheduled Sync</span>
                    <span class="ai-pill">Resilient Schema-Proof Pipelines</span>
                    <span class="ai-pill">Bi-Directional Middleware</span>
                </div>

                <a href="{{ route('contactUs') }}" class="btn-ai-get-started">
                    Connect Your Business Systems <i><i class="bi bi-arrow-right"></i></i>
                </a>
            </div>
        </section>

        <!-- SECTION 2: DATA AUTOMATION THAT KEEPS EVERYTHING IN SYNC (6-CARD GRID) -->
        <section class="ai-services-grid-section">
            <div class="ai-services-grid-container">
                <div class="ai-services-header">
                    <div class="ai-tag-red" style="justify-content: center;">
                        <div class="dot"></div>
                        REAL-TIME SYNCHRONIZATION
                    </div>
                    <h2 class="ai-about-title" style="font-size: 38px;">Data Automation That Keeps Everything in Sync</h2>
                    <p style="color: #94a3b8; max-width: 750px; margin: 15px auto 0; font-size: 15px; line-height: 1.6;">
                        True integration isn't a one-time connection — it's an always-on data pipeline that keeps records accurate across all your core business platforms in real time or on precision schedules.
                    </p>
                </div>

                <div class="ai-services-grid">
                    <!-- Card 01: Real-Time Webhook Pipelines -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 20%; left: 80%;"></div>
                        <div class="ai-card-particle" style="top: 60%; left: 90%;"></div>
                        <span class="ai-service-number">01</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-lightning-charge-fill"></i>
                        </div>
                        <h3 class="ai-service-title">Real-Time Webhook Pipelines</h3>
                        <p class="ai-service-desc">Instantaneous record creation and field updates triggered the exact second a transaction, lead status change, or support ticket occurs.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 02: Scheduled Batch ETL Jobs -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 15%; left: 75%;"></div>
                        <div class="ai-card-particle" style="top: 55%; left: 85%;"></div>
                        <span class="ai-service-number">02</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <h3 class="ai-service-title">Scheduled Batch ETL Jobs</h3>
                        <p class="ai-service-desc">High-volume data transformation, nightly financial ledger reconciliation, and off-peak bulk data transfers with zero daytime performance lag.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 03: Bi-Directional Synchronization -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 25%; left: 70%;"></div>
                        <div class="ai-card-particle" style="top: 65%; left: 95%;"></div>
                        <span class="ai-service-number">03</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-arrow-left-right"></i>
                        </div>
                        <h3 class="ai-service-title">Bi-Directional Synchronization</h3>
                        <p class="ai-service-desc">Two-way sync with smart conflict resolution, ensuring updates made in your CRM or ERP mirror accurately across all connected endpoints.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 04: Data Cleansing & Validation -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 10%; left: 85%;"></div>
                        <div class="ai-card-particle" style="top: 50%; left: 75%;"></div>
                        <span class="ai-service-number">04</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h3 class="ai-service-title">In-Flight Data Cleansing</h3>
                        <p class="ai-service-desc">Automated deduplication, format normalization, and schema validation that scrubs data clean before writing into destination databases.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 05: Legacy Database Connectors -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 30%; left: 90%;"></div>
                        <div class="ai-card-particle" style="top: 70%; left: 80%;"></div>
                        <span class="ai-service-number">05</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-database-gear"></i>
                        </div>
                        <h3 class="ai-service-title">Legacy Database Bridges</h3>
                        <p class="ai-service-desc">Custom REST and GraphQL middleware connecting modern cloud SaaS tools to on-premise SQL servers, AS400, and proprietary backends.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 06: API Rate Limit & Queue Telemetry -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 20%; left: 75%;"></div>
                        <div class="ai-card-particle" style="top: 60%; left: 85%;"></div>
                        <span class="ai-service-number">06</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-speedometer2"></i>
                        </div>
                        <h3 class="ai-service-title">Centralized Queue Telemetry</h3>
                        <p class="ai-service-desc">Live dashboards tracking API rate limits, payload throughput, queue health, and instant alerting on any dropped payloads.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: CONNECTING THE SYSTEMS YOUR BUSINESS ALREADY RUNS ON -->
        <section class="ai-about-section">
            <div class="ai-about-container">
                <div class="ai-about-visual">
                    <div class="ai-main-img-wrap">
                        <img src="{{ asset('home/assets/homepage/images/ai/ai_face_digital.png') }}" alt="System Integration Middleware">
                    </div>
                    <div class="ai-floating-card">
                        <div class="ai-card-icon">
                            <img src="{{ asset('home/assets/homepage/images/ai/ai_data_node.png') }}" alt="Connected Platforms">
                        </div>
                        <div class="ai-card-text">
                            <strong>Zero</strong>
                            <span>Platform Migration Required</span>
                        </div>
                    </div>
                </div>

                <div class="ai-about-content">
                    <div class="ai-tag-red">
                        <div class="dot"></div>
                        ZERO PLATFORM DISRUPTION
                    </div>
                    <h2 class="ai-about-title">Connecting the Systems Your Business Already Runs On</h2>
                    <p class="ai-about-desc">
                        You don't need to rip out your existing software or undergo an expensive, high-risk platform migration to fix broken data flows. Mounteko builds secure, middleware connectors directly between the tools your team already relies on every day — including Salesforce, HubSpot, NetSuite, SAP, QuickBooks, Shopify, Microsoft Dynamics, Slack, and custom in-house databases. Your systems communicate automatically behind the scenes with zero disruption to daily workflows.
                    </p>

                    <div class="ai-feature-row">
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-plug-fill"></i></div>
                            <div class="ai-feat-text">Native Middleware<br>Bridges</div>
                        </div>
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-shield-lock-fill"></i></div>
                            <div class="ai-feat-text">Enterprise Data<br>Encryption</div>
                        </div>
                    </div>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Works With Your Existing Stack:</strong> Syncs CRM, ERP, e-commerce, and accounting platforms seamlessly.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Zero Costly Software Replacements:</strong> Maximize ROI on current tools without retraining staff on new platforms.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Custom Business Logic Handling:</strong> Tailors data transformation rules to match your unique operational processes.</li>
                    </ul>

                    <div>
                        <a href="{{ route('contactUs') }}" class="btn-ai-red">Discuss Your Integration Architecture <i
                                class="bi bi-arrow-right"></i></a>
                    </div>

                    <img src="{{ asset('home/assets/homepage/images/ai/cute_robot_side.png') }}" alt="AI Assistant"
                        class="ai-side-robot-new">
                </div>
            </div>
        </section>

        <!-- SECTION 4: ENTERPRISE-SCALE INTEGRATION, BUILT TO LAST -->
        <section class="ai-transform-section">
            <div class="ai-transform-container">
                <div class="ai-transform-visual">
                    <div class="ai-main-img-transform">
                        <img src="{{ asset('home/assets/homepage/images/ai/robot_hand_touch_new.png') }}"
                            alt="Resilient Data Architecture">
                    </div>
                    <div class="ai-transform-overlay">
                        <img src="{{ asset('home/assets/homepage/images/ai/robot_profile_overlay_new.png') }}"
                            alt="Enterprise Data Sync">
                    </div>
                </div>

                <div class="ai-transform-content">
                    <div class="ai-tag-red">
                        <div class="dot"></div>
                        RESILIENT ARCHITECTURE
                    </div>
                    <h2 class="ai-about-title">Enterprise-Scale Integration, Built to Last</h2>
                    <p class="ai-about-desc">
                        Nothing is more frustrating than an amateur integration script that crashes every time a vendor updates their API or a user inputs an unexpected special character. Mounteko engineers robust, enterprise-grade integration architecture built with automated retry logic, exponential backoff, dead-letter queues, and schema change alerts — ensuring your data flows continue running smoothly year after year without breaking.
                    </p>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Automated Failover & Retries:</strong> Transient network errors or vendor API rate limits never drop critical business transactions.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Dead-Letter Queue Buffering:</strong> Failed payloads are safely isolated and logged with one-click re-processing tools.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>API Versioning Resilience:</strong> Built on versioned endpoints with proactive monitoring for API deprecation notices.</li>
                    </ul>

                    <a href="{{ route('contactUs') }}" class="btn-ai-gradient">Build Resilient Data Pipelines <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <!-- Decorative Reaching Hand -->
            <img src="{{ asset('home/assets/homepage/images/ai/robot_hand_clean.png') }}" alt="Robot Hand Support"
                class="ai-reaching-hand-clean">
        </section>

        <!-- SECTION 5: AUTOMOTIVE INDUSTRY SPOTLIGHT -->
        <section class="ai-experience-section">
            <div class="ai-experience-container">
                <!-- Left Visual Composition -->
                <div class="ai-visual-composition">
                    <div class="ai-main-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?auto=format&fit=crop&q=80&w=800"
                            alt="Automotive Inventory Data Integration" class="ai-exp-main-img">

                        <!-- Floating Glass Badge -->
                        <div class="ai-glass-badge-exp">
                            <div class="badge-icon">
                                <i class="bi bi-car-front-fill"></i>
                            </div>
                            <div class="badge-text">
                                <span class="badge-title">Real-Time Sync</span>
                                <span class="badge-sub">DMS & Listing Portals</span>
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
                    <h2 class="ai-exp-title">Automotive: Real-Time Vehicle Inventory Sync Across All Channels</h2>
                    <p class="ai-exp-desc">
                        For automotive dealer groups, managing vehicle inventory across disconnected platforms is an operational nightmare. A car sold on the showroom lot takes hours to manually remove from the dealer website, CRM, Dealer Management System (DMS), AutoTrader, and Cars.com — resulting in customer frustration and wasted ad spend.
                    </p>
                    <p class="ai-exp-desc">
                        Mounteko builds real-time automated data integration pipelines between the dealership DMS, website inventory feeds, and third-party syndication channels. When a vehicle is acquired, repriced, or marked sold in the DMS, updates propagate across all listing portals within minutes, ensuring 100% price consistency and zero manual data duplication.
                    </p>

                    <div class="ai-exp-checklist">
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            DMS-to-Web Real-Time Inventory Sync
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Automated Sold Vehicle De-Listing
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            100% Price Consistency Across Channels
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Zero Manual Re-Entry in Listing Portals
                        </div>
                    </div>

                    <a href="{{ route('contactUs') }}" class="btn-ai-purple">
                        Synchronize Your Inventory Feeds <i class="bi bi-arrow-right"></i>
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
                        <h2 class="ai-card-title">Ready to Connect Your Disconnected Systems?</h2>
                        <p class="ai-card-desc">Tell us which software platforms and databases you need to integrate, and our data architects will design a secure, automated data pipeline.</p>

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
                                <textarea name="message" placeholder="Describe the software systems and data flows you want to synchronize..." rows="3" required></textarea>
                            </div>

                            <div class="ai-form-footer">
                                <div class="support-person">
                                    <img src="https://ui-avatars.com/api/?name=Integration+Architect&background=00ffcc&color=030d0a"
                                        alt="Integration Architect">
                                    <div class="support-info">
                                        <h4>Senior Data Integration Architect</h4>
                                        <p>Enterprise Pipelines Team</p>
                                    </div>
                                </div>
                                <button type="submit" class="btn-ai-red">Request Integration Blueprint <i
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
                    <h2 class="ai-faq-title">System Integration FAQs</h2>
                    <p class="ai-faq-desc">Answers to common questions about syncing data across legacy and modern cloud software.
                    </p>

                    <!-- Tabs -->
                    <ul class="nav nav-tabs ai-custom-tabs" id="aiFaqTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general"
                                type="button" role="tab" aria-controls="general" aria-selected="true">General</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#security"
                                type="button" role="tab" aria-controls="security" aria-selected="false">Security & Uptime</button>
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
                                            How do you handle integrations when an app has strict API rate limits?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            We design intelligent queuing and caching middleware with rate-limit throttling and exponential backoff, ensuring high-volume sync operations never breach API thresholds.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Can you sync data with proprietary on-premise ERPs?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Yes. We build lightweight, secure agent middleware and direct ODBC/SQL connectors that bridge on-premise ERPs with cloud applications through encrypted tunnels.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            What happens when a software vendor updates their API?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Our managed integration services monitor vendor API change logs and test version migrations proactively in staging environments so your production pipelines never break.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                            <p class="mt-4 text-muted">All data in transit is encrypted using TLS 1.3, with zero persistent storage of sensitive credentials in middleware layers.</p>
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
                        <span class="dot"></span> INTEGRATION INSIGHTS
                    </div>
                    <h2 class="ai-blog-title">Latest From Our Data Integration Blog</h2>
                </div>

                <!-- Blog Grid -->
                <div class="ai-blog-grid">
                    <!-- Blog Card 1 -->
                    <div class="ai-blog-card">
                        <div class="blog-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&q=80&w=800"
                                alt="Data Synchronization">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="meta-item"><i class="bi bi-person"></i> By Data Lead</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-calendar3"></i> 20 Mar, 2024</span>
                            </div>
                            <h3 class="blog-card-title">Real-Time Webhooks vs Scheduled Batch ETL: Choosing the Right Sync Model</h3>
                            <a href="{{ route('contactUs') }}" class="blog-read-more">Read Insights <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <!-- Blog Card 2 -->
                    <div class="ai-blog-card">
                        <div class="blog-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&q=80&w=800"
                                alt="Resilient Integrations">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="meta-item"><i class="bi bi-person"></i> By Systems Architect</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-calendar3"></i> 24 Mar, 2024</span>
                            </div>
                            <h3 class="blog-card-title">Why Custom Integration Scripts Break (And How to Build Schema-Proof Pipelines)</h3>
                            <a href="{{ route('contactUs') }}" class="blog-read-more">Read Insights <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <!-- Blog Card 3 -->
                    <div class="ai-blog-card">
                        <div class="blog-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?auto=format&fit=crop&q=80&w=800"
                                alt="Automotive Data Feeds">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="meta-item"><i class="bi bi-person"></i> By Auto Tech Specialist</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-calendar3"></i> 28 Mar, 2024</span>
                            </div>
                            <h3 class="blog-card-title">Case Study: Eliminating Inventory Lag Across 15+ Dealership Listing Portals</h3>
                            <a href="{{ route('contactUs') }}" class="blog-read-more">Read Insights <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
