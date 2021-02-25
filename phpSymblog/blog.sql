-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2021 a las 12:52:54
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
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `symblog_blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(120) NOT NULL,
  `blog` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `tags` varchar(50) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `symblog_blog` (`id`, `title`, `author`, `blog`, `image`, `tags`, `created_at`, `updated_at`) VALUES
(1, 'A day with Symfony2', 'dsyph3r', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'beach.jpg', 'symfony2, php, paradise, symblog', '2021-01-26', '2021-01-26'),
(3, 'The pool on the roof must have a leak', 'Zero Cool', 'Vestibulum vulputate mauris eget erat congue dapib', 'pool_leak.jpg', 'pool, leaky, hacked, movie, hacking, symblog', '2011-07-23', '2011-07-23'),
(4, 'Misdirection. What the eyes see and the ears hear,', 'Gabriel', 'Lorem ipsumvehicula nunc non leo hendrerit commodo', 'misdirection.jpg', 'misdirection, magic, movie, hacking, symblog', '2011-07-16', '2011-07-16'),
(5, 'The grid - A digital frontier', 'Kevin Flynn', 'Lorem commodo. Vestibulum vulputate mauris eget er', 'the_grid.jpg', 'grid, daftpunk, movie, symblog', '2011-06-02', '2011-06-02'),
(6, 'You\'re either a one or a zero. Alive or dead', 'Gary Winston', 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'one_or_zero.jpg', 'binary, one, zero, alive, dead, !trusting, movie, ', '2011-04-25', '2011-04-25'),
(34, 'aa', 'aa', 'aaaa', '60224245e540dCaptura.PNG', 'aa', '2021-02-09', '2021-02-09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `symblog_blog`
--
ALTER TABLE `symblog_blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `symblog_blog`
--
ALTER TABLE `symblog_blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
