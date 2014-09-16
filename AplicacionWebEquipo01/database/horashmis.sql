-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-07-2014 a las 23:46:38
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `horashmis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` text NOT NULL,
  `fecha` text NOT NULL,
  `hora` text NOT NULL,
  `tipo` text NOT NULL,
  `aforo` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `Nombre`, `fecha`, `hora`, `tipo`, `aforo`, `descripcion`, `updated_at`, `created_at`) VALUES
(5, 'Cincuenta sombras de Grey', '2015-02-14', '09:00', 'C', 200, 'Estreno de la película ''Cincuenta sombras de Grey'' en cine Monumental (Almería)', '2014-07-29', '2014-07-29'),
(6, 'Concierto Dani Martin', '2014-08-01', '23:00', 'B', 1500, 'Concierto musical de Dani Marti´n en Berja (Almería) en la plaza de toros.', '2014-07-29', '2014-07-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `nombre` text NOT NULL,
  `apellidos` text NOT NULL,
  `telefono` int(11) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL,
  `remember_token` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `password`, `email`, `nombre`, `apellidos`, `telefono`, `updated_at`, `created_at`, `remember_token`) VALUES
(4, 'cargarflu', '$2y$10$dBKlVPVkL5laZE.x.EwY/u0xdtT0dSTV5WX9n5nVyr3E6ujD2fxOq', 'cargarflu@hotmail.com', 'carmen', 'garcia', 666222222, '2014-07-29', '2014-07-17', 'Pm17xHausgBfCpSEzqYeUr9szRnhuZbc6TsMDjXv48zpxsmNwLffmOeMwSim'),
(5, 'administrador1', '$2y$10$tubCk4lk20g1kiPMIRp3Mugx.2e1BoPuUpEQzbFLLmdjrOa69.7c2', 'admin1@hotmail.com', 'Admin', 'Lopez Gonzalez', 950114466, '2014-07-28', '2014-07-24', 'Apd5jTWxGSWA5IgjA251jeKjGtj2x7OtjaBImv91NneghVlQuPN01kL79TrI'),
(6, 'maria123', '$2y$10$gmeLOfDjMkSP1igKCuJCs..uyTVt3tbIQd1SuWu7VBQhTL906sstK', 'maria@hotmail.com', 'maria', 'beas lorenzo', 95088, '2014-07-24', '2014-07-24', ''),
(11, 'administrador', '$2y$10$nYt4CHbNPm13SW.LjXdSR.Eew5duGFiTdygZ2/WIjovm0/hBlD1Fe', 'admin@hotmail.com', 'Antonio', 'López Rodríguez', 950111222, '2014-07-29', '2014-07-28', 'ehqK7ezVACyipcghRsr8nJFYu4niAebHy0JZfmHZtWFfidg1z9bDHc8hZivm'),
(12, 'isabela27', '$2y$10$I.tO1YY/XhQB9HUcxgSxU.XapyF3HreRT9hMWVQZmCzigUicLjZTK', 'isabela27@hotmail.com', 'Isabela', 'Gámez Joya', 675340176, '2014-07-28', '2014-07-28', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
