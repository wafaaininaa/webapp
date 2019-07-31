-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2019 at 10:12 AM
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
-- Database: `webapp`
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
  `latitude` varchar(99) NOT NULL,
  `longitude` varchar(99) NOT NULL,
  `image` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`user_id`, `satker`, `kepalaSatker`, `nip`, `tahunAnggaran`, `noKontrak`, `tglKontrak`, `nama`, `kategoriTenaga`, `username`, `password`, `jabatan`, `noTelp`, `tglMobilisasi`, `tglDemobilisasi`, `jamMasuk`, `latitude`, `longitude`, `image`) VALUES
('5d23fbb59223a', 'test', 'test', '', 0000, 'test', '0000-00-00', 'test', 'test', 'test', 'kkkk', 'test', 'test', '0000-00-00', '0000-00-00', '00:00:00.000000', 'test', 'test', '5d23fbb59223a.jpg'),
('5d24033289f4e', 'aa', 'aaa', '', 0000, 'aaaa', '0000-00-00', 'aaaa', 'aaaaa', 'aaaaaa', 'aaaaaaaaaaaaa', 'aaaaaaa', 'aaaaaaa', '0000-00-00', '0000-00-00', '00:00:00.000000', 'aaaaa', 'aaaaaa', 'default.png'),
('5d2404fcc986b', 'aku', 'kamu', '', 0000, 'kaks', '0000-00-00', 'nama', 'siapa', 'akakakak', 'kepolu', 'bos', '009998889', '0000-00-00', '0000-00-00', '00:00:08.000000', 'kakakak', 'kkakakak', 'default.jpg'),
('5d2406c292c78', 'satker', 'kepala', '', 2019, '92882929', '0000-00-00', 'dhsjsj', 'jsjsjsj', 'kepo', 'kepolu', 'hahaha', 'ahahahah', '0000-00-00', '0000-00-00', '00:00:09.000000', 'jsjsjs', 'ahahahah', 'default.jpg'),
('5d240d39ef72b', 'siapa', 'namanya', '', 0000, 'hahah', '0000-00-00', 'coba', 'apa', 'siapa', 'dimana', 'mengapa', 'kenapa', '0000-00-00', '0000-00-00', '00:00:00.000000', 'y', 'ya', 'default.png'),
('5d240e75798dc', 'siapa', 'namanya', '', 0000, 'hahah', '0000-00-00', 'coba', 'apa', 'siapa', 'dimana', 'mengapa', 'kenapa', '0000-00-00', '0000-00-00', '00:00:00.000000', 'y', 'ya', 'default.png'),
('5d240f75f2c74', 'salsa', 'salsa', '', 0000, 'salsa', '0000-00-00', 'sasa', 'salsa', 'salsa', 'saslsa', 'alsala', 'asalal', '0000-00-00', '0000-00-00', '00:00:00.000000', 'lalalla', 'lsksk', '5d240f75f2c74.jpg'),
('5d2436953d2aa', 'satker', 'aku', '', 0000, 'POI', '0000-00-00', 'nnnn', 'nnnn', 'nnnnn', 'nnnn', 'nnnn', 'nnnn', '0000-00-00', '0000-00-00', '00:00:00.000000', 'nnnnnnn', 'mmmmm', '5d2436953d2aa.jpg'),
('5d243761d5011', 'satker', 'aku', '', 0000, 'POI', '0000-00-00', 'nnnn', 'nnnn', 'nnnnn', 'nnnn', 'nnnn', 'nnnn', '0000-00-00', '0000-00-00', '00:00:00.000000', 'nnnnnnn', 'mmmmm', '5d243761d5011.jpg'),
('5d2437dd6b24c', 'PT Webgis Indonesia', 'Dr. Ir. H. Gatau', '', 2019, '0109102910', '2019-07-20', 'Namamu', 'Ahli', 'namamu', 'namamu', 'Staff', '081727372738', '2019-12-31', '2020-03-03', '00:00:09.000000', '-827362829', '92738273', '5d2437dd6b24c.jpg'),
('5d243981d549e', 'PT KAI', 'Prof. Siapa', '', 2019, '0019283920938', '2019-10-10', 'Wafa Ainia', 'Ahli', 'wafa', 'wafa', 'Staff', '081212121212', '2019-11-11', '2019-12-12', '09:00:00.000000', '-128.292929', '1219382.2129918', '5d243981d549e.jpg'),
('5d24456ce6949', 'PT Testing', 'Ir. Testing', '080989999', 2019, '77182736', '2019-08-01', 'User', 'Ahli', 'username', 'password', 'Staff', '08777777777', '2019-08-01', '2019-08-31', '09:00:00.000000', '-99.81728', '821.12121', '5d24456ce6949.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
