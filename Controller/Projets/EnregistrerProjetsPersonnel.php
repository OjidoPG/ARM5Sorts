<?php
include("../../Model/Create.php");

if (isset ($_POST ['projet'])){
    $create = new Create();
    $ok = $create->EnregistrerProjetsPersonnel($_POST ['projet']);
    echo json_encode($ok);
}