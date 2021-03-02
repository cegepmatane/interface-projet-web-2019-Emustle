<?php

require "configuration.php";
require CHEMIN_BDD."MembreDAO.php";


if(isset($_SESSION['membre']))
{
	header("location: profil.php");
}

if(isset($_POST["action-connexion"]))
{
	//Filtrage des inputs
	$filtresConnexion = array();
	$filtresConnexion['email'] = FILTER_SANITIZE_EMAIL;
	$filtresConnexion['mdp'] = FILTER_SANITIZE_STRING;
	
	$connexion = filter_input_array(INPUT_POST, $filtresConnexion);

	if(!empty($connexion['email']) && !empty($connexion['mdp']))
	{
		$membre = MembreDAO::listerMembreParCourriel($connexion);

		if(isset($membre['mot_de_passe']) && password_verify($connexion['mdp'], $membre['mot_de_passe']))
		{
			$_SESSION['membre']['id'] = $membre['id'];
			$_SESSION['membre']['nom'] = $membre['nom'];
			$_SESSION['membre']['prenom'] = $membre['prenom'];
			$_SESSION['membre']['pseudonyme'] = $membre['pseudonyme'];
			$_SESSION['membre']['courriel'] = $membre['courriel'];

			header('location: profil.php');
		}
		else
		{
			$erreur = "Le mot de passe ou l'adresse e-mail est invalide";
		}
	}
	else
	{
		$erreur = "Veuillez renseigner tous les champs";
	}
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Espacium - Membres</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/membres.css">
	<script>

		var texteParDefaut = "email@cgmatane.qc.ca";

		function definirPseudoParDefaut() 
		{
			document.getElementById("email").value = texteParDefaut;
		}

		function effacerPseudoParDefaut()
		{
			if (document.getElementById("email").value == texteParDefaut)
			{
				document.getElementById("email").value = "";
			}
		}

		function quitterChampPseudo()
		{
			if (document.getElementById("email").value == "") 
			{
				document.getElementById("email").value = texteParDefaut;
			}
		}

	</script>
</head>
<body onload="definirPseudoParDefaut();">
	<?php include "header.php"; ?>

    <div id="contenu-page">
        <ul>
            <li class="fil-ariane"><a href="./index.php">Accueil</a></li>
            <li class="fil-ariane"><a href="./membres.php">Membres</a></li>
        </ul>
        <form name="formulaire-connexion" method="post" action="membres.php">
            <fieldset>
            <ul>
                <li>
                    <label for="email">Adresse e-mail : </label>
                    <input type="email" name="email" id="email">
                </li>
                <li>
                    <label for="mdp">Mot de passe : </label>
                    <input type="password" name="mdp" id="mdp">             
                </li>
                <li>
                    <input name="action-connexion" type="submit" value="Se connecter">
                </li>
            </ul>
			<?php
			if($erreur){
				echo "<h3 style='color: red;'>".$erreur."</h3>";
			}
			?>
            </fieldset>
        </form>
        <div id="inscription">
            <p>Pas encore de compte ?</p>
            <div id="lien-inscription">
                <a href="formulaire-inscription-a.php">S'inscrire</a>
            </div>
        </div>
    </div>
	<?php include "footer.php"; ?>