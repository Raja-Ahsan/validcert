@extends('layouts.app')

@section('title', 'Contact ValidCert - Get in Touch | Industrial Services Support | Karachi, Pakistan')
@section('description', 'Contact ValidCert for inquiries about Training, Consultancy, Inspection, NDT Services, and Engineering Support. Call (+92) 300-90588-26 or email info@validcertpk.com. Located in Karachi, Pakistan.')
@section('keywords', 'Contact ValidCert, Industrial Services Contact, ValidCert Karachi, Training Services Contact, Engineering Support Contact, PEC Registered Company Contact')
@section('canonical', route('contact'))
@section('og_type', 'website')
@section('og_title', 'Contact ValidCert - Get in Touch')
@section('og_description', 'Contact ValidCert for inquiries about our industrial services. We are here to assist you with Training, Consultancy, Inspection, and Engineering Support.')
@section('og_image', asset('assets/images/logo.png'))

@section('schema')
<script type="application/ld+json">
{
  "context": "https://schema.org",
  "type": "ContactPage",
  "name": "Contact ValidCert",
  "description": "Contact ValidCert for inquiries about industrial services",
  "mainEntity": {
    "type": "Organization",
    "name": "ValidCert",
    "url": "{{ route('home') }}",
    "logo": "{{ asset('assets/images/logo.png') }}",
    "contactPoint": [
      {
        "type": "ContactPoint",
        "telephone": "+92-300-90588-26",
        "contactType": "Customer Service",
        "email": "info@validcertpk.com",
        "areaServed": "PK",
        "availableLanguage": "English"
      },
      {
        "type": "ContactPoint",
        "telephone": "+92-300-90588-26",
        "contactType": "Sales",
        "email": "info@validcertpk.com"
      }
    ],
    "address": {
      "type": "PostalAddress",
      "streetAddress": "Shahrah e faisal",
      "addressLocality": "Karachi",
      "addressRegion": "Sindh",
      "postalCode": "",
      "addressCountry": "PK"
    },
    "geo": {
      "type": "GeoCoordinates",
      "latitude": "24.8607",
      "longitude": "67.0011"
    }
  }
}
</script>
@endsection

@section('content')
<!-- Contact Banner Section -->
<section class="hero-banner inner-banner">
    <div class="container">
        <div class="row row-gap-30 mt-50">
            <div class="col-lg-12 text-center">
                <h1 class="mb-20">
                    <span class="text-primary-theme">Contact</span> Us
                </h1>
                <p class="text-white mb-20">
                    Get in touch with us for inquiries, support, or to learn more about our services
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-us-sec bg-primary-theme position-relative">
    <img src="{{ asset('assets/images/contact-shape-top.png') }}" alt="contact-us-shape" class="contact-us-top-shape">
    <img src="{{ asset('assets/images/contact-shape-right-top.png') }}" alt="contact-us-shape"
        class="contact-us-right-top-shape">
    <img src="{{ asset('assets/images/contact-shape-right-bottom.png') }}" alt="contact-us-shape"
        class="contact-us-right-bottom-shape">
    <div class="container">
        <div class="row">
            <!-- Left Side: Contact Information -->
            <div class="col-lg-6 pt-88 pb-88">
                <div class="d-flex mb-40 align-items-center gap-20">
                    <h2 class="hd-36">Contact Us</h2>
                    <div class="col-lg-2">
                        <div class="border-line sm border-white"></div>
                    </div>
                </div>
                <h2 class="sec-hd mb-20">
                    Get in Touch
                </h2>
                <p class="para fs-20 contact-us-para mb-40">
                    If you have any questions or inquiries, feel free to reach out to us. Our team is always happy
                    to assist you and provide the best solutions for your industrial equipment needs. We are
                    committed to providing excellent customer service and support to ensure your satisfaction.
                </p>

                <!-- Contact Icons -->
                <div class="contact-info-wrapper mb-50">
                    <div class="contact-info-item mb-30">
                        <div class="d-flex align-items-center gap-20">
                            <div class="contact-icon-wrapper">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="contact-info-content">
                                <h3 class="hd-sm text-white mb-5">Phone</h3>
                                <a href="tel:{{ str_replace([' ', '-', '(', ')'], '', \App\Models\Setting::get('site_phone', '+92-300-90588-26')) }}" class="para fs-20 text-white">{{ \App\Models\Setting::get('site_phone', '(+92) 300-90588-26') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info-item mb-30">
                        <div class="d-flex align-items-center gap-20">
                            <div class="contact-icon-wrapper">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="contact-info-content">
                                <h3 class="hd-sm text-white mb-5">Email</h3>
                                <a href="mailto:{{ \App\Models\Setting::get('site_email', 'info@validcertpk.com') }}" class="para fs-20 text-white">{{ \App\Models\Setting::get('site_email', 'info@validcertpk.com') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="d-flex align-items-center gap-20">
                            <div class="contact-icon-wrapper">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact-info-content">
                                <h3 class="hd-sm text-white mb-5">Address</h3>
                                <p class="para fs-20 text-white mb-0">{{ \App\Models\Setting::get('site_address', 'Shahrah e faisal karachi, Pakistan') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Icons -->
                <div class="contact-social-wrapper">
                    <h3 class="hd-sm text-white mb-20">Follow Us</h3>
                    <ul class="contact-social-links d-flex align-items-center gap-20 flex-wrap">
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

            <!-- Right Side: Contact Form -->
            <div class="col-lg-6" style="padding-top: 20rem;">
                <div class="contact-us-form">
                    <img src="{{ asset('assets/images/contact-us-form-shape.png') }}" alt="contact-us-shape"
                        class="contact-us-form-shape position-absolute">
                    @include('components.contact-form')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
