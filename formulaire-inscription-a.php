<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Espacium - Formulaire d'inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/membres.css">
	<script src="js/footer.js"></script>
    <script>
        
        var erreur = false;
        
        function comparerMdp()
        {
            var mdp = document.getElementById('mdp');
            var confirmation = document.getElementById('confirmation-mdp');
            
            if(mdp.value != confirmation.value)
            {
                alert("Les mots de passe sont différents. Veuillez les changer afin qu'ils correspondent.");
                return false;
            }
        }
    </script>
</head>
<body onload="remplacerLienParImage();">
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
        <ul>
            <li class="fil-ariane"><a href="./index.php">Accueil</a></li>
            <li class="fil-ariane"><a href="./membres.php">Membres</a></li>
            <li class="fil-ariane"><a href="./formulaire-inscription-a.php">Choix identifiants</a></li>
        </ul>
        <form name="formulaire-inscription" method="post" action="formulaire-inscription-b.php">
            <fieldset>
                <legend>Inscription - PARTIE A</legend>
                <ul>
                    <h2>Choix identifiants</h2>
                    <li>
                        <label for="email">Entrez votre adresse e-mail : </label>
                        <input type="email" name="email" id="email" required>
                    </li>
                    <li>
                        <label for="pseudo">Choisissez un pseudonyme : </label>
                        <input type="text" name="pseudo" id="pseudo" required>
                    </li>
                    <li>
                        <label for="mdp">Choisissez un mot de passe (et gardez le secret !) : </label>
                        <input type="password" name="mdp" id="mdp" required>             
                    </li>
                    <li>
                        <label for="confirmation-mdp">Confirmez le mot de passe : </label>
                        <input type="password" name="confirmation-mdp" id="confirmation-mdp" required>
                    </li>
                    <hr>
                    <li>
                         <input id="bouton" type="submit" value="Envoyer" onclick="return comparerMdp()">
                    </li>
                </ul>
            </fieldset>
        </form>
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