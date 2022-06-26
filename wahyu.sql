-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2022 pada 12.04
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wahyu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `update_at`) VALUES
(1, 'COTTON COMBED 30s', '2021-10-29 07:02:43'),
(2, 'COTTON COMBED 24s', '2021-10-29 07:02:43'),
(3, 'Premium', '2021-10-29 07:02:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `media_title` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_seen` int(11) DEFAULT 1,
  `media_thumb` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `media`
--

INSERT INTO `media` (`media_id`, `media_title`, `media_desc`, `media_link`, `media_seen`, `media_thumb`, `update_at`) VALUES
(5, 'jawapos', 'Irma Russanti, Dosen Unesa Berinovasi Batik Berpewarna Tanah', 'https://www.jawapos.com/features/21/06/2017/irma-russanti-dosen-unesa-berinovasi-batik-berpewarna-tanah/', 3, '1.png', '2021-11-02 05:30:01'),
(6, 'unesa', 'Irma Russanti, Dosen PKK Pemilik 10 HaKI', 'https://www.unesa.ac.id/irma-russanti-dosen-pkk-pemilik-10-haki', 1, '2.png', '2021-11-02 05:30:01'),
(7, 'Google Play Books', 'Exploration Of Soil Batik', 'https://play.google.com/store/books/details/Exploration_Of_Soil_Batik?id=hDHTDwAAQBAJ&gl=US', 1, '3.png', '2021-11-02 05:30:01'),
(8, 'Google Play Books', 'Desain Kebaya Sunda', 'https://www.google.co.id/books/edition/Desain_Kebaya_Sunda/emmMDwAAQBAJ?hl=en&gbpv=0', 1, '4.png', '2021-11-02 05:30:01'),
(9, 'Google Play Books', 'Eksplorasi Batik Tanah', 'https://www.google.co.id/books/edition/Eksplorasi_Batik_Tanah/MbKLDwAAQBAJ?hl=en&sa=X&ved=2ahUKEwj9scrRyeTzAhUYfH0KHThADZ0QiqUDegQIBhAC', 1, '5.png', '2021-11-02 05:30:01'),
(10, 'Google Play Books', 'Sejarah Perkembangan Kebaya Sunda', 'https://www.google.co.id/books/edition/Sejarah_Perkembangan_Kebaya_Sunda/Im-LDwAAQBAJ?hl=en&sa=X&ved=2ahUKEwif8eLnyeTzAhUCgUsFHW-EDX0QiqUDegQIBRAH', 1, '6.png', '2021-11-02 05:30:01'),
(11, 'Google Play Books', 'History of The Development of Kebaya Sunda', 'https://www.google.co.id/books/edition/History_of_The_Development_of_Kebaya_Sun/pOS3DwAAQBAJ?hl=en&gbpv=0', 1, '7.png', '2021-11-02 05:30:01'),
(12, 'jawapos', 'Usaha Irma Russanti Ciptakan Kreasi Batik dengan Pewarna Tanah', 'https://www.jawapos.com/surabaya/02/11/2021/usaha-irma-russanti-ciptakan-kreasi-batik-dengan-pewarna-tanah/', 2, '8.png', '2021-11-02 05:30:01'),
(15, 'kompas', 'Tak Kehabisan Ide, Dosen Tata Busana UNESA Ciptakan Pewarna Batik Dari Tanah', 'https://www.kompas.tv/article/229871/tak-kehabisan-ide-dosen-tata-busana-unesa-ciptakan-pewarna-batik-dari-tanah', 2, '618b2ecf8a48b.png', '2021-11-10 02:30:39'),
(16, 'youtube', 'Tak Kehabisan Ide, Dosen Tata Busana UNESA Ciptakan Pewarna Batik Dari Tanah', 'https://www.youtube.com/watch?v=AaQ5o8_KWIM', 2, '618b2f7a3e2d5.png', '2021-11-10 02:33:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `new_table`
--

CREATE TABLE `new_table` (
  `visitor_id` int(11) NOT NULL,
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_category` int(11) DEFAULT 1,
  `product_img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_stock` int(11) DEFAULT 1,
  `product_seen` int(11) DEFAULT 1,
  `product_price` int(11) DEFAULT 0,
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_desc`, `product_category`, `product_img`, `product_stock`, `product_seen`, `product_price`, `update_at`) VALUES
(1, 'Banesa Indigo Med', '2 Warna Alam', 2, '1.jpg', 1, 2, 0, '2021-10-31 13:26:21'),
(2, 'Banesa Mix Med', '4 Warna Alam', 2, '617c2ed64295e.jpg', 1, 0, 0, '2021-10-29 17:26:46'),
(3, 'Banesa Sintex Eco', 'Sintetis Berpola', 2, '617c2ecbabdbd.jpg', 1, 1, 0, '2021-10-29 17:26:35'),
(4, 'Banesa Sulam Med', 'Full Tanah Sulam', 2, '617c2ebddfebb.jpg', 1, 0, 0, '2021-10-29 17:26:21'),
(5, 'Banesa Sintex Geo', 'Sintetis Full Motif Geo', 2, '617c2ea371022.jpg', 1, 1, 0, '2021-10-29 17:25:55'),
(6, 'Banesa Mahon Med', '2 Warna Alam', 2, '617c2e95a778c.jpg', 1, 0, 0, '2021-10-29 17:25:41'),
(7, 'Banesa Sintex Fish', 'Sintesis Berpola', 2, '617c2e8591094.jpg', 1, 0, 0, '2021-10-29 17:25:25'),
(8, 'Banesa Sintex Full', 'Mix Sintetis Full Pola', 2, '617c2e745296b.jpg', 1, 0, 0, '2021-10-29 17:25:08'),
(9, 'Banesa Mix Alam', '4 Warna Alam', 2, '617c2e1f99039.jpg', 1, 1, 0, '2021-10-29 17:23:43'),
(10, 'Banesa Mix Sintex', 'Full Color Motif Segitiga', 2, '617c2def02643.jpg', 1, 0, 0, '2021-10-29 17:22:55'),
(12, 'Banesa Sintex Bunga Geo', 'Motif Bunga Geometris', 2, '617c2daf1df17.jpg', 1, 0, 0, '2021-10-29 17:21:51'),
(13, 'BanesaTeratai pink', 'Banesa motif teratai paduan warna pink, ungu dan kuning, mix pewarna tanah dan sintetis', 2, '617c2d858acf0.jpg', 1, 0, 0, '2021-11-04 14:18:52'),
(14, 'Banesa Motif Unesa', 'Motif Unesa', 1, '617c2d6b877d6.jpg', 1, 0, 0, '2021-10-30 07:36:54'),
(15, 'Banesa Sintex Merak', 'Motif Merak', 2, '617c2d59314e5.jpg', 1, 0, 0, '2021-10-29 17:20:25'),
(16, 'Banesa Sintex Mega', 'Motif Mega Mendung', 2, '617c2d4ab7c7f.jpg', 1, 0, 0, '2021-10-29 17:20:10'),
(17, 'Banesa Sintex Kupang', 'Motif Kupang Merah', 2, '617c2d3e43463.jpg', 1, 0, 0, '2021-10-29 17:19:58'),
(18, 'Banesa Sintex Kupang Biru', 'Motif Kupang Merah Biru', 2, '617c2d291fc93.jpg', 1, 0, 0, '2021-10-29 17:19:37'),
(19, 'Banesa Ikan Lawasan', 'Motif Ikan Lawasan', 2, '617c2d0bebd2f.jpg', 1, 0, 0, '2021-11-04 13:16:04'),
(21, 'Banesa Sintex Tertai', 'Motif Teratai Daun Hijau', 2, '617c2cd32a240.jpg', 1, 0, 0, '2021-10-29 17:18:11'),
(22, 'Banesa Putian', 'Putian Motif Kuno', 2, '617c2cbc9a7e8.jpg', 1, 0, 0, '2021-10-29 17:17:48'),
(23, 'Banesa Mix Sintex', 'Motif Daun Merak', 2, '617c2c0d861c1.jpg', 1, 0, 0, '2021-10-30 07:38:10'),
(24, 'Banesa Mix Alam', 'Mix 4 Warna', 2, '617c2bbd484d6.jpg', 1, 0, 0, '2021-10-29 17:13:33'),
(25, 'Banesa Motif Indigo', 'Kombinasi Indigo Pada Motif', 2, '617c2baddcc40.jpg', 1, 0, 0, '2021-10-29 17:13:17'),
(32, 'Banesa kupang orange', 'Banesa mix sintetis, motif kupang sudah memiliki haki ', 1, '6183e7b7b64d8.jpg', 0, 3, 0, '2022-01-30 07:45:46'),
(35, 'Banesa Full Color', '-', 1, '6184f633a5a04.jpg', 0, 0, 0, '2022-01-30 07:43:29'),
(36, 'kaos polos', '-', 1, '6184f8c20bde8.jpeg', 0, 0, 0, '2022-06-25 03:47:35'),
(37, 'Kaos polos 2', 'Tanpa Deskripsi', 1, '6184f938bd229.jpeg', 0, 0, 0, '2022-06-25 03:49:34'),
(38, 'Banesa 3', 'Tidak ada ', 1, '6184f950b110f.jpeg', 0, 4, 0, '2022-01-30 07:43:01'),
(39, 'Banesa 4', '0', 1, '6184f9626d3d6.jpeg', 0, 0, 0, '2022-01-30 07:43:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_email`, `users_password`, `update_at`) VALUES
(36, 'Seriusman Waruwu', 'serius', '$2y$10$9dmWC2WkHRdMETnrSkDUmO7VXIasvNgG65UXR3KHisLtjgFa.2yla', '2021-10-29 12:22:26'),
(38, 'wahyu', 'wahyuarfah2201@gmail.com', '$2y$10$nus8vsJH04xlnGo5oe8KIeBT.S1cU2iRFkoRjGZEBXz7E4g4Bn8qK', '2022-06-20 17:29:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitor`
--

CREATE TABLE `visitor` (
  `visitor_id` int(11) NOT NULL,
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `visitor`
--

INSERT INTO `visitor` (`visitor_id`, `update_at`) VALUES
(1, '2021-11-02 09:08:34'),
(2, '2021-11-03 05:40:42'),
(3, '2021-11-03 05:51:15'),
(4, '2021-11-04 13:16:55'),
(5, '2021-11-05 08:59:33'),
(6, '2021-11-06 05:15:45'),
(7, '2021-11-09 17:41:01'),
(8, '2021-11-09 22:28:38'),
(9, '2021-11-10 02:34:01'),
(10, '2021-11-10 19:29:13'),
(11, '2021-11-10 19:29:14'),
(12, '2021-11-11 03:06:01'),
(13, '2021-11-11 03:06:02'),
(14, '2021-11-11 03:06:02'),
(15, '2021-11-11 12:01:29'),
(16, '2021-11-11 17:45:21'),
(17, '2021-11-17 02:00:30'),
(18, '2021-11-17 03:26:56'),
(19, '2021-11-17 03:31:15'),
(20, '2021-11-17 03:34:26'),
(21, '2021-11-17 13:28:59'),
(22, '2021-12-17 17:49:51'),
(23, '2021-12-17 17:49:52'),
(24, '2021-12-17 18:07:35'),
(25, '2021-12-17 18:07:36'),
(26, '2021-12-17 18:07:39'),
(27, '2021-12-20 08:06:50'),
(28, '2021-12-20 08:07:09'),
(29, '2021-12-20 08:12:35'),
(30, '2022-01-11 13:47:17'),
(31, '2022-01-14 20:04:40'),
(32, '2022-01-20 06:55:10'),
(33, '2022-01-24 04:48:21'),
(34, '2022-01-24 04:48:23'),
(35, '2022-01-24 04:48:24'),
(36, '2022-01-26 00:58:39'),
(37, '2022-01-28 08:47:45'),
(38, '2022-01-28 10:02:13'),
(39, '2022-01-28 11:29:19'),
(40, '2022-01-29 04:51:32'),
(41, '2022-01-30 05:50:24'),
(42, '2022-01-30 05:51:28'),
(43, '2022-01-30 06:24:16'),
(44, '2022-01-30 07:30:42'),
(45, '2022-01-30 07:44:02'),
(46, '2022-01-30 07:44:15'),
(47, '2022-01-30 07:46:04'),
(48, '2022-01-30 07:46:17'),
(49, '2022-01-30 07:47:06'),
(50, '2022-06-20 17:27:18'),
(51, '2022-06-20 17:31:36'),
(52, '2022-06-21 16:31:47'),
(53, '2022-06-25 02:31:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indeks untuk tabel `new_table`
--
ALTER TABLE `new_table`
  ADD PRIMARY KEY (`visitor_id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_id_UNIQUE` (`product_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Indeks untuk tabel `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`visitor_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `new_table`
--
ALTER TABLE `new_table`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `visitor`
--
ALTER TABLE `visitor`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
