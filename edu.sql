-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: edufast
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `edufast`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `edufast` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `edufast`;

--
-- Table structure for table `actividades`
--

DROP TABLE IF EXISTS `actividades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actividades` (
  `id_actividades` int(11) NOT NULL AUTO_INCREMENT,
  `nom_actividad` varchar(45) DEFAULT NULL,
  `descrip_actividad` varchar(45) DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `Codigo_logro` int(11) NOT NULL,
  `id_nota` int(11) NOT NULL,
  PRIMARY KEY (`id_actividades`),
  KEY `fk_logro` (`Codigo_logro`),
  KEY `fk_nota` (`id_nota`),
  CONSTRAINT `fk_logro` FOREIGN KEY (`Codigo_logro`) REFERENCES `logro` (`Codigo_logro`),
  CONSTRAINT `fk_nota` FOREIGN KEY (`id_nota`) REFERENCES `nota` (`id_nota`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividades`
--

LOCK TABLES `actividades` WRITE;
/*!40000 ALTER TABLE `actividades` DISABLE KEYS */;
INSERT INTO `actividades` VALUES (1,'Taller de Pintura','Aprender técnicas básicas de pintura al óleo',NULL,3682,6),(2,'Club de Lectura','Discusión de libros y autores contemporáneos',NULL,1992,5),(3,'Clase de Yoga','Sesiones de yoga para principiantes y avanzad',NULL,2693,4),(4,'Curso de Fotografía','Introducción a la fotografía digital y edició',NULL,7489,2),(5,'Taller de Cocina','Recetas y técnicas de cocina internacional',NULL,4809,4),(6,'Curso de Programación','Fundamentos de programación en Python',NULL,3789,2),(7,'Clase de Baile','Aprender diferentes estilos de baile',NULL,9368,2),(8,'Taller de Escritura Creativa','Desarrollo de habilidades de escritura',NULL,3682,3),(9,'Curso de Jardinería','Técnicas de jardinería y cuidado de plantas',NULL,2735,5),(10,'Taller de Teatro','Introducción a la actuación y producción teat',NULL,1992,6);
/*!40000 ALTER TABLE `actividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asistencia`
--

DROP TABLE IF EXISTS `asistencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_asistencia` date DEFAULT NULL,
  `asistencia` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_asistencia`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asistencia`
--

LOCK TABLES `asistencia` WRITE;
/*!40000 ALTER TABLE `asistencia` DISABLE KEYS */;
INSERT INTO `asistencia` VALUES (1,'2024-08-01','Presente'),(2,'2024-08-02','Ausente'),(3,'2024-08-03','Presente'),(4,'2024-08-04','Ausente'),(5,'2024-08-05','Presente'),(6,'2024-08-06','Ausente'),(7,'2024-08-07','Presente'),(8,'2024-08-08','Ausente'),(9,'2024-08-09','Presente'),(10,'2024-08-10','Ausente');
/*!40000 ALTER TABLE `asistencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curso`
--

DROP TABLE IF EXISTS `curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `curso` int(11) DEFAULT NULL,
  `grado_id` int(11) NOT NULL,
  `jornada_id` int(11) NOT NULL,
  `asistencia_id` int(11) NOT NULL,
  PRIMARY KEY (`id_curso`),
  KEY `fk_grado` (`grado_id`),
  KEY `fk_jornada2` (`jornada_id`),
  KEY `fk_asis` (`asistencia_id`),
  CONSTRAINT `fk_asis` FOREIGN KEY (`asistencia_id`) REFERENCES `asistencia` (`id_asistencia`),
  CONSTRAINT `fk_grado` FOREIGN KEY (`grado_id`) REFERENCES `grado` (`id_grado`),
  CONSTRAINT `fk_jornada2` FOREIGN KEY (`jornada_id`) REFERENCES `jornada` (`id_jornada`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curso`
--

LOCK TABLES `curso` WRITE;
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
INSERT INTO `curso` VALUES (1,103,4,7,3),(2,203,2,4,7),(3,303,3,8,3),(4,403,3,5,6),(5,503,3,4,4),(6,603,1,4,2),(7,703,3,5,2),(8,803,4,8,2),(9,903,3,8,3),(10,1003,2,8,4),(11,1103,5,8,3);
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grado`
--

DROP TABLE IF EXISTS `grado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grado` (
  `id_grado` int(11) NOT NULL AUTO_INCREMENT,
  `nivel_educativo` varchar(45) DEFAULT NULL,
  `grado` int(11) DEFAULT NULL,
  `jornada_id` int(11) NOT NULL,
  PRIMARY KEY (`id_grado`),
  KEY `fk_jor` (`jornada_id`),
  CONSTRAINT `fk_jor` FOREIGN KEY (`jornada_id`) REFERENCES `jornada` (`id_jornada`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grado`
--

LOCK TABLES `grado` WRITE;
/*!40000 ALTER TABLE `grado` DISABLE KEYS */;
INSERT INTO `grado` VALUES (1,'Primaria',1,2),(2,'Primaria',2,3),(3,'Primaria',3,5),(4,'Primaria',4,5),(5,'Primaria',5,2),(6,'Secundaria',6,6),(7,'Secundaria',7,2),(8,'Secundaria',8,6),(9,'Secundaria',9,6),(10,'Bachillerato',10,3),(11,'Bachillerato',11,7);
/*!40000 ALTER TABLE `grado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jornada`
--

DROP TABLE IF EXISTS `jornada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jornada` (
  `id_jornada` int(11) NOT NULL AUTO_INCREMENT,
  `jornada` varchar(45) DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_final` time DEFAULT NULL,
  PRIMARY KEY (`id_jornada`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jornada`
--

LOCK TABLES `jornada` WRITE;
/*!40000 ALTER TABLE `jornada` DISABLE KEYS */;
INSERT INTO `jornada` VALUES (1,'Mañana','06:00:00','14:00:00'),(2,'Tarde','14:00:00','22:00:00'),(3,'Noche','22:00:00','06:00:00'),(4,'Mañana','07:00:00','15:00:00'),(5,'Tarde','15:00:00','23:00:00'),(6,'Noche','23:00:00','07:00:00'),(7,'Mañana','08:00:00','16:00:00'),(8,'Tarde','16:00:00','00:00:00'),(9,'Noche','00:00:00','08:00:00'),(10,'Mañana','05:00:00','13:00:00'),(11,'Tarde','13:00:00','21:00:00');
/*!40000 ALTER TABLE `jornada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logro`
--

DROP TABLE IF EXISTS `logro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logro` (
  `Codigo_logro` int(45) NOT NULL,
  `nombre_logro` varchar(45) DEFAULT NULL,
  `descrip_logro` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Codigo_logro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logro`
--

LOCK TABLES `logro` WRITE;
/*!40000 ALTER TABLE `logro` DISABLE KEYS */;
INSERT INTO `logro` VALUES (1992,'Músico del Año','Premio al mejor desempeño en música'),(2693,'Escritor Destacado','Reconocimiento por excelencia en escritura cr'),(2735,'Voluntario del Año','Reconocimiento por servicio comunitario excep'),(3682,'Mejor Orador','Reconocimiento por habilidades excepcionales '),(3789,'Artista del Año','Reconocimiento al mejor desempeño en artes vi'),(4809,'Líder Estudiantil','Premio por liderazgo y organización estudiant'),(6429,'Mejor Estudiante','Reconocimiento al mejor desempeño académico d'),(7489,'Mejor Proyecto de Ciencia','Premio al mejor proyecto en la feria de cienc'),(7912,'Atleta Destacado','Premio al mejor rendimiento en deportes'),(9368,'Innovador del Año','Premio por la mejor idea innovadora en tecnol');
/*!40000 ALTER TABLE `logro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logro_materia`
--

DROP TABLE IF EXISTS `logro_materia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logro_materia` (
  `Codigo_logro` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  KEY `Codigo_logro` (`Codigo_logro`),
  KEY `id_materia` (`id_materia`),
  CONSTRAINT `logro_materia_ibfk_1` FOREIGN KEY (`Codigo_logro`) REFERENCES `logro` (`Codigo_logro`),
  CONSTRAINT `logro_materia_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logro_materia`
--

LOCK TABLES `logro_materia` WRITE;
/*!40000 ALTER TABLE `logro_materia` DISABLE KEYS */;
INSERT INTO `logro_materia` VALUES (3682,1),(1992,6),(2693,2),(7489,9),(4809,7),(3789,5),(9368,2),(2735,5),(7912,8),(6429,5);
/*!40000 ALTER TABLE `logro_materia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materia`
--

DROP TABLE IF EXISTS `materia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materia` (
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `materia` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materia`
--

LOCK TABLES `materia` WRITE;
/*!40000 ALTER TABLE `materia` DISABLE KEYS */;
INSERT INTO `materia` VALUES (1,'Matemáticas'),(2,'Ciencias'),(3,'Historia'),(4,'Geografía'),(5,'Lengua y Literatura'),(6,'Educación Física'),(7,'Arte'),(8,'Música'),(9,'Informática'),(10,'Biología');
/*!40000 ALTER TABLE `materia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materia_curso`
--

DROP TABLE IF EXISTS `materia_curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materia_curso` (
  `id_materia` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  KEY `id_materia` (`id_materia`),
  KEY `id_curso` (`id_curso`),
  CONSTRAINT `materia_curso_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`),
  CONSTRAINT `materia_curso_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materia_curso`
--

LOCK TABLES `materia_curso` WRITE;
/*!40000 ALTER TABLE `materia_curso` DISABLE KEYS */;
INSERT INTO `materia_curso` VALUES (10,1),(9,2),(8,3),(7,4),(6,5),(5,6),(4,7),(3,8),(2,9),(1,10);
/*!40000 ALTER TABLE `materia_curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materia_registro`
--

DROP TABLE IF EXISTS `materia_registro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materia_registro` (
  `id_materia` int(11) NOT NULL,
  `num_doc` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_jornada` int(11) NOT NULL,
  `id_asistencia` int(11) NOT NULL,
  KEY `id_materia` (`id_materia`),
  KEY `num_doc` (`num_doc`),
  KEY `id_rol` (`id_rol`),
  KEY `id_jornada` (`id_jornada`),
  KEY `id_asistencia` (`id_asistencia`),
  CONSTRAINT `materia_registro_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`),
  CONSTRAINT `materia_registro_ibfk_2` FOREIGN KEY (`num_doc`) REFERENCES `registro` (`num_doc`),
  CONSTRAINT `materia_registro_ibfk_3` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`),
  CONSTRAINT `materia_registro_ibfk_4` FOREIGN KEY (`id_jornada`) REFERENCES `jornada` (`id_jornada`),
  CONSTRAINT `materia_registro_ibfk_5` FOREIGN KEY (`id_asistencia`) REFERENCES `asistencia` (`id_asistencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materia_registro`
--

LOCK TABLES `materia_registro` WRITE;
/*!40000 ALTER TABLE `materia_registro` DISABLE KEYS */;
INSERT INTO `materia_registro` VALUES (1,1011348976,6,8,3),(2,1234567809,4,7,3),(3,1029384756,4,6,2),(4,1098765432,4,7,2),(5,1109876543,3,7,2),(6,1112345678,5,8,2),(7,1123456789,4,6,2),(8,1134567890,5,8,2),(9,1145678901,5,8,3),(10,1156789012,5,8,3);
/*!40000 ALTER TABLE `materia_registro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nota`
--

DROP TABLE IF EXISTS `nota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nota` (
  `id_nota` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_nota` date DEFAULT NULL,
  `nota` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_nota`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nota`
--

LOCK TABLES `nota` WRITE;
/*!40000 ALTER TABLE `nota` DISABLE KEYS */;
INSERT INTO `nota` VALUES (1,'2024-08-01','4.5'),(2,'2024-08-02','3.8'),(3,'2024-08-03','4.0'),(4,'2024-08-04','3.6'),(5,'2024-08-05','4.2'),(6,'2024-08-06','3.9'),(7,'2024-08-07','4.1'),(8,'2024-08-08','3.7'),(9,'2024-08-09','4.3'),(10,'2024-08-10','3.5');
/*!40000 ALTER TABLE `nota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nota_registro`
--

DROP TABLE IF EXISTS `nota_registro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nota_registro` (
  `id_nota` int(11) NOT NULL,
  `num_doc` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_jornada` int(11) NOT NULL,
  `id_asistencia` int(11) NOT NULL,
  KEY `id_nota` (`id_nota`),
  KEY `num_doc` (`num_doc`),
  KEY `id_rol` (`id_rol`),
  KEY `id_jornada` (`id_jornada`),
  KEY `id_asistencia` (`id_asistencia`),
  CONSTRAINT `nota_registro_ibfk_1` FOREIGN KEY (`id_nota`) REFERENCES `nota` (`id_nota`),
  CONSTRAINT `nota_registro_ibfk_2` FOREIGN KEY (`num_doc`) REFERENCES `registro` (`num_doc`),
  CONSTRAINT `nota_registro_ibfk_3` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`),
  CONSTRAINT `nota_registro_ibfk_4` FOREIGN KEY (`id_jornada`) REFERENCES `jornada` (`id_jornada`),
  CONSTRAINT `nota_registro_ibfk_5` FOREIGN KEY (`id_asistencia`) REFERENCES `asistencia` (`id_asistencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nota_registro`
--

LOCK TABLES `nota_registro` WRITE;
/*!40000 ALTER TABLE `nota_registro` DISABLE KEYS */;
INSERT INTO `nota_registro` VALUES (1,1011348976,5,3,2),(2,1234567809,1,4,2),(3,1029384756,4,8,2),(4,1098765432,7,6,4),(5,1109876543,4,6,3),(6,1112345678,4,8,4),(7,1123456789,4,7,2),(8,1134567890,7,5,4),(9,1145678901,5,3,2),(10,1156789012,4,5,6);
/*!40000 ALTER TABLE `nota_registro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publicacion`
--

DROP TABLE IF EXISTS `publicacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publicacion` (
  `id_publicacion` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(45) DEFAULT NULL,
  `evento` varchar(45) DEFAULT NULL,
  `fecha_evento` date DEFAULT NULL,
  `informacion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_publicacion`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publicacion`
--

LOCK TABLES `publicacion` WRITE;
/*!40000 ALTER TABLE `publicacion` DISABLE KEYS */;
INSERT INTO `publicacion` VALUES (1,NULL,'Conferencia de Ciencia','0000-00-00','2024-03-12'),(2,NULL,'Feria de Tecnología','0000-00-00','2024-04-15'),(3,NULL,'Taller de Programación','0000-00-00','2024-05-20'),(4,NULL,'Exposición de Arte','0000-00-00','2024-06-10'),(5,NULL,'Competencia de Robótica','0000-00-00','2024-07-25'),(6,NULL,'Maratón de Lectura','0000-00-00','2024-08-30'),(7,NULL,'Debate Académico','0000-00-00','2024-09-15'),(8,NULL,'Día de la Ciencia','0000-00-00','2024-10-05'),(9,NULL,'Festival Cultural','0000-00-00','2024-11-20'),(10,NULL,'Gira Deportiva','0000-00-00','2024-12-18');
/*!40000 ALTER TABLE `publicacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publicaion_registro`
--

DROP TABLE IF EXISTS `publicaion_registro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publicaion_registro` (
  `id_publicacion` int(11) NOT NULL,
  `num_doc` int(11) NOT NULL,
  KEY `id_publicacion` (`id_publicacion`),
  KEY `num_doc` (`num_doc`),
  CONSTRAINT `publicaion_registro_ibfk_1` FOREIGN KEY (`id_publicacion`) REFERENCES `publicacion` (`id_publicacion`),
  CONSTRAINT `publicaion_registro_ibfk_2` FOREIGN KEY (`num_doc`) REFERENCES `registro` (`num_doc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publicaion_registro`
--

LOCK TABLES `publicaion_registro` WRITE;
/*!40000 ALTER TABLE `publicaion_registro` DISABLE KEYS */;
INSERT INTO `publicaion_registro` VALUES (1,1011348976),(2,1234567809),(3,1029384756),(4,1098765432),(5,1109876543),(6,1112345678),(7,1123456789),(8,1134567890),(9,1145678901),(10,1156789012);
/*!40000 ALTER TABLE `publicaion_registro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registro`
--

DROP TABLE IF EXISTS `registro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registro` (
  `num_doc` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_doc` varchar(50) DEFAULT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `contraseña` varchar(45) DEFAULT NULL,
  `rol_id` int(11) NOT NULL,
  `jornada_id` int(11) NOT NULL,
  `asistencia_id` int(11) NOT NULL,
  PRIMARY KEY (`num_doc`),
  KEY `fk_rol` (`rol_id`),
  KEY `fk_jornada` (`jornada_id`),
  KEY `fk_asistencia` (`asistencia_id`),
  CONSTRAINT `fk_asistencia` FOREIGN KEY (`asistencia_id`) REFERENCES `asistencia` (`id_asistencia`),
  CONSTRAINT `fk_jornada` FOREIGN KEY (`jornada_id`) REFERENCES `jornada` (`id_jornada`),
  CONSTRAINT `fk_rol` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=1234567810 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registro`
--

LOCK TABLES `registro` WRITE;
/*!40000 ALTER TABLE `registro` DISABLE KEYS */;
INSERT INTO `registro` VALUES (1011348976,'tarjeta de identidad','yean camilo','suarez lopez',2147483647,'yenlop@gmail.com','yean','1234yeye',1,2,4),(1029384756,'cedula de ciudadania','juan carlos','martinez rojas',2147483647,'juanmart@gmail.com','juan','juan1234',2,5,3),(1098765432,'cedula de ciudadania','maria jose','gomez diaz',2147483647,'mariagomez@gmail.com','maria','maria5678',1,3,4),(1109876543,'cedula de ciudadania','pedro pablo','lopez garcia',2147483647,'pedrolopez@gmail.com','pedro','pedro91011',3,4,2),(1112345678,'cedula de ciudadania','ana maria','rodriguez fernandez',2147483647,'anarodriguez@gmail.com','ana','ana1213',3,4,5),(1123456789,'cedula de ciudadania','carlos andres','sanchez perez',2147483647,'carlossanchez@gmail.com','carlos','carlos1415',2,3,5),(1134567890,'cedula de ciudadania','laura sofia','ramirez gonzalez',2147483647,'lauraramirez@gmail.com','laura','laura1617',2,4,6),(1145678901,'cedula de ciudadania','diego fernando','castro lopez',2147483647,'diegocastro@gmail.com','diego','diego1819',3,5,7),(1156789012,'cedula de ciudadania','juliana andrea','moreno martinez',2147483647,'julianamoreno@gmail.com','juliana','juliana2021',4,6,7),(1234567809,'tarjeta de identidad','luz sofia','torres perez',2147483647,'softor@gmail.com','luz','345luz',2,3,5);
/*!40000 ALTER TABLE `registro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` VALUES (1,'Coordinador'),(2,'Admin'),(3,'Profesor'),(4,'Estudiante'),(5,'Coordinador'),(6,'Profesor'),(7,'Estudiante'),(8,'Coordinador'),(9,'Profesor'),(10,'Estudiante'),(11,'Profesor'),(12,'Estudiante');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-15  3:44:18
