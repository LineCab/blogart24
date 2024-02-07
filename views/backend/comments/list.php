<?php
include '../../../header.php'; 

//libcom - dtModCom (sinon dtCreaCom) - numMmeb
//prenomMemb - nomMemb
$numArt = 1;
$comments = sql_select("COMMENT", "*", "numArt = $numArt");

?>

<!-- Bootstrap default layout to display all statuts in foreach -->
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Commentaires</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Pseudo</th>
                        <th>Date</th>
                        <th>Contenu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($comments as $comment){ 
                        $numMemb = $comment["numMemb"];
                        $pseudo = sql_select("MEMBRE", "*", "numMemb = $numMemb");
                        foreach($pseudo as $pseudos){ 
                    ?>
                        <tr>
                            <td><?php echo($pseudos['pseudoMemb']); }?></td>
                            <td><?php echo($comment['dtCreaCom']); ?></td>
                            <td><?php echo($comment['libCom']); ?></td>
                            <td>
                                <a href="edit.php?numMemb=<?php echo($comment['numCom']); ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numMemb=<?php echo($comment['numCom']); ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>
</div>
<?php
include '../../../footer.php';