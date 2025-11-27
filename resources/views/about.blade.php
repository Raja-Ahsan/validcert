@extends('layouts.app')

@section('title', 'About ValidCert - Internationally Accredited Industrial Services Company | ISO/IEC 17020 & ISO 9001')
@section('description', 'Learn about ValidCert, established in 2025, an internationally accredited organization offering integrated Training, Consultancy, Inspection, Procurement, and Engineering Support services. ISO/IEC 17020 accredited and ISO 9001 certified.')
@section('keywords', 'About ValidCert, Industrial Services Company Pakistan, ISO/IEC 17020 Accredited, ISO 9001 Certified, Training Consultancy Services, Engineering Support Karachi, HSE Training')
@section('canonical', route('about'))
@section('og_type', 'website')
@section('og_title', 'About ValidCert - Internationally Accredited Industrial Services')
@section('og_description', 'Established in 2025, VALIDCERT is an internationally accredited organization offering integrated Training, Consultancy, Inspection, Procurement, and Engineering Support services. ISO/IEC 17020 accredited and ISO 9001 certified.')
@section('og_image', asset('assets/images/about-us.webp'))

@section('schema')
<script type="application/ld+json">
{
  "context": "https://schema.org",
  "type": "AboutPage",
  "name": "About ValidCert",
  "description": "Internationally accredited organization offering integrated Training, Consultancy, Inspection, Procurement, and Engineering Support services. ISO/IEC 17020 accredited and ISO 9001 certified.",
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
<section class="hero-banner inner-banner about-page-banner">
    <div class="container">
        <div class="row row-gap-30 mt-50">
            <div class="col-lg-12 text-center">
                <h1 class="mb-20">
                    <span class="text-primary-theme">About</span>
                </h1>
                <p class="text-white mb-20">
                    Trusted Training | Reliable Support | Professional Inspection
                </p>
            </div>
        </div>
    </div>
</section>
<section class="about-sec sec-gradiant pt-145 pb-125">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="about-content-wrapper text-center">
                    <div class="about-text-content">
                        <h3 class="sec-hd mb-30 text-primary-theme">About Us</h3>
                        <p class="para mb-25">
                            Established in 2025, VALIDCERT is an internationally accredited organization offering integrated Training, Consultancy, Inspection, Procurement, and Engineering Support services.
                        </p>
                        <p class="para mb-25">
                            VALIDCERT holds ISO/IEC 17020 accreditation and ISO 9001 certification, underscoring our commitment to excellence, technical competence, and ethical business practices. We cater to the Energy, Industrial, and Construction sectors, delivering reliable, safe, and fully compliant solutions designed to meet the evolving needs of our clients.
                        </p>
                        <p class="para mb-25">
                            Our expertise extends to providing internationally recognized training and certification programs, equipping professionals and organizations with the knowledge and credentials required to achieve global safety and operational excellence.
                        </p>
                        <p class="para mb-25">
                            Guided by a culture of innovation, professionalism, and continuous improvement, VALIDCERT is dedicated to building lasting partnerships founded on trust, quality, and performance.
                        </p>
                        <p class="para mb-0 fw-600 fs-20">
                            At VALIDCERT, Quality, Safety, and Client Satisfaction are not just priorities — they are the principles that define our success.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="vision-mission-sec sec-gradiant pt-125 pb-125">
    <div class="container">
        <div class="row row-gap-40">
            <div class="col-lg-6">
                <div class="vision-mission-card h-100">
                    <div class="d-flex align-items-center mb-20">
                        <div class="icon-wrapper me-15">
                            <i class="fa-solid fa-eye fa-2x text-primary-theme"></i>
                        </div>
                        <h3 class="sec-hd mb-0 text-primary-theme">Vision</h3>
                    </div>
                    <p class="para">
                        To be a trusted global partner in HSE training, consultancy, inspection, and technical solutions, ensuring sustainable growth and safety excellence for our clients.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="vision-mission-card h-100">
                    <div class="d-flex align-items-center mb-20">
                        <div class="icon-wrapper me-15">
                            <i class="fa-solid fa-bullseye fa-2x text-primary-theme"></i>
                        </div>
                        <h3 class="sec-hd mb-0 text-primary-theme">Mission</h3>
                    </div>
                    <p class="para">
                        To deliver world-class services through continuous innovation, international compliance, and client-focused solutions that enhance operational performance and safety culture.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
