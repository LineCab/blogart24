<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';
require_once '../../functions/getExistPseudo.php';

$numMemb = $_GET["numMemb"];

$error = false;
if (!empty($_POST['nomMemb']) && !empty($_POST['prenomMemb'])) {
    $nom = ctrlSaisies($_POST['nomMemb']);
    $prenom = ctrlSaisies($_POST['prenomMemb']);
}else{
    die("Les champs nom et prénom sont obligatoires.");
    
}


if (isset($_POST['email1']) && isset($_POST['email2'])) {

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

$mdp1 = $_POST['passMemb1'];
$mdp2 = $_POST['passMemb2'];
if (!empty($_POST['passMemb1']) && !empty($_POST['passMemb2'])) {

    $mdp1 = $_POST['passMemb1'];
    $mdp2 = $_POST['passMemb2'];

    $patternMdp = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,15}$/';

    if (!preg_match($patternMdp, $mdp1) || !preg_match($patternMdp, $mdp2)) {
        die("Les mots de passe doivent être compris entre 8 et 15 caractères, avec au moins une majuscule, une minuscule, un chiffre et un caractère spécial.");
        $error = true;
    }
    
    if ($mdp1 !== $mdp2) {
        die("Les mots de passe ne correspondent pas.");
        $error = true;
    }
    
}else{
    die("Veuillez saisir un mot de passe");
    $error = true;
}

$numStat = $_POST['numStat'];
$dtMajMemb = date("Y-m-d H:i:s");


if (!$error){

    $mdpHash = password_hash($mdp1, PASSWORD_DEFAULT);
    
    sql_update('Membre', "`dtMajMemb`='$dtMajMemb', `nomMemb`='$nom', `prenomMemb`='$prenom', `passMemb`='$mdpHash', `eMailMemb`='$email1', `numStat`='$numStat'", "numMemb = $numMemb");

}else{
    die("erreur");
}

header('Location: ../../views/backend/members/list.php');
?>
