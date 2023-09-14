-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 05:29 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `available_jobs`
--

CREATE TABLE `available_jobs` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `hourly_rate` decimal(10,2) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `available_jobs`
--

INSERT INTO `available_jobs` (`id`, `location`, `speciality`, `hourly_rate`, `time`) VALUES
(1, 'Manila', 'Pediatrics', '250.00', '00:00:00'),
(2, 'Cebu', 'Surgery', '300.00', '10:00:00'),
(3, 'Davao', 'Orthopedics', '350.00', '00:00:00'),
(4, 'Iloilo', 'Cardiology', '400.00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nurses`
--

CREATE TABLE `nurses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `license_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurses`
--

INSERT INTO `nurses` (`id`, `name`, `location`, `speciality`, `contact_number`, `license_status`) VALUES
(1, 'John Doe', 'Manila', 'Pediatrics', '09123456789', 'valid'),
(2, 'Jane Doe', 'Cebu', 'Surgery', '09234567890', 'valid'),
(3, 'Peter Smith', 'Davao', 'Orthopedics', '09345678901', 'valid'),
(4, 'Mary Johnson', 'Iloilo', 'Cardiology', '09456789012', 'invalid'),
(5, 'Jeffrey', 'Bulacan', 'Cardiology', '09477983852', 'valid'),
(6, 'Nicole', 'Bulacan', 'Cardiology', '09452902229', 'valid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available_jobs`
--
ALTER TABLE `available_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurses`
--
ALTER TABLE `nurses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `available_jobs`
--
ALTER TABLE `available_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nurses`
--
ALTER TABLE `nurses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
