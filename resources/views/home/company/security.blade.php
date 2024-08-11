@extends('home.includes.layout')
@section('title', 'Security')
@section('content')
    <style>
        .securityfeature-area {
            padding-top: 100px;
            padding-bottom: 70px;
        }

        .single-feature {
            background-color: #fff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
            text-align: left;
            transition: transform 0.3s, background-color 0.3s, color 0.3s;
        }

        .single-feature:hover {
            background-color: var(--primary-color);
            color: #fff;
        }

        .single-feature .title {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .single-feature .title i {
            font-size: 50px;
            color: var(--primary-color);
            margin-right: 10px;
            transition: color 0.3s, transform 0.3s;
        }

        .single-feature:hover .title i {
            color: #fff;
            transform: rotate(360deg);
        }

        .single-feature .title h3 {
            font-size: 20px;
            font-weight: bold;
            margin: 0;
            transition: color 0.3s;
        }

        .single-feature:hover .title h3 {
            color: #fff;
        }

        .single-feature p {
            font-size: 15px;
            color: #6c757d;
            transition: color 0.3s;
        }

        .single-feature:hover p {
            color: #fff;
        }

        .feature-shape img {
            max-width: 100%;
        }

        .about-us-area {
            padding-bottom: 70px;
        }


        .about-img img {
            width: 100%;
            border-radius: 10px;
        }

        .about-content {
            padding-left: 30px;
        }

        .about-content p {
            font-size: 18px;

        }

        .about-title span {
            color: var(--primary-color);
            ;
            font-weight: bold;
            font-size: 27px;
        }

        .about-title h2 {
            font-size: 26px;
            margin-top: 30px;
        }

        .bxCir {
            color: var(--primary-color);
        }

        .solution-content {
            max-width: 600px;
            margin-left: auto
        }

        .bg-solitude-blue {
            background-color: #F8FAFF;
        }

        .single-solution span {
            position: absolute;
            top: -13px;
            right: -4px;
            line-height: 1;
            font-size: 80px;
            opacity: .1;
            font-weight: 700
        }

        .solution-img {
            height: 100%;
            padding-bottom: 30px
        }



        .solution-title span {
            font-weight: 600;
            display: block;
            margin-bottom: 10px;
            color: var(--primary-color);
        }

        .single-solution {
            padding: 30px;
            position: relative;
            transition: .5s;
            margin-bottom: 20px;
        }


        .navbar-area.is-sticky,
        .others-option-for-responsive .container .container,
        .others-option-for-responsive .option-inner,
        .others-option-for-responsive .option-inner .others-option,
        .protect-area.protect-area-three .single-challenges,
        .single-approach,
        .single-challenges,
        .single-feature,
        .single-solution {
            box-shadow: 0 0 30px 5px rgba(0, 0, 0, .05);
        }





        .challenges-area {
            background: url('home/assets/img/challenges-bg.jpg') no-repeat center center/cover;
            padding-top: 100px;
            padding-bottom: 70px;
            position: relative;
            color: #fff;
        }

        /* Overlay for better readability */

        .challenges-area::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 51, 0.8);
            z-index: 1;
        }

        .cont {
            position: relative;
            z-index: 2;
        }

        .sec {
            text-align: center;
            /* margin-bottom: 20px; */
            top: 0;
        }

        .sec span {
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 10px;
            display: block;
            font-size: 20px;
        }


        .sec h2 {
            font-size: 35px;
            font-weight: bold;
            background-color: transparent;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 0;
            color: white;
        }

        .single-challenges {
            position: relative;
            background-color: #fff;
            border-radius: 10px;
            text-align: center;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            /* Ensures no part of the background icon spills outside the card */
        }

        .single-challenges i {
            color: var(--primary-color);
            ;
            font-size: 4rem;
            margin-bottom: 15px;
        }

        .single-challenges h3,
        .single-challenges p {
            color: #333;
        }

        .single-challenges .background-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 150px;
            color: rgba(79, 75, 75, 0.1);
            z-index: -1;
            width: 100%;
            height: 100%;
        }

        .overly-two {
            position: relative;
            z-index: 2;
        }

        .custom-single-challenge {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-color: #fff;
            border-radius: 10px;
            text-align: center;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            height: 100%;
        }

        .col-lg-3 .custom-single-challenge,
        .col-sm-6 .custom-single-challenge {
            height: 100%;
        }

        .custom-single-challenge .background-icon {
            position: absolute;
            top: 59%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 150px;
            color: rgba(122, 116, 116, 0.1);
            z-index: -1;
            width: 100%;
            height: 100%;
        }


        .custom-single-challenge .overly-two {
            position: relative;
            z-index: 2;
            flex-grow: 1;
        }

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

        div#owl-demo1 .item {
            padding: 0 15px;
        }

        .blog-grid {
            background: #fff;
            box-shadow: 0px 0px 20px #c3c3c3;
            margin: 10px 0;
            border: 1px solid #d6d6d6;
            border-radius: 1px;
        }

        .discretion-blog {
            padding: 15px;
        }

        .discretion-blog p {
            font-size: 15px;
            color: #454343;
        }

        .discretion-blog h4 {
            color: #454343;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .discretion-blog .btn {
            color: #fefeff;
            background: #454343;
            width: 100%;
            text-transform: uppercase;
            border-radius: 0px;
            margin-top: 10px;
            -webkit-transform: perspective(1px) translateZ(0);
            -moz-transform: perspective(1px) translateZ(0);
            -o-transform: perspective(1px) translateZ(0);
            transform: perspective(122px) translateZ(0);
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

        <!-- ======= Contact Section ======= -->
        <section class="securityfeature-area security-feature-area-two pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-feature">
                            <div class="title">
                                <i class="fas fa-cogs"></i>
                                <h3>Pen Testing</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-feature">
                            <div class="title">
                                <i class="fas fa-shield-alt"></i>
                                <h3>Cyber Threat Hunting</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-feature">
                            <div class="title">
                                <i class="fas fa-lock"></i>
                                <h3>Security Center</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Contact Section -->


        <section class="about-us-area ">
            <div class="container">
                <div class="row ">
                    <!-- Image Column -->
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="{{ asset('home/assets/img/about-img.jpg') }}"
                                alt="Image showing login screen on a laptop">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="about-title">
                                <span>About Us</span>
                                <h2>Without stopping for a moment, we give you the best technology experience by discussing
                                    our expertise to prevent theft or damage.</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</p>

                            <ul>
                                <li>
                                    <i class="bx bx-check-circle bxCir"></i>
                                    Trusted Partner
                                </li>
                                <li>
                                    <i class="bx bx-check-circle bxCir"></i>
                                    Product Security
                                </li>
                                <li>
                                    <i class="bx bx-check-circle bxCir"></i>
                                    System Security
                                </li>
                                <li>
                                    <i class="bx bx-check-circle bxCir"></i>
                                    Operational Security
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="challenges-area pt-100 pb-70 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container cont">
                <div class="section-title sec">
                    <div class="row mb-3    ">
                        <div class="col-12">
                            <span>Our Challenges</span>
                        </div>
                        <div class="col-12 col-sm-8 offset-sm-2 ">
                            <h2>You Can Protect Your Organization’s Cybersecurity By Us</h2>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-challenges custom-single-challenge overly-one">
                            <div class="overly-two">
                                <i class="fas fa-user-secret "></i>
                                <h3>Identifying Threats</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do.</p>
                                <span class="mt-5 fas fa-user-secret background-icon"></span>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-challenges custom-single-challenge overly-one">
                            <div class="overly-two">
                                <i class="fas fa-shield-alt"></i>
                                <h3>Cyber Risk Assessment</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do.</p>
                                <span class=" mt-5 fas fa-shield-alt background-icon"></span>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-challenges custom-single-challenge overly-one">
                            <div class="overly-two">
                                <i class="fas fa-tools"></i> <!-- FontAwesome icon -->
                                <h3>Testing Cyber Security</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do.</p>
                                <span class="  mt-5 fas fa-tools background-icon"></span>
                                <!-- FontAwesome icon for background -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-challenges custom-single-challenge overly-one">
                            <div class="overly-two">
                                <i class="fas fa-cloud"></i> <!-- FontAwesome icon -->
                                <h3>Managing Cloud Security</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do.</p>
                                <span class="  mt-5 fas fa-cloud background-icon"></span>
                                <!-- FontAwesome icon for background -->
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


        <section class="partner-area " data-aos="fade-up" data-aos-delay="100">
            <div class="container">
                <div class="swiper partSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="partner-item">
                                <a href="#">
                                    <img src="{{ asset('home/assets/img/partner-1.png') }}" alt="Shield Tech"
                                        class="partIma">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="partner-item">
                                <a href="#">
                                    <img src="{{ asset('home/assets/img/partner-2.png') }}" alt="SECURITY">
                                </a>
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="partner-item">
                                <a href="#">
                                    <img src="{{ asset('home/assets/img/partner-3.png') }}" alt="Eagle Shield">
                                </a>
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="partner-item">
                                <a href="#">
                                    <img src="{{ asset('home/assets/img/partner-4.png') }}" alt="Techno Guard">
                                </a>
                            </div>

                        </div>
                        <div class="swiper-slide">
                            <div class="partner-item">
                                <a href="#">
                                    <img src="{{ asset('home/assets/img/partner-5.png') }}" alt="Fire Shield">
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

        </section>


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



    <script>
        $(document).ready(function() {
            // Initialize Jarallax
            $('.jarallax').jarallax({
                speed: 0.3
            });

        });
    </script>
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
        var swiper = new Swiper(".partSwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            speed: 500,
            autoplay: {
                delay: 2000,
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
