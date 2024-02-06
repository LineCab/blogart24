<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numArt = ctrlSaisies($_POST['numArt']);

$ancienneImage = sql_select("ARTICLE", "urlPhotArt", "numArt = $numArt")[0]['urlPhotArt'];
if (!empty($ancienneImage)) {
    $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/src/uploads/';
    unlink($uploadDir . $ancienneImage);
}

sql_delete('ARTICLE', "numArt = $numArt");

header('Location: ../../views/backend/articles/list.php');