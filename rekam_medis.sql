-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2023 at 01:18 PM
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
(23, 'Dokter A', 'Umum', 'Alamat A', '0811111', '2022-11-15 06:28:08', '2022-11-15 06:28:08'),
(24, 'Dokter B', 'Gigi', 'Alamat B', '0822222', '2022-11-15 06:28:37', '2022-11-15 06:28:37'),
(25, 'Dokter C', 'Ibu dan Anak', 'Alamat C', '0833333', '2022-11-15 06:31:10', '2022-11-15 06:31:10');

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
  `jenis_obat` enum('Serbuk','Tablet','Pil','Kapsul','Sirup','Salep') NOT NULL,
  `ket_obat` text NOT NULL,
  `dosis_obat` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obats`
--

INSERT INTO `obats` (`id`, `nama_obat`, `jenis_obat`, `ket_obat`, `dosis_obat`, `created_at`, `updated_at`) VALUES
(4, 'Amoxicillin', 'Serbuk', 'Antibiotik yang digunakan dalam pengobatan berbagai infeksi bakteri', '', '2022-11-15 06:39:26', '2022-11-15 06:39:35'),
(5, 'Asam mefenamat', 'Serbuk', 'Obat untuk meredakan nyeri dan memberi rasa nyaman', '', '2022-11-15 06:41:28', '2022-11-15 06:41:28'),
(6, 'Betahistine', 'Serbuk', 'Obat anti-vertigo', '', '2022-11-15 06:42:23', '2022-11-15 06:42:23'),
(7, 'Ibuprofen', 'Serbuk', 'Obat untuk meredakan nyeri dan peradangan', '', '2022-11-15 06:44:27', '2022-11-15 06:44:27'),
(8, 'Paracetamol', 'Serbuk', 'Obat untuk menurunkan demam', '', '2022-11-15 06:45:29', '2022-11-15 06:45:29'),
(9, 'Vitamin A', 'Serbuk', 'Untuk menjaga kesehatan mata, kulit, serta organ reproduksi', '', '2022-11-15 06:46:11', '2022-11-15 06:46:11'),
(10, 'Ascorbic Acid', 'Serbuk', 'Obat untuk pasien yang mengalami defisiensi atau kekurangan vitamin C', '', '2022-11-15 06:47:04', '2022-11-15 06:47:04'),
(11, 'Saridon', 'Tablet', 'Obat Sakit Gigi', '1/2 x 3 per Hari', '2023-01-14 16:13:17', '2023-01-14 16:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `pasiens`
--

CREATE TABLE `pasiens` (
  `id` int(50) NOT NULL,
  `nomor_identitas` varchar(100) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `usia_pasien` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasiens`
--

INSERT INTO `pasiens` (`id`, `nomor_identitas`, `nama_pasien`, `jenis_kelamin`, `usia_pasien`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
(3, '1511111', 'Pasien A', 'Laki-Laki', 10, 'Alamat Pasien A', '0881111', '2022-11-15 06:32:35', '2022-11-15 06:32:35'),
(4, '1522222', 'Pasien B', 'Perempuan', 15, 'Alamat Pasien B', '0882222', '2022-11-15 06:33:09', '2022-11-15 06:33:09'),
(5, '1533333', 'Pasien C', 'Laki-Laki', 17, 'Alamat Pasien C', '0883333', '2022-11-15 06:33:40', '2022-11-15 06:33:40'),
(6, '1544444', 'Pasien D', 'Perempuan', 11, 'Alamat Pasien D', '0884444', '2022-11-15 06:34:08', '2022-11-15 06:34:08'),
(7, '155555', 'Pasien E', 'Perempuan', 12, 'Alamat Pasien E', '0885555', '2022-11-15 06:34:39', '2022-11-15 06:34:39'),
(8, '13123123', 'Aldy', 'Laki-Laki', 30, 'Kembar 2', '313123', '2022-12-09 09:13:28', '2022-12-09 09:13:28'),
(9, '1', 'Putri', 'Perempuan', 40, 'alamat putri', '123123', '2022-12-09 09:17:30', '2022-12-09 09:17:30'),
(10, '1312312', 'Ivan', 'Laki-Laki', 6, 'alamat ivan', '23123123', '2022-12-09 09:17:44', '2022-12-09 09:17:44'),
(11, '123123', 'Dara', 'Perempuan', 19, 'alamat dara', '1313', '2022-12-09 09:18:00', '2022-12-09 09:18:00'),
(12, '23123', 'Rhama', 'Laki-Laki', 22, 'alamat rhama', '13123123', '2022-12-09 09:18:12', '2022-12-09 09:18:12'),
(13, '232345', 'Om Khusnul', 'Laki-Laki', 50, 'asda KGP', '2312313245', '2022-12-09 09:18:40', '2022-12-09 09:18:40'),
(14, '12312312344', 'sssss', 'Laki-Laki', 25, 'asdasdasd', '31451', '2022-12-09 09:19:20', '2022-12-09 09:19:20'),
(15, '2222334455', 'Aeldeye Doto', 'Laki-Laki', 33, 'alamat rhama', '21323123123', '2023-01-14 06:02:01', '2023-01-14 06:02:01');

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
-- Table structure for table `perawats`
--

CREATE TABLE `perawats` (
  `id` int(50) NOT NULL,
  `nama_perawat` varchar(100) NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perawats`
--

INSERT INTO `perawats` (`id`, `nama_perawat`, `spesialis`, `alamat`, `no_telp`, `created_at`, `updated_at`) VALUES
(2, 'Perawat A', 'Gigi', 'Alamat Perawat A', '08711111', '2022-12-05 11:43:50', '2022-12-05 11:44:05'),
(3, 'Perawat B', 'Umum', 'Alamat Perawat B', '0872222', '2022-12-05 11:47:44', '2022-12-05 11:47:44'),
(4, 'Perawat C', 'Ibu dan Anak', 'Alamat Perawat C', '0873333', '2022-12-05 11:48:06', '2022-12-05 11:48:06');

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
(2, 'Poliklinik Kesehatan Ibu dan Anak', 'R.4 Lt.2', '2022-11-09 13:06:42', '2022-11-15 06:35:21'),
(4, 'Poliklinik Gigi', 'R.2 Lt.1', '2022-11-15 06:35:11', '2022-11-15 06:35:11');

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
  `id_dokter` int(50) DEFAULT NULL,
  `id_perawat` int(50) DEFAULT NULL,
  `diagnosa` text NOT NULL,
  `id_obat` int(50) NOT NULL,
  `dosis` int(11) DEFAULT NULL,
  `pembayaran` enum('BPJS','Umum') DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekammedis`
--

INSERT INTO `rekammedis` (`id`, `tgl_periksa`, `id_poli`, `id_pasien`, `keluhan`, `id_dokter`, `id_perawat`, `diagnosa`, `id_obat`, `dosis`, `pembayaran`, `created_at`, `updated_at`) VALUES
(11, '2022-11-10', 1, 3, 'Badan Panas', 23, 2, 'Demam', 8, NULL, 'BPJS', '2022-11-15 06:55:22', '2022-11-15 06:55:22'),
(12, '2022-11-11', 2, 4, 'Pilek', 25, 3, 'Ada Bakteri di Saluran Hidung', 8, NULL, 'BPJS', '2022-11-15 06:56:21', '2022-11-15 06:56:21'),
(13, '2022-11-12', 4, 7, 'Sakit Gigi', 24, 4, 'Gigi Berlubang', 11, 11, 'BPJS', '2022-11-15 06:57:04', '2022-11-15 06:57:04'),
(14, '2022-11-13', 1, 6, 'Kepala Pusing Berat', 23, 2, 'Gejala Vertigo', 6, NULL, 'BPJS', '2022-11-15 06:58:22', '2022-11-15 06:58:22'),
(15, '2022-11-15', 4, 5, 'Gusi Sakit', 24, 3, 'Ada pembengkakan pada Gusi', 8, NULL, 'BPJS', '2022-11-15 07:00:36', '2022-11-15 07:00:36'),
(16, '2022-11-15', 1, 3, 'Sakit Kepala', 23, 4, 'Gejala Vertigo', 4, NULL, 'BPJS', '2022-11-15 07:06:57', '2022-11-15 07:07:14'),
(17, '2022-12-01', 1, 4, 'asdasd', NULL, 3, 'qweqwe', 6, NULL, 'BPJS', '2022-12-05 12:09:00', '2022-12-05 12:09:00'),
(18, '2022-12-05', 2, 7, 'Cek Kandungan', 25, NULL, 'Hanya Gerakan Biasa', 10, NULL, 'BPJS', '2022-12-05 12:30:23', '2022-12-05 12:30:23'),
(19, '2022-12-06', 4, 5, 'Sakit Gigi dan Gusi', 24, 2, 'Ada Pembengkakan pada Gusi dan Gigi Berlubang', 5, NULL, 'BPJS', '2022-12-05 12:31:55', '2022-12-05 12:31:55'),
(20, '2022-12-06', 1, 3, 'Demam', 23, NULL, 'Karena Terkena Hujan', 5, NULL, 'BPJS', '2022-12-06 06:30:40', '2022-12-06 06:30:40');

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
-- Indexes for table `perawats`
--
ALTER TABLE `perawats`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pasiens`
--
ALTER TABLE `pasiens`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `perawats`
--
ALTER TABLE `perawats`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `polikliniks`
--
ALTER TABLE `polikliniks`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rekammedis`
--
ALTER TABLE `rekammedis`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
