<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Espacium - Formulaire d'inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/membres.css">
    <script src="js/aide-contextuelle.js"></script>
</head>
<body onload="initialiser('aide-nom', 'label-nom');">
    <?php include "header.php"; ?>

    <div id="contenu-page">
        <ul>
            <li class="fil-ariane"><a href="./index.php">Accueil</a></li>
            <li class="fil-ariane"><a href="./membres.php">Membres</a></li>
            <li class="fil-ariane"><a href="./formulaire-inscription-a.php">Choix identifiants</a></li>
            <li class="fil-ariane"><a href="./formulaire-inscription-b.php">Renseignements personnels/Adresse</a></li>
        </ul>
        <form name="formulaire-inscription" method="post" action="formulaire-inscription-c.php">
            <fieldset>
                <legend>Inscription - PARTIE B</legend>
                <ul>
                    <h2>Renseignements personnels</h2>
                    <li>
                        <div class="aide-label" id="aide-nom"></div>
                        <label for="nom" id="label-nom" title="Ces renseignements sur votre identité sont confidentiels. Espacium vous garantit qu'ils ne seront divulgués sous aucun prétexte.">Renseignez votre nom : </label>
                        <input type="text" name="nom" id="nom" required>
                    </li>
                    <li>
                        <label for="prenom" id="label-prenom">Renseignez votre prénom : </label>
                        <input type="text" name="prenom" id="prenom" required>
                    </li>
                    <li>
                        <p>Sexe :</p>
                        <label for="sexe">Homme</label>
                        <input class="bouton-radio" type="radio" name="sexe" id="masculin">
                        <label for="sexe">Femme</label>
                        <input class="bouton-radio" type="radio" name="sexe" id="feminin">
                        <label for="sexe">Autre</label>
                        <input class="bouton-radio" type="radio" name="sexe" id="autre" checked>
                    </li>
                    <hr>
                    <h2> Adresse </h2>
                    <li>
                        <label for="num-adresse">Numéro de voie : </label>
                        <input type="number" name="num-adresse" id="num-adresse" required>             
                    </li>
                    <li>
                        <label for="voie-adresse">Nom de la voie : </label>
                        <input type="text" name="voie-adresse" id="voie-adresse" required>             
                    </li>
                    <li>
                        <label for="ville-adresse">Ville : </label>
                        <input type="text" name="ville-adresse" id="ville-adresse" required>             
                    </li>
                    <li>
                        <label for="code-adresse">Code postal : </label>
                        <input type="text" name="code-adresse" id="code-adresse" required>             
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