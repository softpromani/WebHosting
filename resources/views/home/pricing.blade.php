@extends('home.includes.layout')
@section('title', 'Pricing')
@section('content')
   
    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Pricing</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="#">Pricing</a></li>
                    </ol>
                </div>

            </div>
        </section><!-- Breadcrumbs Section -->

        <!-- ======= Contact Section ======= -->
        <section class="pricing-table-area">
            <div class="custom-container">
                <div class="section-header our-team-2-header d-flex align-items-center justify-content-between w-full ">
                    <img class="animation-slide-right bg-shape" src="{{ asset('home/assets/img/bg-shape-10.svg') }}"
                        alt="Shape">
                    <div class="left">
                        <h5 class="section-subtitle" style="font-family: Syne, Bangla552, sans-serif;">OUR PRICING</h5>
                        <h1 class="section-title" style="font-family: Yantramanav, Bangla552, sans-serif;">Our affordable
                            pricing plans</h1>
                        <p>We believe in transparency as the foundation of trust with our clients.</p>
                    </div>
                    <a href="#" class="theme-btn">Buy a best plan that match your budget</a>
                </div>

                <div class="pricing-table-lists ">
                    <div class="pricing-table-box ">
                        <h1><sup>$10</sup>/year</h1>
                        <h5>Entry Level package</h5>
                        <p>Billed annually</p>
                        <ul>
                            <li><i class="fas fa-check"></i> 30 Days Free Trial</li>
                            <li><i class="fas fa-check"></i> Unlimited Features</li>
                            <li><i class="fas fa-check"></i> Easy Data Backup</li>
                            <li><i class="fas fa-check"></i> Cloud Database</li>
                            <li><i class="fas fa-check"></i> Sync to All Devices</li>
                        </ul>
                        <a href="#" class="theme-btn">Get started</a>
                    </div>
                    <div class="pricing-table-box">
                        <h1><sup>$20</sup>/year</h1>
                        <h5>Normal Package</h5>
                        <p>Billed annually</p>
                        <ul>
                            <li><i class="fas fa-check"></i> 30 Days Free Trial</li>
                            <li><i class="fas fa-check"></i> Unlimited Features</li>
                            <li><i class="fas fa-check"></i> Easy Data Backup</li>
                            <li><i class="fas fa-check"></i> Cloud Database</li>
                            <li><i class="fas fa-check"></i> Sync to All Devices</li>
                        </ul>
                        <a href="#" class="theme-btn">Get started</a>
                    </div>
                    <div class="pricing-table-box">
                        <h1><sup>$30</sup>/year</h1>
                        <h5>Premium Package</h5>
                        <p>Billed annually</p>
                        <ul>
                            <li><i class="fas fa-check"></i> 30 Days Free Trial</li>
                            <li><i class="fas fa-check"></i> Unlimited Features</li>
                            <li><i class="fas fa-check"></i> Easy Data Backup</li>
                            <li><i class="fas fa-check"></i> Cloud Database</li>
                            <li><i class="fas fa-check"></i> Sync to All Devices</li>
                        </ul>
                        <a href="#" class="theme-btn">Get started</a>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
