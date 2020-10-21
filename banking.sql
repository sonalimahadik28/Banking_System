-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2020 at 08:34 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(4) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email_id` varchar(150) NOT NULL,
  `location` varchar(100) NOT NULL,
  `current_balance` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email_id`, `location`, `current_balance`) VALUES
(1001, 'Sonali Mahadik', 'sonalimahadik@gmail.com', 'Airoli, Navi Mumbai', 4990),
(1002, 'Amegh Shetye', 'ameghshetye@gmail.com', 'Thane, Mumbai', 1800),
(1003, 'Jayesh Gupta', 'jayeshgupta@gmail.com', 'Kalyan, Mumbai', 9300),
(1004, 'Ankita Sonawane', 'ankitasonawane@gmail.com', 'Vashi, Navi Mumbai', 6400),
(1005, 'Adarsh Singh', 'adarshsingh@gmail.com', 'Dombivli, Mumbai', 5550),
(1006, 'Muskan Tadvi', 'muskantadvi@gmail.com', 'Nerul, Navi Mumbai', 1200),
(1007, 'Akash Jadhav', 'akashjadhav@gmail.com', 'Bhandup, Mumbai', 5620),
(1008, 'Gauri Kamble', 'gaurikamble@gmail.com', 'Vikhroli, Mumbai', 5104),
(1009, 'Suvarna Patil', 'suvarnapatil@gmail.com', 'Koparkhairne, Navi Mumbai', 5990),
(1010, 'vaishnav Salunkhe', 'vaishnavsalunkhe@gmail.com', 'Thane, Mumbai', 3620);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `id` int(100) NOT NULL,
  `transfer_from` varchar(200) NOT NULL,
  `transfer_to` varchar(200) NOT NULL,
  `transfer_amount` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`id`, `transfer_from`, `transfer_to`, `transfer_amount`) VALUES
(32, 'Jayesh Gupta', 'Sonali Mahadik', 4000),
(33, 'Amegh Shetye', 'Ankita Sonawane', 200),
(34, 'Muskan Tadvi', 'Gauri Kamble', 500),
(35, 'vaishnav Salunkhe', 'Akash Jadhav', 620),
(36, 'Suvarna Patil', 'Gauri Kamble', 800),
(37, 'vaishnav Salunkhe', 'Sonali Mahadik', 690),
(38, 'Muskan Tadvi', 'Jayesh Gupta', 800),
(39, 'Ankita Sonawane', 'Muskan Tadvi', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
