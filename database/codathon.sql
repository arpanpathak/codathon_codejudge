-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2016 at 12:45 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `crn` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `attempt` int(11) NOT NULL,
  `problem1` int(11) NOT NULL,
  `problem2` int(11) NOT NULL,
  `problem3` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `year`, `crn`, `password`, `attempt`, `problem1`, `problem2`, `problem3`) VALUES
('admin', 'arpan roy', 'arpan.pathak47@gmail.com', 3, 'CSE/2014/045', 'admin', 1, 560, 0, 0),
('arpan1996', 'Arpan Pathak', 'arpanpathak1996@gmail.com', 2, 'CSE/2014/044', 'magimagi', 0, 560, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
