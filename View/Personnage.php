<?php
session_start();
if (empty($_SESSION["idUtilisateur"])) {
    header("Location:erreur.php");
}
include("Shared/header.php");
include("Shared/navbar.php");
include("../Model/Read.php");
$read = new Read();
$resultat = $read->readPersonnage($_SESSION["idUtilisateur"]);
foreach ($resultat as $personnage) {
    $mage = $personnage["mage"];
    $compagnon = $personnage["compagnon"];
}
?>

<style type="text/css">
    <?php include ("../css/bgc.css")?>
    <?php include ("../css/personnage.css")?>
</style>

<!-- Jumbotron -->
<div class="container-fluid">
    <div class="jumbotron text-center">
        <h1 class="display-4">
            <strong>Personnage - <?php echo $_SESSION["nomUtilisateur"] ?></strong>
    </div>
</div>

<div class="container-fluid">
    <div class="col-md-12 text-center">
        <hr>
        <legend>Mage</legend>
        <hr>
        <embed src=<?php echo $mage ?> width="1000" height="800">
    </div>
    <br>
    <br>
    <div class="col-md-12 text-center">
        <hr>
        <legend>Compagnon</legend>
        <hr>
        <embed src=<?php echo $compagnon ?> width="1000" height="800">
    </div>
</div>

