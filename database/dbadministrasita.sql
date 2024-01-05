-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 05:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbadministrasita`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosenpembimbing`
--

CREATE TABLE `dosenpembimbing` (
  `nidDosBing` int(11) NOT NULL,
  `namaDosbing` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dosenpenguji`
--

CREATE TABLE `dosenpenguji` (
  `nidDosUji` int(11) NOT NULL,
  `namaDosUji` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwalseminar`
--

CREATE TABLE `jadwalseminar` (
  `noSeminar` int(11) NOT NULL,
  `tglSeminar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `koordinatorta`
--

CREATE TABLE `koordinatorta` (
  `idKoordinator` int(11) NOT NULL,
  `namaKoor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nimMhsw` int(10) NOT NULL,
  `kodeProdi` int(11) NOT NULL,
  `kodeNilai` int(11) NOT NULL,
  `namaMhsw` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaranta`
--

CREATE TABLE `pendaftaranta` (
  `noDaftar` int(5) NOT NULL,
  `nimMhsw` int(10) NOT NULL,
  `nidDosBing` int(11) NOT NULL,
  `tglDaftar` datetime NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penilaianta`
--

CREATE TABLE `penilaianta` (
  `kodeNilai` int(11) NOT NULL,
  `noSeminar` int(11) NOT NULL,
  `nilaiPembimbing1` float NOT NULL,
  `nilaiPembimbing2` float NOT NULL,
  `nilaiPenguji` float NOT NULL,
  `nilaiKoordinator` float NOT NULL,
  `jumlahNilai` float NOT NULL,
  `mutuNilai` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `kodeProdi` int(11) NOT NULL,
  `namaProdi` varchar(30) NOT NULL,
  `namaFakultas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosenpembimbing`
--
ALTER TABLE `dosenpembimbing`
  ADD PRIMARY KEY (`nidDosBing`);

--
-- Indexes for table `dosenpenguji`
--
ALTER TABLE `dosenpenguji`
  ADD PRIMARY KEY (`nidDosUji`);

--
-- Indexes for table `jadwalseminar`
--
ALTER TABLE `jadwalseminar`
  ADD PRIMARY KEY (`noSeminar`);

--
-- Indexes for table `koordinatorta`
--
ALTER TABLE `koordinatorta`
  ADD PRIMARY KEY (`idKoordinator`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nimMhsw`),
  ADD KEY `kodeProdi` (`kodeProdi`),
  ADD KEY `kodeNilai` (`kodeNilai`);

--
-- Indexes for table `pendaftaranta`
--
ALTER TABLE `pendaftaranta`
  ADD PRIMARY KEY (`noDaftar`),
  ADD KEY `nimMhsw` (`nimMhsw`),
  ADD KEY `nidDosBing` (`nidDosBing`);

--
-- Indexes for table `penilaianta`
--
ALTER TABLE `penilaianta`
  ADD PRIMARY KEY (`kodeNilai`),
  ADD KEY `noSeminar` (`noSeminar`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`kodeProdi`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`kodeProdi`) REFERENCES `prodi` (`kodeProdi`),
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`kodeNilai`) REFERENCES `penilaianta` (`kodeNilai`);

--
-- Constraints for table `pendaftaranta`
--
ALTER TABLE `pendaftaranta`
  ADD CONSTRAINT `pendaftaranta_ibfk_1` FOREIGN KEY (`nimMhsw`) REFERENCES `mahasiswa` (`nimMhsw`),
  ADD CONSTRAINT `pendaftaranta_ibfk_2` FOREIGN KEY (`nidDosBing`) REFERENCES `dosenpembimbing` (`nidDosBing`);

--
-- Constraints for table `penilaianta`
--
ALTER TABLE `penilaianta`
  ADD CONSTRAINT `penilaianta_ibfk_1` FOREIGN KEY (`noSeminar`) REFERENCES `jadwalseminar` (`noSeminar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
