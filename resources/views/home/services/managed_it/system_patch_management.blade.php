@extends('home.includes.layout')
@section('title', 'IT Patch Management & Update Services | Mounteko')
@section('meta-description', "Automated patch management and system updates for growing US businesses — close security
    gaps before they're exploited.")
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
                            <i class="bi bi-shield-check"></i> PROACTIVE VULNERABILITY REMEDIATION
                        </div>
                        <h1 class="hd-hero-title">IT Patch Management & Update Services</h1>
                        <p class="hd-hero-desc">Unpatched software is one of the most common ways attackers get into a
                            business — not through some sophisticated exploit, but through a known vulnerability that's had
                            a fix available for months. Mounteko manages patching and updates across your systems
                            automatically, closing security gaps on a schedule instead of whenever someone remembers.</p>

                        <!-- Quick Features Badges -->
                        <div class="hd-hero-badges">
                            <div class="hd-badge"><i class="bi bi-lightning-fill"></i> Risk-Prioritized CVEs</div>
                            <div class="hd-badge"><i class="bi bi-calendar-event"></i> Zero-Disruption Schedules</div>
                            <div class="hd-badge"><i class="bi bi-shield-lock"></i> Sandbox Compatibility Testing</div>
                            <div class="hd-badge"><i class="bi bi-arrow-counterclockwise"></i> Automated Rollback Guard
                            </div>
                        </div>

                        <div class="hd-hero-btns">
                            <a href="{{ route('contactUs') }}" class="btn-hd-primary">Schedule a Patch Audit</a>
                            <a href="#patch-approach" class="btn-hd-outline">Our Patching Strategy</a>
                        </div>
                    </div>

                    <!-- Right Column (Desktop Hero Image & Float Cards) -->
                    <div class="hd-hero-right">
                        <div class="hd-hero-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-support-specialist.png') }}"
                                alt="IT Patch Management Specialist" class="hd-hero-img">

                            <!-- Floating Card 1 -->
                            <div class="hd-float-card hd-float-1">
                                <div class="hd-float-icon"><i class="bi bi-shield-check"></i></div>
                                <div class="hd-float-content">
                                    <strong>100% Verified</strong>
                                    <span>Pre-Tested Updates</span>
                                </div>
                            </div>

                            <!-- Floating Card 2 -->
                            <div class="hd-float-card hd-float-2">
                                <div class="hd-float-icon"><i class="bi bi-clock-history"></i></div>
                                <div class="hd-float-content">
                                    <strong>Off-Hours</strong>
                                    <span>Zero Workday Reboots</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 2: SECURITY PATCH MANAGEMENT, PRIORITIZED BY RISK -->
        <section id="patch-approach" class="hd-feature">
            <div class="hd-feature-grid">
                <!-- Left Content -->
                <div class="hd-feature-left">
                    <span class="hd-feature-tag">RISK-BASED PRIORITIZATION</span>
                    <h2 class="hd-feature-title">Security Patch Management, Prioritized by Risk</h2>
                    <p class="hd-feature-desc">
                        Not all software updates are equally urgent. Flooding systems with every minor feature update
                        creates operational instability, while delaying a critical security patch leaves your network
                        exposed to active exploits. Mounteko prioritizes updates by real-world threat severity —
                        fast-tracking critical Common Vulnerabilities and Exposures (CVEs) while strategically scheduling
                        standard maintenance.
                    </p>

                    <ul class="hd-feature-list">
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Critical CVE & Zero-Day Fast Tracking:</strong>
                            High-risk security vulnerabilities are tested and deployed rapidly to close exploit windows.
                        </li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Severity-Tiered Scheduling:</strong>
                            Distinguishing critical security patches from non-essential feature rollouts.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>CVSS Threat Scoring Integration:</strong>
                            Utilizing standardized vulnerability scores to determine precise rollout timelines.</li>
                        <li><i class="bi bi-check-circle-fill"></i> <strong>Audit-Ready Documentation:</strong> Complete
                            timestamped records of every update deployed for regulatory compliance.</li>
                    </ul>

                    <div class="hd-feature-actions">
                        <a href="{{ route('contactUs') }}" class="btn-hd-primary">Explore Patching Governance</a>
                    </div>
                </div>

                <!-- Right Image (Collage) -->
                <div class="hd-feature-right">
                    <div class="hd-collage">
                        <!-- Top Image (Mobile) -->
                        <div class="collage-item item-top">
                            <img src="{{ asset('home/assets/homepage/images/it-support-mobile.png') }}"
                                alt="Patch Monitoring Mobile">
                        </div>
                        <!-- Main Image (Team) -->
                        <div class="collage-item item-main">
                            <img src="{{ asset('home/assets/homepage/images/it-support-team.png') }}"
                                alt="Security Patching Team">
                        </div>
                        <!-- Left Image (Laptop) -->
                        <div class="collage-item item-left">
                            <img src="{{ asset('home/assets/homepage/images/it-support-laptop.png') }}"
                                alt="Automated Patching Console">
                        </div>
                        <!-- Bottom Image (Desktop) -->
                        <div class="collage-item item-bottom">
                            <img src="{{ asset('home/assets/homepage/images/it-support-desk.png') }}"
                                alt="Enterprise IT Patch Management">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: AUTOMATED PATCH MANAGEMENT ACROSS YOUR ENVIRONMENT (6-CARD GRID) -->
        <section class="hd-services">
            <div class="hd-services-container">
                <div class="hd-section-header">
                    <span class="hd-feature-tag" style="background:#eff6ff;">COMPLETE ENVIRONMENT COVERAGE</span>
                    <h2 class="hd-section-title" style="color:white; margin-bottom:15px;">Automated Patch Management Across
                        Your Environment</h2>
                    <p class="hd-section-subtitle" style="color:#94a3b8; max-width:850px; margin: 0 auto;">
                        Vulnerabilities do not stop at operating systems. Mounteko delivers unified, automated patch
                        management across servers, workstations, third-party software, and network hardware.
                    </p>
                </div>

                <div class="hd-services-grid">
                    <!-- Card 1: Server Operating Systems -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-support-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-hdd-network"></i></div>
                        <h3 class="hd-service-title">Server Operating Systems</h3>
                        <p class="hd-service-text">
                            Automated, verified patching for Windows Server and Linux enterprise distributions during
                            off-peak maintenance windows with snapshot protection.
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 2: Workstations & Endpoints -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-network-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-laptop"></i></div>
                        <h3 class="hd-service-title">Workstations & Laptops</h3>
                        <p class="hd-service-text">
                            Silent background updates for Windows and macOS devices across remote and in-office staff,
                            preventing user interruption and forced midday restarts.
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 3: Third-Party Applications -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-security-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-box-seam"></i></div>
                        <h3 class="hd-service-title">Third-Party Applications</h3>
                        <p class="hd-service-text">
                            Patching common entry points including web browsers, Adobe Acrobat, Zoom, Java, and 7-Zip —
                            where over 80% of endpoint exploits originate.
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 4: Network Appliance Firmware -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-cloud-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-router"></i></div>
                        <h3 class="hd-service-title">Network & Firewall Firmware</h3>
                        <p class="hd-service-text">
                            Scheduled security firmware updates for boundary firewalls, switches, and Wi-Fi controllers to
                            close perimeter network vulnerabilities.
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 5: Cloud & Virtual Instances -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-backup-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-cloud-check"></i></div>
                        <h3 class="hd-service-title">Cloud Virtual Machines</h3>
                        <p class="hd-service-text">
                            Synchronized patch baselines for AWS EC2, Azure VMs, and hybrid cloud compute nodes aligned with
                            cloud security best practices.
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>

                    <!-- Card 6: Compliance & Audit Reporting -->
                    <div class="hd-service-card">
                        <div class="hd-card-bg"
                            style="background-image: url('{{ asset('home/assets/homepage/images/it-card-maint-bg.png') }}');">
                        </div>
                        <div class="hd-service-icon"><i class="bi bi-file-earmark-check"></i></div>
                        <h3 class="hd-service-title">Compliance Audit Logging</h3>
                        <p class="hd-service-text">
                            Detailed compliance dashboards and exportable reports that prove your systems satisfy regulatory
                            standards like HIPAA, PCI-DSS, and SOC 2.
                        </p>
                        <a href="{{ route('contactUs') }}" class="hd-service-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 4: PATCHING WITHOUT BREAKING THINGS & BANKING/FINANCE SPOTLIGHT -->
        <section class="hd-why-us">
            <div class="hd-why-us-container" style="max-width: 1200px;">
                <!-- Left: Image with Frame Overlay -->
                <div class="hd-why-us-left">
                    <div class="hd-why-us-img-frame">
                        <img src="{{ asset('home/assets/homepage/images/it-why-us-team.png') }}"
                            alt="Mounteko Patch Testing Team">
                    </div>
                </div>

                <!-- Right: Content -->
                <div class="hd-why-us-right">
                    <span class="hd-why-us-tag">STABILITY & ZERO DISRUPTION</span>
                    <h2 class="hd-why-us-title">Patching Without Breaking Things</h2>
                    <p class="hd-why-us-text">
                        The number one reason businesses delay patching is fear: fear that a bad OS update or buggy
                        application patch will crash critical line-of-business software, corrupt databases, or trigger
                        endless reboot loops. Mounteko removes this risk through staged, ring-based deployment. Every update
                        is validated in isolated sandbox environments, deployed first to a pilot ring, and pushed to
                        production only after compatibility is 100% verified — backed by automated snapshots and instant
                        rollback safeguards.
                    </p>

                    <div class="hd-check-grid">
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Sandbox Compatibility
                            Pre-Testing</div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Ring-Based Phased Deployments
                        </div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Pre-Patch Snapshots & Backups
                        </div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Off-Hours Maintenance Windows
                        </div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Automated Rollback Protection
                        </div>
                        <div class="hd-check-item"><i class="bi bi-check-circle-fill"></i> Post-Deployment Health Checks
                        </div>
                    </div>

                    <a href="{{ route('contactUs') }}" class="btn-hd-primary"
                        style="display: inline-block; margin-top: 10px;">Protect Your Infrastructure</a>
                </div>
            </div>

            <!-- Banking & Financial Services Industry Spotlight Card -->
            <div class="container" style="max-width: 1200px; margin: 40px auto 0; padding: 0 40px;">
                <div class="hd-industry-spotlight">
                    <div class="hd-industry-icon">
                        <i class="bi bi-bank"></i>
                    </div>
                    <div class="hd-industry-content">
                        <h4>Industry Spotlight: Banking, Wealth Management & Financial Services</h4>
                        <p>
                            For banks, investment advisory firms, and financial institutions, unpatched systems are the
                            single most common audit finding during regulatory examinations (FINRA, SEC, FDIC, SOC 2).
                            Regulators require documented, systematic proof that critical CVEs are patched within strict
                            timeframes. Mounteko provides full-cycle patch governance with tamper-evident audit reporting,
                            proving continuous compliance across every endpoint and server without interrupting trading
                            hours or client services.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 5: HOW OUR PATCH MANAGEMENT PROCESS WORKS -->
        <section class="hd-workflow">
            <div class="hd-workflow-container">
                <div class="hd-workflow-header">
                    <span class="hd-workflow-tag">METHODICAL EXECUTION</span>
                    <h2 class="hd-workflow-title">How Our Patch Management Process <em>Works</em></h2>
                </div>

                <div class="hd-steps-row">
                    <!-- Step 1: Scan -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-audit.png') }}"
                                alt="Vulnerability Scanning">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">1. Vulnerability Scan</h3>
                            <p class="hd-step-desc">Continuous telemetry scans all servers and workstations to identify
                                missing security patches and active CVEs.</p>
                        </div>
                    </div>

                    <!-- Step 2: Prioritize & Test -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-plan.png') }}"
                                alt="Sandbox Testing">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">2. Sandbox Testing</h3>
                            <p class="hd-step-desc">Critical updates are prioritized and tested against known application
                                dependencies in an isolated sandbox.</p>
                        </div>
                    </div>

                    <!-- Step 3: Staged Rollout -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-implement.png') }}"
                                alt="Staged Ring Deployment">
                        </div>
                        <img src="https://img.icons8.com/ios/50/2563eb/long-arrow-right.png" class="hd-step-arrow"
                            alt="arrow">
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">3. Staged Ring Deployment</h3>
                            <p class="hd-step-desc">Patches are rolled out in phases during approved off-hours maintenance
                                windows to prevent workday downtime.</p>
                        </div>
                    </div>

                    <!-- Step 4: Verify & Audit -->
                    <div class="hd-step-item">
                        <div class="hd-step-img-wrap">
                            <img src="{{ asset('home/assets/homepage/images/it-workflow-manage.png') }}"
                                alt="Verification and Compliance Logging">
                        </div>
                        <div class="hd-step-info">
                            <h3 class="hd-step-title">4. Verification & Audit Logs</h3>
                            <p class="hd-step-desc">Post-deployment health checks confirm service stability, and compliance
                                logs are updated for regulatory inspection.</p>
                        </div>
                    </div>
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
                            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=700"
                                alt="Security Patching Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-it-support">SECURITY</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 18 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By Sec Expert</span>
                            </div>
                            <h4 class="dev-blog-heading">The Hidden Risks of Delayed Security Patching for Growing
                                Businesses</h4>
                        </div>
                    </div>

                    <!-- Post 2 -->
                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=700"
                                alt="Vulnerability Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-management">COMPLIANCE</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 22 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By Compliance Lead</span>
                            </div>
                            <h4 class="dev-blog-heading">Staying Ahead of Zero-Day Threats with Automated Patch Governance
                            </h4>
                        </div>
                    </div>

                    <!-- Post 3 -->
                    <div class="dev-blog-card">
                        <div class="dev-blog-img">
                            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=700"
                                alt="Managed Updates Blog">
                        </div>
                        <div class="dev-blog-body">
                            <span class="dev-blog-cat cat-security">UPDATES</span>
                            <div class="dev-blog-meta">
                                <span><i class="bi bi-calendar3"></i> 25 Mar, 2024</span>
                                <span><i class="bi bi-person"></i> By System Admin</span>
                            </div>
                            <h4 class="dev-blog-heading">Automated vs. Manual Patching: Why Staged Rollouts Matter</h4>
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
                        <h2 class="hd-cta-banner-title">Close Your Security Gaps Before Attackers Find Them</h2>

                        <div class="hd-cta-contact-grid">
                            <!-- Phone -->
                            <div class="hd-cta-contact-item">
                                <div class="hd-cta-contact-icon">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div class="hd-cta-contact-info">
                                    <span>Call our security engineers</span>
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
                                alt="Patch Management and Vulnerability Assessment">
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
