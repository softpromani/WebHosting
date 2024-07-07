@extends('home.includes.layout')
@section('title', 'Contact Us')
@section('content')
    <style>
        .carousel-item img {
            height: 400px;
        }
    </style>
    <div class="page-title" data-aos="fade">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Service Details</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Service Details</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->
    {{-- Silder  --}}
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-inner">
                @foreach ($medias as $md)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <img src="{{ asset('storage/' . $md->media) }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Innovation Trove</h5>
                            {{-- <p>Some representative placeholder content for the first slide.</p> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    {{-- Slider End --}}

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">
        <div class="container">
            <div class="row gy-4">
                {{-- <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="services-list">
                    <a href="#service-details" class="active">Service Details</a>
                    @if ($features)
                    <a href="#featured-services">Featured Services</a>
                    @endif
                    @if ($whyus)
                    <a href="#whyus-services">Why-Us Services</a>
                    @endif
                    @if ($counters)
                    <a href="#counts">Counts</a>
                    @endif
                
                    @if ($testimonials)
                    <a href="#testimonials">Testimonials</a>
                    @endif
                
                    @if ($faqs)
                    <a href="#faq">FAQ</a>
                    @endif
                
                </div>
                </div> --}}

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('storage/' . $products->content_img->media) }}" alt="no available"
                                class="img-fluid services-img rounded">
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    {!! $products->product_description !!}
                </div>
            </div>

        </div>

    </section><!-- /Service Details Section -->

    <!-- Service Details Section -->
    <section id="whyus-services" class="counts">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6" data-aos-delay="200">
                    <img src="{{ asset('home/assets/img/whyus.png') }}" alt="no available" class="img-fluid services-img">
                </div>
                <div class="col-lg-6" data-aos-delay="200">
                    <div class="row">
                        @foreach ($whyus as $ws)
                            <div class="col-12 col-md-6 mb-5" data-aos-delay="100">
                                <div class="count-box text-center pb-3 border rounded bg-white shadow "
                                    style="min-height: 150px;">
                                    <div class=" mb-4">
                                        <span>
                                            <i class="{{ $ws->icon ?? '' }}"></i>
                                        </span>

                                    </div>
                                    <p><strong>{{ $ws->title ?? '' }}</strong></p>
                                    <p>{!! $ws->detail ?? '' !!}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- /Service Details Section -->

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
            <div class="row">
                @foreach ($features as $fs)
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="{{ $fs->icon ?? '' }}"></i></div>
                            <h4 class="title"><a href="">{{ $fs->title ?? '' }}</a></h4>
                            <p class="description">{!! $fs->detail ?? '' !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- End Featured Services Section -->
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row">
                @foreach ($counters as $ct)
                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="{{ $ct->icon ?? '' }}"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter">{{ $ct->count ?? '' }}</span>
                            <p>{{ $ct->title ?? '' }}</p>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Counts Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    @foreach ($testimonials as $tm)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('storage/' . $tm->testimonial_image) }}" class="testimonial-img"
                                    alt="">
                                <h3>{{ $tm->name ?? '' }}</h3>
                                <h4>{{ $tm->designation ?? '' }}</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    {{ $tm->comment ?? '' }}
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


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>F.A.Q</h2>
                <h3>Frequently Asked <span>Questions</span></h3>

            </div>

            <div class="row justify-content-center">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('storage/' . $products->faqImg->media) }}" alt="no available"
                                class="img-fluid services-img rounded">
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <ul class="faq-list">
                        @foreach ($faqs as $faq)
                            <li>
                                <div data-bs-toggle="collapse" class="collapsed question"
                                    href="#faq{{ $faq->id ?? '' }}">
                                    {{ $faq->question ?? '' }}<i class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq{{ $faq->id ?? '' }}" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        {{ $faq->answer ?? '' }}
                                    </p>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->


@endsection
