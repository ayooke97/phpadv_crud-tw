-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 10:54 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(60) NOT NULL,
  `penerbit` varchar(60) NOT NULL,
  `sinopsis` text NOT NULL,
  `th_terbit_buku` year(4) NOT NULL,
  `cover_buku` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penerbit`, `sinopsis`, `th_terbit_buku`, `cover_buku`) VALUES
(106, 'I Feel Bad About My Neckab', 'sdfsdf', 'AWOKAWOKOAWKOAWKOAWKAW', 2018, ''),
(107, 'Buku sakti hacker', 'Entah Berantah ', 'RILIS BOSS', 2023, '478-mk ks.jpg'),
(116, 'Kosong', '', '', 0000, '261-mk ks.jpg'),
(117, 'Gaktau buku apaan', 'Orang Ketiga', 'Dah lah males', 2022, '541-mk ks.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` char(50) NOT NULL,
  `mid_name` char(50) DEFAULT NULL,
  `last_name` char(50) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan','Rahasia') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `first_name`, `mid_name`, `last_name`, `jk`) VALUES
(19, 'ayooke97', 'bakti12356@gmail.com', '$2y$10$mpK7G.dPdwi3AJTkQ2xdnOFPS01S.PwZAFf.OnhtvMIr05shW5u5i', 'Bakti', 'P', 'M', 'Rahasia'),
(20, 'dma555', 'dimasanjaymabar@gmail.com', '$2y$10$Gq8hdVLg8v8tkq1U9pH6re.AczLFGvvmaL4RrqcCJBEGq0mpKKXUa', 'Dimas', 'Anjay', 'Mabar', 'Laki-Laki'),
(21, 'awokawok97', 'baktiawokawok@gmail.com', '$2y$10$19DboOvdWMT4yJeM81cKu.BQWa28GZD5lxr4nHA3DVxrOaD/7LHOy', 'Awok', 'Awok', 'Awok', 'Rahasia'),
(22, 'nocomment404', 'nocomment404@gmail.com', '$2y$10$LN87D2lLiFB0GeoZ6Dzrtur2p7vEyEmICn0Tk1QsqAf2NYcDxntNK', 'No', '', 'Comment', 'Rahasia'),
(23, '', '', '$2y$10$qBodNgvZ3Fw5jK0TLT6lJeQKhIAkb.OlxdSX2wluQqd5/GYaH8W6q', '', '', '', ''),
(24, 'ngetesdoang123', 'ngetesdoang@gmail.com', '$2y$10$0npyc8/ximsk.YH9XCViKeAJSktCC8mns4PSP8ofNbmtWl403TMIa', 'Nge', 'Test', 'Doang', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
