@extends('layouts.app')

@section('title', 'Privacy Policy - ValidCert | Data Protection & Privacy Statement')
@section('description', 'Read ValidCert\'s Privacy Policy to understand how we collect, use, and protect your personal information when you use our industrial services, training programs, and consultancy services.')
@section('keywords', 'Privacy Policy, ValidCert Privacy, Data Protection, Personal Information, Industrial Services Privacy')
@section('canonical', route('privacy-policy'))
@section('og_type', 'website')
@section('og_title', 'Privacy Policy - ValidCert')
@section('og_description', 'Learn how ValidCert protects your personal information and data privacy.')
@section('og_image', asset('assets/images/logo.png'))

@section('content')
<!-- Privacy Policy Banner Section -->
<section class="hero-banner inner-banner">
    <div class="container">
        <div class="row row-gap-30 mt-50">
            <div class="col-lg-12 text-center">
                <h1 class="mb-20">
                    <span class="text-primary-theme">Privacy</span> Policy
                </h1>
                <p class="text-white mb-20">
                    Your privacy is important to us. This policy explains how we collect, use, and protect your information.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Privacy Policy Content Section -->
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
                            ValidCert ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website, use our services, or interact with us.
                        </p>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">1. Information We Collect</h2>
                        <h3 class="hd-sm text-white mb-15">1.1 Personal Information</h3>
                        <p class="para fs-16 mb-20">
                            We may collect personal information that you voluntarily provide to us when you:
                        </p>
                        <ul class="para fs-16 mb-20" style="list-style: disc; padding-left: 30px;">
                            <li>Register for our training programs or services</li>
                            <li>Submit a service booking or inquiry</li>
                            <li>Contact us through our contact form</li>
                            <li>Subscribe to our newsletter</li>
                            <li>Participate in surveys or feedback forms</li>
                        </ul>
                        <p class="para fs-16 mb-20">
                            This information may include:
                        </p>
                        <ul class="para fs-16 mb-20" style="list-style: disc; padding-left: 30px;">
                            <li>Name and contact information (email, phone number, address)</li>
                            <li>Company name and job title</li>
                            <li>Payment information (processed securely through third-party payment processors)</li>
                            <li>Any other information you choose to provide</li>
                        </ul>

                        <h3 class="hd-sm text-white mb-15 mt-30">1.2 Automatically Collected Information</h3>
                        <p class="para fs-16 mb-20">
                            When you visit our website, we may automatically collect certain information about your device and browsing behavior, including:
                        </p>
                        <ul class="para fs-16 mb-20" style="list-style: disc; padding-left: 30px;">
                            <li>IP address and browser type</li>
                            <li>Pages visited and time spent on pages</li>
                            <li>Referring website addresses</li>
                            <li>Device information and operating system</li>
                        </ul>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">2. How We Use Your Information</h2>
                        <p class="para fs-16 mb-20">
                            We use the information we collect to:
                        </p>
                        <ul class="para fs-16 mb-20" style="list-style: disc; padding-left: 30px;">
                            <li>Provide, maintain, and improve our services</li>
                            <li>Process your service bookings and training registrations</li>
                            <li>Respond to your inquiries and provide customer support</li>
                            <li>Send you important updates about our services</li>
                            <li>Send marketing communications (with your consent)</li>
                            <li>Comply with legal obligations and protect our rights</li>
                            <li>Analyze website usage and improve user experience</li>
                        </ul>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">3. Information Sharing and Disclosure</h2>
                        <p class="para fs-16 mb-20">
                            We do not sell, trade, or rent your personal information to third parties. We may share your information only in the following circumstances:
                        </p>
                        <ul class="para fs-16 mb-20" style="list-style: disc; padding-left: 30px;">
                            <li><strong>Service Providers:</strong> We may share information with trusted third-party service providers who assist us in operating our website and conducting our business</li>
                            <li><strong>Legal Requirements:</strong> We may disclose information when required by law or to protect our rights and safety</li>
                            <li><strong>Business Transfers:</strong> In the event of a merger, acquisition, or sale of assets, your information may be transferred</li>
                            <li><strong>With Your Consent:</strong> We may share information with your explicit consent</li>
                        </ul>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">4. Data Security</h2>
                        <p class="para fs-16 mb-20">
                            We implement appropriate technical and organizational security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the Internet or electronic storage is 100% secure.
                        </p>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">5. Your Rights</h2>
                        <p class="para fs-16 mb-20">
                            You have the right to:
                        </p>
                        <ul class="para fs-16 mb-20" style="list-style: disc; padding-left: 30px;">
                            <li>Access and receive a copy of your personal information</li>
                            <li>Correct inaccurate or incomplete information</li>
                            <li>Request deletion of your personal information</li>
                            <li>Object to processing of your personal information</li>
                            <li>Withdraw consent at any time</li>
                            <li>Lodge a complaint with a data protection authority</li>
                        </ul>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">6. Cookies and Tracking Technologies</h2>
                        <p class="para fs-16 mb-20">
                            We use cookies and similar tracking technologies to enhance your browsing experience, analyze website traffic, and personalize content. You can control cookie preferences through your browser settings.
                        </p>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">7. Third-Party Links</h2>
                        <p class="para fs-16 mb-20">
                            Our website may contain links to third-party websites. We are not responsible for the privacy practices of these external sites. We encourage you to review their privacy policies.
                        </p>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">8. Children's Privacy</h2>
                        <p class="para fs-16 mb-20">
                            Our services are not directed to individuals under the age of 18. We do not knowingly collect personal information from children. If you believe we have collected information from a child, please contact us immediately.
                        </p>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">9. Changes to This Privacy Policy</h2>
                        <p class="para fs-16 mb-20">
                            We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the "Last Updated" date. You are advised to review this Privacy Policy periodically.
                        </p>
                    </div>

                    <div class="mb-40">
                        <h2 class="sec-hd mb-20">10. Contact Us</h2>
                        <p class="para fs-16 mb-20">
                            If you have any questions about this Privacy Policy or wish to exercise your rights, please contact us:
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

