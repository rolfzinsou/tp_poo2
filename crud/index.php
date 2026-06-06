<?php
require "connexion.php";

$sql = "SELECT * FROM etudiant";
$result = $connexion -> query($sql);

// $sql2 = "INSERT INTO etudiant (nom, prenom, email, age) VALUES ('Camaro', 'Ousmane', 'ousking@gmail.com', 14)";
// $result2 = $connexion -> query($sql2);

// $sql3 = "DELETE FROM etudiant WHERE id = 3 and nom = 'Camara'";
// $result3 = $connexion -> query($sql3);

// foreach ( $result as $ligne ) {
//     echo "<br>";
//     echo "Nom : " . $ligne['nom'] . "<br>";
//     echo "Prenom : " . $ligne['prenom'] . "<br>"; 
//     echo "email : " . $ligne['email'] . "<br>"; 
//     echo "age : " . $ligne['age'] . "<br>"; 
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des apprenants</title>
</head>
<body>
    <h1>Liste des apprenants</h1>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Age</th>
        </tr>
        <?php while ( $row =  $result -> fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            <td><?= htmlspecialchars($row['id']) ?></td>
            <td><?= htmlspecialchars($row['nom']) ?></td>
            <td><?= htmlspecialchars($row['prenom']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= htmlspecialchars($row['age']) ?></td>
        </tr>
        <?php endwhile; ?>
</body>
</html>