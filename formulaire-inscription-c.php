<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Espacium - Formulaire d'inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/membres.css">
    <script src="js/aide-contextuelle.js"></script>
</head>
<body onload="initialiser('aide-naissance', 'label-naissance');">
    <?php include "header.php"; ?>

    <div id="contenu-page">
        <ul>
            <li class="fil-ariane"><a href="./index.php">Accueil</a></li>
            <li class="fil-ariane"><a href="./membres.php">Membres</a></li>
            <li class="fil-ariane"><a href="./formulaire-inscription-a.php">Choix identifiants</a></li>
            <li class="fil-ariane"><a href="./formulaire-inscription-b.php">Renseignements personnels</a></li>
            <li class="fil-ariane"><a href="./formulaire-inscription-c.php">Finalisation</a></li>
        </ul>
        <form name="formulaire-inscription" method="post" action="membres.php">
            <fieldset>
                <legend>Inscription - PARTIE C</legend>
                <ul>
                    <h2>LE PLUS IMPORTANT !</h2>
                    <li>
                        <label for="couleur">Choisissez votre couleur favorite: </label>
                        <input type="color" name="couleur" id="couleur" required>
                    </li>
                    <li>
                        <div class="aide-label" id="aide-naissance"></div>
                        <label for="naissance" id="label-naissance" title="Votre date de naissance ne nous sert qu'à vous souhaiter un joyeux anniversaire lorsque c'est votre jour de fête.">Renseignez votre date de naissance : </label>
                        <input type="date" name="naissance" id="naissance" required>
                    </li>
                    <hr>
                    <li>
                        <input id="bouton" type="submit" value="Envoyer" onclick="return comparerMdp()">
                    </li>
                </ul>
            </fieldset>
        </form>
    </div>
	<?php include "footer.php"; ?>