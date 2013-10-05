-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2013 at 08:19 AM
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
(1, 'Semiloka Koster Gereja', 'Juni 2013', 'Pekerjaan sebagai koster gereja adalah panggilan dari ALlah sendiri. Alkitab menggunakan dst.', 'peserta memiliki pemahaman dan penghayatan tentang perannya dst.', '40 koster gkj dan gki', '17 juni 2013 : Pembukaan, seminar, dst\r\n18 Juni 2013 : talkshow, dst\r\n\r\n', 'aula LPPS', 'Pdt. Wisnu Sapto Nugroho', 'Rp 350.000,00', '', NULL),
(5, 'Kerja Praktek', 'September-November 2013', 'asdasd', '', '', '', '', '', '', 'JadwalGN1112_21Des.pdf', '5');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

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
(23, 'kukuh abcdef aaaaa', 'aldyanto abc aaaa', 'kukuh@gmail.com', '123');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=48 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `fasilitas_id`, `client_id`, `details`, `start`, `end`, `status`, `active`, `created`, `modified`, `all_day`, `nama_acara`) VALUES
(40, 2, '', 'ga tau mbuh', '2013-10-04 07:42:00', '2013-10-04 09:42:00', 'Masih pesan', 1, '2013-10-03', '2013-10-03', '0', 'coba'),
(43, 2, '19', 'ga tau', '2013-10-04 07:42:00', '2013-10-04 09:42:00', 'Masih pesan', 1, '2013-10-03', '2013-10-03', '0', 'coba 123'),
(44, 2, '20', 'ga tau adsadas', '2013-10-04 07:42:00', '2013-10-04 09:42:00', 'Masih pesan', 1, '2013-10-03', '2013-10-03', '0', 'coba'),
(46, 2, '22', 'dafuq aaa', '2013-10-04 07:42:00', '2013-10-04 09:42:00', 'Masih pesan', 1, '2013-10-03', '2013-10-03', '0', 'fuck you aaa'),
(47, 2, '23', 'ga tau adsadasaaa', '2013-10-04 07:42:00', '2013-10-04 09:42:00', 'Masih pesan', 1, '2013-10-03', '2013-10-03', '0', 'cobadef aaaa');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `nama`, `keterangan`, `biaya`, `color`, `created`, `modified`) VALUES
(2, 'Aula', 'Aula berkapasitas 50 orang', '50rb/4 jam', 'Blue', '2013-10-02 09:31:19', '2013-10-02 09:31:19'),
(3, 'Wisma', 'adadadada', '100rb/hari', 'Red', '2013-10-02 16:08:45', '2013-10-02 16:08:45'),
(4, 'coba tetetes', 'coba coba', 'dada', 'Orange', '2013-10-03 01:59:10', '2013-10-03 07:23:36'),
(5, 'Wisma', 'aaaa', 'bbb', 'Blue', '2013-10-03 07:05:44', '2013-10-03 07:23:45'),
(6, 'kantor', 'ga disewakan', 'gratis', 'Green', '2013-10-03 09:38:00', '2013-10-03 09:38:00'),
(7, 'kantor', 'ga disewakan', 'gratis', 'Green', '2013-10-03 09:56:25', '2013-10-03 09:56:25'),
(8, 'kantor', 'ga disewakan', '', '', '2013-10-03 10:06:16', '2013-10-03 10:06:16'),
(9, 'coba tampilan', 'ga disewakan', 'gratis', 'Gray', '2013-10-03 10:52:18', '2013-10-03 10:52:18'),
(10, 'kantor adada', 'ga disewakan', 'gratis', 'Black', '2013-10-03 10:59:26', '2013-10-03 10:59:26'),
(11, 'coba lagi', 'dor', 'dor', 'Brown', '2013-10-03 11:14:07', '2013-10-03 11:14:07');

-- --------------------------------------------------------

--
-- Table structure for table `galeries`
--

CREATE TABLE IF NOT EXISTS `galeries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `facility_id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo_dir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `berita_id` int(11) DEFAULT NULL,
  `buku_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `galeries`
--

INSERT INTO `galeries` (`id`, `facility_id`, `photo`, `photo_dir`, `berita_id`, `buku_id`) VALUES
(11, 3, 'up.png', '11', NULL, NULL),
(12, 3, 'down.png', '12', NULL, NULL),
(13, 4, 'os-eclipse-android-a4.pdf', '13', NULL, NULL),
(14, 4, 'os-eclipse-android-a4.pdf', '14', NULL, NULL),
(15, 6, 'arrow up.png', '15', NULL, NULL),
(16, 6, 'down.png', '16', NULL, NULL),
(17, 7, 'arrow up.png', '17', NULL, NULL),
(18, 7, 'down.png', '18', NULL, NULL),
(19, 9, 'Bebek Panggang.jpg', '19', NULL, NULL),
(20, 9, 'Bebek Panggang.jpg', '20', NULL, NULL),
(21, 10, 'Bebek Panggang.jpg', '21', NULL, NULL),
(22, 10, 'Bebek Panggang.jpg', '22', NULL, NULL),
(23, 11, 'arrow up.png', '23', NULL, NULL),
(24, 11, 'arrow up.png', '24', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
