<?php
include '../../../config.php';
$membres = sql_select('MEMBRE', '*');
$statuts = sql_select('STATUT', '*');
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>S'inscrire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="/src/css/signup.css">
</head>
<div class="d-flex justify-content-center">
    <section class="">
        <div class="signup d-flex-column">
            <button type="button" class="btn" onclick="previousPage(1)">< Retour</button>
            <div class="d-flex justify-content-center mb-5">
                <img src="/src/images/logo-marron.svg" alt="Logo" width="158.465px" height="128.826px">
            </div>
            <h1>S'inscrire</h1>
            <p class="mb-3">Petite phrase d'accueil pour inciter à l'inscription.</p>
            <div>
            <form class="form" action="<?php echo ROOT_URL . '/api/security/signup.php' ?>" id="form-recaptcha" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="pseudoMemb" placeholder="Pseudo">
                    </div>
                    <div class="form-text" id="basic-addon4">(Entre 6 et 70 car.)</div>
                </div>
                <div class="mb-3 d-flex justify-content-between">
                    <div>
                        <input type="text" class="form-control" name="prenomMemb" placeholder="Prénom">
                    </div>
                    <div>
                        <input type="text" class="form-control" name="nomMemb" placeholder="Nom">
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="email1" placeholder="Adresse e-mail">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="email2" placeholder="Confirmer votre adresse e-mail">
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <input type="password" class="form-control" name="passMemb1" id="mdp" placeholder="Mot de passe">
                    </div>
                    <div class="form-text" id="basic-addon4">(Entre 8 et 15 caractères, au moins une majuscule, une minuscule, un chiffre, un caractères spécial)</div>
                    <div class="form-check form-check-custom">
                        <input type="checkbox" id="visuMdp1" name="visuMdp" onchange="togglePasswordVisibility('mdp', 'visuMdp1')">
                        <label for="visuMdp1">Afficher le mot de passe</label>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <input type="password" class="form-control" name="passMemb2" id="mdp2" placeholder="Confirmer le mot de passe">
                    </div>
                    <div class="form-check form-check-custom">
                        <input type="checkbox" id="visuMdp2" name="visuMdp" onchange="togglePasswordVisibility('mdp2', 'visuMdp2')">
                        <label for="visuMdp2">Afficher le mot de passe</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="accord">J'accepte que mes données soient collectées et stockées.</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="oui" name="accordMemb" value="1">
                        <label class="form-check-label" for="flexRadioDefault1">Oui</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="non" name="accordMemb" value="0" checked>
                        <label class="form-check-label" for="flexRadioDefault2">Non</label>
                    </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto mb-5">
                    <button type="submit" class="btn btn-lg btn-outline-dark" name="commit">S'inscrire</button>
                </div>
                <div class="d-flex flex-row">
                    <p class="mr-2">Déjà un compte ?</p>
                    <div class="login">
                        <a class="login" href="login.php">Connectez-vous</a>
                    </div>
                </div>
            </form>
            </div>
        </div>

    </section>
</div>

<script>
    function onSubmit(token) {
    document.getElementById("form-recaptcha").submit();
}

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