-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 11:15 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekam_medis`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokters`
--

CREATE TABLE `dokters` (
  `id` int(50) NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokters`
--

INSERT INTO `dokters` (`id`, `nama_dokter`, `spesialis`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
(1, 'Aldy Rhama', 'Paru-Paru', 'kembar 3', '081271251193', '2022-11-08 07:24:15', '2022-11-08 06:59:28'),
(3, 'Putri Khovia', 'Jantung', 'asdasjdajsd', '12312312', '2022-11-08 08:16:49', '2022-11-08 08:16:49'),
(15, 'Ivan Alfiqri', 'Kaki', 'adasdas', '123123123123123', '2022-11-11 13:04:16', '2022-11-11 13:04:16'),
(18, 'Dara', 'dkaskdaskd', '1231231', '2222', '2022-11-11 13:08:14', '2022-11-11 13:08:14'),
(20, 'Putri Khovia', 'Mata', '312312', '1111', '2022-11-11 13:14:26', '2022-11-11 13:14:26'),
(21, 'Ivan Alfiqri', 'asdasd', '23123', '222222', '2022-11-11 13:34:13', '2022-11-11 13:34:13');

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `obats`
--

CREATE TABLE `obats` (
  `id` int(50) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `ket_obat` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obats`
--

INSERT INTO `obats` (`id`, `nama_obat`, `ket_obat`, `created_at`, `updated_at`) VALUES
(1, 'Sanmol', 'Obat penurun panas', '2022-11-09 12:43:21', '2022-11-09 12:43:21'),
(2, 'Saridon dong', 'Obat pereda sakit pada gigi', '2022-11-09 11:53:35', '2022-11-09 12:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `pasiens`
--

CREATE TABLE `pasiens` (
  `id` int(50) NOT NULL,
  `nomor_identitas` varchar(100) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasiens`
--

INSERT INTO `pasiens` (`id`, `nomor_identitas`, `nama_pasien`, `jenis_kelamin`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
(1, '1571070601990041', 'Aldy Rhama Wahyudi', 'Laki-Laki', 'Kembar Lestari 2', '081271251193', '2022-11-09 13:13:23', '2022-11-09 13:13:23'),
(2, '1571070601990042', 'aeldeye', 'Laki-Laki', '2312313asdasdasdas', '081271251191', '2022-11-09 12:26:14', '2022-11-09 12:35:58');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `polikliniks`
--

CREATE TABLE `polikliniks` (
  `id` int(50) NOT NULL,
  `nama_poli` varchar(100) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `polikliniks`
--

INSERT INTO `polikliniks` (`id`, `nama_poli`, `lokasi`, `created_at`, `updated_at`) VALUES
(1, 'Poliklinik Umum', 'R.3 Lt.1', '2022-11-09 13:45:35', '2022-11-09 13:45:35'),
(2, 'Poliklinik Kesehatan Ibu dan Anak', 'R.32 Lt.2', '2022-11-09 13:06:42', '2022-11-09 13:12:43');

-- --------------------------------------------------------

--
-- Table structure for table `rekammedis`
--

CREATE TABLE `rekammedis` (
  `id` int(50) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `id_poli` int(50) NOT NULL,
  `id_pasien` int(50) NOT NULL,
  `keluhan` text NOT NULL,
  `id_dokter` int(50) NOT NULL,
  `diagnosa` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekammedis`
--

INSERT INTO `rekammedis` (`id`, `tgl_periksa`, `id_poli`, `id_pasien`, `keluhan`, `id_dokter`, `diagnosa`, `created_at`, `updated_at`) VALUES
(4, '2022-11-10', 1, 1, 'Sakit Perut', 1, 'asdasdasd', '2022-11-10 15:41:30', '2022-11-10 15:05:32'),
(5, '2022-11-09', 2, 2, 'asdasdasd', 3, 'asdasdasd', '2022-11-10 14:44:37', '2022-11-10 14:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `rm_obats`
--

CREATE TABLE `rm_obats` (
  `id` int(50) NOT NULL,
  `id_rekammedis` int(50) NOT NULL,
  `id_obat` int(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'admin', NULL, '$2y$10$3FXbz3uv27GOfgy77KvcMODHPaX8U9k4/jSA1tyXEdzyQk1bazih2', '1', NULL, '2022-11-11 08:04:44', '2022-11-11 08:04:44'),
(2, 'Operator', 'operator@gmail.com', 'operator', NULL, '$2y$10$ceG23QCK8s78.2hlYZgbQOojnusVgz110lEXr92ws0sCV5ygcchRS', '2', NULL, '2022-11-11 08:04:44', '2022-11-11 08:04:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokters`
--
ALTER TABLE `dokters`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `obats`
--
ALTER TABLE `obats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasiens`
--
ALTER TABLE `pasiens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `polikliniks`
--
ALTER TABLE `polikliniks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekammedis`
--
ALTER TABLE `rekammedis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rm_obats`
--
ALTER TABLE `rm_obats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rekammedis` (`id_rekammedis`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokters`
--
ALTER TABLE `dokters`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
-- AUTO_INCREMENT for table `obats`
--
ALTER TABLE `obats`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pasiens`
--
ALTER TABLE `pasiens`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `polikliniks`
--
ALTER TABLE `polikliniks`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rekammedis`
--
ALTER TABLE `rekammedis`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rm_obats`
--
ALTER TABLE `rm_obats`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
