<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numArt = ctrlSaisies($_POST['numArt']);
$numMemb = ctrlSaisies($_SESSION['numMemb']);
$likeA = ctrlSaisies($_POST['choixLike']);

$existing_like = sql_select('LIKEART', '*', "numArt = $numArt AND numMemb = $numMemb");

if ($existing_like) {
    sql_update('LIKEART', "likeA = $likeA", "numArt = $numArt AND numMemb = $numMemb");
} else {
    sql_insert('LIKEART', "numMemb, numArt, likeA", "'$numMemb', '$numArt', '$likeA'");
}

header('Location: ../../views/frontend/articles/article1.php?numArt='.$numArt);
?>