-- MySQL dump 10.13  Distrib 5.5.53, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: main
-- ------------------------------------------------------
-- Server version	5.5.53-0ubuntu0.14.04.1

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
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Nicholas','Ibrahim','nic\'\'\'kibrahim22@gmail.com','123-123-1234','nick','4297f44b13955235245b2497399d7a93'),(2,'Billy','Thekid','btkid@gmail.com','123-544-1235','billy','32250170a0dca92d53ec9624f336ca24'),(3,'Johnny','J','lol@hgmail.com','123-123-1122','johnny','32250170a0dca92d53ec9624f336ca24'),(4,'asdw','szczs','zsczsc@wda','123-123-1234','w','4297f44b13955235245b2497399d7a93'),(5,'Larry','Supplies','lawrencek.info@gmail.com','760-224-2527','Larry\'sSupplies','6fa1abc5630f20fad4ffb4f804ed706b'),(6,'Richard','Moss','mossiii95@yahoo.com','734-883-3108','Tyco313','302e8b7a2b4f5fb9fc584ad8f9fc9c34'),(7,'Jayson','Armbruster','fags@rus.com','123-123-1233','jbru95','36be35ecd8c212764795ad7fc8361aa2'),(8,'Nada','Ibrahim','nada@gmail.com','123-123-1234','nadaibrahim','61a3a05561a861c47de842d0cfb711da'),(9,'new','user','newuser@gmail.com','123-123-1234','new','149603e6c03516362a8da23f624db945'),(10,'aibwd','eaiglfb','uaiwhd@giauw.cionm','123-123-1233','poop','195ab8e2f8476a43f61951d3d3f5cdcf'),(11,'Gonza','Lulika','glulika@umich.edu','734-000-0000','gonza','f074440457513223ef1b5fa058fca02d'),(12,'nick','ibrahim','nibrahim22@gmail.com','248-496-6758','nick22','f1c083e61b32d3a9be76bc21266b0648');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-17 23:35:27
