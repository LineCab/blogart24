<?php
include '../../../header.php';
require_once '../../../functions/ctrlSaisies.php';

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
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modification d'un membre</h1>
        </div>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/members/update.php?numMemb='.$numMemb ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="pseudoMemb">Pseudo (non modifiable)</label>
                    <input id="pseudoMemb" name="pseudoMemb" class="form-control" type="text" value="<?php echo $pseudoMemb; ?>" disabled/>
                </div>
                <br/>
                <div class="form-group">
                    <label for="prenomMemb">Prénom</label>
                    <input id="prenomMemb" name="prenomMemb" class="form-control" type="text" autofocus="autofocus" value="<?php echo $prenomMemb; ?>"/>
                </div>
                <br />
                <div class="form-group">
                    <label for="nomMemb">Nom</label>
                    <input id="nomMemb" name="nomMemb" class="form-control" type="text" autofocus="autofocus" value="<?php echo $nomMemb; ?>"/>
                </div>
                <br />
                <div class="form-group">
                    <label for="passMemb1">Mot de passe</label>
                    <input id="passMemb1" name="passMemb1" class="form-control" type="password" autofocus="autofocus">
                    <small id="passHelp" class="form-text text-muted">(Entre 8 et 15 caractères, au moins une majuscule, une minuscule, un chiffre, caractères spéciaux acceptés)</small>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="visuMdp1" name="visuMdp" onchange="togglePasswordVisibility('passMemb1', 'visuMdp1')">
                    <label for="visuMdp1">Afficher le mot de passe</label>
                </div>
                <br />
                <div class="form-group">
                    <label for="passMemb2">Confirmer le mot de passe</label>
                    <input id="passMemb2" name="passMemb2" class="form-control" type="password" autofocus="autofocus">
                    <small id="passHelp" class="form-text text-muted">(Entre 8 et 15 caractères, au moins une majuscule, une minuscule, un chiffre, caractères spéciaux acceptés)</small>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="visuMdp2" name="visuMdp" onchange="togglePasswordVisibility('passMemb2', 'visuMdp2')">
                    <label for="visuMdp2">Afficher le mot de passe</label>
                </div>
                <br>
                <div class="form-group">
                    <label for="email1">Email</label>
                    <input id="email1" name="email1" class="form-control" type="text" autofocus="autofocus" value="<?php echo $eMailMemb; ?>"/>
                </div>
                <br>
                <div class="form-group">
                    <label for="email2">Confimation de l'email</label>
                    <input id="email2" name="email2" class="form-control" type="text" autofocus="autofocus" value="<?php echo $eMailMemb; ?>"></input>
                </div>
                <br>
                <div class="form-group">
                    <label for="accord">Lors de la création du compte, vous avez accepté que vos données soient collectées et stockées.</label>
                    <label for="accord"> Si vous ne voulez plus que vos données soient conservées, vous devez supprimer votre compte.</label><br>
                </div>
                <br>
                <div class="form-group">
                    <label for="numStat">Type de profil</label>    
                    <select class="form-select" name="numStat">
                        <?php foreach ($statuts as $statut) : 
                            $selected = !($statut['numStat'] == '1') ? 'selected' : 'disabled';  ?>
                            <option value="<?php echo $statut['numStat']; ?>" <?php echo $selected?>>
                                <?php echo $statut['libStat']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <br>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Confirmer la création</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function togglePasswordVisibility(passId, visuId) {
    var passInput = document.getElementById(passId);
    var visuCheckbox = document.getElementById(visuId);
    if (visuCheckbox.checked) {
        passInput.type = 'text';
    } else {
        passInput.type = 'password';
    }
}

</script>