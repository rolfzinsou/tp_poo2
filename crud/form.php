<?php
require "connexion.php";
// creer un formulaire pour ajouter un etudiant dans la base de données pour les afficher au index.php
if ( isset($_POST['envoyer']) ) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "INSERT INTO etudiant (nom, prenom, email, age) VALUES ('$nom', '$prenom', '$email', '$age')";
    $result = $connexion -> query($sql);
    if ($result) {
        header("Location: index.php");
        exit();
    } else {
        echo "Erreur lors de l'insertion de l'étudiant.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un étudiant</title>
</head>
<body>
    <h1>Ajouter un étudiant</h1>
    <form method="POST" action="">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br><br>
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="age">Âge:</label>
        <input type="number" id="age" name="age" required><br><br>
        <input type="submit" name="envoyer" value="Ajouter">
    </form>
</body>
</html>