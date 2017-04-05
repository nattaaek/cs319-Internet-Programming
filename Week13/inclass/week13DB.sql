-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2017 at 09:11 AM
-- Server version: 5.6.31
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `week13DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE IF NOT EXISTS `division` (
  `id` int(2) NOT NULL,
  `name_div` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `sex` varchar(10) NOT NULL,
  `name_emp` varchar(40) NOT NULL,
  `emp_picture` varchar(40) NOT NULL,
  `salary` int(7) NOT NULL,
  `start_date` date NOT NULL,
  `division_id` int(2) NOT NULL,
  `province_id` int(2) NOT NULL,
  `flag` varchar(1) NOT NULL,
  `id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`sex`, `name_emp`, `emp_picture`, `salary`, `start_date`, `division_id`, `province_id`, `flag`, `id`) VALUES
('ชาย', 'สุริยะ วรรณดี', '1.jpg', 10000, '2011-10-29', 2, 14, '', 1),
('ชาย', 'อภิรักษ์ ดีมาก', '2.jpg', 15000, '2010-02-10', 3, 2, '', 2),
('ชาย', 'เดช วังไชย', '3.jpg', 25000, '2009-06-20', 1, 12, '', 3),
('หญิง', 'สมใจ ดาพร', '4.jpg', 9900, '2009-12-11', 2, 12, '', 4),
('หญิง', 'ชนิดาพร สกุลดี', '5.jpg', 10000, '2010-04-20', 4, 3, '', 5),
('ชาย', 'สุพจน์ วงศ์ดำ', '6.jpg', 14300, '2009-03-10', 2, 15, '1', 6),
('ชาย', 'สุพจน์ วงศ์คำ', '7.jpg', 99000, '1994-09-16', 1, 1, '1', 7);

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE IF NOT EXISTS `province` (
  `id` int(11) NOT NULL,
  `nameis` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `nameis`) VALUES
(1, 'กรุงเทพ'),
(2, 'กระบี่'),
(3, 'กาญจนบุรี'),
(4, 'กาฬสินธุ์'),
(5, 'กำแพงเพชร'),
(11, 'ชัยภูมิ'),
(12, 'ชุมพร'),
(13, 'เชียงราย'),
(14, 'เชียงใหม่'),
(15, 'ตรัง');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(3) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `nameis` varchar(40) NOT NULL,
  `flah` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nameis`, `flah`) VALUES
(0, 'nattaaek', 'changewolvszd;ml', 'NattaaekWattanuyan', ''),
(1, 'a1', 'a1', 'สุริยะ วรรณดี', '1'),
(2, 'a2', 'a2', 'อภิรักษ์ ดีมาก', ''),
(3, 'a3', 'a3', 'เดช วังไชย', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
