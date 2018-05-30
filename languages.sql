-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2018 at 03:15 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `languages`
--

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `SessionID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Language` text,
  `Date` date DEFAULT NULL,
  `Time_In` time DEFAULT NULL,
  `Time_Out` time DEFAULT NULL,
  PRIMARY KEY (`SessionID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`SessionID`, `Language`, `Date`, `Time_In`, `Time_Out`) VALUES
(1, 'French', '0000-00-00', '00:00:15', '00:00:16'),
(2, 'Portuguese', NULL, NULL, NULL),
(3, 'Spanish', '0000-00-00', NULL, NULL),
(4, 'English', '0000-00-00', '00:00:13', NULL),
(5, 'Spanish', '0000-00-00', '00:00:13', '00:00:13'),
(6, 'Spanish', '0000-00-00', '00:00:13', '00:00:13'),
(7, 'Spanish', '0000-00-00', '00:00:14', '00:00:16'),
(8, '', '0000-00-00', '00:00:13', '00:00:13'),
(9, 'Spanish', '0000-00-00', '00:13:00', '00:13:30'),
(10, NULL, NULL, NULL, NULL),
(11, 'Chinese', '0000-00-00', '00:00:14', '00:00:15'),
(12, 'Spanish', '0000-00-00', '00:00:00', '00:00:00'),
(13, 'Spanish', '0000-00-00', '00:00:00', '00:00:00'),
(14, 'Spanish', '0000-00-00', '00:00:00', '00:00:00'),
(15, 'Chinese', '0000-00-00', '00:00:00', '00:00:00'),
(16, 'French', '0000-00-00', '00:00:00', '00:00:00'),
(17, 'Vietnamese', '0000-00-00', '00:00:00', '00:00:00'),
(18, 'English', '0000-00-00', '00:00:00', '00:00:00'),
(19, 'Thai', '0000-00-00', '00:00:00', '00:00:00'),
(20, 'Spanish', '0000-00-00', '00:00:00', '00:00:00'),
(22, 'Spanish', '0000-00-00', '00:00:00', '00:00:00'),
(23, 'Spanish', '0000-00-00', '00:00:00', '00:00:00'),
(24, 'Spanish', '0000-00-00', '00:00:00', '00:00:00'),
(25, 'Spanish', '0000-00-00', '00:00:00', '00:00:00'),
(26, 'Spanish', '0000-00-00', '00:00:00', '00:00:00'),
(27, 'Spanish', '0000-00-00', '00:00:00', '00:00:00'),
(28, 'German', '0000-00-00', '00:00:00', '00:00:00'),
(29, 'Spanish', '0000-00-00', '00:00:00', '00:00:00'),
(33, 'Spanish', '0000-00-00', '00:00:00', '00:00:00'),
(35, 'Spanish', '0000-00-00', '00:00:00', '00:00:00'),
(36, 'Vietnamese', '0000-00-00', '00:00:00', '00:00:00'),
(37, 'Spanish', '0000-00-00', '00:00:00', '00:00:00'),
(38, 'Spanish', '0000-00-00', '00:00:00', '00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
