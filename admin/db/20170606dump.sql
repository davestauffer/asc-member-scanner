-- MySQL dump 10.13  Distrib 5.7.17, for osx10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: archstreetcenterscanner
-- ------------------------------------------------------
-- Server version	5.7.17

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(32) DEFAULT NULL,
  `Email` varchar(128) DEFAULT NULL COMMENT 'email to use when user forgets password',
  `BackUpEmail` varchar(128) DEFAULT NULL COMMENT 'email to use when user forgets password',
  `Password` varchar(40) DEFAULT NULL COMMENT 'SalesForce custom field',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `checkins`
--

DROP TABLE IF EXISTS `checkins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `checkins` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `MemberId` int(5) DEFAULT NULL,
  `CheckIn` datetime DEFAULT NULL COMMENT 'Check in time',
  `CheckOut` datetime DEFAULT NULL COMMENT 'Check out time',
  `Status` varchar(10) DEFAULT NULL COMMENT 'In or Out',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `checkins`
--

LOCK TABLES `checkins` WRITE;
/*!40000 ALTER TABLE `checkins` DISABLE KEYS */;
/*!40000 ALTER TABLE `checkins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `MemberId` int(5) DEFAULT NULL,
  `BSU__C` varchar(12) DEFAULT NULL COMMENT 'SalesForce custom field for monthly recording',
  `BIRTHDATE__C` date DEFAULT NULL COMMENT 'SalesForce custom field',
  `MEMBER_FIRST_NAME__C` varchar(40) DEFAULT NULL COMMENT 'SalesForce custom field',
  `MEMBER_LAST_NAME__C` varchar(60) DEFAULT NULL COMMENT 'SalesForce custom field',
  `MEMBERSHIP_STATUS__C` varchar(8) DEFAULT NULL COMMENT 'SalesForce custom field',
  `MEMBER_PICTURE__C` blob,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (1,15,'36136232789','1990-09-27','Maribel','Anavitate','Inactive',NULL),(2,37,'361109482','1988-12-13','Shannon','Bowman','Inactive',NULL),(3,21,'364-15528','1989-12-03','Joseph','Beamesderfer','Inactive',NULL),(4,10,NULL,'1976-12-21','Felix','Agosto','Inactive',NULL),(5,14,'36223895','1967-10-17','Luz','Alvarez','Inactive',NULL),(6,20,'3616070','1958-03-02','David','Barto','Inactive',NULL),(7,32,'3615889','1964-09-06','Melissa','Bleyer','Inactive',NULL),(8,11,'140727','1968-09-09','Elena','Alamo-Diaz','Inactive',NULL),(9,12,'36136265237','1976-01-01','Mushtaq','Alhuraishi','Inactive',NULL),(10,16,'361116091','1980-02-01','Matthew','Andersen','Inactive',NULL),(11,91,'36211550','1958-05-05','Sharon','Fisher','Inactive',NULL),(12,87,NULL,'1971-02-16','Heidi','Fornadel','Inactive',NULL),(13,88,'36111381','1956-01-30','Robert','Forrey','Inactive',NULL),(14,67,NULL,'1967-11-21','Enrique','Dejesus','Inactive',NULL),(15,71,NULL,'1957-07-23','Regina','Dinkel','Inactive',NULL),(16,44,NULL,'1984-03-23','Brandon','Campadonico','Inactive',NULL),(17,75,NULL,'1962-11-02','Harriet','Dunlap','Inactive',NULL),(18,83,'3618579','1966-08-15','Mark','Farmer','Inactive',NULL),(19,92,'36136265926','1959-01-12','Philip','Fisher','Inactive',NULL),(20,72,'3617250','1958-06-05','Curtis','Dixon','Inactive',NULL),(21,85,'36136238018','1985-04-21','Mathew','Flounlacker','Inactive',NULL),(22,95,'361-110533','1972-09-24','Andrew','Friedman','Inactive',NULL),(23,90,NULL,'1968-03-22','David','Fisher','Inactive',NULL),(24,102,'36136263636','1965-10-03','Tammy','Gatto','Inactive',NULL),(25,156,NULL,'1959-02-11','Iris','Jackson-Johnson','Inactive',NULL),(26,153,'36130721','1966-06-16','Kelly','Rhoads','Inactive',NULL),(27,152,NULL,'1975-10-16','Joshua','Hughes','Inactive',NULL),(28,43,NULL,'1954-09-16','Geraldine','Butler','Inactive',NULL),(29,29,'36225630','1983-04-08','Tamera','Berkheimer','Inactive',NULL),(30,38,NULL,'1970-12-19','Jimmy','Bradley','Inactive',NULL),(31,34,NULL,'1958-03-03','Michael','Boas','Inactive',NULL),(32,82,'361117842','1994-05-02','Anthony','Falco','Inactive',NULL),(33,89,'3621339674','1967-12-09','Doug','Foster','Inactive',NULL),(34,81,NULL,'1964-10-23','Gene','Essig','Inactive',NULL),(35,33,'36123985','1962-04-13','Diana','Blimline','Inactive',NULL),(36,41,'26218105','1978-03-07','Jeffrey','Buckner','Inactive',NULL),(37,22,'3629413','1965-08-13','Billy','Bear','Inactive',NULL),(38,27,NULL,'1976-05-17','Philipp','Beltran','Inactive',NULL),(39,23,'361112441','1993-11-13','Amanda','Becker','Inactive',NULL),(40,26,NULL,'1985-03-23','Paula','Belt','Inactive',NULL),(41,73,NULL,'1958-10-07','Margaret','Dulio','Inactive',NULL),(42,78,NULL,'1984-03-20','Tiffani','Egelston','Inactive',NULL),(43,66,NULL,'1992-02-21','Amanda','DeJesus','Inactive',NULL),(44,103,NULL,'1996-02-04','Blair','Goshert III','Inactive',NULL),(45,107,'361100467','1974-08-22','Serena','Groff','Inactive',NULL),(46,109,NULL,'1963-03-03','Helen','Grube','Inactive',NULL),(47,155,NULL,'1966-06-20','Marcie','Jackson','Inactive',NULL),(48,160,'36136265752','1992-07-17','Adam','Johnson','Inactive',NULL),(49,150,'3618034','1955-06-15','Joseph','Jones','Inactive',NULL),(50,159,NULL,'1964-01-10','Katherine','Janes','Inactive',NULL),(51,149,NULL,'1958-10-22','Alan','Jenson','Inactive',NULL),(52,108,'361-101311','1979-11-18','Shannon','Groff','Inactive',NULL),(53,158,NULL,'1967-06-15','James','Michael','Inactive',NULL),(54,151,'361-5823','1962-11-10','Alfred','Jackson','Inactive',NULL),(55,154,'361-08413-24','1959-09-12','Mark','Thompson','Inactive',NULL),(56,161,'36136265884','1964-05-08','Gary','Johnson','Inactive',NULL),(57,62,NULL,'1963-12-08','Christine','Dean','Inactive',NULL),(58,7,NULL,'1985-03-02','Cory','Adams','Inactive',NULL),(59,63,'36136236038','1970-12-18','Christopher','Dean','Inactive',NULL),(60,64,'140634','1980-04-10','Haleem','Deloach','Inactive',NULL),(61,4,NULL,'1959-09-21','Timothy','Bolig','Inactive',NULL),(62,65,NULL,'1963-01-15','Nathan','Dennis','Inactive',NULL),(63,49,'36222330','1985-07-02','Marc','Celley','Inactive',NULL),(64,52,NULL,'1959-07-09','Susan','Corse','Inactive',NULL),(65,51,NULL,'1967-07-06','Andre','Copeland','Inactive',NULL),(66,58,'36223953','1964-03-31','Robert','Darlington','Inactive',NULL),(67,134,NULL,'1947-04-29','Voyd','Ingram','Inactive',NULL),(68,123,'36136234252','1972-12-06','Lawrence','Hovis','Inactive',NULL),(69,132,NULL,'1982-07-19','TC','Igyor','Inactive',NULL),(70,119,'36220168','1957-12-20','Cathy','Hendricks','Inactive',NULL),(71,133,'361-22354','1956-04-25','Linda','Impriano','Inactive',NULL),(72,138,'36124056','1974-06-03','Charis','Kauffman','Inactive',NULL),(73,146,'36117589','1986-04-21','Joshua','Kitch','Inactive',NULL),(74,139,'361-01983-74','1953-01-22','Anthony','Kelly','Inactive',NULL),(75,144,'361-05005-74','1957-04-23','Carl','Johnson','Inactive',NULL),(76,135,'36136238147','1966-11-26','Tammy','Humbert','Inactive',NULL),(77,128,'3619870','1967-04-28','Robert','Hurlburt Jr','Inactive',NULL),(78,125,NULL,'1967-10-16','Kevin','Homes','Inactive',NULL),(79,59,'36136254130','1988-09-17','Jesus','Davila-Velez','Inactive',NULL),(80,137,NULL,'1982-07-19','Tivsoo','Igyor','Inactive',NULL),(81,55,NULL,'1983-10-03','Jessica','Cross','Inactive',NULL),(82,48,NULL,'1962-07-22','Domenico','Casamento','Inactive',NULL),(83,142,'36225532','1974-08-17','Heidi','King','Inactive',NULL),(84,136,NULL,'1967-10-16','Kevin','Homes','Inactive',NULL),(85,36,NULL,'1966-02-26','Connie','Bowman','Active',NULL),(86,42,NULL,'1958-03-10','Walter','Burkholder','Active',NULL),(87,17,'3626597','1961-05-23','Steven','Anderson','Active',NULL),(88,13,NULL,'1958-06-02','Beth','Allison','Active',NULL),(89,148,'814961','1944-01-18','David','Allen','Active',NULL),(90,147,NULL,'1964-02-09','Lorenzo','Diaz','Active',NULL),(91,19,NULL,'1966-07-03','Judith','Barfielde','Active',NULL),(92,79,NULL,'1971-08-02','Tamara','Elmer','Active',NULL),(93,93,'361119437','1991-12-21','Tyler','Fittery','Active',NULL),(94,94,'1580','1951-06-16','John','Forey','Active',NULL),(95,24,'36114263','1959-05-15','Phillip','Beideman','Active',NULL),(96,25,'361101148','1984-10-11','John','Beiler','Active',NULL),(97,28,NULL,'1973-01-06','Kenzia','Bennett','Active',NULL),(98,68,NULL,'1956-02-24','Sarah','DiCastelnuoro','Active',NULL),(99,80,NULL,'1952-09-26','Keith','Emenheiser','Active',NULL),(100,69,NULL,NULL,'Tim','Ditzler','Active',NULL),(101,84,NULL,'1964-09-23','Michael','Fink','Active',NULL),(102,96,'36136232881','1957-05-01','Connie','Fry','Active',NULL),(103,76,'36123274','1982-07-19','Eric','Duncan','Active',NULL),(104,99,NULL,'1980-04-19','Leonardo','Garcia-Alicea','Active',NULL),(105,100,'36136266043','1976-07-09','Thomas','Garvin','Active',NULL),(106,18,'361-116722','1988-09-24','Terence','Barber','Active',NULL),(107,31,'36136246238','1987-03-30','Karen','Bitzer','Active',NULL),(108,97,NULL,'1964-09-20','Time','Furnier','Active',NULL),(109,74,NULL,'1955-12-03','Daisy','Dunkel','Active',NULL),(110,35,NULL,'1964-06-09','Michael','Bomberger','Active',NULL),(111,40,NULL,'1958-08-21','Ernest','Bryan','Active',NULL),(112,45,'3626884','1957-11-14','Gina','Campbell','Active',NULL),(113,39,NULL,'1981-08-11','Evelyn','Brito','Active',NULL),(114,30,'36128189','1969-04-18','John','Bisking','Active',NULL),(115,77,NULL,NULL,'Peggy','Edwards','Active',NULL),(116,86,'36136237165','1988-08-01','Byron','Folk','Active',NULL),(117,70,NULL,'1978-03-22','Julie','Diffenderfer','Active',NULL),(118,98,'36218659','1969-09-04','Tammy','Garcia','Active',NULL),(119,112,'36227035','1968-12-21','Wendy','Guthridge','Active',NULL),(120,110,'36136239623','1994-02-06','Nina','Grube','Active',NULL),(121,113,'36136265623','1954-02-03','Shari','Haber','Active',NULL),(122,106,NULL,'1951-06-25','Barbara','Groff','Active',NULL),(123,111,'36215351','1945-03-16','Lynn','Guiles','Active',NULL),(124,104,'36136266302','1975-01-11','Elaine','Greblowski','Active',NULL),(125,157,'36136266306',NULL,'William','Jacoby','Active',NULL),(126,47,'3616108899','1963-03-24','James','Carmichael','Active',NULL),(127,101,NULL,'1977-01-02','Trish','Gerhold/Riley','Active',NULL),(128,105,NULL,'1951-06-25','Barbara','Groff','Active',NULL),(129,140,NULL,'1954-05-13','Leonard','Kendrick','Active',NULL),(130,8,NULL,'1958-10-17','Timothy','Achor','Active',NULL),(131,9,NULL,'2059-09-13','Juanita','Adams','Active',NULL),(132,61,'361112027','1986-10-23','Jeremiah','Dates','Active',NULL),(133,60,'36117890','1975-12-24','Seth','Davis','Active',NULL),(134,57,NULL,'1978-04-06','Adam','Dandridge','Active',NULL),(135,46,'36136236007','1989-06-09','Sandra','Capehart','Active',NULL),(136,54,'362-0902174','1962-06-24','Troy','Crockett','Active',NULL),(137,121,NULL,'1977-12-09','Juan','Hernendez','Active',NULL),(138,129,'361117157','1964-04-05','Charles','Hurst','Active',NULL),(139,115,'36136238268','1975-10-15','Marcus','Hahn','Active',NULL),(140,122,'361-12684','1955-10-04','Richard','Hodgden','Active',NULL),(141,126,'3617597','1962-02-08','Cynthia','Hummel','Active',NULL),(142,124,'36136236536','1970-06-14','Kristine','Hughes','Active',NULL),(143,118,NULL,'1968-11-05','Jeffrey','Hallman','Active',NULL),(144,127,NULL,'1965-05-01','Anthony','Hunsicker','Active',NULL),(145,116,'36136246959','2014-12-12','Jessica','Haley','Active',NULL),(146,117,'36127683','1967-06-12','Stacey','Hall','Active',NULL),(147,130,NULL,'1970-01-31','Michael','Hurst','Active',NULL),(148,114,NULL,'1965-10-16','Gary','Hagelgans','Active',NULL),(149,131,'36124437','1954-01-06','Ivy','Hutzier','Active',NULL),(150,141,'36136231775','2057-09-03','Craig','Keppley','Active',NULL),(151,6,'36136266133','1966-07-07','James','Adams','Active',NULL),(152,5,'36224677','1957-03-23','Stephen','Allen','Active',NULL),(153,120,'36130617','1995-07-01','Yusef','Hamed','Active',NULL),(154,53,'361110969','1951-04-19','Susan','Cramer','Active',NULL),(155,56,'36136265172','1971-12-10','Marvelis','Cuza','Active',NULL),(156,50,NULL,'1965-07-20','Holly','Condict','Active',NULL),(157,143,NULL,'1987-06-20','Jesse','Kirsten','Active',NULL),(158,145,NULL,'1971-12-29','Jane','Kinyanjui','Active',NULL);
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scans`
--

DROP TABLE IF EXISTS `scans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scans` (
  `Id` bigint(20) NOT NULL AUTO_INCREMENT,
  `MemberId` int(11) DEFAULT NULL,
  `ScanDate` date DEFAULT NULL,
  `ScanTime` time DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scans`
--

LOCK TABLES `scans` WRITE;
/*!40000 ALTER TABLE `scans` DISABLE KEYS */;
INSERT INTO `scans` VALUES (5,15,'2017-05-06','10:15:21',1),(6,37,'2017-05-06','11:02:04',1),(7,37,'2017-05-06','14:34:52',0),(9,21,'2017-05-06','17:38:20',1);
/*!40000 ALTER TABLE `scans` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-06 12:14:45
