<?php
include("View/Shared/header.php");
?>

<div class="container-fluid">
    <div class="jumbotron text-center">
        <h1 class="display-4">
            <strong>ARS MAGICA</strong>
    </div>
    <!-- Séparation entre le jumbotron et les boutons -->
    <div class="row" style="height: 100px"></div>

    <!-- Ensemble des boutons -->
    <div class="container">
        <div class="row text-center">
            <div class="col-4 offset-4">
                <a href="View/ListeSorts/ListeSorts.php">
                    <button type="button" class="btn btn-outline-info"
                            style="height: 200px; width: 200px; transition: 0.5s;">Liste des sorts
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
include("View/Shared/footer.php");
?>
