<?php
include '../../../header.php';
?>
<?php
// session_start();

// if(!isset($_SESSION['USER'])){
//     header('Location: login.php');
//     exit();
// }

?>
<html>
<div class="commentaire">
    <div class="row">
        <div class="col-md-12">
            <h3>poster un commentaire</h3>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="?php echo ROOT_URL . '/api/comments/create.php' ?>" method="post">
                <div class="form-comm">
                    <label for="commentaire">Votre pseudo</label>
                    <input type="text" name="commentaire" id="commentaire" value="<?php ?>" disable/><br/>
                </div>
                <br />
                <div class="form-comm">
                    <label for="commentaire">Votre commentaire : </label>
                    <input type="text" name="commentaire" id="commentaire"/><br/><br/>
                </div>
                <br />
                <div class="form-comm mt-2">
                    <button type="submit" class="btn btn-primary">Envoyer le commentaire</button>
                </div>
            </form>
        </div>
    </div>
</div>
</html>
<?php
    echo date('d/m/Y'). '<br>';
?>