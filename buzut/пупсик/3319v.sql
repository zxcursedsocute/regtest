-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: MySQL-8.2
-- Generation Time: Apr 20, 2025 at 10:14 PM
-- Server version: 8.2.0
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3319v`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int NOT NULL,
  `sender_id` int NOT NULL,
  `receiver_id` int NOT NULL,
  `message_text` text,
  `is_deleted` tinyint(1) DEFAULT '0',
  `sent_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `receiver_id`, `message_text`, `is_deleted`, `sent_at`) VALUES
(36, 39, 37, 'a', 0, '2025-04-19 12:04:08'),
(52, 38, 39, 'привет', 1, '2025-04-19 13:06:14'),
(53, 38, 39, 'awdwad', 1, '2025-04-19 14:44:42'),
(54, 38, 39, 'awdawd', 0, '2025-04-19 14:44:44'),
(55, 38, 39, 'awdawdawd', 1, '2025-04-19 14:44:47'),
(56, 38, 39, 'awdawdawdawd', 0, '2025-04-19 14:44:49'),
(57, 38, 39, 'fhgh fghfgh fhfhg fghhfg gfhhf fgfghhg ffg fgh', 0, '2025-04-19 19:40:58'),
(58, 39, 38, 'кпвквкп', 0, '2025-04-19 19:42:50'),
(59, 39, 38, 'afawafawfawf', 0, '2025-04-19 19:42:52'),
(60, 38, 39, 'awdawdawdaw awdawd awdawd awdwad awd awd awd', 1, '2025-04-19 19:55:10'),
(61, 38, 39, 'awdwad wadawd awd awwda awa wdawd', 0, '2025-04-19 19:57:26'),
(62, 38, 39, 'wadawdawd awdawd awdawd awdaw waawd aw ad', 0, '2025-04-19 19:57:32'),
(63, 38, 39, 'a wdawdawd awd wdaawd awd awd awdawd awd aw d', 0, '2025-04-19 19:57:37'),
(64, 38, 39, 'привет', 0, '2025-04-19 20:01:36'),
(65, 38, 39, 'awdwd', 0, '2025-04-19 20:01:39'),
(66, 38, 39, 'aawdwdadawdwwdwwwwwwddddddddddddddddddddddwadawdawdawdawdawdawdawdawdawdawdawdawdawdawdadawwdwaawdwadwadawdawdawdawdawdawdawdawda', 1, '2025-04-19 20:13:31'),
(67, 38, 39, 'awdwadawd', 0, '2025-04-19 20:14:02'),
(68, 38, 41, 'awdwad', 1, '2025-04-19 20:21:48'),
(69, 38, 41, 'awdawd', 1, '2025-04-19 20:23:44'),
(70, 38, 41, 'кпвквкп', 0, '2025-04-19 20:24:09'),
(71, 38, 41, 'awdawdawd awdawdawd awdwaddw awdaw dwaaw', 1, '2025-04-19 20:24:18'),
(72, 38, 39, 'awdwad', 0, '2025-04-19 20:24:49'),
(73, 38, 39, 'awdwad wadawdawd awddddddddddddddddddddddddddddddddddddddd awdddddddddddddddddddddddddddddddd', 1, '2025-04-19 20:25:00'),
(75, 39, 40, 'awdawd', 1, '2025-04-19 20:47:27'),
(76, 39, 40, 'awdawdawd', 0, '2025-04-19 20:47:30'),
(77, 39, 40, 'привет', 0, '2025-04-19 20:47:34'),
(78, 38, 39, 'awdawd', 0, '2025-04-19 21:23:23'),
(79, 38, 39, 'awdaw', 0, '2025-04-19 21:23:25'),
(80, 42, 39, 'привет', 0, '2025-04-19 21:26:56'),
(81, 42, 39, 'пока', 0, '2025-04-19 21:27:26'),
(84, 38, 42, 'привет', 0, '2025-04-19 21:37:57'),
(85, 38, 42, 'уаыу', 0, '2025-04-19 21:38:03'),
(86, 38, 43, 'ыуаыуа', 0, '2025-04-19 21:38:07'),
(87, 38, 44, 'ыуаыуауы', 0, '2025-04-19 21:38:10'),
(88, 38, 40, 'фцвфцвфцв', 0, '2025-04-19 21:38:29'),
(89, 38, 37, 'фцвфцвфцвфцв', 0, '2025-04-19 21:38:32'),
(90, 38, 45, 'awdawdaw', 0, '2025-04-19 21:39:18'),
(91, 38, 41, 'привет', 0, '2025-04-19 21:43:12'),
(92, 39, 47, 'привет', 1, '2025-04-19 23:12:33'),
(93, 39, 38, 'awdawdawd цфвцвфцвфцв фцвфцвфцвфц фцвфцвфцвфцвфцв фцвцфвфцвцффцв фцвфцвцфвфцвф фцвфцвфцвфцв фцвфцвфцвфцв фцвфцвфцввц', 0, '2025-04-19 23:15:08'),
(94, 48, 37, 'привет', 0, '2025-04-20 15:50:54'),
(95, 48, 39, 'привет', 0, '2025-04-20 15:51:21'),
(96, 48, 39, '1488', 0, '2025-04-20 15:51:24'),
(97, 48, 39, 'wadawd', 0, '2025-04-20 15:51:27'),
(98, 38, 45, 'adwad', 0, '2025-04-20 19:51:49'),
(99, 38, 45, 'awdawd', 0, '2025-04-20 19:51:51'),
(100, 38, 45, 'dawdawd', 0, '2025-04-20 19:51:52'),
(101, 38, 45, 'awd wadawda awdwadawd awdawd awdawda awdawd awd adawawdawdawdawd', 0, '2025-04-20 19:51:59'),
(102, 38, 39, 'кпвквкп', 0, '2025-04-20 20:10:22'),
(103, 38, 39, 'awdwad', 0, '2025-04-20 20:10:35'),
(104, 49, 38, 'привет', 0, '2025-04-20 20:20:46'),
(105, 49, 38, 'пока', 0, '2025-04-20 20:20:56'),
(106, 49, 38, 'awdawd', 0, '2025-04-20 21:44:10');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `target_type` enum('message','user') DEFAULT NULL,
  `target_id` int DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `description` text,
  `status` enum('new','in_progress','resolved') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `user_id`, `target_type`, `target_id`, `type`, `description`, `status`, `created_at`) VALUES
(10, 38, 'message', 39, 'spam', 'spam', 'resolved', '2025-04-20 18:56:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` enum('user','admin') DEFAULT NULL,
  `is_blocked` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password_hash`, `email`, `role`, `is_blocked`, `created_at`) VALUES
(37, 'awdawd', '$2y$10$peoKZHLgFj.5ovkuBq1Q9OiCfqh05wEkt8CagKSqLDZOZ8Jos9i2y', 'awd@awdawd', 'user', 0, '2025-04-18 11:04:06'),
(38, 'admin', '$2y$10$Dc8vzpDyEyd17cDZQRMVr.7/HZWrP7keYn3xoEwn7kZeahPTq70he', 'awdw@awdawd', 'admin', 1, '2025-04-18 11:04:57'),
(39, 'admin2', '$2y$10$JaPfvV6YNnYyJh0utzBLVuuiy0D.M5EUrzQt73pImWO2KIBVgPf2i', 'awdawdawdawd@awd', 'user', 1, '2025-04-19 11:04:31'),
(40, 'test67', '$2y$10$T4X4P109rTqTVjDN9CaChORGHnSWag8AhCOsu47BTkEVLSNlzkyiS', 'efes@awdwad', 'user', 0, '2025-04-19 07:04:57'),
(41, 'wadw', '$2y$10$bXNPFlaVe.JfMNuhF4aBZ.ufQ95HhH9DLaiWLlPvu2UFM0EBfJflO', 'efes@awdawdwad', 'user', 0, '2025-04-19 07:04:25'),
(42, 'test123', '$2y$10$OtdcDdWw/j8gYak4UnQ5VeLro0yZxfoltllWEvDLrPeCcmm5/HLxu', 'awdaw@awdawd', 'user', 0, '2025-04-19 09:04:55'),
(43, 'фцввввввввввввввввввввввв', '$2y$10$7HxyUUx67Ld5WsqHGdmW4u.HWNQ17VwMzNM6/8rmycT5wQJ3xeypC', 'daw@awdawd', 'user', 0, '2025-04-19 09:04:51'),
(44, 'wdввввввв', '$2y$10$enXb/HUIZh00Zz6.9dWovuafotifNky9Okf3.l7qaeUSxm6naxqBu', 'awdawdaw@awdawd', 'user', 0, '2025-04-19 09:04:44'),
(45, 'adminфцвфцв', '$2y$10$JsK75HAIpWg0iowizpreien5lLWp0Uzs5DtTQAtQG7vRQ1D64.bba', 'ggawd@awdawd', 'user', 0, '2025-04-19 09:04:00'),
(46, 'adminфцwadawdфцв', '$2y$10$yUWTPyUZBx8RfZeuryoprOoDtXQGx5o/UYt8.E/rP4niFmtttkkcW', 'ggaawdwd@awdawd', 'user', 0, '2025-04-19 09:04:43'),
(47, 'adminфцwawdadawdфцв', '$2y$10$tpvjhEhBfz3Y7tGTc638GuSXRrVDyB3Kxn93AHQR84BugQt5H0Z7y', 'ggaawdwdaw@awdawd', 'user', 0, '2025-04-19 09:04:53'),
(48, 'ad', '$2y$10$baLfsCPMtBP4JAGSCs6Eg.xjXYlb3kQW7s3NRvnl75shI7aELe2qW', 'ggwdwdaw@awdawd', 'user', 0, '2025-04-20 03:04:54'),
(49, 'ad2', '$2y$10$7q2RTMvIM4Vfw6GF4I7PP.vyF4xT.rwNxBDjLxGdX3z1GAzBOIv7G', 'gwdaw@awdawd', 'user', 0, '2025-04-20 08:04:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `target_id` (`target_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `reports_ibfk_2` FOREIGN KEY (`target_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
