-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: dbrentalmobil
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
-- Temporary table structure for view `daftar_perawatan`
--

DROP TABLE IF EXISTS `daftar_perawatan`;
/*!50001 DROP VIEW IF EXISTS `daftar_perawatan`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `daftar_perawatan` (
  `nopol` tinyint NOT NULL,
  `merk` tinyint NOT NULL,
  `produk` tinyint NOT NULL,
  `jenis_perwatan` tinyint NOT NULL,
  `tanggal` tinyint NOT NULL,
  `biaya_perawatan` tinyint NOT NULL,
  `km_mobil` tinyint NOT NULL,
  `deskripsi` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `daftar_sewa`
--

DROP TABLE IF EXISTS `daftar_sewa`;
/*!50001 DROP VIEW IF EXISTS `daftar_sewa`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `daftar_sewa` (
  `tanggal_mulai` tinyint NOT NULL,
  `tanggal_akhir` tinyint NOT NULL,
  `tujuan` tinyint NOT NULL,
  `NIK` tinyint NOT NULL,
  `nama_pelanggan` tinyint NOT NULL,
  `nopol` tinyint NOT NULL,
  `merk_id` tinyint NOT NULL,
  `warna` tinyint NOT NULL,
  `biaya_sewa` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `jenis_perawatan`
--

DROP TABLE IF EXISTS `jenis_perawatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jenis_perawatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenis_perawatan`
--

LOCK TABLES `jenis_perawatan` WRITE;
/*!40000 ALTER TABLE `jenis_perawatan` DISABLE KEYS */;
INSERT INTO `jenis_perawatan` VALUES (1,'Ganti Oli'),(2,'Service Rutin'),(3,'Turun Mesin'),(4,'Ganti Spartpart');
/*!40000 ALTER TABLE `jenis_perawatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `merk`
--

DROP TABLE IF EXISTS `merk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `merk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) DEFAULT NULL,
  `produk` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `merk`
--

LOCK TABLES `merk` WRITE;
/*!40000 ALTER TABLE `merk` DISABLE KEYS */;
INSERT INTO `merk` VALUES (1,'Toyota','Rush'),(2,'Mitsubishi','Xpander'),(3,'Suzuki','Ertiga'),(4,'Honda','Mobilio');
/*!40000 ALTER TABLE `merk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `merkmobil`
--

DROP TABLE IF EXISTS `merkmobil`;
/*!50001 DROP VIEW IF EXISTS `merkmobil`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `merkmobil` (
  `nopol` tinyint NOT NULL,
  `merk_id` tinyint NOT NULL,
  `merk` tinyint NOT NULL,
  `produk` tinyint NOT NULL,
  `warna` tinyint NOT NULL,
  `biaya_sewa` tinyint NOT NULL,
  `cc` tinyint NOT NULL,
  `mobil_id` tinyint NOT NULL,
  `tahun` tinyint NOT NULL,
  `deskripsi` tinyint NOT NULL,
  `foto` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `mobil`
--

DROP TABLE IF EXISTS `mobil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mobil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nopol` varchar(20) DEFAULT NULL,
  `warna` varchar(20) DEFAULT NULL,
  `biaya_sewa` double DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `cc` int(11) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `merk_id` int(11) NOT NULL,
  `foto` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nopol_UNIQUE` (`nopol`),
  KEY `fk_produk_jenis_produk_idx` (`merk_id`),
  CONSTRAINT `fk_produk_jenis_produk` FOREIGN KEY (`merk_id`) REFERENCES `merk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mobil`
--

LOCK TABLES `mobil` WRITE;
/*!40000 ALTER TABLE `mobil` DISABLE KEYS */;
INSERT INTO `mobil` VALUES (1,'B2050SJD','putih',350000,'Jumlah Pintu 5 · Kapasitas Tempat Duduk 7 · Kapasitas Tangki Bahan Bakar (liter) 45 L · Ground Clearance 200 mm · Tinggi 1695 mm',1500,2020,2,'B2050SJD.jpg'),(2,'B27822EYD','hitam',300000,'Jumlah Pintu 5 · Kapasitas Tempat Duduk 7 · Kapasitas Tangki Bahan Bakar (liter) 35 L · Ground Clearance 200 mm · Tinggi 1600 mm',1300,2021,1,'B27822EYD.jpg'),(3,'B2020ZKT','Merah',300000,'Jumlah Pintu 5 ? Kapasitas Tempat Duduk 7 ? Kapasitas Tangki Bahan Bakar (liter) 35 L ? Ground Clearance 200 mm ? Tinggi 1600 mm',1200,2017,3,'B2020ZKT.jpg'),(4,'B2021ZKT','Biru',300000,'Jumlah Pintu 5 ? Kapasitas Tempat Duduk 7 ? Kapasitas Tangki Bahan Bakar (liter) 35 L ? Ground Clearance 200 mm ? Tinggi 1600 mm',1100,2016,4,'B2021ZKT.jpg'),(9,'B3214DAF','hitam',300000,'Mobilnya Bagus, Tahun Muda',1200,2017,3,'B3224DAF.jpg');
/*!40000 ALTER TABLE `mobil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perawatan`
--

DROP TABLE IF EXISTS `perawatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perawatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `biaya` double DEFAULT NULL,
  `km_mobil` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `mobil_id` int(11) DEFAULT NULL,
  `jenis_perawatan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pembelian_produk1_idx` (`mobil_id`),
  KEY `fk_perawatan_jenis_perawatan1_idx` (`jenis_perawatan_id`),
  CONSTRAINT `fk_pembelian_produk1` FOREIGN KEY (`mobil_id`) REFERENCES `mobil` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_perawatan_jenis_perawatan1` FOREIGN KEY (`jenis_perawatan_id`) REFERENCES `jenis_perawatan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perawatan`
--

LOCK TABLES `perawatan` WRITE;
/*!40000 ALTER TABLE `perawatan` DISABLE KEYS */;
INSERT INTO `perawatan` VALUES (1,'2022-06-12',850000,20500,'service rutin aja',1,2),(2,'2022-06-12',210000,20800,'ganti lampu belakang',1,4),(3,'2022-06-12',210000,2500,'ganti lampu spion kanan',2,4),(5,'2022-06-24',500000,10000,'Ganti Oli Mesin',3,1),(6,'2022-06-24',6000000,100000,'Turun Mesin',4,4),(7,'2022-07-02',200000,20000,'Ganti Oli Mesin',2,1),(8,'2022-07-06',200000,20000,'Service rutin ',2,2);
/*!40000 ALTER TABLE `perawatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sewa`
--

DROP TABLE IF EXISTS `sewa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sewa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL,
  `tujuan` varchar(100) DEFAULT NULL,
  `noktp` varchar(20) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `mobil_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pesanan_users1_idx` (`users_id`),
  KEY `fk_pesanan_produk1_idx` (`mobil_id`),
  CONSTRAINT `fk_pesanan_produk1` FOREIGN KEY (`mobil_id`) REFERENCES `mobil` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pesanan_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sewa`
--

LOCK TABLES `sewa` WRITE;
/*!40000 ALTER TABLE `sewa` DISABLE KEYS */;
INSERT INTO `sewa` VALUES (1,'2022-06-12','2022-06-16','Bandung','1041202300220',2,1),(5,'2022-07-05','2022-07-07','Bandung','3276012504010007',7,1);
/*!40000 ALTER TABLE `sewa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` smallint(6) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','0192023a7bbd73250516f069df18b500','admin@gmail.com','2022-06-11 23:51:03','2022-06-11 23:51:03',1,'administrator'),(2,'aminah','90b74c589f46e8f3a484082d659308bd','aminah@gmail.com','2022-06-11 23:51:08','2022-06-11 23:51:08',1,'public'),(7,'rizqi','2d817ef0ef6206da3d06c752e71728a4','rizqi8517@gmail.com','2022-07-04 07:18:06','2022-07-04 07:18:06',1,'public');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `daftar_perawatan`
--

/*!50001 DROP TABLE IF EXISTS `daftar_perawatan`*/;
/*!50001 DROP VIEW IF EXISTS `daftar_perawatan`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `daftar_perawatan` AS select `a`.`nopol` AS `nopol`,`b`.`nama` AS `merk`,`b`.`produk` AS `produk`,`c`.`nama` AS `jenis_perwatan`,`d`.`tanggal` AS `tanggal`,`d`.`biaya` AS `biaya_perawatan`,`d`.`km_mobil` AS `km_mobil`,`d`.`deskripsi` AS `deskripsi` from (((`mobil` `a` left join `merk` `b` on(`a`.`merk_id` = `b`.`id`)) left join `perawatan` `d` on(`d`.`mobil_id` = `a`.`id`)) left join `jenis_perawatan` `c` on(`d`.`jenis_perawatan_id` = `c`.`id`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `daftar_sewa`
--

/*!50001 DROP TABLE IF EXISTS `daftar_sewa`*/;
/*!50001 DROP VIEW IF EXISTS `daftar_sewa`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `daftar_sewa` AS select `a`.`tanggal_mulai` AS `tanggal_mulai`,`a`.`tanggal_akhir` AS `tanggal_akhir`,`a`.`tujuan` AS `tujuan`,`a`.`noktp` AS `NIK`,`b`.`username` AS `nama_pelanggan`,`c`.`nopol` AS `nopol`,`c`.`merk_id` AS `merk_id`,`c`.`warna` AS `warna`,`c`.`biaya_sewa` AS `biaya_sewa` from ((`sewa` `a` left join `users` `b` on(`a`.`users_id` = `b`.`id`)) left join `mobil` `c` on(`a`.`mobil_id` = `c`.`id`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `merkmobil`
--

/*!50001 DROP TABLE IF EXISTS `merkmobil`*/;
/*!50001 DROP VIEW IF EXISTS `merkmobil`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `merkmobil` AS select `a`.`nopol` AS `nopol`,`a`.`merk_id` AS `merk_id`,`b`.`nama` AS `merk`,`b`.`produk` AS `produk`,`a`.`warna` AS `warna`,`a`.`biaya_sewa` AS `biaya_sewa`,`a`.`cc` AS `cc`,`a`.`id` AS `mobil_id`,`a`.`tahun` AS `tahun`,`a`.`deskripsi` AS `deskripsi`,`a`.`foto` AS `foto` from (`mobil` `a` join `merk` `b` on(`a`.`merk_id` = `b`.`id`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-06 18:56:06
