<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Espacium - Équipe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/equipe.css">
    <script type="text/javascript">
        var images;
        var textes;
        var imageGrande;

        function initialiser(nb)
        {
            images = document.getElementsByClassName("vignette");
            textes = document.getElementsByClassName("texte");
            imageGrande = document.getElementsByClassName("grandes-images");
            
            textes[nb].style.display = "none";
            imageGrande[nb].style.display = "none";
            
            afficherDescription(nb);
        }

        function afficherDescription(nb)
        {
            images[nb].onmouseover = function()
            {
                textes[nb].style.display = "inline-block";
                imageGrande[nb].style.display = "block";
            }

            images[nb].onmouseout = function()
            {
                textes[nb].style.display = "none";
                imageGrande[nb].style.display = "none";
            }
        }
    </script>
</head>
<body onload="initialiser(0); initialiser(1); initialiser(2); initialiser(3); initialiser(4);">
    <?php include "header.php"; ?>
    <div id="contenu-page">
        <div id="vignettes">
            <div class="vignette"><img src="decoration/img/einstein.jpg" alt="Albert Einstein"></div>
            <div class="vignette"><img src="decoration/img/musk.jpg" alt="ELon Musk"></div>
            <div class="vignette"><img src="decoration/img/armstrong.jpg" alt="Neil Armstrong"></div>
            <div class="vignette"><img src="decoration/img/hadfield.jpg" alt="Chris Hadfield"></div>
            <div class="vignette"><img src="decoration/img/pesquet.jpg" alt="Thomas Pesquet"></div>
        </div>
        <div id="cadre">
            <img class="grandes-images" src="decoration/img/einstein.jpg" alt="Albert Einstein">
            <img class="grandes-images" src="decoration/img/musk.jpg" alt="Albert Einstein">
            <img class="grandes-images" src="decoration/img/armstrong.jpg" alt="Albert Einstein">
            <img class="grandes-images" src="decoration/img/hadfield.jpg" alt="Albert Einstein">
            <img class="grandes-images" src="decoration/img/pesquet.jpg" alt="Albert Einstein">
            <div id="description">
                <p class="texte">
                    Albert Einstein né le 14 mars 1879 à Ulm, dans le Wurtemberg (Allemagne), et mort le 18 avril 1955 à Princeton, dans le New Jersey (États-Unis), est un physicien théoricien.
                    Il publie sa théorie de la relativité restreinte en 1905 et sa théorie de la gravitation dite relativité générale en 1915. Il contribue largement au développement de la mécanique quantique et de la cosmologie, et reçoit le prix Nobel de physique de 1921 pour son explication de l’effet photoélectrique. Son travail est notamment connu du grand public pour l’équation E=mc2, qui établit une équivalence entre la matière et l’énergie d’un système.
                </p>
                <p class="texte">
                    Elon Reeve Musk, né le 28 juin 1971 à Pretoria, est un entrepreneur, chef d'entreprise et ingénieur d'origine sud-africaine naturalisé canadien en 1988 puis américain en 2002. Il est actuellement installé à Los Angeles. Il est le PDG et directeur de la technologie de la société SpaceX mais également DG, directeur architecture produit de la société Tesla, et ancien président du conseil d'administration de SolarCity et de Tesla. Il est également le fondateur de The Boring Company, une société de construction de tunnels, et de Neuralink, une société de neurotechnologie.
                </p>
                <p class="texte">
                    Neil Alden Armstrong, né le 5 août 1930 à Wapakoneta dans l'Ohio aux États-Unis et mort le 25 août 2012 à Cincinnati dans le même État, est un astronaute américain, pilote d'essai, aviateur de l'United States Navy et professeur. Il est le premier homme à avoir posé le pied sur la Lune le 21 juillet 1969 UTC, durant la mission Apollo 11, prononçant alors une phrase restée célèbre : « C'est un petit pas pour [un] homme, [mais] un bond de géant pour l'humanité ».
                    En 1966, Armstrong effectue son premier vol spatial à bord de Gemini 8 et réalise le premier amarrage de deux engins spatiaux. Il est sélectionné comme commandant d'Apollo 11, la première mission à se poser sur la Lune. Le 20 juillet 1969, il pilote le module lunaire Apollo qui alunit. Avec son copilote Buzz Aldrin, Armstrong réalise une sortie extravéhiculaire d'une durée de deux heures vingt qui constitue les premiers pas de l'homme sur un autre corps que la Terre. Immédiatement après sa mission, Armstrong quitte le corps des astronautes.
 
                </p>
                <p class="texte">
                    Chris Austin Hadfield, né le 29 août 1959 à Sarnia en Ontario, est un astronaute canadien. Il est le premier Canadien à avoir exécuté une sortie extravéhiculaire et à avoir commandé la station spatiale internationale.

                    Ancien colonel et pilote de chasse de l'Aviation royale canadienne, il a participé aux vols de deux navettes spatiales de la NASA : STS-74 (Atlantis) en 1995 et STS-100 (Endeavour) en 2001. Le 19 décembre 2012, il s'envole pour une mission prolongée dans l'espace à bord du module russe Soyouz TMA-07M ; trois mois après son départ, il devient commandant de la station spatiale internationale au sein de l'Expédition 35, et ce jusqu'à son retour sur Terre, le 13 mai 2013. Durant la mission, il est très actif sur les réseaux sociaux, ce qui lui vaut une importante popularité. Il annonce sa retraite de l'Agence spatiale canadienne le 10 juin 2013.
                </p>
                <p class="texte">
                    Thomas Pesquet, né le 27 février 1978 à Rouen, est un spationaute français de l'Agence spatiale européenne (ESA). Après une formation d'ingénieur aéronautique, Thomas Pesquet a occupé différents postes dans l'industrie aérospatiale et au Centre National d'Etudes Spatiales (CNES) avant de devenir, en 2005, pilote de ligne. En 2009, il fait partie des six candidats retenus pour former le troisième groupe d'astronautes européens sélectionnés par l'ESA. Thomas Pesquet est le dixième Français à partir dans l'espace en décollant le 17 novembre 2016 à bord de Soyouz MS-03 dont l’équipage occupe la Station spatiale internationale de novembre 2016 à juin 2017. Durant cette mission, Thomas Pesquet a mené une centaine d'expériences dont la moitié développée par l'Agence spatiale européenne ou le CNES, l'autre moitié par la NASA. Il effectue deux sorties extravéhiculaires de six heures pour des missions de maintenance de la Station spatiale internationale.
                </p>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>