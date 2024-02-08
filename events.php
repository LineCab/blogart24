<?php 
    require_once 'header.php';
    sql_connect();

    $articles = sql_select("ARTICLE", "*", null, 3);

?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog'Art Accueil</title>
    <link rel="stylesheet" href="src/css/reset.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/src/css/style.css" />
    <link rel="shortcut icon" type="image/x-icon" href="src/images/article.png" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<?php
//load config
require_once 'config.php';
?>

<body>
    <div class="titre">
        
        <h2>BORDEAUX’ <span class="color">COEUR</span></h2>

        <hr></hr>
        
        <h2 class="titre">DE L’ARTISANAT</h2>
    
    </div>

    <!-- ligne article 1 -->
    <div class="custom-column row row-cols-1 row-cols-md-2 g-4 margin-tb-80">
        <?php
        foreach($articles as $article){
            $numArt = $article["numArt"];
            $dtCreaArt = $article["dtCreaArt"];
            $dtCreaArtFormat = date('d/m/Y', strtotime($dtCreaArt));
            $urlImg = $article["urlPhotArt"];
            $libTitrArt = $article["libTitrArt"];
            $libChapoArt = $article["libChapoArt"];
            $nbLike = sql_select("LIKEART", "COUNT(*) as nbLike", "numArt = $numArt AND likeA = 1");
            $nbCom = sql_select("COMMENT", "COUNT(*) as nbLike", "numArt = $numArt");
        ?>
            <div class="col-6">
                <div class="card">
                    <img src="<?php echo "/src/uploads/".$urlImg ?>" height="400" class="card-img-top object-fit-cover">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p class="card-text card-date"><?php echo $dtCreaArtFormat ?></p>
                            <div class="d-flex align-items-center like-com-articles">
                                <img src="/src/images/coeur.png" height="18" class="card-img-top object-fit-cover mx-2" alt="Photo bière">
                                <?php echo $nbLike[0]["nbLike"] ?>
                                <img src="/src/images/comment.png" height="18" class="card-img-top object-fit-cover mx-2" alt="Photo bière">
                                <?php echo $nbCom[0]["nbLike"] ?>
                            </div>
                        </div>
                        <h3 class="card-title"><?php echo $libTitrArt ?></h3>
                        <p class="card-text"><?php echo $libChapoArt ?></p>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

</body>

<?php
    require_once 'footer.php';
?>


<style>

body, h1, h2, h3, p {
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Montserrat', sans-serif;
}

.custom-column {
    margin: 2rem;
}

.card {
    border: none;
    transition: transform 0.2s;
}

.card:hover {
    transform: scale(1.05);
}

.card-img-top {
    object-fit: cover;
}

.card-date {
    font-size: 0.8rem;
    color: #888;
}

.like-com-articles {
    font-size: 0.9rem;
    color: #555;
}

.titre h2{
    text-align: right;
    margin-right: 2rem;
    margin-top: 4px;
}

.color{
    color: #7F5226;
}

.titre {
    text-align: right;
    margin-right: 2rem;
    margin-top: 2rem;
}

hr {
    margin-right: 2rem;
    margin-bottom: 0rem;
    color: inherit;
    border: 4rem;
    border-top: solid;
    opacity: 80;
}

.titre hr {
    float: right;
    color: #333;
    height: 3px;
    width: 20rem;
    margin-top: 0rem;
}

@media (max-width: 767px) {
    .titre hr {
        width: 100%; 
    }
    
}


</style>

</html>