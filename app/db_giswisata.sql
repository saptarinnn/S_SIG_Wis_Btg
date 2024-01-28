-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jan 2024 pada 12.10
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_giswisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alam`
--

CREATE TABLE `tb_alam` (
  `antrian` int(10) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `longlang` varchar(50) NOT NULL,
  `foto` text DEFAULT NULL,
  `info` varchar(150) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_alam`
--

INSERT INTO `tb_alam` (`antrian`, `jenis`, `nama`, `alamat`, `longlang`, `foto`, `info`, `status`) VALUES
(12, 'sdsd', 'sdsd', 'sdsd', 'sdsd', '', 'sdsds', NULL),
(27, 'rrrgddd', 'Andini Maharani Arifin', 'dgddd', '12121', NULL, 'aaaaaaaaaaa', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id_prestasi` varchar(100) NOT NULL,
  `nama_prestasi` varchar(45) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`id_prestasi`, `nama_prestasi`, `gambar`, `deskripsi`) VALUES
('BJ-01', 'PROPER EMAS KE-12', 'WhatsApp Image 2023-01-04 at 20.49.48.jpeg', 'Penyerahan penghargaan tersebut diberikan langsung oleh Wakil Presiden Republik Indonesia K.H Ma’ruf Amin serta Menteri Lingkungan Hidup dan Kehutanan Siti Nurbaya yang diterima langsung oleh President Director & CEO Badak LNG Gema Iriandus Pahalawan di I'),
('BJ-02', 'UPSTREAM INNOVATION & IMPROVEMENT AWARD', 'WhatsApp Image 2023-01-04 at 20.54.48.jpeg', 'Tujuh tim Continous Improvrment Program Badak LNG berhasil memborong penghargaan di Ajang Upstream Innovation & Improvement Award');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `password`) VALUES
('wewe', 'wewewewe');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_alam`
--
ALTER TABLE `tb_alam`
  ADD PRIMARY KEY (`antrian`);

--
-- Indeks untuk tabel `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_alam`
--
ALTER TABLE `tb_alam`
  MODIFY `antrian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
