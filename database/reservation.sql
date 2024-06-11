-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 03:35 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
