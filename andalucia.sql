-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 24-02-2022 a las 09:56:02
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

CREATE TABLE `alumnos` (
  `id` int NOT NULL,
  `nombre` text COLLATE utf8mb4_general_ci NOT NULL,
  `idClase` int NOT NULL,
  `puntuaciones` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monumentos`
--

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
(1, 1, 'La Alhambra', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Dawn_Charles_V_Palace_Alhambra_Granada_Andalusia_Spain.jpg/1200px-Dawn_Charles_V_Palace_Alhambra_Granada_Andalusia_Spain.jpg'),
(2, 2, 'Real Alcázar', 'https://ep01.epimg.net/elviajero/imagenes/2020/10/22/actualidad/1603354702_198953_1603365325_noticia_normal.jpg'),
(3, 2, 'Torre del Oro', 'https://offloadmedia.feverup.com/sevillasecreta.co/wp-content/uploads/2016/01/20100521/shutterstock_1336593305-1-1024x597.jpg'),
(4, 3, 'Alcazar de los Reyes Cristianos', 'https://www.mmms.de/c24/alcazar_cordoba_cabecera2.jpg'),
(5, 4, 'Muelle del Río Tinto', 'https://turismo.huelva.es/sites/default/files/blocks/image/muelle%20rio%20tinto%20%28Medium%29.png'),
(6, 5, 'Alcazaba de Málaga', 'https://guias-viajar.com/wp-content/uploads/2017/08/M%C3%A1laga-Alcazaba-FB-008.jpg'),
(7, 6, 'Cable Inglés', 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Cable_Ingles_Almeria.jpg/1200px-Cable_Ingles_Almeria.jpg'),
(8, 5, 'Alcazaba de Antequera', 'https://www.amigosdeloscastillos.es/wp-content/uploads/2019/01/ANTEQUERA.jpg'),
(9, 4, 'Monumento a Colón', 'https://www.huelvainformacion.es/2019/04/20/huelva/Monumento-Colon-Punta-Sebo_1347476754_98694581_667x375.jpg'),
(10, 1, 'Corral del Carbón', 'https://www.granadaporelmundo.com/wp-content/uploads/2018/10/Corral-del-Carbon-Featured-960x540.jpg'),
(11, 7, 'Torre Tavira', 'https://www.tegustaviajar.com/wp-content/uploads/2019/04/torre-tavira.jpg'),
(12, 8, 'Convento de Santo Domingo', 'conventoSantoDomingo.jpg'),
(13, 3, 'La Mezquita', 'https://mymodernmet.com/wp/wp-content/uploads/2020/02/Mezquita-Cordoba-1.jpg'),
(14, 7, 'Castillo de San Sebastián', 'https://static.guiarepsol.com/fichas-gr/media/thumbnails/filer_public/58/00/580060b8-0c32-4133-822a-13850ef1efdf/castillo_de_san_sebastian_cadiz_cadiz_1284x642_q75_middle.jpg'),
(15, 7, 'Puerta de Tierra', 'https://turismo.cadiz.es/sites/default/files/styles/ancho-800/public/rutas-y-visitas/Puerta%20de%20Tierra%20%287%29.jpg?itok=d6I-x9Jx'),
(16, 7, 'Catedral de Cádiz', 'https://catedraldecadiz.com/wp-content/uploads/exterior-fachada-1920px-catedral-cadiz.jpg'),
(17, 7, 'Castillo de Santa Catalina', 'https://owaytours.com/wp-content/uploads/2020/08/precios-del-castillo-de-santa-catalina.jpg'),
(18, 7, 'Gran Teatro Falla', 'https://www.cadiztur.com/wp-content/uploads/2020/05/theatre-falla-cadix.jpg'),
(19, 2, 'La Giralda', 'https://www.mercerhoteles.com/photo/blog/45/1/sevilla-a-los-pies-de-la-giralda.jpg?w=1440'),
(20, 2, 'Palacio de San Telmo', 'https://www.visitasevilla.es/sites/default/files/place/img_header/palacio_san_telmo.jpg'),
(21, 2, 'Huevo de Colón', 'https://static1-sevilla.abc.es/media/sevilla/2020/06/03/s/huevo-colon-report-kBvD--1200x630@abc.jpg'),
(22, 4, 'Catedral de la Merced', 'https://astelus.com/wp-content/viajes/la-catedral-de-huelva-400x2681.jpg'),
(23, 4, 'Muelle de las Carabelas', 'https://lalaviajera.com/wp-content/uploads/2014/10/Muelle-Carabelas-Palos-Frontera-Huelva.jpg'),
(24, 5, 'Castillo de Gibralfaro', 'https://vacacionesenmalaga.com/wp-content/uploads/2015/03/Castillo-de-Gibralfaro-1a.jpg'),
(25, 5, 'Monumento a Torrijos', 'https://cdn.cityplan.es/admin/wCJz4ZSJMTmKNGw79b4QdRah0y2Mof.jpg'),
(26, 5, 'Palacio de Buenavista', 'https://upload.wikimedia.org/wikipedia/commons/8/85/Palacio_de_Buenavista_%2814203354114%29_%28cropped%29.jpg'),
(30, 1, 'Generalife', 'https://fotos.hoteles.net/articulos/generalife-granada-7565-1.jpg'),
(31, 1, 'Monasterio de la Cartuja', 'https://upload.wikimedia.org/wikipedia/commons/9/9e/Monasterio_de_la_Cartuja_Granada.jpg'),
(32, 1, 'Convento del Carmen', 'https://mispaseosporgranada.files.wordpress.com/2016/11/convento-del-carmen-ayuntamiento-003.jpg'),
(33, 3, 'Medina Azahara', 'https://www.turismodecordoba.org/archivos/2019/201905150906520000001557904012.7283.jpg'),
(34, 4, 'Monasterio de la Rábida', 'https://atrapahuelva.com/wp-content/uploads/2020/03/Monasterio-de-la-Ra%CC%81bida.png'),
(35, 3, 'Palacio de Viana', 'https://www.cordobahoy.es/media/cordobahoy/images/2017/01/05/2017010516460954566.jpg'),
(36, 3, 'Plaza de la Corredera', 'https://www.artencordoba.com/fotos/plazas/FOTOS/PLAZA_CORREDERA/PLAZA_CORREDERA_CORDOBA_01.jpg'),
(37, 6, 'Cerro de san Cristóbal', 'https://almeriaisdifferent.com/wp-content/uploads/2020/07/Imagen-de-iOS-780x470.jpg'),
(38, 6, 'Casa de las Mariposas', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Almeria_Puerta_de_Purchena_fcm.jpg/1200px-Almeria_Puerta_de_Purchena_fcm.jpg'),
(39, 6, 'Casa del Cine', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/08/a0/df/62/casa-del-cine.jpg?w=1200&h=-1&s=1'),
(40, 6, 'Cortijo Cuevas Negras', 'https://s2.wklcdn.com/image_7/228995/21442383/13468742Master.jpg'),
(41, 8, 'Camarín de Jesús', 'https://cdn.cityplan.es/admin/2014-03-05125232_thumbnail_1393609726.jpg'),
(42, 8, 'Arco de San Lorenzo', 'https://www.horajaen.com/wp-content/uploads/2016/05/29201416-e1463650304492.jpg'),
(43, 8, 'Refugio Antiaéreo', 'https://www.inspain.org/imgs3/sitios/3/9/5/jgegpxkxtniripahlbdbmf33le_2000.jpg'),
(44, 8, 'Judería de Jaén', 'https://elviajedephotographyto.com/wp-content/uploads/2018/01/Ja%C3%A9n-blog-31.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

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

CREATE TABLE `puntuaciones` (
  `id` int NOT NULL,
  `clase` text COLLATE utf8mb4_general_ci NOT NULL,
  `puntuacion` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `puntuaciones`
--

INSERT INTO `puntuaciones` (`id`, `clase`, `puntuacion`) VALUES
(1, '1º ESO', 0),
(2, '2º ESO', 0),
(3, '3º ESO', 0),
(4, '4º ESO', 6),
(5, '1º FPGM', 0),
(6, '2º FPGM', 0),
(7, '1º FPGS', 0),
(8, '2º FPGS', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idClase` (`idClase`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT de la tabla `monumentos`
--
ALTER TABLE `monumentos`
  MODIFY `idMonumentos` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

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
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`idClase`) REFERENCES `puntuaciones` (`id`);

--
-- Filtros para la tabla `monumentos`
--
ALTER TABLE `monumentos`
  ADD CONSTRAINT `monumentos_ibfk_1` FOREIGN KEY (`idProvincia`) REFERENCES `provincias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
