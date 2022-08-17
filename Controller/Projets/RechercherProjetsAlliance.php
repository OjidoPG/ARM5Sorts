<?php
include("../../Model/Read.php");

$read = new Read();
$ok = $read->chercherProjetsAlliance();
echo json_encode($ok);

?>