-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 10:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bogomemorialpark_newdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservationupdate`
--

CREATE TABLE `reservationupdate` (
  `reserved_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `package` varchar(100) NOT NULL,
  `blocknumber` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `plotnumber` varchar(100) NOT NULL,
  `statusaccount` varchar(50) NOT NULL,
  `fkey` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservationupdate`
--

INSERT INTO `reservationupdate` (`reserved_id`, `fullname`, `package`, `blocknumber`, `email`, `contact`, `time`, `plotnumber`, `statusaccount`, `fkey`) VALUES
(10, 'richmon', 'lawn', 'block 1', 'retiza@gmail.com', '65456465', '2023-12-29 01:48:04', 'Plot 1', 'Approved', 1),
(11, 'Bill Gates', 'garden', 'BLock 1', 'bill@gmail.com', '5565466', '2023-12-29 01:48:04', 'Block 2', 'Disapproved', 2),
(12, 'mr.bean 2027', 'Family State', 'Block 4', 'arnoco@gmail.com', '2332323', '2024-01-15 16:40:43', 'Family State Block 28', 'Disapproved', 0),
(13, 'mr.bean 2025', 'Family State', 'Block 4', 'arnoco@gmail.com', '2332323', '2024-01-16 05:20:09', 'Family State Block 28', 'Disapproved', 0),
(14, 'Mr. Bean 2025', 'Family State', 'Block 1', 'mrbean2024@gmail.com', '344343', '2024-01-16 14:59:17', 'Family State Block 28', 'Approved', 0),
(15, 'Mr. Bean 2025errwerwrwerew', 'Family State', 'Block 4', 'mrbean2024@gmail.com', '344343', '2024-01-16 15:00:55', 'Family State Block 28', 'Approved', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservationupdate`
--
ALTER TABLE `reservationupdate`
  ADD PRIMARY KEY (`reserved_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservationupdate`
--
ALTER TABLE `reservationupdate`
  MODIFY `reserved_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
