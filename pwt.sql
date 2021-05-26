-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 02:59 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptw`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catId`, `name`, `updated_at`, `created_at`) VALUES
(1, 'asdfa123', '2021-05-22 06:39:20', '2021-05-22 06:39:20'),
(2, '123a', '2021-05-22 06:39:38', '2021-05-22 06:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `eduId` bigint(20) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`eduId`, `userId`, `name`, `updated_at`, `created_at`) VALUES
(1, 11, '', NULL, NULL),
(2, 11, '123', '2021-05-23 14:10:41', '2021-05-23 14:10:41'),
(3, 11, '13333', '2021-05-23 14:11:28', '2021-05-23 14:11:28'),
(4, 11, '1', '2021-05-23 14:25:32', '2021-05-23 14:25:32');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventId` int(11) NOT NULL,
  `imgSrc` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventId`, `imgSrc`, `body`, `updated_at`, `created_at`) VALUES
(1, 'product/2021/05/22/owncloud.png', '<p>This is some sample content.</p><p>This is some sample content.</p><p>This is some sample content.</p><p>This is some sample content.</p><p>This is some sample content.</p><p>This is some sample content.</p><p>This is some sample content.</p><p>This is some sample content.</p>', '2021-05-22 10:50:39', '2021-05-22 10:50:39'),
(2, 'product/2021/05/23/linux.jpg', '<p>This is some sample content.</p>', '2021-05-23 15:09:54', '2021-05-23 15:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msgId` int(11) NOT NULL,
  `body` longtext NOT NULL,
  `fromUser` text NOT NULL,
  `toUser` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msgId`, `body`, `fromUser`, `toUser`, `updated_at`, `created_at`) VALUES
(1, 'asd', 'admin', 'kaito', '2021-05-21 06:24:14', '2021-05-21 06:24:14'),
(2, 'a', 'kaito', 'admin', '2021-05-21 14:31:32', '2021-05-21 14:31:32'),
(3, 'asdfawetrfawgf', 'admin', 'kaito', '2021-05-21 14:58:45', '2021-05-21 14:58:45'),
(4, 'asdf', 'k', 'r', '2021-05-21 15:18:00', '2021-05-21 15:18:00'),
(5, '123', 'k', 'r', '2021-05-21 15:18:44', '2021-05-21 15:18:44'),
(6, '111', 'k', 'r', '2021-05-21 15:19:58', '2021-05-21 15:19:58'),
(7, 'as', 'k', 'r', '2021-05-21 15:20:38', '2021-05-21 15:20:38'),
(8, '123124', 'k', 'r', '2021-05-21 15:20:48', '2021-05-21 15:20:48'),
(9, '111', 'k', 'r', '2021-05-21 15:20:55', '2021-05-21 15:20:55'),
(10, 'qa', 'admin', 'kaito', '2021-05-22 05:21:23', '2021-05-22 05:21:23'),
(11, '123', 'admin', 'kaito', '2021-05-22 05:24:18', '2021-05-22 05:24:18'),
(12, 'z', 'admin', 'kaito', '2021-05-22 05:24:45', '2021-05-22 05:24:45'),
(13, '1', 'admin', 'kaito', '2021-05-22 05:25:21', '2021-05-22 05:25:21'),
(14, '123', 'kaito', 'admin', '2021-05-22 05:26:42', '2021-05-22 05:26:42'),
(15, '11', 'kaito', 'admin', '2021-05-22 05:26:51', '2021-05-22 05:26:51'),
(16, 'asd', 'kaito', 'admin', '2021-05-22 05:30:44', '2021-05-22 05:30:44'),
(17, '123', 'kaito', 'admin', '2021-05-22 05:30:47', '2021-05-22 05:30:47'),
(18, 'a', 'admin', 'kaito', '2021-05-22 06:21:21', '2021-05-22 06:21:21'),
(19, 'ccc', 'kaito', 'admin', '2021-05-22 06:25:19', '2021-05-22 06:25:19'),
(20, 'a', 'admin', 'kaito', '2021-05-22 12:52:08', '2021-05-22 12:52:08'),
(34, '', 'admin', 'test', '2021-05-22 13:56:38', '2021-05-22 13:56:38'),
(35, 'a', 'admin', 'test', '2021-05-22 14:01:06', '2021-05-22 14:01:06'),
(36, 'asdf', 'admin', 'test', '2021-05-22 14:18:41', '2021-05-22 14:18:41'),
(37, 'cvb', 'admin', 'test', '2021-05-22 14:18:45', '2021-05-22 14:18:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` bigint(20) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgSrc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `password`, `permission`, `summary`, `email`, `experience`, `imgSrc`, `updated_at`, `created_at`) VALUES
(6, 'test', '21232f297a57a5a743894a0e4a801fc3', 'user', NULL, NULL, NULL, NULL, '2021-05-20 14:41:13', '2021-05-20 14:41:13'),
(8, 'test', 'a04ce4f25ad79ff8ba880390edfb1ab4', 'user', NULL, NULL, NULL, NULL, '2021-05-20 14:49:06', '2021-05-20 14:49:06'),
(9, 'kaito', 'e140bafee350bd3ea81f5f909ee7b5f3', 'user', NULL, NULL, NULL, NULL, '2021-05-20 14:58:16', '2021-05-20 14:58:16'),
(10, 'dd', '1aabac6d068eef6a7bad3fdf50a05cc8', 'user', NULL, NULL, NULL, NULL, '2021-05-20 15:13:37', '2021-05-20 15:13:37'),
(11, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'user', 'test123', 'test', 'test', NULL, '2021-05-22 14:56:02', '2021-05-22 14:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `workId` bigint(20) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`workId`, `userId`, `name`, `updated_at`, `created_at`) VALUES
(1, 11, 'test work admin1,  123123', NULL, NULL),
(2, 11, 'test work admin1,  123123', '2021-05-23 14:26:19', '2021-05-23 14:26:19'),
(3, 11, 'test work admin1,  123123', '2021-05-23 14:26:31', '2021-05-23 14:26:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`eduId`),
  ADD KEY `fk_Education_User` (`userId`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventId`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msgId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`workId`),
  ADD KEY `fk_Work_User` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `eduId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msgId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `workId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
