-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 Apr 2018 pada 09.24
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absendosen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `no` int(10) NOT NULL,
  `id_dosen` varchar(8) NOT NULL,
  `user` varchar(30) NOT NULL,
  `kd_jurus` varchar(50) NOT NULL,
  `kd_kls` varchar(10) NOT NULL,
  `kd_matkul` varchar(50) NOT NULL,
  `minggu` int(2) NOT NULL,
  `kd_ruang` varchar(10) NOT NULL,
  `ket_absen` varchar(20) NOT NULL,
  `pesan` text NOT NULL,
  `waktu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`no`, `id_dosen`, `user`, `kd_jurus`, `kd_kls`, `kd_matkul`, `minggu`, `kd_ruang`, `ket_absen`, `pesan`, `waktu`) VALUES
(8, '11111112', 'qwertyy', 'Teknik Informatika', '4IA01 ', 'Agama', 1, 'D123', 'Hadir', 'ya', 'Tuesday, 03-04-2018 / 23:10'),
(9, '1234567', 'icals', 'Sistem Informasi', '4KA11 ', 'Sistem Terdistribusi', 1, 'D123', 'Hadir', 'ya', 'Thursday, 12-04-2018 / 06:05'),
(10, '1234567', 'icals', 'Teknik Informatika', '4IA01 ', 'Agama', 1, 'E223', 'Hadir', 'ok', 'Thursday, 12-04-2018 / 06:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen_mhs`
--

CREATE TABLE `absen_mhs` (
  `no` int(10) NOT NULL,
  `id_dosen` varchar(8) NOT NULL,
  `user` varchar(30) NOT NULL,
  `kd_jurus` varchar(50) NOT NULL,
  `kd_kls` varchar(10) NOT NULL,
  `kd_matkul` varchar(50) NOT NULL,
  `minggu` int(2) NOT NULL,
  `kd_ruang` varchar(10) NOT NULL,
  `ket_absen` varchar(20) NOT NULL,
  `pesan` text NOT NULL,
  `waktu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absen_mhs`
--

INSERT INTO `absen_mhs` (`no`, `id_dosen`, `user`, `kd_jurus`, `kd_kls`, `kd_matkul`, `minggu`, `kd_ruang`, `ket_absen`, `pesan`, `waktu`) VALUES
(8, '11111112', 'qwertyy', 'Teknik Informatika', '4IA01 ', 'Agama', 1, 'D123', 'Hadir', 'yess', 'Tuesday, 03-04-2018 / 23:10'),
(9, '1234567', 'icals', 'Sistem Informasi', '4KA11 ', 'Sistem Terdistribusi', 1, 'D123', '', '', 'Thursday, 12-04-2018 / 06:05'),
(10, '1234567', 'icals', 'Teknik Informatika', '4IA01 ', 'Agama', 1, 'E223', '', '', 'Thursday, 12-04-2018 / 06:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `no` int(8) NOT NULL,
  `id_admin` varchar(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`no`, `id_admin`, `nama`, `user`, `pass`, `email`) VALUES
(3, '34131431', 'momos', 'momon', 'ical', 'momon@gmail.com'),
(4, '12322334', 'bulee', 'bulee', 'bulee', 'bule@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `no` int(8) NOT NULL,
  `id_dosen` varchar(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`no`, `id_dosen`, `nama`, `user`, `pass`, `email`) VALUES
(1, '1234567', 'icals', 'icals', 'ical', 'ical@yahoo.com'),
(4, '17114617', 'faisal ical', 'faii', 'ical', 'faii@gmail.com'),
(6, '11111112', 'qwerty', 'qwertyy', 'ical', 'qwerty@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `no` int(10) NOT NULL,
  `kd_matkul` varchar(10) NOT NULL,
  `user` varchar(30) NOT NULL,
  `id_dosen` varchar(8) NOT NULL,
  `kd_jurus` varchar(10) NOT NULL,
  `kd_kls` varchar(10) NOT NULL,
  `hari` varchar(8) NOT NULL,
  `sesi_awal` varchar(30) NOT NULL,
  `sesi_akhir` varchar(30) NOT NULL,
  `kd_ruang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`no`, `kd_matkul`, `user`, `id_dosen`, `kd_jurus`, `kd_kls`, `hari`, `sesi_awal`, `sesi_akhir`, `kd_ruang`) VALUES
(4, 'MK02', 'icals', '1234567', 'KJ01', '4KA11', 'Selasa', 'Sesi 3, 09:30-10:30', 'Sesi 4, 10:30-11:30', 'R02'),
(5, 'MK01', 'faii', '17114617', 'KJ01', '4KA11', 'Rabu', 'Sesi 9, 15:30-16:30', 'Sesi 10, 16:30-17:30', 'R02'),
(6, 'MK02', 'icals', '1234567', 'KJ01', '4KA12', 'Rabu', 'Sesi 7, 13:30-14:30', 'Sesi 9, 15:30-16:30', 'R02'),
(7, 'MK01', 'icals', '1234567', 'KJ02', '4IA01', 'Senin', 'Sesi 3, 09:30-10:30', 'Sesi 4, 10:30-11:30', 'R01'),
(8, 'MK01', 'faii', '17114617', 'KJ01', '4KA11', 'Selasa', 'Sesi 4, 10:30-11:30', 'Sesi 5, 11:30-12:30', 'R01'),
(9, 'MK01', 'qwertyy', '11111112', 'KJ02', '4IA01', 'Selasa', 'Sesi 4, 10:30-11:30', 'Sesi 5, 11:30-12:30', 'R02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `no` int(10) NOT NULL,
  `kd_jurus` varchar(10) NOT NULL,
  `jurus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`no`, `kd_jurus`, `jurus`) VALUES
(3, 'KJ01', 'Sistem Informasi'),
(4, 'KJ02', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `no` int(10) NOT NULL,
  `kd_jurus` varchar(10) NOT NULL,
  `kd_kls` varchar(10) NOT NULL,
  `kls` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`no`, `kd_jurus`, `kd_kls`, `kls`) VALUES
(3, 'KJ01', '4KA11', '4KA11'),
(4, 'KJ01', '4KA12', '4KA12'),
(5, 'KJ02', '4IA01', '4IA01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `no` int(8) NOT NULL,
  `npm` varchar(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`no`, `npm`, `nama`, `user`, `pass`, `email`) VALUES
(1, '13114952', 'Farhan Hasibuan', 'farhan', 'farhan', 'farhanazra90@gmail.com'),
(2, '13114912', 'Muhammad Ibnu Faisal', 'ical', 'ical', 'ical@yahoo.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `no` int(10) NOT NULL,
  `kd_matkul` varchar(8) NOT NULL,
  `matkul` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`no`, `kd_matkul`, `matkul`) VALUES
(1, 'MK01', 'Agama'),
(2, 'MK02', 'Sistem Terdistribusi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `status` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(225) NOT NULL,
  `no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `message`
--

INSERT INTO `message` (`status`, `name`, `email`, `message`, `no`) VALUES
('Mahasiswa', 'Farhan Azra ', 'farhanazra02@yahoo.com', 'tess', 2),
('Mahasiswa', 'Farhan Azra ', 'farhanazra02@yahoo.com', 'ya', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap_ruang`
--

CREATE TABLE `rekap_ruang` (
  `no` int(10) NOT NULL,
  `kd_ruang` varchar(10) NOT NULL,
  `hari` varchar(8) NOT NULL,
  `sesi_awal` varchar(30) NOT NULL,
  `sesi_akhir` varchar(30) NOT NULL,
  `id_dosen` varchar(8) NOT NULL,
  `kd_kls` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `status_ruang` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekap_ruang`
--

INSERT INTO `rekap_ruang` (`no`, `kd_ruang`, `hari`, `sesi_awal`, `sesi_akhir`, `id_dosen`, `kd_kls`, `status`, `status_ruang`) VALUES
(2, 'R01', 'Selasa', 'Sesi 4, 10:30-11:30', 'Sesi 5, 11:30-12:30', '17114617', '4KA11', 'Dosen', 'Tersedia'),
(3, 'R02', 'Selasa', 'Sesi 1, 07:30-08:30', 'Sesi 2, 08:30-09:30', '11111112', '4KA11', 'Dosen', 'Digunakan'),
(4, 'R02', 'Selasa', 'Sesi 4, 10:30-11:30', 'Sesi 5, 11:30-12:30', '11111112', '4IA01', 'Dosen', 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `no` int(10) NOT NULL,
  `kd_ruang` varchar(10) NOT NULL,
  `ruang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`no`, `kd_ruang`, `ruang`) VALUES
(2, 'R01', 'E223'),
(3, 'R02', 'D123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `absen_mhs`
--
ALTER TABLE `absen_mhs`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`no`),
  ADD KEY `kd_jurus` (`kd_jurus`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`no`),
  ADD KEY `kd_jurus` (`kd_jurus`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `rekap_ruang`
--
ALTER TABLE `rekap_ruang`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `absen_mhs`
--
ALTER TABLE `absen_mhs`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rekap_ruang`
--
ALTER TABLE `rekap_ruang`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`);

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`kd_jurus`) REFERENCES `jurusan` (`kd_jurus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
