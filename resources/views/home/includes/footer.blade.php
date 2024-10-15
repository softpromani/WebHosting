<footer id="footer">

    {{-- <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4>Join Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="{{ route('newsletterStore') }}" method="post">
                        @csrf
                        <input type="email" name="email">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>{{ settingValue('company Name') }}<span>.</span></h3>
                    <p>
                        {{ settingValue('address') }}<br><br>
                        <strong>Phone:</strong> {{ settingValue('phone') }}<br>
                        <strong>Email:</strong> {{ settingValue('email') }}<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('aboutUs') }}">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Accounting Solutions</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Cybersecurity Solutions</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Cloud Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Pricing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Company</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Social Networks</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links mt-3">
                        <a href="{{ settingValue('twitter') }}" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="{{ settingValue('facebook') }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="{{ settingValue('instagram') }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="{{ settingValue('skype') }}" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="{{ settingValue('linkdin') }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>{{ settingValue('company Name') }}</span></strong>. All Rights Reserved
        </div>
        {{-- <div class="credits">

            Designed by <a href="https://bootstrapmade.com/">{{ settingValue('developed by') }}</a>
        </div> --}}
    </div>
</footer>
