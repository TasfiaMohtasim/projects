-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 06:09 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `relief2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'shahinur Islam', 'shahin@example.com', '1730');

-- --------------------------------------------------------

--
-- Table structure for table `disaster`
--

CREATE TABLE `disaster` (
  `Disaster_event_name` varchar(30) NOT NULL,
  `Disaster_type` varchar(30) NOT NULL,
  `Area` varchar(30) NOT NULL,
  `Time_period` datetime DEFAULT NULL,
  `Vulnarability_rate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disaster`
--

INSERT INTO `disaster` (`Disaster_event_name`, `Disaster_type`, `Area`, `Time_period`, `Vulnarability_rate`) VALUES
('Monga', 'Drought', 'Dinajpur', '2017-12-19 00:00:00', 'Medium'),
('Nargis', 'Cyclone', 'Barisal', '2017-12-25 00:00:00', 'Medium'),
('Rana plaza', 'Earthquake', 'Savar', '2017-12-22 00:00:00', 'High'),
('Rohinga Crisis', 'Man_Made', 'Cox\'s Bazar', '2017-12-05 00:00:00', 'High'),
('Sydor', 'Cyclone', 'putuakhali', '2017-08-15 00:00:00', 'High');

-- --------------------------------------------------------

--
-- Table structure for table `distribute`
--

CREATE TABLE `distribute` (
  `Survivor_ID` int(11) NOT NULL,
  `Distribute_serial_no` int(11) NOT NULL,
  `Disaster_event_name` varchar(30) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Type` varchar(30) DEFAULT NULL,
  `Distribute_Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distribute`
--

INSERT INTO `distribute` (`Survivor_ID`, `Distribute_serial_no`, `Disaster_event_name`, `Amount`, `Type`, `Distribute_Date`) VALUES
(1, 1, 'Monga', 12, 'Food', '2017-12-12 00:00:00'),
(1, 1, 'Rana Plaza', 12, 'Food', '2017-12-11 00:00:00'),
(1, 2, 'Monga', 12, 'Food', '2017-12-26 00:00:00'),
(1, 3, 'Monga', 12, 'Food', '2017-12-19 00:00:00'),
(3, 1, 'Monga', 12, 'Food', '2017-12-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `Donor_ID` int(11) NOT NULL,
  `Donate_serial_no` int(11) NOT NULL,
  `Disaster_event_name` varchar(30) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Type` varchar(30) DEFAULT NULL,
  `Donate_Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`Donor_ID`, `Donate_serial_no`, `Disaster_event_name`, `Amount`, `Type`, `Donate_Date`) VALUES
(1, 1, 'Rohinga Crisis', 12, 'Tk', '2017-12-05 00:00:00'),
(1, 2, 'Rohinga Crisis', 111, 'Tk', '2017-12-05 00:00:00'),
(2, 3, 'Monga', 14, 'Tk', '2017-12-04 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `Donor_ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Post_Code` int(30) NOT NULL,
  `Disaster_event_name` varchar(30) NOT NULL,
  `Area` varchar(30) NOT NULL,
  `Street` varchar(30) NOT NULL,
  `House_no` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`Donor_ID`, `Name`, `Post_Code`, `Disaster_event_name`, `Area`, `Street`, `House_no`, `city`) VALUES
(1, 'Fariha', 14, 'Rohinga Crisis', '', 'Abul kalam road', '34', 'Dhaka'),
(2, 'Sadik', 78, 'Monga', '', 'Ring Road', '19', 'Dhaka'),
(3, 'Suraiya', 90, 'Sydor', '', 'sher sha suri', '4', 'dhaka'),
(4, 'Turjo', 1206, 'Monga', '', 'Tajmohol Road', '17/45', 'Chittagong'),
(5, 'Sukannaya', 1201, 'Nargis', '', 'Abul kalam road', '66', 'Savar');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `Disaster_event_name` varchar(30) DEFAULT NULL,
  `Distance_from_Dhaka` int(11) NOT NULL,
  `District` varchar(30) NOT NULL,
  `post_code` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`Disaster_event_name`, `Distance_from_Dhaka`, `District`, `post_code`, `Name`) VALUES
('Monga', 600, 'Rajshahi', 11, 'rajshahi'),
('Rohinga Crisis', 600, 'cox\'s bazar', 123, 'cox\'s bazar');

-- --------------------------------------------------------

--
-- Table structure for table `survivors`
--

CREATE TABLE `survivors` (
  `Survivor_ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Disaster_event_name` varchar(30) NOT NULL,
  `Area` varchar(30) NOT NULL,
  `Street` varchar(30) NOT NULL,
  `House_no` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `age` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survivors`
--

INSERT INTO `survivors` (`Survivor_ID`, `Name`, `Disaster_event_name`, `Area`, `Street`, `House_no`, `City`, `gender`, `age`) VALUES
(1, 'Tamim', 'Monga', '7', 'Abul kalam road', '12', 'Dinajpur', 'Male', 22),
(1, 'sadik', 'Rana plaza', '12', 'Abul kalam road', '11', 'savar', 'Male', 23),
(1, 'Shahinur Islam', 'Rohinga Crisis', '7', '2', '12', 'coxs bazar', 'Male', 22),
(2, 'Tomalika', 'Monga', '1206', 'green Road', '132', 'Dinajpur', 'Female', 45),
(2, 'Md Nahid Hassan Rifat', 'Rana plaza', '7', 'Abul kalam road', '12', 'Savar', 'Male', 66),
(3, 'Shahinur Islam', 'Monga', '1207', 'sher sha suri', '34', 'Dinajpur', 'Male', 23),
(4, 'Alam', 'Monga', '7', 'shahjahon Road', '34', 'Dinajpur', 'Male', 21);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `Volunteer_ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Disaster_event_name` varchar(30) NOT NULL,
  `Post_Code` varchar(30) NOT NULL,
  `Street` varchar(30) NOT NULL,
  `House_no` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`Volunteer_ID`, `Name`, `Disaster_event_name`, `Post_Code`, `Street`, `House_no`, `City`) VALUES
(1, 'Shahinur Islam', 'Sydor', '1207', 'sher sha suri', '17/30', 'Dhaka'),
(2, 'Sadik', 'Rohinga Crisis', '11', 'Abul kalam road', '12', 'Chittagong'),
(3, 'Anika', 'Monga', '1207', 'Tajmohol Road', '12', 'dhaka'),
(4, 'Naurin', 'Rana plaza', '7', 'sir syed', '12', 'Savar'),
(5, 'Evan', 'Nargis', '56', 'Nurjahan Road', '4', 'Sunamgonj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disaster`
--
ALTER TABLE `disaster`
  ADD PRIMARY KEY (`Disaster_event_name`);

--
-- Indexes for table `distribute`
--
ALTER TABLE `distribute`
  ADD PRIMARY KEY (`Survivor_ID`,`Distribute_serial_no`,`Disaster_event_name`),
  ADD KEY `Survivor_ID` (`Survivor_ID`,`Disaster_event_name`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`Donate_serial_no`),
  ADD KEY `Donor_ID` (`Donor_ID`,`Disaster_event_name`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`Donor_ID`,`Disaster_event_name`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`post_code`);

--
-- Indexes for table `survivors`
--
ALTER TABLE `survivors`
  ADD PRIMARY KEY (`Survivor_ID`,`Disaster_event_name`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`Volunteer_ID`,`Disaster_event_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `Donate_serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `Donor_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `Volunteer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `distribute`
--
ALTER TABLE `distribute`
  ADD CONSTRAINT `distribute_ibfk_1` FOREIGN KEY (`Survivor_ID`,`Disaster_event_name`) REFERENCES `survivors` (`Survivor_ID`, `Disaster_event_name`);

--
-- Constraints for table `donate`
--
ALTER TABLE `donate`
  ADD CONSTRAINT `donate_ibfk_1` FOREIGN KEY (`Donor_ID`,`Disaster_event_name`) REFERENCES `donor` (`Donor_ID`, `Disaster_event_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
