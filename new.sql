-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.20-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for bingo
CREATE DATABASE IF NOT EXISTS `bingo` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `bingo`;

-- Dumping structure for table bingo.tbl_anggota_ruang
CREATE TABLE IF NOT EXISTS `tbl_anggota_ruang` (
  `ID_ANGGOTA_RUANG` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USER` int(11) DEFAULT NULL,
  `ID_RUANG` int(11) DEFAULT NULL,
  `IDENTIFIER_ANGGOTA` text DEFAULT NULL,
  PRIMARY KEY (`ID_ANGGOTA_RUANG`),
  KEY `FK_HAS_ANGGOTA` (`ID_RUANG`),
  KEY `FK_HAS_ASSIGN_RUANG` (`ID_USER`),
  CONSTRAINT `FK_HAS_ANGGOTA` FOREIGN KEY (`ID_RUANG`) REFERENCES `tbl_ruang` (`ID_RUANG`),
  CONSTRAINT `FK_HAS_ASSIGN_RUANG` FOREIGN KEY (`ID_USER`) REFERENCES `tbl_user` (`ID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table bingo.tbl_anggota_ruang: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_anggota_ruang` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_anggota_ruang` ENABLE KEYS */;

-- Dumping structure for table bingo.tbl_detail_kartu_bingo
CREATE TABLE IF NOT EXISTS `tbl_detail_kartu_bingo` (
  `ID_DETAIL_KARTU_BINGO` int(11) NOT NULL AUTO_INCREMENT,
  `ID_SOAL_PELAJARAN` int(11) DEFAULT NULL,
  `ID_KARTU_BINGO` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_DETAIL_KARTU_BINGO`),
  KEY `FK_HAS_ASSIGN_TO_KARTU_BINGO` (`ID_SOAL_PELAJARAN`),
  KEY `FK_HAS_KARTU_BINGO_DETAIL` (`ID_KARTU_BINGO`),
  CONSTRAINT `FK_HAS_ASSIGN_TO_KARTU_BINGO` FOREIGN KEY (`ID_SOAL_PELAJARAN`) REFERENCES `tbl_soal_pelajaran` (`ID_SOAL_PELAJARAN`),
  CONSTRAINT `FK_HAS_KARTU_BINGO_DETAIL` FOREIGN KEY (`ID_KARTU_BINGO`) REFERENCES `tbl_kartu_bingo` (`ID_KARTU_BINGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table bingo.tbl_detail_kartu_bingo: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_detail_kartu_bingo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_detail_kartu_bingo` ENABLE KEYS */;

-- Dumping structure for table bingo.tbl_detail_menu
CREATE TABLE IF NOT EXISTS `tbl_detail_menu` (
  `ID_DETAIL_MENU` int(11) NOT NULL AUTO_INCREMENT,
  `TEKS_MENU` varchar(50) DEFAULT NULL,
  `ICONS` varchar(100) DEFAULT NULL,
  `LINK` varchar(100) NOT NULL DEFAULT '#',
  `ID_PARENT` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID_DETAIL_MENU`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table bingo.tbl_detail_menu: ~4 rows (approximately)
/*!40000 ALTER TABLE `tbl_detail_menu` DISABLE KEYS */;
REPLACE INTO `tbl_detail_menu` (`ID_DETAIL_MENU`, `TEKS_MENU`, `ICONS`, `LINK`, `ID_PARENT`) VALUES
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
/*!40000 ALTER TABLE `tbl_detail_menu` ENABLE KEYS */;

-- Dumping structure for table bingo.tbl_instansi_pendidikan
CREATE TABLE IF NOT EXISTS `tbl_instansi_pendidikan` (
  `ID_INSTANSI_PENDIDIKAN` int(11) NOT NULL AUTO_INCREMENT,
  `ID_STATUS_INSTANSI` int(11) DEFAULT NULL,
  `NAMA_INSTANSI_PENDIDIKAN` varchar(50) DEFAULT NULL,
  `ALAMAT_INSTANSI_PENDIDIKAN` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_INSTANSI_PENDIDIKAN`),
  KEY `FK_HAS_STATUS` (`ID_STATUS_INSTANSI`),
  CONSTRAINT `FK_HAS_STATUS` FOREIGN KEY (`ID_STATUS_INSTANSI`) REFERENCES `tbl_status_instansi` (`ID_STATUS_INSTANSI`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table bingo.tbl_instansi_pendidikan: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_instansi_pendidikan` DISABLE KEYS */;
REPLACE INTO `tbl_instansi_pendidikan` (`ID_INSTANSI_PENDIDIKAN`, `ID_STATUS_INSTANSI`, `NAMA_INSTANSI_PENDIDIKAN`, `ALAMAT_INSTANSI_PENDIDIKAN`) VALUES
	(1, 1, 'Universitas Wijaya Putra', 'Benowo 133');
/*!40000 ALTER TABLE `tbl_instansi_pendidikan` ENABLE KEYS */;

-- Dumping structure for table bingo.tbl_jawaban_soal
CREATE TABLE IF NOT EXISTS `tbl_jawaban_soal` (
  `ID_JAWABAN_SOAL` int(11) NOT NULL AUTO_INCREMENT,
  `ID_SOAL_PELAJARAN` int(11) DEFAULT NULL,
  `TEKS_JAWABAN_SOAL` longtext DEFAULT NULL,
  `IS_KEY` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_JAWABAN_SOAL`),
  KEY `FK_HAS_JAWABAN` (`ID_SOAL_PELAJARAN`),
  CONSTRAINT `FK_HAS_JAWABAN` FOREIGN KEY (`ID_SOAL_PELAJARAN`) REFERENCES `tbl_soal_pelajaran` (`ID_SOAL_PELAJARAN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table bingo.tbl_jawaban_soal: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_jawaban_soal` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_jawaban_soal` ENABLE KEYS */;

-- Dumping structure for table bingo.tbl_kartu_bingo
CREATE TABLE IF NOT EXISTS `tbl_kartu_bingo` (
  `ID_KARTU_BINGO` int(11) NOT NULL AUTO_INCREMENT,
  `TGL_DIBUAT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`ID_KARTU_BINGO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table bingo.tbl_kartu_bingo: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_kartu_bingo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_kartu_bingo` ENABLE KEYS */;

-- Dumping structure for table bingo.tbl_login
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `ID_TBL_LOGIN` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME_LOGIN` varchar(8) DEFAULT NULL,
  `PASSWORD_LOGIN` varchar(255) DEFAULT NULL,
  `LAST_LOGIN` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isLogin` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_TBL_LOGIN`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table bingo.tbl_login: ~1 rows (approximately)
/*!40000 ALTER TABLE `tbl_login` DISABLE KEYS */;
REPLACE INTO `tbl_login` (`ID_TBL_LOGIN`, `USERNAME_LOGIN`, `PASSWORD_LOGIN`, `LAST_LOGIN`, `isLogin`) VALUES
	(1, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', '2021-11-05 14:43:18', 0),
	(2, 'operator', 'c4ca4238a0b923820dcc509a6f75849b', '2021-11-05 14:41:05', 1);
/*!40000 ALTER TABLE `tbl_login` ENABLE KEYS */;

-- Dumping structure for table bingo.tbl_menu
CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `ID_MENU` int(11) NOT NULL AUTO_INCREMENT,
  `ID_DETAIL_MENU` int(11) DEFAULT NULL,
  `ID_STATUS_USER` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_MENU`),
  KEY `FK_HAS_MENU` (`ID_STATUS_USER`),
  KEY `FK_HAS_MENU_DETAIL` (`ID_DETAIL_MENU`),
  CONSTRAINT `FK_HAS_MENU` FOREIGN KEY (`ID_STATUS_USER`) REFERENCES `tbl_status_user` (`ID_STATUS_USER`) ON UPDATE CASCADE,
  CONSTRAINT `FK_HAS_MENU_DETAIL` FOREIGN KEY (`ID_DETAIL_MENU`) REFERENCES `tbl_detail_menu` (`ID_DETAIL_MENU`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table bingo.tbl_menu: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_menu` DISABLE KEYS */;
REPLACE INTO `tbl_menu` (`ID_MENU`, `ID_DETAIL_MENU`, `ID_STATUS_USER`) VALUES
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
/*!40000 ALTER TABLE `tbl_menu` ENABLE KEYS */;

-- Dumping structure for table bingo.tbl_pelajaran
CREATE TABLE IF NOT EXISTS `tbl_pelajaran` (
  `ID_PELAJARAN` int(11) NOT NULL AUTO_INCREMENT,
  `ID_RUANG` int(11) DEFAULT NULL,
  `NAMA_PELAJARAN` text DEFAULT NULL,
  `KETERANGAN_PELAJARAN` text DEFAULT NULL,
  PRIMARY KEY (`ID_PELAJARAN`),
  KEY `FK_HAS_PELAJARAN` (`ID_RUANG`),
  CONSTRAINT `FK_HAS_PELAJARAN` FOREIGN KEY (`ID_RUANG`) REFERENCES `tbl_ruang` (`ID_RUANG`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table bingo.tbl_pelajaran: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_pelajaran` DISABLE KEYS */;
REPLACE INTO `tbl_pelajaran` (`ID_PELAJARAN`, `ID_RUANG`, `NAMA_PELAJARAN`, `KETERANGAN_PELAJARAN`) VALUES
	(1, 1, 'Matematika', 'Matematika Semester 1');
/*!40000 ALTER TABLE `tbl_pelajaran` ENABLE KEYS */;

-- Dumping structure for table bingo.tbl_ruang
CREATE TABLE IF NOT EXISTS `tbl_ruang` (
  `ID_RUANG` int(11) NOT NULL AUTO_INCREMENT,
  `ID_INSTANSI_PENDIDIKAN` int(11) DEFAULT NULL,
  `NAMA_RUANG` text DEFAULT NULL,
  `KETERANGAN_RUANG` text DEFAULT NULL,
  PRIMARY KEY (`ID_RUANG`),
  KEY `FK_HAS_RUANG` (`ID_INSTANSI_PENDIDIKAN`),
  CONSTRAINT `FK_HAS_RUANG` FOREIGN KEY (`ID_INSTANSI_PENDIDIKAN`) REFERENCES `tbl_instansi_pendidikan` (`ID_INSTANSI_PENDIDIKAN`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table bingo.tbl_ruang: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_ruang` DISABLE KEYS */;
REPLACE INTO `tbl_ruang` (`ID_RUANG`, `ID_INSTANSI_PENDIDIKAN`, `NAMA_RUANG`, `KETERANGAN_RUANG`) VALUES
	(1, 1, 'G3.1', 'Ruang Semester 1');
/*!40000 ALTER TABLE `tbl_ruang` ENABLE KEYS */;

-- Dumping structure for table bingo.tbl_soal_pelajaran
CREATE TABLE IF NOT EXISTS `tbl_soal_pelajaran` (
  `ID_SOAL_PELAJARAN` int(11) NOT NULL,
  `ID_PELAJARAN` int(11) DEFAULT NULL,
  `TEKS_SOAL_PELAJARAN` longtext DEFAULT NULL,
  PRIMARY KEY (`ID_SOAL_PELAJARAN`),
  KEY `FK_HAS_SOAL` (`ID_PELAJARAN`),
  CONSTRAINT `FK_HAS_SOAL` FOREIGN KEY (`ID_PELAJARAN`) REFERENCES `tbl_pelajaran` (`ID_PELAJARAN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table bingo.tbl_soal_pelajaran: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_soal_pelajaran` DISABLE KEYS */;
REPLACE INTO `tbl_soal_pelajaran` (`ID_SOAL_PELAJARAN`, `ID_PELAJARAN`, `TEKS_SOAL_PELAJARAN`) VALUES
	(0, 1, 'Coba soal ini ya?');
/*!40000 ALTER TABLE `tbl_soal_pelajaran` ENABLE KEYS */;

-- Dumping structure for table bingo.tbl_status_instansi
CREATE TABLE IF NOT EXISTS `tbl_status_instansi` (
  `ID_STATUS_INSTANSI` int(11) NOT NULL AUTO_INCREMENT,
  `TEKS_STATUS_INSTANSI` varchar(20) DEFAULT NULL,
  `KETERANGAN_STATUS_INSTANSI` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_STATUS_INSTANSI`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table bingo.tbl_status_instansi: ~4 rows (approximately)
/*!40000 ALTER TABLE `tbl_status_instansi` DISABLE KEYS */;
REPLACE INTO `tbl_status_instansi` (`ID_STATUS_INSTANSI`, `TEKS_STATUS_INSTANSI`, `KETERANGAN_STATUS_INSTANSI`) VALUES
	(1, 'Perguruan Tinggi', 'Semacam Universitas dan lain sebagainya'),
	(2, 'Sekolah', 'Seperti SMA, SMP, SD dan sejenisnya');
/*!40000 ALTER TABLE `tbl_status_instansi` ENABLE KEYS */;

-- Dumping structure for table bingo.tbl_status_user
CREATE TABLE IF NOT EXISTS `tbl_status_user` (
  `ID_STATUS_USER` int(11) NOT NULL AUTO_INCREMENT,
  `TEKS_STATUS_USER` varchar(50) DEFAULT NULL,
  `KETRANGAN__STATUS_USER` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_STATUS_USER`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table bingo.tbl_status_user: ~1 rows (approximately)
/*!40000 ALTER TABLE `tbl_status_user` DISABLE KEYS */;
REPLACE INTO `tbl_status_user` (`ID_STATUS_USER`, `TEKS_STATUS_USER`, `KETRANGAN__STATUS_USER`) VALUES
	(1, 'Administrator', 'Admin User'),
	(2, 'Operator', 'Operator Instansi Pendidikan'),
	(3, 'Mahasiswa', 'Anggota instansi pendidikan status Perguruan Tinggi'),
	(4, 'Siswa', 'Anggota instansi pendidikan status Sekolah');
/*!40000 ALTER TABLE `tbl_status_user` ENABLE KEYS */;

-- Dumping structure for table bingo.tbl_user
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `ID_USER` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USER_DETAILS` int(11) DEFAULT NULL,
  `ID_TBL_LOGIN` int(11) DEFAULT NULL,
  `ID_STATUS_USER` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_USER`),
  KEY `FK_HAS_DETAIL` (`ID_USER_DETAILS`),
  KEY `FK_HAS_LOGIN` (`ID_TBL_LOGIN`),
  KEY `FK_HAS_STATUS_USER` (`ID_STATUS_USER`),
  CONSTRAINT `FK_HAS_DETAIL` FOREIGN KEY (`ID_USER_DETAILS`) REFERENCES `tbl_user_details` (`ID_USER_DETAILS`),
  CONSTRAINT `FK_HAS_LOGIN` FOREIGN KEY (`ID_TBL_LOGIN`) REFERENCES `tbl_login` (`ID_TBL_LOGIN`),
  CONSTRAINT `FK_HAS_STATUS_USER` FOREIGN KEY (`ID_STATUS_USER`) REFERENCES `tbl_status_user` (`ID_STATUS_USER`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table bingo.tbl_user: ~1 rows (approximately)
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
REPLACE INTO `tbl_user` (`ID_USER`, `ID_USER_DETAILS`, `ID_TBL_LOGIN`, `ID_STATUS_USER`) VALUES
	(1, 1, 1, 1),
	(2, 2, 2, 2);
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;

-- Dumping structure for table bingo.tbl_user_details
CREATE TABLE IF NOT EXISTS `tbl_user_details` (
  `ID_USER_DETAILS` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_USER` varchar(30) DEFAULT NULL,
  `ALAMAT_USER` varchar(255) DEFAULT NULL,
  `JK_USER` int(11) DEFAULT NULL,
  `TELP_USER` varchar(13) DEFAULT NULL,
  `EMAIL_USER` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_USER_DETAILS`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table bingo.tbl_user_details: ~1 rows (approximately)
/*!40000 ALTER TABLE `tbl_user_details` DISABLE KEYS */;
REPLACE INTO `tbl_user_details` (`ID_USER_DETAILS`, `NAMA_USER`, `ALAMAT_USER`, `JK_USER`, `TELP_USER`, `EMAIL_USER`) VALUES
	(1, 'Administrator', 'asas', 1, '1212', 'admin@admin.com'),
	(2, 'Operator', 'operator alamat', 1, '081339381191', 'admin@admin.com');
/*!40000 ALTER TABLE `tbl_user_details` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
