<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>


<h1>Où retrouver nos artisans ?</h1>

<div class="buttons">
    <button type="button" class="btn btn-primary"> Ajouter un filtre +</button>
    <button type="button" class="btn btn-outline-second" disabled>Boucherie x</button>
    <button type="button" class="btn btn-outline-second" disabled>Patissier x</button>
</div>

<div class="flex-container">
    <div class="all">

        <div class="card mb-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Nom Prénom</h5>
                <p class="card-text">Adresse du lieu de l’artisant</p>
                <p class="card-text">Courte description de ce que fait cet artisan, des produits qu’il vend dans son magasin</p>
            </div>
        </div>

        <div class="card text-center mb-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Nom Prénom</h5>
                <p class="card-text">Adresse du lieu de l’artisant</p>
                <p class="card-text">Courte description de ce que fait cet artisan, des produits qu’il vend dans son magasin</p>
            </div>
        </div>

        <div class="card text-end" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">
                    <!-- <img src="src/images/profile.php" alt=""> -->
                    Nom Prénom</h5>
                <!-- <img src="./src/images/pain.png" alt=""> -->
                <p class="card-text">Adresse du lieu de l’artisant</p>
                <p class="card-text">Courte description de ce que fait cet artisan, des produits qu’il vend dans son magasin</p>
            </div>
        </div>

        <br>
        
        <div class="card text-end" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Nom Prénom</h5>
                <p class="card-text">Adresse du lieu de l’artisant</p>
                <p class="card-text">Courte description de ce que fait cet artisan, des produits qu’il vend dans son magasin</p>
            </div>
        </div>

    </div>

    <div class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.5519682921517!2d-0.5687341237017426!3d44.8306913710706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527ca7e9d7d97%3A0x2090d06f96a30989!2sMarch%C3%A9%20des%20Douves%2C%204%20Rue%20des%20Douves%2C%2033800%20Bordeaux!5e0!3m2!1sfr!2sfr!4v1707471898359!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
    </div>
</div>

<style>

    .all {
        padding-right: 1px;
        min-width: 350px;
    }

    .card{
        width: 100% !important;
    }

    .maps iframe {
        width: 170%;
        height: 480px;
        margin-left: 3rem;
        align-items: center;
    }

    .flex-container{
        padding-right: 10rem;
        display: flex;
    }

    .card-body{
        text-align: left;
        color: #000;
        background-color: #fff;
        border: 1px solid;
        border-radius: 5px;
    }


    h1{
       margin-top: 3rem; 
       margin-bottom: 3rem;
       margin-left: 3rem;
    }

    .buttons{
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    .btn-primary{
        background-color: #FFEDDD !important;
        color: #000 !important;
        border: none !important;
        margin-right: 15px;
    }


</style>

</body>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
