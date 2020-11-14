-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.1.35-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for evote
CREATE DATABASE IF NOT EXISTS `evote` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `evote`;

-- Dumping structure for table evote.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table evote.admin: ~3 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
	(2, 'hana', '21232f297a57a5a743894a0e4a801fc3'),
	(3, 'zea', '202cb962ac59075b964b07152d234b70'),
	(5, 'takaradjiman', '202cb962ac59075b964b07152d234b70');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table evote.calon
CREATE TABLE IF NOT EXISTS `calon` (
  `id_calon` int(11) NOT NULL AUTO_INCREMENT,
  `no_urut` varchar(2) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `visimisi` text,
  `foto` text,
  PRIMARY KEY (`id_calon`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table evote.calon: ~3 rows (approximately)
/*!40000 ALTER TABLE `calon` DISABLE KEYS */;
INSERT INTO `calon` (`id_calon`, `no_urut`, `nama`, `kelas`, `visimisi`, `foto`) VALUES
	(4, '01', 'Muhammad Misbaqul Ulum', 'MI 3B', 'Jos', 'user1-128x128.jpg'),
	(5, '02', 'Irfak Wahyudi', 'MI 3B', 'Gandos', 'user8-128x128.jpg'),
	(6, '03', 'Naufal Yudhistira', 'MI-3B', 'Man Jadda Wajadda', '31.jpg');
/*!40000 ALTER TABLE `calon` ENABLE KEYS */;

-- Dumping structure for table evote.harapan
CREATE TABLE IF NOT EXISTS `harapan` (
  `id_harapan` int(11) NOT NULL AUTO_INCREMENT,
  `id_pemilih` int(11) DEFAULT NULL,
  `id_calon` int(11) DEFAULT NULL,
  `harapan` text,
  PRIMARY KEY (`id_harapan`),
  KEY `FK_harapan_pemilih` (`id_pemilih`),
  KEY `FK_harapan_calon` (`id_calon`),
  CONSTRAINT `FK_harapan_calon` FOREIGN KEY (`id_calon`) REFERENCES `calon` (`id_calon`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_harapan_pemilih` FOREIGN KEY (`id_pemilih`) REFERENCES `pemilih` (`id_pemilih`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table evote.harapan: ~6 rows (approximately)
/*!40000 ALTER TABLE `harapan` DISABLE KEYS */;
INSERT INTO `harapan` (`id_harapan`, `id_pemilih`, `id_calon`, `harapan`) VALUES
	(1, 7, 5, 'menang'),
	(2, 8, 4, 'Jaya'),
	(3, 9, 4, 'josss'),
	(4, 10, 5, 'Selalu dihati'),
	(5, 11, 5, 'Semangat\r\n'),
	(6, 12, 6, 'mantab');
/*!40000 ALTER TABLE `harapan` ENABLE KEYS */;

-- Dumping structure for table evote.pemilih
CREATE TABLE IF NOT EXISTS `pemilih` (
  `id_pemilih` int(11) NOT NULL AUTO_INCREMENT,
  `pin` varchar(10) DEFAULT NULL,
  `isVote` enum('Y','N') DEFAULT 'N',
  PRIMARY KEY (`id_pemilih`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- Dumping data for table evote.pemilih: ~20 rows (approximately)
/*!40000 ALTER TABLE `pemilih` DISABLE KEYS */;
INSERT INTO `pemilih` (`id_pemilih`, `pin`, `isVote`) VALUES
	(7, 'JTLVUU', 'Y'),
	(8, 'LXBF80', 'Y'),
	(9, 'GX1FQK', 'Y'),
	(10, 'FPZJYY', 'Y'),
	(11, 'NDIFA5', 'Y'),
	(12, 'SJPBQO', 'Y'),
	(13, 'MGBQOQ', 'N'),
	(14, 'FEP2AW', 'N'),
	(15, 'FYYFMR', 'N'),
	(16, 'RRD4LJ', 'N'),
	(17, '0PMSTB', 'N'),
	(18, 'W24ZND', 'N'),
	(19, 'UXBPOV', 'N'),
	(20, 'I95JUH', 'N'),
	(21, 'B24IYT', 'N'),
	(22, 'YBET3L', 'N'),
	(23, 'UDFHIP', 'N'),
	(24, 'CEM3MX', 'N'),
	(25, 'G4ZWZK', 'N'),
	(26, 'XPMSDC', 'N');
/*!40000 ALTER TABLE `pemilih` ENABLE KEYS */;

-- Dumping structure for table evote.vote
CREATE TABLE IF NOT EXISTS `vote` (
  `id_vote` int(11) NOT NULL AUTO_INCREMENT,
  `id_calon` int(11) NOT NULL,
  `jml_vote` int(11) NOT NULL,
  PRIMARY KEY (`id_vote`),
  KEY `id_calon` (`id_calon`),
  CONSTRAINT `FK_vote_calon` FOREIGN KEY (`id_calon`) REFERENCES `calon` (`id_calon`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table evote.vote: ~3 rows (approximately)
/*!40000 ALTER TABLE `vote` DISABLE KEYS */;
INSERT INTO `vote` (`id_vote`, `id_calon`, `jml_vote`) VALUES
	(1, 4, 2),
	(2, 5, 3),
	(3, 6, 1);
/*!40000 ALTER TABLE `vote` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
