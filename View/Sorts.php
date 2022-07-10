<?php
include("Shared/headerSansSession.php");
include("Shared/navbar.php");
include("../Model/Read.php");
$read = new Read();
if (isset($_SESSION['connect'])) {
    ?>
    <style type="text/css">
        <?php include ("../css/bgc.css")?>
        <?php include ("../css/sorts.css")?>
    </style>

    <!-- Jumbotron -->
    <div class="container-fluid">
        <div class="jumbotron text-center">
            <h1 class="display-4">
                <strong>Sorts</strong>
        </div>
    </div>

    <!--Tableau de recherche selon le spécifications -->
    <div class="container-fluid">
        <form method="post" action="../../ Controller/RechercherSortsController.php">
            <legend>Rechercher les sorts par spécifications</legend>
            <fieldset>
                <div class="form-row text-center">
                    <!-- Dropdown technique des sorts -->
                    <div class="form-group col-md-1">
                        <label for="techniqueSort">Technique</label>
                        <select id="techniqueSort" class="form-control " name="techniqueSort">
                            <option selected value="0">Toutes</option>
                            <?php
                            $listeTechniqueSort = $read->readTechniqueSort();
                            foreach ($listeTechniqueSort as $techniqueSort) {
                                ?>
                                <option value="<?php echo $techniqueSort['idTechniqueSort'] ?>"><?php echo $techniqueSort['techniqueSort'] ?></option>
                                <?php
                            } ?>
                        </select>
                    </div>
                    <!-- Dropdown forme des sorts -->
                    <div class="form-group col-md-1">
                        <label for="formeSort">Forme</label>
                        <select id="formeSort" class="form-control" name="formeSort">
                            <option selected value="0">Toutes</option>
                            <?php
                            $listeFormeSort = $read->readFormeSort();
                            foreach ($listeFormeSort as $formeSort) {
                                ?>
                                <option value="<?php echo $formeSort['idFormeSort'] ?>"><?php echo $formeSort['formeSort'] ?></option>
                                <?php
                            } ?>
                        </select>
                    </div>
                    <!-- Dropdown niveau des sorts -->
                    <div class="form-group col-md-1">
                        <label for="niveauSort">Niveau</label>
                        <select id="niveauSort" class="form-control" name="niveauSort">
                            <option selected value="0">Tous</option>
                            <?php
                            $listeNiveauSort = $read->readNiveauSort();
                            foreach ($listeNiveauSort as $niveauSort) {
                                ?>
                                <option value="<?php echo $niveauSort['idNiveauSort'] ?>"><?php echo $niveauSort['niveauSort'] ?></option>
                                <?php
                            } ?>
                        </select>
                    </div>
                    <!-- Dropdown Jusqu'au niveau des sorts -->
                    <div class="form-group col-md-1">
                        <label for="jNiveauSort">Jusqu'au niveau</label>
                        <select id="jNiveauSort" class="form-control" name="jNiveauSort">
                            <option selected value="0">Non</option>
                            <option value="1">Oui</option>
                        </select>
                    </div>
                    <!-- Dropdown portée des sorts -->
                    <div class="form-group col-md-1">
                        <label for="porteeSort">Portée</label>
                        <select id="porteeSort" class="form-control" name="porteeSort">
                            <option selected value="0">Toutes</option>
                            <?php
                            $listePorteeSort = $read->readPorteeSort();
                            foreach ($listePorteeSort as $porteeSort) {
                                ?>
                                <option value="<?php echo $porteeSort['idPorteeSort'] ?>"><?php echo $porteeSort['porteeSort'] ?></option>
                                <?php
                            } ?>
                        </select>
                    </div>
                    <!-- Dropdown durée des sorts -->
                    <div class="form-group col-md-1">
                        <label for="dureeSort">Durée</label>
                        <select id="dureeSort" class="form-control" name="dureeSort">
                            <option selected value="0">Toutes</option>
                            <?php
                            $listeDureeSort = $read->readDureeSort();
                            foreach ($listeDureeSort as $dureeSort) {
                                ?>
                                <option value="<?php echo $dureeSort['idDureeSort'] ?>"><?php echo $dureeSort['dureeSort'] ?></option>
                                <?php
                            } ?>
                        </select>
                    </div>
                    <!-- Dropdown cible des sorts -->
                    <div class="form-group col-md-1">
                        <label for="cibleSort">Cible</label>
                        <select id="cibleSort" class="form-control" name="cibleSort">
                            <option selected value="0">Toutes</option>
                            <?php
                            $listeCibleSort = $read->readCibleSort();
                            foreach ($listeCibleSort as $cibleSort) {
                                ?>
                                <option value="<?php echo $cibleSort['idCibleSort'] ?>"><?php echo $cibleSort['cibleSort'] ?></option>
                                <?php
                            } ?>
                        </select>
                    </div>
                    <!-- Dropdown type des sorts -->
                    <div class="form-group col-md-1">
                        <label for="typeSort">Type</label>
                        <select id="typeSort" class="form-control" name="typeSort">
                            <option selected value="0">Toutes</option>
                            <?php
                            $listeTypeSort = $read->readTypeSort();
                            foreach ($listeTypeSort as $typeSort) {
                                ?>
                                <option value="<?php echo $typeSort['idTypeSort'] ?>"><?php echo $typeSort['typeSort'] ?></option>
                                <?php
                            } ?>
                        </select>
                    </div>
                    <!-- Dropdown version des sorts -->
                    <div class="form-group col-md-1">
                        <label for="versionSort">Version</label>
                        <select id="versionSort" class="form-control" name="versionSort">
                            <option selected value="0">Toutes</option>
                            <?php
                            $listeVersionSort = $read->readVersionSort();
                            foreach ($listeVersionSort as $versionSort) {
                                ?>
                                <option value="<?php echo $versionSort['idVersionSort'] ?>"><?php echo $versionSort['versionSort'] ?></option>
                                <?php
                            } ?>
                        </select>
                    </div>
                    <!-- Bouton submit -->
                    <div class="form-group col-md-1">
                        <label>&nbsp</label>
                        <div>
                            <input type="button" id="BoutonRechercher" class="btn btn-primary" value="&nbsp;Rechercher&nbsp;">
                        </div>
                    </div>
                    <!-- Bouton RAZ -->
                    <div class="form-group col-md-1">
                        <label>&nbsp</label>
                        <div>
                            <input type="button" id="RAZ" class="btn btn-danger" value="Remise à zéro">
                        </div>
                    </div>
                    <!-- Bouton Memo -->
                    <div class="form-group col-md-1">
                        <label>&nbsp</label>
                        <div>
                            <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#lexique"
                                    aria-expanded="false" aria-controls="collapseExample"
                            >&nbsp;&nbsp;&nbsp;Lexique&nbsp;&nbsp;&nbsp;
                            </button>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

    <div class="col-md-12">
        <div class="collapse" id="lexique">
            <div class="card card-body">
                <div class="row">
                    <div class="col-md-4">
                        <table class="table table-striped table-bordered table-sm text-center">
                            <thead>
                            <tr>
                                <th scope="col">Portée</th>
                                <th scope="col">Coût</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Personnel</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Toucher</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Regard / Champ Visuel</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Voix</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Vue</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Lien mystique</td>
                                <td>4</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <table class="table table-striped table-bordered table-sm text-center">
                            <thead>
                            <tr>
                                <th scope="col">Durée</th>
                                <th scope="col">Temps</th>
                                <th scope="col">Coût</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Momentanée</td>
                                <td>Instant</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Concentration</td>
                                <td>Tant que</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Diamètre</td>
                                <td>2 minutes</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Soleil</td>
                                <td>jusqu'a l'aube</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Anneau</td>
                                <td>Tant que reste dans un cercle</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Lune</td>
                                <td>1 mois</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Année</td>
                                <td>1 an</td>
                                <td>4</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <table class="table table-striped table-bordered table-sm text-center">
                            <thead>
                            <tr>
                                <th scope="col">Cible</th>
                                <th scope="col">Zone</th>
                                <th scope="col">Coût</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Individu</td>
                                <td>1 personne</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>Cercle</td>
                                <td>Rond sur le sol</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Partie</td>
                                <td>Une zone d'une personne</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Groupe</td>
                                <td>Un groupe de personnes</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Pièce</td>
                                <td>Une pièce d'une structure</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Structure</td>
                                <td>Une structure (maison, chateau, ...)</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Zone</td>
                                <td>Zone géographique</td>
                                <td>4</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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

    <!-- Tableau d'affichage des résultats -->
    <div class="container-fluid">
        <fieldset>
            <legend>Affichage de la liste</legend>
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
        </fieldset>
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

            $("#jNiveauSort").prop("disabled", true);

            /* Remise à 0 des Dropdown */
            $("#RAZ").click(function () {
                $("#techniqueSort").val(0);
                $("#formeSort").val(0);
                $("#niveauSort").val(0);
                $("#jNiveauSort").val(0);
                $("#dureeSort").val(0);
                $("#porteeSort").val(0);
                $("#cibleSort").val(0);
                $("#typeSort").val(0);
                $("#versionSort").val(0);
                $("#jNiveauSort").val(0);
                $("#jNiveauSort").prop("disabled", true);
            });

            /* lancement de la dataTable suite à une recherche */
            $("#BoutonRechercher").click(function () {
                $("#sortsDatatable").dataTable().fnClearTable();
                $.ajax({
                    method: "POST",
                    url: "../Controller/ListeSorts/RechercherSortsController.php",
                    dataType: "json",
                    data: {
                        "idTechniqueSort": $("#techniqueSort").val(),
                        "idFormeSort": $("#formeSort").val(),
                        "idJNiveauSort": $("#jNiveauSort").val(),
                        "idNiveauSort": $("#niveauSort").val(),
                        "idPorteeSort": $("#porteeSort").val(),
                        "idDureeSort": $("#dureeSort").val(),
                        "idCibleSort": $("#cibleSort").val(),
                        "idTypeSort": $("#typeSort").val(),
                        "idVersionSort": $("#versionSort").val()
                    },
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
                                '<button type="button" data-idSort = "' + sort["idSort"] + '" data-nomSort="' + sort["nomSort"] + '" ' +
                                'data-descriptionSort="' + sort["descriptionSort"] + '" ' +
                                'onclick="lancementModale(this)" class="btn btn-info btn-xs"><i class="fa-solid fa-explosion"></i></button>'
                            ]
                        ).draw();
                    });
                });
            });

            $("#niveauSort").change(function () {
                if ($("#niveauSort").val() != 0 && $("#niveauSort").val() != 1) {
                    $("#jNiveauSort").prop("disabled", false);
                } else {
                    $("#jNiveauSort").val(0);
                    $("#jNiveauSort").prop("disabled", true);
                }
            });
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