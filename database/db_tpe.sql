-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2022 a las 22:42:11
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_tpe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `db_users`
--

CREATE TABLE `db_users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `db_users`
--

INSERT INTO `db_users` (`id`, `email`, `password`, `nombre`) VALUES
(1, 'admin@admin', '$argon2id$v=19$m=65536,t=4,p=1$VkQ4MmhhTXdTTE82cDRYSw$kBgcvaYTTqW9cHDLjkybUcqn2uy/ePa1b5yU3eA04/8', 'Administrador'),
(2, 'user@user', '$argon2id$v=19$m=65536,t=4,p=1$eC9tQS5IZGZRSnBGWjVzbw$xm05JIL6x42Ez9zzLx07t0lJ3aai5aZzDVZY3uQ72zA', 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invocacion`
--

CREATE TABLE `invocacion` (
  `id` int(11) NOT NULL,
  `img` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `elemento` varchar(10) NOT NULL,
  `velocidad` varchar(45) NOT NULL,
  `habilidad` varchar(100) DEFAULT NULL,
  `id_puntos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `invocacion`
--

INSERT INTO `invocacion` (`id`, `img`, `nombre`, `elemento`, `velocidad`, `habilidad`, `id_puntos`) VALUES
(39, '', 'teddy', 'normal', 'muy baja', 'stun en area', 3),
(40, '', 'rey cieno', 'normal', 'baja', 'stun en toda la pantalla', 4),
(45, '', 'capuchino', 'hielo', 'muy alta', 'mordisco que congela', 2),
(46, '', 'pegajoso(evo)', 'normal', 'baja', 'critico 200%', 1),
(50, '', 'AizakFurry', 'normal', 'muy alta', 'owo', 1),
(62, 'img/devon-icon.jpg', 'devon', 'normal', 'muy alta', 'qwe', 1),
(63, 'img/kevin-icon.jpg', 'kevin', 'normal', 'media', 'rayo laser con las 3 cabezas', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `db_users`
--
ALTER TABLE `db_users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `invocacion`
--
ALTER TABLE `invocacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_invocacion_utilidad` (`id_puntos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `db_users`
--
ALTER TABLE `db_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `invocacion`
--
ALTER TABLE `invocacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `invocacion`
--
ALTER TABLE `invocacion`
  ADD CONSTRAINT `fk_invocacion_utilidad` FOREIGN KEY (`id_puntos`) REFERENCES `categoria` (`id_puntos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
