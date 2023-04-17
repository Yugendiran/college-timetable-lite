-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 11:41 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clg-timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_section`
--

CREATE TABLE `user_section` (
  `userId` bigint(20) NOT NULL,
  `deptId` bigint(20) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_section`
--

INSERT INTO `user_section` (`userId`, `deptId`, `role`) VALUES
(1, 1, 'hod'),
(2, 2, 'hod'),
(26, 1, 'teacher'),
(27, 1, 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_section`
--
ALTER TABLE `user_section`
  ADD PRIMARY KEY (`userId`,`deptId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
