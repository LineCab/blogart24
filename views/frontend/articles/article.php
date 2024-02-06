<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link rel="stylesheet" href="src/css/style.css" />
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
                <h1> BORDEAUX BLIB : Bières Locales, <br> Sourires Mondiaux ! </h1>
            </div>

            <div class="article-info">
                <div class="like" id="like-section">
                    <button onclick="likeArticle()"> <p id="like-count"> 0 <i class='bx bx-heart'></i></p></button>
                </div>
                <div class="comment-count" id="comment-section">
                    <p id="comment-count">0 <i class='bx bx-message-rounded-dots'></i></p>
                </div>
            </div>


            
            <div class="para1">
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Etiam eu turpis molestie, dictum est a, mattis tellus. 
            Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. 
            Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
            Praesent auctor purus luctus enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur vel bibendum lorem. 
            Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus.
          
                </p>
             </div>

            <div class="para2">
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Etiam eu turpis molestie, dictum est a, mattis tellus. 
                Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. 
                Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
                Praesent auctor purus luctus enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur vel bibendum lorem. 
                Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus.
            
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
           
            <div class="para3">

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
            <div class="container">
            <div class="hearth">
                    <i class='bx bx-heart'></i>
            </div>
            <h2> <i class='bx bx-message-rounded-dots'></i> COMMENTAIRES</h2>

            <form id="comment-form" class="comment-form" onsubmit="return validateComment()">
                <div class="name-fields">
                    <div class="name-field">
                        <label for="fname">Prénom:</label>
                        <input type="text" id="fname" name="fname" required>
                    </div>
                    <div class="name-field">
                        <label for="lname">Nom:</label>
                        <input type="text" id="lname" name="lname" required>
                    </div>
                </div>

                <div class="comment-field">
                    <label for="comment">Commentaire :</label>
                    <textarea id="comment" name="comment" rows="4" cols="50" required placeholder="Ecrivez votre commentaire ici ..."></textarea>
                </div>

                <!-- Ajouter le bouton Envoyer ici -->
                <button type="submit" class="comment-btn">Envoyer</button>

            </form>

                <!-- Liste des comm -->
                <ul id="comment-list" class="comment-list">
                    <!-- commentaires  ajoutés ici -->
                </ul>
            </div>

        </div>
    </section>

            <script>
        let likeCount = 0;
        let commentCount = 0;

        // pour recupérer les commentaires stockés dans le localStorage il suffit d'enlever le commentaire de la ligne de dessous 

        let storedComments = JSON.parse(localStorage.getItem("comments")) || [];

        function likeArticle() {
            likeCount++;
            updateLikeCount();
        }

        function validateComment() {
        var fname = document.getElementById("fname").value;
        var lname = document.getElementById("lname").value;
        var commentText = document.getElementById("comment").value;

        if (fname === "" || lname === "" || commentText === "") {
            alert("Veuillez remplir tous les champs du commentaire.");
            return false;
        }

        // Ajouter le code pour enregistrer le commentaire côté serveur

        // Ajout du commentaire à la liste visible
        var commentList = document.getElementById("comment-list");
        var li = document.createElement("li");

        // Ajouter la date de publication
        var currentDate = new Date();
        var dateString = currentDate.toLocaleDateString(); // juste la date pas l'heure

        // Ajouter la date au commentaire
        var comment = { fname, lname, date: dateString };
        li.innerHTML = `${fname} ${lname} (${dateString}): <br> <br> ${commentText}`;
        commentList.appendChild(li);

        // Sauvegarder le commentaire dans le localStorage
        storedComments.push(comment);
        localStorage.setItem("comments", JSON.stringify(storedComments));

        commentCount++;
        updateCommentCount();

        // Effacer les champs du formulaire après l'envoi
        document.getElementById("fname").value = "";
        document.getElementById("lname").value = "";
        document.getElementById("comment").value = "";

        return false;
    }


        function updateLikeCount() {
            document.getElementById("like-count").textContent = likeCount + " Likes";
        }

        function updateCommentCount() {
            document.getElementById("comment-count").textContent = commentCount + " Commentaires";
        }

        // Charger les commentaires stockés lors du chargement de la page
        window.onload = function () {
        storedComments.forEach(function (comment) {
            var commentList = document.getElementById("comment-list");
            var li = document.createElement("li");
            li.innerHTML = `<strong>${comment.fname} ${comment.lname}</strong> (${comment.date}): ${comment.commentText}`;
            commentList.appendChild(li);
        });

        commentCount = storedComments.length;
        updateCommentCount();
    };



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
            justify-content: space-between; 
            padding-right: 88%;
            align-items: center;
            margin-bottom: 10px;
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


    </style>
</body>
</html>
