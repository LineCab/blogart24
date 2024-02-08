<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

session_start();

$numArt = ctrlSaisies($_GET["numArt"]);
$libCom = ctrlSaisies($_POST["commentaire"]);
$dtCreaCom = date('Y-m-d H:i:s');
$dtModCom = null;
$attModOK = 0;
$notifComKOAff = null;
$dtDelLogCom = null;
$delLogiq = null;
$numMemb = $_SESSION["numMemb"];

if(isset($libCom)){
    sql_insert('COMMENT', '`libCom`, `dtCreaCom`, `numArt`, `dtModCom`, `attModOK`, `notifComKOAff`, `dtDelLogCom`, `delLogiq`, `numMemb`', "'$libCom', '$dtCreaCom', '$numArt', '$dtModCom', '$attModOK', '$notifComKOAff', '$dtDelLogCom', '$delLogiq', '$numMemb'");
}else{
    die("Veuillez entrer un commentaire");
}

header("Location: ../../views/frontend/articles/article1.php?numArt=$numArt");