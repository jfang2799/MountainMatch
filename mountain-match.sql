-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2018 at 05:55 PM
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
  `urban` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`latitude`, `longitude`, `type`, `lip`, `urban`) VALUES
(42.96581221408568, -72.90638688951731, 'Easy', 0, 0),
(42.956470850771694, -72.90882367640735, 'Hard (Without Lip)', 0, 1),
(42.9591482463886, -72.89613858796658, 'Hard (With Lip)', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jumps`
--

CREATE TABLE `jumps` (
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jumps`
--

INSERT INTO `jumps` (`latitude`, `longitude`, `type`, `size`) VALUES
(42.95686640058241, -72.8965998440981, 'Big Jump', 1000),
(42.96206303133158, -72.90386326611042, 'Small Jump', 10);

-- --------------------------------------------------------

--
-- Table structure for table `trails`
--

CREATE TABLE `trails` (
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `length` int(11) NOT NULL,
  `difficulty` tinyint(4) NOT NULL,
  `accuracy` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trails`
--

INSERT INTO `trails` (`latitude`, `longitude`, `name`, `length`, `difficulty`, `accuracy`) VALUES
(42.7284, 73.6918, 'easy_accurate', 802, 1, 5),
(42.7295, 73.6928, 'easy_innacurate', 802, 1, 1),
(42.7304, 73.6938, 'hard_accurate', 802, 5, 5),
(42.7314, 73.6948, 'hard_innacurate', 802, 5, 1);

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
  ADD UNIQUE KEY `latitude` (`latitude`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
