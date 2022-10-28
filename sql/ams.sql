-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 12:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendences`
--

CREATE TABLE `attendences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester` int(11) NOT NULL,
  `courseunit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attendence` enum('present','absence') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendences`
--

INSERT INTO `attendences` (`id`, `semester`, `courseunit`, `regno`, `attendence`, `created_at`, `updated_at`) VALUES
(1, 1, 'CSC303S3', '2018/CSC/001', 'present', NULL, NULL),
(2, 1, 'CSC303S3', '2018/CSC/002', 'absence', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Date` date NOT NULL,
  `complain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('reviewed','not_reviewed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`id`, `Date`, `complain`, `status`, `created_at`, `updated_at`) VALUES
(1, '2022-10-29', 'didn\'t update the attendence', 'reviewed', '2022-10-28 01:23:07', '2022-10-28 01:27:37'),
(2, '2022-10-31', 'wrong details', 'reviewed', '2022-10-28 01:23:21', '2022-10-28 01:27:46'),
(3, '2022-11-05', 'assignment not uploaded', 'reviewed', '2022-10-28 01:23:35', '2022-10-28 01:27:42'),
(4, '2022-11-05', 'wrong entry', 'not_reviewed', '2022-10-28 01:23:49', '2022-10-28 01:23:49'),
(5, '2022-10-29', 'didn\'t update the attendence', 'not_reviewed', '2022-10-28 03:16:43', '2022-10-28 03:16:43');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester` int(11) NOT NULL,
  `courseunit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coursename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `semester`, `courseunit`, `coursename`, `created_at`, `updated_at`) VALUES
(1, 1, 'CSC301S3', 'Rapid Application Development', NULL, NULL),
(2, 1, 'CSC303S3', 'Data Communication and Computer Networks ', NULL, NULL),
(3, 1, 'CSC305S3', 'Graphics and visual Computing ', NULL, NULL),
(4, 2, 'CSC308S3', 'Artificial Intelligence', NULL, NULL),
(5, 2, 'CSC309S3', 'High Performance Computing', NULL, NULL),
(6, 2, 'CSC311S3', 'Machine Learning', NULL, NULL);

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
(126, '2014_10_12_000000_create_users_table', 1),
(127, '2014_10_12_100000_create_password_resets_table', 1),
(128, '2019_08_19_000000_create_failed_jobs_table', 1),
(129, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(130, '2022_08_21_082046_create_students_table', 1),
(131, '2022_10_25_105835_create_complains_table', 1),
(132, '2022_10_26_084711_create_courses_table', 1),
(133, '2022_10_26_102558_create_notices_table', 1),
(134, '2022_10_27_054430_create_attendences_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Date` date NOT NULL,
  `courseunit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `Date`, `courseunit`, `information`, `created_at`, `updated_at`) VALUES
(1, '2022-10-06', 'CSC303S3', 'no lecture', '2022-10-28 01:28:19', '2022-10-28 01:28:19'),
(2, '2022-10-20', 'CSC308S3', 'lecture will be delay', '2022-10-28 01:28:39', '2022-10-28 01:28:39'),
(3, '2022-10-07', 'CSC309S6', 'Assignment is uploaded', '2022-10-28 01:29:03', '2022-10-28 01:29:03'),
(4, '2022-10-29', 'CSC309S3', 'no lecture', '2022-10-28 03:15:30', '2022-10-28 03:15:30');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstname`, `lastname`, `regno`, `year`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Nahlilan', 'Vnio', '2018/CSC/001', 3, 'nahi@gmail.com', '$2y$10$2ngGwSE6x.CU46pQGQzu6uF22wFHz3bovuQl/4TMFJ.nPf.Zr.b8K', 'student', '2022-10-28 01:22:26', '2022-10-28 01:22:26'),
(2, 'Abilash', 'Ravincharan', '2018/CSC/002', 3, 'abi@gmail.com', '$2y$10$5Xx51RzHBaQhCTV4w0EFT.D3bQd4HU03OsG/ypWPIW7jmYEz9ABli', 'student', '2022-10-28 01:25:30', '2022-10-28 01:25:30'),
(3, 'Vidhushan', 'Nanthan', '2018/CSC/003', 3, 'vidhu@gmail.com', '$2y$10$kE8FWkN1den7TeZB07yk7O56e2mz2fO.oDTqC239dLpL4lqMgkT4W', 'student', '2022-10-28 01:26:10', '2022-10-28 01:26:10'),
(4, 'Harshani', 'Jeevan', '2018/CSC/004', 3, 'harshani@gmail.com', '$2y$10$AzKZ3zzJoZW9ujxhBh5eNO9IO0dwYoN9PAKaPP2KHVGGhS/cEVQwq', 'student', '2022-10-28 01:27:03', '2022-10-28 01:27:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','student') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kiruthiha', 'Sridharan', 'Kiruthiha@gmail.com', NULL, '$2y$10$2WucZpe3YLZWXKpYtr..R.fmWLxfUidc.nV2y4hVMlTJyW3bKqydC', 'admin', 'aUsQK3qd0j', NULL, NULL),
(2, 'Nahlilan', 'Vnio', 'nahi@gmail.com', NULL, '$2y$10$xejQkQamj5CZD5g9lQ3Hf.dbrFvf2Nhgcei3NsegSsm4xR2SBzvR6', 'student', NULL, '2022-10-28 01:22:26', '2022-10-28 01:22:26'),
(3, 'Abilash', 'Ravincharan', 'abi@gmail.com', NULL, '$2y$10$Icxpz8pdwctrTHClwlKeq.5QCii2EJRy01BYNSm.lkUPOAR6fwGGu', 'student', NULL, '2022-10-28 01:25:30', '2022-10-28 01:25:30'),
(4, 'Vidhushan', 'Nanthan', 'vidhu@gmail.com', NULL, '$2y$10$.7YTjxlxIfBFo/rTUd.IGe9wqBj.Y4EmVzPNKRrGamSwk32nO.rKy', 'student', NULL, '2022-10-28 01:26:10', '2022-10-28 01:26:10'),
(5, 'Harshani', 'Jeevan', 'harshani@gmail.com', NULL, '$2y$10$stL1T7RjtlyBjAgSafiIa.LsEWLEI7rNkyB4U0RJeYGNLLLADJ79e', 'student', NULL, '2022-10-28 01:27:03', '2022-10-28 01:27:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendences`
--
ALTER TABLE `attendences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_courseunit_unique` (`courseunit`);

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
-- Indexes for table `notices`
--
ALTER TABLE `notices`
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
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_regno_unique` (`regno`);

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
-- AUTO_INCREMENT for table `attendences`
--
ALTER TABLE `attendences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
