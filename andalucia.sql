-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-02-2022 a las 18:32:10
-- Versión del servidor: 8.0.28-0ubuntu0.20.04.3
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `andalucia`
--
CREATE DATABASE IF NOT EXISTS `andalucia` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `andalucia`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE `alumnos` (
  `id` int NOT NULL,
  `nombre` text COLLATE utf8mb4_general_ci NOT NULL,
  `idClase` int NOT NULL,
  `puntuaciones` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monumentos`
--

DROP TABLE IF EXISTS `monumentos`;
CREATE TABLE `monumentos` (
  `idMonumentos` int NOT NULL,
  `idProvincia` int NOT NULL,
  `monumento` text COLLATE utf8mb4_general_ci NOT NULL,
  `imagen` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `monumentos`
--

INSERT INTO `monumentos` (`idMonumentos`, `idProvincia`, `monumento`, `imagen`) VALUES
(1, 1, 'La Alhambra', 'laAhambra.jpg'),
(2, 2, 'Real Alcázar', 'realAlcazar.jpg'),
(3, 2, 'Torre del Oro', 'torreDelOro.jpg'),
(4, 3, 'Alcazar de los Reyes Cristianos', 'alcazarReyesCristianos.jpg'),
(5, 4, 'Muelle del Río Tinto', 'muelleRioTinto.jpg'),
(6, 5, 'Alcazaba de Málaga', 'alcazabaMalaga.jpg'),
(7, 6, 'Cable Inglés', 'cableIngles.jpg'),
(8, 5, 'Alcazaba de Antequera', 'alcazabaAntequera.jpg'),
(9, 4, 'Monumento a Colón', 'monumentoColon.jpg'),
(10, 1, 'Corral del Carbón', 'corralDelCarbon.jpg'),
(11, 7, 'Torre Tavira', 'torreTavira.jpg'),
(12, 8, 'Real Convento de Santo Domingo', 'realConventoSantoDomingo.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

DROP TABLE IF EXISTS `provincias`;
CREATE TABLE `provincias` (
  `id` int NOT NULL,
  `provincia` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id`, `provincia`) VALUES
(1, 'Granada'),
(2, 'Sevilla'),
(3, 'Córdoba'),
(4, 'Huelva'),
(5, 'Málaga'),
(6, 'Almería'),
(7, 'Cádiz'),
(8, 'Jaén');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntuaciones`
--

DROP TABLE IF EXISTS `puntuaciones`;
CREATE TABLE `puntuaciones` (
  `id` int NOT NULL,
  `clase` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `puntuaciones`
--

INSERT INTO `puntuaciones` (`id`, `clase`) VALUES
(1, '1º ESO A'),
(2, '1º ESO B'),
(3, '1º ESO C'),
(4, '1º ESO D'),
(5, '2º ESO A'),
(6, '2º ESO B'),
(7, '2º ESO C'),
(8, '2º ESO D'),
(9, '3º ESO A'),
(10, '3º ESO B'),
(11, '3º ESO C'),
(12, '3º ESO D'),
(13, 'FPGM 1º SMR');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `monumentos`
--
ALTER TABLE `monumentos`
  ADD PRIMARY KEY (`idMonumentos`),
  ADD KEY `idProvincia` (`idProvincia`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `puntuaciones`
--
ALTER TABLE `puntuaciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `monumentos`
--
ALTER TABLE `monumentos`
  MODIFY `idMonumentos` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `puntuaciones`
--
ALTER TABLE `puntuaciones`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `monumentos`
--
ALTER TABLE `monumentos`
  ADD CONSTRAINT `monumentos_ibfk_1` FOREIGN KEY (`idProvincia`) REFERENCES `provincias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
