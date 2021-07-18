-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 18, 2021 at 12:33 PM
-- Server version: 10.3.30-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garikha_mi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_invite`
--

CREATE TABLE `admin_invite` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) NOT NULL,
  `role` varchar(191) NOT NULL,
  `invited_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_invite`
--

INSERT INTO `admin_invite` (`id`, `email`, `role`, `invited_by`, `created_at`, `updated_at`) VALUES
(8, 'es.suraj.duwal@gmail.com', 'editor', 1, '2019-12-23 06:22:21', '2019-12-23 06:22:21');

-- --------------------------------------------------------

--
-- Table structure for table `admin_menus`
--

CREATE TABLE `admin_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_menus`
--

INSERT INTO `admin_menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(22, 'menu -1', '2020-06-08 02:05:56', '2020-06-08 02:05:56'),
(23, 'menus', '2020-06-08 02:34:59', '2020-06-08 02:34:59'),
(24, 'hello', '2020-06-21 22:19:16', '2020-06-21 22:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu_items`
--

CREATE TABLE `admin_menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `label` varchar(191) NOT NULL,
  `link` varchar(191) NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `sort` int(11) NOT NULL DEFAULT 0,
  `class` varchar(191) DEFAULT NULL,
  `menu` bigint(20) UNSIGNED NOT NULL,
  `depth` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_menu_items`
--

INSERT INTO `admin_menu_items` (`id`, `label`, `link`, `parent`, `sort`, `class`, `menu`, `depth`, `created_at`, `updated_at`, `role_id`) VALUES
(3, 'google', 'http://google.com', 23, 0, NULL, 23, 0, '2020-06-08 02:39:10', '2020-06-08 03:17:24', 0),
(4, 'facebook', 'http://facebook', 23, 1, NULL, 23, 1, '2020-06-08 02:44:36', '2020-07-18 10:08:15', 0),
(5, 'home', 'http://home', 23, 2, NULL, 23, 0, '2020-06-08 03:05:37', '2020-07-18 10:08:36', 0);

-- --------------------------------------------------------

--
-- Table structure for table `annual_operation_costs`
--

CREATE TABLE `annual_operation_costs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `karmabhomi_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approx_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approx_annual_sale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_expense` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `annual_operation_costs`
--

INSERT INTO `annual_operation_costs` (`id`, `karmabhomi_id`, `name`, `approx_price`, `approx_annual_sale`, `total_expense`, `created_at`, `updated_at`) VALUES
(17, 4, 'fsdf', 'sfdds', 'dsffsd', 'fdsf', '2021-04-16 08:54:26', '2021-04-16 08:54:26'),
(18, 4, 'sdfs', 'dsfds', 'fdsfs', 'dsfds', '2021-04-16 08:54:26', '2021-04-16 08:54:26'),
(19, 5, 'lsd', '575', '545', '545', '2021-04-16 17:02:29', '2021-04-16 17:02:29'),
(21, 7, 'daadadad', '3434434', '34343', '343', '2021-04-20 11:15:47', '2021-04-20 11:15:47'),
(22, 8, 'asdasdasd', '3434', '3434', '343', '2021-04-22 08:16:19', '2021-04-22 08:16:19'),
(23, 9, 'Brad Feest', '381-755-5161', 'Montana', 'Voluptatem nam molestiae autem.', '2021-06-18 08:49:24', '2021-06-18 08:49:24'),
(24, 10, 'oihaoiegoiaeg', 'fhdrftjtrkrtkjop\'iul,rtner', 'aergawegaweg', 'gawegawegwegwegagvd', '2021-06-21 04:43:00', '2021-06-21 04:43:00'),
(25, 11, 'oihaoiegoiaeg', 'fhdrftjtrkrtkjop\'iul,rtner', 'aergawegaweg', 'gawegawegwegwegagvd', '2021-06-21 05:13:32', '2021-06-21 05:13:32'),
(26, 12, 'oihaoiegoiaeg', 'fhdrftjtrkrtkjop\'iul,rtner', 'aergawegaweg', 'gawegawegwegwegagvd', '2021-06-21 05:59:18', '2021-06-21 05:59:18'),
(27, 13, 'oihaoiegoiaeg', 'fhdrftjtrkrtkjop\'iul,rtner', 'aergawegaweg', 'gawegawegwegwegagvd', '2021-06-21 06:23:56', '2021-06-21 06:23:56'),
(28, 14, 'oihaoiegoiaeg', 'fhdrftjtrkrtkjop\'iul,rtner', 'aergawegaweg', 'gawegawegwegwegagvd', '2021-06-21 06:24:36', '2021-06-21 06:24:36'),
(29, 15, 'oihaoiegoiaeg', 'fhdrftjtrkrtkjop\'iul,rtner', 'aergawegaweg', 'gawegawegwegwegagvd', '2021-06-21 16:08:57', '2021-06-21 16:08:57'),
(30, 16, 'oihaoiegoiaeg', 'fhdrftjtrkrtkjop\'iul,rtner', 'aergawegaweg', 'gawegawegwegwegagvd', '2021-06-21 16:10:53', '2021-06-21 16:10:53'),
(31, 17, 'oihaoiegoiaeg', 'fhdrftjtrkrtkjop\'iul,rtner', 'aergawegaweg', 'gawegawegwegwegagvd', '2021-06-21 16:11:03', '2021-06-21 16:11:03'),
(32, 18, 'oihaoiegoiaeg', 'fhdrftjtrkrtkjop\'iul,rtner', 'aergawegaweg', 'gawegawegwegwegagvd', '2021-06-22 16:44:47', '2021-06-22 16:44:47'),
(33, 23, 'nddj', 'dd', 'dd', 'dd', '2021-06-27 07:11:12', '2021-06-27 07:11:12'),
(34, 24, 'gggg', 'tttt', 'gggy', 'gggt', '2021-06-28 09:27:53', '2021-06-28 09:27:53'),
(35, 25, 'nsnsne', 'jejej', 'ejeje', 'jejeje', '2021-07-05 07:25:20', '2021-07-05 07:25:20'),
(36, 26, 'Shbs', '1000', '1pp1jej', '10000', '2021-07-06 15:56:24', '2021-07-06 15:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `banking`
--

CREATE TABLE `banking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(225) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `description` text NOT NULL,
  `location` varchar(191) NOT NULL,
  `meta_title` varchar(225) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(225) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banking`
--

INSERT INTO `banking` (`id`, `title`, `image`, `description`, `location`, `meta_title`, `meta_description`, `created_at`, `updated_at`, `status`, `date`) VALUES
(1, 'Nic Asia', '16051959291605195929.png', '<div style=\"text-align: justify;\">Super Chamatkarik Business Loan \r\n\r\n\r\nOur new business loan product, NIC ASIA Super Chamatkarik Business Loan has been crafted to fulfill your all business and financial requirements. \r\n\r\n \r\n\r\nThis product is loaded with:-\r\n\r\nAttractive offers like:\r\n\r\nThe lowest interest rate of 8.25% p.a. which will remain fixed for one year. \r\nNominal loan processing fee of 0.25% only.\r\nHigh-speed loan processing within 48 hours using customized  Scorecard model.\r\nCompelling features like:\r\n\r\nNew business and existing business.\r\nMinimum loan threshold of Rs 1.6 Million and a maximum ceiling of Rs 10 Million.\r\nAll types of facilities i.e. funded as well as non funded facilities available.</div>', 'Kathmandu', NULL, NULL, '2020-09-25 20:54:30', '2020-11-12 10:00:29', NULL, '2020-09-17');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `text` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `image`, `text`, `created_at`, `updated_at`) VALUES
(8, 'गरिखाने अभियान', '16142501691614250169.jpg', '<p><span style=\"color:#ff0000\"><strong><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;; font-size:20.0pt\">गरिखाने अभियान</span></strong></span></p>', '2020-02-19 22:29:50', '2021-07-06 10:33:30'),
(11, 'गरिखाने अभियान', '16142501431614250143.jpg', '<p><span style=\"color:#ff0000\"><strong><span style=\"font-size:26px\">गरिखाने अभियान </span></strong></span></p>', '2020-12-22 10:26:42', '2021-07-06 10:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `comitee_member`
--

CREATE TABLE `comitee_member` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `position` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `type` varchar(225) DEFAULT NULL,
  `state` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comitee_member`
--

INSERT INTO `comitee_member` (`id`, `name`, `image`, `position`, `created_at`, `updated_at`, `type`, `state`) VALUES
(2, 'मा.  बिनोद चौधरी', '16256474541625647454.png', 'संयोजक', '2020-12-25 23:13:39', '2021-07-11 05:15:21', 'board', NULL),
(3, 'मा. इन्द्र बानियाँ', '16256475991625647599.png', 'सह-संयोजक', '2020-12-25 23:14:09', '2021-07-11 05:14:44', 'board', NULL),
(4, 'मा. उमेश श्रेष्ठ', '16256479751625647975.png', 'सह-संयोजक', '2021-01-06 01:42:12', '2021-07-11 05:14:27', 'board', NULL),
(5, 'श्री दिपक खड्का', '16256482191625648219.png', 'सह-संयोजक', '2021-01-06 01:52:37', '2021-07-07 08:56:59', 'board', NULL),
(6, 'श्री अनिल रुंगटा', '16256485891625648589.png', 'सह-संयोजक', '2020-12-25 23:13:03', '2021-07-07 09:03:09', 'board', NULL),
(14, 'श्री योगराज कंडेल शर्मा', '16257286501625728650.png', 'प्रमुख कार्यकारी अधिकृत', '2021-02-01 11:48:45', '2021-07-11 05:02:46', 'commite', NULL),
(15, 'श्री सुनिल अर्याल', '16257286291625728629.png', 'सूचना प्रविधि प्रवन्धक', '2021-02-01 11:51:08', '2021-07-08 07:17:09', 'commite', NULL),
(17, 'मा. जिप छिरिङ लामा', '16256494081625649408.png', 'सदस्य', '2021-07-07 09:16:48', '2021-07-07 09:16:48', 'board', NULL),
(18, 'श्री टेकबहादुर गुरुङ', '16256498101625649810.png', 'सदस्य', '2021-07-07 09:23:30', '2021-07-07 09:23:30', 'board', NULL),
(19, 'मा. तेजुलाल चौधरी', '16256498911625649891.png', 'सदस्य', '2021-07-07 09:24:51', '2021-07-07 09:24:51', 'board', NULL),
(20, 'मा. कर्मा घले', '16256499681625649968.png', 'सदस्य', '2021-07-07 09:26:08', '2021-07-07 09:26:08', 'board', NULL),
(21, 'मा. मोहन आचार्य', '16256500331625650033.png', 'सदस्य', '2021-07-07 09:27:13', '2021-07-07 09:27:13', 'board', NULL),
(22, 'श्री पुर्णबहादुर तामाङ', '16256501231625650123.png', 'सदस्य', '2021-07-07 09:28:43', '2021-07-07 09:28:43', 'board', NULL),
(23, 'श्री छत्र गिरी', '16256502341625650234.png', 'सदस्य', '2021-07-07 09:30:34', '2021-07-07 09:30:34', 'board', NULL),
(24, 'श्री खगेश्वर वोहरा', '16264300711626430071.png', 'सदस्य', '2021-07-07 09:31:39', '2021-07-16 04:22:51', 'board', NULL),
(25, 'श्री विष्णु बहादुर खड्का', '16256503631625650363.png', 'सदस्य', '2021-07-07 09:32:43', '2021-07-15 01:33:37', 'board', NULL),
(26, 'श्री हिमबहादुर रावल', '16256505091625650509.png', 'सदस्य', '2021-07-07 09:35:09', '2021-07-07 09:35:09', 'board', NULL),
(27, 'श्री विन्दु थापा', '16256505851625650585.png', 'सदस्य', '2021-07-07 09:36:25', '2021-07-07 09:36:25', 'board', NULL),
(28, 'श्री भक्त प्रहलाद पाण्डे', '16256506371625650637.png', 'सदस्य', '2021-07-07 09:37:17', '2021-07-07 09:37:17', 'board', NULL),
(29, 'श्री किरण के. सी.', '16264300481626430048.png', 'सदस्य', '2021-07-07 09:42:00', '2021-07-16 04:22:28', 'board', NULL),
(30, 'श्री विमल ढकाल', '16256509471625650947.png', 'सदस्य', '2021-07-07 09:42:27', '2021-07-07 09:42:27', 'board', NULL),
(31, 'श्री राजु नेपाल', '16256510301625651030.png', 'सदस्य सचिव', '2021-07-07 09:43:50', '2021-07-07 09:43:50', 'board', NULL),
(32, 'श्री विराज पौडेल', '16257287931625728793.png', 'प्रशासन तथा वित्त प्रवन्धक', '2021-07-08 07:19:53', '2021-07-11 05:09:11', 'commite', NULL),
(33, 'श्री चुडामणि कंडेल', '16257288661625728866.png', 'राजनीतिक परिचालन तथा जनसम्पर्क संयोजक', '2021-07-08 07:21:06', '2021-07-11 05:10:55', 'commite', NULL),
(34, 'श्री गंगा लामिछाने', '16257294561625729456.png', 'सम्पर्क व्यक्ति, हेटौडा कार्यालय', '2021-07-08 07:30:56', '2021-07-11 05:13:07', 'commite', NULL),
(35, 'श्री गरिमा बुढाथोकी', '16257295201625729520.png', 'सम्पर्क व्यक्ति, हेटौडा कार्यालय', '2021-07-08 07:32:00', '2021-07-11 05:12:49', 'commite', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactfrom`
--

CREATE TABLE `contactfrom` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `address` mediumtext DEFAULT NULL,
  `enquiry` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactfrom`
--

INSERT INTO `contactfrom` (`id`, `name`, `email`, `phone`, `address`, `enquiry`, `created_at`, `updated_at`) VALUES
(1, 'suraj', 'rama@gmail.com', 9876780876, 'Newroad, Pokhara', 'asassasas', '2020-09-22 01:04:22', '2020-09-22 01:04:22'),
(2, 'rama', 'rama@gmail.com', 9876780876, 'Newroad, Pokhara', 'asdfasfasfsfs', '2020-09-22 01:13:55', '2020-09-22 01:13:55'),
(3, 'suraj', 'sorajduwal8@gmail.com', 9876780876, 'Newroad, Pokhara', 'asfsfsfsfsfsfsaf', '2020-09-22 01:14:50', '2020-09-22 01:14:50'),
(4, 'rama', 'rama@gmail.com', 9876780876, 'Newroad, Pokhara', 'asasaas', '2020-09-22 01:16:53', '2020-09-22 01:16:53'),
(5, 'Ashok Shrestha', 'shrestha.ashok200@gmail.com', 981231232, 'satungal', '2131231231231', '2020-10-17 09:35:39', '2020-10-17 09:35:39'),
(6, 'Ashok Shrestha', 'shrestha.ashok200@gmail.com', 981231232, 'satungal', 'Wedddasdasda', '2020-10-17 09:36:08', '2020-10-17 09:36:08'),
(7, 'Sunil1', 'aryalsu@hotmail.com', 9842144769, NULL, 'Test1', '2021-01-10 04:32:13', '2021-01-10 04:32:13'),
(8, 'sdsdsdsd', 'sdsdsd@gmail.com', 54677778776, NULL, 'hey this is a rtesd af', '2021-01-12 11:02:08', '2021-01-12 11:02:08'),
(9, 'sdsdsdsd', 'sdsdsd@gmail.com', 54677778776, NULL, 'hey this is a rtesd af', '2021-01-12 11:02:44', '2021-01-12 11:02:44'),
(10, 'suraj', 'aa@gmail.com', NULL, NULL, 'dfdfgdsgdfdg', '2021-01-30 08:09:11', '2021-01-30 08:09:11'),
(11, 'surajss', '123@gmail.com', NULL, NULL, 'sdsdsdsd', '2021-01-30 08:12:41', '2021-01-30 08:12:41'),
(12, 'surajaA', 'ASD@GMAIL.COM', NULL, NULL, 'ASDFSFSAFDAFDA', '2021-01-30 08:14:33', '2021-01-30 08:14:33'),
(16, 'Kiran Thapa', 'raysthapa@gmail.com', NULL, NULL, 'Dear sir/madam,\nGood morning.\n\nIt\'s me Kiran Thapa, from Butwal Nepal. This morning, going through Facebook I  read the news about your tie up with Citizen Bank to grant loan who have skill in there hand. \n\nSir/madam I have earned 2years carpentry training and since last 16 years I am working with wood. And now I am planing to open my own furniture outlet in Rupandehi district. \n\nPlease let me know if your facilitation is available here in Butwal. \n\nThanks and Regards\nKiran Thapa\nButwal', '2021-02-09 03:13:47', '2021-02-09 03:13:47'),
(17, 'suinil1', 'aryalsu@hotmail.com', 9842144769, NULL, 'Test', '2021-02-09 11:00:19', '2021-02-09 11:00:19'),
(18, 'Kim Bratcher', 'kim.bratcher@gmail.com', NULL, NULL, 'Hi There,\r\n\r\nAre you currently operating Wordpress/Woocommerce or do you actually plan to utilise it sometime soon ? We currently provide much more than 5000 premium plugins along with themes to download : http://shortsg.buzz/Y0wAZ\r\n\r\nCheers,\r\n\r\nKim', '2021-02-11 11:09:36', '2021-02-11 11:09:36'),
(19, 'Kaski, Pokhara', 'paarcnepal@gmail.com', 9856026315, NULL, 'Pokhara Agritourism Academy and Research Centre ( PAARC , Nepal ) is a privately run business organization which is committed for the promotion of Agritourism entrepreneurship  in Nepal based on research and skill development programs.\r\nIt is a form of commercial enterprise that links agricultural production and/or processing with tourism in order to attract visitors onto a farm for the purposes of entertaining and/or educating the visitors and generating income for the farm.\r\nWe bridge rural Nepal to the future of work. We are committed  to make this organization a center of , rural innovation. \r\nWe are proud to claim that this organization is not only focused in profit making but to motivate and encourage to the unemployed youth  to prove themselves a competent entrepreneurs full of innovation and creativity for making them  involved in agro tourism business  in Nepal.\r\nFor making this organization a model organization and aspiration of community youths of Nepal, it needs to work differently with innovative approaches in the agro- tourism sectors.  So, this organization is hopefully looking for your help for giving the message throughout the society that only the agritourism business can bring economic transformation of Nepalese society.\r\nI do hope to see you soon.\r\nThanking you.\r\nSincerely\r\nKishor Dutta Baral\r\nManaging Director', '2021-02-13 01:18:03', '2021-02-13 01:18:03'),
(20, 'suraj', 'asddsaa@gmail.com', 23564789854, NULL, 'asdasdasd', '2021-02-13 05:57:42', '2021-02-13 05:57:42'),
(21, 'suraj', 'asdasdas@gmail.com', 123456789, NULL, 'asdsfsfasfsfasfsd', '2021-02-13 06:09:49', '2021-02-13 06:09:49'),
(22, 'Ashok Shrestha', 'admin@gmail.com', 981231232, NULL, 'ghghj', '2021-02-14 08:31:51', '2021-02-14 08:31:51'),
(23, 'Manoj Sunar', 'manoj-darsahan@yahoo.com', NULL, NULL, 'how to get loan for any business ?', '2021-02-19 13:19:51', '2021-02-19 13:19:51'),
(24, 'Manoj Sunar', 'manoj-darsahan@yahoo.com', NULL, NULL, 'how to get loan for any business ?', '2021-02-19 13:19:53', '2021-02-19 13:19:53'),
(25, 'Manoj Sunar', 'manoj-darsahan@yahoo.com', NULL, NULL, 'how to get loan for any business ?', '2021-02-19 13:19:55', '2021-02-19 13:19:55'),
(26, 'Manoj Sunar', 'manoj-darsahan@yahoo.com', NULL, NULL, 'how to get loan for any business ?', '2021-02-19 13:19:56', '2021-02-19 13:19:56'),
(27, 'Manoj Sunar', 'manoj-darsahan@yahoo.com', NULL, NULL, 'how to get loan for any business ?', '2021-02-19 13:19:57', '2021-02-19 13:19:57'),
(28, 'Manoj Sunar', 'manoj-darsahan@yahoo.com', NULL, NULL, 'how to get loan for any business ?', '2021-02-19 13:20:46', '2021-02-19 13:20:46'),
(29, 'Manoj Sunar', 'manoj-darsahan@yahoo.com', NULL, NULL, 'how to get loan for any business ?', '2021-02-19 13:20:48', '2021-02-19 13:20:48'),
(31, 'RK', 'sa@gmail.com', 9842144769, NULL, 'Test', '2021-02-24 11:14:39', '2021-02-24 11:14:39'),
(32, 'Sunil3', 'aryalsu@hotmail.com', 9842144769, NULL, 'Test 24 Feb 2021', '2021-02-24 11:22:17', '2021-02-24 11:22:17'),
(33, 'Ashok Shrestha', 'shrestha.ashok200@gmail.com', NULL, NULL, 'Test', '2021-02-24 19:05:59', '2021-02-24 19:05:59'),
(34, 'Ashok Shrestha', 'shrestha.ashok200@gmail.com', NULL, NULL, 'Test', '2021-02-24 19:06:01', '2021-02-24 19:06:01'),
(35, 'Ashok Shrestha', 'admin@gmail.com', 981231232, NULL, 'Test emai;', '2021-02-24 19:06:46', '2021-02-24 19:06:46'),
(36, 'Mahendra khadka', 'mahendranisthuri@gmail.com', NULL, NULL, 'sir ma kirshi pesa sambandi bakhra palan suruwad garira xu bebasay badauna ko lagi thap puji ko awasek chha kunai sayog ko apakshya garako chhu ma dhankuta mahalaxmi nagarpalika bata ph 9862055765', '2021-02-26 10:57:52', '2021-02-26 10:57:52'),
(37, 'Mahendra khadka', 'mahendranisthuri@gmail.com', NULL, NULL, 'sir ma kirshi pesa sambandi bakhra palan suruwad garira xu bebasay badauna ko lagi thap puji ko awasek chha kunai sayog ko apakshya garako chhu ma dhankuta mahalaxmi nagarpalika bata ph 9862055765', '2021-02-26 10:57:56', '2021-02-26 10:57:56'),
(38, 'Mahendra khadka', 'mahendranisthuri@gmail.com', NULL, NULL, 'sir ma kirshi pesa sambandi bakhra palan suruwad garira xu bebasay badauna ko lagi thap puji ko awasek chha kunai sayog ko apakshya garako chhu ma dhankuta mahalaxmi nagarpalika bata ph 9862055765', '2021-02-26 10:58:08', '2021-02-26 10:58:08'),
(39, 'Mahendra khadka', 'mahendranisthuri@gmail.com', NULL, NULL, 'sir ma kirshi pesa sambandi bakhra palan suruwad garira xu bebasay badauna ko lagi thap puji ko awasek chha kunai sayog ko apakshya garako chhu ma dhankuta mahalaxmi nagarpalika bata ph 9862055765', '2021-02-26 10:58:21', '2021-02-26 10:58:21'),
(40, 'Hari', 'h@gmail.com', 9842144769, NULL, 'Test Apply', '2021-03-02 07:49:18', '2021-03-02 07:49:18'),
(41, 'Sunil Aryal', 'aryalsu@gmail.com', NULL, NULL, 'Test from Sunil Aryal 4 March 2021', '2021-03-04 08:15:17', '2021-03-04 08:15:17'),
(42, 'Sunil Aryal', 'aryalsu@gmail.com', NULL, NULL, 'Test from Sunil Aryal 4 March 2021', '2021-03-04 08:16:01', '2021-03-04 08:16:01'),
(43, 'sunil Aryal', 'aryalsu@gmail.com', NULL, NULL, 'Test 8 March 2021', '2021-03-08 08:17:51', '2021-03-08 08:17:51'),
(44, 'sunil Aryal', 'aryalsu@gmail.com', NULL, NULL, 'Test 8 March 2021', '2021-03-08 08:21:22', '2021-03-08 08:21:22'),
(45, 'sunil Aryal', 'aryalsu@gmail.com', NULL, NULL, 'Test 8 March 2021', '2021-03-08 08:21:26', '2021-03-08 08:21:26'),
(46, 'RA', 'raju@gmail.com', 9898989898, NULL, 'Test from raju@gmail.com', '2021-03-08 08:22:57', '2021-03-08 08:22:57'),
(49, 'Radha Dahal', 'radha@gmail.com', NULL, NULL, 'Test Radha', '2021-03-15 10:51:53', '2021-03-15 10:51:53'),
(50, 'Radha Dahal', 'radha@gmail.com', NULL, NULL, 'Test Radha', '2021-03-15 10:51:57', '2021-03-15 10:51:57'),
(51, 'Radha Dahal', 'radha@gmail.com', NULL, NULL, 'Test Radha', '2021-03-15 10:52:00', '2021-03-15 10:52:00'),
(52, 'Radha Dahal', 'radha@gmail.com', NULL, NULL, 'Test Radha', '2021-03-15 10:52:15', '2021-03-15 10:52:15'),
(53, 'Hari Nepal', 'hari@gmail.com', 9842100000, NULL, 'Test from Hari', '2021-03-15 10:57:18', '2021-03-15 10:57:18'),
(54, 'Neha Radhi', 'neha@gmail.com', 9843999999, NULL, 'Neha is writing....', '2021-03-15 10:58:39', '2021-03-15 10:58:39'),
(55, 'Radha Dahal', 'radha@gmail.com', 878787676, NULL, 'test', '2021-03-15 11:24:10', '2021-03-15 11:24:10'),
(56, 'suraj', 'rama@gmail.com', 9876780876, 'Newroad, Pokhara', 'asdfasdfasdfasf', '2021-03-15 15:39:33', '2021-03-15 15:39:33'),
(57, 'suraj', 'rama@gmail.com', 9876780876, 'Newroad, Pokhara', 'asdfasdfasdfasf', '2021-03-15 15:39:49', '2021-03-15 15:39:49'),
(58, 'suraj', 'rama@gmail.com', 9876780876, 'Newroad, Pokhara', 'asdfasdfasdfasf', '2021-03-15 15:39:52', '2021-03-15 15:39:52'),
(59, 'suraj', 'rama@gmail.com', 9876780876, 'Newroad, Pokhara', 'asdfasdfasdfasf', '2021-03-15 15:40:22', '2021-03-15 15:40:22'),
(60, 'suraj', 'rama@gmail.com', 9876780876, 'Newroad, Pokhara', 'asdfasdfasdfasf', '2021-03-15 15:40:37', '2021-03-15 15:40:37'),
(61, 'suraj', 'rama@gmail.com', 9876780876, 'Newroad, Pokhara', 'hvvjvj', '2021-03-15 15:52:42', '2021-03-15 15:52:42'),
(62, 'suraj', 'rama@gmail.com', 9876780876, 'asdfasdf', 'asdfasdfasdfsf', '2021-03-16 14:28:17', '2021-03-16 14:28:17'),
(63, 'suraj', 'rama@gmail.com', 9876780876, 'Newroad, Pokhara', 'asdfasdfasdfasdf', '2021-03-16 14:30:07', '2021-03-16 14:30:07'),
(64, 'suraj', 'rama@gmail.com', 9876780876, 'Newroad, Pokhara', 'asdfasdfasdfasdf', '2021-03-16 14:30:13', '2021-03-16 14:30:13'),
(65, 'suraj', 'rama@gmail.com', 9876780876, 'Newroad, Pokhara', 'asdfasdfasdfasdf', '2021-03-16 14:30:17', '2021-03-16 14:30:17'),
(66, 'suraj', 'rama@gmail.com', 9876780876, 'Newroad, Pokhara', 'asdfasdfasdfasdf', '2021-03-16 14:30:18', '2021-03-16 14:30:18'),
(67, 'suraj', 'rama@gmail.com', 9876780876, 'Newroad, Pokhara', 'asdadfasdf', '2021-03-16 14:31:36', '2021-03-16 14:31:36'),
(68, 'suraj', 'rama@gmail.com', 9876780876, 'Newroad, Pokhara', 'asdfasdfasdfasf', '2021-03-16 14:33:06', '2021-03-16 14:33:06'),
(69, 'suraj', 'rama@gmail.com', 9876780876, 'asdfasdfasdf', 'asdfasdfasdfasdf', '2021-03-16 14:36:32', '2021-03-16 14:36:32'),
(70, 'suraj', 'rama@gmail.com', 9876780876, 'Newroad, Pokhara', 'asdfdfa', '2021-03-16 14:38:12', '2021-03-16 14:38:12'),
(71, 'suraj', 'admin@gmail.com', 9876780876, 'bkt', 'asdfasdfasdf', '2021-03-16 14:39:28', '2021-03-16 14:39:28'),
(72, 'suraj', 'rama@gmail.com', 9876780876, 'america', 'asdfasdfasdf', '2021-03-16 14:44:38', '2021-03-16 14:44:38'),
(74, 'Ashok Shrestha', 'shrestha.ashok200@gmail.com', 981231232, 'satungal', 'asds', '2021-03-16 15:26:28', '2021-03-16 15:26:28'),
(75, 'Anil Rungta', 'admin@gmail.com', 9842144769, NULL, 'test', '2021-03-17 07:39:24', '2021-03-17 07:39:24'),
(76, 'aa', 'aryalsu@gmail.com', 9851020088, NULL, 'Test3', '2021-03-17 07:44:39', '2021-03-17 07:44:39'),
(77, 'Apple', 'apple@gmail.com', 90000000, 'Kathmandu', 'Apple Test', '2021-03-19 05:02:50', '2021-03-19 05:02:50'),
(78, 'Orange', 'org@gmail.com', 9999999999, 'BRT', 'Orange Test', '2021-03-19 05:49:52', '2021-03-19 05:49:52'),
(79, 'Mango', 'mango@gmail.com', 9888888888, 'NPJ', 'Test from Mango', '2021-03-19 06:57:03', '2021-03-19 06:57:03'),
(80, 'Larkin ghana chhetri', 'yarjunthapa@gmail.com', 9860842232, 'humdrum 2 pyuthan', 'Maile krishi faram suru garn chahanxu', '2021-03-23 09:16:39', '2021-03-23 09:16:39'),
(81, 'Sagar rai', 'raisagar002@gmail.com', 9860443596, 'Dhankuta 5 municipality', 'Hajur haru ko time deathline kahile samma ho?', '2021-03-28 14:33:04', '2021-03-28 14:33:04'),
(82, 'टेस्ट', 'test@gmail.com', 9842222222, NULL, 'Test from 2842222222', '2021-03-30 11:17:17', '2021-03-30 11:17:17'),
(83, 'Tulasa karki', 'cojent_mrt@yahoo.com', 9851151715, 'Kathmandu', 'Ma yo programme ma aabaddha huna chahanchuu...', '2021-04-14 12:31:05', '2021-04-14 12:31:05'),
(84, 'Tulasa karki', 'cojent_mrt@yahoo.com', 9851151715, 'Kathmandu', 'Ma yo programme ma aabaddha huna chahanchuu...', '2021-04-14 12:31:08', '2021-04-14 12:31:08'),
(85, 'Tulasa karki', 'cojent_mrt@yahoo.com', 9851151715, 'Kathmandu', 'Yo programme ko application form kasari upakabdha hunchha?', '2021-04-14 12:49:50', '2021-04-14 12:49:50'),
(86, 'Test Kumar1', 'test1@gmail.com', 988988987, 'Kathmandu', 'Test message', '2021-04-16 10:02:25', '2021-04-16 10:02:25'),
(87, 'Test Kumar2', 'test2@gmail.com', 8483432333934, 'Hattiwan, Lalitpur-15, Bagmati Province, Nepal', 'test2', '2021-04-16 10:03:38', '2021-04-16 10:03:38'),
(88, 'Test Kumar3', 'test3@gmail.com', 2422323232323232323, 'Birganj', 'Test from Birganj', '2021-04-16 10:05:03', '2021-04-16 10:05:03'),
(92, 'Ashok Shrestha', 'shrestha.ashok200@gmail.com', 981231232, 'satungal', 'Test', '2021-04-16 15:44:26', '2021-04-16 15:44:26'),
(94, 'Ashok Shrestha', 'shrestha.ashok200@gmail.com', 981231232, 'satungal', 'Test', '2021-04-16 15:44:33', '2021-04-16 15:44:33'),
(95, 'Binaya', 'binayaghimire1974@gmail.com', 9843164368, 'abc', 'test', '2021-04-16 17:50:47', '2021-04-16 17:50:47'),
(106, 'ram baran yadhav', 'aa@gm.com', 22222222344555544, 'Dadhikit 1, Biruwa', 'Latest test message', '2021-04-20 10:36:42', '2021-04-20 10:36:42'),
(107, 'Niroj marasini', 'Hotelevergreentamghasgulmi@gmail.com', 9857027987, 'gulmi', 'Good', '2021-04-27 13:06:49', '2021-04-27 13:06:49'),
(108, 'Niroj marasini', 'Hotelevergreentamghasgulmi@gmail.com', 9857027987, 'gulmi', 'Good', '2021-04-27 13:06:50', '2021-04-27 13:06:50'),
(109, 'Purna kc', 'kcpurna394@gmail.com', 9857064394, 'resunga municipality ,ward 3,gulmi', 'send  me  form  of गरि खाने program', '2021-04-28 03:02:50', '2021-04-28 03:02:50'),
(110, 'Purna kc', 'kcpurna394@gmail.com', 9857064394, 'resunga municipality ,ward 3,gulmi', 'send  me  form  of गरि खाने program', '2021-04-28 03:02:57', '2021-04-28 03:02:57'),
(111, 'Bishnu Bhusal', 'bhusalbishnu137@gmail.com', 9851165137, 'Kathmandu', 'Business idea', '2021-05-01 09:40:43', '2021-05-01 09:40:43'),
(112, 'Bishnu Bhusal', 'bhusalbishnu137@gmail.com', 9851165137, 'Kathmandu', 'Business idea', '2021-05-01 09:40:49', '2021-05-01 09:40:49'),
(113, 'Kennethunfag', 'no-replyGauck@gmail.com', 88192693126, 'https://www.no-site.com', 'Hi!  karmabhoomisamaj.com \r\n \r\nDid you know that it is possible to send proposal wholly legit? \r\nWe sell a new legal way of sending request through feedback forms. Such forms are located on many sites. \r\nWhen such messages are sent, no personal data is used, and messages are sent to forms specifically designed to receive messages and appeals. \r\nalso, messages sent through contact Forms do not get into spam because such messages are considered important. \r\nWe offer you to test our service for free. We will send up to 50,000 messages for you. \r\nThe cost of sending one million messages is 49 USD. \r\n \r\nThis message is created automatically. Please use the contact details below to contact us. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693 \r\n \r\nWe only use chat.', '2021-05-05 19:47:40', '2021-05-05 19:47:40'),
(114, 'John Wang', 'noreply@googlemail.com', 86532319679, 'https://www.no-site.com', 'Hello, \r\nI am contacting you regarding a transaction of mutual benefit, I am an Auditor who managed a client\'s account that passed away many years ago with same last name as yours, he passed away without any known relative. \r\nWe can work together mutually to process and receive the funds, let me know if you wish to know more about my proposal and I shall provide you with more information. \r\n \r\nRegards, \r\nMr John Wang \r\njohnwang@kowloonhongkongasia.com', '2021-05-13 18:07:39', '2021-05-13 18:07:39'),
(115, 'Yahoo', 'press@yahoo.com', 87853699651, 'https://www.no-site.com', 'Most profitable cryptocurrency miners has been released : \r\nDBT Miner: $7,500 (Bitcoin), $13,000 (Litecoin), $13,000 (Ethereum), and $15,000 (Monero) \r\n \r\nGBT Miner: $22,500 (Bitcoin), $39,000 (Litecoin), $37,000 (Ethereum), and $45,000 (Monero) \r\nRead more here : \r\nhttps://www.yahoo.com/now/bitwats-release-most-profitable-asic-195600764.html', '2021-05-13 19:28:49', '2021-05-13 19:28:49'),
(116, 'Mazlan Selvi', 'no-replyundunda@gmail.com', 85895674696, 'https://www.no-site.com', 'Dear Friend, \r\n \r\nMy names are Mr. Mezlan Selvi, a lawyer base in Kuala Lumpur - Malaysia. I have previously sent you an email regarding a transaction of US$13.5 Million left behind by my late client before his tragic death but no response from you. \r\n \r\nHowever, I am contacting you once again with strong believe that you will work /partner with me to execute this business transaction in good faith. Please if you are interested in proceeding with me, kindly respond to me via my private email mselvi@ponnusamylawassociates-my.com for more detailed information. \r\n \r\nAs a matter of fact, this transaction is 100% risk free and I look forward to your acknowledgement. \r\n \r\nRegards, \r\nMr. Mazlan Selvi \r\nEmail: mselvi@ponnusamylawassociates-my.com', '2021-05-13 21:30:52', '2021-05-13 21:30:52'),
(117, 'Mike Hoggarth', 'no-reply@google.com', 81391641215, 'https://google.com', 'Greetings \r\n \r\nI have just took a look on your SEO for  karmabhoomisamaj.com for its SEO metrics and saw that your website could use an upgrade. \r\n \r\nWe will enhance your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our plans here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nMike Hoggarth\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2021-05-14 09:33:02', '2021-05-14 09:33:02'),
(118, 'Mike Milton', 'no-replyPlups@gmail.com', 86137117527, 'https://no-site.com', 'Hello \r\n \r\nI have just verified your SEO on  karmabhoomisamaj.com for  the current Local search visibility and seen that your website could use an upgrade. \r\n \r\nWe will improve your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nStart increasing your local visibility with us, today! \r\n \r\nregards \r\nMike Milton\r\n \r\nSpeed SEO Digital Agency \r\nsupport@speed-seo.net', '2021-05-14 11:58:03', '2021-05-14 11:58:03'),
(119, 'Mike Ralphs', 'see-email-in-message@monkeydigital.co', 81844715375, 'https://www.monkeydigital.co/product-category/special-offers/', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your karmabhoomisamaj.com website? \r\nHaving a high DA score, always helps \r\n \r\nGet your karmabhoomisamaj.com to have a DA between 50 to 60 points in Moz with us today and rip the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nNEW: \r\nhttps://www.monkeydigital.co/product/ahrefs-DR50-UR70/ \r\n \r\n \r\nthank you \r\nMike Ralphs\r\n \r\nsupport@monkeydigital.co', '2021-05-14 23:13:43', '2021-05-14 23:13:43'),
(120, 'Sambo Dasuki', 'mmzxxz288@gmail.com', 82482995136, 'https://no-site.com', 'Dear Partner; \r\n \r\nI came across your email contact on Database; Where i was searching for a competent Partner who can handle a lucrative business for me as trustee and manager. I anticipate to read from you soon so I can provide you with more details. \r\n \r\nYours Sincerely, \r\nAlh. Sambo Dasuki \r\nmmzxxz288@gmail.com', '2021-05-19 16:27:11', '2021-05-19 16:27:11'),
(121, 'Mike Mathews', 'no-replyPlups@gmail.com', 84149164523, 'https://no-site.com', 'Hi there \r\n \r\nI have just verified your SEO on  karmabhoomisamaj.com for the Local ranking keywords and seen that your website could use an upgrade. \r\n \r\nWe will enhance your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our plans here, we offer SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nStart increasing your local visibility with us, today! \r\n \r\nregards \r\nMike Mathews\r\n \r\nSpeed SEO Digital Agency \r\nsupport@speed-seo.net', '2021-05-23 01:56:03', '2021-05-23 01:56:03'),
(122, 'Rajiv Michael', 'rajiindian3@gmail.com', 89152465936, 'https://no-site.com', 'Hello Dear, \r\n \r\nI am working directly with a private family portfolio that can provide funding for credible clients with feasible projects. Currently, we have investment funds for viable projects. \r\n \r\nThey are interested in the following: Institution, Library, Hospitals, Green energy, \r\nPower projects, Agriculture and Real Estate. They can also partner with your company on other projects of value. The interest rate and tenure are fantastic. \r\n \r\nYour response is most anticipated if this is of interest to you. Reach me on email: financial@eurocleargroups.email or rajiindian3@gmail.com \r\n \r\n \r\nKind regards, \r\n \r\nRajiv Michael \r\nFinancial Consultant \r\nWhatsApp: +15183802182 \r\nTelegram@ +12092482370 \r\nEuroclear Groups \r\nfinancial@eurocleargroups.email \r\nUrl: http://euroclear.com', '2021-05-26 00:08:03', '2021-05-26 00:08:03'),
(123, 'Mike Goodman', 'no-reply@google.com', 86729224128, 'https://google.com', 'Hello \r\n \r\nI have just took an in depth look on your  karmabhoomisamaj.com for its SEO Trend and saw that your website could use an upgrade. \r\n \r\nWe will increase your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nMike Goodman\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2021-05-28 08:15:36', '2021-05-28 08:15:36'),
(124, 'sailes', 'sall@ss.com', 8899889988, NULL, 'hello k cha bro', '2021-05-31 07:53:29', '2021-05-31 07:53:29'),
(125, 'sailes', 'sail@jk.xom', 6655332663, NULL, 'hello ksksks', '2021-05-31 08:22:00', '2021-05-31 08:22:00'),
(126, 'sailes', 'sail@jk.xom', 6655332663, NULL, 'hello ksksks', '2021-05-31 08:22:01', '2021-05-31 08:22:01'),
(127, 'sailes', 'sail@jk.xom', 6655332663, NULL, 'hello ksksks', '2021-05-31 08:22:09', '2021-05-31 08:22:09'),
(128, 'sailes', 'sail@jk.xom', 6655332663, NULL, 'hello ksksks', '2021-05-31 08:24:52', '2021-05-31 08:24:52'),
(129, 'g', 'g@--fhhhh', 8558, NULL, 'ff', '2021-05-31 08:27:55', '2021-05-31 08:27:55'),
(130, 'sailes', 'sall@ss.com', 8899889988, NULL, 'hello k cha bro', '2021-05-31 08:28:26', '2021-05-31 08:28:26'),
(131, 'fff', 'ddd', 52225555, NULL, 'cdd', '2021-05-31 08:28:47', '2021-05-31 08:28:47'),
(132, 'hhh', 'fff@jh.com', 8555555, NULL, 'gggg', '2021-05-31 08:37:26', '2021-05-31 08:37:26'),
(133, 'ff', 'xd', 555, NULL, 'fff', '2021-05-31 08:49:44', '2021-05-31 08:49:44'),
(134, 'ggg', 'vggg', 99888, NULL, 'cffcc', '2021-05-31 09:05:23', '2021-05-31 09:05:23'),
(135, 'ggg', 'vggg@gmail.com', 99888, NULL, 'cffcc', '2021-05-31 09:05:43', '2021-05-31 09:05:43'),
(136, 'ggg', 'vggg@gmail.com', 99888, NULL, 'cffcc', '2021-05-31 09:06:29', '2021-05-31 09:06:29'),
(137, 'ggg', 'vggg@gmai', 99888, NULL, 'cffcc', '2021-05-31 09:08:08', '2021-05-31 09:08:08'),
(138, 'jjjjj', 'jsjajs@haa.com', 9841379279, NULL, 'svaggaa', '2021-05-31 09:13:41', '2021-05-31 09:13:41'),
(139, 'jjjjj', 'jsjajs@haa.com', 9841379279, NULL, 'svaggaa', '2021-05-31 09:23:34', '2021-05-31 09:23:34'),
(140, 'JesseRew', 'ioo.xv.e.rt.r.is@gmail.com', 86479773491, 'https://opendht.info/millennium-flickan-som-lekte-med-elden-del-2-av-2-swesub-avi-57654-freedl', 'Hello. And Bye.', '2021-06-03 12:00:24', '2021-06-03 12:00:24'),
(141, 'rupendra', 'nrupenz@gmail.com', 9849808029, NULL, 'this is test , please ignore this message', '2021-06-09 16:05:52', '2021-06-09 16:05:52'),
(142, 'Ashok T3st', 'shrestha.ashok@ebpearls.com', 9815245482, NULL, 'test', '2021-06-09 16:19:21', '2021-06-09 16:19:21'),
(143, 'Rupendra Neupane', 'callethereal@gmail.com', 9849000000, NULL, 'this istest from mobile app', '2021-06-10 13:34:06', '2021-06-10 13:34:06'),
(144, 'rupensra', 'nrupenz@gmail.com', 984900000, NULL, 'test from mobile', '2021-06-10 13:59:05', '2021-06-10 13:59:05'),
(145, 'kk', 'fgh@ggn.jjj', 885583354, NULL, 'ufufuu', '2021-06-11 04:54:15', '2021-06-11 04:54:15'),
(146, 'gh', 'ggggg@fgg.jj', 5555555, NULL, 'gff', '2021-06-11 04:58:13', '2021-06-11 04:58:13'),
(147, 'hhg', 'fggh@ghh.com', 555, NULL, 'ffft', '2021-06-11 05:11:46', '2021-06-11 05:11:46'),
(148, 'rupendra', 'nrupenz@gmail.com', 9849800000, NULL, 'test from mobile', '2021-06-11 07:13:55', '2021-06-11 07:13:55'),
(149, 'Mike Coleman', 'no-replyundunda@gmail.com', 88717826967, 'https://karmabhoomisamaj.com', 'Hi there \r\n \r\nIncrease your karmabhoomisamaj.com SEO metrics values with us and get more visibility and exposure for your website. \r\n \r\nMore info: \r\nhttps://www.monkeydigital.org/product/moz-da50-seo-plan/ \r\n \r\nNEW: \r\nhttps://www.monkeydigital.org/product/ahrefs-dr50-ur70-seo-plan/ \r\nhttps://www.monkeydigital.org/product/trust-flow-seo-package/ \r\n \r\n \r\nthank you \r\nMike Coleman', '2021-06-12 03:04:00', '2021-06-12 03:04:00'),
(150, 'Ashlay Hazalton', 'ashlayhazalton36145@gmail.com', 83259873667, 'https://no-site.com', 'Hi, this is Chris. \r\nWho win all online casinos by using FREE BONUS. \r\n \r\nWitch mean, I don’t really spend money in online casinos. \r\n \r\nBut I win every time, and actually, everybody can win by following my directions. \r\n \r\neven you can win! \r\n \r\nSo, if you’re the person, who can listen to someone really smart, you should just try!! \r\n \r\nThe best online casino, that I really recommend is, Vera&John. \r\nEstablished in 2010 and became best online casino in the world. \r\n \r\nThey give you free bonus when you charge more than $50. \r\nIf you charge $50, your bonus is going to be $50. \r\n \r\nIf you charge $500, you get $500 Free bonus. \r\nYou can bet up to $1000. \r\n \r\nJust try roulette, poker, black jack…any games with dealers. \r\nBecause dealers always have to make some to win and, only thing you need to do is to be chosen. \r\n \r\nDon’t ever spend your bonus at slot machines. \r\nYOU’RE GONNA LOSE YOUR MONEY!! \r\n \r\nNext time, I will let you know how to win in online casino against dealers!! \r\n \r\nDon’t forget to open your VERA&JOHN account, otherwise you’re gonna miss even more chances!! \r\n \r\n \r\n \r\nOpen Vera&John account (free) \r\nhttps://bit.ly/3wZkpco', '2021-06-13 05:22:37', '2021-06-13 05:22:37'),
(151, 'Nepal Nepal', 'nepal@nepal.com', 9855646464, NULL, 'This is test message', '2021-06-14 10:05:05', '2021-06-14 10:05:05'),
(152, 'Mike Peterson', 'no-replyPlups@gmail.com', 87878253717, 'https://no-site.com', 'Hi there \r\n \r\nWe will enhance your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our pricelist here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike Peterson\r\n \r\nSpeed SEO Digital Agency', '2021-06-15 20:14:19', '2021-06-15 20:14:19'),
(153, 'Test', 'nrupenz@gmail.com', 9999999999, NULL, 'kdkdk test', '2021-06-17 14:26:03', '2021-06-17 14:26:03'),
(154, 'Mike Hardman', 'no-reply@google.com', 82652142923, 'https://google.com', 'Hi \r\n \r\nI have just checked  karmabhoomisamaj.com for the ranking keywords and saw that your website could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our plans here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart enhancing your sales and leads with us, today! \r\n \r\nregards \r\nMike Hardman\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', '2021-06-22 14:10:52', '2021-06-22 14:10:52'),
(155, 'Jamesdyene', 'no-replyGauck@gmail.com', 88186686484, 'https://www.no-site.com', 'Hi!  karmabhoomisamaj.com \r\n \r\nDo you know the easiest way to state your product or services? Sending messages using contact forms will enable you to simply enter the markets of any country (full geographical coverage for all countries of the world).  The advantage of such a mailing  is that the emails which will be sent through it\'ll find yourself in the mailbox that is supposed for such messages. Sending messages using Feedback forms isn\'t blocked by mail systems, which means it\'s absolute to reach the recipient. You will be ready to send your offer to potential customers who were antecedently unobtainable due to email filters. \r\nWe offer you to test our service for free. We will send up to 50,000 message for you. \r\nThe cost of sending one million messages is us $ 49. \r\n \r\nThis offer is created automatically. Please use the contact details below to contact us. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693 \r\nWe only use chat.', '2021-06-28 06:58:03', '2021-06-28 06:58:03'),
(156, 'JesseRew', 'io.o.xv.e.rtr.is@gmail.com', 87942688818, 'https://opendht.info/18-japanese-movie-sex-with-diet-02-2017-720p-hdrip-3997122-freedl', 'Hello. And Bye.', '2021-07-01 19:12:19', '2021-07-01 19:12:19'),
(157, 'Nepal', 'nepal@gmail.com', 9842144769, NULL, 'Intrested', '2021-07-07 06:13:10', '2021-07-07 06:13:10');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `pradesh_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`, `pradesh_id`, `created_at`, `updated_at`) VALUES
(1, 'ताप्लेजुंग', 1, '2020-10-30 22:26:20', '2020-10-30 22:26:20'),
(2, 'पाँचथर', 1, '2020-10-30 22:26:20', '2020-10-30 22:26:20'),
(3, 'इलाम', 1, '2020-10-30 22:26:20', '2020-10-30 22:26:20'),
(4, 'झापा', 1, '2020-10-30 22:26:20', '2020-10-30 22:26:20'),
(5, 'संखुवासभा', 1, '2020-10-30 22:26:20', '2020-10-30 22:26:20'),
(6, 'तेर्हथुम', 1, '2020-10-30 22:26:20', '2020-10-30 22:26:20'),
(7, 'भोजपुर', 1, '2020-10-30 22:26:20', '2020-10-30 22:26:20'),
(8, 'धनकुटा', 1, '2020-10-30 22:26:20', '2020-10-30 22:26:20'),
(9, 'मोरङ्ग', 1, '2020-10-30 22:26:20', '2020-10-30 22:26:20'),
(10, 'सुनसरी', 1, '2020-10-30 22:26:20', '2020-10-30 22:26:20'),
(11, 'सोलुखुम्बु', 1, '2020-10-30 22:26:20', '2020-10-30 22:26:20'),
(12, 'खोटाङ्ग', 1, '2020-10-30 22:26:20', '2020-10-30 22:26:20'),
(13, 'ओखलढुंगा', 1, '2020-10-30 22:26:20', '2020-10-30 22:26:20'),
(14, 'उदयपुर', 1, '2020-10-30 22:26:20', '2020-10-30 22:26:20'),
(15, 'सप्तरी', 2, '2020-10-30 22:26:20', '2020-10-30 22:26:20'),
(16, 'सिराहा', 2, '2020-10-30 22:26:20', '2020-10-30 22:26:20'),
(17, 'दोलखा', 3, '2020-10-30 22:26:20', '2020-10-30 22:26:20'),
(18, 'रामेछाप', 3, '2020-10-30 22:26:20', '2020-10-30 22:26:20'),
(19, 'सिन्धुली', 3, '2020-10-30 22:26:20', '2020-10-30 22:26:20'),
(20, 'धनुषा', 2, '2020-10-30 22:26:20', '2020-10-30 22:26:20'),
(21, 'महोत्तरी', 2, '2020-10-30 22:26:20', '2020-10-30 22:26:20'),
(22, 'सर्लाही', 2, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(23, 'रसुवा', 3, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(24, 'धादिंग', 3, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(25, 'नुवाकोट', 3, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(26, 'काठमाडौं', 3, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(27, 'भक्तपुर', 3, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(28, 'ललितपुर', 3, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(29, 'काभ्रेपलाञ्चोक', 3, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(30, 'सिन्धुपाल्चोक', 3, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(31, 'मकवानपुर', 3, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(32, 'रौतहट', 2, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(33, 'बारा', 2, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(34, 'पर्सा', 2, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(35, 'चितवन', 3, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(36, 'गोरखा', 4, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(37, 'मनाङ्ग', 4, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(38, 'लमजुंग', 4, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(39, 'कास्की', 4, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(40, 'तनहुँ', 4, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(41, 'स्याङ्जा', 4, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(42, 'गुल्मी', 5, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(43, 'पाल्पा', 5, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(44, 'अर्घाखांची', 5, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(45, 'नवलपरासी (बर्दघाट सुस्ता पूर्व)', 4, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(46, 'रुपन्देही', 5, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(47, 'कपिलवस्तु', 5, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(48, 'मुस्तांग', 4, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(49, 'म्याग्दी', 4, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(50, 'बागलुङ', 4, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(51, 'पर्वत', 4, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(52, 'रुकुम पूर्व', 5, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(53, 'रोल्पा', 5, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(54, 'प्यूठान', 5, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(55, 'सल्यान', 6, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(56, 'दाङ', 5, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(57, 'डोल्पा', 6, '2020-10-30 22:26:21', '2020-10-30 22:26:21'),
(58, 'मुगु', 6, '2020-10-30 22:26:22', '2020-10-30 22:26:22'),
(59, 'जुम्ला', 6, '2020-10-30 22:26:22', '2020-10-30 22:26:22'),
(60, 'कालिकोट', 6, '2020-10-30 22:26:22', '2020-10-30 22:26:22'),
(61, 'हुम्ला', 6, '2020-10-30 22:26:22', '2020-10-30 22:26:22'),
(62, 'जाजरकोट', 6, '2020-10-30 22:26:22', '2020-10-30 22:26:22'),
(63, 'दैलेख', 6, '2020-10-30 22:26:22', '2020-10-30 22:26:22'),
(64, 'सुर्खेत', 6, '2020-10-30 22:26:22', '2020-10-30 22:26:22'),
(65, 'बाँके', 5, '2020-10-30 22:26:22', '2020-10-30 22:26:22'),
(66, 'बर्दिया', 5, '2020-10-30 22:26:22', '2020-10-30 22:26:22'),
(67, 'बाजुरा', 7, '2020-10-30 22:26:22', '2020-10-30 22:26:22'),
(68, 'अछाम', 7, '2020-10-30 22:26:22', '2020-10-30 22:26:22'),
(69, 'बझाङ्ग', 7, '2020-10-30 22:26:22', '2020-10-30 22:26:22'),
(70, 'डोटी', 7, '2020-10-30 22:26:22', '2020-10-30 22:26:22'),
(71, 'कैलाली', 7, '2020-10-30 22:26:22', '2020-10-30 22:26:22'),
(72, 'दार्चुला', 7, '2020-10-30 22:26:22', '2020-10-30 22:26:22'),
(73, 'बैतडी', 7, '2020-10-30 22:26:22', '2020-10-30 22:26:22'),
(74, 'डडेलधुरा', 7, '2020-10-30 22:26:22', '2020-10-30 22:26:22'),
(75, 'कन्चनपुर', 7, '2020-10-30 22:26:22', '2020-10-30 22:26:22'),
(76, 'नवलपरासी (बर्दघाट सुस्ता पश्चिम)', 4, '2020-10-30 22:26:22', '2020-10-30 22:26:22'),
(77, 'रुकुम पश्चिम', 6, '2020-10-30 22:26:22', '2020-10-30 22:26:22');

-- --------------------------------------------------------

--
-- Table structure for table `enterprenure`
--

CREATE TABLE `enterprenure` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_type` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `pradesh` varchar(225) NOT NULL,
  `district` text NOT NULL,
  `vdc` text NOT NULL,
  `ward` text NOT NULL,
  `caste` text NOT NULL,
  `gender` varchar(225) NOT NULL,
  `tole` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL,
  `education` text NOT NULL,
  `ob1` text NOT NULL,
  `ob2` text NOT NULL,
  `ob3` text NOT NULL,
  `ob4` text NOT NULL,
  `ob5` text NOT NULL,
  `ob6` text NOT NULL,
  `ob7` text NOT NULL,
  `ob8` text NOT NULL,
  `ob9` text NOT NULL,
  `ob10` text NOT NULL,
  `ob11` text NOT NULL,
  `ob12` text NOT NULL,
  `ob13` mediumtext NOT NULL,
  `ob14` mediumtext NOT NULL,
  `ob15` mediumtext NOT NULL,
  `ob16` mediumtext NOT NULL,
  `ob17` mediumtext NOT NULL,
  `ob18` text NOT NULL,
  `ob19` text NOT NULL,
  `ob20` text NOT NULL,
  `ob21` text NOT NULL,
  `ob22` text NOT NULL,
  `ob23` text NOT NULL,
  `ob24` text NOT NULL,
  `ob25` text NOT NULL,
  `ob26` text NOT NULL,
  `ob27` text NOT NULL,
  `ob28` text NOT NULL,
  `ob29` text NOT NULL,
  `ob30` text NOT NULL,
  `ob31` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enterprenure`
--

INSERT INTO `enterprenure` (`id`, `user_id`, `user_type`, `name`, `address`, `pradesh`, `district`, `vdc`, `ward`, `caste`, `gender`, `tole`, `date`, `education`, `ob1`, `ob2`, `ob3`, `ob4`, `ob5`, `ob6`, `ob7`, `ob8`, `ob9`, `ob10`, `ob11`, `ob12`, `ob13`, `ob14`, `ob15`, `ob16`, `ob17`, `ob18`, `ob19`, `ob20`, `ob21`, `ob22`, `ob23`, `ob24`, `ob25`, `ob26`, `ob27`, `ob28`, `ob29`, `ob30`, `ob31`, `created_at`, `updated_at`) VALUES
(1, 34, 'web', 'saafsfasf', 'asdfsfasdf', 'प्रदेश नं १', 'ताप्लेजुंग', 'याङवरक गाउँपालिका', '12', 'उपेक्षित जनजाति (पहाडे: मगर, राई, लिम्बु, गुरुङ, तामाङ, भोटे, शेर्पा, लामा, वालुंग, ब्याँसी, घर्ती, भुजेल, कुमाल, सुनुवार, लेप्चा, मेचे, जिरेल र घिरेल; तराई/ मधेशी: थारु, धानुक, राजबंशी, ताजपुरिया, गंगाई, धिमाल, मेचे, किसान, मुण्डा, सतार, दनुवार, झाँगड/ढाँगड, कोचे, पतरकट्टा, कुसबडीया)', 'महिला', 'asdfsafd', '2014-01-23', 'स्नातकोत्तर', 'हो', 'भारत', '४ महिना', 'करार अन्त्य', 'पर्यटन', 'व्यवसाय (२ वर्ष देखि दर्ता भई संचालित)', 'छ', 'sdsdfasfsfs', '१ लाख भन्दा मुनी', '१ लाख भन्दा मुनी', '१ लाख देखि ५ लाख सम्म', '१ लाख देखि ५ लाख सम्म', '१ लाख देखि ५ लाख सम्म', '१ लाख देखि ५ लाख सम्म', 'छ', 'छैन', 'छ', 'कृषि', 'सेल्स तथा मार्केटिंग', 'छ', 'प्रक्रिया नै शुरु गरेको छैन', 'छ', 'कृषि', 'होइन', 'कृषि', 'sdasdfasfsafsdf', 'व्यवस्थापन', '१ वर्ष भन्दा कम', 'कृषि', 'छु', '56565', '2020-09-23 10:02:02', '2020-09-23 10:02:02');

-- --------------------------------------------------------

--
-- Table structure for table `entrepreneurship_processes`
--

CREATE TABLE `entrepreneurship_processes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `entrepreneurship_processes`
--

INSERT INTO `entrepreneurship_processes` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'उद्यमशीलताको प्रक्रिया', '<div class=\"table-responsive\">\r\n<table class=\"table\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>उद्यमशीलताको प्रक्रिया &nbsp;<br />\r\n			प्रथम चरणः<br />\r\n			नव उद्यमी वा उद्यमी वेरोजगारको पहिचान तथा दर्ता ।</p>\r\n\r\n			<p>दोश्रो चरणः<br />\r\n			लगानीयोग्य परियोजनाको संकलन ।</p>\r\n\r\n			<p>तेश्रो चरणः<br />\r\n			परियोजना प्रस्ताव विकास ।</p>\r\n\r\n			<p>चौथो चरणः<br />\r\n			सल्लाह तथा परामर्श ।</p>\r\n\r\n			<p>पाँचौं चरणः<br />\r\n			वित्तिय व्यवस्थापन तथा लेखा साक्षरता ।</p>\r\n\r\n			<p>छैठौं चरणः<br />\r\n			वित्त, प्रविधि र ज्ञानमा पहुँच ।</p>\r\n\r\n			<p>सातौं चरणः<br />\r\n			निरिक्षण तथा अनुगमन ।</p>\r\n\r\n			<p>आठौं चरणः<br />\r\n			बजारीकरणमा सहयोग ।</p>\r\n			</td>\r\n			<td><img alt=\"\" src=\"https://garikhane.com/images/garikhane.gif\" style=\"height:450px; width:600px\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n\r\n<p>&nbsp;</p>', '16259992801625999280.JPG', '2021-07-11 04:43:00', '2021-07-15 23:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(225) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `bgimage` varchar(225) DEFAULT NULL,
  `description` text NOT NULL,
  `location` varchar(191) NOT NULL,
  `price` varchar(225) DEFAULT NULL,
  `meta_title` varchar(225) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `image`, `bgimage`, `description`, `location`, `price`, `meta_title`, `meta_description`, `created_at`, `updated_at`, `status`, `date`) VALUES
(16, 'ललितपुर - उद्यमशीलता सम्बन्धि अभिमुखीकरण', '16261646931626164693.png', NULL, '<p>उद्यमशीलता सम्बन्धि अभिमुखीकरण</p>\r\n\r\n<p>अभिमुखीकरण कर्ता : श्री राजु नेपाल, सदस्य सचिव</p>\r\n\r\n<p>मिति : २०७७ माघ ६ गते</p>\r\n\r\n<p>स्थान : कर्मभूमि समाज, हात्तिवन</p>', 'Karmabhoomi Samaj, Hattiwan, Lalitpur-15', '0', '001', NULL, '2021-01-20 02:18:38', '2021-07-13 02:39:53', 1, '2021-01-19'),
(17, 'बिरगंज - उद्यमशीलता र वित्तीय साक्षरता अभिमुखीकरण कार्यक्रम', '16261644731626164473.png', NULL, '<p>बिरगंज - उद्यमशीलता र वित्तीय साक्षरता अभिमुखीकरण कार्यक्रम</p>', 'बिरगंज', '0', '0', NULL, '2021-01-27 04:36:25', '2021-07-13 02:36:13', 1, '2021-01-27'),
(18, 'हेटौडा - उद्यमशीलता र वित्तीय साक्षरता अभिमुखीकरण कार्यक्रम', '16261642561626164256.png', NULL, '<p>हेटौडा - उद्यमशीलता र वित्तीय साक्षरता अभिमुखीकरण कार्यक्रम</p>', 'हेटौडा', '0', '0', NULL, '2021-01-27 04:36:42', '2021-07-13 02:32:36', 1, '2021-01-28'),
(19, 'मुगलिङ - उद्यमशीलता र वित्तीय साक्षरता अभिमुखीकरण कार्यक्रम', '16261638811626163881.png', NULL, '<p>मुगलिङ - उद्यमशीलता र वित्तीय साक्षरता अभिमुखीकरण कार्यक्रम</p>', 'मुगलिङ', '0', NULL, NULL, '2021-01-27 04:43:56', '2021-07-13 02:26:21', 1, '2021-01-29'),
(20, 'पोखरा - उद्यमशीलता र वित्तीय साक्षरता अभिमुखीकरण कार्यक्रम', '16261636531626163653.png', NULL, '<p>उद्यमशीलता र वित्तीय साक्षरता अभिमुखीकरण कार्यक्रम</p>', 'पोखरा', '0', NULL, NULL, '2021-01-27 04:45:11', '2021-07-13 02:22:33', 1, '2021-01-30'),
(22, 'झापा - उद्यमशीलता र वित्तीय साक्षरता अभिमुखीकरण कार्यक्रम', '16261634681626163468.png', NULL, '<p>उद्यमशीलता र वित्तीय साक्षरता अभिमुखीकरण कार्यक्रम-&nbsp; झापा &nbsp; - १७ फाल्गुन २०७७</p>', 'झापा', '0', NULL, NULL, '2021-02-11 11:48:08', '2021-07-13 02:19:28', 1, '2021-03-01'),
(28, 'रौतहट - उद्यमशीलता र वित्तीय साक्षरता अभिमुखीकरण कार्यक्रम', '16261634541626163454.png', NULL, '<p>प्रमुख प्रशिक्षक : डा. प्रभु बुढाथोकी, योगराज कंडेल शर्मा तथा चुडामणि कंडेल</p>', 'रौतहट', '0', NULL, NULL, '2021-03-19 06:30:07', '2021-07-13 02:19:14', 1, '2021-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `event_user`
--

CREATE TABLE `event_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `type` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_user`
--

INSERT INTO `event_user` (`id`, `user_id`, `event_id`, `type`, `created_at`, `updated_at`) VALUES
(9, 33, 2, 'web', '2020-10-16 02:56:39', '2020-10-16 02:56:39'),
(10, 33, 15, 'web', '2020-12-28 05:03:31', '2020-12-28 05:03:31'),
(11, 43, 14, 'web', '2020-12-28 05:08:36', '2020-12-28 05:08:36'),
(12, 34, 22, 'web', '2021-03-16 15:51:57', '2021-03-16 15:51:57'),
(13, 34, 20, 'web', '2021-03-16 15:54:47', '2021-03-16 15:54:47'),
(14, 34, 20, 'web', '2021-03-16 15:54:47', '2021-03-16 15:54:47'),
(15, 72, 28, 'web', '2021-03-26 08:03:00', '2021-03-26 08:03:00'),
(16, 115, 22, 'mobile', '2021-05-31 13:39:47', '2021-05-31 13:39:47'),
(17, 116, 28, 'mobile', '2021-05-31 14:26:10', '2021-05-31 14:26:10'),
(18, 116, 20, 'mobile', '2021-05-31 14:33:15', '2021-05-31 14:33:15'),
(19, 116, 19, 'mobile', '2021-05-31 14:57:13', '2021-05-31 14:57:13'),
(20, 83, 22, 'mobile', '2021-06-01 10:58:40', '2021-06-01 10:58:40'),
(21, 83, 28, 'mobile', '2021-06-07 11:48:23', '2021-06-07 11:48:23'),
(22, 83, 29, 'mobile', '2021-06-07 16:43:46', '2021-06-07 16:43:46'),
(23, 156, 29, 'mobile', '2021-06-10 10:47:53', '2021-06-10 10:47:53'),
(24, 174, 29, 'mobile', '2021-06-14 10:05:33', '2021-06-14 10:05:33'),
(25, 189, 28, 'mobile', '2021-07-06 17:17:40', '2021-07-06 17:17:40'),
(26, 189, 16, 'mobile', '2021-07-06 17:18:36', '2021-07-06 17:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `ans` text NOT NULL,
  `file` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `ans`, `file`, `created_at`, `updated_at`) VALUES
(7, 'परियोजनाको लागि कसरी फारम भर्ने ?', '<p>परियोजनाको लागि निम्न लिंकको मदतले अनलाइन फर्म भर्ने :<a href=\"https://forms.gle/DWpEP8yBmEugDvzu6\">यहाँ क्लिक गर्नुहोस</a> :</p>', '16150984321615098432.png', '2021-03-07 06:27:12', '2021-06-15 17:50:01'),
(8, 'Test question', '<p><strong>Test answers</strong></p>\r\n\r\n<p><strong>test&nbsp;</strong></p>', NULL, '2021-06-15 17:52:43', '2021-06-15 17:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `fixed_capitals`
--

CREATE TABLE `fixed_capitals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `karmabhomi_id` int(11) DEFAULT NULL,
  `fixed_property` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approx_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fixed_capitals`
--

INSERT INTO `fixed_capitals` (`id`, `karmabhomi_id`, `fixed_property`, `approx_price`, `details`, `remarks`, `created_at`, `updated_at`) VALUES
(23, 4, 'F1', '3', 'sdfs', 'sfds', '2021-04-16 08:54:22', '2021-04-16 08:54:22'),
(24, 4, 'F2', '4', 'fsdf', 'sfs', '2021-04-16 08:54:22', '2021-04-16 08:54:22'),
(25, 5, 'dfs', 'df', 'df', 'df', '2021-04-16 17:02:24', '2021-04-16 17:02:24'),
(27, 7, 'kei na kei', '232332', 'kei na kei', 'asdads', '2021-04-20 11:15:46', '2021-04-20 11:15:46'),
(28, 8, '3434', '232332', '3434', '343', '2021-04-22 08:16:18', '2021-04-22 08:16:18'),
(29, 9, 'Dolore rem aut inventore eveniet quasi quia ratione odit consequatur.', '652-169-1244', 'tests', 'Eum soluta omnis maxime nulla.', '2021-06-18 08:49:16', '2021-06-18 08:49:16'),
(30, 10, 'shshrtn', 'ghmmfym', 'gnrhredfb', 'gsrhserhreh', '2021-06-21 04:42:59', '2021-06-21 04:42:59'),
(31, 11, 'shshrtn', 'ghmmfym', 'gnrhredfb', 'gsrhserhreh', '2021-06-21 05:13:28', '2021-06-21 05:13:28'),
(32, 12, 'shshrtn', 'ghmmfym', 'gnrhredfb', 'gsrhserhreh', '2021-06-21 05:59:18', '2021-06-21 05:59:18'),
(33, 13, 'shshrtn', 'ghmmfym', 'gnrhredfb', 'gsrhserhreh', '2021-06-21 06:23:55', '2021-06-21 06:23:55'),
(34, 14, 'shshrtn', 'ghmmfym', 'gnrhredfb', 'gsrhserhreh', '2021-06-21 06:24:33', '2021-06-21 06:24:33'),
(35, 15, 'shshrtn', 'ghmmfym', 'gnrhredfb', 'gsrhserhreh', '2021-06-21 16:08:56', '2021-06-21 16:08:56'),
(36, 16, 'shshrtn', 'ghmmfym', 'gnrhredfb', 'gsrhserhreh', '2021-06-21 16:10:51', '2021-06-21 16:10:51'),
(37, 17, 'shshrtn', 'ghmmfym', 'gnrhredfb', 'gsrhserhreh', '2021-06-21 16:11:00', '2021-06-21 16:11:00'),
(38, 18, 'shshrtn', 'ghmmfym', 'gnrhredfb', 'gsrhserhreh', '2021-06-22 16:44:43', '2021-06-22 16:44:43'),
(39, 22, 'nddb', 'dbddh', 'dbdh', 'dd', '2021-06-27 06:56:27', '2021-06-27 06:56:27'),
(40, 23, 'nddb', 'dbddh', 'dbdh', 'dd', '2021-06-27 07:11:07', '2021-06-27 07:11:07'),
(41, 24, 'grr', 'ttt', 'rtr', 'drr', '2021-06-28 09:27:47', '2021-06-28 09:27:47'),
(42, 25, 'heheje', 'rjrjr', 'ejrjr', 'djejjr', '2021-07-05 07:25:18', '2021-07-05 07:25:18'),
(43, 26, 'Habs', '100919', 'Hwn', 'Hshe', '2021-07-06 15:56:16', '2021-07-06 15:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gari_khane_intros`
--

CREATE TABLE `gari_khane_intros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gari_khane_intros`
--

INSERT INTO `gari_khane_intros` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'गरिखाने अभियान', '<p><a href=\"javascript:void(0)\" id=\"cke_101_uiElement\" style=\"user-select: none;\" title=\"OK\"><!--[if gte mso 9]><xml>\r\n <o:OfficeDocumentSettings>\r\n  <o:AllowPNG/>\r\n </o:OfficeDocumentSettings>\r\n</xml><![endif]--><!--[if gte mso 9]><xml>\r\n <w:WordDocument>\r\n  <w:View>Normal</w:View>\r\n  <w:Zoom>0</w:Zoom>\r\n  <w:TrackMoves/>\r\n  <w:TrackFormatting/>\r\n  <w:PunctuationKerning/>\r\n  <w:ValidateAgainstSchemas/>\r\n  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>\r\n  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>\r\n  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>\r\n  <w:DoNotPromoteQF/>\r\n  <w:LidThemeOther>EN-US</w:LidThemeOther>\r\n  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>\r\n  <w:LidThemeComplexScript>NE</w:LidThemeComplexScript>\r\n  <w:Compatibility>\r\n   <w:BreakWrappedTables/>\r\n   <w:SnapToGridInCell/>\r\n   <w:WrapTextWithPunct/>\r\n   <w:UseAsianBreakRules/>\r\n   <w:DontGrowAutofit/>\r\n   <w:SplitPgBreakAndParaMark/>\r\n   <w:EnableOpenTypeKerning/>\r\n   <w:DontFlipMirrorIndents/>\r\n   <w:OverrideTableStyleHps/>\r\n  </w:Compatibility>\r\n  <m:mathPr>\r\n   <m:mathFont m:val=\"Cambria Math\"/>\r\n   <m:brkBin m:val=\"before\"/>\r\n   <m:brkBinSub m:val=\"&#45;-\"/>\r\n   <m:smallFrac m:val=\"off\"/>\r\n   <m:dispDef/>\r\n   <m:lMargin m:val=\"0\"/>\r\n   <m:rMargin m:val=\"0\"/>\r\n   <m:defJc m:val=\"centerGroup\"/>\r\n   <m:wrapIndent m:val=\"1440\"/>\r\n   <m:intLim m:val=\"subSup\"/>\r\n   <m:naryLim m:val=\"undOvr\"/>\r\n  </m:mathPr></w:WordDocument>\r\n</xml><![endif]--><!--[if gte mso 9]><xml>\r\n <w:LatentStyles DefLockedState=\"false\" DefUnhideWhenUsed=\"false\"\r\n  DefSemiHidden=\"false\" DefQFormat=\"false\" DefPriority=\"99\"\r\n  LatentStyleCount=\"371\">\r\n  <w:LsdException Locked=\"false\" Priority=\"0\" QFormat=\"true\" Name=\"Normal\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 7\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 8\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 9\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 6\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 7\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 8\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 9\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 7\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 8\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 9\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Normal Indent\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"footnote text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"annotation text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"header\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"footer\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index heading\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"35\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"caption\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"table of figures\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"envelope address\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"envelope return\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"footnote reference\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"annotation reference\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"line number\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"page number\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"endnote reference\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"endnote text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"table of authorities\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"macro\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"toa heading\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Bullet\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Number\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Bullet 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Bullet 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Bullet 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Bullet 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Number 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Number 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Number 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Number 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"10\" QFormat=\"true\" Name=\"Title\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Closing\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Signature\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"1\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"Default Paragraph Font\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text Indent\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Continue\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Continue 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Continue 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Continue 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Continue 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Message Header\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"11\" QFormat=\"true\" Name=\"Subtitle\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Salutation\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Date\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text First Indent\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text First Indent 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Note Heading\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text Indent 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text Indent 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Block Text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Hyperlink\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"FollowedHyperlink\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"22\" QFormat=\"true\" Name=\"Strong\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"20\" QFormat=\"true\" Name=\"Emphasis\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Document Map\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Plain Text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"E-mail Signature\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Top of Form\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Bottom of Form\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Normal (Web)\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Acronym\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Address\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Cite\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Code\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Definition\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Keyboard\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Preformatted\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Sample\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Typewriter\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Variable\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Normal Table\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"annotation subject\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"No List\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Outline List 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Outline List 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Outline List 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Simple 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Simple 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Simple 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Classic 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Classic 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Classic 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Classic 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Colorful 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Colorful 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Colorful 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Columns 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Columns 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Columns 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Columns 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Columns 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 6\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 7\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 8\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 6\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 7\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 8\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table 3D effects 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table 3D effects 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table 3D effects 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Contemporary\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Elegant\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Professional\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Subtle 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Subtle 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Web 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Web 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Web 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Balloon Text\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"Table Grid\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Theme\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" Name=\"Placeholder Text\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"1\" QFormat=\"true\" Name=\"No Spacing\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" Name=\"Revision\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"34\" QFormat=\"true\"\r\n   Name=\"List Paragraph\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"29\" QFormat=\"true\" Name=\"Quote\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"30\" QFormat=\"true\"\r\n   Name=\"Intense Quote\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"19\" QFormat=\"true\"\r\n   Name=\"Subtle Emphasis\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"21\" QFormat=\"true\"\r\n   Name=\"Intense Emphasis\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"31\" QFormat=\"true\"\r\n   Name=\"Subtle Reference\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"32\" QFormat=\"true\"\r\n   Name=\"Intense Reference\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"33\" QFormat=\"true\" Name=\"Book Title\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"37\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"Bibliography\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"TOC Heading\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"41\" Name=\"Plain Table 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"42\" Name=\"Plain Table 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"43\" Name=\"Plain Table 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"44\" Name=\"Plain Table 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"45\" Name=\"Plain Table 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"40\" Name=\"Grid Table Light\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\" Name=\"Grid Table 1 Light\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\" Name=\"Grid Table 6 Colorful\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\" Name=\"Grid Table 7 Colorful\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\" Name=\"List Table 1 Light\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\" Name=\"List Table 6 Colorful\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\" Name=\"List Table 7 Colorful\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 6\"/>\r\n </w:LatentStyles>\r\n</xml><![endif]--><!--[if gte mso 10]>\r\n<style>\r\n /* Style Definitions */\r\n table.MsoNormalTable\r\n	{mso-style-name:\"Table Normal\";\r\n	mso-tstyle-rowband-size:0;\r\n	mso-tstyle-colband-size:0;\r\n	mso-style-noshow:yes;\r\n	mso-style-priority:99;\r\n	mso-style-parent:\"\";\r\n	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;\r\n	mso-para-margin-top:0cm;\r\n	mso-para-margin-right:0cm;\r\n	mso-para-margin-bottom:8.0pt;\r\n	mso-para-margin-left:0cm;\r\n	line-height:107%;\r\n	mso-pagination:widow-orphan;\r\n	font-size:11.0pt;\r\n	font-family:\"Calibri\",\"sans-serif\";\r\n	mso-ascii-font-family:Calibri;\r\n	mso-ascii-theme-font:minor-latin;\r\n	mso-hansi-font-family:Calibri;\r\n	mso-hansi-theme-font:minor-latin;\r\n	mso-bidi-font-family:Mangal;\r\n	mso-bidi-theme-font:minor-bidi;\r\n	mso-bidi-language:AR-SA;}\r\n</style>\r\n<![endif]--></a><a href=\"javascript:void(0)\" id=\"cke_101_uiElement\" style=\"user-select: none;\" title=\"OK\"> </a></p>\r\n\r\n<p><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">राष्ट्रव्यापी उद्यमशीलता विकास र रोजगारी सिर्जना गर्न &lsquo;गरिखाने</span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\"> </span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">कार्यक्रम&rsquo;को अभियान सुरु </span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">गरिएको छ </span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">। गरिखाने कार्यक्रम स्वनिर्भर</span>, <span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">उद्यमशील</span>, <span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">आर्थिक</span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\"> </span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">हिसाबले सवल र सक्षम बन्न चाहाने हरेक नेपालीको अभियान हो । यो अभियानको</span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\"> </span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">उद्देश्य उद्यमशील बन्न चाहानेलाई सीप</span>, <span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">पुँजी</span>, <span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">प्रविधि</span>, <span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">बजारसँग जोड्ने र रोजगार हुन</span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\"> </span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">चाहनेलाई सीप र रोजगारका अवसरसँग आवद्ध गर्ने हो । उद्यमको आकार</span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;; font-size:10.0pt\">/</span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">आयतन</span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\"> </span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">बढाउन चाहनेलाई पनि आवश्यकताअनुसार पुँजी</span>, <span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">प्रविधि</span>, <span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">सीप र बजारको लागि</span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\"> </span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">सहयोग गर्ने पनि यस अभियानको कार्यक्रम रहेको छ । यस अभियानबाट राष्ट्रिय</span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\"> </span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">अर्थतन्त्रमा सवल</span>, <span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">सुदृढ</span>, <span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">समावेशी र दीगो आर्थिक वृद्धिदरको मार्ग प्रशस्त गर्नेछ ।</span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\"> </span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">देशका हरेक कुना&ndash;कुनामा अब यो अभियान पुग्नेछ</span>, <span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">यसका जुझारु अभियान्ताहरू उद्देश्य</span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\"> </span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">प्राप्तिमा निरन्तर सक्रिय रहनेछन् । नेपाली कांग्रेसले मुलुकमा उद्यमशीलता प्रवद्र्धन</span>,<span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;; font-size:10.0pt\"> </span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">लगानी प्रोत्साहन र संरक्षण</span>, <span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">ठूला पूर्वाधारहरूको विकास मार्फत् आर्थिक सम्भावना</span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\"> </span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">उजागर गर्ने कार्यलाई सधैँ प्राथमिकतामा राख्दै आएको परिप्रेक्ष्यमा राष्ट्रव्यापी यो</span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\"> </span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">अभियानबाट गाउँ&ndash;गाउँमा उद्यमीहरू जन्मनेछन् । यही अभियानबाट स्टार्ट&ndash;अप्स (सानो</span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\"> </span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">व्यवसायको सुरुवात गर्ने हरूले भोलि विश्वव्यापी पहिचान पाउने व्यवसायहरूको</span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\"> </span><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">जन्महोस् भन्ने सदिच्छा समेत यस कार्यक्रमले राखेको छ ।</span></p>', '16185601101618560110.jpg', '2021-04-16 07:59:36', '2021-04-16 08:01:50');

-- --------------------------------------------------------

--
-- Table structure for table `gari_khanne_projects`
--

CREATE TABLE `gari_khanne_projects` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `image` varchar(225) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `imagecategory`
--

CREATE TABLE `imagecategory` (
  `id` int(11) NOT NULL,
  `title` varchar(225) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imagecategory`
--

INSERT INTO `imagecategory` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'अभियानको अन्तरक्रिया', '16115867221611586722.jpg', '2021-01-25 09:13:42', '2021-07-12 06:09:59'),
(3, 'विविध', '16115869971611586997.jpg', '2021-01-25 09:18:17', '2021-07-12 06:09:00'),
(12, 'मार्कंडे सहकारी - अवलोकन', '16130453471613045347.jpg', '2021-02-11 12:09:07', '2021-07-12 06:01:14'),
(13, 'अभिमुखिकरण - बिरगंज', '16185651621618565162.jpg', '2021-04-12 08:05:08', '2021-04-16 09:26:02'),
(14, 'अभिमुखिकरण - पोखरा', '16185652171618565217.jpg', '2021-04-16 09:26:57', '2021-04-16 09:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `image`, `created_at`, `updated_at`, `category_id`) VALUES
(8, 'Garikhane Campaign Team', '16107067941610706794.jpg', '2021-01-15 04:48:14', '2021-01-15 04:48:14', 2),
(9, 'Garikhane Campaign Team', '16107068141610706814.jpg', '2021-01-15 04:48:34', '2021-01-15 04:48:34', 2),
(10, 'Garikhane Campaign Team', '16107068391610706839.jpg', '2021-01-15 04:48:59', '2021-01-15 04:48:59', 2),
(11, 'Garikhane Campaign Team', '16107068591610706859.jpg', '2021-01-15 04:49:19', '2021-01-15 04:49:19', 3),
(12, 'Garikhane Campaign Team', '16107068811610706881.jpg', '2021-01-15 04:49:41', '2021-01-15 04:49:41', 3),
(13, 'Garikhane Campaign Team', '16107069171610706917.jpg', '2021-01-15 04:50:17', '2021-01-25 09:36:09', 3),
(14, 'Meeting With Founder, Umesh Shrestha', '16117441171611744117.jpg', '2021-01-27 04:56:57', '2021-01-27 04:56:57', 2),
(15, 'Meeting With Founder, Umesh Shrestha', '16117441531611744153.jpg', '2021-01-27 04:57:33', '2021-01-27 04:57:33', 2),
(20, 'Birganj Program', '16185650121618565012.jpg', '2021-04-16 09:23:32', '2021-04-16 09:23:32', 13),
(21, 'Birganj Program', '16185650431618565043.jpg', '2021-04-16 09:24:03', '2021-04-16 09:24:03', 13),
(22, 'अभिमुखिकरण - पोखरा', '16185652611618565261.jpg', '2021-04-16 09:27:41', '2021-04-16 09:27:41', 14),
(23, 'अभिमुखिकरण - पोखरा', '16185652951618565295.jpg', '2021-04-16 09:28:15', '2021-04-16 09:28:15', 14),
(24, 'अभिमुखिकरण - पोखरा', '16185653171618565317.jpg', '2021-04-16 09:28:37', '2021-04-16 09:28:37', 14),
(25, 'अभिमुखिकरण - पोखरा', '16185653321618565332.jpg', '2021-04-16 09:28:52', '2021-04-16 09:28:52', 14);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `bgimage` varchar(225) DEFAULT NULL,
  `description` text NOT NULL,
  `location` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `vacancy` int(11) DEFAULT NULL,
  `salary` varchar(225) DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `publish` int(11) NOT NULL DEFAULT 1,
  `creator_id` int(11) DEFAULT NULL,
  `type` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `title`, `image`, `bgimage`, `description`, `location`, `date`, `deadline`, `vacancy`, `salary`, `meta_title`, `meta_description`, `created_at`, `updated_at`, `status`, `publish`, `creator_id`, `type`) VALUES
(3, 'Technical Database Engineer', '16051988401605198840.png', '1600694705.jpg', '<p><span style=\"color:#333333; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa.</span><span style=\"color:#333333; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa.</span><span style=\"color:#333333; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa.</span></p>\r\n\r\n<p><span style=\"color:#333333; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa.</span><span style=\"color:#333333; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa.</span></p>', 'Kathmandu', '2020-09-24', '2021-04-20', 2, '200000', 'Technical Database Engineer', 'asasasasas', '2020-09-21 07:40:05', '2021-07-06 06:52:51', 0, 1, 33, 'admin'),
(5, 'Marketing Graphic Design / 4D Artist', '16019834221601983422.jpg', NULL, '<p><span style=\"color:#333333; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa.</span><span style=\"color:#333333; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa.</span><span style=\"color:#333333; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa.</span></p>\r\n\r\n<p><span style=\"color:#333333; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa.</span><span style=\"color:#333333; font-family:&quot;Open Sans&quot;,sans-serif; font-size:14px\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies dictum ex, nec ullamcorper orci luctus eget. Integer mauris arcu, pretium eget elit vel, posuere consectetur massa.</span></p>', 'Kathmandu', '2020-10-15', '2021-04-21', 5, '20000', NULL, NULL, '2020-10-06 05:34:59', '2021-07-06 06:52:51', 0, 1, 33, 'admin'),
(24, 'ram job', '16110719391611071939.jpg', NULL, '<p>This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.This is a job vacancy for the people live in country nepal.&quot;</p>', 'Kathmandu', '2021-01-28', '2021-04-29', 5, '50000', NULL, NULL, '2021-01-19 10:13:59', '2021-07-06 06:52:51', 0, 1, 33, 'admin'),
(50, 'Project  Manager', '16135513691613551369.JPG', NULL, '<p><span style=\"font-size:20px\"><span style=\"color:#ff0000\"><strong>JD are follows:</strong></span></span></p>\r\n\r\n<p>1. jldsfj dslkf dslkf dsfdslf jdlkfj dsflk jdslkfj dskfdsf.</p>\r\n\r\n<p>2. ljfdsl fjdlfkjds flkds jflkdjf lkdjf dlskf jdlkf jdlksfdlskfj d</p>\r\n\r\n<p>3. jflds fldsfldksf dlkfj dslkf dslkf dflkdsjf dslkfj dlkf dlskf jdlkjf</p>', 'Karmabhoomi Samaj, Hattiwan, Lalitpur-15', '2021-02-17', NULL, 1, '25000', NULL, NULL, '2021-02-17 08:29:10', '2021-06-21 06:20:54', 0, 1, 49, 'web'),
(56, 'ARCHITECT (Teacher)/FASHION DESIGNER (Teacher)/LIBRARIAN', '16138930461613893046.jpeg', NULL, '<h2>DETAILED JOB DESCRIPTION / REQUIREMENTS:</h2>\r\n\r\n<p><strong>﻿VACANCY</strong></p>\r\n\r\n<p><strong>IEC</strong>&nbsp;is the first to introduce Fashion Design &amp; Interior Design courses in Nepal. IEC College of Art&nbsp; &amp; Fashion is the venture of IEC School of Art &amp; Fashion, one of the most trusted name&nbsp; in the education field from last 23 yrs in Nepal.</p>\r\n\r\n<p>We offer excellent opportunities for development and a progressive career path for all our staff members.</p>\r\n\r\n<p>To keep pace with our growth, we need professionals for 2021-2022 session who are driven &amp; will inspire others.</p>\r\n\r\n<p><strong>We are looking for</strong></p>\r\n\r\n<ul>\r\n	<li><strong>ARCHITECT (Teacher)&nbsp;</strong>&ndash;&nbsp;<strong>FULL TIME / PART TIME</strong>&nbsp;&ndash; Enthusiastic professionals with expertise in the required field. Minimum 2- 3 yrs of experience in the related field. Salary&nbsp;<strong>NRs 45K to 50K</strong></li>\r\n	<li><strong>FASHION DESIGNER (Teacher)</strong>&nbsp;&ndash;&nbsp;<strong>FULL TIME / PART TIME</strong>&nbsp;&ndash;&nbsp; Enthusiastic professionals with expertise in the required field. Minimum 2- 3 yrs of experience in the related field.<strong>&nbsp;Salary NRs 40K to 45K</strong></li>\r\n	<li><strong>LIBRARIAN (Female Only)</strong>&nbsp;- Enthusiastic professionals with expertise in the required field. Required experience of 1-2 yrs in the related field.&nbsp;<strong>Fresher can also apply (having good communication skills in English).</strong></li>\r\n</ul>\r\n\r\n<p><strong>Remuneration:</strong>&nbsp;<strong>Salary &amp; other benefits as per the college rule and OUR REMUNERATION IS THE BEST IN THE INDUSTRY.</strong></p>\r\n\r\n<p>All positions are based at IEC College of Art &amp; Fashion, Mandikatar, Kathmandu.&nbsp; Please send your resume to:&nbsp;&nbsp;<a href=\"http://ieccollege.com.np/\">info@ieccollege.com.np&nbsp;</a>&nbsp;by<strong>&nbsp;28th Feb, 2021</strong>. Kindly clearly mention the post applied.</p>\r\n\r\n<p><strong>URL:</strong>&nbsp;<a href=\"http://www.ieccollege.com.np/\">www.ieccollege.com.np</a></p>', 'LA school', '2021-02-22', '2021-04-23', 10, '20000', NULL, NULL, '2021-02-21 07:37:26', '2021-07-06 06:52:51', 0, 1, 33, 'admin'),
(59, 'Joe Rogan', '16140936141614093614.jpg', NULL, '<p><strong>Qualifications Required&nbsp;</strong></p>\r\n\r\n<ul>\r\n	<li>University Bachelor&#39;s degree in Computer Engineering or equivalent in relevant stream&nbsp;</li>\r\n	<li>Minimum 2 years of professional work experience in software development&nbsp;</li>\r\n</ul>\r\n\r\n<p><strong>Skills Required&nbsp;</strong></p>\r\n\r\n<ul>\r\n	<li>Expert-level knowledge in WordPress theme and plugin development&nbsp;</li>\r\n	<li>Experience in Front end development HTML5, CSS, SASS&nbsp;</li>\r\n	<li>Experience/knowledge of JavaScript (ES5/ES6), jQuery and ReactJS&nbsp;</li>\r\n	<li>Experience using front end frameworks (Bootstrap, Foundation, Fabric) and an understanding of responsive design.&nbsp;</li>\r\n	<li>Ability to monitor a website&#39;s performance and identify and troubleshoot technical problems&nbsp;</li>\r\n	<li>Version control using git in a team environment&nbsp;</li>\r\n	<li>Understanding of the full web development life cycle&nbsp;</li>\r\n	<li>Strong coding and analytical skills&nbsp;</li>\r\n	<li>Good understanding of OOPS concepts, and Design patterns&nbsp;</li>\r\n	<li>Good understanding of asynchronous request handling, partial page updates, and AJAX&nbsp;</li>\r\n	<li>Attention to detail and an eye for UI / UX concepts and designs&nbsp;</li>\r\n	<li>Able to handle multiple projects at the same time.&nbsp;</li>\r\n</ul>', 'Maharajgunj', '2020-01-20', '2021-02-10', 5, '2000', NULL, NULL, '2021-02-23 15:20:14', '2021-07-06 06:52:51', 0, 1, 33, 'web'),
(60, 'गरिखाने अभियान', '16140960761614096076.jpg', NULL, '<p>asdas</p>', 'kathmandu', '2021-02-23', '2021-02-26', 4, '20333', NULL, NULL, '2021-02-23 16:01:16', '2021-07-06 06:52:51', 0, 1, 53, 'web'),
(61, 'गरिखाने अभियान', '16140960771614096077.jpg', NULL, '<p>asdas</p>', 'kathmandu', '2021-02-23', '2021-02-26', 4, '20333', NULL, NULL, '2021-02-23 16:01:17', '2021-07-06 06:52:51', 0, 1, 53, 'web'),
(63, 'Project Manager', '16146705241614670524.JPG', NULL, '<p>Job Description of Project Manager</p>\r\n\r\n<p>1</p>\r\n\r\n<p>2</p>\r\n\r\n<p>3</p>\r\n\r\n<p>Job Expired Testing......</p>', 'Kathmandu', '2021-03-02', '2021-03-06', 1, '1', NULL, NULL, '2021-03-02 07:35:24', '2021-07-06 06:52:51', 0, 1, 33, 'web'),
(68, 'Project Officer', '16161451211616145121.jpg', NULL, '<p>Test 19-20 March 2021</p>', 'Kathmandu', '2021-03-19', '2021-03-20', 1, 'Negociable', NULL, NULL, '2021-03-19 09:12:01', '2021-07-06 06:52:51', 0, 1, 64, 'web'),
(69, 'Project Officer-2', '16161460971616146097.png', NULL, '<p>JD</p>\r\n\r\n<p>1</p>\r\n\r\n<p>2</p>\r\n\r\n<p>3</p>\r\n\r\n<p>4</p>', 'Nepalguj', '2021-03-19', '2021-03-20', 2, '30000', NULL, NULL, '2021-03-19 09:28:17', '2021-07-06 06:52:51', 0, 1, 64, 'web'),
(70, 'Accountant', '16161462271616146227.png', NULL, '<p>test</p>', 'Biratnagar', '2021-03-19', '2021-03-20', 3, '25000', NULL, NULL, '2021-03-19 09:30:27', '2021-07-06 06:52:51', 0, 1, 64, 'web'),
(71, 'गरिखाने अभियान', '16170336901617033690.png', NULL, '<p>Test Job</p>', 'kathmandu', '2021-03-30', '2021-04-30', 12, '20333', NULL, NULL, '2021-03-29 16:01:30', '2021-07-06 06:52:51', 0, 1, 33, 'admin'),
(74, 'Software Developer', '16187312021618731202.png', NULL, '<p>test&nbsp;</p>', 'Kathmandu', '2021-04-18', '2021-04-19', 12, '12000', 'test', 'test', '2021-04-18 07:33:22', '2021-07-06 06:52:51', 0, 1, 33, 'admin'),
(75, 'Test job today', '16226512561622651256.jpg', NULL, 'This us tesajahsjs shsjsjs sss', 'Kathmandu', '2021-06-02', NULL, 2, '20000', NULL, NULL, '2021-06-02 16:27:36', '2021-06-11 08:42:07', 0, 1, 83, 'mobile'),
(76, 'hasdas', '16230635761623063576.png', NULL, 'sasdasda', 'hello hello', '2020-11-11', NULL, 11, '11', NULL, NULL, '2021-06-07 10:59:36', '2021-06-07 10:59:36', 0, 1, 131, 'mobile'),
(77, 'hasdas', '16230679981623067998.svg', NULL, 'sasdasdakkk', 'hello hello', '2020-11-11', NULL, 11, '11', NULL, NULL, '2021-06-07 12:13:18', '2021-06-11 08:43:13', 0, 1, 131, 'mobile'),
(78, 'hasdas', NULL, NULL, 'sasdasdakkk', 'hello hello', '2020-11-11', NULL, 11, '11', NULL, NULL, '2021-06-07 12:14:16', '2021-06-11 08:43:24', 0, 1, 131, 'mobile'),
(79, 'hasdas', NULL, NULL, 'sasdasdakkk', 'hello hello', '2020-11-11', NULL, 11, '11', NULL, NULL, '2021-06-07 12:14:28', '2021-06-11 08:43:33', 0, 1, 131, 'mobile'),
(80, 'hasdas', NULL, NULL, 'sasdasdakkk', 'hello hello', '2020-11-11', NULL, 11, '11', NULL, NULL, '2021-06-07 13:43:36', '2021-06-11 08:43:42', 0, 1, 131, 'mobile'),
(81, 'helo', '16230734421623073442.jpg', NULL, 'bxbxbx', 'hello', '2020-11-11', NULL, 65655, '665656', NULL, NULL, '2021-06-07 13:44:02', '2021-06-11 08:44:18', 0, 1, 134, 'mobile'),
(90, '2222', '16232172001623217200.jpg', NULL, 'hekkkk', 'ggg', '2505-12-12', NULL, 555, '55555', NULL, NULL, '2021-06-09 05:40:00', '2021-06-11 08:42:00', 0, 1, 152, 'mobile'),
(91, 'hello', '16232174541623217454.jpg', NULL, 'sbshsh', 'bshs', '1111-11-11', NULL, 656565, 'hddhd', NULL, NULL, '2021-06-09 05:44:14', '2021-06-11 08:44:04', 0, 1, 152, 'mobile'),
(92, 'hhh', NULL, NULL, 'ffff', 'ggf', '1111-12-12', NULL, 5, 'gfg', NULL, NULL, '2021-06-09 05:45:19', '2021-06-09 05:45:19', 0, 1, 152, 'mobile'),
(93, 'gg', '16232177111623217711.jpg', NULL, 'fff', 'f', '1111-11-11', NULL, 22, 'ट', NULL, NULL, '2021-06-09 05:48:31', '2021-06-11 08:43:53', 0, 1, 152, 'mobile'),
(94, 'This is test job', '16232568961623256896.jpg', NULL, 'work from home and earn money .', 'kathmandu', '2050-12-26', NULL, 2, '100000', NULL, NULL, '2021-06-09 16:41:36', '2021-06-11 08:41:52', 0, 1, 154, 'mobile'),
(95, 'Test', '16234012701623401270.jpg', NULL, 'Tetsggsg', 'Teat', '2078-03-01', NULL, 2, '10000', NULL, NULL, '2021-06-11 08:47:50', '2021-06-11 08:51:02', 0, 1, 53, 'mobile'),
(96, 'Test job', NULL, NULL, '<p>test notification</p>', 'kathmandu tinkune', '2021-06-24', '2021-06-30', 2, '123', NULL, NULL, '2021-06-24 12:19:27', '2021-07-06 06:52:51', 0, 1, 33, 'admin'),
(97, 'Test', '16255051381625505138.jpg', NULL, '<p>Test</p>', NULL, '2021-07-05', '2021-07-23', 2, '10000', NULL, NULL, '2021-07-05 17:12:18', '2021-07-05 17:12:18', 1, 1, 33, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_user`
--

CREATE TABLE `job_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `type` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `text` text DEFAULT NULL,
  `file` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job_user`
--

INSERT INTO `job_user` (`id`, `user_id`, `job_id`, `type`, `created_at`, `updated_at`, `text`, `file`) VALUES
(10, 34, 5, 'web', '2021-01-04 09:05:47', '2021-01-04 09:05:47', NULL, NULL),
(11, 34, 6, 'web', '2021-01-04 10:07:45', '2021-01-04 10:07:45', '<p>dfsfsfsf</p>', '16097755651609775565.pdf'),
(12, 34, 7, 'web', '2021-01-04 10:09:03', '2021-01-04 10:09:03', '<p>asfsafsfasfsfsaf</p>', '16097756431609775643.pdf'),
(13, 33, 1, 'web', '2021-02-07 10:53:56', '2021-02-07 10:53:56', '<p>test</p>', '16126952361612695236.docx'),
(14, 44, 7, 'mobile', '2021-02-14 15:57:53', '2021-02-14 15:57:53', 'helllo', '16133182731613318273.png'),
(15, 44, 7, 'mobile', '2021-02-14 16:01:56', '2021-02-14 16:01:56', 'helllo', '16133185161613318516.png'),
(16, 44, 7, 'mobile', '2021-02-14 16:02:00', '2021-02-14 16:02:00', 'helllo', '16133185201613318520.png'),
(17, 44, 6, 'mobile', '2021-02-14 17:21:07', '2021-02-14 17:21:07', '_controllers.text', '16133232671613323267.jpg'),
(18, 44, 5, 'mobile', '2021-02-14 17:23:26', '2021-02-14 17:23:26', 'jjjj', '16133234061613323406.jpg'),
(19, 44, 43, 'mobile', '2021-02-17 07:05:41', '2021-02-17 07:05:41', 'hello', NULL),
(20, 44, 51, 'mobile', '2021-02-17 16:19:33', '2021-02-17 16:19:33', 'dasdasdasd', NULL),
(21, 44, 43, 'mobile', '2021-02-17 16:30:47', '2021-02-17 16:30:47', 'asdas', NULL),
(22, 44, 43, 'mobile', '2021-02-17 16:31:52', '2021-02-17 16:31:52', 'new from mobile', NULL),
(23, 34, 34, 'web', '2021-02-18 14:37:50', '2021-02-18 14:37:50', '<p>asdadsadasd</p>', '16136590701613659070.pdf'),
(24, 44, 43, 'mobile', '2021-02-18 17:43:38', '2021-02-18 17:43:38', 'dasdsa', NULL),
(25, 33, 52, 'web', '2021-02-19 15:08:23', '2021-02-19 15:08:23', '<p>ewda daadada asadasdassadasd</p>', '16137473031613747303.docx'),
(26, 33, 50, 'web', '2021-02-19 15:10:14', '2021-02-19 15:10:14', '<p>&nbsp;</p>\r\n\r\n<h3><a href=\"https://www.sonyliv.com/\">SonyLIV - Watch Indian TV Shows, Movies, Sports, Live ...</a></h3>\r\n\r\n<p><a href=\"https://www.sonyliv.com/\">www.sonyliv.com</a></p>\r\n\r\n<ol>\r\n	<li>&nbsp;</li>\r\n</ol>\r\n\r\n<p><em>SonyLIV</em>&nbsp;- Top premium streaming platform where you can watch popular TV Shows, Movies, Sports, Web Series. Enjoy your favourite Live TV Channels online.</p>\r\n\r\n<p>You&#39;ve visited this page 3 times. Last visit: 1/6/21</p>', '16137474141613747414.pdf'),
(27, 33, 35, 'web', '2021-02-19 15:16:32', '2021-02-19 15:16:32', '<p>Test&nbsp;</p>', '16137477921613747792.pdf'),
(28, 33, 54, 'web', '2021-02-19 16:10:41', '2021-02-19 16:10:41', '<p>Tdetafy eayeajrgq</p>', '16137510411613751041.pdf'),
(29, 34, 54, 'web', '2021-02-20 15:28:17', '2021-02-20 15:28:17', '<p>SDSADFASFASFASFASFDSAF</p>', '16138348971613834897.pdf'),
(30, 34, 52, 'web', '2021-02-20 15:32:42', '2021-02-20 15:32:42', '<p>ASDFASFSDFASDFASFA FFADSFSDFASFASDF ASFA</p>', '16138351621613835162.pdf'),
(31, 33, 56, 'web', '2021-02-21 07:41:29', '2021-02-21 07:41:29', '<p><strong>EC</strong>&nbsp;is the first to introduce Fashion Design &amp; Interior Design courses in Nepal. IEC College of Art&nbsp; &amp; Fashion is the venture of IEC School of Art &amp; Fashion, one of the most trusted name&nbsp; in the education field from last 23 yrs in Nepal.</p>\r\n\r\n<p>We offer excellent opportunities for development and a progressive career path for all our staff members.</p>\r\n\r\n<p>To keep pace with our growth, we need professionals for 2021-2022 session who are driven &amp; will inspire others.</p>\r\n\r\n<p><strong>We are looking for</strong></p>\r\n\r\n<ul>\r\n	<li><strong>ARCHITECT (Teacher)&nbsp;</strong>&ndash;&nbsp;<strong>FULL TIME / PART TIME</strong>&nbsp;&ndash; Enthusiastic professionals with expertise in the required field. Minimum 2- 3 yrs of experience in the related field. Salary&nbsp;<strong>NRs 45K to 50K</strong></li>\r\n	<li><strong>FASHION DESIGNER (Teacher)</strong>&nbsp;&ndash;&nbsp;<strong>FULL TIME / PART TIME</strong>&nbsp;&ndash;&nbsp; Enthusiastic professionals with expertise in the required field. Minimum 2- 3 yrs of experience in the related field.<strong>&nbsp;Salary NRs 40K to 45K</strong></li>\r\n	<li><strong>LIBRARIAN (Female Only)</strong>&nbsp;- Enthusiastic professionals with expertise in the required field. Required experience of 1-2 yrs in the related field.&nbsp;<strong>Fresher can also apply (having good communication skills in English).</strong></li>\r\n</ul>\r\n\r\n<p><strong>Remuneration:</strong>&nbsp;<strong>Salary &amp; other benefits as per the college rule and OUR REMUNERATION IS THE BEST IN THE INDUSTRY.</strong></p>', '16138932891613893289.pdf'),
(32, 33, 55, 'web', '2021-02-21 07:54:32', '2021-02-21 07:54:32', '<p>jcabjbshcjkad</p>', '16138940711613894071.jpg'),
(33, 58, 57, 'web', '2021-02-21 14:44:15', '2021-02-21 14:44:15', '<p>sddq sd qws</p>', '16139186551613918655.PNG'),
(34, 33, 63, 'web', '2021-03-04 10:38:42', '2021-03-04 10:38:42', '<p>Date....</p>\r\n\r\n<p>To&nbsp;</p>\r\n\r\n<p>The HR Department</p>\r\n\r\n<p>Karmabhoomi Samaj.....\\\\</p>\r\n\r\n<p>Dear Sir,</p>\r\n\r\n<p>I got information that....</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thank you.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Regards,</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>ABC</p>', '16148543221614854322.docx'),
(35, 56, 63, 'mobile', '2021-03-05 17:50:55', '2021-03-05 17:50:55', 'hello', NULL),
(36, 34, 56, 'web', '2021-03-14 05:35:22', '2021-03-14 05:35:22', '<p>This is a test</p>', '16157001221615700122.pdf'),
(37, 65, 68, 'web', '2021-03-19 09:22:40', '2021-03-19 09:22:40', '<p>Date: 19 March 2021.</p>\r\n\r\n<p>To</p>\r\n\r\n<p>The Manager</p>\r\n\r\n<p>Nepal Samaj, Kathmandu, Nepal.</p>\r\n\r\n<p>This is Cover Letter from Admin3 (Test)</p>', '16161457601616145760.jpg'),
(38, 74, 56, 'web', '2021-03-29 16:10:55', '2021-03-29 16:10:55', '<p>Test</p>', '16170342551617034255.png'),
(39, 116, 74, 'mobile', '2021-05-31 15:08:52', '2021-05-31 15:08:52', 'hello', '16224737321622473732.jpg'),
(40, 116, 74, 'mobile', '2021-05-31 15:16:04', '2021-05-31 15:16:04', 'hello', '16224741641622474164.jpg'),
(41, 118, 74, 'mobile', '2021-05-31 16:59:02', '2021-05-31 16:59:02', 'hh', '16224803421622480342.jpg'),
(42, 83, 75, 'mobile', '2021-06-02 16:30:08', '2021-06-02 16:30:08', 'this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job. this is my cover letter . I am fully eligible to this test job. Please seleect me to this job.', '16226514081622651408.jpg'),
(43, 83, 71, 'mobile', '2021-06-02 16:44:38', '2021-06-02 16:44:38', 'jbxwwjxbwixbaxianxaxianxisnxisxnsx', '16226522781622652278.zip'),
(44, 152, 75, 'mobile', '2021-06-09 03:53:01', '2021-06-09 03:53:01', 'jjjjj', '16232107811623210781.jpg'),
(45, 154, 75, 'mobile', '2021-06-09 16:39:22', '2021-06-09 16:39:22', 'This is my cover letter. please give me this job.', '16232567621623256762.zip'),
(46, 157, 71, 'mobile', '2021-06-10 13:27:18', '2021-06-10 13:27:18', 'this is test. test test', '16233316381623331638.zip'),
(47, 180, 75, 'mobile', '2021-06-17 14:24:23', '2021-06-17 14:24:23', 'tjis is test from mobile', '16239398631623939863.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `karmabhomi`
--

CREATE TABLE `karmabhomi` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_type` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `pradesh` varchar(225) NOT NULL,
  `district` text NOT NULL,
  `vdc` text NOT NULL,
  `ward` text NOT NULL,
  `number` text NOT NULL,
  `email` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `tole` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL,
  `education` text NOT NULL,
  `family_total` int(11) NOT NULL,
  `family_male` int(11) NOT NULL,
  `family_female` int(11) NOT NULL,
  `family_others` int(11) DEFAULT NULL,
  `ob2` text NOT NULL,
  `ob3` text NOT NULL,
  `business_pradesh` int(11) NOT NULL,
  `business_district` int(11) NOT NULL,
  `business_vdc` int(11) NOT NULL,
  `business_ward` int(11) NOT NULL,
  `business_tole` tinytext NOT NULL,
  `business_aim` longtext NOT NULL,
  `business_reason` longtext NOT NULL,
  `ob4` text NOT NULL,
  `ob5` text NOT NULL,
  `ob7` text NOT NULL,
  `ob8` text NOT NULL,
  `ob10` text NOT NULL,
  `total_salary` text NOT NULL,
  `ob11` text NOT NULL,
  `ob12` text NOT NULL,
  `ob13` mediumtext NOT NULL,
  `ob16` mediumtext NOT NULL,
  `ob20` text NOT NULL,
  `ob21` text NOT NULL,
  `expected_interest` int(11) NOT NULL,
  `loan_payment_type` text NOT NULL,
  `ob22` text NOT NULL,
  `loan_category` text NOT NULL,
  `ob23` text DEFAULT NULL,
  `ob24` text NOT NULL,
  `bank_name` text NOT NULL,
  `bank_branch` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `karmabhomi`
--

INSERT INTO `karmabhomi` (`id`, `user_id`, `user_type`, `name`, `pradesh`, `district`, `vdc`, `ward`, `number`, `email`, `gender`, `tole`, `date`, `education`, `family_total`, `family_male`, `family_female`, `family_others`, `ob2`, `ob3`, `business_pradesh`, `business_district`, `business_vdc`, `business_ward`, `business_tole`, `business_aim`, `business_reason`, `ob4`, `ob5`, `ob7`, `ob8`, `ob10`, `total_salary`, `ob11`, `ob12`, `ob13`, `ob16`, `ob20`, `ob21`, `expected_interest`, `loan_payment_type`, `ob22`, `loan_category`, `ob23`, `ob24`, `bank_name`, `bank_branch`, `created_at`, `updated_at`) VALUES
(1, 53, 'web', 'Ashok Shrestha', '1', '3', '19', '1', '984522155', 'admin@gmail.com', 'महिला', 'asda', '2050/1/1', '१० कक्षासम्म', 7, 2, 2, 1, 'नयाँ उद्योग/व्यवसाय स्थापना', 'Software', 1, 4, 40, 2, 'hbhj', 'hbhbmjh', 'hbmbm', 'jknmjj', 'शिक्षा', '12739', 'dsfsa', 'jhsada', '51512', 'asjdak', 'jsad', 'ajsdka', 'rdf', '87239847', '187419', 12, 'त्रैमासिक', '8374123', 'महिला', 'छैन', 'सेल्स तथा मार्केटिंग', 'gfvghf', 'FDFG', '2021-04-07 17:20:56', '2021-04-07 17:20:56'),
(4, 33, 'web', 'सुनिल अर्याल', '2', '34', '385', '50', '9842144769', 'aryalsu@gmail.com', 'अन्य', 'तेजारथ', '2026-15-50', 'सी. टि.ई.भी. टि. अन्तर्गत मान्यता प्राप्त', 5, -1, 2, NULL, 'पुरानो उद्योग/व्यवसाय विस्तार', 'Test', 3, 26, 291, 9, 'Mandikhatar', 'Mandikhatar', 'dsadsadsa', 'Bakery Product', 'कृषि', 'adsd', 'adsad', '10', '200000', '350 Kg Per Day', '500 Kg Per Day', '10 Lakh', 'Local and  Capital city', '15 Lakh', '5 Lakh', 2, 'त्रैमासिक', 'Land at Kathmandu', 'अन्य', 'छैन', 'अन्य', 'Nepal Citizens Bank', 'Durbar Marg', '2021-04-16 08:54:20', '2021-04-16 08:54:20'),
(5, 62, 'web', 'pk', '1', '2', '10', '1', '9849654318', 'lovelypuspen@gmail.com', 'पुरुष', 'Khalde', '2047/25/15', 'स्नातक', 2, 4, 5, NULL, 'नयाँ उद्योग/व्यवसाय स्थापना', 'ddd', 1, 2, 10, 1, 'Yasok', 'jyh', 'kksj', 'dfsd', 'कृषि', 'ss', 'ss', 'ss', '8545', '565654', '46512', '4621654132', '1215', '2126545', '216546', 21, 'मासिक', 'kldfknkj', 'कृषि', 'छ', 'सेल्स तथा मार्केटिंग', 'dss', 'dds', '2021-04-16 17:02:08', '2021-04-16 17:02:08'),
(7, 76, 'web', 'Rupendra Neupane', '3', '27', '296', '1', '98498080294545', 'nrupenz@gmail.com', 'पुरुष', 'Biruwa', '2050/12/26', 'स्नातकोत्तर वा अधिक', 3, 2, 1, 0, 'नयाँ उद्योग/व्यवसाय स्थापना', 'Hamro hotel', 3, 27, 296, 1, 'biruwa', 'kei na kei', 'kei na kei', 'kei na kei', 'पर्यटन', 'kei na kei', 'kei na kei', '10', '20000', '20000', '4000000', '2000000', 'kei na kei', '200000', '10000', 13, 'मासिक', 'ghar jagga', 'महिला', NULL, 'प्रविधि', 'mero bank', 'mero ghar najik', '2021-04-20 11:15:44', '2021-04-20 11:15:44'),
(8, 76, 'web', 'ram nath chaudhary', '3', '28', '297', '50', '9849808029', 'developers.nityashree@gmail.com', 'अन्य', 'Lamatar', '1993-04-08', 'सी. टि.ई.भी. टि. अन्तर्गत मान्यता प्राप्त', 2, 1, 3, 0, 'पुरानो उद्योग/व्यवसाय विस्तार', 'Hamro hotel', 3, 23, 253, 10, 'Hamro tole', 'revenue generate', 'revenue generate', 'Hamro hotel', 'अन्य,Hamro hotel', 'kei na kei', 'kei na kei', '10', '20000', '20000', '4000000', '2000000', 'kei na kei', '200000', '10000', 10, 'त्रैमासिक', 'ghar jagga', 'अन्य,Hamro hotel', 'छैन', 'अन्य,Hamro hotel', 'mero bank', '34343', '2021-04-22 08:16:18', '2021-04-22 08:16:18'),
(9, 70, 'web', 'Binaya', '1', '4', '34', '42', '9843164368', 'cathryn.mraz@yahoo.com', 'अन्य', 'test', '2020-07-01', 'सी. टि.ई.भी. टि. अन्तर्गत मान्यता प्राप्त', 245, 307, 524, 32, 'पुरानो उद्योग/व्यवसाय विस्तार', 'Voluptates omnis sunt voluptatibus iste minus.', 4, 49, 510, 21, 'test company', 'test company', 'test company', 'test', 'उत्पादन तथा प्रसोधन', 'Nemo magnam rem atque repellat dolores cupiditate non dolorum.', 'Sunt officia qui voluptas eaque ipsa.', 'Occaecati esse doloribus iste.', 'Quidem corporis quasi molestias aperiam voluptatum dolorum officia deleniti voluptas.', 'Laborum suscipit aspernatur tempora laudantium architecto reiciendis ut ut suscipit.', 'Quibusdam non necessitatibus praesentium unde.', 'Sint dolores in dolorum enim omnis inventore aut.', 'Dignissimos et ratione omnis eum veniam alias adipisci sit.', 'Odit molestias facilis necessitatibus in.', 'Et rerum ut laboriosam est ut.', 412, 'त्रैमासिक', 'Illo asperiores aspernatur.', 'कृषि', 'छैन', 'मानव संसाधन', 'Pinkie Hickle', 'Voluptates eaque culpa laborum dolorem nesciunt debitis quaerat voluptas laudantium.', '2021-06-18 08:49:13', '2021-06-18 08:49:13'),
(10, 70, 'mobile', 'Binaya', '2', '34', '12', '3', '9898969745', 'email@email.com', 'afsfasd', 'rgsergsrgfgds', '2047/25/5', 'vdfgearg', 2, 3, 3, 3, 'rgsbrsb', 'fsfbsbrerhfb', 2, 3, 4, 3, 'fbserhr', 'fddfsdfbrs', 'fbdrbaebaerbeb', 'bsrbarhsrhhsh', 'bsdfbraoie\'oiawe', 'advtjgghmhm', 'sdfdfbsfdf', 'dgvsdfgrherhsb', 'sdfhbrhserhserh', 'sdfhserhserh', 'serhserh', 'hrshrh', 'srhsrhser', 'serserhes', 'serhserherhdfbs', 10, 'srhserhserh', 'srhsrhs', 'srhsrhsh', 'srhserhserhserrerh', 'rshser', 'rshsrhs', 'shrsrhsefbx', '2021-06-21 04:42:58', '2021-06-21 04:42:58'),
(11, 70, 'mobile', 'Binaya', '2', '34', '12', '3', '9898969745', 'email@email.com', 'afsfasd', 'rgsergsrgfgds', '2047/25/5', 'vdfgearg', 2, 3, 3, 3, 'rgsbrsb', 'fsfbsbrerhfb', 2, 3, 4, 3, 'fbserhr', 'fddfsdfbrs', 'fbdrbaebaerbeb', 'bsrbarhsrhhsh', 'bsdfbraoie\'oiawe', 'advtjgghmhm', 'sdfdfbsfdf', 'dgvsdfgrherhsb', 'sdfhbrhserhserh', 'sdfhserhserh', 'serhserh', 'hrshrh', 'srhsrhser', 'serserhes', 'serhserherhdfbs', 10, 'srhserhserh', 'srhsrhs', 'srhsrhsh', 'srhserhserhserrerh', 'rshser', 'rshsrhs', 'shrsrhsefbx', '2021-06-21 05:13:27', '2021-06-21 05:13:27'),
(12, 70, 'mobile', 'Binaya', '2', '34', '12', '3', '9898969745', 'email@email.com', 'afsfasd', 'rgsergsrgfgds', '2047/25/5', 'vdfgearg', 2, 3, 3, 3, 'rgsbrsb', 'fsfbsbrerhfb', 2, 3, 4, 3, 'fbserhr', 'fddfsdfbrs', 'fbdrbaebaerbeb', 'bsrbarhsrhhsh', 'bsdfbraoie\'oiawe', 'advtjgghmhm', 'sdfdfbsfdf', 'dgvsdfgrherhsb', 'sdfhbrhserhserh', 'sdfhserhserh', 'serhserh', 'hrshrh', 'srhsrhser', 'serserhes', 'serhserherhdfbs', 10, 'srhserhserh', 'srhsrhs', 'srhsrhsh', 'srhserhserhserrerh', 'rshser', 'rshsrhs', 'shrsrhsefbx', '2021-06-21 05:59:17', '2021-06-21 05:59:17'),
(13, 70, 'mobile', 'Binaya', '2', '34', '12', '3', '9898969745', 'email@email.com', 'afsfasd', 'rgsergsrgfgds', '2047/25/5', 'vdfgearg', 2, 3, 3, 3, 'rgsbrsb', 'fsfbsbrerhfb', 2, 3, 4, 3, 'fbserhr', 'fddfsdfbrs', 'fbdrbaebaerbeb', 'bsrbarhsrhhsh', 'bsdfbraoie\'oiawe', 'advtjgghmhm', 'sdfdfbsfdf', 'dgvsdfgrherhsb', 'sdfhbrhserhserh', 'sdfhserhserh', 'serhserh', 'hrshrh', 'srhsrhser', 'serserhes', 'serhserherhdfbs', 10, 'srhserhserh', 'srhsrhs', 'srhsrhsh', 'srhserhserhserrerh', 'rshser', 'rshsrhs', 'shrsrhsefbx', '2021-06-21 06:23:55', '2021-06-21 06:23:55'),
(14, 70, 'mobile', 'Binaya', '2', '34', '12', '3', '9898969745', 'email@email.com', 'afsfasd', 'rgsergsrgfgds', '2047/25/5', 'vdfgearg', 2, 3, 3, 3, 'rgsbrsb', 'fsfbsbrerhfb', 2, 3, 4, 3, 'fbserhr', 'fddfsdfbrs', 'fbdrbaebaerbeb', 'bsrbarhsrhhsh', 'bsdfbraoie\'oiawe', 'advtjgghmhm', 'sdfdfbsfdf', 'dgvsdfgrherhsb', 'sdfhbrhserhserh', 'sdfhserhserh', 'serhserh', 'hrshrh', 'srhsrhser', 'serserhes', 'serhserherhdfbs', 10, 'srhserhserh', 'srhsrhs', 'srhsrhsh', 'srhserhserhserrerh', 'rshser', 'rshsrhs', 'shrsrhsefbx', '2021-06-21 06:24:33', '2021-06-21 06:24:33'),
(15, 182, 'mobile', 'Binaya', '2', '34', '12', '3', '9898969745', 'email@email.com', 'afsfasd', 'rgsergsrgfgds', '2047/25/5', 'vdfgearg', 2, 3, 3, 3, 'rgsbrsb', 'fsfbsbrerhfb', 2, 3, 4, 3, 'fbserhr', 'fddfsdfbrs', 'fbdrbaebaerbeb', 'bsrbarhsrhhsh', 'bsdfbraoie\'oiawe', 'advtjgghmhm', 'sdfdfbsfdf', 'dgvsdfgrherhsb', 'sdfhbrhserhserh', 'sdfhserhserh', 'serhserh', 'hrshrh', 'srhsrhser', 'serserhes', 'serhserherhdfbs', 10, 'srhserhserh', 'srhsrhs', 'srhsrhsh', 'srhserhserhserrerh', 'rshser', 'rshsrhs', 'shrsrhsefbx', '2021-06-21 16:08:52', '2021-06-21 16:08:52'),
(16, 182, 'mobile', 'Binaya', '2', '34', '12', '3', '9898969745', 'email@email.com', 'afsfasd', 'rgsergsrgfgds', '2047/25/5', 'vdfgearg', 2, 3, 3, 3, 'rgsbrsb', 'fsfbsbrerhfb', 2, 3, 4, 3, 'fbserhr', 'fddfsdfbrs', 'fbdrbaebaerbeb', 'bsrbarhsrhhsh', 'bsdfbraoie\'oiawe', 'advtjgghmhm', 'sdfdfbsfdf', 'dgvsdfgrherhsb', 'sdfhbrhserhserh', 'sdfhserhserh', 'serhserh', 'hrshrh', 'srhsrhser', 'serserhes', 'serhserherhdfbs', 10, 'srhserhserh', 'srhsrhs', 'srhsrhsh', 'srhserhserhserrerh', 'rshser', 'rshsrhs', 'shrsrhsefbx', '2021-06-21 16:10:50', '2021-06-21 16:10:50'),
(17, 182, 'mobile', 'Binaya', '2', '34', '12', '3', '9898969745', 'email@email.com', 'afsfasd', 'rgsergsrgfgds', '2047/25/5', 'vdfgearg', 2, 3, 3, 3, 'rgsbrsb', 'fsfbsbrerhfb', 2, 3, 4, 3, 'fbserhr', 'fddfsdfbrs', 'fbdrbaebaerbeb', 'bsrbarhsrhhsh', 'bsdfbraoie\'oiawe', 'advtjgghmhm', 'sdfdfbsfdf', 'dgvsdfgrherhsb', 'sdfhbrhserhserh', 'sdfhserhserh', 'serhserh', 'hrshrh', 'srhsrhser', 'serserhes', 'serhserherhdfbs', 10, 'srhserhserh', 'srhsrhs', 'srhsrhsh', 'srhserhserhserrerh', 'rshser', 'rshsrhs', 'shrsrhsefbx', '2021-06-21 16:10:57', '2021-06-21 16:10:57'),
(18, 182, 'mobile', 'Binaya', '\"2\"', '34', '12', '3', '9898969745', 'email@email.com', 'afsfasd', 'rgsergsrgfgds', '2047/25/5', 'vdfgearg', 2, 3, 3, 3, 'rgsbrsb', 'fsfbsbrerhfb', 2, 3, 4, 3, 'fbserhr', 'fddfsdfbrs', 'fbdrbaebaerbeb', 'bsrbarhsrhhsh', 'bsdfbraoie\'oiawe', 'advtjgghmhm', 'sdfdfbsfdf', 'dgvsdfgrherhsb', 'sdfhbrhserhserh', 'sdfhserhserh', 'serhserh', 'hrshrh', 'srhsrhser', 'serserhes', 'serhserherhdfbs', 10, 'srhserhserh', 'srhsrhs', 'srhsrhsh', 'srhserhserhserrerh', 'rshser', 'rshsrhs', 'shrsrhsefbx', '2021-06-22 16:44:42', '2021-06-22 16:44:42'),
(19, 182, 'mobile', 'helll', '1', '1', '1', '5', '4949', 'shshs@sjsj.cjxj', 'पुरुस', 'hshs', '1111/11/11', '१० कक्षासम्म', 1, 1, 1, 1, 'पुरानो उद्योग/व्यवसाय विस्तार', 'sailesh', 1, 1, 1, 1, 'w', 'w', 'w', 'w', 'उत्पादन तथा प्रसोधन', 'd', 's', 's', '4', 'd', 'ss', 's', 'dhdh', '4', '4', 5, 'त्रैमासिक', 'hshs', 'कृषि', 'छैन', 'संचालन व्यवस्थापन', 'hdhd', 'dhdhd', '2021-06-24 14:32:58', '2021-06-24 14:32:58'),
(20, 182, 'mobile', 'hello', '1', '1', '1', '22', '666', 'hshsh@jsjsj.ckck', 'महिला', '12', '1111/11/11', '१० कक्षासम्म', 6446, 6446, 6446, 6446, 'पुरानो उद्योग/व्यवसाय विस्तार', 'zbbz', 1, 1, 1, 5646, 'dysy', 'dd', 'dd', 'ss', 'उत्पादन तथा प्रसोधन', 'ddx', 'bxbd', 'ddss', '44', 'ss', 'dd', 'dd', 'xx', '55', '55', 55, 'मासिक', 'dd', 'दलित', 'छ', 'संचालन व्यवस्थापन', 'dd', 'ddx', '2021-06-26 16:11:57', '2021-06-26 16:11:57'),
(21, 182, 'mobile', 'hsjs', '1', '1', '1', '6565', '5956549556', 'dhdh', 'महिला', 'dhdh', '1111/11/11', '१० कक्षासम्म', 4664, 4664, 4664, 4664, 'पुरानो उद्योग/व्यवसाय विस्तार', 'bxbzbzdd', 1, 1, 1, 555, 'dd', 'dd', 'dd', 'dd', 'उत्पादन तथा प्रसोधन', 'ddd', 'djdj', 'dd', '55', 'dd', 'dd', 'ss', 'x see', '44', '55', 45, 'त्रैमासिक', 'ddd', 'ऋण को बर्गिकरण', 'छ', 'मानव संसाधन', 'dbdh', 'xx', '2021-06-26 16:17:54', '2021-06-26 16:17:54'),
(22, 182, 'mobile', 'hshs', '1', '1', '1', '9565', '77', 'dz@jsjs.xkdks', 'महिला', 'ds', '1111/11/11', '१० कक्षासम्म', 59594, 59594, 59594, 59594, 'पुरानो उद्योग/व्यवसाय विस्तार', 'xbbx', 1, 1, 1, 5959, 'dd', 'xx', 'xx', 'xx', 'शिक्षा', 'hdhd', 'bsdb', 'ds', '77', 'ssss', 'dd', 'ddz', 'vv', '785', '88', 88, 'मासिक', 'dbdb', 'महिला', 'छैन', 'संचालन व्यवस्थापन', 'dd', 'dd', '2021-06-27 06:56:19', '2021-06-27 06:56:19'),
(23, 182, 'mobile', 'hshs', '1', '1', '1', '9565', '77', 'dz@jsjs.xkdks', 'महिला', 'ds', '1111/11/11', '१० कक्षासम्म', 59594, 59594, 59594, 59594, 'पुरानो उद्योग/व्यवसाय विस्तार', 'xbbx', 1, 1, 1, 5959, 'dd', 'xx', 'xx', 'xx', 'शिक्षा', 'hdhd', 'bsdb', 'ds', '77', 'ssss', 'dd', 'ddz', 'vv', '785', '88', 88, 'मासिक', 'dbdb', 'महिला', 'छैन', 'संचालन व्यवस्थापन', 'dd', 'dd', '2021-06-27 07:11:05', '2021-06-27 07:11:05'),
(24, 154, 'mobile', 'rupebgfrr', '3', '27', '296', '5', '5585585555', 'nrupenz@gmail.com', 'पुरुस', 'fff', '2050/12/11', 'स्नातकोत्तर', 3, 3, 3, 3, 'नयाँ उद्योग/व्यवसाय स्थापना', 'ffft', 3, 27, 296, 5, 'fff', 'ffft', 'ffft', 'tgttr', 'पर्यटन', 'fgty', 'fgtt', 'fggy', '255', 'ggggg', 'rfff', '6666', 'trrrr', '25', '88988', 9955, 'मासिक', 'feeere weed', 'महिला', 'छैन', 'संचालन व्यवस्थापन', 'hfff', 'gttty', '2021-06-28 09:27:44', '2021-06-28 09:27:44'),
(25, 154, 'mobile', 'Rjajawjwwjw', '3', '27', '296', '1', '95949494949', 'nrupenz@gmail.com', 'पुरुस', 'biruwaaa', '2050/12/12', 'स्नातकोत्तर', 3, 3, 3, 3, 'नयाँ उद्योग/व्यवसाय स्थापना', 'jdjdjdjdd', 3, 27, 296, 1, 'bdbdbe', 'ehejjejej', 'djejejje', 'ejejejeje', 'पर्यटन', 'ejejeje', 'jdjdje', 'eheheh', '5626265', 'ehehehe', 'ehejee', 'djdhdh', 'jejeje', '46565', '595995', 42, 'मासिक', 'bdbdee', 'विदेशबाट फर्किएको', 'छैन', 'संचालन व्यवस्थापन,मानव संसाधन,सेल्स तथा मार्केटिंग,प्रविधि,प्रशासन', 'jejejww', 'jejejejejejeej', '2021-07-05 07:25:17', '2021-07-05 07:25:17'),
(26, 53, 'mobile', 'Ashok Shrestha Test', '2', '15', '138', '01', '9815245482', 'shrestha.ashok200@gmail.com', 'पुरुस', 'Satungal', '2050/01/29', 'स्नातकोत्तर', 1, 1, 1, 1, 'नयाँ उद्योग/व्यवसाय स्थापना', 'Test', 2, 15, 138, 10, 'Ahhs', 'Wuwu', 'Shshs', 'She is', 'कृषि', 'Whwh', 'Agwggw', 'Qhwh', '100000', '19000', '10000', '189191', 'Hwhehwhw', '100000', '10000', 10, 'मासिक', 'Qpp1p1', 'ऋण को बर्गिकरण', 'छ', 'प्रविधि,सेल्स तथा मार्केटिंग', 'Whhw', 'Hwhw', '2021-07-06 15:56:13', '2021-07-06 15:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `librarydigital`
--

CREATE TABLE `librarydigital` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `file` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `text` text DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `librarydigital`
--

INSERT INTO `librarydigital` (`id`, `title`, `file`, `created_at`, `updated_at`, `text`, `image`) VALUES
(3, 'लक्ष्मीप्रसाद देवकोटा', '16103786341610378634.pdf', '2021-01-11 09:38:55', '2021-01-11 09:38:55', '<p>महाकवि लक्ष्मीप्रसाद देवकोटाको &lsquo;शाकुन्तल महाकाव्य&rsquo; यहाँ उपलब्ध छ।</p>', '16103786341610378634.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id` int(11) NOT NULL,
  `title` varchar(225) DEFAULT NULL,
  `link` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id`, `title`, `link`, `created_at`, `updated_at`) VALUES
(4, 'कर्मभूमि समाज', 'https://www.karmabhoomisamaj.com/', '2021-01-14 11:35:04', '2021-07-12 02:20:53'),
(5, 'नेपाल सरकार', 'https://nepal.gov.np/', '2021-01-14 11:36:00', '2021-07-12 02:19:30'),
(6, 'नेपाली कांग्रेस', 'https://www.nepalicongress.org/', '2021-01-14 11:36:14', '2021-07-12 02:18:47'),
(7, 'कम्पनी रजिष्ट्रारको कार्यालय', 'http://ocr.gov.np/', '2021-01-15 04:54:53', '2021-07-12 02:22:26'),
(8, 'आन्तरिक राजस्व विभाग  (IRD)', 'https://ird.gov.np/', '2021-01-15 04:55:18', '2021-07-12 02:23:45'),
(9, 'राष्ट्रिय योजना आयोग', 'https://www.npc.gov.np/en', '2021-01-20 02:05:09', '2021-07-12 02:25:48'),
(10, 'उद्योग, वाणिज्य तथा आपूर्ति मन्त्रालय', 'http://moics.gov.np/np', '2021-02-26 08:41:37', '2021-07-12 02:27:08'),
(11, 'उद्योग विभाग', 'http://www.doind.gov.np/', '2021-02-26 08:41:54', '2021-07-12 02:28:28'),
(12, 'घरेलु तथा साना उद्योग बिभाग', 'http://dcsi.gov.np/', '2021-02-26 08:42:10', '2021-07-12 02:32:27'),
(13, 'घरेलु तथा साना उद्योग बिकास समिति', 'https://www.csidb.gov.np/', '2021-02-26 08:42:25', '2021-07-12 02:37:41'),
(14, 'नेपाल राष्ट्र बैंक', 'https://www.nrb.org.np/', '2021-02-26 09:32:24', '2021-07-12 02:35:24'),
(15, 'सिटिजन्स बैंक', 'https://www.ctznbank.com/', '2021-02-26 09:50:57', '2021-07-12 02:36:41'),
(16, 'नेपाल बंगलादेश बैंक', 'https://www.nbbl.com.np/', '2021-02-26 09:51:15', '2021-07-12 02:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` mediumtext NOT NULL,
  `latitude` varchar(225) NOT NULL,
  `longitude` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(9, 'Garikhane Abhiyan', '27.69249589411094', '85.31848111534464', '2021-07-06 15:18:47', '2021-07-06 15:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `machineries`
--

CREATE TABLE `machineries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `karmabhomi_id` int(11) DEFAULT NULL,
  `machine_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_expense` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `availability` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `machineries`
--

INSERT INTO `machineries` (`id`, `karmabhomi_id`, `machine_name`, `total_expense`, `availability`, `remarks`, `created_at`, `updated_at`) VALUES
(35, 1, 'hbhb', 'FCGF', 'HH', 'GHTH', '2021-04-07 17:20:58', '2021-04-07 17:20:58'),
(36, 1, 'VC', '56564', '657', '6575hg', '2021-04-07 17:21:01', '2021-04-07 17:21:01'),
(39, 4, 'm1', '4', 'Nepal', 'Rem1', '2021-04-16 08:54:30', '2021-04-16 08:54:30'),
(40, 4, 'm2', '5', 'India', 'Re2', '2021-04-16 08:54:31', '2021-04-16 08:54:31'),
(41, 4, 'm3', '6', 'India', 'Re3', '2021-04-16 08:54:31', '2021-04-16 08:54:31'),
(42, 5, 'dasd', 'dfddfsd', 'dfsd', 'dfa', '2021-04-16 17:02:30', '2021-04-16 17:02:30'),
(43, 7, 'coffee machine', '200000', 'yes', 'kei na kei', '2021-04-20 11:15:50', '2021-04-20 11:15:50'),
(44, 8, 'wrwrw', '200000', '3434', '343', '2021-04-22 08:16:19', '2021-04-22 08:16:19'),
(45, 9, 'Mariam Hegmann', 'Suscipit quia pariatur eaque cupiditate nobis delectus et ratione.', 'East Janeton', 'Itaque tenetur voluptas culpa enim repellat facilis dolores culpa.', '2021-06-18 08:49:24', '2021-06-18 08:49:24'),
(46, 10, 'gawgawg', 'agwegawgawg', 'gawegawga', 'agwegwegaw', '2021-06-21 04:43:00', '2021-06-21 04:43:00'),
(47, 11, 'gawgawg', 'agwegawgawg', 'gawegawga', 'agwegwegaw', '2021-06-21 05:13:33', '2021-06-21 05:13:33'),
(48, 12, 'gawgawg', 'agwegawgawg', 'gawegawga', 'agwegwegaw', '2021-06-21 05:59:18', '2021-06-21 05:59:18'),
(49, 13, 'gawgawg', 'agwegawgawg', 'gawegawga', 'agwegwegaw', '2021-06-21 06:23:57', '2021-06-21 06:23:57'),
(50, 14, 'gawgawg', 'agwegawgawg', 'gawegawga', 'agwegwegaw', '2021-06-21 06:24:38', '2021-06-21 06:24:38'),
(51, 15, 'gawgawg', 'agwegawgawg', 'gawegawga', 'agwegwegaw', '2021-06-21 16:08:57', '2021-06-21 16:08:57'),
(52, 16, 'gawgawg', 'agwegawgawg', 'gawegawga', 'agwegwegaw', '2021-06-21 16:10:54', '2021-06-21 16:10:54'),
(53, 17, 'gawgawg', 'agwegawgawg', 'gawegawga', 'agwegwegaw', '2021-06-21 16:11:04', '2021-06-21 16:11:04'),
(54, 18, 'gawgawg', 'agwegawgawg', 'gawegawga', 'agwegwegaw', '2021-06-22 16:44:48', '2021-06-22 16:44:48'),
(55, 23, 'dbbd', 'dhdhd', 'dhdhd', 'dd', '2021-06-27 07:11:15', '2021-06-27 07:11:15'),
(56, 24, 'ffff', 'drrr', 'frrr', 'rrrr', '2021-06-28 09:27:53', '2021-06-28 09:27:53'),
(57, 25, 'hdhehhe', 'dhejrj', 'jdjrjr', 'ejejrjrjr', '2021-07-05 07:25:21', '2021-07-05 07:25:21'),
(58, 26, 'Uwjw', 'Wjjw', '1ppp', 'Nsnw', '2021-07-06 15:56:25', '2021-07-06 15:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_type` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `pradesh` varchar(225) NOT NULL,
  `district` text NOT NULL,
  `vdc` text NOT NULL,
  `phone` bigint(20) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `ob1` text NOT NULL,
  `ob2` text NOT NULL,
  `ob3` text NOT NULL,
  `ob4` text NOT NULL,
  `ob5` text NOT NULL,
  `ob6` text NOT NULL,
  `ob7` text NOT NULL,
  `ob8` text NOT NULL,
  `ob9` text NOT NULL,
  `ob10` text NOT NULL,
  `ob11` text NOT NULL,
  `citizen` varchar(225) NOT NULL,
  `psp` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`id`, `user_id`, `user_type`, `name`, `email`, `pradesh`, `district`, `vdc`, `phone`, `gender`, `ob1`, `ob2`, `ob3`, `ob4`, `ob5`, `ob6`, `ob7`, `ob8`, `ob9`, `ob10`, `ob11`, `citizen`, `psp`, `created_at`, `updated_at`) VALUES
(1, 34, 'web', 'asas', 'sorajduwal@yahoo.com', 'प्रदेश नं १', 'ताप्लेजुङ', 'फक्ताङलुङ गाउँपालिका', 9876780876, 'महिला', 'asas', 'asas', 'asas', '4', 'asas', 'प्राज्ञिक', 'उत्पादन तथा प्रशोधन', '1', 'asaas', 'छ', 'asasas', '16009537711600953771.pdf', '1600953771.png', '2020-09-24 07:37:51', '2020-09-24 07:37:51'),
(21, 42, 'web', 'test', 'test@gmail.com', 'प्रदेश नं १', 'झापा', 'अर्जुनधारा नगरपालिका', 9876780876, 'पुरुष', 'asfsfda', 'sdsaf', 'asdfsf', '4', 'asdfasfsaf', 'प्राज्ञिक', 'स्वास्थ्य', '25', 'asdfsdf', 'छ', 'asfsfsf', '16049223471604922347.jpg', '1604922347.jpg', '2020-11-09 06:00:47', '2020-11-09 06:00:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(11) NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_13_054203_create_admin_invite_table', 2),
(5, '2020_02_14_043303_create_banners_table', 3),
(6, '2020_02_20_043320_create_products_table', 4),
(7, '2020_02_20_043728_create_product_details_table', 5),
(10, '2020_02_26_041150_create_product_images_table', 6),
(11, '2020_05_25_060451_create_blogs_table', 7),
(12, '2017_08_11_073824_create_menus_wp_table', 8),
(13, '2017_08_11_074006_create_menu_items_wp_table', 9),
(14, '2019_01_05_293551_add-role-id-to-menu-items-table', 9),
(16, '2021_04_02_072328_create_yearly_productions_table', 10),
(18, '2021_04_05_074541_create_machineries_table', 11),
(29, '2021_04_06_085336_create_fixed_capitals_table', 12),
(30, '2021_04_06_085356_create_running_capitals_table', 12),
(31, '2021_04_06_085433_create_unit_expenses_table', 12),
(32, '2021_04_06_085448_create_unit_incomes_table', 12),
(33, '2021_04_06_085530_create_annual_operation_costs_table', 12),
(34, '2021_04_13_104253_create_gari_khane_intros_table', 13),
(35, '2021_04_18_054449_create_user_ips_table', 14),
(36, '2021_05_07_053105_create_jobs_table', 15),
(37, '2021_05_19_080737_create_notifications_table', 15),
(38, '2021_07_08_110743_create_entrepreneurship_processes_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_user`
--

CREATE TABLE `mobile_user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(225) DEFAULT NULL,
  `status` enum('active','suspended') NOT NULL,
  `provider` varchar(225) DEFAULT NULL,
  `provider_id` varchar(225) DEFAULT NULL,
  `lname` varchar(225) DEFAULT NULL,
  `address` varchar(225) DEFAULT NULL,
  `phone` bigint(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mobile_user_auth_tokens`
--

CREATE TABLE `mobile_user_auth_tokens` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `auth_token` mediumtext DEFAULT NULL,
  `is_active` int(11) DEFAULT 0,
  `expired_at` datetime DEFAULT NULL,
  `fcm_token` varchar(225) DEFAULT NULL,
  `device_type` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mobile_user_auth_tokens`
--

INSERT INTO `mobile_user_auth_tokens` (`id`, `user_id`, `auth_token`, `is_active`, `expired_at`, `fcm_token`, `device_type`, `created_at`, `updated_at`) VALUES
(1, 1, '1ShT1PEKCAap6wdxojwzAkER9WAs', 1, '2021-06-21 07:57:31', 'dGb_mlPPSe6F7YnqLTCVoN:APA91bGgjm-owCx0ww70WxqJQa-eFNzyDUglTa-rXTnfCWMRsjg7ppwsVFpQP6zCicDo6D_Ej7AHKIoTgBhv5F5GMgu1kfiLykaj3J6P1jRMARms8mgxF4fp1y4KFF6MyUC_bcYZN9a1', 'android', '2021-05-27 07:57:31', '2021-05-27 07:57:31'),
(3, 121, '5IB8yfFvTxzUcgKkdKonak3ykUPP', 1, '2021-06-27 06:59:37', 'e5KIVxQTRMqBRNtNsTtpmB:APA91bHB-_2bvfIQmpN-9504-BLLBCqh6Ls6GDcoWipCz5A6TUfWRc3s43qpTESlvXwYlNvSj9DG39zDBt2Jeep0CrYPFERD9ngfz_yPisDtdepcQ_SDD5E_4GlQietZuqN7M7SYuw3D', 'android', '2021-05-27 10:22:12', '2021-06-02 06:59:37'),
(4, 130, 'bTPhcdQvWzQpVR9nEKb1XwDCBHfJ', 1, '2021-07-02 11:28:16', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-05-27 14:41:39', '2021-06-07 11:28:16'),
(5, 53, 'zPGgwPJph3cm7OGg15rIK5oYHpgM', 1, '2021-07-30 07:16:51', 'fv-Hu8AtRF-F1S6jGm5OGu:APA91bFmFuU8EeCb4N1KbyC1wx3giTgkDwL9iHNS-3CSu-l1ssruUXy5qmcKr65s42_NpxavcXXxMu1ZpNqJGZrXEtZs8Uu0IdVWkyBBDGnrNzjXAjdhrpMEq46TB63qglCjWxD_fjRU', 'android', '2021-05-28 12:15:04', '2021-07-05 07:16:51'),
(9, 114, 'h0d5ebtqdFAj1KD7M9ASP5IjoAY3', 1, '2021-06-25 12:18:37', 'cFR2UwkXTqiuxy9rKCY7Ld:APA91bEnic_d6DwCPdOQanwtXikQq6H3Qj03nv9meO8AOUG_g8sE4LrOmcqrEPpfCpzRQNqjFjHFdy66fi1UazQc1K9P3nQLAvvuUViLkj6eSx-ClcurdMlEHocIBNU28QC8WZZ2eDKS', 'android', '2021-05-31 12:18:37', '2021-05-31 12:18:37'),
(10, 115, 'C1hILpxdiKiubu0YAgLeGwkcVRiI', 1, '2021-06-25 12:19:07', 'cgGqxtOz6kSPodR_ELmIc1:APA91bGn-JVrkd2TL3_PcOAjE8Tg0pexNPMjLVCz6QpSihDEuvqj3CgbyHbz6q1npC6WGuqX3l4j0m_179TX_4Kue5PS3Q6D-rAELIZE1yWopxL0X8xSbJCoumW9oqIXXl_1g5_71dS4', 'ios', '2021-05-31 12:19:07', '2021-05-31 12:19:07'),
(11, 116, 'Nh1LSjwSnbjeUuwB5L3qRNuUczsP', 1, '2021-06-25 14:24:34', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-05-31 14:24:34', '2021-05-31 14:24:34'),
(12, 117, 'lrK0c0767447Is0mnriR1V9KhwEi', 1, '2021-06-25 16:43:07', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-05-31 16:43:07', '2021-05-31 16:43:07'),
(13, 118, 'Ka2N2pj7OxL9DYvUwDqMegPmt7Op', 1, '2021-06-25 16:52:21', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-05-31 16:52:21', '2021-05-31 16:52:21'),
(14, 119, 'YGZ0lHrmokJ5tBt8gt8ADR2hHdUw', 1, '2021-06-26 11:52:46', 'fMLqwgnreU8tjGCAQZP5Dx:APA91bGzgBiqz2w477x4IZZFWcyO0w37aHeyeB7AIVkb3lmMXMOXhwERkXhuwGVGJ7BLhwFjGjxw9LEbccxkVIwHWqGGt56RR0STaouIrdg1McjVYJ4c3JQaWn-h76vZSQ0CbFt_jbEs', 'ios', '2021-06-01 11:52:46', '2021-06-01 11:52:46'),
(15, 120, 'D5ROdP54ltv6wdtxwpJnN1groAUB', 1, '2021-06-26 11:55:46', 'fMLqwgnreU8tjGCAQZP5Dx:APA91bGzgBiqz2w477x4IZZFWcyO0w37aHeyeB7AIVkb3lmMXMOXhwERkXhuwGVGJ7BLhwFjGjxw9LEbccxkVIwHWqGGt56RR0STaouIrdg1McjVYJ4c3JQaWn-h76vZSQ0CbFt_jbEs', 'ios', '2021-06-01 11:55:46', '2021-06-01 11:55:46'),
(18, 123, '0wImYxDH13DgAwErMiae60gSfVUj', 1, '2021-06-29 13:47:10', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-06-04 13:47:10', '2021-06-04 13:47:10'),
(19, 130, 'b4u7Jhr7aADktIuy6cbYmwSZfxIm', 1, '2021-07-02 10:30:07', '2121kjl2j1', 'android', '2021-06-04 13:52:31', '2021-06-07 10:30:07'),
(20, 125, 'S8SsUYu9MnKBcS9hjLICCJHrNo7c', 1, '2021-06-29 13:54:38', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-06-04 13:54:38', '2021-06-04 13:54:38'),
(21, 126, 'tF7hwTuq1F8FY9TXh7F9KNGxSt5a', 1, '2021-06-29 14:02:47', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-06-04 14:02:47', '2021-06-04 14:02:47'),
(22, 127, 'khglobVQKyyUhpOeh681zAPw84Zn', 1, '2021-06-29 18:22:56', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-06-04 18:22:56', '2021-06-04 18:22:56'),
(23, 128, 'ag4MSgGuTx8tjTJhGIUUV8t7xhQV', 1, '2021-07-01 08:57:21', 'e5KIVxQTRMqBRNtNsTtpmB:APA91bHB-_2bvfIQmpN-9504-BLLBCqh6Ls6GDcoWipCz5A6TUfWRc3s43qpTESlvXwYlNvSj9DG39zDBt2Jeep0CrYPFERD9ngfz_yPisDtdepcQ_SDD5E_4GlQietZuqN7M7SYuw3D', 'android', '2021-06-06 08:57:21', '2021-06-06 08:57:21'),
(24, 129, '4d69bK13TaHrjW8VsI7DdJdfg45h', 1, '2021-07-01 10:10:57', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-06-06 10:10:57', '2021-06-06 10:10:57'),
(25, 131, 'GpWfeTSJbzAAmGjxhhfkyoNwdVis', 1, '2021-07-02 08:52:52', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-06-07 08:52:52', '2021-06-07 08:52:52'),
(26, 130, 't6R2FyanRleN4tkUy7bFIwV2zq2e', 1, '2021-07-02 12:31:57', '2121kjl2j1s', 'android', '2021-06-07 10:30:15', '2021-06-07 12:31:57'),
(27, 132, 'Uf8wkSNQyHa9ZISoDeKfOw2B75DL', 1, '2021-07-02 12:24:33', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-06-07 12:24:33', '2021-06-07 12:24:33'),
(28, 133, 'sy5ujvwKmTbjk1GYkRP1km2YRzF2', 1, '2021-07-02 13:11:04', NULL, 'android', '2021-06-07 13:11:04', '2021-06-07 13:11:04'),
(29, 134, 'jtiVFVM1OWDiRMnVPveog4FvP53X', 1, '2021-07-02 13:42:02', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-06-07 13:42:02', '2021-06-07 13:42:02'),
(30, 135, '5opNRIPM6kgGSyc7WNmBZKSX7tlY', 1, '2021-07-02 14:36:17', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-06-07 14:36:17', '2021-06-07 14:36:17'),
(31, 136, 'kwA43Yn7RjSIiurHq05qgok2ZXIF', 1, '2021-07-02 14:36:31', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-06-07 14:36:31', '2021-06-07 14:36:31'),
(32, 137, 'udFmGt9mDRbyw0RktdNHMixtRCCH', 1, '2021-07-02 14:36:40', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-06-07 14:36:40', '2021-06-07 14:36:40'),
(33, 138, 'qr58f55IfzrySJCr8nJ0k0OjxRa0', 1, '2021-07-02 14:37:51', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-06-07 14:37:51', '2021-06-07 14:37:51'),
(34, 139, 'T5PVCObl5WxlcIl3mHOkKnibXqaq', 1, '2021-07-02 14:42:34', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-06-07 14:42:34', '2021-06-07 14:42:34'),
(35, 140, '5vPRB33ATGvTF8EVbm7ndgfcYanX', 1, '2021-07-02 14:44:07', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-06-07 14:44:07', '2021-06-07 14:44:07'),
(36, 141, 'fdkLrY3bOn0iB3Gfkfz6YDtfhIno', 1, '2021-07-02 14:44:58', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-06-07 14:44:58', '2021-06-07 14:44:58'),
(37, 142, '7zTdntqzLsFnGG4QOXNaEgOVEF8U', 1, '2021-07-02 14:52:02', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-06-07 14:52:02', '2021-06-07 14:52:02'),
(38, 143, 'IiK4jqto9xIT5ed6knlRyLKn1YsH', 1, '2021-07-02 17:58:14', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-06-07 17:58:14', '2021-06-07 17:58:14'),
(39, 144, 'xM9DQSAm7pCUFBi98e4vx9kXX0QR', 1, '2021-07-02 18:20:28', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-06-07 18:20:28', '2021-06-07 18:20:28'),
(40, 83, 'DU26T3qcX1to6RfAy1UPKlqOFB3t', 1, '2021-07-03 06:16:01', 'ftRFCM-BR1i3gsLtSConbK:APA91bGP6lkHhj0QBHx7Zjd1TcqFLqCFg1S_y8DqI1cLrx6e6H7oBL9TgxCUYyKZ5Y7WfWePl1WL8xEril9LHFsiv_iL5uhA-ivb3OzvctNQQO00uFZf3yPa9jcpWw3jFBk01MzQUv5k', 'android', '2021-06-08 06:16:01', '2021-06-08 06:16:01'),
(41, 145, 'TL3sAYgVWqSGfpzIB8HrmKqw7J8n', 1, '2021-07-03 06:16:32', 'ftRFCM-BR1i3gsLtSConbK:APA91bGP6lkHhj0QBHx7Zjd1TcqFLqCFg1S_y8DqI1cLrx6e6H7oBL9TgxCUYyKZ5Y7WfWePl1WL8xEril9LHFsiv_iL5uhA-ivb3OzvctNQQO00uFZf3yPa9jcpWw3jFBk01MzQUv5k', 'android', '2021-06-08 06:16:32', '2021-06-08 06:16:32'),
(42, 146, 'zWaOL8VJtxt2YAjVJ6GH0yPXYmDB', 1, '2021-07-03 06:42:11', 'ftRFCM-BR1i3gsLtSConbK:APA91bGP6lkHhj0QBHx7Zjd1TcqFLqCFg1S_y8DqI1cLrx6e6H7oBL9TgxCUYyKZ5Y7WfWePl1WL8xEril9LHFsiv_iL5uhA-ivb3OzvctNQQO00uFZf3yPa9jcpWw3jFBk01MzQUv5k', 'android', '2021-06-08 06:42:11', '2021-06-08 06:42:11'),
(43, 152, 'xwmlSlT7y4aLn2IbjLo6aVZOIEFc', 1, '2021-07-04 02:13:39', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-06-09 02:13:39', '2021-06-09 02:13:39'),
(44, 153, 'gu5pv3ZmMVwN2dAqmVLtFvNwAMDj', 1, '2021-07-04 14:57:37', 'ftRFCM-BR1i3gsLtSConbK:APA91bGP6lkHhj0QBHx7Zjd1TcqFLqCFg1S_y8DqI1cLrx6e6H7oBL9TgxCUYyKZ5Y7WfWePl1WL8xEril9LHFsiv_iL5uhA-ivb3OzvctNQQO00uFZf3yPa9jcpWw3jFBk01MzQUv5k', 'android', '2021-06-09 14:57:37', '2021-06-09 14:57:37'),
(45, 154, '33hulGQRRmlwOWFWbOnV5OQnOGPh', 1, '2021-07-30 07:21:20', 'c_HS7OK2QiyUMf9m_yEq5e:APA91bEtnyKH7r4iAkovWUGjuVEqJNfco8jB5viZq9fDMb9sge-jNCF0VXmNL2MVukUIiQhL7amzLav3Q0JIPa-bPoOEF-EZ0KXQ15xJkvnlHpWiqx0hOASIzWNr833B63LXwiwaCmDX', 'android', '2021-06-09 15:27:14', '2021-07-05 07:21:20'),
(46, 155, 'R3mVBgyEbv0hBl41VZllZ79S27G7', 1, '2021-07-04 17:32:14', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-06-09 17:32:14', '2021-06-09 17:32:14'),
(47, 156, '1nlv4VnmyUYwH0PZRsdkSLvIXKCs', 1, '2021-07-04 17:33:12', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-06-09 17:33:12', '2021-06-09 17:33:12'),
(48, 157, 'AxZz7aySWxm8BxZSlfZMOPJLmi4l', 1, '2021-07-05 13:25:20', 'dN3L9PEJR0e14JKtLJBF09:APA91bEyjHYIUcuEYfI8ExdKdmO-npbJT7QMRAWog3hgkC1a4-NZiNsQYPqvIg46AbWaZ9qBXeLmp0BoKcxnPV3HXT4Uf3hYb1vG9m3R34vUXUTMyq5yM4654lUs8iuqGdfKGApQZz_5', 'android', '2021-06-10 13:25:20', '2021-06-10 13:25:20'),
(49, 158, 'bibVPI8O4VianQcAitFb2lGdgBTF', 1, '2021-07-05 16:37:40', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-06-10 16:37:40', '2021-06-10 16:37:40'),
(50, 159, 'Iy071puuZFawRCCvvkTxTDXW0wEr', 1, '2021-07-06 17:34:09', 'fMLqwgnreU8tjGCAQZP5Dx:APA91bGzgBiqz2w477x4IZZFWcyO0w37aHeyeB7AIVkb3lmMXMOXhwERkXhuwGVGJ7BLhwFjGjxw9LEbccxkVIwHWqGGt56RR0STaouIrdg1McjVYJ4c3JQaWn-h76vZSQ0CbFt_jbEs', 'ios', '2021-06-11 17:34:09', '2021-06-11 17:34:09'),
(51, 160, 'FO1H45gKZzF1hYugquDbn68iu2mX', 1, '2021-07-06 17:45:25', 'dRWd_itRaUsDi3jdrseHLm:APA91bEv6QrLyR76upD7SXPukrj7ofU7cgQJHx7zkQazuMD0G4EI4_kO3RdMZRNOK28Vtmztw2p-YBs2MVmQMsN7tISTxAoJk0hTCMJSmZlU_CcWKbdMKlQGZeZTu4eZp7dVIsOfafBr', 'ios', '2021-06-11 17:45:25', '2021-06-11 17:45:25'),
(52, 160, 'EUxk2QXQza6lZ0JLnJIzti7eBU1m', 1, '2021-07-06 17:48:34', 'fWxKZM9SFka6nbNDvwC72U:APA91bED6hzBvXZLRO3FA3CfsnxGLMUaLRnQ63dm30BnnQcbwsJ79gxezBjLQM2JvPULcc-FMiaZ_gTANFiVMlxBnyrLQkoeoaschQmvWHHfitdjBmWNhFPnU2RTT2SWy-O8Q-yTjHW_', 'ios', '2021-06-11 17:48:34', '2021-06-11 17:48:34'),
(53, 160, '0jXaP4SnGTV99la7SDzYenZsYj4n', 1, '2021-07-06 18:02:41', 'cIbsbDhLikPzkAv16mo3yd:APA91bH4lkZpdCa7PehVQaH8E9Jn5N0zpYF4s7Fz4932aiGOhbvx5ep6Cd1wOnGjZYPf65SyPkTyxvavohUgbFbxUOFL75p4nUWJzflJQKVngq1mI695wS-WVvdksdxHQfvluVUzAB1y', 'ios', '2021-06-11 18:02:41', '2021-06-11 18:02:41'),
(54, 161, 'xf7shY3yoJGm0lddKhw58lAslYNf', 1, '2021-07-07 14:12:00', 'er8gXXaVZ04_jrky22HQ8S:APA91bGJoIkpOFApcNBt_rnyC_KoTtR3e8qoO42GHYdOQCJXcrXQCobwsB3F8JHCNbmbRcsM1lfcvVBpfH9yJwXBNcaCyJiFkcMQX-bScgS2CGSlvp60XxF6RXs9TX2eYZ-YgR__iha7', 'ios', '2021-06-12 14:12:00', '2021-06-12 14:12:00'),
(55, 162, 'lhDDqHYUvCzXY7UQjSKsvlRqZh0f', 1, '2021-07-07 15:01:57', 'er8gXXaVZ04_jrky22HQ8S:APA91bGJoIkpOFApcNBt_rnyC_KoTtR3e8qoO42GHYdOQCJXcrXQCobwsB3F8JHCNbmbRcsM1lfcvVBpfH9yJwXBNcaCyJiFkcMQX-bScgS2CGSlvp60XxF6RXs9TX2eYZ-YgR__iha7', 'ios', '2021-06-12 15:01:57', '2021-06-12 15:01:57'),
(56, 163, 'pNINshyFYKo1jxCWVUVywxpOn1b5', 1, '2021-07-07 15:10:57', 'er8gXXaVZ04_jrky22HQ8S:APA91bGJoIkpOFApcNBt_rnyC_KoTtR3e8qoO42GHYdOQCJXcrXQCobwsB3F8JHCNbmbRcsM1lfcvVBpfH9yJwXBNcaCyJiFkcMQX-bScgS2CGSlvp60XxF6RXs9TX2eYZ-YgR__iha7', 'ios', '2021-06-12 15:10:57', '2021-06-12 15:10:57'),
(57, 164, 'QCLDuA82NzvtZtMWzmnKjJh6fpAN', 1, '2021-07-09 06:37:32', 'fnvw8nhfRVmCTw42s9gwjz:APA91bFCNnRrjYEHOuQPNtH2fj8y6PGrdgbf1hJrKM_fyhb7DUrzJn8aed5wwMwIQhW4LKqmviVJlj3PTJBCcZGWkAaupBS-uUuOOQplUDJW5MFUnGG040vdQgSQTnkzjxAS7GzmQdBu', 'android', '2021-06-14 06:37:32', '2021-06-14 06:37:32'),
(58, 165, 'odFVlCgmivXDblpvUSbFA1ITgNKY', 1, '2021-07-09 06:38:47', 'fnvw8nhfRVmCTw42s9gwjz:APA91bFCNnRrjYEHOuQPNtH2fj8y6PGrdgbf1hJrKM_fyhb7DUrzJn8aed5wwMwIQhW4LKqmviVJlj3PTJBCcZGWkAaupBS-uUuOOQplUDJW5MFUnGG040vdQgSQTnkzjxAS7GzmQdBu', 'android', '2021-06-14 06:38:47', '2021-06-14 06:38:47'),
(59, 166, 'GuhmD9qJkeUrXAtx4OF2C1BYQE5l', 1, '2021-07-09 06:56:39', NULL, 'android', '2021-06-14 06:56:39', '2021-06-14 06:56:39'),
(60, 167, '1r3zUpykZuiKFOdSqqCCsLyEAefm', 1, '2021-07-09 06:56:41', NULL, 'android', '2021-06-14 06:56:41', '2021-06-14 06:56:41'),
(61, 168, 'ILOs02lBhrFeOXuPXIWt3gVT0seI', 1, '2021-07-09 06:59:20', NULL, 'android', '2021-06-14 06:59:20', '2021-06-14 06:59:20'),
(62, 169, 'I3jskLhUybNR465QcaL2eG9cF6Cj', 1, '2021-07-09 07:45:47', NULL, 'android', '2021-06-14 07:45:47', '2021-06-14 07:45:47'),
(63, 170, 'czDlDaPf7E1epffxK7pfAdKeqrEg', 1, '2021-07-09 07:52:07', NULL, 'android', '2021-06-14 07:52:07', '2021-06-14 07:52:07'),
(64, 171, 'B9invPBPwdwgdbFd6zf67suNtx96', 1, '2021-07-09 07:52:39', NULL, 'android', '2021-06-14 07:52:39', '2021-06-14 07:52:39'),
(65, 172, 'A3voGQpPdSqvjm7Vt6DhG7AWS7Tf', 1, '2021-07-09 07:53:44', NULL, 'android', '2021-06-14 07:53:44', '2021-06-14 07:53:44'),
(66, 173, 'ddN8KiB3BrzvvxN8KJ9PyGTNFHjM', 1, '2021-07-09 08:46:55', NULL, 'android', '2021-06-14 08:46:55', '2021-06-14 08:46:55'),
(67, 174, 'tzTe4Qz99xCU3yxnMZCvLi9hzOhk', 1, '2021-07-09 08:49:13', 'ejbL55IIT12Csn2K7-8hjV:APA91bELNPmpE5k8vwe0URS3KkEMvchho6aXUVvuoJMpTiegfHUk75gIAwNGKlddTePKAWMXCkYmgZa6w8pBw8EFizCf2XlAjnnrPf249Da4Cflvsvo4TwhoRc87dRe7e-rkeIwrY9d4', 'android', '2021-06-14 08:49:13', '2021-06-14 08:49:13'),
(68, 175, 'kmIty5TzZlj5KXfOCLSjf1Q9iESN', 1, '2021-07-09 13:56:42', 'cGqHIxxTIbVfhBDqoBB6dp:APA91bHCdy7-6SmtzTYfu4ghWUXSfq7Xp3WV7xZ4BpP4aRu7S8IrSKx1bQ73zMSvWpfynmcGxeqNro3ldygCZuzG_2P4tsQnPGAuio5-KQI9X0Gm1eRZelBJRpKbiZ517ySFnBGOHlqX', 'android', '2021-06-14 13:56:42', '2021-06-14 13:56:42'),
(69, 176, 'xJGS2P1fawz2gMLIwHl1uGVWBVlL', 1, '2021-07-09 17:42:10', 'eoA_RIxvQY2P-mE_2eZKpy:APA91bFSEP4zGI6w5c0XjwJhaS957Z1MLYLj8TewmLuJEoS7UBWPZEZTPO5fJ9kMwkh7RnLpc-xEWSPfZuduodx1ejARX5DccG2Ec6z8bmYQg2ONbz5mPFyxxCZdbzNI25L9NltC4kpz', 'android', '2021-06-14 17:42:10', '2021-06-14 17:42:10'),
(70, 177, 'gj6HwudI9XNISa37TgsXWUfgNZdx', 1, '2021-07-09 17:42:20', 'eoA_RIxvQY2P-mE_2eZKpy:APA91bFSEP4zGI6w5c0XjwJhaS957Z1MLYLj8TewmLuJEoS7UBWPZEZTPO5fJ9kMwkh7RnLpc-xEWSPfZuduodx1ejARX5DccG2Ec6z8bmYQg2ONbz5mPFyxxCZdbzNI25L9NltC4kpz', 'android', '2021-06-14 17:42:20', '2021-06-14 17:42:20'),
(71, 178, 'odbeiGrj9oZRq65LdxMwOupXdFLp', 1, '2021-07-09 17:43:17', 'eoA_RIxvQY2P-mE_2eZKpy:APA91bFSEP4zGI6w5c0XjwJhaS957Z1MLYLj8TewmLuJEoS7UBWPZEZTPO5fJ9kMwkh7RnLpc-xEWSPfZuduodx1ejARX5DccG2Ec6z8bmYQg2ONbz5mPFyxxCZdbzNI25L9NltC4kpz', 'android', '2021-06-14 17:43:17', '2021-06-14 17:43:17'),
(72, 179, 'D3zMTYp42OW6mARgAiALEsT8sTYR', 1, '2021-07-11 22:29:42', 'cMHWA2EnsU-aq_jngjIvZU:APA91bG0TfwgGUraeam3Q7ZsUeZKTLcz0R6UOJFzU_C9jOiESN0bDDaacoME4z-v1Zxsmt6h39eYe_rdlePDomIR2-ooYa1sO33dLb7Y2r53F03X4Jbnln1v3xrhu0o_cqREN2V9zBUG', 'ios', '2021-06-16 22:29:42', '2021-06-16 22:29:42'),
(73, 180, '6Ob8hHx1fpWFSkV6bUZRdD0s0MCg', 1, '2021-07-12 14:19:44', 'cTbNpLxrToKQA4sDACc4tU:APA91bHhnH1qBN9dNAp5SliWUlKQrumv2y17EpApQtUijdYqX3HjLFF2x-kV9pyLO2NoA68MD6oZ8LEGts0adEyFeAYN2Xn2lRd9NrAtqSFg1PUmn6tvOfr1LU3G1pPANJ5jon4DCWPy', 'android', '2021-06-17 14:19:44', '2021-06-17 14:19:44'),
(74, 181, 'AIvFGeSBi77R1PYWSY2kzrsD91EF', 1, '2021-07-12 16:25:03', 'c6lnwFSDTqunKDsnE6dS7c:APA91bEb9wWANgZ6QTw4ofPAphEkAZyabTQk4Ap3wCp1MFVhuWNHAkJHEDDP4Ba08l6bvbfkJiqlyx_z4KhIQXHaosnkuNz9sX7novxhifqG7PrnCna6WYhCUhBSxA_T4LuQLB0fScrY', 'android', '2021-06-17 16:25:03', '2021-06-17 16:25:03'),
(75, 182, 'o0xyBD74sIq3Jl73kYb3SHCpC6iM', 1, '2021-07-12 16:38:22', 'env-8OKOS5qOiQO2M2VK4j:APA91bFx99SGE0JbClhHe-iieCd-sMomDPEb-HOORC_SNh1QvyYQ78k5dg74hM4M5Cycn0Pkk3GpacvFOpZOL6tWu1b9GhZ9m9hnwwtW9bc-kEeOwCmaIFAwLtS44WLAe8Ha8SZ1W75a', 'android', '2021-06-17 16:38:22', '2021-06-17 16:38:22'),
(76, 160, 'hIzUtYmQB1krBDxAiRkKI76vKtfL', 1, '2021-07-13 22:40:56', 'e5NPuI8bw0iVudh2e90fB4:APA91bF3uw9z6b83gnAIfr5luROaOICSfKnAA9zDkG5ErXNEgCKdoIGOpS2IG7VqULNwBIKjFe7FDkFEfNfBT347Zpmi7M5cI36QPvWAAFLVMkDjhSScxmJNlWBadiK4-umUN2fy4tv0', 'ios', '2021-06-18 22:40:56', '2021-06-18 22:40:56'),
(77, 184, 'LZZ20qKPV9JvfDrIBUN3l9yPkEw9', 1, '2021-07-18 09:58:08', 'c1k_78oDTGOwrBwHZMAPoX:APA91bFGJRNL7jLyYl7UxhcVIFzZ6KySgtrzHTWkJ-4Ep7iNej8MHol0wenE_LX7xR2Z6IR9dd_S3aM5J5j7mD--JiH-t1DoB9No2-7PLW1LiXaiCZCb4mt9CTILiz8RHn5CpgbJGktd', 'android', '2021-06-23 09:58:08', '2021-06-23 09:58:08'),
(78, 185, 'wzJlqn8QgVz89kPkAWHK2xuY32jZ', 1, '2021-07-28 01:01:28', NULL, 'android', '2021-07-03 01:01:28', '2021-07-03 01:01:28'),
(79, 186, 'UY0v0gv3vbeWFWPStzuiZitvblDJ', 1, '2021-07-28 01:03:00', NULL, 'android', '2021-07-03 01:03:00', '2021-07-03 01:03:00'),
(80, 187, '7LTEBZJc92BC2eWcItLPuCIEQzGa', 1, '2021-07-30 05:52:07', 'c_HS7OK2QiyUMf9m_yEq5e:APA91bEtnyKH7r4iAkovWUGjuVEqJNfco8jB5viZq9fDMb9sge-jNCF0VXmNL2MVukUIiQhL7amzLav3Q0JIPa-bPoOEF-EZ0KXQ15xJkvnlHpWiqx0hOASIzWNr833B63LXwiwaCmDX', 'android', '2021-07-05 05:52:07', '2021-07-05 05:52:07'),
(81, 70, 'DTY3r93aOf6EplGaEmS0Qmr26SCV', 1, '2021-07-30 07:44:07', 'cTiqaHQbQKC_OM7XKIv9Kg:APA91bHOXwVCg4SaLVloaZpwrDy1aQ1Td6kal4L4hUazxi8RNDVbTzQEwh4lbD9Yk43oDJUZnEtMQ_3Mw7A_fCKPmBhR-_aDITTssjbpwNUyN-TgtsilDfoGncr3cbrQDIZ5Js4ddnwB', 'android', '2021-07-05 07:21:24', '2021-07-05 07:44:07'),
(82, 183, 'eMMIPKZtmC764COeTnqaAohvgLBr', 1, '2021-07-30 10:23:33', 'fbyzpoZlRD6nLFFmMJB_hq:APA91bFYK2gHjFOrEOnIrlnesKvYeAWEGuIoPEBxAzpjM6xxccsoqJ2FptnicivGUmH9sJb_Wl5yn7MBKE6JfUwJcsBy80Ms-9_NnH77ffIGit0LvsngYwceG6IpGnT2bmVJmo9FuKjb', 'android', '2021-07-05 10:23:33', '2021-07-05 10:23:33'),
(83, NULL, NULL, 1, NULL, 'null', 'android', '2021-07-06 17:13:49', '2021-07-06 17:13:49'),
(84, 188, '74ERXNsNGzoNLZB3EvSleD5Zlzjb', 1, '2021-07-31 17:14:56', NULL, 'android', '2021-07-06 17:14:56', '2021-07-06 17:14:56'),
(85, 189, 'h6rvWqa3cJJKX1goQx0GHpbcZ8S0', 1, '2021-07-31 17:16:49', NULL, 'android', '2021-07-06 17:16:49', '2021-07-06 17:16:49'),
(86, NULL, NULL, 1, NULL, 'fMJIhX7KRx2g0vBtHnT9Oj:APA91bF0go80EzOBv5zlyncMp8UJxz-8M8crG6mUdUufENTHc2yyWJGCL1LFMJH1R50bxPYmTuUh-1_1Y0em7d6hasK3MVFG9aeRiAx_zmlMlfy2ZDiWXKceBfwFt_RVLOCED-tFEnGe', 'android', '2021-07-07 06:20:16', '2021-07-07 06:20:16'),
(87, NULL, NULL, 1, NULL, 'f2zl3vxhmU-GljhCLAcGbI:APA91bEcACtc5gTBKOtE61qyiFDs_VvZ2RGjdRRmEAvt3NyccZpWmcR9-phqnM8IIbzvxRvAYPxN1CRCQEAQhRmVHZOUVSr1Y1bm32cZl6eW6Rk2wyQDKx0wu8y8Tvy3v5Me0WxTdJM-', 'ios', '2021-07-07 07:34:14', '2021-07-07 07:34:14'),
(88, NULL, NULL, 1, NULL, 'fmhviCbvXk23gJGhlm3SAv:APA91bGibivXxwXPGNjkSkS9w0hyV86Cghv-y0xpqP9m_vERCmAKqhaZdT3gyiP071eMCW31s_Af5RWnKAxXGJvx1m-HLX7zmycEXTdwcbv2r_qg0cyptXixIGiOebzKc8jbbUmgrqlB', 'ios', '2021-07-07 09:32:11', '2021-07-07 09:32:11'),
(89, NULL, NULL, 1, NULL, 'fSLPmINBYE3CslJtNGWQj2:APA91bFkonxdvUHZSFNQLJTX3hM9KZ9TjMGd4qaGx9b-9NPsbx2_dZKQzmg-p3ryNbMwju59XB43xR6nBu01NybzZwqPxVsKqEGlFKFRQDMGZUAjzOUS2XOGrBiTTERSYo5BefjqF1Y5', 'ios', '2021-07-09 00:16:20', '2021-07-09 00:16:20'),
(90, NULL, NULL, 1, NULL, 'fCgQ7Z8zlE5SoeBBQynamb:APA91bGJhjsWMrpGl5c8zSJ2LcS-VVMdo7PwY8xYdbSKqxql-_VHhZuiMWI2I21T-I9oxsPywTkRzO25tPY_-dJDsmlThqrpAphwVzG5-P67WNmOYDxX7VvQ_gbc7IdUXvtZPDcnsXe8', 'ios', '2021-07-09 00:16:20', '2021-07-09 00:16:20'),
(91, NULL, NULL, 1, NULL, 'd8RbKvzhckgzhQmWGr6MoL:APA91bFdisJQqJlxS7CkCRfdHl8ZybIctGprIEnAYhOmAbNatdHqdznwPh08n66cm_bIpDAKJ2-H41_WhKGphRa-hcn_ADLgy2RSC84102tYM0dTB3g1KUt1zAAZsNfDPAq0FJnAkbga', 'ios', '2021-07-12 05:26:45', '2021-07-12 05:26:45'),
(92, NULL, NULL, 1, NULL, 'ekTYKsamU07AoKokWowOr2:APA91bGdZ9xAfOk7ZB869JYJkyYmwNFb_nA735Hjuvi1BmeXBs2pxNK5rDV6gNzObLmMc73ILV5L9zk70gq48_QX7eFkfhO2vBwl6psGPFeTNOhi8sAn6GqQ3iRRC2Q_4S5xWn2RwNcJ', 'ios', '2021-07-12 06:35:15', '2021-07-12 06:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `municipality`
--

CREATE TABLE `municipality` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `pradesh_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `municipality`
--

INSERT INTO `municipality` (`id`, `name`, `pradesh_id`, `district_id`, `created_at`, `updated_at`) VALUES
(1, 'आठराई त्रिवेणी गाउँपालिका', 1, 1, '2020-10-30 22:45:11', '2020-10-30 22:45:11'),
(2, 'फक्ताङलुङ गाउँपालिका', 1, 1, '2020-10-30 22:45:11', '2020-10-30 22:45:11'),
(3, 'फुङलिङ नगरपालिका', 1, 1, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(4, 'मिक्वाखोला गाउँपालिका', 1, 1, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(5, 'मेरिङदेन गाउँपालिका', 1, 1, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(6, 'मैवाखोला गाउँपालिका', 1, 1, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(7, 'याङवरक गाउँपालिका', 1, 1, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(8, 'सिदिङ्वा गाउँपालिका', 1, 1, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(9, 'सिरीजङ्घा गाउँपालिका', 1, 1, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(10, 'कुम्मायक गाउँपालिका', 1, 2, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(11, 'तुम्वेवा गाउँपालिका', 1, 2, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(12, 'फालेलुङ गाउँपालिका', 1, 2, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(13, 'फाल्गुनन्द गाउँपालिका', 1, 2, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(14, 'फिदिम नगरपालिका', 1, 2, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(15, 'मिक्लाजुङ गाउँपालिका', 1, 2, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(16, 'याङवरक गाउँपालिका', 1, 2, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(17, 'हिलिहाङ गाउँपालिका', 1, 2, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(18, 'इलाम नगरपालिका', 1, 3, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(19, 'चुलाचुली गाउँपालिका', 1, 3, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(20, 'देउमाई नगरपालिका', 1, 3, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(21, 'फाकफोकथुम गाउँपालिका', 1, 3, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(22, 'माई नगरपालिका', 1, 3, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(23, 'माईजोगमाई गाउँपालिका', 1, 3, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(24, 'माङसेबुङ गाउँपालिका', 1, 3, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(25, 'रोङ गाउँपालिका', 1, 3, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(26, 'सन्दकपुर गाउँपालिका', 1, 3, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(27, 'सूर्योदय नगरपालिका', 1, 3, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(28, 'अर्जुनधारा नगरपालिका', 1, 4, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(29, 'कचनकवल गाउँपालिका', 1, 4, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(30, 'कन्काई नगरपालिका', 1, 4, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(31, 'कमल गाउँपालिका', 1, 4, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(32, 'गौरादह नगरपालिका', 1, 4, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(33, 'गौरीगंज गाउँपालिका', 1, 4, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(34, 'झापा गाउँपालिका', 1, 4, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(35, 'दमक नगरपालिका', 1, 4, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(36, 'बाह्रदशी गाउँपालिका', 1, 4, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(37, 'बुद्धशान्ति गाउँपालिका', 1, 4, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(38, 'भद्रपुर नगरपालिका', 1, 4, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(39, 'मेची नगर नगरपालिका', 1, 4, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(40, 'विर्तामोड नगरपालिका', 1, 4, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(41, 'शिवसताक्षि नगरपालिका', 1, 4, '2020-10-30 22:45:12', '2020-10-30 22:45:12'),
(42, 'हल्दीवारी गाउँपालिका', 1, 4, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(43, 'खाँदवारी नगरपालिका', 1, 5, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(44, 'चिचिला गाउँपालिका', 1, 5, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(45, 'चैनपुर नगरपालिका', 1, 5, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(46, 'धर्मदेवी नगरपालिका', 1, 5, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(47, 'पाँचखपन नगरपालिका', 1, 5, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(48, 'भोटखोला गाउँपालिका', 1, 5, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(49, 'मकालु गाउँपालिका', 1, 5, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(50, 'मादी नगरपालिका', 1, 5, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(51, 'सभापोखरी गाउँपालिका', 1, 5, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(52, 'सिलीचोङ गाउँपालिका', 1, 5, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(53, 'आठराई  गाउँपालिका', 1, 6, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(54, 'छथर गाउँपालिका', 1, 6, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(55, 'फेदाप  गाउँपालिका', 1, 6, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(56, 'मेन्छयायेम गाउँपालिका', 1, 6, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(57, 'म्याङलुङ नगरपालिका', 1, 6, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(58, 'लालिगुँरास नगरपालिका', 1, 6, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(59, 'अरुण गाउँपालिका', 1, 7, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(60, 'आमचोक गाउँपालिका', 1, 7, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(61, 'ट्याम्केमैयुम गाउँपालिका', 1, 7, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(62, 'पौवादुङमा गाउँपालिका', 1, 7, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(63, 'भोजपुर नगरपालिका', 1, 7, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(64, 'रामप्रसाद राई गाउँपालिका', 1, 7, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(65, 'षडानन्द नगरपालिका', 1, 7, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(66, 'साल्पासिलिछो गाउँपालिका', 1, 7, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(67, 'हतुवागढी गाउँपालिका', 1, 7, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(68, 'खाल्सा छिन्ताङ सहीदभूमि गाउँपालिका', 1, 8, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(69, 'चौविसे गाउँपालिका', 1, 8, '2020-10-30 22:45:13', '2020-10-30 22:45:13'),
(70, 'छथर जोरपाटी गाउँपालिका', 1, 8, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(71, 'धनकुटा नगरपालिका', 1, 8, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(72, 'पाख्रिवास नगरपालिका', 1, 8, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(73, 'महालक्ष्मी नगरपालिका', 1, 8, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(74, 'सागुरीगढी गाउँपालिका', 1, 8, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(75, 'उर्लावारी नगरपालिका', 1, 9, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(76, 'कटहरी गाउँपालिका', 1, 9, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(77, 'कानेपोखरी गाउँपालिका', 1, 9, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(78, 'केरावारी गाउँपालिका', 1, 9, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(79, 'ग्रामथान गाउँपालिका', 1, 9, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(80, 'जहदा गाउँपालिका', 1, 9, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(81, 'धनपालथान गाउँपालिका', 1, 9, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(82, 'पथरी शनिश्चरे नगरपालिका', 1, 9, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(83, 'बुढीगंगा गाउँपालिका', 1, 9, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(84, 'बेलवारी नगरपालिका', 1, 9, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(85, 'मिक्लाजुङ गाउँपालिका', 1, 9, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(86, 'रंगेली नगरपालिका', 1, 9, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(87, 'रतुवामाई नगरपालिका', 1, 9, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(88, 'लेटाङ नगरपालिका', 1, 9, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(89, 'विराटनगर महानगरपालिका', 1, 9, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(90, 'सुनवर्षी नगरपालिका', 1, 9, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(91, 'सुन्दरहरैंचा नगरपालिका', 1, 9, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(92, 'ईटहरी उपमहानगरपालिका', 1, 10, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(93, 'ईनरुवा नगरपालिका', 1, 10, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(94, 'कोशी गाउँपालिका', 1, 10, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(95, 'गढी गाउँपालिका', 1, 10, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(96, 'दुहवी नगरपालिका', 1, 10, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(97, 'देवानगन्ज गाउँपालिका', 1, 10, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(98, 'धरान उपमहानगरपालिका', 1, 10, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(99, 'बराह नगरपालिका', 1, 10, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(100, 'बर्जु गाउँपालिका', 1, 10, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(101, 'भोक्राहा गाउँपालिका', 1, 10, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(102, 'रामधुनी नगरपालिका', 1, 10, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(103, 'हरिनगरा गाउँपालिका', 1, 10, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(104, 'खुम्वु पासाङल्हमु गाउँपालिका', 1, 11, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(105, 'दुधकोशी गाउँपालिका', 1, 11, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(106, 'दुधकौशिका गाउँपालिका', 1, 11, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(107, 'नेचासल्यान गाउँपालिका', 1, 11, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(108, 'महाकुलुङ गाउँपालिका', 1, 11, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(109, 'लिखु पिके गाउँपालिका', 1, 11, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(110, 'सोताङ गाउँपालिका', 1, 11, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(111, 'सोलु दुधकुण्ड नगरपालिका', 1, 11, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(112, 'ऐसेलुखर्क गाउँपालिका', 1, 12, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(113, 'केपिलासगढी गाउँपालिका', 1, 12, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(114, 'खोटेहाङ गाउँपालिका', 1, 12, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(115, 'जन्तेढुंगा गाउँपालिका', 1, 12, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(116, 'दिप्रुङ गाउँपालिका', 1, 12, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(117, 'बराहपोखरी गाउँपालिका', 1, 12, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(118, 'रुपाकोट मजुवागढी नगरपालिका', 1, 12, '2020-10-30 22:45:14', '2020-10-30 22:45:14'),
(119, 'लामीडाँडा गाउँपालिका', 1, 12, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(120, 'साकेला गाउँपालिका', 1, 12, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(121, 'हलेसी तुवाचुङ नगरपालिका', 1, 12, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(122, 'खिजिदेम्वा गाउँपालिका', 1, 13, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(123, 'चम्पादेवी  गाउँपालिका', 1, 13, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(124, 'चिशंखुगढी गाउँपालिका', 1, 13, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(125, 'मानेभञ्ज्याङ गाउँपालिका', 1, 13, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(126, 'मोलुङ गाउँपालिका', 1, 13, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(127, 'लिखु  गाउँपालिका', 1, 13, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(128, 'सिद्दिचरण नगरपालिका', 1, 13, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(129, 'सुनकोशी गाउँपालिका', 1, 13, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(130, 'उदयपुरगढी गाउँपालिका', 1, 14, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(131, 'कटारी  नगरपालिका', 1, 14, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(132, 'चौदण्डीगढी नगरपालिका', 1, 14, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(133, 'ताप्ली गाउँपालिका', 1, 14, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(134, 'त्रियुगा नगरपालिका', 1, 14, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(135, 'रौतामाई गाउँपालिका', 1, 14, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(136, 'वेलका  नगरपालिका', 1, 14, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(137, 'सुनकोशी गाउँपालिका', 1, 14, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(138, 'अग्नीसाइर कृष्णासवरन गाउँपालिका', 2, 15, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(139, 'कञ्चनरुप नगरपालिका', 2, 15, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(140, 'खडक नगरपालिका', 2, 15, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(141, 'छिन्नमस्ता गाउँपालिका', 2, 15, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(142, 'डाक्नेश्वरी नगरपालिका', 2, 15, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(143, 'तिरहुत गाउँपालिका', 2, 15, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(144, 'तिलाठी कोईलाडी गाउँपालिका', 2, 15, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(145, 'बेल्ही चपेना गाउँपालिका', 2, 15, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(146, 'बोदे बरसाइन नगरपालिका', 2, 15, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(147, 'महादेवा गाउँपालिका', 2, 15, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(148, 'राजविराज नगरपालिका', 2, 15, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(149, 'रुपनी गाउँपालिका', 2, 15, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(150, 'वलान-विहुल गाउँपालिका', 2, 15, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(151, 'विष्णुपुर गाउँपालिका', 2, 15, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(152, 'शम्भुनाथ  नगरपालिका', 2, 15, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(153, 'सप्तकोशी  नगरपालिका', 2, 15, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(154, 'सुरुङ्गा नगरपालिका', 2, 15, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(155, 'हनुमाननगर कङ्कालिनी नगरपालिका', 2, 15, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(156, 'अर्नमा गाउँपालिका', 2, 16, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(157, 'औरही गाउँपालिका', 2, 16, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(158, 'कल्याणपुर नगरपालिका', 2, 16, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(159, 'गोलबजार नगरपालिका', 2, 16, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(160, 'धनगढीमाई नगरपालिका', 2, 16, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(161, 'नरहा गाउँपालिका', 2, 16, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(162, 'नवराजपुर गाउँपालिका', 2, 16, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(163, 'बरियारपट्टी गाउँपालिका', 2, 16, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(164, 'भगवानपुर गाउँपालिका', 2, 16, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(165, 'मिर्चैया नगरपालिका', 2, 16, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(166, 'लक्ष्मीपुर पतारी गाउँपालिका', 2, 16, '2020-10-30 22:45:15', '2020-10-30 22:45:15'),
(167, 'लहान नगरपालिका', 2, 16, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(168, 'विष्णुपुर गाउँपालिका', 2, 16, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(169, 'सखुवानान्कारकट्टी गाउँपालिका', 2, 16, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(170, 'सिराहा नगरपालिका', 2, 16, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(171, 'सुखीपुर नगरपालिका', 2, 16, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(172, 'कर्जन्हा नगरपालिका', 2, 16, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(173, 'कालिन्चोक  गाउँपालिका', 3, 17, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(174, 'गौरिशंकर  गाउँपालिका', 3, 17, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(175, 'जिरी  नगरपालिका', 3, 17, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(176, 'तामाकोशी  गाउँपालिका', 3, 17, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(177, 'भिमेश्वर  नगरपालिका', 3, 17, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(178, 'मेलुङ  गाउँपालिका', 3, 17, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(179, 'विगु गाउँपालिका', 3, 17, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(180, 'वैतेश्वर  गाउँपालिका', 3, 17, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(181, 'शैलुङ  गाउँपालिका', 3, 17, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(182, 'उमाकुण्ड गाउँपालिका', 3, 18, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(183, 'खाँडादेवी गाउँपालिका', 3, 18, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(184, 'गोकुलगङ्गा गाउँपालिका', 3, 18, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(185, 'दोरम्बा गाउँपालिका', 3, 18, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(186, 'मन्थली नगरपालिका', 3, 18, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(187, 'रामेछाप नगरपालिका', 3, 18, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(188, 'लिखु गाउँपालिका', 3, 18, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(189, 'सुनापती गाउँपालिका', 3, 18, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(190, 'कमलामाई नगरपालिका', 3, 19, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(191, 'गोलन्जोर गाउँपालिका', 3, 19, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(192, 'घ्याङलेख गाउँपालिका', 3, 19, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(193, 'तिनपाटन गाउँपालिका', 3, 19, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(194, 'दुधौली नगरपालिका', 3, 19, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(195, 'फिक्कल गाउँपालिका', 3, 19, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(196, 'मरिण गाउँपालिका', 3, 19, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(197, 'सुनकोशी गाउँपालिका', 3, 19, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(198, 'हरिहरपुरगढी गाउँपालिका', 3, 19, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(199, 'औरही  गाउँपालिका', 2, 20, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(200, 'कमला नगरपालिका', 2, 20, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(201, 'क्षिरेश्वरनाथ नगरपालिका', 2, 20, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(202, 'गणेशमान चारनाथ नगरपालिका', 2, 20, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(203, 'जनकनन्दिनी गाउँपालिका', 2, 20, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(204, 'जनकपुर उपमहानगरपालिका', 2, 20, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(205, 'धनुषाधाम नगरपालिका', 2, 20, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(206, 'धनौजी गाउँपालिका', 2, 20, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(207, 'नगराइन नगरपालिका', 2, 20, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(208, 'बटेश्वर गाउँपालिका', 2, 20, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(209, 'मिथिला नगरपालिका', 2, 20, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(210, 'मिथिला बिहारी नगरपालिका', 2, 20, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(211, 'मुखियापट्टी मुसहरमिया गाउँपालिका', 2, 20, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(212, 'लक्ष्मीनिया गाउँपालिका', 2, 20, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(213, 'विदेह नगरपालिका', 2, 20, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(214, 'शहीदनगर नगरपालिका', 2, 20, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(215, 'सबैला नगरपालिका', 2, 20, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(216, 'हंसपुर नगरपालिका', 2, 20, '2020-10-30 22:45:16', '2020-10-30 22:45:16'),
(217, 'गौशाला नगरपालिका', 2, 21, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(218, 'जलेश्वर नगरपालिका', 2, 21, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(219, 'पिपरा गाउँपालिका', 2, 21, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(220, 'महोत्तरी गाउँपालिका', 2, 21, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(221, 'साम्सी गाउँपालिका', 2, 21, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(222, 'सोनमा गाउँपालिका', 2, 21, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(223, 'एकडारा गाउँपालिका', 2, 21, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(224, 'औरही नगरपालिका', 2, 21, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(225, 'बर्दिबास नगरपालिका', 2, 21, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(226, 'बलवा नगरपालिका', 2, 21, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(227, 'भँगाहा नगरपालिका', 2, 21, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(228, 'मटिहानी नगरपालिका', 2, 21, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(229, 'मनरा शिसवा नगरपालिका', 2, 21, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(230, 'रामगोपालपुर नगरपालिका', 2, 21, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(231, 'लोहरपट्टी नगरपालिका', 2, 21, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(232, 'ईश्वरपुर नगरपालिका', 2, 22, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(233, 'चन्द्रनगर गाउँपालिका', 2, 22, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(234, 'बरहथवा नगरपालिका', 2, 22, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(235, 'बागमती नगरपालिका', 2, 22, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(236, 'मलंगवा नगरपालिका', 2, 22, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(237, 'लालबन्दी नगरपालिका', 2, 22, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(238, 'हरिवन नगरपालिका', 2, 22, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(239, 'कविलासी नगरपालिका', 2, 22, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(240, 'कौडेना गाउँपालिका', 2, 22, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(241, 'गोडैटा  नगरपालिका', 2, 22, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(242, 'चक्रघट्टा  गाउँपालिका', 2, 22, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(243, 'धनकौल गाउँपालिका', 2, 22, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(244, 'पर्सा गाउँपालिका', 2, 22, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(245, 'बलरा नगरपालिका', 2, 22, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(246, 'बसबरिया गाउँपालिका', 2, 22, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(247, 'ब्रह्मपुरी  गाउँपालिका', 2, 22, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(248, 'रामनगर गाउँपालिका', 2, 22, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(249, 'विष्णु गाउँपालिका', 2, 22, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(250, 'हरिपुर नगरपालिका', 2, 22, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(251, 'हरिपुर्वा नगरपालिका', 2, 22, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(252, 'उत्तरगया गाउँपालिका', 3, 23, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(253, 'कालिका गाउँपालिका', 3, 23, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(254, 'गोसाईकुण्ड गाउँपालिका', 3, 23, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(255, 'नौकुण्ड गाउँपालिका', 3, 23, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(256, 'पार्वतीकुण्ड गाउँपालिका', 3, 23, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(257, 'खनियाबास गाउँपालिका', 3, 24, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(258, 'गङ्गाजमुना गाउँपालिका', 3, 24, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(259, 'गजुरी गाउँपालिका', 3, 24, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(260, 'गल्छी गाउँपालिका', 3, 24, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(261, 'ज्वालामूखी गाउँपालिका', 3, 24, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(262, 'त्रिपुरासुन्दरी गाउँपालिका', 3, 24, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(263, 'थाक्रे गाउँपालिका', 3, 24, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(264, 'धुनीबेंशी नगरपालिका', 3, 24, '2020-10-30 22:45:17', '2020-10-30 22:45:17'),
(265, 'निलकण्ठ नगरपालिका', 3, 24, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(266, 'नेत्रावती गाउँपालिका', 3, 24, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(267, 'बेनीघाट रोराङ्ग गाउँपालिका', 3, 24, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(268, 'रुवी भ्याली गाउँपालिका', 3, 24, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(269, 'सिद्धलेक गाउँपालिका', 3, 24, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(270, 'ककनी गाउँपालिका', 3, 25, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(271, 'किस्पाङ गाउँपालिका', 3, 25, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(272, 'तादी गाउँपालिका', 3, 25, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(273, 'तारकेश्वर गाउँपालिका', 3, 25, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(274, 'दुप्चेश्वर गाउँपालिका', 3, 25, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(275, 'पञ्चकन्या गाउँपालिका', 3, 25, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(276, 'बेलकोटगढी नगरपालिका', 3, 25, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(277, 'मेघाङ गाउँपालिका', 3, 25, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(278, 'लिखु गाउँपालिका', 3, 25, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(279, 'विदुर नगरपालिका', 3, 25, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(280, 'शिवपुरी गाउँपालिका', 3, 25, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(281, 'सुर्यगढी गाउँपालिका', 3, 25, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(282, 'कागेश्वरी मनोहरा नगरपालिका', 3, 26, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(283, 'काठमाण्डौ महानगरपालिका', 3, 26, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(284, 'किर्तिपुर नगरपालिका', 3, 26, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(285, 'गोकर्णेश्वर नगरपालिका', 3, 26, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(286, 'चन्द्रागिरी नगरपालिका', 3, 26, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(287, 'टोखा नगरपालिका', 3, 26, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(288, 'तारकेश्वर नगरपालिका', 3, 26, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(289, 'दक्षिणकाली नगरपालिका', 3, 26, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(290, 'नागार्जुन नगरपालिका', 3, 26, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(291, 'बुढानिलकण्ठ नगरपालिका', 3, 26, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(292, 'शङ्खरापुर नगरपालिका', 3, 26, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(293, 'चाँगुनारायण नगरपालिका', 3, 27, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(294, 'भक्तपुर नगरपालिका', 3, 27, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(295, 'मध्यपुर थिमी नगरपालिका', 3, 27, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(296, 'सूर्यविनायक नगरपालिका', 3, 27, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(297, 'कोन्ज्योसोम गाउँपालिका', 3, 28, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(298, 'गोदावरी नगरपालिका', 3, 28, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(299, 'बाग्मती गाउँपालिका', 3, 28, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(300, 'महाङ्काल गाउँपालिका', 3, 28, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(301, 'महालक्ष्मी नगरपालिका', 3, 28, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(302, 'ललितपुर महानगरपालिका', 3, 28, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(303, 'खानीखोला गाउँपालिका', 3, 29, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(304, 'चौंरीदेउराली गाउँपालिका', 3, 29, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(305, 'तेमाल गाउँपालिका', 3, 29, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(306, 'धुलिखेल नगरपालिका', 3, 29, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(307, 'नमोबुद्ध नगरपालिका', 3, 29, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(308, 'पनौती नगरपालिका', 3, 29, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(309, 'पाँचखाल नगरपालिका', 3, 29, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(310, 'बनेपा नगरपालिका', 3, 29, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(311, 'बेथानचोक गाउँपालिका', 3, 29, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(312, 'भुम्लु गाउँपालिका', 3, 29, '2020-10-30 22:45:18', '2020-10-30 22:45:18'),
(313, 'मण्डनदेउपुर नगरपालिका', 3, 29, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(314, 'महाभारत गाउँपालिका', 3, 29, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(315, 'रोशी गाउँपालिका', 3, 29, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(316, 'चौतारा साँगाचोकगढी नगरपालिका', 3, 30, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(317, 'जुगल गाउँपालिका', 3, 30, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(318, 'त्रिपुरासुन्दरी गाउँपालिका', 3, 30, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(319, 'पाँचपोखरी थाङपाल  गाउँपालिका', 3, 30, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(320, 'बलेफी गाउँपालिका', 3, 30, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(321, 'भोटेकोशी गाउँपालिका', 3, 30, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(322, 'मेलम्ची नगरपालिका', 3, 30, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(323, 'र्इन्द्रावती गाउँपालिका', 3, 30, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(324, 'लिसंखु पाखर गाउँपालिका', 3, 30, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(325, 'वाह्रविसे नगरपालिका', 3, 30, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(326, 'सुनकोशी गाउँपालिका', 3, 30, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(327, 'हेलम्बु  गाउँपालिका', 3, 30, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(328, 'ईन्द्र सरोवर गाउँपालिका', 3, 31, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(329, 'कैलाश गाउँपालिका', 3, 31, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(330, 'थाहा नगरपालिका', 3, 31, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(331, 'बकैया गाउँपालिका', 3, 31, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(332, 'बाग्मती गाउँपालिका', 3, 31, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(333, 'भीमफेदी गाउँपालिका', 3, 31, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(334, 'मकवानपुरगढी गाउँपालिका', 3, 31, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(335, 'मनहरी गाउँपालिका', 3, 31, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(336, 'राक्सिराङ्ग गाउँपालिका', 3, 31, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(337, 'हेटौडा उपमहानगरपालिका', 3, 31, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(338, 'गरुडा नगरपालिका', 2, 32, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(339, 'चन्द्रपुर नगरपालिका', 2, 32, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(340, 'ईशनाथ नगरपालिका', 2, 32, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(341, 'कटहरिया नगरपालिका', 2, 32, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(342, 'गढीमाई नगरपालिका', 2, 32, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(343, 'गुजरा नगरपालिका', 2, 32, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(344, 'गौर नगरपालिका', 2, 32, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(345, 'दुर्गा भगवती गाउँपालिका', 2, 32, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(346, 'देवाही गोनाही   नगरपालिका', 2, 32, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(347, 'परोहा नगरपालिका', 2, 32, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(348, 'फतुवा बिजयपुर नगरपालिका', 2, 32, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(349, 'बौधीमाई नगरपालिका', 2, 32, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(350, 'माधव नारायण नगरपालिका', 2, 32, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(351, 'मौलापुर नगरपालिका', 2, 32, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(352, 'यमुनामाई  गाउँपालिका', 2, 32, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(353, 'राजदेवी नगरपालिका', 2, 32, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(354, 'राजपुर नगरपालिका', 2, 32, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(355, 'वृन्दावन नगरपालिका', 2, 32, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(356, 'आदर्श कोटवाल गाउँपालिका', 2, 33, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(357, 'करैयामाई गाउँपालिका', 2, 33, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(358, 'कलैया उपमहानगरपालिका', 2, 33, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(359, 'कोल्हवी नगरपालिका', 2, 33, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(360, 'जीतपुरसिमरा उपमहानगरपालिका', 2, 33, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(361, 'देवताल गाउँपालिका', 2, 33, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(362, 'निजगढ नगरपालिका', 2, 33, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(363, 'बारागढी गाउँपालिका', 2, 33, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(364, 'महागढीमाई नगरपालिका', 2, 33, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(365, 'सिम्रौनगढ नगरपालिका', 2, 33, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(366, 'सुवर्ण गाउँपालिका', 2, 33, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(367, 'पचरौता नगरपालिका', 2, 33, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(368, 'परवानीपुर गाउँपालिका', 2, 33, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(369, 'प्रसौनी गाउँपालिक', 2, 33, '2020-10-30 22:45:19', '2020-10-30 22:45:19'),
(370, 'फेटा गाउँपालिका', 2, 33, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(371, 'विश्रामपुर गाउँपालिका', 2, 33, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(372, 'छिपहरमाई गाउँपालिका', 2, 34, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(373, 'जगरनाथपुर गाउँपालिका', 2, 34, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(374, 'धोबीनी गाउँपालिका', 2, 34, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(375, 'पकाहा मैनपुर गाउँपालिका', 2, 34, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(376, 'बिन्दबासिनी गाउँपालिका', 2, 34, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(377, 'सखुवा प्रसौनी गाउँपालिका', 2, 34, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(378, 'कालिकामाई गाउँपालिका', 2, 34, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(379, 'जिराभवानी गाउँपालिका', 2, 34, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(380, 'ठोरी गाउँपालिका', 2, 34, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(381, 'पटेर्वा सुगौली गाउँपालिका', 2, 34, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(382, 'पर्सागढी नगरपालिका', 2, 34, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(383, 'पोखरिया नगरपालिका', 2, 34, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(384, 'बहुदरमाई नगरपालिका', 2, 34, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(385, 'बिरगंज महानगरपालिका', 2, 34, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(386, 'इच्छाकामना गाउँपालिका', 3, 35, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(387, 'कालिका नगरपालिका', 3, 35, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(388, 'खैरहनी नगरपालिका', 3, 35, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(389, 'भरतपुर महानगरपालिका', 3, 35, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(390, 'माडी नगरपालिका', 3, 35, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(391, 'रत्ननगर नगरपालिका', 3, 35, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(392, 'राप्ती नगरपालिका', 3, 35, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(393, 'अजिरकोट गाउँपालिका', 4, 36, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(394, 'आरूघाट गाउँपालिका', 4, 36, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(395, 'गण्डकी गाउँपालिका', 4, 36, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(396, 'गोरखा नगरपालिका', 4, 36, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(397, 'चुम नुव्री गाउँपालिका', 4, 36, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(398, 'धार्चे गाउँपालिका', 4, 36, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(399, 'पालुङटार नगरपालिका', 4, 36, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(400, 'भिमसेन गाउँपालिका', 4, 36, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(401, 'शहिद लखन गाउँपालिका', 4, 36, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(402, 'सिरानचोक गाउँपालिका', 4, 36, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(403, 'सुलीकोट गाउँपालिका', 4, 36, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(404, 'चामे गाउँपालिका', 4, 37, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(405, 'नारफू गाउँपालिका', 4, 37, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(406, 'नाशोङ गाउँपालिका', 4, 37, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(407, 'नेस्याङ गाउँपालिका', 4, 37, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(408, 'क्व्होलासोथार गाउँपालिका', 4, 38, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(409, 'दूधपोखरी गाउँपालिका', 4, 38, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(410, 'दोर्दी गाउँपालिका', 4, 38, '2020-10-30 22:45:20', '2020-10-30 22:45:20'),
(411, 'बेसीशहर नगरपालिका', 4, 38, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(412, 'मध्यनेपाल नगरपालिका', 4, 38, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(413, 'मर्स्याङदी गाउँपालिका', 4, 38, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(414, 'रार्इनास नगरपालिका', 4, 38, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(415, 'सुन्दरबजार नगरपालिका', 4, 38, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(416, 'अन्नपुर्ण गाउँपालिका', 4, 39, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(417, 'पोखरा लेखनाथ महानगरपालिका', 4, 39, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(418, 'माछापुछ्रे गाउँपालिका', 4, 39, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(419, 'मादी गाउँपालिका', 4, 39, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(420, 'रूपा गाउँपालिका', 4, 39, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(421, 'आँबुखैरेनी गाउँपालिका', 4, 40, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(422, 'ऋषिङ्ग गाउँपालिका', 4, 40, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(423, 'घिरिङ गाउँपालिका', 4, 40, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(424, 'देवघाट गाउँपालिका', 4, 40, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(425, 'बन्दिपुर गाउँपालिका', 4, 40, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(426, 'भानु नगरपालिका', 4, 40, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(427, 'भिमाद नगरपालिका', 4, 40, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(428, 'म्याग्दे गाउँपालिका', 4, 40, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(429, 'व्यास नगरपालिका', 4, 40, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(430, 'शुक्लागण्डकी नगरपालिका', 4, 40, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(431, 'अर्जुन चौपारी गाउँपालिका', 4, 41, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(432, 'आँधीखोला गाउँपालिका', 4, 41, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(433, 'कालीगण्डकी गाउँपालिका', 4, 41, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(434, 'गल्याङ नगरपालिका', 4, 41, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(435, 'चापाकोट नगरपालिका', 4, 41, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(436, 'पुतलीबजार नगरपालिका', 4, 41, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(437, 'फेदीखोला गाउँपालिका', 4, 41, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(438, 'भिरकोट नगरपालिका', 4, 41, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(439, 'वालिङ नगरपालिका', 4, 41, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(440, 'विरुवा गाउँपालिका', 4, 41, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(441, 'हरीनास गाउँपालिका', 4, 41, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(442, 'ईस्मा गाउँपालिका', 5, 42, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(443, 'कालीगण्डकी गाउँपालिका', 5, 42, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(444, 'गुल्मीदरवार गाउँपालिका', 5, 42, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(445, 'चन्द्रकोट गाउँपालिका', 5, 42, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(446, 'छत्रकोट गाउँपालिका', 5, 42, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(447, 'धुर्कोट गाउँपालिका', 5, 42, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(448, 'मदाने गाउँपालिका', 5, 42, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(449, 'मालिका गाउँपालिका', 5, 42, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(450, 'मुसिकोट नगरपालिका', 5, 42, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(451, 'रुरु गाउँपालिका', 5, 42, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(452, 'रेसुङ्गा नगरपालिका', 5, 42, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(453, 'सत्यवती गाउँपालिका', 5, 42, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(454, 'तानसेन नगरपालिका', 5, 43, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(455, 'तिनाउ गाउँपालिका', 5, 43, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(456, 'निस्दी गाउँपालिका', 5, 43, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(457, 'पूर्वखोला गाउँपालिका', 5, 43, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(458, 'बगनासकाली गाउँपालिका', 5, 43, '2020-10-30 22:45:21', '2020-10-30 22:45:21'),
(459, 'माथागढी गाउँपालिका', 5, 43, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(460, 'रम्भा गाउँपालिका', 5, 43, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(461, 'रामपुर नगरपालिका', 5, 43, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(462, 'रिब्दिकोट गाउँपालिका', 5, 43, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(463, 'रैनादेवी छहरा गाउँपालिका', 5, 43, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(464, 'छत्रदेव गाउँपालिका', 5, 44, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(465, 'पाणिनी गाउँपालिका', 5, 44, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(466, 'भूमिकास्थान नगरपालिका', 5, 44, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(467, 'मालारानी गाउँपालिका', 5, 44, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(468, 'सन्धिखर्क नगरपालिका', 5, 44, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(469, 'सितगंगा नगरपालिका', 5, 44, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(470, 'कावासोती नगरपालिका', 4, 45, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(471, 'गैडाकोट नगरपालिका', 4, 45, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(472, 'देवचुली नगरपालिका', 4, 45, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(473, 'बुङदीकाली गाउँपालिका', 4, 45, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(474, 'बुलिङटार गाउँपालिका', 4, 45, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(475, 'मध्यविन्दु नगरपालिका', 4, 45, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(476, 'विनयी त्रिवेणी गाउँपालिका', 4, 45, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(477, 'हुप्सेकोट गाउँपालिका', 4, 45, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(478, 'ओमसतिया गाउँपालिका', 5, 46, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(479, 'कंचन गाउँपालिका', 5, 46, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(480, 'कोटहीमाई गाउँपालिका', 5, 46, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(481, 'गैडहवा गाउँपालिका', 5, 46, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(482, 'तिलोत्तमा नगरपालिका', 5, 46, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(483, 'देवदह नगरपालिका', 5, 46, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(484, 'बुटवल उपमहानगरपालिका', 5, 46, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(485, 'मर्चवारी गाउँपालिका', 5, 46, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(486, 'मायादेवी गाउँपालिका', 5, 46, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(487, 'रोहिणी गाउँपालिका', 5, 46, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(488, 'लुम्बिनी सांस्कृतिक नगरपालिका', 5, 46, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(489, 'शुद्धोधन गाउँपालिका', 5, 46, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(490, 'सम्मरीमाई गाउँपालिका', 5, 46, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(491, 'सिद्धार्थनगर नगरपालिका', 5, 46, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(492, 'सियारी गाउँपालिका', 5, 46, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(493, 'सैनामैना नगरपालिका', 5, 46, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(494, 'कपिलवस्तु नगरपालिका', 5, 47, '2020-10-30 22:45:22', '2020-10-30 22:45:22'),
(495, 'कृष्णनगर नगरपालिका', 5, 47, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(496, 'बाणगंगा नगरपालिका', 5, 47, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(497, 'बुद्धभूमी नगरपालिका', 5, 47, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(498, 'महाराजगंज नगरपालिका', 5, 47, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(499, 'मायादेवी गाउँपालिका', 5, 47, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(500, 'यसोधरा गाउँपालिका', 5, 47, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(501, 'विजयनगर गाउँपालिका', 5, 47, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(502, 'शिवराज नगरपालिका', 5, 47, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(503, 'शुद्धोधन गाउँपालिका', 5, 47, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(504, 'घरपझोङ गाउँपालिका', 4, 48, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(505, 'थासाङ गाउँपालिका', 4, 48, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(506, 'दालोमे गाउँपालिका', 4, 48, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(507, 'बाह्गाउँ मुक्तिक्षेत्र गाउँपालिका', 4, 48, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(508, 'लोमन्थाङ गाउँपालिका', 4, 48, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(509, 'अन्नपूर्ण गाउँपालिका', 4, 49, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(510, 'धवलागिरी गाउँपालिका', 4, 49, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(511, 'बेनी  नगरपालिका', 4, 49, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(512, 'मंगला गाउँपालिका', 4, 49, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(513, 'मालिका गाउँपालिका', 4, 49, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(514, 'रघुगंगा गाउँपालिका', 4, 49, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(515, 'काठेखोला गाउँपालिका', 4, 50, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(516, 'गल्कोट नगरपालिका', 4, 50, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(517, 'जैमुनी नगरपालिका', 4, 50, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(518, 'ढोरपाटन नगरपालिका', 4, 50, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(519, 'तमानखोला गाउँपालिका', 4, 50, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(520, 'ताराखोला गाउँपालिका', 4, 50, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(521, 'निसीखोला गाउँपालिका', 4, 50, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(522, 'बागलुङ नगरपालिका', 4, 50, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(523, 'वडिगाड गाउँपालिका', 4, 50, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(524, 'वरेङ गाउँपालिका', 4, 50, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(525, 'कुश्मा नगरपालिका', 4, 51, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(526, 'जलजला गाउँपालिका', 4, 51, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(527, 'पैयूं गाउँपालिका', 4, 51, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(528, 'फलेवास नगरपालिका', 4, 51, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(529, 'महाशिला गाउँपालिका', 4, 51, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(530, 'मोदी गाउँपालिका', 4, 51, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(531, 'विहादी गाउँपालिका', 4, 51, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(532, 'पुथा उत्तरगंगा गाउँपालिका', 5, 52, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(533, 'भूमे गाउँपालिका', 5, 52, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(534, 'सिस्ने गाउँपालिका', 5, 52, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(535, 'त्रिवेणी गाउँपालिका', 5, 53, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(536, 'थवाङ गाउँपालिका', 5, 53, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(537, 'दुईखोली गाउँपालिका', 5, 53, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(538, 'माडी गाउँपालिका', 5, 53, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(539, 'रुन्टीगढी गाउँपालिका', 5, 53, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(540, 'रोल्पा नगरपालिका', 5, 53, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(541, 'लुङग्री गाउँपालिका', 5, 53, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(542, 'सुकिदह गाउँपालिका', 5, 53, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(543, 'सुनछहरी गाउँपालिका', 5, 53, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(544, 'सुवर्णावती गाउँपालिका', 5, 53, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(545, 'ऐरावती गाउँपालिका', 5, 54, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(546, 'गौमुखी गाउँपालिका', 5, 54, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(547, 'झिमरुक गाउँपालिका', 5, 54, '2020-10-30 22:45:23', '2020-10-30 22:45:23'),
(548, 'नौवहिनी गाउँपालिका', 5, 54, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(549, 'प्यूठान नगरपालिका', 5, 54, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(550, 'मल्लरानी गाउँपालिका', 5, 54, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(551, 'माण्डवी गाउँपालिका', 5, 54, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(552, 'सरुमारानी गाउँपालिका', 5, 54, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(553, 'स्वर्गद्वारी नगरपालिका', 5, 54, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(554, 'कपुरकोट गाउँपालिका', 6, 55, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(555, 'कालीमाटी गाउँपालिका', 6, 55, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(556, 'कुमाखमालिका गाउँपालिका', 6, 55, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(557, 'छत्रेश्वरी गाउँपालिका', 6, 55, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(558, 'ढोरचौर गाउँपालिका', 6, 55, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(559, 'त्रिवेणी गाउँपालिका', 6, 55, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(560, 'दार्मा गाउँपालिका', 6, 55, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(561, 'बनगाड कुपिण्डे नगरपालिका', 6, 55, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(562, 'बागचौर नगरपालिका', 6, 55, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(563, 'शारदा नगरपालिका', 6, 55, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(564, 'गढवा गाउँपालिका', 5, 56, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(565, 'घोराही उपमहानगरपालिका', 5, 56, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(566, 'तुल्सिपुर उपमहानगरपालिका', 5, 56, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(567, 'दंगीशरण गाउँपालिका', 5, 56, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(568, 'बंगलाचुली गाउँपालिका', 5, 56, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(569, 'बबई गाउँपालिका', 5, 56, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(570, 'राजपुर गाउँपालिका', 5, 56, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(571, 'राप्ती गाउँपालिका', 5, 56, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(572, 'लमही नगरपालिका', 5, 56, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(573, 'शान्तिनगर गाउँपालिका', 5, 56, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(574, 'काईके गाउँपालिका', 6, 57, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(575, 'छार्का ताङसोङ गाउँपालिका', 6, 57, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(576, 'जगदुल्ला गाउँपालिका', 6, 57, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(577, 'ठूली भेरी नगरपालिका', 6, 57, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(578, 'डोल्पो बुद्ध गाउँपालिका', 6, 57, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(579, 'त्रिपुरासुन्दरी नगरपालिका', 6, 57, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(580, 'मुड्केचुला गाउँपालिका', 6, 57, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(581, 'शे फोक्सुन्डो गाउँपालिका', 6, 57, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(582, 'खत्याड गाउँपालिका', 6, 58, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(583, 'छायाँनाथ रारा नगरपालिका', 6, 58, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(584, 'मुगुम कार्मारोंग गाउँपालिका', 6, 58, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(585, 'सोरु गाउँपालिका', 6, 58, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(586, 'कनकासुन्दरी गाउँपालिका', 6, 59, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(587, 'गुठिचौर गाउँपालिका', 6, 59, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(588, 'चन्दननाथ नगरपालिका', 6, 59, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(589, 'तातोपानी गाउँपालिका', 6, 59, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(590, 'तिला गाउँपालिका', 6, 59, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(591, 'पातारासी गाउँपालिका', 6, 59, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(592, 'सिंजा गाउँपालिका', 6, 59, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(593, 'हिमा गाउँपालिका', 6, 59, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(594, 'कालिका गाउँपालिका', 6, 60, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(595, 'खाँडाचक्र नगरपालिका', 6, 60, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(596, 'तिलागुफा नगरपालिका', 6, 60, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(597, 'नरहरिनाथ गाउँपालिका', 6, 60, '2020-10-30 22:45:24', '2020-10-30 22:45:24'),
(598, 'पचालझरना गाउँपालिका', 6, 60, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(599, 'पलाता गाउँपालिका', 6, 60, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(600, 'महावै गाउँपालिका', 6, 60, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(601, 'रास्कोट नगरपालिका', 6, 60, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(602, 'सान्नी त्रिवेणी गाउँपालिका', 6, 60, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(603, 'अदानचुली गाउँपालिका', 6, 61, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(604, 'खार्पुनाथ गाउँपालिका', 6, 61, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(605, 'चंखेली गाउँपालिका', 6, 61, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(606, 'ताँजाकोट गाउँपालिका', 6, 61, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(607, 'नाम्खा गाउँपालिका', 6, 61, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(608, 'सर्केगाड गाउँपालिका', 6, 61, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(609, 'सिमकोट गाउँपालिका', 6, 61, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(610, 'कुसे गाउँपालिका', 6, 62, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(611, 'छेडागाड नगरपालिका', 6, 62, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(612, 'जुनीचाँदे गाउँपालिका', 6, 62, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(613, 'त्रिवेणी नलगाड नगरपालिका', 6, 62, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(614, 'बारेकोट गाउँपालिका', 6, 62, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(615, 'भेरी नगरपालिका', 6, 62, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(616, 'शिवालय गाउँपालिका', 6, 62, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(617, 'आठबीस नगरपालिका', 6, 63, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(618, 'गुराँस गाउँपालिका', 6, 63, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(619, 'चामुण्डा विन्द्रासैनी नगरपालिका', 6, 63, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(620, 'ठाँटीकाँध गाउँपालिका', 6, 63, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(621, 'डुंगेश्वर गाउँपालिका', 6, 63, '2020-10-30 22:45:25', '2020-10-30 22:45:25');
INSERT INTO `municipality` (`id`, `name`, `pradesh_id`, `district_id`, `created_at`, `updated_at`) VALUES
(622, 'दुल्लु नगरपालिका', 6, 63, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(623, 'नारायण नगरपालिका', 6, 63, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(624, 'नौमुले गाउँपालिका', 6, 63, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(625, 'भगवतीमाई गाउँपालिका', 6, 63, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(626, 'भैरवी गाउँपालिका', 6, 63, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(627, 'महावु गाउँपालिका', 6, 63, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(628, 'गुर्भाकोट नगरपालिका', 6, 64, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(629, 'चिङ्गाड गाउँपालिका', 6, 64, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(630, 'चौकुने गाउँपालिका', 6, 64, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(631, 'पञ्चपुरी नगरपालिका', 6, 64, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(632, 'बराहताल गाउँपालिका', 6, 64, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(633, 'बीरेन्द्रनगर नगरपालिका', 6, 64, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(634, 'भेरीगंगा नगरपालिका', 6, 64, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(635, 'लेकबेशी नगरपालिका', 6, 64, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(636, 'सिम्ता गाउँपालिका', 6, 64, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(637, 'कोहलपुर नगरपालिका', 5, 65, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(638, 'खजुरा गाउँपालिका', 5, 65, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(639, 'जानकी गाउँपालिका', 5, 65, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(640, 'डुडुवा गाउँपालिका', 5, 65, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(641, 'नरैनापुर गाउँपालिका', 5, 65, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(642, 'नेपालगंज उपमहानगरपालिका', 5, 65, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(643, 'बैजनाथ गाउँपालिका', 5, 65, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(644, 'राप्ती सोनारी गाउँपालिका', 5, 65, '2020-10-30 22:45:25', '2020-10-30 22:45:25'),
(645, 'गुलरिया नगरपालिका', 5, 66, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(646, 'गेरुवा गाउँपालिका', 5, 66, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(647, 'ठाकुरबाबा नगरपालिका', 5, 66, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(648, 'बढैयाताल गाउँपालिका', 5, 66, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(649, 'बारबर्दिया नगरपालिका', 5, 66, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(650, 'बासगढी नगरपालिका', 5, 66, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(651, 'मधुवन नगरपालिका', 5, 66, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(652, 'राजापुर नगरपालिका', 5, 66, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(653, 'गौमुल गाउँपालिका', 7, 67, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(654, 'छेडेदह गाउँपालिका', 7, 67, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(655, 'त्रिवेणी नगरपालिका', 7, 67, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(656, 'पाण्डवगुफा गाउँपालिका', 7, 67, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(657, 'बडीमालिका नगरपालिका', 7, 67, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(658, 'बुढीगंगा नगरपालिका', 7, 67, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(659, 'बुढीनन्दा नगरपालिका', 7, 67, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(660, 'स्वामीकार्तिक गाउँपालिका', 7, 67, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(661, 'हिमाली गाउँपालिका', 7, 67, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(662, 'कमलबजार नगरपालिका', 7, 68, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(663, 'चौरपाटी गाउँपालिका', 7, 68, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(664, 'ढकारी गाउँपालिका', 7, 68, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(665, 'तुर्माखाँद गाउँपालिका', 7, 68, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(666, 'पञ्चदेवल विनायक नगरपालिका', 7, 68, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(667, 'बान्नीगढी जयगढ गाउँपालिका', 7, 68, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(668, 'मंगलसेन नगरपालिका', 7, 68, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(669, 'मेल्लेख गाउँपालिका', 7, 68, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(670, 'रामारोशन गाउँपालिका', 7, 68, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(671, 'साफेबगर नगरपालिका', 7, 68, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(672, 'काँडा गाउँपालिका', 7, 69, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(673, 'केदारस्युँ गाउँपालिका', 7, 69, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(674, 'खप्तडछान्ना गाउँपालिका', 7, 69, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(675, 'छबिसपाथिभेरा गाउँपालिका', 7, 69, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(676, 'जयपृथ्वी नगरपालिका', 7, 69, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(677, 'तलकोट गाउँपालिका', 7, 69, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(678, 'थलारा गाउँपालिका', 7, 69, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(679, 'दुर्गाथली गाउँपालिका', 7, 69, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(680, 'बुंगल नगरपालिका', 7, 69, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(681, 'मष्टा गाउँपालिका', 7, 69, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(682, 'वित्थडचिर गाउँपालिका', 7, 69, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(683, 'सूर्मा गाउँपालिका', 7, 69, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(684, 'आदर्श गाउँपालिका', 7, 70, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(685, 'के.आई.सिं. गाउँपालिका', 7, 70, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(686, 'जोरायल गाउँपालिका', 7, 70, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(687, 'दिपायल सिलगढी नगरपालिका', 7, 70, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(688, 'पूर्वीचौकी गाउँपालिका', 7, 70, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(689, 'बडीकेदार गाउँपालिका', 7, 70, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(690, 'बोगटान गाउँपालिका', 7, 70, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(691, 'शिखर नगरपालिका', 7, 70, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(692, 'सायल गाउँपालिका', 7, 70, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(693, 'कैलारी गाउँपालिका', 7, 71, '2020-10-30 22:45:26', '2020-10-30 22:45:26'),
(694, 'गोदावरी नगरपालिका', 7, 71, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(695, 'गौरीगंगा नगरपालिका', 7, 71, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(696, 'घोडाघोडी नगरपालिका', 7, 71, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(697, 'चुरे गाउँपालिका', 7, 71, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(698, 'जानकी गाउँपालिका', 7, 71, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(699, 'जोशीपुर गाउँपालिका', 7, 71, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(700, 'टिकापुर नगरपालिका', 7, 71, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(701, 'धनगढी उपमहानगरपालिका', 7, 71, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(702, 'बर्दगोरीया गाउँपालिका', 7, 71, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(703, 'भजनी नगरपालिका', 7, 71, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(704, 'मोहन्याल गाउँपालिका', 7, 71, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(705, 'लम्की चुहा नगरपालिका', 7, 71, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(706, 'अपिहिमाल गाउँपालिका', 7, 72, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(707, 'दुहुँ गाउँपालिका', 7, 72, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(708, 'नौगाड गाउँपालिका', 7, 72, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(709, 'ब्यास गाउँपालिका', 7, 72, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(710, 'महाकाली नगरपालिका', 7, 72, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(711, 'मार्मा गाउँपालिका', 7, 72, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(712, 'मालिकार्जुन गाउँपालिका', 7, 72, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(713, 'लेकम गाउँपालिका', 7, 72, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(714, 'शैल्यशिखर नगरपालिका', 7, 72, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(715, 'डीलासैनी गाउँपालिका', 7, 73, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(716, 'दशरथचन्द नगरपालिका', 7, 73, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(717, 'दोगडाकेदार गाउँपालिका', 7, 73, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(718, 'पन्चेश्वर गाउँपालिका', 7, 73, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(719, 'पाटन नगरपालिका', 7, 73, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(720, 'पुर्चौडी नगरपालिका', 7, 73, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(721, 'मेलौली नगरपालिका', 7, 73, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(722, 'शिवनाथ गाउँपालिका', 7, 73, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(723, 'सिगास गाउँपालिका', 7, 73, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(724, 'सुर्नया गाउँपालिका', 7, 73, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(725, 'अजयमेरु गाउँपालिका', 7, 74, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(726, 'अमरगढी नगरपालिका', 7, 74, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(727, 'आलिताल गाउँपालिका', 7, 74, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(728, 'गन्यापधुरा गाउँपालिका', 7, 74, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(729, 'नवदुर्गा गाउँपालिका', 7, 74, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(730, 'परशुराम नगरपालिका', 7, 74, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(731, 'भागेश्वर गाउँपालिका', 7, 74, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(732, 'कृष्णपुर नगरपालिका', 7, 75, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(733, 'पुनर्वास नगरपालिका', 7, 75, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(734, 'बेलडाडी गाउँपालिका', 7, 75, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(735, 'बेलौरी नगरपालिका', 7, 75, '2020-10-30 22:45:27', '2020-10-30 22:45:27'),
(736, 'भीमदत्त नगरपालिका', 7, 75, '2020-10-30 22:45:28', '2020-10-30 22:45:28'),
(737, 'माहाकाली नगरपालिका', 7, 75, '2020-10-30 22:45:28', '2020-10-30 22:45:28'),
(738, 'लालझाँडी गाउँपालिका', 7, 75, '2020-10-30 22:45:28', '2020-10-30 22:45:28'),
(739, 'वेदकोट नगरपालिका', 7, 75, '2020-10-30 22:45:28', '2020-10-30 22:45:28'),
(740, 'सुक्लाफाँटा नगरपालिका', 7, 75, '2020-10-30 22:45:28', '2020-10-30 22:45:28'),
(741, 'सुस्ता गाउँपालिका', 4, 76, '2020-10-30 22:45:28', '2020-10-30 22:45:28'),
(742, 'पाल्हीनन्दन गाउँपालिका', 4, 76, '2020-10-30 22:45:28', '2020-10-30 22:45:28'),
(743, 'प्रतापपुर गाउँपालिका', 4, 76, '2020-10-30 22:45:28', '2020-10-30 22:45:28'),
(744, 'बर्दघाट नगरपालिका', 4, 76, '2020-10-30 22:45:28', '2020-10-30 22:45:28'),
(745, 'रामग्राम नगरपालिका', 4, 76, '2020-10-30 22:45:28', '2020-10-30 22:45:28'),
(746, 'सरावल गाउँपालिका', 4, 76, '2020-10-30 22:45:28', '2020-10-30 22:45:28'),
(747, 'सुनवल नगरपालिका', 4, 76, '2020-10-30 22:45:28', '2020-10-30 22:45:28'),
(748, 'आठबिसकोट नगरपालिका', 6, 77, '2020-10-30 22:45:28', '2020-10-30 22:45:28'),
(749, 'चौरजहारी नगरपालिका', 6, 77, '2020-10-30 22:45:28', '2020-10-30 22:45:28'),
(750, 'त्रिवेणी गाउँपालिका', 6, 77, '2020-10-30 22:45:28', '2020-10-30 22:45:28'),
(751, 'बाँफिकोट गाउँपालिका', 6, 77, '2020-10-30 22:45:28', '2020-10-30 22:45:28'),
(752, 'मुसिकोट नगरपालिका', 6, 77, '2020-10-30 22:45:28', '2020-10-30 22:45:28'),
(753, 'सानीभेरी गाउँपालिका', 6, 77, '2020-10-30 22:45:28', '2020-10-30 22:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `text` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(225) DEFAULT NULL,
  `link` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `text`, `status`, `created_at`, `publish_date`, `updated_at`, `type`, `link`) VALUES
(8, 'कांग्रेसको गरिखाने अभियान', '16151124811615112481.jpg', '<p>Test</p>', 1, '2021-02-01 07:43:08', '2021-03-19', '2021-03-19 06:52:57', 'news', 'https://ehimalayatimes.com/sampadakiya/52911'),
(10, '६० लाख नेपालीलाई गरिखाने बनाउने नेपाली अर्बपतिको सपना', '16148523891614852389.jpg', NULL, 1, '2021-03-04 10:06:29', '2021-01-19', '2021-04-18 10:23:57', 'news', 'https://ekagaj.com/article/finance/4710?fbclid=IwAR0heIH1wvaMsr64Lw30Akue6HVBO3VIEkvmUX8Xr_Hu9Yg2Dy_Ztcc93QI'),
(11, 'विनोद चौधरीको नेतृत्वमा कांग्रेसको ‘गरिखाने अभियान’ सुरु', '16151096611615109661.jpg', NULL, 1, '2021-03-07 08:47:32', '2021-01-28', '2021-03-07 09:34:21', 'news', 'https://deshantarnews.com/?p=77312'),
(14, 'उद्योगपति विनोद चौधरीको संयोजनमा ‘गरीखाने अभियान’ शुरू - आर्थिक अभियान', '16161366211616136621.jpg', NULL, 1, '2021-03-19 06:50:21', '2021-01-29', '2021-03-19 06:50:21', 'news', 'https://www.abhiyandaily.com/newscategory-detail/381307'),
(17, 'Congress is working for the prosperity of working class: – Chaudhary', '16185669941618566994.jpg', '<p>Garikhane Pokhara Program</p>', 1, '2021-04-16 09:56:34', '2021-01-29', '2021-04-16 09:56:34', 'news', 'https://english.tukhabar.com/?p=5087');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `image` varchar(225) DEFAULT NULL,
  `text` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `link` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `image`, `text`, `status`, `created_at`, `updated_at`, `link`) VALUES
(4, 'बिरगंज कार्यक्रम', '16122538931612253893.jpg', '<p>बिरगंज कार्यक्रम&nbsp;</p>', 1, '2021-01-10 08:37:59', '2021-07-14 05:08:29', NULL),
(10, 'झापा  कार्यक्रम', '16130457401613045740.jpg', '<p>झापा&nbsp; कार्यक्रम&nbsp; - फाल्गुन १७ मा हुन लागेको जानकारी गरिन्छ |</p>', 1, '2021-02-11 12:15:40', '2021-07-09 04:44:22', NULL),
(14, 'गरिखाने सचिवालय सरेको सूचना', '16258077701625807770.png', '<p>यस गरिखाने अभियानको सचिवालय हात्तिवन ललितबाट सेन्ट्रल बिजनेश पार्क, थापाथली, काठमाण्डौ (दोश्रो तल्ला)मा सरेको कुरा जानकारी गराइन्छ |</p>', 1, '2021-07-09 05:16:10', '2021-07-09 05:29:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `send_to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `send_to`, `type`, `item_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'All', 'event', 16, 'New Event', 'New event has been added', '2021-01-30 23:02:09', '2021-01-30 23:02:09'),
(2, 'All', 'job', 75, 'Job Added', 'New Job has been added', '2021-05-27 17:38:30', '2021-05-27 17:38:30'),
(3, 'All', 'News/Press Release', 14, 'News/Press Release', 'New News/Press Release has been added', '2021-05-13 17:40:28', '2021-05-13 17:40:28'),
(4, 'All', 'job', 71, 'new Job ', 'New job has been added', '2021-05-10 17:40:28', '2021-05-10 17:40:28'),
(5, 'All', 'Job', 74, 'Karmabhomi', ' New Job has added', '2021-05-31 07:28:05', '2021-05-31 07:28:05'),
(6, 'All', 'Job', 96, 'Karmabhomi', ' New Job has been added', '2021-06-24 12:19:31', '2021-06-24 12:19:31'),
(7, 'All', 'Event', 31, 'Garikhanne', ' New Event has been added', '2021-06-24 12:20:52', '2021-06-24 12:20:52'),
(8, 'All', 'event', 31, 'Karmabhomi', 'New Event test event', '2021-07-04 11:25:18', '2021-07-04 11:25:18'),
(9, 'All', 'event', 29, 'Karmabhomi', 'New Event Test Event -2', '2021-07-04 11:25:39', '2021-07-04 11:25:39'),
(10, 'All', 'event', 31, 'Karmabhomi', 'New Event test event', '2021-07-05 05:19:55', '2021-07-05 05:19:55'),
(11, 'All', 'Job', 3, 'Karmabhomi', ' New Job has added', '2021-07-05 05:22:03', '2021-07-05 05:22:03'),
(12, 'All', 'Job', 3, 'Karmabhomi', ' New Job has added', '2021-07-05 05:27:38', '2021-07-05 05:27:38'),
(13, 'All', 'Job', 3, 'Karmabhomi', ' New Job has added', '2021-07-05 05:31:34', '2021-07-05 05:31:34'),
(14, 'All', 'event', 20, 'Karmabhomi', 'New Event उद्यमशीलता र वित्तीय साक्षरता अभिमुखीकरण कार्यक्रम', '2021-07-05 05:50:21', '2021-07-05 05:50:21'),
(15, 'All', 'event', 31, 'Karmabhomi', 'New Event test event', '2021-07-05 05:55:37', '2021-07-05 05:55:37'),
(16, 'All', 'event', 29, 'Karmabhomi', 'New Event Test Event -2', '2021-07-05 07:44:45', '2021-07-05 07:44:45'),
(17, 'All', 'event', 31, 'Karmabhomi', 'New Event test event', '2021-07-05 07:45:43', '2021-07-05 07:45:43'),
(18, 'All', 'event', 13, 'Karmabhomi', 'New Notice (विदा - नव वर्ष २०७८)', '2021-07-05 07:45:58', '2021-07-05 07:45:58'),
(19, 'All', 'event', 13, 'Karmabhomi', 'New Notice (विदा - नव वर्ष २०७८)', '2021-07-05 10:42:53', '2021-07-05 10:42:53'),
(20, 'All', 'Job', 97, 'Karmabhomi', ' New Job has been added', '2021-07-05 17:12:19', '2021-07-05 17:12:19'),
(21, 'All', 'event', 29, 'Karmabhomi', 'New Event Test Event -2', '2021-07-07 06:14:37', '2021-07-07 06:14:37'),
(22, 'All', 'Event', 32, 'Garikhanne', ' New Event has been added', '2021-07-07 06:17:40', '2021-07-07 06:17:40');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `link` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `title`, `image`, `link`, `created_at`, `updated_at`) VALUES
(4, 'सिटिजन्स बैंक', '16137223451613722345.jpg', 'https://www.ctznbank.com/', '2021-07-11 09:36:16', '2021-07-11 03:51:16'),
(5, 'नेपाल बंगलादेश बैंक', '16137229271613722927.jpg', 'https://www.nbbl.com.np/', '2021-07-11 09:34:42', '2021-07-11 03:49:42'),
(9, 'कर्मभूमि समाज', '16259960201625996020.JPG', 'https://www.karmabhoomisamaj.com/', '2021-07-11 09:33:40', '2021-07-11 03:48:40'),
(10, 'नविल बैंक', '16262605521626260552.jpg', 'https://www.nabilbank.com/', '2021-07-14 05:17:32', '2021-07-14 05:17:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('rama@gmail.com', '$2y$10$Gb6THTwLat6wSkvlRjr7Oep5KxLquyapKGrQJJKwsKx6qnKPw/68i', '2020-09-25 01:25:28');

-- --------------------------------------------------------

--
-- Table structure for table `pdf`
--

CREATE TABLE `pdf` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `file` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pdf`
--

INSERT INTO `pdf` (`id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(11, 'K0012-CitizenBank-Declaration-Blacklist', '16141621141614162114.docx', '2021-02-24 10:21:54', '2021-02-24 10:21:54'),
(12, 'K011-CitizenBank-Full Application Form_SME', '16141631921614163192.pdf', '2021-02-24 10:39:52', '2021-02-24 10:39:52'),
(13, 'K010-CitizenBank-Personal Details of Individual-REVISED', '16141662651614166265.pdf', '2021-02-24 11:31:05', '2021-02-24 11:31:05'),
(14, 'K009-CitizenBank-Others Docs_KYC NETWORTH', '16141662901614166290.pdf', '2021-02-24 11:31:30', '2021-02-24 11:31:30'),
(15, 'K008-CitizenBank- Application form_ foreign returnee', '16141663061614166306.pdf', '2021-02-24 11:31:46', '2021-02-24 11:31:46'),
(16, 'K007-CitizenBank-Application form_Sikchit Yuwa Swarojgar Annex 1', '16141663241614166324.pdf', '2021-02-24 11:32:04', '2021-02-24 11:32:04'),
(17, 'K006-CitizenBank-Application form_Mahila uddhamshilata karja', '16141663411614166341.pdf', '2021-02-24 11:32:21', '2021-02-24 11:32:21'),
(18, 'K005-CitizenBank-Application form_Dalit Community', '16141663571614166357.pdf', '2021-02-24 11:32:37', '2021-02-24 11:32:37'),
(19, 'K004-CitizenBank- Application form_Commercial Agro & Livestock Loan', '16141664211614166421.pdf', '2021-02-24 11:33:41', '2021-02-24 11:33:41'),
(20, 'कर्मभूमि समाजको कम्पनी प्रोफाईल', '16260691471626069147.pdf', '2021-02-24 11:44:12', '2021-07-12 00:07:27'),
(21, 'गरिखाने - संचालन कार्यविधि प्रथम संस्करण_बैशाख२०७८', '16260687061626068706.pdf', '2021-02-24 11:44:37', '2021-07-12 00:00:06'),
(22, 'परियोजनाको आवेदन फारम', '16260675211626067521.pdf', '2021-02-24 11:45:00', '2021-07-11 23:40:21'),
(26, 'गरिखाने परियोजना  छनौट सम्बन्धि अवधारणा', '16260673351626067335.pdf', '2021-04-16 09:19:26', '2021-07-11 23:38:43');

-- --------------------------------------------------------

--
-- Table structure for table `popup`
--

CREATE TABLE `popup` (
  `id` int(11) NOT NULL,
  `title` varchar(225) DEFAULT NULL,
  `description` varchar(225) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `popup`
--

INSERT INTO `popup` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Karmabhumi Samaj', NULL, '16111588711611158871.jpg', '2021-01-20 10:22:51', '2021-02-13 12:57:01', 0),
(3, 'Karmabhoomi Samaj Program', '<p>Test</p>', '16117302191611730219.PNG', '2021-01-27 01:05:19', '2021-02-24 09:29:14', 0),
(6, 'Jhapa Road Show', '<p>Jhapa Road Sho Program at Dhulabari.</p>', '16141588451614158845.PNG', '2021-02-24 09:27:25', '2021-02-24 09:33:59', 0),
(7, 'Rautahat Road Show', '<p>Rautahat Road Show at Chandranigahapur, Rautahat.</p>', '16141588991614158899.PNG', '2021-02-24 09:28:19', '2021-03-30 07:11:07', 0),
(8, 'Mahendranagar Road Show', '<p>Mahendranagar Road Show</p>', '16141589451614158945.PNG', '2021-02-24 09:29:05', '2021-04-16 06:29:02', 0),
(13, 'Happy New Year', '<p>Happy New Year</p>', '16185551971618555197.jpeg', '2021-04-09 10:05:50', '2021-04-16 06:46:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pradesh`
--

CREATE TABLE `pradesh` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pradesh`
--

INSERT INTO `pradesh` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'प्रदेश नं १', '2020-10-31 03:38:57', '0000-00-00 00:00:00'),
(2, 'प्रदेश नं २', '2020-10-31 03:38:57', '0000-00-00 00:00:00'),
(3, 'बागमती प्रदेश', '2020-10-31 03:38:57', '0000-00-00 00:00:00'),
(4, 'गण्डकी प्रदेश', '2020-10-31 03:38:57', '0000-00-00 00:00:00'),
(5, 'प्रदेश नं ५', '2020-10-31 03:38:57', '0000-00-00 00:00:00'),
(6, 'कर्णाली प्रदेश', '2020-10-31 03:38:57', '0000-00-00 00:00:00'),
(7, 'सुदूरपश्चिम प्रदेश', '2020-10-31 03:38:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `project_idea_bank`
--

CREATE TABLE `project_idea_bank` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `image` varchar(225) DEFAULT NULL,
  `bgimage` varchar(225) DEFAULT NULL,
  `sector` varchar(225) DEFAULT NULL,
  `location` varchar(225) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `project_component` text DEFAULT NULL,
  `market_opportunity` text DEFAULT NULL,
  `success_example` text DEFAULT NULL,
  `d_i_modality` text DEFAULT NULL,
  `project_cost` int(11) DEFAULT NULL,
  `irr` int(11) DEFAULT NULL,
  `reference` text DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `project_id` int(11) NOT NULL,
  `pdf` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `running_capitals`
--

CREATE TABLE `running_capitals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `karmabhomi_id` int(11) DEFAULT NULL,
  `running_property` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approx_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `running_capitals`
--

INSERT INTO `running_capitals` (`id`, `karmabhomi_id`, `running_property`, `approx_price`, `details`, `remarks`, `created_at`, `updated_at`) VALUES
(15, 4, 'C1', '33', 'fdsf', 'fdsf', '2021-04-16 08:54:22', '2021-04-16 08:54:22'),
(16, 4, 'C2', '22', 'sfd', 'erewr', '2021-04-16 08:54:23', '2021-04-16 08:54:23'),
(17, 5, '6565', '54654', '5464', '546', '2021-04-16 17:02:25', '2021-04-16 17:02:25'),
(19, 7, 'kei na kei', '1132323', 'sdfs', '121', '2021-04-20 11:15:47', '2021-04-20 11:15:47'),
(20, 8, '3434', '8898', '3443', '121', '2021-04-22 08:16:18', '2021-04-22 08:16:18'),
(21, 9, 'Earum ut autem.', '848-408-5260', 'Blanditiis explicabo modi alias deserunt minus alias molestiae voluptatem.', 'Et in vel facere est nisi ratione sit.', '2021-06-18 08:49:17', '2021-06-18 08:49:17'),
(22, 10, 'srheherhe', 'hserhserhr', 'hserhserherh', 'bxrbebrab', '2021-06-21 04:42:59', '2021-06-21 04:42:59'),
(23, 11, 'srheherhe', 'hserhserhr', 'hserhserherh', 'bxrbebrab', '2021-06-21 05:13:28', '2021-06-21 05:13:28'),
(24, 12, 'srheherhe', 'hserhserhr', 'hserhserherh', 'bxrbebrab', '2021-06-21 05:59:18', '2021-06-21 05:59:18'),
(25, 13, 'srheherhe', 'hserhserhr', 'hserhserherh', 'bxrbebrab', '2021-06-21 06:23:56', '2021-06-21 06:23:56'),
(26, 14, 'srheherhe', 'hserhserhr', 'hserhserherh', 'bxrbebrab', '2021-06-21 06:24:33', '2021-06-21 06:24:33'),
(27, 15, 'srheherhe', 'hserhserhr', 'hserhserherh', 'bxrbebrab', '2021-06-21 16:08:56', '2021-06-21 16:08:56'),
(28, 16, 'srheherhe', 'hserhserhr', 'hserhserherh', 'bxrbebrab', '2021-06-21 16:10:51', '2021-06-21 16:10:51'),
(29, 17, 'srheherhe', 'hserhserhr', 'hserhserherh', 'bxrbebrab', '2021-06-21 16:11:00', '2021-06-21 16:11:00'),
(30, 18, 'srheherhe', 'hserhserhr', 'hserhserherh', 'bxrbebrab', '2021-06-22 16:44:43', '2021-06-22 16:44:43'),
(31, 22, 'dndh', 'dhdhd', 'ddhdh', 'dd', '2021-06-27 06:56:55', '2021-06-27 06:56:55'),
(32, 23, 'dndh', 'dhdhd', 'ddhdh', 'dd', '2021-06-27 07:11:09', '2021-06-27 07:11:09'),
(33, 24, 'gfrr', 'frr', 'rrr', 'rrr', '2021-06-28 09:27:47', '2021-06-28 09:27:47'),
(34, 25, 'hehehe', 'jejrjr', 'ejrjr', 'ehejeej', '2021-07-05 07:25:18', '2021-07-05 07:25:18'),
(35, 26, 'Jsjw', '1000', 'Wjjw', 'Shehe', '2021-07-06 15:56:20', '2021-07-06 15:56:20');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `title` varchar(225) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `image`, `created_at`, `updated_at`, `text`) VALUES
(6, 'उधम छहारी', '16254841171625484117.png', '2021-07-05 11:21:57', '2021-07-05 11:21:57', '<p><span style=\"font-size:16px\"><span style=\"color:#000000\">उद्यम छहारी अन्तर्गत उद्यमी/व्यवसयी बन्न आकांक्षी व्यक्तिहरु&nbsp; छनौट गरी प्रशिक्षण एवं अन्य कार्यक्रमको माध्यमबाट उद्योग/व्यवसाय/व्यापार गर्न आकर्षित तुल्याउने र संभाव्य परियोजनारुको छनौट गरी आवश्यक सीप, प्राविधिक सहयोग, पूंजी, मुल्य श्रृंखला र बजार सिर्जना समेत गराई उद्योग व्यवसाय संचालन योग्य बनाइने छ र उद्योग/व्यवसाय गरिरहेका व्यक्तीहरुलाई स्तरोन्नतिमा समेत सहयोग गरिने छ । उद्यम छहारी अन्तर्गत प्रोजेक्ट छनोट प्रक्रिया निम्न अनुसारको हुनेछ :</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Notice/Request call for Project</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Orientation to probable applicants</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Application with Project Proposal/Collection</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Evaluation of Proposal &amp; Selection</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Contact/Call to Applicants-Help to formalize/finalize the proposal- to make it Bankable</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Connection to applicant with Bank &amp; Financial Institution for loan with recommendation of Karmabhumi Samaj</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Co-ordinate/ co-operate to Bank &amp; Applicant for loan appraisal/approval process of Bank</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Assist to Loan Agreement</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Receive service charge</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\"><strong>Follow-up &amp; Monitoring of the project</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\"><strong>Receive Quarterly Report/Program of the project</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\"><strong>Review &amp; Follow-up half yearly</strong></span></span></p>'),
(7, 'रोजगार छहारी', '16260001781626000178.png', '2021-07-11 10:42:58', '2021-07-11 04:57:58', '<p><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:16px\"><span style=\"color:#000000\">रोजगार छहारी (E-Employment) सम्बन्धि डिजिटल प्रविधिको माध्यमबाट वेरोजगार तथा ई-रोजगारीको खोजिमा रहेका व्यक्तिहरुको विवरण संकलन गरी रोजगारदाता सम्म पुर्याइ रोजगारीको अवसर उपलव्ध गराउने र वेरोजगारहरुलाई तालिम/प्रशिक्षणको माद्यमबाट रोजगार हुन सक्ने क्षमता विकाश सम्बन्धि कार्यक्रम संचालन हुनेछ ।</span></span></span></p>'),
(8, 'विदेशबाट फर्केका युवा सम्बन्धि कार्यक्रम', '16260000271626000027.png', '2021-07-11 10:40:27', '2021-07-11 04:55:27', '<p><span style=\"color:#000000\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:16px\">विदेशबाट फर्केका युवाहरुलाई उद्यम सुरु गर्न, प्रोत्साहन गर्न एवं वैदेशीक रोजगारमा रहेका नेपाली युवाहरुलाई आफुले सिकेको सिप र ज्ञान स्वदेशमा प्रयोग गर्ने व्यवसायिक र वित्तीय श्रोत जुटाउन समाजले सहयोग र समन्वय गर्ने छ ।</span></span></span></p>'),
(9, 'कृषि छहारी', '16254841021625484102.png', '2021-07-05 11:21:42', '2021-07-05 11:21:42', '<p><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"font-family:&quot;Arial Unicode MS&quot;,&quot;sans-serif&quot;\">&nbsp;</span><span style=\"font-family:Kalimati\">कृषि छहारी </span><span style=\"font-family:&quot;Mangal&quot;,&quot;serif&quot;\">(E-Krishi)</span><span style=\"font-family:Kalimati\"> अन्तर्गत स्थानिय निकाय मार्फत कृषि सम्बन्धि प्राविधिक परामर्श र आवश्यकता अनुरुप </span><span style=\"font-family:&quot;Mangal&quot;,&quot;serif&quot;\">On the field</span><span style=\"font-family:Kalimati\"> एवं </span><span style=\"font-family:&quot;Mangal&quot;,&quot;serif&quot;\">Online</span><span style=\"font-family:Kalimati\"> सेवा सम्बन्धि परामर्श प्रदान गरी उन्नत</span><span style=\"font-family:&quot;Mangal&quot;,&quot;serif&quot;\">, </span><span style=\"font-family:Kalimati\">व्यवसायिक र </span><span style=\"font-family:Kalimati\">अर्ग्यानिक</span><span style=\"font-family:Kalimati\"> खेती र सो को बजार सुनिश्चितता समेत प्रदान गरिने छ ।</span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\"><span style=\"font-family:Kalimati\">यस कार्यक्रमबाट निम्न उपलब्धि हुनेछ :</span></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\"><strong>Outputs 1: Establish Agriculture Information platform </strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\">Activity 1.1: Setting up the system and orientation by GeoKrishi; </span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\">Activity 1.2: Hosting and provide access to the digital platform; </span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\">Activity 1.3: Recruitment of JTA by respective municipality and assign designated command area for each JTA&rsquo;s; </span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\">Activity 1.4: Training manual and hands-on exercise to municipality officers and JTA on both web and mobile app (GeoKrishi Farm and GeoKrishi Ext). </span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\"><strong>Output 2: Agriculture practices at municipal level piloted and agriculture extension services enhanced. </strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\">Activity 2.1: Identification of priority crops in the selected municipality; </span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\">Activity 2.2: Orientation of GeoKrishi Farm to the farmer HH, group, cooperative by recruited JTA&rsquo;s; </span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\">Activity 2.3: Baseline data collection of farmers household (HH) via call center agents; </span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\">Activity 2.4: JTA updates marketplace and handle demand placed by traders; </span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\">Activity 2.5: Enable agriculture advisory services to the farmer and provisioning of support service and help desk; </span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\">Activity 2.6: Evaluation and Report preparation. </span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\"><strong>Output 3: Operationalize GariKhane e-Chautari </strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\">The output 3 will be commenced by respective municipality. </span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\">Activity 3.1: Provisioning of Garikhane e-chautari space with necessary equipment like computer, internet, projector/tv, learning materials, knowledge products, soil test kits etc. </span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\">Activity 3.2: Recruit and incentivize local youth champions with minimum JTA certificate holders. </span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"color:#000000\">Activity 3.3: Mobilize youth champions in the field to provide farmers orientation, collect data and assist in enabling agriculture advisory services.</span></span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `caption` mediumtext DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `bgimage` varchar(225) DEFAULT NULL,
  `address` mediumtext DEFAULT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `meta_title` mediumtext DEFAULT NULL,
  `facebook` mediumtext DEFAULT NULL,
  `twitter` mediumtext DEFAULT NULL,
  `gmail` mediumtext DEFAULT NULL,
  `phone` varchar(225) DEFAULT NULL,
  `whatsapp_number` bigint(20) DEFAULT NULL,
  `office_time` longtext DEFAULT NULL,
  `instagram` mediumtext DEFAULT NULL,
  `linkedin` mediumtext DEFAULT NULL,
  `youtube` mediumtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `title`, `caption`, `description`, `image`, `bgimage`, `address`, `meta_description`, `meta_title`, `facebook`, `twitter`, `gmail`, `phone`, `whatsapp_number`, `office_time`, `instagram`, `linkedin`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'गरिखाने अभियान', 'लगानी, पूर्वाधार र रोजगारः दृष्टिकोण एवं दीगो परियोजना केन्द्रित विशेष समिति  नेपालको आर्थिक विकासमा उद्यमशिलता प्रवर्धन तथा रोजगारी श्रृजनाको सहजिकरणले हाम्रो देश नेपालको आधारभूत संरचना निर्माण गर्छ भन्ने मान्यता राख्दछ । आम नेपालीलाई गरिखाने बनाउने उद्देश्यले  स्थापित यस संस्थामा यहाँहरुको संलग्नता तथा योगदान प्रशंसनीय छ ।', '<p>लगानी, पूर्वाधार र रोजगारः दृष्टिकोण एवं दीगो परियोजना केन्द्रित विशेष समिति नेपाली कांग्रेसले मुलुकमा लगानी, पूर्वाधार र रोजगारका क्षेत्रमा दृष्टिकोण एवं दीगो परियोजना विकासका लागि २०७७ जेठ ४ गते यस समिति गठन गरेको हो । नेपाली कांग्रेसका सांसद् माननीय विनोद चौधरी ज्यूको संयोजकत्वमा गठित यस समितिले मुलुकको विकास र समृद्धिका लागि उद्यमशीलता विकास सम्बन्धी दीगो परियोजना सञ्चालनका साथै लगानी आकर्षण र पूर्वाधार विकासका लागि अनुकुल वातावरण निर्माणमा सार्थक पहल गर्दै आएको छ ।</p>\r\n\r\n<p>लगानी, विकास र गरिखाने (रोजगारी) को लागि स्वतन्त्रता, प्रजातान्त्रिक व्यवहार र उदार सोचको आवश्यकता हुन्छ । २००७ सालमा स्थापना भएको प्रजातन्त्र बारम्बार खोसिने र पुनस्र्थापित हुने क्रममा पछिल्लो समय सशस्त्र द्वन्द्वरत् तत्कालीन नेकपा माओवादीलाई समेत शान्तिपूर्ण राजनीतिको मूलधारमा ल्याउने काम नेपाली कांग्रेसले सम्पन्न गरेको हो । संविधान निर्माण र संघीय प्रणालीमा तीनै तहको निर्वाचन नेपाली कांग्रेसको अगुवाइमा सम्पन्न भएको हो ।</p>\r\n\r\n<p>परिवर्तनलाई संस्थागत गर्न आम जनताको जीवनमा परिवर्तन ल्याउन जरुरी छ । २०४६ को राजनीतिक परिवर्तनपछि नेपाली कांग्रेसले सुरु गरेको आर्थिक उदारीकरणको नीतिले आज मुलुकको कुल गार्हस्थ उत्पादनमा ३५ प्रतिशत नयाँ क्षेत्रहरू उदय भएका छन् । दूरसञ्चार, हस्पिटालिटी, हवाई उड्ययन, शिक्षा र स्वास्थ्य क्षेत्रको विस्तारले गति लियो । लगानी आकर्षण, रोजगारी सिर्जना, सरकारको राजस्व वृद्धिमार्फत् पूर्वाधारमा लगानी नेपाली कांग्रेसको &lsquo;आर्थिक उदारीकरण नीति&rsquo;ले ठूलो रुपान्तरण सिर्जना गरेको हो ।</p>\r\n\r\n<p>राजनीतिले &lsquo;गरिखाने&rsquo; वर्गको आवाजलाई प्रतिनिधित्व गर्नुपर्छ भन्ने तथ्यलाई मध्यनजर गरी पार्टीलाई जीवन्त बनाउन नेपाली कांग्रेसले यस समितिको गठन गरेको हो । गरिखाने वर्गलाई राजनीतिमा समेट्न पार्टीले दिएको म्याण्डेटलाई हृदयङ्गम गर्दै समिति उद्यमशीलता विकास, लगानी मैत्री नीति तथा वातावरण निर्माणका लागि प्रतिवद्ध रहेको छ । यसै तथ्यलाई मध्यनजर गर्दै लगानी, पूर्वाधार र रोजगारीका सम्बन्धमा समयसापेक्ष दृष्टिकोण, उद्यमशीलता र उत्पादन विकासलाई केन्द्रित गर्दै आम युवाको इच्छा र आकांक्षा सम्बोधन गर्न समिति क्रियाशील रहँदै आएको छ ।</p>\r\n\r\n<p><u><strong>उद्देश्य एवं क्षेत्र</strong></u></p>\r\n\r\n<p>यस कार्यविधिलाई समितिको संचालन कार्यविधि भनिनेछ । यस सम्वन्धी योजना सम्पन्न गर्ने दिशामा सरोकारवाला सवैले एकै प्रकारले, एउटै बुझाई अनुसार, सहजताका साथ काम गर्ने प्रयोजनका लागि यसलाई आधारमानी कार्य गर्ने हेतुले तयार पारिएको हो ।</p>\r\n\r\n<p>यस कार्यविधिको उद्देश्य आवश्यक सूचना प्रवाह गर्ने, सचिवालय कर्मचारीहरूलाई विशेष समितिको सोचलाई कार्यान्वयन गर्ने र आदेश पालना गर्ने, समितिवाट संचालित कार्यक्रम, अभियानलाई सफलतापूर्वक संचालन, सूचारु गर्न दिएको मार्ग दर्शन हो । जो नेपाली कांग्रेस लगानी, पूर्वाधार र रोजगार ः दृष्टिकोण एवं दीगो परियोजना विशेष समितिलाई दिएको अधिकार क्षेत्र भित्र रही नेपाली कांग्रेसको नीति, प्रक्रिया, क्रियाकलाप, एवं कार्यकर्ताको उन्नती, प्रगतीका लागि कार्य गर्नेछ ।</p>\r\n\r\n<p>यस कार्यविधिमा संचालन तरिका, आवश्यकता, कर्तव्य, जिम्मेवारी, विशेष समिति, प्रदेश समिति, जिल्ला समिति, पालिका समिति साथै यस समितिसंग सरोकार राख्ने प्रत्येक सदस्य एवं सचिवालय कर्मचारीहरूको दायित्व एवं जिम्मेवारी एवं विधिलाई&nbsp;&nbsp; समेटिएको छ ।</p>\r\n\r\n<p>यो कार्यविधि यस उद्देश्यका साथ तयार परिएको छ जसले उच्च अभ्यास, प्रक्रिया, तालिम, आदिका साथ नेपाली कांग्रेसका कार्यकर्ताहरूको आर्थिक विकासका साथै सामाजिक एवं नेतृत्व विकासमा समेत सहयोग पु&yen;याओस । यसवाट मुलुकको आर्थिक विकास एवं आर्थिक उन्नती हुनेछ भने स्थानियस्तरमा गरिने क्रियाकलापहरूले एकातिर दललाई फाइदा पुग्नेछ भने अर्को तर्फ देशको आयातमा मी आउने छ । जस कारण देशको अर्थतन्त्रमा थोरै भए पनि टेवा पुग्ने र यही क्रम जारी रहेमा भविष्यमा यस अभियान अन्र्तगत गरिएका थाना उद्यमवाट देखासिखी गरि युवाहरूले मुलुक भित्रै उद्यमशीलता जारी राखेमा मुलुकले नयाँ दिशा लिने अर्थतन्त्र बलियो हुनुका साथै परनिर्भरता घट्नुका साथै राष्ट्रको ढुकुटीमा राजस्व वृद्धि हुनेछ ।</p>\r\n\r\n<p><u><strong>&lsquo;गरिखाने अभियान&rsquo; (युवा केन्द्रीत कार्यक्रम)</strong></u></p>\r\n\r\n<p>हाम्रा छिमेकी देशहरुले विकासको तीव्र छलाङ मारिरहँदा नेपालीहरु गरिबी र पछौटेपनबाट अभिशप्त छन् । यो नेपालीहरुको नियति भने होइन । विकास र संवृद्धिको आकांक्षामा नै सिंगो नेपाली समाज परिवर्तनकारी आन्दोलनमा होमिएको छ । मुलुकलाई नेतृत्व गर्ने र परिवर्तनकारी भनिएका शक्तिहरुले ठूलै आश्वासन देखाएका राजनीतिक व्यवस्थाले सीमित बाहेक आम मानिसको जीवनमा त्यति ठूलो परिवर्तन ल्याउन सकेन । यो इतिहासलाई नियालेका र नेपालमा भविष्य खोजीरहेका युवा पुस्ताले देशलाई नेतृत्व दिइरहेका र नेतृत्वमा जाने सम्भावना रहेका कुनै पनि दलबाट आशा गर्न सकेको छैन । त्यही निराशाको अभिव्यक्तिस्वरुप &lsquo;इनफ इज इनफ&rsquo; जस्ता आन्दोलनमा स्वतःस्फूर्त युवाहरुको सहभागिता बढ्दो छ । यस्ता आन्दोलन पुरानो राजनीतिक विरासतको नाममा समयानुसार आफूलाई परिवर्तन गर्न नसक्ने सबै राजनीतिक दलहरुको लागि चेतावनीको सूचक हो ।</p>\r\n\r\n<p>परिवर्तन र विकासको सपना देख्दादेख्दै एक पुस्ताको समय बितिसकेको छ । त्यसकारण पनि आजका युवा स्थापित राजनीतिक दलहरुको सोच र व्यवहारलाई पत्याउन तयार छैनन् । उनीहरु गरिबी, बेरोजगारी, भ्रष्टाचारका कारण आक्रान्त मुलुक बदल्न चाहन्छन् । आजको नेपाली समाजको प्राथमिक आवश्यकता भनेको रोजगारी, राम्रो शिक्षा, स्वास्थ्य, सहज र गुणस्तरीय सेवा, छनौटको स्वतन्त्रता लगायत हुन् । यो सपना पुरा गर्न केही युवाहरुको समूहले &lsquo;गरिखाने अभियान&rsquo; शुरु गरेका छन् । यो अभियानमा मुलुकको रुपान्तरणका लागि युवा पहलमा विश्वास गर्ने विभिन्न पेशाकर्मी, व्यवसायी युवाहरुले नेतृत्व लिएका छन् । विकसित देशका राम्रा विश्वविद्यालयमा पढेका युवा, विभिन्न पेशा र व्यवसायमा संलग्नहरु, विदेशमा रोजगारी गरेर नेपालमै केही गर्ने मनसाय लिएर फर्केकाहरु मुलुकलाई बदल्ने अभियानमा छन् । यी युवाहरु रचनात्मक ढंगले काम गरेर, यथार्थ आवश्यकतालाई सम्बोधन र समस्याका जडलाई गहनरुपमा पहिल्याएर समाधान गर्नुपर्छ भन्ने सोच राख्छन् । राम्रो प्राज्ञिक उन्नयनको अवसर पाएका, विदेशमै राम्रो अवसर पाएकाहरु समेत स्वदेशमा फर्केर आफ्नो र आगामी पुस्ताले मुलुकमै भविष्य निर्माण गर्ने अवस्था बनाउन यो अभियानमा होमीएका छन् । वकिल, बैंकर, चार्टर्ड एकाउन्टेन्ट, व्यवसायिक क्षेत्र लगायत समाजका सबै क्षेत्रका युवाहरु यो अभियानमा सरिक छन् । यो राष्ट्रव्यापी अभियानको सफलताले मुलुकमा युवाको आकांक्षा सम्बोधन हुनुका साथै उनीहरुलाई राजनीतिकरुपमा स्थापित गर्नेछ ।</p>\r\n\r\n<p>दूरसञ्चार क्षेत्रको क्रान्ति र इन्टरनेटको पहुँचसँगै आज हरेक मानिसहरु विश्वका परिवर्तन, नयाँ प्रविधि, अन्य देशका सरकार र निजी क्षेत्रको पहलहरुलाई राम्रोसँग नियालीरहेका छन् । यसबाट उनीहरुले विभिन्न रचनात्मक उपायहरु र परिवर्तनका उपायहरु पहिल्याएका छन् । आजका युवा कोरा राजनीतिक भाषण र राजनीतिक वाद&divide;विचारले आकर्षित हुँदैनन् । विचार एउटा पक्ष हो । त्यो विचारले आम मानिसको जीवनमा परिवर्तन ल्याउन सकेन भने त्यो जतिसुकै शक्तिशाली विचार भएपनि कोरा र खोक्रो हुन्छ । विचारमा प्राण भर्न, यसले काम गर्ने बनाउन आम मानिसलाई परिवर्तनको अनुभूति दिनुपर्छ । त्यसले आकर्षण गर्नुपर्छ । त्यसकारण गरिखाने अभियान नै एउटा सशक्त विचार हो, यो विचारमा जीवन छ । आम युवाको आकांक्षा छ ।</p>\r\n\r\n<p>नेपाली कांग्रेसको लगानी, पूर्वाधार र रोजगारी केन्द्रित विशेष समितिले युवाहरुको यो अभियानलाई राष्ट्रव्यापी जागरण र लहरका रुपमा अघि लैजाने भएको छ । यस अभियानको स्लोगन &lsquo;युवाद्वारा युवाका लागि&rsquo; रहेको छ भने कार्यक्रमलाई गरिखाने अभियान नामाकरण गरिएको छ । गरिखाने कार्यक्रम स्वनिर्भर, उद्यमशील, आर्थिक हिसावले सबल र सक्षम बन्न चाहाने हरेक नेपालीहरुका लागि चलाइने राष्ट्रव्यापी अभियान हो । अभियान देशका कुना कुनामा पुग्नेछ ।</p>\r\n\r\n<p><u><strong>गरिखाने अभियान किन ?</strong></u></p>\r\n\r\n<p>राजनीतिले जनताको अपेक्षा संबोधन गर्नुपर्छ । बहुदलीय प्रतिस्पर्धात्मक राजनीतिक व्यवस्थामा जनताले आवधिक निर्वाचन मार्फत् आफ्नो अभिमत व्यक्त गर्ने भएपनि स्थापित र ठूला राजनीतिक दलहरुबाट जनअपेक्षा सम्बोधन हुने आशा क्रमशः टुट्दै गएको देखिन्छ । त्यसलाई युवाहरुले विभिन्न माध्यमबाट अभिव्यक्त गरिरहेका छन् । सामाजिक सञ्जालहरु या अन्य मञ्चहरुमा देखिने त्यो निराशालाई आशामा बदल्नेतर्फ प्रभावकारी कदम चाल्न अब ढिला भैसकेको छ । दलहरुको आह्वानमा व्यवस्था परिवर्तनमा होमिएका आम मानिसहरुलाई परिवर्तित व्यवस्थाले दिएका राजनीतिक अधिकार प्रयोग गर्नका लागि आर्थिक रुपमा पनि सम्पन्न गर्दै लैजानुपर्ने थियो । आर्थिक रुपान्तरणको ठूलो अभियान बिना अब कोरा राजनीतिक भाषणबाजीले मात्र जनता आश्वस्त भैरहने छैनन् ।</p>\r\n\r\n<p>मुलुकको सबैभन्दा पुरानो र प्रजातान्त्रिक दल हुनुका साथै आर्थिक उदारीकरणको समेत नेतृत्व लिएर मुलुकलाई संमृद्ध तुल्याउने अभियानको नेतृत्व लिएको नेपाली कांग्रेसले आर्थिक रुपान्तरणको मर्मलाई अंगिकार गरेर गत जेठ ४ गते विभिन्न समितिहरु गठन गर्ने क्रममा &lsquo;लगानी, पूर्वाधार र रोजगार: दृष्टिकोण एवं दीगो पूर्वाधार केन्द्रित समिति&rsquo; गठन ग&yen;यो । खासगरी कोभिड&ndash;१९ को महामारीका कारण मुलुकमा उत्पन्न विकराल परिस्थितिमा मुलुक र पार्टीका तत्कालीन प्राथमिकतामा केन्द्रित रहेर काम गर्दैगर्दा धेरै सरोकारवालाहरुसँग अन्तरक्रिया हुँदै गयो । वास्तवमा ठूलो संख्यामा युवाहरु आफ्नै मुलुकमा केहि गरौं भनेर विदेशमा अध्ययन सकेर, पेशा, रोजगारी, व्यवसाय छाडेर नेपालमा फर्केका छन् । मुलुकभित्रै हरेक वर्ष श्रम बजारमा आउने झण्डै ५ लाख युवाहरुको पहिलो प्राथमिकता मुलुकमै केही गरौं भन्ने हुन्छ । कोभिड&ndash;१९ को प्रकोपका कारण अहिले मुलुकमा उद्योग, व्यापार, आर्थिक गतिविधि ठप्प भएको अवस्था छ । रोजगारी गुमेका छन्, जनताको कष्ट थपिएका छन् । यस्तो पृष्ठभूमीमा पनि भ्रष्टाचार, स्रोतको दुरुपयोग तथा प्रभावकारी काम हुन नसक्दा उनीहरुको मन कुँडिएको छ ।</p>\r\n\r\n<p>वास्तवमा नेपाली कांग्रेस गरिखाने वर्गको पार्टी हुनुपर्छ । गरिखाने वर्ग आफ्नो अभिव्यक्तिमा प्रतिवद्ध हुन्छन् । उनीहरुले बोलेको पु&yen;याउँछन् भन्ने आम विश्वास हुन्छ । वास्तवमा एउटा उद्यमी र गरिखाने मानिसलाई उसले बोलेको पु&yen;याउनु र विश्वास आर्जन गर्नु नै यो वर्गको साख हुन्छ । बोलेको पु&yen;याउनु नै उनीहरुको पुँजी हो । साख हो । त्यसकारण गरिखाने वर्गको पार्टीका रुपमा नेपाली कांग्रेस अघि बढ्नुपर्छ । उद्यमीहरुका सम्बन्धमा साधरणतया मानिसहरु उनीहरुले बोलेको पु&yen;याउँछन् भन्ने मान्यता राख्छन् । गरिखाने वर्गको पार्टीका रुपमा नेपाली कांग्रेसले पनि बोलेको कुरा पु&yen;याउँछ भन्ने मान्यता स्थापित गर्नुपर्छ । देश बन्नका लागि पार्टीभित्र राजनीतिक त्यागको जति आवश्यक छ, त्यस्तै आवश्यकता स्रोतको व्यस्थापन गर्न सक्ने क्षमताको आवश्यकता छ । स्रोतको व्यवस्थापनको अभावमा जस्तोसुकै राजनीतिक सक्रियता र राजनीतिक परिवर्तनले &lsquo;डेलिभरी&rsquo; दिन सक्दैन । स्रोतको समुचित र प्रभावकारी व्यवस्थापनले मात्र आम मानिसले खोजेको परिवर्तन सम्भव छ ।</p>\r\n\r\n<p>युवाहरुको आकांक्षा, क्षमता र केही गर्छु भन्ने विश्वास र संकल्पलाई पुरा गर्न एउटा भरपर्दो प्रणालीको आवश्यकता छ । त्यो प्रणालीमार्फत् उनीहरुका आकांक्षा अघि बढाउन सकियोस् । यतिबेला राज्यको स्रोतको परिचालनमा सबैभन्दा ठूलो समस्या बनेको छ । यसमा कुनै एउटा सरकारलाई मात्र जिम्मेवार ठह&yen;याउनु उचित हुँदैन । १५ प्रतिशत विकास बजेट खर्च गर्नका लागि ८५ प्रतिशत प्रशासनिक खर्च गर्छौं । कार्यक्षमताको अभावले जनआकांक्षा संबोधन हुन सकिरहेको छैन । एकखालको गम्भीर दुष्चक्रममा मुलुक फस्दै गएको छ । हिजोसम्म रेमिट्यान्सबाट आयात, आयातबाट राजस्व प्राप्ति गर्ने अर्थतन्त्ररुपी यो चर्खा चल्दै थियो । भोलिका दिनमा यही रुपमा यो चर्खा चल्छ भन्ने छैन । यसले थप गम्भीर समस्या निम्त्याउनेछ । एकातिर गरिखाने वर्गको उद्योग, व्यापार, आर्थिक गतिविधि ठप्प छ । चलेको छ भने ब्याजदरको मिटर, कर र विद्युत्को मिटर चलेको छ ।</p>\r\n\r\n<p>हामीले गरिखाने कार्यक्रमलाई अभियानका रुपमा अघि बढाएका छौं । गरिखाने अभियान भनेको एउटा यस्तो &lsquo;इकोसिस्टम&rsquo;को निर्माण हो । जसमा एउटा युवाको सपनालाई बजारमा भएको माग र आपूर्तिको विश्लेषण सहित उद्यमका लागि आवश्यक पुँजी, सीप र व्यवस्थापनको प्रशिक्षण सहित व्यवसायिक सोचको कार्यान्वयन गर्न सघाउने हो । यसरी सघाउँदा त्यी उद्यमीले सफलरुपमा प्रतिफल हासिल गर्ने, स्थापित हुनका लागि आवश्यक निश्चित गतिविधि पूरा नहुँदासम्म विभिन्न तवरले सहयोग गर्ने विभिन्न स्तम्भमा हामीले गरिखाने अभियानलाई अड्याउने सोचले निर्देशित छौं । यसका लागि हामी निकै आशावादी छौं ।</p>\r\n\r\n<p>यो सोचमा मुलुकभरीका राम्रो शैक्षिक र व्यवसायिक पृष्ठभूमी भएका विभिन्न पेशा र व्यवसायमा संलग्न वकिल, चिकित्सक, इन्जिनियर, बैंकर, लेखापरिक्षक, विभिन्न व्यवसायिक क्षेत्रबाट आर्थिक&ndash;सामाजिक रुपान्तरणमा अघि बढ्न अग्रसर भएर यो अभियान अघि बढाउन उत्साहीत छन् । देशभर गरिखाने अभियानको संरचना तयार हुँदैछ तर आकांक्षा र उत्साह भने देशभर सञ्चार भैसकेको छ । यसका महत्वपूर्ण दुई पक्ष छन्&ndash; १) इ&ndash;चौतारी । प्रविधिमा टेकेर आज धेरै मुलुकमा क्रान्तिकारी कामहरु भएका छन् । हाम्रो छिमेकी मुलुक भारतमै पनि आइटीसीले ल्याएको इ&ndash;चौपालले कृषिको क्षेत्रमा ठूलो परिवर्तन ल्याएको छ । यतिबेला कृषिमा सबैभन्दा ठूलो चुनौती भनेको उत्पादनको लागत कसरी घटाउने र आयातीत कृषि उत्पादनसँग कसरी प्रतिस्पर्धी बनाउने तथा छरिएको उत्पादनलाई बजारमा जोड्ने प्रणाली कसरी निर्माण गर्ने ? जबसम्म सम्पूर्ण प्रणाली बन्दैन तबसम्म कृषिको क्रान्ति नारामा मात्र सीमित हुन्छ । यो काम पक्कै पनि सहज छैन । यसका लागि धेरै ठूलो मेहनत, सिर्जनशीलता, विश्वको अनुभवलाई स्थानीयकरण गरीकन लागू गर्नुपर्ने हुन्छ ।</p>\r\n\r\n<p>दोस्रो पक्ष हो (२) उद्यम छहारी । उद्यमको सोच देखि सम्भाव्य परियोजनाको रुपमा विकास पुँजी, सीप तथा प्रविधि, प्रशिक्षण, व्यवस्थापन, बजार तथा त्यस्ता उद्यमको दीगोपनाका सम्बन्धमा मैंले यहाँ चर्चा गरिसकेको छु । एउटा यस्तो स्थिति बनोस् अबको छोटो समयमै नेपाली कांग्रेसका प्रदेश, क्षेत्र, जिल्ला र स्थानीयतहका संरचनामा रहेका सबैलाई सहभागी गराएर गरिखाने अभियानलाई भरपर्दो रुपमा देशव्यापी अघि बढाउँदै आकांक्षी युवाहरुलाई उद्यम र रोजगारीको अवसर प्रदान गर्न सकियोस् ।</p>\r\n\r\n<p>नेपाली कांग्रेसका संस्थापक नेता स्वर्गीय बीपी कोइरालाले त्यो बेला पनि पुँजी र श्रमको समान वितरणको सोच अघि सार्नुभएको थियो । उहाँले अघि सारेको समाजवादको आधारशीला पनि पुँजी र श्रमको समन्यायिक वितरण नै थियो । नेपाली कांग्रेसको सरकारले त्यसबेला लिएको नीतिले ७ ओटा विभिन्न नयाँ क्षेत्रको अर्थतन्त्रमा उदय भयो &ndash; पर्यटन&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (होटल तथा हवाई क्षेत्र), उर्जा, जलविद्युत्, दूरसञ्चार, बैंकिङ, रियलस्टेट लगायतका क्षेत्रको उदय त्यसपछि भएको हो । त्यसयता उदय भएका यी क्षेत्रले&nbsp; अहिले मुलुकको कुल गार्हस्थ उत्पादन (जीडीपी) को ३५ प्रतिशत हिस्सा ओगट्छन् । यसले निजी क्षेत्रको लगानी आकर्षणको यात्रा जारी राख्यो । यसलाई श्रेय दिए पनि, नदिएपनि नेपाली कांग्रेसको नीतिले तय गरेको यो यात्रा जारी रह्यो । यसलाई बुझ्ने, देख्ने र यसबाट प्रभावित हुने र सकारात्मक सोचका धनीहरुले यो आर्थिक रुपान्तरणलाई कहिले बिर्सन सक्दैनन् । प्रविधिले रुपान्तरण गर्दै लगेको &lsquo;डिजिटल ट्रान्सफरमेशन&rsquo; र &lsquo;स्टार्टअप्स&rsquo; को युगमा युवाहरुलाई एउटा जीवन्त समूह&divide; समुदायको रुपमा उभ्याउन नेपाली कांगेसले नेतृत्व गर्नैपर्छ । नेपाली कांग्रेसको अगाडी रहेको आजको सबैभन्दा प्रमुख आवश्यकता र चुनौती पनि यही नै हो । नेपाली कांग्रेसलाई व्यावसाय&ndash;मैत्री, गरिखाने वर्गको पार्टीका रुपमा र युवालाई प्रशस्त अवसर दिने पार्टी हो भन्ने स्थापित गर्नुपर्छ&nbsp;।</p>', '16107056461610705646.jpg', '1610705646.jpg', 'दोश्रो तल्ला, सेन्ट्रल विजनेस पार्क, थापाथली, काठमाण्डौ, बागमती प्रदेश, नेपाल', NULL, NULL, 'https://www.facebook.com/Gareekhane', NULL, 'gareekhane@gmail.com', '+ ९७७-१-४२६४८२३ / ९८४२१४४७६९', 9842144769, 'आइतबार – शुक्रबार १०:०० देखि ५:०० बजे(Sunday to Friday 10:00 AM to 5:00PM)', NULL, NULL, 'https://www.youtube.com/channel/UCNwQnNA3drsv-ET2PCRi1JA', '2020-09-17 09:01:15', '2021-07-18 00:41:14');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(225) NOT NULL,
  `designation` varchar(225) DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `description`, `image`, `designation`, `facebook`, `twitter`, `instagram`, `created_at`, `updated_at`) VALUES
(1, '– रतन टाटा, भारतीय उद्योगपति', '<p><span style=\"color:#000000\">उद्यमी सधैं उद्यमशील हुनुपर्छ, समय र उपक्रमहरू परिवर्तन भैरहन्छन् । परिवर्तनसँग भिज्दै प्रतिकूल परिस्थिति र संकटलाई पनि अवसरमा बदल्ने नयाँ तरिकाको खोजीमा उद्यमी हरदम तयार र उत्साही रहनुपर्छ ।</span></p>\r\n\r\n<p style=\"text-align:right\">&nbsp;</p>', '16260748061626074806.jpg', '\"उद्यमी सधैं उद्यमशील हुनुपर्छ, समय र उपक्रमहरू परिवर्तन भैरहन्छन् । परिवर्तनसँग भिज्दै प्रतिकूल परिस्थिति र संकटलाई पनि अवसरमा बदल्ने नयाँ तरिकाको खोजीमा उद्यमी हरदम तयार र उत्साही रहनुपर्छ ।\" – रतन टाटा, भारतीय उद्योगपति', NULL, NULL, NULL, '2020-09-27 00:05:05', '2021-07-12 01:41:46'),
(2, '– ज्याक मा, चिनियाँ बहुराष्ट्रिय कम्पनी ‘अलिबाबा’का संस्थापक', '<p>उद्यमीहरू व्यवसाय गर्न अनुकुल बेला कहिले आउला भनेर कुरेर बस्दैनन् । उनीहरू आफैं अनुकुल अवस्था सिर्जना गर्छन् ।</p>', '16260747381626074738.jpg', '\"उद्यमीहरू व्यवसाय गर्न अनुकुल बेला कहिले आउला भनेर कुरेर बस्दैनन् । उनीहरू आफैं अनुकुल अवस्था सिर्जना गर्छन् ।\" – ज्याक मा, चिनियाँ बहुराष्ट्रिय कम्पनी ‘अलिबाबा’का संस्थापक', NULL, NULL, NULL, '2020-09-27 00:05:47', '2021-07-12 01:40:38'),
(3, '- विनोद चौधरी, फोब्र्समा सूचीकृत एकमात्र नेपाली अर्बपति', '<p>यदि तिमीसँग सपना छ र सपना पूरा गर्ने प्रतिवद्धता छ । पेटमा आगो लिएर हिंडेको मान्छेका लागि परिस्थिति जस्तोसुकै प्रतिकूल भएपनि सफलता उसको पछाडि हुन्छ ।&quot; &ndash; विनोद चौधरी, फोब्र्समा सूचीकृत एकमात्र नेपाली अर्बपति</p>', '16260748461626074846.jpg', '\"यदि तिमीसँग सपना छ र सपना पूरा गर्ने प्रतिवद्धता छ । पेटमा आगो लिएर हिंडेको मान्छेका लागि परिस्थिति जस्तोसुकै प्रतिकूल भएपनि सफलता उसको पछाडि हुन्छ ।\" – विनोद चौधरी, फोब्र्समा सूचीकृत एकमात्र नेपाली अर्बपति', NULL, NULL, NULL, '2020-09-27 00:06:09', '2021-07-12 01:42:26');

-- --------------------------------------------------------

--
-- Table structure for table `unit_expenses`
--

CREATE TABLE `unit_expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `karmabhomi_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approx_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approx_annual_production` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_expense` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unit_expenses`
--

INSERT INTO `unit_expenses` (`id`, `karmabhomi_id`, `name`, `approx_price`, `approx_annual_production`, `total_expense`, `created_at`, `updated_at`) VALUES
(19, 4, '3erew', '3232', '32', '3232', '2021-04-16 08:54:23', '2021-04-16 08:54:23'),
(20, 4, '323', 'fsdfs', 'dsfds', 'dsfs', '2021-04-16 08:54:24', '2021-04-16 08:54:24'),
(21, 4, 'fsdf', 'fdsf', 'dsf', 'fdsf', '2021-04-16 08:54:24', '2021-04-16 08:54:24'),
(22, 5, 'kl', '545', '564', '654', '2021-04-16 17:02:28', '2021-04-16 17:02:28'),
(24, 7, 'adasdadas', '322232323', '232323', 'asdada', '2021-04-20 11:15:47', '2021-04-20 11:15:47'),
(25, 8, '3434', '1234', '343', '343', '2021-04-22 08:16:18', '2021-04-22 08:16:18'),
(26, 9, 'Kelton Kuphal', 'Nobis labore assumenda.', 'Aut et odit dolore.', 'Provident error assumenda repellendus exercitationem rerum quo natus quasi veritatis.', '2021-06-18 08:49:17', '2021-06-18 08:49:17'),
(27, 10, 'bzebarbrberfdbdfb', 'herherherherh', 'dfbdrhrje', 'hreherhrheh', '2021-06-21 04:43:00', '2021-06-21 04:43:00'),
(28, 11, 'bzebarbrberfdbdfb', 'herherherherh', 'dfbdrhrje', 'hreherhrheh', '2021-06-21 05:13:29', '2021-06-21 05:13:29'),
(29, 12, 'bzebarbrberfdbdfb', 'herherherherh', 'dfbdrhrje', 'hreherhrheh', '2021-06-21 05:59:18', '2021-06-21 05:59:18'),
(30, 13, 'bzebarbrberfdbdfb', 'herherherherh', 'dfbdrhrje', 'hreherhrheh', '2021-06-21 06:23:56', '2021-06-21 06:23:56'),
(31, 14, 'bzebarbrberfdbdfb', 'herherherherh', 'dfbdrhrje', 'hreherhrheh', '2021-06-21 06:24:34', '2021-06-21 06:24:34'),
(32, 15, 'bzebarbrberfdbdfb', 'herherherherh', 'dfbdrhrje', 'hreherhrheh', '2021-06-21 16:08:57', '2021-06-21 16:08:57'),
(33, 16, 'bzebarbrberfdbdfb', 'herherherherh', 'dfbdrhrje', 'hreherhrheh', '2021-06-21 16:10:52', '2021-06-21 16:10:52'),
(34, 17, 'bzebarbrberfdbdfb', 'herherherherh', 'dfbdrhrje', 'hreherhrheh', '2021-06-21 16:11:01', '2021-06-21 16:11:01'),
(35, 18, 'bzebarbrberfdbdfb', 'herherherherh', 'dfbdrhrje', 'hreherhrheh', '2021-06-22 16:44:44', '2021-06-22 16:44:44'),
(36, 22, 'ndjd', 'dhdhd', 'djdhd', 'dd', '2021-06-27 06:56:57', '2021-06-27 06:56:57'),
(37, 23, 'ndjd', 'dhdhd', 'djdhd', 'dd', '2021-06-27 07:11:11', '2021-06-27 07:11:11'),
(38, 24, 'frrr', 'ttt', 'ddd', 'ddfr', '2021-06-28 09:27:51', '2021-06-28 09:27:51'),
(39, 25, 'jsjsjsjs', 'bsbsbsbs', 'hehebe', 'shehe', '2021-07-05 07:25:19', '2021-07-05 07:25:19'),
(40, 26, 'Ahahshh', '1000', 'Jajsj', '1000', '2021-07-06 15:56:23', '2021-07-06 15:56:23');

-- --------------------------------------------------------

--
-- Table structure for table `unit_incomes`
--

CREATE TABLE `unit_incomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `karmabhomi_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approx_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approx_annual_sale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_expense` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unit_incomes`
--

INSERT INTO `unit_incomes` (`id`, `karmabhomi_id`, `name`, `approx_price`, `approx_annual_sale`, `total_expense`, `created_at`, `updated_at`) VALUES
(10, 4, '2fdsfd', 'sfdsf', 'dsfdsf', '3e2', '2021-04-16 08:54:25', '2021-04-16 08:54:25'),
(11, 5, 'dfsd', '8465', '546', '546', '2021-04-16 17:02:29', '2021-04-16 17:02:29'),
(13, 7, 'dsdddssd', '232332232', '3232323', '32332323', '2021-04-20 11:15:47', '2021-04-20 11:15:47'),
(14, 8, '434', '12332', '3434', '32332323', '2021-04-22 08:16:18', '2021-04-22 08:16:18'),
(15, 9, 'Terrance Blick', '114-770-3665', 'Iowa', 'Sed eaque in voluptatem quia totam id voluptatibus.', '2021-06-18 08:49:23', '2021-06-18 08:49:23'),
(16, 10, 'dhfhdrhrtjrtjfn', 'herheebfbdf', 'oihaoiheogioai', 'fjnouhi;ugigiyg', '2021-06-21 04:43:00', '2021-06-21 04:43:00'),
(17, 11, 'dhfhdrhrtjrtjfn', 'herheebfbdf', 'oihaoiheogioai', 'fjnouhi;ugigiyg', '2021-06-21 05:13:30', '2021-06-21 05:13:30'),
(18, 12, 'dhfhdrhrtjrtjfn', 'herheebfbdf', 'oihaoiheogioai', 'fjnouhi;ugigiyg', '2021-06-21 05:59:18', '2021-06-21 05:59:18'),
(19, 13, 'dhfhdrhrtjrtjfn', 'herheebfbdf', 'oihaoiheogioai', 'fjnouhi;ugigiyg', '2021-06-21 06:23:56', '2021-06-21 06:23:56'),
(20, 14, 'dhfhdrhrtjrtjfn', 'herheebfbdf', 'oihaoiheogioai', 'fjnouhi;ugigiyg', '2021-06-21 06:24:35', '2021-06-21 06:24:35'),
(21, 15, 'dhfhdrhrtjrtjfn', 'herheebfbdf', 'oihaoiheogioai', 'fjnouhi;ugigiyg', '2021-06-21 16:08:57', '2021-06-21 16:08:57'),
(22, 16, 'dhfhdrhrtjrtjfn', 'herheebfbdf', 'oihaoiheogioai', 'fjnouhi;ugigiyg', '2021-06-21 16:10:53', '2021-06-21 16:10:53'),
(23, 17, 'dhfhdrhrtjrtjfn', 'herheebfbdf', 'oihaoiheogioai', 'fjnouhi;ugigiyg', '2021-06-21 16:11:02', '2021-06-21 16:11:02'),
(24, 18, 'dhfhdrhrtjrtjfn', 'herheebfbdf', 'oihaoiheogioai', 'fjnouhi;ugigiyg', '2021-06-22 16:44:46', '2021-06-22 16:44:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(225) DEFAULT NULL,
  `status` enum('active','suspended') NOT NULL,
  `provider` varchar(225) DEFAULT NULL,
  `provider_id` varchar(225) DEFAULT NULL,
  `lname` varchar(225) DEFAULT NULL,
  `address` varchar(225) DEFAULT NULL,
  `phone` bigint(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `status`, `provider`, `provider_id`, `lname`, `address`, `phone`) VALUES
(1, 'surajduwal', 'es.suraj.duwal@gmail.com', NULL, '4aa802270b6dc581', 'gKzgJfLLYbbJ1vSFwFMIxncsPEa7PSj8DZ0u8b85076yrypR3FhDhJyOO4a0', '2019-11-05 01:14:37', '2019-11-13 22:28:45', 'admin', 'active', NULL, NULL, NULL, NULL, NULL),
(33, 'admin', 'admin@gmail.com', NULL, '$2y$10$coFvvocf9JIqJbF1kNtjDed.M6Wi7KsfrNhqYmIY3.FsytRytyCji', NULL, '2020-09-25 20:39:57', '2020-09-25 20:39:57', 'admin', 'active', NULL, NULL, 'admin12', 'Newroad, Pokhara', 9876780876),
(34, 'ram', 'rama@gmail.com', NULL, '$2y$10$.05vCnTjTO4XvzUbIPpHTOaquAaHHA/UjtzatBtLKyma00R9aXNi.', NULL, '2020-09-16 10:16:27', '2020-09-16 10:16:27', NULL, 'active', NULL, NULL, 'saran', 'Newroad, Pokhara', 9860200670),
(36, 'sajan', 'sorajduwal@yahoo.com', NULL, '5c936263f3428a40227908d5a3847c0b', NULL, '2020-09-15 10:49:44', '2020-10-07 09:22:49', NULL, 'active', 'facebook', '3338637059530424', 'hamal', 'Newroad, Pokhara', 9876780875),
(38, NULL, 'shrestha.ashok200@gmail.com', NULL, 'e0cd3f16f9e883ca91c2a4c24f47b3d9', NULL, '2020-10-02 10:58:47', '2020-10-02 10:58:47', NULL, 'active', 'facebook', '3611078262292320', NULL, NULL, NULL),
(39, 'Dipesh', 'er.dipeshbista@gmail.com', NULL, '$2y$10$BvAQrTvsD5UXo3mxE9HgV.QCjlM9nnD8Tol0zuCVvMCoXYY8cMBu6', NULL, '2020-10-10 03:43:00', '2020-10-10 03:43:00', NULL, 'active', NULL, NULL, 'Bista', 'Kirtipur', 9851076030),
(40, 'Ashok', 'shrestha.ashok2050@gmail.com', NULL, '$2y$10$IKGfJNKHrygUA/krop8jb.c4tx1Yi4785rVQGHdk9x5GVzPOoranK', NULL, '2020-10-16 03:06:10', '2020-10-16 03:06:10', NULL, 'active', NULL, NULL, 'Shrestha', 'satungal', 9845315570),
(41, 'Rajan', 'rajan.man@gmail.com', NULL, '$2y$10$bnTjg.YjtheUi0k.Cd04ZejBBecgavcfhjseoxE6Ud4N0KVT3ywW6', NULL, '2020-10-19 06:15:51', '2020-10-19 06:15:51', NULL, 'active', NULL, NULL, 'Man', 'Kathmandu', 9851094030),
(42, 'test', 'test@gmail.com', NULL, '$2y$10$TjR3t8xtT6/MVgYXMnxDGO34.1KjJIXEhagPcTJuuxo9zZBC.5Ovq', NULL, '2020-11-05 10:00:47', '2020-11-05 10:00:47', NULL, 'active', NULL, NULL, 'ters', 'Newroad, Pokhara', 9586545784),
(43, 'BK', 'shrestha.dbk@gmail.c', NULL, '922073b18844540f8fe447c3e93a25b7', NULL, '2020-12-28 05:06:02', '2020-12-28 05:07:09', NULL, 'active', 'google', '102541413446299056404', 'Shrestha', 'sanga', 12),
(45, 'Vance', 'geogatedproject303@gmail.com', NULL, 'a11f9e533f28593768ebf87075ab34f2', NULL, '2021-01-09 20:48:57', '2021-01-09 20:52:39', NULL, 'active', 'facebook', '10150002616202561', 'Ross', 'Provence-Alpes-Côte d', 2552552552),
(46, 'John', 'geogatedproject298@gmail.com', NULL, '5c7a3b81a677c639c76989610183c0e0', NULL, '2021-01-09 21:38:34', '2021-01-09 21:40:23', NULL, 'active', 'facebook', '122043033037683390', 'saul', 'test', 2552552552),
(49, 'Sunil', 'aryalsu@gmail.com', NULL, '$2y$10$8ke7QJB320TQjKoyQyivXOvCwJom/alkMZqylDk4/XJnpHbWm09U.', NULL, '2021-02-17 08:19:13', '2021-02-17 08:19:13', NULL, 'active', NULL, NULL, 'Aryal', 'Karmabhoomi Samaj', 9842144769),
(50, NULL, 'demo@gmail.com', NULL, '86ba98bcbd3466d253841907ba1fc725', NULL, '2021-02-18 15:26:16', '2021-02-18 15:26:16', NULL, 'active', 'facebook', '3763556673705125', NULL, NULL, NULL),
(51, NULL, 'sorajduwal8@gmail.com', NULL, 'daaaf13651380465fc284db6940d8478', NULL, '2021-02-18 15:37:43', '2021-02-18 15:37:43', NULL, 'active', 'google', '101643566182829506824', NULL, NULL, NULL),
(52, 'Ashok', 'shrestha.ashok20@gmail.com', NULL, '$2y$10$xGXRmMMtLPMD.IWQ7spZsec3Iq8yupRpkbFqGAyFWniEgnymsZOyO', NULL, '2021-02-18 17:45:01', '2021-02-18 17:45:01', NULL, 'active', NULL, NULL, 'dd', 'satungal', 981231232),
(53, 'Ashok', 'shrestha.ashok200@gmail.com', NULL, '2f364281f619584f24f63a794a12e354', NULL, '2021-02-20 13:07:20', '2021-02-21 14:31:05', NULL, 'active', 'google', '103106547716920139470', 'Shrestha', 'Satungal', 9849888859),
(54, 'Ashok', 'shrestha.ashok@ebpearls.com', NULL, '$2y$10$LXHHMQdESvz3PtT14fw2zeEQF4/Dwt7makifURENKEpqqbEutC0Bu', NULL, '2021-02-20 13:08:34', '2021-02-20 13:08:34', NULL, 'active', NULL, NULL, 'Shrestha', 'Test', 9849888859),
(55, NULL, 'shrestha.ashok200@gmail.com', NULL, '1be3bc32e6564055d5ca3e5a354acbef', NULL, '2021-02-20 13:14:07', '2021-02-20 13:14:07', NULL, 'active', 'facebook', '3993146247418851', NULL, NULL, NULL),
(56, NULL, 'es.suraj.duwal@gmail.com', NULL, '09fb05dd477d4ae6479985ca56c5a12d', NULL, '2021-02-20 15:10:26', '2021-02-20 15:10:26', NULL, 'active', 'google', '101723004027086887866', NULL, NULL, NULL),
(57, NULL, 'rohanrupesh00@gmail.com', NULL, '8e443d6819ae22b2d64f75266f535b59', NULL, '2021-02-20 15:11:20', '2021-02-20 15:11:20', NULL, 'active', 'facebook', '3020577088170111', NULL, NULL, NULL),
(58, 'Ashok', 'shrestha.ashok2050@gmail.com', NULL, 'a4a8a31750a23de2da88ef6a491dfd5c', NULL, '2021-02-21 14:31:33', '2021-02-21 14:31:49', NULL, 'active', 'google', '100415146505770708240', 'Shrestha', 'satungal', 981231232),
(59, 'Ashish', 'jvspressdkt@gmail.com', NULL, '28f0b864598a1291557bed248a998d4e', NULL, '2021-02-25 04:24:09', '2021-02-25 04:24:57', NULL, 'active', 'google', '113237546710501873119', 'Limbu', 'Dhankuta 7 Dhankuta', 9862033426),
(60, NULL, 'info.ghumtifilms@gmail.com', NULL, '341cd40532980c4909c8c647f2138c03', NULL, '2021-03-03 01:45:04', '2021-03-03 01:45:04', NULL, 'active', 'facebook', '1381482308882740', NULL, NULL, NULL),
(61, NULL, 'aryalsu@gmail.com', NULL, 'c6c61abda705fbc0728c076d60ed74b8', NULL, '2021-03-08 08:52:12', '2021-03-08 08:52:12', NULL, 'active', 'google', '117917005532709424294', NULL, NULL, NULL),
(62, 'Pushpendra', 'lovelypuspen@gmail.com', NULL, '32b127307a606effdcc8e51f60a45922', NULL, '2021-03-08 15:43:08', '2021-03-08 15:44:06', NULL, 'active', 'google', '110558411112558603091', 'Khadka', 'Dharan', NULL),
(63, 'Surendra Kumar', 'sureram95@gmail.com', NULL, '$2y$10$pTrY5IQj3TNHvZ7OoQyN0eXafdpMELL8Dm0r6TO.iM8TJgF33yXs2', NULL, '2021-03-09 08:01:17', '2021-03-09 08:01:17', NULL, 'active', NULL, NULL, 'Ram', 'Harinagar-4, Sunsari', 9852039429),
(64, 'admin1', 'admin1@gmail.com', NULL, '$2y$10$EPbq/K8QZ.yMJ/AmDMri0enn.xXCX4YAIi1visliCE8y33tq0lNrO', NULL, '2021-03-09 15:22:39', '2021-03-09 15:39:28', 'admin', 'active', NULL, NULL, 'admin', 'Newroad, Pokhara', 9860200670),
(65, 'admin2', 'admin2@gmail.com', NULL, '$2y$10$EPbq/K8QZ.yMJ/AmDMri0enn.xXCX4YAIi1visliCE8y33tq0lNrO', NULL, '2021-03-09 15:23:53', '2021-03-09 15:37:54', 'admin', 'active', NULL, NULL, 'admin', 'kathmandu', 9876780876),
(66, 'admin3', 'admin3@gmail.com', NULL, '$2y$10$EPbq/K8QZ.yMJ/AmDMri0enn.xXCX4YAIi1visliCE8y33tq0lNrO', NULL, '2021-03-09 15:24:37', '2021-03-09 15:59:12', 'admin', 'active', NULL, NULL, 'admin', 'Newroad, Pokhara', 9876780876),
(67, 'admin4', 'admin4@gmail.com', NULL, '$2y$10$ZkHdAF3b0b6V7i1flO9/T.LzOc8Lckxqe2g4/OPjh/Py8za0zWyma', NULL, '2021-03-09 15:25:18', '2021-03-09 16:02:08', 'admin', 'active', NULL, NULL, 'admin', 'Newroad, Pokhara', 9876780876),
(68, 'admin5', 'admin5@gmail.com', NULL, '$2y$10$KBUf7hRpXI1TBzjNNMMva.xrxPx0p9.eVeJ49s9u4bGCjudHGr1NK', NULL, '2021-03-09 15:25:54', '2021-03-09 16:03:17', 'admin', 'active', NULL, NULL, 'admin', 'Newroad, Pokhara', 9876780876),
(69, 'थाने', 'thaneshor335@gmail.com', NULL, '$2y$10$ZvPx/piWD4LlQ2SWr4S2iO22QY6yg7GQQlAD4oGxxzsIsaI86q6wG', NULL, '2021-03-11 03:57:31', '2021-03-11 03:57:31', NULL, 'active', NULL, NULL, 'श्वोर', 'Pyuthan', 9847964500),
(70, 'Binaya', 'binayaghimire1974@gmail.com', NULL, '$2y$10$w4rhmEkJ9CMby.4X8RIR2OgrGH0jSCBRUbCoC9CGJNMv9O7pq2OQy', NULL, '2021-03-21 08:11:44', '2021-03-21 08:11:44', NULL, 'active', NULL, NULL, 'Ghimire', 'ktm', 9843164367),
(71, 'jagdish', 'jack123@gmail.com', NULL, '4f5a9bf135f285358a4a74b08f8121f8', NULL, '2021-03-25 05:38:18', '2021-03-25 05:39:21', NULL, 'active', 'facebook', '491397238902521', 'thagunna', 'Dhangadhi,Kailali', 9812786171),
(72, 'Shailesh', 'shailesh@karmabhoomisamaj.com', NULL, '$2y$10$8EALndHi.5eB/wx1oekVHONXa6BxvCO8sycN4nFRo90Sj1eFJR0ba', NULL, '2021-03-26 07:41:02', '2021-03-26 07:41:02', NULL, 'active', NULL, NULL, 'Shakya', 'Patan', 9800000000),
(73, NULL, 'es.sailesh.shakya@gmail.com', NULL, 'ffeed84c7cb1ae7bf4ec4bd78275bb98', NULL, '2021-03-26 07:53:52', '2021-03-26 07:53:52', NULL, 'active', 'google', '104748031842407014614', NULL, NULL, NULL),
(74, 'Ashok', 'test1@gmail.com', NULL, '$2y$10$9sLWyrVoDMZTx02X7Uq24eOZF6dXgOlr9xORsq8zenXU3uh6jrsLq', NULL, '2021-03-29 16:08:33', '2021-03-29 16:08:33', NULL, 'active', NULL, NULL, 'Shrestha', 'satungal', 981231232),
(75, 'Tara', 'khatritara56@gmail.com', NULL, '996740de914ced0902e686373e319391', NULL, '2021-03-31 00:42:59', '2021-03-31 00:43:38', NULL, 'active', 'google', '108586142235003879561', 'Khatri', 'Dharan', 9805386640),
(77, 'Shyamsundar Ray', 'shyamsundaryadav729@gmail.com', NULL, '2aedcba61ca55ceb62d785c6b7f10a83', NULL, '2021-04-15 03:27:47', '2021-04-15 03:29:08', NULL, 'active', 'google', '105330253999007146679', 'Yadav', 'Garuda-7', 9848715050),
(78, 'Pawan', 'pawan@bhusal.com', NULL, '$2y$10$w2b1ZdpGERvBFTQGnIlks.OAwuJcDeO7WZDfRsL8bvJHoKf8ihWzq', NULL, '2021-04-20 04:53:13', '2021-04-20 04:53:13', NULL, 'active', NULL, NULL, 'Bhuasl', 'Dadhikit 1, Biruwa', 9849808029),
(79, 'Neupane', 'a@gmail.com', NULL, '$2y$10$ma0G8G67Q6nkp/oOIkFeX.HNQ/FVb7zWPkuPmwDuiIhOfY3P1ohD6', NULL, '2021-04-20 04:57:21', '2021-04-20 04:57:21', NULL, 'active', NULL, NULL, 'asdasd', 'Hariharbhawan, Pulchwok', 1111111111111),
(80, 'Rupendra', 'n@gmail.com', NULL, '$2y$10$Qh2UT58Tr/oDEL.rXoPtXeui2xATIB8YilDJZ4gddxA76.vBdiFYm', NULL, '2021-04-20 05:27:44', '2021-04-20 05:27:44', NULL, 'active', NULL, NULL, 'Neupane', 'Dadhikit 1, Biruwa', 1234567890123),
(81, 'Upendra', 'b@gmail.com', NULL, '$2y$10$1TB2G1XQ6.wKOTvpGuABiuIkCf.FqPpxsXprssNsZgWGpz9oiLOvO', NULL, '2021-04-20 05:29:44', '2021-04-20 05:29:44', NULL, 'active', NULL, NULL, 'Neupane', '700 N Coronado St', 222222222222222),
(84, NULL, 'sailesshakya@gmail.com', NULL, '52947e0ade57a09e4a1386d08f17b656', NULL, '2021-04-22 05:43:55', '2021-04-22 05:43:55', NULL, 'active', 'facebook', '4207823102562317', NULL, NULL, NULL),
(85, 'Kamala', 'kcpurna394@gmail.com', NULL, '$2y$10$D5cuN7wrP87U1voNsqpM8e162opOK7Uwm4mPoWnpnxjD8bAc3BDwS', NULL, '2021-04-29 10:06:30', '2021-04-29 10:06:30', NULL, 'active', NULL, NULL, 'Sen Oli K.C', 'Resunga municipality-1,Gulmi', 9857064394),
(86, NULL, 'sailesshakya@gmail.com', NULL, '4ffce04d92a4d6cb21c1494cdfcd6dc1', NULL, '2021-05-27 15:15:28', '2021-05-27 15:15:28', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(87, NULL, 'sailesshakya@gmail.com', NULL, 'e987eff4a7c7b7e580d659feb6f60c1a', NULL, '2021-05-27 15:15:41', '2021-05-27 15:15:41', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(88, NULL, 'sailesshakya@gmail.com', NULL, '8f1fa0193ca2b5d2fa0695827d8270e9', NULL, '2021-05-27 15:16:01', '2021-05-27 15:16:01', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(89, NULL, 'sailesshakya@gmail.com', NULL, '6492d38d732122c58b44e3fdc3e9e9f3', NULL, '2021-05-27 15:16:45', '2021-05-27 15:16:45', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(90, NULL, 'sailesshakya@gmail.com', NULL, '3c09bb10e2189124fdd8f467cc8b55a7', NULL, '2021-05-28 12:11:08', '2021-05-28 12:11:08', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(91, NULL, 'sailesh.shakya@yipl.com.np', NULL, '043ab21fc5a1607b381ac3896176dac6', NULL, '2021-05-28 12:11:31', '2021-05-28 12:11:31', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(92, 'Ashok', 'abc@gmail.com', NULL, '$2y$10$POxNqYQDjphKl9C.OAxSyOabwpwO0fzQO7h9NMzYBdTLnbpPcdHom', NULL, '2021-05-28 12:16:34', '2021-05-28 12:16:34', NULL, 'active', NULL, NULL, 'Ashok', 'Satungal', 9815245482),
(93, 'sailesh', 'sailesh@gg.com', NULL, '$2y$10$msJJNEqYIFIkSjeKJ.rxNeg4kX9Hv7tLRg2P/V2yOYNS/yUr4IZJy', NULL, '2021-05-29 14:56:59', '2021-05-29 14:56:59', NULL, 'active', NULL, NULL, 'sailesh', 'sailesh', 9841225588),
(94, 'sailesh', 'sailesh@gg.com', NULL, '$2y$10$rhBUjBBK9BilcKJuaZUDJO1wwCDrmOU4GE5MiBHXSqC.ScS/qCTau', NULL, '2021-05-29 14:56:59', '2021-05-29 14:56:59', NULL, 'active', NULL, NULL, 'sailesh', 'sailesh', 9841225588),
(95, 'sailesh', 'sailesh@gg.com', NULL, '$2y$10$lZtnwMihk.79SWHTsTaV3uV7wDjiW0gaLtNIPZCnWINe6XABpCaeG', NULL, '2021-05-29 14:56:59', '2021-05-29 14:56:59', NULL, 'active', NULL, NULL, 'sailesh', 'sailesh', 9841225588),
(96, 'sailesh', 'sailesh@ggg.com', NULL, '$2y$10$wOvzpcGT/uvHBsRBs6W1P.lGUP/YCyfnW8gWSxMB2UzZaP6agWBcO', NULL, '2021-05-29 14:59:17', '2021-05-29 14:59:17', NULL, 'active', NULL, NULL, 'sailesh', 'sailesh', 9841225588),
(97, NULL, 'sailesshakya@gmail.com', NULL, '9f810ebd27f4dbcf1ccc9302e5125f08', NULL, '2021-05-30 09:04:57', '2021-05-30 09:04:57', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(98, NULL, 'sailesshakya@gmail.com', NULL, '68aea522760347926520bfa959f15240', NULL, '2021-05-30 09:05:13', '2021-05-30 09:05:13', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(99, NULL, 'sailesshakya@gmail.com', NULL, 'ede7e2b6d13a41ddf9f4bdef84fdc737', NULL, '2021-05-30 09:05:27', '2021-05-30 09:05:27', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(100, NULL, 'sailesshakya@gmail.com', NULL, 'a97da629b098b75c294dffdc3e463904', NULL, '2021-05-30 09:06:08', '2021-05-30 09:06:08', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(101, NULL, 'sailesshakya@gmail.com', NULL, '28d6abf291fdd1f27f7c5f75efc4ffb9', NULL, '2021-05-30 11:32:33', '2021-05-30 11:32:33', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(102, 'sailesh', 'sailesh@gggg.com', NULL, '$2y$10$urseAIdUCN5Xil0bzztFFeX.ZegQaSdjkqisqeH.KE362cjfoe41C', NULL, '2021-05-30 11:34:59', '2021-05-30 11:34:59', NULL, 'active', NULL, NULL, 'sailesh', 'sailesh', 9841225588),
(103, NULL, 'sailesshakya@gmail.com', NULL, '300bedd5a8a0b2f1c4bf26d3cd69cc9b', NULL, '2021-05-30 11:37:24', '2021-05-30 11:37:24', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(104, 'sailesh', 'sailesh@gggg.comss', NULL, '$2y$10$mX3IrbOFPfz0Vlr.6QmFR.MCzj91fB8W3VsAsEs.yOB9.7PqgQQRe', NULL, '2021-05-30 11:38:32', '2021-05-30 11:38:32', NULL, 'active', NULL, NULL, 'sailesh', 'sailesh', 9841225588),
(105, 'sailesh', 'sailesh@kkks.com', NULL, '$2y$10$cLeOnfF9tD5Dw3dKHKdhEehCBsWyBXduyPx/6JHgOoDZB2cImdlTC', NULL, '2021-05-30 11:41:57', '2021-05-30 11:41:57', NULL, 'active', NULL, NULL, 'sailesh', 'sailesh', 8899112233),
(106, 'sailesh', 'sailesh@kksssks.com', NULL, '$2y$10$SPoJwCF0z1klqW5ZizkCTuva/IogZuw.bqW3r1.uxR3kHy2IqFjlq', NULL, '2021-05-30 11:55:50', '2021-05-30 11:55:50', NULL, 'active', NULL, NULL, 'sailesh', 'sailesh', 8899112233),
(107, NULL, 'sailesshakya@gmail.com', NULL, 'd4b0a4ece86c42fe7c34d6eaa9aef588', NULL, '2021-05-30 11:56:03', '2021-05-30 11:56:03', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(108, NULL, 'sailesshakya@gmail.com', NULL, '2aec405d4b5959235c49ec1d78edb0c2', NULL, '2021-05-31 10:31:51', '2021-05-31 10:31:51', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(109, NULL, 'sailesshakya@gmail.com', NULL, '33d3b157ddc0896addfb22fa2a519097', NULL, '2021-05-31 10:32:26', '2021-05-31 10:32:26', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(110, 'sailesh', 'sailesh@kkssssks.coms', NULL, '$2y$10$z2pLlHoqSfOvTfN4kwRoeOm2oL7EEYUQVjlJUq0zcRNpFIUHiBq/.', NULL, '2021-05-31 10:33:25', '2021-05-31 10:33:25', NULL, 'active', NULL, NULL, 'sailesh', 'sailesh', 8899112233),
(111, 'binay', 'abc@123.com', NULL, '$2y$10$MOZQQZ2Zn2Gvj2nXXeamuuC8TjuM2oDZpPEg23v9jZXuxmB0A2eMi', NULL, '2021-05-31 10:46:34', '2021-05-31 10:46:34', NULL, 'active', NULL, NULL, 'ghimire', 'test', 9843164367),
(112, NULL, 'sailesshakya@gmail.com', NULL, 'a012869311d64a44b5a0d567cd20de04', NULL, '2021-05-31 10:56:01', '2021-05-31 10:56:01', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(113, 'Test', 'cba@123.com', NULL, '$2y$10$jzw3ezasBllAS6zhXmjaJOokVhnsWMFFfhW4GWp5nCCJdq27JM51G', NULL, '2021-05-31 11:16:25', '2021-05-31 11:16:25', NULL, 'active', NULL, NULL, 'user', 'test', 9843164367),
(114, NULL, 'sailesshakya@gmail.com', NULL, '1eb590c1259ff05809830227e2b7e782', NULL, '2021-05-31 12:18:36', '2021-05-31 12:18:36', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(115, NULL, 'sailesshakya@gmail.com', NULL, 'adf7ee2dcf142b0e11888e72b43fcb75', NULL, '2021-05-31 12:19:06', '2021-05-31 12:19:06', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(116, NULL, 'sailesshakya@gmail.com', NULL, 'e82c4b19b8151ddc25d4d93baf7b908f', NULL, '2021-05-31 14:24:33', '2021-05-31 14:24:33', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(117, NULL, 'sailesshakya@gmail.com', NULL, '0d98b597aa732aea606bde680c3b57d8', NULL, '2021-05-31 16:43:07', '2021-05-31 16:43:07', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(118, 'ggg', 'hjj@hjj.jjj', NULL, 'd58cc99982459ca8d73b89068f53e446', NULL, '2021-05-31 16:52:21', '2021-05-31 16:56:55', NULL, 'active', NULL, NULL, 'gggggg', 'cfff', 5555555555),
(119, NULL, 'sailesshakya@gmail.com', NULL, '739cf54211aa6b75dd3001d54064e7a7', NULL, '2021-06-01 11:52:45', '2021-06-01 11:52:45', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(120, NULL, 'sailesshakya@gmail.com', NULL, '4ff3e350028d0cfcb92c3a87a57585b1', NULL, '2021-06-01 11:55:45', '2021-06-01 11:55:45', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(121, 'ram', 'ram@gmail.com', NULL, '$2y$10$CMI58ZVA2OdjpCXP4vd/fu8dcF.Ipl4csnUR74gWgDVGXXJOEWcVq', NULL, '2021-06-02 06:59:20', '2021-06-02 06:59:20', NULL, 'active', NULL, NULL, 'ram', 'kathmandu', 9849808029),
(123, NULL, 'sailesshakya@gmail.com', NULL, '802a5fd4efb36391dfa8f1991fd0f849', NULL, '2021-06-04 13:47:07', '2021-06-04 13:47:07', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(124, 'sssss', 'sail@gg.com', NULL, '$2y$10$GMwGyZbyiEJdT5Skw8iApu3TZm1uuh2/JYT07GJv02AIj.6keUQ6a', NULL, '2021-06-04 13:51:27', '2021-06-04 16:24:35', NULL, 'active', NULL, NULL, 'sssss', 'ggg', 9841379279),
(125, 'jj', 'ffff@mmm.com', NULL, '866c7ee013c58f01fa153a8d32c9ed57', NULL, '2021-06-04 13:54:37', '2021-06-04 13:59:10', NULL, 'active', NULL, NULL, 'gg', 'fcfgghhh', 5555666555),
(126, NULL, 'sailesshakya@gmail.com', NULL, 'abc99d6b9938aa86d1f30f8ee0fd169f', NULL, '2021-06-04 14:02:47', '2021-06-04 14:02:47', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(127, NULL, 'sailesshakya@gmail.com', NULL, 'b4e267d84075f66ebd967d95331fcc03', NULL, '2021-06-04 18:22:55', '2021-06-04 18:22:55', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(128, NULL, '360viewnepal@gmail.com', NULL, '52569c045dc348f12dfc4c85000ad832', NULL, '2021-06-06 08:57:20', '2021-06-06 08:57:20', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(129, NULL, 'sailesshakya@gmail.com', NULL, '54391c872fe1c8b4f98095c5d6ec7ec7', NULL, '2021-06-06 10:10:57', '2021-06-06 10:10:57', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(130, 'ko@gmail.com', 'ko@gmail.com', NULL, '$2y$10$i7FDW/QZgEbnjeq63WTdmuvlIzt5XCkLHnqDKfrXhWHu2ZrK1lfwu', NULL, '2021-06-07 08:35:04', '2021-06-09 01:43:46', NULL, 'active', NULL, NULL, 'ko@gmail.com', 'kokokoko', 9841379279),
(131, NULL, 'sailesshakya@gmail.com', NULL, 'f60ce002e5182e7b99a8a59b6d865a12', NULL, '2021-06-07 08:52:51', '2021-06-07 08:52:51', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(132, NULL, 'sailesshakya@gmail.com', NULL, '7c39a5f991bef4a1e34187677a65871d', NULL, '2021-06-07 12:24:31', '2021-06-07 12:24:31', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(133, NULL, 'faithglover.00882@gmail.com', NULL, 'd28d296b68b6ac1232353531256488b3', NULL, '2021-06-07 13:11:04', '2021-06-07 13:11:04', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(134, NULL, 'sailesshakya@gmail.com', NULL, 'e0ec453e28e061cc58ac43f91dc2f3f0', NULL, '2021-06-07 13:42:01', '2021-06-07 13:42:01', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(135, NULL, 'sailesshakya@gmail.com', NULL, 'bf9ce4f69ab045fb497f79b7b5d7622e', NULL, '2021-06-07 14:36:16', '2021-06-07 14:36:16', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(136, NULL, 'sailesshakya@gmail.com', NULL, '7f6caf1f0ba788cd7953d817724c2b6e', NULL, '2021-06-07 14:36:31', '2021-06-07 14:36:31', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(137, NULL, 'sailesshakya@gmail.com', NULL, '4a5a062217abffbdda8a550968a24c7a', NULL, '2021-06-07 14:36:40', '2021-06-07 14:36:40', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(138, NULL, 'sailesshakya@gmail.com', NULL, '038d5463327addf90d282c35be4c5eb1', NULL, '2021-06-07 14:37:50', '2021-06-07 14:37:50', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(139, NULL, 'sailesshakya@gmail.com', NULL, 'd148c06273c73ec0461b6f82575ef353', NULL, '2021-06-07 14:42:32', '2021-06-07 14:42:32', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(140, NULL, 'sailesshakya@gmail.com', NULL, 'bd0cc810b580b35884bd9df37c0e8b0f', NULL, '2021-06-07 14:44:07', '2021-06-07 14:44:07', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(141, NULL, 'sailesshakya@gmail.com', NULL, '1cf44d7975e6c86cffa70cae95b5fbb2', NULL, '2021-06-07 14:44:57', '2021-06-07 14:44:57', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(142, NULL, 'sailesshakya@gmail.com', NULL, '264939da0c6ae8ee7e5fc5b434a4024e', NULL, '2021-06-07 14:52:02', '2021-06-07 14:52:02', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(143, NULL, 'sailesshakya@gmail.com', NULL, '2156795824e042092b04e970977114cd', NULL, '2021-06-07 17:58:14', '2021-06-07 17:58:14', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(144, NULL, 'sailesshakya@gmail.com', NULL, '45f6a4a57549a5720dfdcdf643c78b83', NULL, '2021-06-07 18:20:26', '2021-06-07 18:20:26', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(146, NULL, 'nrupenz@gmail.com', NULL, '$2y$10$ZJoxmeUy3IFy5cgeYOan6ez/WqUWXz6pyhq63ckNm5fNx3x8.wWki', NULL, '2021-06-08 06:42:10', '2021-06-09 16:35:02', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(147, 'saile', 'sakk@ss.com', NULL, '$2y$10$FimXi91rTPkSQQff9UJ1o.NA3wPqN.tmQkeIwrtWy1gBHlb3e2NCq', NULL, '2021-06-09 01:57:30', '2021-06-09 01:57:30', NULL, 'active', NULL, NULL, 'saile', 'sailss', 66553322988),
(148, 'nsjs', 'nsjs@jsjs.cksk', NULL, '$2y$10$w3vb21zQmWSdZS5Pf4kl5O/lbajVWs4lQ.CjZL0/Fe1ENPLatkjLC', NULL, '2021-06-09 02:03:32', '2021-06-09 02:03:32', NULL, 'active', NULL, NULL, 'nsjs', 'bdhshhssh', 6464644596),
(149, 'jsjs', 'hdhdhdn@sjsj.cn', NULL, '$2y$10$0q7VQCcU8qz9NiLkxr4FAe5ZVxm5PMjgzzGJp6PKW7KuxeLBTwE6e', NULL, '2021-06-09 02:08:50', '2021-06-09 02:08:50', NULL, 'active', NULL, NULL, 'jsjs', 'dbdhhdhxh', 6464646433),
(150, 'hhhjjj', 'fghjj@fhh.bhh', NULL, '$2y$10$bUp9ZFOxj66bMmSd/W5K4uuwqL8GvE3gKqfOjljcDwMUAYjKuMelu', NULL, '2021-06-09 02:10:56', '2021-06-09 02:10:56', NULL, 'active', NULL, NULL, 'hhhjjj', 'ffffftt', 8855555822),
(151, 'gggggy', 'ttgf@fff.bhh', NULL, '$2y$10$Qjl3TZln1J7270VGMpJZqeY2oDneGf4Lg.qPLIut.zgL4RvttA7zy', NULL, '2021-06-09 02:11:29', '2021-06-09 02:11:29', NULL, 'active', NULL, NULL, 'gggggy', 'ffftyyy', 2233556688),
(152, NULL, 'sailesshakya@gmail.com', NULL, '06409663226af2f3114485aa4e0a23b4', NULL, '2021-06-09 02:13:39', '2021-06-09 02:13:39', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(153, NULL, 'nrupenz@gmail.com', NULL, '5011bf6d8a37692913fce3a15a51f070', NULL, '2021-06-09 14:57:35', '2021-06-09 14:57:35', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(154, 'Rupendra', 'nrupenz@gmail.com', NULL, 'e6d80593a7d6bb499229c85e7fa4e7ae', NULL, '2021-06-09 15:17:43', '2021-06-11 06:34:12', NULL, 'active', 'google', '110901695970281202083', 'Neupane', 'Suryabinayak -1, Biruwa', 9849808029),
(155, NULL, 'sailesshakya@gmail.com', NULL, 'b05851605ad0a7613af514cd321a63e3', NULL, '2021-06-09 17:32:14', '2021-06-09 17:32:14', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(156, NULL, 'sailesshakya@gmail.com', NULL, '41a6fd31aa2e75c3c6d427db3d17ea80', NULL, '2021-06-09 17:33:11', '2021-06-09 17:33:11', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(157, 'Ethereal', 'callethereal@gmail.com', NULL, '9adeb82fffb5444e81fa0ce8ad8afe7a', NULL, '2021-06-10 13:25:18', '2021-06-10 13:25:56', NULL, 'active', NULL, NULL, 'Technology', 'Kathmandu', 9849000000),
(158, NULL, 'sailesshakya@gmail.com', NULL, 'b8c27b7a1c450ffdacb31483454e0b54', NULL, '2021-06-10 16:37:39', '2021-06-10 16:37:39', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(159, NULL, 'sailesshakya@gmail.com', NULL, '4fa91c19016cb1f807ea47b5a959d518', NULL, '2021-06-11 17:34:09', '2021-06-11 17:34:09', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(160, 'sailesh', 'ko@hotmail.com', NULL, '$2y$10$OSEpJmrU/zKDvvtI11aFJ.hJo/LUUyqwwvvr92CEV40pFAZYBQGuS', NULL, '2021-06-11 17:45:14', '2021-06-11 17:45:14', NULL, 'active', NULL, NULL, 'sailesh', 'satdobato', 7788990099),
(161, NULL, '', NULL, '06bf16f1f0372a63d520eac6cf7c5af7', NULL, '2021-06-12 14:11:59', '2021-06-12 14:11:59', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(162, NULL, 'sailesshakya@gmail.com', NULL, '6b39183e7053a0106e4376f4e9c5c74d', NULL, '2021-06-12 15:01:56', '2021-06-12 15:01:56', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(163, NULL, '', NULL, '7298332f04ac004a0ca44cc69ecf6f6b', NULL, '2021-06-12 15:10:56', '2021-06-12 15:10:56', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(164, 'Ashok', 'shrestha.ashok200@gmail.com', NULL, 'aee1bc7fa5da061b752d0efddbd16495', NULL, '2021-06-14 06:37:31', '2021-06-14 06:38:38', NULL, 'active', NULL, NULL, 'Shrestha', 'Satungal', 9815245482),
(165, NULL, 'shrestha.ashok200@gmail.com', NULL, 'ab22e28b58c1e3de6bcef48d3f5d8b4a', NULL, '2021-06-14 06:38:47', '2021-06-14 06:38:47', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(166, NULL, 'shrestha.ashok200@gmail.com', NULL, 'f0f254331b4693742ea6cc1379b84e73', NULL, '2021-06-14 06:56:39', '2021-06-14 06:56:39', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(167, NULL, 'shrestha.ashok200@gmail.com', NULL, '5352696a9ca3397beb79f116f3a33991', NULL, '2021-06-14 06:56:41', '2021-06-14 06:56:41', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(168, NULL, 'shrestha.ashok200@gmail.com', NULL, '59d9b46aa00c70238bb89056cfeb96c0', NULL, '2021-06-14 06:59:20', '2021-06-14 06:59:20', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(169, NULL, 'shresthaashok933@gmail.com', NULL, 'f9a40a4780f5e1306c46f1c8daecee3b', NULL, '2021-06-14 07:45:47', '2021-06-14 07:45:47', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(170, NULL, 'shresthaashok933@gmail.com', NULL, '782086acbe9f48126642e093bf6ba151', NULL, '2021-06-14 07:52:07', '2021-06-14 07:52:07', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(171, NULL, 'shresthaashok933@gmail.com', NULL, '3df1d4b96d8976ff5986393e8767f5b2', NULL, '2021-06-14 07:52:39', '2021-06-14 07:52:39', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(172, NULL, 'shrestha.ashok200@gmail.com', NULL, '87784eca6b0dea1dff92478fb786b401', NULL, '2021-06-14 07:53:43', '2021-06-14 07:53:43', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(173, NULL, 'n_rupenz@yahoo.com', NULL, '0609154fa35b3194026346c9cac2a248', NULL, '2021-06-14 08:46:55', '2021-06-14 08:46:55', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(174, NULL, 'n_rupenz@yahoo.com', NULL, '075b051ec3d22dac7b33f788da631fd4', NULL, '2021-06-14 08:49:13', '2021-06-14 08:49:13', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(175, NULL, 'n_rupenz@yahoo.com', NULL, '2eace51d8f796d04991c831a07059758', NULL, '2021-06-14 13:56:38', '2021-06-14 13:56:38', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(176, NULL, '', NULL, '093f65e080a295f8076b1c5722a46aa2', NULL, '2021-06-14 17:41:55', '2021-06-14 17:41:55', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(177, NULL, '', NULL, 'b296ba28f4800015d8018ad62dee859d', NULL, '2021-06-14 17:42:19', '2021-06-14 17:42:19', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(178, NULL, '', NULL, '0bf727e907c5fc9d5356f11e4c45d613', NULL, '2021-06-14 17:43:11', '2021-06-14 17:43:11', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(179, NULL, 'xygfp7knnb@privaterelay.appleid.com', NULL, '9b04d152845ec0a378394003c96da594', NULL, '2021-06-16 22:29:41', '2021-06-16 22:29:41', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(180, NULL, 'n_rupenz@yahoo.com', NULL, 'f2b5e92f61b6de923b063588ee6e7c48', NULL, '2021-06-17 14:19:44', '2021-06-17 14:19:44', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(181, NULL, 'sailesshakya@gmail.com', NULL, '3332880692313818482a5a0286608ab6', NULL, '2021-06-17 16:25:02', '2021-06-17 16:25:02', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(182, NULL, 'sailesshakya@gmail.com', NULL, '0996dd16b0020a17a26b94f4675fd3da', NULL, '2021-06-17 16:38:21', '2021-06-17 16:38:21', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(183, NULL, 'sailesshakya@gmail.com', NULL, 'aba18772fc70c8cbf79a79f413ef102b', NULL, '2021-06-18 15:17:21', '2021-06-18 15:17:21', NULL, 'active', 'google', '101807759535421113599', NULL, NULL, NULL),
(184, NULL, 'saisleshakya@gmail.com', NULL, '392526094bcba21af9fd4102ce5ed092', NULL, '2021-06-23 09:58:07', '2021-06-23 09:58:07', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(185, NULL, 'maraedward.99392@gmail.com', NULL, '601ac804ce8eac52499a1cde96bae911', NULL, '2021-07-03 01:01:28', '2021-07-03 01:01:28', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(186, NULL, 'maraedward.99392@gmail.com', NULL, '764f9642ebf04622c53ebc366a68c0a7', NULL, '2021-07-03 01:03:00', '2021-07-03 01:03:00', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(187, NULL, 'n_rupenz@yahoo.com', NULL, '71e09b16e21f7b6919bbfc43f6a5b2f0', NULL, '2021-07-05 05:52:06', '2021-07-05 05:52:06', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(188, NULL, 'duaneferguson.03680@gmail.com', NULL, '2327fdecafc97928d5ba62af00a05704', NULL, '2021-07-06 17:14:55', '2021-07-06 17:14:55', NULL, 'active', NULL, NULL, NULL, NULL, NULL),
(189, NULL, 'duaneferguson.03680@gmail.com', NULL, '0a4bbceda17a6253386bc9eb45240e25', NULL, '2021-07-06 17:16:49', '2021-07-06 17:16:49', NULL, 'active', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_entreprenure`
--

CREATE TABLE `user_entreprenure` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reply` text DEFAULT NULL,
  `user_type` varchar(225) NOT NULL,
  `enterprenure_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL,
  `accept_status` int(11) NOT NULL DEFAULT 0,
  `try_counter` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_entreprenure`
--

INSERT INTO `user_entreprenure` (`id`, `user_id`, `reply`, `user_type`, `enterprenure_id`, `created_at`, `updated_at`, `status`, `accept_status`, `try_counter`) VALUES
(1, 34, '<p>hey thank you for your time we really appreciate for your effort</p>', 'web', 1, '2020-09-23 18:15:00', '2021-02-20 11:39:48', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_ips`
--

CREATE TABLE `user_ips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_ips`
--

INSERT INTO `user_ips` (`id`, `ip`, `created_at`, `updated_at`) VALUES
(1, '43.245.87.197', '2021-04-18 06:50:18', '2021-04-18 06:50:18'),
(2, '27.34.18.85', '2021-04-18 06:56:50', '2021-04-18 06:56:50'),
(3, '192.151.156.187', '2021-04-18 06:59:55', '2021-04-18 06:59:55'),
(4, '13.66.139.4', '2021-04-18 07:28:03', '2021-04-18 07:28:03'),
(5, '45.139.189.83', '2021-04-18 07:49:05', '2021-04-18 07:49:05'),
(6, '66.249.64.101', '2021-04-18 08:03:56', '2021-04-18 08:03:56'),
(7, '65.181.127.18', '2021-04-18 08:28:53', '2021-04-18 08:28:53'),
(8, '45.139.189.11', '2021-04-18 08:48:20', '2021-04-18 08:48:20'),
(9, '202.51.76.73', '2021-04-18 09:09:59', '2021-04-18 09:09:59'),
(10, '110.44.126.235', '2021-04-18 10:14:20', '2021-04-18 10:14:20'),
(11, '3.129.194.30', '2021-04-18 10:51:54', '2021-04-18 10:51:54'),
(12, '66.102.6.244', '2021-04-18 11:02:56', '2021-04-18 11:02:56'),
(13, '27.34.68.60', '2021-04-18 11:02:56', '2021-04-18 11:02:56'),
(14, '66.102.6.246', '2021-04-18 11:11:21', '2021-04-18 11:11:21'),
(15, '192.35.168.80', '2021-04-18 12:21:23', '2021-04-18 12:21:23'),
(16, '202.166.198.196', '2021-04-18 13:37:25', '2021-04-18 13:37:25'),
(17, '34.213.57.143', '2021-04-18 14:21:46', '2021-04-18 14:21:46'),
(18, '161.69.99.11', '2021-04-18 14:32:59', '2021-04-18 14:32:59'),
(19, '173.252.83.24', '2021-04-18 14:33:49', '2021-04-18 14:33:49'),
(20, '192.35.168.64', '2021-04-18 16:01:50', '2021-04-18 16:01:50'),
(21, '66.249.64.102', '2021-04-18 22:25:15', '2021-04-18 22:25:15'),
(22, '46.4.33.48', '2021-04-18 22:28:50', '2021-04-18 22:28:50'),
(23, '159.203.47.246', '2021-04-18 23:00:07', '2021-04-18 23:00:07'),
(24, '173.252.83.116', '2021-04-19 00:55:35', '2021-04-19 00:55:35'),
(25, '92.204.170.186', '2021-04-19 03:51:02', '2021-04-19 03:51:02'),
(26, '34.221.246.122', '2021-04-19 04:57:04', '2021-04-19 04:57:04'),
(27, '116.66.197.119', '2021-04-19 05:21:16', '2021-04-19 05:21:16'),
(28, '69.171.249.16', '2021-04-19 06:48:08', '2021-04-19 06:48:08'),
(29, '64.71.131.244', '2021-04-19 09:54:06', '2021-04-19 09:54:06'),
(30, '219.138.163.116', '2021-04-19 11:29:01', '2021-04-19 11:29:01'),
(31, '124.41.243.47', '2021-04-19 11:34:39', '2021-04-19 11:34:39'),
(32, '202.51.76.33', '2021-04-19 11:35:03', '2021-04-19 11:35:03'),
(33, '49.126.81.135', '2021-04-19 13:19:20', '2021-04-19 13:19:20'),
(34, '44.242.155.194', '2021-04-19 14:06:38', '2021-04-19 14:06:38'),
(35, '34.219.104.106', '2021-04-19 14:06:41', '2021-04-19 14:06:41'),
(36, '103.225.244.41', '2021-04-19 14:25:51', '2021-04-19 14:25:51'),
(37, '110.44.124.137', '2021-04-19 16:55:02', '2021-04-19 16:55:02'),
(38, '149.28.118.116', '2021-04-19 20:35:13', '2021-04-19 20:35:13'),
(39, '5.255.231.173', '2021-04-19 21:54:33', '2021-04-19 21:54:33'),
(40, '162.213.38.104', '2021-04-19 22:48:57', '2021-04-19 22:48:57'),
(41, '195.201.57.164', '2021-04-20 01:44:02', '2021-04-20 01:44:02'),
(42, '173.252.107.3', '2021-04-20 02:19:33', '2021-04-20 02:19:33'),
(43, '159.65.147.18', '2021-04-20 02:21:16', '2021-04-20 02:21:16'),
(44, '13.66.139.14', '2021-04-20 04:17:30', '2021-04-20 04:17:30'),
(45, '202.52.232.35', '2021-04-20 05:01:12', '2021-04-20 05:01:12'),
(46, '54.145.90.209', '2021-04-20 05:38:23', '2021-04-20 05:38:23'),
(47, '31.13.127.7', '2021-04-20 06:10:29', '2021-04-20 06:10:29'),
(48, '31.13.127.12', '2021-04-20 06:10:30', '2021-04-20 06:10:30'),
(49, '49.126.55.10', '2021-04-20 06:30:49', '2021-04-20 06:30:49'),
(50, '116.203.219.77', '2021-04-20 08:35:20', '2021-04-20 08:35:20'),
(51, '66.220.149.9', '2021-04-20 09:43:42', '2021-04-20 09:43:42'),
(52, '43.245.87.37', '2021-04-20 10:17:49', '2021-04-20 10:17:49'),
(53, '51.158.119.76', '2021-04-20 10:22:13', '2021-04-20 10:22:13'),
(54, '18.194.196.202', '2021-04-20 11:00:05', '2021-04-20 11:00:05'),
(55, '5.45.207.118', '2021-04-20 11:35:17', '2021-04-20 11:35:17'),
(56, '192.35.168.32', '2021-04-20 11:35:52', '2021-04-20 11:35:52'),
(57, '173.252.83.118', '2021-04-20 13:04:37', '2021-04-20 13:04:37'),
(58, '44.242.168.161', '2021-04-20 14:14:28', '2021-04-20 14:14:28'),
(59, '35.80.5.50', '2021-04-20 14:14:36', '2021-04-20 14:14:36'),
(60, '54.202.176.36', '2021-04-20 14:18:49', '2021-04-20 14:18:49'),
(61, '54.184.170.216', '2021-04-20 14:30:07', '2021-04-20 14:30:07'),
(62, '173.252.107.19', '2021-04-20 15:25:20', '2021-04-20 15:25:20'),
(63, '212.47.251.118', '2021-04-20 17:29:45', '2021-04-20 17:29:45'),
(64, '31.13.115.14', '2021-04-20 17:55:15', '2021-04-20 17:55:15'),
(65, '173.252.87.18', '2021-04-20 21:19:44', '2021-04-20 21:19:44'),
(66, '51.158.108.77', '2021-04-20 22:13:07', '2021-04-20 22:13:07'),
(67, '66.249.64.98', '2021-04-20 23:22:08', '2021-04-20 23:22:08'),
(68, '173.252.83.19', '2021-04-21 01:13:28', '2021-04-21 01:13:28'),
(69, '69.171.249.22', '2021-04-21 04:03:58', '2021-04-21 04:03:58'),
(70, '69.171.251.118', '2021-04-21 06:25:03', '2021-04-21 06:25:03'),
(71, '173.252.83.17', '2021-04-21 07:11:20', '2021-04-21 07:11:20'),
(72, '118.91.175.82', '2021-04-21 09:23:05', '2021-04-21 09:23:05'),
(73, '173.252.83.2', '2021-04-21 10:09:54', '2021-04-21 10:09:54'),
(74, '27.34.18.31', '2021-04-21 11:31:43', '2021-04-21 11:31:43'),
(75, '54.38.123.228', '2021-04-21 12:23:57', '2021-04-21 12:23:57'),
(76, '54.149.245.123', '2021-04-21 14:12:37', '2021-04-21 14:12:37'),
(77, '34.214.62.227', '2021-04-21 14:13:46', '2021-04-21 14:13:46'),
(78, '66.220.149.27', '2021-04-21 14:22:19', '2021-04-21 14:22:19'),
(79, '173.252.127.26', '2021-04-21 16:29:25', '2021-04-21 16:29:25'),
(80, '207.46.13.155', '2021-04-21 17:11:33', '2021-04-21 17:11:33'),
(81, '173.252.111.12', '2021-04-21 18:53:31', '2021-04-21 18:53:31'),
(82, '103.49.117.131', '2021-04-21 20:03:28', '2021-04-21 20:03:28'),
(83, '173.252.79.21', '2021-04-21 20:37:07', '2021-04-21 20:37:07'),
(84, '173.252.83.22', '2021-04-21 21:34:21', '2021-04-21 21:34:21'),
(85, '69.197.185.132', '2021-04-21 23:01:17', '2021-04-21 23:01:17'),
(86, '74.120.14.37', '2021-04-22 00:07:06', '2021-04-22 00:07:06'),
(87, '192.151.152.139', '2021-04-22 01:49:13', '2021-04-22 01:49:13'),
(88, '202.51.65.5', '2021-04-22 05:10:39', '2021-04-22 05:10:39'),
(89, '110.44.127.172', '2021-04-22 05:43:37', '2021-04-22 05:43:37'),
(90, '173.252.111.112', '2021-04-22 06:29:31', '2021-04-22 06:29:31'),
(91, '27.34.18.125', '2021-04-22 06:49:22', '2021-04-22 06:49:22'),
(92, '64.233.172.39', '2021-04-22 07:34:28', '2021-04-22 07:34:28'),
(93, '122.254.91.203', '2021-04-22 08:30:35', '2021-04-22 08:30:35'),
(94, '113.199.159.82', '2021-04-22 09:51:04', '2021-04-22 09:51:04'),
(95, '69.171.251.22', '2021-04-22 10:53:35', '2021-04-22 10:53:35'),
(96, '31.13.103.8', '2021-04-22 13:10:57', '2021-04-22 13:10:57'),
(97, '173.252.107.14', '2021-04-22 13:13:52', '2021-04-22 13:13:52'),
(98, '34.221.239.64', '2021-04-22 14:13:03', '2021-04-22 14:13:03'),
(99, '54.190.17.109', '2021-04-22 14:13:25', '2021-04-22 14:13:25'),
(100, '34.209.154.124', '2021-04-22 14:15:35', '2021-04-22 14:15:35'),
(101, '54.189.164.251', '2021-04-22 14:25:24', '2021-04-22 14:25:24'),
(102, '192.35.168.112', '2021-04-22 15:41:23', '2021-04-22 15:41:23'),
(103, '173.252.127.16', '2021-04-22 16:53:40', '2021-04-22 16:53:40'),
(104, '199.247.23.87', '2021-04-22 20:21:23', '2021-04-22 20:21:23'),
(105, '74.120.14.38', '2021-04-23 00:05:57', '2021-04-23 00:05:57'),
(106, '173.252.95.117', '2021-04-23 02:04:38', '2021-04-23 02:04:38'),
(107, '173.252.83.25', '2021-04-23 04:08:19', '2021-04-23 04:08:19'),
(108, '69.171.231.116', '2021-04-23 06:41:10', '2021-04-23 06:41:10'),
(109, '66.220.149.22', '2021-04-23 07:15:51', '2021-04-23 07:15:51'),
(110, '3.8.12.221', '2021-04-23 07:29:43', '2021-04-23 07:29:43'),
(111, '173.252.107.21', '2021-04-23 09:28:49', '2021-04-23 09:28:49'),
(112, '69.171.231.2', '2021-04-23 10:24:03', '2021-04-23 10:24:03'),
(113, '77.75.77.62', '2021-04-23 11:40:35', '2021-04-23 11:40:35'),
(114, '27.34.17.113', '2021-04-23 11:45:24', '2021-04-23 11:45:24'),
(115, '192.35.168.16', '2021-04-23 11:52:40', '2021-04-23 11:52:40'),
(116, '173.252.107.16', '2021-04-23 12:45:23', '2021-04-23 12:45:23'),
(117, '219.138.163.119', '2021-04-23 13:20:14', '2021-04-23 13:20:14'),
(118, '69.171.251.17', '2021-04-23 14:08:31', '2021-04-23 14:08:31'),
(119, '44.242.158.217', '2021-04-23 14:11:07', '2021-04-23 14:11:07'),
(120, '34.222.190.103', '2021-04-23 14:11:07', '2021-04-23 14:11:07'),
(121, '34.211.220.99', '2021-04-23 14:12:59', '2021-04-23 14:12:59'),
(122, '34.209.212.141', '2021-04-23 14:39:08', '2021-04-23 14:39:08'),
(123, '51.161.119.105', '2021-04-23 15:10:04', '2021-04-23 15:10:04'),
(124, '142.4.219.91', '2021-04-23 15:14:26', '2021-04-23 15:14:26'),
(125, '69.171.249.113', '2021-04-23 16:25:05', '2021-04-23 16:25:05'),
(126, '88.198.50.113', '2021-04-23 17:20:08', '2021-04-23 17:20:08'),
(127, '18.188.27.62', '2021-04-24 02:20:27', '2021-04-24 02:20:27'),
(128, '18.188.27.62', '2021-04-24 02:20:27', '2021-04-24 02:20:27'),
(129, '18.188.27.62', '2021-04-24 02:20:27', '2021-04-24 02:20:27'),
(130, '18.188.27.62', '2021-04-24 02:20:27', '2021-04-24 02:20:27'),
(131, '173.252.79.23', '2021-04-24 05:16:48', '2021-04-24 05:16:48'),
(132, '173.252.83.21', '2021-04-24 06:11:14', '2021-04-24 06:11:14'),
(133, '5.9.112.210', '2021-04-24 06:50:14', '2021-04-24 06:50:14'),
(134, '34.89.0.142', '2021-04-24 12:25:21', '2021-04-24 12:25:21'),
(135, '34.219.225.194', '2021-04-24 14:11:21', '2021-04-24 14:11:21'),
(136, '192.35.168.96', '2021-04-24 15:25:36', '2021-04-24 15:25:36'),
(137, '34.121.129.150', '2021-04-24 16:28:21', '2021-04-24 16:28:21'),
(138, '38.122.112.147', '2021-04-24 18:45:13', '2021-04-24 18:45:13'),
(139, '178.150.14.250', '2021-04-24 21:24:43', '2021-04-24 21:24:43'),
(140, '49.12.126.16', '2021-04-24 21:37:23', '2021-04-24 21:37:23'),
(141, '93.158.91.207', '2021-04-25 02:44:07', '2021-04-25 02:44:07'),
(142, '213.180.203.68', '2021-04-25 02:48:37', '2021-04-25 02:48:37'),
(143, '49.244.137.64', '2021-04-25 07:54:25', '2021-04-25 07:54:25'),
(144, '42.51.193.59', '2021-04-25 08:26:30', '2021-04-25 08:26:30'),
(145, '143.198.40.2', '2021-04-25 09:29:38', '2021-04-25 09:29:38'),
(146, '49.244.169.83', '2021-04-25 11:24:35', '2021-04-25 11:24:35'),
(147, '180.163.220.66', '2021-04-25 12:57:42', '2021-04-25 12:57:42'),
(148, '180.163.220.4', '2021-04-25 12:58:15', '2021-04-25 12:58:15'),
(149, '27.115.124.6', '2021-04-25 13:00:11', '2021-04-25 13:00:11'),
(150, '171.13.14.76', '2021-04-25 13:00:23', '2021-04-25 13:00:23'),
(151, '180.163.220.5', '2021-04-25 13:00:43', '2021-04-25 13:00:43'),
(152, '180.163.220.67', '2021-04-25 13:01:01', '2021-04-25 13:01:01'),
(153, '171.13.14.9', '2021-04-25 13:01:12', '2021-04-25 13:01:12'),
(154, '121.4.163.148', '2021-04-25 13:02:10', '2021-04-25 13:02:10'),
(155, '42.236.10.114', '2021-04-25 13:03:28', '2021-04-25 13:03:28'),
(156, '42.236.10.117', '2021-04-25 13:04:10', '2021-04-25 13:04:10'),
(157, '34.223.83.215', '2021-04-25 20:43:48', '2021-04-25 20:43:48'),
(158, '116.203.79.53', '2021-04-25 21:17:50', '2021-04-25 21:17:50'),
(159, '66.249.66.197', '2021-04-25 23:12:57', '2021-04-25 23:12:57'),
(160, '74.120.14.39', '2021-04-26 00:04:23', '2021-04-26 00:04:23'),
(161, '66.249.66.198', '2021-04-26 00:13:24', '2021-04-26 00:13:24'),
(162, '103.232.154.119', '2021-04-26 01:10:48', '2021-04-26 01:10:48'),
(163, '54.218.110.120', '2021-04-26 04:50:33', '2021-04-26 04:50:33'),
(164, '34.221.33.242', '2021-04-26 08:02:31', '2021-04-26 08:02:31'),
(165, '42.83.147.202', '2021-04-26 09:31:25', '2021-04-26 09:31:25'),
(166, '66.249.66.194', '2021-04-26 11:40:46', '2021-04-26 11:40:46'),
(167, '54.186.131.90', '2021-04-26 14:05:20', '2021-04-26 14:05:20'),
(168, '54.202.228.18', '2021-04-26 14:05:24', '2021-04-26 14:05:24'),
(169, '54.202.181.179', '2021-04-26 14:11:07', '2021-04-26 14:11:07'),
(170, '35.163.168.15', '2021-04-26 14:11:32', '2021-04-26 14:11:32'),
(171, '34.212.135.58', '2021-04-26 14:11:50', '2021-04-26 14:11:50'),
(172, '34.221.60.117', '2021-04-26 14:15:35', '2021-04-26 14:15:35'),
(173, '54.191.40.194', '2021-04-26 14:16:18', '2021-04-26 14:16:18'),
(174, '35.166.129.2', '2021-04-26 14:21:49', '2021-04-26 14:21:49'),
(175, '192.35.168.176', '2021-04-26 14:33:37', '2021-04-26 14:33:37'),
(176, '110.44.120.29', '2021-04-26 14:46:56', '2021-04-26 14:46:56'),
(177, '162.213.37.50', '2021-04-26 19:04:37', '2021-04-26 19:04:37'),
(178, '45.32.21.17', '2021-04-27 03:58:46', '2021-04-27 03:58:46'),
(179, '154.51.131.142', '2021-04-27 10:46:35', '2021-04-27 10:46:35'),
(180, '192.35.168.128', '2021-04-27 11:32:37', '2021-04-27 11:32:37'),
(181, '202.51.88.15', '2021-04-27 12:55:17', '2021-04-27 12:55:17'),
(182, '120.89.104.107', '2021-04-27 12:57:41', '2021-04-27 12:57:41'),
(183, '173.252.107.113', '2021-04-27 13:17:52', '2021-04-27 13:17:52'),
(184, '173.252.107.8', '2021-04-27 13:17:53', '2021-04-27 13:17:53'),
(185, '120.89.105.83', '2021-04-27 13:21:01', '2021-04-27 13:21:01'),
(186, '27.34.30.232', '2021-04-27 14:10:08', '2021-04-27 14:10:08'),
(187, '42.192.37.168', '2021-04-27 17:51:08', '2021-04-27 17:51:08'),
(188, '173.252.83.11', '2021-04-28 02:45:06', '2021-04-28 02:45:06'),
(189, '173.252.83.10', '2021-04-28 02:45:16', '2021-04-28 02:45:16'),
(190, '173.252.83.7', '2021-04-28 02:45:28', '2021-04-28 02:45:28'),
(191, '47.242.250.49', '2021-04-28 03:44:47', '2021-04-28 03:44:47'),
(192, '47.243.69.60', '2021-04-28 03:47:29', '2021-04-28 03:47:29'),
(193, '173.252.87.16', '2021-04-28 04:48:06', '2021-04-28 04:48:06'),
(194, '158.175.164.89', '2021-04-28 05:49:38', '2021-04-28 05:49:38'),
(195, '173.252.79.27', '2021-04-28 06:51:50', '2021-04-28 06:51:50'),
(196, '173.252.95.21', '2021-04-28 07:14:20', '2021-04-28 07:14:20'),
(197, '23.250.53.82', '2021-04-28 09:15:09', '2021-04-28 09:15:09'),
(198, '173.252.127.19', '2021-04-28 11:47:18', '2021-04-28 11:47:18'),
(199, '110.44.127.173', '2021-04-28 11:55:19', '2021-04-28 11:55:19'),
(200, '66.249.66.55', '2021-04-28 14:37:51', '2021-04-28 14:37:51'),
(201, '173.252.127.7', '2021-04-28 14:48:24', '2021-04-28 14:48:24'),
(202, '27.34.48.117', '2021-04-28 15:25:23', '2021-04-28 15:25:23'),
(203, '66.249.66.53', '2021-04-28 15:34:35', '2021-04-28 15:34:35'),
(204, '110.44.121.4', '2021-04-28 16:23:48', '2021-04-28 16:23:48'),
(205, '69.197.185.134', '2021-04-28 16:46:47', '2021-04-28 16:46:47'),
(206, '69.171.249.14', '2021-04-28 17:26:35', '2021-04-28 17:26:35'),
(207, '66.249.66.27', '2021-04-28 18:01:08', '2021-04-28 18:01:08'),
(208, '5.255.231.195', '2021-04-28 18:01:21', '2021-04-28 18:01:21'),
(209, '174.138.25.36', '2021-04-28 19:01:02', '2021-04-28 19:01:02'),
(210, '107.150.59.245', '2021-04-28 21:42:22', '2021-04-28 21:42:22'),
(211, '173.252.111.9', '2021-04-28 22:06:56', '2021-04-28 22:06:56'),
(212, '66.249.66.29', '2021-04-28 23:11:15', '2021-04-28 23:11:15'),
(213, '176.9.25.75', '2021-04-29 00:51:35', '2021-04-29 00:51:35'),
(214, '137.226.113.44', '2021-04-29 00:59:46', '2021-04-29 00:59:46'),
(215, '173.252.111.13', '2021-04-29 01:46:02', '2021-04-29 01:46:02'),
(216, '173.252.127.8', '2021-04-29 04:03:37', '2021-04-29 04:03:37'),
(217, '143.198.195.162', '2021-04-29 04:18:53', '2021-04-29 04:18:53'),
(218, '202.51.92.242', '2021-04-29 04:31:54', '2021-04-29 04:31:54'),
(219, '180.163.220.3', '2021-04-29 04:53:48', '2021-04-29 04:53:48'),
(220, '42.236.10.93', '2021-04-29 04:57:58', '2021-04-29 04:57:58'),
(221, '202.51.72.22', '2021-04-29 05:28:01', '2021-04-29 05:28:01'),
(222, '69.171.251.11', '2021-04-29 06:26:58', '2021-04-29 06:26:58'),
(223, '193.200.151.103', '2021-04-29 07:30:26', '2021-04-29 07:30:26'),
(224, '173.252.111.5', '2021-04-29 09:02:23', '2021-04-29 09:02:23'),
(225, '202.63.245.98', '2021-04-29 10:06:35', '2021-04-29 10:06:35'),
(226, '198.23.169.34', '2021-04-29 10:45:35', '2021-04-29 10:45:35'),
(227, '69.63.184.117', '2021-04-29 11:15:16', '2021-04-29 11:15:16'),
(228, '173.252.127.23', '2021-04-29 11:35:28', '2021-04-29 11:35:28'),
(229, '66.249.66.14', '2021-04-29 12:10:28', '2021-04-29 12:10:28'),
(230, '54.149.168.209', '2021-04-29 14:59:04', '2021-04-29 14:59:04'),
(231, '34.223.239.88', '2021-04-29 15:16:02', '2021-04-29 15:16:02'),
(232, '69.171.251.21', '2021-04-29 16:09:27', '2021-04-29 16:09:27'),
(233, '66.220.149.35', '2021-04-29 20:31:05', '2021-04-29 20:31:05'),
(234, '173.252.107.117', '2021-04-29 20:58:09', '2021-04-29 20:58:09'),
(235, '188.166.188.124', '2021-04-29 22:57:51', '2021-04-29 22:57:51'),
(236, '173.252.111.120', '2021-04-29 23:34:24', '2021-04-29 23:34:24'),
(237, '173.252.111.7', '2021-04-30 00:06:59', '2021-04-30 00:06:59'),
(238, '5.255.231.80', '2021-04-30 00:15:31', '2021-04-30 00:15:31'),
(239, '5.255.231.100', '2021-04-30 00:22:17', '2021-04-30 00:22:17'),
(240, '173.252.111.6', '2021-04-30 02:08:17', '2021-04-30 02:08:17'),
(241, '69.171.231.119', '2021-04-30 02:14:59', '2021-04-30 02:14:59'),
(242, '66.220.149.57', '2021-04-30 05:01:49', '2021-04-30 05:01:49'),
(243, '173.252.111.20', '2021-04-30 05:13:51', '2021-04-30 05:13:51'),
(244, '66.220.149.5', '2021-04-30 07:18:25', '2021-04-30 07:18:25'),
(245, '66.249.66.18', '2021-04-30 07:32:12', '2021-04-30 07:32:12'),
(246, '173.252.79.2', '2021-04-30 07:50:26', '2021-04-30 07:50:26'),
(247, '66.220.149.34', '2021-04-30 08:09:11', '2021-04-30 08:09:11'),
(248, '66.220.149.41', '2021-04-30 08:34:47', '2021-04-30 08:34:47'),
(249, '69.63.184.111', '2021-04-30 08:45:55', '2021-04-30 08:45:55'),
(250, '69.171.249.21', '2021-04-30 10:56:32', '2021-04-30 10:56:32'),
(251, '66.220.149.112', '2021-04-30 10:56:49', '2021-04-30 10:56:49'),
(252, '173.252.107.18', '2021-04-30 11:13:43', '2021-04-30 11:13:43'),
(253, '173.252.107.20', '2021-04-30 13:52:46', '2021-04-30 13:52:46'),
(254, '34.219.222.221', '2021-04-30 14:29:29', '2021-04-30 14:29:29'),
(255, '173.252.111.22', '2021-04-30 14:56:30', '2021-04-30 14:56:30'),
(256, '110.44.125.181', '2021-04-30 15:20:49', '2021-04-30 15:20:49'),
(257, '173.252.107.119', '2021-04-30 17:00:02', '2021-04-30 17:00:02'),
(258, '66.220.149.40', '2021-04-30 17:01:48', '2021-04-30 17:01:48'),
(259, '173.252.83.120', '2021-04-30 17:15:08', '2021-04-30 17:15:08'),
(260, '173.252.95.37', '2021-04-30 17:28:40', '2021-04-30 17:28:40'),
(261, '196.196.31.102', '2021-04-30 17:52:37', '2021-04-30 17:52:37'),
(262, '173.252.111.1', '2021-04-30 17:52:57', '2021-04-30 17:52:57'),
(263, '173.252.107.4', '2021-04-30 18:32:50', '2021-04-30 18:32:50'),
(264, '66.249.66.20', '2021-04-30 21:01:10', '2021-04-30 21:01:10'),
(265, '69.171.231.1', '2021-05-01 00:41:08', '2021-05-01 00:41:08'),
(266, '69.171.249.2', '2021-05-01 01:00:50', '2021-05-01 01:00:50'),
(267, '173.252.107.23', '2021-05-01 01:16:04', '2021-05-01 01:16:04'),
(268, '69.171.251.9', '2021-05-01 02:17:58', '2021-05-01 02:17:58'),
(269, '69.171.251.14', '2021-05-01 03:17:49', '2021-05-01 03:17:49'),
(270, '173.252.107.22', '2021-05-01 08:51:36', '2021-05-01 08:51:36'),
(271, '66.220.149.10', '2021-05-01 09:18:21', '2021-05-01 09:18:21'),
(272, '66.220.149.23', '2021-05-01 09:34:19', '2021-05-01 09:34:19'),
(273, '43.231.209.105', '2021-05-01 09:36:53', '2021-05-01 09:36:53'),
(274, '69.171.231.120', '2021-05-01 11:04:39', '2021-05-01 11:04:39'),
(275, '173.252.107.17', '2021-05-01 11:51:09', '2021-05-01 11:51:09'),
(276, '66.249.66.16', '2021-05-01 13:55:54', '2021-05-01 13:55:54'),
(277, '66.249.66.25', '2021-05-01 14:25:05', '2021-05-01 14:25:05'),
(278, '54.188.39.214', '2021-05-01 14:41:20', '2021-05-01 14:41:20'),
(279, '54.219.162.224', '2021-05-01 15:47:18', '2021-05-01 15:47:18'),
(280, '173.252.111.17', '2021-05-01 15:53:51', '2021-05-01 15:53:51'),
(281, '54.163.19.254', '2021-05-01 18:43:04', '2021-05-01 18:43:04'),
(282, '18.144.84.84', '2021-05-01 19:50:01', '2021-05-01 19:50:01'),
(283, '13.56.248.239', '2021-05-01 19:50:03', '2021-05-01 19:50:03'),
(284, '173.252.107.116', '2021-05-01 22:30:50', '2021-05-01 22:30:50'),
(285, '69.171.231.117', '2021-05-02 02:21:27', '2021-05-02 02:21:27'),
(286, '66.220.149.15', '2021-05-02 04:34:05', '2021-05-02 04:34:05'),
(287, '66.220.149.18', '2021-05-02 04:34:12', '2021-05-02 04:34:12'),
(288, '69.63.184.118', '2021-05-02 07:57:25', '2021-05-02 07:57:25'),
(289, '77.75.79.36', '2021-05-02 08:55:21', '2021-05-02 08:55:21'),
(290, '69.171.249.6', '2021-05-02 11:53:38', '2021-05-02 11:53:38'),
(291, '69.171.249.1', '2021-05-02 12:29:21', '2021-05-02 12:29:21'),
(292, '173.252.111.23', '2021-05-02 13:40:05', '2021-05-02 13:40:05'),
(293, '173.252.111.14', '2021-05-02 15:46:37', '2021-05-02 15:46:37'),
(294, '192.151.156.190', '2021-05-02 16:36:52', '2021-05-02 16:36:52'),
(295, '66.220.149.3', '2021-05-02 17:47:51', '2021-05-02 17:47:51'),
(296, '173.252.95.18', '2021-05-02 23:37:32', '2021-05-02 23:37:32'),
(297, '173.252.87.31', '2021-05-02 23:37:33', '2021-05-02 23:37:33'),
(298, '157.90.177.215', '2021-05-03 01:15:40', '2021-05-03 01:15:40'),
(299, '58.53.128.148', '2021-05-03 01:41:11', '2021-05-03 01:41:11'),
(300, '18.237.195.158', '2021-05-03 04:53:53', '2021-05-03 04:53:53'),
(301, '173.252.83.6', '2021-05-03 04:54:04', '2021-05-03 04:54:04'),
(302, '173.252.83.14', '2021-05-03 05:04:42', '2021-05-03 05:04:42'),
(303, '182.93.71.204', '2021-05-03 06:01:51', '2021-05-03 06:01:51'),
(304, '43.245.86.44', '2021-05-03 06:50:10', '2021-05-03 06:50:10'),
(305, '69.171.251.119', '2021-05-03 09:07:21', '2021-05-03 09:07:21'),
(306, '54.201.48.82', '2021-05-03 14:21:21', '2021-05-03 14:21:21'),
(307, '34.214.107.171', '2021-05-03 14:21:25', '2021-05-03 14:21:25'),
(308, '54.213.219.109', '2021-05-03 14:22:14', '2021-05-03 14:22:14'),
(309, '35.167.225.207', '2021-05-03 14:22:55', '2021-05-03 14:22:55'),
(310, '18.236.104.233', '2021-05-03 14:22:59', '2021-05-03 14:22:59'),
(311, '66.220.149.55', '2021-05-03 16:12:47', '2021-05-03 16:12:47'),
(312, '173.252.83.8', '2021-05-03 19:18:33', '2021-05-03 19:18:33'),
(313, '162.213.36.30', '2021-05-03 20:26:15', '2021-05-03 20:26:15'),
(314, '66.220.149.28', '2021-05-04 06:09:28', '2021-05-04 06:09:28'),
(315, '110.44.121.59', '2021-05-04 06:38:29', '2021-05-04 06:38:29'),
(316, '69.63.184.1', '2021-05-04 08:44:39', '2021-05-04 08:44:39'),
(317, '13.209.28.104', '2021-05-04 09:14:18', '2021-05-04 09:14:18'),
(318, '173.252.127.116', '2021-05-04 10:58:24', '2021-05-04 10:58:24'),
(319, '173.252.127.20', '2021-05-04 10:58:24', '2021-05-04 10:58:24'),
(320, '34.244.154.155', '2021-05-04 11:43:15', '2021-05-04 11:43:15'),
(321, '27.34.20.42', '2021-05-04 14:33:26', '2021-05-04 14:33:26'),
(322, '13.57.48.237', '2021-05-04 16:15:08', '2021-05-04 16:15:08'),
(323, '78.47.119.7', '2021-05-04 16:30:47', '2021-05-04 16:30:47'),
(324, '34.219.8.2', '2021-05-05 02:32:11', '2021-05-05 02:32:11'),
(325, '167.99.116.48', '2021-05-05 03:02:29', '2021-05-05 03:02:29'),
(326, '159.65.165.250', '2021-05-05 04:58:56', '2021-05-05 04:58:56'),
(327, '54.38.235.1', '2021-05-05 11:22:26', '2021-05-05 11:22:26'),
(328, '208.87.236.201', '2021-05-05 12:32:54', '2021-05-05 12:32:54'),
(329, '77.75.78.164', '2021-05-05 13:36:01', '2021-05-05 13:36:01'),
(330, '34.222.204.237', '2021-05-05 14:30:25', '2021-05-05 14:30:25'),
(331, '54.214.119.249', '2021-05-05 14:32:12', '2021-05-05 14:32:12'),
(332, '92.204.174.83', '2021-05-05 19:46:53', '2021-05-05 19:46:53'),
(333, '69.171.249.118', '2021-05-06 11:13:54', '2021-05-06 11:13:54'),
(334, '202.51.67.6', '2021-05-06 11:28:45', '2021-05-06 11:28:45'),
(335, '120.89.97.135', '2021-05-06 11:28:46', '2021-05-06 11:28:46'),
(336, '120.89.97.5', '2021-05-06 11:36:37', '2021-05-06 11:36:37'),
(337, '101.100.190.196', '2021-05-06 11:38:04', '2021-05-06 11:38:04'),
(338, '202.51.67.5', '2021-05-06 11:39:13', '2021-05-06 11:39:13'),
(339, '202.51.65.9', '2021-05-06 11:44:26', '2021-05-06 11:44:26'),
(340, '120.89.97.7', '2021-05-06 13:56:00', '2021-05-06 13:56:00'),
(341, '202.51.76.49', '2021-05-07 10:41:44', '2021-05-07 10:41:44'),
(342, '110.44.124.183', '2021-05-07 16:09:54', '2021-05-07 16:09:54'),
(343, '213.180.203.3', '2021-05-07 20:16:17', '2021-05-07 20:16:17'),
(344, '34.240.229.106', '2021-05-07 21:46:08', '2021-05-07 21:46:08'),
(345, '192.99.5.228', '2021-05-08 02:30:17', '2021-05-08 02:30:17'),
(346, '190.2.132.128', '2021-05-08 02:54:43', '2021-05-08 02:54:43'),
(347, '39.101.217.74', '2021-05-08 05:13:18', '2021-05-08 05:13:18'),
(348, '192.210.166.224', '2021-05-08 14:02:40', '2021-05-08 14:02:40'),
(349, '54.245.33.99', '2021-05-08 14:25:40', '2021-05-08 14:25:40'),
(350, '173.252.87.117', '2021-05-08 23:24:35', '2021-05-08 23:24:35'),
(351, '108.62.9.62', '2021-05-09 07:05:46', '2021-05-09 07:05:46'),
(352, '27.34.13.140', '2021-05-09 09:38:23', '2021-05-09 09:38:23'),
(353, '129.146.31.126', '2021-05-09 11:36:22', '2021-05-09 11:36:22'),
(354, '69.171.249.12', '2021-05-09 22:48:22', '2021-05-09 22:48:22'),
(355, '192.99.14.117', '2021-05-09 23:58:59', '2021-05-09 23:58:59'),
(356, '199.187.126.46', '2021-05-10 03:05:23', '2021-05-10 03:05:23'),
(357, '74.208.137.179', '2021-05-10 03:05:23', '2021-05-10 03:05:23'),
(358, '202.51.65.7', '2021-05-10 05:29:12', '2021-05-10 05:29:12'),
(359, '66.220.149.33', '2021-05-10 08:29:51', '2021-05-10 08:29:51'),
(360, '27.34.24.119', '2021-05-10 08:33:04', '2021-05-10 08:33:04'),
(361, '110.44.124.175', '2021-05-10 10:46:05', '2021-05-10 10:46:05'),
(362, '35.178.16.1', '2021-05-10 11:52:53', '2021-05-10 11:52:53'),
(363, '54.186.245.126', '2021-05-10 14:15:55', '2021-05-10 14:15:55'),
(364, '18.237.101.99', '2021-05-10 14:33:54', '2021-05-10 14:33:54'),
(365, '69.28.91.196', '2021-05-10 17:50:10', '2021-05-10 17:50:10'),
(366, '34.209.51.100', '2021-05-10 19:38:20', '2021-05-10 19:38:20'),
(367, '139.59.118.132', '2021-05-11 03:49:57', '2021-05-11 03:49:57'),
(368, '185.141.34.136', '2021-05-11 08:48:21', '2021-05-11 08:48:21'),
(369, '52.32.91.127', '2021-05-11 14:27:22', '2021-05-11 14:27:22'),
(370, '110.44.124.142', '2021-05-11 15:56:42', '2021-05-11 15:56:42'),
(371, '77.75.77.72', '2021-05-12 00:03:02', '2021-05-12 00:03:02'),
(372, '124.170.97.184', '2021-05-12 08:47:33', '2021-05-12 08:47:33'),
(373, '82.145.209.117', '2021-05-12 09:18:19', '2021-05-12 09:18:19'),
(374, '110.44.127.177', '2021-05-12 11:18:10', '2021-05-12 11:18:10'),
(375, '192.210.189.226', '2021-05-12 12:41:30', '2021-05-12 12:41:30'),
(376, '52.11.243.27', '2021-05-12 14:22:08', '2021-05-12 14:22:08'),
(377, '34.215.131.125', '2021-05-12 14:31:14', '2021-05-12 14:31:14'),
(378, '27.34.18.203', '2021-05-12 15:40:18', '2021-05-12 15:40:18'),
(379, '92.223.85.25', '2021-05-12 15:56:44', '2021-05-12 15:56:44'),
(380, '184.174.74.196', '2021-05-12 16:17:17', '2021-05-12 16:17:17'),
(381, '92.118.77.10', '2021-05-12 23:09:33', '2021-05-12 23:09:33'),
(382, '52.33.138.96', '2021-05-13 01:23:34', '2021-05-13 01:23:34'),
(383, '49.244.17.219', '2021-05-13 01:29:44', '2021-05-13 01:29:44'),
(384, '110.44.115.251', '2021-05-13 02:18:45', '2021-05-13 02:18:45'),
(385, '103.10.29.86', '2021-05-13 06:06:30', '2021-05-13 06:06:30'),
(386, '206.166.236.47', '2021-05-13 06:48:48', '2021-05-13 06:48:48'),
(387, '49.244.12.255', '2021-05-13 08:00:23', '2021-05-13 08:00:23'),
(388, '110.44.125.130', '2021-05-13 08:17:09', '2021-05-13 08:17:09'),
(389, '65.154.226.165', '2021-05-13 08:20:08', '2021-05-13 08:20:08'),
(390, '93.158.91.203', '2021-05-13 12:14:12', '2021-05-13 12:14:12'),
(391, '198.252.98.10', '2021-05-13 13:28:36', '2021-05-13 13:28:36'),
(392, '27.34.104.188', '2021-05-13 14:10:21', '2021-05-13 14:10:21'),
(393, '100.20.65.33', '2021-05-13 14:17:08', '2021-05-13 14:17:08'),
(394, '35.81.151.67', '2021-05-13 14:17:15', '2021-05-13 14:17:15'),
(395, '35.164.91.55', '2021-05-13 14:18:04', '2021-05-13 14:18:04'),
(396, '40.121.9.184', '2021-05-13 16:30:26', '2021-05-13 16:30:26'),
(397, '5.253.204.7', '2021-05-13 18:07:38', '2021-05-13 18:07:38'),
(398, '191.101.217.170', '2021-05-13 19:28:49', '2021-05-13 19:28:49'),
(399, '176.125.229.134', '2021-05-13 21:30:50', '2021-05-13 21:30:50'),
(400, '110.34.13.2', '2021-05-14 02:24:24', '2021-05-14 02:24:24'),
(401, '202.51.76.42', '2021-05-14 04:52:22', '2021-05-14 04:52:22'),
(402, '202.51.67.9', '2021-05-14 06:11:50', '2021-05-14 06:11:50'),
(403, '101.100.179.4', '2021-05-14 06:12:04', '2021-05-14 06:12:04'),
(404, '77.81.139.37', '2021-05-14 09:33:01', '2021-05-14 09:33:01'),
(405, '185.189.114.115', '2021-05-14 11:58:01', '2021-05-14 11:58:01'),
(406, '88.99.136.18', '2021-05-14 13:13:17', '2021-05-14 13:13:17'),
(407, '120.89.97.132', '2021-05-14 14:55:39', '2021-05-14 14:55:39'),
(408, '95.216.15.49', '2021-05-14 20:47:24', '2021-05-14 20:47:24'),
(409, '176.125.230.138', '2021-05-14 23:13:42', '2021-05-14 23:13:42'),
(410, '3.18.223.27', '2021-05-15 01:56:16', '2021-05-15 01:56:16'),
(411, '3.18.223.27', '2021-05-15 01:56:16', '2021-05-15 01:56:16'),
(412, '192.35.168.160', '2021-05-15 11:49:29', '2021-05-15 11:49:29'),
(413, '192.71.10.105', '2021-05-15 12:06:45', '2021-05-15 12:06:45'),
(414, '54.245.71.216', '2021-05-15 14:21:58', '2021-05-15 14:21:58'),
(415, '74.120.14.55', '2021-05-16 00:06:02', '2021-05-16 00:06:02'),
(416, '110.44.124.140', '2021-05-16 06:03:50', '2021-05-16 06:03:50'),
(417, '110.44.127.181', '2021-05-16 12:34:56', '2021-05-16 12:34:56'),
(418, '120.89.97.69', '2021-05-16 12:35:06', '2021-05-16 12:35:06'),
(419, '34.222.203.28', '2021-05-16 14:05:31', '2021-05-16 14:05:31'),
(420, '54.213.93.28', '2021-05-16 14:12:48', '2021-05-16 14:12:48'),
(421, '110.44.127.164', '2021-05-16 17:24:58', '2021-05-16 17:24:58'),
(422, '134.209.40.201', '2021-05-16 21:39:06', '2021-05-16 21:39:06'),
(423, '192.53.114.24', '2021-05-16 23:50:25', '2021-05-16 23:50:25'),
(424, '138.199.22.177', '2021-05-17 01:42:05', '2021-05-17 01:42:05'),
(425, '69.12.72.188', '2021-05-17 04:30:24', '2021-05-17 04:30:24'),
(426, '18.236.191.197', '2021-05-17 14:27:31', '2021-05-17 14:27:31'),
(427, '69.28.85.149', '2021-05-17 17:03:57', '2021-05-17 17:03:57'),
(428, '111.225.148.249', '2021-05-17 17:06:57', '2021-05-17 17:06:57'),
(429, '27.34.108.95', '2021-05-17 17:50:42', '2021-05-17 17:50:42'),
(430, '77.75.78.167', '2021-05-18 00:17:22', '2021-05-18 00:17:22'),
(431, '110.44.120.34', '2021-05-18 09:35:58', '2021-05-18 09:35:58'),
(432, '34.222.103.147', '2021-05-18 14:24:17', '2021-05-18 14:24:17'),
(433, '54.148.254.91', '2021-05-18 14:34:05', '2021-05-18 14:34:05'),
(434, '20.74.134.151', '2021-05-18 16:39:33', '2021-05-18 16:39:33'),
(435, '34.247.73.63', '2021-05-18 17:11:22', '2021-05-18 17:11:22'),
(436, '110.249.201.88', '2021-05-18 17:17:24', '2021-05-18 17:17:24'),
(437, '13.211.112.43', '2021-05-18 20:05:23', '2021-05-18 20:05:23'),
(438, '61.135.15.142', '2021-05-18 23:07:52', '2021-05-18 23:07:52'),
(439, '103.10.29.119', '2021-05-19 05:12:22', '2021-05-19 05:12:22'),
(440, '88.198.7.165', '2021-05-19 08:08:37', '2021-05-19 08:08:37'),
(441, '66.249.66.4', '2021-05-19 09:10:25', '2021-05-19 09:10:25'),
(442, '66.249.66.21', '2021-05-19 11:51:42', '2021-05-19 11:51:42'),
(443, '66.249.66.8', '2021-05-19 11:52:13', '2021-05-19 11:52:13'),
(444, '103.15.216.130', '2021-05-19 12:57:32', '2021-05-19 12:57:32'),
(445, '54.213.4.20', '2021-05-19 14:18:02', '2021-05-19 14:18:02'),
(446, '54.244.71.101', '2021-05-19 14:18:45', '2021-05-19 14:18:45'),
(447, '45.12.223.133', '2021-05-19 16:27:08', '2021-05-19 16:27:08'),
(448, '51.15.205.3', '2021-05-19 16:47:24', '2021-05-19 16:47:24'),
(449, '66.249.66.6', '2021-05-19 18:44:53', '2021-05-19 18:44:53'),
(450, '3.92.202.187', '2021-05-19 19:07:53', '2021-05-19 19:07:53'),
(451, '66.249.66.19', '2021-05-19 20:49:20', '2021-05-19 20:49:20'),
(452, '81.209.177.145', '2021-05-20 03:36:00', '2021-05-20 03:36:00'),
(453, '208.110.85.70', '2021-05-20 05:21:17', '2021-05-20 05:21:17'),
(454, '188.42.160.39', '2021-05-20 05:45:37', '2021-05-20 05:45:37'),
(455, '34.246.200.106', '2021-05-20 06:00:44', '2021-05-20 06:00:44'),
(456, '66.249.66.23', '2021-05-20 06:02:34', '2021-05-20 06:02:34'),
(457, '110.44.124.135', '2021-05-20 06:17:58', '2021-05-20 06:17:58'),
(458, '34.253.4.209', '2021-05-20 06:26:24', '2021-05-20 06:26:24'),
(459, '51.15.195.246', '2021-05-20 10:12:08', '2021-05-20 10:12:08'),
(460, '63.115.31.130', '2021-05-20 13:31:38', '2021-05-20 13:31:38'),
(461, '67.215.19.196', '2021-05-20 13:31:39', '2021-05-20 13:31:39'),
(462, '54.201.12.210', '2021-05-20 14:15:27', '2021-05-20 14:15:27'),
(463, '34.222.245.108', '2021-05-20 14:17:11', '2021-05-20 14:17:11'),
(464, '185.72.54.199', '2021-05-20 22:23:16', '2021-05-20 22:23:16'),
(465, '198.46.159.37', '2021-05-20 23:09:05', '2021-05-20 23:09:05'),
(466, '159.253.31.111', '2021-05-21 00:52:45', '2021-05-21 00:52:45'),
(467, '27.34.16.218', '2021-05-21 03:40:57', '2021-05-21 03:40:57'),
(468, '173.252.127.33', '2021-05-21 03:41:17', '2021-05-21 03:41:17'),
(469, '173.252.127.38', '2021-05-21 03:41:19', '2021-05-21 03:41:19'),
(470, '202.51.76.66', '2021-05-21 04:13:01', '2021-05-21 04:13:01'),
(471, '110.44.125.131', '2021-05-21 04:29:24', '2021-05-21 04:29:24'),
(472, '3.236.226.222', '2021-05-21 12:27:13', '2021-05-21 12:27:13'),
(473, '212.90.39.68', '2021-05-21 13:00:39', '2021-05-21 13:00:39'),
(474, '54.191.8.200', '2021-05-21 14:25:22', '2021-05-21 14:25:22'),
(475, '35.164.239.73', '2021-05-21 14:25:55', '2021-05-21 14:25:55'),
(476, '64.71.131.243', '2021-05-21 18:40:58', '2021-05-21 18:40:58'),
(477, '52.12.47.91', '2021-05-21 18:56:38', '2021-05-21 18:56:38'),
(478, '52.87.44.246', '2021-05-21 18:59:42', '2021-05-21 18:59:42'),
(479, '162.241.149.172', '2021-05-21 20:21:11', '2021-05-21 20:21:11'),
(480, '173.252.83.5', '2021-05-22 04:39:24', '2021-05-22 04:39:24'),
(481, '13.233.133.154', '2021-05-22 06:29:56', '2021-05-22 06:29:56'),
(482, '173.252.83.4', '2021-05-22 13:35:17', '2021-05-22 13:35:17'),
(483, '173.252.83.16', '2021-05-22 13:35:26', '2021-05-22 13:35:26'),
(484, '54.190.8.98', '2021-05-22 14:02:00', '2021-05-22 14:02:00'),
(485, '35.164.87.39', '2021-05-22 14:02:03', '2021-05-22 14:02:03'),
(486, '3.65.18.69', '2021-05-22 16:53:49', '2021-05-22 16:53:49'),
(487, '173.252.107.15', '2021-05-22 17:01:53', '2021-05-22 17:01:53'),
(488, '27.34.17.182', '2021-05-22 17:24:09', '2021-05-22 17:24:09'),
(489, '173.252.111.24', '2021-05-22 17:24:12', '2021-05-22 17:24:12'),
(490, '173.252.111.21', '2021-05-22 17:24:12', '2021-05-22 17:24:12'),
(491, '173.252.111.2', '2021-05-22 17:24:14', '2021-05-22 17:24:14'),
(492, '173.252.111.4', '2021-05-22 17:24:14', '2021-05-22 17:24:14'),
(493, '173.252.111.3', '2021-05-22 17:24:16', '2021-05-22 17:24:16'),
(494, '95.105.64.123', '2021-05-22 17:42:49', '2021-05-22 17:42:49'),
(495, '52.12.0.177', '2021-05-22 19:59:56', '2021-05-22 19:59:56'),
(496, '31.13.103.6', '2021-05-22 21:37:36', '2021-05-22 21:37:36'),
(497, '31.13.103.10', '2021-05-22 23:58:02', '2021-05-22 23:58:02'),
(498, '86.106.74.244', '2021-05-23 01:56:00', '2021-05-23 01:56:00'),
(499, '173.252.95.3', '2021-05-23 02:09:39', '2021-05-23 02:09:39'),
(500, '110.44.121.54', '2021-05-23 05:59:02', '2021-05-23 05:59:02'),
(501, '103.10.29.118', '2021-05-23 08:05:07', '2021-05-23 08:05:07'),
(502, '173.252.111.117', '2021-05-23 08:30:11', '2021-05-23 08:30:11'),
(503, '45.114.248.68', '2021-05-23 11:44:19', '2021-05-23 11:44:19'),
(504, '173.252.83.3', '2021-05-23 12:55:25', '2021-05-23 12:55:25'),
(505, '61.135.15.143', '2021-05-23 12:56:00', '2021-05-23 12:56:00'),
(506, '18.237.222.181', '2021-05-23 14:08:06', '2021-05-23 14:08:06'),
(507, '18.236.236.232', '2021-05-23 14:08:10', '2021-05-23 14:08:10'),
(508, '34.212.4.193', '2021-05-23 14:22:55', '2021-05-23 14:22:55'),
(509, '69.171.249.7', '2021-05-23 16:04:20', '2021-05-23 16:04:20'),
(510, '34.229.0.154', '2021-05-24 00:31:31', '2021-05-24 00:31:31'),
(511, '69.171.249.19', '2021-05-24 00:50:19', '2021-05-24 00:50:19'),
(512, '168.119.4.44', '2021-05-24 02:50:33', '2021-05-24 02:50:33'),
(513, '173.252.79.19', '2021-05-24 04:49:19', '2021-05-24 04:49:19'),
(514, '35.165.172.96', '2021-05-24 04:51:02', '2021-05-24 04:51:02'),
(515, '173.252.95.8', '2021-05-24 05:29:08', '2021-05-24 05:29:08'),
(516, '66.220.149.16', '2021-05-24 09:13:30', '2021-05-24 09:13:30'),
(517, '69.63.184.2', '2021-05-24 11:29:53', '2021-05-24 11:29:53'),
(518, '103.10.29.100', '2021-05-24 11:57:21', '2021-05-24 11:57:21'),
(519, '54.245.30.149', '2021-05-24 14:11:43', '2021-05-24 14:11:43'),
(520, '52.37.63.146', '2021-05-24 14:12:30', '2021-05-24 14:12:30'),
(521, '34.208.232.154', '2021-05-24 14:13:26', '2021-05-24 14:13:26'),
(522, '34.212.226.153', '2021-05-24 14:28:01', '2021-05-24 14:28:01'),
(523, '110.44.121.50', '2021-05-24 15:10:35', '2021-05-24 15:10:35'),
(524, '27.34.18.165', '2021-05-24 16:11:01', '2021-05-24 16:11:01'),
(525, '49.244.117.17', '2021-05-24 16:24:36', '2021-05-24 16:24:36'),
(526, '69.171.249.24', '2021-05-24 16:37:00', '2021-05-24 16:37:00'),
(527, '69.171.251.5', '2021-05-24 16:40:42', '2021-05-24 16:40:42'),
(528, '60.8.123.249', '2021-05-24 17:01:15', '2021-05-24 17:01:15'),
(529, '124.126.78.191', '2021-05-24 17:59:24', '2021-05-24 17:59:24'),
(530, '66.42.126.164', '2021-05-24 18:17:37', '2021-05-24 18:17:37'),
(531, '173.252.107.10', '2021-05-25 00:34:10', '2021-05-25 00:34:10'),
(532, '111.7.100.20', '2021-05-25 01:41:22', '2021-05-25 01:41:22'),
(533, '111.7.100.21', '2021-05-25 01:41:29', '2021-05-25 01:41:29'),
(534, '173.252.107.1', '2021-05-25 02:40:45', '2021-05-25 02:40:45'),
(535, '103.95.17.15', '2021-05-25 04:11:06', '2021-05-25 04:11:06'),
(536, '66.220.149.118', '2021-05-25 06:47:06', '2021-05-25 06:47:06'),
(537, '104.236.44.95', '2021-05-25 08:06:15', '2021-05-25 08:06:15'),
(538, '173.252.79.119', '2021-05-25 09:46:01', '2021-05-25 09:46:01'),
(539, '173.252.111.113', '2021-05-25 13:55:05', '2021-05-25 13:55:05'),
(540, '34.222.10.155', '2021-05-25 14:35:56', '2021-05-25 14:35:56'),
(541, '34.219.20.0', '2021-05-25 14:35:58', '2021-05-25 14:35:58'),
(542, '27.34.19.56', '2021-05-25 17:22:29', '2021-05-25 17:22:29'),
(543, '173.252.111.118', '2021-05-25 19:38:15', '2021-05-25 19:38:15'),
(544, '44.234.27.226', '2021-05-25 20:29:33', '2021-05-25 20:29:33'),
(545, '162.142.125.55', '2021-05-26 00:06:58', '2021-05-26 00:06:58'),
(546, '84.17.48.6', '2021-05-26 00:08:02', '2021-05-26 00:08:02'),
(547, '173.252.111.11', '2021-05-26 06:46:31', '2021-05-26 06:46:31'),
(548, '173.252.95.6', '2021-05-26 09:51:48', '2021-05-26 09:51:48'),
(549, '66.220.149.1', '2021-05-26 11:21:33', '2021-05-26 11:21:33'),
(550, '54.189.75.51', '2021-05-26 14:30:03', '2021-05-26 14:30:03'),
(551, '35.166.116.72', '2021-05-26 14:30:38', '2021-05-26 14:30:38'),
(552, '54.218.215.178', '2021-05-26 14:31:16', '2021-05-26 14:31:16'),
(553, '54.214.128.192', '2021-05-26 14:31:25', '2021-05-26 14:31:25'),
(554, '34.219.85.26', '2021-05-26 15:19:39', '2021-05-26 15:19:39'),
(555, '192.35.168.144', '2021-05-26 16:43:54', '2021-05-26 16:43:54'),
(556, '110.249.202.168', '2021-05-26 17:13:12', '2021-05-26 17:13:12'),
(557, '69.63.184.116', '2021-05-26 17:54:24', '2021-05-26 17:54:24'),
(558, '173.252.127.29', '2021-05-26 18:09:24', '2021-05-26 18:09:24'),
(559, '159.69.155.251', '2021-05-26 21:04:51', '2021-05-26 21:04:51'),
(560, '173.252.111.19', '2021-05-26 21:22:04', '2021-05-26 21:22:04'),
(561, '93.158.90.137', '2021-05-26 23:41:35', '2021-05-26 23:41:35'),
(562, '173.252.127.18', '2021-05-27 05:19:47', '2021-05-27 05:19:47'),
(563, '110.44.121.17', '2021-05-27 06:15:45', '2021-05-27 06:15:45'),
(564, '23.94.32.147', '2021-05-27 06:31:02', '2021-05-27 06:31:02'),
(565, '127.0.0.1', '2021-05-27 01:30:59', '2021-05-27 01:30:59'),
(566, '49.244.114.212', '2021-05-27 10:52:08', '2021-05-27 10:52:08'),
(567, '43.245.86.24', '2021-05-27 11:52:46', '2021-05-27 11:52:46'),
(568, '34.212.170.228', '2021-05-27 14:08:35', '2021-05-27 14:08:35'),
(569, '52.13.77.169', '2021-05-27 14:10:57', '2021-05-27 14:10:57'),
(570, '34.219.205.147', '2021-05-27 15:40:48', '2021-05-27 15:40:48'),
(571, '52.49.186.119', '2021-05-27 17:30:28', '2021-05-27 17:30:28'),
(572, '165.22.237.86', '2021-05-27 18:44:28', '2021-05-27 18:44:28'),
(573, '96.44.156.194', '2021-05-28 01:34:14', '2021-05-28 01:34:14'),
(574, '103.148.162.14', '2021-05-28 03:48:14', '2021-05-28 03:48:14'),
(575, '84.17.62.141', '2021-05-28 08:15:35', '2021-05-28 08:15:35'),
(576, '34.82.19.17', '2021-05-28 10:16:11', '2021-05-28 10:16:11'),
(577, '104.196.224.110', '2021-05-28 10:16:13', '2021-05-28 10:16:13'),
(578, '35.199.162.145', '2021-05-28 10:16:20', '2021-05-28 10:16:20'),
(579, '54.184.75.117', '2021-05-28 14:10:09', '2021-05-28 14:10:09'),
(580, '94.152.53.164', '2021-05-28 18:13:04', '2021-05-28 18:13:04'),
(581, '103.143.77.179', '2021-05-28 21:13:15', '2021-05-28 21:13:15'),
(582, '216.18.204.216', '2021-05-29 01:14:37', '2021-05-29 01:14:37'),
(583, '3.15.177.252', '2021-05-29 02:02:49', '2021-05-29 02:02:49'),
(584, '3.15.177.252', '2021-05-29 02:02:49', '2021-05-29 02:02:49'),
(585, '192.99.18.136', '2021-05-29 07:52:44', '2021-05-29 07:52:44'),
(586, '67.55.66.180', '2021-05-29 13:37:12', '2021-05-29 13:37:12'),
(587, '34.220.15.113', '2021-05-29 14:42:57', '2021-05-29 14:42:57'),
(588, '43.245.86.5', '2021-05-29 15:41:43', '2021-05-29 15:41:43'),
(589, '23.98.149.218', '2021-05-29 17:01:34', '2021-05-29 17:01:34'),
(590, '49.244.106.204', '2021-05-29 19:42:32', '2021-05-29 19:42:32'),
(591, '205.169.39.31', '2021-05-29 20:47:22', '2021-05-29 20:47:22'),
(592, '31.13.115.118', '2021-05-30 10:53:51', '2021-05-30 10:53:51'),
(593, '27.34.19.198', '2021-05-30 11:34:40', '2021-05-30 11:34:40'),
(594, '202.51.76.205', '2021-05-30 12:21:47', '2021-05-30 12:21:47'),
(595, '5.149.250.222', '2021-05-30 12:23:06', '2021-05-30 12:23:06'),
(596, '110.44.121.19', '2021-05-30 15:35:04', '2021-05-30 15:35:04'),
(597, '52.12.30.86', '2021-05-30 18:37:50', '2021-05-30 18:37:50'),
(598, '52.10.47.221', '2021-05-30 18:38:14', '2021-05-30 18:38:14'),
(599, '54.190.47.178', '2021-05-31 04:49:47', '2021-05-31 04:49:47'),
(600, '104.131.56.107', '2021-05-31 08:36:20', '2021-05-31 08:36:20'),
(601, '49.244.112.55', '2021-05-31 08:57:42', '2021-05-31 08:57:42'),
(602, '66.220.149.44', '2021-05-31 10:17:54', '2021-05-31 10:17:54'),
(603, '110.44.124.132', '2021-05-31 12:26:08', '2021-05-31 12:26:08'),
(604, '49.244.111.191', '2021-05-31 13:57:18', '2021-05-31 13:57:18'),
(605, '49.244.72.198', '2021-05-31 13:57:24', '2021-05-31 13:57:24'),
(606, '35.161.251.164', '2021-05-31 14:56:19', '2021-05-31 14:56:19'),
(607, '34.217.34.27', '2021-05-31 15:07:35', '2021-05-31 15:07:35'),
(608, '52.34.88.13', '2021-05-31 15:12:15', '2021-05-31 15:12:15'),
(609, '68.3.78.181', '2021-05-31 18:29:32', '2021-05-31 18:29:32'),
(610, '162.213.38.159', '2021-05-31 18:42:26', '2021-05-31 18:42:26'),
(611, '74.120.14.54', '2021-06-01 00:05:18', '2021-06-01 00:05:18'),
(612, '47.243.87.221', '2021-06-01 01:23:24', '2021-06-01 01:23:24'),
(613, '217.12.221.2', '2021-06-01 03:17:36', '2021-06-01 03:17:36'),
(614, '110.44.121.53', '2021-06-01 07:17:47', '2021-06-01 07:17:47'),
(615, '49.244.108.223', '2021-06-01 07:44:07', '2021-06-01 07:44:07'),
(616, '27.34.17.229', '2021-06-01 07:55:27', '2021-06-01 07:55:27'),
(617, '110.44.124.134', '2021-06-01 08:57:11', '2021-06-01 08:57:11'),
(618, '65.155.30.101', '2021-06-01 13:13:51', '2021-06-01 13:13:51'),
(619, '18.237.148.160', '2021-06-01 14:17:12', '2021-06-01 14:17:12'),
(620, '35.222.239.214', '2021-06-01 19:32:49', '2021-06-01 19:32:49'),
(621, '138.197.99.111', '2021-06-02 01:33:35', '2021-06-02 01:33:35'),
(622, '49.244.119.170', '2021-06-02 07:20:35', '2021-06-02 07:20:35'),
(623, '72.13.46.5', '2021-06-02 13:38:31', '2021-06-02 13:38:31'),
(624, '34.220.13.221', '2021-06-02 14:12:44', '2021-06-02 14:12:44'),
(625, '34.221.249.242', '2021-06-02 14:14:45', '2021-06-02 14:14:45'),
(626, '54.201.170.245', '2021-06-02 14:20:28', '2021-06-02 14:20:28'),
(627, '192.157.56.98', '2021-06-02 15:21:16', '2021-06-02 15:21:16'),
(628, '27.34.17.138', '2021-06-02 15:49:45', '2021-06-02 15:49:45'),
(629, '173.252.95.10', '2021-06-02 17:29:55', '2021-06-02 17:29:55'),
(630, '173.252.127.17', '2021-06-02 17:51:00', '2021-06-02 17:51:00'),
(631, '205.169.39.32', '2021-06-02 19:36:57', '2021-06-02 19:36:57'),
(632, '111.225.148.79', '2021-06-02 19:57:22', '2021-06-02 19:57:22'),
(633, '110.249.201.174', '2021-06-02 19:57:45', '2021-06-02 19:57:45'),
(634, '66.220.149.29', '2021-06-03 01:55:52', '2021-06-03 01:55:52'),
(635, '66.220.149.43', '2021-06-03 01:55:52', '2021-06-03 01:55:52'),
(636, '69.171.249.11', '2021-06-03 02:31:13', '2021-06-03 02:31:13'),
(637, '69.171.249.3', '2021-06-03 02:31:13', '2021-06-03 02:31:13'),
(638, '49.244.119.255', '2021-06-03 06:22:47', '2021-06-03 06:22:47'),
(639, '110.44.125.190', '2021-06-03 07:23:39', '2021-06-03 07:23:39'),
(640, '69.171.251.4', '2021-06-03 11:52:21', '2021-06-03 11:52:21'),
(641, '193.189.100.194', '2021-06-03 11:59:40', '2021-06-03 11:59:40'),
(642, '179.43.160.238', '2021-06-03 12:00:30', '2021-06-03 12:00:30'),
(643, '54.202.206.157', '2021-06-03 14:04:48', '2021-06-03 14:04:48'),
(644, '35.165.180.31', '2021-06-03 14:05:54', '2021-06-03 14:05:54'),
(645, '35.163.253.56', '2021-06-03 14:06:03', '2021-06-03 14:06:03'),
(646, '161.35.184.6', '2021-06-03 17:55:17', '2021-06-03 17:55:17'),
(647, '159.65.185.108', '2021-06-03 18:55:18', '2021-06-03 18:55:18'),
(648, '134.209.97.185', '2021-06-03 21:44:33', '2021-06-03 21:44:33'),
(649, '173.252.111.116', '2021-06-04 04:05:49', '2021-06-04 04:05:49'),
(650, '173.252.111.119', '2021-06-04 04:05:49', '2021-06-04 04:05:49'),
(651, '173.252.87.17', '2021-06-04 04:06:01', '2021-06-04 04:06:01'),
(652, '173.252.87.120', '2021-06-04 04:06:01', '2021-06-04 04:06:01'),
(653, '173.252.87.5', '2021-06-04 05:49:19', '2021-06-04 05:49:19'),
(654, '137.74.27.104', '2021-06-04 06:09:10', '2021-06-04 06:09:10'),
(655, '34.217.80.76', '2021-06-04 09:01:05', '2021-06-04 09:01:05'),
(656, '185.86.93.63', '2021-06-04 09:50:51', '2021-06-04 09:50:51'),
(657, '27.34.24.113', '2021-06-04 09:53:26', '2021-06-04 09:53:26'),
(658, '173.252.83.23', '2021-06-04 13:55:08', '2021-06-04 13:55:08'),
(659, '110.44.121.56', '2021-06-04 16:36:44', '2021-06-04 16:36:44'),
(660, '54.189.230.128', '2021-06-04 16:38:30', '2021-06-04 16:38:30'),
(661, '66.249.70.71', '2021-06-04 22:36:04', '2021-06-04 22:36:04'),
(662, '109.102.111.20', '2021-06-04 23:21:18', '2021-06-04 23:21:18'),
(663, '66.249.70.69', '2021-06-05 00:03:44', '2021-06-05 00:03:44'),
(664, '54.154.182.172', '2021-06-05 00:40:05', '2021-06-05 00:40:05'),
(665, '3.137.163.219', '2021-06-05 02:09:00', '2021-06-05 02:09:00'),
(666, '3.137.163.219', '2021-06-05 02:09:00', '2021-06-05 02:09:00'),
(667, '66.249.64.166', '2021-06-05 02:22:47', '2021-06-05 02:22:47'),
(668, '59.175.144.19', '2021-06-05 04:52:43', '2021-06-05 04:52:43'),
(669, '106.53.82.40', '2021-06-05 06:47:19', '2021-06-05 06:47:19'),
(670, '27.34.19.182', '2021-06-05 08:37:28', '2021-06-05 08:37:28'),
(671, '173.252.83.18', '2021-06-05 08:55:55', '2021-06-05 08:55:55'),
(672, '77.75.76.171', '2021-06-05 11:04:54', '2021-06-05 11:04:54'),
(673, '31.13.103.7', '2021-06-05 18:27:35', '2021-06-05 18:27:35'),
(674, '52.137.70.25', '2021-06-06 00:16:22', '2021-06-06 00:16:22'),
(675, '110.44.121.55', '2021-06-06 04:30:25', '2021-06-06 04:30:25'),
(676, '137.120.0.73', '2021-06-06 05:55:30', '2021-06-06 05:55:30'),
(677, '110.44.125.149', '2021-06-06 06:05:45', '2021-06-06 06:05:45'),
(678, '69.63.184.113', '2021-06-06 06:16:48', '2021-06-06 06:16:48'),
(679, '156.146.63.145', '2021-06-06 10:15:25', '2021-06-06 10:15:25'),
(680, '199.127.56.236', '2021-06-06 11:46:23', '2021-06-06 11:46:23'),
(681, '173.252.79.36', '2021-06-06 12:28:45', '2021-06-06 12:28:45'),
(682, '173.252.79.26', '2021-06-06 13:46:32', '2021-06-06 13:46:32'),
(683, '173.252.127.24', '2021-06-06 14:25:43', '2021-06-06 14:25:43'),
(684, '37.57.218.243', '2021-06-06 21:24:25', '2021-06-06 21:24:25'),
(685, '159.65.165.196', '2021-06-06 22:12:50', '2021-06-06 22:12:50'),
(686, '178.159.37.157', '2021-06-07 00:34:33', '2021-06-07 00:34:33'),
(687, '52.89.31.132', '2021-06-07 04:42:20', '2021-06-07 04:42:20'),
(688, '34.221.131.152', '2021-06-07 04:48:54', '2021-06-07 04:48:54'),
(689, '110.44.121.1', '2021-06-07 09:20:56', '2021-06-07 09:20:56'),
(690, '103.10.29.79', '2021-06-07 10:25:35', '2021-06-07 10:25:35'),
(691, '49.244.98.141', '2021-06-07 11:46:21', '2021-06-07 11:46:21'),
(692, '110.44.115.232', '2021-06-07 12:12:50', '2021-06-07 12:12:50'),
(693, '27.34.16.168', '2021-06-07 12:52:24', '2021-06-07 12:52:24'),
(694, '42.83.147.35', '2021-06-07 13:40:23', '2021-06-07 13:40:23'),
(695, '173.252.111.8', '2021-06-07 13:47:01', '2021-06-07 13:47:01'),
(696, '54.201.137.160', '2021-06-07 14:07:46', '2021-06-07 14:07:46'),
(697, '34.212.150.251', '2021-06-07 14:08:17', '2021-06-07 14:08:17'),
(698, '34.211.149.251', '2021-06-07 14:09:28', '2021-06-07 14:09:28'),
(699, '34.210.121.81', '2021-06-07 14:54:57', '2021-06-07 14:54:57'),
(700, '69.87.219.220', '2021-06-07 19:45:58', '2021-06-07 19:45:58'),
(701, '77.88.5.110', '2021-06-07 21:21:40', '2021-06-07 21:21:40'),
(702, '77.88.5.122', '2021-06-07 21:30:15', '2021-06-07 21:30:15'),
(703, '54.155.191.4', '2021-06-08 01:33:25', '2021-06-08 01:33:25'),
(704, '103.107.198.237', '2021-06-08 02:14:07', '2021-06-08 02:14:07'),
(705, '103.10.29.76', '2021-06-08 04:49:06', '2021-06-08 04:49:06'),
(706, '49.244.103.217', '2021-06-08 06:07:13', '2021-06-08 06:07:13'),
(707, '167.99.127.156', '2021-06-08 07:10:31', '2021-06-08 07:10:31'),
(708, '173.252.95.34', '2021-06-08 10:14:48', '2021-06-08 10:14:48'),
(709, '69.171.249.120', '2021-06-08 12:19:03', '2021-06-08 12:19:03'),
(710, '163.53.24.37', '2021-06-08 14:01:26', '2021-06-08 14:01:26'),
(711, '34.219.244.35', '2021-06-08 14:11:12', '2021-06-08 14:11:12'),
(712, '54.202.94.83', '2021-06-08 14:15:08', '2021-06-08 14:15:08'),
(713, '173.252.83.117', '2021-06-08 14:21:12', '2021-06-08 14:21:12'),
(714, '110.44.121.6', '2021-06-08 14:26:09', '2021-06-08 14:26:09'),
(715, '35.164.153.80', '2021-06-08 15:19:13', '2021-06-08 15:19:13'),
(716, '18.144.26.243', '2021-06-08 20:10:48', '2021-06-08 20:10:48'),
(717, '173.252.107.2', '2021-06-08 23:20:04', '2021-06-08 23:20:04'),
(718, '74.120.14.56', '2021-06-09 00:06:33', '2021-06-09 00:06:33'),
(719, '5.45.207.190', '2021-06-09 01:33:04', '2021-06-09 01:33:04'),
(720, '5.255.253.102', '2021-06-09 01:33:04', '2021-06-09 01:33:04'),
(721, '66.220.149.20', '2021-06-09 02:02:38', '2021-06-09 02:02:38'),
(722, '69.171.249.15', '2021-06-09 08:00:59', '2021-06-09 08:00:59'),
(723, '66.220.149.37', '2021-06-09 12:39:01', '2021-06-09 12:39:01'),
(724, '173.252.95.28', '2021-06-09 12:39:01', '2021-06-09 12:39:01'),
(725, '66.220.149.53', '2021-06-09 12:39:12', '2021-06-09 12:39:12'),
(726, '173.252.95.9', '2021-06-09 12:39:12', '2021-06-09 12:39:12'),
(727, '34.219.180.109', '2021-06-09 14:10:09', '2021-06-09 14:10:09'),
(728, '54.213.105.187', '2021-06-09 14:11:12', '2021-06-09 14:11:12'),
(729, '54.189.143.27', '2021-06-09 14:13:40', '2021-06-09 14:13:40'),
(730, '49.244.107.81', '2021-06-09 14:59:30', '2021-06-09 14:59:30'),
(731, '49.244.104.59', '2021-06-09 16:16:54', '2021-06-09 16:16:54'),
(732, '167.71.107.82', '2021-06-09 17:08:03', '2021-06-09 17:08:03'),
(733, '46.4.120.42', '2021-06-09 17:46:34', '2021-06-09 17:46:34'),
(734, '193.46.254.155', '2021-06-09 18:12:51', '2021-06-09 18:12:51'),
(735, '202.51.80.90', '2021-06-10 02:00:59', '2021-06-10 02:00:59'),
(736, '54.78.130.206', '2021-06-10 02:32:09', '2021-06-10 02:32:09');
INSERT INTO `user_ips` (`id`, `ip`, `created_at`, `updated_at`) VALUES
(737, '110.44.120.41', '2021-06-10 08:33:02', '2021-06-10 08:33:02'),
(738, '218.31.195.30', '2021-06-10 11:29:33', '2021-06-10 11:29:33'),
(739, '34.244.117.51', '2021-06-10 12:35:15', '2021-06-10 12:35:15'),
(740, '173.211.77.183', '2021-06-10 13:04:31', '2021-06-10 13:04:31'),
(741, '34.222.60.240', '2021-06-10 14:15:09', '2021-06-10 14:15:09'),
(742, '60.8.123.160', '2021-06-10 17:16:33', '2021-06-10 17:16:33'),
(743, '220.243.136.146', '2021-06-10 17:26:35', '2021-06-10 17:26:35'),
(744, '18.117.108.23', '2021-06-11 04:31:09', '2021-06-11 04:31:09'),
(745, '54.246.18.151', '2021-06-11 08:12:27', '2021-06-11 08:12:27'),
(746, '61.135.15.138', '2021-06-11 12:15:53', '2021-06-11 12:15:53'),
(747, '54.212.18.89', '2021-06-11 14:34:34', '2021-06-11 14:34:34'),
(748, '64.124.51.154', '2021-06-11 18:11:24', '2021-06-11 18:11:24'),
(749, '34.242.142.38', '2021-06-12 02:10:29', '2021-06-12 02:10:29'),
(750, '86.106.74.245', '2021-06-12 03:03:54', '2021-06-12 03:03:54'),
(751, '27.34.24.170', '2021-06-12 11:54:45', '2021-06-12 11:54:45'),
(752, '54.244.43.7', '2021-06-12 14:37:39', '2021-06-12 14:37:39'),
(753, '34.221.79.155', '2021-06-12 14:42:09', '2021-06-12 14:42:09'),
(754, '34.220.177.194', '2021-06-12 14:55:54', '2021-06-12 14:55:54'),
(755, '54.189.197.34', '2021-06-12 14:56:32', '2021-06-12 14:56:32'),
(756, '54.202.62.26', '2021-06-12 15:02:39', '2021-06-12 15:02:39'),
(757, '43.245.94.89', '2021-06-12 15:14:25', '2021-06-12 15:14:25'),
(758, '154.54.249.17', '2021-06-12 15:20:52', '2021-06-12 15:20:52'),
(759, '176.103.17.169', '2021-06-12 18:22:17', '2021-06-12 18:22:17'),
(760, '20.88.20.172', '2021-06-12 20:27:15', '2021-06-12 20:27:15'),
(761, '189.60.66.95', '2021-06-12 21:14:42', '2021-06-12 21:14:42'),
(762, '104.149.118.229', '2021-06-12 21:26:41', '2021-06-12 21:26:41'),
(763, '175.143.192.226', '2021-06-13 00:14:31', '2021-06-13 00:14:31'),
(764, '34.219.161.184', '2021-06-13 00:31:40', '2021-06-13 00:31:40'),
(765, '35.162.122.91', '2021-06-13 00:32:24', '2021-06-13 00:32:24'),
(766, '107.158.202.88', '2021-06-13 02:44:49', '2021-06-13 02:44:49'),
(767, '191.101.31.242', '2021-06-13 05:22:36', '2021-06-13 05:22:36'),
(768, '37.228.248.194', '2021-06-13 10:21:59', '2021-06-13 10:21:59'),
(769, '51.210.219.11', '2021-06-13 10:56:17', '2021-06-13 10:56:17'),
(770, '54.200.240.84', '2021-06-13 14:32:55', '2021-06-13 14:32:55'),
(771, '93.158.91.242', '2021-06-13 15:23:26', '2021-06-13 15:23:26'),
(772, '18.224.20.13', '2021-06-13 21:44:08', '2021-06-13 21:44:08'),
(773, '35.161.227.100', '2021-06-14 04:45:00', '2021-06-14 04:45:00'),
(774, '27.34.17.204', '2021-06-14 06:03:32', '2021-06-14 06:03:32'),
(775, '85.255.232.202', '2021-06-14 06:58:49', '2021-06-14 06:58:49'),
(776, '3.18.105.116', '2021-06-14 08:12:49', '2021-06-14 08:12:49'),
(777, '49.244.105.12', '2021-06-14 09:59:29', '2021-06-14 09:59:29'),
(778, '5.255.231.124', '2021-06-14 10:21:17', '2021-06-14 10:21:17'),
(779, '141.8.142.93', '2021-06-14 10:21:19', '2021-06-14 10:21:19'),
(780, '185.12.4.102', '2021-06-14 19:46:40', '2021-06-14 19:46:40'),
(781, '5.255.253.100', '2021-06-14 21:51:37', '2021-06-14 21:51:37'),
(782, '52.211.223.209', '2021-06-14 23:43:46', '2021-06-14 23:43:46'),
(783, '31.13.115.6', '2021-06-15 01:00:22', '2021-06-15 01:00:22'),
(784, '31.13.115.11', '2021-06-15 01:00:22', '2021-06-15 01:00:22'),
(785, '191.5.103.109', '2021-06-15 08:42:35', '2021-06-15 08:42:35'),
(786, '185.234.231.228', '2021-06-15 12:12:45', '2021-06-15 12:12:45'),
(787, '54.234.149.84', '2021-06-15 13:13:38', '2021-06-15 13:13:38'),
(788, '54.200.161.123', '2021-06-15 14:14:40', '2021-06-15 14:14:40'),
(789, '54.183.227.217', '2021-06-15 15:48:12', '2021-06-15 15:48:12'),
(790, '13.57.195.200', '2021-06-15 15:48:20', '2021-06-15 15:48:20'),
(791, '54.177.71.233', '2021-06-15 15:48:21', '2021-06-15 15:48:21'),
(792, '49.244.114.255', '2021-06-15 16:10:42', '2021-06-15 16:10:42'),
(793, '81.233.111.196', '2021-06-15 16:17:36', '2021-06-15 16:17:36'),
(794, '161.35.80.108', '2021-06-15 16:31:04', '2021-06-15 16:31:04'),
(795, '172.245.208.151', '2021-06-15 19:37:52', '2021-06-15 19:37:52'),
(796, '37.120.152.109', '2021-06-15 20:14:17', '2021-06-15 20:14:17'),
(797, '202.51.76.52', '2021-06-16 05:38:28', '2021-06-16 05:38:28'),
(798, '27.34.108.220', '2021-06-16 07:38:47', '2021-06-16 07:38:47'),
(799, '52.41.215.203', '2021-06-16 14:25:33', '2021-06-16 14:25:33'),
(800, '77.75.78.165', '2021-06-16 16:58:46', '2021-06-16 16:58:46'),
(801, '162.142.125.53', '2021-06-17 00:06:26', '2021-06-17 00:06:26'),
(802, '18.130.62.123', '2021-06-17 06:52:40', '2021-06-17 06:52:40'),
(803, '110.44.120.42', '2021-06-18 04:39:38', '2021-06-18 04:39:38'),
(804, '40.122.184.189', '2021-06-18 05:41:35', '2021-06-18 05:41:35'),
(805, '20.102.50.44', '2021-06-18 05:55:47', '2021-06-18 05:55:47'),
(806, '52.42.148.81', '2021-06-18 14:34:12', '2021-06-18 14:34:12'),
(807, '34.223.219.186', '2021-06-18 14:34:29', '2021-06-18 14:34:29'),
(808, '34.212.149.211', '2021-06-18 14:49:02', '2021-06-18 14:49:02'),
(809, '185.88.100.224', '2021-06-18 18:53:48', '2021-06-18 18:53:48'),
(810, '18.118.135.11', '2021-06-19 02:15:51', '2021-06-19 02:15:51'),
(811, '18.118.135.11', '2021-06-19 02:15:51', '2021-06-19 02:15:51'),
(812, '34.214.159.3', '2021-06-19 14:11:53', '2021-06-19 14:11:53'),
(813, '34.240.102.117', '2021-06-19 22:45:00', '2021-06-19 22:45:00'),
(814, '54.194.243.233', '2021-06-20 00:02:23', '2021-06-20 00:02:23'),
(815, '13.82.199.198', '2021-06-20 04:20:21', '2021-06-20 04:20:21'),
(816, '195.154.200.100', '2021-06-20 07:39:07', '2021-06-20 07:39:07'),
(817, '141.101.149.26', '2021-06-20 08:08:38', '2021-06-20 08:08:38'),
(818, '182.93.68.190', '2021-06-20 08:20:15', '2021-06-20 08:20:15'),
(819, '159.65.101.15', '2021-06-20 11:30:45', '2021-06-20 11:30:45'),
(820, '35.161.169.182', '2021-06-20 14:48:55', '2021-06-20 14:48:55'),
(821, '35.162.21.135', '2021-06-20 14:53:58', '2021-06-20 14:53:58'),
(822, '34.209.172.160', '2021-06-20 15:03:55', '2021-06-20 15:03:55'),
(823, '110.249.201.64', '2021-06-20 17:12:31', '2021-06-20 17:12:31'),
(824, '110.249.201.81', '2021-06-20 17:22:36', '2021-06-20 17:22:36'),
(825, '35.172.121.120', '2021-06-20 19:20:04', '2021-06-20 19:20:04'),
(826, '185.106.215.68', '2021-06-21 00:30:30', '2021-06-21 00:30:30'),
(827, '20.51.234.55', '2021-06-21 02:27:22', '2021-06-21 02:27:22'),
(828, '204.12.197.234', '2021-06-21 03:36:57', '2021-06-21 03:36:57'),
(829, '34.222.88.136', '2021-06-21 04:42:30', '2021-06-21 04:42:30'),
(830, '124.41.193.42', '2021-06-21 07:17:47', '2021-06-21 07:17:47'),
(831, '34.71.20.225', '2021-06-21 12:56:16', '2021-06-21 12:56:16'),
(832, '66.249.88.178', '2021-06-21 14:46:04', '2021-06-21 14:46:04'),
(833, '66.249.92.30', '2021-06-21 15:23:47', '2021-06-21 15:23:47'),
(834, '66.249.92.2', '2021-06-21 15:36:25', '2021-06-21 15:36:25'),
(835, '207.46.13.151', '2021-06-21 15:50:32', '2021-06-21 15:50:32'),
(836, '69.87.219.131', '2021-06-21 18:35:48', '2021-06-21 18:35:48'),
(837, '5.255.253.82', '2021-06-21 21:15:04', '2021-06-21 21:15:04'),
(838, '128.199.149.190', '2021-06-21 23:33:23', '2021-06-21 23:33:23'),
(839, '58.53.128.234', '2021-06-22 05:09:16', '2021-06-22 05:09:16'),
(840, '13.82.145.55', '2021-06-22 05:55:58', '2021-06-22 05:55:58'),
(841, '202.63.242.180', '2021-06-22 06:47:14', '2021-06-22 06:47:14'),
(842, '110.44.121.12', '2021-06-22 07:16:28', '2021-06-22 07:16:28'),
(843, '185.253.162.138', '2021-06-22 14:10:45', '2021-06-22 14:10:45'),
(844, '34.214.39.248', '2021-06-22 14:24:07', '2021-06-22 14:24:07'),
(845, '18.236.129.94', '2021-06-22 14:24:09', '2021-06-22 14:24:09'),
(846, '52.33.90.47', '2021-06-22 14:35:00', '2021-06-22 14:35:00'),
(847, '54.213.93.228', '2021-06-22 14:44:49', '2021-06-22 14:44:49'),
(848, '162.252.80.135', '2021-06-22 18:08:37', '2021-06-22 18:08:37'),
(849, '144.126.139.251', '2021-06-22 20:52:39', '2021-06-22 20:52:39'),
(850, '213.180.203.80', '2021-06-22 22:58:37', '2021-06-22 22:58:37'),
(851, '5.255.253.120', '2021-06-22 22:58:37', '2021-06-22 22:58:37'),
(852, '185.86.93.9', '2021-06-23 02:10:13', '2021-06-23 02:10:13'),
(853, '116.233.74.158', '2021-06-23 08:24:36', '2021-06-23 08:24:36'),
(854, '110.44.120.18', '2021-06-23 10:02:46', '2021-06-23 10:02:46'),
(855, '110.44.120.18', '2021-06-23 10:02:46', '2021-06-23 10:02:46'),
(856, '103.10.29.90', '2021-06-23 10:44:41', '2021-06-23 10:44:41'),
(857, '136.244.97.1', '2021-06-23 10:44:59', '2021-06-23 10:44:59'),
(858, '137.59.155.130', '2021-06-23 13:04:56', '2021-06-23 13:04:56'),
(859, '54.214.217.62', '2021-06-23 14:28:57', '2021-06-23 14:28:57'),
(860, '90.49.235.244', '2021-06-23 21:22:56', '2021-06-23 21:22:56'),
(861, '161.97.100.57', '2021-06-24 03:49:11', '2021-06-24 03:49:11'),
(862, '103.58.145.226', '2021-06-24 04:31:45', '2021-06-24 04:31:45'),
(863, '110.44.124.141', '2021-06-24 12:12:14', '2021-06-24 12:12:14'),
(864, '34.215.239.12', '2021-06-24 14:07:29', '2021-06-24 14:07:29'),
(865, '34.222.170.223', '2021-06-24 14:11:56', '2021-06-24 14:11:56'),
(866, '180.251.136.31', '2021-06-24 14:26:16', '2021-06-24 14:26:16'),
(867, '180.251.135.177', '2021-06-24 14:49:46', '2021-06-24 14:49:46'),
(868, '217.145.83.174', '2021-06-24 15:47:26', '2021-06-24 15:47:26'),
(869, '104.160.9.183', '2021-06-24 16:40:39', '2021-06-24 16:40:39'),
(870, '45.125.245.113', '2021-06-24 16:40:40', '2021-06-24 16:40:40'),
(871, '37.72.186.162', '2021-06-24 16:40:59', '2021-06-24 16:40:59'),
(872, '212.47.253.157', '2021-06-24 22:07:13', '2021-06-24 22:07:13'),
(873, '88.230.144.200', '2021-06-24 23:07:16', '2021-06-24 23:07:16'),
(874, '178.16.129.26', '2021-06-24 23:21:31', '2021-06-24 23:21:31'),
(875, '5.181.235.71', '2021-06-25 02:29:23', '2021-06-25 02:29:23'),
(876, '180.251.135.199', '2021-06-25 06:54:55', '2021-06-25 06:54:55'),
(877, '113.199.238.216', '2021-06-25 09:47:23', '2021-06-25 09:47:23'),
(878, '35.160.211.230', '2021-06-25 14:49:18', '2021-06-25 14:49:18'),
(879, '35.163.55.133', '2021-06-25 20:54:04', '2021-06-25 20:54:04'),
(880, '100.21.218.158', '2021-06-25 23:15:25', '2021-06-25 23:15:25'),
(881, '138.68.180.18', '2021-06-26 00:12:47', '2021-06-26 00:12:47'),
(882, '162.55.214.24', '2021-06-26 02:26:02', '2021-06-26 02:26:02'),
(883, '178.16.129.69', '2021-06-26 06:38:10', '2021-06-26 06:38:10'),
(884, '54.212.152.249', '2021-06-26 14:19:15', '2021-06-26 14:19:15'),
(885, '34.222.133.255', '2021-06-26 14:19:56', '2021-06-26 14:19:56'),
(886, '66.249.64.201', '2021-06-26 14:49:41', '2021-06-26 14:49:41'),
(887, '66.249.64.196', '2021-06-26 14:51:21', '2021-06-26 14:51:21'),
(888, '66.249.64.104', '2021-06-26 15:27:02', '2021-06-26 15:27:02'),
(889, '50.81.108.231', '2021-06-26 16:03:46', '2021-06-26 16:03:46'),
(890, '20.191.45.212', '2021-06-26 17:03:34', '2021-06-26 17:03:34'),
(891, '23.179.32.108', '2021-06-26 17:34:48', '2021-06-26 17:34:48'),
(892, '178.16.129.71', '2021-06-26 17:54:52', '2021-06-26 17:54:52'),
(893, '66.249.64.106', '2021-06-26 18:17:36', '2021-06-26 18:17:36'),
(894, '80.70.23.200', '2021-06-26 21:10:33', '2021-06-26 21:10:33'),
(895, '79.112.161.107', '2021-06-27 10:13:43', '2021-06-27 10:13:43'),
(896, '54.202.240.196', '2021-06-27 14:28:42', '2021-06-27 14:28:42'),
(897, '54.70.22.102', '2021-06-27 14:31:55', '2021-06-27 14:31:55'),
(898, '54.244.217.13', '2021-06-27 14:43:07', '2021-06-27 14:43:07'),
(899, '94.130.51.104', '2021-06-27 15:08:27', '2021-06-27 15:08:27'),
(900, '5.45.207.97', '2021-06-27 17:50:25', '2021-06-27 17:50:25'),
(901, '113.199.236.2', '2021-06-27 18:04:09', '2021-06-27 18:04:09'),
(902, '3.239.221.46', '2021-06-28 00:22:08', '2021-06-28 00:22:08'),
(903, '40.88.21.235', '2021-06-28 01:47:07', '2021-06-28 01:47:07'),
(904, '34.221.50.180', '2021-06-28 04:41:49', '2021-06-28 04:41:49'),
(905, '27.34.48.211', '2021-06-28 05:11:10', '2021-06-28 05:11:10'),
(906, '120.89.97.71', '2021-06-28 05:11:14', '2021-06-28 05:11:14'),
(907, '122.254.81.94', '2021-06-28 05:34:48', '2021-06-28 05:34:48'),
(908, '195.181.161.13', '2021-06-28 06:56:26', '2021-06-28 06:56:26'),
(909, '34.217.176.162', '2021-06-28 14:11:14', '2021-06-28 14:11:14'),
(910, '54.202.77.190', '2021-06-28 14:13:22', '2021-06-28 14:13:22'),
(911, '52.13.34.31', '2021-06-28 14:18:55', '2021-06-28 14:18:55'),
(912, '66.249.66.7', '2021-06-28 16:34:02', '2021-06-28 16:34:02'),
(913, '110.249.201.61', '2021-06-28 17:01:07', '2021-06-28 17:01:07'),
(914, '110.249.201.4', '2021-06-28 17:01:32', '2021-06-28 17:01:32'),
(915, '162.213.38.161', '2021-06-28 18:17:54', '2021-06-28 18:17:54'),
(916, '107.172.99.230', '2021-06-28 20:13:40', '2021-06-28 20:13:40'),
(917, '5.255.231.194', '2021-06-28 21:00:20', '2021-06-28 21:00:20'),
(918, '76.72.172.164', '2021-06-29 02:46:48', '2021-06-29 02:46:48'),
(919, '66.220.149.7', '2021-06-29 04:37:22', '2021-06-29 04:37:22'),
(920, '66.220.149.50', '2021-06-29 04:37:22', '2021-06-29 04:37:22'),
(921, '110.44.121.5', '2021-06-29 04:40:51', '2021-06-29 04:40:51'),
(922, '43.245.86.14', '2021-06-29 09:09:05', '2021-06-29 09:09:05'),
(923, '103.10.28.178', '2021-06-29 10:30:45', '2021-06-29 10:30:45'),
(924, '122.254.20.202', '2021-06-29 11:51:50', '2021-06-29 11:51:50'),
(925, '54.149.159.171', '2021-06-29 14:43:01', '2021-06-29 14:43:01'),
(926, '54.212.141.34', '2021-06-29 14:45:29', '2021-06-29 14:45:29'),
(927, '35.166.13.42', '2021-06-29 14:45:52', '2021-06-29 14:45:52'),
(928, '13.89.44.53', '2021-06-29 20:54:17', '2021-06-29 20:54:17'),
(929, '68.183.27.105', '2021-06-29 20:56:23', '2021-06-29 20:56:23'),
(930, '66.249.66.5', '2021-06-29 22:56:49', '2021-06-29 22:56:49'),
(931, '66.249.66.5', '2021-06-29 22:56:49', '2021-06-29 22:56:49'),
(932, '27.34.108.19', '2021-06-30 02:01:26', '2021-06-30 02:01:26'),
(933, '34.69.87.188', '2021-06-30 02:09:59', '2021-06-30 02:09:59'),
(934, '142.54.177.4', '2021-06-30 04:05:43', '2021-06-30 04:05:43'),
(935, '142.54.177.3', '2021-06-30 07:33:44', '2021-06-30 07:33:44'),
(936, '83.145.36.70', '2021-06-30 10:42:38', '2021-06-30 10:42:38'),
(937, '76.106.179.26', '2021-06-30 12:44:23', '2021-06-30 12:44:23'),
(938, '192.3.228.133', '2021-06-30 12:52:33', '2021-06-30 12:52:33'),
(939, '52.88.130.155', '2021-06-30 14:04:01', '2021-06-30 14:04:01'),
(940, '173.254.250.73', '2021-06-30 14:41:59', '2021-06-30 14:41:59'),
(941, '13.67.216.27', '2021-07-01 02:20:54', '2021-07-01 02:20:54'),
(942, '5.39.121.35', '2021-07-01 06:24:09', '2021-07-01 06:24:09'),
(943, '89.44.201.110', '2021-07-01 09:06:59', '2021-07-01 09:06:59'),
(944, '95.236.64.231', '2021-07-01 12:40:35', '2021-07-01 12:40:35'),
(945, '52.170.59.112', '2021-07-01 13:43:26', '2021-07-01 13:43:26'),
(946, '185.220.100.250', '2021-07-01 19:08:16', '2021-07-01 19:08:16'),
(947, '192.42.116.24', '2021-07-01 19:12:23', '2021-07-01 19:12:23'),
(948, '168.138.67.155', '2021-07-01 20:47:52', '2021-07-01 20:47:52'),
(949, '217.145.83.188', '2021-07-01 22:11:14', '2021-07-01 22:11:14'),
(950, '54.201.140.152', '2021-07-02 00:19:40', '2021-07-02 00:19:40'),
(951, '54.191.139.6', '2021-07-02 00:19:58', '2021-07-02 00:19:58'),
(952, '192.71.30.89', '2021-07-02 00:37:23', '2021-07-02 00:37:23'),
(953, '52.40.161.253', '2021-07-02 00:54:17', '2021-07-02 00:54:17'),
(954, '54.200.49.141', '2021-07-02 01:30:55', '2021-07-02 01:30:55'),
(955, '54.71.1.143', '2021-07-02 01:31:19', '2021-07-02 01:31:19'),
(956, '138.199.22.180', '2021-07-02 02:28:34', '2021-07-02 02:28:34'),
(957, '23.108.53.21', '2021-07-02 03:32:18', '2021-07-02 03:32:18'),
(958, '217.145.83.183', '2021-07-02 04:49:52', '2021-07-02 04:49:52'),
(959, '52.149.213.114', '2021-07-02 05:08:03', '2021-07-02 05:08:03'),
(960, '163.172.66.252', '2021-07-02 05:11:57', '2021-07-02 05:11:57'),
(961, '122.254.82.0', '2021-07-02 09:32:08', '2021-07-02 09:32:08'),
(962, '213.180.203.9', '2021-07-02 12:59:16', '2021-07-02 12:59:16'),
(963, '5.255.253.116', '2021-07-02 12:59:16', '2021-07-02 12:59:16'),
(964, '217.145.83.175', '2021-07-02 13:25:18', '2021-07-02 13:25:18'),
(965, '31.6.11.185', '2021-07-02 14:23:57', '2021-07-02 14:23:57'),
(966, '23.94.168.163', '2021-07-02 19:15:11', '2021-07-02 19:15:11'),
(967, '163.47.148.152', '2021-07-02 23:55:34', '2021-07-02 23:55:34'),
(968, '178.16.129.70', '2021-07-02 23:55:36', '2021-07-02 23:55:36'),
(969, '58.53.128.88', '2021-07-03 04:51:44', '2021-07-03 04:51:44'),
(970, '103.232.154.105', '2021-07-03 07:03:56', '2021-07-03 07:03:56'),
(971, '163.47.148.163', '2021-07-03 07:09:36', '2021-07-03 07:09:36'),
(972, '34.236.152.167', '2021-07-03 08:29:07', '2021-07-03 08:29:07'),
(973, '54.147.33.12', '2021-07-03 08:29:09', '2021-07-03 08:29:09'),
(974, '202.51.72.11', '2021-07-03 09:08:45', '2021-07-03 09:08:45'),
(975, '5.9.55.228', '2021-07-03 11:33:44', '2021-07-03 11:33:44'),
(976, '34.217.94.36', '2021-07-03 14:06:51', '2021-07-03 14:06:51'),
(977, '5.62.56.253', '2021-07-03 14:59:22', '2021-07-03 14:59:22'),
(978, '202.51.72.7', '2021-07-03 15:48:00', '2021-07-03 15:48:00'),
(979, '40.121.163.170', '2021-07-03 15:54:19', '2021-07-03 15:54:19'),
(980, '34.219.207.102', '2021-07-03 16:50:59', '2021-07-03 16:50:59'),
(981, '144.76.4.41', '2021-07-03 16:55:51', '2021-07-03 16:55:51'),
(982, '217.145.83.190', '2021-07-03 19:44:08', '2021-07-03 19:44:08'),
(983, '54.224.101.8', '2021-07-03 20:10:17', '2021-07-03 20:10:17'),
(984, '102.129.217.60', '2021-07-04 01:27:36', '2021-07-04 01:27:36'),
(985, '3.84.89.156', '2021-07-04 05:36:01', '2021-07-04 05:36:01'),
(986, '43.245.86.25', '2021-07-04 06:21:44', '2021-07-04 06:21:44'),
(987, '202.51.72.12', '2021-07-04 06:24:20', '2021-07-04 06:24:20'),
(988, '49.244.106.21', '2021-07-04 06:28:46', '2021-07-04 06:28:46'),
(989, '103.232.154.79', '2021-07-04 07:27:15', '2021-07-04 07:27:15'),
(990, '163.47.148.171', '2021-07-04 07:27:34', '2021-07-04 07:27:34'),
(991, '103.10.29.101', '2021-07-04 08:15:27', '2021-07-04 08:15:27'),
(992, '193.176.84.135', '2021-07-04 09:54:30', '2021-07-04 09:54:30'),
(993, '207.102.138.19', '2021-07-04 10:08:26', '2021-07-04 10:08:26'),
(994, '49.244.99.201', '2021-07-04 10:15:30', '2021-07-04 10:15:30'),
(995, '120.89.97.4', '2021-07-04 10:15:34', '2021-07-04 10:15:34'),
(996, '43.245.87.210', '2021-07-04 11:12:20', '2021-07-04 11:12:20'),
(997, '163.53.24.31', '2021-07-04 12:31:02', '2021-07-04 12:31:02'),
(998, '193.176.84.247', '2021-07-04 12:39:08', '2021-07-04 12:39:08'),
(999, '184.94.240.92', '2021-07-04 13:44:39', '2021-07-04 13:44:39'),
(1000, '27.34.24.132', '2021-07-04 15:54:51', '2021-07-04 15:54:51'),
(1001, '18.208.231.221', '2021-07-04 15:57:38', '2021-07-04 15:57:38'),
(1002, '159.242.234.81', '2021-07-04 16:16:26', '2021-07-04 16:16:26'),
(1003, '52.24.242.102', '2021-07-04 17:16:49', '2021-07-04 17:16:49'),
(1004, '202.51.67.8', '2021-07-04 17:31:45', '2021-07-04 17:31:45'),
(1005, '149.56.150.89', '2021-07-04 21:35:24', '2021-07-04 21:35:24'),
(1006, '51.77.246.201', '2021-07-04 21:36:16', '2021-07-04 21:36:16'),
(1007, '45.33.15.94', '2021-07-04 21:48:49', '2021-07-04 21:48:49'),
(1008, '136.243.54.123', '2021-07-05 04:34:02', '2021-07-05 04:34:02'),
(1009, '193.176.84.228', '2021-07-05 04:48:37', '2021-07-05 04:48:37'),
(1010, '27.34.17.142', '2021-07-05 05:12:44', '2021-07-05 05:12:44'),
(1011, '112.134.244.29', '2021-07-05 06:11:43', '2021-07-05 06:11:43'),
(1012, '113.188.116.254', '2021-07-05 07:13:30', '2021-07-05 07:13:30'),
(1013, '18.237.160.28', '2021-07-05 07:16:58', '2021-07-05 07:16:58'),
(1014, '35.165.60.127', '2021-07-05 07:20:23', '2021-07-05 07:20:23'),
(1015, '18.116.30.150', '2021-07-05 07:57:14', '2021-07-05 07:57:14'),
(1016, '125.24.99.219', '2021-07-05 08:08:14', '2021-07-05 08:08:14'),
(1017, '103.232.154.97', '2021-07-05 08:56:03', '2021-07-05 08:56:03'),
(1018, '35.161.166.225', '2021-07-05 09:22:35', '2021-07-05 09:22:35'),
(1019, '54.213.232.146', '2021-07-05 09:23:47', '2021-07-05 09:23:47'),
(1020, '65.154.226.220', '2021-07-05 09:30:07', '2021-07-05 09:30:07'),
(1021, '27.34.16.84', '2021-07-05 11:22:05', '2021-07-05 11:22:05'),
(1022, '72.13.62.43', '2021-07-05 13:53:17', '2021-07-05 13:53:17'),
(1023, '3.84.87.174', '2021-07-05 15:17:34', '2021-07-05 15:17:34'),
(1024, '34.222.171.140', '2021-07-05 16:40:03', '2021-07-05 16:40:03'),
(1025, '34.209.143.56', '2021-07-05 16:40:43', '2021-07-05 16:40:43'),
(1026, '5.45.207.186', '2021-07-05 21:14:13', '2021-07-05 21:14:13'),
(1027, '138.201.60.47', '2021-07-05 22:07:14', '2021-07-05 22:07:14'),
(1028, '85.209.152.27', '2021-07-06 01:45:06', '2021-07-06 01:45:06'),
(1029, '139.5.71.144', '2021-07-06 05:15:14', '2021-07-06 05:15:14'),
(1030, '95.28.123.11', '2021-07-06 07:10:40', '2021-07-06 07:10:40'),
(1031, '150.249.214.252', '2021-07-06 08:37:20', '2021-07-06 08:37:20'),
(1032, '150.249.214.249', '2021-07-06 08:37:24', '2021-07-06 08:37:24'),
(1033, '31.13.103.5', '2021-07-06 08:52:54', '2021-07-06 08:52:54'),
(1034, '54.212.243.248', '2021-07-06 16:43:57', '2021-07-06 16:43:57'),
(1035, '110.44.120.31', '2021-07-06 16:49:46', '2021-07-06 16:49:46'),
(1036, '34.217.119.60', '2021-07-06 17:01:52', '2021-07-06 17:01:52'),
(1037, '54.186.32.238', '2021-07-06 17:02:41', '2021-07-06 17:02:41'),
(1038, '116.202.209.244', '2021-07-06 20:03:52', '2021-07-06 20:03:52'),
(1039, '93.158.90.85', '2021-07-06 20:04:40', '2021-07-06 20:04:40'),
(1040, '35.245.188.175', '2021-07-07 03:00:35', '2021-07-07 03:00:35'),
(1041, '107.172.183.56', '2021-07-07 04:11:25', '2021-07-07 04:11:25'),
(1042, '27.34.17.160', '2021-07-07 05:31:03', '2021-07-07 05:31:03'),
(1043, '159.89.138.40', '2021-07-07 06:41:44', '2021-07-07 06:41:44'),
(1044, '91.219.237.56', '2021-07-07 07:44:28', '2021-07-07 07:44:28'),
(1045, '202.51.92.112', '2021-07-07 09:53:08', '2021-07-07 09:53:08'),
(1046, '169.48.167.248', '2021-07-07 12:52:11', '2021-07-07 12:52:11'),
(1047, '140.238.155.227', '2021-07-07 14:14:20', '2021-07-07 14:14:20'),
(1048, '202.51.65.6', '2021-07-07 14:49:12', '2021-07-07 14:49:12'),
(1049, '54.149.92.109', '2021-07-07 17:18:23', '2021-07-07 17:18:23'),
(1050, '52.38.245.126', '2021-07-07 18:40:10', '2021-07-07 18:40:10'),
(1051, '54.202.159.111', '2021-07-07 18:41:02', '2021-07-07 18:41:02'),
(1052, '52.39.63.2', '2021-07-07 18:44:25', '2021-07-07 18:44:25'),
(1053, '65.154.226.168', '2021-07-07 22:43:39', '2021-07-07 22:43:39'),
(1054, '40.124.30.172', '2021-07-08 04:57:06', '2021-07-08 04:57:06'),
(1055, '103.10.29.69', '2021-07-08 11:51:46', '2021-07-08 11:51:46'),
(1056, '52.41.45.65', '2021-07-09 00:15:42', '2021-07-09 00:15:42'),
(1057, '158.46.164.88', '2021-07-09 03:32:22', '2021-07-09 03:32:22'),
(1058, '202.51.76.222', '2021-07-09 01:47:36', '2021-07-09 01:47:36'),
(1059, '213.239.193.124', '2021-07-09 04:38:32', '2021-07-09 04:38:32'),
(1060, '35.165.131.42', '2021-07-09 18:19:40', '2021-07-09 18:19:40'),
(1061, '54.186.139.242', '2021-07-10 10:33:35', '2021-07-10 10:33:35'),
(1062, '54.202.70.71', '2021-07-10 10:56:18', '2021-07-10 10:56:18'),
(1063, '27.34.24.81', '2021-07-10 12:17:24', '2021-07-10 12:17:24'),
(1064, '93.158.161.23', '2021-07-10 22:04:43', '2021-07-10 22:04:43'),
(1065, '27.34.17.233', '2021-07-11 00:27:24', '2021-07-11 00:27:24'),
(1066, '76.72.172.167', '2021-07-11 07:43:19', '2021-07-11 07:43:19'),
(1067, '34.220.47.205', '2021-07-11 10:42:12', '2021-07-11 10:42:12'),
(1068, '54.201.132.27', '2021-07-11 11:43:16', '2021-07-11 11:43:16'),
(1069, '54.202.192.14', '2021-07-11 11:58:26', '2021-07-11 11:58:26'),
(1070, '52.12.217.22', '2021-07-11 12:02:15', '2021-07-11 12:02:15'),
(1071, '34.222.68.140', '2021-07-11 22:07:52', '2021-07-11 22:07:52'),
(1072, '54.202.193.10', '2021-07-12 10:37:47', '2021-07-12 10:37:47'),
(1073, '34.217.106.207', '2021-07-12 10:45:53', '2021-07-12 10:45:53'),
(1074, '52.176.91.51', '2021-07-12 11:48:05', '2021-07-12 11:48:05'),
(1075, '202.51.72.21', '2021-07-12 11:49:24', '2021-07-12 11:49:24'),
(1076, '40.86.101.23', '2021-07-12 12:46:39', '2021-07-12 12:46:39'),
(1077, '18.169.10.22', '2021-07-12 22:27:51', '2021-07-12 22:27:51'),
(1078, '27.34.17.135', '2021-07-12 23:55:40', '2021-07-12 23:55:40'),
(1079, '149.202.180.22', '2021-07-13 03:10:36', '2021-07-13 03:10:36'),
(1080, '27.34.18.75', '2021-07-13 05:09:40', '2021-07-13 05:09:40'),
(1081, '20.102.125.105', '2021-07-13 06:41:51', '2021-07-13 06:41:51'),
(1082, '18.237.237.203', '2021-07-13 15:01:43', '2021-07-13 15:01:43'),
(1083, '54.36.148.141', '2021-07-14 01:31:15', '2021-07-14 01:31:15'),
(1084, '54.36.148.123', '2021-07-14 05:21:07', '2021-07-14 05:21:07'),
(1085, '54.36.148.218', '2021-07-14 07:11:53', '2021-07-14 07:11:53'),
(1086, '27.34.24.166', '2021-07-14 09:28:45', '2021-07-14 09:28:45'),
(1087, '34.212.224.33', '2021-07-14 10:31:55', '2021-07-14 10:31:55'),
(1088, '54.202.100.219', '2021-07-14 10:34:42', '2021-07-14 10:34:42'),
(1089, '34.210.80.65', '2021-07-14 10:35:12', '2021-07-14 10:35:12'),
(1090, '54.36.149.100', '2021-07-14 10:53:37', '2021-07-14 10:53:37'),
(1091, '54.36.148.40', '2021-07-14 12:34:59', '2021-07-14 12:34:59'),
(1092, '202.51.92.136', '2021-07-14 19:52:48', '2021-07-14 19:52:48'),
(1093, '110.34.0.163', '2021-07-14 19:55:24', '2021-07-14 19:55:24'),
(1094, '36.252.173.29', '2021-07-14 20:14:56', '2021-07-14 20:14:56'),
(1095, '124.41.197.53', '2021-07-14 20:38:55', '2021-07-14 20:38:55'),
(1096, '27.34.108.239', '2021-07-14 20:45:04', '2021-07-14 20:45:04'),
(1097, '34.208.160.82', '2021-07-15 01:34:11', '2021-07-15 01:34:11'),
(1098, '34.221.171.95', '2021-07-15 01:34:18', '2021-07-15 01:34:18'),
(1099, '39.111.208.132', '2021-07-15 03:38:50', '2021-07-15 03:38:50'),
(1100, '150.249.214.251', '2021-07-15 03:38:53', '2021-07-15 03:38:53'),
(1101, '34.209.80.202', '2021-07-15 10:43:38', '2021-07-15 10:43:38'),
(1102, '173.244.209.63', '2021-07-16 00:34:57', '2021-07-16 00:34:57'),
(1103, '193.115.194.182', '2021-07-16 03:05:09', '2021-07-16 03:05:09'),
(1104, '173.211.76.190', '2021-07-16 09:23:01', '2021-07-16 09:23:01'),
(1105, '107.21.33.72', '2021-07-16 10:31:10', '2021-07-16 10:31:10'),
(1106, '34.220.25.189', '2021-07-16 10:40:35', '2021-07-16 10:40:35'),
(1107, '34.220.122.11', '2021-07-16 10:55:30', '2021-07-16 10:55:30'),
(1108, '104.154.197.75', '2021-07-16 14:24:41', '2021-07-16 14:24:41'),
(1109, '13.59.58.134', '2021-07-16 20:02:06', '2021-07-16 20:02:06'),
(1110, '13.59.58.134', '2021-07-16 20:02:06', '2021-07-16 20:02:06'),
(1111, '13.59.58.134', '2021-07-16 20:02:06', '2021-07-16 20:02:06'),
(1112, '80.234.34.116', '2021-07-16 20:46:46', '2021-07-16 20:46:46'),
(1113, '58.247.120.90', '2021-07-16 23:45:53', '2021-07-16 23:45:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_karmabhomi`
--

CREATE TABLE `user_karmabhomi` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reply` text DEFAULT NULL,
  `user_type` varchar(225) NOT NULL,
  `karmabhomi_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL,
  `accept_status` int(11) NOT NULL DEFAULT 0,
  `try_counter` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_karmabhomi`
--

INSERT INTO `user_karmabhomi` (`id`, `user_id`, `reply`, `user_type`, `karmabhomi_id`, `created_at`, `updated_at`, `status`, `accept_status`, `try_counter`) VALUES
(1, 44, NULL, 'mobile', 1, '2021-02-09 15:31:43', '2021-03-19 07:03:18', 0, 1, 1),
(4, 34, NULL, 'web', 4, '2021-02-17 15:43:46', '2021-04-18 10:48:30', 0, 1, 3),
(5, 33, NULL, 'web', 5, '2021-02-18 14:30:58', '2021-04-18 11:29:38', 0, 2, 15),
(6, 58, NULL, 'web', 6, '2021-02-21 14:59:42', '2021-04-19 09:05:55', 0, 1, 1),
(7, 53, NULL, 'web', 7, '2021-02-24 13:49:27', '2021-02-24 13:49:27', 0, 0, 1),
(8, 70, NULL, 'web', 8, '2021-04-05 03:30:39', '2021-04-25 12:04:56', 0, 1, 1),
(9, 70, NULL, 'web', 9, '2021-04-05 03:41:16', '2021-04-05 03:41:16', 0, 0, 1),
(10, 70, NULL, 'web', 10, '2021-04-05 04:01:20', '2021-04-05 04:01:20', 0, 0, 1),
(11, 70, NULL, 'web', 11, '2021-04-06 05:26:20', '2021-04-06 05:26:20', 0, 0, 1),
(12, 70, NULL, 'web', 12, '2021-04-06 05:31:05', '2021-04-06 05:31:05', 0, 0, 1),
(13, 70, NULL, 'web', 13, '2021-04-06 05:48:05', '2021-04-06 05:48:05', 0, 0, 1),
(14, 70, NULL, 'web', 14, '2021-04-06 05:55:11', '2021-04-06 05:55:11', 0, 0, 1),
(15, 70, NULL, 'web', 15, '2021-04-06 06:12:48', '2021-04-06 06:12:48', 0, 0, 1),
(16, 70, NULL, 'web', 16, '2021-04-06 06:16:17', '2021-04-06 06:16:17', 0, 0, 1),
(17, 70, NULL, 'web', 17, '2021-04-06 10:00:29', '2021-04-06 10:00:29', 0, 0, 1),
(18, 33, NULL, 'web', 18, '2021-04-07 04:56:18', '2021-04-07 04:56:18', 0, 0, 1),
(19, 33, NULL, 'web', 19, '2021-04-07 05:21:17', '2021-04-07 05:21:17', 0, 0, 1),
(20, 33, NULL, 'web', 20, '2021-04-07 05:25:15', '2021-04-07 05:25:15', 0, 0, 1),
(21, 33, NULL, 'web', 21, '2021-04-07 10:09:38', '2021-04-07 10:09:38', 0, 0, 1),
(22, 53, NULL, 'web', 1, '2021-04-07 17:20:56', '2021-04-07 17:20:56', 0, 0, 1),
(23, 70, NULL, 'web', 2, '2021-04-07 17:35:14', '2021-04-07 17:35:14', 0, 0, 1),
(24, 70, NULL, 'web', 3, '2021-04-07 17:43:53', '2021-04-07 17:43:53', 0, 0, 1),
(25, 33, NULL, 'web', 4, '2021-04-16 08:54:20', '2021-04-16 08:54:20', 0, 0, 1),
(26, 62, NULL, 'web', 5, '2021-04-16 17:02:23', '2021-04-16 17:02:23', 0, 0, 1),
(27, 33, NULL, 'web', 6, '2021-04-19 09:03:21', '2021-04-19 09:03:21', 0, 0, 1),
(28, 76, NULL, 'web', 7, '2021-04-20 11:15:44', '2021-04-20 11:15:44', 0, 0, 1),
(29, 76, NULL, 'web', 8, '2021-04-22 08:16:18', '2021-04-22 08:16:18', 0, 0, 1),
(30, 70, NULL, 'web', 9, '2021-06-18 08:49:15', '2021-06-18 08:49:15', 0, 0, 1),
(31, 70, NULL, 'mobile', 10, '2021-06-21 04:43:01', '2021-06-21 04:43:01', 0, 0, 1),
(32, 70, NULL, 'mobile', 11, '2021-06-21 05:13:35', '2021-06-21 05:13:35', 0, 0, 1),
(33, 70, NULL, 'mobile', 12, '2021-06-21 05:59:18', '2021-06-21 05:59:18', 0, 0, 1),
(34, 70, NULL, 'mobile', 13, '2021-06-21 06:23:57', '2021-06-21 06:23:57', 0, 0, 1),
(35, 70, NULL, 'mobile', 14, '2021-06-21 06:24:41', '2021-06-21 06:24:41', 0, 0, 1),
(36, 182, NULL, 'mobile', 15, '2021-06-21 16:08:57', '2021-06-21 16:08:57', 0, 0, 1),
(37, 182, NULL, 'mobile', 16, '2021-06-21 16:10:54', '2021-06-21 16:10:54', 0, 0, 1),
(38, 182, NULL, 'mobile', 17, '2021-06-21 16:11:05', '2021-06-21 16:11:05', 0, 0, 1),
(39, 182, NULL, 'mobile', 18, '2021-06-22 16:44:49', '2021-06-22 16:44:49', 0, 0, 1),
(40, 182, NULL, 'mobile', 23, '2021-06-27 07:11:16', '2021-06-27 07:11:16', 0, 0, 1),
(41, 154, NULL, 'mobile', 24, '2021-06-28 09:27:54', '2021-06-28 09:27:54', 0, 0, 1),
(42, 154, NULL, 'mobile', 25, '2021-07-05 07:25:22', '2021-07-05 07:25:22', 0, 0, 1),
(43, 53, NULL, 'mobile', 26, '2021-07-06 15:56:25', '2021-07-06 15:56:25', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_mentor`
--

CREATE TABLE `user_mentor` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reply` text DEFAULT NULL,
  `user_type` varchar(225) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL,
  `accept_status` int(11) NOT NULL DEFAULT 0,
  `try_counter` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_mentor`
--

INSERT INTO `user_mentor` (`id`, `user_id`, `reply`, `user_type`, `mentor_id`, `created_at`, `updated_at`, `status`, `accept_status`, `try_counter`) VALUES
(1, 34, NULL, 'web', 1, '2020-09-25 07:23:20', '2020-10-06 09:23:42', 0, 1, 1),
(13, 42, NULL, 'web', 21, '2020-11-09 06:00:47', '2021-04-18 11:43:37', 0, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `yearly_productions`
--

CREATE TABLE `yearly_productions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `karmabhomi_id` int(11) DEFAULT NULL,
  `product` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `yearly_productions`
--

INSERT INTO `yearly_productions` (`id`, `karmabhomi_id`, `product`, `qty`, `price`, `remarks`, `created_at`, `updated_at`) VALUES
(48, 1, 'mnm', '111', '211321', '21', '2021-04-07 17:20:57', '2021-04-07 17:20:57'),
(49, 1, 'h', '4154', '4565', '464', '2021-04-07 17:20:58', '2021-04-07 17:20:58'),
(52, 4, 'dsad', 'sadsa', 'asda', 'adssad', '2021-04-16 08:54:21', '2021-04-16 08:54:21'),
(53, 4, 'adsd', 'asdsad', 'asdad', 'asd', '2021-04-16 08:54:21', '2021-04-16 08:54:21'),
(54, 4, 'ads', 'asda', 'ads', 'ads', '2021-04-16 08:54:22', '2021-04-16 08:54:22'),
(55, 5, 'ssss', 'ss', 'ssss', 'ss', '2021-04-16 17:02:23', '2021-04-16 17:02:23'),
(57, 7, 'kei na kei', '2000', '2000', 'saal bhari paryatak ko lakshya', '2021-04-20 11:15:45', '2021-04-20 11:15:45'),
(58, 8, '232323', '2000', '2000', 'saal bhari paryatak ko lakshya', '2021-04-22 08:16:18', '2021-04-22 08:16:18'),
(59, 9, 'Et dolor officia maiores assumenda qui autem velit.', 'North Elijah', '695-972-6508', 'Rerum quidem inventore.', '2021-06-18 08:49:16', '2021-06-18 08:49:16'),
(60, 10, 'srsrhserhserh', 'srehserhersh', 'serhserhesrhehgncm', 'mjytshs', '2021-06-21 04:42:59', '2021-06-21 04:42:59'),
(61, 11, 'srsrhserhserh', 'srehserhersh', 'serhserhesrhehgncm', 'mjytshs', '2021-06-21 05:13:27', '2021-06-21 05:13:27'),
(62, 12, 'srsrhserhserh', 'srehserhersh', 'serhserhesrhehgncm', 'mjytshs', '2021-06-21 05:59:18', '2021-06-21 05:59:18'),
(63, 13, 'srsrhserhserh', 'srehserhersh', 'serhserhesrhehgncm', 'mjytshs', '2021-06-21 06:23:55', '2021-06-21 06:23:55'),
(64, 14, 'srsrhserhserh', 'srehserhersh', 'serhserhesrhehgncm', 'mjytshs', '2021-06-21 06:24:33', '2021-06-21 06:24:33'),
(65, 15, 'srsrhserhserh', 'srehserhersh', 'serhserhesrhehgncm', 'mjytshs', '2021-06-21 16:08:56', '2021-06-21 16:08:56'),
(66, 16, 'srsrhserhserh', 'srehserhersh', 'serhserhesrhehgncm', 'mjytshs', '2021-06-21 16:10:50', '2021-06-21 16:10:50'),
(67, 17, 'srsrhserhserh', 'srehserhersh', 'serhserhesrhehgncm', 'mjytshs', '2021-06-21 16:10:58', '2021-06-21 16:10:58'),
(68, 18, 'srsrhserhserh', 'srehserhersh', 'serhserhesrhehgncm', 'mjytshs', '2021-06-22 16:44:43', '2021-06-22 16:44:43'),
(69, 22, 'xbxb', 'dd', 'xx', 'xx', '2021-06-27 06:56:20', '2021-06-27 06:56:20'),
(70, 23, 'xbxb', 'dd', 'xx', 'xx', '2021-06-27 07:11:05', '2021-06-27 07:11:05'),
(71, 24, 'vvvgg', 'ffgt', 'gtt', 'ggt', '2021-06-28 09:27:44', '2021-06-28 09:27:44'),
(72, 25, 'jejdjdj', 'rjrjjrjr', 'djrjrjr', 'rjrjrje', '2021-07-05 07:25:17', '2021-07-05 07:25:17'),
(73, 26, 'Hsh', '100', '1000', 'Wheb', '2021-07-06 15:56:14', '2021-07-06 15:56:14'),
(74, 26, '366', 'Eheh', '1000', 'Gahs', '2021-07-06 15:56:15', '2021-07-06 15:56:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_invite`
--
ALTER TABLE `admin_invite`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_invite_email_unique` (`email`),
  ADD KEY `admin_invite_invited_by_foreign` (`invited_by`);

--
-- Indexes for table `admin_menus`
--
ALTER TABLE `admin_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_menu_items`
--
ALTER TABLE `admin_menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_menu_items_menu_foreign` (`menu`);

--
-- Indexes for table `annual_operation_costs`
--
ALTER TABLE `annual_operation_costs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `annual_operation_costs_karmabhomi_id_foreign` (`karmabhomi_id`);

--
-- Indexes for table `banking`
--
ALTER TABLE `banking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comitee_member`
--
ALTER TABLE `comitee_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactfrom`
--
ALTER TABLE `contactfrom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enterprenure`
--
ALTER TABLE `enterprenure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entrepreneurship_processes`
--
ALTER TABLE `entrepreneurship_processes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_user`
--
ALTER TABLE `event_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fixed_capitals`
--
ALTER TABLE `fixed_capitals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fixed_capitals_karmabhomi_id_foreign` (`karmabhomi_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gari_khane_intros`
--
ALTER TABLE `gari_khane_intros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gari_khanne_projects`
--
ALTER TABLE `gari_khanne_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagecategory`
--
ALTER TABLE `imagecategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_user`
--
ALTER TABLE `job_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karmabhomi`
--
ALTER TABLE `karmabhomi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `librarydigital`
--
ALTER TABLE `librarydigital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `machineries`
--
ALTER TABLE `machineries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `machineries_karmabhomi_id_foreign` (`karmabhomi_id`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_user`
--
ALTER TABLE `mobile_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_user_auth_tokens`
--
ALTER TABLE `mobile_user_auth_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `municipality`
--
ALTER TABLE `municipality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `pdf`
--
ALTER TABLE `pdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popup`
--
ALTER TABLE `popup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pradesh`
--
ALTER TABLE `pradesh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `project_idea_bank`
--
ALTER TABLE `project_idea_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `running_capitals`
--
ALTER TABLE `running_capitals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `running_capitals_karmabhomi_id_foreign` (`karmabhomi_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_expenses`
--
ALTER TABLE `unit_expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit_expenses_karmabhomi_id_foreign` (`karmabhomi_id`);

--
-- Indexes for table `unit_incomes`
--
ALTER TABLE `unit_incomes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit_incomes_karmabhomi_id_foreign` (`karmabhomi_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_entreprenure`
--
ALTER TABLE `user_entreprenure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_ips`
--
ALTER TABLE `user_ips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_karmabhomi`
--
ALTER TABLE `user_karmabhomi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_mentor`
--
ALTER TABLE `user_mentor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yearly_productions`
--
ALTER TABLE `yearly_productions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `yearly_productions_karmabhomi_id_foreign` (`karmabhomi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_invite`
--
ALTER TABLE `admin_invite`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin_menus`
--
ALTER TABLE `admin_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `admin_menu_items`
--
ALTER TABLE `admin_menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `annual_operation_costs`
--
ALTER TABLE `annual_operation_costs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `banking`
--
ALTER TABLE `banking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `comitee_member`
--
ALTER TABLE `comitee_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `contactfrom`
--
ALTER TABLE `contactfrom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `enterprenure`
--
ALTER TABLE `enterprenure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `entrepreneurship_processes`
--
ALTER TABLE `entrepreneurship_processes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `event_user`
--
ALTER TABLE `event_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fixed_capitals`
--
ALTER TABLE `fixed_capitals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gari_khane_intros`
--
ALTER TABLE `gari_khane_intros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gari_khanne_projects`
--
ALTER TABLE `gari_khanne_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `imagecategory`
--
ALTER TABLE `imagecategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_user`
--
ALTER TABLE `job_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `karmabhomi`
--
ALTER TABLE `karmabhomi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `librarydigital`
--
ALTER TABLE `librarydigital`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `machineries`
--
ALTER TABLE `machineries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `mobile_user`
--
ALTER TABLE `mobile_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mobile_user_auth_tokens`
--
ALTER TABLE `mobile_user_auth_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `municipality`
--
ALTER TABLE `municipality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=754;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pdf`
--
ALTER TABLE `pdf`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `popup`
--
ALTER TABLE `popup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pradesh`
--
ALTER TABLE `pradesh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `project_idea_bank`
--
ALTER TABLE `project_idea_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `running_capitals`
--
ALTER TABLE `running_capitals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `unit_expenses`
--
ALTER TABLE `unit_expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `unit_incomes`
--
ALTER TABLE `unit_incomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `user_entreprenure`
--
ALTER TABLE `user_entreprenure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_ips`
--
ALTER TABLE `user_ips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1114;

--
-- AUTO_INCREMENT for table `user_karmabhomi`
--
ALTER TABLE `user_karmabhomi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user_mentor`
--
ALTER TABLE `user_mentor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `yearly_productions`
--
ALTER TABLE `yearly_productions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `annual_operation_costs`
--
ALTER TABLE `annual_operation_costs`
  ADD CONSTRAINT `annual_operation_costs_karmabhomi_id_foreign` FOREIGN KEY (`karmabhomi_id`) REFERENCES `karmabhomi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fixed_capitals`
--
ALTER TABLE `fixed_capitals`
  ADD CONSTRAINT `fixed_capitals_karmabhomi_id_foreign` FOREIGN KEY (`karmabhomi_id`) REFERENCES `karmabhomi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `machineries`
--
ALTER TABLE `machineries`
  ADD CONSTRAINT `machineries_karmabhomi_id_foreign` FOREIGN KEY (`karmabhomi_id`) REFERENCES `karmabhomi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `running_capitals`
--
ALTER TABLE `running_capitals`
  ADD CONSTRAINT `running_capitals_karmabhomi_id_foreign` FOREIGN KEY (`karmabhomi_id`) REFERENCES `karmabhomi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `unit_expenses`
--
ALTER TABLE `unit_expenses`
  ADD CONSTRAINT `unit_expenses_karmabhomi_id_foreign` FOREIGN KEY (`karmabhomi_id`) REFERENCES `karmabhomi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `unit_incomes`
--
ALTER TABLE `unit_incomes`
  ADD CONSTRAINT `unit_incomes_karmabhomi_id_foreign` FOREIGN KEY (`karmabhomi_id`) REFERENCES `karmabhomi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `yearly_productions`
--
ALTER TABLE `yearly_productions`
  ADD CONSTRAINT `yearly_productions_karmabhomi_id_foreign` FOREIGN KEY (`karmabhomi_id`) REFERENCES `karmabhomi` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
