-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2020 at 08:35 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jpairs`
--

-- --------------------------------------------------------

--
-- Table structure for table `criteria`
--

CREATE TABLE `criteria` (
  `Username` varchar(255) NOT NULL,
  `Profession` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Dates` date NOT NULL,
  `TimeSchedule` int(12) NOT NULL,
  `PaymentPerHour` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employeeprofile`
--

CREATE TABLE `employeeprofile` (
  `Username` varchar(255) NOT NULL,
  `AMKA` varchar(255) NOT NULL,
  `IKA` varchar(255) NOT NULL,
  `ResidencePermit` tinyint(1) NOT NULL,
  `WorkPermit` tinyint(1) NOT NULL,
  `AFM` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `BirthDate` date NOT NULL,
  `BankAccount` varchar(255) NOT NULL,
  `Town` varchar(255) NOT NULL,
  `CV` varchar(255) NOT NULL,
  `SocialMedia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employerprofile`
--

CREATE TABLE `employerprofile` (
  `Username` varchar(255) NOT NULL,
  `BrandNameVerification` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `WorkHours` int(12) NOT NULL,
  `BankAccount` varchar(255) NOT NULL,
  `SocialMedia` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

CREATE TABLE `employment` (
  `Username` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `WorkHours` int(12) NOT NULL,
  `PaymentPerHour` float NOT NULL,
  `Sex` tinyint(1) NOT NULL,
  `NumberOfEmployees` int(12) NOT NULL,
  `Date` date NOT NULL,
  `Open` tinyint(1) NOT NULL,
  `Employement_ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inform`
--

CREATE TABLE `inform` (
  `paraliptis` varchar(255) NOT NULL,
  `minima` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `TotalPayment` float NOT NULL,
  `Commission` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `ID_number` varchar(255) NOT NULL,
  `Specialty` int(11) NOT NULL,
  `CompletedVoluntary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Password`, `Email`, `ID_number`, `Specialty`, `CompletedVoluntary`) VALUES
('kon', 'Keimeno1^', 'Enter your e-mail address', 'adas', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `voluntarywork`
--

CREATE TABLE `voluntarywork` (
  `Username` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Purpose` varchar(255) NOT NULL,
  `NumberOfVolunteers` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
