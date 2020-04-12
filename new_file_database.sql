-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 02:01 AM
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
  `staff_code` int(11) NOT NULL,
  `staff_number` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_code`, `staff_number`) VALUES
(1, 21001),
(3, 21001),
(4, 21001),
(5, 21002),
(6, 21003),
(7, 21005),
(8, 21006),
(9, 21007),
(10, 21008),
(11, 21009),
(12, 21011),
(13, 21012),
(16, 21013),
(19, 21014),
(20, 0),
(21, 21016),
(22, 21017),
(23, 21018),
(24, 21019),
(25, 21020);

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
(342, '', 'Nick', 'Williams', '9104125703082', 'nicolasmahlangu90@gmail.com', 'Male', '0614457716', 'Dean', 'ARTS AND DESIGN', 'nickW'),
(344, '', 'Puseletso', 'Mahlangu', '9104125703080', 'puseletsom@gmail.com', 'Male', '711218836', 'Professor', 'ICT', 'puse75'),
(345, '', 'Nicholas', 'Mahlangu', '9104125703080', 'nicolasmahlangu1@gmail.com', 'Male', '624457716', 'Dean', '-Select-', 'mpuse75'),
(346, '', 'Nicholas', 'Mahlangu', '9104125703080', 'nicolasmahlangu2@gmail.com', 'Male', '624457716', 'Dean', '-Select-', 'hgghg'),
(351, '', 'Nicole', 'Williams', '9904125703080', 'nicoleW@gmail.com', 'Male', '711218836', 'Dean', 'HUMANITIES', 'nicole'),
(352, '', 'Mpuse', 'Mahlangu', '9104125703080', 'nicolasmahlangu9@gmail.com', 'Male', '0711218836', 'Dean', 'SCIENCE', 'mpuse75'),
(353, '', 'Paul', 'Wilson', '8904235703080', 'paulwilson@gmail.com', 'Male', '790954272', 'Lecturer', 'ICT', 'wilson'),
(354, '', 'Paul', 'Wilson', '8904235703080', 'paulwilso@gmail.com', 'Male', '790954272', 'Lecturer', 'ICT', 'wil'),
(355, '', 'Paul', 'Wilson', '8904235703080', 'paulwils@gmail.com', 'Male', '790954272', 'Lecturer', 'ICT', 'paul'),
(356, '', 'Paul', 'Wilson', '8904235703080', 'paulwil@gmail.com', 'Male', '790954272', 'Lecturer', 'ICT', 'pualw'),
(357, '', 'Paul', 'Wilson', '8904235703080', 'paulwi@gmail.com', 'Male', '790954272', 'Lecturer', 'ICT', 'me'),
(360, '21001', 'Mick', 'Kane', '8908235703080', 'mick@gmail.com', 'Male', '0798289551', 'Lecturer', 'ICT', 'mickie'),
(362, '21002', 'Mike', 'Hans', '8908235703080', 'mike@gmail.com', 'Male', '0798289551', 'Lecturer', 'ICT', 'mike'),
(363, '21003', 'Mike', 'Hans', '8908235703080', 'mik@gmail.com', 'Male', '0798289551', 'Lecturer', 'ICT', 'mik'),
(366, '21004', 'Ben', 'Hans', '8908235703080', 'benhans@gmail.com', 'Male', '0798289551', 'Lecturer', 'ICT', 'BEN'),
(369, '21001', 'Mick', 'Kane', '8908235703080', 'benh@gmail.com', 'Male', '0798289551', 'Lecturer', 'ICT', 'me'),
(371, '21002', 'Mick', 'Kane', '8908245703080', 'beb@gmail.com', 'Male', '0798289551', 'Lecturer', 'ICT', 'mickie'),
(372, '21003', 'Nicholas', 'Mahlangu', '9408245703080', 'nick@gmail.com', 'Male', '0798289551', 'Lecturer', 'ICT', 'nicolas75'),
(373, '21005', 'Nicholas', 'Mahlangu', '9508245703080', 'nickie@gmail.com', 'Male', '0798289551', 'Lecturer', 'ICT', 'nicolas75'),
(374, '21006', 'Nicholas', 'Mahlangu', '9108245703080', 'nicki@gmail.com', 'Male', '0788289551', 'Lecturer', 'HUMANITIES', 'password'),
(375, '21007', 'Nicholas', 'Mahlangu', '9008245703080', 'nic@gmail.com', 'Male', '0787289551', 'Lecturer', 'ARTS AND DESIGN', ''),
(376, '21008', 'Nicholas', 'Mahlangu', '9808245703080', 'mahlangu@gmail.com', 'Male', '0787289552', 'Lecturer', 'ARTS AND DESIGN', ''),
(377, '21009', 'Nicolette', 'Smith', '8905235703085', 'nicoleS@gmail.com', 'Female', '0798070071', 'Professor', 'Science', 'nicolete'),
(378, '21011', 'Elsie', 'Magoba', '8404075703084', 'elsiem@gmail.com', 'Female', '0767351513', 'Lecturer', 'ENGINEERING AND THE BUILDING ENVIRONMENT', '34afc92e21cc0c0fe90e6992e520fe54375f9355'),
(379, '21012', 'Elsie', 'Magoba', '8204075703084', 'elsiema@gmail.com', 'Female', '0767351514', 'Lecturer', 'MANAGEMENT SCIENCE', 'b1c1d8736f20db3fb6c1c66bb1455ed43909f0d8'),
(382, '21013', 'Kate', 'Magoba', '8604075703084', 'magobak@gmail.com', 'Female', '0747351514', 'Lecturer', 'ICT', '44844b8aa9d746a5d4c101a588644394115d190f'),
(385, '21014', 'Kate', 'Magoba', '8004075703084', 'magoba@gmail.com', 'Female', '0747351518', 'Lecturer', 'ICT', '5f4dcc3b5aa765d61d8327deb882cf99'),
(388, '21017', 'Simon', 'Maluleka', '7809165703080', 'smaluleka@54645.com', 'Male', '0663648969', 'Professor', 'HUMANITIES', '5f4dcc3b5aa765d61d8327deb882cf99'),
(390, '21019', 'Mallam', 'Mutikane', '8809055703080', 'mallamT@outlook.com', 'Male', '0670345898', 'Lecturer', 'ARTS AND DESIGN', '5f4dcc3b5aa765d61d8327deb882cf99'),
(391, '21020', 'Nicholas', 'Mahlangu', '8809055703082', 'nicolasmahlangu75@gmail.com', '-Select-', '0624457716', 'Lecturer', 'ECONOMICS AND FINANCE', '5f4dcc3b5aa765d61d8327deb882cf99');

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
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_code`);

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
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=392;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
