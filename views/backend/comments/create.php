<?php
include '../../../header.php';
?>
<?php

$numArt = 1;
$comments = sql_select("COMMENT", "*", "numArt = $numArt");

$pseudo = $_SESSION['username'];

?>
<html>
<div class="commentaire">
    <div class="row">
        <div class="col-md-12">
            <h3>poster un commentaire</h3>
        </div>
        <br>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/comments/create.php?numArt='.$numArt ?>" method="post">
                <div class="form-group">
                    <label><?php echo $pseudo; ?></label>
                    <br>
                    <label><?php echo date('d/m/Y'). '<br>'; ?></label>
                </div>
                <br/>
                <div class="form-group">
                    <label for="commentaire">Votre commentaire : </label>
                    <br>
                    <textarea class="form-control" name="commentaire" id="commentaire" cols="30" rows="5"></textarea>
                </div>
                <br/>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Envoyer le commentaire</button>
                </div>
            </form>
        </div>
    </div>
</div>
</html>