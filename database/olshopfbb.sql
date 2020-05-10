-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Bulan Mei 2020 pada 16.25
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.26

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
(1, 2021, 'NEW ARRIVAL YA GAES', 'on the street lost bro', 'in the stadium Hmmmm ya', '1588951210_model3.svg', NULL, '2020-05-08 08:20:10');

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
(49, 21, 1, NULL, NULL),
(50, 21, 21, NULL, NULL),
(72, 25, 9, NULL, NULL),
(73, 25, 10, NULL, NULL),
(74, 25, 11, NULL, NULL),
(75, 25, 12, NULL, NULL),
(81, 27, 1, NULL, NULL),
(82, 27, 10, NULL, NULL),
(83, 27, 15, NULL, NULL),
(84, 27, 21, NULL, NULL),
(85, 28, 1, NULL, NULL),
(86, 28, 8, NULL, NULL),
(87, 28, 18, NULL, NULL),
(88, 29, 13, NULL, NULL),
(89, 29, 14, NULL, NULL),
(90, 29, 21, NULL, NULL),
(91, 30, 1, NULL, NULL),
(92, 30, 14, NULL, NULL),
(93, 30, 18, NULL, NULL),
(94, 31, 8, NULL, NULL),
(95, 31, 9, NULL, NULL),
(96, 31, 13, NULL, NULL);

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
(1, '1588950411_iklan1.svg', '1588950411_iklan2.svg', NULL, '2020-05-08 08:06:51');

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
  `complete_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` int(11) NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ongkir` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `shipped` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_product`
--

CREATE TABLE `order_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `size` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(21, 'ABCG', 'Super Admin', 'super-admin', '<p>dadfafasdfas</p>', '<p>fsdfsdfsdf</p>', 'https://www.youtube.com/watch?v=Ph-CA_tu5KA', 12000000, 11990000, '[\"avatar.png\",\"avatar2.png\",\"avatar3.png\",\"avatar04.png\",\"avatar5.png\"]', '2020-05-04 10:06:13', '2020-05-07 13:07:15', NULL, 10),
(25, 'QWER', 'Shoes', 'shoes', '<p>asdasdasd</p>', '<p>asdadasd</p>', 'https://www.youtube.com/watch?v=Ph-CA_tu5KA', 120000, 110000, '[\"photo1.png\",\"photo2.png\",\"photo3.jpg\",\"photo4.jpg\",\"user2-160x160.jpg\",\"user3-128x128.jpg\",\"user4-128x128.jpg\",\"user5-128x128.jpg\",\"user6-128x128.jpg\",\"user7-128x128.jpg\",\"user8-128x128.jpg\"]', '2020-05-05 01:33:32', '2020-05-08 12:08:13', NULL, 2),
(27, 'YYYY', 'Coba Discount', 'coba-discount', '<p>sadasdasdasd</p>', '<p>asdasdasdas</p>', 'https://www.youtube.com/watch?v=Ph-CA_tu5KA', 450000, 55, '[\"prod-1.jpg\",\"prod-2.jpg\",\"prod-3.jpg\",\"prod-4.jpg\"]', '2020-05-08 11:53:39', '2020-05-08 12:21:16', NULL, 10),
(28, 'TTTT', 'Clearance Sell', 'clearance-sell', '<p>clearancesells</p>', '<p>clearancesells</p>', 'https://www.youtube.com/watch?v=Ph-CA_tu5KA', 500000, 400000, '[\"photo1.png\",\"photo2.png\",\"photo3.jpg\"]', '2020-05-08 12:07:16', '2020-05-08 12:07:16', NULL, 12),
(29, 'PPPP', 'hjcjgcgc', 'hjcjgcgc', '<p>fdfdfdfd</p>', '<p>fdfdfdfdffd</p>', 'https://www.youtube.com/watch?v=Ph-CA_tu5KA', 800000, NULL, '[\"paypal.png\",\"paypal2.png\",\"visa.png\"]', '2020-05-08 12:18:42', '2020-05-08 12:18:42', NULL, 10),
(30, 'OOOO', 'ajskvdhavsd', 'ajskvdhavsd', '<p>ssdfsfsfdsdf</p>', '<p>fsdfsfsdfsdf</p>', 'https://www.youtube.com/watch?v=Ph-CA_tu5KA', 190000, NULL, '[\"sddf.png\",\"sdfsdf.png\",\"sdfsdsf.png\",\"sjdhsjds.png\"]', '2020-05-08 12:22:50', '2020-05-08 12:22:50', NULL, 10),
(31, 'JJJJ', 'jdbasjdb', 'jdbasjdb', '<p>asdasdasd</p>', '<p>asdasdasd</p>', 'https://www.youtube.com/watch?v=Ph-CA_tu5KA', 180000, 150000, '[\"DSCF9022.JPG\",\"DSCF9023.JPG\",\"DSCF9024.JPG\",\"DSCF9025.JPG\"]', '2020-05-08 23:46:27', '2020-05-08 23:46:27', NULL, 12);

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
(50, 21, 1, NULL, NULL),
(51, 21, 10, NULL, NULL),
(68, 25, 1, NULL, NULL),
(69, 25, 9, NULL, NULL),
(70, 25, 10, NULL, NULL),
(83, 27, 1, NULL, NULL),
(84, 27, 2, NULL, NULL),
(85, 27, 3, NULL, NULL),
(86, 27, 4, NULL, NULL),
(87, 27, 9, NULL, NULL),
(88, 27, 10, NULL, NULL),
(89, 28, 6, NULL, NULL),
(90, 28, 7, NULL, NULL),
(91, 28, 8, NULL, NULL),
(92, 29, 1, NULL, NULL),
(93, 29, 9, NULL, NULL),
(94, 29, 10, NULL, NULL),
(95, 30, 1, NULL, NULL),
(96, 30, 7, NULL, NULL),
(97, 30, 8, NULL, NULL),
(98, 31, 4, NULL, NULL),
(99, 31, 5, NULL, NULL),
(100, 31, 6, NULL, NULL);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

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
  ADD CONSTRAINT `order_product_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

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
