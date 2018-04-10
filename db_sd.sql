-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2018 at 04:54 AM
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
-- Database: `db_sd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `id_tabel_admin` int(11) NOT NULL,
  `tabel_admin_username` varchar(45) DEFAULT NULL,
  `tabel_admin_password_md5` varchar(45) DEFAULT NULL,
  `tabel_admin_password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_admin`
--

INSERT INTO `tabel_admin` (`id_tabel_admin`, `tabel_admin_username`, `tabel_admin_password_md5`, `tabel_admin_password`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'admin', 'admin', 'admin'),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_ayah`
--

CREATE TABLE `tabel_ayah` (
  `id_tabel_ayah` int(11) NOT NULL,
  `tabel_ayah_nama` varchar(45) DEFAULT NULL,
  `tabel_ayah_ttl` varchar(45) DEFAULT NULL,
  `tabel_ayah_pekerjaan` varchar(45) DEFAULT NULL,
  `tabel_ayah_penghasilan` int(11) DEFAULT NULL,
  `tabel_ayah_nomor_hp` varchar(45) DEFAULT NULL,
  `tabel_ayah_alamat` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_ayah`
--

INSERT INTO `tabel_ayah` (`id_tabel_ayah`, `tabel_ayah_nama`, `tabel_ayah_ttl`, `tabel_ayah_pekerjaan`, `tabel_ayah_penghasilan`, `tabel_ayah_nomor_hp`, `tabel_ayah_alamat`) VALUES
(3, 'fsdf', 'fsdfsd', 'fsdfd', 3, 'sfsd', 'fsd'),
(4, 'sfa', 'fasdf', 'fasdf', 34, 'afs', 'fasf'),
(5, 'ffas', 'fasf', 'asf', 34, 'asf', 'asf'),
(6, '', '', '', 0, '', ''),
(7, 'fsdf', 'ert', 'fsd', 34, 'ryer', 'yery'),
(8, 'q', 'q', 'q', 1, 'q', 'q'),
(9, '', '', '', 0, '', ''),
(11, '', '', '', 0, '', ''),
(13, '', '', '', 0, '', ''),
(14, '', '', '', 0, '', ''),
(15, '', '', '', 0, '', ''),
(16, '', '', '', 0, '', ''),
(17, '', '', '', 0, '', ''),
(18, '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_ibu`
--

CREATE TABLE `tabel_ibu` (
  `id_tabel_ibu` int(11) NOT NULL,
  `tabel_ibu_nama` varchar(45) DEFAULT NULL,
  `tabel_ibu_ttl` varchar(45) DEFAULT NULL,
  `tabel_ibu_pekerjaan` varchar(45) DEFAULT NULL,
  `tabel_ibu_penghasilan` int(11) DEFAULT NULL,
  `tabel_ibu_nomor_hp` varchar(45) DEFAULT NULL,
  `tabel_ibu_alamat` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_ibu`
--

INSERT INTO `tabel_ibu` (`id_tabel_ibu`, `tabel_ibu_nama`, `tabel_ibu_ttl`, `tabel_ibu_pekerjaan`, `tabel_ibu_penghasilan`, `tabel_ibu_nomor_hp`, `tabel_ibu_alamat`) VALUES
(2, '', '', '', 0, '', ''),
(3, '', '', '', 0, '', ''),
(4, 'faf', 'afsf', 'asfa', 21, 'asf', 'fasf'),
(5, '', '', '', 0, '', ''),
(6, '', '', '', 0, '', ''),
(7, 'tert', 'gh', 'dfrre', 3, 'dhfd', 'hdfh'),
(8, 'q', 'q', 'q', 2, 'q', 'q'),
(9, '', '', '', 0, '', ''),
(11, '', '', '', 0, '', ''),
(13, '', '', '', 0, '', ''),
(14, '', '', '', 0, '', ''),
(15, '', '', '', 0, '', ''),
(16, '', '', '', 0, '', ''),
(17, '', '', '', 0, '', ''),
(18, '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_operator`
--

CREATE TABLE `tabel_operator` (
  `id_tabel_operator` int(11) NOT NULL,
  `tabel_operator_username` varchar(45) DEFAULT NULL,
  `tabel_operator_password_md5` varchar(45) DEFAULT NULL,
  `tabel_operator_password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_operator`
--

INSERT INTO `tabel_operator` (`id_tabel_operator`, `tabel_operator_username`, `tabel_operator_password_md5`, `tabel_operator_password`) VALUES
(1, 'operator', '4b583376b2767b923c3e1da60d10de59', 'operator');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pendaftar`
--

CREATE TABLE `tabel_pendaftar` (
  `id_tabel_pendaftar` int(11) NOT NULL,
  `id_tabel_siswa` int(11) NOT NULL,
  `id_tabel_operator` int(11) NOT NULL,
  `tabel_pendaftar_tgl` date DEFAULT NULL,
  `tabel_pendaftar_cek` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pendaftar`
--

INSERT INTO `tabel_pendaftar` (`id_tabel_pendaftar`, `id_tabel_siswa`, `id_tabel_operator`, `tabel_pendaftar_tgl`, `tabel_pendaftar_cek`) VALUES
(3, 8, 1, '2018-01-27', 'cek'),
(4, 9, 1, '2018-01-27', 'cek');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_siswa`
--

CREATE TABLE `tabel_siswa` (
  `id_tabel_siswa` int(11) NOT NULL,
  `tabel_siswa_nama` varchar(45) DEFAULT NULL,
  `tabel_siswa_nomor_kk` varchar(45) DEFAULT NULL,
  `tabel_siswa_jk` enum('L','P') DEFAULT NULL,
  `tabel_siswa_ttl` varchar(45) DEFAULT NULL,
  `tabel_siswa_hobi` varchar(45) DEFAULT NULL,
  `tabel_siswa_alamat` varchar(150) DEFAULT NULL,
  `id_tabel_ayah` int(11) NOT NULL,
  `id_tabel_ibu` int(11) NOT NULL,
  `id_tabel_wali` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_siswa`
--

INSERT INTO `tabel_siswa` (`id_tabel_siswa`, `tabel_siswa_nama`, `tabel_siswa_nomor_kk`, `tabel_siswa_jk`, `tabel_siswa_ttl`, `tabel_siswa_hobi`, `tabel_siswa_alamat`, `id_tabel_ayah`, `id_tabel_ibu`, `id_tabel_wali`) VALUES
(2, 'fdfd', '', 'L', 'fadf', 'fasf', 'sdf', 5, 4, 2),
(3, 'sadsa', '', 'L', 'dsad', 'dasd', 'dd', 6, 2, 2),
(4, 'fdsfsd', '', 'L', 'fsdf', 'eryy', 'fsdf', 7, 7, 2),
(5, 'q', '', 'L', 'q', 'q', 'q', 8, 8, 2),
(8, 'asd1', 'asd1', 'L', 'asd', 'asd1', 'asd1', 6, 2, 27),
(9, 'dfgdfg', 'dfgdfg', '', 'dfgdfg', 'dfgdfgdfg', 'xcgdfg', 6, 2, 2),
(11, '', '', '', '', '', '', 6, 2, 2),
(12, '', '', '', '', '', '', 6, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_tabel_user` int(11) NOT NULL,
  `tabel_user_username` varchar(45) DEFAULT NULL,
  `tabel_user_password_md5` varchar(45) DEFAULT NULL,
  `tabel_user_password` varchar(45) DEFAULT NULL,
  `id_tabel_pendaftar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_verifikasi`
--

CREATE TABLE `tabel_verifikasi` (
  `id_tabel_verifikasi` int(11) NOT NULL,
  `tabel_verifikasi_nilai_motorik` int(11) DEFAULT NULL,
  `tabel_verifikasi_nilai_verbal` int(11) DEFAULT NULL,
  `tabel_verifikasi_ket` enum('Lulus','Tidak') DEFAULT NULL,
  `id_tabel_pendaftar` int(11) NOT NULL,
  `id_tabel_admin` int(11) NOT NULL,
  `tabel_verifikasi_tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_verifikasi`
--

INSERT INTO `tabel_verifikasi` (`id_tabel_verifikasi`, `tabel_verifikasi_nilai_motorik`, `tabel_verifikasi_nilai_verbal`, `tabel_verifikasi_ket`, `id_tabel_pendaftar`, `id_tabel_admin`, `tabel_verifikasi_tgl`) VALUES
(3, 10, 80, 'Tidak', 3, 3, '2018-01-28'),
(4, 100, 100, 'Lulus', 4, 3, '2018-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_wali`
--

CREATE TABLE `tabel_wali` (
  `id_tabel_wali` int(11) NOT NULL,
  `tabel_wali_nomor_ktp` varchar(45) DEFAULT NULL,
  `tabel_wali_nama` varchar(45) DEFAULT NULL,
  `tabel_wali_jk` enum('L','P','-') DEFAULT NULL,
  `tabel_wali_ttl` varchar(45) DEFAULT NULL,
  `tabel_wali_pekerjaan` varchar(45) DEFAULT NULL,
  `tabel_wali_penghasilan` int(11) DEFAULT NULL,
  `tabel_wali_nomor_hp` varchar(45) DEFAULT NULL,
  `tabel_wali_alamat` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5;

--
-- Dumping data for table `tabel_wali`
--

INSERT INTO `tabel_wali` (`id_tabel_wali`, `tabel_wali_nomor_ktp`, `tabel_wali_nama`, `tabel_wali_jk`, `tabel_wali_ttl`, `tabel_wali_pekerjaan`, `tabel_wali_penghasilan`, `tabel_wali_nomor_hp`, `tabel_wali_alamat`) VALUES
(1, '123', 'bejo', 'L', 'sdfsd', 'fsdfsd', 34, 'fsdf', 'fsdfs'),
(2, '-', '-', '-', '-', '-', 0, '-', '-'),
(3, '34232', 'dfs', 'L', '', 'fsdf', 324, 'sdfsd', 'fsdf'),
(4, '-', '-', '-', '-', '-', 0, '-', '-'),
(5, '-', '-', '-', '-', '-', 0, '-', '-'),
(6, '-', '-', '-', '-', '-', 0, '-', '-'),
(7, '-', '-', '-', '-', '-', 0, '-', '-'),
(8, '-', '-', '-', '-', '-', 0, '-', '-'),
(9, '-', '-', '-', '-', '-', 0, '-', '-'),
(10, '-', '-', '-', '-', '-', 0, '-', '-'),
(11, '-', '-', '-', '-', '-', 0, '-', '-'),
(12, '-', '-', '-', '-', '-', 0, '-', '-'),
(13, '-', '-', '-', '-', '-', 0, '-', '-'),
(14, '-', '-', '-', '-', '-', 0, '-', '-'),
(15, '-', '-', '-', '-', '-', 0, '-', '-'),
(16, '-', '-', '-', '-', '-', 0, '-', '-'),
(17, '-', '-', '-', '-', '-', 0, '-', '-'),
(19, '-', '-', '-', '-', '-', 0, '-', '-'),
(20, '-', '-', '-', '-', '-', 0, '-', '-'),
(22, '-', '-', '-', '-', '-', 0, '-', '-'),
(23, '-', '-', '-', '-', '-', 0, '-', '-'),
(24, '-', '-', '-', '-', '-', 0, '-', '-'),
(25, '-', '-', '-', '-', '-', 0, '-', '-'),
(27, 'asd1', 'asd1', 'L', '', 'asd1', 121212, 'asd1', 'asd1'),
(28, '-', '-', '-', '-', '-', 0, '-', '-'),
(29, '-', '-', '-', '-', '-', 0, '-', '-'),
(30, '-', '-', '-', '-', '-', 0, '-', '-'),
(31, '-', '-', '-', '-', '-', 0, '-', '-'),
(32, '-', '-', '-', '-', '-', 0, '-', '-'),
(33, '-', '-', '-', '-', '-', 0, '-', '-'),
(34, '-', '-', '-', '-', '-', 0, '-', '-'),
(35, '-', '-', '-', '-', '-', 0, '-', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`id_tabel_admin`);

--
-- Indexes for table `tabel_ayah`
--
ALTER TABLE `tabel_ayah`
  ADD PRIMARY KEY (`id_tabel_ayah`);

--
-- Indexes for table `tabel_ibu`
--
ALTER TABLE `tabel_ibu`
  ADD PRIMARY KEY (`id_tabel_ibu`);

--
-- Indexes for table `tabel_operator`
--
ALTER TABLE `tabel_operator`
  ADD PRIMARY KEY (`id_tabel_operator`);

--
-- Indexes for table `tabel_pendaftar`
--
ALTER TABLE `tabel_pendaftar`
  ADD PRIMARY KEY (`id_tabel_pendaftar`,`id_tabel_siswa`,`id_tabel_operator`),
  ADD KEY `fk_tabel_pendaftar_tabel_siswa1_idx` (`id_tabel_siswa`),
  ADD KEY `fk_tabel_pendaftar_tabel_operator1_idx` (`id_tabel_operator`);

--
-- Indexes for table `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  ADD PRIMARY KEY (`id_tabel_siswa`,`id_tabel_ayah`,`id_tabel_ibu`,`id_tabel_wali`),
  ADD KEY `fk_tabel_siswa_tabel_ayah_idx` (`id_tabel_ayah`),
  ADD KEY `fk_tabel_siswa_tabel_wali1_idx` (`id_tabel_wali`),
  ADD KEY `fk_tabel_siswa_tabel_ibu1_idx` (`id_tabel_ibu`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_tabel_user`,`id_tabel_pendaftar`),
  ADD KEY `fk_tabel_user_tabel_pendaftar1_idx` (`id_tabel_pendaftar`);

--
-- Indexes for table `tabel_verifikasi`
--
ALTER TABLE `tabel_verifikasi`
  ADD PRIMARY KEY (`id_tabel_verifikasi`,`id_tabel_pendaftar`,`id_tabel_admin`),
  ADD KEY `fk_tabel_verifikasi_tabel_pendaftar1_idx` (`id_tabel_pendaftar`),
  ADD KEY `fk_tabel_verifikasi_tabel_admin1_idx` (`id_tabel_admin`);

--
-- Indexes for table `tabel_wali`
--
ALTER TABLE `tabel_wali`
  ADD PRIMARY KEY (`id_tabel_wali`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  MODIFY `id_tabel_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tabel_ayah`
--
ALTER TABLE `tabel_ayah`
  MODIFY `id_tabel_ayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tabel_ibu`
--
ALTER TABLE `tabel_ibu`
  MODIFY `id_tabel_ibu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tabel_operator`
--
ALTER TABLE `tabel_operator`
  MODIFY `id_tabel_operator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tabel_pendaftar`
--
ALTER TABLE `tabel_pendaftar`
  MODIFY `id_tabel_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  MODIFY `id_tabel_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_tabel_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tabel_verifikasi`
--
ALTER TABLE `tabel_verifikasi`
  MODIFY `id_tabel_verifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tabel_wali`
--
ALTER TABLE `tabel_wali`
  MODIFY `id_tabel_wali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_pendaftar`
--
ALTER TABLE `tabel_pendaftar`
  ADD CONSTRAINT `fk_tabel_pendaftar_tabel_operator1` FOREIGN KEY (`id_tabel_operator`) REFERENCES `tabel_operator` (`id_tabel_operator`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tabel_pendaftar_tabel_siswa1` FOREIGN KEY (`id_tabel_siswa`) REFERENCES `tabel_siswa` (`id_tabel_siswa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  ADD CONSTRAINT `fk_tabel_siswa_tabel_ayah` FOREIGN KEY (`id_tabel_ayah`) REFERENCES `tabel_ayah` (`id_tabel_ayah`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tabel_siswa_tabel_ibu1` FOREIGN KEY (`id_tabel_ibu`) REFERENCES `tabel_ibu` (`id_tabel_ibu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tabel_siswa_tabel_wali1` FOREIGN KEY (`id_tabel_wali`) REFERENCES `tabel_wali` (`id_tabel_wali`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD CONSTRAINT `fk_tabel_user_tabel_pendaftar1` FOREIGN KEY (`id_tabel_pendaftar`) REFERENCES `tabel_pendaftar` (`id_tabel_pendaftar`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tabel_verifikasi`
--
ALTER TABLE `tabel_verifikasi`
  ADD CONSTRAINT `fk_tabel_verifikasi_tabel_admin1` FOREIGN KEY (`id_tabel_admin`) REFERENCES `tabel_admin` (`id_tabel_admin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tabel_verifikasi_tabel_pendaftar1` FOREIGN KEY (`id_tabel_pendaftar`) REFERENCES `tabel_pendaftar` (`id_tabel_pendaftar`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
