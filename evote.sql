-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 06:58 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evote`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(3, 'zea', '202cb962ac59075b964b07152d234b70'),
(5, 'takaradjiman', '202cb962ac59075b964b07152d234b70'),
(6, 'wripolinema', '91790b77be7da0371f14f96d364c2af8');

-- --------------------------------------------------------

--
-- Table structure for table `calon`
--

CREATE TABLE `calon` (
  `id_calon` int(11) NOT NULL,
  `no_urut` varchar(2) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `visi` text,
  `misi` text,
  `foto` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`id_calon`, `no_urut`, `nama`, `kelas`, `visi`, `misi`, `foto`) VALUES
(4, '01', 'Faris Ikhlasul Haq', 'TI 2D', 'Menjadi wadah bagi mahasiswa untuk mengembangkan segala potensi yang ada sehingga terbentuk mahasiswa yg cerdas, kreatif, dinamis,  berprestasi, berakhlak mulia dan menjaga nama baik kampus menuju kampus yang Unggul di tingkat nasional', '1. Melaksanakan kegiatan yang dapat meningkatkan hubungan positif antar dosen dan mahasiswa\r\n<br>\r\n2. Menciptakan kondisi lingkungan kampus yang kondusif dalam belajar, untuk menghasilkan mahasiswa yang berkompetensi dan mandiri\r\n<br>\r\n3. Mengaktifkan kelompok belajar dari masing-masing kelas\r\n<br>\r\n4. Memaksimalkan peran mahasiswa dalam menjaga kebersihan lingkungan\r\n<br>\r\n5. Memajukan kualitas ekskul di sekolah agar banyak diminati mahasiswa dan mampu mengukir prestasi diluar kampus', '34.jpg'),
(5, '02', 'Mochamad Farid Maulana', 'TI 2D', 'Menjadi wadah bagi mahasiswa untuk mengembangkan segala potensi yang ada sehingga terbentuk mahasiswa yg cerdas, kreatif, dinamis,  berprestasi, berakhlak mulia dan menjaga nama baik kampus menuju kampus yang Unggul di tingkat nasional', '1. Melaksanakan kegiatan yang dapat meningkatkan hubungan positif antar dosen dan mahasiswa\r\n<br>\r\n2. Menciptakan kondisi lingkungan kampus yang kondusif dalam belajar, untuk menghasilkan mahasiswa yang berkompetensi dan mandiri\r\n<br>\r\n3. Mengaktifkan kelompok belajar dari masing-masing kelas\r\n<br>\r\n4. Memaksimalkan peran mahasiswa dalam menjaga kebersihan lingkungan\r\n<br>\r\n5. Memajukan kualitas ekskul di sekolah agar banyak diminati mahasiswa dan mampu mengukir prestasi diluar kampus\r\n<br>', '41.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `harapan`
--

CREATE TABLE `harapan` (
  `id_harapan` int(11) NOT NULL,
  `id_pemilih` int(11) DEFAULT NULL,
  `id_calon` int(11) DEFAULT NULL,
  `harapan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harapan`
--

INSERT INTO `harapan` (`id_harapan`, `id_pemilih`, `id_calon`, `harapan`) VALUES
(8, 632, 5, 'Maju terus'),
(9, 633, 4, 'AA'),
(10, 634, 5, 'a'),
(13, 637, 5, 'Jayaa'),
(14, 640, 4, 'SEMANGAT');

-- --------------------------------------------------------

--
-- Table structure for table `pemilih`
--

CREATE TABLE `pemilih` (
  `id_pemilih` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pin` varchar(10) DEFAULT NULL,
  `isVote` enum('Y','N') DEFAULT 'N',
  `vote_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilih`
--

INSERT INTO `pemilih` (`id_pemilih`, `nama`, `email`, `pin`, `isVote`, `vote_time`) VALUES
(632, 'Naufal Yudhistira', 'naufalyudhistira12@gmail.com', 'VBPMAZ', 'Y', '2020-11-20 14:50:54'),
(633, 'Muhammad Misbaqul Ulum', 'muhammadmisbaqul@gmail.com', 'XNMTTA', 'Y', '2020-11-20 15:28:50'),
(634, 'Irfak Wahyudi', 'irfakwahyudi2@gmail.com', 'FQ47GT', 'Y', '2020-11-20 15:28:50'),
(635, 'Nida Auliyah Mufida', 'nidaauliyah@gmail.com', 'CXYPJN', 'Y', '2020-11-20 15:28:25'),
(636, 'Ulvia Yulianti', 'ulvia.yulianti@gmail.com', 'OQDKPY', 'Y', '2020-11-20 15:28:25'),
(637, 'Gopla', 'yudhistna@gmail.com', 'EF1FOP', 'Y', '2020-11-21 11:28:02'),
(638, 'Azalea', 'yudhistn@gmail.com', 'NYJZOP', 'N', NULL),
(639, 'Yudhistira', 'nblaze12@gmail.com', 'N1XT3R', 'N', NULL),
(640, 'Irfak Wahyudi', 'irfakwahyudi2@gmail.com', 'SG2ER7', 'Y', '2020-11-21 12:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `id_vote` int(11) NOT NULL,
  `id_calon` int(11) NOT NULL,
  `jml_vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`id_vote`, `id_calon`, `jml_vote`) VALUES
(1, 4, 11),
(2, 5, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`id_calon`);

--
-- Indexes for table `harapan`
--
ALTER TABLE `harapan`
  ADD PRIMARY KEY (`id_harapan`),
  ADD KEY `FK_harapan_pemilih` (`id_pemilih`),
  ADD KEY `FK_harapan_calon` (`id_calon`);

--
-- Indexes for table `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`id_pemilih`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`id_vote`),
  ADD KEY `id_calon` (`id_calon`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `calon`
--
ALTER TABLE `calon`
  MODIFY `id_calon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `harapan`
--
ALTER TABLE `harapan`
  MODIFY `id_harapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `id_pemilih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=641;
--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `id_vote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `harapan`
--
ALTER TABLE `harapan`
  ADD CONSTRAINT `FK_harapan_calon` FOREIGN KEY (`id_calon`) REFERENCES `calon` (`id_calon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_harapan_pemilih` FOREIGN KEY (`id_pemilih`) REFERENCES `pemilih` (`id_pemilih`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `FK_vote_calon` FOREIGN KEY (`id_calon`) REFERENCES `calon` (`id_calon`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
