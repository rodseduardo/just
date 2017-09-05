-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: just
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `slug` varchar(150) DEFAULT NULL,
  `content` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (5,'O que Ã© Lorem Ipsum?','o-que-e-lorem-ipsum','<p><strong>Lorem Ipsum</strong>&nbsp;&eacute; simplesmente uma simula&ccedil;&atilde;o de texto da ind&uacute;stria tipogr&aacute;fica e de impressos, e vem sendo utilizado desde o s&eacute;culo XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu n&atilde;o s&oacute; a cinco s&eacute;culos, como tamb&eacute;m ao salto para a editora&ccedil;&atilde;o eletr&ocirc;nica, permanecendo essencialmente inalterado. Se popularizou na d&eacute;cada de 60, quando a Letraset lan&ccedil;ou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editora&ccedil;&atilde;o eletr&ocirc;nica como Aldus PageMaker.</p>'),(6,'De onde ele vem?','de-onde-ele-vem','<p>Ao contr&aacute;rio do que se acredita, Lorem Ipsum n&atilde;o &eacute; simplesmente um texto rand&ocirc;mico. Com mais de 2000 anos, suas ra&iacute;zes podem ser encontradas em uma obra de literatura latina cl&aacute;ssica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre cita&ccedil;&otilde;es da palavra na literatura cl&aacute;ssica, descobriu a sua indubit&aacute;vel origem. Lorem Ipsum vem das se&ccedil;&otilde;es 1.10.32 e 1.10.33 do \"de Finibus Bonorum et Malorum\" (Os Extremos do Bem e do Mal), de C&iacute;cero, escrito em 45 AC. Este livro &eacute; um tratado de teoria da &eacute;tica muito popular na &eacute;poca da Renascen&ccedil;a. A primeira linha de Lorem Ipsum, \"Lorem Ipsum dolor sit amet...\" vem de uma linha na se&ccedil;&atilde;o 1.10.32.</p>\r\n<p>O trecho padr&atilde;o original de Lorem Ipsum, usado desde o s&eacute;culo XVI, est&aacute; reproduzido abaixo para os interessados. Se&ccedil;&otilde;es 1.10.32 e 1.10.33 de \"de Finibus Bonorum et Malorum\" de Cicero tamb&eacute;m foram reproduzidas abaixo em sua forma exata original, acompanhada das vers&otilde;es para o ingl&ecirc;s da tradu&ccedil;&atilde;o feita por H. Rackham em 1914.</p>'),(7,'Porque nÃ³s o usamos?','porque-nos-o-usamos','<p>&Eacute; um fato conhecido de todos que um leitor se distrair&aacute; com o conte&uacute;do de texto leg&iacute;vel de uma p&aacute;gina quando estiver examinando sua diagrama&ccedil;&atilde;o. A vantagem de usar Lorem Ipsum &eacute; que ele tem uma distribui&ccedil;&atilde;o normal de letras, ao contr&aacute;rio de \"Conte&uacute;do aqui, conte&uacute;do aqui\", fazendo com que ele tenha uma apar&ecirc;ncia similar a de um texto leg&iacute;vel. Muitos softwares de publica&ccedil;&atilde;o e editores de p&aacute;ginas na internet agora usam Lorem Ipsum como texto-modelo padr&atilde;o, e uma r&aacute;pida busca por \'lorem ipsum\' mostra v&aacute;rios websites ainda em sua fase de constru&ccedil;&atilde;o. V&aacute;rias vers&otilde;es novas surgiram ao longo dos anos, eventualmente por acidente, e &agrave;s vezes de prop&oacute;sito (injetando humor, e coisas do g&ecirc;nero).</p>'),(8,'Lorem Ipsum','lorem-ipsum','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce placerat erat tincidunt scelerisque ornare. Proin iaculis lacinia elit tincidunt venenatis. Integer elementum sapien volutpat nisi volutpat cursus. Nam mollis, justo condimentum venenatis ornare, tortor mi suscipit justo, vitae commodo ligula lorem eu felis. Etiam dignissim, dolor id fringilla facilisis, dui nulla mattis elit, id iaculis arcu lacus nec justo. Nam finibus, urna sit amet porta auctor, dolor nulla venenatis erat, eget imperdiet ligula massa non massa. Phasellus sit amet justo nec dui condimentum posuere non ut leo. Sed dolor lectus, elementum a convallis sit amet, rutrum nec lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc vitae tortor mi. Fusce velit lorem, commodo eget nisl ac, pellentesque consectetur metus. Cras elementum est laoreet leo rutrum pellentesque. Nulla id dui efficitur, accumsan dui vitae, maximus dui. Sed venenatis interdum bibendum. Maecenas egestas hendrerit congue.</p>\r\n<p>Morbi lacinia, nulla nec vulputate elementum, nisi lorem cursus est, sit amet finibus odio arcu vel erat. Sed at urna a velit tincidunt mollis. Nulla sollicitudin lorem ac libero tincidunt accumsan. Pellentesque ullamcorper rutrum sem, eu pretium dolor tempor a. Phasellus non velit iaculis, tempor arcu non, condimentum velit. Proin interdum sit amet libero sit amet semper. Fusce imperdiet metus at est tempor dictum in vel est.</p>\r\n<p>Sed ac commodo diam. Suspendisse fringilla vulputate massa sit amet pellentesque. Sed rhoncus malesuada laoreet. In eu elementum diam. Sed vitae turpis eu mi rhoncus vestibulum id vitae risus. Nulla condimentum enim sed ornare pellentesque. Aliquam aliquam vitae nisl quis efficitur. Maecenas rutrum eget turpis et cursus. Nunc non lacus velit. Nulla laoreet risus ipsum, vel vehicula metus euismod vel. Sed lacus dolor, pretium vitae nisl ut, auctor finibus enim.</p>\r\n<p>Vivamus ornare, mauris quis egestas blandit, nisi magna dapibus ipsum, vel blandit sapien nulla ut purus. Nulla convallis, dolor ut tristique rutrum, dui nulla vestibulum arcu, a congue nibh sem sed nunc. Suspendisse fermentum vitae lectus quis lobortis. Nulla sit amet massa dictum, consequat enim non, mattis massa. Nunc tristique mauris eget leo scelerisque, in mollis nisi consequat. Nulla facilisi. Donec bibendum ipsum ac massa sollicitudin convallis. Vestibulum id vehicula velit. Phasellus finibus dolor ac neque fringilla commodo non vitae tellus.</p>');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `login` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Rodrigo Mendes','rods.eduardo@gmail.com','e10adc3949ba59abbe56e057f20f883e','rodseduardo'),(9,'admin','admin@admin.com.br','81dc9bdb52d04dc20036dbd8313ed055','admin'),(10,'Just Digital','just@justdigital.com.br','81dc9bdb52d04dc20036dbd8313ed055','just');
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

-- Dump completed on 2017-09-05 10:42:07
