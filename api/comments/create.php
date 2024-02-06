<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$libCom = ctrlSaisies($_POST['libCom']);
$date = date('Y-m-d H:i:s');

sql_insert('comment', 'libCom','dtCreaCom', "'$libCom'", "'$date");

header('Location: ../../views/backend/comments/list.php');