-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 04:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle_rentingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `available_order`
--

CREATE TABLE `available_order` (
  `id` int(11) NOT NULL,
  `Vehicle` varchar(100) NOT NULL,
  `SL_From` varchar(100) NOT NULL,
  `SL_To` varchar(100) NOT NULL,
  `From_Date` varchar(100) NOT NULL,
  `To_Date` varchar(100) NOT NULL,
  `Payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `available_order`
--

INSERT INTO `available_order` (`id`, `Vehicle`, `SL_From`, `SL_To`, `From_Date`, `To_Date`, `Payment`) VALUES
(1, 'Car', 'Dhaka', 'Rangpur', '10 DEC', '15 DEC', '5K'),
(2, 'Car', 'Rangpur ', 'Dhaka', '16 DEC', ' 17DEC', '2K');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` bigint(20) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `vehicle_type` varchar(100) NOT NULL,
  `vehicle_model` varchar(255) NOT NULL,
  `pickup_location` varchar(100) NOT NULL,
  `dropoff_location` varchar(100) NOT NULL,
  `pickup_date` varchar(100) NOT NULL,
  `dropoff_date` varchar(100) NOT NULL,
  `rider_type` varchar(100) NOT NULL,
  `fare` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `u_name`, `vehicle_type`, `vehicle_model`, `pickup_location`, `dropoff_location`, `pickup_date`, `dropoff_date`, `rider_type`, `fare`) VALUES
(1, 'Afrin', 'SUV', 'Toyota Land Cruiser Prado', 'Dhaka', 'Chittagong', '5/6/2021', '5/9/2021', 'self-drive', '4000'),
(2, 'Afsana', 'SUV', 'Mitsubishi Pajero Sport', 'Bogura', 'Dhaka', '7/8/2021', '7/10/2021', 'with driver', '2000'),
(3, 'Farhad', 'Motobike', 'Honda Exmotion', 'Dhaka', 'Narsingdi', '8/9/2021', '8/12/2021', 'self-drive', '1500'),
(4, 'Ali', 'Motobike', 'Suzuki GSXR', 'Narayangonj', 'Savar', '4/5/2021', '4/7/2021', 'self-drive', '2000'),
(6, 'Bob', 'Sedan', 'Toyota Premio', 'Rupgonj', 'Monohordi', '3/4/2021', '5/4/2021', 'Self-drive', '3500');

-- --------------------------------------------------------

--
-- Table structure for table `con_order`
--

CREATE TABLE `con_order` (
  `id` int(11) NOT NULL,
  `Vehicle` varchar(100) NOT NULL,
  `SL_From` varchar(100) NOT NULL,
  `SL_To` varchar(100) NOT NULL,
  `From_Date` varchar(100) NOT NULL,
  `To_Date` varchar(100) NOT NULL,
  `Payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `con_order`
--

INSERT INTO `con_order` (`id`, `Vehicle`, `SL_From`, `SL_To`, `From_Date`, `To_Date`, `Payment`) VALUES
(1, 'Car', 'Dhaka', 'Rangpur', '16 NOV', '21 NOV', '5K');

-- --------------------------------------------------------

--
-- Table structure for table `driver_registration`
--

CREATE TABLE `driver_registration` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `NID` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `File` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver_registration`
--

INSERT INTO `driver_registration` (`ID`, `Name`, `NID`, `Email`, `Password`, `File`) VALUES
(1, 'Juhair Joha', '53645675', 'joha10431@gmail.com', 'md5(123)', '54712-screenshot-(10).png'),
(2, 'driver1', '1234', 'driver1@gmail.com', 'md5(234)', '12701-bike-ride.png');

-- --------------------------------------------------------

--
-- Table structure for table `manage_vehicle`
--

CREATE TABLE `manage_vehicle` (
  `id` bigint(20) NOT NULL,
  `modelname` varchar(50) NOT NULL,
  `fueltype` varchar(100) NOT NULL,
  `engine` varchar(100) NOT NULL,
  `rent` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_vehicle`
--

INSERT INTO `manage_vehicle` (`id`, `modelname`, `fueltype`, `engine`, `rent`) VALUES
(15, 'Toyota Land Cruiser Prado', 'Diesel', '2982 cc', '12000'),
(16, 'Nissan X trail', 'Diesel/Hybrid', '1995 cc', '9000'),
(17, 'Mitsubishi Pajero Sport', 'Diesel', '2972 CC', '11000'),
(18, 'Toyota Premio', 'Petrol', '1600 CC', '7000'),
(19, 'Mitsubishi Lancer', 'Petrol', '1800 CC', '7500'),
(20, 'Toyota Land Cruiser Prado', 'engine', '2200cc', '11000');

-- --------------------------------------------------------

--
-- Table structure for table `menu_table`
--

CREATE TABLE `menu_table` (
  `Id` int(11) NOT NULL,
  `SL_From` varchar(50) NOT NULL,
  `SL_To` varchar(50) NOT NULL,
  `Vehicle` varchar(50) NOT NULL,
  `From_Date` varchar(50) NOT NULL,
  `To_Date` varchar(50) NOT NULL,
  `Driving_Option` varchar(50) NOT NULL,
  `Payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_table`
--

INSERT INTO `menu_table` (`Id`, `SL_From`, `SL_To`, `Vehicle`, `From_Date`, `To_Date`, `Driving_Option`, `Payment`) VALUES
(40, 'Bagerhat', 'Jessore', 'Car', '10/10/2222', '12/12/2222', '', '25000'),
(41, 'Bagerhat', 'Jessore', 'Car', '10/10/2222', '12/12/2222', 'Self Driving', '25000'),
(42, 'Bagerhat', 'Jessore', 'Car', '10/10/2222', '12/12/2222', 'Self Driving', '25000'),
(43, 'Bagerhat', 'Jessore', 'Car', '10/10/2222', '12/12/2222', 'Self Driving', '25000'),
(44, 'Bagerhat', 'Jessore', 'Car', '10/10/2222', '12/12/2222', 'Self Driving', '25000'),
(45, 'Bagerhat', 'Jessore', 'Car', '10/10/2222', '12/12/2222', 'Self Driving', '25000'),
(46, 'Bagerhat', 'Jessore', 'Car', '10/10/2222', '12/12/2222', 'Self Driving', '25000'),
(47, 'Bagerhat', 'Jessore', 'Car', '10/10/2222', '12/12/2222', 'Self Driving', '25000'),
(48, 'Bagerhat', 'Jessore', 'Car', '10/10/2222', '12/12/2222', 'Self Driving', '25000'),
(49, 'Bagerhat', 'Jessore', 'Car', '10/10/2222', '12/12/2222', 'Self Driving', '25000'),
(50, 'Bagerhat', 'Jessore', 'Car', '10/10/2222', '12/12/2222', 'Self Driving', '25000'),
(51, 'Bagerhat', 'Jessore', 'Car', '10/10/2222', '12/12/2222', 'Self Driving', '25000'),
(52, 'Bagerhat', 'Jessore', 'Car', '10/10/2222', '12/12/2222', 'Self Driving', '25000');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` bigint(20) NOT NULL,
  `u_id` bigint(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `u_id`, `user_name`, `email`, `phone`, `password`, `date`) VALUES
(1, 0, 'Farhadur Rahman', 'farhad@gmail.com', '01641288227', '345', '2021-12-12 10:47:48'),
(2, 0, 'Rezoana Afrin', 'rezoana@gmail.com', '01635270262', '789', '2021-12-12 10:48:06'),
(3, 0, 'Ishmam Mir', 'ishmam@gmail.com', '01674589431', '12345', '2021-12-12 10:48:33'),
(4, 1013317581, 'Juhair Anjum Joha', 'joha@gmail.com', '01634589012', '0123', '2021-12-12 10:49:17'),
(5, 399725370224837, 'Ameerah', 'ameerah@gmail.com', '', '012', '2021-10-24 17:14:31'),
(6, 9279, 'rezoana', 'rezoanaafrinn@gmail.com', '', '0123', '2021-11-13 15:33:45'),
(7, 33018, 'admin', 'admin@gmail.com', '', '123', '2021-11-14 02:36:04'),
(8, 9223372036854775807, 'Arnob', 'arnob@gmail.com', '', '12345', '2021-12-03 19:53:32'),
(9, 96927, 'Farhadur Rahman', 'farhadur@gmail.com', '', '123456', '2021-12-13 05:20:59'),
(10, 1986417486843, 'Tushti', 'tushti@gmail.com', '', '12345', '2021-12-04 16:08:13');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `File` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`Id`, `Name`, `Email`, `Password`, `File`) VALUES
(1, 'Ishmam', 'ishmam@gmail.com', 'md5(123)', '18078-h47-2.0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userpayment`
--

CREATE TABLE `userpayment` (
  `u_id` bigint(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `pay_date` varchar(100) NOT NULL,
  `pay_method` varchar(100) NOT NULL,
  `total_pay` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userpayment`
--

INSERT INTO `userpayment` (`u_id`, `user_name`, `pay_date`, `pay_method`, `total_pay`) VALUES
(1, 'Afsana Afrin', '2/3/2021', 'Bkash', '12000');

-- --------------------------------------------------------

--
-- Table structure for table `vehiclemaintain`
--

CREATE TABLE `vehiclemaintain` (
  `id` bigint(20) NOT NULL,
  `v_type` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehiclemaintain`
--

INSERT INTO `vehiclemaintain` (`id`, `v_type`, `product`, `price`) VALUES
(1, 'Sedan', 'Engine oil', '1000'),
(2, 'SUV', 'Glass Cleaner', '150');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `available_order`
--
ALTER TABLE `available_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `con_order`
--
ALTER TABLE `con_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver_registration`
--
ALTER TABLE `driver_registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `manage_vehicle`
--
ALTER TABLE `manage_vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_table`
--
ALTER TABLE `menu_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `userpayment`
--
ALTER TABLE `userpayment`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `vehiclemaintain`
--
ALTER TABLE `vehiclemaintain`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `available_order`
--
ALTER TABLE `available_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `con_order`
--
ALTER TABLE `con_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `driver_registration`
--
ALTER TABLE `driver_registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manage_vehicle`
--
ALTER TABLE `manage_vehicle`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `menu_table`
--
ALTER TABLE `menu_table`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userpayment`
--
ALTER TABLE `userpayment`
  MODIFY `u_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehiclemaintain`
--
ALTER TABLE `vehiclemaintain`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
