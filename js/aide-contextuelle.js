var etiquette;
var aide;

function initialiser(idAide, idEtiquette)
{
    aide = document.getElementById(idAide);
    etiquette = document.getElementById(idEtiquette);

    afficherAideContextuelle();
}


function afficherAideContextuelle()
{
    var texteAide = etiquette.title;
    etiquette.title = "";

    etiquette.onmouseover = function()
        {
            aide.innerHTML = texteAide;
            aide.style.display = "inline-block";
        }

    etiquette.onmouseout = function()
        {
            aide.innerHTML = "";
            aide.style.display = "none";
        }
}


