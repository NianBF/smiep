-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-03-2022 a las 00:54:54
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `smiep`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE `caja` (
  `id_caja` int(11) NOT NULL,
  `tipoCaja` varchar(50) DEFAULT 'Normal'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_cat` int(11) NOT NULL,
  `nCategoria` varchar(50) NOT NULL,
  `descripcion` text DEFAULT 'Sin detalles'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_cat`, `nCategoria`, `descripcion`) VALUES
(11, 'Lacteos', 'Sin detalles'),
(12, 'Granos', 'Sin detalles'),
(13, 'Gaseosas', 'Sin detalles'),
(14, 'Cereales', 'Sin detalles'),
(15, 'Aceites', 'Sin detalles'),
(16, 'Panes', 'Sin detalles'),
(17, 'Golosinas', 'Sin detalles'),
(18, 'Snacks', 'Paquetes de papas'),
(19, 'Galletas', 'Sin detalles'),
(20, 'Enlatados', 'Sin detalles'),
(21, 'Pastas', 'Sin detalles'),
(100, 'Otros', 'Sin detalles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliDoc` int(11) NOT NULL,
  `nombreCli1` varchar(50) NOT NULL,
  `nombreCli2` varchar(50) DEFAULT NULL,
  `apellidoCli1` varchar(50) NOT NULL,
  `apellidoCli2` varchar(50) DEFAULT NULL,
  `direccionCli` varchar(100) NOT NULL,
  `telCli` int(11) NOT NULL,
  `emailCli` varchar(100) NOT NULL,
  `fechaNac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliDoc`, `nombreCli1`, `nombreCli2`, `apellidoCli1`, `apellidoCli2`, `direccionCli`, `telCli`, `emailCli`, `fechaNac`) VALUES
(123, 'heiver', '', 'cuesta', '', 'fdsfd', 34234, 'us@smiep.co', '2022-03-07'),
(1000257220, 'nicolas', 'steven', 'perez', 'garcia', 'kra 22v # 54a sur', 2147483647, 'nico@gmail.com', '2001-05-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(11) NOT NULL,
  `cantidadCP` double(16,4) NOT NULL,
  `descripcionVT` text DEFAULT 'Sin detalles',
  `creadoEn` datetime NOT NULL,
  `id_doc` int(11) NOT NULL,
  `id_docPov` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `tEstado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `tEstado`) VALUES
(3, 'Agotado'),
(2, 'Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_prod` int(11) NOT NULL,
  `imgProd` varchar(255) DEFAULT NULL,
  `codBar` varchar(50) NOT NULL,
  `nombreProd` varchar(50) NOT NULL,
  `descripcion` text DEFAULT 'Sin detalles',
  `precio` double(10,2) NOT NULL,
  `cantidadMin` int(11) NOT NULL DEFAULT 1,
  `cantidadDisp` int(11) NOT NULL DEFAULT 1,
  `tipoPresentacion` varchar(50) NOT NULL,
  `creadoEn` datetime NOT NULL,
  `id_docUsu` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_prod`, `imgProd`, `codBar`, `nombreProd`, `descripcion`, `precio`, `cantidadMin`, `cantidadDisp`, `tipoPresentacion`, `creadoEn`, `id_docUsu`, `id_cat`, `id_estado`) VALUES
(4020, NULL, '7705686512124', 'Coca-Cola', 'Sin detalles', 0.00, 1, 1, 'Botella pl├ística', '2022-02-17 00:00:00', 1002563489, 13, 2),
(4021, NULL, '7705686512134', 'Alqueria', 'Sin detalles', 0.00, 1, 1, 'Bolsa pl├ística', '2022-02-17 00:00:00', 1002563489, 11, 2),
(4022, NULL, '7705686512144', 'Oreo', 'Sin detalles', 0.00, 1, 1, 'Paquete peque├▒o', '2022-02-17 00:00:00', 1002563489, 19, 2),
(4023, NULL, '7705686512154', 'Big-Cola', 'Sin detalles', 0.00, 1, 1, 'Botella pl├ística', '2022-02-17 00:00:00', 1002563489, 13, 2),
(4024, NULL, '7705686512164', 'Doria', 'Sin detalles', 0.00, 1, 1, 'Bolsa', '2022-02-17 00:00:00', 1002563489, 21, 2),
(4025, NULL, '7705686512174', 'Gol', 'Sin detalles', 0.00, 1, 1, 'Individual', '2022-02-17 00:00:00', 1002563490, 17, 2),
(4026, NULL, '7705686512184', 'L├ípiz 9B', 'Sin detalles', 0.00, 1, 1, 'Individual', '2022-02-17 00:00:00', 1002563489, 100, 2),
(4027, NULL, '7705686512194', 'Bimbo', 'Sin detalles', 23.00, 1, 1, 'Bolsa grande', '2022-02-17 00:00:00', 1002563490, 16, 2),
(4028, NULL, '7705686512204', 'Duraznos', 'Duraznos en almibar', 0.00, 1, 1, 'Lata', '2022-02-17 00:00:00', 1002563489, 20, 2),
(4029, NULL, '7705686512214', 'Gourmet', 'Sin detalles', 0.00, 1, 1, 'Botella pl├ística', '2022-02-17 00:00:00', 1002563490, 15, 3),
(121314, 'asd', '123456789000', 'xsx', 'Sin detalles', 222.00, 2, 5, 'botella 54', '0000-00-00 00:00:00', 1002563489, 13, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id_promo` int(11) NOT NULL,
  `nomPromo` varchar(100) NOT NULL,
  `descuento` varchar(50) DEFAULT NULL,
  `cantAgregada` int(11) DEFAULT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_DocProv` int(11) NOT NULL,
  `imgEmpresa` varchar(255) DEFAULT NULL,
  `nombProv1` varchar(50) NOT NULL,
  `nombProv2` varchar(50) DEFAULT NULL,
  `apeProv1` varchar(50) NOT NULL,
  `apeProv2` varchar(50) DEFAULT NULL,
  `empresa` varchar(50) NOT NULL,
  `direccion1` varchar(100) NOT NULL,
  `direccion2` varchar(100) DEFAULT NULL,
  `numTel1` int(11) NOT NULL,
  `numTel2` int(11) DEFAULT NULL,
  `email1` varchar(100) NOT NULL,
  `email2` varchar(100) DEFAULT NULL,
  `creadoEn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_DocProv`, `imgEmpresa`, `nombProv1`, `nombProv2`, `apeProv1`, `apeProv2`, `empresa`, `direccion1`, `direccion2`, `numTel1`, `numTel2`, `email1`, `email2`, `creadoEn`) VALUES
(3232, '', 'ejempo', 'dsa', 'ds', '', 'ejemplo', 'dsad', '', 323232323, 0, 'ejemplo@gmail.com', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `id_ti` int(11) NOT NULL,
  `nombreTienda` varchar(50) NOT NULL,
  `direccionTi` varchar(100) NOT NULL,
  `telTi` int(11) NOT NULL,
  `emailTi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`id_ti`, `nombreTienda`, `direccionTi`, `telTi`, `emailTi`) VALUES
(0, '', '', 32323, ''),
(1, 'Tienda Express', 'Bosa, Bogota', 2147483647, 'expressmarket@smiep.com.co'),
(121212, 'x', 'x', 2321314, 'us@smiep.co');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_doc` int(11) NOT NULL,
  `nombre1` varchar(50) NOT NULL,
  `nombre2` varchar(50) DEFAULT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) DEFAULT NULL,
  `userName` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `creadoEn` datetime NOT NULL,
  `id_ti` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_doc`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `userName`, `email`, `pass`, `rol`, `creadoEn`, `id_ti`, `id_estado`) VALUES
(1000234, 'Nicolas', 'steven', 'Perez', 'garcia', 'NicSteven', 'nic@smiep.com', '2a2e9a58102784ca18e2605a4e727b5f', 'Administrador', '0000-00-00 00:00:00', 1, 2),
(1000257220, 'laura', 'valentina', 'diaz', 'hurtado', 'lau12', 'lau@smiep.com', '91f5167c34c400758115c2a6826ec2e3', 'administrador', '0000-00-00 00:00:00', 1, 2),
(1002563489, 'Jeison', NULL, 'Estupi├▒an', NULL, 'jeiestu', 'jesisone@smiep.com.co', '91f5167c34c400758115c2a6826ec2e3', 'Administrador', '2022-03-15 00:00:00', 1, 2),
(1002563490, 'Gerardo', 'Camilo', 'Narvaez', 'Cort├®s', 'gecanarco', 'gerarnarco@smiep.com.co', '088ef99bff55c67dc863f83980a66a9b', 'Empleado', '2022-03-16 00:00:00', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `cantidadVT` double(16,4) NOT NULL,
  `descripcionVT` text DEFAULT 'Sin detalles',
  `creadoEn` datetime NOT NULL,
  `id_caja` int(11) NOT NULL,
  `id_cliDoc` int(11) NOT NULL,
  `id_doc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caja`
--
ALTER TABLE `caja`
  ADD PRIMARY KEY (`id_caja`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliDoc`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_doc` (`id_doc`),
  ADD KEY `id_docPov` (`id_docPov`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`),
  ADD UNIQUE KEY `tEstado` (`tEstado`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_prod`),
  ADD UNIQUE KEY `codBar` (`codBar`),
  ADD KEY `id_docUsu` (`id_docUsu`),
  ADD KEY `id_cat` (`id_cat`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id_promo`),
  ADD UNIQUE KEY `nomPromo` (`nomPromo`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_DocProv`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`id_ti`),
  ADD UNIQUE KEY `direccionTi` (`direccionTi`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_doc`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_ti` (`id_ti`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_caja` (`id_caja`),
  ADD KEY `id_cliDoc` (`id_cliDoc`),
  ADD KEY `id_doc` (`id_doc`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`id_doc`) REFERENCES `usuario` (`id_doc`),
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`id_docPov`) REFERENCES `proveedor` (`id_docProv`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_docUsu`) REFERENCES `usuario` (`id_doc`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_cat`) REFERENCES `categoria` (`id_cat`),
  ADD CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);

--
-- Filtros para la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD CONSTRAINT `promociones_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_ti`) REFERENCES `tienda` (`id_ti`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_caja`) REFERENCES `caja` (`id_caja`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`id_cliDoc`) REFERENCES `cliente` (`id_cliDoc`),
  ADD CONSTRAINT `venta_ibfk_3` FOREIGN KEY (`id_doc`) REFERENCES `usuario` (`id_doc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
