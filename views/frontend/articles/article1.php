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
    <link rel="shortcut icon" type="image/x-icon" href="src/images/article.png" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="views/backend/articles/create.php">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
            <div class="like">
                <p>Vous avez aimé cet article ? N’hésitez pas à liker !</p>
            </div>
            <!-- div qui permet de voir le nombre de like et de commentaires de l'article -->
             <div class="article-info">
                <div class="like" id="like-section">
                    <button onclick="likeArticle()"> <p id="like-count2"> 0 <i class='bx bx-heart'></i></p></button>
                </div>
            </div>      
        <div class="container-comment">

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
    let likeCount = 0;
    let likeCount2 = 0;
    let commentCount = 0;
    

    // Pour récupérer les commentaires stockés dans le localStorage
    let storedComments = JSON.parse(localStorage.getItem("comments")) || [];

    // Charger les commentaires stockés lors du chargement de la page
    window.onload = function () {
        storedComments.forEach(function (comment) {
            var commentList = document.getElementById("comment-list");
            var li = document.createElement("li");
            li.innerHTML = `<strong>${comment.fname} ${comment.lname}</strong> (${comment.date}): <br> <br> ${comment.commentText}`;
            commentList.appendChild(li);
        });

        commentCount = storedComments.length;
        updateCommentCount();
    };


    function likeArticle() {
        likeCount++;
        updateLikeCount();
    }

    function validateComment() {
        var commentText = document.getElementById("comment").value;

        // Ajouter le code pour enregistrer le com côté serveur

        // Ajout du comment à la liste visible
        var commentList = document.getElementById("comment-list");
        var li = document.createElement("li");

        // Ajouter la date de publication
        var currentDate = new Date();
        var dateString = currentDate.toLocaleDateString(); // juste la date pas l'heure

        // Ajouter la date au comm
        li.innerHTML = `(${dateString}): <br> <br> ${commentText}`;
        commentList.appendChild(li);

        // Sauvegarder le comm dans le localStorage
        storedComments.push({ date: dateString, commentText });
        localStorage.setItem("comments", JSON.stringify(storedComments));

        commentCount++;
        updateCommentCount();

        // Effacer le champ du formulaire après l'envoi
        document.getElementById("comment").value = "";

        return false;
    }

    function updateLikeCount() {
        document.getElementById("like-count").textContent = likeCount + " Likes";
        document.getElementById("like-count2").textContent = likeCount + " Likes";
    }

    function updateCommentCount() {
        document.getElementById("comment-count").textContent = commentCount + " Commentaires";// en haut
    }
</script>

<style>


        /* body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        } */

        .hearth  {
            font-size: 1.5rem;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

/*     .article1 {
            background-color: #fff;
            font-family: Montserrat;
            font-size: 15px;
            font-weight: 400;
            line-height: 23px;
            letter-spacing: 0em;
            text-align: justified;
            display: flex; 
            flex-direction: column; 
        } */

        .article-info {
            display: flex;
            
            justify-content: space-arrond; 
            align-items: center;
            margin-bottom: 10px;
        }

        .article-info .like {
            padding-right: 1rem;
        }

        .titre {
            text-align: left;
            margin-bottom: 20px;
        }
/* 
        .titre h1 {
            font-family: Montserrat;
            font-size: 40px;
            font-weight: 400;
            line-height: 49px;
            letter-spacing: 0em;
            text-align: left;
        } */

        .para1, .para2, .para3, .para_img {
            margin-bottom: 20px;
        }

        .para_img img {
            max-width: 100%;
            height: auto;
            margin: 20px;
        }

        .para1, .para2, .para3, .para_img {
            width: 100%; 
        }

        .para_img {
            display: flex;
            justify-content: space-between; 
            align-items: center; 
        }

        .para_img img {
            max-width: 48%; 
        }

        .commentaires {
            margin-top: 40px;
        }

        .comment-form {
            margin-bottom: 20px;
        }

        .comment-form label,
        .comment-form input,
        .comment-form textarea,
        .comment-form button {
            display: block;
            margin-bottom: 7px;

        }

        .textarea{
            color: grey;
        }

        .comment-list {
            list-style-type: none;
            padding: 0;
        }

        .comment-list li {
            border: 10px solid #CEC4C2;
            background-color: #CEC4C2;
            margin-bottom: 10px;
            padding-bottom: 10px;
            margin-right: 48%;
        }

        .comment-list li strong {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .comment-btn {
            background-color: #5A3A31;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        /* hover */

        .comment-btn:hover {
            background-color: #000;
        }

        .name-fields {
            display: flex;
        }

        .name-field {
            padding-right: 3rem;
        }

        button {
        background: #fff;
        border: unset;
        outline: 0;
        font-size: 18px;
        cursor: pointer;
        color: #65676b;
        padding: 5px 10px;
        }

        button.liked {
        color: #0571ed;
        }
        
        button.liked i{
        animation: anim 0.5s ease-in-out;
        -webkit-animation: anim 0.5s ease-in-out;
        }
        
        @keyframes anim {
        100% {
            transform: rotate(-15deg) scale(1.3);
            -webkit-transform: rotate(-15deg) scale(1.3);
            -moz-transform: rotate(-15deg) scale(1.3);
            -ms-transform: rotate(-15deg) scale(1.3);
            -o-transform: rotate(-15deg) scale(1.3);
            filter: blur(0.5px);
            -webkit-filter: blur(0.5px);
            }
        }

        @media only screen and (max-width: 600px) {
            .para_img {
                flex-direction: column-reverse; 
            }

            .para_img img {
                max-width: 100%; 
                margin: 0; 
            }

            .para_img p {
                margin-top: 20px; 
            }
        }
</style>
</body>
</html>

<?php require_once '../../footer.php'; ?>