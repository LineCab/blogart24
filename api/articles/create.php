<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$dtCreaArt = date("Y-m-d H:i:s");  
$libTitrArt = ctrlSaisies($_POST['libTitrArt']);
$libChapoArt = ctrlSaisies($_POST['libChapoArt']);
$libAccrochArt = ctrlSaisies($_POST['libAccrochArt']);
$parag1Art = bbCodeToHtml(ctrlSaisies($_POST['parag1Art']));
$libSsTitr1Art = ctrlSaisies($_POST['libSsTitr1Art']);
$parag2Art = bbCodeToHtml(ctrlSaisies($_POST['parag2Art']));
$libSsTitr2Art = ctrlSaisies($_POST['libSsTitr2Art']);
$parag3Art = bbCodeToHtml(ctrlSaisies($_POST['parag3Art']));
$libConclArt = bbCodeToHtml(ctrlSaisies($_POST['libConclArt']));

if (isset($_FILES['urlPhotArt'])) {
    $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/src/uploads/';
    $urlPhotArt = $_FILES['urlPhotArt']['name'];
    $uploadPath = $uploadDir . $urlPhotArt;
    move_uploaded_file($_FILES['urlPhotArt']['tmp_name'], $uploadPath);
}

$numThem = ctrlSaisies($_POST['numThem']);

sql_insert('ARTICLE', '`dtCreaArt`, `libTitrArt`, `libChapoArt`, `libAccrochArt`, `parag1Art`, `libSsTitr1Art`, `parag2Art`, `libSsTitr2Art`, `parag3Art`, `libConclArt`, `urlPhotArt`, `numThem`', "'$dtCreaArt', '$libTitrArt', '$libChapoArt', '$libAccrochArt', '$parag1Art', '$libSsTitr1Art', '$parag2Art', '$libSsTitr2Art', '$parag3Art', '$libConclArt', '$urlPhotArt', '$numThem'");

header('Location: ../../views/backend/articles/list.php');