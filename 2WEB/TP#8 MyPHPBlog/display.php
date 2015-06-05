<?php

require_once(__DIR__.'/classes/manager/PdoPostManager.class.php');
require_once(__DIR__.'/classes/entities/User.class.php');

session_start();

if(!isset($_SESSION['user'])):
	header('Location: ./login.php');
else:

$PM = new PdoPostManager();
$post = $PM->findPostById($_GET['id']);

?>

<!doctype html>
<head>
	<title>Posts list</title>
	<meta charset="utf-8" />
</head>
<body>
	<?php include('./inc/menu.php'); ?>
	<h1><?=$post->getTitle(); ?></h1>
	<em>by <?=$post->getUser()->firstname.' '.$post->getUser()->lastname?> on <?=date('d/m/Y H:i:s', $post->getPublicationDate())?> </em>
	<p>
		<?=$post->getBody()?>
	</p>
	<ul id="comments">
		<?php foreach ($post->getComments() as $c): ?>
		<li>
			On <?=date('d/m/Y H:i:s', $c->getPublicationDate())?>, <?=$c->getUser()->firstname.' '.$c->getUser()->lastname?> said : <strong><?=$c->getBody(); ?></strong>
		</li>
		<?php endforeach; ?>
	</ul>
	<h3>Add comment</h3>
	<form id="addcomment" action="" method="">
		<input type="hidden" name="postID" value="<?=$post->getId();?>" />
		<textarea name="content"></textarea>
		<input type="submit" value="ajouter" />
	</form>
	<script src="./assets/js/addcomment.js"></script>
</body>
</html>

<?php
endif;
?>