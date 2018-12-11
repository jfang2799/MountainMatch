-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2018 at 03:18 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mountain-match`
--

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `lip` tinyint(1) DEFAULT NULL,
  `urban` tinyint(1) DEFAULT NULL,
  `trail` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`latitude`, `longitude`, `type`, `lip`, `urban`, `trail`) VALUES
(42.9528167, -72.9074707, 'SidePill Lip to Down', 1, 0, 'Nitro'),
(42.95293606, -72.90649223, 'UpDown Rail Transfer', 1, 1, 'Nitro'),
(42.95899168, -72.89778042, 'Down Box', 1, 0, 'The Gulch'),
(42.95883464, -72.9010849, 'FlatDown Rail', 1, 1, 'The Gulch'),
(0, 0, 'Waterfall Rail', 0, 1, 'The Gulch'),
(42.95936856, -72.9010849, 'Down Rail', 1, 0, 'The Gulch'),
(42.95918012, -72.89790917, 'Dancefloor', 1, 0, 'The Gulch'),
(42.9595256, -72.89679337, 'Down Box', 1, 0, 'The Gulch'),
(42.95939997, -72.89610672, 'Down Box', 1, 0, 'The Gulch'),
(42.95968263, -72.89550591, 'Donkey Dick Rail', 1, 0, 'The Gulch'),
(42.95977685, -72.89460468, 'Flat Tube', 1, 0, 'The Gulch'),
(42.95961982, -72.89391804, 'Transfer Tube', 1, 1, 'The Gulch'),
(42.95949419, -72.89250183, 'DownTube', 1, 1, 'The Gulch');

-- --------------------------------------------------------

--
-- Table structure for table `jumps`
--

CREATE TABLE `jumps` (
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `size` int(11) NOT NULL,
  `trail` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jumps`
--

INSERT INTO `jumps` (`latitude`, `longitude`, `type`, `size`, `trail`) VALUES
(42.95259055, -72.90790844, 'Kicker', 1, 'Nitro'),
(42.95325017, -72.9058485, 'Kicker', 10, 'Nitro'),
(42.9533444, -72.90494728, 'Nipple', 10, 'Nitro'),
(42.95347004, -72.9055481, 'Nipple', 10, 'Nitro'),
(42.95362709, -72.90396023, 'Nipple', 10, 'Nitro'),
(42.95375273, -72.90365982, 'Nipple', 10, 'Nitro'),
(42.95409824, -72.90329075, 'Kicker', 10, 'Nitro'),
(42.9543181, -72.90256119, 'Kicker', 15, 'Nitro'),
(42.95460079, -72.90187454, 'Kicker', 20, 'Nitro'),
(42.95472643, -72.9011879, 'Kicker', 30, 'Nitro'),
(42.95933716, -72.89786625, 'Kicker', 5, 'The Gulch'),
(42.95971404, -72.89280224, 'Kicker', 10, 'The Gulch');

-- --------------------------------------------------------

--
-- Table structure for table `trails`
--

CREATE TABLE `trails` (
  `name` varchar(20) NOT NULL,
  `difficulty` tinyint(4) NOT NULL,
  `accuracy` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trails`
--

INSERT INTO `trails` (`name`, `difficulty`, `accuracy`) VALUES
('Boulder Pile', 4, 5),
('Cooper\'s Junction', 2, 5),
('Cut-Off', 3, 5),
('Lodge', 3, 5),
('Nitro', 3, 5),
('Thanks Walt', 3, 5),
('The Gulch', 3, 5),
('Under Pressure', 3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD UNIQUE KEY `latitude` (`latitude`);

--
-- Indexes for table `jumps`
--
ALTER TABLE `jumps`
  ADD UNIQUE KEY `latitude` (`latitude`);

--
-- Indexes for table `trails`
--
ALTER TABLE `trails`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
