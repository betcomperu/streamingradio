-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-02-2020 a las 06:17:45
-- Versión del servidor: 5.6.37
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `radioestaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estacion`
--

CREATE TABLE IF NOT EXISTS `estacion` (
  `idestacion` int(255) NOT NULL,
  `nombrestacion` varchar(255) NOT NULL,
  `detallestacion` varchar(255) DEFAULT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `pais` varchar(255) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estacion`
--

INSERT INTO `estacion` (`idestacion`, `nombrestacion`, `detallestacion`, `categoria`, `url`, `pais`, `estado`) VALUES
(1, ' The World''s First 24/7 Since 2000 - KJAZ.DB)', 'Musica variada en ingles con mucho sonido stereo', 'Jazz', 'http://149.56.155.209:80', 'DE', NULL),
(2, 'Radio Integridad', 'Programación continua de temas de familia y vida cristiana', 'Espiritual', 'http://62.210.189.222:9292', 'PE', NULL),
(3, 'Norman Brown - Acoustic Time (ABCLounge)', 'Musica instrumental con estilos variados de Jazz Chillout', 'Variado', 'http://listen.radionomy.com/ABC-Lounge', 'US', NULL),
(4, 'Radio Programas del Perú', 'Radio peruana de noticias y programas variados', 'Noticias', 'https://19473.live.streamtheworld.com/RADIO_RPP.mp3', 'PE', NULL),
(5, 'Radio Magica 88.3', 'Rock de todas las decadas , la mejor radio de los 70s, 80s, en Inglés', 'Rock', 'http://18253.live.streamtheworld.com/MAG_AAC.aac', 'PE', NULL),
(6, 'Bay Smoth Jazz', 'Musica de la mejor Jazz en tu radio', 'Jazz', 'http://185.33.22.22:9010', 'US', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `pais` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `apellidos`, `email`, `user`, `clave`, `pais`, `foto`, `estado`) VALUES
(1, 'Alberto', 'Chávez Rodríguez', 'albetho@hotmail.com', 'camisea', '3292b64225849daae9a7da78b89422af', 'Perú', NULL, 1),
(2, 'Jose', 'Alves', 'achrod@outlook.com', 'beto', '120901', 'Perú', '', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estacion`
--
ALTER TABLE `estacion`
  ADD PRIMARY KEY (`idestacion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estacion`
--
ALTER TABLE `estacion`
  MODIFY `idestacion` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
