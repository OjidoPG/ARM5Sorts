<?php
session_start();
if (empty($_SESSION["idUtilisateur"])){
    header("Location:erreur.php");
}
include("Shared/header.php");
include("Shared/navbar.php");
include("../Model/BDD.php");
?>
<style type="text/css">
    <?php include ("../css/bgc.css")?>
    <?php include ("../css/maisons.css")?>
</style>

<!-- Jumbotron -->
<div class="container-fluid">
    <div class="jumbotron text-center">
        <h1 class="display-4">
            <strong>Maisons</strong>
    </div>
</div>

<div class="container">
    <!-- Bjoarner -->
    <div class="row text-center ">
        <legend>Bjornaer</legend>
    </div>
    <div class="row">
        <div class="col text-center">
            <h6>Domus Magna : Crintera - Tribunal : Rhin</h6>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-md-1 ">
            <img src="../Images/Maisons/Bjornaer.gif" alt="Bjornaer">
        </div>
        <div class="col text-justify">
            Ces magiciens n'ont étés que partiellement acceptés par l'Ordre, la fondatrice de leur Maison n'étant
            pas de
            tradition romaine mais germanique. La fascination qu'ils éprouvent pour les bêtes et le côté animal
            de la nature humaine met bien des Mages mal à l'aise. Ils apprécient leur propre côté animal et le
            considèrent comme aussi important que leur aspect humain. Tous apprennent à prendre à volonté la forme
            d'un
            animal ("Animal de Cœur") qui reflète d'une certaine manière leur personnalité profonde.
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <a href="../Images/Maisons/Bjornaer-Exemple.pdf" target="_blank">Exemple</a>
        </div>
    </div>
    <div class="row">&nbsp;</div>
    <hr>
    <!-- Bonisagus -->
    <div class="row text-center ">
        <legend>Bonisagus</legend>
    </div>
    <div class="row">
        <div class="col text-center">
            <h6>Domus Magna : Durenmar - Tribunal : Rhin</h6>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-md-1 ">
            <img src="../Images/Maisons/Bonisagus.gif" alt="Bonisagus">
        </div>
        <div class="col text-justify">
            Bonisagus ayant inventé la théorie Hermétique de la magie et son élève Trianoma supervisant la formation
            de
            l'Ordre, cette Maison a toujours bénéficié d'un grand respect de la part des autres Mages. Ses membres
            perpétuent les traditions théoriques et politiques, certains s'attachant à étendre et à raffiner la
            théorie
            Hermétique, d'autres contrôlant le développement politique de l'Ordre. La plupart ont le sentiment
            d'appartenir à une élite. Toutefois, la coutume veut qu'ils utilisent leurs connaissances et leur
            pouvoir
            pour le bien de l'Ordre. L'égoïsme leur est fortement déconseillé.
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <a href="../Images/Maisons/Bonisagus-Exemple.pdf" target="_blank">Exemple</a>
        </div>
    </div>
    <div class="row">&nbsp;</div>
    <hr>
    <!-- Criamon -->
    <div class="row text-center ">
        <legend>Criamon</legend>
    </div>
    <div class="row">
        <div class="col text-center">
            <h6>Domus Magna : La Grotte des Ombres Tordues - Tribunal : Grandes Alpes</h6>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-md-1 ">
            <img src="../Images/Maisons/Criamon.gif" alt="Criamon">
        </div>
        <div class="col text-justify">
            Cette Maison extrêmement secrète est connue pour sa philosophie obscure, son mépris du pouvoir et
            l'habitude
            qu'ont ses thaumaturges de se peindre de symboles mystiques le corps et le visage. Il s'agit d'un groupe
            de
            Mages énigmatiques, n'éprouvant que peu d'intérêt pour la politique de l'Ordre. Ils recherchent
            "l'énigme",
            qui semble être quelque mystérieuse expérience mystique.
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <a href="../Images/Maisons/Criamon-Exemple.pdf" target="_blank">Exemple</a>
        </div>
    </div>
    <div class="row">&nbsp;</div>
    <hr>
    <!-- ExMiscellanea -->
    <div class="row text-center ">
        <legend>ExMiscellanea</legend>
    </div>
    <div class="row">
        <div class="col text-center">
            <h6>Domus Magna : Cad Gadu - Tribunal : Stonehenge</h6>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-md-1 ">
            <img src="../Images/Maisons/ExMiscellanea.gif" alt="ExMiscellanea">
        </div>
        <div class="col text-justify">
            Quoiqu’originellement fondée en tant que structure rivale par un dissident de l’Ordre d’ Hermès, cette
            organisation a fini par être acceptée au sein de ce dernier comme une Maison à part entière. Elle
            comprend
            des magiciens de tout poil, beaucoup n'ayant d'Hermétique que le nom. En fait, la plupart des membres de
            cette Maison sortent de la classe paysanne. Ils forment un groupe important, très diversifié et encore
            plus
            désorganisé. La plupart de leurs détracteurs les qualifient de "magiciens parallèles".
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <a href="../Images/Maisons/ExMiscellanea-Exemple.pdf" target="_blank">Exemple</a>
        </div>
    </div>
    <div class="row">&nbsp;</div>
    <hr>
    <!-- Flambeau -->
    <div class="row text-center ">
        <legend>Flambeau</legend>
    </div>
    <div class="row">
        <div class="col text-center">
            <h6>Domus Magna : Castra Solis - Tribunal : Provençal</h6>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-md-1 ">
            <img src="../Images/Maisons/Flambeau.gif" alt="Flambeau">
        </div>
        <div class="col text-justify">
            Ces Mages féroces et agressifs causent souvent des troubles au sein de l'Ordre et sont réputés pour
            attiser
            régulièrement la colère des vulgaires. Leur courage et leur amour des sorts destructeurs les rendent
            pourtant appréciables lors des Marches de Magiciens et autres opérations militaires majeures. Les
            membres de
            cette Maison croient que le monde est peuplé d'individus et de choses qui ne font que causer des ennuis
            et
            que la seule solution consiste à les bruler. Si la plupart d'entre eux sont spécialisés en lgnem,
            certains
            voient en Perdo une alternative plus subtile.
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <a href="../Images/Maisons/Flambeau-Exemple.pdf" target="_blank">Exemple</a>
        </div>
    </div>
    <div class="row">&nbsp;</div>
    <hr>
    <!-- Jerbiton -->
    <div class="row text-center ">
        <legend>Jerbiton</legend>
    </div>
    <div class="row">
        <div class="col text-center">
            <h6>Domus Magna : Valnastium - Tribunal : Grandes Alpes</h6>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-md-1 ">
            <img src="../Images/Maisons/Jerbiton.gif" alt="Jerbiton">
        </div>
        <div class="col text-justify">
            La maison Jerbiton s'intéresse au monde extérieur et assume la tache de garder l'Ordre en bons termes
            avec
            l'église et la noblesse. Leurs apprentis sont souvent choisis dans l'aristocratie et ne rompent pas les
            liens avec leur famille. Les autres Mages estiment ceux de Jerbiton trop liés aux puissances vulgaires
            pour
            qu'on puisse leur faire confiance, et les respectent assez peu. Les Mages de Jerbiton estiment que
            l'Ordre
            s'est trop éloigné de la réalité, que ses membres risquent un conflit sanglant avec les puissances
            mortelles
            et même de perdre leur propre humanité. Ils tentent énergiquement de combler cette brèche et
            s'intéressent
            avec passion aux arts et à la science antique.
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <a href="../Images/Maisons/Jerbiton-Exemple.pdf" target="_blank">Exemple</a>
        </div>
    </div>
    <div class="row">&nbsp;</div>
    <hr>
    <!-- Mercere -->
    <div class="row text-center ">
        <legend>Mercere</legend>
    </div>
    <div class="row">
        <div class="col text-center">
            <h6>Domus Magna : Harco - Tribunal : Romain</h6>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-md-1 ">
            <img src="../Images/Maisons/Mercere.gif" alt="Mercere">
        </div>
        <div class="col text-justify">
            Le fondateur de cette Maison a perdu ses pouvoirs magiques mais est demeuré au sein de l'Ordre, prenant
            en
            charge un rôle de première utilité pour tous les Mages en acheminement des messages. Ses suivants sont
            devenus les Toques Rouges, officiellement considérés comme des Mages de l'Ordre, même si la plupart sont
            incapables de lancer le moindre sort. Les membres de cette Maison connaissent de nombreux secrets mais
            ne
            s'en servent que pour se protéger. Ils méprisent la politique de l'Ordre et en restent aussi éloignés
            que
            possible. Les rares véritables Mages de Mercere se déplacent souvent en tant que Toques Rouges,
            rassemblant
            des renseignements, mais ne révèlent jamais leurs capacités magiques.
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <a href="../Images/Maisons/Mercere-Exemple.pdf" target="_blank">Exemple</a>
        </div>
    </div>
    <div class="row">&nbsp;</div>
    <hr>
    <!-- Merinita -->
    <div class="row text-center ">
        <legend>Merinita</legend>
    </div>
    <div class="row">
        <div class="col text-center">
            <h6>Domus Magna : Irencillia - Tribunal : Rhin</h6>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-md-1 ">
            <img src="../Images/Maisons/Merinita.gif" alt="Merinita">
        </div>
        <div class="col text-justify">
            Cette Maison s'intéresse essentiellement à l'univers des êtres féeriques et ses membres sont
            généralement
            aussi mystérieux que les créatures qu'ils étudient. Ils n'ont que peu de rapports avec les autres Mages,
            sauf lorsqu'ils doivent défendre contre eux l'Arcadie. Ils boudent le monde des mortels et cherchent la
            solution de l'énigme dans celui des êtres féeriques.
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <a href="../Images/Maisons/Merinita-Exemple.pdf" target="_blank">Exemple</a>
        </div>
    </div>
    <div class="row">&nbsp;</div>
    <hr>
    <!-- Guernicus -->
    <div class="row text-center ">
        <legend>Guernicus (Quaesitor)</legend>
    </div>
    <div class="row">
        <div class="col text-center">
            <h6>Domus Magna : Magvillus - Tribunal : Romain</h6>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-md-1 ">
            <img src="../Images/Maisons/Merinita.gif" alt="Guernicus">
        </div>
        <div class="col text-justify">
            Cette petite Maison mène les enquêtes et, souvent, rend la justice dans les affaires où le Code d'Hermès
            a
            été violé. Les Quaesitori ont acquis une grande influence au fil des années, tout en étendant et en
            raffinant le Code Périphérique, Ils sont convaincus que sans leur protection farouche du Code, l'Ordre
            s'effondrerait sous la pression de ses conflits internes. Pour les membres des autres Maisons, être
            invité
            par les ainés de celle-ci a devenir Quaesitor (juge) est un grand honneur.
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <a href="../Images/Maisons/Guernicus-Exemple.pdf" target="_blank">Exemple</a>
        </div>
    </div>
    <div class="row">&nbsp;</div>
    <hr>
    <!-- Tremere -->
    <div class="row text-center ">
        <legend>Tremere</legend>
    </div>
    <div class="row">
        <div class="col text-center">
            <h6>Domus Magna : Magvillus - Tribunal : Romain</h6>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-md-1 ">
            <img src="../Images/Maisons/Tremere.gif" alt="Tremere">
        </div>
        <div class="col text-justify">
            Voici une Maison raisonnable et bien organisée, qui a su faire preuve de courage et de force lorsque
            c'était
            nécessaire, et de retenue lorsque la paix représentait le meilleur choix. Ses membres mettent en avant
            l'importance du bon sens, de la stratégie et de la concertation. Ils croient au respect envers les
            supérieurs et se font eux-mêmes respecter de leurs inférieurs. La dignité est l'une de leurs principales
            préoccupations.
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <a href="../Images/Maisons/Tremere-Exemple.pdf" target="_blank">Exemple</a>
        </div>
    </div>
    <div class="row">&nbsp;</div>
    <hr>
    <!-- Tytalus -->
    <div class="row text-center ">
        <legend>Tytalus</legend>
    </div>
    <div class="row">
        <div class="col text-center">
            <h6>Domus Magna : Fudurus - Tribunal : Normandie</h6>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-md-1 ">
            <img src="../Images/Maisons/Tytalus.gif" alt="Tytalus">
        </div>
        <div class="col text-justify">
            Durant leur éternelle quête des conflits, les chefs de la Maison Tytalus sont allés trop loin, au
            dixième
            siècle, et ont étés corrompus par des démons. Dans leur arrogance, ils se sont crus capables de
            maitriser
            les forces obscures, mais même ces rois de l'intrigue ne pouvaient surpasser en ce domaine les forces
            infernales. Ils ont étés exécutés pour satanisme. Depuis, la Maison Tytalus est en disgrâce. Le but des
            Mages de Tytalus est de maitriser toutes les formes de conflits. Ils encouragent donc l'innovation en de
            nombreux domaines de ce type, notamment le Certamen. A moins d'être en lutte constante, ils n'ont pas le
            sentiment d'être vivants. Les membres de cette Maison ne cessent de mettre à l'épreuve les forces et les
            faiblesses des autres.
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <a href="../Images/Maisons/Tytalus-Exemple.pdf" target="_blank">Exemple</a>
        </div>
    </div>
    <div class="row">&nbsp;</div>
    <hr>
    <!-- Verditius -->
    <div class="row text-center ">
        <legend>Verditius</legend>
    </div>
    <div class="row">
        <div class="col text-center">
            <h6>Domus Magna : Verdi - Tribunal : Romain</h6>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-md-1 ">
            <img src="../Images/Maisons/Verditius.gif" alt="Verditius">
        </div>
        <div class="col text-justify">
            Les Mages de cette Maison ne peuvent guère utiliser la magie sans l'aide d'objets. Ils ne sont capables
            de
            lancer les sorts formels et les rituels qu'en se servant de Foci de sorts. Contrairement aux autres, les
            Mages de Verditius n'obtiennent pas de bonus lorsqu'ils utilisent un Focus, quoi qu'ils jettent les
            sorts
            spontanés normalement. Ces Mages se sont forgé un pouvoir significatif en se rendant fort précieux,
            puisqu'ils créent des objets enchantés pour les autres. Bien qu'ils aiment à prétendre leur puissance
            inférieure à celle de leurs confrères, elle n'en est pas moins considérable.
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <a href="../Images/Maisons/Verditius-Exemple.pdf" target="_blank">Exemple</a>
        </div>
    </div>
    <div class="row">&nbsp;</div>
</div>
