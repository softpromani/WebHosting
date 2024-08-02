@extends('home.includes.layout')
@section('title', 'Contact Us')
@section('content')
    <style>
        .contact-us-promo {
            background-color: #fff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s;
        }

        .contact-us-promo:hover {
            transform: translateY(-10px);
        }

        .contact-us-promo .fa-3x {
            color: var(--primary-color);
            margin-bottom: 30px;
        }

        .contact-us-promo h5 {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .contact-us-promo p {
            font-size: 18px;
            color: #6c757d;
        }

        .mai {
            font-size: 18px;
            color: #6c757d;
        }

        .contact-us-promo .btn-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: bold;
        }

        .contact-us-promo .btn-primary {
            background-color: var(--primary-color);
            color: #fff;
            padding: 10px 20px;
            border-radius: 25px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .contact-us-form {
            /* background-color: #f8faff; */
            padding-top: 60px;
            padding-bottom: 120px;
        }

        .contact-us-form .section-heading {
            margin-bottom: 30px;
        }

        .contact-us-form .register-form label {
            font-weight: bold;
        }

        .contact-us-form .register-form .input-group {
            margin-bottom: 15px;
        }

        .contact-us-form .register-form .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            border-radius: 25px;
            padding: 10px 20px;
        }

        .contact-us-img {
            text-align: center;
        }

        .contact-us-img img {
            max-width: 100%;
            width: 80%;
            height: auto;
        }

        .bg-solitude-blue {
            background-color: #F8FAFF;
            /* background-color: #F0F4FD; */
        }
    </style>
    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Contact Us</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ol>
                </div>

            </div>
        </section><!-- Breadcrumbs Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">


                <section class="contact-promo ptb-120">
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                                <div
                                    class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                                    <i class="fas fa-phone fa-3x"></i>
                                    <div class="contact-promo-info mb-4">
                                        <h5>Give us a call</h5>
                                        <p>Give us a ring. Our Experts are standing by <strong>monday to friday</strong>
                                            from <strong>9am to 5pm EST.</strong></p>
                                    </div>
                                    <a href="tel:00-976-561-008"
                                        class="btn btn-link mt-auto">{{ settingValue('phone') }}</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                                <div
                                    class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                                    <i class="fas fa-envelope fa-3x"></i>
                                    <div class="contact-promo-info mb-4">
                                        <h5>Email Us</h5>
                                        <p>Simply drop us an email at <a href="#"><strong
                                                    class="mai">{{ settingValue('email') }}</strong></a>
                                            and you'll receive a reply within 24 hours.</p>
                                    </div>
                                    <a href="#" class="btn btn-primary mt-auto">Email Us</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                                <div
                                    class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                                    <i class="fas fa-comments fa-3x"></i>
                                    <div class="contact-promo-info mb-4">
                                        <h5>Chat with us</h5>
                                        <p>We've got live Social Experts waiting to help you <strong>monday to
                                                friday</strong> from <strong>9am to 5pm EST.</strong></p>
                                    </div>
                                    <a href="#" class="btn btn-link mt-auto">Chat with us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>



                {{-- <div class="row" data-aos="fade-up" data-aos-delay="100">
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

                </div> --}}

                {{-- <div class="row" data-aos="fade-up" data-aos-delay="100">

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

                </div> --}}

            </div>
        </section>
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
                            <h2>Talk to Our Sales & Marketing Department Team</h2>
                            <p>Collaboratively promote client-focused convergence vis-a-vis customer directed
                                alignments via standardized infrastructures.</p>
                        </div>
                        <form action="{{ route('contactStore') }}" method="post" role="form" class="php-email-form">
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
                                        <input type="text" class="form-control" id="lastName" placeholder="Last name"
                                            aria-label="Last name" name="lname">
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
                                        <input type="text" class="form-control" id="phone" name="phone" required
                                            placeholder="Phone" aria-label="Phone">
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
