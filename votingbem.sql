-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 Mei 2019 pada 08.48
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votingbem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kandidat`
--

CREATE TABLE `kandidat` (
  `id_kandidat` int(11) NOT NULL,
  `nama_ketua` varchar(100) NOT NULL,
  `jenkel_ketua` varchar(20) NOT NULL,
  `nama_wakil` varchar(100) NOT NULL,
  `jenkel_wakil` varchar(20) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `nama_ketua`, `jenkel_ketua`, `nama_wakil`, `jenkel_wakil`, `visi`, `misi`, `gambar`) VALUES
(1, 'Ir.Jokowidodo', 'laki-laki', 'Kh.Maaruf Amin', 'Laki-laki', 'menjadi yang terbaik', 'memajukan universitas', '01.jpg'),
(2, 'Prabowo subianto', 'laki-laki', 'Sandiaga Uno', 'Laki-laki', 'menjadi yang terbaik', 'memajukan universitas', '02.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilih`
--

CREATE TABLE `pemilih` (
  `nim` varchar(9) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenkel_pil` varchar(20) NOT NULL,
  `prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilih`
--

INSERT INTO `pemilih` (`nim`, `nama`, `jenkel_pil`, `prodi`) VALUES
('217520002', 'Tri', 'Perempuan', 'Sistem Informasi'),
('217520005', 'rinto', 'Laki-laki', 'Teknik Informatika'),
('217520008', 'septi', 'Perempuan', 'Sistem Informasi'),
('217520010', 'auri', 'Perempuan', 'Teknik Informatika'),
('217520011', 'ferri', 'Laki-laki', 'Teknik Informatika'),
('217520016', 'gorbyno', 'Laki-laki', 'Sistem Informasi'),
('217520017', 'Deni', 'Laki-laki', 'Sistem Informasi'),
('217520018', 'Mario', 'Laki-laki', 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(120) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `email`, `password`, `level`) VALUES
(32, 'byno', 'bynogan@gmail.com', 'admin', 'ADMIN'),
(33, 'dian', 'dian@gmail.com', 'admin', 'OPERATOR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suara`
--

CREATE TABLE `suara` (
  `id_suara` int(11) NOT NULL,
  `nim` varchar(9) NOT NULL,
  `id_kandidat` int(11) NOT NULL,
  `tgl_suara` time NOT NULL,
  `status_pemilih` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suara`
--

INSERT INTO `suara` (`id_suara`, `nim`, `id_kandidat`, `tgl_suara`, `status_pemilih`) VALUES
(1, '217520017', 2, '00:00:00', 'mahasiswa'),
(4, '217520010', 2, '00:00:00', 'mahasiswa'),
(7, '217520016', 1, '00:00:00', 'mahasiswa'),
(8, '217520002', 1, '00:00:00', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indexes for table `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `suara`
--
ALTER TABLE `suara`
  ADD PRIMARY KEY (`id_suara`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id_kandidat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `suara`
--
ALTER TABLE `suara`
  MODIFY `id_suara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
