@extends('layouts.app')

@section('title', 'Our Services - Training, Consultancy, Inspection, NDT & Calibration Services | ValidCert')
@section('description', 'Comprehensive industrial services including Training, Assessment, Consulting, NDT Services, Calibration Services, and Integrated Technical Support. Professional solutions for Energy, Industrial, and Construction sectors.')
@section('keywords', 'Industrial Services, Training Services, Consulting Services, NDT Services, Calibration Services, Assessment Services, Engineering Support, Industrial Solutions Pakistan')
@section('canonical', route('services'))
@section('og_type', 'website')
@section('og_title', 'Our Services - Comprehensive Industrial Solutions')
@section('og_description', 'Comprehensive solutions across five core divisions: Training, Assessment, Consulting, NDT Services, Calibration Services, and Integrated Technical Support.')
@section('og_image', asset('assets/images/Training.webp'))

@section('schema')
<script type="application/ld+json">
{
  "context": "https://schema.org",
  "type": "ItemList",
  "name": "ValidCert Services",
  "description": "Comprehensive industrial services offered by ValidCert",
  "itemListElement": [
    @foreach($services as $index => $service)
    {
      "type": "ListItem",
      "position": {{ $index + 1 }},
      "item": {
        "type": "Service",
        "name": "{{ $service->title }}",
        "description": "{{ strip_tags($service->short_description ?? $service->description) }}",
        "url": "{{ route('service.detail', $service->slug) }}",
        "provider": {
          "type": "Organization",
          "name": "ValidCert"
        }
      }
    }{{ !$loop->last ? ',' : '' }}
    @endforeach
  ]
}
</script>
@endsection

@section('content')
<!-- Services Hero Banner -->
<section class="hero-banner inner-banner">
    <div class="container">
        <div class="row row-gap-30 mt-50">
            <div class="col-lg-12 text-center">
                <h1 class="mb-20">
                    Our <span class="text-primary-theme">Services</span>
                </h1>
                <p class="text-white mb-20">
                    Comprehensive solutions in Training, Consultancy, Inspection, Procurement, and Engineering Support
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
@endsection
