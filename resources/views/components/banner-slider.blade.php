<div>
    <style>
        .carousel-inner {
            max-height: 82vh;
        }

        .carousel-caption {
            left: 0px;
        }

        .carousel-caption h5,
        .carousel-caption p {
            text-align: left;
            padding: 15px;
            max-width: 50%;
            border-radius: 0px 30px 30px 0px;
        }

        .carousel-caption {
            bottom: 0;
            top: 0;
            padding: 2rem;
            /* optional for readability */
        }

        .caption-title {
            font-size: 1.25rem;
        }

        .caption-text {
            font-size: 0.9rem;
        }

        @media (min-width: 768px) {
            .caption-title {
                font-size: 2rem;
            }

            .caption-text {
                font-size: 1.2rem;
            }
        }

        @media (min-width: 1200px) {
            .caption-title {
                font-size: 2.5rem;
            }

            .caption-text {
                font-size: 1.4rem;
            }
        }

        .custom-outline-btn {
            border: 2px solid #a26303;
            /* Bootstrap primary color */
            color: #a26303;
            background-color: transparent;
            transition: background-color 0.3s, color 0.3s;
            border-radius: 10px;
        }

        .custom-outline-btn2 {
            border: 2px solid #000080;
            /* Bootstrap primary color */
            color: #000080;
            background-color: transparent;
            transition: background-color 0.3s, color 0.3s;
            border-radius: 10px;
        }

        .custom-outline-btn:hover {
            background-color: #a26303;
            color: #fff;
        }

        .custom-outline-btn2:hover {
            background-color: #000080;
            color: #fff;
        }

        .left_margin {
            left: 30%;
        }

        .responsive-heading {
            font-size: 2rem;
        }

        .responsive-paragraph {
            font-size: 1.125rem;
        }

        @media (max-width: 768px) {
            .responsive-heading {
                display: none;
            }

            .responsive-paragraph {
                display: none;
            }

        }

        @media (max-width: 576px) {
            .responsive-heading {
                display: none;
            }

            .responsive-paragraph {
                display: none;
            }
        }
    </style>
    <div id="carouselExampleCaptions" class="carousel slide carousel-dark" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            {{-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button> --}}
        </div>

        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active position-relative">
                <img src="{{ asset('home/banner-slider/homeHeadSlider.webp') }}"
                    class="d-block w-100 img-fluid banner_image" alt="Cloud Hosting Banner"
                    style="max-height: 82vh; object-fit: cover;">

                <div class="position-absolute top-50 translate-middle px-3 text-white w-100 left_margin"
                    style="max-width: 900px;">
                    <div class="text-center text-md-start mx-auto" style="max-width: 700px;">
                        <h3 class="fw-bold mb-3 responsive-heading text-black">
                            Streamline Your Business Operations with Secured Cloud Hosting Services
                        </h3>
                        <p class="lead mb-4 responsive-paragraph" style="color: #4e4e4e;">
                            Power your business with premium cloud hosting solutions by Mounteko. With lightning-fast
                            performance, 99.95% uptime, and expert support, we provide the perfect cloud hosting
                            platform
                            for your growing business.
                        </p>
                        <div
                            class="d-flex flex-column flex-md-row justify-content-center justify-content-md-start align-items-center gap-3">
                             <a href="#" class="btn btn-sm custom-outline-btn2  w-md-auto" data-bs-toggle="modal" data-bs-target="#scheduleModal">Book A Consultation</a>
                            <a href="{{ url('apply-now') }}" target="_blank"
                                class="btn btn-sm custom-outline-btn w-md-auto">Start Free Trial</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            {{-- <div class="carousel-item position-relative">
                <img src="{{ asset('home/banner-slider/slider-1.webp') }}" class="d-block w-100 img-fluid banner_image"
                    alt="Second Slide" style="max-height: 82vh; object-fit: cover;">

                <div class="position-absolute top-50 translate-middle px-3 text-white w-100 left_margin"
                    style="max-width: 900px;">

                </div>
            </div> --}}
        </div>
    </div>
