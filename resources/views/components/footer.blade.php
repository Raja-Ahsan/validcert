<footer class="footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="footer-logo-wrapper mb-30">
                    @php
                        $footerLogo = \App\Models\Setting::get('footer_logo') ?? \App\Models\Setting::get('site_logo');
                        $footerLogoUrl = $footerLogo ? (strpos($footerLogo, 'assets/') === 0 ? asset($footerLogo) : asset('storage/' . $footerLogo)) : asset('assets/images/logo.png');
                    @endphp
                    <img src="{{ $footerLogoUrl }}" class="logo" alt="footer-logo">
                </div>
                <p class="para fs-16 text-white mb-40" style="max-width: 380px;">
                    ValidCert is an industrial equipment company that provides a range of high-quality equipment,
                    parts, and services to customers in various industries. With years of experience and expertise,
                    we are committed to delivering reliable and efficient solutions to meet our customers' needs.
                    Our focus on customer satisfaction and long-term partnerships sets us apart as a trusted and
                    dependable partner for industrial equipment solutions.
                </p>
                <ul class="footer-navs d-flex align-items-center gap-20">
                    <li><a href="{{ route('privacy-policy') }}" class="footer-navs-link">Privacy Policy</a></li>
                    <li><a href="{{ route('terms') }}" class="footer-navs-link">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <div class="footer-menu-wrapper">
                    <h3 class="hd-sm text-primary-theme mb-20">Menu</h3>
                    <ul class="footer-navs d-flex flex-column row-gap-20">
                        <li><a href="{{ route('home') }}" class="footer-navs-link">Home</a></li>
                        <li><a href="{{ route('about') }}" class="footer-navs-link">About</a></li>
                        <li><a href="{{ route('services') }}" class="footer-navs-link">Services</a></li>
                        <li><a href="{{ route('contact') }}" class="footer-navs-link">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-menu-wrapper">
                    <h3 class="hd-sm text-primary-theme mb-20">Support</h3>
                    <ul class="footer-navs d-flex flex-column row-gap-20">
                        <li><a href="#" class="footer-navs-link">Help Center</a></li>
                        <li><a href="#" class="footer-navs-link">Licences</a></li>
                        <li><a href="#" class="footer-navs-link">FAQ</a></li>
                        <li><a href="#" class="footer-navs-link">Community</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer-contact-wrapper footer-menu-wrapper mb-50">
                    <ul class="footer-contact-list d-flex flex-column row-gap-20">
                        <li><a href="tel:{{ str_replace([' ', '-', '(', ')'], '', \App\Models\Setting::get('site_phone', '+92-300-90588-26')) }}"><span><i class="fa-solid fa-phone"></i></span>{{ \App\Models\Setting::get('site_phone', '(+92) 300-90588-26') }} </a></li>
                        <li><a href="mailto:{{ \App\Models\Setting::get('site_email', 'info@validcertpk.com') }}"><span><i
                                        class="fa-solid fa-envelope"></i></span>{{ \App\Models\Setting::get('site_email', 'info@validcertpk.com') }} </a></li>
                        <li><a class="d-flex" href="#"><span><i
                                        class="fa-solid fa-location-dot"></i></span>{{ \App\Models\Setting::get('site_address', 'Shahrah e faisal karachi, Pakistan') }} </a></li>
                    </ul>
                </div>
                <ul class="footer-social-links d-flex align-items-center gap-20 flex-wrap">
                    @if(\App\Models\Setting::get('instagram_url'))
                        <li><a href="{{ \App\Models\Setting::get('instagram_url') }}" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                    @endif
                    @if(\App\Models\Setting::get('facebook_url'))
                        <li><a href="{{ \App\Models\Setting::get('facebook_url') }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                    @endif
                    @if(\App\Models\Setting::get('twitter_url'))
                        <li><a href="{{ \App\Models\Setting::get('twitter_url') }}" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                    @endif
                    @if(\App\Models\Setting::get('youtube_url'))
                        <li><a href="{{ \App\Models\Setting::get('youtube_url') }}" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                    @endif
                    @if(\App\Models\Setting::get('tiktok_url'))
                        <li><a href="{{ \App\Models\Setting::get('tiktok_url') }}" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                    @endif
                    @if(\App\Models\Setting::get('linkedin_url'))
                        <li><a href="{{ \App\Models\Setting::get('linkedin_url') }}" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="footer-bottom-wrapper">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6">
                <p class="para fs-16 text-white mb-0">Copyright © 2025 ValidCertPk. All rights reserved.</p>
            </div>
            <div class="col-lg-6">
                <p class="para fs-16 text-white mb-0 text-end">Powered by <a href="https://webstaginglink.com/raja-ahsan/" class="text-white">Raja Ahsan</a></p>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
    integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>