-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: hayabusa
-- ------------------------------------------------------
-- Server version	8.2.0

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
-- Table structure for table `about_image`
--

DROP TABLE IF EXISTS `about_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `about_image` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `page_id` bigint unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `about_image_page_id_foreign` (`page_id`),
  CONSTRAINT `about_image_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `about_page` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_image`
--

LOCK TABLES `about_image` WRITE;
/*!40000 ALTER TABLE `about_image` DISABLE KEYS */;
INSERT INTO `about_image` VALUES (1,1,'img-0-1711312324.webp','2024-03-24 23:02:04','2024-03-24 23:02:04'),(2,1,'img-1-1711312324.webp','2024-03-24 23:02:04','2024-03-24 23:02:04'),(3,1,'img-2-1711312324.webp','2024-03-24 23:02:04','2024-03-24 23:02:04');
/*!40000 ALTER TABLE `about_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `about_nepal_image`
--

DROP TABLE IF EXISTS `about_nepal_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `about_nepal_image` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `page_id` bigint unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `about_nepal_image_page_id_foreign` (`page_id`),
  CONSTRAINT `about_nepal_image_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `about_nepal_page` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_nepal_image`
--

LOCK TABLES `about_nepal_image` WRITE;
/*!40000 ALTER TABLE `about_nepal_image` DISABLE KEYS */;
INSERT INTO `about_nepal_image` VALUES (1,1,'img-0-1711315081.webp','2024-03-24 23:48:01','2024-03-24 23:48:01'),(2,1,'img-1-1711315081.webp','2024-03-24 23:48:02','2024-03-24 23:48:02'),(3,1,'img-2-1711315082.webp','2024-03-24 23:48:02','2024-03-24 23:48:02');
/*!40000 ALTER TABLE `about_nepal_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `about_nepal_page`
--

DROP TABLE IF EXISTS `about_nepal_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `about_nepal_page` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `main_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_sub_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_sub_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_description_en` text COLLATE utf8mb4_unicode_ci,
  `page_description_jp` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_nepal_page`
--

LOCK TABLES `about_nepal_page` WRITE;
/*!40000 ALTER TABLE `about_nepal_page` DISABLE KEYS */;
INSERT INTO `about_nepal_page` VALUES (1,'About Nepal','ネパールについて','Nepal','ネパール','Home of Himalayas','ヒマラヤの故郷','<p>Embark on a journey to Nepal, the breathtaking &quot;Home of Himalayas,&quot; where towering peaks and serene valleys converge to create an unparalleled natural wonderland. From the majestic slopes of Mount Everest to the tranquil trails of Annapurna, Nepal offers adventure seekers and spiritual travelers an unforgettable experience. Discover the rich tapestry of culture and tradition as you immerse yourself in the warmth of Nepalese hospitality. With vibrant festivals, ancient temples, and picturesque landscapes at every turn, Nepal beckons explorers to witness its unmatched beauty and discover the magic of the Himalayas. Welcome to Nepal, where every moment is a breathtaking adventure.</p>','<p>息を呑むような「ヒマラヤの故郷」ネパールへの旅に出かけましょう。そこでは、そびえ立つ山々や穏やかな渓谷が集まり、比類のない自然のワンダーランドを作り出しています。 エベレスト山の雄大な斜面からアンナプルナの静かな小道まで、ネパールは冒険を求める人やスピリチュアルな旅行者に忘れられない体験を提供します。 ネパールの温かいおもてなしに浸りながら、文化と伝統の豊かなタペストリーを発見してください。 活気に満ちた祭り、古代寺院、絵のように美しい風景が随所に見られるネパールは、その比類のない美しさを目の当たりにし、ヒマラヤの魔法を発見するよう探検家を誘います。 ネパールへようこそ。ここでは、あらゆる瞬間が息をのむような冒険に満ちています。</p>','1711315007-gallery_image_1.png','1711315007-gallery_image_9.png','[{\"title_en\": \"Area\", \"title_jp\": \"エリア\", \"value_en\": \"147514 Km2\", \"value_jp\": \"147514 Km2\"}, {\"title_en\": \"Capital\", \"title_jp\": \"資本\", \"value_en\": \"Kathmandu\", \"value_jp\": \"カトマンズ\"}, {\"title_en\": \"Population\", \"title_jp\": \"人口\", \"value_en\": \"30,666,598\", \"value_jp\": \"30,666,598\"}, {\"title_en\": \"Official Language\", \"title_jp\": \"公用語\", \"value_en\": \"Nepali\", \"value_jp\": \"ネパール語\"}]','2024-03-24 23:46:47','2024-03-24 23:48:01');
/*!40000 ALTER TABLE `about_nepal_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `about_page`
--

DROP TABLE IF EXISTS `about_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `about_page` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `main_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_sub_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_sub_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_description_en` text COLLATE utf8mb4_unicode_ci,
  `page_description_jp` text COLLATE utf8mb4_unicode_ci,
  `team_sub_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_sub_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_description_en` text COLLATE utf8mb4_unicode_ci,
  `team_description_jp` text COLLATE utf8mb4_unicode_ci,
  `director_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director_tagline_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director_tagline_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director_name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director_name_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director_description_en` text COLLATE utf8mb4_unicode_ci,
  `director_description_jp` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_page`
--

LOCK TABLES `about_page` WRITE;
/*!40000 ALTER TABLE `about_page` DISABLE KEYS */;
INSERT INTO `about_page` VALUES (1,'About Hayabusa','はやぶさについて','Introduction','導入','We are Hayabusa','私たちははやぶさです','<p><strong>Introducing Hayabusa Consultancy and Training Centre: Your pathway to Japanese language excellence and study abroad Adventure in Japan!</strong></p><p>Welcome to Hayabusa Consultancy, your gateway to academic excellence in Japan. Nestled in the vibrant city of Kathmandu, Nepal, we specialize in guiding ambitious students towards fulfilling their educational aspirations in Japan.</p><p>At Hayabusa Consultancy, we understand that embarking on a journey to study abroad can be both exciting and daunting. That&#39;s why we are here to simplify the process and provide comprehensive support at every step. With our expertise and personalized approach, we strive to make your dream of studying in Japan a reality.</p><p>Join us at Hayabusa Consultancy, and let us help you turn your dreams into reality. Your future begins here.</p>','<p><strong>ハヤブサ コンサルティング アンド トレーニング センターのご紹介: 日本語の優秀さと留学への道 日本での冒険!</strong></p><p>日本の優秀な学術への登竜門であるハヤブサ・コンサルタンシーへようこそ。 ネパールの活気に満ちた都市カトマンズに位置する当校は、日本での教育的願望の実現に向けて野心的な学生を指導することに特化しています。</p><p>Hayabusa Consultancy では、留学への旅に乗り出すことが刺激的であると同時に、気が遠くなるようなものであることを理解しています。 だからこそ、私たちはプロセスを簡素化し、あらゆる段階で包括的なサポートを提供するためにここにいます。 私たちの専門知識と個別のアプローチにより、日本への留学というあなたの夢が現実になるよう努めます。</p><p>Hayabusa Consultancy に参加して、あなたの夢を現実にするお手伝いをしましょう。 あなたの未来はここから始まります。</p>','Meet our Team','私たちのチームを紹介します','Our Workforce','私たちの従業員','<p>With our extensive network of partner institutions and industry connections, Hayabusa Consultancy and Training Center strives to provide exclusive opportunities for internships, exchange programs, and cultural exchanges, further enhancing student&#39;s understanding of Japanese society and fostering global citizenship.</p>','<p>ハヤブサ コンサルティング アンド トレーニング センターは、パートナー機関と業界との広範なネットワークを活用して、インターンシップ、交換プログラム、文化交流のための特別な機会を提供し、学生の日本社会に対する理解をさらに深め、世界市民権を育成するよう努めています。</p>','Message from the Director','監督からのメッセージ','\"We help you achieve your dream of going to Japan\"','「日本に行きたいというあなたの夢の実現をお手伝いします」','Umesh Dharel','ウメッシュ・ダレル','<p>Hayabusa Consultancy and Training Center offers personalized counselling services to guide the entire study aboard process.&nbsp;</p>','<p>Hayabusa Consultancy and Training Center は、留学プロセス全体をガイドする個別のカウンセリング サービスを提供しています。</p>','1711312323-Team_image.png','1711312323-Team_image.png','1711321238-achieve_dream_woman.png','[{\"title_en\": \"Company Name\", \"title_jp\": \"会社名\", \"value_en\": \"Hayabusa Consultancy Pvt. Ltd\", \"value_jp\": \"ハヤブサ・コンサルタンシー・プライベート・プライベート 株式会社\"}, {\"title_en\": \"Established Date\", \"title_jp\": \"設立日\", \"value_en\": \"2020\", \"value_jp\": \"2020\"}, {\"title_en\": \"Permit Number\", \"title_jp\": \"許可番号\", \"value_en\": \"857/066/067\", \"value_jp\": \"857/066/067\"}]','2024-03-24 23:02:03','2024-03-25 01:35:53');
/*!40000 ALTER TABLE `about_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `banners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_jp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('email','button','none') COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_button_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_button_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_images`
--

DROP TABLE IF EXISTS `blog_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` bigint unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_images_blog_id_foreign` (`blog_id`),
  CONSTRAINT `blog_images_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_images`
--

LOCK TABLES `blog_images` WRITE;
/*!40000 ALTER TABLE `blog_images` DISABLE KEYS */;
INSERT INTO `blog_images` VALUES (1,1,'career-opportunities-as-academic-counsellor-for-abroad-study-img-0-1711231445.webp','2024-03-24 00:34:05','2024-03-24 00:34:05'),(2,1,'career-opportunities-as-academic-counsellor-for-abroad-study-img-1-1711231445.webp','2024-03-24 00:34:05','2024-03-24 00:34:05'),(3,1,'career-opportunities-as-academic-counsellor-for-abroad-study-img-2-1711231445.webp','2024-03-24 00:34:05','2024-03-24 00:34:05'),(4,1,'career-opportunities-as-academic-counsellor-for-abroad-study-img-3-1711231445.webp','2024-03-24 00:34:05','2024-03-24 00:34:05'),(5,2,'get-upto-33-discounts-in-test-preparation-classes-img-0-1711231617.webp','2024-03-24 00:36:57','2024-03-24 00:36:57'),(6,2,'get-upto-33-discounts-in-test-preparation-classes-img-1-1711231617.webp','2024-03-24 00:36:58','2024-03-24 00:36:58'),(7,2,'get-upto-33-discounts-in-test-preparation-classes-img-2-1711231618.webp','2024-03-24 00:36:58','2024-03-24 00:36:58'),(8,2,'get-upto-33-discounts-in-test-preparation-classes-img-3-1711231618.webp','2024-03-24 00:36:58','2024-03-24 00:36:58'),(9,2,'get-upto-33-discounts-in-test-preparation-classes-img-4-1711231618.webp','2024-03-24 00:36:58','2024-03-24 00:36:58'),(10,3,'federation-scores-highly-in-rankings-for-regional-universitites-img-0-1711319497.webp','2024-03-25 01:01:37','2024-03-25 01:01:37'),(11,3,'federation-scores-highly-in-rankings-for-regional-universitites-img-1-1711319497.webp','2024-03-25 01:01:37','2024-03-25 01:01:37'),(12,3,'federation-scores-highly-in-rankings-for-regional-universitites-img-2-1711319497.webp','2024-03-25 01:01:38','2024-03-25 01:01:38'),(13,3,'federation-scores-highly-in-rankings-for-regional-universitites-img-3-1711319498.webp','2024-03-25 01:01:38','2024-03-25 01:01:38'),(14,3,'federation-scores-highly-in-rankings-for-regional-universitites-img-4-1711319498.webp','2024-03-25 01:01:38','2024-03-25 01:01:38'),(15,3,'federation-scores-highly-in-rankings-for-regional-universitites-img-5-1711319498.webp','2024-03-25 01:01:38','2024-03-25 01:01:38');
/*!40000 ALTER TABLE `blog_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_page`
--

DROP TABLE IF EXISTS `blog_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog_page` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `main_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_page`
--

LOCK TABLES `blog_page` WRITE;
/*!40000 ALTER TABLE `blog_page` DISABLE KEYS */;
INSERT INTO `blog_page` VALUES (1,'Blogs / News','ブログ / ニュース','1711231256-blog_image_1.png','2024-03-24 00:30:56','2024-03-24 00:30:56');
/*!40000 ALTER TABLE `blog_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_jp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'career-opportunities-as-academic-counsellor-for-abroad-study','Career Opportunities as Academic counsellor for abroad study','海外留学アカデミックカウンセラーとしてのキャリアチャンス','<p>Are you passionate about helping students achieve their dreams of studying abroad? Becoming an academic counselor for abroad study could be the perfect career path for you. As an academic counselor, you play a vital role in guiding students through every step of the application process, from selecting the right university to preparing for entrance exams and securing scholarships.</p><p>This career offers immense satisfaction as you witness your students flourish in international environments, gaining invaluable cultural experiences and academic achievements. With the increasing demand for global education, there&#39;s a growing need for skilled academic counselors who can provide personalized guidance and support.</p><p>By staying updated on international education trends and fostering strong relationships with universities worldwide, you can make a significant impact on students&#39; lives while enjoying a rewarding and fulfilling career. If you&#39;re passionate about education and cultural exchange, consider exploring the exciting opportunities awaiting you as an academic counselor for abroad study.</p>','<p>学生たちの海外留学の夢の実現を支援することに情熱を持っていますか? 海外留学のアカデミックカウンセラーになることは、あなたにとって完璧なキャリアパスとなるかもしれません。 アカデミックカウンセラーとして、あなたは適切な大学の選択から入学試験の準備、奨学金の確保に至るまで、出願プロセスのあらゆる段階で学生を指導する重要な役割を果たします。</p><p>このキャリアは、学生が国際的な環境で成長し、貴重な文化的経験や学業成績を獲得するのを目の当たりにすることで、大きな満足感をもたらします。 グローバル教育への需要の高まりに伴い、個別の指導とサポートを提供できる熟練したアカデミックカウンセラーの必要性が高まっています。</p><p>国際的な教育トレンドを常に最新の状態に保ち、世界中の大学との強い関係を育むことで、やりがいのある充実したキャリアを楽しみながら、学生の生活に大きな影響を与えることができます。 教育と文化交流に情熱を持っているなら、海外留学の学術カウンセラーとしてあなたを待っているエキサイティングな機会を模索することを検討してください。</p>','1711231444-heading_image.jpg','2024-03-24 00:34:05','2024-03-24 00:34:05'),(2,'get-upto-33-discounts-in-test-preparation-classes','Get upto 33% discounts in Test Preparation Classes','試験準備クラスで最大 33% 割引','<p>Are you preparing for a crucial exam shaping your academic or professional future? Don&#39;t let financial constraints hold you back from achieving your goals. We&#39;re thrilled to announce an exclusive opportunity for aspiring test-takers to access top-notch test preparation classes at unbeatable prices!</p><p>AtHayabusa, we understand the importance of comprehensive preparation in achieving your desired scores. Whether you&#39;re aiming for standardized tests like the SAT, GRE, GMAT, or professional certification exams, our expert tutors are here to equip you with the skills and strategies needed to excel.</p><p>For a limited time, please take advantage of our special discount offer and save up to 33% on test preparation classes. This incredible deal is designed to make high-quality education accessible to all, ensuring that nothing impedes your academic and career ambitions.</p><p>Why choose [Name of Institution] for your test preparation needs? With a proven track record of success, personalized attention from experienced instructors, and cutting-edge study materials, we&#39;re committed to helping you reach your full potential.</p><p>Don&#39;t miss this opportunity to supercharge your exam preparation while saving big. Enrol now and embark on your journey to success with confidence!</p>','<p>あなたの学業や職業上の将来を形作る重要な試験の準備をしていますか? 経済的な制約によって目標達成が妨げられないようにしてください。 意欲的な受験者が一流の試験対策クラスを破格の価格で受講できる特別な機会を発表できることを嬉しく思います。</p><p>ハヤブサでは、目標スコアを達成するには総合的な準備が重要であることを理解しています。 SAT、GRE、GMAT などの標準テストや専門認定試験を目指す場合でも、当校の専門講師が、優れた成績を収めるために必要なスキルと戦略を指導します。</p><p>期間限定の特別割引オファーをご利用いただき、テスト準備クラスを最大 33% 割引でご利用いただけます。 この素晴らしい協定は、誰もが質の高い教育を受けられるようにすることを目的としており、学業やキャリアへの野心を妨げるものは何もないことを保証します。</p><p>試験準備のニーズに [機関名] を選択する理由は何ですか? 実証済みの成功実績、経験豊富なインストラクターによる個別の配慮、最先端の学習教材により、私たちはあなたの潜在能力を最大限に発揮できるよう全力でサポートします。</p><p>大幅な節約をしながら試験準備を大幅に強化できるこの機会をお見逃しなく。 今すぐ登録して、自信を持って成功への旅に乗り出しましょう!</p>','1711231617-news_2.png','2024-03-24 00:36:57','2024-03-24 00:36:57'),(3,'federation-scores-highly-in-rankings-for-regional-universitites','Federation scores highly in rankings for regional universitites.','地方大学のランキングでは連盟の方が高いスコアを獲得している。','<p>Exciting news is on the horizon for the Federation community as our institution shines brightly in recent regional university rankings! We&#39;re thrilled to announce that Federation has achieved remarkable recognition, scoring highly in prestigious rankings that highlight the excellence and dedication of our faculty, staff, and students.</p><p>This achievement underscores the Federation&#39;s commitment to academic excellence, innovative research, and student success. Our relentless pursuit of educational excellence and a supportive and vibrant learning environment has propelled us to the upper echelons of regional universities.</p><p>The rankings serve as a testament to our entire community&#39;s hard work and dedication &ndash; from our esteemed faculty members who inspire and mentor our students to our talented students who demonstrate an unwavering commitment to their studies and research endeavours.</p><p>At Hayabusa, we take immense pride in providing a transformative educational experience that equips our graduates with the skills, knowledge, and confidence to thrive in a rapidly evolving world. This recognition reaffirms our mission to foster academic excellence, foster creativity, and cultivate future leaders who will make meaningful contributions to society.</p><p>As we celebrate this remarkable achievement, we remain steadfast in our commitment to continuous improvement and innovation. Together, we will continue to push boundaries, break new ground, and uphold the Federation&#39;s legacy of excellence in education and research.</p><p>Join us in celebrating this momentous milestone and embarking on a journey of limitless possibilities at Federation, where excellence knows no bounds.</p>','<p>私たちの大学が最近の地域大学ランキングで輝かしく輝いているため、連盟コミュニティにとってエキサイティングなニュースが近づいています。 私たちは、連盟が教職員、学生の卓越性と献身を強調する名誉あるランキングで高得点を獲得し、目覚ましい評価を獲得したことを発表できることを嬉しく思います。</p><p>この成果は、学術の卓越性、革新的な研究、学生の成功に対する連盟の取り組みを強調しています。 卓越した教育と協力的で活気に満ちた学習環境の絶え間ない追求により、私たちは地方大学の上層部にまで到達しました。</p><p>このランキングは、学生にインスピレーションを与え、指導する尊敬される教員から、学習や研究の努力に揺るぎないコミットメントを示す才能ある学生に至るまで、コミュニティ全体の勤勉さと献身の証として機能します。</p><p>ハヤブサでは、卒業生が急速に進化する世界で成功するためのスキル、知識、自信を身につける革新的な教育体験を提供することに大きな誇りを持っています。 この評価は、学術の卓越性を促進し、創造性を育み、社会に有意義な貢献をする将来のリーダーを育成するという私たちの使命を再確認します。</p><p>この素晴らしい成果を祝うとともに、私たちは継続的な改善と革新への取り組みを堅固に続けます。 私たちは共に限界を押し広げ、新境地を開拓し、教育と研究における優れた連盟の伝統を守り続けます。</p><p>私たちと一緒にこの重要なマイルストーンを祝い、卓越性に限界がないフェデレーションでの無限の可能性の旅に乗り出しましょう。</p>','1711231745-news_3.png','2024-03-24 00:39:05','2024-03-24 00:39:05');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client_page`
--

DROP TABLE IF EXISTS `client_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `client_page` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `main_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_description_en` text COLLATE utf8mb4_unicode_ci,
  `page_description_jp` text COLLATE utf8mb4_unicode_ci,
  `button_text_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_page`
--

LOCK TABLES `client_page` WRITE;
/*!40000 ALTER TABLE `client_page` DISABLE KEYS */;
INSERT INTO `client_page` VALUES (1,'Our Clients','我々の顧客','With our extensive network of partner institutions and industry connections, Hayabusa Consultancy and Training Center strives to provide exclusive opportunities for internships, exchange programs, and cultural exchange, further enhancing student\'s understanding of Japanese society and fostering global citizenship.','ハヤブサ コンサルティング アンド トレーニング センターは、パートナー機関と業界との広範なネットワークを活用して、インターンシップ、交換プログラム、文化交流のための特別な機会を提供し、学生の日本社会に対する理解をさらに深め、世界市民権を育成するよう努めています。','Become a partner today!','今すぐパートナーになりましょう!','http://localhost:8000/our-client','1711315670-hero.jpg','2024-03-24 23:57:50','2024-03-24 23:57:50');
/*!40000 ALTER TABLE `client_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'Rio Tinto','リオ・ティント','1711315304-Rio-Tinto.png',1,'2024-03-24 23:51:44','2024-03-24 23:51:44'),(2,'Babcok','バブコック','1711315343-Babcock-Logo.png',2,'2024-03-24 23:52:23','2024-03-24 23:52:23'),(3,'Hitachi','Hitachi','1711315368-Rectangle_10.png',3,'2024-03-24 23:52:48','2024-03-24 23:52:48'),(4,'Komatsu','小松','1711316018-Komastu_1.png',4,'2024-03-25 00:03:38','2024-03-25 00:03:38'),(5,'Shell','シェル','1711316035-Shell.png',5,'2024-03-25 00:03:55','2024-03-25 00:03:55');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_banners`
--

DROP TABLE IF EXISTS `contact_banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact_banners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title_jp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `background_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_banners`
--

LOCK TABLES `contact_banners` WRITE;
/*!40000 ALTER TABLE `contact_banners` DISABLE KEYS */;
INSERT INTO `contact_banners` VALUES (1,'Contact Us to know more about your service.','サービスの詳細については、お問い合わせください。','Lets Get Connected','つながりましょう','With a strong emphasis on linguistic proficiency and cultural impression, we strive to equip our students with the necessary skills and knowledge to thrive in a Japanese-speaking environment.','言語能力と文化的印象に重点を置き、日本語を話す環境で成長するために必要なスキルと知識を学生に身につけるよう努めています。','http://www.hayabusamixedmartialarts.com/','1711232460-Why_Study_in_japan.png','2024-03-22 15:13:26','2024-03-24 00:51:01');
/*!40000 ALTER TABLE `contact_banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_page`
--

DROP TABLE IF EXISTS `course_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `course_page` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `main_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_section_title_en` text COLLATE utf8mb4_unicode_ci,
  `course_section_title_jp` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_page`
--

LOCK TABLES `course_page` WRITE;
/*!40000 ALTER TABLE `course_page` DISABLE KEYS */;
INSERT INTO `course_page` VALUES (1,'Our Courses','私たちのコース','Courses at Hayabusa','はやぶさのコース','1711313697-hero.jpg','2024-03-24 23:24:58','2024-03-24 23:24:58');
/*!40000 ALTER TABLE `course_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (2,'SSW Course','SSWコース',1,'2024-03-24 00:52:41','2024-03-24 00:53:17'),(3,'Training Visa','研修ビザ',2,'2024-03-24 01:28:01','2024-03-24 01:28:01');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_images`
--

DROP TABLE IF EXISTS `event_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `event_id` bigint unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_images_event_id_foreign` (`event_id`),
  CONSTRAINT `event_images_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_images`
--

LOCK TABLES `event_images` WRITE;
/*!40000 ALTER TABLE `event_images` DISABLE KEYS */;
INSERT INTO `event_images` VALUES (1,1,'seminar-by-kalpan-business-school-about-education-programs-img-0-1711319063.webp','2024-03-25 00:54:23','2024-03-25 00:54:23'),(2,1,'seminar-by-kalpan-business-school-about-education-programs-img-1-1711319063.webp','2024-03-25 00:54:23','2024-03-25 00:54:23'),(3,1,'seminar-by-kalpan-business-school-about-education-programs-img-2-1711319063.webp','2024-03-25 00:54:23','2024-03-25 00:54:23'),(4,1,'seminar-by-kalpan-business-school-about-education-programs-img-3-1711319063.webp','2024-03-25 00:54:23','2024-03-25 00:54:23'),(5,1,'seminar-by-kalpan-business-school-about-education-programs-img-4-1711319063.webp','2024-03-25 00:54:24','2024-03-25 00:54:24'),(6,1,'seminar-by-kalpan-business-school-about-education-programs-img-5-1711319064.webp','2024-03-25 00:54:24','2024-03-25 00:54:24'),(7,2,'seminar-by-kalpan-business-school-about-education-programs-1-img-0-1711319212.webp','2024-03-25 00:56:52','2024-03-25 00:56:52'),(8,2,'seminar-by-kalpan-business-school-about-education-programs-1-img-1-1711319212.webp','2024-03-25 00:56:52','2024-03-25 00:56:52'),(9,2,'seminar-by-kalpan-business-school-about-education-programs-1-img-2-1711319212.webp','2024-03-25 00:56:52','2024-03-25 00:56:52'),(10,2,'seminar-by-kalpan-business-school-about-education-programs-1-img-3-1711319212.webp','2024-03-25 00:56:52','2024-03-25 00:56:52'),(11,2,'seminar-by-kalpan-business-school-about-education-programs-1-img-4-1711319212.webp','2024-03-25 00:56:52','2024-03-25 00:56:52'),(12,2,'seminar-by-kalpan-business-school-about-education-programs-1-img-5-1711319212.webp','2024-03-25 00:56:52','2024-03-25 00:56:52'),(13,2,'seminar-by-kalpan-business-school-about-education-programs-1-img-6-1711319212.webp','2024-03-25 00:56:52','2024-03-25 00:56:52'),(14,3,'seminar-by-kalpan-business-school-about-education-programs-1-img-0-1711319299.webp','2024-03-25 00:58:19','2024-03-25 00:58:19'),(15,3,'seminar-by-kalpan-business-school-about-education-programs-1-img-1-1711319299.webp','2024-03-25 00:58:19','2024-03-25 00:58:19'),(16,3,'seminar-by-kalpan-business-school-about-education-programs-1-img-2-1711319299.webp','2024-03-25 00:58:19','2024-03-25 00:58:19'),(17,3,'seminar-by-kalpan-business-school-about-education-programs-1-img-3-1711319299.webp','2024-03-25 00:58:19','2024-03-25 00:58:19'),(18,3,'seminar-by-kalpan-business-school-about-education-programs-1-img-4-1711319299.webp','2024-03-25 00:58:20','2024-03-25 00:58:20'),(19,3,'seminar-by-kalpan-business-school-about-education-programs-1-img-5-1711319300.webp','2024-03-25 00:58:20','2024-03-25 00:58:20'),(20,4,'seminar-by-kalpan-business-school-about-education-programs-1-img-0-1711319388.webp','2024-03-25 00:59:48','2024-03-25 00:59:48'),(21,4,'seminar-by-kalpan-business-school-about-education-programs-1-img-1-1711319388.webp','2024-03-25 00:59:48','2024-03-25 00:59:48'),(22,4,'seminar-by-kalpan-business-school-about-education-programs-1-img-2-1711319388.webp','2024-03-25 00:59:48','2024-03-25 00:59:48'),(23,4,'seminar-by-kalpan-business-school-about-education-programs-1-img-3-1711319388.webp','2024-03-25 00:59:48','2024-03-25 00:59:48'),(24,4,'seminar-by-kalpan-business-school-about-education-programs-1-img-4-1711319388.webp','2024-03-25 00:59:48','2024-03-25 00:59:48');
/*!40000 ALTER TABLE `event_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_page`
--

DROP TABLE IF EXISTS `event_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event_page` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `main_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sup_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sup_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title_en` text COLLATE utf8mb4_unicode_ci,
  `form_sub_title_jp` text COLLATE utf8mb4_unicode_ci,
  `form_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_sub_title_en` text COLLATE utf8mb4_unicode_ci,
  `sub_title_jp` text COLLATE utf8mb4_unicode_ci,
  `button_text_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_page`
--

LOCK TABLES `event_page` WRITE;
/*!40000 ALTER TABLE `event_page` DISABLE KEYS */;
INSERT INTO `event_page` VALUES (1,'Events','イベント','Events by Hayabusa','ハヤブサによるイベント','Events','イベント','test (sub title *** )','From Sub title JP','From title','From Title','From Sub title','test (sub title *** )','View All Events','View All Events','https://www.facebook.com/','1711232069-event_card.png','1711232069-news_1.png','2024-03-24 00:44:29','2024-03-24 00:44:29');
/*!40000 ALTER TABLE `event_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_participants`
--

DROP TABLE IF EXISTS `event_participants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event_participants` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `event_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_participants_event_id_foreign` (`event_id`),
  CONSTRAINT `event_participants_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_participants`
--

LOCK TABLES `event_participants` WRITE;
/*!40000 ALTER TABLE `event_participants` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_participants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `events` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `host_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `host_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entry_fee_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entry_fee_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_jp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'seminar-by-kalpan-business-school-about-education-programs','Seminar by Kalpan Business school about Education programs.','カプランビジネススクールによる教育プログラムに関するセミナー。','Kalpan Business','カプラン事業','15 June | Monday','6月15日 | 月曜日','11:00 AM','午前11時','Hayabusa Office','はやぶさ事業所','Narayan Gopal Chowk, Kathmandu','ナラヤン ゴパール チョーク (カトマンズ)','Free','無料','<p>Hayabusa Consultancy and Training Center, situated in the heart of Nepal, is the premier educational consultancy dedicated to offering top-notch language courses and study abroad programs for students seeking to explore the wonders of Japan. With a strong emphasis on linguistic profession and cultural impression, we strive to equip our students with the necessary skills and knowledge to thrive in a Japanese-speaking environment.&nbsp;</p>','<p>ハヤブサ コンサルティング アンド トレーニング センターは、ネパールの中心部に位置し、日本の素晴らしさを探求したい学生に一流の語学コースと留学プログラムを提供することに特化した最高の教育コンサルタント会社です。 言語的な専門職と文化的な印象に重点を置き、日本語を話す環境で成長するために必要なスキルと知識を学生に身につけるよう努めています。</p>','1711319063-news_1.png','2024-03-25 00:54:23','2024-03-25 00:54:23'),(2,'seminar-by-kalpan-business-school-about-education-programs-1','Seminar by Kalpan Business school about Education programs.','カプランビジネススクールによる教育プログラムに関するセミナー。','Kalpan Business','カプラン事業','15 June | Monday','6月15日 | 月曜日','11:00 AM','午前11時','Hayabusa Office','はやぶさ事業所','Narayan Gopal Chowk, Kathmandu','ナラヤン ゴパール チョーク (カトマンズ)','Free','無料','<p>Hayabusa Consultancy and Training Center, situated in the heart of Nepal, is the premier educational consultancy dedicated to offering top-notch language courses and study abroad programs for students seeking to explore the wonders of Japan. With a strong emphasis on linguistic profession and cultural impression, we strive to equip our students with the necessary skills and knowledge to thrive in a Japanese-speaking environment.&nbsp;</p>','<p>ハヤブサ コンサルティング アンド トレーニング センターは、ネパールの中心部に位置し、日本の素晴らしさを探求したい学生に一流の語学コースと留学プログラムを提供することに特化した最高の教育コンサルタント会社です。 言語的な専門職と文化的な印象に重点を置き、日本語を話す環境で成長するために必要なスキルと知識を学生に身につけるよう努めています。</p>','1711319212-event_card.png','2024-03-25 00:56:52','2024-03-25 00:56:52'),(3,'seminar-by-kalpan-business-school-about-education-programs-1','Seminar by Kalpan Business school about Education programs.','カプランビジネススクールによる教育プログラムに関するセミナー。','Kalpan Business','カプラン事業','15 June | Monday','6月15日 | 月曜日','11:00 AM','午前11時','Hayabusa Office','はやぶさ事業所','Narayan Gopal Chowk, Kathmandu','ナラヤン ゴパール チョーク (カトマンズ)','Free','無料','<p>Hayabusa Consultancy and Training Center, situated in the heart of Nepal, is the premier educational consultancy dedicated to offering top-notch language courses and study abroad programs for students seeking to explore the wonders of Japan. With a strong emphasis on linguistic profession and cultural impression, we strive to equip our students with the necessary skills and knowledge to thrive in a Japanese-speaking environment.&nbsp;</p>','<p>ハヤブサ コンサルティング アンド トレーニング センターは、ネパールの中心部に位置し、日本の素晴らしさを探求したい学生に一流の語学コースと留学プログラムを提供することに特化した最高の教育コンサルタント会社です。 言語的な専門職と文化的な印象に重点を置き、日本語を話す環境で成長するために必要なスキルと知識を学生に身につけるよう努めています。</p>','1711319299-event_card.png','2024-03-25 00:58:19','2024-03-25 00:58:19'),(4,'seminar-by-kalpan-business-school-about-education-programs-1','Seminar by Kalpan Business school about Education programs.','カプランビジネススクールによる教育プログラムに関するセミナー。','Kalpan Business','カプラン事業','15 June | Monday','6月15日 | 月曜日','11:00 AM','午前11時','Hayabusa Office','はやぶさ事業所','Narayan Gopal Chowk, Kathmandu','ナラヤン ゴパール チョーク (カトマンズ)','Free','無料','<p>Hayabusa Consultancy and Training Center, situated in the heart of Nepal, is the premier educational consultancy dedicated to offering top-notch language courses and study abroad programs for students seeking to explore the wonders of Japan. With a strong emphasis on linguistic profession and cultural impression, we strive to equip our students with the necessary skills and knowledge to thrive in a Japanese-speaking environment.&nbsp;</p>','<p>ハヤブサ コンサルティング アンド トレーニング センターは、ネパールの中心部に位置し、日本の素晴らしさを探求したい学生に一流の語学コースと留学プログラムを提供することに特化した最高の教育コンサルタント会社です。 言語的な専門職と文化的な印象に重点を置き、日本語を話す環境で成長するために必要なスキルと知識を学生に身につけるよう努めています。</p>','1711319388-event_card.png','2024-03-25 00:59:48','2024-03-25 00:59:48');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
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
-- Table structure for table `faq_page`
--

DROP TABLE IF EXISTS `faq_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faq_page` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `main_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_description_en` text COLLATE utf8mb4_unicode_ci,
  `page_description_jp` text COLLATE utf8mb4_unicode_ci,
  `button_text_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq_page`
--

LOCK TABLES `faq_page` WRITE;
/*!40000 ALTER TABLE `faq_page` DISABLE KEYS */;
INSERT INTO `faq_page` VALUES (1,'Frequently Asked Questions','よくある質問','If you have any inquiries regarding our services, courses, exams, or anything pertaining to Japan, please don\'t hesitate to contact us by clicking the button below.  We would be more than happy to assist you. Thank you.','弊社のサービス、コース、試験、その他日本に関するご質問がございましたら、下のボタンをクリックしてお気軽にお問い合わせください。 喜んでお手伝いさせていただきます。 ありがとう。','Message us your questions!','ご質問はメッセージでどうぞ！','http://localhost:8000/contact','1711322968-hero.jpg','2024-03-25 01:59:28','2024-03-25 01:59:28');
/*!40000 ALTER TABLE `faq_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faqs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_jp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs`
--

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
INSERT INTO `faqs` VALUES (1,'Are there any special qualifications needed to take the JLPT ?','JLPTを受験するために必要な特別な資格はありますか？','The Japanese-Language Proficiency Test is held in Japan and abroad to evaluate and certify the Japanese language proficiency of non-native Japanese speakers. The JLPT is open to all non-native Japanese speakers. Eligibility extends to holders of Japanese citizenship. There are no age restrictions for the JLPT.','日本語能力試験は、日本語を母語としない人の日本語能力を評価・認定するために国内外で実施されます。 JLPT は、日本語を母語としないすべての人が参加できます。 参加資格は日本国籍保持者にまで及びます。 JLPTには年齢制限はありません。',1,'2024-03-25 01:48:50','2024-03-25 01:48:50'),(2,'I have a physical disability. Can I take the JLPT?','私には身体障害があります。 JLPTは受験できますか？','The Japanese-Language Proficiency Test is held in Japan and abroad to evaluate and certify the Japanese language proficiency of non-native Japanese speakers. The JLPT is open to all non-native Japanese speakers. Eligibility extends to holders of Japanese citizenship. There are no age restrictions for the JLPT','日本語能力試験は、日本語を母語としない人の日本語能力を評価・認定するために国内外で実施されます。 JLPT は、日本語を母語としないすべての人が参加できます。 参加資格は日本国籍保持者にまで及びます。 JLPTには年齢制限はありません。',2,'2024-03-25 01:50:02','2024-03-25 01:50:02'),(3,'How often is the JLPT going to be administered?','JLPTはどれくらいの頻度で実施されますか?','The Japanese-Language Proficiency Test is held in Japan and abroad to evaluate and certify the Japanese language proficiency of non-native Japanese speakers. The JLPT is open to all non-native Japanese speakers. Eligibility extends to holders of Japanese citizenship. There are no age restrictions for the JLPT.','日本語能力試験は、日本語を母語としない人の日本語能力を評価・認定するために国内外で実施されます。 JLPT は、日本語を母語としないすべての人が参加できます。 参加資格は日本国籍保持者にまで及びます。 JLPTには年齢制限はありません。',3,'2024-03-25 01:50:52','2024-03-25 01:50:52'),(4,'When will the JLPT held in 2024, and where can I take it?','2024 年の JLPT はいつ開催され、どこで受験できますか?','The Japanese-Language Proficiency Test is held in Japan and abroad to evaluate and certify the Japanese language proficiency of non-native Japanese speakers. The JLPT is open to all non-native Japanese speakers. Eligibility extends to holders of Japanese citizenship. There are no age restrictions for the JLPT.','日本語能力試験は、日本語を母語としない人の日本語能力を評価・認定するために国内外で実施されます。 JLPT は、日本語を母語としないすべての人が参加できます。 参加資格は日本国籍保持者にまで及びます。 JLPTには年齢制限はありません。',4,'2024-03-25 01:51:47','2024-03-25 01:51:47'),(5,'Can I apply to take only some sections instead of all sections?','全セクションではなく、一部のセクションのみを受験することを申請できますか?','The Japanese-Language Proficiency Test is held in Japan and abroad to evaluate and certify the Japanese language proficiency of non-native Japanese speakers. The JLPT is open to all non-native Japanese speakers. Eligibility extends to holders of Japanese citizenship. There are no age restrictions for the JLPT.','日本語能力試験は、日本語を母語としない人の日本語能力を評価・認定するために国内外で実施されます。 JLPT は、日本語を母語としないすべての人が参加できます。 参加資格は日本国籍保持者にまで及びます。 JLPTには年齢制限はありません。',5,'2024-03-25 01:52:55','2024-03-25 01:52:55'),(6,'I will not be in the country/area at the time of registration. What should I do?','登録時にその国/地域に滞在しません。 どうすればいいですか？','The Japanese-Language Proficiency Test is held in Japan and abroad to evaluate and certify the Japanese language proficiency of non-native Japanese speakers. The JLPT is open to all non-native Japanese speakers. Eligibility extends to holders of Japanese citizenship. There are no age restrictions for the JLPT.','日本語能力試験は、日本語を母語としない人の日本語能力を評価・認定するために国内外で実施されます。 JLPT は、日本語を母語としないすべての人が参加できます。 参加資格は日本国籍保持者にまで及びます。 JLPTには年齢制限はありません。',6,'2024-03-25 01:53:54','2024-03-25 01:53:54');
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `help_banners`
--

DROP TABLE IF EXISTS `help_banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `help_banners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title_jp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `background_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `help_banners`
--

LOCK TABLES `help_banners` WRITE;
/*!40000 ALTER TABLE `help_banners` DISABLE KEYS */;
INSERT INTO `help_banners` VALUES (1,'We Help you achieve your dream of going to Japan.','日本に行きたいというあなたの夢の実現をお手伝いします。','Book Us For Consultantion','ご相談を予約してください','Hayabusa Consultancy and Training Centre offers personalized counselling services to guide students through the entire study abroad process.','Hayabusa Consultancy and Training Center は、留学プロセス全体を通して学生をガイドするための個別のカウンセリング サービスを提供しています。','https://hayabusa.com/','1711322072-Japan_Image.jpg','1711322072-achieve_dream_woman.png','2024-03-22 15:09:47','2024-03-25 01:44:32');
/*!40000 ALTER TABLE `help_banners` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_02_26_044856_create_settings_table',1),(6,'2023_06_24_044354_create_banners_table',1),(7,'2023_07_09_164906_create_clients_table',1),(8,'2023_07_09_171759_create_blogs_table',1),(9,'2023_07_09_172306_create_blog_images_table',1),(10,'2023_07_09_183256_create_events_table',1),(11,'2023_07_09_183314_create_event_images_table',1),(12,'2023_07_09_190609_create_faqs_table',1),(13,'2023_07_11_153115_create_testimonials_table',1),(14,'2023_07_16_071237_create_teams_table',1),(15,'2023_07_16_073222_create_courses_table',1),(16,'2023_07_16_074949_create_sub_courses_table',1),(17,'2023_07_16_170218_create_contact_banners_table',1),(18,'2023_07_16_170624_create_help_banners_table',1),(19,'2023_07_16_175820_create_course_page_table',1),(20,'2023_07_18_043629_create_event_page_table',1),(21,'2023_07_18_100155_create_event_participants_table',1),(22,'2023_07_18_111448_create_blog_page_table',1),(23,'2023_07_18_133526_create_client_page_table',1),(24,'2023_07_18_141016_create_faq_page_table',1),(25,'2023_07_19_063036_create_about_nepal_page_table',1),(26,'2023_07_19_063245_create_about_nepal_image_table',1),(27,'2023_07_20_102025_create_about_page_table',1),(28,'2023_07_20_102137_create_about_image_table',1),(29,'2023_07_21_110655_create_work_in_japan_table',1),(30,'2023_07_31_082051_create_study_in_japan_table',1),(31,'2023_07_31_082338_create_study_in_japan_image_table',1),(32,'2023_07_31_092809_create_service_for_student_table',1),(33,'2023_08_02_083415_create_service_for_client_table',1);
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
-- Table structure for table `service_for_client`
--

DROP TABLE IF EXISTS `service_for_client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `service_for_client` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `description_jp` text COLLATE utf8mb4_unicode_ci,
  `page_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services` json DEFAULT NULL,
  `services_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_for_client`
--

LOCK TABLES `service_for_client` WRITE;
/*!40000 ALTER TABLE `service_for_client` DISABLE KEYS */;
INSERT INTO `service_for_client` VALUES (1,NULL,'Nepal','ネパール','Service for Clients','Service for Clients','<p>Hayabusa Consultancy offers a range of comprehensive services to facilitate your study abroad journey in Japan. From university selection and application assistance to visa guidance and cultural orientation, we provide personalized support tailored to your specific needs. Our experienced consultants are dedicated to helping you navigate every aspect of the process, ensuring a smooth transition into your chosen academic institution. Whether you&#39;re seeking undergraduate, graduate, or research opportunities, we are committed to maximizing your chances of success. Trust Hayabusa Consultancy to be your partner in realizing your educational aspirations in Japan.</p>','<p>ハヤブサ・コンサルティングは、あなたの日本留学をスムーズにするための包括的なサービスを幅広く提供しています。 大学の選択や申請のサポートからビザのガイダンスや文化的オリエンテーションまで、私たちはあなたの特定のニーズに合わせた個別のサポートを提供します。 当社の経験豊富なコンサルタントは、プロセスのあらゆる側面をサポートし、選択した教育機関へのスムーズな移行を保証することに専念しています。 あなたが学部、大学院、または研究の機会を求めているかどうかにかかわらず、私たちはあなたの成功の可能性を最大限に高めることに尽力します。 ハヤブサ・コンサルタンシーは、日本での教育の夢を実現するためのパートナーとして信頼してください。</p>','1711314371-documentation.png','[{\"image\": \"services-image-0-1711314372.webp\", \"title_en\": \"Documentation\", \"title_jp\": \"ドキュメンテーション\", \"description_en\": \"Navigate the complexities of studying abroad with our expert counselling service.\\r\\nTailored guidance and support to address your individual needs and concerns.\\r\\nWe\'re here to listen and guide you from academic challenges to personal adjustments.\\r\\nTrust our experienced counsellors to help you thrive in your educational journey.\", \"description_jp\": \"専門のカウンセリングサービスを利用して、留学の複雑さを解決しましょう。\\r\\nお客様一人ひとりのニーズや懸念事項に応えるための、カスタマイズされたガイダンスとサポート。\\r\\n私たちは学業上の課題から個人的な調整まで、あなたの話を聞き、ガイドします。\\r\\n経験豊富なカウンセラーがあなたの教育の旅を成功に導くお手伝いをいたしますので、信頼してください。\"}]','test','test','Set up an Appointment','予約を設定する','http://localhost:8000/our-client','2024-03-24 23:36:12','2024-03-24 23:36:12');
/*!40000 ALTER TABLE `service_for_client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_for_student`
--

DROP TABLE IF EXISTS `service_for_student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `service_for_student` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `main_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `description_jp` text COLLATE utf8mb4_unicode_ci,
  `page_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services` json DEFAULT NULL,
  `services_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_for_student`
--

LOCK TABLES `service_for_student` WRITE;
/*!40000 ALTER TABLE `service_for_student` DISABLE KEYS */;
INSERT INTO `service_for_student` VALUES (1,'Our Service','当社のサービス','1711314165-hero.jpg','Nepal','ネパール','Service for Students','学生向けサービス','<p>Hayabusa Consultancy offers a range of comprehensive services to facilitate your study abroad journey in Japan. From university selection and application assistance to visa guidance and cultural orientation, we provide personalized support tailored to your specific needs. Our experienced consultants are dedicated to helping you navigate every aspect of the process, ensuring a smooth transition into your chosen academic institution. Whether you&#39;re seeking undergraduate, graduate, or research opportunities, we are committed to maximizing your chances of success. Trust Hayabusa Consultancy to be your partner in realizing your educational aspirations in Japan.</p>','<p>ハヤブサ・コンサルティングは、あなたの日本留学をスムーズにするための包括的なサービスを幅広く提供しています。 大学の選択や申請のサポートからビザのガイダンスや文化的オリエンテーションまで、私たちはあなたの特定のニーズに合わせた個別のサポートを提供します。 当社の経験豊富なコンサルタントは、プロセスのあらゆる側面をサポートし、選択した教育機関へのスムーズな移行を保証することに専念しています。 あなたが学部、大学院、または研究の機会を求めているかどうかにかかわらず、私たちはあなたの成功の可能性を最大限に高めることに尽力します。 ハヤブサ・コンサルタンシーは、日本での教育の夢を実現するためのパートナーとして信頼してください。</p>','1711314165-main_image.png','[{\"image\": \"services-image-0-1711314165.webp\", \"title_en\": \"Counsiling\", \"title_jp\": \"カウンセリング\", \"description_en\": \"Navigate the complexities of studying abroad with our expert counselling service.\\r\\nTailored guidance and support to address your individual needs and concerns.\\r\\nWe\'re here to listen and guide you from academic challenges to personal adjustments.\\r\\nTrust our experienced counsellors to help you thrive in your educational journey.\", \"description_jp\": \"専門のカウンセリングサービスを利用して、留学の複雑さを解決しましょう。\\r\\nお客様一人ひとりのニーズや懸念事項に応えるための、カスタマイズされたガイダンスとサポート。\\r\\n私たちは学業上の課題から個人的な調整まで、あなたの話を聞き、ガイドします。\\r\\n経験豊富なカウンセラーがあなたの教育の旅を成功に導くお手伝いをいたしますので、信頼してください。\"}]','test','test','Set up an Appointment','予約を設定する','http://localhost:8000/our-client','2024-03-24 23:32:45','2024-03-24 23:32:45');
/*!40000 ALTER TABLE `service_for_student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `organization_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_name_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci,
  `instagram` text COLLATE utf8mb4_unicode_ci,
  `twitter` text COLLATE utf8mb4_unicode_ci,
  `skype` text COLLATE utf8mb4_unicode_ci,
  `linkedin` text COLLATE utf8mb4_unicode_ci,
  `tiktok` text COLLATE utf8mb4_unicode_ci,
  `youtube` text COLLATE utf8mb4_unicode_ci,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text COLLATE utf8mb4_unicode_ci,
  `logo` text COLLATE utf8mb4_unicode_ci,
  `logo_secondary` text COLLATE utf8mb4_unicode_ci,
  `prospectus` text COLLATE utf8mb4_unicode_ci,
  `about_en` text COLLATE utf8mb4_unicode_ci,
  `about_jp` text COLLATE utf8mb4_unicode_ci,
  `copyright_text_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_text_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operating_days_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operating_days_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'Hayabusa','Hayabusa','info@hayabusa.com.np',NULL,'+977-9851327209',NULL,'Narayan Gopal Chowk 04, Kathmandu, Bagmatim, Nepal','ナラヤン ゴパル チョーク 04, カトマンズ, バグマティム, ネパール','https://www.facebook.com/hctcnepal','https://www.instagram.com/hayabusaconsultancy/',NULL,NULL,NULL,'https://www.tiktok.com/@hayabusaconsultancy1',NULL,NULL,NULL,'<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.315492651238!2d85.33899679999999!3d27.7384134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1910e4aa719b%3A0x828953fc2d109498!2sHayabusa%20Consultancy%20and%20Training%20Center!5e0!3m2!1sen!2sca!4v1711314586528!5m2!1sen!2sca\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>','1711230899-color_logo.png','1711230899-white_logo.png',NULL,'We provide a pathway to Japanese Language excellence and study-abroad adventures in Japan!','私たちは、優れた日本語能力と日本での留学冒険への道を提供します。','Copyright © 2024 Hayabusa Consultancy','Copyright © 2024 はやぶさコンサルティング','Sun-Fri | 8:00 AM to 7:00 PM','日曜～金曜 | 午前8時から午後7時まで','2024-03-22 15:12:27','2024-03-24 23:40:02');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `study_in_japan`
--

DROP TABLE IF EXISTS `study_in_japan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `study_in_japan` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `main_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_sub_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_sub_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_description_en` text COLLATE utf8mb4_unicode_ci,
  `page_description_jp` text COLLATE utf8mb4_unicode_ci,
  `secondary_page_description_en` text COLLATE utf8mb4_unicode_ci,
  `secondary_page_description_jp` text COLLATE utf8mb4_unicode_ci,
  `button_text_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `questions` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `study_in_japan`
--

LOCK TABLES `study_in_japan` WRITE;
/*!40000 ALTER TABLE `study_in_japan` DISABLE KEYS */;
INSERT INTO `study_in_japan` VALUES (1,'Study In Japan','日本留学','Studies','研究','Why study in Japan ?','なぜ日本に留学するのですか？','<p>Studying in Japan is an immersive odyssey that transcends academic boundaries, offering students a gateway to unparalleled personal and professional growth. Our consultancy is dedicated to guiding you through this transformative experience.</p><p>Mastering the Japanese language is fundamental to thriving in Japan&#39;s dynamic environment. Our language classes, including NAT, JLPT, JLCT, and TOPJ preparation courses, equip you with the linguistic prowess needed for success in academia and beyond.</p><p>Beyond language proficiency, Japan&#39;s rich cultural tapestry awaits exploration. From vibrant city life to serene countryside, Japan offers a diverse backdrop for academic pursuits. Our consultancy provides personalized support in navigating admissions, securing scholarships, and obtaining visas for the university or vocational school of your choice.</p><p>Immerse yourself in Japan&#39;s timeless traditions, cutting-edge research opportunities, and vibrant cultural experiences. Let us be your compass on this extraordinary journey, guiding you towards a future filled with boundless possibilities in the Land of the Rising Sun.</p>','<p>日本での留学は学問の境界を超えた没入の旅であり、学生に個人的および職業上の比類のない成長への入り口を提供します。 私たちのコンサルティングは、この変革的な経験を通じてお客様を導くことに専念しています。</p><p>日本語をマスターすることは、日本のダイナミックな環境で成功するための基礎です。 NAT、JLPT、JLCT、TOPJ準備コースを含む私たちの語学クラスは、学界やその他の分野で成功するために必要な言語能力を身につけます。</p><p>言語能力を超えて、日本の豊かな文化のタペストリーが探索を待っています。 活気に満ちた都市生活から穏やかな田園地帯まで、日本は学問を追求するための多様な背景を提供します。 私たちのコンサルタントは、ご希望の大学や専門学校への入学手続き、奨学金の確保、ビザの取得に関して個別のサポートを提供します。</p><p>日本の時代を超越した伝統、最先端の研究の機会、活気に満ちた文化体験に浸ってください。 私たちがこの素晴らしい旅の羅針盤となり、日出ずる国での無限の可能性に満ちた未来へとあなたを導きましょう。</p>','<p>Studying in Japan offers unparalleled academic excellence, cutting-edge research opportunities, and rich cultural immersion. Renowned for its prestigious universities and innovative programs, Japan provides students with a global perspective and the chance to engage in groundbreaking research projects. Mastering the Japanese language enhances career prospects, while experiencing traditional customs alongside modern pop culture enriches the student experience. With a reputation for safety, quality of life, and generous scholarship opportunities, Japan stands as an ideal destination for students seeking a transformative educational journey in a dynamic and welcoming environment.</p>','<p>日本への留学は、比類のない優れた学術、最先端の研究の機会、そして豊かな文化的没入を提供します。 名門大学と革新的なプログラムで知られる日本は、学生にグローバルな視点を与え、画期的な研究プロジェクトに従事する機会を提供します。 日本語をマスターすることでキャリアの可能性が高まり、現代のポップカルチャーとともに伝統的な習慣を体験することで学生の経験が豊かになります。 安全性、生活の質、そして寛大な奨学金の機会で定評のある日本は、ダイナミックで居心地の良い環境で変革的な教育の旅を求める学生にとって理想的な目的地となっています。</p>','Set up Appointment','予約を設定する','http://localhost:8000/japan/study','1711318093-hero.jpg','1711318093-Why_Study_in_japan.jpg','1711318093-Image_1.jpg','[{\"answer_en\": \"Costs for studying in Japan vary depending on factors like institution, location, and lifestyle, but generally range from $7,000 to $15,000 per year for tuition and living expenses. Additionally, scholarships and part-time work opportunities can help offset costs for international students.\", \"answer_jp\": \"日本留学にかかる費用は、教育機関、場所、ライフスタイルなどの要因によって異なりますが、授業料と生活費として年間7,000ドルから15,000ドルの範囲が一般的です。 さらに、奨学金やアルバイトの機会は、留学生の費用を補うのに役立ちます。\", \"question_en\": \"How much it will cost ?\", \"question_jp\": \"費用はいくらかかりますか?\"}, {\"answer_en\": \"Japan\'s educational system comprises three main stages: elementary, lower secondary, and upper secondary education. Elementary education is compulsory and lasts for six years, followed by three years of lower secondary education. Upper secondary education is not mandatory but highly encouraged, offering both academic and vocational tracks. Higher education includes universities, junior colleges, and technical colleges, with undergraduate programs typically lasting four years. Japan\'s education system emphasizes academic excellence, discipline, and holistic development, fostering a strong sense of responsibility and dedication among students. Additionally, the country is known for its innovative approach to teaching and learning, incorporating cutting-edge technology and research opportunities.\", \"answer_jp\": \"日本の教育制度は、初等教育、前期中等教育、後期中等教育の 3 つの主要な段階で構成されています。 初等教育は義務教育で 6 年間続き、その後 3 年間の前期中等教育が続きます。 後期中等教育は義務ではありませんが、学問と職業の両方のコースを提供しており、強く奨励されています。 高等教育には大学、短期大学、専門学校が含まれ、学部課程は通常 4 年間続きます。 日本の教育システムは、学力の優秀さ、規律、総合的な発達を重視し、生徒の強い責任感と献身的な姿勢を育みます。 さらに、この国は、最先端のテクノロジーと研究の機会を取り入れた、教育と学習に対する革新的なアプローチでも知られています。\", \"question_en\": \"what are the educational system in Japan ?\", \"question_jp\": \"日本の教育制度は何ですか？\"}, {\"answer_en\": \"Japan offers various scholarships for international students, including the Japanese Government (MEXT) Scholarship, JASSO Scholarship, and university-specific scholarships. These scholarships cover tuition fees, living expenses, and sometimes travel costs. Additionally, there are private scholarships from organizations and foundations, providing financial support to deserving students pursuing higher education in Japan.\", \"answer_jp\": \"日本では、日本政府（文部科学省）奨学金、日本学生支援機構奨学金、大学独自の奨学金など、留学生向けにさまざまな奨学金を提供しています。 これらの奨学金は、授業料、生活費、場合によっては旅費をカバーします。 さらに、日本で高等教育を受ける資格のある学生に経済的サポートを提供する、団体や財団による民間の奨学金もあります。\", \"question_en\": \"What are the scholorship in Japan ?\", \"question_jp\": \"日本の奨学金とは何ですか？\"}, {\"answer_en\": \"Japan offers diverse job opportunities for international students, particularly in fields such as technology, engineering, finance, hospitality, and education. The country\'s strong economy and aging population create demand for skilled professionals. Many multinational companies have a presence in Japan, providing avenues for career growth. Fluency in Japanese enhances job prospects, although some positions may be available in English. Additionally, part-time work opportunities are accessible for students, offering valuable experience and supplemental income. Japan\'s work culture emphasizes diligence, teamwork, and innovation, providing a rewarding environment for individuals seeking to launch or advance their careers.\", \"answer_jp\": \"日本は留学生に、特にテクノロジー、エンジニアリング、金融、ホスピタリティ、教育などの分野で多様な就職の機会を提供しています。 この国の好調な経済と高齢化により、熟練した専門家の需要が生じています。 多くの多国籍企業が日本に拠点を置き、キャリアアップの道を提供しています。 流暢な日本語があれば仕事の可能性が高まりますが、一部の職種では英語での求人も可能です。 さらに、学生はパートタイムで働く機会があり、貴重な経験と副収入が得られます。 日本の労働文化は勤勉さ、チームワーク、革新性を重視しており、キャリアのスタートやキャリアアップを目指す個人にとってやりがいのある環境を提供しています。\", \"question_en\": \"What are the job oppurtunites in Japan ?\", \"question_jp\": \"日本ではどんな仕事のチャンスがありますか？\"}, {\"answer_en\": \"Intake options in Japan typically follow a semester-based system, with two main intakes: April and September. The April intake aligns with the start of the academic year, while the September intake offers opportunities for mid-year admissions. Some universities may also have additional intake periods for specific programs or international students.\", \"answer_jp\": \"日本の入学オプションは通常、学期ベースのシステムに従い、主に 4 月と 9 月の 2 つの入学が行われます。 4月の入学は学年度の開始に合わせて行われますが、9月の入学は年度途中の入学の機会を提供します。 一部の大学では、特定のプログラムまたは留学生に対して追加の入学期間を設けている場合もあります。\", \"question_en\": \"What are the intake options in Japan?\", \"question_jp\": \"日本ではどのような摂取オプションがありますか?\"}]','2024-03-25 00:38:13','2024-03-25 00:39:02');
/*!40000 ALTER TABLE `study_in_japan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `study_in_japan_image`
--

DROP TABLE IF EXISTS `study_in_japan_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `study_in_japan_image` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `page_id` bigint unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `study_in_japan_image_page_id_foreign` (`page_id`),
  CONSTRAINT `study_in_japan_image_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `study_in_japan` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `study_in_japan_image`
--

LOCK TABLES `study_in_japan_image` WRITE;
/*!40000 ALTER TABLE `study_in_japan_image` DISABLE KEYS */;
INSERT INTO `study_in_japan_image` VALUES (3,1,'img-0-1711318142.webp','2024-03-25 00:39:02','2024-03-25 00:39:02'),(4,1,'img-1-1711318142.webp','2024-03-25 00:39:02','2024-03-25 00:39:02'),(5,1,'img-2-1711318142.webp','2024-03-25 00:39:02','2024-03-25 00:39:02'),(6,1,'img-3-1711318142.webp','2024-03-25 00:39:02','2024-03-25 00:39:02'),(7,1,'img-4-1711318142.webp','2024-03-25 00:39:02','2024-03-25 00:39:02'),(8,1,'img-5-1711318142.webp','2024-03-25 00:39:02','2024-03-25 00:39:02');
/*!40000 ALTER TABLE `study_in_japan_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_courses`
--

DROP TABLE IF EXISTS `sub_courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sub_courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `course_id` bigint unsigned NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_jp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sub_courses_course_id_foreign` (`course_id`),
  CONSTRAINT `sub_courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_courses`
--

LOCK TABLES `sub_courses` WRITE;
/*!40000 ALTER TABLE `sub_courses` DISABLE KEYS */;
INSERT INTO `sub_courses` VALUES (2,2,'JLPT','日本語能力試験','<p>Hayabusa Consultancy and Training Center, situated in the heart of Nepal, is a premier educational consultancy dedicated to offering top-notch language courses and study abroad programs for students seeking to explore the wonders of Japan. With a strong emphasis on linguistic proficiency and cultural impression, we strive to equip our students with the necessary skills and knowledge to thrive in a Japanese-speaking environment.&nbsp;</p>','<p>ハヤブサ コンサルティング アンド トレーニング センターは、ネパールの中心部に位置し、日本の素晴らしさを探求したい学生に一流の語学コースと留学プログラムを提供することに特化した一流の教育コンサルタント会社です。 言語能力と文化的印象に重点を置き、日本語を話す環境で成長するために必要なスキルと知識を学生に身につけるよう努めています。</p>','1711232969-documentation.png','2024-03-24 00:58:48','2024-03-24 00:59:29'),(3,2,'JFT','JFT','<p>Hayabusa Consultancy and Training Center, situated in the heart of Nepal, is a premier educational consultancy dedicated to offering top-notch language courses and study abroad programs for students seeking to explore the wonders of Japan. With a strong emphasis on linguistic proficiency and cultural impression, we strive to equip our students with the necessary skills and knowledge to thrive in a Japanese-speaking environment.</p>','<p>ハヤブサ コンサルティング アンド トレーニング センターは、ネパールの中心部に位置し、日本の素晴らしさを探求したい学生に一流の語学コースと留学プログラムを提供することに特化した一流の教育コンサルタント会社です。 言語能力と文化的印象に重点を置き、日本語を話す環境で成長するために必要なスキルと知識を学生に身につけるよう努めています。</p>','1711234486-main_image.png','2024-03-24 01:24:46','2024-03-24 01:24:46');
/*!40000 ALTER TABLE `sub_courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `teams` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` VALUES (1,'Umesh Dharel','ウメッシュ・ダレル','Director','監督','1711320895-CEO.png',1,'2024-03-25 01:24:55','2024-03-25 01:24:55'),(2,'Umesh Dharel','ウメッシュ・ダレル','CEO','最高経営責任者（CEO）','1711320934-CEO.png',2,'2024-03-25 01:25:34','2024-03-25 01:25:34'),(3,'Umesh Dharel','ウメッシュ・ダレル','Incharge','担当','1711320971-CEO.png',3,'2024-03-25 01:26:11','2024-03-25 01:26:11');
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline_jp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_jp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('client','student') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (1,'Emily Johnson','エミリー・ジョンソン','Courses at Hayabusa were incredibly informative, well-structured, and tailored to meet my specific needs.','ハヤブサのコースは非常に有益で、よく構成されており、私の特定のニーズを満たすように調整されていました。','<p>I cannot express how much I am grateful to Hayabusa Consultancy for their exceptional services in helping me to prepare for my journey to Japan.&nbsp;</p>','<p>日本への旅行の準備を手伝ってくれたハヤブサ・コンサルタンシーには、どれだけ感謝してもしきれないほどです。</p>','1711319773-testimonial_1.png','https://www.youtube.com/embed/k2bNbbvruak','student','2024-03-25 01:06:13','2024-03-25 01:06:13'),(2,'Yuri McPherson','ユーリ・マクファーソン','Hayabusa Consultancy has been a game-changer for me while I was studying in Japan.','ハヤブサ・コンサルタンシーは、日本留学中の私にとって大きな変化をもたらしてくれました。','<p>Their courses are not only educational but also highly engaging and interactive. The instructors were incredibly knowledgeable, patient and approachable, making the learning experience enjoyable. The office at Hayabysa consultancy has a ward and inviting atmosphere, and the staff members were professional and efficient.&nbsp;</p>','<p>彼らのコースは教育的なものであるだけでなく、非常に魅力的でインタラクティブなものでもあります。 インストラクターは信じられないほど知識が豊富で、忍耐強く、親しみやすく、学習体験を楽しいものにしてくれました。 ハヤビサコンサルティングのオフィスは病棟のような居心地の良い雰囲気があり、スタッフはプロフェッショナルで有能でした。</p>','1711320175-testimonial_2.png','https://www.youtube.com/embed/-H6W6JQQjik','student','2024-03-25 01:12:55','2024-03-25 01:12:55'),(3,'Aayush Pun','アーユシュ・パン','Courses at Hayabusa were incredibly informative, well-structured, and tailored to meet my specific needs.','ハヤブサのコースは非常に有益で、よく構成されており、私の特定のニーズを満たすように調整されていました。','<p>I cannot express how much I am grateful to Hayabusa Consultancy for their exceptional services in helping me to prepare for my journey to Japan.&nbsp;</p>','<p>日本への旅行の準備を手伝ってくれたハヤブサ・コンサルタンシーには、どれだけ感謝してもしきれないほどです。</p>','1711320284-testimonial_3.png','https://www.youtube.com/embed/-H6W6JQQjik','student','2024-03-25 01:14:44','2024-03-25 01:14:44'),(4,'Sherya Maharjan','シェリヤ・マハルジャン','Courses at Hayabusa were incredibly informative, well-structured, and tailored to meet my specific needs.','ハヤブサのコースは非常に有益で、よく構成されており、私の特定のニーズを満たすように調整されていました。','<p>I cannot express how much I am grateful to Hayabusa Consultancy for their exceptional services in helping me to prepare for my journey to Japan.&nbsp;</p>','<p>日本への旅行の準備を手伝ってくれたハヤブサ・コンサルタンシーには、どれだけ感謝してもしきれないほどです。</p>','1711320360-testimonial_4.png','https://www.youtube.com/embed/-H6W6JQQjik','student','2024-03-25 01:16:00','2024-03-25 01:16:00'),(5,'Emily Johnson (client)','エミリー・ジョンソン（クライアント）','Courses at Hayabusa were incredibly informative, well-structured, and tailored to meet my specific needs.','ハヤブサのコースは非常に有益で、よく構成されており、私の特定のニーズを満たすように調整されていました。','<p>I cannot express how much I am grateful to Hayabusa Consultancy for their exceptional services in helping me to prepare for my journey to Japan.&nbsp;</p>','<p>日本への旅行の準備を手伝ってくれたハヤブサ・コンサルタンシーには、どれだけ感謝してもしきれないほどです。</p>','1711320443-testimonial_1.png','https://www.youtube.com/embed/-H6W6JQQjik','client','2024-03-25 01:17:23','2024-03-25 01:17:23');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Super Admin','admin','admin@hayabusa.com',NULL,'$2y$10$Ao2EWyUG8Qu2YfruvjA7COJy.nuRt9fHYeR2btVMSjVcW.8DeOIdW',NULL,'2024-03-20 16:40:23','2024-03-20 16:40:23');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `work_in_japan`
--

DROP TABLE IF EXISTS `work_in_japan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `work_in_japan` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `main_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_title_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_description_en` text COLLATE utf8mb4_unicode_ci,
  `page_description_jp` text COLLATE utf8mb4_unicode_ci,
  `button_text_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text_jp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `questions` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `work_in_japan`
--

LOCK TABLES `work_in_japan` WRITE;
/*!40000 ALTER TABLE `work_in_japan` DISABLE KEYS */;
INSERT INTO `work_in_japan` VALUES (1,'Work In Japan','日本で働く','<p>Studying in Japan is an immersive odyssey that transcends academic boundaries, offering students a gateway to unparalleled personal and professional growth. Our consultancy is dedicated to guiding you through this transformative experience.</p><p>Mastering the Japanese language is fundamental to thriving in Japan&#39;s dynamic environment. Our language classes, including NAT, JLPT, JLCT, and TOPJ preparation courses, equip you with the linguistic prowess needed for academic success and beyond.</p><p>Beyond language proficiency, Japan&#39;s rich cultural tapestry awaits exploration. From vibrant city life to serene countryside, Japan offers a diverse backdrop for academic pursuits. Our consultancy provides personalized support in navigating admissions, securing scholarships, and obtaining visas for the university or vocational school of your choice.</p><p>Enjoy Japan&#39;s timeless traditions, cutting-edge research opportunities, and vibrant cultural experiences. Let us be your compass on this extraordinary journey, guiding you towards a future filled with boundless possibilities in the Land of the Rising Sun.</p>','<p>日本での留学は学問の境界を超えた没入の旅であり、学生に個人的および職業上の比類のない成長への入り口を提供します。 私たちのコンサルティングは、この変革的な経験を通じてお客様を導くことに専念しています。</p><p>日本語をマスターすることは、日本のダイナミックな環境で成功するための基礎です。 NAT、JLPT、JLCT、TOPJ準備コースを含む私たちの語学クラスは、学界やその他の分野で成功するために必要な言語能力を身につけます。</p><p>言語能力を超えて、日本の豊かな文化のタペストリーが探索を待っています。 活気に満ちた都市生活から穏やかな田園地帯まで、日本は学問を追求するための多様な背景を提供します。 私たちのコンサルタントは、ご希望の大学や専門学校への入学手続き、奨学金の確保、ビザの取得に関して個別のサポートを提供します。</p><p>日本の時代を超越した伝統、最先端の研究の機会、活気に満ちた文化体験に浸ってください。 私たちがこの素晴らしい旅の羅針盤となり、日出ずる国での無限の可能性に満ちた未来へとあなたを導きましょう。</p>','Set up appointment','予定を設定する','http://localhost:8000/japan/study','1711318529-hero.jpg','1711318529-image_1.jpg','[{\"answer_en\": \"To obtain a work visa in Japan, secure a job offer from a Japanese employer. The employer applies for a Certificate of Eligibility on your behalf. Once approved, submit the required documents to the Japanese embassy or consulate in your country to obtain a work visa.\", \"answer_jp\": \"日本で就労ビザを取得するには、日本の雇用主から仕事のオファーを獲得します。 雇用主があなたに代わって在留資格認定証明書を申請します。 承認されたら、あなたの国の日本大使館または領事館に必要書類を提出し、就労ビザを取得してください。\", \"question_en\": \"How can I get a work visa in Japan ?\", \"question_jp\": \"日本で就労ビザを取得するにはどうすればよいですか?\"}, {\"answer_en\": \"The time to obtain a work visa for Japan varies. Typically, the process can take several weeks to a few months, depending on factors such as the efficiency of application processing, completeness of documentation, and any additional requirements specific to your circumstances.\", \"answer_jp\": \"日本の就労ビザを取得するまでの期間は人によって異なります。 通常、申請処理の効率、文書の完全性、状況に特有の追加要件などの要因に応じて、このプロセスには数週間から数か月かかることがあります。\", \"question_en\": \"How long does it take to get a work in Japan?\", \"question_jp\": \"日本で仕事を得るまでどれくらいかかりますか?\"}, {\"answer_en\": \"While proficiency in Japanese significantly enhances job prospects in Japan, especially for roles involving daily communication, some international companies and industries offer positions in English. However, knowing Japanese opens more opportunities and facilitates integration into Japanese work culture and society.\", \"answer_jp\": \"日本語能力があれば、特に日常的なコミュニケーションを伴う職務において、日本での就職の可能性が大幅に高まりますが、一部の国際的な企業や業界では英語でのポジションを提供しています。 しかし、日本語を知っていれば、より多くの機会が開かれ、日本の労働文化や社会への統合が容易になります。\", \"question_en\": \"Do I need to speak Japanese to get a job?\", \"question_jp\": \"仕事を得るには日本語を話す必要がありますか?\"}, {\"answer_en\": \"An ALT (Assistant Language Teacher) is a foreigner hired to assist with English language instruction in Japanese schools. Requirements typically include a bachelor\'s degree, native or near-native English proficiency, and often a TEFL/TESOL certification. Some programs may require teaching experience or Japanese language proficiency, though it\'s not always mandatory. ALTs collaborate with Japanese teachers to plan lessons, lead activities, and create engaging English learning environments. Strong communication skills, cultural sensitivity, and a passion for education are essential qualities for success as an ALT in Japan.\", \"answer_jp\": \"ALT（外国語指導助手）とは、日本の学校で英語指導を補助するために雇用された外国人です。 通常、要件には学士号、ネイティブまたはネイティブに近い英語能力、および多くの場合 TEFL/TESOL 認定が含まれます。 一部のプログラムでは教師経験や日本語能力が求められる場合がありますが、必ずしも必須ではありません。 ALT は日本人教師と協力して授業を計画し、活動を主導し、魅力的な英語学習環境を作ります。 強いコミュニケーション能力、文化的感受性、教育への情熱は、日本でALTとして成功するために不可欠な資質です。\", \"question_en\": \"What is an ALT?  What are the requirements for being an ALT?\", \"question_jp\": \"ALTとは何ですか? ALTになるための要件は何ですか?\"}, {\"answer_en\": \"In Japan, international students can pursue various job opportunities, including roles in technology, engineering, finance, hospitality, education, and research. Many multinational companies offer positions for skilled professionals. Fluency in Japanese enhances job prospects, although some opportunities exist in English. Additionally, part-time work is accessible for students.\", \"answer_jp\": \"日本では、留学生はテクノロジー、エンジニアリング、金融、ホスピタリティ、教育、研究など、さまざまな職に就くことができます。 多くの多国籍企業が、熟練した専門家向けのポジションを提供しています。 日本語が流暢であれば仕事の可能性は高まりますが、英語でのチャンスもいくつかあります。 さらに、学生はアルバイトをすることができます。\", \"question_en\": \"What jobs can I do in Japan?\", \"question_jp\": \"日本ではどんな仕事ができるの？\"}]','2024-03-25 00:45:29','2024-03-25 00:45:29');
/*!40000 ALTER TABLE `work_in_japan` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-16 15:34:01
