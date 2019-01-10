-- MySQL Script generated by MySQL Workbench
-- 09/23/17 23:53:57
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema coopmercaf
-- ------------------------------------------------------- -----------------------------------------------------
-- Schema coopmercaf
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `coopmercaf` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci ;
USE `coopmercaf` ;

-- -----------------------------------------------------
-- Table `coopmercaf`.`departamentos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `coopmercaf`.`departamentos` ;

CREATE TABLE IF NOT EXISTS `coopmercaf`.`departamentos` (
  `id` BIGINT(12) NOT NULL,
  `departamento` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `coopmercaf`.`municipios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `coopmercaf`.`municipios` ;

CREATE TABLE IF NOT EXISTS `coopmercaf`.`municipios` (
  `id` BIGINT(12) NOT NULL,
  `departamentos_id` BIGINT(12) NOT NULL,
  `municipios` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_municipios_departamentos_idx` (`departamentos_id` ASC),
  CONSTRAINT `fk_municipios_departamentos`
    FOREIGN KEY (`departamentos_id`)
    REFERENCES `coopmercaf`.`departamentos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `coopmercaf`.`promociones`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `coopmercaf`.`promociones` ;

CREATE TABLE IF NOT EXISTS `coopmercaf`.`promociones` (
  `id` BIGINT(12) NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NOT NULL,
  `imagen` LONGBLOB NOT NULL,
  `precio` DECIMAL(12,0) NOT NULL,
  `descripcion` LONGTEXT NOT NULL,
  `fecha_inicio` DATE NOT NULL,
  `fecha_finalizacion` DATE NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `coopmercaf`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `coopmercaf`.`usuarios` ;

CREATE TABLE IF NOT EXISTS `coopmercaf`.`usuarios` (
  `id` BIGINT(12) NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(45) NOT NULL,
  `apellidos` VARCHAR(45) NOT NULL,
  `documento` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NULL,
  `departamentos_id` BIGINT(12) NOT NULL,
  `municipios_id` BIGINT(12) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `tipo` VARCHAR(1) NOT NULL,
  `usuario` VARCHAR(12) NOT NULL,
  `contrasena` VARCHAR(12) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_usuarios_departamentos1_idx` (`departamentos_id` ASC),
  INDEX `fk_usuarios_municipios1_idx` (`municipios_id` ASC),
  CONSTRAINT `fk_usuarios_departamentos1`
    FOREIGN KEY (`departamentos_id`)
    REFERENCES `coopmercaf`.`departamentos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_municipios1`
    FOREIGN KEY (`municipios_id`)
    REFERENCES `coopmercaf`.`municipios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `coopmercaf`.`proveedores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `coopmercaf`.`proveedores` ;

CREATE TABLE IF NOT EXISTS `coopmercaf`.`proveedores` (
  `id` BIGINT(12) NOT NULL AUTO_INCREMENT,
  `empresa` VARCHAR(45) NOT NULL,
  `nit` VARCHAR(45) NOT NULL,
  `representante_legal` VARCHAR(100) NOT NULL,
  `documento_identidad` VARCHAR(15) NOT NULL,
  `celular` VARCHAR(15) NOT NULL,
  `celular2` VARCHAR(15) NULL,
  `tel_fijo` VARCHAR(15) NOT NULL,
  `correo` VARCHAR(60) NOT NULL,
  `correo2` VARCHAR(45) NULL,
  `departamentos_id` BIGINT(12) NOT NULL,
  `municipios_id` BIGINT(12) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `usuario` VARCHAR(45) NOT NULL,
  `contrasena` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_proveedores_municipios1_idx` (`municipios_id` ASC),
  INDEX `fk_proveedores_departamentos1_idx` (`departamentos_id` ASC),
  CONSTRAINT `fk_proveedores_municipios1`
    FOREIGN KEY (`municipios_id`)
    REFERENCES `coopmercaf`.`municipios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proveedores_departamentos1`
    FOREIGN KEY (`departamentos_id`)
    REFERENCES `coopmercaf`.`departamentos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `coopmercaf`.`categorias_productos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `coopmercaf`.`categorias_productos` ;

CREATE TABLE IF NOT EXISTS `coopmercaf`.`categorias_productos` (
  `id` BIGINT(12) NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `coopmercaf`.`productos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `coopmercaf`.`productos` ;

CREATE TABLE IF NOT EXISTS `coopmercaf`.`productos` (
  `id` BIGINT(12) NOT NULL AUTO_INCREMENT,
  `categorias_productos_id` BIGINT(12) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_productos_categorias_productos1_idx` (`categorias_productos_id` ASC),
  CONSTRAINT `fk_productos_categorias_productos1`
    FOREIGN KEY (`categorias_productos_id`)
    REFERENCES `coopmercaf`.`categorias_productos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `coopmercaf`.`clientes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `coopmercaf`.`clientes` ;

CREATE TABLE IF NOT EXISTS `coopmercaf`.`clientes` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(45) NOT NULL,
  `apellidos` VARCHAR(45) NOT NULL,
  `documento_identidad` VARCHAR(15) NOT NULL,
  `celular` VARCHAR(15) NOT NULL,
  `celular2` VARCHAR(15) NULL,
  `correo` VARCHAR(60) NOT NULL,
  `correo2` VARCHAR(60) NULL,
  `departamentos_id` BIGINT(12) NOT NULL,
  `municipios_id` BIGINT(12) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `usuario` VARCHAR(45) NOT NULL,
  `contrasena` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_clientes_departamentos1_idx` (`departamentos_id` ASC),
  INDEX `fk_clientes_municipios1_idx` (`municipios_id` ASC),
  CONSTRAINT `fk_clientes_departamentos1`
    FOREIGN KEY (`departamentos_id`)
    REFERENCES `coopmercaf`.`departamentos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_clientes_municipios1`
    FOREIGN KEY (`municipios_id`)
    REFERENCES `coopmercaf`.`municipios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `coopmercaf`.`unidades_medida`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `coopmercaf`.`unidades_medida` ;

CREATE TABLE IF NOT EXISTS `coopmercaf`.`unidades_medida` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `unidad_medida` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `coopmercaf`.`pedidos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `coopmercaf`.`pedidos` ;

CREATE TABLE IF NOT EXISTS `coopmercaf`.`pedidos` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `categorias_productos_id` BIGINT(12) NOT NULL,
  `productos_id` BIGINT(12) NOT NULL,
  `unidades_medida_id` BIGINT NOT NULL,
  `cantidad` DECIMAL(5,0) NULL,
  `fecha` DATE NOT NULL,
  `clientes_id` BIGINT NOT NULL,
  `estado_pedido` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_pedidos_productos1_idx` (`productos_id` ASC),
  INDEX `fk_pedidos_clientes1_idx` (`clientes_id` ASC),
  INDEX `fk_pedidos_categorias_productos1_idx` (`categorias_productos_id` ASC),
  INDEX `fk_pedidos_unidades_medida1_idx` (`unidades_medida_id` ASC),
  CONSTRAINT `fk_pedidos_productos1`
    FOREIGN KEY (`productos_id`)
    REFERENCES `coopmercaf`.`productos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidos_clientes1`
    FOREIGN KEY (`clientes_id`)
    REFERENCES `coopmercaf`.`clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidos_categorias_productos1`
    FOREIGN KEY (`categorias_productos_id`)
    REFERENCES `coopmercaf`.`categorias_productos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidos_unidades_medida1`
    FOREIGN KEY (`unidades_medida_id`)
    REFERENCES `coopmercaf`.`unidades_medida` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `coopmercaf`.`inventarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `coopmercaf`.`inventarios` ;

CREATE TABLE IF NOT EXISTS `coopmercaf`.`inventarios` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `fecha_registro` DATE NOT NULL,
  `precio` DECIMAL(12,0) NOT NULL,
  `descripcion` LONGTEXT NOT NULL,
  `usuarios_id` BIGINT(12) NOT NULL,
  `proveedores_id` BIGINT(12) NOT NULL,
  `categorias_productos_id` BIGINT(12) NOT NULL,
  `productos_id` BIGINT(12) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_inventarios_usuarios1_idx` (`usuarios_id` ASC),
  INDEX `fk_inventarios_proveedores1_idx` (`proveedores_id` ASC),
  INDEX `fk_inventarios_productos1_idx` (`productos_id` ASC),
  INDEX `fk_inventarios_categorias_productos1_idx` (`categorias_productos_id` ASC),
  CONSTRAINT `fk_inventarios_usuarios1`
    FOREIGN KEY (`usuarios_id`)
    REFERENCES `coopmercaf`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inventarios_proveedores1`
    FOREIGN KEY (`proveedores_id`)
    REFERENCES `coopmercaf`.`proveedores` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inventarios_productos1`
    FOREIGN KEY (`productos_id`)
    REFERENCES `coopmercaf`.`productos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inventarios_categorias_productos1`
    FOREIGN KEY (`categorias_productos_id`)
    REFERENCES `coopmercaf`.`categorias_productos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `coopmercaf`.`afiliados`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `coopmercaf`.`afiliados` ;

CREATE TABLE IF NOT EXISTS `coopmercaf`.`afiliados` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(45) NOT NULL,
  `apellidos` VARCHAR(45) NOT NULL,
  `documento_identidad` VARCHAR(15) NOT NULL,
  `celular` VARCHAR(15) NOT NULL,
  `celular2` VARCHAR(15) NULL,
  `tel_fijo` VARCHAR(15) NOT NULL,
  `correo` VARCHAR(60) NOT NULL,
  `correo2` VARCHAR(60) NULL,
  `departamentos_id` BIGINT(12) NOT NULL,
  `municipios_id` BIGINT(12) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `usuario` VARCHAR(12) NOT NULL,
  `contrasena` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_afiliados_departamentos1_idx` (`departamentos_id` ASC),
  INDEX `fk_afiliados_municipios1_idx` (`municipios_id` ASC),
  CONSTRAINT `fk_afiliados_departamentos1`
    FOREIGN KEY (`departamentos_id`)
    REFERENCES `coopmercaf`.`departamentos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_afiliados_municipios1`
    FOREIGN KEY (`municipios_id`)
    REFERENCES `coopmercaf`.`municipios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
