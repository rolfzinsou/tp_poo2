<?php

try {
    $connexion = new PDO (
        "mysql:host=localhost;
        dbname=test_poo", 
        "root", "root");
    echo "Connexion réussie à la base de données.";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e -> getMessage();
}