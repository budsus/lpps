-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2013 at 07:06 AM
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
  `poster` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `poster_dir` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deskripsi_singkat` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `nama_kegiatan`, `penyelenggaraan`, `latar_belakang`, `tujuan`, `sasaran`, `jadwal_kegiatan`, `tempat`, `penanggung_jawab`, `biaya_pendaftaran`, `brosur`, `brosur_dir`, `poster`, `poster_dir`, `deskripsi_singkat`) VALUES
(1, 'Semiloka Koster Gereja', 'Juni 2013', 'Pekerjaan sebagai koster gereja adalah panggilan dari ALlah sendiri. Alkitab menggunakan dst.', 'peserta memiliki pemahaman dan penghayatan tentang perannya dst.', '40 koster gkj dan gki', '17 juni 2013 : Pembukaan, seminar, dst\r\n18 Juni 2013 : talkshow, dst\r\n\r\n', 'aula LPPS', 'Pdt. Wisnu Sapto Nugroho', 'Rp 350.000,00', '', NULL, NULL, NULL, 'pendidikan koster yang diselenggarakan tanggal 17-18 Juli dengan biaya pendaftaran Rp 350.000'),
(5, 'Kerja Praktek', 'September-November 2013', 'asdasd', '', '', '', '', '', '', 'JadwalGN1112_21Des.pdf', '5', NULL, NULL, ''),
(10, 'Kegiatan baru', 'ahaha', '', '', '', '', '', '', '', NULL, '', NULL, NULL, ''),
(11, 'Youth Celebration 2013', 'September 2013', '', '', '', '', '', '', '', NULL, '', '1174577_4667825713809_917341112_n.jpg', '11', 'Acara tahunan anak muda GPdI Hagios Family');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
