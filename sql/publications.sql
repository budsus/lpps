-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2013 at 05:57 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lpps`
--
CREATE DATABASE IF NOT EXISTS `lpps` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lpps`;

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
(3, 'Buku gambar', 'buku gambar monokrom', 'Rp 10000', '2013-09-27 11:10:15', '2013-10-03 11:12:36'),
(4, 'Kancil', 'Buku tulis', '500', '2013-09-30 08:31:45', '2013-09-30 08:31:45'),
(5, 'Barang kumal sekali', 'Buku-buku 2', '1500', '2013-09-30 08:33:23', '2013-10-04 07:51:20');

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
  `book_id` varchar(15) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `notelp` varchar(255) DEFAULT NULL,
  `keterangantambahan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `buys`
--

INSERT INTO `buys` (`id`, `book_id`, `nama`, `notelp`, `keterangantambahan`) VALUES
(7, '', 'Carlo', '1245', '1 buah');

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
(6, 'doa.docx', 'lasdjas', '6', NULL, NULL, '2013-10-03 03:02:14', '2013-10-03 03:02:14');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
