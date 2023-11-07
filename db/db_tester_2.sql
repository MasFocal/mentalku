-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2023 pada 14.53
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tester_2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(2) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idadmin`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'Daniel Putra', 'daniel', 'daniel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `basispengetahuan`
--

CREATE TABLE `basispengetahuan` (
  `diagnosa` varchar(100) NOT NULL,
  `gejala` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `basispengetahuan`
--

INSERT INTO `basispengetahuan` (`diagnosa`, `gejala`) VALUES
('SKWSWSMKW', 'JWSNJWNSJWNSJWNJS'),
('AAAA', 'DDD'),
('Gangguan Kesehatan Mental Disosiatif', 'Merasa gelisah, susah tidur, pikirannya kacau dan merasa takut'),
('Gangguan Kesehatan Mental Disosiatif', 'Merasa cepat lelah'),
('Gangguan Kesehatan Mental Demensia', 'Merasa gelisah, susah tidur, pikirannya kacau dan merasa takut'),
('Gangguan Kesehatan Mental Demensia', 'Merasa cepat lelah'),
('Gangguan Kesehatan Mental Skizofrenia', 'Tidak mampu menampakan emosinya'),
('Gangguan Kesehatan Mental Skizofrenia', 'Tidak dapat menikmati kegiatan yang disenanginya'),
('Gangguan Kesehatan Mental Neurosis Depresif', 'Selalu merasa salah'),
('Gangguan Kesehatan Mental Neurosis Depresif', 'Kurang dalam dorongan beraktivitas'),
('Gangguan Kesehatan Mental Neurosis Depresif', 'Sulit kencing'),
('Gangguan Kesehatan Mental Afektif', 'Kurang mampu berbicara'),
('Gangguan Kesehatan Mental Afektif', 'Dibawah kendali kesadarannya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa`
--

CREATE TABLE `diagnosa` (
  `iddiagnosa` char(3) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `diagnosa`
--

INSERT INTO `diagnosa` (`iddiagnosa`, `diagnosa`, `solusi`) VALUES
('D01', 'Gangguan Kesehatan Mental Delirium', ''),
('D02', 'Gangguan Kesehatan Mental Demensia', ''),
('D03', 'Gangguan Kesehatan Mental Amnestik', ''),
('D04', 'Gangguan Kesehatan Mental Cemas Menyeluruh', ''),
('D05', 'Gangguan Kesehatan Mental Somatoform', ''),
('D06', 'Gangguan Kesehatan Mental Kepribadian', ''),
('D07', 'Gangguan Kesehatan Mental Neurosis Depresif', ''),
('D08', 'Gangguan Kesehatan Mental Disosiatif', ''),
('D09', 'Gangguan Kesehatan Mental Skizofrenia', ''),
('D10', 'Gangguan Kesehatan Mental Afektif', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `idgejala` char(3) NOT NULL,
  `gejala` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`idgejala`, `gejala`) VALUES
('G01', 'Merasa gelisah, susah tidur, pikirannya kacau dan merasa takut'),
('G02', 'Ada perubahan suasana perasaan'),
('G03', 'Merasa cepat lelah'),
('G04', 'Suka menyendiri'),
('G05', 'Berprasangka buruk'),
('G06', 'Berkeinginan menjauhkan diri dari masyarakat'),
('G07', 'Selalu merasa salah'),
('G08', 'Tidak mampu menampakan emosinya'),
('G09', 'Kurang dalam dorongan beraktivitas'),
('G10', 'Kurang mampu berbicara'),
('G11', 'Tidak dapat menikmati kegiatan yang disenanginya'),
('G12', 'Dibawah kendali kesadarannya'),
('G13', 'Tidak dibawah kendali kesadarannya'),
('G14', 'Merasa tidak berguna'),
('G15', 'Merasa Harga dirinya rendah'),
('G16', 'Pernah berfikiran untuk mengakhiri hidupnya'),
('G17', 'Mengalami perasaan tidak nyata'),
('G18', 'Sering mengalami sakit kepala'),
('G19', 'Mudah marah'),
('G20', 'Sulit untuk berteman'),
('G21', 'Selalu curiga terhadap orang lain'),
('G22', 'Selalu merasa sedih'),
('G23', 'Merasa mual'),
('G24', 'Muntah'),
('G25', 'Kembung'),
('G26', 'Merasa pandangannya ganda'),
('G27', 'Merasa cemas'),
('G28', 'Mudah tersinggung'),
('G29', 'Merasa sakit nyeri pada tubuhnya'),
('G30', 'Persepsinya berlebihan pada suatu bagian tubuhnya'),
('G31', 'Sering kencing'),
('G32', 'Sulit kencing'),
('G33', 'Sesak nafas'),
('G34', 'Keringat dingin'),
('G35', 'Sulit untuk berbicara'),
('G36', 'Mengkonsumsi obat penenang'),
('G37', 'Tidak mampu membayangkan masa depan'),
('G38', 'Tidak mampu mengenali hal-hal yang baru'),
('G39', 'Mengalami hambatan pada pekerjaan'),
('G40', 'Tidak mengenal dimana ia tinggal sekarang'),
('G41', 'Percaya terhadap hal-hal yang aneh'),
('G42', 'Suka berhalusinasi'),
('G43', 'Terganggu daya ingatnya'),
('G44', 'Lupa dengan identitasnya'),
('G45', 'Susah berkonsentrasi'),
('G46', 'Sering berilusinasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(4) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `umur` int(2) NOT NULL,
  `jeniskelamin` varchar(9) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `email`, `password`, `nama`, `foto`, `umur`, `jeniskelamin`, `alamat`, `nohp`) VALUES
(1, 'user@user.com', 'user', 'User', '', 21, 'perempuan', 'DxT', 123456789),
(2, 'tes@email', '', 'tes', '', 0, '', '', 0),
(3, 'agus@email', 'agus', 'agus', '', 0, '', '', 0),
(4, 'dandan@user.com', 'dan', 'dan', '', 0, '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indeks untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`iddiagnosa`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`idgejala`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
