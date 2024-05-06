-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 06, 2024 at 12:30 PM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u386366225_app_ac`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profession` text NOT NULL,
  `role` text NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `profession`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(49874, 'Dr Ahmed', 'admin@cis.edu', 'Admin', 'Admin', NULL, '$2y$12$lHSHv/W5Fl4M/Fz7BhfKBe.wCR/qda8ODuHypjH3wP6IbmH7DfoYe', 'X9cFIJ7iHrQMvEhbktvhORpLXJKDDj5aE6Nfbh4Va1kJMg5iDVYLwTW4AYrL', '2024-05-01 11:03:54', '2024-05-01 11:03:54'),
(49875, 'Dr Mahmoud Mohamed', 'dr_mahoud@cis.edu', 'Professor', 'Professor', NULL, '$2y$12$9W0cA/oqI.ewJM9J/NRP/.nMF1lAHmtHm46hfhM3Utwr0.ba79Rja', NULL, '2024-05-05 17:31:04', '2024-05-05 17:31:04'),
(49876, 'Dr Essam Mahmoud ', 'dr_hany@cis.edu', 'Professor', 'Professor', NULL, '$2y$12$cnlvjrKRoVxIXHZtA9llg.fPryyNtrIaOCvj2oVwLHt9dGaHOrE1u', NULL, '2024-05-05 17:31:38', '2024-05-05 17:31:38'),
(49877, 'Dr Mostafa Ahmed', 'dr_Mostafa@cis.edu', 'Professor', 'Professor', NULL, '$2y$12$5qQv0DD.D9CAvSxu9Qi3YuNJpxHU2rk6tj797AFP12/dcAApvwY7i', NULL, '2024-05-05 17:32:49', '2024-05-05 17:32:49'),
(49878, 'Dr Asmaa Emad', 'dr_asmaa@cis.edu', 'Professor', 'Professor', NULL, '$2y$12$/0RbyiLZafVG1NAfn2NVwuofopKcItEfrrNy4z4pWSm/OSaIzmeUu', NULL, '2024-05-05 17:35:39', '2024-05-05 17:35:56'),
(49879, 'Mohamed ahmed', 'mohadmin@cis.com', 'Advisor', 'Advisor', NULL, '$2y$12$LCsKofIN4cphnulofc5rn.7tnB.PWJKio8hj.M0IBv3bo/ZUBSzWe', NULL, '2024-05-06 01:47:55', '2024-05-06 01:47:55'),
(49880, 'Ahmedsalah', 'ahmedsalah@cis.edu', 'Admin', 'Admin', NULL, '$2y$12$NVcwJ13pEd7D0p0exevTl.ccdzdGRoBb8SFu4XIHNihQtrklTo0Ue', NULL, '2024-05-06 01:49:06', '2024-05-06 01:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `advising`
--

CREATE TABLE `advising` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `year` text NOT NULL,
  `status` text NOT NULL,
  `admin_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `advising`
--

INSERT INTO `advising` (`id`, `student_id`, `level`, `semester`, `year`, `status`, `admin_id`, `created_at`, `updated_at`) VALUES
(34534, 786903, 1, 1, '2024', 'active', 49874, '2024-05-05 20:14:38', '2024-05-05 20:14:38'),
(34535, 786902, 1, 1, '2024', 'active', 49874, '2024-05-05 20:15:01', '2024-05-05 20:15:01'),
(34536, 786900, 2, 3, '2024', 'active', 49874, '2024-05-05 20:16:56', '2024-05-05 20:16:56'),
(34537, 786901, 2, 3, '2024', 'active', 49874, '2024-05-05 20:17:02', '2024-05-05 20:17:02'),
(34538, 786898, 3, 5, '2024', 'active', 49874, '2024-05-05 20:28:22', '2024-05-05 20:28:22'),
(34539, 786899, 3, 5, '2024', 'active', 49874, '2024-05-05 20:28:39', '2024-05-05 20:28:39'),
(34540, 786896, 4, 7, '2024', 'completed', 49874, '2024-05-05 20:31:01', '2024-05-05 20:32:26'),
(34541, 786897, 4, 7, '2024', 'active', 49874, '2024-05-05 20:31:11', '2024-05-05 20:31:11'),
(34542, 786896, 4, 8, '2024', 'active', 49874, '2024-05-05 21:00:26', '2024-05-05 21:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('admin@cis.edu|2a09:bac1:2260:8::31:f7', 'i:1;', 1714946430),
('admin@cis.edu|2a09:bac1:2260:8::31:f7:timer', 'i:1714946430;', 1714946430),
('admin@nikuniv.edu.com|2a09:bac1:2260:8::31:f7', 'i:1;', 1714945662),
('admin@nikuniv.edu.com|2a09:bac1:2260:8::31:f7:timer', 'i:1714945662;', 1714945662),
('ahmedabdaziz@cis.edu|197.37.33.109', 'i:1;', 1714895982),
('ahmedabdaziz@cis.edu|197.37.33.109:timer', 'i:1714895982;', 1714895982),
('ahmedashour@cis.edu|197.37.33.109', 'i:1;', 1714895967),
('ahmedashour@cis.edu|197.37.33.109:timer', 'i:1714895967;', 1714895967),
('hamdyelbatal@nikuniv.edu|197.36.239.68', 'i:1;', 1714938397),
('hamdyelbatal@nikuniv.edu|197.36.239.68:timer', 'i:1714938397;', 1714938397),
('hamdyelbatal@nikuniv.edu|197.36.58.178', 'i:1;', 1714905869),
('hamdyelbatal@nikuniv.edu|197.36.58.178:timer', 'i:1714905869;', 1714905869),
('hamdyelbatal@nikuniv.edu|197.37.33.109', 'i:1;', 1714897261),
('hamdyelbatal@nikuniv.edu|197.37.33.109:timer', 'i:1714897261;', 1714897261),
('hamdyelbatal@nikuniv.edu|2a09:bac1:2260:8::31:f7', 'i:1;', 1714945646),
('hamdyelbatal@nikuniv.edu|2a09:bac1:2260:8::31:f7:timer', 'i:1714945646;', 1714945646);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `code` text NOT NULL,
  `hours` int(11) NOT NULL,
  `professor_id` int(11) NOT NULL,
  `day_of_lecture` text NOT NULL,
  `time_of_lecture` text NOT NULL,
  `duration_of_lecture` int(11) NOT NULL,
  `lab` int(11) NOT NULL,
  `day_of_lab` text DEFAULT NULL,
  `time_of_lab` text DEFAULT NULL,
  `duration_of_lab` int(11) DEFAULT NULL,
  `exam_date` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `code`, `hours`, `professor_id`, `day_of_lecture`, `time_of_lecture`, `duration_of_lecture`, `lab`, `day_of_lab`, `time_of_lab`, `duration_of_lab`, `exam_date`, `created_at`, `updated_at`) VALUES
(56489220, 'Mathematics 1', '2210', 3, 49877, 'Saturday', '9:00 AM', 2, 1, 'Sunday', '1:00 PM', 1, '2024-05-18', '2024-05-05 17:37:05', '2024-05-05 17:37:05'),
(56489221, 'Mathematics 2', '2211', 3, 49877, 'Saturday', '11:00 AM', 2, 1, 'Sunday', '3:00 PM', 1, '2024-05-19', '2024-05-05 17:37:36', '2024-05-05 17:37:36'),
(56489222, 'Mathematics 3', '2212', 3, 49877, 'Saturday', '3:00 PM', 2, 1, 'Tuesday', '8:00 AM', 1, '2024-05-30', '2024-05-05 17:38:04', '2024-05-05 17:38:04'),
(56489223, 'Physics 1', '3379', 3, 49878, 'Tuesday', '10:00 AM', 2, 1, 'Sunday', '8:00 AM', 1, '2024-06-05', '2024-05-05 17:38:58', '2024-05-05 17:38:58'),
(56489224, 'Physics 2', '3381', 3, 49878, 'Sunday', '11:00 AM', 3, 1, 'Wednesday', '3:00 PM', 1, '2024-06-08', '2024-05-05 17:39:44', '2024-05-05 17:39:44'),
(56489225, 'Physics 3', '3382', 3, 49878, 'Sunday', '1:00 PM', 3, 1, 'Wednesday', '4:00 PM', 1, '2024-06-11', '2024-05-05 17:39:44', '2024-05-05 17:39:44'),
(56489236, 'Computer Science CS20', '8134', 3, 49875, 'Saturday', '3:00 PM', 2, 1, 'Monday', '8:00 AM', 1, '2024-05-29', '2024-05-05 17:55:16', '2024-05-05 17:55:16'),
(56489237, 'C Programing', '4133', 3, 49875, 'Tuesday', '12:00 PM', 2, 1, 'Tuesday', '9:00 AM', 1, '2024-05-22', '2024-05-05 17:55:55', '2024-05-05 17:55:55'),
(56489239, 'Data Base', '4135', 3, 49875, 'Monday', '12:00 PM', 2, 1, 'Saturday', '2:00 PM', 1, '2024-05-30', '2024-05-05 17:57:32', '2024-05-05 17:58:36'),
(56489240, 'Data Base 2', '4136', 3, 49875, 'Monday', '2:00 PM', 2, 1, 'Saturday', '3:00 PM', 1, '2024-05-30', '2024-05-05 17:57:32', '2024-05-05 17:58:36'),
(56489243, 'Data Base 3', '4137', 3, 49875, 'Tuesday', '2:00 PM', 2, 1, 'Sunday', '3:00 PM', 1, '2024-05-30', '2024-05-05 17:57:32', '2024-05-05 17:58:36'),
(56489244, 'Computer Security', '1266', 2, 49875, 'Monday', '2:00 PM', 2, 1, 'Tuesday', '2:00 PM', 1, '2024-05-30', '2024-05-05 18:27:21', '2024-05-05 18:27:21'),
(56489245, 'Statistics and probability', '1440', 3, 49876, 'Saturday', '2:00 PM', 2, 1, 'Saturday', '3:00 PM', 1, '2024-06-26', '2024-05-05 17:43:56', '2024-05-05 17:43:56'),
(56489246, 'communication skills', '1439', 2, 49876, 'Saturday', '12:00 PM', 1, 0, NULL, NULL, NULL, '2024-05-14', '2024-05-05 17:42:52', '2024-05-05 17:42:52'),
(56489247, 'Accounting Principles', '1436', 2, 49876, 'Tuesday', '1:00 PM', 2, 0, NULL, NULL, NULL, '2024-06-02', '2024-05-05 17:42:05', '2024-05-05 17:42:05'),
(56489248, 'Electronics 1', '3383', 3, 49878, 'Wednesday', '11:00 AM', 2, 1, 'Saturday', '4:00 PM', 1, '2024-06-19', '2024-05-05 17:40:43', '2024-05-05 17:40:43'),
(56489249, 'Electronics 2', '3384', 3, 49878, 'Wednesday', '11:00 AM', 2, 1, 'Saturday', '4:00 PM', 1, '2024-06-19', '2024-05-05 17:40:43', '2024-05-05 17:40:43'),
(56489250, 'Electronics 3', '3385', 3, 49878, 'Wednesday', '11:00 AM', 2, 1, 'Saturday', '4:00 PM', 1, '2024-06-19', '2024-05-05 17:40:43', '2024-05-05 17:40:43'),
(56489259, 'Advanced Computer Security', '1267', 2, 49875, 'Sunday', '3:00 PM', 2, 1, 'Tuesday', '3:00 PM', 1, '2024-06-30', '2024-05-05 18:27:21', '2024-05-05 18:27:21'),
(56489278, 'Data Structure', '4134', 3, 49875, 'Saturday', '1:00 PM', 2, 0, NULL, NULL, NULL, '2024-05-23', '2024-05-05 17:56:44', '2024-05-05 17:56:44'),
(56489279, 'Data Structure 2', '4137', 3, 49875, 'Saturday', '1:00 PM', 2, 0, NULL, NULL, NULL, '2024-05-23', '2024-05-05 17:56:44', '2024-05-05 17:56:44'),
(56489280, 'Data Structure 3', '4138', 3, 49875, 'Saturday', '1:00 PM', 2, 0, NULL, NULL, NULL, '2024-05-23', '2024-05-05 17:56:44', '2024-05-05 17:56:44');

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
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `advising_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `grade` varchar(4) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `advising_id`, `course_id`, `grade`, `admin_id`, `created_at`, `updated_at`) VALUES
(25, 34540, 56489222, '90', 49874, '2024-05-05 20:32:26', '2024-05-05 20:32:26'),
(26, 34540, 56489243, '98', 49874, '2024-05-05 20:32:26', '2024-05-05 20:32:26'),
(27, 34540, 56489237, '95', 49874, '2024-05-05 20:32:26', '2024-05-05 20:32:26'),
(28, 34540, 56489259, '86', 49874, '2024-05-05 20:32:26', '2024-05-05 20:32:26');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_04_30_204511_create_sessions_table', 2),
(7, '2024_04_30_214439_create_cache_table', 3),
(8, '2024_05_01_002108_create_users_table', 4),
(9, '2024_05_01_002219_create_users_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `title` text NOT NULL,
  `status` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `student_id`, `subject`, `title`, `status`, `created_at`, `updated_at`) VALUES
(34244, 786897, 'Academic', 'Having Problem with Registeration', 'active', '2024-05-05 20:35:00', '2024-05-05 20:35:00'),
(34245, 786898, 'Financial', 'Paid all fess but my my advising is not completed', 'active', '2024-05-05 20:36:14', '2024-05-05 20:36:14'),
(34246, 786903, 'General', 'My password has been forgetten and can\'t change it', 'active', '2024-05-05 20:37:24', '2024-05-05 20:37:24'),
(34247, 786899, 'Academic', 'I don\'t deserve to fail', 'active', '2024-05-05 20:38:42', '2024-05-05 20:38:42'),
(34248, 786896, 'General', 'Cant change my account Password', 'active', '2024-05-04 14:59:45', '2024-05-04 14:59:45'),
(34249, 786896, 'Financial', 'Please answer fo necessary about your payment', 'active', '2024-05-05 20:46:39', '2024-05-05 20:46:39'),
(34250, 786896, 'General', 'Problem With my supervisor, not answer', 'closed', '2024-05-05 20:54:28', '2024-05-05 20:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `notice_messages`
--

CREATE TABLE `notice_messages` (
  `id` int(11) NOT NULL,
  `notice_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notice_messages`
--

INSERT INTO `notice_messages` (`id`, `notice_id`, `student_id`, `admin_id`, `message`, `created_at`, `updated_at`) VALUES
(13, 34248, NULL, NULL, 'cant change my account Password&nbsp;&nbsp;cant change my account Password&nbsp;&nbsp;cant change my account Password&nbsp;&nbsp;cant change my account Password&nbsp;', '2024-05-04 14:59:45', '2024-05-04 14:59:45'),
(14, 34248, NULL, NULL, 'pleasse help me', '2024-05-04 15:01:35', '2024-05-04 15:01:35'),
(15, 34248, NULL, 49874, 'hello hamdy how are&nbsp;<p>we will investgate this issue&nbsp;</p><p>and we will back to you&nbsp;</p>', '2024-05-04 15:03:52', '2024-05-04 15:03:52'),
(16, 34244, NULL, NULL, 'I take Math 2 in last semester and i find it in my currant semester&nbsp;<p>please replay to help</p>', '2024-05-05 20:35:00', '2024-05-05 20:35:00'),
(17, 34245, NULL, NULL, 'i\'am pay the amount of fess but<p>my courses list is empty please help me</p>', '2024-05-05 20:36:14', '2024-05-05 20:36:14'),
(18, 34246, NULL, NULL, 'please help me or change password to me&nbsp;<p>to see my dashboard without fear</p>', '2024-05-05 20:37:24', '2024-05-05 20:37:24'),
(19, 34247, NULL, NULL, 'why i\'am fail in math 3<p>i\'am my answers make me passed the exam&nbsp;</p>', '2024-05-05 20:38:42', '2024-05-05 20:38:42'),
(20, 34249, NULL, 49874, 'Hello Hamdy&nbsp;<p>there is Dr Ahmed From Cis University&nbsp;</p><p>We are check your payment&nbsp;receipt ,</p><p>we find you have write account number wrong&nbsp;</p><p>and your fund doesn\'t arrive to us&nbsp;</p><p>please investigate this issue with your bank&nbsp;</p><p>and return to us&nbsp;</p><p>Best Regards</p><p>Cis Support Team&nbsp;</p><p><br></p>', '2024-05-05 20:46:39', '2024-05-05 20:46:39'),
(21, 34250, NULL, NULL, 'I have a supervisor but he not answer in the tickets&nbsp;<p>can you provide me the location of his office&nbsp;</p><p>or his email&nbsp;</p><p>thank you</p><p><br></p>', '2024-05-05 20:54:28', '2024-05-05 20:54:28'),
(22, 34250, NULL, 49874, 'We have checked this <b>issue #34250</b><p><p><b>and we send notification to him&nbsp;</b></p><p>please accept our&nbsp;apologies&nbsp;</p><p>and we wish to you&nbsp;Good luck and lasting success</p><p><p>Best Regards</p><p><b>Cis Support Team&nbsp;</b></p></p></p>', '2024-05-05 20:57:05', '2024-05-05 20:57:05'),
(23, 34250, NULL, 49874, 'we find this issue has been solved&nbsp;<p>we will make it close and you can\'t replay to it&nbsp;</p><p>Please feel free to contact us if you have any questions<br></p><p><p>Best Regards</p><p>Cis Support Team&nbsp;</p></p>', '2024-05-05 20:58:35', '2024-05-05 20:58:35');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
('A0KzqA72QwGBFwaozenCYoESO4lxflIGtLVzJM2M', NULL, '102.43.59.113', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTmpkdVBSVlBkZm9qOGJUQk9QOXUwTGFlUGVMVUtROVpmdlJUMk50aSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vdGVzdC50ZWNub3dhdmUudWsiO319', 1714960353),
('AFJH5pFSL0FoQf3QqhAHCPbyoTwsDKzn8UfnPq7D', NULL, '41.40.252.161', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiakJaZzc2ZFFNZUFmSkZVU3czbHNVYWVEQnptY0dTQWsyT0Z1amZENCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vdGVzdC50ZWNub3dhdmUudWsvYXV0aC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1714963271),
('BKZwTfvWieKCsnGFUjjV3uVH6r0XHIbnw5euKwBi', NULL, '197.35.254.63', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Mobile Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoienJoZ3o5YlVCNGdkZmJsNDkwWmFkaEJhUzFQYXUzVVZIRjFxdmZsViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHBzOi8vdGVzdC50ZWNub3dhdmUudWsvYWRtaW4vZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0OTg3NDtzOjQ6ImF1dGgiO2E6MTp7czoyMToicGFzc3dvcmRfY29uZmlybWVkX2F0IjtpOjE3MTQ5NzI4Mjk7fX0=', 1714972861),
('qfpiMr7hbcqtjsIjj6a7GUt3iegkZ34FgrIoSZE7', NULL, '196.134.147.81', 'Mozilla/5.0 (iPhone; CPU iPhone OS 17_0_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.0 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieFE5aHBzd1RMM3VrWEZIb01zeEkwZ0NBbmEySmJWRFd2c0NzVFhCWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHBzOi8vdGVzdC50ZWNub3dhdmUudWsvYWRtaW4vYXV0aC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1714964787),
('Xt1bAuvA9PD3QUFVnbFlivHPIKldrYMXPu2GniO4', NULL, '154.183.206.15', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36 OPR/106.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNlBNWU5CT2NJNVpLOHRqM0lkQVc4OEI1QTVidG1uam1DbkloY2NreSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vdGVzdC50ZWNub3dhdmUudWsiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1714991617),
('ZymONqgxYtMPedSHxWhBnB3IS0cpQag8dtpdBTaG', NULL, '197.37.180.32', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib1pnc1FTdzBKUndRRmo4QllaY2EzRmljaVBub1JmdEd1WkhnRHhFMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHBzOi8vdGVzdC50ZWNub3dhdmUudWsvYWJvdXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1714981061);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(20) NOT NULL,
  `first_name` text NOT NULL,
  `middle_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `nationality` text NOT NULL,
  `national_id` text NOT NULL,
  `gender` text NOT NULL,
  `birth` text NOT NULL,
  `blood` text NOT NULL,
  `religion` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `college` text NOT NULL,
  `level` text NOT NULL,
  `gpa` text NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `currant_password` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `nationality`, `national_id`, `gender`, `birth`, `blood`, `religion`, `phone`, `address`, `college`, `level`, `gpa`, `email_verified_at`, `password`, `currant_password`, `remember_token`, `created_at`, `updated_at`) VALUES
(786896, 'Hamdy', 'Mohamed', 'Elbatal', 'HamdyElbatal@cis.edu', 'Egypt', '29701151202777', 'male', '1997-01-15', 'A+', 'Muslim', '01003118623', 'Mansoura,Dakahila, Egypt', 'Computer science', '4', '3.5', NULL, '$2y$12$lHSHv/W5Fl4M/Fz7BhfKBe.wCR/qda8ODuHypjH3wP6IbmH7DfoYe', '22222222', 'TvHjiDeCQS3S8V2164IJ1FmiqlZgjF32A3y4Nb0cJBJbxETF7buU9PVEW2aN', '2024-05-01 12:06:41', '2024-05-04 13:13:43'),
(786897, 'Ahmed', 'Ashour', 'Abdaziz', 'ahmedashour@cis.edu', 'Egypt', '30303100040571', 'male', '2024-05-05', 'A+', 'Muslim', '01050553969', 'Elnozha , Cairo , Egypt', 'Computer science', '4', '3.1', NULL, '$2y$12$m8WQwGX6U8JYaVF1xq9qKufmDkT75EohuZjvzypA4/j0qONjn4K2O', '12345678', '3WSsRUq02t2WYRxQLWEMmNrPHOZURF6Y5kC39UC5hzeWHCbioipvOHm0BbRP', '2024-05-05 10:35:58', '2024-05-05 16:00:21'),
(786898, 'Ebrahim', 'Ali', 'mohamed', 'Ebrahimmohamed@cis.edu', 'Egypt', '20301174238776', 'male', '2003-01-01', 'A+', 'Muslim', '01006738134', 'Aim Shams , Cairo , Egypt', 'computer science', '3', '3', NULL, '$2y$12$HMvV/6gUYG.SgGjozH/P2ew0X4lFi7WaoX7JdydIxt9GBTppnP6Iy', 'by5x612f', NULL, '2024-05-05 16:25:41', '2024-05-05 16:25:41'),
(786899, 'Mohamed', 'Ahmed', 'Amar', 'MohamedAmar@cis.edu', 'Egypt', '30301194232888', 'male', '2002-01-01', 'AB+', 'Muslim', '01065324040', 'Obour , Cairo , Egypt', 'computer science', '3', '3.5', NULL, '$2y$12$gUfGCxAyJIuoAlSocDQenOPBeUVPpPkT4Y5Gf7UYw6TjHdgSr8p2S', 'rx85idu1', NULL, '2024-05-05 16:28:42', '2024-05-05 16:28:42'),
(786900, 'Mohamed', 'Hani', 'Mohamed', 'MohamedMohamed@cis.edu', 'Egypt', '20307722656444', 'male', '2002-06-14', 'AB+', 'Muslim', '01227621967', '6 October , Giza , Egypt', 'computer science', '2', '4', NULL, '$2y$12$c5yUFAaDYuF27Xn.71EQwOpz/vvPLiYljaPGhFt4KccYzA4HHSSLS', 'kl1avzpe', NULL, '2024-05-05 16:30:14', '2024-05-06 01:44:47'),
(786901, 'Zaid', 'Osama', 'Mohamed', 'ZaidMohamed@cis.edu', 'Egypt', '303077885432783', 'male', '2002-12-02', 'O+', 'Muslim', '010021248823', 'Ramses , Cairo , Egypt', 'computer science', '2', '4', NULL, '$2y$12$2gsqbb1zhJN9Gb22f87v/exkbYBuY5TY7/C4UmsZ5ANwdajOgIUpC', 'f5fn18h3', NULL, '2024-05-05 16:33:30', '2024-05-05 16:33:30'),
(786902, 'Fady', 'Adeeb', 'Fady', 'FadyFady@cis.edu', 'Egypt', '3020771739213', 'male', '2003-01-01', 'AB+', 'Christian', '0100235894', 'Nasr City , Cairo , Egypt', 'Computer Science', '1', '0', NULL, '$2y$12$GC9C3LlCs8nWfqdtrn56LO6zhtuizEMt4CpwpHEdM/jLgt4XEu22C', '0t45lrno', NULL, '2024-05-05 16:35:38', '2024-05-05 16:35:38'),
(786903, 'Bishoy', 'Samesh', 'Bishoy', 'BishoyBishoy@cis.edu', 'Egypt', '30301185202333', 'male', '2002-01-05', 'B+', 'Christian', '01003469954', 'Giza , Giza , Cairo', 'Computer Science', '1', '0', NULL, '$2y$12$MZsx6QMxLQYuui2mZLjb1uxYyo6.zZB5bgRhj0aX9xHQ/stpBaU4O', '674g0yo8', NULL, '2024-05-05 16:38:01', '2024-05-05 16:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `student_courses`
--

CREATE TABLE `student_courses` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `advising_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student_courses`
--

INSERT INTO `student_courses` (`id`, `student_id`, `advising_id`, `course_id`, `created_at`, `updated_at`) VALUES
(26, 786903, 34534, 56489220, '2024-05-05 20:14:38', '2024-05-05 20:14:38'),
(27, 786903, 34534, 56489223, '2024-05-05 20:14:38', '2024-05-05 20:14:38'),
(28, 786903, 34534, 56489247, '2024-05-05 20:14:38', '2024-05-05 20:14:38'),
(29, 786903, 34534, 56489246, '2024-05-05 20:14:38', '2024-05-05 20:14:38'),
(30, 786903, 34534, 56489236, '2024-05-05 20:14:38', '2024-05-05 20:14:38'),
(31, 786902, 34535, 56489220, '2024-05-05 20:15:01', '2024-05-05 20:15:01'),
(32, 786902, 34535, 56489223, '2024-05-05 20:15:01', '2024-05-05 20:15:01'),
(33, 786902, 34535, 56489247, '2024-05-05 20:15:01', '2024-05-05 20:15:01'),
(34, 786902, 34535, 56489246, '2024-05-05 20:15:01', '2024-05-05 20:15:01'),
(35, 786902, 34535, 56489236, '2024-05-05 20:15:01', '2024-05-05 20:15:01'),
(36, 786900, 34536, 56489221, '2024-05-05 20:16:56', '2024-05-05 20:16:56'),
(37, 786900, 34536, 56489224, '2024-05-05 20:16:56', '2024-05-05 20:16:56'),
(38, 786900, 34536, 56489245, '2024-05-05 20:16:56', '2024-05-05 20:16:56'),
(39, 786900, 34536, 56489236, '2024-05-05 20:16:56', '2024-05-05 20:16:56'),
(40, 786900, 34536, 56489278, '2024-05-05 20:16:56', '2024-05-05 20:16:56'),
(41, 786901, 34537, 56489221, '2024-05-05 20:17:02', '2024-05-05 20:17:02'),
(42, 786901, 34537, 56489224, '2024-05-05 20:17:02', '2024-05-05 20:17:02'),
(43, 786901, 34537, 56489245, '2024-05-05 20:17:02', '2024-05-05 20:17:02'),
(44, 786901, 34537, 56489236, '2024-05-05 20:17:02', '2024-05-05 20:17:02'),
(45, 786901, 34537, 56489278, '2024-05-05 20:17:02', '2024-05-05 20:17:02'),
(46, 786898, 34538, 56489222, '2024-05-05 20:28:22', '2024-05-05 20:28:22'),
(47, 786898, 34538, 56489225, '2024-05-05 20:28:22', '2024-05-05 20:28:22'),
(48, 786898, 34538, 56489243, '2024-05-05 20:28:22', '2024-05-05 20:28:22'),
(49, 786898, 34538, 56489250, '2024-05-05 20:28:22', '2024-05-05 20:28:22'),
(50, 786898, 34538, 56489280, '2024-05-05 20:28:22', '2024-05-05 20:28:22'),
(51, 786899, 34539, 56489222, '2024-05-05 20:28:39', '2024-05-05 20:28:39'),
(52, 786899, 34539, 56489225, '2024-05-05 20:28:39', '2024-05-05 20:28:39'),
(53, 786899, 34539, 56489243, '2024-05-05 20:28:39', '2024-05-05 20:28:39'),
(54, 786899, 34539, 56489250, '2024-05-05 20:28:39', '2024-05-05 20:28:39'),
(55, 786899, 34539, 56489280, '2024-05-05 20:28:39', '2024-05-05 20:28:39'),
(56, 786896, 34540, 56489222, '2024-05-05 20:31:01', '2024-05-05 20:31:01'),
(57, 786896, 34540, 56489243, '2024-05-05 20:31:01', '2024-05-05 20:31:01'),
(58, 786896, 34540, 56489237, '2024-05-05 20:31:01', '2024-05-05 20:31:01'),
(59, 786896, 34540, 56489259, '2024-05-05 20:31:01', '2024-05-05 20:31:01'),
(60, 786897, 34541, 56489222, '2024-05-05 20:31:11', '2024-05-05 20:31:11'),
(61, 786897, 34541, 56489243, '2024-05-05 20:31:11', '2024-05-05 20:31:11'),
(62, 786897, 34541, 56489237, '2024-05-05 20:31:11', '2024-05-05 20:31:11'),
(63, 786897, 34541, 56489259, '2024-05-05 20:31:11', '2024-05-05 20:31:11'),
(64, 786896, 34542, 56489244, '2024-05-05 21:00:26', '2024-05-05 21:00:26'),
(65, 786896, 34542, 56489259, '2024-05-05 21:00:26', '2024-05-05 21:00:26'),
(66, 786896, 34542, 56489280, '2024-05-05 21:00:26', '2024-05-05 21:00:26'),
(67, 786896, 34542, 56489236, '2024-05-05 21:00:26', '2024-05-05 21:00:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `advising`
--
ALTER TABLE `advising`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_of_advv` (`admin_id`),
  ADD KEY `student_of_advv` (`student_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profesor_of_course` (`professor_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `advising_of_marks` (`advising_id`),
  ADD KEY `course_of_grade` (`course_id`),
  ADD KEY `admin_of_set_the_mark` (`admin_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_of_notice` (`student_id`);

--
-- Indexes for table `notice_messages`
--
ALTER TABLE `notice_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notice_of_message` (`notice_id`),
  ADD KEY `student_of_notices` (`admin_id`),
  ADD KEY `student_of_message` (`student_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `student_courses`
--
ALTER TABLE `student_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_of_adv` (`student_id`),
  ADD KEY `course_adv` (`course_id`),
  ADD KEY `adv_` (`advising_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49881;

--
-- AUTO_INCREMENT for table `advising`
--
ALTER TABLE `advising`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34543;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56489281;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34251;

--
-- AUTO_INCREMENT for table `notice_messages`
--
ALTER TABLE `notice_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=786904;

--
-- AUTO_INCREMENT for table `student_courses`
--
ALTER TABLE `student_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advising`
--
ALTER TABLE `advising`
  ADD CONSTRAINT `admin_of_advv` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_of_advv` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `profesor_of_course` FOREIGN KEY (`professor_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `admin_of_set_the_mark` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `advising_of_marks` FOREIGN KEY (`advising_id`) REFERENCES `advising` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_of_grade` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notices`
--
ALTER TABLE `notices`
  ADD CONSTRAINT `student_of_notice` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notice_messages`
--
ALTER TABLE `notice_messages`
  ADD CONSTRAINT `admin_of_message` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notice_of_message` FOREIGN KEY (`notice_id`) REFERENCES `notices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_of_message` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_courses`
--
ALTER TABLE `student_courses`
  ADD CONSTRAINT `adv_` FOREIGN KEY (`advising_id`) REFERENCES `advising` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_adv` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_of_adv` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
