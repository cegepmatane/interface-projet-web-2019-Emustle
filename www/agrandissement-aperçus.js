var finTexte;
var bouton;

function initialiser()
{
    finTexte = document.getElementById("fin-vigniette-rbo");
    bouton = document.getElementById("bouton-balancier-rbo");

    bouton.onclick = balancerTexte;
    bouton.ouvert = false;


}

function balancerTexte(evenement)
{
    if(bouton.ouvert)
    {
        evenement.preventDefault();

        finTexte.style.display="none";
        bouton.innerHTML = "+";
        bouton.ouvert = false;
    }
    else
    {
        evenement.preventDefault();
        finTexte.style.display="inline";
        bouton.innerHTML = "-";
        bouton.ouvert = true;
    }
}

