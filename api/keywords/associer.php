<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numMotCle = ctrlSaisies($_GET['numMotCle']);
$numArt = ctrlSaisies($_POST['numArt']);

sql_insert('MOTCLEARTICLE', "`numArt`, `numMotCle`", "'$numArt', '$numMotCle'");

header('Location: ../../views/backend/keywords/list.php');