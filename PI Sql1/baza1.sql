-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.19 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
CREATE TABLE `recepcija` (
	`ID` INT(10) NOT NULL AUTO_INCREMENT,
	`ime_gosta` VARCHAR(255) NOT NULL DEFAULT '' COLLATE 'utf8mb4_0900_ai_ci',
	`cijena_sobe` INT(10) NOT NULL DEFAULT '0',
	`dorucak` VARCHAR(50) NOT NULL DEFAULT 'Da' COLLATE 'utf8mb4_0900_ai_ci',
	PRIMARY KEY (`ID`) USING BTREE
);
COLLATE='utf8mb4_0900_ai_ci';
ENGINE=InnoDB;
CREATE TABLE `soba` (
	`ID` INT(10) NOT NULL AUTO_INCREMENT,
	`recepcija_id` INT(10) NOT NULL,
	`posteljina` INT(10) NOT NULL,
	PRIMARY KEY (`ID`) USING BTREE,
	INDEX `recepcija_id` (`recepcija_id`) USING BTREE,
	CONSTRAINT `FK_soba_recepcija` FOREIGN KEY (`recepcija_id`) REFERENCES `baza1`.`recepcija` (`ID`) ON UPDATE NO ACTION ON DELETE NO ACTION
);
COLLATE='utf8mb4_0900_ai_ci';
ENGINE=InnoDB;

-- Dumping data for table baza1.recepcija: ~0 rows (approximately)
/*!40000 ALTER TABLE `recepcija` DISABLE KEYS */;
INSERT INTO `recepcija` (`ID`, `ime_gosta`, `cijena_sobe`, `dorucak`) VALUES
	(1, 'Ivan', 50, 'Da'),
	(2, 'Marija', 60, 'Kava'),
	(3, 'Zvonimir', 70, 'Palacinke');
/*!40000 ALTER TABLE `recepcija` ENABLE KEYS */;

-- Dumping data for table baza1.soba: ~0 rows (approximately)
/*!40000 ALTER TABLE `soba` DISABLE KEYS */;
INSERT INTO `soba` (`ID`, `recepcija_id`, `posteljina`) VALUES
	(1, 1, 60),
	(2, 2, 65),
	(3, 2, 55);
/*!40000 ALTER TABLE `soba` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
