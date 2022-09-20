-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 04:25 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dogregistrationke`
--

-- --------------------------------------------------------

--
-- Table structure for table `inspection`
--

CREATE TABLE IF NOT EXISTS `inspection` (
  `dogIDNumber` int(255) NOT NULL,
  `enthusiasm` int(11) NOT NULL,
  `walk` int(11) NOT NULL,
  `vaccine` int(11) NOT NULL,
  `exercise` int(11) NOT NULL,
  `trained` int(11) NOT NULL,
  `interacts` int(11) NOT NULL,
  `healthy` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspection`
--

INSERT INTO `inspection` (`dogIDNumber`, `enthusiasm`, `walk`, `vaccine`, `exercise`, `trained`, `interacts`, `healthy`, `active`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, 1, 2, 3, 2, 3, 5, 2, 5),
(2, 1, 1, 1, 1, 1, 1, 1, 1),
(3, 5, 5, 5, 5, 5, 4, 3, 4),
(7, 1, 2, 3, 4, 5, 5, 5, 5),
(16, 1, 1, 2, 2, 3, 4, 5, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inspection`
--
ALTER TABLE `inspection`
 ADD PRIMARY KEY (`dogIDNumber`), ADD KEY `dogIDNumber` (`dogIDNumber`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
