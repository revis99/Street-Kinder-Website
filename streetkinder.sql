-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 03 2022 г., 01:17
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `streetkinder`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dostavka` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `tel`, `address`, `dostavka`) VALUES
(1, 'Лазутин Максим Игоревич', 'dfgdfg@mail.ru', '89998529133', 'Коровино', '03.03.2022'),
(2, 'Иванов Иван Иванович', 'fdgdfg@mail.ru', '234234234234', 'Дегунино', '05.02.22');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `img`) VALUES
(1, 'Puma', 7600, 'DC TRASE TX J SHOE', 'cart13.jpg'),
(2, 'NIKE SB', 6290, 'Сhron 2 CNVS PRM', 'cart16.jpg'),
(3, 'NIKE', 11190, 'Air Flight Lite Mid Aqua', 'cart17.jpg'),
(4, 'NIKE', 9900, 'Air Force', 'cart10.jpg'),
(5, 'adidas Originals', 8790, 'Кроссовки Ozelia', 'cart22.jpg'),
(6, 'Vans ', 9590, 'Comfycush Old Skool Market Day', 'cart23.jpg'),
(7, 'Nike ', 10990, 'Wmns Dunk Low Disrupt 2', 'cart24.jpg\r\n'),
(8, 'Nike', 11490, 'Air Huarache Purple Punch', 'cart25.jpg'),
(9, 'Nike', 10690, 'Blazer Mid 77 Jumbo', 'cart26.jpg'),
(10, 'Lacoste ', 15690, 'Game Advance Luxe', 'cart27.jpg'),
(11, 'New Balance', 13790, '574v2', 'cart28.jpg'),
(12, 'adidas Skateboarding ', 9790, 'x Paradigm Gazelle ADV', 'cart29.jpg\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `pass`, `address`, `role`) VALUES
(1, 'revis', 'revispie@mail.ru', 'ef4be90cfd8fbfc7df33383aa619eb3a', '123', 'admin'),
(4, 'sergina', 'sdfgsdf@mail.ru', 'ef4be90cfd8fbfc7df33383aa619eb3a', 'Бабушкинская', 'user'),
(5, 'danya', 'dfgdsf@mail.ru', 'ef4be90cfd8fbfc7df33383aa619eb3a', 'Бибирево', 'user'),
(8, 'serejka', 'serejka@mail.ru', '88baacdcee918f32c7513ed2f7b8fae6', 'Пушкинская', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
