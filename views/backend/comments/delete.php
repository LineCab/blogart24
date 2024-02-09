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
$numArt = $comments[0]["numArt"];

$membre = sql_select("MEMBRE", "*", "numMemb = $numMemb");
$pseudoMemb = $membre[0]["pseudoMemb"];

$article = sql_select("ARTICLE", "*", "numArt = $numArt");
$libTitrArt = $article[0]["libTitrArt"];


?>
<html>
<div class="commentaire">
    <div class="row">
        <div class="col-md-12">
            <h3>Supprimer un commentaire</h3>
        </div>
        <br>
        <div class="col-md-12">
            <h3>Titre de l'article</h3>
            <p><?php echo $libTitrArt ?></p>
        </div>
        <br>
        <h3>Informations commentaire</h3>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/comments/delete.php?numCom='.$numCom ?>" method="post">
                <div class="form-group">
                    <label>Nom d'utilisateur :</label>
                    <br>
                    <label><?php echo $pseudoMemb; ?></label>
                    <br><br>
                    <label>Date de création :</label>
                    <br>
                    <label><?php echo $dtCreaCom. '<br>'; ?></label>
                </div>
                <br/>
                <div class="form-group">
                    <h3>Contenu du commentaire</h3>
                    <br>
                    <textarea class="form-control" name="commentaire" id="commentaire" cols="30" rows="5" disabled><?php echo $libCom ?></textarea>
                </div>
                <br/>
                <div class="form-group">
                    <h3>Choix de la suppression</h3>
                    <input type="radio" id="supprDef" name="choixSuppr" value="1">
                    <label for="oui">Suppression définitive</label><br>
                    <input type="radio" id="supprLog" name="choixSuppr" value="0" checked>
                    <label for="non">Suppression logique</label><br>
                    </input>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger">Supprimer le commentaire</button>
                </div>
            </form>
        </div>
    </div>
</div>
</html>