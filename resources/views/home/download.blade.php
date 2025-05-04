@extends('home.includes.layout')

@section('title', 'About Mounteko Cloud Hosting Providers')

@section('meta-description',
    'We are a trusted provider of cloud solutions, dedicated to making technology accessible
    and secure. Our mission is to empower businesses with efficient, scalable, and adaptable tools that fit today’s dynamic
    work environment.')

@section('header-area')
    <!-- Stylesheets and Icons -->
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-vendors.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-responsive.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/startup-startup.css') }}">
@endsection

@section('content')

    <!-- ======= BreadCrumb ======= -->
    @php
        $baseColor = settingValue('primary') ?? '#65E82E'; // Default if setting is not found
        $lightColor = adjustBrightness($baseColor, 100); // Lighter shade
        $darkColor = adjustBrightness($baseColor, -50); // Darker shade
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
            <h1 class="post__title text-white" style="font-size: 2.5rem; margin-bottom: 0px;">Download</h1>
            <nav class="breadcrumbs">
                <ul class="list-unstyled d-flex justify-content-center gap-2 m-0">
                    <li><a href="{{ route('home') }}" class="text-white text-decoration-none">Home</a></li>
                    <li aria-current="page" class="text-white">Download</li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Start Section -->
    <section id="down-section" style="min-height: 100vh; display: flex; align-items: center; justify-content: center;">
        <div class="container-fluid mt-5">
            <div class="card shadow border-0">
                <div class="card-body">
                    <div class="row align-items-center">
                        <!-- Image Microsoft -->
                        <div class="col-md-4 text-center d-flex justify-content-center align-items-center"
                            style="min-height: 300px;">
                            <img src="{{ asset('home/assets/homepage/images/rdp Windows.webp') }}" alt="RDP Image"
                                class="img-fluid"
                                style="width: 300px; height: 300px; object-fit: cover; border-radius: 30px; border: 5px solid #ddd;">
                        </div>

                        <!-- Description & Download Button -->
                        <div class="col-md-6">
                            <h5 class="fw-bold">Microsoft RDP Generator</h5>
                            <p style="margin-bottom: 10px;">
                                It generates a customized RDP file, enabling seamless and secure connections to Terminal
                                Servers (Remote Desktop) with predefined configurations, optimizing remote access
                                efficiency.
                            </p>

                            <a href="https://apps.apple.com/in/app/windows-app/id1295203466?mt=12" download
                                class="btn btn-primary btn-sm"
                                style="padding: 10px 25px; font-size: 14px; border-radius: 50px; transition: 0.3s; text-decoration: none; display: inline-block; text-align: center; background-color: #007bff; color: white; border: none; cursor: pointer;"
                                onmouseover="this.style.backgroundColor='#0056b3'"
                                onmouseout="this.style.backgroundColor='#007bff'">
                                Download
                            </a>

                        </div>

                         <!-- Image  Mac-->
                         <div class="col-md-4 mt-2 text-center d-flex justify-content-center align-items-center"
                         style="min-height: 300px;">
                         <img src="{{ asset('home/assets/homepage/images/rdp Mac.webp') }}"
                             alt="RDP Image" class="img-fluid"
                             style="width: 300px; height: 300px; object-fit: cover; border-radius: 30px; border: 5px solid #ddd;">
                     </div>

                     <!-- Description & Download Button -->
                     <div class="col-md-6 ">
                         <h5 class="fw-bold">Remote Desktop Access via iPad</h5>
                         <p style="margin-bottom: 10px;">
                            Effortlessly connect to your server using your iPad with Remote Desktop.
                             Enjoy a seamless, high-performance experience that lets you manage files,
                             run applications, and stay productive from anywhere.
                             Secure and reliable access is just a tap away.
                         </p>

                         <a href="https://www.youtube.com/watch?v=QA1S5u0xA08" download
                             class="btn btn-primary btn-sm"
                             style="padding: 10px 25px; font-size: 14px; border-radius: 50px; transition: 0.3s; text-decoration: none; display: inline-block; text-align: center; background-color: #007bff; color: white; border: none; cursor: pointer;"
                             onmouseover="this.style.backgroundColor='#0056b3'"
                             onmouseout="this.style.backgroundColor='#007bff'">
                             Download
                         </a>

                     </div>

                      <!-- Image Android -->
                      <div class="col-md-4 mt-2 text-center d-flex justify-content-center align-items-center"
                      style="min-height: 300px;">
                      <img src="{{ asset('home/assets/homepage/images/rdp android , iphone & ipad.webp') }}"
                          alt="RDP Image" class="img-fluid"
                          style="width: 300px; height: 300px; object-fit: cover; border-radius: 30px; border: 5px solid #ddd;">
                  </div>

                  <!-- Description & Download Button -->
                  <div class="col-md-6 ">
                      <h5 class="fw-bold">Remote Desktop Access via iOS & Android</h5>
                      <p style="margin-bottom: 10px;">
                        Easily access your server from anywhere using your iOS or Android device with Remote Desktop.
                        Our seamless and secure connection ensures smooth performance, allowing you to manage files,
                        run applications, and stay productive on the go.
                        Experience reliable remote access with just a few taps on your mobile device.
                      </p>

                        {{-- button-1 --}}
                      <a href="https://www.youtube.com/watch?v=ZpV_qYKGoJ0" download
                          class="btn btn-primary btn-sm"
                          style="padding: 10px 25px; font-size: 14px; border-radius: 50px; transition: 0.3s; text-decoration: none; display: inline-block; text-align: center; background-color: #007bff; color: white; border: none; cursor: pointer;"
                          onmouseover="this.style.backgroundColor='#0056b3'"
                          onmouseout="this.style.backgroundColor='#007bff'">
                          Link
                      </a> &nbsp;&nbsp;&nbsp;&nbsp;
                        {{-- button-2 --}}
                      <a href="https://play.google.com/store/apps/details?id=com.microsoft.rdc.androidx" download
                          class="btn btn-primary btn-sm mt-2"
                          style="font-size: 14px; border-radius: 50px; transition: 0.3s; text-decoration: none; display: inline-block; text-align: center; background-color: #007bff; color: white; border: none; cursor: pointer;"
                          onmouseover="this.style.backgroundColor='#0056b3'"
                          onmouseout="this.style.backgroundColor='#007bff'">
                          Download
                      </a>

                  </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script-area')

    <script>
        $(document).ready(function() {
            $('.theme-demos').remove();
        });
    </script>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('home/assets/homepage/js/cloudflare-static-email-decode.min.js') }}"></script>
    <script src="{{ asset('home/assets/homepage/js/6617-js-jquery.js') }}"></script>
    <script src="{{ asset('home/assets/homepage/js/567-js-vendors.min.js') }}"></script>
    <script src="{{ asset('home/assets/homepage/js/7637-js-main.js') }}"></script>

@endsection
