<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';
require_once '../../functions/getExistPseudo.php';

$error = false;

if (isset($_POST['nomMemb'], $_POST['prenomMemb'])) {
    $nom = ctrlSaisies($_POST['nomMemb']);
    $prenom = ctrlSaisies($_POST['prenomMemb']);
}else{
    die("Les champs nom et prénom sont obligatoires.");
    $error = true;
}

$pseudo = ctrlSaisies($_POST['pseudoMemb']);
if (strlen($pseudo) < 6 || strlen($pseudo) > 70) {
    die("Le pseudo doivent être compris entre 6 et 70 caractères");
    $error = true;
}
elseif (get_ExistPseudo($pseudo) > 0) {
    die("Le pseudo existe déjà.");
    $error = true;
}

$dateCreation = date("Y-m-d H:i:s"); 
$dtMajMemb = NULL; 

//verif email

if (isset($_POST['email1'], $_POST['email2'])) {

    $email1 = $_POST['email1'];
    $email2 = $_POST['email2'];
    
    $patternMail = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/';

    if (!preg_match($patternMail, $email1) || !preg_match($patternMail, $email2)) {
        die("Veuillez saisir des adresses email valides.");
        $error = true;
    }
    
    if ($email1 !== $email2) {
        die("Les adresses email ne correspondent pas.");
        $error = true;
    }

}else{
    die("Veuillez saisir des adresses email.");
    $error = true;
}

if (isset($_POST['passMemb1'], $_POST['passMemb2'])) {

    $mdp1 = $_POST['passMemb1'];
    $mdp2 = $_POST['passMemb2'];

    $patternMdp = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,15}$/';
    preg_match($patternMdp, $motDePasse);

    if (!preg_match($patternMdp, $mdp1) || !preg_match($patternMdp, $mdp2)) {
        die("Les mots de passe doivent être compris entre 8 et 15 caractères, avec au moins une majuscule, une minuscule, un chiffre et un caractère spécial.");
        $error = true;
    }
    
    if ($mdp1 !== $mdp2) {
        die("Les adresses email ne correspondent pas.");
        $error = true;
    }
    
}else{
    $error = true;
}

$numStat = $_POST['numStat'];

if (!$error){
    sql_insert('MEMBRE', 'nomMemb, prenomMemb, pseudoMemb, passMemb, eMailMemb, accordMemb, numStat', " '$nom', '$prenom', '$pseudo', '$mdp1', '$email1', 1, '$numStat'");
}else{
    die("erreur");
}

header('Location: ../../views/backend/members/list.php');
?>
