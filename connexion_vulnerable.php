<?php
// Crédit Solidaire du Wouri — page de connexion de l'intranet
// Fichier fictif, créé pour le cours de l'IME. Il contient volontairement des failles.

$identifiant = $_POST['identifiant'];
$motdepasse  = $_POST['motdepasse'];

// Requête construite par concaténation des données reçues de l'utilisateur
$requete = "SELECT * FROM agents
            WHERE identifiant = '$identifiant'
            AND motdepasse = '$motdepasse'";

$resultat = mysqli_query($connexion, $requete);

if (mysqli_num_rows($resultat) > 0) {
    echo "Bienvenue " . $_GET['nom'];   // le nom est réaffiché tel quel dans la page
    // ... ouverture de la session ...
} else {
    echo "Identifiant ou mot de passe incorrect.";
}
?>
