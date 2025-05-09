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
    padding: 2rem; /* optional for readability */
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

    </style>
    <div id="carouselExampleCaptions" class="carousel slide carousel-dark" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('home/banner-slider/Home header-slider1.webp') }}" class="d-block w-100"
                    alt="Slider-1">
                  <div class="carousel-caption d-flex flex-column justify-content-center align-items-start h-100 text-start">
                      <h5 class="caption-title">Streamline Your Business Operations with Secured Cloud Hosting Services</h5>
                      <p class="caption-text">Power your business with premium cloud hosting solutions by Mounteko. With lightning-fast
                          performance, 99.95% uptime, and expert support, we provide the perfect cloud hosting platform
                          for your growing business.</p>
                  </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('home/banner-slider/slider-1.webp') }}" class="d-block w-100"
                    alt="slider-2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
