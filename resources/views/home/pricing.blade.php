@extends('home.includes.layout')
@section('title', 'Mounteko Cloud Hosting pricing & plans')
@section('meta-description', '')
@section('content')
    <style>
        .pricing-table-area {
            background-color: #f8faff;
            padding: 60px 0;
            position: relative;
            overflow: hidden;
        }

        .custom-container {
            max-width: 1140px;
            margin: 0 auto;
            position: relative;
        }



        .section-header {
            text-align: left;
            margin-bottom: 7rem;
            position: relative;
            z-index: 1;
            padding: 40px;
            background-color: #eef3fc;
            border-radius: 15px;
        }

        .section-subtitle {
            color: var(--primary-color);
            font-weight: bold;
            letter-spacing: 1.5px;
        }

        .section-title {
            font-size: 36px;
            font-weight: 700;
            margin-top: 10px;
        }

        .section-header p {
            margin-top: 20px;
            font-size: 16px;
            color: #6c757d;
        }

        .theme-btn {
            background-color: var(--primary-color);
            color: #fff;
            padding: 10px 20px;
            border-radius: 25px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .pricing-table-lists {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .pricing-table-box {
            background-color: #fff;
            /* background-color: #F3F6FD; */
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            text-align: center;
            flex: 0 0 30%;
        }

        .pricing-table-box h1 {
            font-size: 36px;
            margin-bottom: 10px;
            color: var(--primary-color);
        }

        .pricing-table-box h1 sup {
            top: -15px;
            font-size: 20px;
        }

        .pricing-table-box h5 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .pricing-table-box ul {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .pricing-table-box ul li {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .pricing-table-box ul li i {
            color: var(--primary-color);
            margin-right: 10px;
        }

        .our-team-2-header .bg-shape {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            object-fit: cover;
            height: 100%;
            pointer-events: none;
        }
    </style>
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
               <h1 class="post__title" style="color: white;">Pricing</h1>
               <nav class="breadcrumbs">
                   <ul style="list-style: none; padding: 0; margin: 0; display: flex; justify-content: center; gap: 10px;">
                       <li><a href="{{ route('home') }}" style="color: white; text-decoration: none;">Home</a></li>
                       <li aria-current="page" style="color: white;">Pricing</li>
                   </ul>
               </nav>
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

                <div class="pricing-table-lists">
                    <div class="container-fluid">
                        <div class="row justify-content-center g-4">
                            @forelse ($PricePlan as $plan)
                                <div class="col-md-4">
                                    <div class="card h-100 shadow text-center p-4">
                                        <div class="card-body d-flex flex-column">
                                            <h1><sup>${{ $plan->price }}</sup>/{{ $plan->billing_cycle }}</h1>
                                            <h5 class="mb-3">{{ $plan->title }}</h5>

                                            <ul class="list-unstyled flex-grow-1">
                                                <li><i class="fas fa-check"></i> {{ $plan->trial_days }} Days Free Trial</li>
                                                @if (!empty(json_decode($plan->features)))
                                                    @foreach (json_decode($plan->features) as $feature)
                                                        <li><i class="fas fa-check"></i> {{ $feature }}</li>
                                                    @endforeach
                                                @else
                                                    <li><i class="fas fa-check"></i> No features available</li>
                                                @endif
                                            </ul>

                                            <!-- Centered Button at Bottom -->
                                            <div class="mt-auto d-flex justify-content-center">
                                                <a href="#" class="btn btn-sm btn-primary rounded-pill px-4"
                                                data-bs-toggle="modal" data-bs-target="#scheduleModal">Book Now</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-center">No Price is there!</p>
                            @endforelse
                        </div>
                    </div>


                    {{-- <div class="pricing-table-box">
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
                    </div> --}}
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
