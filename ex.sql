-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 03:18 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ex`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `userid` varchar(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `quanity` int(11) NOT NULL,
  `isActive` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `userid`, `itemid`, `quanity`, `isActive`) VALUES
(11, 'bevy', 3, 6, 0),
(10, 'bevy', 2, 3, 0),
(9, 'bevy', 1, 3, 0),
(8, 'admin', 1, 3, 0),
(12, 'gune', 2, 9, 0),
(13, 'admin', 6, 3, 0),
(14, 'admin', 7, 2, 1),
(15, 'admin', 5, 1, 1),
(16, 'admin', 6, 5, 1),
(17, 'bevy', 5, 10, 1),
(18, 'admin', 7, 5, 1),
(19, 'admin', 5, 4, 0),
(20, 'admin', 8, 7, 1),
(21, 'admin', 1, 3, 1),
(22, 'admin', 5, 1, 0),
(23, 'admin', 7, 2, 1),
(24, 'admin', 1, 2, 0),
(25, 'admin', 5, 2, 0),
(26, 'admin', 5, 3, 0),
(27, 'admin', 8, 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `unit_price` double NOT NULL,
  `image_url` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `unit_price`, `image_url`) VALUES
(1, 'Honda Ridgeline', 6000000, 'https://article.images.consumerreports.org/prod/content/dam/CRO%20Images%202017/Magazine-Articles/April/CR-Inline-top-picks-Ridgeline-02-17'),
(5, 'Tesla V800', 2080000, 'https://article.images.consumerreports.org/prod/content/dam/CRO%20Images%202017/Magazine-Articles/April/CR-Inline-top-picks-Toyota-Yaris-02-17'),
(6, 'Ford F-150', 7000000, 'https://article.images.consumerreports.org/prod/content/dam/CRO%20Images%202018/Magazine/04April/CRM-Cars-Inline-TopTen-Ford-F150-2018-4-18'),
(7, 'Toyota Highlander', 9000000, 'https://article.images.consumerreports.org/prod/content/dam/CRO%20Images%202018/Magazine/04April/CRM-Cars-Inline-TopTen-Toyota-Highlander-2018-4-18'),
(8, 'Chevrolet Impala', 75620000, 'https://article.images.consumerreports.org/prod/content/dam/CRO%20Images%202018/Magazine/04April/CRM-Cars-inline-TopTen-Chevrolet-Imapla-2018-4-18');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `address`, `telephone`, `email`) VALUES
(1, 'srer', 'dfsfg', 'fdgf', 'dg`', 'gsg'),
(2, 'admin', '123', 'fdhgd', 'dgfj', 'gdfjh'),
(4, 'sumana', 'kk123', 'hsdl', '078986532', 'kaS@gmail.com'),
(5, '10', '', '', '', ''),
(6, 'bevy', '789', 'sdfda', '5656', 'bevylabs@gmail.com'),
(7, 'solo', '789', 'Sumana paya', '', 'solo@gmail.com'),
(8, 'gune', 'gune', 'hjkafkj', '89652', 'gune@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
