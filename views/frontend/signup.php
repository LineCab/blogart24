<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>S'inscrire</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    
    @import url('https://fonts.googleapis.com/css?family=Poppins');

    html {
      background-color: with;
    }

    body {
      font-family: "Poppins", sans-serif;
      height: 100vh;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 10rem;
    }

    a {
      color: #92badd;
      display: inline-block;
      text-decoration: none;
      font-weight: 400;
    }

    h1 {
      text-align: left;
      font-size: 24px;
      font-weight: 600;
      color: #0d0d0d;
    }

    p {
      text-align: left;
      font-size: 14px;
      color: #0d0d0d;
      margin-bottom: 10px;
    }

    img {
      align-items: center;
      padding-left: 8rem;
    }

    /* STRUCTURE */

    .signup {
      border-radius: 10px;
      background: #fff;
      padding: 30px;
      width: 90%;
      max-width: 450px;
      position: relative;
      box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
      text-align: left;
    }

    /* FORM TYPOGRAPHY*/

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      background-color: #f6f6f6;
      border: none;
      color: #0d0d0d;
      padding: 15px;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 5px;
      width: 85%;
      border: 2px solid #f6f6f6;
      border-radius: 5px;
      transition: all 0.5s ease-in-out;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus {
      background-color: #fff;
      border-bottom: 2px solid #5fbae9;
    }

    input[type="submit"] {
      background-color: #fff;
      border: none;
      color: black;
      border: 2px solid #000;
      padding: 15px 80px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      text-transform: uppercase;
      font-size: 13px;
      border-radius: 5px;
      transition: all 0.3s ease-in-out;
    }

    input[type="submit"]:hover {
      background-color: #5A3A31;
      color: #fff;
      border: 2px solid #5A3A31;
    }

    a {
      color: #000;
      display: flex;
    }

    a .bx {
      font-size: 1.5rem;
    }

    .login {
      text-decoration: underline;
      font-size: 14px;
      text-align: center;
      padding-bottom: 30px;
    }

    .envoie {
      align-items: center;
      text-align: center;
      margin-top: 20px;
    }

    .centered {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .form-group {
      display: flex;
      align-items: center;
    }

    .checkbox-label {
      margin-left: 10px;
    }

  </style>
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
