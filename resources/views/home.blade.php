@extends('layouts.app')

@section('title', 'ValidCert - International Certified Excellence in Industrial Services | Training, Consultancy & Engineering Support')
@section('description', 'ValidCert is an internationally certified company providing comprehensive solutions in Training, Consultancy, Inspection, Procurement, and Engineering Support. PEC Registered and ISO 9001 certified. Serving Energy, Industrial, and Construction sectors in Pakistan.')
@section('keywords', 'ValidCert, Industrial Services Pakistan, Training Services, Consultancy Services, Inspection Services, Engineering Support, PEC Registered, ISO 9001 Certified, Karachi Pakistan')
@section('canonical', route('home'))
@section('og_type', 'website')
@section('og_title', 'ValidCert - International Certified Excellence in Industrial Services')
@section('og_description', 'Internationally certified company providing Training, Consultancy, Inspection, Procurement, and Engineering Support. PEC Registered and ISO 9001 certified.')
@section('og_image', asset('assets/images/logo.png'))

@section('schema')
<script type="application/ld+json">
{
  "context": "https://schema.org",
  "type": "Organization",
  "name": "ValidCert",
  "alternateName": "ValidCertPk",
  "url": "{{ route('home') }}",
  "logo": "{{ asset('assets/images/logo.png') }}",
  "description": "Internationally certified company providing comprehensive solutions in Training, Consultancy, Inspection, Procurement, and Engineering Support",
  "address": {
    "type": "PostalAddress",
    "streetAddress": "Shahrah e faisal",
    "addressLocality": "Karachi",
    "addressRegion": "Sindh",
    "addressCountry": "PK"
  },
  "contactPoint": {
    "type": "ContactPoint",
    "telephone": "+92-300-90588-26",
    "contactType": "Customer Service",
    "email": "info@validcertpk.com",
    "areaServed": "PK",
    "availableLanguage": "English"
  },
  
  "aggregateRating": {
    "type": "AggregateRating",
    "ratingValue": "4.8",
    "reviewCount": "25"
  }
}
</script>
<script type="application/ld+json">
{
  "context": "https://schema.org",
  "type": "WebSite",
  "name": "ValidCert",
  "url": "{{ route('home') }}",
  "potentialAction": {
    "type": "SearchAction",
    "target": "{{ route('services') }}?search={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
<script type="application/ld+json">
{
  "context": "https://schema.org",
  "type": "Service",
  "serviceType": "Industrial Services",
  "provider": {
    "type": "Organization",
    "name": "ValidCert"
  },
  "areaServed": {
    "type": "Country",
    "name": "Pakistan"
  },
  "hasOfferCatalog": {
    "type": "OfferCatalog",
    "name": "Industrial Services",
    "itemListElement": {!! json_encode(collect($services)->map(function($service) {
        return [
          'type' => 'Offer',
          'itemOffered' => [
            'type' => 'Service',
            'name' => $service->title,
            'description' => strip_tags($service->short_description ?? $service->description ?? ''),
            'url' => route('service.detail', $service->slug)
          ]
        ];
    })->values()->all(), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
  }
}
</script>
@endsection

@section('content')
<section class="hero-banner">
    <div class="container">
        <div class="row row-gap-30 mt-50">
            <div class="col-lg-6 animated-text">
                <h1 class="mb-20" id="animated-heading">
                    Trusted <span class="char">Training</span>,
                    <span class="char">Reliable</span> Support
                </h1>
                <p class="text-white mb-20">
                    Delivering world-classÂ Training, Consultancy, Inspection & Engineering SupportÂ across Energy,
                    Industrial, and Construction sectors.
                </p>
                <a href="" class="btn btn-primary d-inline-flex align-items-center">Get Started <span
                        class="arrow-icon d-flex"><i class="fa-solid fa-angle-right"></i></span></a>
            </div>
            <div class="col-lg-6">
                <div class="hero-right">
                    <div class="hero-right-img-wrapper-banner position-relative">
                        <img src="{{ asset('assets/images/hero-right.png') }}" class="hero-right-img-banner" alt="hero-right-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about" class="stats-sec sec-gradiant pb-65">
    <div class="container">
        <div class="row row-gap-30">
            <div class="col-lg-3 col-md-6">
                <div
                    class="stats-card-item d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="stats-img-wrapper mb-20">
                        <img src="{{ asset('assets/images/stats-01.png') }}" alt="stats-01">
                    </div>
                    <div class="stats-content">
                        <h3 class="hd-sm mb-10">ISO Certified</h3>
                        <p class="stats-para">
                            Quality and safety standards
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div
                    class="stats-card-item d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="stats-img-wrapper mb-20">
                        <img src="{{ asset('assets/images/stats-02.png') }}" alt="stats-01">
                    </div>
                    <div class="stats-content">
                        <h3 class="hd-sm mb-10">PEC Registered</h3>
                        <p class="stats-para">
                            Government Recognized
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div
                    class="stats-card-item d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="stats-img-wrapper mb-20">
                        <img src="{{ asset('assets/images/stats-03.png') }}" alt="stats-01">
                    </div>
                    <div class="stats-content">
                        <h3 class="hd-sm mb-10">Expert Team</h3>
                        <p class="stats-para">
                            Certified <br> Professionals
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div
                    class="stats-card-item d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="stats-img-wrapper mb-20">
                        <img src="{{ asset('assets/images/stats-04.png') }}" alt="stats-01">
                    </div>
                    <div class="stats-content">
                        <h3 class="hd-sm mb-10">Global Standards</h3>
                        <p class="stats-para">
                            International Compliance
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-gap-30 align-items-center">
            <div class="col-lg-2">
                <h3 class="hd-36">About Us</h3>
            </div>
            <div class="col-lg-1">
                <div class="border-line sm"></div>
            </div>
            <div class="col-lg-9">
                <div class="border-line lg"></div>
            </div>
            <h2 class="sec-hd mb-50">Why Choose <span>ValidCert</span> ?</h2>
            <div class="col-lg-6">
                <div class="stats-left-img-wrapper position-relative">
                    <img src="{{ asset('assets/images/about-us.webp') }}" class="hero-right-img" alt="stats-left-img">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="sec-hd mb-50">
                    Internationally Certified Excellence in <span>Industrial Services </span>
                </h2>
                <p class="fs-20 para">
                    Established in 2025, VALIDCERT is an internationally certified company providing comprehensive
                    solutions inÂ Training, Consultancy, Inspection, Procurement, and Engineering Support.

                </p>
                <p class="fs-20 para">
                    Registered with the Pakistan Engineering Council (PEC) and ISO 9001 certified, we serve
                    theÂ Energy, Industrial, and Construction sectorsÂ while empowering individuals through globally
                    recognized certifications.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="our-services sec-gradiant">
    <div class="container">
        <div class="row row-gap-30 align-items-center">
            <div class="col-lg-3">
                <h3 class="hd-36">Our Services</h3>
            </div>
            <div class="col-lg-1">
                <div class="border-line sm"></div>
            </div>
            <div class="col-lg-8">
                <div class="border-line lg"></div>
            </div>
            <h2 class="sec-hd">
                Comprehensive <span>solutions</span> across five core divisions, delivering
                <span>excellence</span> in every project
            </h2>
            <p class="para fs-20 mb-70">Here are our services :</p>
        </div>
        <div class="row row-gap-40">
            @forelse($services as $service)
            <div class="col-lg-4 col-md-6">
                <div class="services-card-item position-relative">
                    <div class="services-card-wrapper">
                        <img src="{{ $service->image ? asset($service->image) : asset('assets/images/Training.webp') }}" class="w-100 services-card-img position-relative"
                            alt="{{ $service->title }}">
                        <img src="{{ asset('assets/images/shape-02.png') }}" class="services-card-shape" alt="shape-02">
                        <div class="services-card-content px-20 pt-20 z-1 position-relative">
                            <h3 class="hd-sm mb-10 text-primary-theme">{{ $service->title }}</h3>
                            <p class="para  mb-20">
                                {{ $service->short_description ?? \Illuminate\Support\Str::limit(strip_tags($service->description), 100) }}
                            </p>
                        </div>

                        <div class="d-flex align-items-center justify-content-end">
                            <a href="{{ route('service.detail', $service->slug) }}" class="text-white fw-600 read-more-link">MORE <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p class="text-center">No services available at the moment.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
<section class="core-values-sec sec-gradiant">
    <div class="container">
        <div class="row row-gap-30 align-items-center">
            <div class="col-lg-3">
                <h3 class="hd-36">Core Values</h3>
            </div>
            <div class="col-lg-1">
                <div class="border-line sm"></div>
            </div>
            <div class="col-lg-8">
                <div class="border-line lg"></div>
            </div>
            <h2 class="sec-hd">
                The <span>principles</span> that guide everything we do
            </h2>
            <div class="col-lg-6">
                <div class="stats-card-item-sec core-values-card-item">
                    <div class="d-flex align-items-center gap-20">
                        <div class="core-values-img-wrapper">
                            <img src="{{ asset('assets/images/core-values-01.png') }}" class="w-100 core-values-card-img"
                                alt="core-values-01">
                        </div>
                        <div class="core-values-card-content">
                            <h3 class="hd-sm mb-10 text-black">Integrity</h3>
                            <p class="para fs-24 text-black" style="max-width: 290px;">
                                Transparent and ethical practices
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="stats-card-item-sec core-values-card-item">
                    <div class="d-flex align-items-center gap-20">
                        <div class="core-values-img-wrapper">
                            <img src="{{ asset('assets/images/core-values-02.png') }}" class="w-100 core-values-card-img"
                                alt="core-values-01">
                        </div>
                        <div class="core-values-card-content">
                            <h3 class="hd-sm mb-10 text-black">Quality</h3>
                            <p class="para fs-24 text-black" style="max-width: 290px;">
                                International standard services
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="stats-card-item-sec core-values-card-item">
                    <div class="d-flex align-items-center gap-20">
                        <div class="core-values-img-wrapper">
                            <img src="{{ asset('assets/images/core-values-03.png') }}" class="w-100 core-values-card-img"
                                alt="core-values-01">
                        </div>
                        <div class="core-values-card-content">
                            <h3 class="hd-sm mb-10 text-black">Safety</h3>
                            <p class="para fs-24 text-black" style="max-width: 290px;">
                                Safe working environment
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="stats-card-item-sec core-values-card-item">
                    <div class="d-flex align-items-center gap-20">
                        <div class="core-values-img-wrapper">
                            <img src="{{ asset('assets/images/core-values-04.png') }}" class="w-100 core-values-card-img"
                                alt="core-values-01">
                        </div>
                        <div class="core-values-card-content">
                            <h3 class="hd-sm mb-10 text-black">Client Focus</h3>
                            <p class="para fs-24 text-black" style="max-width: 290px;">
                                Long-term partnerships
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonials-sec sec-gradiant py-150">
    <div class="container">
        <div class="row row-gap-30 align-items-center">
            <div class="col-lg-3">
                <h3 class="hd-36">Testimonials</h3>
            </div>
            <div class="col-lg-1">
                <div class="border-line sm"></div>
            </div>
            <div class="col-lg-8">
                <div class="border-line lg"></div>
            </div>
            <h2 class="sec-hd">
                Read what some of our <span>satisfied customers</span>
                have to say
            </h2>
            <p class="para fs-16 mb-60">
                At ValidCert, we take pride in providing top-quality industrial equipment and services to our
                clients. But don't just take our word for it! Read what some of our satisfied customers have to say
                about their experience working with us.
            </p>
        </div>
        <div class="row">
            <div class="testimonials-slider">
                <div class="testimonials-card-item">
                    <div class="quote left-quote"><i class="fa-solid fa-quote-left"></i></div>
                    <p class="para text-black fs-20">
                        VALIDCERTâ€™s HSE training programs were exactly what our field teams needed. The instructors were industry veterans who combined real-world experience with international best practices. Weâ€™ve seen a noticeable improvement in our safety culture and compliance.
                    </p>
                    <div class="quote right-quote text-end"><i class="fa-solid fa-quote-right"></i></div>
                    <div class="d-flex tes-profile-wrapper align-items-center gap-20">
                        <div class="profile-image-wrapper">
                            <img src="{{ asset('assets/images/customer-1.jpg') }}" alt="profile-image">
                        </div>
                        <div>
                            <h3 class="hd-sm">Muhammad Asif</h3>
                            <p class=" para fs-16 text-black">
                                HSE Manager, Al-Safa Engineering Pvt. Ltd.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="testimonials-card-item">
                    <div class="quote left-quote"><i class="fa-solid fa-quote-left"></i></div>
                    <p class="para text-black fs-20">
                        We rely on VALIDCERT for our lifting equipment and vehicle inspections. Their reports are detailed, professional, and always on schedule. Having a PEC and ISO-certified partner gives us total peace of mind when dealing with audits.Their commitment to safety and compliance sets them apart.
                    </p>
                    <div class="quote right-quote text-end"><i class="fa-solid fa-quote-right"></i></div>
                    <div class="d-flex tes-profile-wrapper align-items-center gap-20">
                        <div class="profile-image-wrapper">
                            <img src="{{ asset('assets/images/customer-2.jpg') }}" alt="profile-image">
                        </div>
                        <div>
                            <h3 class="hd-sm">Engr. Adeel Khan</h3>
                            <p class=" para fs-16 text-black">
                                Project Engineer, SinoPak Construction Group
                            </p>
                        </div>
                    </div>

                </div>
                <div class="testimonials-card-item">
                    <div class="quote left-quote"><i class="fa-solid fa-quote-left"></i></div>
                    <p class="para text-black fs-20">
                        VALIDCERTâ€™s HSE training programs were exactly what our field teams needed. The
                        instructors were industry veterans who combined real-world experience with international
                        best practices. Weâ€™ve seen a noticeable improvement in our safety culture and
                        compliance.
                    </p>
                    <div class="quote right-quote text-end"><i class="fa-solid fa-quote-right"></i></div>
                    <div class="d-flex tes-profile-wrapper align-items-center gap-20">
                        <div class="profile-image-wrapper">
                            <img src="{{ asset('assets/images/customer-1.jpg') }}" alt="profile-image">
                        </div>
                        <div>
                            <h3 class="hd-sm">Muhammad Asif</h3>
                            <p class=" para fs-16 text-black">
                                HSE Manager, Al-Safa Engineering Pvt. Ltd.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="contact-us-sec bg-primary-theme position-relative">
    <img src="{{ asset('assets/images/contact-shape-top.png') }}" alt="contact-us-shape" class="contact-us-top-shape">
    <img src="{{ asset('assets/images/contact-shape-right-top.png') }}" alt="contact-us-shape"
        class="contact-us-right-top-shape">
    <img src="{{ asset('assets/images/contact-shape-right-bottom.png') }}" alt="contact-us-shape"
        class="contact-us-right-bottom-shape">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-88 pb-88 ">
                <div class="d-flex mb-40 align-items-center gap-20">
                    <h2 class="hd-36">Contact Us</h2>
                    <div class="col-lg-2">
                        <div class="border-line sm border-white"></div>
                    </div>
                </div>
                <h2 class="sec-hd mb-20">
                    Get in Touch
                </h2>
                <p class="para fs-20 contact-us-para">
                    If you have any questions or inquiries, feel free to reach out to us. Our team is always happy
                    to assist you and provide the best solutions for your industrial equipment needs. We are
                    committed to providing excellent customer service and support to ensure your satisfaction.
                </p>
                <p class="para fs-20 mb-80">
                    We look forward to hearing from you.
                </p>

                <div class="tes-img-wrapper position-relative">
                    <img src="{{ asset('assets/images/contact-us-left.png') }}" alt="contact-us-img">
                    <img src="{{ asset('assets/images/shape-04.png') }}" class="contact-us-shape" alt="shape-04">
                </div>
            </div>
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
<section class="newsletter-sec py-50">
    <div class="container">
        <div class="row row-gap-30 align-items-center">
            <div class="col-lg-6">
                <div class="d-flex align-items-center gap-20">
                    <img src="{{ asset('assets/images/icons/news-letter.svg') }}" alt="newsletter-left" class="newsletter-img">
                    <h2 class="hd-sm text-white" style="max-width: 350px;">Subscribe to our newsletter
                        for the latest updates and tips.</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="">
                    <div class="field-wrapper newsletter-field-wrapper d-flex align-items-center position-relative">
                        <input type="email" class="input-field" placeholder="Your Email Address">
                        <button
                            class="btn btn-primary newsletter-btn gap-10 d-flex justify-content-center align-items-center trd-btn">Subscribe
                            Now <span><i class="fa-solid fa-plus"></i></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection