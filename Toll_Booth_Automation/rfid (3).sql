-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2017 at 05:10 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rfid`
--

-- --------------------------------------------------------

--
-- Table structure for table `charges`
--

CREATE TABLE IF NOT EXISTS `charges` (
  `RowNo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(50) NOT NULL,
  `vehicle` varchar(20) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`RowNo`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `charges`
--

INSERT INTO `charges` (`RowNo`, `id`, `vehicle`, `amount`) VALUES
(1, 'CR_1', 'Car', 20),
(3, 'SC_1', 'Scooter', 10),
(5, 'HV_1', 'Heavy Vehicle Contai', 50);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `RowNo` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `id` varchar(20) NOT NULL,
  `cost` int(11) NOT NULL,
  PRIMARY KEY (`RowNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`RowNo`, `date`, `time`, `id`, `cost`) VALUES
(12, '2017-08-14', '20:56:50', '0004515263', 20);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `type`) VALUES
('admin', 'admin', 1),
('varsha', 'varsha', 0);

-- --------------------------------------------------------

--
-- Table structure for table `toll`
--

CREATE TABLE IF NOT EXISTS `toll` (
  `RowNo` int(11) NOT NULL AUTO_INCREMENT,
  `rfid` varchar(20) NOT NULL,
  `regno` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `initialbal` int(11) NOT NULL,
  `tollamount` int(11) NOT NULL,
  `finalbal` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`RowNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `toll`
--

INSERT INTO `toll` (`RowNo`, `rfid`, `regno`, `uname`, `initialbal`, `tollamount`, `finalbal`, `date`, `time`, `status`) VALUES
(12, '0004515263', 'KL-01 5347', 'Vijay Venugopal', 200, 20, 180, '2017-08-14', '20:56:50', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `tollcorruption`
--

CREATE TABLE IF NOT EXISTS `tollcorruption` (
  `rowno` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `rfid` varchar(20) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`rowno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE IF NOT EXISTS `vehicles` (
  `rfidcode` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` varchar(12) NOT NULL,
  `registration` varchar(20) NOT NULL,
  `vehicle` varchar(20) NOT NULL,
  PRIMARY KEY (`rfidcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`rfidcode`, `username`, `address`, `email`, `mob`, `registration`, `vehicle`) VALUES
('0004515263', 'Vijay Venugopal', '', '', '', 'KL-01 5347', 'Car'),
('0005432586', 'Venugopal', 'jgkg', 'vv@gmail.com', '9895024791', 'KL-31-B-4874', 'Car'),
('0008644811', 'Varsha Venugopal', '', '', '', 'KL-03 6754', 'Bus');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE IF NOT EXISTS `wallet` (
  `rfid` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`rfid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`rfid`, `username`, `balance`) VALUES
('0004515263', 'Vijay Venugopal', 150),
('0008644811', 'Varsha Venugopal', 90);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
