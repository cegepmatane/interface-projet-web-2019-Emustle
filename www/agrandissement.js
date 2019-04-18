var finsTextes;
var boutons;

function initialiser()
{
    finsTextes = document.getElementsByClassName("fin-desc");
    boutons = document.getElementsByClassName("bouton-balancier");

    
    boutons[0].ouvert = false;
    boutons[1].ouvert = false;
    boutons[2].ouvert = false;
    boutons[0].onclick = balancerTexte1;
    boutons[1].onclick = balancerTexte2;
    boutons[2].onclick = balancerTexte3;
}

function balancerTexte1(evenement)
{
        if(boutons[0].ouvert)
        {
            evenement.preventDefault();
            finsTextes[0].style.display="none";
            boutons[0].innerHTML = "Voir plus";
            boutons[0].ouvert = false;
        }
        else
        {
            evenement.preventDefault();
            finsTextes[0].style.display="inline";
            boutons[0].innerHTML = "Voir moins";
            boutons[0].ouvert = true;
        }
}
function balancerTexte2(evenement)
{
        if(boutons[1].ouvert)
        {
            evenement.preventDefault();
            finsTextes[1].style.display="none";
            boutons[1].innerHTML = "Voir plus";
            boutons[1].ouvert = false;
        }
        else
        {
            evenement.preventDefault();
            finsTextes[1].style.display="inline";
            boutons[1].innerHTML = "Voir moins";
            boutons[1].ouvert = true;
        }
}
function balancerTexte3(evenement)
{
        if(boutons[2].ouvert)
        {
            evenement.preventDefault();
            finsTextes[2].style.display="none";
            boutons[2].innerHTML = "Voir plus";
            boutons[2].ouvert = false;
        }
        else
        {
            evenement.preventDefault();
            finsTextes[2].style.display="inline";
            boutons[2].innerHTML = "Voir moins";
            boutons[2].ouvert = true;
        }
}

