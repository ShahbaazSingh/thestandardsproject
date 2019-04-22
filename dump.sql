-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: thestandardsproject
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.04.2

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
-- Current Database: `thestandardsproject`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `thestandardsproject` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `thestandardsproject`;

--
-- Table structure for table `class_user`
--

DROP TABLE IF EXISTS `class_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class_user` (
  `class_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  KEY `class_user_class_id_foreign` (`class_id`),
  KEY `class_user_user_id_foreign` (`user_id`),
  CONSTRAINT `class_user_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`) ON DELETE CASCADE,
  CONSTRAINT `class_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class_user`
--

LOCK TABLES `class_user` WRITE;
/*!40000 ALTER TABLE `class_user` DISABLE KEYS */;
INSERT INTO `class_user` VALUES (1,4),(1,5),(1,6),(1,7),(1,8),(1,9),(1,10),(1,11),(1,12),(1,13),(1,14),(1,15),(1,16),(1,17),(1,18),(1,19),(1,20),(1,21),(1,22),(1,23);
/*!40000 ALTER TABLE `class_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classes` (
  `class_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `grade` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` bigint(20) unsigned NOT NULL,
  `starts_at` time NOT NULL,
  `ends_at` time NOT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`class_id`),
  KEY `classes_teacher_id_foreign` (`teacher_id`),
  CONSTRAINT `classes_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classes`
--

LOCK TABLES `classes` WRITE;
/*!40000 ALTER TABLE `classes` DISABLE KEYS */;
INSERT INTO `classes` VALUES (1,6,'Math',1,'10:00:00','10:45:00','PS101','A303'),(2,6,'Math',1,'11:00:00','11:45:00','PS101','A302'),(3,6,'English',2,'11:00:00','11:45:00','PS101','B212'),(4,6,'English',2,'12:00:00','12:45:00','PS101','B214'),(5,6,'Science',3,'10:00:00','10:45:00','PS101','C454');
/*!40000 ALTER TABLE `classes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (65,'2014_10_12_000000_create_users_table',1),(66,'2014_10_12_100000_create_password_resets_table',1),(67,'2019_03_21_050619_create_classes_table',1),(68,'2019_03_27_041600_create_class_user_table',1),(69,'2019_04_08_020644_create_proficiency_table',1),(70,'2019_04_08_022359_create_user_proficiency_table',1),(71,'2019_04_19_010225_create_modules_table',1),(72,'2019_04_19_233817_create_user_module_table',1),(73,'2019_04_22_205604_create_roles_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modules` (
  `module_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proficiency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modules`
--

LOCK TABLES `modules` WRITE;
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` VALUES (1,'Math','Video 1','video','M.5.1.1','https://reviewgamezone.com/mc/candidate/test/?test_id=16537&title=Adding%20And%20Subtracting%20Fractions'),(2,'Math','Multiple Choice 1','multiplechoice','M.5.2.1','https://www.khanacademy.org/math/arithmetic/fraction-arithmetic/arith-review-add-sub-fractions/v/visually-adding-fractions-with-unlike-denominators');
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proficiency`
--

DROP TABLE IF EXISTS `proficiency`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proficiency` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `w` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `x` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `y` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `z` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proficiency`
--

LOCK TABLES `proficiency` WRITE;
/*!40000 ALTER TABLE `proficiency` DISABLE KEYS */;
INSERT INTO `proficiency` VALUES (1,'M.5.1.1','M','5','1','1'),(2,'M.5.2.1','M','5','2','1'),(3,'M.5.2.2','M','5','2','2'),(4,'M.5.3.1','M','5','3','1'),(5,'M.5.4.1','M','5','4','1');
/*!40000 ALTER TABLE `proficiency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role` int(11) NOT NULL,
  KEY `roles_user_id_foreign` (`user_id`),
  CONSTRAINT `roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_module`
--

DROP TABLE IF EXISTS `user_module`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_module` (
  `user_id` bigint(20) unsigned NOT NULL,
  `module_id` bigint(20) unsigned NOT NULL,
  `assigned_by` bigint(20) unsigned NOT NULL,
  `grade` int(11) NOT NULL,
  `assigned` date NOT NULL,
  `due` date NOT NULL,
  `completed` date NOT NULL,
  `report_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  KEY `user_module_user_id_foreign` (`user_id`),
  KEY `user_module_module_id_foreign` (`module_id`),
  KEY `user_module_assigned_by_foreign` (`assigned_by`),
  CONSTRAINT `user_module_assigned_by_foreign` FOREIGN KEY (`assigned_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_module_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`module_id`) ON DELETE CASCADE,
  CONSTRAINT `user_module_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_module`
--

LOCK TABLES `user_module` WRITE;
/*!40000 ALTER TABLE `user_module` DISABLE KEYS */;
INSERT INTO `user_module` VALUES (15,1,1,80,'2019-02-10','2019-02-17','2019-02-16','#'),(15,2,1,87,'2019-02-05','2019-02-12','2019-02-12','#'),(17,1,1,90,'2019-02-10','2019-02-17','2019-02-13','#'),(17,2,1,55,'2019-03-11','2019-03-18','2019-03-15','#'),(19,1,1,80,'2019-03-11','2019-03-18','2019-03-17','#'),(19,2,1,79,'2019-03-09','2019-03-20','2019-03-14','#'),(6,1,1,97,'2019-03-01','2019-03-10','2019-03-03','#');
/*!40000 ALTER TABLE `user_module` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_proficiency`
--

DROP TABLE IF EXISTS `user_proficiency`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_proficiency` (
  `user_id` bigint(20) unsigned NOT NULL,
  `proficiency_id` bigint(20) unsigned NOT NULL,
  `grade` int(11) NOT NULL,
  KEY `user_proficiency_user_id_foreign` (`user_id`),
  KEY `user_proficiency_proficiency_id_foreign` (`proficiency_id`),
  CONSTRAINT `user_proficiency_proficiency_id_foreign` FOREIGN KEY (`proficiency_id`) REFERENCES `proficiency` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_proficiency_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_proficiency`
--

LOCK TABLES `user_proficiency` WRITE;
/*!40000 ALTER TABLE `user_proficiency` DISABLE KEYS */;
INSERT INTO `user_proficiency` VALUES (4,1,0),(4,2,0),(4,3,0),(4,4,1),(4,5,0),(5,1,0),(5,2,0),(5,3,1),(5,4,0),(5,5,0),(6,1,0),(6,2,0),(6,3,0),(6,4,0),(6,5,1),(7,1,1),(7,2,0),(7,3,0),(7,4,0),(7,5,1),(8,1,0),(8,2,1),(8,3,0),(8,4,0),(8,5,0),(9,1,0),(9,2,0),(9,3,1),(9,4,0),(9,5,0),(10,1,0),(10,2,1),(10,3,0),(10,4,0),(10,5,0),(11,1,1),(11,2,1),(11,3,1),(11,4,1),(11,5,1),(12,1,1),(12,2,1),(12,3,1),(12,4,1),(12,5,1),(13,1,1),(13,2,1),(13,3,1),(13,4,1),(13,5,1),(14,1,1),(14,2,1),(14,3,1),(14,4,1),(14,5,1),(15,1,1),(15,2,1),(15,3,1),(15,4,1),(15,5,1),(16,1,2),(16,2,2),(16,3,2),(16,4,2),(16,5,2),(17,1,2),(17,2,2),(17,3,2),(17,4,2),(17,5,2),(18,1,2),(18,2,2),(18,3,2),(18,4,2),(18,5,2),(19,1,2),(19,2,2),(19,3,2),(19,4,2),(19,5,2),(20,1,2),(20,2,2),(20,3,2),(20,4,2),(20,5,2),(21,1,2),(21,2,2),(21,3,2),(21,4,2),(21,5,2),(22,1,2),(22,2,2),(22,3,2),(22,4,2),(22,5,2),(23,1,2),(23,2,2),(23,3,2),(23,4,2),(23,5,2);
/*!40000 ALTER TABLE `user_proficiency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'John Beck','teacherone','johnbeck@email.com',NULL,'$2y$10$gbfoGqkLQ2FI2w9DZ0Hvg..m0vqT2R1rrkeGDtNCoQ3QItM92C2kS',0,1,NULL,'2019-04-22 21:05:16','2019-04-22 21:05:16'),(2,'Joe Biden','teachertwo','joebiden@email.com',NULL,'$2y$10$ESr4UZnbWGutuobHfCAMZuhmnLpn1OI7NDQLcFr2QFhYWh2oxZjU2',0,1,NULL,'2019-04-22 21:05:16','2019-04-22 21:05:16'),(3,'Ralph Cohen','teacherthree','ralphcohen@email.com',NULL,'$2y$10$lLL4MKK2t1ETEq7mZfQHZO.FHYbFBhdZDEIcA4bsE4iZtaJ37VcP.',0,1,NULL,'2019-04-22 21:05:16','2019-04-22 21:05:16'),(4,'Sally Rogers','studentone','one@email.com',NULL,'$2y$10$DhQLqqyuRh6pYs9pyulXbOAtBpBz5sKattMRgOHvOHKabjsRdtqNq',6,0,NULL,'2019-04-22 21:05:16','2019-04-22 21:05:16'),(5,'Burt Hagard','studenttwo','two@email.com',NULL,'$2y$10$kEyddqnuGFhT1q1wqhdesuBUnY3FhPRHDqbiigBg2xzciid33LZq6',6,0,NULL,'2019-04-22 21:05:16','2019-04-22 21:05:16'),(6,'Josiah Nigel','studentthree','three@email.com',NULL,'$2y$10$COGDoRZMh.16fUcMxUfCpe7WezOv1m6DYQvqJy9MGOMnZmG5io/GC',6,0,NULL,'2019-04-22 21:05:16','2019-04-22 21:05:16'),(7,'Shahbaaz Singh','studentfour','four@email.com',NULL,'$2y$10$VvNIn6rqZMnL7nmVrkX0sey3flOrNg.mddY8UlZNU8A/hcjay4R9K',6,0,NULL,'2019-04-22 21:05:16','2019-04-22 21:05:16'),(8,'Harry Styles','studentfive','five@email.com',NULL,'$2y$10$dxMfLxb8T7sZhoWrYv4d2.RhM54S3J/FoZHyTwSp249uyxb6O8v26',6,0,NULL,'2019-04-22 21:05:16','2019-04-22 21:05:16'),(9,'Channing Tatum','studentsix','six@email.com',NULL,'$2y$10$NvO2hly5YmAhaFF.OcsrIeS/gcct8RRIowSaDdlf7ejaO8HfVG71e',6,0,NULL,'2019-04-22 21:05:17','2019-04-22 21:05:17'),(10,'Ryan Reynolds','studentseven','seven@email.com',NULL,'$2y$10$8RBw6xySABZYbprEDlFRZOKJfn/IfMFMe0fK9WT10jI8QRHmZnEdu',6,0,NULL,'2019-04-22 21:05:17','2019-04-22 21:05:17'),(11,'Ian Lampert','studenteight','eight@email.com',NULL,'$2y$10$aBLn/fTCMEPdrtoust0Cu.Sk27MsiehjbKCvWv2m8jqcPW42yUwgS',6,0,NULL,'2019-04-22 21:05:17','2019-04-22 21:05:17'),(12,'Alaya Hunter','studentnine','nine@email.com',NULL,'$2y$10$QYKjIE023bxuW3iLqBNLye0pF7Fr0UUJVWK6i9OCIAGSIL7jsFh4q',6,0,NULL,'2019-04-22 21:05:17','2019-04-22 21:05:17'),(13,'Jenny Plexazeusnamastesamsara','studentten','ten@email.com',NULL,'$2y$10$Kd/qFO1FnCfEeTSmkeevD.EMDGn8119sOp4NgE./4yMrZmxU4VS72',6,0,NULL,'2019-04-22 21:05:17','2019-04-22 21:05:17'),(14,'Hashbrown Mashbrown','studenteleven','eleven@email.com',NULL,'$2y$10$BUJN7z8kJ9FUlZwcfsv0rOFbh9q6a5M15haEMBvPF/UgEfSRi1OX6',6,0,NULL,'2019-04-22 21:05:17','2019-04-22 21:05:17'),(15,'Jock Bren','studenttwelve','twelve@email.com',NULL,'$2y$10$a3VmVLnWASBcmPHOY0fhPOKILDesSuWOLQxjNIs447aq0JWkK0qCe',6,0,NULL,'2019-04-22 21:05:17','2019-04-22 21:05:17'),(16,'Kiki Fandango','studentthirteen','thirteen@email.com',NULL,'$2y$10$oB7IaO4H7irhJJZKxW6ej.hRtEzQ1KAkxsU511zTFoYRvLLmYOJxu',6,0,NULL,'2019-04-22 21:05:18','2019-04-22 21:05:18'),(17,'Holly Thanthou','studentfourteen','fourteen@email.com',NULL,'$2y$10$J1yxMD/5aiRd9vTSKw5aLe8MLGoKLlZinZHyX.aa4fOSW1eOFNkNC',6,0,NULL,'2019-04-22 21:05:18','2019-04-22 21:05:18'),(18,'Joestar Joseph','studentfifteen','fifteen@email.com',NULL,'$2y$10$qD8Gt3ao8SA9AhMi1ipE0ep6Qf9H6stCXH4/qxccF8vp/asvCij6q',6,0,NULL,'2019-04-22 21:05:18','2019-04-22 21:05:18'),(19,'Kally Ballajo','studentsixteen','sixteen@email.com',NULL,'$2y$10$2rkm7IqqKcVWripQKVlUKu//sB9DE9k6vyapcpj4gwsiL8RiRaoqK',6,0,NULL,'2019-04-22 21:05:18','2019-04-22 21:05:18'),(20,'Reijel Rando','studentseventeen','seventeen@email.com',NULL,'$2y$10$X3NWG1gphcSdeajMY7UYE.pa8L6/7MsrFXnaEE6OMTSfw.Me8dTuS',6,0,NULL,'2019-04-22 21:05:18','2019-04-22 21:05:18'),(21,'Kabella Brown','studenteighteen','eighteen@email.com',NULL,'$2y$10$mQg8s9TOrJho.slYbgp9n.DQ2vT8HZxsQhdHIXCmJNA6jyJK1nsKa',6,0,NULL,'2019-04-22 21:05:18','2019-04-22 21:05:18'),(22,'Sinclair Bushmaster','studentnineteen','nineteen@email.com',NULL,'$2y$10$2SU8Ccash1cuNewBTAS0hOiH5rPGk1jhnuXQQddnQ5z030DfwpsbS',6,0,NULL,'2019-04-22 21:05:18','2019-04-22 21:05:18'),(23,'Noway Jose','studenttwenty','twenty@email.com',NULL,'$2y$10$O0p5BgvyfQMN5F2oHrXetujz4bx2p.9f4XySj0iOHTLzPBk.RfO1q',6,0,NULL,'2019-04-22 21:05:18','2019-04-22 21:05:18'),(24,'Castanza Stanza','principalone','principal@email.com',NULL,'$2y$10$o9/1WIy0r7CNjXmBDOfwEuzXSL7IbeQYwKQnLZ4WnROyq46hmXNFq',0,2,NULL,'2019-04-22 21:05:19','2019-04-22 21:05:19');
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

-- Dump completed on 2019-04-22 21:05:22
