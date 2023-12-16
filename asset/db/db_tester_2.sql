-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2023 pada 11.46
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
  `idbasispengetahuan` int(3) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `gejala` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `basispengetahuan`
--

INSERT INTO `basispengetahuan` (`idbasispengetahuan`, `diagnosa`, `gejala`) VALUES
(10, 'Gangguan Kesehatan Mental Delirium', 'Merasa gelisah'),
(11, 'Gangguan Kesehatan Mental Delirium', 'Susah tidur'),
(12, 'Gangguan Kesehatan Mental Delirium', 'Pikiran kacau'),
(13, 'Gangguan Kesehatan Mental Delirium', 'Suka berhalusinasi'),
(14, 'Gangguan Kesehatan Mental Delirium', 'Daya ingat terganggu'),
(15, 'Gangguan Kesehatan Mental Delirium', 'Lupa dengan identitas sendiri'),
(16, 'Gangguan Kesehatan Mental Delirium', 'Susah berkonsentrasi'),
(17, 'Gangguan Kesehatan Mental Delirium', 'Perilaku tidak dibawah kendali kesadaran'),
(18, 'Gangguan Kesehatan Mental Demensia', 'Merasa gelisah'),
(19, 'Gangguan Kesehatan Mental Demensia', 'Susah tidur'),
(20, 'Gangguan Kesehatan Mental Demensia', 'Pikiran kacau'),
(21, 'Gangguan Kesehatan Mental Demensia', 'Merasa takut'),
(22, 'Gangguan Kesehatan Mental Demensia', 'Mudah tersinggung'),
(23, 'Gangguan Kesehatan Mental Demensia', 'Suka berhalusinasi'),
(24, 'Gangguan Kesehatan Mental Demensia', 'Percaya pada hal hal aneh'),
(25, 'Gangguan Kesehatan Mental Demensia', 'Perilaku tidak dibawah kendali kesadaran'),
(26, 'Gangguan Kesehatan Mental Delirium', 'Merasa takut'),
(27, 'Gangguan Kesehatan Mental Amnestik', 'Merasa gelisah'),
(28, 'Gangguan Kesehatan Mental Amnestik', 'Susah tidur'),
(29, 'Gangguan Kesehatan Mental Amnestik', 'Pikiran kacau'),
(30, 'Gangguan Kesehatan Mental Amnestik', 'Merasa takut'),
(31, 'Gangguan Kesehatan Mental Amnestik', 'Kurang mampu dalam berbicara'),
(32, 'Gangguan Kesehatan Mental Amnestik', 'Mengkonsumsi obat penenang'),
(33, 'Gangguan Kesehatan Mental Amnestik', 'Mengalami hambatan pada saat bekerja'),
(34, 'Gangguan Kesehatan Mental Amnestik', 'Perilaku tidak dibawah kendali kesadaran'),
(35, 'Gangguan Kesehatan Mental Cemas Menyeluruh', 'Merasa gelisah'),
(36, 'Gangguan Kesehatan Mental Cemas Menyeluruh', 'Susah tidur'),
(37, 'Gangguan Kesehatan Mental Cemas Menyeluruh', 'Pikiran kacau'),
(38, 'Gangguan Kesehatan Mental Cemas Menyeluruh', 'Merasa takut'),
(39, 'Gangguan Kesehatan Mental Cemas Menyeluruh', 'Perilaku dibawah kendali kesadaran'),
(40, 'Gangguan Kesehatan Mental Cemas Menyeluruh', 'Keringat dingin'),
(41, 'Gangguan Kesehatan Mental Cemas Menyeluruh', 'Sering kencing'),
(42, 'Gangguan Kesehatan Mental Cemas Menyeluruh', 'Sesak nafas'),
(43, 'Gangguan Kesehatan Mental Somatoform', 'Merasa gelisah'),
(44, 'Gangguan Kesehatan Mental Somatoform', 'Susah tidur'),
(45, 'Gangguan Kesehatan Mental Somatoform', 'Pikiran kacau'),
(46, 'Gangguan Kesehatan Mental Somatoform', 'Merasa takut'),
(47, 'Gangguan Kesehatan Mental Somatoform', 'Perilaku dibawah kendali kesadaran'),
(48, 'Gangguan Kesehatan Mental Somatoform', 'Merasa cemas'),
(49, 'Gangguan Kesehatan Mental Somatoform', 'Mudah tersinggung'),
(50, 'Gangguan Kesehatan Mental Somatoform', 'Merasakan sakit nyeri pada bagian tubuh tertentu'),
(51, 'Gangguan Kesehatan Mental Kepribadian', 'Merasa gelisah'),
(52, 'Gangguan Kesehatan Mental Kepribadian', 'Susah tidur'),
(53, 'Gangguan Kesehatan Mental Kepribadian', 'Pikiran kacau'),
(54, 'Gangguan Kesehatan Mental Kepribadian', 'Merasa takut'),
(55, 'Gangguan Kesehatan Mental Kepribadian', 'Perilaku dibawah kendali kesadaran'),
(56, 'Gangguan Kesehatan Mental Kepribadian', 'Merasa mual/muntah/kembung'),
(57, 'Gangguan Kesehatan Mental Kepribadian', 'Pandangan seperti kabur'),
(58, 'Gangguan Kesehatan Mental Neurosis Depresif', 'Merasa gelisah'),
(59, 'Gangguan Kesehatan Mental Neurosis Depresif', 'Susah tidur'),
(60, 'Gangguan Kesehatan Mental Neurosis Depresif', 'Pikiran kacau'),
(61, 'Gangguan Kesehatan Mental Neurosis Depresif', 'Merasa takut'),
(62, 'Gangguan Kesehatan Mental Neurosis Depresif', 'Perilaku dibawah kendali kesadaran'),
(63, 'Gangguan Kesehatan Mental Neurosis Depresif', 'Mudah marah'),
(64, 'Gangguan Kesehatan Mental Neurosis Depresif', 'Sulit untuk berteman'),
(65, 'Gangguan Kesehatan Mental Neurosis Depresif', 'Selalu curiga terhadap orang lain'),
(66, 'Gangguan Kesehatan Mental Neurosis Depresif', 'Selalu merasa sedih'),
(67, 'Gangguan Kesehatan Mental Disosiatif', 'Merasa gelisah'),
(68, 'Gangguan Kesehatan Mental Disosiatif', 'Susah tidur'),
(69, 'Gangguan Kesehatan Mental Disosiatif', 'Pikiran kacau'),
(70, 'Gangguan Kesehatan Mental Disosiatif', 'Merasa takut'),
(71, 'Gangguan Kesehatan Mental Disosiatif', 'Perilaku dibawah kendali kesadaran'),
(72, 'Gangguan Kesehatan Mental Disosiatif', 'Merasa tidak berguna'),
(73, 'Gangguan Kesehatan Mental Disosiatif', 'Merasa Harga dirinya rendah'),
(74, 'Gangguan Kesehatan Mental Disosiatif', 'Berfikiran untuk mengakhiri hidupnya'),
(75, 'Gangguan Kesehatan Mental Disosiatif', 'Mengalami perasaan tidak nyata'),
(76, 'Gangguan Kesehatan Mental Disosiatif', 'Sering mengalami sakit kepala'),
(77, 'Gangguan Kesehatan Mental Skizofrenia', 'Merasa gelisah'),
(78, 'Gangguan Kesehatan Mental Skizofrenia', 'Susah tidur'),
(79, 'Gangguan Kesehatan Mental Skizofrenia', 'Pikiran kacau'),
(80, 'Gangguan Kesehatan Mental Skizofrenia', 'Merasa takut'),
(81, 'Gangguan Kesehatan Mental Skizofrenia', 'Ada perubahan suasana perasaan'),
(82, 'Gangguan Kesehatan Mental Skizofrenia', 'Tidak mampu menampakan emosinya'),
(83, 'Gangguan Kesehatan Mental Skizofrenia', 'Kurang dalam dorongan beraktivitas'),
(84, 'Gangguan Kesehatan Mental Skizofrenia', 'Kurang mampu dalam berbicara'),
(85, 'Gangguan Kesehatan Mental Skizofrenia', 'Merasa tidak dapat menikmati kegiatan yang disenangi'),
(86, 'Gangguan Kesehatan Mental Skizofrenia', 'Perilaku dibawah kendali kesadaran'),
(87, 'Gangguan Kesehatan Mental Afektif', 'Merasa gelisah'),
(88, 'Gangguan Kesehatan Mental Afektif', 'Susah tidur'),
(89, 'Gangguan Kesehatan Mental Afektif', 'Pikiran kacau'),
(90, 'Gangguan Kesehatan Mental Afektif', 'Merasa takut'),
(91, 'Gangguan Kesehatan Mental Afektif', 'Ada perubahan suasana perasaan'),
(92, 'Gangguan Kesehatan Mental Afektif', 'Merasa cepat lelah'),
(93, 'Gangguan Kesehatan Mental Afektif', 'Suka menyendiri'),
(94, 'Gangguan Kesehatan Mental Afektif', 'Berprasangka buruk'),
(95, 'Gangguan Kesehatan Mental Afektif', 'Berkeinginan menjauhkan diri dari masyarakat'),
(96, 'Gangguan Kesehatan Mental Afektif', 'Selalu merasa salah'),
(97, 'Gangguan Kesehatan Mental Afektif', 'Perilaku dibawah kendali kesadaran');

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
-- Struktur dari tabel `psikolog`
--

CREATE TABLE `psikolog` (
  `idpsikolog` char(3) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `psikolog`
--

INSERT INTO `psikolog` (`idpsikolog`, `nama`, `alamat`) VALUES
('P01', 'Christina Irnawati S.Psi., M.Psi.,Psikolog.,CH.,CT', 'Jl. Kapten Dr. Prakosa Bayan Krajan No.RT12/20, Kadipiro, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57136'),
('P02', 'Tan Laurencia Yosita, S.Psi., M.Psi., Psikolog', 'Jl. Kh Ahmad Dahlan, Karangkidul, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50134'),
('P03', 'Nadia Merlin S.Psi, M.Sc', 'Jl. Ternate No.14C, RT.1/RW.6, Cideng, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10150');

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
(3, 'agus@email', 'agus', 'Agus Supriyatno', 19, 'Laki Laki', 'Jalan Belimbing No 12, Gilingan, Banjarsari, Surakarta', 863520464),
(4, 'dandan@user.com', 'dan12', 'dan', 0, '', '', 0),
(5, 'dandan@email', 'dandan', 'Daniel', 0, '', '', 0),
(6, 'danieldaniel@email', '12121212', 'daniel12', 0, '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indeks untuk tabel `basispengetahuan`
--
ALTER TABLE `basispengetahuan`
  ADD PRIMARY KEY (`idbasispengetahuan`);

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
-- Indeks untuk tabel `psikolog`
--
ALTER TABLE `psikolog`
  ADD PRIMARY KEY (`idpsikolog`);

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
  MODIFY `idadmin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `basispengetahuan`
--
ALTER TABLE `basispengetahuan`
  MODIFY `idbasispengetahuan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
