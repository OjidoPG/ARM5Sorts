<?php
include("BDD.php");

/**
 *
 */
class Create
{
    /**
     * @param $nomSort
     * @param $idTechniqueSort
     * @param $idFormeSort
     * @param $idNiveauSort
     * @param $idPorteeSort
     * @param $idDureeSort
     * @param $idCibleSort
     * @param $idTypeSort
     * @param $descriptionSort
     * @return void
     */
    public function EnregistrerSort($nomSort, $idTechniqueSort, $idFormeSort, $idNiveauSort, $idPorteeSort, $idDureeSort, $idCibleSort, $idTypeSort, $idVersionSort, $descriptionSort)
    {
        $bdd = BDD::getInstance();
        $reponse = $bdd->prepare("INSERT INTO sort (nomSort, idTechniqueSort, idFormeSort, idNiveauSort, idPorteeSort, idDureeSort, idCibleSort, idTypeSort, idVersionSort, descriptionSort, bibliotheque)
         VALUES(:nomSort, :idTechniqueSort, :idFormeSort, :idNiveauSort, :idPorteeSort, :idDureeSort, :idCibleSort, :idTypeSort, :idVersionSort, :descriptionSort, :bibliotheque)");
        $reponse->execute(array(
            'nomSort' => $nomSort,
            'idTechniqueSort' => $idTechniqueSort,
            'idFormeSort' => $idFormeSort,
            'idNiveauSort' => $idNiveauSort,
            'idPorteeSort' => $idPorteeSort,
            'idDureeSort' => $idDureeSort,
            'idCibleSort' => $idCibleSort,
            'idTypeSort' => $idTypeSort,
            'idVersionSort' => $idVersionSort,
            'descriptionSort' => $descriptionSort,
            'bibliotheque' => 0
        ));
        BDD::deconnexion($reponse);
    }

    /**
     * @param $nomUtilisateur
     * @param $prenomUtilisateur
     * @param $identifiantUtilisateur
     * @param $mdpUtilisateur
     * @return void
     */
    public function EnregistrerUtilisateur($nomUtilisateur, $prenomUtilisateur, $identifiantUtilisateur, $mdpUtilisateur)
    {
        $bdd = BDD::getInstance();
        $reponse = $bdd->prepare("INSERT INTO `utilisateur`(`nomUtilisateur`, `prenomUtilisateur`, `identifiantUtilisateur`, `mdpUtilisateur`) 
VALUES (:nomUtilisateur, :prenomUtilisateur, :identifiantUtilisateur, :mdpUtilisateur)");
        $reponse->execute(array(
            'nomUtilisateur' => $nomUtilisateur,
            'prenomUtilisateur' => $prenomUtilisateur,
            'identifiantUtilisateur' => $identifiantUtilisateur,
            'mdpUtilisateur' => password_hash($mdpUtilisateur, PASSWORD_DEFAULT)
        ));
        BDD::deconnexion($reponse);
    }
}