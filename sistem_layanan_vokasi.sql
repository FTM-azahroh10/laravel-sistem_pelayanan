-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 07:31 PM
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
-- Database: `sistem_layanan_vokasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_services`
--

CREATE TABLE `academic_services` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `dokumen` varchar(100) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` enum('NOT STARTED','ON PROGRESS','COMPLETED') NOT NULL,
  `keperluan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `code` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic_services`
--

INSERT INTO `academic_services` (`id`, `nim`, `nama`, `jurusan`, `dokumen`, `tanggal`, `email`, `status`, `keperluan`, `created_at`, `updated_at`, `code`) VALUES
(1, '203', 'faza', 'ti', NULL, '2023-12-10', 'faza@student.com', 'NOT STARTED', 'ambil ijazah', '2023-12-09 14:45:51', '2023-12-20 10:58:27', NULL),
(2, '223140707111032', 'kevin', 'tik', 'uploads/QpfNiWLGxktqD0mLn9KantN8JnCIkNYp2lZzj10H.pdf', '2023-12-20', 'Kevin@gmail.com', 'NOT STARTED', 'Re-Enrolling', '2023-12-20 10:35:35', '2023-12-20 10:35:35', 'ENR-lmEO5uQaZKqZ3Pd90f2AM57oGqJL'),
(3, '223140707111032', 'kevin', 'tik', 'uploads/jwpnPjf75oLsZ20i22aV09PPcSpCHCmKTbgYFYye.pdf', '2023-12-20', 'Kevin@gmail.com', 'ON PROGRESS', 'Leave', '2023-12-20 10:43:58', '2023-12-20 17:44:49', 'LEV-KjIdhfw8hnbDs9PMjwa0qE5UaTtb'),
(4, '223140707111032', 'kevin', 'tik', 'uploads/CLQZ3lzOhJhzKafHQTPCDjtBHarzyRp0unSmHuw8.pdf', '2023-12-20', 'Kevin@gmail.com', 'ON PROGRESS', 'Re-Enrolling', '2023-12-20 10:52:45', '2023-12-20 17:57:25', 'ENR-1hLJMeQkC8vmTHFnhzmFgXtWDwle'),
(5, '223140707111032', 'kevin', 'TIK', 'uploads/ncmVbqn8gf0ebDlN1NCeJNcOpPSkldAbCfdmrTDz.pdf', '2023-12-20', 'Kevin@gmail.com', 'COMPLETED', 'Re-Enrolling', '2023-12-20 11:02:09', '2023-12-20 18:04:29', 'ENR-omYNq1SpzzJTIpxoqpzg4SnmzT8D');

-- --------------------------------------------------------

--
-- Table structure for table `admin_academics`
--

CREATE TABLE `admin_academics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_appointments`
--

CREATE TABLE `admin_appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_financial_services`
--

CREATE TABLE `admin_financial_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_general_services`
--

CREATE TABLE `admin_general_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_students`
--

CREATE TABLE `admin_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_student_services`
--

CREATE TABLE `admin_student_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `start_appointment` time NOT NULL,
  `end_appointment` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `code` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `nama`, `email`, `service`, `tanggal`, `start_appointment`, `end_appointment`, `created_at`, `updated_at`, `code`) VALUES
(1, 'ava', 'ava@gmail.com', 'Academic', '2023-12-02', '12:00:00', '15:00:00', '2023-12-10 05:06:27', '2023-12-19 15:17:16', NULL),
(2, 'Kevin', 'Kevin@gmail.com', 'Academic', '2023-12-29', '07:00:00', '08:00:00', '2023-12-20 10:35:02', '2023-12-20 17:45:09', 'ENR-yGPsceuP3R4xHx8NPb4q6dqo0DyW'),
(3, 'Kevin', 'Kevin@gmail.com', 'Re-Enrolling', '2023-12-31', '07:00:00', '07:00:00', '2023-12-20 10:53:11', '2023-12-20 10:53:11', 'ENR-Mhg7JNVx5UFyExLP5cPis8ItLQnG'),
(4, 'Kevin', 'Kevin@gmail.com', 'Re-Enrolling', '2023-12-28', '04:02:00', '04:02:00', '2023-12-20 11:02:21', '2023-12-20 11:02:21', 'ENR-qNRKZurnrOQVNdDxtvVjyLlvjzLw');

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
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `pertanyaan` text NOT NULL,
  `jawaban` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `kategori`, `pertanyaan`, `jawaban`, `created_at`, `updated_at`) VALUES
(2, 'General', 'Kapan kelas 203 kosong?', 'Bisa dilihat jadwalnya pada SIAM', '2023-12-19 14:48:58', '2023-12-19 14:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `file_uploads`
--

CREATE TABLE `file_uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `other_field` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `file_uploads`
--

INSERT INTO `file_uploads` (`id`, `file_path`, `other_field`, `created_at`, `updated_at`) VALUES
(1, 'uploads/QpfNiWLGxktqD0mLn9KantN8JnCIkNYp2lZzj10H.pdf', 'ENR', '2023-12-20 10:35:35', '2023-12-20 10:35:35'),
(2, 'uploads/jwpnPjf75oLsZ20i22aV09PPcSpCHCmKTbgYFYye.pdf', 'LEV', '2023-12-20 10:43:58', '2023-12-20 10:43:58'),
(3, 'uploads/CLQZ3lzOhJhzKafHQTPCDjtBHarzyRp0unSmHuw8.pdf', 'ENR', '2023-12-20 10:52:45', '2023-12-20 10:52:45'),
(4, 'uploads/ncmVbqn8gf0ebDlN1NCeJNcOpPSkldAbCfdmrTDz.pdf', 'ENR', '2023-12-20 11:02:09', '2023-12-20 11:02:09');

-- --------------------------------------------------------

--
-- Table structure for table `financial_services`
--

CREATE TABLE `financial_services` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `dokumen` varchar(100) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `keperluan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `financial_services`
--

INSERT INTO `financial_services` (`id`, `nim`, `nama`, `jurusan`, `tanggal`, `email`, `dokumen`, `status`, `keperluan`, `created_at`, `updated_at`) VALUES
(1, '223140707111032', 'Muhammad Kevin Jati Samudra', 'si', '2023-12-10', 'kevin@gmail.com', NULL, 'ON PROGRESS', 'ukt', '2023-12-10 05:07:10', '2023-12-10 17:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `general_service`
--

CREATE TABLE `general_service` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dokumen` varchar(100) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `keperluan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `general_service`
--

INSERT INTO `general_service` (`id`, `nim`, `nama`, `jurusan`, `email`, `dokumen`, `tanggal`, `status`, `keperluan`, `created_at`, `updated_at`) VALUES
(1, '223140714111012', 'Fatimah Azahroh', 'si', 'ava@gmail.com', NULL, '2023-09-12', 'COMPLETED', 'peminjaman', '2023-12-10 05:07:55', '2023-12-10 17:02:31');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_09_012954_create_admin_academics_table', 2),
(6, '2023_12_09_123246_create_admin_student_services_table', 2),
(7, '2023_12_09_134328_create_admin_financial_services_table', 2),
(8, '2023_12_09_134357_create_admin_general_services_table', 2),
(9, '2023_12_09_143415_create_admin_appointments_table', 2),
(10, '2023_12_09_160021_create_admin_students_table', 2),
(11, '2023_12_10_111636_create_sops_table', 2),
(12, '2023_12_10_112543_create_faqs_table', 2),
(13, '2023_12_18_060154_create_file_uploads_table', 2),
(14, '2023_12_19_131813_add_code_to_admin_appointment', 2),
(15, '2023_12_19_132552_add_code_to_appointments', 2),
(16, '2023_12_19_151344_add_code_to_academic_services', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sop`
--

CREATE TABLE `sop` (
  `id` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tahun` year(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sop`
--

INSERT INTO `sop` (`id`, `kategori`, `deskripsi`, `tahun`, `created_at`, `updated_at`) VALUES
(2, 'General', 'Jangan lupa solat', '2022', '2023-12-19 14:48:43', '2023-12-20 10:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `sops`
--

CREATE TABLE `sops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `nim`, `nama`, `jurusan`, `email`, `tanggal`, `created_at`, `updated_at`) VALUES
(2, '223140707111032', 'kevin', 'TIK', 'Kevin@gmail.com', '2023-10-06', '2023-12-09 09:29:08', '2023-12-20 10:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `student_service`
--

CREATE TABLE `student_service` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `dokumen` varchar(100) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` enum('NOT STARTED','ON PROGRESS','COMPLETED') NOT NULL,
  `keperluan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_service`
--

INSERT INTO `student_service` (`id`, `nim`, `nama`, `jurusan`, `dokumen`, `tanggal`, `email`, `status`, `keperluan`, `created_at`, `updated_at`) VALUES
(1, '223140714111012', 'Fatimah Azahroh', 'si', NULL, '2023-03-10', 'ava@gmail.com', 'COMPLETED', 'magang', '2023-12-10 05:08:37', '2023-12-10 17:00:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `jabatan`, `password`, `role`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'superadmin@gmail.com', 'superadmin', '$2y$10$NZjxtW3j59tKrGb6tcPi2.MhR78bMm6HBNu2O2VL19gZjOqD7oVJ.', 'superadmin', NULL, NULL, '2023-12-05 19:08:38', '2023-12-05 19:08:38'),
(2, 'Sukiman', 'sukiman@gmail.com', 'Front Office', '$2y$10$UDdXWnSOQbbmMWXWGimSXe5lWPYoA0ddLiPYWf5vDyHFxYqXeUKpu', 'admin', NULL, NULL, '2023-12-05 19:08:38', '2023-12-05 19:08:38'),
(3, 'Aprilia Lailatul', 'aprilia@gmail.com', 'Academic Service', '$2y$10$UGJKRQKHlqOf/5yhXI3gz.6hOC7cBk8JX0QJSQ.GKTNG1wRgtvnLa', 'admin', NULL, NULL, '2023-12-05 19:08:38', '2023-12-05 19:08:38'),
(4, 'Amalia Adhitya', 'amalia@gmail.com', 'Student Service', '$2y$10$vDBgpnkMER969r4undgzQexIZaPLeefGlcPTvltmgu6sZn6grsshi', 'admin', NULL, NULL, '2023-12-05 19:08:39', '2023-12-05 19:08:39'),
(5, 'Raddhin Karima', 'raddhin@gmail.com', 'Financial Service', '$2y$10$QMcnfNdTzjUq0wQYiWoHTOqZByJ68rNIVlNU/lpi4gOjD3HTeWsJy', 'admin', NULL, NULL, '2023-12-05 19:08:39', '2023-12-05 19:08:39'),
(6, 'Sultoni Arif', 'sultoni@gmail.com', 'Student Service', '$2y$10$hzD7wiHbo9Cg4j.zKFUOVev9eKdKCN6MJt.IpGH0Ea09RX4YIGj/G', 'admin', NULL, NULL, '2023-12-05 19:08:39', '2023-12-05 19:08:39'),
(7, 'Kevin', 'Kevin@gmail.com', NULL, '$2y$10$O64U2Eb.d6EiLWupJvo8aeVdKv1DYVdOwLcwRTvhAaoHeyk50qxXK', 'mahasiswa', NULL, NULL, '2023-12-05 19:08:39', '2023-12-05 19:08:39'),
(8, 'Ava', 'Ava@gmail.com', NULL, '$2y$10$/3eV/5isMy8i0jNe5z2QfulRrowcA5oPhNFH2/W35Xfjv6X05GCtK', 'mahasiswa', NULL, NULL, '2023-12-05 19:08:39', '2023-12-05 19:08:39'),
(9, 'Rizma', 'Rizma@gmail.com', NULL, '$2y$10$zNGI6WlK.eqZV6ZDlsiQnOkrSl0ZRLPDGbFMcSrxHO59d/WmNzUL6', 'mahasiswa', NULL, NULL, '2023-12-05 19:08:39', '2023-12-05 19:08:39'),
(10, 'Aurel', 'Aurel@gmail.com', NULL, '$2y$10$BpAqVvfQlPwrVpTmTuzUoOlcMe5Zr6nnsev8qfeKCYdmHrR64Oveq', 'mahasiswa', NULL, NULL, '2023-12-05 19:08:39', '2023-12-05 19:08:39'),
(11, 'salsa', 'Salsa@gmail.com', NULL, '$2y$10$DFfDvN16rDjApuT.rlNXB.i3oayOMLvEgAuTpP3LBUYaYIJ4slGYm', 'mahasiswa', NULL, NULL, '2023-12-05 19:08:39', '2023-12-05 19:08:39'),
(12, 'Ammar', 'Ammar@gmail.com', NULL, '$2y$10$AuY/p3/hFm50E68UoGbjteTndcW7MD.Oy45IFitwX3s.81aKH6dhK', 'mahasiswa', NULL, NULL, '2023-12-05 19:08:39', '2023-12-05 19:08:39'),
(13, 'Tiara', 'Tiara@gmail.com', NULL, '$2y$10$iiJyI5uJBJ.o6GUGIw6uFuzglJNNlcAF4uplLZsKpmfN9Qmhunj3.', 'mahasiswa', NULL, NULL, '2023-12-05 19:08:39', '2023-12-05 19:08:39'),
(14, 'Kesya', 'Kesya@gmail.com', NULL, '$2y$10$sQBBTDm4.hsRZJel5Sa2cOw5hYxBNzRWc8PlWukBPbbT2r6hkSOTG', 'mahasiswa', NULL, NULL, '2023-12-05 19:08:39', '2023-12-05 19:08:39'),
(15, 'Faza', 'Faza@gmail.com', NULL, '$2y$10$GgxVf7uX6qQuBhI9Fpof3u3vIJY98mDdwRyvtFwf34Dh/9Uf8SI3y', 'mahasiswa', NULL, NULL, '2023-12-05 19:08:40', '2023-12-05 19:08:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_services`
--
ALTER TABLE `academic_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_academics`
--
ALTER TABLE `admin_academics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_appointments`
--
ALTER TABLE `admin_appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_financial_services`
--
ALTER TABLE `admin_financial_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_general_services`
--
ALTER TABLE `admin_general_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_students`
--
ALTER TABLE `admin_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_student_services`
--
ALTER TABLE `admin_student_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_uploads`
--
ALTER TABLE `file_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financial_services`
--
ALTER TABLE `financial_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_service`
--
ALTER TABLE `general_service`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sop`
--
ALTER TABLE `sop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sops`
--
ALTER TABLE `sops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_service`
--
ALTER TABLE `student_service`
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
-- AUTO_INCREMENT for table `academic_services`
--
ALTER TABLE `academic_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_academics`
--
ALTER TABLE `admin_academics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_appointments`
--
ALTER TABLE `admin_appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_financial_services`
--
ALTER TABLE `admin_financial_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_general_services`
--
ALTER TABLE `admin_general_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_students`
--
ALTER TABLE `admin_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_student_services`
--
ALTER TABLE `admin_student_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file_uploads`
--
ALTER TABLE `file_uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `financial_services`
--
ALTER TABLE `financial_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general_service`
--
ALTER TABLE `general_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sop`
--
ALTER TABLE `sop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sops`
--
ALTER TABLE `sops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_service`
--
ALTER TABLE `student_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
