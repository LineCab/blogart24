<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';
date_default_timezone_set('UTC+1');
$numArt = ctrlSaisies($_GET['numArt']);
$dtMajArt = date("Y-m-d H:i:s");
$libTitrArt = bbCodeToHtml(ctrlSaisies($_POST['libTitrArt']));
$libChapoArt = bbCodeToHtml(ctrlSaisies($_POST['libChapoArt']));
$libAccrochArt = bbCodeToHtml(ctrlSaisies($_POST['libAccrochArt']));
$parag1Art = bbCodeToHtml(ctrlSaisies($_POST['parag1Art']));
$libSsTitr1Art = bbCodeToHtml(ctrlSaisies($_POST['libSsTitr1Art']));
$parag2Art = bbCodeToHtml(ctrlSaisies($_POST['parag2Art']));
$libSsTitr2Art = bbCodeToHtml(ctrlSaisies($_POST['libSsTitr2Art']));
$parag3Art = bbCodeToHtml(ctrlSaisies($_POST['parag3Art']));
$libConclArt = bbCodeToHtml(ctrlSaisies($_POST['libConclArt']));
$numThem = bbCodeToHtml(ctrlSaisies($_POST['numThem']));

// Récupérer le nom de l'ancienne image
$ancienneImage = sql_select("ARTICLE", "urlPhotArt", "numArt = $numArt")[0]['urlPhotArt'];

if (isset($_FILES['urlPhotArt'])) {
    $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/src/uploads/';
    $urlPhotArt = $_FILES['urlPhotArt']['name'];
    $uploadPath = $uploadDir . $urlPhotArt;
    move_uploaded_file($_FILES['urlPhotArt']['tmp_name'], $uploadPath);

    if (!empty($ancienneImage)) {
        unlink($uploadDir . $ancienneImage);
    }
}

sql_update('ARTICLE', "`dtMajArt`='$dtMajArt', `libTitrArt`='$libTitrArt', `libChapoArt`='$libChapoArt', `libAccrochArt`='$libAccrochArt', `parag1Art`='$parag1Art', `libSsTitr1Art`='$libSsTitr1Art', `parag2Art`='$parag2Art', `libSsTitr2Art`='$libSsTitr2Art', `parag3Art`='$parag3Art', `libConclArt`='$libConclArt', `urlPhotArt`='$urlPhotArt', `numThem`='$numThem'", "numArt = $numArt");

header('Location: ../../views/backend/articles/list.php');
