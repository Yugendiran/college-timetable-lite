-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 11:34 AM
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
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `deptId` bigint(20) NOT NULL,
  `deptName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`deptId`, `deptName`) VALUES
(1, 'CSE'),
(2, 'ECE');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjectId` bigint(20) NOT NULL,
  `subjectName` text NOT NULL,
  `deptId` bigint(20) NOT NULL,
  `userId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectId`, `subjectName`, `deptId`, `userId`) VALUES
(1, 'HTML', 1, 26);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `timetableId` bigint(20) NOT NULL,
  `name` text NOT NULL,
  `tag` varchar(11) NOT NULL,
  `deptId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`timetableId`, `name`, `tag`, `deptId`) VALUES
(1, 'HTML', 'mon1', 1),
(2, '', 'tues1', 1),
(3, '', 'wed1', 1),
(4, '', 'thurs1', 1),
(5, '', 'fri1', 1),
(6, '', 'sat1', 1),
(7, '', 'sun1', 1),
(8, 'CSS', 'mon2', 1),
(9, '', 'tues2', 1),
(10, '', 'wed2', 1),
(11, '', 'thurs2', 1),
(12, '', 'fri2', 1),
(13, '', 'sat2', 1),
(14, '', 'sun2', 1),
(15, '', 'mon3', 1),
(16, '', 'tues3', 1),
(17, '', 'wed3', 1),
(18, '', 'thurs3', 1),
(19, '', 'fri3', 1),
(20, '', 'sat3', 1),
(21, '', 'sun3', 1),
(22, '', 'mon4', 1),
(23, '', 'tues4', 1),
(24, '', 'wed4', 1),
(25, '', 'thurs4', 1),
(26, '', 'fri4', 1),
(27, '', 'sat4', 1),
(28, '', 'sun4', 1),
(29, '', 'mon5', 1),
(30, '', 'tues5', 1),
(31, '', 'wed5', 1),
(32, '', 'thurs5', 1),
(33, '', 'fri5', 1),
(34, '', 'sat5', 1),
(35, '', 'sun5', 1),
(36, 'Network', 'mon1', 2),
(37, '', 'tues1', 2),
(38, '', 'wed1', 2),
(39, '', 'thurs1', 2),
(40, '', 'fri1', 2),
(41, '', 'sat1', 2),
(42, '', 'sun1', 2),
(43, '', 'mon2', 2),
(44, '', 'tues2', 2),
(45, '', 'wed2', 2),
(46, '', 'thurs2', 2),
(47, '', 'fri2', 2),
(48, '', 'sat2', 2),
(49, '', 'sun2', 2),
(50, '', 'mon3', 2),
(51, '', 'tues3', 2),
(52, '', 'wed3', 2),
(53, '', 'thurs3', 2),
(54, '', 'fri3', 2),
(55, '', 'sat3', 2),
(56, '', 'sun3', 2),
(57, '', 'mon4', 2),
(58, '', 'tues4', 2),
(59, '', 'wed4', 2),
(60, '', 'thurs4', 2),
(61, '', 'fri4', 2),
(62, '', 'sat4', 2),
(63, '', 'sun4', 2),
(64, '', 'mon5', 2),
(65, '', 'tues5', 2),
(66, '', 'wed5', 2),
(67, '', 'thurs5', 2),
(68, '', 'fri5', 2),
(69, '', 'sat5', 2),
(70, '', 'sun5', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` bigint(20) NOT NULL,
  `userName` text NOT NULL,
  `userEmail` text NOT NULL,
  `userPass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(1, 'Yugi', 'yyugi64@gmail.com', 'yugiyugi'),
(2, 'Amreen', 'amreen@example.com', 'password1'),
(3, 'Bob', 'bob@example.com', 'password2'),
(4, 'Carol', 'carol@example.com', 'password3'),
(5, 'David', 'david@example.com', 'password4'),
(6, 'Eve', 'eve@example.com', 'password5'),
(7, 'Frank', 'frank@example.com', 'password6'),
(8, 'Grace', 'grace@example.com', 'password7'),
(9, 'Hannah', 'hannah@example.com', 'password8'),
(10, 'Ivan', 'ivan@example.com', 'password9'),
(11, 'Jasmine', 'jasmine@example.com', 'password10'),
(26, 'Ram', 'ram@eg.com', 'ram123'),
(27, 'Sandy', 'sandy@gmail.com', 'sandy123');

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
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`deptId`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectId`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`timetableId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `user_section`
--
ALTER TABLE `user_section`
  ADD PRIMARY KEY (`userId`,`deptId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `deptId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subjectId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `timetableId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
