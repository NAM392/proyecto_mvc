-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u6
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-03-2021 a las 23:36:02
-- Versión del servidor: 5.5.62-0+deb8u1
-- Versión de PHP: 5.6.40-0+deb8u6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `nminnicelli_asistecontador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clienteinscripto`
--

CREATE TABLE IF NOT EXISTS `clienteinscripto` (
  `cuil_cuit` bigint(11) NOT NULL,
  `id_impuesto` int(200) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `fecha_realiz` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clienteinscripto`
--

INSERT INTO `clienteinscripto` (`cuil_cuit`, `id_impuesto`, `estado`, `fecha_realiz`) VALUES
(20987654321, 3, 'si', '2020-11-17'),
(20987654321, 8, 'no', '0000-00-00'),
(27123456789, 3, 'no', '0000-00-00'),
(27123456789, 6, 'no', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listacliente`
--

CREATE TABLE IF NOT EXISTS `listacliente` (
  `cuil_cuit` bigint(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `dni` int(20) NOT NULL,
  `domicilio` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `celular` int(50) NOT NULL,
  `honorarios` int(50) DEFAULT NULL,
  `fecha_inicio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `listacliente`
--

INSERT INTO `listacliente` (`cuil_cuit`, `nombre`, `dni`, `domicilio`, `mail`, `celular`, `honorarios`, `fecha_inicio`) VALUES
(20987654321, 'maria valenzuela', 98765432, 'santa fe 1930', 'marimari@hotmail.com', 1582926743, 6350, '2020-07-31'),
(27123456789, 'juan perez', 12345678, 'lacroze 123', 'jperex@gmail.com', 15123456, 1500, '2020-10-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listadeudores`
--

CREATE TABLE IF NOT EXISTS `listadeudores` (
`id_deudor` int(200) NOT NULL,
  `cuil_cuit` bigint(11) NOT NULL,
  `monto_deuda` int(50) NOT NULL,
  `fecha_debe` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `listadeudores`
--

INSERT INTO `listadeudores` (`id_deudor`, `cuil_cuit`, `monto_deuda`, `fecha_debe`) VALUES
(1, 27123456789, 8000, '2020-04-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listaimpuesto`
--

CREATE TABLE IF NOT EXISTS `listaimpuesto` (
`id_impuesto` int(200) NOT NULL,
  `nombre_impuesto` varchar(50) NOT NULL,
  `fecha_imp` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `listaimpuesto`
--

INSERT INTO `listaimpuesto` (`id_impuesto`, `nombre_impuesto`, `fecha_imp`) VALUES
(1, 'iva', '2020-10-27'),
(2, 'ganancias y bienes personales', '2020-10-27'),
(3, 'iibb arba anticipo', '2020-10-27'),
(5, 'iibb agip anticipo', '2020-10-27'),
(6, 'iibb convenio anticipo', '2020-10-27'),
(7, 'monotributo', '0000-00-00'),
(8, 'iibb arba anual', '2020-10-27'),
(9, 'iibb agip anual', '2020-10-27'),
(10, 'iibb convenio anual', '2020-10-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listavencemes`
--

CREATE TABLE IF NOT EXISTS `listavencemes` (
`id_vencemes` int(200) NOT NULL,
  `id_impuesto` int(200) NOT NULL,
  `ultimo_num_cui` int(1) NOT NULL,
  `f_mes` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `listavencemes`
--

INSERT INTO `listavencemes` (`id_vencemes`, `id_impuesto`, `ultimo_num_cui`, `f_mes`) VALUES
(1, 3, 9, '2020-06-01'),
(3, 3, 1, '2020-11-19'),
(4, 6, 9, '2020-12-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listavenceyear`
--

CREATE TABLE IF NOT EXISTS `listavenceyear` (
`id_venceyr` int(200) NOT NULL,
  `id_impuesto` int(200) NOT NULL,
  `ultimo_num_cui` int(1) NOT NULL,
  `f_year` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `listavenceyear`
--

INSERT INTO `listavenceyear` (`id_venceyr`, `id_impuesto`, `ultimo_num_cui`, `f_year`) VALUES
(1, 8, 1, '2020-06-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `usuario` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clienteinscripto`
--
ALTER TABLE `clienteinscripto`
 ADD PRIMARY KEY (`cuil_cuit`,`id_impuesto`);

--
-- Indices de la tabla `listacliente`
--
ALTER TABLE `listacliente`
 ADD PRIMARY KEY (`cuil_cuit`);

--
-- Indices de la tabla `listadeudores`
--
ALTER TABLE `listadeudores`
 ADD PRIMARY KEY (`id_deudor`);

--
-- Indices de la tabla `listaimpuesto`
--
ALTER TABLE `listaimpuesto`
 ADD PRIMARY KEY (`id_impuesto`);

--
-- Indices de la tabla `listavencemes`
--
ALTER TABLE `listavencemes`
 ADD PRIMARY KEY (`id_vencemes`);

--
-- Indices de la tabla `listavenceyear`
--
ALTER TABLE `listavenceyear`
 ADD PRIMARY KEY (`id_venceyr`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `listadeudores`
--
ALTER TABLE `listadeudores`
MODIFY `id_deudor` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `listaimpuesto`
--
ALTER TABLE `listaimpuesto`
MODIFY `id_impuesto` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `listavencemes`
--
ALTER TABLE `listavencemes`
MODIFY `id_vencemes` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `listavenceyear`
--
ALTER TABLE `listavenceyear`
MODIFY `id_venceyr` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
