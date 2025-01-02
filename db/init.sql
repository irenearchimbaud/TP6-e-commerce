CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE
);

INSERT INTO users (name, email) VALUES ('Alice', 'alice@example.com');