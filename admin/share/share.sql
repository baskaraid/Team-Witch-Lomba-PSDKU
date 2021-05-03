-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2021 pada 05.48
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `share`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `donasi`
--

CREATE TABLE `donasi` (
  `admin` varchar(255) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `deskripsi` mediumtext DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `donasi`
--

INSERT INTO `donasi` (`admin`, `nama`, `deskripsi`, `foto`) VALUES
('adudu', 'Narutama Phinda Baskara', 'lalalala', 'soto-ayam-istckphoto-copy.jpg'),
('ardnt', 'Gudeg', 'Gudeg adalah masakan tradisional Jawa dari Yogyakarta dan Jawa Tengah, Indonesia. Dalam perkembangannya, masyarakat mengenal gudeg terkenal berasal dari Yogyakarta sehingga membuat kota ini dikenal dengan nama Kota Gudeg. Sejarah gudeg di Yogyakarta dimulai bersamaan dengan dibangunnya kerajaan Mataram Islam di alas Mentaok yang ada di daerah Kotagede pada sekitar tahun 1500-an. Gudeg sejatinya bukan berasal dari kerajaan tapi berasal dari masyarakat. Dikarenakan proses memasaknya yang lama, pada abad 19 belum banyak yang berjualan gudeg. Gudeg mulai populer dan banyak diperdagangkan pada tahun 1940-an saat Presiden Sukarno membangun Universitas Gajah Mada (UGM) hingga sekarang.', '1558421946_gudeg_olahan_gori_khas_yogyakarta_153522.jpg'),
('BASKARA', 'Pecel LELE', 'Pecel lele atau pecek lele[2] di Indonesia adalah nama sebuah makanan khas Jawa yang terdiri dari ikan lele dan sambal tomat. Biasanya yang dimaksud adalah ikan lele yang digoreng kering dengan minyak lalu disajikan dengan sambal tomat dan lalapan. Lalapan biasa terdiri dari kemangi, kubis, mentimun, dan kacang panjang.  Makanan ini sangat digemari di Pulau Jawa sebagai alternatif masakan ayam, terutama ayam goreng. Di beberapa daerah memiliki julukan yang berbeda-beda, di Jember biasanya disebut pecek lele, Malang menyebutnya lalapan lele. Biasanya penyajian pecel lele ini seperti penyajian pada ikan gurami, nila dll. yaitu sambal khas dengan aroma terasi, sayur lalapan seperti kacang panjang, timun, kemangi. Warung pecel lele banyak berdiri di kota dan pinggir jalan dengan sebutan PKL, lesehan lalapan pecek lele dan di beberapa kampus seperti di Jawa banyak berdiri untuk melayani pelajar karena harganya tergolong murah. Penjual pecel lele biasanya merupakan warga perantauan yang berasal dari Lamongan, Jawa Timur.[3]', '60569b33a2b3d.jpeg'),
('HANIF', 'Soto', 'Soto, sroto, sauto, tauto, atau coto adalah makanan khas Indonesia seperti sop yang terbuat dari kaldu daging dan sayuran. Daging yang paling sering digunakan adalah daging sapi dan ayam, tetapi ada pula yang menggunakan daging babi atau kambing. Berbagai daerah di Indonesia memiliki soto khas daerahnya masing-masing dengan komposisi yang berbeda-beda, misalnya soto Madura, soto Kediri, soto Pemalang, soto Lamongan, soto Jepara, soto Semarang, soto Kudus, soto Betawi, soto Padang, soto Bandung, sroto Sokaraja, soto Banjar, soto Medan, dan coto Makassar. Soto juga diberi nama sesuai isinya, misalnya soto ayam, soto babat, atau soto kambing. Ada pula soto yang dibuat dari daging kaki sapi yang disebut dengan soto sekengkel.  Cara penyajian soto berbeda-beda sesuai kekhasan di setiap daerah. Soto biasa dihidangkan dengan nasi, lontong, ketupat, mi, atau bihun. Untuk menambah kenikmatan soto, biasanya juga disertai berbagai macam lauk, misalnya kerupuk, perkedel, emping, sambal, dan sambal kacang. Ada pula yang m', 'soto-ayam-istckphoto-copy.jpg'),
('ilham', 'belut', 'belut bla bla bla bla', 'belut.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
