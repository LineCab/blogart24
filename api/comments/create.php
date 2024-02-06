<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$libCom = ctrlSaisies($_POST['libCom']);

sql_insert('comment', 'libCom', "'$libCom'");


header('Location: ../../views/backend/comments/list.php');