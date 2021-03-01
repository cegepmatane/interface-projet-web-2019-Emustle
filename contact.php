<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Espacium - Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/contact.css">
	<script>

		var erreurCourriel = false;

		
		function verifierEmail()
		{
			if (!(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(document.getElementById("adresse-email").value)))
			{
				var divCourriel = document.getElementById("courriel");
				erreurCourriel = true;
			}
			else
			{
				//alert("faux");
				divCourriel.removeAttribute("style");
				document.getElementById("erreur-courriel").removeAttribute("innerText");
				erreurCourriel = false;
			}

			if (erreurCourriel == true)
			{	
				//alert("ça va dans le erreur");
				divCourriel.style.border = "thin solid #FF0000";
				document.getElementById("adresse-email").style.border = "thin solid #FF0000";
				document.getElementById("erreur-courriel").innerText = "Format de courriel invalide";
				document.getElementById("erreur-courriel").style.color = "#FF0000";

				return false;
			}
		}

	</script>
</head>
<body>
    <?php include "header.php"; ?>

	<br><br>
    <div id="contenu-page">
        <ul>
            <li class="fil-ariane"><a href="./index.php">Accueil</a></li>
            <li class="fil-ariane"><a href="./contact.php">Contact</a></li>
        </ul>
        <form>
            <fieldset>
                <legend>Pour nous contacter</legend>

                <label>Choisissez le sujet du message : </label>
                <select required>
                    <option value="">[Veuillez selectionner un sujet]</option>
                    <option value="erronnees">Informations erronnées</option>
                    <option value="ajout">Ajout d'informations</option>
                    <option value="collaboration">Collaboration</option>
                    <option value="conseils">Conseils</option>
                    <option value="autre">Autre</option>
                </select>
                <br><br>
                <label for="nom">Nom : </label>
                <input type="text" name="nom" id="nom" placeholder="ex: Dupont" required>
                <br><br>
                <label for="prenom">Prénom : </label>
                <input type="text" name="prenom" id="prenom" placeholder="ex: Jean" required>
                <br><br>
                <div id="courriel">
                    <label for="adresse-email">Adresse courriel : </label>
                    <input type="text" name="courriel" placeholder="ex: jean.dupont@domaine.fr" id="adresse-email" required>
                    <br>
                    <span id="erreur-courriel"></span>
                </div>
                <br><br>
                <p>Êtes-vous un scientifique en quête de gloire ?</p>
                <div>
                    <input class="bouton-radio" type="radio" id="scientifique-oui" name="scientifique" value="Oui">
                    <label for="scientifique">Oui</label>
                    <input class="bouton-radio" type="radio" id="scientifique-non" name="scientifique" required>
                    <label for="scientifique">Non</label>
                </div>
                <br>
                <label for="message">Message : </label>
                <textarea rows="5" cols="30" id="message" placeholder="ex: Je souhaiterais vous faire part..." required></textarea>
                <br><br>

                <input id="bouton" type="submit" value="Envoyer" onclick="return verifierEmail()">
            </fieldset>
        </form>
        <section id="horaire-dispo">
            <table>
                <caption style="font-size: 28px;">Tableau de disponibilité de l'administrateur</caption>
                <tr>
                    <th style="background-color: transparent; border: 0;"></th>
                    <th colspan="7">Semaine</th>
                </tr>
                <tr>
                    <th>Période</th>
                    <th>Lundi</th>
                    <th>Mardi</th>
                    <th>Mercredi</th>
                    <th>Jeudi</th>
                    <th>Vendredi</th>
                    <th>Samedi</th>
                    <th>Dimanche</th>
                </tr>
                <tr>
                    <th>Matin</th>
                    <td>✓</td>
                    <td>-</td>
                    <td>✓</td>
                    <td>-</td>
                    <td>✓</td>
                    <td>✓</td>
                    <td>✓</td>
                </tr>
                <tr>
                    <th>Après-midi</th>
                    <td>✓</td>
                    <td>✓</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>✓</td>
                    <td>✓</td>
                </tr>
            </table>
        </section>
    </div>
<?php include "footer.php"; ?>