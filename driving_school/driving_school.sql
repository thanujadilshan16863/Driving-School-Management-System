-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 10:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `driving school`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_ID` int(8) NOT NULL,
  `Full_Name` varchar(130) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Birth_Date` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mob_Number` int(11) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `Occupation` varchar(60) NOT NULL,
  `ID_Type` varchar(8) NOT NULL,
  `ID_Number` int(11) NOT NULL,
  `Issued_Date` date NOT NULL,
  `CAddress` varchar(110) NOT NULL,
  `Nationality` varchar(30) NOT NULL,
  `District` varchar(30) NOT NULL,
  `User_Name` varchar(20) NOT NULL,
  `CPassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `Full_Name`, `First_Name`, `Last_Name`, `Birth_Date`, `Email`, `Mob_Number`, `Gender`, `Occupation`, `ID_Type`, `ID_Number`, `Issued_Date`, `CAddress`, `Nationality`, `District`, `User_Name`, `CPassword`) VALUES
(1, 'Nawarathne', 'Thanuja', 'Nawarathne', '2024-05-09', 'thanujadilshan16863@gmail.com', 712958370, 'female', 'sdfsdf', 'new', 12312, '2024-06-05', '114/L Uduwawala,Katugastota', '23d', 'asda', '', ''),
(3, 'wer', 'werfwer', 'dfwerf', '2024-05-08', 'qweqweawd@gmail.com', 7112312, 'female', 'sdfsdf', 'new', 34123, '2024-05-30', 'werv sdUduwugastotaef', 'wer', 'erw', '', ''),
(4, 'Nawarathne', 'Thanuja', 'Nawarathne', '2024-05-10', 'thanujadilshan16863@gmail.com', 712958370, 'other', 'sdfsdf', 'new', 123, '2024-05-22', '114/L Uduwawala,Katugastota', 'fsadf', 'fasef', '', ''),
(5, 'Nawarathne', 'Thanuja', 'ded', '2024-05-03', 'thanujadilshan16863@gmail.com', 712958370, 'male', 'sdfsdf', 'new', 1231, '2024-05-15', '114/L Uduwawala,Katugastota', '1231', 'efwe', 'Carrina123', 'wfwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
