<ul>
	<?php if(isset($_SESSION['user'])): ?>
	<li><a href="./postList.php">List posts</a></li>
	<li><a href="./addPost.php">Add post</a></li>
	<li><a href="./logout.php">Log Out</a></li>
	<?php else: ?>
	<li><a href="./login.php">Log In</a></li>
	<?php endif; ?>
</ul>