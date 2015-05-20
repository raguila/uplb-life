-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2015 at 04:59 PM
-- Server version: 5.5.43-0ubuntu0.14.10.1
-- PHP Version: 5.5.12-2ubuntu4.4

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
  `Priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryID`, `CategoryName`) VALUES
(1, 'hasWifi'),
(2, 'hasAirConditioningUnit'),
(3, 'hasCurfew'),
(4, 'petsAllowed'),
(5, 'visitorsAllowed'),
(6, 'smokingAllowed'),
(7, 'drinkingAllowed'),
(8, 'isInsideUPLB'),
(9, 'isLowerCampus'),
(10, 'isUpperCampus'),
(11, 'hasLaundry'),
(12, 'hasCanteen'),
(13, 'hasParking'),
(14, 'isFurnished'),
(15, 'isSemiFurnished'),
(16, 'hasOwnCR'),
(17, 'hasOwnBathroom'),
(18, 'isMaleOnly'),
(19, 'isFemaleOnly'),
(20, 'isCoEd');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`CommentID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Comment` varchar(160) NOT NULL,
  `UnitID` int(11) NOT NULL,
  `TImestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`CommentID`, `UserID`, `Comment`, `UnitID`, `TImestamp`) VALUES
(1, 1, 'Super liiike!!!', 2, '2015-05-19 21:20:40'),
(2, 5, 'Great place to stay!', 10, '2015-05-19 22:44:11'),
(3, 5, 'No good.', 10, '2015-05-19 22:44:38');

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE IF NOT EXISTS `houses` (
`HouseID` int(11) NOT NULL,
  `HouseName` varchar(50) NOT NULL,
  `HouseDescription` varchar(1000) NOT NULL,
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
  `HasWifi` varchar(11) NOT NULL,
  `HasAirConditioningUnit` varchar(11) NOT NULL,
  `HasCurfew` varchar(11) NOT NULL,
  `PetsAllowed` varchar(11) NOT NULL,
  `VisitorsAllowed` varchar(11) NOT NULL,
  `SmokingAllowed` varchar(11) NOT NULL,
  `DrinkingAllowed` varchar(11) NOT NULL,
  `IsInsideUPLB` varchar(11) NOT NULL,
  `IsLowerCampus` varchar(11) NOT NULL,
  `IsUpperCampus` varchar(11) NOT NULL,
  `HasLaundry` varchar(11) NOT NULL,
  `HasCanteen` varchar(11) NOT NULL,
  `HasParking` varchar(11) NOT NULL,
  `IsFurnished` varchar(11) NOT NULL,
  `IsSemiFurnished` varchar(11) NOT NULL,
  `HasOwnCR` varchar(11) NOT NULL,
  `HasOwnBathroom` varchar(11) NOT NULL,
  `IsMaleOnly` varchar(11) NOT NULL,
  `IsFemaleOnly` varchar(11) NOT NULL,
  `IsCoEd` varchar(11) NOT NULL,
  `ManagerID` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`HouseID`, `HouseName`, `HouseDescription`, `HouseType`, `Address`, `Caretaker`, `ContactNo`, `Price`, `Size`, `Distance`, `Long`, `Lat`, `Featured`, `HasWifi`, `HasAirConditioningUnit`, `HasCurfew`, `PetsAllowed`, `VisitorsAllowed`, `SmokingAllowed`, `DrinkingAllowed`, `IsInsideUPLB`, `IsLowerCampus`, `IsUpperCampus`, `HasLaundry`, `HasCanteen`, `HasParking`, `IsFurnished`, `IsSemiFurnished`, `HasOwnCR`, `HasOwnBathroom`, `IsMaleOnly`, `IsFemaleOnly`, `IsCoEd`, `ManagerID`) VALUES
(1, 'West Brook', 'Ladies'' Dormitory just beside the University Library. It also has a nice environment and enough parking spaces for its tenants. ', 'Dorm', 'UPLB', '', '09278400522', 3000.00, 15.00, 0.00, 121.239077, 14.166828, 0, '1', '1', '1', '0', '1', '0', '0', '1', '1', '0', '0', '1', '0', '1', '0', '1', '1', '0', '1', '0', 2),
(2, 'Men''s Residence Hall (MRH)', 'The Men''s Dormitory is composed of five two-storey buildings used as living quarters of Freshmen residents. Each building has an average accommodation of 132 heads which totals to 646 residents. Added to residential buildings in the compound are the multi-purpose area and a kitchen. Other facilities and provisions were provided within the area to officer convenience to the students. These include the canteen, TV room, a mini-library, tutorial area, laundry area and a parking area.', 'Dorm', 'UPLB', '', NULL, 800.00, 11.00, 0.00, 121.240488, 14.161091, 1, '1', '0', '1', '0', '1', '0', '0', '1', '1', '0', '0', '0', '0', '1', '0', '0', '0', '0', '1', '0', 1),
(4, 'Women''s Residence Hall', 'The Women''s Dorm was built in 1967 throughout the Five Year Development Program. Its primary purpose is to house female residents. It has four dormitory buildings composed of 92 rooms with 444 student beds. Similar to the Men''s Residence Hall, but with an additional multipurpose court for badminton, volleyball and basketball facilities and provisions were also provided for the same purpose.', 'Dorm', 'UPLB', '', '09278400522', 800.00, 15.00, 0.00, 121.24037, 14.162105, 0, '1', '0', '1', '0', '0', '0', '0', '1', '1', '0', '0', '1', '0', '1', '0', '0', '0', '0', '1', '0', 1),
(5, 'New Dormitory', 'It was built in 2001 primarily for Freshmen students. It is a three-storey building with fifty (50) rooms; each room can accommodate six (6) students totalling to 300 students. Though it was designed primarily for male students, the third floor and half of the second floor was converted for female residents. Facilities and provisions were also provided including a spacious parking lot which also functions as a basketball court.', 'Dorm', 'UPLB', '', '09278400522', 1000.00, 15.00, 0.00, 121.240976, 14.155661, 0, '1', '0', '1', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', 1),
(6, 'Veterinary Medicine Residence Hall (VETMED)', 'The VetMed dorm began its operation in 1986 in anticipation for the College of Veterinary Medicine''s transfer from UP Diliman to UP Los Baños and intented exclusively for Veterinary Medicine students. It is a co-ed dormitory consisting of four (4) buildings - Unit 3, 4 5 and 6 for male residents and Units 1 and 2 for female with a maximum capacity of 280 beds.', 'Dorm', 'UPLB', '', '09278400522', 800.00, 15.00, 0.00, 121.240026, 14.160769, 0, '0', '0', '0', '0', '0', '0', '0', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', 1),
(7, 'International House (IH)', 'Inaugurated on April 13, 1960, it was built through the generosity of the Rockefeller Foundation. It has 31 rooms that can accommodate 124 occupants. It was built to accommodate international graduate students. Aside from the 31 rooms, there are six (6) guest rooms for University guests or transients who would like to get a good accommodation at a very reasonable price.', 'Dorm', 'UPLB', '', '09278400522', 850.00, 13.00, 0.00, 121.239581, 14.163268, 0, '0', '0', '0', '0', '0', '0', '0', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', 1),
(8, 'New Forestry Residence Hall (New FOREHA)', 'Commonly called FOREHA, it is situated at the College of Forestry and Natural Resources. It was constructed in 1960 under the administration of Mr. Benjamin Erasga. For five years under his control, developmental programs and activities were made. FOREHA is a two-storey building dormitory with 36 rooms that can accommodate 144 upper class men. It also provides a recreation area, mini library, TV room, study area and a canteen adjacent to the building.', 'Dorm', 'UPLB', '', '09278400522', 700.00, 15.00, 0.00, 121.234356, 14.152093, 0, '0', '0', '0', '0', '0', '0', '0', '1', '0', '1', '0', '1', '0', '0', '0', '0', '0', '0', '1', '0', 1),
(9, 'Makiling Resince Hall (MAREHA)', 'The old Forest Research Institute (FORI) building was converted into dormitory in 1979 and was named MAREHA to cater the housing needs of the students especially within the forestry area. In 1990, the residence MAREHA was transferred to Forestry Residence Hall Extension changing the building''s name to MAREHA. MAREHA, a two-storey building with thirty (31) rooms can accommodate 112 occupants. MAREHA also offers similar facilities and services to its residence just like the other dormitories.', 'Dorm', 'UPLB', '', '09278400522', 800.00, 15.00, 0.00, 121.235137, 14.15177, 0, '0', '0', '0', '0', '0', '0', '0', '1', '0', '1', '0', '1', '0', '0', '0', '0', '0', '0', '1', '0', 1),
(10, 'Forestry Residence Hall (FOREHA)', 'The dorm was formerly known as the Maharlika Residence Hall in the College of Forestry and Natural Resources and it started its operations on November 1983. It can accommodate 156 freshmen and upperclassmen.', 'Dorm', 'UPLB', '', '09278400522', 800.00, 15.00, 0.00, 121.234796, 14.152665, 0, '0', '0', '0', '0', '0', '0', '0', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', 1),
(11, 'Upper ACCI Residence Hall', 'The dorm was formerly known as the Agricultural Credit and Cooperative Institute Dormitory and it was turned over to the Student Housing Division, UPLB Housing Office on June 8, 2010. It has the capacity to accommodate 56 female freshmen.', 'Dorm', 'UPLB', '', '09278400522', 1500.00, 15.00, 0.00, 121.239873, 14.162951, 0, '0', '0', '0', '0', '1', '0', '0', '1', '1', '0', '0', '0', '0', '0', '1', '1', '1', '0', '0', '1', 1),
(12, 'Lower ACCI Residence Hall', 'The dorm was formerly known as the Agricultural Credit and Cooperative Institute Dormitory and it was turned over to the Student Housing Division, UPLB Housing Office on June 8, 2010. It has the capacity to accommodate 56 female freshmen.', 'Dorm', 'UPLB', '', '09278400522', 1500.00, 14.00, 0.00, 121.240222, 14.162763, 0, '1', '0', '1', '0', '0', '0', '0', '1', '1', '0', '0', '0', '0', '1', '0', '1', '1', '0', '0', '1', 1),
(13, 'ATI-NTC Residence Hall (Dorm)', 'The dorm was formerly known as the Philippine Training Center for Rural Development (PTC-RD: NTC-RD) under the management of the Department of Agriculture. With the reorganization of DA, the center was renamed as the Agricultural Training Center-National Training Center (ATC-NTC). The management was turned over to Student Housing division, UPLB Housing office on June 8, 2010. It can accommodate 130 freshmen and upperclassmen both male and female', 'Dorm', 'UPLB', '', '09278400522', 800.00, 16.00, 0.00, 121.241303, 14.156275, 0, '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '1', '0', '1', '1', '0', '1', '0', 1),
(14, 'Dancel''s Place, INC.', ' Dancel''s Dorm is for the ladies and gentlemen who are studying in our beloved UPLB Campus. It also has Commercial Establishments on the first floor of the building.', 'Dorm', 'F.O. SANTOS ST. BRGY. BATONG MALAKE', ' "', '', 2500.00, 21.00, 0.00, 121.242249, 14.169101, 0, '1', '0', '1', '0', '1', '0', '0', '0', '0', '0', '0', '1', '1', '0', '1', '1', '1', '0', '0', '1', 6),
(15, 'One Silangan', ' Dormitory inside UPLB near the UPLB Main Gate. The Building is 4-floors high.', 'Dorm', 'Silangan Rd. UPLB Campus', ' "', '', 3300.00, 12.00, 0.00, 121.243853, 14.167374, 0, '0', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '1', '0', '1', '0', '1', '1', '0', '1', '0', 1),
(16, 'St. Therese Dormitory', ' Now called MCSH Ladies'' Dormitory is located inside the Compound of the St. Therese Church inside UPLB Campus. ', 'Dorm', 'Silangan Rd. UPLB Campus', ' "', '', 7100.00, 15.00, 0.00, 121.245364, 14.164789, 0, '1', '1', '1', '0', '0', '0', '0', '1', '1', '0', '0', '0', '1', '1', '0', '1', '1', '0', '1', '0', 1),
(17, 'Butterfly Dormitory', ' Butterfly dormitory is for the ladies studying in UPLB, either undergraduate or post graduate degree. It has a common dining area and laundry services.', 'Dorm', 'Ruby St. Umali Subd. Near Raymundo Gate', ' "', '', 2750.00, 14.00, 0.00, 121.241315, 14.168058, 0, '0', '1', '0', '1', '1', '0', '0', '0', '0', '0', '1', '1', '0', '0', '0', '1', '1', '0', '0', '1', 1),
(18, 'EA Residences Dormitory', ' "', 'Dorm', 'Umali Subd. Near Raymundo Gate', ' "', '', 3000.00, 15.00, 0.00, 121.241672, 14.168849, 0, '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '1', '0', '1', '0', '0', '0', '1', 1),
(19, 'EA Residences Apartment', ' "', 'Apartment', 'Umali Subd. Near Raymundo Gate', ' "', '', 8000.00, 20.00, 0.00, 121.241884, 14.168425, 0, '0', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '1', '0', '0', '0', '1', 1),
(20, 'Kdoks Apartment', ' Kdocs apartment are the second home of most VetMed students.', 'Apartment', 'Agapita St. Batong Malake', ' "', '', 4500.00, 20.00, 0.00, 121.244306, 14.172859, 0, '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '1', '1', '0', '1', '0', '1', '1', '0', '0', '1', 1),
(21, 'Mt. Halcon Ladies Dormitory', ' "', 'Dorm', '10008 Mt. Halcon St, Batong Malake', ' "', '', 1700.00, 15.00, 0.00, 121.241388, 14.172061, 0, '0', '0', '0', '0', '0', '1', '1', '0', '0', '0', '0', '0', '1', '0', '1', '1', '1', '0', '0', '1', 1),
(22, 'Carlo Santos Apartment', ' "', 'Apartment', 'Diamond St. Batong Malake', ' "', '', 6500.00, 20.00, 0.00, 121.242785, 14.173548, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', 1),
(23, 'Peach Hauz Dormitory', ' "', 'Dorm', 'Pearl St. Umali Subdivision', ' "', '', 2500.00, 18.00, 0.00, 121.241575, 14.169387, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '1', '1', '0', '1', '1', '0', '0', '1', 1),
(24, 'Fifth of September Mansion', ' "', 'Dormitory', 'Diamond St. Umali Subdivision', ' "', '', 3600.00, 12.00, 0.00, 121.242375, 14.17509, 0, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', '0', '0', '1', '0', '0', '1', 1),
(25, 'Casa de Felicidad', ' "', 'Apartment', 'Kanluran Rd. UPLB Campus', ' "', '', 2500.00, 20.00, 0.00, 121.241004, 14.16765, 0, '0', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '1', '0', '1', '0', '0', '1', 1),
(26, 'C n Y Dormitory', ' "', 'Dormitory', 'Kanluran Rd. UPLB Campus (near Raymundo Gate)', ' "', '', 2500.00, 12.00, 0.00, 121.241377, 14.167926, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', 1),
(27, 'White House Apartments', ' "', 'Apartment', 'Umali Subdivision', ' "', '', 5500.00, 20.00, 0.00, 121.240953, 14.169312, 0, '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', 1),
(28, 'One Providence Dorm', ' "', 'Dormitory', 'Umali Subdivision', ' "', '', 2500.00, 0.00, 0.00, 121.240089, 14.169262, 0, '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1),
(29, 'One Sapphire Place', ' "', 'Dormitory', 'Sapphire St. Umali Subdivision', ' "', '', 3500.00, 0.00, 0.00, 121.240409, 14.169835, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1),
(30, 'Mochang Tahanan', ' "', 'Dormitory', 'Umali Subdivision', ' "', '', 2500.00, 0.00, 0.00, 121.239912, 14.169138, 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1),
(31, 'Andrecito''s', ' "', 'Apartment', 'Siving St. Lopez Ave', ' "', '', 8000.00, 20.00, 0.00, 121.243659, 14.173709, 0, '0', '1', '0', '1', '1', '1', '1', '0', '0', '0', '0', '0', '1', '1', '0', '1', '1', '0', '0', '1', 1),
(32, 'Vista Del Rey Apartments', ' "', 'Apartment', 'Diamond St. Umali Subdivision', ' "', '', 8000.00, 20.00, 0.00, 121.242892, 14.17048, 0, '1', '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '1', '1', '0', '1', '1', '0', '0', '1', 1),
(33, 'Cadapan''s Apartments', '', 'Apartment', 'Ruby St. Umali Subdivision', '', NULL, 5000.00, 20.00, 0.00, 121.241021, 14.168638, 0, '0', '0', '0', '1', '1', '1', '1', '0', '0', '0', '0', '0', '1', '0', '1', '1', '1', '0', '0', '1', 1),
(34, 'Kuya Spaj''s Dorm', ' "', 'Dormitory', 'Lopez Ave', ' "', '', 3000.00, 0.00, 0.00, 121.242994, 14.176349, 0, '0', '0', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', '1', '0', '0', '0', '1', '0', 1),
(35, 'Ilag''s Apartments', ' "', 'Apartment', 'Silangan Rd. UPLB Campus', ' "', '', 6500.00, 20.00, 0.00, 121.244247, 14.166191, 0, '0', '0', '0', '1', '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '1', '1', '1', '0', '0', '1', 1),
(36, 'Catalan Apartments', ' "', 'Apartment', 'Silangan Rd. UPLB Campus', ' "', '', 6000.00, 20.00, 0.00, 121.244968, 14.166157, 0, '0', '0', '0', '0', '1', '1', '1', '1', '1', '0', '0', '0', '1', '0', '1', '1', '1', '0', '0', '1', 1),
(37, 'Blue House Apartments', 'Up and down apartments', 'Apartment', 'Banawe St. Umali Subdivision', '', NULL, 10000.00, 20.00, 0.00, 121.239365, 14.169926, 0, '0', '0', '0', '1', '1', '1', '1', '0', '0', '0', '0', '0', '1', '0', '1', '1', '1', '0', '0', '1', 1),
(38, 'Sandrose Place', 'Studio Type Apartments', 'Apartment', 'Ruby St. Umali Subdivision', '', NULL, 5000.00, 20.00, 0.00, 121.24072, 14.1703, 0, '0', '1', '0', '1', '1', '1', '1', '0', '0', '0', '1', '0', '1', '0', '1', '1', '1', '0', '0', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `house_category`
--

CREATE TABLE IF NOT EXISTS `house_category` (
`HouseCategoryID` int(11) NOT NULL,
  `HouseID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `house_category`
--

INSERT INTO `house_category` (`HouseCategoryID`, `HouseID`, `CategoryID`) VALUES
(1, 14, 1),
(2, 14, 3),
(3, 14, 5),
(4, 14, 12),
(5, 14, 13),
(6, 14, 15),
(7, 14, 16),
(8, 14, 17),
(9, 14, 20),
(10, 15, 2),
(11, 15, 3),
(12, 15, 5),
(13, 15, 8),
(14, 15, 9),
(15, 15, 11),
(16, 15, 13),
(17, 15, 15),
(18, 15, 16),
(19, 15, 17),
(20, 15, 20),
(21, 16, 3),
(22, 16, 8),
(23, 16, 9),
(24, 16, 12),
(25, 16, 13),
(26, 16, 15),
(27, 16, 19),
(28, 17, 3),
(29, 17, 5),
(30, 17, 11),
(31, 17, 15),
(32, 17, 16),
(33, 17, 17),
(34, 17, 19),
(35, 18, 1),
(36, 18, 2),
(37, 18, 3),
(38, 18, 5),
(39, 18, 13),
(40, 18, 14),
(41, 18, 16),
(42, 18, 17),
(43, 18, 20),
(44, 19, 1),
(45, 19, 2),
(46, 19, 3),
(47, 19, 5),
(48, 19, 13),
(49, 19, 14),
(50, 19, 16),
(51, 19, 17),
(52, 19, 20),
(53, 20, 5),
(57, 20, 13),
(55, 20, 16),
(56, 20, 17),
(54, 20, 20),
(58, 21, 3),
(59, 21, 4),
(60, 21, 5),
(61, 21, 15),
(62, 21, 16),
(63, 21, 17),
(64, 21, 19),
(65, 22, 1),
(66, 22, 4),
(67, 22, 5),
(68, 22, 6),
(69, 22, 7),
(70, 22, 13),
(71, 22, 15),
(72, 22, 16),
(73, 22, 17),
(74, 22, 20),
(75, 23, 3),
(76, 23, 5),
(77, 23, 13),
(78, 23, 15),
(79, 23, 16),
(80, 23, 17),
(81, 23, 19);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
`PaymentID` int(11) NOT NULL,
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
  `TenantID` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
`PictureID` int(11) NOT NULL,
  `PictureName` varchar(50) NOT NULL,
  `PictureDescription` varchar(50) NOT NULL,
  `HouseID` int(11) NOT NULL,
  `PictureType` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=174 ;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`PictureID`, `PictureName`, `PictureDescription`, `HouseID`, `PictureType`) VALUES
(3, 'westbrook parking along side of the road.png', 'Parking Area', 1, ''),
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
(32, 'ih-landscape.jpg', 'International Housing Landscape', 7, ''),
(33, 'visitors area.jpg', 'Visitors Area', 14, ''),
(34, 'canteen.jpg', 'Canteen', 14, ''),
(35, 'parking.jpg', 'Parking Space', 14, ''),
(36, 'printing services.jpg', 'Printing Services', 14, ''),
(37, 'seoul kitchen.jpg', 'Seoul Kitchen', 14, ''),
(38, 'front view.jpg', 'Apartment Building', 14, ''),
(39, 'cr bath.png', 'Bathroom and Toilet', 14, ''),
(40, 'inside room.png', 'Inside the Unit', 14, ''),
(41, 'inside room 2.png', 'View Inside the Unit', 14, ''),
(42, 'building.jpg', 'Apartment Building', 14, ''),
(43, 'onesi_room_for_2.jpg', 'Inside a Room for Two', 15, ''),
(44, 'onesi_visitor_lounge.jpg', 'Building Lobby', 15, ''),
(45, 'onesi_garden_view.jpg', 'Garden', 15, ''),
(46, 'onesi_parking_space.jpg', 'Parking Space', 15, ''),
(47, 'onesi_entrance.jpg', 'Entrance', 15, ''),
(48, 'onesi_common_toilet_bath_lavatory.jpg', 'Common Toilet and Shower', 15, ''),
(49, 'sttherese_dorm_building.jpg', 'Dorm Building', 16, ''),
(50, 'sttherese_bed_studytable.jpg', 'Study Table and Bed', 16, ''),
(51, 'sttherese_parking_spaces.jpg', 'Parking Space', 16, ''),
(52, 'sttherese_stairs.jpg', 'Building Stairs', 16, ''),
(53, 'sttherese_bed_size_single.jpg', 'Single Bed Sizes', 16, ''),
(54, 'sttherese_study_lounge.jpg', '3rd Floor Study Area', 16, ''),
(55, 'sttherese_study_lounge_2ndflr.jpg', '2nd Floor Study Area', 16, ''),
(56, 'sttherese_kitchen.jpg', 'Dining Area and Kitchen', 16, ''),
(57, 'sttherese_utensils_glass.jpg', 'Utensils Storage for Dormers', 16, ''),
(58, 'sttherese_built_in_cabinet.jpg', 'Built in Cabinet', 16, ''),
(59, 'sttherese_common_lavatory.jpg', 'Common Lavatory', 16, ''),
(60, 'sttherese_common_cr.jpg', 'Common Bathroom', 16, ''),
(61, 'sttherese_cr.jpg', 'Common Toilet', 16, ''),
(62, 'sttherese_room_for_3.jpg', 'Room For Three', 16, ''),
(63, 'sttherese_dorm_entrance.jpg', 'Dorm Entrance', 16, ''),
(64, 'st_therese_church.jpg', 'St. Therese Church', 16, ''),
(65, 'butterfly_common_dining_room.jpg', 'Common Dining Area', 17, ''),
(66, 'butterfly_common_ref.jpg', 'Common Refrigerator', 17, ''),
(67, 'butterfly_entrance.jpg', 'Dorm Entrance', 17, ''),
(68, 'butterfly_inside_room.jpg', 'Inside a Room for Two', 17, ''),
(69, 'butterfly_built_in_cabinet.jpg', 'Built in Cabinet', 17, ''),
(74, 'ea_entrance_apt.jpg', 'Apartment Compound Entrance', 19, ''),
(75, 'ea_front_view_aircon.jpg', 'Apartment Unit with AC', 19, ''),
(76, 'ea_dorm_2.jpg', 'Dorm Building', 18, ''),
(77, 'ea_dorm_3.jpg', 'Dorm Unit for Six', 18, ''),
(78, 'ea_dorm_type.jpg', 'Dorm Type Residence', 18, ''),
(79, 'kdocs function hall.jpg', 'Function Hall', 20, ''),
(80, 'kdocs room door.jpg', 'Apartment Unit', 20, ''),
(81, 'kdocs front view.jpg', 'Apartment Building and Parking Space', 20, ''),
(82, 'kdocs hallway to dorm.jpg', 'Apartment Hallway', 20, ''),
(83, 'kdocs stairs.jpg', 'Building Stairs', 20, ''),
(84, 'halcon common ref.jpg', 'Common Refrigerator', 21, ''),
(85, 'halcon inside a room.jpg', 'Inside a Room for Two', 21, ''),
(86, 'halcon room door.jpg', 'Dorm Unit', 21, ''),
(87, 'dorm halcon entrance 2.jpg', 'Dorm Entrance', 21, ''),
(88, 'halcon dorm entrance.jpg', 'Dorm''s Main Door', 21, ''),
(89, 'namehalcon.jpg', 'Mt. Halcon Ladies'' Dorm', 21, ''),
(90, 'halcon dorm gate.jpg', 'Dorm Gate', 21, ''),
(91, 'halcon dorm cr inside a room.jpg', 'Toilet and Bath inside the Room', 21, ''),
(92, 'Apartment Building carlos.jpg', 'Apartment Building', 22, ''),
(93, 'Parking Space carlos.jpg', 'Parking Space', 22, ''),
(94, 'Unit Door carlos.jpg', 'Unit Door', 22, ''),
(95, 'bed space peach haus.jpg', 'Bed Space House', 23, ''),
(96, 'huts for visitors peach haus.jpg', 'Huts for Visitors', 23, ''),
(97, 'room door peach haus.jpg', 'Unit''s Door', 23, ''),
(98, 'inside a room peach haus.jpg', 'Inside a Room for Two', 23, ''),
(99, 'beds peach haus.jpg', 'Double Deck Bed', 23, ''),
(100, 'inside a room for two 5th.jpg', 'Inside a room for Two', 24, ''),
(101, 'lounge  5th.jpg', 'Lounge', 24, ''),
(102, 'bookshelves and cabinets  5th.jpg', 'Bookshelves and Builtin Cabinet', 24, ''),
(103, 'reception  5th.jpg', 'Reception Area', 24, ''),
(104, 'right side 5th.jpg', 'Right Side of the Building', 24, ''),
(105, 'study hall 5th.jpg', 'Study hall', 24, ''),
(106, 'parking leftside 5th.jpg', 'More Parking Area', 24, ''),
(107, 'parking rightside 5th.jpg', 'Parking Area', 24, ''),
(108, 'inside a room for two at door view 5th.jpg', 'Inside a Room', 24, ''),
(109, 'lavatory cr bath 5th.jpg', 'Lavatory, Toilet and Bath inside a Room', 24, ''),
(110, 'entrance cdf.jpg', 'Building Entrance', 25, ''),
(111, 'canteen cdf.jpg', 'Canteen', 25, ''),
(112, 'comp_shop  cdf.jpg', 'Computer Shop', 25, ''),
(113, 'room_for_5_cny.jpg', 'Room for Five', 26, ''),
(114, 'common_CR_cny.jpg', 'Common Comfort Room', 26, ''),
(115, 'common dining kitchen_cny.jpg', 'Common Kitchen', 26, ''),
(116, 'common bath_cny.jpg', 'Common Bathroom', 26, ''),
(117, 'common toilet_cny.jpg', 'Common Toilet', 26, ''),
(118, 'outside view_wh.jpg', 'Apartment Building A', 27, ''),
(119, 'kainan outside whitehouse_wh.jpg', 'Eatery Just Outside the Apartment Building', 27, ''),
(120, 'first floor unit _wh.jpg', 'First Floor Unit', 27, ''),
(121, 'inside room one_pro.jpg', 'Inside a room with AC unit', 28, ''),
(122, 'shower one_pro.jpg', 'Separate Shower Room', 28, ''),
(123, 'lavatory one_pro.jpg', 'Separate Lavatory Area', 28, ''),
(124, 'cr one_pro.jpg', 'Separate Toilet Room', 28, ''),
(125, 'inside room 2 one_pro.jpg', 'Inside a room for Four', 28, ''),
(126, 'study table one_pro.jpg', 'Study Table', 28, ''),
(127, 'laundry and canteen one_pro.jpg', 'Laundry Service and Canteen', 28, ''),
(128, 'garden under construction_one_sapp.jpg', 'Garden under Construction', 29, ''),
(129, 'cr unit under constructon_one_sapp.jpg', 'Bathroom/CR under Construction', 29, ''),
(130, 'unit beds_one_sapp.jpg', 'Built in Double Deck Bed', 29, ''),
(131, '2nd floor hall way_one_sapp.jpg', '2nd Floor Hall Way', 29, ''),
(132, 'parking space under construction_one_sapp.jpg', 'Parking Space', 29, ''),
(133, 'shoe rack just outside the unit door_one_sapp.jpg', 'Shoe Rack Outside Units', 29, ''),
(134, 'outside view_mocha.jpg', 'Dorm Building', 30, ''),
(135, 'common kitchen_mocha.jpg', 'Common Kitchen', 30, ''),
(136, '2 beds _mocha.jpg', 'Two in a Room', 30, ''),
(137, 'cr lavatory shower_mocha.jpg', 'Comfort Room inside the Bedroom', 30, ''),
(138, 'hall way 2nd floor_mocha.jpg', '2nd Floor Hall Way', 30, ''),
(139, '4 beds unit_mocha.jpg', 'Four in a Room', 30, ''),
(140, 'common ref_mocha.jpg', 'Common Refrigerator and Drinking Water', 30, ''),
(141, 'andrecitos_building.jpg', 'Andrecito''s Building', 31, ''),
(142, 'building 1_vistadelrey.jpg', 'Apartment Building', 32, ''),
(143, 'per unit parking_vistadelrey.jpg', 'Parking Spaces', 32, ''),
(144, 'name_vistadelrey.jpg', 'Vista Del Rey', 32, ''),
(145, 'building 2_vistadelrey.jpg', 'Another Apartment Building', 32, ''),
(146, 'apartment outside view_cadapan.png', 'Apartment Building', 33, ''),
(147, 'canteen_cadapan.png', 'Eatery Just Beside Apartment Building', 33, ''),
(148, 'common kitchen_kuyaspaj.jpg', 'Common Kitchen', 34, ''),
(149, 'inside room_kuyaspaj.jpg', 'Inside a room for two', 34, ''),
(150, 'entrance dorm_kuyaspaj.jpg', 'Dorm Entrance', 34, ''),
(151, 'side view dorm_kuyaspaj.jpg', 'Dorm Building', 34, ''),
(152, 'cabinet_kuyaspaj.jpg', 'Cabinet', 34, ''),
(153, 'common cr_kuyaspaj.jpg', 'Common Toilet', 34, ''),
(154, 'common cr 2_kuyaspaj.jpg', 'Common Shower', 34, ''),
(155, 'building_bf.jpg', 'Apartment Building', 36, ''),
(156, 'building_stairs_bf.jpg', 'Building Stairs', 36, ''),
(157, 'unit_door_bf.jpg', 'Apartment Unit', 36, ''),
(158, 'building_entrance_bf.jpg', 'Building Entrance', 36, ''),
(159, 'blue house.png', 'Blue House Apartments', 37, ''),
(160, 'parking space_bluehouse.jpg', 'Parking Area', 37, ''),
(161, 'outside view_sandrose.png', 'Apartment Building', 38, ''),
(162, 'parking space_sandrose.png', 'Parking Area', 38, ''),
(163, 'laundry area_sandrose.png', 'Laundry Area', 38, ''),
(164, 'room outside_sandrose.png', 'Apartment Unit', 38, ''),
(165, 'kainan outside _sandrose.png', 'Commercial Establishments', 38, ''),
(166, 'ilag''s_apartment.jpg', 'Ilag''s Apartment Building 1', 34, ''),
(167, 'ilag''s_apartment2.jpg', 'Apartment Building 2', 34, ''),
(168, 'ilag''s_compound.jpg', 'Ilag''s Compound', 34, ''),
(169, 'ilag''s_entrance.jpg', 'Ilag''s Entrance', 34, ''),
(170, 'westbrook gate entrance.png', 'Gate Entrance', 1, ''),
(171, 'westbrook toilet.png', 'Bathroom and Toilet', 1, ''),
(172, 'westbrook inside a room.png', 'Inside A Room', 1, ''),
(173, 'westbrook canteen side.png', 'Canteen', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
`RatingID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Timestamp` date NOT NULL,
  `UnitID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `IDNumber` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`TenantID`, `TenantName`, `Gender`, `Birthdate`, `Course`, `Job`, `Picture`, `UnitID`, `IDNumber`) VALUES
(2, 'Monina Carandang', 'F', '1992-05-20', 'MIT', 'Student', '', 1, '2008-37434'),
(3, 'Second Tenant', 'M', '2015-05-18', '', 'Elephant Cleaner', '', 1, 'Elephant-101'),
(4, 'Roinand', 'M', '1994-02-20', 'BSCS', '', '', 1, ''),
(5, 'Joman', 'M', '1994-04-20', 'BSCS', '', '', 1, '');

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
  `MonthlyRatePerPerson` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`UnitID`, `UnitName`, `UnitDescription`, `MaxNumberOfTenants`, `HouseID`, `MonthlyRatePerPerson`) VALUES
(1, 'West Brook Room 1', '2 Person room', 2, 1, 3000),
(2, 'Mens Dorm Unit 1001', '', 4, 2, 700),
(3, 'Dancel''s Room', '4-bed Room', 4, 14, 2500),
(4, 'One Silangan Rm A2', '4-bed Room', 2, 15, 2500),
(5, 'St. Therese 325', '2-bed Room', 2, 16, 7100),
(6, 'St. Therese 408', '4-bed Room', 4, 16, 7100),
(7, 'Butterfly Dorm Rm 1', '2-bed Room', 2, 17, 2750),
(8, 'EA Residences Dorm Rm 16', '8-bed Room', 8, 18, 3000),
(9, 'EA Residences Apt Unit 11', '2-bed Studio Type', 2, 19, 8000),
(10, 'Kdoks Apartment Unit A5', 'Studio Type', 4, 20, 4500),
(11, 'Mt. Halcon Ladies Dorm Rm 16', 'Dorm/Bedspace', 2, 21, 1700),
(12, 'Carlo Santos Apartment Unit B', 'Studio Type', 3, 22, 6500),
(13, 'Peach Hauz Ladies Dorm Unit 2', 'Dorm/Bedspace', 2, 23, 2500),
(14, 'Peach Hauz Ladies Dorm Unit 6', 'Dorm/Bedspace', 2, 23, 2500),
(15, 'Fifth of September Mansion Roo', 'Dorm/Bedspace', 2, 24, 2400),
(16, 'Casa de Felicidad Room C', 'Dorm/Bedspace', 2, 25, 8000),
(17, 'C n Y Dorm Room 2', 'Dorm/Bedspace', 5, 26, 2250),
(18, 'White House Unit A5', '2 Rooms', 4, 27, 5500),
(19, 'One Providence Dorm Unit 101', '4-bed-room', 4, 28, 3000),
(20, 'One Sapphire Place Unit 208', '2-bed-unit', 4, 29, 7500),
(21, 'Mochang Tahanan Room 18', '4-bed-room', 4, 30, 2500),
(22, 'Mochang Tahanan Room 04', '2-bed-room', 2, 30, 3500),
(23, 'Andrecito''s Unit 1', '4-bed room', 4, 31, 3500),
(24, 'Vista Del Rey''s Unit 35', '4 person studio type', 4, 32, 2000),
(25, 'Cadapan''s Apartments', 'studio type units', 2, 33, 5000),
(26, 'Kuya Spaj''s Dorm Room 1', '2-bed room', 2, 34, 3000),
(27, 'Ilag''s Apartment Unit 12', '2 Rooms', 6, 35, 6500),
(28, 'Catalan BF Apartments Unit 4', '2-bed room', 2, 36, 6000),
(29, 'Blue House Apartment Unit 1', '2 rooms, up and down', 8, 37, 10000),
(30, 'Sandrose Place', '4-bed room/studio type unit', 4, 38, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `unit_category`
--

CREATE TABLE IF NOT EXISTS `unit_category` (
`UnitCategoryID` int(11) NOT NULL,
  `UnitID` int(11) NOT NULL,
  `CategoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `Picture` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserTypeID`, `UserName`, `Password`, `FirstName`, `MiddleName`, `LastName`, `Picture`) VALUES
(1, 1, 'roi', '4eb2f856e8c3c20f2a0bd9cd45197918', 'Roinand', 'Baral', 'Aguila', 'roi.png'),
(2, 3, 'housemanager', '5f4dcc3b5aa765d61d8327deb882cf99', '', '', '', ''),
(4, 4, 'ads_manager', '2deb000b57bfac9d72c14d4ed967b572', 'Ads', 'Ads', 'Manager', ''),
(5, 2, 'ivy', 'a735c3e8bc21cbe0f03e501a1529e0b4', 'Ivy', 'U', 'Aguila', ''),
(6, 3, 'toto', 'f71dbe52628a3f83a77ab494817525c6', 'Toto', 'Mang', 'Inasal', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
`UserTypeID` int(11) NOT NULL,
  `UserTypeDescription` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`UserTypeID`, `UserTypeDescription`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'HouseManager'),
(4, 'Ads Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
 ADD PRIMARY KEY (`AdsID`), ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`CommentID`), ADD KEY `UserID` (`UserID`,`UnitID`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
 ADD PRIMARY KEY (`HouseID`), ADD KEY `ManagerID` (`ManagerID`);

--
-- Indexes for table `house_category`
--
ALTER TABLE `house_category`
 ADD PRIMARY KEY (`HouseCategoryID`), ADD KEY `HouseID` (`HouseID`,`CategoryID`), ADD KEY `HouseID_2` (`HouseID`,`CategoryID`), ADD KEY `CategoryID` (`CategoryID`), ADD KEY `CategoryID_2` (`CategoryID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
 ADD PRIMARY KEY (`PaymentID`), ADD KEY `UnitID` (`UnitID`), ADD KEY `HouseID` (`HouseID`), ADD KEY `TenantID` (`TenantID`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
 ADD PRIMARY KEY (`PictureID`), ADD KEY `HouseID` (`HouseID`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
 ADD PRIMARY KEY (`RatingID`), ADD KEY `UserID` (`UserID`,`UnitID`), ADD KEY `UnitID` (`UnitID`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
 ADD PRIMARY KEY (`TenantID`), ADD KEY `UnitID` (`UnitID`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
 ADD PRIMARY KEY (`UnitID`), ADD KEY `HouseID` (`HouseID`), ADD KEY `HouseID_2` (`HouseID`);

--
-- Indexes for table `unit_category`
--
ALTER TABLE `unit_category`
 ADD PRIMARY KEY (`UnitCategoryID`), ADD KEY `UnitID` (`UnitID`,`CategoryID`), ADD KEY `CategoryID` (`CategoryID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`UserID`), ADD KEY `UserTypeID` (`UserTypeID`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
 ADD PRIMARY KEY (`UserTypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
MODIFY `AdsID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
MODIFY `HouseID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `house_category`
--
ALTER TABLE `house_category`
MODIFY `HouseCategoryID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
MODIFY `PictureID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=174;
--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
MODIFY `RatingID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
MODIFY `TenantID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
MODIFY `UnitID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `unit_category`
--
ALTER TABLE `unit_category`
MODIFY `UnitCategoryID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
MODIFY `UserTypeID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
ADD CONSTRAINT `comment_userFK` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `houses`
--
ALTER TABLE `houses`
ADD CONSTRAINT `user_houseFK` FOREIGN KEY (`ManagerID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `house_category`
--
ALTER TABLE `house_category`
ADD CONSTRAINT `category_housecategoryFK` FOREIGN KEY (`CategoryID`) REFERENCES `categories` (`CategoryID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `house_housecategoryFK` FOREIGN KEY (`HouseID`) REFERENCES `houses` (`HouseID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
ADD CONSTRAINT `payment_tenantFK` FOREIGN KEY (`TenantID`) REFERENCES `tenants` (`TenantID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `payment_house_FK` FOREIGN KEY (`HouseID`) REFERENCES `houses` (`HouseID`) ON DELETE CASCADE ON UPDATE CASCADE,
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
ADD CONSTRAINT `unitcategory_categoryFK` FOREIGN KEY (`CategoryID`) REFERENCES `categories` (`CategoryID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `unitcategory_unitFK` FOREIGN KEY (`UnitID`) REFERENCES `units` (`UnitID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `user_usertypeFK` FOREIGN KEY (`UserTypeID`) REFERENCES `user_type` (`UserTypeID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
