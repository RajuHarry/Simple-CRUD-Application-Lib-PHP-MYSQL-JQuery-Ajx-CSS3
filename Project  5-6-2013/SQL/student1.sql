-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2013 at 10:04 AM
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
-- Table structure for table `student1`
--

CREATE TABLE IF NOT EXISTS `student1` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `student1`
--

INSERT INTO `student1` (`id`, `fname`, `mname`, `lname`, `email`, `phone`, `ms`, `landmark`, `room`, `city`, `state`, `pin`, `radio`, `class`, `Nation`, `roll`, `dob`) VALUES
(2, 'gfhgfh', 'rhgfhfhgf', 'hgfhgfhfh', 'fhfhfgh@test.com', '453646567', 'gdfgd', '345', 'gdfgdfg', 'gfgdfgd', 'dgdgdg', '345457', 'Male', 'F.Y.Bsc.(I.T)', 'dfgdfgfgh', 345, '05/22/2013'),
(3, 'dfgdfgd', 'gdgdfgdf', 'gdfgdfg', 'dfgdfg', '', '', '', '', '', '', '', 'Male', 'F.Y.Bsc.(I.T)', '', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
