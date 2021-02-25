-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2021 a las 12:54:23
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
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `symblog_users` (
  `id` int(11) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `symblog_users`
--

INSERT INTO `symblog_users` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'fjagui@gmail.com', '$2y$10$wO8/Uq.LNiVk0VVoznUge.NRuxu5F2qsdlk6JUW2rhSj/2gznL8Xe', '2021-02-06', '2021-02-06'),
(2, 'a@a.com', '$2y$10$x7Mx5F/lDxQwi1KuESpOoOjCW5SINS.wc73114rFteVtSmrcmTdGO', '2021-02-09', '2021-02-09'),
(5, 'maria@mmm.com', '$2y$10$Mw9NFyOE0qyiAgGo0uzZq.13qK4.Z77iLmTQqBWkBu4r7sazqJ892', '2021-02-09', '2021-02-09'),
(6, 'maria@maria.com', '$2y$10$Ah2ebRsHfidrw2BpybiYa.C1uWBcW8ftJtUO0BOQOiDYp1pGkFTtu', '2021-02-11', '2021-02-11'),
(7, 'm@m.com', '$2y$10$hVQMZKZs0wHHNtjLU3Ibr.epEvYnB82Gq5.Dc7fUt/8qiisgwijKe', '2021-02-11', '2021-02-11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `symblog_users`
--
ALTER TABLE `symblog_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`id`),
  ADD UNIQUE KEY `email_2` (`id`),
  ADD UNIQUE KEY `email_3` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `symblog_users`
--
ALTER TABLE `symblog_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
