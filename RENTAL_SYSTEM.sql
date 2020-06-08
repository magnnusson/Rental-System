-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 05, 2020 at 06:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `RENTAL_SYSTEM`
--

-- --------------------------------------------------------

--
-- Table structure for table `Car`
--

CREATE TABLE `Car` (
  `Vehicle_ID` int(11) NOT NULL,
  `Model` varchar(255) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `DailyRate` int(11) NOT NULL,
  `WeeklyRate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Car`
--

INSERT INTO `Car` (`Vehicle_ID`, `Model`, `Year`, `Type`, `DailyRate`, `WeeklyRate`) VALUES
(101, 'EXPRESS 3500', 2007, 'VAN', 50, 350),
(102, 'OUTLANDER', 2011, 'COMPACT', 80, 560),
(103, 'EQUUS', 2014, 'MEDIUM', 100, 700),
(104, 'H3', 2007, 'SUV', 80, 560),
(105, '530I', 2015, 'MEDIUM', 120, 840),
(106, 'CUBE', 2013, 'COMPACT', 90, 630),
(107, 'ACCORD', 2014, 'LARGE', 100, 700),
(108, 'F150', 2016, 'TRUCK', 110, 770),
(109, 'XC60', 2015, 'SUV', 100, 700),
(110, '750LI', 2014, 'MEDIUM', 90, 630),
(111, 'NV200', 2015, 'VAN', 90, 630),
(112, 'CAMRY', 2013, 'MEDIUM', 80, 560),
(113, 'COROLLA', 2017, 'MEDIUM', 110, 770),
(114, 'ODYSSEY', 2012, 'LARGE', 80, 560),
(115, 'SILVERADO', 2011, 'TRUCK', 90, 630),
(116, 'RAV4', 2015, 'SUV', 100, 700),
(117, 'JETTA', 2014, 'MEDIUM', 90, 630),
(118, 'YARIS', 2013, 'COMPACT', 80, 560),
(119, 'MAXIMA', 2010, 'MEDIUM', 80, 560),
(120, 'ESCAPE', 2013, 'SUV', 90, 630),
(121, 'SAMPLEMODEL', 2020, 'SUV', 75, 350);

-- --------------------------------------------------------

--
-- Table structure for table `Car_Availability`
--

CREATE TABLE `Car_Availability` (
  `Vehicle_ID` int(11) NOT NULL,
  `Season` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Car_Availability`
--

INSERT INTO `Car_Availability` (`Vehicle_ID`, `Season`) VALUES
(101, 'Fall'),
(102, 'Spring,Summer'),
(103, 'Spring,Summer'),
(104, 'Any'),
(105, 'Spring,Summer,Fall'),
(106, 'Any'),
(107, 'Any'),
(108, 'Fall,Winter'),
(109, 'Any'),
(110, 'Spring,Summer'),
(111, 'Any'),
(112, 'Spring,Summer,Fall'),
(113, 'Spring,Summer,Fall'),
(114, 'Any'),
(115, 'Fall,Winter'),
(116, 'Any'),
(117, 'Spring,Summer,Fall'),
(118, 'Spring,Summer,Fall'),
(119, 'Spring,Summer,Fall'),
(120, 'Any');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `Id_No` int(11) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Finit` varchar(2) DEFAULT NULL,
  `Lname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`Id_No`, `Phone`, `Finit`, `Lname`) VALUES
(1, 1114348943, 'J', 'Doe'),
(2, 1113450923, 'T', 'Vaughn'),
(3, 1118340192, 'S', 'Perez'),
(4, 1110925722, 'A', 'Shephard'),
(5, 1119830245, 'E', 'Vance'),
(6, 1110982509, 'G', 'Freeman'),
(7, 1110823559, 'B', 'Calhoun'),
(8, 1110922343, 'I', 'Kleiner'),
(9, 1115424923, 'C', 'Johnson'),
(10, 1119082356, 'O', 'Dunham'),
(11, 114823414, 'Y', 'Holmes');

-- --------------------------------------------------------

--
-- Table structure for table `DailyRental`
--

CREATE TABLE `DailyRental` (
  `Start_Date` date NOT NULL,
  `Id_No` int(11) NOT NULL,
  `Return_Date` date DEFAULT NULL,
  `Amount_Due` int(11) DEFAULT NULL,
  `NoOfDays` int(11) DEFAULT NULL,
  `DailyRental_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `DailyRental`
--

INSERT INTO `DailyRental` (`Start_Date`, `Id_No`, `Return_Date`, `Amount_Due`, `NoOfDays`, `DailyRental_ID`) VALUES
('2020-02-01', 6, NULL, NULL, NULL, NULL),
('2020-02-21', 2, '2020-02-24', 300, 3, 103),
('2020-03-01', 4, '2020-03-05', 360, 4, 110),
('2020-03-06', 9, NULL, NULL, NULL, NULL),
('2020-03-11', 3, '2020-03-15', 400, 4, 107),
('2020-03-13', 7, NULL, NULL, NULL, NULL),
('2020-04-03', 5, '2020-04-08', 550, 5, 113),
('2020-04-03', 10, NULL, NULL, NULL, NULL),
('2020-04-05', 8, NULL, NULL, NULL, NULL),
('2020-04-20', 1, '2020-04-25', 400, 5, 102),
('2020-04-20', 11, '2020-04-25', 250, 5, 121);

-- --------------------------------------------------------

--
-- Table structure for table `WeeklyRental`
--

CREATE TABLE `WeeklyRental` (
  `Start_Date` date NOT NULL,
  `Id_No` int(11) NOT NULL,
  `Return_Date` date DEFAULT NULL,
  `Amount_Due` int(11) DEFAULT NULL,
  `NoOfWeeks` int(11) DEFAULT NULL,
  `WeeklyRental_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `WeeklyRental`
--

INSERT INTO `WeeklyRental` (`Start_Date`, `Id_No`, `Return_Date`, `Amount_Due`, `NoOfWeeks`, `WeeklyRental_ID`) VALUES
('2020-02-01', 6, '2020-02-14', 1260, 2, 120),
('2020-02-21', 2, NULL, NULL, NULL, NULL),
('2020-03-01', 4, NULL, NULL, NULL, NULL),
('2020-03-06', 9, '2020-03-13', 630, 1, 117),
('2020-03-11', 3, NULL, NULL, NULL, NULL),
('2020-03-13', 7, '2020-03-21', 630, 1, 115),
('2020-04-03', 5, NULL, NULL, NULL, NULL),
('2020-04-03', 10, '2020-04-17', 1680, 2, 105),
('2020-04-05', 8, '2020-04-26', 2100, 3, 109),
('2020-04-20', 1, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Car`
--
ALTER TABLE `Car`
  ADD PRIMARY KEY (`Vehicle_ID`);

--
-- Indexes for table `Car_Availability`
--
ALTER TABLE `Car_Availability`
  ADD PRIMARY KEY (`Vehicle_ID`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`Id_No`);

--
-- Indexes for table `DailyRental`
--
ALTER TABLE `DailyRental`
  ADD PRIMARY KEY (`Start_Date`,`Id_No`),
  ADD KEY `Id_No` (`Id_No`),
  ADD KEY `DailyRental_ID` (`DailyRental_ID`);

--
-- Indexes for table `WeeklyRental`
--
ALTER TABLE `WeeklyRental`
  ADD PRIMARY KEY (`Start_Date`,`Id_No`),
  ADD KEY `Id_No` (`Id_No`),
  ADD KEY `WeeklyRental_ID` (`WeeklyRental_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Car_Availability`
--
ALTER TABLE `Car_Availability`
  ADD CONSTRAINT `car_availability_ibfk_1` FOREIGN KEY (`Vehicle_ID`) REFERENCES `Car` (`Vehicle_ID`);

--
-- Constraints for table `DailyRental`
--
ALTER TABLE `DailyRental`
  ADD CONSTRAINT `dailyrental_ibfk_1` FOREIGN KEY (`Id_No`) REFERENCES `Customer` (`Id_No`),
  ADD CONSTRAINT `dailyrental_ibfk_2` FOREIGN KEY (`DailyRental_ID`) REFERENCES `Car` (`Vehicle_ID`);

--
-- Constraints for table `WeeklyRental`
--
ALTER TABLE `WeeklyRental`
  ADD CONSTRAINT `weeklyrental_ibfk_1` FOREIGN KEY (`Id_No`) REFERENCES `Customer` (`Id_No`),
  ADD CONSTRAINT `weeklyrental_ibfk_2` FOREIGN KEY (`WeeklyRental_ID`) REFERENCES `Car` (`Vehicle_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
