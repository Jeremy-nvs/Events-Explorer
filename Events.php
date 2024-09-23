<?php
$servername = "mysql-sellierlea.alwaysdata.net";
$username = "377154_admin";
$password = "Admin123";
$dbname = "sellierlea_eventexplorer";

// Créer une connexion
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier la connexion
if (!$conn) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}
echo "Connexion établie avec succès";
?>