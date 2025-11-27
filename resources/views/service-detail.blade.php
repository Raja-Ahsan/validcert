@extends('layouts.app')

@section('title', $service->title . ' - ' . strip_tags($service->short_description ?? 'Professional Service') . ' | ValidCert')
@section('description', strip_tags($service->short_description ?? $service->description ?? 'Professional service by ValidCert. PEC Registered and ISO 9001 certified industrial services provider in Pakistan.'))
@section('keywords', $service->title . ', ValidCert Services, Industrial Services Pakistan, ' . ($service->title . ' Karachi'))
@section('canonical', route('service.detail', $service->slug))
@section('og_type', 'website')
@section('og_title', $service->title . ' - ValidCert')
@section('og_description', strip_tags($service->short_description ?? $service->description ?? 'Professional service by ValidCert'))
@section('og_image', $service->image ? asset($service->image) : asset('assets/images/logo.png'))
@section('twitter_title', $service->title . ' - ValidCert')
@section('twitter_description', strip_tags($service->short_description ?? $service->description ?? 'Professional service by ValidCert'))
@section('twitter_image', $service->image ? asset($service->image) : asset('assets/images/logo.png'))

@section('schema')
<script type="application/ld+json">
{
  "context": "https://schema.org",
  "type": "Service",
  "name": "{{ $service->title }}",
  "description": "{{ strip_tags($service->short_description ?? $service->description ?? 'Professional service') }}",
  "provider": {
    "type": "Organization",
    "name": "ValidCert",
    "url": "{{ route('home') }}",
    "logo": "{{ asset('assets/images/logo.png') }}",
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
  },
  "areaServed": {
    "type": "Country",
    "name": "Pakistan"
  },
  "serviceType": "{{ $service->title }}",
  "url": "{{ route('service.detail', $service->slug) }}"{{ $service->image ? ',"image": "' . asset($service->image) . '"' : '' }},
  "offers": {
    "type": "Offer",
    "url": "{{ route('service.detail', $service->slug) }}",
    "priceCurrency": "PKR",
    "availability": "https://schema.org/InStock"
  }
}
</script>
@endsection

@section('content')
<!-- Services Hero Banner -->
<section class="hero-banner inner-banner service-detail-banner" style="background-image: linear-gradient(135deg, rgba(0, 10, 25, 0.75) 0%, rgba(153, 7, 7, 0.65) 100%), url('{{ $service->image ? asset($service->image) : asset('assets/images/Training.webp') }}');">
    <div class="container">
        <div class="row row-gap-30 mt-50">
            <div class="col-lg-12 text-center">
                <h1 class="mb-20">
                    <span class="text-primary-theme">{{ $service->title }}</span>
                </h1>
                <p class="text-white mb-20">
                    {{ $service->short_description ?? 'Comprehensive solutions in Training, Consultancy, Inspection, Procurement, and Engineering Support' }}
                </p>
            </div>
        </div>
    </div>
</section>
<section class="service-detail-sec our-services sec-gradiant">
    <div class="container">
        <div class="row row-gap-30 justify-content-between">
            <div class="col-lg-6">
                <div class="services-detail-card-wrap">
                    
                    <div class="sd-content-wrapper">
                        <h3 class="sec-hd mb-10 text-primary-theme">{{ $service->title }}</h3>
                        
                        @if($service->description)
                        <div class="para mb-20">
                            {!! $service->description !!}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-us-form">
                    <h3 class="mb-20">Book This Service</h3>
                    @include('components.booking-form', ['service' => $service])
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
