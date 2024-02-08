<?php 
    require_once 'header.php';
    sql_connect();
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
    <link rel="stylesheet" href="src/css/style.css" />
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

$articleAct = sql_select("ARTICLE", "*", "","dtCreaArt DESC", 2);
$titreAct = sql_select("ARTICLE", "*","" ,"libTitrArt", 2);
$libChapoArt = sql_select("ARTICLE", "*", "","libChapoArt", 2);
?>


<body>
    <hr class="my-3">
    <h2 class="uppercase"> L'actualité </h2>
    <hr class="my-3">
    <div class="column-gap-1 d-flex justify-content-center">
        
        <div class="col-6 custom-column">
            

            <?php    
            foreach ($articleAct as $article){
                $dtCreaArt = $article["dtCreaArt"];
                $libTitrArt = $article["libTitrArt"];
                $libChapoArt = $article["libChapoArt"]
                ?>
                <div class="card">
                    <img src="/src/images/bieres.png" height="400" class="card-img-top object-fit-cover" alt="Photo bière">
                    <div class="card-body">

                    <p class="card-text card-date"><?php echo $dtCreaArt ?></p>

                        <h3 class="card-title"><?php echo $libTitrArt ?></h3>
                        <p class="card-text"><?php echo $libChapoArt ?></p><!-- remplacer p pour mettre php et echo la date -->
                    </div>
                </div>
                <?php
                }
            ?>
               
        </div>
    </div>
    <hr class="my-3 margin-top-100">
    <h2 class="uppercase"> Le top 10 </h2>
    <hr class="my-3">
    <div class="custom-column row row-cols-1 row-cols-md-2 g-4">
        <!-- <div class="row justify-content-center"> -->
        <div class="col-6 custom-column custom-row-66">
            <div class="card">
                <img src="/src/images/bieres.png" height="400" class="card-img-top object-fit-cover" alt="Photo bière">
                <div class="card-body">
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-6 custom-column custom-row-66">
            <div class="card">
                <img src="/src/images/bieres.png" height="400" class="card-img-top object-fit-cover" alt="Photo bière">
                <div class="card-body">
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="custom-column row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card">
                <img src="/src/images/bieres.png" height="250" class="card-img-top object-fit-cover" alt="Photo bière">
                <div class="card-body">
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/src/images/bieres.png" height="250" class="card-img-top object-fit-cover" alt="Photo bière">
                <div class="card-body">
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/src/images/bieres.png" height="250" class="card-img-top object-fit-cover" alt="Photo bière">
                <div class="card-body">
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/src/images/bieres.png" height="250" class="card-img-top object-fit-cover" alt="Photo bière">
                <div class="card-body">
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/src/images/bieres.png" height="250" class="card-img-top object-fit-cover" alt="Photo bière">
                <div class="card-body">
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/src/images/bieres.png" height="250" class="card-img-top object-fit-cover" alt="Photo bière">
                <div class="card-body">
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/src/images/bieres.png" height="250" class="card-img-top object-fit-cover" alt="Photo bière">
                <div class="card-body">
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/src/images/bieres.png" height="250" class="card-img-top object-fit-cover" alt="Photo bière">
                <div class="card-body">
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
    </div>
</body>
