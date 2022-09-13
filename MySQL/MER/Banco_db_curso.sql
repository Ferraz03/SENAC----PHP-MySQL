-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Bd_Curso
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Bd_Curso
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Bd_Curso` DEFAULT CHARACTER SET utf8 ;
USE `Bd_Curso` ;

-- -----------------------------------------------------
-- Table `Bd_Curso`.`Curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Bd_Curso`.`Curso` (
  `Id` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(45) NOT NULL,
  `Horário` VARCHAR(5) NULL,
  `Data_de_início` DATE NULL,
  `Data_de_conclusão` DATE NULL,
  `Ativo` ENUM('1', '0') NOT NULL,
  PRIMARY KEY (`Id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Bd_Curso`.`Alunos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Bd_Curso`.`Alunos` (
  `Id` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(150) NOT NULL,
  `Sexo` ENUM('M', 'F') NOT NULL,
  `Matrícula` VARCHAR(8) NOT NULL,
  `CPF` VARCHAR(14) NOT NULL,
  `Telefone` VARCHAR(45) NOT NULL,
  `Email` VARCHAR(45) NULL,
  `Nota` FLOAT NULL,
  `Curso_Id` INT NOT NULL,
  PRIMARY KEY (`Id`),
  INDEX `fk_Alunos_Curso_idx` (`Curso_Id` ASC) VISIBLE,
  CONSTRAINT `fk_Alunos_Curso`
    FOREIGN KEY (`Curso_Id`)
    REFERENCES `Bd_Curso`.`Curso` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
