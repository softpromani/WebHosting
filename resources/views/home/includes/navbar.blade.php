<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}"><img src="{{ asset('storage/' . settingValue('logo')) }}" alt=""></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                {{-- <li><a class="nav-link scrollto active" href="{{ route('home') }}">Home</a></li> --}}
                @foreach ($menu as $m)
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
                @endforeach
                <li class="nav-link"><a href="#"><span>Cybersecurity Solutions</span> </a>
                </li>
                <li class="nav-link"><a href="#"><span>Cloud Services</span></a>
                </li>
                <li class="dropdown"><a href="#"><span>Pricing</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">QuickBooks/Apps Hosting</a></li>
                        <li><a href="#">Hosted VDI Pricing</a></li>
                        <li><a href="#">Linux Virtual Desktop</a></li>
                        <li><a href="#">Desktop as a Service</a></li>
                        <li><a href="#">Public Cloud</a></li>
                        <li><a href="#">Managed Security Pricing</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Company</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Data Centers</a></li>
                        <li><a href="#">Our Support</a></li>
                        <li><a href="#">Why Us</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="{{ route('contactUs') }}">Contact Us</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
