-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 10 Des 2013 pada 13.03
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `lpps`
--
CREATE DATABASE IF NOT EXISTS `lpps` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `lpps`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `activities`
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
-- Dumping data untuk tabel `activities`
--

INSERT INTO `activities` (`id`, `nama_kegiatan`, `tgl_pelaksanaan`, `latar_belakang`, `tujuan`, `sasaran`, `jadwal_kegiatan`, `tempat`, `penanggung_jawab`, `biaya_pendaftaran`, `brosur`, `brosur_dir`, `poster`, `poster_dir`, `deskripsi_singkat`, `deadline`, `max_peserta`, `participant_count`) VALUES
(1, 'Semiloka Koster Gereja', 'Juni 2013', 'Pekerjaan sebagai koster gereja adalah panggilan dari Allah sendiri. Alkitab menggunakan dst.', 'peserta memiliki pemahaman dan penghayatan tentang perannya dst.', '45 koster gkj dan gki', '17 juni 2013 : Pembukaan, seminar, dst18 Juni 2013 : talkshow, dst', 'aula LPPS', 'Pdt. Wisnu Sapto Nugroho', 'Rp 350.000,00', '', NULL, NULL, NULL, 'pendidikan koster yang diselenggarakan tanggal 17-18 Juli dengan biaya pendaftaran Rp 350.000', '0000-00-00 00:00:00', 0, 4),
(5, 'Kerja Praktek', 'September-November 2013', 'asdasd', '', '', '', '', '', '', 'JadwalGN1112_21Des.pdf', '5', NULL, NULL, 'Kerja Praktek yang dilakukan oleh mahasiswa UKDW untuk membuat aplikasi website LPPS.', '0000-00-00 00:00:00', 0, 0),
(11, 'Youth Celebration 2013', 'September 2013', '', '', '', '', '', '', '', NULL, '', '1174577_4667825713809_917341112_n.jpg', '11', 'Acara tahunan anak muda GPdI Hagios Family', '0000-00-00 00:00:00', 0, 0),
(13, 'Ibadah Natal Pemuda Remaja', 'Desember 2013', 'untuk memperingati hari kelahiran Tuhan Yesus Kristus, maka ....', 'Merayakan hari raya Natal', 'Jemaat Pemuda dan Remaja', 'Ibadah pada tanggal 21 Desember 2013 pkl 17.00', 'Gedung utama gereja', 'Agung', '-', NULL, '', NULL, '', 'Ibadah Kaum Pemuda dan Remaja untuk memperingati hari lahirnya Tuhan Yesus Kristus yang akan diselenggarakan pada tanggal 21 Desember 2013', '2013-12-28 05:52:00', 15, 0),
(14, 'Ibadah Tahun Baru', '31 Desember 2013', '', '', '', '', '', '', '', NULL, '', NULL, '', 'ibadah awal tahun', '2013-12-25 19:31:00', 2, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `albums`
--

INSERT INTO `albums` (`id`, `nama`) VALUES
(2, 'Berita'),
(6, 'Rapat Bulan November'),
(7, 'tes 3'),
(8, 'LPPS 2'),
(9, 'ukdw');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bookers`
--

CREATE TABLE IF NOT EXISTS `bookers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_depan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nama_belakang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telepon` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `bookers`
--

INSERT INTO `bookers` (`id`, `nama_depan`, `nama_belakang`, `email`, `telepon`) VALUES
(2, 'agung', 'triatmaja', 'gungbear@gmail.com', 12345),
(3, 'abc', 'def', 'gung@gmail.com', 1234565),
(4, '1234', '5667', 'coba@gmail.com', 12345),
(5, 'agung', 'triatmaja', 'agung@gmail.com', 274617410);

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cover` varchar(100) DEFAULT NULL,
  `cover_dir` varchar(100) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `cover`, `cover_dir`, `judul`, `keterangan`, `harga`, `created`, `modified`) VALUES
(15, 'burning-aces-wallpapers_16919_1600x1200.jpg', '15', 'Buku Aces', 'Karangan saya', '4000', '2013-11-04 05:13:48', '2013-11-04 05:13:48'),
(16, 'dora.png', '16', 'Buku A', 'Karangan saya', '10000', '2013-11-04 06:04:35', '2013-11-04 06:04:35'),
(17, NULL, '', 'Buku LPPS', 'Karangan LPPS asli', '150000', '2013-11-18 09:10:34', '2013-11-18 09:10:34'),
(18, 'Debar.jpg', '18', 'Buku LPPS2 Baru', 'Karangan LPPS ', '20000', '2013-11-18 09:11:00', '2013-12-09 06:03:54'),
(19, 'Dew.jpg', '19', 'Buku UKDW', 'UKDW Baru', '1.500.000', '2013-12-09 06:04:22', '2013-12-09 06:04:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bulletins`
--

CREATE TABLE IF NOT EXISTS `bulletins` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cover` varchar(100) DEFAULT NULL,
  `cover_dir` varchar(100) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `keterangan` varchar(1000) DEFAULT NULL,
  `harga` varchar(30) DEFAULT NULL,
  `periode` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `bulletins`
--

INSERT INTO `bulletins` (`id`, `cover`, `cover_dir`, `judul`, `keterangan`, `harga`, `periode`, `created`, `modified`) VALUES
(14, 'hydrangea 2.jpg', '14', 'Hydrangea Bulletin', 'Karangan LPPS', '5000', '2009-2013', '2013-11-10 16:31:20', '2013-11-10 16:31:20'),
(15, 'BlackCandle.jpg', '15', 'Buletin LPPS', 'Nomor buletin 12', '50000', 'Januari 2014-Februari2014', '2013-11-18 09:11:43', '2013-11-18 09:11:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buybulletins`
--

CREATE TABLE IF NOT EXISTS `buybulletins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bulletin_id` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `notelp` varchar(255) DEFAULT NULL,
  `keterangantambahan` varchar(255) DEFAULT NULL,
  `statuspembelian` varchar(100) NOT NULL DEFAULT 'Belum Konfirmasi',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `buybulletins`
--

INSERT INTO `buybulletins` (`id`, `bulletin_id`, `nama`, `notelp`, `keterangantambahan`, `statuspembelian`) VALUES
(5, '14', 'Carlo', '1234', '10 buah', 'Belum Konfirmasi'),
(6, '15', 'Yose', '123456', 'Dikirim ke UKDW', 'Pending'),
(7, '15', 'Agung', '909090', 'Dikirim ke alun2', 'Belum Konfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buys`
--

CREATE TABLE IF NOT EXISTS `buys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` varchar(15) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `notelp` varchar(255) DEFAULT NULL,
  `keterangantambahan` varchar(255) DEFAULT NULL,
  `statuspembelian` varchar(100) NOT NULL DEFAULT 'Belum Konfirmasi',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `buys`
--

INSERT INTO `buys` (`id`, `book_id`, `nama`, `notelp`, `keterangantambahan`, `statuspembelian`) VALUES
(12, '16', 'Yose', '777', '1 eksemplar', 'Batal'),
(13, '15', 'agung', '0818277717', 'harga?', 'Belum Konfirmasi'),
(14, '18', 'Yose', '12345', 'Beli 2 buku', 'Belum Konfirmasi'),
(15, '18', 'Yose', '123456', 'Beli 2 buku\r\nDIkirim ke ukdw', 'Batal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `nama_depan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_belakang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=50 ;

--
-- Dumping data untuk tabel `clients`
--

INSERT INTO `clients` (`id`, `event_id`, `nama_depan`, `nama_belakang`, `email`, `telepon`) VALUES
(36, 73, 'tes', 'tes', 'tes@gmail.com', '12345'),
(37, 74, 'agung', 'triatmaja', 'agung@gmail.com', '631233'),
(41, 78, 'tes', 'da', 'sad@gmail.com', 'sad12ad'),
(42, 79, 'tes', 'da', 'sad@gmail.com', 'sad12ad'),
(43, 80, 'tes', 'da', 'sad@gmail.com', 'sad12ad'),
(44, 81, 'tes', 'da', 'sad@gmail.com', 'sad12ad'),
(45, 82, 'tes', 'da', 'sad@gmail.com', 'sad12ad'),
(46, 83, 'tes', 'da', 'sad@gmail.com', 'sad12ad'),
(47, 84, 'tes', 'da', 'sad@gmail.com', 'sad12ad'),
(48, 85, 'tes ', 'gg', 'sad@gmail.com', '12345'),
(49, 86, 'coba pesan', 'coba pesan', 'carlo@gmail.com', '08182111111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fasilitas_id` int(11) NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Scheduled',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `all_day` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `nama_acara` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `terbayar` int(11) DEFAULT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=87 ;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `fasilitas_id`, `details`, `start`, `end`, `status`, `active`, `created`, `modified`, `all_day`, `nama_acara`, `terbayar`, `jumlah`) VALUES
(74, 2, 'tes', '2013-11-18 10:00:00', '2013-11-18 00:00:00', 'Uang muka', 1, '2013-11-18', '2013-11-18', '0', 'pesan', 10000, 0),
(73, 12, 'aaaa', '2013-11-18 06:53:00', '2013-11-18 09:53:00', 'Uang muka', 1, '2013-11-18', '2013-11-18', '0', 'tes', 20000, 0),
(84, 2, 'asda', '2013-11-19 13:20:00', '2013-11-19 13:20:00', 'Belum Verifikasi', 1, '2013-11-19', '2013-11-19', '', 'tes verifikasi 2', NULL, 0),
(85, 2, 'asd', '2013-12-09 04:30:00', '2013-12-09 06:30:00', 'Sudah Verifikasi', 1, '2013-12-09', '2013-12-09', '0', 'aa', 0, 1),
(86, 2, 'coba pesan', '2013-12-09 03:00:00', '2013-12-09 07:55:00', 'Sudah Verifikasi', 1, '2013-12-09', '2013-12-09', '0', 'carlo', 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_types`
--

CREATE TABLE IF NOT EXISTS `event_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `facilities`
--

CREATE TABLE IF NOT EXISTS `facilities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `biaya` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=35 ;

--
-- Dumping data untuk tabel `facilities`
--

INSERT INTO `facilities` (`id`, `nama`, `keterangan`, `biaya`, `color`, `jumlah`, `created`, `modified`) VALUES
(2, 'Aula', 'Aula berkapasitas 37 orang', '70rb/4 jam', 'Black', 1, '2013-10-02 09:31:19', '2013-12-09 05:56:06'),
(12, 'Wisma', 'Wisma terdiri dari 50 kamar', '100rb/hari', 'Black', 10, '2013-10-06 17:37:41', '2013-11-18 05:54:17'),
(13, 'Meeting room', 'ada proyektor', '50rb/jam', 'Black', 1, '2013-10-06 17:46:07', '2013-11-11 15:24:05'),
(33, 'asda', 'dsad', 'sada', 'Blue', 1, '2013-11-23 10:46:12', '2013-11-23 10:46:12'),
(34, 'fasilitas baru', 'coba', '50.000', 'Blue', 1, '2013-12-09 05:57:31', '2013-12-09 05:57:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeries`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `galeries`
--

INSERT INTO `galeries` (`id`, `facility_id`, `photo`, `photo_dir`, `keterangan`, `berita_id`, `buku_id`) VALUES
(1, 27, '973594_10200698012644368_993822990_n.jpg', '1', '', NULL, NULL),
(7, 30, 'BlackRhino.jpg', '7', '', NULL, NULL),
(8, 31, 'CiteInternationaleLyon.jpg', '8', '', NULL, NULL),
(11, 12, 'BirdsvilleRaces.jpg', '11', '', NULL, NULL),
(12, 2, 'DaffodilDay.jpg', '12', '', NULL, NULL),
(13, 13, 'FederalElection.jpg', '13', '', NULL, NULL),
(14, 32, 'Externsteine.jpg', '14', '', NULL, NULL),
(15, 12, 'Dogs.jpg', '15', '', NULL, NULL),
(16, 33, 'Lion.jpg', '16', '', NULL, NULL),
(18, 34, 'BlackRhino.jpg', '18', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galerifotos`
--

CREATE TABLE IF NOT EXISTS `galerifotos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo_dir` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) NOT NULL,
  `berita_id` int(11) NOT NULL,
  `buku_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `galerifotos`
--

INSERT INTO `galerifotos` (`id`, `album_id`, `photo`, `photo_dir`, `keterangan`, `berita_id`, `buku_id`) VALUES
(1, 1, 'bravesite me.jpg', '1', '', 0, NULL),
(2, 1, 'nature made.JPG', '2', '', 0, NULL),
(3, 1, 'Logo Final-01.jpg', '3', '', 0, NULL),
(4, 2, 'large-guy-on-blue.fw.png', '4', '', 0, NULL),
(5, 2, '400dpiLogo.jpg', '5', '', 0, NULL),
(6, 6, 'path-logo.png', '6', '', 0, NULL),
(7, 6, '3d-wallpaperslogo-wallpapers-marvelous-logo-wallpaper-background.png', '7', '', 0, NULL),
(8, 7, 'BlackRhino.jpg', '8', '', 0, NULL),
(9, 7, 'CorinthCanal.jpg', '9', '', 0, NULL),
(10, 7, 'CiteInternationaleLyon.jpg', '10', '', 0, NULL),
(11, 8, 'Lorikeet.jpg', '11', '', 0, NULL),
(12, 8, 'Dogs.jpg', '12', '', 0, NULL),
(13, 8, 'Dew.jpg', '13', '', 0, NULL),
(14, 9, 'FederalElection.jpg', '14', '', 0, NULL),
(15, 9, 'FoxFurNebula.jpg', '15', '', 0, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gkis`
--

CREATE TABLE IF NOT EXISTS `gkis` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `pdt1` varchar(255) NOT NULL,
  `pdt2` varchar(255) NOT NULL,
  `pdt3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `gkis`
--

INSERT INTO `gkis` (`id`, `nama`, `alamat`, `email`, `telp`, `fax`, `pdt1`, `pdt2`, `pdt3`) VALUES
(1, 'GKI Kwitang Jakarta', 'Jl Kwitang 28, Jakarta - 10420', 'kantor@kikwitang.or.id', '', '', 'Pdt Ir Lithos Sitorus Pane, Sth', 'Pdt Agus Mulyono , Mth', 'Pdt Guruh Jatmiko Septavianus, Mth'),
(2, 'GKI Rawamangun Jakarta', 'Jl Tenggiri 5A, Rawamangun, Jakarta Timur - 13220', 'gki_rawamangun@yahoo.com', '', '', 'Pdt Martua Risman Kurniadi', '', ''),
(3, 'GKI Menteng Jakarta', 'Jl Latuharhary 7, Jakarta Pusat - 10310', 'gki_menteng_jakarta@yahoo.com', '(021)3924182', '(021)3144929', 'Pdt Dr Daniel Susanto', '', ''),
(4, 'GKI Kebon Bawang Jakarta', 'Jl Swa Sembada Barat VII/41 Tanjung Priok, Jakarta Utara - 14320', 'ASD@GMAIL.COM', '(021)4352740', '', 'Pdt Drs Anton M Pardosi', '', ''),
(5, 'GKI Gembrong Jakarta', 'Galur Jaya 23-25, Rawa Tengah Jakarta - 10530', 'gkigb@netscape.net', '(021)4253137', '(021)4252871', 'Pdt S.M. Mertawati, SMTh', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gkjs`
--

CREATE TABLE IF NOT EXISTS `gkjs` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `pdt1` varchar(255) NOT NULL,
  `pdt2` varchar(255) NOT NULL,
  `pdt3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `gkjs`
--

INSERT INTO `gkjs` (`id`, `nama`, `alamat`, `telp`, `fax`, `pdt1`, `pdt2`, `pdt3`) VALUES
(2, 'G K J TANJUNGPRIOK ', 'Jl. Cilincing Raya No. 50, Cilincing, JAKARTA - 14120', 'Telp.: (021) 4400459', '', 'Pdt. A. Untung Wiyono, S.Th, D.Min.', 'Pdt. Wisnu Tri Handayani, S.SI.', ''),
(3, 'G K J PANGKALANJATI ', 'Jl. Harapan Jaya no. 18,  RT 003 RW 012, Kelurahan Cipinang Melayu, JAKARTA TIMUR - 13620', '(021) 8629366', '(021) 85510969', 'Pdt. Aris Widaryanto, S.Th, M.Min', '', ''),
(4, 'G K J BEKASI ', 'Jl. Jatiluhur Raya RT. 001/RW. 013 Kompl. Pengairan, Kel. Jakasampurna Kec. Bekasi Selatan, KOTIF BEKASI', '(021) 8840760', ' (021) 88964675', 'Pdt. Oktavianus Heri PN, S.si.', 'Pdt. Kartika Astuti, S.Si.', ''),
(5, 'G K J PONDOK GEDE ', 'd.a. Jl. Rambutan,  Gang Peka RT 03 RW 02, Dusun I, Kampung Sawah,  Kelurahan Jatimurni, Kecamatan Pondok Melati  BEKASI â€“ JABAR - 17414', ' (021) 84596862', ' (021) 70330522', 'Pdt. Samuel Silo Samekto, S.Th', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materials`
--

CREATE TABLE IF NOT EXISTS `materials` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(1000) DEFAULT NULL,
  `keterangan` varchar(30) DEFAULT NULL,
  `materipembinaan_dir` varchar(100) DEFAULT NULL,
  `event` varchar(50) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `filesize` int(11) DEFAULT NULL,
  `filetype` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `materials`
--

INSERT INTO `materials` (`id`, `judul`, `keterangan`, `materipembinaan_dir`, `event`, `tahun`, `filesize`, `filetype`, `created`) VALUES
(14, 'adams2e_ppt_05.ppt', 'materi1', '14', 'AdvenNatal', '2014', NULL, NULL, '2013-11-25 06:24:14'),
(15, 'adams2e_ppt_06.ppt', 'materi2', '15', 'AdvenNatal', '2015', NULL, NULL, '2013-11-25 06:24:29'),
(16, 'adams2e_ppt_20.ppt', 'materi keluarga1', '16', 'BulanKeluarga', '2015', NULL, NULL, '2013-11-25 06:41:16'),
(17, 'adams2e_ppt_05.ppt', 'materi1', '17', 'Paskah', '2014', NULL, NULL, '2013-11-25 17:07:27'),
(18, 'Angklung.docx', 'tes', '18', 'Pentakosta', '2015', NULL, NULL, '2013-12-09 03:52:33'),
(19, 'Angklung.docx', 'File Angklung', '19', 'Paskah', '2016', NULL, NULL, '2013-12-09 06:06:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `participants`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `participants`
--

INSERT INTO `participants` (`id`, `nama_lengkap`, `alamat`, `telp`, `activity_id`, `metode_pembayaran`, `bank_tujuan`, `nominal_transfer`, `status_pendaftaran`) VALUES
(1, 'agung triatmaja sutanto', 'ringroad barat no.1', '613233', 1, NULL, NULL, NULL, ''),
(3, 'Jordan Rudess', 'New York', '02194949435', 1, NULL, NULL, NULL, ''),
(4, 'Mike Mangini', 'New York', '84726722', 1, NULL, NULL, NULL, ''),
(5, 'joni', 'gunung kidul', '2210', 1, '', '', NULL, 'sudah dikonfirmasi'),
(6, 'unggun', 'coba ', '12345', 14, NULL, NULL, 1234556, 'belum dikonfirmasi'),
(7, 'agung', 'ringroad bara no.1', '123', 14, NULL, NULL, 50000, 'belum dikonfirmasi'),
(8, 'yose', 'kraton', '021', 14, 'Transfer', 'BRI', 300000, 'data ditampung'),
(9, 'unggung parananda', 'jalan gejayan', '0812345678', 14, 'Transfer', 'BCA', 100, 'data ditampung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penguruses`
--

CREATE TABLE IF NOT EXISTS `penguruses` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `unsur` varchar(255) NOT NULL,
  `gereja` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `penguruses`
--

INSERT INTO `penguruses` (`id`, `nama`, `jabatan`, `unsur`, `gereja`, `email`) VALUES
(1, 'Ibu Sih Hariris Warsito Utomo, S.H.', 'Ketua Pengurus', 'GKJ', 'GKJ Sarimulyo', 'sihii@gmail.com'),
(2, 'Pdt. Drs. Purboyo W. Susilaradeya ', 'Wakil Ketua Pengurus', 'GKI SW Jateng ', 'GKI Pondok Indah ', 'pws@bit.net'),
(3, 'Pdt. Em. Paulus Sardjono, S.Th.', 'Sekretaris ', 'GKI SW Jateng', 'GKI Pajajaran Magelang ', 'paulus_sardjono@yahoo.com'),
(4, 'Drs. Bambang Hediono, MBA ', 'Bendahara ', 'GKJ', 'GKJ Mergangsan ', 'bhediono@ukdw.ac.id'),
(5, 'Ir. Lukas Endro Widagdo ', 'Anggota ', 'GKI SW Jateng ', 'GKI Ngupasan ', 'rexendro@yahoo.com'),
(6, 'Budi Susanto M.T', 'Ketua', 'GKI-diragukan', 'GKI Gejayan', 'evata_paulusli@yahoo.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `isi` mediumtext NOT NULL,
  `latar` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `profiles`
--

INSERT INTO `profiles` (`id`, `isi`, `latar`) VALUES
(1, 'LPP Sinode adalah lembaga gerejawi yang bergerak dalam bidang pembinaan dan pengaderan gereja. Lembaga ini didirikan dan diselenggarakan oleh Sinode Gereja-gereja Kristen Jawa dan Gereja Kristen Indonesia Sinode Wilayah Jawa Tengah. Tugas LPP Sinode adalah membantu Gereja-gereja Kristen khususnya GKJ dan GKI SW Jateng dalam membina warga gereja dan menyiapkan pemimpin-pemimpin gereja. Dalam melaksanakan tugasnya, LPP Sinode bekerjasama dengan lembaga gerejawi lainnya, juga universitas Kristen, bahkan lembaga-lembaga keagamaan non-Kristen. Tenaga-tenaga pembinaan yang bekerja penuh waktu di LPP Sinode adalah Pendeta-pendeta Tugas Khusus Sinode GKJ dan GKI SW Jateng. Fasilitas pendukung yang dimiliki adalah kantor, aula,  ruang rapat, dan tempat penginapan untuk para peserta pembinaan. LPPS memiliki kebun binatang.', 'Latar belakang LPPS disini ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sahabats`
--

CREATE TABLE IF NOT EXISTS `sahabats` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `gereja` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `sahabats`
--

INSERT INTO `sahabats` (`id`, `nama`, `gereja`, `pekerjaan`, `kontak`) VALUES
(2, 'Carlo Wardhana s', 'GKI Gejayan', 'Mahasiswa', 'carlo@gmail.com'),
(3, 'Andreas', 'GKI Gejayan', 'Mahasiswa', '08188888888');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staffs`
--

CREATE TABLE IF NOT EXISTS `staffs` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `golongan` varchar(20) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data untuk tabel `staffs`
--

INSERT INTO `staffs` (`id`, `nama`, `golongan`, `jabatan`, `email`) VALUES
(21, 'Pdt. Darsono Eko Noegroho, M.T', 'B', 'PPP â€“ LPP Sinode GKJ dan GKI SW Jateng', 'pdt_den@yahoo.com'),
(22, 'sds', '', '', ''),
(23, 'gugugug', '', '', ''),
(26, 'Pdt. Darsono Eko Noegroho, M.T', 'A', 'Manajer Baru', 'unggun@gmail.com'),
(27, 'Pdt. Widi Artanto, M.Th.', 'B', 'PPP â€“ LPP Sinode GKJ dan GKI SW Jateng', 'widiartanto@ymail.co'),
(28, 'Pdt. Wisnu Sapto Nugroho, S.Th', 'B', 'PPP â€“ LPP Sinode GKJ dan GKI SW Jateng', 'winusapto@yahoo.com'),
(29, 'Ambar Widyastuti Sabatiningsih', 'C', 'Administrasi Keuangan', 'widyastuti.ambar@yma'),
(30, 'Heny Wahyuning Wulandari', 'C', 'Administrasi Kantor', 'henywahyuning@ymail.'),
(31, 'Pdt. Em. Widdwissoeli MS, M.Mi', 'D', '', 'widdw@yahoo.com'),
(32, 'Soegito', 'E', 'Kepala kantor', ''),
(33, 'Dr Mindiwati Hehanusa ', 'A', 'Direktur', 'murti_resti@yahoo.co');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempevents`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `tempevents`
--

INSERT INTO `tempevents` (`id`, `fasilitas_id`, `booker_id`, `details`, `start`, `end`, `status`, `active`, `created`, `modified`, `all_day`, `nama_acara`) VALUES
(5, 2, 2, 'asdada', '2013-10-20 06:28:00', '2013-10-20 11:28:00', 'Masih pesan', 1, '2013-10-20', '2013-10-20', '', 'coba pesan aula'),
(6, 12, 3, 'asdad', '2013-11-11 15:22:00', '2013-11-11 19:22:00', 'Masih pesan', 1, '2013-11-11', '2013-11-11', '', 'abc'),
(7, 13, 4, '1234', '2013-11-11 15:23:00', '2013-11-11 17:23:00', 'Masih pesan', 1, '2013-11-11', '2013-11-11', '', 'coba'),
(8, 12, 5, 'coba pesan', '2013-11-12 09:26:00', '2013-11-12 10:26:00', 'Masih pesan', 1, '2013-11-12', '2013-11-12', '', 'tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
