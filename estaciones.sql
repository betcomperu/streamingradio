-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-09-2020 a las 02:23:06
-- Versión del servidor: 10.3.20-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estacion`
--

DROP TABLE IF EXISTS `estacion`;
CREATE TABLE IF NOT EXISTS `estacion` (
  `idestacion` int(11) NOT NULL AUTO_INCREMENT,
  `nombrestacion` varchar(105) DEFAULT NULL,
  `detallestacion` varchar(45) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `condicion` tinyint(1) DEFAULT 1,
  `idusuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`idestacion`),
  KEY `fk_estacion_usuario_idx` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estacion`
--

INSERT INTO `estacion` (`idestacion`, `nombrestacion`, `detallestacion`, `categoria`, `url`, `pais`, `condicion`, `idusuario`) VALUES
(1, 'BEST SMOOTH JAZZ - UK (LONDON)', 'Musica de salón', 'Jazz', 'http://64.95.243.43:8002', 'ES', 1, 1),
(2, 'Radio Magica 88.3', 'La mejor música de los 80s ', 'Rock', 'http://18253.live.streamtheworld.com/MAG_AAC.', 'PE', 1, 2),
(3, 'CHILL OUT SMOTH', 'La buena musica Chill Out', 'Jazz', 'http://144.217.158.181:80/live', 'Perú', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `idrol` int(11) NOT NULL AUTO_INCREMENT,
  `nombrerol` varchar(45) NOT NULL,
  PRIMARY KEY (`idrol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `nombrerol`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `email` varchar(65) DEFAULT NULL,
  `user` varchar(45) NOT NULL,
  `clave` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `condicion` tinyint(1) NOT NULL DEFAULT 1,
  `idrol` int(11) NOT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `fk_usuarios_rol_idx` (`idrol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `apellidos`, `email`, `user`, `clave`, `pais`, `foto`, `condicion`, `idrol`) VALUES
(1, 'Alberto', 'Chávez', 'albetho@hotmail.com', 'camisea', '3292b64225849daae9a7da78b89422af', 'Perú', NULL, 1, 1),
(2, 'Juan', 'Perez', 'jperez@gmai.com', 'jperez', '3292b64225849daae9a7da78b89422af', 'Perú', NULL, 1, 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estacion`
--
ALTER TABLE `estacion`
  ADD CONSTRAINT `fk_estacion_usuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuarios_rol` FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
