-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 18, 2016 at 03:15 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `biometric`
--
CREATE DATABASE `biometric` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `biometric`;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `Name` varchar(10) NOT NULL,
  `Adm_No` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Dept` varchar(5) NOT NULL,
  `Sem` varchar(1) NOT NULL,
  `Sub1` varchar(10) NOT NULL,
  `Sub2` varchar(10) NOT NULL,
  `Sub3` varchar(10) NOT NULL,
  `Hour1` int(1) NOT NULL,
  `Hour2` int(1) NOT NULL,
  `Hour3` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`Name`, `Adm_No`, `Date`, `Dept`, `Sem`, `Sub1`, `Sub2`, `Sub3`, `Hour1`, `Hour2`, `Hour3`) VALUES
('Shahid S', 's12ec339', '2016-04-01', 'ECE', '8', 'CC', 'SAT', 'RTV', 1, 1, 0),
('Nidhin S', 's12ec306', '2016-04-01', 'ECE', '8', 'CC', 'SAT', 'RTV', 1, 1, 1),
('Sachin T', 's12ec239', '2016-04-01', 'ECE', '8', 'CC', 'SAT', 'RTV', 1, 1, 0),
('Shabin S', 's12ec247', '2016-04-01', 'ECE', '8', 'CC', 'SAT', 'RTV', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `username` varchar(5) NOT NULL,
  `password` varchar(5) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`username`, `password`) VALUES
('rsk', 'rsk');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uname` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uname`, `password`) VALUES
('s12ec239', 's12ec239'),
('s12ec247', 's12ec247'),
('s12ec306', 's12ec306'),
('s12ec339', 's12ec339');
