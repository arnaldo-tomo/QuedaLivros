-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: quedalivros
-- ------------------------------------------------------
-- Server version	5.7.33

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'ADMIN QUEDA','admin@gmail.com','$2y$10$tw778sHV1oOvaubavhCO7erdZD5qq6Chx4S/fy4BwoUIzOh3hy6am','2022-09-19 04:38:25','2022-09-19 04:38:25');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autors`
--

DROP TABLE IF EXISTS `autors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `autors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `autorPerfil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autorNome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autorEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autorDescricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `autors_autorperfil_unique` (`autorPerfil`),
  UNIQUE KEY `autors_autoremail_unique` (`autorEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autors`
--

LOCK TABLES `autors` WRITE;
/*!40000 ALTER TABLE `autors` DISABLE KEYS */;
INSERT INTO `autors` VALUES (1,'perfil/autores/ZnU8gQlOmsQUdY5sABuyujN63MP9rjqGPM6DjuiR.jpg','MAuro','mauro@gamil.com','_mauro@gamil.com','2022-09-19 04:39:01','2022-09-19 04:39:01'),(3,'perfil/autores/ZkaXYKmrOxk1LiK911BXplQ19tWQkCRcDEmNvQMn.jpg','Catia Cabral','m1auro@gamil.com','vmauro@gamil.commauro@gamil.com','2022-09-19 04:40:13','2022-09-19 04:40:13'),(4,'perfil/autores/V6jEsFopFArkoe7ug0JSrqf7aaKOXRsc53ahzfre.jpg','Arminfo Cossa','mabmro@gamil.com','mauro@gamil.com','2022-09-19 04:41:35','2022-09-19 04:41:35'),(5,'perfil/autores/vKjBEj7yaIS4FIHBsMHGSmqwUQUvYhSD1dn41q2C.jpg','Chapo domingo','chaomauro@gamil.com','mauro@gamil.com','2022-09-19 04:42:12','2022-09-19 04:42:12'),(6,'perfil/autores/iD0ewUbeGmgMLQGtF0niObIgV5vOpTFdHrR4czdS.jpg','Ailoton','xhjszmauro@gamil.com','mauro@gamil.com','2022-09-19 04:42:53','2022-09-19 04:42:53');
/*!40000 ALTER TABLE `autors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `livros`
--

DROP TABLE IF EXISTS `livros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `livros` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `livroNome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `livroImagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `livroCategoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `livroAutor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `livroPdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `livroEdicao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `livroDescricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `livros`
--

LOCK TABLES `livros` WRITE;
/*!40000 ALTER TABLE `livros` DISABLE KEYS */;
INSERT INTO `livros` VALUES (1,'Amores da vida','livro/imgane/eUkfrYxiJ61MHVxVgIoHE5Vp0IbfTdQeY2JDQxfC.jpg','History Books','Catia Cabral','livro/pdf/ZkDb8b0pzXgyURp2BHMPH7eTIVqA3jVaXs4cHeND.pdf',NULL,'mauro@gamil.commauro@gamil.com','Gratis','2022-09-19 04:44:42','2022-09-19 04:44:42'),(2,'Marilvisa da beira','livro/imgane/MLRfVZ1HyPFboTdv8KXERQ1sH9p5jfil3KKdYcIO.jpg','History Books','MAuro','livro/pdf/Q109Hs4EAbCxXSmwjBMldE3XMEgeBuhuBBjwdBpt.pdf',NULL,'LivroNomeLivroNomeLivroNome','Primium','2022-09-19 04:51:26','2022-09-19 04:51:26'),(3,'Sabores noturnos','livro/imgane/7HPf1vXlxLcmMalrJCs40ml5sRUaemZy5yPZIsMG.jpg','Horror Story','Chapo domingo','livro/pdf/2WkxJG6POFrsa9bJcUZK4OiF2gliBdriAnsvp7lG.pdf',NULL,'LivroNomeLivroNomeLivroNomeLivroNomeLivroNome','Gratis','2022-09-19 04:53:36','2022-09-19 04:53:36'),(4,'Maravilhas da mnga','livro/imgane/mM50RsqiyVcAcxHnCQxzDTeyidYoD4nSHtzUTav2.jpg','Computers & Internet','Arminfo Cossa','livro/pdf/piFQK6SNyaRTkPz9lV8CGgPHQnXkwKl2Ai9FS2M8.pdf',NULL,'Jhfjmfxh,','Primium','2022-09-19 04:55:55','2022-09-19 04:55:55'),(5,'o amanhecer','livro/imgane/ZJPwSw4UieAofPRwYT0lnMAdArKnqZq5NnVlW7oS.png','History Books','Chapo domingo','livro/pdf/4hKh9BBhXvjPKxTY0iIkEQtFZwXNLsVOapBrEgUG.pdf',NULL,'o amanhecer , a hora do pantano!','Gratis','2022-09-19 04:58:52','2022-09-19 04:58:52'),(6,'Insonias','livro/imgane/v8pWjDRXcuYUUiD8wZUX758jfAr8ZXhkrcXF5WP2.jpg','Sports<','Catia Cabral','livro/pdf/yqBNiVCrfIs7wHrEb1oVM04dFD3BmoKa8mNRjNF0.pdf',NULL,'kjbbb','Gratis','2022-09-19 05:08:59','2022-09-19 05:08:59'),(7,'Anjos novos','livro/imgane/l8G1UdeGmafPFQh1gQgGVSHbrck9arioDSVkU4oG.jpg','History Books','Chapo domingo','livro/pdf/vrZT8RwMNrt8FDe3K0GTia4VbgWohUoqH8Ah1uc6.pdf',NULL,'Descricao do livro:','Primium','2022-09-19 05:40:44','2022-09-19 05:40:44'),(8,'Revista Bula','livro/imgane/MsNWpa82FuE2TvVK5NM9vRF8n1vsMZOBDjeDPfrF.jpg','Horror Story','Arminfo Cossa','livro/pdf/heYNzNVra3EiLVVvWGsqhdncg1znU1tr5fn3SeFk.pdf',NULL,'Para se chegar ao resultado fizemos uma compilação de listas publicadas por jornais, revistas e sites especializados em listas, mercado editorial e livros.','Gratis','2022-09-19 16:42:37','2022-09-19 16:42:37');
/*!40000 ALTER TABLE `livros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_09_15_174510_create_admins_table',1),(6,'2022_09_16_073439_create_autors_table',1),(7,'2022_09_16_073548_create_livros_table',1),(8,'2022_09_16_073616_create_categorias_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2022-09-20 13:18:30
