<?php
session_start();
include("../../Model/Read.php");

$read = new Read();
$ok = $read->chercherProjetsPersonnel($_SESSION["idUtilisateur"]);
echo json_encode($ok);

?>