-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jan 2020 pada 14.01
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket_pesawat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konsumen`
--

CREATE TABLE `tbl_konsumen` (
  `no_identitas` int(8) NOT NULL,
  `nama_konsumen` varchar(64) NOT NULL,
  `alamat_konsumen` varchar(100) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `umur` int(2) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tmpt_lahir` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_konsumen`
--

INSERT INTO `tbl_konsumen` (`no_identitas`, `nama_konsumen`, `alamat_konsumen`, `telp`, `umur`, `jenis_kelamin`, `tmpt_lahir`, `tanggal`) VALUES
(1, 'Hasan', 'Pondok Mas', '082116637104', 21, 'L', 'Bandung', '2019-07-02'),
(2, 'Andri', 'Bandung', '081234567890', 22, 'L', 'Bandung', '1998-01-01'),
(3, 'Iqbal', 'cikutra', '082118881634', 22, 'L', 'bandung', '0000-00-00'),
(4, 'aman', 'baros', '089239384884', 25, 'L', 'jakarta', '1995-02-07'),
(5, 'Citra', 'Glodok', '082122223453', 21, 'P', 'Jakarta', '1998-06-16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `kode_pembayaran` varchar(20) NOT NULL,
  `kode_tiket` varchar(18) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `jumlah_tiket` int(3) NOT NULL,
  `harga_tiket` int(10) NOT NULL,
  `total_pembayaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tiket`
--

CREATE TABLE `tbl_tiket` (
  `no_identitas` int(2) NOT NULL,
  `kode_tiket` varchar(50) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `waktu_berangkat` time NOT NULL,
  `kode_tujuan` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tiket`
--

INSERT INTO `tbl_tiket` (`no_identitas`, `kode_tiket`, `tgl_berangkat`, `waktu_berangkat`, `kode_tujuan`) VALUES
(1, '001', '2020-01-31', '06:19:18', 'D001'),
(2, '001', '2020-01-01', '00:09:00', 'D004'),
(3, '002', '2020-01-29', '02:49:00', 'D003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tujuan`
--

CREATE TABLE `tbl_tujuan` (
  `no_identitas` int(2) NOT NULL,
  `kode_tujuan` varchar(12) NOT NULL,
  `kota_tujuan` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tujuan`
--

INSERT INTO `tbl_tujuan` (`no_identitas`, `kode_tujuan`, `kota_tujuan`) VALUES
(1, '1', 'Bandung'),
(2, 'D001', 'Jakarta'),
(3, 'D002', 'Jakarta'),
(4, 'D003', 'SURABAYA'),
(5, 'D004', 'SAMARINDA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`nama_user`, `username`, `password`, `level`) VALUES
('Hasan', 'admin', 'admin', 1),
('Iqbal', 'adm', 'adm', 2),
('Juni', 'user', 'user', 3),
('Nadia', '123', '123', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_konsumen`
--
ALTER TABLE `tbl_konsumen`
  ADD PRIMARY KEY (`no_identitas`);

--
-- Indeks untuk tabel `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `tbl_tiket`
--
ALTER TABLE `tbl_tiket`
  ADD PRIMARY KEY (`no_identitas`);

--
-- Indeks untuk tabel `tbl_tujuan`
--
ALTER TABLE `tbl_tujuan`
  ADD PRIMARY KEY (`no_identitas`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_konsumen`
--
ALTER TABLE `tbl_konsumen`
  MODIFY `no_identitas` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_tiket`
--
ALTER TABLE `tbl_tiket`
  MODIFY `no_identitas` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_tujuan`
--
ALTER TABLE `tbl_tujuan`
  MODIFY `no_identitas` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
