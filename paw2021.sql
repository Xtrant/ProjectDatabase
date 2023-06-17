-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 10:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paw2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `05_artikel`
--

CREATE TABLE `05_artikel` (
  `kode_buku` varchar(25) NOT NULL,
  `nama_buku` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `size` int(11) NOT NULL,
  `ekstensi` varchar(25) NOT NULL,
  `berkas` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `05_artikel`
--

INSERT INTO `05_artikel` (`kode_buku`, `nama_buku`, `title`, `size`, `ekstensi`, `berkas`) VALUES
('A1', 'Dampak Masa Pandemi yang Berpengaruh pada Gangguan Kesehatan Mental Kaum Milenial dalam Menghadapi Bonus Demografi', 'Artikel 1.pdf', 14884, 'pdf', 'Artikel/Artikel 1.pdf'),
('A2', 'Pasien Makin Pintar, Dokter Harus Lebih \"Update\"', 'Artikel 2.pdf', 200409, 'pdf', 'Artikel/Artikel 2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `05_kuota`
--

CREATE TABLE `05_kuota` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT current_timestamp(),
  `nama_dokter` varchar(100) NOT NULL,
  `kuota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `05_kuota`
--

INSERT INTO `05_kuota` (`id`, `tanggal`, `nama_dokter`, `kuota`) VALUES
(7, '2023-05-02', 'Adi', 1),
(8, '2023-05-02', 'Budi', 0),
(9, '2023-05-02', 'Cecep', 0);

-- --------------------------------------------------------

--
-- Table structure for table `05_login`
--

CREATE TABLE `05_login` (
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `stats` varchar(100) DEFAULT NULL,
  `nama_lengkap` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `keluhan` varchar(100) DEFAULT NULL,
  `dokter` varchar(100) DEFAULT NULL,
  `rating` int(1) DEFAULT NULL,
  `pesan` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `05_login`
--

INSERT INTO `05_login` (`username`, `pass`, `stats`, `nama_lengkap`, `jenis_kelamin`, `alamat`, `keluhan`, `dokter`, `rating`, `pesan`) VALUES
('buana', '123', 'admin', 'admin', '', '', NULL, NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `05_artikel`
--
ALTER TABLE `05_artikel`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `05_kuota`
--
ALTER TABLE `05_kuota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `05_login`
--
ALTER TABLE `05_login`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `05_kuota`
--
ALTER TABLE `05_kuota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
