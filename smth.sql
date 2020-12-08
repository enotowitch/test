-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 08, 2020 at 07:39 PM
-- Server version: 10.3.13-MariaDB-log
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smth`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_card`
--

CREATE TABLE `tbl_card` (
  `job_post_id` int(11) NOT NULL,
  `job_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_company_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_salary` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_exp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_location` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_duration` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_workload` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_tag_1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_tag_2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_tag_3` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_card`
--

INSERT INTO `tbl_card` (`job_post_id`, `job_title`, `job_company_name`, `job_status`, `job_salary`, `job_exp`, `job_location`, `job_duration`, `job_workload`, `job_tag_1`, `job_tag_2`, `job_tag_3`) VALUES
(406, 'ZHOPA.ru', '123@google.com', 'POSTED', '9500 USD', '4 years', 'Albania', 'Time to time', '3 h/mo', 'research', 'front-end', 'back-end'),
(407, 'index@2com', 'index@2.com', 'POSTED', '9800 USD', '4 years', 'American Samoa', 'Time to time', '6 h/mo', 'anime', 'ecommerce', 'game dev'),
(408, 'UPDATE', 'index@777com', 'POSTED', '300 USD', '3 years', 'Algeria', 'Time to time', '6 h/mo', 'brand', 'CAD', 'UX / UI'),
(409, '2222222@222222.com', '22222222@222222.com', 'POSTED', '100 USD', '9 years', 'Albania', 'Temporary', '5 h/mo', 'animation', 'art', 'cartoonist'),
(410, '', '', 'POSTED', '', '', '', '', '', '', '', ''),
(411, '', '', 'POSTED', '', '', '', '', '', '', '', ''),
(412, '', '', 'POSTED', '', '', '', '', '', '', '', ''),
(413, '', '', 'POSTED', '', '', '', '', '', '', '', ''),
(414, '', '', 'POSTED', '', '', '', '', '', '', '', ''),
(415, '', '', 'POSTED', '', '', '', '', '', '', '', ''),
(416, 'аываыв', 'аываыва', 'POSTED', '200 USD', '2 years', 'Albania', 'Temporary', '3 h/mo', 'animation', 'anime', 'CAD'),
(417, 'xvvxcvxcv', 'xcvxcvxcv', 'POSTED', '300 USD', '2 years', 'American Samoa', 'Time to time', '2 h/mo', 'animation', 'brand', 'CAD'),
(418, 'xvvxcvsfdfsdxcv', 'xcvxcvxcsdfsdffv', 'POSTED', '300 USD', '2 years', 'American Samoa', 'Time to time', '2 h/mo', 'animation', 'brand', 'CAD'),
(419, 'xvvxcvsfdfsdxcv', 'xcvxcvxcsdfsdffv', 'POSTED', '300 USD', '2 years', 'American Samoa', 'Time to time', '2 h/mo', 'animation', 'brand', 'CAD'),
(420, 'xvvxcvsfdfsdxcv', 'xcvxcvxcsdfsdffv', 'POSTED', '300 USD', '2 years', 'American Samoa', 'Time to time', '2 h/mo', 'animation', 'brand', 'CAD'),
(421, 'xvvxcvsfdfsdxcv', 'xcvxcvxcsdfsdffv', 'POSTED', '300 USD', '2 years', 'American Samoa', 'Time to time', '2 h/mo', 'animation', 'brand', 'CAD'),
(422, 'xvvxcvsfdfsdxcv', 'xcvxcvxcsdfsdffv', 'POSTED', '300 USD', '2 years', 'American Samoa', 'Time to time', '2 h/mo', 'animation', 'brand', 'CAD'),
(423, 'dfsfsdfsd', 'fsdfsdfsf', 'POSTED', '200 USD', '2 years', 'Albania', 'Temporary', '3 h/mo', 'brand', 'CAD', 'cartoonist'),
(424, 'dfsfsdfsd', 'fsdfsdfsf', 'POSTED', '200 USD', '2 years', 'Albania', 'Temporary', '3 h/mo', 'brand', 'CAD', 'cartoonist'),
(425, 'dfsfsdfsd', 'fsdfsdfsf', 'POSTED', '200 USD', '2 years', 'Albania', 'Temporary', '3 h/mo', 'brand', 'CAD', 'cartoonist'),
(426, 'dfsfsdfsd', 'fsdfsdfsf', 'POSTED', '200 USD', '2 years', 'Albania', 'Temporary', '3 h/mo', 'brand', 'CAD', 'cartoonist'),
(427, 'dfsfsdfsd', 'fsdfsdfsf', 'POSTED', '200 USD', '2 years', 'Albania', 'Temporary', '3 h/mo', 'brand', 'CAD', 'cartoonist'),
(428, 'dfsfsdfsd', 'fsdfsdfsf', 'POSTED', '200 USD', '2 years', 'Albania', 'Temporary', '3 h/mo', 'brand', 'CAD', 'cartoonist'),
(429, 'fgfg', 'fdgfdgdfg', 'POSTED', '100 USD', '3 years', 'American Samoa', 'Time to time', '4 h/mo', 'anime', 'brand', 'character'),
(430, 'fgfg', 'fdgfdgdfg', 'POSTED', '100 USD', '3 years', 'American Samoa', 'Time to time', '4 h/mo', 'anime', 'brand', 'character'),
(431, '', '', 'POSTED', '', '', '', '', '', '', '', ''),
(432, '', '', 'POSTED', '', '', '', '', '', '', '', ''),
(433, '', '', 'POSTED', '', '', '', '', '', '', '', ''),
(434, '', '', 'POSTED', '', '', '', '', '', '', '', ''),
(435, '', '', 'POSTED', '', '', '', '', '', '', '', ''),
(436, '', '', 'POSTED', '', '', '', '', '', '', '', ''),
(437, '', '', 'POSTED', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_pass`) VALUES
(12, '123@123.com', '4a7d1ed414474e4033ac29ccb8653d9b'),
(13, '123@123.com', '4a7d1ed414474e4033ac29ccb8653d9b'),
(14, 'test@test.com', 'd79c8788088c2193f0244d8f1f36d2db'),
(15, '2@2.com', 'b6d767d2f8ed5d21a44b0e5886680cb9'),
(16, 'brad@gmail.com', 'e79feae052f8d5b4ae16aaec69f582c9'),
(17, '0@0yandex.ru', '9d13c4bade6ae875339fcbf4f62ed5a3'),
(18, '1@1yandex.ru', '73ae014b8fd96ecc8b51651e025ca301'),
(19, '2@2yandex.ru', '82ab065062b8bf5ab868b2d69e54a8f9'),
(20, '123@google.com', 'b8c0244a44462818e4f89c6545fdd44e'),
(21, 'mail@mail.com', '7905d373cfab2e0fda04b9e7acc8c879'),
(22, 'test@test.com', 'b642b4217b34b1e8d3bd915fc65c4452'),
(23, 'test@test.com', 'b642b4217b34b1e8d3bd915fc65c4452'),
(24, 'test@test.com', '1fe6900bed4b83872019051773ed7755'),
(25, 'test@test.com', 'b642b4217b34b1e8d3bd915fc65c4452'),
(26, 'test@test.com', 'b642b4217b34b1e8d3bd915fc65c4452'),
(27, 'test@test.com', 'b642b4217b34b1e8d3bd915fc65c4452'),
(28, 'test@test.com', 'b642b4217b34b1e8d3bd915fc65c4452'),
(29, 'test@test.com', 'b642b4217b34b1e8d3bd915fc65c4452'),
(30, 'test@test.com', 'b642b4217b34b1e8d3bd915fc65c4452'),
(31, 'test@test.com', 'b642b4217b34b1e8d3bd915fc65c4452'),
(32, 'test@test.com', 'b642b4217b34b1e8d3bd915fc65c4452'),
(33, 'test@test.com', 'b642b4217b34b1e8d3bd915fc65c4452'),
(34, 'test@test.com', 'b642b4217b34b1e8d3bd915fc65c4452'),
(35, 'profile.php@mail.com', '55ea23738f469548973aeb465a321c8b'),
(36, 'profile.php@mail.com', '55ea23738f469548973aeb465a321c8b'),
(37, '7777777777777777@test.com', 'af0aa0472db37362d15eceb0b11c9487'),
(38, '2@2.com', '1e6fd8e56879c84999cd481255530592'),
(39, '2@2.com', '1e6fd8e56879c84999cd481255530592'),
(40, '333@666.com', '3add6992d415af4963efe4450eb61c1a'),
(41, '333@777.com', '3add6992d415af4963efe4450eb61c1a'),
(42, 'test@test.com', '1fe6900bed4b83872019051773ed7755'),
(43, 'test@test.com', 'b642b4217b34b1e8d3bd915fc65c4452'),
(44, 'index@1.com', 'cc87b99cd80072c8890216128e7265bb'),
(45, 'test2@test2.com', 'f5fc800a80fa8a5f290396ed1f10e326'),
(46, '123@123.com', 'b2d7d2d13aed54c2ed7feb538b382b42'),
(47, '2@2.com', '1e6fd8e56879c84999cd481255530592'),
(48, '2@2.com', '1e6fd8e56879c84999cd481255530592'),
(49, 'test@test.com', 'b642b4217b34b1e8d3bd915fc65c4452'),
(50, 'test@test.com', 'b642b4217b34b1e8d3bd915fc65c4452'),
(51, 'test@test.com', 'b642b4217b34b1e8d3bd915fc65c4452'),
(52, 'test@test.com', 'b642b4217b34b1e8d3bd915fc65c4452'),
(53, 'test@test.com', 'b642b4217b34b1e8d3bd915fc65c4452'),
(54, '2@2.com', '1e6fd8e56879c84999cd481255530592'),
(55, 'check@mail.com', '190cef96cf4240df196bb19fee67f0ff'),
(56, 'check@mail.com', '190cef96cf4240df196bb19fee67f0ff'),
(57, 'check@mail.com', '190cef96cf4240df196bb19fee67f0ff'),
(58, 'check@mail.com', '190cef96cf4240df196bb19fee67f0ff'),
(59, 'check@mail.com', '190cef96cf4240df196bb19fee67f0ff'),
(60, '2@2.com', '1e6fd8e56879c84999cd481255530592'),
(61, '2@2.com', '1e6fd8e56879c84999cd481255530592'),
(62, '2@2.com', '1e6fd8e56879c84999cd481255530592'),
(63, 'test@test.com', 'b642b4217b34b1e8d3bd915fc65c4452'),
(64, 'test@test.com', 'b642b4217b34b1e8d3bd915fc65c4452'),
(65, 'test@test.com', 'b642b4217b34b1e8d3bd915fc65c4452'),
(66, 'test@test.com', 'b642b4217b34b1e8d3bd915fc65c4452');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_card`
--
ALTER TABLE `tbl_card`
  ADD PRIMARY KEY (`job_post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_card`
--
ALTER TABLE `tbl_card`
  MODIFY `job_post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=438;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;