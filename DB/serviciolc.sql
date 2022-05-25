-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.24-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para serviciolc
DROP DATABASE IF EXISTS `serviciolc`;
CREATE DATABASE IF NOT EXISTS `serviciolc` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `serviciolc`;

-- Volcando estructura para tabla serviciolc.inventario
DROP TABLE IF EXISTS `inventario`;
CREATE TABLE IF NOT EXISTS `inventario` (
  `id_inventario` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  PRIMARY KEY (`id_inventario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla serviciolc.inventario: ~0 rows (aproximadamente)
DELETE FROM `inventario`;

-- Volcando estructura para tabla serviciolc.productos
DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `idproduct` varchar(20) CHARACTER SET latin1 NOT NULL,
  `nombre` varchar(255) CHARACTER SET latin1 NOT NULL,
  `descripcion` varchar(500) CHARACTER SET latin1 NOT NULL,
  `precio` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `UNIQUE` (`idproduct`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla serviciolc.productos: ~4 rows (aproximadamente)
DELETE FROM `productos`;
INSERT INTO `productos` (`id`, `idproduct`, `nombre`, `descripcion`, `precio`) VALUES
	(5, 'RM3A75CL', 'Ron Medellin Añejo 750ml', 'Ron medellin con 3 años de añejamiento, presentacion de 750ml', 44000),
	(6, 'RM3A1L', 'Ron Medellin Añejo 1L', 'Ron medellin con 3 años de añejamiento, presentacion de 1L', 55000),
	(8, 'RM3A2L', 'Ron Medellin Añejo 2L', 'Ron medellin con 3 años de añejamiento, presentacion de 2L', 110000),
	(9, 'VSL75CL', 'Vodka Smirnoff Lulo ', 'Vodka lulo 750 ml ', 40003);

-- Volcando estructura para tabla serviciolc.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id_rol` varchar(10) NOT NULL,
  `rol` varchar(30) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla serviciolc.roles: ~3 rows (aproximadamente)
DELETE FROM `roles`;
INSERT INTO `roles` (`id_rol`, `rol`) VALUES
	('1', 'admin'),
	('2', 'user'),
	('3', 'seller');

-- Volcando estructura para tabla serviciolc.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usser` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usser` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contacto` varchar(50) NOT NULL DEFAULT '',
  `id_rol` varchar(10) NOT NULL,
  PRIMARY KEY (`id_usser`),
  KEY `id_rol` (`id_rol`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla serviciolc.usuarios: ~4 rows (aproximadamente)
DELETE FROM `usuarios`;
INSERT INTO `usuarios` (`id_usser`, `nombre`, `apellido`, `usser`, `password`, `contacto`, `id_rol`) VALUES
	(0, '', '', '', '', '', '2'),
	(45495988, 'Cisle', 'Guerrero', 'CguerreroP', '1502', '3106045653', '2'),
	(1001969100, 'Elian', 'Osorio', 'EosorioG', '0627', '3173113767', '2'),
	(1002248643, 'Haider', 'Lopez', 'HlopezG', '0320', '3045997311', '1'),
	(1007126392, 'Marcos', 'Osorio ', 'Eldex0323', 'M@rcos0323', '3135993598', '2');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
