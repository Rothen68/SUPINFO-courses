<?php

require_once(__DIR__.'/classes/manager/PdoPostManager.class.php');
require_once(__DIR__.'/classes/entities/User.class.php');

session_start();

if(!isset($_SESSION['user'])):
	header('Location: ./login.php');
else:

$PM = new PdoPostManager();

?>

<!doctype html>
<head>
	<title>Posts list</title>
	<meta charset="utf-8" />
</head>
<body>
	<h1>Posts List Page</h1>
	<?php include('./inc/menu.php'); ?>
	<table>
		<tr>
			<th>Title</th>
			<th>Body</th>
			<th>Date</th>
			<th>User</th>
			<th>Action</th>
		</tr>
		<?php foreach($PM->findAllPosts() as $post): ?>
		<tr>
			<td><?=$post->getTitle()?></td>
			<td><?=$post->getBody()?></td>
			<td><?=date('d/m/Y H:i:s', $post->getPublicationDate())?></td>
			<td><?=$post->getUser()->firstname.' '.$post->getUser()->lastname?></td>
			<td>
				<a href="display.php?id=<?=$post->getId()?>">display</a>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>

<?php
	endif;
?>
