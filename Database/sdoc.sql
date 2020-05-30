-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 25, 2017 at 08:32 PM
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
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL auto_increment,
  `post_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `answer` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=113 ;

--
-- Dumping data for table `answer`
--


-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL auto_increment,
  `filename` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `path` varchar(500) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `file`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `friendlist`
--

INSERT INTO `friendlist` (`fid`, `uid`, `f_id`, `accept`) VALUES
(10, 10, 12, 1),
(11, 12, 10, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

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

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL auto_increment,
  `sid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `postdate` date NOT NULL,
  `file` varchar(1000) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `message`
--


-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(10) NOT NULL auto_increment,
  `uid` int(10) NOT NULL,
  `que` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `uid`, `que`, `date`) VALUES
(34, 10, 'hello', '2017-10-25');
