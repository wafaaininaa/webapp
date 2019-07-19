-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2019 at 05:10 AM
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
-- Table structure for table `presensihadir`
--

CREATE TABLE `presensihadir` (
  `id` int(11) NOT NULL,
  `user_id` varchar(99) NOT NULL,
  `img_url` varchar(100) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `latitude` varchar(25) NOT NULL,
  `longitude` varchar(25) NOT NULL,
  `keterangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presensihadir`
--

INSERT INTO `presensihadir` (`id`, `user_id`, `img_url`, `hari`, `tanggal`, `jam`, `latitude`, `longitude`, `keterangan`) VALUES
(1, '5d24456ce6949', 'http://192.168.42.150/staff_Tracking/images/0.jpg', 'Rabu', '17 Jul 201', '13:57', '', '', ''),
(2, '5d24456ce6949', 'http://192.168.42.150/staff_Tracking/images/1.jpg', 'Rabu', '17 Jul 201', '14:13', '', '', ''),
(3, '5d24456ce6949', 'http://192.168.42.150/staff_Tracking/images/2.jpg', 'Rabu', '17 Jul 201', '14:22', '', '', ''),
(4, '5d24456ce6949', 'http://192.168.42.150/staff_Tracking/images/3.jpg', 'Rabu', '17 Jul 2019', '15:1:51', '-6.2722265', '106.8486283', ''),
(5, '5d2fdbb236490', 'http://192.168.42.150/staff_Tracking/images/4.jpg', 'Kamis', '18 Jul 2019', '9:52:49', '-6.2722265', '106.8486283', ''),
(6, '5d2fdbb236490', 'http://192.168.42.150/staff_Tracking/images_user/5.jpg', 'Jumat', '19 Jul 2019', '10:7:31', '-6.2725946', '106.8471532', 'hadir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `presensihadir`
--
ALTER TABLE `presensihadir`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `presensihadir`
--
ALTER TABLE `presensihadir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
