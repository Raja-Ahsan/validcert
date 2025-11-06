@extends('layouts.app')

@section('title', 'Terms & Conditions - ValidCert | Service Terms and Legal Agreement')
@section('description', 'Read ValidCert\'s Terms and Conditions to understand the terms of use for our industrial services, training programs, consultancy services, and website usage.')
@section('keywords', 'Terms and Conditions, ValidCert Terms, Service Agreement, Legal Terms, Industrial Services Terms')
@section('canonical', route('terms'))
@section('og_type', 'website')
@section('og_title', 'Terms & Conditions - ValidCert')
@section('og_description', 'Review ValidCert\'s Terms and Conditions for using our services and website.')
@section('og_image', asset('assets/images/logo.png'))

@section('content')
<!-- Terms & Conditions Banner Section -->
<section class="hero-banner inner-banner">
    <div class="container">
        <div class="row row-gap-30 mt-50">
            <div class="col-lg-12 text-center">
                <h1 class="mb-20">
                    Terms & <span class="text-primary-theme">Conditions</span>
                </h1>
                <p class="text-white mb-20">
                    Please read these terms carefully before using our services or website.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Terms & Conditions Content Section -->
<section class="service-detail-sec our-services sec-gradiant py-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="content-wrapper" style="font-family: var(--primary-font);">
                    <div class="mb-40">
                        <p class="para fs-16 mb-20">
                            <strong>Last Updated:</strong> {{ date('F d, Y') }}
                        </p>
                        <p class="para fs-18 mb-30">
                            These Terms and Conditions ("Terms") govern your access to and use of ValidCert's website, services, training programs, and consultancy services. By accessing or using our services, you agree to be bound by these Terms.
                        </p>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">1. Acceptance of Terms</h2>
                        <p class="para fs-16 mb-20">
                            By accessing or using ValidCert's website and services, you acknowledge that you have read, understood, and agree to be bound by these Terms and Conditions. If you do not agree with any part of these Terms, you must not use our services.
                        </p>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">2. Services Description</h2>
                        <p class="para fs-16 mb-20">
                            ValidCert provides the following services:
                        </p>
                        <ul class="para fs-16 mb-20" style="list-style: disc; padding-left: 30px;">
                            <li>Industrial Training Programs and Certification Courses</li>
                            <li>Consultancy Services for industrial and engineering projects</li>
                            <li>Inspection and Assessment Services</li>
                            <li>Non-Destructive Testing (NDT) Services</li>
                            <li>Calibration Services</li>
                            <li>Engineering Support and Procurement Services</li>
                        </ul>
                        <p class="para fs-16 mb-20">
                            We reserve the right to modify, suspend, or discontinue any service at any time without prior notice.
                        </p>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">3. Service Bookings and Registration</h2>
                        <h3 class="hd-sm text-white mb-15">3.1 Booking Process</h3>
                        <p class="para fs-16 mb-20">
                            When you book a service or register for a training program:
                        </p>
                        <ul class="para fs-16 mb-20" style="list-style: disc; padding-left: 30px;">
                            <li>You must provide accurate and complete information</li>
                            <li>You are responsible for maintaining the confidentiality of your account</li>
                            <li>You must be at least 18 years old to use our services</li>
                            <li>All bookings are subject to availability and our approval</li>
                        </ul>

                        <h3 class="hd-sm text-white mb-15 mt-30">3.2 Payment Terms</h3>
                        <p class="para fs-16 mb-20">
                            Payment terms will be specified at the time of booking. We accept various payment methods as indicated during the booking process. All prices are subject to change without notice.
                        </p>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">4. User Obligations</h2>
                        <p class="para fs-16 mb-20">
                            You agree to:
                        </p>
                        <ul class="para fs-16 mb-20" style="list-style: disc; padding-left: 30px;">
                            <li>Use our services only for lawful purposes</li>
                            <li>Provide accurate and truthful information</li>
                            <li>Respect intellectual property rights</li>
                            <li>Not interfere with or disrupt our services</li>
                            <li>Not use our services to transmit harmful or malicious code</li>
                            <li>Comply with all applicable laws and regulations</li>
                        </ul>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">5. Intellectual Property</h2>
                        <p class="para fs-16 mb-20">
                            All content on this website, including text, graphics, logos, images, and software, is the property of ValidCert or its content suppliers and is protected by copyright and trademark laws. You may not reproduce, distribute, or create derivative works without our written permission.
                        </p>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">6. Limitation of Liability</h2>
                        <p class="para fs-16 mb-20">
                            To the maximum extent permitted by law:
                        </p>
                        <ul class="para fs-16 mb-20" style="list-style: disc; padding-left: 30px;">
                            <li>ValidCert shall not be liable for any indirect, incidental, special, or consequential damages</li>
                            <li>Our total liability shall not exceed the amount paid by you for the specific service</li>
                            <li>We do not guarantee that our services will be uninterrupted or error-free</li>
                            <li>We are not responsible for any loss or damage resulting from your use of our services</li>
                        </ul>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">7. Indemnification</h2>
                        <p class="para fs-16 mb-20">
                            You agree to indemnify and hold ValidCert, its officers, employees, and agents harmless from any claims, damages, losses, liabilities, and expenses arising from your use of our services or violation of these Terms.
                        </p>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">8. Cancellation and Refund Policy</h2>
                        <h3 class="hd-sm text-white mb-15">8.1 Service Cancellation</h3>
                        <p class="para fs-16 mb-20">
                            Cancellation policies vary by service type. Please refer to the specific terms provided at the time of booking. Generally:
                        </p>
                        <ul class="para fs-16 mb-20" style="list-style: disc; padding-left: 30px;">
                            <li>Cancellations must be made in writing</li>
                            <li>Refund eligibility depends on the timing of cancellation</li>
                            <li>Administrative fees may apply</li>
                        </ul>

                        <h3 class="hd-sm text-white mb-15 mt-30">8.2 Training Program Cancellation</h3>
                        <p class="para fs-16 mb-20">
                            Training program cancellations are subject to our training cancellation policy, which will be provided upon registration.
                        </p>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">9. Certification and Accreditation</h2>
                        <p class="para fs-16 mb-20">
                            ValidCert is registered with the Pakistan Engineering Council (PEC) and ISO 9001 certified. Certificates issued by ValidCert are subject to successful completion of training programs and assessment criteria. We reserve the right to revoke certificates if obtained through fraudulent means.
                        </p>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">10. Privacy</h2>
                        <p class="para fs-16 mb-20">
                            Your use of our services is also governed by our Privacy Policy. Please review our Privacy Policy to understand how we collect, use, and protect your information.
                        </p>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">11. Modifications to Terms</h2>
                        <p class="para fs-16 mb-20">
                            We reserve the right to modify these Terms at any time. Changes will be effective immediately upon posting on our website. Your continued use of our services after changes are posted constitutes acceptance of the modified Terms.
                        </p>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">12. Governing Law</h2>
                        <p class="para fs-16 mb-20">
                            These Terms shall be governed by and construed in accordance with the laws of Pakistan. Any disputes arising from these Terms shall be subject to the exclusive jurisdiction of the courts of Karachi, Pakistan.
                        </p>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">13. Severability</h2>
                        <p class="para fs-16 mb-20">
                            If any provision of these Terms is found to be invalid or unenforceable, the remaining provisions shall continue in full force and effect.
                        </p>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">14. Contact Information</h2>
                        <p class="para fs-16 mb-20">
                            If you have any questions about these Terms and Conditions, please contact us:
                        </p>
                        <div class="para fs-16 mb-20">
                            <p><strong>ValidCert</strong></p>
                            <p>{{ \App\Models\Setting::get('site_address', 'Shahrah e faisal karachi, Pakistan') }}</p>
                            <p>Email: <a href="mailto:{{ \App\Models\Setting::get('site_email', 'info@validcertpk.com') }}">{{ \App\Models\Setting::get('site_email', 'info@validcertpk.com') }}</a></p>
                            <p>Phone: {{ \App\Models\Setting::get('site_phone', '(+92) 300-90588-26') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

