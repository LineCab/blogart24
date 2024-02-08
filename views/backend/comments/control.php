<?php
include '../../../header.php';
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
            <h2>Valider un commentaire</h2>
        </div>
        <br>
        <div class="col-md-12">
            <h3>Titre de l'article</h3>
            <p><?php echo $libTitrArt ?></p>
        </div>
        <br>
        <h3>Informations commentaire</h3>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/comments/control.php?numCom='.$numCom ?>" method="post">
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
                    <textarea class="form-control" name="commentaire" id="commentaire" cols="30" rows="5"><?php echo $libCom ?></textarea>
                </div>
                <br/>
                <div class="form-group">
                    <h3>Validation du commentaire</h3>
                    <input type="radio" id="oui" name="validite" value="1">
                    <label for="oui">Valider le commentaire</label><br>
                    <input type="radio" id="non" name="validite" value="0" checked>
                    <label for="non">Refuser le commentaire</label><br>
                    </input>
                </div>
                <br>
                <div class="form-group">
                    <h3>Raison du refus</h3>
                    <small>A remplir seulement si le commentaire est refusé</small>
                    <textarea class="form-control" name="raisonRefus" id="raisonRefus" cols="30" rows="5"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Envoie du contrôle</button>
                </div>
            </form>
        </div>
    </div>
</div>
</html>