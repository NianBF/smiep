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
  `nombreCli2` varchar(50) DEFAULT NULL,
  `apellidoCli1` varchar(50) NOT NULL,
  `apellidoCli2` varchar(50) DEFAULT NULL,
  `direccionCli` varchar(100) NOT NULL,
  `telCli` int(20) NOT NULL,
  `emailCli` varchar(100) NOT NULL,
  `fechaNac` date DEFAULT NULL,
  PRIMARY KEY (`id_cliDoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1000145236,'Jose','','Fina','','Ak 98-98',2147483647,'josefina@smiep.com.co','2001-03-07');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compra`
--

DROP TABLE IF EXISTS `compra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compra` (
  `id_compra` varchar(250) NOT NULL,
  `totalPrice` double(16,4) NOT NULL,
  `id_doc` int(100) NOT NULL,
  `id_docPov` int(100) NOT NULL,
  `creadoEn` date,
  `modificadoEn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
INSERT INTO `compra` VALUES ('10025',250800.0000,'Galletas ',123456789,78524635,'2022-09-23 11:37:04'),('A10023',55300.0000,'N/A',100837029,52456454,'2022-09-23 10:07:45'),('B10023',350000.0000,'Galletas Festival',123456789,78524635,'2022-09-23 10:36:42');
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
  `tEstado` varchar(25) NOT NULL,
  PRIMARY KEY (`id_estado`),
  UNIQUE KEY `tEstado` (`tEstado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
INSERT INTO `estado` VALUES (2,'Disponible'),(3,'No Disponible');
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
) ENGINE=InnoDB AUTO_INCREMENT=2424 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `initsession`
--

LOCK TABLES `initsession` WRITE;
/*!40000 ALTER TABLE `initsession` DISABLE KEYS */;
INSERT INTO `initsession` VALUES (1,'2022-09-01 17:05:00',123456789),(34,'2022-09-01 17:05:23',123456789),(44,'2022-09-01 17:06:25',123456789),(54,'2022-09-01 17:11:05',100837029),(64,'2022-09-01 17:15:14',123456789),(74,'2022-09-01 17:23:29',100837029),(84,'2022-09-01 19:18:37',123456789),(94,'2022-09-01 23:33:08',1000257220),(104,'2022-09-01 23:43:29',123456789),(114,'2022-09-01 23:56:27',1000257220),(124,'2022-09-02 00:37:17',1000257220),(134,'2022-09-02 00:46:11',123456789),(144,'2022-09-02 02:05:32',1000257220),(154,'2022-09-02 02:46:07',1000257220),(164,'2022-09-02 02:53:30',100837029),(174,'2022-09-02 03:42:15',1000257220),(184,'2022-09-02 12:26:08',1000257220),(194,'2022-09-02 12:36:39',1000257220),(204,'2022-09-02 12:39:13',1000257220),(214,'2022-09-02 12:41:10',1000257220),(224,'2022-09-02 13:29:58',1000257220),(234,'2022-09-02 13:33:44',123456789),(244,'2022-09-02 14:21:16',123456789),(254,'2022-09-02 14:42:52',1000257220),(264,'2022-09-02 16:56:13',1000257220),(274,'2022-09-04 03:46:13',1000257220),(284,'2022-09-05 12:14:34',1000257220),(294,'2022-09-05 12:40:58',1000257220),(304,'2022-09-05 13:01:21',123456789),(314,'2022-09-05 13:08:47',1000257220),(324,'2022-09-05 13:22:57',123456789),(334,'2022-09-05 20:10:10',100837029),(344,'2022-09-06 11:50:45',123456789),(354,'2022-09-06 11:52:58',123456789),(364,'2022-09-06 11:56:56',100837029),(374,'2022-09-06 12:07:19',1000257220),(384,'2022-09-06 12:09:53',100837029),(394,'2022-09-06 12:11:21',100837029),(404,'2022-09-06 12:46:11',100837029),(414,'2022-09-06 12:47:06',1000257220),(424,'2022-09-06 12:47:29',123456789),(434,'2022-09-06 12:52:35',100837029),(444,'2022-09-06 13:47:39',1000257220),(454,'2022-09-06 15:10:09',100837029),(464,'2022-09-06 15:12:48',100837029),(474,'2022-09-06 15:13:33',123456789),(484,'2022-09-06 15:15:13',100837029),(494,'2022-09-06 15:20:52',100837029),(504,'2022-09-06 15:32:58',100837029),(514,'2022-09-06 16:20:53',123456789),(524,'2022-09-06 16:35:06',100837029),(534,'2022-09-06 18:03:45',100837029),(544,'2022-09-06 18:30:39',100837029),(554,'2022-09-06 21:10:21',100837029),(564,'2022-09-07 00:50:59',100837029),(574,'2022-09-07 13:02:23',100837029),(584,'2022-09-07 13:06:35',123456789),(594,'2022-09-07 13:12:06',100837029),(604,'2022-09-07 13:18:09',1000257220),(614,'2022-09-07 15:09:16',123456789),(624,'2022-09-07 15:37:39',100837029),(634,'2022-09-07 15:38:33',100837029),(644,'2022-09-07 15:57:23',123456789),(654,'2022-09-07 16:01:38',123456789),(664,'2022-09-07 16:03:52',100837029),(674,'2022-09-07 16:04:05',123456789),(684,'2022-09-07 16:55:53',100837029),(694,'2022-09-07 16:58:21',100837029),(704,'2022-09-09 18:27:20',1000257220),(714,'2022-09-11 18:04:26',1000257220),(724,'2022-09-11 18:54:32',1000257220),(734,'2022-09-11 20:15:44',1000257220),(744,'2022-09-11 21:18:12',123456789),(754,'2022-09-11 22:36:33',123456789),(764,'2022-09-12 02:01:54',100837029),(774,'2022-09-12 12:03:42',100837029),(784,'2022-09-12 12:08:21',100837029),(794,'2022-09-12 12:10:13',100837029),(804,'2022-09-12 12:12:26',100837029),(814,'2022-09-12 12:14:55',100837029),(824,'2022-09-12 13:07:41',123456789),(834,'2022-09-12 13:20:34',1000257220),(844,'2022-09-12 14:48:15',123456789),(854,'2022-09-13 14:13:04',100837029),(864,'2022-09-14 13:35:04',1000257220),(874,'2022-09-14 15:10:22',1000257220),(884,'2022-09-17 16:24:36',1000257220),(894,'2022-09-18 01:54:09',1000257220),(904,'2022-09-19 12:25:45',100837029),(914,'2022-09-19 12:55:58',100837029),(924,'2022-09-19 13:22:10',100837029),(934,'2022-09-19 13:22:10',100837029),(944,'2022-09-19 13:38:38',1000257220),(954,'2022-09-19 14:46:21',100837029),(964,'2022-09-19 14:46:21',1000257220),(974,'2022-09-19 17:05:41',1000257220),(984,'2022-09-19 17:07:44',1000257220),(994,'2022-09-19 17:10:14',1000257220),(1004,'2022-09-19 17:17:12',1000257220),(1014,'2022-09-19 20:50:38',1000257220),(1024,'2022-09-20 00:11:12',1000257220),(1034,'2022-09-20 02:49:27',100837029),(1044,'2022-09-20 03:01:19',100837029),(1054,'2022-09-20 03:15:44',1000257220),(1064,'2022-09-20 12:22:38',1000257220),(1074,'2022-09-20 13:01:17',100837029),(1084,'2022-09-20 13:05:56',1000257220),(1094,'2022-09-20 13:47:27',1000257220),(1104,'2022-09-20 15:10:32',1000257220),(1114,'2022-09-20 18:10:08',1000257220),(1124,'2022-09-20 18:19:17',1000257220),(1134,'2022-09-20 20:13:10',1000257220),(1144,'2022-09-20 20:42:40',1000257220),(1154,'2022-09-21 00:09:06',1000257220),(1164,'2022-09-21 00:09:06',1000257220),(1174,'2022-09-21 00:20:18',1000257220),(1184,'2022-09-21 01:45:49',1000257220),(1194,'2022-09-21 03:00:06',1000257220),(1204,'2022-09-21 10:36:34',123456789),(1214,'2022-09-21 11:56:51',100837029),(1224,'2022-09-21 12:40:27',1000257220),(1234,'2022-09-21 14:01:09',100837029),(1244,'2022-09-21 15:07:49',100837029),(1254,'2022-09-21 15:11:41',100837029),(1264,'2022-09-21 15:15:32',1000257220),(1274,'2022-09-21 15:31:51',1000257220),(1284,'2022-09-21 15:34:17',100837029),(1294,'2022-09-22 00:38:21',1000257220),(1304,'2022-09-22 02:38:00',1000257220),(1314,'2022-09-22 13:59:57',1000257220),(1324,'2022-09-22 15:31:23',1000257220),(1334,'2022-09-22 19:11:02',1000257220),(1344,'2022-09-22 21:02:32',100837029),(1354,'2022-09-22 21:54:54',1000257220),(1364,'2022-09-22 22:56:33',1000257220),(1374,'2022-09-23 01:21:35',123456789),(1384,'2022-09-23 01:21:44',123456789),(1394,'2022-09-23 12:56:14',123456789),(1404,'2022-09-23 13:48:20',1000257220),(1414,'2022-09-23 15:02:33',123456789),(1424,'2022-09-23 15:05:28',100837029),(1434,'2022-09-23 15:28:34',100837029),(1444,'2022-09-23 15:38:53',123456789),(1454,'2022-09-23 15:49:32',100837029),(1464,'2022-09-23 16:06:11',1000257220),(1474,'2022-09-23 16:07:55',123456789),(1484,'2022-09-23 16:08:12',1000257220),(1494,'2022-09-23 16:10:14',123456789),(1504,'2022-09-23 16:10:31',1000257220),(1514,'2022-09-23 16:36:24',123456789),(1524,'2022-09-23 17:49:49',100837029),(1534,'2022-09-23 17:58:46',100837029),(1544,'2022-09-23 17:58:55',1000257220),(1554,'2022-09-23 19:07:44',1000257220),(1564,'2022-09-23 19:18:10',1000257220),(1574,'2022-09-23 23:00:04',123456789),(1584,'2022-09-23 23:07:59',100837029),(1594,'2022-09-24 01:02:17',1000257220),(1604,'2022-09-24 10:46:31',100837029),(1614,'2022-09-25 17:45:52',1000257220),(1624,'2022-09-25 18:29:04',1000257220),(1634,'2022-09-25 18:51:09',1000257220),(1644,'2022-09-25 18:58:45',1000257220),(1654,'2022-09-25 20:58:11',100837029),(1664,'2022-09-25 23:05:43',1000257220),(1674,'2022-09-26 01:38:26',1000257220),(1684,'2022-09-26 12:35:32',123456789),(1694,'2022-09-26 12:40:53',123456789),(1704,'2022-09-26 14:49:19',1000257220),(1714,'2022-09-26 15:05:36',1000257220),(1724,'2022-09-26 16:35:13',123456789),(1734,'2022-09-26 17:05:48',123456789),(1744,'2022-09-26 17:35:01',123456789),(1754,'2022-09-27 01:09:38',1000257220),(1764,'2022-09-27 12:48:44',1000257220),(1774,'2022-09-27 13:48:40',1000257220),(1784,'2022-09-27 14:06:17',1000257220),(1794,'2022-09-27 14:30:14',1000257220),(1804,'2022-09-29 18:42:30',1000257220),(1814,'2022-09-30 16:56:02',1000257220),(1824,'2022-09-30 17:01:04',1000257220),(1834,'2022-09-30 17:26:42',1000257220),(1844,'2022-09-30 17:47:10',1000257220),(1854,'2022-09-30 19:12:11',1000257220),(1864,'2022-09-30 20:29:24',1000257220),(1874,'2022-10-01 16:53:54',1000257220),(1884,'2022-10-01 17:39:29',1000257220),(1894,'2022-10-01 21:09:55',1000257220),(1904,'2022-10-02 16:32:19',1000257220),(1914,'2022-10-03 18:58:50',1000257220),(1924,'2022-10-03 21:53:09',1000257220),(1934,'2022-10-05 23:28:48',1000257220),(1944,'2022-10-06 00:07:00',1000257220),(1954,'2022-10-06 00:27:48',1000257220),(1964,'2022-10-06 17:13:50',100837029),(1974,'2022-10-06 23:06:00',1000257220),(1984,'2022-10-06 23:06:02',1000257220),(1994,'2022-10-06 23:10:52',1000257220),(2004,'2022-10-06 23:14:40',1000257220),(2014,'2022-10-06 23:16:04',1000257220),(2024,'2022-10-07 16:28:50',1000257220),(2034,'2022-10-07 17:48:32',100837029),(2044,'2022-10-07 18:54:59',100837029),(2054,'2022-10-07 19:08:38',1000257220),(2064,'2022-10-07 19:13:09',1000257220),(2074,'2022-10-07 19:14:22',1000257220),(2084,'2022-10-07 19:28:09',1000257220),(2094,'2022-10-07 20:15:40',123456789),(2104,'2022-10-07 20:29:41',1000257220),(2114,'2022-10-07 20:45:06',123456789),(2124,'2022-10-09 16:28:37',1000257220),(2134,'2022-10-10 01:36:19',1000257220),(2144,'2022-10-10 17:34:41',1000257220),(2154,'2022-10-11 14:37:27',100837029),(2164,'2022-10-11 16:11:13',100837029),(2174,'2022-10-11 17:40:42',1000257220),(2184,'2022-10-11 17:45:06',1000257220),(2194,'2022-10-12 17:52:38',123456789),(2204,'2022-10-13 21:52:27',123456789),(2214,'2022-10-14 20:18:44',100837029),(2224,'2022-10-14 20:59:29',123456789),(2234,'2022-10-14 21:35:19',123456789),(2244,'2022-10-14 21:47:36',100837029),(2254,'2022-10-15 00:21:58',100837029),(2264,'2022-10-15 00:21:58',100837029),(2274,'2022-10-15 00:42:29',123456789),(2284,'2022-10-18 17:39:58',123456789),(2294,'2022-10-18 17:41:55',123456789),(2304,'2022-10-18 18:20:02',1000257220),(2314,'2022-10-19 16:49:42',100837029),(2324,'2022-10-19 16:49:43',100837029),(2334,'2022-10-19 20:21:17',100837029),(2344,'2022-10-19 20:21:17',100837029),(2354,'2022-10-20 20:36:32',123456789),(2364,'2022-10-20 20:38:57',1000257220),(2374,'2022-10-20 20:46:55',100837029),(2384,'2022-10-21 15:06:03',100837029),(2394,'2022-10-21 20:34:54',100837029),(2404,'2022-10-21 20:36:08',100837029),(2414,'2022-10-21 21:27:56',100837029);
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
