CREATE DATABASE IF NOT EXISTS supermarket;
USE supermarket;

CREATE TABLE customer (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    surname VARCHAR(40) NOT NULL,
    phone INT(9) NOT NULL
);

INSERT INTO customer (name, surname, phone) VALUES
("Juan", "Sánchez Rodríguez", 123456789),
("Rodrigo", "Rodríguez Sánchez", 123456789),
("María", "Santana Rodríguez", 123456789),
("Pedro", "Ramos Ramos", 123456789),
("Rosario", "Ramos Sánchez", 123456789),
("Beatriz", "Santana Santana", 123456789),
("Nira", "Sánchez Sánchez", 123456789),
("Alejandro", "Rodríguez Rodríguez", 123456789);