-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2025 at 12:46 AM
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
-- Database: `db_alumni_stella`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `Id_Alumni` int(11) NOT NULL,
  `Nama_Lengkap` varchar(100) NOT NULL,
  `Tahun_Lulus` year(4) NOT NULL,
  `Jurusan` varchar(50) NOT NULL,
  `Pekerjaan_Saat_Ini` varchar(100) NOT NULL,
  `Nomor_Telepon` varchar(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`Id_Alumni`, `Nama_Lengkap`, `Tahun_Lulus`, `Jurusan`, `Pekerjaan_Saat_Ini`, `Nomor_Telepon`, `Email`, `Alamat`) VALUES
(1, 'Rasyid', '2029', 'TKJ', 'Freelance', '0808880', 'rasyid@gmail.com', 'Pringsewu'),
(2, 'Wahyu', '2029', 'TKJ', 'Freelance', '08', 'rasyid@gmail.com', 'VVV'),
(3, 'Wahyu', '2029', 'TKJ', 'Freelance', '08', 'rasyid@gmail.com', 'vvv'),
(4, 'Rasyid', '2029', 'TKJ', 'Freelance', '0808880', 'rasyid@gmail.com', 'Lampung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`Id_Alumni`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `Id_Alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
