-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2021 pada 15.29
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat_pengantar_rt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `foto`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Agus Supriyanto', 'IMG20151225122130.jpg', '1'),
(2, '2', '8f03046831b570af354070c98661d844', 'Krisna Murti W', 'IMG20151225121915.jpg', '2'),
(3, 'shoichi', '21232f297a57a5a743894a0e4a801fc3', 'Inaba Shoichi', '7ui6i1.jpg', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(6) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `NIK` varchar(20) DEFAULT NULL,
  `jenis_kel` varchar(11) DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `tgl_lahir` varchar(15) DEFAULT NULL,
  `kewarganegaraan` varchar(10) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `pendidikan_ter` varchar(17) DEFAULT NULL,
  `pekerjaan` varchar(25) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `RT` int(2) NOT NULL,
  `RW` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id`, `nama`, `NIK`, `jenis_kel`, `tempat_lahir`, `tgl_lahir`, `kewarganegaraan`, `agama`, `status`, `pendidikan_ter`, `pekerjaan`, `alamat`, `RT`, `RW`) VALUES
(1, 'Shoichi', '3374050403920001', 'Laki-Laki', 'Chiba Prefekture', '1992/03/04', 'WNA', 'Islam', 'Belum Menikah', 'Perguruan Tinggi', 'Pengusaha', 'Semarang', 2, 1),
(2, 'Agus Supriyanto', '3374050602900001', 'Laki-Laki', 'Semarang', '1990/06/02', 'WNI', 'Islam', 'Belum Kawin', 'Perguruan Tinggi', 'Programer', 'Bangetayu wetan rt 06 rw 05 Genuk Semarang', 1, 2),
(3, 'Edi Saiful Hadi', '3374052112920001', 'Laki-Laki', 'Semarang', '1992/21/12', 'WNI', 'Kristen', 'Belum Kawin', 'Perguruan Tinggi', 'Programer', 'Jl. Bugen Utara', 2, 1),
(4, 'Arun Stiadi', '3374050807960041', 'Laki-Laki', 'Rembang', '1996/30/06', 'WNI', 'Islam', 'Belum Kawin', 'Perguruan Tinggi', 'PNS', 'Semarang', 2, 1),
(5, 'Zakaria Adi', '3374053007940008', 'Laki-Laki', 'Semarang', '1994/30/07', 'WNI', 'Islam', 'Belum Kawin', 'Perguruan Tinggi', 'IT', 'Semarang', 1, 1),
(6, 'Selamet F', '3374053007930005', 'Laki-Laki', 'Semarang', '1993/30/08', 'WNI', 'Islam', 'Belum Kawin', 'Perguruan Tinggi', 'IT', 'Semarang', 2, 2),
(7, 'Tyas', '6655673566563735', 'Laki-Laki', 'semarang', '01/01/1995', 'WNI', '', 'Belum Menikah', '', 'PNS', 'purwodadi', 6, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengantar`
--

CREATE TABLE `pengantar` (
  `no_pengantar` varchar(20) NOT NULL,
  `keperluan` text NOT NULL,
  `lain_lain` text NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `kewarganegaraan` varchar(10) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `pend_terakhir` varchar(20) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `status_surat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengantar`
--

INSERT INTO `pengantar` (`no_pengantar`, `keperluan`, `lain_lain`, `nama`, `nik`, `tmp_lahir`, `tgl_lahir`, `jenis_kelamin`, `kewarganegaraan`, `agama`, `status`, `pend_terakhir`, `pekerjaan`, `alamat`, `status_surat`) VALUES
('0001/04.III/01/2021', 'a', 's', 'Edi Saiful Hadi', '3374052112920001', 'Semarang', '1992/21/12', 'Laki-Laki', 'WNI', 'Kristen', 'Belum Kawin', 'Perguruan Tinggi', 'Programer', 'Jl. Bugen Utara', 'Proses'),
('0002/04.III/01/2021', 'asdf', 'asdf', 'ASSDA', '9128743790', 'asads', '', 'P', 'WNA', 'Protestan', 'belum kawin', 'SMP/MI/SEDERAJAT', 'asd', 'dghd', 'Disetujui'),
('0003/04.III/01/2021', 'l', 'l', 'Shoichi', '3374050403920001', 'Chiba Prefekture', '1992/03/04', 'Laki-Laki', 'WNA', 'Islam', 'Belum Menikah', 'Perguruan Tinggi', 'Pengusaha', 'Semarang', '0'),
('0004/04.III/01/2021', 'a', 'a', 'Edi Saiful Hadi', '3374052112920001', 'Semarang', '1992/21/12', 'Laki-Laki', 'WNI', 'Kristen', 'Belum Kawin', 'Perguruan Tinggi', 'Programer', 'Jl. Bugen Utara', '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengantar`
--
ALTER TABLE `pengantar`
  ADD PRIMARY KEY (`no_pengantar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
