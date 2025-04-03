<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <a href="{{ route('home') }}"><img src="{{ asset('storage/' . settingValue('logo')) }}" alt=""></a><br><br>
                    <h3>{{ settingValue('company Name') }}<span></span></h3>
                    <p>
                        <strong>📧</strong> {{ settingValue('email') }}<br>
                        <strong>📞</strong> {{ settingValue('phone') }}<br>
                        <strong>🌍</strong> {{ settingValue('address') }}<br>
                    </p>
                    <div class="social-links mt-3">
                        <a href="{{ settingValue('twitter') }}" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="{{ settingValue('facebook') }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="{{ settingValue('instagram') }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="{{ settingValue('skype') }}" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="{{ settingValue('linkdin') }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Quick Book Hosting</h4>
                    <a href="#">QuickBooks Enterprise Hosting</a><br>
                    <a href="#">QuickBooks Accountant Hosting</a><br>
                    <a href="#">QuickBooks Premier Hosting</a><br>
                    <a href="#">QuickBooks Add-ons</a><br><br>

                    <h4>Sage Hosting</h4>
                    <a href="#">Sage 50</a><br>
                    <a href="#">Sage 100</a><br>
                    <a href="#">Sage 300</a><br>
                    <a href="#">Sage 500</a><br>
                    <a href="#">Sage CRM</a><br>
                    <a href="#">Sage X3</a><br>
                 </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Tax Software Hosting</h4>
                    <a href="#">Drake Tax Hosting</a><br>
                    <a href="#">Proseries Tax Hosting</a><br>
                    <a href="#">UltraTax Software Hosting</a><br>
                    <a href="#">Lacerte Tax Hosting</a><br>
                    <a href="#">ATX Hosting</a><br>
                    <a href="#">TaxWise Hosting</a><br>
                    <a href="#">TaxAct</a><br>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Resource</h4>
                    <a href="#">FAQ</a><br>
                    <a href="#">Downloads</a><br>
                    <a href="#">Uploads</a><br>
                    <a href="#">Join Remote Support</a><br>
                    <a href="#">Terms & Conditions</a><br>
                    <a href="#">Privacy Policy</a><br>
                    <a href="#">Service Agreement</a><br>
                    <a href="#">User Acceptance</a><br>
                    <a href="#">Cookie Policy</a><br>
                </div>

            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>{{ settingValue('company Name') }}</span></strong>. All Rights Reserved
        </div>
    </div>
</footer>
