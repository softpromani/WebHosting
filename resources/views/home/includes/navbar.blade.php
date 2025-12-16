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
                                    <div class="mega-cat-link active" data-target="mega-tab-network">
                                        <span>Network Solutions</span>
                                        <i class="bi bi-chevron-right arrow-icon"></i>
                                    </div>
                                    <div class="mega-cat-link" data-target="mega-tab-cybersecurity">
                                        <span>Cybersecurity Services</span>
                                        <i class="bi bi-chevron-right arrow-icon"></i>
                                    </div>
                                    <div class="mega-cat-link" data-target="mega-tab-software">
                                        <span>Software & Web Development</span>
                                        <i class="bi bi-chevron-right arrow-icon"></i>
                                    </div>
                                    <div class="mega-cat-link" data-target="mega-tab-cloud">
                                        <span>Cloud & IT Infrastructure</span>
                                        <i class="bi bi-chevron-right arrow-icon"></i>
                                    </div>
                                    <div class="mega-cat-link" data-target="mega-tab-managed">
                                        <span>Managed IT Services</span>
                                        <i class="bi bi-chevron-right arrow-icon"></i>
                                    </div>
                                    <div class="mega-cat-link" data-target="mega-tab-consulting">
                                        <span>Consulting & Compliance</span>
                                        <i class="bi bi-chevron-right arrow-icon"></i>
                                    </div>
                                </div>

                                <!-- Content Area -->
                                <div class="mega-menu-details">
                                    <div id="mega-tab-network" class="mega-cat-content active">
                                        <h4>Network Solutions</h4>
                                        <div class="content-grid">
                                            <a href="#">Network architecture design (LAN, WAN, SD-WAN)</a>
                                            <a href="#">Enterprise wireless solutions and implementation</a>
                                            <a href="#">VPN setup and remote access solutions</a>
                                            <a href="#">Network monitoring and performance optimization</a>
                                            <a href="#">Firewall & router configuration</a>
                                            <a href="#">Disaster recovery & network redundancy planning</a>
                                        </div>
                                    </div>
                                    <div id="mega-tab-cybersecurity" class="mega-cat-content">
                                        <h4>Cybersecurity Services</h4>
                                        <div class="content-grid">
                                            <a href="#">Security audits & vulnerability assessments</a>
                                            <a href="#">Penetration testing (internal/external/web/mobile)</a>
                                            <a href="#">Endpoint protection & antivirus solutions</a>
                                            <a href="#">Network intrusion detection and prevention systems (IDS/IPS)</a>
                                            <a href="#">Email & phishing protection</a>
                                            <a href="#">Security Operations Center (SOC) setup & monitoring</a>
                                            <a href="#">Incident response & recovery</a>
                                        </div>
                                    </div>
                                    <div id="mega-tab-software" class="mega-cat-content">
                                        <h4>Software & Web Development</h4>
                                        <div class="content-grid">
                                            <a href="#">Custom software/application development</a>
                                            <a href="#">Web application design and development</a>
                                            <a href="#">Enterprise workflow automation solutions</a>
                                        </div>
                                    </div>
                                    <div id="mega-tab-cloud" class="mega-cat-content">
                                        <h4>Cloud & IT Infrastructure</h4>
                                        <div class="content-grid">
                                            <a href="#">Cloud architecture consulting (AWS, Azure, GCP)</a>
                                            <a href="#">Hybrid or multi-cloud deployments</a>
                                            <a href="#">Cloud application migration</a>
                                            <a href="#">Virtualization & containerization (VMware, Docker)</a>
                                            <a href="#">SaaS, IaaS, PaaS solutions</a>
                                        </div>
                                    </div>
                                    <div id="mega-tab-managed" class="mega-cat-content">
                                        <h4>Managed IT Services</h4>
                                        <div class="content-grid">
                                            <a href="#">End-to-end IT support & helpdesk</a>
                                            <a href="#">Proactive system monitoring and maintenance</a>
                                            <a href="#">Patch management and updates</a>
                                            <a href="#">Hardware and software procurement</a>
                                        </div>
                                    </div>
                                    <div id="mega-tab-consulting" class="mega-cat-content">
                                        <h4>Consulting & Compliance</h4>
                                        <div class="content-grid">
                                            <a href="#">IT Strategy Consulting</a>
                                            <a href="#">Compliance Audits (GDPR, HIPAA, etc.)</a>
                                            <a href="#">Risk Management</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-link">
                    <a href="{{ route('pricing') }}"><span>Pricing</span></a>
                </li>
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
                    <a href="{{ route('download') }}">Downloads</a>
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
    #navbar > ul, 
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
        top: -40px; /* Extends 40px upwards into the header */
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
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes contentFadeUp {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
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
