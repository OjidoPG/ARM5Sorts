<?php
include("../../Model/Read.php");

if (isset ($_POST ['idTechniqueSort']) && isset ($_POST ['idFormeSort']) && isset ($_POST ['idJNiveauSort']) && isset ($_POST ['idNiveauSort']) && isset ($_POST ['idPorteeSort'])
    && isset ($_POST ['idDureeSort']) && isset ($_POST ['idCibleSort']) && isset ($_POST ['idTypeSort']) && isset ($_POST ['idVersionSort'])) {
    $read = new Read();
    $ok = $read->readSpeSorts(intval($_POST ['idTechniqueSort']), intval($_POST ['idFormeSort']), intval($_POST ['idJNiveauSort']), intval($_POST ['idNiveauSort']), intval($_POST ['idPorteeSort']),
        intval($_POST ['idDureeSort']), intval($_POST ['idCibleSort']), intval($_POST ['idTypeSort']), intval($_POST ['idVersionSort']));
    echo json_encode($ok);
}
?>
