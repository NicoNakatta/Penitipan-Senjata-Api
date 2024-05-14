-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 05:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gunsafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_client`
--

CREATE TABLE `tb_client` (
  `id_client` varchar(256) NOT NULL,
  `nama_client` varchar(30) NOT NULL,
  `id_jk` varchar(10) NOT NULL,
  `gambar` mediumblob NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_jk` varchar(10) NOT NULL,
  `jenis_keamanan` varchar(20) NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_client`
--
ALTER TABLE `tb_client`
  ADD PRIMARY KEY (`id_client`),
  ADD KEY `id_jk` (`id_jk`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_jk`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_client`
--
ALTER TABLE `tb_client`
  ADD CONSTRAINT `tb_client_ibfk_1` FOREIGN KEY (`id_jk`) REFERENCES `tb_kategori` (`id_jk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
