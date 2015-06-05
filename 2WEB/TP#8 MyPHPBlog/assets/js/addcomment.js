window.onload = function()
{
	var form = document.getElementById('addcomment');
	form.addEventListener('submit', function(ev)
	{
		ev.preventDefault();

		var xhr = new XMLHttpRequest();

		xhr.onreadystatechange = function() 
		{
			if(xhr.readyState == 4) 
			{
				if(xhr.status == 200) 
				{
					var comment = JSON.parse(xhr.responseText);
					document.getElementById('comments').innerHTML += "<li>On "+comment.date+",  "+comment.author+" said : <strong> "+comment.body+"</strong></li>";
				}
			}
		};
		xhr.open("POST", "./addComment.php?id=" + form.elements['postID'].value);
		xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xhr.send("content=" + form.elements['content'].value);

		form.querySelector('textarea').value = '';
	});
}