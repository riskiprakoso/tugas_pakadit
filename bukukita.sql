-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 01:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukukita`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailbuku`
--

CREATE TABLE `detailbuku` (
  `No` int(11) NOT NULL,
  `Judul_Buku` varchar(50) NOT NULL,
  `Penerbit_Buku` varchar(50) NOT NULL,
  `Genre_Buku` varchar(50) NOT NULL,
  `Harga_Buku` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detailbuku`
--

INSERT INTO `detailbuku` (`No`, `Judul_Buku`, `Penerbit_Buku`, `Genre_Buku`, `Harga_Buku`) VALUES
(1, 'Cerdas Cermat', 'Erlangga', 'Buku Cerita', '20000'),
(2, 'Kreatif', 'Erlamba', 'Paket Belajar', '10000'),
(12, 'kka', 'jaj', 'Komik', '12000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailbuku`
--
ALTER TABLE `detailbuku`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailbuku`
--
ALTER TABLE `detailbuku`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
