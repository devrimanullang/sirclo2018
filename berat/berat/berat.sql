-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 13, 2018 at 05:15 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berat`
--

CREATE TABLE `tbl_berat` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `max` int(11) NOT NULL,
  `min` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berat`
--

INSERT INTO `tbl_berat` (`id`, `date`, `max`, `min`) VALUES
(10, '2018-08-22', 50, 49),
(11, '2018-08-21', 49, 49),
(12, '2018-08-20', 52, 50),
(13, '2018-09-19', 51, 50),
(14, '2018-08-18', 50, 48);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berat`
--
ALTER TABLE `tbl_berat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berat`
--
ALTER TABLE `tbl_berat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
