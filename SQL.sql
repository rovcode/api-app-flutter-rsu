
CREATE TABLE heroku_35dace404340396.MESA (
  id INT NOT NULL AUTO_INCREMENT,
  num_sillas INT NOT NULL,
  estado VARCHAR(45) NOT NULL DEFAULT 'Disponible',
  piso INT NULL,
  PRIMARY KEY (id)
  )
-- -----------------------------------------------------
CREATE TABLE heroku_35dace404340396.BEBIDAS (
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(45) NOT NULL,
  precio DECIMAL(2,2) NULL,
  detalles TEXT NULL,
  starts INT NULL,
  PRIMARY KEY (id, nombre
  ))
CREATE TABLE heroku_35dace404340396.PLATOS (
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(45) NOT NULL,
  precio DECIMAL(2,2) NULL,
  starts INT NULL,
  detalles TEXT NULL,
  PRIMARY KEY (id)
  )
CREATE TABLE heroku_35dace404340396.users (
  id INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (id)
  )
CREATE TABLE heroku_35dace404340396.RESERVA (
  id INT NOT NULL AUTO_INCREMENT,
  fecha_reserva DATE NULL,
  hora_reserva TIME NULL,
  cant_personas VARCHAR(6) NULL,
  idepleado INT NULL,
  llegadacliente TIME NULL,
  idmesa INT NOT NULL,
  idbebidas INT NOT NULL,
  idplatos INT NOT NULL,
  users_id INT NOT NULL,
  PRIMARY KEY (id),
 )
  ALTER TABLE RESERVA FOREIGN KEY (idmesa) REFERENCES heroku_35dace404340396.MESA (id),
  ALTER TABLE RESERVA REFERENCES heroku_35dace404340396.BEBIDAS (id),
  ALTER TABLE RESERVA FOREIGN KEY (idplatos) REFERENCES heroku_35dace404340396.PLATOS (id),
  ALTER TABLE RESERVA FOREIGN KEY (users_id) REFERENCES heroku_35dace404340396.users (id)



-- -----------------------------------------------------
-- Table heroku_35dace404340396.CALIFICACIONES
-- -----------------------------------------------------
CREATE TABLE heroku_35dace404340396.CALIFICACIONES (
  id INT NOT NULL AUTO_INCREMENT,
  starts VARCHAR(45) NULL,
  comentarios VARCHAR(45) NULL,
  users_id INT NOT NULL,
  PRIMARY KEY (id, users_id),
  INDEX fk_CALIFICACIONES_users1_idx (users_id ASC) VISIBLE,
  CONSTRAINT fk_CALIFICACIONES_users1
    FOREIGN KEY (users_id)
    REFERENCES heroku_35dace404340396.users (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)



-- -----------------------------------------------------
-- Table heroku_35dace404340396.VENTA
-- -----------------------------------------------------
CREATE TABLE heroku_35dace404340396.VENTA (
  idventa INT NOT NULL,
  idCliente INT NULL,
  tipo_comprobante VARCHAR(20) NULL,
  num_comprobante VARCHAR(20) NULL,
  total DECIMAL(10,2) NULL,
  idreserva INT NOT NULL,
  idcalificaciones INT NOT NULL,
  PRIMARY KEY (idventa, idreserva, idcalificaciones),
  INDEX fk_VENTA_RESERVA1_idx (idreserva ASC) VISIBLE,
  INDEX fk_VENTA_CALIFICACIONES1_idx (idcalificaciones ASC) VISIBLE,
  CONSTRAINT fk_VENTA_RESERVA1
    FOREIGN KEY (idreserva)
    REFERENCES heroku_35dace404340396.RESERVA (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_VENTA_CALIFICACIONES1
    FOREIGN KEY (idcalificaciones)
    REFERENCES heroku_35dace404340396.CALIFICACIONES (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)



-- -----------------------------------------------------
-- Table heroku_35dace404340396.LOCAL
-- -----------------------------------------------------
CREATE TABLE heroku_35dace404340396.LOCAL (
  id INT NOT NULL AUTO_INCREMENT,
  aforo INT NOT NULL,
  latitud VARCHAR(50) NULL,
  longitud VARCHAR(50) NULL,
  idmesa INT NOT NULL,
  PRIMARY KEY (id, idmesa),
  INDEX fk_LOCAL_MESA_idx (idmesa ASC) VISIBLE,
  CONSTRAINT fk_LOCAL_MESA
    FOREIGN KEY (idmesa)
    REFERENCES heroku_35dace404340396.MESA (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)



-- -----------------------------------------------------
-- Table heroku_35dace404340396.INSUMOS
-- -----------------------------------------------------
CREATE TABLE heroku_35dace404340396.INSUMOS (
  id INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(45) NULL,
  stokinicial INT NULL,
  medida VARCHAR(45) NULL)



-- -----------------------------------------------------
-- Table heroku_35dace404340396.REALTIME
-- -----------------------------------------------------
CREATE TABLE heroku_35dace404340396.REALTIME (
  id INT NOT NULL AUTO_INCREMENT,
  fecha DATE NULL,
  aforoonline INT NULL,
  idlocal INT NOT NULL,
  PRIMARY KEY (id, idlocal),
  INDEX fk_REALTIME_LOCAL1_idx (idlocal ASC) VISIBLE,
  CONSTRAINT fk_REALTIME_LOCAL1
    FOREIGN KEY (idlocal)
    REFERENCES heroku_35dace404340396.LOCAL (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
