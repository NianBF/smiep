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
/*!40103 SET TIME_ZONE='+00:00' */;
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
  `id_cliDoc` varchar NOT NULL COMMENT 'Campo para cédula de cliente',
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
  `id_doc` int(100) NOT NULL COMMENT 'Identificador del usuario quien recibió el pedido',
  `id_docPov` int(100) NOT NULL COMMENT 'Identificador del proveedor',
  `creadoEn` date COMMENT 'Fecha en la que llega el pedio (Fecha de la factura)',
  `modificadoEn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '',
  PRIMARY KEY (`id_pedido`),
  KEY `id_doc` (`id_doc`),
  KEY `id_docPov` (`id_docPov`),
  CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`id_doc`) REFERENCES `usuario` (`id_doc`),
  CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`id_docPov`) REFERENCES `proveedor` (`id_docPov`)
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
  `id_sesion` int(100) NOT NULL AUTO_INCREMENT,
  `dateSess` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_doc` int(100) NOT NULL,
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

DROP TABLE IF EXISTS `orden`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orden` (
  `id_orden` int(100) NOT NULL AUTO_INCREMENT,
  `id_cliDoc` int(100) NOT NULL,
  `total` float(10,2) NOT NULL,
  `creadoEn` datetime NOT NULL,
  `modificadoEn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_doc` int(100) NOT NULL,
  `id_caja` int(100) NOT NULL,
  PRIMARY KEY (`id_orden`),
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

LOCK TABLES `orden` WRITE;
/*!40000 ALTER TABLE `orden` DISABLE KEYS */;
INSERT INTO `orden` VALUES (1,1000145236,12000.00,'0000-00-00 00:00:00','0000-00-00 00:00:00',123456789,1001);
/*!40000 ALTER TABLE `orden` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `id_prod` int(100) NOT NULL,
  `imgProd` varchar(255) NOT NULL DEFAULT 'https://i.ibb.co/2s4D1rc/bags-SMIEP.png',
  `codBar` varchar(50) NOT NULL,
  `nombreProd` varchar(50) NOT NULL,
  `descripcion` text,
  `precio` double(10,2) NOT NULL,
  `cantidadDisp` int(11) NOT NULL DEFAULT '1',
  `tipoPresentacion` varchar(50) NOT NULL,
  `modificadoEn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_docUsu` int(100) NOT NULL,
  `id_cat` int(100) NOT NULL,
  `id_estado` int(100) NOT NULL,
  `priceArrive` double(16,2) DEFAULT '0.00' COMMENT 'Campo para el precio de llegada de cada producto',
  PRIMARY KEY (`id_prod`),
  UNIQUE KEY `codBar` (`codBar`),
  KEY `id_docUsu` (`id_docUsu`),
  KEY `id_cat` (`id_cat`),
  KEY `id_estado` (`id_estado`),
  CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_docUsu`) REFERENCES `usuario` (`id_doc`),
  CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_cat`) REFERENCES `categoria` (`id_cat`),
  CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (2045,'https://citymercao.com/wp-content/uploads/2020/08/MAIZ-PIRA-DIANA-500G-.png','85889658585','MaÃ­z para crispetas','MaÃ­z para crispetas',1750.00,1,'Bolsa','2022-10-15 00:42:57',123456789,12,3,1500.00),(4020,'https://images.rappi.com/products/7e1f0c60-c5f0-4931-9cf0-b4bcfa449e9e-1604359962150.png','7705686512124','Coca-Cola','Coca-Cola',1500.00,1,'Botella plastica','2022-10-14 20:37:12',100837029,13,3,1000.00),(4022,'https://www.oreo-la.com/assets/site/images/home/celebra/product-celebra-1.png','7705686512144','Oreo','Oreo',800.00,60,'Paquete pequeÃ±o','2022-10-20 15:36:57',123456789,19,2,500.00),(4023,'https://i.ibb.co/2s4D1rc/bags-SMIEP.png','7705686512154','Big-Cola','Sin detalles',2500.00,13,'Botella plastica','2022-02-17 00:00:00',1000257220,13,2,0.00),(4025,'https://i.ibb.co/2s4D1rc/bags-SMIEP.png','7705686512174','Gol','Sin detalles',1000.00,1,'Individual','2022-10-14 20:37:12',1000257220,17,3,0.00),(4026,'https://i.ibb.co/2s4D1rc/bags-SMIEP.png','7705686512184','Lapiz 9B','Lapiz 9B',1500.00,2,'Individual','2022-10-14 20:54:41',100837029,100,2,0.00),(4027,'https://www.merkadomi.com/wp-content/uploads/2020/07/7705326077387.jpg','7705686512194','Bimbo','Sin detalles',4000.00,1,'Bolsa grande','2022-10-14 20:37:12',1000257220,16,3,3500.00),(4028,'https://i.ibb.co/2s4D1rc/bags-SMIEP.png','7705686512204','Duraznos','Duraznos',8000.00,7,'Lata','2022-10-14 21:48:09',100837029,20,2,5000.00),(4029,'https://jumbocolombiaio.vtexassets.com/arquivos/ids/186382/7702116000020.jpg?v=637813982026300000','7705686512214','Aceite Gourmet','Sin detalles',49000.00,1,'Botella plastica','2022-02-17 00:00:00',1000257220,15,3,0.00),(4040,'https://i.ibb.co/2s4D1rc/bags-SMIEP.png','5236987412','Agua Cristal','250ml',1200.00,3,'Botella plastica','2022-06-14 00:00:00',100837029,13,2,0.00),(25516,'https://i.ibb.co/2s4D1rc/bags-SMIEP.png','856435654658','TUTI FRUTTI','TUTI FRUTTI',2500.00,1,'Botella','2022-10-14 20:59:47',100837029,13,3,2000.00),(349559,'https://www.pngitem.com/pimgs/m/747-7475670_cerveza-corona-png-transparent-png.png','78444658885221','Cerveza Corona','Sin detalles',7000.00,10,'Vidrio','0000-00-00 00:00:00',1000257220,13,2,0.00),(1234566543,'https://i.ibb.co/2s4D1rc/bags-SMIEP.png','llll','llll','llll',99.00,3,'lll','2022-10-14 21:11:15',100837029,16,2,159999.00);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `numTel2` varchar(30) DEFAULT NULL COMMENT 'Numero de telefono del proveedor en campo varchar para recibir a precision los datos',
  `email1` varchar(100) NOT NULL,
  `email2` varchar(100) DEFAULT NULL,
  `creadoEn` date DEFAULT NULL,
  `numTel1` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_docPov`)
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
  `id_ti` int(100) NOT NULL,
  `nombreTienda` varchar(50) NOT NULL,
  `direccionTi` varchar(100) NOT NULL,
  `telTi` int(20) NOT NULL,
  `emailTi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ti`),
  UNIQUE KEY `direccionTi` (`direccionTi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tienda`
--

LOCK TABLES `tienda` WRITE;
/*!40000 ALTER TABLE `tienda` DISABLE KEYS */;
INSERT INTO `tienda` VALUES (1,'Tienda Express','Bosa, BogotÃ¡',32949493,'expressmarket@smiep.com.co');
/*!40000 ALTER TABLE `tienda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `creadoEn` date DEFAULT NULL,
  `id_ti` int(100) NOT NULL,
  `id_estado` int(100) NOT NULL,
  `id_sec` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Creación de campo para relacionar trazabilidad de usuario',
  PRIMARY KEY (`id_doc`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `id_sec` (`id_sec`),
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

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-21 21:46:25
