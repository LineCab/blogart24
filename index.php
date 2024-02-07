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
?>

<body>
    <div id="cookieConsent" class="cookie-consent">
        <p>Ce site utilise des cookies pour améliorer l'expérience utilisateur. En continuant à naviguer sur ce site, vous acceptez notre utilisation des cookies.</p>
        <button id="acceptCookiesBtn">Accepter</button>
        <button id="refuseCookiesBtn">Refuser</button>
    </div>
    <hr class="my-3">
    <h2 class="uppercase"> L'actualité </h2>
    <hr class="my-3">
    <div class="column-gap-1 d-flex justify-content-center">
        <div class="col-6 custom-column">
            <div class="card">
                <img src="/src/images/bieres.png" height="400" class="card-img-top object-fit-cover" alt="Photo bière">
                <div class="card-body">
                    <p class="card-text card-date">10/05/2024</p>
                    <h3 class="card-title">Bordeaux BLIB : Bières Locales, Sourires Mondiaux !</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-6 custom-column">
            <div class="card">
                <img src="/src/images/bieres.png" height="400" class="card-img-top object-fit-cover" alt="Photo bière">
                <div class="card-body">
                    <p class="card-text card-date">10/05/2024</p>
                    <h3 class="card-title">Card title</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
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

<?php require_once 'footer.php'; ?>

<script>

// Fonction pour définir un cookie
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

// Fonction pour afficher la pop-up de consentement des cookies
function showCookieConsent() {
    var cookieConsent = document.getElementById('cookieConsent');
    cookieConsent.style.display = 'block';
}

// Fonction pour cacher la pop-up de consentement des cookies
function hideCookieConsent() {
    var cookieConsent = document.getElementById('cookieConsent');
    cookieConsent.style.display = 'none';
}

// Vérifier si l'utilisateur a déjà accepté les cookies
function checkCookieConsent() {
    var consentCookie = getCookie('cookieConsent');
    if (consentCookie === 'accepted') {
        hideCookieConsent();
    } else {
        showCookieConsent();
    }
}

// Vérifier si un cookie existe
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

// Événement pour accepter les cookies
document.getElementById('acceptCookiesBtn').addEventListener('click', function() {
    setCookie('cookieConsent', 'accepted', 365); // Accepter les cookies pour une année
    hideCookieConsent();
});

// Événement pour refuser les cookies
document.getElementById('refuseCookiesBtn').addEventListener('click', function() {
    setCookie('cookieConsent', 'refused', 365); // Refuser les cookies pour une année
    hideCookieConsent();
});

// Appeler la fonction de vérification des cookies lors du chargement de la page
window.onload = checkCookieConsent;

</script>