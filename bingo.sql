-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 04:36 AM
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
  `LINK` varchar(100) DEFAULT NULL,
  `ID_PARENT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `LAST_LOGIN` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `ID_MENU` int(11) NOT NULL,
  `ID_DETAIL_MENU` int(11) DEFAULT NULL,
  `ID_STATUS_USER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soal_pelajaran`
--

CREATE TABLE `tbl_soal_pelajaran` (
  `ID_SOAL_PELAJARAN` int(11) NOT NULL,
  `ID_PELAJARAN` int(11) DEFAULT NULL,
  `TEKS_SOAL_PELAJARAN` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status_instansi`
--

CREATE TABLE `tbl_status_instansi` (
  `ID_STATUS_INSTANSI` int(11) NOT NULL,
  `TEKS_STATUS_INSTANSI` varchar(20) DEFAULT NULL,
  `KETERANGAN_STATUS_INSTANSI` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status_user`
--

CREATE TABLE `tbl_status_user` (
  `ID_STATUS_USER` int(11) NOT NULL,
  `TEKS_STATUS_USER` varchar(50) DEFAULT NULL,
  `KETRANGAN__STATUS_USER` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD KEY `FK_HAS_ASSIGN_TO_KARTU_BINGO` (`ID_SOAL_PELAJARAN`),
  ADD KEY `FK_HAS_KARTU_BINGO_DETAIL` (`ID_KARTU_BINGO`);

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
  ADD KEY `FK_HAS_JAWABAN` (`ID_SOAL_PELAJARAN`);

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
-- AUTO_INCREMENT for table `tbl_instansi_pendidikan`
--
ALTER TABLE `tbl_instansi_pendidikan`
  MODIFY `ID_INSTANSI_PENDIDIKAN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jawaban_soal`
--
ALTER TABLE `tbl_jawaban_soal`
  MODIFY `ID_JAWABAN_SOAL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kartu_bingo`
--
ALTER TABLE `tbl_kartu_bingo`
  MODIFY `ID_KARTU_BINGO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `ID_TBL_LOGIN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pelajaran`
--
ALTER TABLE `tbl_pelajaran`
  MODIFY `ID_PELAJARAN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ruang`
--
ALTER TABLE `tbl_ruang`
  MODIFY `ID_RUANG` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_status_instansi`
--
ALTER TABLE `tbl_status_instansi`
  MODIFY `ID_STATUS_INSTANSI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_status_user`
--
ALTER TABLE `tbl_status_user`
  MODIFY `ID_STATUS_USER` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  MODIFY `ID_USER_DETAILS` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `FK_HAS_ASSIGN_TO_KARTU_BINGO` FOREIGN KEY (`ID_SOAL_PELAJARAN`) REFERENCES `tbl_soal_pelajaran` (`ID_SOAL_PELAJARAN`),
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
  ADD CONSTRAINT `FK_HAS_JAWABAN` FOREIGN KEY (`ID_SOAL_PELAJARAN`) REFERENCES `tbl_soal_pelajaran` (`ID_SOAL_PELAJARAN`);

--
-- Constraints for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD CONSTRAINT `FK_HAS_MENU` FOREIGN KEY (`ID_STATUS_USER`) REFERENCES `tbl_status_user` (`ID_STATUS_USER`),
  ADD CONSTRAINT `FK_HAS_MENU_DETAIL` FOREIGN KEY (`ID_DETAIL_MENU`) REFERENCES `tbl_detail_menu` (`ID_DETAIL_MENU`);

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
