<?php
require_once '../../../header.php';

$numArt = $_GET["numArt"];
$article = sql_select("ARTICLE", "*", "numArt = $numArt");

$dtCreaArt = $article[0]["dtCreaArt"];
$dtMajArt = $article[0]["dtMajArt"];
$libTitrArt = $article[0]["libTitrArt"];
$libChapoArt = $article[0]["libChapoArt"];
$libAccrochArt = $article[0]["libAccrochArt"];
$parag1Art = $article[0]["parag1Art"];
$libSsTitr1Art = $article[0]["libSsTitr1Art"];
$parag2Art = $article[0]["parag2Art"];
$libSsTitr2Art = $article[0]["libSsTitr2Art"];
$parag3Art = $article[0]["parag3Art"];
$libConclArt = $article[0]["libConclArt"];
$urlPhotArt = $article[0]["urlPhotArt"];


$nbLike = sql_select("LIKEART", "COUNT(*) as nbLike", "numArt = $numArt AND likeA = 1");
$nbCom = sql_select("COMMENT", "COUNT(*) as nbCom", "numArt = $numArt AND attModOK = 1 AND delLogiq = 0");

if (isset($_SESSION['logged']) && $_SESSION['logged']==true) {
    $numMemb = $_SESSION['numMemb'];
    $pseudo = $_SESSION['username'];
}

$comments = sql_select("COMMENT", "*", "numArt = $numArt AND attModOK = 1 AND delLogiq = 0");

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article 1</title>
    <link rel="stylesheet" href="src/css/reset.css" />
    <link rel="stylesheet" href="src/css/style.css" />
    <link rel="stylesheet" href="src/css/article.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="views/backend/articles/create.php">
</head>

<body>
    <section class="article1">
        <div class="container">
            <div class="titre">
                <h1><?php echo $libTitrArt; ?></h1>
            </div>

            <div class="article-info">
                <div class="like" id="like-section">
                   <p id="like-count"> <?php echo $nbLike[0]["nbLike"] ?><img src="../../../src/images/coeur.svg" alt="icon de coeur" width="20"></p>
                </div>
                <div class="like" id="like-section">
                    <p id="like-count"> <?php echo $nbCom[0]["nbCom"] ?><img src="../../../src/images/comment.svg" alt="icon de commentaire" width="20"></p>
                </div>
            </div>

            <div class="para1">
                <p><?php echo $libChapoArt; ?></p>
            </div>
            <br>
            <div class="para2">
                <h2><?php echo $libAccrochArt; ?></h2>
                <br>
                <p><?php echo $parag1Art; ?></p>  
            </div>
            <br>
            <div class="para3">
                <h2><?php echo $libSsTitr1Art; ?></h2>
                <br>
                <div class="para_img">
                    <img src="<?php echo "../../../src/uploads/".$urlPhotArt; ?>" width="300" alt="photo de l'évènement">
                    <p><?php echo $parag2Art; ?></p>
                </div>
            </div>
            <br>
            <div class="para4">
                <h2><?php echo $libSsTitr2Art; ?></h2>
                <br>
                <p><?php echo $parag3Art; ?></p>

                <p><?php echo $libConclArt; ?></p>
            </div>
            <br>
            <?php
              if (isset($_SESSION['logged']) && $_SESSION['logged']==true) {
            ?>
                <div class="like">
                    <p>Vous avez aimé cet article ? N’hésitez pas à liker !</p>
                </div>
                <div class="article-info">
                    <input type="checkbox" id="likeCom" name="likeCom" value="valeur">
                    <label for="likeCom" id="coeurLikeCom">Like</label>
                </div>  
            <?php
              }else{
            ?>
                <div class="like">
                    <p>Connectez vous pour liker et pouvoir voir les commentaires</p>
                </div>
            <?php
            }
            
            if (isset($_SESSION['logged']) && $_SESSION['logged']==true) {
            ?>
                <div class="container-comment">
                    <br>
                    <h2><i class='bx bx-message-rounded-dots'></i> COMMENTAIRES</h2>
                    <br>
                    <form id="comment-form" class="comment-form" action="<?php echo ROOT_URL . '/../../api/comments/create.php?numArt='.$numArt ?>" method="post">
                        <label><?php echo $pseudo; ?></label>
                        <label><?php echo date('d/m/Y'). '<br>'; ?></label>
                        <div class="comment-field">
                            <textarea id="commentaire" name="commentaire" rows="4" cols="50" required placeholder="Ecrivez votre commentaire ici ..."></textarea>
                            <button type="submit" class="comment-btn">Envoyer</button>
                        </div>
                    </form>
                </div>

                <div class="container-comment">
                    <?php
                    foreach ($comments as $comment){
                        $dtCreaCom = $comment["dtCreaCom"];
                        $libCom = $comment["libCom"];
                        $numMembCom = $comment["numMemb"];

                        $membreCom = sql_select("MEMBRE", "*", "numMemb = $numMembCom");
                        $pseudoMembCom = $membreCom[0]["pseudoMemb"];

                    ?>
                    <div class="card-custom" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $pseudoMembCom ?></h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $dtCreaCom ?></h6>
                            <p class="card-text"><?php echo $libCom ?></p>
                        </div>
                    </div>

                    <?php
                    }
                    ?>
                </div>

            <?php 
            }
            ?>
            <!-- Liste des comm -->
            <ul id="comment-list" class="comment-list">
                <!-- commentaires sauvegarder ici -->
            </ul>
        </div>
    </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
    .card-body{
        width: 160%; 
        height: 100%; 
        background: #CEC4C2; 
        border-radius: 5px;
        padding: 3rem;
    }

    .card-title{
        padding-left: 1rem;
        padding-top: 30px;
    }
    
    .card-subtitle{
        padding-left: 1rem;
    }

    .card-subtitle{
        padding-left: 1rem;
    }

    .card-text{
        padding-left: 1rem;
        padding-bottom: 30px;
    }

</style>

<?php 
require_once '../../../footer.php'; 
?>