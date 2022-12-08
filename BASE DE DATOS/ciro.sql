-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: ciro
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
-- Table structure for table `canales`
--

DROP TABLE IF EXISTS `canales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `canales` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `codigo_de_envio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_de_corte` date NOT NULL,
  `codigo_de_evento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_canal` bigint(20) unsigned NOT NULL,
  `tipo_envio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `canales_codigo_de_evento_unique` (`codigo_de_evento`),
  KEY `canales_id_canal_foreign` (`id_canal`),
  CONSTRAINT `canales_id_canal_foreign` FOREIGN KEY (`id_canal`) REFERENCES `lista4s` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `canales`
--

LOCK TABLES `canales` WRITE;
/*!40000 ALTER TABLE `canales` DISABLE KEYS */;
/*!40000 ALTER TABLE `canales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuenta__contables`
--

DROP TABLE IF EXISTS `cuenta__contables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cuenta__contables` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `codigo_de_envio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_de_corte` date NOT NULL,
  `codigo_de_evento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuenta_contable` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  `tipo_envio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cuenta__contables_codigo_de_evento_unique` (`codigo_de_evento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuenta__contables`
--

LOCK TABLES `cuenta__contables` WRITE;
/*!40000 ALTER TABLE `cuenta__contables` DISABLE KEYS */;
/*!40000 ALTER TABLE `cuenta__contables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos`
--

DROP TABLE IF EXISTS `eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `codigo_de_envio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_de_corte` date NOT NULL,
  `codigo_de_evento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tipo_de_entrada` bigint(20) unsigned NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_factor_de_riesgo` bigint(20) unsigned NOT NULL,
  `cargos` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `areas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_categoria` bigint(20) unsigned DEFAULT NULL,
  `perdida_valor_contable` double(8,2) DEFAULT NULL,
  `perdida_valor_mercado` double(8,2) DEFAULT NULL,
  `gastos` double(8,2) DEFAULT NULL,
  `monto_total` double(8,2) DEFAULT NULL,
  `monto_recuperado` double(8,2) DEFAULT NULL,
  `recuperacion_activo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relacion_riesgo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `evento_critico` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detalle_evento_critico` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monto_evento` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moneda` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_descubrimiento` date NOT NULL,
  `hora_descubrimiento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `hora_inicio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `hora_final` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elaborador` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `revisor` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aprobador` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_estado_evento` bigint(20) unsigned DEFAULT NULL,
  `detalle_estado_evento` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codigo_de_evento_relacionado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_envio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `eventos_codigo_de_evento_unique` (`codigo_de_evento`),
  KEY `eventos_id_tipo_de_entrada_foreign` (`id_tipo_de_entrada`),
  KEY `eventos_id_factor_de_riesgo_foreign` (`id_factor_de_riesgo`),
  KEY `eventos_id_categoria_foreign` (`id_categoria`),
  KEY `eventos_id_estado_evento_foreign` (`id_estado_evento`),
  CONSTRAINT `eventos_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `lista8s` (`id`) ON DELETE CASCADE,
  CONSTRAINT `eventos_id_estado_evento_foreign` FOREIGN KEY (`id_estado_evento`) REFERENCES `lista11s` (`id`) ON DELETE CASCADE,
  CONSTRAINT `eventos_id_factor_de_riesgo_foreign` FOREIGN KEY (`id_factor_de_riesgo`) REFERENCES `lista3s` (`id`) ON DELETE CASCADE,
  CONSTRAINT `eventos_id_tipo_de_entrada_foreign` FOREIGN KEY (`id_tipo_de_entrada`) REFERENCES `lista1s` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos`
--

LOCK TABLES `eventos` WRITE;
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
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
-- Table structure for table `linea__de__negocios`
--

DROP TABLE IF EXISTS `linea__de__negocios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `linea__de__negocios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `codigo_de_envio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_de_corte` date NOT NULL,
  `codigo_de_evento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_linea_negocio` bigint(20) unsigned NOT NULL,
  `linea_nivel3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_envio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `linea__de__negocios_codigo_de_evento_unique` (`codigo_de_evento`),
  KEY `linea__de__negocios_id_linea_negocio_foreign` (`id_linea_negocio`),
  CONSTRAINT `linea__de__negocios_id_linea_negocio_foreign` FOREIGN KEY (`id_linea_negocio`) REFERENCES `lista10s` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `linea__de__negocios`
--

LOCK TABLES `linea__de__negocios` WRITE;
/*!40000 ALTER TABLE `linea__de__negocios` DISABLE KEYS */;
/*!40000 ALTER TABLE `linea__de__negocios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lista10s`
--

DROP TABLE IF EXISTS `lista10s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lista10s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_entidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linea_negocio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lista10s_cod_unique` (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lista10s`
--

LOCK TABLES `lista10s` WRITE;
/*!40000 ALTER TABLE `lista10s` DISABLE KEYS */;
INSERT INTO `lista10s` VALUES (1,'11','Ent de Intermediación Fin','Finanzas corporativas','Finanzas de Administraciones locales / públicas','2022-04-11 07:46:59','2022-04-11 07:46:59'),(2,'12','Ent de Intermediación Fin','Finanzas corporativas','B1 de inversión','2022-04-11 07:46:59','2022-04-11 07:46:59'),(3,'13','Ent de Intermediación Fin','Finanzas corporativas','Servicios de asesoramiento','2022-04-11 07:46:59','2022-04-11 07:46:59'),(4,'21','Ent de Intermediación Fin','Negociación y ventas','Ventas','2022-04-11 07:47:00','2022-04-11 07:47:00'),(5,'22','Ent de Intermediación Fin','Negociación y ventas','Creación de Mercado','2022-04-11 07:47:00','2022-04-11 07:47:00'),(6,'23','Ent de Intermediación Fin','Negociación y ventas','Posiciones propias','2022-04-11 07:47:00','2022-04-11 07:47:00'),(7,'24','Ent de Intermediación Fin','Negociación y ventas','Tesorería','2022-04-11 07:47:00','2022-04-11 07:47:00'),(8,'31','Ent de Intermediación Fin','B1 minorista','B1 minorista','2022-04-11 07:47:00','2022-04-11 07:47:00'),(9,'32','Ent de Intermediación Fin','B1 minorista','B1 privada','2022-04-11 07:47:00','2022-04-11 07:47:00'),(10,'33','Ent de Intermediación Fin','B1 minorista','Servicios de tarjetas','2022-04-11 07:47:00','2022-04-11 07:47:00'),(11,'41','Ent de Intermediación Fin','B1 comercial','B1 comercial','2022-04-11 07:47:00','2022-04-11 07:47:00'),(12,'51','Ent de Intermediación Fin','Pago y liquidación','Clientes externos','2022-04-11 07:47:00','2022-04-11 07:47:00'),(13,'61','Ent de Intermediación Fin','Servicios de agencia','Custodia','2022-04-11 07:47:00','2022-04-11 07:47:00'),(14,'62','Ent de Intermediación Fin','Servicios de agencia','Agencia para empresas','2022-04-11 07:47:00','2022-04-11 07:47:00'),(15,'63','Ent de Intermediación Fin','Servicios de agencia','Fideicomisos de empresas','2022-04-11 07:47:00','2022-04-11 07:47:00'),(16,'71','Ent de Intermediación Fin','Administración de activos','Administración discrecional de fondos','2022-04-11 07:47:00','2022-04-11 07:47:00'),(17,'72','Ent de Intermediación Fin','Administración de activos','Administración no discrecional de fondos','2022-04-11 07:47:00','2022-04-11 07:47:00'),(18,'81','Ent de Intermediación Fin','Intermediación minorista','Intermediación minorista','2022-04-11 07:47:00','2022-04-11 07:47:00'),(19,'91','Ent de Servicios Fin Complementarios','Entidad de Servicios Financieros Complementarios','Servicios de pago','2022-04-11 07:47:00','2022-04-11 07:47:00'),(20,'92','Ent de Servicios Fin Complementarios','Entidad de Servicios Financieros Complementarios','Entidades de Intermediación Financiera','2022-04-11 07:47:01','2022-04-11 07:47:01'),(21,'93','Ent de Servicios Fin Complementarios','Entidad de Servicios Financieros Complementarios','Clientes externos','2022-04-11 07:47:01','2022-04-11 07:47:01'),(22,'99','Otros','No existe pérdida monetaria o línea de negocio asociada al evento','','2022-04-11 07:47:01','2022-04-11 07:47:01');
/*!40000 ALTER TABLE `lista10s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lista11s`
--

DROP TABLE IF EXISTS `lista11s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lista11s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lista11s_cod_unique` (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lista11s`
--

LOCK TABLES `lista11s` WRITE;
/*!40000 ALTER TABLE `lista11s` DISABLE KEYS */;
INSERT INTO `lista11s` VALUES (1,'1','Investigación','2022-04-11 07:47:01','2022-04-11 07:47:01'),(2,'2','Seguimiento','2022-04-11 07:47:01','2022-04-11 07:47:01'),(3,'3','Solución','2022-04-11 07:47:01','2022-04-11 07:47:01');
/*!40000 ALTER TABLE `lista11s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lista1s`
--

DROP TABLE IF EXISTS `lista1s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lista1s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_entidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtipo_entidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lista1s_cod_unique` (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lista1s`
--

LOCK TABLES `lista1s` WRITE;
/*!40000 ALTER TABLE `lista1s` DISABLE KEYS */;
INSERT INTO `lista1s` VALUES (1,'101','Entradas principales','Entrada principal B1','2022-04-11 07:46:41','2022-04-11 07:46:41'),(2,'102','Entradas principales','Entrada principal B2','2022-04-11 07:46:44','2022-04-11 07:46:44'),(3,'201','Entradas medias','Entrada media B1','2022-04-11 07:46:44','2022-04-11 07:46:44'),(4,'202','Entradas medias','Entrada media B2','2022-04-11 07:46:45','2022-04-11 07:46:45'),(5,'203','Entradas medias','Entrada media B3','2022-04-11 07:46:45','2022-04-11 07:46:45'),(6,'204','Entradas medias','Entrada media B4','2022-04-11 07:46:45','2022-04-11 07:46:45'),(7,'205','Entradas medias','Entrada media B5','2022-04-11 07:46:45','2022-04-11 07:46:45'),(8,'301','Entradas inusuales','Entrada inusual B1','2022-04-11 07:46:45','2022-04-11 07:46:45'),(9,'302','Entradas inusuales','Entrada inusual B2','2022-04-11 07:46:45','2022-04-11 07:46:45'),(10,'303','Entradas inusuales','Entrada inusual B3','2022-04-11 07:46:45','2022-04-11 07:46:45'),(11,'304','Entradas inusuales','Entrada inusual B4','2022-04-11 07:46:45','2022-04-11 07:46:45'),(12,'305','Entradas inusuales','Entrada inusual B5','2022-04-11 07:46:45','2022-04-11 07:46:45'),(13,'306','Entradas inusuales','Entrada inusual B6','2022-04-11 07:46:45','2022-04-11 07:46:45'),(14,'307','Entradas inusuales','Entrada inusual B7','2022-04-11 07:46:45','2022-04-11 07:46:45');
/*!40000 ALTER TABLE `lista1s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lista2s`
--

DROP TABLE IF EXISTS `lista2s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lista2s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_evento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtipo_evento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clase_evento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lista2s_cod_unique` (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lista2s`
--

LOCK TABLES `lista2s` WRITE;
/*!40000 ALTER TABLE `lista2s` DISABLE KEYS */;
INSERT INTO `lista2s` VALUES (1,'1a01','Fraude interno','Actividades no autorizadas','Operaciones no reveladas (intencionalmente)','2022-04-11 07:46:45','2022-04-11 07:46:45'),(2,'1a02','Fraude interno','Actividades no autorizadas','Operaciones no autorizadas (con pérdidas pecuniarias)','2022-04-11 07:46:45','2022-04-11 07:46:45'),(3,'1a03','Fraude interno','Actividades no autorizadas','Valoración errónea de posiciones (intencional)','2022-04-11 07:46:45','2022-04-11 07:46:45'),(4,'1a99','Fraude interno','Actividades no autorizadas','Otros','2022-04-11 07:46:45','2022-04-11 07:46:45'),(5,'1b01','Fraude interno','Hurto y fraude','Fraude / fraude crediticio/ depósitos sin valor','2022-04-11 07:46:46','2022-04-11 07:46:46'),(6,'1b02','Fraude interno','Hurto y fraude','Hurto / extorsión / malversación / robo','2022-04-11 07:46:46','2022-04-11 07:46:46'),(7,'1b03','Fraude interno','Hurto y fraude','Apropiación indebida de activos','2022-04-11 07:46:46','2022-04-11 07:46:46'),(8,'1b04','Fraude interno','Hurto y fraude','Destrucción dolosa de activos','2022-04-11 07:46:46','2022-04-11 07:46:46'),(9,'1b05','Fraude interno','Hurto y fraude','Falsificación','2022-04-11 07:46:46','2022-04-11 07:46:46'),(10,'1b06','Fraude interno','Hurto y fraude','Utilización de cheques sin fondos','2022-04-11 07:46:46','2022-04-11 07:46:46'),(11,'1b07','Fraude interno','Hurto y fraude','Contrabando','2022-04-11 07:46:46','2022-04-11 07:46:46'),(12,'1b08','Fraude interno','Hurto y fraude','Apropiación de cuentas, de identidad, etc.','2022-04-11 07:46:46','2022-04-11 07:46:46'),(13,'1b09','Fraude interno','Hurto y fraude','Incumplimiento / evasión de impuestos (intencional)','2022-04-11 07:46:46','2022-04-11 07:46:46'),(14,'1b10','Fraude interno','Hurto y fraude','Soborno / cohecho','2022-04-11 07:46:46','2022-04-11 07:46:46'),(15,'1b11','Fraude interno','Hurto y fraude','Abuso de información privilegiada (no a favor de la empresa)','2022-04-11 07:46:46','2022-04-11 07:46:46'),(16,'1b99','Fraude interno','Hurto y fraude','Otros','2022-04-11 07:46:46','2022-04-11 07:46:46'),(17,'2a01','Fraude externo','Hurto y fraude','Hurto/robo','2022-04-11 07:46:46','2022-04-11 07:46:46'),(18,'2a02','Fraude externo','Hurto y fraude','Falsificación','2022-04-11 07:46:46','2022-04-11 07:46:46'),(19,'2a03','Fraude externo','Hurto y fraude','Utilización de cheques sin fondos','2022-04-11 07:46:46','2022-04-11 07:46:46'),(20,'2a04','Fraude externo','Hurto y fraude','Suplantación de identidad','2022-04-11 07:46:46','2022-04-11 07:46:46'),(21,'2a99','Fraude externo','Hurto y fraude','Otros','2022-04-11 07:46:47','2022-04-11 07:46:47'),(22,'2b01','Fraude externo','Seguridad de los sistemas','Daños por ataques informáticos','2022-04-11 07:46:47','2022-04-11 07:46:47'),(23,'2b02','Fraude externo','Seguridad de los sistemas','Robo de información (con pérdidas pecuniarias)','2022-04-11 07:46:47','2022-04-11 07:46:47'),(24,'2b99','Fraude externo','Seguridad de los sistemas','Otros','2022-04-11 07:46:47','2022-04-11 07:46:47'),(25,'3a01','Relaciones laborales y seguridad en el puesto de trabajo','Relaciones laborales','Cuestiones relativas a remuneración','2022-04-11 07:46:47','2022-04-11 07:46:47'),(26,'3a02','Relaciones laborales y seguridad en el puesto de trabajo','Relaciones laborales','Cuestiones relativas a prestaciones sociales','2022-04-11 07:46:47','2022-04-11 07:46:47'),(27,'3a03','Relaciones laborales y seguridad en el puesto de trabajo','Relaciones laborales','Cuestiones relativas a extinción de contratos','2022-04-11 07:46:47','2022-04-11 07:46:47'),(28,'3a04','Relaciones laborales y seguridad en el puesto de trabajo','Relaciones laborales','Organización laboral','2022-04-11 07:46:47','2022-04-11 07:46:47'),(29,'3a99','Relaciones laborales y seguridad en el puesto de trabajo','Relaciones laborales','Otros','2022-04-11 07:46:47','2022-04-11 07:46:47'),(30,'3b01','Relaciones laborales y seguridad en el puesto de trabajo (cont.)','Higiene y seguridad en el trabajo','Responsabilidad en general (resbalones, etc.)','2022-04-11 07:46:47','2022-04-11 07:46:47'),(31,'3b02','Relaciones laborales y seguridad en el puesto de trabajo (cont.)','Higiene y seguridad en el trabajo','Casos relacionados con las normas de higiene y seguridad en el trabajo','2022-04-11 07:46:47','2022-04-11 07:46:47'),(32,'3b03','Relaciones laborales y seguridad en el puesto de trabajo (cont.)','Higiene y seguridad en el trabajo','Indemnización a los trabajadores','2022-04-11 07:46:47','2022-04-11 07:46:47'),(33,'3b99','Relaciones laborales y seguridad en el puesto de trabajo (cont.)','Higiene y seguridad en el trabajo','Otros','2022-04-11 07:46:47','2022-04-11 07:46:47'),(34,'3c01','Relaciones laborales y seguridad en el puesto de trabajo (cont.)','Diversidad y discriminación','Todo tipo de discriminación','2022-04-11 07:46:47','2022-04-11 07:46:47'),(35,'3c99','Relaciones laborales y seguridad en el puesto de trabajo (cont.)','Diversidad y discriminación','Otros','2022-04-11 07:46:47','2022-04-11 07:46:47'),(36,'4a01','Clientes, productos y prácticas empresariales','Adecuación, divulgación de información y confianza','Abusos de confianza / incumplimiento de pautas','2022-04-11 07:46:47','2022-04-11 07:46:47'),(37,'4a02','Clientes, productos y prácticas empresariales','Adecuación, divulgación de información y confianza','Aspectos de adecuación / divulgación de información (know your customer KYC, etc.)','2022-04-11 07:46:48','2022-04-11 07:46:48'),(38,'4a03','Clientes, productos y prácticas empresariales','Adecuación, divulgación de información y confianza','Quebrantamiento de la privacidad de información sobre clientes minoristas','2022-04-11 07:46:48','2022-04-11 07:46:48'),(39,'4a04','Clientes, productos y prácticas empresariales','Adecuación, divulgación de información y confianza','Quebrantamiento de privacidad','2022-04-11 07:46:48','2022-04-11 07:46:48'),(40,'4a05','Clientes, productos y prácticas empresariales','Adecuación, divulgación de información y confianza','Ventas agresivas','2022-04-11 07:46:48','2022-04-11 07:46:48'),(41,'4a06','Clientes, productos y prácticas empresariales','Adecuación, divulgación de información y confianza','Confusión de cuentas','2022-04-11 07:46:48','2022-04-11 07:46:48'),(42,'4a07','Clientes, productos y prácticas empresariales','Adecuación, divulgación de información y confianza','Abuso de información confidencial','2022-04-11 07:46:48','2022-04-11 07:46:48'),(43,'4a08','Clientes, productos y prácticas empresariales','Adecuación, divulgación de información y confianza','Responsabilidad del prestamista','2022-04-11 07:46:48','2022-04-11 07:46:48'),(44,'4a99','Clientes, productos y prácticas empresariales','Adecuación, divulgación de información y confianza','Otros','2022-04-11 07:46:48','2022-04-11 07:46:48'),(45,'4b01','Clientes, productos y prácticas empresariales','Prácticas empresariales o de mercado improcedentes','Prácticas restrictivas de la competencia','2022-04-11 07:46:48','2022-04-11 07:46:48'),(46,'4b02','Clientes, productos y prácticas empresariales','Prácticas empresariales o de mercado improcedentes','Prácticas comerciales / de mercado improcedentes','2022-04-11 07:46:48','2022-04-11 07:46:48'),(47,'4b03','Clientes, productos y prácticas empresariales','Prácticas empresariales o de mercado improcedentes','Manipulación del mercado','2022-04-11 07:46:48','2022-04-11 07:46:48'),(48,'4b04','Clientes, productos y prácticas empresariales','Prácticas empresariales o de mercado improcedentes','Abuso de información privilegiada (en favor de la empresa)','2022-04-11 07:46:48','2022-04-11 07:46:48'),(49,'4b05','Clientes, productos y prácticas empresariales','Prácticas empresariales o de mercado improcedentes','Actividades no autorizadas.','2022-04-11 07:46:48','2022-04-11 07:46:48'),(50,'4b06','Clientes, productos y prácticas empresariales','Prácticas empresariales o de mercado improcedentes','Blanqueo de dinero','2022-04-11 07:46:48','2022-04-11 07:46:48'),(51,'4b99','Clientes, productos y prácticas empresariales','Prácticas empresariales o de mercado improcedentes','Otros','2022-04-11 07:46:48','2022-04-11 07:46:48'),(52,'4c01','Clientes, productos y prácticas empresariales','Productos defectuosos','Defectos del producto (no autorizado, etc.)','2022-04-11 07:46:48','2022-04-11 07:46:48'),(53,'4c02','Clientes, productos y prácticas empresariales','Productos defectuosos','Error de los modelos','2022-04-11 07:46:48','2022-04-11 07:46:48'),(54,'4c99','Clientes, productos y prácticas empresariales','Productos defectuosos','Otros','2022-04-11 07:46:49','2022-04-11 07:46:49'),(55,'4d01','Clientes, productos y prácticas empresariales','Selección, patrocinio y riesgos','Ausencia de investigación a clientes conforme a las directrices','2022-04-11 07:46:49','2022-04-11 07:46:49'),(56,'4d02','Clientes, productos y prácticas empresariales','Selección, patrocinio y riesgos','Superación de los límites de riesgo frente a clientes','2022-04-11 07:46:49','2022-04-11 07:46:49'),(57,'4d99','Clientes, productos y prácticas empresariales','Selección, patrocinio y riesgos','Otros','2022-04-11 07:46:49','2022-04-11 07:46:49'),(58,'4e01','Clientes, productos y prácticas empresariales','Actividades de asesoramiento','Litigios sobre resultados de las actividades de asesoramiento','2022-04-11 07:46:49','2022-04-11 07:46:49'),(59,'4e99','Clientes, productos y prácticas empresariales','Actividades de asesoramiento','Otros','2022-04-11 07:46:49','2022-04-11 07:46:49'),(60,'5a01','Daños a activos materiales','Desastres y otros acontecimientos','Pérdidas por desastres naturales','2022-04-11 07:46:49','2022-04-11 07:46:49'),(61,'5a02','Daños a activos materiales','Desastres y otros acontecimientos','Pérdidas humanas por causas externas (terrorismo, vandalismo)','2022-04-11 07:46:49','2022-04-11 07:46:49'),(62,'5a99','Daños a activos materiales','Desastres y otros acontecimientos','Otros','2022-04-11 07:46:49','2022-04-11 07:46:49'),(63,'6a01','Incidencias en el negocio y fallos en los sistemas','Sistemas','Hardware','2022-04-11 07:46:49','2022-04-11 07:46:49'),(64,'6a02','Incidencias en el negocio y fallos en los sistemas','Sistemas','Software','2022-04-11 07:46:49','2022-04-11 07:46:49'),(65,'6a03','Incidencias en el negocio y fallos en los sistemas','Sistemas','Telecomunicaciones','2022-04-11 07:46:49','2022-04-11 07:46:49'),(66,'6a04','Incidencias en el negocio y fallos en los sistemas','Sistemas','Interrupción / incidencias en el suministro','2022-04-11 07:46:49','2022-04-11 07:46:49'),(67,'6a99','Incidencias en el negocio y fallos en los sistemas','Sistemas','Otros','2022-04-11 07:46:49','2022-04-11 07:46:49'),(68,'7a01','Ejecución, entrega y gestión de procesos','Recepción, ejecución y mantenimiento de operaciones','Comunicación defectuosa','2022-04-11 07:46:49','2022-04-11 07:46:49'),(69,'7a02','Ejecución, entrega y gestión de procesos','Recepción, ejecución y mantenimiento de operaciones','Errores de introducción de datos, mantenimiento o descarga','2022-04-11 07:46:50','2022-04-11 07:46:50'),(70,'7a03','Ejecución, entrega y gestión de procesos','Recepción, ejecución y mantenimiento de operaciones','Incumplimiento de plazos o de responsabilidades','2022-04-11 07:46:50','2022-04-11 07:46:50'),(71,'7a04','Ejecución, entrega y gestión de procesos','Recepción, ejecución y mantenimiento de operaciones','Ejecución errónea de modelos / sistemas','2022-04-11 07:46:50','2022-04-11 07:46:50'),(72,'7a05','Ejecución, entrega y gestión de procesos','Recepción, ejecución y mantenimiento de operaciones','Error contable / atribución a entidades erróneas','2022-04-11 07:46:50','2022-04-11 07:46:50'),(73,'7a06','Ejecución, entrega y gestión de procesos','Recepción, ejecución y mantenimiento de operaciones','Errores en otras tareas','2022-04-11 07:46:50','2022-04-11 07:46:50'),(74,'7a07','Ejecución, entrega y gestión de procesos','Recepción, ejecución y mantenimiento de operaciones','Fallo en la entrega','2022-04-11 07:46:50','2022-04-11 07:46:50'),(75,'7a08','Ejecución, entrega y gestión de procesos','Recepción, ejecución y mantenimiento de operaciones','Fallo en la gestión del colateral','2022-04-11 07:46:50','2022-04-11 07:46:50'),(76,'7a09','Ejecución, entrega y gestión de procesos','Recepción, ejecución y mantenimiento de operaciones','Mantenimiento de datos de referencia','2022-04-11 07:46:50','2022-04-11 07:46:50'),(77,'7a99','Ejecución, entrega y gestión de procesos','Recepción, ejecución y mantenimiento de operaciones','Otros','2022-04-11 07:46:50','2022-04-11 07:46:50'),(78,'7b01','Ejecución, entrega y gestión de procesos (cont.)','Seguimiento y presentación de informes','Incumplimiento de la obligación de informar','2022-04-11 07:46:50','2022-04-11 07:46:50'),(79,'7b02','Ejecución, entrega y gestión de procesos (cont.)','Seguimiento y presentación de informes','Inexactitud de informes externos (con generación de pérdidas)','2022-04-11 07:46:50','2022-04-11 07:46:50'),(80,'7b99','Ejecución, entrega y gestión de procesos (cont.)','Seguimiento y presentación de informes','Otros','2022-04-11 07:46:50','2022-04-11 07:46:50'),(81,'7c01','Ejecución, entrega y gestión de procesos (cont.)','Aceptación de clientes y documentación','Inexistencia de autorizaciones / rechazos de clientes','2022-04-11 07:46:51','2022-04-11 07:46:51'),(82,'7c02','Ejecución, entrega y gestión de procesos (cont.)','Aceptación de clientes y documentación','Documentos jurídicos inexistentes / incompletos','2022-04-11 07:46:51','2022-04-11 07:46:51'),(83,'7c99','Ejecución, entrega y gestión de procesos (cont.)','Aceptación de clientes y documentación','Otros','2022-04-11 07:46:51','2022-04-11 07:46:51'),(84,'7d01','Ejecución, entrega y gestión de procesos (cont.)','Gestión de cuentas de clientes','Acceso no autorizado a cuentas','2022-04-11 07:46:51','2022-04-11 07:46:51'),(85,'7d02','Ejecución, entrega y gestión de procesos (cont.)','Gestión de cuentas de clientes','Registros incorrectos de clientes (con generación de pérdidas)','2022-04-11 07:46:51','2022-04-11 07:46:51'),(86,'7d03','Ejecución, entrega y gestión de procesos (cont.)','Gestión de cuentas de clientes','Pérdida o daño de activos de clientes por negligencia','2022-04-11 07:46:51','2022-04-11 07:46:51'),(87,'7d99','Ejecución, entrega y gestión de procesos (cont.)','Gestión de cuentas de clientes','Otros','2022-04-11 07:46:51','2022-04-11 07:46:51'),(88,'7e01','Ejecución, entrega y gestión de procesos (cont.)','Contrapartes comerciales','Fallos de contrapartes distintas de clientes','2022-04-11 07:46:51','2022-04-11 07:46:51'),(89,'7e02','Ejecución, entrega y gestión de procesos (cont.)','Contrapartes comerciales','Otros litigios con contrapartes distintas de clientes','2022-04-11 07:46:51','2022-04-11 07:46:51'),(90,'7e99','Ejecución, entrega y gestión de procesos (cont.)','Contrapartes comerciales','Otros','2022-04-11 07:46:51','2022-04-11 07:46:51'),(91,'7f01','Ejecución, entrega y gestión de procesos (cont.)','Distribuidores y proveedores','Subcontratación','2022-04-11 07:46:51','2022-04-11 07:46:51'),(92,'7f02','Ejecución, entrega y gestión de procesos (cont.)','Distribuidores y proveedores','Litigios con distribuidores','2022-04-11 07:46:51','2022-04-11 07:46:51'),(93,'7f99','Ejecución, entrega y gestión de procesos (cont.)','Distribuidores y proveedores','Otros','2022-04-11 07:46:51','2022-04-11 07:46:51');
/*!40000 ALTER TABLE `lista2s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lista3s`
--

DROP TABLE IF EXISTS `lista3s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lista3s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lista3s_cod_unique` (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lista3s`
--

LOCK TABLES `lista3s` WRITE;
/*!40000 ALTER TABLE `lista3s` DISABLE KEYS */;
INSERT INTO `lista3s` VALUES (1,'1','Procesos','2022-04-11 07:46:51','2022-04-11 07:46:51'),(2,'2','Personas','2022-04-11 07:46:51','2022-04-11 07:46:51'),(3,'3','Tecnología de información','2022-04-11 07:46:51','2022-04-11 07:46:51'),(4,'4','Eventos externos','2022-04-11 07:46:52','2022-04-11 07:46:52'),(5,'5','Infraestructura','2022-04-11 07:46:52','2022-04-11 07:46:52');
/*!40000 ALTER TABLE `lista3s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lista4s`
--

DROP TABLE IF EXISTS `lista4s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lista4s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `canal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lista4s_cod_unique` (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lista4s`
--

LOCK TABLES `lista4s` WRITE;
/*!40000 ALTER TABLE `lista4s` DISABLE KEYS */;
INSERT INTO `lista4s` VALUES (1,'101','Terminales de punto de venta-POS','2022-04-11 07:46:52','2022-04-11 07:46:52'),(2,'102','Red de comunicación internet','2022-04-11 07:46:52','2022-04-11 07:46:52'),(3,'103','Red de comunicación telefonía fija','2022-04-11 07:46:52','2022-04-11 07:46:52'),(4,'104','Red de comunicación telefonía móvil (Banca por celular)','2022-04-11 07:46:52','2022-04-11 07:46:52'),(5,'105','Billetera móvil','2022-04-11 07:46:52','2022-04-11 07:46:52'),(6,'106','Agencia Fija','2022-04-11 07:46:52','2022-04-11 07:46:52'),(7,'107','Agencia Móvil','2022-04-11 07:46:52','2022-04-11 07:46:52'),(8,'108','Cajero Automático Especial Externo - Con Recinto','2022-04-11 07:46:52','2022-04-11 07:46:52'),(9,'109','Cajero Automático Especial Externo - Sin Recinto','2022-04-11 07:46:52','2022-04-11 07:46:52'),(10,'110','Cajero Automático Especial Interno','2022-04-11 07:46:52','2022-04-11 07:46:52'),(11,'111','Cajero Automático Externo - Con Recinto','2022-04-11 07:46:52','2022-04-11 07:46:52'),(12,'112','Cajero Automático Externo - Sin Recinto','2022-04-11 07:46:52','2022-04-11 07:46:52'),(13,'113','Cajero Automático Interno','2022-04-11 07:46:52','2022-04-11 07:46:52'),(14,'114','Cajero Automático para Personas con Discapacidad Externo - Con Recinto ','2022-04-11 07:46:52','2022-04-11 07:46:52'),(15,'115','Cajero Automático para Personas con Discapacidad Interno','2022-04-11 07:46:52','2022-04-11 07:46:52'),(16,'201','Local Compartido','2022-04-11 07:46:52','2022-04-11 07:46:52'),(17,'202','Oficina Central','2022-04-11 07:46:53','2022-04-11 07:46:53'),(18,'203','Oficina de Corresponsalía','2022-04-11 07:46:53','2022-04-11 07:46:53'),(19,'204','Oficina Externa','2022-04-11 07:46:53','2022-04-11 07:46:53'),(20,'205','Oficina Ferial','2022-04-11 07:46:53','2022-04-11 07:46:53'),(21,'206','Punto de Atención Corresponsal Fin.','2022-04-11 07:46:53','2022-04-11 07:46:53'),(22,'207','Punto de Atención Corresponsal No Fin.','2022-04-11 07:46:53','2022-04-11 07:46:53'),(23,'208','Punto de Distribución','2022-04-11 07:46:53','2022-04-11 07:46:53'),(24,'209','Punto Promocional Fijo','2022-04-11 07:46:53','2022-04-11 07:46:53'),(25,'210','Sucursal','2022-04-11 07:46:53','2022-04-11 07:46:53'),(26,'211','Ventanilla','2022-04-11 07:46:53','2022-04-11 07:46:53'),(27,'999','Otros canales no contemplados en la lista','2022-04-11 07:46:53','2022-04-11 07:46:53');
/*!40000 ALTER TABLE `lista4s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lista5s`
--

DROP TABLE IF EXISTS `lista5s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lista5s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proceso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subproceso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lista5s_cod_unique` (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lista5s`
--

LOCK TABLES `lista5s` WRITE;
/*!40000 ALTER TABLE `lista5s` DISABLE KEYS */;
INSERT INTO `lista5s` VALUES (1,'01','Negocio','Asumir      y      mantener      Clientes/Usuarios, Contrapartes y Relaciones de Comercio. ','2022-04-11 07:46:53','2022-04-11 07:46:53'),(2,'02','Negocio','Captura y Documentación de Operaciones.  ','2022-04-11 07:46:53','2022-04-11 07:46:53'),(3,'03','Negocio','Desarrollo, Diseño, y    Mantenimiento    de Productos y Servicios. ','2022-04-11 07:46:53','2022-04-11 07:46:53'),(4,'04','Negocio','Entrega productos y servicios.  ','2022-04-11 07:46:53','2022-04-11 07:46:53'),(5,'05','Negocio','Mercado de Productos y Servicios.  ','2022-04-11 07:46:53','2022-04-11 07:46:53'),(6,'06','Negocio','Operaciones Contables.  ','2022-04-11 07:46:53','2022-04-11 07:46:53'),(7,'07','Negocio','Vender o alcanzar acuerdos para Conductas Específicas en los Negocios ','2022-04-11 07:46:53','2022-04-11 07:46:53'),(8,'09','Negocio','Otros Procesos de Negocio.  ','2022-04-11 07:46:54','2022-04-11 07:46:54'),(9,'10','Corporativos','Administración de Información Tecnológica.  ','2022-04-11 07:46:54','2022-04-11 07:46:54'),(10,'11','Corporativos','Administración de los Bienes e Instalaciones Físicas. ','2022-04-11 07:46:54','2022-04-11 07:46:54'),(11,'12','Corporativos','Administración de Recursos Humanos.  ','2022-04-11 07:46:54','2022-04-11 07:46:54'),(12,'13','Corporativos','Administración de Sistemas de Riesgo.  ','2022-04-11 07:46:54','2022-04-11 07:46:54'),(13,'14','Corporativos','Gestión de Capital, Fondos y Liquidez.  ','2022-04-11 07:46:54','2022-04-11 07:46:54'),(14,'15','Corporativos','Gestión     de     Proveedores     y     Servicios Terciarizados. ','2022-04-11 07:46:54','2022-04-11 07:46:54'),(15,'16','Corporativos','Gestionar el cumplimiento,  Legal,  Gobierno Corporativo y Auditoría. ','2022-04-11 07:46:54','2022-04-11 07:46:54'),(16,'17','Corporativos','Reporte de Gestión Financiera y Tributación.  ','2022-04-11 07:46:54','2022-04-11 07:46:54'),(17,'19','Corporativos','Otros procesos corporativos.  ','2022-04-11 07:46:54','2022-04-11 07:46:54'),(18,'99','Otros','Procesos no Relacionados/Situaciones en las que   no   está   implicando   ningún   proceso específico. ','2022-04-11 07:46:54','2022-04-11 07:46:54');
/*!40000 ALTER TABLE `lista5s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lista6s`
--

DROP TABLE IF EXISTS `lista6s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lista6s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_entidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operacion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lista6s_cod_unique` (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lista6s`
--

LOCK TABLES `lista6s` WRITE;
/*!40000 ALTER TABLE `lista6s` DISABLE KEYS */;
INSERT INTO `lista6s` VALUES (1,'0101','Ente de Intermediación Fin','Op.Pasivas/Recibir depósitos de dinero en cuentas de ahorro, en cuenta corriente, a la vista y a plazo y emitir certificados negociables y no negociables. ','2022-04-11 07:46:54','2022-04-11 07:46:54'),(2,'0102','Ente de Intermediación Fin','Op.Pasivas/Emitir y colocar certificados de capital de nueva emisión para aumento de capital.  ','2022-04-11 07:46:54','2022-04-11 07:46:54'),(3,'0103','Ente de Intermediación Fin','Op.Pasivas/Emitir y colocar cédulas hipotecarias.  ','2022-04-11 07:46:54','2022-04-11 07:46:54'),(4,'0104','Ente de Intermediación Fin','Op.Pasivas/Emitir y colocar valores representativos de deuda.  ','2022-04-11 07:46:54','2022-04-11 07:46:54'),(5,'0105','Ente de Intermediación Fin','Op.Pasivas/Contraer obligaciones subordinadas.  ','2022-04-11 07:46:54','2022-04-11 07:46:54'),(6,'0106','Ente de Intermediación Fin','Op.Pasivas/Contraer créditos u obligaciones con el Banco Central de  Bolivia  (BCB) y con entidades financieras del país y el extranjero. ','2022-04-11 07:46:54','2022-04-11 07:46:54'),(7,'0107','Ente de Intermediación Fin','Op.Pasivas/Aceptar letras giradas a plazo contra sí mismas, cuyos vencimientos no excedan de ciento ochenta (180) días contados desde la fecha de aceptación y que provengan de operaciones de comercio, internas o externas, de bienes y/o servicios. ','2022-04-11 07:46:55','2022-04-11 07:46:55'),(8,'0108','Ente de Intermediación Fin','Op.Pasivas/Emitir cheques de viajero.','2022-04-11 07:46:55','2022-04-11 07:46:55'),(9,'0109','Ente de Intermediación Fin','Op.Pasivas/Celebrar contratos a futuro de compraventa de monedas extranjeras.  ','2022-04-11 07:46:55','2022-04-11 07:46:55'),(10,'0110','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Otorgar créditos y efectuar préstamos a corto, mediano y largo plazo, con garantías personales, hipotecarias, prendarias u otras no convencionales, o una combinación de las mismas.','2022-04-11 07:46:55','2022-04-11 07:46:55'),(11,'0111','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Descontar   y/o   negociar   títulos-valores   u   otros   documentos   de obligaciones de comercio, con o sin recurso, cuyo vencimiento no exceda un (1) año. ','2022-04-11 07:46:55','2022-04-11 07:46:55'),(12,'0112','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Otorgar avales, fianzas y otras garantías a primer requerimiento.  ','2022-04-11 07:46:55','2022-04-11 07:46:55'),(13,'0113','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Abrir, avisar, confirmar y negociar cartas de crédito.  ','2022-04-11 07:46:55','2022-04-11 07:46:55'),(14,'0114','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Recibir letras de cambio u otros efectos en cobranza, así como efectuar operaciones de cobranza, pagos y transferencias. ','2022-04-11 07:46:55','2022-04-11 07:46:55'),(15,'0115','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Realizar giros y emitir órdenes de pago exigibles en el país o en el extranjero. ','2022-04-11 07:46:55','2022-04-11 07:46:55'),(16,'0116','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Realizar operaciones de cambio y compraventa de monedas  ','2022-04-11 07:46:55','2022-04-11 07:46:55'),(17,'0117','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Comprar, conservar y vender monedas y barras de oro, plata y metales preciosos, así como certificados de tenencia de dichos metales ','2022-04-11 07:46:55','2022-04-11 07:46:55'),(18,'0118','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Comprar, conservar y vender por cuenta propia, valores registrados en el registro del mercado de valores, directamente o mediante sociedades autorizadas.  ','2022-04-11 07:46:55','2022-04-11 07:46:55'),(19,'0119','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Comprar,   conservar   y   vender   por   cuenta   propia,   documentos representativos de obligaciones cotizadas en bolsa, emitidas por entidades financieras. ','2022-04-11 07:46:55','2022-04-11 07:46:55'),(20,'0120','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Comprar y vender por cuenta propia documentos mercantiles.','2022-04-11 07:46:55','2022-04-11 07:46:55'),(21,'0121','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Alquilar cajas de seguridad.  ','2022-04-11 07:46:55','2022-04-11 07:46:55'),(22,'0122','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Ejercer   comisiones   de   confianza   y   operaciones   de   fideicomiso, incluidos fideicomisos en garantía, de acuerdo a reglamentación por parte de la Autoridad de Supervisión del Sistema Financiero.  ','2022-04-11 07:46:55','2022-04-11 07:46:55'),(23,'0123','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Operar con Tarjetas de Crédito y Cheques de Viajero.  ','2022-04-11 07:46:55','2022-04-11 07:46:55'),(24,'0124','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Actuar como agente originador en procesos de titularización.  ','2022-04-11 07:46:55','2022-04-11 07:46:55'),(25,'0125','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Servir de agente financiero para las inversiones o préstamos en el país, de recursos provenientes del exterior, directamente o mediante sociedades autorizadas. ','2022-04-11 07:46:55','2022-04-11 07:46:55'),(26,'0126','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Efectuar operaciones de reporto.  ','2022-04-11 07:46:56','2022-04-11 07:46:56'),(27,'0127','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Efectuar operaciones de arrendamiento financiero mobiliario hasta un monto límite equivalente a UFV200.000,00 (Doscientas Mil Unidades de Fomento a la Vivienda) e inmobiliario para vivienda de interés social. Estos límites podrán ser modificados mediante Decreto Supremo. ','2022-04-11 07:46:56','2022-04-11 07:46:56'),(28,'0128','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Efectuar operaciones de factoraje, con facturas cambiarias u otro tipo de documento mercantil autorizado mediante reglamentación de ASFI. ','2022-04-11 07:46:56','2022-04-11 07:46:56'),(29,'0129','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Efectuar operaciones de derivados en distintas modalidades, sujetas a reglamentación emitida mediante Decreto Supremo. ','2022-04-11 07:46:56','2022-04-11 07:46:56'),(30,'0130','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Sindicarse  con  otras  entidades  de  intermediación  financiera  para otorgar  créditos  o  garantías,  sujeto  a  reglamentación  de  la  Autoridad  de  Supervisión  del  Sistema Financiero, lo que no se considerará como sociedad accidental ni conlleva responsabilidad solidaria y mancomunada entre las entidades sindicadas. ','2022-04-11 07:46:56','2022-04-11 07:46:56'),(31,'0131','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Canalizar recursos a otras entidades financieras en forma de préstamo, únicamente para fines de expansión de cartera al sector productivo por parte de la entidad financiera prestataria. ','2022-04-11 07:46:56','2022-04-11 07:46:56'),(32,'0132','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Canalizar recursos a otras entidades financieras temporalmente para fines de liquidez, sujeto a reglamentación de ASFI. ','2022-04-11 07:46:56','2022-04-11 07:46:56'),(33,'0133','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Mantener saldos en bancos corresponsales del exterior  ','2022-04-11 07:46:56','2022-04-11 07:46:56'),(34,'0134','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Realizar transferencias de dinero y emitir órdenes de pago exigibles en el país en forma física o por medios electrónicos. ','2022-04-11 07:46:56','2022-04-11 07:46:56'),(35,'0135','Ente de Intermediación Fin','Op.Activas,contingentes,servicios/Canalizar productos y servicios financieros, autorizados en la LSF, a través de dispositivos móviles. ','2022-04-11 07:46:56','2022-04-11 07:46:56'),(36,'0236','Empresas de Arrendamiento Fin','Mantener y conservar los bienes cedidos.  ','2022-04-11 07:46:56','2022-04-11 07:46:56'),(37,'0237','Empresas de Arrendamiento Fin','Ceder a otra empresa de arrendamiento financiero, a sociedades de titularización o a entidades de intermediación financiera, los contratos que haya celebrado. ','2022-04-11 07:46:56','2022-04-11 07:46:56'),(38,'0238','Empresas de Arrendamiento Fin','Vender o arrendar bienes que hayan sido objeto de operaciones de arrendamiento financiero.  ','2022-04-11 07:46:56','2022-04-11 07:46:56'),(39,'0239','Empresas de Arrendamiento Fin','Adquirir, alquilar y vender bienes muebles e inmuebles utilizados en actividades propias del giro.  ','2022-04-11 07:46:56','2022-04-11 07:46:56'),(40,'0240','Empresas de Arrendamiento Fin','Constituir en garantía los flujos de caja provenientes de los contratos de arrendamiento financiero que se celebren con recursos del financiamiento que se garantice. ','2022-04-11 07:46:56','2022-04-11 07:46:56'),(41,'0241','Empresas de Arrendamiento Fin','Emitir obligaciones subordinadas.  ','2022-04-11 07:46:56','2022-04-11 07:46:56'),(42,'0342','Almacenes Generales de Depósito','Almacenamiento, conservación y custodia de cualquier mercadería o producto de propiedad de terceros, en almacenes propios o arrendados, de conformidad al Código de Comercio. ','2022-04-11 07:46:56','2022-04-11 07:46:56'),(43,'0343','Almacenes Generales de Depósito','Operar recintos aduaneros, previo cumplimiento de los requisitos de Ley.  ','2022-04-11 07:46:56','2022-04-11 07:46:56'),(44,'0344','Almacenes Generales de Depósito','Emitir certificados de depósito de conformidad al Código de Comercio y bonos de prenda.  ','2022-04-11 07:46:56','2022-04-11 07:46:56'),(45,'0345','Almacenes Generales de Depósito','Emitir bonos u obligaciones con garantías específicas.  ','2022-04-11 07:46:56','2022-04-11 07:46:56'),(46,'0346','Almacenes Generales de Depósito','Empacar, ensacar o fraccionar y ejecutar cualesquiera otras actividades dirigidas a la conservación de las mercaderías y productos depositados, a solicitud del depositante y con el consentimiento del acreedor prendario. ','2022-04-11 07:46:57','2022-04-11 07:46:57'),(47,'0347','Almacenes Generales de Depósito','Comprar bienes inmuebles destinados a su objeto social.  ','2022-04-11 07:46:57','2022-04-11 07:46:57'),(48,'0348','Almacenes Generales de Depósito','Obtener financiamiento para compra, mejora o ampliación de sus instalaciones.  ','2022-04-11 07:46:57','2022-04-11 07:46:57'),(49,'0349','Almacenes Generales de Depósito','Las demás que la Autoridad de Supervisión del Sistema Financiero - ASFI autorice mediante normativa expresa. ','2022-04-11 07:46:57','2022-04-11 07:46:57'),(50,'0350','Almacenes Generales de Depósito','Financiamiento - Emitir títulos valores, mediante oferta pública.  ','2022-04-11 07:46:57','2022-04-11 07:46:57'),(51,'0351','Almacenes Generales de Depósito','Financiamiento  -  Obtener  financiamiento  de  entidades  de  intermediación  financiera  nacionales  y extranjeras. ','2022-04-11 07:46:57','2022-04-11 07:46:57'),(52,'0452','Burós de Información','Recolectar, almacenar, consolidar y procesar información relacionada con personas naturales y jurídicas deudoras del sistema financiero. ','2022-04-11 07:46:57','2022-04-11 07:46:57'),(53,'0453','Burós de Información','Conformar bases de datos y distribuir información procesada correspondiente a obligaciones de carácter económico, financiero y comercial, de las personas naturales y jurídicas, de registros, de fuentes legítimas y fidedignas públicas y privadas, de acceso no restringido o reservado al público en general.  ','2022-04-11 07:46:57','2022-04-11 07:46:57'),(54,'0454','Burós de Información','Celebrar convenios recíprocos con entidades públicas para el intercambio de información de bases de datos, que permita identificar adecuadamente al titular. También podrán celebrar convenios para obtener información específica de entidades privadas.  ','2022-04-11 07:46:57','2022-04-11 07:46:57'),(55,'0455','Burós de Información','Desarrollar e implementar modelos de gestión de riesgos en la actividad financiera para su distribución y venta. ','2022-04-11 07:46:57','2022-04-11 07:46:57'),(56,'0456','Burós de Información','Conformar bases de datos de eventos de riesgo operativo y desarrollar modelos de estimación de pérdidas esperadas para su distribución y venta. ','2022-04-11 07:46:57','2022-04-11 07:46:57'),(57,'0457','Burós de Información','Almacenar información estadística sectorial y por ramas de actividad, y elaborar estudios y análisis sobre mercados potenciales y sus riesgos inherentes u otros criterios para su distribución y venta. ','2022-04-11 07:46:57','2022-04-11 07:46:57'),(58,'0458','Burós de Información','Otras relacionadas con el giro de su negocio, conforme a normativa emitida al efecto por la Autoridad de Supervisión del Sistema Financiero - ASFI. ','2022-04-11 07:46:57','2022-04-11 07:46:57'),(59,'0459','Burós de Información','Financiamiento - Emitir títulos valores, mediante oferta pública.  ','2022-04-11 07:46:57','2022-04-11 07:46:57'),(60,'0460','Burós de Información','Financiamiento  -  Obtener  financiamiento  de  entidades  de  intermediación  financiera  nacionales  y extranjeras. ','2022-04-11 07:46:57','2022-04-11 07:46:57'),(61,'0561','Cámaras de Compensación y Liquidación','Suscribir y mantener vigentes contratos de servicios de compensación y liquidación de instrumentos de pago con sus participantes. ','2022-04-11 07:46:57','2022-04-11 07:46:57'),(62,'0562','Cámaras de Compensación y Liquidación','Compensar instrumentos de pago.  ','2022-04-11 07:46:58','2022-04-11 07:46:58'),(63,'0563','Cámaras de Compensación y Liquidación','Liquidar posiciones multilaterales netas.  ','2022-04-11 07:46:58','2022-04-11 07:46:58'),(64,'0564','Cámaras de Compensación y Liquidación','Mantener una cuenta liquidadora en el Banco Central de Bolivia - BCB.  ','2022-04-11 07:46:58','2022-04-11 07:46:58'),(65,'0565','Cámaras de Compensación y Liquidación','Preservar los registros electrónicos de las operaciones con su correspondiente firma digital.  ','2022-04-11 07:46:58','2022-04-11 07:46:58'),(66,'0566','Cámaras de Compensación y Liquidación','Financiamiento - Emitir títulos valores, mediante oferta pública.  ','2022-04-11 07:46:58','2022-04-11 07:46:58'),(67,'0567','Cámaras de Compensación y Liquidación','Financiamiento  -  Obtener  financiamiento  de  entidades  de  intermediación  financiera  nacionales  y extranjeras. ','2022-04-11 07:46:58','2022-04-11 07:46:58'),(68,'0668','Servicios de Pago Móvil','Operar servicios de pago móvil.  ','2022-04-11 07:46:58','2022-04-11 07:46:58'),(69,'0669','Servicios de Pago Móvil','Emitir billeteras móviles y operar cuentas de pago.  ','2022-04-11 07:46:58','2022-04-11 07:46:58'),(70,'0670','Servicios de Pago Móvil','Ejecutar electrónicamente órdenes de pago y consultas con dispositivos móviles a través de operadoras de telefonía móvil. ','2022-04-11 07:46:58','2022-04-11 07:46:58'),(71,'0671','Servicios de Pago Móvil','Otros relacionados con servicios de pago autorizadas por la Autoridad de  ','2022-04-11 07:46:58','2022-04-11 07:46:58'),(72,'0672','Servicios de Pago Móvil','Supervisión del Sistema Financiero - ASFI. Financiamiento - Emitir títulos valores, mediante oferta pública.  ','2022-04-11 07:46:58','2022-04-11 07:46:58'),(73,'0673','Servicios de Pago Móvil','Financiamiento  -  Obtener  financiamiento  de  entidades  de  intermediación  financiera  nacionales  y extranjeras. ','2022-04-11 07:46:58','2022-04-11 07:46:58'),(74,'0774','Empresas Administradoras de Tarjetas Electrónicas','Autorizar la afiliación de establecimientos comerciales que expenden bienes o prestan servicios, a una red para operar con las tarjetas electrónicas administradas por la entidad. ','2022-04-11 07:46:58','2022-04-11 07:46:58'),(75,'0775','Empresas Administradoras de Tarjetas Electrónicas','Procesar los consumos de los tarjetahabientes con el uso de tarjetas de crédito, débito, prepagadas y otras tarjetas de financiamiento o pago electrónico, emitidas por entidades de intermediación financiera. ','2022-04-11 07:46:58','2022-04-11 07:46:58'),(76,'0776','Empresas Administradoras de Tarjetas Electrónicas','Operar el sistema de pagos electrónicos derivados del uso de tarjetas electrónicas en cajeros automáticos y establecimientos comerciales afiliados a una red.  ','2022-04-11 07:46:58','2022-04-11 07:46:58'),(77,'0777','Empresas Administradoras de Tarjetas Electrónicas','Emitir títulos valores, mediante oferta pública.  ','2022-04-11 07:46:58','2022-04-11 07:46:58'),(78,'0778','Empresas Administradoras de Tarjetas Electrónicas','Obtener financiamiento de entidades de intermediación financiera nacionales y extranjeras.  ','2022-04-11 07:46:58','2022-04-11 07:46:58'),(79,'0880','Empresas de Transporte de Material Monetario y Valores','Transporte de material monetario y valores en el ámbito local y nacional.  ','2022-04-11 07:46:58','2022-04-11 07:46:58'),(80,'0881','Empresas de Transporte de Material Monetario y Valores','Abastecimiento y recarga de billetes y monedas en cajeros automáticos.  ','2022-04-11 07:46:58','2022-04-11 07:46:58'),(81,'0882','Empresas de Transporte de Material Monetario y Valores','Custodia en bóveda de material monetario y valores.  ','2022-04-11 07:46:59','2022-04-11 07:46:59'),(82,'0883','Empresas de Transporte de Material Monetario y Valores','Procesamiento de efectivo que incluye la selección, clasificación, depuración y recuento de billetes y monedas.','2022-04-11 07:46:59','2022-04-11 07:46:59'),(83,'9999','OTROS','Otras operaciones no contempladas en la lista o evento no relacionado a una operación.  ','2022-04-11 07:46:59','2022-04-11 07:46:59');
/*!40000 ALTER TABLE `lista6s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lista7s`
--

DROP TABLE IF EXISTS `lista7s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lista7s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departamento` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provincia` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `municipio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciudad` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lista7s_cod_unique` (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lista7s`
--

LOCK TABLES `lista7s` WRITE;
/*!40000 ALTER TABLE `lista7s` DISABLE KEYS */;
INSERT INTO `lista7s` VALUES (1,'00000000000','No hay un lugar identificado donde sucedió el evento de pérdida','','','','2022-04-11 07:46:59','2022-04-11 07:46:59');
/*!40000 ALTER TABLE `lista7s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lista8s`
--

DROP TABLE IF EXISTS `lista8s`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lista8s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lista8s_cod_unique` (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lista8s`
--

LOCK TABLES `lista8s` WRITE;
/*!40000 ALTER TABLE `lista8s` DISABLE KEYS */;
INSERT INTO `lista8s` VALUES (1,'1','Eventos de riesgo que generan pérdidas y afectan el Estado de Ganancias y Pérdidas','2022-04-11 07:46:59','2022-04-11 07:46:59'),(2,'2','Eventos de riesgo que generan pérdidas y no afectan el Estado de Ganancias y Pérdidas','2022-04-11 07:46:59','2022-04-11 07:46:59'),(3,'3','Eventos de riesgo que no generan pérdidas y no afectan el Estado de Ganancias y Pérdidas','2022-04-11 07:46:59','2022-04-11 07:46:59'),(4,'4','Eventos de riesgo que generan ganancias','2022-04-11 07:46:59','2022-04-11 07:46:59');
/*!40000 ALTER TABLE `lista8s` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lugars`
--

DROP TABLE IF EXISTS `lugars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lugars` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `codigo_de_envio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_de_corte` date NOT NULL,
  `codigo_de_evento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_lugar` bigint(20) unsigned NOT NULL,
  `tipo_envio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lugars_codigo_de_evento_unique` (`codigo_de_evento`),
  KEY `lugars_id_lugar_foreign` (`id_lugar`),
  CONSTRAINT `lugars_id_lugar_foreign` FOREIGN KEY (`id_lugar`) REFERENCES `lista7s` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lugars`
--

LOCK TABLES `lugars` WRITE;
/*!40000 ALTER TABLE `lugars` DISABLE KEYS */;
/*!40000 ALTER TABLE `lugars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2021_04_04_184729_create_lista1s_table',1),(7,'2021_04_04_223141_create_lista3s_table',1),(8,'2021_04_04_223342_create_lista8s_table',1),(9,'2021_04_07_225930_create_lista2s_table',1),(10,'2021_04_08_043523_create_lista4s_table',1),(11,'2021_04_08_050434_create_lista5s_table',1),(12,'2021_04_08_055309_create_lista6s_table',1),(13,'2021_04_08_133813_create_lista7s_table',1),(14,'2021_04_08_134237_create_lista11s_table',1),(15,'2021_04_08_134930_create_lista10s_table',1),(16,'2022_04_01_005139_create_eventos_table',1),(17,'2022_04_01_005354_create_cuenta__contables_table',1),(18,'2022_04_01_005422_create_tipo__eventos_table',1),(19,'2022_04_01_005447_create_pafs_table',1),(20,'2022_04_01_005529_create_canales_table',1),(21,'2022_04_01_005549_create_procesos_table',1),(22,'2022_04_01_005612_create_operacions_table',1),(23,'2022_04_01_005632_create_lugars_table',1),(24,'2022_04_01_005703_create_linea__de__negocios_table',1),(25,'2022_04_05_022712_create_sessions_table',1),(26,'2022_04_05_164543_create_monedas_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `monedas`
--

DROP TABLE IF EXISTS `monedas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `monedas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `moneda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=171 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `monedas`
--

LOCK TABLES `monedas` WRITE;
/*!40000 ALTER TABLE `monedas` DISABLE KEYS */;
INSERT INTO `monedas` VALUES (1,'BOB – Boliviano','2022-04-11 07:46:31','2022-04-11 07:46:31'),(2,'USD - Dólar Americano','2022-04-11 07:46:31','2022-04-11 07:46:31'),(3,'EUR – Euro','2022-04-11 07:46:31','2022-04-11 07:46:31'),(4,'AED - Dírham de los Emiratos Árabes Unido','2022-04-11 07:46:31','2022-04-11 07:46:31'),(5,'AFN – Afghani','2022-04-11 07:46:31','2022-04-11 07:46:31'),(6,'ALL – Lek','2022-04-11 07:46:32','2022-04-11 07:46:32'),(7,'AMD - Dram armenio','2022-04-11 07:46:32','2022-04-11 07:46:32'),(8,'ANG - Florín antillano neerlandés','2022-04-11 07:46:32','2022-04-11 07:46:32'),(9,'AOA – Kwanza','2022-04-11 07:46:32','2022-04-11 07:46:32'),(10,'ARS - Peso Argentino','2022-04-11 07:46:32','2022-04-11 07:46:32'),(11,'AUD - Dólar australiano','2022-04-11 07:46:32','2022-04-11 07:46:32'),(12,'AWG - Florín arubeño','2022-04-11 07:46:32','2022-04-11 07:46:32'),(13,'AZN - Manat azerbaiyano','2022-04-11 07:46:32','2022-04-11 07:46:32'),(14,'BAM - Marco bosnioherzegovino','2022-04-11 07:46:32','2022-04-11 07:46:32'),(15,'BBD - Dólar de Barbados','2022-04-11 07:46:32','2022-04-11 07:46:32'),(16,'BDT – Taka','2022-04-11 07:46:32','2022-04-11 07:46:32'),(17,'BGN - Lev búlgaro','2022-04-11 07:46:32','2022-04-11 07:46:32'),(18,'BHD - Dinar de Bahrein','2022-04-11 07:46:32','2022-04-11 07:46:32'),(19,'BIF - Franco Burundi','2022-04-11 07:46:32','2022-04-11 07:46:32'),(20,'BMD - Dólar de Bermudas','2022-04-11 07:46:32','2022-04-11 07:46:32'),(21,'BND - Dólar de Brunei','2022-04-11 07:46:32','2022-04-11 07:46:32'),(22,'BOV – Mvdol','2022-04-11 07:46:32','2022-04-11 07:46:32'),(23,'BRL - Real Brasileño','2022-04-11 07:46:32','2022-04-11 07:46:32'),(24,'BSD - Dólar de las Bahamas','2022-04-11 07:46:32','2022-04-11 07:46:32'),(25,'BTN – Ngultrum','2022-04-11 07:46:32','2022-04-11 07:46:32'),(26,'BWP – Pula','2022-04-11 07:46:32','2022-04-11 07:46:32'),(27,'BYR - Rublo bielorruso','2022-04-11 07:46:32','2022-04-11 07:46:32'),(28,'BZD - Dólar de Belice','2022-04-11 07:46:32','2022-04-11 07:46:32'),(29,'CAD - Dólar canadiense','2022-04-11 07:46:32','2022-04-11 07:46:32'),(30,'CDF - Franco congoleño','2022-04-11 07:46:32','2022-04-11 07:46:32'),(31,'CHE - Euro WIR','2022-04-11 07:46:33','2022-04-11 07:46:33'),(32,'CHF - Franco suizo','2022-04-11 07:46:33','2022-04-11 07:46:33'),(33,'CHW - Franco WIR','2022-04-11 07:46:33','2022-04-11 07:46:33'),(34,'CLF - Unidad de Fomento','2022-04-11 07:46:33','2022-04-11 07:46:33'),(35,'CLP - Peso chileno','2022-04-11 07:46:33','2022-04-11 07:46:33'),(36,'CNY – Yuan','2022-04-11 07:46:33','2022-04-11 07:46:33'),(37,'COP - Peso Colombiano','2022-04-11 07:46:33','2022-04-11 07:46:33'),(38,'COU - Unidad de Valor Real','2022-04-11 07:46:33','2022-04-11 07:46:33'),(39,'CRC - Colón costarricense','2022-04-11 07:46:33','2022-04-11 07:46:33'),(40,'CUC - Peso Convertible','2022-04-11 07:46:33','2022-04-11 07:46:33'),(41,'CUP - Peso Cubano','2022-04-11 07:46:34','2022-04-11 07:46:34'),(42,'CVE - Cabo Verde Escudo','2022-04-11 07:46:34','2022-04-11 07:46:34'),(43,'CZK - Corona checa','2022-04-11 07:46:34','2022-04-11 07:46:34'),(44,'DJF - Franco de Djibouti','2022-04-11 07:46:34','2022-04-11 07:46:34'),(45,'DKK - Corona danesa','2022-04-11 07:46:34','2022-04-11 07:46:34'),(46,'DOP - Peso Dominicano','2022-04-11 07:46:34','2022-04-11 07:46:34'),(47,'DZD - Dinar argelino','2022-04-11 07:46:34','2022-04-11 07:46:34'),(48,'EGP - Libra egipcia','2022-04-11 07:46:34','2022-04-11 07:46:34'),(49,'ERN – Nakfa','2022-04-11 07:46:34','2022-04-11 07:46:34'),(50,'ETB - Birr etíope','2022-04-11 07:46:34','2022-04-11 07:46:34'),(51,'FJD - Dólar de Fiji','2022-04-11 07:46:34','2022-04-11 07:46:34'),(52,'FKP - Libra malvinense','2022-04-11 07:46:34','2022-04-11 07:46:34'),(53,'GBP - Libra esterlina','2022-04-11 07:46:34','2022-04-11 07:46:34'),(54,'GEL – Lar','2022-04-11 07:46:34','2022-04-11 07:46:34'),(55,'GHS - Cedi de Ghana','2022-04-11 07:46:34','2022-04-11 07:46:34'),(56,'GIP - Libra de Gibraltar','2022-04-11 07:46:34','2022-04-11 07:46:34'),(57,'GMD – Dalasi','2022-04-11 07:46:34','2022-04-11 07:46:34'),(58,'GNF - Franco guineano','2022-04-11 07:46:34','2022-04-11 07:46:34'),(59,'GTQ – Quetzal','2022-04-11 07:46:34','2022-04-11 07:46:34'),(60,'GYD - Dólar guyanés','2022-04-11 07:46:34','2022-04-11 07:46:34'),(61,'HKD - Dólar de Hong Kong','2022-04-11 07:46:34','2022-04-11 07:46:34'),(62,'HNL – Lempira','2022-04-11 07:46:34','2022-04-11 07:46:34'),(63,'HRK – Kuna','2022-04-11 07:46:34','2022-04-11 07:46:34'),(64,'HTG – Gourde','2022-04-11 07:46:34','2022-04-11 07:46:34'),(65,'HUF – Florín','2022-04-11 07:46:34','2022-04-11 07:46:34'),(66,'IDR – Rupia','2022-04-11 07:46:35','2022-04-11 07:46:35'),(67,'ILS - Nuevo Shekel Israelí','2022-04-11 07:46:35','2022-04-11 07:46:35'),(68,'INR - Rupia india','2022-04-11 07:46:35','2022-04-11 07:46:35'),(69,'IQD - Dinar iraquí','2022-04-11 07:46:35','2022-04-11 07:46:35'),(70,'IRR - Rial iraní','2022-04-11 07:46:35','2022-04-11 07:46:35'),(71,'ISK - Corona islandesa','2022-04-11 07:46:35','2022-04-11 07:46:35'),(72,'JMD - Dólar jamaiquino','2022-04-11 07:46:35','2022-04-11 07:46:35'),(73,'JOD - Dinar jordano','2022-04-11 07:46:35','2022-04-11 07:46:35'),(74,'JPY – Yen','2022-04-11 07:46:35','2022-04-11 07:46:35'),(75,'KES - Chelín keniano','2022-04-11 07:46:35','2022-04-11 07:46:35'),(76,'KGS – Som','2022-04-11 07:46:35','2022-04-11 07:46:35'),(77,'KHR – Riel','2022-04-11 07:46:35','2022-04-11 07:46:35'),(78,'KMF - Franco Comoro','2022-04-11 07:46:35','2022-04-11 07:46:35'),(79,'KPW - Won norcoreano','2022-04-11 07:46:35','2022-04-11 07:46:35'),(80,'KRW – Won','2022-04-11 07:46:35','2022-04-11 07:46:35'),(81,'KWD - Dinar kuwaití','2022-04-11 07:46:35','2022-04-11 07:46:35'),(82,'KYD - Dólar de las Islas Caimán','2022-04-11 07:46:35','2022-04-11 07:46:35'),(83,'KZT – Tenge','2022-04-11 07:46:35','2022-04-11 07:46:35'),(84,'LAK – Kip','2022-04-11 07:46:35','2022-04-11 07:46:35'),(85,'LBP - Libra libanesa','2022-04-11 07:46:35','2022-04-11 07:46:35'),(86,'LKR - Rupia de Sri Lanka','2022-04-11 07:46:35','2022-04-11 07:46:35'),(87,'LRD - Dólar liberiano','2022-04-11 07:46:35','2022-04-11 07:46:35'),(88,'LSL – Loti','2022-04-11 07:46:36','2022-04-11 07:46:36'),(89,'LYD - Dinar libio','2022-04-11 07:46:36','2022-04-11 07:46:36'),(90,'MAD - Dirham marroquí','2022-04-11 07:46:36','2022-04-11 07:46:36'),(91,'MDL - Leu moldavo','2022-04-11 07:46:36','2022-04-11 07:46:36'),(92,'MGA - Ariary malgache','2022-04-11 07:46:36','2022-04-11 07:46:36'),(93,'MKD – Denar','2022-04-11 07:46:36','2022-04-11 07:46:36'),(94,'MMK – Kyat','2022-04-11 07:46:36','2022-04-11 07:46:36'),(95,'MNT – Tugrik','2022-04-11 07:46:36','2022-04-11 07:46:36'),(96,'MOP – Pataca','2022-04-11 07:46:36','2022-04-11 07:46:36'),(97,'MRO – Ouguiya','2022-04-11 07:46:36','2022-04-11 07:46:36'),(98,'MUR - Rupia de Mauricio','2022-04-11 07:46:36','2022-04-11 07:46:36'),(99,'MVR – Rufiyaa','2022-04-11 07:46:36','2022-04-11 07:46:36'),(100,'MWK – Kwacha','2022-04-11 07:46:36','2022-04-11 07:46:36'),(101,'MXN - Peso Mexicano','2022-04-11 07:46:36','2022-04-11 07:46:36'),(102,'MXV - Unidad de Inversion Mexicana (UDI)','2022-04-11 07:46:36','2022-04-11 07:46:36'),(103,'MYR - Ringgit malayo','2022-04-11 07:46:36','2022-04-11 07:46:36'),(104,'MZN - Metical mozambiqueño','2022-04-11 07:46:36','2022-04-11 07:46:36'),(105,'NAD - Dólar de Namibia','2022-04-11 07:46:36','2022-04-11 07:46:36'),(106,'NGN – Naira','2022-04-11 07:46:36','2022-04-11 07:46:36'),(107,'NIO - Cordoba Oro','2022-04-11 07:46:36','2022-04-11 07:46:36'),(108,'NOK - Corona noruega','2022-04-11 07:46:36','2022-04-11 07:46:36'),(109,'NPR - Rupia nepalí','2022-04-11 07:46:36','2022-04-11 07:46:36'),(110,'NZD - Dólar neozelandés','2022-04-11 07:46:36','2022-04-11 07:46:36'),(111,'OMR - Rial omaní','2022-04-11 07:46:36','2022-04-11 07:46:36'),(112,'PAB – Balboa','2022-04-11 07:46:36','2022-04-11 07:46:36'),(113,'PEN - Nuevo Sol','2022-04-11 07:46:37','2022-04-11 07:46:37'),(114,'PGK – Kina','2022-04-11 07:46:37','2022-04-11 07:46:37'),(115,'PHP - Peso filipino','2022-04-11 07:46:37','2022-04-11 07:46:37'),(116,'PKR - Rupia pakistaní','2022-04-11 07:46:37','2022-04-11 07:46:37'),(117,'PLN – Zloty','2022-04-11 07:46:37','2022-04-11 07:46:37'),(118,'PYG – Guaraní','2022-04-11 07:46:37','2022-04-11 07:46:37'),(119,'QAR - Riyal catarí','2022-04-11 07:46:37','2022-04-11 07:46:37'),(120,'RON - Leu rumano','2022-04-11 07:46:37','2022-04-11 07:46:37'),(121,'RSD - Dinar serbio','2022-04-11 07:46:37','2022-04-11 07:46:37'),(122,'RUB - Rublo ruso','2022-04-11 07:46:37','2022-04-11 07:46:37'),(123,'RWF - Franco ruandés','2022-04-11 07:46:37','2022-04-11 07:46:37'),(124,'SAR - Riyal saudí','2022-04-11 07:46:37','2022-04-11 07:46:37'),(125,'SBD - Dólar de las Islas Salomón','2022-04-11 07:46:37','2022-04-11 07:46:37'),(126,'SCR - Rupia seychelense','2022-04-11 07:46:37','2022-04-11 07:46:37'),(127,'SDG - Libra sudanesa','2022-04-11 07:46:37','2022-04-11 07:46:37'),(128,'SEK - Corona sueca','2022-04-11 07:46:37','2022-04-11 07:46:37'),(129,'SGD - Dolar de Singapur','2022-04-11 07:46:38','2022-04-11 07:46:38'),(130,'SHP - Libra de Santa Helena','2022-04-11 07:46:38','2022-04-11 07:46:38'),(131,'SLL – Leone','2022-04-11 07:46:38','2022-04-11 07:46:38'),(132,'SOS - Chelín somalí','2022-04-11 07:46:38','2022-04-11 07:46:38'),(133,'SRD - Dólar surinamés','2022-04-11 07:46:38','2022-04-11 07:46:38'),(134,'SSP - Libra sursudanesa','2022-04-11 07:46:38','2022-04-11 07:46:38'),(135,'STD – Dobra','2022-04-11 07:46:38','2022-04-11 07:46:38'),(136,'SVC – Colón','2022-04-11 07:46:38','2022-04-11 07:46:38'),(137,'SYP - Libra Siria','2022-04-11 07:46:39','2022-04-11 07:46:39'),(138,'SZL – Lilangeni','2022-04-11 07:46:39','2022-04-11 07:46:39'),(139,'THB – Baht','2022-04-11 07:46:39','2022-04-11 07:46:39'),(140,'TJS – Somoni','2022-04-11 07:46:39','2022-04-11 07:46:39'),(141,'TMT - Manat turcomano','2022-04-11 07:46:39','2022-04-11 07:46:39'),(142,'TND - Dinar tunecino','2022-04-11 07:46:39','2022-04-11 07:46:39'),(143,'TOP - Pa’anga','2022-04-11 07:46:39','2022-04-11 07:46:39'),(144,'TRY - Lira turca','2022-04-11 07:46:39','2022-04-11 07:46:39'),(145,'TTD - Dólar trinitense','2022-04-11 07:46:39','2022-04-11 07:46:39'),(146,'TWD - Nuevo dólar taiwanés','2022-04-11 07:46:39','2022-04-11 07:46:39'),(147,'TZS - Chelín tanzano','2022-04-11 07:46:39','2022-04-11 07:46:39'),(148,'UAH – Hryvnia','2022-04-11 07:46:39','2022-04-11 07:46:39'),(149,'UGX - Chelín ugandés','2022-04-11 07:46:39','2022-04-11 07:46:39'),(150,'USD - Dólar estadounidense','2022-04-11 07:46:39','2022-04-11 07:46:39'),(151,'USN - Dólar Americano (Next day)','2022-04-11 07:46:39','2022-04-11 07:46:39'),(152,'UYI - Uruguay Peso en Unidades Indexadas','2022-04-11 07:46:39','2022-04-11 07:46:39'),(153,'UYU - Peso Uruguayo','2022-04-11 07:46:39','2022-04-11 07:46:39'),(154,'UZS - Som uzbeko','2022-04-11 07:46:39','2022-04-11 07:46:39'),(155,'VEF – Bolívar','2022-04-11 07:46:39','2022-04-11 07:46:39'),(156,'VND – Dong','2022-04-11 07:46:40','2022-04-11 07:46:40'),(157,'VUV – Vatu','2022-04-11 07:46:40','2022-04-11 07:46:40'),(158,'WST – Tala','2022-04-11 07:46:40','2022-04-11 07:46:40'),(159,'XAF - Franco CFA BEAC','2022-04-11 07:46:40','2022-04-11 07:46:40'),(160,'XCD - Dólar del Caribe Oriental','2022-04-11 07:46:40','2022-04-11 07:46:40'),(161,'XDR - SDR (Derechos Especiales de Giro)','2022-04-11 07:46:40','2022-04-11 07:46:40'),(162,'XOF - Franco CFA BCEAO','2022-04-11 07:46:40','2022-04-11 07:46:40'),(163,'XPF - CFP Franc','2022-04-11 07:46:40','2022-04-11 07:46:40'),(164,'XPF - Franco CFP','2022-04-11 07:46:40','2022-04-11 07:46:40'),(165,'XSU – Sucre','2022-04-11 07:46:40','2022-04-11 07:46:40'),(166,'XUA - Unidad de cuenta del BAD','2022-04-11 07:46:40','2022-04-11 07:46:40'),(167,'YER - Rial yemení','2022-04-11 07:46:41','2022-04-11 07:46:41'),(168,'ZAR – Rand','2022-04-11 07:46:41','2022-04-11 07:46:41'),(169,'ZMW - Kwacha zambiano','2022-04-11 07:46:41','2022-04-11 07:46:41'),(170,'ZWL - Dólar zimbabuense','2022-04-11 07:46:41','2022-04-11 07:46:41');
/*!40000 ALTER TABLE `monedas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `operacions`
--

DROP TABLE IF EXISTS `operacions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `operacions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `codigo_de_envio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_de_corte` date NOT NULL,
  `codigo_de_evento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_operacion` bigint(20) unsigned NOT NULL,
  `tipo_envio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `operacions_codigo_de_evento_unique` (`codigo_de_evento`),
  KEY `operacions_id_operacion_foreign` (`id_operacion`),
  CONSTRAINT `operacions_id_operacion_foreign` FOREIGN KEY (`id_operacion`) REFERENCES `lista6s` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `operacions`
--

LOCK TABLES `operacions` WRITE;
/*!40000 ALTER TABLE `operacions` DISABLE KEYS */;
/*!40000 ALTER TABLE `operacions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pafs`
--

DROP TABLE IF EXISTS `pafs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pafs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `codigo_de_envio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_de_corte` date NOT NULL,
  `codigo_de_evento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_paf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_envio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pafs_codigo_de_evento_unique` (`codigo_de_evento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pafs`
--

LOCK TABLES `pafs` WRITE;
/*!40000 ALTER TABLE `pafs` DISABLE KEYS */;
/*!40000 ALTER TABLE `pafs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Table structure for table `procesos`
--

DROP TABLE IF EXISTS `procesos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `procesos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `codigo_de_envio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_de_corte` date NOT NULL,
  `codigo_de_evento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_proceso` bigint(20) unsigned NOT NULL,
  `proceso_critico` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detalle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_envio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `procesos_codigo_de_evento_unique` (`codigo_de_evento`),
  KEY `procesos_id_proceso_foreign` (`id_proceso`),
  CONSTRAINT `procesos_id_proceso_foreign` FOREIGN KEY (`id_proceso`) REFERENCES `lista5s` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `procesos`
--

LOCK TABLES `procesos` WRITE;
/*!40000 ALTER TABLE `procesos` DISABLE KEYS */;
/*!40000 ALTER TABLE `procesos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('LbI9ETDxz9qnF0V4BhDtNaIQD0KJODV7SvBGKdIK',NULL,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.60 Safari/537.36 Edg/100.0.1185.29','YTozOntzOjY6Il90b2tlbiI7czo0MDoiS0NpbjZTT2cwa0l1QlpNYThkZ1RuUjE1b2pkZ2dHbG9LMXpCZ051biI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3QvY2lybyI7fX0=',1649649669),('nNVufUae10MG3m1yljxETP4gbFkZD5OBr2XYVxYI',NULL,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.60 Safari/537.36 Edg/100.0.1185.29','YToyOntzOjY6Il90b2tlbiI7czo0MDoiRDN4WWQzQ2YzcjBFdHl6cUhxVkJHQmhUdml1UkZIN0pHRnVmZ3ZWVyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1649649826);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo__eventos`
--

DROP TABLE IF EXISTS `tipo__eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo__eventos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `codigo_de_envio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_de_corte` date NOT NULL,
  `codigo_de_evento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tipo_evento` bigint(20) unsigned NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_envio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tipo__eventos_codigo_de_evento_unique` (`codigo_de_evento`),
  KEY `tipo__eventos_id_tipo_evento_foreign` (`id_tipo_evento`),
  CONSTRAINT `tipo__eventos_id_tipo_evento_foreign` FOREIGN KEY (`id_tipo_evento`) REFERENCES `lista2s` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo__eventos`
--

LOCK TABLES `tipo__eventos` WRITE;
/*!40000 ALTER TABLE `tipo__eventos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo__eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrador','admin@admin.com',NULL,'$2y$10$PPo.vss0l.DOCXZl0ZXtxuxWcmPZc1a0fvGY0NxPSEV66WQs/97E6',NULL,NULL,NULL,NULL,NULL,NULL,'admin','2022-04-11 07:46:31','2022-04-11 07:46:31'),(2,'Supervisor','super@super.com',NULL,'$2y$10$Yz7AyzihEFUrJVV4bDm9Le4cBLIYXno0o2XQQpNn84d9lFAyc7giK',NULL,NULL,NULL,NULL,NULL,NULL,'super','2022-04-11 07:46:31','2022-04-11 07:46:31'),(3,'Operador','oper@oper.com',NULL,'$2y$10$8t8UCvtsij.Dvy248hJSkeq1sMfg.PKXbL5tgtygdwkfVbSFUZbiC',NULL,NULL,NULL,NULL,NULL,NULL,'oper','2022-04-11 07:46:31','2022-04-11 07:46:31');
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

-- Dump completed on 2022-04-11  0:41:14
