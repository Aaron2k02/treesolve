-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema natureData
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema natureData
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `natureData` DEFAULT CHARACTER SET utf8 ;
USE `natureData` ;

-- -----------------------------------------------------
-- Table `natureData`.`article`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `natureData`.`article` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `content` MEDIUMBLOB NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `natureData`.`tree`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `natureData`.`tree` (
  `species` VARCHAR(45) NOT NULL,
  `location` VARCHAR(45) NULL,
  `soil_type` VARCHAR(45) NULL,
  `characteristic` VARCHAR(255) NULL,
  `benefits` VARCHAR(512) NULL,
  `image_path` VARCHAR(45) NULL,
  PRIMARY KEY (`species`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `natureData`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `natureData`.`user` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `contact_number` VARCHAR(15) NOT NULL,
  `in_mailing_list` TINYINT NOT NULL,
  PRIMARY KEY (`user_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `natureData`.`activity`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `natureData`.`activity` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `description` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `natureData`.`involve`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `natureData`.`involve` (
  `user_id` INT NOT NULL,
  `activity_id` INT NOT NULL,
  PRIMARY KEY (`user_id`, `activity_id`),
  INDEX `fk_involve_activity_idx` (`activity_id` ASC) VISIBLE,
  CONSTRAINT `fk_involve_activity`
    FOREIGN KEY (`activity_id`)
    REFERENCES `natureData`.`activity` (`id`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE,
  CONSTRAINT `fk_involve_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `natureData`.`user` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
