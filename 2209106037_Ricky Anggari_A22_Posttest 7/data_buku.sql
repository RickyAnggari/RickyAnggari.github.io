-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 03:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('freya', '$2y$10$86sO9sdIAsJ883eVXrS3ReN4WCo5oUfRApDxRYD6Lh5OVUVutjqAe'),
('Giroud', '$2y$10$t8b3k02RMffMlgxJvfGqPOzsTdsQkYCHQrDQR3kRCez99toimGmBW'),
('Bima', '$2y$10$e4TDEQ0pnZG/U7ZqYF8LXOo33EXIMBQrGh0u0BLfqbnKVpeytOF2W');

-- --------------------------------------------------------

--
-- Table structure for table `toko_buku`
--

CREATE TABLE `toko_buku` (
  `ID_Buku` int(20) NOT NULL,
  `Judul_Buku` varchar(100) NOT NULL,
  `Chapter` int(100) NOT NULL,
  `Harga_Buku` int(100) NOT NULL,
  `Gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `toko_buku`
--

INSERT INTO `toko_buku` (`ID_Buku`, `Judul_Buku`, `Chapter`, `Harga_Buku`, `Gambar`) VALUES
(1123, 'Boku No Hero', 100, 10000, 'Boku no Hero.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `toko_buku`
--
ALTER TABLE `toko_buku`
  ADD PRIMARY KEY (`ID_Buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `toko_buku`
--
ALTER TABLE `toko_buku`
  MODIFY `ID_Buku` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
