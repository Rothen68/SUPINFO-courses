window.onload = function()
{
	var e = document.querySelector('#container').querySelector('header').querySelector('img');
	e.style.transition = 'all 1s ease';
	e.style.transform = 'rotate(180deg)';

	e.addEventListener('click', function()
	{
		var el = document.querySelector('#container').querySelector('header').querySelector('h1');
		var text = document.createElement('span');
		text.innerHTML = ' BLABLABLA'
		el.appendChild(text);
	});
}