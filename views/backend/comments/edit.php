<?php
include '../../../header.php';

if ($_SESSION['logged'] === false || $_SESSION['numStat'] == 3) {
    $_SESSION['admin'] = true;
    header('Location: ./security/login.php');
}
?>
<?php

// $numArt = 1;
$numCom = $_GET['numCom'];

$comments = sql_select("COMMENT", "*", "numCom = $numCom");

$libCom = $comments[0]["libCom"];
$numMemb = $comments[0]["numMemb"];
$dtCreaCom = $comments[0]["dtCreaCom"];

$membre = sql_select("MEMBRE", "*", "numMemb = $numMemb");
$pseudoMemb = $membre[0]["pseudoMemb"];


?>
<html>
<div class="commentaire">
    <div class="row">
        <div class="col-md-12">
            <h3>Modifier un commentaire</h3>
        </div>
        <br>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/comments/update.php?numCom='.$numCom ?>" method="post">
                <div class="form-group">
                    <label><?php echo $pseudoMemb; ?></label>
                    <br>
                    <label><?php echo $dtCreaCom. '<br>'; ?></label>
                </div>
                <br/>
                <div class="form-group">
                    <label for="commentaire">Votre commentaire : </label>
                    <br>
                    <textarea class="form-control" name="commentaire" id="commentaire" cols="30" rows="5"><?php echo $libCom ?></textarea>
                </div>
                <br/>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Modifier le commentaire</button>
                </div>
            </form>
        </div>
    </div>
</div>
</html>