-- MySQL Workbench Synchronization
-- Generated: 2020-07-15 02:52
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: user

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `StudentCard` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE IF NOT EXISTS `StudentCard`.`Admin` (
  `iduser` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(70) NULL DEFAULT NULL,
  `password` VARCHAR(255) NULL DEFAULT NULL,
  `Usermail` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) VISIBLE,
  UNIQUE INDEX `Usermail_UNIQUE` (`Usermail` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `StudentCard`.`Etudiant` (
  `Matricule` INT(11) NOT NULL AUTO_INCREMENT,
  `Nom` VARCHAR(45) NULL DEFAULT NULL,
  `Prenom` VARCHAR(45) NULL DEFAULT NULL,
  `Sexe` VARCHAR(45) NULL DEFAULT NULL,
  `DateDeNaissance` DATE NULL DEFAULT NULL,
  `Photo` VARCHAR(45) NULL DEFAULT NULL,
  `Telephone` INT(11) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `Niveau_idNiveau` INT(11) NOT NULL,
  `Niveau_Filière_idFilière` INT(11) NOT NULL,
  `Niveau_Filière_Cycle_idCycle` INT(11) NOT NULL,
  `Filière_idFilière` INT(11) NOT NULL,
  `Filière_Cycle_idCycle` INT(11) NOT NULL,
  `Nationalité_idNationalité` INT(11) NOT NULL,
  `AnnéeAcademique_idAnnéeAcademique` INT(11) NOT NULL,
  `tuteur_idtuteur` INT(11) NOT NULL,
  PRIMARY KEY (`Matricule`, `Niveau_idNiveau`, `Niveau_Filière_idFilière`, `Niveau_Filière_Cycle_idCycle`, `Filière_idFilière`, `Filière_Cycle_idCycle`, `Nationalité_idNationalité`, `AnnéeAcademique_idAnnéeAcademique`, `tuteur_idtuteur`),
  UNIQUE INDEX `Email_UNIQUE` (`Email` ASC) VISIBLE,
  UNIQUE INDEX `Telephone_UNIQUE` (`Telephone` ASC) VISIBLE,
  INDEX `fk_Etudiant_Niveau1_idx` (`Niveau_idNiveau` ASC, `Niveau_Filière_idFilière` ASC, `Niveau_Filière_Cycle_idCycle` ASC) VISIBLE,
  INDEX `fk_Etudiant_Filière1_idx` (`Filière_idFilière` ASC, `Filière_Cycle_idCycle` ASC) VISIBLE,
  INDEX `fk_Etudiant_Nationalité1_idx` (`Nationalité_idNationalité` ASC) VISIBLE,
  INDEX `fk_Etudiant_AnnéeAcademique1_idx` (`AnnéeAcademique_idAnnéeAcademique` ASC) VISIBLE,
  INDEX `fk_Etudiant_tuteur1_idx` (`tuteur_idtuteur` ASC) VISIBLE,
  CONSTRAINT `fk_Etudiant_Niveau1`
    FOREIGN KEY (`Niveau_idNiveau` , `Niveau_Filière_idFilière` , `Niveau_Filière_Cycle_idCycle`)
    REFERENCES `StudentCard`.`Niveau` (`idNiveau` , `Filière_idFilière` , `Filière_Cycle_idCycle`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Etudiant_Filière1`
    FOREIGN KEY (`Filière_idFilière` , `Filière_Cycle_idCycle`)
    REFERENCES `StudentCard`.`Filière` (`idFilière` , `Cycle_idCycle`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Etudiant_Nationalité1`
    FOREIGN KEY (`Nationalité_idNationalité`)
    REFERENCES `StudentCard`.`Nationalité` (`idNationalité`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Etudiant_AnnéeAcademique1`
    FOREIGN KEY (`AnnéeAcademique_idAnnéeAcademique`)
    REFERENCES `StudentCard`.`AnnéeAcademique` (`idAnnéeAcademique`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Etudiant_tuteur1`
    FOREIGN KEY (`tuteur_idtuteur`)
    REFERENCES `StudentCard`.`tuteur` (`idtuteur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `StudentCard`.`Cycle` (
  `idCycle` INT(11) NOT NULL AUTO_INCREMENT,
  `Cyclecol` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idCycle`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `StudentCard`.`Filière` (
  `idFilière` INT(11) NOT NULL AUTO_INCREMENT,
  `Filièrecol` VARCHAR(45) NULL DEFAULT NULL,
  `Cycle_idCycle` INT(11) NOT NULL,
  PRIMARY KEY (`idFilière`, `Cycle_idCycle`),
  INDEX `fk_Filière_Cycle1_idx` (`Cycle_idCycle` ASC) VISIBLE,
  CONSTRAINT `fk_Filière_Cycle1`
    FOREIGN KEY (`Cycle_idCycle`)
    REFERENCES `StudentCard`.`Cycle` (`idCycle`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `StudentCard`.`Niveau` (
  `idNiveau` INT(11) NOT NULL,
  `année` VARCHAR(45) NULL DEFAULT NULL,
  `Filière_idFilière` INT(11) NOT NULL,
  `Filière_Cycle_idCycle` INT(11) NOT NULL,
  `Cycle_idCycle` INT(11) NOT NULL,
  PRIMARY KEY (`idNiveau`, `Filière_idFilière`, `Filière_Cycle_idCycle`, `Cycle_idCycle`),
  INDEX `fk_Niveau_Filière1_idx` (`Filière_idFilière` ASC, `Filière_Cycle_idCycle` ASC) VISIBLE,
  INDEX `fk_Niveau_Cycle1_idx` (`Cycle_idCycle` ASC) VISIBLE,
  CONSTRAINT `fk_Niveau_Filière1`
    FOREIGN KEY (`Filière_idFilière` , `Filière_Cycle_idCycle`)
    REFERENCES `StudentCard`.`Filière` (`idFilière` , `Cycle_idCycle`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Niveau_Cycle1`
    FOREIGN KEY (`Cycle_idCycle`)
    REFERENCES `StudentCard`.`Cycle` (`idCycle`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `StudentCard`.`Nationalité` (
  `idNationalité` INT(11) NOT NULL AUTO_INCREMENT,
  `Nationalitécol` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idNationalité`),
  UNIQUE INDEX `idNationalité_UNIQUE` (`idNationalité` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `StudentCard`.`tuteur` (
  `idtuteur` INT(11) NOT NULL AUTO_INCREMENT,
  `Nom` VARCHAR(45) NULL DEFAULT NULL,
  `Prenom` VARCHAR(45) NULL DEFAULT NULL,
  `Nuemro` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idtuteur`),
  UNIQUE INDEX `idtuteur_UNIQUE` (`idtuteur` ASC) VISIBLE,
  UNIQUE INDEX `Nuemro_UNIQUE` (`Nuemro` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `StudentCard`.`AnnéeAcademique` (
  `idAnnéeAcademique` INT(11) NOT NULL AUTO_INCREMENT,
  `Année` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`idAnnéeAcademique`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
