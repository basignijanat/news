-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 16 2019 г., 11:05
-- Версия сервера: 5.6.34
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mydb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `header` text NOT NULL,
  `shortcontent` text NOT NULL,
  `content` text NOT NULL,
  `author` text NOT NULL,
  `create_date` text NOT NULL,
  `update_date` text NOT NULL,
  `status` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `header`, `shortcontent`, `content`, `author`, `create_date`, `update_date`, `status`, `image`) VALUES
(1, 'Первая', '', '0', '', 'Fri, 15 Feb 19 20:51:47 +0300', 'Fri, 15 Feb 19 20:51:47 +0300', 2, ''),
(2, 'Вторая', '', '', '', 'Fri, 15 Feb 19 20:55:42 +0300', 'Fri, 15 Feb 19 21:51:38 +0300', 2, 'Astroneer-by-Igruha.torrent'),
(6, 'Третья', '', '', '', 'Fri, 15 Feb 19 21:13:08 +0300', 'Fri, 15 Feb 19 21:13:08 +0300', 1, ''),
(7, 'Четвертая', '', '', '', 'Fri, 15 Feb 19 21:17:53 +0300', 'Fri, 15 Feb 19 21:17:53 +0300', 1, '3Xw-o35t9iA.jpg'),
(9, 'Пятая', '', '', '', 'Fri, 15 Feb 19 21:23:58 +0300', 'Fri, 15 Feb 19 21:23:58 +0300', 1, 'avatar-04-512.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
