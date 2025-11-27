<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    @if(\App\Models\Setting::get('site_favicon'))
        <link rel="icon" type="image/png" href="{{ strpos(\App\Models\Setting::get('site_favicon'), 'assets/') === 0 ? asset(\App\Models\Setting::get('site_favicon')) : asset('storage/' . \App\Models\Setting::get('site_favicon')) }}">
    @endif
    
    <!-- Primary Meta Tags -->
    <title>@yield('title', 'ValidCert - International Certified Excellence in Industrial Services')</title>
    <meta name="title" content="@yield('title', 'ValidCert - International Certified Excellence in Industrial Services')">
    <meta name="description" content="@yield('description', 'ValidCert is an international certified company providing comprehensive solutions in Training, Consultancy, Inspection, Procurement, and Engineering Support. Registered with the Pakistan Engineering Council (PEC) and ISO 9001 certified, we serve the Energy, Industrial, and Construction sectors while empowering individuals through globally recognized certifications.')">
    <meta name="keywords" content="@yield('keywords', 'ValidCert, International Certified Excellence in Industrial Services, Training, Consultancy, Inspection, Procurement, Engineering Support, Pakistan Engineering Council (PEC), ISO 9001 certified, Energy, Industrial, Construction sectors, globally recognized certifications')">
    <meta name="author" content="ValidCert">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    <meta name="distribution" content="global">
    <meta name="rating" content="general">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="@yield('canonical', url()->current())">
    
    <!-- Sitemap -->
    <link rel="sitemap" type="application/xml" href="{{ route('sitemap') }}">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:title" content="@yield('og_title', 'ValidCert - International Certified Excellence in Industrial Services')">
    <meta property="og:description" content="@yield('og_description', 'ValidCert is an international certified company providing comprehensive solutions in Training, Consultancy, Inspection, Procurement, and Engineering Support.')">
    <meta property="og:image" content="@yield('og_image', asset('assets/images/logo.png'))">
    <meta property="og:site_name" content="ValidCert">
    <meta property="og:locale" content="en_US">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="@yield('twitter_url', url()->current())">
    <meta name="twitter:title" content="@yield('twitter_title', 'ValidCert - International Certified Excellence in Industrial Services')">
    <meta name="twitter:description" content="@yield('twitter_description', 'ValidCert is an international certified company providing comprehensive solutions in Training, Consultancy, Inspection, Procurement, and Engineering Support.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('assets/images/logo.png'))">
    
    <!-- Additional SEO -->
    <meta name="geo.region" content="PK-SD">
    <meta name="geo.placename" content="Karachi, Pakistan">
    <meta name="geo.position" content="24.8607;67.0011">
    <meta name="ICBM" content="24.8607, 67.0011">
    
    <!-- Schema.org JSON-LD -->
    @yield('schema')
    <!-- font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&family=Red+Rose:wght@300..700&display=swap"
        rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- slick slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/utilities.css') }}">
</head>
<body>