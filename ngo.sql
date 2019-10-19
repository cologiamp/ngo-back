-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2019 a las 06:43:46
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ngo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ngoId` int(11) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Volcado de datos para la tabla `donation`
--

INSERT INTO `donation` (`id`, `ngoId`, `amount`, `created`) VALUES
(27, 3, '95', '2019-10-19 02:28:55'),
(28, 1, '257', '2019-10-19 02:47:49'),
(29, 2, '257', '2019-10-19 02:48:03'),
(30, 3, '52', '2019-10-19 03:25:48'),
(31, 2, '85', '2019-10-19 03:25:52'),
(32, 2, '52', '2019-10-19 03:27:27'),
(33, 2, '54', '2019-10-19 03:27:30'),
(34, 2, '37', '2019-10-19 03:57:30'),
(35, 3, '20', '2019-10-19 04:21:03'),
(36, 3, '20', '2019-10-19 04:21:19'),
(37, 3, '20', '2019-10-19 04:21:26'),
(38, 1, '13', '2019-10-19 04:21:32'),
(39, 2, '25', '2019-10-19 04:21:38'),
(40, 3, '25', '2019-10-19 04:22:27'),
(41, 3, '25', '2019-10-19 04:22:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ngo`
--

CREATE TABLE IF NOT EXISTS `ngo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `ngo`
--

INSERT INTO `ngo` (`id`, `name`, `created`) VALUES
(1, 'Doctors Without Borders', '2019-10-18 02:00:27'),
(2, 'Habitat For Humanity', '2019-10-18 02:00:53'),
(3, 'UNHCR', '2019-10-18 02:00:53');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
