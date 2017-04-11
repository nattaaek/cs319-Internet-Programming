-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2017 at 11:27 AM
-- Server version: 5.6.31
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(3) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `name_emp` varchar(40) NOT NULL,
  `emp_picture` varchar(40) NOT NULL,
  `salary` int(7) NOT NULL,
  `start_date` date NOT NULL,
  `division_id` int(2) NOT NULL,
  `province_id` int(2) NOT NULL,
  `flag` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `sex`, `name_emp`, `emp_picture`, `salary`, `start_date`, `division_id`, `province_id`, `flag`) VALUES
(1, 'ชาย', 'สุริยะ วรรณดี', '1.jpg', 10000, '2011-10-29', 2, 14, ''),
(2, 'ชาย', 'อภิรักษ์ ดีมาก', '2.jpg', 15000, '2010-02-10', 3, 2, ''),
(3, 'ชาย', 'เดช วังไชย', '3.jpg', 25000, '2009-06-20', 1, 12, ''),
(4, 'หญิง', 'สมใจ ดาพร', '4.jpg', 9900, '2009-12-11', 2, 12, ''),
(5, 'หญิง', 'ชนิดาพร สกุลดี', '5.jpg', 10000, '2010-04-20', 4, 3, ''),
(6, 'ชาย', 'สุพจน์ วงศ์คำ', '6.jpg', 14300, '2009-03-10', 2, 15, '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
