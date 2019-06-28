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

-- Dump della struttura di tabella museo.opera
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- L’esportazione dei dati non era selezionata.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
