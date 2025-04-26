@extends('home.includes.layout')
@section('title', 'Become an Official Affiliate Partner with Mounteko Hosting')
@section('meta-description', 'Join our hosting affiliate program and enjoy high affiliate earnings, fast payouts, and top conversion rates. We are uniquely positioned to offer the best web hosting affiliate program.')
@section('header-area')
    <link href="{{ asset('home/assets/css/partner.css') }}" rel="stylesheet">
@endsection
@section('content')




    <main id="main">

       <!-- ======= Breadcrumbs Section ======= -->
       <section class="breadcrumbs">
        @php
        $baseColor =  settingValue('primary') ?? '#65E82E'; // Change this dynamically
        $lightColor = adjustBrightness($baseColor, 100); // Lighter Shade
        $darkColor = adjustBrightness($baseColor, -50); // Darker Shade
        @endphp
         <div class="optech-breadcrumb"
         style="background-image: url('{{ asset('storage/' . settingValue('breadcrumb_image')) }}');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
                height: 450px;">
            <div class="container">
                <h1 class="post__title" style="color: white;">Partners</h1>
                <nav class="breadcrumbs">
                    <ul style="list-style: none; padding: 0; margin: 0; display: flex; justify-content: center; gap: 10px;">
                        <li><a href="{{ route('home') }}" style="color: white; text-decoration: none;">Home</a></li>
                        <li aria-current="page" style="color: white;">Partners</li>
                    </ul>
                </nav>
            </div>
        </div>
    </section><!-- Breadcrumbs Section -->

        <section class="rts-pricing-five inner">
            <div class="container">
                <div class="section-inner">
                    <div class="pricing-list">
                        <div class="row setrow g-30">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="pricing-wrapper">
                                    <div class="icon">
                                        <img src="{{ asset('home/assets/img/icon-1.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Earn at Your Pace</h4>
                                        <p class="description">SUPER affiliate? Our customized
                                            affiliate commission
                                        </p>
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
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="pricing-wrapper">
                                    <div class="icon">
                                        <img src="{{ asset('home/assets/img/icon-2.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">WordPress Hosting</h4>
                                        <p class="description">Leverage Cloud ways to your
                                            passive income with lifetime</p>
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
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="pricing-wrapper">
                                    <div class="icon">
                                        <img src="{{ asset('home/assets/img/icon-3.svg') }}" alt="">
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
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="pricing-wrapper">
                                    <div class="icon">
                                        <img src="{{ asset('home/assets/img/icon-4.svg') }}" alt="">
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
                            <a href="#" class="rts-btn btn__long primary__bg white__color">View Plan <i
                                    class="fa-solid fa-arrow-right"></i></a>
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

        <section class="rts-affiliate alice__blue section__padding">
            <div class="ms-4">
                <div class="row  g-30">
                    <div class="col-lg-5">
                        <div class="become__affiliate__text">
                            <h3 class="title">
                                Become an Affiliate in
                                Three Simple Steps
                            </h3>
                            <p>You don’t need to fill long forms or wait for any approval call. Join the hostie affiliate
                                program flawlessly.</p>
                            <a href="pricing.html" class="rts-btn btn__long primary__bg white__color">View Plan <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="become__affiliate">
                            <div class="become__affiliate__content">

                                <div class="single">
                                    <div class="icon">
                                        <img src="{{ asset('home/assets/img/intersect.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4>Join</h4>
                                        <p class="mb-0">Sign up for a Hostie account and fill in the required details.
                                        </p>
                                    </div>
                                </div>

                                <div class="single">
                                    <div class="icon">
                                        <img src="{{ asset('home/assets/img/mike.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4>promote</h4>
                                        <p class="mb-0">Sign up for a Hostie account and fill in the required details.
                                        </p>
                                    </div>
                                </div>

                                <div class="single">
                                    <div class="icon">
                                        <img src="{{ asset('home/assets/img/earn-api.svg') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4>Earn</h4>
                                        <p class="mb-0">Sign up for a Hostie account and fill in the required details.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="become__affiliate__image">
                                <img src="{{ asset('home/assets/img/affilate-image (1).png') }}" height="400"
                                    width="310" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="rts-promote-hostie  section__padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="rts-section w-420 text-center">
                        <h2 class="rts-section__title">Why Promote Hostie</h2>
                        <p class="rts-section__description">
                            We are uniquely positioned to offer the best web hosting affiliate program
                        </p>
                    </div>
                </div>
                <div class="row g-30">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card-feature">
                            <div class="card-feature__single">
                                <div class="card-feature__single--icon">
                                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M52.5 15H45V7.5C44.9989 6.50579 44.6034 5.55262 43.9004 4.84961C43.1974 4.1466 42.2442 3.75114 41.25 3.75H7.5C6.50579 3.75114 5.55262 4.1466 4.84961 4.84961C4.1466 5.55262 3.75114 6.50579 3.75 7.5V41.25C3.75114 42.2442 4.1466 43.1974 4.84961 43.9004C5.55262 44.6034 6.50579 44.9989 7.5 45H15V52.5C15.0011 53.4942 15.3966 54.4474 16.0996 55.1504C16.8026 55.8534 17.7558 56.2489 18.75 56.25H52.5C53.4942 56.2489 54.4474 55.8534 55.1504 55.1504C55.8534 54.4474 56.2489 53.4942 56.25 52.5V18.75C56.2489 17.7558 55.8534 16.8026 55.1504 16.0996C54.4474 15.3966 53.4942 15.0011 52.5 15ZM7.5 41.25V7.5H41.25V15H18.75C17.7558 15.0011 16.8026 15.3966 16.0996 16.0996C15.3966 16.8026 15.0011 17.7558 15 18.75V41.25H7.5ZM41.25 41.25H36.4014L18.75 23.5988V18.75H23.5986L41.2523 36.4043L41.25 41.25ZM18.75 28.9014L31.0986 41.25H18.75V28.9014ZM41.2519 31.1006L28.9014 18.75H41.25L41.2519 31.1006ZM18.75 52.5V45H41.25C42.2442 44.9989 43.1974 44.6034 43.9004 43.9004C44.6034 43.1974 44.9989 42.2442 45 41.25V18.75H52.5V52.5H18.75Z"
                                            fill="white" />
                                        <path
                                            d="M52.5 15H45V7.5C44.9989 6.50579 44.6034 5.55262 43.9004 4.84961C43.1974 4.1466 42.2442 3.75114 41.25 3.75H7.5C6.50579 3.75114 5.55262 4.1466 4.84961 4.84961C4.1466 5.55262 3.75114 6.50579 3.75 7.5V41.25C3.75114 42.2442 4.1466 43.1974 4.84961 43.9004C5.55262 44.6034 6.50579 44.9989 7.5 45H15V52.5C15.0011 53.4942 15.3966 54.4474 16.0996 55.1504C16.8026 55.8534 17.7558 56.2489 18.75 56.25H52.5C53.4942 56.2489 54.4474 55.8534 55.1504 55.1504C55.8534 54.4474 56.2489 53.4942 56.25 52.5V18.75C56.2489 17.7558 55.8534 16.8026 55.1504 16.0996C54.4474 15.3966 53.4942 15.0011 52.5 15ZM7.5 41.25V7.5H41.25V15H18.75C17.7558 15.0011 16.8026 15.3966 16.0996 16.0996C15.3966 16.8026 15.0011 17.7558 15 18.75V41.25H7.5ZM41.25 41.25H36.4014L18.75 23.5988V18.75H23.5986L41.2523 36.4043L41.25 41.25ZM18.75 28.9014L31.0986 41.25H18.75V28.9014ZM41.2519 31.1006L28.9014 18.75H41.25L41.2519 31.1006ZM18.75 52.5V45H41.25C42.2442 44.9989 43.1974 44.6034 43.9004 43.9004C44.6034 43.1974 44.9989 42.2442 45 41.25V18.75H52.5V52.5H18.75Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <h5 class="card-feature__single--title">
                                    Freedom of Choice
                                </h5>
                                <p class="card-feature__single--description">
                                    Ample cloud hosting flexibility with 5 industry-leading
                                </p>
                                <a href="#" class="readmore"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card-feature">
                            <div class="card-feature__single">
                                <div class="card-feature__single--icon">
                                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M30 0C46.5685 0 60 13.4315 60 30C60 46.5685 46.5685 60 30 60C13.4315 60 0 46.5685 0 30C0 13.4315 13.4315 0 30 0ZM30 3.15789C15.1755 3.15789 3.15789 15.1755 3.15789 30C3.15789 44.8245 15.1755 56.8421 30 56.8421C44.8245 56.8421 56.8421 44.8245 56.8421 30C56.8421 15.1755 44.8245 3.15789 30 3.15789ZM46.906 13.094C47.4751 13.6632 47.5778 14.6899 46.906 15.327L35.4413 26.7916C35.9969 27.7319 36.3158 28.8287 36.3158 30C36.3158 33.4881 33.4881 36.3158 30 36.3158C26.5119 36.3158 23.6842 33.4881 23.6842 30C23.6842 26.5119 26.5119 23.6842 30 23.6842C31.1713 23.6842 32.2681 24.0031 33.2084 24.5587L44.673 13.094C45.2896 12.4774 46.2893 12.4774 46.906 13.094ZM30 26.8421C28.2559 26.8421 26.8421 28.2559 26.8421 30C26.8421 31.7441 28.2559 33.1579 30 33.1579C31.7441 33.1579 33.1579 31.7441 33.1579 30C33.1579 28.2559 31.7441 26.8421 30 26.8421ZM48.6594 21.4359C49.8839 24.0996 50.5263 27.0059 50.5263 30C50.5263 30.872 49.8194 31.5789 48.9474 31.5789C48.0753 31.5789 47.3684 30.872 47.3684 30C47.3684 27.4636 46.8254 25.0069 45.7902 22.7548C45.4259 21.9625 45.773 21.0249 46.5653 20.6607C47.3577 20.2965 48.2952 20.6436 48.6594 21.4359ZM30 9.47368C33.0217 9.47368 35.9539 10.1281 38.6373 11.3744C39.4282 11.7417 39.7715 12.6806 39.4042 13.4715C39.0369 14.2624 38.0979 14.6058 37.3071 14.2384C35.0384 13.1847 32.5599 12.6316 30 12.6316C20.4077 12.6316 12.6316 20.4077 12.6316 30C12.6316 30.872 11.9247 31.5789 11.0526 31.5789C10.1806 31.5789 9.47368 30.872 9.47368 30C9.47368 18.6636 18.6636 9.47368 30 9.47368Z"
                                            fill="#2D3C58" />
                                    </svg>
                                </div>
                                <h5 class="card-feature__single--title">
                                    Good Performance
                                </h5>
                                <p class="card-feature__single--description">
                                    Add social networking right into WordPress site.
                                </p>
                                <a href="#" class="readmore"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card-feature">
                            <div class="card-feature__single">
                                <div class="card-feature__single--icon">
                                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M46.875 18.75H46.7625C46.2854 14.6389 44.3142 10.8465 41.2236 8.09387C38.133 5.34123 34.1387 3.82031 30 3.82031C25.8613 3.82031 21.867 5.34123 18.7764 8.09387C15.6858 10.8465 13.7146 14.6389 13.2375 18.75H13.125C10.6386 18.75 8.25403 19.7377 6.49587 21.4959C4.73772 23.254 3.75 25.6386 3.75 28.125C3.75 30.6114 4.73772 32.996 6.49587 34.7541C8.25403 36.5123 10.6386 37.5 13.125 37.5H16.875V20.625C16.875 17.144 18.2578 13.8056 20.7192 11.3442C23.1806 8.88281 26.519 7.50001 30 7.50001C33.481 7.50001 36.8194 8.88281 39.2808 11.3442C41.7422 13.8056 43.125 17.144 43.125 20.625V39.375C43.1237 41.0929 42.5328 42.7583 41.4509 44.0928C40.369 45.4272 38.8618 46.3498 37.1813 46.7063C36.6807 44.9508 35.5572 43.4382 34.0212 42.4519C32.4852 41.4655 30.6422 41.0732 28.8377 41.3485C27.0332 41.6238 25.391 42.5477 24.2189 43.9471C23.0469 45.3465 22.4254 47.1254 22.471 48.9502C22.5167 50.775 23.2262 52.5206 24.4668 53.8597C25.7073 55.1988 27.3936 56.0395 29.2096 56.2242C31.0256 56.409 32.8467 55.9251 34.3315 54.8633C35.8163 53.8014 36.8628 52.2345 37.275 50.4563C39.9356 50.0618 42.3669 48.7271 44.128 46.6942C45.8892 44.6613 46.8637 42.0647 46.875 39.375V37.5C49.3614 37.5 51.746 36.5123 53.5041 34.7541C55.2623 32.996 56.25 30.6114 56.25 28.125C56.25 25.6386 55.2623 23.254 53.5041 21.4959C51.746 19.7377 49.3614 18.75 46.875 18.75ZM7.5 28.125C7.5 26.6332 8.09263 25.2024 9.14752 24.1475C10.2024 23.0926 11.6332 22.5 13.125 22.5V33.75C11.6332 33.75 10.2024 33.1574 9.14752 32.1025C8.09263 31.0476 7.5 29.6169 7.5 28.125ZM30 52.5C29.2583 52.5 28.5333 52.2801 27.9166 51.868C27.2999 51.456 26.8193 50.8703 26.5355 50.1851C26.2516 49.4999 26.1774 48.7459 26.3221 48.0184C26.4667 47.291 26.8239 46.6228 27.3484 46.0984C27.8728 45.5739 28.541 45.2168 29.2684 45.0721C29.9958 44.9274 30.7498 45.0016 31.4351 45.2855C32.1203 45.5693 32.706 46.0499 33.118 46.6666C33.5301 47.2833 33.75 48.0083 33.75 48.75C33.75 49.7446 33.3549 50.6984 32.6516 51.4017C31.9484 52.1049 30.9946 52.5 30 52.5ZM46.875 33.75V22.5C48.3668 22.5 49.7976 23.0926 50.8525 24.1475C51.9074 25.2024 52.5 26.6332 52.5 28.125C52.5 29.6169 51.9074 31.0476 50.8525 32.1025C49.7976 33.1574 48.3668 33.75 46.875 33.75Z"
                                            fill="#2D3C58" />
                                    </svg>
                                </div>
                                <h5 class="card-feature__single--title">
                                    24/7 Expert Support
                                </h5>
                                <p class="card-feature__single--description">
                                    Easily eCommerce functionality
                                    to site with woocommerce
                                </p>
                                <a href="#" class="readmore"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card-feature">
                            <div class="card-feature__single">
                                <div class="card-feature__single--icon">
                                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M20.625 3.75H3.75V20.625H7.5V7.5H20.625V3.75ZM3.75 39.375V56.25H20.625V52.5H7.5V39.375H3.75ZM56.25 3.75V20.625H52.5V7.5H39.375V3.75H56.25ZM39.375 56.25H56.25V39.375H52.5V52.5H39.375V56.25ZM30.9188 9.61888L47.7938 18.9939C48.0834 19.1567 48.3245 19.3935 48.4926 19.6801C48.6606 19.9668 48.7494 20.2929 48.75 20.6251V39.3751C48.7532 39.7037 48.67 40.0273 48.5088 40.3136C48.3476 40.5999 48.1139 40.8388 47.8313 41.0064L30.9563 50.3814C30.6712 50.5459 30.3479 50.6326 30.0188 50.6326C29.6896 50.6326 29.3663 50.5459 29.0813 50.3814L12.2063 41.0064C11.9166 40.8436 11.6755 40.6068 11.5074 40.3201C11.3394 40.0335 11.2506 39.7074 11.25 39.3751V20.6251C11.2468 20.2966 11.33 19.9729 11.4912 19.6866C11.6525 19.4003 11.8861 19.1614 12.1688 18.9939L29.0438 9.61888C29.3288 9.45431 29.6521 9.36768 29.9813 9.36768C30.3104 9.36768 30.6337 9.45431 30.9188 9.61888ZM43.0125 20.6251L30 13.3876L16.9875 20.6251L30 27.8626L43.0125 20.6251ZM28.125 31.1064L15 23.8126V38.2689L28.125 45.5626V31.1064ZM31.875 31.1064V45.5626L45 38.2689V23.8126L31.875 31.1064Z"
                                            fill="#2D3C58" />
                                    </svg>
                                </div>
                                <h5 class="card-feature__single--title">
                                    Simplicity
                                </h5>
                                <p class="card-feature__single--description">
                                    Makes it easy for your visitors to email you from your site!
                                </p>
                                <a href="#" class="readmore"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
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
        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>F.A.Q</h2>
                    <h3>Frequently Asked <span>Questions</span></h3>
                    <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas
                        atque
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
        {{-- Blog section --}}
        <section class="user-blog" class="footer-top">
            <x-blog :blogs="$blogs" />
        </section>
        {{-- End Blog --}}

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
