<?php
include("Shared/header.php");
include("Shared/navbar.php");
if (isset($_SESSION['connect'])) {
    ?>
    <style type="text/css">
        <?php include ("../css/bgc.css")?>
        <?php include ("../css/organigramme.css")?>
    </style>

    <!-- Jumbotron -->
    <div class="container-fluid">
        <div class="jumbotron text-center">
            <h1 class="display-4">
                <strong class="organigrammeColorFont">Organigramme</strong>
        </div>
    </div>

    <div class="container-fluid">
        <nav class="nav nav-pills nav-fill">
            <a class="nav-item nav-link active" href="#Mages" data-toggle="tab">Mages</a>
            <a class="nav-item nav-link" href="#Compagnons" data-toggle="tab">Compagnons</a>
            <a class="nav-item nav-link" href="#Turbula" data-toggle="tab">Turbula</a>
            <a class="nav-item nav-link" href="#Contacts" data-toggle="tab">Contacts</a>
        </nav>
        <br>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="Mages">
                <hr>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <legend>Magistère</legend>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-md-3 text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-outline-light text-center btn-p" type="button"
                                        data-toggle="collapse"
                                        data-target="#magistere"
                                        aria-expanded="false" aria-controls="collapseExample">
                                    <img class="imgOrganigramme" src="../Images/Organigramme/Isabeau.png" alt="">
                                </button>
                            </div>
                            <div class="col-md-12 text-center">
                                <span>Isabeau BALARU</span>
                            </div>
                            <div class="col-md-12">
                                <div class="collapse" id="magistere">
                                    <div class="card card-body">
                                        <div class="row justify-content-center"><strong>PJ :</strong>&nbsp;Kikou</div>
                                        <div class="row justify-content-center"><strong>Maison :</strong>&nbsp;Jerbiton
                                        </div>
                                        <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Réfléchie,
                                            rassurante et
                                            joviale
                                        </div>
                                        <div class="row justify-content-center"><strong>Sceau :</strong>&nbsp;Odeur de
                                            mousse de sous-bois / bruit
                                            de source
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <hr>
                        <legend>Sodales PJ</legend>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <!-- Gian Luigi -->
                    <div class="col-md-3 text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-outline-light text-center btn-p" type="button"
                                        data-toggle="collapse"
                                        data-target="#gian"
                                        aria-expanded="false" aria-controls="collapseExample">
                                    <img class="imgOrganigramme" src="../Images/Organigramme/Gian-Luigi.png" alt="">
                                </button>
                            </div>
                            <div class="col-md-12 text-center">
                                <span>Gian LUIGI</span>
                            </div>
                            <div class="col-md-12">
                                <div class="collapse" id="gian">
                                    <div class="card card-body">
                                        <div class="row justify-content-center"><strong>PJ :</strong>&nbsp;Benoît</div>
                                        <div class="row justify-content-center"><strong>Maison :</strong>&nbsp;Criamon
                                        </div>
                                        <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Charmeur,
                                            mystérieux et fiable
                                        </div>
                                        <div class="row justify-content-center"><strong>Sceau :</strong>&nbsp;Couleur et
                                            odeur de fraise Tagada
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Melarkhis -->
                    <div class="col-md-3 text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-outline-light text-center btn-p" type="button"
                                        data-toggle="collapse"
                                        data-target="#melarkhis"
                                        aria-expanded="false" aria-controls="collapseExample">
                                    <img class="imgOrganigramme" src="../Images/Organigramme/Melarkhis.png" alt="">
                                </button>
                            </div>
                            <div class="col-md-12 text-center">
                                <span>Melarkhis EOLAN</span>
                            </div>
                            <div class="col-md-12">
                                <div class="collapse" id="melarkhis">
                                    <div class="card card-body">
                                        <div class="row justify-content-center"><strong>PJ :</strong>&nbsp;Bruno</div>
                                        <div class="row justify-content-center"><strong>Maison :</strong>&nbsp;Tytalus
                                        </div>
                                        <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Confiant,
                                            brave et susceptible
                                        </div>
                                        <div class="row justify-content-center"><strong>Sceau :</strong>&nbsp;Spirale
                                            d'air
                                            bleutée
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Béranger -->
                    <div class="col-md-3 text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-outline-light text-center btn-p" type="button"
                                        data-toggle="collapse"
                                        data-target="#beranger"
                                        aria-expanded="false" aria-controls="collapseExample">
                                    <img class="imgOrganigramme" src="../Images/Organigramme/Béranger.png" alt="">
                                </button>
                            </div>
                            <div class="col-md-12 text-center">
                                <span>Béranger</span>
                            </div>
                            <div class="col-md-12">
                                <div class="collapse" id="beranger">
                                    <div class="card card-body">
                                        <div class="row justify-content-center"><strong>PJ :</strong>&nbsp;Crotti</div>
                                        <div class="row justify-content-center"><strong>Maison :</strong>&nbsp;Bjornaer
                                        </div>
                                        <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Antipathique
                                        </div>
                                        <div class="row justify-content-center"><strong>Sceau :</strong>&nbsp;Odeur de
                                            Pastis (anis), couleur jaune
                                            beige
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Joeffrey Du Pré -->
                    <div class="col-md-3 text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-outline-light text-center btn-p" type="button"
                                        data-toggle="collapse"
                                        data-target="#joeffrey"
                                        aria-expanded="false" aria-controls="collapseExample">
                                    <img class="imgOrganigramme" src="../Images/Organigramme/Joeffrey.png" alt="">
                                </button>
                            </div>
                            <div class="col-md-12 text-center">
                                <span>Joeffrey Du Pré</span>
                            </div>
                            <div class="col-md-12">
                                <div class="collapse" id="joeffrey">
                                    <div class="card card-body">
                                        <div class="row justify-content-center"><strong>PJ :</strong>&nbsp;Daniel</div>
                                        <div class="row justify-content-center"><strong>Maison :</strong>&nbsp;Ex
                                            Miscellanae
                                        </div>
                                        <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Optimiste,
                                            calme et menteur
                                        </div>
                                        <div class="row justify-content-center"><strong>Sceau :</strong>&nbsp;Couleur
                                            vert
                                            pâle, odeur boisée
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <hr>
                        <legend>Sodales PNJ</legend>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <!-- Alix -->
                    <div class="col-md-3 text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-outline-light text-center btn-p" type="button"
                                        data-toggle="collapse"
                                        data-target="#alix"
                                        aria-expanded="false" aria-controls="collapseExample">
                                    <img class="imgOrganigramme" src="../Images/Organigramme/Alix_Talor.png" alt="">
                                </button>
                            </div>
                            <div class="col-md-12 text-center">
                                <span>Alix TALOR</span>
                            </div>
                            <div class="col-md-12">
                                <div class="collapse" id="alix">
                                    <div class="card card-body">
                                        <div class="row justify-content-center"><strong>PNJ</strong></div>
                                        <div class="row justify-content-center"><strong>Maison :</strong>&nbsp;Mercere
                                        </div>
                                        <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Efficace
                                            et déterminé
                                        </div>
                                        <div class="row justify-content-center"><strong>Sceau :</strong>&nbsp;Aucun
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Caladan -->
                    <div class="col-md-3 text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-outline-light text-center btn-p" type="button"
                                        data-toggle="collapse"
                                        data-target="#caladan"
                                        aria-expanded="false" aria-controls="collapseExample">
                                    <img class="imgOrganigramme" src="../Images/Organigramme/Caladan.png" alt="">
                                </button>
                            </div>
                            <div class="col-md-12 text-center">
                                <span>Caladan</span>
                            </div>
                            <div class="col-md-12">
                                <div class="collapse" id="caladan">
                                    <div class="card card-body">
                                        <div class="row justify-content-center"><strong>PNJ</strong>&nbsp;(Cédric)</div>
                                        <div class="row justify-content-center"><strong>Maison :</strong>&nbsp;Etre Faës
                                        </div>
                                        <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Insouciant
                                            et farceur
                                        </div>
                                        <div class="row justify-content-center"><strong>Sceau :</strong>&nbsp;Aucun
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Iris -->
                    <div class="col-md-3 text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-outline-light text-center btn-p" type="button"
                                        data-toggle="collapse"
                                        data-target="#iris"
                                        aria-expanded="false" aria-controls="collapseExample">
                                    <img class="imgOrganigramme" src="../Images/Organigramme/Iris.png" alt="">
                                </button>
                            </div>
                            <div class="col-md-12 text-center">
                                <span>Iris</span>
                            </div>
                            <div class="col-md-12">
                                <div class="collapse" id="iris">
                                    <div class="card card-body">
                                        <div class="row justify-content-center"><strong>PNJ</strong>&nbsp;</div>
                                        <div class="row justify-content-center"><strong>Maison :</strong>&nbsp;Inconnue
                                        </div>
                                        <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Imprévisible,
                                            curieuse et observatrice
                                        </div>
                                        <div class="row justify-content-center"><strong>Sceau :</strong>&nbsp;Aucun.
                                            <div class="row justify-content-center">Son
                                                tonton vole, sa maman est un arbre. Selon Melarkhis, il ne faut pas
                                                s'inquiéter,
                                                la situation est sous contrôle ... ou pas !
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="Compagnons">
                <hr>
                <div class="row text-center">
                    <legend>Compagnons PJ</legend>
                </div>
                <hr>
                <div class="row">
                    <!-- Thibault -->
                    <div class="col-md-3 text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-outline-light text-center btn-p" type="button"
                                        data-toggle="collapse"
                                        data-target="#thibault"
                                        aria-expanded="false" aria-controls="collapseExample">
                                    <img class="imgOrganigramme" src="../Images/Organigramme/Thibaut.png" alt="">
                                </button>
                            </div>
                            <div class="col-md-12 text-center">
                                <span>Maître Thibault Roland</span>
                            </div>
                            <div class="col-md-12">
                                <div class="collapse" id="thibault">
                                    <div class="card card-body">
                                        <div class="row justify-content-center"><strong>PJ :</strong>&nbsp;Kikou</div>
                                        <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Commandant
                                            de l'ordre des chevaliers de Sainte Fabia
                                        </div>
                                        <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Autoritaire
                                            et confiant
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Rixende -->
                    <div class="col-md-3 text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-outline-light text-center btn-p" type="button"
                                        data-toggle="collapse"
                                        data-target="#rixende"
                                        aria-expanded="false" aria-controls="collapseExample">
                                    <img class="imgOrganigramme" src="../Images/Organigramme/Rixende.png" alt="">
                                </button>
                            </div>
                            <div class="col-md-12 text-center">
                                <span>Rixende BLODEUWEDD</span>
                            </div>
                            <div class="col-md-12">
                                <div class="collapse" id="rixende">
                                    <div class="card card-body">
                                        <div class="row justify-content-center"><strong>PJ :</strong>&nbsp;Benoît</div>
                                        <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Médecin
                                            en
                                            chef de l'hospice de Sainte Fabia
                                        </div>
                                        <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Pacifique
                                            et bienveillante
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tristan -->
                    <div class="col-md-3 text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-outline-light text-center btn-p" type="button"
                                        data-toggle="collapse"
                                        data-target="#tristan"
                                        aria-expanded="false" aria-controls="collapseExample">
                                    <img class="imgOrganigramme" src="../Images/Organigramme/Tristan.png" alt="">
                                </button>
                            </div>
                            <div class="col-md-12 text-center">
                                <span>Tristan MALHERBES</span>
                            </div>
                            <div class="col-md-12">
                                <div class="collapse" id="tristan">
                                    <div class="card card-body">
                                        <div class="row justify-content-center"><strong>PJ :</strong>&nbsp;Bruno</div>
                                        <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Rôdeur,
                                            éclaireur
                                        </div>
                                        <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Téméraire,
                                            obstiné et taciturne
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- enguerrand -->
                    <div class="col-md-3 text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-outline-light text-center btn-p" type="button"
                                        data-toggle="collapse"
                                        data-target="#enguerrand"
                                        aria-expanded="false" aria-controls="collapseExample">
                                    <img class="imgOrganigramme" src="../Images/Organigramme/Enguerrand_DEMALPAS.png"
                                         alt="">
                                </button>
                            </div>
                            <div class="col-md-12 text-center">
                                <span>Enguerrand DEMALPAS</span>
                            </div>
                            <div class="col-md-12">
                                <div class="collapse" id="enguerrand">
                                    <div class="card card-body">
                                        <div class="row justify-content-center"><strong>PJ :</strong>&nbsp;Crotti</div>
                                        <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Moine
                                            chargé du bien être spirituel des écuyers
                                        </div>
                                        <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Déterminé
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <!-- roberto -->
                    <div class="col-md-3 text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-outline-light text-center btn-p" type="button"
                                        data-toggle="collapse"
                                        data-target="#roberto"
                                        aria-expanded="false" aria-controls="collapseExample">
                                    <img class="imgOrganigramme" src="../Images/Organigramme/Roberto.png" alt="">
                                </button>
                            </div>
                            <div class="col-md-12 text-center">
                                <span>Roberto JIMENEZ</span>
                            </div>
                            <div class="col-md-12">
                                <div class="collapse" id="roberto">
                                    <div class="card card-body">
                                        <div class="row justify-content-center"><strong>PJ :</strong>&nbsp;Daniel</div>
                                        <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Espion,
                                            assassin, éclaireur, voleur
                                        </div>
                                        <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Méfiant
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <hr>
                        <legend>Compagnons PNJ</legend>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <!-- Arthus -->
                    <div class="col-md-3 text-center">
                        <div class="col-md-12">
                            <button class="btn btn-outline-light text-center btn-p" type="button" data-toggle="collapse"
                                    data-target="#arthus"
                                    aria-expanded="false" aria-controls="collapseExample">
                                <img class="imgOrganigramme" src="../Images/Organigramme/Arthus_Biraben.png" alt="">
                            </button>
                        </div>
                        <div class="col-md-12 text-center">
                            <span>Arthus BIRABEN (d'Uverre)</span>
                        </div>
                        <div class="col-md-12">
                            <div class="collapse" id="arthus">
                                <div class="card card-body">
                                    <div class="row justify-content-center"><strong>PNJ</strong></div>
                                    <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Baron
                                        d'Uverre
                                    </div>
                                    <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Réflechi,
                                        patient et diplomate
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Barnabe -->
                    <div class="col-md-3 text-center">
                        <div class="col-md-12">
                            <button class="btn btn-outline-light text-center btn-p" type="button" data-toggle="collapse"
                                    data-target="#barnabe"
                                    aria-expanded="false" aria-controls="collapseExample">
                                <img class="imgOrganigramme" src="../Images/Organigramme/Barnabe.png" alt="">
                            </button>
                        </div>
                        <div class="col-md-12 text-center">
                            <span>Barnabé</span>
                        </div>
                        <div class="col-md-12">
                            <div class="collapse" id="barnabe">
                                <div class="card card-body">
                                    <div class="row justify-content-center"><strong>PNJ</strong></div>
                                    <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Spectre du
                                        carrefour des vents
                                    </div>
                                    <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Triste,
                                        perdu, maladroit et gentil
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Valère -->
                    <div class="col-md-3 text-center">
                        <div class="col-md-12">
                            <button class="btn btn-outline-light text-center btn-p" type="button" data-toggle="collapse"
                                    data-target="#valere"
                                    aria-expanded="false" aria-controls="collapseExample">
                                <img class="imgOrganigramme" src="../Images/Organigramme/Valere_domelgues.png" alt="">
                            </button>
                        </div>
                        <div class="col-md-12 text-center">
                            <span>Valère DOMELGUES</span>
                        </div>
                        <div class="col-md-12">
                            <div class="collapse" id="valere">
                                <div class="card card-body">
                                    <div class="row justify-content-center"><strong>PNJ</strong></div>
                                    <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Forgeron
                                        ... un
                                        peu
                                        spécial
                                    </div>
                                    <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Solitaire,
                                        méfiant et enjoué
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="Turbula">
                <div class="row">
                    <!-- Marie -->
                    <div class="col-md-3 text-center">
                        <div class="col-md-12">
                            <button class="btn btn-outline-light text-center btn-p" type="button" data-toggle="collapse"
                                    data-target="#mariecarmin"
                                    aria-expanded="false" aria-controls="collapseExample">
                                <img class="imgOrganigramme" src="../Images/Organigramme/MarieCarmin.png" alt="">
                            </button>
                        </div>
                        <div class="col-md-12 text-center">
                            <span>Marie CARMIN</span>
                        </div>
                        <div class="col-md-12">
                            <div class="collapse" id="mariecarmin">
                                <div class="card card-body">
                                    <div class="row justify-content-center"><strong>PNJ</strong>&nbsp</div>
                                    <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Cuisinière et nourrice d'Iris
                                    </div>
                                    <div class="row justify-content-center"><strong>Note :</strong>&nbsp;Lien affectif fort avec Iris
                                    </div>
                                    <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Expressive, bruyante, franche
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Hugues -->
                    <div class="col-md-3 text-center">
                        <div class="col-md-12">
                            <button class="btn btn-outline-light text-center btn-p" type="button" data-toggle="collapse"
                                    data-target="#hugues"
                                    aria-expanded="false" aria-controls="collapseExample">
                                <img class="imgOrganigramme" src="../Images/Organigramme/HughesHauterive.png" alt="">
                            </button>
                        </div>
                        <div class="col-md-12 text-center">
                            <span>Hugues HAUTERIVE</span>
                        </div>
                        <div class="col-md-12">
                            <div class="collapse" id="hugues">
                                <div class="card card-body">
                                    <div class="row justify-content-center"><strong>PNJ</strong>&nbsp</div>
                                    <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Gestion écurie
                                    </div>
                                    <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Discret, passioné, distant
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Arthur -->
                    <div class="col-md-3 text-center">
                        <div class="col-md-12">
                            <button class="btn btn-outline-light text-center btn-p" type="button" data-toggle="collapse"
                                    data-target="#arthur"
                                    aria-expanded="false" aria-controls="collapseExample">
                                <img class="imgOrganigramme" src="../Images/Organigramme/ArthurValvert.png" alt="">
                            </button>
                        </div>
                        <div class="col-md-12 text-center">
                            <span>Arthur VALVERT</span>
                        </div>
                        <div class="col-md-12">
                            <div class="collapse" id="arthur">
                                <div class="card card-body">
                                    <div class="row justify-content-center"><strong>PNJ</strong>&nbsp</div>
                                    <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Boulanger
                                    </div>
                                    <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Jovial, bruyant, épicurien
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Jehane -->
                    <div class="col-md-3 text-center">
                        <div class="col-md-12">
                            <button class="btn btn-outline-light text-center btn-p" type="button" data-toggle="collapse"
                                    data-target="#jehane"
                                    aria-expanded="false" aria-controls="collapseExample">
                                <img class="imgOrganigramme" src="../Images/Organigramme/Jehane.png" alt="">
                            </button>
                        </div>
                        <div class="col-md-12 text-center">
                            <span>Jehane GALLANDIS</span>
                        </div>
                        <div class="col-md-12">
                            <div class="collapse" id="jehane">
                                <div class="card card-body">
                                    <div class="row justify-content-center"><strong>PNJ</strong>&nbsp</div>
                                    <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Professeur des écoles
                                    </div>
                                    <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Autoritaire, caractérielle, déterminée
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <!-- Evelyne -->
                    <div class="col-md-3 text-center">
                        <div class="col-md-12">
                            <button class="btn btn-outline-light text-center btn-p" type="button" data-toggle="collapse"
                                    data-target="#evelynemassart"
                                    aria-expanded="false" aria-controls="collapseExample">
                                <img class="imgOrganigramme" src="../Images/Organigramme/EvelyneMassart.png" alt="">
                            </button>
                        </div>
                        <div class="col-md-12 text-center">
                            <span>Evelyne MASSART</span>
                        </div>
                        <div class="col-md-12">
                            <div class="collapse" id="evelynemassart">
                                <div class="card card-body">
                                    <div class="row justify-content-center"><strong>PNJ</strong>&nbsp</div>
                                    <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Gestion entrepôt nourriture
                                    </div>
                                    <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Discrète, renfermée, timide
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Isolde -->
                    <div class="col-md-3 text-center">
                        <div class="col-md-12">
                            <button class="btn btn-outline-light text-center btn-p" type="button" data-toggle="collapse"
                                    data-target="#isoldepontanier"
                                    aria-expanded="false" aria-controls="collapseExample">
                                <img class="imgOrganigramme" src="../Images/Organigramme/IsoldePontanier.png" alt="">
                            </button>
                        </div>
                        <div class="col-md-12 text-center">
                            <span>Isolde PONTANIER</span>
                        </div>
                        <div class="col-md-12">
                            <div class="collapse" id="isoldepontanier">
                                <div class="card card-body">
                                    <div class="row justify-content-center"><strong>PNJ</strong>&nbsp</div>
                                    <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Tenancière salle commune
                                    </div>
                                    <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Affirmée, têtue, courageuse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Aloïs -->
                    <div class="col-md-3 text-center">
                        <div class="col-md-12">
                            <button class="btn btn-outline-light text-center btn-p" type="button" data-toggle="collapse"
                                    data-target="#aloisferack"
                                    aria-expanded="false" aria-controls="collapseExample">
                                <img class="imgOrganigramme" src="../Images/Organigramme/AloisFerack.png" alt="">
                            </button>
                        </div>
                        <div class="col-md-12 text-center">
                            <span>Aloïs FERACK</span>
                        </div>
                        <div class="col-md-12">
                            <div class="collapse" id="aloisferack">
                                <div class="card card-body">
                                    <div class="row justify-content-center"><strong>PNJ</strong>&nbsp</div>
                                    <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Gestion dépôt arme
                                    </div>
                                    <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Rigoureux, bagarreur, têtu
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fulbert -->
                    <div class="col-md-3 text-center">
                        <div class="col-md-12">
                            <button class="btn btn-outline-light text-center btn-p" type="button" data-toggle="collapse"
                                    data-target="#fulbertmassin"
                                    aria-expanded="false" aria-controls="collapseExample">
                                <img class="imgOrganigramme" src="../Images/Organigramme/fulbertmassin.png" alt="">
                            </button>
                        </div>
                        <div class="col-md-12 text-center">
                            <span>Fulbert MASSIN</span>
                        </div>
                        <div class="col-md-12">
                            <div class="collapse" id="fulbertmassin">
                                <div class="card card-body">
                                    <div class="row justify-content-center"><strong>PNJ</strong>&nbsp</div>
                                    <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Forgeron
                                    </div>
                                    <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Epicurien, bruyant, bagarreur
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <!-- Gautier -->
                    <div class="col-md-3 text-center">
                        <div class="col-md-12">
                            <button class="btn btn-outline-light text-center btn-p" type="button" data-toggle="collapse"
                                    data-target="#gautier"
                                    aria-expanded="false" aria-controls="collapseExample">
                                <img class="imgOrganigramme" src="../Images/Organigramme/gautierperron.png" alt="">
                            </button>
                        </div>
                        <div class="col-md-12 text-center">
                            <span>Gautier PERRON</span>
                        </div>
                        <div class="col-md-12">
                            <div class="collapse" id="gautier">
                                <div class="card card-body">
                                    <div class="row justify-content-center"><strong>PNJ</strong>&nbsp</div>
                                    <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Charpentier
                                    </div>
                                    <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Solitaire, autonome, sympathique
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="Contacts">
                <div class="row">
                    <!-- Raymond -->
                    <div class="col-md-3 text-center">
                        <div class="col-md-12">
                            <button class="btn btn-outline-light text-center btn-p" type="button" data-toggle="collapse"
                                    data-target="#raymond"
                                    aria-expanded="false" aria-controls="collapseExample">
                                <img class="imgOrganigramme" src="../Images/Organigramme/Raymond.png" alt="">
                            </button>
                        </div>
                        <div class="col-md-12 text-center">
                            <span>Raymond V de Toulouse</span>
                        </div>
                        <div class="col-md-12">
                            <div class="collapse" id="raymond">
                                <div class="card card-body">
                                    <div class="row justify-content-center"><strong>PNJ</strong>&nbsp</div>
                                    <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Comte de
                                        Toulouse
                                    </div>
                                    <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Ambigu,
                                        pacifique, distant
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Rudolf -->
                    <div class="col-md-3 text-center">
                        <div class="col-md-12">
                            <button class="btn btn-outline-light text-center btn-p" type="button" data-toggle="collapse"
                                    data-target="#rudolf"
                                    aria-expanded="false" aria-controls="collapseExample">
                                <img class="imgOrganigramme" src="../Images/Organigramme/Rudolf.png" alt="">
                            </button>
                        </div>
                        <div class="col-md-12 text-center">
                            <span>Rudolf De PREMONT</span>
                        </div>
                        <div class="col-md-12">
                            <div class="collapse" id="rudolf">
                                <div class="card card-body">
                                    <div class="row justify-content-center"><strong>PNJ</strong>&nbsp</div>
                                    <div class="row justify-content-center"><strong>Maison :</strong>&nbsp;Guernicus
                                    </div>
                                    <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Chef des
                                        Quaesitors de Doïsseteppe
                                    </div>
                                    <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Strict,
                                        juste, loyal
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Felipe -->
                    <div class="col-md-3 text-center">
                        <div class="col-md-12">
                            <button class="btn btn-outline-light text-center btn-p" type="button" data-toggle="collapse"
                                    data-target="#felipe"
                                    aria-expanded="false" aria-controls="collapseExample">
                                <img class="imgOrganigramme" src="../Images/Organigramme/Felipe.png" alt="">
                            </button>
                        </div>
                        <div class="col-md-12 text-center">
                            <span>Felipe GONCHEZ</span>
                        </div>
                        <div class="col-md-12">
                            <div class="collapse" id="felipe">
                                <div class="card card-body">
                                    <div class="row justify-content-center"><strong>PNJ</strong>&nbsp</div>
                                    <div class="row justify-content-center"><strong>Maison :</strong>&nbsp;Jerbiton
                                    </div>
                                    <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;magister
                                        "Acuerdo Vulgar"
                                    </div>
                                    <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Diplomate,
                                        sociable
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Hubert -->
                    <div class="col-md-3 text-center">
                        <div class="col-md-12">
                            <button class="btn btn-outline-light text-center btn-p" type="button" data-toggle="collapse"
                                    data-target="#hubert"
                                    aria-expanded="false" aria-controls="collapseExample">
                                <img class="imgOrganigramme" src="../Images/Organigramme/hubert_BIRABEN.png" alt="">
                            </button>
                        </div>
                        <div class="col-md-12 text-center">
                            <span>Hubert BIRABEN</span>
                        </div>
                        <div class="col-md-12">
                            <div class="collapse" id="hubert">
                                <div class="card card-body">
                                    <div class="row justify-content-center"><strong>PNJ</strong>&nbsp</div>
                                    <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Noble
                                        toulousain, père d'Arthus
                                    </div>
                                    <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Fêtard,
                                        bon
                                        vivant, capitaliste
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <!-- foulques -->
                    <div class="col-md-3 text-center">
                        <div class="col-md-12">
                            <button class="btn btn-outline-light text-center btn-p" type="button" data-toggle="collapse"
                                    data-target="#foulques"
                                    aria-expanded="false" aria-controls="collapseExample">
                                <img class="imgOrganigramme" src="../Images/Organigramme/foulques.png" alt="">
                            </button>
                        </div>
                        <div class="col-md-12 text-center">
                            <span>Foulques de Toulouse</span>
                        </div>
                        <div class="col-md-12">
                            <div class="collapse" id="foulques">
                                <div class="card card-body">
                                    <div class="row justify-content-center"><strong>PNJ</strong>&nbsp</div>
                                    <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Evêque de
                                        Toulouse
                                    </div>
                                    <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Cultivé,
                                        poête, triste
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- theobald -->
                    <div class="col-md-3 text-center">
                        <div class="col-md-12">
                            <button class="btn btn-outline-light text-center btn-p" type="button" data-toggle="collapse"
                                    data-target="#theobald"
                                    aria-expanded="false" aria-controls="collapseExample">
                                <img class="imgOrganigramme" src="../Images/Organigramme/Theobald.png" alt="">
                            </button>
                        </div>
                        <div class="col-md-12 text-center">
                            <span>Théobald MONTBAR</span>
                        </div>
                        <div class="col-md-12">
                            <div class="collapse" id="theobald">
                                <div class="card card-body">
                                    <div class="row justify-content-center"><strong>PNJ</strong>&nbsp</div>
                                    <div class="row justify-content-center"><strong>Maison :</strong>&nbsp;Bonisagus
                                    </div>
                                    <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Bibliothécaire
                                        Doïsseteppe (grand ami de Melarkhis)
                                    </div>
                                    <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Cultivé,
                                        patient, sage
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Michel -->
                    <div class="col-md-3 text-center">
                        <div class="col-md-12">
                            <button class="btn btn-outline-light text-center btn-p" type="button" data-toggle="collapse"
                                    data-target="#michel"
                                    aria-expanded="false" aria-controls="collapseExample">
                                <img class="imgOrganigramme" src="../Images/Organigramme/PereMichel.png" alt="">
                            </button>
                        </div>
                        <div class="col-md-12 text-center">
                            <span>Père Michel</span>
                        </div>
                        <div class="col-md-12">
                            <div class="collapse" id="michel">
                                <div class="card card-body">
                                    <div class="row justify-content-center"><strong>PNJ</strong>&nbsp</div>
                                    <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Prêtre de Javielle
                                    </div>
                                    <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Sociable, altruiste, fiable
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Paul -->
                    <div class="col-md-3 text-center">
                        <div class="col-md-12">
                            <button class="btn btn-outline-light text-center btn-p" type="button" data-toggle="collapse"
                                    data-target="#paul"
                                    aria-expanded="false" aria-controls="collapseExample">
                                <img class="imgOrganigramme" src="../Images/Organigramme/Paul.png" alt="">
                            </button>
                        </div>
                        <div class="col-md-12 text-center">
                            <span>Paul DE MARCONI</span>
                        </div>
                        <div class="col-md-12">
                            <div class="collapse" id="paul">
                                <div class="card card-body">
                                    <div class="row justify-content-center"><strong>PNJ</strong>&nbsp</div>
                                    <div class="row justify-content-center"><strong>Fonction :</strong>&nbsp;Exorciste
                                    </div>
                                    <div class="row justify-content-center"><strong>Personnalité :</strong>&nbsp;Déterminé, calme, courageux
                                    </div>
                                </div>
                            </div>
                        </div>
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