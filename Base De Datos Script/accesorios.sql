-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-12-2013 a las 23:52:40
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
-- Estructura de tabla para la tabla `accesorios`
--

CREATE TABLE IF NOT EXISTS `accesorios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `anio` int(11) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `preciooferta` float NOT NULL,
  `precioventa` float NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `accesorios`
--

INSERT INTO `accesorios` (`id`, `marca`, `modelo`, `anio`, `descripcion`, `categoria`, `preciooferta`, `precioventa`, `foto`) VALUES
(1, 'NONY', 'nissa', 2006, 'Aro de magnecio', 'Aros de magnecio', 123, 124, '3184458586_79892f17a6.jpg'),
(2, 'Akyta', 'nissan', 2008, 'PAra todo tipo de vehiculos', 'volante', 125, 124, '294162_267955456564335_183872588305956_1087243_8317261_n.jpg'),
(4, 'LG', 'all', 2002, 'radio adaptado', 'radio', 100, 100, '319520_10150347200888479_549953478_8308668_1382371684_n.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
