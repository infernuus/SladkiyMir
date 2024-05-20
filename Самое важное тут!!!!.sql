-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 19 2024 г., 23:42
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `SladkiyMir`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `ID` int NOT NULL,
  `Names` varchar(20) NOT NULL,
  `Surnames` varchar(20) NOT NULL,
  `Emails` varchar(20) NOT NULL,
  `Phones` varchar(10) NOT NULL,
  `Logins` varchar(20) NOT NULL,
  `Pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`ID`, `Names`, `Surnames`, `Emails`, `Phones`, `Logins`, `Pass`) VALUES
(1, 'Lira', 'Kortes', 'sd@sd', '8800', 'infern', 'sdsdsdsd'),
(3, 'Liza', 'Levicheva', 'll@llm', '8800', 'molochko', 'molochko');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `id_users` int NOT NULL,
  `id_products` int NOT NULL,
  `Logins` varchar(100) NOT NULL,
  `Phones` varchar(20) NOT NULL,
  `Adress` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `products` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `totalPrice` int NOT NULL,
  `totalQuantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `id_users`, `id_products`, `Logins`, `Phones`, `Adress`, `products`, `totalPrice`, `totalQuantity`, `created_at`) VALUES
(1, 29, 2, ' sd', '53464', 'asdasas', 'АЙС ЛАТТЕ', 720, 2, '2024-05-19 11:30:31'),
(2, 1, 3, ' infern', '6547', 'asdasas', 'КЛУБНИЧНЫЙ КОКТЕЙЛЬ', 600, 2, '2024-05-19 14:28:02');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `discription` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `photo` varchar(20) NOT NULL,
  `price` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `mass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `discription`, `photo`, `price`, `mass`) VALUES
(1, 'МАФФИН ШОКОЛАДНЫЙ', 'НАСЫЩЕННО ШОКОЛАДНЫЕ, АРОМАТНЫЕ, ОЧЕНЬ НЕЖНЫЕ И МЯГКИЕ, А В КАЖДОМ КУСОЧКЕ МНОГО-МНОГО ШОКОЛАДА.', 'img/maffin.png', '150₽', '300 г.'),
(2, 'АЙС ЛАТТЕ', 'ЭТО БОДРЯЩИЙ ХОЛОДНЫЙ НАПИТОК С НАСЫЩЕННЫМ КОФЕЙНЫМ ВКУСОМ. ОН СТАНЕТ ПРЕКРАСНОЙ АЛЬТЕРНАТИВОЙ НАТУРАЛЬНОМУ КОФЕ.', 'img/latte.png', '360₽', '250мл'),
(3, 'КЛУБНИЧНЫЙ КОКТЕЙЛЬ', 'ОХЛАЖДАЕТ И ПРИНОСИТ ПРОХЛАДУ В ЛЕТНИЙ ЗНОЙ, НАСЫЩАЕТ ОРГАНИЗМ ВИТАМИНАМИ И МИКРОЭЛЕМЕНТАМИ.', 'img/kok.png', '300₽', '200мл'),
(4, 'БЭЙБИ ДОНАТ', 'НЕЖНОЕ ОБЛАЧКО ВАНИЛЬНОГО ВКУСА, ПЛАВНО ТАЮЩЕЕ НА ЯЗЫКЕ И ОКУТЫВАЮЩЕЕ СЛАДКИМ АРОМАТОМ. ', 'img/babydonut.png', '150₽', '3 шт.'),
(5, 'СЛИВОЧНЫЕ КОТИКИ', 'СЛИВОЧНО - КЛУБНИЧНЫЙ БИСКВИТ С КРЕМОМ', 'img/cake.png', '660₽', '500г.'),
(6, 'ВАТНЫЕ ОБЛАКА', 'ШОКОЛАДНЫЙ БИСКВИТ С МАЛИНОВОЙ НАЧИНКОЙ', 'img/cake-2.png', '700₽', '550г.'),
(7, 'ВИШЕНКИ', 'ВИШНЁВЫЕ КОРЖИ С ШОКОЛАДНЫМ КРЕМОМ', 'img/cake-3.png', '800₽', '550г.'),
(8, 'ДОБРОЕ УТРО', 'КЛЮКВЕННЫЙ ДЖЕМ В ВОЗДУШНЫХ БИСКВИТАХ', 'img/cake-4.png', '560₽', '450г'),
(11, 'asd', 'asd', 'sdas', '123', '123');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID` int NOT NULL,
  `Names` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Logins` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID`, `Names`, `Surname`, `Email`, `Phone`, `Logins`, `Pass`) VALUES
(1, 'Кирилл', '', '', '', 'student2021', '12345678'),
(2, 'Никита', '', '', '', 'student2022', '09876543'),
(27, 'Рина', '', '', '', 'Infernus', '258035qaS_!'),
(28, 'ыв', '', '', '', 'ыв', 'ывывывыв'),
(29, 'sd', 'sd', 'sd@r', '+7 (901) 905-38', 'sd', 'sdsdsdsd'),
(30, 'sd', 'sd', 'sd@r', '79019053839', 'sd', 'sdsdsdsd');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_products` (`id_products`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_products`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
