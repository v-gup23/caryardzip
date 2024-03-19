-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 19, 2024 at 11:48 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zippyusedautos`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `classID` int NOT NULL AUTO_INCREMENT,
  `className` varchar(50) NOT NULL,
  PRIMARY KEY (`classID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`classID`, `className`) VALUES
(1, 'Luxury'),
(2, 'Sports'),
(3, 'Economy'),
(4, 'Utility'),
(5, 'Classic');

-- --------------------------------------------------------

--
-- Table structure for table `make`
--

DROP TABLE IF EXISTS `make`;
CREATE TABLE IF NOT EXISTS `make` (
  `makeID` int NOT NULL AUTO_INCREMENT,
  `makeName` varchar(50) NOT NULL,
  PRIMARY KEY (`makeID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `make`
--

INSERT INTO `make` (`makeID`, `makeName`) VALUES
(1, 'Infiniti'),
(2, 'Dodge'),
(3, 'Nissan'),
(4, 'Hyundai'),
(5, 'Chevy'),
(6, 'Cadillac'),
(7, 'Ford'),
(8, 'Buick');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `typeID` int NOT NULL AUTO_INCREMENT,
  `typeName` varchar(50) NOT NULL,
  PRIMARY KEY (`typeID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`typeID`, `typeName`) VALUES
(1, 'SUV'),
(2, 'Coupe'),
(3, 'Sedan'),
(4, 'Truck');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

DROP TABLE IF EXISTS `vehicles`;
CREATE TABLE IF NOT EXISTS `vehicles` (
  `vehicleID` int NOT NULL AUTO_INCREMENT,
  `YEAR` int NOT NULL,
  `makeID` int DEFAULT NULL,
  `typeID` int DEFAULT NULL,
  `classID` int DEFAULT NULL,
  `model` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`vehicleID`),
  KEY `makeID` (`makeID`),
  KEY `typeID` (`typeID`),
  KEY `classID` (`classID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicleID`, `YEAR`, `makeID`, `typeID`, `classID`, `model`, `price`) VALUES
(1, 2009, 1, 1, 1, 'Suburban', 18999.00),
(2, 2011, 2, 2, 1, 'F150', 22999.00),
(3, 2012, 3, 1, 3, 'Escalade', 24999.00),
(4, 2018, 4, 1, 2, 'Rogue', 34999.00),
(5, 2016, 5, 3, 2, 'Sonata', 29999.00),
(6, 2020, 6, 4, 4, 'Challenger', 49999.00),
(7, 2015, 1, 1, 1, 'Tahoe', 26999.00),
(8, 2017, 7, 1, 3, 'QX80', 54999.00),
(9, 2015, 2, 3, 2, 'Fusion', 19999.00),
(10, 2014, 3, 3, 3, 'XTS', 19999.00);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
