-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2021 a las 11:15:51
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
-- Base de datos: `bd_foro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro`
--

CREATE TABLE `foro` (
  `foro_id` int(11) NOT NULL,
  `foro_fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `foro_usu_id` int(11) NOT NULL,
  `foro_tema_id` int(11) NOT NULL,
  `foro_titulo` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `foro_mensaje` mediumtext COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `foro`
--

INSERT INTO `foro` (`foro_id`, `foro_fecha`, `foro_usu_id`, `foro_tema_id`, `foro_titulo`, `foro_mensaje`) VALUES
(4, '2021-03-09 15:41:40', 2, 1, 'Duda display', 'No sé como ocultar un div'),
(7, '2021-03-09 19:58:48', 2, 4, 'Esto es mas complicado', 'Hay 1000 select'),
(10, '2021-03-22 19:33:51', 2, 6, 'JQuery', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE `temas` (
  `tema_id` int(11) NOT NULL,
  `tema_titulo` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tema_descripcion` mediumtext COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`tema_id`, `tema_titulo`, `tema_descripcion`) VALUES
(1, 'PHP', 'Foro de php'),
(4, 'Mysql', 'Dudas de BBDD'),
(6, 'Javascript', ''),
(7, 'prueba', 'prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usu_id` int(11) NOT NULL,
  `usu_nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usu_clave` varchar(256) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usu_login` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usu_email` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usu_admin` tinyint(4) NOT NULL,
  `usu_foto` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usu_id`, `usu_nombre`, `usu_clave`, `usu_login`, `usu_email`, `usu_admin`, `usu_foto`) VALUES
(1, 'Administrador', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin_admin@hotmail.com', 1, 'u01.gif'),
(2, 'Pepe', '926e27eecdbc7a18858b3798ba99bddd', 'pepe', 'pepepe@hotmail.com', 0, 'u02.gif'),
(3, 'juan', 'a94652aa97c7211ba8954dd15a3cf838', 'juan', 'juan@gmail.com', 0, 'u03.gif'),
(4, 'javier', '3c9c03d6008a5adf42c2a55dd4a1a9f2', 'javier', 'javierruiztoledo@yahoo.es', 0, 'u04.gif'),
(5, 'Ramón', '28120ee7207fc21ace6c4840c9ea3e7f', 'ramón', 'ramon@gmail.com', 0, ''),
(6, 'Evaristo', '8dd30941629a6c7adc80ba313b05318d', 'eva', 'evaristo@gmail.com', 0, ''),
(7, 'ana', '276b6c4692e78d4799c12ada515bc3e4', 'ana', 'ana@yahoo.es', 0, ''),
(8, 'luis', '502ff82f7f1f8218dd41201fe4353687', 'luis', 'luis@hotmail.com', 0, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `foro`
--
ALTER TABLE `foro`
  ADD PRIMARY KEY (`foro_id`),
  ADD KEY `foro_usu_id` (`foro_usu_id`),
  ADD KEY `foro_tema_id` (`foro_tema_id`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`tema_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usu_id`),
  ADD UNIQUE KEY `usu_login` (`usu_login`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `foro`
--
ALTER TABLE `foro`
  MODIFY `foro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `temas`
--
ALTER TABLE `temas`
  MODIFY `tema_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `foro`
--
ALTER TABLE `foro`
  ADD CONSTRAINT `foro_ibfk_1` FOREIGN KEY (`foro_usu_id`) REFERENCES `usuarios` (`usu_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `foro_ibfk_2` FOREIGN KEY (`foro_tema_id`) REFERENCES `temas` (`tema_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
