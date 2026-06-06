<?php

try {
    $pdo = new PDO ("mysql:host=localhost,dbname=bibliotheque", "root", "root");
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e -> getMessage();
};