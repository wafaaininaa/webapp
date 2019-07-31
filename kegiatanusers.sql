-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 08:36 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `kegiatanusers`
--

CREATE TABLE `kegiatanusers` (
  `id` int(11) NOT NULL,
  `user_id` varchar(99) NOT NULL,
  `url` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `jam` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatanusers`
--

INSERT INTO `kegiatanusers` (`id`, `user_id`, `url`, `keterangan`, `hari`, `tanggal`, `jam`) VALUES
(31, '5d24456ce6949', 'http://192.168.42.150/staff_Tracking/uploads/1.pdf', 'ggg', 'Senin', '15 Jul 201', '16:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kegiatanusers`
--
ALTER TABLE `kegiatanusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kegiatanusers`
--
ALTER TABLE `kegiatanusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
