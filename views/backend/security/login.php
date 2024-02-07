<?php
include '../../../header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Création d'un membre</h1>
        </div>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/security/login.php' ?>" id="form-recaptcha" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="pseudoMemb">Pseudo</label>
                    <input id="pseudoMemb" name="pseudoMemb" class="form-control" type="text" autofocus="autofocus" />
                </div>
                <br>
                <div class="form-group">
                    <label for="passMemb">Mot de passe</label>
                    <input id="passMemb" name="passMemb" class="form-control" type="password" autofocus="autofocus" />
                </div>
                <div class="form-group">
                    <input type="checkbox" id="visuMdp" name="visuMdp" onchange="togglePasswordVisibility('passMemb', 'visuMdp')">
                    <label for="visuMdp">Afficher le mot de passe</label>
                </div>
                <br>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Se connecter</button>
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