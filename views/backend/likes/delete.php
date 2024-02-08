<?php
include '../../../header.php';

if ($_SESSION['logged'] === false || $_SESSION['numStat'] != 1) {
    var_dump($_SESSION['numStat']);
    header('Location: ../security/login.php');
    $_SESSION['admin'] = true;
}

$numArt = $_GET["numArt"];
$numMemb = $_GET["numMemb"];

$like = sql_select("LIKEART", "*", "numArt = $numArt AND numMemb = $numMemb");
$article = sql_select("ARTICLE", "*", "numArt = $numArt");
$libTitrArt = $article[0]["libTitrArt"];
$membre = sql_select("MEMBRE", "*", "numMemb = $numMemb");
$pseudoMemb = $membre[0]["pseudoMemb"];

$likeA = $like[0]["likeA"];

?>

<!-- Bootstrap form to create a new statut -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modification d'un like</h1>
        </div>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/likes/delete.php?numArt='.$numArt.'&numMemb='.$numMemb ?>" method="post">
                <div class="form-group">
                    <label for="numArt">Titre de l'article</label> 
                    <input id="numArt" name="numArt" class="form-control" type="text" value="<?php echo $libTitrArt ?>" disabled></input>
                </div>
                <br>
                <div class="form-group">
                    <label for="numMemb">Pseudo de l'utilisateur</label>
                    <input id="numArt" name="numArt" class="form-control" type="text" value="<?php echo $pseudoMemb ?>" disabled></input>
                </div>
                <br>
                <div class="form-group">
                    <h3>Choix du like</h3>
                    <?php
                        if ($likeA == 1){
                            $like = "Like";
                        }else{
                            $like = "Unlike";
                        }
                    ?>
                    <input id="numArt" name="numArt" class="form-control" type="text" value="<?php echo $like ?>" disabled></input>
                    </input>
                </div>
            <br />
            <div class="form-group mt-2">
                <button type="submit" class="btn btn-danger">Confirmer le suppression ?</button>
            </div>
            </form>
        </div>
    </div>
</div>