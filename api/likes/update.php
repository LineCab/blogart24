<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numArt = $_GET["numArt"];
$likeA = ctrlSaisies($_POST['choixLike']);

sql_update('LIKEART', "`likeA`='$likeA'", "numArt = $numArt");

header('Location: ../../views/backend/likes/list.php');