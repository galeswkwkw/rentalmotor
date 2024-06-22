-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 04, 2023 at 01:49 PM
-- Server version: 5.7.40
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_motor`
--

-- --------------------------------------------------------

--
-- Table structure for table `diskon`
--

DROP TABLE IF EXISTS `diskon`;
CREATE TABLE IF NOT EXISTS `diskon` (
  `id_diskon` int(11) NOT NULL AUTO_INCREMENT,
  `gambar_diskon` varchar(255) NOT NULL,
  `deskripsi_diskon` mediumtext NOT NULL,
  `nilai_diskon` int(11) NOT NULL,
  `status_diskon` int(11) NOT NULL,
  PRIMARY KEY (`id_diskon`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diskon`
--

INSERT INTO `diskon` (`id_diskon`, `gambar_diskon`, `deskripsi_diskon`, `nilai_diskon`, `status_diskon`) VALUES
(1, 'f59bc4e9863f8d3e26af01aac9ba6496.jpg', 'Jelajahi Kota dengan Harga Terbaik! Nikmati Diskon Rental Motor Sekarang!', 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

DROP TABLE IF EXISTS `galeri`;
CREATE TABLE IF NOT EXISTS `galeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `gambar`) VALUES
(9, '0f8d675c859d7a61ae204c4476d1c85e.JPG'),
(10, '85fc51845960a6f115cee70a0e56c6d7.JPG'),
(11, 'd769f631e7cda172d490adeb7131978b.JPG'),
(12, 'ad2c5b295839301d95c12b3bc54f0e69.JPG'),
(13, 'e56f9837fa27234abaeffded1b39b63f.JPG'),
(14, 'bafca7d409fb103e784091c48eedab87.JPG'),
(15, '7d5505786651acdcabf8010cff3dd20c.JPG'),
(16, '11f3baf734b49483c5d4ee9b49442d6f.JPG'),
(17, '03e89c013861478d99b4a1209231d656.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

DROP TABLE IF EXISTS `motor`;
CREATE TABLE IF NOT EXISTS `motor` (
  `id_motor` int(11) NOT NULL AUTO_INCREMENT,
  `kode_type` varchar(120) NOT NULL,
  `merek` varchar(120) NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `status` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `gambar_kondisi` varchar(255) NOT NULL,
  `riwayat_servis` text NOT NULL,
  `harga` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  PRIMARY KEY (`id_motor`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`id_motor`, `kode_type`, `merek`, `no_plat`, `warna`, `tahun`, `status`, `gambar`, `gambar_kondisi`, `riwayat_servis`, `harga`, `denda`) VALUES
(23, 'Mat-110cc', 'Honda Beat street', 'H 8238 JK', 'Hitam ', '2019', '1', '59987-new-honda-beat-street-esp-.png', '3187aa43d450a67432b73b39d7f77f94.jpg', 'Sehat', 70000, 50000),
(24, 'Mat-125cc', 'Honda Vario 125 new ESP', 'H 5421 DC', 'Putih Hitam', '2017', '3', 'Honda-VARIO-125-eSP2.jpg', '', 'Sehat', 70000, 50000),
(27, 'Mat-110cc', 'Honda Beat CBS', 'H 7658 HG', 'Hitam', '2018', '1', '8b0abd37f106ccdcf71cc0eb7c4cc759.jpg', 'b6a38bb818a851b1ffaa069a7c15d60f.JPG', 'Pecah bagian spakbor depan', 65000, 50000),
(28, 'Mat-110cc', 'Honda Beat FI', 'H 4316 GV', 'Merah Hitam', '2016', '1', '1947084fa8e12ff00ae93484b7f65dc7.jpg', 'cedb6dd4e3b0f9d8ccfcb2ce09241d9b.jpg', 'Sehat', 65000, 50000),
(29, 'Mat-110cc', 'Honda Vario 110 led', 'H 5485 Q', 'Hitam', '2015', '3', '1ea45dfdf4b8f47e535efc6dea681865.jpg', '85ec5c907b2ca98ec8cf32f0821b663b.jpg', 'Sehat', 65000, 50000),
(30, 'Mat-125cc', 'Honda Vario FI', 'H 3658 I', 'Putih', '2019', '1', 'c8c9c1f1a44ed817defc9f6331bf2243.jpg', '365e8ef37fd2564a853490788e7bf5a7.jpg', 'Sehat', 70000, 50000),
(31, 'Mat-110cc', 'Honda Scoopy CBS ', 'H 5564 G', 'Hitam', '2018', '1', 'ac0e7e78e7f558297f84073af4055532.jpg', '93127629bbcde529f282e8f9cf062070.jpg', 'Sehat', 70000, 50000),
(32, 'Mat-110cc', 'Honda Scoopy CBS ISS', 'H 3323 B', 'Biru Putih', '2018', '1', '6c341f76b259634b830d1a013ae71083.jpg', '933a2e8a66e8338083a4d0f616173e85.jpg', 'Sehat', 65000, 50000),
(33, 'Mat-110cc', 'Honda Scoopy CBS ISS', 'H 7677 G', 'Biru Hitam', '2018', '1', 'f78fc342a86feda6350e7caf1ae90c22.jpg', 'bcbeecc555c99a5833d5df70d11fe33c.jpg', 'Sehat', 70000, 50000),
(34, 'Mat-110cc', 'Yamaha Mio Gt ', 'H 7873 A', 'Merah Putih Hitam', '2016', '1', 'dda804effab631d15e3b36be28f9daff.jpg', 'cc4dea0560a1b30785d43a8e206804b2.jpg', 'Sehat', 60000, 50000),
(35, 'Mat-125cc', 'Yamaha Mio Z', 'H 6721 S', 'Hitam', '2018', '1', '3b33183c6cc1f3a0930e8604f7bd316e.jpg', '0ad87603775fc6f6c377b0e1ce19ed0e.jpg', 'Sehat', 60000, 50000),
(36, 'Mat-110cc', 'Honda Beat Karburator ', 'H 4325 B', 'Merah Hitam', '2008', '1', 'e0cd553a86049bde0f5cd79a70e35f57.jpg', '3f4d21bb1c6ca88341c2da22a3d809b1.jpg', 'Sehat', 60000, 50000),
(37, 'Mat-110cc', 'Yamaha Mio Karburator', 'H 9862 F', 'Merah Hitam', '2004', '3', 'ca3e9e9b8fe46125210cb0e2e0da0e84.jpg', 'f9e75a7d8476f689c5b0a2b70ab4b230.jpg', 'Sehat', 50000, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `paket_sewa`
--

DROP TABLE IF EXISTS `paket_sewa`;
CREATE TABLE IF NOT EXISTS `paket_sewa` (
  `id_paket` int(11) NOT NULL AUTO_INCREMENT,
  `nama_paket` varchar(25) NOT NULL,
  `harga_paket` int(11) NOT NULL,
  `deskripsi_paket` mediumtext NOT NULL,
  PRIMARY KEY (`id_paket`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket_sewa`
--

INSERT INTO `paket_sewa` (`id_paket`, `nama_paket`, `harga_paket`, `deskripsi_paket`) VALUES
(5, 'Duo Plus', 20000, 'Dua helem + dua jas hujan'),
(6, 'Solo', 10000, 'Satu helem + satu jas hujan'),
(7, 'Duo', 15000, 'Dua helem + tanpa jas hujan');

-- --------------------------------------------------------

--
-- Table structure for table `rekening_pembayaran`
--

DROP TABLE IF EXISTS `rekening_pembayaran`;
CREATE TABLE IF NOT EXISTS `rekening_pembayaran` (
  `id_rekening` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_rekening` varchar(255) NOT NULL,
  `nama_rekening` varchar(255) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  PRIMARY KEY (`id_rekening`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekening_pembayaran`
--

INSERT INTO `rekening_pembayaran` (`id_rekening`, `nomor_rekening`, `nama_rekening`, `nama_bank`) VALUES
(1, '90925-87656-4422-4443', 'Tomi Kristian Agung Sihaloho', 'BRI');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_rental` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pelanggan` varchar(50) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `id_paket` int(11) DEFAULT NULL,
  `foto_sim` varchar(255) NOT NULL,
  `id_motor` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `jam_pengambilan` varchar(255) NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `tanggal_pengambilan` datetime DEFAULT NULL,
  `tanggal_pengembalian` datetime DEFAULT NULL,
  `tempat_pengambilan` varchar(255) DEFAULT NULL,
  `tempat_mengembalikan` varchar(255) DEFAULT NULL,
  `waktu_dikembalikan` datetime DEFAULT NULL,
  `terlambat` int(11) NOT NULL,
  `total_denda` int(11) NOT NULL,
  `total_diskon` int(11) NOT NULL,
  `id_rekening` int(11) DEFAULT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `status_rental` int(11) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paket` varchar(50) NOT NULL,
  PRIMARY KEY (`id_rental`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_rental`, `nama_pelanggan`, `nik`, `ktp`, `no_telepon`, `id_paket`, `foto_sim`, `id_motor`, `tanggal_rental`, `jam_pengambilan`, `tanggal_kembali`, `tanggal_pengambilan`, `tanggal_pengembalian`, `tempat_pengambilan`, `tempat_mengembalikan`, `waktu_dikembalikan`, `terlambat`, `total_denda`, `total_diskon`, `id_rekening`, `bukti_pembayaran`, `status_rental`, `date_create`, `paket`) VALUES
(14, 'Agus', '2327656545654323', '', '082281697612', 6, 'b95315b23089e86af4f618011b848a0a.jpeg', 23, '2023-08-26', '07:23', '2023-08-30', '2023-08-26 06:27:17', '2023-08-25 06:27:17', NULL, NULL, '2023-08-25 06:27:48', 0, 0, 0, NULL, NULL, 3, '2023-08-24 23:26:39', ''),
(31, 'Ardi', '2327656545653847', '', '082281698733', 6, 'cdc391c85f69fa1007b8b6491beeb836.jpeg', 24, '2023-09-20', '08:50', '2023-09-23', '2023-09-20 21:07:08', '2023-09-23 21:07:08', NULL, NULL, '2023-09-17 21:07:35', 0, 0, 0, NULL, NULL, 3, '2023-09-17 14:03:43', ''),
(32, 'Erga Saputra', '2327656545654311', '', '082281697635', 7, '1d57d30b204f03af495594bf7b57b7f5.jpeg', 32, '2023-09-24', '08:11', '2023-09-27', '2023-09-24 09:58:19', '2023-09-18 09:58:19', NULL, NULL, '0000-00-00 00:00:00', 0, 0, 20, 1, '5c2299f5e3da1b225dd155b9f54a8dc7.jpg', 3, '2023-09-17 14:17:05', ''),
(33, 'Bagas', '2327656545654584', '', '082276563798', 5, '17b5815853293f2e4054e69ebc38ed74.jpeg', 32, '2023-09-27', '07:00', '2023-10-01', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, 0, '2023-09-18 02:55:14', ''),
(34, 'Ardo', '3423048368085334', '', '08228169763', 6, '9081f7df571da220fd59a555bbdaf688.jpeg', 37, '2023-09-19', '07:00', '2023-10-07', '2023-09-19 09:59:49', '2023-09-18 09:59:49', NULL, NULL, NULL, 0, 0, 0, 1, 'eac21d2b298e40d5f21afade0bc9d8d7.jpg', 1, '2023-09-18 02:57:27', ''),
(36, 'Ahmad', '2327656545654322', '', '082276563798', 5, 'f76ec9b4b4c1e83cda738b4c29a9c343.jpg', 24, '2023-09-25', '06:00', '2023-09-29', '2023-09-25 13:03:39', '2023-09-29 13:03:39', NULL, NULL, '0000-00-00 00:00:00', 0, 0, 0, 1, '37ca7daef9376a048f9c62d0c93f0187.jpg', 3, '2023-09-18 05:58:42', ''),
(37, 'Agus', '2327656545654323', '', '082281676543', 5, '10b5de4321bb9d48a201167b093231de.jpg', 27, '2023-09-09', '13:15', '2023-09-15', '2023-09-09 13:13:50', '2023-09-18 13:13:50', NULL, NULL, '2023-09-18 13:15:01', 4, 200000, 0, NULL, NULL, 3, '2023-09-18 06:13:27', ''),
(38, 'Bagus', '2327656545233535', '5f5d025a2e2ffab7fb79300e5d362d17.jpg', '08228167623', 6, '66589c319b5e586d4d34121d0db1d8e9.jpg', 27, '2023-09-22', '06:52', '2023-09-26', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', 0, 0, 0, NULL, NULL, 3, '2023-09-21 05:52:18', '');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `kode_type` varchar(10) NOT NULL,
  `nama_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `kode_type`, `nama_type`) VALUES
(1, 'Mat-110cc', 'Matic 110cc'),
(2, 'Mat-150cc', 'Matic 150cc'),
(3, 'Mat-125cc', 'Matic 125cc'),
(4, 'Mat-120cc', 'Matik 120cc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `alamat_email` varchar(255) NOT NULL,
  `nomor_telp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Admin','Pelanggan') NOT NULL,
  `date_join` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `nama_depan`, `nama_belakang`, `username`, `alamat_email`, `nomor_telp`, `password`, `role`, `date_join`) VALUES
(2, 'Kristiawan', '-', 'Kristiawan', 'kristiawan@gmail.com', '082281697612', '$2y$10$5Yjwv2L6YqnCPUmEZwzLCuSLec1WtTP7LCDumtUpgHRXxHtPqDJ9W', 'Admin', '2023-08-02 06:42:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
