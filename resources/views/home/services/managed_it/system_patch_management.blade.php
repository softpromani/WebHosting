@extends('home.includes.layout')
@section('title', 'System Patch Management & Update Orchestration | Mounteko')

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
                            <i class="bi bi-shield-check"></i> PROACTIVE SECURITY & COMPLIANCE
                        </div>
                        <h1 class="hd-hero-title">Enterprise System Patch Management & Update Orchestration</h1>
                        <p class="hd-hero-desc">Fortify your infrastructure against evolving threats. Our automated patch deployment and rigorous testing protocols eliminate vulnerabilities without disrupting your business productivity.</p>

                        <!-- Quick Features Badges -->
                        <div class="hd-hero-badges">
                            <div class="hd-badge"><i class="bi bi-lightning-fill"></i> Zero-Day Response</div>
                            <div class="hd-badge"><i class="bi bi-calendar-event"></i> Automated Scheduling</div>
                            <div class="hd-badge"><i class="bi bi-shield-lock"></i> CVE Remediation</div>
                            <div class="hd-badge"><i class="bi bi-arrow-counterclockwise"></i> Rollback Protection</div>
                        </div>

                        <div class="hd-hero-btns">
                            <a href="{{ route('contactUs') }}" class="btn-hd-primary">Schedule Updates</a>
                            <a href="{{ route('contactUs') }}" class="btn-hd-outline">Learn More</a>
                        </div>
                    </div>

                    <!-- Right Column (Desktop Hero Image & Float Cards) -->
                    <div class="hd-hero-right">
                        <div class="hd-hero-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-support-specialist.png') }}"
                                alt="Patch Management Specialist" class="hd-hero-img">

                            <!-- Floating Card 1 -->
                            <div class="hd-float-card hd-float-1">
                                <div class="hd-float-icon"><i class="bi bi-graph-up-arrow"></i></div>
                                <div class="hd-float-content">
                                    <strong>99.9%</strong>
                                    <span>Patch Success Rate</span>
                                </div>
                            </div>

                            <!-- Floating Card 2 -->
                            <div class="hd-float-card hd-float-2">
                                <div class="hd-float-icon"><i class="bi bi-clock-history"></i></div>
                                <div class="hd-float-content">
                                    <strong>After-Hours</strong>
                                    <span>Deployment Standard</span>
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
                    <span class="hd-feature-tag">SECURITY FIRST</span>
                    <h2 class="hd-feature-title">Unified Vulnerability Remediation & Patch Governance</h2>
                    <p class="hd-feature-desc">We deliver a meticulous approach to software and firmware updates that balances security urgency with operational stability. From critical OS security patches to third-party application updates, we ensure your ecosystem is resilient and audit-ready.</p>

                    <ul class="hd-feature-list">
                        <li><i class="bi bi-check-circle-fill"></i> Automated Patch Testing & Sandbox Validation</li>
                        <li><i class="bi bi-check-circle-fill"></i> Critical CVE & Zero-Day Vulnerability Remediation</li>
                        <li><i class="bi bi-check-circle-fill"></i> Custom Maintenance Window Scheduling</li>
                        <li><i class="bi bi-check-circle-fill"></i> Firmware & Driver Lifecycle Oversight</li>
                    </ul>

                    <div class="hd-feature-actions">
                        <a href="{{ route('contactUs') }}" class="btn-hd-primary">Explore Patching Services</a>
                    </div>
                </div>

                <!-- Right Image (Collage) -->
                <div class="hd-feature-right">
                    <div class="hd-collage">
                        <!-- Top Image (Mobile) -->
                        <div class="collage-item item-top">
                            <img src="{{ asset('home/assets/homepage/images/it-support-mobile.png') }}" alt="Patch Support App">
                        </div>
                        <!-- Main Image (Team) -->
                        <div class="collage-item item-main">
                            <img src="{{ asset('home/assets/homepage/images/it-support-team.png') }}" alt="Vulnerability Team">
                        </div>
                        <!-- Left Image (Laptop) -->
                        <div class="collage-item item-left">
                            <img src="{{ asset('home/assets/homepage/images/it-support-laptop.png') }}"
                                alt="Patching Interface">
                        </div>
                        <!-- Bottom Image (Desktop) -->
                        <div class="collage-item item-bottom">
                            <img src="{{ asset('home/assets/homepage/images/it-support-desk.png') }}"
                                alt="Managed Patching">
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
                    <h2 class="hd-section-title" style="color:white; margin-bottom:15px;">Comprehensive Patch Management Services for Hybrid Workforces</h2>
                    <p class="hd-section-subtitle" style="color:#94a3b8; max-width:850px; margin: 0 auto;">Robust update strategies tailored to your compliance requirements, ensuring endpoint integrity across cloud and on-premise environments.
                    </p>
                </div>

                <div class="hd-services-grid">
                    <!-- Card 1: OS & Security Patch Deployment -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-support-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-windows"></i></div>
                        <h3 class="hd-service-title">OS & Security Patch Deployment</h3>
                        <p class="hd-service-text">
                            • Windows, Linux, MacOS updates<br>
                            • Critical security rollups<br>
                            • Emergency out-of-band patching
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 2: Third-Party Application Patching -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-network-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-box-seam"></i></div>
                        <h3 class="hd-service-title">Third-Party Application Patching</h3>
                        <p class="hd-service-text">
                            • Adobe, Java, Zoom, Browser updates<br>
                            • Vulnerability risk scoring<br>
                            • Exploit mitigation protocols
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 3: Pre-Deployment Staging & Testing -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-security-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-flask"></i></div>
                        <h3 class="hd-service-title">Pre-Deployment Staging & Testing</h3>
                        <p class="hd-service-text">
                            • Ring-based deployment groups<br>
                            • Application compatibility checks<br>
                            • Staged rollout protocols
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 4: Compliance & Audit Reporting -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-cloud-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-file-earmark-check"></i></div>
                        <h3 class="hd-service-title">Compliance & Audit Reporting</h3>
                        <p class="hd-service-text">
                            • Patch compliance dashboards<br>
                            • Proof of remediation logs<br>
                            • HIPAA, PCI-DSS alignment
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 5: Mobile Device & Endpoint Updates -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-backup-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-phone"></i></div>
                        <h3 class="hd-service-title">Mobile Device & Endpoint Updates</h3>
                        <p class="hd-service-text">
                            • iOS/Android security fixes<br>
                            • Remote workforce synchronization<br>
                            • Endpoint configuration management
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 6: Driver & Firmware Assurance -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-maint-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-cpu"></i></div>
                        <h3 class="hd-service-title">Driver & Firmware Assurance</h3>
                        <p class="hd-service-text">
                            • Server BIOS updates<br>
                            • Network appliance firmware<br>
                            • Performance stability patches
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
                    <span class="hd-workflow-tag">How it Works</span>
                    <h2 class="hd-workflow-title">Our Systematic Update Process</h2>
                </div>

                <div class="hd-steps-row">
                    <!-- Step 1: Assess & Inventory -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-audit.png') }}" alt="Assess">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">Assess & Inventory</h3>
                            <p class="hd-step-desc">Scan endpoints and servers to identify missing security patches, deprecated software versions, and active CVEs.</p>
                        </div>
                    </div>

                    <!-- Step 2: Prioritize & Test -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-plan.png') }}" alt="Prioritize">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">Prioritize & Test</h3>
                            <p class="hd-step-desc">Categorize updates by severity (Critical/Important/Moderate) and validate functionality in a staging environment.</p>
                        </div>
                    </div>

                    <!-- Step 3: Deploy Strategically -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-implement.png') }}"
                                alt="Deploy">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">Deploy Strategically</h3>
                            <p class="hd-step-desc">Execute ringed deployments during approved maintenance windows to minimize end-user impact and network strain.</p>
                        </div>
                    </div>

                    <!-- Step 4: Verify & Document -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-manage.png') }}" alt="Verify">
                        </div>
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">Verify & Document</h3>
                            <p class="hd-step-desc">Confirm successful installation and generate detailed reports to satisfy internal audits and regulatory standards.</p>
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
                        <img src="{{ asset('home/assets/homepage/images/it-why-us-team.png') }}" alt="Patching Experts">
                    </div>
                </div>

                <!-- Right: Content -->
                <div class="hd-why-us-right">
                    <span class="hd-why-us-tag">Why Choose Us</span>
                    <h2 class="hd-why-us-title">Why Our Patch Strategy Delivers Higher Security ROI</h2>
                    <p class="hd-why-us-text">
                        We bridge the gap between security alerts and system stability. Our process ensures that the fix doesn't break the workflow, providing a seamless path to compliance.
                    </p>

                    <div class="hd-feature-row">
                        <div class="hd-feature-box">
                            <div class="hd-feature-icon-circle"><i class="bi bi-shield-check"></i></div>
                            <span class="hd-feature-label">Expert security<br>compliance</span>
                        </div>
                        <div class="hd-feature-box">
                            <div class="hd-feature-icon-circle"><i class="bi bi-lightning-charge"></i></div>
                            <span class="hd-feature-label">Rapid threat<br>response</span>
                        </div>
                    </div>

                    <div class="hd-check-grid">
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Vulnerability Window Reduction</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Legacy System Support</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Compliance Posture Management</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Predictable Maintenance</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Vendor Risk Mitigation</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Executive Dashboard Access</div>
                    </div>

                    <a href="{{ route('contactUs') }}" class="hd-btn-learn">Learn More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </section>

        <!-- SECTION 6: LATEST FROM OUR BLOG -->
        <section class="dev-blog-section">
            <div class="dev-blog-container">
                <span class="dev-blog-tag">SECURITY INSIGHTS</span>
                <h2 class="dev-blog-title">Latest From Our Blog</h2>
                <div class="dev-blog-divider"></div>

                <div class="dev-blog-grid">
                    <!-- Post 1 -->
                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=700" alt="Security Patching Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-it-support">SECURITY</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 18 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By Sec Expert</span>
                            </div>
                            <h4 class="dev-blog-heading">The Hidden Risks of Delayed Security Patching</h4>
                        </div>
                    </div>

                    <!-- Post 2 -->
                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=700" alt="Vulnerability Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-management">COMPLIANCE</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 22 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By Compliance Lead</span>
                            </div>
                            <h4 class="dev-blog-heading">Staying Ahead of Zero-Day Threats in 2024</h4>
                        </div>
                    </div>

                    <!-- Post 3 -->
                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=700" alt="Managed Updates Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-security">UPDATES</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 25 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By System Admin</span>
                            </div>
                            <h4 class="dev-blog-heading">Automated vs. Manual Patching: Which is Better?</h4>
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
                            <path d="M20 20C40 10 60 40 50 60C45 70 30 65 35 50C40 35 60 45 80 80M80 80L70 80M80 80L80 70" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>

                    <!-- Left: Text + Contact -->
                    <div class="hd-cta-left">
                        <h2 class="hd-cta-banner-title">Strengthen your compliance posture today!</h2>
                        
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
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=600" alt="Vulnerability Management">
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
