-- MySQL Script generated by MySQL Workbench
-- Fri Jun  7 11:31:19 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema ficharpg
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ficharpg
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ficharpg` DEFAULT CHARACTER SET utf8 ;
USE `ficharpg` ;

-- -----------------------------------------------------
-- Table `ficharpg`.`Login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ficharpg`.`Login` (
  `id_login` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(50) NULL,
  `senha` VARCHAR(32) NULL,
  `email` VARCHAR(45) NULL,
  PRIMARY KEY (`id_login`),
  UNIQUE INDEX `usuario_UNIQUE` (`usuario` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ficharpg`.`Pericias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ficharpg`.`Pericias` (
  `id_pericias` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NULL,
  `ponto` BINARY(1) NULL,
  PRIMARY KEY (`id_pericias`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ficharpg`.`Resistencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ficharpg`.`Resistencia` (
  `id_resistencia` INT NOT NULL AUTO_INCREMENT,
  `ponto` BINARY(1) NULL,
  PRIMARY KEY (`id_resistencia`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ficharpg`.`Modificador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ficharpg`.`Modificador` (
  `id_modificador` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NULL,
  `valor` INT NULL,
  `fk_id_pericias` INT NOT NULL,
  `fk_id_resistencia` INT NOT NULL,
  PRIMARY KEY (`id_modificador`),
  INDEX `fk_Modificador_Pericias1_idx` (`fk_id_pericias` ASC),
  INDEX `fk_Modificador_Resistencia1_idx` (`fk_id_resistencia` ASC),
  CONSTRAINT `fk_Modificador_Pericias1`
    FOREIGN KEY (`fk_id_pericias`)
    REFERENCES `ficharpg`.`Pericias` (`id_pericias`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Modificador_Resistencia1`
    FOREIGN KEY (`fk_id_resistencia`)
    REFERENCES `ficharpg`.`Resistencia` (`id_resistencia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ficharpg`.`Status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ficharpg`.`Status` (
  `id_status` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NULL,
  `valor` INT NULL,
  `fk_id_modificador` INT NOT NULL,
  PRIMARY KEY (`id_status`),
  INDEX `fk_Status_Modificador1_idx` (`fk_id_modificador` ASC),
  CONSTRAINT `fk_Status_Modificador1`
    FOREIGN KEY (`fk_id_modificador`)
    REFERENCES `ficharpg`.`Modificador` (`id_modificador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ficharpg`.`Atributos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ficharpg`.`Atributos` (
  `id_atributos` INT NOT NULL AUTO_INCREMENT,
  `inspiracaol` INT NULL,
  `bonusProficiencia` INT NULL,
  `arrmadura` INT NULL,
  `iniciativa` INT NULL,
  `deslocamento` INT NULL,
  `pvTotais` INT NULL,
  `pvAtual` INT NULL,
  `pvTemporario` INT NULL,
  `dadoVida` VARCHAR(10) NULL,
  `datoVidaTotal` INT NULL,
  `percepcao` INT NULL,
  PRIMARY KEY (`id_atributos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ficharpg`.`Personalidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ficharpg`.`Personalidade` (
  `id_personalidade` INT NOT NULL AUTO_INCREMENT,
  `personalidade` VARCHAR(1000) NULL,
  `ideais` VARCHAR(1000) NULL,
  `ligacoes` VARCHAR(1000) NULL,
  `defeitos` VARCHAR(1000) NULL,
  PRIMARY KEY (`id_personalidade`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ficharpg`.`Ouro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ficharpg`.`Ouro` (
  `id_ouro` INT NOT NULL AUTO_INCREMENT,
  `pc` INT NULL,
  `pp` INT NULL,
  `pe` INT NULL,
  `po` INT NULL,
  `pl` INT NULL,
  PRIMARY KEY (`id_ouro`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ficharpg`.`Equipamentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ficharpg`.`Equipamentos` (
  `id_equipamentos` INT NOT NULL AUTO_INCREMENT,
  `equipamentos` VARCHAR(5000) NULL,
  `fk_id_ouro` INT NOT NULL,
  PRIMARY KEY (`id_equipamentos`),
  INDEX `fk_Equipamentos_Ouro1_idx` (`fk_id_ouro` ASC),
  CONSTRAINT `fk_Equipamentos_Ouro1`
    FOREIGN KEY (`fk_id_ouro`)
    REFERENCES `ficharpg`.`Ouro` (`id_ouro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ficharpg`.`Habilidades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ficharpg`.`Habilidades` (
  `id_habilidades` INT NOT NULL AUTO_INCREMENT,
  `habilidades` VARCHAR(5000) NULL,
  PRIMARY KEY (`id_habilidades`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ficharpg`.`Caracteristicas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ficharpg`.`Caracteristicas` (
  `id_caracteristicas` INT NOT NULL AUTO_INCREMENT,
  `idade` VARCHAR(10) NULL,
  `altura` VARCHAR(10) NULL,
  `peso` VARCHAR(10) NULL,
  `olhos` VARCHAR(20) NULL,
  `pele` VARCHAR(20) NULL,
  `cabelos` VARCHAR(20) NULL,
  PRIMARY KEY (`id_caracteristicas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ficharpg`.`Aparencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ficharpg`.`Aparencia` (
  `id_aparencia` INT NOT NULL AUTO_INCREMENT,
  `caminhoImagem` VARCHAR(100) NULL,
  `tamanho` VARCHAR(25) NULL,
  `tipo` VARCHAR(10) NULL,
  PRIMARY KEY (`id_aparencia`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ficharpg`.`Historia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ficharpg`.`Historia` (
  `id_historia` INT NOT NULL AUTO_INCREMENT,
  `historia` VARCHAR(5000) NULL,
  `tesouros` VARCHAR(5000) NULL,
  `aliados` VARCHAR(5000) NULL,
  PRIMARY KEY (`id_historia`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ficharpg`.`Personagem`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ficharpg`.`Personagem` (
  `id_personagem` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NULL,
  `classe_nivel` VARCHAR(50) NULL,
  `raca` VARCHAR(50) NULL,
  `antecedente` VARCHAR(50) NULL,
  `tendencia` VARCHAR(50) NULL,
  `xp` VARCHAR(50) NULL,
  `fk_id_login` INT NULL,
  `fk_id_status` INT NULL,
  `fk_id_atributos` INT NULL,
  `fk_id_personalidade` INT NULL,
  `fk_id_equipamentos` INT NULL,
  `fk_id_habilidades` INT NULL,
  `fk_id_caracteristicas` INT NULL,
  `fk_id_aparencia` INT NULL,
  `fk_id_historia` INT NULL,
  PRIMARY KEY (`id_personagem`),
  INDEX `fk_Personagem_Status1_idx` (`fk_id_status` ASC),
  INDEX `fk_Personagem_Atributos1_idx` (`fk_id_atributos` ASC),
  INDEX `fk_Personagem_Personalidade1_idx` (`fk_id_personalidade` ASC),
  INDEX `fk_Personagem_Equipamentos1_idx` (`fk_id_equipamentos` ASC),
  INDEX `fk_Personagem_Habilidades1_idx` (`fk_id_habilidades` ASC),
  INDEX `fk_Personagem_Login1_idx` (`fk_id_login` ASC),
  INDEX `fk_Personagem_Caracteristicas1_idx` (`fk_id_caracteristicas` ASC),
  INDEX `fk_Personagem_Aparencia1_idx` (`fk_id_aparencia` ASC),
  INDEX `fk_Personagem_Historia1_idx` (`fk_id_historia` ASC),
  CONSTRAINT `fk_Personagem_Status1`
    FOREIGN KEY (`fk_id_status`)
    REFERENCES `ficharpg`.`Status` (`id_status`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Personagem_Atributos1`
    FOREIGN KEY (`fk_id_atributos`)
    REFERENCES `ficharpg`.`Atributos` (`id_atributos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Personagem_Personalidade1`
    FOREIGN KEY (`fk_id_personalidade`)
    REFERENCES `ficharpg`.`Personalidade` (`id_personalidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Personagem_Equipamentos1`
    FOREIGN KEY (`fk_id_equipamentos`)
    REFERENCES `ficharpg`.`Equipamentos` (`id_equipamentos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Personagem_Habilidades1`
    FOREIGN KEY (`fk_id_habilidades`)
    REFERENCES `ficharpg`.`Habilidades` (`id_habilidades`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Personagem_Login1`
    FOREIGN KEY (`fk_id_login`)
    REFERENCES `ficharpg`.`Login` (`id_login`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Personagem_Caracteristicas1`
    FOREIGN KEY (`fk_id_caracteristicas`)
    REFERENCES `ficharpg`.`Caracteristicas` (`id_caracteristicas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Personagem_Aparencia1`
    FOREIGN KEY (`fk_id_aparencia`)
    REFERENCES `ficharpg`.`Aparencia` (`id_aparencia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Personagem_Historia1`
    FOREIGN KEY (`fk_id_historia`)
    REFERENCES `ficharpg`.`Historia` (`id_historia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ficharpg`.`Armas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ficharpg`.`Armas` (
  `id_arrmas` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NULL,
  `bonus` INT NULL,
  `dano` VARCHAR(10) NULL,
  `tipo` VARCHAR(20) NULL,
  `fk_id_equipamentos` INT NOT NULL,
  PRIMARY KEY (`id_arrmas`),
  INDEX `fk_Armas_Equipamentos1_idx` (`fk_id_equipamentos` ASC),
  CONSTRAINT `fk_Armas_Equipamentos1`
    FOREIGN KEY (`fk_id_equipamentos`)
    REFERENCES `ficharpg`.`Equipamentos` (`id_equipamentos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ficharpg`.`Proficiencias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ficharpg`.`Proficiencias` (
  `id_proficiencias` INT NOT NULL AUTO_INCREMENT,
  `proficiencias` VARCHAR(5000) NULL,
  PRIMARY KEY (`id_proficiencias`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ficharpg`.`PersonagemMagias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ficharpg`.`PersonagemMagias` (
  `id_personagemMagias` INT NOT NULL,
  `nomeMagia` VARCHAR(45) NULL,
  `nivel` VARCHAR(45) NULL,
  PRIMARY KEY (`id_personagemMagias`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ficharpg`.`EspacosMagias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ficharpg`.`EspacosMagias` (
  `id_espacosMagias` INT NOT NULL,
  `espacoTotal` VARCHAR(45) NULL,
  `espacoUsado` VARCHAR(45) NULL,
  `nivel` VARCHAR(45) NULL,
  PRIMARY KEY (`id_espacosMagias`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
