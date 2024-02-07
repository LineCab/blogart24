<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numCom = ctrlSaisies($_GET['numCom']);
$choixSuppr = ctrlSaisies($_POST["choixSuppr"]);
$dtDelLogCom = date('Y-m-d H:i:s');
$delLogiq = 1;

if ($choixSuppr == 1){
    sql_delete('COMMENT', "numCom = $numCom");
}else{
    sql_update('COMMENT', "`dtDelLogCom` = '$dtDelLogCom', `delLogiq` = '$delLogiq'", "numCom = $numCom");
}

header('Location: ../../views/backend/comments/list.php');