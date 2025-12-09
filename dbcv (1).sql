-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2025 at 03:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcv`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$ytflgCp5EjFgLjgY34f2Cu0JDF9u0ggQ8TUmCy1UMEaq/Jn.PC5R.', '2025-09-18 15:37:45');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `image`, `created_at`) VALUES
(3, 'Bagaimana Kehidupan Manusia di Planet Mars?', '<p data-start=\"171\" data-end=\"603\">Planet Mars sejak lama menjadi objek ketertarikan umat manusia. Dengan warna merah khasnya, Mars sering disebut sebagai &ldquo;planet kembar Bumi&rdquo; karena memiliki beberapa kesamaan, seperti panjang hari yang hampir sama (24 jam 37 menit) dan keberadaan kutub es. Namun, membayangkan manusia hidup di sana bukanlah perkara mudah. Ada banyak tantangan sekaligus peluang yang bisa terjadi jika suatu saat manusia benar-benar menetap di Mars.</p>\r\n<hr data-start=\"605\" data-end=\"608\">\r\n<h2 data-start=\"610\" data-end=\"636\">1. Kondisi Alam di Mars</h2>\r\n<p data-start=\"637\" data-end=\"1022\">Mars adalah planet yang keras dan ekstrem. Suhunya bisa sangat dingin, rata-rata sekitar <strong data-start=\"726\" data-end=\"735\">&ndash;63&deg;C</strong>, jauh lebih rendah dibanding Bumi. Atmosfernya pun tipis, terdiri dari <strong data-start=\"807\" data-end=\"830\">95% karbon dioksida</strong> dengan oksigen yang sangat sedikit, sehingga manusia tidak bisa bernapas tanpa bantuan teknologi. Selain itu, badai debu raksasa yang bisa menutupi seluruh planet juga menjadi ancaman serius.</p>\r\n<hr data-start=\"1024\" data-end=\"1027\">\r\n<h2 data-start=\"1029\" data-end=\"1064\">2. Teknologi Penunjang Kehidupan</h2>\r\n<p data-start=\"1065\" data-end=\"1129\">Agar bisa bertahan hidup, manusia membutuhkan teknologi canggih:</p>\r\n<ul data-start=\"1130\" data-end=\"1638\">\r\n<li data-start=\"1130\" data-end=\"1248\">\r\n<p data-start=\"1132\" data-end=\"1248\"><strong data-start=\"1132\" data-end=\"1152\">Habitat tertutup</strong>: Tempat tinggal kedap udara yang dapat menahan radiasi kosmik dan mempertahankan suhu stabil.</p>\r\n</li>\r\n<li data-start=\"1249\" data-end=\"1390\">\r\n<p data-start=\"1251\" data-end=\"1390\"><strong data-start=\"1251\" data-end=\"1269\">Sistem oksigen</strong>: Oksigen dapat dihasilkan dari air es Mars atau melalui teknologi pemisahan CO₂ (seperti eksperimen MOXIE milik NASA).</p>\r\n</li>\r\n<li data-start=\"1391\" data-end=\"1557\">\r\n<p data-start=\"1393\" data-end=\"1557\"><strong data-start=\"1393\" data-end=\"1403\">Pangan</strong>: Manusia harus membangun rumah kaca (greenhouse) dengan lampu buatan untuk menanam sayuran menggunakan tanah Mars yang telah diproses agar bebas racun.</p>\r\n</li>\r\n<li data-start=\"1558\" data-end=\"1638\">\r\n<p data-start=\"1560\" data-end=\"1638\"><strong data-start=\"1560\" data-end=\"1570\">Energi</strong>: Panel surya dan reaktor nuklir kecil menjadi sumber utama listrik.</p>\r\n</li>\r\n</ul>\r\n<hr data-start=\"1640\" data-end=\"1643\">\r\n<h2 data-start=\"1645\" data-end=\"1672\">3. Kehidupan Sehari-hari</h2>\r\n<p data-start=\"1673\" data-end=\"2144\">Kehidupan di Mars akan berbeda drastis dari Bumi. Manusia akan hidup dalam koloni kecil yang saling bergantung. Aktivitas luar ruangan (disebut <strong data-start=\"1817\" data-end=\"1850\">EVA &ndash; Extravehicular Activity</strong>) hanya bisa dilakukan dengan memakai baju antariksa khusus. Hiburan, pendidikan, hingga interaksi sosial semuanya akan terpusat dalam habitat. Tantangan psikologis terbesar adalah rasa <strong data-start=\"2036\" data-end=\"2065\">kesepian dan keterasingan</strong>, karena jarak Mars ke Bumi sangat jauh (komunikasi bisa terlambat 3&ndash;22 menit).</p>\r\n<hr data-start=\"2146\" data-end=\"2149\">\r\n<h2 data-start=\"2151\" data-end=\"2181\">4. Tantangan Jangka Panjang</h2>\r\n<p data-start=\"2182\" data-end=\"2234\">Selain teknologi, ada masalah kesehatan yang serius:</p>\r\n<ul data-start=\"2235\" data-end=\"2500\">\r\n<li data-start=\"2235\" data-end=\"2291\">\r\n<p data-start=\"2237\" data-end=\"2291\"><strong data-start=\"2237\" data-end=\"2255\">Radiasi kosmik</strong> dapat meningkatkan risiko kanker.</p>\r\n</li>\r\n<li data-start=\"2292\" data-end=\"2406\">\r\n<p data-start=\"2294\" data-end=\"2406\"><strong data-start=\"2294\" data-end=\"2312\">Gravitasi Mars</strong> hanya sepertiga dari Bumi, yang berpotensi melemahkan otot dan tulang dalam jangka panjang.</p>\r\n</li>\r\n<li data-start=\"2407\" data-end=\"2500\">\r\n<p data-start=\"2409\" data-end=\"2500\"><strong data-start=\"2409\" data-end=\"2424\">Kemandirian</strong>: Koloni Mars harus bisa mandiri karena pasokan dari Bumi sangat terbatas.</p>\r\n</li>\r\n</ul>\r\n<hr data-start=\"2502\" data-end=\"2505\">\r\n<h2 data-start=\"2507\" data-end=\"2534\">5. Harapan di Masa Depan</h2>\r\n<p data-start=\"2535\" data-end=\"2785\">Walau penuh tantangan, kehidupan di Mars membuka harapan baru bagi umat manusia. Koloni Mars bisa menjadi &ldquo;cadangan peradaban&rdquo; jika Bumi mengalami bencana besar. Selain itu, eksplorasi Mars dapat memicu inovasi teknologi yang juga bermanfaat di Bumi.</p>\r\n<hr data-start=\"2787\" data-end=\"2790\">\r\n<h3 data-start=\"2792\" data-end=\"2806\">Kesimpulan</h3>\r\n<p data-start=\"2807\" data-end=\"3058\">Kehidupan manusia di Mars bukanlah hal yang mustahil, tetapi juga bukan sesuatu yang mudah. Dengan kombinasi <strong data-start=\"2916\" data-end=\"2970\">ilmu pengetahuan, teknologi, dan kerja sama global</strong>, suatu hari nanti manusia mungkin akan benar-benar menyebut Mars sebagai rumah kedua.</p>', 'uploads/68cc3a82b4eba.jpeg', '2025-09-18 16:59:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
