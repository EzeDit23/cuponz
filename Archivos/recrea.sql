-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-02-2019 a las 22:11:46
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `recrea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avisos`
--

CREATE TABLE `avisos` (
  `id_aviso` int(6) NOT NULL,
  `empresa` varchar(300) NOT NULL,
  `categoria` varchar(300) NOT NULL,
  `link` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `avisos`
--

INSERT INTO `avisos` (`id_aviso`, `empresa`, `categoria`, `link`) VALUES
(1, 'Dafiti', 'Indumentaria', 'nosesabe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descuentos`
--

CREATE TABLE `descuentos` (
  `id_descuento` int(6) NOT NULL,
  `codigo` tinytext NOT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `porcentaje` int(6) DEFAULT NULL,
  `empresa` varchar(300) NOT NULL,
  `categoria` varchar(300) NOT NULL,
  `limite` int(6) DEFAULT NULL,
  `cantidad` int(6) DEFAULT NULL,
  `mes` varchar(50) DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `descuentos`
--

INSERT INTO `descuentos` (`id_descuento`, `codigo`, `nombre`, `porcentaje`, `empresa`, `categoria`, `limite`, `cantidad`, `mes`, `link`) VALUES
(1, 'D8F7S5', '1 Grande de muzza', 50, 'Fabrica de pizzas', 'Gastronomia', 10, 10, 'Febrero', 'nose'),
(2, 'D8S7Q5', '1 remera ', 40, 'Dafiti', 'Indumentaria', 10, 10, 'febrero', 'nose'),
(3, 'D8B2S4', '1 Corte masquilino', 20, 'BarberMax', 'Belleza', 10, 10, 'febrero', 'nose');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vecinos`
--

CREATE TABLE `vecinos` (
  `id` int(6) NOT NULL,
  `cant_des` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `numero` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vecinos`
--

INSERT INTO `vecinos` (`id`, `cant_des`, `email`, `clave`, `nombre`, `apellido`, `direccion`, `numero`) VALUES
(1, 10, 'nada@gmail.com', '7777', 'Marcos', 'Dituri', 'campo de mayo 6249', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avisos`
--
ALTER TABLE `avisos`
  ADD PRIMARY KEY (`id_aviso`);

--
-- Indices de la tabla `descuentos`
--
ALTER TABLE `descuentos`
  ADD PRIMARY KEY (`id_descuento`);

--
-- Indices de la tabla `vecinos`
--
ALTER TABLE `vecinos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avisos`
--
ALTER TABLE `avisos`
  MODIFY `id_aviso` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `descuentos`
--
ALTER TABLE `descuentos`
  MODIFY `id_descuento` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `vecinos`
--
ALTER TABLE `vecinos`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
