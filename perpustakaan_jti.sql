-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 15, 2017 at 06:17 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpustakaan_jti`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `idBuku` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL DEFAULT '0',
  `id_pengarang` int(11) NOT NULL,
  `id_penerbit` int(11) NOT NULL,
  `judul` varchar(80) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(80) NOT NULL,
  PRIMARY KEY (`idBuku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`idBuku`, `id_kategori`, `id_pengarang`, `id_penerbit`, `judul`, `deskripsi`, `foto`) VALUES
(1, 1, 1, 1, 'Cepat dan Mudah membuat Master PHP', 'Blablabla', 'php1.jpg'),
(2, 1, 2, 2, 'PHP Master', 'blablabla', 'php2.png'),
(3, 4, 2, 3, 'Cara Cepat dan Mudah belajar Pemrogaraman C#', 'Belajar Pemrograman C#', 'c2.jpg'),
(6, 7, 1, 2, 'Belajar Bahasa Pascal dengan cepat', 'Pemrograman bahasa Pascal', '0000002811.jpg'),
(7, 7, 2, 2, 'Bahasa Pascal itu mudah', 'Pemrograman bahasa Pascal', '00000028111.jpg'),
(8, 7, 2, 3, 'Mengenal bahasa pascal lebih jauh', 'Pemrograman bahasa Pascal', '00000028112.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namaKategori` varchar(60) NOT NULL,
  `deskripsiKategori` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `namaKategori` (`namaKategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `namaKategori`, `deskripsiKategori`) VALUES
(1, 'PHP', 'Pemrograman bahasa PHP'),
(2, 'Java', 'Bahasa Pemrograman Java'),
(3, 'C', 'Bahasa Pemrograman C'),
(4, 'C#', 'Bahasa Pemrograman C#'),
(5, 'HTML', 'Bahasa Pemrograman HTML'),
(6, 'SQL', 'Bahasa Pemrograman SQL'),
(7, 'Pascal', 'Bahasa Pemrograman Pascal');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `fk_buku` int(11) NOT NULL,
  `fk_user` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'periode_peminjaman',
  PRIMARY KEY (`id_peminjaman`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tgl_pinjam`, `tgl_kembali`, `fk_buku`, `fk_user`, `status`) VALUES
(15, '2017-06-13', '2017-06-27', 1, 7, 'periode_peminjaman'),
(16, '2017-06-13', '2017-06-27', 2, 7, 'periode_peminjaman'),
(17, '2017-06-13', '2017-06-27', 3, 7, 'periode_peminjaman'),
(18, '2017-06-13', '2017-06-27', 6, 7, 'periode_peminjaman'),
(19, '2017-06-13', '2017-06-27', 7, 7, 'periode_peminjaman'),
(20, '2017-06-14', '2017-06-28', 2, 8, 'periode_peminjaman'),
(21, '2017-06-14', '2017-06-28', 6, 8, 'periode_peminjaman'),
(22, '2017-06-14', '2017-06-28', 2, 8, 'periode_peminjaman'),
(23, '2017-06-14', '2017-06-28', 8, 8, 'periode_peminjaman'),
(24, '2017-06-14', '2017-06-28', 3, 8, 'periode_peminjaman');

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE IF NOT EXISTS `penerbit` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `namaPenerbit` varchar(255) NOT NULL,
  `alamatPenerbit` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id`, `namaPenerbit`, `alamatPenerbit`, `no_telp`) VALUES
(1, 'M. Dwi Aldi Rizaldi', 'Jalan Alpaka nomor 49 Malang', '08563576959'),
(2, 'Sinar Jaya', 'Jalan Terang Sekali', '08563576959'),
(3, 'Gelap Gemilang', 'Jalan Gelap Bercahaya', '0874657483'),
(4, 'Sinar Jaya', 'Jl. Alpaka nomor 49 Malang', '08563576959');

-- --------------------------------------------------------

--
-- Table structure for table `pengarang`
--

CREATE TABLE IF NOT EXISTS `pengarang` (
  `namaPengarang` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pengarang`
--

INSERT INTO `pengarang` (`namaPengarang`, `id`) VALUES
('Dendy Falan H.', 1),
('Qotrunnada Widadu', 2),
('Muhammad Dwi Aldi Rizaldi', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `konfirmasi_password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `konfirmasi_password`, `nama`, `nim`, `alamat`, `no_telp`, `tgl_lahir`, `foto`, `level`) VALUES
(6, 'aldyncit08', 'a67d7cf3c4b78712fa33063c7c7220cc', 'a67d7cf3c4b78712fa33063c7c7220cc', 'Muhammad Dwi Aldi Rizaldi', '1541180140', 'Jl. Alpaka nomor 49 Malang', '08563576959', '1997-04-20', '9a1c4aca2645178cca4d402d668289da.jpg', 'admin'),
(7, 'aldy', '3b2fb88da8c86baef513883eb2f8fa37', '3b2fb88da8c86baef513883eb2f8fa37', 'Muhammad Dwi Aldi Rizaldi', '1541180140', 'Jl. Alpaka nomor 49 Malang', '08563576959', '1997-04-20', 'sanchez-cropped_12hota18sth8y1azznb9bzdv4g.jpg', 'member'),
(8, 'emon', 'b8cc4edba5145d41f9da01d85f459aef', 'b8cc4edba5145d41f9da01d85f459aef', 'emon', '1541180011', 'Jl. Raya', '0813319696', '2017-06-05', 'framework-icon1.png', 'member');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
