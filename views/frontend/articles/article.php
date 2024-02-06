<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link rel="stylesheet" href="src/css/style.css" />
    <link rel="stylesheet" href="views/backend/articles/create.php">
</head>
<body>
    <!-- para texte sur les  10 premiere collone titre para colone de droite reste -->
    
    <header> 
        <!-- rajouter le header -->
    </header>

    <section class="article1">

        <div class="container">
            <div class="titre">
                 <h1> BORDEAUX BLIB : Bières Locales, 
                 <br>
                 Sourires Mondiaux ! </h1>
            <!-- rajouter like & comment dans le dossier j'ai oublié -->
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

            </style>

        </div>

    </section>

</body>
</html>