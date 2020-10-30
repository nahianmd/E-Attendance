-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2019 at 09:00 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE `day` (
  `day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`day`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `name` varchar(30) NOT NULL,
  `id` varchar(10) NOT NULL,
  `fid` varchar(1000) NOT NULL,
  `day1` tinyint(1) NOT NULL DEFAULT '0',
  `day2` tinyint(1) NOT NULL DEFAULT '0',
  `day3` tinyint(1) NOT NULL DEFAULT '0',
  `day4` tinyint(1) NOT NULL DEFAULT '0',
  `day5` tinyint(1) NOT NULL DEFAULT '0',
  `day6` tinyint(1) NOT NULL DEFAULT '0',
  `day7` tinyint(1) NOT NULL DEFAULT '0',
  `day8` tinyint(1) NOT NULL DEFAULT '0',
  `day9` tinyint(1) NOT NULL DEFAULT '0',
  `day10` tinyint(1) NOT NULL DEFAULT '0',
  `day11` tinyint(1) NOT NULL DEFAULT '0',
  `day12` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`name`, `id`, `fid`, `day1`, `day2`, `day3`, `day4`, `day5`, `day6`, `day7`, `day8`, `day9`, `day10`, `day11`, `day12`) VALUES
('Md. Nahian', '14-26330-1', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Nueary Islam', '14-26331-1', '1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Tahzib Bin taslim', '14-26332-1', '2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Masuqur Rahman', '12-11100-1', '3', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `type`) VALUES
('nahian', '1234', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `day`
--
ALTER TABLE `day`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
