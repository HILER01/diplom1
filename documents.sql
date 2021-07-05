-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 06 2021 г., 01:16
-- Версия сервера: 5.5.68-MariaDB-cll-lve
-- Версия PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `u2661_diplomkireev`
--

-- --------------------------------------------------------

--
-- Структура таблицы `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(10) NOT NULL,
  `sender` text NOT NULL,
  `doctype` text NOT NULL,
  `docdate` text NOT NULL,
  `delloc` text NOT NULL,
  `deldate` date NOT NULL,
  `receipt` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `documents`
--

INSERT INTO `documents` (`id`, `sender`, `doctype`, `docdate`, `delloc`, `deldate`, `receipt`) VALUES
(1, 'Суд', 'Судебное взыскание задолжности', 'D46446258789', 'Налоговая инспекция', '0000-00-00', '2021-06-22'),
(2, 'Суд', 'Судебное взыскание задолжности', 'D4645677575', 'Налоговая инспекция', '2021-06-30', '2021-06-22'),
(3, 'Суд', 'Судебное взыскание задолжности', 'D4645677366', 'Налоговая инспекция', '2021-06-30', '2021-06-22'),
(4, 'Суд', 'Судебное взыскание задолжности', 'D4644646464', 'Налоговая инспекция', '0000-00-00', '2021-06-22'),
(5, 'Налоговая', 'Судебное взыскание задолжности', 'R3536797757', 'Налоговая инспекция', '0000-00-00', '2021-06-17'),
(6, 'Почта', 'Судебное взыскание задолжности', 'Q3452725742', 'Налоговая инспекция', '2021-06-29', '2021-06-10'),
(7, 'Суд', 'Судебное взыскание задолжности', 'D4647689376', 'Налоговая инспекция', '0000-00-00', '2021-06-06');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
