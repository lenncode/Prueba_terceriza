-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: terceriza
-- ------------------------------------------------------
-- Server version	8.0.34

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cliente`
--
create schema terceriza;
use terceriza ;
DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cliente` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `telefono` varchar(20) NOT NULL,
  `tipo_documento_id` int DEFAULT NULL,
  `numero_documento` varchar(20) NOT NULL,
  `tipo_plan_id` int DEFAULT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `nivel_1_id` int DEFAULT NULL,
  `nivel_2_id` int DEFAULT NULL,
  `nivel_3_id` int DEFAULT NULL,
  `N_SN` varchar(10) NOT NULL,
  `act_inmediata_id` int DEFAULT NULL,
  `observaciones` text,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'123123',1,'12345678',1,'Sam','Melendez',1,1,1,'123123',1,'weqeqw'),(2,'99999999',1,'12345678',1,'Sam','Melendez',2,2,2,'9898989',1,'TEST'),(3,'9191919',2,'12312312',2,'Sam','Melendez',2,2,2,'123213',2,'2test'),(4,'123123233',1,'13131231',2,'Sam','Melendez',1,2,1,'123213123',1,'test'),(5,'123123123',1,'12312321',1,'Sam','Melendez',1,1,1,'123123',-1,'123'),(6,'123123123',1,'12312321',1,'Sam','Melendez',1,1,1,'123123',-1,'123'),(7,'123123123',1,'12312321',1,'Sam','Melendez',1,1,1,'123123',-1,'123'),(8,'123123332',2,'123123321',1,'1232','123213',1,1,1,'',-1,'TEST'),(9,'123123332',2,'123123321',1,'1232','123213',1,1,1,'',-1,'TEST'),(10,'123123312',1,'12312323',1,'123123','123123312',1,1,1,'13123',-1,'TEST'),(11,'123123123',2,'123123332',1,'TEST','PRUEBA',1,2,2,'',1,'TEST'),(12,'131232223',1,'22222222',1,'Sam','Melendez',1,1,1,'123123',-1,'TEST'),(13,'979792222',1,'12313323',1,'123123','123123',1,2,2,'123213',-1,'ts'),(14,'123213233',2,'131232333',1,'213213132','1231231',1,1,1,'',1,'test'),(15,'123213233',2,'131232333',1,'213213132','1231231',1,1,1,'',1,'test'),(16,'213123123',3,'12312332133',1,'Sam','Melendez',2,1,1,'',-1,'test'),(17,'213123123',3,'12312332133',1,'Sam','Melendez',2,1,1,'',-1,'test'),(18,'123123233',2,'123213323',2,'Sam','Melendez',1,1,1,'',1,'test'),(19,'312323233',2,'123123333',1,'13123213','123123',2,1,2,'test',1,'1312'),(20,'123123211',1,'12312312',1,'12312312312','13123123',1,1,1,'123123',-1,'test'),(21,'123123213',1,'12312312',2,'dadas','dsadsad',1,1,1,'123123',-1,'dadss'),(22,'123123123',2,'123123213',2,'123123','12312332',1,1,1,'',1,'rest'),(23,'131232313',1,'12312321',1,'123123','12312312321',1,1,1,'123123',-1,''),(24,'131232313',1,'12312321',1,'123123','12312312321',1,1,1,'123123',-1,''),(25,'123123213',2,'131231233',1,'Sam','Melendez',1,1,1,'',1,''),(26,'123123332',1,'12312331',1,'12312312312','1231231233',1,1,1,'123213123',-1,''),(27,'123123123',1,'33333333',1,'333333333333','33333333333',1,2,3,'123',-1,'123');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado_venta`
--

DROP TABLE IF EXISTS `estado_venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estado_venta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_venta`
--

LOCK TABLES `estado_venta` WRITE;
/*!40000 ALTER TABLE `estado_venta` DISABLE KEYS */;
INSERT INTO `estado_venta` VALUES (1,'PENDIENTE'),(2,'Completada');
/*!40000 ALTER TABLE `estado_venta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfiles`
--

DROP TABLE IF EXISTS `perfiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perfiles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfiles`
--

LOCK TABLES `perfiles` WRITE;
/*!40000 ALTER TABLE `perfiles` DISABLE KEYS */;
/*!40000 ALTER TABLE `perfiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `id_perfiles` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_perfiles` (`id_perfiles`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_perfiles`) REFERENCES `perfiles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventas`
--

DROP TABLE IF EXISTS `ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ventas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_planbase` int NOT NULL,
  `ciclo` int NOT NULL,
  `id_plan_migrar` int NOT NULL,
  `id_departamento` int NOT NULL,
  `id_tipo_fd` int NOT NULL,
  `id_tipo_venta` int NOT NULL,
  `id_estado_venta` int NOT NULL,
  `id_cliente` int NOT NULL,
  `id_usuario` int NOT NULL,
  `id_usuario_actualiza` int NOT NULL,
  `fechaRegistro` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_estado_venta` (`id_estado_venta`),
  CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_estado_venta`) REFERENCES `estado_venta` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas`
--

LOCK TABLES `ventas` WRITE;
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
INSERT INTO `ventas` VALUES (1,1,2023,2,3,1,1,1,1,101,102,'2023-11-29 10:30:00'),(2,2,2023,3,4,2,2,2,2,102,103,'2023-11-30 09:45:00');
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-29 15:49:28
