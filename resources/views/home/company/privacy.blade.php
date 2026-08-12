@extends('home.includes.layout')
@section('title', 'Privacy Policy | Mounteko Global Solutions')
@section('header-area')
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/css-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/homepage/css/new_home_custom.css') }}">
@endsection
@section('content')
    <main id="main">
        <!-- Privacy Hero Section -->
        <section class="faq-hero-section">
            <div class="container text-center" style="position:relative; z-index:2;">
                <div class="faq-hero-badge">Compliance</div>
                <h1 class="faq-hero-title">Privacy <span class="faq-hero-highlight">Policy</span></h1>
                <p class="faq-hero-subtitle">Learn how we protect your personal and business data.</p>
                <div class="faq-hero-breadcrumbs">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="separator"><i class="bi bi-chevron-right"></i></span>
                    <span class="current">Privacy Policy</span>
                </div>
            </div>
        </section>

        <!-- Privacy Content Section -->
        <section class="py-5 bg-white">
            <div class="container" style="max-width: 800px; line-height: 1.8;">
                <h2>1. Information We Collect</h2>
                <p>We collect information that you provide directly to us when contacting us for consultations, billing, or subscribing to our newsletters. This includes name, email, phone number, and company details.</p>

                <h2>2. How We Use Your Information</h2>
                <p>We use your information to provide managed IT services, answer inquiries, send service updates, and ensure compliance with security standards.</p>

                <h2>3. Data Protection & Security</h2>
                <p>We implement industry-standard encryption and cybersecurity measures to protect your data from unauthorized access, loss, or misuse.</p>

                <h2>4. Third-Party Sharing</h2>
                <p>We do not sell, trade, or share your personal data with third parties except as required by law or to deliver our services safely.</p>

                <h2>5. Contact Us</h2>
                <p>If you have questions about this Privacy Policy, please contact us at {{ settingValue('email') }}.</p>
            </div>
        </section>
    </main>
@endsection
