<?php

require "configuration.php";
require CHEMIN_BDD."EspaciumDAO.php";

$id = $_GET['id'];

$article = EspaciumDAO::lireArticle($id);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Espacium - Objets célestes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/objets-celestes.css">
	<script src="js/footer.js"></script>
</head>
<body onload="remplacerLienParImage()">
	<header>
        <h1><a href="index.php"></a><span>Espacium : Une vision de l'infiniment grand</span></h1>

		<nav>
			<ul>
				<li><a href="./index.php">Accueil</a></li>
				<li><a href="./articles.php">Nouvelles</a>
					<ul>
						<li><a href="./objets-celestes.html">Les objets célestes</a></li>
						<li><a href="./univers-expansion.html">Un univers en expansion</a></li>
						<li><a href="./trou-noir.html">Les trous noirs</a></li>
					</ul>
				</li>
				<li><a href="./mission.html">Mission</a></li>
				<li><a href="./membres.html">Membres</a></li>
				<li><a href="./contact.html">Contact</a></li>
			</ul>
		</nav>
	</header>

	<div id="contenu-page">
		<ul>
            <li class="fil-ariane"><a href="./articles.html">Articles</a></li>
            <li class="fil-ariane"><a href=""><?php echo $article['nom']; ?></a></li>
        </ul>
		<div id="titre-page">
			<h2><?php echo $article['nom']; ?></h2>
			<hr>
		</div>
        <?php echo $article['contenu']; ?>
	</div>

	<footer>
		<div>
			<div id="mentions-legales">
				<p>Mentions légales </p>
				<p>Développeur : Hy-Vong G.D.R.</p>
			</div>
		
			<ul id="liens-sociaux">
				<li>Pour nous suivre sur les réseaux :</li>
				<li>
					<a id="lien-facebook" href="https://www.facebook.com"></a>
					<a id="lien-twitter" href="https://www.twitter.com"></a>
					<a id="lien-instagram" href="https://www.instagram.com"></a>
                    <a id="lien-quora" href="https://www.quora.com"></a>
					<a id="lien-reddit" href="https://www.reddit.com"></a>
				</li>
			</ul>
		</div>
	</footer>
</body>
</html>