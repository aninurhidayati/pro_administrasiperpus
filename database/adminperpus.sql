-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 02:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminperpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_dataagt`
--

CREATE TABLE `mst_dataagt` (
  `id_anggota` int(11) NOT NULL,
  `nm_anggota` varchar(100) NOT NULL,
  `status_anggota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_dataagt`
--

INSERT INTO `mst_dataagt` (`id_anggota`, `nm_anggota`, `status_anggota`) VALUES
(1, 'Adit', 'ProPlayer'),
(2, 'Sulthan', 'Coutch'),
(3, 'sul', 'VIP'),
(8, 'asas', 'kemanusiaan');

-- --------------------------------------------------------

--
-- Table structure for table `mst_databuku`
--

CREATE TABLE `mst_databuku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `penerbit_buku` varchar(25) NOT NULL,
  `pengarang_buku` varchar(100) NOT NULL,
  `jumlah_buku` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_databuku`
--

INSERT INTO `mst_databuku` (`id_buku`, `judul_buku`, `penerbit_buku`, `pengarang_buku`, `jumlah_buku`) VALUES
(2, 'siang makan pulang malam', 'desi', 'iyota', 11),
(3, 'siang makan pulang malam', 'desi', 'iyota', 10);

-- --------------------------------------------------------

--
-- Table structure for table `mst_datapinjam`
--

CREATE TABLE `mst_datapinjam` (
  `id_peminjam` int(11) NOT NULL,
  `nm_peminjam` varchar(100) NOT NULL,
  `nm_buku` varchar(100) NOT NULL,
  `tgl_pinjam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_datapinjam`
--

INSERT INTO `mst_datapinjam` (`id_peminjam`, `nm_peminjam`, `nm_buku`, `tgl_pinjam`) VALUES
(1, 'sasa', 'dnew', '2022-04-13'),
(2, 'sese', 'dbyew', '2022-04-05'),
(5, 'tete', 'soob', '2022-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `mst_kategbuku`
--

CREATE TABLE `mst_kategbuku` (
  `id_buku` int(11) NOT NULL,
  `nm_buku` varchar(100) NOT NULL,
  `kt_buku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_kategbuku`
--

INSERT INTO `mst_kategbuku` (`id_buku`, `nm_buku`, `kt_buku`) VALUES
(8, 'j', 'jken'),
(11, 's', 'lt'),
(12, 'as', 'as');

-- --------------------------------------------------------

--
-- Table structure for table `mst_menu`
--

CREATE TABLE `mst_menu` (
  `id_menu` int(11) NOT NULL,
  `nm_menu` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `isActive` enum('0','1','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_menu`
--

INSERT INTO `mst_menu` (`id_menu`, `nm_menu`, `link`, `isActive`) VALUES
(1, 'userLogin', 'mod_userlogin', ''),
(2, 'KategoriBuku', 'mod_katbuku', ''),
(3, 'dataBuku', 'mod_databuku', ''),
(4, 'dataAnggota', 'mod_anggota', ''),
(5, 'dataPeminjam', 'mod_peminjam', '1'),
(6, 'menu', 'mod_menu', '');

-- --------------------------------------------------------

--
-- Table structure for table `mst_userlogin`
--

CREATE TABLE `mst_userlogin` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_active` enum('0','1','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_userlogin`
--

INSERT INTO `mst_userlogin` (`id_user`, `username`, `password`, `is_active`) VALUES
(14, 'aditya', '202cb962ac59075b964b07152d234b70', '1'),
(15, 'sulthan', '202cb962ac59075b964b07152d234b70', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_dataagt`
--
ALTER TABLE `mst_dataagt`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `mst_databuku`
--
ALTER TABLE `mst_databuku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `mst_datapinjam`
--
ALTER TABLE `mst_datapinjam`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- Indexes for table `mst_kategbuku`
--
ALTER TABLE `mst_kategbuku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `mst_menu`
--
ALTER TABLE `mst_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `mst_userlogin`
--
ALTER TABLE `mst_userlogin`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_dataagt`
--
ALTER TABLE `mst_dataagt`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mst_databuku`
--
ALTER TABLE `mst_databuku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mst_datapinjam`
--
ALTER TABLE `mst_datapinjam`
  MODIFY `id_peminjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mst_kategbuku`
--
ALTER TABLE `mst_kategbuku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mst_menu`
--
ALTER TABLE `mst_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mst_userlogin`
--
ALTER TABLE `mst_userlogin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
