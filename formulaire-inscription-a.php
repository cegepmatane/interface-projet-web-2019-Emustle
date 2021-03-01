<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Espacium - Formulaire d'inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/membres.css">
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
<body>
    <?php include "header.php"; ?>
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
    <?php include "footer.php"; ?>