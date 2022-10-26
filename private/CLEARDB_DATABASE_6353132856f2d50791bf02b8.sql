-- MySQL dump 10.13  Distrib 5.7.39, for Linux (x86_64)
--
-- Host: us-cdbr-east-05.cleardb.net    Database: heroku_619553700a45b98
-- ------------------------------------------------------
-- Server version	5.6.50-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='-05:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `heroku_619553700a45b98`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `heroku_619553700a45b98` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `heroku_619553700a45b98`;

--
-- Table structure for table `caja`
--

DROP TABLE IF EXISTS `caja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `caja` (
  `id_caja` int(100) NOT NULL COMMENT 'Identificador de caja en la que ingresa el usuario', 
  `descCaja` varchar(250) DEFAULT 'Normal' COMMENT 'Describe el estado en el que se encuentra la caja',
  PRIMARY KEY (`id_caja`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `caja`
--

LOCK TABLES `caja` WRITE;
/*!40000 ALTER TABLE `caja` DISABLE KEYS */;
INSERT INTO `caja` VALUES (1001,'Caja sin lector de barras');
/*!40000 ALTER TABLE `caja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `id_cat` int(100) NOT NULL COMMENT 'Identificador de la categoría',
  `nCategoria` varchar(50) NOT NULL COMMENT 'Nombre de la categoría',
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'Lacteos'),(2,'Granos'),(3,'Gaseosas'),(4,'Cereales'),(5,'Aceites'),(6,'Panes'),(7,'Golosinas'),(8,'Snacks'),(9,'Galletas'),(10,'Enlatados'),(11,'Pastas'),(100,'Otros');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `id_cliDoc` varchar(255) NOT NULL COMMENT 'Campo para cédula de cliente',
  `nombreCli1` varchar(50) NOT NULL COMMENT 'Primer nombre Obligatorio',
  `nombreCli2` varchar(50) DEFAULT NULL COMMENT 'Segundo nombre opcional',
  `apellidoCli1` varchar(50) NOT NULL COMMENT 'Primer apellido obligatorio',
  `apellidoCli2` varchar(50) DEFAULT NULL COMMENT 'Segundo apellido opcional',
  `direccionCli` varchar(100) NOT NULL COMMENT 'Dirección del cliente para domicilios',
  `telCli` bigint NOT NULL COMMENT 'Teléfono celular del cliente se deja bigint para precisar el número',
  `emailCli` varchar(100) NOT NULL COMMENT 'Correo electrónico del cliente',
  PRIMARY KEY (`id_cliDoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1000145236,'Jose','','Fina','','Ak 98-98',3203568595,'josefina@smiep.com.co');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido` (
  `id_pedido` varchar(250) NOT NULL COMMENT 'Número de factura mas un caracter identificando la empresa',
  `totalPrice` double(16,4) NOT NULL COMMENT 'Precio total de la factura',
  `id_docUsu` int(100) NOT NULL COMMENT 'Identificador del usuario quien recibió el pedido',
  `id_docProv` int(100) NOT NULL COMMENT 'Identificador del proveedor',
  `creadoEn` date COMMENT 'Fecha en la que llega el pedio (Fecha de la factura)',
  `modificadoEn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Cuando el usuario el usuario ingresa la factura',
  PRIMARY KEY (`id_pedido`),
  KEY `id_docUsu` (`id_docUsu`),
  KEY `id_docProv` (`id_docProv`),
  CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_docUsu`) REFERENCES `usuario` (`id_doc`),
  CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`id_docProv`) REFERENCES `proveedor` (`id_docProv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compra`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
INSERT INTO `pedido` VALUES ('10025',250800.0000,'Galletas ',123456789,78524635,'2022-09-23 11:37:04'),('A10023',55300.0000,'N/A',100837029,52456454,'2022-09-23 10:07:45'),('B10023',350000.0000,'Galletas Festival',123456789,78524635,'2022-09-23 10:36:42');
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado` (
  `id_estado` int(100) NOT NULL COMMENT 'Identificador para relaciones de tablas',
  `tEstado` varchar(25) NOT NULL COMMENT 'Descripción del estado (Disponible ó No Disponible)',
  PRIMARY KEY (`id_estado`),
  UNIQUE KEY `tEstado` (`tEstado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
INSERT INTO `estado` VALUES (1,'Disponible'),(2,'No Disponible');
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `initsession`
--

DROP TABLE IF EXISTS `initsession`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `initsession` (
  `id_sesion` int(255) NOT NULL AUTO_INCREMENT=1 COMMENT 'Identificador de la sesión',
  `dateSess` timestamp NOT NULL COMMENT 'Fecha con hora del inicio de sesión',
  `id_doc` int(100) NOT NULL COMMENT 'Documento del usuario quien inicia sesión',
  PRIMARY KEY (`id_sesion`),
  KEY `fk_docUsuSes` (`id_doc`),
  CONSTRAINT `fk_docUsuSes` FOREIGN KEY (`id_doc`) REFERENCES `usuario` (`id_doc`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `initsession`
--

LOCK TABLES `initsession` WRITE;
/*!40000 ALTER TABLE `initsession` DISABLE KEYS */;
INSERT INTO `initsession` VALUES (1,'2022-09-01 17:05:00',123456789);
/*!40000 ALTER TABLE `initsession` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orden`
--

DROP TABLE IF EXISTS `venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `venta` (
  `id_venta` int(100) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la venta que se realiza',
  `id_cliDoc` int(100) COMMENT 'Documento del cliente que compra (Nulo)',
  `total` float(10,2) NOT NULL COMMENT 'Valor total de la venta que se hizo',
  `modificadoEn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Fecha en la que se realiza la venta',
  `id_doc` int(100) NOT NULL COMMENT 'Documento del usuario quien hizo la venta',
  `id_caja` int(100) NOT NULL COMMENT 'Caja en la que se realizó la venta',
  PRIMARY KEY (`id_venta`),
  KEY `fk_id_cliDoc` (`id_cliDoc`),
  KEY `fk_id_doc` (`id_doc`),
  KEY `fk_id_caja` (`id_caja`),
  CONSTRAINT `fk_id_caja` FOREIGN KEY (`id_caja`) REFERENCES `caja` (`id_caja`) ON UPDATE CASCADE,
  CONSTRAINT `fk_id_cliDoc` FOREIGN KEY (`id_cliDoc`) REFERENCES `cliente` (`id_cliDoc`) ON UPDATE CASCADE,
  CONSTRAINT `fk_id_doc` FOREIGN KEY (`id_doc`) REFERENCES `usuario` (`id_doc`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orden`
--

LOCK TABLES `venta` WRITE;
/*!40000 ALTER TABLE `orden` DISABLE KEYS */;
INSERT INTO `venta` VALUES (1,1000145236,12000.00,'0000-00-00 00:00:00',123456789,1001);
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `id_prod` int(255) NOT NULL COMMENT 'Identificador único del producto',
  `imgProd` varchar(255) NOT NULL DEFAULT 'https://i.ibb.co/2s4D1rc/bags-SMIEP.png' COMMENT 'Imagen del producto',
  `codBar` varchar(100) COMMENT 'Código de barras del producto ingresado',
  `nombreProd` TEXT NOT NULL COMMENT 'Nombre del producto',
  `precio` double(10,2) NOT NULL COMMENT 'Valor del producto a la venta del público',
  `cantidadDisp` int(11) NOT NULL DEFAULT '0' COMMENT 'Cantidad mínima disponible',
  `id_cat` int(100) NOT NULL COMMENT 'Relación con tabla categoria',
  `id_estado` int(100) NOT NULL COMMENT 'Relación con la tabla producto (Disponible o No disponible)',
  PRIMARY KEY (`id_prod`),
  UNIQUE KEY `codBar` (`codBar`),
  KEY `id_cat` (`id_cat`),
  KEY `id_estado` (`id_estado`),
  CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_cat`) REFERENCES `categoria` (`id_cat`),
  CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (2045,'https://citymercao.com/wp-content/uploads/2020/08/MAIZ-PIRA-DIANA-500G-.png','85889658585','Mai­z para crispetas',1750.00,1,2,1),(4020,'https://images.rappi.com/products/7e1f0c60-c5f0-4931-9cf0-b4bcfa449e9e-1604359962150.png','7705686512124','Coca-Cola',1500.00,1,3,1),(4022,'https://www.oreo-la.com/assets/site/images/home/celebra/product-celebra-1.png','7705686512144','Oreo de 4',800.00,60,9,1),(4023,'https://i.ibb.co/2s4D1rc/bags-SMIEP.png','7705686512154','Big-Cola',2500.00,13,3,1),(4025,'https://i.ibb.co/2s4D1rc/bags-SMIEP.png','7705686512174','Gol',1000.00,1,7,1),(4026,'https://i.ibb.co/2s4D1rc/bags-SMIEP.png','7705686512184','Lapiz 9B',1500.00,2,100,1);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proveedor` (
  `id_docProv` int(100) NOT NULL COMMENT 'Identificador del usuario (Numero de documento)',
  `imgEmpresa` varchar(255) DEFAULT NULL COMMENT 'Imagen de la empresa del proveedor',
  `nombProv1` varchar(50) NOT NULL COMMENT 'Primer nombre obligatorio',
  `nombProv2` varchar(50) DEFAULT NULL COMMENT 'Segundo nombre opcional',
  `apellidoProv1` varchar(50) NOT NULL COMMENT 'Primer apellido obligatorio',
  `apellidoProv2` varchar(50) DEFAULT NULL COMMENT 'Segundo apellido opcional',
  `empresa` varchar(50) NOT NULL COMMENT 'Nombre de la empresa a la que pertenece',
  `direccion1` varchar(100) NOT NULL COMMENT 'Dirección principal de la empresa',
  `direccion2` varchar(100) DEFAULT NULL COMMENT 'Dirección de una sede de la empresa',
  `numTel1` bigint DEFAULT NULL COMMENT 'Número de teléfono del proveedor',
  `numTel2` bigint DEFAULT NULL COMMENT 'Numero de telefono del proveedor en campo varchar para recibir a precision los datos',
  `email1` varchar(100) NOT NULL COMMENT 'Correo corporativo',
  `email2` varchar(100) DEFAULT NULL COMMENT 'Correo personal si el proveedor lo brinda',
  `creadoEn` date DEFAULT NULL COMMENt 'Fecha de vinculación del proveedor',
  PRIMARY KEY (`id_docProv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedor`
--

LOCK TABLES `proveedor` WRITE;
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
INSERT INTO `proveedor` VALUES (52456454,NULL,'Jorge','Hernando','Ramirez','Jimenez','Nestle','Nestle','','0','jrhj@nestle.com','','2022-03-28','3125689589'),(78524635,'','Jose','','Ruiz','Lizcano','Festival','Cl 25#36-89','','0','JolFes@festival.com','',NULL,'3125658999');
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tienda`
--

DROP TABLE IF EXISTS `tienda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tienda` (
  `id_ti` int(100) NOT NULL COMMENT 'Identificador de la tienda',
  `nombreTienda` varchar(50) NOT NULL COMMENT 'Nombre de la tienda en la que está',
  `direccionTi` varchar(100) NOT NULL COMMENT 'Ubicación de la tienda',
  `telTi` bigint NOT NULL COMMENT 'Número telefónico de la tienda',
  `emailTi` varchar(50) NOT NULL COMMENT 'Correo de la tienda',
  PRIMARY KEY (`id_ti`),
  UNIQUE KEY `direccionTi` (`direccionTi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tienda`
--

LOCK TABLES `tienda` WRITE;
/*!40000 ALTER TABLE `tienda` DISABLE KEYS */;
INSERT INTO `tienda` VALUES (1,'Tienda Express','Bosa, Bogota',32949493,'expressmarket@smiep.com.co');
/*!40000 ALTER TABLE `tienda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_doc` int(100) NOT NULL COMMENT 'Identificador del usuario (Documento de identidad)',
  `nombre1` varchar(50) NOT NULL COMMENT 'Primer nombre obligatorio',
  `nombre2` varchar(50) DEFAULT NULL COMMENT 'Segundo nombre opcional',
  `apellido1` varchar(50) NOT NULL COMMENT 'Primer apellido obligatori<o',
  `apellido2` varchar(50) DEFAULT NULL COMMENT 'Segundo apellido opcional',
  `userName` varchar(50) NOT NULL COMMENt 'Apodo del usuario dentro de la tienda',
  `email` varchar(100) NOT NULL COMMENT 'Correo, en preferencia para usuario @smiep.com.co',
  `password` varchar(255) NOT NULL COMMENT 'Contraseña para iniciar sesión en el sistema',
  `rol` varchar(20) NOT NULL COMMENT 'Rol dentro de la empresa (Administrador ó Empleado)',
  `creadoEn` date DEFAULT NULL COMMENT 'Fecha de incorporación',
  `id_ti` int(100) NOT NULL COMMENT 'Relación con la tabla tienda',
  `id_estado` int(100) NOT NULL COMMENT 'Si se encuentra vinculado o no en la tienda',
  `id_sec` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Creación de campo para relacionar trazabilidad de usuario',
  PRIMARY KEY (`id_doc`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `id_sec` (`id_sec`),
  UNIQUE KEY `userName` (`userName`),
  KEY `id_ti` (`id_ti`),
  KEY `id_estado` (`id_estado`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_ti`) REFERENCES `tienda` (`id_ti`),
  CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (456321,'Sebastian','','Beltran','','sebel','sebel@smiep.com','d57a1c3d998e898fde9de8c56b21fd61','Empleado',NULL,1,2,94),(52734161,'Katherine','Catalina','Hermida','Pascagaza','kathpask','kathpask@smiep.com','d57a1c3d998e898fde9de8c56b21fd61','Empleado',NULL,1,2,74),(100837029,'Nicolas','','Bautista','','nianbf','nianbf@smiep.com.co','c21f969b5f03d33d43e04f8f136e7682','Administrador','2022-03-17',1,2,14),(123456789,'Jeison','','Estupinan','','Jestu','jestu@smiep.com.co','c21f969b5f03d33d43e04f8f136e7682','Administrador',NULL,1,2,24),(527324161,'Este','','Man','','esteman','esteman@smiep.com.co','fab18667b56b6803c1e5d33e4a6cf228','Empleado',NULL,1,2,34),(1000257220,'Nicolas','','Perez','','nsSmiep','ns@smiep.co','827ccb0eea8a706c4c34a16891f84e7b','Administrador',NULL,1,2,44),(1000837029,'Sergio','Nicolas','Bautista ','Franco','snbf','snbf@smiep.com','d57a1c3d998e898fde9de8c56b21fd61','Empleado',NULL,1,2,1),(1006150624,'Cristian','','Silva','','cristian17','cristian@smiep.com.co','39f88a96c493e2d0b1797ba55d97bf77','Administrador',NULL,1,2,54),(2147483647,'Laura','','Velandia','Gomez','Lave','lave@smiep.com.co','e655834059c57c038e12961e16fca2b3','Empleado',NULL,1,2,64);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `prodPedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prodPedido` (
  `id_prodPedido` int(255) NOT NULL AUTO_INCREMENT,
  `cantidad` int(255) NOT NULL,
  `priceArrive` double(16,2) NOT NULL,
  `id_pedido` varchar(250) NOT NULL,
  `id_prod` int(255) NOT NULL,
  PRIMARY KEY (`id_prodPedido`),
  KEY `id_pedido` (`id_pedido`),
  KEY `id_prod` (`id_prod`),
  CONSTRAINT `prodPedido_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`),
  CONSTRAINT `prodPedido_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `producto` (`id_prod`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `tzProd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tzProd` (
  `id_tzProd` int(255) NOT NULL AUTO_INCREMENT,
  `cantidadDisp` int(255) NOT NULL,
  `cantidadNew` int(255) NOT NULL,
  `modificadoEn` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_prod` int(255) NOT NULL,
  `id_docUsu` int(100) NOT NULL,
  PRIMARY KEY (`id_tzProd`),
  KEY `id_prod` (`id_prod`),
  KEY `id_docUsu` (`id_docUsu`),
  CONSTRAINT `tzProd_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `producto` (`id_prod`),
  CONSTRAINT `tzProd_ibfk_1` FOREIGN KEY (`id_docUsu`) REFERENCES `usuario` (`id_doc`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-21 21:46:25
