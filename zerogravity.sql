-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 20, 2014 at 12:19 AM
-- Server version: 5.5.36-cll-lve
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zerogravity`
--

-- --------------------------------------------------------

--
-- Table structure for table `zg_adminusers`
--

CREATE TABLE IF NOT EXISTS `zg_adminusers` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('Active','Inactive','Banned') NOT NULL DEFAULT 'Banned',
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `zg_adminusers`
--

INSERT INTO `zg_adminusers` (`admin_id`, `fname`, `lname`, `email`, `mobile`, `username`, `password`, `status`) VALUES
(1, 'ZG', 'Studios', 'suseenthar.in@gmail.com', '9344008055', 'master', '0192023a7bbd73250516f069df18b500', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `zg_clients`
--

CREATE TABLE IF NOT EXISTS `zg_clients` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `createddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('Active','Inactive') NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `zg_clients`
--

INSERT INTO `zg_clients` (`cid`, `fname`, `lname`, `email`, `phone`, `address`, `createddate`, `status`) VALUES
(1, 'John', 'Peter', 'john@test.com', '9638527415', 'India', '2014-08-22 11:43:34', 'Active'),
(2, 'Peter', 'Mich', 'mich@test.com', '9638527416', 'Delhi', '2014-08-22 12:01:43', 'Active'),
(3, 'Test', 'Test', 'test@test.com', '9638527418', 'Test', '2014-08-22 12:01:34', 'Active'),
(4, 'Steave', 'Joop', 'steave@test.com', '9638527426', 'Delhi', '2014-08-22 12:04:22', 'Active'),
(6, 'Raj', 'Kumar', 'raj@test.com', '9632589636', 'Mumbai', '2014-08-22 12:10:37', 'Active'),
(7, 'William', 'Wordsworth', 'william@test.com', '9874563214', 'Madurai', '2014-08-22 12:11:36', 'Active'),
(8, 'Hampard', 'Steve', 'hampard@test.com', '8523697415', 'Chennai', '2014-08-22 12:13:49', 'Active'),
(9, 'Michael', 'Raj', 'michael@test.com', '8582693789', 'Trichy', '2014-08-22 12:15:06', 'Active'),
(10, 'John', 'Hassi', 'hassi@test.com', '8526549513', 'Washington', '2014-08-22 12:16:14', 'Active'),
(11, 'McMilliam', 'Peter', 'mcmilliam@test.com', '8523699635', 'Trivandrum', '2014-08-22 12:17:05', 'Active'),
(12, 'Abaraham', 'Lincoln', 'abaraham@test.com', '9512365478', 'New York', '2014-08-22 12:17:58', 'Active'),
(13, 'Clients', 'Clients', 'clientsdf@test.com', '987456123', 'asdasfdas', '2014-08-22 18:34:24', 'Active'),
(14, 'asdf', 'asdf', 'asdf@test.com', 'asdf', 'asdf', '2014-08-22 18:41:33', 'Active'),
(15, 'Dinesh', 'Dinesh', 'dineshds@test.com', '98745612356', 'Clients', '2014-08-22 18:42:11', 'Active'),
(16, 'Test12', 'Test12', 'Test12@test.com', '9632396323', 'Test12', '2014-08-22 18:42:42', 'Active'),
(17, 'Dineshd', 'Dinesh', 'dineshdds@test.com', '98745612358', 'Clients', '2014-08-22 18:43:46', 'Active'),
(18, 'Test24', 'Test24', 'Test24@gmail.com', '9632587415', 'Test24', '2014-08-23 11:50:04', 'Active'),
(20, 'Test', 'TestTestTest', 'Test@testadmin.com', '963258444', 'Test', '2014-09-05 13:35:18', 'Active'),
(21, 'krishnan', 'bose', 'krish@gmail.com', '8867569694', 'test', '2014-09-05 16:54:01', 'Active'),
(22, 'Jai', 'Ram', 'jxr016@gmail.com', '9878787654', '', '2014-09-13 19:24:07', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `zg_enquires`
--

CREATE TABLE IF NOT EXISTS `zg_enquires` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `eventslist` varchar(3000) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `quotation` varchar(255) NOT NULL,
  `followup` varchar(255) NOT NULL,
  `status` enum('Cleared','Cancel','Confirm','Follow Up','Pending') NOT NULL,
  `createddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `zg_enquires`
--

INSERT INTO `zg_enquires` (`eid`, `client_id`, `eventslist`, `title`, `description`, `quotation`, `followup`, `status`, `createddate`) VALUES
(7, 20, 'a:3:{i:0;a:4:{s:9:"eventname";s:19:"Marriage Engagement";s:9:"eventdate";s:10:"2014-09-05";s:16:"eventdescription";s:3:"f h";s:14:"eventquotation";s:4:"gh g";}i:1;a:4:{s:9:"eventname";s:19:"Marriage Engagement";s:9:"eventdate";s:10:"2014-09-05";s:16:"eventdescription";s:4:"d fh";s:14:"eventquotation";s:5:"dfhgh";}i:2;a:4:{s:9:"eventname";s:19:"Marriage Engagement";s:9:"eventdate";s:10:"2014-09-05";s:16:"eventdescription";s:3:"fgh";s:14:"eventquotation";s:4:" gfh";}}', '', '', 'gf hfgh', '', 'Cleared', '2014-09-05 10:18:47'),
(8, 21, 'a:1:{i:0;a:4:{s:9:"eventname";s:19:"Marriage Engagement";s:9:"eventdate";s:10:"2014-09-05";s:16:"eventdescription";s:19:"Marriage Engagement";s:14:"eventquotation";s:4:"1500";}}', '', '', '5220', '', 'Cleared', '2014-09-05 13:48:04'),
(10, 20, 'a:2:{i:0;a:4:{s:9:"eventname";s:19:"Marriage Engagement";s:9:"eventdate";s:10:"2014-09-05";s:16:"eventdescription";s:4:"Test";s:14:"eventquotation";s:5:"25000";}i:1;a:4:{s:9:"eventname";s:17:"Marriage Function";s:9:"eventdate";s:10:"2014-09-05";s:16:"eventdescription";s:6:"Test12";s:14:"eventquotation";s:5:"35000";}}', 'Test', 'TestTestTestTest', '50000', 'Test', 'Cleared', '2014-09-05 20:35:18'),
(11, 21, 'a:1:{i:0;a:4:{s:9:"eventname";s:17:"Marriage Function";s:9:"eventdate";s:10:"2017-04-16";s:16:"eventdescription";s:4:"good";s:14:"eventquotation";s:4:"5000";}}', 'k', 'sdf', '5000', 'yes', 'Cleared', '2014-09-05 23:54:01'),
(12, 22, 'a:1:{i:0;a:4:{s:9:"eventname";s:17:"Marriage Function";s:9:"eventdate";s:10:"2014-09-17";s:16:"eventdescription";s:8:"Marriage";s:14:"eventquotation";s:5:"20000";}}', '', '', '', '0', 'Cleared', '2014-09-14 02:24:07');

-- --------------------------------------------------------

--
-- Table structure for table `zg_events`
--

CREATE TABLE IF NOT EXISTS `zg_events` (
  `evid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `createddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`evid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `zg_events`
--

INSERT INTO `zg_events` (`evid`, `title`, `createddate`, `status`) VALUES
(1, 'Marriage Function', '2014-08-20 11:45:50', 'Active'),
(2, 'Marriage Reception', '2014-08-20 11:45:52', 'Active'),
(3, 'Ear Piercing Function ', '2014-08-20 11:45:33', 'Active'),
(4, 'Turmeric Bathing Ceremony', '2014-08-20 11:45:33', 'Active'),
(5, 'Marriage Engagement', '2014-08-21 19:50:15', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `zg_orders`
--

CREATE TABLE IF NOT EXISTS `zg_orders` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `createddate` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
