<?php
include '../../../header.php';
if(isset($_GET['numMotCle'])){
    $numMotCle = $_GET['numMotCle'];
    $libMotCle = sql_select("MOTCLE", "libMotCle", "numMotCle = $numMotCle")[0]['libMotCle'];
}
$articles = sql_select("ARTICLE", "*");
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Associer le mot clé</h1>
        </div>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/keywords/associer.php?numMotCle=' . $numMotCle ?>" method="post">
                <div class="form-group">
                    <label for="libMotCle">Nom du mot clé</label>
                    <input id="libMotCle" name="libMotCle" class="form-control" type="text" value="<?php echo($libMotCle); ?>" disabled/>
                </div>
                <br />
                <div class="form-group">
                    <label for="numThem">Articles</label>    
                    <select class="form-select" name="numArt">
                        <?php foreach ($articles as $article) : ?>
                            <?php 
                                // $selectedArt = $numMotCle;
                                // $selected = ($thematique['numThem'] == $selectedArt) ? 'selected' : ''; 
                            ?>
                            <option value="<?php echo $article['numArt']; ?>">
                                <?php echo $article['libTitrArt']; ?>
                            </option>
                        <?php endforeach; ?>
                        </select>
                </div>
                <br>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Confirmer modification ?</button>
                </div>
            </form>
        </div>
    </div>
</div>
