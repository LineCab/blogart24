
<?php
include '../../../header.php'; // contains the header and call to config.php

//Load all statuts
$motcles = sql_select("MOTCLE", "*");
?>

<!-- Bootstrap default layout to display all statuts in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Mots Clés</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Mots clés</th>
                        <th>Article</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($motcles as $motcle){
                        $numMotCle = $motcle['numMotCle'];
                        $libMotCle = $motcle['libMotCle'];

                        $motsCleArticle = sql_select("MOTCLEARTICLE", "*", "numMotCle = $numMotCle");
                    ?>
                        <tr>
                            <td><?php echo $numMotCle; ?></td>
                            <td><?php echo $libMotCle; ?></td>
                            <td>N° : 
                            <?php
                            foreach($motsCleArticle as $motCleArticle){
                                $numArt = $motCleArticle["numArt"];
                                echo $numArt." / ";
                            }
                            ?>
                            </td>
                            <td>
                                <a href="edit.php?numMotCle=<?php echo($motcle['numMotCle']); ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numMotCle=<?php echo($motcle['numMotCle']); ?>" class="btn btn-danger">Delete</a>
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