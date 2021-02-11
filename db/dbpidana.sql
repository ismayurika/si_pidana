-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Feb 2021 pada 04.20
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbpidana`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pidanakhusus`
--

CREATE TABLE IF NOT EXISTS `tbl_pidanakhusus` (
`id` int(5) NOT NULL,
  `nomor_pidana` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kasuss` varchar(100) NOT NULL,
  `ket` text NOT NULL,
  `tgl_kejadian` text NOT NULL,
  `tmpt_kejadian` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tbl_pidanakhusus`
--

INSERT INTO `tbl_pidanakhusus` (`id`, `nomor_pidana`, `nama`, `kasuss`, `ket`, `tgl_kejadian`, `tmpt_kejadian`) VALUES
(1, 1, 'ATIKAH NURAIDAH TANJUNG', 'narkotika', 'pengedar', '2021-01-06', 'Jln.Cokro'),
(3, 123, 'nina', 'pornografi', 'sebagai pelaku', '2021-01-10', 'Hotel Himalaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pidanaumum`
--

CREATE TABLE IF NOT EXISTS `tbl_pidanaumum` (
`id` int(5) NOT NULL,
  `no_perkara` varchar(50) NOT NULL,
  `nama_terpidana` varchar(100) NOT NULL,
  `kasus` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal_kejadian` text NOT NULL,
  `tempat_kejdian` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data untuk tabel `tbl_pidanaumum`
--

INSERT INTO `tbl_pidanaumum` (`id`, `no_perkara`, `nama_terpidana`, `kasus`, `keterangan`, `tanggal_kejadian`, `tempat_kejdian`) VALUES
(17, '00006', 'RISKA AMIRAH', 'penipuan', 'PENIPUAN RUMAH', '2020-01-07', 'SIJABUT'),
(22, '144', 'RIZA UMAMI', 'penipuan', 'UANG', '2021-01-07', 'TANJUNG'),
(23, '1665', 'putri saragih', 'penipuan', 'penganiayaan teman sendiri', '2021-02-01', 'kisaran timur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '827ccb0eea8a706c4c34a16891f84e7b', 'devk@gmail.com', 'Developer Kampoeng', 1, 'Staff Kepaniteraan Hukum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pidanakhusus`
--
ALTER TABLE `tbl_pidanakhusus`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pidanaumum`
--
ALTER TABLE `tbl_pidanaumum`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pidanakhusus`
--
ALTER TABLE `tbl_pidanakhusus`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_pidanaumum`
--
ALTER TABLE `tbl_pidanaumum`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
