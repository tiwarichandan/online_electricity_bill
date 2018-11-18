-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2018 at 12:13 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `Username` varchar(30) NOT NULL,
  `bill_no` int(30) NOT NULL,
  `month` varchar(30) NOT NULL,
  `expiry_date` varchar(100) NOT NULL,
  `unit_consumed` int(30) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'unpaid'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`Username`, `bill_no`, `month`, `expiry_date`, `unit_consumed`, `status`) VALUES
('chandan1', 111, 'March', '', 1000, 'paid'),
('chandan1', 123, 'March', '', 200, 'paid'),
('chandan1', 444, 'volvo', '', 1110, 'paid'),
('chandan1', 123456, 'May', '', 500, 'paid'),
('chandan1', 1111, 'March', '', 100, 'paid'),
('chandan1', 1112, 'January', '', 900, 'paid'),
('dhruv1', 1234, 'February', '', 2000, 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(30) NOT NULL,
  `mobile_No` bigint(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `mobile_No`, `Email`, `feedback`) VALUES
('chandan', 777777777, 'tiwarichandan64@gmail.com', 'Nice'),
('dhruvhgds', 9648233550, 'z@w', 'dfghjkm,.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile_No` int(10) NOT NULL,
  `name` varchar(19) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `username`, `password`, `mobile_No`, `name`, `Email`, `address`, `feedback`) VALUES
(1, 'chandan1', 'chandan', 2147483647, 'Chandan', 'tiwarichandan64@gmail.com', 'alv fresh super market', ' good'),
(2, 'dhruv1', 'dhruv', 1234567890, 'dhruv', 'z@w.com', 'vbvnvnnbb', ''),
(3, 'abcd', 'abcd1', 1234567890, 'abc', 'abc@gmail.com', 'afdgfhhg', ''),
(4, 'cc1', 'cc', 12, 'c', 'z@w', 'ab', ''),
(5, 'aaa', '123', 456, 'ab', 'ab@g.com', 'hjk', ''),
(6, 'aaaaa', '11', 44, 'Chandan', 'z@w', 'uu', ''),
(8, 'hfg', '123', 44, 'hgfg', 'z@w', 'ffdfd', ''),
(9, 'aa', 'aa', 88, 'ghdgh', 'z@w', 'hjjh', '');

-- --------------------------------------------------------

--
-- Table structure for table `update_cost`
--

CREATE TABLE `update_cost` (
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update_cost`
--

INSERT INTO `update_cost` (`cost`) VALUES
(2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
