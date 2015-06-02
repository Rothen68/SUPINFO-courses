var xhr = new XMLHttpRequest(); // Erreur dans le cours
var flash = document.getElementById("content");

xhr.onreadystatechange = function() 
{
	if(xhr.readyState == 4) 
	{
		if(xhr.status == 200) 
		{
			flash.innerHTML = (xhr.responseText);
		}
		else
		{
			flash.innerHTML = "marche pas :("
		}
	}
};
xhr.open("GET", "./remote.html");
xhr.send(null);
