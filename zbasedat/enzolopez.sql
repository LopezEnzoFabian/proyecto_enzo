-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2024 a las 03:07:43
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
(1, 'Monitores'),
(2, 'Perifericos'),
(3, 'Sillas gamer');

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
(8, 'Javier', 'Gomez', 'javi@gmail.com', '3794112233', 'Hola, esto es una consulta.', 'SI'),
(10, 'enzo', 'lopez', 'ejemplo@gmail.com', '3494112233', 'esto  es una consulta de usuario', 'SI'),
(12, 'enzo', 'lopez', 'ejemplo@gmail.com', '3494112233', 'Hola, esta es una consulta de usuario', 'NO'),
(13, 'Javier', 'Lopez', 'javi@gmail.com', '3794112233', 'Hola, esto es una consulta de un visitante que no es usuario.', 'NO');

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
(27, 'Monitor ASUS', '1717552347_2c8a79f2556f7ac92f89.jpg', 1, 80000, 100000, 50, 10, 'NO'),
(29, 'Monitor LG ', '1717552777_61924a122de5f1530073.jpg', 1, 100000, 140000, 49, 10, 'NO'),
(30, 'Monitor Curvo Samsung', '1717552816_6786f50273976277f14f.jpg', 1, 120000, 185000, 50, 10, 'NO'),
(31, 'Teclado Gaming Retroiluminado Wesdar MK4 BR', '1717552858_ebf6eb508ad9b1bff570.jpg', 2, 5000, 7000, 1, 10, 'NO'),
(32, 'Teclado mecánico RGB2', '1717552899_ff3f976d817111aac2d2.jpg', 2, 5000, 10000, 13, 10, 'NO'),
(33, 'Teclado mecanico RGB', '1717552928_de5548fcfacfc12f2af2.jpg', 2, 30000, 40000, 1, 10, 'NO'),
(41, 'Silla Gamer Cougar Armor ELITE Black (Peso MAX. 120kg)', '1718321043_11ff107664100319d6d1.jpg', 3, 120000, 150000, 10, 5, 'NO'),
(42, 'Silla Gamer AK-Racing Gaming Chair OCTANE Red (Peso MAX. 150kg) ', '1718321297_bc9d7e242f1b54b346d1.jpg', 3, 350000, 425000, 10, 1, 'NO'),
(43, 'Silla Gamer AK-Racing Gaming Chair OCTANE Blue (Peso MAX. 150kg)', '1718321336_b3858e168bc8054b6537.jpg', 3, 350000, 450000, 10, 1, 'NO'),
(44, 'Joystick Redragon Harrow G808 Wireless PC', '1718321381_925ce0f9a3c959e9a4a5.jpg', 2, 25000, 34000, 10, 1, 'NO'),
(45, 'Joystick Xbox Inalambrico Robot White Bluetooth PC/XBOX', '1718321410_c750b0abe6017fa86445.jpg', 2, 100000, 129000, 1, 1, 'NO'),
(46, 'Auriculares Gamer Wesdar GH31 Black RGB RCA Y-Adapter', '1718321466_d55e36a8677f098d3db6.jpg', 2, 5000, 10000, 10, 1, 'NO'),
(47, 'Auriculares Redragon Hylas H260 RGB Pink', '1718321513_e3a96746289f1b800f7f.jpg', 2, 20000, 30000, 9, 1, 'NO'),
(48, 'Silla Gamer Noblechairs EPIC White Edition - Blanco (Peso MAX. 120kg)', '1718321660_50d6b0bbaae954c1d66c.jpg', 3, 425000, 500000, 4, 1, 'NO'),
(49, 'Monitor Gamer LG 32\" UltraGear 32GN600 165Hz VA 2K QHD', '1718321721_208d1e2ba581bb94e35a.jpg', 1, 455000, 510000, 4, 1, 'NO');

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

--
-- Volcado de datos para la tabla `ventas_detalle`
--

INSERT INTO `ventas_detalle` (`id_vta_detalle`, `id_vta_cabe`, `id_producto`, `cantidad`, `precio`) VALUES
(57, 104, 48, 1, 500000),
(58, 104, 47, 1, 30000),
(59, 105, 49, 1, 510000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_cabecera`
--

CREATE TABLE `venta_cabecera` (
  `id_vta_cabe` int(11) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `id_usuario` int(11) NOT NULL,
  `total_venta` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `venta_cabecera`
--

INSERT INTO `venta_cabecera` (`id_vta_cabe`, `fecha`, `id_usuario`, `total_venta`) VALUES
(104, '2024-06-13', 3, 530000),
(105, '2024-06-14', 3, 510000);

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
  ADD KEY `venta_cabecera_ibfk_1` (`id_usuario`);

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
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  MODIFY `id_vta_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `venta_cabecera`
--
ALTER TABLE `venta_cabecera`
  MODIFY `id_vta_cabe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

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
  ADD CONSTRAINT `venta_cabecera_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
