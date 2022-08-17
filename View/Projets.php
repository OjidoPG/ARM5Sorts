<?php
session_start();
if (empty($_SESSION["idUtilisateur"])) {
    header("Location:erreur.php");
}
include("Shared/header.php");
include("Shared/navbar.php");
?>
<style type="text/css">
    <?php include ("../css/bgc.css")?>
    <?php include ("../css/projets.css")?>
</style>

<!-- Jumbotron -->
<div class="container-fluid">
    <div class="jumbotron text-center">
        <h1 class="display-4">
            <strong class="projetsColorFont">Projets</strong>
    </div>
</div>

<!-- ------------------------------------------------------------------ -->
<!--                            GENERIQUE                               -->
<!-- ------------------------------------------------------------------ -->

<!-- Modal valider projet  -->
<div class="modal fade" id="valideProjetModal" tabindex="-1" role="dialog"
     aria-labelledby="valideProjetModal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Validation</h5>
            </div>
            <div class="modal-body">
                Confirmez-vous la modification du statut du projet ?
            </div>
            <div class="modal-footer">
                <button id="validationProjetsAllianceBtn" type="button" class="btn btn-danger"
                        onclick="validationProjet(this)">Valider
                </button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Annuler</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal suppression projet alliance-->
<div class="modal fade" id="supprimeProjetModal" tabindex="-1" role="dialog"
     aria-labelledby="supprimeProjetModal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Suppression</h5>
            </div>
            <div class="modal-body">
                Confirmez-vous la suppression du projet ?
            </div>
            <div class="modal-footer">
                <button id="suppressionsProjetsBtn" type="button" class="btn btn-danger"
                        onclick="suppressionProjet(this)">Confirmer
                </button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Annuler</button>
            </div>
        </div>
    </div>
</div>

<!-- ------------------------------------------------------------------ -->
<!--                      PROJET ALLIANCE                               -->
<!-- ------------------------------------------------------------------ -->

<!-- Tableau projets d'alliance -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <legend class="text-center">Projets d'alliance</legend>
            <table id="projetsAllianceDatatable" class="table table-striped">
                <thead>
                <tr>
                    <th class="text-center">Proposé par</th>
                    <th class="text-center">Projet</th>
                    <th class="text-center">Statut</th>
                    <th class="text-center">Supprimer</th>
                    <th class="text-center">Editer</th>
                    <th class="text-center">Etat</th>
                </tr>
                </thead>
                <tbody id="bodyProjetsAlliance">
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Bouton modale "proposer un projet d'alliance" -->
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <button type="button" class="btn btn-success" data-toggle="modal"
                    data-target="#modaleCreationProjetAlliance">Proposer un
                projet d'Alliance
            </button>
        </div>
    </div>
</div>

<!-- Modal ajout projet d'alliance -->
<div class="modal fade" id="modaleCreationProjetAlliance" tabindex="-1" role="dialog"
     aria-labelledby="modaleCreationProjetAlliance" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modale-title">Proposition de projet d'alliance</h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <textarea class="form-control" id="texteProjetAlliance" rows="5"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button onclick="enregistrerProjetAlliance()" type="button" class="btn btn-success"
                        data-dismiss="modal">Enregistrer
                </button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal editer projet alliance-->
<div class="modal fade" id="editeProjetsAllianceModal" tabindex="-1" role="dialog"
     aria-labelledby="editeProjetsAllianceModal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form action="../Controller/Projets/EditerProjetAlliance.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Edition</h5>
                </div>
                <div class="modal-body text-center">
                    <input type="text" id="descriptionProjetsAlliance" class="form-control input-lg"
                           name="descriptionProjetsAlliance"
                           value="">
                    <input type="hidden" id="idProjetsAlliance" class="form-control input-lg" name="idProjetsAlliance"
                           value="">
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-danger" value="Modifier">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Annuler</button>
                </div>
            </form>
        </div>
    </div>
</div>

<br>
<br>

<!-- ------------------------------------------------------------------ -->
<!--                      PROJET PERSONNEL                              -->
<!-- ------------------------------------------------------------------ -->

<!-- Tableau projets personnel -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <legend class="text-center">Projets personnel</legend>
            <table id="projetsPersonnelDatatable" class="table table-striped">
                <thead>
                <tr>
                    <th class="text-center">Projet</th>
                    <th class="text-center">Statut</th>
                    <th class="text-center">Supprimer</th>
                    <th class="text-center">Editer</th>
                    <th class="text-center">Etat</th>
                </tr>
                </thead>
                <tbody id="bodyProjetsAlliance">
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Bouton modale "proposer un projet personnel" -->
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <button type="button" class="btn btn-success" data-toggle="modal"
                    data-target="#modaleCreationProjetPersonnel">Proposer un
                projet personnel
            </button>
        </div>
    </div>
</div>

<!-- Modal ajout projet personnel -->
<div class="modal fade" id="modaleCreationProjetPersonnel" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modale-title">Création d'un projet personnel</h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <textarea class="form-control" id="texteProjetPersonnel" rows="5"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button onclick="enregistrerProjetPersonnel()" type="button" class="btn btn-success"
                        data-dismiss="modal">Enregistrer
                </button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal editer projet personnel-->
<div class="modal fade" id="editeProjetsPersonnelModal" tabindex="-1" role="dialog"
     aria-labelledby="editeProjetsPersonnelModal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form action="../Controller/Projets/EditerProjetPersonnel.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Edition</h5>
                </div>
                <div class="modal-body text-center">
                    <input type="text" id="descriptionProjetsPersonnel" class="form-control input-lg"
                           name="descriptionProjetsPersonnel"
                           value="">
                    <input type="hidden" id="idProjetsPersonnel" class="form-control input-lg" name="idProjetsPersonnel"
                           value="">
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-danger" value="Modifier">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Annuler</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#projetsAllianceDatatable').DataTable({
            "language": {
                "sProcessing": "Traitement en cours...",
                "sSearch": "Rechercher&nbsp;:",
                "sLengthMenu": "Afficher _MENU_ &eacute;l&eacute;ments",
                "sInfo": "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                "sInfoEmpty": "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
                "sInfoFiltered": "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                "sInfoPostFix": "",
                "sLoadingRecords": "Chargement en cours...",
                "sZeroRecords": "Aucun &eacute;l&eacute;ment &agrave; afficher",
                "sEmptyTable": "Aucune donn&eacute;e disponible dans le tableau",
                "oPaginate": {
                    "sFirst": "Premier",
                    "sPrevious": "Pr&eacute;c&eacute;dent",
                    "sNext": "Suivant",
                    "sLast": "Dernier"
                },
                "oAria": {
                    "sSortAscending": ": activer pour trier la colonne par ordre croissant",
                    "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
                },
                "select": {
                    "rows": {
                        "_": "%d lignes sélectionnées",
                        "0": "Aucune ligne sélectionnée",
                        "1": "1 ligne sélectionnée"
                    }
                }
            },
            columnDefs: [
                {"className": "dt-center", "targets": "_all"}
            ],
            autoWidth: false,
            columns: [
                {"width": "10%"},
                {"width": "70%"},
                {"width": "5%"},
                {"width": "5%"},
                {"width": "5%"},
                {"width": "5%"}
            ]
        });

        $('#projetsPersonnelDatatable').DataTable({
            "language": {
                "sProcessing": "Traitement en cours...",
                "sSearch": "Rechercher&nbsp;:",
                "sLengthMenu": "Afficher _MENU_ &eacute;l&eacute;ments",
                "sInfo": "Affichage de l'&eacute;l&eacute;ment _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                "sInfoEmpty": "Affichage de l'&eacute;l&eacute;ment 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
                "sInfoFiltered": "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                "sInfoPostFix": "",
                "sLoadingRecords": "Chargement en cours...",
                "sZeroRecords": "Aucun &eacute;l&eacute;ment &agrave; afficher",
                "sEmptyTable": "Aucune donn&eacute;e disponible dans le tableau",
                "oPaginate": {
                    "sFirst": "Premier",
                    "sPrevious": "Pr&eacute;c&eacute;dent",
                    "sNext": "Suivant",
                    "sLast": "Dernier"
                },
                "oAria": {
                    "sSortAscending": ": activer pour trier la colonne par ordre croissant",
                    "sSortDescending": ": activer pour trier la colonne par ordre d&eacute;croissant"
                },
                "select": {
                    "rows": {
                        "_": "%d lignes sélectionnées",
                        "0": "Aucune ligne sélectionnée",
                        "1": "1 ligne sélectionnée"
                    }
                }
            },
            columnDefs: [
                {"className": "dt-center", "targets": "_all"}
            ],
            autoWidth: false,
            columns: [
                {"width": "80%"},
                {"width": "5%"},
                {"width": "5%"},
                {"width": "5%"},
                {"width": "5%"}
            ]
        });

        /* lancement de la recherche des projets d'alliance au démarrage de la page */
        $.ajax({
            method: "POST",
            url: "../Controller/Projets/RechercherProjetsAlliance.php",
            dataType: "json",
        }).done(function (data) {
            $.each(data, function (i, projets) {
                let archiveProjets;
                if (projets["archive"] == 0) {
                    archiveProjets = '<span style="color: green"><strong>En cours</strong></span>';
                } else {
                    archiveProjets = '<span style="color: red"><strong>Terminé</strong></span>';
                }
                let idUtilisateurConnecte = <?php echo $_SESSION["idUtilisateur"]; ?>;
                let idCreateurProjet = projets["idUtilisateur"];
                let editProjets;
                let valideProjets;
                let supprimeProjets
                if (idUtilisateurConnecte == idCreateurProjet) {
                    supprimeProjets = '<button type="button" data-idProjets="' + projets["idProjets"] + '" class="btn btn-danger btn-sm" ' +
                        'onclick="modaleSupprimerProjet(this)"><i class="fa-regular fa-trash-can"></i></button>';
                    editProjets = '<button type="button" data-idProjets="' + projets["idProjets"] + '" data-Projets = "' + projets["Projets"] + '" class="btn btn-warning btn-sm"' +
                        'onclick="modaleEditeProjetAlliance(this)"><i class="fa-solid fa-pen-to-square"></i></button>';
                    if (projets["archive"] == 0) {
                        valideProjets = '<button type="button" data-idProjets="' + projets["idProjets"] + '" class="btn btn-success btn-sm"' +
                            'onclick="modaleValideProjet(this)"><i class="fa-solid fa-check"></i></i></button>';
                    } else {
                        valideProjets = '<button type="button" data-idProjets="' + projets["idProjets"] + '" class="btn btn-danger btn-sm"' +
                            'onclick="modaleValideProjet(this)"><i class="fa-solid fa-check"></i></i></button>';
                    }
                } else {
                    supprimeProjets = '<i class="fa-solid fa-ban" style="color: red"></i>';
                    editProjets = '<i class="fa-solid fa-ban" style="color: red"></i>';
                    valideProjets = '<i class="fa-solid fa-ban" style="color: red"></i>';
                }
                $("#projetsAllianceDatatable").DataTable().row.add(
                    [
                        projets["nomUtilisateur"],
                        projets["Projets"],
                        archiveProjets,
                        supprimeProjets,
                        editProjets,
                        valideProjets
                    ]
                ).draw();
            });
        });

        /* lancement de la recherche des projets personnel au démarrage de la page */
        $.ajax({
            method: "POST",
            url: "../Controller/Projets/RechercherProjetsPersonnel.php",
            dataType: "json",
        }).done(function (data) {
            $.each(data, function (i, projets) {
                let archiveProjets;
                if (projets["archive"] == 0) {
                    archiveProjets = '<span style="color: green"><strong>En cours</strong></span>';
                } else {
                    archiveProjets = '<span style="color: red"><strong>Terminé</strong></span>';
                }

                let valideProjets;
                if (projets["archive"] == 0) {
                    valideProjets = '<button type="button" data-idProjets="' + projets["idProjets"] + '" class="btn btn-success btn-sm"' +
                        'onclick="modaleValideProjet(this)"><i class="fa-solid fa-check"></i></i></button>';
                } else {
                    valideProjets = '<button type="button" data-idProjets="' + projets["idProjets"] + '" class="btn btn-danger btn-sm"' +
                        'onclick="modaleValideProjet(this)"><i class="fa-solid fa-check"></i></i></button>';
                }

                $("#projetsPersonnelDatatable").DataTable().row.add(
                    [
                        projets["Projets"],
                        archiveProjets,
                        '<button type="button" data-idProjets="' + projets["idProjets"] + '" class="btn btn-danger btn-sm"' +
                        'onclick="modaleSupprimerProjet(this)"><i class="fa-regular fa-trash-can"></i></button>',
                        '<button type="button" data-idProjets="' + projets["idProjets"] + '" data-Projets = "' + projets["Projets"] + '" class="btn btn-warning btn-sm"' +
                        'onclick="modaleEditeProjetPersonnel(this)"><i class="fa-solid fa-pen-to-square"></i></button>',
                        valideProjets
                    ]
                ).draw();
            });
        });
    });

    <!-- ------------------------------------------------------------------ -->
    <!--                      PROJET ALLIANCE                               -->
    <!-- ------------------------------------------------------------------ -->

    function enregistrerProjetAlliance() {
        $.ajax({
            method: "POST",
            url: "../Controller/Projets/EnregistrerProjetsAlliance.php",
            dataType: "json",
            data: {
                projet: $("#texteProjetAlliance").val()
            }
        }).done(function (data) {
            window.location.reload();
        });
    }

    function modaleSupprimerProjet(e) {
        $("#supprimeProjetModal").modal();
        $("#suppressionsProjetsBtn").attr("data-idProjets", e.getAttribute("data-idProjets"));
    }

    function suppressionProjet(e) {
        $.ajax({
            method: "POST",
            url: "../Controller/Projets/SupprimerProjets.php",
            dataType: "json",
            data: {
                idProjets: e.getAttribute("data-idProjets")
            }
        }).done(function (data) {
            window.location.reload();
        });
    }

    function modaleEditeProjetAlliance(e) {
        $("#editeProjetsAllianceModal").modal();
        $("#idProjetsAlliance").val(e.getAttribute("data-idProjets"));
        $("#descriptionProjetsAlliance").val(e.getAttribute("data-Projets"))
    }

    function modaleValideProjet(e) {
        $("#valideProjetModal").modal();
        $("#validationProjetsAllianceBtn").attr("data-idProjets", e.getAttribute("data-idProjets"));
    }

    function validationProjet(e) {
        $.ajax({
            method: "POST",
            url: "../Controller/Projets/ValiderProjets.php",
            dataType: "json",
            data: {
                idProjets: e.getAttribute("data-idProjets")
            }
        }).done(function (data) {
            window.location.reload();
        });
    }

    <!-- ------------------------------------------------------------------ -->
    <!--                      PROJET PERSONNEL                              -->
    <!-- ------------------------------------------------------------------ -->

    function enregistrerProjetPersonnel() {
        $.ajax({
            method: "POST",
            url: "../Controller/Projets/EnregistrerProjetsPersonnel.php",
            dataType: "json",
            data: {
                projet: $("#texteProjetPersonnel").val()
            }
        }).done(function (data) {
            window.location.reload();
        });
    }

    function modaleEditeProjetPersonnel(e) {
        $("#editeProjetsPersonnelModal").modal();
        $("#idProjetsPersonnel").val(e.getAttribute("data-idProjets"));
        $("#descriptionProjetsPersonnel").val(e.getAttribute("data-Projets"))
    }

    function modaleValideProjetPersonnel(e) {
        $("#valideProjetPersonnelModal").modal();
        $("#validationProjetsPersonnelBtn").attr("data-idProjets", e.getAttribute("data-idProjets"));
    }
</script>