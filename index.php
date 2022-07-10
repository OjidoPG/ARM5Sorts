<?php
include("View/Shared/header.php");
?>
<style type="text/css">
    <?php include ("css/bgc.css")?>
    <?php include ("css/index.css")?>
</style>

<!-- Formulaire -->
<div class="container-fluid">
    <div class="row vh-100">
        <div class="col-md-6">
            <img src="Images/index.jpg" alt="image index">
        </div>
        <div class="col-md-5 vh-100">
            <div id="separation1" class="row"></div>
            <div class="row">
                <form class="col-md-4" method="post">
                    <div class="form-group">
                        <label for="identifiant">Identifiant</label>
                        <input id="identifiant" type="text" class="form-control" name="identifiant"
                               placeholder="Entrer votre identifiant">
                    </div>
                    <div class="form-group">
                        <label for="mdp">Mot de passe</label>
                        <input id="mdp" type="password" class="form-control" name="mdp" placeholder="Mot de passe">
                    </div>
                    <input id="boutonConnexion" type="button" class="btn btn-info" value="Connexion">
                </form>
            </div>
            <div id="separation2" class="row"></div>
            <div class="row">
                <div class="col-md-5 my-auto" id="divAlerte">
                    <div class="alert alert-danger" role="alert" id="reponseVide">Veuillez
                        renseigner l'identifiant et le mot de passe
                    </div>
                    <div class="alert alert-danger" role="alert" id="reponseFausse">Identifiant ou
                        mot de passe incorrect
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery(function () {

        $("#reponseVide").css('display', 'none');
        $("#reponseFausse").css('display', 'none');

        /**
         * Vérifie l'identifiant et le mot de passe
         */
        $("#boutonConnexion").click(function () {
            $("#reponseFausse").css('display', 'none');
            if ($("#identifiant").val() === "" || $("#mdp").val() === "") {
                $("#reponseVide").css('display', 'block');
            } else {
                $("#reponseVide").css('display', 'none');
                $.ajax({
                    method: "POST",
                    url: "Controller/ListeSorts/ConnexionController.php",
                    dataType: "json",
                    data: {
                        'identifiant': $("#identifiant").val(),
                        'mdp': $("#mdp").val()
                    },
                }).done(function (data) {
                    if (data['resultat']) {
                        location.href = "View/accueil.php";
                    } else {
                        $("#reponseFausse").css('display', 'block');
                    }
                });
            }
        });
    })
</script>
<?php
include("View/Shared/footer.php");
?>

