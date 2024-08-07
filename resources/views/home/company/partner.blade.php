@extends('home.includes.layout')
@section('title', 'Security')
@section('content')
    <style>
        .blogCard {
            height: 202px;
            width: 135px;
            object-fit: cover;
        }

        .testimonials {
            background-color: transparent;
        }

        .testimonials .container {
            background-color: transparent;
        }

        .testimonials .testimonial-item {
            background-color: transparent;
            box-shadow: none;
            /* Optional: Remove box shadow if there is any */
        }

        .testimonials .swiper-wrapper,
        .testimonials .swiper-slide {
            background-color: transparent;
        }

        .user-blog {
            background: #65e82e21;
            padding: 50px 0 50px;
        }

        .user-blog:before {
            position: absolute;
            top: -100px;
            left: 0;
            content: " ";
            background-size: 100% 100px;
            width: 100%;
            height: 100px;
            float: left;
            z-index: 99;
        }

        .user-blog .owl-theme .owl-controls .owl-page span {
            width: 17px;
            height: 17px;
            background: #454343;
            opacity: 1;
        }

        .user-blog .owl-theme .owl-controls .owl-page.active span,
        .user-blog .owl-theme .owl-controls.clickable .owl-page:hover span {
            background: #82b53f;
        }


        /* swiper css */
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #000;
            /* Change the color to match your design */
        }

        .heading {
            text-align: center;

            color: #454343;
            font-size: 30px;
            font-weight: 700;
            position: relative;
            margin-bottom: 70px;
            text-transform: uppercase;
            z-index: 999;
        }

        .heading:after {
            content: ' ';
            position: absolute;
            top: 100%;
            left: 50%;
            height: 40px;
            width: 180px;
            border-radius: 4px;
            transform: translateX(-50%);
            background: url(https://i.ibb.co/G32GT0L/heading-line.png);
            background-repeat: no-repeat;
            background-position: center;
        }


        .pricing-wrapper {
            background-color: #007BFF;
            padding: 20px;
            border-radius: 8px;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            /* Ensure full height */
            transition: all 0.3s ease-in-out;
        }

        .row.g-30>[class*='col-'] {
            display: flex;
        }

        .icon img {
            width: 50px;
            /* consistent size */
            height: auto;
        }

        .title,
        .description {
            text-align: center;
        }

        .pricing-shape-area {
            position: absolute;
            top: 10px;
            right: 10px;
            transition: transform 0.5s ease-out;
        }

        .shape-two,
        .shape-three {
            position: absolute;
            opacity: 0;
            /* initially hidden */
            transition: opacity 0.5s ease-in, transform 0.5s ease-in-out;
        }

        .shape-two {
            top: 0;
            right: 0;
        }

        .shape-three {
            top: 20px;
            right: 20px;
        }

        /* Responsive adjustments */
        @media (min-width: 992px) {

            /* Adjust based on Bootstrap's LG breakpoint */
            .col-lg-3 {
                flex: 0 0 auto;
                max-width: 25%;
                /* Makes sure each column takes exactly 25% */
            }
        }
    </style>


    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Security</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="#">Security</a></li>
                    </ol>
                </div>

            </div>
        </section><!-- Breadcrumbs Section -->

        <section class="rts-pricing-five inner">
            <div class="container">
                <div class="row g-30">
                    <div class="col-lg-3 col-md-6">
                        <div class="pricing-wrapper">
                            <div class="icon mb-3">
                                <img src="{{ asset('home/assets/img/icon-1.svg') }}" alt="Icon 1">
                            </div>
                            <div class="content">
                                <h4 class="title">Earn at Your Pace</h4>
                                <p class="description">SUPER affiliate? Our customized affiliate commission</p>
                            </div>
                            <div class="pricing-shape-area">
                                <img src="{{ asset('home/assets/img/pricing-bg-shape.svg') }}" alt=""
                                    class="one">
                                <img src="{{ asset('home/assets/img/pricing-shape-01.svg') }}" alt=""
                                    class="two">
                                <img src="{{ asset('home/assets/img/pricing-shape-02.svg') }}" alt=""
                                    class="three">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="pricing-wrapper">
                            <div class="icon mb-3">
                                <img src="{{ asset('home/assets/img/icon-3.svg') }}" alt="Icon 1">
                            </div>
                            <div class="content">
                                <h4 class="title">WordPress Hosting</h4>
                                <p class="description">Leverage Cloud ways to your passive income with lifetime</p>
                            </div>
                            <div class="pricing-shape-area">
                                <img src="{{ asset('home/assets/img/pricing-bg-shape.svg') }}" alt=""
                                    class="one">
                                <img src="{{ asset('home/assets/img/pricing-shape-01.svg') }}" alt=""
                                    class="two">
                                <img src="{{ asset('home/assets/img/pricing-shape-02.svg') }}" alt=""
                                    class="three">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="pricing-wrapper">
                            <div class="icon mb-3">
                                <img src="{{ asset('home/assets/img/icon-3.svg') }}" alt="Icon 1">
                            </div>
                            <div class="content">
                                <h4 class="title">Low Customer Churn</h4>
                                <p class="description">Leverage Cloud ways to your passive income with lifetime</p>
                            </div>
                            <div class="pricing-shape-area">
                                <img src="{{ asset('home/assets/img/pricing-bg-shape.svg') }}" alt=""
                                    class="one">
                                <img src="{{ asset('home/assets/img/pricing-shape-01.svg') }}" alt=""
                                    class="two">
                                <img src="{{ asset('home/assets/img/pricing-shape-02.svg') }}" alt=""
                                    class="three">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="pricing-wrapper">
                            <div class="icon mb-3">
                                <img src="{{ asset('home/assets/img/icon-4.svg') }}" alt="Icon 1">
                            </div>
                            <div class="content">
                                <h4 class="title">Affiliate Support</h4>
                                <p class="description">Dedicated account managers and resources</p>
                            </div>
                            <div class="pricing-shape-area">
                                <img src="{{ asset('home/assets/img/pricing-bg-shape.svg') }}" alt=""
                                    class="one">
                                <img src="{{ asset('home/assets/img/pricing-shape-01.svg') }}" alt=""
                                    class="two">
                                <img src="{{ asset('home/assets/img/pricing-shape-02.svg') }}" alt=""
                                    class="three">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                            <a href="pricing.html" class="rts-btn btn__long primary__bg white__color">View Plan <i
                                    class="fa-regular fa-arrow-right"></i></a>
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



        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>F.A.Q</h2>
                    <h3>Frequently Asked <span>Questions</span></h3>
                    <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                        vitae autem.</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <ul class="faq-list">

                            @foreach ($faqs as $index => $faq)
                                <li>
                                    <div data-bs-toggle="collapse" class="collapsed question"
                                        href="#faq{{ $index }}">
                                        {{ $faq->question }} <i class="bi bi-chevron-down icon-show"></i><i
                                            class="bi bi-chevron-up icon-close"></i>
                                    </div>
                                    <div id="faq{{ $index }}" class="collapse" data-bs-parent=".faq-list">
                                        <p>{!! $faq->answer !!}</p>
                                    </div>
                                </li>
                            @endforeach



                        </ul>
                    </div>
                </div>

            </div>
        </section>


        <section class="solution-area  pb-70">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="solution-content">
                            <div class="solution-title">
                                <span>All-in Solution</span>
                                <h4>Our experts are providing and planning 24/7 technical support services with product and
                                    security consultation.</h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="single-solution overly-one">
                                        <span class="number">01</span>
                                        <div class="overly-two">
                                            <h4><a href="#">Product Consultation</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="single-solution overly-one">
                                        <span class="number">02</span>
                                        <div class="overly-two">
                                            <h4><a href="#">Security Consultation</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 offset-md-3 offset-lg-0">
                                    <div class="single-solution overly-one">
                                        <span class="number">03</span>
                                        <div class="overly-two">
                                            <h4><a href="#">24/7 Technical Support</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pr-0">
                        <div class="solution-img">
                            <img src="{{ asset('home/assets/img/solution-img.png') }}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Testimonials Section ======= -->
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
        </section><!-- End Testimonials Section -->


        <section class="user-blog" class="footer-top">
            <div class="container">

                <div class="heading">
                    Blogs
                </div>

                <div class="swiper blogSwiper mb-5">
                    <div class="swiper-wrapper p-3">
                        @foreach ($blogs as $blog)
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
                        @endforeach
                    </div>

                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
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
    </script>
@endsection
