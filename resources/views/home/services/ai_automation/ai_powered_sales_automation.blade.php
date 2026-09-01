@extends('home.includes.layout')
@section('title', 'AI-Powered Sales Automation Services | Mounteko')
@section('meta-description',
'AI sales automation that qualifies leads and fills your pipeline automatically — built and managed by Mounteko.')

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
            <img src="{{ asset('home/assets/homepage/images/ai/robot_left.png') }}" alt="AI Sales Automation Left"
                class="ai-robot-left">
            <img src="{{ asset('home/assets/homepage/images/ai/robot_right.png') }}" alt="AI Sales Automation Right"
                class="ai-robot-right">

            <div class="ai-hero-container">
                <div class="ai-welcome-badge">AI SALES ACCELERATION</div>
                <h1 class="ai-hero-title">AI-Powered Sales Automation Services</h1>
                <p class="ai-hero-desc">Sales teams lose deals to slow follow-up more often than to a better competitor — a lead goes cold simply because nobody reached out fast enough. Mounteko builds AI-powered sales automation that qualifies leads, triggers timely follow-up, and keeps your CRM updated automatically, so no opportunity slips through because someone forgot.</p>

                <div class="ai-pills-row">
                    <span class="ai-pill">Sub-Minute Response Triggers</span>
                    <span class="ai-pill">Automated CRM Hygiene</span>
                    <span class="ai-pill">Custom Sales Cadences</span>
                    <span class="ai-pill">Real-Time Intent Scoring</span>
                </div>

                <a href="{{ route('contactUs') }}" class="btn-ai-get-started">
                    Accelerate Your Sales Pipeline <i><i class="bi bi-arrow-right"></i></i>
                </a>
            </div>
        </section>

        <!-- SECTION 2: AI LEAD QUALIFICATION AND FOLLOW-UP (6-CARD GRID) -->
        <section class="ai-services-grid-section">
            <div class="ai-services-grid-container">
                <div class="ai-services-header">
                    <div class="ai-tag-red" style="justify-content: center;">
                        <div class="dot"></div>
                        HIGH-VELOCITY PIPELINE
                    </div>
                    <h2 class="ai-about-title" style="font-size: 38px;">AI Lead Qualification and Follow-Up</h2>
                    <p style="color: #94a3b8; max-width: 750px; margin: 15px auto 0; font-size: 15px; line-height: 1.6;">
                        Speed to lead is everything. Our AI sales automation doesn't just collect data — it instantly scores buyer intent, triggers personalized multi-touch follow-up, and routes sales-ready leads to your closers within seconds.
                    </p>
                </div>

                <div class="ai-services-grid">
                    <!-- Card 01: Sub-Minute Response Triggers -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 20%; left: 80%;"></div>
                        <div class="ai-card-particle" style="top: 60%; left: 90%;"></div>
                        <span class="ai-service-number">01</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-lightning-charge-fill"></i>
                        </div>
                        <h3 class="ai-service-title">Sub-Minute Response Triggers</h3>
                        <p class="ai-service-desc">Inbound form submissions and inquiries trigger instant, personalized AI responses and calendar scheduling before prospects leave your site.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 02: Multi-Factor Intent Scoring -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 15%; left: 75%;"></div>
                        <div class="ai-card-particle" style="top: 55%; left: 85%;"></div>
                        <span class="ai-service-number">02</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <h3 class="ai-service-title">Multi-Factor Intent Scoring</h3>
                        <p class="ai-service-desc">AI evaluates company size, engagement frequency, web browsing behavior, and buyer intent signals to prioritize hot prospects for closers.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 03: Dynamic Multi-Channel Cadences -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 25%; left: 70%;"></div>
                        <div class="ai-card-particle" style="top: 65%; left: 95%;"></div>
                        <span class="ai-service-number">03</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-envelope-paper-heart-fill"></i>
                        </div>
                        <h3 class="ai-service-title">Dynamic Multi-Channel Cadences</h3>
                        <p class="ai-service-desc">Personalized email, SMS, and WhatsApp sequences that automatically adapt messaging based on prospect opens, replies, and time zones.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 04: Intelligent Inbound Routing -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 10%; left: 85%;"></div>
                        <div class="ai-card-particle" style="top: 50%; left: 75%;"></div>
                        <span class="ai-service-number">04</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-shuffle"></i>
                        </div>
                        <h3 class="ai-service-title">Intelligent Inbound Routing</h3>
                        <p class="ai-service-desc">Directing enterprise deals to senior account executives and SMB inquiries to inside reps based on territory, deal size, and calendar availability.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 05: Re-Engagement of Stalled Leads -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 30%; left: 90%;"></div>
                        <div class="ai-card-particle" style="top: 70%; left: 80%;"></div>
                        <span class="ai-service-number">05</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-arrow-repeat"></i>
                        </div>
                        <h3 class="ai-service-title">Stalled Pipeline Re-Activation</h3>
                        <p class="ai-service-desc">Autonomous nurture flows that detect when cold or lost opportunities re-engage with your content, alerting reps to re-open active conversations.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 06: Real-Time Meeting Orchestration -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 20%; left: 75%;"></div>
                        <div class="ai-card-particle" style="top: 60%; left: 85%;"></div>
                        <span class="ai-service-number">06</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-calendar2-check-fill"></i>
                        </div>
                        <h3 class="ai-service-title">Meeting Orchestration</h3>
                        <p class="ai-service-desc">Conversational scheduling agents that qualify buyers and place booked demos directly into rep calendars with zero scheduling friction.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: CRM AUTOMATION THAT KEEPS DATA CLEAN -->
        <section class="ai-about-section">
            <div class="ai-about-container">
                <div class="ai-about-visual">
                    <div class="ai-main-img-wrap">
                        <img src="{{ asset('home/assets/homepage/images/ai/ai_face_digital.png') }}" alt="Automated CRM Hygiene">
                    </div>
                    <div class="ai-floating-card">
                        <div class="ai-card-icon">
                            <img src="{{ asset('home/assets/homepage/images/ai/ai_data_node.png') }}" alt="Clean CRM Data">
                        </div>
                        <div class="ai-card-text">
                            <strong>100%</strong>
                            <span>Automated CRM Data Cleanliness</span>
                        </div>
                    </div>
                </div>

                <div class="ai-about-content">
                    <div class="ai-tag-red">
                        <div class="dot"></div>
                        ZERO MANUAL DATA ENTRY
                    </div>
                    <h2 class="ai-about-title">CRM Automation That Keeps Data Clean</h2>
                    <p class="ai-about-desc">
                        Sales reps spend up to 30% of their day on administrative busywork — logging calls, updating deal stages, and copying contact details into CRMs. When reps rush, CRM records get stale, forecasts break down, and follow-ups get dropped. Mounteko eliminates manual data entry with background AI automation that captures every email, call note, meeting outcome, and contact update automatically in real time.
                    </p>

                    <div class="ai-feature-row">
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-database-check"></i></div>
                            <div class="ai-feat-text">Auto-Sync<br>Activity</div>
                        </div>
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-graph-up"></i></div>
                            <div class="ai-feat-text">Reliable<br>Forecasting</div>
                        </div>
                    </div>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Automatic Touchpoint Logging:</strong> Syncs emails, calls, transcripts, and calendar events directly to deal records.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>AI Meeting Summaries & Next Steps:</strong> Automatically extracts action items and objections from sales calls.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Enriched Buyer Intelligence:</strong> Enriches contact records with verified job titles, company size, and tech stack insights.</li>
                    </ul>

                    <div>
                        <a href="{{ route('contactUs') }}" class="btn-ai-red">Clean Up Your CRM Data <i
                                class="bi bi-arrow-right"></i></a>
                    </div>

                    <img src="{{ asset('home/assets/homepage/images/ai/cute_robot_side.png') }}" alt="AI Assistant"
                        class="ai-side-robot-new">
                </div>
            </div>
        </section>

        <!-- SECTION 4: BUILT AROUND YOUR SALES PROCESS, NOT A GENERIC FUNNEL -->
        <section class="ai-transform-section">
            <div class="ai-transform-container">
                <div class="ai-transform-visual">
                    <div class="ai-main-img-transform">
                        <img src="{{ asset('home/assets/homepage/images/ai/robot_hand_touch_new.png') }}"
                            alt="Custom Sales Architecture">
                    </div>
                    <div class="ai-transform-overlay">
                        <img src="{{ asset('home/assets/homepage/images/ai/robot_profile_overlay_new.png') }}"
                            alt="Tailored Sales Flow">
                    </div>
                </div>

                <div class="ai-transform-content">
                    <div class="ai-tag-red">
                        <div class="dot"></div>
                        BESPOKE CONFIGURATION
                    </div>
                    <h2 class="ai-about-title">Built Around Your Sales Process, Not a Generic Funnel</h2>
                    <p class="ai-about-desc">
                        Off-the-shelf sales automation software forces your team into rigid, cookie-cutter funnels that confuse prospects and frustrate top performers. Mounteko architects custom AI sales automations specifically configured around your unique buyer journey, deal velocity, qualification criteria, and sales methodology (MEDDIC, BANT, or consultative).
                    </p>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Custom Qualification Logic:</strong> Filter and score prospects by your exact budget, timeline, and decision-maker criteria.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Sales Methodology Alignment:</strong> Workflows mapped directly to your internal deal stages and approval gates.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Contextual Rep Handoffs:</strong> Reps receive executive briefing notes and intent signals before hopping on discovery calls.</li>
                    </ul>

                    <a href="{{ route('contactUs') }}" class="btn-ai-gradient">Build Your Custom Sales Workflow <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <!-- Decorative Reaching Hand -->
            <img src="{{ asset('home/assets/homepage/images/ai/robot_hand_clean.png') }}" alt="Robot Hand Support"
                class="ai-reaching-hand-clean">
        </section>

        <!-- SECTION 5: AUTOMOTIVE DEALERSHIP INDUSTRY SPOTLIGHT -->
        <section class="ai-experience-section">
            <div class="ai-experience-container">
                <!-- Left Visual Composition -->
                <div class="ai-visual-composition">
                    <div class="ai-main-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?auto=format&fit=crop&q=80&w=800"
                            alt="Automotive Dealership Sales Automation" class="ai-exp-main-img">

                        <!-- Floating Glass Badge -->
                        <div class="ai-glass-badge-exp">
                            <div class="badge-icon">
                                <i class="bi bi-speedometer2"></i>
                            </div>
                            <div class="badge-text">
                                <span class="badge-title">60-Sec Speed to Lead</span>
                                <span class="badge-sub">After-Hours Conversion</span>
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
                    <h2 class="ai-exp-title">Automotive Dealerships & Instant After-Hours Lead Capture</h2>
                    <p class="ai-exp-desc">
                        For an automotive dealership, a car shopper submitting an online inquiry at 9 PM on a Sunday won't wait until Monday morning for a call back — by then, they've already browsed three competing lots and submitted inquiries elsewhere.
                    </p>
                    <p class="ai-exp-desc">
                        Mounteko's AI sales automation instantly engages after-hours leads within 60 seconds via SMS and email. It confirms vehicle availability, answers financing questions, provides trade-in estimates, and books a Monday morning test-drive appointment directly into the CRM before competitor dealerships even open their doors.
                    </p>

                    <div class="ai-exp-checklist">
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Instant 60-Second Lead Response
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Automated Trade-In & Inventory Specs
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            After-Hours Test-Drive Booking
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Real-Time CRM & DMS Sync
                        </div>
                    </div>

                    <a href="{{ route('contactUs') }}" class="btn-ai-purple">
                        Capture More Leads Faster <i class="bi bi-arrow-right"></i>
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
                        <h2 class="ai-card-title">Ready to Automate Your Sales Follow-Up?</h2>
                        <p class="ai-card-desc">Tell us about your current sales stack and pipeline bottlenecks, and our sales automation architects will design a custom acceleration plan.</p>

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
                                <textarea name="message" placeholder="Describe your sales process, current CRM, and follow-up challenges..." rows="3" required></textarea>
                            </div>

                            <div class="ai-form-footer">
                                <div class="support-person">
                                    <img src="https://ui-avatars.com/api/?name=Sales+Architect&background=00ffcc&color=030d0a"
                                        alt="Sales Architect">
                                    <div class="support-info">
                                        <h4>Senior Sales Solutions Architect</h4>
                                        <p>Revenue Operations Team</p>
                                    </div>
                                </div>
                                <button type="submit" class="btn-ai-red">Request Consultation <i
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
                    <h2 class="ai-faq-title">Sales Automation FAQs</h2>
                    <p class="ai-faq-desc">Answers to common questions about implementing AI sales workflows with your current team.
                    </p>

                    <!-- Tabs -->
                    <ul class="nav nav-tabs ai-custom-tabs" id="aiFaqTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general"
                                type="button" role="tab" aria-controls="general" aria-selected="true">General</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="crm-tab" data-bs-toggle="tab" data-bs-target="#crm"
                                type="button" role="tab" aria-controls="crm" aria-selected="false">CRM Sync</button>
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
                                            How quickly does the AI respond to inbound leads?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            The system initiates customized multi-channel follow-up within 60 seconds of a form submission, chat message, or inbound email inquiry.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Will AI replace our human sales reps?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            No. AI handles non-selling busywork (data logging, lead scoring, initial cadence outreach, and meeting scheduling) so your reps spend 100% of their time closing qualified buyers.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Which CRMs do you integrate with?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            We build bi-directional integrations for Salesforce, HubSpot, Zoho CRM, Pipedrive, Microsoft Dynamics 365, and custom proprietary databases.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="crm" role="tabpanel" aria-labelledby="crm-tab">
                            <p class="mt-4 text-muted">All CRM activity logs include full message history, call transcripts, sentiment analysis, and next-step timestamps automatically.</p>
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
                        <span class="dot"></span> SALES INSIGHTS
                    </div>
                    <h2 class="ai-blog-title">Latest From Our Sales Automation Blog</h2>
                </div>

                <!-- Blog Grid -->
                <div class="ai-blog-grid">
                    <!-- Blog Card 1 -->
                    <div class="ai-blog-card">
                        <div class="blog-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1552581234-26160f608093?auto=format&fit=crop&q=80&w=800"
                                alt="Speed to Lead Strategy">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="meta-item"><i class="bi bi-person"></i> By Sales Lead</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-calendar3"></i> 20 Mar, 2024</span>
                            </div>
                            <h3 class="blog-card-title">Why Sub-Minute Speed-to-Lead Multiplies Close Rates by 7x</h3>
                            <a href="{{ route('contactUs') }}" class="blog-read-more">Read Insights <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <!-- Blog Card 2 -->
                    <div class="ai-blog-card">
                        <div class="blog-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&q=80&w=800"
                                alt="CRM Data Cleanliness">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="meta-item"><i class="bi bi-person"></i> By RevOps Architect</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-calendar3"></i> 24 Mar, 2024</span>
                            </div>
                            <h3 class="blog-card-title">How Autonomous CRM Data Hygiene Saves 10+ Hours Per Rep Each Week</h3>
                            <a href="{{ route('contactUs') }}" class="blog-read-more">Read Insights <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <!-- Blog Card 3 -->
                    <div class="ai-blog-card">
                        <div class="blog-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&q=80&w=800"
                                alt="Automated Deal Routing">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="meta-item"><i class="bi bi-person"></i> By Growth Strategist</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-calendar3"></i> 28 Mar, 2024</span>
                            </div>
                            <h3 class="blog-card-title">Building Custom Lead Qualification Workflows for B2B Sales Teams</h3>
                            <a href="{{ route('contactUs') }}" class="blog-read-more">Read Insights <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
