-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 09:57 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(6) NOT NULL,
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

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `id_number`, `email_address`, `gender`, `phone_number`, `job_title`, `faculty`, `password`) VALUES
(340, 'ergd', 'sdfwefwef', '2353463543566', 'fdgsghfdgs', '', '235434646', 'Dean', '', '3rgdfgdfgsd'),
(341, 'Nicholas', 'Mahlangu', '9712045703080', 'nicolasmahlangu75@gmail.com', '', '624457716', 'Dean', '', 'Mpuse75'),
(342, 'Nicholas', 'Mahlangu', '9104125703080', 'nicolasmahlangu52@gmail.com', '', '624457716', 'Lecturer', 'ARTS AND DESIGN', 'nick75'),
(343, 'Nicholas', 'Mahlangu', '9504125703080', 'nicolasmahlangu7@gmail.com', 'Male', '624457716', 'Professor', 'ENGINEERING AND THE BUILDING ENVIRONMENT', 'me'),
(344, 'Puseletso', 'Mahlangu', '9104125703080', 'puseletsom@gmail.com', 'Male', '711218836', 'Professor', 'ICT', 'puse75'),
(345, 'Nicholas', 'Mahlangu', '9104125703080', 'nicolasmahlangu1@gmail.com', 'Male', '624457716', 'Dean', '-Select-', 'mpuse75'),
(346, 'Nicholas', 'Mahlangu', '9104125703080', 'nicolasmahlangu2@gmail.com', 'Male', '624457716', 'Dean', '-Select-', 'hgghg'),
(347, 'Nicholas', 'Mahlangu', '9104125703080', 'nicolasmahlangu12@gmail.com', 'Male', '624457716', 'Dean', '-Select-', 'march'),
(348, 'Nick', 'Skhosana', '565623565624', 'nick@gmail.com', 'Others', '711218836', 'Lecturer', 'SCIENCE', 'nick@75'),
(349, 'Nick', 'Skhosana', '565623565624', 'nicknac@gmail.com', 'Others', '711218836', 'Lecturer', 'SCIENCE', 'me'),
(350, 'mathew', 'malatji', '121457575', 'ghfhgf@gmail.com', 'Male', '021454647867', 'Dean', 'ICT', '1234'),
(351, 'Nicole', 'Williams', '9904125703080', 'nicoleW@gmail.com', 'Male', '711218836', 'Dean', 'HUMANITIES', 'nicole'),
(352, 'Mpuse', 'Mahlangu', '9104125703080', 'nicolasmahlangu9@gmail.com', 'Male', '0711218836', 'Dean', 'SCIENCE', 'mpuse75');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `file_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=353;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
