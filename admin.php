<?php
include("View/Shared/header.php");
include("Model/Read.php");
$read = new Read();
?>

<div class="container-fluid">
    <div class="jumbotron text-center">
        <h1 class="display-4">
            <strong>Administrateur</strong>
    </div>
</div>

<div class="container-fluid">
    <form method="post" action="Controller/EnregistrerSortController.php">
        <div class="form-row">
            <!-- Nom du sort -->
            <div class="form-group col-md-7">
                <label for="nomSort">Nom du sort</label>
                <textarea name="nomSort" class="form-control" id="nomSort" rows="1"></textarea>
            </div>
        </div>
        <div class="form-row">
            <!-- Dropdown technique des sorts -->
            <div class="form-group col-md-1">
                <label for="techniqueSort">Technique</label>
                <select id="techniqueSort" class="form-control " name="techniqueSort">
                    <option selected value="0">Toute</option>
                    <?php
                    $listeTechniqueSort = $read->readTechniqueSort();
                    foreach ($listeTechniqueSort as $techniqueSort) {
                        ?>
                        <option value="<?php echo $techniqueSort['idTechniqueSort'] ?>"><?php echo $techniqueSort['techniqueSort'] ?></option>
                        <?php
                    } ?>
                </select>
            </div>
            <!-- Dropdown forme des sorts -->
            <div class="form-group col-md-1">
                <label for="formeSort">Forme</label>
                <select id="formeSort" class="form-control" name="formeSort" >
                    <option selected value="0">Toute</option>
                    <?php
                    $listeFormeSort = $read->readFormeSort();
                    foreach ($listeFormeSort as $formeSort) {
                        ?>
                        <option value="<?php echo $formeSort['idFormeSort'] ?>"><?php echo $formeSort['formeSort'] ?></option>
                        <?php
                    } ?>
                </select>
            </div>
            <!-- Dropdown niveau des sorts -->
            <div class="form-group col-md-1">
                <label for="niveauSort">Niveau</label>
                <select id="niveauSort" class="form-control" name="niveauSort" >
                    <option selected value="0">Tous</option>
                    <?php
                    $listeNiveauSort = $read->readNiveauSort();
                    foreach ($listeNiveauSort as $niveauSort) {
                        ?>
                        <option value="<?php echo $niveauSort['idNiveauSort'] ?>"><?php echo $niveauSort['niveauSort'] ?></option>
                        <?php
                    } ?>
                </select>
            </div>
            <!-- Dropdown portée des sorts -->
            <div class="form-group col-md-1">
                <label for="porteeSort">Portée</label>
                <select id="porteeSort" class="form-control" name="porteeSort" >
                    <option selected value="0">Toute</option>
                    <?php
                    $listePorteeSort = $read->readPorteeSort();
                    foreach ($listePorteeSort as $porteeSort) {
                        ?>
                        <option value="<?php echo $porteeSort['idPorteeSort'] ?>"><?php echo $porteeSort['porteeSort'] ?></option>
                        <?php
                    } ?>
                </select>
            </div>
            <!-- Dropdown durée des sorts -->
            <div class="form-group col-md-1">
                <label for="dureeSort">Durée</label>
                <select id="dureeSort" class="form-control" name="dureeSort" >
                    <option selected value="0">Toute</option>
                    <?php
                    $listeDureeSort = $read->readDureeSort();
                    foreach ($listeDureeSort as $dureeSort) {
                        ?>
                        <option value="<?php echo $dureeSort['idDureeSort'] ?>"><?php echo $dureeSort['dureeSort'] ?></option>
                        <?php
                    } ?>
                </select>
            </div>
            <!-- Dropdown cible des sorts -->
            <div class="form-group col-md-1">
                <label for="cibleSort">Cible</label>
                <select id="cibleSort" class="form-control" name="cibleSort" >
                <option selected value="0">Toute</option>
                <?php
                $listeCibleSort = $read->readCibleSort();
                foreach ($listeCibleSort as $cibleSort) {
                    ?>
                    <option value="<?php echo $cibleSort['idCibleSort'] ?>"><?php echo $cibleSort['cibleSort'] ?></option>
                    <?php
                } ?>
                </select>
            </div>
            <!-- Dropdown type des sorts -->
            <div class="form-group col-md-1">
                <label for="typeSort">Type</label>
                <select id="typeSort" class="form-control" name="typeSort" >
                    <option selected value="0">Tous</option>
                    <?php
                    $listeTypeSort = $read->readTypeSort();
                    foreach ($listeTypeSort as $typeSort) {
                        ?>
                        <option value="<?php echo $typeSort['idTypeSort'] ?>"><?php echo $typeSort['typeSort'] ?></option>
                        <?php
                    } ?>
                </select>
            </div>

        </div>
        <!-- Text Area description du sort -->
        <div class="form-row">
            <div class="form-group col-md-7">
                <label for="descriptionSort">Description</label>
                <textarea name="descriptionSort" class="form-control" id="descriptionSort" rows="5"></textarea>
            </div>
        </div>
        <!-- Bouton submit -->
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </form>
</div>


<?php
include("View/Shared/footer.php");
?>
