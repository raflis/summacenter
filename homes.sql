-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: mensajesdeesperanza
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
-- Table structure for table `homes`
--

DROP TABLE IF EXISTS `homes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `homes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `terms` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homes`
--

LOCK TABLES `homes` WRITE;
/*!40000 ALTER TABLE `homes` DISABLE KEYS */;
INSERT INTO `homes` VALUES (1,'<p>Te invitamos a conmemorar a los seres queridos que ya est&aacute;n en la gloria del Se&ntilde;or elaborando una tarjeta virtual.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Todos los participantes entrar&aacute;n a un sorteo por un box &quot;Homenaje en casa&quot; Este box contiene: una vela, un rosario, una estampa de oraci&oacute;n y un cuadro ilustrado con la foto de tu ser querido.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Para participar, sigue estos sencillos pasos:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>1. Realiza tu propia tarjeta virtual en www.mensajesdeesperanza.orq.</p>\r\n\r\n<p>2. S&iacute;quenos en Facebook e Instagram (@parquedelaesperanza)</p>\r\n\r\n<p>3. Comparte tu tarjeta virtual en las redes sociales y etiqu&eacute;tanos para tener m&aacute;s oportunidades de ganar.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&iexcl;Y listo!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style=\"color:#b6905c\">Privacidad de Datos</span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>De conformidad con la Ley N&deg;29733, Ley de Protecci&oacute;n de Datos Personales, el usuario da su consentimiento para el tratamiento de los datos personales que son facilitados en esta p&aacute;gina.</p>\r\n\r\n<p>Asimismo, el usuario consiente que Parque de la Esperanza pueda ceder estos datos a terceros para los fines expuestos a continuaci&oacute;n:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&bull; Para ser incorporados en el banco de datos de usuarios de Parque de la Esperanza y utilizarlos en el env&iacute;o de publicidad mediante cualquier medio y soporte. , Para el env&iacute;o de invitaciones a actividades convocadas por Parque de la Esperanza o sus socios comerciales.</p>\r\n\r\n<p>&bull; Para fines estad&iacute;sticos, gestiones institucionales y administrativas. Estos datos se mantendr&aacute;n mientras sean &uacute;tiles para que Parque de la Esperanza pueda prestar y ofrecer sus servicios y darles tr&aacute;mite.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span style=\"color:#b6905c\">Consideraciones</span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&bull; Ser&aacute;n 5 ganadores.</p>\r\n\r\n<p>&bull; Se puede participar hasta el Domingo 7 de Noviembre.</p>\r\n\r\n<p>&bull; Se dar&aacute;n 10 d&iacute;as como m&aacute;ximo para que el ganador pueda reclamar su premio, pasado este tiempo ya no podr&aacute;n acceder a &eacute;l.</p>\r\n\r\n<p>&bull; Se estiman 45 d&iacute;as para la entrega de premios.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#b6905c\"><strong>Sorteo</strong></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&bull; Se realizar&aacute; el sorteo a trav&eacute;s de la p&aacute;gina &quot;random.org&quot;</p>\r\n\r\n<p>&bull; El nombre del ganador se publicar&aacute; en nuestro fanpage.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#b6905c\"><strong>Entrega de Premios</strong></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nos contactaremos con el ganador para coordinar la entrega del premio.</p>',NULL,'2021-10-29 11:23:08');
/*!40000 ALTER TABLE `homes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-17 13:21:25
