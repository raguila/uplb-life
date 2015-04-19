-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2015 at 03:15 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `it227`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `CategoryID` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(50) NOT NULL,
  `HouseID` int(11) NOT NULL,
  `UnitID` int(11) NOT NULL,
  PRIMARY KEY (`CategoryID`),
  KEY `HouseID` (`HouseID`,`UnitID`),
  KEY `UnitID` (`UnitID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE IF NOT EXISTS `houses` (
  `HouseID` int(11) NOT NULL AUTO_INCREMENT,
  `HouseName` varchar(30) NOT NULL,
  `HouseDescription` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Caretaker` varchar(30) NOT NULL,
  `ContactNo` int(15) NOT NULL,
  `Long` decimal(10,10) NOT NULL,
  `Lat` decimal(10,10) NOT NULL,
  PRIMARY KEY (`HouseID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `PictureID` int(11) NOT NULL AUTO_INCREMENT,
  `PictureName` varchar(30) NOT NULL,
  `HouseID` int(11) NOT NULL,
  `UnitID` int(11) NOT NULL,
  PRIMARY KEY (`PictureID`),
  KEY `HouseID` (`HouseID`,`UnitID`),
  KEY `UnitID` (`UnitID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE IF NOT EXISTS `tenants` (
  `TenantID` int(11) NOT NULL AUTO_INCREMENT,
  `TenantName` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Birthdate` date NOT NULL,
  `Age` int(3) NOT NULL,
  `Course` varchar(20) NOT NULL COMMENT 'if student',
  `Job` varchar(20) NOT NULL COMMENT 'if employee',
  `Picture` varchar(20) NOT NULL COMMENT '1 by 1',
  PRIMARY KEY (`TenantID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `UnitID` int(11) NOT NULL AUTO_INCREMENT,
  `UnitName` varchar(30) NOT NULL,
  `UnitDescription` varchar(200) NOT NULL,
  `NumberOfTenants` int(11) NOT NULL,
  `HouseID` int(11) NOT NULL,
  PRIMARY KEY (`UnitID`),
  KEY `HouseID` (`HouseID`),
  KEY `HouseID_2` (`HouseID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `UserTypeID` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `MiddleName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Picture` varchar(20) NOT NULL,
  PRIMARY KEY (`UserID`),
  KEY `UserTypeID` (`UserTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `UserTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `UserTypeDescription` varchar(30) NOT NULL,
  PRIMARY KEY (`UserTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `unit_catFK` FOREIGN KEY (`UnitID`) REFERENCES `units` (`UnitID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `house_catFK` FOREIGN KEY (`HouseID`) REFERENCES `houses` (`HouseID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `unit_pictureFK` FOREIGN KEY (`UnitID`) REFERENCES `units` (`UnitID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `house_pictureFK` FOREIGN KEY (`HouseID`) REFERENCES `houses` (`HouseID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `house_unitFK` FOREIGN KEY (`HouseID`) REFERENCES `houses` (`HouseID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `usertype_usersFK` FOREIGN KEY (`UserTypeID`) REFERENCES `user_type` (`UserTypeID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
