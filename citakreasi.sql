-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2016 at 04:58 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `citakreasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_upload` date NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `tanggal_upload`, `nama_file`, `tipe_file`, `ukuran_file`, `file`) VALUES
(22, '2016-01-29', 'materi 1', 'docx', '11265', '../materi/materi 1.docx'),
(21, '2015-12-21', 'modul broadcasting 2', 'pdf', '285237', '../materi/modul broadcasting 2.pdf'),
(20, '2015-12-21', 'modul broadcasting', 'pdf', '285237', '../materi/modul broadcasting.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `galeri_id` int(11) NOT NULL AUTO_INCREMENT,
  `galeri_nama` varchar(100) NOT NULL,
  `galeri_keterangan` text NOT NULL,
  `galeri_link` text NOT NULL,
  `galeri_tgl` datetime NOT NULL,
  PRIMARY KEY (`galeri_id`),
  UNIQUE KEY `galeri_nama` (`galeri_nama`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`galeri_id`, `galeri_nama`, `galeri_keterangan`, `galeri_link`, `galeri_tgl`) VALUES
(1, 'Kunjungan ke Radio Selebes', 'Monitoring siswa Praktek Kerja Industri di Radio Selebes Kota Gorontalo', 'gallery/1231251_1418166525065890_663155631_n.jpg', '2015-12-05 07:23:24'),
(2, 'Studio Selebes', 'Dalam Rangka Monitoring Siswa Praktek Kerja Industri', 'gallery/IMG_7033.JPG', '2015-12-05 07:46:21'),
(3, 'Diskusi Tentang Siswa', 'Diskusi Tentang Keadaan Siswa Di Lapangan Kerja', 'gallery/IMG_7034.JPG', '2015-12-05 07:46:43'),
(4, 'Laporan Manajer', 'Laporan Manajer Selebes Tentang Keadaan Siswa Prakerin', 'gallery/IMG_7036.JPG', '2015-12-05 07:47:09'),
(5, 'Foto Bersama', 'Foto Bersama Manajer Selebes Radio', 'gallery/IMG_7039.JPG', '2015-12-05 07:47:33'),
(6, 'Peninjauan Lokasi', 'Peninjauan Lokasi Praktek Kerja Industri', 'gallery/IMG_7024.JPG', '2015-12-05 07:50:16'),
(7, 'Diskusi Tim Monitoring', 'Diskusi Tim Monitoring Prakerin SMK Negeri 1 Gorontalo', 'gallery/IMG_7025.JPG', '2015-12-05 07:50:37'),
(8, 'MoU dengan Selebes Radio', 'Serah Terima MoU dengan Selebes Radio', 'gallery/IMG_7026.JPG', '2015-12-05 07:51:05');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `pesan` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `waktu` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=62 ;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `username`, `pesan`, `waktu`) VALUES
(1, 'admin', '', '11:01:50'),
(2, 'admin', '', '02:01:08'),
(3, 'admin', '', '03:01:38'),
(4, 'siswa', '', '05:01:37'),
(5, 'siswa', '', '10:01:59'),
(6, 'siswa', '', '10:01:42'),
(7, 'siswa', ' [kedip] [kedip]', '10:01:55'),
(8, 'siswa', ' [marah] [marah]', '10:01:10'),
(9, 'siswa', ' [marah] [marah]', '10:01:11'),
(10, 'siswa', ' [melet]', '10:01:23'),
(11, 'siswa', ' [melet]', '10:01:50'),
(12, 'siswa', '', '10:01:10'),
(13, 'siswa', '', '10:01:22'),
(14, 'siswa', '', '10:01:36'),
(15, 'siswa', '', '10:01:44'),
(16, 'siswa', '', '10:01:54'),
(17, 'siswa', '', '10:01:11'),
(18, 'siswa', '', '10:01:54'),
(19, 'siswa', ' [ketawa] [ketawa]', '10:01:09'),
(20, 'siswa', ' [ketawa] [ketawa]', '10:01:42'),
(21, 'siswa', 'wkwkwkwk [kasmaran]', '10:01:03'),
(22, 'siswa', '', '10:01:49'),
(23, 'siswa', '', '10:01:56'),
(24, 'siswa', '', '10:01:57'),
(25, 'siswa', '', '10:01:36'),
(26, 'admin', '', '10:01:27'),
(27, 'admin', ' [melet] [melet] [melet] [melet]', '10:01:36'),
(28, 'admin', ' [nangis] [nangis] [nangis]', '10:01:37'),
(29, 'admin', ' [csedih] [csedih]', '10:01:44'),
(30, 'admin', ' [kasmaran] [kedip] [ketawa] [marah] [melet] [nangis] [sakit] [csenyum] [csedih] [cnangis] [cmurung] [cmarah] [maki-maki] [bye]', '10:01:08'),
(31, 'admin', '', '12:01:36'),
(32, 'admin', '', '12:01:19'),
(33, 'admin', '', '12:01:30'),
(34, 'admin', ' [marah] [marah] [marah]', '12:01:38'),
(35, 'admin', '', '02:01:17'),
(36, 'admin', '', '02:01:46'),
(37, 'admin', '', '03:01:13'),
(38, 'admin', '', '03:01:15'),
(39, 'admin', '', '03:01:22'),
(40, 'admin', '', '03:01:30'),
(41, 'admin', '', '03:01:51'),
(42, 'admin', '', '04:01:43'),
(43, 'admin', '', '04:01:13'),
(44, 'admin', '', '04:01:44'),
(45, 'admin', '', '04:01:34'),
(46, 'admin', '', '04:01:18'),
(47, 'admin', '', '04:01:42'),
(48, 'admin', '', '04:01:34'),
(49, 'admin', '', '04:01:43'),
(50, 'admin', '', '04:01:37'),
(51, 'admin', '', '12:01:04'),
(52, 'admin', '', '12:01:01'),
(53, 'admin', '', '12:01:24'),
(54, 'admin', '', '07:01:08'),
(55, 'admin', 'haloooo semuanyaaa.....', '07:01:52'),
(56, 'admin', 'uji coba obrolan  [kedip] [melet]', '07:01:30'),
(57, 'admin', 'ujicoba emoticon', '07:01:52'),
(58, 'admin', 'sudah oke semuanya [kedip]', '08:01:40'),
(59, 'admin', '', '03:01:05'),
(60, 'admin', '', '09:01:12'),
(61, 'admin', '', '04:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `lagu` varchar(100) NOT NULL,
  `pesan` varchar(250) NOT NULL,
  `waktu` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_induk` int(16) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `telp` int(16) DEFAULT NULL,
  `alamat` text,
  `status` varchar(25) DEFAULT NULL,
  `gender` varchar(25) DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `access` varchar(7) DEFAULT NULL,
  `kelas` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=314 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nomor_induk`, `name`, `username`, `password`, `telp`, `alamat`, `status`, `gender`, `foto`, `access`, `kelas`) VALUES
(1, NULL, 'administrator', 'admin', 'admin', 2147483647, 'Jalanan', 'PNS', 'Laki-laki', 'foto/bambang.jpg', 'admin', ''),
(2, NULL, 'Bambang', 'bambang', 'bambangtkj', 2147483647, 'Jalan Madura', 'Honorer', 'Laki-laki', 'foto/idbmbsolusindo.png', 'admin', ''),
(3, 2122, 'Siswa', 'siswa', 'siswa', 2147483647, 'Jalan Siswa', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'penyiar', 'Kelas X (Sepuluh)'),
(222, 24262, 'ADELIA AMRIN', '24262', '24262', 2147483647, 'JL. TUNA IDRUS 1 3  BULOTADAA BARAT KEC. SIPATANA 96124', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(223, 24662, 'BELAFISTA WALANGADI', '24662', '24662', 2147483647, 'JL. SARINI ABDULAH 0 0 DUSUN II KEL. LIMBA U II KEC. KOTA SELATAN ', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(224, 24277, 'DEVIYANTI R. SALEH', '24277', '24277', 2147483647, 'JL. MOH. THAYEB GOBEL 2 3  BULOTADAA BARAT KEC. SIPATANA 96124', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(225, 24416, 'DEWI ZULKARMILA', '24416', '24416', 2147483647, 'JL. BONE 1 5  KEL. MOLOSIPAT U KEC. SIPATANA 96126', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(226, 24279, 'EDWIN A. AGAMA', '24279', '24279', 2147483647, 'JL. KH. ADAM ZAKARIA 2 1  DEMBE JAYA KEC. KOTA UTARA 96121', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(227, 24258, 'FATRAWATI MUSA', '24258', '24258', 2147483647, 'JL. RAJA EYATO 3 3  PILOLODAA KEC. KOTA BARAT 96132', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(228, 24301, 'FERA YUNIARTI RADJAK', '24301', '24301', 2147483647, 'JL. SAWIT 3 4  BULADU KEC. KOTA BARAT 96136', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(229, 24653, 'GRACE OKTAVIA WALANGADI', '24653', '24653', 2147483647, 'DESA DUMATI 0 0 SATU DUMATI KEC. TELAGA 96181', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(230, 24282, 'LEDY LESTARI LIPUTO', '24282', '24282', 2147483647, 'JL. MOH. THAYEB GOBEL 2 1  MOLOSIPAT U KEC. SIPATANA 96126', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(231, 24317, 'MEYDI AYU LESTARI ZEES', '24317', '24317', 2147483647, 'JL. POIGAR 1 4  MOLISIPAT U KEC. SIPATANA 96125', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(232, 24261, 'MEYKE SAFITRI LUOYO', '24261', '24261', NULL, 'JL. THAYEB MOH. GOBEL 2 1  MOLOSIPAT U KEC. SIPATANA 96125', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(233, 24604, 'MIFTHA HULDJANNA KIAY DEMAK', '24604', '24604', 2147483647, 'JL. MOH. YAMIN 3 6  KEL. LIMBA B KEC. KOTA SELATAN 96115', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(234, 24300, 'MOH. REZKY GOBEL', '24300', '24300', 2147483647, 'JL. THAYEB MOH. GOBEL 1 1  TAPA KEC. SIPATANA 96125', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(235, 24257, 'MOHAMAD ADRIAN MASIR', '24257', '24257', NULL, 'JL. BALUNTAS 2 6  TENILO KEC. KOTA BARAT 96134', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(236, 24278, 'MUHAMAD TRI ADIATMA LALU', '24278', '24278', NULL, 'JL. TAMAN HIBURAN 1 1  DEMBE JAYA KEC. KOTA UTARA 96121', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(237, 24748, 'NINING KARINA ARMAN HARUN', '24748', '24748', 2147483647, 'JL. LESTARI 0 0  HUTADAA KEC. TELAGA JAYA 96181', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(238, 24259, 'NUR ASRIN ISHAK', '24259', '24259', 2147483647, 'JL. TONDANO I 3 4  TAPA KEC. SIPATANA 96125', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(239, 23352, 'NURMALA HANAPI', '23352', '23352', 2147483647, 'JL. TEKNIK 0 0  DESA LUWOO KEC. TELAGA JAYA ', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(240, 24299, 'RAHMAD MUSA', '24299', '24299', 2147483647, 'JL. KH. AGUSSALIM NO. 49 1 8  LIMBA B KEC. KOTA SELATAN 96115', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(241, 24260, 'RAHMAT U. GANI', '24260', '24260', 2147483647, 'JL. AHMADI HIOLA 0 0 SATU TINELO KEC. TILANGO ', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(242, 24283, 'RAHMAWATI PERMATASARI ABD. GANI', '24283', '24283', 2147483647, 'JL. TINALOGA 3 2  TOTO UTARA KEC. TILONGKABILA 96129', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(243, 24303, 'RAYMAS MUHARROM AULIADY SULEMAN', '24303', '24303', 2147483647, 'JL. JEND. POL. ANTON SUJARWO 2 4  KEL. BUGIS KEC. DUMBO RAYA 96112', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(244, 24280, 'RENALDY MUHSIN', '24280', '24280', 2147483647, 'JL. MADURA 3 5  DULALOWO KEC. KOTA TENGAH 96128', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(245, 23948, 'RESKA KASIM', '23948', '23948', 2147483647, 'JL. THAYEB MOH. GOBEL 2 7  KEL. BULOTADAA BARAT KEC. SIPATANA 96124', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(246, 24640, 'RICKY SETIAWAN HUKO', '24640', '24640', 2147483647, 'JL. YUSUF HASIRU 2 1  TANGGIKIKI KEC. SIPATANA 96125', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(247, 24075, 'RIDHA PARADIGMA', '24075', '24075', 2147483647, 'PERUMAHAN GRAHA 42 BLOK H NO. 3 0 0  KEL. TAPA KEC. SIPATANA ', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(248, 24263, 'ROSALINDA S. YUNUS', '24263', '24263', 2147483647, 'JL. THAYEB MOH. GOBEL 0 0 02 AYULA SELATAN KEC. BULANGO SELATAN 96582', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(249, 24646, 'SELFIANA MANOREK', '24646', '24646', 2147483647, 'JL. JERUK 1 6  WUMIALO KEC. KOTA TENGAH 96128', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(250, 24517, 'SITI CHOFIFA ABDULLAH', '24517', '24517', 2147483647, 'JL PERUMNAS PULUBALA 0 0  PULUBALA KEC. KOTA TENGAH ', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(251, 24302, 'SITI NUR AZIZAH GIU', '24302', '24302', 2147483647, 'JL. TONDANO 3 2  BULOTADAA BARAT KEC. SIPATANA 96125', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(252, 24651, 'SOFYAN H. KATILI', '24651', '24651', 2147483647, 'JL. RAMBUTAN 4 1  TOMULABUTAO KEC. DUNGINGI 96139', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(253, 24297, 'WULANDARI MUSTAPA', '24297', '24297', 2147483647, 'JL. THAYEB MOH. GOBEL 2 1  MOLOSIPAT U KEC. SIPATANA 96126', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(254, 24289, 'YULINDA LAIYA', '24289', '24289', 2147483647, 'JL. TAMAN SURYA 2 1  DEMBE 2 KEC. KOTA UTARA 96121', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(255, 24298, 'YUNITA MOHAMAD', '24298', '24298', 2147483647, 'JL. TAMAN SURYA 2 2  DEMBE JAYA KEC. KOTA UTARA 96121', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas X (Sepuluh)'),
(256, 23328, 'ADITYA DAI', '23328', '23328', 2147483647, 'JL. PILOHAYANGA 0 0  HULAWA KEC. TELAGA BIRU 96181', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(257, 23329, 'ALNDHY ZAKARIA', '23329', '23329', NULL, 'JLN. KALIMANTAN 2 1  DULALOWO TIMUR KEC. KOTA TENGAH 96128', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(258, 23330, 'AZAN USMAN', '23330', '23330', 2147483647, 'JL. TAMAN SURYA 0 0  DEMBE JAYA KEC. KOTA UTARA ', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(259, 23361, 'BAHRUDIN DAKO', '23361', '23361', 2147483647, 'JL. BENGAWAN SOLO 0 0  MOLOSIPAT KEC. SIPATANA ', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(260, 23345, 'DEBY ASTUTY ELIVITA HUSSA', '23345', '23345', 2147483647, 'JL. RAJA EYATO 3 2  MOLOSIPAT W KEC. KOTA BARAT 96134', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(261, 23331, 'FAHMI DUNGGIO', '23331', '23331', 2147483647, 'JALAN RUSLI DATAU 1 1  DULOMO UTARA KEC. KOTA UTARA 96123', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(262, 23332, 'FAZRIN MOHAMAD UMAR', '23332', '23332', 2147483647, 'JL. PRAWIJAYA 2 8  TENDA KEC. HULONTALANGI 96117', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(263, 23347, 'FRANSISKA ABDUL', '23347', '23347', 2147483647, 'JL. RAJA EYATO 1 3  MOLOSIPAT W KEC. KOTA BARAT 96134', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(264, 23333, 'GUNAWAN YAHYA', '23333', '23333', NULL, 'JALAN TALUMOPATU 1 1  DESA TALUMOPATU KEC. TAPA 96582', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(265, 23334, 'IMAM NUR FAISAL LAHAY', '23334', '23334', 2147483647, 'JL. NANI WARTABONE 0 0  DESA DUTOHE KEC. KABILA 96183', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(266, 23348, 'JUSTITIA ISWINARSIH LANGAGO', '23348', '23348', 2147483647, 'JL. PALMA 3 4  DUNGINGI KEC. DUNGINGI ', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(267, 23349, 'MEGA TRIESA VEMILA', '23349', '23349', NULL, 'JALAN KENANGAN II 3 3  KEL. DULALOWO TIMUR KEC. KOTA TIMUR 96128', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(268, 22578, 'MUFIEDAH MALE', '22578', '22578', 2147483647, 'JALAN MOH. YAMIN 3 7  LIMBA B KEC. KOTA SELATAN 96115', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(269, 23335, 'MUHAMMAD RIZAL M. BASALAMAH', '23335', '23335', 2147483647, 'JL. PANGERAN PONEGORO 0 0  LIMBA B KEC. KOTA SELATAN ', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(270, 23350, 'NURHAYATI M SUMA', '23350', '23350', 2147483647, 'JLN. KH. AHMAD DAHLAN 1 2  KEL. LIMBA B KEC. KOTA SELATAN 96115', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(271, 23351, 'NURHIJRAH MOHAMAD', '23351', '23351', NULL, 'JL. SATSUIT TUBUN 2 6  DONGGALA KEC. HULONTALANGI 96116', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(272, 23336, 'PRIANTAMA PUTRA HARUNDJA', '23336', '23336', 2147483647, 'JL. TAMAN HIBURAN 0 0  KEL. DEMBE JAYA KEC. KOTA UTARA ', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(273, 23353, 'RAFIKA ARIFIN S. HABI', '23353', '23353', 2147483647, 'JL. TERNATE 4 3  TAPA KEC. SIPATANA 96125', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(274, 23337, 'RAHMAT UMAR', '23337', '23337', 2147483647, 'JL DURIAN 0 0  TOMOLOBUTAO KEC. DUNGINGI ', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(275, 23345, 'RAHMAWATI FENNY FRANSISCA ADAM', '23345', '23345', 2147483647, 'JL. USMAN ISA 3 3  DEMBE 1 KEC. KOTA BARAT 96131', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(276, 23326, 'RAMDHAN HASAN', '23326', '23326', 2147483647, 'JL. KENANGAN 1 2  DILALOWO TIMUR KEC. KOTA TENGAH 96128', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(277, 23338, 'RISLIN DERBANG', '23338', '23338', NULL, 'JL. G. BOLIOHUTO 4 4  BIAWU KEC. KOTA SELATAN 96116', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(278, 23355, 'RIZKA WAHYUDIN BIKI', '23355', '23355', 2147483647, 'JALAN PEMUDA 0 0 DUSUN III DESA TEGGELA KEC. TILANGO 96181', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(279, 23356, 'SANDRA WATI DUMU', '23356', '23356', 2147483647, 'TALIB M GOBEL 0 0  TINELO AYULA KEC. BULANGO SELATAN ', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(280, 23339, 'SILPANDI NUSI', '23339', '23339', 2147483647, 'JALAN ANDALAS 1 2  KEL. PAGUYAMAN KEC. SIPATANA ', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(281, 23357, 'SRI YANTI GUE', '23357', '23357', 2147483647, 'RUSLI DATAU 1 1  DULOMO SELATAN KEC. KOTA UTARA 96123', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(282, 23340, 'SURYA RAMADAN MUTALA', '23340', '23340', 2147483647, 'LOMPOTOO 0 0  LOMPOTOO KEC. SUWAWA TENGAH 96184', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(283, 23341, 'WAHYUNTO MANTULANGI', '23341', '23341', 2147483647, 'LOMPOTOO 0 0  DESA LOMPOTOO KEC. SUWAWA 96184', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(284, 23343, 'YANDRY SAMOE', '23343', '23343', NULL, 'JL. TAPA SUWAWA 0 0  DESA BONGOIME KEC. TILONGKABILA ', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(285, 23006, 'ZULKARNAIN TANJUNG', '23006', '23006', 2147483647, 'JALAN HB. YASIN 1 8  KEL. LIMBA B KEC. KOTA SELATAN 96115', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XI (Sebelas)'),
(286, 22555, 'ABDJUL ADITYA', '22555', '22555', 2147483647, 'JALAN. PROF. DR. HJ. JOHN ARIO KATILI 1 2  TAPA KEC. SIPATANA 96126', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(287, 22556, 'ABDUL KAMAL AHMAD', '22556', '22556', 2147483647, 'JALAN DURIAN 4 3  HUANGOBOTU KEC. DUNGINGI 96138', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(288, 22557, 'ACHMAD FARHAN ALDIANSYAH', '22557', '22557', 2147483647, 'JL.MARTEN LIPUTO 0 0  TALUMOPATU KEC. TAPA ', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(289, 22569, 'ADINDA RAMADANI TESS', '22569', '22569', 2147483647, 'JL. PANGERANHIDAYAT 3 6  HELEDULAA UTARA KEC. KOTA TIMUR 96114', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(290, 22571, 'ANITA DAMA', '22571', '22571', 2147483647, 'JL. SELAYAR PERUM NABILA 2 1  LILUWO KEC. KOTA TENGAH 96129', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(291, 22572, 'ANTIN PASILIA', '22572', '22572', 2147483647, 'JALAN BELIMBING 4 6  LIBUO KEC. DUNGINGI 96135', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(292, 22559, 'ARDIN BATAWEYA', '22559', '22559', 2147483647, 'JL. R. ARTJE SLAMET 2 2  LEATO UTARA KEC. DUMBO RAYA 96119', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(293, 22560, 'ARIANTO AHMAD', '22560', '22560', NULL, 'JLN. RUSLI DATAU 5 2  DULOMO UTARA KEC. KOTA UTARA 96123', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(294, 22573, 'AYU RIZKI PUTRI KARIEM', '22573', '22573', 2147483647, 'JALAN HB. JASSIN 1 1  PAGUYAMAN KEC. KOTA TENGAH 96126', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(295, 22574, 'FATMAH NAIU', '22574', '22574', 2147483647, 'JALAN BALI 1 3  PAGUYAMAN KEC. KOTA TENGAH 96126', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(296, 22575, 'FERAWATI LATIF', '22575', '22575', 2147483647, 'JALAN BALKIN 1 1  MOLOSIPAT U KEC. KOTA UTARA 96126', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(297, 22577, 'IRAWATI KASIBU', '22577', '22577', 2147483647, 'JLN. TERNATE 0 0  TAPA KEC. SIPATANA 96125', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(298, 22561, 'JAGUR PURWOJATI', '22561', '22561', NULL, 'PERUM AWARA KARYA BLOK H/6 3 5  LILUWO KEC. KOTA TENGAH 96129', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(299, 22564, 'MOHAMAD YADI BAGU', '22564', '22564', 2147483647, 'JL. RAHMAT 0 0  HUTADAA KEC. TELAGA JAYA 96181', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(300, 22579, 'MURNIYANTI DAUD', '22579', '22579', 2147483647, 'JL. R. ATRJE SLAMET 2 2  LEATO UTARA KEC. DUMBO RAYA 96119', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(301, 22580, 'NUR LAUDENGI', '22580', '22580', 2147483647, 'JLN MOH YAMIN 3 2  LIMBA B KEC. KOTA SELATAN 96115', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(302, 22566, 'PUTRA IDRUS', '22566', '22566', 2147483647, 'JL. RUSLI DATAU 2 1  DULOMO UTARA KEC. KOTA UTARA 96123', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(303, 22581, 'ROSWITA POMALANGO', '22581', '22581', NULL, 'JALAN HUSNI TAMRIN 2 4  LIMBA U1 KEC. KOTA SELATAN 96115', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(304, 22582, 'SITTI RAHMATIA GANI', '22582', '22582', 2147483647, 'JLN. KALIMANTAN PERUM AWARA KARYA E/14 5 4  LILUWO KEC. KOTA TENGAH 96129', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(305, 22567, 'SUTAN BACHARUDDIN DANI', '22567', '22567', NULL, 'JALAN NANI WARTABONE 0 0  DUTOHE KEC. KABILA 96183', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(306, 22583, 'WIDYA NURJANA MANTI', '22583', '22583', 2147483647, 'JLN TERNATE 0 0  TAPA KEC. SIPATANA 96125', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(307, 22584, 'YUL SINTIA ANGGRAINI DANIAL', '22584', '22584', 2147483647, 'PERUMNAS PULUBALA BLOK B NO 57 2 3  PULUBALA KEC. KOTA TENGAH 96127', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(308, 22585, 'YURNANINGSIH GOBEL', '22585', '22585', 2147483647, 'JLN.H.THAYEB.M.GOBEL 1 1  TAPA KEC. SIPATANA 96125', 'Aktif', 'Perempuan', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(309, 22568, 'ZULFAHNUR MUSLIM DAUD', '22568', '22568', 2147483647, 'JLN IRIAN 0 0  LILUWO KEC. KOTA TENGAH ', 'Aktif', 'Laki-laki', 'foto/siswa.png', 'siswa', 'Kelas XII (Duabelas)'),
(310, 2147483647, 'JOKO SUKAMTO', '7571042205770001', '7571042205770001', 0, 'MOLOSIPAT U 0 0  MOLOSIPAT U KEC. SIPATANA ', 'PNS', 'Laki-laki', 'foto/jokosukamto.jpg', 'guru', ''),
(311, 2147483647, 'MUHAJIRIN ABDUL HAMID MUKMIN', '7501022603740001', '7501022603740001', 2147483647, 'JL. RAJA WADIPALAPA 0 0 II TILOTE KEC. TILANGO 96181', 'Honorer', 'Laki-laki', 'foto/muhajirin.jpg', 'guru', ''),
(312, 2147483647, 'NURUL DES FLANNY DEWAPUTU', '7503026212900000', '7503026212900000', 0, 'JALAN WONGKADITI BARAT 2 2  KEL. WONGKADITI BARAT KEC. KOTA UTARA ', 'Honorer', 'Perempuan', 'foto/flanny.jpg', 'guru', ''),
(313, 2147483647, 'PATRICIA TIRTAWATI PANIGORO', '7571066004810001', '7571066004810001', 2147483647, 'JLN. ARIEF RAHMAN HAKIM 1 3  KEL. WUMIALO KEC. KOTA TENGAH 96128', 'PNS', 'Perempuan', 'foto/petty.jpg', 'guru', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
