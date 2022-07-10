<?php
include("Shared/header.php");
include("Shared/navbar.php");
if (isset($_SESSION['connect'])) {
    ?>
    <style type="text/css">
        <?php include ("../css/bgc.css")?>
        <?php include ("../css/artsetcompetences.css")?>
    </style>

    <!-- Jumbotron -->
    <div class="container-fluid">
        <div class="jumbotron text-center">
            <h1 class="display-4">
                <strong>Arts et compétences</strong>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <legend class="text-center">Table de progression des compétences</legend>
                        <fieldset>
                            <table class="table table-sm table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="text-center">Niveau</th>
                                    <th scope="col" class="text-center">Acquérir Compétence</th>
                                    <th scope="col" class="text-center">Augmenter Compétence</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row" class="text-center">1</th>
                                    <td class="text-center">5</td>
                                    <td class="text-center">5</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">2</th>
                                    <td class="text-center">15</td>
                                    <td class="text-center">10</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">3</th>
                                    <td class="text-center">30</td>
                                    <td class="text-center">15</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">4</th>
                                    <td class="text-center">50</td>
                                    <td class="text-center">20</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">5</th>
                                    <td class="text-center">75</td>
                                    <td class="text-center">25</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">6</th>
                                    <td class="text-center">105</td>
                                    <td class="text-center">30</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">7</th>
                                    <td class="text-center">140</td>
                                    <td class="text-center">35</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">8</th>
                                    <td class="text-center">180</td>
                                    <td class="text-center">40</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">9</th>
                                    <td class="text-center">225</td>
                                    <td class="text-center">45</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">10</th>
                                    <td class="text-center">275</td>
                                    <td class="text-center">50</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">11</th>
                                    <td class="text-center">330</td>
                                    <td class="text-center">55</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">12</th>
                                    <td class="text-center">390</td>
                                    <td class="text-center">60</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">13</th>
                                    <td class="text-center">455</td>
                                    <td class="text-center">65</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">14</th>
                                    <td class="text-center">525</td>
                                    <td class="text-center">70</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">15</th>
                                    <td class="text-center">600</td>
                                    <td class="text-center">75</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">16</th>
                                    <td class="text-center">680</td>
                                    <td class="text-center">80</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">17</th>
                                    <td class="text-center">765</td>
                                    <td class="text-center">85</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">18</th>
                                    <td class="text-center">855</td>
                                    <td class="text-center">90</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">19</th>
                                    <td class="text-center">950</td>
                                    <td class="text-center">95</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">20</th>
                                    <td class="text-center">1050</td>
                                    <td class="text-center">100</td>
                                </tr>
                                </tbody>
                            </table>
                        </fieldset>
                    </div>
                    <div class="col-md-6 my-auto">
                        <legend class="text-center">Calcul augmentation de compétences</legend>
                        <fieldset>
                            <div class="row text-center">
                                <div class="col-md-3 my-auto">
                                    <span>Actuel</span>
                                </div>
                                <div class="col-md-3 my-auto">
                                    <select id="niveauCompDepart" class="form-control" name="niveauCompDepart">
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
                                    </select>
                                </div>
                                <div class="col-md-3 my-auto">
                                    <span>Souhaité</span>
                                </div>
                                <div class="col-md-3 my-auto">
                                    <select id="niveauCompArrivee" class="form-control" name="niveauCompArrivee">
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
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row text-center">
                                <div class="col-md-4 my-auto">
                                    <button id="IMFCompButton" type="button" class="btn btn-success">Il me
                                        faut
                                    </button>
                                </div>
                                <div class="col-md-2 my-auto">
                                    <span id="pointsCompNecessaires">&nbsp;</span>
                                </div>
                                <div class="col-md-6 my-auto text-center">
                                    <span>points de compétences</span>
                                </div>
                            </div>
                            <br>
                            <div class="row text-center">
                                <div class="col-md-12">
                                    <button id="RAZCompButton" type="button" class="btn btn-danger">Réinitialisation des
                                        niveaux
                                        de
                                        compétence
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div id="separation"></div>
                <div class="row">
                    <div class="col-md-6">
                        <legend class="text-center">Table de progression des arts</legend>
                        <fieldset>
                            <table class="table table-sm table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="text-center">Niveau</th>
                                    <th scope="col" class="text-center">Acquérir Art</th>
                                    <th scope="col" class="text-center">Augmenter Art</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row" class="text-center">1</th>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">2</th>
                                    <td class="text-center">3</td>
                                    <td class="text-center">2</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">3</th>
                                    <td class="text-center">6</td>
                                    <td class="text-center">3</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">4</th>
                                    <td class="text-center">10</td>
                                    <td class="text-center">4</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">5</th>
                                    <td class="text-center">15</td>
                                    <td class="text-center">5</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">6</th>
                                    <td class="text-center">21</td>
                                    <td class="text-center">6</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">7</th>
                                    <td class="text-center">28</td>
                                    <td class="text-center">7</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">8</th>
                                    <td class="text-center">36</td>
                                    <td class="text-center">8</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">9</th>
                                    <td class="text-center">45</td>
                                    <td class="text-center">9</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">10</th>
                                    <td class="text-center">55</td>
                                    <td class="text-center">10</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">11</th>
                                    <td class="text-center">66</td>
                                    <td class="text-center">11</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">12</th>
                                    <td class="text-center">78</td>
                                    <td class="text-center">12</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">13</th>
                                    <td class="text-center">91</td>
                                    <td class="text-center">13</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">14</th>
                                    <td class="text-center">105</td>
                                    <td class="text-center">14</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">15</th>
                                    <td class="text-center">120</td>
                                    <td class="text-center">15</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">16</th>
                                    <td class="text-center">136</td>
                                    <td class="text-center">16</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">17</th>
                                    <td class="text-center">153</td>
                                    <td class="text-center">17</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">18</th>
                                    <td class="text-center">171</td>
                                    <td class="text-center">18</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">19</th>
                                    <td class="text-center">190</td>
                                    <td class="text-center">19</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-center">20</th>
                                    <td class="text-center">210</td>
                                    <td class="text-center">20</td>
                                </tr>
                                </tbody>
                            </table>
                        </fieldset>
                    </div>
                    <div class="col-md-6 my-auto">
                        <legend class="text-center">Calcul augmentation des arts</legend>
                        <fieldset>
                            <div class="row text-center">
                                <div class="col-md-3 my-auto">
                                    <span>Actuel</span>
                                </div>
                                <div class="col-md-3 my-auto">
                                    <select id="niveauArtsDepart" class="form-control" name="niveauArtsDepart">
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
                                    </select>
                                </div>
                                <div class="col-md-3 my-auto">
                                    <span>Souhaité</span>
                                </div>
                                <div class="col-md-3 my-auto">
                                    <select id="niveauArtsArrivee" class="form-control" name="niveauArtsArrivee">
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
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row text-center">
                                <div class="col-md-4 my-auto">
                                    <button id="IMFArtsButton" type="button" class="btn btn-success">Il me
                                        faut
                                    </button>
                                </div>
                                <div class="col-md-2 my-auto">
                                    <span id="pointsArtsNecessaires">&nbsp;</span>
                                </div>
                                <div class="col-md-6 my-auto text-center">
                                    <span>points de compétences</span>
                                </div>
                            </div>
                            <br>
                            <div class="row text-center">
                                <div class="col-md-12">
                                    <button id="RAZArtsButton" type="button" class="btn btn-danger">Réinitialisation des
                                        niveaux
                                        d'arts
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $("#IMFCompButton").click(function () {
            let pointsDépart = calculPoints(parseInt($("#niveauCompDepart").val(), 10), 5);
            let pointsArrivée = calculPoints(parseInt($("#niveauCompArrivee").val(), 10), 5);
            let calcul = pointsArrivée - pointsDépart;
            if (calcul < 0) {
                $("#niveauCompArrivee").removeAttr('style');
                $("#niveauCompDepart").removeAttr('style');
                $("#pointsCompNecessaires").html('<i class="fa-solid fa-skull-crossbones fa-xl" style="color: red"></i>');
                $("#niveauCompArrivee").css({
                    'border': '2px solid',
                    'border-radius': '7px',
                    'border-color': 'red'
                })
            } else if (calcul == 0) {
                $("#niveauCompArrivee").removeAttr('style');
                $("#niveauCompDepart").removeAttr('style');
                $("#pointsCompNecessaires").html('<i class="fa-solid fa-equals fa-xl" style="color: orange"></i>');
                $("#niveauCompDepart").css({
                    'border': '2px solid',
                    'border-radius': '7px',
                    'border-color': 'orange'
                });
                $("#niveauCompArrivee").css({
                    'border': '2px solid',
                    'border-radius': '7px',
                    'border-color': 'orange'
                });
            } else {
                $("#niveauCompArrivee").removeAttr('style');
                $("#niveauCompDepart").removeAttr('style');
                $("#pointsCompNecessaires").html('<strong style="color: green">' + calcul + '</strong>');
                $("#niveauCompDepart").css({
                    'border': '2px solid',
                    'border-radius': '7px',
                    'border-color': 'green'
                });
                $("#niveauCompArrivee").css({
                    'border': '2px solid',
                    'border-radius': '7px',
                    'border-color': 'green'
                });
            }
        });

        $("#IMFArtsButton").click(function () {
            let pointsDépart = calculPoints(parseInt($("#niveauArtsDepart").val(), 10), 1);
            let pointsArrivée = calculPoints(parseInt($("#niveauArtsArrivee").val(), 10), 1);
            let calcul = pointsArrivée - pointsDépart;
            if (calcul < 0) {
                $("#niveauArtsArrivee").removeAttr('style');
                $("#niveauArtsDepart").removeAttr('style');
                $("#pointsArtsNecessaires").html('<i class="fa-solid fa-skull-crossbones fa-xl" style="color: red"></i>');
                $("#niveauArtsArrivee").css({
                    'border': '2px solid',
                    'border-radius': '7px',
                    'border-color': 'red'
                })
            } else if (calcul == 0) {
                $("#niveauArtsArrivee").removeAttr('style');
                $("#niveauArtsDepart").removeAttr('style');
                $("#pointsArtsNecessaires").html('<i class="fa-solid fa-equals fa-xl" style="color: orange"></i>');
                $("#niveauArtsDepart").css({
                    'border': '2px solid',
                    'border-radius': '7px',
                    'border-color': 'orange'
                });
                $("#niveauArtsArrivee").css({
                    'border': '2px solid',
                    'border-radius': '7px',
                    'border-color': 'orange'
                });
            } else {
                $("#niveauArtsArrivee").removeAttr('style');
                $("#niveauArtsDepart").removeAttr('style');
                $("#pointsArtsNecessaires").html('<strong style="color: green">' + calcul + '</strong>');
                $("#niveauArtsDepart").css({
                    'border': '2px solid',
                    'border-radius': '7px',
                    'border-color': 'green'
                });
                $("#niveauArtsArrivee").css({
                    'border': '2px solid',
                    'border-radius': '7px',
                    'border-color': 'green'
                });
            }
        });

        $("#RAZCompButton").click(function () {
            $("#niveauCompArrivee").removeAttr('style');
            $("#niveauCompDepart").removeAttr('style');
            $("#niveauCompDepart").val('0');
            $("#niveauCompArrivee").val('0');
            $("#pointsCompNecessaires").html('');
        });

        $("#RAZArtsButton").click(function () {
            $("#niveauArtsArrivee").removeAttr('style');
            $("#niveauArtsDepart").removeAttr('style');
            $("#niveauArtsDepart").val('0');
            $("#niveauArtsArrivee").val('0');
            $("#pointsArtsNecessaires").html('');
        });

        function calculPoints(niveau, multiplicateur) {
            let pointsComp = 0;
            let i = 0;
            while (i <= niveau) {
                pointsComp += i * multiplicateur;
                i++;
            }
            return pointsComp;
        }
    </script>

    <?php
    include("Shared/footer.php");
} else {
    header("Location: erreur.php");
}
?>