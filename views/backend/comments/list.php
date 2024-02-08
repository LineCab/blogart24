<?php
include '../../../header.php'; 

$numArt = 1;
$commentsAtt = sql_select("COMMENT", "*", "numArt = $numArt AND attModOK = 0 AND notifComKOAff IS NULL");
$commentsVal = sql_select("COMMENT", "*", "numArt = $numArt AND (attModOK = 1 OR notifComKOAff IS NOT NULL) AND delLogiq = 0");
$commentsSupprLog = sql_select("COMMENT", "*", "numArt = $numArt AND delLogiq = 1");

?>

<!-- Bootstrap default layout to display all statuts in foreach -->
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Commentaires</h1>
            <br>
            <h2>Commentaires en attente</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Titre article</th>
                        <th>Pseudo</th>
                        <th>Date</th>
                        <th>Contenu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($commentsAtt as $comment){ 
                        $numArt = $comment["numArt"];
                        $articles = sql_select("ARTICLE", "*", "numArt = $numArt");
                        foreach($articles as $article){ 
                        ?>
                        <tr>
                            <td><?php echo($article['libTitrArt']); }?></td>
                        <?php
                        $numMemb = $comment["numMemb"];
                        $pseudo = sql_select("MEMBRE", "*", "numMemb = $numMemb");
                        foreach($pseudo as $pseudos){ 
                    ?>
                            <td><?php echo($pseudos['pseudoMemb']); }?></td>
                            <td><?php echo($comment['dtCreaCom']); ?></td>
                            <td><?php echo($comment['libCom']); ?></td>
                            <td>
                                <a href="control.php?numCom=<?php echo $comment['numCom']; ?>" class="btn btn-primary">Contrôler</a>
                                <a href="edit.php?numCom=<?php echo $comment['numCom']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numCom=<?php echo $comment['numCom']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
            <br>
            <h2>Commentaires controlés</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Pseudo</th>
                        <th>Dernière modif</th>
                        <th>Contenu</th>
                        <th>Publication</th>
                        <th>Raison refus</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($commentsVal as $comment){
                        $numMemb = $comment["numMemb"];
                        $pseudo = sql_select("MEMBRE", "*", "numMemb = $numMemb");
                        foreach($pseudo as $pseudos){ 
                    ?>
                            <td><?php echo($pseudos['pseudoMemb']); }?></td>
                            <td><?php echo($comment['dtModCom']); ?></td>
                            <td><?php echo($comment['libCom']); ?></td>
                            <?php 
                                if ($comment["attModOK"] == 1){
                                    echo "<td> OUI</td>";
                                }else{
                                    echo "<td>REFUS</td>";
                                }
                            ?>
                            <td><?php echo($comment['notifComKOAff']); ?></td>
                            <td>
                                <a href="edit.php?numCom=<?php echo $comment['numCom']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numCom=<?php echo $comment['numCom']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
            <br>
            <h2>Suppression logique</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Pseudo</th>
                        <th>Date suppr logique</th>
                        <th>Contenu</th>
                        <th>Publication</th>
                        <th>Raison refus</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($commentsSupprLog as $comment){
                        $numMemb = $comment["numMemb"];
                        $pseudo = sql_select("MEMBRE", "*", "numMemb = $numMemb");
                        foreach($pseudo as $pseudos){ 
                    ?>
                            <td><?php echo($pseudos['pseudoMemb']); }?></td>
                            <td><?php echo($comment['dtDelLogCom']); ?></td>
                            <td><?php echo($comment['libCom']); ?></td>
                            <?php 
                                if ($comment["attModOK"] == 1){
                                    echo "<td> OUI</td>";
                                }else{
                                    echo "<td>REFUS</td>";
                                }
                            ?>
                            <td><?php echo($comment['notifComKOAff']); ?></td>
                            <td>
                                <a href="edit.php?numCom=<?php echo $comment['numCom']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numCom=<?php echo $comment['numCom']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
            <br>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>
</div>
<?php
include '../../../footer.php';