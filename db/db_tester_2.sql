-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Nov 2023 pada 14.33
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
('Gangguan Kesehatan Mental Delirium', 'Merasa gelisah'),
('Gangguan Kesehatan Mental Delirium', 'Susah tidur'),
('Gangguan Kesehatan Mental Delirium', 'Pikiran kacau'),
('Gangguan Kesehatan Mental Delirium', 'Merasa takut'),
('Gangguan Kesehatan Mental Delirium', 'Suka berhalusinasi'),
('Gangguan Kesehatan Mental Delirium', 'Daya ingat terganggu'),
('Gangguan Kesehatan Mental Delirium', 'Lupa dengan identitas sendiri'),
('Gangguan Kesehatan Mental Delirium', 'Susah berkonsentrasi'),
('Gangguan Kesehatan Mental Delirium', 'Perilaku tidak dibawah kendali kesadaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa`
--

CREATE TABLE `diagnosa` (
  `iddiagnosa` char(3) NOT NULL,
  `diagnosa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `diagnosa`
--

INSERT INTO `diagnosa` (`iddiagnosa`, `diagnosa`) VALUES
('D01', 'Gangguan Kesehatan Mental Delirium'),
('D02', 'Gangguan Kesehatan Mental Demensia'),
('D03', 'Gangguan Kesehatan Mental Amnestik'),
('D04', 'Gangguan Kesehatan Mental Cemas Menyeluruh'),
('D05', 'Gangguan Kesehatan Mental Somatoform'),
('D06', 'Gangguan Kesehatan Mental Kepribadian'),
('D07', 'Gangguan Kesehatan Mental Neurosis Depresif'),
('D08', 'Gangguan Kesehatan Mental Disosiatif'),
('D09', 'Gangguan Kesehatan Mental Skizofrenia'),
('D10', 'Gangguan Kesehatan Mental Afektif');

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
('G01', 'Merasa gelisah'),
('G02', 'Susah tidur'),
('G03', 'Pikiran kacau'),
('G04', 'Merasa takut'),
('G05', 'Ada perubahan suasana perasaan'),
('G06', 'Merasa cepat lelah'),
('G07', 'Suka menyendiri'),
('G08', 'Berprasangka buruk'),
('G09', 'Berkeinginan menjauhkan diri dari masyarakat'),
('G10', 'Selalu merasa salah'),
('G11', 'Tidak mampu menampakan emosinya'),
('G12', 'Kurang dalam dorongan beraktivitas'),
('G13', 'Kurang mampu dalam berbicara'),
('G14', 'Merasa tidak dapat menikmati kegiatan yang disenangi'),
('G15', 'Perilaku dibawah kendali kesadaran'),
('G16', 'Merasa tidak berguna'),
('G17', 'Merasa Harga dirinya rendah'),
('G18', 'Berfikiran untuk mengakhiri hidupnya'),
('G19', 'Mengalami perasaan tidak nyata'),
('G20', 'Sering mengalami sakit kepala'),
('G21', 'Mudah marah'),
('G22', 'Sulit untuk berteman'),
('G23', 'Selalu curiga terhadap orang lain'),
('G24', 'Selalu merasa sedih'),
('G25', 'Merasa mual/muntah/kembung'),
('G26', 'Pandangan seperti kabur'),
('G27', 'Merasa cemas'),
('G28', 'Mudah tersinggung'),
('G29', 'Merasakan sakit nyeri pada bagian tubuh tertentu'),
('G30', 'Suka berhalusinasi'),
('G31', 'Daya ingat terganggu'),
('G32', 'Lupa dengan identitas sendiri'),
('G33', 'Susah berkonsentrasi'),
('G34', 'Mengkonsumsi obat penenang'),
('G35', 'Keringat dingin'),
('G36', 'Sering kencing'),
('G37', 'Sesak nafas'),
('G38', 'Percaya pada hal hal aneh'),
('G39', 'Mengalami hambatan pada saat bekerja'),
('G40', 'Perilaku tidak dibawah kendali kesadaran');

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
(3, 'agus@email', 'agus', 'agus', '', 19, 'LakiLaki', 'swswswswsws', 863520462),
(4, 'dandan@user.com', 'dan', 'dan', '', 0, '', '', 0),
(5, 'dandan@email', 'dandan', 'Daniel', '', 0, '', '', 0);

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
  MODIFY `iduser` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
