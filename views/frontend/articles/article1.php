<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article 1</title>

<!-- rajouter le link css -->

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
                Aujourd’hui on vous a brassé un article pour vous préparer au BLIB le festival des Bières Libres et Indépendantes à Bordeaux qui aura lieu en avril. 
                De l’histoire ancestrale de la bière, en passant par les dernières tendances mousseuses, on vous dévoile même notre recette secrète qui vous garantira la victoire au concours BRASSAM. 
                </p>

                <p>Après ça, vous serez un as de la bulle !</p>

            </div>

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

                <br><br>
                Et si brasser sur la lune c’était écologique ? 
                <br>Non, ce n’est pas la nouvelle marque de bière lancée par Thomas Pesquet (même si on aurait aimé), mais ce sont les bières biologiques brassées à Bordeaux, sur les rives du port de la lune. 
                <br>On y retrouve un concept de brassage écologique : une installation géothermique et d'autres technologies mises en place qu’ils vous expliqueront sûrement mieux que nous sur leur site web.
                <br>Pour nous ce qui compte c’est son goût unique et son engagement écologique ! 
                </p>

            </div>
        
            <div class="para_img">
            <img src="https://imgs.search.brave.com/WjbyNLY9GrZYP4Gc-1pCRucmGIM-yu6uXSj-7KEyLmI/rs:fit:860:0:0/g:ce/aHR0cHM6Ly93d3cu/Y29tcHRvaXJkdXBv/aXRvdS5mci93cC1j/b250ZW50L3VwbG9h/ZHMvMjAyMi8xMi9i/aWVyZXMtY29tcHRv/aXJkdXBvaXRvdS0x/MDAweDY2NS5qcGc" alt="bieres">
        
                <p>

                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Etiam eu turpis molestie, dictum est a, mattis tellus. 
                Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. 
                Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
                Praesent auctor purus luctus enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur vel bibendum lorem. 
                Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus.
            
                </p>

            </div>

            <div class="like">
                <p>Vous avez aimé cet article ? N’hésitez pas à liker !</p>
            </div>

        

            <!-- div qui permet de voir le nombre de like et de commentaires de l'article -->
           
             <div class="article-info">
                <div class="like" id="like-section">
                    <button onclick="likeArticle()"> <p id="like-count">0 <i class='bx bx-heart'></i></p></button>
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
        }

        function updateCommentCount() {
            document.getElementById("comment-count").textContent = commentCount + " Commentaires";
        }
    </script>
    <style>

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .hearth  {
            font-size: 1.5rem;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }



        .article1 {
            background-color: #fff;
            font-family: Montserrat;
            font-size: 15px;
            font-weight: 400;
            line-height: 23px;
            letter-spacing: 0em;
            text-align: justified;
            display: flex; 
            flex-direction: column; 
        }

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

        .titre h1 {
            font-family: Montserrat;
            font-size: 40px;
            font-weight: 400;
            line-height: 49px;
            letter-spacing: 0em;
            text-align: left;
        }

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
<!-- rajouter le footer -->
</footer>

</body>
</html>
