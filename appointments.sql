-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2018 at 07:55 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointments`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`) VALUES
(26, 'madu', '0d127550175bccd440ec76f9da116d67', 'cmadu99@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `madu`
--

CREATE TABLE `madu` (
  `appdate` date DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `stime` time DEFAULT NULL,
  `etime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `madu`
--

INSERT INTO `madu` (`appdate`, `title`, `description`, `stime`, `etime`) VALUES
('2018-07-29', 'meet teacher', 'hello', '13:00:00', '03:30:00'),
('2018-07-29', 'meet teacher', 'hello', '13:00:00', '03:30:00'),
('2018-07-09', 'hello ', 'yu', '00:00:00', '00:00:00'),
('2018-07-11', 'dth', 'dddd', '00:00:00', '00:00:00'),
('2018-07-17', 'yuop', 'ggggggg', '03:40:00', '05:50:00'),
('2018-07-19', 'iop', '345', '23:04:00', '04:45:00'),
('2018-07-20', 'rrrr', '456', '23:00:00', '04:05:00'),
('2018-07-07', 'ewrewrwe', 'ffwfwerfwe', '03:21:00', '23:04:00'),
('2018-07-07', 'ewrewrwe', 'ffwfwerfwe', '03:21:00', '23:04:00'),
('2018-07-07', 'ewrewrwe', 'ffwfwerfwe', '03:21:00', '23:04:00'),
('2018-07-07', 'ewrewrwe', 'ffwfwerfwe', '03:21:00', '23:04:00'),
('2018-07-07', 'ewrewrwe', 'ffwfwerfwe', '03:21:00', '23:04:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
