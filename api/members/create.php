<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

// Connexion à la base de données
$servername = "localhost";
$username = "votre_nom_utilisateur";
$password = "votre_mot_de_passe";
$dbname = "votre_base_de_donnees";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion à la base de données
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Récupération du pseudo depuis la requête POST
$pseudo = isset($_POST['pseudo']) ? $_POST['pseudo'] : '';

// Validation du pseudo
if (strlen($pseudo) < 6 || strlen($pseudo) > 70) {
    die("Erreur : Le pseudo doit avoir entre 6 et 70 caractères.");
}

// Vérification de l'existence du pseudo dans la base de données
$sql = "SELECT id FROM membres WHERE pseudo = '$pseudo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    die("Erreur : Le pseudo existe déjà.");
}

// Insertion du nouveau membre dans la base de données
$sqlInsert = "INSERT INTO membres (pseudo) VALUES ('$pseudo')";
if ($conn->query($sqlInsert) === TRUE) {
    echo "Membre créé avec succès.";
} else {
    echo "Erreur : " . $sqlInsert . "<br>" . $conn->error;
}

// Fermeture de la connexion à la base de données
$conn->close();


header('Location: ../../views/backend/statuts/list.php');
?>
