<?php
session_start();

if(isset($_SESSION['username'])): 
?>
<!doctype html>
<html lang="fr">
<head>
	<title>Al-Bhed Translator</title>
</head>
<body>
	<h1>Al-Bhed Translator</h1>
	<form action="./translate.php" method="post">
		<label for="string">Word to translate:</label>
		<input type="text" id="string" name="content" value="" />
		<input type="submit" value="submit" />
	</form>
</body>
</html>
<?php 
else:
	header('Location: ./login.php');
endif;
?>