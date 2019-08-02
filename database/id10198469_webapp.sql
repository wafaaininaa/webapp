-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 02, 2019 at 04:04 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'anani', '10406c1d7b7421b1a56f0d951e952a95'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

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

-- --------------------------------------------------------

--
-- Table structure for table `kegiatanusers`
--

CREATE TABLE `kegiatanusers` (
  `id` int(11) NOT NULL,
  `user_id` varchar(99) NOT NULL,
  `url` varchar(225) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `jam` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatanusers`
--

INSERT INTO `kegiatanusers` (`id`, `user_id`, `url`, `keterangan`, `hari`, `tanggal`, `jam`) VALUES
(31, '5d24456ce6949', 'http://192.168.42.150/staff_Tracking/uploads/1.pdf', 'ggg', 'Senin', '15 Jul 201', '16:38'),
(32, '454554', 'http://192.168.1.162/staff_Tracking/uploads_file_u', 'coba tes', 'jumat', '19 jul 201', '12:12'),
(33, '5d2fdbb236490', 'http://192.168.1.162/staff_Tracking/uploads_file_u', 'coba tes lg', 'jumat', '19 jul 201', '12:11'),
(34, '5d2fdbb236490', '', 'coba tes lg hayo', 'jumat', '19 jul 201', '15:11'),
(35, '5d2fdbb236490', 'http://androidblog.esy.es/AndroidJSon/uploads_file', 'coba tes lg hayo', 'jumat', '19 jul 201', '15:11'),
(36, '5d2fdbb236490', 'http://192.168.1.162/staff_Tracking/uploads_file_u', 'coba terus', 'senin', '22 Jul 201', '08:46'),
(37, '5d2fdbb236490', 'http://192.168.1.162/staff_Tracking/uploads_file_u', 'coba terus lg', 'senin', '22 Jul 201', '08:46'),
(38, '5d2fdbb236490', 'https://192.168.1.162uploads_file_user/38.pdf', 'coba terus lg lg', 'senin', '22 Jul 201', '08:46'),
(39, '', 'http://192.168.1.162/staff_Tracking/uploads_file_u', 'keterangan', 'senin', '22 Jul 201', 'jam'),
(40, '5d2fdbb236490', 'http://192.168.1.162/staff_Tracking/uploads_file_u', 'hari ini', 'senin', '22 Jul', '10:43'),
(41, '5d2fdbb236490', 'http://trackingforadmin.000webhostapp.comuploads_file_user/41.pdf', 'laporan kuy', 'senin', '22 Jul 2019', '13:20'),
(42, '5d2fdbb236490', 'http://trackingforadmin.000webhostapp.com/uploads_file_user/42.pdf', 'laporan lagi lagi', 'senin', '22 Jul 2019', '13:38'),
(43, '5d2fdbb236490', 'http://trackingforadmin.000webhostapp.com/uploads_file_user/43.pdf', 'laporan lagi lagi lagi', 'senin', '22 Jul 2019', '15:36'),
(44, '5d2fdbb236490', 'http://trackingforadmin.000webhostapp.com/uploads_file_user/44.pdf', 'tidak hadir', 'selasa', '23 Jul 2019', '09:35');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `user_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lokasi` point NOT NULL,
  `tanggal` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `jam` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`user_id`, `lokasi`, `tanggal`, `jam`) VALUES
('5d2fdbb236490', '\0\0\0\0\0\0\0\0\0ÄÒã¿\0\0¢N∂Z@', '2019-6-26', '9:29:22'),
('5d2fdbb236490', '\0\0\0\0\0\0\0\0\0∞Aœ¿\0\0ädO∂Z@', '2019-6-26', '9:32:58'),
('5d2fdbb236490', '\0\0\0\0\0\0\0\0\0Pê§¿\0\0ﬁL∂Z@', '2019-6-26', '9:36:34'),
('5d2fdbb236490', '\0\0\0\0\0\0\0\0\0@ª¿\0\0)J∂Z@', '2019-6-26', '9:38:16'),
('5d2fdbb236490', '\0\0\0\0\0\0\0\0\0∞ô¿\0\0»2R∂Z@', '2019-6-26', '9:55:14'),
('5d2fdbb236490', '\0\0\0\0\0\0\0\0\0ê4f¿\0\08hR∂Z@', '2019-6-26', '10:16:54'),
('5d2fdbb236490', '\0\0\0\0\0\0\0\0\0Ô§¿\0\02OS∂Z@', '2019-6-26', '10:17:25'),
('5d2fdbb236490', '\0\0\0\0\0\0\0\0\0¿Ü∂¿\0\0LL∂Z@', '2019-6-30', '10:40:14'),
('5d2d4f317b560', '\0\0\0\0\0\0\0\0\0:¬¿\0\0`HJ∂Z@', '2019-6-31', '16:43:56'),
('5d2d4f317b560', '\0\0\0\0\0\0\0\0\0 Ωg¿\0\045ß∂Z@', '2019-6-31', '18:53:43'),
('5d2d4f317b560', '\0\0\0\0\0\0\0\0\0 Ωg¿\0\045ß∂Z@', '2019-8-1', '11:59:10');

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
  `jam` varchar(25) NOT NULL,
  `keterangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presensiabsen`
--

INSERT INTO `presensiabsen` (`id`, `user_id`, `alasan_absen`, `hari`, `tanggal`, `jam`, `keterangan`) VALUES
(1, '', '', '', '', '', ''),
(2, '5d24456ce69', 'cape', 'Rabu', '17 Jul 2019', '16:23:52', ''),
(3, '5d24456ce6949', 'cape bgt ah', 'Rabu', '17 Jul 2019', '16:45:8', ''),
(4, '5d2fdbb236490', 'mls', 'Kamis', '18 Jul 2019', '9:52:49', ''),
(5, '5d2fdbb236490', 'tidak hadir', 'senin', '22 Jul 2019', '09:30', 'tidak hadir'),
(6, '5d2fdbb236490', 'sakit', 'senin', '22 Jul 2019', '09:35', 'tidak hadir'),
(7, '5d2fdbb236490', 'Sakit', 'Selasa', '23 Jul 2019', '12:27:36', 'tidak hadir'),
(8, '5d2fdbb236490', 'cuti', 'Jumat', '2019-7-26', '15:54:59', 'tidak hadir');

-- --------------------------------------------------------

--
-- Table structure for table `presensihadir`
--

CREATE TABLE `presensihadir` (
  `id` int(11) NOT NULL,
  `user_id` varchar(99) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `img_url` varchar(100) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `keterangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presensihadir`
--

INSERT INTO `presensihadir` (`id`, `user_id`, `nama`, `img_url`, `hari`, `tanggal`, `jam`, `latitude`, `longitude`, `keterangan`) VALUES
(1, '5d24456ce6949', '', 'http://192.168.42.150/staff_Tracking/images/0.jpg', 'Rabu', '17 Jul 201', '13:57', 0, 0, ''),
(2, '5d24456ce6949', '', 'http://192.168.42.150/staff_Tracking/images/1.jpg', 'Rabu', '17 Jul 201', '14:13', 0, 0, ''),
(3, '5d24456ce6949', '', 'http://192.168.42.150/staff_Tracking/images/2.jpg', 'Rabu', '17 Jul 201', '14:22', 0, 0, ''),
(4, '5d24456ce6949', '', 'http://192.168.42.150/staff_Tracking/images/3.jpg', 'Rabu', '17 Jul 2019', '15:1:51', -6.2722265, 106.8486283, ''),
(5, '5d2fdbb236490', '', 'http://192.168.42.150/staff_Tracking/images/4.jpg', 'Kamis', '18 Jul 2019', '9:52:49', -6.2722265, 106.8486283, ''),
(6, '5d2fdbb236490', '', 'http://192.168.42.150/staff_Tracking/images_user/5.jpg', 'Jumat', '19 Jul 2019', '10:7:31', -6.2725946, 106.8471532, 'hadir'),
(7, '5d2fdbb236490', 'Saya', 'http://192.168.42.150/staff_Tracking/images_user/6.jpg', 'Jumat', '19 Jul 2019', '14:15:40', -6.2725946, 106.8471532, 'hadir'),
(8, '5d2fdbb236490', '', 'https://trackingforadmin.000webhostapp.com/images_user/7.jpg', 'Selasa', '23 Jul 2019', '10:47:29', -6.2720968, 106.8484317, 'hadir'),
(9, '5d2fdbb236490', 'Saya', 'https://trackingforadmin.000webhostapp.com/images_user/8.jpg', 'Selasa', '23 Jul 2019', '12:27:36', -6.2720849, 106.8484519, 'hadir'),
(10, '5d2fdbb236490', 'Saya', 'https://trackingforadmin.000webhostapp.com/images_user/9.jpg', 'Jumat', '2019-7-26', '15:54:59', -6.2720882, 106.848444, 'hadir');

-- --------------------------------------------------------

--
-- Table structure for table `userpulang`
--

CREATE TABLE `userpulang` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hari` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `jam` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userpulang`
--

INSERT INTO `userpulang` (`id`, `user_id`, `keterangan`, `hari`, `tanggal`, `jam`) VALUES
(1, '5d2fdbb236490', 'cba', 'selasa', '23 Jul 2019', '09:35'),
(2, '5d2fdbb236490', '', 'Selasa', '23 Jul 2019', '11:51:46'),
(3, '5d2fdbb236490', 'hhh', 'Selasa', '23 Jul 2019', '12:36:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatanusers`
--
ALTER TABLE `kegiatanusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presensiabsen`
--
ALTER TABLE `presensiabsen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presensihadir`
--
ALTER TABLE `presensihadir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userpulang`
--
ALTER TABLE `userpulang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kegiatanusers`
--
ALTER TABLE `kegiatanusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `presensiabsen`
--
ALTER TABLE `presensiabsen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `presensihadir`
--
ALTER TABLE `presensihadir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userpulang`
--
ALTER TABLE `userpulang`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
