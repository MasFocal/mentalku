-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2023 pada 13.18
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
('Gangguan Kesehatan Mental Delirium', 'Perilaku tidak dibawah kendali kesadaran'),
('Gangguan Kesehatan Mental Demensia', 'Merasa gelisah'),
('Gangguan Kesehatan Mental Demensia', 'Susah tidur'),
('Gangguan Kesehatan Mental Demensia', 'Pikiran kacau'),
('Gangguan Kesehatan Mental Demensia', 'Merasa takut'),
('Gangguan Kesehatan Mental Demensia', 'Mudah tersinggung'),
('Gangguan Kesehatan Mental Demensia', 'Suka berhalusinasi'),
('Gangguan Kesehatan Mental Demensia', 'Percaya pada hal hal aneh'),
('Gangguan Kesehatan Mental Demensia', 'Perilaku tidak dibawah kendali kesadaran'),
('Gangguan Kesehatan Mental Amnestik', 'Merasa gelisah'),
('Gangguan Kesehatan Mental Amnestik', 'Susah tidur'),
('Gangguan Kesehatan Mental Amnestik', 'Pikiran kacau'),
('Gangguan Kesehatan Mental Amnestik', 'Merasa takut'),
('Gangguan Kesehatan Mental Amnestik', 'Kurang mampu dalam berbicara'),
('Gangguan Kesehatan Mental Amnestik', 'Mengkonsumsi obat penenang'),
('Gangguan Kesehatan Mental Amnestik', 'Mengalami hambatan pada saat bekerja'),
('Gangguan Kesehatan Mental Amnestik', 'Perilaku tidak dibawah kendali kesadaran'),
('Gangguan Kesehatan Mental Cemas Menyeluruh', 'Merasa gelisah'),
('Gangguan Kesehatan Mental Cemas Menyeluruh', 'Susah tidur'),
('Gangguan Kesehatan Mental Cemas Menyeluruh', 'Pikiran kacau'),
('Gangguan Kesehatan Mental Cemas Menyeluruh', 'Merasa takut'),
('Gangguan Kesehatan Mental Cemas Menyeluruh', 'Perilaku dibawah kendali kesadaran'),
('Gangguan Kesehatan Mental Cemas Menyeluruh', 'Keringat dingin'),
('Gangguan Kesehatan Mental Cemas Menyeluruh', 'Sering kencing'),
('Gangguan Kesehatan Mental Cemas Menyeluruh', 'Sesak nafas'),
('Gangguan Kesehatan Mental Somatoform', 'Merasa gelisah'),
('Gangguan Kesehatan Mental Somatoform', 'Susah tidur'),
('Gangguan Kesehatan Mental Somatoform', 'Pikiran kacau'),
('Gangguan Kesehatan Mental Somatoform', 'Merasa takut'),
('Gangguan Kesehatan Mental Somatoform', 'Perilaku dibawah kendali kesadaran'),
('Gangguan Kesehatan Mental Somatoform', 'Merasa cemas'),
('Gangguan Kesehatan Mental Somatoform', 'Mudah tersinggung'),
('Gangguan Kesehatan Mental Somatoform', 'Merasakan sakit nyeri pada bagian tubuh tertentu'),
('Gangguan Kesehatan Mental Kepribadian', 'Merasa gelisah'),
('Gangguan Kesehatan Mental Kepribadian', 'Susah tidur'),
('Gangguan Kesehatan Mental Kepribadian', 'Pikiran kacau'),
('Gangguan Kesehatan Mental Kepribadian', 'Merasa takut'),
('Gangguan Kesehatan Mental Kepribadian', 'Perilaku dibawah kendali kesadaran'),
('Gangguan Kesehatan Mental Kepribadian', 'Merasa mual/muntah/kembung'),
('Gangguan Kesehatan Mental Kepribadian', 'Pandangan seperti kabur'),
('Gangguan Kesehatan Mental Neurosis Depresif', 'Merasa gelisah'),
('Gangguan Kesehatan Mental Neurosis Depresif', 'Susah tidur'),
('Gangguan Kesehatan Mental Neurosis Depresif', 'Pikiran kacau'),
('Gangguan Kesehatan Mental Neurosis Depresif', 'Merasa takut'),
('Gangguan Kesehatan Mental Neurosis Depresif', 'Perilaku dibawah kendali kesadaran'),
('Gangguan Kesehatan Mental Neurosis Depresif', 'Mudah marah'),
('Gangguan Kesehatan Mental Neurosis Depresif', 'Sulit untuk berteman'),
('Gangguan Kesehatan Mental Neurosis Depresif', 'Selalu curiga terhadap orang lain'),
('Gangguan Kesehatan Mental Neurosis Depresif', 'Selalu merasa sedih'),
('Gangguan Kesehatan Mental Disosiatif', 'Merasa gelisah'),
('Gangguan Kesehatan Mental Disosiatif', 'Susah tidur'),
('Gangguan Kesehatan Mental Disosiatif', 'Pikiran kacau'),
('Gangguan Kesehatan Mental Disosiatif', 'Merasa takut'),
('Gangguan Kesehatan Mental Disosiatif', 'Perilaku dibawah kendali kesadaran'),
('Gangguan Kesehatan Mental Disosiatif', 'Merasa tidak berguna'),
('Gangguan Kesehatan Mental Disosiatif', 'Merasa Harga dirinya rendah'),
('Gangguan Kesehatan Mental Disosiatif', 'Berfikiran untuk mengakhiri hidupnya'),
('Gangguan Kesehatan Mental Disosiatif', 'Mengalami perasaan tidak nyata'),
('Gangguan Kesehatan Mental Disosiatif', 'Sering mengalami sakit kepala'),
('Gangguan Kesehatan Mental Skizofrenia', 'Merasa gelisah'),
('Gangguan Kesehatan Mental Skizofrenia', 'Susah tidur'),
('Gangguan Kesehatan Mental Skizofrenia', 'Pikiran kacau'),
('Gangguan Kesehatan Mental Skizofrenia', 'Merasa takut'),
('Gangguan Kesehatan Mental Skizofrenia', 'Ada perubahan suasana perasaan'),
('Gangguan Kesehatan Mental Skizofrenia', 'Tidak mampu menampakan emosinya'),
('Gangguan Kesehatan Mental Skizofrenia', 'Kurang dalam dorongan beraktivitas'),
('Gangguan Kesehatan Mental Skizofrenia', 'Kurang mampu dalam berbicara'),
('Gangguan Kesehatan Mental Skizofrenia', 'Merasa tidak dapat menikmati kegiatan yang disenangi'),
('Gangguan Kesehatan Mental Skizofrenia', 'Perilaku dibawah kendali kesadaran'),
('Gangguan Kesehatan Mental Afektif', 'Merasa gelisah'),
('Gangguan Kesehatan Mental Afektif', 'Susah tidur'),
('Gangguan Kesehatan Mental Afektif', 'Pikiran kacau'),
('Gangguan Kesehatan Mental Afektif', 'Merasa takut'),
('Gangguan Kesehatan Mental Afektif', 'Ada perubahan suasana perasaan'),
('Gangguan Kesehatan Mental Afektif', 'Merasa cepat lelah'),
('Gangguan Kesehatan Mental Afektif', 'Suka menyendiri'),
('Gangguan Kesehatan Mental Afektif', 'Berprasangka buruk'),
('Gangguan Kesehatan Mental Afektif', 'Berkeinginan menjauhkan diri dari masyarakat'),
('Gangguan Kesehatan Mental Afektif', 'Selalu merasa salah'),
('Gangguan Kesehatan Mental Afektif', 'Perilaku dibawah kendali kesadaran');

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
  `umur` int(2) NOT NULL,
  `jeniskelamin` varchar(9) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `email`, `password`, `nama`, `umur`, `jeniskelamin`, `alamat`, `nohp`) VALUES
(1, 'user@user.com', 'user', 'User', 21, 'perempuan', 'DxT', 123456789),
(2, 'tes@email', '', 'tes', 0, '', '', 0),
(3, 'agus@email', 'agus', 'Agus Supriyatno Pramojo', 19, 'Laki Laki', 'Jalan Belimbing No 12, Gilingan, Banjarsari, Surakarta', 863520462),
(4, 'dandan@user.com', 'dan12', 'dan', 0, '', '', 0),
(5, 'dandan@email', 'dandan', 'Daniel', 0, '', '', 0),
(6, 'danieldaniel@email', '12121212', 'daniel12', 0, '', '', 0),
(9, 'daniel12@email', '12121212', 'Daniel Putra', 0, '', '', 0);

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
  MODIFY `iduser` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
