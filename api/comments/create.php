<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

session_start();

$numArt = ctrlSaisies($_POST["numArt"]);
$numMemb = ctrlSaisies($_POST["numMemb"]);
$libCom = ctrlSaisies($_POST["commentaire"]);
$dtCreaCom = date('Y-m-d H:i:s');
$dtModCom = null;
$attModOK = 0;
$notifComKOAff = null;
$dtDelLogCom = null;
$delLogiq = null;

if(isset($libCom)){
    sql_insert('COMMENT', '`libCom`, `dtCreaCom`, `numArt`, `dtModCom`, `attModOK`, `notifComKOAff`, `dtDelLogCom`, `delLogiq`, `numMemb`', "'$libCom', '$dtCreaCom', '$numArt', '$dtModCom', '$attModOK', '$notifComKOAff', '$dtDelLogCom', '$delLogiq', '$numMemb'");
}else{
    die("Veuillez entrer un commentaire");
}

header("Location: ../../views/backend/comments/list.php");