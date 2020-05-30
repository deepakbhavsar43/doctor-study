-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 08, 2017 at 04:50 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sdoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `id` int(11) NOT NULL auto_increment,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`id`, `fname`, `lname`, `password`, `username`, `email`, `gender`, `contactno`) VALUES
(10, 'dainik', 'ARTHANIA', 'DAINIK', 'dainik arthania', 'male', '', '123456789'),
(12, 'DEPP', 'DD', '123', 'DD AA', 'male', '', '9666666666'),
(13, 'aAa', 'A', 'A', 'A', 'A@COM', 'male', 'A'),
(14, 'DD', 'dD', 'DD', 'DD', 'd@mail.com', 'male', '123'),
(15, 'karan', 'modi', '1234', 'karan', 'karan@mail.com', 'male', '123456789'),
(16, 'jay', 'arthania', '123', 'jay', 'jay@mail.com', 'male', '123456789'),
(17, 'fenil', 'gajjar', '123', 'fenil', 'fenil@GMAIL.COM', 'male', '9666666666');
