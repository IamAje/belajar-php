-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 20, 2025 at 11:10 PM
-- Server version: 8.0.35
-- PHP Version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile_grinding`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_finish`
--

CREATE TABLE `tb_finish` (
  `id_produksi` int NOT NULL,
  `no_batch` varchar(15) COLLATE utf8mb4_bin NOT NULL,
  `nama_tool` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `nama_blank` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `quantity` int NOT NULL,
  `total_ng` int NOT NULL,
  `operator_finish` varchar(25) COLLATE utf8mb4_bin NOT NULL,
  `tgl_finish` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nama_tool`
--

CREATE TABLE `tb_nama_tool` (
  `id_tool` int NOT NULL,
  `nama_tool` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `nama_blank` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `tb_nama_tool`
--

INSERT INTO `tb_nama_tool` (`id_tool`, `nama_tool`, `nama_blank`) VALUES
(1, 'TM-608ZZ1S-B', 'WFF 1.2'),
(2, 'M-6000VV-AC', 'M-6000VV-AC');

-- --------------------------------------------------------

--
-- Table structure for table `tb_schedule`
--

CREATE TABLE `tb_schedule` (
  `id_schedule` int NOT NULL,
  `nama_tool` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `nama_blank` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `no_batch` varchar(15) COLLATE utf8mb4_bin NOT NULL,
  `no_mesin` int NOT NULL,
  `quantity` int NOT NULL,
  `priority` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tb_start`
--

CREATE TABLE `tb_start` (
  `id_produksi` int NOT NULL,
  `no_batch` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `nama_tool` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `nama_blank` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `quantity` int NOT NULL,
  `no_mesin` int NOT NULL,
  `nama_operator` varchar(25) COLLATE utf8mb4_bin NOT NULL,
  `tgl_start` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_nama_tool`
--
ALTER TABLE `tb_nama_tool`
  ADD PRIMARY KEY (`id_tool`);

--
-- Indexes for table `tb_schedule`
--
ALTER TABLE `tb_schedule`
  ADD PRIMARY KEY (`id_schedule`);

--
-- Indexes for table `tb_start`
--
ALTER TABLE `tb_start`
  ADD PRIMARY KEY (`id_produksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_nama_tool`
--
ALTER TABLE `tb_nama_tool`
  MODIFY `id_tool` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_schedule`
--
ALTER TABLE `tb_schedule`
  MODIFY `id_schedule` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_start`
--
ALTER TABLE `tb_start`
  MODIFY `id_produksi` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
