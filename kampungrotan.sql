-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 07:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampungrotan`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_10_26_134558_create_stores_table', 1),
(5, '2021_10_26_134559_create_categories_table', 1),
(6, '2021_10_26_134560_create_products_table', 1),
(7, '2021_10_27_165914_create_projects_table', 1),
(8, '2021_10_27_170012_create_views_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_store` int(10) UNSIGNED NOT NULL,
  `id_category` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crafter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('process','accept','denied') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'process',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `history` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `id_user`, `name`, `slug`, `address`, `phone_number`, `history`, `photo`, `lat`, `lang`, `created_at`, `updated_at`) VALUES
(1, 1, 'Crafter 1', 'admin', 'Bandung', '08123456789', NULL, NULL, NULL, NULL, '2021-11-13 03:00:33', '2021-11-13 03:00:33'),
(2, 2, 'Crafter 2', 'user', 'Padang', '08123456789', NULL, NULL, NULL, NULL, '2021-11-13 03:00:34', '2021-11-13 03:00:34'),
(3, 3, 'Esly', 'galilea-rotan', 'Jl. Sultan Badaruddin No. 8, Palangka Raya, Kalimantan Tengah', '081352903870', 'esly123', NULL, '-2.2162758171690933', '113.91092429720489', '2021-11-13 03:08:38', '2021-11-15 23:52:08'),
(4, 4, 'Yenny', 'jawet-perindu', 'Jl. Katingan No. 3, Jawa Tengah', '082351711024', NULL, NULL, '-2.2021360497300986', '113.91431889045833', '2021-11-13 03:09:41', '2021-11-13 03:37:11'),
(5, 5, 'Amelia', 'indang-apang', 'Jalan Cilik Kriwut KM 7.5 Gang Bethel 1 no 18, Palangka Raya, Kalimantan Tengah', '081349029870', NULL, NULL, '-2.171694968815058', '113.86179711744494', '2021-11-13 03:10:45', '2021-11-13 03:37:32'),
(6, 6, 'Goniarto', 'rintik-rantak', 'Jl. Piranha XIX No. 30, Yogyakarta', '085249445673', NULL, NULL, '-2.1856374275885844', '113.87286314812931', '2021-11-13 03:12:01', '2021-11-13 03:38:09'),
(7, 7, 'Adeline', 'uei', 'Jl. Tingang I D. A. Tawa I, Kel Bukit Tunggal, Kec. Jekan Raya, Kota Palangka Raya, Prov. Kalimantan Tengah', '081248321375', NULL, NULL, '-2.2009198613668373', '113.8944005616227', '2021-11-13 03:13:09', '2021-11-13 03:38:32'),
(8, 8, 'Yuwensi', 'aazr', 'Jl. Kutilang Asri II No. 07 Palangka Raya, Kuala Kapuas, Kalimantan Tengah', '082153661010', NULL, NULL, '-2.2009055195253318', '113.89442410395161', '2021-11-13 03:14:15', '2021-11-13 03:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('crafter','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'crafter',
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `email_verified_at`, `password`, `role`, `photo`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'Admin', 'admin@kampungrotan.id', NULL, '$2y$10$mcijczHcX6b9sMg5uGUSyupeQqmq/NrxDVxnH0MWIWzwpgr.Df.cS', 'admin', NULL, NULL, '2021-11-13 03:00:33', '2021-11-13 03:00:33', NULL),
(2, 'User', 'User', 'user@kampungrotan.id', NULL, '$2y$10$Id1uYPDg0pJtYzZUMCramu6Kyniu7OJ5X8oPeGK0rkGf2z9.WSxn.', 'crafter', NULL, NULL, '2021-11-13 03:00:33', '2021-11-13 03:00:33', NULL),
(3, 'Esly', 'Lambung', 'esly.lambung@kampungrotan.id', NULL, '$2y$10$rZDJUNb1HOo/C6dV4dnD/eOobbCuNwZ2fe7nBkWAMvucq7PLKNdf.', 'crafter', NULL, NULL, '2021-11-13 03:08:38', '2021-11-15 23:50:57', NULL),
(4, 'Yenny', 'Kristiana', 'jawet.perindu@kampungrotan.id', NULL, '$2y$10$vonxM5b.dJ6zytvXVcgKKuRyEjdN3WWdjBhxQL9I3ifKDpDleKaFi', 'crafter', NULL, NULL, '2021-11-13 03:09:41', '2021-11-15 23:51:03', NULL),
(5, 'Amelia', 'Agustina', 'amelia.agustina@kampungrotan.id', NULL, '$2y$10$HR8uD79QMlXNDDxYRpGGiOYJ5PxAVzhC3yP4RxRd3AUKe7FqJmyDy', 'crafter', NULL, NULL, '2021-11-13 03:10:45', '2021-11-15 23:51:08', NULL),
(6, 'Goniarto', 'Jaya Santosa', 'goniarto.jaya@kampungrotan.id', NULL, '$2y$10$9wgLlIumdsXb4k9hxevXgubpeMnFrRT3lZnRv1cM9J2SBG5kTA.YO', 'crafter', NULL, NULL, '2021-11-13 03:12:01', '2021-11-15 23:51:12', NULL),
(7, 'Adeline', 'Christine', 'adeline.christine@kampungrotan.id', NULL, '$2y$10$eNyZXvXv65QGe9gNOK0k7.1bPM/iSXYldD1LhCzpF7wyYp3TJqQVS', 'crafter', NULL, NULL, '2021-11-13 03:13:09', '2021-11-15 23:51:17', NULL),
(8, 'Yuwensi', 'Yuwensi', 'yuwensi@kampungrotan.id', NULL, '$2y$10$u6.2CC3e7xZCaMlKZ5Nqie95tYwQ0O.OG6CRnb2cMdfMh/Y5O5Wre', 'crafter', NULL, NULL, '2021-11-13 03:14:15', '2021-11-15 23:51:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id_store_foreign` (`id_store`),
  ADD KEY `products_id_category_foreign` (`id_category`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_id_user_foreign` (`id_user`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stores_slug_unique` (`slug`),
  ADD KEY `stores_id_user_foreign` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `views_id_product_foreign` (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_id_store_foreign` FOREIGN KEY (`id_store`) REFERENCES `stores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `views`
--
ALTER TABLE `views`
  ADD CONSTRAINT `views_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
