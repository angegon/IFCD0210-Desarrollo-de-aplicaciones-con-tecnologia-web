-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2021 a las 08:53:43
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_comunidades`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidades`
--

CREATE TABLE `comunidades` (
  `com_id` int(11) NOT NULL,
  `com_nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `com_bandera` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comunidades`
--

INSERT INTO `comunidades` (`com_id`, `com_nombre`, `com_bandera`) VALUES
(1, 'Comunidad de Madrid', ''),
(2, 'Cataluña', ''),
(3, 'Comunidad Valenciana', ''),
(4, 'País Vasco', ''),
(5, 'Región de Murcia', ''),
(6, 'Galicia', ''),
(7, 'Aragón', ''),
(8, 'Asturias', ''),
(9, 'Canarias', ''),
(10, 'Cantabria', ''),
(11, 'Castilla y León', ''),
(12, 'Castilla-La Mancha', ''),
(13, 'Ceuta', ''),
(14, 'Extremadura', ''),
(15, 'Andalucía', ''),
(17, 'La Rioja', ''),
(18, 'Islas Baleares', ''),
(19, 'Melilla', ''),
(20, 'Navarra', '');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `densidad_poblacion_comunidad`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `densidad_poblacion_comunidad` (
`com_nombre` varchar(50)
,`SUM(p.prov_hab)` decimal(32,0)
,`SUM(p.prov_km2)` double(19,2)
,`Densidad` double(19,2)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `prov_id` int(11) NOT NULL,
  `prov_nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `prov_hab` int(11) NOT NULL,
  `prov_km2` float(11,2) NOT NULL,
  `prov_escudo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `prov_mapa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `prov_com_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`prov_id`, `prov_nombre`, `prov_hab`, `prov_km2`, `prov_escudo`, `prov_mapa`, `prov_com_id`) VALUES
(1, 'Madrid', 6779888, 80.27, 'madrid.png', 'madrid.png', 1),
(2, 'Barcelona', 5743402, 77.33, 'barcelona.png', 'barcelona.png', 2),
(3, 'Valencia', 5743402, 108.07, 'valencia.png', 'valencia.png', 3),
(4, 'Sevilla', 1950219, 140.36, 'sevilla.png', 'sevilla.png', 15),
(5, 'Alicante', 1879888, 58.17, 'alicante.png', 'alicante.png', 3),
(6, 'Málaga', 1685920, 73.06, 'málaga.png', 'málaga.png', 15),
(7, 'Murcia', 1511251, 113.13, 'murcia.png', 'murcia.png', 5),
(8, 'Cádiz', 1244049, 74.40, 'cádiz.png', 'cádiz.png', 15),
(9, 'Baleares', 1171543, 49.91, 'baleares.png', 'baleares.png', 18),
(10, 'Vizcaya', 1159443, 22.17, 'vizcaya.png', 'vizcaya.png', 4),
(11, 'Las Palmas', 1131065, 41.14, 'las palmas.png', 'las palmas.png', 9),
(12, 'La Coruña', 1121815, 79.50, 'la coruña.png', 'la coruña.png', 6),
(13, 'Santa Cruz de Tenerife', 1044887, 33.81, 'santa cruz de tenerife.png', 'santa cruz de tenerife.png', 9),
(14, 'Asturias', 1018784, 106.03, 'asturias.png', 'asturias.png', 8),
(15, 'Zaragoza', 972528, 172.74, 'zaragoza.png', 'zaragoza.png', 7),
(16, 'Pontevedra', 945408, 44.94, 'pontevedra.png', 'pontevedra.png', 6),
(17, 'Granada', 919168, 126.46, 'granada.png', 'granada.png', 15),
(18, 'Gerona', 761947, 39.12, 'gerona.png', 'gerona.png', 2),
(19, 'Tarragona', 804664, 57.88, 'tarragona.png', 'tarragona.png', 2),
(20, 'Córdoba', 781451, 137.71, 'córdoba.png', 'córdoba.png', 15),
(21, 'Almería', 727945, 87.75, 'almería.png', 'almería.png', 15),
(22, 'Guipúzcoa', 727121, 19.97, 'guipúzcoa.png', 'guipúzcoa.png', 4),
(23, 'Toledo', 703772, 153.69, 'toledo.png', 'toledo.png', 12),
(24, 'Badajoz', 672137, 217.66, 'badajoz.png', 'badajoz.png', 14),
(25, 'Navarra', 661197, 103.91, 'navarra.png', 'navarra.png', 20),
(26, 'Jaén', 631381, 134.96, 'jaén.png', 'jaén.png', 15),
(27, 'Castellón', 585590, 66.36, 'castellón.png', 'castellón.png', 3),
(28, 'Cantabria', 582905, 53.21, 'cantabria.png', 'cantabria.png', 10),
(29, 'Huelva', 524278, 101.27, 'huelva.png', 'huelva.png', 15),
(30, 'Valladolid', 520649, 81.10, 'valladolid.png', 'valladolid.png', 11),
(31, 'Ciudad Real', 495045, 198.13, 'ciudad real.png', 'ciudad real.png', 12),
(32, 'León', 456439, 155.80, 'león.png', 'león.png', 11),
(33, 'Lérida', 438517, 121.72, 'lérida.png', 'lérida.png', 2),
(34, 'Cáceres', 391850, 198.68, 'cáceres.png', 'cáceres.png', 14),
(35, 'Albacete', 388270, 149.26, 'albacete.png', 'albacete.png', 12),
(36, 'Burgos', 357650, 140.22, 'burgos.png', 'burgos.png', 11),
(37, 'Álava', 333940, 30.37, 'álava.png', 'álava.png', 4),
(38, 'Salamanca', 329245, 123.49, 'salamanca.png', 'salamanca.png', 11),
(39, 'Lugo', 327946, 98.56, 'lugo.png', 'lugo.png', 6),
(40, 'La Rioja', 319914, 50.45, 'la rioja.png', 'la rioja.png', 17),
(41, 'Orense', 306650, 72.73, 'orense.png', 'orense.png', 6),
(42, 'Guadalajara', 261955, 122.14, 'guadalajara.png', 'guadalajara.png', 12),
(43, 'Huesca', 222687, 156.36, 'huesca.png', 'huesca.png', 7),
(44, 'Cuenca', 196139, 171.40, 'cuenca.png', 'cuenca.png', 12),
(45, 'Zamora', 170588, 105.61, 'zamora.png', 'zamora.png', 11),
(46, 'Palencia', 160321, 80.52, 'palencia.png', 'palencia.png', 11),
(47, 'Ávila', 157664, 80.50, 'ávila.png', 'ávila.png', 11),
(48, 'Segovia', 153478, 69.20, 'segovia.png', 'segovia.png', 11),
(49, 'Teruel', 134176, 148.09, 'teruel.png', 'teruel.png', 7),
(50, 'Soria', 88884, 103.06, 'soria.png', 'soria.png', 12),
(51, 'Melilla', 87076, 12.30, 'melilla.png', 'melilla.png', 19),
(52, 'Ceuta', 84202, 18.50, 'ceuta.png', 'ceuta.png', 13);

-- --------------------------------------------------------

--
-- Estructura para la vista `densidad_poblacion_comunidad`
--
DROP TABLE IF EXISTS `densidad_poblacion_comunidad`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `densidad_poblacion_comunidad`  AS SELECT `c`.`com_nombre` AS `com_nombre`, sum(`p`.`prov_hab`) AS `SUM(p.prov_hab)`, sum(`p`.`prov_km2`) AS `SUM(p.prov_km2)`, round(sum(`p`.`prov_hab`) / sum(`p`.`prov_km2`),2) AS `Densidad` FROM (`comunidades` `c` join `provincias` `p`) WHERE `c`.`com_id` = `p`.`prov_com_id` GROUP BY `c`.`com_nombre` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comunidades`
--
ALTER TABLE `comunidades`
  ADD PRIMARY KEY (`com_id`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`prov_id`),
  ADD KEY `prov_com_id` (`prov_com_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comunidades`
--
ALTER TABLE `comunidades`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `prov_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD CONSTRAINT `r_prov_comunidad` FOREIGN KEY (`prov_com_id`) REFERENCES `comunidades` (`com_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
