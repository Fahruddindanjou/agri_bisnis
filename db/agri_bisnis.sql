-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 12:12 PM
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
-- Database: `agri_bisnis`
--

-- --------------------------------------------------------

--
-- Table structure for table `categori_main_berita`
--

CREATE TABLE `categori_main_berita` (
  `id` int(11) NOT NULL,
  `kd_main_berita` varchar(15) NOT NULL,
  `nm_main_berita` varchar(20) NOT NULL,
  `gambar_main_berita` mediumblob NOT NULL,
  `kd_informasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_main_berita`
--

CREATE TABLE `detail_main_berita` (
  `id` int(11) NOT NULL,
  `kd_detail_main_berita` varchar(15) NOT NULL,
  `nm_detail_main_berita` varchar(20) NOT NULL,
  `judul_berita` text NOT NULL,
  `tanggal_berita` date NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar_berita` mediumblob NOT NULL,
  `youtube` text NOT NULL,
  `url` text NOT NULL,
  `kd_main_berita` varchar(15) NOT NULL,
  `kd_menu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kd_produk` varchar(15) NOT NULL,
  `nm_menu` varchar(20) NOT NULL,
  `harga_produk` varchar(15) NOT NULL,
  `lokasi` text NOT NULL,
  `gambar_produk` mediumblob NOT NULL,
  `rating_produk` int(11) NOT NULL,
  `terjual` int(11) NOT NULL,
  `kondisi_produk` varchar(15) NOT NULL,
  `keterangan_produk` text NOT NULL,
  `kd_kategori_produk` varchar(15) NOT NULL,
  `kd_menu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk_best_seller`
--

CREATE TABLE `produk_best_seller` (
  `id` int(11) NOT NULL,
  `kd_produk` varchar(15) NOT NULL,
  `nm_best_seller` varchar(20) NOT NULL,
  `gambar_produk` mediumblob NOT NULL,
  `rating_produk` int(11) NOT NULL,
  `kd_kategori_produk` varchar(15) NOT NULL,
  `kd_seller` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk_kategori`
--

CREATE TABLE `produk_kategori` (
  `id` int(11) NOT NULL,
  `kd_kategori_produk` varchar(15) NOT NULL,
  `nm_kategori_produk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id` int(11) NOT NULL,
  `kd_organisasi` varchar(15) NOT NULL,
  `nm_pegawai` varchar(20) NOT NULL,
  `nip_pegawai` varchar(15) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `foto_pegawai` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id` int(11) NOT NULL,
  `kd_banner` varchar(15) NOT NULL,
  `nm_banner` varchar(20) NOT NULL,
  `gambar_banner` mediumblob NOT NULL,
  `kd_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id` int(11) NOT NULL,
  `kd_kontak` varchar(15) NOT NULL,
  `judul_kontak` text NOT NULL,
  `gambar_kontak` blob NOT NULL,
  `alamat_kontak1` text NOT NULL,
  `alamat_kontak2` text NOT NULL,
  `alamat_kontak3` text NOT NULL,
  `url_maps` text NOT NULL,
  `kd_menu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_main_informasi`
--

CREATE TABLE `tbl_main_informasi` (
  `id` int(11) NOT NULL,
  `kd_informasi` varchar(15) NOT NULL,
  `nm_informasi` varchar(20) NOT NULL,
  `gambar_infromasi` mediumblob NOT NULL,
  `kd_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id` int(11) NOT NULL,
  `kd_menu` varchar(15) NOT NULL,
  `nm_menu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_partner`
--

CREATE TABLE `tbl_partner` (
  `id` int(11) NOT NULL,
  `kd_partner` varchar(15) NOT NULL,
  `nm_partner` varchar(100) NOT NULL,
  `logo_partner` blob NOT NULL,
  `detail_partner` text NOT NULL,
  `url_partner` text NOT NULL,
  `kd_menu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id` int(11) NOT NULL,
  `kd_pesan` varchar(15) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `deskripsi_pesan` text NOT NULL,
  `kd_menu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seller`
--

CREATE TABLE `tbl_seller` (
  `id` int(11) NOT NULL,
  `kd_seller` varchar(15) NOT NULL,
  `nm_seller` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categori_main_berita`
--
ALTER TABLE `categori_main_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_main_berita`
--
ALTER TABLE `detail_main_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk_best_seller`
--
ALTER TABLE `produk_best_seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk_kategori`
--
ALTER TABLE `produk_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_main_informasi`
--
ALTER TABLE `tbl_main_informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_partner`
--
ALTER TABLE `tbl_partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_seller`
--
ALTER TABLE `tbl_seller`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categori_main_berita`
--
ALTER TABLE `categori_main_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_main_berita`
--
ALTER TABLE `detail_main_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk_best_seller`
--
ALTER TABLE `produk_best_seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk_kategori`
--
ALTER TABLE `produk_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_main_informasi`
--
ALTER TABLE `tbl_main_informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_partner`
--
ALTER TABLE `tbl_partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_seller`
--
ALTER TABLE `tbl_seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
