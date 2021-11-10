-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 08:13 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bingo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota_ruang`
--

CREATE TABLE `tbl_anggota_ruang` (
  `ID_ANGGOTA_RUANG` int(11) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `ID_RUANG` int(11) DEFAULT NULL,
  `IDENTIFIER_ANGGOTA` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_kartu_bingo`
--

CREATE TABLE `tbl_detail_kartu_bingo` (
  `ID_DETAIL_KARTU_BINGO` int(11) NOT NULL,
  `ID_SOAL_PELAJARAN` int(11) DEFAULT NULL,
  `ID_KARTU_BINGO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_menu`
--

CREATE TABLE `tbl_detail_menu` (
  `ID_DETAIL_MENU` int(11) NOT NULL,
  `TEKS_MENU` varchar(50) DEFAULT NULL,
  `ICONS` varchar(100) DEFAULT NULL,
  `LINK` varchar(100) NOT NULL DEFAULT '#',
  `ID_PARENT` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_menu`
--

INSERT INTO `tbl_detail_menu` (`ID_DETAIL_MENU`, `TEKS_MENU`, `ICONS`, `LINK`, `ID_PARENT`) VALUES
(1, 'Menu', NULL, '#', 0),
(2, 'Add Menu', NULL, 'menu/add', 1),
(3, 'Index Menu', NULL, 'menu/index', 1),
(4, 'Status User', NULL, '#', 0),
(5, 'Add Status User', NULL, 'status_user/add', 4),
(6, 'Index Status User', NULL, 'status_user/index', 4),
(7, 'Detail Menu', NULL, '#', 0),
(8, 'Add Detail Menu', NULL, 'detail_menu/add', 7),
(9, 'Index Detail Menu', NULL, 'detail_menu/index', 7),
(10, 'Status Instansi', '', '#', 0),
(11, 'Add Status instansi', '', 'status_instansi/add', 10),
(12, 'Index Status Instansi', '', 'status_instansi/index', 10),
(13, 'Ruang', '', '#', 0),
(14, 'Add Ruang', '', 'ruang/add', 13),
(15, 'Index Ruang', '', 'ruang/index', 13),
(16, 'Instansi Pendidikan', '', '', 0),
(17, 'Add Instansi Pendidikan', '', 'instansi_pendidikan/add', 16),
(18, 'Index Instansi Pendidikan', '', 'instansi_pendidikan/index', 16),
(19, 'User Detail', '', '#', 0),
(20, 'Add User Detail', '', 'user_detail/add', 19),
(21, 'Index User Detail', '', 'status_user/index', 19),
(22, 'Login', '', '#', 0),
(23, 'Add Login', '', 'login/add', 22),
(24, 'Index Login', '', 'login/index', 22),
(25, 'User', '', '#', 0),
(26, 'Add User', '', 'user/add', 25),
(27, 'Index User', '', 'user/index', 25),
(28, 'Pelajaran', NULL, '#', 0),
(29, 'Add Pelajaran', NULL, 'pelajaran/add', 28),
(30, 'Index Pelajaran', NULL, 'pelajaran/index', 28),
(31, 'Soal Pelajaran', NULL, '#', 0),
(32, 'Add Soal Pelajaran', NULL, 'soal_pelajaran/add', 31),
(33, 'Index Soal Pelajara', NULL, 'soal_pelajaran/index', 31),
(34, 'Anggota Ruang', NULL, '#', 0),
(35, 'Add Anggota Ruang', NULL, 'anggota_ruang/add', 34),
(36, 'Index Anggota Ruang', NULL, 'anggota_ruang/index', 34);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_instansi_pendidikan`
--

CREATE TABLE `tbl_instansi_pendidikan` (
  `ID_INSTANSI_PENDIDIKAN` int(11) NOT NULL,
  `ID_STATUS_INSTANSI` int(11) DEFAULT NULL,
  `NAMA_INSTANSI_PENDIDIKAN` varchar(50) DEFAULT NULL,
  `ALAMAT_INSTANSI_PENDIDIKAN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_instansi_pendidikan`
--

INSERT INTO `tbl_instansi_pendidikan` (`ID_INSTANSI_PENDIDIKAN`, `ID_STATUS_INSTANSI`, `NAMA_INSTANSI_PENDIDIKAN`, `ALAMAT_INSTANSI_PENDIDIKAN`) VALUES
(1, 1, 'Universitas Wijaya Putra', 'Benowo 133');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jawaban_soal`
--

CREATE TABLE `tbl_jawaban_soal` (
  `ID_JAWABAN_SOAL` int(11) NOT NULL,
  `ID_SOAL_PELAJARAN` int(11) DEFAULT NULL,
  `TEKS_JAWABAN_SOAL` longtext DEFAULT NULL,
  `IS_KEY` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jawaban_soal`
--

INSERT INTO `tbl_jawaban_soal` (`ID_JAWABAN_SOAL`, `ID_SOAL_PELAJARAN`, `TEKS_JAWABAN_SOAL`, `IS_KEY`) VALUES
(1, 2, 'realita', 0),
(2, 2, 'Alat Peraga', 1),
(3, 2, 'Model', 0),
(4, 2, 'multimedia', 0),
(5, 3, 'Membutuhkan biaya perawatan yang mahal', 0),
(6, 3, 'Mengandung resiko yang tinggi', 0),
(7, 3, 'Cenderung membosankan', 0),
(8, 3, 'Tidak selalu dapat memberikan gambaran sesungguhnya', 1),
(9, 4, 'Guru perlu memiliki pemahaman terhadap media pembelajaran', 0),
(10, 4, 'Guru harus dapat menyiapkan tugas kepada siswa dalam membuat media pembelajaran sederhana', 0),
(11, 4, 'Guru harus mampu menilai hasil belajar yang menggunakan media media pembelajaran', 0),
(12, 4, 'Guru harus dapat menggunakan berbagai jenis media', 1),
(13, 5, 'Memilih materi yang berguna', 0),
(14, 5, 'Mengidentifikasi keadaan awal siswa', 0),
(15, 5, 'Memilih model pembelajaran', 1),
(16, 5, 'Meminta tanggapan siswa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kartu_bingo`
--

CREATE TABLE `tbl_kartu_bingo` (
  `ID_KARTU_BINGO` int(11) NOT NULL,
  `TGL_DIBUAT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `ID_TBL_LOGIN` int(11) NOT NULL,
  `USERNAME_LOGIN` varchar(8) DEFAULT NULL,
  `PASSWORD_LOGIN` varchar(255) DEFAULT NULL,
  `LAST_LOGIN` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isLogin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`ID_TBL_LOGIN`, `USERNAME_LOGIN`, `PASSWORD_LOGIN`, `LAST_LOGIN`, `isLogin`) VALUES
(1, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', '2021-11-05 07:43:18', 0),
(2, 'operator', 'c4ca4238a0b923820dcc509a6f75849b', '2021-11-05 07:41:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `ID_MENU` int(11) NOT NULL,
  `ID_DETAIL_MENU` int(11) DEFAULT NULL,
  `ID_STATUS_USER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`ID_MENU`, `ID_DETAIL_MENU`, `ID_STATUS_USER`) VALUES
(1, 1, 1),
(2, 4, 1),
(3, 7, 1),
(4, 10, 1),
(5, 13, 2),
(6, 16, 1),
(7, 19, 1),
(8, 22, 1),
(9, 25, 1),
(10, 28, 2),
(11, 31, 2),
(12, 34, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelajaran`
--

CREATE TABLE `tbl_pelajaran` (
  `ID_PELAJARAN` int(11) NOT NULL,
  `ID_RUANG` int(11) DEFAULT NULL,
  `NAMA_PELAJARAN` text DEFAULT NULL,
  `KETERANGAN_PELAJARAN` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pelajaran`
--

INSERT INTO `tbl_pelajaran` (`ID_PELAJARAN`, `ID_RUANG`, `NAMA_PELAJARAN`, `KETERANGAN_PELAJARAN`) VALUES
(1, 1, 'Matematika', 'Matematika Semester 1'),
(2, 2, 'Materi I', 'Materi Media pembelajaran I');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ruang`
--

CREATE TABLE `tbl_ruang` (
  `ID_RUANG` int(11) NOT NULL,
  `ID_INSTANSI_PENDIDIKAN` int(11) DEFAULT NULL,
  `NAMA_RUANG` text DEFAULT NULL,
  `KETERANGAN_RUANG` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ruang`
--

INSERT INTO `tbl_ruang` (`ID_RUANG`, `ID_INSTANSI_PENDIDIKAN`, `NAMA_RUANG`, `KETERANGAN_RUANG`) VALUES
(1, 1, 'G3.1', 'Ruang Semester 1'),
(2, 1, 'MEDIA PEMBELAJARAN', 'Materi Media Pembelajaran');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soal_pelajaran`
--

CREATE TABLE `tbl_soal_pelajaran` (
  `ID_SOAL_PELAJARAN` int(11) NOT NULL,
  `ID_PELAJARAN` int(11) DEFAULT NULL,
  `TEKS_SOAL_PELAJARAN` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_soal_pelajaran`
--

INSERT INTO `tbl_soal_pelajaran` (`ID_SOAL_PELAJARAN`, `ID_PELAJARAN`, `TEKS_SOAL_PELAJARAN`) VALUES
(1, 1, 'Coba soal ini ya?'),
(2, 2, 'Media yang memiliki fungsi utama untuk menurunkan keabstrakan konsep sering disebut?'),
(3, 2, 'Berikut ini merupakan kelemahan media cetak adalah ?'),
(4, 2, 'Beberapa hal yang perlu diperhatikan guru dalam menggunakan media pembelajaran untuk mempertinggi kualitas pembelajaran adalah?'),
(5, 2, 'Menurut model ASSURE, sebelum memilih media, guru perlu …');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status_instansi`
--

CREATE TABLE `tbl_status_instansi` (
  `ID_STATUS_INSTANSI` int(11) NOT NULL,
  `TEKS_STATUS_INSTANSI` varchar(20) DEFAULT NULL,
  `KETERANGAN_STATUS_INSTANSI` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_status_instansi`
--

INSERT INTO `tbl_status_instansi` (`ID_STATUS_INSTANSI`, `TEKS_STATUS_INSTANSI`, `KETERANGAN_STATUS_INSTANSI`) VALUES
(1, 'Perguruan Tinggi', 'Semacam Universitas dan lain sebagainya'),
(2, 'Sekolah', 'Seperti SMA, SMP, SD dan sejenisnya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status_user`
--

CREATE TABLE `tbl_status_user` (
  `ID_STATUS_USER` int(11) NOT NULL,
  `TEKS_STATUS_USER` varchar(50) DEFAULT NULL,
  `KETRANGAN__STATUS_USER` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_status_user`
--

INSERT INTO `tbl_status_user` (`ID_STATUS_USER`, `TEKS_STATUS_USER`, `KETRANGAN__STATUS_USER`) VALUES
(1, 'Administrator', 'Admin User'),
(2, 'Operator', 'Operator Instansi Pendidikan'),
(3, 'Mahasiswa', 'Anggota instansi pendidikan status Perguruan Tinggi'),
(4, 'Siswa', 'Anggota instansi pendidikan status Sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `ID_USER` int(11) NOT NULL,
  `ID_USER_DETAILS` int(11) DEFAULT NULL,
  `ID_TBL_LOGIN` int(11) DEFAULT NULL,
  `ID_STATUS_USER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`ID_USER`, `ID_USER_DETAILS`, `ID_TBL_LOGIN`, `ID_STATUS_USER`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_details`
--

CREATE TABLE `tbl_user_details` (
  `ID_USER_DETAILS` int(11) NOT NULL,
  `NAMA_USER` varchar(30) DEFAULT NULL,
  `ALAMAT_USER` varchar(255) DEFAULT NULL,
  `JK_USER` int(11) DEFAULT NULL,
  `TELP_USER` varchar(13) DEFAULT NULL,
  `EMAIL_USER` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_details`
--

INSERT INTO `tbl_user_details` (`ID_USER_DETAILS`, `NAMA_USER`, `ALAMAT_USER`, `JK_USER`, `TELP_USER`, `EMAIL_USER`) VALUES
(1, 'Administrator', 'asas', 1, '1212', 'admin@admin.com'),
(2, 'Operator', 'operator alamat', 1, '081339381191', 'admin@admin.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anggota_ruang`
--
ALTER TABLE `tbl_anggota_ruang`
  ADD PRIMARY KEY (`ID_ANGGOTA_RUANG`),
  ADD KEY `FK_HAS_ANGGOTA` (`ID_RUANG`),
  ADD KEY `FK_HAS_ASSIGN_RUANG` (`ID_USER`);

--
-- Indexes for table `tbl_detail_kartu_bingo`
--
ALTER TABLE `tbl_detail_kartu_bingo`
  ADD PRIMARY KEY (`ID_DETAIL_KARTU_BINGO`),
  ADD KEY `FK_HAS_KARTU_BINGO_DETAIL` (`ID_KARTU_BINGO`),
  ADD KEY `FK_HAS_ASSIGN_KARTU_BINGO` (`ID_SOAL_PELAJARAN`);

--
-- Indexes for table `tbl_detail_menu`
--
ALTER TABLE `tbl_detail_menu`
  ADD PRIMARY KEY (`ID_DETAIL_MENU`);

--
-- Indexes for table `tbl_instansi_pendidikan`
--
ALTER TABLE `tbl_instansi_pendidikan`
  ADD PRIMARY KEY (`ID_INSTANSI_PENDIDIKAN`),
  ADD KEY `FK_HAS_STATUS` (`ID_STATUS_INSTANSI`);

--
-- Indexes for table `tbl_jawaban_soal`
--
ALTER TABLE `tbl_jawaban_soal`
  ADD PRIMARY KEY (`ID_JAWABAN_SOAL`),
  ADD KEY `FK_HAS_SOAL_JAWABAN` (`ID_SOAL_PELAJARAN`);

--
-- Indexes for table `tbl_kartu_bingo`
--
ALTER TABLE `tbl_kartu_bingo`
  ADD PRIMARY KEY (`ID_KARTU_BINGO`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`ID_TBL_LOGIN`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`ID_MENU`),
  ADD KEY `FK_HAS_MENU` (`ID_STATUS_USER`),
  ADD KEY `FK_HAS_MENU_DETAIL` (`ID_DETAIL_MENU`);

--
-- Indexes for table `tbl_pelajaran`
--
ALTER TABLE `tbl_pelajaran`
  ADD PRIMARY KEY (`ID_PELAJARAN`),
  ADD KEY `FK_HAS_PELAJARAN` (`ID_RUANG`);

--
-- Indexes for table `tbl_ruang`
--
ALTER TABLE `tbl_ruang`
  ADD PRIMARY KEY (`ID_RUANG`),
  ADD KEY `FK_HAS_RUANG` (`ID_INSTANSI_PENDIDIKAN`);

--
-- Indexes for table `tbl_soal_pelajaran`
--
ALTER TABLE `tbl_soal_pelajaran`
  ADD PRIMARY KEY (`ID_SOAL_PELAJARAN`),
  ADD KEY `FK_HAS_SOAL` (`ID_PELAJARAN`);

--
-- Indexes for table `tbl_status_instansi`
--
ALTER TABLE `tbl_status_instansi`
  ADD PRIMARY KEY (`ID_STATUS_INSTANSI`);

--
-- Indexes for table `tbl_status_user`
--
ALTER TABLE `tbl_status_user`
  ADD PRIMARY KEY (`ID_STATUS_USER`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`ID_USER`),
  ADD KEY `FK_HAS_DETAIL` (`ID_USER_DETAILS`),
  ADD KEY `FK_HAS_LOGIN` (`ID_TBL_LOGIN`),
  ADD KEY `FK_HAS_STATUS_USER` (`ID_STATUS_USER`);

--
-- Indexes for table `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  ADD PRIMARY KEY (`ID_USER_DETAILS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_anggota_ruang`
--
ALTER TABLE `tbl_anggota_ruang`
  MODIFY `ID_ANGGOTA_RUANG` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_detail_kartu_bingo`
--
ALTER TABLE `tbl_detail_kartu_bingo`
  MODIFY `ID_DETAIL_KARTU_BINGO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_detail_menu`
--
ALTER TABLE `tbl_detail_menu`
  MODIFY `ID_DETAIL_MENU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_instansi_pendidikan`
--
ALTER TABLE `tbl_instansi_pendidikan`
  MODIFY `ID_INSTANSI_PENDIDIKAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_jawaban_soal`
--
ALTER TABLE `tbl_jawaban_soal`
  MODIFY `ID_JAWABAN_SOAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_kartu_bingo`
--
ALTER TABLE `tbl_kartu_bingo`
  MODIFY `ID_KARTU_BINGO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `ID_TBL_LOGIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `ID_MENU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_pelajaran`
--
ALTER TABLE `tbl_pelajaran`
  MODIFY `ID_PELAJARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_ruang`
--
ALTER TABLE `tbl_ruang`
  MODIFY `ID_RUANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_soal_pelajaran`
--
ALTER TABLE `tbl_soal_pelajaran`
  MODIFY `ID_SOAL_PELAJARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_status_instansi`
--
ALTER TABLE `tbl_status_instansi`
  MODIFY `ID_STATUS_INSTANSI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_status_user`
--
ALTER TABLE `tbl_status_user`
  MODIFY `ID_STATUS_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  MODIFY `ID_USER_DETAILS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_anggota_ruang`
--
ALTER TABLE `tbl_anggota_ruang`
  ADD CONSTRAINT `FK_HAS_ANGGOTA` FOREIGN KEY (`ID_RUANG`) REFERENCES `tbl_ruang` (`ID_RUANG`),
  ADD CONSTRAINT `FK_HAS_ASSIGN_RUANG` FOREIGN KEY (`ID_USER`) REFERENCES `tbl_user` (`ID_USER`);

--
-- Constraints for table `tbl_detail_kartu_bingo`
--
ALTER TABLE `tbl_detail_kartu_bingo`
  ADD CONSTRAINT `FK_HAS_ASSIGN_KARTU_BINGO` FOREIGN KEY (`ID_SOAL_PELAJARAN`) REFERENCES `tbl_soal_pelajaran` (`ID_SOAL_PELAJARAN`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_HAS_KARTU_BINGO_DETAIL` FOREIGN KEY (`ID_KARTU_BINGO`) REFERENCES `tbl_kartu_bingo` (`ID_KARTU_BINGO`);

--
-- Constraints for table `tbl_instansi_pendidikan`
--
ALTER TABLE `tbl_instansi_pendidikan`
  ADD CONSTRAINT `FK_HAS_STATUS` FOREIGN KEY (`ID_STATUS_INSTANSI`) REFERENCES `tbl_status_instansi` (`ID_STATUS_INSTANSI`);

--
-- Constraints for table `tbl_jawaban_soal`
--
ALTER TABLE `tbl_jawaban_soal`
  ADD CONSTRAINT `FK_HAS_SOAL_JAWABAN` FOREIGN KEY (`ID_SOAL_PELAJARAN`) REFERENCES `tbl_soal_pelajaran` (`ID_SOAL_PELAJARAN`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD CONSTRAINT `FK_HAS_MENU` FOREIGN KEY (`ID_STATUS_USER`) REFERENCES `tbl_status_user` (`ID_STATUS_USER`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_HAS_MENU_DETAIL` FOREIGN KEY (`ID_DETAIL_MENU`) REFERENCES `tbl_detail_menu` (`ID_DETAIL_MENU`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_pelajaran`
--
ALTER TABLE `tbl_pelajaran`
  ADD CONSTRAINT `FK_HAS_PELAJARAN` FOREIGN KEY (`ID_RUANG`) REFERENCES `tbl_ruang` (`ID_RUANG`);

--
-- Constraints for table `tbl_ruang`
--
ALTER TABLE `tbl_ruang`
  ADD CONSTRAINT `FK_HAS_RUANG` FOREIGN KEY (`ID_INSTANSI_PENDIDIKAN`) REFERENCES `tbl_instansi_pendidikan` (`ID_INSTANSI_PENDIDIKAN`);

--
-- Constraints for table `tbl_soal_pelajaran`
--
ALTER TABLE `tbl_soal_pelajaran`
  ADD CONSTRAINT `FK_HAS_SOAL` FOREIGN KEY (`ID_PELAJARAN`) REFERENCES `tbl_pelajaran` (`ID_PELAJARAN`);

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `FK_HAS_DETAIL` FOREIGN KEY (`ID_USER_DETAILS`) REFERENCES `tbl_user_details` (`ID_USER_DETAILS`),
  ADD CONSTRAINT `FK_HAS_LOGIN` FOREIGN KEY (`ID_TBL_LOGIN`) REFERENCES `tbl_login` (`ID_TBL_LOGIN`),
  ADD CONSTRAINT `FK_HAS_STATUS_USER` FOREIGN KEY (`ID_STATUS_USER`) REFERENCES `tbl_status_user` (`ID_STATUS_USER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
