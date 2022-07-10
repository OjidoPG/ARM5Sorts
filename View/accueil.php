<?php
include("Shared/header.php");
if (isset($_SESSION['connect'])) {
    ?>
    <style type="text/css">
        <?php include ("../css/bgc.css")?>
        <?php include ("../css/accueil.css")?>
    </style>

    <div class="container-fluid">
        <div class="jumbotron text-center">
            <div class="row">
                <div class="col-md-3 rotate">
                    <img class="embleme" src="../Images/EmblêmeAlliance.png" alt="">
                </div>
                <div class="col-md-6">
                    <img src="../Images/accueil.png" alt="accueil">
                </div>
                <div class="col-md-3 rotate">
                    <img class="embleme" src="../Images/EmblêmeAlliance.png" alt="">
                </div>
            </div>
        </div>
        <!-- Séparation entre le jumbotron et les boutons -->
        <div class="row" id="separation"></div>

        <!-- Boutons -->
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 zoom-image">
                    <a href="Maisons.php">
                        <button type="button" class="btn btn-outline-warning">Maisons
                        </button>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="Sorts.php">
                        <button type="button" class="btn btn-outline-info">Sorts
                        </button>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="Lieux.php">
                        <button type="button" class="btn btn-outline-success">Lieux
                        </button>
                    </a>
                </div>
            </div>
            <br>
            <br>
            <div class="row text-center">
                <div class="col-md-4">
                    <a href="ArtsEtCompetences.php">
                        <button type="button" class="btn btn-outline-secondary">Arts et compétences
                        </button>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="Bibliotheque.php">
                        <button type="button" class="btn btn-outline-danger">Bibliothèque
                        </button>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="Organigramme.php">
                        <button type="button" id="boutonOrganigramme" class="btn btn-outline-dark">Organigramme
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="example1 fixed-bottom">
        <h5>Bonjour, les données utilisées sur ce site sont soumises aux droits d'auteur, et ils ne sont pas respectés. Veuillez ne pas partager l'identifiant et le mot de passe permettant de s'y connecter. Merci &#128536;</h5>
    </div>

    <?php
    include("Shared/footer.php");
} else {
    header("Location: erreur.php");
}
?>
