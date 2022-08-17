<?php
session_start();
if (empty($_SESSION["idUtilisateur"])) {
    header("Location:erreur.php");
}
include("Shared/header.php");
?>
<style type="text/css">
    <?php include ("../css/bgc.css")?>
    <?php include ("../css/accueil.css")?>
</style>

<div class="container-fluid">
    <div class="jumbotron text-center">
        <div class="row">
            <div class="col-md-3">
                <img class="embleme" src="../Images/EmblêmeAlliance.png" alt="">
            </div>
            <div class="col-md-6">
                <img src="../Images/accueil.png" alt="accueil">
            </div>
            <div class="col-md-3 rotate">
                <img class="embleme" src="../Images/EmblêmeAlliance.png" alt="">
            </div>
            <?php
            if ($_SESSION["idUtilisateur"]==2){
                ?>
            <div>
                <input type="button" name="Administration" value="Administration" onclick="self.location.href='../admin.php'">
            </div>
            <?php
            }
            ?>
        </div>
    </div>

    <!-- Boutons -->
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <a href="Maisons.php">
                    <button type="button" class="btn btnMaisons">Maisons
                    </button>
                </a>
            </div>
            <div class="col-md-4">
                <a href="Sorts.php">
                    <button type="button" class="btn btnSorts">Sorts
                    </button>
                </a>
            </div>
            <div class="col-md-4">
                <a href="Lieux.php">
                    <button type="button" class="btn btnLieux">Lieux
                    </button>
                </a>
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col-md-4">
                <a href="ArtsEtCompetences.php">
                    <button type="button" class="btn btnAetC">Arts et compétences
                    </button>
                </a>
            </div>
            <div class="col-md-4">
                <a href="Bibliotheque.php">
                    <button type="button" class="btn btnBibli">Bibliothèque
                    </button>
                </a>
            </div>
            <div class="col-md-4">
                <a href="Organigramme.php">
                    <button type="button" class="btn btnOrga">Organigramme
                    </button>
                </a>
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col-md-4">
                <a href="Personnage.php">
                    <button type="button" class="btn btnPerso">Personnage
                    </button>
                </a>
            </div>
            <div class="col-md-4">
                <a href="Projets.php">
                    <button type="button" class="btn btnProjets">Projets
                    </button>
                </a>
            </div>
            <div class="col-md-4">
                <a href="Background.php">
                    <button type="button" class="btn btnBack">Background
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="example1 fixed-bottom">
    <h5>Bonjour, les données utilisées sur ce site sont soumises aux droits d'auteur, et ils ne sont pas respectés.
        Veuillez ne pas partager l'identifiant et le mot de passe permettant de s'y connecter. Merci &#128536;</h5>
</div>

