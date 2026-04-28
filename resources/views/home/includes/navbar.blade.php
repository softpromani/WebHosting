<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}"><img src="{{ asset('storage/' . settingValue('logo')) }}" alt=""></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link  " href="{{ route('home') }}">Home</a></li>
                {{-- <li><a class="nav-link  " href="{{ route('aboutUs') }}">About</a></li> --}}

                <li class="dropdown mega-menu-item">
                    <a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                    <div class="mega-menu-wrapper">
                        <div class="mega-menu-container">
                            <div class="mega-menu-inner">
                                <!-- Sidebar -->
                                <div class="mega-menu-sidebar">
                                    <div class="mega-cat-link active" data-target="mega-tab-network"
                                        onclick="window.location.href='{{ route('services.network-architecture') }}'">
                                        <span>Network Solutions</span>
                                        <i class="bi bi-chevron-right arrow-icon"></i>
                                    </div>
                                    <div class="mega-cat-link" data-target="mega-tab-cybersecurity"
                                        onclick="window.location.href='{{ route('security') }}'">
                                        <span>Security & Firewall</span>
                                        <i class="bi bi-chevron-right arrow-icon"></i>
                                    </div>
                                    <div class="mega-cat-link" data-target="mega-tab-software"
                                        onclick="window.location.href='{{ route('services.custom_software') }}'">
                                        <span>Software & Web Development</span>
                                        <i class="bi bi-chevron-right arrow-icon"></i>
                                    </div>
                                    <div class="mega-cat-link" data-target="mega-tab-cloud"
                                        onclick="window.location.href='{{ route('services.cloud_architecture') }}'">
                                        <span>Cloud & IT Infrastructure</span>
                                        <i class="bi bi-chevron-right arrow-icon"></i>
                                    </div>
                                    <div class="mega-cat-link" data-target="mega-tab-managed"
                                        onclick="window.location.href='{{ route('services.managed_it') }}'">
                                        <span>Managed IT Services</span>
                                        <i class="bi bi-chevron-right arrow-icon"></i>
                                    </div>
                                    <div class="mega-cat-link" data-target="mega-tab-consulting">
                                        <span>AI Integration & Business Automation</span>
                                        <i class="bi bi-chevron-right arrow-icon"></i>
                                    </div>
                                </div>

                                <!-- Content Area -->
                                <div class="mega-menu-details">
                                    <div id="mega-tab-network" class="mega-cat-content active">
                                        <h4 style="cursor: pointer;"
                                            onclick="window.location.href='{{ route('services.network-architecture') }}'">
                                            Network Solutions</h4>
                                        <div class="content-grid">
                                            <a href="{{ route('services.network-architecture') }}">Network architecture
                                                design (LAN, WAN, SD-WAN)</a>
                                            <a href="{{ route('services.enterprise-wireless-solutions') }}">Enterprise
                                                wireless solutions and implementation</a>
                                            <a href="{{ route('services.vpn-remote-access') }}">VPN setup and remote
                                                access solutions</a>
                                            <a href="{{ route('services.network-monitoring') }}">Network monitoring and
                                                performance optimization</a>
                                            <a href="{{ route('services.firewall-router-configuration') }}">Firewall &
                                                router configuration</a>
                                            <a href="{{ route('services.disaster-recovery-redundancy') }}">Disaster
                                                recovery & network redundancy planning</a>
                                        </div>
                                    </div>
                                    <div id="mega-tab-cybersecurity" class="mega-cat-content">
                                        <h4 style="cursor: pointer;"
                                            onclick="window.location.href='{{ route('security') }}'">Cybersecurity
                                            Services</h4>
                                        <div class="content-grid">
                                            <a href="{{ route('services.security-audits') }}">Firewall Setup &
                                                Configuration</a>
                                            <a href="{{ route('services.vpn-setup-remote-access') }}">VPN Setup & Remote
                                                Access Security</a>
                                            <a href="{{ route('services.cloud-security-firewall') }}">Cloud Security &
                                                Firewall Protection</a>
                                            <a href="{{ route('services.network-intrusion-detection') }}">Network
                                                Security configuration</a>
                                            <a href="{{ route('services.endpoint-protection') }}">Threat
                                                Detection, Prevention & Endpoint Security </a>
                                            <a href="{{ route('services.soc_setup_monitoring') }}">Security Audit &
                                                Vulnerability Scan</a>
                                            <a href="{{ route('services.incident_response_recovery') }}">Firewall
                                                Monitoring & management</a>
                                            <a href="{{ route('services.email-phishing-protection') }}">Email &
                                                Application Security</a>
                                        </div>
                                    </div>
                                    <div id="mega-tab-software" class="mega-cat-content">
                                        <h4 style="cursor: pointer;"
                                            onclick="window.location.href='{{ route('services.custom_software') }}'">
                                            Software & Web Development</h4>
                                        <div class="content-grid">
                                            <a href="{{ route('services.custom_software') }}">Website Design &
                                                Development</a>
                                            <a href="{{ route('services.ecommerce_development') }}">E-commerce Development</a>
                                            <a href="{{ route('services.custom_web_applications') }}">Custom Software & Web Applications</a>
                                            <a href="{{ route('services.api_development') }}">API Development & System Integration</a>
                                            <a href="{{ route('services.website_maintenance') }}">Website Maintenance & Support</a>
                                            <a href="{{ route('services.web_performance_seo') }}">Web Performance, SEO & Optimization</a>
                                        </div>
                                    </div>
                                    <div id="mega-tab-cloud" class="mega-cat-content">
                                        <h4 style="cursor: pointer;"
                                            onclick="window.location.href='{{ route('services.cloud_architecture') }}'">
                                            Cloud & IT Infrastructure</h4>
                                        <div class="content-grid">
                                            <a href="{{ route('services.cloud_architecture') }}">Cloud Setup, Migration
                                                & Deployment</a>
                                            <a href="{{ route('services.backup_disaster_recovery') }}">Backup, Disaster Recovery & Data Protection</a>
                                            <a href="{{ route('services.server_infrastructure_management') }}">Server & Infrastructure Management</a>
                                            <a href="{{ route('services.it_audit_consulting') }}">IT Audit, Consulting & Cost Optimization</a>
                                            <a href="{{ route('services.cloud_security_compliance') }}">Cloud Security & Compliance</a>
                                            <a href="{{ route('services.hybrid_cloud_integration') }}">Hybrid Cloud & On-Premise Integration</a>
                                        </div>
                                    </div>
                                    <div id="mega-tab-managed" class="mega-cat-content">
                                        <h4><a href="{{ route('services.managed_it') }}"
                                                style="color: inherit; text-decoration: none;">Managed IT Services</a>
                                        </h4>
                                        <div class="content-grid">
                                            <a href="{{ route('services.it_support_helpdesk') }}">End-to-end IT support
                                                & helpdesk</a>
                                            <a href="{{ route('services.system_monitoring') }}">System monitoring & maintenance</a>
                                            <a href="{{ route('services.patch_management') }}">System patch management & updates</a>
                                            <a href="{{ route('services.hardware_software_procurement') }}">Hardware & software procurement</a>
                                            {{-- <a href="#">IT asset & hardware-software procurement</a> --}}
                                        </div>
                                    </div>
                                    <div id="mega-tab-consulting" class="mega-cat-content">
                                        <h4>AI Integration & Business Automation</h4>
                                        <div class="content-grid">
                                            <a href="#">AI-Powered Sales Automation System</a>
                                            <a href="#">AI Chatbots & Customer Support Automation</a>
                                            <a href="#">Workflow & Process Automation</a>
                                            <a href="#">Marketing Automation Systems</a>
                                            <a href="#">System Integration & Data Automation</a>
                                            <a href="#">AI Analytics & Business Insights</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- <li class="nav-link">
                    <a href="{{ route('pricing') }}"><span>Pricing</span></a>
                </li> -->
                <li class="dropdown"><a href="#"><span>Company</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li class="dropdown"><a href="{{ route('aboutUs') }}"><span>About Us</span></a></li>
                        <li class="dropdown"><a href="{{ route('security') }}"><span>Our Security</span></a></li>
                        <li class="dropdown"><a href="{{ route('partner') }}"><span>Partner</span></a></li>
                        <li class="dropdown"><a href="{{ route('testimonial') }}"><span>Testimonials</span></a></li>
                        <li class="dropdown"><a href="#"><span>Knowledgebase</span></a></li>
                        <li class="dropdown"><a href="{{ route('whyUsPage') }}"><span>Why Us</span></a></li>
                        <li class="dropdown"><a href="{{ route('faq') }}"><span>FAQ</span></a></li>
                    </ul>
                </li>

                <li class="nav-link">
                    <a href="#">Downloads</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="{{ route('contactUs') }}">Contact Us</a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>

<style>
    /* 
       STRICT POSITIONING RESET 
       Forces the absolute mega menu to anchor only to the #header.
       Refined to NOT affecting other nested dropdowns (like Company).
    */

    /* 1. Header is the Anchor */
    #header {
        position: relative !important;
    }

    /* 2. Disable positioning on specific parents leading to Mega Menu */
    /* Use direct child selector '>' for ul to avoid breaking nested dropdowns */
    #header .container,
    #navbar,
    #navbar>ul,
    #navbar li.mega-menu-item {
        position: static !important;
    }

    /* 3. Dropdown Logic */
    .mega-menu-wrapper {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        width: auto;
        z-index: 9999;
        display: none;
        background: #fff;
    }

    /* HOVER BRIDGE FIX: Adds an invisible touch area to connect the Link and the Menu */
    .mega-menu-wrapper::before {
        content: "";
        position: absolute;
        top: -40px;
        /* Extends 40px upwards into the header */
        left: 0;
        width: 100%;
        height: 40px;
        background: transparent;
    }

    .mega-menu-item:hover .mega-menu-wrapper {
        /* Show on hover */
        display: block;
        animation: menuDrop 0.2s ease-out forwards;
    }

    /* 4. Full Width Panel Style */
    .mega-menu-container {
        background: #fff;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        border-top: 3px solid #232f3e;
        display: flex;
        justify-content: center;
        width: 100%;
        margin: 0;
    }

    /* Inner Layout */
    .mega-menu-inner {
        display: flex;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        background: #fff;
        min-height: 400px;
    }

    /* Sidebar Styles */
    .mega-menu-sidebar {
        width: 260px;
        background: #f8f9fa;
        color: #16191f;
        padding: 10px 0;
        border-right: 1px solid #eee;
        display: flex;
        flex-direction: column;
        flex-shrink: 0;
    }

    .mega-cat-link {
        padding: 12px 20px;
        cursor: pointer;
        font-weight: 600;
        color: #444;
        transition: all 0.1s;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-left: 4px solid transparent;
        font-size: 14px;
        text-decoration: none;
    }

    .mega-cat-link:hover,
    .mega-cat-link.active {
        background: #232f3e;
        color: #fff;
        border-left: 4px solid #ff9900;
    }

    .mega-cat-link .arrow-icon {
        font-size: 12px;
        display: block;
    }

    .mega-cat-link:hover .arrow-icon,
    .mega-cat-link.active .arrow-icon {
        color: #fff;
    }

    /* Content Area Styles */
    .mega-menu-details {
        flex: 1;
        padding: 30px 40px;
        background: #fff;
    }

    .mega-cat-content {
        display: none;
        /* Animation changed to Y-axis to prevent X-scroll */
        animation: contentFadeUp 0.3s ease-out;
    }

    .mega-cat-content.active {
        display: block;
    }

    .mega-cat-content h4 {
        margin-top: 0;
        margin-bottom: 20px;
        color: #232f3e;
        font-size: 20px;
        font-weight: 700;
    }

    .content-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px 30px;
    }

    .content-grid a {
        color: #0073bb;
        text-decoration: none;
        padding: 4px 0;
        transition: color 0.1s;
        display: block;
        line-height: 1.4;
        font-size: 13.5px;
        /* Word Wrap Fix */
        white-space: normal;
        overflow-wrap: break-word;
        word-wrap: break-word;
    }

    .content-grid a:hover {
        color: #d95f1e;
        text-decoration: underline;
    }

    /* Animations */
    @keyframes menuDrop {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes contentFadeUp {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Mobile Responsive */
    @media (max-width: 991px) {
        .mega-menu-item {
            position: relative !important;
        }

        .mega-menu-wrapper {
            display: none !important;
        }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const triggers = document.querySelectorAll('.mega-cat-link');
        const contents = document.querySelectorAll('.mega-cat-content');

        triggers.forEach(trigger => {
            trigger.addEventListener('mouseenter', function () {
                // Remove active class from all
                triggers.forEach(t => t.classList.remove('active'));
                contents.forEach(c => c.classList.remove('active'));

                // Add active to current
                this.classList.add('active');
                const targetId = this.getAttribute('data-target');
                const targetContent = document.getElementById(targetId);
                if (targetContent) {
                    targetContent.classList.add('active');
                }
            });
        });
    });
</script>