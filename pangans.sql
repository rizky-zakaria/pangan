-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 11:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pangans`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bulan`
--

CREATE TABLE `tb_bulan` (
  `id` int(11) NOT NULL,
  `bulan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bulan`
--

INSERT INTO `tb_bulan` (`id`, `bulan`) VALUES
(4, 'Januari-April'),
(5, 'Mei-Agustus'),
(6, 'September-Desember');

-- --------------------------------------------------------

--
-- Table structure for table `tb_input`
--

CREATE TABLE `tb_input` (
  `id` int(11) NOT NULL,
  `suhu` float NOT NULL,
  `kelembapan` float NOT NULL,
  `curah_hujan` float NOT NULL,
  `penyinaran_matahari` float NOT NULL,
  `luas_panen` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `id_kabupaten` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_input`
--

INSERT INTO `tb_input` (`id`, `suhu`, `kelembapan`, `curah_hujan`, `penyinaran_matahari`, `luas_panen`, `id_bulan`, `id_tahun`, `id_kabupaten`) VALUES
(2, 26.8, 84.5, 116.25, 44.95, 62336, 4, 4, 4),
(3, 26.9, 83, 168, 47.5, 54273, 5, 4, 4),
(4, 27.225, 80.25, 159.75, 58.375, 18934, 6, 4, 4),
(5, 27.25, 83.45, 140.675, 52.8, 69405, 4, 5, 4),
(6, 26.825, 84.575, 203.75, 56.075, 46850, 5, 5, 4),
(7, 27.325, 79.925, 128.8, 65.4, 24168, 6, 5, 4),
(8, 25.975, 79.5, 98.125, 66.75, 67107, 4, 6, 4),
(9, 26.775, 81.75, 86.7, 65.8, 56734, 5, 6, 4),
(10, 27.3, 78, 166.25, 74.275, 24975, 6, 6, 4),
(11, 26.175, 79.1, 56.5, 68.75, 63443, 4, 7, 4),
(12, 26.775, 77.8, 182.25, 76.6, 46873, 5, 7, 4),
(13, 27.45, 71.175, 84.8, 79.875, 18815, 6, 7, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kabupaten`
--

CREATE TABLE `tb_kabupaten` (
  `id` int(11) NOT NULL,
  `kabupaten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kabupaten`
--

INSERT INTO `tb_kabupaten` (`id`, `kabupaten`) VALUES
(4, 'Kabupaten Gorontalo'),
(5, 'Kabupaten Gorontalo Utara'),
(6, 'Kabupaten Boalemo'),
(7, 'Kabupaten Bone Bolango'),
(8, 'Kabupaten Pohuwato');

-- --------------------------------------------------------

--
-- Table structure for table `tb_output`
--

CREATE TABLE `tb_output` (
  `id` int(11) NOT NULL,
  `id_input` int(11) NOT NULL,
  `produksi` varchar(255) NOT NULL,
  `produktivitas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_output`
--

INSERT INTO `tb_output` (`id`, `id_input`, `produksi`, `produktivitas`) VALUES
(4, 2, '313922', 50.36),
(5, 3, '252262', 46.48),
(6, 4, '78570', 41.5),
(7, 5, '360982', 52.01),
(8, 6, '210975', 45.03),
(9, 7, '97137', 40.19),
(10, 8, '320302', 47.73),
(11, 9, '288372', 50.83),
(12, 10, '111106', 44.49),
(13, 11, '334005', 52.65),
(14, 12, '233212', 49.75),
(15, 13, '76295', 40.55);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tahun`
--

CREATE TABLE `tb_tahun` (
  `id` int(11) NOT NULL,
  `tahun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tahun`
--

INSERT INTO `tb_tahun` (`id`, `tahun`) VALUES
(4, '2012'),
(5, '2013'),
(6, '2014'),
(7, '2015');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 1),
(2, 'user', '202cb962ac59075b964b07152d234b70', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bulan`
--
ALTER TABLE `tb_bulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_input`
--
ALTER TABLE `tb_input`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_tahun` (`id_tahun`),
  ADD KEY `tb_bulan` (`id_bulan`),
  ADD KEY `tb_kabupaten` (`id_kabupaten`);

--
-- Indexes for table `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_output`
--
ALTER TABLE `tb_output`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_input` (`id_input`);

--
-- Indexes for table `tb_tahun`
--
ALTER TABLE `tb_tahun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bulan`
--
ALTER TABLE `tb_bulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_input`
--
ALTER TABLE `tb_input`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_output`
--
ALTER TABLE `tb_output`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_tahun`
--
ALTER TABLE `tb_tahun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_input`
--
ALTER TABLE `tb_input`
  ADD CONSTRAINT `tb_bulan` FOREIGN KEY (`id_bulan`) REFERENCES `tb_bulan` (`id`),
  ADD CONSTRAINT `tb_kabupaten` FOREIGN KEY (`id_kabupaten`) REFERENCES `tb_kabupaten` (`id`),
  ADD CONSTRAINT `tb_tahun` FOREIGN KEY (`id_tahun`) REFERENCES `tb_tahun` (`id`);

--
-- Constraints for table `tb_output`
--
ALTER TABLE `tb_output`
  ADD CONSTRAINT `tb_input` FOREIGN KEY (`id_input`) REFERENCES `tb_input` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
