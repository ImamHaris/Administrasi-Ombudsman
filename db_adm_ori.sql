-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2019 at 09:32 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_adm_ori`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(6) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL),
(2, 'imam haris', 'imam', 'eaccb8ea6090a40a98aa28c071810371', NULL),
(3, 'aan san', 'aan', '4607ed4bd8140e9664875f907f48ae14', NULL),
(4, 'Alviyar', 'Alviyar', 'c42989a8ade2af7b0073d21bc575dc9b', NULL),
(5, 'Pahlevi', 'PejabatNegara', '25ae6b822594d482634786618a891408', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `referensi`
--

CREATE TABLE `referensi` (
  `Id_Referensi` int(20) NOT NULL,
  `Judul_TA` varchar(300) NOT NULL,
  `Penulis` varchar(30) NOT NULL,
  `Tahun` int(5) NOT NULL,
  `Asal_Referensi` varchar(50) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `Id_admin` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referensi`
--

INSERT INTO `referensi` (`Id_Referensi`, `Judul_TA`, `Penulis`, `Tahun`, `Asal_Referensi`, `file`, `Id_admin`) VALUES
(1, 'ANALISIS DAMPAK EKONOMI DESA WISATA WUKIRSARI KECAMATAN IMOGIRI, KABUPATEN BANTUL, DAERAH ISTIMEWA YOGYAKARTA', 'Nazovah Ummudiyah', 2016, 'Universitas Muhammadiyah Yogyakarta ', '', 'Adm001'),
(2, 'ANALISIS DAMPAK EKONOMI WISATA BAHARI TERHADAP PENDAPATAN MASYARAKAT LOKAL STUDI KASUS PANTAI BANDULU KABUPATEN SERANG PROVINSI BANTEN ', 'Meita Amanda', 2009, 'Institut Pertanian Bogor', NULL, 'Adm001'),
(3, 'ANALISI PENGARUH SEKTOR PARIWISATA TERHADAP PENYERAPAN TENAGA KERJA DI 5 KABUPATEN / KOTA DAERAH ISTIMEWA YOGYAKARTA', 'M. Zukfi Rahadi', 2018, 'Universitas Muhammadiyah Surakarta', NULL, 'Adm001'),
(4, 'DAMPAK EKONOMI PENGEMBANGAN KAWASAN EKOWISATA KEPULAUAN SERIBU', 'Hanny Aryunda', 2011, 'Institut Teknologi Bandung', NULL, 'Adm001'),
(5, 'LOCAL ECONOMIC IMPACTS OF DRAGON TORISM IN INDONESIA', 'Mtthew J. Walpole', 2000, 'University of Kent', NULL, 'Adm001'),
(6, 'TA KE ENAM', 'Muhammad', 2016, 'ITERA', NULL, 'Adm001'),
(7, 'TA KE TUJUH', 'Ragil', 2017, 'ITERA', NULL, 'Adm001'),
(8, 'TA KE DELAPAN', 'Trireza', 2018, 'ITERA', NULL, 'Adm001'),
(9, 'TA KE SEMBILAN', 'Ramadhan', 2018, 'ITERA', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar_umum`
--

CREATE TABLE `surat_keluar_umum` (
  `id_surat` int(11) NOT NULL,
  `no_surat` int(30) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk_umum`
--

CREATE TABLE `surat_masuk_umum` (
  `id_surat` int(11) NOT NULL,
  `no_surat` int(30) NOT NULL,
  `tgl_surat` date NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(30) NOT NULL,
  `Nama` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `No_telepon` varchar(15) NOT NULL,
  `Alamat` varchar(60) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `Nama`, `password`, `Email`, `No_telepon`, `Alamat`, `foto`) VALUES
(1, 'Alviyar', 'c42989a8ade2af7b0073d21bc575dc9b', 'Alviyar', '081212121212', 'sukarame', NULL),
(2, 'aan', '4607ed4bd8140e9664875f907f48ae14', 'AAN', '082222221221', 'sariringgung', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `referensi`
--
ALTER TABLE `referensi`
  ADD PRIMARY KEY (`Id_Referensi`),
  ADD KEY `Id_admin` (`Id_admin`);

--
-- Indexes for table `surat_keluar_umum`
--
ALTER TABLE `surat_keluar_umum`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `surat_masuk_umum`
--
ALTER TABLE `surat_masuk_umum`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `referensi`
--
ALTER TABLE `referensi`
  MODIFY `Id_Referensi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `surat_keluar_umum`
--
ALTER TABLE `surat_keluar_umum`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat_masuk_umum`
--
ALTER TABLE `surat_masuk_umum`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
