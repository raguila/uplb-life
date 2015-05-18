-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2015 at 02:50 PM
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
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `AdsID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Image` varchar(250) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Period` int(11) NOT NULL,
  `Priority` int(11) NOT NULL,
  PRIMARY KEY (`AdsID`),
  KEY `UserID` (`UserID`),
  KEY `UserID_2` (`UserID`),
  KEY `UserID_3` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(100) NOT NULL,
  PRIMARY KEY (`CategoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `CommentID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Comment` varchar(160) NOT NULL,
  `UnitID` int(11) NOT NULL,
  `TImestamp` date NOT NULL,
  PRIMARY KEY (`CommentID`),
  KEY `UserID` (`UserID`,`UnitID`),
  KEY `UserID_2` (`UserID`),
  KEY `UnitID` (`UnitID`),
  KEY `UserID_3` (`UserID`,`UnitID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE IF NOT EXISTS `houses` (
  `HouseID` int(11) NOT NULL,
  `HouseName` varchar(50) NOT NULL,
  `HouseDescription` varchar(200) NOT NULL,
  `HouseType` varchar(15) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Caretaker` varchar(30) NOT NULL,
  `ContactNo` varchar(15) DEFAULT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Size` decimal(10,2) NOT NULL,
  `Distance` decimal(10,2) NOT NULL,
  `Long` double NOT NULL,
  `Lat` double NOT NULL,
  `Featured` tinyint(1) NOT NULL,
  `ManagerID` int(11) NOT NULL,
  PRIMARY KEY (`HouseID`),
  KEY `ManagerID` (`ManagerID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`HouseID`, `HouseName`, `HouseDescription`, `HouseType`, `Address`, `Caretaker`, `ContactNo`, `Price`, `Size`, `Distance`, `Long`, `Lat`, `Featured`, `ManagerID`) VALUES
(1, 'West Brook', '', 'Dorm', 'UPLB', '', '09278400522', '3000.00', '10.00', '0.00', 121.239077, 14.166828, 0, 2),
(2, 'Men''s Residence Hall (MRH)', '', 'Dorm', 'UPLB', '', NULL, '800.00', '15.00', '0.00', 121.240488, 14.161091, 0, 3),
(4, 'Women''s Residence Hall', '', 'Dorm', 'UPLB', '', '09278400522', '800.00', '15.00', '0.00', 121.24037, 14.162105, 0, 1),
(5, 'New Dormitory', '', 'Dorm', 'UPLB', '', '09278400522', '1000.00', '15.00', '0.00', 121.240976, 14.155661, 0, 1),
(6, 'Veterinary Medicine Residence Hall (VETMED)', '', 'Dorm', 'UPLB', '', '09278400522', '800.00', '15.00', '0.00', 121.240026, 14.160769, 0, 1),
(7, 'International House (IH)', '', 'Dorm', 'UPLB', '', '09278400522', '850.00', '18.00', '0.00', 121.239581, 14.163268, 0, 1),
(8, 'New Forestry Residence Hall (New FOREHA)', '', 'Dorm', 'UPLB', '', '09278400522', '700.00', '15.00', '0.00', 121.234356, 14.152093, 0, 1),
(9, 'Makiling Resince Hall (MAREHA)', '', 'Dorm', 'UPLB', '', '09278400522', '800.00', '15.00', '0.00', 121.235137, 14.15177, 0, 1),
(10, 'Forestry Residence Hall (FOREHA)', '', 'Dorm', 'UPLB', '', '09278400522', '800.00', '14.00', '0.00', 121.234796, 14.152665, 0, 1),
(11, 'Upper ACCI Residence Hall', '', 'Dorm', 'UPLB', '', '09278400522', '1500.00', '12.00', '0.00', 121.239873, 14.162951, 0, 1),
(12, 'Lower ACCI Residence Hall', '', 'Dorm', 'UPLB', '', '09278400522', '1500.00', '12.00', '0.00', 121.240222, 14.162763, 0, 1),
(13, 'ATI-NTC Residence Hall (Dorm)', '', 'Dorm', 'UPLB', '', '09278400522', '800.00', '17.00', '0.00', 121.241303, 14.156275, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `house_category`
--

CREATE TABLE IF NOT EXISTS `house_category` (
  `HouseCategoryID` int(11) NOT NULL,
  `HouseID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  KEY `HouseCategoryID` (`HouseCategoryID`),
  KEY `HouseID` (`HouseID`,`CategoryID`),
  KEY `CategoryID` (`CategoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `PaymentID` int(11) NOT NULL,
  `TenantID` int(11) NOT NULL,
  `DateCreated` date NOT NULL,
  `DateUpdated` date NOT NULL,
  `HouseID` int(11) NOT NULL,
  `UnitID` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `ModeOfPayment` varchar(50) NOT NULL,
  `Month` int(2) NOT NULL,
  `Year` int(4) NOT NULL,
  `DatePaid` date NOT NULL,
  `Remarks` varchar(160) NOT NULL,
  PRIMARY KEY (`PaymentID`),
  KEY `UnitID` (`UnitID`),
  KEY `HouseID` (`HouseID`),
  KEY `TenantID` (`TenantID`),
  KEY `TenantID_2` (`TenantID`,`HouseID`,`UnitID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `PictureID` int(11) NOT NULL,
  `PictureName` varchar(30) NOT NULL,
  `PictureDescription` varchar(50) NOT NULL,
  `HouseID` int(11) NOT NULL,
  `PictureType` varchar(100) NOT NULL,
  PRIMARY KEY (`PictureID`),
  KEY `PictureID` (`PictureID`),
  KEY `HouseID` (`HouseID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`PictureID`, `PictureName`, `PictureDescription`, `HouseID`, `PictureType`) VALUES
(2, 'dorm.jpg', '', 1, ''),
(3, 'dorm2.jpg', '', 1, ''),
(5, 'mens-dorm.jpg', 'Men''s Dorm', 2, ''),
(6, 'mens-dorm-multipurpose.jpg', 'Men''s Dorm Multipurpose Hall', 2, ''),
(7, 'mens-dorm-room.jpg', 'Men''s Dorm Room', 2, ''),
(8, 'mens-dorm-cr.jpg', 'Men''s Dorm CR', 2, ''),
(9, 'mens-dorm-stairs', 'Men''s Dorm Stairs', 2, ''),
(10, 'womens-dorm.jpg', 'Women''s Dorm', 4, ''),
(11, 'womens-dorm-cafeteria.jpg', 'Women''s Cafeteria', 4, ''),
(12, 'womens-dorm-cr.jpg', 'Women''s CR', 4, ''),
(13, 'womens-dorm-lobby.jpg', 'Women''s Lobby', 4, ''),
(14, 'womens-dorm-multipurpose.jpg', 'Women''s Dorm Multipurpose ', 4, ''),
(15, 'new-dorm.jpg', 'New Dorm', 5, ''),
(16, 'new-dorm-bike', 'Dorm Bike Parking', 5, ''),
(17, 'new-dorm-court.jpg', 'Dorm Court', 5, ''),
(18, 'new-dorm-cr.jpg', 'New Dorm CR', 5, ''),
(19, 'new-dorm-lobby.jpg', 'New Dorm Loby', 5, ''),
(20, 'new-dorm-multipurpose.jpg', 'New Dorm Multipurpose Hall', 5, ''),
(21, 'new-dorm-sofa', 'New Dorm Sofa', 5, ''),
(22, 'vetmed-dorm.jpg', 'VetMed Dorm', 6, ''),
(23, 'vetmed-dorm-hallway.jpg', 'VetMed Dorm Hallway', 6, ''),
(24, 'vetmed-dorm-sign.jpg', 'VetMed Dorm Sign', 6, ''),
(25, 'vetmed-dorm-stairs.jpg', 'VetMed Dorm Stairs', 6, ''),
(26, 'vetmed-multipurpose.jpg', 'VetMed Multipurpose Hall', 6, ''),
(27, 'ih.jpg', 'International Housing', 7, ''),
(28, 'ih-dorm-manager.jpg', 'International Housing Dorm Manager', 7, ''),
(29, 'ih-garden.jpg', 'International Housing Garden', 7, ''),
(30, 'ih-graduate-school.jpg', 'International Housing Graduate School', 7, ''),
(31, 'ih-hallway.jpg', 'International Housing Hallway', 7, ''),
(32, 'ih-landscape.jpg', 'International Housing Landscape', 7, '');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `RatingID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Timestamp` date NOT NULL,
  `UnitID` int(11) NOT NULL,
  KEY `RatingID` (`RatingID`),
  KEY `UserID` (`UserID`,`UnitID`),
  KEY `UnitID` (`UnitID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE IF NOT EXISTS `tenants` (
  `TenantID` int(11) NOT NULL,
  `TenantName` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Birthdate` date NOT NULL,
  `Course` varchar(20) NOT NULL COMMENT 'if student',
  `Job` varchar(20) NOT NULL COMMENT 'if employee',
  `Picture` varchar(20) NOT NULL COMMENT '1 by 1',
  `UnitID` int(11) NOT NULL,
  `IDNumber` varchar(15) NOT NULL,
  PRIMARY KEY (`TenantID`),
  KEY `TenantID` (`TenantID`),
  KEY `UnitID` (`UnitID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`TenantID`, `TenantName`, `Gender`, `Birthdate`, `Course`, `Job`, `Picture`, `UnitID`, `IDNumber`) VALUES
(1, 'Monina Carandang', 'F', '1992-05-20', 'MIT', 'Student', '', 1, '2008-37434'),
(2, 'Second Tenant', 'M', '2015-05-18', '', 'Elephant Cleaner', '', 1, 'Elephant-101');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `UnitID` int(11) NOT NULL,
  `UnitName` varchar(30) NOT NULL,
  `UnitDescription` varchar(200) NOT NULL,
  `MaxNumberOfTenants` int(11) NOT NULL,
  `HouseID` int(11) NOT NULL,
  `MonthlyRatePerPerson` int(10) NOT NULL,
  PRIMARY KEY (`UnitID`),
  KEY `HouseID` (`HouseID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`UnitID`, `UnitName`, `UnitDescription`, `MaxNumberOfTenants`, `HouseID`, `MonthlyRatePerPerson`) VALUES
(1, 'West Brook Room 1', '2 Person room', 2, 1, 3000),
(2, 'Mens Dorm Unit 1001', '', 4, 2, 700);

-- --------------------------------------------------------

--
-- Table structure for table `unit_category`
--

CREATE TABLE IF NOT EXISTS `unit_category` (
  `UnitCategoryID` int(11) NOT NULL,
  `UnitID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  KEY `UnitCategoryID` (`UnitCategoryID`),
  KEY `UnitID` (`UnitID`,`CategoryID`),
  KEY `CategoryID` (`CategoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(11) NOT NULL,
  `UserTypeID` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `MiddleName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Picture` varchar(20) NOT NULL,
  PRIMARY KEY (`UserID`),
  KEY `UserTypeID` (`UserTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserTypeID`, `UserName`, `Password`, `FirstName`, `MiddleName`, `LastName`, `Picture`) VALUES
(1, 1, 'roi', '4eb2f856e8c3c20f2a0bd9cd45197918', 'Roinand', 'Baral', 'Aguila', 'roi.png'),
(2, 3, 'housemanager', '5f4dcc3b5aa765d61d8327deb882cf99', '', '', '', ''),
(3, 3, 'housemanager2', '5f4dcc3b5aa765d61d8327deb882cf99', 'House', '2', 'Manager', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `UserTypeID` int(11) NOT NULL,
  `UserTypeDescription` varchar(30) NOT NULL,
  PRIMARY KEY (`UserTypeID`),
  KEY `UserTypeID` (`UserTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`UserTypeID`, `UserTypeDescription`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'HouseManager');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `ads_userFK` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comment_unitFK` FOREIGN KEY (`UnitID`) REFERENCES `units` (`UnitID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_userFK` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `houses`
--
ALTER TABLE `houses`
  ADD CONSTRAINT `house_userFK` FOREIGN KEY (`ManagerID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `house_category`
--
ALTER TABLE `house_category`
  ADD CONSTRAINT `housecategory_categoryFK` FOREIGN KEY (`CategoryID`) REFERENCES `categories` (`CategoryID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `housecategory_houseFK` FOREIGN KEY (`HouseID`) REFERENCES `houses` (`HouseID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payment_tenantFK` FOREIGN KEY (`TenantID`) REFERENCES `tenants` (`TenantID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_houseFK` FOREIGN KEY (`HouseID`) REFERENCES `houses` (`HouseID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_unitFK` FOREIGN KEY (`UnitID`) REFERENCES `units` (`UnitID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `picture_houseFK` FOREIGN KEY (`HouseID`) REFERENCES `houses` (`HouseID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `rating_unitFK` FOREIGN KEY (`UnitID`) REFERENCES `units` (`UnitID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rating_userFK` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tenants`
--
ALTER TABLE `tenants`
  ADD CONSTRAINT `tenant_unitFK` FOREIGN KEY (`UnitID`) REFERENCES `units` (`UnitID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `unit_houseFK` FOREIGN KEY (`HouseID`) REFERENCES `houses` (`HouseID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `unit_category`
--
ALTER TABLE `unit_category`
  ADD CONSTRAINT `unitcategory_houseFK` FOREIGN KEY (`CategoryID`) REFERENCES `houses` (`HouseID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `unitcategory_unitFK` FOREIGN KEY (`UnitID`) REFERENCES `units` (`UnitID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_usertypeFK` FOREIGN KEY (`UserTypeID`) REFERENCES `user_type` (`UserTypeID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
