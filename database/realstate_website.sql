-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 06, 2025 at 06:30 AM
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
-- Database: `realstate_website`
--

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(14, 'Aggarwal PG', 'ac,wifi', 'room14', 'PG for Boys/Girls', 'Best for students, professionals, workers. These rooms are best and budget friendly', 'Food is included in rent', 300, '2025-04-23 11:30:12');

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
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userbooking`
--

INSERT INTO `userbooking` (`id`, `userid`, `roomid`, `quantity`, `price`, `sub_total`, `status`, `created_at`) VALUES
(1, 6, 1, 2, '500', '5500', 1, '2025-04-22 07:25:21'),
(2, 6, 2, 3, '1000', '3000', 1, '2025-04-22 07:25:23'),
(3, 6, 4, 6, '2300', '13800', 1, '2025-04-22 07:25:24'),
(4, 6, 5, 5, '2200', '8800', 1, '2025-04-22 07:25:27'),
(5, 6, 9, 8, '8000', '64000', 1, '2025-04-22 07:25:28'),
(17, 6, 3, 2, '1500', '3000', 1, '2025-04-23 06:44:57'),
(7, 3, 10, 3, '10000', '30000', 1, '2025-04-22 07:26:04'),
(8, 3, 9, 2, '8000', '', 1, '2025-04-22 07:26:07'),
(21, 2, 14, 2, '300', '', 0, '2025-04-23 11:31:00'),
(10, 3, 4, 2, '2300', '', 1, '2025-04-22 07:26:13'),
(11, 2, 1, 2, '500', '', 0, '2025-04-22 07:26:36'),
(25, 2, 10, 1, '10000', '', 0, '2025-04-24 05:20:34'),
(14, 1, 1, 2, '500', '', 1, '2025-04-22 07:26:56'),
(15, 1, 2, 3, '1000', '3000', 1, '2025-04-22 07:26:57'),
(16, 1, 3, 4, '1500', '', 1, '2025-04-22 07:26:58'),
(18, 6, 12, 6, '2100', '12600', 1, '2025-04-23 07:21:23'),
(20, 3, 3, 2, '1500', '3000', 1, '2025-04-23 11:14:52'),
(22, 2, 3, 3, '1500', '6000', 0, '2025-04-23 11:40:31'),
(24, 2, 8, 3, '300', '', 0, '2025-04-24 05:18:46'),
(26, 2, 6, 6, '1800', '', 0, '2025-04-24 05:26:18'),
(32, 6, 3, 2, '1500', '3000', 1, '2025-04-24 06:45:55'),
(31, 2, 8, 1, '300', '', 0, '2025-04-24 06:31:25'),
(30, 2, 3, 3, '1500', '', 0, '2025-04-24 06:28:29'),
(34, 6, 1, 2, '500', '', 1, '2025-04-24 07:05:22'),
(33, 6, 2, 3, '1000', '3000', 1, '2025-04-24 07:05:02'),
(35, 6, 2, 3, '1000', '3000', 1, '2025-04-24 07:30:00'),
(37, 6, 4, 1, '2300', '2300', 1, '2025-04-24 07:32:46'),
(38, 6, 14, 2, '300', '600', 1, '2025-04-24 07:34:35'),
(39, 6, 5, 1, '2200', '2200', 1, '2025-04-28 18:29:35'),
(40, 6, 14, 2, '300', '600', 1, '2025-04-30 05:24:49'),
(41, 6, 7, 4, '200', '800', 1, '2025-04-30 05:24:57'),
(42, 3, 2, 3, '1000', '3000', 1, '2025-04-30 06:41:04'),
(43, 1, 2, 3, '1000', '3000', 1, '2025-04-30 09:14:01'),
(44, 1, 12, 2, '2100', '4200', 1, '2025-04-30 09:14:11'),
(46, 3, 10, 3, '10000', '30000', 1, '2025-05-02 07:51:13'),
(47, 6, 1, 1, '500', '500', 0, '2025-05-02 17:52:09');

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `status`, `name`, `email`, `password`, `address`, `created_at`) VALUES
(1, 0, 1, 'test', 'test@test', 'test', 'qwerty', '2025-03-20 16:16:09'),
(2, 0, 2, 'raju', 'raju@raju', 'raju', 'qwerty', '2025-03-20 16:16:35'),
(3, 0, 1, 'rahul', 'rahul@rahul', 'rahul', 'qwerty', '2025-03-20 16:16:58'),
(4, 0, 1, 'raghav', 'raghav@raghav', 'raghav', 'qwerty', '2025-03-20 16:17:24'),
(5, 0, 1, 'harry', 'harry@harry', 'harry', 'qwerty', '2025-03-20 16:17:49'),
(6, 0, 2, 'sahil', 'sahil@sahil', 'sahil', 'qwerty', '2025-03-20 16:18:46'),
(7, 0, 1, 'maanik', 'maanik@maanik', 'maanik', 'qwerty', '2025-03-20 16:19:08'),
(8, 0, 1, 'uday', 'uday@uday', 'uday', 'qwerty', '2025-03-20 16:19:37'),
(9, 0, 1, 'Yogesh', 'yogesh@yogesh', 'yogesh', 'qwerty', '2025-04-16 23:35:03'),
(10, 0, 1, 'Rohit', 'rohit@rohit', 'rohit', 'qwerty', '2025-04-17 11:49:52'),
(11, 0, 1, 'sdsdf', 'Testf@test', '123456', 'fefgrg', '2025-04-17 11:51:37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
