-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 07, 2017 at 04:16 PM
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
-- Table structure for table `friendlist`
--

CREATE TABLE `friendlist` (
  `fid` int(10) NOT NULL auto_increment,
  `uid` int(10) NOT NULL,
  `f_id` int(10) NOT NULL,
  `accept` tinyint(1) NOT NULL,
  PRIMARY KEY  (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `friendlist`
--

INSERT INTO `friendlist` (`fid`, `uid`, `f_id`, `accept`) VALUES
(1, 10, 10, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`id`, `fname`, `lname`, `password`, `username`, `email`, `gender`, `contactno`) VALUES
(10, 'dainik', 'ARTHANIA', 'DAINIK', 'dainik arthania', 'male', '', '123456789'),
(12, 'DEPP', 'DD', '123', 'DD AA', 'male', '', '9666666666'),
(13, 'aAa', 'A', 'A', 'A', 'A@COM', 'male', 'A'),
(14, 'DD', 'dD', 'DD', 'DD', 'd@mail.com', 'male', '123');
