<?php
// Crédit Solidaire du Wouri — recherche d'un client par son nom
// Fichier fictif, créé pour le cours de l'IME. Il contient volontairement des failles.

$nom = $_GET['nom'];

$requete = "SELECT numero_compte, nom, solde FROM clients
            WHERE nom LIKE '%$nom%'";

$resultat = mysqli_query($connexion, $requete);

echo "<h1>Résultats pour : " . $nom . "</h1>";

while ($ligne = mysqli_fetch_assoc($resultat)) {
    echo "<p>" . $ligne['nom'] . " — compte " . $ligne['numero_compte'] . "</p>";
}
?>
