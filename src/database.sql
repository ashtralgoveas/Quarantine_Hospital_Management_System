-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 07:01 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `admin_email` varchar(30) NOT NULL,
  `admin_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_email`, `admin_password`) VALUES
('adminlog@gmail.com', 'admin@');

-- --------------------------------------------------------

--
-- Table structure for table `logged_in_staff`
--

CREATE TABLE `logged_in_staff` (
  `logged_in_id` int(11) NOT NULL,
  `staff_site_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logged_in_staff`
--

INSERT INTO `logged_in_staff` (`logged_in_id`, `staff_site_id`) VALUES
(1, 1501),
(2, 1247);

-- --------------------------------------------------------

--
-- Table structure for table `quarantine_details`
--

CREATE TABLE `quarantine_details` (
  `patient_id` int(10) NOT NULL,
  `patient_name` varchar(30) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `address` varchar(40) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `patient_condition` varchar(20) NOT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quarantine_details`
--

INSERT INTO `quarantine_details` (`patient_id`, `patient_name`, `start_date`, `end_date`, `address`, `pincode`, `patient_condition`, `age`) VALUES
(101, 'Divya Agharwal', '2020-02-28', '2020-03-25', 'Mangalore', '575652', 'Cured', 28),
(142, 'Arhan Chatterjee', '2021-03-04', '2021-04-05', 'Mysore', '554812', 'Cured', 8),
(158, 'Clara D\'souza', '2020-04-11', NULL, 'Gulbarga', '753212', 'Under Treatment', 35),
(205, 'Jeremy Hatson', '2021-04-03', NULL, 'Udupi', '578140', 'Under Treatment', 43),
(357, 'Raj Mehta', '2020-08-05', '2020-09-07', 'Tamilnadu', '542621', 'Cured', 19);

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE `staff_details` (
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `staff_site_id` int(11) DEFAULT NULL,
  `staff_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`email`, `password`, `staff_site_id`, `staff_name`) VALUES
('aisha23@gmail.com', 'aisha23', 1501, 'Aisha Singh'),
('arv@gmail.com', 'aru@12', 1014, 'Arun Varma'),
('esha@gmail.com', 'esha@', NULL, 'Esha Guptha'),
('jason@gmail.com', 'j@', 1247, 'Jason Cardoza'),
('neilb@gmail.com', 'neil@1', NULL, 'Neil Bhatt');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `full_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `gender` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`full_name`, `email`, `phone_no`, `password`, `dob`, `gender`) VALUES
('Azim Mirza', 'azim@gmail.com', '7437437437', 'azim@29', '2001-10-25', 'Male'),
('Rohan Kulkarni', 'rohan@gmail.com', '8787878787', 'rohan@', '1984-02-08', 'Male'),
('Samiksha Rao', 'samrao@gmail.com', '9898989898', 'sam@9', '1990-04-19', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`admin_email`);

--
-- Indexes for table `logged_in_staff`
--
ALTER TABLE `logged_in_staff`
  ADD PRIMARY KEY (`logged_in_id`);

--
-- Indexes for table `quarantine_details`
--
ALTER TABLE `quarantine_details`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logged_in_staff`
--
ALTER TABLE `logged_in_staff`
  MODIFY `logged_in_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
