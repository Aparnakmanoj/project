-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 03:59 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `loginid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `utype` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`loginid`, `username`, `password`, `utype`, `status`) VALUES
(1, 'admin', 'admin', 1, 1),
(2, 'Arun', 'Arun@123', 3, 0),
(3, 'Anna', 'Anna@1234', 3, 1),
(4, 'Abu', 'Abu@123', 4, 1),
(5, 'grace', 'Grace@123', 4, 1),
(6, 'Anoop', 'Anoop@123', 4, 1),
(7, 'Appu', 'Appu@123', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studreg`
--

CREATE TABLE `tbl_studreg` (
  `studid` int(11) NOT NULL,
  `loginid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_studreg`
--

INSERT INTO `tbl_studreg` (`studid`, `loginid`, `name`, `email`, `batch`, `phoneno`, `status`) VALUES
(1, 2, 'Arun', 'arun@gmail.com', 'A', 9876543211, 0),
(2, 3, 'Anna', 'anna@g.in', 'A', 9087654356, 1),
(3, 7, 'Appu', 'appu@gmail.com', 'B', 8634567832, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teachteg`
--

CREATE TABLE `tbl_teachteg` (
  `teachid` int(11) NOT NULL,
  `loginid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phoneno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_teachteg`
--

INSERT INTO `tbl_teachteg` (`teachid`, `loginid`, `name`, `email`, `phoneno`) VALUES
(1, 0, '', 'binu@g.com', 0),
(3, 16, 'feba123', 'a@a.com', -2147483648),
(4, 4, 'Manu', 'manu@gmail.com', 0),
(5, 7, '', '', 0),
(6, 12, 'Mani', 'mani@g.co', 2147483647),
(8, 5, 'grace', 'grace@g.in', 8976543245),
(9, 6, 'ANOP', 'anoop@gmai.com', 8956785432);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `tbl_studreg`
--
ALTER TABLE `tbl_studreg`
  ADD PRIMARY KEY (`studid`),
  ADD UNIQUE KEY `FOREIGN` (`loginid`);

--
-- Indexes for table `tbl_teachteg`
--
ALTER TABLE `tbl_teachteg`
  ADD PRIMARY KEY (`teachid`),
  ADD UNIQUE KEY `FOREIGN` (`loginid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `loginid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_studreg`
--
ALTER TABLE `tbl_studreg`
  MODIFY `studid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_teachteg`
--
ALTER TABLE `tbl_teachteg`
  MODIFY `teachid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
