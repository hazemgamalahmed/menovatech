-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 11:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User Admin', '01234567891', 'default.png', '2020-07-12 18:45:34', '$2y$10$2S3/zD55rfnMKUuTTzUe0.xBukpxPBEh4ckbWqadoSGOyjkc/UfuC', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQ1MDRlNDdhYWI3ZmI2ZDllY2M3MGZkYTE0NDAxYTI3ZDlhNDM3NGIzMDdlNTVkMzZiNzU5NmIyZmZjMjJlMzRjYzkwZjA0MDM3YmZlYjQiLCJpYXQiOjE2MDIzNTA1NzMsIm5iZiI6MTYwMjM1MDU3MywiZXhwIjoxNjMzODg2NTczLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.cdTDY5S1zT77YV-PCcU2GHpafGmFbrV8lVt4WKeWyZBtWnUKYWsvYFK8fJ2LWgKhVOlV-_u06YEgjEmrSRAMkynGoLYfK9HOekI5SQKnBIaj1YXbRfQtPuipSUik-mXMrsrZaP0LYdzF4eKSxzMAwo__FNPEJqVtJyWidWqZCKa8-SVC_AGIqo4MbMJtga1L6VlpapjmF4OF1K4ktLZ7d8cewVsgraQlEEyszEqT4PrAgTRzKBClrBKONrSKxjj3H11a0B4C6tQNdl_RQFq49HvbiKDtOYUXuLOSFuXowgd8CAaa2JXzP6gBQoGEXAyjkuMeszpmqPRmNchNXpsyig4n9-9ZkuBE46Xa0KlrmBPE602XKR7lFsfjawCYCabAkVWYYlyokxV2RUgLzec884Ht3xBKFdPw9rBFBeYYLx6Y685ry887zWxksQVLKKYTzizQ-YjqTX-jiFMKZeBXJeLjt1GoiTleXZbewt8-XWeyiak_zXfrhb-IHz8Edn4wt8TkZV8dPXpneNHrnWeb-wsxbUqz2JRhsPeV_rOMPT7ibf0cRDmbKTj_NqAFWVG4J5rjQlHuW1lGgJk2OTajPLbot_PCgB17uG_r8L_IBVwF3UO0CaDZv25UZpaexs52FyMiwcGu9g_XLlcdCgZZ5GBYBKliA2a37T360FuzStc', '2020-07-12 18:45:34', '2020-10-24 18:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
('304ed05f6ed1249d0384baf0dadd4fc2ded4d989235b0af3a96130855ce6a84d0b7c9f11b4e69a5c', 1, 1, 'MyApp', '[]', 0, '2020-11-22 18:49:44', '2020-11-22 18:49:44', '2021-11-22 20:49:44');

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
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, NULL, 'Laravel Personal Access Client', 'O728nIE7cTEnK2a3qcXrbDLG6dBEHC0oLd6FY7vz', NULL, 'http://localhost', 1, 0, 0, '2020-11-22 16:26:54', '2020-11-22 16:26:54'),
(2, NULL, 'Laravel Password Grant Client', 'iF8CAyBmoZabLbIoBZW6dPBg6DGhvLeXqejt6L87', 'users', 'http://localhost', 0, 1, 0, '2020-11-22 16:26:54', '2020-11-22 16:26:54');

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
(1, 1, '2020-11-22 16:26:54', '2020-11-22 16:26:54');

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
(1, 'IT Services', '<i class=\"far fa-object-group serv_icon text_green\"></i>', 'Menovatech has the experience and expertise to help your business meet your goals and objectives faster, with less risk. Menovatech is a consulting organization who assists customers in achieving their business objectives with the use of technology.', '<h4>Content Here...</h4><p><br></p><p><br></p>'),
(2, 'Development ', '<i class=\"fas fa-laptop-code serv_icon text_blue\"></i>', 'We have our experienced teamwork and also have a big network of freelancers with many projects categorized according industries, so you will get your App in a professional and fast way. We provide all development sides such as Desktop Development Solutions.', '<h4>Content Here...</h4><p><br></p><p><br></p>'),
(3, 'Digital Marketing ', '<i class=\"far fa-comments serv_icon text_green\"></i>', 'We are the fastest growing Digital Marketing and web design Company, managed to approve our success in internet solutions field in a short period of time. We seek to provide our services to our clients with more flexibility and efficiency.', '<h4>Content Here...</h4><p><br></p><p><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pharmacy_id` int(11) NOT NULL DEFAULT 1,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `role` enum('admin','emp','store') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'emp',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pharmacy_id`, `name`, `phone`, `image`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin pharmacy1', '01234567891', 'default.png', 'admin', '2020-07-12 18:45:34', '$2y$10$2S3/zD55rfnMKUuTTzUe0.xBukpxPBEh4ckbWqadoSGOyjkc/UfuC', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMjQ1MDRlNDdhYWI3ZmI2ZDllY2M3MGZkYTE0NDAxYTI3ZDlhNDM3NGIzMDdlNTVkMzZiNzU5NmIyZmZjMjJlMzRjYzkwZjA0MDM3YmZlYjQiLCJpYXQiOjE2MDIzNTA1NzMsIm5iZiI6MTYwMjM1MDU3MywiZXhwIjoxNjMzODg2NTczLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.cdTDY5S1zT77YV-PCcU2GHpafGmFbrV8lVt4WKeWyZBtWnUKYWsvYFK8fJ2LWgKhVOlV-_u06YEgjEmrSRAMkynGoLYfK9HOekI5SQKnBIaj1YXbRfQtPuipSUik-mXMrsrZaP0LYdzF4eKSxzMAwo__FNPEJqVtJyWidWqZCKa8-SVC_AGIqo4MbMJtga1L6VlpapjmF4OF1K4ktLZ7d8cewVsgraQlEEyszEqT4PrAgTRzKBClrBKONrSKxjj3H11a0B4C6tQNdl_RQFq49HvbiKDtOYUXuLOSFuXowgd8CAaa2JXzP6gBQoGEXAyjkuMeszpmqPRmNchNXpsyig4n9-9ZkuBE46Xa0KlrmBPE602XKR7lFsfjawCYCabAkVWYYlyokxV2RUgLzec884Ht3xBKFdPw9rBFBeYYLx6Y685ry887zWxksQVLKKYTzizQ-YjqTX-jiFMKZeBXJeLjt1GoiTleXZbewt8-XWeyiak_zXfrhb-IHz8Edn4wt8TkZV8dPXpneNHrnWeb-wsxbUqz2JRhsPeV_rOMPT7ibf0cRDmbKTj_NqAFWVG4J5rjQlHuW1lGgJk2OTajPLbot_PCgB17uG_r8L_IBVwF3UO0CaDZv25UZpaexs52FyMiwcGu9g_XLlcdCgZZ5GBYBKliA2a37T360FuzStc', '2020-07-12 18:45:34', '2020-10-24 18:07:01'),
(2, 1, 'Emp pharmacy1', '01234567892', 'default.png', 'emp', '2020-07-12 18:45:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7CheE5CW1q', '2020-07-12 18:45:35', '2020-07-12 18:45:35'),
(3, 1, 'Store pharmacy1', '01234567893', 'default.png', 'store', '2020-07-12 18:45:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7CheE5CW1q', '2020-07-12 18:45:35', '2020-07-12 18:45:35'),
(4, 2, 'Admin pharmacy2', '012345678911', 'default.png', 'admin', '2020-07-12 18:45:34', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNWM5NzI2MzRmNGU0ZDQyODYzMzBjYWIxYTJkZGRiNGYzNGYzNTRmOGEzM2Q0Yjg0ZDQyNTM4ZjY4ZmZiMmVkZGI0MWY3YWE4ZWNkYzk4MDYiLCJpYXQiOjE1OTc3NTkyNjEsIm5iZiI6MTU5Nzc1OTI2MSwiZXhwIjoxNjI5Mjk1MjYxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.BUSk_HxhcVttvA_nkqZR8QsIAD9C9a5x5nTZv3u2WvZmBVb9VreQ7tr4kAStDxhnOKsdD-1iSuGiys5YM_vUxcG94goUvQT2giU3PTjdlqOsavqYOFpgWuBK_9x9oaehWEfWKsEemZApXv5Ngk6hjZTDksn0qWoI3VSAEBRKfyNiCxVK0qJCvf0sbm_tYCwOfy9XqGuiiMpXokQ0evdVWV5RlE0Q9YovmlzMz3372WXFSbnpbh-RYTvjWMqRbPEoGrDfkO1nunMenpQS3_35mdWk0s9KZO1NqiSmd3k2GmRAm9BgBQ9miGz4BgkeHoWdr7svDt714iOXzhZvMzYC3-2c-5vDx6UPtMXBzvhfF4pXTuQC7JeQulPj_IS1exGIuZmDmFEeMwj0SoAIZSspWA62IkQaeEJTPjX3E5GqELhBblXFFCyKyvOFzquAF4dS4Nue1hUg6IDpj7sz1R4Scwy2JTo66HYaU3TfKZAH5yYDvREnTXYooQ5eG5WbaJpNfT9IWpBS8r-mIAu0RDgZ3EZc0TBdxUBh5vY9N3eLgGWityl4wUnkW4d9v93X43meI64-akqpzp46kScaN7EFRYC6IFmeV7CDIY46UZCnnpHxaUyCQvo1A6UcSjeVK9oZg51nyblC5N2-UYR4PCTn1_KkpTPVjl4D_pdMK1kkCkg', '2020-07-12 18:45:34', '2020-08-18 14:01:02'),
(5, 2, 'Emp pharmacy2', '012345678922', 'default.png', 'emp', '2020-07-12 18:45:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7CheE5CW1q', '2020-07-12 18:45:35', '2020-07-12 18:45:35'),
(6, 2, 'Store pharmacy2', '012345678933', 'default.png', 'store', '2020-07-12 18:45:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7CheE5CW1q', '2020-07-12 18:45:35', '2020-07-12 18:45:35'),
(7, 3, 'admin', '012345678903', 'default.png', 'admin', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', NULL, NULL),
(8, 4, 'admin', '012345678904', 'default.png', 'admin', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', NULL, NULL),
(9, 5, 'admin', '012345678905', 'default.png', 'emp', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', NULL, NULL),
(10, 6, 'admin', '012345678906', 'default.png', 'admin', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', NULL, NULL),
(11, 7, 'admin', '012345678907', 'default.png', 'admin', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', NULL, NULL),
(12, 8, 'admin', '012345678908', 'default.png', 'admin', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', NULL, NULL),
(13, 9, 'admin', '012345678909', 'default.png', 'admin', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', NULL, NULL),
(14, 10, 'admin', '0123456789010', 'default.png', 'admin', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', NULL, NULL),
(15, 11, 'admin', '0123456789011', 'default.png', 'admin', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', NULL, NULL),
(16, 12, 'admin', '0123456789012', 'default.png', 'admin', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', NULL, NULL),
(17, 13, 'admin', '0123456789013', 'default.png', 'admin', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', NULL, NULL),
(18, 14, 'admin', '0123456789014', 'default.png', 'admin', NULL, '', '', NULL, NULL),
(19, 15, 'admin', '0123456789015', 'default.png', 'admin', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', NULL, NULL),
(20, 16, 'admin', '0123456789016', 'default.png', 'admin', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', NULL, NULL),
(21, 17, 'admin', '0123456789017', 'default.png', 'admin', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', NULL, NULL),
(22, 18, 'admin', '0123456789018', 'default.png', 'admin', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', NULL, NULL),
(23, 19, 'admin', '0123456789019', 'default.png', 'admin', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
