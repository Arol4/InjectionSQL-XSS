<?php
// Crédit Solidaire du Wouri — page de connexion de l'intranet
// Fichier fictif, créé pour le cours de l'IME. Il contient volontairement des failles.

$identifiant = $_POST['identifiant'];
$motdepasse  = $_POST['motdepasse'];

// Requête construite par concaténation des données reçues de l'utilisateur
$requete = "SELECT * FROM agents
            WHERE identifiant = ?
            AND motdepasse = ?";

$stmt = mysqli_prepare($connexion, $requete);
mysqli_stmt_bind_param($stmt, "ss", $identifiant, $motdepasse);
mysqli_stmt_execute($stmt);
$resultat = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($resultat) > 0) {
    echo "Bienvenue " . htmlspecialchars($_GET['nom'], ENT_QUOTES, 'UTF-8');
    // ... ouverture de la session ...
} else {
    echo "Identifiant ou mot de passe incorrect.";
}
?>
