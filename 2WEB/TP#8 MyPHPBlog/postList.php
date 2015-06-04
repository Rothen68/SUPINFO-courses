<?php

require_once(__DIR__.'/classes/manager/SimplePostManager.class.php');
require_once(__DIR__.'/classes/entities/User.class.php');

session_start();

if(!isset($_SESSION['user'])):
	header('Location: ./login.php');
else:

$PM = new SimplePostManager();

?>

<!doctype html>
<head>
	<title>Posts list</title>
</head>
<body>
	<h1>Posts List Page</h1>
	<ul>
		<?php foreach($PM->findAllPosts() as $post): ?>
		<li>
			<ul>
				<li><?=$post->getTitle()?></li>
				<li><?=$post->getBody()?></li>
				<li><?=date('d/m/Y H:i:s', $post->getPublicationDate())?></li>
				<li><?=$post->getUser()->firstname.' '.$post->getUser()->lastname?></li>
			</ul>
		</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>

<?php
	endif;
?>
