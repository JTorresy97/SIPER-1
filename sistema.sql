-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-04-2024 a las 18:21:03
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sistema`
--
CREATE DATABASE IF NOT EXISTS `sistema` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `sistema`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  `email` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(250) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleproducto_proveedor`
--

CREATE TABLE IF NOT EXISTS `detalleproducto_proveedor` (
  `id` int(11) NOT NULL,
  `idProveedor` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventa`
--

CREATE TABLE IF NOT EXISTS `detalleventa` (
  `id` int(11) NOT NULL,
  `descripción` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `idVenta` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `cantidad`, `precio`) VALUES
(1, 'colores', 'caja x 24', 100, '5000'),
(2, 'lapicero bic', 'negro', 220, '550'),
(3, 'lapiz No. 2', 'norma', 100, '250'),
(4, 'plastilina', 'caja x 24', 65, '450'),
(5, 'crayolas', 'caja x 24', 100, '750'),
(6, 'colbon', '100ml', 50, '650'),
(7, 'lapiz rojo', 'caja x 12', 100, '200'),
(8, 'papel cartón', 'resma x 50', 400, '150'),
(9, 'tempera', 'caja x 6', 20, '7000'),
(10, 'cuaderno cuadriculado', '100 hojas cocido', 200, '8000'),
(12, 'cuaderno ferrocarríl', 'cocido 50 hojas', 25, '4500'),
(13, 'carpeta', 'plastica tamaño carta', 50, '550'),
(14, 'clip', 'caja de 100 unidades', 30, '400'),
(15, 'bloc', 'cuadriculado 50 hojas', 35, '3200'),
(17, 'cartulina', 'color negro tamaño octavo', 200, '200'),
(18, 'cuaderno cuadriculado', 'argollado 100 hojas', 50, '8000'),
(19, 'resaltador', 'colores variados', 50, '500'),
(20, 'corrector', 'tipo lapicero', 20, '650'),
(21, 'sobre de manila', 'tamaño oficio', 50, '150'),
(22, 'chinches', 'caja 50 unidades', 15, '450'),
(23, 'lapicero', 'color rojo', 25, '500'),
(24, 'limpiapipas', 'colores variados', 100, '300'),
(25, 'pincel', 'calibre 5mm', 20, '1200'),
(26, 'regla', '30 cms', 50, '450'),
(27, 'plumón', 'caja de 12 colores', 50, '4800'),
(28, 'cinta métrica', '100 cms', 25, '650'),
(29, 'cuaderno ', 'cuadriculado grande 100 hojas', 50, '10000'),
(30, 'papel mantequilla', 'resma x 50', 20, '100'),
(31, 'papel carbón', 'sobre de 50 hojas', 20, '100'),
(32, 'calculadora', 'científica', 20, '20000'),
(33, 'escarcha', 'caja x 12', 50, '1000'),
(34, 'Pincel', 'No 5', 50, '800'),
(35, 'Borrador', 'Smile', 21, '1000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `id` int(11) NOT NULL,
  `contacto` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `proveedor` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` enum('1','2','3','4') COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(250) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `contacto`, `direccion`, `proveedor`, `estado`, `telefono`) VALUES
(1, 'Santiago Rendón', 'Libertades 123, Ciudad Central', 'Papelmania S.A.', '1', '(555) 123-4567'),
(2, 'Rocío Jimenez', 'Calle Primavera 456, Barrio Flores', 'Suministros Escolares López', '1', '(555) 987-6543'),
(3, 'Carolina Paez', 'Av. Revolución 789, Colonia Moderna', 'Distribuidora Papel & Más', '1', '(555) 321-7890'),
(5, 'María Sepúlveda', 'Av. Benito Juárez 1234, Colonia Vista Hermosa', 'Papelería El Libro Abierto', '1', '(555) 890-1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `password`, `nombre`, `tipo_usuario`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrador', 1),
(2, 'usuario', 'b665e217b51994789b02b1838e730d6b93baa30f', 'Usuario Estandar', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `id` int(11) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `total` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalleproducto_proveedor`
--
ALTER TABLE `detalleproducto_proveedor`
  ADD PRIMARY KEY (`id`), ADD KEY `detalleproducto_proveedor_ibfk_2` (`idProveedor`), ADD KEY `detalleproducto_porveedor_ibfk_1` (`idProducto`);

--
-- Indices de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD PRIMARY KEY (`id`), ADD KEY `detalleventa_ibfk_1` (`idVenta`), ADD KEY `detalleventa_ibfk_2` (`idProducto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `direccion` (`direccion`), ADD UNIQUE KEY `direccion_2` (`direccion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`), ADD KEY `venta_ibfk_1` (`idCliente`), ADD KEY `venta_ibfk_2` (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `detalleproducto_proveedor`
--
ALTER TABLE `detalleproducto_proveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT > 1;
--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalleproducto_proveedor`
--
ALTER TABLE `detalleproducto_proveedor`
ADD CONSTRAINT `detalleproducto_porveedor_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`id`),
ADD CONSTRAINT `detalleproducto_proveedor_ibfk_2` FOREIGN KEY (`idProveedor`) REFERENCES `proveedor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
ADD CONSTRAINT `detalleventa_ibfk_1` FOREIGN KEY (`idVenta`) REFERENCES `venta` (`id`),
ADD CONSTRAINT `detalleventa_ibfk_2` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`id`),
ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
