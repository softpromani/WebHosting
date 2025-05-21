@extends('home.includes.layout')
@section('title', 'Best Cloud Hosting Solutions Providers | Mounteko')
@section('meta-description',
    'Mounteko Cloud Hosting provides trustworthy cloud hosting options for accounting applications.
    Trust us for reliable QuickBooks hosting and increased accessibility.')
@section('header-area')
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- style sheets and font icons -->
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Store",
          "image": [
            "https://mounteko.com/storage/uploads/setting/zJlaz0S0yW6i59GQU9NlFpZtAYikKzdX4M5xMS6D.png"
           ],
          "name": "Mounteko Cloud Hosting",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "A108 Adam Street",
            "addressLocality": "New York",
            "addressRegion": "NY",
            "postalCode": "535022",
            "addressCountry": "US"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 40.698307,
            "longitude": -73.988999
          },
          "url": "https://www.google.com/maps/place/Safanya/@40.6983031,-73.9914316,17z/data=!4m10!1m2!2m1!1sA108+Adam+Street,+New+York,+NY+535022!3m6!1s0x89c25a35d88147e3:0x7763e438c5e2e738!8m2!3d40.6983039!4d-73.9888597!15sCiVBMTA4IEFkYW0gU3RyZWV0LCBOZXcgWW9yaywgTlkgNTM1MDIykgEeYnVzaW5lc3NfbWFuYWdlbWVudF9jb25zdWx0YW504AEA!16s%2Fg%2F11qt37pnf3?entry=ttu&g_ep=EgoyMDI1MDExNS4wIKXMDSoASAFQAw%3D%3D",
          "priceRange": "$$$",
          "telephone": "+18765786576",
          "openingHoursSpecification": [
            {
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday"
              ],
              "opens": "08:00",
              "closes": "23:59"
            },
            {
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": "Sunday",
              "opens": "08:00",
              "closes": "23:00"
            }
          ],
          "department": [
            {
              "@type": "Cloud Hosting",
              "image": [
            "https://mounteko.com/storage/Product/5xeJcvsTVfZfgcV8UqQQz0oVaysEDjTJv1T8DwrY.webp",
           ],
              "name": "Dave's Pharmacy",
              "address": {
                "@type": "PostalAddress",
                "streetAddress": "1600 Saratoga Ave",
                "addressLocality": "San Jose",
                "addressRegion": "CA",
                "postalCode": "95129",
                "addressCountry": "US"
              },
              "priceRange": "$",
              "telephone": "+14088719385",
              "openingHoursSpecification": [
                {
                  "@type": "OpeningHoursSpecification",
                  "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday"
                  ],
                  "opens": "09:00",
                  "closes": "19:00"
                },
                {
                  "@type": "OpeningHoursSpecification",
                  "dayOfWeek": "Saturday",
                  "opens": "09:00",
                  "closes": "17:00"
                },
                {
                  "@type": "OpeningHoursSpecification",
                  "dayOfWeek": "Sunday",
                  "opens": "11:00",
                  "closes": "17:00"
                }
              ]
            }
          ]
        }
        </script>
    <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "QAPage",
              "mainEntity": {
                "@type": "Question",
                "name": "What is QuickBooks Pro hosting?",
                "text": "QuickBooks Pro hosting allows you to access your QuickBooks Pro software and data from anywhere via the cloud, ensuring flexibility and efficiency for your accounting needs.",
                "answerCount": 5,
                "upvoteCount": 26,
                "datePublished": "2025-04-14T15:34-05:00",
                "author": {
                  "@type": "Person",
                  "name": "Mary Stone",
                  "url": "https://mounteko.com/product/quickbooks-pro-desktop-hosting-1"
                },
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "QuickBooks Pro hosting allows you to access your QuickBooks Pro software and data from anywhere via the cloud, ensuring flexibility and efficiency for your accounting needs.",
                  "image": "https://mounteko.com/storage/Product/5xeJcvsTVfZfgcV8UqQQz0oVaysEDjTJv1T8DwrY.webp",
                  "upvoteCount": 1337,
                  "url": "https://mounteko.com/product/quickbooks-pro-desktop-hosting-1",
                  "datePublished": "2024-02-14T16:34-05:00",
                  "author": {
                    "@type": "Person",
                    "name": "Julius Fernandez",
                             }
                },
                "suggestedAnswer": [
                  {
                    "@type": "Answer",
                    "text": "How does QuickBooks Pro desktop hosting differ from cloud hosting?",
                    "upvoteCount": 42,
                    "url": "QuickBooks Pro desktop hosting involves installing the software on a dedicated server, while QuickBooks Pro cloud hosting allows for remote access through the cloud, offering greater flexibility and scalability.",
                    "datePublished": "2024-02-14T15:39-05:00",
                    "author": {
                      "@type": "Person",
                      "name": "Kara Weber",
                    },
                    "comment": {
                      "@type": "Comment",
                      "text": "QuickBooks Pro desktop hosting involves installing the software on a dedicated server, while QuickBooks Pro cloud hosting allows for remote access through the cloud, offering greater flexibility and scalability.",
                      "datePublished": "2024-02-14T15:40-05:00",
                      "author": {
                        "@type": "Person",
                        "name": "Mary Stone",
                      }
                    }
                  },
                  }
                ]
              }
            }
            </script>

<style>


/* Hide title + description initially */
.feature-box-content {
    opacity: 0 !important;
    transform: translateY(20px) !important;
    transition: opacity 0.4s ease, transform 0.4s ease !important;
    pointer-events: none !important;
}

/* Show title + description on hover */
.feature-box:hover .feature-box-content {
    opacity: 1 !important;
    transform: translateY(0px) !important;
    pointer-events: auto !important;
}




</style>
@endsection
@section('content')
    <!-- ======= Hero Section ======= -->
    {{-- <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>Streamline Your Business Operations with Secured Cloud Hosting Services</h1>
            <h2>Power your business with premium cloud hosting solutions by Mounteko. With lightning-fast performance,
                99.95% uptime, and expert support, we provide the perfect cloud hosting platform for your growing business.
            </h2>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Book A Consultation</a>
                <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                        class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
            </div>
        </div>
    </section> --}}
    <x-banner-slider :banners="[]" />
    <!-- End Hero -->

    <main id="main">

        <!-- start section -->
        <section class="pt-0 background-position-center-top sm-background-image-none"
            style="background-image: url('{{ asset('home/assets/homepage/images/vertical-line-bg.svg') }}')">
            <div class="container-fluid d-none d-md-block">
                <div class="row">
                    <div class="p-0 overlap-section" data-bottom-top="transform: translateY(-50px)"
                        data-top-bottom="transform: translateY(50px)">
                        <img src="{{ asset('home/assets/homepage/images/images-demo-startup-bg-01.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-center mb-3">
                    <div class="col-lg-7 text-center"
                        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="alt-font text-uppercase fw-600 d-inline-block ls-1px">Our Offerings</span>
                        <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px shadow-none" data-shadow-animation="true"
                            data-animation-delay="1000">Top-Notch Cloud Hosting
                            <span class="text-highlight fw-800">
                                Services
                                <span
                                    class="bg-gradient-emerald-blue-emerald-green h-8px bottom-10px opacity-6 separator-animation"></span>
                            </span>
                        </h3>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 justify-content-center">
                    <!-- START CARD -->
                    @foreach ($category_desc as $desc)
                    <div class="col md-mb-30px d-flex">
                        <div
                            class="border-radius-8px overflow-hidden box-shadow-quadruple-large services-box-style-03 last-paragraph-no-margin w-100 d-flex flex-column">
                            <div class="position-relative box-image">
                                <a href="{{route('category-description', $desc->id)}}">
                                    <img src="{{ asset('storage/' . $desc->image??'') }}"
                                        alt="" class="hover-animate w-100" style="position: relative;">
                                </a>
                            </div>
                            <div class="bg-white d-flex flex-column h-100">
                                <div class="ps-4 pe-4 pt-3 pb-3 text-center flex-grow-1">
                                    <a href="demo-startup-services-details.html"
                                        class="d-inline-block fs-18 alt-font fw-700 text-dark-gray mb-5px">{{ optional($desc->category)->name }}</a>
                                    <p>{{ $desc->description?strip_tags($desc->description):'' }}</p>
                                </div>
                                <div class="card-footer text-center border-top border-color-extra-medium-gray pt-3 pb-3">
                                    <a href="{{route('category-description', $desc->id)}}"
                                        class="btn btn-link btn-hover-animation-switch btn-very-small fw-700 text-dark-gray text-uppercase">
                                        <span>
                                            <span class="btn-text">Explore services</span>
                                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{-- <!-- SECOND CARD -->
                    <div class="col md-mb-30px d-flex">
                        <div
                            class="border-radius-8px overflow-hidden box-shadow-quadruple-large services-box-style-03 last-paragraph-no-margin w-100 d-flex flex-column">
                            <div class="position-relative box-image">
                                <a href="demo-startup-services-details.html">
                                    <img src="{{ asset('home/assets/homepage/images/Homepage-Sage Application Hosting.png') }}"
                                        alt="" class="hover-animate w-100" style="position: relative;">
                                </a>
                            </div>
                            <div class="bg-white d-flex flex-column h-100">
                                <div class="ps-4 pe-4 pt-3 pb-3 text-center flex-grow-1">
                                    <a href="#"
                                        class="d-inline-block fs-18 alt-font fw-700 text-dark-gray mb-5px">Sage Application
                                        Hosting</a>
                                    <p>Run Sage in the cloud with secure access and guaranteed uptime.</p>
                                </div>
                                <div class="card-footer text-center border-top border-color-extra-medium-gray pt-3 pb-3">
                                    <a href="demo-startup-services-details.html"
                                        class="btn btn-link btn-hover-animation-switch btn-very-small fw-700 text-dark-gray text-uppercase">
                                        <span>
                                            <span class="btn-text">Explore services</span>
                                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- THIRD CARD -->
                    <div class="col d-flex">
                        <div
                            class="border-radius-8px overflow-hidden box-shadow-quadruple-large services-box-style-03 last-paragraph-no-margin w-100 d-flex flex-column">
                            <div class="position-relative box-image">
                                <a href="demo-startup-services-details.html">
                                    <img src="{{ asset('home/assets/homepage/images/Homepage-Tax software Hosting (1).png') }}"
                                        alt="" class="hover-animate w-100" style="position: relative;">
                                </a>
                            </div>
                            <div class="bg-white d-flex flex-column h-100">
                                <div class="ps-4 pe-4 pt-3 pb-3 text-center flex-grow-1">
                                    <a href="demo-startup-services-details.html"
                                        class="d-inline-block fs-18 alt-font fw-700 text-dark-gray mb-5px">Tax Software
                                        Hosting</a>
                                    <p>Host your tax software in the cloud for secure, remote access and seamless updates.
                                    </p>
                                </div>
                                <div class="card-footer text-center border-top border-color-extra-medium-gray pt-3 pb-3">
                                    <a href="demo-startup-services-details.html"
                                        class="btn btn-link btn-hover-animation-switch btn-very-small fw-700 text-dark-gray text-uppercase">
                                        <span>
                                            <span class="btn-text">Explore services</span>
                                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END CARD --> --}}
                </div>
            </div>
        </section>

        <!-- Floating Animation Style -->
        <style>
            .hover-animate {
                transition: transform 0.3s ease-in-out;
                position: relative;
            }

            .hover-animate:hover {
                animation: moveAround 3s infinite alternate ease-in-out;
            }

            @keyframes moveAround {
                0% {
                    top: 0px;
                    left: 0px;
                }

                25% {
                    top: -15px;
                    left: 15px;
                }

                50% {
                    top: 15px;
                    left: -15px;
                }

                75% {
                    top: -15px;
                    left: -15px;
                }

                100% {
                    top: 0px;
                    left: 0px;
                }
            }
        </style>

        <!-- end section -->

        <section class="bg-very-light-gray">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 text-center md-mb-50px">
                        <figure class="position-relative m-0">
                            <div class="position-relative d-inline-block"
                                data-anime='{ "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <img class="w-75 border-radius-5px animation-float hover-animate"
                                    src="{{ asset('home/assets/homepage/images/Homepage-Understand and apply the business process.webp') }}"
                                    alt="" style="position: relative;">
                            </div>

                            {{-- <figcaption
                                class="position-absolute bg-white box-shadow-quadruple-large border-radius-5px bottom-50px xs-bottom-35px left-minus-30px md-left-minus-0px ps-50px pe-50px pt-35px pb-35px xs-p-20px w-320px xs-w-250px text-center last-paragraph-no-margin"
                                data-anime='{ "translateY": [50, 0], "scale": [0.8,1], "opacity": [0,1], "duration": 800, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <div class="icon-with-text-style-06">
                                    <div class="bg-white feature-box feature-box-left-icon-middle">
                                        <div class="feature-box-icon me-15px">
                                            <i
                                                class="line-icon-Thumb icon-double-large text-gradient-emerald-blue-emerald-green"></i>
                                        </div>
                                        <div class="feature-box-content last-paragraph-no-margin">
                                            <div class="alt-font fw-600 text-dark-gray lh-26">We provide quality services
                                                to customers.</div>
                                        </div>
                                    </div>
                                </div>
                            </figcaption> --}}
                        </figure>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-8">
                        <h3 class="fw-600 mb-60px md-mb-40px mt-20px text-dark-gray alt-font ls-minus-2px"
                            data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            Our Transparent Cloud <span class="fw-800">Hosting Process</span></h3>
                        <div class="row row-cols-1"
                            data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 800, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <!-- start process step item -->
                            <div class="col-12 process-step-style-05 position-relative hover-box">
                                <div class="process-step-item d-flex">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div
                                            class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-16 bg-gradient-emerald-blue-emerald-green fw-400 position-relative will-change-transform">
                                            <span class="number position-relative z-index-1 text-white">01</span>
                                            <div class="box-overlay bg-gradient-emerald-blue-emerald-green rounded-circle">
                                            </div>
                                        </div>
                                        <span class="progress-step-separator bg-extra-medium-gray"></span>
                                    </div>
                                    <div class="process-content ps-35px last-paragraph-no-margin mb-30px">
                                        <span class="d-block fw-700 text-dark-gray mb-5px fs-18 alt-font">Consultation &
                                            Planning</span>
                                        <p class="w-80 lg-w-90 sm-w-100">We begin with a detailed consultation to
                                            understand your needs and plan the optimal cloud solution.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end process step item -->
                            <!-- start process step item -->
                            <div class="col-12 process-step-style-05 position-relative hover-box">
                                <div class="process-step-item d-flex">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div
                                            class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-16 bg-gradient-emerald-blue-emerald-green fw-400 position-relative will-change-transform">
                                            <span class="number position-relative z-index-1 text-white">02</span>
                                            <div class="box-overlay bg-gradient-emerald-blue-emerald-green rounded-circle">
                                            </div>
                                        </div>
                                        <span class="progress-step-separator bg-extra-medium-gray"></span>
                                    </div>
                                    <div class="process-content ps-35px last-paragraph-no-margin mb-30px">
                                        <span class="d-block fw-700 text-dark-gray mb-5px fs-18 alt-font">Setup &
                                            Migration</span>
                                        <p class="w-80 lg-w-90 sm-w-100">Our team configures your cloud environment and
                                            securely migrates your data, ensuring a smooth transition.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end process step item -->
                            <!-- start process step item -->
                            <div class="col-12 process-step-style-05 position-relative hover-box">
                                <div class="process-step-item d-flex">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div
                                            class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-16 bg-gradient-emerald-blue-emerald-green fw-400 position-relative will-change-transform">
                                            <span class="number position-relative z-index-1 text-white">03</span>
                                            <div class="box-overlay bg-gradient-emerald-blue-emerald-green rounded-circle">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="process-content ps-35px last-paragraph-no-margin">
                                        <span class="d-block fw-700 text-dark-gray mb-5px fs-18 alt-font">Integration &
                                            Support</span>
                                        <p class="w-80 lg-w-90 sm-w-100">We customize your cloud setup, integrate it with
                                            your existing systems, and provide ongoing training and support.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end process step item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <section class="pt-0 big-section sta">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 position-relative">
                        <div class="img-container">
                            <!-- Primary image -->
                            <img src="{{ asset('home/assets/img/demo-consulting-01.jpg') }}" alt="Advisor"
                                class="rounded-img img-back hover-animate" style="position: relative;">

                            <!-- Overlapping image -->
                            <img src="{{ asset('home/assets/img/demo-consulting-02.jpg') }}" alt="Advisor"
                                class="rounded-img img-front hover-animate-2" style="position: relative;"
                                data-aos="fade-up">
                        </div>

                        <style>
                            .hover-animate-2:hover {
                                animation: moveAround2 3s infinite alternate ease-in-out;
                            }

                            @keyframes moveAround2 {
                                0% {
                                    bottom: -225px;
                                    right: 150px;
                                }

                                25% {
                                    bottom: -240px;
                                    right: 165px;
                                }

                                50% {
                                    bottom: -225px;
                                    right: 150px;
                                }

                                75% {
                                    bottom: -240px;
                                    right: 165px;
                                }

                                100% {
                                    bottom: -225px;
                                    right: 150px;
                                }
                            }
                        </style>

                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start">
                        <h6>Company's vision</h6>
                        <h3 class="fw-700 text-dark-gray ls-minus-2px">Cloud Solutions with Mounteko: Boost Your Business
                            Efficiency</h3>
                        <p class="mb-40px xs-mb-30px w-90 lg-w-95 md-w-100">
                            Streamline your business operations with our all-encompassing cloud solutions. Our professional
                            QuickBooks hosting providers ensure unmatched productivity through flawless QuickBooks
                            Enterprise hosting with near-zero downtime. Experience unparalleled flexibility with our
                            high-speed QuickBooks desktop hosting, offering seamless access to your applications from
                            anywhere.

                        <ul>
                            <li><b>● QuickBooks Enterprise Hosting:</b> Seamless migration and 99.99% uptime.</li>
                            <li><b>● Managed Security: </b> Advanced cybersecurity with 24/7 expert support.</li>
                            <li><b>● Managed Backup: </b> Reliable data protection and elimination of on-premise backups.
                            </li>
                            <li><b>● Cloud Desktop: </b> High-performance access to your desktop and applications from
                                anywhere.</li>
                        </ul>


                        </p>


                        {{-- <a href="#"
                            class="btn btn-dark-gray abtcomp  btn-round-edge btn-medium me-25px  hover-bounce">About
                            Company</a>
                        <a href="#" class="btn btn-link text-dark-gray xs-mt-15px xs-mb-15px  ">How We Work</a>
                        <div
                            class="row align-items-center mt-5 mb-50px xs-mb-25px justify-content-center justify-content-lg-start">
                            <div class="col-auto col-lg-4 border-end border-color-extra-medium-gray text-center">
                                <h1 class=" fw-700  display-4 fw-bold mb-0">4.9</h1>
                            </div>
                            <!-- Rating -->
                            <div class="col-lg-6 col-md-4 col-sm-5 text-start">
                                <div class="d-flex align-items-center">

                                    <div class="ms-3">
                                        <div class="d-flex">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                        <span class="fw-500 text-dark-gray ls-minus-05px">2,488 Genuine rating</span>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>

        <section id="down-section">
            <div id="particles-01" data-particle="true"
                data-particle-options='{"particles": {"number": {"value": 6,"density": {"enable": true,"value_area": 1000}},"color":{"value":["#b7b9be", "#dd6531"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.5,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 8,"random": true,"anim": {"enable": false,"sync": true}},"move": {"enable": true,"speed":2,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'
                class="position-absolute h-100 top-0 left-0 z-index-minus-1"></div>
            <div class="container">
                <div class="row justify-content-center text-center text-lg-start">
                    <div class="col-xl-5 col-lg-6 md-mb-30px xs-mb-25px">
                        <h3 class="fw-600 text-dark-gray ls-minus-2px mb-0"
                            data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            Looking for Future-Driven Cloud Hosting for QuickBooks?</h3>
                    </div>
                    <div class="col-lg-6 offset-xl-1">
                        <p class="w-90 sm-w-100 mx-auto mx-lg-0"
                            data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            With years of industrial experience and technical expertise, Mounteko can be your one-stop
                            destination for all your QuickBooks cloud hosting needs. Feel free to discuss your business
                            requirements with our professionals. </p>
                        <a href="#" class="btn btn-link exp text-dark-gray xs-mt-15px xs-mb-15px  ">Choose us Today
                            for a Better Tomorrow</a>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center mt-5 md-mt-10">
                    <div class="col-xl-4 col-lg-3 col-md-4 sm-mb-35px"
                        data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <!-- start counter item -->
                        <div class="row align-items-center mb-70px sm-mb-35px text-end me-5">

                            <div class="col-12 col-xl-12 col-md-12 last-paragraph-no-margin ">
                              <b>Expert-Level Support</b>
                            </div>
                        </div>
                        <!-- end counter item -->
                        <!-- start counter item -->
                        <div class="row text-end align-items-end me-5 mt-2">

                            <div class="col-12 col-xl-12 col-md-12 last-paragraph-no-margin ">
                               <b>Rock-Solid Uptime</b>

                            </div>
                        </div>
                        <!-- end counter item -->
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-4 text-center animation-float sm-mb-65px"
                        data-anime='{ "el": "childs", "scale": [0, 1], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 100, "easing": "easeOutQuad" }'>

                        <img class="border-radius-100 w-350px hover-animate"
                            src="{{ asset('home/assets/homepage/images/images-demo-consulting-company-01.jpg') }}"
                            alt="" style="position: relative;">
                    </div>

                    <style>
                        .hover-animate:hover {
                            animation: moveAround 3s infinite alternate ease-in-out;
                        }

                        @keyframes moveAround {
                            0% {
                                top: 0px;
                                left: 0px;
                            }

                            25% {
                                top: -15px;
                                left: 15px;
                            }

                            50% {
                                top: 15px;
                                left: -15px;
                            }

                            75% {
                                top: -15px;
                                left: -15px;
                            }

                            100% {
                                top: 0px;
                                left: 0px;
                            }
                        }
                    </style>

                    <div class="col-xl-4 col-lg-3 col-md-4"
                        data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 200, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <!-- start counter item -->
                        <div class="row align-items-center mb-70px sm-mb-35px ms-5">

                            <div class="col-12 col-xl-12 col-md-12 last-paragraph-no-margin">
                                <b>Client Efficiency Boost</b>

                            </div>
                        </div>
                        <!-- end counter item -->
                        <!-- start counter item -->
                        <div class="row align-items-center ms-5">

                            <div class="col-12 col-xl-12 col-md-12 last-paragraph-no-margin">
                                <b>Custom-Built Solutions </b>
                            </div>
                        </div>
                        <!-- end counter item -->
                    </div>
                </div>
            </div>
        </section>

        <!-- start section -->
        <section class="bg-very-light-gray">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 md-mb-50px">
                        <div class="row">
                            <div class="col-sm-6 mt-30px xs-mt-0" data-bottom-top="transform: translateY(50px)"
                                data-top-bottom="transform: translateY(-50px)"
                                data-anime='{ "el": "childs", "translateY": [0, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,0.7], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <!-- start features box item -->
                                <div
                                    class="bg-white border-radius-6px overflow-hidden box-shadow-double-large icon-with-text-style-05 transition-inner-all mb-30px">
                                    <div class="feature-box dark-hover last-paragraph-no-margin">
                                        <div class="content-slide-up content-scale pt-17 pb-17 ps-10 pe-10 sm-p-15">
                                            <div class="feature-box-icon">
                                                <img src="home/assets/homepage/images/Homepage- 247 Assistance.webp" />
                                                <span class="d-inline-block alt-font text-dark-gray fs-20 fw-600"> 24*7
                                                    Assistance</span>
                                            </div>
                                            <div class="feature-box-content">

                                                <p class="lh-28 text-visible text-light-opacity w-80 mx-auto sm-w-100">
                                                    Our QuickBooks cloud hosting providers are there to assist you
                                                    round-the-clock.</p>
                                            </div>
                                            <div class="feature-box-overlay bg-base-color"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- start features box item -->
                                <!-- end features box item -->
                                <div
                                    class="bg-white border-radius-6px overflow-hidden box-shadow-double-large icon-with-text-style-05 transition-inner-all xs-mb-30px">
                                    <div class="feature-box dark-hover last-paragraph-no-margin">
                                        <div class="content-slide-up content-scale pt-17 pb-17 ps-10 pe-10 sm-p-15">
                                            <div class="feature-box-icon">
                                                <img src="home/assets/homepage/images/High-end Security.webp" />
                                                <span class="d-inline-block alt-font text-dark-gray fs-20 fw-600">High-end
                                                    Security</span>
                                            </div>
                                            <div class="feature-box-content">

                                                <p class="lh-28 text-visible text-light-opacity w-80 mx-auto sm-w-100">
                                                    Protect your data with our comprehensive and high-end security measures.
                                                </p>
                                            </div>
                                            <div class="feature-box-overlay bg-base-color"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end features box item -->
                            </div>
                            <div class="col-sm-6" data-bottom-top="transform: translateY(-50px)"
                                data-top-bottom="transform: translateY(50px)"
                                data-anime='{ "el": "childs", "translateY": [0, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,0.7], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <!-- start features box item -->
                                <div
                                    class="bg-white border-radius-6px overflow-hidden box-shadow-double-large icon-with-text-style-05 transition-inner-all mb-30px">
                                    <div class="feature-box dark-hover last-paragraph-no-margin">
                                        <div class="content-slide-up content-scale pt-17 pb-17 ps-10 pe-10 sm-p-15">
                                            <div class="feature-box-icon">
                                                <img src="home/assets/homepage/images/99.99  Uptime.webp" />
                                                 <span class="d-inline-block alt-font text-dark-gray fs-20 fw-600"> 99.99%
                                                    Uptime</span>
                                            </div>
                                            <div class="feature-box-content">

                                                <p class="lh-28 text-visible text-light-opacity w-80 mx-auto sm-w-100">
                                                    We have robust servers delivering an industry-leading standard of
                                                    ultra-reliable performance. </p>
                                            </div>
                                            <div class="feature-box-overlay bg-base-color"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- start features box item -->
                                <!-- end features box item -->
                                <div
                                    class="bg-white border-radius-6px overflow-hidden box-shadow-double-large icon-with-text-style-05 transition-inner-all mt-30px">
                                    <div class="feature-box dark-hover last-paragraph-no-margin">
                                        <div class="content-slide-up content-scale pt-17 pb-17 ps-10 pe-10 sm-p-15">
                                            <div class="feature-box-icon">
                                                <img src="home/assets/homepage/images/reliable hosting plan.webp"/>
                                                <span class="d-inline-block alt-font text-dark-gray fs-20 fw-600">Reliable
                                                    Hosting Plans</span>
                                            </div>
                                            <div class="feature-box-content">

                                                <p class="lh-28 text-visible text-light-opacity w-80 mx-auto sm-w-100">
                                                    Get customized and reliable QuickBooks hosting plans that work wonders
                                                    for your business.</p>
                                            </div>
                                            <div class="feature-box-overlay bg-base-color"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end features box item -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 text-center text-lg-start">
                        <h3 class="fw-600 text-dark-gray ls-minus-2px mb-0"
                            data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        How Mounteko QuickBooks Cloud Hosting Can
                            Make A Difference?</h3>
                        <p class="w-90 xs-w-100 mx-auto mx-lg-0">At Mounteko, we deliver more than QuickBooks cloud
                            hosting—we craft scalable, future-proof solutions that drive your business forward. Enjoy
                            ultra-fast deployment, top-notch security, and 24/7 expert support. Whether it's QuickBooks
                            hosting or virtual desktops, our cutting-edge infrastructure ensures reliability and growth.
                            Choose us for a seamless cloud experience that meets modern demands.</p>
                        <a href="demo-consulting-contact.html"
                            class="btn btn-large btn-dark-gray btn-box-shadow mt-10px btn-round-edge">Connect with
                            Experts</a>
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
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>F.A.Q</h2>
                    <h3>Frequently Asked <span>Questions</span></h3>

                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-4 ">
                        <div class="card-img mb-3">
                            <img src="{{ asset('home/assets/img/faqimage.png') }}" alt="no available"
                                class="img-fluid services-img rounded hover-animate" style="position: relative;width: 400px;height: 400px;">
                        </div>

                        <style>
                            .hover-animate:hover {
                                animation: moveAround 3s infinite alternate ease-in-out;
                            }

                            @keyframes moveAround {
                                0% {
                                    top: 0px;
                                    left: 0px;
                                }

                                25% {
                                    top: -15px;
                                    left: 15px;
                                }

                                50% {
                                    top: 15px;
                                    left: -15px;
                                }

                                75% {
                                    top: -15px;
                                    left: -15px;
                                }

                                100% {
                                    top: 0px;
                                    left: 0px;
                                }
                            }
                        </style>

                    </div>
                    <div class="col-xl-8">
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
        <!-- End Frequently Asked Questions Section -->

        <!-- ======= Blog Section ======= -->
        @if ($blogs && count($blogs) > 0)
            <section id="blog" class="blog section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h3>Our <span>Blogs</span></h3>

                    </div>
                    <x-blog-slider :blogs="$blogs" />
                </div>
            </section>
        @endif
        <!-- ======= END Blog Section ======= -->

    </main><!-- End #main -->
@endsection
@section('script-area')
    <!-- javascript libraries -->
    <script data-cfasync="false" src="{{ asset('home/assets/homepage/js/cloudflare-static-email-decode.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('home/assets/homepage/js/6617-js-jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home/assets/homepage/js/567-js-vendors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home/assets/homepage/js/7637-js-main.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.theme-demos').empty();

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
