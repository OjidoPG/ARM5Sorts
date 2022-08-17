<?php
include("../../Model/Create.php");

if (isset ($_POST ['projet'])){
    $create = new Create();
    $ok = $create->EnregistrerProjetsAlliance($_POST ['projet']);
    echo json_encode($ok);
}
