-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2026 at 04:48 PM
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
-- Database: `libmate`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_fasilitas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama_fasilitas`, `created_at`, `updated_at`) VALUES
(2, 'Kipas Angin', '2026-05-21 12:34:01', '2026-05-21 12:34:01'),
(3, 'AC', '2026-05-21 12:36:13', '2026-05-21 12:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_ruangan`
--

CREATE TABLE `fasilitas_ruangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ruangan_id` bigint(20) UNSIGNED NOT NULL,
  `fasilitas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitas_ruangan`
--

INSERT INTO `fasilitas_ruangan` (`id`, `ruangan_id`, `fasilitas_id`, `created_at`, `updated_at`) VALUES
(1, 13, 2, '2026-05-21 12:35:37', '2026-05-21 12:35:37'),
(2, 14, 2, '2026-05-21 12:35:56', '2026-05-21 12:35:56'),
(4, 15, 3, '2026-05-21 12:36:26', '2026-05-21 12:36:26'),
(6, 2, 3, '2026-05-21 12:44:32', '2026-05-21 12:44:32'),
(7, 2, 2, '2026-05-21 12:44:32', '2026-05-21 12:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `kontaks`
--

CREATE TABLE `kontaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontaks`
--

INSERT INTO `kontaks` (`id`, `nama`, `email`, `subjek`, `pesan`, `created_at`, `updated_at`) VALUES
(5, 'Budi Santoso', '242410101088@mail.unej.ac.id', 'AC Ruang Diskusi B Mati', 'Permisi admin, saya sedang menggunakan Ruang Diskusi B di Lantai 1. AC-nya sepertinya bermasalah karena tidak dingin sama sekali padahal sudah diset 18 derajat. Mohon bantuannya.', '2026-05-27 01:15:00', '2026-05-27 01:15:00'),
(6, 'Rina Melati', '232410102011@mail.unej.ac.id', 'Tanya Perpanjangan Waktu', 'Halo, saya mau tanya apakah batas maksimal peminjaman 3 jam bisa diperpanjang jika setelah jadwal saya selesai ternyata tidak ada mahasiswa lain yang antre meminjam ruangan tersebut?', '2026-05-27 02:30:00', '2026-05-27 02:30:00'),
(7, 'Ahmad Fauzi', '222410101021@mail.unej.ac.id', 'Proyektor Ruang Meeting Buram', 'Selamat siang, layar proyektor di Ruang Meeting kapasitas 83 orang agak buram dan warnanya menguning. Apakah dari pihak perpus ada kabel HDMI cadangan atau bisa dibantu setting?', '2026-05-27 04:45:00', '2026-05-27 04:45:00'),
(8, 'Nadia Salsabila', '232410101044@mail.unej.ac.id', 'Saran Penambahan Stopkontak', 'Halo min, Ruang Tenang di lantai 3 sangat nyaman untuk nugas, tapi sayangnya jumlah stopkontaknya kurang banyak jika ruangannya dipakai penuh. Mungkin ke depannya bisa ditambah rol kabel. Terima kasih.', '2026-05-27 06:20:00', '2026-05-27 06:20:00'),
(9, 'Reza Aditya', '242410101099@mail.unej.ac.id', 'Kesalahan Booking Tanggal', 'Maaf admin, saya barusan salah klik tanggal saat booking ruang diskusi. Niatnya untuk besok, tapi malah terpesan untuk hari ini dan statusnya sudah disetujui. Apakah bisa dibatalkan dari sistem?', '2026-05-27 07:10:00', '2026-05-27 07:10:00');

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
(4, '2026_05_05_051502_create_ruangans_table', 2),
(5, '2026_05_05_053058_create_fasilitas_table', 3),
(6, '2026_05_05_053136_create_fasilitas_ruangan__table', 3),
(7, '2026_05_08_165615_add_user_id_to_mahasiswa_table', 4);

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
-- Table structure for table `peminjamans`
--

CREATE TABLE `peminjamans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ruangan_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `status` enum('Pending','Disetujui','Ditolak','Selesai','Dibatalkan') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peminjamans`
--

INSERT INTO `peminjamans` (`id`, `user_id`, `ruangan_id`, `tanggal_pinjam`, `jam_mulai`, `jam_selesai`, `keperluan`, `status`, `created_at`, `updated_at`) VALUES
(12, 3, 15, '2026-05-23', '08:00:00', '09:00:00', 'Ingin mengerjakan tugas kuliah', 'Pending', '2026-05-23 04:26:48', '2026-05-23 04:26:48'),
(13, 3, 15, '2026-05-23', '09:00:00', '12:00:00', 'Ada diskusi bersama teman untuk tugas', 'Disetujui', '2026-05-23 04:27:03', '2026-05-23 06:08:53'),
(14, 7, 14, '2026-05-27', '08:00:00', '11:00:00', 'dddddddddddddddddddddddddddd', 'Dibatalkan', '2026-05-27 10:56:23', '2026-05-27 10:56:29'),
(15, 3, 15, '2026-05-28', '10:00:00', '13:00:00', 'TESSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS', 'Dibatalkan', '2026-05-28 13:16:50', '2026-05-28 13:17:01'),
(16, 3, 15, '2026-05-28', '09:00:00', '12:00:00', 'ddddddddddddddddddddddd', 'Ditolak', '2026-05-28 13:19:36', '2026-05-28 13:20:45'),
(17, 3, 15, '2026-05-28', '12:00:00', '14:00:00', 'ddddddddddddddddddddddddddddddd', 'Pending', '2026-05-28 13:20:21', '2026-05-28 13:20:21');

-- --------------------------------------------------------

--
-- Table structure for table `ruangans`
--

CREATE TABLE `ruangans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_ruang` varchar(255) NOT NULL,
  `lantai` varchar(255) NOT NULL,
  `kapasitas` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ruangans`
--

INSERT INTO `ruangans` (`id`, `nama_ruang`, `lantai`, `kapasitas`, `kategori`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 'Ruang Diskusi C-1', '1', '6', 'Ruang Diskusi', 'ruangans/1779869228_7d5ac2bb6374ccc26de2737ed49a7679.jpg', '2026-04-26 07:35:20', '2026-05-27 08:09:34'),
(13, 'Ruang Tenang B-2', '1', '4', 'Ruang Tenang', 'ruangans/1779869258_36443d732467bd7f38962e676226740a.webp', '2026-05-21 12:35:37', '2026-05-27 08:08:22'),
(14, 'Ruang Tenang B-1', '1', '5', 'Ruang Tenang', 'ruangans/1779869294_8e123a2394362ade10c6ccf5bf0dbd43.jpg', '2026-05-21 12:35:56', '2026-05-27 08:08:14'),
(15, 'Ruang Meeting A-1', '2', '10', 'Ruang Meeting', 'ruangans/1779869362_3a10663c42f6a4b9ccb15b7ce671d191.jpg', '2026-05-21 12:36:26', '2026-05-27 08:09:22');

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
('FOdC2GGj8tW9ig9iVQChF2Jwz4C2oYTGONcNjTwq', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJCZjVYYnVPZGU0WkUxQ1lPUHdXVkE2S1RPRERjcWdYUnZZSnhRWVp1IiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJ2aXNpdF9jb3VudCI6MTgsImZpcnN0X3Zpc2l0IjoiMjggTWF5IDIwMjYsIDIxOjEzOjEzIiwibGFzdF92aXNpdCI6IjI4IE1heSAyMDI2LCAyMToxNjozOCIsIl9wcmV2aW91cyI6eyJ1cmwiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvcnVhbmdhbiIsInJvdXRlIjoicnVhbmdhbi5pbmRleCJ9LCJ1cmwiOnsiaW50ZW5kZWQiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvZGFzaGJvYXJkIn0sImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjozfQ==', 1779977936),
('ssccMcWXySkTDCMStYA1z6BZQifXElive5AyfziW', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJBelUxMWhhS1hTR3ZlQzJZblBNSlZBR1hMQzlCVGJ6UlVYR0dkVmxQIiwibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiOjIsIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfSwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9tYW5hamVtZW4tcnVhbmdcL2NyZWF0ZSIsInJvdXRlIjoibWFuYWplbWVuLXJ1YW5nLmNyZWF0ZSJ9fQ==', 1779977799);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `nim` varchar(255) DEFAULT NULL,
  `fakultas` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('admin','mahasiswa') NOT NULL DEFAULT 'mahasiswa',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `status` enum('Aktif','Lulus','Suspended') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nim`, `fakultas`, `email`, `role`, `email_verified_at`, `password`, `foto`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fabyan', NULL, NULL, 'fabyanpermana25@gmail.com', 'admin', NULL, '$2y$12$yD/4R1yvKSUtRfvzdsv60OqvMi1heK5KPAfhDrMmptvBb7UwhbpLu', NULL, 'Aktif', NULL, '2026-05-08 09:38:19', '2026-05-08 09:38:19'),
(2, 'Admin Fabyan', NULL, NULL, 'yastikafabyan2005@gmail.com', 'admin', NULL, '$2y$12$7.HQXfAIPwXyXy.KY9NsNeix.EryubVbLRHoFLfkmamImNvbQzX.W', 'profil/5NkTCWXVWxPzfZwCohnl.png', 'Aktif', 'QVCK74D0gwPVFxqccKnNOg90ucQaEufLsuwdnxzFYkiYNa7MIgUaZ53AS4gv', '2026-05-17 02:43:37', '2026-05-27 07:33:55'),
(3, 'Fabyan', '242410101041', 'Ilmu Komputer', '242410101041@mail.unej.ac.id', 'mahasiswa', NULL, '$2y$12$jLE5MoZirHNQgZA3ls.HieSC7MXH9C62QZnpSoIAH3Y3rcNw51mp.', 'profil/Dwhja1sw9ClwqF5QgJMg.png', 'Suspended', '9RZOlBAxbVijCkcswxTrYF86jsvElE4SmIsPJvzoJ8BcEcP5hV8LmOYDDfwZ', '2026-05-21 13:56:23', '2026-05-27 08:35:39'),
(6, 'Laith Owen', NULL, NULL, '232410101045@mail.unej.ac.id', 'admin', NULL, '$2y$12$ytAXSweM22qX7mbYXvz7rOWYG6YBNm/gwaAMytvhNgxxWOBzwaV5y', NULL, 'Aktif', NULL, '2026-05-27 10:52:09', '2026-05-27 10:52:09'),
(7, 'Leandra Browning', '242410101009', 'Ilmu Komputer', '232410102045@mail.unej.ac.id', 'mahasiswa', NULL, '$2y$12$yJU5K3AE4fFy4RM2ue2cWeqrt6CBob.ENLGrQk3q7bJBGHU3PVfhW', 'profil/JcaFHqMaGXBMHsGIjtt5.png', 'Aktif', NULL, '2026-05-27 10:53:31', '2026-05-27 12:07:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitas_ruangan`
--
ALTER TABLE `fasilitas_ruangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fasilitas_ruangan_ruangan_id_foreign` (`ruangan_id`),
  ADD KEY `fasilitas_ruangan_fasilitas_id_foreign` (`fasilitas_id`);

--
-- Indexes for table `kontaks`
--
ALTER TABLE `kontaks`
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
-- Indexes for table `peminjamans`
--
ALTER TABLE `peminjamans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ruangan_id` (`ruangan_id`);

--
-- Indexes for table `ruangans`
--
ALTER TABLE `ruangans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fasilitas_ruangan`
--
ALTER TABLE `fasilitas_ruangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kontaks`
--
ALTER TABLE `kontaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `peminjamans`
--
ALTER TABLE `peminjamans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ruangans`
--
ALTER TABLE `ruangans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fasilitas_ruangan`
--
ALTER TABLE `fasilitas_ruangan`
  ADD CONSTRAINT `fasilitas_ruangan_fasilitas_id_foreign` FOREIGN KEY (`fasilitas_id`) REFERENCES `fasilitas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fasilitas_ruangan_ruangan_id_foreign` FOREIGN KEY (`ruangan_id`) REFERENCES `ruangans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `peminjamans`
--
ALTER TABLE `peminjamans`
  ADD CONSTRAINT `peminjamans_ibfk_1` FOREIGN KEY (`ruangan_id`) REFERENCES `ruangans` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
