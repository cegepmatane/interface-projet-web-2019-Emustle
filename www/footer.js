function remplacerLienParImage()
{
	var lienFacebook = new Image();
	var lienTwitter = new Image();
	var lienInstagram = new Image();

	lienFacebook.src = './decoration/facebook.png';
	lienTwitter.src = './decoration/twitter.jpg';
	lienInstagram.src = './decoration/instagram.png';

	lienFacebook.onclick = function()
	{
   		window.location.href = 'https://www.facebook.com/';
	};
	lienTwitter.onclick = function()
	{
	 	window.location.href = 'https://www.twitter.com/';
	};
	lienInstagram.onclick = function()
	{
 		window.location.href = 'https://www.instagram.com/';
	};

	document.getElementById("lien-facebook").appendChild(lienFacebook);
	document.getElementById("lien-twitter").appendChild(lienTwitter);
	document.getElementById("lien-instagram").appendChild(lienInstagram);
}
