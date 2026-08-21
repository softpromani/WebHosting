@extends('home.includes.layout')
{{-- @section('title', 'Privacy Policy | Mounteko Global Solutions') --}}
@section('title', 'Privacy Policy | Mounteko Global Solutions')
{{-- @section('meta-description',
'How Mounteko Global Solutions collects, uses, and protects your personal information, including data submitted through our contact form.') --}}
@section('meta-description', 'How Mounteko Global Solutions collects, uses, and protects your personal information, including data submitted through our contact form.')
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
            <div class="container" style="max-width: 800px; line-height: 1.8; color: #374151;">
                <p class="text-muted"><strong>Effective Date:</strong> August 20, 2026</p>
                <p>Mounteko Global Solutions ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website, including any other media form, media channel, mobile website, or mobile application related or connected thereto.</p>

                <h2 class="mt-4">1. Information We Collect</h2>
                <p>We collect information that you voluntarily provide to us when you express an interest in obtaining information about us or our services, when you contact us, or otherwise when you use our website.</p>
                <p><strong>Contact Form Data:</strong> When you submit an inquiry through our contact form, we collect the following specific data fields to route and respond to your request effectively:
                    <ul>
                        <li><strong>Full Name:</strong> To address you correctly.</li>
                        <li><strong>Email Address:</strong> To reply to your inquiries and send follow-up correspondence.</li>
                        <li><strong>Phone Number:</strong> To contact you directly regarding urgent IT support or consultation requests.</li>
                        <li><strong>Subject (Lead Routing Category):</strong> To direct your request to the appropriate department (IT Support, Cybersecurity, Cloud, Website, or Other).</li>
                        <li><strong>Message:</strong> The detailed notes or context you provide about your business requirements.</li>
                    </ul>
                </p>

                <h2 class="mt-4">2. Cookies, Analytics & Online Tracking</h2>
                <p>We use cookies, web beacons, tracking pixels, and other tracking technologies on our website to help customize the site and improve your experience.</p>
                <p><strong>Analytics & Performance:</strong> We use third-party analytics tools, including <strong>Google Analytics 4 (GA4)</strong> and <strong>Google Tag Manager (GTM)</strong>, to monitor and analyze web traffic, track visitor behavior, and measure form conversion events. GA4 automatically collects information such as your IP address, browser type, operating system, referring URLs, device characteristics, and site interactions. This data helps us optimize website performance and improve our service offerings. No personally identifiable information (PII) is linked to these analytics reports.</p>

                <h2 class="mt-4">3. How We Use Your Information</h2>
                <p>We use the information we collect or receive for the following business purposes:
                    <ul>
                        <li>To provide, operate, maintain, and optimize our managed IT services, cloud infrastructure, and cybersecurity solutions.</li>
                        <li>To respond to user inquiries, schedule free IT assessments, and offer technical support.</li>
                        <li>To route inquiries to the correct department based on the subject selection.</li>
                        <li>To send administrative information, updates, and marketing communications (where permitted).</li>
                        <li>To protect our website against security threats, fraud, and unauthorized activity.</li>
                    </ul>
                </p>

                <h2 class="mt-4">4. Data Protection & Security</h2>
                <p>We implement appropriate technical and organizational security measures, including data encryption, firewalls, and secure transmission protocols (HTTPS), designed to protect the security of any personal information we process. However, please remember that no transmission over the internet or information storage technology can be guaranteed 100% secure.</p>

                <h2 class="mt-4">5. Third-Party Sharing & Disclosures</h2>
                <p>We do not sell, trade, rent, or lease your personal information to third parties. We may share information with third-party service providers who perform services for us or on our behalf (such as hosting, email delivery, customer service, and analytics tools like GA4), provided they agree to keep this information confidential and secure.</p>

                <h2 class="mt-4">6. Your Privacy Rights</h2>
                <p>Depending on your location, you may have rights to access, correct, update, or request deletion of your personal information. You can manage your browser cookie preferences or opt-out of analytics tracking via your browser settings or Google Analytics opt-out add-ons.</p>

                <h2 class="mt-4">7. Contact Us</h2>
                <p>If you have questions or comments about this Privacy Policy, please contact us at:
                    <br><strong>Mounteko Global Solutions</strong>
                    <br>140 Broadway, 46th Floor, New York, NY 10005
                    <br>Email: <a href="mailto:{{ settingValue('email') }}">{{ settingValue('email') }}</a>
                    <br>Phone: <a href="tel:{{ settingValue('phone') }}">{{ settingValue('phone') }}</a>
                </p>
            </div>
        </section>
    </main>
@endsection
