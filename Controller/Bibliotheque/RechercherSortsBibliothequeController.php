<?php
include("../../Model/Read.php");

$read = new Read();
$ok = $read->readSortsBibliotheque();
echo json_encode($ok);

?>