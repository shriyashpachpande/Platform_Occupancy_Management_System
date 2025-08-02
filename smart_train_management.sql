-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2025 at 07:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_train_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `platforms`
--

CREATE TABLE `platforms` (
  `platform_number` int(11) NOT NULL,
  `status` enum('available','occupied') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `platforms`
--

INSERT INTO `platforms` (`platform_number`, `status`) VALUES
(1, 'available'),
(2, 'occupied'),
(3, 'occupied');

-- --------------------------------------------------------

--
-- Table structure for table `train_movements`
--

CREATE TABLE `train_movements` (
  `id` int(11) NOT NULL,
  `train_id` int(11) NOT NULL,
  `from_platform` int(11) DEFAULT NULL,
  `to_platform` int(11) DEFAULT NULL,
  `movement_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `train_movements`
--

INSERT INTO `train_movements` (`id`, `train_id`, `from_platform`, `to_platform`, `movement_time`) VALUES
(1, 12345, 1, 2, '2025-02-24 15:02:36'),
(2, 12345, 2, 1, '2025-02-24 15:03:31'),
(3, 23455, 3, 2, '2025-02-24 15:03:45'),
(4, 17057, 1, 3, '2025-02-24 15:05:40'),
(5, 17057, 3, 1, '2025-02-24 15:05:53'),
(6, 12344, 2, 3, '2025-02-24 15:06:40'),
(7, 22222, 1, 2, '2025-02-24 16:59:53'),
(8, 22222, 2, 1, '2025-02-24 17:00:02'),
(9, 23444, 3, 2, '2025-02-24 17:01:39'),
(10, 23444, 2, 3, '2025-02-24 17:01:46'),
(11, 12346, 1, 2, '2025-02-24 17:08:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `platforms`
--
ALTER TABLE `platforms`
  ADD PRIMARY KEY (`platform_number`);

--
-- Indexes for table `train_movements`
--
ALTER TABLE `train_movements`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `train_movements`
--
ALTER TABLE `train_movements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
