-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8111
-- Generation Time: Feb 22, 2024 at 07:35 PM
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
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(150) DEFAULT NULL,
  `Jenis_kelamin` varchar(20) DEFAULT NULL,
  `Alamat` text DEFAULT NULL,
  `Mata_kuliah` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`ID`, `Nama`, `Jenis_kelamin`, `Alamat`, `Mata_kuliah`) VALUES
(1, 'Metro Panjaitan', 'Laki-laki', 'Jl.Kenangan No.34', 'Matematika,Kimia,Bahasa Inggris'),
(2, 'Metro Sinambela 2', 'Perempuan', 'Jl.Keabadian No.22', 'Arsitektur Komputer,Grafika Komputer'),
(3, 'Aditya Tondang', 'Laki-laki', 'Jl.Perindustrian No 009', 'Machine learning,Data Science,Computer Vision,Artificial Intelligence'),
(4, 'Adityatng', 'Laki-laki', 'Jl Kolonel Sutomo 032', 'Kriptografi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
