-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2025 at 01:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `validcert`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_submissions`
--

CREATE TABLE `contact_submissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` enum('new','read','replied','archived') NOT NULL DEFAULT 'new',
  `admin_notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_submissions`
--

INSERT INTO `contact_submissions` (`id`, `name`, `email`, `phone`, `subject`, `message`, `status`, `admin_notes`, `created_at`, `updated_at`) VALUES
(1, 'Raja Ahsan', 'ahsan@test.com', '1231231123', 'Testing Contact Us form', 'This is my message', 'read', NULL, '2025-11-06 12:48:16', '2025-11-06 13:03:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_01_01_000001_create_services_table', 1),
(5, '2025_01_01_000002_create_service_bookings_table', 1),
(6, '2025_01_01_000003_create_contact_submissions_table', 1),
(7, '2025_11_06_194124_create_settings_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `form_fields` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`form_fields`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `description`, `short_description`, `image`, `icon`, `is_active`, `sort_order`, `form_fields`, `created_at`, `updated_at`) VALUES
(1, 'Training', 'training', '<p><strong>VALIDCERT </strong>provides comprehensive training solutions designed to enhance skills and knowledge across various industrial sectors.<br><br><strong>We offer:</strong></p>\r\n<ul>\r\n<li>International Accredited Courses</li>\r\n<li>Lead Auditor Courses</li>\r\n<li>Internal Auditing Techniques</li>\r\n<li>Health &amp; Safety Courses</li>\r\n<li>Food Safety Courses</li>\r\n<li>Equipment &amp; Technical Training</li>\r\n<li>Access &amp; Work at Height</li>\r\n</ul>\r\n<p data-start=\"723\" data-end=\"1098\">Our training programs are developed in line with <strong data-start=\"772\" data-end=\"799\">international standards</strong> and are ideal for both <strong data-start=\"823\" data-end=\"865\">individuals seeking career advancement</strong> and <strong data-start=\"870\" data-end=\"921\">organizations aiming to upskill their workforce</strong>. Each course combines theoretical understanding with practical application, ensuring participants gain the confidence and competence needed to excel in their respective fields.</p>', 'We offer physical, online, and distance learning courses for individuals and companies, building skills, safety awareness, and globally recognized certifications.', 'assets/images/Training.webp', 'fas fa-graduation-cap', 1, 1, '[{\"label\":\"testt\",\"name\":\"ddss\",\"type\":\"text\",\"required\":\"1\"}]', '2025-11-06 12:42:58', '2025-11-07 12:35:08'),
(2, 'Technical Inspection & Compliance', 'assessment', '<p data-start=\"256\" data-end=\"572\"><strong data-start=\"256\" data-end=\"269\">VALIDCERT</strong> provides reliable <strong data-start=\"288\" data-end=\"326\">inspection and compliance services</strong> to ensure the safety, integrity, and performance of assets and equipment. Our certified inspectors follow international standards and best practices to help organizations maintain compliance, minimize risks, and achieve operational excellence.</p>\r\n<p data-start=\"574\" data-end=\"1063\"><strong data-start=\"574\" data-end=\"608\">Our Inspection Services Cover:</strong><br data-start=\"608\" data-end=\"611\">&bull; <strong data-start=\"613\" data-end=\"634\">Lifting Equipment</strong> &ndash; Comprehensive inspection and certification of cranes, hoists, and other lifting systems.<br data-start=\"725\" data-end=\"728\">&bull; <strong data-start=\"730\" data-end=\"753\">Lifting Accessories</strong> &ndash; Detailed examination of slings, shackles, hooks, and related accessories for safe operation.<br data-start=\"848\" data-end=\"851\">&bull; <strong data-start=\"853\" data-end=\"879\">Earth Moving Equipment</strong> &ndash; Inspection and performance assessment of heavy machinery to ensure operational safety.<br data-start=\"968\" data-end=\"971\" data-is-only-node=\"\">&bull; <strong data-start=\"973\" data-end=\"985\">Vehicles</strong> &ndash; Safety and compliance inspections for industrial and commercial vehicles.</p>\r\n<p data-start=\"1065\" data-end=\"1222\">With <strong data-start=\"1070\" data-end=\"1083\">VALIDCERT</strong>, you can be confident that your equipment and operations meet the highest standards of <strong data-start=\"1171\" data-end=\"1221\">safety, reliability, and regulatory compliance</strong>.</p>', 'VALIDCERT provides reliable inspection and compliance services to ensure the safety, integrity, and performance of assets and equipment. Our certified inspectors follow international standards and best practices to help organizations maintain compliance, minimize risks, and achieve operational excellence.', 'assets/images/Assessment.webp', 'fas fa-clipboard-check', 1, 2, NULL, '2025-11-06 12:42:58', '2025-11-07 14:25:05'),
(3, 'Consulting Services', 'consulting', '<p data-start=\"285\" data-end=\"470\"><strong data-start=\"285\" data-end=\"298\">VALIDCERT</strong> offers expert <strong data-start=\"313\" data-end=\"336\">consulting services</strong> designed to help organizations navigate complex regulatory requirements, strengthen compliance, and achieve operational excellence.</p>\r\n<p data-start=\"472\" data-end=\"1046\"><strong data-start=\"472\" data-end=\"508\">Our Consulting Services Include:</strong><br data-start=\"508\" data-end=\"511\">&bull; <strong data-start=\"513\" data-end=\"529\">HSE Advisory</strong> &ndash; Strategic guidance to enhance health, safety, and environmental performance.<br data-start=\"608\" data-end=\"611\">&bull; <strong data-start=\"613\" data-end=\"629\">HSE Services</strong> &ndash; Comprehensive safety management and compliance support.<br data-start=\"687\" data-end=\"690\">&bull; <strong data-start=\"692\" data-end=\"714\">Quality Management</strong> &ndash; Implementation and improvement of quality systems aligned with international standards.<br data-start=\"804\" data-end=\"807\" data-is-only-node=\"\">&bull; <strong data-start=\"809\" data-end=\"831\">Pre-Audit Services</strong> &ndash; Preparing your organization for successful audits with expert evaluation and readiness checks.<br data-start=\"928\" data-end=\"931\">&bull; <strong data-start=\"933\" data-end=\"956\">Post-Audit Services</strong> &ndash; Assisting with corrective actions and continuous improvement following audit results.</p>\r\n<p data-start=\"1048\" data-end=\"1244\">Our experienced consultants work collaboratively with your team to develop <strong data-start=\"1123\" data-end=\"1145\">tailored solutions</strong> that align with your organization&rsquo;s goals, ensuring efficiency, compliance, and long-term success.</p>', 'Our consulting services help organizations achieve compliance, strengthen systems, and maintain operational excellence in health, safety, and quality.', 'assets/images/Consulting.webp', 'fas fa-handshake', 1, 3, NULL, '2025-11-06 12:42:58', '2025-11-07 12:43:57'),
(4, 'Non-Destructive Testing (NDT) Services', 'ndt-services', '<p data-start=\"264\" data-end=\"535\"><strong data-start=\"264\" data-end=\"277\">VALIDCERT</strong> provides reliable <strong data-start=\"296\" data-end=\"329\">Non-Destructive Testing (NDT)</strong> services, ensuring the integrity and safety of materials, components, and structures. Our certified experts use advanced testing techniques to detect defects without causing any damage to the tested items.</p>\r\n<p data-start=\"537\" data-end=\"1363\"><strong data-start=\"537\" data-end=\"566\">Our NDT Services Include:</strong><br data-start=\"566\" data-end=\"569\">&bull; <strong data-start=\"571\" data-end=\"602\">Dye Penetrant Testing (DPT)</strong> &ndash; Detection of surface-breaking defects on non-porous materials.<br data-start=\"667\" data-end=\"670\">&bull; <strong data-start=\"672\" data-end=\"707\">Magnetic Particle Testing (MPT)</strong> &ndash; Identification of surface and near-surface discontinuities in ferromagnetic materials.<br data-start=\"796\" data-end=\"799\">&bull; <strong data-start=\"801\" data-end=\"827\">Visual Inspection (VT)</strong> &ndash; Detailed examination to verify surface condition and workmanship.<br data-start=\"895\" data-end=\"898\" data-is-only-node=\"\">&bull; <strong data-start=\"900\" data-end=\"919\">Holiday Testing</strong> &ndash; Inspection of coatings for pinholes, holidays, or discontinuities.<br data-start=\"988\" data-end=\"991\">&bull; <strong data-start=\"993\" data-end=\"1020\">Ultrasonic Testing (UT)</strong> &ndash; Accurate detection of internal flaws and thickness measurement.<br data-start=\"1086\" data-end=\"1089\">&bull; <strong data-start=\"1091\" data-end=\"1150\">Sand Blasting Profile &amp; Painting/Coating DFT Inspection</strong> &ndash; Ensuring proper surface preparation and coating thickness compliance.<br data-start=\"1222\" data-end=\"1225\">&bull; <strong data-start=\"1227\" data-end=\"1265\">Welding Inspection (WPS, WQT, PQR)</strong> &ndash; Comprehensive review and qualification of welding procedures, welders, and performance tests.</p>\r\n<p data-start=\"1365\" data-end=\"1478\">With <strong data-start=\"1370\" data-end=\"1383\">VALIDCERT</strong>, you can trust in precision, reliability, and compliance with international testing standards.</p>', 'Reliable Non-Destructive Testing services with certified experts', 'assets/images/NDTServices.webp', 'fas fa-microscope', 1, 4, NULL, '2025-11-06 12:42:58', '2025-11-07 12:47:12'),
(6, 'Integrated Technical Support Services', 'integrated-technical-support', '<p data-start=\"287\" data-end=\"637\"><strong data-start=\"287\" data-end=\"300\">VALIDCERT</strong> offers comprehensive <strong data-start=\"322\" data-end=\"363\">Integrated Technical Support Services</strong> to assist industries in maintaining safe, efficient, and compliant operations. Our solutions cover <strong data-start=\"463\" data-end=\"566\">manpower sourcing, safety management, equipment load testing, and field engineering project support</strong>, ensuring operational excellence across all industrial environments.</p>\r\n<p data-start=\"639\" data-end=\"1291\"><strong data-start=\"639\" data-end=\"664\">Our Services Include:</strong><br data-start=\"664\" data-end=\"667\">&bull; <strong data-start=\"669\" data-end=\"694\">Manpower / Secondment</strong> &ndash; Provision of qualified and experienced personnel for short- or long-term project requirements.<br data-start=\"791\" data-end=\"794\">&bull; <strong data-start=\"796\" data-end=\"823\">Crane / Forklift Supply</strong> &ndash; Reliable lifting equipment to support on-site operations and heavy material handling.<br data-start=\"911\" data-end=\"914\">&bull; <strong data-start=\"916\" data-end=\"955\">Personal Protective Equipment (PPE)</strong> &ndash; Certified safety gear to protect workers and promote a safe work environment.<br data-start=\"1035\" data-end=\"1038\" data-is-only-node=\"\">&bull; <strong data-start=\"1040\" data-end=\"1076\">Solid Load for Equipment Testing</strong> &ndash; Supply of calibrated solid loads for equipment strength and performance verification.<br data-start=\"1164\" data-end=\"1167\">&bull; <strong data-start=\"1169\" data-end=\"1192\">Lifting Accessories</strong> &ndash; Range of certified lifting tools and accessories for safe and efficient industrial operations.</p>\r\n<p data-start=\"1293\" data-end=\"1454\">With <strong data-start=\"1298\" data-end=\"1311\">VALIDCERT</strong>, you can rely on end-to-end technical support solutions tailored to meet your operational demands with <strong data-start=\"1415\" data-end=\"1453\">safety, reliability, and precision</strong>.</p>', 'Sourcing and supply services for safe and efficient industrial operations', 'assets/images/Integrated.webp', 'fas fa-cogs', 1, 5, NULL, '2025-11-06 12:42:58', '2025-11-07 14:26:13');

-- --------------------------------------------------------

--
-- Table structure for table `service_bookings`
--

CREATE TABLE `service_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `form_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`form_data`)),
  `status` enum('pending','contacted','completed','cancelled') NOT NULL DEFAULT 'pending',
  `admin_notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_bookings`
--

INSERT INTO `service_bookings` (`id`, `service_id`, `name`, `email`, `phone`, `message`, `form_data`, `status`, `admin_notes`, `created_at`, `updated_at`) VALUES
(2, 2, 'Raja Ahsan', 'ahsan_93raja@yahoo.com', '123123123', 'Testing', NULL, 'pending', NULL, '2025-11-06 14:34:58', '2025-11-06 14:34:58');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1BD6m6RgJqvpDPZzPfF2uTr5KmP3mNaFSOBvQfGG', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieVcxNTZUVkZUa2phTk5wQncwWDhucHZaS3dkUktKeFNPQ1ROaUZTZyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3QvdmFsaWRjZXJ0IjtzOjU6InJvdXRlIjtzOjQ6ImhvbWUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1762547413),
('lzptZ4SaSl7g7Rhnt7GyDFYHw4B0f5jY2Alpb5ks', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaGJIbGRraUprTjV4dHFKOGY3TmZ1ZjBVdFZCYk5kOXJxcThiZ1pONiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3QvdmFsaWRjZXJ0IjtzOjU6InJvdXRlIjtzOjQ6ImhvbWUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1762560827),
('o3z5deZDUaqqKomsKITeB0cDKBH6w5kGTyerj1aw', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiT3dTMVNIRGN5eGQ4NXRHWHA3dFg2UUFVdkhvVzZHeVVIVENyZWxFMCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9sb2NhbGhvc3QvdmFsaWRjZXJ0L2FkbWluL3NldHRpbmdzIjtzOjU6InJvdXRlIjtzOjIwOiJhZG1pbi5zZXR0aW5ncy5pbmRleCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1762558921);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'ValidCert', '2025-11-06 14:43:54', '2025-11-06 14:43:54'),
(2, 'site_email', 'info@validcertpk.com', '2025-11-06 14:43:54', '2025-11-06 14:43:54'),
(3, 'site_phone', '(+92) 300-90588-26', '2025-11-06 14:43:54', '2025-11-06 14:46:38'),
(4, 'site_address', 'Shahrah e faisal karachi, Pakistan', '2025-11-06 14:43:54', '2025-11-06 14:46:38'),
(5, 'facebook_url', 'https://facebook.com', '2025-11-06 14:43:54', '2025-11-06 14:47:49'),
(6, 'twitter_url', NULL, '2025-11-06 14:43:54', '2025-11-06 14:45:02'),
(7, 'instagram_url', 'https://Instagram.com', '2025-11-06 14:43:54', '2025-11-06 14:47:50'),
(8, 'youtube_url', NULL, '2025-11-06 14:43:54', '2025-11-06 14:45:02'),
(9, 'tiktok_url', NULL, '2025-11-06 14:43:55', '2025-11-06 14:45:02'),
(10, 'linkedin_url', 'https://LinkedIn.com', '2025-11-06 14:43:55', '2025-11-06 14:47:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@validcertpk.com', '2025-11-06 12:42:28', '$2y$12$/Cm5Ea31UHcGPoJ6LdU6Duyz8h6hJOd9DIGaaT4apK6l6Roz1Ab8K', 'jiTnFTUTqFycVcor4cIGhBok2H1GBzjmi2ze8NLexGwkdYl5o4f0amSLzXdd', '2025-11-06 12:42:28', '2025-11-06 12:42:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contact_submissions`
--
ALTER TABLE `contact_submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Indexes for table `service_bookings`
--
ALTER TABLE `service_bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_bookings_service_id_foreign` (`service_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_submissions`
--
ALTER TABLE `contact_submissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service_bookings`
--
ALTER TABLE `service_bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `service_bookings`
--
ALTER TABLE `service_bookings`
  ADD CONSTRAINT `service_bookings_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
