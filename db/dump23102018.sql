-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: loja
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.30-MariaDB

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
-- Table structure for table `aviacao`
--

DROP TABLE IF EXISTS `aviacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aviacao` (
  `idaviacao` int(1) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `cor` varchar(15) NOT NULL,
  `motor` varchar(30) NOT NULL,
  `placa` varchar(10) NOT NULL,
  `renavam` varchar(20) NOT NULL,
  `chassi` varchar(20) NOT NULL,
  `valor` double NOT NULL,
  `ano` varchar(15) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`idaviacao`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aviacao`
--

LOCK TABLES `aviacao` WRITE;
/*!40000 ALTER TABLE `aviacao` DISABLE KEYS */;
INSERT INTO `aviacao` VALUES (4,'TTX','Cessna','Branca/Azul','turbo','TTX-9999','984657654','65sd46fsd64',500,'2012','cessna-ttx.jpg');
/*!40000 ALTER TABLE `aviacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `idcliente` int(1) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `nascimento` varchar(10) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `cnh` varchar(20) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idloja` int(1) DEFAULT NULL,
  PRIMARY KEY (`idcliente`),
  KEY `fk_cliente_loja_idx` (`idloja`),
  CONSTRAINT `fk_cliente_loja` FOREIGN KEY (`idloja`) REFERENCES `loja` (`idloja`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (11,'Gabriel Westphal Araujo','14/11/1997','(61) 94455-4895','516.546.151-64','16165651616','72.252-092','QNO 9 Conjunto B','Ceilândia Norte (Ceilândia)','Brasília','DF','gabriel@gmail.com',3),(13,'teste','21/51/1616','(16) 51651-2616','651.651.651-56','51621216215','72.252-091','QNO 9 Conjunto A','Ceilândia Norte (Ceilândia)','Brasília','DF','teste@gmail.com',3),(14,'teste','13/21/2312','(32) 12131-5113','321.321.231-23','31232132121','72.252-092','QNO 9 Conjunto B','Ceilândia Norte (Ceilândia)','Brasília','DF','teste@gmail.com',3),(15,'99999','99/99/9999','(99) 99999-9999','999.999.999-99','99999999999','72.252-095','QNO 9 Conjunto E','Ceilândia Norte (Ceilândia)','Brasília','DF','9@gmail.com',3);
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loja`
--

DROP TABLE IF EXISTS `loja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loja` (
  `idloja` int(1) NOT NULL,
  `razao_social` varchar(50) NOT NULL,
  `cnpj` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` varchar(100) NOT NULL,
  `idaviacao` int(1) unsigned zerofill DEFAULT NULL,
  `idterrestre` int(1) unsigned zerofill DEFAULT NULL,
  `idmaritimo` int(1) unsigned zerofill DEFAULT NULL,
  PRIMARY KEY (`idloja`),
  KEY `fk_loja_aviacao1_idx` (`idaviacao`),
  KEY `fk_loja_terrestre1_idx` (`idterrestre`),
  KEY `fk_loja_maritimo1_idx` (`idmaritimo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loja`
--

LOCK TABLES `loja` WRITE;
/*!40000 ALTER TABLE `loja` DISABLE KEYS */;
INSERT INTO `loja` VALUES (3,'Legend Motorcars','89849191/9515-91','71.680-363','Condomínio Portal do Lago Sul','Setor Habitacional Jardim Botânico','Brasília','DF',1,1,1);
/*!40000 ALTER TABLE `loja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maritimo`
--

DROP TABLE IF EXISTS `maritimo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maritimo` (
  `idmaritimo` int(1) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `cor` varchar(15) NOT NULL,
  `motor` varchar(30) NOT NULL,
  `placa` varchar(10) NOT NULL,
  `renavam` varchar(20) NOT NULL,
  `chassi` varchar(20) NOT NULL,
  `valor` double NOT NULL,
  `ano` varchar(15) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`idmaritimo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maritimo`
--

LOCK TABLES `maritimo` WRITE;
/*!40000 ALTER TABLE `maritimo` DISABLE KEYS */;
INSERT INTO `maritimo` VALUES (3,'Intermarine','Eldorado','Branca','bi-motor','ITM-0065','51654815','165sdf1s6d8a',1.3,'2015','intermarine-80.jpg');
/*!40000 ALTER TABLE `maritimo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `terrestre`
--

DROP TABLE IF EXISTS `terrestre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `terrestre` (
  `idterrestre` int(1) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `cor` varchar(15) NOT NULL,
  `motor` varchar(30) NOT NULL,
  `placa` varchar(10) NOT NULL,
  `renavam` varchar(20) NOT NULL,
  `chassi` varchar(20) NOT NULL,
  `valor` double NOT NULL,
  `ano` varchar(15) NOT NULL,
  `km` double NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`idterrestre`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `terrestre`
--

LOCK TABLES `terrestre` WRITE;
/*!40000 ALTER TABLE `terrestre` DISABLE KEYS */;
INSERT INTO `terrestre` VALUES (4,'Huracan','Lamboghini','Branca','v10','HUR-0010','645654654','64654dsasa84a',2,'2017',5,'huracan.jpg'),(5,'GTR ','Nissan','Branca','v6 bi-turbo','GTR-0666','65165155','16s5da16d5a1',800,'2015',8,'gtr.jpg');
/*!40000 ALTER TABLE `terrestre` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-23 13:59:03
