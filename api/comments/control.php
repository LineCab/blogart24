<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numCom = ctrlSaisies($_GET['numCom']);
$validite = ctrlSaisies($_POST["validite"]);
$raisonRefus = $_POST["raisonRefus"];

if ($validite == 1){
    sql_update('COMMENT', "`attModOK`= 1", "numCom = $numCom");
}else{
    sql_update('COMMENT', "`notifComKOAff` = '$raisonRefus'", "numCom = $numCom");
}

header('Location: ../../views/backend/comments/list.php');