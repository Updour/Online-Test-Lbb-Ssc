-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2018 at 11:58 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lbb`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_admin`
--

CREATE TABLE `m_admin` (
  `id` int(6) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','guru','siswa') NOT NULL,
  `kon_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_admin`
--

INSERT INTO `m_admin` (`id`, `username`, `password`, `level`, `kon_id`) VALUES
(1, 'admin@gmail.com', '200ceb26807d6bf99fd6f4f0d1ca54d4', 'admin', 0),
(2, 'guru1', '21232f297a57a5a743894a0e4a801fc3', 'guru', 1),
(3, 'guru2', '21232f297a57a5a743894a0e4a801fc3', 'guru', 2),
(4, 'guru4', '21232f297a57a5a743894a0e4a801fc3', 'guru', 4),
(6, 'siswa1', '21232f297a57a5a743894a0e4a801fc3', 'siswa', 1),
(18, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 0),
(20, '082299761835', '21232f297a57a5a743894a0e4a801fc3', 'siswa', 4),
(21, '085231140183', '21232f297a57a5a743894a0e4a801fc3', 'siswa', 7);

-- --------------------------------------------------------

--
-- Table structure for table `m_guru`
--

CREATE TABLE `m_guru` (
  `id` int(6) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_guru`
--

INSERT INTO `m_guru` (`id`, `nama`) VALUES
(1, 'Taufik Hidayat, S.Pd'),
(2, 'Asep Rosadi, M.pd'),
(4, 'Inez Annisa Faiz, S.Pd');

-- --------------------------------------------------------

--
-- Table structure for table `m_mapel`
--

CREATE TABLE `m_mapel` (
  `id` int(6) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_mapel`
--

INSERT INTO `m_mapel` (`id`, `nama`) VALUES
(1, 'TBI ( Tes Bahasa Inggris)'),
(2, 'TPA  ( Tes Potensi Akademik)'),
(3, 'TPA  ( Tes Potensi Akademik)');

-- --------------------------------------------------------

--
-- Table structure for table `m_siswa`
--

CREATE TABLE `m_siswa` (
  `id` int(6) NOT NULL,
  `nim` varchar(11) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `program` varchar(50) NOT NULL,
  `sekolah` varchar(50) NOT NULL,
  `no_hp_siswa` varchar(20) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `no_hp_ayah` varchar(20) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `no_hp_ibu` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_siswa`
--

INSERT INTO `m_siswa` (`id`, `nim`, `nama`, `tanggal_daftar`, `program`, `sekolah`, `no_hp_siswa`, `nama_ayah`, `no_hp_ayah`, `nama_ibu`, `no_hp_ibu`, `alamat`, `keterangan`) VALUES
(4, '1234', 'abdur rohman', '1997-02-01', 'komputer', 'smk nurur rahmah', '082299761835', 'ibu', '0891234321234', 'ayah', '082121343211', 'leces tigasan wetan ', 'lunas munkin'),
(5, '23232', 'jumadi', '2017-12-31', 'tipes', 'smk', '08998877121', 'ihu', 'iku', 'oop', '07281919281', 'bantaran', 'tidak lunas'),
(6, '1312', 'IVAN', '2018-12-31', 'TBS', 'SMO', '089121231112', 'oik', '08912191218213', 'ibu', '09121212091231', 'tigasan wetan leces', 'lunas'),
(7, '44444', 'anang', '2018-02-05', 'sistem hari', 'smk', '085231140183', 'hgf', '09890898', 'tgdt', '0989079797', 'leces', 'hgfgh');

-- --------------------------------------------------------

--
-- Table structure for table `m_soal`
--

CREATE TABLE `m_soal` (
  `id` int(6) NOT NULL,
  `id_guru` int(6) NOT NULL,
  `id_mapel` int(6) NOT NULL,
  `bobot` int(2) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `soal` longtext NOT NULL,
  `opsi_a` longtext NOT NULL,
  `opsi_b` longtext NOT NULL,
  `opsi_c` longtext NOT NULL,
  `opsi_d` longtext NOT NULL,
  `opsi_e` longtext NOT NULL,
  `jawaban` varchar(5) NOT NULL,
  `tgl_input` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_soal`
--

INSERT INTO `m_soal` (`id`, `id_guru`, `id_mapel`, `bobot`, `gambar`, `soal`, `opsi_a`, `opsi_b`, `opsi_c`, `opsi_d`, `opsi_e`, `jawaban`, `tgl_input`) VALUES
(1, 1, 1, 1, '', 'Indonesia menggunakan bahasa resmi bahasa .... ', 'Indonesia', 'Inggris', 'Prancis', 'Portugis', 'Melayua', 'A', '2015-08-27 18:20:22'),
(2, 1, 1, 1, '70thIndonesiaMerdeka.jpg', 'Gambar disamping adalah logo kemerdekaan Indonesia ke.. ', '67', '68', '69', '70', '71', 'D', '2015-08-27 18:21:02'),
(3, 1, 1, 1, '', 'Slogan peringatan HUT RI ke 70 adalah ...', 'Ayo makan.', 'Ayo minum', 'Ayo bermain', 'Ayo kerja', 'Ayo berbelanja', 'D', '2015-08-27 18:21:55'),
(4, 1, 1, 1, '', 'Bahasa Indonesia ditetapkan sebagai bahasa resmi pada tanggal ..', '20 Mei 1927', '28 Oktober 1928', '20 Mei 1928', '28 Mei 1920', '21 Juni 1917', 'B', '2015-08-27 18:23:13'),
(5, 1, 1, 1, '', 'Kalimat minimal terdiri dari pola ..', 'S-P-O', 'S-P-K', 'S-P-O-K', 'S-K', 'S-P', 'E', '2015-08-27 18:24:05'),
(6, 2, 2, 1, '', 'Table = .... (Indonesia)', 'Meja', 'Kursi', 'Lemari', 'Pintu', 'Jendela', 'A', '2015-08-27 18:24:44'),
(7, 2, 2, 1, '', 'Big = ... (indonesia)', 'Tinggi', 'Kurus', 'Panjang', 'Besar', 'Keras', 'D', '2015-08-27 18:25:22'),
(8, 2, 2, 1, '', 'Bola = .... (inggris)', 'ballon', 'ball', 'table', 'book', 'paper', 'B', '2015-08-27 18:25:57'),
(9, 2, 2, 1, '', 'I go to school by ...', 'road', 'field', 'shoes', 'drink', 'bus', 'E', '2015-08-27 18:26:48'),
(10, 2, 2, 1, '', 'Who is USA president now...', 'Ir. Jokowi', 'Angela Merkel', 'Barrack Obama', 'Tony Abbot', 'John F Kennedy', 'C', '2015-08-27 18:27:48'),
(11, 5, 3, 1, '', '2+3 = ...', '1', '2', '3', '4', '5', 'E', '2015-08-27 18:28:12'),
(12, 5, 3, 1, '', '1, 3, ..., ...., 9, 11', '4, 5', '4, 6', '5, 7', '6, 7', '1, 5', 'C', '2015-08-27 18:29:06'),
(13, 5, 3, 1, '', '(2 + 3) * 4 = ....', '20', '21', '22', '23', '24', 'A', '2015-08-27 18:29:34'),
(14, 5, 3, 1, '', '(90 / 10 ) - 5 = ...', '1', '2', '3', '4', '5', 'D', '2015-08-27 18:30:03'),
(15, 5, 3, 1, '', 'Akar dari 81 adalah ...', '7', '8', '9', '10', '11', 'C', '2015-08-27 18:30:27'),
(16, 4, 4, 1, '', 'Benda cair contohnya .. ?', 'es', 'batu', 'sirup', 'meja', 'udara', 'C', '2015-08-27 18:31:02'),
(17, 4, 4, 1, '', 'Perubahan bentuk dari cair menjadi padat disebut ...', 'menyublim', 'membeku', 'menguap', 'menghilang', 'magic', 'B', '2015-08-27 18:31:53'),
(18, 4, 4, 1, '', 'Uap air termasuk jenis benda ... ', 'gas', 'cair', 'padat', 'tidak nampak', 'panas', 'A', '2015-08-27 18:32:39'),
(19, 4, 4, 1, '', 'Yang menemukan hukum Newton adalah ...', 'George Washington', 'Georde Groban', 'George Bush', 'Issac Newton', 'Steven Gerrard', 'D', '2015-08-27 18:33:29'),
(20, 4, 4, 1, 'harga-kaca.jpg', 'Gambar di samping merupakan contoh benda ..', 'padat', 'cair', 'tak nampak', 'gas ', 'ghaib', 'A', '2015-08-27 18:34:18'),
(21, 1, 1, 1, 'images.jpg', 'Gambar di sampig adalah gambar ..', 'roti', 'batu bata', 'batu', 'kerupuk', 'nasi merah', 'B', '2015-08-27 18:46:11'),
(22, 4, 1, 1, '', 'soal', 'jawaban a', 'jawaban b', 'jawaban c', 'jawaban d', 'jawaban e', 'A', '2015-09-05 09:41:24'),
(23, 5, 3, 1, '', '5 + 5', '2', '4', '6', '9', '10', 'E', '2018-01-08 22:14:52'),
(24, 1, 1, 1, '', '<u>hu</u>', 'a', 'b', 'c', 'd', 'e', 'C', '2018-01-12 22:58:31'),
(25, 1, 1, 1, 'IMG-20170130-00099.jpg', 'apa yang di maksud dengan ini', 'dia', 'itu', 'saya', 'gak ', 'tau', 'B', '2018-01-23 18:41:42'),
(26, 2, 2, 1, 'Belajar-Laravel-Untuk-Pemula.pdf', 'dsd', 'a', '1', '1', '1', '2', 'E', '2018-01-24 13:07:26');

-- --------------------------------------------------------

--
-- Table structure for table `m_spp`
--

CREATE TABLE `m_spp` (
  `id_spp` int(11) NOT NULL,
  `no_kwitansi` char(255) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `jumlah_uang` char(226) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `ket_bayar` varchar(65) NOT NULL,
  `ket_ll` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_spp`
--

INSERT INTO `m_spp` (`id_spp`, `no_kwitansi`, `id_siswa`, `jumlah_uang`, `tgl_bayar`, `ket_bayar`, `ket_ll`) VALUES
(5, '12', 4, '1021', '2018-01-31', 'lunas ya', 'bisa nangkap gak?\r\n'),
(6, 'asdasdasdasdasd', 0, '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `m_upload`
--

CREATE TABLE `m_upload` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `isi_soal` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_upload`
--

INSERT INTO `m_upload` (`id`, `nama`, `isi_soal`, `gambar`) VALUES
(1, 'OK Modal sukses', 'lhai ini udah bisa edit toh', 'IMG-20170130-00107.jpg'),
(2, 'ad', 'k', 'IMG-20170130-001071.jpg'),
(3, 'h', 'h1', 'IMG-20170130-00109.jpg'),
(4, 'j', 'j', 'IMG-20170130-00102.jpg'),
(7, 'ipa', 'tentang makanan', 'public_function.doc'),
(9, 'u', 'u', 'kupdf.com_beesmart-v3_.pdf'),
(10, 'tambah pakai modal juga', 'oke bos', 'Panduan_Memulai_Project_Laravel_5.4_v160617_2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tr_guru_mapel`
--

CREATE TABLE `tr_guru_mapel` (
  `id` int(6) NOT NULL,
  `id_guru` int(6) NOT NULL,
  `id_mapel` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_guru_mapel`
--

INSERT INTO `tr_guru_mapel` (`id`, `id_guru`, `id_mapel`) VALUES
(2, 2, 2),
(3, 4, 4),
(4, 5, 3),
(7, 1, 1),
(8, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tr_guru_tes`
--

CREATE TABLE `tr_guru_tes` (
  `id` int(6) NOT NULL,
  `id_guru` int(6) NOT NULL,
  `id_mapel` int(6) NOT NULL,
  `nama_ujian` varchar(200) NOT NULL,
  `jumlah_soal` int(6) NOT NULL,
  `waktu` int(6) NOT NULL,
  `jenis` enum('acak','set') NOT NULL,
  `detil_jenis` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_guru_tes`
--

INSERT INTO `tr_guru_tes` (`id`, `id_guru`, `id_mapel`, `nama_ujian`, `jumlah_soal`, `waktu`, `jenis`, `detil_jenis`) VALUES
(1, 1, 1, 'UTS bahasa indonesia', 6, 1, 'acak', ''),
(2, 2, 2, 'UTS Bahasa Inggris', 5, 1, 'acak', ''),
(3, 1, 1, 'Ujian', 5, 60, 'acak', ''),
(4, 5, 3, 'Ujian Semester', 5, 60, 'acak', '');

-- --------------------------------------------------------

--
-- Table structure for table `tr_ikut_ujian`
--

CREATE TABLE `tr_ikut_ujian` (
  `id` int(6) NOT NULL,
  `id_tes` int(6) NOT NULL,
  `id_user` int(6) NOT NULL,
  `list_soal` longtext NOT NULL,
  `list_jawaban` longtext NOT NULL,
  `jml_benar` int(6) NOT NULL,
  `nilai` int(6) NOT NULL,
  `nilai_bobot` int(6) NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `tgl_selesai` datetime NOT NULL,
  `status` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_ikut_ujian`
--

INSERT INTO `tr_ikut_ujian` (`id`, `id_tes`, `id_user`, `list_soal`, `list_jawaban`, `jml_benar`, `nilai`, `nilai_bobot`, `tgl_mulai`, `tgl_selesai`, `status`) VALUES
(2, 4, 1, '15,12,11,13,23', '15:,12:,11:,13:,23:E', 1, 20, 1, '2018-01-08 22:15:16', '2018-01-08 23:15:16', 'N'),
(3, 3, 1, '22,21,2,4,1', '22:,21:,2:,4:,1:', 0, 0, 0, '2018-01-08 22:16:05', '2018-01-08 23:16:05', 'Y'),
(4, 1, 1, '4,5,24,1,21,2', '4:,5:,24:,1:,21:,2:', 0, 0, 0, '2018-01-12 23:11:01', '2018-01-12 23:12:01', 'Y'),
(5, 2, 1, '8,7,10,9,6', '8:,7:,10:,9:,6:', 0, 0, 0, '2018-01-12 23:49:31', '2018-01-12 23:50:31', 'Y'),
(6, 1, 3, '21,5,4,3,2,1', '21:B,5:E,4:E,3:D,2:D,1:A', 5, 83, 5, '2018-01-23 11:09:56', '2018-01-23 11:10:56', 'N'),
(7, 3, 3, '2,1,24,3,22', '2:,1:,24:,3:,22:', 0, 0, 0, '2018-01-23 11:10:46', '2018-01-23 12:10:46', 'Y'),
(8, 2, 4, '6,9,10,26,8', '6:A,9:E,10:C,26:B,8:B', 4, 80, 4, '2018-02-01 19:36:45', '2018-02-01 19:37:45', 'N'),
(9, 4, 5, '15,12,14,23,13', '15:C,12:B,14:B,23:E,13:A', 3, 60, 3, '2018-02-03 14:51:26', '2018-02-03 15:51:26', 'N'),
(10, 2, 6, '7,26,10,9,6', '7:,26:,10:,9:,6:', 0, 0, 0, '2018-02-03 15:14:51', '2018-02-03 15:15:51', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tr_siswa_mapel`
--

CREATE TABLE `tr_siswa_mapel` (
  `id` int(6) NOT NULL,
  `id_siswa` int(6) NOT NULL,
  `id_mapel` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_siswa_mapel`
--

INSERT INTO `tr_siswa_mapel` (`id`, `id_siswa`, `id_mapel`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 2),
(6, 4, 2),
(8, 5, 3),
(9, 5, 4),
(10, 1, 2),
(11, 1, 3),
(12, 3, 1),
(13, 6, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_admin`
--
ALTER TABLE `m_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_guru`
--
ALTER TABLE `m_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_mapel`
--
ALTER TABLE `m_mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_siswa`
--
ALTER TABLE `m_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_soal`
--
ALTER TABLE `m_soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_spp`
--
ALTER TABLE `m_spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- Indexes for table `m_upload`
--
ALTER TABLE `m_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tr_guru_mapel`
--
ALTER TABLE `tr_guru_mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tr_guru_tes`
--
ALTER TABLE `tr_guru_tes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tr_ikut_ujian`
--
ALTER TABLE `tr_ikut_ujian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tr_siswa_mapel`
--
ALTER TABLE `tr_siswa_mapel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_admin`
--
ALTER TABLE `m_admin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `m_guru`
--
ALTER TABLE `m_guru`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `m_mapel`
--
ALTER TABLE `m_mapel`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `m_siswa`
--
ALTER TABLE `m_siswa`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `m_soal`
--
ALTER TABLE `m_soal`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `m_spp`
--
ALTER TABLE `m_spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `m_upload`
--
ALTER TABLE `m_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tr_guru_mapel`
--
ALTER TABLE `tr_guru_mapel`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tr_guru_tes`
--
ALTER TABLE `tr_guru_tes`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tr_ikut_ujian`
--
ALTER TABLE `tr_ikut_ujian`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tr_siswa_mapel`
--
ALTER TABLE `tr_siswa_mapel`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
