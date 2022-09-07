-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 09:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `member_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `mem_id` varchar(256) NOT NULL,
  `mem_firstname` text NOT NULL,
  `mem_lastname` text NOT NULL,
  `mem_othernames` text NOT NULL,
  `mem_age` int(100) NOT NULL,
  `mem_gender` text NOT NULL,
  `mem_current_position` text NOT NULL,
  `mem_nia_card_number` text NOT NULL,
  `mem_voter_id` text NOT NULL,
  `mem_digital_address` text NOT NULL,
  `mem_contact_address` text NOT NULL,
  `mem_occupation` text NOT NULL,
  `mem_telephone` text NOT NULL,
  `mem_region_hometown` text NOT NULL,
  `mem_MemConstituency` text NOT NULL,
  `mem_marital_status` text NOT NULL,
  `mem_email_address` text NOT NULL,
  `mem_prosecuted_status` text NOT NULL,
  `mem_reason_for_prosecution` text DEFAULT NULL,
  `mem_passport_photo` text NOT NULL,
  `mem_date_registered` date NOT NULL,
  `mem_executive_remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mem_id` (`mem_id`,`mem_nia_card_number`,`mem_voter_id`,`mem_telephone`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
