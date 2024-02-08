<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numMemb = ctrlSaisies($_GET['numMemb']);
$numArt = ctrlSaisies($_GET['numArt']);

sql_delete('LIKEART', "numMemb = $numMemb AND numArt = $numArt");

header('Location: ../../views/backend/likes/list.php');