-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 06:30 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aprimedatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmatha`
--

CREATE TABLE `addmatha` (
  `no` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `StudentID` varchar(255) NOT NULL,
  `attendance` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `thedate` varchar(255) NOT NULL,
  `mark` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `totalattendance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmatha`
--

INSERT INTO `addmatha` (`no`, `Name`, `StudentID`, `attendance`, `remarks`, `thedate`, `mark`, `comment`, `totalattendance`) VALUES
(1, 'NURUL SALWANI BINTI RAZALI', 'A1001', 'present', '-', '2018-12-19 10:56:42', 90, 'EXCELLENT', '4/4'),
(2, 'NUR ATHIQAH MOHD MAZALAN', 'A1002', 'absent', 'mc', '2018-12-19 10:56:42', 90, 'GOOD', '3/4'),
(3, 'MUHAMMAD NAZIF BIN KASSIM', 'A1003', 'absent', '-', '2018-12-19 10:56:42', 90, 'GOOD', '1/4');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `dateAnn` varchar(255) NOT NULL,
  `subjectC` varchar(255) NOT NULL,
  `subjectAnn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `biologya`
--

CREATE TABLE `biologya` (
  `no` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `StudentID` varchar(255) NOT NULL,
  `attendance` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `thedate` varchar(255) NOT NULL,
  `mark` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coursecatalogs`
--

CREATE TABLE `coursecatalogs` (
  `subjectCode` varchar(255) NOT NULL,
  `subjectName` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `capacity` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursecatalogs`
--

INSERT INTO `coursecatalogs` (`subjectCode`, `subjectName`, `section`, `day`, `time`, `place`, `capacity`) VALUES
('M001A', 'Additional Mathematics', 'A', 'Saturday', '08:00AM-10:00AM', 'R01', 30),
('M004A', 'Biology', 'A', 'Saturday', '08:00AM-10:00AM', 'R02', 30),
('M003', 'Physics', 'A', 'Saturday', '10.00AM - 12.00PM', 'R03', 30),
('M004', 'Physics', 'A', 'Sunday', '08.00Am-10.00Am', 'R05', 30);

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `Username` varchar(255) NOT NULL,
  `ParentID` int(11) NOT NULL,
  `DateJoined` date NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `IC` int(11) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Occupation` varchar(255) NOT NULL,
  `Address1` varchar(255) NOT NULL,
  `Address2` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `PostalCode` int(11) NOT NULL,
  `Country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`Username`, `ParentID`, `DateJoined`, `PhoneNo`, `Name`, `Email`, `IC`, `Gender`, `Occupation`, `Address1`, `Address2`, `City`, `State`, `PostalCode`, `Country`) VALUES
('abu1', 1, '0000-00-00', 0, 'abu bin kalid', 'kalid@gmail.com', 0, '', '', '', '', '', '', 0, ''),
('abu12', 2, '0000-00-00', 0, 'shamsudin bin hadi', 'kalid@gmail.com', 0, '', '', '', '', '', '', 0, ''),
('iqbal', 3, '0000-00-00', 0, '', 'iqbal@gmail.com', 0, '', '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Name` varchar(255) NOT NULL,
  `ID` int(100) NOT NULL,
  `Prove` tinyint(1) NOT NULL,
  `Pnumber` int(100) NOT NULL,
  `InvoiceNum` int(100) NOT NULL,
  `receipt` int(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Name`, `ID`, `Prove`, `Pnumber`, `InvoiceNum`, `receipt`, `price`) VALUES
('WAN IDRIS', 12345, 1, 139716106, 12655678, 12345677, 345),
('', 0, 0, 0, 0, 0, 0),
('', 0, 0, 0, 0, 0, 0),
('Wan Muhammad Idris', 312524, 127, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Username` varchar(255) NOT NULL,
  `StaffID` int(11) NOT NULL,
  `DateJoined` date NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `IC` int(11) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Address1` varchar(255) NOT NULL,
  `Address2` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `PostalCode` int(11) NOT NULL,
  `Country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Username`, `StaffID`, `DateJoined`, `PhoneNo`, `Name`, `Email`, `IC`, `Gender`, `Position`, `Address1`, `Address2`, `City`, `State`, `PostalCode`, `Country`) VALUES
('za1234', 1, '0000-00-00', 0, 'Wan Muhammad Idris', 'kalid@gmail.com', 0, '', '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Username` varchar(255) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `IC` bigint(20) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `FatherName` varchar(255) NOT NULL,
  `MotherName` varchar(255) NOT NULL,
  `ParentID` bigint(20) NOT NULL,
  `PhoneNo` bigint(20) NOT NULL,
  `GuardianNo` int(11) NOT NULL,
  `Address1` varchar(255) NOT NULL,
  `Address2` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `PostalCode` int(11) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `DateJoined` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Username`, `StudentID`, `Name`, `Email`, `IC`, `Gender`, `FatherName`, `MotherName`, `ParentID`, `PhoneNo`, `GuardianNo`, `Address1`, `Address2`, `City`, `State`, `PostalCode`, `Country`, `DateJoined`) VALUES
('Nazifesto', 1, 'Nazif Kassim', 'nazifesto@gmail.com', 961002106259, 'Male', 'Kassim', 'Noraini', 1, 149289170, 167188450, 'asd', 'asd', 'asd', 'asd', 803500, 'asd', '2018-12-18'),
('Idrisan', 2, 'idris', 'kalid@gmail.com', 0, 'male', '', '', 0, 0, 0, '', '', '', '', 0, '', '0000-00-00'),
('Nazifesto1234', 3, '123', 'kalalaid@gmail.com', 0, '', '', '', 0, 0, 0, '', '', '', '', 0, '', '0000-00-00'),
('akmal', 4, 'akmal rozi', 'akmal@gmail.com', 0, '', '', '', 0, 0, 0, '', '', '', '', 0, '', '0000-00-00'),
('AshrafHuhu', 5, 'Ashraf Dzinely', 'adgrhafaf@gmail.com', 0, '', '', '', 0, 0, 0, '', '', '', '', 0, '', '0000-00-00'),
('din1', 6, '', 'din@gmail.com', 0, '', '', '', 0, 0, 0, '', '', '', '', 0, '', '0000-00-00'),
('din11', 7, '', 'din@gmail.com', 0, '', '', '', 0, 0, 0, '', '', '', '', 0, '', '0000-00-00'),
('kaka111', 8, '', 'kalid@gmail.com', 0, '', '', '', 0, 0, 0, '', '', '', '', 0, '', '0000-00-00'),
('fateh1', 9, 'Al-Fateh', 'fateh@gmail.com', 0, '', '', '', 0, 0, 0, '', '', '', '', 0, '', '0000-00-00'),
('naz!f', 10, 'Nazif', 'nazifesto@gmail.com', 0, '', '', '', 0, 0, 0, '', '', '', '', 0, '', '0000-00-00'),
('ffatin', 11, '', 'kalid@gmail.com', 0, '', '', '', 0, 0, 0, '', '', '', '', 0, '', '0000-00-00'),
('ZXC', 12, '', 'kalid@gmail.com', 0, '', '', '', 0, 0, 0, '', '', '', '', 0, '', '0000-00-00'),
('idris', 13, 'Wan Muhammad Idris', 'idris@gmail.com', 0, '', '', '', 0, 0, 0, '', '', '', '', 0, '', '0000-00-00'),
('Nazifesto1', 14, 'MUHAMMAD NAZIF BIN KASSIM', 'nazifesto@gmail.com', 0, '', '', '', 0, 167188450, 0, '', '', '', '', 0, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `subjectregistrations`
--

CREATE TABLE `subjectregistrations` (
  `No` int(11) NOT NULL,
  `subjectName` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectregistrations`
--

INSERT INTO `subjectregistrations` (`No`, `subjectName`, `section`) VALUES
(1, 'Additional Mathematics', 'A'),
(2, 'Additional Mathematics', 'A'),
(3, 'Additional Mathematics', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Username` varchar(255) NOT NULL,
  `TeacherID` int(11) NOT NULL,
  `DateJoined` date NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `IC` int(11) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address1` varchar(255) NOT NULL,
  `Address2` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `PostalCode` int(11) NOT NULL,
  `Country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Username`, `TeacherID`, `DateJoined`, `PhoneNo`, `Subject`, `Email`, `IC`, `Gender`, `Name`, `Address1`, `Address2`, `City`, `State`, `PostalCode`, `Country`) VALUES
('kaka11121', 1, '0000-00-00', 0, '', 'kalid@gmail.com', 0, '0', 'Salwani', '0', '0', '0', '0', 0, '0'),
('kaka111211', 2, '0000-00-00', 0, '', 'kalid@gmail.com', 0, '0', 'Fatin', '0', '0', '0', '0', 0, '0'),
('kaka11121111', 3, '0000-00-00', 0, '', 'kalid@gmail.com', 0, '', 'Izzati', '', '', '', '', 0, ''),
('fateh', 4, '0000-00-00', 0, '', 'fateh@gmail.com', 0, '', 'Athiqah', '', '', '', '', 0, ''),
('wani', 5, '0000-00-00', 0, '', 'wani@gmail.com', 0, '', '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Email`, `Password`, `Category`) VALUES
('idris', 'idris@gmail.com', 'huhu', 'Student'),
('iqbal', 'iqbal@gmail.com', 'iqbal123', 'Parent'),
('naz!f', 'nazifesto@gmail.com', 'naz', 'Student'),
('Nazifesto', 'nazifesto@gmail.com', 'naz', 'Student'),
('Nazifesto1', 'nazifesto@gmail.com', 'naz', 'Student'),
('Nazifesto1234', 'kalalaid@gmail.com', 'naziof', 'Student'),
('wani', 'wani@gmail.com', 'wani123', 'Teacher'),
('za123', 'kalid@gmail.com', '12', 'Staff'),
('za1234', 'kalid@gmail.com', '12', 'Staff'),
('ZXC', 'kalid@gmail.com', 'ZXCZXC', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmatha`
--
ALTER TABLE `addmatha`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `biologya`
--
ALTER TABLE `biologya`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`ParentID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentID`);

--
-- Indexes for table `subjectregistrations`
--
ALTER TABLE `subjectregistrations`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`TeacherID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmatha`
--
ALTER TABLE `addmatha`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `biologya`
--
ALTER TABLE `biologya`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `ParentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subjectregistrations`
--
ALTER TABLE `subjectregistrations`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `TeacherID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
