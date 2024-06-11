-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 03:34 PM
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
-- Table structure for table `deceasedperson`
--

CREATE TABLE `deceasedperson` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `born` date NOT NULL,
  `died` date NOT NULL,
  `plotnumber` varchar(50) NOT NULL,
  `blocknumber` varchar(50) NOT NULL,
  `funeralday` date NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deceasedperson`
--

INSERT INTO `deceasedperson` (`id`, `fullname`, `address`, `born`, `died`, `plotnumber`, `blocknumber`, `funeralday`, `datecreated`) VALUES
(2, 'Brantly Yakov', 'Bogo City', '1953-06-15', '2023-12-10', 'Plot 1', 'Block 1', '2023-12-10', '2023-12-10 05:35:15'),
(4, 'Stillman Mara', 'Bogo City', '1953-06-15', '0223-01-23', 'Plot 2', 'Block 1', '2023-12-15', '2023-12-10 11:46:37'),
(5, 'Yoshi Fortin', 'Cebu City', '1953-06-15', '2023-01-23', 'Plot 3', 'Block 1', '2023-12-16', '2023-12-10 11:48:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deceasedperson`
--
ALTER TABLE `deceasedperson`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deceasedperson`
--
ALTER TABLE `deceasedperson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
