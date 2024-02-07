<?php
require_once 'header.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article 1</title>

<!-- rajouter le link css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        
    <link rel="stylesheet" href="src/css/reset.css" />
    <link rel="stylesheet" href="src/css/style.css" />

    <link rel="shortcut icon" type="image/x-icon" href="src/images/article.png" />
  
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="views/backend/articles/create.php">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header> 
    <!-- rajouter le header -->
    </header>

    <section class="article1">
        <div class="container">
            <div class="titre">
                <h1> Bordeaux bascule : <br>la bière éclipse le vin !</h1>
            </div>

            <div class="article-info">
                <div class="like" id="like-section">
                   <p id="like-count"> 0 <i class='bx bx-heart'></i></p>
                </div>
                <div class="comment-count" id="comment-section">
                    <p id="comment-count">0 <i class='bx bx-message-rounded-dots'></i></p>
                </div>
            </div>

            <div class="para1">
                <p>
                Aujourd’hui on vous a <strong>brassé un article</strong> pour vous préparer au <b>BLIB le festival des Bières Libres et Indépendantes à Bordeaux</b> qui aura lieu en avril. 
                De l’histoire ancestrale de la bière, en passant par les dernières tendances mousseuses, on vous dévoile même notre recette secrète qui vous garantira la victoire au <b>concours BRASSAM</b>. 
                </p>

                <h4>Après ça, vous serez un as de la bulle !</h4>

            </div>

            <br>

            <div class="para2">

                <h2>Alors ça mousse ?</h2>
                <h4>Un accident, une potion magique, une déesse, la bière a su prendre différentes identités pour trouver sa place au sein de toutes les époques.</h4>
                <p>
                Et oui ! La bière (ou devrions nous dire la “Sikaru”) a été créée par accident, il y a 4000 ans en Mésopotamie, par un sumérien qui aurait un peu trop laissé fermenter sa soupe. 

                C’est au 18e siècle que la bière prend une dimension divine avec l'apparition de Ninkasi, déesse associée à son brassage. Deux hymnes lui sont dédiés, le premier retrace les étapes ancestrales de la fermentation et le second décrit les récipients de brassage utilisés. 
                On vous met les paroles ici  (c'est cadeau, ne nous remerciez pas). 

                Chez les Celtes, la bière se transforme en potion magique (oui, oui, potion magique !) au XIIe siècle avec l'ajout du houblon, offrant une délicieuse amertume maîtrisée par les moines au Moyen  ge.
                Une étude d'Harvard récente a même démontré les effets positifs de la bière sur le cœur et la circulation sanguine. Alors, si c'est Harvard qui le dit… Nous on trinque à la santé de la bière ! 

                </p>  

            </div>

            <br>

            <h2>Un culte ramené au goût du jour </h2>

            <div class="para3">

            
            
                <p>
                    Si autrefois, la bière était synonyme d'authenticité, les artisans brasseurs d'aujourd'hui se lancent dans l'innovation, explorant de nouveaux goûts et techniques pour se distinguer.
                <br> À Bordeaux, nos artisans, à travers des bières au design soigné ou aux saveurs inédites, ne vous laissent pas le temps de vous ennuyer !

                <br><br>
                Des étiquettes stylisées sur vos bières ? Pas de soucis, l’équipe d'”Effet Papillon” s'en occupe.
                <br>
                Antoine, César et Cyprien, allient graphisme et brasserie en proposant des illustrations personnalisées avec des graphismes aux traits colorés. 
                <br>
                Nous, on les imaginerait bien alignées sur la commode tel des objets de collection. 

                <br>
               <h4> Et si brasser sur la lune c’était écologique ? </h4>
                 Non, ce n’est pas la nouvelle marque de bière lancée par Thomas Pesquet (même si on aurait aimé), mais ce sont les bières biologiques brassées à Bordeaux, sur les rives du port de la lune. 
                <br>On y retrouve un concept de brassage écologique : une installation géothermique et d'autres technologies mises en place qu’ils vous expliqueront sûrement mieux que nous sur leur site web.
                <br>Pour nous ce qui compte c’est son goût unique et son engagement écologique ! 
                </p>

            </div>

            <h4>Pour nos amateurs de bières sans alcool, pas d'inquiétude ! </h4>    
            <div class="para_img">   
            
            <img src="https://imgs.search.brave.com/WjbyNLY9GrZYP4Gc-1pCRucmGIM-yu6uXSj-7KEyLmI/rs:fit:860:0:0/g:ce/aHR0cHM6Ly93d3cu/Y29tcHRvaXJkdXBv/aXRvdS5mci93cC1j/b250ZW50L3VwbG9h/ZHMvMjAyMi8xMi9i/aWVyZXMtY29tcHRv/aXJkdXBvaXRvdS0x/MDAweDY2NS5qcGc" alt="bieres">
        
                <p>
            
                “La Brasserie Parallèle a aussi pensé à vous en confectionnant une large gamme de bières au… kéfir de fruits. 
                <br>Sur la même base de fermentation, ici, c’est le kéfir l’élément clé.
                <br>Sucrées et rafraîchissantes, les bières parallèles sont le parfait mélange entre une limonade et une bière blanche ! 
                <br>On se passera donc de citer des mentions légales pour vous souhaiter une bonne dégustation sans modération.

                </p>

            </div>

            <br>
            <div class="para4">
                <h2>Trouver bière à son goût</h2>
                <h4>
                On continue dans notre lancée d’innovations en vous proposant nos 3 goûts de bières insolites préférés : 
                </h4>
                Et en première position, si vous êtes plutôt sucré et ambré, c’est chez AZIMUT que l’on vous redirige. 
                <br>Grâce à leur collaboration avec un artisan chocolatier nommé Hasnâa, AZIMUT permet la création d’une bière au cacao : gourmande, aux notes réconfortantes et chaleureuses. 
                <br>Nous, on recommande plutôt cette bière pour les temps frais, mais si en plein été une envie cacaoté vous viendrait, vous pourrez maintenant la consommer ! 

                </p>

                <p>
                Saviez vous que la verveine permet de faciliter la digestion et soulage l’estomac ? 
                <br>Eh bien, si vous étiez au courant de cette information, je parie que vous ne savez pas que la Bordeaux Beer Factory propose une bière à la Verveine ! (Haha, on vous a eu là !). 
                <br>En plus de ses bonnes vertues, elle remporte la médaille en 2022 de la bière blanche. (Oui, on vous recommande toujours de la qualité). 
                <br>Alors, si en 2024, la tisane commence à être démodée, pourquoi ne pas consommer la verveine sous forme fermentée ? 

                </p>

                <p>
                Et notre préférée c’est …
                <br>Bon, d’accord, on vous dit la vérité, celle-là, elle a pas été encore créée. 
                <br>MAIS, on aimerait vraiment la goûter. Alors, brasseurs amateurs, laissez nous vous la présenter, la fameuse bière au cannelé ! 
                <br>En vue de l’arrivée du concours BRASSAM bordelais, on s’est creusé la tête pour imaginer une bière au goût inédit, qui à coup sûr vous ferait gagner. 
                <br>Et pourquoi pas représenter LA pâtisserie bordelaise sous une autre forme. Une bière gourmande, qui étonnerait les jurys a coup sûr ! 
                <br>Pour cela, pas d’inquiétude, on vous a mijoté une recette originale imaginée par nos talents à GARDENA. 
                <br>On ne vous garantit rien, on vous propose juste l’idée du siècle..  
                <br>(D’ailleurs, faudrait songer à déposer un brevet, non?) 

                </p>

                <p>
                Maintenant, on espère vous voir débarquer au BLIB avec pleins de connaissances à partager à vos proches pour être le roi de la bulle ! 
                <br>Et nous, on se retrouve dans 2 semaines pour un nouvel article. 
                <br>Cheers, 
                <br><br>Gardena. 

                </p>
            </div>

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
                
        <!-- rajoute le code php pour le nom et prenom du commenditaire -->

                <textarea id="comment" name="comment" rows="4" cols="50" required placeholder="Ecrivez votre commentaire ici ..."></textarea>
                <button type="submit" class="comment-btn">Envoyer</button>
            </div>
        </form>

            <!-- Liste des comm -->
            <ul id="comment-list" class="comment-list">
                <!-- commentaires sauvegarder ici -->
            </ul>
        </div>
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

<footer>
<?php require_once 'footer.php'; ?>
</footer>

</body>
</html>

