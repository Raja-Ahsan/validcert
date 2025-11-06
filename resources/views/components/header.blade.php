<header class="header overflow-hidden">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ \App\Models\Setting::get('site_logo') ? asset('storage/' . \App\Models\Setting::get('site_logo')) : asset('assets/images/logo.png') }}" alt="logo">
                </a>
            </div>
            <nav class="primary-navs-wrapper">
                <ul class="primary-navs d-flex align-items-center justify-content-center gap-20">
                    <div class="close-icon">
                        <i class="fa-solid fa-xmark menu-toggle"></i>
                    </div>
                    <li><a href="{{ route('home') }}" class="primary-navs-link">Home</a></li>
                    <li><a href="{{ route('about') }}" class="primary-navs-link">About</a></li>
                    <li><a href="{{ route('services') }}" class="primary-navs-link">Services</a></li>
                    <li><a href="{{ route('contact') }}" class="primary-navs-link">Contact Us</a></li>
                </ul>
            </nav>
            <div class="header-right-wrapper d-none d-lg-block text-end bg-primary-theme">
                <span class="d-block text-white fs-14 mb-5 secondry-font">Need Help? CALL US</span>
                <a href="tel:{{ str_replace([' ', '-', '(', ')'], '', \App\Models\Setting::get('site_phone', '+92-300-90588-26')) }}" class="fw-600 text-white"><span><img class="me-3"
                            src="{{ asset('assets/images/icons/call.svg') }}" alt="phone-icon"></span>{{ \App\Models\Setting::get('site_phone', '(+92) 300-90588-26') }}</a>
            </div>
            <div class="d-lg-none phone-icon">
                <a href="tel:{{ str_replace([' ', '-', '(', ')'], '', \App\Models\Setting::get('site_phone', '+92-300-90588-26')) }}"><i class="fa-solid fa-phone"></i></a>
            </div>
            <div class="menu-icon">
                <i class="fa-solid fa-bars menu-toggle"></i>
            </div>
        </div>
    </div>
</header>

