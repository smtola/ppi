-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 05:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppiinformation`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblpictures`
--

CREATE TABLE `tblpictures` (
  `pic_id` int(10) NOT NULL,
  `file` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `size` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tblpictures`
--

INSERT INTO `tblpictures` (`pic_id`, `file`, `type`, `size`) VALUES
(7, '3.jpg', 'image/jpeg', '90871'),
(8, '5.jpg', 'image/jpeg', '106705'),
(9, '4.jpg', 'image/jpeg', '91499'),
(10, '6.jpg', 'image/jpeg', '124668');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblpictures`
--
ALTER TABLE `tblpictures`
  ADD PRIMARY KEY (`pic_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblpictures`
--
ALTER TABLE `tblpictures`
  MODIFY `pic_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
