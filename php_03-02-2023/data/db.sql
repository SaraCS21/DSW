CREATE DATABASE IF NOT EXISTS agenda;
USE agenda;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    dni VARCHAR(9) NOT NULL,
    name VARCHAR(30) NOT NULL,
    surname VARCHAR(40) NOT NULL,
    email VARCHAR(40) NOT NULL,
    phone INT(9) NOT NULL
);

-- INSERT INTO users (dni, name, surname, email, phone) VALUES
-- ("15425647A", "Juan", "Sánchez Rodríguez", "juan@gmail.com", 123456789),
-- ("15425647B", "Rodrigo", "Rodríguez Sánchez", "rodrigo@gmail.com", 123456789),
-- ("15425647C", "María", "Santana Rodríguez", "maria@gmail.com", 123456789),
-- ("15425647D", "Pedro", "Ramos Ramos", "pedro@gmail.com", 123456789),
-- ("15425647E", "Rosario", "Ramos Sánchez", "rosario@gmail.com", 123456789),
-- ("15425647F", "Beatriz", "Santana Santana", "beatriz@gmail.com", 123456789),
-- ("15425647G", "Nira", "Sánchez Sánchez", "nira@gmail.com", 123456789),
-- ("15425647H", "Alejandro", "Rodríguez Rodríguez", "alejandro@gmail.com", 123456789),
-- ("15425647I", "Lucas", "Sánchez Rodríguez", "lucas@gmail.com", 123456789),
-- ("15425647J", "Carla", "Rodríguez Rodríguez", "carla@gmail.com", 123456789);