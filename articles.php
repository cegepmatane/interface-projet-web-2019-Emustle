<?php

require "configuration.php";
require CHEMIN_BDD . "EspaciumDAO.php";

$listeArticles = EspaciumDAO::listerArticles();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Espacium - Articles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/articles.css">
    <script src="js/lightbox-plus-jquery.js"></script>
	<script src="js/agrandissement.js"></script>
    <script>
        function decompteArticles()
        {
            var decompte = document.getElementById("decompte");
            var nbArticles = document.getElementsByClassName("article").length + document.getElementsByClassName("article-miroir").length;
            
            decompte.innerHTML += "Nom d'articles : " + nbArticles;
        }
    </script>
</head>
<body onload="decompteArticles(); initialiser();">
	<?php include "header.php"; ?>

	<div id="contenu-page">
        <ul>
            <li class="fil-ariane"><a href="./index.php">Accueil</a></li>
            <li class="fil-ariane"><a href="./articles.php">Articles</a></li>
        </ul>
        <div id="decompte"></div>

		<?php
		foreach ($listeArticles as $article) 
		{
		?>

		<div class="article<?php if($article['id'] % 2 == 0) { echo "-miroir"; } ?>">
			<img src="./decoration/img/<?php echo $article['miniature']; ?>" alt="">
			<div class="desc-article">
				<h2><?php echo $article['nom']; ?></h2>
				<p class="debut-desc">
					<?php echo $article['resume']; ?>
				</p>
                <p class="fin-desc" id="fin-desc-1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					Cras dapibus est vitae magna scelerisque, porta placerat lacus ornare.
					Integer quis ipsum elit. Donec orci velit, interdum in sapien scelerisque, lobortis viverra eros.
					In non sagittis odio. Curabitur ac mattis lectus.
                </p>
                <div class="bouton">
                    <a class="bouton-balancier" id="bouton-balancier-2">Voir plus</a>
                </div>
                <div class="lien-article">
				    <a href="article.php?id=<?php echo $article['id']; ?>">Lire l'article...</a>
                </div>
			</div>
		</div>

		<?php
		}
		?>
	</div>

	<?php include "footer.php"; ?>