
<?php
include '../../../header.php'; 

session_start();

if ($_SESSION['logged'] === false || $_SESSION['numStat'] != 1) {
    var_dump($_SESSION['numStat']);
    header('Location: ../security/login.php');
    $_SESSION['admin'] = true;
}

// prenomMemb - nomMemb - pseudoMemb - passMemb - eMailMemb - dtCreaMemb
// numMemb - dtMajMemb - accordMemb - numStat

//Load all statuts
$membre = sql_select("MEMBRE", "*");

?>

<!-- Bootstrap default layout to display all statuts in foreach -->
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Membres</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Pseudo</th>
                        <th>e Mail</th>
                        <th>date de création</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($membre as $membres){ ?>
                        <tr>
                            <td><?php echo($membres['prenomMemb']); ?></td>
                            <td><?php echo($membres['nomMemb']); ?></td>
                            <td><?php echo($membres['pseudoMemb']); ?></td>
                            <td><?php echo($membres['eMailMemb']); ?></td>
                            <td><?php echo($membres['dtCreaMemb']); ?></td>
                            <td>
                                <a href="edit.php?numMemb=<?php echo($membres['numMemb']); ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numMemb=<?php echo($membres['numMemb']); ?>" class="btn btn-danger">Delete</a>
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