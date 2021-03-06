-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: cadadb
-- ------------------------------------------------------
-- Server version	5.7.21-log
create database if not exists cadadb;
use cadadb;
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
-- Table structure for table `interior`
--

DROP TABLE IF EXISTS `interior`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `interior` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `modelnum` int(10) unsigned NOT NULL,
  `color` varchar(7) NOT NULL,
  `image` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `model_idx` (`modelnum`),
  KEY `modelin_idx` (`modelnum`),
  CONSTRAINT `modelin` FOREIGN KEY (`modelnum`) REFERENCES `model` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `interior`
--

LOCK TABLES `interior` WRITE;
/*!40000 ALTER TABLE `interior` DISABLE KEYS */;
INSERT INTO `interior` VALUES (1,2,'#000000','https://pics.porsche.com/rtt/iris?COSY-EU-100-17116bXqc6eP3Hi1qwT9HcnyInrHKxJTTPE3kUWFYRpwY4ENAXfUko69AFcLw1QjZoYn47uPi60E8mN%25nBXHcAzr7C8AeEGewirQ93MRmVzFgTfaILQk0D8n7QDfcwMs8ZtKMECCeVl7flhrNSHwA%25gf8IcdA%25UPUSNaELRmHbnnmyyoikHQ0DkrPjLHn8ZuWgxXVEeKF2bPfv3jKhM8wGnxu4KIMJkODBTOVpN9C5km'),(2,2,'#823535','https://pics.porsche.com/rtt/iris?COSY-EU-100-17116bXqc6eP3Hi1qwT9HcnyInrHKxJTTPE3kUWFYRpwY4ENAXfUko69AFcLw1QjZoYn47uPi60E8mN%25nBXHcAzr7C8AeEGewirQ93MRmVUFgTfaILQk0D8n7QDfcwMs8ZtKMECCeVl7flhrNSHwA%25gf8IcdA%25UPUSNaELRmHbnnmyyoikHQ0DkrPjLHn8ZuWgxXVEeKF2bPfv3jKhM8wGnxu4KIMJkODBTOVpN9C5km'),(3,4,'#000000','https://nafta.starconnect-ce.i.daimler.com/iris/iris?COSY-EU-100-1713d0VXqaWFqtyO35PobzIDieWql9TQw2Mpxikzmxxom7ssM0uBI5HB2Z0iD%25W%25qjWm7ydHdhKYr8f%25vBcPEyLAX4lYa5Zg2rHCR2pn8zxBuoieou3M4sM8NTgUdij6PGHPVSe08BqtsBuCRcUA3vxXG51O1J0CwiwOBzkBZbA7l8FI5aIa9QCHd4Dkz8qpWm7iBFdhKIV4f%25vQ%25fEyLkXKlYamJ12rHh3spn8%25NMuoiyvG3M4YE7NTgJTKj6PO60VSebxVqtsI1KRcUQ2DxXGk1W1J0RMqwOBxTIZbA1s0FI5wRP9QCoTEDkzM0DWm7T3FdhKOVqf%25vbFfEyLI9UlYaQqn2rHvropn8LuMuoia3F3M4cD5NTgc9Dj6PX64VSeJEdqtsOfER1qN7vzZslYaIuG2rHJrHpn8IkduoirDF3M4nDCNTgo4qj6PMt9VSevW3qtsLiXRcUql7xXGJX71J0OJqwOBbnRZbAIN8FI5Qj39QCkGwDkzg6pWmtPT5Zl8LgdPtaSqvV7jdKzAyyaslUv1KUfxGsgOgjzjnCScrAoC%25Hybl6&&IMGT=A27&POV=bi1%2Cszt%2Ccgd&width=1536&height=768'),(4,4,'#891111','https://nafta.starconnect-ce.i.daimler.com/iris/iris?COSY-EU-100-1713d0VXq0ELqtyO35PobzIDieWql9TQw2Mpxikzmxxom7ssM0uBI5HB2Z0iD%25W%25qjWm7ydHdhKYr8f%25vrQ7EyLAXelYa5Jg2rHCFPpn8zKeuoi7fs3M4Kw3NTgvZCj6PG6jVSe0SgqtsBrsRcUA2exXG5gG1J0CPzwOBzVvZbA7qZFI5KRi9QCvDmDkzLWsWm7aY7dhKHNef%25vg%25gEyLPpUlYaeZV2rHsF0pn8UKEuoiyZG3M4YM3NTgrkDj6PnyZVSeox5qtsM1XRcUT2exXG6g71J0SjiwOBh2vZbA%25bgFI5yIv9QCYd9DkzrfgWm7nRudhKof3f%25vWODEyLdbrlYafzv2rHEW5pn8JKpuoiOfl3M4bw3NTgy9Dj6PYfWVSerpVqtsnuKRcUo3HxXGM1l1J0TQiwOB6EIZbAGbQFI50ja9QCBDmDkzAWjWm7rqPdhKrVqf%25vn%257EyLowxlYaMzl2rHTwZp32fGBUjHFI5SWi9QCMQCDkzSqPWm7QqedhKk7lf%25vmYVEyL0RWlYaBzn2rHAgMpn82FGuoiMoG3M4TQ2NTg6kSj6PSfzVSetEdqtsciNRcU1sQxXrL%25ejFzAv1Lr5Y2BlGE10UPbb5HF8B308wuiHvTvEUEksYnQPmsOCb6Fy&&IMGT=A27&POV=bi1%2Cszt%2Ccgd&width=1536&height=768'),(5,5,'#000000','https://buildfoc.ford.com/dig/Lincoln/MKZ/2019/HD-FULL/Image[%7CLincoln%7CMKZ%7C2019%7C1%7C1.%7C500A.L5L..UM..88F.BRD.64J.99U.LEA.FWD.89E.60N.]/INT/2/vehicle.png'),(6,5,'#b7974d','https://buildfoc.ford.com/dig/Lincoln/MKZ/2019/HD-FULL/Image[%7CLincoln%7CMKZ%7C2019%7C1%7C1.%7C500A.L5L..UM..88F.BRD.64J.99U.LEA.FWD.89Q.60N.]/INT/2/vehicle.png');
/*!40000 ALTER TABLE `interior` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-29 23:14:43
