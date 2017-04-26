-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2017 at 07:58 AM
-- Server version: 5.6.31
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Final15`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` varchar(15) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `email` varchar(25) NOT NULL,
  `department` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `fullname`, `email`, `department`) VALUES
('1001', 'Nattaaek Wattanuyan', 'nattaaek.watt@bumail.net', 'cs'),
('1002', 'Sirinthorn Cheyasak', 'sirinthorn.c@bu.ac.th', 'cs'),
('1003', 'Natinee Meesuk', 'natinee@hotmail.com', 'it'),
('1004', 'Mongkol Sukdee', 'mongkol@gmail.com', 'se');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` varchar(15) NOT NULL,
  `gitchoose` int(11) NOT NULL,
  `gitbangkub` int(11) NOT NULL,
  `gitfreedom` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `gitchoose`, `gitbangkub`, `gitfreedom`, `total`) VALUES
('1001', 9, 3, 3, 26700),
('1002', 9, 3, 3, 26700),
('1003', 6, 3, 6, 24300),
('1004', 3, 9, 3, 24900);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
