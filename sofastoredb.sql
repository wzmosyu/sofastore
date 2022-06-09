-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2022 pada 19.04
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sofastoredb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_aksesoris`
--

CREATE TABLE `admin_aksesoris` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin_aksesoris`
--

INSERT INTO `admin_aksesoris` (`id`, `nama`, `jenis`, `stok`, `harga`, `deskripsi`, `gambar`) VALUES
(1, 'Hodie Hitam', 'Aksesoris', 30, '150.000', 'Ini adalah hodie terbaik', 'image/img/clothes/c.jpg'),
(2, 'Kaos Pink', 'Aksesoris', 95, '100.000', 'Ini adalah kaos kualitas Super', 'image/img/clothes/a.jpg'),
(3, 'Jas Keren', 'Aksesoris', 25, '220.000', 'Ini adalah Stelan Jas yang keren dan menarik', 'image/img/clothes/b.png'),
(4, 'Kaos Santai', 'Aksesoris', 20, '150.000', 'Kaos berbahan sutera', 'image/img/clothes/e.jpg'),
(25, 'Kaos Nakano', 'Aksesoris', 25, '100.000', 'kaos nakano yang terbuat dari bahan sutera asli dari jepang', 'image/img/clothes/h.jpg'),
(26, 'kaos Anime Distro', 'Aksesoris', 50, '170.000', 'Kaos distro asli yang memiliki kualitas tinggi dan sangat cocok untuk bersantai', 'image/img/clothes/i.jpg'),
(27, 'Kaos Tanjirou', 'Aksesoris', 25, '120.000', 'Kaos Anime Tanjirou yang berbahan dasar sutera dan menyerap keringat dengan cepat', 'image/img/clothes/j.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_dakimakura`
--

CREATE TABLE `admin_dakimakura` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin_dakimakura`
--

INSERT INTO `admin_dakimakura` (`id`, `nama`, `jenis`, `stok`, `harga`, `deskripsi`, `gambar`) VALUES
(1, 'Dakimakura Shinobu', 'Dakimakura', 25, '150.000', 'Dakimakura Shinobu yang berisikan kapas lembut', 'image/img/dakimakura/a.jpg'),
(2, 'Dakimakura Orange', 'Dakimakura', 15, '140.000', 'Dakimakura yang lembut bagaikan sutera dan akan membuat anda tidur nyaman', 'image/img/dakimakura/b.jpg'),
(3, 'Dakimakura Shark', 'Dakimakura', 10, '120.000', 'Dakimakura yang terbuat dari bahan katun alami', 'image/img/dakimakura/c.jpg'),
(4, 'Dakimakura Putih', 'Dakimakura', 5, '180.000', 'Dakimakura import langsung dari jepang yang berbahan dasar import', 'image/img/dakimakura/d.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_figure`
--

CREATE TABLE `admin_figure` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin_figure`
--

INSERT INTO `admin_figure` (`id`, `nama`, `jenis`, `stok`, `harga`, `deskripsi`, `gambar`) VALUES
(2, 'Figure Rengoku', 'Action Figure', 20, '200.000', 'Action Figur Rengoku pilar api dari anime Kimetsu no Yaiba', 'image/img/figure/b.jpg'),
(3, 'Figure Shinobu', 'Action Figure', 15, '170.000', 'Figure Shinobu Pilar Serangga dari anime KNY', 'image/img/figure/c.jpeg'),
(4, 'Figure Mikasa', 'Action Figure', 5, '350.000', 'Action Figur Mikasa sang pembasmi TITAN', 'image/img/figure/d.jpg'),
(5, 'Figure Obito', 'Action Figure', 10, '450.000', 'Action Figure obito saat menjadi cincuriki Jubi', 'image/img/figure/e.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_shoes`
--

CREATE TABLE `admin_shoes` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin_shoes`
--

INSERT INTO `admin_shoes` (`id`, `nama`, `jenis`, `stok`, `harga`, `deskripsi`, `gambar`) VALUES
(1, 'Sepatu Casual', 'Sepatu', 20, '220.000', 'Ini adalah sepatu casual yang cocok untuk anak muda', 'image/img/shoes/1.jpg'),
(2, 'Sepatu Olahraga', 'Sepatu', 50, '250.000', 'Sepatu olahraga yang pernah dipakai oleh lee Kang Ing', 'image/img/shoes/3.jpg'),
(3, 'Sepatu Runing', 'Sepatu', 50, '200.000', 'Sepatu running yang cocok untuk joging', 'image/img/shoes/4.jpg'),
(4, 'Sepatu Kantor', 'Sepatu', 70, '250.000', 'Sepatu kantor yang membuat anda semakin nyaman bekerja', 'image/img/shoes/6.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `databarang`
--

CREATE TABLE `databarang` (
  `id_b` int(11) NOT NULL,
  `name_b` varchar(100) NOT NULL,
  `jenis_b` varchar(100) NOT NULL,
  `stok_b` int(100) NOT NULL,
  `harga_b` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `datauser`
--

CREATE TABLE `datauser` (
  `id_u` int(11) NOT NULL,
  `name_u` varchar(100) NOT NULL,
  `email_u` varchar(100) NOT NULL,
  `pass_u` varchar(100) NOT NULL,
  `address_u` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pembelian`
--

CREATE TABLE `data_pembelian` (
  `id_order` int(100) NOT NULL,
  `id_b` int(100) NOT NULL,
  `id_u` int(100) NOT NULL,
  `tanggal_order` date NOT NULL,
  `jumlah_barang` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_aksesoris`
--
ALTER TABLE `admin_aksesoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin_dakimakura`
--
ALTER TABLE `admin_dakimakura`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin_figure`
--
ALTER TABLE `admin_figure`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin_shoes`
--
ALTER TABLE `admin_shoes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `databarang`
--
ALTER TABLE `databarang`
  ADD PRIMARY KEY (`id_b`),
  ADD KEY `id_b` (`id_b`),
  ADD KEY `id_b_2` (`id_b`);

--
-- Indeks untuk tabel `datauser`
--
ALTER TABLE `datauser`
  ADD PRIMARY KEY (`id_u`);

--
-- Indeks untuk tabel `data_pembelian`
--
ALTER TABLE `data_pembelian`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_b` (`id_b`,`id_u`),
  ADD KEY `id_u` (`id_u`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_aksesoris`
--
ALTER TABLE `admin_aksesoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `admin_dakimakura`
--
ALTER TABLE `admin_dakimakura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `admin_figure`
--
ALTER TABLE `admin_figure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `admin_shoes`
--
ALTER TABLE `admin_shoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `databarang`
--
ALTER TABLE `databarang`
  MODIFY `id_b` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `datauser`
--
ALTER TABLE `datauser`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_pembelian`
--
ALTER TABLE `data_pembelian`
  MODIFY `id_order` int(100) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `databarang`
--
ALTER TABLE `databarang`
  ADD CONSTRAINT `databarang_ibfk_1` FOREIGN KEY (`id_b`) REFERENCES `databarang` (`id_b`);

--
-- Ketidakleluasaan untuk tabel `data_pembelian`
--
ALTER TABLE `data_pembelian`
  ADD CONSTRAINT `data_pembelian_ibfk_1` FOREIGN KEY (`id_b`) REFERENCES `databarang` (`id_b`),
  ADD CONSTRAINT `data_pembelian_ibfk_2` FOREIGN KEY (`id_u`) REFERENCES `datauser` (`id_u`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
