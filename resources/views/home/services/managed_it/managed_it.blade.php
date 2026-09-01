@extends('home.includes.layout')
@section('title', 'Managed IT Services (MSP) for Growing US Businesses | Mounteko')
@section('meta-description',
    'Full-service managed IT services (MSP) for growing US businesses — helpdesk, monitoring,
    patch management, and hardware/software procurement under one accountable plan.')

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
                            <i class="bi bi-shield-check"></i> MANAGED IT SERVICES (MSP)
                        </div>
                        <h1 class="hd-hero-title">Managed IT Services (MSP) for Growing US Businesses</h1>
                        <p class="hd-hero-desc">Most growing businesses reach a point where IT stops being something one
                            person handles on the side and becomes something that needs real, dedicated attention — without
                            the budget or the need for a full internal IT department. Mounteko provides full-service managed
                            IT: helpdesk support, proactive system monitoring, patch management, and hardware/software
                            procurement, all under one plan with one point of contact.</p>

                        <!-- Quick Features Badges -->
                        <div class="hd-hero-badges">
                            <div class="hd-badge"><i class="bi bi-check-circle-fill"></i> 24/7/365 US Support</div>
                            <div class="hd-badge"><i class="bi bi-check-circle-fill"></i> 15-Min Response SLA</div>
                            <div class="hd-badge"><i class="bi bi-check-circle-fill"></i> Certified IT Engineers</div>
                            <div class="hd-badge"><i class="bi bi-check-circle-fill"></i> Proactive Patching & Security
                            </div>
                        </div>

                        <div class="hd-hero-btns">
                            <a href="{{ route('contactUs') }}" class="btn-hd-primary">Get a Managed IT Assessment</a>
                            <a href="#services-included" class="btn-hd-outline">What's Included</a>
                        </div>
                    </div>

                    <!-- Right Column (Desktop Hero Image & Float Cards) -->
                    <div class="hd-hero-right">
                        <div class="hd-hero-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-support-specialist.png') }}"
                                alt="Managed IT Services Specialist" class="hd-hero-img">

                            <!-- Floating Card 1 -->
                            <div class="hd-float-card hd-float-1">
                                <div class="hd-float-icon"><i class="bi bi-lightning-fill"></i></div>
                                <div class="hd-float-content">
                                    <strong>15 Minutes</strong>
                                    <span>Avg. Response SLA</span>
                                </div>
                            </div>

                            <!-- Floating Card 2 -->
                            <div class="hd-float-card hd-float-2">
                                <div class="hd-float-icon"><i class="bi bi-headset"></i></div>
                                <div class="hd-float-content">
                                    <strong>24/7/365 Support</strong>
                                    <span>Live US Engineers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 2: WHAT'S INCLUDED IN MANAGED IT SERVICES (4-CARD GRID) -->
        <section id="services-included" class="hd-services">
            <div class="hd-services-container">
                <div class="hd-section-header">
                    <span class="hd-feature-tag" style="background:#eff6ff;">CORE MSP COVERAGE</span>
                    <h2 class="hd-section-title" style="color:white; margin-bottom:15px;">What's Included in Managed IT
                        Services</h2>
                    <p class="hd-section-subtitle" style="color:#94a3b8; max-width:800px; margin: 0 auto;">Four core pillars
                        engineered to keep your team productive, your infrastructure resilient, and your technology budget
                        predictable.
                    </p>
                </div>

                <div class="hd-services-grid-4">
                    <!-- Card 1: IT Support & Helpdesk -->
                    <div class="hd-service-card"
                        onclick="window.location.href='{{ route('services.it_support_helpdesk') }}'">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-support-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-headset"></i></div>
                        <h3 class="hd-service-title">IT Support & Helpdesk</h3>
                        <p class="hd-service-text">
                            Rapid 24/7 remote and on-site troubleshooting, dedicated ticket resolution, and user assistance
                            so your employees never lose billable hours to tech glitches.
                        </p>
                        <a href="{{ route('services.it_support_helpdesk') }}" class="hd-service-btn">Explore Helpdesk <i
                                class="bi bi-arrow-right"></i></a>
                    </div>

                    <!-- Card 2: System Monitoring & Maintenance -->
                    <div class="hd-service-card" onclick="window.location.href='{{ route('services.system_monitoring') }}'">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-network-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-activity"></i></div>
                        <h3 class="hd-service-title">System Monitoring & Maintenance</h3>
                        <p class="hd-service-text">
                            Continuous 24/7 infrastructure observability, server health telemetry, and automated remediation
                            to catch failures before they impact your business.
                        </p>
                        <a href="{{ route('services.system_monitoring') }}" class="hd-service-btn">Explore Monitoring <i
                                class="bi bi-arrow-right"></i></a>
                    </div>

                    <!-- Card 3: System Patch Management & Updates -->
                    <div class="hd-service-card" onclick="window.location.href='{{ route('services.patch_management') }}'">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-security-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-shield-check"></i></div>
                        <h3 class="hd-service-title">Patch Management & Updates</h3>
                        <p class="hd-service-text">
                            Automated, verified OS and third-party software patching across workstations and servers to
                            eliminate critical security vulnerabilities without disruption.
                        </p>
                        <a href="{{ route('services.patch_management') }}" class="hd-service-btn">Explore Patching <i
                                class="bi bi-arrow-right"></i></a>
                    </div>

                    <!-- Card 4: Hardware & Software Procurement -->
                    <div class="hd-service-card"
                        onclick="window.location.href='{{ route('services.hardware_software_procurement') }}'">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-cloud-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-laptop"></i></div>
                        <h3 class="hd-service-title">Hardware & Software Procurement</h3>
                        <p class="hd-service-text">
                            Vendor-neutral hardware sourcing, volume license management, and rapid pre-configured device
                            deployment tailored to your business roadmap.
                        </p>
                        <a href="{{ route('services.hardware_software_procurement') }}" class="hd-service-btn">Explore
                            Procurement <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: WHY BUSINESSES CHOOSE AN MSP OVER AN IN-HOUSE HIRE -->
        <section class="hd-compare">
            <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 40px;">
                <div class="text-center mb-5">
                    <span class="hd-feature-tag">THE STRATEGIC COMPARISON</span>
                    <h2 class="hd-feature-title" style="font-size: 2rem; margin-top: 10px;">Why Businesses Choose a
                        Managed IT Partner Over an In-House Hire</h2>
                    <p class="hd-feature-desc" style="max-width: 800px; margin: 0 auto;">
                        Growing companies often weigh the pros and cons of hiring a single internal IT employee versus
                        partnering with an established Managed Services Provider (MSP). Here is how the two approaches
                        compare:
                    </p>
                </div>

                <div class="hd-compare-container" style="padding: 0;">
                    <!-- Option 1: Single In-House Hire -->
                    <div class="hd-compare-card card-inhouse">
                        <div class="hd-compare-icon"><i class="bi bi-person-x"></i></div>
                        <h3 class="hd-compare-title">Single In-House Hire</h3>
                        <p style="color: #64748b; font-size: 14px; margin-bottom: 20px;">One internal employee attempting
                            to manage your entire technology stack.</p>
                        <ul class="hd-compare-list">
                            <li>High fixed cost: $80,000–$110,000+ base salary plus benefits, taxes, and training</li>
                            <li>Single point of failure: no support when they are out sick, on vacation, or resign</li>
                            <li>Narrow skill set: one individual cannot master cloud, cybersecurity, compliance, and
                                helpdesk simultaneously</li>
                            <li>Limited 9-to-5 coverage with zero after-hours emergency response</li>
                            <li>Requires separate budget for enterprise monitoring tools, antivirus, and ticketing software
                            </li>
                        </ul>
                    </div>

                    <!-- Option 2: Mounteko Managed IT Partner -->
                    <div class="hd-compare-card card-mounteko">
                        <span class="hd-compare-badge">RECOMMENDED FOR SCALE</span>
                        <div class="hd-compare-icon"><i class="bi bi-people-fill"></i></div>
                        <h3 class="hd-compare-title">Mounteko Managed IT (MSP)</h3>
                        <p style="color: #64748b; font-size: 14px; margin-bottom: 20px;">A complete, multidisciplinary
                            engineering team dedicated to your business.</p>
                        <ul class="hd-compare-list">
                            <li>Predictable, flat-rate monthly investment with zero recruiting overhead or fringe benefits
                            </li>
                            <li>Complete team of Tier-1 to Tier-3 specialists in cloud, network architecture, and
                                cybersecurity</li>
                            <li>24/7/365 guaranteed coverage with SLA-backed 15-minute critical response times</li>
                            <li>Enterprise RMM, patch automation, SOC monitoring, and endpoint security tools included</li>
                            <li>Seamless scalability that flexes instantly as your team size and office footprint grow</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 4: ONE TEAM, EVERY IT NEED & INDUSTRY SPOTLIGHT -->
        <section class="hd-why-us">
            <div class="hd-why-us-container" style="max-width: 1200px;">
                <!-- Left: Image with Circle Overlay -->
                <div class="hd-why-us-left">
                    <div class="hd-why-us-img-frame">
                        <img src="{{ asset('home/assets/homepage/images/it-why-us-team.png') }}"
                            alt="Mounteko Managed IT Team">
                    </div>
                </div>

                <!-- Right: Content -->
                <div class="hd-why-us-right">
                    <span class="hd-why-us-tag">SINGLE-SOURCE ACCOUNTABILITY</span>
                    <h2 class="hd-why-us-title">One Team, Every IT Need</h2>
                    <p class="hd-why-us-text">
                        Juggling separate vendors for helpdesk support, network firewalls, cloud hosting, and software
                        licenses leads to finger-pointing whenever downtime occurs. Mounteko eliminates vendor friction by
                        serving as your single accountable IT partner. From daily employee tech support to enterprise cloud
                        migration and proactive cybersecurity, one call connects you directly to a senior engineer who owns
                        the resolution.
                    </p>

                    <div class="hd-check-grid">
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Single Point of Accountability
                        </div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> 15-Minute Response SLA</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> 24/7/365 Live US Engineers
                        </div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Automated Patch Management
                        </div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Transparent Monthly Reports
                        </div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Strategic Quarterly IT Reviews
                        </div>
                    </div>

                    <a href="{{ route('contactUs') }}" class="btn-hd-primary"
                        style="display: inline-block; margin-top: 10px;">Schedule an IT Consultation</a>
                </div>
            </div>

            <!-- Consumer Goods / DTC Industry Spotlight Card -->
            <div class="container" style="max-width: 1200px; margin: 40px auto 0; padding: 0 40px;">
                <div class="hd-industry-spotlight">
                    <div class="hd-industry-icon">
                        <i class="bi bi-cart-check"></i>
                    </div>
                    <div class="hd-industry-content">
                        <h4>Industry Spotlight: Consumer Goods & Fast-Growing DTC Brands</h4>
                        <p>
                            For a growing Direct-to-Consumer (DTC) or Consumer Goods company, scaling past 30–50 employees
                            quickly outpaces what one internal 'IT person' can reasonably support. Managing seasonal traffic
                            spikes, warehouse inventory synchronization, multichannel POS integrations, and remote customer
                            service teams requires 24/7 engineering depth. Mounteko provides the robust infrastructure and
                            rapid helpdesk support DTC brands need to scale without technical bottlenecks.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 5: HOW OUR MANAGED SERVICES WORK -->
        <section class="hd-workflow">
            <div class="hd-workflow-container">
                <div class="hd-workflow-header">
                    <span class="hd-workflow-tag">OUR ONBOARDING & DELIVERY PROCESS</span>
                    <h2 class="hd-workflow-title">How Our Managed IT Services <em>Work</em></h2>
                </div>

                <div class="hd-steps-row">
                    <!-- Step 1: Audit -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-audit.png') }}"
                                alt="IT Infrastructure Audit">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">1. Full IT Audit</h3>
                            <p class="hd-step-desc">Comprehensive evaluation of your current network, server health,
                                security posture, and license usage.</p>
                        </div>
                    </div>

                    <!-- Step 2: Plan -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-plan.png') }}"
                                alt="Strategic IT Planning">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">2. Custom SLA Roadmap</h3>
                            <p class="hd-step-desc">Tailoring an SLA-backed support plan, escalation matrix, and technology
                                roadmap aligned with your business goals.</p>
                        </div>
                    </div>

                    <!-- Step 3: Implement -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-implement.png') }}"
                                alt="Tooling Deployment">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">3. Tooling Deployment</h3>
                            <p class="hd-step-desc">Deploying enterprise RMM agents, automated patch management, and
                                helpdesk ticketing with zero downtime.</p>
                        </div>
                    </div>

                    <!-- Step 4: Manage & Support -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-manage.png') }}"
                                alt="24/7 Managed IT Support">
                        </div>
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">4. 24/7 Active Management</h3>
                            <p class="hd-step-desc">Continuous proactive monitoring, rapid helpdesk ticket resolution, and
                                monthly strategic health reviews.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 6: LATEST FROM OUR BLOG -->
        <section class="dev-blog-section">
            <div class="dev-blog-container">
                <span class="dev-blog-tag">IT INSIGHTS</span>
                <h2 class="dev-blog-title">Latest From Our Blog</h2>
                <div class="dev-blog-divider"></div>

                <div class="dev-blog-grid">
                    <!-- Post 1 -->
                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=700"
                                alt="IT Support Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-it-support">STRATEGY</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 12 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By IT Expert</span>
                            </div>
                            <h4 class="dev-blog-heading">How Proactive IT Support Prevents Costly Downtime for Growing
                                Businesses</h4>
                        </div>
                    </div>

                    <!-- Post 2 -->
                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=700"
                                alt="Managed IT Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-management">MANAGEMENT</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 15 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By Admin</span>
                            </div>
                            <h4 class="dev-blog-heading">The Strategic Advantage of 24/7 Infrastructure Monitoring</h4>
                        </div>
                    </div>

                    <!-- Post 3 -->
                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=700"
                                alt="Cybersecurity Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-security">SECURITY</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 20 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By Sec Lead</span>
                            </div>
                            <h4 class="dev-blog-heading">Why Timely Patch Management is Your Best Defense Against
                                Ransomware</h4>
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
                        <h2 class="hd-cta-banner-title">Ready to Streamline Your IT Operations?</h2>

                        <div class="hd-cta-contact-grid">
                            <!-- Phone -->
                            <div class="hd-cta-contact-item">
                                <div class="hd-cta-contact-icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div class="hd-cta-contact-info">
                                    <span>Call our engineering team</span>
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
                                alt="Managed IT Services Consultation">
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
