@extends('home.includes.layout')
@section('title', 'Why Mounteko Cloud Hosting for Your Business?')
@section('meta-description',
    'Mounteko Cloud Hosting is your reliable QuickBooks solution provider, offering cloud-based
    access to QuickBooks Desktop, Drake Tax, and other tools.')
@section('header-area')
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link href="{{ asset('home/assets/css/whyUs.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/process_new.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/premium_sections.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/work_services.css') }}">
@endsection
@section('content')
    <main id="main">
        <!-- ======= Why Us Hero Section ======= -->
        <section class="whyus-hero-section">
            <div class="container">
                <div class="whyus-hero-content">
                    <h1 class="whyus-hero-title">Why Choose Us</h1>
                    <div class="whyus-breadcrumb-box">
                        <a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a>
                        <span class="separator"><i class="fas fa-chevron-right"></i></span>
                        <span class="current">Why Choose Us</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="promise-section">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5">
                        <div class="promise-content">
                            <span class="promise-subtitle">IT Support For Business</span>
                            <h2 class="promise-title">The Mounteko IT Services Promise</h2>
                            <p class="promise-desc">
                                We synergize granular technologies and business markets collaboratively to provide
                                state-of-the-art infrastructures for your success.
                            </p>
                            <ul class="promise-list">
                                <li>Achieve your goals and exceed expectations.</li>
                                <li>Building a website, mobile app or software.</li>
                                <li>Our platform is designed to help you.</li>
                                <li>Emphasis on user experience.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="promise-image-wrapper text-center">
                            <img src="{{ asset('home/assets/img/it_team_promise.png') }}" alt="IT Support Promise"
                                class="img-fluid rounded-20 shadow-lg promise-img-small">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="partner-why-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="partner-why-image text-center">
                            <img src="{{ asset('home/assets/img/itrove_partner_3d.png') }}" alt="ITrove Partner"
                                class="img-fluid floating-anim partner-img-3d">
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="partner-why-content">
                            <span class="partner-subtitle">Elevating Your Business</span>
                            <h2 class="partner-title">Mounteko: Your Trusted Cloud Solutions Partner</h2>
                            <p class="partner-desc">
                                Unlock seamless cloud solutions tailored to your business needs with expert support,
                                top-tier security, and unmatched performance. We don't just host; we empower your growth.
                            </p>
                            <div class="partner-features-grid">
                                <div class="partner-feat-item">
                                    <div class="feat-icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                    <div class="feat-text">
                                        <h4>Seamless Migration</h4>
                                        <p>Effortless transition to the cloud.</p>
                                    </div>
                                </div>
                                <div class="partner-feat-item">
                                    <div class="feat-icon"><i class="fas fa-shield-alt"></i></div>
                                    <div class="feat-text">
                                        <h4>Elite Security</h4>
                                        <p>Bank-grade data protection.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="partner-action mt-4">
                                <a href="{{ route('contactUs') }}" class="rts-btn btn-primary-premium">
                                    Connect With Us <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="favorites-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="favorites-content">
                            <h2 class="favorites-title">That's Why We're List Of Favorites.</h2>
                            <p class="favorites-subtitle-italic">Innovation driven by expertise and customer satisfaction.
                            </p>
                            <p class="favorites-desc">
                                We provide top-notch hosting and IT solutions that empower businesses to thrive in the
                                digital age. Our commitment to excellence is what makes us a favorite choice.
                            </p>
                            <div class="skills-wrapper">
                                <div class="skill-item">
                                    <div class="skill-info">
                                        <span>Work Success</span>
                                        <span class="skill-percent">95.00%</span>
                                    </div>
                                    <div class="custom-progress">
                                        <div class="progress-fill" style="width: 95%;"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <div class="skill-info">
                                        <span>Customer Satisfaction</span>
                                        <span class="skill-percent">98.00%</span>
                                    </div>
                                    <div class="custom-progress">
                                        <div class="progress-fill" style="width: 98%;"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <div class="skill-info">
                                        <span>Uptime Reliability</span>
                                        <span class="skill-percent">99.9%</span>
                                    </div>
                                    <div class="custom-progress">
                                        <div class="progress-fill" style="width: 99.9%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="favorites-visual-wrapper">
                            <div class="main-img-box">
                                <img src="{{ asset('home/assets/img/favorite_choice_working.png') }}"
                                    alt="Professional Workspace" class="img-fluid rounded-20 shadow-lg">
                                <div class="video-btn-floating">
                                    <a href="#" class="play-btn"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                            <div class="accent-img-strip">
                                <img src="{{ asset('home/assets/img/office_accent_strip.png') }}" alt="Office Accent"
                                    class="img-fluid rounded-20">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="modern-process-section">
            <div class="container">
                <div class="row text-center mb-5">
                    <div class="col-12">
                        <span class="process-subtitle">HOW WE WORK</span>
                        <h2 class="process-title-main">Our Streamlined Cloud Hosting Process</h2>
                    </div>
                </div>
                <div class="process-steps-wrapper">
                    <!-- Step 1 -->
                    <div class="process-card-item">
                        <div class="process-icon-box">
                            <img src="{{ asset('home/assets/img/whyUs/Select A Hosting Provider.webp') }}"
                                alt="Select Provider">
                        </div>
                        <div class="process-card-body">
                            <div class="process-step-number">01</div>
                            <h4>Select A Hosting Provider</h4>
                            <p>Research and choose a reputable Hosting Services provider that meets your business needs,
                                budget, and requirements.</p>
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div class="process-card-item">
                        <div class="process-icon-box">
                            <img src="{{ asset('home/assets/img/whyUs/Setup & Configuration.webp') }}" alt="Setup">
                        </div>
                        <div class="process-card-body">
                            <div class="process-step-number">02</div>
                            <h4>Setup & Configuration</h4>
                            <p>The Hosting Services provider will set up and configure the software in the cloud
                                environment, including installation and security settings.</p>
                        </div>
                    </div>
                    <!-- Step 3 -->
                    <div class="process-card-item">
                        <div class="process-icon-box">
                            <img src="{{ asset('home/assets/img/whyUs/Testing & Quality Assurance.webp') }}"
                                alt="Testing">
                        </div>
                        <div class="process-card-body">
                            <div class="process-step-number">03</div>
                            <h4>Testing & Quality Assurance</h4>
                            <p>Conduct thorough testing of the software in the cloud environment to ensure it functions
                                correctly and verify data accessibility.</p>
                        </div>
                    </div>
                    <!-- Step 4 -->
                    <div class="process-card-item">
                        <div class="process-icon-box">
                            <img src="{{ asset('home/assets/img/whyUs/Ongoing Support & Maintenance.webp') }}"
                                alt="Support">
                        </div>
                        <div class="process-card-body">
                            <div class="process-step-number">04</div>
                            <h4>Support & Maintenance</h4>
                            <p>Seek ongoing support and maintenance services promptly, including technical issues, updates,
                                and troubleshooting.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Our Work Services Section ======= -->
        <section class="work-services-section">
            <div class="container">
                <div class="section-header text-center">
                    <span class="subtitle">WHY CHOOSE US</span>
                    <h2 class="title" style="margin-bottom: 15px;">Your Trusted Partner for IT Management & Web Development</h2>
                    <p class="subtitle-desc" style="color: #64748b; font-size: 16px; max-width: 600px; margin: 0 auto 30px;">We don't just build systems — we build long-term partnerships. Here's why businesses choose us.</p>
                </div>
                <div class="row g-4">
                    <!-- Service 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="work-service-card">
                            <div class="icon-box">
                                <i class="bi bi-pc-display"></i>
                            </div>
                            <h3>Enterprise IT Management</h3>
                            <p>Proactive monitoring, cybersecurity, cloud infrastructure, and 24/7 support. We keep your business running without interruptions.</p>
                        </div>
                    </div>
                    <!-- Service 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="work-service-card">
                            <div class="icon-box">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            <h3>Safety-First IT Compliance</h3>
                            <p>GDPR, ISO, SOC2, and industry-specific security standards. We build compliance into every layer — so you're always audit-ready.</p>
                        </div>
                    </div>
                    <!-- Service 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="work-service-card">
                            <div class="icon-box">
                                <i class="bi bi-activity"></i>
                            </div>
                            <h3>Continuous Monitoring & Review</h3>
                            <p>Real-time system health checks, performance audits, and monthly strategy reviews. No surprises — just improvements.</p>
                        </div>
                    </div>
                    <!-- Service 4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="work-service-card">
                            <div class="icon-box">
                                <i class="bi bi-gear-wide-connected"></i>
                            </div>
                            <h3>Business-Grade Digital Systems</h3>
                            <p>Custom ERP, CRM, automation workflows, and cloud migration. We replace spreadsheets with systems that actually work.</p>
                        </div>
                    </div>
                    <!-- Service 5 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="work-service-card">
                            <div class="icon-box">
                                <i class="bi bi-code-slash"></i>
                            </div>
                            <h3>Project-Established Web Development</h3>
                            <p>From MVPs to enterprise portals. We deliver on time, on budget, and with full transparency — no ghosting, no overpromising.</p>
                        </div>
                    </div>
                    <!-- Service 6 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="work-service-card">
                            <div class="icon-box">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <h3>No Fluff. Just Results.</h3>
                            <p>We don't fill space with vague promises or buzzwords. You get real technology solutions that drive revenue, reduce costs, and eliminate technical debt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= FAQ Section ======= -->
        <section class="partner-faq-section py-4">
            <div class="container">
                <div class="row align-items-center g-5">
                    <!-- Left: FAQ Content -->
                    <div class="col-lg-6">
                        <div class="benefits-header text-start mb-4">
                            <span class="benefits-subtitle" style="justify-content: flex-start;">HELP CENTER</span>
                            <h2 class="benefits-title" style="font-size: 28px;">Frequently Asked Questions</h2>
                        </div>
                        <div class="static-faq-accordion" id="partnerFaq">
                            <!-- FAQ Item 1 -->
                            <div class="static-faq-item">
                                <button class="static-faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1">
                                    When and how do I get support if something goes wrong?
                                    <span class="faq-icon-plus"></span>
                                </button>
                                <div id="faq1" class="collapse" data-bs-parent="#partnerFaq">
                                    <div class="static-faq-body">
                                        We offer 24/7 support via phone, email, and Slack. All clients get a dedicated account manager and access to our real-time status dashboard.
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item 2 -->
                            <div class="static-faq-item">
                                <button class="static-faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                    Can you migrate my existing website or IT systems?
                                    <span class="faq-icon-plus"></span>
                                </button>
                                <div id="faq2" class="collapse" data-bs-parent="#partnerFaq">
                                    <div class="static-faq-body">
                                        Absolutely. We specialize in seamless migrations with zero downtime. Whether it's moving from shared hosting to the cloud, switching CRMs, or rebuilding a legacy website — we handle everything. Free migration assessment included.
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item 3 -->
                            <div class="static-faq-item">
                                <button class="static-faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq3">
                                    What industries do you typically work with?
                                    <span class="faq-icon-plus"></span>
                                </button>
                                <div id="faq3" class="collapse" data-bs-parent="#partnerFaq">
                                    <div class="static-faq-body">
                                        We serve businesses across healthcare, finance, logistics, e-commerce, SaaS, manufacturing, and professional services. If you handle sensitive data or need high-performance systems, we're the right fit.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right: Illustration -->
                    <div class="col-lg-6">
                        <div class="faq-image-box text-center p-4">
                            <img src="{{ asset('home/assets/img/faq_partner_img.png') }}" alt="FAQ Support"
                                class="img-fluid faq-floating-img">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Blog Section ======= -->
        <section class="partner-blog-section py-5" style="background: #f8fafc;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="benefits-header">
                            <span class="benefits-subtitle">LATEST NEWS</span>
                            <h2 class="benefits-title">Read Our Blogs</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <!-- Blog Card 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="static-blog-card">
                            <div class="blog-img-wrapper">
                                <img src="{{ asset('home/assets/img/blog_static_1.png') }}" alt="Blog 1">
                                <span class="blog-date">10 May 2024</span>
                            </div>
                            <div class="blog-content">
                                <span class="blog-cat">Affiliate Tips</span>
                                <h4 class="blog-title">How to scale your affiliate earnings in 2024</h4>
                                <p class="blog-excerpt">Learn the latest strategies to grow your affiliate business and
                                    maximize your monthly commission...</p>
                                <a href="#" class="blog-btn-link">READ MORE <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Card 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="static-blog-card">
                            <div class="blog-img-wrapper">
                                <img src="{{ asset('home/assets/img/blog_static_2.png') }}" alt="Blog 2">
                                <span class="blog-date">08 May 2024</span>
                            </div>
                            <div class="blog-content">
                                <span class="blog-cat">Hosting</span>
                                <h4 class="blog-title">Why Cloud Hosting is the best choice for SEO</h4>
                                <p class="blog-excerpt">Discover how our high-performance cloud infrastructure helps your
                                    website rank higher on search engines...</p>
                                <a href="#" class="blog-btn-link">READ MORE <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Card 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="static-blog-card">
                            <div class="blog-img-wrapper">
                                <img src="{{ asset('home/assets/img/blog_static_3.png') }}" alt="Blog 3">
                                <span class="blog-date">05 May 2024</span>
                            </div>
                            <div class="blog-content">
                                <span class="blog-cat">Business</span>
                                <h4 class="blog-title">Partnering for success: Our global network</h4>
                                <p class="blog-excerpt">Explore the benefits of joining our global network of entrepreneurs
                                    and growing your business together...</p>
                                <a href="#" class="blog-btn-link">READ MORE <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Premium Testimonials -->
        {{-- <section class="premium-testimonials-section">
            <div class="container">
                <div class="row text-center mb-5">
                    <div class="col-12">
                        <span class="process-subtitle" style="color: #ff2d55;">Testimonials</span>
                        <h2 class="process-title-main" style="color: #ffffff;">What Our Clients Say</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($testimonial as $t)
                        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                            <div class="testimonial-card">
                                <div class="testimonial-user">
                                    <img src="{{ asset($t->pic) }}" alt="{{ $t->name }}">
                                    <div>
                                        <h3>{{ $t->name }}</h3>
                                        <span>{{ $t->position }}</span>
                                    </div>
                                </div>
                                <div class="testimonial-content">
                                    <p>"{{ $t->description }}"</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section> --}}

        <!-- FAQ Section -->
        {{-- <x-faq :faqs="$faqs" /> --}}

        <!-- Premium Blog Section -->
        {{-- <section class="premium-blog-section">
            <div class="container">
                <div class="row text-center mb-5">
                    <div class="col-12">
                        <span class="process-subtitle">Latest News</span>
                        <h2 class="process-title-main">Explore Our Blogs</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($blogs->take(3) as $blog)
                        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                            <div class="premium-blog-card">
                                <div class="blog-img-box">
                                    <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}">
                                </div>
                                <div class="blog-content">
                                    <span class="blog-category">{{ $blog->category ?? 'Cloud Hosting' }}</span>
                                    <h4>{{ Str::limit($blog->title, 50) }}</h4>
                                    <p>{{ Str::limit(strip_tags($blog->description), 100) }}</p>
                                    <a href="#" class="read-more-btn">
                                        Read More <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section> --}}
    </main>
    <!-- End #main -->


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".blogSwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            speed: 500,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false
            },
            slidesPerView: 'auto',
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
            },
        });
        $(document).ready(function() {
            /*=========== Tab Js ===========*/
            try {
                $(".tab__btn").click(function() {
                    const tabId = $(this).data("tab");
                    $(".tab__btn").removeClass("active");
                    $(this).addClass("active");
                    $(".tab__content").removeClass("open").hide();
                    $("#" + tabId)
                        .addClass("open")
                        .show();
                });
                $('.tab__btn[data-tab="tab1"]').click();
            } catch (error) {
                console.error("Tab Button not enable this page", error);
            }
        });
    </script>
@endsection
