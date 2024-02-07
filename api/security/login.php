<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';
require_once '../../functions/getExistPseudo.php';

$pseudo = $_POST["pseudoMemb"];
$pass = $_POST["passMemb"];

if (get_ExistPseudo($pseudo)){
    $resultat = sql_select("MEMBRE", "*", "pseudoMemb = '$pseudo'");

    $passMembHash = $resultat[0]['passMemb'];
    if (password_verify($pass, $passMembHash)) {

        session_start();
        $_SESSION['logged'] = true;
        $_SESSION['username'] = $pseudo;
        
        header('Location: ../../index.php');

    } else {
        die("Compte inexistant");
    }
}else {
    die("Compte inexistant");
}