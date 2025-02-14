<?php
include '../../../header.php';

if(isset($_GET['numMotCle'])){
    $numMotCle = $_GET['numMotCle'];
    $libMotCle = sql_select("MOTCLE", "libMotCle", "numMotCle = $numMotCle")[0]['libMotCle'];
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Suppression du mot clé</h1>
        </div>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/keywords/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libMotCle">Nom du mot clé</label>
                    <input id="numMotCle" name="numMotCle" class="form-control" style="display: none" type="text" value="<?php echo($numMotCle); ?>" readonly="readonly" />
                    <input id="libMotCle" name="libMotCle" class="form-control" type="text" value="<?php echo($libMotCle); ?>" readonly="readonly" disabled />
                </div>
                <br/>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirmer delete ?</button>
                </div>
            </form>
        </div>
    </div>
</div>