-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: adminperpus
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
-- Table structure for table `mst_dataagt`
--

DROP TABLE IF EXISTS `mst_dataagt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_dataagt` (
  `id_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `nm_angggota` varchar(100) NOT NULL,
  `status_anggota` varchar(100) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_dataagt`
--

LOCK TABLES `mst_dataagt` WRITE;
/*!40000 ALTER TABLE `mst_dataagt` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_dataagt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_databuku`
--

DROP TABLE IF EXISTS `mst_databuku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_databuku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `judul_buku` varchar(100) NOT NULL,
  `penerbit_buku` varchar(25) NOT NULL,
  `pengarang_buku` varchar(100) NOT NULL,
  `jumlah_buku` int(100) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_databuku`
--

LOCK TABLES `mst_databuku` WRITE;
/*!40000 ALTER TABLE `mst_databuku` DISABLE KEYS */;
INSERT INTO `mst_databuku` VALUES (2,'siang makan pulang malam','desi','iyota',11),(3,'siang makan pulang malam','desi','iyota',10);
/*!40000 ALTER TABLE `mst_databuku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_datapinjam`
--

DROP TABLE IF EXISTS `mst_datapinjam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_datapinjam` (
  `id_peminjam` int(11) NOT NULL AUTO_INCREMENT,
  `nm_peminjam` varchar(100) NOT NULL,
  `nm_buku` varchar(100) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  PRIMARY KEY (`id_peminjam`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_datapinjam`
--

LOCK TABLES `mst_datapinjam` WRITE;
/*!40000 ALTER TABLE `mst_datapinjam` DISABLE KEYS */;
/*!40000 ALTER TABLE `mst_datapinjam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_kategbuku`
--

DROP TABLE IF EXISTS `mst_kategbuku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_kategbuku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `nm_buku` varchar(100) NOT NULL,
  `kt_buku` varchar(100) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_kategbuku`
--

LOCK TABLES `mst_kategbuku` WRITE;
/*!40000 ALTER TABLE `mst_kategbuku` DISABLE KEYS */;
INSERT INTO `mst_kategbuku` VALUES (6,'test','haha');
/*!40000 ALTER TABLE `mst_kategbuku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_menu`
--

DROP TABLE IF EXISTS `mst_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nm_menu` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `isActive` enum('0','1','','') NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_menu`
--

LOCK TABLES `mst_menu` WRITE;
/*!40000 ALTER TABLE `mst_menu` DISABLE KEYS */;
INSERT INTO `mst_menu` VALUES (1,'userLogin','mod_userlogin',''),(2,'KategoriBuku','mod_katbuku',''),(3,'dataBuku','mod_databuku',''),(4,'dataAnggota','mod_anggota',''),(5,'dataPeminjam','mod_peminjam','1'),(6,'menu_edit','mod_menu','');
/*!40000 ALTER TABLE `mst_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_userlogin`
--

DROP TABLE IF EXISTS `mst_userlogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mst_userlogin` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_active` enum('0','1','','') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_userlogin`
--

LOCK TABLES `mst_userlogin` WRITE;
/*!40000 ALTER TABLE `mst_userlogin` DISABLE KEYS */;
INSERT INTO `mst_userlogin` VALUES (14,'aditya','202cb962ac59075b964b07152d234b70','1'),(15,'sulthan','202cb962ac59075b964b07152d234b70','1');
/*!40000 ALTER TABLE `mst_userlogin` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-28 12:22:19
