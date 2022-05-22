CREATE TABLE `caja` (
  `id_caja` int(100) NOT NULL,
  `tipoCaja` varchar(50) DEFAULT 'Normal'
);

CREATE TABLE `categoria` (
  `id_cat` int(100) NOT NULL,
  `nCategoria` varchar(50) NOT NULL,
  `descripcion` text
);

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

CREATE TABLE `cliente` (
  `id_cliDoc` int(100) NOT NULL,
  `nombreCli1` varchar(50) NOT NULL,
  `nombreCli2` varchar(50) DEFAULT NULL,
  `apellidoCli1` varchar(50) NOT NULL,
  `apellidoCli2` varchar(50) DEFAULT NULL,
  `direccionCli` varchar(100) NOT NULL,
  `telCli` int(20) NOT NULL,
  `emailCli` varchar(100) NOT NULL,
  `fechaNac` date NOT NULL
);

CREATE TABLE `compra` (
  `id_compra` int(100) NOT NULL,
  `cantidadCP` double(16,4) NOT NULL,
  `descripcionVT` text DEFAULT NULL,
  `creadoEn` datetime NOT NULL,
  `id_doc` int(100) NOT NULL,
  `id_docPov` int(100) NOT NULL
);

CREATE TABLE `estado` (
  `id_estado` int(100) NOT NULL,
  `tEstado` varchar(20) NOT NULL
);

INSERT INTO `estado` (`id_estado`, `tEstado`) VALUES
(3, 'Agotado'),
(2, 'Disponible');

CREATE TABLE `producto` (
  `id_prod` int(100) NOT NULL,
  `imgProd` varchar(255) DEFAULT NULL,
  `codBar` varchar(50) NOT NULL,
  `nombreProd` varchar(50) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` double(10,2) NOT NULL,
  `catidadMin` int(11) NOT NULL DEFAULT 1,
  `cantidadDisp` int(11) NOT NULL DEFAULT 1,
  `tipoPresentacion` varchar(50) NOT NULL,
  `creadoEn` datetime NOT NULL,
  `id_docUsu` int(100) NOT NULL,
  `id_cat` int(100) NOT NULL,
  `id_estado` int(100) NOT NULL
);

INSERT INTO `producto` (`id_prod`, `imgProd`, `codBar`, `nombreProd`, `descripcion`, `precio`, `catidadMin`, `cantidadDisp`, `tipoPresentacion`, `creadoEn`, `id_docUsu`, `id_cat`, `id_estado`) VALUES
(4020, '', '7705686512124', 'Coca-Cola', 'Sin detalles', 2500.00, 1, 26, 'Botella plástica', '2022-02-17 00:00:00', 1002563489, 13, 2),
(4021, NULL, '7705686512134', 'Alqueria', 'Sin detalles', 0.00, 1, 1, 'Bolsa plástica', '2022-02-17 00:00:00', 1002563489, 11, 2),
(4022, NULL, '7705686512144', 'Oreo', 'Sin detalles', 0.00, 1, 1, 'Paquete pequeño', '2022-02-17 00:00:00', 1002563489, 19, 2),
(4023, NULL, '7705686512154', 'Big-Cola', 'Sin detalles', 0.00, 1, 1, 'Botella plástica', '2022-02-17 00:00:00', 1002563489, 13, 2),
(4024, NULL, '7705686512164', 'Doria', 'Sin detalles', 0.00, 1, 1, 'Bolsa', '2022-02-17 00:00:00', 1002563489, 21, 2),
(4025, NULL, '7705686512174', 'Gol', 'Sin detalles', 0.00, 1, 1, 'Individual', '2022-02-17 00:00:00', 1002563490, 17, 2),
(4026, NULL, '7705686512184', 'Lápiz 9B', 'Sin detalles', 0.00, 1, 1, 'Individual', '2022-02-17 00:00:00', 1002563489, 100, 2),
(4027, NULL, '7705686512194', 'Bimbo', 'Sin detalles', 0.00, 1, 1, 'Bolsa grande', '2022-02-17 00:00:00', 1002563490, 16, 2),
(4028, NULL, '7705686512204', 'Duraznos', 'Duraznos en almibar', 0.00, 1, 1, 'Lata', '2022-02-17 00:00:00', 1002563489, 20, 2),
(4029, NULL, '7705686512214', 'Gourmet', 'Sin detalles', 0.00, 1, 1, 'Botella plástica', '2022-02-17 00:00:00', 1002563490, 15, 3);

CREATE TABLE `promociones` (
  `id_promo` int(100) NOT NULL,
  `nomPromo` varchar(100) NOT NULL,
  `descuento` varchar(50) DEFAULT NULL,
  `cantAgregada` int(11) DEFAULT NULL,
  `id_estado` int(100) NOT NULL
);

CREATE TABLE `proveedor` (
  `id_docPov` int(100) NOT NULL,
  `imgEmpresa` varchar(255) DEFAULT NULL,
  `nombProv1` varchar(50) NOT NULL,
  `nombProv2` varchar(50) DEFAULT NULL,
  `appelProv1` varchar(50) NOT NULL,
  `apellProv2` varchar(50) DEFAULT NULL,
  `empresa` varchar(50) NOT NULL,
  `direccion1` varchar(100) NOT NULL,
  `direccion2` varchar(100) DEFAULT NULL,
  `numTel1` int(20) NOT NULL,
  `numTel2` int(20) DEFAULT NULL,
  `email1` varchar(100) NOT NULL,
  `email2` varchar(100) DEFAULT NULL,
  `creadoEn` datetime NOT NULL
);

INSERT INTO `proveedor` (`id_docPov`, `imgEmpresa`, `nombProv1`, `nombProv2`, `appelProv1`, `apellProv2`, `empresa`, `direccion1`, `direccion2`, `numTel1`, `numTel2`, `email1`, `email2`, `creadoEn`) VALUES
(32456812, '', 'German', 'Fabian', 'HIguita', 'Rojas', 'Ducales', 'Ducales', '', 2147483647, 0, 'higfab@ducales.com.co', '', '2022-03-28 00:00:00'),
(52456454, NULL, 'Jorge', 'Hernando', 'Ramirez', 'Jimenez', 'Nestlé', 'Nestlé', NULL, 2147483647, NULL, 'jrhj@nestle.com', NULL, '2022-03-28 00:00:00');

-- --------------------------------------------------------

CREATE TABLE `tienda` (
  `id_ti` int(100) NOT NULL,
  `nombreTienda` varchar(50) NOT NULL,
  `direccionTi` varchar(100) NOT NULL,
  `telTi` int(20) NOT NULL,
  `emailTi` varchar(50) NOT NULL
);

INSERT INTO `tienda` (`id_ti`, `nombreTienda`, `direccionTi`, `telTi`, `emailTi`) VALUES
(1, 'Tienda Express', 'Bosa, Bogotá', 2147483647, 'expressmarket@smiep.com.co');

CREATE TABLE `usuario` (
  `id_doc` int(100) NOT NULL,
  `nombre1` varchar(50) NOT NULL,
  `nombre2` varchar(50) DEFAULT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) DEFAULT NULL,
  `userName` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `creadoEn` datetime NOT NULL,
  `id_ti` int(100) NOT NULL,
  `id_estado` int(100) NOT NULL
);

INSERT INTO `usuario` (`id_doc`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `userName`, `email`, `password`, `rol`, `creadoEn`, `id_ti`, `id_estado`) VALUES
(52734161, 'Katherine', NULL, 'Hermida', NULL, 'kather', 'kather@smiep.com', '088ef99bff55c67dc863f83980a66a9b', 'Empleado', '2022-03-18 00:00:00', 1, 2),
(100835454, 'Cristian', NULL, 'Silva', NULL, 'cfsilva', 'cfsilva@smiep.com.co', '088ef99bff55c67dc863f83980a66a9b', 'Empleado', '2022-03-18 00:00:00', 1, 2),
(100837029, 'Nicolas', NULL, 'Bautista', NULL, 'nianbf', 'nianbf@smiep.com.co', '91f5167c34c400758115c2a6826ec2e3', 'Administrador', '2022-03-17 00:00:00', 1, 2),
(1002563489, 'Jeison', NULL, 'Estupiñan', NULL, 'jeiestu', 'jesisone@smiep.com.co', '91f5167c34c400758115c2a6826ec2e3', 'Administrador', '2022-03-15 00:00:00', 1, 2),
(1002563490, 'Gerardo', 'Camilo', 'Narvaez', 'Cortés', 'gecanarco', 'gerarnarco@smiep.com.co', '088ef99bff55c67dc863f83980a66a9b', 'Empleado', '2022-03-16 00:00:00', 1, 2);

CREATE TABLE `venta` (
  `id_venta` int(100) NOT NULL,
  `cantidadVT` double(16,4) NOT NULL,
  `descripcionVT` text DEFAULT NULL,
  `creadoEn` datetime NOT NULL,
  `id_caja` int(100) NOT NULL,
  `id_cliDoc` int(100) NOT NULL,
  `id_doc` int(100) NOT NULL
);

ALTER TABLE `caja`
  ADD PRIMARY KEY (`id_caja`);

ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_cat`);

ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliDoc`);

ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_doc` (`id_doc`),
  ADD KEY `id_docPov` (`id_docPov`);

ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`),
  ADD UNIQUE KEY `tEstado` (`tEstado`);

ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_prod`),
  ADD UNIQUE KEY `codBar` (`codBar`),
  ADD KEY `id_docUsu` (`id_docUsu`),
  ADD KEY `id_cat` (`id_cat`),
  ADD KEY `id_estado` (`id_estado`);

ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id_promo`),
  ADD UNIQUE KEY `nomPromo` (`nomPromo`),
  ADD KEY `id_estado` (`id_estado`);

ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_docPov`);

ALTER TABLE `tienda`
  ADD PRIMARY KEY (`id_ti`),
  ADD UNIQUE KEY `direccionTi` (`direccionTi`);

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_doc`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_ti` (`id_ti`),
  ADD KEY `id_estado` (`id_estado`);

ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_caja` (`id_caja`),
  ADD KEY `id_cliDoc` (`id_cliDoc`),
  ADD KEY `id_doc` (`id_doc`);

ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`id_doc`) REFERENCES `usuario` (`id_doc`),
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`id_docPov`) REFERENCES `proveedor` (`id_docPov`);

ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_docUsu`) REFERENCES `usuario` (`id_doc`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_cat`) REFERENCES `categoria` (`id_cat`),
  ADD CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);

ALTER TABLE `promociones`
  ADD CONSTRAINT `promociones_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);

ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_ti`) REFERENCES `tienda` (`id_ti`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);

ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_caja`) REFERENCES `caja` (`id_caja`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`id_cliDoc`) REFERENCES `cliente` (`id_cliDoc`),
  ADD CONSTRAINT `venta_ibfk_3` FOREIGN KEY (`id_doc`) REFERENCES `usuario` (`id_doc`);
