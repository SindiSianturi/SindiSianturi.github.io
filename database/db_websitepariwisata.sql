-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2024 at 10:41 AM
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
-- Database: `db_websitepariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_form`
--

CREATE TABLE `data_form` (
  `id_form` int(4) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Subjek` varchar(50) NOT NULL,
  `Pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_form`
--

INSERT INTO `data_form` (`id_form`, `Nama`, `Email`, `Subjek`, `Pesan`) VALUES
(17, 'sindi', 'sindi@gmail.com', 'yes', 'good'),
(18, 'Claudia', 'claudia@gmail.com', 'tes', 'oke');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `id_admin` int(4) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_admin`
--

INSERT INTO `tabel_admin` (`id_admin`, `nama_admin`, `password`) VALUES
(31, 'sindi', '$2y$10$e4vPrVCXD8zFTcL3dwvQ4ujrXEKt/OtcZ20sON9wLjZV4HofKlvQ6'),
(33, 'Claudia', '$2y$10$8rWRUrq4896y7Knhru4v3e3p55wr4SxiicAXU0EpQqyoUMVQGVyBu');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_objek_wisata`
--

CREATE TABLE `tabel_objek_wisata` (
  `id_wisata` int(4) NOT NULL,
  `nama_wisata` varchar(50) NOT NULL,
  `letak` varchar(50) NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `jam_operasional` varchar(20) NOT NULL,
  `gambar_tour` varchar(100) NOT NULL,
  `gambar_detail` varchar(100) NOT NULL,
  `gambar_360` varchar(100) NOT NULL,
  `qrcode` varchar(100) NOT NULL,
  `deskripsi` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_objek_wisata`
--

INSERT INTO `tabel_objek_wisata` (`id_wisata`, `nama_wisata`, `letak`, `harga_tiket`, `jam_operasional`, `gambar_tour`, `gambar_detail`, `gambar_360`, `qrcode`, `deskripsi`) VALUES
(33, 'The Le Hu Garden', 'Jln Pendidikan, Deli Tua Barat, Kecamatan Deli Tua', 20000, '09.00 - 18.00', 'tour the.jpg', 'detail the.png', '360 the.jpeg', 'qr the.png', 'The Le Hu Garden adalah destinasi wisata yang cocok untuk Anda yang ingin melepas penat dan menikmati suasana alam yang asri. Dengan harga tiket yang terjangkau dan fasilitas yang cukup lengkap, tempat ini menjadi pilihan yang tepat untuk menghabiskan waktu bersama keluarga atau teman.'),
(34, 'Central Park Zoo', 'Jln Simalingkar, Medan', 50000, '09.00 - 15.00', 'tour park.jpg', 'detail park.jpg', '360 park.jpg', 'qr park.png', 'Central Park Zoo dapat menjadi lokasi liburan menarik bagi keluarga. Nuansa alam akan langsung terasa begitu kita memasuki gerbang utamanya. Di gerbang masuk, kita akan disambut dengan terowongan bernuansa bebatuan. Kemudian berlanjut dengan atap jaring dan tanaman rambat yang unik.'),
(35, 'Danau Toba', 'Samosir, Sumatera Utara', 10000, '24 Jam', 'detail dt.jpg', 'tour dt.jpg', '360 dt.jpeg', 'qr dt.png', 'Danau toba menawarkan keindahan alam yang menakjubkan, seperti Pulau Samosir, air terjun Sipiso-piso, dan berbagai aktivitas air.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_form`
--
ALTER TABLE `data_form`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tabel_objek_wisata`
--
ALTER TABLE `tabel_objek_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_form`
--
ALTER TABLE `data_form`
  MODIFY `id_form` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  MODIFY `id_admin` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tabel_objek_wisata`
--
ALTER TABLE `tabel_objek_wisata`
  MODIFY `id_wisata` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
