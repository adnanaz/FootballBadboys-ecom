-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Bulan Mei 2020 pada 23.45
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olshopfbb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` int(11) NOT NULL,
  `text1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `banners`
--

INSERT INTO `banners` (`id`, `year`, `text1`, `text2`, `text3`, `model`, `created_at`, `updated_at`) VALUES
(1, 2020, 'NEW ARRIVAL', 'on the street', 'in the stadium', '1589236528_PC170366.jpg', NULL, '2020-05-11 15:48:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'T-Shirts', 't-shirts', NULL, NULL),
(2, 'Shoes', 'shoes', NULL, NULL),
(5, 'Uncategorized', 'uncategorized', '2020-05-04 11:32:45', '2020-05-04 11:32:45'),
(10, 'Discount', 'discount', '2020-05-05 01:29:22', '2020-05-05 01:29:22'),
(11, 'Jacket', 'jacket', '2020-05-07 13:13:26', '2020-05-07 13:13:26'),
(12, 'Clearance Sell', 'clearance-sell', '2020-05-08 11:56:43', '2020-05-08 11:56:43'),
(13, 'Jersey', 'jersey', '2020-05-09 00:14:22', '2020-05-09 00:14:22'),
(14, 'Merchandise', 'merchandise', '2020-05-09 00:14:39', '2020-05-09 00:14:39'),
(15, 'Overshirt', 'overshirt', '2020-05-09 00:14:57', '2020-05-09 00:14:57'),
(16, 'Polo T-shirt', 'polo-t-shirt', '2020-05-09 00:15:11', '2020-05-09 00:15:11'),
(17, 'Shortpants', 'shortpants', '2020-05-09 00:15:24', '2020-05-09 00:15:24'),
(18, 'Waistbag', 'waistbag', '2020-05-09 00:15:44', '2020-05-09 00:15:44'),
(19, 'Cagoule', 'cagoule', '2020-05-09 00:15:58', '2020-05-09 00:15:58'),
(20, 'Caps', 'caps', '2020-05-09 00:16:13', '2020-05-09 00:16:13'),
(21, 'Crewneck', 'crewneck', '2020-05-09 00:16:25', '2020-05-09 00:16:25'),
(22, 'Half Zip', 'half-zip', '2020-05-09 00:16:39', '2020-05-09 00:16:39'),
(23, 'Hoodie', 'hoodie', '2020-05-09 00:17:07', '2020-05-09 00:17:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_html` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `colors`
--

INSERT INTO `colors` (`id`, `name`, `slug`, `name_html`, `created_at`, `updated_at`) VALUES
(1, 'Abu-abu', 'abu-abu', '#808080', NULL, NULL),
(2, 'Biru', 'biru', '#0000FF', NULL, NULL),
(3, 'Biru Dongker', 'biru-dongker', '#000080', NULL, NULL),
(4, 'Biru Muda', 'biru-muda', '#00FFFF', NULL, NULL),
(5, 'Coklat', 'coklat', '#964B00', NULL, NULL),
(6, 'Emas', 'emas', '#FFD700', NULL, NULL),
(7, 'Hijau', 'hijau', '#00FF00', NULL, NULL),
(8, 'Hitam', 'hitam', '#000000', NULL, NULL),
(9, 'Kuning', 'kuning', '#FFFF00', NULL, NULL),
(10, 'Magenta', 'magenta', '#FF00FF', NULL, NULL),
(11, 'Pink', 'pink', '#FF007F', NULL, NULL),
(12, 'Merah', 'merah', '#FF0000', NULL, NULL),
(13, 'Merah Marun', 'merah-marun', '#800000', NULL, NULL),
(14, 'Merah Jambu', 'merah-jambu', '#FFC0CB', NULL, NULL),
(15, 'Nila', 'nila', '#6F00FF', NULL, NULL),
(16, 'Jingga', 'jingga', '#FF7F00', NULL, NULL),
(17, 'Perak', 'perak', '#C0C0C0', NULL, NULL),
(18, 'Putih', 'putih', '#FFFFFF', NULL, NULL),
(19, 'Ungu', 'ungu', '#BF00FF', NULL, NULL),
(20, 'Violet', 'violet', '#8F00FF', NULL, NULL),
(21, 'Zaitun', 'zaitun', '#808000', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `color_product`
--

CREATE TABLE `color_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `color_product`
--

INSERT INTO `color_product` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(105, 34, 18, NULL, NULL),
(106, 34, 8, NULL, NULL),
(107, 35, 3, NULL, NULL),
(108, 36, 7, NULL, NULL),
(109, 37, 3, NULL, NULL),
(110, 38, 3, NULL, NULL),
(111, 41, 5, NULL, NULL),
(112, 41, 8, NULL, NULL),
(113, 42, 8, NULL, NULL),
(114, 43, 8, NULL, NULL),
(115, 44, 3, NULL, NULL),
(116, 45, 18, NULL, NULL),
(117, 46, 3, NULL, NULL),
(118, 47, 17, NULL, NULL),
(119, 48, 8, NULL, NULL),
(120, 49, 8, NULL, NULL),
(121, 50, 8, NULL, NULL),
(123, 52, 3, NULL, NULL),
(124, 53, 5, NULL, NULL),
(125, 54, 18, NULL, NULL),
(126, 55, 8, NULL, NULL),
(127, 56, 7, NULL, NULL),
(128, 57, 8, NULL, NULL),
(129, 58, 3, NULL, NULL),
(130, 59, 18, NULL, NULL),
(131, 61, 3, NULL, NULL),
(132, 61, 8, NULL, NULL),
(133, 63, 8, NULL, NULL),
(134, 64, 3, NULL, NULL),
(136, 66, 12, NULL, NULL),
(137, 67, 5, NULL, NULL),
(138, 68, 8, NULL, NULL),
(139, 69, 3, NULL, NULL),
(140, 70, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `content_promotions`
--

CREATE TABLE `content_promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `content_promotions`
--

INSERT INTO `content_promotions` (`id`, `image1`, `image2`, `created_at`, `updated_at`) VALUES
(1, '1589100776_P1291468 (1).jpg', '1589100776_P1291478.jpg', NULL, '2020-05-10 01:52:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(65, '2020_04_19_152130_create_types_table', 1),
(85, '2014_10_12_000000_create_users_table', 2),
(86, '2019_08_19_000000_create_failed_jobs_table', 2),
(87, '2020_04_19_150959_create_categories_table', 2),
(88, '2020_04_19_151804_create_colors_table', 2),
(89, '2020_04_19_152052_create_sizes_table', 2),
(90, '2020_04_19_152251_create_banners_table', 2),
(91, '2020_04_19_153733_create_content_promotions_table', 2),
(97, '2020_04_19_154100_create_products_table', 3),
(98, '2020_04_19_161036_create_orders_table', 3),
(99, '2020_04_26_145229_create_color_product_table', 3),
(100, '2020_04_26_145750_create_product_size_table', 3),
(101, '2020_04_26_150606_create_order_product_table', 3),
(102, '2020_05_05_183351_create_content_promotions_table', 4),
(104, '2020_05_06_085722_create_banners_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodepos` int(11) NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `shipped` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `province`, `city`, `address`, `kodepos`, `payment_method`, `subtotal`, `total_harga`, `shipped`, `created_at`, `updated_at`) VALUES
(1, 'Arfian Dimas Andi Permana', 'arfiandimas1929@gmail.com', '098763627828', 'Yogyakarta', 'Kulon Progo', 'Beku', 55672, 'Transfer BTN - 012345678 a/n Adnan Aziz', 1050055, 1050055, 0, '2020-05-11 16:34:53', '2020-05-11 16:34:53'),
(2, 'adnan aziz d', 'adnandanny676@gmail.com', '082229207400', 'Jawa Tengah', 'Sleman', 'jl turi km 3.7 kadisobo trimulyo sleman pondok idaman A2 yogyakarta', 55513, 'Transfer BCA - 012345678 a/n Adnan Aziz', 136000, 136000, 0, '2020-05-12 05:48:05', '2020-05-12 05:48:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_product`
--

CREATE TABLE `order_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `size` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `quantity`, `size`, `color`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 3, 'XL', 'Magenta', '2020-05-11 16:34:53', '2020-05-11 16:34:53'),
(2, 1, NULL, 1, 'L', 'Magenta', '2020-05-11 16:34:53', '2020-05-11 16:34:53'),
(3, 2, 49, 1, 'M', 'Hitam', '2020-05-12 05:48:05', '2020-05-12 05:48:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_product` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `price_discount` int(11) DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `kode_product`, `name`, `slug`, `description`, `material`, `link_video`, `price`, `price_discount`, `image`, `created_at`, `updated_at`, `deleted_at`, `category_id`) VALUES
(34, '002', 'St. Pauli T-Shirt Badboys Edition', 'st-pauli-t-shirt-badboys-edition', '<p>Badboys St.Pauli T-Shirt special edition&nbsp;</p>', '<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut. Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\nBahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S. Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\nGramasi Kain 150-160, Adem, Soft, Menyerap Keringat Lembut Ga Kaku<br />\r\nJahitan Pundak : Rantai</p>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 132000, NULL, '[\"PC170354.jpg\",\"PC170366.jpg\",\"PC170374.jpg\",\"PC170379.jpg\",\"PC170396.jpg\",\"PC170412.jpg\",\"PC170752.jpg\",\"PC170771.jpg\",\"PC170788.jpg\"]', '2020-05-11 14:24:08', '2020-05-11 15:29:00', NULL, 1),
(35, '003', 'Ballboys T-Shirt Limited Session', 'ballboys-t-shirt-limited-session', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Ballboys T-Shirt Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut. Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\nBahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S. Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\nGramasi Kain 150-160, Adem, Soft, Menyerap Keringat Lembut Ga Kaku<br />\r\nJahitan Pundak : Rantai</p>', 'https://www.youtube.com/watch?v=Q3qHG0FQ1zY', 129000, 15000, '[\"PC170315.jpg\",\"PC170319.jpg\",\"PC170321.jpg\"]', '2020-05-11 14:33:22', '2020-05-11 14:33:22', NULL, 1),
(36, '004', 'Ballboys T-Shirt Limited Edition', 'ballboys-t-shirt-limited-edition', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Ballboys T-Shirt Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut. Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\nBahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S. Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\nGramasi Kain 150-160, Adem, Soft, Menyerap Keringat Lembut Ga Kaku<br />\r\nJahitan Pundak : Rantai</p>', 'https://www.youtube.com/watch?v=Q3qHG0FQ1zY', 13000, NULL, '[\"PC170325.jpg\",\"PC170341.jpg\"]', '2020-05-11 14:36:23', '2020-05-11 14:36:23', NULL, 1),
(37, '005', 'Blue Navy T-Shirt', 'blue-navy-t-shirt', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Ballboys T-Shirt Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut. Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\nBahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S. Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\nGramasi Kain 150-160, Adem, Soft, Menyerap Keringat Lembut Ga Kaku<br />\r\nJahitan Pundak : Rantai</p>', NULL, 140000, NULL, '[\"PC170348.jpg\",\"PC170350.jpg\",\"PC170351.jpg\"]', '2020-05-11 15:09:33', '2020-05-11 15:09:33', NULL, 1),
(38, '006', 'Badboys Jacket', 'badboys-jacket', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut.</p>\r\n\r\n<p>-Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\n-Bahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S.</p>\r\n\r\n<p>-Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\n-Gramasi Kain 150-160, Adem, Soft, Menyerap Keringat Lembut Ga Kaku<br />\r\n-Jahitan Pundak : Rantai</p>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 220000, NULL, '[\"PC170425.jpg\",\"PC170451.jpg\",\"PC170452.jpg\"]', '2020-05-11 15:11:05', '2020-05-11 15:12:33', NULL, 11),
(41, '007', 'Badboys Limonaise Jacket', 'badboys-limonaise-jacket', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut. Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\nBahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S. Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\nGramasi Kain 150-160, Adem, Soft, Menyerap Keringat Lembut Ga Kaku<br />\r\nJahitan Pundak : Rantai</p>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 210000, NULL, '[\"PC170462.jpg\",\"PC170474.jpg\",\"PC170487.jpg\",\"PC170498.jpg\",\"PC170526.jpg\",\"PC170543.jpg\"]', '2020-05-11 15:15:20', '2020-05-11 15:15:20', NULL, 23),
(42, '008', 'Black Cagoule Badboys', 'black-cagoule-badboys', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut. Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\nBahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S. Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\nGramasi Kain 150-160, Adem, Soft, Menyerap Keringat Lembut Ga Kaku<br />\r\nJahitan Pundak : Rantai</p>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 250000, NULL, '[\"PC170552.jpg\",\"PC170565.jpg\",\"PC170575.jpg\"]', '2020-05-11 15:18:13', '2020-05-11 15:18:13', NULL, 19),
(43, '009', 'Russian Jacket Bloddy Football', 'russian-jacket-bloddy-football', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut. Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\nBahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S. Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\nGramasi Kain 150-160, Adem, Soft, Menyerap Keringat Lembut Ga Kaku<br />\r\nJahitan Pundak : Rantai</p>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 142000, NULL, '[\"PC170605.jpg\",\"PC170606.jpg\",\"PC170612.jpg\"]', '2020-05-11 15:19:12', '2020-05-11 15:19:12', NULL, 11),
(44, '010', 'Crewneck Badboys', 'crewneck-badboys', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut. Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\nBahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S. Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\nGramasi Kain 150-160, Adem, Soft, Menyerap Keringat Lembut Ga Kaku<br />\r\nJahitan Pundak : Rantai</p>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 136000, NULL, '[\"PC170624.jpg\",\"PC170645.jpg\",\"PC170671.jpg\"]', '2020-05-11 15:20:20', '2020-05-11 15:20:20', NULL, 21),
(45, '011', 'ballboys Skuda Shirt', 'ballboys-skuda-shirt', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut. Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\nBahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S. Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\nGramasi Kain 150-160, Adem, Soft, Menyerap Keringat Lembut Ga Kaku<br />\r\nJahitan Pundak : Rantai</p>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 126000, NULL, '[\"PC170685.jpg\",\"PC170693.jpg\",\"PC170702.jpg\"]', '2020-05-11 15:22:18', '2020-05-11 15:22:18', NULL, 1),
(46, '012', 'badboys T-Shirt', 'badboys-t-shirt', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut. Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\nBahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S. Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\nGramasi Kain 150-160, Adem, Soft, Menyerap Keringat Lembut Ga Kaku<br />\r\nJahitan Pundak : Rantai</p>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 142000, NULL, '[\"PC170711.jpg\",\"PC170712.jpg\",\"PC170719.jpg\",\"PC170739.jpg\"]', '2020-05-11 15:23:19', '2020-05-11 15:23:19', NULL, 1),
(47, '013', 'Badboys Polo Shirt', 'badboys-polo-shirt', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut. Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\nBahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S. Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\nGramasi Kain 150-160, Adem, Soft, Menyerap Keringat Lembut Ga Kaku<br />\r\nJahitan Pundak : Rantai</p>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 142000, NULL, '[\"PC170898.jpg\",\"PC170907.jpg\",\"PC170920.jpg\"]', '2020-05-11 15:29:59', '2020-05-11 15:29:59', NULL, 16),
(48, '014', 'Polo Badboys', 'polo-badboys', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut. Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\nBahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S. Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\nGramasi Kain 150-160, Adem, Soft, Menyerap Keringat Lembut Ga Kaku<br />\r\nJahitan Pundak : Rantai</p>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 120000, NULL, '[\"PC170935.jpg\",\"PC170945.jpg\",\"PC170949.jpg\"]', '2020-05-11 15:31:28', '2020-05-11 15:31:28', NULL, 16),
(49, '015', 'Break The Rules - T-Shirt', 'break-the-rules-t-shirt', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wearable innovation from FootballBadboys.</p>\r\n\r\n<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut. Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\nBahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S. Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\nGramasi Kain 150-160, Adem, Soft, Menyerap Keringat Lembut Ga Kaku<br />\r\nJahitan Pundak : Rantai</p>\r\n\r\n<ul>\r\n</ul>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 136000, NULL, '[\"PC170799.jpg\",\"PC170816.jpg\",\"PC170818.jpg\"]', '2020-05-11 15:32:16', '2020-05-11 15:32:16', NULL, 1),
(50, '016', 'Badboys Black Edition', 'badboys-black-edition', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wearable innovation from FootballBadboys.</p>\r\n\r\n<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut. Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\nBahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S. Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\nGramasi Kain 150-160, Adem, Soft, Menyerap Keringat Lembut Ga Kaku<br />\r\nJahitan Pundak : Rantai</p>\r\n\r\n<ul>\r\n</ul>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 142000, NULL, '[\"PC170848.jpg\",\"PC170860.jpg\",\"PC170871.jpg\"]', '2020-05-11 15:33:23', '2020-05-11 15:33:23', NULL, 23),
(52, 'CS01', 'ballboys blue edition', 'ballboys-blue-edition', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wearable innovation from FootballBadboys.</p>\r\n\r\n<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wearable innovation from FootballBadboys.</p>\r\n\r\n<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut. Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\nBahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S. Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\nGramasi Kain 150-160, Adem, Soft, Menyerap Keringat Lembut Ga Kaku<br />\r\nJahitan Pundak : Rantai</p>\r\n\r\n<ul>\r\n</ul>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 152000, 132000, '[\"PC170315.jpg\",\"PC170319.jpg\",\"PC170321.jpg\"]', '2020-05-11 18:03:42', '2020-05-11 18:03:42', NULL, 12),
(53, 'CS02', 'Crewneck Badboys', 'crewneck-badboys', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wearable innovation from FootballBadboys.</p>\r\n\r\n<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wearable innovation from FootballBadboys.</p>\r\n\r\n<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut. Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\nBahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S. Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\nGramasi Kain 150-160, Adem, Soft, Menyerap Keringat Lembut Ga Kaku<br />\r\nJahitan Pundak : Rantai</p>\r\n\r\n<ul>\r\n</ul>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 152000, 125000, '[\"PC170462.jpg\",\"PC170474.jpg\",\"PC170487.jpg\",\"PC170498.jpg\"]', '2020-05-11 18:04:45', '2020-05-11 18:05:13', NULL, 12),
(54, 'CS03', 'ballboys Skuda Shirt', 'ballboys-skuda-shirt', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wearable innovation from FootballBadboys.</p>\r\n\r\n<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wearable innovation from FootballBadboys.</p>\r\n\r\n<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut. Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\nBahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S. Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\nGramasi Kain 150-160, Adem, Soft, Menyerap Keringat Lembut Ga Kaku<br />\r\nJahitan Pundak : Rantai</p>\r\n\r\n<ul>\r\n</ul>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 156000, 132000, '[\"PC170685.jpg\",\"PC170693.jpg\",\"PC170702.jpg\"]', '2020-05-11 18:06:19', '2020-05-11 18:06:19', NULL, 12),
(55, 'CS04', 'Crewneck Badboys', 'crewneck-badboys', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wearable innovation from FootballBadboys.</p>\r\n\r\n<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wearable innovation from FootballBadboys.</p>\r\n\r\n<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut. Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\nBahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S. Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\nGramasi Kain 150-160, Adem, Soft, Menyerap Keringat Lembut Ga Kaku<br />\r\nJahitan Pundak : Rantai</p>\r\n\r\n<ul>\r\n</ul>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 192000, 156000, '[\"PC170552.jpg\",\"PC170565.jpg\",\"PC170575.jpg\"]', '2020-05-11 18:07:59', '2020-05-11 18:07:59', NULL, 12),
(56, 'CS05', 'Ballboys Green Edition', 'ballboys-green-edition', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>ootball Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wearable innovation from FootballBadboys.</p>\r\n\r\n<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wearable innovation from FootballBadboys.</p>\r\n\r\n<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut. Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\nBahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S. Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\nGramasi Kain 150-160, Ade</p>\r\n\r\n<ul>\r\n</ul>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 140000, 125000, '[\"PC170325.jpg\",\"PC170341.jpg\"]', '2020-05-11 18:09:03', '2020-05-11 18:09:03', NULL, 12),
(57, 'CS06', 'Russian Jacket Bloddy Football', 'russian-jacket-bloddy-football', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>ootball Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wearable innovation from FootballBadboys.</p>\r\n\r\n<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wearable innovation from FootballBadboys.</p>\r\n\r\n<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut. Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\nBahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S. Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\nGramasi Kain 150-160, Ade</p>\r\n\r\n<ul>\r\n</ul>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 192000, 145000, '[\"PC170752.jpg\",\"PC170771.jpg\",\"PC170788.jpg\"]', '2020-05-11 18:09:53', '2020-05-11 18:09:53', NULL, 12),
(58, 'CS07', 'Blue Navy T-Shirt', 'blue-navy-t-shirt', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wearable innovation from FootballBadboys.</p>\r\n\r\n<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wearable innovation from FootballBadboys.</p>\r\n\r\n<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut. Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\nBahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S. Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\nGramasi Kain 150-160, Adem, Soft, Menyerap Keringat Lembut Ga Kaku<br />\r\nJahitan Pundak : Rantai</p>\r\n\r\n<ul>\r\n</ul>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 150000, 120000, '[\"PC170711.jpg\",\"PC170712.jpg\",\"PC170719.jpg\",\"PC170739.jpg\"]', '2020-05-11 18:11:37', '2020-05-11 18:11:37', NULL, 12),
(59, 'CS08', 'St. Pauli T-Shirt Badboys Edition', 'st-pauli-t-shirt-badboys-edition', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wearable innovation from FootballBadboys.</p>\r\n\r\n<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wearable innovation from FootballBadboys.</p>\r\n\r\n<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut. Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\nBahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S. Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\nGramasi Kain 150-160, Adem, Soft, Menyerap Keringat Lembut Ga Kaku<br />\r\nJahitan Pundak : Rantai</p>\r\n\r\n<ul>\r\n</ul>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 145000, 122000, '[\"PC170354.jpg\",\"PC170366.jpg\",\"PC170374.jpg\"]', '2020-05-11 18:13:29', '2020-05-11 18:13:29', NULL, 12),
(61, 'CS09', 'blue Dongker Badboys', 'blue-dongker-badboys', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wearable innovation from FootballBadboys.</p>\r\n\r\n<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wearable innovation from FootballBadboys.</p>\r\n\r\n<p>UNiSEX, Bisa Dipakai Oleh Pria &amp; Wanita<br />\r\nKaos Polos Cotton Combed 30S Standar Distro Yang Halus Dan Lembut. Tanpa Merek, Cocok Untuk Sablon DTG, Digital, Atau Manual, Ready Stock Tersedia ukuran S sampai XL.<br />\r\nBahan 100% Cotton Combed 30S Reaktif, Bahan Langsung Terasa Adem Begitu Dipakai Dan Ga Panas Lebih Tipis Dibanding 20S/24S. Cocok Digunakan Sesuai Iklim Seperti Di Indonesia.<br />\r\nGramasi Kain 150-160, Adem, Soft, Menyerap Keringat Lembut Ga Kaku<br />\r\nJahitan Pundak : Rantai</p>\r\n\r\n<ul>\r\n</ul>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 125000, 95000, '[\"PC170348.jpg\",\"PC170350.jpg\"]', '2020-05-11 18:15:56', '2020-05-11 18:15:56', NULL, 12),
(63, 'CS10', 'Russian Jacket Bloddy Football', 'russian-jacket-bloddy-football', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', NULL, 156000, 125000, '[\"PC170552.jpg\",\"PC170565.jpg\",\"PC170575.jpg\"]', '2020-05-11 18:18:35', '2020-05-11 18:18:35', NULL, 12),
(64, 'CS11', 'Blue Skuda Shirt', 'blue-skuda-shirt', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 10000, 95000, '[\"PC170315.jpg\",\"PC170319.jpg\",\"PC170321.jpg\"]', '2020-05-11 18:19:21', '2020-05-11 18:19:21', NULL, 12),
(66, 'CS13', 'Red Vampire Badboys Bag', 'red-vampire-badboys-bag', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 132000, 56000, '[\"IMG_6726.jpg\",\"IMG_6730.jpg\",\"IMG_6731.jpg\",\"IMG_6765 (1).jpg\",\"IMG_6765.jpg\",\"IMG_6775.jpg\"]', '2020-05-11 18:22:06', '2020-05-11 18:22:06', NULL, 12),
(67, 'CS14', 'Brown Sugar Bag', 'brown-sugar-bag', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 132000, 72000, '[\"IMG_6719.jpg\",\"IMG_6720.jpg\",\"IMG_6725.jpg\",\"IMG_6768.jpg\",\"IMG_6772.jpg\"]', '2020-05-11 18:23:15', '2020-05-11 18:23:15', NULL, 12),
(68, 'CS15', 'Skuda T shirt limited edition', 'skuda-t-shirt-limited-edition', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 156000, 92000, '[\"PC170799.jpg\",\"PC170816.jpg\",\"PC170818.jpg\"]', '2020-05-11 18:24:13', '2020-05-11 18:24:13', NULL, 12),
(69, 'D01', 'Blue Navy T-Shirt DC', 'blue-navy-t-shirt-dc', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 132000, 99999, '[\"PC170315.jpg\",\"PC170319.jpg\",\"PC170321.jpg\"]', '2020-05-11 18:42:18', '2020-05-11 19:58:58', NULL, 10),
(70, '017', 'Skuda T shirt Year Ed', 'skuda-t-shirt-year-ed', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', '<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>\r\n\r\n<p>Football Badboys mengeluncurkan produk baru bernama&nbsp;Jackey Badboys Limited Session dengan paduan warna biru dongker dan orange cocok untuk kamu yang minat dengan varian warna gelap tetapi tidak mainstream</p>', 'https://www.youtube.com/embed/Q3qHG0FQ1zY', 172000, 125000, '[\"PC170315.jpg\",\"PC170319.jpg\",\"PC170321.jpg\"]', '2020-05-12 01:03:01', '2020-05-12 01:03:15', NULL, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_size`
--

CREATE TABLE `product_size` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `size_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_size`
--

INSERT INTO `product_size` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(109, 34, 2, NULL, NULL),
(110, 34, 3, NULL, NULL),
(111, 34, 4, NULL, NULL),
(112, 34, 9, NULL, NULL),
(113, 35, 1, NULL, NULL),
(114, 35, 2, NULL, NULL),
(115, 35, 3, NULL, NULL),
(116, 35, 4, NULL, NULL),
(117, 36, 2, NULL, NULL),
(118, 36, 3, NULL, NULL),
(119, 36, 4, NULL, NULL),
(120, 36, 9, NULL, NULL),
(121, 37, 1, NULL, NULL),
(122, 37, 2, NULL, NULL),
(123, 37, 3, NULL, NULL),
(124, 37, 9, NULL, NULL),
(125, 38, 2, NULL, NULL),
(126, 38, 3, NULL, NULL),
(127, 38, 9, NULL, NULL),
(128, 42, 3, NULL, NULL),
(129, 42, 9, NULL, NULL),
(130, 43, 3, NULL, NULL),
(131, 43, 9, NULL, NULL),
(132, 44, 2, NULL, NULL),
(133, 44, 3, NULL, NULL),
(134, 44, 4, NULL, NULL),
(135, 44, 9, NULL, NULL),
(136, 45, 2, NULL, NULL),
(137, 45, 3, NULL, NULL),
(138, 45, 4, NULL, NULL),
(139, 45, 9, NULL, NULL),
(140, 46, 3, NULL, NULL),
(141, 46, 9, NULL, NULL),
(142, 47, 2, NULL, NULL),
(143, 47, 3, NULL, NULL),
(144, 47, 9, NULL, NULL),
(145, 48, 2, NULL, NULL),
(146, 48, 3, NULL, NULL),
(147, 48, 9, NULL, NULL),
(148, 49, 2, NULL, NULL),
(149, 49, 3, NULL, NULL),
(150, 49, 9, NULL, NULL),
(151, 50, 2, NULL, NULL),
(152, 50, 3, NULL, NULL),
(153, 50, 9, NULL, NULL),
(156, 52, 1, NULL, NULL),
(157, 52, 2, NULL, NULL),
(158, 53, 2, NULL, NULL),
(159, 53, 3, NULL, NULL),
(160, 53, 9, NULL, NULL),
(161, 54, 2, NULL, NULL),
(162, 54, 3, NULL, NULL),
(163, 54, 10, NULL, NULL),
(164, 55, 2, NULL, NULL),
(165, 55, 6, NULL, NULL),
(166, 55, 7, NULL, NULL),
(167, 56, 2, NULL, NULL),
(168, 56, 3, NULL, NULL),
(169, 56, 9, NULL, NULL),
(170, 57, 2, NULL, NULL),
(171, 57, 3, NULL, NULL),
(172, 57, 9, NULL, NULL),
(173, 58, 2, NULL, NULL),
(174, 58, 9, NULL, NULL),
(175, 59, 2, NULL, NULL),
(176, 59, 3, NULL, NULL),
(177, 61, 2, NULL, NULL),
(178, 61, 3, NULL, NULL),
(179, 61, 9, NULL, NULL),
(180, 63, 2, NULL, NULL),
(181, 63, 3, NULL, NULL),
(182, 63, 4, NULL, NULL),
(183, 63, 9, NULL, NULL),
(184, 64, 2, NULL, NULL),
(185, 64, 3, NULL, NULL),
(188, 66, 6, NULL, NULL),
(189, 67, 6, NULL, NULL),
(190, 68, 2, NULL, NULL),
(191, 68, 3, NULL, NULL),
(192, 68, 4, NULL, NULL),
(193, 69, 2, NULL, NULL),
(194, 69, 3, NULL, NULL),
(195, 69, 9, NULL, NULL),
(196, 70, 1, NULL, NULL),
(197, 70, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'XXL', 'xxl', NULL, NULL),
(2, 'S', 's', NULL, NULL),
(3, 'L', 'l', NULL, NULL),
(4, 'XL', 'xl', NULL, NULL),
(5, 'XXXL', 'xxxl', NULL, NULL),
(6, 'On...', 'on', NULL, NULL),
(7, '10', '10', NULL, NULL),
(8, '12', '12', NULL, NULL),
(9, 'M', 'm', NULL, NULL),
(10, 'XS', 'xs', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `color_product`
--
ALTER TABLE `color_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `color_product_product_id_foreign` (`product_id`),
  ADD KEY `color_product_color_id_foreign` (`color_id`);

--
-- Indeks untuk tabel `content_promotions`
--
ALTER TABLE `content_promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_product_order_id_foreign` (`order_id`),
  ADD KEY `order_product_product_id_foreign` (`product_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_kode_product_unique` (`kode_product`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_size_product_id_foreign` (`product_id`),
  ADD KEY `product_size_size_id_foreign` (`size_id`);

--
-- Indeks untuk tabel `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `color_product`
--
ALTER TABLE `color_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT untuk tabel `content_promotions`
--
ALTER TABLE `content_promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT untuk tabel `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `color_product`
--
ALTER TABLE `color_product`
  ADD CONSTRAINT `color_product_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`),
  ADD CONSTRAINT `color_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Ketidakleluasaan untuk tabel `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `order_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Ketidakleluasaan untuk tabel `product_size`
--
ALTER TABLE `product_size`
  ADD CONSTRAINT `product_size_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_size_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
