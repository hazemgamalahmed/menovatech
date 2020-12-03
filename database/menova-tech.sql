-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 09:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menova-tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hazem gamal', '01110082125', '123456789', NULL, NULL, NULL),
(2, 'ahmed', '01112545458', '$2y$10$PGoUubrm28O7Nw4WivO.POK24a1DHz.IjUVcGWdqxwna4wLiZZQ5e', NULL, '2020-11-30 15:38:20', '2020-11-30 15:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2020_11_30_170327_create_projects_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('642dc917b1ef31a8cc2ce30c276d5d7a2540959c3b18894bf8ce45a4fd11710d2802a9f9f8ea5780', 2, 1, 'MyApp', '[]', 0, '2020-12-01 15:29:16', '2020-12-01 15:29:16', '2021-12-01 17:29:16'),
('ce357c4e10c6141bc9e4f267e55a3eec228f37dac1c09bcf209dcdb3ec7af6d524cb7c3521535a6d', 2, 1, 'MyApp', '[]', 0, '2020-11-30 15:59:10', '2020-11-30 15:59:10', '2021-11-30 17:59:10'),
('f74103c025fc1a55ec6981570f1e15061d2a81c0cd4ff77390922ca33c57c179122cbed5e3b48ab8', 2, 1, 'MyApp', '[]', 0, '2020-12-01 14:31:15', '2020-12-01 14:31:15', '2021-12-01 16:31:15');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'hA8H73JHiE28lYtD91JQ4Puxs6rP0a3b2MiuwTwq', NULL, 'http://localhost', 1, 0, 0, '2020-11-30 15:59:00', '2020-11-30 15:59:00'),
(2, NULL, 'Laravel Password Grant Client', 'm3ZHPtiBdBdVwMYInXtFNWkt8Y0USNwREfece6L8', 'users', 'http://localhost', 0, 1, 0, '2020-11-30 15:59:00', '2020-11-30 15:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-11-30 15:59:00', '2020-11-30 15:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pics` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `pics`, `description`, `created_at`, `updated_at`) VALUES
(3, 'dolorem', 'https://lorempixel.com/640/480/technics/?31623', 'Est sit enim sint consequatur. Dolore cupiditate sed quibusdam expedita eum. Aperiam in voluptas accusantium quo sint.', NULL, NULL),
(4, 'sunt', 'https://lorempixel.com/640/480/technics/?45983', 'Deserunt debitis aut laboriosam consectetur placeat dignissimos quia esse. Amet repudiandae nesciunt voluptatibus occaecati voluptatem expedita. Dolorum aut doloremque rerum nihil. Ullam corrupti et tenetur eius doloremque magnam. Veritatis voluptatem ullam ex aut beatae molestias ea.', NULL, NULL),
(5, 'atque', 'https://lorempixel.com/640/480/technics/?25596', 'Commodi aut sed ea quo vero eum. Quibusdam aliquid dolores dolores et facilis quia mollitia. Sapiente aliquam corporis sed accusamus aut rerum animi natus. Vel quasi accusamus vitae nesciunt.', NULL, NULL),
(6, 'expedita', 'https://lorempixel.com/640/480/technics/?22265', 'Sit recusandae dolor a magni est sit incidunt. Sint aut mollitia eos facere sequi saepe voluptatibus.', NULL, NULL),
(7, 'pariatur', 'https://lorempixel.com/640/480/technics/?98481', 'Sint laudantium est nobis vel. Vel quidem est officiis et quasi consequuntur. Adipisci consequatur voluptatem est. Corporis quia ex voluptatem saepe cupiditate omnis ut. Cupiditate ducimus aut voluptates aliquid aut ut.', NULL, NULL),
(8, 'molestias', 'https://lorempixel.com/640/480/technics/?93128', 'Nihil saepe voluptas quia expedita et. Pariatur omnis quos cumque qui et. At maxime ut magnam. Non enim cupiditate sint debitis rerum.', NULL, NULL),
(9, 'eos', 'https://lorempixel.com/640/480/technics/?86763', 'Ipsam reprehenderit aspernatur quos explicabo aliquam aperiam maxime. Voluptates et ut earum eum exercitationem a soluta. Rerum incidunt vel dolor et labore quis.', NULL, NULL),
(10, 'sequi', 'https://lorempixel.com/640/480/technics/?93903', 'Voluptas et facere ut eum et soluta. Nostrum quaerat nobis cupiditate occaecati voluptatem esse. Cupiditate id molestiae deleniti exercitationem rerum ut. Ut deserunt sit omnis.', NULL, NULL),
(11, 'ut', 'https://lorempixel.com/640/480/technics/?52945', 'Aperiam officia fugiat minima recusandae quasi. Nulla autem ipsam voluptas suscipit dolores neque. Modi distinctio est unde quis repudiandae. Ut consectetur et est consectetur sunt ut.', NULL, NULL),
(12, 'atque', 'https://lorempixel.com/640/480/technics/?71939', 'Omnis veniam ut officiis impedit amet ullam dolorem qui. Corporis consequatur sunt sint iste corporis. Neque cum tempora eius quibusdam maxime voluptatem deleniti molestiae.', NULL, NULL),
(13, 'blanditiis', 'https://lorempixel.com/640/480/technics/?79366', 'Et harum et nostrum consequatur eum dicta facilis facilis. Esse dolores consectetur quaerat est quaerat hic neque. Maiores veritatis expedita necessitatibus dolorem sed dolor. Aut sapiente praesentium expedita rem iure.', NULL, NULL),
(14, 'id', 'https://lorempixel.com/640/480/technics/?60951', 'Dignissimos quam optio quod enim consequatur. Repudiandae saepe nam consequatur. Dignissimos velit nam provident earum omnis velit quo. Accusantium rerum occaecati qui deleniti quibusdam.', NULL, NULL),
(15, 'unde', 'https://lorempixel.com/640/480/technics/?27045', 'Aut quis dignissimos et culpa quis sit. Ratione velit aliquid ut et omnis repellendus. Tempore accusamus et velit delectus reiciendis.', NULL, NULL),
(16, 'magni', 'https://lorempixel.com/640/480/technics/?28709', 'Qui in repellat ut dolor aspernatur nulla ab. Commodi cum eveniet aperiam quae eum fugiat est. Ut omnis consequuntur repellendus suscipit ex.', NULL, NULL),
(17, 'velit', 'https://lorempixel.com/640/480/technics/?73273', 'Aut commodi vel fugiat voluptatem at nulla et. Non accusantium laudantium omnis. Ad est aut ratione reprehenderit vel. Cupiditate facilis rem eligendi rerum recusandae tempora.', NULL, NULL),
(18, 'nesciunt', 'https://lorempixel.com/640/480/technics/?72655', 'Id similique nemo in quibusdam in. Vitae aut possimus tempora possimus placeat.', NULL, NULL),
(19, 'molestiae', 'https://lorempixel.com/640/480/technics/?12731', 'Hic distinctio enim consectetur natus quisquam similique. Fugiat distinctio earum delectus in ex aut at ipsam. Praesentium rem enim et.', NULL, NULL),
(20, 'omnis', 'https://lorempixel.com/640/480/technics/?20931', 'Nihil non aperiam ea qui est. Eaque delectus cupiditate facere ab. Ea perferendis est autem unde necessitatibus consequuntur. Saepe eos repellendus exercitationem omnis repudiandae delectus ea.', NULL, NULL),
(21, 'consectetur', 'https://lorempixel.com/640/480/technics/?82527', 'In cupiditate aut nam et doloremque a. Sed qui tenetur vel rem qui dolore aperiam et. Et ex explicabo vero quasi quisquam enim est. Accusamus aut voluptatem ratione labore ea.', NULL, NULL),
(22, 'we land', 'https://lorempixel.com/640/480/technics/?31623', 'welcome we are we land', '2020-12-01 15:24:46', '2020-12-01 15:24:46');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `icon` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `icon`, `description`, `content`) VALUES
(1, 'digital markting', '<i class=\"fa fa-home\"></i>', NULL, NULL),
(2, 'marketing', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hazem gamal', '01110082125', '123456789', NULL, NULL, NULL),
(2, 'ahmed', '01112545458', '$2y$10$PGoUubrm28O7Nw4WivO.POK24a1DHz.IjUVcGWdqxwna4wLiZZQ5e', NULL, '2020-11-30 15:38:20', '2020-11-30 15:38:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
