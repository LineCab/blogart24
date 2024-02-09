
<?php
include '../../../header.php'; // contains the header and call to config.php

if ($_SESSION['logged'] === false || $_SESSION['numStat'] != 1) {
    var_dump($_SESSION['numStat']);
    header('Location: ../security/login.php');
    $_SESSION['admin'] = true;
}

//Load all statuts
$articles = sql_select("ARTICLE", "*");

?>

<!-- Bootstrap default layout to display all statuts in foreach -->
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Articles</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Date création de l'article</th>
                        <th>Date modification de l'article</th>
                        <th>Titre de l'article</th>
                        <th>Accroche de l'article</th>
                        <th>Url Image</th>
                        <th>Thématique de l'article</th>
                        <th>Mots clé associés</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($articles as $article){ 
                        $numArt = $article['numArt'];
                    ?>
                        <tr>
                            <td><?php echo($numArt); ?></td>
                            <td><?php echo($article['dtCreaArt']); ?></td>
                            <td><?php echo($article['dtMajArt']); ?></td>
                            <td><?php echo($article['libTitrArt']); ?></td>
                            <td><?php echo($article['libAccrochArt']); ?></td>
                            <td><?php echo($article['urlPhotArt']); ?></td>
                            <td><?php echo($article['numThem']); ?></td>
                            <td>
                            <?php
                            $motsCleArt = sql_select("MOTCLEARTICLE", "*", "numArt = $numArt");
                            foreach($motsCleArt as $motCleArt){
                                $numMotCle = $motCleArt["numMotCle"];
                                $motsCleArt = sql_select("MOTCLE", "*", "numMotCle = $numMotCle")[0]["libMotCle"];
                                echo $motsCleArt." / ";
                            }
                            ?>
                            </td>
                            <td>
                                <a href="edit.php?numArt=<?php echo($article['numArt']); ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numArt=<?php echo($article['numArt']); ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>
</div>
<?php
include '../../../footer.php'; // contains the footer