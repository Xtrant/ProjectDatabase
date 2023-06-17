-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 10:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE `halaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`id`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(2, 'INTEREST', 'Playing Game, Touring, Sport, flying', '2023-06-02 20:29:44', '2023-06-06 02:26:04'),
(3, 'AWARD & CERTIFICATE', 'Kursus Online Certificate, Juara Turnamen ML, and Rabraw Certificate', '2023-06-05 22:18:34', '2023-06-06 00:35:16');

-- --------------------------------------------------------

--
-- Table structure for table `metadata`
--

CREATE TABLE `metadata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_key` varchar(255) NOT NULL,
  `meta_value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `metadata`
--

INSERT INTO `metadata` (`id`, `meta_key`, `meta_value`, `created_at`, `updated_at`) VALUES
(1, '_foto', '23 - 06 - 06 - 00.jpg', '2023-06-03 22:31:01', '2023-06-06 02:28:00'),
(2, '_email', 'ismail.pandjoel@gmail.com', '2023-06-03 22:32:57', '2023-06-03 22:32:57'),
(3, '_kota', 'Malang', '2023-06-04 00:22:12', '2023-06-06 02:27:26'),
(4, '_provinsi', 'Jawa Timur', '2023-06-04 00:22:12', '2023-06-06 02:27:26'),
(5, '_noHp', '089652043275', '2023-06-04 00:22:12', '2023-06-04 00:22:12'),
(6, '_facebook', 'https://www.facebook.com/ismail.estran.5?mibextid=ZbWKwL', '2023-06-04 00:28:41', '2023-06-05 17:09:03'),
(7, '_instagram', 'https://instagram.com/ismailextrant?igshid=ZDc4ODBmNjlmNQ==', '2023-06-04 00:28:41', '2023-06-05 17:09:04'),
(8, '_github', 'https://github.com/Xtrant', '2023-06-04 00:28:41', '2023-06-05 17:09:04'),
(9, '_linkedin', 'https://www.linkedin.com/in/ismail-extrant-31a92a274', '2023-06-04 00:28:41', '2023-06-05 17:09:04'),
(10, '_halaman_interest', '2', '2023-06-05 22:29:33', '2023-06-05 22:35:45'),
(11, '_halaman_award', '3', '2023-06-05 22:29:33', '2023-06-05 22:35:45');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2023_06_02_104559_table_users_add_column_google_id', 2),
(3, '2023_06_02_112138_users_set_default_password', 3),
(4, '2023_06_03_011028_user_add_column_avatar', 4),
(5, '2023_06_03_012440_create_halamen_table', 5),
(6, '2023_06_03_230226_create_riwayats_table', 6),
(9, '2023_06_04_030812_create_metadata_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tahun_mulai` year(4) NOT NULL,
  `tahun_akhir` year(4) DEFAULT NULL,
  `info1` varchar(255) DEFAULT NULL,
  `info2` varchar(255) DEFAULT NULL,
  `info3` varchar(255) DEFAULT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id`, `judul`, `tahun_mulai`, `tahun_akhir`, `info1`, `info2`, `info3`, `isi`, `created_at`, `updated_at`) VALUES
(12, 'Elementary School', 2007, 2013, 'St. Melania Bandung', NULL, NULL, '-', '2023-06-06 00:12:06', '2023-06-06 00:12:06'),
(13, 'Junior High School', 2013, 2017, '14th Public Junior High School of Bandung', NULL, NULL, '-', '2023-06-06 00:12:33', '2023-06-06 00:12:33'),
(15, 'Senior High School', 2017, 2020, '24th Public Senior High School of Bandung', 'Science', NULL, '-', '2023-06-06 00:17:32', '2023-06-06 00:17:32'),
(19, 'College Student', 2021, NULL, 'Universitas Brawijaya', 'Teknik Informatika', 'Ilmu Komputer', '-', '2023-06-06 02:26:49', '2023-06-06 02:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` text NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `google_id`, `avatar`) VALUES
(1, 'Ismail Extrant', 'ismail.pandjoel@gmail.com', NULL, NULL, NULL, '2023-06-02 04:36:10', '2023-06-02 18:21:13', '117657629242260308266', '117657629242260308266.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metadata`
--
ALTER TABLE `metadata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `metadata`
--
ALTER TABLE `metadata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
