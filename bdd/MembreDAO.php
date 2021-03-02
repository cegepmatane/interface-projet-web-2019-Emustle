<?php

require_once "BaseDeDonnees.php";

class MembreDAO{

    public static function lireMembre($id)
    {
        $REQUETE_LIRE_MEMBRE = "SELECT id, nom, prenom, pseudonyme, courriel, mot_de_passe FROM membre WHERE id=:id;";

        $requete = BaseDeDonnees::getConnexion()->prepare($REQUETE_LIRE_MEMBRE);
        $requete->bindParam(':id', $id, PDO::PARAM_INT);
        $requete->execute();
        $membre = $requete->fetch();

        return $membre;
    }

    public static function listerMembreParCourriel($connexion)
    {
        $REQUETE_VALIDER_CONNEXION = "SELECT id, nom, prenom, pseudonyme, courriel, mot_de_passe
                                    FROM membre 
                                    WHERE courriel=:courriel";

        $requete = BaseDeDonnees::getConnexion()->prepare($REQUETE_VALIDER_CONNEXION);
        $requete->bindParam(':courriel', $connexion['email'], PDO::PARAM_STR);
        $requete->execute();
        $membreValide = $requete->fetch();

        return $membreValide;
    }
}

?>