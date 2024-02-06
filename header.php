<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog'Art</title>
    <!-- Load CSS -->
    <link rel="stylesheet" href="src/css/style.css" />
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="shortcut icon" type="image/x-icon" href="src/images/article.png" />
</head>
<?php
//load config
require_once 'config.php';
?>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary justify-content-between">
    <img src="/src/images/Logo.png" alt="Logo" width="158.465px" height="128.826px">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" aria-current="page" href="index.php">Accueil</a>
            <a class="nav-link" href="acteurs.php">Acteurs</a>
            <a class="nav-link" href="events.php">Evènements</a>
            <a class="nav-link" href="#">Où les trouver ?</a>
        </div>
    </div>
    <a href="login.php"><img src="/src/images/Connection.png" alt="Logo" width="40" height="40" class="img-connection"></a>
  </nav>
</body>