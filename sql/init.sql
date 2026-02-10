CREATE DATABASE IF NOT EXISTS planify
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE planify;

CREATE TABLE IF NOT EXISTS categoria (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(80) NOT NULL
);

INSERT INTO categoria(nombre) VALUES
('Deporte'),
('Bienestar'),
('Gastronomía');