-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 22 2018 г., 09:38
-- Версия сервера: 10.1.33-MariaDB
-- Версия PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `content`, `price`, `quantity`) VALUES
(1, 'Samsung Galaxy A8', 'Описание 5.6\" Смартфон Samsung Galaxy A8 SM-A530F 32 ГБ черный', 28000, 0),
(2, 'PlayStation 4', 'Игровая приставка PlayStation 4 Slim', 23999, 20),
(3, '11.6\" Нетбук Irbis NB33 черный', '1366x768, TN+film, Intel Atom Z3735F, 4x1.33 ГГц, RAM 2 ГБ, SSD 32 Гб, Intel HD, Wi-Fi, BT, Windows 10', 7899, 12),
(4, '7', '1024x600, TN+Film, 4х1.2 ГГц, 512 Мб, BT, 2200 мАч, Android 4.x+', 1999, 13),
(7, '7', '1024x600, TN+Film, 4х1.2 ГГц, 512 Мб, BT, 2200 мАч, Android 4.x+', 1999, 13),
(10, 'test 33', 'test description 3', 115, 426),
(11, 'aqwer11111', '123asd32d3d', 67, 122);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
