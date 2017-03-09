-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2017 at 08:31 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PhoneNo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Address` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`Id`, `Name`, `PhoneNo`, `Email`, `Address`) VALUES
(1, 'Ariful Islam', '01832264272', 'arifjmamun24@gmail.com', 'Dhaka Gazipur'),
(2, 'Shariful Islam', '01832264272', 'sharif@gmail.com', 'Sherpur'),
(3, 'Saiful Islam', '01730712138', 'saifulislamnpbs@gmail.com', 'Netrokona'),
(4, 'Razu Ahmed', '01730712138', 'amiothers@gmail.com', 'Jamalpur'),
(5, 'Shafiqul Islam', '01756893412', 'shafiqul@gmail.com', 'Gazipur, Sadar'),
(6, 'Rahim', '0345456543', 'rahim@gmail.com', 'Gazipur'),
(7, 'Sadia', '645645645', 'sadia@gmail.com', 'Gazipur'),
(8, 'Syed', '35340345034', 'syed@gmail.com', 'Netrokona Sadar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
