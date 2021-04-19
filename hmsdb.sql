-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2017 at 03:15 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctorapp`
--

CREATE TABLE `doctorapp` (
  `fname` varchar(80) NOT NULL,
  `lname` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `contact` varchar(80) NOT NULL,
  `doctor` varchar(80) NOT NULL,
  `payment` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorapp`
--

INSERT INTO `doctorapp` (`fname`, `lname`, `email`, `contact`, `doctor`, `payment`) VALUES
('dsskj', 'dkjn', 'dnkjn', 'kjdn', 'Dr. Temisan Momodu', ''),
('sdkjn', 'dskjnk', 'kfdjnkjn', 'jndkjn', 'Dr. Temisan Momodu', 'Pay later'),
('dexter', 'dutta', 'dd@yahoo.com', '327262728', 'Dr. Temisan Momodu', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `docname`
--

CREATE TABLE `docname` (
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `docname`
--

INSERT INTO `docname` (`name`) VALUES
('Dr. Temisan Momodu'),

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

CREATE TABLE `logintb` (
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`username`, `password`) VALUES
('admin', 'pass');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
