-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 31, 2013 at 07:24 PM
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
