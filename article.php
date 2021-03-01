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
</head>
<body>
	<header>
        <h1><a href="index.php"></a><span>Espacium : Une vision de l'infiniment grand</span></h1>

		<nav>
			<ul>
				<li><a href="./index.php">Accueil</a></li>
				<li><a href="./articles.php">Nouvelles</a>
					<ul>
						<li><a href="./objets-celestes.php">Les objets célestes</a></li>
						<li><a href="./univers-expansion.php">Un univers en expansion</a></li>
						<li><a href="./trou-noir.php">Les trous noirs</a></li>
					</ul>
				</li>
				<li><a href="./mission.php">Mission</a></li>
				<li><a href="./membres.php">Membres</a></li>
				<li><a href="./contact.php">Contact</a></li>
			</ul>
		</nav>
	</header>

	<div id="contenu-page">
		<ul>
            <li class="fil-ariane"><a href="./articles.php">Articles</a></li>
            <li class="fil-ariane"><a href=""><?php echo $article['nom']; ?></a></li>
        </ul>
		<div id="titre-page">
			<h2><?php echo $article['nom']; ?></h2>
			<hr>
		</div>
        <?php echo $article['contenu']; ?>
	</div>

	<?php include "footer.php"; ?>