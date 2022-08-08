<?php
session_start();
if (empty($_SESSION["idUtilisateur"])) {
    header("Location:erreur.php");
}
include("Shared/header.php");
include("Shared/navbar.php");
include("../Model/BDD.php");
?>

<style type="text/css">
    <?php include ("../css/bgc.css")?>
    <?php include ("../css/background.css")?>
</style>

<!-- Jumbotron -->
<div class="container-fluid">
    <div class="jumbotron text-center">
        <h1 class="display-4">
            <strong>Background</strong>
    </div>
</div>
<br>
<div class="container">
    <div class="col text-justify">
        <legend><h2>Introduction</h2></legend>
        <p>L'ordre d’Hermès est une organisation de mages s’étendant sur toute l’Europe Mythique, voire un peu au-delà.
            Ses mille deux cents membres sont répartis en treize Tribunaux se partageant le continent.
            Si aucun groupe de la Dimension magique ne peut espérer rivaliser avec l’ensemble de l’Ordre, le pouvoir de
            Dieu dépasse largement celui des mages hermétiques.</p>
    </div>
    <br>
    <div class="col text-justify">
        <legend><h2>L’histoire de l’Ordre</h2></legend>
        <p>La pratique de la magie et de la sorcellerie remonte à l’aube de la civilisation.
            De tout temps, les individus pourvus du Don ont employé leur pouvoir pour dominer ceux qui en sont
            dépourvus, du moins pendant un temps.
            Ils finissent toujours mal, victimes de l’envie, la suspicion et la haine engendrées par le Don et leur
            comportement tyrannique.</p>

        <p>Trois causes expliquent qu’il ne se soit pas formé plus de sociétés ou d’ordres de magiciens.
            La première est liée aux effets du Don. Lorsque deux magiciens se rencontraient, ils ne se faisaient pas
            confiance et refusaient généralement de travailler ensemble.
            Et même dans le cas contraire, leur deuxième rencontre semait les germes de la trahison.
            La deuxième cause ne faisait qu’accentuer la première : l’absence de Résistance magique.
            Pour cette raison, un magicien frappant en premier était quasiment assuré de détruire son adversaire, ce qui
            incitait à effectuer des frappes
            préventives. Enfin, chaque magicien avait développé sa propre compréhension de la magie, ce qui rendait les
            échanges de connaissance longs et laborieux.
            Rien ou presque ne pouvait se partager facilement.</p>

        <p>L’une des rares réussites dans ce domaine, quoique partielle, fut le Culte romain de Mercure.
            Ses membres se rencontraient rarement en personne, communiquant par courrier ou par messager.
            Les grands rituels grâce auxquels le Culte se procurait son pouvoir étaient la seule exception.
            De plus, une règle du Culte spécifiait que quiconque tuait un membre du Culte devait être pourchassé et tué
            par les autres membres.
            Appliquée strictement, cette règle réduisit significativement le recours aux frappes préventives.
            Enfin, le Culte de Mercure avait accès à un certain nombre d’effets magiques faciles à apprendre, même par
            un individu en connaissant déjà plusieurs, ce qui encourageait les magiciens à partager leur savoir.</p>

        <p>Néanmoins, une rumeur enfla au sein du Culte, selon laquelle quelques membres amassaient les connaissances
            pour se préparer à une attaque décisive contre leurs pairs. Peu après la chute de l’Empire romain
            d’Occident, le Culte fut déchiré par les conflits internes, laissant des magiciens isolés dans toute
            l’Europe.
            La magie connut un âge sombre, dont elle n’émergea qu’avec la fondation de l’Ordre d’Hermès, trois cents ans
            plus tard.</p>
    </div>
    <br>
    <div class="col text-justify">
        <legend><h2>La fondation de l’Ordre</h2></legend>
        <p>L’Ordre d’Hermès doit son existence à Bonisagus, sans nul doute le plus grand génie
            magique ayant jamais vécu. Ses deux découvertes sont chacune assez importante pour
            lui valoir une place dans l’histoire de la magie.
            La première fut la Parma Magica, qui défend un
            magicien contre les sorts et le protège des effets
            antipathiques de leurs Dons. Ainsi abrité, un magicien
            peut parler à un autre individu pourvu du Don sans
            craindre d’être attaqué ni avoir à combattre en permanence une tendance naturelle à la jalousie, la
            suspicion
            et l’hostilité.</p>
        <p>La sorcière Trianoma fut la première à reconnaître
            l’immense potentiel de la Parma Magica. Suivant les enseignements de Bonisagus bien qu’elle possédât déjà le
            pouvoir, elle réalisa que la Parma Magica rendait viable
            une société de mages, où les magiciens pourraient se
            réunir pour régler leurs différends et travailler de
            concert. Bonisagus, qui travaillait déjà à son deuxième
            projet, une théorie unifiée de la magie, suivit avec joie
            sa vision.</p>
        <p>Trianoma voyagea d’un bout à l’autre de l’Europe,
            à la recherche des magiciens les plus puissants. Grâce à
            la Parma Magica, ils ne pouvaient la chasser, tandis que
            ses démonstrations de magie offensive en persuadèrent
            un grand nombre qu’elle aurait pu les éliminer sans
            crainte des conséquences si elle l’avait voulu. Certains
            s’enfuirent ou se cachèrent, espérant se soustraire à ses
            plans pernicieux. D’autres écoutèrent son rêve d’un
            ordre unifié et acceptèrent de rencontrer Bonisagus.</p>
        <p>De ces discussions, Bonisagus tira un savoir conséquent. À partir des traditions du Culte de Mercure,
            il développa les magies formelle et rituelle. À partir des traditions des druides, apportées par Diedne, une
            femme excommuniée de cette religion, il apprit à créer
            des effets magiques spontanés. Verditius lui apprit comment insuffler de la magie à des objets et Merinita
            l’art
            de contrôler les animaux. Bonisagus apprit quelque
            chose de chacun des onze magiciens qui vinrent le voir
            et, en échange, il leur enseigna la Parma Magica.</p>
        <p>Le résultat de ces études constitua la deuxième découverte fondamentale de Bonisagus : la théorie de la
            magie hermétique. En 767, les treize magiciens se rassemblèrent à Durenmar, dans la Forêt-Noire, et
            prononcèrent le Code d’Hermès, créant l’Ordre d’Hermès au
            cours du premier Tribunal.</p>
    </div>
    <br>
    <div class="col text-justify">
        <legend><h2>Les douze Fondateurs</h2></legend>
        <p>Les premiers mages de l’Ordre sont appelés les
            douze Fondateurs, bien qu’ils furent treize au premier
            Tribunal. Trianoma refusa d’être placée au niveau de
            Bonisagus ou des autres mages qu’elle lui avait amenés. Cet habile stratagème politique lui permit ensuite
            de dénouer les luttes d’influence plutôt que d’y être piégée. Chacun des douze Fondateurs établit une
            maison.
            La maison Ex Miscellanea actuelle fut fondée plus tard
            dans l’histoire de l’Ordre. Initialement, sa place était
            tenue par la maison Diedne, dont les membres étaient
            liés par leur adhérence à une ancienne religion païenne,
            qu’ils finirent par dominer complètement.</p>
        <p>L’Ordre entra immédiatement dans une période de
            croissance rapide. Les fondateurs des Vraies lignées
            recrutèrent des apprentis et leurs maisons s’étendirent. Les fondateurs des Cultes des mystères
            initièrent d’autres membres, recrutant parmi
            les magiciens les plus sympathiques. La maison
            Merinata n’étant pas encore un Culte des mystères, elle recrutait les mages s’intéressant à la nature. La
            maison Diedne cherchait à convertir à sa
            religion. La maison Jerbiton établit des ponts entre
            l’Ordre et les hautes sphères culturelles du monde profane, allant jusqu’à aborder Charlemagne. Et les mages
            des maisons Flambeau et Tytalus parcouraient le continent en tout sens, laissant le choix à tous les
            magiciens
            qu’ils rencontraient : se joindre à eux ou mourir.
            En à peine quarante ans, l’Ordre d’Hermès dominait le paysage magique européen</p>
    </div>
    <br>
    <div class="col text-justify">
        <legend><h2>Les crises de l’Ordre</h2></legend>
        <p>Cette domination perdure jusqu’à nos jours, en 1220.
            Néanmoins, un Ordre ayant traversé plus de quatre siècles
            a naturellement affronté sa part de crises et de problèmes.</p>
        <p><strong>Damhan-Allaidh et l’Ordo Miscellanea</strong></p>
        <p>Dans les premières années du neuvième siècle,
            Damhan-Allaidh, magicien puissant et maléfique des
            îles Britanniques, opposa une résistance organisée à
            l’Ordre d’Hermès. Plutôt que d’affronter les magiciens
            hermétiques en combat, ses fidèles usaient de malédictions, de pièges et d’assassins, harcelant les membres
            de l’Ordre pour stopper leur progression. Ces tactiques
            furent efficaces pendant plusieurs années, et l’on crut
            que l’Ordre ne passerait pas la Manche.</p>
        <p>Le Fondateur Tytalus confia à Pralix, la plus douée
            de ses apprentis, la tâche de vaincre Damhan-Allaidh. Faisant preuve d’autant de ruse que son adversaire,
            elle
            parvint à le défaire au terme d’une série spectaculaire
            d’assauts et de batailles magiques, ralliant un grand
            nombre de ses fidèles à sa cause.</p>
        <p>Alors que l’Ordre s’apprêtait à l’accueillir avec les
            honneurs, il ne reçut qu’un message. Pralix avait établi son propre ordre, l’Ordo Miscellanea, un rival de
            l’Ordre d’Hermès qui l’obligerait à se maintenir fort.
            Flambeau était d’avis de marcher immédiatement
            contre elle, mais Tytalus, impressionné par le cran de
            sa filia, imposa une négociation. En 817, l’Ordo Miscellanea rejoignit l’Ordre d’Hermès en tant que
            treizième
            maison, la maison Ex Miscellanea.</p>
        <p><strong>La domination de la maison Tremere</strong></p>
        <p>Le pouvoir de la maison Tremere augmentait lentement depuis la fondation de l’Ordre, Tremere lui-même
            contrôlant de près sa lignée. Grâce à l’emploi raisonné
            du certamen et à d’habiles alliances politiques, la maison s’était emparée du contrôle de plusieurs
            Tribunaux
            et était sur le point en obtenir d’autres. À la mort du
            onzième fondateur, Tremere était le seul de ses pairs encore vivant. Sa maison s’apprêtait à dominer
            l’ensemble
            de l’Ordre et à en faire un outil pour leurs projets.</p>
        <p>C’est alors qu’un groupe de mages dont les identités
            sont toujours inconnues brisa les esprits des lieutenants
            les plus proches de Tremere. Cet évènement, que l’on
            appelle la Brèche, abattit également tout l’édifice dressé
            par la Maison, les obligations envers ces mages et les
            menaces qu’ils représentaient cessant d’être un souci.
            Tremere lui-même rencontra les mages responsables de
            la Brèche, ou peut-être leurs représentants, et ils arrivèrent à un compromis. Si Tremere mourut peu après,
            sa maison honora le compromis et ne chercha plus jamais à dominer l’Ordre.</p>
        <p><strong>La corruption de la maison Tytalus</strong></p>
        <p>La maison Tytalus a toujours apprécié les défis. À
            la fin du dixième siècle, les dirigeants de la maison allèrent trop loin : en cherchant à contrôler les
            démons,
            ils ne réussirent qu’à être corrompus. Alors qu’ils entamaient une insidieuse campagne de corruption du
            reste de l’Ordre, ils furent découverts par une mage
            Tytalus, qui alerta les quaesitores. L’Ordre se consacra avec efficacité à l’élimination des diabolistes en
            son sein. La prima de la maison Tytalus, Tasgillia, fut
            la victime la plus remarquable, mais la maison perdit
            de nombreux membres et jamais elle ne retrouva l’ampleur de ses débuts.</p>
    </div>
    <br>
    <div class="col text-justify">
        <legend><h2>Le Schisme</h2></legend>
        <p>Juste après le changement de millénaire, l’Ordre
            d’Hermès commença à plonger dans l’anarchie. La corruption de la maison Tytalus rendit les mages encore
            plus paranoïaques vis-à-vis des activités clandestines
            de leurs confrères, même sans l’influence du Don. Ils
            s’inquiétèrent des tentatives pour pénétrer leurs secrets
            et préféraient éviter les enquêtes. De nombreuses disputes remontaient jusqu’aux Tribunaux, où le vote se
            trouvait bloqué, les mages refusant d’y prendre part.
            Durant cette période, de nombreux Tribunaux n’atteignirent pas leur quorum, les mages hésitant à quitter la
            sécurité de leurs alliances.</p>
        <p>Se sentant menacés, les mages recoururent à la
            guerre des magiciens, voire à des attaques illégales
            contre d’autres alliances. Les Quaesitores, les Toques
            Rouges, les Bonisagus et les autres mages intéressés
            par la survie de l’Ordre étaient trop peu nombreux.
            Ils constatèrent leur impuissance à imposer la raison
            quand plus personne ne voulait l’entendre.</p>
        <p>L’anarchie se développant, on crut que l’Ordre
            d’Hermès allait chuter, victime du même mal que le
            Culte de Mercure avant lui.</p>
        <p>Puis, la maison Tremere déclara la guerre à la maison Diedne. Les païens de cette maison s’étaient toujours
            tenus quelque peu à l’écart du reste de l’Ordre,
            essentiellement chrétien. De vilaines rumeurs s’étaient
            répandues quant à leurs coutumes religieuses, suite
            à la corruption de Tytalus, et on ne leur faisait plus
            confiance. Quand le primus de la maison Tremere, Cercistum, fit appel à l’Ordre pour l’aider à éliminer les
            diabolistes, la maison Flambeau se joignit à la bataille
            avec enthousiasme. Ils furent ralliés par de nombreux
            membres de la maison Jerbiton, qui s’inquiétaient depuis longtemps que l’Ordre abrite un culte païen. Les
            magiciens de plusieurs maisons se portèrent volontaires pour aider les Tremere, mais personne ne soutint
            publiquement les Diedne.</p>
        <p>Saisissant cette opportunité, les Bonisagus et les
            Quaesitores annoncèrent un Grand Tribunal en urgence, où l’ensemble de la maison Diedne fut Renié.
            Chaque mage hermétique avait maintenant le devoir de
            les pourchasser et de les abattre.</p>
        <p>La guerre qui suivit fut aussi sanglante que destructrice. La Maison fut anéantie. Cependant, on ne découvrit
            jamais ses dirigeants. Si l’Ordre espère que ses sorts
            les tuèrent, il craint encore qu’ils soient parvenus à s’enfuir dans un regio magique, où ils prendraient
            leur mal
            en patience en préparant leur vengeance.</p>
        <p>Avec la destruction des Diedne, le Schisme se résorba. Les Quaesitores avaient réussi à faire appliquer le
            Code durant les dernières phases de la guerre puisque
            tous les membres de l’Ordre s’étaient théoriquement
            unis contre un ennemi commun. Ayant connu le chaos
            et la destruction, la plupart des mages n’avaient aucune
            envie de les revivre. Ils respectèrent à nouveau les Tribunaux et l’Ordre retrouva sa stabilité.</p>
        <p>Depuis le Schisme, l’Ordre connaît une ère de paix
            et de coopération relative. Cependant, en 1220, les derniers mages se souvenant de la guerre sont morts ou
            tombés dans le Crépuscule ; la mémoire de cette époque
            effroyable est en train de s’effacer.</p>
    </div>
</div>