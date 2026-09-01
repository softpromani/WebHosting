@extends('home.includes.layout')
@section('title', 'IT Hardware & Software Procurement Services | Mounteko')
@section('meta-description', 'Hassle-free IT hardware and software procurement and licensing for growing US businesses —
    sourced and managed by Mounteko.')
@section('header-area')
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/new_home_custom.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/it_support_helpdesk.css') }}">
@endsection

@section('content')
    <main class="hd-main">

        <!-- SECTION 1: HERO HEADER -->
        <section class="hd-hero">
            <div class="hd-hero-container">
                <div class="hd-hero-row">
                    <!-- Left Column -->
                    <div class="hd-hero-left">
                        <div class="hd-hero-tag">
                            <i class="bi bi-cart-check"></i> END-TO-END IT SOURCING
                        </div>
                        <h1 class="hd-hero-title">IT Hardware & Software Procurement Services</h1>
                        <p class="hd-hero-desc">Buying IT equipment and software licenses directly means chasing multiple
                            vendors, comparing options with no real technical guidance, and often overpaying or under-buying
                            for what your team actually needs. Mounteko manages IT hardware and software procurement end to
                            end — sourcing, licensing, and vendor coordination handled by people who already know your
                            environment.</p>

                        <!-- Quick Features Badges -->
                        <div class="hd-hero-badges">
                            <div class="hd-badge"><i class="bi bi-shield-check"></i> Technically Validated Sourcing</div>
                            <div class="hd-badge"><i class="bi bi-graph-down"></i> SaaS & License Optimization</div>
                            <div class="hd-badge"><i class="bi bi-clock-history"></i> Zero Surprise Renewals</div>
                            <div class="hd-badge"><i class="bi bi-laptop"></i> Pre-Configured & Ready to Deploy</div>
                        </div>

                        <div class="hd-hero-btns">
                            <a href="{{ route('contactUs') }}" class="btn-hd-primary">Request a Procurement Quote</a>
                            <a href="#procurement-pillars" class="btn-hd-outline">How We Procure</a>
                        </div>
                    </div>

                    <!-- Right Column (Desktop Hero Image & Float Cards) -->
                    <div class="hd-hero-right">
                        <div class="hd-hero-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-support-specialist.png') }}"
                                alt="IT Procurement Specialist" class="hd-hero-img">

                            <!-- Floating Card 1 -->
                            <div class="hd-float-card hd-float-1">
                                <div class="hd-float-icon"><i class="bi bi-laptop"></i></div>
                                <div class="hd-float-content">
                                    <strong>Pre-Imaged</strong>
                                    <span>Zero-Touch Setup</span>
                                </div>
                            </div>

                            <!-- Floating Card 2 -->
                            <div class="hd-float-card hd-float-2">
                                <div class="hd-float-icon"><i class="bi bi-building"></i></div>
                                <div class="hd-float-content">
                                    <strong>Single Vendor</strong>
                                    <span>Zero Hassle Desk</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 2: PROCUREMENT BACKED BY TECHNICAL RECOMMENDATIONS -->
        <section id="procurement-pillars" class="hd-feature">
            <div class="hd-feature-grid">
                <!-- Left Content -->
                <div class="hd-feature-left">
                    <span class="hd-feature-tag">TECHNICAL VALIDATION</span>
                    <h2 class="hd-feature-title">Procurement Backed by Technical Recommendations</h2>
                    <p class="hd-feature-desc">
                        Ordering hardware is easy; ordering the exact specifications that integrate seamlessly with your
                        network, security policies, and user workloads requires engineering insight. Mounteko recommends
                        hardware and software based on what will actually work in your specific environment — eliminating
                        costly compatibility mismatches and premature replacements.
                    </p>

                    <ul class="hd-feature-list">
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Environment-Compatible Architecture:</strong>
                            Ensuring all laptops, servers, and switches match your existing domain, VPN, and security
                            standards.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Workload-Matched Specs:</strong> Right-sizing
                            CPU, RAM, and GPU capacity for developers, designers, and office staff to avoid overpaying.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Pre-Deployment Imaging & Staging:</strong>
                            Devices arrive pre-configured with MDM profiles, antivirus, and apps ready for instant login.
                        </li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Tier-1 Distributor Pricing:</strong> Enterprise
                            pricing advantages through authorized relationships with Dell, Lenovo, HP, Cisco, and Microsoft.
                        </li>
                    </ul>

                    <div class="hd-feature-actions">
                        <a href="{{ route('contactUs') }}" class="btn-hd-primary">Consult Our Procurement Team</a>
                    </div>
                </div>

                <!-- Right Image (Collage) -->
                <div class="hd-feature-right">
                    <div class="hd-collage">
                        <!-- Top Image (Mobile) -->
                        <div class="collage-item item-top">
                            <img src="{{ asset('home/assets/homepage/images/it-support-mobile.png') }}"
                                alt="Procurement Mobile App">
                        </div>
                        <!-- Main Image (Team) -->
                        <div class="collage-item item-main">
                            <img src="{{ asset('home/assets/homepage/images/it-support-team.png') }}"
                                alt="Hardware Sourcing Engineers">
                        </div>
                        <!-- Left Image (Laptop) -->
                        <div class="collage-item item-left">
                            <img src="{{ asset('home/assets/homepage/images/it-support-laptop.png') }}"
                                alt="Hardware Provisioning">
                        </div>
                        <!-- Bottom Image (Desktop) -->
                        <div class="collage-item item-bottom">
                            <img src="{{ asset('home/assets/homepage/images/it-support-desk.png') }}"
                                alt="Enterprise IT Sourcing Desk">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: SOFTWARE LICENSING & SAAS MANAGEMENT (6-CARD GRID) -->
        <section class="hd-services">
            <div class="hd-services-container">
                <div class="hd-section-header">
                    <span class="hd-feature-tag" style="background:#eff6ff;">LICENSE GOVERNANCE</span>
                    <h2 class="hd-section-title" style="color:white; margin-bottom:15px;">Software Licensing Management</h2>
                    <p class="hd-section-subtitle" style="color:#94a3b8; max-width:850px; margin: 0 auto;">
                        Eliminate surprise renewal spikes, zombie subscriptions, and compliance risks with proactive
                        software license tracking and contract optimization.
                    </p>
                </div>

                <div class="hd-services-grid">
                    <!-- Card 1: Microsoft 365 & Cloud Licensing -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-support-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-microsoft"></i></div>
                        <h3 class="hd-service-title">Microsoft 365 & SaaS Licensing</h3>
                        <p class="hd-service-text">
                            Right-sizing Business Basic, Standard, and Premium tiers so you only pay for the exact features
                            and user licenses your organization needs.
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 2: SaaS Utilization & Seat Audits -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-network-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-pie-chart"></i></div>
                        <h3 class="hd-service-title">Seat Auditing & Shadow IT</h3>
                        <p class="hd-service-text">
                            Continuous monitoring of software usage to identify unused seats, duplicate subscriptions, and
                            unapproved apps across your organization.
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 3: Proactive Renewal Alerts -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-security-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-bell"></i></div>
                        <h3 class="hd-service-title">Proactive Renewal Tracking</h3>
                        <p class="hd-service-text">
                            60-day and 30-day advance renewal notifications to prevent unwanted auto-renewals, renegotiate
                            terms, and lock in volume discounts.
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 4: Volume & Enterprise Agreements -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-cloud-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-tags"></i></div>
                        <h3 class="hd-service-title">Volume Enterprise Pricing</h3>
                        <p class="hd-service-text">
                            Consolidating departmental software purchases under master enterprise agreements to unlock
                            higher tier discounts and predictable billing.
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 5: Compliance & True-Up Audit Defense -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-backup-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-shield-check"></i></div>
                        <h3 class="hd-service-title">Audit Defense & True-Ups</h3>
                        <p class="hd-service-text">
                            Maintaining centralized license documentation to pass vendor audits and true-up reviews without
                            unexpected penalty fees.
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 6: Consolidated Billing & Co-Termination -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-maint-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-receipt"></i></div>
                        <h3 class="hd-service-title">Consolidated Co-Termination</h3>
                        <p class="hd-service-text">
                            Aligning disparate software and warranty renewal dates to a single annual or quarterly cycle,
                            drastically reducing accounts payable friction.
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 4: ONE VENDOR RELATIONSHIP INSTEAD OF MANY & RETAIL SPOTLIGHT -->
        <section class="hd-why-us">
            <div class="hd-why-us-container" style="max-width: 1200px;">
                <!-- Left: Image with Frame Overlay -->
                <div class="hd-why-us-left">
                    <div class="hd-why-us-img-frame">
                        <img src="{{ asset('home/assets/homepage/images/it-why-us-team.png') }}"
                            alt="Mounteko Procurement and Vendor Management Team">
                    </div>
                </div>

                <!-- Right: Content -->
                <div class="hd-why-us-right">
                    <span class="hd-why-us-tag">SINGLE-SOURCE ACCOUNTABILITY</span>
                    <h2 class="hd-why-us-title">One Vendor Relationship Instead of Many</h2>
                    <p class="hd-why-us-text">
                        Managing separate supplier accounts with computer OEMs, peripheral vendors, SaaS providers, and
                        warranty desks creates overwhelming administrative clutter. When equipment fails or a new employee
                        starts, your team shouldn't waste hours chasing multiple order numbers. Mounteko acts as your single
                        accountable purchasing desk. One call initiates hardware sourcing, price benchmarking,
                        pre-configuration, and direct shipment.
                    </p>

                    <div class="hd-check-grid">
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Single Accountable Procurement
                            Desk</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Manufacturer Warranty & RMA
                            Management</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Distributor Price Benchmarking
                        </div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Complete Asset Serial Number
                            Tracking</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Emergency Spare Hardware
                            Logistics</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Transparent Line-Item Billing
                        </div>
                    </div>

                    <a href="{{ route('contactUs') }}" class="btn-hd-primary"
                        style="display: inline-block; margin-top: 10px;">Simplify Your IT Purchasing</a>
                </div>
            </div>

            <!-- Retail & Multi-Location Rollout Industry Spotlight Card -->
            <div class="container" style="max-width: 1200px; margin: 40px auto 0; padding: 0 40px;">
                <div class="hd-industry-spotlight">
                    <div class="hd-industry-icon">
                        <i class="bi bi-shop"></i>
                    </div>
                    <div class="hd-industry-content">
                        <h4>Industry Spotlight: Retail Chains & Multi-Location POS Rollouts</h4>
                        <p>
                            When a retail chain or franchise rolls out new Point-of-Sale (POS) terminals, barcode scanners,
                            receipt printers, and store network gear across 20+ store locations simultaneously, procurement
                            logistics can paralyze an internal team. Mounteko stages, pre-configures, and kits every retail
                            station in our secure facility, coordinating just-in-time delivery and plug-and-play
                            installation so store managers experience zero launch delays.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 5: HOW OUR PROCUREMENT PROCESS WORKS -->
        <section class="hd-workflow">
            <div class="hd-workflow-container">
                <div class="hd-workflow-header">
                    <span class="hd-workflow-tag">STREAMLINED SOURCING</span>
                    <h2 class="hd-workflow-title">How Our Procurement Process <em>Works</em></h2>
                </div>

                <div class="hd-steps-row">
                    <!-- Step 1: Audit -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-audit.png') }}"
                                alt="Technical Needs Assessment">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">1. Technical Audit</h3>
                            <p class="hd-step-desc">We evaluate user workload demands, existing network compatibility, and
                                software utilization to prevent over-purchasing.</p>
                        </div>
                    </div>

                    <!-- Step 2: Sourcing -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-plan.png') }}"
                                alt="Distributor Price Benchmarking">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">2. Price Benchmarking</h3>
                            <p class="hd-step-desc">We source competitive bids across Tier-1 authorized distributor
                                networks to secure enterprise volume pricing.</p>
                        </div>
                    </div>

                    <!-- Step 3: Staging -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-implement.png') }}"
                                alt="Pre-Configuration and Staging">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">3. Staging & Imaging</h3>
                            <p class="hd-step-desc">Hardware is imaged with your corporate OS, pre-configured with security
                                policies, and asset-tagged prior to dispatch.</p>
                        </div>
                    </div>

                    <!-- Step 4: Lifecycle -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-manage.png') }}"
                                alt="Lifecycle and Renewal Management">
                        </div>
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">4. Lifecycle Tracking</h3>
                            <p class="hd-step-desc">Serial numbers, warranty expiries, and software renewal milestones are
                                tracked automatically for seamless continuity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 6: LATEST FROM OUR BLOG -->
        <section class="dev-blog-section">
            <div class="dev-blog-container">
                <span class="dev-blog-tag">SOURCING INSIGHTS</span>
                <h2 class="dev-blog-title">Latest From Our Blog</h2>
                <div class="dev-blog-divider"></div>

                <div class="dev-blog-grid">
                    <!-- Post 1 -->
                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=700"
                                alt="Hardware Procurement Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-it-support">SOURCING</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 20 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By Sourcing Expert</span>
                            </div>
                            <h4 class="dev-blog-heading">How to Avoid Vendor Lock-In During Hardware & Software Procurement
                            </h4>
                        </div>
                    </div>

                    <!-- Post 2 -->
                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=700"
                                alt="SaaS Management Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-management">LICENSING</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 24 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By Asset Manager</span>
                            </div>
                            <h4 class="dev-blog-heading">The Hidden Cost of Unmanaged SaaS Subscriptions and Zombie
                                Licenses</h4>
                        </div>
                    </div>

                    <!-- Post 3 -->
                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=700"
                                alt="Volume Licensing Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-security">OPTIMIZATION</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 28 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By Compliance Lead</span>
                            </div>
                            <h4 class="dev-blog-heading">How to Optimize Microsoft 365 Licensing for Growing Workforces
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA SECTION -->
        <section class="hd-cta-section">
            <div class="hd-cta-container">
                <div class="hd-cta-banner">

                    <!-- SVG Scribble Arrow -->
                    <div class="hd-cta-scribble">
                        <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 20C40 10 60 40 50 60C45 70 30 65 35 50C40 35 60 45 80 80M80 80L70 80M80 80L80 70"
                                stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <!-- Left: Text + Contact -->
                    <div class="hd-cta-left">
                        <h2 class="hd-cta-banner-title">Stop Chasing Vendors. Streamline Your IT Procurement Today.</h2>

                        <div class="hd-cta-contact-grid">
                            <!-- Phone -->
                            <div class="hd-cta-contact-item">
                                <div class="hd-cta-contact-icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div class="hd-cta-contact-info">
                                    <span>Call our sourcing team</span>
                                    <strong><a href="tel:{{ settingValue('phone') }}"
                                            style="color: inherit; text-decoration: none;">{{ settingValue('phone') ?? '+1 (800) 555-0199' }}</a></strong>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="hd-cta-contact-item">
                                <div class="hd-cta-contact-icon">
                                    <i class="bi bi-envelope-at-fill"></i>
                                </div>
                                <div class="hd-cta-contact-info">
                                    <span>Send an inquiry</span>
                                    <strong><a href="mailto:{{ settingValue('email') }}"
                                            style="color: inherit; text-decoration: none;">{{ settingValue('email') ?? 'support@mounteko.com' }}</a></strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Framed Image -->
                    <div class="hd-cta-right">
                        <div class="hd-cta-image-frame">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=600"
                                alt="IT Hardware and Software Procurement">
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
