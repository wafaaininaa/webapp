-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 19, 2019 at 09:28 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id10198469_webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `user_id` varchar(99) NOT NULL,
  `satker` varchar(99) NOT NULL,
  `kepalaSatker` varchar(99) NOT NULL,
  `nip` varchar(64) NOT NULL,
  `tahunAnggaran` year(4) NOT NULL,
  `noKontrak` varchar(99) NOT NULL,
  `tglKontrak` date NOT NULL,
  `nama` varchar(99) NOT NULL,
  `kategoriTenaga` varchar(99) NOT NULL,
  `username` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL,
  `jabatan` varchar(99) NOT NULL,
  `noTelp` varchar(99) NOT NULL,
  `tglMobilisasi` date NOT NULL,
  `tglDemobilisasi` date NOT NULL,
  `jamMasuk` time(6) NOT NULL,
  `latitude` float(10,6) NOT NULL,
  `longitude` float(10,6) NOT NULL,
  `image` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`user_id`, `satker`, `kepalaSatker`, `nip`, `tahunAnggaran`, `noKontrak`, `tglKontrak`, `nama`, `kategoriTenaga`, `username`, `password`, `jabatan`, `noTelp`, `tglMobilisasi`, `tglDemobilisasi`, `jamMasuk`, `latitude`, `longitude`, `image`) VALUES
('5d2bda1b75bf0', 'Grand Kemang JKT', 'Kepala', '987787987898', 2019, 'UU88878a7s8ha', '2019-01-01', 'Budi', 'A', 'budibudi', 'budibudi', 'Staff', '0988782736172', '2019-02-10', '2019-02-21', '00:00:08.000000', -6.254383, 106.810799, '5d2bda1b75bf0.jpg'),
('5d2bf9b525474', 'PT Webgis Indonesia', 'Siapa', '982834782', 2019, 'jkajd827389', '2019-10-10', 'Aku', 'B', 'akusiapa', 'akusiapa', 'Staff', '091212122323', '2019-10-11', '2019-10-20', '08:00:00.000000', -6.229902, 106.874130, '5d2bf9b525474.jpg'),
('5d2d4f317b560', 'PT SM ', 'Lee', '19191919', 2020, 'abc1111', '2020-01-01', 'Wafa', 'B', 'wafawafa', 'wafawafa', 'Staff', '081212837284', '2020-01-10', '2020-01-31', '10:00:00.000000', -6.261180, 106.856422, '5d2d4f317b560.jpg'),
('5d2d52a0b82d4', 'PT SM', 'do', 'das2q32', 2019, 'xv3e3we', '2019-01-01', 'Salsa', 'staff', 'salsakhairinaa', 'salsasalsa', 'staff', '02183812937128312', '2019-01-01', '2019-02-01', '08:00:00.000000', -6.267443, 106.853241, '5d2d52a0b82d4.png'),
('5d2fdbb236490', 'PT AKU', 'Kamu', '828373828', 2020, 'HAHA82828', '2020-03-19', 'Saya', 'N', 'user', 'useruser', 'staff', '0928828', '2020-03-20', '2020-03-31', '10:00:00.000000', -6.267451, 106.853249, '5d2fdbb236490.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
