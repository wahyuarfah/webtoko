-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: banesa
-- ------------------------------------------------------
-- Server version	8.0.27-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Ekonomi','2021-10-29 07:02:43'),(2,'Medium','2021-10-29 07:02:43'),(3,'Premium','2021-10-29 07:02:43'),(6,'oke','2021-10-29 23:48:11'),(7,'Kategori lama','2021-10-29 23:48:30');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci,
  `product_category` int DEFAULT '1',
  `product_img` text COLLATE utf8mb4_unicode_ci,
  `product_stock` int DEFAULT '1',
  `product_seen` int DEFAULT '1',
  `product_price` int DEFAULT '0',
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`product_id`),
  UNIQUE KEY `product_id_UNIQUE` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Banesa Indigo Med','2 Warna Alam',3,'617c2ee1706df.jpg',1,1,0,'2021-10-29 17:45:20'),(2,'Banesa Mix Med','4 Warna Alam',2,'617c2ed64295e.jpg',1,1,0,'2021-10-29 17:26:46'),(3,'Banesa Sintex Eco','Sintetis Berpola',2,'617c2ecbabdbd.jpg',1,1,0,'2021-10-29 17:26:35'),(4,'Banesa Sulam Med','Full Tanah Sulam',2,'617c2ebddfebb.jpg',1,1,0,'2021-10-29 17:26:21'),(5,'Banesa Sintex Geo','Sintetis Full Motif Geo',2,'617c2ea371022.jpg',1,1,0,'2021-10-29 17:25:55'),(6,'Banesa Mahon Med','2 Warna Alam',2,'617c2e95a778c.jpg',1,1,0,'2021-10-29 17:25:41'),(7,'Banesa Sintex Fish','Sintesis Berpola',2,'617c2e8591094.jpg',1,1,0,'2021-10-29 17:25:25'),(8,'Banesa Sintex Full','Mix Sintetis Full Pola',2,'617c2e745296b.jpg',1,1,0,'2021-10-29 17:25:08'),(9,'Banesa Mix Alam','4 Warna Alam',2,'617c2e1f99039.jpg',1,1,0,'2021-10-29 17:23:43'),(10,'Banesa Mix Sintex','Full Color Motif Segitiga',2,'617c2def02643.jpg',1,1,0,'2021-10-29 17:22:55'),(11,'Banesa Mix Sintex','Full Color Motif Madura',2,'617c2dd4edc8f.jpg',1,1,0,'2021-10-29 17:22:28'),(12,'Banesa Sintex Bunga Geo','Motif Bunga Geometris',2,'617c2daf1df17.jpg',1,1,0,'2021-10-29 17:21:51'),(13,'Banesa Mix Sintex Teratai','Motif Bunga Teratai',2,'617c2d858acf0.jpg',1,1,0,'2021-10-29 17:21:09'),(14,'Banesa Motif Unesa','Motif Unesa',2,'617c2d6b877d6.jpg',1,1,0,'2021-10-29 17:20:43'),(15,'Banesa Sintex Merak','Motif Merak',2,'617c2d59314e5.jpg',1,1,0,'2021-10-29 17:20:25'),(16,'Banesa Sintex Mega','Motif Mega Mendung',2,'617c2d4ab7c7f.jpg',1,1,0,'2021-10-29 17:20:10'),(17,'Banesa Sintex Kupang','Motif Kupang Merah',2,'617c2d3e43463.jpg',1,1,0,'2021-10-29 17:19:58'),(18,'Banesa Sintex Kupang Biru','Motif Kupang Merah Biru',2,'617c2d291fc93.jpg',1,1,0,'2021-10-29 17:19:37'),(19,'Banesa Ikan Lawasan','Motif Ikan Lawasan',2,'617c2d0bebd2f.jpg',1,1,0,'2021-10-29 17:19:07'),(20,'Banesa Kupang Sintex','Motif Kupang Orange',2,'617c2ceaae304.jpg',1,1,0,'2021-10-29 17:18:34'),(21,'Banesa Sintex Tertai','Motif Teratai Daun Hijau',2,'617c2cd32a240.jpg',1,1,0,'2021-10-29 17:18:11'),(22,'Banesa Putian','Putian Motif Kuno',2,'617c2cbc9a7e8.jpg',1,1,0,'2021-10-29 17:17:48'),(23,'Banesa Mix Sintex','Motif Daun Merak',2,'617c2c0d861c1.jpg',1,1,0,'2021-10-29 17:14:53'),(24,'Banesa Mix Alam','Mix 4 Warna',2,'617c2bbd484d6.jpg',1,1,0,'2021-10-29 17:13:33'),(25,'Banesa Motif Indigo','Kombinasi Indigo Pada Motif',2,'617c2baddcc40.jpg',1,1,0,'2021-10-29 17:13:17');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `users_id` int NOT NULL AUTO_INCREMENT,
  `users_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (36,'Seriusman Waruwu','serius','$2y$10$9dmWC2WkHRdMETnrSkDUmO7VXIasvNgG65UXR3KHisLtjgFa.2yla','2021-10-29 12:22:26');
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

-- Dump completed on 2021-10-30 14:02:10
