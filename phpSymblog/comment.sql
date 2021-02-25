-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2021 a las 12:54:11
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comment`
--

CREATE TABLE `symblog_comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` varchar(50) NOT NULL,
  `comment` varchar(120) NOT NULL,
  `approved` varchar(50) DEFAULT NULL,
  `created_at` date,
  `updated_at` date,
  `blog_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comment`
--

INSERT INTO `symblog_comment` (`id`, `user`, `comment`, `approved`, `created_at`, `updated_at`, `blog_id`) VALUES
(1, 'symfony', 'To make a long story short. You can\'t go wrong by choosing Symfony! And no one has ever been fired for using Symfony.', NULL, NULL, NULL, 1),
(2, 'David', 'To make a long story short. Choosing a framework must not be taken lightly; it is a long-term commitment. Make sure that', NULL, NULL, NULL, 1),
(3, 'Dade', 'Anything else, mom? You want me to mow the lawn? Oops! I forgot, New York, No grass.', NULL, NULL, NULL, 3),
(4, 'Kate', 'Are you challenging me? ', NULL, '2011-07-23', NULL, 3),
(5, 'Dade', 'Name your stakes.', NULL, '2011-07-23', NULL, 3),
(6, 'Kate', 'If I win, you become my slave.', NULL, '2011-07-23', NULL, 3),
(7, 'Dade', 'Your SLAVE?', NULL, '2011-07-23', NULL, 3),
(8, 'Kate', 'You wish! You\'ll do shitwork, scan, crack copyrights...', NULL, '2011-07-23', NULL, 3),
(9, 'Dade', 'And if I win?', NULL, '2011-07-23', NULL, 3),
(10, 'Kate', 'Make it my first-born!', NULL, '2011-07-23', NULL, 3),
(11, 'Dade', 'Make it our first-date!', NULL, '2011-07-24', NULL, 3),
(12, 'Kate', 'I don\'t DO dates. But I don\'t lose either, so you\'re on!', NULL, '2011-07-25', NULL, 3),
(13, 'Stanley', 'It\'s not gonna end like this.', NULL, NULL, NULL, 4),
(14, 'Gabriel', 'Oh, come on, Stan. Not everything ends the way you think it should. Besides, audiences love happy endings.', NULL, NULL, NULL, 4),
(15, 'Mile', 'Doesn\'t Bill Gates have something like that?', NULL, NULL, NULL, 6),
(16, 'Gary', 'Bill Who?', NULL, NULL, NULL, 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `symblog_comment`
--
ALTER TABLE `symblog_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `symblog_comment`
--
ALTER TABLE `symblog_comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comment`
--
ALTER TABLE `symblog_comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `symblog_blog` (`id`),
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
