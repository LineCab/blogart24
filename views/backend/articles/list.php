
<?php
include '../../../header.php'; // contains the header and call to config.php

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
                        <th>Chapô de l'article</th>
                        <th>Accroche de l'article</th>
                        <th>Premier paragraphe de l'article</th>
                        <th>Titre deuxième paragraphe de l'article</th>
                        <th>Deuxième paragraphe de l'article</th>
                        <th>Titre troisième paragraphe de l'article</th>
                        <th>Troisième paragraphe de l'article</th>
                        <th>Conclusion de l'article</th>
                        <th>Url Image</th>
                        <th>Thématique de l'article</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($articles as $article){ ?>
                        <tr>
                            <td><?php echo($article['numArt']); ?></td>
                            <td><?php echo($article['dtCreaArt']); ?></td>
                            <td><?php echo($article['dtMajArt']); ?></td>
                            <td><?php echo($article['libTitrArt']); ?></td>
                            <td><?php echo($article['libChapoArt']); ?></td>
                            <td><?php echo($article['libAccrochArt']); ?></td>
                            <td><?php echo($article['parag1Art']); ?></td>
                            <td><?php echo($article['libSsTitr1Art']); ?></td>
                            <td><?php echo($article['parag2Art']); ?></td>
                            <td><?php echo($article['libSsTitr2Art']); ?></td>
                            <td><?php echo($article['parag3Art']); ?></td>
                            <td><?php echo($article['libConclArt']); ?></td>
                            <td><?php echo($article['urlPhotArt']); ?></td>
                            <td><?php echo($article['numThem']); ?></td>
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