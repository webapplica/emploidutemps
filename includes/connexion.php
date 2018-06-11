<?php
$server = "localhost";
$login = "root";
$motdepasse = "";
$db = "emploidutemps_db";

// creation de la connexion
$conn = new mysqli($server, $login, $motdepasse,$db);

// vérifier la connexion
if ($conn->connect_error) {
    die("Connexion echouée: " . $conn->connect_error);
} 
?>