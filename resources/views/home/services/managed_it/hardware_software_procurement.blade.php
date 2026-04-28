@extends('home.includes.layout')
@section('title', 'Hardware & Software Procurement | Mounteko')

@section('header-area')
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/new_home_custom.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/it_support_helpdesk.css') }}">
@endsection

@section('content')
    <main class="hd-main">

        <!-- SECTION 1: PREMIUM DARK HERO HEADER -->
        <section class="hd-hero">
            <div class="hd-hero-container">
                <div class="hd-hero-row">
                    <!-- Left Column -->
                    <div class="hd-hero-left">
                        <div class="hd-hero-tag">
                            <i class="bi bi-shield-check"></i> VENDOR-NEUTRAL SOURCING EXCELLENCE
                        </div>
                        <h1 class="hd-hero-title">Strategic Hardware & Software Procurement & Lifecycle Management</h1>
                        <p class="hd-hero-desc">Optimize your technology investments with transparent, agnostic sourcing. We
                            leverage global partner networks to secure the right technology at the right price—eliminating
                            vendor lock-in.</p>

                        <!-- Quick Features Badges -->
                        <div class="hd-hero-badges">
                            <div class="hd-badge"><i class="bi bi-briefcase"></i> Vendor-Agnostic Advisory</div>
                            <div class="hd-badge"><i class="bi bi-graph-down"></i> Cost Optimization Focus</div>
                            <div class="hd-badge"><i class="bi bi-shield-check"></i> License Compliance Experts</div>
                            <div class="hd-badge"><i class="bi bi-recycle"></i> Asset Lifecycle Management</div>
                        </div>

                        <div class="hd-hero-btns">
                            <a href="{{ route('contactUs') }}" class="btn-hd-primary">Consult Our Experts</a>
                            <a href="{{ route('contactUs') }}" class="btn-hd-outline">Learn More</a>
                        </div>
                    </div>

                    <!-- Right Column (Desktop Hero Image & Float Cards) -->
                    <div class="hd-hero-right">
                        <div class="hd-hero-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-support-specialist.png') }}"
                                alt="Procurement Specialist" class="hd-hero-img">

                            <!-- Floating Card 1 -->
                            <div class="hd-float-card hd-float-1">
                                <div class="hd-float-icon"><i class="bi bi-truck"></i></div>
                                <div class="hd-float-content">
                                    <strong>On-Time Delivery</strong>
                                    <span>Logistics</span>
                                </div>
                            </div>

                            <!-- Floating Card 2 -->
                            <div class="hd-float-card hd-float-2">
                                <div class="hd-float-icon"><i class="bi bi-headset"></i></div>
                                <div class="hd-float-content">
                                    <strong>Dedicated</strong>
                                    <span>Procurement Desk</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 2: UNIFIED FEATURE SECTION -->
        <section class="hd-feature">
            <div class="hd-feature-grid">
                <!-- Left Content -->
                <div class="hd-feature-left">
                    <span class="hd-feature-tag">PROCUREMENT</span>
                    <h2 class="hd-feature-title">Unified Procurement & High-Performance Asset Management</h2>
                    <p class="hd-feature-desc">We provide a comprehensive suite of procurement services designed to
                        eliminate waste and streamline your supply chain. From identifying hardware specifications to
                        negotiating complex enterprise software agreements, we serve as your outsourced IT purchasing
                        department.</p>

                    <ul class="hd-feature-list">
                        <li><i class="bi bi-check-circle-fill"></i> Strategic Hardware Sourcing & Fulfillment</li>
                        <li><i class="bi bi-check-circle-fill"></i> Software License Negotiation & True-Up Support</li>
                        <li><i class="bi bi-check-circle-fill"></i> Vendor Management & RFP Administration</li>
                        <li><i class="bi bi-check-circle-fill"></i> End-of-Life Recycling & IT Asset Disposition (ITAD)</li>
                    </ul>

                    <div class="hd-feature-actions">
                        <a href="{{ route('contactUs') }}" class="btn-hd-primary">Explore Procurement Services</a>
                    </div>
                </div>

                <!-- Right Image (Collage) -->
                <div class="hd-feature-right">
                    <div class="hd-collage">
                        <!-- Top Image (Mobile) -->
                        <div class="collage-item item-top">
                            <img src="{{ asset('home/assets/homepage/images/it-support-mobile.png') }}"
                                alt="Procurement Mobile">
                        </div>
                        <!-- Main Image (Team) -->
                        <div class="collage-item item-main">
                            <img src="{{ asset('home/assets/homepage/images/it-support-team.png') }}"
                                alt="Procurement Team">
                        </div>
                        <!-- Left Image (Laptop) -->
                        <div class="collage-item item-left">
                            <img src="{{ asset('home/assets/homepage/images/it-support-laptop.png') }}"
                                alt="Procurement Interface">
                        </div>
                        <!-- Bottom Image (Desktop) -->
                        <div class="collage-item item-bottom">
                            <img src="{{ asset('home/assets/homepage/images/it-support-desk.png') }}"
                                alt="Managed Sourcing">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: PREMIUM DARK SERVICE TYPES (6-CARD GRID) -->
        <section class="hd-services">
            <div class="hd-services-container">
                <div class="hd-section-header">
                    <span class="hd-feature-tag" style="background:#eff6ff;">WHAT WE COVER</span>
                    <h2 class="hd-section-title" style="color:white; margin-bottom:15px;">Comprehensive Procurement
                        Solutions for Modern Enterprises</h2>
                    <p class="hd-section-subtitle" style="color:#94a3b8; max-width:850px; margin: 0 auto;">Strategic
                        sourcing solutions designed to reduce spend and ensure hardware/software standardization across your
                        organization.
                    </p>
                </div>

                <div class="hd-services-grid">
                    <!-- Card 1: Hardware Procurement -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-support-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-laptop"></i></div>
                        <h3 class="hd-service-title">Hardware Procurement</h3>
                        <p class="hd-service-text">
                            • Workstations & Mobile Fleet<br>
                            • Server & Storage Infrastructure<br>
                            • Networking Equipment Supply Chain
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 2: Software Licensing -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-network-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-file-code"></i></div>
                        <h3 class="hd-service-title">Software Licensing</h3>
                        <p class="hd-service-text">
                            • Microsoft 365 & Volume Licensing<br>
                            • SaaS Management & Renewals<br>
                            • Compliance Auditing & Optimization
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 3: Vendor Governance -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-security-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-briefcase"></i></div>
                        <h3 class="hd-service-title">Vendor Governance</h3>
                        <p class="hd-service-text">
                            • Multi-Vendor Sourcing Strategy<br>
                            • Contract Lifecycle Management<br>
                            • Price Benchmarking & Validation
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 4: Lifecycle Management -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-cloud-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-arrow-repeat"></i></div>
                        <h3 class="hd-service-title">Lifecycle Management</h3>
                        <p class="hd-service-text">
                            • Imaging & Configuration Services<br>
                            • Warranty Administration<br>
                            • Secure Chain of Custody
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 5: Asset Staging & Logistics -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-backup-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-box-seam"></i></div>
                        <h3 class="hd-service-title">Asset Staging & Logistics</h3>
                        <p class="hd-service-text">
                            • Kitting & Deployment Readiness<br>
                            • Warehousing & Inventory Control<br>
                            • Just-in-Time Delivery
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 6: End-of-Life Services -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-maint-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-trash"></i></div>
                        <h3 class="hd-service-title">End-of-Life Services</h3>
                        <p class="hd-service-text">
                            • Secure Data Destruction<br>
                            • Responsible E-Waste Recycling<br>
                            • Trade-In & Buy-Back Programs
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 4: HOW OUR MANAGED SERVICES WORK (CIRCULAR WORKFLOW) -->
        <section class="hd-workflow">
            <div class="hd-workflow-container">
                <div class="hd-workflow-header">
                    <span class="hd-workflow-tag">HOW IT WORKS</span>
                    <h2 class="hd-workflow-title">Check Out Our Procurement Process</h2>
                </div>

                <div class="hd-steps-row">
                    <!-- Step 1: Discovery & Needs Analysis -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-audit.png') }}" alt="Discovery">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">Discovery & Needs Analysis</h3>
                            <p class="hd-step-desc">Assess current hardware refresh cycles and software utilization metrics
                                to identify over-spending and gaps.</p>
                        </div>
                    </div>

                    <!-- Step 2: Sourcing & Negotiation -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-plan.png') }}" alt="Sourcing">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">Sourcing & Negotiation</h3>
                            <p class="hd-step-desc">Leverage deep distributor relationships to secure competitive bids,
                                ensuring cost avoidance on every line item.</p>
                        </div>
                    </div>

                    <!-- Step 3: Staging & Configuration -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-implement.png') }}" alt="Staging">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">Staging & Configuration</h3>
                            <p class="hd-step-desc">Hardware is imaged, asset-tagged, and kitted in our secure facility for
                                frictionless deployment.</p>
                        </div>
                    </div>

                    <!-- Step 4: Lifecycle Optimization -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-manage.png') }}" alt="Lifecycle">
                        </div>
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">Lifecycle Optimization</h3>
                            <p class="hd-step-desc">Proactive monitoring of warranties, license expirations, and end-of-life
                                dates to maintain continuous compliance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 5: WHY CHOOSE US (EXPERIENCE SHOWCASE) -->
        <section class="hd-why-us">
            <div class="hd-why-us-container">
                <!-- Left: Image with Circle Overlay -->
                <div class="hd-why-us-left">
                    <div class="hd-why-us-img-frame">
                        <img src="{{ asset('home/assets/homepage/images/it-why-us-team.png') }}" alt="Sourcing Experts">
                    </div>
                </div>

                <!-- Right: Content -->
                <div class="hd-why-us-right">
                    <span class="hd-why-us-tag">WHY CHOOSE US</span>
                    <h2 class="hd-why-us-title">We Leverage 10+ Years of Sourcing Expertise</h2>
                    <p class="hd-why-us-text">
                        We deliver strategic procurement that balances performance with fiscal responsibility. Our approach
                        ensures you acquire the tools needed for success without the administrative burden or hidden fees.
                    </p>

                    <div class="hd-feature-row">
                        <div class="hd-feature-box">
                            <div class="hd-feature-icon-circle"><i class="bi bi-file-earmark-text"></i></div>
                            <span class="hd-feature-label">Contract Negotiation<br>Expertise</span>
                        </div>
                        <div class="hd-feature-box">
                            <div class="hd-feature-icon-circle"><i class="bi bi-display"></i></div>
                            <span class="hd-feature-label">Hardware Standardization<br>Advisory</span>
                        </div>
                    </div>

                    <div class="hd-check-grid">
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Vendor Price Benchmarking</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Volume License Optimization</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Secure IT Asset Disposition
                            (ITAD)</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Custom Configuration & Imaging
                        </div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Global Fulfillment Capabilities
                        </div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Warranty & Support Management
                        </div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Contract Negotiation Expertise
                        </div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Hardware Standardization Advisory
                        </div>
                    </div>

                    <a href="{{ route('contactUs') }}" class="hd-btn-learn">Learn More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </section>

        <!-- SECTION 6: LATEST FROM OUR BLOG -->
        <section class="dev-blog-section">
            <div class="dev-blog-container">
                <span class="dev-blog-tag">PROCUREMENT INSIGHTS</span>
                <h2 class="dev-blog-title">Latest From Our Blog</h2>
                <div class="dev-blog-divider"></div>

                <div class="dev-blog-grid">
                    <!-- Post 1 -->
                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=700"
                                alt="Procurement Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-it-support">SOURCING</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 20 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By Sourcing Expert</span>
                            </div>
                            <h4 class="dev-blog-heading">How to Avoid Vendor Lock-In During Procurement</h4>
                        </div>
                    </div>

                    <!-- Post 2 -->
                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=700"
                                alt="Lifecycle Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-management">LIFECYCLE</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 24 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By Asset Manager</span>
                            </div>
                            <h4 class="dev-blog-heading">The True Cost of Ignoring IT Asset Lifecycle Management</h4>
                        </div>
                    </div>

                    <!-- Post 3 -->
                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=700"
                                alt="Software Licensing Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-security">LICENSING</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 28 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By Compliance Lead</span>
                            </div>
                            <h4 class="dev-blog-heading">Navigating Complex Microsoft 365 Licensing Agreements</h4>
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
                        <h2 class="hd-cta-banner-title">Optimize your IT supply chain today!</h2>

                        <div class="hd-cta-contact-grid">
                            <!-- Phone -->
                            <div class="hd-cta-contact-item">
                                <div class="hd-cta-contact-icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div class="hd-cta-contact-info">
                                    <span>Get contact now</span>
                                    <strong>+123 456 789</strong>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="hd-cta-contact-item">
                                <div class="hd-cta-contact-icon">
                                    <i class="bi bi-envelope-at-fill"></i>
                                </div>
                                <div class="hd-cta-contact-info">
                                    <span>Sent e-mail</span>
                                    <strong>info@domainname.com</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Framed Image -->
                    <div class="hd-cta-right">
                        <div class="hd-cta-image-frame">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=600"
                                alt="Procurement Management">
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection