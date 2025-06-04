-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 04, 2025 at 12:50 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukksmt4_naya`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint UNSIGNED NOT NULL,
  `no_pegawai` int NOT NULL,
  `hire_date` date NOT NULL,
  `status` enum('active','resign') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `no_pegawai`, `hire_date`, `status`, `created_at`, `updated_at`) VALUES
(2, 13123123, '2025-05-01', 'active', '2025-05-29 07:54:18', '2025-05-29 07:54:18'),
(4, 13123123, '2025-06-11', 'active', '2025-06-03 17:43:36', '2025-06-03 17:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `employee_has_rooms`
--

CREATE TABLE `employee_has_rooms` (
  `id` bigint UNSIGNED NOT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `ruangan_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_has_rooms`
--

INSERT INTO `employee_has_rooms` (`id`, `employee_id`, `ruangan_id`, `created_at`, `updated_at`) VALUES
(3, 2, 1, '2025-05-30 01:54:42', '2025-05-30 01:54:42'),
(4, 4, 2, '2025-06-03 17:44:25', '2025-06-03 17:44:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_05_15_052221_add_role_to_users_table', 1),
(6, '2025_05_15_060558_change_role_to_enum_in_users_table', 2),
(7, '2025_05_29_020759_create_user_references_table', 3),
(8, '2025_05_29_020823_create_employees_table', 3),
(9, '2025_05_29_020832_create_people_table', 3),
(10, '2025_05_29_020839_create_students_table', 3),
(11, '2025_05_29_050452_change_people_reference_to_reference_type', 4),
(12, '2025_05_29_063717_adding__foreign__key', 5),
(13, '2025_05_29_142730_change_name_to_username', 6),
(14, '2025_05_30_032640_create_ruangans_table', 7),
(15, '2025_05_30_032727_create_employee_has_rooms_table', 7),
(16, '2025_05_30_080637_create_products_table', 8),
(17, '2025_05_30_092639_change_ruangan_to_ruanganid', 9),
(18, '2025_05_31_025350_create_saldos_table', 10),
(19, '2025_05_31_032837_saldo_table_recreate', 11),
(20, '2025_05_31_035756_create_transactions_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` enum('laki-laki','perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `pob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_id` int UNSIGNED NOT NULL,
  `reference_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `sex`, `dob`, `pob`, `reference_id`, `reference_type`, `created_at`, `updated_at`) VALUES
(5, 'tarno', 'laki-laki', '2025-05-15', 'bancol', 2, 'App\\Models\\Employee', '2025-05-29 07:54:18', '2025-05-29 07:54:18'),
(7, 'Azrael', 'laki-laki', '2025-05-27', 'bancol', 15, 'App\\Models\\Student', '2025-05-30 20:30:53', '2025-05-30 20:30:53'),
(8, 'tarno', 'perempuan', '2025-05-20', 'bancol', 16, 'App\\Models\\Student', '2025-05-30 20:39:49', '2025-05-30 20:39:49'),
(10, 'bue', 'perempuan', '2000-12-31', 'bancol', 4, 'App\\Models\\Employee', '2025-06-03 17:43:36', '2025-06-03 17:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int UNSIGNED NOT NULL,
  `ruangan_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `ruangan_id`, `created_at`, `updated_at`) VALUES
(1, 'buah apel', 5000, 1, '2025-05-30 02:49:06', '2025-05-30 02:49:06'),
(2, 'bensin', 12000, 1, '2025-05-30 23:12:20', '2025-05-30 23:12:20'),
(3, 'ayam', 12000, 2, '2025-06-03 17:44:51', '2025-06-03 17:44:51');

-- --------------------------------------------------------

--
-- Table structure for table `ruangans`
--

CREATE TABLE `ruangans` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ruangans`
--

INSERT INTO `ruangans` (`id`, `name`, `no`, `created_at`, `updated_at`) VALUES
(1, 'si sehat', 5, '2025-05-29 20:55:45', '2025-05-29 20:55:45'),
(2, 'enak-enak', 1, '2025-06-03 17:44:17', '2025-06-03 17:44:17');

-- --------------------------------------------------------

--
-- Table structure for table `saldos`
--

CREATE TABLE `saldos` (
  `id` bigint UNSIGNED NOT NULL,
  `saldo` bigint UNSIGNED NOT NULL,
  `reference_id` int UNSIGNED NOT NULL,
  `reference_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `saldos`
--

INSERT INTO `saldos` (`id`, `saldo`, `reference_id`, `reference_type`, `created_at`, `updated_at`) VALUES
(1, 20000, 15, 'App\\Models\\Student', '2025-05-30 20:30:53', '2025-05-31 00:26:43'),
(2, 9964000, 16, 'App\\Models\\Student', '2025-05-30 20:39:49', '2025-06-03 17:46:20'),
(3, 12000, 4, 'App\\Models\\Employee', '2025-06-03 17:43:36', '2025-06-03 17:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint UNSIGNED NOT NULL,
  `nisn` int NOT NULL,
  `nis` int NOT NULL,
  `status` enum('active','alumni') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `nisn`, `nis`, `status`, `created_at`, `updated_at`) VALUES
(15, 9876543, 1234567, 'active', '2025-05-30 20:30:53', '2025-05-30 20:30:53'),
(16, 9876543, 1234567, 'active', '2025-05-30 20:39:49', '2025-05-30 20:39:49');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `student_id` bigint UNSIGNED NOT NULL,
  `debt` int NOT NULL,
  `paid` int NOT NULL,
  `status` tinyint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `product_id`, `student_id`, `debt`, `paid`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 15, 0, 5000, 0, '2025-05-31 00:08:50', '2025-05-31 00:08:50'),
(2, 1, 15, 0, 5000, 0, '2025-05-31 00:15:03', '2025-05-31 00:15:03'),
(3, 1, 15, 0, 5000, 0, '2025-05-31 00:15:06', '2025-05-31 00:15:06'),
(4, 1, 15, 0, 5000, 0, '2025-05-31 00:15:08', '2025-05-31 00:15:08'),
(5, 2, 15, 0, 12000, 0, '2025-05-31 00:15:10', '2025-05-31 00:15:10'),
(6, 2, 15, 0, 12000, 0, '2025-05-31 00:15:12', '2025-05-31 00:15:12'),
(7, 1, 15, 0, 5000, 3, '2025-05-31 00:15:15', '2025-06-03 08:43:34'),
(8, 1, 15, 0, 5000, 2, '2025-05-31 00:26:43', '2025-06-03 08:43:42'),
(9, 2, 16, 0, 12000, 2, '2025-06-01 20:37:53', '2025-06-03 08:40:17'),
(10, 2, 16, 0, 12000, 2, '2025-06-01 20:37:54', '2025-06-01 20:37:54'),
(11, 2, 16, 0, 12000, 2, '2025-06-03 08:21:15', '2025-06-03 08:40:20'),
(12, 1, 16, 0, 5000, 3, '2025-06-03 08:46:17', '2025-06-03 08:46:30'),
(13, 3, 16, 0, 12000, 2, '2025-06-03 17:45:59', '2025-06-03 17:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'admin baru', 'admin@admin.com', NULL, '$2y$10$mozYPi12ngJHcZUttfEyQ.5qMzV..WSFhDm3IulVXZlt1k5CXLrdC', 'iL0vvDaKUKomm37uq1QskxoASqlwcLDLzuZaRhYS6nGcahLpLU2Yt66ce73s', '2025-05-15 18:11:01', '2025-05-15 18:11:01', 'admin'),
(4, 'Naylings', 'cabang1@apartemenantapani.com', NULL, '$2y$10$VaMyYp0GU73hEjbGtQ/cjuLbL8LUbJ6VK3s6u/WU0MnyGIcKUeplK', 'qNJZh4hTpSCfsBSLNNUboOoiIZCQekyW7qDSyu2J1N6TchOhHgW2kC1MAtX2', '2025-05-29 07:54:18', '2025-05-29 07:54:18', 'user'),
(14, 'azrael', 'student2@gmail.com', NULL, '$2y$10$3cFj22ShuGDinzH93T.80.FnoDoXgxm5jLXjCznONfxqxsDJfh4/y', 'nkYN2gZtt2bxlikyj374NkUUN9t7XHfWyiungBxzLlPB7YWfDOYZHacsOqmF', '2025-05-30 20:30:53', '2025-05-30 20:30:53', 'user'),
(15, 'tarno', 'student@gmail.com', NULL, '$2y$10$ZyyALT3Kje2QFb6oyRoai.R01xS7RKoAGylW4atoJqMI70.wE7ycG', 'dc9KGWzCEc0mkQ08xMhSdnAGZZfwJ3lEBLfevAeG6PMUMwaoEnnBXPFQ7Z49', '2025-05-30 20:39:49', '2025-05-30 20:39:49', 'user'),
(17, 'bue', 'employee@gmail.com', NULL, '$2y$10$QEA1ZIKfWU3SzcSYiU6GVekMXsmqNq21oEzn4EDZ4mDhrONUZJ/tu', 'r6mTcYFFdDLoho82KFJhRTv9tS4YxG9l1DJBj6Zk3KeWLV1kP7WNruCpqKAZ', '2025-06-03 17:43:36', '2025-06-03 17:43:36', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_references`
--

CREATE TABLE `user_references` (
  `id` bigint UNSIGNED NOT NULL,
  `status` enum('active','non_active') COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `reference_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_references`
--

INSERT INTO `user_references` (`id`, `status`, `reference_id`, `user_id`, `reference_type`, `created_at`, `updated_at`) VALUES
(3, 'active', 2, 4, 'App\\Models\\Employee', '2025-05-29 07:54:18', '2025-05-29 07:54:18'),
(5, 'active', 15, 14, 'App\\Models\\Student', '2025-05-30 20:30:53', '2025-05-30 20:30:53'),
(6, 'active', 16, 15, 'App\\Models\\Student', '2025-05-30 20:39:49', '2025-05-30 20:39:49'),
(8, 'active', 4, 17, 'App\\Models\\Employee', '2025-06-03 17:43:36', '2025-06-03 17:43:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_has_rooms`
--
ALTER TABLE `employee_has_rooms`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangans`
--
ALTER TABLE `ruangans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saldos`
--
ALTER TABLE `saldos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_references`
--
ALTER TABLE `user_references`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee_has_rooms`
--
ALTER TABLE `employee_has_rooms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ruangans`
--
ALTER TABLE `ruangans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `saldos`
--
ALTER TABLE `saldos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_references`
--
ALTER TABLE `user_references`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
