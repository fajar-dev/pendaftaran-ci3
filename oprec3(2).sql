-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 09:38 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oprec3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `repeat_password` varchar(200) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_user`, `nama_lengkap`, `username`, `password`, `repeat_password`, `role`) VALUES
(3, 'master', 'master', 'eb0a191797624dd3a48fa681d3061212', 'eb0a191797624dd3a48fa681d3061212', 'admin'),
(5, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `asal_sekolah` varchar(200) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass_apl` varchar(200) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `gambar` varchar(200) NOT NULL,
  `cek` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `nama_depan`, `asal`, `jenis_kelamin`, `agama`, `tanggal_lahir`, `asal_sekolah`, `nohp`, `instagram`, `email`, `pass_apl`, `tgl_daftar`, `gambar`, `cek`) VALUES
(35, 'fajar rivaldi chan', 'medan', 'laki laki', '', '2002-04-06', 'MAPN 4 Medan', '0895611024559', '@fajar.chaniago_', 'fajarrivaldi2015@gmail.com', 'belajar123', '2020-05-03 07:35:35', 'pass_jpg.png', ''),
(36, 'a', 'svfs', 'laki laki', '', '2020-05-01', 'SMAN 1 Babalan', '123456789011', '@123abc_.,-\'\"\":;?/|\\>', 'admin@example.com', '141345', '2020-05-13 06:09:48', '2.jpg', ''),
(37, 'Ivan', 'Palembang', 'perempuan', '', '2020-05-26', 'Ui', '123', 'Qwe', 'wkidicuc@gmal', 'Hjejejejejddjrjrjrj', '2020-05-13 09:35:52', 'IMG-20190514-WA0006.jpg', ''),
(38, 'Fajar', 'Palembang', 'laki laki', '', '2020-05-24', 'Man 4', '0852', 'Bbhj', 'virsa@virsa.com', 'Qwertyuiop', '2020-05-13 12:38:56', 'IMG-20190519-WA0013.jpg', ''),
(39, 'asdasdas', 'a', 'perempuan', '', '2020-05-02', 'SMAN 1 Babalan', '123456789011', 'afcaf', 'chanofficial2020@gmail.com', '1234567', '2020-05-13 21:31:09', 'document.png', ''),
(40, 'afef', 'firmansyah', 'perempuan', '', '2020-05-02', 'SMAN 1 Babalan', '123456789010', '@123abc_.,-\'\"\":;?/|\\>', 'admin@admin', 'belajar123', '2020-05-13 21:31:38', 'android.png', ''),
(41, 'wawan', 'hutan', 'perempuan', '', '2020-04-29', 'uin', '0987654', '@fajar.chaniago_', 'fajarrivaldi2015@gmail.com', 'qwertyuiop', '2020-05-14 15:09:46', 'database(1).png', ''),
(42, 'a', 'a', 'perempuan', 'islam', '2020-05-09', 'a', '123456789011', 'afcaf', 'nihongokurabuman4@gmail.com', '1234567890', '2020-05-20 21:16:04', '1_HLGtY6O2vUHqIyEbWdmBgA2.jpeg', ''),
(43, 'xvb', 'svfs', 'perempuan', 'budha', '2020-05-30', 'SMAN 1 Babalan', '123456789011', 'afcaf', 'fajarrivaldi2015@gmail.com', '1234567890', '2020-05-20 21:17:14', 'b1.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
