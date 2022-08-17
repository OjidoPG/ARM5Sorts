<?php
include("BDD.php");

class Update
{
    /**
     * @param $descriptionProjets
     * @param $idProjets
     * @return array|false
     */
    public function editerProjetAlliance($descriptionProjets, $idProjets)
    {
        $bdd = BDD::getInstance();
        $reponse = $bdd->prepare('UPDATE projets SET Projets = "' . $descriptionProjets . '" WHERE idProjets="' . intval($idProjets) . '"');
        $reponse->execute();
        $tab = $reponse->fetchAll();
        BDD::deconnexion($reponse);
        return $tab;
    }

    /**
     * @param $descriptionProjets
     * @param $idProjets
     * @return array|false
     */
    public function editerProjetPersonnel($descriptionProjets, $idProjets)
    {
        $bdd = BDD::getInstance();
        $reponse = $bdd->prepare('UPDATE projets SET Projets = "' . $descriptionProjets . '" WHERE idProjets="' . intval($idProjets) . '"');
        $reponse->execute();
        $tab = $reponse->fetchAll();
        BDD::deconnexion($reponse);
        return $tab;
    }

    /**
     * @param $idProjets
     * @return array|false
     */
    public function ValiderProjetsAlliance($idProjets)
    {
        $bdd = BDD::getInstance();
        $reponse1 = $bdd->prepare('SELECT archive FROM projets WHERE idProjets="' . intval($idProjets) . '"');
        $reponse1->execute();
        $tab1 = $reponse1->fetchAll();
        if (intval($tab1[0]['archive']) == 1) {
            $reponse = $bdd->prepare('UPDATE projets SET archive = 0 WHERE idProjets="' . intval($idProjets) . '"');
            $reponse->execute();
            $tab = $reponse->fetchAll();
        } else {
            $reponse = $bdd->prepare('UPDATE projets SET archive = 1 WHERE idProjets="' . intval($idProjets) . '"');
            $reponse->execute();
            $tab = $reponse->fetchAll();
        }
        BDD::deconnexion($reponse);
        return $tab;
    }
}
