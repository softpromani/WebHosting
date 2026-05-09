@extends('home.includes.layout')
@section('title', 'Become an Official Affiliate Partner with Mounteko Hosting')
@section('meta-description', 'Join our hosting affiliate program and enjoy high affiliate earnings, fast payouts, and top conversion rates. We are uniquely positioned to offer the best web hosting affiliate program.')
@section('header-area')
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/new_home_custom.css') }}">
    <link href="{{ asset('home/assets/css/partner.css') }}" rel="stylesheet">
@endsection
@section('content')




    <main id="main">

        <!-- ======= Partner Hero Section (Premium Sundar Version) ======= -->
        <section class="partner-hero-sundar">
            <div class="sundar-bg-mesh"></div>
            <div class="container">
                <div class="row align-items-center g-5">
                    <!-- Left Content -->
                    <div class="col-lg-6">
                        <div class="sundar-content">
                            <span class="sundar-label">PARTNERSHIP PROGRAM</span>
                            <h1 class="sundar-title">Elevate Your Business With Our <span>Winning Partnership</span></h1>
                            <p class="sundar-desc">
                                Join our exclusive ecosystem of service partners and unlock premium tools, expertise, and
                                growth opportunities designed for your success.
                            </p>
                            <div class="sundar-actions">
                                <a href="{{ route('applyNow') }}" class="sundar-btn">
                                    Apply now <i class="bi bi-arrow-right"></i>
                                </a>
                                <span class="sundar-badge">
                                    <i class="bi bi-shield-check"></i> Trusted by 500+ Partners
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Right Content -->
                    <div class="col-lg-6">
                        <div class="sundar-media">
                            <div class="sundar-img-wrapper">
                                <img src="{{ asset('home/assets/img/partner_hero_dark_3d.png') }}"
                                    alt="Partnership 3D Illustration" class="sundar-main-img">
                                <div class="sundar-glow"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ======= Why Partner Section ======= -->
        <section class="partner-why-section">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="why-title">Why partner with Intercom?</h2>
                </div>
                <div class="row g-4 justify-content-center">
                    <!-- Card 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="partner-3d-card">
                            <div class="card-content">
                                <h3 class="card-title">Grow with the industry leader</h3>
                                <p class="card-desc">Earn commission on clients you refer to us, and get in front of our
                                    25,000+ customers, too.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="partner-3d-card">
                            <div class="card-content">
                                <h3 class="card-title">Scale your clients' reach</h3>
                                <p class="card-desc">Help your clients engage their customers better through a personal
                                    Business Messenger.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="partner-3d-card">
                            <div class="card-content">
                                <h3 class="card-title">Become a messaging expert</h3>
                                <p class="card-desc">Outsmart the competition with our technical product enablement and
                                    go-to-market resources.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row mt--90 g-30">
                    <div class="col-lg-5">
                        <div class="commision__text">
                            <h3 class="title">
                                High Commissions with
                                Weekly Payouts Thresholds
                            </h3>
                            <p>
                                Join our hosting affiliate program and enjoy high affiliate
                                earnings, fast payouts, and top conversion rates.
                            </p>
                            <a href="#" class="rts-btn btn__long primary__bg white__color">View Plan <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="commision-calculation">
                            <div class="commision-tab mb--50">
                                <div class="tab__button tab__btn active" data-tab="sales">Sales</div>
                                <div class="tab__button tab__btn" data-tab="monthly-2">Monthly Payment</div>
                                <div class="tab__button tab__btn" data-tab="slab">Slab</div>
                                <div class="tab__button tab__btn" data-tab="hybrid">Hybrid</div>
                            </div>
                            <div class="commision-content tab__content open" id="sales">
                                <div class="commision-type">
                                    <div class="item">
                                        1-5 Sales /mo $50 /sale
                                    </div>
                                    <div class="item">
                                        1-5 Sales /mo $50 /sale
                                    </div>
                                    <div class="item">
                                        6-10 Sales /mo $75 /sale
                                    </div>
                                    <div class="item">
                                        6-10 Sales /mo $75 /sale
                                    </div>
                                    <div class="item">
                                        6-10 Sales /mo $75 /sale
                                    </div>
                                    <div class="item">
                                        1-5 Sales /mo $50 /sale
                                    </div>
                                </div>
                            </div>
                            <div class="commision-content tab__content" id="monthly-2">
                                <div class="commision-type">
                                    <div class="item">
                                        1-5 Sales /mo $50 /sale
                                    </div>
                                    <div class="item">
                                        1-5 Sales /mo $50 /sale
                                    </div>
                                    <div class="item">
                                        6-10 Sales /mo $75 /sale
                                    </div>
                                    <div class="item">
                                        6-10 Sales /mo $75 /sale
                                    </div>
                                    <div class="item">
                                        6-10 Sales /mo $75 /sale
                                    </div>
                                    <div class="item">
                                        1-5 Sales /mo $50 /sale
                                    </div>
                                </div>
                            </div>
                            <div class="commision-content tab__content" id="slab">
                                <div class="commision-type">
                                    <div class="item">
                                        1-5 Sales /mo $50 /sale
                                    </div>
                                    <div class="item">
                                        1-5 Sales /mo $50 /sale
                                    </div>
                                    <div class="item">
                                        6-10 Sales /mo $75 /sale
                                    </div>
                                    <div class="item">
                                        6-10 Sales /mo $75 /sale
                                    </div>
                                    <div class="item">
                                        6-10 Sales /mo $75 /sale
                                    </div>
                                    <div class="item">
                                        1-5 Sales /mo $50 /sale
                                    </div>
                                </div>
                            </div>
                            <div class="commision-content tab__content" id="hybrid">
                                <div class="commision-type">
                                    <div class="item">
                                        1-5 Sales /mo $50 /sale
                                    </div>
                                    <div class="item">
                                        1-5 Sales /mo $50 /sale
                                    </div>
                                    <div class="item">
                                        6-10 Sales /mo $75 /sale
                                    </div>
                                    <div class="item">
                                        6-10 Sales /mo $75 /sale
                                    </div>
                                    <div class="item">
                                        6-10 Sales /mo $75 /sale
                                    </div>
                                    <div class="item">
                                        1-5 Sales /mo $50 /sale
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Getting Started Section (Amplemarket Style) ======= -->
        <section class="partner-stepper-section">
            <div class="container">
                <div class="row align-items-center g-5">
                    <!-- Left: Vertical Stepper -->
                    <div class="col-lg-6">
                        <div class="partner-stepper">
                            <!-- Step 1 -->
                            <div class="stepper-item">
                                <div class="stepper-node">
                                    <div class="stepper-icon-box">
                                        <i class="bi bi-window-sidebar"></i>
                                    </div>
                                    <div class="stepper-line"></div>
                                    <div class="stepper-dot"></div>
                                </div>
                                <div class="stepper-content">
                                    <span class="stepper-badge apply">APPLY</span>
                                    <h4>Connect with our Partnerships team.</h4>
                                </div>
                            </div>
                            <!-- Step 2 -->
                            <div class="stepper-item">
                                <div class="stepper-node">
                                    <div class="stepper-icon-box">
                                        <i class="bi bi-graph-up-arrow"></i>
                                    </div>
                                    <div class="stepper-line"></div>
                                    <div class="stepper-dot"></div>
                                </div>
                                <div class="stepper-content">
                                    <span class="stepper-badge plan">PLAN</span>
                                    <h4>We create together a custom plan for our partnership.</h4>
                                </div>
                            </div>
                            <!-- Step 3 -->
                            <div class="stepper-item">
                                <div class="stepper-node">
                                    <div class="stepper-icon-box">
                                        <i class="bi bi-people"></i>
                                    </div>
                                </div>
                                <div class="stepper-content">
                                    <span class="stepper-badge earn">EARN</span>
                                    <h4>Generate profit while helping others grow their business as well.</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Content -->
                    <div class="col-lg-6">
                        <div class="stepper-text-content">
                            <span class="stepper-subtitle">GETTING STARTED</span>
                            <h2 class="stepper-main-title">How can I be an Mounteko partner?</h2>
                            <p class="stepper-description">
                                As easy as just sending us a partner request through the form below. No commitments and no
                                hassles, just opportunities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Benefits Section (What You Will Get) ======= -->
        <section class="partner-benefits-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="benefits-header">
                            <span class="benefits-subtitle">OUR BENEFITS</span>
                            <h2 class="benefits-title">What You Will Get</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-4 mt-4">
                    <!-- Benefit 1 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="benefit-card">
                            <div class="benefit-icon-box">
                                <i class="bi bi-person-video3"></i>
                            </div>
                            <h4 class="benefit-card-title">Confirm Speakers</h4>
                            <p class="benefit-card-desc">Integer ac felis ac augue tempu id non dui. Nam feugiat finibus
                                scelerisque. Proin semper</p>
                            <a href="#" class="benefit-link">READ MORE <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Benefit 2 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="benefit-card">
                            <div class="benefit-icon-box">
                                <i class="bi bi-lightbulb"></i>
                            </div>
                            <h4 class="benefit-card-title">Best Digital Ideas</h4>
                            <p class="benefit-card-desc">Integer ac felis ac augue tempu id non dui. Nam feugiat finibus
                                scelerisque. Proin semper</p>
                            <a href="#" class="benefit-link">READ MORE <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Benefit 3 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="benefit-card">
                            <div class="benefit-icon-box">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <h4 class="benefit-card-title">Networking People</h4>
                            <p class="benefit-card-desc">Integer ac felis ac augue tempu id non dui. Nam feugiat finibus
                                scelerisque. Proin semper</p>
                            <a href="#" class="benefit-link">READ MORE <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- Benefit 4 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="benefit-card">
                            <div class="benefit-icon-box">
                                <i class="bi bi-stars"></i>
                            </div>
                            <h4 class="benefit-card-title">Inspiring Keynotes</h4>
                            <p class="benefit-card-desc">Integer ac felis ac augue tempu id non dui. Nam feugiat finibus
                                scelerisque. Proin semper</p>
                            <a href="#" class="benefit-link">READ MORE <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @foreach ($testimonial as $t)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset($t->pic) }}" class="testimonial-img" alt="">
                                <h3>{{ $t->name }}</h3>
                                <h4>{{ $t->position }}</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    {{ $t->description }}
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->
                        @endforeach


                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section --> --}}
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
                                    How do I join the Mounteko Affiliate Program?
                                    <span class="faq-icon-plus"></span>
                                </button>
                                <div id="faq1" class="collapse" data-bs-parent="#partnerFaq">
                                    <div class="static-faq-body">
                                        Joining is easy! Simply click the "Apply Now" button, fill out the application form,
                                        and our team will review it within 24-48 hours.
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item 2 -->
                            <div class="static-faq-item">
                                <button class="static-faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                    What are the commission rates?
                                    <span class="faq-icon-plus"></span>
                                </button>
                                <div id="faq2" class="collapse" data-bs-parent="#partnerFaq">
                                    <div class="static-faq-body">
                                        We offer some of the highest commission rates in the industry. You can earn up to
                                        40% per sale depending on your volume.
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item 3 -->
                            <div class="static-faq-item">
                                <button class="static-faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq3">
                                    When and how do I get paid?
                                    <span class="faq-icon-plus"></span>
                                </button>
                                <div id="faq3" class="collapse" data-bs-parent="#partnerFaq">
                                    <div class="static-faq-body">
                                        Payments are processed monthly via PayPal or Direct Bank Transfer with a minimum
                                        payout threshold of $50.
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

    </main><!-- End #main -->


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
        $(document).ready(function () {
            /*=========== Tab Js ===========*/
            try {
                $(".tab__btn").click(function () {
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