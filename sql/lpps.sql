-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 17 Nov 2013 pada 05.03
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
-- Dumping data untuk tabel `activities`
--

INSERT INTO `activities` (`id`, `nama_kegiatan`, `penyelenggaraan`, `latar_belakang`, `tujuan`, `sasaran`, `jadwal_kegiatan`, `tempat`, `penanggung_jawab`, `biaya_pendaftaran`, `brosur`, `brosur_dir`, `poster`, `poster_dir`, `deskripsi_singkat`) VALUES
(1, 'Semiloka Koster Gereja', 'Juni 2013', 'Pekerjaan sebagai koster gereja adalah panggilan dari ALlah sendiri. Alkitab menggunakan dst.', 'peserta memiliki pemahaman dan penghayatan tentang perannya dst.', '40 koster gkj dan gki', '17 juni 2013 : Pembukaan, seminar, dst\r\n18 Juni 2013 : talkshow, dst\r\n\r\n', 'aula LPPS', 'Pdt. Wisnu Sapto Nugroho', 'Rp 350.000,00', '', NULL, NULL, NULL, 'pendidikan koster yang diselenggarakan tanggal 17-18 Juli dengan biaya pendaftaran Rp 350.000'),
(5, 'Kerja Praktek', 'September-November 2013', 'asdasd', '', '', '', '', '', '', 'JadwalGN1112_21Des.pdf', '5', NULL, NULL, ''),
(10, 'Kegiatan baru', 'ahaha', '', '', '', '', '', '', '', NULL, '', NULL, NULL, ''),
(11, 'Youth Celebration 2013', 'September 2013', '', '', '', '', '', '', '', NULL, '', '1174577_4667825713809_917341112_n.jpg', '11', 'Acara tahunan anak muda GPdI Hagios Family');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `cover`, `cover_dir`, `judul`, `keterangan`, `harga`, `created`, `modified`) VALUES
(15, 'burning-aces-wallpapers_16919_1600x1200.jpg', '15', 'Buku Aces', 'Karangan saya', '4000', '2013-11-04 05:13:48', '2013-11-04 05:13:48'),
(16, 'dora.png', '16', 'Buku A', 'Karangan saya', '10000', '2013-11-04 06:04:35', '2013-11-04 06:04:35'),
(17, 'patrickbio.jpg', '17', 'Contoh Buku 1', 'Contoh Keterangan Buku 1', '20000', '2013-11-16 17:04:46', '2013-11-16 18:29:46');

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
(15, '200px-Spongebob-squarepants.png', '15', 'Contoh Buletin 1', 'Contoh Keterangan Buletin 1', '10000', 'Desember 2013 - Januari 2014', '2013-11-16 17:17:02', '2013-11-16 18:58:35');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `buybulletins`
--

INSERT INTO `buybulletins` (`id`, `bulletin_id`, `nama`, `notelp`, `keterangantambahan`, `statuspembelian`) VALUES
(5, '14', 'Carlo', '1234', '10 buah', 'Belum Konfirmasi');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `buys`
--

INSERT INTO `buys` (`id`, `book_id`, `nama`, `notelp`, `keterangantambahan`, `statuspembelian`) VALUES
(12, '16', 'Yose', '777', '1 eksemplar', 'Batal'),
(13, '15', 'agung', '0818277717', 'harga?', 'Belum Konfirmasi'),
(14, '17', 'carlo', '617410', 'cobaya', 'Belum Konfirmasi');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=37 ;

--
-- Dumping data untuk tabel `clients`
--

INSERT INTO `clients` (`id`, `event_id`, `nama_depan`, `nama_belakang`, `email`, `telepon`) VALUES
(35, 61, 'Kukuh', 'aldyanto', 'kukuh@gmail.com', '617410');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=73 ;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `fasilitas_id`, `details`, `start`, `end`, `status`, `active`, `created`, `modified`, `all_day`, `nama_acara`, `terbayar`) VALUES
(61, 12, 'acara menginap bersama', '2013-11-14 08:58:00', '2013-11-14 10:58:00', 'Sudah Verifikasi', 1, '2013-11-14', '2013-11-17', '0', 'Menginap', 0);

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
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data untuk tabel `facilities`
--

INSERT INTO `facilities` (`id`, `nama`, `keterangan`, `biaya`, `color`, `created`, `modified`) VALUES
(2, 'Aula', 'Aula berkapasitas 37 orang', '50rb/4 jam', 'Blue', '2013-10-02 09:31:19', '2013-11-17 04:53:42'),
(12, 'Wisma', 'Wisma terdiri dari 50 kamar', '100rb/hari', 'Gray', '2013-10-06 17:37:41', '2013-11-14 04:20:25'),
(13, 'Meeting room', 'ada proyektor', '50rb/jam', 'Blue', '2013-10-06 17:46:07', '2013-11-11 15:24:05');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `galeries`
--

INSERT INTO `galeries` (`id`, `facility_id`, `photo`, `photo_dir`, `keterangan`, `berita_id`, `buku_id`) VALUES
(1, 27, '973594_10200698012644368_993822990_n.jpg', '1', '', NULL, NULL);

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
(4, 'GKI Kebon Bawang Jakarta', 'Jl Swa Sembada Barat VII/41 Tanjung Priok, Jakarta Utara - 14320', '', '(021)4352740', '', 'Pdt Drs Anton M Pardosi', '', ''),
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
  `filesize` int(11) DEFAULT NULL,
  `filetype` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `materials`
--

INSERT INTO `materials` (`id`, `judul`, `keterangan`, `materipembinaan_dir`, `filesize`, `filetype`, `created`, `modified`) VALUES
(6, 'doa.docx', 'doa', '6', NULL, NULL, '2013-10-03 03:02:14', '2013-11-12 06:57:25'),
(7, 'BORANG edit.docx', 'borang', '7', NULL, NULL, '2013-10-14 14:31:51', '2013-11-12 06:57:15'),
(8, 'Ch5.pdf', 'Contoh Materi Pembinaan 1', '8', NULL, NULL, '2013-11-16 17:55:19', '2013-11-16 19:07:25');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `participants`
--

INSERT INTO `participants` (`id`, `nama_lengkap`, `alamat`, `telp`, `activity_id`) VALUES
(1, 'agung triatmaja', 'ringroad bara no.1', '613233', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `penguruses`
--

INSERT INTO `penguruses` (`id`, `nama`, `jabatan`, `unsur`, `gereja`, `email`) VALUES
(1, 'Ibu Sih Hariris Warsito Utomo, S.H.', 'Ketua Pengurus', 'GKJ', 'GKJ Sarimulyo', 'sihii@gmail.com'),
(2, 'Pdt. Drs. Purboyo W. Susilaradeya ', 'Wakil Ketua Pengurus', 'GKI SW Jateng ', 'GKI Pondok Indah ', 'pws@bit.net'),
(3, 'Pdt. Em. Paulus Sardjono, S.Th.', 'Sekretaris ', 'GKI SW Jateng', 'GKI Pajajaran Magelang ', 'paulus_sardjono@yahoo.com'),
(4, 'Drs. Bambang Hediono, MBA ', 'Bendahara ', 'GKJ', 'GKJ Mergangsan ', 'bhediono@ukdw.ac.id'),
(5, 'Ir. Lukas Endro Widagdo ', 'Anggota ', 'GKI SW Jateng ', 'GKI Ngupasan ', 'rexendro@yahoo.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `isi` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `profiles`
--

INSERT INTO `profiles` (`id`, `isi`) VALUES
(1, 'LPP Sinode adalah lembaga gerejawi yang bergerak dalam bidang pembinaan dan pengaderan gereja. Lembaga ini didirikan dan diselenggarakan oleh Sinode Gereja-gereja Kristen Jawa dan Gereja Kristen Indonesia Sinode Wilayah Jawa Tengah. Tugas LPP Sinode adalah membantu Gereja-gereja Kristen khususnya GKJ dan GKI SW Jateng dalam membina warga gereja dan menyiapkan pemimpin-pemimpin gereja. Dalam melaksanakan tugasnya, LPP Sinode bekerjasama dengan lembaga gerejawi lainnya, juga universitas Kristen, bahkan lembaga-lembaga keagamaan non-Kristen. Tenaga-tenaga pembinaan yang bekerja penuh waktu di LPP Sinode adalah Pendeta-pendeta Tugas Khusus Sinode GKJ dan GKI SW Jateng. Fasilitas pendukung yang dimiliki adalah kantor, aula,  ruang rapat, dan tempat penginapan untuk para peserta pembinaan .');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data untuk tabel `staffs`
--

INSERT INTO `staffs` (`id`, `nama`, `golongan`, `jabatan`, `email`) VALUES
(21, 'Pdt. Darsono Eko Noegroho, M.T', 'B', 'PPP â€“ LPP Sinode GKJ dan GKI SW Jateng', 'pdt_den@yahoo.com'),
(22, 'sds', '', '', ''),
(23, 'gugugug', '', '', ''),
(26, 'Pdt. Darsono Eko Noegroho, M.T', 'A', 'Manajer', 'unggun@gmail.com'),
(27, 'Pdt. Widi Artanto, M.Th.', 'B', 'PPP â€“ LPP Sinode GKJ dan GKI SW Jateng', 'widiartanto@ymail.co'),
(28, 'Pdt. Wisnu Sapto Nugroho, S.Th', 'B', 'PPP â€“ LPP Sinode GKJ dan GKI SW Jateng', 'winusapto@yahoo.com'),
(29, 'Ambar Widyastuti Sabatiningsih', 'C', 'Administrasi Keuangan', 'widyastuti.ambar@yma'),
(30, 'Heny Wahyuning Wulandari', 'C', 'Administrasi Kantor', 'henywahyuning@ymail.'),
(31, 'Pdt. Em. Widdwissoeli MS, M.Mi', 'D', '', 'widdw@yahoo.com'),
(32, 'Soegito', 'E', 'Kepala kantor', '');

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
