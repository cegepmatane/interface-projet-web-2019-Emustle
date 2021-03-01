<?php

class BaseDeDonnees{
    
    public static function getConnexion()
{
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        $bdd = 'espacium';
        $host = 'localhost';
        $login = 'postgres';
        $mdp = 'postRoot';
    
        $pdo = new PDO('pgsql:dbname=' .$bdd. ';host=' .$host, $login, $mdp);

        return $pdo;
    }
}