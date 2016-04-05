-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 05, 2016 at 03:06 
-- Server version: 5.5.45
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ali`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_10_092242_create_posts_table', 1),
('2016_03_19_153653_create_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anonce` text COLLATE utf8_unicode_ci,
  `detail` text COLLATE utf8_unicode_ci,
  `video` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `seo_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seo_keywords` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `anonce`, `detail`, `video`, `photo`, `seo_title`, `seo_description`, `seo_keywords`, `created_at`, `updated_at`) VALUES
(1, 'Трейлер ', 'Это трейлер нашего канала ЧТО Я НАШЕЛ НА АЛИЭКСПРЕСС', '<p>Это трейлер нашего канала <b>ЧТО Я НАШЕЛ НА АЛИЭКСПРЕСС</b></p>\r\n<p>Ютуб канал алиэкспресс. Самое нужное и интерсное, как заработать на алиэкспресс и многое другое.</p>', 'https://www.youtube.com/embed/OfSMg8oKEr4', '/images/preview/1282675916_20160405.jpg', 'seo title', 'seo description', 'seo, ke, words', '2016-04-05 10:26:08', '2016-04-05 10:43:19'),
(2, 'АЛИЭКСПРЕСС КОШЕЛЬКИ ЖЕНСКИЕ', 'В этом видео сделана подборка с сайта Алиэкспресс, кошельки женские, которые уже пользуются большой популярностью. Все ссылки на товары вы можете найти в описании к этому ролику.', '<a href="http://ali.pub/hfc7m" target="_blank">Кошелек №1</a>\r\n<br>\r\n <a href="http://ali.pub/hvjcb" target="_blank">Кошелек №2</a>\r\n<br>\r\n <a href="http://ali.pub/uzlqm" target="_blank">Кошелек №3</a>\r\n<br>\r\n <a href="http://ali.pub/ak8ge" target="_blank">Кошелек №4</a>\r\n<br>\r\n<br>\r\n<p>В этом видео я покажу хорошую подборку с АЛИЭКСПРЕСС КОШЕЛЬКИ ЖЕНСКИЕ, к которым вы не останетесь равнодушны.</p>\r\n\r\n<p><b>1.</b>Классический женский с алиэкспресс, выполнен из натуральной кожи с обработкой лакового материала. Представлен в самых популярных 7 цветах. От 29 марта начнётся его распродажа от 890 рублей. Не упустите.</p>\r\n\r\n<p><b>2.</b> Эта модель нравиться даже мне. Женский кошелек с алиэкспресс, изготовлен из натуральный замши. Современная модель, хороший подклад, вместительный и удобный. Не забываем про хорошую распродажу.</p>\r\n\r\n<p><b>3.</b> Еще одна классная модель. Яркий и повседневный кошелек, представлен в трех расцветках. Материал – это новая высококачественная искусственная кожа.</p>\r\n\r\n<p><b>4.</b> Лакшери модель. Новый, модный женский кошелек с алиэкспресс, выполнен с рисунком 3D под крокодила, из натуральной кожи. А также вас порадует Большой выбор цветовых оттенков.</p>\r\n\r\n<p>Хочу отметить, что моя супруга пользуется кошельком с алиэскпресса и полностью им довольна. Все спасибо.</p>\r\n', 'https://www.youtube.com/embed/Pqy1OjisZdQ', '/images/preview/1323055913_20160405.jpg', 'Кошельки женские', 'Кошельки женские с Алиэкспресс', 'кошельки, алиэкспресс', '2016-04-05 10:45:14', '2016-04-05 10:48:36'),
(3, 'АЛИЭКСПРЕСС СУМКИ ЖЕНСКИЕ ', 'В этом видео демонстрируется подборка интересных женских сумок, которые будут популярны в 2016 году. Все ссылки на товары вы сможете найти в описании к этому ролику.', '<a href="http://ali.pub/17gek" target="_blank">Сумка №1</a>\r\n<br>\r\n <a href="http://ali.pub/taf2q" target="_blank">Сумка №2</a>\r\n<br>\r\n <a href="http://ali.pub/cobhx" target="_blank">Сумка №3</a>\r\n<br>\r\n <a href="http://ali.pub/dbty9" target="_blank">Сумка №4</a>\r\n<br>\r\n<br>\r\n<p>В этом видео я покажу хорошую подборку с сайта АЛИЭКСПРЕСС СУМКИ ЖЕНСКИЕ.</p>\r\n\r\n<p><b>1.</b> Хорошая  женская сумка, прекрасно подойдет для повседневной носки. Выполнена в материале под кожу. Сумка доступна в 6 различных цветах.</p>\r\n\r\n<p><b>2.</b> В моду вновь входят простота и минимализм. Данная модель выполнена в приятном винтажном стиле. А надпись в графе стиль: кэжуал – свидетельствует, что сумка также рассчитана на повседневную носку. Дизайн предельно прост: ручки и карман на молнии. Что еще требуется от сумки?</p>\r\n\r\n<p><b>3.</b> Эта сумка отлично подойдет для торжественных мероприятий или просто вечеринок. Дизайн достойный, особенно впечатляюще смотрится модель, выполненная в белом цвете. А маленький шильдик короны как бы намекает, что обладательница сумочки имеет хороший вкус.</p>\r\n\r\n<p><b>4.</b> Отличная модель в необычном исполнении. Выглядит стильно и дорого. Материал – высококачественная искусственная кожа, визуально и тактильно неотличима от натуральной. Как сообщает производитель – сумка устойчива к морозу и вообще достаточно прочная.</p>', 'https://www.youtube.com/embed/hprw3zZBN60', '/images/preview/1124066283_20160405.jpg', 'Сумки женские', 'Сумки женские Алиэкспресс', 'сумки, алиэкспресс', '2016-04-05 10:50:31', '2016-04-05 10:50:31'),
(4, 'АЛИЭКСПРЕСС ЖЕНСКИЕ ОЧКИ ПОДБОРКА', 'Представляем вашему вниманию подборку с АЛИЭКСПРЕСС ЖЕНСКИЕ ОЧКИ. Надеемся, что девушки, которые обратят внимание на представленные модели  и захотят купить женчкие очки алиэкспресс, останутся довольны. Все ссылки на товары размещены в описании к видео.', '<a href="http://ali.pub/bixsj" target="_blank">Очки №1</a>\r\n<br>\r\n <a href="http://ali.pub/9fob1" target="_blank">Очки №2</a>\r\n<br>\r\n <a href="http://ali.pub/zqms9" target="_blank">Очки №3</a>\r\n<br>\r\n <a href="http://ali.pub/phi7c" target="_blank">Очки №4</a>\r\n<br>\r\n <a href="http://ali.pub/gai0q" target="_blank">Очки №5</a>\r\n<br>\r\n<br>\r\n<p><b>1.</b> Стильные и яркие солнцезащитные очки  не просто защитят ваши глаза от вредного ультрафиолетового излучения, но и станут отличным дополнением вашего образа. Солнцезащитные очки сделаны из самых качественных материалов, а значит, они будут радовать вас своим превосходным внешним видом на протяжении долгих лет. </p>\r\n<p><b>2.</b>Вот они те самые очки – капельки, подходят практически каждому, можно сказать, что считаются унисекс на сегодняшний день. Яркий дизайн, удобная оправа более 15 цветов с зеркальным свойством стекол. Успей заказать свои!</p>\r\n<p><b>3.</b>И снова в моде ретро очки. Более 5 моделей от классического черно до ярко желтого, а так же с леопардовой, древесной оправой. В них мир вы увидите другими красками. Аксессуар  на все времена.</p>\r\n<p><b>4.</b>Спортивный молодежный вариант, представлен в 15 разных моделях. Очки удобные, обладают зеркальными свойством стекол, с помощью которого цвет изображения не искажается. Выбери свою пару солнцезащитных очков.</p>\r\n<p><b>5.</b>Модные очки — это не только защита ваших глаз, но также и элемент стиля. Данная модель подойдет для каждого образа, не зависимо для блондинки или брюнетки . В ассортименте представлено 4 варианта аксессуара с разными оправами,сделаны из высококачественно пластика.</p>\r\n', 'https://www.youtube.com/embed/n4V2u6r0FCM', '/images/preview/1178934177_20160405.jpg', 'Очки женские', 'Очки женские Алиэкспресс', 'очки, алиэкспресс', '2016-04-05 10:54:36', '2016-04-05 10:54:36'),
(5, 'АЛИЭКСПРЕСС ВЕЧЕРНИЕ ПЛАТЬЯ ПОДБОРКА', 'Представляем вашему вниманию подборку с АЛИЭКСПРЕСС ВЕЧЕРНИЕ ПЛАТЬЯ. Надеемся, что девушки, которые обратят внимание на представленные модели платьев и захотят купить вечернее платье алиэкспресс, останутся довольны. Все ссылки на товары размещены в описании к видео.', '<a href="http://ali.pub/13fyp" target="_blank">Платье в пол</a>\r\n<br>\r\n <a href="http://ali.pub/ow4br" target="_blank">Классическое вечернее платье</a>\r\n<br>\r\n <a href="http://ali.pub/zarqw" target="_blank">Платье с силуэтом русалки</a>\r\n<br>\r\n <a href="http://ali.pub/w6kny" target="_blank">Винтажное вечернее платье</a>\r\n<br>\r\n <a href="http://ali.pub/czild" target="_blank">Вечернее платье для настоящих красоток</a>\r\n<br>\r\n<br>\r\n<p><b>1.</b>Наше первое платье в этом обзоре выглядит довольно стильно. Ткань – шифон. Кто не знает – шифон – это ткань на основе шелка, материал очень тонкий и приятный на ощупь. Талия у платья завышенная, плечи открыты, а длина – по щиколотку. Данная модель представлена в 6 расцветках. Вердикт: платье для скромных, но стильных девушек.</p>\r\n<p><b>2.</b>Что сказать про этот экземпляр – классика. Кажется в этом платье есть какая-то изюминка. Не зря поп-звезда <b>Тэйлор Свифт</b> предпочитает что-то подобное. Кружевная отделка, два цвета: бежевый и черный. Платье отлично подойдет для летнего сезона. И да, не обращайте внимание на фотографии, где платье висит на вешалке. Скорее всего виновен криворукий фотограф</p>\r\n<p><b>3.</b>Что касается этого платья, то на вид создается впечатление, что если бы оно было машиной, то это была бы ламборгини. Возможно виноват желтый цвет, хотя есть модели в красном и фиолетовом представлении. Наверное, в таком платье стоит идти на свадьбу в качестве свидетеля или одеть его на корпоратив. Все коллеги обзавидуются.</p>\r\n<p><b>4.</b>А вот это платье лично мне нравится больше всего. Не знаю почему, наверное потому что на ум приходит <b>Мерилин Монро</b> и эпоха пятидесятых. По дизайну – ничего лишнего, это просто красивое платье и всего в одном цветовом исполнении. И да, платье сделано из полиэстра, полиэстр напоминает тонкую шесть и хлопок, он прочный, не мнется и не нуждается в особом уходе. </p>\r\n<p><b>5.</b>Завершает нашу подборку вечернее платье от которого так и веет весной. Можно охарактеризовать его несколькими эпитетами: приятный, теплый, нежный. Дополняют картину приятные бежевые расцветки и чертовски красивая девушка на снимке в качестве модели, которая успешно мешает объективности оценки. </p>', 'https://www.youtube.com/embed/SJtF-Fz-FZk', '/images/preview/1170622795_20160405.jpg', 'Платья женские', 'платья женские Алиэкспресс', 'платья, алиэкспресс', '2016-04-05 10:56:02', '2016-04-05 11:01:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'atellmer@gmail.com', '$2y$10$sfscHbFMUXSbhH6mgI5MAuWYGh6Dd2qxfo/eTfo7qUGPaKrvlpbiy', 'XzOHGVLkioo2GABFgLlqGViHqkrSv8yDTm7kW7UQYAplcezLu8HlqAdS5ZMg', '2016-03-19 13:16:33', '2016-04-05 11:01:30');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
