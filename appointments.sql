-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 09:13 PM
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
(1, 'bnbb', '000', ''),
(2, 'bnbb', '000', ''),
(3, 'bnbb', 'mmm', 'cmadu99@gmail.com'),
(4, 'bnbb', 'mmm', 'cmadu99@gmail.com'),
(5, 'mm', 'ihhii', 'jjj@vvhh.bjb'),
(6, 'ttt', 'okoko', 'jjj@vvhh.bjb'),
(7, 'oooo', '4f22a4b4bcbe105cc8a7', 'jjj@vvhh.bjb'),
(8, 'kolo', '8a2bc6f29f421af1f4094296ae17f244', 'cmadu99@gmail.com'),
(9, 'yutrewqasd', 'a5279ea4aa1cb2d40746b82e806e7767', 'cmadu99@gmail.com'),
(10, 'qwerty', '2e5941901e8b5e214dcc5032dfce71bb', 'jjj@vvhh.bjb'),
(11, 'iiii', '16438c3543dd7e744ff14586dcc77026', 'cmadu99@gmail.com'),
(12, 'drt', '025c1e37b069dcd4129f02c842b705af', 'cmadu99@gmail.com'),
(13, 'trfvbh', '18fcd73eae8f118b0bf5f4cf5d1d766e', 'cmadu99@gmail.com'),
(14, 'yuyu', 'c7e1249ffc03eb9ded908c236bd1996d', 'cmadu99@gmail.com'),
(15, 'zero', '17324235011af66d659cbb7a2d2cbe6e', 'cmadu99@gmail.com'),
(16, 'kololo', 'b19f854c93aa7330289ce0325c7b81ec', 'cmadu99@gmail.com'),
(17, 'lolo', 'd6581d542c7eaf801284f084478b5fcc', 'cmadu99@gmail.com'),
(18, 'polo', '07cba2f900de9f4d1e5e619fec361ccb', 'cmadu99@gmail.com'),
(19, 'jolo', '3cff8bbe74312c649cb1252687274b61', 'cmadu99@gmail.com'),
(20, 'molo', '43c9cf785c341a2b4a5783ffb69efbb6', 'cmadu99@gmail.com'),
(21, 'dolo', '2ab1e98b135871af6cb01b472195cff4', 'jjj@vvhh.bjb'),
(22, 'rolo', 'ee5ed5937af2624e1e06fe97aa6e9c0b', 'cmadu99@gmail.com'),
(23, '', 'ee5ed5937af2624e1e06fe97aa6e9c0b', 'cmadu99@gmail.com');

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
