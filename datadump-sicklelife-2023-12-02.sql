-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: localhost    Database: sicklelife
-- ------------------------------------------------------
-- Server version	8.0.25-0ubuntu0.20.10.1

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
-- Table structure for table `album_baskets`
--

DROP TABLE IF EXISTS `album_baskets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `album_baskets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `album_id` int unsigned NOT NULL,
  `basket_id` int unsigned NOT NULL,
  `added_by_id` int unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `album_baskets_album_id_index` (`album_id`),
  KEY `album_baskets_basket_id_index` (`basket_id`),
  KEY `album_baskets_added_by_id_index` (`added_by_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `album_baskets`
--

LOCK TABLES `album_baskets` WRITE;
/*!40000 ALTER TABLE `album_baskets` DISABLE KEYS */;
INSERT INTO `album_baskets` VALUES (1,1,5,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(2,1,3,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(3,1,2,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(5,2,2,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(6,3,3,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(9,4,3,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(11,5,3,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(12,5,4,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(13,3,5,1,NULL,'2022-05-08 14:54:45','2022-05-08 14:54:45'),(17,9,1,1,NULL,'2022-05-28 14:20:33','2022-05-28 14:20:33');
/*!40000 ALTER TABLE `album_baskets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `album_images`
--

DROP TABLE IF EXISTS `album_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `album_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `album_id` int unsigned NOT NULL,
  `image_id` int unsigned NOT NULL,
  `added_by_id` int unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `album_images_album_id_index` (`album_id`),
  KEY `album_images_image_id_index` (`image_id`),
  KEY `album_images_added_by_id_index` (`added_by_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `album_images`
--

LOCK TABLES `album_images` WRITE;
/*!40000 ALTER TABLE `album_images` DISABLE KEYS */;
INSERT INTO `album_images` VALUES (1,1,1,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(2,1,3,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(3,1,2,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(4,1,5,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(5,1,6,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(6,1,7,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(7,1,4,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(9,2,3,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(10,2,2,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(11,2,8,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(12,2,9,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(13,3,7,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(14,3,4,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(15,3,9,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(16,3,5,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(17,3,6,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(18,4,4,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(19,4,8,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(20,4,7,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(21,4,5,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(22,4,6,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(23,5,5,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(24,5,8,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(25,5,2,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(26,5,4,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(27,5,6,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(28,6,5,1,NULL,'2022-05-15 18:14:28','2022-05-15 18:14:28'),(29,6,2,1,NULL,'2022-05-15 18:14:35','2022-05-15 18:14:35'),(30,6,6,1,NULL,'2022-05-15 18:14:43','2022-05-15 18:14:43'),(31,6,3,1,NULL,'2022-05-15 18:15:04','2022-05-15 18:15:04');
/*!40000 ALTER TABLE `album_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `albums`
--

DROP TABLE IF EXISTS `albums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `albums` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `category_id` int unsigned NOT NULL DEFAULT '1',
  `image_id` int unsigned NOT NULL DEFAULT '1',
  `author_id` int unsigned NOT NULL DEFAULT '1',
  `added_by_id` int unsigned NOT NULL DEFAULT '1',
  `listing_date` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2022-05-07 19:42:39',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albums`
--

LOCK TABLES `albums` WRITE;
/*!40000 ALTER TABLE `albums` DISABLE KEYS */;
INSERT INTO `albums` VALUES (1,1,'Team work is expedient',NULL,1,1,2,1,'2021/02/23',NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(2,1,'SickleLife Media Awareness Campaigns',NULL,2,2,2,1,'2020/10/23',NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(3,1,'Medical Services - Outreach',NULL,3,3,2,1,'2020/01/23',NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(4,1,'SickleLife Youth Education Seminar',NULL,2,4,2,1,'2019/02/23',NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(5,1,'SickleLife Living Legends Series','This is in recognition of the many struggles persons living with sickle cell disease undergo daily. It is a clarion call through our posts to our readers to make the best of their situation, despite the odds and enjoy each moment for its inherent beauty. It also encourages us to seek knowledge about sickle cell disease daily, as if each were our last.',4,5,2,1,'2019/01/03',NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(6,1,'Test album','fgd sdjisdf dfgdgfd',4,7,1,1,'05/12/2022',NULL,'2022-05-15 18:12:33','2022-05-15 18:12:33'),(7,1,'Images from the Website 2016','Images from the Website 2016',2,4,1,2,'05/19/2022',NULL,'2022-05-19 17:23:41','2022-05-19 17:23:41'),(8,1,'World Sickle Cell Day','Picture of World Sickle Day',1,1,1,8,'05/23/2022',NULL,'2022-05-23 14:04:00','2022-05-23 14:04:00'),(9,1,'test album','just another test',1,1,1,1,'05/10/2022',NULL,'2022-05-28 14:20:06','2022-05-28 14:20:06');
/*!40000 ALTER TABLE `albums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `authors` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  `image_id` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2022-05-07 19:42:38',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES (1,'Dr. Sefakor Enam Bankas','1',NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(2,'Veronica Owusu','2',NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(3,'The Sickle Life Editorial Team','3',NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(4,'Dr. Sefakor Enam Bankas and Aaron Tabi','3',NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39');
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `baskets`
--

DROP TABLE IF EXISTS `baskets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `baskets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_rank` int NOT NULL DEFAULT '1',
  `added_by_id` int unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `baskets_added_by_id_index` (`added_by_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `baskets`
--

LOCK TABLES `baskets` WRITE;
/*!40000 ALTER TABLE `baskets` DISABLE KEYS */;
INSERT INTO `baskets` VALUES (1,'World SC Day','Our albums related to awareness events',1,1,NULL,'2022-05-07 19:42:39','2022-05-27 10:23:47'),(2,'Anniversaries','All our anniversary related albums',1,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(3,'Our People','Albums celebrating our people',1,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(4,'Outreach','Albums our outreach activities',1,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(5,'Advocacy','Our advocacy efforts',1,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(6,'Images from website','These are the images one can link to from the website',1,2,NULL,'2022-05-19 17:20:52','2022-05-19 17:20:52');
/*!40000 ALTER TABLE `baskets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogitem_authors`
--

DROP TABLE IF EXISTS `blogitem_authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogitem_authors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `blogitem_id` int unsigned NOT NULL,
  `author_id` int unsigned NOT NULL,
  `added_by_id` int unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blogitem_authors_blogitem_id_index` (`blogitem_id`),
  KEY `blogitem_authors_author_id_index` (`author_id`),
  KEY `blogitem_authors_added_by_id_index` (`added_by_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogitem_authors`
--

LOCK TABLES `blogitem_authors` WRITE;
/*!40000 ALTER TABLE `blogitem_authors` DISABLE KEYS */;
INSERT INTO `blogitem_authors` VALUES (1,1,2,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(2,1,4,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(3,1,5,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(4,2,2,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(5,2,3,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(6,2,6,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(7,3,1,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(8,3,8,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(9,4,1,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(10,4,9,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(11,4,10,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(12,5,6,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(13,5,7,1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(14,6,1,2,NULL,'2022-05-19 17:51:41','2022-05-19 17:51:41'),(15,6,2,2,NULL,'2022-05-19 17:51:41','2022-05-19 17:51:41'),(16,7,1,2,NULL,'2022-05-19 17:56:18','2022-05-19 17:56:18'),(17,7,2,2,NULL,'2022-05-19 17:56:18','2022-05-19 17:56:18'),(22,8,10,2,NULL,'2022-05-19 18:01:49','2022-05-19 18:01:49'),(23,8,1,2,NULL,'2022-05-19 18:01:49','2022-05-19 18:01:49');
/*!40000 ALTER TABLE `blogitem_authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogitems`
--

DROP TABLE IF EXISTS `blogitems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogitems` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `published` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief` text COLLATE utf8mb4_unicode_ci,
  `body` longtext COLLATE utf8mb4_unicode_ci,
  `category_id` int unsigned NOT NULL DEFAULT '1',
  `image_id` int unsigned NOT NULL DEFAULT '1',
  `author_id` int unsigned NOT NULL DEFAULT '1',
  `added_by_id` int unsigned NOT NULL DEFAULT '1',
  `listing_date` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_from_date` date DEFAULT NULL,
  `show_till_date` date DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2022-05-07 19:42:39',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogitems`
--

LOCK TABLES `blogitems` WRITE;
/*!40000 ALTER TABLE `blogitems` DISABLE KEYS */;
INSERT INTO `blogitems` VALUES (1,1,'Sickle Cell Health Tips For Harmattan','We are once again in the thick of harmattan. The weather is cold and dry, and there is a lot of dust in the air. What can we do to minimize the effects it has on people with Sickle Cell? During this season the weather can be very unpredictable. During the day it can get','<p>We are once again in the thick of harmattan. The weather is cold and dry, and there is a lot of dust in the air. What can we do to minimize the effects it has on people with Sickle Cell?</p>\n\n                <p>During this season the weather can be very unpredictable. During the day it can get sweltering, and at night it can get frigid. In all situations, it is essential to stay hydrated. With the dryness in the atmosphere, it is very easy to lose fluids. Just because you do not, sweat does not mean you are hydrated. As much as possible, drink lots of fluids. When you are going out, take a bottle of water with you. This is very important for children since they are very active and are always running around and playing. Make sure they stay hydrated as much as possible.</p>\n\n                <p>It is crucial to stay warm, as well. Wearing more than one layer of clothing will go a long way to keep you warm. If possible, take a jacket or sweater with you when you leave the house. Avoid cold foods and drinks where possible. For children, make sure they are bundled up. Since they are young, don’t know the importance of this, but you should insist on it. Avoid sleeping with the AC or fan at night. The temperatures tend to drop at night. Also, take baths with warm water when the weather is cold.</p>\n\n                <p>Get as much rest as possible. Take naps when you can. The more rest you get, the better. It reduces your stress levels and keeps you healthy. When your body is stressed, it is hard for it to fight infections, and you will feel more tired than usual. Proper rest will go a long way to keep you healthy. Grab a good book, watch a good movie. Encourage your children to take naps as well. They expend a lot of energy during the day, so a good nap will really help them.</p>\n\n                <p>Always use moisturizers and lip balms. They prevent dryness and helps reduce dehydration. The dry conditions can lead to cracked skin and lips, which tend to be quite painful. Shea butter is a useful local moisturizer, and it is readily available almost everywhere. </p>\n\n                <p>And last but not least, make sure you take your medications regularly. Without this, everything else will not be beneficial. Stock up on your medications before they get finished. Always make sure you have extra stock in case of emergencies.</p>',1,8,2,1,'2020-01-09','team-work-is-expedient','2022-01-01','2023-01-01',NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(2,1,'What Is Sickle Cell Disease',NULL,'<p>Definition:<br/>\n                Sickle Cell Disease is an inherited blood disorder that affects Red Blood Cells. People with Sickle Cell Disease have Red Blood Cells that contain haemoglobin S, an abnormal type of haemoglobin.</p>\n                \n                <p>Haemoglobin is the substance within Red Blood Cells that carry oxygen from the air into our lungs and to all parts of the body.</p>\n                \n                <p>Normal Red Blood Cells contain haemoglobin A. These are soft and disc-shaped and can squeeze through tiny blood vessels. They usually live for about 120 days before new ones replace them.</p>\n                \n                <p>People with Sickle Cell Disease make a different form of haemoglobin called haemoglobin S. Red Blood Cells containing mostly haemoglobin S are stiff, distorted in shape and have difficulty passing through the body’s small blood vessels. They also have a shorter lifespan (about 16 days) than normal Red Blood Cells.</p>\n                \n                <p>When sickle-shaped cells block small blood vessels, less blood can reach that part of the body.\n                Tissues that do not have normal blood flow eventually become damaged.</p>\n                \n                <p>Incidence:<br/>\n                Globally, 300 to 400 thousand babies are born with Sickle Cell Disease each year, more than half of whom are in Sub-Saharan Africa.<br/>\n                Sickle Cell occurs in about 1 in every 500 African-American births, and about 2 million Americans or 1 in 12 African Americans carry the sickle cell trait.<br/>\n                Thirty percent (1 in 3) of Ghanaians have the Sickle Cell trait, and 2 percent of children born in Ghana annually have Sickle Cell Disease.<br/>\n                Inheritance:<br/>\n                Sickle Cell is inherited from parents in much the same way as blood type, hair colour and texture, eye colour and other physical traits. The types of haemoglobin a person makes in the Red Blood Cells depend upon what haemoglobin genes the person inherits from his or her parents. Like most genes, haemoglobin genes are inherited in two sets, one from each parent.</p>\n                \n                <p>Examples:<br/>\n                If one parent has Sickle Cell Anemia (SS disease) and the other is Normal (AA), all of the children will have sickle cell trait (AS).<br/>\n                If one parent has Sickle Cell Anemia (SS) and the other has Sickle Cell Trait (AS), there is a 50% chance of having a baby with either Sickle Cell Anaemia (SS) or Sickle Cell Trait (AS) with each pregnancy.<br/>\n                When both parents have Sickle Cell Trait (AS), they have a 25% chance of having a baby with Sickle Cell Disease with each pregnancy.</p>\n                \n                <p>Types of Sickle Cell Disease:<br/>\n                There are several types of Sickle Cell Disease. The most common are:<br/>\n                Haemoglobin SS Disease – Sickle cell anaemia.<br/>\n                Haemoglobin SC Disease.<br/>\n                Sickle Beta-Plus Thalassaemia.<br/>\n                Sickle Beta-Zero Thalassaemia.</p>\n                <p>References:<br/>www.blackdoctor.org<br/>www.sicklecelldisease.org</p>',1,1,2,1,'2019-07-24','team-work-is-expedient','2022-01-01','2023-01-01',NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(3,1,'World Sickle Cell Day 2019; 10 Years of Global Awareness, Advocacy & Education.',NULL,'<p>Sickle Cell Disease (SCD) is a genetic disorder affecting 300 to 400 million adults and children worldwide. 65% of Sickle Cell Disease carriers are in Sub-Saharan Africa. Research indicates that about 90% of children born with Sickle Cell Disease in sub-Saharan Africa die before the age of 5 years.</p>\n\n                <p>People who have Sickle Cell Disease are born with an abnormal type of haemoglobin (S); the protein in Red Blood Cells (RBC) that carries oxygen around the body. The presence of the “S” haemoglobin and any other abnormal haemoglobin makes the diagnosis of SCD. Thus people who are SS, SC, SE etc. have Sickle Cell Disease. The presence of abnormal haemoglobin in the presence of normal haemoglobin “A” is termed Trait or Carrier. These include AS, AC etc. A person who has the sickle cell trait does not have the sickle cell disease, they generally do not have symptoms of SCD, but can pass the abnormal haemoglobin to their child and may have a child with sickle cell disease if their partner also has the sickle cell trait.</p>\n                \n                <p>In SCD, the abnormal RBCs become sickle/crescent-shaped, hard and stiff. These get stuck in small blood vessels in different parts of the body, obstruct blood flow and deprive various parts of the body of oxygen. This blockage causes pain and injury to all organs of the body.</p>\n                \n                <p>Sickle Cell Disease has become the foremost genetic disease worldwide. However, when diagnosed early and managed appropriately patients experience a better quality of life. Advancement in research and care also ensure that some patients are cured through Bone Marrow Transplants and Gene Therapy.</p>\n                \n                 \n                \n                <p>World Sickle Cell Day was instituted by the United Nations General Assembly in 2008 to increase the awareness about SCD and its cure among the public, and it was celebrated first time on 19th of June in 2009.</p>\n                \n                <p>Over the past decade, World Sickle Cell Day has had different themes annually, reflecting global objectives:</p>\n                \n                 \n                \n                <p>2009: An Approach to Public Health — the Sickle Cell Burden</p>\n                \n                <p>The burden of SCD is real. From forcing sufferers to live different lifestyles compared to their friends, to pain crises. With the year 2009, the Sickle Cell community decided to take a more public approach to the burden of sickle cell and try to inform as many people about it as possible. There’s still a lot that has to be done with informing and educating people on sickle cell disease since there are still a lot of misconceptions, such as the disease being contagious and spiritual. A lot of persons living with SCD are stigmatised for being different. A lot more has to be done with educating the public on the condition.</p>\n                \n                <p>2010: Hope, Education and Awareness</p>\n                \n                <p>Hope is defined as a feeling of expectation and desire for a particular thing to happen. In everything, it is essential to keep hope alive. Hope for a cure for sickle cell, hope for better training for doctors and better resources. It is also essential to educate people on Sickle Cell Disease so they’re better equipped to help out their loved ones living with the condition who may be going through difficult situations. It is also important to increase awareness of SCD. A lot more work needs to be done in the education and awareness aspects by the sickle cell community, however, we are keeping hope alive daily.</p>\n                \n                <p>2011: Come together and Educate</p>\n                \n                <p>The theme of sickle cell day for this year called for the whole community to come together and educate the population on Sickle Cell Disease. As with raising awareness, a lot of work is still left to do here in regards to educating the public on sickle cell disease.</p>\n                \n                <p>2012: Keep Hope Alive</p>\n                \n                <p>The theme called the community not to lose hope when it comes to the fight against sickle cell. It is something we as a community do daily. We keep hope alive, knowing that soon, there would be better resources for the treatment of sickle cell disease. Maybe even a more affordable and accessible cure.</p>\n                \n                <p>2013: Know Your Sickle Cell Status</p>\n                \n                <p>The theme for this year called everyone to know their Sickle Cell Status. The importance of this is to end the cycle of people giving birth to children with Sickle Cell Disease. It is important to know your status and then make informed decisions with your life partner. A lot of work still needs to be done in this regard especially in sub- Saharan Africa. Ghana, for example, has not seen a significant decline in the 15,000 annual births of children with SCD in the past decade.</p>\n                \n                <p>2014: Break the Silence on Sickle Cell Disorder</p>\n                \n                <p>In 2014, the sickle cell community was called to be more vocal about the condition, which is currently being done but has more room for improvement.</p>\n                \n                <p>2015: For Sickle Cell Disease to stop being ignored you must STOP YOUR SILENCE and SHARE YOUR TRUTH</p>\n                \n                <p>The theme for this year called for the sickle cell community to be more vocal about sickle cell disease again.</p>\n                \n                <p>2016: Exhibit Courage and Address Ineffective Areas of Support</p>\n                \n                <p>When it comes to sickle cell support, there seem to be a lot of unaddressed issues. From healthcare which isn’t</p>\n                \n                <p>2017: Break the Sickle Cycle</p>\n                \n                <p>With this theme, people were being called to break the cycle of sickle cell and its occurrence among us. Young couples are to be pre-tested to break the cycle of sickle cell. This goes back to the amount of education that needs to be done to help prevent  Sickle Cell.</p>\n                \n                <p>2018: SCD: Walk For Hope</p>\n                \n                <p>In 2018, the theme “Walk For Hope” called for the community to walk and keep the hope alive for the solution to sickle cell.</p>\n                \n                <p>For World Sickle Cell Day 2019, after a decade of World Sickle Cell Day commemorations, we look back at Ten Years of Awareness, Advocacy and Education and continue to ask what are key success indicators, what are the lessons learnt and what has been the impact of these commemorations?</p>\n                \n                <p>In Ghana over the past decade, there has been no concerted effort in the commemoration of World Sickle Cell Day on a national level. Unlike other conditions such as Diabetes, Malaria, HIV and Tuberculosis which have national programmes that coordinate activities related to these conditions in the country, Sickle Cell Disease continues to be left in the shadows without a national agency specifically mandated for this purpose.</p>\n                \n                <p>Beyond symposia and lectures organized by associations and corporate organizations, medical screenings, genotype testing and health walks organized by NGOs, not much can be said for our World Sickle Cell Day efforts over the decade. Even more saddening is the lack of collaboration and integration between governmental agencies, clinicians and NGO all supposedly working for a common goal.</p>\n                \n                <p>We can only hope that in the next decade the strengths of various stakeholders will be mobilized and all,including patients, advocates, NGOs, clinicians, researchers etc. will be invited to the table to work for the common good of the public.</p>\n                \n                <p>No single individual, association, foundation or organization is the citadel of all knowledge. We look forward to greater collaboration in the next decade and impact from the various activities and programmes organized.</p>\n                \n                <p>This year, we encourage you to join the many Sickle Cell Disease organiZations in Ghana in commemorating this important Day. Join the Sickle Cell Foundation and Association on Wednesday June 19, at 5pm at the Ghana College of Physicians and Surgeons in a symposium titled “Blood is thicker than water”.<br/>\n                Peer Foundation on June 19th and 22nd in Takoradi for a health talk and medical screening; The Ghana Institute of Clinical Genetics (Sickle Cel Clinic), KorleBu on Saturday 22nd June at 6am for a health walk, aerobics and health education and on Sunday June 23rd join the Sickle Life support group in collaboration with SCAI, Sickle Strong Warrior Foundation and Sickle Cell Awareness Ghana at 1pm at KFC Osu for a support group meeting and fallen warriors remembrance event.</p>\n                \n                <p>Know your genotype, make an informed decision.</p>',1,7,4,1,'2019-06-19','team-work-is-expedient','2022-01-01','2023-01-01',NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(4,1,'World Sickle Cell Day 2019',NULL,'<p>World Health Days are an essential part of public health policy. They provide opportunity for raising awareness and mobilizing local and international support for a wide spectrum of medical conditions.</p>\n\n                <p>Sickle Cell Disease is a potentially fatal disease and one of the main causes of premature death amongst children under the age of five in many African countries (WHO).</p>\n                \n                <p>World Sickle Cell Day was instituted by the United Nations General Assembly in 2008 to increase awareness about Sickle Cell Disease and its management among the public. It was celebrated for the first time on June 19, 2009. Annual commemorations following this have further sought to increase public knowledge about the condition.</p>\n                \n                <p>The United Nations resolution on Sickle Cell Disease UN A/63/L.63 include:\n                <ol>\n                <li>The United Nations recognizes that Sickle Cell Anaemia is a public health problem.</li>\n                <li>The United Nations highlights why it is necessary to raise awareness about Sickle Cell Anaemia and to eliminate the prejudices associated with it.</li>\n                <li>The United Nations urges member states to raise awareness of Sickle Cell Anaemia on June 19 each year at both national and international levels.</li>\n                <li>The United Nations encourages member states, its own agencies, funds, and programmes, as well as international institutions and development partners to support health systems and health care delivery as well as efforts to improve the management of Sickle Cell Anaemia.</li>\n                <li>The United Nations invites Member States and international organizations to support the efforts being made to combat Sickle Cell Anaemia and to encourage basic and applied research on the disease.\n                <li>In Member States where Sickle Cell Anaemia is a public health problem, the United Nations encourages the establishment of national programmes and specialized centres for the treatment of Sickle Cell.</li>\n                <li>The United Nations requests the Secretary-General to bring the present resolution to the attention of all Member States and organizations of the United Nations system.</li>\n                </ol>\n                </p>\n                \n                <p>#WorldSickleCellDay<br/>\n                #SickleLife</p>',1,9,3,1,'2019-06-06','team-work-is-expedient','2022-01-01','2023-01-01',NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(5,1,'Sickle Cell Health Tips For Harmattan',NULL,'',1,1,4,1,'January 9, 2020','team-work-is-expedient','2022-01-01','2023-01-01',NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(6,1,'Remembering Paul… (1)','Dr. Paul Mensah qualified as a medical doctor from the University of Ghana Medical School (UGMS) in 2002. He joined the Department of Haematology in April 2004 as a medical officer. He was an intelligent, hardworking and meticulous person who carried out his work with great passion. In October 2007, he became the first person to pass the Membership Examination of the Faculty of Laboratory Medicine, Ghana College of Physicians and Surgeons.','<p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\"><span id=\"img_container_1469525696793\" class=\"img_container smallFail failed largeFail\" data-failed=\"Tap to try again!\" style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: inherit; font-weight: inherit; font-style: inherit; vertical-align: baseline;\"><span style=\"font-family: Lato, Helvetica, sans-serif; font-style: inherit; font-weight: inherit;\">Dr. Paul Mensah qualified as a medical doctor from the University of Ghana Medical School (UGMS) in 2002. He joined the Department of Haematology in April 2004 as a medical officer. He was an intelligent, hardworking and meticulous person who carried out his work with great passion. In October 2007, he became the first person to pass the Membership Examination of the Faculty of Laboratory Medicine, Ghana College of Physicians and Surgeons.&nbsp; He had further training in Transfusion Medicine with an attachment at Liverpool Blood Center in 2012, and passed the West African College of Physicians Fellowship Examination in October 2012.</span></span></p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">Paul was actively involved in training residents, and there are many here who attest to his thoroughness and hands-on approach. He was an excellent physician who took very good care of his patients: listening carefully, encouraging gently, and keeping clear, detailed records. Until his demise, he served as the secretary of the Ghana Society of Haematology, from 2011.</p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">Dr. Paul Mensah was appointed head of the Southern Area Blood Centre of the National Blood Service Ghana in November 2012. He was a dedicated, passionate and meticulous leader, quick to learn, full of life and energy. Paul was a particularly vocal advocate for voluntary blood donation in Ghana. He threw himself into his work: whether answering young people’s questions about blood donation on whatsapp, challenging and motivating his team towards targets, or courting the co-operation of anyone who could help increase the supply of safe blood- school boards, health administrators, clinical staff, religious groups, suppliers… Even beauty queens! These efforts paid off: by the end of his first year, voluntary blood collections increased bu 40%. He was also instrumental in setting up a dedicated satellite blood bank for Maternity Block, and haemorrhage soon ceased to be the leading cause of maternal mortality in Korle Bu.</p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">Paul taught Haematology at the University for Development Studies, Tamale in 2011. He was also a part-time lecturer in Haematology, at the University of scape Coast School of Medical Science,and, from September 2013, at the UGMS.</p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">His Christian testimony was clear. He founded SABC Christian fellowship and led several of the meeting. He was a youth pastor for several years at Changed Life Baptist Church, Tesano, where he was ordained a Reverend Minister on 4th October , 2015. Three weeks later, on 26th October he was called to a higher service, following a brief illness and complications of Sickle cell disease.</p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">Paul Kojo Sekum Mensah was an inspiration to many of us. May our fond memories of him, and his shinning example of excellence bursting forth from adversity, spur us&nbsp; to truly honour him by continuing in his steps of faith, diligence and integrity.</p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">FROM:<br>Remembering Paul…<br>A memorial by colleagues, classmates and friends of Rev. Dr. Paul K. S.Mensah (18th August 1975- 26th October 2015)<br>About Paul….</p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">Sickle Life:<br>Dr. Mensah remains in our hearts and minds. We cannot forget him.<br>It is with deep regret that we posthumously celebrate this&nbsp;true hero and inspiration to many living with sickle cell as we failed to do a&nbsp; profile on him while he was alive.<br>Be inspired by him as we are.<br>Dr. Mensah lives on through every single life he touched.</p>',2,20,1,2,'02/08/2016',NULL,NULL,NULL,NULL,'2022-05-19 17:51:41','2022-05-19 17:51:41'),(7,1,'Remembering Paul… (2)','It’s hard to eulogize someone when the very process feels like ceding to a mutual enemy, but this is important. It must be done.','<br style=\"color: rgb(64, 64, 64); font-family: Lato, Helvetica, sans-serif; font-size: 16px;\"><span style=\"color: rgb(64, 64, 64); font-family: Lato, Helvetica, sans-serif; font-size: 16px;\">It’s hard to eulogize someone when the very process feels like ceding to a mutual enemy, but this is important. It must be done.</span><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\"></p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">Ours was not a chance encounter. Earliest I can remember, my mom would always encourage me to aspire to more and to be more. Disease was not a limitation, illness was not an excuse. She would talk about a doctor who was braving the storms and beating the odds despite this infirmity. I could be like him if I really wanted to.</p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">In no time, we met, and there I sat, in awe. I too could be a doctor. Yes, I may miss a lot of school, probably miss an exam or two, maybe get held back in school. I might even be discharged from the emergency room on the morning of major exams or worse still write them in there, but, by God, I could be a doctor if I really set my heart to it. I could, because Dr Mensah had.</p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">And thus, the friendship was struck. We’ll meet and mostly talk about health. Dr Mensah I’m tired of the drugs. I keep taking them, but I’m still falling ill. I’m just tired. And the simple response?<br>Enam, think about the consequences. What happens when you do not take your medication? That’s all I do. I think about the consequences, I shut up and I take what they give me. It was that simple, but that message was effective, because those consequences, boy, are they dreadful.</p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">The last time we met was at the Sickle Cell Clinic ( Institute of Clinical Genetics). I was attending to my dissertation and he was there I presume, on official haematology department/ blood centre business.</p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">We had to talk, we always did. How was life, school, health? What about&nbsp;<a href=\"http://www.sicklelife.wordpress.com/\" style=\"background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(233, 102, 86); margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: inherit; font-weight: inherit; font-style: inherit; vertical-align: baseline; transition: all 700ms ease 0s;\">the blog</a>, when would the next post be released? Life was amazing, school was hell, my health could be better and the blog was on break. More accurately, my entire life was on a hold. I have finals, and you know how our health can be, I told him. Just a little stressor and we are in all kinds of trouble, hence the break. I even came up with a nice tag-line for it. I was #waitingtograduatetograduate. Everything would resume after the exam, I promised.</p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">Then came his idea. You know, Enam, I’ve been thinking about this for a while, I just got busy and never got the opportunity to meet you. Remember that post you did on blood transfusion, how about I edit it a bit and submit it to one of the newspapers?</p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">But of course Dr. Mensah, please. Do add your name, I will love to co-author something with you, I told him. Ok Enam, I’ll download it off your site when I get back to the office and start working on it. And that’s how that conversation ended. I had to rush back to my lectures. And then life happened.</p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">Now here is the kicker, I thought up a counter offer. An amazing one, actually. One I never got to share with my mentor, friend and counselor because I also was too busy. All I had to do was graduate, and I’ll have all the time in the world to offer my skills and time to the blood bank, while reading 5 books a week, blogging, starting a business, traveling, revising fluid mechanics and building rafts with all the free time I was about to come into. But then, huh, life happened!</p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">The post Dr Mensah spoke about, like the others I do, was inspired by personal experience. He had called one evening when he was in a bind. Well, just a bit of a bind, I must say. His team was all set but needed a few more hands to go with them on their monthly voluntary blood donation exercises at the Accra mall. I jumped on it as if I had been training my whole life for it and got a couple of friends to come with. It was amazing. And without warning it was as if we had been thrown into a haematology viva as people asked questions about transfusion medicine when we approached them to well, stop what they came to the mall for and go donate blood. People asked if they could donate if they had partied the previous night or had malaria 2 weeks prior to that and many more. They shared fears of their blood being tested for HIV and just, general reservations about blood donations and transfusions. It really was the kind of learning experience I wish I had more of. The kind of learning experience I was blessed to have, because I had Dr Mensah as mentor.</p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">That was one experience, and there I was thinking, how about we do a series of posts on the experiences of Dr. Mensah&nbsp;and his team at these voluntary donation exercises. How about we bring up the questions raised by the donors and address them in our series, how about we educate people about the advantages of voluntary blood donation in a laid back manner and how about we find some people who have all but felt the life seep out of them and share their stories of how transfusions saved them. How about that?</p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">I guess not, because well, life happened.<br>I have cried many tears, asked even more questions and have had to pull myself out of a downward spiral.<br>Whatever happened to “with early diagnosis and effective treatment, prognosis is good?”<br>What happened to all the medical knowledge, skills and access? What happened?<br>Of what use is this struggle, if it makes no difference when it really counts?<br>This is not how these stories end.<br>Dr Mensah does not die now.&nbsp; He keeps beating the odds and all the while inspiring the lot of us.</p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">But I console myself knowing that God’s ways are not our ways and his thoughts are not our thoughts, because I know that is what Dr Mensah will expect of me.</p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">40 years might seem short, but these 40, were well lived.<br>The impact will continue to be felt for many year to come and this is a promise.</p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">RIP Boss. Friend. Mentor. Counsellor.<br>#guardianangelsaremuchcoolerthanmentors because that is what makes me sleep at night.<br>Rest in Peace.</p>',2,21,1,2,'02/10/2016',NULL,NULL,NULL,NULL,'2022-05-19 17:56:18','2022-05-19 17:56:18'),(8,1,'Remembering Paul… (3)','I think of you brother\r\nI wonder what silence\r\nEnshrouds you there\r\nWhere time has stopped\r\nAnd moments once shared\r\nWhen you were here\r\nHang frozen on walls of time\r\nTreasured memories\r\nThat only we who loved you','<p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">To Paul<br>I think of you brother<br>I wonder what silence<br>Enshrouds you there<br>Where time has stopped<br>And moments once shared<br>When you were here<br>Hang frozen on walls of time<br>Treasured memories<br>That only we who loved you<br>Have</p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">I think of you Paul<br>You’re no more here<br>I look away from the void<br>You left<br>A presence we will miss<br>A voice removed<br>I have your contact<br>On my phone<br>My eyes linger on your dp<br>But you’re no longer<br>Here</p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">I miss you brother<br>I am sad you’re gone<br>I know you were always meant<br>For a better place than here<br>So I don’t despair<br>You’ve left your mark<br>Right on my heart<br>Your blessed footsteps<br>Of His light<br>Brighten the path<br>That leads me surely<br>One day<br>To you</p><p style=\"margin-bottom: 24px; padding: 0px; border: 0px; outline: 0px; font-family: Lato, Helvetica, sans-serif; vertical-align: baseline; text-align: justify; color: rgb(64, 64, 64); font-size: 16px;\">Published with permission of Dr. Teddy Totimeh.<br>To Paul. 5/12/15</p>',2,7,1,2,'02/12/2016',NULL,NULL,NULL,NULL,'2022-05-19 17:59:20','2022-05-19 17:59:20');
/*!40000 ALTER TABLE `blogitems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_rows` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int unsigned NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_types` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventitem_categories`
--

DROP TABLE IF EXISTS `eventitem_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `eventitem_categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2022-05-07 19:42:38',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventitem_categories`
--

LOCK TABLES `eventitem_categories` WRITE;
/*!40000 ALTER TABLE `eventitem_categories` DISABLE KEYS */;
INSERT INTO `eventitem_categories` VALUES (1,'SickleLife','SickleLife',NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(2,'Education','Education',NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(3,'Healthcare','Healthcare',NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(4,'Life Style','Life Style',NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39');
/*!40000 ALTER TABLE `eventitem_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventitems`
--

DROP TABLE IF EXISTS `eventitems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `eventitems` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brief` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `category_id` int unsigned NOT NULL DEFAULT '1',
  `image_id` int unsigned NOT NULL DEFAULT '1',
  `author_id` int unsigned NOT NULL DEFAULT '1',
  `listing_date` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_from_date` date DEFAULT NULL,
  `show_till_date` date DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2022-05-07 19:42:38',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventitems`
--

LOCK TABLES `eventitems` WRITE;
/*!40000 ALTER TABLE `eventitems` DISABLE KEYS */;
INSERT INTO `eventitems` VALUES (1,'Team work is expedient','Team work is expedient','Team work is expedient',1,1,2,'Feb. 23, 2021','team-work-is-expedient','2022-01-01','2023-01-01',NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(2,'SickleLife Media Awareness Campaigns','SickleLife Media Awareness Campaigns','SickleLife Media Awareness Campaigns',2,2,2,'Oct. 23, 2020','team-work-is-expedient','2022-01-01','2023-01-01',NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(3,'Medical Services - Outreach','Medical Services - Outreach','Medical Services - Outreach',3,3,2,'Oct. 23, 2020','medical-services','2022-01-01','2023-01-01',NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(4,'SickleLife Youth Education Seminar','SickleLife Youth Education Seminar','SickleLife Youth Education Seminar',2,4,2,'Oct. 23, 2020','youth-education-seminar','2022-01-01','2023-01-01',NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(5,'SickleLife Living Legends Series','SickleLife Living Legends Series','SickleLife Living Legends Series',4,5,2,'Oct. 23, 2020','living-legend-series','2022-01-01','2023-01-01',NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39');
/*!40000 ALTER TABLE `eventitems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
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
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image_url` text COLLATE utf8mb4_unicode_ci,
  `added_by_id` int unsigned NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2022-05-07 19:42:38',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'20220507194239-Sickle Life Team',NULL,'template/assets/images/team.jpg',1,NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(2,'20220507194239-Media Engagement',NULL,'template/assets/images/media-engagement2.jpg',1,NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(3,'20220507194239-Medical Services',NULL,'template/assets/images/medical-services.jpg',1,NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(4,'20220507194239-Education',NULL,'template/assets/images/education.jpg',1,NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(5,'20220507194239-Sadat',NULL,'template/assets/images/sadat.jpg',1,NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(6,'20220507194239-CSD',NULL,'template/assets/images/what_is_scd.jpg',1,NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(7,'20220507194239-CS Day',NULL,'template/assets/images/scd-2019.jpg',1,NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(8,'20220507194239-Harmattan',NULL,'template/assets/images/harmattan.jpg',1,NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(9,'20220507194239-Sickle status',NULL,'template/assets/images/sicklestatus.jpeg',1,NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(10,'20220507194239-Dr. Sefakor Enam Bankas',NULL,'template/team/dr_sefakor4.png',1,NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(11,'20220507194239-Veronica Owusu',NULL,'template/team/vero.png',1,NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(12,'20220507194239-Prisca Dede Tetteh',NULL,'template/team/prisca.png',1,NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(13,'20220507194239-Naomi  Akom Okadja',NULL,'template/team/naomi.png',1,NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(14,'20220507194239-Serian Emefa Agbenya',NULL,'template/team/emefa2.png',1,NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(15,'20220507194239-Nathaniel Dela Seneadza',NULL,'template/team/nathaniel.png',1,NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(16,'20220507194239-Ruth Owusu Boateng',NULL,'template/team/ruth.png',1,NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(17,'20220507194239-Felix Amanor Otu',NULL,'template/team/felix.png',1,NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(18,'20220507194239-Sefakor Aku Biddah',NULL,'template/team/sefakor.png',1,NULL,'2022-05-07 19:42:38','2022-05-07 19:42:39'),(19,'20220516033251-Demo Image','This image is simply for demonstration','public/template/assets/images/20220516033251-1-s2.0-S1568494620300685-gr4_lrg.jpg',1,NULL,'2022-05-16 03:32:51','2022-05-16 03:32:51'),(20,'20220519172522-Remembering Paul(1)','Images from Website 2016 Remembering Paul','public/template/assets/images/20220519172522-Remembering Paul.jpg',2,NULL,'2022-05-19 17:25:22','2022-05-19 17:25:22'),(21,'20220519175421-Remembering Paul 2','Images form website 2016','public/template/assets/images/20220519175421-Remembering Paul 2.jpg',2,NULL,'2022-05-19 17:54:21','2022-05-19 17:54:21');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_items` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_01_000000_add_voyager_user_fields',1),(4,'2016_01_01_000000_create_data_types_table',1),(5,'2016_05_19_173453_create_menu_table',1),(6,'2016_10_21_190000_create_roles_table',1),(7,'2016_10_21_190000_create_settings_table',1),(8,'2016_11_30_135954_create_permission_table',1),(9,'2016_11_30_141208_create_permission_role_table',1),(10,'2016_12_26_201236_data_types__add__server_side',1),(11,'2017_01_13_000000_add_route_to_menu_items_table',1),(12,'2017_01_14_005015_create_translations_table',1),(13,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(14,'2017_03_06_000000_add_controller_to_data_types_table',1),(15,'2017_04_21_000000_add_order_to_data_rows_table',1),(16,'2017_07_05_210000_add_policyname_to_data_types_table',1),(17,'2017_08_05_000000_add_group_to_settings_table',1),(18,'2017_11_26_013050_add_user_role_relationship',1),(19,'2017_11_26_015000_create_user_roles_table',1),(20,'2018_03_11_000000_add_user_settings',1),(21,'2018_03_14_000000_add_details_to_data_types_table',1),(22,'2018_03_16_000000_make_settings_value_nullable',1),(23,'2019_08_19_000000_create_failed_jobs_table',1),(24,'2019_12_14_000001_create_personal_access_tokens_table',1),(25,'2021_09_16_081359_create_eventitems_table',1),(26,'2021_09_16_083747_create_eventitem_categories_table',1),(27,'2022_02_13_163056_create_authors_table',1),(28,'2022_02_13_163711_create_images_table',1),(29,'2022_02_22_152651_create_blogitems_table',1),(30,'2022_04_04_161748_create_team_members_table',1),(31,'2022_05_04_134656_create_user_types_table',1),(32,'2022_05_04_165712_create_blogitem_authors_table',1),(33,'2022_05_05_084517_create_albums_table',1),(34,'2022_05_05_092421_create_album_images_table',1),(35,'2022_05_07_165840_create_baskets_table',1),(36,'2022_05_07_170130_create_album_baskets_table',1);
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
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permission_role` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
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
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
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
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_members`
--

DROP TABLE IF EXISTS `team_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `team_members` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  `image_url` text COLLATE utf8mb4_unicode_ci,
  `role` text COLLATE utf8mb4_unicode_ci,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `sort_rank` int DEFAULT NULL,
  `sm_facebook` text COLLATE utf8mb4_unicode_ci,
  `sm_twitter` text COLLATE utf8mb4_unicode_ci,
  `sm_instagram` text COLLATE utf8mb4_unicode_ci,
  `sm_linkedin` text COLLATE utf8mb4_unicode_ci,
  `displayed_as_teammember` tinyint(1) NOT NULL DEFAULT '1',
  `added_by_id` int unsigned NOT NULL DEFAULT '1',
  `image_id` int unsigned NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2022-05-07 19:42:39',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_members`
--

LOCK TABLES `team_members` WRITE;
/*!40000 ALTER TABLE `team_members` DISABLE KEYS */;
INSERT INTO `team_members` VALUES (1,'Dr. Sefakor Enam Bankas',NULL,'Founder and Managing Director','<p><b>Reason for interest in Sickle Cell / joining Sickle Life:</b><br>\n                I am person living with Sickle Cell Disease, health advocate and medical doctor and have experienced this condition through several perspectives which have exposed several gaps in the Sickle Cell Disease space locally.<br>\n                I founded Sickle Life to bridge the existing gaps in Advocacy, management and research in Sickle Cell Disease in Ghana. </p>\n                \n                <p><b>What you hope to achieve through Sickle Life:</b><br>\n                Increase awareness about Sickle Cell Disease among the public and empower them to make informed decisions about the condition.\n                Educate persons living with Sickle Cell Disease about the condition to improve health seeking behaviour and quality of life.<br>\n                Improve standards of care and management of Sickle Cell Disease nationally</p>',1,'https://www.facebook.com/bankas','https://twitter.com/BankasMD','https://www.instagram.com/bankas_md/','https://www.linkedin.com/in/enam-sefakor-bankas-7a2031116/',1,1,10,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(2,'Veronica Owusu','template/team/vero.png','Administrative Assistant','<p><b>Joining Sickle Life:</b> <br>\n                    I always love new challenges. So when a past admin approached me about this role, I was eager to take it. I have learnt new things about Sickle Cell Disease and have been able to broaden my administrative skills.</p>\n                <p><b>Hopes:</b> <br>\n                I’ll like to put in my share of the work to see our vision of establishing a safe haven for persons living with SCD come to pass and in the process grow and be inspired by the lives I touch.</p>',2,'https://m.facebook.com/veronica.owusu.3304','https://twitter.com/NanaAkuaVee','https://www.instagram.com/nanaakuavee/','https://www.linkedin.com/in/veronica-owusu-1b548114a/',1,1,11,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(3,'Prisca Dede Tetteh','template/team/prisca.png','Support Group Administrator','<p><b>Joining Sickle Life:</b> <br>\n                I am a Sickle Cell Patient so if I have to advocate and volunteer for a group of people, it should be with people I understand and share in their ordeal. That is why I joined Sickle Life.</p>\n                <p><b>Hopes:</b> <br>\n                I will like to join forces with my other colleagues in Sickle Life to make Team Sickle Life the number one SCD advocate group in Ghana.</p>',3,NULL,'https://twitter.com/TettehPrisca','https://www.instagram.com/prisca_mizworld/','https://www.linkedin.com/in/prisca-dede-tetteh-a45a2920a/',1,1,12,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(4,'Naomi  Akom Okadja',NULL,'Support Group and Welfare Administrator','<p><b>Joining Sickle Life:</b> <br>\n                Since I am a person living with SCD I  deemed it fit to assist in advocacy in every way I can, to educate people on the disease.</p>\n                <p><b>Hopes:</b> <br>\n                To be able to reach lots of people with less knowledge of SCD and also mentor people living with the disease.</p>',4,'https://www.facebook.com/maadwoa.nhyira.7',NULL,'https://www.instagram.com/maadwoanhyira3332/','https://www.linkedin.com/in/naomi-akom-okadja-448789203',1,1,13,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(5,'Serian Emefa Agbenya',NULL,'Marketing and Branding','<p><b>Joining Sickle Life:</b> <br>\n                To be an advocate and to educate the general public about the condition and to make informed choices since I grew up watching my friend living with the condition and the pain and stress it comes with it but she was able to achieve her aims without been limited with her condition. It made me admire her willingness to fight on so it made me join Sickle Life so I can encourage persons living with SCD not to give up their dreams since they can achieve their dreams if they put their minds to it without making the condition define who they really are and what they want to become in future.</p>\n                <p><b>Hopes:</b> <br>\n                To encourage and be a source of hope for persons living with SCD \n                To increase awareness about Sickle Cell Disease among the public and empower them to make informed decisions about the condition.\n                To be a voice for persons living with SCD so that there shall be policies structured to suit their needs when it comes to living with SCD.</p>',5,'https://www.facebook.com/qemiesea',NULL,'https://www.instagram.com/qeme_sea/','https://www.linkedin.com/in/serian-agbenya-a9b1ab90/',1,1,14,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(6,'Nathaniel Dela Seneadza','template/team/nathaniel.png','Programs Team Lead','<p><b>Joining Sickle Life:</b> <br>\n                Growing up, I had a same name cousin who struggled with episodes of SCD. Back then, I had no idea what it was. He passed on while about 30. At work, I had the opportunity to work with a warrior that inspired me to develop interest in knowing more about SCD. There is nowhere to know more than being part of the family that constantly share their own experiences.</p>\n                <p><b>Hopes:</b> <br>\n                I wanted to just do something to support the works of SickleLife. I started attending programs and then became a delivery guy. I availed myself for any service and then I was invited to be part of the organization\'s welfare administrators and subsequently joined the administrative team as Team Lead for programs. The more I get involved and learn about the condition, the more my urge to serve grows. It is my desire to see SickleLife expand its membership across the country and transform lives to acknowledge that SCD cannot be a limitation to attaining their potentials.</p>',7,'https://www.facebook.com/dela.seneadza',NULL,NULL,'ttps://www.linkedin.com/in/nathaniel-dela-seneadza-a580a9201',1,1,15,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(7,'Ruth Owusu Boateng',NULL,'Marketing and Branding','<p><b>Joining Sickle Life:</b> <br>\n                To help create awareness of the disease to the larger people. Most people have little or no idea about the condition, making them sometimes stigmatize people living with the disease. I joined to help reach out to a lot of people through health education and screening programs, to educate them and also help them know their genotype.</p>\n                <p><b>Hopes:</b> <br>\n                Hope to achieve: I’m hopeful that through the health education and screenings, more people will get to know their genotypes and make informed choices when choosing marriage partners. And also hoping that with time, the stigmatization will reduce and people living with the disease will receive the optimum medical care for recovery during crisis.</p>',8,'https://www.facebook.com/maame.owusuboateng','https://twitter.com/Agyekumwaa11','https://www.instagram.com/akosuah_agyekumwaa/','https://www.linkedin.com/in/maame-agyekumwaa-owusu-boateng-8b088214b/',1,1,16,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(8,'Felix Amanor Otu',NULL,'Business and Finance','<p><b>Joining Sickle Life:</b> <br>\n                As a person thriving with SCD I want to be a voice of hope to other persons living with SCD. I want to contribute to the research on how the lives of persons living with SCD can be improved and how health workers can better understand SCD patients. I believe this is how I can contribute to addressing some of the social inequities in our health care system with focus on persons living with SCD.</p>\n                <p><b>Hopes:</b> <br>\n                To make SickleLife the support system and safe place for persons living with SCD. A place where persons living with SCD can freely share their experiences and meaningfully contribute to the body on knowledge on SCD.</p>',9,'https://www.facebook.com/felix.a.otu',NULL,'https://www.instagram.com/nene_amanor','www.linkedin.com/in/felix-amanor-otu',1,1,17,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(9,'Sefakor Aku Biddah',NULL,'Programs','<p><b>Joining Sickle Life:</b> <br>\n                Desire to help educate and create awareness for the sickle cell disease</p>\n                <p><b>Hopes:</b> <br>\n                To have a lot of people educated about the disease through our social initiatives and interventions</p>',10,'https://www.facebook.com/sefakor.boadu',NULL,NULL,'http://linkedin.com/in/sefakor-biddah-6a02a5213',1,1,18,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(10,'Dr Teddy Totimeh',NULL,'Writer','Dr Teddy Todimeh',NULL,NULL,NULL,NULL,NULL,0,2,7,NULL,'2022-05-19 18:01:23','2022-05-19 18:01:23');
/*!40000 ALTER TABLE `team_members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `translations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_roles` (
  `user_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_types`
--

DROP TABLE IF EXISTS `user_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_types` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `added_by_id` int unsigned NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_types_code_unique` (`code`),
  KEY `user_types_added_by_id_index` (`added_by_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_types`
--

LOCK TABLES `user_types` WRITE;
/*!40000 ALTER TABLE `user_types` DISABLE KEYS */;
INSERT INTO `user_types` VALUES (1,'Regular User','This is a regular user','REG','#2E4CD1',1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(2,'Admin User','This is an admin user','ADM','#2E4CD1',1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(3,'Super User','This is an super user','SUP','#2E4CD1',1,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39');
/*!40000 ALTER TABLE `user_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type_id` int unsigned NOT NULL DEFAULT '1',
  `added_by_id` int unsigned NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_user_type_id_index` (`user_type_id`),
  KEY `users_added_by_id_index` (`added_by_id`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,NULL,'Elisha','elishasenoo@gmail.com','users/default.png','2022-05-07 19:42:39','$2y$10$Fq1OZY6Z.S0dmWix8.nbuuihppshMMRHAdeb7ytEdPZX/dXOB3WT2',3,1,NULL,NULL,NULL,'2022-05-07 19:42:39','2022-05-28 14:18:27'),(2,NULL,'Vero','pheronicaowusu@gmail.com','users/default.png','2022-05-07 19:42:39','$2y$10$KeHe8GQ7uqMtbno5LZGPxuLvSoILOzzBxSuW/lFq6CRnFePwYea2G',2,1,NULL,NULL,NULL,'2022-05-07 19:42:39','2022-05-07 19:42:39'),(3,NULL,'Enam Sefakor Bankas','juanbankas@gmail.com','users/default.png',NULL,'$2y$10$hXVq0Yw7pi8lzFgihUjgTuI9mCrh7SbRlcrtLDDhXSBXOvcu7fdaO',2,2,NULL,NULL,NULL,'2022-05-07 19:52:28','2022-05-11 11:45:32'),(4,NULL,'Prisca Dede Tetteh','priscatetteh123@gmail.com','users/default.png',NULL,'$2y$10$EVqwHAwva2Kjz6wfKHsCt.h8m4MKsKunr3SOer6rn9JjmD02xUVIa',2,2,NULL,NULL,NULL,'2022-05-12 21:14:32','2022-05-12 21:14:32'),(8,NULL,'Sefakor Aku Biddah','sefadjors@gmail.com','users/default.png',NULL,'$2y$10$WSHlVM/PZFA/KIKdRw3M8OubVUCOK5NI.jRaYnSxo.d5GNW.tx1xi',2,2,NULL,NULL,NULL,'2022-05-12 21:20:30','2022-05-12 21:20:30'),(9,NULL,'Serian Emefa Agbenya','rosebudrobe@gmail.com','users/default.png',NULL,'$2y$10$/BSSaW5raR4v9cQeYI5COuaA9DxoVW0.o3j21Kh1TsXyBQQ9PyE7y',2,2,NULL,NULL,NULL,'2022-05-12 21:24:17','2022-05-12 21:24:17');
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

-- Dump completed on 2023-12-02 12:57:25
