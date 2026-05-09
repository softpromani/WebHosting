@extends('home.includes.layout')
@section('title', 'Frequently Asked Questions by Users ')
@section('header-area')
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/new_home_custom.css') }}">
    <link href="{{ asset('home/assets/css/whyUs.css') }}" rel="stylesheet">
@endsection
@section('content')


    <style>
        .bg-working-steps {
            background: url("home/assets/img/whyUs/bg-03.jpg");
        }
    </style>

    <main id="main">

        <!-- FAQ Hero Section -->
        <section class="faq-hero-section">
            <!-- Animated background particles -->
            <div class="faq-hero-particles">
                <span></span><span></span><span></span>
                <span></span><span></span><span></span>
            </div>
            <div class="container text-center" style="position:relative; z-index:2;">
                <div class="faq-hero-badge">Support Center</div>
                <h1 class="faq-hero-title">Frequently Asked <span class="faq-hero-highlight">Questions</span></h1>
                <p class="faq-hero-subtitle">Find answers to common questions about our services, solutions, and support options.</p>
                <div class="faq-hero-breadcrumbs">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="separator"><i class="bi bi-chevron-right"></i></span>
                    <span class="current">FAQ</span>
                </div>
            </div>
        </section>







        <!-- ======= FAQ Accordion Section ======= -->
        <section class="faq-accordion-section">
            <div class="container">

                <!-- Section Header -->
                <div class="faq-section-header text-center">
                    <div class="faq-label">
                        <span class="line"></span>
                        BENEFITS & AIMS
                        <span class="line"></span>
                    </div>
                    <h2 class="faq-main-title">What We Do & Our Benefits !</h2>
                    <div class="faq-wave">〰〰〰</div>
                </div>

                <!-- 2 Column Accordion Grid -->
                <div class="row g-4 mt-2">

                    <!-- Left Column -->
                    <div class="col-lg-6">
                        <div class="faq-custom-accordion" id="faqLeft">

                            <!-- Item 1 - Active/Open -->
                            <div class="faq-item">
                                <button class="faq-item-header active"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faqL1"
                                    aria-expanded="true">
                                    GLOBAL SEARCH ENGINE OPTIMIZATION
                                    <i class="bi bi-chevron-up faq-icon"></i>
                                </button>
                                <div id="faqL1" class="collapse show">
                                    <div class="faq-item-body">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="faq-item">
                                <button class="faq-item-header"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faqL2"
                                    aria-expanded="false">
                                    HOW CAN I BOOK THE APPOINTMENT DATE?
                                    <i class="bi bi-chevron-down faq-icon"></i>
                                </button>
                                <div id="faqL2" class="collapse">
                                    <div class="faq-item-body">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="faq-item">
                                <button class="faq-item-header"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faqL3"
                                    aria-expanded="false">
                                    WHAT DO YOU DO IN HEART OPERATIONS?
                                    <i class="bi bi-chevron-down faq-icon"></i>
                                </button>
                                <div id="faqL3" class="collapse">
                                    <div class="faq-item-body">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="faq-item">
                                <button class="faq-item-header"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faqL4"
                                    aria-expanded="false">
                                    WHAT KIND OF PATIENTS DO YOU TREAT?
                                    <i class="bi bi-chevron-down faq-icon"></i>
                                </button>
                                <div id="faqL4" class="collapse">
                                    <div class="faq-item-body">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-lg-6">
                        <div class="faq-custom-accordion" id="faqRight">

                            <!-- Item 1 - Active/Open -->
                            <div class="faq-item">
                                <button class="faq-item-header active"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faqR1"
                                    aria-expanded="true">
                                    GLOBAL SEARCH ENGINE OPTIMIZATION
                                    <i class="bi bi-chevron-up faq-icon"></i>
                                </button>
                                <div id="faqR1" class="collapse show">
                                    <div class="faq-item-body">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="faq-item">
                                <button class="faq-item-header"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faqR2"
                                    aria-expanded="false">
                                    HOW CAN I BOOK THE APPOINTMENT DATE?
                                    <i class="bi bi-chevron-down faq-icon"></i>
                                </button>
                                <div id="faqR2" class="collapse">
                                    <div class="faq-item-body">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="faq-item">
                                <button class="faq-item-header"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faqR3"
                                    aria-expanded="false">
                                    WHAT DO YOU DO IN HEART OPERATIONS?
                                    <i class="bi bi-chevron-down faq-icon"></i>
                                </button>
                                <div id="faqR3" class="collapse">
                                    <div class="faq-item-body">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="faq-item">
                                <button class="faq-item-header"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faqR4"
                                    aria-expanded="false">
                                    WHAT KIND OF PATIENTS DO YOU TREAT?
                                    <i class="bi bi-chevron-down faq-icon"></i>
                                </button>
                                <div id="faqR4" class="collapse">
                                    <div class="faq-item-body">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        </script>

        <!-- ======= FAQ with Image Section ======= -->
        <section class="faq-image-section">
            <div class="container">
                <div class="row align-items-start g-5">

                    <!-- Left: Accordion -->
                    <div class="col-lg-7">
                        <div class="faq-label mb-3">
                            GENERAL QUESTIONS
                            <span class="line"></span>
                        </div>
                        <h2 class="faq-img-title">Frequent Asked Questions!!</h2>
                        <div class="faq-wave mb-4">〰〰〰</div>

                        <div class="faq-custom-accordion" id="faqImg">

                            <!-- Item 1 - Active -->
                            <div class="faq-item">
                                <button class="faq-item-header active"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faqI1"
                                    aria-expanded="true">
                                    GLOBAL SEARCH ENGINE OPTIMIZATION
                                    <i class="bi bi-chevron-up faq-icon"></i>
                                </button>
                                <div id="faqI1" class="collapse show">
                                    <div class="faq-item-body">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo <a href="#" class="faq-link">ligula eget</a> dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur <a href="#" class="faq-link">ridiculus mus</a>.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="faq-item">
                                <button class="faq-item-header"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faqI2"
                                    aria-expanded="false">
                                    HOW CAN I BOOK THE APPOINTMENT DATE?
                                    <i class="bi bi-chevron-down faq-icon"></i>
                                </button>
                                <div id="faqI2" class="collapse">
                                    <div class="faq-item-body">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="faq-item">
                                <button class="faq-item-header"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faqI3"
                                    aria-expanded="false">
                                    WHAT DO YOU DO IN HEART OPERATIONS?
                                    <i class="bi bi-chevron-down faq-icon"></i>
                                </button>
                                <div id="faqI3" class="collapse">
                                    <div class="faq-item-body">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="faq-item">
                                <button class="faq-item-header"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#faqI4"
                                    aria-expanded="false">
                                    WHAT KIND OF PATIENTS DO YOU TREAT?
                                    <i class="bi bi-chevron-down faq-icon"></i>
                                </button>
                                <div id="faqI4" class="collapse">
                                    <div class="faq-item-body">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Right: Image + Quote -->
                    <div class="col-lg-5">
                        <div class="faq-image-card">
                            <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?auto=format&fit=crop&q=80&w=600&h=450" alt="Professional team" class="faq-side-img">
                            <div class="faq-quote-box">
                                <span class="faq-quote-icon">"</span>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        {{-- <section class="user-blog" class="footer-top">
            <div class="container">

                <div class="heading">
                    Blogs
                </div>


                <div class="swiper blogSwiper mb-5">
                    <div class="swiper-wrapper p-3">
                        @forelse ($blogs as $blog)
                            <div class="swiper-slide ">
                                <div class="card">
                                    <img src="{{ asset('storage/' . $blog->blogImage->media) }}"
                                        class="card-img-top blogCard" alt="{{ $blog->title }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $blog->title }}</h5>
                                        <p class="card-text">{!! Str::limit(strip_tags($blog->description), 100) !!}</p>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#blogModal" data-title="{{ $blog->title }}"
                                            data-description="{{ $blog->description }}">
                                            Read more...
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>No Blog Found!</p>
                        @endforelse
                    </div>

                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>



        </section> --}}





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
