<?php
include("../../Model/Create.php");

if (isset ($_POST ['nomSort']) && isset ($_POST ['techniqueSort']) && isset ($_POST ['formeSort']) && isset ($_POST ['niveauSort']) && isset ($_POST ['porteeSort'])
    && isset ($_POST ['dureeSort']) && isset ($_POST ['cibleSort']) && isset ($_POST ['typeSort']) && isset ($_POST ['versionSort']) && isset ($_POST ['descriptionSort'])) {
    $create = new Create();
    $ok = $create->EnregistrerSort($_POST ['nomSort'], intval($_POST ['techniqueSort']), intval($_POST ['formeSort']), intval($_POST ['niveauSort']), intval($_POST ['porteeSort']),
        intval($_POST ['dureeSort']), intval($_POST ['cibleSort']), intval($_POST ['typeSort']), intval($_POST ['versionSort']), $_POST ['descriptionSort']);
}

