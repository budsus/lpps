-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2013 at 02:37 AM
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
  `tgl_pelaksanaan` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
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
  `deadline` datetime NOT NULL,
  `max_peserta` int(50) NOT NULL,
  `participant_count` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `nama_kegiatan`, `tgl_pelaksanaan`, `latar_belakang`, `tujuan`, `sasaran`, `jadwal_kegiatan`, `tempat`, `penanggung_jawab`, `biaya_pendaftaran`, `brosur`, `brosur_dir`, `poster`, `poster_dir`, `deskripsi_singkat`, `deadline`, `max_peserta`, `participant_count`) VALUES
(1, 'Semiloka Koster Gereja', 'Juni 2013', 'Pekerjaan sebagai koster gereja adalah panggilan dari Allah sendiri. Alkitab menggunakan dst.', 'peserta memiliki pemahaman dan penghayatan tentang perannya dst.', '45 koster gkj dan gki', '17 juni 2013 : Pembukaan, seminar, dst18 Juni 2013 : talkshow, dst', 'aula LPPS', 'Pdt. Wisnu Sapto Nugroho', 'Rp 350.000,00', '', NULL, NULL, NULL, 'pendidikan koster yang diselenggarakan tanggal 17-18 Juli dengan biaya pendaftaran Rp 350.000', '0000-00-00 00:00:00', 0, 4),
(5, 'Kerja Praktek', 'September-November 2013', 'asdasd', '', '', '', '', '', '', 'JadwalGN1112_21Des.pdf', '5', NULL, NULL, 'Kerja Praktek yang dilakukan oleh mahasiswa UKDW untuk membuat aplikasi website LPPS.', '0000-00-00 00:00:00', 0, 0),
(11, 'Youth Celebration 2013', 'September 2013', '', '', '', '', '', '', '', NULL, '', '1174577_4667825713809_917341112_n.jpg', '11', 'Acara tahunan anak muda GPdI Hagios Family', '0000-00-00 00:00:00', 0, 0),
(13, 'Ibadah Natal Pemuda Remaja', 'Desember 2013', 'untuk memperingati hari kelahiran Tuhan Yesus Kristus, maka ....', 'Merayakan hari raya Natal', 'Jemaat Pemuda dan Remaja', 'Ibadah pada tanggal 21 Desember 2013 pkl 17.00', 'Gedung utama gereja', 'Agung', '-', NULL, '', NULL, '', 'Ibadah Kaum Pemuda dan Remaja untuk memperingati hari lahirnya Tuhan Yesus Kristus yang akan diselenggarakan pada tanggal 21 Desember 2013', '2013-11-25 19:35:00', 3, 0),
(14, 'Ibadah Tahun Baru', '31 Desember 2013', '', '', '', '', '', '', '', NULL, '', NULL, '', 'ibadah awal tahun', '2013-12-25 19:31:00', 2, 0);

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
  `metode_pembayaran` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bank_tujuan` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nominal_transfer` int(50) DEFAULT NULL,
  `status_pendaftaran` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `nama_lengkap`, `alamat`, `telp`, `activity_id`, `metode_pembayaran`, `bank_tujuan`, `nominal_transfer`, `status_pendaftaran`) VALUES
(1, 'agung triatmaja sutanto', 'ringroad barat no.1', '613233', 1, NULL, NULL, NULL, ''),
(3, 'Jordan Rudess', 'New York', '02194949435', 1, NULL, NULL, NULL, ''),
(4, 'Mike Mangini', 'New York', '84726722', 1, NULL, NULL, NULL, ''),
(5, 'joni', 'gunung kidul', '2210', 1, '', '', NULL, 'sudah dikonfirmasi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
