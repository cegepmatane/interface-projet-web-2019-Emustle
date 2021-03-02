<?php

require "configuration.php";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Espacium - Profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/membres.css">
</head>
<body>
	<?php include "header.php"; ?>

    <div id="contenu-page">
        <ul>
            <li class="fil-ariane"><a href="./index.php">Accueil</a></li>
            <li class="fil-ariane"><a href="./membres.php">Membres</a></li>
            <li class="fil-ariane"><a href="./profil.php">Profil</a></li>
        </ul>
        
        <div>
            <p>Salut <?php echo $_SESSION['membre']['prenom']. " ". $_SESSION['membre']['nom'];?>
        </div>

        <div>
            <a href="deconnexion.php" style="color: red">Se déconnecter</a>
        </div>

    </div>
	<?php include "footer.php"; ?>