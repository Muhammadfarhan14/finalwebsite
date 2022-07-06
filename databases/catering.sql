-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2022 pada 16.05
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catering`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `foto`, `nama`, `harga`, `kategori`, `detail`) VALUES
(36, '2112281536am.jpg', 'Nasi Cumi Petai', '30000', 'nasikotak', 'Nasi Putih, Cumi,Petai, Wortel, Mie '),
(37, '2112281606am.jpg', 'Nasi Ikan Balado', '20000', 'nasikotak', 'Nasi Putih, Ikan balado,\r\nKangkung, Mie '),
(38, '2112281633am.jpg', 'Nasi Telur Balado', '15000', 'nasikotak', 'Nasi Putih, Telur Balado, Wortel, Mie '),
(39, '2112281710am.jpg', 'Nasi Lele Goreng', '20000', 'nasikotak', 'Nasi Putih, Lele Goreng, Mie '),
(40, '2112281727am.jpg', 'Nasi Lele Bakar', '20000', 'nasikotak', 'Nasi Putih, Lele Bakar, Mie, Tahu'),
(41, '2112281749am.jpg', 'Nasi Semur Daging', '25000', 'nasikotak', 'Nasi Putih, Semur, Daging, Tempe '),
(42, '2112281810am.jpg', 'Nasi Udang Tepung Goreng', '25000', 'nasikotak', 'Nasi Putih, Udang Goreng, Tempe, Toge'),
(43, '2112281830am.jpg', 'Nasi Gulai Telur', '25000', 'nasikotak', 'Nasi Putih, Gulai Telor, Ayam Goreng Serundeng, Santan Daun Singkong, Cabe Ijo\r\n\r\n'),
(44, '2112281924am.jpg', 'Nasi Bakar Ayam', '20000', 'nasikotak', 'Nasi Bakar, Ayam Goreng Lengkuas, Telor Balado, Tahu Goreng Isi, Sambal\r\n\r\n'),
(45, '2112281948am.jpg', 'Nasi Goreng', '20000', 'nasikotak', 'Nasi Goreng, Sambal, timun lalapan,kerupuk, telur dadar iris'),
(47, '2112282053am.jpg', 'Nasi Ayam Suwir', '20000', 'nasikotak', 'Ayam Suwir, Nasi, Sambal Belacan, Kerupuk'),
(48, '2112282120am.jpg', 'Nasi Telur Saus Kari', '20000', 'nasikotak', 'Nasi , Telur , Saus kari , Kulit ayam'),
(49, '2112282148am.jpg', 'Nasi Ikan Fillet Matah', '25000', 'nasikotak', 'Nasi Putih, Ikan Fillet, Tempe, Sop'),
(50, '2112282210am.jpg', 'Nasi Dendeng Balado Peteh', '20000', 'nasikotak', 'Nasi Putih, Dendeng Balado Petai, Tumis Bihun Goreng, Lalapan Tomat & Timun, Kerupuk, Sambal'),
(51, '2112282233am.jpg', 'Nasi Kapau Rendang', '25000', 'nasikotak', 'Nasi Putih, Rendang, Tahu, Kentang, Timun'),
(52, '2112282252am.jpg', 'Nasi Udang Balado', '30000', 'nasikotak', 'Nasi Putih, Udang, Jagung, Sambal, Kerupuk'),
(53, '2112282317am.jpg', 'Nasi Ayam Gulung Sawi', '25000', 'nasikotak', 'Nasi Putih, Ayam Gulung Sawi Teriyaki, Bakwan Jagung, Sambal, Kerupuk'),
(54, '2112282335am.jpg', 'Nasi Paru Aceh', '25000', 'nasikotak', 'Nasi Putih, Tumis Paru Aceh Pedas, Tempe Orek , Kerupuk\r\n\r\n'),
(55, '2112282352am.jpg', 'Nasi Bali', '25000', 'nasikotak', 'Nasi Putih, Ayam Suwir Balado, Urap Urap Sayur, Kerupuk'),
(56, '2112282410am.jpg', 'Nasi Dori Sambal Mata', '25000', 'nasikotak', 'Nasi Putih, Ikan Goreng Tepung Sambal Matah, Tumis Sawi Putih, Kerupuk'),
(57, '2112282653am.jpg', 'Grilled Fish Ball', '20000', 'nasikotak', 'Nasi, Bakso Ikan Bakar, Capcay, Sambal, Kerupuk'),
(60, '2112285309am.jpg', 'Tumpeng Paket A', '450000', 'tumpeng', 'Nasi kuning/uduk, Ayam goreng/serundeng/bakar, Telur balado/suir, Kentang balado, Mie /bihun goreng, Tempe orek, Sambal & Kerupuk'),
(61, '2112285338am.jpg', 'Tumpeng Paket B', '550000', 'tumpeng', 'Nasi kuning/uduk, Udang goreng tepung/balado, Telur balado/suir, Kentang balado, Mie /bihun goreng, Tempe orek, Sambal & Kerupuk'),
(62, '2112285405am.jpg', 'Tumpeng Paket C', '700000', 'tumpeng', 'Nasi kuning/uduk, Udang goreng tepung/balado, Ayam goreng/serundeng/bakar, Telur balado/suir, Kentang balado, Mie /bihun goreng, Tempe orek, Sambal & Kerupuk'),
(64, '2112285525am.jpg', 'Tumpeng Medium', '500000', 'tumpeng', 'Nasi Kuning, Ayam Goreng, Sambal Goreng Kentang, Tempe Bacem, Telur Dadar Tipis, Perkedel, Sayur Urapan, Lalapan dan Sambal'),
(65, '2112285555am.jpg', 'Tumpeng Large', '600000', 'tumpeng', 'Telor Balado, Sayur Urap, Balado Teri Kacang, Kentang Kering, Mie Goreng, Tempe Orek, Perkedel Kentang, Ayam Suwir Merah/ Ayam Goreng/ Ayam Bakar,'),
(67, '2112285800am.jpg', 'Tumpeng Liwet', '400000', 'tumpeng', 'Nasi Kuning / Pandan / Daun Jeruk / Custom, Ayam Goreng, Perkedel, Tempe Orek, Sambal Kentang Ati Ampela Pete, Sayur Urap, Telur Balado.'),
(68, '2112285828am.jpg', 'Tumpeng HBD', '400000', 'tumpeng', 'Nasi kuning/uduk, Ayam goreng/serundeng/bakar, Telur balado/suir, Kentang balado, Mie /bihun goreng, Tempe orek, Sambal & Kerupuk'),
(69, '2112285855am.jpg', 'Tumpeng Rinjani', '500000', 'tumpeng', 'Nasi Kuning, Sambal Goreng, Kentang-Ati, Mie Goreng, Ayam Goreng, Serundeng, Telor Balado, Empal Suwir, Perkedel, Kering Tempe, Sambal'),
(70, '2112280708am.jpg', 'Kue A', '15000', 'kuedos', 'Cheese cake, Risoles, Puding Gula Merah, Air Minum Kemasan'),
(71, '2112280725am.jpg', 'Kue B', '15000', 'kuedos', 'Brownies cake, Pastel isi Sayuran, Bolu Gulung, Air Minum Kemasan'),
(72, '2112280750am.jpg', 'Kue C', '15000', 'kuedos', 'Martabak mini, Risoles isi mayonaise, Soes isi vla, Air Minum Kemasan'),
(73, '2112280822am.jpg', 'Kue D', '15000', 'kuedos', 'Lemper, Soes Vanila, Mineral Water'),
(74, '2112280833am.jpg', 'Kue E', '15000', 'kuedos', 'Arem-Arem, Bolu Kukus, Mineral Water'),
(75, '2112280846am.jpg', 'Kue F', '15000', 'kuedos', 'Sausage Brood, Marbel Cake Potong, Aqua Cup'),
(76, '2112280858am.jpg', 'Kue G', '15000', 'kuedos', 'Croissant, Bika Ambon, Aqua Cup'),
(77, '2112280912am.jpg', 'Kue H', '15000', 'kuedos', 'Arem-Arem, Roti Cokelat, Aqua Cup'),
(78, '2112280923am.jpg', 'Kue I', '15000', 'kuedos', 'Martabak mini, Risoles isi mayonaise, Soes isi vla, Buah, Air Minum Kemasan'),
(79, '2112280936am.jpg', 'Kue J', '15000', 'kuedos', 'Pia Susu, Kroket Kentang, Tahu isi Sayuran, Buah, Air Minum Kemasan'),
(80, '2112280950am.jpg', 'Kue K', '15000', 'kuedos', 'Cake Marmer, Sus Buah, Roti Goreng isi Ayam, Air Mineral'),
(81, '2112281006am.jpg', 'Kue L', '15000', 'kuedos', 'Roti Abon, Lapis Legit Coklat, Lemper, Air Mineral'),
(82, '2112281021am.jpg', 'Kue M', '15000', 'kuedos', 'Roti Kukus, Rainbow Cake, Lemper, Air Mineral'),
(83, '2112281032am.jpg', 'Kue N', '15000', 'kuedos', 'Croissant Keju, White Milk Choco Bun, Aqua Cup'),
(84, '2112281044am.jpg', 'Kue O', '15000', 'kuedos', 'Roti Pisang Keju, Cokelat Meisis Gulung, Aqua Cup'),
(85, '2112281056am.jpg', 'Kue P', '15000', 'kuedos', 'Lemper, Pastel, Kue Lumpur, Puding Mangga Saus keju / Dark Chocolate, Mineral Water'),
(86, '2112281106am.jpg', 'Kue Q', '15000', 'kuedos', 'Arem-Arem, Risol, Dadar Gulung, Puding Mangga Saus keju / Dark Chocolate, Mineral Water'),
(87, '2112281127am.jpg', 'Kue R', '15000', 'kuedos', 'Lemper, Risol, Bolu Kukus, Puding Mangga Saus keju / Dark Chocolate, Mineral Water'),
(88, '2112281140am.jpg', 'Kue S', '15000', 'kuedos', 'Croissant, Roti Kismis, Chiffon Cokelat Potong, Aqua Cup'),
(102, '2112301834am.jpg', 'Nasi Ayam Bakar Dada', '25000', 'nasikotak', 'Nasi Putih, Ayam Bakar Paha, Tempe'),
(103, '2112281633am.jpg', 'Nasi Telur Balado', '15000', 'nasikotak', 'Nasi Putih, Telor Balado,\r\n Wortel, Mie '),
(106, '2112311943pm.jpg', 'Tumpeng Small', '350000', 'tumpeng', 'Nasi Kuning / Pandan / Daun Jeruk / Custom, Ayam Goreng, Perkedel, Tempe Orek, Sambal Kentang Ati Ampela Pete, Sayur Urap, Telur Balado.'),
(111, '2201023316am.jpg', 'Kue T', '15000', 'kuedos', 'Croissant, Roti Kismis, Chiffon Cokelat Potong, Aqua Cup'),
(112, '2201021234pm.jpg', 'Nasi Gulai Telur', '20000', 'nasikotak', 'Nasi Putih, Gulai Telor, Ayam Goreng Serundeng, Santan Daun Singkong, Cabe Ijo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`) VALUES
(2, 'admin', 'admin', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
