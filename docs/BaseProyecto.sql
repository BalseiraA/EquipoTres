-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: EquipoTres
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `grupo`
--

DROP TABLE IF EXISTS `grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupo` (
  `Grupo_ID` tinyint(4) NOT NULL,
  `Grupo` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Grupo_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo`
--

LOCK TABLES `grupo` WRITE;
/*!40000 ALTER TABLE `grupo` DISABLE KEYS */;

INSERT INTO `equipotres`.`grupo` (Grupo_ID, Grupo) VALUES (1, '560');
INSERT INTO `equipotres`.`grupo` (Grupo_ID, Grupo) VALUES (2, '561');

/*!40000 ALTER TABLE `grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materiahasgrupo`
--

DROP TABLE IF EXISTS `materiahasgrupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materiahasgrupo` (
  `Materia_ID` tinyint(4) DEFAULT NULL,
  `Grupo_ID` tinyint(4) DEFAULT NULL,
  `MateriaHasGrupo_ID` tinyint(4) NOT NULL,
  PRIMARY KEY (`MateriaHasGrupo_ID`),
  KEY `Materia_ID` (`Materia_ID`),
  KEY `Grupo_ID` (`Grupo_ID`),
  CONSTRAINT `materiahasgrupo_ibfk_1` FOREIGN KEY (`Materia_ID`) REFERENCES `materias` (`Materia_ID`),
  CONSTRAINT `materiahasgrupo_ibfk_2` FOREIGN KEY (`Grupo_ID`) REFERENCES `grupo` (`Grupo_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materiahasgrupo`
--

LOCK TABLES `materiahasgrupo` WRITE;
/*!40000 ALTER TABLE `materiahasgrupo` DISABLE KEYS */;

INSERT INTO `equipotres`.`materiahasgrupo` (MateriaHasGrupo_ID, Materia_ID, Grupo_ID) VALUES (1, 1, 1);
INSERT INTO `equipotres`.`materiahasgrupo` (MateriaHasGrupo_ID, Materia_ID, Grupo_ID) VALUES (2, 2, 1);
INSERT INTO `equipotres`.`materiahasgrupo` (MateriaHasGrupo_ID, Materia_ID, Grupo_ID) VALUES (2, 3, 1);
INSERT INTO `equipotres`.`materiahasgrupo` (MateriaHasGrupo_ID, Materia_ID, Grupo_ID) VALUES (2, 4, 1);
INSERT INTO `equipotres`.`materiahasgrupo` (MateriaHasGrupo_ID, Materia_ID, Grupo_ID) VALUES (2, 5, 1);
INSERT INTO `equipotres`.`materiahasgrupo` (MateriaHasGrupo_ID, Materia_ID, Grupo_ID) VALUES (2, 6, 1);

/*!40000 ALTER TABLE `materiahasgrupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materias`
--

DROP TABLE IF EXISTS `materias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materias` (
  `Materia_ID` tinyint(4) NOT NULL,
  `Materia` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Materia_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materias`
--

LOCK TABLES `materias` WRITE;
/*!40000 ALTER TABLE `materias` DISABLE KEYS */;

INSERT INTO `equipotres`.`materias` (Materia_ID, Materia) VALUES (0, 'Todas');
INSERT INTO `equipotres`.`materias` (Materia_ID, Materia) VALUES (1, 'Matemáticas');
INSERT INTO `equipotres`.`materias` (Materia_ID, Materia) VALUES (2, 'Literatura');
INSERT INTO `equipotres`.`materias` (Materia_ID, Materia) VALUES (3, 'Física');
INSERT INTO `equipotres`.`materias` (Materia_ID, Materia) VALUES (4, 'Química');
INSERT INTO `equipotres`.`materias` (Materia_ID, Materia) VALUES (5, 'Biología');
INSERT INTO `equipotres`.`materias` (Materia_ID, Materia) VALUES (6, 'Historia');

/*!40000 ALTER TABLE `materias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `turno`
--

DROP TABLE IF EXISTS `turno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `turno` (
  `Turno_ID` tinyint(4) NOT NULL,
  `Usuario_ID` tinyint(4) DEFAULT NULL,
  `TipoTurno` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`Turno_ID`),
  KEY `Usuario_ID` (`Usuario_ID`),
  CONSTRAINT `turno_ibfk_1` FOREIGN KEY (`Usuario_ID`) REFERENCES `usuario` (`Usuario_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `turno`
--

LOCK TABLES `turno` WRITE;
/*!40000 ALTER TABLE `turno` DISABLE KEYS */;

INSERT INTO `equipotres`.`turno` (Turno_ID, Usuario_ID, TipoTurno) VALUES (1, 1, 'Vespertino');
INSERT INTO `equipotres`.`turno` (Turno_ID, Usuario_ID, TipoTurno) VALUES (2, 2, 'Matutino');

/*!40000 ALTER TABLE `turno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `Usuario_ID` tinyint(4) NOT NULL,
  `Grupo_ID` tinyint(4) DEFAULT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Apellidos` varchar(20) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Contrasena` varchar(20) DEFAULT NULL,
  `RFC` varchar(15) DEFAULT NULL,
  `NumCuenta` varchar(10) DEFAULT NULL,
  `NumTrabajador` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`Usuario_ID`),
  KEY `Grupo_ID` (`Grupo_ID`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Grupo_ID`) REFERENCES `grupo` (`Grupo_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;

INSERT INTO `equipotres`.`usuario`
(Usuario_ID, Grupo_ID, Nombre, Apellidos, Correo, Contrasena, RFC, NumCuenta, NumTrabajador)
VALUES
(1, 0, 'Estefanni', 'Torres', 'efanni@hotmail.com', '123123', 'E01082007G23', NULL, '00001');
INSERT INTO `equipotres`.`usuario`
(Usuario_ID, Grupo_ID, Nombre, Apellidos, Correo, Contrasena, RFC, NumCuenta, NumTrabajador)
VALUES
(1, 0, 'Jennifer', 'Vazquez', 'jenny@gmail.com', '123123', NULL, '321056553', NULL);

/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

--
-- Table structure for table `eventos`
--

DROP TABLE IF EXISTS `eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventos` (
  `Evento_ID` tinyint(4) NOT NULL AUTO_INCREMENT,
  `Materia_ID` tinyint(4) NOT NULL,
  `Usuario_ID` tinyint(4) NOT NULL,
  `Titulo` nvarchar(100) NOT NULL,
  `Fecha` date NOT NULL,
  `HoraInicial` time NULL,
  `HoraFinal` time NULL,
  `Descripcion` nvarchar(500) NOT NULL,
  PRIMARY KEY (`Evento_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos`
--

LOCK TABLES `eventos` WRITE;
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;
UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-06  13:03:56
