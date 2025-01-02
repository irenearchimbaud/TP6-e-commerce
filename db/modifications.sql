ALTER TABLE users
ADD COLUMN password VARCHAR(255) NOT NULL;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    description TEXT,
    pointure VARCHAR(20),
    modele VARCHAR(50)
);