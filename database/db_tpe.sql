-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2022 a las 07:30:23
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

INSERT INTO `db_users` (`id`, `email`, `password`, `nombre`) VALUES(1, 'admin@admin', '$argon2id$v=19$m=65536,t=4,p=1$VkQ4MmhhTXdTTE82cDRYSw$kBgcvaYTTqW9cHDLjkybUcqn2uy/ePa1b5yU3eA04/8', 'Administrador');
INSERT INTO `db_users` (`id`, `email`, `password`, `nombre`) VALUES(2, 'user@user', '$argon2id$v=19$m=65536,t=4,p=1$eC9tQS5IZGZRSnBGWjVzbw$xm05JIL6x42Ez9zzLx07t0lJ3aai5aZzDVZY3uQ72zA', 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invocacion`
--

CREATE TABLE `invocacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `elemento` varchar(10) NOT NULL,
  `velocidad` varchar(45) NOT NULL,
  `habilidad` varchar(100) DEFAULT NULL,
  `id_puntos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `invocacion`
--

INSERT INTO `invocacion` (`id`, `nombre`, `elemento`, `velocidad`, `habilidad`, `id_puntos`) VALUES(2, 'pegajoso', 'normal', 'baja', 'critico 200%', 2);
INSERT INTO `invocacion` (`id`, `nombre`, `elemento`, `velocidad`, `habilidad`, `id_puntos`) VALUES(3, 'moca', 'normal', 'muy baja', 'mordisco de 200% dmg', 3);
INSERT INTO `invocacion` (`id`, `nombre`, `elemento`, `velocidad`, `habilidad`, `id_puntos`) VALUES(4, 'capuccino', 'hielo', 'muy alta', 'muerde y congela a los enemigos', 4);
INSERT INTO `invocacion` (`id`, `nombre`, `elemento`, `velocidad`, `habilidad`, `id_puntos`) VALUES(22, 'teddy', 'normal', 'muy baja', 'aturdimiento en area', 22);
INSERT INTO `invocacion` (`id`, `nombre`, `elemento`, `velocidad`, `habilidad`, `id_puntos`) VALUES(23, 'teddy(evo)', 'normal', 'muy baja', 'aturdimiento en area', 23);
INSERT INTO `invocacion` (`id`, `nombre`, `elemento`, `velocidad`, `habilidad`, `id_puntos`) VALUES(24, 'rey cieno', 'normal', 'baja', 'aturde a todos los enemigos en pantalla', 24);
INSERT INTO `invocacion` (`id`, `nombre`, `elemento`, `velocidad`, `habilidad`, `id_puntos`) VALUES(25, 'pegajoso(evo)', 'normal', 'baja', 'critico 200% dmg', 25);
INSERT INTO `invocacion` (`id`, `nombre`, `elemento`, `velocidad`, `habilidad`, `id_puntos`) VALUES(26, 'moca(evo)', 'normal', 'alta', 'mordisco 200% dmg', 5);
INSERT INTO `invocacion` (`id`, `nombre`, `elemento`, `velocidad`, `habilidad`, `id_puntos`) VALUES(27, 'mr.flamin', 'fuego', 'baja', 'baja 50% de vida a lo largo de 5 seg', 6);
INSERT INTO `invocacion` (`id`, `nombre`, `elemento`, `velocidad`, `habilidad`, `id_puntos`) VALUES(30, 'flamin', 'fuego', 'baja', 'baja 50% de vida a lo largo de 5 seg', 7);
INSERT INTO `invocacion` (`id`, `nombre`, `elemento`, `velocidad`, `habilidad`, `id_puntos`) VALUES(31, 'montoncito', 'normal', 'muy alta', 'lanza 3 golpes con un 200% de daño', 8);
INSERT INTO `invocacion` (`id`, `nombre`, `elemento`, `velocidad`, `habilidad`, `id_puntos`) VALUES(32, 'Kevin', 'normal', 'media', 'dispara un rayo con sus tres cabezas dependiendo del ultimo elemento con el que dispare', 9);
INSERT INTO `invocacion` (`id`, `nombre`, `elemento`, `velocidad`, `habilidad`, `id_puntos`) VALUES(33, 'capuchino helado', 'hielo', 'muy alta', 'muerde y congela a los enemigos', 10);
INSERT INTO `invocacion` (`id`, `nombre`, `elemento`, `velocidad`, `habilidad`, `id_puntos`) VALUES(34, 'pyro', 'fuego', 'baja', 'lanza una bola de fuego que baja 50% de vida en area', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `utilidad`
--

CREATE TABLE `utilidad` (
  `id_puntos` int(11) NOT NULL,
  `normal` varchar(10) NOT NULL,
  `dificil` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `utilidad`
--

INSERT INTO `utilidad` (`id_puntos`, `normal`, `dificil`) VALUES(2, 'comun', 'bajo');
INSERT INTO `utilidad` (`id_puntos`, `normal`, `dificil`) VALUES(3, 'raro', 'alto');
INSERT INTO `utilidad` (`id_puntos`, `normal`, `dificil`) VALUES(4, 'raro', 'bajo');
INSERT INTO `utilidad` (`id_puntos`, `normal`, `dificil`) VALUES(5, 'raro', 'alto');
INSERT INTO `utilidad` (`id_puntos`, `normal`, `dificil`) VALUES(6, 'comun', 'bajo');
INSERT INTO `utilidad` (`id_puntos`, `normal`, `dificil`) VALUES(7, 'comun', 'bajo');
INSERT INTO `utilidad` (`id_puntos`, `normal`, `dificil`) VALUES(8, 'comun', 'bajo');
INSERT INTO `utilidad` (`id_puntos`, `normal`, `dificil`) VALUES(9, 'legendario', 'alto');
INSERT INTO `utilidad` (`id_puntos`, `normal`, `dificil`) VALUES(10, 'raro', 'alto');
INSERT INTO `utilidad` (`id_puntos`, `normal`, `dificil`) VALUES(11, 'epico', 'bajo');
INSERT INTO `utilidad` (`id_puntos`, `normal`, `dificil`) VALUES(22, 'epico', 'bajo');
INSERT INTO `utilidad` (`id_puntos`, `normal`, `dificil`) VALUES(23, 'epico', 'alto');
INSERT INTO `utilidad` (`id_puntos`, `normal`, `dificil`) VALUES(24, 'legendario', 'alto');
INSERT INTO `utilidad` (`id_puntos`, `normal`, `dificil`) VALUES(25, 'comun', 'alto');

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
-- Indices de la tabla `utilidad`
--
ALTER TABLE `utilidad`
  ADD PRIMARY KEY (`id_puntos`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `utilidad`
--
ALTER TABLE `utilidad`
  MODIFY `id_puntos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `invocacion`
--
ALTER TABLE `invocacion`
  ADD CONSTRAINT `fk_invocacion_utilidad` FOREIGN KEY (`id_puntos`) REFERENCES `utilidad` (`id_puntos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
