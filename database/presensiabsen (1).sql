-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 04:56 AM
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
-- Table structure for table `presensiabsen`
--

CREATE TABLE `presensiabsen` (
  `id` int(11) NOT NULL,
  `user_id` varchar(99) NOT NULL,
  `alasan_absen` varchar(255) NOT NULL,
  `hari` varchar(25) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `jam` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presensiabsen`
--

INSERT INTO `presensiabsen` (`id`, `user_id`, `alasan_absen`, `hari`, `tanggal`, `jam`) VALUES
(1, '', '', '', '', ''),
(2, '5d24456ce69', 'cape', 'Rabu', '17 Jul 2019', '16:23:52'),
(3, '5d24456ce6949', 'cape bgt ah', 'Rabu', '17 Jul 2019', '16:45:8'),
(4, '5d2fdbb236490', 'mls', 'Kamis', '18 Jul 2019', '9:52:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `presensiabsen`
--
ALTER TABLE `presensiabsen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `presensiabsen`
--
ALTER TABLE `presensiabsen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
