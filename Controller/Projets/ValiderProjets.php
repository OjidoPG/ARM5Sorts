<?php
include("../../Model/Update.php");

if (isset ($_POST ['idProjets'])){
    $update = new Update();
    $ok = $update->ValiderProjetsAlliance($_POST ['idProjets']);
    echo json_encode($ok);
}