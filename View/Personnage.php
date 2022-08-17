<?php
session_start();
if (empty($_SESSION["idUtilisateur"])) {
    header("Location:erreur.php");
}

include("Shared/header.php");
include("Shared/navbar.php");
include("../Model/Read.php");
$read = new Read();

if ($_SESSION["idUtilisateur"] != 2) {
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

<?php } else { ?>

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
            <br>
            <div class="text-center"><strong>Benoit</strong></div>
            <br>
            <embed src="../Images/Personnage/Benoit/GianLuigi.pdf" width="1000" height="800">
            <br>
            <br>
            <div class="text-center"><strong>Bruno</strong></div>
            <br>
            <embed src="../Images/Personnage/Bruno/MelarkhisEolan.pdf" width="1000" height="800">
            <br>
            <br>
            <div class="text-center"><strong>Crotti</strong></div>
            <br>
            <embed src="../Images/Personnage/Crotti/Beranger.pdf" width="1000" height="800">
            <br>
            <br>
            <div class="text-center"><strong>Daniel</strong></div>
            <br>
            <embed src="../Images/Personnage/Daniel/JoeffreyDuPre.pdf" width="1000" height="800">
            <br>
            <br>
            <div class="text-center"><strong>Kikou</strong></div>
            <br>
            <embed src="../Images/Personnage/Kikou/Isabeau.pdf" width="1000" height="800">
            <br>
            <br>
        </div>
        <br>
        <br>
        <div class="col-md-12 text-center">
            <hr>
            <legend>Compagnon</legend>
            <hr>
            <br>
            <div class="text-center"><strong>Benoit</strong></div>
            <br>
            <embed src="../Images/Personnage/Benoit/RixendeBlodeuwedd.pdf" width="1000" height="800">
            <br>
            <br>
            <div class="text-center"><strong>Bruno</strong></div>
            <br>
            <embed src="../Images/Personnage/Bruno/TristanMalherbes.pdf" width="1000" height="800">
            <br>
            <br>
            <div class="text-center"><strong>Crotti</strong></div>
            <br>
            <embed src="../Images/Personnage/Crotti/EnguerrandDEMALPAS.pdf" width="1000" height="800">
            <br>
            <br>
            <div class="text-center"><strong>Daniel</strong></div>
            <br>
            <embed src="../Images/Personnage/Daniel/RobertoJimenez.pdf" width="1000" height="800">
            <br>
            <br>
            <div class="text-center"><strong>Kikou</strong></div>
            <br>
            <embed src="../Images/Personnage/Kikou/MaîtreThibaultRoland.pdf" width="1000" height="800">
            <br>
            <br>
        </div>
    </div>

<?php } ?>




