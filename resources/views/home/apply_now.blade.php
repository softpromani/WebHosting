@extends('home.includes.layout')
@section('title', 'Apply for Hosting on Mounteko Cloud Hosting Providers')
@section('meta-description',
    'We are a trusted provider of cloud solutions, dedicated to making technology accessible
    and secure. Our mission is to empower businesses with efficient, scalable, and adaptable tools that fit today’s dynamic
    work environment.')
@section('header-area')
@endsection
@section('content')
<section class="breadcrumbs">
    @php
        $baseColor = settingValue('primary') ?? '#65E82E'; // Change this dynamically
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
            <h1 class="post__title text-white" style="font-size: 2.5rem; margin-bottom: 0px;">About Us</h1>
            <nav class="breadcrumbs">
                <ul style="list-style: none; padding: 0; margin: 0; display: flex; justify-content: center; gap: 10px;">
                    <li><a href="{{ route('home') }}" style="color: white; text-decoration: none;">Home</a></li>
                    <li aria-current="page" style="color: white;">About Us</li>
                </ul>
            </nav>
        </div>
    </div>
</section><!-- Breadcrumbs Section -->

<section class="apply-form" style="background-color: #f4f4f4;">
    <div class="card col-lg-6 col-md-8 col-12 mx-auto shadow" style="border-radius:20px;">
        <div class="card-body">
            <h2 class="text-center mt-5" style="color:var(--primary-color);">Claim Your 7-Day Free Trial</h2>
            <p class="text-center mb-5">Get started with full access. No credit card required.</p>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 px-4 mb-3">
                    <div class="form-group">
                        <label for="full-name">Full Name</label>
                        <input type="text" class="form-control" name="name" id="full-name">
                    </div>
                </div>
                <div class="col-md-6 px-4 mb-3">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="col-md-6 px-4 mb-3">
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="tel" class="form-control" id="phone_number" name="phone_number">
                    </div>
                </div>
                <div class="col-md-6 px-4 mb-3">
                    <div class="form-group">
                        <label for="business_name">Business Name</label>
                        <input type="text" class="form-control" id="business_name" name="business_name">
                    </div>
                </div>
                <div class="col-md-12 px-4 mb-3">
                    <div class="form-group">
                        <label for="application_detail">Application Detail</label>
                        <textarea class="form-control" id="application_detail" name="application_detail"></textarea>
                    </div>
                </div>
                <div class="col-md-6 px-4 mb-3">
                    <div class="form-group">
                        <label for="license_key">License Key</label>
                        <input type="text" class="form-control" id="license_key" name="license_key">
                    </div>
                </div>
                <div class="col-md-6 px-4 mb-3">
                    <div class="form-group">
                        <label for="number_users">Number of Users</label>
                        <input type="number" class="form-control" id="number_users" name="number_users">
                    </div>
                </div>
                <div class="col-md-12 px-4 mb-3">
                    <div class="form-group">
                        <label for="username">Usernames (comma-separated)</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                </div>
                <div class="col-md-12 px-4 mb-3">
                    <div class="form-group">
                        <label for="aditional_comment">Aditional Comments </label>
                        <input type="text" class="form-control" id="aditional_comment" name="aditional_comment">
                    </div>
                </div>
                <div class="col-md-12 px-4 mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                          I agree to the <a href="#" style="color: var(--primary-color);">Terms of Service</a> and <a href="#" style="color: var(--primary-color);">Privacy Policy</a>.
                        </label>
                    </div>
                </div>
                <div class="col-md-12 px-4 mb-3">
                    <button type="button" class="btn text-center w-100 text-light" style="background: var(--primary-color);">Start 7-Day Free Trial</button>
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
@endsection