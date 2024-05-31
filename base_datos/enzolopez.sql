-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2024 a las 04:13:08
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `enzolopez`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `descripcion`) VALUES
(1, 'monitores'),
(2, 'perifericos'),
(3, 'silla_gamer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `id_consulta` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `mensaje` varchar(500) NOT NULL,
  `leido` varchar(11) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`id_consulta`, `nombre`, `apellido`, `email`, `telefono`, `mensaje`, `leido`) VALUES
(8, 'Javier', 'Gomez', 'javi@gmail.com', '3794112233', 'Hola, esto es una consulta.', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id_perfil` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfil`, `descripcion`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre_prod` varchar(100) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `precio` float NOT NULL,
  `precio_vta` float NOT NULL,
  `stock` int(11) NOT NULL,
  `stock_min` int(11) NOT NULL,
  `eliminado` varchar(20) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_prod`, `imagen`, `id_categoria`, `precio`, `precio_vta`, `stock`, `stock_min`, `eliminado`) VALUES
(1, 'Monitor Curvo Samsung 24\'\' F390 Full HD FreeSync', '1716244464_3ac68c7ac81f5c6536d9.png', 1, 150000, 185000, 10, 20, 'NO'),
(3, 'Auriculares Gamer Wesdar GH31 Black RGB RCA Y-Adapter', '1716244625_e9ebe1d8c6431c0df82a.png', 2, 5999.99, 8999.99, 10, 15, 'NO'),
(4, 'Silla Gamer AK-Racing Gaming Chair OCTANE Blue (Peso MAX. 150kg)', '1716244839_666696f578e16ee3b9fe.png', 3, 300000, 400000, 5, 10, 'NO'),
(5, 'Joystick Xbox Inalambrico Robot White Bluetooth PC/XBOX', '1716244990_5a86631fd183f07e663c.png', 2, 100000, 130000, 15, 20, 'NO'),
(6, 'Teclado Gaming Retroiluminado Wesdar MK4 BR', '1716246577_56efc21284274b67e988.png', 2, 11000, 14000, 15, 25, 'NO'),
(7, 'Mouse Redragon Centrophorus M601 RGB', '1716246660_f831bdb979c23f97cea0.png', 2, 4999.99, 7999.99, 15, 10, 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `localidad` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `codigo_postal` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `id_perfil` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(50) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `ciudad`, `localidad`, `direccion`, `codigo_postal`, `email`, `telefono`, `nombre_usuario`, `pass`, `id_perfil`, `baja`) VALUES
(3, 'enzo', 'lopez', 'corrientes', 'corrientes capital', 'callefalsa123', 3400, 'ejemplo@gmail.com', '3494112233', 'chenzo', '$2y$10$GYerIbQcx7/bCPRDZbM1X.8amn0YTFgsRjPvKaxAhj90lj0giovnW', 2, 'NO'),
(4, 'rodolfo', 'correa', 'corrientes', 'corrientes capital', 'callefalsa123', 3400, 'rodo@gmail.com', '3494112233', 'rodo', '$2y$10$gI1xKptIMj1rliqP.paaM.gB.dOeGN5toJBnbyqx/fv3LT/uQODBC', 1, 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_detalle`
--

CREATE TABLE `ventas_detalle` (
  `id_vta_detalle` int(11) NOT NULL,
  `id_vta_cabe` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_cabecera`
--

CREATE TABLE `venta_cabecera` (
  `id_vta_cabe` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `id_usuario` int(11) NOT NULL,
  `total_venta` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id_consulta`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_perfil` (`id_perfil`);

--
-- Indices de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  ADD PRIMARY KEY (`id_vta_detalle`),
  ADD KEY `id_vta_cabe` (`id_vta_cabe`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `venta_cabecera`
--
ALTER TABLE `venta_cabecera`
  ADD PRIMARY KEY (`id_vta_cabe`),
  ADD KEY `ventas_cabecera_ibfk_1` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  MODIFY `id_vta_detalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venta_cabecera`
--
ALTER TABLE `venta_cabecera`
  MODIFY `id_vta_cabe` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `perfiles` (`id_perfil`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  ADD CONSTRAINT `ventas_detalle_ibfk_1` FOREIGN KEY (`id_vta_cabe`) REFERENCES `venta_cabecera` (`id_vta_cabe`),
  ADD CONSTRAINT `ventas_detalle_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);

--
-- Filtros para la tabla `venta_cabecera`
--
ALTER TABLE `venta_cabecera`
  ADD CONSTRAINT `ventas_cabecera_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
