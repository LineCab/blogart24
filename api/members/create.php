<?php

<<<<<<< HEAD
// prenomMemb - nomMemb - pseudoMemb - passMemb - eMailMemb - dtCreaMemb
// numMemb - dtMajMemb - accordMemb - numStat


require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$prenomMemb = ctrlSaisies($_POST['prenomMemb']);
$nomMemb = ctrlSaisies($_POST['nomMemb']);
$pseudoMemb = ctrlSaisies($_POST['pseudoMemb']);
$passMemb = ctrlSaisies($_POST['passMemb']);
$eMailMemb = ctrlSaisies($_POST['eMailMemb']);
$dtCreaMemb = date("Y-m-d H:i:s");
$accordMemb = ctrlSaisies($_POST['accordMemb']);
$numStat = ctrlSaisies($_POST['numStat']);

sql_insert('ARTICLE', '`prenomMemb`, `nomMemb`, `pseudoMemb`, `passMemb`, `eMailMemb`, `dtCreaMemb`, `accordMemb`, `numStat`', "'$prenomMemb', '$nomMemb', '$pseudoMemb', '$passMemb', '$eMailMemb', '$dtCreaMemb', '$accordMemb', '$numStat'");

header('Location: ../../views/backend/articles/list.php');
=======
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
    die("Erreur de connexion : " . $conn->connect_error);
}

// Récupération des données depuis la requête POST
$pseudo = isset($_POST['pseudo']) ? ctrlSaisies($_POST['pseudo']) : '';
$nom = isset($_POST['nom']) ? ctrlSaisies($_POST['nom']) : '';
$prenom = isset($_POST['prenom']) ? ctrlSaisies($_POST['prenom']) : '';
$dateCreation = date("Y-m-d H:i:s"); // Date du jour et heure actuelle

// Validation des champs
if (strlen($pseudo) < 6 || strlen($pseudo) > 70) {
    die("Le pseudo doit avoir entre 6 et 70 caractères.");
}

if (empty($nom) || empty($prenom)) {
    die("Les champs nom et prénom sont obligatoires.");
}

// Vérification de l'existence du pseudo dans la base de données
$sqlPseudoExist = "SELECT id FROM membres WHERE pseudo = '$pseudo'";
$resultPseudoExist = $conn->query($sqlPseudoExist);

if ($resultPseudoExist->num_rows > 0) {
    die("Le pseudo existe déjà.");
}

// Insertion du nouveau membre
$sqlInsert = "INSERT INTO membres (pseudo, nom, prenom, date_creation) VALUES ('$pseudo', '$nom', '$prenom', '$dateCreation')";
if ($conn->query($sqlInsert) === TRUE) {
    echo "Membre créé avec succès.";
} else {
    echo "Erreur : " . $sqlInsert . "<br>" . $conn->error;
}

// 4. date de modification du membre : 

    

// Fermeture de la connexion à la base de données
$conn->close();

// Redirection vers la liste des statuts
header('Location: ../../views/backend/statuts/list.php');
?>
>>>>>>> bad7c6ebd62e3eb89dd1f4bca4fadc12091a836f
