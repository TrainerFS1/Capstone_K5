-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
<<<<<<< HEAD
-- Generation Time: Jun 17, 2024 at 03:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12
=======
-- Generation Time: Jun 13, 2024 at 05:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
-- Generation Time: Jun 13, 2024 at 05:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uangku`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `category` varchar(255) NOT NULL,
<<<<<<< HEAD
<<<<<<< HEAD
  `amount` decimal(15,2) NOT NULL,
  `due_date` date NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Belum Lunas',
=======
  `amount` decimal(10,2) NOT NULL,
  `due_date` date NOT NULL,
  `status` varchar(255) NOT NULL,
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
  `amount` decimal(10,2) NOT NULL,
  `due_date` date NOT NULL,
  `status` varchar(255) NOT NULL,
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

<<<<<<< HEAD
<<<<<<< HEAD
--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `user_id`, `date`, `category`, `amount`, `due_date`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 19, '2024-06-16', 'Tagihan utang elon musk', 300000000000.00, '2024-06-17', 'Lunas', NULL, '2024-06-16 14:02:58', '2024-06-16 14:05:49'),
(2, 19, '2024-06-15', 'Kredit Panci', 20000.00, '2024-06-16', 'Lunas', NULL, '2024-06-16 14:06:39', '2024-06-16 14:06:53'),
(3, 2, '2024-06-10', 'Kredit Motor', 5000000.00, '2024-06-17', '0', NULL, '2024-06-17 01:35:38', '2024-06-17 01:35:38');

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
-- --------------------------------------------------------

--
-- Table structure for table `debts`
--

CREATE TABLE `debts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `debt_type` varchar(255) NOT NULL,
  `date` date NOT NULL,
<<<<<<< HEAD
<<<<<<< HEAD
  `amount` decimal(15,2) NOT NULL,
=======
  `amount` decimal(10,2) NOT NULL,
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
  `amount` decimal(10,2) NOT NULL,
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
  `due_date` date NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

<<<<<<< HEAD
<<<<<<< HEAD
--
-- Dumping data for table `debts`
--

INSERT INTO `debts` (`id`, `user_id`, `debt_type`, `date`, `amount`, `due_date`, `description`, `created_at`, `updated_at`) VALUES
(1, 19, 'Hutang ke elon musk', '2024-06-16', 200000000000.00, '2024-06-17', NULL, '2024-06-16 14:01:31', '2024-06-16 14:01:31'),
(2, 2, 'Pinjam Uang  Andhika', '2024-06-15', 20000000.00, '2024-06-17', NULL, '2024-06-17 01:35:06', '2024-06-17 01:36:10');

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `category` varchar(255) NOT NULL,
  `amount` decimal(15,2) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `user_id`, `date`, `category`, `amount`, `description`, `created_at`, `updated_at`) VALUES
<<<<<<< HEAD
<<<<<<< HEAD
(1, 19, '2024-06-16', 'Hutang negara', 200000000000.00, 'Hutang negara ke china', '2024-06-16 14:05:16', '2024-06-16 14:05:16'),
(2, 19, '2024-06-16', 'Tagihan utang elon musk', 300000000000.00, 'Pembayaran untuk tagihan: Tagihan utang elon musk', '2024-06-16 14:05:49', '2024-06-16 14:05:49'),
(3, 19, '2024-06-16', 'Kredit Panci', 20000.00, 'Pembayaran untuk tagihan: Kredit Panci', '2024-06-16 14:06:53', '2024-06-16 14:06:53'),
(4, 2, '2024-06-17', 'Uang Transportasi', 10000.00, NULL, '2024-06-17 01:39:55', '2024-06-17 01:39:55');
=======
(1, 2, '2024-06-02', 'Uang Transportasi', 500000.00, 'Uang untuk transportasi harian', '2024-06-02 07:27:08', '2024-06-02 07:27:08'),
(2, 2, '2024-06-02', 'Jajan', 150000.00, NULL, '2024-06-02 07:29:41', '2024-06-02 07:29:41'),
(3, 2, '2024-05-02', 'Makan', 500000.00, NULL, '2024-06-02 07:30:15', '2024-06-02 07:30:15');
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
(1, 2, '2024-06-02', 'Uang Transportasi', 500000.00, 'Uang untuk transportasi harian', '2024-06-02 07:27:08', '2024-06-02 07:27:08'),
(2, 2, '2024-06-02', 'Jajan', 150000.00, NULL, '2024-06-02 07:29:41', '2024-06-02 07:29:41'),
(3, 2, '2024-05-02', 'Makan', 500000.00, NULL, '2024-06-02 07:30:15', '2024-06-02 07:30:15');
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

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
-- Table structure for table `incomes`
--

CREATE TABLE `incomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `category` varchar(255) NOT NULL,
  `amount` decimal(15,2) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `incomes`
--

INSERT INTO `incomes` (`id`, `user_id`, `date`, `category`, `amount`, `description`, `created_at`, `updated_at`) VALUES
(17, 2, '2024-05-30', 'Gaji', 10000000.00, 'Gaji Pokok', '2024-05-29 17:30:12', '2024-05-29 17:30:12'),
(26, 2, '2024-05-15', 'Bonus', 1000000.00, NULL, '2024-05-29 20:14:47', '2024-05-29 20:14:47'),
(28, 2, '2024-04-01', 'Gaji', 10000000.00, 'Gaji Pokok', '2024-05-29 21:01:15', '2024-05-29 21:01:15'),
(29, 2, '2024-03-01', 'Gaji', 10000000.00, 'Gaji Pokok', '2024-05-29 21:01:57', '2024-05-29 21:01:57'),
(30, 2, '2024-03-02', 'Bonus', 3000000.00, 'Bonus', '2024-05-29 21:02:14', '2024-05-29 21:02:34'),
<<<<<<< HEAD
<<<<<<< HEAD
(42, 2, '2024-06-12', 'Bonus Bulanan', 6000000.00, 'Bonus Bulanan Kantor', '2024-06-11 18:36:26', '2024-06-11 18:36:26'),
(44, 18, '2024-06-01', 'Gaji', 10000000.00, 'Gaji Bulanan', '2024-06-14 00:26:13', '2024-06-14 00:26:13'),
(45, 18, '2024-06-06', 'Bonus', 1000000.00, 'Bonus Lembur', '2024-06-14 00:31:03', '2024-06-14 00:31:03'),
(46, 19, '2024-06-01', 'Gaji', 10000000.00, 'Gaji Bulanan', '2024-06-15 05:29:02', '2024-06-15 05:29:02'),
(47, 19, '2024-06-16', 'Pemasukan Bisnis', 1000000000.00, 'Bisnis ternak lele', '2024-06-16 14:07:28', '2024-06-16 14:07:28');
=======
(42, 2, '2024-06-12', 'Bonus Bulanan', 6000000.00, 'Bonus Bulanan Kantor', '2024-06-11 18:36:26', '2024-06-11 18:36:26');
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
(42, 2, '2024-06-12', 'Bonus Bulanan', 6000000.00, 'Bonus Bulanan Kantor', '2024-06-11 18:36:26', '2024-06-11 18:36:26');
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2024_05_28_113809_create_incomes_table', 1),
(11, '2024_05_28_155107_change_amount_column_precision_in_incomes_table', 2),
<<<<<<< HEAD
<<<<<<< HEAD
(13, '2024_06_02_235612_change_amount_column_precison_in_expenses_table', 4),
(14, '2024_06_03_003818_add_phone_number_and_profile_picture_to_users_table', 5),
(15, '2024_06_15_160504_update_status_to_is_paid_in_bills_table', 6),
(19, '2024_06_15_191247_create_notifications_table', 8),
(21, '2024_06_03_045409_create_debts_table', 9),
(22, '2024_06_05_065041_create_bills_table', 10),
(23, '2024_06_02_075450_create_expenses_table', 11);
=======
(12, '2024_06_02_075450_create_expenses_table', 3),
(13, '2024_06_02_235612_change_amount_column_precison_in_expenses_table', 4),
(14, '2024_06_03_003818_add_phone_number_and_profile_picture_to_users_table', 5);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
(12, '2024_06_02_075450_create_expenses_table', 3),
(13, '2024_06_02_235612_change_amount_column_precison_in_expenses_table', 4),
(14, '2024_06_03_003818_add_phone_number_and_profile_picture_to_users_table', 5);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `profile_picture`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
<<<<<<< HEAD
<<<<<<< HEAD
(2, 'Haikal Rizky', 'haikalrizky638@gmail.com', '088707773700', '1718538429.jpg', '2024-06-16 11:38:14', '$2y$10$h00ocTGgNuQLTQVxkgRLAe3pe15AZIrKJXf.hwDt6RLL0H.Cu/QtO', NULL, NULL, 'kk3uu7Y8Ek5Sg0SM7iIFWvLyM74SoolDHoQAK04xuFWrplAlupzHUQ0MHxtY', '2024-05-29 17:22:16', '2024-06-16 11:47:09'),
(3, 'user', 'user@gmail.com', '088707773700', '1718133568.jpg', NULL, '$2y$10$cuaIabjegVzh3MHeRnksD.uoyv45JBud1h5JuB0VnmiA9TUSARe6q', NULL, NULL, NULL, '2024-06-11 19:19:15', '2024-06-11 19:19:28'),
(18, 'Andhika Pratama Putra', 'andhika2003.ap31@gmail.com', '082294317043', '1718326520.jpg', '2024-06-13 03:28:01', '$2y$10$rBaPEB86/1gTTWa8CJLnjOaDLFpLxPHtd3.9sZ0rZaBi5A.FohPhu', NULL, NULL, NULL, '2024-06-13 03:25:00', '2024-06-14 00:55:20'),
(19, 'dika', 'andika2003.ap31@gmail.com', '082294317043', '1718546030.jpg', '2024-06-13 03:29:17', '$2y$10$FouowbYVq0POmTKaD/25feA8PjuVJK75AIUAYohWtic5jEjCUt1h6', NULL, NULL, 'oPy9YQdaBl7cA75RT598bCJiRKPNljquSOAJvuxU3VvXKglURbnZI5D0WAtu', '2024-06-13 03:28:50', '2024-06-16 14:10:13'),
(22, 'roco', 'vtxyroco24@gmail.com', '081213915585', '1718432281.jpg', '2024-06-15 06:17:23', '$2y$10$gjm6FzdEqOLV4O50dZ8QM.xsehixvCU0yfKZvIdf5pMUawMS1Iki2', NULL, NULL, NULL, '2024-06-15 06:16:28', '2024-06-15 06:18:01'),
(25, 'Agim Buddy', 'huggimb888@gmail.com', NULL, NULL, '2024-06-16 07:42:34', '$2y$10$x3tbW2ZZYQAcMHBmERzK6uIQIkLMXWCseaic/Mly6wSa32LSnDSlS', NULL, NULL, 'c8eIu8MWdx3nYzV13QYufOjMdq7JVfX6SAx2rks5CB0jzvkHb1BvY3LcND2N', '2024-06-16 07:42:01', '2024-06-16 09:26:18');
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
(2, 'Haikal Rizky', 'haikal@gmail.com', '088707773700', '1718160470.jpg', NULL, '$2y$10$H7KVxqsLz7zXINgQn86EfeSqDa/pOFS1j0x/9AUvXTF8hSNYgh4wK', NULL, NULL, NULL, '2024-05-29 17:22:16', '2024-06-12 02:47:50'),
(3, 'user', 'user@gmail.com', '088707773700', '1718133568.jpg', NULL, '$2y$10$cuaIabjegVzh3MHeRnksD.uoyv45JBud1h5JuB0VnmiA9TUSARe6q', NULL, NULL, NULL, '2024-06-11 19:19:15', '2024-06-11 19:19:28'),
(18, 'Andhika Pratama Putra', 'vtxyroco24@gmail.com', NULL, NULL, '2024-06-13 03:28:01', '$2y$10$rBaPEB86/1gTTWa8CJLnjOaDLFpLxPHtd3.9sZ0rZaBi5A.FohPhu', NULL, NULL, NULL, '2024-06-13 03:25:00', '2024-06-13 03:28:01'),
(19, 'dika', 'andika2003.ap31@gmail.com', '082294317043', '1718249484.jpg', '2024-06-13 03:29:17', '$2y$10$T3omec5sjHtAgJThd3f9nOkxP8zibxgn1SWyKH7NjbG2E7u27Ekvq', NULL, NULL, NULL, '2024-06-13 03:28:50', '2024-06-13 03:31:24');
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

--
-- Indexes for dumped tables
--

--
<<<<<<< HEAD
<<<<<<< HEAD
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_user_id_foreign` (`user_id`);

--
-- Indexes for table `debts`
--
ALTER TABLE `debts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `debts_user_id_foreign` (`user_id`);

--
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expenses_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `incomes`
--
ALTER TABLE `incomes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `incomes_user_id_foreign` (`user_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
<<<<<<< HEAD
<<<<<<< HEAD
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `debts`
--
ALTER TABLE `debts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `incomes`
--
ALTER TABLE `incomes`
<<<<<<< HEAD
<<<<<<< HEAD
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
=======
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
<<<<<<< HEAD
<<<<<<< HEAD
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
=======
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
<<<<<<< HEAD
<<<<<<< HEAD
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
=======
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

--
-- Constraints for dumped tables
--

--
<<<<<<< HEAD
<<<<<<< HEAD
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `debts`
--
ALTER TABLE `debts`
  ADD CONSTRAINT `debts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `incomes`
--
ALTER TABLE `incomes`
  ADD CONSTRAINT `incomes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
