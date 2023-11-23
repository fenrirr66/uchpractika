-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 21 2023 г., 11:37
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cinema_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`category_id`, `category`) VALUES
(1, 'Ужасы'),
(2, 'Драма'),
(3, 'Фантастика'),
(4, 'Комедия');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name_cinema` text CHARACTER SET utf8 NOT NULL,
  `time` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `producer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` text CHARACTER SET utf8 NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `src` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name_cinema`, `time`, `producer`, `year`, `info`, `img`, `category`, `src`) VALUES
(1, 'Сияние', '127 мин. / 02:07', 'Стэнли Кубрик', '1980', 'Джек Торренс с женой и сыном приезжает в элегантный отдалённый отель, чтобы работать смотрителем во время мертвого сезона. Торренс здесь раньше никогда не бывал. Или это не совсем так? Ответ лежит во мраке, сотканном из преступного кошмара.', 'assets/img/3.png', 'ужасы', 'movie_4.html'),
(2, 'Маллхоланд Драйв', ' 127 мин. / 02:07', 'Дэвид Линч', '2001', 'Загадочная девушка, после автомобильной аварии страдающая потерей памяти, выбирает себе имя Рита с рекламного плаката к фильму с Ритой Хейворт и пытается начать новую жизнь в Голливуде. Но тайны прошлого неотступно преследуют ее. Кто были те двое мужчин, что сидели в одной машине с ней и погибли в аварии? Почему полиция подозревает, что она была ими похищена? И случайно ли в ее жизни появляется новая подруга, начинающая актриса Бетти?', 'assets/img/2.png', 'драма', 'movie_3.html'),
(3, 'Меланхолия', ' 127 мин. / 02:07', 'Ларс Фон Триер', '2001', 'События фильма разворачиваются в дни, которые предшествуют катастрофе. Первая часть посвящена свадьбе Жюстин, которая быстро охладевает к торжеству, чем вызывает непонимание близких и гостей. Героиней второй части является Клэр, сестра Жюстин. Вначале Клэр ухаживает за впавшей в клиническую депрессию Жюстин и одновременно страшится сообщений о приближении таинственной планеты Меланхолия. Постепенно, по мере приближения планеты, Жюстин и Клэр меняются ролями. Теперь паникующая Клэр нуждается в заботе. В отчаянии она с сестрой и сыном готовится принять неизбежное.', 'assets/img/1.png', 'драма', 'movie_2.html'),
(4, 'Одержимая', ' 127 мин. / 02:07', 'Анджей Жулавский', '1981', 'Вернувшись домой из длительной командировки, Марк обнаруживает, что за время отсутствия стал для жены совсем чужим человеком. Он решает узнать всю правду. Постепенно выясняется, что дело в чём-то большем, чем обычная любовная интрижка. С каждым днем супруги все глубже погружаются в пучину безумия, перерастающего в кровавый кошмар.', 'assets/img/0.png', 'драма', 'movie_1.html'),
(5, 'Твин Пикс', ' 127 мин. / 02:07', 'Дэвид Линч', '1990 – 2017', 'История начинается с известия о находке обнаженного тела старшеклассницы Лоры Палмер, завёрнутого в полиэтилен и выброшенного волнами на берег озера. В ходе расследования перед внимательными взглядами агента Купера, шерифа Трумана и его помощников проходят разные жители Твин Пикс. Постепенно зритель открывает для себя темную и страшную сторону жизни обитателей на первый взгляд тихого и мирного городка.', 'assets/img/6.png', 'триллер, драма, фантастика', 'movie_7.html'),
(6, 'На игле', ' 127 мин. / 02:07', 'Дэнни Бойл', '1995', 'История четверых друзей, попытавшихся играть с этим миром по своим правилам. История о попытках «героя нашего времени» Марка Рентона соскочить с иглы и о том, как пристрастие к героину сказывается на его отношениях с семьей и друзьями: фанатом Шона Коннери Кайфоломом, невзрачным Кочерыжкой, психопатом Бегби, 14-летней школьницей Дайан и чисто выбритым атлетом Томми, который никогда не прикасался к наркотикам, но испытывает к ним жгучий интерес…', 'assets/img/7.png', 'драма, комедия', 'movie_8.html'),
(7, 'Суспирия', ' 127 мин. / 02:07', 'Дарио Ардженто', '1977', 'Юная американка Сюзи приезжает в Германию обучаться мастерству танца в престижной мюнхенской балетной школе. В ночь приезда её туда почему-то не пустили, но она видела, как из здания выбежала девушка, которая позже в ту же ночь была жестоко убита. На утро недоразумение разрешится, Сюзи примут, и она приступит к занятиям. Девушке придётся жить в пансионате при школе, на ночь её будут поить вином с подмешанным снотворным, но Сюзи всё равно почувствует витающую в воздухе школы угрозу и захочет выяснить, что ей угрожает.', 'assets/img/4.png', 'ужасы, драма', 'movie_5.html'),
(8, 'Пэрл', ' 127 мин. / 02:07', 'Тай Уэст', '2022', 'Юная американка Сюзи приезжает в 1918 год. В мире бушует Первая мировая война и пандемия «испанки», а на техасской ферме мается девушка Пэрл. Она мечтает вырваться из этой глухомани и стать танцовщицей, но вместо этого вынуждена подчиняться строгой матери, ухаживать за парализованным отцом и покорно дожидаться мужа с фронта. Когда Пэрл узнаёт, что в ближайшем городке будет проходить прослушивание на вакансию в танцевальной труппе, она решает попасть туда любой ценой.', 'assets/img/5.png', 'ужасы, драма', 'movie_6.html');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `patronymic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `patronymic`, `login`, `email`, `password`, `role`) VALUES
(1, 'Иван', 'Иванов', 'Иванович', 'sub', 'ivan@ivan', 'sub', 'sub'),
(2, 'иваиа', 'авивав', 'авиаив', 'user', 'angel123@gmail.com', 'user', 'user'),
(3, 'админ', 'админ', 'админ', 'admin', 'admin@mail.ru', 'admin', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
