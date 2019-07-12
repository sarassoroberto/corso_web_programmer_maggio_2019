-- --------------------------------------------------------
-- Host:                         localhost
-- Versione server:              5.7.24 - MySQL Community Server (GPL)
-- S.O. server:                  Win64
-- HeidiSQL Versione:            9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dump della struttura del database museo
CREATE DATABASE IF NOT EXISTS `museo` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `museo`;

-- Dump della struttura di tabella museo.museo
DROP TABLE IF EXISTS `museo`;
CREATE TABLE IF NOT EXISTS `museo` (
  `id_museo` int(10) unsigned DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dump dei dati della tabella museo.museo: ~2 rows (circa)
DELETE FROM `museo`;
/*!40000 ALTER TABLE `museo` DISABLE KEYS */;
INSERT INTO `museo` (`id_museo`, `nome`) VALUES
	(1, 'mao'),
	(2, 'gam');
/*!40000 ALTER TABLE `museo` ENABLE KEYS */;

-- Dump della struttura di tabella museo.museo_opera
DROP TABLE IF EXISTS `museo_opera`;
CREATE TABLE IF NOT EXISTS `museo_opera` (
  `id_museo_opera` int(11) DEFAULT NULL,
  `id_opera` int(11) DEFAULT NULL,
  `id_museo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dump dei dati della tabella museo.museo_opera: ~2 rows (circa)
DELETE FROM `museo_opera`;
/*!40000 ALTER TABLE `museo_opera` DISABLE KEYS */;
INSERT INTO `museo_opera` (`id_museo_opera`, `id_opera`, `id_museo`) VALUES
	(NULL, 1, 1),
	(NULL, 2, 2);
/*!40000 ALTER TABLE `museo_opera` ENABLE KEYS */;

-- Dump della struttura di tabella museo.opera
DROP TABLE IF EXISTS `opera`;
CREATE TABLE IF NOT EXISTS `opera` (
  `id_opera` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Autore` varchar(250) DEFAULT '0',
  `Titolo` varchar(250) DEFAULT '0',
  `Datazione` varchar(250) DEFAULT '0',
  `Tecnica` varchar(250) DEFAULT '0',
  `Dimensioni` varchar(250) DEFAULT '0',
  `Immagine` varchar(250) DEFAULT '0',
  `datains` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_opera`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- Dump dei dati della tabella museo.opera: ~3 rows (circa)
DELETE FROM `opera`;
/*!40000 ALTER TABLE `opera` DISABLE KEYS */;
INSERT INTO `opera` (`id_opera`, `Autore`, `Titolo`, `Datazione`, `Tecnica`, `Dimensioni`, `Immagine`, `datains`) VALUES
	(40, 'Mario2', 'Piatto dorato 2', '20ac', 'Mista', '20x20cm', '', '2019-07-10 20:16:33'),
	(41, 'Gianni', 'Pallina', '1.200', 'Gomma', '', '', '2019-07-10 20:19:23'),
	(42, 'Gianni', 'Pallina', '1.200', 'Gomma', '', '', '2019-07-10 20:19:50');
/*!40000 ALTER TABLE `opera` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
