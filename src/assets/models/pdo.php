<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function getPDO(): PDO {
    try {
        $conn = new PDO("mysql:host=db;dbname=TP6-e-commerce", "root", "root");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }
}
