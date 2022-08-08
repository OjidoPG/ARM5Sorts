<?php
include("BDD.php");

class Read
{
    /**
     * @param $identifiant
     * @param $mdp
     * @return bool
     */
    public function verifyConnexion($identifiant, $mdp)
    {
        $identifiant = htmlspecialchars($identifiant);
        $mdp = htmlspecialchars($mdp);
        $bdd = BDD::getInstance();
        $reponse = $bdd->prepare('SELECT * FROM utilisateur WHERE identifiantUtilisateur = "' . $identifiant . '"');
        $reponse->execute();
        $tab = $reponse->fetch();
        BDD::deconnexion($reponse);
        if (empty($tab)) {
            return false;
        } else {
            session_start();
            $_SESSION["idUtilisateur"]=$tab["idUtilisateur"];
            $_SESSION["nomUtilisateur"]=$tab["nomUtilisateur"];
            return password_verify($mdp, $tab["mdpUtilisateur"]);
        }
    }

    /**
     * @return array|false
     */
    public function readCibleSort()
    {
        $bdd = BDD::getInstance();
        $reponse = $bdd->prepare('SELECT * FROM ciblesort');
        $reponse->execute();
        $tab = $reponse->fetchAll();
        BDD::deconnexion($reponse);
        return $tab;
    }

    /**
     * @return array|false
     */
    public function readDureeSort()
    {
        $bdd = BDD::getInstance();
        $reponse = $bdd->prepare('SELECT * FROM dureesort');
        $reponse->execute();
        $tab = $reponse->fetchAll();
        BDD::deconnexion($reponse);
        return $tab;
    }

    /**
     * @return array|false
     */
    public function readFormeSort()
    {
        $bdd = BDD::getInstance();
        $reponse = $bdd->prepare('SELECT * FROM formesort');
        $reponse->execute();
        $tab = $reponse->fetchAll();
        BDD::deconnexion($reponse);
        return $tab;
    }

    /**
     * @return array|false
     */
    public function readNiveauSort()
    {
        $bdd = BDD::getInstance();
        $reponse = $bdd->prepare('SELECT * FROM niveausort');
        $reponse->execute();
        $tab = $reponse->fetchAll();
        BDD::deconnexion($reponse);
        return $tab;
    }

    /**
     * @return array|false
     */
    public function readPorteeSort()
    {
        $bdd = BDD::getInstance();
        $reponse = $bdd->prepare('SELECT * FROM porteesort');
        $reponse->execute();
        $tab = $reponse->fetchAll();
        BDD::deconnexion($reponse);
        return $tab;
    }

    /**
     * @return array|false
     */
    public function readTechniqueSort()
    {
        $bdd = BDD::getInstance();
        $reponse = $bdd->prepare('SELECT * FROM techniquesort');
        $reponse->execute();
        $tab = $reponse->fetchAll();
        BDD::deconnexion($reponse);
        return $tab;
    }

    /**
     * @return array|false
     */
    public function readTypeSort()
    {
        $bdd = BDD::getInstance();
        $reponse = $bdd->prepare('SELECT * FROM typesort');
        $reponse->execute();
        $tab = $reponse->fetchAll();
        BDD::deconnexion($reponse);
        return $tab;
    }

    /**
     * @return array|false
     */
    public function readVersionSort()
    {
        $bdd = BDD::getInstance();
        $reponse = $bdd->prepare('SELECT * FROM versionsort');
        $reponse->execute();
        $tab = $reponse->fetchAll();
        BDD::deconnexion($reponse);
        return $tab;
    }

    /**
     * @return array|false
     */
    public function readSortsBibliotheque()
    {
        $bdd = BDD::getInstance();
        $reponse = $bdd->prepare('SELECT * FROM sort s
INNER JOIN ciblesort c ON s.idCibleSort=c.idCibleSort
INNER JOIN dureesort d ON s.idDureeSort=d.idDureeSort
INNER JOIN formesort f ON s.idFormeSort=f.idFormeSort
INNER JOIN niveausort n ON s.idNiveauSort=n.idNiveauSort
INNER JOIN porteesort p ON s.idPorteeSort=p.idPorteeSort
INNER JOIN techniquesort ts ON s.idTechniqueSort=ts.idTechniqueSort
INNER JOIN typesort ty ON s.idTypeSort=ty.idTypeSort
INNER JOIN versionsort v ON s.idVersionSort=v.idVersionSort
WHERE s.bibliotheque = 1;
');
        $reponse->execute();
        $tab = $reponse->fetchAll();
        BDD::deconnexion($reponse);
        return $tab;
    }

    /**
     * @param $idTechniqueSort
     * @param $idFormeSort
     * @param $idNiveauSort
     * @param $idPorteeSort
     * @param $idDureeSort
     * @param $idCibleSort
     * @param $idTypeSort
     * @return array|false
     */
    public function readSpeSorts($idTechniqueSort, $idFormeSort, $idJNiveauSort, $idNiveauSort, $idPorteeSort, $idDureeSort, $idCibleSort, $idTypeSort, $idVersionSort)
    {
        $tabId = [];
        if ($idTechniqueSort != 0) {
            $tabId["idTechniqueSort"] = $idTechniqueSort;
        }
        if ($idFormeSort != 0) {
            $tabId["idFormeSort"] = $idFormeSort;
        }
        if ($idNiveauSort != 0) {
            $tabId["idNiveauSort"] = $idNiveauSort;
        }
        if ($idPorteeSort != 0) {
            $tabId["idPorteeSort"] = $idPorteeSort;
        }
        if ($idDureeSort != 0) {
            $tabId["idDureeSort"] = $idDureeSort;
        }
        if ($idCibleSort != 0) {
            $tabId["idCibleSort"] = $idCibleSort;
        }
        if ($idTypeSort != 0) {
            $tabId["idTypeSort"] = $idTypeSort;
        }
        if ($idVersionSort != 0) {
            $tabId["idVersionSort"] = $idVersionSort;
        }
        $count = count($tabId);
        $requete = "SELECT * FROM sort s
INNER JOIN ciblesort c ON s.idCibleSort=c.idCibleSort
INNER JOIN dureesort d ON s.idDureeSort=d.idDureeSort
INNER JOIN formesort f ON s.idFormeSort=f.idFormeSort
INNER JOIN niveausort n ON s.idNiveauSort=n.idNiveauSort
INNER JOIN porteesort p ON s.idPorteeSort=p.idPorteeSort
INNER JOIN techniquesort ts ON s.idTechniqueSort=ts.idTechniqueSort
INNER JOIN typesort ty ON s.idTypeSort=ty.idTypeSort
INNER JOIN versionsort v ON s.idVersionSort=v.idVersionSort";
        if ($count != 0) {
            $requete = $requete . " WHERE (";
            foreach ($tabId as $table => $id) {
                if ($table == "idNiveauSort") {
                    if ($idJNiveauSort != 0) {
                        $requete = $requete . "s." . $table . " <= " . $id;
                    } else {
                        $requete = $requete . "s." . $table . " = " . $id;
                    }
                } else {
                    $requete = $requete . "s." . $table . " = " . $id;
                }
                $count--;
                if ($count != 0) {
                    $requete = $requete . " AND ";
                }
            }
            $requete = $requete . ")";
        }
        $bdd = BDD::getInstance();
        $reponse = $bdd->prepare($requete);
        $reponse->execute();
        $tab = $reponse->fetchAll();
        BDD::deconnexion($reponse);
        return $tab;
    }

    /**
     * @param $idUtilisateur
     * @return array|false
     */
    public function readPersonnage ($idUtilisateur){
        $bdd = BDD::getInstance();
        $reponse = $bdd->prepare('SELECT mage, compagnon FROM utilisateur where idUtilisateur = "' . $idUtilisateur . '"');
        $reponse->execute();
        $tab = $reponse->fetchAll();
        BDD::deconnexion($reponse);
        return $tab;
    }
}