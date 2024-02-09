<?php 
require_once 'header.php';
sql_connect();

$articles = sql_select("ARTICLE", "*", "numThem = 2");
?>

<?php
//load config
require_once 'config.php';
?>

<body>

    <!-- ligne article 1 -->
    <div class="custom-column row row-cols-1 row-cols-md-2 g-4 margin-tb-80">
        <?php
        foreach($articles as $article){
            $numArt = $article["numArt"];
            $dtCreaArt = $article["dtCreaArt"];
            $dtCreaArtFormat = date('d/m/Y', strtotime($dtCreaArt));
            $urlImg = $article["urlPhotArt"];
            $libTitrArt = $article["libTitrArt"];
            $libAccrochArt = $article["libAccrochArt"];
            $nbLike = sql_select("LIKEART", "COUNT(*) as nbLike", "numArt = $numArt AND likeA = 1");
            $nbCom = sql_select("COMMENT", "COUNT(*) as nbLike", "numArt = $numArt");
        ?>
        <a href="<?php echo "/views/frontend/articles/article1.php?numArt=".$numArt ?>">
            <div class="col">
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
                        <p class="card-text"><?php echo $libAccrochArt ?></p>
                    </div>
                </div>
            </div>
        </a>
        <?php
        }
        ?>
    </div>

</body>

<?php
    require_once 'footer.php';
?>