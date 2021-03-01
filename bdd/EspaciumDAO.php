<?php

require_once "BaseDeDonnees.php";

class EspaciumDAO{

    public static function lireArticle($id)
    {
        $REQUETE_LIRE_ARTICLE = "SELECT id, nom, auteur, resume, contenu FROM article WHERE id=:id;";

        $requete = BaseDeDonnees::getConnexion()->prepare($REQUETE_LIRE_ARTICLE);
        $requete->bindParam(':id', $id, PDO::PARAM_INT);
        $requete->execute();
        $article = $requete->fetch();
        return $article;
    }

    public static function listerArticles()
    {
        $REQUETE_LISTER_ARTICLE = "SELECT id, nom, auteur, resume, contenu, miniature FROM article ORDER BY id ASC;";

        $requete = BaseDeDonnees::getConnexion()->prepare($REQUETE_LISTER_ARTICLE);
        $requete->execute();
        $listeArticles = $requete->fetchAll();

        return $listeArticles;
    }
}

?>