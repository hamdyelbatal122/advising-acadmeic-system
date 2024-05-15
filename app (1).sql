-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 07:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `profession` text NOT NULL,
  `role_name` text NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `full_name`, `email`, `image`, `profession`, `role_name`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(49874, 'Abdel Wahab Kamel', 'Prof. Dr. Abdel Wahab Kamel Al-Sammak', 'admin@cis.edu', '/uploads/admins/1715251721.jpg', 'Supervisor of the Computer Science Department', 'Admin', NULL, '$2y$12$lHSHv/W5Fl4M/Fz7BhfKBe.wCR/qda8ODuHypjH3wP6IbmH7DfoYe', 'X9cFIJ7iHrQMvEhbktvhORpLXJKDDj5aE6Nfbh4Va1kJMg5iDVYLwTW4AYrL', '2024-05-01 11:03:54', '2024-05-09 17:47:53'),
(49875, 'Hani Muhammd', 'Prof. Dr. Hani Muhammad Al-Salamouni', 'dr_hani@cis.edu', '/uploads/admins/1715251550.jpeg', 'Vice Dean of the University', 'Professor', NULL, '$2y$12$5qQv0DD.D9CAvSxu9Qi3YuNJpxHU2rk6tj797AFP12/dcAApvwY7i', NULL, '2024-05-05 17:32:49', '2024-05-09 11:54:54'),
(49876, 'Kamal Hashem', 'Dr. Kamal Hashem Hafni', 'dr_kamal@cis.edu', NULL, 'Supervisor of the Business Information Systems Department', 'Professor', NULL, '$2y$12$cnlvjrKRoVxIXHZtA9llg.fPryyNtrIaOCvj2oVwLHt9dGaHOrE1u', NULL, '2024-05-05 17:31:38', '2024-05-09 09:42:09'),
(49878, 'Islam Omar', 'Dr. Islam Omar Hassan Khashaba', 'dr_asmaa@cis.edu', '/uploads/admins/1715251528.jpg', 'Supervisor of the Business Administration Department', 'Professor', NULL, '$2y$12$/0RbyiLZafVG1NAfn2NVwuofopKcItEfrrNy4z4pWSm/OSaIzmeUu', NULL, '2024-05-05 17:35:39', '2024-05-15 11:07:10'),
(49879, 'Rasha Kamal', 'Dr. Rasha Kamal', 'dr_rasha@cis.edu', NULL, 'Supervisor of the Accounting Department', 'Professor', NULL, '$2y$12$LCsKofIN4cphnulofc5rn.7tnB.PWJKio8hj.M0IBv3bo/ZUBSzWe', NULL, '2024-05-06 01:47:55', '2024-05-15 11:07:16'),
(49883, 'Mahmoud Abd Elhameed', 'Dr. Mahmoud Mohamed Abdel Hamid', 'dr_mahoud@cis.edu', NULL, 'Professor', 'Professor', NULL, '$2y$12$9W0cA/oqI.ewJM9J/NRP/.nMF1lAHmtHm46hfhM3Utwr0.ba79Rja', NULL, '2024-05-05 17:31:04', '2024-05-15 11:07:30'),
(49885, 'Dina Mahmoud', 'Dr. Dina Mahmoud Gharib Muhammad', 'dr_dina@cis.edu', NULL, 'Professor', 'Professor', NULL, '$2y$12$9vaJVbv.4Vs7hMNZuqo3X.u5d0y04IyysTvT9gZRrE97OzP4NuMqO', NULL, '2024-05-09 11:46:37', '2024-05-09 11:46:37'),
(49886, 'Shaima Ibrahim', 'Dr. Shaima Ibrahim', 'dr_shaima@cis.edu', NULL, 'Professor', 'Professor', NULL, '$2y$12$tWiopYw7TbSIO0ZU.y18UuOI2UfbTU0.TkNaj8OdmYFJ6Wv2zdfqq', NULL, '2024-05-09 11:47:40', '2024-05-09 11:47:40'),
(49888, 'Shadi Yahya', 'Prof. Shadi Yahya Al-Mashad', 'dr_shady@cis.edu', NULL, 'Assistant Professor', 'Professor', NULL, '$2y$12$o5gLH2/kovQsfHxONpbt0el6O6BZ/zwVDMD//m3UqqyIb7kb2CpJW', NULL, '2024-05-10 19:28:51', '2024-05-10 19:28:51'),
(49889, 'Hussein Karam', 'Prof. Dr. Hussein Karam Hussein', 'dr_hussein@cis.edu', NULL, 'Assistant Professor', 'Professor', NULL, '$2y$12$JAQpKiGVf9KTmF88QpUF7ezY5LWCD8/jCWVz/AxlthDJAQysERLeG', NULL, '2024-05-10 19:29:48', '2024-05-10 19:29:48'),
(49890, 'Naglaa Mohamed', 'Prof. Dr. Naglaa Mohamed Reda', 'dr_naglaa@cis.edu', NULL, 'Assistant Professor', 'Professor', NULL, '$2y$12$SvGM6SMp9SuLDGajY8RRR./oHABBJYaCnVKH4Y2qKXY7l096boh4y', NULL, '2024-05-10 19:32:09', '2024-05-10 19:32:09'),
(49891, 'Osama Muhammad', 'Dr. Osama Muhammad Al-Sayed Mowafi', 'de_osama@cis.edu', NULL, 'Professor', 'Professor', NULL, '$2y$12$3mllUkEXzJTxQD4cL143ceQLcy39yHBapNSslN3L9huDsIVk/MiXm', NULL, '2024-05-10 19:33:14', '2024-05-10 19:33:14'),
(49892, 'Sherine Ahmed', 'Dr. Sherine Ahmed Mohamed Hussein', 'dr_sherine@cis.edu', NULL, 'Professor', 'Professor', NULL, '$2y$12$Hp4VmERN0csmDF4MW8DXDu9rsRtJmIl5q402SUQi1NuZwHzyPjJHC', NULL, '2024-05-10 19:33:51', '2024-05-10 19:33:51'),
(49893, 'Gamal Abdel Rahim', 'Dr. Gamal Abdel Rahim Tharwat', 'dr_gamal@cis.edu', NULL, 'Professor', 'Professor', NULL, '$2y$12$tKx62BuG6K/rphPezX0HOuB8xokGq4VkGgKlfjVzX9cQIKhh8AMfi', NULL, '2024-05-10 19:38:28', '2024-05-10 19:38:28');

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
(34558, 786897, 1, 1, '2024', 'completed', 49874, '2024-05-15 11:12:24', '2024-05-15 12:23:01'),
(34559, 786898, 1, 1, '2024', 'completed', 49874, '2024-05-15 11:13:43', '2024-05-15 12:23:14'),
(34562, 786896, 1, 1, '2024', 'completed', 49874, '2024-05-15 11:58:46', '2024-05-15 12:22:47'),
(34563, 786899, 1, 1, '2024', 'completed', 49874, '2024-05-15 12:15:18', '2024-05-15 12:23:31'),
(34564, 786896, 1, 2, '2024', 'active', 49874, '2024-05-15 12:24:10', '2024-05-15 12:24:10');

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
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:5:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:3:\"key\";s:1:\"d\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:28:{i:0;a:5:{s:1:\"a\";i:16;s:1:\"b\";s:13:\"View Students\";s:1:\"c\";s:8:\"Students\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:1;a:5:{s:1:\"a\";i:17;s:1:\"b\";s:11:\"Add Student\";s:1:\"c\";s:8:\"Students\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:2;a:5:{s:1:\"a\";i:18;s:1:\"b\";s:12:\"Edit Student\";s:1:\"c\";s:8:\"Students\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:3;a:5:{s:1:\"a\";i:19;s:1:\"b\";s:14:\"Delete Student\";s:1:\"c\";s:8:\"Students\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:4;a:5:{s:1:\"a\";i:20;s:1:\"b\";s:12:\"View Courses\";s:1:\"c\";s:7:\"Courses\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:5;a:5:{s:1:\"a\";i:21;s:1:\"b\";s:10:\"Add Course\";s:1:\"c\";s:7:\"Courses\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:6;a:5:{s:1:\"a\";i:22;s:1:\"b\";s:11:\"Edit Course\";s:1:\"c\";s:7:\"Courses\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:7;a:5:{s:1:\"a\";i:23;s:1:\"b\";s:13:\"Delete Course\";s:1:\"c\";s:7:\"Courses\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:8;a:5:{s:1:\"a\";i:24;s:1:\"b\";s:11:\"View Admins\";s:1:\"c\";s:6:\"Admins\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:9;a:5:{s:1:\"a\";i:25;s:1:\"b\";s:9:\"Add Admin\";s:1:\"c\";s:6:\"Admins\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:10;a:5:{s:1:\"a\";i:26;s:1:\"b\";s:10:\"Edit Admin\";s:1:\"c\";s:6:\"Admins\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:11;a:5:{s:1:\"a\";i:27;s:1:\"b\";s:12:\"Delete Admin\";s:1:\"c\";s:6:\"Admins\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:12;a:5:{s:1:\"a\";i:28;s:1:\"b\";s:14:\"View Advisings\";s:1:\"c\";s:8:\"Advising\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:13;a:5:{s:1:\"a\";i:29;s:1:\"b\";s:12:\"Add Advising\";s:1:\"c\";s:8:\"Advising\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:14;a:5:{s:1:\"a\";i:30;s:1:\"b\";s:13:\"Edit Advising\";s:1:\"c\";s:8:\"Advising\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:15;a:5:{s:1:\"a\";i:31;s:1:\"b\";s:15:\"Delete Advising\";s:1:\"c\";s:8:\"Advising\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:16;a:5:{s:1:\"a\";i:32;s:1:\"b\";s:12:\"View Notices\";s:1:\"c\";s:7:\"Notices\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:17;a:5:{s:1:\"a\";i:33;s:1:\"b\";s:10:\"Add Notice\";s:1:\"c\";s:7:\"Notices\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:18;a:5:{s:1:\"a\";i:34;s:1:\"b\";s:11:\"Edit Notice\";s:1:\"c\";s:7:\"Notices\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:19;a:5:{s:1:\"a\";i:35;s:1:\"b\";s:13:\"Delete Notice\";s:1:\"c\";s:7:\"Notices\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:20;a:5:{s:1:\"a\";i:36;s:1:\"b\";s:10:\"View Marks\";s:1:\"c\";s:5:\"Marks\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:21;a:5:{s:1:\"a\";i:37;s:1:\"b\";s:8:\"Add Mark\";s:1:\"c\";s:5:\"Marks\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:22;a:5:{s:1:\"a\";i:38;s:1:\"b\";s:9:\"Edit Mark\";s:1:\"c\";s:5:\"Marks\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:23;a:5:{s:1:\"a\";i:39;s:1:\"b\";s:11:\"Delete Mark\";s:1:\"c\";s:5:\"Marks\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:24;a:5:{s:1:\"a\";i:40;s:1:\"b\";s:10:\"View Roles\";s:1:\"c\";s:5:\"Roles\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:25;a:5:{s:1:\"a\";i:41;s:1:\"b\";s:8:\"Add Role\";s:1:\"c\";s:5:\"Roles\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:26;a:5:{s:1:\"a\";i:42;s:1:\"b\";s:9:\"Edit Role\";s:1:\"c\";s:5:\"Roles\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}i:27;a:5:{s:1:\"a\";i:43;s:1:\"b\";s:11:\"Delete Role\";s:1:\"c\";s:5:\"Roles\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:6;i:1;i:7;i:2;i:9;}}}s:5:\"roles\";a:3:{i:0;a:3:{s:1:\"a\";i:6;s:1:\"b\";s:5:\"Admin\";s:1:\"d\";s:5:\"admin\";}i:1;a:3:{s:1:\"a\";i:7;s:1:\"b\";s:9:\"Professor\";s:1:\"d\";s:5:\"admin\";}i:2;a:3:{s:1:\"a\";i:9;s:1:\"b\";s:10:\"supervisor\";s:1:\"d\";s:5:\"admin\";}}}', 1715867239);

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
(56489220, 'Mathematics 1', '2210', 3, 49875, 'Saturday', '9:00 AM', 2, 1, 'Sunday', '1:00 PM', 1, '2024-05-18', '2024-05-05 17:37:05', '2024-05-05 17:37:05'),
(56489221, 'Mathematics 2', '2211', 3, 49875, 'Saturday', '11:00 AM', 2, 1, 'Sunday', '3:00 PM', 1, '2024-05-19', '2024-05-05 17:37:36', '2024-05-05 17:37:36'),
(56489222, 'Mathematics 3', '2212', 3, 49875, 'Saturday', '3:00 PM', 2, 1, 'Tuesday', '8:00 AM', 1, '2024-05-30', '2024-05-05 17:38:04', '2024-05-05 17:38:04'),
(56489223, 'Physics 1', '3379', 3, 49878, 'Tuesday', '10:00 AM', 2, 1, 'Sunday', '8:00 AM', 1, '2024-06-05', '2024-05-05 17:38:58', '2024-05-05 17:38:58'),
(56489224, 'Physics 2', '3381', 3, 49878, 'Sunday', '11:00 AM', 3, 1, 'Wednesday', '3:00 PM', 1, '2024-06-08', '2024-05-05 17:39:44', '2024-05-05 17:39:44'),
(56489225, 'Physics 3', '3382', 3, 49878, 'Sunday', '1:00 PM', 3, 1, 'Wednesday', '4:00 PM', 1, '2024-06-11', '2024-05-05 17:39:44', '2024-05-05 17:39:44'),
(56489236, 'Computer Science CS20', '8134', 3, 49883, 'Saturday', '3:00 PM', 2, 1, 'Monday', '8:00 AM', 1, '2024-05-29', '2024-05-05 17:55:16', '2024-05-05 17:55:16'),
(56489237, 'C Programing', '4133', 3, 49883, 'Tuesday', '12:00 PM', 2, 1, 'Tuesday', '9:00 AM', 1, '2024-05-22', '2024-05-05 17:55:55', '2024-05-05 17:55:55'),
(56489239, 'Data Base 1', '4135', 3, 49883, 'Monday', '12:00 PM', 2, 1, 'Saturday', '2:00 PM', 1, '2024-05-30', '2024-05-05 17:57:32', '2024-05-15 11:07:45'),
(56489240, 'Data Base 2', '4136', 3, 49883, 'Monday', '2:00 PM', 2, 1, 'Saturday', '3:00 PM', 1, '2024-05-30', '2024-05-05 17:57:32', '2024-05-05 17:58:36'),
(56489243, 'Data Base 3', '4137', 3, 49883, 'Tuesday', '2:00 PM', 2, 1, 'Sunday', '3:00 PM', 1, '2024-05-30', '2024-05-05 17:57:32', '2024-05-05 17:58:36'),
(56489244, 'Computer Security', '1266', 2, 49883, 'Monday', '2:00 PM', 2, 1, 'Tuesday', '2:00 PM', 1, '2024-05-30', '2024-05-05 18:27:21', '2024-05-05 18:27:21'),
(56489245, 'Statistics and probability', '1440', 3, 49876, 'Saturday', '2:00 PM', 2, 1, 'Saturday', '3:00 PM', 1, '2024-06-26', '2024-05-05 17:43:56', '2024-05-05 17:43:56'),
(56489246, 'communication skills', '1439', 2, 49876, 'Saturday', '12:00 PM', 1, 0, NULL, NULL, NULL, '2024-05-14', '2024-05-05 17:42:52', '2024-05-05 17:42:52'),
(56489247, 'Accounting Principles', '1436', 2, 49876, 'Tuesday', '1:00 PM', 2, 0, NULL, NULL, NULL, '2024-06-02', '2024-05-05 17:42:05', '2024-05-05 17:42:05'),
(56489248, 'Electronics 1', '3383', 3, 49878, 'Wednesday', '11:00 AM', 2, 1, 'Saturday', '4:00 PM', 1, '2024-06-19', '2024-05-05 17:40:43', '2024-05-05 17:40:43'),
(56489249, 'Electronics 2', '3384', 3, 49878, 'Wednesday', '11:00 AM', 2, 1, 'Saturday', '4:00 PM', 1, '2024-06-19', '2024-05-05 17:40:43', '2024-05-05 17:40:43'),
(56489250, 'Electronics 3', '3385', 3, 49878, 'Wednesday', '11:00 AM', 2, 1, 'Saturday', '4:00 PM', 1, '2024-06-19', '2024-05-05 17:40:43', '2024-05-05 17:40:43'),
(56489259, 'Computer Security', '1267', 3, 49883, 'Sunday', '3:00 PM', 2, 1, 'Tuesday', '3:00 PM', 1, '2024-06-30', '2024-05-05 18:27:21', '2024-05-15 11:11:23'),
(56489278, 'Data Structure 1', '4134', 3, 49883, 'Saturday', '1:00 PM', 2, 0, NULL, NULL, NULL, '2024-05-23', '2024-05-05 17:56:44', '2024-05-15 11:10:16'),
(56489279, 'Data Structure 2', '4137', 3, 49883, 'Saturday', '1:00 PM', 2, 0, NULL, NULL, NULL, '2024-05-23', '2024-05-05 17:56:44', '2024-05-05 17:56:44'),
(56489280, 'Data Structure 3', '4138', 3, 49883, 'Saturday', '1:00 PM', 2, 0, NULL, NULL, NULL, '2024-05-23', '2024-05-05 17:56:44', '2024-05-05 17:56:44'),
(56489281, 'Mangement', '8941', 1, 49878, 'Sunday', '10:00 AM', 2, 0, 'Chose A Day', 'Chose A Time', NULL, '2024-06-20', '2024-05-15 11:15:50', '2024-05-15 11:15:50'),
(56489282, 'Commercial law', '9244', 2, 49879, 'Wednesday', '2:00 PM', 2, 0, 'Chose A Day', 'Chose A Time', NULL, '2024-06-25', '2024-05-15 11:18:11', '2024-05-15 11:18:11'),
(56489283, 'Decision support systems', '9822', 1, 49893, 'Sunday', '9:00 AM', 2, 0, 'Chose A Day', 'Chose A Time', NULL, '2024-06-13', '2024-05-15 11:19:54', '2024-05-15 11:19:54');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(54, 34562, 56489220, '100', 49874, '2024-05-15 12:22:47', '2024-05-15 12:22:47'),
(55, 34562, 56489223, '90', 49874, '2024-05-15 12:22:47', '2024-05-15 12:22:47'),
(56, 34562, 56489239, '80', 49874, '2024-05-15 12:22:47', '2024-05-15 12:22:47'),
(57, 34562, 56489248, '70', 49874, '2024-05-15 12:22:47', '2024-05-15 12:22:47'),
(58, 34562, 56489278, '60', 49874, '2024-05-15 12:22:47', '2024-05-15 12:22:47'),
(59, 34558, 56489220, '90', 49874, '2024-05-15 12:23:01', '2024-05-15 12:23:01'),
(60, 34558, 56489223, '80', 49874, '2024-05-15 12:23:01', '2024-05-15 12:23:01'),
(61, 34558, 56489239, '70', 49874, '2024-05-15 12:23:01', '2024-05-15 12:23:01'),
(62, 34558, 56489248, '60', 49874, '2024-05-15 12:23:01', '2024-05-15 12:23:01'),
(63, 34558, 56489278, '50', 49874, '2024-05-15 12:23:01', '2024-05-15 12:23:01'),
(64, 34559, 56489220, '90', 49874, '2024-05-15 12:23:14', '2024-05-15 12:23:14'),
(65, 34559, 56489223, '80', 49874, '2024-05-15 12:23:14', '2024-05-15 12:23:14'),
(66, 34559, 56489239, '70', 49874, '2024-05-15 12:23:14', '2024-05-15 12:23:14'),
(67, 34559, 56489248, '60', 49874, '2024-05-15 12:23:14', '2024-05-15 12:23:14'),
(68, 34559, 56489278, '50', 49874, '2024-05-15 12:23:14', '2024-05-15 12:23:14'),
(69, 34563, 56489220, '85', 49874, '2024-05-15 12:23:31', '2024-05-15 12:23:31'),
(70, 34563, 56489223, '90', 49874, '2024-05-15 12:23:31', '2024-05-15 12:23:31'),
(71, 34563, 56489239, '70', 49874, '2024-05-15 12:23:31', '2024-05-15 12:23:31'),
(72, 34563, 56489278, '100', 49874, '2024-05-15 12:23:31', '2024-05-15 12:23:31'),
(73, 34563, 56489250, '50', 49874, '2024-05-15 12:23:31', '2024-05-15 12:23:31');

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
(9, '2024_05_01_002219_create_users_table', 5),
(11, '2024_05_07_214712_create_permission_tables', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(6, 'App\\Models\\Admin', 49874),
(6, 'App\\Models\\Admin', 49877),
(6, 'App\\Models\\Admin', 49884),
(7, 'App\\Models\\Admin', 49875),
(7, 'App\\Models\\Admin', 49876),
(7, 'App\\Models\\Admin', 49878),
(7, 'App\\Models\\Admin', 49879),
(7, 'App\\Models\\Admin', 49883),
(7, 'App\\Models\\Admin', 49885),
(7, 'App\\Models\\Admin', 49886),
(7, 'App\\Models\\Admin', 49888),
(7, 'App\\Models\\Admin', 49889),
(7, 'App\\Models\\Admin', 49890),
(7, 'App\\Models\\Admin', 49891),
(7, 'App\\Models\\Admin', 49892),
(7, 'App\\Models\\Admin', 49893),
(9, 'App\\Models\\Admin', 49887);

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
(34250, 786896, 'General', 'Problem With my supervisor, not answer', 'closed', '2024-05-05 20:54:28', '2024-05-05 20:58:35'),
(34251, 786896, 'Academic', 'rhbtycb', 'active', '2024-05-09 18:25:38', '2024-05-09 18:25:38');

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
(23, 34250, NULL, 49874, 'we find this issue has been solved&nbsp;<p>we will make it close and you can\'t replay to it&nbsp;</p><p>Please feel free to contact us if you have any questions<br></p><p><p>Best Regards</p><p>Cis Support Team&nbsp;</p></p>', '2024-05-05 20:58:35', '2024-05-05 20:58:35'),
(24, 34251, NULL, NULL, 'vjc ntivnitv', '2024-05-09 18:25:38', '2024-05-09 18:25:38');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `key` text NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `key`, `guard_name`, `created_at`, `updated_at`) VALUES
(16, 'View Students', 'Students', 'admin', NULL, NULL),
(17, 'Add Student', 'Students', 'admin', NULL, NULL),
(18, 'Edit Student', 'Students', 'admin', NULL, NULL),
(19, 'Delete Student', 'Students', 'admin', NULL, NULL),
(20, 'View Courses', 'Courses', 'admin', NULL, NULL),
(21, 'Add Course', 'Courses', 'admin', NULL, NULL),
(22, 'Edit Course', 'Courses', 'admin', NULL, NULL),
(23, 'Delete Course', 'Courses', 'admin', NULL, NULL),
(24, 'View Admins', 'Admins', 'admin', NULL, NULL),
(25, 'Add Admin', 'Admins', 'admin', NULL, NULL),
(26, 'Edit Admin', 'Admins', 'admin', NULL, NULL),
(27, 'Delete Admin', 'Admins', 'admin', NULL, NULL),
(28, 'View Advisings', 'Advising', 'admin', NULL, NULL),
(29, 'Add Advising', 'Advising', 'admin', NULL, NULL),
(30, 'Edit Advising', 'Advising', 'admin', NULL, NULL),
(31, 'Delete Advising', 'Advising', 'admin', NULL, NULL),
(32, 'View Notices', 'Notices', 'admin', NULL, NULL),
(33, 'Add Notice', 'Notices', 'admin', NULL, NULL),
(34, 'Edit Notice', 'Notices', 'admin', NULL, NULL),
(35, 'Delete Notice', 'Notices', 'admin', NULL, NULL),
(36, 'View Marks', 'Marks', 'admin', NULL, NULL),
(37, 'Add Mark', 'Marks', 'admin', NULL, NULL),
(38, 'Edit Mark', 'Marks', 'admin', NULL, NULL),
(39, 'Delete Mark', 'Marks', 'admin', NULL, NULL),
(40, 'View Roles', 'Roles', 'admin', NULL, NULL),
(41, 'Add Role', 'Roles', 'admin', NULL, NULL),
(42, 'Edit Role', 'Roles', 'admin', NULL, NULL),
(43, 'Delete Role', 'Roles', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(6, 'Admin', 'admin', '2024-05-07 22:18:29', '2024-05-07 22:18:29'),
(7, 'Professor', 'admin', '2024-05-07 22:24:09', '2024-05-07 22:24:09'),
(9, 'supervisor', 'admin', '2024-05-07 22:28:27', '2024-05-09 14:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(16, 6),
(16, 7),
(16, 9),
(17, 6),
(17, 7),
(17, 9),
(18, 6),
(18, 7),
(18, 9),
(19, 6),
(19, 7),
(19, 9),
(20, 6),
(20, 7),
(20, 9),
(21, 6),
(21, 7),
(21, 9),
(22, 6),
(22, 7),
(22, 9),
(23, 6),
(23, 7),
(23, 9),
(24, 6),
(24, 7),
(24, 9),
(25, 6),
(25, 7),
(25, 9),
(26, 6),
(26, 7),
(26, 9),
(27, 6),
(27, 7),
(27, 9),
(28, 6),
(28, 7),
(28, 9),
(29, 6),
(29, 7),
(29, 9),
(30, 6),
(30, 7),
(30, 9),
(31, 6),
(31, 7),
(31, 9),
(32, 6),
(32, 7),
(32, 9),
(33, 6),
(33, 7),
(33, 9),
(34, 6),
(34, 7),
(34, 9),
(35, 6),
(35, 7),
(35, 9),
(36, 6),
(36, 7),
(36, 9),
(37, 6),
(37, 7),
(37, 9),
(38, 6),
(38, 7),
(38, 9),
(39, 6),
(39, 7),
(39, 9),
(40, 6),
(40, 7),
(40, 9),
(41, 6),
(41, 7),
(41, 9),
(42, 6),
(42, 7),
(42, 9),
(43, 6),
(43, 7),
(43, 9);

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
('GVdXtQKQhARTXKYeiggoSbw1aBlZOi5gP1zid59l', 49874, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36 Edg/124.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoib0pINkdjZG51WTFpajRoN0hZakw0NjgyMmlXWFNFeFBJcmNVbU5aMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQvYWR2aXNpbmcvc2hvdy8zNDU1OCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDk4NzQ7czo1NDoibG9naW5fc3R1ZGVudF81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc4Njg5Njt9', 1715795228);

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
  `supervisor_id` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `currant_password` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `admin_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `nationality`, `national_id`, `gender`, `birth`, `blood`, `religion`, `phone`, `address`, `college`, `level`, `gpa`, `supervisor_id`, `email_verified_at`, `password`, `currant_password`, `remember_token`, `admin_id`, `created_at`, `updated_at`) VALUES
(786896, 'Hamdy', 'Mohamed', 'Elbatal', 'HamdyElbatal@cis.edu', 'Egypt', '29701151202777', 'male', '1997-01-15', 'A+', 'Muslim', '01003118623', 'Mansoura,Dakahila, Egypt', 'Computer science', '1', '3.4', NULL, NULL, '$2y$12$m9FCXqzDvM9.zjtMnsUHeOKZ4ex7bIVGtuf.wZnBTO7Lf1BDoxCOO', '22222222', 'TvHjiDeCQS3S8V2164IJ1FmiqlZgjF32A3y4Nb0cJBJbxETF7buU9PVEW2aN', 49874, '2024-05-01 12:06:41', '2024-05-15 12:22:47'),
(786897, 'Ahmed', 'Ashour', 'Abdaziz', 'ahmedashour@cis.edu', 'Egypt', '30303100040571', 'male', '2024-05-05', 'A+', 'Muslim', '01050553969', 'Elnozha , Cairo , Egypt', 'Computer science', '1', '3', NULL, NULL, '$2y$12$m8WQwGX6U8JYaVF1xq9qKufmDkT75EohuZjvzypA4/j0qONjn4K2O', '12345678', '3WSsRUq02t2WYRxQLWEMmNrPHOZURF6Y5kC39UC5hzeWHCbioipvOHm0BbRP', 49874, '2024-05-05 10:35:58', '2024-05-15 12:23:01'),
(786898, 'Ebrahim', 'Ali', 'mohamed', 'Ebrahimmohamed@cis.edu', 'Egypt', '20301174238776', 'male', '2003-01-01', 'A+', 'Muslim', '01006738134', 'Aim Shams , Cairo , Egypt', 'computer science', '1', '3', NULL, NULL, '$2y$12$HMvV/6gUYG.SgGjozH/P2ew0X4lFi7WaoX7JdydIxt9GBTppnP6Iy', 'by5x612f', NULL, 49874, '2024-05-05 16:25:41', '2024-05-15 12:23:14'),
(786899, 'Mohamed', 'Ahmed', 'Amar', 'MohamedAmar@cis.edu', 'Egypt', '30301194232888', 'male', '2002-01-01', 'AB+', 'Muslim', '01065324040', 'Obour , Cairo , Egypt', 'computer science', '1', '3.35', NULL, NULL, '$2y$12$gUfGCxAyJIuoAlSocDQenOPBeUVPpPkT4Y5Gf7UYw6TjHdgSr8p2S', 'rx85idu1', NULL, 49874, '2024-05-05 16:28:42', '2024-05-15 12:23:31'),
(786900, 'Mohamed', 'Hani', 'Mohamed', 'MohamedMohamed@cis.edu', 'Egypt', '20307722656444', 'male', '2002-06-14', 'AB+', 'Muslim', '01227621967', '6 October , Giza , Egypt', 'computer science', '1', '0', NULL, NULL, '$2y$12$c5yUFAaDYuF27Xn.71EQwOpz/vvPLiYljaPGhFt4KccYzA4HHSSLS', 'kl1avzpe', NULL, 49874, '2024-05-05 16:30:14', '2024-05-06 01:44:47'),
(786901, 'Zaid', 'Osama', 'Mohamed', 'ZaidMohamed@cis.edu', 'Egypt', '303077885432783', 'male', '2002-12-02', 'O+', 'Muslim', '010021248823', 'Ramses , Cairo , Egypt', 'computer science', '1', '0', NULL, NULL, '$2y$12$2gsqbb1zhJN9Gb22f87v/exkbYBuY5TY7/C4UmsZ5ANwdajOgIUpC', 'f5fn18h3', NULL, 49874, '2024-05-05 16:33:30', '2024-05-05 16:33:30'),
(786902, 'Fady', 'Adeeb', 'Fady', 'FadyFady@cis.edu', 'Egypt', '3020771739213', 'male', '2003-01-01', 'AB+', 'Christian', '0100235894', 'Nasr City , Cairo , Egypt', 'Computer Science', '1', '0', NULL, NULL, '$2y$12$GC9C3LlCs8nWfqdtrn56LO6zhtuizEMt4CpwpHEdM/jLgt4XEu22C', '0t45lrno', NULL, 49874, '2024-05-05 16:35:38', '2024-05-05 16:35:38'),
(786903, 'Bishoy', 'Samesh', 'Bishoy', 'BishoyBishoy@cis.edu', 'Egypt', '30301185202333', 'male', '2002-01-05', 'B+', 'Christian', '01003469954', 'Giza , Giza , Cairo', 'Computer Science', '1', '0', NULL, NULL, '$2y$12$MZsx6QMxLQYuui2mZLjb1uxYyo6.zZB5bgRhj0aX9xHQ/stpBaU4O', '674g0yo8', NULL, 49874, '2024-05-05 16:38:01', '2024-05-05 16:38:01');

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
(127, 786897, 34558, 56489220, '2024-05-15 14:12:24', '2024-05-15 14:12:24'),
(128, 786897, 34558, 56489223, '2024-05-15 14:12:24', '2024-05-15 14:12:24'),
(129, 786897, 34558, 56489239, '2024-05-15 14:12:24', '2024-05-15 14:12:24'),
(130, 786897, 34558, 56489248, '2024-05-15 14:12:24', '2024-05-15 14:12:24'),
(131, 786897, 34558, 56489278, '2024-05-15 14:12:24', '2024-05-15 14:12:24'),
(132, 786898, 34559, 56489220, '2024-05-15 14:13:43', '2024-05-15 14:13:43'),
(133, 786898, 34559, 56489223, '2024-05-15 14:13:43', '2024-05-15 14:13:43'),
(134, 786898, 34559, 56489239, '2024-05-15 14:13:43', '2024-05-15 14:13:43'),
(135, 786898, 34559, 56489248, '2024-05-15 14:13:43', '2024-05-15 14:13:43'),
(136, 786898, 34559, 56489278, '2024-05-15 14:13:43', '2024-05-15 14:13:43'),
(170, 786896, 34562, 56489220, '2024-05-15 15:11:46', '2024-05-15 15:11:46'),
(171, 786896, 34562, 56489223, '2024-05-15 15:11:46', '2024-05-15 15:11:46'),
(172, 786896, 34562, 56489239, '2024-05-15 15:11:46', '2024-05-15 15:11:46'),
(173, 786896, 34562, 56489248, '2024-05-15 15:11:46', '2024-05-15 15:11:46'),
(174, 786896, 34562, 56489278, '2024-05-15 15:11:46', '2024-05-15 15:11:46'),
(175, 786899, 34563, 56489220, '2024-05-15 15:15:18', '2024-05-15 15:15:18'),
(176, 786899, 34563, 56489223, '2024-05-15 15:15:18', '2024-05-15 15:15:18'),
(177, 786899, 34563, 56489239, '2024-05-15 15:15:18', '2024-05-15 15:15:18'),
(178, 786899, 34563, 56489278, '2024-05-15 15:15:18', '2024-05-15 15:15:18'),
(179, 786899, 34563, 56489250, '2024-05-15 15:15:18', '2024-05-15 15:15:18'),
(180, 786896, 34564, 56489221, '2024-05-15 15:24:10', '2024-05-15 15:24:10'),
(181, 786896, 34564, 56489224, '2024-05-15 15:24:10', '2024-05-15 15:24:10'),
(182, 786896, 34564, 56489240, '2024-05-15 15:24:10', '2024-05-15 15:24:10'),
(183, 786896, 34564, 56489249, '2024-05-15 15:24:10', '2024-05-15 15:24:10'),
(184, 786896, 34564, 56489279, '2024-05-15 15:24:10', '2024-05-15 15:24:10');

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
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `supervisor_data` (`supervisor_id`),
  ADD KEY `admin_data` (`admin_id`);

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49894;

--
-- AUTO_INCREMENT for table `advising`
--
ALTER TABLE `advising`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34565;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56489284;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34252;

--
-- AUTO_INCREMENT for table `notice_messages`
--
ALTER TABLE `notice_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=786906;

--
-- AUTO_INCREMENT for table `student_courses`
--
ALTER TABLE `student_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

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
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `admin_data` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `supervisor_data` FOREIGN KEY (`supervisor_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
