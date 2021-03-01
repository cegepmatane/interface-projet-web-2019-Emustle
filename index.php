<?php

require "configuration.php";
require CHEMIN_BDD . "EspaciumDAO.php";

$listeArticles = EspaciumDAO::listerArticles();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Espacium - Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/index.css">
	<script src="js/footer.js"></script>
	<script src="js/compte-rebours.js"></script>
    <script>
        function myFuntion()
        {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav")
            {
                x.className += " responsive";
            }
            else
            {
                x.className = "topnav";
            }
        }
    </script>
</head>

<body onload="remplacerLienParImage(); compte_a_rebours();">
	<header>
        <h1><a href="index.php"></a><span>Espacium : Une vision de l'infiniment grand</span></h1>

		<nav class="topnav">
			<ul>
				<li><a href="./index.php" class="active">Accueil</a></li>
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
                <li><a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a></li>
			</ul>
		</nav>
	</header>
	<div id=contenu-page>
		<div id="lancement-dart">
			<img id="img-lancement-dart" src="./decoration/img/lancement.jpg" alt="Lancement d'une fusée">
			<div id="compte-rebours">
				<noscript>Fin de l'évènement le 21 janvier 2020.</noscript>
			</div>
            <p>avant le lancement de la mission DART (Test de déviation d'un astéroïde double)</p>
		</div>
        <div id="corps-accueil">
            <section id="description">
                <h3>Bienvenue !</h3>
                <p>
                   Hé, toi ! Voyageur de l'Univers ! Tu es sur le site du groupe <span>Espacium</span>, rassemblement de passionnés de l'espace et de ses recoins encore secrets.
                </p>
                <hr>
                <p id="citation"> "Un être humain est une partie du tout que nous appelons 'Univers'... Une partie limitée dans le Temps et dans l'Espace" - Albert Einstein</p>
                <hr>
                <p>
                    Sur ce site web, tu retrouveras toute l'information dont tu as besoin pour commencer ton périple aux fins fonds de l'univers. Commences d'abord par te familiariser avec les différents corps célestes de base, comment ils interagissent entre eux et quel est leur rôle. Puis tu pourras diriger ton attention sur les phénomènes spéciaux qui composent notre monde comme les trous noirs, les supernovas, les nébuleuses, etc...
                    Enfin, découvre l'immensité de l'univers, le grand ensemble qui englobe tout ce qui existait, qui existe et qui existera, grâce à nos articles dédiés.
                </p>
                <img id="univers-accueil" src="decoration/img/univers-accueil.jpg" alt="Notre univers">
            </section>
            <section id="panneaux-lateraux">
                <div class="panneau" id="invite-inscription">
                    <p>Vous souhaitez devenir membre ?</p>
                    <div class="invite-action">
                        <a href="formulaire-inscription-a.php">Inscrivez-vous</a>
                    </div>
                </div>
                <div class="panneau" id="liste-articles">
                    <h3>Articles</h3>
                    <hr>

                    <?php
                    foreach ($listeArticles as $article) 
                    {
                    ?>

                    <div class="article">
                        <h4><?php echo $article['nom']; ?></h4>
                        <p style="text-align: justify"><?php echo $article['resume']; ?></p>
                        <a href="article.php?id=<?php echo $article['id']; ?>">En savoir plus</a>
                    </div>

                    <?php
                    }
                    ?>

                    <h4><a href="articles.php" id="lien-articles">Tous les articles</a></h4>
                </div>
                <div class="panneau" id="invite-contact">
                    <p>Vous avez une question ? Vous désirez apporter votre soutien au groupe ?</p>
                     <div class="invite-action">
                        <a href="contact.php">Contactez-nous</a>
                    </div>
                </div>
                <div class="panneau">
                    <p>Personnalités du Cosmos</p>
                     <div class="invite-action">
                        <a href="vignette-vedette.php">Voir plus</a>
                    </div>
                </div>
                <div class="panneau">
                    <p>Avant de poser une question, consultez la F.A.Q</p>
                     <div class="invite-action">
                        <a href="questions-reponses.php">Voir FAQ</a>
                    </div>
                </div>    
                <div class="panneau">
                    <p>Lien Galerie-mobile</p>
                     <div class="invite-action">
                        <a href="galerie-mobile.php">Voir les images</a>
                    </div>
                </div>
            </section>
        </div>
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