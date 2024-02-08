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
$nbCom = sql_select("COMMENT", "COUNT(*) as nbCom", "numArt = $numArt");

if ($_SESSION['logged']) {
    $numMemb = $_SESSION['numMemb'];
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/reset.css" />
    <link rel="stylesheet" href="src/css/style.css" />
    <link rel="stylesheet" href="src/css/article.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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
              if ($_SESSION['logged']) {
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
            ?>
                
        <div class="container-comment">
        <br>
        <h2><i class='bx bx-message-rounded-dots'></i> COMMENTAIRES</h2>
        <form id="comment-form" class="comment-form" onsubmit="return validateComment()">
            <div class="comment-field">
                <textarea id="comment" name="comment" rows="4" cols="50" required placeholder="Ecrivez votre commentaire ici ..."></textarea>
                <button type="submit" class="comment-btn">Envoyer</button>
            </div>
        </form>

            <!-- Liste des comm -->
            <ul id="comment-list" class="comment-list">
                <!-- commentaires sauvegarder ici -->
            </ul>
        </div>
    </section>

<script>

    

    // let likeCount = 0;
    // let likeCount2 = 0;
    // let commentCount = 0;
    

    // // Pour récupérer les commentaires stockés dans le localStorage
    // let storedComments = JSON.parse(localStorage.getItem("comments")) || [];

    // // Charger les commentaires stockés lors du chargement de la page
    // window.onload = function () {
    //     storedComments.forEach(function (comment) {
    //         var commentList = document.getElementById("comment-list");
    //         var li = document.createElement("li");
    //         li.innerHTML = `<strong>${comment.fname} ${comment.lname}</strong> (${comment.date}): <br> <br> ${comment.commentText}`;
    //         commentList.appendChild(li);
    //     });

    //     commentCount = storedComments.length;
    //     updateCommentCount();
    // };


    // function likeArticle() {
    //     likeCount++;
    //     updateLikeCount();
    // }

    // function validateComment() {
    //     var commentText = document.getElementById("comment").value;

    //     // Ajouter le code pour enregistrer le com côté serveur

    //     // Ajout du comment à la liste visible
    //     var commentList = document.getElementById("comment-list");
    //     var li = document.createElement("li");

    //     // Ajouter la date de publication
    //     var currentDate = new Date();
    //     var dateString = currentDate.toLocaleDateString(); // juste la date pas l'heure

    //     // Ajouter la date au comm
    //     li.innerHTML = `(${dateString}): <br> <br> ${commentText}`;
    //     commentList.appendChild(li);

    //     // Sauvegarder le comm dans le localStorage
    //     storedComments.push({ date: dateString, commentText });
    //     localStorage.setItem("comments", JSON.stringify(storedComments));

    //     commentCount++;
    //     updateCommentCount();

    //     // Effacer le champ du formulaire après l'envoi
    //     document.getElementById("comment").value = "";

    //     return false;
    // }

    // function updateLikeCount() {
    //     document.getElementById("like-count").textContent = likeCount + " Likes";
    //     document.getElementById("like-count2").textContent = likeCount + " Likes";
    // }

    // function updateCommentCount() {
    //     document.getElementById("comment-count").textContent = commentCount + " Commentaires";// en haut
    // }
</script>
</body>
</html>

<?php 
require_once '../../../footer.php'; 
?>