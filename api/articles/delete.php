<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numArt = ctrlSaisies($_POST['numArt']);

$coms = sql_select("COMMENT", "*");
$likes = sql_select("LIKEART", "*");
$motCles = sql_select("MOTCLEARTICLE", "*");

$ancienneImage = sql_select("ARTICLE", "urlPhotArt", "numArt = $numArt")[0]['urlPhotArt'];
if (!empty($ancienneImage)) {
    $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/src/uploads/';
    unlink($uploadDir . $ancienneImage);
}

foreach($coms as $com){
    $numCom = $com["numCom"];
    $comArt = $com["numArt"];
    if($com == $numArt){
        sql_delete('COMMENT', "numCom = $numCom");
    }
}
foreach($likes as $like){
    $likeArt = $like["numArt"];
    if($likeArt == $numArt){
        sql_delete('LIKEART', "numArt = $numArt");
    }
}
foreach($motCles as $motCle){
    $numMotCle = $motCle["numMotCle"];
    $motCleArt = $motCle["numArt"];
    if($motCleArt == $numArt){
        sql_delete('MOTCLEARTICLE', "numArt = $numArt AND numMotCle = $numMotCle");
    }
}
sql_delete('ARTICLE', "numArt = $numArt");

header('Location: ../../views/backend/articles/list.php');