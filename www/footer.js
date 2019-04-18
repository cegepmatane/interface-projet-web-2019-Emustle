function remplacerLienParImage()
{
	var lienFacebook = new Image();
	var lienTwitter = new Image();
	var lienInstagram = new Image();
	var lienQuora = new Image();
	var lienReddit = new Image();

	lienFacebook.src = './decoration/facebook.png';
	lienTwitter.src = './decoration/twitter.jpg';
	lienInstagram.src = './decoration/instagram.png';
	lienQuora.src = './decoration/quora.png';
	lienReddit.src = './decoration/reddit.png';

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
	};lienQuora.onclick = function()
	{
 		window.location.href = 'https://www.quora.com/';
	};lienReddit.onclick = function()
	{
 		window.location.href = 'https://www.reddit.com/';
	};

	document.getElementById("lien-facebook").appendChild(lienFacebook);
	document.getElementById("lien-twitter").appendChild(lienTwitter);
	document.getElementById("lien-instagram").appendChild(lienInstagram);
	document.getElementById("lien-quora").appendChild(lienQuora);
	document.getElementById("lien-reddit").appendChild(lienReddit);
}
