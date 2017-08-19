-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 16 Agu 2017 pada 12.14
-- Versi Server: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `konten` text NOT NULL,
  `gambar` longtext NOT NULL,
  `status` varchar(16) NOT NULL,
  `tanggal` varchar(16) NOT NULL,
  `username` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `id_kategori`, `judul`, `konten`, `gambar`, `status`, `tanggal`, `username`) VALUES
(4, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(5, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(6, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(7, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(8, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(9, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(10, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(11, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(12, 1, 'bebek', 'ibnul', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(13, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(14, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(15, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(16, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(17, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(18, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(19, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(20, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(21, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(22, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(23, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(24, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(25, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(26, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(27, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(28, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(29, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(30, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(31, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(32, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(33, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(34, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(35, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(36, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(37, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(38, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(39, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing'),
(40, 1, 'tes', 'asdasdasdsada', 'blaaah', 'aktif', '2017/08/18', 'cacing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'Teknologi'),
(3, 'Entertainment');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`uid`, `username`, `password`, `fullname`, `email`) VALUES
(1, 'cacing', 'password', 'Ibnul Mutaki', 'ibnuul@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uname` (`username`),
  ADD UNIQUE KEY `uemail` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
