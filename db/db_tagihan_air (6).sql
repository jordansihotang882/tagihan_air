-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2023 pada 14.51
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tagihan_air`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'NOEL', 'admin', 'admin'),
(2, 'rasmi', 'rasmi', 'rasmi123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `id_ktp` varchar(20) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `alamat_pemasangan` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `kondisi_bangunan` varchar(30) NOT NULL,
  `luas_bangunan` varchar(10) NOT NULL,
  `jumlah_penghuni` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `id_ktp`, `no_hp`, `desa`, `kode_pos`, `alamat_pemasangan`, `email`, `kondisi_bangunan`, `luas_bangunan`, `jumlah_penghuni`, `username`, `password`, `status`) VALUES
(6, 'Bapak Gabriel Marbun', '1201052345870001', '082287379030', 'saragih', '22565', 'saragih induk', '', 'baik', '', '', 'gabriel', 'gabriel', 'aktif'),
(7, 'Bapak Detik Nainggolan', '', '082183889038', '', '', '', '', '', '', '', 'detik', 'detik123', 'aktif'),
(8, 'Bapak Aldi Barutu', '', '085267389386', '', '', '', '', '', '', '', 'aldi', 'aldi123', 'aktif'),
(9, 'Bapak Alparo Siringo', '', '081548765432', '', '', '', '', '', '', '', 'alparo', 'alparo', 'aktif'),
(10, 'Almen Tinambunan', '', '082385636322', '', '', '', '', '', '', '', 'almen', 'almen123', 'aktif'),
(15, 'bapak saiman tumanggor', '1201052345870001', '082130480580', 'saragih', '22565', 'saragih induk', 'saiman@gmail.com', '', '', '', 'saiman', 'saiman', 'aktif'),
(16, 'Dayatullah Barasa', '1201052345870001', '089787878667', 'saragih', '', '', '', '', '', '', 'dayatullah', 'dayatullah', 'belum_aktif'),
(17, 'bapak kalima ziliwu', '', '081548765432', '', '', '', '', '', '', '', 'kalima', 'kalima', 'belum_aktif'),
(18, 'op. yanti gajah', '', '081521872817', '', '', '', '', '', '', '', 'yanti', 'yanti123', 'belum_aktif'),
(19, 'bapak palen simanjuntak', '', '082178652809', '', '', '', '', '', '', '', 'palen', 'palen123', 'belum_aktif'),
(20, 'op parlon tumanggor', '', '082238494748', '', '', '', '', '', '', '', 'parlon', 'parlon', 'belum_aktif'),
(21, 'ibu yanti barutu', '', '082130480580', '', '', '', '', '', '', '', 'ibuyanti', 'inuyanti', 'belum_aktif'),
(22, 'ibu nur manalu', '', '082304859797', '', '', '', '', '', '', '', 'nur123', 'nur123', 'belum_aktif'),
(23, 'op saiman bako', '', '08128102801', '', '', '', '', '', '', '', 'opsaiman', 'opsaiman', 'belum_aktif'),
(24, 'ibu asba bako', '', '089787878667', '', '', '', '', '', '', '', 'asba123', 'asba123', 'belum_aktif'),
(25, 'bapak adi jawa', '1201052345870001', '082208308838', 'saragih', '22565', 'saragih induk', 'adi@gmail.com', 'baik', '100 m', '5 orang', 'adi123', 'adi123', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemakaian`
--

CREATE TABLE `tb_pemakaian` (
  `id_pemakaian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `meter_awal` int(50) NOT NULL,
  `meter_akhir` int(50) NOT NULL,
  `total_meter` int(30) NOT NULL,
  `jumlah_pembayaran` int(30) NOT NULL,
  `bukti_pembayaran` varchar(50) NOT NULL,
  `status_pembayaran` int(5) NOT NULL,
  `opsi_pembayaran` varchar(20) NOT NULL,
  `tahun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='c';

--
-- Dumping data untuk tabel `tb_pemakaian`
--

INSERT INTO `tb_pemakaian` (`id_pemakaian`, `id_pelanggan`, `bulan`, `meter_awal`, `meter_akhir`, `total_meter`, `jumlah_pembayaran`, `bukti_pembayaran`, `status_pembayaran`, `opsi_pembayaran`, `tahun`) VALUES
(20, 1, '052020', 0, 30, 0, 0, 'jj.png', 1, '', '2020'),
(21, 2, '052020', 0, 50, 0, 0, '', 0, '', '2020'),
(22, 1, '012023', 0, 50, 0, 0, 'bnnn.jpg', 0, '', '2023'),
(23, 2, '012023', 0, 70, 0, 0, '', 0, '', '2023'),
(24, 3, '012023', 4, 100, 0, 0, '', 0, '', '2023'),
(25, 1, '062023', 1, 10, 0, 0, 'TAPUT13.png', 1, '', '2023'),
(26, 2, '062023', 0, 0, 0, 0, '', 0, '', '2023'),
(27, 3, '062023', 0, 0, 0, 0, '', 0, '', '2023'),
(28, 4, '062023', 0, 0, 0, 0, '', 0, '', '2023'),
(29, 5, '062023', 0, 50, 0, 0, 'Picture11.png', 1, '', '2023'),
(30, 1, '122027', 10, 50, 0, 0, 'TAPUT14.png', 0, '', '2027'),
(32, 3, '122027', 0, 40, 0, 0, '', 0, '', '2027'),
(33, 5, '122027', 0, 30, 0, 0, 'Picture12.png', 1, '', '2027'),
(35, 2, '122027', 0, 60, 0, 0, '', 0, '', '2027'),
(38, 1, '112027', 0, 10, 0, 0, '', 0, '', '2027'),
(39, 2, '112027', 0, 20, 0, 0, '', 0, '', '2027'),
(40, 3, '112027', 0, 30, 0, 0, '', 0, '', '2027'),
(41, 5, '112027', 0, 40, 0, 0, '', 0, '', '2027'),
(42, 1, '042024', 0, 0, 0, 0, '', 0, '', '2027'),
(43, 2, '042024', 0, 0, 0, 0, '', 0, '', '2024'),
(44, 3, '042024', 0, 0, 0, 0, '', 0, '', '2024'),
(45, 5, '042024', 0, 30, 0, 0, 'Picture1.png', 1, '', '2024'),
(46, 6, '062023', 1021, 1184, 0, 0, '2021-05-02.jpg', 0, '', '2023'),
(47, 7, '062023', 0, 0, 0, 0, '', 0, '', '2023'),
(48, 8, '062023', 0, 0, 0, 0, '', 0, '', '2023'),
(49, 9, '062023', 0, 0, 0, 0, '', 0, '', '2023'),
(50, 10, '062023', 0, 0, 0, 0, '', 0, '', '2023'),
(51, 6, '012023', 0, 50, 0, 0, 'TAPUT20.png', 1, '', '2023'),
(52, 7, '012023', 0, 0, 0, 0, '', 0, '', '2023'),
(53, 8, '012023', 0, 0, 0, 0, '', 0, '', '2023'),
(54, 9, '012023', 0, 0, 0, 0, '', 0, '', '2023'),
(55, 10, '012023', 0, 0, 0, 0, '', 0, '', '2023'),
(56, 6, '072023', 0, 0, 0, 0, 'TAPUT18.png', 0, '', '2023'),
(57, 7, '072023', 0, 50, 0, 0, '2021-04-12.jpg', 1, '', '2023'),
(58, 8, '072023', 0, 0, 0, 0, '', 0, '', '2023'),
(59, 9, '072023', 0, 0, 0, 0, '', 0, '', '2023'),
(60, 10, '072023', 0, 0, 0, 0, '', 0, '', '2023'),
(61, 6, '052023', 0, 30, 0, 0, 'TAPUT21.png', 0, '', '2023'),
(62, 7, '052023', 0, 0, 0, 0, '', 0, '', '2023'),
(63, 8, '052023', 0, 0, 0, 0, '', 0, '', '2023'),
(64, 9, '052023', 0, 0, 0, 0, '', 0, '', '2023'),
(65, 10, '052023', 0, 0, 0, 0, '', 0, '', '2023'),
(66, 6, '082023', 0, 60, 0, 0, '', 0, 'bayar_langsung', '2023'),
(67, 7, '082023', 0, 0, 0, 0, '', 0, '', '2023'),
(68, 8, '082023', 0, 0, 0, 0, '', 0, '', '2023'),
(69, 9, '082023', 0, 0, 0, 0, '', 0, '', '2023'),
(70, 10, '082023', 0, 0, 0, 0, '', 0, '', '2023'),
(71, 11, '082023', 0, 0, 0, 0, '', 0, '', '2023'),
(72, 12, '082023', 0, 0, 0, 0, '', 0, '', '2023'),
(73, 13, '082023', 0, 0, 0, 0, '', 0, '', '2023'),
(74, 6, '012020', 0, 0, 0, 0, '', 0, '', '2023'),
(75, 7, '012020', 1000, 1500, 0, 0, '', 0, '', '2020'),
(76, 8, '012020', 0, 0, 0, 0, '', 0, '', '2020'),
(77, 9, '012020', 0, 0, 0, 0, '', 0, '', '2020'),
(78, 10, '012020', 0, 0, 0, 0, '', 0, '', '2020'),
(79, 15, '012020', 0, 0, 0, 0, '', 0, '', '2020'),
(80, 16, '012020', 0, 0, 0, 0, '', 0, '', '2020'),
(81, 17, '012020', 0, 0, 0, 0, '', 0, '', '2020'),
(82, 18, '012020', 0, 0, 0, 0, '', 0, '', '2020'),
(83, 19, '012020', 0, 0, 0, 0, '', 0, '', '2020'),
(84, 20, '012020', 0, 0, 0, 0, '', 0, '', '2020'),
(85, 21, '012020', 0, 0, 0, 0, '', 0, '', '2020'),
(86, 22, '012020', 0, 0, 0, 0, '', 0, '', '2020'),
(87, 23, '012020', 0, 0, 0, 0, '', 0, '', '2020'),
(88, 24, '012020', 0, 0, 0, 0, '', 0, '', '2020'),
(89, 25, '012020', 0, 0, 0, 0, '', 0, '', '2020'),
(90, 6, '092023', 1021, 1184, 0, 0, '', 0, '', '2023'),
(91, 7, '092023', 1422, 1487, 0, 0, '', 0, '', '2023'),
(92, 8, '092023', 1000, 1025, 0, 0, '', 0, '', '2023'),
(93, 9, '092023', 1222, 1249, 0, 0, '', 0, '', '2023'),
(94, 10, '092023', 7162, 7195, 0, 0, '', 0, '', '2023'),
(95, 15, '092023', 1025, 1050, 0, 0, '', 0, '', '2023'),
(96, 16, '092023', 636, 663, 0, 0, '', 0, '', '2023'),
(97, 17, '092023', 239, 249, 0, 0, '', 0, '', '2023'),
(98, 18, '092023', 1904, 1946, 0, 0, '', 0, '', '2023'),
(99, 19, '092023', 2009, 2143, 0, 0, '', 0, '', '2023'),
(100, 20, '092023', 0, 0, 0, 0, '', 0, '', '2023'),
(101, 21, '092023', 0, 0, 0, 0, '', 0, '', '2023'),
(102, 22, '092023', 0, 0, 0, 0, '', 0, '', '2023'),
(103, 23, '092023', 0, 0, 0, 0, '', 0, '', '2023'),
(104, 24, '092023', 0, 0, 0, 0, '', 0, '', '2023'),
(105, 25, '092023', 0, 0, 0, 0, '', 0, '', '2023'),
(106, 15, '082023', 0, 0, 0, 0, '', 0, '', ''),
(107, 16, '082023', 0, 0, 0, 0, '', 0, '', ''),
(108, 17, '082023', 0, 0, 0, 0, '', 0, '', ''),
(109, 18, '082023', 0, 0, 0, 0, '', 0, '', ''),
(110, 19, '082023', 0, 0, 0, 0, '', 0, '', ''),
(111, 20, '082023', 0, 0, 0, 0, '', 0, '', ''),
(112, 21, '082023', 0, 0, 0, 0, '', 0, '', ''),
(113, 22, '082023', 0, 0, 0, 0, '', 0, '', ''),
(114, 23, '082023', 0, 0, 0, 0, '', 0, '', ''),
(115, 24, '082023', 0, 0, 0, 0, '', 0, '', ''),
(116, 25, '082023', 0, 0, 0, 0, '', 0, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `jumlah_bayar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tagihan`
--

CREATE TABLE `tb_tagihan` (
  `id_tagihan` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_pemakaian` int(11) NOT NULL,
  `bulan` varchar(30) NOT NULL,
  `total_meter` int(20) NOT NULL,
  `tagihan` varchar(50) NOT NULL,
  `denda` varchar(50) NOT NULL,
  `total_bayar` varchar(50) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tagihan`
--

INSERT INTO `tb_tagihan` (`id_tagihan`, `id_pelanggan`, `id_pemakaian`, `bulan`, `total_meter`, `tagihan`, `denda`, `total_bayar`, `tgl_bayar`, `status`) VALUES
(1, 1, 1, '082020', 1000, '100000', '0', '100000', '2020-08-31', 'sudah bayar'),
(2, 1, 0, '062023', 0, '', '30000', '', '2023-06-16', 'Sudah Bayar'),
(3, 1, 0, '062023', 0, '', '10000', '', '2023-06-16', '0'),
(4, 1, 0, '062023', 0, '', '0', '', '0000-00-00', '0'),
(5, 1, 0, '062023', 0, '', '0', '', '0000-00-00', '0'),
(6, 1, 0, '062023', 0, '', '0', '', '0000-00-00', '0'),
(7, 1, 0, '062023', 0, '', '0', '', '0000-00-00', '0'),
(8, 1, 0, '062023', 0, '', '0', '', '0000-00-00', '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `tb_pemakaian`
--
ALTER TABLE `tb_pemakaian`
  ADD PRIMARY KEY (`id_pemakaian`);

--
-- Indeks untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tb_pemakaian`
--
ALTER TABLE `tb_pemakaian`
  MODIFY `id_pemakaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  MODIFY `id_tagihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
