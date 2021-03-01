<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Espacium - Galerie</title>
    <meta  charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/galerie.css">
    <script src="js/lazyload.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", yall);
    </script>
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
						<li><a href="./trou-noir.php">Les trous noirs</a></li>
						<li><a href="./univers-expansion.php">Un univers en expansion</a></li>
					</ul>
				</li>
				<li><a href="./mission.php">Mission</a></li>
				<li><a href="./membres.php">Membres</a></li>
				<li><a href="./contact.php">Contact</a></li>
			</ul>
		</nav>
	</header>
    <div id="contenu-page">
        <div id="images">
            <img class="image" src="decoration/img/milky-way.jpg" alt="Voie Lactée">
            <img class="image" src="decoration/img/etoile.jpg" alt="Etoile">
            <img class="image" src="decoration/img/galaxie.jpg" alt="Galaxie">
            <img class="image" src="decoration/img/milky-way.jpg" alt="Voie Lactée">
            <img class="image" src="decoration/img/etoile.jpg" alt="Etoile">
            <img class="image" src="decoration/img/galaxie.jpg" alt="Galaxie">
                        
            <img class="image lazy" src="decoration/img/blank.gif" alt="" data-src="decoration/img/musk.jpg">
            <img class="image lazy" src="decoration/img/blank.gif" alt="" data-src="decoration/img/hadfield.jpg">
            <img class="image lazy" src="decoration/img/blank.gif" alt="" data-src="decoration/img/pesquet.jpg">
            <img class="image lazy" src="decoration/img/blank.gif" alt="" data-src="decoration/img/einstein.jpg">
            <img class="image lazy" src="decoration/img/blank.gif" alt="" data-src="decoration/img/armstrong.jpg">
            <img class="image lazy" src="decoration/img/blank.gif" alt="" data-src="decoration/img/parallax11.jpg">
            <img class="image lazy" src="decoration/img/blank.gif" alt="" data-src="decoration/img/parallax12.jpg">
            <img class="image lazy" src="decoration/img/blank.gif" alt="" data-src="decoration/img/parallax21.jpg">
            <img class="image lazy" src="decoration/img/blank.gif" alt="" data-src="decoration/img/parallax22.jpg">
            <img class="image lazy" src="decoration/img/blank.gif" alt="" data-src="decoration/img/iss.jpg">
            <img class="image lazy" src="decoration/img/blank.gif" alt="" data-src="decoration/img/cosmonaute.jpg">
            <img class="image lazy" src="decoration/img/blank.gif" alt="" data-src="decoration/img/lancement.jpg">
        </div>
    </div>
	<?php include "footer.php"; ?>