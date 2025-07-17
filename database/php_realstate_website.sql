-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 17, 2025 at 06:50 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_realstate_website`
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
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bookinghistory`
--

INSERT INTO `bookinghistory` (`id`, `userid`, `room_id`, `quantity`, `userbookingid`, `status`, `created_at`) VALUES
(1, 1, 1, 2, 1, 1, '2025-07-17 11:44:42'),
(2, 3, 1, 2, 2, 1, '2025-07-17 11:51:00'),
(3, 3, 2, 3, 3, 1, '2025-07-17 11:51:00'),
(4, 3, 3, 1, 4, 1, '2025-07-17 11:51:00'),
(5, 3, 2, 1, 5, 1, '2025-07-17 11:52:28'),
(6, 1, 2, 1, 6, 1, '2025-07-17 11:57:41'),
(7, 1, 1, 2, 7, 1, '2025-07-17 12:05:17'),
(8, 1, 3, 1, 8, 1, '2025-07-17 12:05:17');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `shortdescription` varchar(255) NOT NULL,
  `longdescription` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `keybenefits` varchar(255) NOT NULL,
  `amenities` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `title`, `image`, `shortdescription`, `longdescription`, `price`, `keybenefits`, `amenities`, `created_at`) VALUES
(1, 'Room 1', 'room1.webp', 'Pg Room', 'This is the best Room for students and working professionals', 400, 'Bed, Table, Chair, Almirah, Coller all these facilities are provided', 'wifi', '2025-07-17 06:09:28'),
(2, 'Room 2', 'room2.avif', 'Pg Room', 'This is the best Room for students and working professionals', 600, 'Bed, Table, Chair, Almirah, Desert Coller all these facilities are provided and electricity bill is also included in rent', 'wifi,tv,powerbackup', '2025-07-17 06:11:33'),
(3, 'Room 3', 'room3.avif', 'Pg Room for Girls', 'This is the best Room for students', 500, 'Bed, Table, Chair, Almirah, Coller all these facilities are provided', 'wifi,tv,geyser', '2025-07-17 06:13:41'),
(4, 'Room 4', 'room4.avif', 'Pg Room for Boys', 'This is the best Room for students and working professionals', 500, 'Bed, Table, Chair, Almirah, Coller all these facilities are provided', 'wifi,geyser,powerbackup', '2025-07-17 06:36:47'),
(5, 'Room 5', 'room7.jpg', 'Guest Rooms', 'For those who need room for few days', 150, 'Bed, Table, Chair and Attach Washroom', 'tv', '2025-07-17 06:38:05'),
(6, 'Room 6', 'room8.jpeg', 'Guest Rooms', 'For those who need room for few days', 250, 'Bed, Table, Chair and Attach Washroom	', 'wifi,tv,geyser', '2025-07-17 06:39:03'),
(7, 'Room 7', 'room5.webp', 'Delux Rooms', 'Best for Working Professionals', 1000, 'Attach Washroom, Healthy Food, Bar Area', 'ac,wifi,tv,geyser,powerbackup', '2025-07-17 06:40:38'),
(8, 'Room 8', 'room6.avif', 'Delux Room', 'Best for Business Persons', 1100, 'Attach Washroom, Healthy Food, Bar Area', 'ac,wifi,tv,geyser,powerbackup', '2025-07-17 06:41:39'),
(9, 'Room 9 ', 'room12.avif', 'Semi Luxury Room', 'For Business Persons, Professionals', 1500, 'Meeting Room, Bed Room, all facilities', 'ac,wifi,tv,geyser,powerbackup,elevator', '2025-07-17 06:42:56'),
(10, 'Room 10', 'room13.avif', 'Semi Luxury Suite', 'Business Persons, Atheletes', 1500, 'Meeting Room, All other facilities', 'ac,wifi,tv,geyser,powerbackup,elevator', '2025-07-17 06:44:12'),
(11, 'Room 11', 'room9.avif', 'Luxury Room', 'For Business Persons, Atheletes ', 2000, 'Meeting Room, Bed Room, all facilities', 'ac,wifi,tv,geyser,powerbackup,elevator', '2025-07-17 06:46:38'),
(12, 'Room 12', 'room10.jpg', 'Luxury Suite', 'Business Person, Goverment Officials, Democrats', 2500, 'Meeting Room, Privacy, Security, ', 'ac,wifi,tv,geyser,powerbackup,elevator', '2025-07-17 06:48:20');

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
  `price` int NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `sub_total` int NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userbooking`
--

INSERT INTO `userbooking` (`id`, `userid`, `roomid`, `quantity`, `price`, `status`, `sub_total`, `created_at`) VALUES
(1, 1, 1, 2, 400, 1, 800, '0000-00-00 00:00:00'),
(2, 3, 1, 2, 400, 1, 800, '0000-00-00 00:00:00'),
(3, 3, 2, 3, 600, 1, 1800, '0000-00-00 00:00:00'),
(4, 3, 3, 1, 500, 1, 500, '0000-00-00 00:00:00'),
(5, 3, 2, 1, 600, 1, 600, '0000-00-00 00:00:00'),
(6, 1, 2, 1, 600, 1, 600, '0000-00-00 00:00:00'),
(7, 1, 1, 2, 400, 1, 800, '0000-00-00 00:00:00'),
(8, 1, 3, 1, 500, 1, 500, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `role` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `status`, `role`, `created_at`) VALUES
(1, 'sahil', 'sahil@sahil', 'sahil', 'qwerty', 2, 0, '2025-07-13 09:37:11'),
(2, 'rajiv', 'rajiv@rajiv', 'rajiv', 'qwerty', 2, 0, '2025-07-13 09:37:54'),
(3, 'rahul', 'rahul@rahul', 'rahul', 'qwerty', 1, 0, '2025-07-13 09:38:14'),
(4, 'raghav', 'raghav@raghav', 'raghav', 'qwerty', 1, 0, '2025-07-13 09:38:38'),
(5, 'harry', 'harry@harry', 'harry', 'qwerty', 1, 0, '2025-07-13 09:38:58'),
(6, 'uday', 'uday@uday', 'uday', 'qwerty', 1, 0, '2025-07-13 09:39:17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
