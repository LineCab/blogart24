<?php
include '../../../header.php';
require_once '../../../functions/ctrlSaisies.php';

session_start();

if ($_SESSION['logged'] === false || $_SESSION['numStat'] != 1) {
    var_dump($_SESSION['numStat']);
    header('Location: ../security/login.php');
    $_SESSION['admin'] = true;
}

$statuts = sql_select('STATUT', '*');

if(isset($_GET['numMemb'])){
    $numMemb = $_GET['numMemb'];
    $prenomMemb = sql_select("MEMBRE", "prenomMemb", "numMemb = $numMemb")[0]['prenomMemb'];
    $nomMemb = sql_select("MEMBRE", "nomMemb", "numMemb = $numMemb")[0]['nomMemb'];
    $pseudoMemb = sql_select("MEMBRE", "pseudoMemb", "numMemb = $numMemb")[0]['pseudoMemb'];
    $passMemb = sql_select("MEMBRE", "passMemb", "numMemb = $numMemb")[0]['passMemb'];
    $eMailMemb = sql_select("MEMBRE", "eMailMemb", "numMemb = $numMemb")[0]['eMailMemb'];
    $dtCreaMemb = sql_select("MEMBRE", "dtCreaMemb", "numMemb = $numMemb")[0]['dtCreaMemb'];
    $numStat = sql_select("MEMBRE", "numStat", "numMemb = $numMemb")[0]['numStat'];
    $libStat = sql_select('STATUT', 'libStat', "numStat = $numStat")[0]["libStat"];
}

$numStat = sql_select("MEMBRE", "numStat", "numMemb = $numMemb")[0]['numStat'];

if ($numStat == 1){
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <label>Un administrateur ne peut pas être supprimé</label>
        </div>
    </div>
</div>
<?php
}else{
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Suppression d'un membre</h1>
        </div>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/members/delete.php?numMemb='.$numMemb ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="pseudoMemb">Pseudo (non modifiable)</label>
                    <input id="pseudoMemb" name="pseudoMemb" class="form-control" type="text" value="<?php echo $pseudoMemb; ?>" disabled/>
                </div>
                <br/>
                <div class="form-group">
                    <label for="prenomMemb">Prénom</label>
                    <input id="prenomMemb" name="prenomMemb" class="form-control" type="text" autofocus="autofocus" value="<?php echo $prenomMemb; ?>" disabled/>
                </div>
                <br />
                <div class="form-group">
                    <label for="nomMemb">Nom</label>
                    <input id="nomMemb" name="nomMemb" class="form-control" type="text" autofocus="autofocus" value="<?php echo $nomMemb; ?>" disabled/>
                </div>
                <br />
                <div class="form-group">
                    <label for="email1">Email</label>
                    <input id="email1" name="email1" class="form-control" type="text" autofocus="autofocus" value="<?php echo $eMailMemb; ?>" disabled/>
                </div>
                <br>
                <div class="form-group">
                    <label for="numStat">Statut</label>
                    <input id="numStat" name="numStat" class="form-control" type="text" autofocus="autofocus" value="<?php echo $libStat; ?>" disabled/>
                </div>
                <br>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Confirmer la supression ?</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
}
?>