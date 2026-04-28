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
                    
                    <!-- Mobile Services Menu (Standard Dropdown) -->
                    <ul class="d-lg-none">
                        <li class="dropdown"><a href="#"><span>Network Solutions</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="{{ route('services.network-architecture') }}">Network architecture design</a></li>
                                <li><a href="{{ route('services.enterprise-wireless-solutions') }}">Enterprise wireless solutions</a></li>
                                <li><a href="{{ route('services.vpn-remote-access') }}">VPN setup & remote access</a></li>
                                <li><a href="{{ route('services.network-monitoring') }}">Network monitoring</a></li>
                                <li><a href="{{ route('services.firewall-router-configuration') }}">Firewall & router config</a></li>
                                <li><a href="{{ route('services.disaster-recovery-redundancy') }}">Disaster recovery planning</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Security & Firewall</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="{{ route('services.security-audits') }}">Firewall Setup & Config</a></li>
                                <li><a href="{{ route('services.vpn-setup-remote-access') }}">VPN & Remote Access</a></li>
                                <li><a href="{{ route('services.cloud-security-firewall') }}">Cloud & Firewall Protection</a></li>
                                <li><a href="{{ route('services.network-intrusion-detection') }}">Network Security config</a></li>
                                <li><a href="{{ route('services.endpoint-protection') }}">Endpoint Security</a></li>
                                <li><a href="{{ route('services.soc_setup_monitoring') }}">Security Audit</a></li>
                                <li><a href="{{ route('services.incident_response_recovery') }}">Firewall Monitoring</a></li>
                                <li><a href="{{ route('services.email-phishing-protection') }}">Email Security</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Software & Web</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="{{ route('services.custom_software') }}">Website Design & Dev</a></li>
                                <li><a href="{{ route('services.ecommerce_development') }}">E-commerce Development</a></li>
                                <li><a href="{{ route('services.custom_web_applications') }}">Custom Web Apps</a></li>
                                <li><a href="{{ route('services.api_development') }}">API Development</a></li>
                                <li><a href="{{ route('services.website_maintenance') }}">Website Maintenance</a></li>
                                <li><a href="{{ route('services.web_performance_seo') }}">SEO & Optimization</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Cloud & IT</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="{{ route('services.cloud_architecture') }}">Cloud Setup & Migration</a></li>
                                <li><a href="{{ route('services.backup_disaster_recovery') }}">Backup & Recovery</a></li>
                                <li><a href="{{ route('services.server_infrastructure_management') }}">Server Management</a></li>
                                <li><a href="{{ route('services.it_audit_consulting') }}">IT Audit & Consulting</a></li>
                                <li><a href="{{ route('services.cloud_security_compliance') }}">Cloud Security</a></li>
                                <li><a href="{{ route('services.hybrid_cloud_integration') }}">Hybrid Cloud</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Managed IT</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="{{ route('services.it_support_helpdesk') }}">End-to-end IT support</a></li>
                                <li><a href="{{ route('services.system_monitoring') }}">System monitoring</a></li>
                                <li><a href="{{ route('services.patch_management') }}">Patch management</a></li>
                                <li><a href="{{ route('services.hardware_software_procurement') }}">Hardware procurement</a></li>
                            </ul>
                        </li>
                        <li><a href="#">AI & Automation</a></li>
                    </ul>

                    <!-- Desktop Mega Menu -->
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
                        <li><a href="{{ route('aboutUs') }}"><span>About Us</span></a></li>
                        <li><a href="{{ route('security') }}"><span>Our Security</span></a></li>
                        <li><a href="{{ route('partner') }}"><span>Partner</span></a></li>
                        <li><a href="{{ route('testimonial') }}"><span>Testimonials</span></a></li>
                        <li><a href="#"><span>Knowledgebase</span></a></li>
                        <li><a href="{{ route('whyUsPage') }}"><span>Why Us</span></a></li>
                        <li><a href="{{ route('faq') }}"><span>FAQ</span></a></li>
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