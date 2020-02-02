-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Feb 2020 pada 18.41
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
  `tgl_boking` date NOT NULL,
  `jumlah_tiket` int(3) NOT NULL,
  `harga_tiket` int(10) NOT NULL,
  `total_pembayaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`id_pembayaran`, `kode_pembayaran`, `kode_tiket`, `tgl_boking`, `jumlah_tiket`, `harga_tiket`, `total_pembayaran`) VALUES
(1, 'D001', '001', '2020-02-22', 2, 700000, '1400000'),
(2, 'D0002', '33', '2020-02-20', 3, 3, '3'),
(3, 'D0002', '002', '2020-02-03', 5, 50000, '250000'),
(4, 'D0002', '003', '2020-02-25', 2, 700000, '1400000'),
(5, 'D0005', '001', '2020-02-08', 10, 50000, '500000'),
(6, 'D0006', '004', '2020-02-28', 4, 900000, '3600000');

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
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
