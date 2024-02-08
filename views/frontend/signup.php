<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>S'inscrire</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

  <section class="inscription">

    <div class="signup">
      <a href="http://blogart24/views/frontend/articles/article1.php"><i class='bx bx-chevron-left'></i> Retour </a>
      <br>
      <br>
      <img src="/src/images/Logo.png" alt="Logo" width="158.465px" height="128.826px">
      <br>

      <h1>S'inscrire</h1>
      <p>Petite phrase d'accueil pour inciter à l'inscription.</p>
      <form method="post" action="signup.php">

        <div class="form-group">
          <input type="text" name="firstName" placeholder="Prénom" required>
          <input type="text" name="lastName" placeholder="Nom" required>
        </div>

        <p><input type="email" name="email" placeholder="Adresse e-mail" required></p>
        <p><input type="password" name="password" id="mdp" placeholder="Mot de passe" required></p>
        <p><input type="password" name="confirmPassword" placeholder="Confirmer le mot de passe" required></p>

        <!-- afficher mdp -->
        <div class="form-group">
          <input type="checkbox" id="visuMdp2" name="visuMdp" onchange="togglePasswordVisibility('mdp', 'visuMdp2')">
          <label for="visuMdp2">Afficher le mot de passe</label>
        </div>

        <div class="form-group">
          <input type="checkbox" id="acceptTerms" name="acceptTerms" required>
          <label class="checkbox-label" for="acceptTerms">J'ai lu et accepte les conditions générales de politique de confidentialité</label>
        </div>

        <div class="envoie centered">
          <p><input type="submit" name="commit" value="S'inscrire"></p>
        </div>

        <p>Déjà un compte ?</p>
        <div class="login">
          <a class="login" href="http://blogart24/views/frontend/login.php">Connectez-vous</a>
        </div>

      </form>

    </div>

  </section>

<!-- afficher mdp -->
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

  document.addEventListener("DOMContentLoaded", function () {
    var passwordInput = document.getElementById('mdp');
    var confirmPasswordInput = document.getElementById('confirmPassword');
    var errorMessage = document.getElementById('error-message');

    confirmPasswordInput.addEventListener('input', function () {
      if (passwordInput.value !== confirmPasswordInput.value) {
        errorMessage.style.color = 'red';
        errorMessage.textContent = 'Les mots de passe ne correspondent pas.';
      } else {
        errorMessage.style.color = 'green';
        errorMessage.textContent = 'Les mots de passe correspondent.';
      }
    });
  });
</script>

</body>

</html>
