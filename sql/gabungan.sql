-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2013 at 06:19 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lpps`
--
CREATE DATABASE IF NOT EXISTS `lpps` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `lpps`;

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kegiatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `penyelenggaraan` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `latar_belakang` text COLLATE utf8_unicode_ci,
  `tujuan` text COLLATE utf8_unicode_ci,
  `sasaran` text COLLATE utf8_unicode_ci,
  `jadwal_kegiatan` text COLLATE utf8_unicode_ci,
  `tempat` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `penanggung_jawab` text COLLATE utf8_unicode_ci,
  `biaya_pendaftaran` text COLLATE utf8_unicode_ci,
  `brosur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brosur_dir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `nama_kegiatan`, `penyelenggaraan`, `latar_belakang`, `tujuan`, `sasaran`, `jadwal_kegiatan`, `tempat`, `penanggung_jawab`, `biaya_pendaftaran`, `brosur`, `brosur_dir`) VALUES
(1, 'Semiloka Koster Gereja', 'agustus 2013', 'Pekerjaan sebagai koster gereja adalah panggilan dari ALlah sendiri. Alkitab menggunakan dst.', 'peserta memiliki pemahaman dan penghayatan tentang perannya dst.', 'mahasiswa labil sekali', '17 juni 2013 : Pembukaan, seminar, dst18 Juni 2013 : talkshow, dst', 'aula LPPS', 'Pdt. Wisnu Sapto Nugroho', 'Rp 350.000,00', '', NULL),
(5, 'Kerja Praktek', 'September-November 2013', 'asdasd', '', '', '', '', '', '', 'JadwalGN1112_21Des.pdf', '5');

-- --------------------------------------------------------

--
-- Table structure for table `bookers`
--

CREATE TABLE IF NOT EXISTS `bookers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_depan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nama_belakang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telepon` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `bookers`
--

INSERT INTO `bookers` (`id`, `nama_depan`, `nama_belakang`, `email`, `telepon`) VALUES
(1, 'sby', 'bambang edit', 'gungbearedit@gmail.com', 123456),
(2, 'agung', 'triatmaja', 'gungbear@gmail.com', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `judul`, `keterangan`, `harga`, `created`, `modified`) VALUES
(3, 'Buku gambar A3', 'buku gambar monokrom', 'Rp 10000', '2013-09-27 11:10:15', '2013-10-07 06:10:35'),
(4, 'Kancil', 'Buku tulis', '500', '2013-09-30 08:31:45', '2013-09-30 08:31:45'),
(5, 'Barang kumal sekali', 'Buku-buku 2', '5000', '2013-09-30 08:33:23', '2013-10-07 06:09:37');

-- --------------------------------------------------------

--
-- Table structure for table `bulletins`
--

CREATE TABLE IF NOT EXISTS `bulletins` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `keterangan` varchar(1000) DEFAULT NULL,
  `harga` varchar(30) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `bulletins`
--

INSERT INTO `bulletins` (`id`, `judul`, `keterangan`, `harga`, `created`, `modified`) VALUES
(11, 'Bulletin kancil', 'binantang jalangan', '4000', '2013-10-02 09:33:27', '2013-10-03 08:07:40');

-- --------------------------------------------------------

--
-- Table structure for table `buys`
--

CREATE TABLE IF NOT EXISTS `buys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(15) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `notelp` varchar(255) DEFAULT NULL,
  `keterangantambahan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `buys`
--

INSERT INTO `buys` (`id`, `book_id`, `nama`, `notelp`, `keterangantambahan`) VALUES
(7, 0, 'Carlo', '1245', '1 buah'),
(11, 0, 'carlo', '1234', 'bagus bukunya'),
(12, 0, 'carlo', '1234', 'bagus bukunya'),
(15, 4, 'kukuh', '444', 'kukuh beli kancil');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_depan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_belakang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `nama_depan`, `nama_belakang`, `email`, `telepon`) VALUES
(16, 'kukuh', 'aldyanto', 'kukuh@gmail.com', '123'),
(17, 'adadada', 'aaaaa', 'gungbear@yahoo.co.id', '123'),
(18, 'asdadasdasdas', 'tttt', 'gungbear@yahoo.co.id', '123456'),
(19, 'kukuh', 'aldyanto 123', 'kukuh@gmail.com', '123'),
(20, 'kukuh abc', 'aldyanto abc', 'kukuh@gmail.com', '123'),
(21, 'kukuh tetetetetete', 'aldyanto', 'kukuh@gmail.com', '123'),
(22, 'kukuh abcdefghj', 'aldyanto abcdeffgh', 'kukuh@gmail.com', '123'),
(23, 'kukuh abcdef aaaaa', 'aldyanto abc aaaa', 'kukuh@gmail.com', '123'),
(24, 'kukuh', 'aldyanto', 'kukuh@gmail.com', '12345'),
(25, 'agung', 'triatmaja', 'gungbear@yahoo.co.id', '555666');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fasilitas_id` int(11) NOT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Scheduled',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `all_day` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `nama_acara` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=50 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `fasilitas_id`, `client_id`, `details`, `start`, `end`, `status`, `active`, `created`, `modified`, `all_day`, `nama_acara`) VALUES
(49, 2, '25', 'tes', '2013-10-10 16:55:00', '2013-10-10 18:55:00', 'Masih pesan', 1, '2013-10-08', '2013-10-08', '', 'pelatihan meditasi'),
(48, 12, '24', 'latihan semedi antar anggota lpps', '2013-10-12 04:14:00', '2013-10-12 06:14:00', 'Masih pesan', 1, '2013-10-06', '2013-10-15', '0', 'Pelatihan semedi');

-- --------------------------------------------------------

--
-- Table structure for table `event_types`
--

CREATE TABLE IF NOT EXISTS `event_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE IF NOT EXISTS `facilities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `biaya` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `nama`, `keterangan`, `biaya`, `color`, `created`, `modified`) VALUES
(2, 'Aula', 'Aula berkapasitas 30 orang', '50rb/4 jam', 'Blue', '2013-10-02 09:31:19', '2013-10-20 06:28:36'),
(12, 'Wisma', 'Wisma terdiri dari 50 kamar', '100rb/hari', 'Gray', '2013-10-06 17:37:41', '2013-10-20 06:04:12'),
(13, 'Meeting room', 'ada proyektor', '50rb/jam', 'Blue', '2013-10-06 17:46:07', '2013-10-20 06:05:30');

-- --------------------------------------------------------

--
-- Table structure for table `galeries`
--

CREATE TABLE IF NOT EXISTS `galeries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `facility_id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo_dir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `berita_id` int(11) DEFAULT NULL,
  `buku_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=56 ;

--
-- Dumping data for table `galeries`
--

INSERT INTO `galeries` (`id`, `facility_id`, `photo`, `photo_dir`, `keterangan`, `berita_id`, `buku_id`) VALUES
(42, 2, 'compressed.jpg', '42', '', NULL, NULL),
(44, 12, 'P1010500.JPG', '44', '', NULL, NULL),
(45, 13, 'P1010495.JPG', '45', '', NULL, NULL),
(46, 13, 'P1010500.JPG', '46', '', NULL, NULL),
(47, 0, 'P1010505.JPG', '47', '', NULL, NULL),
(49, 2, 'P1010502.JPG', '49', '', NULL, NULL),
(51, 12, 'P1010496.JPG', '51', '', NULL, NULL),
(53, 12, 'P1010504.JPG', '53', '', NULL, NULL),
(54, 13, 'P1010528.JPG', '54', '', NULL, NULL),
(55, 13, 'tes.jpg', '55', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE IF NOT EXISTS `materials` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(1000) DEFAULT NULL,
  `keterangan` varchar(30) DEFAULT NULL,
  `materipembinaan_dir` varchar(100) DEFAULT NULL,
  `filesize` int(11) DEFAULT NULL,
  `filetype` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `judul`, `keterangan`, `materipembinaan_dir`, `filesize`, `filetype`, `created`, `modified`) VALUES
(6, 'doa.docx', 'hai', '6', NULL, NULL, '2013-10-03 03:02:14', '2013-10-07 06:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telp` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `activity_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tempevents`
--

CREATE TABLE IF NOT EXISTS `tempevents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fasilitas_id` int(11) NOT NULL,
  `booker_id` int(11) NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Scheduled',
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `all_day` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `nama_acara` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tempevents`
--

INSERT INTO `tempevents` (`id`, `fasilitas_id`, `booker_id`, `details`, `start`, `end`, `status`, `active`, `created`, `modified`, `all_day`, `nama_acara`) VALUES
(3, 13, 1, 'tes edit 4', '2013-10-20 06:05:00', '2013-10-20 09:05:00', 'Masih pesan', 1, '2013-10-20', '2013-10-20', '0', 'coba pesan'),
(5, 2, 2, 'asdada', '2013-10-20 06:28:00', '2013-10-20 11:28:00', 'Masih pesan', 1, '2013-10-20', '2013-10-20', '', 'coba pesan aula');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
