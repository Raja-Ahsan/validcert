<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use Illuminate\Support\Str;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Training',
                'short_description' => 'We offer physical, online, and distance learning courses for individuals and companies.',
                'description' => '<p>VALIDCERT provides comprehensive training solutions designed to enhance skills and knowledge across various industrial sectors. We offer:</p>
<ul>
<li>Physical classroom training programs</li>
<li>Online training courses with interactive sessions</li>
<li>Distance learning programs for flexible schedules</li>
<li>Customized training for companies and organizations</li>
<li>Certification programs recognized globally</li>
<li>Industry-specific training modules</li>
</ul>
<p>Our training programs are designed to meet international standards and are suitable for both individuals seeking professional development and companies looking to upskill their workforce.</p>',
                'image' => 'assets/images/Training.webp',
                'icon' => 'fas fa-graduation-cap',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Assessment',
                'short_description' => 'VALIDCERT provides reliable inspection and assessment services to ensure compliance, safety, and performance of assets and equipment.',
                'description' => '<p>Our comprehensive assessment services help organizations maintain the highest standards of safety and compliance. We provide:</p>
<ul>
<li>Equipment inspection and assessment</li>
<li>Safety compliance evaluations</li>
<li>Performance assessments of industrial assets</li>
<li>Regulatory compliance audits</li>
<li>Risk assessment and analysis</li>
<li>Detailed assessment reports with recommendations</li>
</ul>
<p>Our certified assessors ensure that all evaluations meet international standards and regulatory requirements.</p>',
                'image' => 'assets/images/Assessment.webp',
                'icon' => 'fas fa-clipboard-check',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Consulting',
                'short_description' => 'Helping organizations achieve compliance and operational excellence',
                'description' => '<p>VALIDCERT offers expert consulting services to help organizations navigate complex regulatory requirements and achieve operational excellence. Our consulting services include:</p>
<ul>
<li>Compliance consulting and strategy development</li>
<li>Operational excellence programs</li>
<li>Quality management system implementation</li>
<li>Process improvement and optimization</li>
<li>Regulatory guidance and support</li>
<li>Risk management consulting</li>
</ul>
<p>Our experienced consultants work closely with your team to develop customized solutions that meet your specific needs and objectives.</p>',
                'image' => 'assets/images/Consulting.webp',
                'icon' => 'fas fa-handshake',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'NDT Services',
                'short_description' => 'Reliable Non-Destructive Testing services with certified experts',
                'description' => '<p>VALIDCERT provides comprehensive Non-Destructive Testing (NDT) services using advanced techniques and certified professionals. Our NDT services include:</p>
<ul>
<li>Ultrasonic Testing (UT)</li>
<li>Radiographic Testing (RT)</li>
<li>Magnetic Particle Testing (MT)</li>
<li>Liquid Penetrant Testing (PT)</li>
<li>Visual Testing (VT)</li>
<li>Eddy Current Testing (ET)</li>
</ul>
<p>Our certified NDT technicians use state-of-the-art equipment to ensure accurate and reliable testing results without damaging the materials being tested.</p>',
                'image' => 'assets/images/NDTServices.webp',
                'icon' => 'fas fa-microscope',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Calibration Services',
                'short_description' => 'VALIDCERT ensures the accuracy and compliance of industrial instruments by facilitating calibration through ISO/IEC 17025 accredited laboratories and qualified field inspectors.',
                'description' => '<p>Our calibration services ensure that your instruments meet the highest standards of accuracy and compliance. We provide:</p>
<ul>
<li>Calibration through ISO/IEC 17025 accredited laboratories</li>
<li>On-site calibration services by qualified field inspectors</li>
<li>Calibration certificates with traceability</li>
<li>Regular calibration scheduling and reminders</li>
<li>Compliance with international standards</li>
<li>Calibration of various industrial instruments</li>
</ul>
<p>We work with accredited laboratories to ensure all calibrations meet international standards and regulatory requirements.</p>',
                'image' => 'assets/images/Calibration.webp',
                'icon' => 'fas fa-tools',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'Integrated Technical Support',
                'short_description' => 'Sourcing and supply services for safe and efficient industrial operations',
                'description' => '<p>VALIDCERT provides integrated technical support services to ensure safe and efficient industrial operations. Our services include:</p>
<ul>
<li>Equipment sourcing and procurement</li>
<li>Technical support and maintenance</li>
<li>Supply chain management</li>
<li>Quality assurance and control</li>
<li>Technical documentation and reporting</li>
<li>24/7 technical support availability</li>
</ul>
<p>Our integrated approach ensures seamless coordination between different aspects of your industrial operations, resulting in improved efficiency and safety.</p>',
                'image' => 'assets/images/Integrated.webp',
                'icon' => 'fas fa-cogs',
                'sort_order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($services as $serviceData) {
            // Generate unique slug
            $slug = Str::slug($serviceData['title']);
            $originalSlug = $slug;
            $counter = 1;
            
            while (Service::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }
            
            $serviceData['slug'] = $slug;
            
            Service::create($serviceData);
        }

        $this->command->info('Services seeded successfully!');
        $this->command->info('Total services created: ' . count($services));
    }
}

