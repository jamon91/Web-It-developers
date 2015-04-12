SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `ProyectoWeb` ;
CREATE SCHEMA IF NOT EXISTS `ProyectoWeb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `ProyectoWeb` ;

-- -----------------------------------------------------
-- Table `ProyectoWeb`.`TipoUsuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ProyectoWeb`.`TipoUsuario` (
  `TipoUsuario` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`TipoUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ProyectoWeb`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ProyectoWeb`.`Usuario` (
  `idUsuario` INT NOT NULL,
  `idAmin` INT NOT NULL,
  `Nombre` VARCHAR(45) NULL,
  `Apellidos` VARCHAR(45) NULL,
  `Email` VARCHAR(100) NULL,
  `Password` VARCHAR(45) NULL,
  `Estado` VARCHAR(45) NULL,
  `TipoUsuario` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ProyectoWeb`.`Respaldos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ProyectoWeb`.`Respaldos` (
  `idRespaldos` INT NOT NULL,
  `idUsuario` INT NULL,
  `TipoRespaldo` VARCHAR(45) NULL,
  `EstadoRespaldo` VARCHAR(45) NULL,
  `FechaRespaldo` DATE NULL,
  `VersionRespaldo` INT(11) NULL,
  PRIMARY KEY (`idRespaldos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ProyectoWeb`.`Configuraciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ProyectoWeb`.`Configuraciones` (
  `idConfiguraciones` INT NOT NULL,
  `idUsuario` INT NULL,
  `TipoConfiguracion` VARCHAR(45) NULL,
  `EstadoConfiguracion` VARCHAR(45) NULL,
  `VersionConfiguracion` INT(11) NULL,
  `FechaConfiguracion` DATE NULL,
  PRIMARY KEY (`idConfiguraciones`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
