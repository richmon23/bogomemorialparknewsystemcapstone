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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `username`, `password`) VALUES
(1, 'Desiree', 'Leal', 'admindes', 'admindes'),
(2, 'Richmon', 'Retiza', 'adminrichmon', 'adminrichmon'),
(3, 'John', 'Doe', 'admindoe23', 'admindoe23');

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

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `package` varchar(100) NOT NULL,
  `blocknumber` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `plotnumber` varchar(50) NOT NULL,
  `statusaccount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `fullname`, `package`, `blocknumber`, `email`, `contact`, `time`, `plotnumber`, `statusaccount`) VALUES
(28, 'Bill Gates', 'Garden', 'Block 3', 'email@gmail.com', '4656487', '2023-12-10 07:07:44', '14', ''),
(29, 'Mr. Bean', 'Family State', 'Block 3', 'email@gmail.com', '8787431', '2023-12-10 12:33:02', '15', ''),
(30, 'Bill Gates', 'Plot 1', 'Block 15', 'email@gmail.com', '4656487', '2023-12-10 12:39:47', 'Plot 15', ''),
(31, 'Richmon Retiza', 'Plot 1', 'Block 13', 'email@gmail.com', '4656487', '2023-12-10 12:40:48', 'Plot 11', ''),
(32, 'Jackie Mangubat', 'Plot 2', 'Block 2', 'jackie@gmail.com', '09653384884', '2023-12-10 13:23:00', 'Plot 4', ''),
(33, 'Marck Zuckerberg', 'Plot 3', 'Block 2', 'marck@outlook.com', '6789564', '2023-12-10 14:01:05', 'Plot 5', ''),
(34, 'Richmon Retiza', 'Plot 3', 'Block 3', 'retizarichmon84@gmail.com', '4656487', '2023-12-10 14:02:03', 'Plot 15', ''),
(35, 'Ursal Vince', 'Plot 1', 'Block 2', 'ursal@gmail.com', '797544613', '2023-12-10 14:11:30', 'Plot 3', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `password`) VALUES
(1, 'Desiree', 'Leal', 'des12345', 'des12345'),
(2, 'Desiree', 'Leal', 'des12345', 'des12345'),
(3, 'Desiree', 'Leal', 'des12345', 'des12345'),
(4, 'richmon', 'retiza', 'richmon2023', 'richmon2023'),
(5, 'mort', 'mort', 'mort', 'mort'),
(6, 'diamante', 'jemar', 'jd23', 'jd23'),
(7, 'bill', 'gates', 'billgates23', 'billgates23'),
(10, 'John', 'Wick', 'johnwick', 'johnwick'),
(11, 'Richmon', 'Retiza', 'richmon', 'richmon'),
(12, 'mark', 'gates', 'mark', 'mark');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deceasedperson`
--
ALTER TABLE `deceasedperson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `deceasedperson`
--
ALTER TABLE `deceasedperson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
