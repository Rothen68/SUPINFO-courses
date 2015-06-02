Array.prototype.shuffle = function() {
	var i = this.length, j, temp;

	if ( i == 0 ) 
	{
		return this;
	}

	while ( --i ) 
	{
		j = Math.floor( Math.random() * ( i + 1 ) );
		temp = this[i];
		this[i] = this[j];
		this[j] = temp;
	}
	return this;
}

function randomize()
{
	var students = ["Julien Berton", "Toma BROCHARD", "Anthony CLAIN", "Alexandre D'HERBECOURT", "Clément GAUTHIER", "Alexandre GENG", "Dominique HAAS", "Jean Hugues HEW KIAN CHONG", "Léo JESER", "Amir MECHREKY", "Axel MEYER", "Alexandre MISSNER", "Ngoc Hoa NGUYEN", "Rémy SCHMIDT", "Qunetin SCHNEIDER", "Laura SPECK"];
	students.shuffle();
	document.getElementById("container").innerHTML = students[0]
}

