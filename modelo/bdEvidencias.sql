

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `EVIDENCIA` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `TITULO` varchar(100) NOT NULL,
  `AUTOR_EVIDENCIA` varchar(15) NOT NULL,
  `CONDICION` varchar(1) NOT NULL,
  `CAPITULO` varchar(50) DEFAULT NULL,
  `SECCIONES` varchar(50) NOT NULL,
  `ARTICULOS` varchar(50) NOT NULL,
  `LITERALES` varchar(50) NOT NULL,
  `NUMERALES` varchar(50) NOT NULL,
  `PARAGRAFOS` varchar(50) NOT NULL,
  `FECHA` varchar(50) NOT NULL,
  `CORDENADA_X` varchar(100) NOT NULL,
  `CORDENADA_Y` varchar(100) NOT NULL,
  `OBSERVACION` varchar(100) NOT NULL,
  `ESTADO` varchar(50) NOT NULL,
  `NOMBRE_EVIDENCIA` varchar(100) NOT NULL,
  `ESTADO_LOGICO` varchar(8) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

