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
    <div class="custom-column row row-cols-1 row-cols-md-2 g-4 margin-tb-80">
        <div class="col">
            <div class="card">
                <img src="/src/images/bieres.png" height="400" class="card-img-top object-fit-cover" alt="Photo bière">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="card-text card-date">10/05/2024</p>
                        <div class="d-flex align-items-center like-com-articles">
                            <img src="/src/images/coeur.png" height="15" class="card-img-top object-fit-cover mx-2" alt="Photo bière">
                            113
                            <img src="/src/images/comment.png" height="15" class="card-img-top object-fit-cover mx-2" alt="Photo bière">
                            78
                        </div>
                    </div>
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/src/images/bieres.png" height="400" class="card-img-top object-fit-cover" alt="Photo bière">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="card-text card-date">10/05/2024</p>
                        <div class="d-flex align-items-center like-com-articles">
                            <img src="/src/images/coeur.png" height="15" class="card-img-top object-fit-cover mx-2" alt="Photo bière">
                            113
                            <img src="/src/images/comment.png" height="15" class="card-img-top object-fit-cover mx-2" alt="Photo bière">
                            78
                        </div>
                    </div>
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/src/images/bieres.png" height="400" class="card-img-top object-fit-cover" alt="Photo bière">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="card-text card-date">10/05/2024</p>
                        <div class="d-flex align-items-center like-com-articles">
                            <img src="/src/images/coeur.png" height="15" class="card-img-top object-fit-cover mx-2" alt="Photo bière">
                            113
                            <img src="/src/images/comment.png" height="15" class="card-img-top object-fit-cover mx-2" alt="Photo bière">
                            78
                        </div>
                    </div>
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/src/images/bieres.png" height="400" class="card-img-top object-fit-cover" alt="Photo bière">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="card-text card-date">10/05/2024</p>
                        <div class="d-flex align-items-center like-com-articles">
                            <img src="/src/images/coeur.png" height="15" class="card-img-top object-fit-cover mx-2" alt="Photo bière">
                            113
                            <img src="/src/images/comment.png" height="15" class="card-img-top object-fit-cover mx-2" alt="Photo bière">
                            78
                        </div>
                    </div>
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/src/images/bieres.png" height="400" class="card-img-top object-fit-cover" alt="Photo bière">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="card-text card-date">10/05/2024</p>
                        <div class="d-flex align-items-center like-com-articles">
                            <img src="/src/images/coeur.png" height="15" class="card-img-top object-fit-cover mx-2" alt="Photo bière">
                            113
                            <img src="/src/images/comment.png" height="15" class="card-img-top object-fit-cover mx-2" alt="Photo bière">
                            78
                        </div>
                    </div>
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/src/images/bieres.png" height="400" class="card-img-top object-fit-cover" alt="Photo bière">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <p class="card-text card-date">10/05/2024</p>
                        <div class="d-flex align-items-center like-com-articles">
                            <img src="/src/images/coeur.png" height="15" class="card-img-top object-fit-cover mx-2" alt="Photo bière">
                            113
                            <img src="/src/images/comment.png" height="15" class="card-img-top object-fit-cover mx-2" alt="Photo bière">
                            78
                        </div>
                    </div>
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
    require_once 'footer.php';
?>