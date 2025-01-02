<?php
$servername = "db";
$username = "root";
$password = "root";
$database = "TP6-e-commerce";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    header("Location: ./views/home/home.php");
    exit; 
    
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}