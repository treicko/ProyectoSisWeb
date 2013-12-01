-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-12-2013 a las 22:29:32
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `autoventabd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE IF NOT EXISTS `vehiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `anio` int(11) NOT NULL,
  `chasis` varchar(100) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `preciooferta` float NOT NULL,
  `precioventa` float NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `marca`, `modelo`, `anio`, `chasis`, `descripcion`, `tipo`, `estado`, `preciooferta`, `precioventa`, `foto`) VALUES
(9, 'Nissan', 'Frontier', 2003, 'X-S-D-W-X-X', 'auto todo terreno', '4x4', 1, 15000, 15000, 'xla-2010-los-25-mejores-fondos-de-escritorio-740.jpg.pagespeed.ic.Hilpaa91ft.jpg'),
(10, 'Toyota', 'Celica', 2006, 'X-S-D-W-X-X', 'auto todo deportico', 'deportivo', 0, 15000, 15000, '311420_10150315861973479_549953478_8126799_884149714_n.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
