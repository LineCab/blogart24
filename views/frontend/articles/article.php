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

            <i class='bx bx-heart'></i>
            <h2> <i class='bx bx-message-rounded-dots'></i> COMMENTAIRES</h2>

                <form id="comment-form" class="comment-form" onsubmit="return validateComment()">
                    <label for="fname">Prénom:</label>
                    <input type="text" id="fname" name="fname" required>

                    <label for="lname">Nom:</label>
                    <input type="text" id="lname" name="lname" required>

                    <label for="comment">Commentaire :</label>
                    <textarea id="comment" name="comment" rows="4" cols="50" required></textarea>

                    <button type="submit" class="comment-btn">Publier</button>
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

        function likeArticle() {
            likeCount++;
            updateLikeCount();
        }

        function validateComment() {
            var fname = document.getElementById("fname").value;
            var lname = document.getElementById("lname").value;
            var comment = document.getElementById("comment").value;

            if (fname === "" || lname === "" || comment === "") {
                alert("Veuillez remplir tous les champs du commentaire.");
                return false; 
            }

            // Ajouter le code pour enregistrer le com côté serveur

            // Ajout du comm à la liste visible
            var commentList = document.getElementById("comment-list");
            var li = document.createElement("li");
            li.textContent = fname + " " + lname + ": " + comment;
            commentList.appendChild(li);

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

    </script>

    <style>

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
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

        .comment-list {
            list-style-type: none;
            padding: 0;
        }

        .comment-list li {
            border-bottom: 5px solid #5A3A31;
            margin-bottom: 10px;
            padding-bottom: 10px;
        }

        .comment-btn {
            background-color: #5A3A31;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .comment-btn:hover {
            background-color: #000;
        }
    </style>
</body>
</html>
