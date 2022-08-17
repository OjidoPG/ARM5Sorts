<?php
include("../../Model/Delete.php");

if (isset ($_POST ['idProjets'])){
    $delete = new Delete();
    $ok=$delete->supprimerProjets($_POST ['idProjets']);
    echo json_encode($ok);
}