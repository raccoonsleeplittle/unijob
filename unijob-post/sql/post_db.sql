-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2022 at 06:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unijob`
--

-- --------------------------------------------------------

--
-- Table structure for table `post_db`
--

CREATE TABLE `post_db` (
  `id` int(255) NOT NULL,
  `typejob` varchar(255) NOT NULL,
  `hireprice` int(255) NOT NULL,
  `kindofwork` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` int(255) DEFAULT NULL,
  `phone` int(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post_db`
--

INSERT INTO `post_db` (`id`, `typejob`, `hireprice`, `kindofwork`, `name`, `code`, `phone`, `details`) VALUES
(1, '587', 0, '', '', 0, 967211886, ''),
(2, '519', 0, 'งานตอนนี้', 'บอส', 0, 967211886, 'มาที่บ้านพี่มา'),
(3, 'งานคอมพิวเตอร์', 477, 'งานระยะยาว', 'กนกวรรณ', 0, 967211886, 'มาประกอบคอมให้หน่อย');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post_db`
--
ALTER TABLE `post_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_db`
--
ALTER TABLE `post_db`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
