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
    <?php include "header.php"; ?>

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