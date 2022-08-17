<?php
include("BDD.php");

class Delete
{
    /**
     * @param $idProjets
     * @return array|false
     */
    public function supprimerProjets($idProjets){
        $bdd = BDD::getInstance();
        $reponse = $bdd->prepare('DELETE FROM projets WHERE idProjets = "'.intval($idProjets).'"');
        $reponse->execute();
        $tab = $reponse->fetchAll();
        BDD::deconnexion($reponse);
        return $tab;
    }
}