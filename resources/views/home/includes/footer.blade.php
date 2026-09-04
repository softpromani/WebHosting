<footer class="premium-footer">
    <div class="container">
        <div class="row">
            <!-- Brand Column -->
            <div class="col-lg-4 col-md-6 footer-brand-col">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('storage/' . settingValue('logo')) }}" alt="{{ settingValue('company Name') }}"
                        class="footer-logo">
                </a>
                <div class="footer-tagline">{{ settingValue('company Name') }}</div>
                <p class="footer-description">
                    Empowering businesses with reliable technology, innovation, and global reach. We provide scalable IT
                    solutions tailored to your business needs.
                </p>
                <div class="social-links d-flex gap-3">
                    <a href="https://www.facebook.com/Mounteko" target="_blank" rel="noopener" class="text-white opacity-75 hover-opacity-100"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/Mounteko" target="_blank" rel="noopener" class="text-white opacity-75 hover-opacity-100"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/company/Mounteko" target="_blank" rel="noopener" class="text-white opacity-75 hover-opacity-100"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.instagram.com/mountekogs" target="_blank" rel="noopener" class="text-white opacity-75 hover-opacity-100"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <!-- Services Column -->
            <div class="col-lg-2 col-md-6">
                <h4 class="footer-heading">Services</h4>
                <ul class="footer-links-list">
                    <li><a href="{{ route('services.network-architecture') }}">Network Solutions</a></li>
                    <li><a href="{{ route('services.security-audits') }}">Cybersecurity</a></li>
                    <li><a href="#">Cloud & Infrastructure</a></li>
                    <li><a href="{{ route('home') }}#core-services">Managed Services</a></li>
                    <li><a href="#"> Business workflow & automation</a></li>
                </ul>
            </div>

            <!-- Company Column -->
            <div class="col-lg-3 col-md-6">
                <h4 class="footer-heading">Company</h4>
                <ul class="footer-links-list">
                    <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                    <!-- <li><a href="{{ route('whyUsPage') }}">Why Mounteko</a></li> -->
                    <li><a href="{{ route('contactUs') }}">Contact Us</a></li>
                    <!-- removed - <li><a href="{{ route('faq') }}">Privacy Policy</a></li> -->
                    <!-- added -->
                    <li><a href="{{ route('privacyPolicy') }}">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Contact Column -->
            <div class="col-lg-3 col-md-6">
                <h4 class="footer-heading">Contact</h4>
                <div class="footer-contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>{{ settingValue('address') }}</span>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:{{ settingValue('email') }}">{{ settingValue('email') }}</a>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-globe"></i>
                    <a href="{{ url('/') }}">www.mounteko.com</a>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-phone-alt"></i>
                    <a href="tel:{{ settingValue('phone') }}">{{ settingValue('phone') }}</a>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} {{ settingValue('company Name') }}. All rights reserved. Developed by
                <a href="{{ settingValue('developed by url') !== 'N/A' && settingValue('developed by url') ? settingValue('developed by url') : '#' }}" target="_blank" rel="noopener" class="text-white text-decoration-underline">{{ settingValue('developed by') }}</a>
            </p>
        </div>
    </div>
</footer>
