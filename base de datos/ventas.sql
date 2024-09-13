-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2024 a las 01:23:09
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `descrip_marca` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `descrip_marca`) VALUES
(1, 'nike'),
(2, 'adidas'),
(3, 'puma'),
(4, 'reebock');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `total` int(11) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `fecha`, `total`, `estado`, `id_usuario`) VALUES
(1, '2024-08-01', 150, 'Pendiente', 5),
(2, '2024-08-02', 200, 'Completado', 4),
(3, '2024-08-03', 175, 'Cancelado', 5),
(4, '2024-08-04', 300, 'Pendiente', 4),
(5, '2024-08-05', 220, 'Completado', 5),
(6, '2024-08-06', 450, 'Pendiente', 4),
(7, '2024-08-07', 500, 'Completado', 5),
(8, '2024-08-08', 350, 'Pendiente', 4),
(9, '2024-08-09', 275, 'Cancelado', 5),
(10, '2024-08-10', 600, 'Completado', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `color` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL,
  `talla` int(11) NOT NULL,
  `descrip_producto` varchar(30) NOT NULL,
  `precio_unitario` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `color`, `stock`, `talla`, `descrip_producto`, `precio_unitario`, `id_marca`) VALUES
(1, 'Negro', 50, 42, 'Zapatilla running', 100, 1),
(2, 'Blanco', 30, 41, 'Zapatilla de tenis', 120, 2),
(3, 'Rojo', 70, 40, 'Zapatilla de baloncesto', 150, 3),
(4, 'Azul', 90, 43, 'Zapatilla de fútbol', 80, 4),
(5, 'Verde', 60, 44, 'Zapatilla de trekking', 110, 1),
(6, 'Gris', 40, 42, 'Zapatilla de entrenamiento', 90, 2),
(7, 'Amarillo', 20, 39, 'Zapatilla casual', 70, 3),
(8, 'Naranja', 35, 40, 'Zapatilla de crossfit', 130, 4),
(9, 'Rosa', 25, 41, 'Zapatilla para correr', 95, 2),
(10, 'Morado', 55, 43, 'Zapatilla de ciclismo', 140, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_pedido`
--

CREATE TABLE `producto_pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto_pedido`
--

INSERT INTO `producto_pedido` (`id_pedido`, `id_producto`, `cantidad`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 3, 3),
(4, 4, 1),
(5, 5, 2),
(6, 6, 4),
(7, 7, 1),
(8, 8, 2),
(9, 9, 3),
(10, 10, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion`
--

CREATE TABLE `sesion` (
  `id_sesion` int(11) NOT NULL,
  `descrip_sesion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sesion`
--

INSERT INTO `sesion` (`id_sesion`, `descrip_sesion`) VALUES
(1, 'gerente'),
(2, 'administrador'),
(3, 'tecnico'),
(4, 'empleado'),
(5, 'cliente'),
(6, 'invitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ci` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nro_celular` int(11) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `id_sesion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ci`, `nombre`, `apellido`, `password`, `email`, `nro_celular`, `direccion`, `id_sesion`) VALUES
(1, 'Juan', 'Perez', 'password1', 'juan.perez@example.com', 1234567890, 'Calle Falsa 123', 5),
(2, 'Maria', 'Lopez', 'password2', 'maria.lopez@example.com', 2147483647, 'Avenida Siempre Viva 456', 5),
(3, 'Carlos', 'Gomez', 'password3', 'carlos.gomez@example.com', 2147483647, 'Calle Central 789', 4),
(4, 'Laura', 'Martinez', 'password4', 'laura.martinez@example.com', 987654321, 'Boulevard del Sol 321', 3),
(5, 'Ana', 'Gonzalez', 'password5', 'ana.gonzalez@example.com', 555555555, 'Calle Luna 111', 2),
(6, 'Pedro', 'Sanchez', 'password6', 'pedro.sanchez@example.com', 666666666, 'Avenida Estrella 222', 1),
(7, 'Luis', 'Ramirez', 'password7', 'luis.ramirez@example.com', 777777777, 'Calle Mar 333', 6),
(8, 'Sofia', 'Fernandez', 'password8', 'sofia.fernandez@example.com', 888888888, 'Avenida Oceano 444', 5),
(9, 'David', 'Hernandez', 'password9', 'david.hernandez@example.com', 999999999, 'Calle Cielo 555', 4),
(10, 'Lucia', 'Diaz', 'password10', 'lucia.diaz@example.com', 1010101010, 'Boulevard Tierra 666', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `fk_pedido_usuario` (`id_usuario`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `fk_producto_marca` (`id_marca`);

--
-- Indices de la tabla `producto_pedido`
--
ALTER TABLE `producto_pedido`
  ADD PRIMARY KEY (`id_pedido`,`id_producto`),
  ADD KEY `fk_producto_pedido_producto` (`id_producto`);

--
-- Indices de la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD PRIMARY KEY (`id_sesion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ci`),
  ADD KEY `fk_usuario_sesion` (`id_sesion`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_pedido_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`ci`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_producto_marca` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto_pedido`
--
ALTER TABLE `producto_pedido`
  ADD CONSTRAINT `fk_producto_pedido_pedido` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_producto_pedido_producto` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_sesion` FOREIGN KEY (`id_sesion`) REFERENCES `sesion` (`id_sesion`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
