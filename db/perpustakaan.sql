-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2024 pada 11.17
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `ID_ANGGOTA` int(11) UNSIGNED NOT NULL,
  `NAMA` varchar(225) NOT NULL,
  `ALAMAT` text NOT NULL,
  `TANGGAL_JOIN` date NOT NULL,
  `TANGGAL_LAHIR` date NOT NULL,
  `KONTAK` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`ID_ANGGOTA`, `NAMA`, `ALAMAT`, `TANGGAL_JOIN`, `TANGGAL_LAHIR`, `KONTAK`) VALUES
(201001, 'Fajar Hidayat	', 'Jl. Mangga No. 7, Bandung	', '2021-02-15', '1998-04-21', '081234567123'),
(201002, 'Siti Aisyah	', 'Jl. Jambu No. 20, Jakarta	', '2020-07-10', '2000-09-10', '081987654321	'),
(201003, 'Rudi Pratama	', 'Jl. Durian No. 11, Bogor	', '2023-03-05', '1995-12-30', '081223344556');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `ID_BUKU` int(11) UNSIGNED NOT NULL,
  `JUDUL` varchar(225) NOT NULL,
  `HARGA` decimal(10,2) NOT NULL,
  `TIPE` varchar(50) NOT NULL,
  `GENRE` varchar(50) NOT NULL,
  `STOCK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`ID_BUKU`, `JUDUL`, `HARGA`, `TIPE`, `GENRE`, `STOCK`) VALUES
(1001, 'Belajar PHP Pemula', 100000.00, 'Buku	', 'Teknologi	', 10),
(1002, 'Panduan JavaScript untuk Pemula', 120000.00, 'Buku	', 'Teknologi', 15),
(1003, 'Database Dasar	', 95000.00, 'Buku	', 'Teknologi	', 20),
(1004, 'Desain Grafis dengan Photoshop	', 150000.00, 'Buku', 'Desain	', 8),
(1005, 'Algoritma dan Struktur Data	', 140000.00, 'Buku	', 'Pendidikan	', 12),
(1006, 'Menguasai HTML dan CSS	', 110000.00, 'Buku', 'Teknologi', 25),
(1007, 'Python untuk Pemula	', 130000.00, 'Buku', 'Teknologi	', 18),
(1008, 'Java untuk Pemula	', 125000.00, 'Buku', 'Teknologi', 22),
(1009, 'SEO untuk Pemula	', 95000.00, 'Buku', 'Pemasaran', 30),
(1010, 'Matematika Dasar	', 85000.00, 'Buku', 'Pendidikan	', 10),
(1011, 'Manajemen Proyek	', 200000.00, 'Buku', 'Bisnis', 14),
(1012, 'Ilmu Ekonomi Dasar	', 130000.00, 'Buku', 'Ekonomi	', 8),
(1013, 'Desain Web Responsif	', 160000.00, 'Buku	', 'Desain	', 20),
(1014, 'Kiat Sukses Berwirausaha	', 175000.00, 'Buku', 'Bisnis', 11),
(1015, 'Mengelola Keuangan Pribadi	', 140000.00, 'Buku', 'Keuangan', 9),
(1016, 'Membuat Aplikasi Mobile	', 190000.00, 'Buku	', 'Teknologi', 4),
(1017, 'Pendidikan Karakter	', 100000.00, 'Buku', 'Pendidikan', 17),
(1018, 'Seni Fotografi	', 120000.00, 'Buku', 'Desain	', 13),
(1019, 'Laskar Pelangi	', 95000.00, 'Buku', 'Inspirasi	', 12),
(1020, 'Sang Pemimpi	', 85000.00, 'Buku	', 'Inspirasi', 10),
(1021, '5 CM	', 78000.00, 'Buku', 'Cerita	', 15),
(1022, 'Negeri 5 Menara	', 90000.00, 'Buku', 'Inspirasi	', 20),
(1023, 'Bumi', 125000.00, 'Buku', 'Novel', 18),
(1024, 'Bulan	', 130000.00, 'Buku	', 'Novel	', 16),
(1025, 'Hujan	', 110000.00, 'Buku', 'Novel', 12),
(1026, 'Pulang', 95000.00, 'Buku', 'Novel', 8),
(1027, 'Perahu Kertas	', 100000.00, 'Buku', 'Novel', 7),
(1028, 'Tentang Kamu	', 115000.00, 'Buku', 'Inspirasi', 5),
(1029, 'Ayah', 125000.00, 'Buku', 'Novel', 9),
(1030, 'Anak Semua Bangsa	', 95000.00, 'Buku', 'Cerita', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `denda`
--

CREATE TABLE `denda` (
  `ID_DENDA` int(11) UNSIGNED NOT NULL,
  `ID_PEMINJAMAN` int(11) UNSIGNED NOT NULL,
  `ID_PUSTAKAWAN` int(11) UNSIGNED NOT NULL,
  `ID_BUKU` int(11) UNSIGNED NOT NULL,
  `TOTAL_DENDA` decimal(10,2) NOT NULL,
  `JUMLAH_BUKU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `ID_PEMINJAMAN` int(11) UNSIGNED NOT NULL,
  `ID_ANGGOTA` int(11) UNSIGNED NOT NULL,
  `ID_PUSTAKAWAN` int(11) UNSIGNED NOT NULL,
  `ID_BUKU` int(11) UNSIGNED NOT NULL,
  `JUMLAH_BUKU` int(11) NOT NULL,
  `TANGGAL_PINJAM` date NOT NULL,
  `TANGGAL_KEMBALI` date NOT NULL,
  `HARGA_SEWA` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `ID_PENGEMBALIAN` int(11) UNSIGNED NOT NULL,
  `ID_PEMINJAMAN` int(11) UNSIGNED NOT NULL,
  `ID_PUSTAKAWAN` int(11) UNSIGNED NOT NULL,
  `TANGGAL_KEMBALI` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pustakawan`
--

CREATE TABLE `pustakawan` (
  `ID_PUSTAKAWAN` int(11) UNSIGNED NOT NULL,
  `ID_ROLE` int(11) UNSIGNED NOT NULL,
  `NAMA` varchar(255) NOT NULL,
  `KONTAK` varchar(15) NOT NULL,
  `ALAMAT` text NOT NULL,
  `TANGGAL_LAHIR` date NOT NULL,
  `TANGGAL_PUSTAKAWAN` date NOT NULL,
  `JABATAN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pustakawan`
--

INSERT INTO `pustakawan` (`ID_PUSTAKAWAN`, `ID_ROLE`, `NAMA`, `KONTAK`, `ALAMAT`, `TANGGAL_LAHIR`, `TANGGAL_PUSTAKAWAN`, `JABATAN`) VALUES
(10101, 1, 'Alifiya Seftika Putri', '081234567890', 'Jl. Melati No. 10, Bandung	', '1990-07-20', '2017-05-10', 'Pustakawan Jaga I'),
(20202, 1, 'Nindita Fatha Dwi Lestari', '081987654321	', 'Jl. Kenanga No. 25, Jakarta	', '1990-07-20', '2017-05-10', 'Pustakawan Jaga I'),
(30303, 2, 'Rakha Aryagunawibawa', '081223344556', 'Jl. Anggrek No. 8, Surabaya', '1993-03-12', '2018-10-15', 'Pustakawan Jaga II'),
(40404, 3, 'Tubagus Mochamad Kariza Rasyid', '081112223334	', 'Jl. Dahlia No. 5, Yogyakarta', '1988-12-01', '2016-12-20', 'Pustakawan Jaga III'),
(50505, 4, 'Andika Wisnu Nugraha', '081556677889	', 'Jl. Mawar No. 14, Malang	', '1995-09-30', '2020-01-05', 'Pustakawan Jaga IV');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `ID_ROLE` int(11) UNSIGNED NOT NULL,
  `NAMA_ROLE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`ID_ROLE`, `NAMA_ROLE`) VALUES
(1, 'Pustakawan Jaga I'),
(2, 'Pustakawan Jaga II'),
(3, 'Pustakawan Jaga III'),
(4, 'Pustakawan Jaga IV');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`ID_ANGGOTA`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`ID_BUKU`);

--
-- Indeks untuk tabel `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`ID_DENDA`),
  ADD KEY `ID_PEMINJAMAN` (`ID_PEMINJAMAN`),
  ADD KEY `ID_PUSTAKAWAN` (`ID_PUSTAKAWAN`),
  ADD KEY `ID_BUKU` (`ID_BUKU`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`ID_PEMINJAMAN`),
  ADD KEY `ID_ANGGOTA` (`ID_ANGGOTA`),
  ADD KEY `ID_PUSTAKAWAN` (`ID_PUSTAKAWAN`),
  ADD KEY `ID_BUKU` (`ID_BUKU`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`ID_PENGEMBALIAN`),
  ADD KEY `ID_PEMINJAMAN` (`ID_PEMINJAMAN`),
  ADD KEY `ID_PUSTAKAWAN` (`ID_PUSTAKAWAN`);

--
-- Indeks untuk tabel `pustakawan`
--
ALTER TABLE `pustakawan`
  ADD PRIMARY KEY (`ID_PUSTAKAWAN`),
  ADD KEY `ID_ROLE` (`ID_ROLE`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID_ROLE`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `ID_ANGGOTA` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201004;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `ID_BUKU` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1031;

--
-- AUTO_INCREMENT untuk tabel `denda`
--
ALTER TABLE `denda`
  MODIFY `ID_DENDA` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `ID_PEMINJAMAN` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `ID_PENGEMBALIAN` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pustakawan`
--
ALTER TABLE `pustakawan`
  MODIFY `ID_PUSTAKAWAN` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50506;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `ID_ROLE` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `denda`
--
ALTER TABLE `denda`
  ADD CONSTRAINT `denda_ibfk_1` FOREIGN KEY (`ID_PEMINJAMAN`) REFERENCES `peminjaman` (`ID_PEMINJAMAN`),
  ADD CONSTRAINT `denda_ibfk_2` FOREIGN KEY (`ID_PUSTAKAWAN`) REFERENCES `pustakawan` (`ID_PUSTAKAWAN`),
  ADD CONSTRAINT `denda_ibfk_3` FOREIGN KEY (`ID_BUKU`) REFERENCES `buku` (`ID_BUKU`);

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`ID_ANGGOTA`) REFERENCES `anggota` (`ID_ANGGOTA`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`ID_PUSTAKAWAN`) REFERENCES `pustakawan` (`ID_PUSTAKAWAN`),
  ADD CONSTRAINT `peminjaman_ibfk_3` FOREIGN KEY (`ID_BUKU`) REFERENCES `buku` (`ID_BUKU`);

--
-- Ketidakleluasaan untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`ID_PEMINJAMAN`) REFERENCES `peminjaman` (`ID_PEMINJAMAN`),
  ADD CONSTRAINT `pengembalian_ibfk_2` FOREIGN KEY (`ID_PUSTAKAWAN`) REFERENCES `pustakawan` (`ID_PUSTAKAWAN`);

--
-- Ketidakleluasaan untuk tabel `pustakawan`
--
ALTER TABLE `pustakawan`
  ADD CONSTRAINT `pustakawan_ibfk_1` FOREIGN KEY (`ID_ROLE`) REFERENCES `roles` (`ID_ROLE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
