<?php
$servername = "db";
$username = "root";
$password = "root";
$database = "TP6-e-commerce";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie à la base de données";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}