-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2019 at 07:15 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `surveyproject2`
--

-- --------------------------------------------------------

--
-- Table structure for table `userlogindetails`
--

CREATE TABLE IF NOT EXISTS `userlogindetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Phonenumber` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `userlogindetails`
--

INSERT INTO `userlogindetails` (`id`, `Username`, `Password`, `Phonenumber`) VALUES
(1, 'abc', 'abc1', '122322'),
(2, 'user1', 'pass1', '12346'),
(3, 'username123', 'password123', 'phonenumer123'),
(4, 'newuser', 'newpass', '1234567'),
(5, 'nimal', 'nimal', '96561198');

-- --------------------------------------------------------

--
-- Table structure for table `userupdate`
--

CREATE TABLE IF NOT EXISTS `userupdate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(100) NOT NULL,
  `Question` text NOT NULL,
  `Answer` text NOT NULL,
  `Agree` int(11) NOT NULL,
  `Disagree` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `userupdate`
--

INSERT INTO `userupdate` (`id`, `Username`, `Question`, `Answer`, `Agree`, `Disagree`) VALUES
(1, 'nimal', 'hAI', 'hello', 1, 1),
(2, 'user1', 'who are you?', 'am good', 1, 0),
(3, 'nimal', 'feel good?', 'yes .', 2, 1),
(4, 'username123', 'question by use username123', 'answer for the user username123', 5, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
