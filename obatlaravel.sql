-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 06:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obatlaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `qty`, `created_at`, `updated_at`) VALUES
(16, 1, 3, 15, '2023-12-06 21:29:30', '2023-12-06 21:29:30'),
(17, 1, 1, 1, '2023-12-06 21:29:40', '2023-12-06 21:29:40'),
(37, 5, 4, 3, '2024-01-04 01:26:51', '2024-01-04 01:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `navbar_status` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `navbar_status`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(5, 'ARTOIS', 'artois', 'Kumpulan Obat Pabrik Artois', '1701748905.png', 'Artois', 'Kumpulan Obat Pabrik Artois', 'Artois', 0, 0, 2, '2023-10-25 04:28:48', '2023-12-04 21:01:45'),
(11, 'ACTAVIS', 'actavis', 'Kumpulan Obat Pabrik Actavis', '1701338581.png', 'Actavis', 'Kumpulan Obat Pabrik Actavis', 'Actavis', 0, 0, 1, '2023-11-30 03:03:01', '2023-11-30 03:03:01'),
(12, 'AKSAMALA', 'aksamala', 'Kumpulan Obat Pabrik Aksamala', '1701338822.png', 'AKSAMALA', 'Kumpulan Obat Pabrik Aksamala', 'AKSAMALA', 0, 0, 1, '2023-11-30 03:07:02', '2023-11-30 05:26:20'),
(13, 'BAYER', 'bayer', 'Kumpulan Obat pabrik Bayer', '1701339014.png', 'Bayer', 'Kumpulan Obat pabrik Bayer', 'Bayer', 0, 0, 1, '2023-11-30 03:10:14', '2023-11-30 03:10:14'),
(14, 'BDF', 'bdf', 'Kumpulan Obat pabrik BDF', '1701339046.png', 'BDF', 'Kumpulan Obat pabrik BDF', 'BDF', 0, 0, 1, '2023-11-30 03:10:46', '2023-11-30 03:10:46'),
(15, 'BERLICO', 'berlico', 'Kumpulan Obat pabrik BERLICO', '1701339081.png', 'BERLICO', 'Kumpulan Obat pabrik BERLICO', 'BERLICO', 0, 0, 1, '2023-11-30 03:11:21', '2023-11-30 03:11:21'),
(16, 'BERNOFARM', 'bernofarm', 'Kumpulan Obat pabrik Bernofarm', '1701339277.png', 'Bernofarm', 'Kumpulan Obat pabrik Bernofarm', 'Bernofarm', 0, 0, 1, '2023-11-30 03:14:37', '2023-11-30 03:14:37'),
(17, 'BETHA FARMA', 'betha-farma', 'Kumpulan Obat pabrik Betha Farma', '1701339344.png', 'BETHA FARMA', 'Kumpulan Obat pabrik Betha Farma', 'Betha farma', 0, 0, 1, '2023-11-30 03:15:44', '2023-11-30 03:15:44'),
(18, 'BIMA MITRA', 'bima-mitra', 'Kumpulan Obat pabrik Bima Mitra', '1701339410.png', 'Bima Mitra', 'Kumpulan Obat pabrik Bima Mitra', 'Bimamitra', 0, 0, 1, '2023-11-30 03:16:50', '2023-11-30 03:16:50'),
(19, 'BINTANG TJH', 'bintangtjh', 'Kumpulan Obat pabrik Bintang Tjh', '1701339463.png', 'Bintang Tjh', 'Kumpulan Obat pabrik Bintang Tjh', 'Bintang Tjh', 0, 0, 1, '2023-11-30 03:17:43', '2023-11-30 03:17:43'),
(20, 'BUFA', 'bufa', 'BUFA', '1701339649.png', 'BUFA', 'BUFA', 'BUFA', 0, 0, 1, '2023-11-30 03:20:49', '2023-11-30 03:20:49'),
(21, 'CENDO', 'cendo', 'CENDO', '1701339664.png', 'CENDO', 'CENDO', 'CENDO', 0, 0, 1, '2023-11-30 03:21:04', '2023-11-30 03:21:04'),
(22, 'CIUBROS', 'ciubros', 'CIUBROS', '1701339677.png', 'CIUBROS', 'CIUBROS', 'CIUBROS', 0, 0, 1, '2023-11-30 03:21:17', '2023-11-30 03:21:17'),
(23, 'COMBIPHAR', 'combiphar', 'COMBIPHAR', '1701339692.png', 'COMBIPHAR', 'COMBIPHAR', 'COMBIPHAR', 0, 0, 1, '2023-11-30 03:21:32', '2023-11-30 03:21:32'),
(24, 'CORONET CROWN', 'coronet-crown', 'CORONET CROWN', '1701339707.png', 'CORONET CROWN', 'CORONET CROWN', 'CORONET CROWN', 0, 0, 1, '2023-11-30 03:21:47', '2023-11-30 03:21:47'),
(25, 'DAMI SARIWARNA', 'dami-sariwarna', 'DAMI SARIWARNA', '1701339774.png', 'DAMI SARIWARNA', 'DAMI SARIWARNA', 'DAMI SARIWARNA', 0, 0, 1, '2023-11-30 03:22:08', '2023-11-30 03:22:54'),
(26, 'DANPAC PHARMA', 'danpac-pharma', 'DANPAC PHARMA', '1701339758.png', 'DANPAC PHARMA', 'DANPAC PHARMA', 'DANPAC PHARMA', 0, 0, 1, '2023-11-30 03:22:08', '2023-11-30 03:22:38'),
(27, 'DEXA MEDICA', 'dexa-medica', 'DEXA MEDICA', '1701339798.png', 'DEXA MEDICA', 'DEXA MEDICA', 'DEXA MEDICA', 0, 0, 1, '2023-11-30 03:23:18', '2023-11-30 03:23:18'),
(28, 'DKT', 'dkt', 'DKT', '1701339811.png', 'DKT', 'DKT', 'DKT', 0, 0, 1, '2023-11-30 03:23:31', '2023-11-30 03:23:31'),
(29, 'DRAGON', 'dragon', 'DRAGON', '1701339825.png', 'DRAGON', 'DRAGON', 'DRAGON', 0, 0, 1, '2023-11-30 03:23:45', '2023-11-30 03:23:45'),
(30, 'EAGLE', 'eagle', 'EAGLE', '1701339835.png', 'EAGLE', 'EAGLE', 'EAGLE', 0, 0, 1, '2023-11-30 03:23:55', '2023-11-30 03:23:55'),
(31, 'ERELA', 'erela', 'ERELA', '1701339848.png', 'ERELA', 'ERELA', 'ERELA', 0, 0, 1, '2023-11-30 03:24:08', '2023-11-30 03:24:08'),
(32, 'ERPHA', 'erpha', 'ERPHA', '1701339883.png', 'ERPHA', 'ERPHA', 'ERPHA', 0, 0, 1, '2023-11-30 03:24:43', '2023-11-30 03:24:43'),
(33, 'ERRITA PHARMA', 'errita-pharma', 'ERRITA PHARMA', '1701339975.png', 'ERRITA PHARMA', 'ERRITA PHARMA', 'ERRITA PHARMA', 0, 0, 1, '2023-11-30 03:26:16', '2023-11-30 03:26:16'),
(34, 'ETERCON PHARMA', 'etercon-pharma', 'ETERCON PHARMA', '1701340026.png', 'ETERCON PHARMA', 'ETERCON PHARMA', 'ETERCON PHARMA', 0, 0, 1, '2023-11-30 03:27:06', '2023-11-30 03:27:06'),
(35, 'ETICA SARI PRATAMA', 'etica-sari-pratama', 'ETICA SARI PRATAMA', '1701340041.png', 'ETICA SARI PRATAMA', 'ETICA SARI PRATAMA', 'ETICA SARI PRATAMA', 0, 0, 1, '2023-11-30 03:27:21', '2023-11-30 03:27:21'),
(36, 'FAHRENHEIT', 'fahrenheit', 'FAHRENHEIT', '1701340056.png', 'FAHRENHEIT', 'FAHRENHEIT', 'FAHRENHEIT', 0, 0, 1, '2023-11-30 03:27:36', '2023-11-30 03:27:36'),
(37, 'FIRST MEDIPHARMA', 'first-medipharma', 'FIRST MEDIPHARMA', '1701340081.png', 'FIRST MEDIPHARMA', 'FIRST MEDIPHARMA', 'FIRST MEDIPHARMA', 0, 0, 1, '2023-11-30 03:28:01', '2023-11-30 03:28:01'),
(38, 'FITTO NATURA MEDICA', 'fitto-natura-medica', 'FITTO NATURA MEDICA', '1701340101.png', 'FITTO NATURA MEDICA', 'FITTO NATURA MEDICA', 'FITTO NATURA MEDICA', 0, 0, 1, '2023-11-30 03:28:21', '2023-11-30 03:28:21'),
(39, 'GALENIUM', 'galenium', 'GALENIUM', '1701340119.png', 'GALENIUM', 'GALENIUM', 'GALENIUM', 0, 0, 1, '2023-11-30 03:28:39', '2023-11-30 03:28:39'),
(40, 'GEDEON RICHTER', 'gedeon-richter', 'GEDEON RICHTER', '1701340152.png', 'GEDEON RICHTER', 'GEDEON RICHTER', 'GEDEON RICHTER', 0, 0, 1, '2023-11-30 03:29:12', '2023-11-30 03:29:12'),
(41, 'GLOBAL MULTI PHARMALAB', 'global-multi-pharmalab', 'GLOBAL MULTI PHARMALAB', '1701340171.png', 'GLOBAL MULTI PHARMALAB', 'GLOBAL MULTI PHARMALAB', 'GLOBAL MULTI PHARMALAB', 0, 0, 1, '2023-11-30 03:29:31', '2023-11-30 03:29:31'),
(42, 'GRAHA FARMA', 'graha-farma', 'GRAHA FARMA', '1701340187.png', 'GRAHA FARMA', 'GRAHA FARMA', 'GRAHA FARMA', 0, 0, 1, '2023-11-30 03:29:47', '2023-11-30 03:29:47'),
(43, 'HARSEN', 'harsen', 'HARSEN', '1701340237.png', 'HARSEN', 'HARSEN', 'HARSEN', 0, 0, 1, '2023-11-30 03:30:37', '2023-11-30 03:30:37'),
(44, 'HENSON FARMA', 'henson-farma', 'HENSON FARMA', '1701340261.png', 'HENSON FARMA', 'HENSON FARMA', 'HENSON FARMA', 0, 0, 1, '2023-11-30 03:31:01', '2023-11-30 03:31:01'),
(45, 'HEXPARM JAYA', 'hexparm-jaya', 'HEXPARM JAYA', '1701340276.png', 'HEXPARM JAYA', 'HEXPARM JAYA', 'HEXPARM JAYA', 0, 0, 1, '2023-11-30 03:31:16', '2023-11-30 03:31:16'),
(46, 'HISAMITSU', 'hisamitsu', 'HISAMITSU', '1701340291.png', 'HISAMITSU', 'HISAMITSU', 'HISAMITSU', 0, 0, 1, '2023-11-30 03:31:31', '2023-11-30 03:31:31'),
(47, 'HOLISTICARE', 'holisticare', 'HOLISTICARE', '1701340309.png', 'HOLISTICARE', 'HOLISTICARE', 'HOLISTICARE', 0, 0, 1, '2023-11-30 03:31:49', '2023-11-30 03:31:49'),
(48, 'HUFA', 'hufa', 'HUFA', '1701340325.png', 'HUFA', 'HUFA', 'HUFA', 0, 0, 1, '2023-11-30 03:32:05', '2023-11-30 03:32:05'),
(49, 'IFARS', 'ifars', 'IFARS', '1701340339.png', 'IFARS', 'IFARS', 'IFARS', 0, 0, 1, '2023-11-30 03:32:19', '2023-11-30 03:32:19'),
(50, 'IKA PHARMACEUTICAL', 'ika-pharmaceutical', 'IKA PHARMACEUTICAL', '1701340356.png', 'IKA PHARMACEUTICAL', 'IKA PHARMACEUTICAL', 'IKA PHARMACEUTICAL', 0, 0, 1, '2023-11-30 03:32:36', '2023-11-30 03:32:36'),
(51, 'IMFARMIND', 'imfarmind', 'IMFARMIND', '1701340369.png', 'IMFARMIND', 'IMFARMIND', 'IMFARMIND', 0, 0, 1, '2023-11-30 03:32:49', '2023-11-30 03:32:49'),
(52, 'INDOFARMA', 'indofarma', 'INDOFARMA', '1701340385.png', 'INDOFARMA', 'INDOFARMA', 'INDOFARMA', 0, 0, 1, '2023-11-30 03:33:05', '2023-11-30 03:33:05'),
(53, 'INTERBAT', 'interbat', 'INTERBAT', '1701340399.png', 'INTERBAT', 'INTERBAT', 'INTERBAT', 0, 0, 1, '2023-11-30 03:33:19', '2023-11-30 03:33:19'),
(54, 'INTIJAYA META RATNA', 'intijaya-meta-ratna', 'INTIJAYA META RATNA', '1701340416.png', 'INTIJAYA META RATNA', 'INTIJAYA META RATNA', 'INTIJAYA META RATNA', 0, 0, 1, '2023-11-30 03:33:36', '2023-11-30 03:33:36'),
(55, 'ITRASAL', 'itrasal', 'ITRASAL', '1701340445.png', 'ITRASAL', 'ITRASAL', 'ITRASAL', 0, 0, 1, '2023-11-30 03:34:05', '2023-11-30 03:34:05'),
(56, 'JANSSEN', 'janssen', 'JANSSEN', '1701340459.png', 'JANSSEN', 'JANSSEN', 'JANSSEN', 0, 0, 1, '2023-11-30 03:34:19', '2023-11-30 03:34:19'),
(57, 'JOHNSON', 'johnson', 'JOHNSON', '1701340473.png', 'JOHNSON', 'JOHNSON', 'JOHNSON', 0, 0, 1, '2023-11-30 03:34:33', '2023-11-30 03:34:33'),
(58, 'KALBE FARMA', 'kalbe-farma', 'KALBE FARMA', '1701340489.png', 'KALBE FARMA', 'KALBE FARMA', 'KALBE FARMA', 0, 0, 1, '2023-11-30 03:34:49', '2023-11-30 03:34:49'),
(59, 'KIMIA FARMA', 'kimia-farma', 'KIMIA FARMA', '1701340503.png', 'KIMIA FARMA', 'KIMIA FARMA', 'KIMIA FARMA', 0, 0, 1, '2023-11-30 03:35:03', '2023-11-30 03:35:03'),
(60, 'KONIMEX', 'konimex', 'KONIMEX', '1701340517.png', 'KONIMEX', 'KONIMEX', 'KONIMEX', 0, 0, 1, '2023-11-30 03:35:17', '2023-11-30 03:35:17'),
(61, 'KWEI FENG', 'kwei-feng', 'KWEI FENG', '1701340530.png', 'KWEI FENG', 'KWEI FENG', 'KWEI FENG', 0, 0, 1, '2023-11-30 03:35:30', '2023-11-30 03:35:30'),
(62, 'LANDSON', 'landson', 'LANDSON', '1701340550.png', 'LANDSON', 'LANDSON', 'LANDSON', 0, 0, 1, '2023-11-30 03:35:50', '2023-11-30 03:35:50'),
(63, 'MECCAYA', 'meccaya', 'MECCAYA', '1701340563.png', 'MECCAYA', 'MECCAYA', 'MECCAYA', 0, 0, 1, '2023-11-30 03:36:03', '2023-11-30 03:36:03'),
(64, 'MEDIFARMA', 'medifarma', 'MEDIFARMA', '1701340578.png', 'MEDIFARMA', 'MEDIFARMA', 'MEDIFARMA', 0, 0, 1, '2023-11-30 03:36:18', '2023-11-30 03:36:18'),
(65, 'MEDIKON', 'medikon', 'MEDIKON', '1701340595.png', 'MEDIKON', 'MEDIKON', 'MEDIKON', 0, 0, 1, '2023-11-30 03:36:35', '2023-11-30 03:36:35'),
(66, 'MEGA ESA FARMA', 'mega-esa-farma', 'MEGA ESA FARMA', '1701340612.png', 'MEGA ESA FARMA', 'MEGA ESA FARMA', 'MEGA ESA FARMA', 0, 0, 1, '2023-11-30 03:36:52', '2023-11-30 03:36:52'),
(67, 'MEIJI', 'meiji', 'MEIJI', '1701340628.png', 'MEIJI', 'MEIJI', 'MEIJI', 0, 0, 1, '2023-11-30 03:37:08', '2023-11-30 03:37:08'),
(68, 'MEPROFARM', 'meprofarm', 'MEPROFARM', '1701340644.png', 'MEPROFARM', 'MEPROFARM', 'MEPROFARM', 0, 0, 1, '2023-11-30 03:37:24', '2023-11-30 03:37:24'),
(69, 'MERCK', 'merck', 'MERCK', '1701340656.png', 'MERCK', 'MERCK', 'MERCK', 0, 0, 1, '2023-11-30 03:37:36', '2023-11-30 03:37:36'),
(70, 'MERSI', 'mersi', 'MERSI', '1701340672.png', 'MERSI', 'MERSI', 'MERSI', 0, 0, 1, '2023-11-30 03:37:52', '2023-11-30 03:37:52'),
(71, 'METISKA', 'metiska', 'METISKA', '1701340690.png', 'METISKA', 'METISKA', 'METISKA', 0, 0, 1, '2023-11-30 03:38:10', '2023-11-30 03:38:10'),
(72, 'MOLEX AYUS', 'molex-ayus', 'MOLEX AYUS', '1701340708.png', 'MOLEX AYUS', 'MOLEX AYUS', 'MOLEX AYUS', 0, 0, 1, '2023-11-30 03:38:28', '2023-11-30 03:38:28'),
(73, 'MUGI LABORATORIES', 'mugi-laboratories', 'MUGI LABORATORIES', '1701340722.png', 'MUGI LABORATORIES', 'MUGI LABORATORIES', 'MUGI LABORATORIES', 0, 0, 1, '2023-11-30 03:38:42', '2023-11-30 03:38:42'),
(74, 'MUTIARA MUKTI FARMA', 'mutiara-mukti-farma', 'MUTIARA MUKTI FARMA', '1701340736.png', 'MUTIARA MUKTI FARMA', 'MUTIARA MUKTI FARMA', 'MUTIARA MUKTI FARMA', 0, 0, 1, '2023-11-30 03:38:56', '2023-11-30 03:38:56'),
(75, 'NELLCO', 'nellco', 'NELLCO', '1701340747.png', 'NELLCO', 'NELLCO', 'NELLCO', 0, 0, 1, '2023-11-30 03:39:07', '2023-11-30 03:39:07'),
(76, 'NOVAPHARIN', 'novapharin', 'NOVAPHARIN', '1701340762.png', 'NOVAPHARIN', 'NOVAPHARIN', 'NOVAPHARIN', 0, 0, 1, '2023-11-30 03:39:22', '2023-11-30 03:39:22'),
(77, 'NOVARTIS', 'novartis', 'NOVARTIS', '1701340775.png', 'NOVARTIS', 'NOVARTIS', 'NOVARTIS', 0, 0, 1, '2023-11-30 03:39:35', '2023-11-30 03:39:35'),
(78, 'NUFARINDO LABORATORIES', 'nufarindo-laboratories', 'NUFARINDO LABORATORIES', '1701340801.png', 'NUFARINDO LABORATORIES', 'NUFARINDO LABORATORIES', 'NUFARINDO LABORATORIES', 0, 0, 1, '2023-11-30 03:40:01', '2023-11-30 03:40:01'),
(79, 'NULAB', 'nulab', 'NULAB', '1701340818.png', 'NULAB', 'NULAB', 'NULAB', 0, 0, 1, '2023-11-30 03:40:18', '2023-11-30 03:40:18'),
(80, 'PFIZER', 'pfizer', 'PFIZER', '1701340830.png', 'PFIZER', 'PFIZER', 'PFIZER', 0, 0, 1, '2023-11-30 03:40:30', '2023-11-30 03:40:30'),
(81, 'PHAPROS', 'phapros', 'PHAPROS', '1701340846.png', 'PHAPROS', 'PHAPROS', 'PHAPROS', 0, 0, 1, '2023-11-30 03:40:46', '2023-11-30 03:40:46'),
(82, 'PHAROS INDONESIA', 'pharos-indonesia', 'PHAROS INDONESIA', '1701340859.png', 'PHAROS INDONESIA', 'PHAROS INDONESIA', 'PHAROS INDONESIA', 0, 0, 1, '2023-11-30 03:40:59', '2023-11-30 03:40:59'),
(83, 'PHYTO', 'phyto', 'PHYTO', '1701340875.png', 'PHYTO', 'PHYTO', 'PHYTO', 0, 0, 1, '2023-11-30 03:41:15', '2023-11-30 03:41:15'),
(84, 'PIM', 'pim', 'PIM', '1701340890.png', 'PIM', 'PIM', 'PIM', 0, 0, 1, '2023-11-30 03:41:30', '2023-11-30 03:41:30'),
(85, 'PNG', 'png', 'PNG', '1701340902.png', 'PNG', 'PNG', 'PNG', 0, 0, 1, '2023-11-30 03:41:42', '2023-11-30 03:41:42'),
(86, 'PRAFA', 'prafa', 'PRAFA', '1701340913.png', 'PRAFA', 'PRAFA', 'PRAFA', 0, 0, 1, '2023-11-30 03:41:53', '2023-11-30 03:41:53'),
(87, 'PYRIDAM', 'pyridam', 'PYRIDAM', '1701340928.png', 'PYRIDAM', 'PYRIDAM', 'PYRIDAM', 0, 0, 1, '2023-11-30 03:42:08', '2023-11-30 03:42:08'),
(88, 'QUANTUM', 'quantum', 'QUANTUM', '1701340954.png', 'QUANTUM', 'QUANTUM', 'QUANTUM', 0, 0, 1, '2023-11-30 03:42:34', '2023-11-30 03:42:34'),
(89, 'RAMA EMERALD', 'rama-emerald', 'RAMA EMERALD', '1701340969.png', 'RAMA EMERALD', 'RAMA EMERALD', 'RAMA EMERALD', 0, 0, 1, '2023-11-30 03:42:49', '2023-11-30 03:42:49'),
(90, 'RECKITT BENCKISSER', 'reckitt-benckisser', 'RECKITT BENCKISSER', '1701340980.png', 'RECKITT BENCKISSER', 'RECKITT BENCKISSER', 'RECKITT BENCKISSER', 0, 0, 1, '2023-11-30 03:43:00', '2023-11-30 03:43:00'),
(91, 'ROHTO LAB', 'rohto-lab', 'ROHTO LAB', '1701340990.png', 'ROHTO LAB', 'ROHTO LAB', 'ROHTO LAB', 0, 0, 1, '2023-11-30 03:43:10', '2023-11-30 03:43:10'),
(92, 'SAKA FARMA', 'saka-farma', 'SAKA FARMA', '1701341001.png', 'SAKA FARMA', 'SAKA FARMA', 'SAKA FARMA', 0, 0, 1, '2023-11-30 03:43:21', '2023-11-30 03:43:21'),
(93, 'SAMCO FARMA', 'samco-farma', 'SAMCO FARMA', '1701341012.png', 'SAMCO FARMA', 'SAMCO FARMA', 'SAMCO FARMA', 0, 0, 1, '2023-11-30 03:43:32', '2023-11-30 03:43:32'),
(94, 'SAMPARINDO', 'samparindo', 'SAMPARINDO', '1701341023.png', 'SAMPARINDO', 'SAMPARINDO', 'SAMPARINDO', 0, 0, 1, '2023-11-30 03:43:43', '2023-11-30 03:43:43'),
(95, 'SANO GRATIA FARMA', 'sano-gratia-farma', 'SANO GRATIA FARMA', '1701341034.png', 'SANO GRATIA FARMA', 'SANO GRATIA FARMA', 'SANO GRATIA FARMA', 0, 0, 1, '2023-11-30 03:43:54', '2023-11-30 03:43:54'),
(96, 'SARAS SUBUR ABADI', 'saras-subur-abadi', 'SARAS SUBUR ABADI', '1701341047.png', 'SARAS SUBUR ABADI', 'SARAS SUBUR ABADI', 'SARAS SUBUR ABADI', 0, 0, 1, '2023-11-30 03:44:07', '2023-11-30 03:44:07'),
(97, 'SARI ENESIS INDAH', 'sari-enesis-indah', 'SARI ENESIS INDAH', '1701341059.png', 'SARI ENESIS INDAH', 'SARI ENESIS INDAH', 'SARI ENESIS INDAH', 0, 0, 1, '2023-11-30 03:44:19', '2023-11-30 03:44:19'),
(98, 'SIDO MUNCUL', 'sido-muncul', 'SIDO MUNCUL', '1701341070.png', 'SIDO MUNCUL', 'SIDO MUNCUL', 'SIDO MUNCUL', 0, 0, 1, '2023-11-30 03:44:30', '2023-11-30 03:44:30'),
(99, 'SOHO', 'soho', 'SOHO', '1701341082.png', 'SOHO', 'SOHO', 'SOHO', 0, 0, 1, '2023-11-30 03:44:42', '2023-11-30 03:44:42'),
(100, 'SOLAS', 'solas', 'SOLAS', '1701341093.png', 'SOLAS', 'SOLAS', 'SOLAS', 0, 0, 1, '2023-11-30 03:44:53', '2023-11-30 03:44:53'),
(101, 'SQUIBB', 'squibb', 'SQUIBB', '1701341105.png', 'SQUIBB', 'SQUIBB', 'SQUIBB', 0, 0, 1, '2023-11-30 03:45:05', '2023-11-30 03:45:05'),
(102, 'STERLING', 'sterling', 'STERLING', '1701341117.png', 'STERLING', 'STERLING', 'STERLING', 0, 0, 1, '2023-11-30 03:45:17', '2023-11-30 03:45:17'),
(103, 'SURYA DERMATO', 'surya-dermato', 'SURYA DERMATO', '1701341130.png', 'SURYA DERMATO', 'SURYA DERMATO', 'SURYA DERMATO', 0, 0, 1, '2023-11-30 03:45:30', '2023-11-30 03:45:30'),
(104, 'TAWON JAYA MAKASAR', 'tawon-jaya-makasar', 'TAWON JAYA MAKASAR', '1701341141.png', 'TAWON JAYA MAKASAR', 'TAWON JAYA MAKASAR', 'TAWON JAYA MAKASAR', 0, 0, 1, '2023-11-30 03:45:41', '2023-11-30 03:45:41'),
(105, 'TEGUHSINDO', 'teguhsindo', 'TEGUHSINDO', '1701341153.png', 'TEGUHSINDO', 'TEGUHSINDO', 'TEGUHSINDO', 0, 0, 1, '2023-11-30 03:45:53', '2023-11-30 03:45:53'),
(106, 'TRIMAN', 'triman', 'TRIMAN', '1701341164.png', 'TRIMAN', 'TRIMAN', 'TRIMAN', 0, 0, 1, '2023-11-30 03:46:04', '2023-11-30 03:46:04'),
(107, 'TRITUNGGAL CIPTA', 'tritunggal-cipta', 'TRITUNGGAL CIPTA', '1701341176.png', 'TRITUNGGAL CIPTA', 'TRITUNGGAL CIPTA', 'TRITUNGGAL CIPTA', 0, 0, 1, '2023-11-30 03:46:16', '2023-11-30 03:46:16'),
(108, 'TRIYASA NAGAMAS FARMA', 'triyasa-nagamas-farma', 'TRIYASA NAGAMAS FARMA', '1701748993.png', 'TRIYASA NAGAMAS FARMA', 'TRIYASA NAGAMAS FARMA', 'TRIYASA NAGAMAS FARMA', 0, 0, 2, '2023-11-30 03:46:37', '2023-12-04 21:03:13'),
(109, 'TROPICA MAS', 'tropica-mas', 'TROPICA MAS', '1701341214.png', 'TROPICA MAS', 'TROPICA MAS', 'TROPICA MAS', 0, 0, 1, '2023-11-30 03:46:54', '2023-11-30 03:46:54'),
(110, 'TUNGGAL', 'tunggal', 'TUNGGAL', '1701341228.png', 'TUNGGAL', 'TUNGGAL', 'TUNGGAL', 0, 0, 1, '2023-11-30 03:47:08', '2023-11-30 03:47:08'),
(111, 'ULTRA SAKTI', 'ultra-sakti', 'ULTRA SAKTI', '1701341245.png', 'ULTRA SAKTI', 'ULTRA SAKTI', 'ULTRA SAKTI', 0, 0, 1, '2023-11-30 03:47:25', '2023-11-30 03:47:25'),
(112, 'UNIVERSAL', 'universal', 'UNIVERSAL', '1701341260.png', 'UNIVERSAL', 'UNIVERSAL', 'UNIVERSAL', 0, 0, 1, '2023-11-30 03:47:40', '2023-11-30 03:47:40'),
(113, 'USFI', 'usfi', 'USFI', '1701341272.png', 'USFI', 'USFI', 'USFI', 0, 0, 1, '2023-11-30 03:47:52', '2023-11-30 03:47:52'),
(114, 'WELL-COME', 'well-come', 'WELL-COME', '1701341283.png', 'WELL-COME', 'WELL-COME', 'WELL-COME', 0, 0, 1, '2023-11-30 03:48:03', '2023-11-30 03:48:03'),
(115, 'YAHI UTAMA', 'yahi-utama', 'YAHI UTAMA', '1701341294.png', 'YAHI UTAMA', 'YAHI UTAMA', 'YAHI UTAMA', 0, 0, 1, '2023-11-30 03:48:14', '2023-11-30 03:48:14'),
(116, 'YARINDO', 'yarindo', 'YARINDO', '1701341307.png', 'YARINDO', 'YARINDO', 'YARINDO', 0, 0, 1, '2023-11-30 03:48:27', '2023-11-30 03:48:27'),
(117, 'YEKATRIA', 'yekatria', 'YEKATRIA', '1701341333.png', 'YEKATRIA', 'YEKATRIA', 'YEKATRIA', 0, 0, 1, '2023-11-30 03:48:53', '2023-11-30 03:48:53'),
(118, 'ZENITH', 'zenith', 'ZENITH', '1701341345.png', 'ZENITH', 'ZENITH', 'ZENITH', 0, 0, 1, '2023-11-30 03:49:05', '2023-11-30 03:49:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_25_062634_add_role_as_to_user_table', 2),
(6, '2023_10_25_064835_create_categories_table', 3),
(9, '2023_10_25_082037_create_posts_table', 4),
(10, '2023_12_07_015850_create_carts_table', 5),
(11, '2023_12_12_095647_create_orders_table', 6),
(12, '2023_12_12_100015_create_order_items_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namalengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodepos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tracking_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `namalengkap`, `email`, `phone`, `alamat`, `provinsi`, `kota`, `kecamatan`, `kodepos`, `total_price`, `status`, `message`, `tracking_no`, `created_at`, `updated_at`) VALUES
(9, '2', 'Admin Abi', 'admin@example.com', '9539593', 'Admin Alamat 2', 'Jawa', 'Semagarang', 'JawaTeng', '5555', 7484, 1, NULL, 'ORDER-9454', '2023-12-17 19:15:12', '2023-12-17 19:36:55'),
(10, '2', 'Admin Abi', 'admin@example.com', '9539593', 'Admin Alamat 2', 'Jawa', 'Semagarang', 'JawaTeng', '5555', 303030, 1, NULL, 'ORDER-2927', '2023-12-17 19:16:04', '2024-01-04 01:29:44'),
(11, '2', 'Admin Abi', 'admin@example.com', '9539593', 'Admin Alamat 2', 'Jawa', 'Semagarang', 'JawaTeng', '5555', 7484, 0, NULL, 'ORDER-1520', '2023-12-17 19:20:36', '2023-12-17 19:20:36'),
(12, '2', 'Admin Abi', 'admin@example.com', '9539593', 'Admin Alamat 2', 'Jawa', 'Semagarang', 'JawaTeng', '5555', 46298, 1, NULL, 'ORDER-9566', '2023-12-17 19:36:34', '2023-12-17 19:37:02'),
(13, '4', 'Harold Naturaliste', 'register@gmail.com', '08429133411', 'Tanah Marina Mas', 'Jawa Selatan', 'Semarwrong', 'Tawangsarang', '4994', 484576, 1, NULL, 'ORDER-1853', '2023-12-26 18:19:09', '2023-12-26 18:23:43'),
(14, '5', 'evan', 'asdf@yahoo.com', '08429133411', 'Tanah Marina Mas', 'jawa tengah', 'semarang', 'gajah mungkur', '50123', 814852, 0, NULL, 'ORDER-2738', '2024-01-04 01:22:53', '2024-01-04 01:22:53'),
(15, '5', 'evan', 'asdf@yahoo.com', '08429133411', 'Tanah Marina Mas', 'jawa tengah', 'semarang', 'gajah mungkur', '50123', 484576, 0, NULL, 'ORDER-1197', '2024-01-04 01:24:46', '2024-01-04 01:24:46'),
(16, '6', 'Harold Naturaliste', 'ariel@gmail.com', '08429133411', 'Tanah Marina Mas', 'Jawa Selatan', 'Semarwrong', 'Tawangsarang', '4994', 432232, 1, NULL, 'ORDER-3409', '2024-01-24 19:52:34', '2024-01-24 19:53:45');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `qty`, `harga`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '5', '303030', '2023-12-12 03:28:04', '2023-12-12 03:28:04'),
(2, '1', '4', '1', '19425', '2023-12-12 03:28:04', '2023-12-12 03:28:04'),
(3, '1', '4', '6', '19425', '2023-12-12 03:28:04', '2023-12-12 03:28:04'),
(4, '2', '1', '5', '303030', '2023-12-12 03:29:57', '2023-12-12 03:29:57'),
(5, '2', '4', '1', '19425', '2023-12-12 03:29:57', '2023-12-12 03:29:57'),
(6, '2', '4', '6', '19425', '2023-12-12 03:29:57', '2023-12-12 03:29:57'),
(7, '3', '2', '1', '27246', '2023-12-12 04:27:50', '2023-12-12 04:27:50'),
(8, '3', '8', '1', '263672', '2023-12-12 04:27:50', '2023-12-12 04:27:50'),
(9, '4', '2', '1', '27246', '2023-12-12 05:11:05', '2023-12-12 05:11:05'),
(10, '5', '1', '5', '303030', '2023-12-12 22:12:19', '2023-12-12 22:12:19'),
(11, '6', '1', '1', '303030', '2023-12-17 18:52:44', '2023-12-17 18:52:44'),
(12, '9', '3', '12', '7484', '2023-12-17 19:15:12', '2023-12-17 19:15:12'),
(13, '10', '1', '15', '303030', '2023-12-17 19:16:04', '2023-12-17 19:16:04'),
(14, '11', '3', '14', '7484', '2023-12-17 19:20:36', '2023-12-17 19:20:36'),
(15, '12', '11', '4', '46298', '2023-12-17 19:36:34', '2023-12-17 19:36:34'),
(16, '13', '7', '4', '484576', '2023-12-26 18:19:09', '2023-12-26 18:19:09'),
(17, '14', '1', '1', '303030', '2024-01-04 01:22:53', '2024-01-04 01:22:53'),
(18, '14', '2', '1', '27246', '2024-01-04 01:22:53', '2024-01-04 01:22:53'),
(19, '14', '7', '4', '484576', '2024-01-04 01:22:53', '2024-01-04 01:22:53'),
(20, '15', '7', '4', '484576', '2024-01-04 01:24:46', '2024-01-04 01:24:46'),
(21, '16', '13', '1', '168560', '2024-01-24 19:52:34', '2024-01-24 19:52:34'),
(22, '16', '8', '3', '263672', '2024-01-24 19:52:34', '2024-01-24 19:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `name`, `slug`, `description`, `kondisi`, `harga`, `satuan`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 11, 'DUMOCYCLINE 250 MG 500 - BESAR', 'dumocycline-250-mg-500-besar', '250 MG 500 - BESAR', '5', 303030, 'BOX', 'ACTAVIS DUMOCYCLINE', 'ACTAVIS DUMOCYCLINE', 'ACTAVIS DUMOCYCLINE', 0, 1, '2023-11-30 05:15:01', '2023-11-30 05:21:45'),
(2, 12, 'VITABUMIN 60 ML', 'vitabumin-60-ml', '60 ML', '2,5\r\n5 FLS : 4%', 27246, 'FLS', 'AKSAMALA VITABUMIN 60 ML', 'AKSAMALA VITABUMIN 60 ML', 'AKSAMALA VITABUMIN 60 ML', 0, 1, '2023-11-30 05:24:56', '2023-11-30 05:24:56'),
(3, 5, 'BALPIRIK WANGI ROSE 20 GR', 'balpirik-wangi-rose-20-gr', '20 GR', '0', 7484, 'POT', 'BALPIRIK WANGI ROSE 20 GR', 'BALPIRIK WANGI ROSE 20 GR', 'BALPIRIK WANGI ROSE 20 GR', 0, 1, '2023-11-30 05:34:30', '2023-11-30 05:34:30'),
(4, 5, 'BETOMINPLEX TAB 100\'S', 'betominplex-tab-100s', '100\'S', '0	\r\n1TOPLES : 2%', 19425, 'PAX', 'BETOMINPLEX TAB 100\'S', 'BETOMINPLEX TAB 100\'S', 'BETOMINPLEX TAB 100\'S', 0, 1, '2023-11-30 05:35:06', '2023-11-30 05:35:06'),
(6, 13, 'BAYCUTEN N CRM 5 GR', 'baycuten-n-crm-5-gr', '5 GR', '3', 62049, 'TUB', 'BAYCUTEN N CRM 5 GR', 'BAYCUTEN N CRM 5 GR', 'BAYCUTEN N CRM 5 GR', 0, 2, '2023-12-11 22:01:05', '2023-12-11 22:01:05'),
(7, 13, 'BINOTAL TAB 1000 MG 50\'S', 'binotal-tab-1000-mg-50s', 'MG 50\'S', '10	2 BX : 15%', 484576, 'BOX', 'BINOTAL TAB 1000 MG 50\'S', 'BINOTAL TAB 1000 MG 50\'S', 'BINOTAL TAB 1000 MG 50\'S', 0, 2, '2023-12-11 22:01:45', '2023-12-11 22:01:45'),
(8, 13, 'BINOTAL TAB 500 MG 50\'S', 'binotal-tab-500-mg-50s', '50\'S', '10	2 BOX 15%', 263672, 'BOX', 'BINOTAL TAB 500 MG 50\'S', 'BINOTAL TAB 500 MG 50\'S', 'BINOTAL TAB 500 MG 50\'S', 0, 2, '2023-12-11 22:02:17', '2023-12-11 22:02:17'),
(9, 13, 'CANESTEN CRM 10 MG', 'canesten-crm-10-mg', 'CANESTEN CRM 10 MG', '0', 39472, 'TUB', 'CANESTEN CRM 10 MG', 'CANESTEN CRM 10 MG', 'CANESTEN CRM 10 MG', 0, 2, '2023-12-11 22:02:38', '2023-12-11 22:02:38'),
(10, 13, 'CANESTEN CRM 5 MG', 'canesten-crm-5-mg', 'CANESTEN CRM 5 MG', '2', 24864, 'TUB', 'CANESTEN CRM 5 MG', 'CANESTEN CRM 5 MG', 'CANESTEN CRM 5 MG', 0, 2, '2023-12-11 22:03:02', '2023-12-11 22:03:02'),
(11, 13, 'CDR EFF 10\'S', 'cdr-eff-10s', 'CDR EFF 10\'S', '2', 46298, 'TUB', 'CDR EFF 10\'S', 'CDR EFF 10\'S', 'CDR EFF 10\'S', 0, 2, '2023-12-11 22:03:33', '2023-12-11 22:03:33'),
(12, 13, 'CDR EFF 15\'S', 'cdr-eff-15s', 'CDR EFF 15\'S', '2', 64602, 'TUB', 'CDR EFF 15\'S', 'CDR EFF 15\'S', 'CDR EFF 15\'S', 0, 2, '2023-12-11 22:03:56', '2023-12-11 22:03:56'),
(13, 13, 'DIANE TAB 21\'S', 'diane-tab-21s', 'DIANE TAB 21\'S', '3', 168560, 'BOX', 'DIANE TAB 21\'S', 'DIANE TAB 21\'S', 'DIANE TAB 21\'S', 0, 2, '2023-12-11 22:04:18', '2023-12-11 22:04:18'),
(14, 13, 'INCIDAL-OD CAP 8X4\'S', 'incidal-od-cap-8x4s', 'INCIDAL-OD CAP 8X4\'S', '5', 135318, 'BOX', 'INCIDAL-OD CAP 8X4\'S', 'INCIDAL-OD CAP 8X4\'S', 'INCIDAL-OD CAP 8X4\'S', 0, 2, '2023-12-11 22:04:45', '2023-12-11 22:04:45'),
(15, 13, 'MICROGYNON TAB 10\'S - KECIL', 'microgynon-tab-10s-kecil', 'MICROGYNON TAB 10\'S - KECIL', '0', 208495, 'BOX', 'MICROGYNON TAB 10\'S - KECIL', 'MICROGYNON TAB 10\'S - KECIL', 'MICROGYNON TAB 10\'S - KECIL', 0, 2, '2023-12-11 22:05:11', '2023-12-11 22:05:11'),
(16, 13, 'REDOXON 10\'S + 5', 'redoxon-10s-5', 'REDOXON 10\'S + 5', '5', 43068, 'TUB', 'REDOXON 10\'S + 5', 'REDOXON 10\'S + 5', 'REDOXON 10\'S + 5', 0, 2, '2023-12-11 22:05:33', '2023-12-11 22:05:33'),
(17, 13, 'REDOXON EFF 10\'S - ORANGE', 'redoxon-eff-10s-orange', 'REDOXON EFF 10\'S - ORANGE', '5', 43068, 'TUB', 'REDOXON EFF 10\'S - ORANGE', 'REDOXON EFF 10\'S - ORANGE', 'REDOXON EFF 10\'S - ORANGE', 0, 2, '2023-12-11 22:05:58', '2023-12-11 22:05:58'),
(18, 13, 'REDOXON TABLET KUNYAH 24\'S', 'redoxon-tablet-kunyah-24s', 'REDOXON TABLET KUNYAH 24\'S', '0', 45410, 'BOX', 'REDOXON TABLET KUNYAH 24\'S', 'REDOXON TABLET KUNYAH 24\'S', 'REDOXON TABLET KUNYAH 24\'S', 0, 2, '2023-12-11 22:06:21', '2023-12-11 22:06:21'),
(19, 13, 'UPIXON SYR', 'upixon-syr', 'UPIXON SYR', '0', 12576, 'FLS', 'UPIXON SYR', 'UPIXON SYR', 'UPIXON SYR', 0, 2, '2023-12-11 22:06:51', '2023-12-11 22:06:51'),
(20, 14, 'HANSAPLAST ROL 1.25CMX1M 20\'S KAIN', 'hansaplast-rol-125cmx1m-20s-kain', 'HANSAPLAST ROL 1.25CMX1M 20\'S KAIN', '0', 56188, 'BOX', 'HANSAPLAST ROL 1.25CMX1M 20\'S KAIN', 'HANSAPLAST ROL 1.25CMX1M 20\'S KAIN', 'HANSAPLAST ROL 1.25CMX1M 20\'S KAIN', 0, 2, '2023-12-11 22:07:13', '2023-12-11 22:07:13'),
(21, 15, 'ANACETINE SYR 60 ML', 'anacetine-syr-60-ml', 'ANACETINE SYR 60 ML', '0', 8658, 'FLS', 'ANACETINE SYR 60 ML', 'ANACETINE SYR 60 ML', 'ANACETINE SYR 60 ML', 0, 2, '2023-12-11 22:07:36', '2023-12-11 22:07:36'),
(22, 15, 'INFLASON KAP 200\'S', 'inflason-kap-200s', 'INFLASON KAP 200\'S', '0', 44200, 'BOX', 'INFLASON KAP 200\'S', 'INFLASON KAP 200\'S', 'INFLASON KAP 200\'S', 0, 2, '2023-12-11 22:07:58', '2023-12-11 22:07:58'),
(23, 15, 'LICODEXON 0.5 KAP 200\'S', 'licodexon-05-kap-200s', '3 BOX : 26185', '0', 26887, 'BOX', 'LICODEXON 0.5 KAP 200\'S', 'LICODEXON 0.5 KAP 200\'S', 'LICODEXON 0.5 KAP 200\'S', 0, 2, '2023-12-11 22:08:33', '2023-12-11 22:08:33'),
(24, 15, 'LICOKALK KAP 100\'S', 'licokalk-kap-100s', '3 BX : 22500', '0', 23161, 'BOX', 'LICOKALK KAP 100\'S', 'LICOKALK KAP 100\'S', 'LICOKALK KAP 100\'S', 0, 2, '2023-12-11 22:09:08', '2023-12-11 22:09:08'),
(25, 16, 'ASAM MEFENAMAT KAP 500MG 100\'S-BERNO', 'asam-mefenamat-kap-500mg-100s-berno', '10B:16700', '0', 17961, 'BOX', 'ASAM MEFENAMAT KAP 500MG 100\'S-BERNO', 'ASAM MEFENAMAT KAP 500MG 100\'S-BERNO', 'ASAM MEFENAMAT KAP 500MG 100\'S-BERNO', 0, 2, '2023-12-11 22:09:46', '2023-12-11 22:09:46'),
(26, 16, 'BIOLYSIN SYR 100 ML - BESAR', 'biolysin-syr-100-ml-besar', 'BIOLYSIN SYR 100 ML - BESAR', '0', 16650, 'FLS', 'BIOLYSIN SYR 100 ML - BESAR', 'BIOLYSIN SYR 100 ML - BESAR', 'BIOLYSIN SYR 100 ML - BESAR', 0, 2, '2023-12-11 22:10:11', '2023-12-11 22:10:21'),
(27, 17, 'BETADINE OINTMENT 10 GR - SEDANG', 'betadine-ointment-10-gr-sedang', 'BETADINE OINTMENT 10 GR - SEDANG', '0', 14874, 'TUB', 'BETADINE OINTMENT 10 GR - SEDANG', 'BETADINE OINTMENT 10 GR - SEDANG', 'BETADINE OINTMENT 10 GR - SEDANG', 0, 2, '2023-12-11 22:10:50', '2023-12-11 22:10:50'),
(28, 17, 'BETADINE OINTMENT 5 GR - KECIL', 'betadine-ointment-5-gr-kecil', 'BETADINE OINTMENT 5 GR - KECIL', '0', 9157, 'TUB', 'BETADINE OINTMENT 5 GR - KECIL', 'BETADINE OINTMENT 5 GR - KECIL', 'BETADINE OINTMENT 5 GR - KECIL', 0, 2, '2023-12-11 22:11:15', '2023-12-11 22:11:15'),
(29, 17, 'BETADINE SABUN CAIR 100 ML', 'betadine-sabun-cair-100-ml', 'BETADINE SABUN CAIR 100 ML', '0', 29914, 'FLS', 'BETADINE SABUN CAIR 100 ML', 'BETADINE SABUN CAIR 100 ML', 'BETADINE SABUN CAIR 100 ML', 0, 2, '2023-12-11 22:11:38', '2023-12-11 22:11:38'),
(30, 17, 'BETADINE SABUN CAIR 60 ML', 'betadine-sabun-cair-60-ml', 'BETADINE SABUN CAIR 60 ML', '0', 21367, 'FLS', 'BETADINE SABUN CAIR 60 ML', 'BETADINE SABUN CAIR 60 ML', 'BETADINE SABUN CAIR 60 ML', 0, 2, '2023-12-11 22:11:55', '2023-12-11 22:11:55'),
(31, 17, 'BETADINE SOLUTION  5 ML', 'betadine-solution-5-ml', 'BETADINE SOLUTION  5 ML', '0', 5683, 'FLS', 'BETADINE SOLUTION  5 ML', 'BETADINE SOLUTION  5 ML', 'BETADINE SOLUTION  5 ML', 0, 2, '2023-12-11 22:12:15', '2023-12-11 22:12:15'),
(32, 17, 'BETADINE SOLUTION 15 ML', 'betadine-solution-15-ml', 'BETADINE SOLUTION 15 ML', '0', 14191, 'FLS', 'BETADINE SOLUTION 15 ML', 'BETADINE SOLUTION 15 ML', 'BETADINE SOLUTION 15 ML', 0, 2, '2023-12-11 22:12:36', '2023-12-11 22:12:36'),
(33, 17, 'BETADINE SOLUTION 30 ML', 'betadine-solution-30-ml', 'BETADINE SOLUTION 30 ML', '0', 24242, 'FLS', 'BETADINE SOLUTION 30 ML', 'BETADINE SOLUTION 30 ML', 'BETADINE SOLUTION 30 ML', 0, 2, '2023-12-11 22:12:53', '2023-12-11 22:12:53'),
(34, 18, 'BIMAFLOX 500 KAP 100\'S', 'bimaflox-500-kap-100s', '5BX:54562', '0', 55775, 'BOX', 'BIMAFLOX 500 KAP 100\'S', 'BIMAFLOX 500 KAP 100\'S', 'BIMAFLOX 500 KAP 100\'S', 0, 2, '2023-12-11 22:13:15', '2023-12-11 22:13:15'),
(35, 18, 'BIMAGEN KAP 100\'S', 'bimagen-kap-100s', 'BIMAGEN KAP 100\'S', '0', 15540, 'BOX', 'BIMAGEN KAP 100\'S', 'BIMAGEN KAP 100\'S', 'BIMAGEN KAP 100\'S', 0, 2, '2023-12-11 22:13:36', '2023-12-11 22:13:36'),
(36, 18, 'BIMASTAN KAPTAB 100\'S', 'bimastan-kaptab-100s', 'BIMASTAN KAPTAB 100\'S', '0', 33804, 'BOX', 'BIMASTAN KAPTAB 100\'S', 'BIMASTAN KAPTAB 100\'S', 'BIMASTAN KAPTAB 100\'S', 0, 2, '2023-12-11 22:13:56', '2023-12-11 22:13:56'),
(37, 18, 'BIROPYRON KAP 100\'S', 'biropyron-kap-100s', 'BIROPYRON KAP 100\'S', '0', 45560, 'BOX', 'BIROPYRON KAP 100\'S', 'BIROPYRON KAP 100\'S', 'BIROPYRON KAP 100\'S', 0, 2, '2023-12-11 22:14:19', '2023-12-11 22:14:19'),
(38, 19, 'NEPHROLIT 5 X 20 STRIP', 'nephrolit-5-x-20-strip', '2 BOX=15%', '12,5', 64935, 'BOX', 'NEPHROLIT 5 X 20 STRIP', 'NEPHROLIT 5 X 20 STRIP', 'NEPHROLIT 5 X 20 STRIP', 0, 2, '2023-12-11 22:14:44', '2023-12-11 22:14:44'),
(39, 20, 'BUFACOMB CRM 5 GR', 'bufacomb-crm-5-gr', '5+1/16+4', '7,5', 26085, 'TUB', 'BUFACOMB CRM 5 GR', 'BUFACOMB CRM 5 GR', 'BUFACOMB CRM 5 GR', 0, 2, '2023-12-11 22:15:10', '2023-12-11 22:15:10'),
(40, 20, 'BUFANTACID FORTE SYR 60 ML', 'bufantacid-forte-syr-60-ml', 'BUFANTACID FORTE SYR 60 ML', '0', 8930, 'FLS', 'BUFANTACID FORTE SYR 60 ML', 'BUFANTACID FORTE SYR 60 ML', 'BUFANTACID FORTE SYR 60 ML', 0, 2, '2023-12-11 22:15:34', '2023-12-11 22:15:34'),
(41, 20, 'NEW ASTAR CRM 15 GR', 'new-astar-crm-15-gr', '24 TUB : 10200', '0', 10500, 'TUB', 'NEW ASTAR CRM 15 GR', 'NEW ASTAR CRM 15 GR', 'NEW ASTAR CRM 15 GR', 0, 2, '2023-12-11 22:42:11', '2023-12-11 22:42:11'),
(42, 21, 'CENDO ASTHENOF DROP 5 ML', 'cendo-asthenof-drop-5-ml', 'CENDO ASTHENOF DROP 5 ML', '7,5', 23310, 'FLS', 'CENDO ASTHENOF DROP 5 ML', 'CENDO ASTHENOF DROP 5 ML', 'CENDO ASTHENOF DROP 5 ML', 0, 2, '2023-12-11 22:42:42', '2023-12-11 22:42:42'),
(43, 21, 'CENDO AUGENTONIC DROP 15 ML', 'cendo-augentonic-drop-15-ml', 'CENDO AUGENTONIC DROP 15 ML', '7,5', 33993, 'FLS', 'CENDO AUGENTONIC DROP 15 ML', 'CENDO AUGENTONIC DROP 15 ML', 'CENDO AUGENTONIC DROP 15 ML', 0, 2, '2023-12-11 22:42:56', '2023-12-11 22:42:56'),
(44, 21, 'CENDO CATARLENT  DROP 15 ML', 'cendo-catarlent-drop-15-ml', 'CENDO CATARLENT  DROP 15 ML', '7,5', 33993, 'FLS', 'CENDO CATARLENT  DROP 15 ML', 'CENDO CATARLENT  DROP 15 ML', 'CENDO CATARLENT  DROP 15 ML', 0, 2, '2023-12-11 22:43:14', '2023-12-11 22:43:14'),
(45, 21, 'CENDO CATARLENT  DROP 5 ML', 'cendo-catarlent-drop-5-ml', 'CENDO CATARLENT  DROP 5 ML', '7,5', 25114, 'FLS', 'CENDO CATARLENT  DROP 5 ML', 'CENDO CATARLENT  DROP 5 ML', 'CENDO CATARLENT  DROP 5 ML', 0, 2, '2023-12-11 22:43:28', '2023-12-11 22:43:28'),
(46, 21, 'CENDO LYTEERS DROP 15 ML', 'cendo-lyteers-drop-15-ml', 'CENDO LYTEERS DROP 15 ML', '7,5', 24975, 'FLS', 'CENDO LYTEERS DROP 15 ML', 'CENDO LYTEERS DROP 15 ML', 'CENDO LYTEERS DROP 15 ML', 0, 2, '2023-12-11 22:43:39', '2023-12-11 22:43:39'),
(47, 21, 'CENDO MYDRIATIL 0.5% DROP 5 ML', 'cendo-mydriatil-05-drop-5-ml', 'CENDO MYDRIATIL 0.5% DROP 5 ML', '7,5', 32050, 'FLS', 'CENDO MYDRIATIL 0.5% DROP 5 ML', 'CENDO MYDRIATIL 0.5% DROP 5 ML', 'CENDO MYDRIATIL 0.5% DROP 5 ML', 0, 2, '2023-12-11 22:43:56', '2023-12-11 22:43:56'),
(48, 21, 'CENDO MYDRIATIL 1% DROP 5 ML', 'cendo-mydriatil-1-drop-5-ml', 'CENDO MYDRIATIL 1% DROP 5 ML', '7,5', 42457, 'FLS', 'CENDO MYDRIATIL 1% DROP 5 ML', 'CENDO MYDRIATIL 1% DROP 5 ML', 'CENDO MYDRIATIL 1% DROP 5 ML', 0, 2, '2023-12-11 22:44:10', '2023-12-11 22:44:10'),
(49, 21, 'CENDO POLYDEX DROP 5 ML', 'cendo-polydex-drop-5-ml', 'CENDO POLYDEX DROP 5 ML', '7,5', 39682, 'FLS', 'CENDO POLYDEX DROP 5 ML', 'CENDO POLYDEX DROP 5 ML', 'CENDO POLYDEX DROP 5 ML', 0, 2, '2023-12-11 22:44:30', '2023-12-11 22:44:30'),
(50, 21, 'CENDO TIMOL DROP 0,25% 5 ML', 'cendo-timol-drop-025-5-ml', 'CENDO TIMOL DROP 0,25% 5 ML', '7,5', 33855, 'FLS', 'CENDO TIMOL DROP 0,25% 5 ML', 'CENDO TIMOL DROP 0,25% 5 ML', 'CENDO TIMOL DROP 0,25% 5 ML', 0, 2, '2023-12-11 22:44:44', '2023-12-11 22:44:44'),
(51, 21, 'CENDO TIMOL DROP 0,5% 5 ML', 'cendo-timol-drop-05-5-ml', 'CENDO TIMOL DROP 0,5% 5 ML', '7,5', 53002, 'FLS', 'CENDO TIMOL DROP 0,5% 5 ML', 'CENDO TIMOL DROP 0,5% 5 ML', 'CENDO TIMOL DROP 0,5% 5 ML', 0, 2, '2023-12-11 22:44:57', '2023-12-11 22:44:57'),
(52, 21, 'CENDO XITROL DROP 5 ML', 'cendo-xitrol-drop-5-ml', 'CENDO XITROL DROP 5 ML', '7,5', 30247, 'FLS', 'CENDO XITROL DROP 5 ML', 'CENDO XITROL DROP 5 ML', 'CENDO XITROL DROP 5 ML', 0, 2, '2023-12-11 22:45:14', '2023-12-11 22:45:14'),
(53, 22, 'BORAX GLISERIN 8 ML-GOM(CITO)', 'borax-gliserin-8-ml-gomcito', '24 FLS : 2.5%', '0', 3279, 'FLS', 'BORAX GLISERIN 8 ML-GOM(CITO)', 'BORAX GLISERIN 8 ML-GOM(CITO)', 'BORAX GLISERIN 8 ML-GOM(CITO)', 0, 2, '2023-12-11 22:46:13', '2023-12-11 22:46:13'),
(54, 22, 'GENTIAN VIOLET 1% 10 ML - CITO', 'gentian-violet-1-10-ml-cito', '1 BX : 2.5%', '0', 3500, 'FLS', 'GENTIAN VIOLET 1% 10 ML - CITO', 'GENTIAN VIOLET 1% 10 ML - CITO', 'GENTIAN VIOLET 1% 10 ML - CITO', 0, 2, '2023-12-11 22:46:29', '2023-12-11 22:46:29'),
(55, 22, 'ICHTYOL 15 GR - CITO', 'ichtyol-15-gr-cito', '1 BX : 2,5%', '0', 6559, 'FLS', 'ICHTYOL 15 GR - CITO', 'ICHTYOL 15 GR - CITO', 'ICHTYOL 15 GR - CITO', 0, 2, '2023-12-11 22:46:47', '2023-12-11 22:46:47'),
(56, 22, 'MINYAK TELON 60 ML - CITO', 'minyak-telon-60-ml-cito', '1 LUSIN : 2%', '0', 13270, 'FLS', 'MINYAK TELON 60 ML - CITO', 'MINYAK TELON 60 ML - CITO', 'MINYAK TELON 60 ML - CITO', 0, 2, '2023-12-11 22:47:07', '2023-12-11 22:47:07'),
(57, 22, 'P.K CRYSTAL 5 GR (CITO)', 'pk-crystal-5-gr-cito', '24 POT : 2.5%', '0', 6357, 'POT', 'P.K CRYSTAL 5 GR (CITO)', 'P.K CRYSTAL 5 GR (CITO)', 'P.K CRYSTAL 5 GR (CITO)', 0, 2, '2023-12-11 22:47:28', '2023-12-11 22:47:28'),
(58, 22, 'SALEP SALICYL 2.4 15 GR - CITO', 'salep-salicyl-24-15-gr-cito', '1 BX : 2,5%', '0', 4500, 'POT', 'SALEP SALICYL 2.4 15 GR - CITO', 'SALEP SALICYL 2.4 15 GR - CITO', 'SALEP SALICYL 2.4 15 GR - CITO', 0, 2, '2023-12-11 22:47:50', '2023-12-11 22:47:50'),
(59, 22, 'SALICYL PWD 50 GR-MENTHOL(CITO)', 'salicyl-pwd-50-gr-mentholcito', '24 FLS : 2.5%', '0', 5049, 'FLS', 'SALICYL PWD 50 GR-MENTHOL(CITO)', 'SALICYL PWD 50 GR-MENTHOL(CITO)', 'SALICYL PWD 50 GR-MENTHOL(CITO)', 0, 2, '2023-12-11 22:48:10', '2023-12-11 22:48:10'),
(60, 22, 'SALICYL PWD 50 GR-PARFUM(CITO)', 'salicyl-pwd-50-gr-parfumcito', '24 FLS : 2.5%', '0', 5049, 'FLS', 'SALICYL PWD 50 GR-PARFUM(CITO)', 'SALICYL PWD 50 GR-PARFUM(CITO)', 'SALICYL PWD 50 GR-PARFUM(CITO)', 0, 2, '2023-12-11 22:48:18', '2023-12-11 22:48:18'),
(61, 22, 'SALICYL PWD 75 GR-NON MENTHOL(CITO)', 'salicyl-pwd-75-gr-non-mentholcito', '24 FLS : 2.5%', '0', 5049, 'FLS', 'SALICYL PWD 75 GR-NON MENTHOL(CITO)', 'SALICYL PWD 75 GR-NON MENTHOL(CITO)', 'SALICYL PWD 75 GR-NON MENTHOL(CITO)', 0, 2, '2023-12-11 22:48:25', '2023-12-11 22:48:25'),
(62, 23, 'OB COMBI ATT SYR 60ML', 'ob-combi-att-syr-60ml', 'OB COMBI ATT SYR 60ML', '0', 14190, 'FLS', 'OB COMBI ATT SYR 60ML', 'OB COMBI ATT SYR 60ML', 'OB COMBI ATT SYR 60ML', 0, 2, '2023-12-11 22:49:03', '2023-12-11 22:49:03'),
(63, 23, 'OBH COMBI BERDAHAK SACHET 20\'S', 'obh-combi-berdahak-sachet-20s', 'OBH COMBI BERDAHAK SACHET 20\'S', '0', 18919, 'BOX', 'OBH COMBI BERDAHAK SACHET 20\'S', 'OBH COMBI BERDAHAK SACHET 20\'S', 'OBH COMBI BERDAHAK SACHET 20\'S', 0, 2, '2023-12-11 22:49:24', '2023-12-11 22:49:24'),
(64, 23, 'OBH COMBI PLUS SYR  60 ML DWS - MTL', 'obh-combi-plus-syr-60-ml-dws-mtl', 'OBH COMBI PLUS SYR  60 ML DWS - MTL', '0', 13653, 'FLS', 'OBH COMBI PLUS SYR  60 ML DWS - MTL', 'OBH COMBI PLUS SYR  60 ML DWS - MTL', 'OBH COMBI PLUS SYR  60 ML DWS - MTL', 0, 2, '2023-12-11 22:49:40', '2023-12-11 22:49:40'),
(65, 23, 'OBH COMBI PLUS SYR 100 ML DWS - JAHE', 'obh-combi-plus-syr-100-ml-dws-jahe', 'OBH COMBI PLUS SYR 100 ML DWS - JAHE', '0', 18592, 'FLS', 'OBH COMBI PLUS SYR 100 ML DWS - JAHE', 'OBH COMBI PLUS SYR 100 ML DWS - JAHE', 'OBH COMBI PLUS SYR 100 ML DWS - JAHE', 0, 2, '2023-12-11 22:49:54', '2023-12-11 22:49:54'),
(66, 23, 'OBH COMBI PLUS SYR 100 ML DWS - MADU', 'obh-combi-plus-syr-100-ml-dws-madu', 'OBH COMBI PLUS SYR 100 ML DWS - MADU', '0', 18592, 'FLS', 'OBH COMBI PLUS SYR 100 ML DWS - MADU', 'OBH COMBI PLUS SYR 100 ML DWS - MADU', 'OBH COMBI PLUS SYR 100 ML DWS - MADU', 0, 2, '2023-12-11 22:50:11', '2023-12-11 22:50:11'),
(67, 23, 'OBH COMBI PLUS SYR 100 ML DWS - MTL', 'obh-combi-plus-syr-100-ml-dws-mtl', 'OBH COMBI PLUS SYR 100 ML DWS - MTL', '0', 18592, 'FLS', 'OBH COMBI PLUS SYR 100 ML DWS - MTL', 'OBH COMBI PLUS SYR 100 ML DWS - MTL', 'OBH COMBI PLUS SYR 100 ML DWS - MTL', 0, 2, '2023-12-11 22:50:18', '2023-12-11 22:50:18'),
(68, 23, 'OBH COMBI PLUS SYR 60 ML DWS - JAHE', 'obh-combi-plus-syr-60-ml-dws-jahe', 'OBH COMBI PLUS SYR 60 ML DWS - JAHE', '0', 13653, 'FLS', 'OBH COMBI PLUS SYR 60 ML DWS - JAHE', 'OBH COMBI PLUS SYR 60 ML DWS - JAHE', 'OBH COMBI PLUS SYR 60 ML DWS - JAHE', 0, 2, '2023-12-11 22:50:33', '2023-12-11 22:50:33'),
(69, 23, 'OBH COMBI PLUS SYR 60 ML DWS - MADU', 'obh-combi-plus-syr-60-ml-dws-madu', 'OBH COMBI PLUS SYR 60 ML DWS - MADU', '0', 13653, 'FLS', 'OBH COMBI PLUS SYR 60 ML DWS - MADU', 'OBH COMBI PLUS SYR 60 ML DWS - MADU', 'OBH COMBI PLUS SYR 60 ML DWS - MADU', 0, 2, '2023-12-11 22:50:39', '2023-12-11 22:50:39'),
(70, 23, 'OBH COMBI SYR 60 ML ANAK - APEL', 'obh-combi-syr-60-ml-anak-apel', 'OBH COMBI SYR 60 ML ANAK - APEL', '0', 15373, 'FLS', 'OBH COMBI SYR 60 ML ANAK - APEL', 'OBH COMBI SYR 60 ML ANAK - APEL', 'OBH COMBI SYR 60 ML ANAK - APEL', 0, 2, '2023-12-11 22:50:56', '2023-12-11 22:50:56'),
(71, 23, 'OBH COMBI SYR 60 ML ANAK - JERUK', 'obh-combi-syr-60-ml-anak-jeruk', 'OBH COMBI SYR 60 ML ANAK - JERUK', '0', 15373, 'FLS', 'OBH COMBI SYR 60 ML ANAK - JERUK', 'OBH COMBI SYR 60 ML ANAK - JERUK', 'OBH COMBI SYR 60 ML ANAK - JERUK', 0, 2, '2023-12-11 22:51:08', '2023-12-11 22:51:08'),
(72, 23, 'OBH COMBI SYR 60 ML ANAK - MADU', 'obh-combi-syr-60-ml-anak-madu', 'OBH COMBI SYR 60 ML ANAK - MADU', '0', 15373, 'FLS', 'OBH COMBI SYR 60 ML ANAK - MADU', 'OBH COMBI SYR 60 ML ANAK - MADU', 'OBH COMBI SYR 60 ML ANAK - MADU', 0, 2, '2023-12-11 22:51:17', '2023-12-11 22:51:17'),
(73, 23, 'OBH COMBI SYR 60 ML ANAK - STRAW', 'obh-combi-syr-60-ml-anak-straw', 'OBH COMBI SYR 60 ML ANAK - STRAW', '0', 15373, 'FLS', 'OBH COMBI SYR 60 ML ANAK - STRAW', 'OBH COMBI SYR 60 ML ANAK - STRAW', 'OBH COMBI SYR 60 ML ANAK - STRAW', 0, 2, '2023-12-11 22:51:27', '2023-12-11 22:51:27'),
(74, 23, 'OBH COMBI SYR GEPENG 100 ML', 'obh-combi-syr-gepeng-100-ml', 'OBH COMBI SYR GEPENG 100 ML', '0', 14263, 'FLS', 'OBH COMBI SYR GEPENG 100 ML', 'OBH COMBI SYR GEPENG 100 ML', 'OBH COMBI SYR GEPENG 100 ML', 0, 2, '2023-12-11 22:52:05', '2023-12-11 22:52:05'),
(75, 23, 'PEDITOX 50 ML', 'peditox-50-ml', 'PEDITOX 50 ML', '0', 8593, 'FLS', 'PEDITOX 50 ML', 'PEDITOX 50 ML', 'PEDITOX 50 ML', 0, 2, '2023-12-11 22:52:18', '2023-12-11 22:52:18'),
(76, 23, 'SUCRALFATE SUS 100 ML - COMBIPHAR', 'sucralfate-sus-100-ml-combiphar', 'SUCRALFATE SUS 100 ML - COMBIPHAR', '0', 17149, 'FLS', 'SUCRALFATE SUS 100 ML - COMBIPHAR', 'SUCRALFATE SUS 100 ML - COMBIPHAR', 'SUCRALFATE SUS 100 ML - COMBIPHAR', 0, 2, '2023-12-11 22:52:29', '2023-12-11 22:52:29'),
(77, 24, 'DEMACOLIN SYR 60 ML', 'demacolin-syr-60-ml', 'DEMACOLIN SYR 60 ML', '0', 16033, 'FLS', 'DEMACOLIN SYR 60 ML', 'DEMACOLIN SYR 60 ML', 'DEMACOLIN SYR 60 ML', 0, 2, '2023-12-11 22:52:49', '2023-12-11 22:52:49'),
(78, 24, 'DEMACOLIN TAB 100\'S', 'demacolin-tab-100s', 'DEMACOLIN TAB 100\'S', '0', 50477, 'BOX', 'DEMACOLIN TAB 100\'S', 'DEMACOLIN TAB 100\'S', 'DEMACOLIN TAB 100\'S', 0, 2, '2023-12-11 22:53:07', '2023-12-11 22:53:07'),
(79, 24, 'HALMEZIN SYR 100 ML', 'halmezin-syr-100-ml', 'HALMEZIN SYR 100 ML', '0', 28860, 'FLS', 'HALMEZIN SYR 100 ML', 'HALMEZIN SYR 100 ML', 'HALMEZIN SYR 100 ML', 0, 2, '2023-12-11 22:53:27', '2023-12-11 22:53:27'),
(80, 24, 'HEROCYN BABY PWD 100 GR', 'herocyn-baby-pwd-100-gr', 'HEROCYN BABY PWD 100 GR', '0', 8325, 'FLS', 'HEROCYN BABY PWD 100 GR', 'HEROCYN BABY PWD 100 GR', 'HEROCYN BABY PWD 100 GR', 0, 2, '2023-12-11 22:53:39', '2023-12-11 22:53:39'),
(81, 24, 'HEROCYN PWD 150 GR - BESAR', 'herocyn-pwd-150-gr-besar', 'HEROCYN PWD 150 GR - BESAR', '0', 13098, 'FLS', 'HEROCYN PWD 150 GR - BESAR', 'HEROCYN PWD 150 GR - BESAR', 'HEROCYN PWD 150 GR - BESAR', 0, 2, '2023-12-11 22:53:56', '2023-12-11 22:53:56'),
(82, 24, 'HEROCYN PWD 50 GR', 'herocyn-pwd-50-gr', 'HEROCYN PWD 50 GR', '0', 8103, 'FLS', 'HEROCYN PWD 50 GR', 'HEROCYN PWD 50 GR', 'HEROCYN PWD 50 GR', 0, 2, '2023-12-11 22:54:09', '2023-12-11 22:54:09'),
(83, 24, 'HEROCYN PWD 85 GR - KECIL', 'herocyn-pwd-85-gr-kecil', 'HEROCYN PWD 85 GR - KECIL', '0', 12210, 'FLS', 'HEROCYN PWD 85 GR - KECIL', 'HEROCYN PWD 85 GR - KECIL', 'HEROCYN PWD 85 GR - KECIL', 0, 2, '2023-12-11 22:54:23', '2023-12-11 22:54:23'),
(84, 25, 'MENSES CAP 18\'S', 'menses-cap-18s', '4+1', '15', 23000, 'FLS', 'MENSES CAP 18\'S', 'MENSES CAP 18\'S', 'MENSES CAP 18\'S', 0, 2, '2023-12-11 22:54:50', '2023-12-11 22:54:50'),
(85, 26, 'AKURAT TES KEHAMILAN', 'akurat-tes-kehamilan', '10+1', '5', 10545, 'PAX', 'AKURAT TES KEHAMILAN', 'AKURAT TES KEHAMILAN', 'AKURAT TES KEHAMILAN', 0, 2, '2023-12-11 22:55:11', '2023-12-11 22:55:11'),
(86, 27, 'AMLODIPINE TAB 10 MG  100\'S - DEXA', 'amlodipine-tab-10-mg-100s-dexa', '5BX : 56000', '0', 57013, 'BOX', 'AMLODIPINE TAB 10 MG  100\'S - DEXA', 'AMLODIPINE TAB 10 MG  100\'S - DEXA', 'AMLODIPINE TAB 10 MG  100\'S - DEXA', 0, 2, '2023-12-11 22:55:51', '2023-12-11 22:55:51'),
(87, 27, 'AMLODIPINE TAB 5 MG  100\'S - DEXA', 'amlodipine-tab-5-mg-100s-dexa', '5 BX : 30.300', '0', 32290, 'BOX', 'AMLODIPINE TAB 5 MG  100\'S - DEXA', 'AMLODIPINE TAB 5 MG  100\'S - DEXA', 'AMLODIPINE TAB 5 MG  100\'S - DEXA', 0, 2, '2023-12-11 22:56:08', '2023-12-11 22:56:08'),
(88, 27, 'CAPTOPRIL TAB 12.5 MG 100\'S - DEXA', 'captopril-tab-125-mg-100s-dexa', 'CAPTOPRIL TAB 12.5 MG 100\'S - DEXA', '0', 10350, 'BOX', 'CAPTOPRIL TAB 12.5 MG 100\'S - DEXA', 'CAPTOPRIL TAB 12.5 MG 100\'S - DEXA', 'CAPTOPRIL TAB 12.5 MG 100\'S - DEXA', 0, 2, '2023-12-11 22:56:27', '2023-12-11 22:56:27'),
(89, 27, 'CAPTOPRIL TAB 25 MG 100\'S - DEXA', 'captopril-tab-25-mg-100s-dexa', 'CAPTOPRIL TAB 25 MG 100\'S - DEXA', '0', 14127, 'BOX', 'CAPTOPRIL TAB 25 MG 100\'S - DEXA', 'CAPTOPRIL TAB 25 MG 100\'S - DEXA', 'CAPTOPRIL TAB 25 MG 100\'S - DEXA', 0, 2, '2023-12-11 22:56:42', '2023-12-11 22:56:42'),
(90, 27, 'CEFADROXIL CAP 500MG 100\'S - DEXA', 'cefadroxil-cap-500mg-100s-dexa', '2 BX : 75320', '0', 77337, 'BOX', 'CEFADROXIL CAP 500MG 100\'S - DEXA', 'CEFADROXIL CAP 500MG 100\'S - DEXA', 'CEFADROXIL CAP 500MG 100\'S - DEXA', 0, 2, '2023-12-11 22:57:06', '2023-12-11 22:57:06'),
(91, 27, 'CEFIXIME CAP 100 MG 100\'S - DEXA', 'cefixime-cap-100-mg-100s-dexa', 'CEFIXIME CAP 100 MG 100\'S - DEXA', '0', 78305, 'BOX', 'CEFIXIME CAP 100 MG 100\'S - DEXA', 'CEFIXIME CAP 100 MG 100\'S - DEXA', 'CEFIXIME CAP 100 MG 100\'S - DEXA', 0, 2, '2023-12-11 22:57:22', '2023-12-11 22:57:22'),
(92, 27, 'DEXANTA TAB 100\'S', 'dexanta-tab-100s', '10 BX : 20200', '0', 21190, 'BOX', 'DEXANTA TAB 100\'S', 'DEXANTA TAB 100\'S', 'DEXANTA TAB 100\'S', 0, 2, '2023-12-11 22:57:37', '2023-12-11 22:57:37'),
(93, 27, 'GLIMEPIRIDE TAB 1 MG 100\'S - DEXA', 'glimepiride-tab-1-mg-100s-dexa', 'GLIMEPIRIDE TAB 1 MG 100\'S - DEXA', '0', 23125, 'BOX', 'GLIMEPIRIDE TAB 1 MG 100\'S - DEXA', 'GLIMEPIRIDE TAB 1 MG 100\'S - DEXA', 'GLIMEPIRIDE TAB 1 MG 100\'S - DEXA', 0, 2, '2023-12-11 22:58:00', '2023-12-11 22:58:00'),
(94, 27, 'GLIMEPIRIDE TAB 2 MG 100\'S - DEXA', 'glimepiride-tab-2-mg-100s-dexa', 'GLIMEPIRIDE TAB 2 MG 100\'S - DEXA', '0', 24375, 'BOX', 'GLIMEPIRIDE TAB 2 MG 100\'S - DEXA', 'GLIMEPIRIDE TAB 2 MG 100\'S - DEXA', 'GLIMEPIRIDE TAB 2 MG 100\'S - DEXA', 0, 2, '2023-12-11 22:58:14', '2023-12-11 22:58:14'),
(95, 27, 'GLIMEPIRIDE TAB 3 MG 100\'S - DEXA', 'glimepiride-tab-3-mg-100s-dexa', 'GLIMEPIRIDE TAB 3 MG 100\'S - DEXA', '0', 33750, 'BOX', 'GLIMEPIRIDE TAB 3 MG 100\'S - DEXA', 'GLIMEPIRIDE TAB 3 MG 100\'S - DEXA', 'GLIMEPIRIDE TAB 3 MG 100\'S - DEXA', 0, 2, '2023-12-11 22:58:30', '2023-12-11 22:58:30'),
(96, 27, 'GLIMEPIRIDE TAB 4 MG 100\'S - DEXA', 'glimepiride-tab-4-mg-100s-dexa', 'GLIMEPIRIDE TAB 4 MG 100\'S - DEXA', '0', 37500, 'BOX', 'GLIMEPIRIDE TAB 4 MG 100\'S - DEXA', 'GLIMEPIRIDE TAB 4 MG 100\'S - DEXA', 'GLIMEPIRIDE TAB 4 MG 100\'S - DEXA', 0, 2, '2023-12-11 22:58:49', '2023-12-11 22:58:49'),
(97, 27, 'KETOCONAZOLE CRM 2% 10 GR - DEXA', 'ketoconazole-crm-2-10-gr-dexa', '12 TUB : 6250', '0', 6861, 'TUB', 'KETOCONAZOLE CRM 2% 10 GR - DEXA', 'KETOCONAZOLE CRM 2% 10 GR - DEXA', 'KETOCONAZOLE CRM 2% 10 GR - DEXA', 0, 2, '2023-12-11 22:59:07', '2023-12-11 22:59:07'),
(98, 27, 'KETOCONAZOLE TAB 200 MG 50\'S - DEXA', 'ketoconazole-tab-200-mg-50s-dexa', '12 TUB : 6250', '0', 25227, 'BOX', 'KETOCONAZOLE TAB 200 MG 50\'S - DEXA', 'KETOCONAZOLE TAB 200 MG 50\'S - DEXA', 'KETOCONAZOLE TAB 200 MG 50\'S - DEXA', 0, 2, '2023-12-11 22:59:22', '2023-12-11 22:59:22'),
(99, 27, 'MELOXICAM TAB 15 MG 100\'S - DEXA', 'meloxicam-tab-15-mg-100s-dexa', 'MELOXICAM TAB 15 MG 100\'S - DEXA', '0', 44652, 'BOX', 'MELOXICAM TAB 15 MG 100\'S - DEXA', 'MELOXICAM TAB 15 MG 100\'S - DEXA', 'MELOXICAM TAB 15 MG 100\'S - DEXA', 0, 2, '2023-12-11 22:59:34', '2023-12-11 23:00:07'),
(100, 27, 'MELOXICAM TAB 7.5 MG 100\'S - DEXA', 'meloxicam-tab-75-mg-100s-dexa', 'MELOXICAM TAB 7.5 MG 100\'S - DEXA', '0', 34309, 'BOX', 'MELOXICAM TAB 7.5 MG 100\'S - DEXA', 'MELOXICAM TAB 7.5 MG 100\'S - DEXA', 'MELOXICAM TAB 7.5 MG 100\'S - DEXA', 0, 2, '2023-12-11 22:59:52', '2023-12-11 22:59:52'),
(101, 27, 'METHYLPREDNISOLONE TAB 4MG 100\'S-DEXA', 'methylprednisolone-tab-4mg-100s-dexa', 'METHYLPREDNISOLONE TAB 4MG 100\'S-DEXA', '0', 30272, 'BOX', 'METHYLPREDNISOLONE TAB 4MG 100\'S-DEXA', 'METHYLPREDNISOLONE TAB 4MG 100\'S-DEXA', 'METHYLPREDNISOLONE TAB 4MG 100\'S-DEXA', 0, 2, '2023-12-11 23:00:42', '2023-12-11 23:00:42'),
(102, 27, 'NEURODEX TAB 200\'S', 'neurodex-tab-200s', 'NEURODEX TAB 200\'S', '0', 90000, 'BOX', 'NEURODEX TAB 200\'S', 'NEURODEX TAB 200\'S', 'NEURODEX TAB 200\'S', 0, 2, '2023-12-11 23:00:58', '2023-12-11 23:00:58'),
(103, 27, 'PIROCAM 20 CAP 100\'S', 'pirocam-20-cap-100s', '5 BX : 24200', '0', 25227, 'BOX', 'PIROCAM 20 CAP 100\'S', 'PIROCAM 20 CAP 100\'S', 'PIROCAM 20 CAP 100\'S', 0, 2, '2023-12-11 23:01:15', '2023-12-11 23:01:15'),
(104, 27, 'RANITIDINE TAB 150 MG 100\'S - DEXA', 'ranitidine-tab-150-mg-100s-dexa', 'RANITIDINE TAB 150 MG 100\'S - DEXA', '0', 18163, 'BOX', 'RANITIDINE TAB 150 MG 100\'S - DEXA', 'RANITIDINE TAB 150 MG 100\'S - DEXA', 'RANITIDINE TAB 150 MG 100\'S - DEXA', 0, 2, '2023-12-11 23:01:31', '2023-12-11 23:01:31'),
(105, 27, 'SIMVASTATIN KAP 10 MG 100\'S-DEXA', 'simvastatin-kap-10-mg-100s-dexa', '5 BOX : 40400', '0', 41877, 'BOX', 'SIMVASTATIN KAP 10 MG 100\'S-DEXA', 'SIMVASTATIN KAP 10 MG 100\'S-DEXA', 'SIMVASTATIN KAP 10 MG 100\'S-DEXA', 0, 2, '2023-12-11 23:01:50', '2023-12-11 23:01:50'),
(106, 27, 'SIMVASTATIN KAP 10 MG 50\'S-DEXA', 'simvastatin-kap-10-mg-50s-dexa', '3 BOX : 25RB', '0', 26236, 'BOX', 'SIMVASTATIN KAP 10 MG 50\'S-DEXA', 'SIMVASTATIN KAP 10 MG 50\'S-DEXA', 'SIMVASTATIN KAP 10 MG 50\'S-DEXA', 0, 2, '2023-12-11 23:02:05', '2023-12-11 23:02:05'),
(107, 27, 'TEOSAL TAB 100\'S', 'teosal-tab-100s', '3 BOX : 16400', '0', 16902, 'BOX', 'TEOSAL TAB 100\'S', 'TEOSAL TAB 100\'S', 'TEOSAL TAB 100\'S', 0, 2, '2023-12-11 23:02:19', '2023-12-11 23:02:19'),
(108, 27, 'VOLTADEX TAB 50 MG 100\'S', 'voltadex-tab-50-mg-100s', '5BX:28,5,10BX:27,5', '0', 29800, 'BOX', 'VOLTADEX TAB 50 MG 100\'S', 'VOLTADEX TAB 50 MG 100\'S', 'VOLTADEX TAB 50 MG 100\'S', 0, 2, '2023-12-11 23:02:44', '2023-12-11 23:02:44'),
(109, 27, 'VOLTADEX TAB 50 MG 50\'S', 'voltadex-tab-50-mg-50s', '2BX:17.5RB,3BX:17RB', '0', 18000, 'BOX', 'VOLTADEX TAB 50 MG 50\'S', 'VOLTADEX TAB 50 MG 50\'S', 'VOLTADEX TAB 50 MG 50\'S', 0, 2, '2023-12-11 23:02:59', '2023-12-11 23:02:59'),
(110, 28, 'ANDALAN LAKTASI TAB 28\'S', 'andalan-laktasi-tab-28s', 'ANDALAN LAKTASI TAB 28\'S', '0', 11960, 'PIC', 'ANDALAN LAKTASI TAB 28\'S', 'ANDALAN LAKTASI TAB 28\'S', 'ANDALAN LAKTASI TAB 28\'S', 0, 2, '2023-12-11 23:05:28', '2023-12-11 23:05:28'),
(111, 15, 'Anacetine Syrup 60 ml', 'anacetine', 'Syrup Obat Batuk Anak', 'netto', 9000, 'fls', 'ana', 'beta', 'ana', 0, 2, '2024-01-04 01:35:57', '2024-01-04 01:35:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namalengkap` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provinsi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kodepos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_as` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `namalengkap`, `phone`, `alamat`, `provinsi`, `kota`, `kecamatan`, `kodepos`, `remember_token`, `created_at`, `updated_at`, `role_as`) VALUES
(1, 'Ariel Emmanuel', 'arielemmanuel4@gmail.com', NULL, '$2y$10$Xd7siO3izdPJlf5BE60mTODBIjIyp6L5gUcFyi8CFb0K6uYl0zBrW', '', '', '', '', '', '', '', 'x6xH3FzcQJm4ASUANls6uAUJBP3Wo69KIlS8KLxkjDBTlDQup6MKOTT2AlYn', '2023-10-24 23:21:55', '2023-12-12 22:08:55', 1),
(2, 'Admin', 'admin@example.com', NULL, '$2y$10$lcLbsIK8xYSC7D4SXcq3qOuzT3iwQ0yVsw2fXi96EFntohXNryAYy', 'Admin Abi', '9539593', 'Admin Alamat 2', 'Jawa', 'Semagarang', 'JawaTeng', '5555', NULL, '2023-10-24 23:31:06', '2023-12-12 03:23:42', 1),
(3, 'Phedra', 'arielemmanuel1@gmail.com', NULL, '$2y$10$PreXtH1lJKE3LEcC/nJxWO88agxCPF8eNdQ2G9TZtLAbyt6mwNcym', '', '', '', '', '', '', '', NULL, '2023-12-11 23:24:59', '2023-12-11 23:24:59', 0),
(4, 'Phed', 'register@gmail.com', NULL, '$2y$10$Uo2IqZDCaY9FpBfhG57hK.ApWo3o/v4JEXldBmj9iJwUfUx/uQ2J2', 'Harold Naturaliste', '08429133411', 'Tanah Marina Mas', 'Jawa Selatan', 'Semarwrong', 'Tawangsarang', '4994', NULL, '2023-12-26 18:14:59', '2023-12-26 18:19:09', 0),
(5, 'evan', 'asdf@yahoo.com', NULL, '$2y$10$EX7he/ZcZwjNbJ5DMA6ftO9w4uU5p7pTPDG2YC5Y2pH7jNQ3RqTWa', 'evan', '08429133411', 'Tanah Marina Mas', 'jawa tengah', 'semarang', 'gajah mungkur', '50123', NULL, '2024-01-04 01:19:45', '2024-01-04 01:22:53', 0),
(6, 'AyamGoreng', 'ariel@gmail.com', NULL, '$2y$10$ahEyAF.5/YKwCC8O2ZhabuvGbhyc5VG2dowke3saIsmHf02COXLp.', 'Harold Naturaliste', '08429133411', 'Tanah Marina Mas', 'Jawa Selatan', 'Semarwrong', 'Tawangsarang', '4994', NULL, '2024-01-24 19:51:54', '2024-01-24 19:52:34', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
