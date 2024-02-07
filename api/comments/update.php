<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numCom = ctrlSaisies($_GET['numCom']);
$libCom = ctrlSaisies($_POST['commentaire']);

sql_update('COMMENT', "`libCom`='$libCom'", "numCom = $numCom");

header('Location: ../../views/backend/comments/list.php');