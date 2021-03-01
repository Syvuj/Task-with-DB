-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 01 2021 г., 21:53
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
-- База данных: `rating`
--

-- --------------------------------------------------------

--
-- Структура таблицы `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `classes`
--

INSERT INTO `classes` (`id`, `name`) VALUES
(1, 'Rangers'),
(2, 'Squirrels'),
(3, 'Cats');

-- --------------------------------------------------------

--
-- Структура таблицы `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL,
  `TaskName` varchar(255) NOT NULL,
  `Rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rating`
--

INSERT INTO `rating` (`id`, `StudentId`, `TaskName`, `Rating`) VALUES
(1, 1, 'Math', 93),
(2, 2, 'Math', 67),
(3, 3, 'Math', 84),
(4, 4, 'Math', 75),
(5, 5, 'Math', 52),
(6, 6, 'Math', 98),
(7, 7, 'Math', 96),
(8, 8, 'Math', 79),
(9, 9, 'Math', 62),
(10, 10, 'Math', 76),
(11, 1, 'science', 76),
(12, 2, 'science', 92),
(13, 3, 'science', 54),
(14, 4, 'science', 78),
(15, 5, 'science', 62),
(16, 6, 'science', 96),
(17, 7, 'science', 64),
(18, 8, 'science', 55),
(19, 9, 'science', 81),
(20, 10, 'science', 75),
(21, 1, 'physics', 96),
(22, 2, 'physics', 84),
(23, 3, 'physics', 95),
(24, 4, 'physics', 77),
(25, 5, 'physics', 92),
(26, 6, 'physics', 69),
(27, 7, 'physics', 64),
(28, 8, 'physics', 52),
(29, 9, 'physics', 76),
(30, 10, 'physics', 86);

-- --------------------------------------------------------

--
-- Структура таблицы `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `Math` int(11) NOT NULL,
  `Science` int(11) NOT NULL,
  `Physics` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ratings`
--

INSERT INTO `ratings` (`id`, `Math`, `Science`, `Physics`) VALUES
(1, 93, 76, 96),
(2, 67, 92, 84),
(3, 84, 54, 95),
(4, 75, 78, 77),
(5, 52, 62, 92),
(6, 98, 96, 69),
(7, 96, 64, 64),
(8, 79, 55, 52),
(9, 62, 81, 76),
(10, 76, 75, 86);

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` int(15) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Class ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `FirstName`, `LastName`, `Class ID`) VALUES
(1, 'Bob', 'Brown', 3),
(2, 'Matthew', 'Davies', 1),
(3, 'Daniel', 'Wilson', 2),
(4, 'Ethan', 'Parson', 2),
(5, 'Christopher', 'Ellington', 3),
(6, 'Michael', 'Flatcher', 3),
(7, 'Jason', 'Gilbert', 1),
(8, 'Jacob', 'Walker', 1),
(9, 'Caspar', 'Davis', 1),
(10, 'Edward', 'King', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
