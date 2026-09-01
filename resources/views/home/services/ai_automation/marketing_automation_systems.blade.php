@extends('home.includes.layout')
@section('title', 'Marketing Automation Systems for Growing Businesses | Mounteko')
@section('meta-description',
'AI-powered marketing automation — email, lead nurture, and campaign workflows built and managed by Mounteko.')

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
            <img src="{{ asset('home/assets/homepage/images/ai/robot_left.png') }}" alt="AI Marketing Left"
                class="ai-robot-left">
            <img src="{{ asset('home/assets/homepage/images/ai/robot_right.png') }}" alt="AI Marketing Right"
                class="ai-robot-right">

            <div class="ai-hero-container">
                <div class="ai-welcome-badge">BEHAVIOR-DRIVEN MARKETING ENGINES</div>
                <h1 class="ai-hero-title">Marketing Automation Systems for Growing Businesses</h1>
                <p class="ai-hero-desc">Most marketing teams know exactly what should happen after someone downloads a guide or abandons a cart — they just don't have time to make it happen for every single lead, every time. Mounteko builds marketing automation systems that handle the follow-up, nurture, and segmentation automatically, consistently, for every lead that comes in.</p>

                <div class="ai-pills-row">
                    <span class="ai-pill">Behavior-Triggered Sequences</span>
                    <span class="ai-pill">AI Dynamic Segmentation</span>
                    <span class="ai-pill">Seamless Sales Alignment</span>
                    <span class="ai-pill">Omnichannel Orchestration</span>
                </div>

                <a href="{{ route('contactUs') }}" class="btn-ai-get-started">
                    Build Your Marketing Engine <i><i class="bi bi-arrow-right"></i></i>
                </a>
            </div>
        </section>

        <!-- SECTION 2: EMAIL MARKETING AUTOMATION THAT ACTUALLY NURTURES (6-CARD GRID) -->
        <section class="ai-services-grid-section">
            <div class="ai-services-grid-container">
                <div class="ai-services-header">
                    <div class="ai-tag-red" style="justify-content: center;">
                        <div class="dot"></div>
                        BEHAVIORAL ENGAGEMENT
                    </div>
                    <h2 class="ai-about-title" style="font-size: 38px;">Email Marketing Automation That Actually Nurtures</h2>
                    <p style="color: #94a3b8; max-width: 750px; margin: 15px auto 0; font-size: 15px; line-height: 1.6;">
                        Move beyond generic scheduled email blasts. We engineer responsive, behavior-triggered nurture journeys that engage buyers based on real-time actions — page visits, content downloads, and product interactions.
                    </p>
                </div>

                <div class="ai-services-grid">
                    <!-- Card 01: Behavioral Trigger Sequences -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 20%; left: 80%;"></div>
                        <div class="ai-card-particle" style="top: 60%; left: 90%;"></div>
                        <span class="ai-service-number">01</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-envelope-check-fill"></i>
                        </div>
                        <h3 class="ai-service-title">Behavioral Trigger Sequences</h3>
                        <p class="ai-service-desc">Automated multi-touch journeys triggered when prospects download a guide, register for webinars, or visit high-intent pricing pages.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 02: Cart & Browse Recovery -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 15%; left: 75%;"></div>
                        <div class="ai-card-particle" style="top: 55%; left: 85%;"></div>
                        <span class="ai-service-number">02</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-cart-x-fill"></i>
                        </div>
                        <h3 class="ai-service-title">Cart & Browse Recovery</h3>
                        <p class="ai-service-desc">Intelligent recovery flows that re-engage high-intent shoppers with dynamic product recommendations, inventory alerts, and tailored incentives.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 03: Lead Scoring & Lifecycle Transitions -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 25%; left: 70%;"></div>
                        <div class="ai-card-particle" style="top: 65%; left: 95%;"></div>
                        <span class="ai-service-number">03</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h3 class="ai-service-title">Lead Scoring & Lifecycle Handoffs</h3>
                        <p class="ai-service-desc">Real-time engagement scoring that transitions leads automatically from cold subscribers to Marketing Qualified (MQL) and Sales Qualified (SQL).</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 04: Dynamic Content Personalization -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 10%; left: 85%;"></div>
                        <div class="ai-card-particle" style="top: 50%; left: 75%;"></div>
                        <span class="ai-service-number">04</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-magic"></i>
                        </div>
                        <h3 class="ai-service-title">Dynamic Content Blocks</h3>
                        <p class="ai-service-desc">Emails that automatically swap headlines, case studies, and offers to match each recipient's specific industry, role, and company size.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 05: Automated Re-Engagement Flows -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 30%; left: 90%;"></div>
                        <div class="ai-card-particle" style="top: 70%; left: 80%;"></div>
                        <span class="ai-service-number">05</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-arrow-repeat"></i>
                        </div>
                        <h3 class="ai-service-title">Automated Re-Engagement</h3>
                        <p class="ai-service-desc">Win-back sequences that detect cooling engagement and deploy targeted content or exclusive promotions to reactivate dormant contacts.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 06: Deliverability & Inbox Placement -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 20%; left: 75%;"></div>
                        <div class="ai-card-particle" style="top: 60%; left: 85%;"></div>
                        <span class="ai-service-number">06</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-shield-lock-fill"></i>
                        </div>
                        <h3 class="ai-service-title">Deliverability Optimization</h3>
                        <p class="ai-service-desc">Automated list hygiene, bounce protection, and domain warm-up strategies ensuring your messages land in the primary inbox, never spam.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: AI-POWERED SEGMENTATION AND PERSONALIZATION -->
        <section class="ai-about-section">
            <div class="ai-about-container">
                <div class="ai-about-visual">
                    <div class="ai-main-img-wrap">
                        <img src="{{ asset('home/assets/homepage/images/ai/ai_face_digital.png') }}" alt="AI Marketing Segmentation">
                    </div>
                    <div class="ai-floating-card">
                        <div class="ai-card-icon">
                            <img src="{{ asset('home/assets/homepage/images/ai/ai_data_node.png') }}" alt="Dynamic Segments">
                        </div>
                        <div class="ai-card-text">
                            <strong>100%</strong>
                            <span>Real-Time Behavioral Targeting</span>
                        </div>
                    </div>
                </div>

                <div class="ai-about-content">
                    <div class="ai-tag-red">
                        <div class="dot"></div>
                        HYPER-TARGETING AT SCALE
                    </div>
                    <h2 class="ai-about-title">AI-Powered Segmentation and Personalization</h2>
                    <p class="ai-about-desc">
                        Manually maintaining static email lists is slow, inaccurate, and impossible to scale. Mounteko deploys AI segmentation engines that dynamically group contacts in real time based on live browsing behavior, past purchase history, content affinity, and engagement velocity. Your marketing campaigns adapt automatically, delivering hyper-relevant messaging to thousands of prospects simultaneously.
                    </p>

                    <div class="ai-feature-row">
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-pie-chart-fill"></i></div>
                            <div class="ai-feat-text">Self-Updating<br>Segments</div>
                        </div>
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-clock-history"></i></div>
                            <div class="ai-feat-text">Send-Time<br>Optimization</div>
                        </div>
                    </div>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Dynamic Audience Clustering:</strong> Groups contacts by real-time intent signals rather than outdated static tags.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Predictive Send-Time Intelligence:</strong> Dispatches messages at the exact hour each individual contact is most likely to open.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Cross-Channel Consistency:</strong> Synchronizes audience segments across email, SMS, and ad retargeting platforms.</li>
                    </ul>

                    <div>
                        <a href="{{ route('contactUs') }}" class="btn-ai-red">Scale Your Personalization <i
                                class="bi bi-arrow-right"></i></a>
                    </div>

                    <img src="{{ asset('home/assets/homepage/images/ai/cute_robot_side.png') }}" alt="AI Assistant"
                        class="ai-side-robot-new">
                </div>
            </div>
        </section>

        <!-- SECTION 4: CONNECTED TO SALES, NOT A SEPARATE SILO -->
        <section class="ai-transform-section">
            <div class="ai-transform-container">
                <div class="ai-transform-visual">
                    <div class="ai-main-img-transform">
                        <img src="{{ asset('home/assets/homepage/images/ai/robot_hand_touch_new.png') }}"
                            alt="Marketing and Sales Alignment">
                    </div>
                    <div class="ai-transform-overlay">
                        <img src="{{ asset('home/assets/homepage/images/ai/robot_profile_overlay_new.png') }}"
                            alt="Unified Pipeline">
                    </div>
                </div>

                <div class="ai-transform-content">
                    <div class="ai-tag-red">
                        <div class="dot"></div>
                        UNIFIED REVENUE PIPELINE
                    </div>
                    <h2 class="ai-about-title">Connected to Sales, Not a Separate Silo</h2>
                    <p class="ai-about-desc">
                        When marketing automation lives in a separate silo from your sales CRM, hot leads get neglected, reps lack context, and attribution disappears. Mounteko bridges marketing workflows directly into your sales systems (Salesforce, HubSpot, Zoho, Pipedrive). The moment a prospect crosses a qualification threshold, the system enriches the contact, notifies the designated rep, and triggers automated sales follow-up.
                    </p>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Instant MQL-to-SQL Handoffs:</strong> Account executives receive real-time Slack and CRM alerts when leads show high buying intent.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Complete Engagement History:</strong> Reps see every email opened, webpage visited, and guide downloaded before discovery calls.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Closed-Loop Attribution:</strong> Measure which campaigns generate actual closed-won revenue, not just vanity clicks.</li>
                    </ul>

                    <a href="{{ route('contactUs') }}" class="btn-ai-gradient">Connect Marketing to Sales <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <!-- Decorative Reaching Hand -->
            <img src="{{ asset('home/assets/homepage/images/ai/robot_hand_clean.png') }}" alt="Robot Hand Support"
                class="ai-reaching-hand-clean">
        </section>

        <!-- SECTION 5: CONSUMER GOODS & DTC INDUSTRY SPOTLIGHT -->
        <section class="ai-experience-section">
            <div class="ai-experience-container">
                <!-- Left Visual Composition -->
                <div class="ai-visual-composition">
                    <div class="ai-main-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&q=80&w=800"
                            alt="DTC and Consumer Goods Marketing Automation" class="ai-exp-main-img">

                        <!-- Floating Glass Badge -->
                        <div class="ai-glass-badge-exp">
                            <div class="badge-icon">
                                <i class="bi bi-bag-check-fill"></i>
                            </div>
                            <div class="badge-text">
                                <span class="badge-title">Modular DTC Engine</span>
                                <span class="badge-sub">Rapid Seasonal Drops</span>
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
                    <h2 class="ai-exp-title">Consumer Goods & DTC: Agile Seasonal Campaigns at Scale</h2>
                    <p class="ai-exp-desc">
                        For fast-growing Direct-to-Consumer (DTC) brands running frequent product drops, flash sales, and seasonal promotions (Black Friday, Summer Launch, Holiday Gift Guides), manually rebuilding campaigns from scratch drains creative resources.
                    </p>
                    <p class="ai-exp-desc">
                        Mounteko designs modular, automated campaign frameworks that dynamically update product catalogs, discounts, and customer segments based on real-time inventory levels and past purchase categories. DTC brands scale revenue and launch multi-channel campaigns in minutes instead of weeks.
                    </p>

                    <div class="ai-exp-checklist">
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Dynamic Product & Inventory Feeds
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Automated VIP Customer Early-Access
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Post-Purchase Replenishment Triggers
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Zero Re-Building of Core Workflows
                        </div>
                    </div>

                    <a href="{{ route('contactUs') }}" class="btn-ai-purple">
                        Scale Your DTC Marketing <i class="bi bi-arrow-right"></i>
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
                        <h2 class="ai-card-title">Ready to Automate Your Marketing Funnel?</h2>
                        <p class="ai-card-desc">Tell us about your current marketing stack and nurture challenges, and our growth architects will map out an automated customer journey.</p>

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
                                <textarea name="message" placeholder="Describe your current email tools, marketing challenges, and lead volume..." rows="3" required></textarea>
                            </div>

                            <div class="ai-form-footer">
                                <div class="support-person">
                                    <img src="https://ui-avatars.com/api/?name=Growth+Architect&background=00ffcc&color=030d0a"
                                        alt="Growth Architect">
                                    <div class="support-info">
                                        <h4>Senior Marketing Automation Architect</h4>
                                        <p>Growth Strategy Team</p>
                                    </div>
                                </div>
                                <button type="submit" class="btn-ai-red">Request Strategy Audit <i
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
                    <h2 class="ai-faq-title">Marketing Automation FAQs</h2>
                    <p class="ai-faq-desc">Answers to common questions about setting up intelligent nurture and segmentation systems.
                    </p>

                    <!-- Tabs -->
                    <ul class="nav nav-tabs ai-custom-tabs" id="aiFaqTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general"
                                type="button" role="tab" aria-controls="general" aria-selected="true">General</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="platforms-tab" data-bs-toggle="tab" data-bs-target="#platforms"
                                type="button" role="tab" aria-controls="platforms" aria-selected="false">Platforms</button>
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
                                            How does behavioral automation improve email conversion rates?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Behavioral triggers send emails at the exact moment of highest user intent (e.g. immediately after browsing a specific product or reading a case study), generating up to 3x higher open and click rates compared to static scheduled blasts.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Which marketing automation platforms do you build on?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            We build and manage systems across HubSpot, Klaviyo, ActiveCampaign, Marketo, Salesforce Marketing Cloud, Customer.io, and custom webhook-based marketing stacks.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            How do you ensure our marketing emails don't hit the spam folder?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            We configure strict authentication protocols (DKIM, SPF, DMARC), implement automated unengaged subscriber sunsetting, and conduct gradual IP warm-up to ensure top-tier sender reputation.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="platforms" role="tabpanel" aria-labelledby="platforms-tab">
                            <p class="mt-4 text-muted">All marketing automation workflows integrate bi-directionally with your CRM, e-commerce backend (Shopify, WooCommerce, Magento), and analytics platforms.</p>
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
                        <span class="dot"></span> MARKETING INSIGHTS
                    </div>
                    <h2 class="ai-blog-title">Latest From Our Marketing Automation Blog</h2>
                </div>

                <!-- Blog Grid -->
                <div class="ai-blog-grid">
                    <!-- Blog Card 1 -->
                    <div class="ai-blog-card">
                        <div class="blog-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&q=80&w=800"
                                alt="Behavioral Nurture">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="meta-item"><i class="bi bi-person"></i> By Growth Lead</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-calendar3"></i> 20 Mar, 2024</span>
                            </div>
                            <h3 class="blog-card-title">Why Behavior-Triggered Emails Outperform Generic Scheduled Blasts</h3>
                            <a href="{{ route('contactUs') }}" class="blog-read-more">Read Insights <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <!-- Blog Card 2 -->
                    <div class="ai-blog-card">
                        <div class="blog-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&q=80&w=800"
                                alt="AI Segmentation">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="meta-item"><i class="bi bi-person"></i> By Data Strategist</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-calendar3"></i> 24 Mar, 2024</span>
                            </div>
                            <h3 class="blog-card-title">How AI-Driven Dynamic Segmentation Eliminates Static Email Lists</h3>
                            <a href="{{ route('contactUs') }}" class="blog-read-more">Read Insights <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <!-- Blog Card 3 -->
                    <div class="ai-blog-card">
                        <div class="blog-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&q=80&w=800"
                                alt="DTC Marketing Architecture">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="meta-item"><i class="bi bi-person"></i> By DTC Specialist</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-calendar3"></i> 28 Mar, 2024</span>
                            </div>
                            <h3 class="blog-card-title">Scaling Seasonal DTC Campaigns with Modular Automated Frameworks</h3>
                            <a href="{{ route('contactUs') }}" class="blog-read-more">Read Insights <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
