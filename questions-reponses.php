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
	<?php include "header.php"; ?>

    <div id="contenu-page">
        
    </div>
	
	<?php include "footer.php"; ?>