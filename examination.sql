-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 03:36 PM
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
-- Database: `examination`
--

-- --------------------------------------------------------

--
-- Table structure for table `examination`
--

CREATE TABLE `examination` (
  `No` int(5) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Choice1` varchar(100) NOT NULL,
  `Choice2` varchar(100) NOT NULL,
  `Choice3` varchar(100) NOT NULL,
  `Choice4` varchar(100) NOT NULL,
  `Answer` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examination`
--

INSERT INTO `examination` (`No`, `Question`, `Choice1`, `Choice2`, `Choice3`, `Choice4`, `Answer`) VALUES
(1, 'ทดสอบคำถาม', 'คำตอบ 1', 'คำตอบ 2', 'คำตอบ 3', 'คำตอบ 4', 4),
(2, 'ทดสอบคำถาม', 'คำตอบ 1', 'คำตอบ 2', 'คำตอบ 3', 'คำตอบ 4', 4),
(3, '1+2+3 เท่ากับเท่าไหร่ ?', '6', '5', '3', '4', 1),
(4, '1+2+3 เท่ากับเท่าไหร่ ?', '6', '5', '3', '4', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `examination`
--
ALTER TABLE `examination`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `examination`
--
ALTER TABLE `examination`
  MODIFY `No` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
