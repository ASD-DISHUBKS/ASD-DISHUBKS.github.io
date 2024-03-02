-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Agu 2023 pada 16.32
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dishub`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `disposisi`
--

CREATE TABLE `disposisi` (
  `id_disposisi` int(11) NOT NULL,
  `pengisi` varchar(50) NOT NULL,
  `tujuan` varchar(250) NOT NULL,
  `instruksi` varchar(300) NOT NULL,
  `catatan` varchar(200) NOT NULL,
  `id_suratmasuk` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `disposisi`
--

INSERT INTO `disposisi` (`id_disposisi`, `pengisi`, `tujuan`, `instruksi`, `catatan`, `id_suratmasuk`) VALUES
(1, 'Plt,KADISHUB', 'PENINJAUAN', '...', 'Penting', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `indeks`
--

CREATE TABLE `indeks` (
  `id_indeks` int(3) NOT NULL,
  `kode_indeks` varchar(5) NOT NULL,
  `judul_indeks` varchar(50) NOT NULL,
  `detail` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `indeks`
--

INSERT INTO `indeks` (`id_indeks`, `kode_indeks`, `judul_indeks`, `detail`) VALUES
(1, 'RNCN', 'Perencanaan', 'Pengumpulan data/pengelolaan data, Perumusan Informasi, Rencana pembangunan, Laporan bulanan/CAWU/tahunan/insidental, Statistik, Penambahan sekolah baru/jurusan baru, Kerjasama dengan sekolah lain/instansi lain, dll.'),
(2, 'UANG', 'Keuangan', '0'),
(10, 'SRN', 'Sarana dan Prasarana', ''),
(19, 'PGW', 'Kepegawaian', ''),
(20, 'LNGKP', 'Perlengkapan', 'Ini detail perlengkapan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `nip` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tell` varchar(100) NOT NULL,
  `tl` date DEFAULT NULL,
  `jabatan` varchar(100) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `kontak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`nip`, `gender`, `nama`, `tell`, `tl`, `jabatan`, `bidang`, `kontak`) VALUES
('19971227 202203 1 004', 'LAKI-LAKI', 'MUHAMMAD YOGIE RIANDHI.S.Tr.Tra', 'PEKANBARU', '1997-04-10', 'DANRU', 'BIDANG LALU LINTAS', '@myogieriandhi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratkeluar`
--

CREATE TABLE `suratkeluar` (
  `id_suratkeluar` int(5) NOT NULL,
  `no_suratkeluar` varchar(60) NOT NULL,
  `judul_suratkeluar` varchar(100) NOT NULL,
  `id_indeks` int(3) NOT NULL,
  `tujuan` varchar(60) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `keterangan` mediumtext NOT NULL,
  `berkas_suratkeluar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `suratkeluar`
--

INSERT INTO `suratkeluar` (`id_suratkeluar`, `no_suratkeluar`, `judul_suratkeluar`, `id_indeks`, `tujuan`, `tanggal_keluar`, `keterangan`, `berkas_suratkeluar`) VALUES
(1, '143/SMK-DH/H-12/2019', 'Balasan Permintaan Kerja Praktek', 8, 'UIN SUSKA RIAU', '2019-12-05', 'Oke', 'SURAT PERMOHONAN KP UKI.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratmasuk`
--

CREATE TABLE `suratmasuk` (
  `id_suratmasuk` int(3) NOT NULL,
  `no_suratmasuk` varchar(60) NOT NULL,
  `judul_suratmasuk` varchar(100) NOT NULL,
  `asal_surat` varchar(60) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_diterima` date NOT NULL,
  `id_indeks` int(3) NOT NULL,
  `keterangan` mediumtext NOT NULL,
  `berkas_suratmasuk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `suratmasuk`
--

INSERT INTO `suratmasuk` (`id_suratmasuk`, `no_suratmasuk`, `judul_suratmasuk`, `asal_surat`, `tanggal_masuk`, `tanggal_diterima`, `id_indeks`, `keterangan`, `berkas_suratmasuk`) VALUES
(28, '5e5341e82125d', 'Permintaan kerja praktek', 'uin suska riau', '2020-02-18', '2020-02-24', 22, '', '5e53421610899.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(1) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `bio` varchar(512) NOT NULL,
  `facebook` varchar(64) NOT NULL,
  `email` varchar(32) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `image`, `bio`, `facebook`, `email`, `level`) VALUES
(5, 'superadmin', '889a3a791b3875cfae413574b53da4bb8a90d53e', 'Marzuki', '5e53414b22179.jpg', 'saya adalah seorang mahasiswa yang giat', 'http://facebook.com/marzukey.ukey.9', 'marzukiberg@email.com', 1),
(6, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Iyan Robbi', '5e0dc3b44d80e.jpg', 'Iyan robi', 'http://facebook.com/iyanjr', 'user@email.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id_disposisi`),
  ADD KEY `id_suratmasuk` (`id_suratmasuk`);

--
-- Indeks untuk tabel `indeks`
--
ALTER TABLE `indeks`
  ADD PRIMARY KEY (`id_indeks`);

--
-- Indeks untuk tabel `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `suratkeluar`
--
ALTER TABLE `suratkeluar`
  ADD PRIMARY KEY (`id_suratkeluar`),
  ADD KEY `id_subindeks` (`id_indeks`);

--
-- Indeks untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  ADD PRIMARY KEY (`id_suratmasuk`),
  ADD KEY `id_subindeks` (`id_indeks`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `id_disposisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `indeks`
--
ALTER TABLE `indeks`
  MODIFY `id_indeks` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `suratkeluar`
--
ALTER TABLE `suratkeluar`
  MODIFY `id_suratkeluar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  MODIFY `id_suratmasuk` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
