-- Creación de la tabla users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Insertar algunos usuarios de ejemplo
INSERT INTO users (username, password) VALUES
('usuario1', 'password1'),
('usuario2', 'password2'),
('admin', 'admin123');

