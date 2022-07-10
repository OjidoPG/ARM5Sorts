<?php
include("Shared/header.php");
include("Shared/navbar.php");
if (isset($_SESSION['connect'])) {
    ?>
    <style type="text/css">
        <?php include ("../css/bgc.css")?>
        <?php include ("../css/bibliotheque.css")?>
    </style>

    <!-- Jumbotron -->
    <div class="container-fluid">
        <div class="jumbotron text-center">
            <h1 class="display-4">
                <strong>Bibliothèque</strong>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <legend class="text-center">Summae</legend>
                <table class="table table-sm table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">Summae</th>
                        <th scope="col" class="text-center">Niveau</th>
                        <th scope="col" class="text-center">Qualité</th>
                        <th scope="col" class="text-center">Selection</th>
                    </tr>
                    <tbody>
                    <tr>
                        <th scope="row" class="text-center">Creo</th>
                        <td class="text-center">6</td>
                        <td class="text-center">22</td>
                        <td class="text-center">
                            <div id="animation" onclick="selectNivSummae(22)"><i
                                        class="fa-solid fa-circle-check fa-lg"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Intelligo</th>
                        <td class="text-center">3</td>
                        <td class="text-center">22</td>
                        <td class="text-center">
                            <div id="animation" onclick="selectNivSummae(22)"><i
                                        class="fa-solid fa-circle-check fa-lg"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Muto</th>
                        <td class="text-center">2</td>
                        <td class="text-center">22</td>
                        <td class="text-center">
                            <div id="animation" onclick="selectNivSummae(22)"><i
                                        class="fa-solid fa-circle-check fa-lg"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Perdo</th>
                        <td class="text-center">6</td>
                        <td class="text-center">22</td>
                        <td class="text-center">
                            <div id="animation" onclick="selectNivSummae(22)"><i
                                        class="fa-solid fa-circle-check fa-lg"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Rego</th>
                        <td class="text-center">13</td>
                        <td class="text-center">22</td>
                        <td class="text-center">
                            <div id="animation" onclick="selectNivSummae(22)"><i
                                        class="fa-solid fa-circle-check fa-lg"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Animal</th>
                        <td class="text-center">4</td>
                        <td class="text-center">22</td>
                        <td class="text-center">
                            <div id="animation" onclick="selectNivSummae(22)"><i
                                        class="fa-solid fa-circle-check fa-lg"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Aquam</th>
                        <td class="text-center">8</td>
                        <td class="text-center">22</td>
                        <td class="text-center">
                            <div id="animation" onclick="selectNivSummae(22)"><i
                                        class="fa-solid fa-circle-check fa-lg"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Auram</th>
                        <td class="text-center">6</td>
                        <td class="text-center">22</td>
                        <td class="text-center">
                            <div id="animation" onclick="selectNivSummae(22)"><i
                                        class="fa-solid fa-circle-check fa-lg"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Corpus</th>
                        <td class="text-center">10</td>
                        <td class="text-center">22</td>
                        <td class="text-center">
                            <div id="animation" onclick="selectNivSummae(22)"><i
                                        class="fa-solid fa-circle-check fa-lg"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Herbam</th>
                        <td class="text-center">8</td>
                        <td class="text-center">22</td>
                        <td class="text-center">
                            <div id="animation" onclick="selectNivSummae(22)"><i
                                        class="fa-solid fa-circle-check fa-lg"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Ignem</th>
                        <td class="text-center">7</td>
                        <td class="text-center">22</td>
                        <td class="text-center">
                            <div id="animation" onclick="selectNivSummae(22)"><i
                                        class="fa-solid fa-circle-check fa-lg"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Imaginem</th>
                        <td class="text-center">9</td>
                        <td class="text-center">22</td>
                        <td class="text-center">
                            <div id="animation" onclick="selectNivSummae(22)"><i
                                        class="fa-solid fa-circle-check fa-lg"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Mentem</th>
                        <td class="text-center">5</td>
                        <td class="text-center">22</td>
                        <td class="text-center">
                            <div id="animation" onclick="selectNivSummae(22)"><i
                                        class="fa-solid fa-circle-check fa-lg"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Terram</th>
                        <td class="text-center">5</td>
                        <td class="text-center">22</td>
                        <td class="text-center">
                            <div id="animation" onclick="selectNivSummae(22)"><i
                                        class="fa-solid fa-circle-check fa-lg"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Virtum</th>
                        <td class="text-center">3</td>
                        <td class="text-center">22</td>
                        <td class="text-center">
                            <div id="animation" onclick="selectNivSummae(22)"><i
                                        class="fa-solid fa-circle-check fa-lg"></i>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 my-auto">
                <div class="row">
                    <legend class="text-center">Calcul progression avec Summae</legend>
                    <div class="col-md-3 my-auto text-center">
                        <span>Qualité</span>
                    </div>
                    <div class="col-md-3 my-auto">
                        <select id="niveauSumQualite" class="form-control" name="niveauSumQualite">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                        </select>
                    </div>
                    <div class="col-md-3 my-auto text-center">
                        <span>Durée</span>
                    </div>
                    <div class="col-md-3 my-auto">
                        <select id="niveauSumDuree" class="form-control" name="niveauSumDuree">
                            <option selected value="0">0 mois</option>
                            <option value="1">1 mois</option>
                            <option value="2">2 mois</option>
                            <option value="3">3 mois</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row text-center">
                    <div class="col-md-4 my-auto">
                        <button id="IMFSumButton" type="button" class="btn btn-success">Je gagne
                        </button>
                    </div>
                    <div class="col-md-2 my-auto">
                        <span id="pointsSumGagnes">&nbsp;</span>
                    </div>
                    <div class="col-md-6 my-auto text-center">
                        <span>points de compétence d'Art</span>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
                <legend class="text-center">Textes de compétences</legend>
                <table class="table table-sm table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">Compétences</th>
                        <th scope="col" class="text-center">Niveau</th>
                        <th scope="col" class="text-center">Qualité</th>
                        <th scope="col" class="text-center">Selection</th>
                    </tr>
                    <tbody>
                    <tr>
                        <th scope="row" class="text-center">Parma Magica</th>
                        <td class="text-center">5</td>
                        <td class="text-center">20</td>
                        <td class="text-center">
                            <div id="animation" onclick="selectNivTexte(20)"><i
                                        class="fa-solid fa-circle-check fa-lg"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Droit hermétique</th>
                        <td class="text-center">6</td>
                        <td class="text-center">15</td>
                        <td class="text-center">
                            <div id="animation" onclick="selectNivTexte(15)"><i
                                        class="fa-solid fa-circle-check fa-lg"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">Connaissance de la féérie</th>
                        <td class="text-center">6</td>
                        <td class="text-center">15</td>
                        <td class="text-center">
                            <div id="animation" onclick="selectNivTexte(15)"><i
                                        class="fa-solid fa-circle-check fa-lg"></i>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 my-auto">
                <div class="row">
                    <legend class="text-center">Calcul progression avec Textes de compétences</legend>
                    <div class="col-md-3 my-auto text-center">
                        <span>Qualité</span>
                    </div>
                    <div class="col-md-3 my-auto">
                        <select id="niveauTexteQualite" class="form-control" name="niveauTexteQualite">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                        </select>
                    </div>
                    <div class="col-md-3 my-auto text-center">
                        <span>Durée</span>
                    </div>
                    <div class="col-md-3 my-auto">
                        <select id="niveauTexteDuree" class="form-control" name="niveauTexteDuree">
                            <option selected value="0">0 mois</option>
                            <option value="1">1 mois</option>
                            <option value="2">2 mois</option>
                            <option value="3">3 mois</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row text-center">
                    <div class="col-md-4 my-auto">
                        <button id="IMFTexteButton" type="button" class="btn btn-success">Je gagne
                        </button>
                    </div>
                    <div class="col-md-2 my-auto">
                        <span id="pointsTexteGagnes">&nbsp;</span>
                    </div>
                    <div class="col-md-6 my-auto text-center">
                        <span>points de compétences</span>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <legend class="text-center">Textes de laboratoire</legend>
                <table id="sortsDatatable" class="table table-striped">
                    <thead>
                    <tr>
                        <th class="text-center">Nom du sort</th>
                        <th class="text-center">Technique</th>
                        <th class="text-center">Forme</th>
                        <th class="text-center">Niveau</th>
                        <th class="text-center">Portée</th>
                        <th class="text-center">Durée</th>
                        <th class="text-center">Cible</th>
                        <th class="text-center">Type</th>
                        <th class="text-center">Version</th>
                        <th class="text-center">Description</th>
                    </tr>
                    </thead>
                    <tbody id="bodySort">
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modale" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header row text-center">
                    <h5 id="nS" class="modal-title col-md-12"></h5>
                </div>
                <div id="descriptionSort" class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#sortsDatatable').DataTable({
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
                    {"width": "46%"},
                    {"width": "6%"},
                    {"width": "6%"},
                    {"width": "6%"},
                    {"width": "6%"},
                    {"width": "6%"},
                    {"width": "6%"},
                    {"width": "6%"},
                    {"width": "6%"},
                    {"width": "6%"}
                ]
            });

            /* lancement de la dataTable au démarrage de la page */
            $.ajax({
                method: "POST",
                url: "../Controller/Bibliotheque/RechercherSortsBibliothequeController.php",
                dataType: "json",
            }).done(function (data) {
                $.each(data, function (i, sort) {
                    let typeSort;
                    if (sort["typeSort"] == "Rituel") {
                        typeSort = '<span style="color: red">' + sort["typeSort"] + '</span>';
                    } else {
                        typeSort = '<span style="color: green">' + sort["typeSort"] + '</span>';
                    }
                    let versionSort;
                    switch (sort["versionSort"]) {
                        case "Ancienne":
                            versionSort = '<i class="fa-solid fa-arrow-down-wide-short" style="color: orange"></i>';
                            break;
                        case "Actuelle":
                            versionSort = '<i class="fa-solid fa-align-justify"></i>';
                            break;
                        case "Création":
                            versionSort = '<i class="fa-solid fa-arrow-up-short-wide" style="color: green"></i>';
                            break;
                    }
                    $("#sortsDatatable").DataTable().row.add(
                        [
                            sort["nomSort"],
                            sort["techniqueSort"],
                            sort["formeSort"],
                            sort["niveauSort"],
                            sort["porteeSort"],
                            sort["dureeSort"],
                            sort["cibleSort"],
                            typeSort,
                            versionSort,
                            '<button type="button" data-nomSort="' + sort["nomSort"] + '" ' +
                            'data-descriptionSort="' + sort["descriptionSort"] + '" ' +
                            'onclick="lancementModale(this)" class="btn btn-info btn-xs"><i class="fa-solid fa-explosion"></i></i></i></button>'
                        ]
                    ).draw();
                });
            });
        });

        function selectNivSummae(niveau) {
            $("#niveauSumQualite").val(niveau);
        }

        $("#IMFSumButton").click(function () {
            $("#pointsSumGagnes").html(
                '<strong>' + Math.round(parseInt($("#niveauSumQualite").val()) * (0.33 * (parseInt($("#niveauSumDuree").val())))) + '</strong>'
            );
        });

        function selectNivTexte(niveau) {
            $("#niveauTexteQualite").val(niveau);
        }

        $("#IMFTexteButton").click(function () {
            $("#pointsTexteGagnes").html(
                '<strong>' + Math.round(parseInt($("#niveauTexteQualite").val()) * (0.33 * (parseInt($("#niveauTexteDuree").val())))) + '</strong>'
            );
        });

        function lancementModale(e) {
            $("#modale").modal();
            $("#nS").html(e.getAttribute("data-nomSort"));
            $("#descriptionSort").html(e.getAttribute("data-descriptionSort"));
        };
    </script>

    <?php
    include("Shared/footer.php");
} else {
    header("Location: erreur.php");
}
?>