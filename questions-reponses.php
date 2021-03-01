<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Espacium - Membres</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/membres.css">
	<script src="js/footer.js"></script>
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
        
    </div>
	
	<?php include "footer.php"; ?>