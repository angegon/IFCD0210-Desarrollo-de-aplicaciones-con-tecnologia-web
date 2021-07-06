-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.28-log - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para bd_test
CREATE DATABASE IF NOT EXISTS `bd_test` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `bd_test`;


-- Volcando estructura para tabla bd_test.temas
CREATE TABLE IF NOT EXISTS `temas` (
  `tem_id` int(11) NOT NULL AUTO_INCREMENT,
  `tem_tema` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`tem_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla bd_test.temas: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `temas` DISABLE KEYS */;
INSERT INTO `temas` (`tem_id`, `tem_tema`) VALUES
	(1, 'BBDD'),
	(2, 'POO'),
	(3, 'Java'),
	(4, 'HTML'),
	(5, 'CSS'),
	(6, 'Javascript'),
	(7, 'Sistemas');
/*!40000 ALTER TABLE `temas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

-- Volcando estructura para tabla bd_test.preguntas
CREATE TABLE IF NOT EXISTS `preguntas` (
  `preg_id` int(11) NOT NULL AUTO_INCREMENT,
  `preg_pregunta` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `preg_respuesta_1` mediumtext COLLATE utf8_spanish_ci,
  `preg_respuesta_2` mediumtext COLLATE utf8_spanish_ci,
  `preg_respuesta_3` mediumtext COLLATE utf8_spanish_ci,
  `preg_respuesta_4` mediumtext COLLATE utf8_spanish_ci,
  `preg_tem_tema_id` int(11) NOT NULL,
  `preg_respuesta_buena` int(11) NOT NULL,
  PRIMARY KEY (`preg_id`),
  KEY `preg_tem_tema_id` (`preg_tem_tema_id`),
  CONSTRAINT `FK_preguntas_temas` FOREIGN KEY (`preg_tem_tema_id`) REFERENCES `temas` (`tem_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla bd_test.preguntas: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
INSERT INTO `preguntas` (`preg_id`, `preg_pregunta`, `preg_respuesta_1`, `preg_respuesta_2`, `preg_respuesta_3`, `preg_respuesta_4`, `preg_tem_tema_id`, `preg_respuesta_buena`) VALUES
	(1, 'Una clave principal', 'Es el campo mas importante de la tabla', 'Tiene que ser entero', 'Garantiza valor úico para todos los registros', 'Tiene que existir su valor en otra tabla', 1, 3),
	(2, 'na clave foránea', 'Asegura valor único para todo los registros', 'Tiene que ser entero', 'Tiene que existir su valor  en otra tabla', ' ', 1, 3);
/*!40000 ALTER TABLE `preguntas` ENABLE KEYS */;
