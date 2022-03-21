-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 10 2022 г., 14:07
-- Версия сервера: 8.0.27
-- Версия PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `library`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id_authors` int NOT NULL,
  `name` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id_authors`, `name`) VALUES
(10, 'Агата Кристи'),
(4, 'Александр Дюма'),
(17, 'Александр Куприн'),
(3, 'Александр Пушкин'),
(20, 'Антуан де Сент-Экзюпери'),
(6, 'Артур Конан Дойль'),
(14, 'Василий Шукшин'),
(7, 'Виктор Гюго'),
(15, 'Джордж Оруэлл'),
(8, 'Жюль Верн'),
(21, 'Иван Бунин'),
(13, 'Максим Горький'),
(11, 'Марк Твен'),
(2, 'Михаил Булгаков'),
(12, 'Николай Носов'),
(19, 'Оскар Уайльд'),
(16, 'Рэй Брэдбери'),
(1, 'Федор Достоевский'),
(18, 'Фрэнсис Скотт Фицджеральд'),
(5, 'Эрих Мария Ремарк'),
(9, 'Эрнест Хемингуэй');

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id_book` int NOT NULL,
  `title` varchar(80) NOT NULL,
  `cost` int DEFAULT (0),
  `rating` int DEFAULT (0),
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id_book`, `title`, `cost`, `rating`, `image`) VALUES
(1, 'Собачье сердце. Повести', 511, 31, 'СобачьеСердце'),
(2, 'Мастер и Маргарита', 1355, 0, 'МастерИМаргарита'),
(3, 'Белая гвардия', 511, 14, 'БелаяГвардия'),
(4, 'Преступление и наказание', 211, 0, 'ПреступлениеИНаказание'),
(5, 'Идиот', 177, 1, 'Идиот'),
(6, 'Братья Карамазовы', 468, 0, 'БратьяКарамазовы'),
(7, 'Евгений Онегин', 286, 4, 'ЕвгенийОнегин'),
(8, 'Дубровский', 172, 0, 'Дубровский'),
(9, 'Капитанская дочка. Повести', 318, 0, 'КапитанскаяДочка'),
(10, 'Три мушкетера', 193, 0, 'ТриМушкетера'),
(11, 'Граф Монте-Кристо. Том 1', 1356, 0, 'ГрафМонтеКристо1'),
(12, 'Граф Монте-Кристо. Том 2', 1418, 0, 'ГрафМонтеКристо2'),
(13, 'Королева Марго', 365, 0, 'КоролеваМарго'),
(14, 'Жизнь взаймы', 514, 0, 'ЖизньВзаймы'),
(15, 'Лучшие расследования Шерлока Холмса: Приключения Шерлока Холмса', 169, 0, 'ЛучшиеРасследованияШерлокаХолмса'),
(16, 'Затерянный мир: в адаптации', 109, 0, 'ЗатерянныйМир'),
(17, 'Знак четырех = The Sign of the Four', 119, 0, 'ЗнакЧетырех'),
(18, 'Собор Парижской Богоматери', 1778, 0, 'СоборПарижскойБогоматери');

-- --------------------------------------------------------

--
-- Структура таблицы `books_authors`
--

CREATE TABLE `books_authors` (
  `id_book` int NOT NULL,
  `id_author` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `books_authors`
--

INSERT INTO `books_authors` (`id_book`, `id_author`) VALUES
(1, 2),
(2, 2),
(3, 2),
(4, 1),
(5, 1),
(6, 1),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 4),
(13, 4),
(14, 4),
(15, 4),
(16, 5),
(18, 6),
(19, 6),
(20, 7),
(21, 7),
(22, 7),
(23, 8),
(24, 8),
(25, 8),
(26, 8),
(27, 8),
(28, 9),
(29, 10),
(30, 10),
(31, 10),
(32, 10),
(33, 10),
(34, 11),
(35, 11),
(36, 11),
(37, 11),
(38, 12),
(39, 12),
(40, 12),
(41, 12),
(42, 12),
(43, 13),
(44, 13),
(45, 13),
(47, 14),
(48, 15),
(49, 15),
(50, 16),
(51, 16),
(52, 16),
(53, 16),
(54, 17),
(55, 17),
(56, 17),
(56, 21),
(57, 18),
(58, 18),
(59, 18),
(60, 18),
(62, 19),
(63, 20),
(64, 20),
(65, 20);

-- --------------------------------------------------------

--
-- Структура таблицы `books_ganres`
--

CREATE TABLE `books_ganres` (
  `id_ganre` int NOT NULL,
  `id_book` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `books_ganres`
--

INSERT INTO `books_ganres` (`id_ganre`, `id_book`) VALUES
(1, 30),
(2, 37),
(3, 37),
(4, 37),
(5, 37),
(6, 37),
(7, 38),
(8, 37),
(9, 37),
(10, 43),
(11, 43),
(12, 17),
(12, 32),
(13, 17),
(13, 32),
(14, 17),
(14, 32),
(15, 17),
(16, 57),
(18, 27),
(19, 12),
(20, 37),
(21, 17),
(22, 57),
(23, 27),
(23, 32),
(24, 32),
(24, 37),
(25, 32),
(25, 37),
(26, 32),
(27, 32),
(28, 37),
(29, 37),
(30, 12),
(31, 37),
(32, 12),
(33, 37),
(34, 32),
(34, 56),
(35, 32),
(35, 56),
(36, 17),
(37, 51),
(38, 37),
(38, 58),
(39, 32),
(40, 32),
(40, 58),
(41, 59),
(42, 58),
(43, 59),
(44, 30),
(45, 14),
(47, 57),
(48, 4),
(48, 37),
(49, 30),
(50, 4),
(50, 37),
(51, 30),
(51, 36),
(52, 37),
(53, 37),
(54, 57),
(55, 60),
(56, 30),
(57, 57),
(57, 60),
(58, 57),
(58, 60),
(59, 37),
(60, 37),
(62, 37),
(63, 32),
(63, 57),
(63, 60),
(64, 37),
(65, 57),
(65, 60);

-- --------------------------------------------------------

--
-- Структура таблицы `book_in_favorites_by_user`
--

CREATE TABLE `book_in_favorites_by_user` (
  `id_book` int NOT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `ganres`
--

CREATE TABLE `ganres` (
  `id_ganre` int NOT NULL,
  `name` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `ganres`
--

INSERT INTO `ganres` (`id_ganre`, `name`) VALUES
(1, 'Абсурд'),
(2, 'Автобиография'),
(3, 'Альтернативная история'),
(4, 'Антиутопия'),
(5, 'Биография'),
(6, 'Боевик'),
(7, 'Вестерн'),
(8, 'Военный'),
(9, 'Воспитание детей'),
(10, 'Героика'),
(11, 'Готика'),
(12, 'Детектив'),
(13, 'Документальный'),
(14, 'Драма'),
(15, 'Ирония'),
(16, 'Искусство'),
(17, 'Исторический'),
(18, 'Киберпанк'),
(60, 'Классика'),
(19, 'Контркультура'),
(20, 'Космическая опера'),
(21, 'Криминал'),
(22, 'Кулинария'),
(23, 'Любовный роман'),
(24, 'Мелодрама'),
(25, 'Мистика'),
(26, 'Мифы и легенды'),
(27, 'Научная фантастика'),
(28, 'Нуар'),
(29, 'Пародия'),
(30, 'Повесть'),
(31, 'Политика'),
(32, 'Приключения'),
(33, 'Про животных'),
(57, 'Проза'),
(34, 'Психологический'),
(35, 'Путешествия'),
(59, 'Рассказ'),
(36, 'Реализм'),
(37, 'Роман'),
(38, 'Роман в стихах'),
(39, 'Самосовершенствование'),
(40, 'Сатира'),
(41, 'Сентиментальный'),
(58, 'Сказка'),
(42, 'Социальный'),
(43, 'Стихотворения'),
(44, 'Сюрреализм'),
(45, 'Трагедия'),
(46, 'Трагикомедия'),
(47, 'Триллер'),
(48, 'Ужасы/Хоррор'),
(49, 'Утопия'),
(50, 'Фантастика'),
(51, 'Философия'),
(52, 'Фэнтези'),
(53, 'Экономика'),
(54, 'Эпический'),
(55, 'Эротика'),
(56, 'Юмор');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_orders` int NOT NULL,
  `id_users` int NOT NULL,
  `id_status` int NOT NULL,
  `order_time` datetime NOT NULL DEFAULT (_utf8mb4'2000/01/01 00.00.00'),
  `total_sum` int NOT NULL,
  `total_amount` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `orders_item`
--

CREATE TABLE `orders_item` (
  `id_orders_item` int NOT NULL,
  `id_book` int NOT NULL,
  `id_order` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `oreders_status`
--

CREATE TABLE `oreders_status` (
  `id_status` int NOT NULL,
  `name` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `review`
--

CREATE TABLE `review` (
  `id_review` int NOT NULL,
  `id_book` int NOT NULL,
  `text_review` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_users` int NOT NULL,
  `email` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `login` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pass` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_users`, `email`, `login`, `pass`) VALUES
(1, 'Ktihomirova021@gmail.com', '122132', 'bb823ceac2d64146fd77291387da5cdb'),
(2, 'w43tw5y46u3warset', 'arserea', 'b910a50386c0a41dd862afa1d3d6ad60'),
(3, '89024352923', 'ktodkf', 'd004a63f28066b7188a089a4472c8f70'),
(5, 'andreyosa@mail.ru', 'yungbyd', '775cc38eab065da4b812bbbdbfb55270'),
(9, 'lbvthmrv@gmail.com', 'lbvthmrv@gmail.com', '83124818d18f5df65282c1162e25112b');

-- --------------------------------------------------------

--
-- Структура таблицы `users_library`
--

CREATE TABLE `users_library` (
  `id_order` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `id_user` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `id_book` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id_authors`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_book`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Индексы таблицы `books_authors`
--
ALTER TABLE `books_authors`
  ADD PRIMARY KEY (`id_book`,`id_author`);

--
-- Индексы таблицы `books_ganres`
--
ALTER TABLE `books_ganres`
  ADD PRIMARY KEY (`id_ganre`,`id_book`);

--
-- Индексы таблицы `ganres`
--
ALTER TABLE `ganres`
  ADD PRIMARY KEY (`id_ganre`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_orders`);

--
-- Индексы таблицы `orders_item`
--
ALTER TABLE `orders_item`
  ADD PRIMARY KEY (`id_orders_item`);

--
-- Индексы таблицы `oreders_status`
--
ALTER TABLE `oreders_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Индексы таблицы `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Индексы таблицы `users_library`
--
ALTER TABLE `users_library`
  ADD PRIMARY KEY (`id_order`,`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id_authors` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id_book` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `ganres`
--
ALTER TABLE `ganres`
  MODIFY `id_ganre` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_orders` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `oreders_status`
--
ALTER TABLE `oreders_status`
  MODIFY `id_status` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
