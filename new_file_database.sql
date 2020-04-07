-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 12:25 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_file_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_code` int(255) NOT NULL,
  `admin_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_id` int(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `downloads` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `file_name`, `size`, `downloads`) VALUES
(1, '215726487.pdf', '11771', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_code` int(255) NOT NULL,
  `staff_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_code`, `staff_number`) VALUES
(1, '21001'),
(2, '21002'),
(0, '21003');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(6) NOT NULL,
  `staff_number` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `staff_number`, `first_name`, `last_name`, `id_number`, `email_address`, `gender`, `phone_number`, `job_title`, `faculty`, `password`) VALUES
(341, '', 'Nicholas', 'Mahlangu', '9712045703080', 'nicolasmahlangu75@gmail.com', '', '624457716', 'Dean', '', 'Mpuse75'),
(342, '', 'Nicholas', 'Mahlangu', '9104125703080', 'nicolasmahlangu52@gmail.com', '', '624457716', 'Lecturer', 'ARTS AND DESIGN', 'nick75'),
(343, '', 'Nicholas', 'Mahlangu', '9504125703080', 'nicolasmahlangu7@gmail.com', 'Male', '624457716', 'Professor', 'ENGINEERING AND THE BUILDING ENVIRONMENT', 'me'),
(344, '', 'Puseletso', 'Mahlangu', '9104125703080', 'puseletsom@gmail.com', 'Male', '711218836', 'Professor', 'ICT', 'puse75'),
(345, '', 'Nicholas', 'Mahlangu', '9104125703080', 'nicolasmahlangu1@gmail.com', 'Male', '624457716', 'Dean', '-Select-', 'mpuse75'),
(346, '', 'Nicholas', 'Mahlangu', '9104125703080', 'nicolasmahlangu2@gmail.com', 'Male', '624457716', 'Dean', '-Select-', 'hgghg'),
(347, '', 'Nicholas', 'Mahlangu', '9104125703080', 'nicolasmahlangu12@gmail.com', 'Male', '624457716', 'Dean', '-Select-', 'march'),
(348, '', 'Nick', 'Skhosana', '565623565624', 'nick@gmail.com', 'Others', '711218836', 'Lecturer', 'SCIENCE', 'nick@75'),
(349, '', 'Nick', 'Skhosana', '565623565624', 'nicknac@gmail.com', 'Others', '711218836', 'Lecturer', 'SCIENCE', 'me'),
(350, '', 'mathew', 'malatji', '121457575', 'ghfhgf@gmail.com', 'Male', '021454647867', 'Dean', 'ICT', '1234'),
(351, '', 'Nicole', 'Williams', '9904125703080', 'nicoleW@gmail.com', 'Male', '711218836', 'Dean', 'HUMANITIES', 'nicole'),
(352, '', 'Mpuse', 'Mahlangu', '9104125703080', 'nicolasmahlangu9@gmail.com', 'Male', '0711218836', 'Dean', 'SCIENCE', 'mpuse75'),
(353, '', 'Paul', 'Wilson', '8904235703080', 'paulwilson@gmail.com', 'Male', '790954272', 'Lecturer', 'ICT', 'wilson'),
(354, '', 'Paul', 'Wilson', '8904235703080', 'paulwilso@gmail.com', 'Male', '790954272', 'Lecturer', 'ICT', 'wil'),
(355, '', 'Paul', 'Wilson', '8904235703080', 'paulwils@gmail.com', 'Male', '790954272', 'Lecturer', 'ICT', 'paul'),
(356, '', 'Paul', 'Wilson', '8904235703080', 'paulwil@gmail.com', 'Male', '790954272', 'Lecturer', 'ICT', 'pualw'),
(357, '', 'Paul', 'Wilson', '8904235703080', 'paulwi@gmail.com', 'Male', '790954272', 'Lecturer', 'ICT', 'me'),
(358, '', 'Mpumi', 'Mtsweni', '8905125903080', 'mpumim@gmail.com', 'Female', '0711218836', 'Lecturer', 'ARTS AND DESIGN', 'mpumiM'),
(360, '21001', 'Mick', 'Kane', '8908235703080', 'mick@gmail.com', 'Male', '0798289551', 'Lecturer', 'ICT', 'mickie'),
(362, '21002', 'Mike', 'Hans', '8908235703080', 'mike@gmail.com', 'Male', '0798289551', 'Lecturer', 'ICT', 'mike'),
(363, '21003', 'Mike', 'Hans', '8908235703080', 'mik@gmail.com', 'Male', '0798289551', 'Lecturer', 'ICT', 'mik'),
(364, '21003', 'Mike', 'Hans', '8908235703080', 'mik@gmail.com', 'Male', '0798289551', 'Lecturer', 'ICT', 'mik'),
(365, '21003', 'Mike', 'Hans', '8908235703080', 'mik@gmail.com', 'Male', '0798289551', 'Lecturer', 'ICT', 'mik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_code`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_code` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `file_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=366;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
