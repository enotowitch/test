-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 16, 2020 at 07:23 PM
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
  `job_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_salary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_exp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_duration` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_workload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_tag_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_tag_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_tag_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_example_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_example_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_example_3` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_card`
--

INSERT INTO `tbl_card` (`job_post_id`, `job_title`, `job_company_name`, `job_status`, `job_salary`, `job_exp`, `job_location`, `job_duration`, `job_workload`, `job_tag_1`, `job_tag_2`, `job_tag_3`, `job_img`, `job_example_1`, `job_example_2`, `job_example_3`) VALUES
(963, '11111111111111', '11111111111111111111111', 'POSTED', '100 USD', 'No Exp.', 'Akrotiri', 'Permanent', '3 h/mo', 'art', 'desktop', 'database', 'uploads/boys234.jpg', 'uploads/officer — копия.jpg', 'uploads/tatoo.jpg', 'uploads/Лого CooKiss.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_card`
--
ALTER TABLE `tbl_card`
  ADD PRIMARY KEY (`job_post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_card`
--
ALTER TABLE `tbl_card`
  MODIFY `job_post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=964;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
