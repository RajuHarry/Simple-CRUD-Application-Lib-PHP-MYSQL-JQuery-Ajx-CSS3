-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2013 at 10:03 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cmanage`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `ms` varchar(100) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `room` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `radio` enum('Male','Female') NOT NULL,
  `class` enum('F.Y.Bsc.(I.T)','S.Y.Bsc.(I.T)','T.Y.Bsc.(I.T)') NOT NULL,
  `Nation` varchar(100) NOT NULL,
  `roll` int(10) NOT NULL,
  `dob` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `fname`, `mname`, `lname`, `email`, `phone`, `ms`, `landmark`, `room`, `city`, `state`, `pin`, `radio`, `class`, `Nation`, `roll`, `dob`) VALUES
(12, 'Raju', 'Krishna', 'Pawar', 'sdfsdf@gmail.com', '1233333333', 'sdfsdf', 'sdfsdfdsf', '2123211', 'sdfsdfsdfds', 'sdfdsfdsfs', '11123122112', 'Male', 'T.Y.Bsc.(I.T)', 'sdfsdfsd', 1231, '12/12/2012'),
(13, 'FSDFD', 'SDFSDF', 'SDFSDF', 'e@GMAIL.COM', '2121312312', 'SDFSDF', 'sdfsdfdsf', '', 'SDFSDF', 'SDFSDFSDF', '', 'Male', 'F.Y.Bsc.(I.T)', 'SDFSDFSDF', 0, '05/15/2013');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
