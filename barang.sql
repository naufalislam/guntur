-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 18 Apr 2020 pada 06.07
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `no` int(11) NOT NULL,
  `cashier` varchar(100) NOT NULL,
  `product` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `prince` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`no`, `cashier`, `product`, `category`, `prince`) VALUES
(1, 'Pevita Pearce', 'Latte', 'Drink', 10000),
(2, 'Raisa Andriana', 'Cake', 'Food', 15000),
(4, 'Raisa Andriana', 'Frince Rice ', 'Food', 30000),
(6, 'Pevita Pearce', 'Gudeg', 'Food', 30000),
(7, 'Joko Purwandi', 'Ice Tea', 'Drink', 55000),
(8, 'Agung', 'Lengko', 'Food', 35000),
(9, 'Pale', 'Gorengan', 'Food', 15000),
(10, 'Pale', 'Gorengan', 'Food', 15000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
