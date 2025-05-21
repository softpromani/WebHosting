<section id="topbar"  class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        {{-- <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a
                    href="mailto:contact@example.com">{{ settingValue('email') }}</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{ settingValue('phone') }}</span></i>
        </div> --}}
        <div class="contact-info d-flex align-items-center">
            <div class="d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                    href="mailto:contact@example.com">{{ settingValue('email') }}</a></i>
            </div>
            <div class="d-flex align-items-center ms-4 text-nowrap">
                <i class="bi bi-phone me-1"></i>
                <span>{{ settingValue('phone') }}</span>
            </div>
        </div>

        <div class="social-links d-none d-md-flex align-items-center">
            <a href="{{ settingValue('twitter') }}" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="{{ settingValue('facebook') }}" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="{{ settingValue('instagram') }}" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="{{ settingValue('linkdin') }}" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>
    </div>
</section>
