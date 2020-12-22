-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 22 2020 г., 18:51
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `smth`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_card`
--

CREATE TABLE `tbl_card` (
  `job_post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
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
-- Дамп данных таблицы `tbl_card`
--

INSERT INTO `tbl_card` (`job_post_id`, `user_id`, `job_title`, `job_company_name`, `job_status`, `job_salary`, `job_exp`, `job_location`, `job_duration`, `job_workload`, `job_tag_1`, `job_tag_2`, `job_tag_3`, `job_img`, `job_example_1`, `job_example_2`, `job_example_3`) VALUES
(1304, 70, '1@1.gmail.com', '1@1.gmail.com', 'POSTED', '0', '0', '0', '0', '0', '', '', '', 'uploads/', 'uploads/', 'uploads/', 'uploads/');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_pass`) VALUES
(12, '123@123.com', '4a7d1ed414474e4033ac29ccb8653d9b');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tbl_card`
--
ALTER TABLE `tbl_card`
  ADD PRIMARY KEY (`job_post_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tbl_card`
--
ALTER TABLE `tbl_card`
  MODIFY `job_post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1324;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
