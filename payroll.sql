-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2017 at 01:32 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(250) NOT NULL,
  `postal` varchar(100) NOT NULL,
  `province` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `join_date` date NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `basic_pay` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `gender`, `address`, `city`, `postal`, `province`, `email`, `join_date`, `employee_id`, `basic_pay`) VALUES
(4, 'aName test', 'male', 'wefwrefwre frfr rrgreg\r\ngre gregreg', 'cityz', 'Codezz', 'Provincezz', 'e@g.comz', '1990-06-30', '5455wqe', '440000'),
(5, 'Name test', 'male', 'wefwrefwre frfr rrgreg\r\ngre gregreg', 'cityz', 'Codezz', 'Provincezz', 'e@g.comz', '1990-06-30', '54554', '440000'),
(7, 'fwtest', 'male', 'wefwrefwre frfr rrgreg\r\ngre gregreg', 'cityz', 'Codezz', 'Provincezz', 'e@g.comz', '1990-06-30', '545', '45916'),
(8, 'Name test', 'male', 'wefwrefwre frfr rrgreg\r\ngre gregreg', 'cityz', 'Codezz', 'Provincezz', 'e@g.comz', '1990-06-30', '5453', '145000'),
(9, 'cp', 'male', 'wefwrefwre frfr rrgreg\r\ngre gregreg', 'cityz', 'Codezz', 'Provincezz', 'e@g.comz', '1990-06-30', '523', '440000');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE IF NOT EXISTS `payroll` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `emp_id` varchar(200) NOT NULL,
  `annual_pay` int(200) NOT NULL,
  `tax` varchar(200) NOT NULL,
  `monthly_pay` varchar(200) NOT NULL,
  `netsalary` varchar(255) NOT NULL,
  `createat` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`id`, `name`, `emp_id`, `annual_pay`, `tax`, `monthly_pay`, `netsalary`, `createat`) VALUES
(1, '9', '523', 440000, '33%', '145200', '', '2017-10-03'),
(2, 'fwtest', '545', 45916, '15%', '6887.4', '', '2017-10-03'),
(3, 'cp', '523', 440000, '$12100', '$36666.666666666664', '', '2017-10-03'),
(4, 'fwtest', '545', 45916, '$573.95', '$3826.3333333333335', '', '2017-10-03'),
(5, 'fwtest', '545', 45916, '$573.95', '$3826.3333333333335', '$3253', '2017-10-03'),
(6, 'fwtest', '545', 45916, '$573.95', '$3826.3333333333335', '$3253', '2017-10-03'),
(7, 'cp', '523', 440000, '33%', '$36666.666666666664', '$24567', '2017-10-03'),
(8, 'cp', '523', 440000, '33%', '$36666.666666666664', '$24567', '2017-10-03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
