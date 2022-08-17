-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2022 at 04:21 PM
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
  `mem_marital_status` text NOT NULL,
  `mem_email_address` text NOT NULL,
  `mem_prosecuted_status` text NOT NULL,
  `mem_reason_for_prosecution` text DEFAULT NULL,
  `mem_passport_photo` text NOT NULL,
  `mem_date_registered` date NOT NULL,
  `mem_executive_remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `mem_id`, `mem_firstname`, `mem_lastname`, `mem_othernames`, `mem_age`, `mem_gender`, `mem_current_position`, `mem_nia_card_number`, `mem_voter_id`, `mem_digital_address`, `mem_contact_address`, `mem_occupation`, `mem_telephone`, `mem_region_hometown`, `mem_marital_status`, `mem_email_address`, `mem_prosecuted_status`, `mem_reason_for_prosecution`, `mem_passport_photo`, `mem_date_registered`, `mem_executive_remarks`) VALUES
(4, 'mem-2678401395', 'Trevillion', 'Abotsikuma', 'sdfsdf', 25, 'male', 'sdfsdf', 'sdfsdf', '726663ssdfs3269', 'Dzorwulu', '6565', '65656565', '0552711468', 'Accra', '565656', 'abotsistanley@gmail.com', 'no', '', '1638076173009-removebg-preview.png', '2022-08-17', 'ncncvnmgvmmgcvmg'),
(5, 'mem-6941027853', 'Stanley', 'Creation', 'ssdfsd', 25, 'female', 'sdfsdfsd', 'fsdfsdfssdfd', '7266633269', 'Dzorwulu', '5ffghfgh', 'fsdfsdfsd', '0552711468', 'Accra', 'Single', 'abotsistanley@gmail.com', 'no', '', 'photo_2021-12-22_23-48-19.jpg', '2022-08-17', 'hello');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
