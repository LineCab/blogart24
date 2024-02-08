<?php
include '../../../config.php';
$membres = sql_select('MEMBRE', '*');
$statuts = sql_select('STATUT', '*');
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="../../../src/css/signup.css">
</head>

<section class="inscription">

    <div class="signup">
        <button onclick="previousPage(1)"> Retour </button>
        <br><br>
        <img src="/src/images/logo-marron.svg" alt="Logo" width="158.465px" height="128.826px">
        <br>
        <h1>S'inscrire</h1>
        <p>Petite phrase d'accueil pour inciter à l'inscription.</p>
        <form action="<?php echo ROOT_URL . '/api/security/signup.php' ?>" id="form-recaptcha" method="post" enctype="multipart/form-data">
            <input type="text" name="pseudoMemb" placeholder="Pseudo"><br>
            <small id="emailHelp" class="form-text text-muted">(Entre 6 et 70 car.)</small>
            <div class="form-group">
                <input type="text" name="prenomMemb" placeholder="Prénom">
                <input type="text" name="nomMemb" placeholder="Nom">
            </div>
            <p><input type="email" name="email1" placeholder="Adresse e-mail"></p>
            <p><input type="email" name="email2" placeholder="Cofirmer votre adresse e-mail"></p>
            <p><input type="password" name="passMemb1" id="mdp" placeholder="Mot de passe"></p>
            <small id="passHelp" class="form-text text-muted">(Entre 8 et 15 caractères, au moins une majuscule, une minuscule, un chiffre, un caractères spécial)</small>
            <!-- afficher mdp -->
            <div class="form-group">
                <input type="checkbox" id="visuMdp1" name="visuMdp" onchange="togglePasswordVisibility('mdp', 'visuMdp1')">
                <label for="visuMdp1">Afficher le mot de passe</label>
            </div>
            <p><input type="password" name="passMemb2" id="mdp2" placeholder="Confirmer le mot de passe"></p>
            <!-- afficher mdp -->
            <div class="form-group">
                <input type="checkbox" id="visuMdp2" name="visuMdp" onchange="togglePasswordVisibility('mdp2', 'visuMdp2')">
                <label for="visuMdp2">Afficher le mot de passe</label>
            </div><br>
            <div class="form-group">
                <label for="accord">J'accepte que mes données soient collectées et stockées.</label><br>
                <input type="radio" id="oui" name="accordMemb" value="1">
                <label for="accordMemb">Oui</label><br>
                <input type="radio" id="non" name="accordMemb" value="0" checked >
                <label for="accordMemb">Non</label><br>
            </div>
            <div class="envoie centered">
                <p><input type="submit" name="commit" value="S'inscrire"></p>
            </div>
            <p>Déjà un compte ?</p>
            <div class="login">
                <a class="login" href="login.php">Connectez-vous</a>
            </div>
        </form>
    </div>

</section>

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