-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 21, 2025 at 10:06 AM
-- Server version: 8.3.0
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-realstate-website`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinghistory`
--

DROP TABLE IF EXISTS `bookinghistory`;
CREATE TABLE IF NOT EXISTS `bookinghistory` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userid` int NOT NULL,
  `room_id` int NOT NULL,
  `quantity` int NOT NULL,
  `userbookingid` int NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bookinghistory`
--

INSERT INTO `bookinghistory` (`id`, `userid`, `room_id`, `quantity`, `userbookingid`, `status`, `created_at`) VALUES
(1, 5, 2, 2, 1, 1, '2025-05-21 13:06:19'),
(2, 5, 12, 2, 2, 1, '2025-05-21 13:06:19'),
(3, 5, 14, 1, 3, 1, '2025-05-21 13:06:19'),
(4, 5, 2, 1, 4, 1, '2025-05-21 13:08:57'),
(5, 5, 1, 2, 5, 1, '2025-05-21 14:48:51'),
(6, 5, 15, 2, 6, 1, '2025-05-21 14:48:51'),
(7, 1, 3, 2, 7, 1, '2025-05-21 15:11:53'),
(8, 1, 2, 2, 8, 1, '2025-05-21 15:11:53'),
(9, 1, 12, 2, 9, 1, '2025-05-21 15:11:53'),
(10, 1, 3, 3, 10, 1, '2025-05-21 15:13:31'),
(11, 1, 14, 1, 11, 1, '2025-05-21 15:13:31'),
(12, 1, 3, 1, 12, 1, '2025-05-21 15:17:51'),
(13, 2, 9, 2, 14, 1, '2025-05-21 15:31:02'),
(14, 2, 10, 2, 15, 1, '2025-05-21 15:31:02'),
(15, 2, 7, 2, 16, 1, '2025-05-21 15:31:54'),
(16, 2, 8, 1, 17, 1, '2025-05-21 15:31:54'),
(17, 2, 4, 1, 18, 1, '2025-05-21 15:31:54'),
(18, 2, 3, 2, 19, 1, '2025-05-21 15:31:54'),
(19, 4, 2, 2, 20, 1, '2025-05-21 15:33:16'),
(20, 4, 11, 2, 21, 1, '2025-05-21 15:33:16'),
(21, 4, 12, 2, 22, 1, '2025-05-21 15:33:16'),
(22, 4, 8, 2, 23, 1, '2025-05-21 15:33:16'),
(23, 3, 1, 2, 24, 1, '2025-05-21 15:33:47'),
(24, 3, 6, 2, 25, 1, '2025-05-21 15:33:47'),
(25, 3, 12, 2, 26, 1, '2025-05-21 15:33:47'),
(26, 4, 2, 2, 27, 1, '2025-05-21 15:34:43'),
(27, 4, 10, 3, 28, 1, '2025-05-21 15:34:43'),
(28, 4, 15, 2, 29, 1, '2025-05-21 15:34:43'),
(29, 3, 10, 2, 30, 1, '2025-05-21 15:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `amenities` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `shortdescription` varchar(255) NOT NULL,
  `longdescription` varchar(255) NOT NULL,
  `keybenefits` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `title`, `amenities`, `image`, `shortdescription`, `longdescription`, `keybenefits`, `price`, `created_at`) VALUES
(1, 'Room 1', 'ac,wifi,tv', 'room1.webp', 'Affordable room', 'Affordable room for students, strugglers. Basic facalities and clean washrooms are provided', 'Budget friendly and Near to college', 500, '2025-04-16 07:34:45'),
(2, 'Room 2', 'ac,wifi,tv,powerbackup', 'room2.avif', 'Family Rooms', 'Great Room for families only, its location is nice and only families members are allowed', 'good for Family', 1000, '2025-04-16 07:35:49'),
(3, 'Room 3', 'ac,wifi,tv,geyser,powerbackup', 'room3.avif', 'Pet friendly Rooms', 'Spacious Room with good vibes, pet friendly, basic facilities are provided, special space for children.', 'Pets are allowed and Spacious', 1500, '2025-04-16 07:36:37'),
(4, 'Room 4', 'ac,wifi,tv,geyser,powerbackup', 'room4.avif', 'Delux Room', 'Best room in whole city, you get moder equipments, modern washroom and all luxury facalities', 'Luxury in Budget', 2300, '2025-04-16 07:38:14'),
(6, 'Room 6', 'ac,wifi,tv,geyser', 'room6.avif', 'Bachelor Party Room', 'Best to do party', 'No restrictions, owner is friendly', 1800, '2025-04-16 10:27:19'),
(5, 'Room 5', 'ac,wifi,tv,geyser,powerbackup,elevator', 'room5.webp', 'Delux Room 2', 'Delux room best in whole city, you get moder equipments, gym etc in this locality', 'Best in its category', 2200, '2025-04-16 10:24:09'),
(7, 'Room 7', 'wifi,powerbackup', 'room7.jpg', 'Pg Room for boys', 'Best for students, professionals boys', 'Bed, Matrix, attach washroom, laundary is provided', 200, '2025-04-16 10:29:04'),
(8, 'Room 8', 'ac,wifi,tv,powerbackup', 'room8.jpeg', 'Pg rooms for Girls', 'Best for students, professionals, workers. These rooms are best and budget friendly', 'Bed, Matrix, attach washroom, Laundary is provided, Modern kitchen', 300, '2025-04-16 10:32:20'),
(9, 'Room 9', 'ac,wifi,tv,geyser,powerbackup,elevator', 'room9.avif', 'Luxury Room', 'Luxury room with tv, study table, business room, modern washroom', 'Business rooms, modern kitchen, spa, beautiful location', 8000, '2025-04-16 10:34:29'),
(10, 'Room 10', 'ac,wifi,tv,geyser,powerbackup,elevator', 'room10.jpg', 'Suite ', 'Luxury suite with tv, study table, business room, modern washroom, modern kitchen, playing room', 'Business rooms, modern kitchen, modern washroom, beautiful location, gaming room, luxury equipments, spa', 10000, '2025-04-16 10:36:03'),
(11, 'Room 11', 'wifi,powerbackup', 'room11.jpeg', 'Pg for boys/girls', 'Best for students, professionals, workers, helpers', 'Budget friendly', 250, '2025-04-16 17:57:25'),
(12, 'Room 12', 'ac,wifi,tv,geyser', 'room12.avif', 'Affordable Room', 'Best for students, professionals, workers. These rooms are best and budget friendly', 'Budget friendly Room', 2100, '2025-04-17 06:16:31'),
(13, 'Room 13', 'ac,wifi,tv,geyser,powerbackup,elevator', 'room13.avif', 'Delux Room', 'Best for professionals, business persons. These rooms are best and spacious', 'Luxury in your Pocket', 2500, '2025-04-17 06:18:18'),
(14, 'Aggarwal PG', 'ac,wifi', 'room14', 'PG for Boys/Girls', 'Best for students, professionals, workers. These rooms are best and budget friendly', 'Food is included in rent', 300, '2025-04-23 11:30:12'),
(15, 'Room 15', 'ac,wifi,geyser,powerbackup', 'room15.jpeg', 'PG for Girls', 'fully furnished room, with attach washroom, washing machine', 'Food is included and electricity bill is also included', 400, '2025-05-06 06:48:55');

-- --------------------------------------------------------

--
-- Table structure for table `userbooking`
--

DROP TABLE IF EXISTS `userbooking`;
CREATE TABLE IF NOT EXISTS `userbooking` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userid` int NOT NULL,
  `roomid` int NOT NULL,
  `quantity` int NOT NULL,
  `price` varchar(255) NOT NULL,
  `sub_total` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userbooking`
--

INSERT INTO `userbooking` (`id`, `userid`, `roomid`, `quantity`, `price`, `sub_total`, `status`, `created_at`) VALUES
(1, 5, 2, 2, '1000', '2000', 1, '2025-05-21 07:31:19'),
(2, 5, 12, 2, '2100', '4200', 1, '2025-05-21 07:31:23'),
(3, 5, 14, 1, '300', '300', 1, '2025-05-21 07:31:29'),
(4, 5, 2, 1, '1000', '1000', 1, '2025-05-21 07:38:53'),
(5, 5, 1, 2, '500', '1000', 1, '2025-05-21 09:18:44'),
(6, 5, 15, 2, '400', '800', 1, '2025-05-21 09:18:48'),
(7, 1, 3, 3, '1500', '4500', 1, '2025-05-21 09:41:40'),
(8, 1, 2, 2, '1000', '2000', 1, '2025-05-21 09:41:44'),
(9, 1, 12, 2, '2100', '4200', 1, '2025-05-21 09:41:50'),
(10, 1, 3, 3, '1500', '4500', 1, '2025-05-21 09:43:11'),
(11, 1, 14, 1, '300', '300', 1, '2025-05-21 09:43:26'),
(12, 1, 3, 1, '1500', '1500', 1, '2025-05-21 09:44:06'),
(14, 2, 9, 2, '8000', '16000', 1, '2025-05-21 10:00:44'),
(15, 2, 10, 2, '10000', '20000', 1, '2025-05-21 10:00:53'),
(16, 2, 7, 2, '200', '400', 1, '2025-05-21 10:01:24'),
(17, 2, 8, 1, '300', '300', 1, '2025-05-21 10:01:29'),
(18, 2, 4, 1, '2300', '2300', 1, '2025-05-21 10:01:33'),
(19, 2, 3, 2, '1500', '3000', 1, '2025-05-21 10:01:38'),
(20, 4, 2, 2, '1000', '2000', 1, '2025-05-21 10:02:55'),
(21, 4, 11, 2, '250', '500', 1, '2025-05-21 10:03:04'),
(22, 4, 12, 2, '2100', '4200', 1, '2025-05-21 10:03:07'),
(23, 4, 8, 2, '300', '600', 1, '2025-05-21 10:03:12'),
(24, 3, 1, 2, '500', '1000', 1, '2025-05-21 10:03:37'),
(25, 3, 6, 2, '1800', '3600', 1, '2025-05-21 10:03:41'),
(26, 3, 12, 2, '2100', '4200', 1, '2025-05-21 10:03:44'),
(27, 4, 2, 2, '1000', '2000', 1, '2025-05-21 10:04:09'),
(28, 4, 10, 3, '10000', '30000', 1, '2025-05-21 10:04:13'),
(29, 4, 15, 2, '400', '800', 1, '2025-05-21 10:04:19'),
(30, 3, 10, 2, '10000', '20000', 1, '2025-05-21 10:05:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `role` tinyint NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '0',
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `status`, `name`, `email`, `password`, `address`, `created_at`) VALUES
(1, 0, 2, 'sahil', 'sahil@sahil', 'sahil', 'BH-2, Panjab University, Sector 14 - 160014, Chandigarh', '2025-05-21 12:54:37'),
(2, 0, 2, 'raju', 'raju@raju', 'raju', 'qwerty', '2025-05-21 12:59:34'),
(3, 0, 1, 'rahul', 'rahul@rahul', 'rahul', 'qwerty', '2025-05-21 13:00:10'),
(4, 0, 1, 'raghav', 'raghav@raghav', 'raghav', 'qwerty', '2025-05-21 13:00:31'),
(5, 0, 1, 'harry', 'harry@harry', 'harry', 'qwerty', '2025-05-21 13:00:49');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
