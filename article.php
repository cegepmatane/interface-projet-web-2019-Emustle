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
	<?php include "header.php"; ?>

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