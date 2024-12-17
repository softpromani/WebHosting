@extends('home.includes.layout')
@section('title', 'Mounteko Cloud Hosting Reviews | Customer Experience | Success Stories')
@section('meta-description', 'Mounteko Cloud Hosting became the #1 QuickBooks Hosting provider due to its best-in-class IT infrastructures, lightning-fast services, and exceptional customer care.')
@section('header-area')
    <link href="{{ asset('home/assets/css/whyUs.css') }}" rel="stylesheet">

@endsection
@section('content')


    <style>
        .bg-working-steps {
            background: url("home/assets/img/whyUs/bg-03.jpg");
        }
    </style>

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Testimonial</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="#">Testimonial</a></li>
                    </ol>
                </div>

            </div>
        </section><!-- Breadcrumbs Section -->







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
