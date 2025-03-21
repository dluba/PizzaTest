-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 13 2025 г., 21:13
-- Версия сервера: 5.7.39
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pizza_terminal`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pizza_order`
--

CREATE TABLE `pizza_order` (
  `id` int(11) NOT NULL,
  `pizza` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sizes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sauce` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_usd` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pizza_order`
--

INSERT INTO `pizza_order` (`id`, `pizza`, `sizes`, `sauce`, `price_usd`) VALUES
(1, 'Пепперони', '21', 'сырный', '6.50'),
(2, 'Пепперони', '21', 'кисло-сладкий', '6.60'),
(3, 'Пепперони', '21', 'чесночный', '6.40'),
(4, 'Пепперони', '21', 'барбекю', '6.70'),
(5, 'Пепперони', '26', 'сырный', '7.00'),
(6, 'Пепперони', '26', 'кисло-сладкий', '7.10'),
(7, 'Пепперони', '26', 'чесночный', '6.90'),
(8, 'Пепперони', '26', 'барбекю', '7.20'),
(9, 'Пепперони', '31', 'сырный', '7.50'),
(10, 'Пепперони', '31', 'кисло-сладкий', '7.60'),
(11, 'Пепперони', '31', 'чесночный', '7.40'),
(12, 'Пепперони', '31', 'барбекю', '7.70'),
(13, 'Пепперони', '45', 'сырный', '8.50'),
(14, 'Пепперони', '45', 'кисло-сладкий', '8.60'),
(15, 'Пепперони', '45', 'чесночный', '8.40'),
(16, 'Пепперони', '45', 'барбекю', '8.70'),
(17, 'Деревенская', '21', 'сырный', '7.50'),
(18, 'Деревенская', '21', 'кисло-сладкий', '7.60'),
(19, 'Деревенская', '21', 'чесночный', '7.40'),
(20, 'Деревенская', '21', 'барбекю', '7.70'),
(21, 'Деревенская', '26', 'сырный', '8.00'),
(22, 'Деревенская', '26', 'кисло-сладкий', '8.10'),
(23, 'Деревенская', '26', 'чесночный', '7.90'),
(24, 'Деревенская', '26', 'барбекю', '8.20'),
(25, 'Деревенская', '31', 'сырный', '8.50'),
(26, 'Деревенская', '31', 'кисло-сладкий', '8.60'),
(27, 'Деревенская', '31', 'чесночный', '8.40'),
(28, 'Деревенская', '31', 'барбекю', '8.70'),
(29, 'Деревенская', '45', 'сырный', '9.50'),
(30, 'Деревенская', '45', 'кисло-сладкий', '9.60'),
(31, 'Деревенская', '45', 'чесночный', '9.40'),
(32, 'Деревенская', '45', 'барбекю', '9.70'),
(33, 'Гавайская', '21', 'сырный', '7.00'),
(34, 'Гавайская', '21', 'кисло-сладкий', '7.10'),
(35, 'Гавайская', '21', 'чесночный', '6.90'),
(36, 'Гавайская', '21', 'барбекю', '7.20'),
(37, 'Гавайская', '26', 'сырный', '7.50'),
(38, 'Гавайская', '26', 'кисло-сладкий', '7.60'),
(39, 'Гавайская', '26', 'чесночный', '7.40'),
(40, 'Гавайская', '26', 'барбекю', '7.70'),
(41, 'Гавайская', '31', 'сырный', '8.00'),
(42, 'Гавайская', '31', 'кисло-сладкий', '8.10'),
(43, 'Гавайская', '31', 'чесночный', '7.90'),
(44, 'Гавайская', '31', 'барбекю', '8.20'),
(45, 'Гавайская', '45', 'сырный', '9.00'),
(46, 'Гавайская', '45', 'кисло-сладкий', '9.10'),
(47, 'Гавайская', '45', 'чесночный', '8.90'),
(48, 'Гавайская', '45', 'барбекю', '9.20'),
(49, 'Грибная', '21', 'сырный', '6.00'),
(50, 'Грибная', '21', 'кисло-сладкий', '6.10'),
(51, 'Грибная', '21', 'чесночный', '5.90'),
(52, 'Грибная', '21', 'барбекю', '6.20'),
(53, 'Грибная', '26', 'сырный', '6.50'),
(54, 'Грибная', '26', 'кисло-сладкий', '6.60'),
(55, 'Грибная', '26', 'чесночный', '6.40'),
(56, 'Грибная', '26', 'барбекю', '6.70'),
(57, 'Грибная', '31', 'сырный', '7.00'),
(58, 'Грибная', '31', 'кисло-сладкий', '7.10'),
(59, 'Грибная', '31', 'чесночный', '6.90'),
(60, 'Грибная', '31', 'барбекю', '7.20'),
(61, 'Грибная', '45', 'сырный', '8.00'),
(62, 'Грибная', '45', 'кисло-сладкий', '8.10'),
(63, 'Грибная', '45', 'чесночный', '7.90'),
(64, 'Грибная', '45', 'барбекю', '8.20');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pizza_order`
--
ALTER TABLE `pizza_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pizza_order`
--
ALTER TABLE `pizza_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
