-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 11:54 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ai_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(255) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nim`, `password`) VALUES
(1, 'g64190054', 'Faisalia2111'),
(2, 'g64190032', 'ikhsan'),
(3, 'g64190030', 'ezra');

-- --------------------------------------------------------

--
-- Table structure for table `data_mhs`
--

CREATE TABLE `data_mhs` (
  `nim` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `departemen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_survey`
--

CREATE TABLE `data_survey` (
  `nim` varchar(50) NOT NULL,
  `us_school` enum('0','1') NOT NULL,
  `toefl` enum('0','1') NOT NULL,
  `transcript` enum('0','1') NOT NULL,
  `prior_grad` enum('0','1') NOT NULL,
  `grad_gpr` enum('0','1') NOT NULL,
  `gpr_60` enum('0','1','2','3') NOT NULL,
  `gre` enum('0','1','2') NOT NULL,
  `gre_verb` enum('0','1') NOT NULL,
  `honour_std` enum('0','1') NOT NULL,
  `honour_gv` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `data_mhs`
--
ALTER TABLE `data_mhs`
  ADD KEY `nim` (`nim`),
  ADD KEY `nama_lengkap` (`nama_lengkap`);

--
-- Indexes for table `data_survey`
--
ALTER TABLE `data_survey`
  ADD KEY `nim_survey` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_mhs`
--
ALTER TABLE `data_mhs`
  ADD CONSTRAINT `nim_mhs` FOREIGN KEY (`nim`) REFERENCES `akun` (`nim`);

--
-- Constraints for table `data_survey`
--
ALTER TABLE `data_survey`
  ADD CONSTRAINT `nim_survey` FOREIGN KEY (`nim`) REFERENCES `akun` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
