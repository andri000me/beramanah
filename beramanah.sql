-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 25, 2018 at 05:18 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beramanah`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(5) NOT NULL,
  `nama_banner` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `foto_banner` varchar(50) NOT NULL,
  `link_banner` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `nama_banner`, `tempat`, `foto_banner`, `link_banner`) VALUES
(1, 'HOT DEAL', '1', 'banner13.jpg', 'link'),
(2, 'KOLEKSI TERBARU', '2', 'banner11.jpg', 'link'),
(3, 'KOLESKI TERMURAH', '3', 'banner12.jpg', 'link'),
(4, 'KOLEKSI TERFAVORIT', '4', 'banner15.jpg', 'LINK');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(5) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `id_kategori_brg` varchar(5) NOT NULL,
  `deskripsi_barang` varchar(800) NOT NULL,
  `foto_barang` varchar(400) NOT NULL,
  `stok` varchar(6) NOT NULL,
  `harga_modal` varchar(9) NOT NULL,
  `harga_jual` varchar(9) NOT NULL,
  `tgl_barang` datetime NOT NULL,
  `status` varchar(3) NOT NULL,
  `liked` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_user`, `nama_barang`, `id_kategori_brg`, `deskripsi_barang`, `foto_barang`, `stok`, `harga_modal`, `harga_jual`, `tgl_barang`, `status`, `liked`) VALUES
(1, '1', 'Jam Tangan Swis Army', '3', 'Jam Tangan Army', 'Jam-tangan-Swiss-Army-SA-5038MB-Coklat-1.jpg', '5', '1200000', '1300000', '2018-04-24 13:30:19', '1', 3),
(2, '1', 'Tas Pollo', '3', 'Tas Pollo', '76298_d1e2dbe2-eb1f-11e4-a52f-eb2e87772fba.jpg', '5', '300000', '350000', '2018-04-24 10:29:16', '1', 6),
(3, '1', 'Jaket Parka ', '3', 'Jaket Parka', '634409_454cf808-2bdd-4d68-a373-3dc3c8484ec9.jpg', '30', '2300000', '2500000', '2018-04-24 11:38:14', '0', 30),
(4, '1', 'Xiaomi 5A', '4', 'Jual Murah', 'xiaomi-redmi-note-5a-gold_4_3.jpg', '30', '1000000', '1200000', '2018-04-24 11:14:12', '1', 37),
(5, '1', 'Xiaomi Band 2', '4', 'Jam Tangan Kesehatan', '1510292015098740751.JPG', '40', '300000', '340000', '2018-04-24 06:28:15', '1', 20),
(6, '1', 'Laptop Thinkpad T410', '4', 'Laptop', 'b57267eb44b89374366cf9aca34b.jpeg', '3', '2500000', '2650000', '2018-04-24 20:17:23', '1', 24),
(7, '1', 'TAS Cantik', '3', 'Tas Wanita Cantik', 'product07.jpg', '40', '450000', '500000', '2018-04-25 04:18:12', '1', 55);

-- --------------------------------------------------------

--
-- Table structure for table `Kategori_barang`
--

CREATE TABLE `Kategori_barang` (
  `id_kategori_brg` int(5) NOT NULL,
  `nama_kategori_brg` varchar(30) NOT NULL,
  `urutan` varchar(5) NOT NULL,
  `Deskripsi_kategori_brg` varchar(300) NOT NULL,
  `mode` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Kategori_barang`
--

INSERT INTO `Kategori_barang` (`id_kategori_brg`, `nama_kategori_brg`, `urutan`, `Deskripsi_kategori_brg`, `mode`) VALUES
(1, 'PERAWATAN DAN KECANTIKAN', '1', 'perawatan', '0'),
(2, 'KESEHATAN', '2', 'kesehatan', '0'),
(3, 'FASHION', '3', 'Deskripsi', '1'),
(4, 'Computer & Phone', '4', 'Computer', '1'),
(5, 'ELEKTRONIK', '5', 'Elektronik', '0'),
(6, 'KAMERA', '6', 'kamera', '0'),
(7, 'HOBBY & KOLEKSI', '7', 'HOBBY', '0'),
(8, 'OLAHRAGA', '8', 'olahraga', '0');

-- --------------------------------------------------------

--
-- Table structure for table `lapak`
--

CREATE TABLE `lapak` (
  `id_lapak` int(5) NOT NULL,
  `nama_lapak` varchar(30) NOT NULL,
  `deskripsi_lapak` text NOT NULL,
  `foto_lapak` varchar(300) NOT NULL,
  `banner_lapak` varchar(300) NOT NULL,
  `tgl_lapak` date NOT NULL,
  `rating` varchar(6) NOT NULL,
  `status` int(5) NOT NULL,
  `id_user` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Slider`
--

CREATE TABLE `Slider` (
  `id_slider` int(5) NOT NULL,
  `judul_slider` varchar(50) NOT NULL,
  `foto_slider` varchar(200) NOT NULL,
  `urutan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id_user` int(5) NOT NULL,
  `username` varchar(24) NOT NULL,
  `nama_user` varchar(24) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `foto_user` varchar(200) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `Kategori_barang`
--
ALTER TABLE `Kategori_barang`
  ADD PRIMARY KEY (`id_kategori_brg`);

--
-- Indexes for table `lapak`
--
ALTER TABLE `lapak`
  ADD PRIMARY KEY (`id_lapak`);

--
-- Indexes for table `Slider`
--
ALTER TABLE `Slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Kategori_barang`
--
ALTER TABLE `Kategori_barang`
  MODIFY `id_kategori_brg` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lapak`
--
ALTER TABLE `lapak`
  MODIFY `id_lapak` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Slider`
--
ALTER TABLE `Slider`
  MODIFY `id_slider` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
