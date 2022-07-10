<?php

/**
 * Classe gérant les accès à la base de données
 */
class BDD
{
    public static $_instance;
    public static $servername = "localhost";
    public static $dbname = "arm5";
    public static $username = "root";
    public static $password = "root";

    /**
     * @return void
     */
    private function __constructor()
    {
    }

    /**
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * @return mixed
     */
    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = BDD::connexion();
        }
        return self::$_instance;
    }

    /**
     * @return PDO|void
     */
    public static function connexion()
    {
        try {
            $bdd = new PDO(
                "mysql:host=" . BDD::$servername . ";
                dbname=" . BDD::$dbname . "; 
                charset=utf8",
                BDD::$username,
                BDD::$password
            );
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
        return $bdd;
    }

    /**
     * @param $reponse
     * @return void
     */
    public static function deconnexion($reponse): void
    {
        $reponse->closeCursor();
    }
}