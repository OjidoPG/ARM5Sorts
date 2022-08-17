<?php
include("../../Model/Update.php");

if (isset ($_POST ['descriptionProjetsAlliance']) && isset($_POST ['idProjetsAlliance'])) {
    $update = new Update();
    $ok = $update->editerProjetAlliance($_POST ['descriptionProjetsAlliance'], $_POST ['idProjetsAlliance']);
    header("Location:../../View/Projets.php");
}