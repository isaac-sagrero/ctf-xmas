-- MySQL dump 10.13  Distrib 8.0.27, for macos11 (x86_64)
--
-- Host: 127.0.0.1    Database: xmas2018
-- ------------------------------------------------------
-- Server version	5.7.35

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
-- Table structure for table `codigos`
--

DROP TABLE IF EXISTS `codigos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `codigos` (
  `idcodigos` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(200) NOT NULL,
  `puntos` int(11) NOT NULL,
  `usado` int(1) NOT NULL,
  `tipo` varchar(500) NOT NULL,
  `reto` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idcodigos`),
  UNIQUE KEY `codigo_UNIQUE` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `codigos`
--

LOCK TABLES `codigos` WRITE;
/*!40000 ALTER TABLE `codigos` DISABLE KEYS */;
INSERT INTO `codigos` VALUES (1,'7ca959d6-b5cd',350,0,'reto_ct','Consultoría Técnica Party'),(2,'f2e23e63-229c',350,0,'reto_ct','Consultoría Técnica Party'),(3,'5867bbdb-5359',350,0,'reto_ci','Ciberinteligencia Party'),(4,'e6e95e5d-87ca',350,0,'reto_ci','Ciberinteligencia Party'),(5,'ff7ce763-274f',350,0,'reto_aut','Automatización Party'),(6,'2e081072-ec0d',350,0,'reto_aut','Automatización Party'),(7,'4322ff93-3faa',350,0,'reto_ir','DFIRT Party'),(8,'a412fbd8-d6ef',350,0,'reto_ir','DFIRT Party'),(9,'30e54b0a-a20e',150,0,'reto_extra','Intento de SQLi en validación de código (easter egg)'),(10,'f06b8ed4-c179',150,0,'reto_extra','Reto evasión de login (easter egg)'),(11,'ec435d7d-cebd',150,0,'reto_extra','Reto robots.txt base64 (easter egg)'),(12,'1a4abbd6-9386',150,0,'reto_extra','Reto robots.txt binario (easter egg)'),(13,'jqiNdNFs4Ex8Og==',150,0,'reto_extra','Reto casilla códigos (easter egg)'),(14,'b6xAcacApmfwWg==',150,0,'reto_extra','Reto invitación');
/*!40000 ALTER TABLE `codigos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `retos`
--

DROP TABLE IF EXISTS `retos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `retos` (
  `idretos` int(11) NOT NULL AUTO_INCREMENT,
  `idcodigos` int(11) DEFAULT NULL,
  `idusers` int(11) DEFAULT NULL,
  PRIMARY KEY (`idretos`),
  KEY `idcodigos_idx` (`idcodigos`),
  KEY `idusers_idx` (`idusers`),
  CONSTRAINT `idcodigos` FOREIGN KEY (`idcodigos`) REFERENCES `codigos` (`idcodigos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idusers` FOREIGN KEY (`idusers`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `retos`
--

LOCK TABLES `retos` WRITE;
/*!40000 ALTER TABLE `retos` DISABLE KEYS */;
INSERT INTO `retos` VALUES (4,14,1),(5,13,1);
/*!40000 ALTER TABLE `retos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `idusers` int(11) NOT NULL AUTO_INCREMENT,
  `teamname` varchar(45) DEFAULT NULL,
  `team1` varchar(45) DEFAULT NULL,
  `team2` varchar(45) DEFAULT NULL,
  `team3` varchar(45) DEFAULT NULL,
  `team4` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idusers`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'test@test.com','test@test.com','test@test.com','test@test.com','test@test.com','$2y$10$86h/B4tNPmu9b63aI0dTbODDHJXWIcuxJbNG1BtSRvaxuPSSMuRgu','test@test.com'),(2,'hack@hack.com','hack@hack.com','hack@hack.com','hack@hack.com','hack@hack.com','$2y$10$ysPTXsLvSkIZYy5dOdiIyuh4P7Uk5YCewQQYNU9CL8XXoT0Y1VqSW','hack@hack.com'),(3,'lol','l','azdas','asdas','asdsad','$2y$10$ysPTXsLvSkIZYy5dOdiIyuh4P7Uk5YCewQQYNU9CL8XXoT0Y1VqSW','wqdasdas'),(4,'asdas','asdsad','sadsad','asdasdas','asdasda','$2y$10$ysPTXsLvSkIZYy5dOdiIyuh4P7Uk5YCewQQYNU9CL8XXoT0Y1VqSW',NULL),(5,'hjk','kjh','kjhk','jh','kjh','$2y$10$UamaAncE.ph1PkD.YNEIAetqZ5YEcZUtTTlAPpnsJwLskauz79Ux6','kjh@test.com'),(6,'9879879','hjkh','kjh','kjh','kjh','$2y$10$A7A89TJe8GPBPSmHdIxbkee5mQde8tx6EwitppYJoPfShQI8DxXlq','iuhhiuyi@ugjgh.com'),(7,'jjjjjj','a','b','c','d','$2y$10$zhJGCKwE64Gs8q5CEc9XJeyiF9OtT2c8CHozzu7.JLkyiQu0UKtgC','jjjj@jjj.com'),(8,'tttt','khjkhjk','hkjhkjhk','hkjh','huuku','$2y$10$zwIQx7C/VJ/y6Js29/FJAOS/YRGDqj0W923Hi/mnFuHelp7yGq5bW','tttt@ttt.com');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-28 19:12:30
