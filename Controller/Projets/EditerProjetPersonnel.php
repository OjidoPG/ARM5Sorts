<?php
include("../../Model/Update.php");

if (isset ($_POST ['descriptionProjetsPersonnel']) && isset($_POST ['idProjetsPersonnel'])) {
    $update = new Update();
    $ok = $update->editerProjetPersonnel($_POST ['descriptionProjetsPersonnel'], $_POST ['idProjetsPersonnel']);
    header("Location:../../View/Projets.php");
}
