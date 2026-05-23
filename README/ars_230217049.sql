-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2026 at 06:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ars_230217049`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(5) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `spesialis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `spesialis`) VALUES
(3, 'dr. Sinta', 'Jantung'),
(4, 'dr. Agus', 'Jantung'),
(5, 'dr.mila', 'spesialis');

-- --------------------------------------------------------

--
-- Table structure for table `klinik`
--

CREATE TABLE `klinik` (
  `id_klinik` int(5) NOT NULL,
  `nama_klinik` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `klinik`
--

INSERT INTO `klinik` (`id_klinik`, `nama_klinik`) VALUES
(1, 'Klinik Umum'),
(2, 'Poli Jantung');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `no_rm` varchar(15) NOT NULL,
  `nama_pasien` varchar(40) NOT NULL,
  `Tempat_Lahir` varchar(50) NOT NULL,
  `Tgl_Lahir` date NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jenkel` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`no_rm`, `nama_pasien`, `Tempat_Lahir`, `Tgl_Lahir`, `alamat`, `jenkel`, `agama`) VALUES
('049', 'Putri', 'Sukoharjo', '2016-05-29', 'Sukoharjo', 'Perempuan', 'Islam');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `no_reg` int(10) NOT NULL,
  `no_rm` varchar(20) NOT NULL,
  `id_poli` int(3) NOT NULL,
  `id_dokter` int(3) NOT NULL,
  `tgl_pendaftaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_reg`, `no_rm`, `id_poli`, `id_dokter`, `tgl_pendaftaran`) VALUES
(1, '049', 2, 3, '2026-05-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `klinik`
--
ALTER TABLE `klinik`
  ADD PRIMARY KEY (`id_klinik`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`no_rm`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`no_reg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `klinik`
--
ALTER TABLE `klinik`
  MODIFY `id_klinik` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `no_reg` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
