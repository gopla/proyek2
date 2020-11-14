-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 05:20 AM
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
(2, 'hana', '202cb962ac59075b964b07152d234b70'),
(3, 'zea', '202cb962ac59075b964b07152d234b70'),
(5, 'takaradjiman', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `calon`
--

CREATE TABLE `calon` (
  `id_calon` int(11) NOT NULL,
  `no_urut` varchar(2) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `visimisi` text,
  `foto` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`id_calon`, `no_urut`, `nama`, `kelas`, `visimisi`, `foto`) VALUES
(4, '01', 'Muhammad Misbaqul Ulum', 'MI 3B', 'Jos', 'user1-128x128.jpg'),
(5, '02', 'Irfak Wahyudi', 'MI 3B', 'Gandos', 'user8-128x128.jpg');

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

-- --------------------------------------------------------

--
-- Table structure for table `pemilih`
--

CREATE TABLE `pemilih` (
  `id_pemilih` int(11) NOT NULL,
  `pin` varchar(10) DEFAULT NULL,
  `isVote` enum('Y','N') DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilih`
--

INSERT INTO `pemilih` (`id_pemilih`, `pin`, `isVote`) VALUES
(7, 'JTLVUU', 'N'),
(8, 'LXBF80', 'N'),
(9, 'GX1FQK', 'N'),
(10, 'FPZJYY', 'N'),
(11, 'NDIFA5', 'N'),
(12, 'SJPBQO', 'N'),
(13, 'MGBQOQ', 'N'),
(14, 'FEP2AW', 'N'),
(15, 'FYYFMR', 'N'),
(16, 'RRD4LJ', 'N');

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
(1, 4, 14);

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
  ADD PRIMARY KEY (`id_vote`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `calon`
--
ALTER TABLE `calon`
  MODIFY `id_calon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `harapan`
--
ALTER TABLE `harapan`
  MODIFY `id_harapan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `id_pemilih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `id_vote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `harapan`
--
ALTER TABLE `harapan`
  ADD CONSTRAINT `FK_harapan_calon` FOREIGN KEY (`id_calon`) REFERENCES `calon` (`id_calon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_harapan_pemilih` FOREIGN KEY (`id_pemilih`) REFERENCES `pemilih` (`id_pemilih`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
