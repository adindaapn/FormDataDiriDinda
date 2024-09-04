-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2024 at 04:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodata`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata_contact`
--

CREATE TABLE `biodata_contact` (
  `NIM` bigint(20) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `kelas` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `pesan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biodata_contact`
--

INSERT INTO `biodata_contact` (`NIM`, `nama`, `kelas`, `email`, `jenis_kelamin`, `tanggal_lahir`, `agama`, `pesan`) VALUES
(233140701111001, 'Adin', 'T3c', 'adintap@gmail.com', 'laki-laki', '0000-00-00', 'kristen', 'yang perlu perlu saja'),
(233140701111017, 'Adinda Putri Nurevani', 'T3e', 'adindaadinda1213@gmail.com', 'perempuan', '2005-03-04', 'islam', 'berusaha walaupun hasilnya tidak begitu indah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata_contact`
--
ALTER TABLE `biodata_contact`
  ADD PRIMARY KEY (`NIM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata_contact`
--
ALTER TABLE `biodata_contact`
  MODIFY `NIM` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233140701111039;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
