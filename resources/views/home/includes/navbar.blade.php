<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}"><img src="{{ asset('storage/' . settingValue('logo')) }}" alt=""></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link  " href="{{ route('home') }}">Home</a></li>
                {{-- <li><a class="nav-link  " href="{{ route('aboutUs') }}">About</a></li> --}}
                {{-- @foreach ($menu as $m)
                    <li class="dropdown"><a href="#"><span>{{ $m->name }}</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            @foreach ($m->children as $submenu)
                                <li class="dropdown"><a href="#"><span>{{ $submenu->name }}</span> <i
                                            class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        @foreach ($submenu->products as $product)
                                            <li><a
                                                    href="{{ route('product', $product->slug) }}">{{ $product->product_title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach --}}
                <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>Network Solutions</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Network architecture design (LAN, WAN, SD-WAN)</a></li>
                                <li><a href="#">Enterprise wireless solutions and implementation</a></li>
                                <li><a href="#">VPN setup and remote access solutions</a></li>
                                <li><a href="#">Network monitoring and performance optimization</a></li>
                                <li><a href="#">Firewall & router configuration</a></li>
                                <li><a href="#">Disaster recovery & network redundancy planning</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Cybersecurity Services</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Security audits & vulnerability assessments</a></li>
                                <li><a href="#">Penetration testing (internal/external/web/mobile)</a></li>
                                <li><a href="#">Endpoint protection & antivirus solutions</a></li>
                                <li><a href="#">Network intrusion detection and prevention systems (IDS/IPS)</a></li>
                                <li><a href="#">Email & phishing protection</a></li>
                                <li><a href="#">Security Operations Center (SOC) setup & monitoring</a></li>
                                <li><a href="#">Incident response & recovery</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Software & Web Development</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Custom software/application development</a></li>
                                <li><a href="#">Web application design and development</a></li>
                                <li><a href="#">Enterprise workflow automation solutions</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Cloud & IT Infrastructure</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Cloud architecture consulting (AWS, Azure, GCP)</a></li>
                                <li><a href="#">Hybrid or multi-cloud deployments</a></li>
                                <li><a href="#">Cloud application migration</a></li>
                                <li><a href="#">Virtualization & containerization (VMware, Docker)</a></li>
                                <li><a href="#">SaaS, IaaS, PaaS solutions</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span>Managed IT Services</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">End-to-end IT support & helpdesk</a></li>
                                <li><a href="#">Proactive system monitoring and maintenance</a></li>
                                <li><a href="#">Patch management and updates</a></li>
                                <li><a href="#">Hardware and software procurement</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span>Consulting & Compliance</span></a></li>
                    </ul>
                </li>
                {{-- <li class="nav-link">
                    <a href="#"><span>Cybersecurity Solutions</span> </a>
                </li>
                <li class="nav-link">
                    <a href="#"><span>Cloud Services</span></a>
                </li> --}}
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
                {{-- <li class="nav-link">
                    <a href="#"><span>Company</span></a>
                </li> --}}
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
