SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `cpus` (
  `model` varchar(255) NOT NULL,
  `jezgre` integer (4) DEFAULT NULL,
  `clock` varchar(255) DEFAULT NULL,
  `cache` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `cpus` (`model`, `jezgre`, `clock`, `cache`) VALUES
('i9 9980xe', '18', '2.7 Ghz', '18 MB');
COMMIT;

