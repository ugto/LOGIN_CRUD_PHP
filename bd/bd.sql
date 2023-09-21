CREATE TABLE `prueba`.`usuarios` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
   nombre VARCHAR(100) NOT NULL,
  email VARCHAR(50) NOT NULL,
  `password` VARCHAR(245) NOT NULL,  
  PRIMARY KEY (`id_usuario`));