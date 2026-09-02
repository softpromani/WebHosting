@extends('home.includes.layout')
{{-- @section('title', 'Contact Mounteko') --}}
@section('title', 'Contact Mounteko | Talk to a Managed IT & Security Expert')
{{-- @section('meta-description', 'Get in touch with us.') --}}
@section('meta-description',
    'Get in touch with Mounteko\'s IT support team. Call, email, or fill out our form — we
    respond within one business day.')
@section('header-area')
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/new_home_custom.css') }}?v={{ time() }}">
    <style>
        .contact-us-form .section-heading {
            margin-bottom: 25px !important;
        }
        .contact-us-form .section-heading h2,
        h2.sales-team-heading {
            font-size: 28px !important;
            font-weight: 700 !important;
            line-height: 1.35 !important;
            color: #1a202c !important;
            margin-bottom: 10px !important;
            font-family: inherit !important;
        }
        .contact-us-form .section-heading p,
        p.sales-team-sub {
            font-size: 15px !important;
            color: #64748b !important;
            line-height: 1.5 !important;
            margin-bottom: 0 !important;
        }
    </style>
@endsection
@section('content')

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            @php
                $baseColor = settingValue('primary') ?? '#65E82E'; // Change this dynamically
                $lightColor = adjustBrightness($baseColor, 100); // Lighter Shade
                $darkColor = adjustBrightness($baseColor, -50); // Darker Shade
            @endphp
            <div class="optech-breadcrumb"
                style="background-image: url('{{ asset('storage/' . settingValue('breadcrumb_image')) }}');">
                <div class="container">
                    <h1 class="post__title" style="color: white;">Contact us</h1>
                    <nav class="breadcrumbs">
                        <ul class="breadcrumb-nav-list">
                            <li><a href="{{ route('home') }}" class="breadcrumb-link">Home</a></li>
                            <li aria-current="page" class="breadcrumb-current">Contact us</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section><!-- Breadcrumbs Section -->
        <section class="contact-promo ptb-120">
            <div class="container">
                <div class="row">
                    <!-- Card 1: Phone -->
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div
                            class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                            <i class="fas fa-phone fa-3x"></i>
                            <div class="contact-promo-info mb-4">
                                <h5>Give us a call</h5>
                                <p>Give us a ring. Our Experts are standing by <strong>monday to friday</strong>
                                    from <strong>9am to 5pm EST.</strong></p>
                            </div>
                            <a href="tel:{{ settingValue('phone') }}"
                                class="btn btn-primary mt-auto">{{ settingValue('phone') }}</a>
                        </div>
                    </div>
                    <!-- Card 2: Email -->
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div
                            class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                            <i class="fas fa-envelope fa-3x"></i>
                            <div class="contact-promo-info mb-4">
                                <h5>Email Us</h5>
                                <p>Simply drop us an email at <a href="mailto:{{ settingValue('email') }}"><strong
                                            class="mai">{{ settingValue('email') }}</strong></a>
                                    and you'll receive a reply within 24 hours.</p>
                            </div>
                            <a href="mailto:{{ settingValue('email') }}" class="btn btn-primary mt-auto">Email
                                Us</a>
                        </div>
                    </div>
                    <!-- Card 3: Chat -->
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div
                            class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                            <i class="fas fa-comments fa-3x"></i>
                            <div class="contact-promo-info mb-4">
                                <h5>Chat with us</h5>
                                <p>We've got live Social Experts waiting to help you <strong>monday to
                                        friday</strong> from <strong>9am to 5pm EST.</strong></p>
                            </div>
                            <a href="#"
                                onclick="if(typeof Tawk_API !== 'undefined') { Tawk_API.maximize(); } return false;"
                                class="btn btn-primary mt-auto">Chat with us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Contact Section ======= -->
        {{-- <section id="contact" class="contact py-5">
            <div class="container">


                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>{{ settingValue('address') }}</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>{{ settingValue('email') }}</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>{{ settingValue('phone') }}</p>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-6 ">
                        <iframe class="mb-4 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="{{ route('contactStore') }}" method="post" role="form" class="php-email-form">
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <div class="col form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section> --}}

        <section class="contact-us-form pt-60 pb-120 bg-solitude-blue contact" id="contact  ">
            <div class="container">
                <div class="row justify-content-lg-between align-items-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="contact-us-img">
                            <img src="{{ asset('home/assets/img/contact-us-img-2.svg') }}" alt="contact us"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="section-heading">
                            <h2 class="sales-team-heading" style="font-size: 28px !important; font-weight: 700 !important; line-height: 1.35 !important; color: #1a202c !important; margin-bottom: 10px !important; font-family: inherit !important;">Talk to Our Sales & Marketing Department Team</h2>
                            <p class="sales-team-sub" style="font-size: 15px !important; color: #64748b !important; line-height: 1.5 !important; margin-bottom: 0 !important;">Tell us what you need — our team typically replies within one business day.</p>
                        </div>
                        <form action="{{ route('contactStore') }}" method="post" role="form"
                            class="php-email-form">
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="fname" class="mb-1">First name <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="firstName" required
                                            placeholder="First name" aria-label="First name" name="fname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="lname" class="mb-1">Last name</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="lastName"
                                            placeholder="Last name" aria-label="Last name" name="lname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="email" class="mb-1">Email <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" id="email" required
                                            placeholder="Email" name="email" aria-label="Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="phone" class="mb-1">Phone <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            required placeholder="Phone" aria-label="Phone">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="subject" class="mb-1">What are you contacting us about? <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <select class="form-control" id="subject" name="subject" required>
                                            <option value="" disabled selected>Select an option...</option>
                                            <option value="IT Support">IT Support</option>
                                            <option value="Cybersecurity">Cybersecurity</option>
                                            <option value="Cloud">Cloud</option>
                                            <option value="Website">Website</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="yourMessage" class="mb-1">Message <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <textarea class="form-control" id="yourMessage" required placeholder="How can we help you?" style="height: 120px"
                                            name="message"></textarea>
                                    </div>
                                </div>
                                <div class=" col-12 my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Get in Touch</button>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
