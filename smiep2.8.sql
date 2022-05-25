-- MySQL dump 10.13  Distrib 5.7.38, for Linux (x86_64)
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
  `id_caja` int(100) NOT NULL,
  `tipoCaja` varchar(50) DEFAULT 'Normal',
  PRIMARY KEY (`id_caja`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `caja`
--

LOCK TABLES `caja` WRITE;
/*!40000 ALTER TABLE `caja` DISABLE KEYS */;
INSERT INTO `caja` VALUES (1001,'Normal');
/*!40000 ALTER TABLE `caja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `id_cat` int(100) NOT NULL,
  `nCategoria` varchar(50) NOT NULL,
  `descripcion` text,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (11,'Lacteos','Sin detalles'),(12,'Granos','Sin detalles'),(13,'Gaseosas','Sin detalles'),(14,'Cereales','Sin detalles'),(15,'Aceites','Sin detalles'),(16,'Panes','Sin detalles'),(17,'Golosinas','Sin detalles'),(18,'Snacks','Paquetes de papas'),(19,'Galletas','Sin detalles'),(20,'Enlatados','Sin detalles'),(21,'Pastas','Sin detalles'),(100,'Otros','Sin detalles');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `id_cliDoc` int(100) NOT NULL,
  `nombreCli1` varchar(50) NOT NULL,
  `nombreCli2` varchar(50) DEFAULT NULL,
  `apellidoCli1` varchar(50) NOT NULL,
  `apellidoCli2` varchar(50) DEFAULT NULL,
  `direccionCli` varchar(100) NOT NULL,
  `telCli` int(20) NOT NULL,
  `emailCli` varchar(100) NOT NULL,
  `fechaNac` date NOT NULL,
  PRIMARY KEY (`id_cliDoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1234,'nnnnn','','asd','','asd',32222,'asd@smiep.com','2005-05-11');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compra`
--

DROP TABLE IF EXISTS `compra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compra` (
  `id_compra` int(100) NOT NULL,
  `cantidadCP` double(16,4) NOT NULL,
  `descripcionVT` text,
  `creadoEn` datetime NOT NULL,
  `id_doc` int(100) NOT NULL,
  `id_docPov` int(100) NOT NULL,
  PRIMARY KEY (`id_compra`),
  KEY `id_doc` (`id_doc`),
  KEY `id_docPov` (`id_docPov`),
  CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`id_doc`) REFERENCES `usuario` (`id_doc`),
  CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`id_docPov`) REFERENCES `proveedor` (`id_docPov`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compra`
--

LOCK TABLES `compra` WRITE;
/*!40000 ALTER TABLE `compra` DISABLE KEYS */;
/*!40000 ALTER TABLE `compra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado` (
  `id_estado` int(100) NOT NULL,
  `tEstado` varchar(20) NOT NULL,
  PRIMARY KEY (`id_estado`),
  UNIQUE KEY `tEstado` (`tEstado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
INSERT INTO `estado` VALUES (3,'Agotado'),(2,'Disponible');
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orden`
--

DROP TABLE IF EXISTS `orden`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orden` (
  `id_orden` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliDoc` int(11) NOT NULL,
  `total` float(10,2) NOT NULL,
  `creadoEn` datetime NOT NULL,
  `modificadoEn` datetime NOT NULL,
  PRIMARY KEY (`id_orden`),
  KEY `id_cliDoc` (`id_cliDoc`),
  CONSTRAINT `orden_ibfk_1` FOREIGN KEY (`id_cliDoc`) REFERENCES `cliente` (`id_cliDoc`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orden`
--

LOCK TABLES `orden` WRITE;
/*!40000 ALTER TABLE `orden` DISABLE KEYS */;
INSERT INTO `orden` VALUES (14,1234,6800.00,'2022-05-24 13:23:30','2022-05-24 13:23:30'),(24,1234,6800.00,'2022-05-24 13:24:10','2022-05-24 13:24:10'),(34,1234,6800.00,'2022-05-24 13:25:44','2022-05-24 13:25:44'),(44,1234,6800.00,'2022-05-24 13:27:04','2022-05-24 13:27:04'),(54,1234,6800.00,'2022-05-24 13:27:57','2022-05-24 13:27:57'),(64,1234,6800.00,'2022-05-24 13:32:14','2022-05-24 13:32:14'),(74,1234,6800.00,'2022-05-24 13:34:05','2022-05-24 13:34:05'),(84,1234,6800.00,'2022-05-24 13:35:36','2022-05-24 13:35:36'),(94,1234,5500.00,'2022-05-24 13:53:40','2022-05-24 13:53:40'),(104,1234,4100.00,'2022-05-24 16:14:24','2022-05-24 16:14:24'),(114,1234,12500.00,'2022-05-24 16:23:43','2022-05-24 16:23:43');
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
  `imgProd` varchar(255) DEFAULT NULL,
  `codBar` varchar(50) NOT NULL,
  `nombreProd` varchar(50) NOT NULL,
  `descripcion` text,
  `precio` double(10,2) NOT NULL,
  `catidadMin` int(11) NOT NULL DEFAULT '1',
  `cantidadDisp` int(11) NOT NULL DEFAULT '1',
  `tipoPresentacion` varchar(50) NOT NULL,
  `creadoEn` datetime NOT NULL,
  `id_docUsu` int(100) NOT NULL,
  `id_cat` int(100) NOT NULL,
  `id_estado` int(100) NOT NULL,
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
INSERT INTO `producto` VALUES (4020,'','7705686512124','Coca-Cola','Sin detalles',0.00,0,26,'Botella plï¿½stica','2022-02-17 00:00:00',1002563489,13,2),(4021,'','7705686512134','Alqueria','Sin detalles',3000.00,0,12,'Bolsa plï¿½stica','2022-02-17 00:00:00',1002563489,11,2),(4022,'','7705686512144','Oreo','Sin detalles',800.00,0,90,'Paquete pequeï¿½o','2022-02-17 00:00:00',1002563489,19,2),(4023,'','7705686512154','Big-Cola','Sin detalles',2500.00,0,13,'Botella plï¿½stica','2022-02-17 00:00:00',1002563489,13,2),(4025,NULL,'7705686512174','Gol','Sin detalles',0.00,1,1,'Individual','2022-02-17 00:00:00',1002563490,17,2),(4026,'','7705686512184','Lapiz 9B','Sin detalles',0.00,0,1,'Individual','2022-02-17 00:00:00',1002563489,100,2),(4027,NULL,'7705686512194','Bimbo','Sin detalles',0.00,1,1,'Bolsa grande','2022-02-17 00:00:00',1002563490,16,2),(4028,NULL,'7705686512204','Duraznos','Duraznos en almibar',0.00,1,1,'Lata','2022-02-17 00:00:00',1002563489,20,2),(4029,NULL,'7705686512214','Gourmet','Sin detalles',0.00,1,1,'Botella plástica','2022-02-17 00:00:00',1002563490,15,3);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promociones`
--

DROP TABLE IF EXISTS `promociones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promociones` (
  `id_promo` int(100) NOT NULL,
  `nomPromo` varchar(100) NOT NULL,
  `descuento` varchar(50) DEFAULT NULL,
  `cantAgregada` int(11) DEFAULT NULL,
  `id_estado` int(100) NOT NULL,
  PRIMARY KEY (`id_promo`),
  UNIQUE KEY `nomPromo` (`nomPromo`),
  KEY `id_estado` (`id_estado`),
  CONSTRAINT `promociones_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promociones`
--

LOCK TABLES `promociones` WRITE;
/*!40000 ALTER TABLE `promociones` DISABLE KEYS */;
/*!40000 ALTER TABLE `promociones` ENABLE KEYS */;
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
  `numTel1` int(20) NOT NULL,
  `numTel2` int(20) DEFAULT NULL,
  `email1` varchar(100) NOT NULL,
  `email2` varchar(100) DEFAULT NULL,
  `creadoEn` datetime NOT NULL,
  PRIMARY KEY (`id_docPov`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedor`
--

LOCK TABLES `proveedor` WRITE;
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
INSERT INTO `proveedor` VALUES (32456812,'','German','Fabian','HIguita','Rojas','Ducales','Ducales','',2147483647,0,'higfab@ducales.com.co','','2022-03-28 00:00:00'),(52456454,NULL,'Jorge','Hernando','Ramirez','Jimenez','Nestlï¿½','Nestle','',2147483647,0,'jrhj@nestle.com','','2022-03-28 00:00:00');
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
INSERT INTO `tienda` VALUES (1,'Tienda Express','Bosa, Bogotá',2147483647,'expressmarket@smiep.com.co'),(12345,'ejemplo','eejeje 32',322333,'ejemplo@smiep.co');
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
  `creadoEn` datetime NOT NULL,
  `id_ti` int(100) NOT NULL,
  `id_estado` int(100) NOT NULL,
  PRIMARY KEY (`id_doc`),
  UNIQUE KEY `email` (`email`),
  KEY `id_ti` (`id_ti`),
  KEY `id_estado` (`id_estado`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_ti`) REFERENCES `tienda` (`id_ti`),
  CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (52734161,'Katherine',NULL,'Hermida',NULL,'kather','kather@smiep.com','088ef99bff55c67dc863f83980a66a9b','Empleado','2022-03-18 00:00:00',1,2),(100835454,'Cristian',NULL,'Silva',NULL,'cfsilva','cfsilva@smiep.com.co','088ef99bff55c67dc863f83980a66a9b','Empleado','2022-03-18 00:00:00',1,2),(100837029,'Nicolas',NULL,'Bautista',NULL,'nianbf','nianbf@smiep.com.co','91f5167c34c400758115c2a6826ec2e3','Administrador','2022-03-17 00:00:00',1,2),(1000837029,'Carlos','','Cristancho','','cacris','cacris@smiep.com.co','088ef99bff55c67dc863f83980a66a9b','Empleado','0000-00-00 00:00:00',1,2),(1002563489,'Jeison',NULL,'Estupiñan',NULL,'jeiestu','jesisone@smiep.com.co','91f5167c34c400758115c2a6826ec2e3','Administrador','2022-03-15 00:00:00',1,2),(1002563490,'Gerardo','Camilo','Narvaez','Cortés','gecanarco','gerarnarco@smiep.com.co','088ef99bff55c67dc863f83980a66a9b','Empleado','2022-03-16 00:00:00',1,2);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venta`
--

DROP TABLE IF EXISTS `venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `venta` (
  `id_venta` int(100) NOT NULL,
  `cantidadVT` double(16,4) NOT NULL,
  `descripcionVT` text,
  `creadoEn` datetime NOT NULL,
  `id_caja` int(100) NOT NULL,
  `id_cliDoc` int(100) NOT NULL,
  `id_doc` int(100) NOT NULL,
  PRIMARY KEY (`id_venta`),
  KEY `id_caja` (`id_caja`),
  KEY `id_cliDoc` (`id_cliDoc`),
  KEY `id_doc` (`id_doc`),
  CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_caja`) REFERENCES `caja` (`id_caja`),
  CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`id_cliDoc`) REFERENCES `cliente` (`id_cliDoc`),
  CONSTRAINT `venta_ibfk_3` FOREIGN KEY (`id_doc`) REFERENCES `usuario` (`id_doc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venta`
--

LOCK TABLES `venta` WRITE;
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
INSERT INTO `venta` VALUES (84,1.0000,'4022','2022-05-24 13:35:36',1001,1234,1002563489),(94,1.0000,'4023','2022-05-24 13:53:40',1001,1234,1002563489),(104,1.0000,'4023','2022-05-24 16:14:24',1001,1234,1002563489),(114,5.0000,'4023','2022-05-24 16:23:43',1001,1234,1002563489);
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-24 22:21:30
