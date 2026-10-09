<?php
// Crédit Solidaire du Wouri — recherche d'un client par son nom
// Fichier fictif, créé pour le cours de l'IME. Il contient volontairement des failles.

$nom = $_GET['nom'];

$requete = "SELECT numero_compte, nom, solde FROM clients
            WHERE nom LIKE CONCAT('%', ?,'%')";

$stmt = mysqli_prepare($connexion, $requete);
mysqli_stmt_bind_param($stmt, "s", $nom);
mysqli_stmt_execute($stmt);
$resultat = mysqli_stmt_get_result($stmt);

echo "<h1>Résultats pour : " . htmlspecialchars($nom, ENT_QUOTES, 'UTF-8') . "</h1>";

while ($ligne = mysqli_fetch_assoc($resultat)) {
    echo "<p>" . htmlspecialchars($ligne['nom'], ENT_QUOTES, 'UTF-8') . " — compte " . htmlspecialchars($ligne['numero_compte'], ENT_QUOTES, 'UTF-8') . "</p>";
}
?>
