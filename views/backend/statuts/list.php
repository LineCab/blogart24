<?php
include '../../../header.php'; 

session_start();

if ($_SESSION['logged'] === false || $_SESSION['numStat'] != 1) {
    var_dump($_SESSION['numStat']);
    header('Location: ../security/login.php');
    $_SESSION['admin'] = true;
}

$statuts = sql_select("STATUT", "*");
?>

<!-- Bootstrap default layout to display all statuts in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Statuts</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom des statuts</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($statuts as $statut){ ?>
                        <tr>
                            <td><?php echo($statut['numStat']); ?></td>
                            <td><?php echo($statut['libStat']); ?></td>
                            <td>
                                <a href="edit.php?numStat=<?php echo($statut['numStat']); ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numStat=<?php echo($statut['numStat']); ?>" class="btn btn-danger">Delete</a>
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