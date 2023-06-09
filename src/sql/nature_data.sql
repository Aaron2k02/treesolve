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
  `date` DATE NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `natureData`.`newsLetterRegistration`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `natureData`.`registration` (
  `registration_id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NOT NULL,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `message` TEXT NOT NULL,
  PRIMARY KEY (`registration_id`)
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `natureData`.`News Letter Registration Faqs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `natureData`.`newsLetterfaqs` (
  `faq_id` INT NOT NULL AUTO_INCREMENT,
  `question` VARCHAR(255) NOT NULL,
  `answer` TEXT NOT NULL,
  PRIMARY KEY (`faq_id`)
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `natureData`.`tree`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `natureData`.`tree` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `species` VARCHAR(45) NOT NULL,
  `location` VARCHAR(45) NULL,
  `soil_type` VARCHAR(45) NULL,
  `characteristic` VARCHAR(255) NULL,
  `benefits` VARCHAR(512) NULL,
  `image_path` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `natureData`.`Get Involved Faqs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `natureData`.`getInvolvedfaqs` (
  `faq_id` INT NOT NULL AUTO_INCREMENT,
  `question` VARCHAR(255) NOT NULL,
  `answer` TEXT NOT NULL,
  PRIMARY KEY (`faq_id`)
) ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `natureData`.`Get Involved Adopt-A-Tree`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `natureData`.`getInvolvedAdoptATree` (
  `adoptatree_id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(20) NOT NULL,
  `availability_date` DATE NOT NULL,
  `availability_time` TIME NOT NULL,
  `additional_request` TEXT,
  PRIMARY KEY (`adoptatree_id`)
) ENGINE = InnoDB;

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


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
