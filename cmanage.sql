-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2013 at 02:28 PM
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
-- Table structure for table `bx_events_main`
--

CREATE TABLE IF NOT EXISTS `bx_events_main` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `EventStart` varchar(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Place` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `elib`
--

CREATE TABLE IF NOT EXISTS `elib` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `detail` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `elib`
--

INSERT INTO `elib` (`id`, `title`, `detail`) VALUES
(1, 'Java', 'JAVa');

-- --------------------------------------------------------

--
-- Table structure for table `fileupload`
--

CREATE TABLE IF NOT EXISTS `fileupload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `fileupload`
--

INSERT INTO `fileupload` (`id`, `file`) VALUES
(24, 'Blue hills.jpg'),
(25, 'Ganesha.jpg'),
(26, 'hanuman_by_molee-d3joem9 (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `pwd` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `uname`, `pwd`) VALUES
(1, 'Cmanage', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `detail`) VALUES
(1, '<p align="center">Project Document</p>\n<p align="center">For</p>\n<p align="center">CCom Enterprise Pvt. Ltd.</p>\n<p align="center">COLLEGE MANAGEMENT SYSTEM</p>\n<p align="center">BY</p>\n<p align="center">RAJESH KRISHNA PAWAR</p>\n<p align="center">(RAJU)</p>\n<p align="center"style="font-size:12px;">Email:Rajuharry4592@gmail.com</p>'),
(2, '<div style="font-size:13px;"><p align="center"><b>Introduction</b></p>\r\n<p align="left"><b>Purpose of this document</b></p>\r\n<p align="left">A college has multiple types of courses which have different types of criteria of admission,\r\nfee, affiliation or course curriculum. So to manage the students data, their fee details,\r\norganization of exams, their course plans all these tasks become very tedious and\r\nas day by day each year complexity in college management increases due to increase\r\ndata size, rules by regulatory bodies and the competition. College Management system\r\ngives a standard way to execute the process so chances of mistakes become very less.\r\n<p align="left">The purpose of this project is to provide a friendly environment to maintain the details of\r\nstudents and staff members. The main purpose of this project is to maintain easy circulation\r\nsystem using computers.</p>\r\n</div>'),
(3, '<div style="font-size:13px;"><h1></h1>\r\n<p align="left"><b>Scope of this document</b></p>\r\n<p align="left">The document only covers the requirements specifications for the College Management\r\nSystem. This document does not provide any references to the other component of the\r\nCollege Management System. All the internal interfaces and the dependencies are also\r\nidentified in this document.</br>\r\n<p align="left"><b>Overview</b></p>\r\n<p align="left">The implementation of College Management starts with entering and updating master\r\nrecords like students, staff details, e-library , college information. Any further information\r\nabout the college. It provides most sofisticated way to analyze all record of Students\r\nand Staff as well as it provides E-Library for Students so that any student of college can\r\neasily find,solve their problem regarding with their study. E-Library is nothing but free\r\nservice provided for Students and their staff.</p>\r\n</div>'),
(4, '<div style="font-size:13px;"><p align="left"><b>General Description</b></p>\r\n<p align="left">User characteristics</p>\r\n<p align="left">We have 2 levels of users</p>\r\n<p align="left">User module: In the user module, user will check their New Notes and college events.</p>\r\n<p align="left">Administration module: The following are the sub module in the administration module.</p>\r\n<p align="left">Register user</p>\r\n<p align="left">Entry student details</p>\r\n<p align="left">Entry staff details</p>\r\n<p align="left">E-Library Updation</p>\r\n</div>'),
(5, '<div style="font-size:13px;"><h1></h1>\r\n<p align="left"><b>Security</b></p>\r\n<ul>\r\n<li> Only administrator have the authority to Update,Edit,Deletion of database Entry.</li>\r\n<li> No one can enter the system without a username and password.</li>\r\n<li>Normal system users can not access the administrators login.</li>\r\n<li>All deleting actions are notified by a message box asking to confirm deletion.</li>\r\n</ul>\r\n</div>'),
(7, '<div style="font-size:13px;"><h1></h1><p align="left"><b>Hardware Interfaces</b></p>\r\n<p>Operating System : Windows,MAC,Linux>/p>\r\n<p>RAM : 512 MB</p>\r\n<p>Processor: Pentium(R)Dual-core or higher</p>\r\n<p>Internet speed Minimum: 256 kbps , Recommended: 512 kbps</p>\r\n</div>');

-- --------------------------------------------------------

--
-- Table structure for table `php`
--

CREATE TABLE IF NOT EXISTS `php` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `detail` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `php`
--

INSERT INTO `php` (`id`, `title`, `detail`) VALUES
(2, 'Html', 'HTML  CSS CSS3'),
(12, 'PHP ', 'PHP goes here'),
(13, 'css', 'htaml goes here');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `student1`
--

INSERT INTO `student1` (`id`, `fname`, `mname`, `lname`, `email`, `phone`, `ms`, `landmark`, `room`, `city`, `state`, `pin`, `radio`, `class`, `Nation`, `roll`, `dob`) VALUES
(2, 'gfhgfh', 'rhgfhfhgf', 'hgfhgfhfh', 'fhfhfgh@test.com', '453646567', 'gdfgd', '345', 'gdfgdfg', 'gfgdfgd', 'dgdgdg', '345457', 'Male', 'F.Y.Bsc.(I.T)', 'dfgdfgfgh', 345, '05/22/2013'),
(3, 'dfgdfgd', 'gdgdfgdf', 'gdfgdfg', 'dfgdfg', '', '', '', '', '', '', '', 'Male', 'F.Y.Bsc.(I.T)', '', 0, ''),
(11, '', '', '', '', '', '', '', '', '', '', '', 'Male', 'F.Y.Bsc.(I.T)', '', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
