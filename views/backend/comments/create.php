<?php
include '../../../header.php';

if ($_SESSION['logged'] === false || $_SESSION['numStat'] == 3) {
    $_SESSION['admin'] = true;
    header('Location: ./security/login.php');
}
?>
<?php

$numArt = 1;
$comments = sql_select("COMMENT", "*");
$articles = sql_select("ARTICLE", "*");
$membres = sql_select("MEMBRE", "*");

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
            <form action="<?php echo ROOT_URL . '/api/comments/create.php' ?>" method="post">
                <div class="form-group">
                    <label>Pseudo</label>
                    <br>
                    <select class="form-select" name="numMemb">
                        <?php foreach ($membres as $membre) : ?>
                            <option value="<?php echo $membre['numMemb']; ?>">
                                <?php echo $membre['pseudoMemb']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label>Article</label>
                    <br>
                    <select class="form-select" name="numArt">
                        <?php foreach ($articles as $article) : ?>
                            <option value="<?php echo $article['numArt']; ?>">
                                <?php echo $article['libTitrArt']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <br>
                <label><?php echo date('d/m/Y'). '<br>'; ?></label>
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