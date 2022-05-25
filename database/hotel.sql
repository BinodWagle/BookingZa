-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 06:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` bigint(10) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` text NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `FirstName`, `LastName`, `Email`, `Message`) VALUES
(1, 'Binod', 'Wagle', 'binod@gmail.com', 'Hey BookingZa, Awesome kepp it up!!'),
(4, 'Binod', 'Wagle', 'binod@gmail.com', 'Hello!! Good Hotel Booking ');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `ID` bigint(10) NOT NULL,
  `Name` text NOT NULL,
  `Address_line1` text NOT NULL,
  `Address_line2` text NOT NULL,
  `City` varchar(10) NOT NULL,
  `State` varchar(10) NOT NULL,
  `Country` varchar(10) NOT NULL,
  `Zip_code` bigint(10) NOT NULL,
  `Email` text NOT NULL,
  `Phone_number` bigint(10) NOT NULL,
  `Telephone_number` bigint(10) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`ID`, `Name`, `Address_line1`, `Address_line2`, `City`, `State`, `Country`, `Zip_code`, `Email`, `Phone_number`, `Telephone_number`, `Description`) VALUES
(1, 'BookingZa', 'BookingZa Town', 'Matepani', 'Pokhara', 'Gandaki', 'Nepal', 33700, 'bookingza@gmail.com', 9804154532, 9804154532, ' Best Online Hotel Booking Site for Sanitized Stays');

-- --------------------------------------------------------

--
-- Table structure for table `room_booking`
--

CREATE TABLE `room_booking` (
  `BookingId` bigint(10) NOT NULL,
  `RoomId` bigint(10) NOT NULL,
  `User_id` bigint(10) NOT NULL,
  `Date` date NOT NULL,
  `Modified_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `CheckIn` date NOT NULL,
  `CheckOut` date NOT NULL,
  `NoOfGuest` varchar(50) NOT NULL,
  `Amount` double NOT NULL,
  `Email` text NOT NULL,
  `Phone_number` bigint(10) NOT NULL,
  `Status` enum('Rejected','Cancelled','Paid','Booked','CheckedOut') NOT NULL DEFAULT 'Booked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_booking`
--

INSERT INTO `room_booking` (`BookingId`, `RoomId`, `User_id`, `Date`, `Modified_date`, `CheckIn`, `CheckOut`, `NoOfGuest`, `Amount`, `Email`, `Phone_number`, `Status`) VALUES
(27, 20, 5, '2021-10-12', '2021-10-12 15:01:44', '2021-10-13', '2021-10-15', '2', 4000, 'rajesh@gmail.com', 8596526352, 'Paid'),
(36, 19, 15, '2022-05-23', '2022-05-23 08:33:48', '2022-05-25', '2022-05-26', '1', 1800, 'ajajajja@gmail.com', 9804154533, 'Paid'),
(40, 34, 17, '2022-05-25', '2022-05-25 10:18:28', '2022-05-26', '2022-05-28', '1', 1000, 'binod@gmail.com', 9804154532, 'CheckedOut'),
(41, 35, 17, '2022-05-25', '2022-05-25 11:11:33', '2022-05-27', '2022-05-31', '1', 2000, 'roshan@gmail.com', 9804154532, 'CheckedOut'),
(42, 36, 17, '2022-05-25', '2022-05-25 11:26:31', '2022-05-26', '2022-05-30', '1', 400, 'room@gmail.com', 9804154555, 'CheckedOut'),
(44, 40, 17, '2022-05-25', '2022-05-25 14:10:46', '2022-05-26', '2022-05-29', '1', 1500, 'arjunthapa@gmail.com', 9804154532, 'CheckedOut');

-- --------------------------------------------------------

--
-- Table structure for table `room_list`
--

CREATE TABLE `room_list` (
  `RoomId` bigint(10) NOT NULL,
  `RoomTypeId` bigint(10) NOT NULL,
  `RoomNumber` bigint(10) NOT NULL,
  `Status` enum('active','in-active') NOT NULL,
  `Booking_status` enum('Booked','Available') NOT NULL DEFAULT 'Available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_list`
--

INSERT INTO `room_list` (`RoomId`, `RoomTypeId`, `RoomNumber`, `Status`, `Booking_status`) VALUES
(18, 12, 6, 'active', 'Available'),
(31, 17, 19, 'active', 'Available'),
(32, 15, 20, 'active', 'Available'),
(33, 12, 12, 'active', 'Available'),
(34, 19, 11, 'active', 'Booked'),
(35, 19, 1, 'active', 'Available'),
(36, 20, 3, 'active', 'Available'),
(37, 22, 2, 'active', 'Available'),
(38, 20, 4, 'active', 'Available'),
(39, 21, 5, 'active', 'Available'),
(40, 19, 7, 'active', 'Available'),
(41, 20, 9, 'active', 'Available'),
(42, 26, 29, 'active', 'Available'),
(43, 25, 34, 'active', 'Available'),
(44, 24, 90, 'active', 'Available'),
(45, 23, 24, 'active', 'Available'),
(46, 22, 16, 'active', 'Available'),
(47, 26, 98, 'active', 'Available'),
(48, 27, 56, 'active', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `room_payment`
--

CREATE TABLE `room_payment` (
  `PaymentId` bigint(10) NOT NULL,
  `BookingId` bigint(10) NOT NULL,
  `PaymentType` enum('Cash','Net Banking','Credit Card','Debit Card') NOT NULL,
  `PaymentDate` date NOT NULL DEFAULT current_timestamp(),
  `Amount` int(50) NOT NULL,
  `Status` enum('Paid') NOT NULL DEFAULT 'Paid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_payment`
--

INSERT INTO `room_payment` (`PaymentId`, `BookingId`, `PaymentType`, `PaymentDate`, `Amount`, `Status`) VALUES
(10, 40, 'Credit Card', '2022-05-25', 1000, 'Paid'),
(12, 42, 'Cash', '2022-05-25', 400, 'Paid'),
(13, 44, 'Credit Card', '2022-05-25', 1500, 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `RoomTypeId` bigint(10) NOT NULL,
  `RoomType` varchar(30) NOT NULL,
  `RoomImage` text NOT NULL,
  `Description` text NOT NULL,
  `Cost` double NOT NULL,
  `Status` enum('active','in-active') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`RoomTypeId`, `RoomType`, `RoomImage`, `Description`, `Cost`, `Status`) VALUES
(19, 'Delexue', 'room.jpg', 'AC Room ', 500, 'active'),
(20, 'Single Bed', '1.PNG', '-Facilities\r\nWifi AC \r\nGaming \r\nTelevision', 100, 'active'),
(21, 'Suits Room', 'suits.jpg', 'Ac', 200, 'active'),
(22, 'Luxury', 'luxury.jpg', 'Mini Bar\r\nBalcony\r\nTelevision', 300, 'active'),
(23, 'Super Deluxe', 'super.jpg', '32 Inch flat screen TV,\r\nHD flat-screen TV,\r\nMini-bar, \r\nTelephone', 900, 'active'),
(24, 'Single Bed Room', 'A.jpg', '32 Inch flat screen TV,\r\n Kitchen facilities,\r\nTowels,\r\nDining tables', 300, 'active'),
(25, ' King Size Bed', 'superior.jpg', 'Closet with hangers, \r\n24 Hour room service, \r\nComputer and Internet access', 1500, 'active'),
(26, 'Superior Room', 'well.jpg', '-Soap & bath amenities \r\n-Mini-bar \r\n-Telephone', 600, 'active'),
(27, 'Family Room', 'family.jpg', 'HD flat-screen TV, Telephone\r\nKitchen facilities, Towels\r\nDining tables', 1200, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

CREATE TABLE `users_details` (
  `UserId` bigint(10) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` text NOT NULL,
  `Password` varchar(64) NOT NULL,
  `ContactNo` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `ProfileImage` text NOT NULL DEFAULT 'user.png',
  `Status` enum('active','in-active') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_details`
--

INSERT INTO `users_details` (`UserId`, `FirstName`, `LastName`, `Email`, `Password`, `ContactNo`, `Gender`, `ProfileImage`, `Status`) VALUES
(17, 'Binod', 'Wagle', 'binod@gmail.com', 'Nepal@90', '9804004205', 'male', 'icon.png', 'active'),
(18, 'Sita', 'Gita', 'sitagita@gmail.com', 'Nepal@90', '9804154532', 'female', 'women.png', 'active'),
(19, 'Saksham', 'Thapa', 'Thapasaksham@gmail.com', 'Nepal@90', '9804138388', 'male', 'man4.png', 'active'),
(20, 'Ankit', 'Lamsal', 'lsmasl@gmai.com', 'Nepal@90', '9804154566', 'male', 'man.png', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `room_booking`
--
ALTER TABLE `room_booking`
  ADD PRIMARY KEY (`BookingId`),
  ADD KEY `FK_User` (`User_id`),
  ADD KEY `FK_RoomBooking` (`RoomId`);

--
-- Indexes for table `room_list`
--
ALTER TABLE `room_list`
  ADD PRIMARY KEY (`RoomId`),
  ADD KEY `FK_RoomType` (`RoomTypeId`);

--
-- Indexes for table `room_payment`
--
ALTER TABLE `room_payment`
  ADD PRIMARY KEY (`PaymentId`),
  ADD KEY `Fk_Booking` (`BookingId`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`RoomTypeId`);

--
-- Indexes for table `users_details`
--
ALTER TABLE `users_details`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `ID` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room_booking`
--
ALTER TABLE `room_booking`
  MODIFY `BookingId` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `room_list`
--
ALTER TABLE `room_list`
  MODIFY `RoomId` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `room_payment`
--
ALTER TABLE `room_payment`
  MODIFY `PaymentId` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `RoomTypeId` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users_details`
--
ALTER TABLE `users_details`
  MODIFY `UserId` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `room_booking`
--
ALTER TABLE `room_booking`
  ADD CONSTRAINT `FK_RoomBooking` FOREIGN KEY (`RoomId`) REFERENCES `room_list` (`RoomId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_User` FOREIGN KEY (`User_id`) REFERENCES `users_details` (`UserId`) ON UPDATE CASCADE;

--
-- Constraints for table `room_list`
--
ALTER TABLE `room_list`
  ADD CONSTRAINT `FK_RoomType` FOREIGN KEY (`RoomTypeId`) REFERENCES `room_type` (`RoomTypeId`) ON UPDATE CASCADE;

--
-- Constraints for table `room_payment`
--
ALTER TABLE `room_payment`
  ADD CONSTRAINT `Fk_Booking` FOREIGN KEY (`BookingId`) REFERENCES `room_booking` (`BookingId`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
