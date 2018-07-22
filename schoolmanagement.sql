-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 22, 2018 at 06:00 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banglasofttech_schoolmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` int(10) UNSIGNED NOT NULL,
  `catagory` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `catagory`, `created_at`, `updated_at`) VALUES
(1, 'Admission Fee', '2018-06-05 15:49:08', '2018-06-05 15:49:08'),
(2, 'Transport Bill', '2018-06-05 15:56:46', '2018-06-05 15:56:46'),
(3, 'Exam Fee', '2018-06-05 15:56:58', '2018-06-05 15:56:58'),
(4, 'Monthly Fee', '2018-06-06 07:38:53', '2018-06-06 07:38:53');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `catagory` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `student_id`, `catagory`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1001, 'Transport Bill', 500, '2018-06-05 16:44:16', '2018-06-05 16:44:16'),
(2, 1001, 'Monthly Fee', 800, '2018-06-06 07:39:10', '2018-06-06 07:39:10'),
(3, 1000, 'Exam Fee', 500, '2018-06-06 17:17:05', '2018-06-06 17:17:05'),
(4, 1122, 'Exam Fee', 500, '2018-06-06 17:17:22', '2018-06-06 17:17:22'),
(5, 11212, 'Transport Bill', 1200, '2018-06-06 17:21:53', '2018-06-06 17:21:53'),
(6, 1122, 'Transport Bill', 500, '2018-06-06 17:27:18', '2018-06-06 17:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `insttitution_details`
--

CREATE TABLE `insttitution_details` (
  `id` int(11) NOT NULL,
  `Address` varchar(256) NOT NULL,
  `Moto` varchar(256) NOT NULL,
  `Estd` varchar(256) NOT NULL,
  `Eiin` int(11) NOT NULL,
  `Head` varchar(256) NOT NULL,
  `Chairman` varchar(256) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `insttitution_details`
--

INSERT INTO `insttitution_details` (`id`, `Address`, `Moto`, `Estd`, `Eiin`, `Head`, `Chairman`, `Phone`, `Email`, `updated_at`, `created_at`) VALUES
(1, 'Faujdarhat, Sitakunda Upazila, Chittagong', 'Knowledge is power (জ্ঞানই শক্তি)', '1982', 105074, 'A.B.M. Kamrul Islam', 'Master Nurul Islam', '184562645', 'contact@bstech.com', '2018-06-04', '2018-06-04'),
(2, 'Faujdarhat, Sitakunda Upazila, Chittagong', 'Knowledge is power (জ্ঞানই শক্তি)', '1982', 105074, 'A.B.M. Kamrul Islam', 'Master Nurul Islam', '184562645', 'contact@bstech.com', '2018-06-04', '2018-06-04'),
(3, 'Faujdarhat, Sitakunda Upazila, Chittagong', 'Knowledge is power (জ্ঞানই শক্তি)', '1982', 105074, 'A.B.M. Kamrul Islam', 'Master Nurul Islam', '0184562645', 'contact@bstech.com', '2018-06-04', '2018-06-04'),
(4, 'Faujdarhat, Sitakunda Upazila, Chittagong', 'Knowledge is power (জ্ঞানই শক্তি)', '1982', 105074, 'A.B.M. Kamrul Islam', 'Master Nurul Islam', '0184562645', 'contact@bstech.com', '2018-06-04', '2018-06-04'),
(5, 'Faujdarhat, Sitakunda Upazila, Chittagong', 'Knowledge is power (জ্ঞানই শক্তি)', '1982', 105074, 'A.B.M. Kamrul Islam', 'Master Nurul Islam', '0184562645', 'contact@bstech.com', '2018-06-04', '2018-06-04'),
(6, 'Faujdarhat, Sitakunda Upazila, Chittagong', 'Knowledge is power (জ্ঞানই শক্তি)', '1982', 105074, 'A.B.M. Kamrul Islam', 'Master Nurul Islam', '0184562645', 'contact@bstech.com', '2018-06-04', '2018-06-04'),
(7, 'Faujdarhat, Sitakunda Upazila, Chittagong', 'Knowledge is power (জ্ঞানই শক্তি)', '1982', 105074, 'A.B.M. Kamrul Islam', 'Master Nurul Islam', '0184562645', 'contact@bstech.com', '2018-06-04', '2018-06-04'),
(8, 'Faujdarhat, Sitakunda Upazila, Chittagong', 'Knowledge is power (জ্ঞানই শক্তি)', '1982', 105074, 'A.B.M. Kamrul Islam', 'Master Nurul Islam', '0184562645', 'contact@bstech.com', '2018-06-04', '2018-06-04'),
(9, 'Faujdarhat, Sitakunda Upazila, Chittagong', 'Knowledge is power (জ্ঞানই শক্তি)', '1982', 105074, 'A.B.M. Kamrul Islam', 'Master Nurul Islam', '018****645', 'contact@bstech.com', '2018-06-06', '2018-06-06'),
(10, 'Faujdarhat, Sitakunda Upazila, Chittagong', 'Knowledge is power (জ্ঞানই শক্তি)', '1982', 105074, 'A.B.M. Kamrul Islam', 'Master Nurul Islam', '018****645', 'contact@banglasofttech.com', '2018-06-06', '2018-06-06');

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
(4, '2018_05_29_122305_teacher', 2),
(5, '2018_05_29_115450_student', 3),
(6, '2018_06_05_140607_notice', 4),
(7, '2018_06_05_201023_catagory', 5),
(8, '2018_06_05_221659_fees', 6);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `notice` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice`, `display`, `created_at`, `updated_at`) VALUES
(1, 'Hello, How are you?', 0, '2018-06-05 08:26:32', '2018-06-05 13:19:58'),
(2, 'এতদ্বারা অত্র বিদ্যালযের সকলের অবগতির জন্য জানানো যাচ্ছে যে, পবিত্র মাহে রমজান এবং ঈদুল ফিতর উপলক্ষে অগামি ১৭-০৫-২০১৮ থেকে ২৫-০৫-২০১৮ পর্যন্ত বিদ্যালয়ের সকল কার্যক্রম বন্ধ থাকিবে।', 1, '2018-06-05 08:27:55', '2018-06-06 07:59:54'),
(5, 'Hello this is a test notice', 0, '2018-06-05 09:51:28', '2018-06-06 07:59:54'),
(10, 'Hello , This is our edited notice', 0, '2018-06-05 09:55:36', '2018-06-05 12:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

CREATE TABLE `Students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Students`
--

INSERT INTO `Students` (`id`, `name`, `f_name`, `m_name`, `address`, `phone`, `class`, `section`, `roll`, `profile_pic`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Tanvir Hasan', 'Rejwanul Karim', 'Fatema Begum', 'Chittagong', '018564885477', '10', 'A', '10', NULL, NULL, '2018-05-29 11:19:56', '2018-05-29 11:19:56'),
(1000, 'ABC', 'তগডতগ', 'তডগডতগ', 'তডগতডগ', 'ডতগতডগ', 'তডগতডগ', NULL, 'তডগডতগ', NULL, NULL, '2018-05-29 11:14:54', '2018-05-29 11:14:54'),
(1001, 'ABC2', 'তগডতগ', 'তডগডতগ', 'তডগতডগ', 'ডতগতডগ', 'তডগতডগ', 'তডগতডগ', 'তডগডতগ', NULL, NULL, '2018-05-29 11:18:17', '2018-05-29 11:18:17'),
(1002, 'Tanvir Hasan', 'Rejwanul Karim', 'Fatema Begum', 'Chittagong', '018564885477', '6', 'A', '10', NULL, NULL, '2018-05-29 11:24:41', '2018-05-29 11:24:41'),
(1003, 'Tanvir Hasan', 'Rejwanul Karim', 'Fatema Begum', 'Chittagong', '018564885477', '10', 'A', '10', NULL, NULL, '2018-05-29 11:24:53', '2018-05-29 11:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `Teachers`
--

CREATE TABLE `Teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'teacher',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sharif Noor Zisad', 'snzisad@gmail.com', '$2y$10$Ai6amds2Q6DJCGO2rn6FweG9dPqXuxBuNMDhglEe5Y/CUkvO/ND9m', 'admin', 'tIradDeNiYeunjuQkLNnBFDWmZt3aCQpz5mSC5VdbTUqWIEALdu68kmsjc8I', '2018-05-29 06:20:38', '2018-05-29 06:20:38'),
(2, 'Bangla Soft Tech', 'banglesofttech@gmail.com', '$2y$10$fsKWD8izJ5BDHStfWEClYOJbKa5Z0cx6/6ukda4rISAI81HO0lxxO', 'teacher', 'nSfhfsaHA7Kx2SpGrPwyDNu1XNzIMScfaOAs6zikmxrgCnir1sqXHat3R4U4', '2018-05-29 06:21:27', '2018-05-29 06:21:27'),
(3, 'Saima Sultana', 'ss@gmail.com', '$2y$10$d77oyyV0h7p7o8n5pBh.M.69JdqD5QIOg3K1.fInt/0SQtzIJ0nN2', 'teacher', NULL, '2018-05-29 07:25:29', '2018-05-29 07:25:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insttitution_details`
--
ALTER TABLE `insttitution_details`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `Students`
--
ALTER TABLE `Students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Teachers`
--
ALTER TABLE `Teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `insttitution_details`
--
ALTER TABLE `insttitution_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Students`
--
ALTER TABLE `Students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT for table `Teachers`
--
ALTER TABLE `Teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
