-- Creación de la tabla articles
CREATE TABLE articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL
);

-- Insertar algunos artículos de ejemplo
INSERT INTO articles (title, content) VALUES
('Artículo 1', 'Contenido del artículo 1...'),
('Artículo 2', 'Contenido del artículo 2...'),
('Artículo 3', 'Contenido del artículo 3...');

