<?php

// prenomMemb - nomMemb - pseudoMemb - passMemb - eMailMemb - dtCreaMemb
// numMemb - dtMajMemb - accordMemb - numStat


require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$prenomMemb = ctrlSaisies($_POST['prenomMemb']);
$nomMemb = ctrlSaisies($_POST['nomMemb']);
$pseudoMemb = ctrlSaisies($_POST['pseudoMemb']);
$passMemb = ctrlSaisies($_POST['passMemb']);
$eMailMemb = ctrlSaisies($_POST['eMailMemb']);
$dtCreaMemb = date("Y-m-d H:i:s");
$accordMemb = ctrlSaisies($_POST['accordMemb']);
$numStat = ctrlSaisies($_POST['numStat']);

sql_insert('ARTICLE', '`prenomMemb`, `nomMemb`, `pseudoMemb`, `passMemb`, `eMailMemb`, `dtCreaMemb`, `accordMemb`, `numStat`', "'$prenomMemb', '$nomMemb', '$pseudoMemb', '$passMemb', '$eMailMemb', '$dtCreaMemb', '$accordMemb', '$numStat'");

header('Location: ../../views/backend/articles/list.php');