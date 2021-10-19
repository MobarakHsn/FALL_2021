-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 08:06 AM
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
-- Database: `aiub`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_students`
--

CREATE TABLE `new_students` (
  `First_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Email` text NOT NULL,
  `Gender` text NOT NULL,
  `Mobile_No` text NOT NULL,
  `Date_Of_Birth` text NOT NULL,
  `HSC_Result` double NOT NULL,
  `SSC_Result` double NOT NULL,
  `Course` text NOT NULL,
  `Year` int(10) NOT NULL,
  `Semester` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_students`
--

INSERT INTO `new_students` (`First_Name`, `Last_Name`, `Email`, `Gender`, `Mobile_No`, `Date_Of_Birth`, `HSC_Result`, `SSC_Result`, `Course`, `Year`, `Semester`) VALUES
('Mobarak', 'Hossain', 'm@gmail.com', 'Male', '01910602868', '2021-10-12', 5, 5, 'EEE', 2022, 'Spring'),
('Mobarak', 'Hossain', 'm@gmail.com', 'Male', '01910602868', '2021-10-27', 5, 5, 'EEE', 2022, 'Spring'),
('Tanvir', 'ahmed', 'm@gmail.com', 'Male', '01910602868', '2021-10-06', 5, 5, 'CSE', 2021, 'Spring');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
