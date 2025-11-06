@extends('layouts.app')

@section('title', 'About ValidCert - Internationally Certified Industrial Services Company | PEC Registered & ISO 9001')
@section('description', 'Learn about ValidCert, established in 2025, an internationally certified company providing comprehensive solutions in Training, Consultancy, Inspection, Procurement, and Engineering Support. PEC Registered and ISO 9001 certified.')
@section('keywords', 'About ValidCert, Industrial Services Company Pakistan, PEC Registered Company, ISO 9001 Certified, Training Consultancy Services, Engineering Support Karachi')
@section('canonical', route('about'))
@section('og_type', 'website')
@section('og_title', 'About ValidCert - Internationally Certified Industrial Services')
@section('og_description', 'Established in 2025, VALIDCERT is an internationally certified company providing comprehensive solutions in Training, Consultancy, Inspection, Procurement, and Engineering Support.')
@section('og_image', asset('assets/images/about-us.webp'))

@section('schema')
<script type="application/ld+json">
{
  "context": "https://schema.org",
  "type": "AboutPage",
  "name": "About ValidCert",
  "description": "Internationally certified company providing comprehensive solutions in Training, Consultancy, Inspection, Procurement, and Engineering Support",
  "mainEntity": {
    "type": "Organization",
    "name": "ValidCert",
    "foundingDate": "2025",
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
      "email": "info@validcertpk.com"
    }
  }
}
</script>
@endsection

@section('content')
<section class="hero-banner inner-banner">
    <div class="container">
        <div class="row row-gap-30 mt-50">
            <div class="col-lg-12 text-center">
                <h1 class="mb-20">
                    <span class="text-primary-theme">About</span>
                </h1>
                <p class="text-white mb-20">
                    Comprehensive solutions in Training, Consultancy, Inspection, Procurement, and Engineering Support
                </p>
            </div>
        </div>
    </div>
</section>
<section class="about-sec sec-gradiant pt-145 pb-125">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6">
                <div class="services-detail-card-wrap">
                    <div class="sd-img-wrapper mb-20">
                        <img src="{{ asset('assets/images/Training.webp') }}" alt="services-detail-image">
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="sd-content-wrapper">
                    <h3 class="sec-hd mb-10 text-primary-theme">Internationally Certified Excellence in Industrial Services</h3>
                    <p class="para  mb-20">
                    Established in 2025, VALIDCERT is an internationally certified company providing comprehensive solutions in Training, Consultancy, Inspection, Procurement, and Engineering Support.

Registered with the Pakistan Engineering Council (PEC) and ISO 9001 certified, we serve the Energy, Industrial, and Construction sectors while empowering individuals through globally recognized certifications.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
