<?php
session_start();

// S'il y a eu envoi de formulaire
if(isset($_POST['submit']))
{
	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
	}
	else if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
	{
		$username = $_COOKIE['username'];
		$password = $_COOKIE['password'];
	}


	if($username == 'Plop' && $password == '1234')
	{
		$_SESSION['username'] = 'Plop';
		$_SESSION['password'] = '1234';

		if(isset($_POST['submit']) && isset($_POST['cookie']))
		{
			setcookie('username', 'Plop', time() + 60 * 60 * 24 * 30);
			setcookie('password', '1234', time() + 60 * 60 * 24 * 30);
		}

		header('Location: ./index.php');
	}
	else
	{
		$error = true;
		setcookie('username', '', 1);
		setcookie('password', '', 1);
	}
}


?>
<!doctype html>
<html lang="fr">
<head>
	<title>Al-Bhed Translator Login</title>
</head>
<body>
	<h1>Al-Bhed Translator</h1>
	<?php if(isset($error) && $error): ?>
		<strong style="color:red">Mauvais identifiant</strong>
	<?php endif; ?>
	<form action="#" method="post">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" value="" /><br/>
		<label for="password">Username:</label>
		<input type="password" id="password" name="password" value="" /><br/>
		<label for="cookie">Se souvenir de moi ?</label>
		<input type="checkbox" name="cookie" id="cookie" value="on" />
		<input type="submit" name="submit" value="submit" />
	</form>
</body>
</html>
