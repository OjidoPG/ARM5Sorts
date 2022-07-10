<?php
include("Shared/header.php");
include("Shared/navbar.php");
if (isset($_SESSION['connect'])) {
    ?>
    <style type="text/css">
        <?php include ("../css/bgc.css")?>
        <?php include ("../css/lieux.css")?>
    </style>

    <!-- Jumbotron -->
    <div class="container-fluid">
        <div class="jumbotron text-center">
            <h1 class="display-4">
                <strong>Lieux</strong>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 d-flex justify-content-center">
                <div class="card text-center border border-success">
                    <img class="card-img-top" src="../Images/Lieux/EuropeMythiqueCard.jpg" alt="carte europe mythique">
                    <div class="card-body">
                        <h6 class="card-title">Géographie de l'europe mythique</h6>
                        <input type="button" class="btn btn-success"
                               onclick="window.open('../Images/Lieux/EuropeMythique.jpg','_blank')" value="Afficher"/>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <div class="card text-center border border-success">
                    <img class="card-img-top" src="../Images/Lieux/tribunalmap.jpg" alt="carte tribunaux">
                    <div class="card-body" data-toggle="collapse">
                        <h6 class="card-title">Carte des tribunaux d'europe</h6>
                        <input type="button" class="btn btn-success"
                               onclick="window.open('../Images/Lieux/tribunalmap.jpg','_blank')" value="Afficher"/>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <div class="card text-center border border-success">
                    <img class="card-img-top" src="../Images/Lieux/ValauxboisCard.jpg" alt="Val aux bois">
                    <div class="card-body" data-toggle="collapse">
                        <h6 class="card-title">Val aux bois</h6>
                        <input type="button" class="btn btn-success"
                               onclick="window.open('../Images/Lieux/ValAuxBois.jpg','_blank')" value="Afficher"/>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <div class="card text-center border border-success">
                    <img class="card-img-top" src="../Images/Lieux/ToulouseCard.jpg" alt="Val aux bois">
                    <div class="card-body" data-toggle="collapse">
                        <h6 class="card-title">Toulouse</h6>
                        <input type="button" class="btn btn-success"
                               onclick="window.open('../Images/Lieux/Toulouse.jpg','_blank')" value="Afficher"/>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-3 d-flex justify-content-center">
                <div class="card text-center border border-success">
                    <img class="card-img-top" src="../Images/Lieux/PlanRempartsCard.jpg" alt="Alliance">
                    <div class="card-body" data-toggle="collapse">
                        <h6 class="card-title">Alliance</h6>
                        <input type="button" class="btn btn-success"
                               onclick="window.open('../Images/Lieux/PlanRemparts.jpg','_blank')" value="Afficher"/>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <div class="card text-center border border-success">
                    <img class="card-img-top" src="../Images/Lieux/PortailsMercereCard.jpg" alt="Portails Mercere">
                    <div class="card-body" data-toggle="collapse">
                        <h6 class="card-title">Portails Mercere</h6>
                        <input type="button" class="btn btn-success"
                               onclick="window.open('../Images/Lieux/PortailsMercere.jpg','_blank')" value="Afficher"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("Shared/footer.php");
} else {
    header("Location: erreur.php");
}
?>