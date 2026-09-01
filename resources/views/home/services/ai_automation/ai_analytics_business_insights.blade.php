@extends('home.includes.layout')
@section('title', 'AI Analytics & Business Insights Services | Mounteko')
@section('meta-description',
'Turn your business data into clear, actionable insight with AI-powered analytics and dashboards from Mounteko.')

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
            <img src="{{ asset('home/assets/homepage/images/ai/robot_left.png') }}" alt="AI Analytics Left"
                class="ai-robot-left">
            <img src="{{ asset('home/assets/homepage/images/ai/robot_right.png') }}" alt="AI Analytics Right"
                class="ai-robot-right">

            <div class="ai-hero-container">
                <div class="ai-welcome-badge">DECISION-TIED BUSINESS INTELLIGENCE</div>
                <h1 class="ai-hero-title">AI Analytics & Business Insights Services</h1>
                <p class="ai-hero-desc">Most businesses have plenty of data and very little insight — numbers sitting in spreadsheets and dashboards nobody has time to actually analyze. Mounteko builds AI-powered analytics and business intelligence that turns raw data into clear, specific recommendations your team can act on, not just another dashboard to check occasionally.</p>

                <div class="ai-pills-row">
                    <span class="ai-pill">Decision-Tied Analytics</span>
                    <span class="ai-pill">Predictive Demand & Churn Models</span>
                    <span class="ai-pill">Plain-Language Insights</span>
                    <span class="ai-pill">Automated Executive Reporting</span>
                </div>

                <a href="{{ route('contactUs') }}" class="btn-ai-get-started">
                    Unlock Predictive Business Insights <i><i class="bi bi-arrow-right"></i></i>
                </a>
            </div>
        </section>

        <!-- SECTION 2: PREDICTIVE ANALYTICS FOR WHAT'S COMING NEXT (6-CARD GRID) -->
        <section class="ai-services-grid-section">
            <div class="ai-services-grid-container">
                <div class="ai-services-header">
                    <div class="ai-tag-red" style="justify-content: center;">
                        <div class="dot"></div>
                        PREDICTIVE INTELLIGENCE
                    </div>
                    <h2 class="ai-about-title" style="font-size: 38px;">Predictive Analytics for What's Coming Next</h2>
                    <p style="color: #94a3b8; max-width: 750px; margin: 15px auto 0; font-size: 15px; line-height: 1.6;">
                        Move beyond backward-looking historical reports. Our predictive AI models forecast customer demand, identify churn risks, and flag operational trends before they become obvious in hindsight.
                    </p>
                </div>

                <div class="ai-services-grid">
                    <!-- Card 01: Customer Churn & Retention Forecasting -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 20%; left: 80%;"></div>
                        <div class="ai-card-particle" style="top: 60%; left: 90%;"></div>
                        <span class="ai-service-number">01</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-person-x-fill"></i>
                        </div>
                        <h3 class="ai-service-title">Customer Churn Forecasting</h3>
                        <p class="ai-service-desc">Identify declining engagement signals and at-risk accounts 60 days before contract renewal, enabling proactive customer retention.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 02: Demand & Revenue Modeling -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 15%; left: 75%;"></div>
                        <div class="ai-card-particle" style="top: 55%; left: 85%;"></div>
                        <span class="ai-service-number">02</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h3 class="ai-service-title">Demand & Revenue Modeling</h3>
                        <p class="ai-service-desc">Simulate market seasonality, pipeline velocity, and capacity requirements with machine learning models that adapt to shifting economic conditions.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 03: Dynamic Pricing Optimization -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 25%; left: 70%;"></div>
                        <div class="ai-card-particle" style="top: 65%; left: 95%;"></div>
                        <span class="ai-service-number">03</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-tags-fill"></i>
                        </div>
                        <h3 class="ai-service-title">Dynamic Pricing Intelligence</h3>
                        <p class="ai-service-desc">Analyze competitor price shifts, inventory levels, and customer price elasticity to recommend margin-maximizing pricing adjustments in real time.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 04: Real-Time Operational Anomaly Detection -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 10%; left: 85%;"></div>
                        <div class="ai-card-particle" style="top: 50%; left: 75%;"></div>
                        <span class="ai-service-number">04</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-exclamation-triangle-fill"></i>
                        </div>
                        <h3 class="ai-service-title">Anomaly & Fraud Detection</h3>
                        <p class="ai-service-desc">Automatically detect irregular spikes in customer refund requests, uncharacteristic billing activity, or sudden drop-offs in sales conversion funnels.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 05: Inventory & Supply Chain Forecasting -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 30%; left: 90%;"></div>
                        <div class="ai-card-particle" style="top: 70%; left: 80%;"></div>
                        <span class="ai-service-number">05</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-box-seam-fill"></i>
                        </div>
                        <h3 class="ai-service-title">Inventory & Stock Optimization</h3>
                        <p class="ai-service-desc">Predict stockout dates and optimal replenishment quantities based on supplier lead times and historical sales velocity, preventing trapped capital.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>

                    <!-- Card 06: Natural Language Executive Summaries -->
                    <div class="ai-service-card">
                        <div class="ai-card-bg-pattern"></div>
                        <div class="ai-card-grid-lines"></div>
                        <div class="ai-card-particle" style="top: 20%; left: 75%;"></div>
                        <div class="ai-card-particle" style="top: 60%; left: 85%;"></div>
                        <span class="ai-service-number">06</span>
                        <div class="ai-service-icon">
                            <i class="bi bi-chat-left-quote-fill"></i>
                        </div>
                        <h3 class="ai-service-title">Natural Language Briefings</h3>
                        <p class="ai-service-desc">Receive automated Monday-morning executive summaries that translate complex telemetry into plain-English highlights and priority action items.</p>
                        <a href="{{ route('contactUs') }}" class="ai-service-readmore">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: BUSINESS INTELLIGENCE BUILT AROUND DECISIONS, NOT JUST DASHBOARDS -->
        <section class="ai-about-section">
            <div class="ai-about-container">
                <div class="ai-about-visual">
                    <div class="ai-main-img-wrap">
                        <img src="{{ asset('home/assets/homepage/images/ai/ai_face_digital.png') }}" alt="Decision-Tied AI Analytics">
                    </div>
                    <div class="ai-floating-card">
                        <div class="ai-card-icon">
                            <img src="{{ asset('home/assets/homepage/images/ai/ai_data_node.png') }}" alt="Actionable Insights">
                        </div>
                        <div class="ai-card-text">
                            <strong>100%</strong>
                            <span>Actionable Decision Guidance</span>
                        </div>
                    </div>
                </div>

                <div class="ai-about-content">
                    <div class="ai-tag-red">
                        <div class="dot"></div>
                        ACTIONABLE DECISION FRAMEWORK
                    </div>
                    <h2 class="ai-about-title">Business Intelligence Built Around Decisions, Not Just Dashboards</h2>
                    <p class="ai-about-desc">
                        A common failure of corporate analytics is building complex, colorful charts that nobody actually uses to run the business. Mounteko designs analytics architectures strictly tied to concrete business decisions — answering specific questions like: <em>Which products should we discount? How many customer service staff do we need next month? Which marketing channels are losing margin?</em> We replace passive charts with decisive recommendations.
                    </p>

                    <div class="ai-feature-row">
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-bullseye"></i></div>
                            <div class="ai-feat-text">Decision-First<br>Architecture</div>
                        </div>
                        <div class="ai-feature-item">
                            <div class="ai-feat-icon"><i class="bi bi-cash-stack"></i></div>
                            <div class="ai-feat-text">Direct Margin<br>Impact</div>
                        </div>
                    </div>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Pricing & Margin Guidance:</strong> Recommends optimal pricing strategies based on customer segment willingness to pay.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Workforce & Staffing Forecasting:</strong> Accurately predicts customer support ticket volume and field service requirements.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Automated Metric Alerting:</strong> Triggers notifications only when key operational thresholds breach target boundaries.</li>
                    </ul>

                    <div>
                        <a href="{{ route('contactUs') }}" class="btn-ai-red">Design Your Decision Dashboard <i
                                class="bi bi-arrow-right"></i></a>
                    </div>

                    <img src="{{ asset('home/assets/homepage/images/ai/cute_robot_side.png') }}" alt="AI Assistant"
                        class="ai-side-robot-new">
                </div>
            </div>
        </section>

        <!-- SECTION 4: INSIGHTS YOUR TEAM CAN ACTUALLY UNDERSTAND AND USE -->
        <section class="ai-transform-section">
            <div class="ai-transform-container">
                <div class="ai-transform-visual">
                    <div class="ai-main-img-transform">
                        <img src="{{ asset('home/assets/homepage/images/ai/robot_hand_touch_new.png') }}"
                            alt="Plain-Language AI Insights">
                    </div>
                    <div class="ai-transform-overlay">
                        <img src="{{ asset('home/assets/homepage/images/ai/robot_profile_overlay_new.png') }}"
                            alt="Executive Clarity">
                    </div>
                </div>

                <div class="ai-transform-content">
                    <div class="ai-tag-red">
                        <div class="dot"></div>
                        PLAIN-LANGUAGE CLARITY
                    </div>
                    <h2 class="ai-about-title">Insights Your Team Can Actually Understand and Use</h2>
                    <p class="ai-about-desc">
                        Raw AI outputs and complex data science notebooks are useless to department managers who need fast clarity. Mounteko translates multi-variable statistical models into intuitive visualizations and plain-language summaries tailored for executives, sales leaders, and operations managers.
                    </p>

                    <ul class="ai-checklist-about">
                        <li><i class="bi bi-check-circle-fill"></i> <strong>No Data Science Degree Required:</strong> Clean, uncluttered interfaces that highlight the "why" behind the numbers.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Conversational AI Data Queries:</strong> Ask questions in plain English (e.g. <em>"Which region had the highest margin drop this quarter?"</em>) and get instant answers.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Automated PDF & Slack Reports:</strong> Automated weekly digests sent directly to your leadership team's Slack, Teams, or inbox.</li>
                    </ul>

                    <a href="{{ route('contactUs') }}" class="btn-ai-gradient">Experience Plain-Language Insights <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <!-- Decorative Reaching Hand -->
            <img src="{{ asset('home/assets/homepage/images/ai/robot_hand_clean.png') }}" alt="Robot Hand Support"
                class="ai-reaching-hand-clean">
        </section>

        <!-- SECTION 5: BANKING & FINANCE INDUSTRY SPOTLIGHT -->
        <section class="ai-experience-section">
            <div class="ai-experience-container">
                <!-- Left Visual Composition -->
                <div class="ai-visual-composition">
                    <div class="ai-main-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1559526324-4b87b5e36e44?auto=format&fit=crop&q=80&w=800"
                            alt="Banking & Finance AI Analytics" class="ai-exp-main-img">

                        <!-- Floating Glass Badge -->
                        <div class="ai-glass-badge-exp">
                            <div class="badge-icon">
                                <i class="bi bi-bank2"></i>
                            </div>
                            <div class="badge-text">
                                <span class="badge-title">Predictive Risk</span>
                                <span class="badge-sub">Banking & Lending</span>
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
                    <h2 class="ai-exp-title">Banking & Finance: Loan Default Prediction & Deposit Churn</h2>
                    <p class="ai-exp-desc">
                        Commercial lenders, regional banks, and fintech providers face critical risk-management challenges: identifying high-risk loan applications before approval and spotting depository account holders who are moving funds to competing institutions.
                    </p>
                    <p class="ai-exp-desc">
                        Mounteko deploys explainable AI risk models that ingest cash-flow velocity, credit bureau telemetry, and transaction frequency. Underwriters receive automated risk scores with transparent factor breakdowns, while relationship managers get early-warning alerts for at-risk wealth accounts — preserving portfolio margins and compliance standards.
                    </p>

                    <div class="ai-exp-checklist">
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Predictive Loan Default & Risk Scoring
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Deposit Outflow & Churn Warnings
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Explainable AI with Audit Transparency
                        </div>
                        <div class="ai-exp-item">
                            <i class="bi bi-check"></i>
                            Strict GLBA & SOC 2 Compliance
                        </div>
                    </div>

                    <a href="{{ route('contactUs') }}" class="btn-ai-purple">
                        Deploy Financial Intelligence <i class="bi bi-arrow-right"></i>
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
                        <h2 class="ai-card-title">Ready to Turn Data into Actionable Decisions?</h2>
                        <p class="ai-card-desc">Tell us about your current data sources and key business questions, and our analytics architects will outline a tailored predictive modeling roadmap.</p>

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
                                <textarea name="message" placeholder="Describe your data sources (SQL, CRM, ERP) and the key business decisions you want to forecast..." rows="3" required></textarea>
                            </div>

                            <div class="ai-form-footer">
                                <div class="support-person">
                                    <img src="https://ui-avatars.com/api/?name=Analytics+Architect&background=00ffcc&color=030d0a"
                                        alt="Analytics Architect">
                                    <div class="support-info">
                                        <h4>Senior Analytics Architect</h4>
                                        <p>Business Intelligence Team</p>
                                    </div>
                                </div>
                                <button type="submit" class="btn-ai-red">Request Analytics Consultation <i
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
                    <h2 class="ai-faq-title">AI Analytics FAQs</h2>
                    <p class="ai-faq-desc">Answers to common questions about implementing predictive modeling and decision-tied business intelligence.
                    </p>

                    <!-- Tabs -->
                    <ul class="nav nav-tabs ai-custom-tabs" id="aiFaqTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general"
                                type="button" role="tab" aria-controls="general" aria-selected="true">General</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="predictive-tab" data-bs-toggle="tab" data-bs-target="#predictive"
                                type="button" role="tab" aria-controls="predictive" aria-selected="false">Predictive Models</button>
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
                                            How is decision-tied analytics different from standard reporting?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Standard reporting shows past metrics (e.g. sales last month). Decision-tied analytics evaluates historical trends and external factors to generate proactive recommendations (e.g. exactly how many units to reorder or which accounts to contact immediately to prevent churn).
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Which BI tools and data warehouses do you support?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            We build data models and interactive dashboards across Microsoft Power BI, Tableau, Looker, Snowflake, Google BigQuery, AWS Redshift, and PostgreSQL.
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            How much historical data is required to build predictive models?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            While 12 to 24 months of historical records provide optimal predictive confidence, useful trend analysis and anomaly detection can begin with as little as 3 to 6 months of structured data.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="predictive" role="tabpanel" aria-labelledby="predictive-tab">
                            <p class="mt-4 text-muted">All predictive models are built with explainable AI (XAI) standards, ensuring every risk score and forecast includes clear feature-importance transparency.</p>
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
                        <span class="dot"></span> ANALYTICS INSIGHTS
                    </div>
                    <h2 class="ai-blog-title">Latest From Our Business Intelligence Blog</h2>
                </div>

                <!-- Blog Grid -->
                <div class="ai-blog-grid">
                    <!-- Blog Card 1 -->
                    <div class="ai-blog-card">
                        <div class="blog-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=800"
                                alt="Decision BI">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="meta-item"><i class="bi bi-person"></i> By BI Lead</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-calendar3"></i> 20 Mar, 2024</span>
                            </div>
                            <h3 class="blog-card-title">Why 80% of Corporate Dashboards Get Ignored (And How to Fix Them)</h3>
                            <a href="{{ route('contactUs') }}" class="blog-read-more">Read Insights <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <!-- Blog Card 2 -->
                    <div class="ai-blog-card">
                        <div class="blog-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1559526324-4b87b5e36e44?auto=format&fit=crop&q=80&w=800"
                                alt="Predictive Churn">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="meta-item"><i class="bi bi-person"></i> By Data Scientist</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-calendar3"></i> 24 Mar, 2024</span>
                            </div>
                            <h3 class="blog-card-title">Predictive Churn Modeling: Spotting At-Risk Accounts 60 Days Early</h3>
                            <a href="{{ route('contactUs') }}" class="blog-read-more">Read Insights <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <!-- Blog Card 3 -->
                    <div class="ai-blog-card">
                        <div class="blog-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&q=80&w=800"
                                alt="Natural Language BI">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="meta-item"><i class="bi bi-person"></i> By AI Architect</span>
                                <span class="meta-separator">|</span>
                                <span class="meta-item"><i class="bi bi-calendar3"></i> 28 Mar, 2024</span>
                            </div>
                            <h3 class="blog-card-title">Natural Language BI: Asking Questions and Getting Plain-English Answers</h3>
                            <a href="{{ route('contactUs') }}" class="blog-read-more">Read Insights <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
