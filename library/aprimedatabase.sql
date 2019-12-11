-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 12:37 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `UserID` int(11) NOT NULL,
  `AdminID` int(11) NOT NULL,
  `Jobscope` varchar(100) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `register_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`UserID`, `AdminID`, `Jobscope`, `Status`, `register_by`) VALUES
(1, 3, 'Manage Rental Site Operation', 'active', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carbooking`
--

CREATE TABLE `carbooking` (
  `BookingID` int(11) NOT NULL,
  `PickUpTime` time NOT NULL,
  `PickUpDate` date NOT NULL,
  `ReturnTime` time NOT NULL,
  `ReturnDate` date NOT NULL,
  `CarName` varchar(20) NOT NULL,
  `CarPlate` varchar(10) NOT NULL,
  `Car_Status` varchar(20) NOT NULL,
  `CarID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carbooking`
--

INSERT INTO `carbooking` (`BookingID`, `PickUpTime`, `PickUpDate`, `ReturnTime`, `ReturnDate`, `CarName`, `CarPlate`, `Car_Status`, `CarID`, `CustomerID`) VALUES
(2, '10:00:00', '2019-12-04', '15:00:00', '2019-12-04', 'Ford Fiesta', 'KDM6481', 'Active', 27, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cardetails`
--

CREATE TABLE `cardetails` (
  `CarID` int(11) NOT NULL,
  `CarImage` varchar(255) NOT NULL,
  `CarName` varchar(25) NOT NULL,
  `CarClass` varchar(25) NOT NULL,
  `CarPassenger` int(11) NOT NULL,
  `CarPrice` float NOT NULL,
  `CarGear` varchar(10) NOT NULL,
  `CarFeatures` varchar(50) DEFAULT NULL,
  `CarPlate` varchar(10) NOT NULL,
  `CarStatus` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cardetails`
--

INSERT INTO `cardetails` (`CarID`, `CarImage`, `CarName`, `CarClass`, `CarPassenger`, `CarPrice`, `CarGear`, `CarFeatures`, `CarPlate`, `CarStatus`) VALUES
(27, 'Pictures/FordFiesta.jpg', 'Ford Fiesta', 'Compact', 5, 12, 'Manual', 'ABS,Air Bag,Air Conditional,HD Audio System,Centra', 'KDM6481', 'Active'),
(28, 'Pictures/KiaSportage.png', 'Kia Sportage', 'Station Wagon', 5, 14, 'Manual', 'ABS,Air Bag,Air Conditional,HD Audio System,Electr', 'MNA8460', 'Active'),
(29, 'Pictures/Peugeot207.png', 'Peugeot 207', 'Compact', 5, 12, 'Auto', 'Air Conditional,HD Audio System,Central Locking,Po', 'MOT9481', 'Active'),
(31, 'Pictures/Teana.png', 'Nissan Teana', 'Compact', 5, 20, 'Auto', 'ABS,Air Bag,Air Conditional,HD Audio System,Centra', 'CT1111', 'Active'),
(32, 'Pictures/', 'Nissan Teana', 'Compact', 5, 25, 'Auto', 'ABS,Air Bag,Air Conditional,HD Audio System,Centra', 'CT1111', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `UserID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`UserID`, `CustomerID`) VALUES
(2, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `InvoiceID` int(11) NOT NULL,
  `PaymentAmount` float NOT NULL,
  `IssueDate` date NOT NULL,
  `BookingID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` int(11) NOT NULL,
  `PayDate` date NOT NULL,
  `PayTime` time NOT NULL,
  `InvoiceID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `RentID` int(11) NOT NULL,
  `RentTime` time NOT NULL,
  `RentDate` date NOT NULL,
  `AdminID` int(11) NOT NULL,
  `BookingID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`RentID`, `RentTime`, `RentDate`, `AdminID`, `BookingID`) VALUES
(2, '10:00:00', '2019-12-04', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `return`
--

CREATE TABLE `return` (
  `ReturnID` int(11) NOT NULL,
  `ReturnTime` time NOT NULL,
  `ReturnDate` date NOT NULL,
  `AdminID` int(11) NOT NULL,
  `RentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `return`
--

INSERT INTO `return` (`ReturnID`, `ReturnTime`, `ReturnDate`, `AdminID`, `RentID`) VALUES
(2, '15:00:00', '2019-12-04', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Full_Name` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Contact` varchar(12) NOT NULL,
  `User_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Username`, `Password`, `Full_Name`, `DOB`, `Email`, `Gender`, `Contact`, `User_type`) VALUES
(1, 'admin1', '1234', 'LeeJohn', '2019-05-09', 'helloworld@hotmail.com', 'Male', '0163535269', 'admin'),
(2, 'customer1', '1234', 'Der', '2016-06-22', 'theriz2362@gmail.com', 'Male', '01236547896', 'customer'),
(3, '', '', '', '1970-01-01', '', '', '', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `register_by` (`register_by`);

--
-- Indexes for table `carbooking`
--
ALTER TABLE `carbooking`
  ADD PRIMARY KEY (`BookingID`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `CarID` (`CarID`);

--
-- Indexes for table `cardetails`
--
ALTER TABLE `cardetails`
  ADD PRIMARY KEY (`CarID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`InvoiceID`),
  ADD KEY `BookingID` (`BookingID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`),
  ADD KEY `InvoiceID` (`InvoiceID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`RentID`),
  ADD KEY `AdminID` (`AdminID`),
  ADD KEY `BookingID` (`BookingID`);

--
-- Indexes for table `return`
--
ALTER TABLE `return`
  ADD PRIMARY KEY (`ReturnID`),
  ADD KEY `AdminID` (`AdminID`),
  ADD KEY `RentID` (`RentID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carbooking`
--
ALTER TABLE `carbooking`
  MODIFY `BookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cardetails`
--
ALTER TABLE `cardetails`
  MODIFY `CarID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `InvoiceID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `return`
--
ALTER TABLE `return`
  MODIFY `ReturnID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`),
  ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`register_by`) REFERENCES `admin` (`AdminID`);

--
-- Constraints for table `carbooking`
--
ALTER TABLE `carbooking`
  ADD CONSTRAINT `carbooking_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`),
  ADD CONSTRAINT `carbooking_ibfk_2` FOREIGN KEY (`CarID`) REFERENCES `cardetails` (`CarID`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`BookingID`) REFERENCES `carbooking` (`BookingID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`InvoiceID`) REFERENCES `invoice` (`InvoiceID`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`);

--
-- Constraints for table `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `rent_ibfk_1` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`AdminID`),
  ADD CONSTRAINT `rent_ibfk_2` FOREIGN KEY (`BookingID`) REFERENCES `carbooking` (`BookingID`);

--
-- Constraints for table `return`
--
ALTER TABLE `return`
  ADD CONSTRAINT `return_ibfk_1` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`AdminID`),
  ADD CONSTRAINT `return_ibfk_2` FOREIGN KEY (`RentID`) REFERENCES `rent` (`RentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
