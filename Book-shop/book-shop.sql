-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2021 at 03:42 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `adventure`
--

DROP TABLE IF EXISTS `adventure`;
CREATE TABLE IF NOT EXISTS `adventure` (
  `Id` int(12) NOT NULL AUTO_INCREMENT,
  `Book_name` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Cover` longtext NOT NULL,
  `Summary` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `Id` int(12) NOT NULL,
  `userid` int(11) NOT NULL,
  `Quantity` int(12) NOT NULL,
  `category` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



-- --------------------------------------------------------

--
-- Table structure for table `comic`
--

DROP TABLE IF EXISTS `comic`;
CREATE TABLE IF NOT EXISTS `comic` (
  `Id` int(12) NOT NULL AUTO_INCREMENT,
  `Book_name` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Cover` longtext NOT NULL,
  `Summary` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detective`
--

DROP TABLE IF EXISTS `detective`;
CREATE TABLE IF NOT EXISTS `detective` (
  `Id` int(12) NOT NULL AUTO_INCREMENT,
  `Book_name` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Cover` longtext NOT NULL,
  `Summary` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `fiction`
--

DROP TABLE IF EXISTS `fiction`;
CREATE TABLE IF NOT EXISTS `fiction` (
  `Id` int(12) NOT NULL AUTO_INCREMENT,
  `Book_name` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Cover` longtext NOT NULL,
  `Summary` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `others`
--

DROP TABLE IF EXISTS `others`;
CREATE TABLE IF NOT EXISTS `others` (
  `Id` int(12) NOT NULL AUTO_INCREMENT,
  `Book_name` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Cover` longtext NOT NULL,
  `Summary` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `poetry`
--

DROP TABLE IF EXISTS `poetry`;
CREATE TABLE IF NOT EXISTS `poetry` (
  `Id` int(12) NOT NULL AUTO_INCREMENT,
  `Book_name` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Cover` longtext NOT NULL,
  `Summary` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `short_stories`
--

DROP TABLE IF EXISTS `short_stories`;
CREATE TABLE IF NOT EXISTS `short_stories` (
  `Id` int(12) NOT NULL AUTO_INCREMENT,
  `Book_name` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Cover` longtext NOT NULL,
  `Summary` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `User_type` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
