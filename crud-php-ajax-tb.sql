CREATE SCHEMA IF NOT EXISTS `usuarios` DEFAULT CHARACTER SET utf8 COLLATE
utf8_general_ci ;
use usuarios;
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    telefono VARCHAR(15),
    rol VARCHAR(50),
    fecha_union DATE,
    salario DECIMAL(10, 2),
    password VARCHAR(255) NOT NULL,
    genero VARCHAR(20) 
);
ALTER TABLE `usuarios`.`usuarios` 
ADD COLUMN `genero` VARCHAR(20) NULL AFTER `password`;

ALTER TABLE `usuarios`.`usuarios` 
ADD COLUMN `updated_at`  datetime   NULL AFTER `genero`;

ALTER TABLE `usuarios`.`usuarios` 
ADD COLUMN `deleted_at`  datetime   NULL AFTER `updated_at`;

ALTER TABLE `usuarios`.`usuarios` 
ADD COLUMN `intentos`  INT DEFAULT 0  AFTER `deleted_at`;

ALTER TABLE `usuarios`.`usuarios` 
ADD COLUMN `tiempo_block`  DATETIME DEFAULT NULL AFTER `intentos`;

#'$10$gB87gi7EQ1KZjUqgESLEv.HNQPonG9k7oDwb0Pspr5TmbkwwEbY8K' = 12

INSERT INTO usuarios (nombre, email, telefono, rol, fecha_union, salario, password) VALUES
('Jared Buenrostro', 'jared.buenrostro@example.com', '+1234567890', 'Diseñador', '2014-10-12', 1200.00, '$10$gB87gi7EQ1KZjUqgESLEv.HNQPonG9k7oDwb0Pspr5TmbkwwEbY8K'),
('Marco Hernández', 'marco.hernandez@example.com', '+1234567891', 'Desarrollador', '2014-09-10', 1800.00, '$10$gB87gi7EQ1KZjUqgESLEv.HNQPonG9k7oDwb0Pspr5TmbkwwEbY8K'),
('Sofía Martínez', 'sofia.martinez@example.com', '+1234567892', 'Gerente de Proyecto', '2015-01-15', 2500.00, '$10$gB87gi7EQ1KZjUqgESLEv.HNQPonG9k7oDwb0Pspr5TmbkwwEbY8K'),
('Carlos Ruiz', 'carlos.ruiz@example.com', '+1234567893', 'Analista de Datos', '2016-03-20', 2000.00, '$10$gB87gi7EQ1KZjUqgESLEv.HNQPonG9k7oDwb0Pspr5TmbkwwEbY8K'),
('Ana López', 'ana.lopez@example.com', '+1234567894', 'Desarrolladora', '2017-05-10', 1900.00, '$10$gB87gi7EQ1KZjUqgESLEv.HNQPonG9k7oDwb0Pspr5TmbkwwEbY8K'),
('Luis Torres', 'luis.torres@example.com', '+1234567895', 'Diseñador', '2018-07-18', 1600.00, '$10$gB87gi7EQ1KZjUqgESLEv.HNQPonG9k7oDwb0Pspr5TmbkwwEbY8K'),
('Laura Pérez', 'laura.perez@example.com', '+1234567896', 'Analista de Calidad', '2019-08-22', 1700.00, '$10$gB87gi7EQ1KZjUqgESLEv.HNQPonG9k7oDwb0Pspr5TmbkwwEbY8K'),
('Miguel Sánchez', 'miguel.sanchez@example.com', '+1234567897', 'Desarrollador', '2020-09-25', 2100.00, '$10$gB87gi7EQ1KZjUqgESLEv.HNQPonG9k7oDwb0Pspr5TmbkwwEbY8K'),
('Lucía Gómez', 'lucia.gomez@example.com', '+1234567898', 'Gerente de Marketing', '2021-11-30', 2300.00, '$10$gB87gi7EQ1KZjUqgESLEv.HNQPonG9k7oDwb0Pspr5TmbkwwEbY8K'),
('David Fernández', 'david.fernandez@example.com', '+1234567899', 'Especialista en SEO', '2022-02-14', 2200.00, '$10$gB87gi7EQ1KZjUqgESLEv.HNQPonG9k7oDwb0Pspr5TmbkwwEbY8K');

